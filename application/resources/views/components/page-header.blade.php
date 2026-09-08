<section class="page-header">
    <div class="page-header__bg"
        style="background-image: url({{ asset('assets/images/medical-general/brand/client-photos/baner-MediPlace.png') }});">
    </div>
    <div class="container">
        <div class="page-header__inner">
            <h3>{!! $pageTitle ?? 'Pages' !!}</h3>
            <div class="thm-breadcrumb__inner">
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="{{ route('index') }}">Home</a></li>
                    <li><span class="fas fa-angle-right"></span></li>
                    <li>{{ $pageSubtitle ?? 'Go Back home' }}</li>
                </ul>
            </div>
        </div>
    </div>
</section>
