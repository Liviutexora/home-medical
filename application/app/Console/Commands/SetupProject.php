<?php
namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\File;

class SetupProject extends Command
{
    protected $signature = 'setup';
    protected $description = 'Setup project for first time use';

    public function handle()
    {
        $this->info('====>> Starting project setup <<====');

        // Step 1: Copy .env if not exists
        if (!File::exists(base_path('.env'))) {
            $this->info('===> Copying .env file...');
            
            // Use File::get/put instead of File::copy for more control over the process
            $envExample = File::get(base_path('.env.example'));
            File::put(base_path('.env'), $envExample);
            
            // Set proper file permissions (644 = owner read/write, group/others read-only)
            chmod(base_path('.env'), 0644);
            
            // CRITICAL: Reload environment to prevent key:generate regex mismatch
            // Laravel caches config at boot. Without this, key:generate looks for 
            // the OLD app.key value (null) instead of the empty string in new .env
            $this->reloadEnvironment();
            
            $this->info('===> Generating application key...');
            
            // Attempt Laravel's built-in key:generate command first
            $exitCode = Artisan::call('key:generate', ['--force' => true]);
            $output = Artisan::output();
            
            // Fallback to manual generation if key:generate fails
            // This can happen if the regex pattern still doesn't match
            if ($exitCode !== 0 || str_contains($output, 'Unable to set application key')) {
                $this->warn('===> Standard method failed. Using manual generation...');
                $this->manuallyGenerateKey();
            } else {
                $this->info('Application key set successfully.');
            }
            
        } else {
            $this->warn('===> .env already exists. Skipping copy.');
            
            // Check if existing .env has an empty APP_KEY and generate if needed
            $envContent = File::get(base_path('.env'));
            if (preg_match('/^APP_KEY=\s*$/m', $envContent)) {
                $this->info('===> APP_KEY is empty. Generating application key...');
                $this->manuallyGenerateKey();
            }
        }

        // Step 2: Prevent accidental re-installation
        // Lock file acts as a safety mechanism to avoid data loss from re-running migrations
        if (File::exists(storage_path('app/installed.lock'))) {
            $this->info('To re-run setup, you must delete the lock file manually: storage/app/installed.lock');
            $this->warn('====>> Project already installed. Skipping setup <<====');
            return 0;
        }

        // Step 3: Run database migrations
        $this->info('===> Running migrations...');
        // --force flag allows migrations in production environments
        Artisan::call('migrate', ['--force' => true]);

        // Step 4: Fix directory permissions for Laravel's writable directories
        $this->info('===> Fixing permissions for storage and bootstrap/cache...');
        // 0775 = owner/group read/write/execute, others read/execute
        // @ suppresses warnings if chmod fails (e.g., Windows or restricted environments)
        @chmod(storage_path(), 0775);
        @chmod(base_path('bootstrap/cache'), 0775);

        // Step 5: Create installation lock file to prevent re-running
        // This file serves as both a flag and a log of when setup completed
        File::put(storage_path('app/installed.lock'), <<<TEXT
📦 Laravel Project Installed

✅ Installation Timestamp: {$this->now()}

🔧 Setup Steps Completed:
- .env file created and application key generated
- Database migrations run
- Storage and cache permissions fixed

📁 This file marks that the initial setup has been completed.
To re-run setup, you must delete this file manually: storage/app/installed.lock
TEXT);

        $this->info('
===>>>> Project setup completed successfully :) <<<<===
');
        $this->comment('Note: Now you can run [php artisan serve] to start the server.');
        $this->info('==>>> Visit: http://127.0.0.1:8000 // http://localhost:8000 // http://your-domain.com <<<==
');
        
        return 0;
    }

    /**
     * Reload environment variables from .env file
     * 
     * Required because Laravel caches config at boot time. When we create a new
     * .env file, Laravel still has the old config in memory, causing key:generate
     * to fail with "No APP_KEY variable was found"
     */
    protected function reloadEnvironment()
    {
        // Force Dotenv to re-read the .env file
        $dotenv = \Dotenv\Dotenv::createImmutable(base_path());
        $dotenv->load();
        
        // Clear Laravel's cached config
        Artisan::call('config:clear');
        
        // Update the in-memory config with the new APP_KEY value
        $this->laravel['config']->set('app.key', env('APP_KEY'));
    }

    /**
     * Manually generate and set the APP_KEY in .env file
     * 
     * This method is more reliable than key:generate because it directly
     * manipulates the .env file without relying on Laravel's config cache.
     * Uses the same encryption standards as Laravel (32-byte random key with base64 encoding)
     */
    protected function manuallyGenerateKey()
    {
        // Generate cryptographically secure 32-byte random key
        // base64: prefix tells Laravel to base64_decode it before use
        $key = 'base64:' . base64_encode(random_bytes(32));
        
        $envPath = base_path('.env');
        $envContent = File::get($envPath);
        
        // Use regex to find and replace APP_KEY line (with any existing value)
        // ^APP_KEY=.*$ matches the entire line from start to end
        // /m flag enables multiline mode so ^ and $ match line boundaries
        $envContent = preg_replace(
            '/^APP_KEY=.*$/m',
            'APP_KEY=' . $key,
            $envContent
        );
        
        File::put($envPath, $envContent);
        
        $this->info("Application key set successfully.");
    }

    /**
     * Get current timestamp in Laravel's default format
     */
    protected function now()
    {
        return now()->toDateTimeString();
    }
}