<script>
    (() => {
        const viewport = document.querySelector('.embla__viewport');
        const slides = document.querySelectorAll('.embla__slide');
        if (!viewport || slides.length < 2) return;

        let timer = null;
        const step = () => slides[1].offsetLeft - slides[0].offsetLeft;

        const next = () => {
            const atEnd = viewport.scrollLeft + viewport.clientWidth >= viewport.scrollWidth - 4;
            viewport.scrollTo({
                left: atEnd ? 0 : viewport.scrollLeft + step(),
                behavior: 'smooth'
            });
        };
        const prev = () => {
            const atStart = viewport.scrollLeft <= 4;
            viewport.scrollTo({
                left: atStart ? viewport.scrollWidth : viewport.scrollLeft - step(),
                behavior: 'smooth'
            });
        };

        const reduceMotion = matchMedia('(prefers-reduced-motion: reduce)').matches;
        const stop = () => clearInterval(timer);
        const start = () => {
            stop();
            if (!reduceMotion) timer = setInterval(next, 4000);
        };

        ['mouseenter', 'touchstart', 'focusin'].forEach((e) =>
            viewport.addEventListener(e, stop, {
                passive: true
            }));
        ['mouseleave', 'touchend', 'focusout'].forEach((e) =>
            viewport.addEventListener(e, start));

        document.getElementById('ulasan-prev')?.addEventListener('click', () => {
            prev();
            start();
        });
        document.getElementById('ulasan-next')?.addEventListener('click', () => {
            next();
            start();
        });

        start();
    })();
</script>

<script>
    // Header sticky
    (() => {
        const header = document.querySelector('header');
        if (!header) return;

        const onScroll = () => {
            const scrolled = window.scrollY > 80;
            if (scrolled === header.classList.contains('fixed')) return;
            header.style.transition = 'none';
            if (scrolled) {
                header.classList.remove('absolute');
                header.classList.add('fixed', 'bg-paper', 'border-b-4', 'border-ink', '-translate-y-full');
                header.offsetHeight;
                header.style.transition = '';
                requestAnimationFrame(() => requestAnimationFrame(() => header.classList.remove(
                    '-translate-y-full')));
            } else {
                header.classList.remove('fixed', 'bg-paper', 'border-b-4', 'border-ink', '-translate-y-full');
                header.classList.add('absolute');
                header.offsetHeight;
                header.style.transition = '';
            }
        };
        window.addEventListener('scroll', onScroll, {
            passive: true
        });
        onScroll();
    })();
</script>

<script>
    // Link aktif (menu desktop + bottom nav)
    (() => {
        const spyLinks = document.querySelectorAll('[data-spy]');
        const page = document.body.dataset.page || 'beranda';

        // Halaman lain section di landing page dipetakan ke tab yang ada di landing page
        const sectionToTab = {
            beranda: 'beranda',
            proses: 'layanan',
            layanan: 'layanan',
            artikel: 'layanan',
            ulasan: 'layanan',
            tentang: 'layanan',
            kontak: 'layanan',
        };

        const setActive = (tabId) => {
            spyLinks.forEach((link) => {
                const on = link.dataset.spy === tabId;
                link.classList.toggle('is-active', on);
                if (on) link.setAttribute('aria-current', 'page');
                else link.removeAttribute('aria-current');
            });
        };

        setActive(page);

        // Scroll-spy hanya di landing page
        if (page !== 'beranda') return;

        const observer = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    setActive(sectionToTab[entry.target.id] || 'beranda');
                }
            });
        }, {
            rootMargin: '-45% 0px -50% 0px'
        });

        Object.keys(sectionToTab)
            .map((id) => document.getElementById(id))
            .filter(Boolean)
            .forEach((s) => observer.observe(s));
    })();
</script>
</body>

</html>
