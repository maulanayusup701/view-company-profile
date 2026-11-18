@extends('front-end.layouts.main')
@section('content')
    <!-- BERANDA / HERO -->
    <section id="beranda" class="relative border-b-4 border-ink">
        <div class="mx-auto max-w-6xl px-5 pb-20 pt-36 md:pb-32 md:pt-44">
            <h1 class="rise font-display text-[15vw] leading-[0.9] md:text-[9rem] tracking-tighter">
                SETUP AI.<br />
                BANGUN WEB.<br />
                <span class="bg-signal px-2">JALAN.</span>
            </h1>
            <p class="rise rise-2 mt-10 max-w-xl text-lg md:text-xl">
                SIAP.AI membantu bisnis Anda memasang AI dan membangun website yang siap dipakai. Dari pengaturan awal
                sampai sistem berjalan.
            </p>
            <div class="rise rise-3 mt-10 flex flex-col gap-4 sm:flex-row">
                <a href="#kontak"
                    class="border-4 border-ink bg-ink px-6 py-4 text-center font-mono font-bold text-paper shadow-brutal hover:translate-x-1 hover:translate-y-1 hover:shadow-none">Mulai
                    Proyek</a>
                <a href="#layanan"
                    class="border-4 border-ink bg-paper px-6 py-4 text-center font-mono font-bold hover:bg-ink hover:text-paper">Lihat
                    Layanan</a>
            </div>

        </div>
    </section>

    <!-- PROSES -->
    <section id="proses" class="border-b-4 border-ink bg-ink text-paper">
        <div class="mx-auto max-w-6xl px-5 py-20">
            <h2 class="font-display text-4xl md:text-6xl tracking-tight">PROSES</h2>
            <ol class="mt-12 grid gap-8 md:grid-cols-3">
                <li class="border-t-4 border-signal pt-6">
                    <p class="font-mono text-sm">01</p>
                    <h3 class="mt-2 font-display text-2xl">Diskusi</h3>
                    <p class="mt-3 text-paper/80">Kami memahami kebutuhan dan tujuan bisnis Anda.</p>
                </li>
                <li class="border-t-4 border-signal pt-6">
                    <p class="font-mono text-sm">02</p>
                    <h3 class="mt-2 font-display text-2xl">Bangun</h3>
                    <p class="mt-3 text-paper/80">Setup AI dan pengembangan website dikerjakan sesuai rencana yang
                        disepakati.</p>
                </li>
                <li class="border-t-4 border-signal pt-6">
                    <p class="font-mono text-sm">03</p>
                    <h3 class="mt-2 font-display text-2xl">Serah Terima</h3>
                    <p class="mt-3 text-paper/80">Sistem diserahkan lengkap beserta panduan penggunaan.</p>
                </li>
            </ol>
        </div>
    </section>

    <!-- LAYANAN -->
    <section id="layanan" class="border-b-4 border-ink">
        <div class="mx-auto max-w-6xl px-5 py-20">
            <h2 class="font-display text-4xl md:text-6xl tracking-tight">LAYANAN</h2>

            <div class="mt-12 grid grid-cols-1 gap-[4px] border-4 border-ink bg-ink md:grid-cols-2 xl:grid-cols-4">
                @if ($services)
                    @foreach ($services as $service)
                        <article
                            class="relative bg-paper p-8 card-hover md:max-xl:[&:last-child:nth-child(odd)]:col-span-2 xl:[&:last-child:nth-child(4n+1)]:col-span-4 xl:[&:nth-last-child(2):nth-child(4n+1)]:col-span-2 xl:[&:last-child:nth-child(4n+2)]:col-span-2 xl:[&:last-child:nth-child(4n+3)]:col-span-2">
                            <h3 class="font-display text-2xl">{{ $service->service_name }}</h3>
                            <p class="mt-4">{{ $service->service_content }}</p>
                        </article>
                    @endforeach
                @endif
            </div>
        </div>
    </section>

    <!-- ARTIKEL -->
    <section id="artikel" class="border-b-4 border-ink">
        <div class="mx-auto max-w-6xl px-5 py-20">
            <h2 class="font-display text-4xl md:text-6xl tracking-tight">ARTIKEL</h2>

            <div class="mt-12 grid gap-0 lg:grid-cols-4 border-4 border-ink">
                @if ($articles)
                    @foreach ($articles as $article)
                        <article
                            class="relative flex flex-col border-b-4 lg:border-b-0 lg:border-r-4 last:border-b-0 lg:last:border-r-0 border-ink p-8 card-hover">
                            <p class="font-mono text-xs">{{ $article->created_at }}</p>
                            <h3 class="mt-4 font-display text-xl">{{ $article->articles_name }}</h3>
                            <p class="mt-3">{{ $article->articles_desc }}</p>
                            <a href="{{ $article->articles_name }}"
                                class="mt-auto pt-6 self-start font-mono text-sm font-bold underline underline-offset-4 after:absolute after:inset-0 after:content-['']">Baca
                                selengkapnya</a>
                        </article>
                    @endforeach
                @endif
            </div>
        </div>
    </section>

    <!-- ULASAN -->
    <section id="ulasan" class="border-b-4 border-ink">
        <div class="mx-auto max-w-6xl px-5 py-20">
            <div class="flex items-end justify-between gap-6">
                <h2 class="font-display text-4xl md:text-6xl tracking-tight">ULASAN</h2>
                <div class="flex gap-3">
                    <button type="button" id="ulasan-prev" aria-label="Ulasan sebelumnya"
                        class="h-12 w-12 border-4 border-ink font-mono text-xl font-bold hover:bg-ink hover:text-paper">&lt;</button>
                    <button type="button" id="ulasan-next" aria-label="Ulasan berikutnya"
                        class="h-12 w-12 border-4 border-ink font-mono text-xl font-bold hover:bg-ink hover:text-paper">&gt;</button>
                </div>
            </div>

            <div class="embla mt-12">
                <div
                    class="embla__viewport overflow-x-auto snap-x snap-mandatory p-3 [scrollbar-width:none] [&::-webkit-scrollbar]:hidden">
                    <div class="embla__container flex">
                        @if ($reviews)
                            @foreach ($reviews as $review)
                                <div
                                    class="embla__slide min-w-0 flex-[0_0_100%] border-ink md:flex-[0_0_50%] lg:flex-[0_0_33.333%] md:border-r-4">
                                    <figure class="relative h-full p-8 card-hover">
                                        <blockquote class="text-lg">“{{ $review->review_content }}”</blockquote>
                                        <figcaption class="mt-6 font-mono text-sm">— {{ $review->review_name }},
                                            {{ $review->review_position }} </figcaption>
                                    </figure>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- KONTAK -->
    <section id="kontak" class="bg-signal">
        <div class="mx-auto max-w-6xl px-5 py-20 text-center">
            <h2 class="font-display text-4xl md:text-7xl tracking-tight">SIAP MULAI?</h2>
            <p class="mx-auto mt-6 max-w-xl text-lg">Ceritakan kebutuhan Anda. Kami bantu tentukan langkah pertamanya.
            </p>
            <div class="mt-10 flex flex-col items-center gap-4 sm:flex-row sm:justify-center">
                <a href="mailto:halo@contoh.com"
                    class="border-4 border-ink bg-ink px-8 py-4 font-mono font-bold text-paper hover:bg-paper hover:text-ink">halo@contoh.com</a>
                <a href="https://wa.me/{{ $infos->company_no_telephone }}"
                    class="border-4 border-ink bg-paper px-8 py-4 font-mono font-bold hover:bg-ink hover:text-paper">WhatsApp:
                    {{ $infos->company_no_telephone }}</a>
            </div>
        </div>
    </section>
@endsection
