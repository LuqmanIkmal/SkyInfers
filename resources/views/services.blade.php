@extends('layouts.app')

@section('title', 'Services — SkyInfers')

@section('content')

{{-- ══════════════════════════════════════
     PAGE HERO
══════════════════════════════════════ --}}
<section class="relative flex flex-col justify-center px-5 sm:px-8 md:px-14 pt-32 md:pt-40 pb-14 md:pb-20 overflow-hidden border-b border-white/[0.07]">
    <div class="absolute inset-0 pointer-events-none">
        <div class="absolute w-[500px] h-[500px] -top-20 -right-20 rounded-full bg-accent blur-[140px] opacity-[0.12]"></div>
        <div class="absolute w-[300px] h-[300px] bottom-0 left-10 rounded-full bg-accent-2 blur-[120px] opacity-[0.10]"></div>
        <div class="grid-overlay"></div>
        <canvas id="heroCanvas" class="absolute inset-0 w-full h-full" style="opacity:0.4;"></canvas>
    </div>
    <div class="relative text-center mx-auto reveal">
        <div class="inline-flex items-center gap-2 bg-accent/10 border border-accent/25 rounded-full px-4 py-1.5 text-xs text-accent font-semibold tracking-widest uppercase mb-8">
            <span class="w-1.5 h-1.5 bg-accent-2 rounded-full animate-pulse-dot"></span>
            What We Offer
        </div>
        <h1 class="font-syne font-extrabold leading-[1.05] tracking-tight mb-6"
            style="font-size: clamp(2rem, 5vw, 4.2rem);">
            Services built<br>for <span class="text-accent">real growth</span>
        </h1>
        <p class="text-muted text-lg leading-relaxed max-w-xl mx-auto">
            Three focused services. One integrated team. Everything you need to build, grow, and scale your brand in the digital world.
        </p>
    </div>
</section>


{{-- ══════════════════════════════════════
     INTERACTIVE SERVICES
══════════════════════════════════════ --}}
<section class="px-5 sm:px-8 md:px-14 py-16 md:py-24 border-b border-white/[0.07]">
    @php
    $services = [
        [
            'id'      => 'content-creation',
            'num'     => '01',
            'icon'    => '🎬',
            'title'   => 'Social Media Marketing',
            'sub'     => 'Content that stops the scroll',
            'color'   => '#4f8eff',
            'rgb'     => '79,142,255',
            'desc'    => 'In a world full of noise, your brand needs content that truly stands out. We create visual content that captures attention, communicates your value, and builds a brand people remember from stunning posters to high-quality content feed.',
            'tags'    => ['Poster Design', 'Video Production', 'Brand Visuals'],
            'subservices' => [
                [
                    'icon'  => '🎨',
                    'title' => 'Social Media Branding',
                    'desc'  => 'Create a strong and consistent brand presence on social media through professionally designed content tailored to your business identity.',
                    'items' => ['Content Feed', 'Brand-Aligned', 'Fast Turnaround'],
                ],

            ],
            'includes' => ['Engaging Social Media Content', 'Consistent Brand Visual Style', 'Ready-to-Use Marketing Designs', 'Collaborative Revision Process', 'Quick Delivery'],
        ],
        [
            'id'      => 'web-design',
            'num'     => '02',
            'icon'    => '🌐',
            'title'   => 'Web Design',
            'sub'     => 'Websites that convert visitors into customers',
            'color'   => '#00d4aa',
            'rgb'     => '0,212,170',
            'desc'    => 'Beautiful, conversion-focused websites tailored to your goals. Whether it\'s a landing page, corporate site, or full e-commerce store, we design and build it right. Every site is mobile responsive, SEO-optimized, and built to perform.',
            'tags'    => ['Landing Page', 'Corporate Website', 'E-Commerce'],
            'subservices' => [
                [
                    'icon'  => '🚀',
                    'title' => 'Landing Page',
                    'desc'  => 'High-converting single pages designed with one goal, turning visitors into leads or customers.',
                    'items' => ['Lead Generation', 'Product Launch', 'Campaign Pages', 'A/B Tested Layouts'],
                ],
                [
                    'icon'  => '🏢',
                    'title' => 'Corporate Website',
                    'desc'  => 'Professional multi-page websites that build credibility and showcase your business.',
                    'items' => ['Multi-page Structure', 'About & Team Pages', 'Services Showcase', 'Contact & Forms'],
                ],
                [
                    'icon'  => '🛒',
                    'title' => 'E-Commerce',
                    'desc'  => 'Revenue-generating online stores built to convert, from product discovery to checkout.',
                    'items' => ['Product Catalogue', 'Secure Checkout', 'Payment Integration', 'Inventory Management'],
                ],
            ],
            'includes' => ['Custom design for your brand', 'Mobile-responsive on all devices', 'SEO optimized', 'CMS so you can update content', 'Free 1 year domain & hosting'],
        ],
        [
            'id'      => 'system-development',
            'num'     => '03',
            'icon'    => '⚙️',
            'title'   => 'System Development',
            'sub'     => 'Custom systems that power your business',
            'color'   => '#4f8eff',
            'rgb'     => '79,142,255',
            'desc'    => 'Off-the-shelf software rarely fits perfectly. We build custom systems from the ground up, tailored exactly to how your business operates. Whether you need to automate processes, manage data, or connect multiple tools, we engineer it to work seamlessly.',
            'tags'    => ['Custom Systems', 'Web Apps', 'API Integration'],
            'subservices' => [
                [
                    'icon'  => '📊',
                    'title' => 'Business Management Systems',
                    'desc'  => 'CRM, inventory, HR tools, dashboards, custom-built to match your exact workflow.',
                    'items' => ['CRM Systems', 'Inventory Management', 'HR Tools', 'Custom Dashboards'],
                ],
                [
                    'icon'  => '🔗',
                    'title' => 'API & Integrations',
                    'desc'  => 'Connect your apps, automate data flows, and eliminate manual work.',
                    'items' => ['REST API Development', 'Third-party Integrations', 'Data Pipelines', 'Webhook Systems'],
                ],
                [
                    'icon'  => '⚡',
                    'title' => 'Automation & Web Apps',
                    'desc'  => 'Full-featured web apps and automated workflows that run 24/7.',
                    'items' => ['Web Applications', 'Role-based Access', 'Workflow Automation', 'Real-time Features'],
                ],
            ],
            'includes' => ['Laravel & React stack', 'Scalable architecture', 'Security-first approach', 'Full documentation', 'Post-launch support'],
        ],
    ];
    @endphp

    {{-- ── Tab Navigation ── --}}
    <div class="reveal flex gap-0.5 mb-0.5 overflow-x-auto">
        @foreach($services as $i => $s)
        <button
            type="button"
            onclick="switchTab({{ $i }})"
            class="svc-nav flex-none min-w-[140px] md:flex-1 relative flex items-center gap-3 md:gap-4 px-4 md:px-8 py-4 md:py-6 border border-white/[0.07] overflow-hidden transition-all duration-300 cursor-pointer text-left
                {{ $i === 0 ? 'rounded-tl-2xl' : '' }}
                {{ $i === count($services)-1 ? 'rounded-tr-2xl' : '' }}"
            style="background:#1a2030;"
            data-index="{{ $i }}">

            {{-- Progress bar --}}
            <div class="svc-nav-progress absolute bottom-0 left-0 h-[2px] w-0 transition-all duration-300"
                 style="background: {{ $s['color'] }};"></div>

            <div class="svc-nav-icon w-10 h-10 rounded-xl flex items-center justify-center text-lg flex-shrink-0 transition-all duration-300"
                 style="background: rgba(255,255,255,0.04);">{{ $s['icon'] }}</div>
            <div>
                <div class="svc-nav-num text-xs font-bold tracking-widest mb-0.5 transition-colors duration-300" style="color:rgba(255,255,255,0.2);">{{ $s['num'] }}</div>
                <div class="svc-nav-title font-syne font-bold text-sm tracking-tight transition-colors duration-300" style="color:#6b7280;">{{ $s['title'] }}</div>
            </div>
        </button>
        @endforeach
    </div>

    {{-- ── Tab Panels ── --}}
    <div class="relative">
        @foreach($services as $i => $s)
        <div class="svc-panel"
             style="display:none;"
             data-index="{{ $i }}"
             id="panel-{{ $i }}">

            <div class="grid grid-cols-1 md:grid-cols-[1fr_320px] gap-0.5">

                {{-- Main content --}}
                <div class="bg-surface border border-white/[0.07] rounded-bl-2xl p-6 md:p-12 relative overflow-hidden">

                    {{-- Radial glow --}}
                    <div class="absolute top-0 right-0 w-[400px] h-[400px] pointer-events-none"
                         style="background: radial-gradient(circle at top right, {{ $s['color'] }}0f 0%, transparent 60%);"></div>

                    <div class="relative">
                        {{-- Header --}}
                        <div class="flex flex-wrap items-start gap-4 md:gap-6 mb-6 md:mb-10">
                            <div class="w-16 h-16 rounded-2xl flex items-center justify-center text-3xl flex-shrink-0"
                                 style="background: {{ $s['color'] }}1a;">{{ $s['icon'] }}</div>
                            <div>
                                <div class="text-xs font-bold tracking-widest uppercase mb-2" style="color:{{ $s['color'] }};">{{ $s['num'] }} — {{ $s['title'] }}</div>
                                <h2 class="font-syne font-extrabold leading-tight tracking-tight" style="font-size:clamp(1.6rem,3vw,2.4rem);">{{ $s['sub'] }}</h2>
                            </div>
                        </div>

                        <p class="text-muted text-base leading-relaxed mb-12 max-w-2xl">{{ $s['desc'] }}</p>

                        {{-- Sub-services --}}
                        <div class="grid grid-cols-1 {{ count($s['subservices']) === 2 ? 'md:grid-cols-2' : 'md:grid-cols-3' }} gap-0.5">
                            @foreach($s['subservices'] as $j => $ss)
                            <div class="group bg-bg border border-white/[0.07]
                                {{ $j === 0 ? 'rounded-tl-2xl' : '' }}
                                {{ $j === count($s['subservices'])-1 ? 'rounded-tr-2xl rounded-br-2xl' : '' }}
                                {{ $j === 0 ? 'rounded-bl-2xl' : '' }}
                                p-8 hover:-translate-y-0.5 transition-all duration-300 relative overflow-hidden"
                                style="border-color:rgba(255,255,255,0.07);"
                                onmouseover="this.style.borderColor='{{ $s['color'] }}33'"
                                onmouseout="this.style.borderColor='rgba(255,255,255,0.07)'">
                                <div class="w-11 h-11 rounded-xl flex items-center justify-center text-xl mb-5 transition-all duration-300"
                                     style="background: {{ $s['color'] }}15;">{{ $ss['icon'] }}</div>
                                <h3 class="font-syne font-bold text-base tracking-tight mb-3">{{ $ss['title'] }}</h3>
                                <p class="text-muted text-xs leading-relaxed mb-5">{{ $ss['desc'] }}</p>
                                <div class="flex flex-wrap gap-1.5">
                                    @foreach($ss['items'] as $item)
                                    <span class="text-xs px-2.5 py-1 rounded-full border font-medium transition-all duration-300"
                                          style="border-color:rgba(255,255,255,0.07); color:#6b7280;">{{ $item }}</span>
                                    @endforeach
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                {{-- Sidebar --}}
                <div class="flex flex-col gap-0.5">

                    {{-- What's included --}}
                    <div class="bg-surface border border-white/[0.07] rounded-tr-2xl p-8 flex-1">
                        <div class="text-xs font-bold tracking-widest uppercase mb-6" style="color:{{ $s['color'] }};">What's Included</div>
                        <ul class="flex flex-col gap-4">
                            @foreach($s['includes'] as $inc)
                            <li class="flex items-start gap-3 text-sm">
                                <span class="w-5 h-5 rounded-full flex items-center justify-center flex-shrink-0 text-xs font-bold mt-0.5"
                                      style="background:{{ $s['color'] }}1a; color:{{ $s['color'] }};">✓</span>
                                <span class="text-[#e8eaf0] leading-relaxed">{{ $inc }}</span>
                            </li>
                            @endforeach
                        </ul>
                    </div>

                    {{-- CTA --}}
                    <div class="bg-surface border border-white/[0.07] rounded-br-2xl p-8">
                        <h3 class="font-syne font-bold text-base tracking-tight mb-2">Ready to get started?</h3>
                        <p class="text-muted text-xs leading-relaxed mb-6">Tell us what you need and we'll get back to you within 24 hours.</p>
                        <a href="#cta-section"
                           class="w-full flex items-center justify-center gap-2 text-white text-sm font-semibold py-3.5 rounded-xl no-underline transition-all duration-200 hover:-translate-y-0.5"
                           style="background:{{ $s['color'] }};"
                           onmouseover="this.style.opacity='0.9'"
                           onmouseout="this.style.opacity='1'">
                            Get a Consultation →
                        </a>
                        
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>


{{-- ══════════════════════════════════════
     WHY CHOOSE US
══════════════════════════════════════ --}}
<section class="bg-bg-2 px-5 sm:px-8 md:px-14 py-16 md:py-24 border-b border-white/[0.07]">
    <div class="reveal text-center max-w-2xl mx-auto mb-16">
        <div class="inline-flex items-center gap-2.5 text-xs font-semibold tracking-[0.15em] uppercase text-accent mb-5 before:content-[''] before:w-5 before:h-px before:bg-accent after:content-[''] after:w-5 after:h-px after:bg-accent">
            &nbsp;Why SkyInfers&nbsp;
        </div>
        <h2 class="font-syne font-extrabold leading-tight tracking-tight" style="font-size: clamp(2rem,4vw,3.2rem);">
            One team for everything
        </h2>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-4 gap-0.5">
        @php
        $reasons = [
            ['icon' => '🎯', 'title' => 'Results-Focused',    'desc' => 'Every decision we make, design, content, or code is tied to a business outcome. We don\'t do pretty for pretty\'s sake.'],
            ['icon' => '⚡', 'title' => 'Fast Turnaround',     'desc' => 'We work efficiently without cutting corners. Most projects are delivered faster than industry standard timelines.'],
            ['icon' => '🔄', 'title' => 'Full Integration',    'desc' => 'Content, web, and systems, all under one roof. Everything works together because one team built it all.'],
            ['icon' => '🤝', 'title' => 'Transparent Process', 'desc' => 'You\'ll always know where your project stands. Clear communication, regular updates, no surprises.'],
        ];
        @endphp
        @foreach($reasons as $i => $r)
        <div class="reveal reveal-delay-{{ $i }} bg-surface border border-white/[0.07] {{ $i === 0 ? 'rounded-t-2xl md:rounded-l-2xl md:rounded-tr-none' : ($i === 3 ? 'rounded-b-2xl md:rounded-r-2xl md:rounded-bl-none' : '') }} p-7 md:p-10 hover:border-accent/25 hover:-translate-y-0.5 transition-all duration-300">
            <div class="w-12 h-12 bg-accent/10 rounded-xl flex items-center justify-center text-2xl mb-6">{{ $r['icon'] }}</div>
            <h3 class="font-syne font-bold text-lg tracking-tight mb-3">{{ $r['title'] }}</h3>
            <p class="text-muted text-sm leading-relaxed">{{ $r['desc'] }}</p>
        </div>
        @endforeach
    </div>
</section>


{{-- ══════════════════════════════════════
     CTA
══════════════════════════════════════ --}}
<section id="cta-section" class="relative text-center px-5 sm:px-8 md:px-14 py-20 md:py-36 overflow-hidden">
    <div class="cta-radial absolute inset-0 pointer-events-none"></div>
    <div class="relative max-w-2xl mx-auto reveal">
        <div class="inline-flex justify-center items-center gap-2.5 text-xs font-semibold tracking-[0.15em] uppercase text-accent mb-6 before:content-[''] before:w-5 before:h-px before:bg-accent after:content-[''] after:w-5 after:h-px after:bg-accent">
            Let's Build Together
        </div>
        <h2 class="font-syne font-extrabold leading-tight tracking-tight mb-4" style="font-size: clamp(2.5rem,5vw,4rem);">
            Not sure which service<br>you need?
        </h2>
        <p class="text-muted text-lg mb-10">
            Pick what you're interested in and we'll reach out within 24 hours.
        </p>

        <div class="flex flex-wrap justify-center gap-3 mb-10">
            @foreach([
                ['🎨', 'Graphic Design'],
                ['🎬', 'Video Production'],
                ['🚀', 'Landing Page'],
                ['🏢', 'Corporate Website'],
                ['🛒', 'E-Commerce'],
                ['⚙️', 'System Development'],
            ] as [$icon, $label])
            <button
                type="button"
                class="service-pill flex items-center gap-2 px-5 py-2.5 rounded-full border text-sm font-medium transition-all duration-200"
                style="border-color:rgba(255,255,255,0.07); color:#6b7280; background:#131720;">
                <span>{{ $icon }}</span>
                <span>{{ $label }}</span>
            </button>
            @endforeach
        </div>

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
    .svc-nav { background: #1a2030; }
    .svc-panel { animation: panelIn 0.35s ease forwards; }
    @keyframes panelIn {
        from { opacity: 0; transform: translateY(12px); }
        to   { opacity: 1; transform: translateY(0); }
    }
</style>
<script>
    // ── LIVE CANVAS BACKGROUND
    window.addEventListener('load', () => {
        const canvas = document.getElementById('heroCanvas');
        const ctx    = canvas.getContext('2d');
        const hero   = canvas.closest('section');
        function resize() { canvas.width = hero.offsetWidth; canvas.height = hero.offsetHeight; }
        resize();
        window.addEventListener('resize', resize);
        const points = Array.from({ length: 6 }, () => ({
            x: Math.random() * canvas.width, y: Math.random() * canvas.height,
            vx: (Math.random() - 0.5) * 2,  vy: (Math.random() - 0.5) * 2,
            r: Math.random() * 250 + 150,
            color: Math.random() > 0.5 ? '79,142,255' : '0,212,170',
        }));
        function drawCanvas() {
            ctx.clearRect(0, 0, canvas.width, canvas.height);
            points.forEach(p => {
                p.x += p.vx; p.y += p.vy;
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
            entries.forEach(e => { if (e.isIntersecting) e.target.classList.add('show'); });
        }, { threshold: 0.12 }).observe(el);
    });

    // ── SERVICE TAB SWITCHER
    const colors = ['#4f8eff', '#00d4aa', '#4f8eff'];
    let activeTab = 0;

    function switchTab(index) {
        activeTab = index;

        // Update nav buttons
        document.querySelectorAll('.svc-nav').forEach((nav, i) => {
            const icon     = nav.querySelector('.svc-nav-icon');
            const title    = nav.querySelector('.svc-nav-title');
            const num      = nav.querySelector('.svc-nav-num');
            const progress = nav.querySelector('.svc-nav-progress');
            const active   = i === index;
            const color    = colors[i];

            nav.style.background  = active ? 'rgba(255,255,255,0.03)' : '#1a2030';
            nav.style.borderColor = active ? color + '33' : 'rgba(255,255,255,0.07)';
            icon.style.background = active ? color + '1a' : 'rgba(255,255,255,0.04)';
            icon.style.transform  = active ? 'scale(1.1)' : 'scale(1)';
            title.style.color     = active ? '#ffffff' : '#6b7280';
            num.style.color       = active ? color : 'rgba(255,255,255,0.2)';
            progress.style.width  = active ? '100%' : '0';
            progress.style.background = color;
        });

        // Show/hide panels
        document.querySelectorAll('.svc-panel').forEach((panel, i) => {
            panel.style.display = i === index ? 'block' : 'none';
        });
    }

    // Check URL hash on load to open correct tab
    window.addEventListener('load', () => {
        const hash = window.location.hash;
        if      (hash === '#content-creation')   switchTab(0);
        else if (hash === '#web-design')         switchTab(1);
        else if (hash === '#system-development') switchTab(2);
        else                                      switchTab(0);
    });

    // ── SERVICE SELECTOR PILLS
    const selectedServices = new Set();
    document.querySelectorAll('.service-pill').forEach(btn => {
        btn.addEventListener('mouseenter', function() {
            if (!selectedServices.has(this.querySelectorAll('span')[1].textContent.trim())) {
                this.style.borderColor = 'rgba(79,142,255,0.4)';
                this.style.color       = '#ffffff';
            }
        });
        btn.addEventListener('mouseleave', function() {
            if (!selectedServices.has(this.querySelectorAll('span')[1].textContent.trim())) {
                this.style.borderColor = 'rgba(255,255,255,0.07)';
                this.style.color       = '#6b7280';
            }
        });
        btn.addEventListener('click', function() {
            const label = this.querySelectorAll('span')[1].textContent.trim();
            if (selectedServices.has(label)) {
                selectedServices.delete(label);
                this.style.borderColor = 'rgba(255,255,255,0.07)';
                this.style.color       = '#6b7280';
                this.style.background  = '#131720';
            } else {
                selectedServices.add(label);
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
        if (selectedServices.size === 0) {
            msg.style.display = 'block'; msg.style.color = '#f59e0b';
            msg.textContent   = 'Please select at least one service you\'re interested in';
            return;
        }
        if (!input.value || !input.value.includes('@')) {
            input.style.borderColor = '#ef4444';
            msg.style.display = 'block'; msg.style.color = '#ef4444';
            msg.textContent   = 'Please enter a valid email address';
            return;
        }
        input.style.borderColor = '#00d4aa';
        msg.style.display = 'block'; msg.style.color = '#00d4aa';
        msg.textContent   = `✓ Got it! We'll reach out about: ${[...selectedServices].join(', ')}`;
    }
</script>
@endpush