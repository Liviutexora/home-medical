<ul class="main-menu__list">
    <li>
        <a href="{{ route('index') }}">Home</a>
    </li>
    <li>
        <a href="{{ route('about-v-3') }}">About Us</a>
    </li>
    <li class="dropdown">
        <a href="#">Departments</a>
        <ul>
            <li><a href="{{ route('our-doctors') }}">Our Doctors</a></li>
            <li><a href="{{ route('our-doctors-details') }}">Our Doctors Details</a></li>
            <li><a href="{{ route('department') }}">Department</a></li>
            <li><a href="{{ route('appointment') }}">Appointment</a></li>
        </ul>
    </li>
    <li class="dropdown">
        <a href="#">Services</a>
        <ul>
            <li><a href="{{ route('services-3') }}">Services</a></li>
            <li><a href="{{ route('medicine-and-health') }}">Medicine And Health</a></li>
            <li><a href="{{ route('heart-specialist') }}">Heart Specialist</a></li>
            <li><a href="{{ route('ear-nose-and-throat') }}">Ear Nose And Throat</a></li>
            <li><a href="{{ route('general-surgery') }}">General Surgery</a>
            </li>
            <li><a href="{{ route('pregnancy-and-child-birth') }}">Pregnancy And Child Birth</a></li>
        </ul>
    </li>
    <li>
        <a href="{{ route('contact') }}">Contact</a>
    </li>
</ul>
