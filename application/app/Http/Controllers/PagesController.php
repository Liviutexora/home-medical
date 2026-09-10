<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    private function doctorProfiles(): array
    {
        return [
            'dental' => [
                'slug' => 'dental',
                'name' => 'Dr. Sabrina Exe',
                'specialization' => 'Dental',
                'image' => 'assets/images/medical-general/brand/client-photos/3.jpg',
                'intro' => 'Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.',
                'address' => '4140 Parker Rd. Allentown, New Mexico 31134',
                'phone' => '(208) 555-0112',
                'email' => 'sabrina.exe@example.com',
            ],
            'traumatology' => [
                'slug' => 'traumatology',
                'name' => 'Dr. Zubair Hasan',
                'specialization' => 'Traumatology',
                'image' => 'assets/images/medical-general/brand/client-photos/7.jpg',
                'intro' => 'Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.',
                'address' => '215 Lake Street, Denver, Colorado 80202',
                'phone' => '(303) 555-0147',
                'email' => 'zubair.hasan@example.com',
            ],
            'neurology' => [
                'slug' => 'neurology',
                'name' => 'Dr. Nusrat Jenny',
                'specialization' => 'Neurology',
                'image' => 'assets/images/medical-general/brand/client-photos/8.jpg',
                'intro' => 'Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.',
                'address' => '782 Hillcrest Ave, Austin, Texas 78701',
                'phone' => '(512) 555-0188',
                'email' => 'nusrat.jenny@example.com',
            ],
            'pediatric' => [
                'slug' => 'pediatric',
                'name' => 'Dr. Zubair Hasan',
                'specialization' => 'Pediatric',
                'image' => 'assets/images/medical-general/brand/client-photos/9.jpg',
                'intro' => 'Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.',
                'address' => '350 Elm Street, Portland, Oregon 97205',
                'phone' => '(503) 555-0104',
                'email' => 'pediatric@example.com',
            ],
        ];
    }

    public function about_v_3()
    {
        return view('pages.about-v-3');
    }

    public function our_doctors()
    {
        return view('pages.our-doctors', ['doctors' => $this->doctorProfiles()]);
    }

    public function our_doctors_details($slug = null)
    {
        $doctors = $this->doctorProfiles();

        $doctor = $slug && isset($doctors[$slug]) ? $doctors[$slug] : $doctors['dental'];

        return view('pages.our-doctors-details', ['doctor' => $doctor]);
    }

    public function project()
    {
        return view('pages.project');
    }

    public function project_details()
    {
        return view('pages.project-details');
    }

    public function department()
    {
        return view('pages.department');
    }

    public function timetable()
    {
        return view('pages.timetable');
    }

    public function appointment()
    {
        return view('pages.appointment');
    }

    public function not_found()
    {
        return view('pages.404');
    }

    public function services_3()
    {
        return view('pages.services-3');
    }

    public function medicine_and_health()
    {
        return view('pages.medicine-and-health');
    }

    public function heart_specialist()
    {
        return view('pages.heart-specialist');
    }

    public function ear_nose_and_throat()
    {
        return view('pages.ear-nose-and-throat');
    }

    public function general_surgery()
    {
        return view('pages.general-surgery');
    }

    public function pregnancy_and_child_birth()
    {
        return view('pages.pregnancy-and-child-birth');
    }

    public function products()
    {
        return view('pages.products');
    }

    public function product_details()
    {
        return view('pages.product-details');
    }

    public function cart()
    {
        return view('pages.cart');
    }

    public function checkout()
    {
        return view('pages.checkout');
    }

    public function wishlist()
    {
        return view('pages.wishlist');
    }

    public function sign_up()
    {
        return view('pages.sign-up');
    }

    public function login()
    {
        return view('pages.login');
    }

    public function blog()
    {
        return view('pages.blog');
    }

    public function blog_standard()
    {
        return view('pages.blog-standard');
    }

    public function blog_details()
    {
        return view('pages.blog-details');
    }

    public function contact()
    {
        return view('pages.contact');
    }
}