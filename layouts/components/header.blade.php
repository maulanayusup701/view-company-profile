<header class="absolute inset-x-0 top-0 z-50 transition-transform duration-300">
    <nav class="mx-auto flex max-w-6xl items-center justify-between px-5 py-4">
        <a href="{{ route('landingpage') }}" class="font-display text-2xl tracking-tight">SIAP.AI</a>
        <di v class="hidden gap-8 font-mono text-sm md:flex">
            <a href="{{ route('landingpage') }}" data-spy="beranda"
                class="desk-link hover:underline underline-offset-4">Beranda</a>
            <a href="{{ route('service') }}" data-spy="layanan"
                class="desk-link hover:underline underline-offset-4">Layanan</a>
            <a href="{{ route('article') }}" data-spy="artikel"
                class="desk-link hover:underline underline-offset-4">Artikel</a>
            <a href="{{ route('about') }}" data-spy="tentang"
                class="desk-link hover:underline underline-offset-4">Tentang</a>
        </di>
        <div class="flex items-center gap-2 md:gap-3">
            @if (Auth::check())
                <a href="{{ route('filament.admin.auth.login') }}"
                    class="border-4 border-ink bg-paper px-3 py-2 font-mono text-sm font-bold text-ink hover:bg-ink hover:text-paper md:px-4">Login</a>
            @else
                <a href="{{ route('filament.admin.pages.dashboard') }}"
                    class="border-4 border-ink bg-paper px-3 py-2 font-mono text-sm font-bold text-ink hover:bg-ink hover:text-paper md:px-4">Login</a>
            @endif
            <a href="https://wa.me/{{ $infos->company_no_telephone }}" target="_blank" rel="noopener noreferrer"
                class="border-4 border-ink bg-ink px-3 py-2 font-mono text-sm font-bold text-paper hover:bg-signal hover:text-ink md:px-4">Hubungi
                Kami</a>
        </div>
    </nav>
</header>

<!-- BOTTOM NAV (MOBILE) -->
<nav aria-label="Navigasi utama"
    class="fixed inset-x-0 bottom-0 z-50 border-t-4 border-ink bg-paper md:hidden pb-[env(safe-area-inset-bottom)]">
    <div class="grid grid-cols-4 font-mono text-[11px] font-bold">
        <a href="#beranda" data-spy="beranda"
            class="nav-item flex min-h-[56px] flex-col items-center justify-center gap-1 py-2 active:bg-ink active:text-paper">
            <svg class="nav-icon h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.25"
                stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                <path d="M3 10.5 12 3l9 7.5" />
                <path d="M5 9.5V21h14V9.5" />
                <path d="M10 21v-6h4v6" />
            </svg>
            <span>Beranda</span>
        </a>
        <a href="service.html" data-spy="layanan"
            class="nav-item flex min-h-[56px] flex-col items-center justify-center gap-1 border-l-4 border-ink py-2 active:bg-ink active:text-paper">
            <svg class="nav-icon h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.25"
                stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                <rect x="3" y="3" width="7" height="7" />
                <rect x="14" y="3" width="7" height="7" />
                <rect x="3" y="14" width="7" height="7" />
                <rect x="14" y="14" width="7" height="7" />
            </svg>
            <span>Layanan</span>
        </a>
        <a href="article.html" data-spy="artikel"
            class="nav-item flex min-h-[56px] flex-col items-center justify-center gap-1 border-l-4 border-ink py-2 active:bg-ink active:text-paper">
            <svg class="nav-icon h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.25"
                stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                <rect x="3" y="4" width="18" height="16" />
                <path d="M7 8h10M7 12h10M7 16h6" />
            </svg>
            <span>Artikel</span>
        </a>
        <a href="aboutus.html" data-spy="tentang"
            class="nav-item flex min-h-[56px] flex-col items-center justify-center gap-1 border-l-4 border-ink py-2 active:bg-ink active:text-paper">
            <svg class="nav-icon h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.25"
                stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                <circle cx="12" cy="8" r="4" />
                <path d="M4 21c0-4 3.6-7 8-7s8 3 8 7" />
            </svg>
            <span>Tentang</span>
        </a>
    </div>
</nav>
