<section class="page-header">
    <div class="page-header__bg"
        style="background-image: url({{ asset('assets/images/backgrounds/page-header-bg.jpg') }});">
    </div>
    <div class="container">
        <div class="page-header__inner">
            <h3>{!! $pageTitle ?? 'Pages' !!}</h3>
            <div class="thm-breadcrumb__inner">
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="{{ route('index') }}">Acasă</a></li>
                    <li><span class="fas fa-angle-right"></span></li>
                    <li>{{ $pageSubtitle ?? 'Go Back home' }}</li>
                </ul>
            </div>
        </div>
    </div>
</section>
