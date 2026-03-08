@extends('layouts.app')

@section('title', 'SkyInfers Digital Marketing Agency')

@section('content')

{{-- ══════════════════════════════════════
     HERO
══════════════════════════════════════ --}}
<section id="hero" class="relative min-h-screen flex flex-col justify-between px-5 sm:px-8 md:px-14 pt-24 pb-10 overflow-hidden">

    {{-- Blobs --}}
    <div class="absolute inset-0 pointer-events-none">
        <div class="hero-blob absolute w-[600px] h-[600px] -top-24 -right-24 rounded-full bg-accent blur-[120px] opacity-[0.18] animate-float-slow"></div>
        <div class="hero-blob absolute w-[400px] h-[400px] bottom-0 left-24 rounded-full bg-accent-2 blur-[120px] opacity-[0.18] animate-float-slow-delay"></div>
        <div class="grid-overlay"></div>
        <canvas id="heroCanvas" class="absolute inset-0 w-full h-full" style="opacity:0.4;"></canvas>
    </div>

    {{-- TOP: Tag --}}
    <div class="hero-init opacity-0 animate-fade-up-1 inline-flex items-center gap-2 bg-accent/10 border border-accent/25 rounded-full px-4 py-1.5 text-xs text-accent font-semibold tracking-widest uppercase w-fit self-center">
        <span class="w-1.5 h-1.5 bg-accent-2 rounded-full animate-pulse-dot"></span>
        Digital Marketing Agency
    </div>

    {{-- MIDDLE: Headline + Sub + Buttons --}}
    <div class="flex flex-col gap-5 items-center text-center">
        <h1 class="hero-init opacity-0 animate-fade-up-2 font-syne font-extrabold leading-[1.05] tracking-tight"
            style="font-size: clamp(2rem, 5vw, 4.2rem);">
            <span class="block">We help businesses</span>
            <span class="flex flex-wrap justify-center items-center gap-2 md:gap-4 ml-10 md:ml-[50px]">
                <span>turn clicks into</span>
                <span class="relative overflow-hidden inline-block" style="height:1.10em; text-align:left;" id="cycleWrap">
                    @foreach(['revenue','profits','clients','scaling','success'] as $word)
                        <span class="cycle-word {{ $loop->first ? 'active' : '' }}">{{ $word }}</span>
                    @endforeach
                </span>
            </span>
        </h1>

        <p class="hero-init opacity-0 animate-fade-up-3 text-muted text-base leading-relaxed max-w-lg">
            SkyInfers combines creative content, stunning web design, and powerful system development to grow your business in the digital world.
        </p>

        <div class="hero-init opacity-0 animate-fade-up-4 flex gap-4 items-center justify-center">
            <a href="#services"
               class="bg-accent hover:bg-[#3a7bef] text-white px-8 py-3 rounded-xl font-semibold text-sm transition-all duration-200 hover:-translate-y-0.5 hover:shadow-[0_8px_30px_rgba(79,142,255,0.3)] no-underline">
                Explore Services
            </a>
            <a href="#cta"
               class="border border-white/[0.07] hover:border-white/25 hover:bg-white/[0.04] text-[#e8eaf0] px-8 py-3 rounded-xl font-medium text-sm flex items-center gap-2 transition-all duration-200 no-underline">
                Start a Project
                <svg width="14" height="14" viewBox="0 0 14 14" fill="none">
                    <path d="M2 7h10M8 3l4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </a>
        </div>
    </div>

    {{-- BOTTOM: Scroll Indicator --}}
    <div class="hero-init opacity-0 animate-fade-up-5 flex items-center justify-center gap-3 text-xs text-muted tracking-widest uppercase">
        <div class="animate-scroll-line h-px bg-muted" style="width:40px"></div>
        Scroll to explore
    </div>

</section>


{{-- ══════════════════════════════════════
     MARQUEE
══════════════════════════════════════ --}}
<div class="border-t border-b border-white/[0.07] py-5 overflow-hidden bg-bg-2">
    <div class="flex whitespace-nowrap animate-marquee" id="marqueeTrack">
        @php
            $items = ['Content Creation','Poster Design','Video Production','Web Design','Landing Page','Corporate Website','E-Commerce','System Development','SkyInfers'];
            $allItems = array_merge($items, $items);
        @endphp
        @foreach($allItems as $item)
            <div class="flex items-center gap-8 px-10 font-syne text-xs font-semibold tracking-widest uppercase text-muted flex-shrink-0">
                {{ $item }}
                <span class="w-1 h-1 bg-accent rounded-full"></span>
            </div>
        @endforeach
    </div>
</div>


{{-- ══════════════════════════════════════
     SERVICES
══════════════════════════════════════ --}}
<section id="services" class="bg-bg-2 px-5 sm:px-8 md:px-14 py-16 md:py-28">

    {{-- Header --}}
    <div class="reveal flex flex-col md:flex-row justify-between items-start md:items-end mb-20 gap-6">
        <div>
            <div class="flex items-center gap-2.5 text-xs font-semibold tracking-[0.15em] uppercase text-accent mb-5 before:content-[''] before:w-5 before:h-px before:bg-accent">
                &nbsp;Our Solutions
            </div>
            <h2 class="font-syne font-extrabold leading-tight tracking-tight" style="font-size: clamp(2rem,4vw,3.5rem);">
                Three services,<br>one powerful team
            </h2>
        </div>
        <a href="{{ url('/services') }}"
           class="border border-white/[0.07] hover:border-white/25 hover:bg-white/[0.04] text-[#e8eaf0] px-7 py-3 rounded-xl font-medium text-sm flex items-center gap-2 transition-all duration-200 no-underline flex-shrink-0">
            View all services
            <svg width="14" height="14" viewBox="0 0 14 14" fill="none"><path d="M2 7h10M8 3l4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </a>
    </div>

    {{-- Service Rows --}}
    @php
    $services = [
        [
            'num'     => '01',
            'icon'    => '🎬',
            'title'   => 'Content Creation',
            'desc'    => 'We craft compelling visual content that stops the scroll and tells your brand story. From eye-catching posters to high-quality videos, we make your brand impossible to ignore.',
            'tags'    => ['Poster Design', 'Video Production', 'Brand Visuals'],
            'items'   => ['Social Media Graphics', 'Event Posters', 'Brand Videos', 'Motion Graphics'],
            'color'   => '79,142,255',
            'href'    => '/services#content-creation',
        ],
        [
            'num'     => '02',
            'icon'    => '🌐',
            'title'   => 'Web Design',
            'desc'    => 'Beautiful, conversion-focused websites tailored to your goals. Whether it\'s a landing page, corporate site, or full e-commerce store — we design and build it right.',
            'tags'    => ['Landing Page', 'Corporate Website', 'E-Commerce'],
            'items'   => ['Mobile Responsive', 'SEO Optimized', 'CMS Included', 'Free Domain & Hosting'],
            'color'   => '0,212,170',
            'href'    => '/services#web-design',
        ],
        [
            'num'     => '03',
            'icon'    => '⚙️',
            'title'   => 'System Development',
            'desc'    => 'Custom-built systems that streamline your operations and scale with your business. From internal tools to complex platforms, we engineer solutions that work.',
            'tags'    => ['Custom Systems', 'Web Apps', 'API Integration'],
            'items'   => ['Laravel & React', 'REST APIs', 'Business Automation', 'Scalable Architecture'],
            'color'   => '79,142,255',
            'href'    => '/services#system-development',
        ],
    ];
    @endphp

    <div class="flex flex-col gap-0.5">
        @foreach($services as $i => $s)
        <div class="service-card reveal group relative bg-surface border border-white/[0.07]
            {{ $i === 0 ? 'rounded-t-2xl' : '' }}
            {{ $i === count($services)-1 ? 'rounded-b-2xl' : '' }}
            overflow-hidden hover:border-accent/30 transition-all duration-500">

            {{-- Glow overlay --}}
            <div class="absolute inset-0 bg-gradient-to-r from-accent/[0.04] to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none"></div>

            {{-- Left accent bar --}}
            <div class="absolute left-0 top-0 w-[3px] h-0 group-hover:h-full transition-all duration-500 ease-out"
                 style="background: linear-gradient(to bottom, rgba({{ $s['color'] }},0.8), rgba({{ $s['color'] }},0.1));"></div>

            <div class="relative grid grid-cols-1 md:grid-cols-[auto_1fr_auto] gap-0 items-stretch">

                {{-- Left: Number + Icon --}}
                <div class="flex flex-row md:flex-col items-center justify-start md:justify-center gap-4 px-5 py-6 md:px-10 md:py-10 border-b md:border-b-0 md:border-r border-white/[0.07] md:min-w-[120px]">
                    <div class="font-syne text-[2.5rem] font-extrabold leading-none tracking-tight text-white/[0.05] group-hover:text-white/[0.12] transition-all duration-500">{{ $s['num'] }}</div>
                    <div class="w-14 h-14 rounded-2xl flex items-center justify-center text-2xl transition-all duration-300 group-hover:scale-110 group-hover:-translate-y-1"
                         style="background: rgba({{ $s['color'] }}, 0.1);">{{ $s['icon'] }}</div>
                </div>

                {{-- Middle: Content --}}
                <div class="flex flex-col justify-center px-5 py-6 md:px-10 md:py-10 border-b md:border-b-0 md:border-r border-white/[0.07]">
                    <div class="flex flex-wrap gap-2 mb-4">
                        @foreach($s['tags'] as $tag)
                        <span class="text-xs px-3 py-1 rounded-full border border-white/[0.07] group-hover:border-accent/20 text-muted font-medium transition-all duration-300">{{ $tag }}</span>
                        @endforeach
                    </div>
                    <h3 class="font-syne font-extrabold text-2xl tracking-tight mb-3 group-hover:text-white transition-colors duration-300">{{ $s['title'] }}</h3>
                    <p class="text-muted text-sm leading-relaxed max-w-xl">{{ $s['desc'] }}</p>
                </div>

                {{-- Right: Features + CTA --}}
                <div class="flex flex-col justify-between px-5 py-6 md:px-10 md:py-10 md:min-w-[220px]">
                    <ul class="flex flex-col gap-2.5 mb-8">
                        @foreach($s['items'] as $item)
                        <li class="flex items-center gap-3 text-sm text-muted">
                            <span class="w-1.5 h-1.5 rounded-full flex-shrink-0 transition-all duration-300"
                                  style="background: rgba({{ $s['color'] }}, 0.5);"></span>
                            {{ $item }}
                        </li>
                        @endforeach
                    </ul>
                    <a href="{{ url($s['href']) }}"
                       class="inline-flex items-center gap-2 text-sm font-semibold transition-all duration-300 no-underline group-hover:gap-3"
                       style="color: rgba({{ $s['color'] }}, 0.9);">
                        Learn more
                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none"><path d="M2 7h10M8 3l4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                    </a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>


{{-- ══════════════════════════════════════
     STATS
══════════════════════════════════════ --}}
<div id="stats" class="grid grid-cols-1 md:grid-cols-2">
    {{-- Left --}}
    <div class="stats-left reveal px-5 sm:px-8 md:px-14 py-16 md:py-24 border-b md:border-b-0 md:border-r border-white/[0.07] flex flex-col justify-center">
        <div class="flex items-center gap-2.5 text-xs font-semibold tracking-[0.15em] uppercase text-accent mb-5 before:content-[''] before:w-5 before:h-px before:bg-accent">
            &nbsp;By the Numbers
        </div>
        <h2 class="font-syne font-extrabold leading-tight tracking-tight mb-5" style="font-size: clamp(2rem,4vw,3.5rem);">
            Metrics that prove<br>our impact
        </h2>
        <p class="text-muted text-base leading-relaxed max-w-md mb-10">
            We don't just deliver projects — we deliver results. Every campaign, website, and system we build is measured against real business outcomes.
        </p>
        <a href="#cta" class="bg-accent hover:bg-[#3a7bef] text-white px-8 py-3.5 rounded-xl font-semibold text-base transition-all duration-200 hover:-translate-y-0.5 w-fit no-underline">
            Start your project →
        </a>
    </div>

    {{-- Stats Grid --}}
    <div class="grid grid-cols-2">
        @php
        $stats = [
            ['num' => 120, 'suffix' => '+', 'label' => 'Projects Delivered'],
            ['num' => 98,  'suffix' => '%', 'label' => 'Client Satisfaction'],
            ['num' => 50,  'suffix' => '+', 'label' => 'Brands Served'],
            ['num' => 3,   'suffix' => '',  'label' => 'Core Services'],
        ];
        @endphp
        @foreach($stats as $i => $stat)
        <div class="reveal reveal-delay-{{ $i }} stat-box px-6 py-8 md:px-12 md:py-14 border border-white/[0.07] hover:bg-surface transition-colors duration-300 {{ $i >= 2 ? 'border-b-0' : '' }} {{ $i % 2 !== 0 ? 'border-r-0' : '' }}">
            <div class="stat-num font-syne text-[3.5rem] font-extrabold leading-none tracking-tight mb-2" data-target="{{ $stat['num'] }}">0</div>
            <div class="text-muted text-sm font-medium">{{ $stat['suffix'] }} {{ $stat['label'] }}</div>
        </div>
        @endforeach
    </div>
</div>


{{-- ══════════════════════════════════════
     PROCESS
══════════════════════════════════════ --}}
<section id="process" class="bg-bg-2 px-5 sm:px-8 md:px-14 py-16 md:py-28">
    <div class="reveal mb-16">
        <div class="flex items-center gap-2.5 text-xs font-semibold tracking-[0.15em] uppercase text-accent mb-5 before:content-[''] before:w-5 before:h-px before:bg-accent">
            &nbsp;How We Work
        </div>
        <h2 class="font-syne font-extrabold leading-tight tracking-tight" style="font-size: clamp(2rem,4vw,3.5rem);">
            From idea to launch<br>in record time
        </h2>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-4 divide-y md:divide-y-0 md:divide-x divide-white/[0.07]">
        @php
        $steps = [
            ['num' => '01', 'title' => 'Discovery & Goals',   'desc' => 'We start by understanding your business, target audience, and objectives. This shapes everything we create — from content to code.',         'duration' => '1–2 Days'],
            ['num' => '02', 'title' => 'Strategy & Planning', 'desc' => 'We map out the right approach — whether it\'s a content campaign, website structure, or system architecture.',                               'duration' => '2–3 Days'],
            ['num' => '03', 'title' => 'Design & Build',      'desc' => 'Our team executes with precision — designing visuals, building web pages, or developing systems tailored to your exact requirements.',        'duration' => '5–14 Days'],
            ['num' => '04', 'title' => 'Launch & Support',    'desc' => 'We deliver, launch, and stay by your side. Revisions, optimizations, and ongoing support to ensure everything performs at its best.',        'duration' => '1–2 Days'],
        ];
        @endphp
        @foreach($steps as $i => $step)
        <div class="process-step reveal reveal-delay-{{ $i }} group p-6 md:p-10 hover:bg-surface transition-all duration-300 relative overflow-hidden flex flex-col">
            {{-- Animated left border on hover --}}
            <div class="absolute left-0 top-0 w-[2px] h-0 bg-gradient-to-b from-accent to-accent-2 group-hover:h-full transition-all duration-500"></div>

            {{-- Step number line --}}
            <div class="flex items-center gap-2 text-xs font-bold tracking-widest text-accent mb-6">
                <span class="group-hover:text-white transition-colors duration-300">{{ $step['num'] }}</span>
                <div class="flex-1 h-px bg-white/[0.07] group-hover:bg-accent/40 transition-colors duration-500"></div>
            </div>

            {{-- Big ghost number --}}
            <div class="font-syne text-[5rem] font-extrabold leading-none tracking-tight absolute -bottom-4 -right-2 text-white/[0.02] group-hover:text-white/[0.06] transition-all duration-500 select-none">{{ $step['num'] }}</div>

            <h3 class="font-syne font-bold text-lg tracking-tight mb-3 group-hover:text-white transition-colors duration-300">{{ $step['title'] }}</h3>
            <p class="text-muted text-sm leading-relaxed group-hover:text-[#9ca3af] transition-colors duration-300">{{ $step['desc'] }}</p>
            <div class="mt-auto pt-5 text-xs font-semibold tracking-widest uppercase text-accent-2 group-hover:text-accent transition-colors duration-300">{{ $step['duration'] }}</div>
        </div>
        @endforeach
    </div>
</section>


{{-- ══════════════════════════════════════
     TESTIMONIALS
══════════════════════════════════════ --}}
<section id="testimonials" class="bg-bg px-5 sm:px-8 md:px-14 py-16 md:py-28">
    <div class="reveal flex flex-col md:flex-row justify-between items-start md:items-end mb-14 gap-6">
        <div>
            <div class="flex items-center gap-2.5 text-xs font-semibold tracking-[0.15em] uppercase text-accent mb-5 before:content-[''] before:w-5 before:h-px before:bg-accent">
                &nbsp;Client Stories
            </div>
            <h2 class="font-syne font-extrabold leading-tight tracking-tight" style="font-size: clamp(2rem,4vw,3.5rem);">
                Trusted by brands<br>who mean business
            </h2>
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        @php
        $testimonials = [
            ['initials' => 'AK', 'quote' => '"SkyInfers redesigned our entire online presence and produced our product videos. Sales increased significantly within the first month. Truly a one-stop creative team."',         'name' => 'Alex Kim',    'role' => 'CEO @ NovaTech'],
            ['initials' => 'SR', 'quote' => '"The poster designs they created for our campaigns were stunning. Our social media engagement tripled and our brand finally looks as premium as our products."',                'name' => 'Sara Ramos',  'role' => 'Founder @ LuxBrand'],
            ['initials' => 'MJ', 'quote' => '"They built our e-commerce website from scratch and it\'s exactly what we envisioned. Clean, fast, and our customers love the experience. Highly recommended."',               'name' => 'Marco J.',    'role' => 'CTO @ CloudBase'],
            ['initials' => 'LP', 'quote' => '"The custom system SkyInfers developed for us automated our entire workflow. What used to take hours now takes minutes. Exceptional technical team."',                         'name' => 'Lisa Park',   'role' => 'CMO @ GrowthLab'],
            ['initials' => 'DW', 'quote' => '"From our corporate website to our content strategy, SkyInfers handled everything seamlessly. One team, zero headaches. We couldn\'t ask for a better partner."',             'name' => 'David Wu',    'role' => 'Director @ ApexCo'],
            ['initials' => 'RN', 'quote' => '"Our landing page conversion rate doubled after SkyInfers redesigned it. They understand both design and marketing — a rare combination that really makes a difference."',    'name' => 'Rita Nguyen', 'role' => 'Co-Founder @ Nimbus'],
        ];
        @endphp

        @foreach($testimonials as $i => $t)
        <div class="reveal {{ $i % 3 > 0 ? 'reveal-delay-'.($i % 3) : '' }} bg-surface border border-white/[0.07] rounded-2xl p-6 md:p-9 hover:border-accent/20 hover:-translate-y-0.5 transition-all duration-300">
            <div class="text-accent text-sm mb-4">★★★★★</div>
            <p class="text-muted text-sm leading-[1.75] italic mb-7">{{ $t['quote'] }}</p>
            <div class="flex items-center gap-3.5">
                <div class="w-10 h-10 rounded-full bg-gradient-to-br from-accent to-accent-2 flex items-center justify-center font-syne font-bold text-sm flex-shrink-0">
                    {{ $t['initials'] }}
                </div>
                <div>
                    <div class="font-semibold text-sm">{{ $t['name'] }}</div>
                    <div class="text-muted text-xs">{{ $t['role'] }}</div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>


{{-- ══════════════════════════════════════
     CTA
══════════════════════════════════════ --}}
<section id="cta" class="relative bg-bg-2 text-center px-5 sm:px-8 md:px-14 py-20 md:py-36 overflow-hidden">
    <div class="cta-radial absolute inset-0 pointer-events-none"></div>
    <div class="relative max-w-2xl mx-auto reveal">
        <div class="inline-flex justify-center items-center gap-2.5 text-xs font-semibold tracking-[0.15em] uppercase text-accent mb-6 before:content-[''] before:w-5 before:h-px before:bg-accent after:content-[''] after:w-5 after:h-px after:bg-accent">
            Let's Build Together
        </div>
        <h2 class="font-syne font-extrabold leading-tight tracking-tight mb-4" style="font-size: clamp(2.5rem,5vw,4rem);">
            Ready to grow<br>your business with us?
        </h2>
        <p class="text-muted text-lg mb-10">
            Pick what you're interested in and we'll reach out within 24 hours.
        </p>

        {{-- Service Selector --}}
        <div class="flex flex-wrap justify-center gap-3 mb-10">
            @foreach([
                ['🎨', 'Poster Design'],
                ['🎬', 'Video Production'],
                ['🚀', 'Landing Page'],
                ['🏢', 'Corporate Website'],
                ['🛒', 'E-Commerce'],
                ['⚙️', 'System Development'],
            ] as [$icon, $label])
            <button
                type="button"
                class="home-pill flex items-center gap-2 px-5 py-2.5 rounded-full border text-sm font-medium transition-all duration-200"
                style="border-color:rgba(255,255,255,0.07); color:#6b7280; background:#131720;">
                <span>{{ $icon }}</span>
                <span>{{ $label }}</span>
            </button>
            @endforeach
        </div>

        {{-- Email + Submit --}}
        <div class="flex flex-col sm:flex-row gap-3 max-w-md mx-auto">
            <input
                type="email"
                id="emailInput"
                placeholder="your@email.com"
                class="flex-1 bg-surface border border-white/[0.07] focus:border-accent rounded-xl px-5 py-3.5 text-[#e8eaf0] text-base font-dm outline-none placeholder-muted transition-colors duration-200"
            >
            <button
                type="button"
                onclick="handleSubmit()"
                class="bg-accent hover:bg-[#3a7bef] text-white px-7 py-3.5 rounded-xl font-semibold text-base transition-all duration-200 hover:-translate-y-0.5 cursor-none">
                Get Started
            </button>
        </div>
        <p id="form-msg" style="display:none; margin-top:16px; font-size:.875rem;"></p>
        <p class="mt-4 text-xs text-muted">No commitment. Just an honest conversation about your business.</p>
    </div>
</section>

@endsection


@push('scripts')
<style>
    /* Reveal slide up */
    .reveal {
        opacity: 0;
        transform: translateY(30px);
        transition: opacity 0.6s ease, transform 0.6s ease;
    }
    .reveal.show {
        opacity: 1;
        transform: translateY(0);
    }
    .reveal-delay-1 { transition-delay: 0.1s; }
    .reveal-delay-2 { transition-delay: 0.2s; }
    .reveal-delay-3 { transition-delay: 0.3s; }
</style>
<script>
    // ── LIVE CANVAS BACKGROUND
    window.addEventListener('load', () => {
        const canvas = document.getElementById('heroCanvas');
        const ctx    = canvas.getContext('2d');
        const hero   = document.getElementById('hero');

        function resize() {
            canvas.width  = hero.offsetWidth;
            canvas.height = hero.offsetHeight;
        }
        resize();
        window.addEventListener('resize', resize);

        const points = Array.from({ length: 6 }, () => ({
            x:     Math.random() * canvas.width,
            y:     Math.random() * canvas.height,
            vx:    (Math.random() - 0.5) * 2,
            vy:    (Math.random() - 0.5) * 2,
            r:     Math.random() * 250 + 150,
            color: Math.random() > 0.5 ? '79,142,255' : '0,212,170',
        }));

        function drawCanvas() {
            ctx.clearRect(0, 0, canvas.width, canvas.height);
            points.forEach(p => {
                p.x += p.vx;
                p.y += p.vy;
                if (p.x < 0 || p.x > canvas.width)  p.vx *= -1;
                if (p.y < 0 || p.y > canvas.height) p.vy *= -1;
                const g = ctx.createRadialGradient(p.x, p.y, 0, p.x, p.y, p.r);
                g.addColorStop(0, `rgba(${p.color}, 0.45)`);
                g.addColorStop(1, `rgba(${p.color}, 0)`);
                ctx.fillStyle = g;
                ctx.beginPath();
                ctx.arc(p.x, p.y, p.r, 0, Math.PI * 2);
                ctx.fill();
            });
            requestAnimationFrame(drawCanvas);
        }
        drawCanvas();
    });

    // ── SCROLL REVEAL
    document.querySelectorAll('.reveal').forEach(el => {
        new IntersectionObserver(entries => {
            entries.forEach(e => { if (e.isIntersecting) { e.target.classList.add('show'); } });
        }, { threshold: 0.12 }).observe(el);
    });

    // ── AUTO-SIZE CYCLE WRAP
    (function() {
        const wrap  = document.getElementById('cycleWrap');
        const words = wrap.querySelectorAll('.cycle-word');
        let maxWidth = 0;
        words.forEach(w => {
            w.style.position  = 'static';
            w.style.opacity   = '1';
            w.style.transform = 'none';
            maxWidth = Math.max(maxWidth, w.offsetWidth);
        });
        words.forEach(w => {
            w.style.position  = 'absolute';
            w.style.opacity   = '';
            w.style.transform = '';
        });
        wrap.style.width = maxWidth + 'px';
    })();

    // ── CYCLE WORDS
    const words = document.querySelectorAll('.cycle-word');
    let current = 0;
    setInterval(() => {
        words[current].classList.remove('active');
        words[current].classList.add('exit');
        setTimeout(() => words[current].classList.remove('exit'), 600);
        current = (current + 1) % words.length;
        words[current].classList.add('active');
    }, 2200);

    // ── COUNT UP
    const counters = document.querySelectorAll('[data-target]');
    const countObs = new IntersectionObserver(entries => {
        entries.forEach(e => {
            if (!e.isIntersecting) return;
            const el = e.target, target = +el.dataset.target;
            let n = 0;
            const step = target / 60;
            const timer = setInterval(() => {
                n = Math.min(n + step, target);
                el.textContent = Math.round(n);
                if (n >= target) clearInterval(timer);
            }, 25);
            countObs.unobserve(el);
        });
    }, { threshold: 0.5 });
    counters.forEach(el => countObs.observe(el));

    // ── PARALLAX BLOBS
    window.addEventListener('scroll', () => {
        const y = window.scrollY;
        document.querySelectorAll('.hero-blob').forEach((b, i) => {
            b.style.transform = `translateY(${y * (i === 0 ? 0.15 : -0.1)}px)`;
        });
    });

    // ── HOME SERVICE SELECTOR
    const homeSelected = new Set();
    document.querySelectorAll('.home-pill').forEach(btn => {
        btn.addEventListener('mouseenter', function() {
            if (!homeSelected.has(this.querySelectorAll('span')[1].textContent.trim())) {
                this.style.borderColor = 'rgba(79,142,255,0.4)';
                this.style.color       = '#ffffff';
            }
        });
        btn.addEventListener('mouseleave', function() {
            if (!homeSelected.has(this.querySelectorAll('span')[1].textContent.trim())) {
                this.style.borderColor = 'rgba(255,255,255,0.07)';
                this.style.color       = '#6b7280';
            }
        });
        btn.addEventListener('click', function() {
            const label = this.querySelectorAll('span')[1].textContent.trim();
            if (homeSelected.has(label)) {
                homeSelected.delete(label);
                this.style.borderColor = 'rgba(255,255,255,0.07)';
                this.style.color       = '#6b7280';
                this.style.background  = '#131720';
            } else {
                homeSelected.add(label);
                this.style.borderColor = '#4f8eff';
                this.style.color       = '#ffffff';
                this.style.background  = 'rgba(79,142,255,0.1)';
            }
        });
    });

    // ── CTA FORM
    function handleSubmit() {
        const input = document.getElementById('emailInput');
        const msg   = document.getElementById('form-msg');

        if (homeSelected.size === 0) {
            msg.style.display = 'block';
            msg.style.color   = '#f59e0b';
            msg.textContent   = 'Please select at least one service you\'re interested in';
            return;
        }
        if (!input.value || !input.value.includes('@')) {
            input.style.borderColor = '#ef4444';
            msg.style.display = 'block';
            msg.style.color   = '#ef4444';
            msg.textContent   = 'Please enter a valid email address';
            return;
        }

        input.style.borderColor = '#00d4aa';
        msg.style.display = 'block';
        msg.style.color   = '#00d4aa';
        msg.textContent   = `✓ Got it! We'll reach out about: ${[...homeSelected].join(', ')}`;
    }
</script>
@endpush