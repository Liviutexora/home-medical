<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    private function doctorProfiles(): array
    {
        return [
            'oniciu-marciana-alexandra' => [
                'slug' => 'oniciu-marciana-alexandra',
                'name' => 'Oniciu Marciana Alexandra',
                'specialization' => 'Medicină internă',
                'image' => 'assets/images/team/team-page-v1-1.jpg',
                'intro' => 'Medic în cadrul clinicii Home Medical.',
                'address' => 'Adresa clinicii',
                'phone' => '+40 (000) 000-0000',
                'email' => 'contact@home-medical.ro',
            ],
            'dumitru-cristina-stefania' => [
                'slug' => 'dumitru-cristina-stefania',
                'name' => 'Dumitru Cristina Ștefania',
                'specialization' => 'ORL',
                'image' => 'assets/images/team/team-page-v1-2.jpg',
                'intro' => 'Medic în cadrul clinicii Home Medical.',
                'address' => 'Adresa clinicii',
                'phone' => '+40 (000) 000-0000',
                'email' => 'contact@home-medical.ro',
            ],
            'agajani-heshmatollah' => [
                'slug' => 'agajani-heshmatollah',
                'name' => 'Agajani Heshmatollah',
                'specialization' => 'Dermatologie',
                'image' => 'assets/images/team/team-page-v1-3.jpg',
                'intro' => 'Medic în cadrul clinicii Home Medical.',
                'address' => 'Adresa clinicii',
                'phone' => '+40 (000) 000-0000',
                'email' => 'contact@home-medical.ro',
            ],
            'ciobanu-andra-vera-livia' => [
                'slug' => 'ciobanu-andra-vera-livia',
                'name' => 'Ciobanu Andra Vera Livia',
                'specialization' => 'Psihiatrie',
                'image' => 'assets/images/team/team-page-v1-4.jpg',
                'intro' => 'Medic în cadrul clinicii Home Medical.',
                'address' => 'Adresa clinicii',
                'phone' => '+40 (000) 000-0000',
                'email' => 'contact@home-medical.ro',
            ],
            'buta-marius-catalin' => [
                'slug' => 'buta-marius-catalin',
                'name' => 'Buță Marius Cătălin',
                'specialization' => 'Pneumologie',
                'image' => 'assets/images/team/team-page-v1-1.jpg',
                'intro' => 'Medic în cadrul clinicii Home Medical.',
                'address' => 'Adresa clinicii',
                'phone' => '+40 (000) 000-0000',
                'email' => 'contact@home-medical.ro',
            ],
            'abdel-majid-damra' => [
                'slug' => 'abdel-majid-damra',
                'name' => 'Abdel Majid Damra',
                'specialization' => 'Gastroenterologie',
                'image' => 'assets/images/team/team-page-v1-2.jpg',
                'intro' => 'Medic în cadrul clinicii Home Medical.',
                'address' => 'Adresa clinicii',
                'phone' => '+40 (000) 000-0000',
                'email' => 'contact@home-medical.ro',
            ],
            'talan-claudia-loredana' => [
                'slug' => 'talan-claudia-loredana',
                'name' => 'Țălan Claudia Loredana',
                'specialization' => 'Recuperare medicală',
                'image' => 'assets/images/team/team-page-v1-3.jpg',
                'intro' => 'Medic în cadrul clinicii Home Medical.',
                'address' => 'Adresa clinicii',
                'phone' => '+40 (000) 000-0000',
                'email' => 'contact@home-medical.ro',
            ],
            'ilin-simona-ramona' => [
                'slug' => 'ilin-simona-ramona',
                'name' => 'Ilin Simona Ramona',
                'specialization' => 'Medicină internă',
                'image' => 'assets/images/team/team-page-v1-4.jpg',
                'intro' => 'Medic în cadrul clinicii Home Medical.',
                'address' => 'Adresa clinicii',
                'phone' => '+40 (000) 000-0000',
                'email' => 'contact@home-medical.ro',
            ],
            'dandea-cristina' => [
                'slug' => 'dandea-cristina',
                'name' => 'Dandea Cristina',
                'specialization' => 'Chirurgie generală',
                'image' => 'assets/images/team/team-page-v1-1.jpg',
                'intro' => 'Medic în cadrul clinicii Home Medical.',
                'address' => 'Adresa clinicii',
                'phone' => '+40 (000) 000-0000',
                'email' => 'contact@home-medical.ro',
            ],
            'burdan-ghita-adrian' => [
                'slug' => 'burdan-ghita-adrian',
                'name' => 'Burdan Ghiță Adrian',
                'specialization' => 'Gastroenterologie',
                'image' => 'assets/images/team/team-page-v1-2.jpg',
                'intro' => 'Medic în cadrul clinicii Home Medical.',
                'address' => 'Adresa clinicii',
                'phone' => '+40 (000) 000-0000',
                'email' => 'contact@home-medical.ro',
            ],
            'drira-ouassim' => [
                'slug' => 'drira-ouassim',
                'name' => 'Drira Ouassim',
                'specialization' => 'Ortopedie',
                'image' => 'assets/images/team/team-page-v1-3.jpg',
                'intro' => 'Medic în cadrul clinicii Home Medical.',
                'address' => 'Adresa clinicii',
                'phone' => '+40 (000) 000-0000',
                'email' => 'contact@home-medical.ro',
            ],
            'musat-ionut-marian' => [
                'slug' => 'musat-ionut-marian',
                'name' => 'Mușat Ionuț Marian',
                'specialization' => 'Ortopedie',
                'image' => 'assets/images/team/team-page-v1-4.jpg',
                'intro' => 'Medic în cadrul clinicii Home Medical.',
                'address' => 'Adresa clinicii',
                'phone' => '+40 (000) 000-0000',
                'email' => 'contact@home-medical.ro',
            ],
            'marginean-andrei' => [
                'slug' => 'marginean-andrei',
                'name' => 'Mărginean Andrei',
                'specialization' => 'Chirurgie generală',
                'image' => 'assets/images/team/team-page-v1-1.jpg',
                'intro' => 'Medic în cadrul clinicii Home Medical.',
                'address' => 'Adresa clinicii',
                'phone' => '+40 (000) 000-0000',
                'email' => 'contact@home-medical.ro',
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