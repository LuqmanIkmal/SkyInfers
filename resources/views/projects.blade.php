@extends('layouts.app')

@section('title', 'Projects — SkyInfers')

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
            Our Work
        </div>
        <h1 class="font-syne font-extrabold leading-[1.05] tracking-tight mb-5 sm:mb-6"
            style="font-size: clamp(1.8rem, 5vw, 4.2rem);">
            Projects we're<br><span class="text-accent">proud of</span>
        </h1>
        <p class="text-muted text-base sm:text-lg leading-relaxed max-w-xs sm:max-w-xl mx-auto">
            Real work. Real results. A showcase of what we've built across web design and system development.
        </p>
    </div>
</section>


{{-- FILTER TABS --}}
<div class="px-4 sm:px-8 lg:px-14 py-4 sm:py-6 border-b border-white/[0.07] flex items-center gap-2 sm:gap-3 flex-wrap bg-bg-2">
    @foreach(['All', 'Web Development', 'System Development'] as $filter)
    <button
        type="button"
        class="filter-btn px-4 sm:px-5 py-1.5 sm:py-2 rounded-full border text-xs sm:text-sm font-medium transition-all duration-200"
        style="border-color:rgba(255,255,255,0.07); color:#6b7280; background:transparent;"
        data-filter="{{ $filter }}">
        {{ $filter }}
    </button>
    @endforeach
</div>


{{-- PROJECTS --}}
<section class="px-4 sm:px-8 lg:px-14 py-14 sm:py-20 lg:py-24 border-b border-white/[0.07]">

    @php
    $projects = [
        [
            'category' => 'Web Development',  'tag' => 'Corporate Website',
            'title'    => 'TECH23 Performance Lubricants Website',
            'desc'     => 'A high-converting product launch for a Motorcycle Performance Lubricant. Designed to capture leads and communicate value within seconds of landing.',
            'results'  => ['+73% conversion rate', '2.1s load time', '300+ leads in week 1'],
            'tags'     => ['UI/UX', 'Laravel', 'Tailwind'],
            'icon'     => '🚀', 'color' => '#4f8eff', 'mockup' => 'browser',
            'image'    => asset('images/Homepage.png'),
            'gradient' => 'from-[#0d1117] via-[#1a2030] to-[#0d1117]', 'accentpx' => '#4f8eff',
        ],
        [
            'category' => 'System Development', 'tag' => 'Web Application',
            'title'    => 'Fixed Deposit Tracking System',
            'desc'     => 'A custom fixed deposit tracking system built for Infra Desa Sdn. Bhd. from scratch that lead to a better financial decision, managing transaction, automated workflows.',
            'results'  => ['60% faster workflows', '200+ leads managed', 'Automated workflow'],
            'tags'     => ['Laravel', 'MySQL', 'REST API'],
            'icon'     => '⚙️', 'color' => '#4f8eff', 'mockup' => 'browser',
            'image'    => asset('images/infradesa.png'),
            'gradient' => 'from-[#0d1117] via-[#0d1520] to-[#0d1117]', 'accentpx' => '#4f8eff',
        ],
        [
            'category' => 'Web Development', 'tag' => 'Corporate Website',
            'title'    => 'ChillOutHub Digital Marketing Website',
            'desc'     => 'Full corporate website redesign for a regional consultancy firm. Multi-page, SEO-optimised, and built to impress enterprise clients from first visit.',
            'results'  => ['-52% bounce rate', '2x organic traffic', 'Top 3 Google rankings'],
            'tags'     => ['Web Design', 'SEO', 'CMS'],
            'icon'     => '🏢', 'color' => '#00d4aa', 'mockup' => 'browser',
            'image'    => asset('images/chillout.png'),
            'gradient' => 'from-[#0d1117] via-[#001a15] to-[#0d1117]', 'accentpx' => '#00d4aa',
        ],
        [
            'category' => 'Web Development', 'tag' => 'E-Commerce',
            'title'    => 'IMIKA Pasir Gudang Online Store',
            'desc'     => 'A full e-commerce store for a Refurbished Laptop and Accessories Store, complete with product catalogue, cart, secure checkout, and an admin panel to manage orders and inventory.',
            'results'  => ['+45% avg order value', '99.9% uptime', '70+ SKUs managed'],
            'tags'     => ['E-Commerce', 'Stripe', 'Laravel'],
            'icon'     => '🛒', 'color' => '#00d4aa', 'mockup' => 'browser',
            'image'    => asset('images/imika.png'),
            'gradient' => 'from-[#0d1117] via-[#001a15] to-[#0d1117]', 'accentpx' => '#00d4aa',
        ],
        [
            'category' => 'Web Development',  'tag' => 'Corporate Website',
            'title'    => 'Southern Epoxy System Website',
            'desc'     => 'A full corporate website for Epoxy Company that complete with before and after result, contact integration and links with their social media.',
            'results'  => ['+73% conversion rate', '2.1s load time', '300+ leads in week 1'],
            'tags'     => ['UI/UX', 'Laravel', 'Tailwind'],
            'icon'     => '🚀', 'color' => '#4f8eff', 'mockup' => 'browser',
            'image'    => asset('images/ses.png'),
            'gradient' => 'from-[#0d1117] via-[#1a2030] to-[#0d1117]', 'accentpx' => '#4f8eff',
        ],
        [
            'category' => 'System Development', 'tag' => 'Web Application',
            'title'    => 'Admin Panel System',
            'desc'     => 'A custom CRM built for IMIKA Pasir Gudang from scratch that lead to a better stock management, managing transaction, managing orders, and automated workflows.',
            'results'  => ['60% faster workflows', '200+ leads managed', 'Automated workflow'],
            'tags'     => ['Laravel', 'MySQL', 'REST API'],
            'icon'     => '⚙️', 'color' => '#4f8eff', 'mockup' => 'browser',
            'image'    => asset('images/imikaAdmin.png'),
            'gradient' => 'from-[#0d1117] via-[#0d1520] to-[#0d1117]', 'accentpx' => '#4f8eff',
        ],
    ];
    @endphp

    <div class="flex flex-col gap-14 sm:gap-20 lg:gap-24" id="projectsList">
        @foreach($projects as $i => $p)
        <div class="project-card reveal" data-category="{{ $p['category'] }}">

            {{-- On mobile: always stack. On desktop: alternate. --}}
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 sm:gap-10 lg:gap-12 items-center {{ $i % 2 === 1 ? 'md:[direction:rtl]' : '' }}">

                {{-- Mockup --}}
                <div class="reveal" style="{{ $i % 2 === 1 ? 'direction:ltr' : '' }}">
                    @if($p['mockup'] === 'browser')
                    <div class="relative rounded-xl sm:rounded-2xl overflow-hidden border border-white/[0.07] shadow-[0_20px_60px_rgba(0,0,0,0.4)]">
                        {{-- Browser chrome --}}
                        <div class="flex items-center gap-1.5 sm:gap-2 px-3 sm:px-5 py-2.5 sm:py-3.5 border-b border-white/[0.07]" style="background:#131720;">
                            <span class="w-2.5 h-2.5 sm:w-3 sm:h-3 rounded-full" style="background:#ff5f57;"></span>
                            <span class="w-2.5 h-2.5 sm:w-3 sm:h-3 rounded-full" style="background:#febc2e;"></span>
                            <span class="w-2.5 h-2.5 sm:w-3 sm:h-3 rounded-full" style="background:#28c840;"></span>
                            <div class="flex-1 mx-2 sm:mx-4 bg-white/[0.06] rounded-full px-3 sm:px-4 py-1 sm:py-1.5 flex items-center gap-2 overflow-hidden">
                                <span class="text-white/20 text-xs">🔒</span>
                                <span class="text-white/30 text-xs font-mono truncate hidden sm:block">skyinfers.com/{{ strtolower(str_replace(' ', '-', $p['title'])) }}</span>
                            </div>
                        </div>
                        {{-- Screenshot --}}
                        @if($p['image'])
                        <div class="mockup-img-wrap">
                            <img src="{{ $p['image'] }}" alt="{{ $p['title'] }}">
                        </div>
                        @else
                        <div class="relative overflow-hidden bg-gradient-to-br {{ $p['gradient'] }}" style="height:260px; sm:height:340px;">
                            <div class="absolute inset-0" style="background:radial-gradient(ellipse at 30% 30%, {{ $p['color'] }}15 0%, transparent 60%);"></div>
                            <div class="absolute inset-0 p-5 sm:p-8 flex flex-col">
                                <div class="flex items-center justify-between mb-6 sm:mb-10">
                                    <div class="w-16 sm:w-20 h-2.5 sm:h-3 rounded-full" style="background:rgba(255,255,255,0.15);"></div>
                                    <div class="flex gap-2 sm:gap-4">
                                        <div class="w-8 sm:w-10 h-2 sm:h-2.5 rounded-full" style="background:rgba(255,255,255,0.08);"></div>
                                        <div class="w-8 sm:w-10 h-2 sm:h-2.5 rounded-full" style="background:rgba(255,255,255,0.08);"></div>
                                        <div class="w-12 sm:w-16 h-5 sm:h-6 rounded-lg" style="background:{{ $p['color'] }}40;"></div>
                                    </div>
                                </div>
                                <div class="mb-4 sm:mb-6">
                                    <div class="w-14 sm:w-16 h-1.5 sm:h-2 rounded-full mb-3 sm:mb-4" style="background:{{ $p['color'] }}60;"></div>
                                    <div class="w-3/4 h-4 sm:h-5 rounded-full mb-2" style="background:rgba(255,255,255,0.18);"></div>
                                    <div class="w-1/2 h-3 sm:h-5 rounded-full mb-4 sm:mb-6" style="background:rgba(255,255,255,0.12);"></div>
                                    <div class="flex gap-2 sm:gap-3">
                                        <div class="w-20 sm:w-24 h-7 sm:h-8 rounded-lg" style="background:{{ $p['color'] }};"></div>
                                        <div class="w-20 sm:w-24 h-7 sm:h-8 rounded-lg" style="background:rgba(255,255,255,0.07);"></div>
                                    </div>
                                </div>
                                <div class="grid grid-cols-3 gap-2 sm:gap-3 mt-auto">
                                    @for($c = 0; $c < 3; $c++)
                                    <div class="rounded-lg sm:rounded-xl p-3 sm:p-4" style="background:rgba(255,255,255,0.04); border:1px solid rgba(255,255,255,0.06);">
                                        <div class="w-5 h-5 sm:w-6 sm:h-6 rounded-lg mb-2 sm:mb-3" style="background:{{ $p['color'] }}30;"></div>
                                        <div class="w-full h-1.5 sm:h-2 rounded-full mb-1" style="background:rgba(255,255,255,0.1);"></div>
                                        <div class="w-3/4 h-1.5 sm:h-2 rounded-full" style="background:rgba(255,255,255,0.06);"></div>
                                    </div>
                                    @endfor
                                </div>
                            </div>
                        </div>
                        @endif
                    </div>
                    @endif
                </div>

                {{-- Project Info --}}
                <div style="{{ $i % 2 === 1 ? 'direction:ltr' : '' }}">
                    <div class="flex items-center gap-2 sm:gap-3 mb-4 sm:mb-5">
                        <span class="text-xs font-bold tracking-widest uppercase" style="color:{{ $p['color'] }};">{{ $p['category'] }}</span>
                        <span class="text-white/20 text-xs">—</span>
                        <span class="text-xs text-muted font-medium">{{ $p['tag'] }}</span>
                    </div>

                    <h2 class="font-syne font-extrabold leading-tight tracking-tight mb-3 sm:mb-4" style="font-size:clamp(1.3rem,3vw,2.4rem);">{{ $p['title'] }}</h2>
                    <p class="text-muted text-sm sm:text-base leading-relaxed mb-6 sm:mb-8">{{ $p['desc'] }}</p>

                    {{-- Results --}}
                    <div class="mb-6 sm:mb-8">
                        <div class="text-xs font-bold tracking-widest uppercase mb-3 sm:mb-4" style="color:{{ $p['color'] }};">Results</div>
                        <div class="grid grid-cols-3 gap-2 sm:gap-3">
                            @foreach($p['results'] as $result)
                            <div class="rounded-lg sm:rounded-xl px-3 sm:px-4 py-3 sm:py-4 text-center border transition-all duration-300"
                                 style="background:{{ $p['color'] }}0d; border-color:{{ $p['color'] }}25;">
                                <div class="font-syne font-extrabold text-xs sm:text-base leading-tight" style="color:{{ $p['color'] }};">{{ $result }}</div>
                            </div>
                            @endforeach
                        </div>
                    </div>

                    {{-- Tags --}}
                    <div class="flex flex-wrap gap-1.5 sm:gap-2 mb-6 sm:mb-8">
                        @foreach($p['tags'] as $tag)
                        <span class="text-xs px-3 py-1 sm:py-1.5 rounded-full border border-white/[0.07] text-muted font-medium">{{ $tag }}</span>
                        @endforeach
                    </div>

                    <a href="{{ url('/contact') }}"
                       class="inline-flex items-center gap-2 text-sm font-semibold no-underline hover:gap-3 transition-all duration-200"
                       style="color:{{ $p['color'] }};">
                        Work with us on something like this
                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none"><path d="M2 7h10M8 3l4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                    </a>
                </div>
            </div>

            @if(!$loop->last)
            <div class="mt-14 sm:mt-20 lg:mt-24 border-b border-white/[0.05]"></div>
            @endif
        </div>
        @endforeach
    </div>

    <div id="emptyState" style="display:none;" class="text-center py-20 sm:py-24">
        <div class="text-4xl mb-4">🔍</div>
        <p class="text-muted text-base">No projects found in this category yet.</p>
    </div>
</section>


{{-- STATS BAR --}}
<div class="grid grid-cols-2 md:grid-cols-4 bg-bg-2 border-b border-white/[0.07]">
    @php
    $stats = [
        ['num' => '120', 'suffix' => '+', 'label' => 'Projects Delivered'],
        ['num' => '98',  'suffix' => '%', 'label' => 'Client Satisfaction'],
        ['num' => '50',  'suffix' => '+', 'label' => 'Brands Served'],
        ['num' => '3',   'suffix' => '',  'label' => 'Core Services'],
    ];
    @endphp
    @foreach($stats as $i => $stat)
    <div class="reveal px-6 sm:px-10 lg:px-12 py-10 sm:py-12 lg:py-14 border border-white/[0.07] hover:bg-surface transition-colors duration-300 text-center">
        <div class="stat-num font-syne text-3xl sm:text-4xl lg:text-[3rem] font-extrabold leading-none tracking-tight mb-2" data-target="{{ $stat['num'] }}" data-suffix="{{ $stat['suffix'] }}">0</div>
        <div class="text-muted text-xs sm:text-sm font-medium">{{ $stat['label'] }}</div>
    </div>
    @endforeach
</div>


{{-- CTA --}}
<section class="relative text-center px-4 sm:px-8 lg:px-14 py-20 sm:py-28 lg:py-36 overflow-hidden">
    <div class="cta-radial absolute inset-0 pointer-events-none"></div>
    <div class="relative max-w-2xl mx-auto reveal">
        <div class="inline-flex justify-center items-center gap-2.5 text-xs font-semibold tracking-[0.15em] uppercase text-accent mb-6 before:content-[''] before:w-5 before:h-px before:bg-accent after:content-[''] after:w-5 after:h-px after:bg-accent">
            Let's Build Together
        </div>
        <h2 class="font-syne font-extrabold leading-tight tracking-tight mb-4" style="font-size: clamp(1.8rem,5vw,4rem);">
            Want results<br>like these?
        </h2>
        <p class="text-muted text-base sm:text-lg mb-8 sm:mb-10 px-2">
            Pick what you're interested in and we'll reach out within 24 hours.
        </p>

        <div class="flex flex-wrap justify-center gap-2 sm:gap-3 mb-8 sm:mb-10">
            @foreach([['🚀','Landing Page'],['🏢','Corporate Website'],['🛒','E-Commerce'],['⚙️','System Development']] as [$icon, $label])
            <button type="button" class="projects-pill flex items-center gap-2 px-4 sm:px-5 py-2 sm:py-2.5 rounded-full border text-xs sm:text-sm font-medium transition-all duration-200"
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


@push('scripts')
<style>
    .reveal { opacity:0; transform:translateY(30px); transition:opacity .6s ease,transform .6s ease; }
    .reveal.show { opacity:1; transform:translateY(0); }
    .cta-radial { background: radial-gradient(ellipse 60% 50% at 50% 50%, rgba(79,142,255,0.07) 0%, transparent 70%); }

    .mockup-img-wrap { overflow:hidden; position:relative; }
    .mockup-img-wrap img { width:100%; object-fit:cover; object-position:top; transition:object-position 6s ease; height:260px; display:block; }
    @media (min-width: 640px) { .mockup-img-wrap img { height: 340px; } }
    .mockup-img-wrap:hover img { object-position:bottom; }

    .filter-btn.active { background:rgba(79,142,255,0.12) !important; border-color:rgba(79,142,255,0.4) !important; color:#ffffff !important; }
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
        new IntersectionObserver(entries => { entries.forEach(e => { if(e.isIntersecting) e.target.classList.add('show'); }); }, { threshold:0.08 }).observe(el);
    });

    // Filter
    const filterBtns = document.querySelectorAll('.filter-btn');
    const cards = document.querySelectorAll('.project-card');
    filterBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            filterBtns.forEach(b => b.classList.remove('active'));
            this.classList.add('active');
            const filter = this.dataset.filter;
            let visible = 0;
            cards.forEach(card => {
                const match = filter === 'All' || card.dataset.category === filter;
                card.style.display = match ? '' : 'none';
                if (match) visible++;
            });
            document.getElementById('emptyState').style.display = visible === 0 ? '' : 'none';
        });
    });
    filterBtns[0]?.click();

    // Stats count up
    const counters = document.querySelectorAll('.stat-num');
    const countObs = new IntersectionObserver(entries => {
        entries.forEach(e => {
            if (!e.isIntersecting) return;
            const el=e.target, target=+el.dataset.target, suffix=el.dataset.suffix||'';
            let n=0; const step=target/60;
            const timer=setInterval(() => { n=Math.min(n+step,target); el.textContent=Math.round(n)+suffix; if(n>=target) clearInterval(timer); }, 25);
            countObs.unobserve(el);
        });
    }, { threshold:0.5 });
    counters.forEach(el => countObs.observe(el));

    // CTA
    const projSelected = new Set();
    document.querySelectorAll('.projects-pill').forEach(btn => {
        btn.addEventListener('click', function() {
            const label=this.querySelectorAll('span')[1].textContent.trim();
            if(projSelected.has(label)) { projSelected.delete(label); this.style.borderColor='rgba(255,255,255,0.07)'; this.style.color='#6b7280'; this.style.background='#131720'; }
            else { projSelected.add(label); this.style.borderColor='#4f8eff'; this.style.color='#ffffff'; this.style.background='rgba(79,142,255,0.1)'; }
        });
    });

    function handleSubmit() {
        const input=document.getElementById('emailInput'), msg=document.getElementById('form-msg');
        if(projSelected.size===0) { msg.style.display='block'; msg.style.color='#f59e0b'; msg.textContent='Please select at least one service'; return; }
        if(!input.value||!input.value.includes('@')) { input.style.borderColor='#ef4444'; msg.style.display='block'; msg.style.color='#ef4444'; msg.textContent='Please enter a valid email address'; return; }
        input.style.borderColor='#00d4aa'; msg.style.display='block'; msg.style.color='#00d4aa'; msg.textContent=`✓ Got it! We'll reach out about: ${[...projSelected].join(', ')}`;
    }
</script>
@endpush