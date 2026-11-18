@extends('front-end.layouts.main')
@section('content')
    <!-- HERO -->
    <section class="border-b-4 border-ink">
        <div class="mx-auto max-w-6xl px-5 pb-16 pt-36 md:pb-24 md:pt-44">
            <a href="index.html#layanan" class="font-mono text-sm underline underline-offset-4 hover:bg-signal">&larr; Kembali
                ke
                beranda</a>
            <h1 class="rise mt-8 font-display text-[13vw] leading-[0.9] tracking-tighter md:text-[8rem]">
                LAYANAN
            </h1>
            <p class="rise rise-2 mt-8 max-w-xl text-lg md:text-xl">
                Dua layanan, satu tujuan: sistem yang benar-benar dipakai tim Anda. Pilih layanan di bawah untuk
                melihat isinya.
            </p>

            <div class="mt-10 grid border-4 border-ink font-mono font-bold sm:grid-cols-2" role="tablist"
                aria-label="Pilih layanan">
                <a href="#setup-ai" data-tab="setup-ai"
                    class="tab-link border-b-4 border-ink px-6 py-5 hover:bg-ink hover:text-paper sm:border-b-0 sm:border-r-4">Setup
                    AI</a>
                <a href="#website" data-tab="website" class="tab-link px-6 py-5 hover:bg-ink hover:text-paper">Website</a>
            </div>
        </div>
    </section>

    <!-- SETUP AI -->
    <section id="setup-ai" class="border-b-4 border-ink">
        <div class="mx-auto max-w-6xl px-5 py-20">
            <div class="grid gap-10 md:grid-cols-2">
                <div>
                    <h2 class="font-display text-4xl tracking-tight md:text-6xl">SETUP AI</h2>
                    <p class="mt-6 max-w-lg text-lg">
                        Kami memasang dan mengatur AI di dalam cara kerja bisnis Anda yang sudah ada, bukan
                        sebaliknya. Tim Anda tidak perlu belajar alat baru yang rumit.
                    </p>
                </div>
                <div class="border-4 border-ink p-8">
                    <h3 class="font-display text-2xl">Cocok untuk</h3>
                    <ul class="mt-4 space-y-3">
                        <li>— Toko online yang ingin pertanyaan pelanggan terjawab di luar jam kerja</li>
                        <li>— Tim kecil yang menghabiskan waktu untuk pekerjaan berulang</li>
                        <li>— Bisnis jasa yang ingin merapikan balasan dan dokumen</li>
                    </ul>
                </div>
            </div>

            <h3 class="mt-16 font-display text-2xl md:text-3xl">Yang Anda dapatkan</h3>
            <div class="mt-6 grid border-4 border-ink md:grid-cols-3">
                <article class="border-b-4 border-ink p-8 md:border-b-0 md:border-r-4">
                    <h4 class="font-display text-xl">Konfigurasi model AI</h4>
                    <p class="mt-3">Pemilihan dan pengaturan model sesuai tugasnya, lengkap dengan instruksi dan
                        batasan
                        jawaban yang kita sepakati.</p>
                </article>
                <article class="border-b-4 border-ink p-8 md:border-b-0 md:border-r-4">
                    <h4 class="font-display text-xl">Integrasi sistem</h4>
                    <p class="mt-3">AI disambungkan ke alat yang sudah Anda pakai, misalnya website, pesan
                        pelanggan,
                        atau data internal.</p>
                </article>
                <article class="p-8">
                    <h4 class="font-display text-xl">Panduan untuk tim</h4>
                    <p class="mt-3">Cara pakai, cara memeriksa hasil, dan apa yang harus dilakukan kalau jawaban
                        AI
                        kurang tepat.</p>
                </article>
            </div>

            <h3 class="mt-16 font-display text-2xl md:text-3xl">Contoh yang bisa dikerjakan</h3>
            <ul class="mt-6 grid gap-0 border-4 border-ink md:grid-cols-2">
                <li class="border-b-4 border-ink p-6 md:border-r-4">Chatbot layanan pelanggan dengan jawaban dari
                    informasi bisnis Anda</li>
                <li class="border-b-4 border-ink p-6">Asisten internal untuk mencari dan merangkum dokumen</li>
                <li class="border-b-4 border-ink p-6 md:border-b-0 md:border-r-4">Draf balasan otomatis yang tetap
                    Anda tinjau sebelum dikirim</li>
                <li class="p-6">Perapian data dan laporan rutin</li>
            </ul>
        </div>
    </section>

    <!-- WEBSITE -->
    <section id="website" class="border-b-4 border-ink bg-ink text-paper">
        <div class="mx-auto max-w-6xl px-5 py-20">
            <div class="grid gap-10 md:grid-cols-2">
                <div>
                    <h2 class="font-display text-4xl tracking-tight md:text-6xl">WEBSITE</h2>
                    <p class="mt-6 max-w-lg text-lg text-paper/80">
                        Website yang cepat dibuka, rapi di layar ponsel, dan bisa Anda kelola sendiri lewat panel
                        admin tanpa harus menghubungi developer setiap kali ada perubahan.
                    </p>
                </div>
                <div class="border-4 border-paper p-8">
                    <h3 class="font-display text-2xl">Pilihan jenis website</h3>
                    <ul class="mt-4 space-y-3">
                        <li><span class="font-bold">Company profile</span> untuk memperkenalkan bisnis dan layanan
                        </li>
                        <li><span class="font-bold">Landing page</span> untuk satu penawaran atau kampanye</li>
                        <li><span class="font-bold">Aplikasi web</span> untuk sistem dengan login dan data</li>
                    </ul>
                </div>
            </div>

            <h3 class="mt-16 font-display text-2xl md:text-3xl">Yang Anda dapatkan</h3>
            <div class="mt-6 grid border-4 border-paper md:grid-cols-3">
                <article class="border-b-4 border-paper p-8 md:border-b-0 md:border-r-4">
                    <h4 class="font-display text-xl">Desain UI/UX</h4>
                    <p class="mt-3 text-paper/80">Tata letak dan alur yang membuat pengunjung cepat menemukan yang
                        mereka cari.</p>
                </article>
                <article class="border-b-4 border-paper p-8 md:border-b-0 md:border-r-4">
                    <h4 class="font-display text-xl">Frontend dan backend</h4>
                    <p class="mt-3 text-paper/80">Tampilan responsif di semua ukuran layar, ditambah sistem di
                        belakangnya bila diperlukan.</p>
                </article>
                <article class="p-8">
                    <h4 class="font-display text-xl">Panel admin</h4>
                    <p class="mt-3 text-paper/80">Ubah teks, gambar, artikel, dan data sendiri lewat tampilan yang
                        sederhana.</p>
                </article>
            </div>
        </div>
    </section>

    <!-- PROSES -->
    <section id="proses" class="border-b-4 border-ink">
        <div class="mx-auto max-w-6xl px-5 py-20">
            <h2 class="font-display text-4xl tracking-tight md:text-6xl">CARA KERJA</h2>
            <p class="mt-6 max-w-xl text-lg">Alur yang sama untuk kedua layanan, supaya Anda selalu tahu sedang
                berada di tahap mana.</p>
            <ol class="mt-12 grid gap-8 md:grid-cols-3">
                <li class="border-t-4 border-signal pt-6">
                    <p class="font-mono text-sm">01</p>
                    <h3 class="mt-2 font-display text-2xl">Diskusi</h3>
                    <p class="mt-3">Kami mendengar kebutuhan Anda, lalu menyepakati ruang lingkup dan jadwal
                        secara
                        tertulis.</p>
                </li>
                <li class="border-t-4 border-signal pt-6">
                    <p class="font-mono text-sm">02</p>
                    <h3 class="mt-2 font-display text-2xl">Bangun</h3>
                    <p class="mt-3">Pengerjaan sesuai rencana. Anda bisa melihat dan memberi masukan sebelum
                        lanjut.
                    </p>
                </li>
                <li class="border-t-4 border-signal pt-6">
                    <p class="font-mono text-sm">03</p>
                    <h3 class="mt-2 font-display text-2xl">Serah Terima</h3>
                    <p class="mt-3">Sistem diserahkan lengkap dengan panduan penggunaan untuk tim Anda.</p>
                </li>
            </ol>
        </div>
    </section>

    <!-- FAQ -->
    <section id="faq" class="border-b-4 border-ink">
        <div class="mx-auto grid max-w-6xl gap-10 px-5 py-20 md:grid-cols-[1fr_2fr]">
            <h2 class="font-display text-4xl tracking-tight md:text-6xl">TANYA JAWAB</h2>
            <div class="border-4 border-ink">
                <div class="faq-item border-b-4 border-ink">
                    <h3>
                        <button type="button" id="faq-btn-0" aria-expanded="false" aria-controls="faq-panel-0"
                            class="faq-btn flex w-full items-center justify-between gap-4 p-6 text-left font-bold hover:bg-ink hover:text-paper">
                            Apakah saya perlu punya tim teknis?
                            <span class="faq-icon font-display text-2xl" aria-hidden="true">+</span>
                        </button>
                    </h3>
                    <div id="faq-panel-0" role="region" aria-labelledby="faq-btn-0" class="faq-panel">
                        <div>
                            <p class="px-6 pb-6 pt-2">Tidak. Kami menjelaskan setiap langkah dengan bahasa yang
                                mudah dipahami dan menyerahkan panduan di akhir proyek.</p>
                        </div>
                    </div>
                </div>
                <div class="faq-item border-b-4 border-ink">
                    <h3>
                        <button type="button" id="faq-btn-1" aria-expanded="false" aria-controls="faq-panel-1"
                            class="faq-btn flex w-full items-center justify-between gap-4 p-6 text-left font-bold hover:bg-ink hover:text-paper">
                            Berapa lama pengerjaannya?
                            <span class="faq-icon font-display text-2xl" aria-hidden="true">+</span>
                        </button>
                    </h3>
                    <div id="faq-panel-1" role="region" aria-labelledby="faq-btn-1" class="faq-panel">
                        <div>
                            <p class="px-6 pb-6 pt-2">Tergantung ruang lingkupnya. Setelah diskusi awal, kami
                                berikan perkiraan waktu yang jelas sebelum pengerjaan dimulai.</p>
                        </div>
                    </div>
                </div>
                <div class="faq-item border-b-4 border-ink">
                    <h3>
                        <button type="button" id="faq-btn-2" aria-expanded="false" aria-controls="faq-panel-2"
                            class="faq-btn flex w-full items-center justify-between gap-4 p-6 text-left font-bold hover:bg-ink hover:text-paper">
                            Bagaimana dengan keamanan data saya?
                            <span class="faq-icon font-display text-2xl" aria-hidden="true">+</span>
                        </button>
                    </h3>
                    <div id="faq-panel-2" role="region" aria-labelledby="faq-btn-2" class="faq-panel">
                        <div>
                            <p class="px-6 pb-6 pt-2">Kami membahas data apa yang boleh dan tidak boleh masuk ke
                                sistem AI sejak awal, dan mencatatnya dalam kesepakatan proyek.</p>
                        </div>
                    </div>
                </div>
                <div class="faq-item">
                    <h3>
                        <button type="button" id="faq-btn-3" aria-expanded="false" aria-controls="faq-panel-3"
                            class="faq-btn flex w-full items-center justify-between gap-4 p-6 text-left font-bold hover:bg-ink hover:text-paper">
                            Bisakah mengambil Setup AI dan Website sekaligus?
                            <span class="faq-icon font-display text-2xl" aria-hidden="true">+</span>
                        </button>
                    </h3>
                    <div id="faq-panel-3" role="region" aria-labelledby="faq-btn-3" class="faq-panel">
                        <div>
                            <p class="px-6 pb-6 pt-2">Bisa. Keduanya dikerjakan dalam satu rencana, misalnya
                                website
                                dengan chatbot yang sudah terpasang.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- KONTAK -->
    <section id="kontak" class="bg-signal">
        <div class="mx-auto max-w-6xl px-5 py-20 text-center">
            <h2 class="font-display text-4xl tracking-tight md:text-7xl">SIAP MULAI?</h2>
            <p class="mx-auto mt-6 max-w-xl text-lg">Ceritakan kebutuhan Anda. Kami bantu tentukan langkah
                pertamanya.</p>
            <div class="mt-10 flex flex-col items-center gap-4 sm:flex-row sm:justify-center">
                <a href="mailto:halo@contoh.com"
                    class="border-4 border-ink bg-ink px-8 py-4 font-mono font-bold text-paper hover:bg-paper hover:text-ink">halo@contoh.com</a>
                <a href="https://wa.me/6281234567890"
                    class="border-4 border-ink bg-paper px-8 py-4 font-mono font-bold hover:bg-ink hover:text-paper">WhatsApp:
                    0812-3456-7890</a>
            </div>
        </div>
    </section>

    @push('js')
        <script>
            // Tandai tab layanan (Setup AI / Website) sesuai bagian yang terlihat
            const tabs = document.querySelectorAll('[data-tab]');
            const setTab = (id) => tabs.forEach((t) => {
                const on = t.dataset.tab === id;
                t.classList.toggle('is-active', on);
                if (on) t.setAttribute('aria-current', 'true');
                else t.removeAttribute('aria-current');
            });
            const io = new IntersectionObserver((entries) => {
                entries.forEach((e) => {
                    if (e.isIntersecting) setTab(e.target.id);
                });
            }, {
                rootMargin: '-30% 0px -60% 0px'
            });
            ['setup-ai', 'website'].forEach((id) => {
                const el = document.getElementById(id);
                if (el) io.observe(el);
            });
        </script>

        <script>
            // FAQ: buka-tutup dengan transisi
            document.querySelectorAll('.faq-btn').forEach((btn) => {
                btn.addEventListener('click', () => {
                    const item = btn.closest('.faq-item');
                    const open = item.classList.toggle('is-open');
                    btn.setAttribute('aria-expanded', open);
                });
            });
        </script>
    @endpush
@endsection
