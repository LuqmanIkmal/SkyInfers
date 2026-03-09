<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'SkyInfers — Digital Marketing Agency in Johor Bahru, Malaysia')</title>
    <meta name="description" content="@yield('description', 'SkyInfers is a digital marketing agency in Johor Bahru offering content creation, web design and custom system development.')">
    <meta name="keywords"    content="@yield('keywords', 'digital marketing agency johor bahru, web design malaysia, skyinfers')">
    <meta name="author"      content="SkyInfers">
    <meta name="robots"      content="index, follow">
    <link rel="canonical"    href="@yield('canonical', url()->current())">

    <meta property="og:type"        content="website">
    <meta property="og:site_name"   content="SkyInfers">
    <meta property="og:title"       content="@yield('og_title', 'SkyInfers — Digital Marketing Agency in Johor Bahru')">
    <meta property="og:description" content="@yield('og_description', 'Content creation, web design and system development — all under one roof.')">
    <meta property="og:url"         content="@yield('canonical', url()->current())">
    <meta property="og:image"       content="@yield('og_image', asset('images/og-image.jpg'))">
    <meta property="og:locale"      content="en_MY">

    <meta name="twitter:card"        content="summary_large_image">
    <meta name="twitter:title"       content="@yield('og_title', 'SkyInfers — Digital Marketing Agency in Johor Bahru')">
    <meta name="twitter:description" content="@yield('og_description', 'Content creation, web design and system development — all under one roof.')">
    <meta name="twitter:image"       content="@yield('og_image', asset('images/og-image.jpg'))">

    @stack('jsonld')

    <link rel="icon" type="image/png" href="{{ asset('images/favicon.png') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Syne:wght@400;600;700;800&family=DM+Sans:ital,opsz,wght@0,9..40,300;0,9..40,400;0,9..40,500;1,9..40,300&display=swap">
<link href="https://fonts.googleapis.com/css2?family=Syne:wght@400;600;700;800&family=DM+Sans:ital,opsz,wght@0,9..40,300;0,9..40,400;0,9..40,500;1,9..40,300&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#080a0f] text-[#e8eaf0] antialiased overflow-x-hidden" style="cursor:none; font-family:'DM Sans',sans-serif;">

    {{-- Custom Cursor --}}
    <div id="cursor" style="position:fixed;top:0;left:0;z-index:9999;pointer-events:none;">
        <div id="cursor-dot" style="width:8px;height:8px;background:#4f8eff;border-radius:50%;transform:translate(-50%,-50%);position:absolute;"></div>
        <div id="cursor-ring" style="width:36px;height:36px;border:1.5px solid rgba(79,142,255,0.5);border-radius:50%;transform:translate(-50%,-50%);position:absolute;transition:all .18s ease;"></div>
    </div>

    {{-- Navigation --}}
    <nav id="navbar" class="fixed top-0 left-0 right-0 z-50 flex items-center justify-between px-6 md:px-14 py-5 transition-all duration-300 backdrop-blur-lg">
        <a href="{{ url('/') }}">
            <img src="{{ asset('images/logoWhite.png') }}" alt="SkyInfers" style="height:27px; width:auto;">
        </a>
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
        <a href="#cta" style="background:#4f8eff;color:#fff;padding:10px 24px;border-radius:8px;font-size:.9rem;font-weight:600;text-decoration:none;transition:all .2s;" onmouseover="this.style.background='#3a7bef'" onmouseout="this.style.background='#4f8eff'">
            Free Consultation
        </a>
    </nav>

    @yield('content')

    {{-- Footer --}}
    <footer style="border-top:1px solid rgba(255,255,255,0.07);padding:60px;background:#080a0f;display:grid;grid-template-columns:1.5fr 1fr 1fr 1fr;gap:40px;" class="flex-col-on-mobile">
        <div>
        <a href="{{ url('/') }}" style="display:block;margin-bottom:16px;">
            <img src="{{ asset('images/logoWhite.png') }}" alt="SkyInfers" style="height:27px; width:auto;">
        </a>
            <p style="color:#6b7280;font-size:.88rem;line-height:1.7;max-width:260px;">
                Building the web's most impactful digital experiences, one pixel at a time.
            </p>
        </div>
        @foreach([
            ['Services', ['Content Creation','Web Design','System Development']],
            ['Company',  ['Services','About','Projects','Contact']],
            ['Connect',  ['Instagram','Facebook','Whatsapp']],
        ] as [$heading, $items])
        <div>
            <h4 style="font-family:'Syne',sans-serif;font-size:.8rem;font-weight:700;letter-spacing:.1em;text-transform:uppercase;color:#6b7280;margin-bottom:20px;">{{ $heading }}</h4>
            <ul style="list-style:none;margin:0;padding:0;display:flex;flex-direction:column;gap:10px;">
                @foreach($items as $item)
                    <li><a href="#" style="color:#6b7280;text-decoration:none;font-size:.88rem;transition:color .2s;" onmouseover="this.style.color='#e8eaf0'" onmouseout="this.style.color='#6b7280'">{{ $item }}</a></li>
                @endforeach
            </ul>
        </div>
        @endforeach
    </footer>
    <div style="border-top:1px solid rgba(255,255,255,0.07);padding:24px 60px;display:flex;justify-content:space-between;align-items:center;font-size:.82rem;color:#6b7280;background:#080a0f;">
        <span>© {{ date('Y') }} SkyInfers. All rights reserved.</span>
        <span>Built with precision &amp; purpose ✦</span>
    </div>

    {{-- Global Scripts --}}
    <script>
        // Cursor
        const dot = document.getElementById('cursor-dot');
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

        // Nav scroll
        window.addEventListener('scroll', () => {
            const nav = document.getElementById('navbar');
            if (window.scrollY > 40) {
                nav.style.borderBottom = '1px solid rgba(255,255,255,0.07)';
                nav.style.background = 'rgba(8,10,15,0.85)';
            } else {
                nav.style.borderBottom = 'none';
                nav.style.background = 'transparent';
            }
        });

        // Scroll reveal
        document.querySelectorAll('.reveal').forEach(el => {
            el.style.opacity = '0';
            el.style.transform = 'translateY(40px)';
            el.style.transition = 'opacity .7s ease, transform .7s ease';
        });
        const revealObs = new IntersectionObserver(entries => {
            entries.forEach(e => {
                if (e.isIntersecting) {
                    e.target.style.opacity = '1';
                    e.target.style.transform = 'translateY(0)';
                    revealObs.unobserve(e.target);
                }
            });
        }, { threshold: 0.12 });
        document.querySelectorAll('.reveal').forEach(el => revealObs.observe(el));
    </script>

    @stack('scripts')
</body>
</html>