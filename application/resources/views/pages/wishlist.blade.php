@extends('layouts.default')
@section('title', 'Wishlist || Mediplace || Mediplace Laravel Template')


@section('content')

    <x-page-header pageTitle='Wishlist' pageSubtitle='Wishlist' />

    <!--Start Cart Page-->
    <section class="wishlist-page">
        <div class="container">
            <div class="table-responsive">
                <table class="table wishlist-table">
                    <thead>
                        <tr>
                            <th>Product Name</th>
                            <th>Unit Price</th>
                            <th>Stock Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <td>
                                <div class="product-box">
                                    <div class="cross-icon">
                                        <a href="{{ route('wishlist') }}"><i class="fas fa-times"></i></a>
                                    </div>
                                    <div class="img-box">
                                        <img src="{{ asset('assets/images/shop/wishlist-page-img-1.jpg') }}" alt="">
                                    </div>
                                    <h3><a href="{{ route('product-details') }}">Fluoride Toothpaste</a></h3>
                                </div>
                            </td>
                            <td>$120.99</td>
                            <td>In Stock</td>
                            <td>
                                <div class="product-select">
                                    <a class="thm-btn wishlist-page__btn" href="{{ route('wishlist') }}">
                                        <span class="fas fa-arrow-right"></span>
                                        Select Product
                                    </a>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <div class="product-box">
                                    <div class="cross-icon">
                                        <a href="{{ route('wishlist') }}"><i class="fas fa-times"></i></a>
                                    </div>
                                    <div class="img-box">
                                        <img src="{{ asset('assets/images/shop/wishlist-page-img-2.jpg') }}" alt="">
                                    </div>
                                    <h3><a href="{{ route('product-details') }}">Desensitizing Toothpaste</a></h3>
                                </div>
                            </td>
                            <td>$100.99</td>
                            <td>In Stock</td>
                            <td>
                                <div class="product-select">
                                    <a class="thm-btn wishlist-page__btn" href="{{ route('wishlist') }}">
                                        <span class="fas fa-arrow-right"></span>
                                        Select Product
                                    </a>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <div class="product-box">
                                    <div class="cross-icon">
                                        <a href="{{ route('wishlist') }}"><i class="fas fa-times"></i></a>
                                    </div>
                                    <div class="img-box">
                                        <img src="{{ asset('assets/images/shop/wishlist-page-img-3.jpg') }}" alt="">
                                    </div>
                                    <h3><a href="{{ route('product-details') }}">Prednisolone eye drops</a></h3>
                                </div>
                            </td>
                            <td>$106.99</td>
                            <td>In Stock</td>
                            <td>
                                <div class="product-select">
                                    <a class="thm-btn wishlist-page__btn" href="{{ route('wishlist') }}">
                                        <span class="fas fa-arrow-right"></span>
                                        Select Product
                                    </a>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <div class="product-box">
                                    <div class="cross-icon">
                                        <a href="{{ route('wishlist') }}"><i class="fas fa-times"></i></a>
                                    </div>
                                    <div class="img-box">
                                        <img src="{{ asset('assets/images/shop/wishlist-page-img-4.jpg') }}"
                                            alt="">
                                    </div>
                                    <h3><a href="{{ route('product-details') }}">Ketorolac eye drops</a></h3>
                                </div>
                            </td>
                            <td>$170.00</td>
                            <td>In Stock</td>
                            <td>
                                <div class="product-select">
                                    <a class="thm-btn wishlist-page__btn" href="{{ route('wishlist') }}">
                                        <span class="fas fa-arrow-right"></span>
                                        Select Product
                                    </a>
                                </div>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>

            <div class="product-details__social two">
                <div class="title">
                    <h3>Share with friends:</h3>
                </div>
                <div class="product-details__social-link">
                    <a href="#"><span class="icon-facebook-app-symbol"></span></a>
                    <a href="#"><span class="icon-twitter"></span></a>
                    <a href="#"><span class="icon-linkedin"></span></a>
                    <a href="#"><span class="icon-instagram"></span></a>
                </div>
            </div>
        </div>
    </section>
    <!--End Cart Page-->

@endsection
