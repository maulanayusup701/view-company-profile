<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <title>{{ $title }}</title>
    <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.png') }}" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&family=Space+Mono:wght@400;700&display=swap"
        rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com/3.4.17"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        display: ['"Archivo Black"', 'sans-serif'],
                        mono: ['"Space Mono"', 'monospace'],
                    },
                    maxWidth: {
                        '6xl': '120rem'
                    },
                    // Warna membaca CSS variable (format channel RGB supaya /80, /60 tetap jalan)
                    colors: {
                        paper: 'rgb(var(--color-paper) / <alpha-value>)',
                        ink: 'rgb(var(--color-ink) / <alpha-value>)',
                        signal: 'rgb(var(--color-signal) / <alpha-value>)',
                    },
                    boxShadow: {
                        brutal: '8px 8px 0 0 rgb(var(--color-signal))',
                        'brutal-sm': '4px 4px 0 0 rgb(var(--color-signal))',
                    },
                },
            },
            plugins: [
                function({
                    addBase,
                    addComponents
                }) {
                    // ---------- Variable warna + base ----------
                    addBase({
                        ':root': {
                            '--color-paper': '242 242 236', // #F2F2EC
                            '--color-ink': '10 10 10', // #0A0A0A
                            '--color-signal': '255 90 31', // #FF5A1F
                        },
                        html: {
                            scrollBehavior: 'smooth'
                        },
                        body: {
                            fontFamily: '"Space Mono", monospace'
                        },
                        'a:focus-visible, button:focus-visible, input:focus-visible': {
                            outline: '4px solid rgb(var(--color-signal))',
                            outlineOffset: '2px',
                        },
                        mark: {
                            backgroundColor: 'rgb(var(--color-signal))',
                            color: 'rgb(var(--color-ink))',
                            padding: '0 2px',
                        },
                        '@keyframes rise': {
                            from: {
                                opacity: '0',
                                transform: 'translateY(24px)'
                            },
                            to: {
                                opacity: '1',
                                transform: 'none'
                            },
                        },
                        '@media (prefers-reduced-motion: reduce)': {
                            html: {
                                scrollBehavior: 'auto'
                            },
                        },
                    });

                    // ---------- Komponen yang dipakai berulang ----------
                    addComponents({
                        /* Animasi masuk */
                        '.rise': {
                            animation: 'rise 0.7s cubic-bezier(0.2, 0.7, 0.2, 1) both'
                        },
                        '.rise-2': {
                            animationDelay: '0.15s'
                        },
                        '.rise-3': {
                            animationDelay: '0.3s'
                        },
                        '.rise-4': {
                            animationDelay: '0.45s'
                        },

                        /* Kartu: geser + bayangan oranye saat hover
                           (menggantikan: transition duration-200 hover:z-10 hover:-translate-x-1
                            hover:-translate-y-1 hover:bg-ink hover:text-paper hover:shadow-[8px_8px_0_0_#FF5A1F]) */
                        '.card-hover': {
                            position: 'relative',
                            transitionProperty: 'color, background-color, border-color, box-shadow, transform',
                            transitionDuration: '200ms',
                            transitionTimingFunction: 'cubic-bezier(0.4, 0, 0.2, 1)',
                        },
                        '.card-hover:hover': {
                            zIndex: '10',
                            transform: 'translate(-0.25rem, -0.25rem)',
                            backgroundColor: 'rgb(var(--color-ink))',
                            color: 'rgb(var(--color-paper))',
                            boxShadow: '8px 8px 0 0 rgb(var(--color-signal))',
                        },

                        /* Menu desktop */
                        '.desk-link.is-active': {
                            textDecoration: 'underline',
                            textDecorationColor: 'rgb(var(--color-signal))',
                            textDecorationThickness: '4px',
                            textUnderlineOffset: '6px',
                        },

                        /* Bottom bar mobile */
                        '.nav-item': {
                            WebkitTapHighlightColor: 'transparent'
                        },
                        '.nav-item.is-active': {
                            backgroundColor: 'rgb(var(--color-ink))',
                            color: 'rgb(var(--color-paper))',
                        },
                        '.nav-item.is-active .nav-icon': {
                            color: 'rgb(var(--color-signal))'
                        },
                        '.nav-item.is-active + .nav-item': {
                            borderLeftColor: 'transparent'
                        },

                        /* Tab layanan (service.html) */
                        '.tab-link.is-active': {
                            backgroundColor: 'rgb(var(--color-ink))',
                            color: 'rgb(var(--color-paper))',
                        },

                        /* Chip kategori (article.html) */
                        '.chip[aria-pressed="true"]': {
                            backgroundColor: 'rgb(var(--color-ink))',
                            color: 'rgb(var(--color-paper))',
                            boxShadow: '4px 4px 0 0 rgb(var(--color-signal))',
                        },

                        /* FAQ (service.html) */
                        '.faq-panel': {
                            display: 'grid',
                            gridTemplateRows: '0fr',
                            transition: 'grid-template-rows 0.4s cubic-bezier(0.2, 0.7, 0.2, 1)',
                        },
                        '.faq-panel > div': {
                            overflow: 'hidden'
                        },
                        '.faq-panel p': {
                            opacity: '0',
                            transform: 'translateY(-8px)',
                            transition: 'opacity 0.3s ease, transform 0.4s cubic-bezier(0.2, 0.7, 0.2, 1)',
                        },
                        '.faq-item.is-open .faq-panel': {
                            gridTemplateRows: '1fr'
                        },
                        '.faq-item.is-open .faq-panel p': {
                            opacity: '1',
                            transform: 'none',
                            transitionDelay: '0.08s',
                        },
                        '.faq-btn': {
                            transition: 'background-color 0.2s, color 0.2s'
                        },
                        '.faq-item.is-open .faq-btn': {
                            backgroundColor: 'rgb(var(--color-ink))',
                            color: 'rgb(var(--color-paper))',
                        },
                        '.faq-icon': {
                            transition: 'transform 0.35s cubic-bezier(0.2, 0.7, 0.2, 1)'
                        },
                        '.faq-item.is-open .faq-icon': {
                            transform: 'rotate(135deg)',
                            color: 'rgb(var(--color-signal))',
                        },

                        '@media (prefers-reduced-motion: reduce)': {
                            '.rise': {
                                animation: 'none'
                            },
                            '.faq-panel, .faq-panel p, .faq-icon, .faq-btn': {
                                transition: 'none'
                            },
                        },
                    });
                },
            ],
        };
    </script>
    <style>
        .embla__slide {
            scroll-snap-align: start;
            border-right-width: 0 !important;
        }

        .embla__container {
            gap: 1.5rem;
        }

        .embla__slide figure {
            display: flex;
            flex-direction: column;
            border: 4px solid rgb(var(--color-ink));
        }

        .embla__slide figcaption {
            margin-top: auto !important;
            padding-top: 1.5rem;
        }
    </style>
</head>
