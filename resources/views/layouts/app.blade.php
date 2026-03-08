<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'SkyInfers - Digital Marketing Agency')</title>
    <meta name="description" content="@yield('description', 'SkyInfers crafts high-performance web experiences.')">
    <link rel="icon" type="image/png" href="{{ asset('images/favicon.png') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#080a0f] text-[#e8eaf0] antialiased overflow-x-hidden" style="font-family:'DM Sans',sans-serif;">
<style>
  @media(hover:hover){body{cursor:none;}}
  @media(hover:none){#cursor{display:none;}}
</style>

    {{-- Custom Cursor --}}
    <div id="cursor" style="position:fixed;top:0;left:0;z-index:9999;pointer-events:none;">
        <div id="cursor-dot" style="width:8px;height:8px;background:#4f8eff;border-radius:50%;transform:translate(-50%,-50%);position:absolute;"></div>
        <div id="cursor-ring" style="width:36px;height:36px;border:1.5px solid rgba(79,142,255,0.5);border-radius:50%;transform:translate(-50%,-50%);position:absolute;transition:all .18s ease;"></div>
    </div>

    {{-- Navigation --}}
    <nav id="navbar" class="fixed top-0 left-0 right-0 z-50 flex items-center justify-between px-6 md:px-14 py-5 transition-all duration-300 backdrop-blur-lg">
        <a href="{{ url('/') }}" style="font-family:'Syne',sans-serif;font-weight:800;font-size:1.4rem;letter-spacing:-0.03em;color:#fff;text-decoration:none;">
            Sky<span style="color:#4f8eff;">Infers</span>
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
        <a href="#cta" class="hidden md:inline-block" style="background:#4f8eff;color:#fff;padding:10px 24px;border-radius:8px;font-size:.9rem;font-weight:600;text-decoration:none;transition:all .2s;" onmouseover="this.style.background='#3a7bef'" onmouseout="this.style.background='#4f8eff'">
            Free Consultation
        </a>
        <button id="hamburger" class="md:hidden flex flex-col justify-center gap-[5px] w-8 h-8 p-1 z-[60] relative" aria-label="Menu">
            <span class="ham-line block h-[2px] w-full bg-[#e8eaf0] rounded transition-all duration-300"></span>
            <span class="ham-line block h-[2px] w-full bg-[#e8eaf0] rounded transition-all duration-300"></span>
            <span class="ham-line block h-[2px] w-full bg-[#e8eaf0] rounded transition-all duration-300"></span>
        </button>
    </nav>

    {{-- Mobile Menu --}}
    <div id="mobileMenu" class="fixed inset-0 z-40 flex flex-col items-center justify-center gap-0 transition-all duration-300"
         style="background:rgba(8,10,15,0.97);backdrop-filter:blur(20px);display:none !important;">
        @foreach([
            [url('/'),         '',         'HOME'],
            [url('/services'), 'services', 'SERVICES'],
            [url('/about'),    'about',    'ABOUT'],
            [url('/projects'), 'projects', 'PROJECTS'],
            [url('/contact'),  'contact',  'CONTACT'],
        ] as [$href, $route, $label])
        <a href="{{ $href }}" class="w-full text-center py-5 border-b border-white/[0.05] font-syne font-bold tracking-widest text-2xl no-underline transition-colors duration-200"
           style="color:{{ (request()->is($route) || ($route==='' && request()->is('/'))) ? '#ffffff' : '#6b7280' }};"
           onmouseover="this.style.color='#fff'" onmouseout="this.style.color='{{ (request()->is($route) || ($route==='' && request()->is('/'))) ? '#ffffff' : '#6b7280' }}'">
            {{ $label }}
        </a>
        @endforeach
        <a href="#cta" class="mt-8 px-10 py-4 rounded-xl font-syne font-bold text-white no-underline text-base" style="background:#4f8eff;">Free Consultation</a>
    </div>

    @yield('content')

    {{-- Footer --}}
    <footer class="border-t border-white/[0.07] bg-[#080a0f] px-6 sm:px-10 md:px-[60px] py-10 md:py-[60px] grid grid-cols-2 md:grid-cols-4 gap-8 md:gap-10">
        <div class="col-span-2 md:col-span-1">
            <a href="{{ url('/') }}" style="font-family:'Syne',sans-serif;font-weight:800;font-size:1.2rem;color:#fff;text-decoration:none;display:block;margin-bottom:16px;">
                Sky<span style="color:#4f8eff;">Infers</span>
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
    <div class="border-t border-white/[0.07] bg-[#080a0f] px-6 sm:px-10 md:px-[60px] py-5 flex flex-col sm:flex-row justify-between items-center gap-2 text-[.82rem] text-[#6b7280]">
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

        // Hamburger
        const ham = document.getElementById('hamburger');
        const mob = document.getElementById('mobileMenu');
        const lines = ham.querySelectorAll('.ham-line');
        let menuOpen = false;
        ham.addEventListener('click', () => {
            menuOpen = !menuOpen;
            mob.style.setProperty('display', menuOpen ? 'flex' : 'none', 'important');
            document.body.style.overflow = menuOpen ? 'hidden' : '';
            lines[0].style.transform = menuOpen ? 'translateY(7px) rotate(45deg)' : '';
            lines[1].style.opacity   = menuOpen ? '0' : '1';
            lines[2].style.transform = menuOpen ? 'translateY(-7px) rotate(-45deg)' : '';
        });
        mob.querySelectorAll('a').forEach(a => a.addEventListener('click', () => {
            menuOpen = false;
            mob.style.setProperty('display', 'none', 'important');
            document.body.style.overflow = '';
            lines.forEach(l => { l.style.transform=''; l.style.opacity='1'; });
        }));

    </script>

    @stack('scripts')
</body>
</html>