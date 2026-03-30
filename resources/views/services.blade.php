@extends('layouts.app')

@section('title',       'Services — Web Design & System Development | SkyInfers Johor Bahru')
@section('description',  'SkyInfers offers professional web design and custom system development in Malaysia. Landing pages from RM1,500, corporate websites from RM3,000, e-commerce from RM5,000.')
@section('keywords',     'web design services malaysia, system development services, landing page johor bahru, corporate website malaysia, e-commerce website johor bahru, laravel development, api development malaysia')
@section('canonical',    url('/services'))
@section('og_title',     'Services — Web Design & System Development | SkyInfers')
@section('og_description','Professional web design and system development services in Malaysia. Landing pages, corporate websites, e-commerce and custom systems.')

@section('content')

{{-- PAGE HERO --}}
<section class="relative flex flex-col justify-center px-4 sm:px-8 lg:px-14 pt-28 sm:pt-36 md:pt-40 pb-14 sm:pb-20 overflow-hidden border-b border-white/[0.07]">
    <div class="absolute inset-0 pointer-events-none">
        <div class="absolute w-[300px] sm:w-[500px] h-[300px] sm:h-[500px] -top-20 -right-20 rounded-full bg-accent blur-[120px] sm:blur-[140px] opacity-[0.12]"></div>
        <div class="absolute w-[200px] sm:w-[300px] h-[200px] sm:h-[300px] bottom-0 left-10 rounded-full bg-accent-2 blur-[100px] sm:blur-[120px] opacity-[0.10]"></div>
        <div class="grid-overlay"></div>
        <canvas id="heroCanvas" class="absolute inset-0 w-full h-full" style="opacity:0.4;"></canvas>
    </div>
    <div class="relative text-center mx-auto reveal">
        <div class="inline-flex items-center gap-2 bg-accent/10 border border-accent/25 rounded-full px-4 py-1.5 text-xs text-accent font-semibold tracking-widest uppercase mb-6 sm:mb-8">
            <span class="w-1.5 h-1.5 bg-accent-2 rounded-full animate-pulse-dot"></span>
            What We Offer
        </div>
        <h1 class="font-syne font-extrabold leading-[1.05] tracking-tight mb-5 sm:mb-6"
            style="font-size: clamp(1.8rem, 5vw, 4.2rem);">
            Built for the<br>web that <span class="text-accent">converts</span>
        </h1>
        <p class="text-muted text-base sm:text-lg leading-relaxed max-w-xs sm:max-w-xl mx-auto">
            Two focused services. One expert team. Everything you need to design, build, and scale your digital presence.
        </p>
    </div>
</section>


{{-- INTERACTIVE SERVICES --}}
<section class="px-4 sm:px-8 lg:px-14 py-14 sm:py-20 lg:py-24 border-b border-white/[0.07]">
    @php
    $services = [
        [
            'id'      => 'web-development',
            'num'     => '01',
            'icon'    => '🌐',
            'title'   => 'Web Development',
            'sub'     => 'Websites that convert visitors into customers',
            'color'   => '#00d4aa',
            'rgb'     => '0,212,170',
            'desc'    => 'Beautiful, conversion-focused websites tailored to your goals. Whether it\'s a landing page, corporate site, or full e-commerce store, we design and build it right. Every site is mobile responsive, SEO-optimized, and built to perform.',
            'tags'    => ['Landing Page', 'Corporate Website', 'E-Commerce'],
            'subservices' => [
                ['icon' => '🚀', 'title' => 'Landing Page',      'desc' => 'High-converting single pages designed with one goal, turning visitors into leads or customers.', 'items' => ['Lead Generation', 'Product Launch', 'Campaign Pages', 'A/B Tested Layouts']],
                ['icon' => '🏢', 'title' => 'Corporate Website', 'desc' => 'Professional multi-page websites that build credibility and showcase your business.',              'items' => ['Multi-page Structure', 'About & Team Pages', 'Services Showcase', 'Contact & Forms']],
                ['icon' => '🛒', 'title' => 'E-Commerce',        'desc' => 'Revenue-generating online stores built to convert, from product discovery to checkout.',           'items' => ['Product Catalogue', 'Secure Checkout', 'Payment Integration', 'Inventory Management']],
            ],
            'includes' => ['Custom design for your brand', 'Mobile-responsive on all devices', 'SEO optimized', 'CMS so you can update content', 'Free 1 year domain & hosting'],
        ],
        [
            'id'      => 'system-development',
            'num'     => '02',
            'icon'    => '⚙️',
            'title'   => 'System Development',
            'sub'     => 'Custom systems that power your business',
            'color'   => '#4f8eff',
            'rgb'     => '79,142,255',
            'desc'    => 'Off-the-shelf software rarely fits perfectly. We build custom systems from the ground up, tailored exactly to how your business operates. Whether you need to automate processes, manage data, or connect multiple tools, we engineer it to work seamlessly.',
            'tags'    => ['Custom Systems', 'Web Apps', 'API Integration'],
            'subservices' => [
                ['icon' => '📊', 'title' => 'Business Management Systems', 'desc' => 'CRM, inventory, HR tools, dashboards — custom-built to match your exact workflow.',  'items' => ['CRM Systems', 'Inventory Management', 'HR Tools', 'Custom Dashboards']],
                ['icon' => '🔗', 'title' => 'API & Integrations',          'desc' => 'Connect your apps, automate data flows, and eliminate manual work.',                   'items' => ['REST API Development', 'Third-party Integrations', 'Data Pipelines', 'Webhook Systems']],
                ['icon' => '⚡', 'title' => 'Automation & Web Apps',       'desc' => 'Full-featured web apps and automated workflows that run 24/7.',                         'items' => ['Web Applications', 'Role-based Access', 'Workflow Automation', 'Real-time Features']],
            ],
            'includes' => ['Laravel & React stack', 'Scalable architecture', 'Security-first approach', 'Full documentation', 'Post-launch support'],
        ],
    ];
    @endphp

    {{-- Tab Navigation — scrolls horizontally on small screens --}}
    <div class="reveal flex gap-0.5 mb-0.5 overflow-x-auto pb-0.5 -mx-4 px-4 sm:mx-0 sm:px-0">
        @foreach($services as $i => $s)
        <button
            type="button"
            onclick="switchTab({{ $i }})"
            class="svc-nav flex-1 min-w-[160px] sm:min-w-0 relative flex items-center gap-3 sm:gap-4 px-5 sm:px-8 py-5 sm:py-6 border border-white/[0.07] overflow-hidden transition-all duration-300 cursor-pointer text-left
                {{ $i === 0 ? 'rounded-tl-2xl' : '' }}
                {{ $i === count($services)-1 ? 'rounded-tr-2xl' : '' }}"
            style="background:#1a2030;"
            data-index="{{ $i }}">

            <div class="svc-nav-progress absolute bottom-0 left-0 h-[2px] w-0 transition-all duration-300" style="background: {{ $s['color'] }};"></div>
            <div class="svc-nav-icon w-9 h-9 sm:w-10 sm:h-10 rounded-xl flex items-center justify-center text-base sm:text-lg flex-shrink-0 transition-all duration-300" style="background: rgba(255,255,255,0.04);">{{ $s['icon'] }}</div>
            <div>
                <div class="svc-nav-num text-xs font-bold tracking-widest mb-0.5 transition-colors duration-300" style="color:rgba(255,255,255,0.2);">{{ $s['num'] }}</div>
                <div class="svc-nav-title font-syne font-bold text-xs sm:text-sm tracking-tight transition-colors duration-300 whitespace-nowrap" style="color:#6b7280;">{{ $s['title'] }}</div>
            </div>
        </button>
        @endforeach
    </div>

    {{-- Tab Panels --}}
    <div class="relative">
        @foreach($services as $i => $s)
        <div class="svc-panel" style="display:none;" data-index="{{ $i }}" id="panel-{{ $i }}">

            {{-- Main content + Sidebar stacked on mobile, side-by-side on lg --}}
            <div class="grid grid-cols-1 lg:grid-cols-[1fr_300px] gap-0.5">

                {{-- Main content --}}
                <div class="bg-surface border border-white/[0.07] rounded-bl-none lg:rounded-bl-2xl rounded-b-2xl lg:rounded-br-none p-6 sm:p-10 lg:p-12 relative overflow-hidden">
                    <div class="absolute top-0 right-0 w-[300px] sm:w-[400px] h-[300px] sm:h-[400px] pointer-events-none"
                         style="background: radial-gradient(circle at top right, {{ $s['color'] }}0f 0%, transparent 60%);"></div>

                    <div class="relative">
                        {{-- Header --}}
                        <div class="flex flex-col sm:flex-row items-start gap-4 sm:gap-6 mb-7 sm:mb-10">
                            <div class="w-13 h-13 sm:w-16 sm:h-16 rounded-2xl flex items-center justify-center text-2xl sm:text-3xl flex-shrink-0"
                                 style="background: {{ $s['color'] }}1a;">{{ $s['icon'] }}</div>
                            <div>
                                <div class="text-xs font-bold tracking-widest uppercase mb-1 sm:mb-2" style="color:{{ $s['color'] }};">{{ $s['num'] }} — {{ $s['title'] }}</div>
                                <h2 class="font-syne font-extrabold leading-tight tracking-tight" style="font-size:clamp(1.4rem,3vw,2.4rem);">{{ $s['sub'] }}</h2>
                            </div>
                        </div>

                        <p class="text-muted text-sm sm:text-base leading-relaxed mb-8 sm:mb-12">{{ $s['desc'] }}</p>

                        {{-- Sub-services --}}
                        <div class="grid grid-cols-1 sm:grid-cols-{{ count($s['subservices']) === 2 ? '2' : '1' }} lg:grid-cols-{{ count($s['subservices']) }} gap-0.5">
                            @foreach($s['subservices'] as $j => $ss)
                            <div class="bg-bg border border-white/[0.07] rounded-2xl p-5 sm:p-8 hover:-translate-y-0.5 transition-all duration-300"
                                 onmouseover="this.style.borderColor='{{ $s['color'] }}33'"
                                 onmouseout="this.style.borderColor='rgba(255,255,255,0.07)'">
                                <div class="w-10 h-10 sm:w-11 sm:h-11 rounded-xl flex items-center justify-center text-lg sm:text-xl mb-4 sm:mb-5 transition-all duration-300"
                                     style="background: {{ $s['color'] }}15;">{{ $ss['icon'] }}</div>
                                <h3 class="font-syne font-bold text-sm sm:text-base tracking-tight mb-2 sm:mb-3">{{ $ss['title'] }}</h3>
                                <p class="text-muted text-xs leading-relaxed mb-4 sm:mb-5">{{ $ss['desc'] }}</p>
                                <div class="flex flex-wrap gap-1.5">
                                    @foreach($ss['items'] as $item)
                                    <span class="text-xs px-2.5 py-1 rounded-full border font-medium" style="border-color:rgba(255,255,255,0.07); color:#6b7280;">{{ $item }}</span>
                                    @endforeach
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                {{-- Sidebar --}}
                <div class="flex flex-col sm:flex-row lg:flex-col gap-0.5">
                    {{-- What's included --}}
                    <div class="bg-surface border border-white/[0.07] lg:rounded-tr-2xl p-6 sm:p-8 flex-1">
                        <div class="text-xs font-bold tracking-widest uppercase mb-5 sm:mb-6" style="color:{{ $s['color'] }};">What's Included</div>
                        <ul class="flex flex-col gap-3 sm:gap-4">
                            @foreach($s['includes'] as $inc)
                            <li class="flex items-start gap-3 text-sm">
                                <span class="w-5 h-5 rounded-full flex items-center justify-center flex-shrink-0 text-xs font-bold mt-0.5"
                                      style="background:{{ $s['color'] }}1a; color:{{ $s['color'] }};">✓</span>
                                <span class="text-[#e8eaf0] leading-relaxed text-xs sm:text-sm">{{ $inc }}</span>
                            </li>
                            @endforeach
                        </ul>
                    </div>

                    {{-- CTA --}}
                    <div class="bg-surface border border-white/[0.07] lg:rounded-br-2xl p-6 sm:p-8">
                        <h3 class="font-syne font-bold text-sm sm:text-base tracking-tight mb-2">Ready to get started?</h3>
                        <p class="text-muted text-xs leading-relaxed mb-5 sm:mb-6">Tell us what you need and we'll get back to you within 24 hours.</p>
                        <a href="#cta-section"
                           class="w-full flex items-center justify-center gap-2 text-white text-sm font-semibold py-3 sm:py-3.5 rounded-xl no-underline transition-all duration-200 hover:-translate-y-0.5"
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


{{-- WHY CHOOSE US --}}
<section class="bg-bg-2 px-4 sm:px-8 lg:px-14 py-14 sm:py-20 lg:py-24 border-b border-white/[0.07]">
    <div class="reveal text-center max-w-2xl mx-auto mb-10 sm:mb-16">
        <div class="inline-flex items-center gap-2.5 text-xs font-semibold tracking-[0.15em] uppercase text-accent mb-5 before:content-[''] before:w-5 before:h-px before:bg-accent after:content-[''] after:w-5 after:h-px after:bg-accent">
            &nbsp;Why SkyInfers&nbsp;
        </div>
        <h2 class="font-syne font-extrabold leading-tight tracking-tight" style="font-size: clamp(1.7rem,4vw,3.2rem);">
            One team for everything
        </h2>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-0.5">
        @php
        $reasons = [
            ['icon' => '🎯', 'title' => 'Results-Focused',    'desc' => 'Every decision we make is tied to a business outcome. We don\'t do pretty for pretty\'s sake.'],
            ['icon' => '⚡', 'title' => 'Fast Turnaround',     'desc' => 'We work efficiently without cutting corners. Most projects are delivered faster than industry standard.'],
            ['icon' => '🔄', 'title' => 'Full Integration',    'desc' => 'Web and systems, all under one roof. Everything works together because one team built it all.'],
            ['icon' => '🤝', 'title' => 'Transparent Process', 'desc' => 'You\'ll always know where your project stands. Clear communication, regular updates, no surprises.'],
        ];
        @endphp
        @foreach($reasons as $i => $r)
        <div class="reveal bg-surface border border-white/[0.07]
            {{ $i === 0 ? 'rounded-tl-2xl' : '' }}
            {{ $i === 1 ? 'rounded-tr-2xl sm:rounded-none' : '' }}
            {{ $i === 2 ? 'rounded-bl-2xl sm:rounded-none' : '' }}
            {{ $i === 3 ? 'rounded-br-2xl' : '' }}
            {{ $i === 0 ? 'lg:rounded-l-2xl lg:rounded-tr-none' : '' }}
            {{ $i === 3 ? 'lg:rounded-r-2xl lg:rounded-bl-none' : '' }}
            p-6 sm:p-8 lg:p-10 hover:border-accent/25 hover:-translate-y-0.5 transition-all duration-300">
            <div class="w-10 h-10 sm:w-12 sm:h-12 bg-accent/10 rounded-xl flex items-center justify-center text-xl sm:text-2xl mb-5 sm:mb-6">{{ $r['icon'] }}</div>
            <h3 class="font-syne font-bold text-base sm:text-lg tracking-tight mb-2 sm:mb-3">{{ $r['title'] }}</h3>
            <p class="text-muted text-xs sm:text-sm leading-relaxed">{{ $r['desc'] }}</p>
        </div>
        @endforeach
    </div>
</section>


{{-- CTA --}}
<section id="cta-section" class="relative text-center px-4 sm:px-8 lg:px-14 py-20 sm:py-28 lg:py-36 overflow-hidden">
    <div class="cta-radial absolute inset-0 pointer-events-none"></div>
    <div class="relative max-w-2xl mx-auto reveal">
        <div class="inline-flex justify-center items-center gap-2.5 text-xs font-semibold tracking-[0.15em] uppercase text-accent mb-6 before:content-[''] before:w-5 before:h-px before:bg-accent after:content-[''] after:w-5 after:h-px after:bg-accent">
            Let's Build Together
        </div>
        <h2 class="font-syne font-extrabold leading-tight tracking-tight mb-4" style="font-size: clamp(1.8rem,5vw,4rem);">
            Ready to build<br>something great?
        </h2>
        <p class="text-muted text-base sm:text-lg mb-8 sm:mb-10 px-2">
            Pick what you're interested in and we'll reach out within 24 hours.
        </p>

        <div class="flex flex-wrap justify-center gap-2 sm:gap-3 mb-8 sm:mb-10">
            @foreach([['🚀','Landing Page'],['🏢','Corporate Website'],['🛒','E-Commerce'],['⚙️','System Development']] as [$icon, $label])
            <button type="button" class="service-pill flex items-center gap-2 px-4 sm:px-5 py-2 sm:py-2.5 rounded-full border text-xs sm:text-sm font-medium transition-all duration-200"
                style="border-color:rgba(255,255,255,0.07); color:#6b7280; background:#131720;">
                <span>{{ $icon }}</span><span>{{ $label }}</span>
            </button>
            @endforeach
        </div>

        <div class="flex flex-col sm:flex-row gap-3 max-w-md mx-auto px-2 sm:px-0">
            <input type="email" id="emailInput" placeholder="your@email.com"
                class="flex-1 bg-surface border border-white/[0.07] focus:border-accent rounded-xl px-5 py-3.5 text-[#e8eaf0] text-base outline-none placeholder-muted transition-colors duration-200">
            <button type="button" onclick="handleSubmit()"
                class="bg-accent hover:bg-[#3a7bef] text-white px-7 py-3.5 rounded-xl font-semibold text-base transition-all duration-200 hover:-translate-y-0.5">
                Get Started
            </button>
        </div>
        <p id="form-msg" style="display:none; margin-top:16px; font-size:.875rem;"></p>
        <p class="mt-4 text-xs text-muted">No commitment. Just an honest conversation about your business.</p>
    </div>
</section>

@endsection
@push('jsonld')
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "ItemList",
    "name": "SkyInfers Services",
    "url": "{{ config('app.url') }}/services",
    "itemListElement": [
        {
            "@@type": "ListItem",
            "position": 1,
            "item": {
                "@@type": "Service",
                "name": "Web Design & Development",
                "description": "Landing pages, corporate websites and e-commerce stores built for conversion.",
                "provider": { "@@type": "Organization", "name": "SkyInfers" },
                "areaServed": "Malaysia",
                "offers": [
                    { "@@type": "Offer", "name": "Landing Page", "price": "1500", "priceCurrency": "MYR" },
                    { "@@type": "Offer", "name": "Corporate Website", "price": "3000", "priceCurrency": "MYR" },
                    { "@@type": "Offer", "name": "E-Commerce Website", "price": "5000", "priceCurrency": "MYR" }
                ]
            }
        },
        {
            "@@type": "ListItem",
            "position": 2,
            "item": {
                "@@type": "Service",
                "name": "System Development",
                "description": "Custom business systems, CRM, APIs and web applications built with Laravel.",
                "provider": { "@@type": "Organization", "name": "SkyInfers" },
                "areaServed": "Malaysia"
            }
        }
    ]
}
</script>
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "BreadcrumbList",
    "itemListElement": [
        { "@@type": "ListItem", "position": 1, "name": "Home",     "item": "{{ config('app.url') }}" },
        { "@@type": "ListItem", "position": 2, "name": "Services", "item": "{{ config('app.url') }}/services" }
    ]
}
</script>
@endpush


@push('scripts')
<style>
    .reveal { opacity:0; transform:translateY(30px); transition:opacity .6s ease,transform .6s ease; }
    .reveal.show { opacity:1; transform:translateY(0); }
    .svc-nav { background: #1a2030; }
    .svc-panel { animation: panelIn 0.35s ease forwards; }
    @keyframes panelIn { from { opacity:0; transform:translateY(12px); } to { opacity:1; transform:translateY(0); } }
    .cta-radial { background: radial-gradient(ellipse 60% 50% at 50% 50%, rgba(79,142,255,0.07) 0%, transparent 70%); }
</style>
<script>
    window.addEventListener('load', () => {
        const canvas = document.getElementById('heroCanvas');
        const ctx = canvas.getContext('2d'), hero = canvas.closest('section');
        function resize() { canvas.width = hero.offsetWidth; canvas.height = hero.offsetHeight; }
        resize(); window.addEventListener('resize', resize);
        const points = Array.from({ length: 6 }, () => ({ x:Math.random()*canvas.width, y:Math.random()*canvas.height, vx:(Math.random()-.5)*2, vy:(Math.random()-.5)*2, r:Math.random()*250+150, color:Math.random()>.5?'79,142,255':'0,212,170' }));
        function drawCanvas() {
            ctx.clearRect(0,0,canvas.width,canvas.height);
            points.forEach(p => { p.x+=p.vx; p.y+=p.vy; if(p.x<0||p.x>canvas.width) p.vx*=-1; if(p.y<0||p.y>canvas.height) p.vy*=-1; const g=ctx.createRadialGradient(p.x,p.y,0,p.x,p.y,p.r); g.addColorStop(0,`rgba(${p.color},0.45)`); g.addColorStop(1,`rgba(${p.color},0)`); ctx.fillStyle=g; ctx.beginPath(); ctx.arc(p.x,p.y,p.r,0,Math.PI*2); ctx.fill(); });
            requestAnimationFrame(drawCanvas);
        }
        drawCanvas();
    });

    document.querySelectorAll('.reveal').forEach(el => {
        new IntersectionObserver(entries => { entries.forEach(e => { if(e.isIntersecting) e.target.classList.add('show'); }); }, { threshold:0.1 }).observe(el);
    });

    const colors = ['#00d4aa', '#4f8eff'];
    let activeTab = 0;

    function switchTab(index) {
        activeTab = index;
        document.querySelectorAll('.svc-nav').forEach((nav, i) => {
            const icon=nav.querySelector('.svc-nav-icon'), title=nav.querySelector('.svc-nav-title'), num=nav.querySelector('.svc-nav-num'), progress=nav.querySelector('.svc-nav-progress'), active=i===index, color=colors[i];
            nav.style.background=active?'rgba(255,255,255,0.03)':'#1a2030'; nav.style.borderColor=active?color+'33':'rgba(255,255,255,0.07)';
            icon.style.background=active?color+'1a':'rgba(255,255,255,0.04)'; icon.style.transform=active?'scale(1.1)':'scale(1)';
            title.style.color=active?'#ffffff':'#6b7280'; num.style.color=active?color:'rgba(255,255,255,0.2)';
            progress.style.width=active?'100%':'0'; progress.style.background=color;
        });
        document.querySelectorAll('.svc-panel').forEach((panel, i) => { panel.style.display=i===index?'block':'none'; });
    }

    window.addEventListener('load', () => {
        const hash = window.location.hash;
        if (hash === '#web-design') switchTab(0);
        else if (hash === '#system-development') switchTab(1);
        else switchTab(0);
    });

    const selectedServices = new Set();
    document.querySelectorAll('.service-pill').forEach(btn => {
        btn.addEventListener('click', function() {
            const label=this.querySelectorAll('span')[1].textContent.trim();
            if(selectedServices.has(label)) { selectedServices.delete(label); this.style.borderColor='rgba(255,255,255,0.07)'; this.style.color='#6b7280'; this.style.background='#131720'; }
            else { selectedServices.add(label); this.style.borderColor='#4f8eff'; this.style.color='#ffffff'; this.style.background='rgba(79,142,255,0.1)'; }
        });
    });

    function handleSubmit() {
        const input=document.getElementById('emailInput'), msg=document.getElementById('form-msg');
        if(selectedServices.size===0) { msg.style.display='block'; msg.style.color='#f59e0b'; msg.textContent='Please select at least one service'; return; }
        if(!input.value||!input.value.includes('@')) { input.style.borderColor='#ef4444'; msg.style.display='block'; msg.style.color='#ef4444'; msg.textContent='Please enter a valid email address'; return; }
        input.style.borderColor='#00d4aa'; msg.style.display='block'; msg.style.color='#00d4aa'; msg.textContent=`✓ Got it! We'll reach out about: ${[...selectedServices].join(', ')}`;
    }
</script>
@endpush