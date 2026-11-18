@php
    $page = 'beranda';

    if (request()->routeIs('article')) {
        $page = 'artikel';
    } elseif (request()->routeIs('about')) {
        $page = 'tentang';
    } elseif (request()->routeIs('service')) {
        $page = 'layanan';
    }
@endphp

@include('front-end.layouts.components.meta')

<body data-page="{{ $page }}" class="bg-paper text-ink antialiased pb-24 md:pb-0">
    @include('front-end.layouts.components.header')

    @yield('content')

    @include('front-end.layouts.components.footer')
    @include('front-end.layouts.components.script')
    @stack('js')
