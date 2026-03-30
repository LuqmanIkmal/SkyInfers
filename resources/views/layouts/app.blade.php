<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- Primary SEO --}}
    <title>@yield('title', 'SkyInfers — Web Design & System Development | Johor Bahru, Malaysia')</title>
    <meta name="description" content="@yield('description', 'SkyInfers is a web design and system development agency in Johor Bahru, Malaysia. We build stunning websites and custom systems that help businesses grow online.')">
    <meta name="keywords"    content="@yield('keywords', 'web design johor bahru, system development malaysia, laravel developer malaysia, corporate website johor bahru, e-commerce website malaysia, skyinfers')">
    <meta name="author"      content="SkyInfers">
    <meta name="robots"      content="index, follow">
    <link rel="canonical"    href="@yield('canonical', url()->current())">

    {{-- Open Graph --}}
    <meta property="og:type"        content="website">
    <meta property="og:site_name"   content="SkyInfers">
    <meta property="og:title"       content="@yield('og_title', 'SkyInfers — Web Design & System Development | Johor Bahru')">
    <meta property="og:description" content="@yield('og_description', 'Web design and system development agency in Johor Bahru. We build websites and custom systems that grow your business.')">
    <meta property="og:url"         content="@yield('canonical', url()->current())">
    <meta property="og:image"       content="@yield('og_image', asset('images/og_image.jpg'))">
    <meta property="og:image:width"  content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:locale"      content="en_MY">

    {{-- Twitter Card --}}
    <meta name="twitter:card"        content="summary_large_image">
    <meta name="twitter:title"       content="@yield('og_title', 'SkyInfers — Web Design & System Development | Johor Bahru')">
    <meta name="twitter:description" content="@yield('og_description', 'Web design and system development agency in Johor Bahru, Malaysia.')">
    <meta name="twitter:image"       content="@yield('og_image', asset('images/og-image.jpg'))">

    {{-- Page-specific JSON-LD --}}
    @stack('jsonld')

    {{-- Sitewide JSON-LD --}}
    <script type="application/ld+json">
    {
        "@@context": "https://schema.org",
        "@@type": "ProfessionalService",
        "name": "SkyInfers",
        "alternateName": "Sky Infers Enterprise",
        "description": "Web design and system development agency in Johor Bahru, Malaysia.",
        "url": "{{ config('app.url') }}",
        "logo": "{{ asset('images/logoWhite.png') }}",
        "telephone": "+60117-023-7694",
        "email": "info@skyinfers.com",
        "address": {
            "@@type": "PostalAddress",
            "addressLocality": "Johor Bahru",
            "addressRegion": "Johor",
            "addressCountry": "MY"
        },
        "areaServed": { "@@type": "Country", "name": "Malaysia" },
        "priceRange": "$$",
        "openingHours": "Mo-Fr 09:00-18:00",
        "sameAs": [
            "https://www.instagram.com/skyinfers",
            "https://www.facebook.com/people/Sky-Infers/61577502219825/",
            "https://www.tiktok.com/@skyinfers.web.sys"
        ],
        "hasOfferCatalog": {
            "@@type": "OfferCatalog",
            "name": "Web & System Development Services",
            "itemListElement": [
                { "@@type": "Offer", "itemOffered": { "@@type": "Service", "name": "Web Design & Development" } },
                { "@@type": "Offer", "itemOffered": { "@@type": "Service", "name": "System Development" } }
            ]
        }
    }
    </script>

    <link rel="icon" type="image/png" href="{{ asset('images/favicon.png') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#080a0f] text-[#e8eaf0] antialiased overflow-x-hidden" style="font-family:'DM Sans',sans-serif;">

    {{-- Custom Cursor (desktop only) --}}
    <div id="cursor" class="hidden md:block" style="position:fixed;top:0;left:0;z-index:9999;pointer-events:none;">
        <div id="cursor-dot" style="width:8px;height:8px;background:#4f8eff;border-radius:50%;transform:translate(-50%,-50%);position:absolute;"></div>
        <div id="cursor-ring" style="width:36px;height:36px;border:1.5px solid rgba(79,142,255,0.5);border-radius:50%;transform:translate(-50%,-50%);position:absolute;transition:all .18s ease;"></div>
    </div>

    {{-- Navigation --}}
    <nav id="navbar" class="fixed top-0 left-0 right-0 z-50 flex items-center justify-between px-4 sm:px-6 md:px-14 py-4 md:py-5 transition-all duration-300 backdrop-blur-lg">

        {{-- Logo --}}
        <a href="{{ url('/') }}" class="flex-shrink-0">
            <img src="{{ asset('images/logoWhite.png') }}" alt="SkyInfers" style="height:27px; width:auto;">
        </a>

        {{-- Desktop Nav Links --}}
        <ul class="hidden md:flex gap-9 list-none m-0 p-0">
            @foreach([
                [url('/services'), 'services', 'SERVICES'],
                [url('/about'),    'about',    'ABOUT'],
                [url('/projects'), 'projects', 'PROJECTS'],
                [url('/contact'),  'contact',  'CONTACT'],
            ] as [$href, $route, $label])
                <li>
                    <a href="{{ $href }}"
                    style="text-decoration:none;
                            font-size:.9rem;
                            font-weight:500;
                            transition:color .2s;
                            padding-bottom:3px;
                            color: {{ request()->is($route) ? '#ffffff' : '#6b7280' }};
                            border-bottom: {{ request()->is($route) ? '2px solid #4f8eff' : '2px solid transparent' }};"
                    onmouseover="this.style.color='#fff'"
                    onmouseout="this.style.color='{{ request()->is($route) ? '#ffffff' : '#6b7280' }}'">
                        {{ $label }}
                    </a>
                </li>
            @endforeach
        </ul>

        {{-- Desktop CTA --}}
        <a href="/contact" class="hidden md:inline-flex" style="background:#4f8eff;color:#fff;padding:10px 24px;border-radius:8px;font-size:.9rem;font-weight:600;text-decoration:none;transition:all .2s;" onmouseover="this.style.background='#3a7bef'" onmouseout="this.style.background='#4f8eff'">
            Free Consultation
        </a>

        {{-- Mobile Hamburger --}}
        <button id="nav-toggle" class="md:hidden flex flex-col justify-center items-center w-10 h-10 rounded-lg border border-white/10 transition-all duration-200 hover:border-white/25 hover:bg-white/5" aria-label="Toggle menu" aria-expanded="false">
            <span class="ham-bar block w-5 h-px bg-white/80 transition-all duration-300 origin-center"></span>
            <span class="ham-bar block w-5 h-px bg-white/80 transition-all duration-300 mt-1.5"></span>
            <span class="ham-bar block w-5 h-px bg-white/80 transition-all duration-300 origin-center mt-1.5"></span>
        </button>
    </nav>

    {{-- Mobile Menu Overlay --}}
    <div id="mobile-overlay" class="fixed inset-0 z-40 bg-black/60 backdrop-blur-sm opacity-0 pointer-events-none transition-opacity duration-300 md:hidden"></div>

    {{-- Mobile Menu Drawer --}}
    <div id="mobile-drawer" class="fixed top-0 right-0 bottom-0 z-40 w-72 max-w-[85vw] bg-[#0d1117] border-l border-white/[0.07] flex flex-col translate-x-full transition-transform duration-300 ease-out md:hidden" style="padding-top:72px;">
        <div class="flex flex-col gap-1 px-4 py-6 flex-1 overflow-y-auto">
            @foreach([
                [url('/services'), 'services', 'Services'],
                [url('/about'),    'about',    'About'],
                [url('/projects'), 'projects', 'Projects'],
                [url('/contact'),  'contact',  'Contact'],
            ] as [$href, $route, $label])
            <a href="{{ $href }}"
               class="flex items-center justify-between px-4 py-3.5 rounded-xl transition-all duration-200 text-base font-medium no-underline"
               style="color: {{ request()->is($route) ? '#fff' : '#9ca3af' }}; background: {{ request()->is($route) ? 'rgba(79,142,255,0.1)' : 'transparent' }}; border: 1px solid {{ request()->is($route) ? 'rgba(79,142,255,0.25)' : 'transparent' }};">
                {{ $label }}
                @if(request()->is($route))
                <span style="width:6px;height:6px;background:#4f8eff;border-radius:50%;display:block;"></span>
                @endif
            </a>
            @endforeach
        </div>

        <div class="px-4 pb-8">
            <a href="/contact"
               id="mobile-cta"
               class="block text-center w-full py-3.5 rounded-xl font-semibold text-base no-underline transition-all duration-200"
               style="background:#4f8eff;color:#fff;">
                Free Consultation
            </a>
            <p class="text-center text-xs text-[#6b7280] mt-3">No commitment. Just a conversation.</p>
        </div>
    </div>

    @yield('content')

    {{-- Footer --}}
    <footer style="border-top:1px solid rgba(255,255,255,0.07);background:#080a0f;" class="px-4 sm:px-8 md:px-14 pt-14 pb-10">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-10 md:gap-10">
            {{-- Brand col — full width on smallest screens --}}
            <div class="col-span-2 md:col-span-1">
                <a href="{{ url('/') }}" style="display:block;margin-bottom:16px;margin-left:-10px;">
                    <img src="{{ asset('images/logoWhite.png') }}" alt="SkyInfers" style="height:24px; width:auto;">
                </a>
                <p style="color:#6b7280;font-size:.88rem;line-height:1.7;max-width:240px;">
                    Building the web's most impactful digital experiences, one pixel at a time.
                </p>
            </div>

            @php
            $footerLinks = [
                ['Services', [
                    ['Landing Page',        '/projects'],
                    ['Corporate Website',   '/projects'],
                    ['E-Commerce',          '/projects'],
                    ['System Development',  '/projects'],
                ]],
                ['Company', [
                    ['Services',  url('/services')],
                    ['About',     url('/about')],
                    ['Projects',  url('/projects')],
                    ['Contact',   url('/contact')],
                ]],
                ['Connect', [
                    ['Instagram', 'https://www.instagram.com/skyinfers'],
                    ['Facebook',  'https://www.facebook.com/people/Sky-Infers/61577502219825/'],
                    ['TikTok',    'https://www.tiktok.com/@skyinfers.web.sys?_r=1&_t=ZS-956IKx9o6YX'],
                    ['WhatsApp',  'https://wa.me/601170237694'],
                ]],
            ];
            @endphp
            @foreach($footerLinks as [$heading, $items])
            <div>
                <h4 style="font-family:'Syne',sans-serif;font-size:.75rem;font-weight:700;letter-spacing:.1em;text-transform:uppercase;color:#4b5563;margin-bottom:16px;">{{ $heading }}</h4>
                <ul style="list-style:none;margin:0;padding:0;display:flex;flex-direction:column;gap:10px;">
                    @foreach($items as [$label, $href])
                    <li>
                        <a href="{{ $href }}"
                        {{ $heading === 'Connect' ? 'target="_blank" rel="noopener"' : '' }}
                        style="color:#6b7280;text-decoration:none;font-size:.85rem;transition:color .2s;"
                        onmouseover="this.style.color='#e8eaf0'"
                        onmouseout="this.style.color='#6b7280'">
                            {{ $label }}
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>
            @endforeach
        </div>

        <div style="border-top:1px solid rgba(255,255,255,0.07);margin-top:40px;padding-top:24px;display:flex;flex-wrap:wrap;gap:12px;justify-content:space-between;align-items:center;font-size:.8rem;color:#6b7280;">
        <div style="display:flex;flex-direction:column;gap:4px;">
            <span>© {{ date('Y') }} SkyInfers. All rights reserved.</span>
            <span style="font-size:.75rem;color:#4b5563;">
                Sky Infers Enterprise (003835267-M)
            </span>
        </div>
            <span>Built with precision &amp; purpose</span>
        </div>
    </footer>

    {{-- Global Scripts --}}
    <script>
        // ── CUSTOM CURSOR (desktop only)
        if (window.innerWidth >= 768) {
            document.body.style.cursor = 'none';
            const dot  = document.getElementById('cursor-dot');
            const ring = document.getElementById('cursor-ring');
            let mx = 0, my = 0, rx = 0, ry = 0;
            document.addEventListener('mousemove', e => {
                mx = e.clientX; my = e.clientY;
                dot.style.left = mx + 'px'; dot.style.top = my + 'px';
            });
            (function animRing() {
                rx += (mx - rx) * 0.12; ry += (my - ry) * 0.12;
                ring.style.left = rx + 'px'; ring.style.top = ry + 'px';
                requestAnimationFrame(animRing);
            })();
        }

        // ── NAV SCROLL
        window.addEventListener('scroll', () => {
            const nav = document.getElementById('navbar');
            if (window.scrollY > 40) {
                nav.style.borderBottom = '1px solid rgba(255,255,255,0.07)';
                nav.style.background   = 'rgba(8,10,15,0.92)';
            } else {
                nav.style.borderBottom = 'none';
                nav.style.background   = 'transparent';
            }
        });

        // ── HAMBURGER MENU
        const toggle  = document.getElementById('nav-toggle');
        const drawer  = document.getElementById('mobile-drawer');
        const overlay = document.getElementById('mobile-overlay');
        const bars    = toggle.querySelectorAll('.ham-bar');
        let menuOpen  = false;

        function openMenu() {
            menuOpen = true;
            drawer.style.transform  = 'translateX(0)';
            overlay.style.opacity   = '1';
            overlay.style.pointerEvents = 'auto';
            toggle.setAttribute('aria-expanded', 'true');
            bars[0].style.transform = 'translateY(6px) rotate(45deg)';
            bars[1].style.opacity   = '0';
            bars[2].style.transform = 'translateY(-6px) rotate(-45deg)';
            document.body.style.overflow = 'hidden';
        }

        function closeMenu() {
            menuOpen = false;
            drawer.style.transform  = 'translateX(100%)';
            overlay.style.opacity   = '0';
            overlay.style.pointerEvents = 'none';
            toggle.setAttribute('aria-expanded', 'false');
            bars[0].style.transform = '';
            bars[1].style.opacity   = '1';
            bars[2].style.transform = '';
            document.body.style.overflow = '';
        }

        toggle.addEventListener('click', () => menuOpen ? closeMenu() : openMenu());
        overlay.addEventListener('click', closeMenu);
        document.getElementById('mobile-cta').addEventListener('click', closeMenu);
        document.querySelectorAll('#mobile-drawer a').forEach(a => a.addEventListener('click', closeMenu));
        document.addEventListener('keydown', e => { if (e.key === 'Escape' && menuOpen) closeMenu(); });

        // ── SCROLL REVEAL
        document.querySelectorAll('.reveal').forEach(el => {
            el.style.opacity   = '0';
            el.style.transform = 'translateY(32px)';
            el.style.transition = 'opacity .65s ease, transform .65s ease';
        });
        const revealObs = new IntersectionObserver(entries => {
            entries.forEach(e => {
                if (e.isIntersecting) {
                    e.target.style.opacity   = '1';
                    e.target.style.transform = 'translateY(0)';
                    revealObs.unobserve(e.target);
                }
            });
        }, { threshold: 0.1 });
        document.querySelectorAll('.reveal').forEach(el => revealObs.observe(el));
    </script>

    @stack('scripts')
</body>
</html>