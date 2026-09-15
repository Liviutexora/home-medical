<ul class="main-menu__list">
    <li>
        <a href="{{ route('index') }}">Acasă</a>
    </li>
    <li>
        <a href="{{ route('about-v-3') }}">Despre noi</a>
    </li>
    <li>
        <a href="{{ route('our-doctors') }}">Echipa medicală</a>
    </li>
    <li class="dropdown">
        <a href="#">Servicii</a>
        <ul>
            <li><a href="{{ route('services-3') }}">Servicii Medicale</a></li>
            <li><a href="{{ route('chirurgie-generala') }}">Chirurgie generală</a></li>
            <li><a href="{{ route('dermatologie') }}">Dermatologie</a></li>
            <li><a href="{{ route('gastroenterologie') }}">Gastroenterologie</a></li>
            <li><a href="{{ route('medicina-interna') }}">Medicină internă</a></li>
            <li><a href="{{ route('ortopedie') }}">Ortopedie</a></li>
            <li><a href="{{ route('orl') }}">ORL</a></li>
            <li><a href="{{ route('pneumologie') }}">Pneumologie</a></li>
            <li><a href="{{ route('psihiatrie') }}">Psihiatrie</a></li>
            <li><a href="{{ route('recuperare-medicala') }}">Recuperare medicală</a></li>
        </ul>
    </li>
    <li>
        <a href="{{ route('contact') }}">Contact</a>
    </li>
</ul>
