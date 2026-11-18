<!-- FOOTER -->
<footer class="border-t-4 border-ink bg-paper">
    <div class="mx-auto grid max-w-6xl gap-10 px-5 py-12 md:grid-cols-3">
        <div>
            <p class="font-display text-3xl tracking-tight">SIAP.AI</p>
            <p class="mt-4 font-mono text-sm">Jasa setup AI dan pengembangan website.</p>
            <p class="mt-3 max-w-xs text-sm">Berbasis di Purwakarta, Jawa Barat. Dari pemasangan AI sampai website
                yang siap dipakai, setiap langkah kami kerjakan dengan jelas.</p>
        </div>

        <div>
            <p class="font-mono text-sm font-bold">Navigasi</p>
            <ul class="mt-4 space-y-2 font-mono text-sm">
                <li><a href="#beranda" class="hover:underline underline-offset-4">Beranda</a></li>
                <li><a href="#layanan" class="hover:underline underline-offset-4">Layanan</a></li>
                <li><a href="#proses" class="hover:underline underline-offset-4">Proses</a></li>
                <li><a href="#artikel" class="hover:underline underline-offset-4">Artikel</a></li>
                <li><a href="#tentang" class="hover:underline underline-offset-4">Tentang</a></li>
                <li><a href="#kontak" class="hover:underline underline-offset-4">Kontak</a></li>
            </ul>
        </div>

        <div>
            <p class="font-mono text-sm font-bold">Kontak</p>
            <ul class="mt-4 space-y-2 font-mono text-sm">
                <li><a href="mailto:halo@contoh.com" class="hover:underline underline-offset-4">halo@contoh.com</a>
                </li>
                <li><a href="https://wa.me/" class="hover:underline underline-offset-4"></a>
                </li>
                <li>Purwakarta, Jawa Barat, Indonesia</li>
            </ul>
            <p class="mt-8 font-mono text-sm font-bold">Sosial Media</p>
            <ul class="mt-4 flex gap-3">
                {{-- @foreach ($sosial_media as $sosial)
                    <li><a href="{{ $sosial->sosial_link }}" aria-label="{{ $sosial->sosial_media_name }}"
                            class="flex h-11 w-11 items-center justify-center border-4 border-ink hover:bg-ink hover:text-paper">{!! $sosial->sosial_media_icon !!}
                        </a>
                    </li>
                @endforeach --}}
            </ul>
        </div>
    </div>

    <div class="border-t-4 border-ink">
        <div class="mx-auto max-w-6xl px-5 py-6 font-mono text-sm">
            <p>© 2026 {{ config('app.name') }}. Hak cipta dilindungi.</p>
        </div>
    </div>
</footer>
