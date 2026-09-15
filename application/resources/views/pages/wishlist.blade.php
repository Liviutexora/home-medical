@extends('layouts.default')
@section('title', 'Home Medical')


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
                    <a href="https://www.facebook.com/share/1JyNuEhQbp/" target="_blank" rel="noopener noreferrer"><span class="icon-facebook-app-symbol"></span></a>
                    <a href="https://www.tiktok.com/@home.medical7" target="_blank" rel="noopener noreferrer" aria-label="TikTok"><svg viewBox="0 0 64 64" width="27" height="27" aria-hidden="true" focusable="false" style="display:block; fill: currentColor; transform: translateY(0.5px); transform-origin: center;"><path d="M39.5 9.5c1.9 2.9 4.7 5 8.1 6.2v6.4c-2.8-.4-5.4-1.7-7.4-3.8v16.5c0 7.3-5.9 13.2-13.2 13.2S11 42 11 34.8 16.9 21.6 24.2 21.6c1.8 0 3.5.3 5 .9v6.5a11 11 0 0 0-5-1.4c-4.7 0-8.4 3.8-8.4 8.4 0 4.7 3.8 8.4 8.4 8.4 4.6 0 8.3-3.6 8.4-8.2V9.5h5.5Z"/></svg></a>
                </div>
            </div>
        </div>
    </section>
    <!--End Cart Page-->

@endsection
