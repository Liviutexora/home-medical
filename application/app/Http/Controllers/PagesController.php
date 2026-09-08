<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function about_v_3()
    {
        return view('pages.about-v-3');
    }

    public function our_doctors()
    {
        return view('pages.our-doctors');
    }

    public function our_doctors_details()
    {
        return view('pages.our-doctors-details');
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