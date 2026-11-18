@extends('front-end.layouts.main')
@section('content')
    <!-- HERO TENTANG -->
    <section class="relative border-b-4 border-ink">
        <div class="mx-auto max-w-6xl px-5 pb-16 pt-36 md:pb-24 md:pt-44">
            <p class="rise font-mono text-sm font-bold">/ TENTANG KAMI</p>
            <h1 class="rise rise-2 mt-4 font-display text-[14vw] leading-[0.9] md:text-[7rem] tracking-tighter">
                <span class="bg-signal px-2">SIAP.AI</span>
                SIAP <br>MEMBANTU BISNIS ANDA
            </h1>
            <p class="rise rise-3 mt-10 max-w-2xl text-lg md:text-xl">
                SIAP.AI adalah penyedia jasa setup AI dan pengembangan website. Kami membantu bisnis memakai teknologi
                AI dan website tanpa harus punya tim teknis sendiri.
            </p>
        </div>
    </section>

    <!-- PERUSAHAAN -->
    <section class="border-b-4 border-ink">
        <div class="mx-auto grid max-w-6xl gap-10 px-5 py-20 md:grid-cols-2">
            <h2 class="font-display text-4xl md:text-6xl tracking-tight">PERUSAHAAN</h2>
            <div class="space-y-5 text-lg">
                <p>SIAP.AI berdiri untuk menjembatani bisnis kecil dan menengah dengan teknologi AI. Banyak pelaku usaha
                    ingin memakai AI, tetapi terhalang istilah teknis dan biaya tim IT yang besar.</p>
                <p>Berbasis di Purwakarta, Jawa Barat, kami mengerjakan proyek setup AI, website company profile,
                    landing page, hingga aplikasi web lengkap dengan panel admin. Setiap langkah dijelaskan dengan
                    bahasa yang mudah dipahami.</p>
            </div>
        </div>
    </section>

    <!-- PENDIRI -->
    <section class="border-b-4 border-ink bg-ink text-paper">
        <div class="mx-auto max-w-6xl px-5 py-20">
            <h2 class="font-display text-4xl md:text-6xl tracking-tight">PENDIRI</h2>
            <div class="mt-12 grid gap-0 border-4 border-paper md:grid-cols-2">
                <div class="flex items-center justify-center border-b-4 border-paper p-10 md:border-b-0 md:border-r-4">
                    <img src="{{ asset('storage/' . $infos->company_founder_img) }}" alt="Founder">
                </div>
                <div class="p-8 md:p-10">
                    <p class="font-mono text-sm text-signal">Pendiri &amp; CEO</p>
                    <h3 class="mt-2 font-display text-3xl md:text-4xl">Maulana Yusup</h3>
                    <p class="mt-5 text-paper/80">{{ $infos->company_founder_desc }}</p>
                </div>
            </div>
        </div>
    </section>

    <!-- STAF -->
    <section class="border-b-4 border-ink">
        <div class="mx-auto max-w-6xl px-5 py-20">
            <h2 class="font-display text-4xl md:text-6xl tracking-tight">TIM KAMI</h2>
            <div class="mt-12 grid gap-0 border-4 border-ink md:grid-cols-3">
                @foreach ($staffs as $staff)
                    <article class="card-hover p-8 md:border-r-4 border-b-4 md:border-b-0 border-ink">
                        <p class="font-mono text-xs">{{ $staff->staff_position }}</p>
                        <h3 class="mt-3 font-display text-2xl">{{ $staff->staff_name }}</h3>
                        <p class="mt-4">{{ $staff->staff_desc }}</p>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <!-- VISI MISI -->
    <section class="border-b-4 border-ink">
        <div class="mx-auto grid max-w-6xl gap-0 px-5 py-20 md:grid-cols-2">
            <div class="border-4 border-ink p-8 md:p-10 md:border-r-0">
                <p class="font-mono text-sm font-bold">01 / VISI</p>
                <h2 class="mt-4 font-display text-3xl md:text-4xl">Menjadi mitra AI terpercaya untuk bisnis Indonesia.
                </h2>
            </div>
            <div class="border-4 border-ink p-8 md:p-10 md:border-l-0">
                <p class="font-mono text-sm font-bold">02 / MISI</p>
                <ul class="mt-4 space-y-4 text-lg">
                    <li>— Membuat teknologi AI mudah dipakai oleh bisnis kecil dan menengah.</li>
                    <li>— Membangun website yang cepat, rapi, dan mudah dikelola.</li>
                    <li>— Menjelaskan setiap langkah dengan bahasa yang sederhana.</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- KELEBIHAN -->
    <section class="border-b-4 border-ink bg-ink text-paper">
        <div class="mx-auto max-w-6xl px-5 py-20">
            <h2 class="font-display text-4xl md:text-6xl tracking-tight">KENAPA PAKAI SIAP.AI</h2>
            <ol class="mt-12 grid gap-8 md:grid-cols-3">
                <li class="border-t-4 border-signal pt-6">
                    <p class="font-mono text-sm">01</p>
                    <h3 class="mt-2 font-display text-2xl">Tanpa Ribet</h3>
                    <p class="mt-3 text-paper/80">Anda cukup menjelaskan kebutuhan, sisanya kami yang kerjakan dan
                        jelaskan.</p>
                </li>
                <li class="border-t-4 border-signal pt-6">
                    <p class="font-mono text-sm">02</p>
                    <h3 class="mt-2 font-display text-2xl">Satu Pintu</h3>
                    <p class="mt-3 text-paper/80">AI dan website dikerjakan oleh satu tim, jadi tidak perlu mengatur
                        banyak vendor.</p>
                </li>
                <li class="border-t-4 border-signal pt-6">
                    <p class="font-mono text-sm">03</p>
                    <h3 class="mt-2 font-display text-2xl">Bisa Dikelola Sendiri</h3>
                    <p class="mt-3 text-paper/80">Panel admin dan panduan penggunaan membuat tim Anda bisa mengelola
                        konten sendiri.</p>
                </li>
            </ol>
        </div>
    </section>

    <!-- CTA -->
    <section class="bg-signal">
        <div class="mx-auto max-w-6xl px-5 py-20 text-center">
            <h2 class="font-display text-4xl md:text-7xl tracking-tight">SIAP MULAI?</h2>
            <p class="mx-auto mt-6 max-w-xl text-lg">Ceritakan kebutuhan Anda. Kami bantu tentukan langkah pertamanya.
            </p>
            <div class="mt-10 flex flex-col items-center gap-4 sm:flex-row sm:justify-center">
                <a href="mailto:halo@contoh.com"
                    class="border-4 border-ink bg-ink px-8 py-4 font-mono font-bold text-paper hover:bg-paper hover:text-ink">halo@contoh.com</a>
                <a href="https://wa.me/6281234567890"
                    class="border-4 border-ink bg-paper px-8 py-4 font-mono font-bold hover:bg-ink hover:text-paper">WhatsApp:
                    0812-3456-7890</a>
            </div>
        </div>
    </section>
@endsection
