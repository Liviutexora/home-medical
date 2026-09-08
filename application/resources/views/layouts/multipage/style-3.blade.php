<!DOCTYPE html>
<html lang="en">
<x-head />

<body class="custom-cursor">
    <div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div>

    <x-loader />
    <x-chat-popup />
    <x-sidebar-widget />
    <div class="page-wrapper">
        <x-headers.header3 />

        @yield('content')
        <x-newsletters.newsletter3 />
        <x-footers.footer3 />
    </div>
    <x-mobile-nav />
    <x-search-popup />
    <x-scroll-to-top />
    <x-scripts />
</body>

</html>
