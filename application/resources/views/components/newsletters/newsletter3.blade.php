<!--Newsletter One Start-->
<section class="newsletter-one">
    <div class="container">
        <div class="newsletter-one__inner">
            <div class="newsletter-one__img">
                <img src="{{ asset('assets/images/medical-general/brand/client-photos/4.jpg') }}" alt="">
            </div>
            <div class="newsletter-one__left">
                <div class="newsletter-one__title-box">
                    <h2 class="newsletter-one__title">Stay with Us!</h2>
                    <p class="newsletter-one__text">Why just buy medicine when you can earn too? Get instant
                        <br>
                        cashback with every prescription!
                    </p>
                </div>
            </div>
            <div class="newsletter-one__form-box">
                <form class="newsletter-one__form">
                    @csrf
                    <div class="newsletter-one__input">
                        <input type="email" placeholder="Email Address">
                    </div>
                    <button type="submit" class="newsletter-one__btn">
                        Subscribe </button>
                </form>
            </div>
        </div>
    </div>
</section>
<!--Newsletter One End-->
