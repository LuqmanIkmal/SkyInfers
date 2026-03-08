@extends('layouts.app')

@section('title',       'Projects — Our Work & Portfolio | SkyInfers Digital Marketing Agency')
@section('description',  'Explore SkyInfers\'s portfolio of web design, social media marketing and system development projects. Real work, real results for businesses across Malaysia.')
@section('keywords',     'skyinfers portfolio, web design portfolio malaysia, digital marketing projects malaysia, laravel projects, e-commerce website portfolio, corporate website examples')
@section('canonical',    url('/projects'))
@section('og_title',     'Projects — Portfolio | SkyInfers')
@section('og_description','Real work, real results. A showcase of web design, content creation and system development projects by SkyInfers.')

@section('content')

{{-- ══════════════════════════════════════
     PAGE HERO
══════════════════════════════════════ --}}
<section class="relative flex flex-col justify-center px-14 pt-40 pb-20 overflow-hidden border-b border-white/[0.07]">
    <div class="absolute inset-0 pointer-events-none">
        <div class="absolute w-[500px] h-[500px] -top-20 -right-20 rounded-full bg-accent blur-[140px] opacity-[0.12]"></div>
        <div class="absolute w-[300px] h-[300px] bottom-0 left-10 rounded-full bg-accent-2 blur-[120px] opacity-[0.10]"></div>
        <div class="grid-overlay"></div>
        <canvas id="heroCanvas" class="absolute inset-0 w-full h-full" style="opacity:0.4;"></canvas>
    </div>
    <div class="relative text-center mx-auto reveal">
        <div class="inline-flex items-center gap-2 bg-accent/10 border border-accent/25 rounded-full px-4 py-1.5 text-xs text-accent font-semibold tracking-widest uppercase mb-8">
            <span class="w-1.5 h-1.5 bg-accent-2 rounded-full animate-pulse-dot"></span>
            Our Work
        </div>
        <h1 class="font-syne font-extrabold leading-[1.05] tracking-tight mb-6"
            style="font-size: clamp(2rem, 5vw, 4.2rem);">
            Projects we're<br><span class="text-accent">proud of</span>
        </h1>
        <p class="text-muted text-lg leading-relaxed max-w-xl mx-auto">
            Real work. Real results. A showcase of what we've built across content, web design, and system development.
        </p>
    </div>
</section>


{{-- ══════════════════════════════════════
     FILTER TABS
══════════════════════════════════════ --}}
<div class="px-14 py-6 border-b border-white/[0.07] flex items-center gap-3 flex-wrap bg-bg-2">
    @foreach(['All', 'Content Creation', 'Web Design', 'System Development'] as $filter)
    <button
        type="button"
        class="filter-btn px-5 py-2 rounded-full border text-sm font-medium transition-all duration-200"
        style="border-color:rgba(255,255,255,0.07); color:#6b7280; background:transparent;"
        data-filter="{{ $filter }}">
        {{ $filter }}
    </button>
    @endforeach
</div>


{{-- ══════════════════════════════════════
     PROJECTS
══════════════════════════════════════ --}}
<section class="px-14 py-24 border-b border-white/[0.07]">

    @php
    $projects = [
        [
            'category'  => 'Web Design',
            'tag'       => 'Corporate Website',
            'title'     => 'Tech23 Performance Lubricants Website',
            'desc'      => 'A high-converting product launch for a Motorcycle Performance Lubcricant. Designed to capture leads and communicate value within seconds of landing.',
            'results'   => ['+73% conversion rate', '2.1s load time', '300+ leads in week 1'],
            'tags'      => ['UI/UX', 'Laravel', 'Tailwind'],
            'icon'      => '🚀',
            'color'     => '#4f8eff',
            'mockup'    => 'browser',
            'image'     =>  asset('images/Homepage.png'),
            'gradient'  => 'from-[#0d1117] via-[#1a2030] to-[#0d1117]',
            'accentpx'  => '#4f8eff',
        ],
        [
            'category'  => 'Content Creation',
            'tag'       => 'Brand Visuals',
            'title'     => 'LuxBrand Social Campaign',
            'desc'      => 'A complete social media visual overhaul for a premium lifestyle brand — posters, reels covers, and story templates designed to feel luxurious and consistent.',
            'results'   => ['+210% engagement', '3x follower growth', '15 assets delivered'],
            'tags'      => ['Poster Design', 'Brand Identity', 'Social Media'],
            'icon'      => '🎨',
            'color'     => '#00d4aa',
            'mockup'    => 'phone',
            'image'     => null,
            'gradient'  => 'from-[#0d1117] via-[#001a15] to-[#0d1117]',
            'accentpx'  => '#00d4aa',
        ],
        [
            'category'  => 'System Development',
            'tag'       => 'Web Application',
            'title'     => 'GrowthLab CRM System',
            'desc'      => 'A custom CRM built from scratch for a marketing agency — managing leads, client communications, project pipelines, and automated follow-up workflows.',
            'results'   => ['60% faster workflows', '200+ leads managed', 'Zero manual follow-ups'],
            'tags'      => ['Laravel', 'MySQL', 'REST API'],
            'icon'      => '⚙️',
            'color'     => '#4f8eff',
            'mockup'    => 'browser',
            'image'     => null,
            'gradient'  => 'from-[#0d1117] via-[#0d1520] to-[#0d1117]',
            'accentpx'  => '#4f8eff',
        ],
        [
            'category'  => 'Web Design',
            'tag'       => 'Corporate Website',
            'title'     => 'ChillOutHub Digital Marketing Website',
            'desc'      => 'Full corporate website redesign for a regional consultancy firm. Multi-page, SEO-optimised, and built to impress enterprise clients from first visit.',
            'results'   => ['-52% bounce rate', '2x organic traffic', 'Top 3 Google rankings'],
            'tags'      => ['Web Design', 'SEO', 'CMS'],
            'icon'      => '🏢',
            'color'     => '#00d4aa',
            'mockup'    => 'browser',
            'image'     => asset('images/chillout.png'),
            'gradient'  => 'from-[#0d1117] via-[#001a15] to-[#0d1117]',
            'accentpx'  => '#00d4aa',
        ],
        [
            'category'  => 'Content Creation',
            'tag'       => 'Video Production',
            'title'     => 'CloudBase Product Video',
            'desc'      => 'A cinematic product showcase video for a B2B SaaS platform — scripted, shot, and edited to communicate complex features in an engaging 90-second format.',
            'results'   => ['500k+ views', '+45% demo requests', 'Used in paid ads'],
            'tags'      => ['Video Production', 'Motion Graphics', 'Scriptwriting'],
            'icon'      => '🎬',
            'color'     => '#4f8eff',
            'mockup'    => 'video',
            'image'     => null,
            'gradient'  => 'from-[#0d1117] via-[#0d1520] to-[#0d1117]',
            'accentpx'  => '#4f8eff',
        ],
        [
            'category'  => 'Web Design',
            'tag'       => 'E-Commerce',
            'title'     => 'Nimbus Online Store',
            'desc'      => 'A full e-commerce store for a fashion brand — complete with product catalogue, cart, secure checkout, and an admin panel to manage orders and inventory.',
            'results'   => ['+45% avg order value', '99.9% uptime', '300+ SKUs managed'],
            'tags'      => ['E-Commerce', 'Stripe', 'Laravel'],
            'icon'      => '🛒',
            'color'     => '#00d4aa',
            'mockup'    => 'browser',
            'image'     => null,
            'gradient'  => 'from-[#0d1117] via-[#001a15] to-[#0d1117]',
            'accentpx'  => '#00d4aa',
        ],
    ];
    @endphp

    <div class="flex flex-col gap-24" id="projectsList">
        @foreach($projects as $i => $p)
        <div class="project-card reveal" data-category="{{ $p['category'] }}">

            {{-- Alternating layout --}}
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center {{ $i % 2 === 1 ? 'md:[direction:rtl]' : '' }}">

                {{-- ── MOCKUP PREVIEW ── --}}
                <div class="reveal {{ $i % 2 === 1 ? 'reveal-delay-1' : 'reveal-delay-1' }}" style="{{ $i % 2 === 1 ? 'direction:ltr' : '' }}">

                    @if($p['mockup'] === 'browser')
                    {{-- Browser Mockup --}}
                    <div class="relative rounded-2xl overflow-hidden border border-white/[0.07] shadow-[0_30px_80px_rgba(0,0,0,0.4)]"
                         style="box-shadow: 0 30px 80px rgba(0,0,0,0.5), 0 0 0 1px rgba(255,255,255,0.05);">

                        {{-- Browser chrome --}}
                        <div class="flex items-center gap-2 px-5 py-3.5 border-b border-white/[0.07]" style="background:#131720;">
                            <span class="w-3 h-3 rounded-full" style="background:#ff5f57;"></span>
                            <span class="w-3 h-3 rounded-full" style="background:#febc2e;"></span>
                            <span class="w-3 h-3 rounded-full" style="background:#28c840;"></span>
                            <div class="flex-1 mx-4 bg-white/[0.06] rounded-full px-4 py-1.5 flex items-center gap-2">
                                <span class="text-white/20 text-xs">🔒</span>
                                <span class="text-white/30 text-xs font-mono">skyinfers.com/projects/{{ strtolower(str_replace(' ', '-', $p['title'])) }}</span>
                            </div>
                        </div>

                        {{-- Screenshot area --}}
                        @if($p['image'])
                        <div class="mockup-img-wrap">
                            <img src="{{ $p['image'] }}" alt="{{ $p['title'] }}">
                        </div>
                        @else
                            {{-- Placeholder with simulated UI --}}
                            <div class="relative overflow-hidden bg-gradient-to-br {{ $p['gradient'] }}" style="height:340px;">
                                <div class="absolute inset-0" style="background: radial-gradient(ellipse at 30% 30%, {{ $p['color'] }}15 0%, transparent 60%);"></div>

                                {{-- Simulated hero section --}}
                                <div class="absolute inset-0 p-8 flex flex-col">
                                    {{-- Nav bar --}}
                                    <div class="flex items-center justify-between mb-10">
                                        <div class="w-20 h-3 rounded-full" style="background:rgba(255,255,255,0.15);"></div>
                                        <div class="flex gap-4">
                                            <div class="w-10 h-2.5 rounded-full" style="background:rgba(255,255,255,0.08);"></div>
                                            <div class="w-10 h-2.5 rounded-full" style="background:rgba(255,255,255,0.08);"></div>
                                            <div class="w-10 h-2.5 rounded-full" style="background:rgba(255,255,255,0.08);"></div>
                                            <div class="w-16 h-6 rounded-lg" style="background:{{ $p['color'] }}40;"></div>
                                        </div>
                                    </div>
                                    {{-- Hero text blocks --}}
                                    <div class="mb-6">
                                        <div class="w-16 h-2 rounded-full mb-4" style="background:{{ $p['color'] }}60;"></div>
                                        <div class="w-3/4 h-5 rounded-full mb-2.5" style="background:rgba(255,255,255,0.18);"></div>
                                        <div class="w-1/2 h-5 rounded-full mb-6" style="background:rgba(255,255,255,0.12);"></div>
                                        <div class="w-full h-2.5 rounded-full mb-2" style="background:rgba(255,255,255,0.07);"></div>
                                        <div class="w-4/5 h-2.5 rounded-full mb-6" style="background:rgba(255,255,255,0.05);"></div>
                                        <div class="flex gap-3">
                                            <div class="w-24 h-8 rounded-lg" style="background:{{ $p['color'] }};"></div>
                                            <div class="w-24 h-8 rounded-lg" style="background:rgba(255,255,255,0.07);"></div>
                                        </div>
                                    </div>
                                    {{-- Cards row --}}
                                    <div class="grid grid-cols-3 gap-3 mt-auto">
                                        @for($c = 0; $c < 3; $c++)
                                        <div class="rounded-xl p-4" style="background:rgba(255,255,255,0.04); border:1px solid rgba(255,255,255,0.06);">
                                            <div class="w-6 h-6 rounded-lg mb-3" style="background:{{ $p['color'] }}30;"></div>
                                            <div class="w-full h-2 rounded-full mb-1.5" style="background:rgba(255,255,255,0.1);"></div>
                                            <div class="w-3/4 h-2 rounded-full" style="background:rgba(255,255,255,0.06);"></div>
                                        </div>
                                        @endfor
                                    </div>
                                </div>

                                {{-- "Add your screenshot" overlay hint --}}
                                <div class="absolute inset-0 flex items-center justify-center opacity-0 hover:opacity-100 transition-opacity duration-300"
                                     style="background:rgba(0,0,0,0.7);">
                                    <div class="text-center">
                                        <div class="text-2xl mb-2">📸</div>
                                        <p class="text-white text-xs font-semibold">Replace with your screenshot</p>
                                        <p class="text-white/50 text-xs mt-1">Set <code class="text-accent">$p['image']</code> to the image path</p>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>

                    @elseif($p['mockup'] === 'phone')
                    {{-- Phone Mockup --}}
                    <div class="flex justify-center">
                        <div class="relative w-64 rounded-[2.5rem] overflow-hidden border-4 border-white/[0.10] shadow-[0_30px_80px_rgba(0,0,0,0.5)]"
                             style="background:#131720;">
                            {{-- Phone notch --}}
                            <div class="flex justify-center pt-3 pb-2" style="background:#131720;">
                                <div class="w-20 h-5 rounded-full" style="background:#0d1117;"></div>
                            </div>
                            {{-- Screen --}}
                            @if($p['image'])
                            <div class="phone-img-wrap">
                                <img src="{{ $p['image'] }}" alt="{{ $p['title'] }}">
                            </div>
                            @else
                                <div class="relative overflow-hidden bg-gradient-to-b {{ $p['gradient'] }}" style="height:460px;">
                                    <div class="absolute inset-0" style="background: radial-gradient(ellipse at 50% 20%, {{ $p['color'] }}20 0%, transparent 60%);"></div>
                                    <div class="p-5 flex flex-col gap-4">
                                        {{-- Stories row --}}
                                        <div class="flex gap-2 mt-2">
                                            @for($c = 0; $c < 4; $c++)
                                            <div class="w-14 h-14 rounded-full flex-shrink-0" style="background:{{ $p['color'] }}{{ $c === 0 ? '50' : '20' }}; border:2px solid {{ $p['color'] }}{{ $c === 0 ? '' : '30' }};"></div>
                                            @endfor
                                        </div>
                                        {{-- Post card --}}
                                        @for($c = 0; $c < 2; $c++)
                                        <div class="rounded-2xl overflow-hidden" style="background:rgba(255,255,255,0.04); border:1px solid rgba(255,255,255,0.06);">
                                            <div class="h-32" style="background: linear-gradient(135deg, {{ $p['color'] }}30, rgba(255,255,255,0.05));"></div>
                                            <div class="p-3">
                                                <div class="w-3/4 h-2.5 rounded-full mb-2" style="background:rgba(255,255,255,0.12);"></div>
                                                <div class="w-1/2 h-2 rounded-full" style="background:rgba(255,255,255,0.07);"></div>
                                            </div>
                                        </div>
                                        @endfor
                                    </div>
                                    <div class="absolute inset-0 flex items-center justify-center opacity-0 hover:opacity-100 transition-opacity duration-300"
                                         style="background:rgba(0,0,0,0.7);">
                                        <div class="text-center px-4">
                                            <div class="text-2xl mb-2">📸</div>
                                            <p class="text-white text-xs font-semibold">Replace with your screenshot</p>
                                        </div>
                                    </div>
                                </div>
                            @endif
                            {{-- Home indicator --}}
                            <div class="flex justify-center py-2" style="background:#131720;">
                                <div class="w-24 h-1 rounded-full" style="background:rgba(255,255,255,0.2);"></div>
                            </div>
                        </div>
                    </div>

                    @elseif($p['mockup'] === 'video')
                    {{-- Video Player Mockup --}}
                    <div class="relative rounded-2xl overflow-hidden border border-white/[0.07] shadow-[0_30px_80px_rgba(0,0,0,0.4)]">
                        @if($p['image'])
                            <img src="{{ $p['image'] }}" alt="{{ $p['title'] }}" class="w-full object-cover" style="height:340px;">
                        @else
                            <div class="relative flex items-center justify-center bg-gradient-to-br {{ $p['gradient'] }}" style="height:340px;">
                                <div class="absolute inset-0" style="background: radial-gradient(ellipse at 50% 50%, {{ $p['color'] }}15 0%, transparent 60%);"></div>
                                {{-- Play button --}}
                                <div class="relative z-10 flex flex-col items-center gap-4">
                                    <div class="w-20 h-20 rounded-full flex items-center justify-center"
                                         style="background:rgba(255,255,255,0.1); border:2px solid rgba(255,255,255,0.2); backdrop-filter:blur(10px);">
                                        <svg width="28" height="28" viewBox="0 0 24 24" fill="white" style="margin-left:4px;">
                                            <path d="M8 5v14l11-7z"/>
                                        </svg>
                                    </div>
                                    <div class="text-white/60 text-xs font-medium tracking-widest uppercase">90 sec • Product Video</div>
                                </div>
                                {{-- Video timeline --}}
                                <div class="absolute bottom-0 left-0 right-0 p-4" style="background:linear-gradient(to top, rgba(0,0,0,0.8), transparent);">
                                    <div class="flex items-center gap-3 mb-2">
                                        <span class="text-white/60 text-xs">0:00</span>
                                        <div class="flex-1 h-1 rounded-full" style="background:rgba(255,255,255,0.15);">
                                            <div class="h-full w-[35%] rounded-full" style="background:{{ $p['color'] }};"></div>
                                        </div>
                                        <span class="text-white/60 text-xs">1:32</span>
                                    </div>
                                </div>
                                <div class="absolute inset-0 flex items-center justify-center opacity-0 hover:opacity-100 transition-opacity duration-300"
                                     style="background:rgba(0,0,0,0.7);">
                                    <div class="text-center">
                                        <div class="text-2xl mb-2">📸</div>
                                        <p class="text-white text-xs font-semibold">Replace with your thumbnail</p>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                    @endif
                </div>

                {{-- ── PROJECT INFO ── --}}
                <div class="{{ $i % 2 === 1 ? '' : '' }}" style="{{ $i % 2 === 1 ? 'direction:ltr' : '' }}">

                    {{-- Category + number --}}
                    <div class="flex items-center gap-3 mb-5">
                        <span class="text-xs font-bold tracking-widest uppercase" style="color:{{ $p['color'] }};">{{ $p['category'] }}</span>
                        <span class="text-white/20 text-xs">—</span>
                        <span class="text-xs text-muted font-medium">{{ $p['tag'] }}</span>
                    </div>

                    <h2 class="font-syne font-extrabold leading-tight tracking-tight mb-4" style="font-size:clamp(1.6rem,3vw,2.4rem);">{{ $p['title'] }}</h2>
                    <p class="text-muted text-base leading-relaxed mb-8">{{ $p['desc'] }}</p>

                    {{-- Results --}}
                    <div class="mb-8">
                        <div class="text-xs font-bold tracking-widest uppercase mb-4" style="color:{{ $p['color'] }};">Results</div>
                        <div class="grid grid-cols-3 gap-3">
                            @foreach($p['results'] as $result)
                            <div class="rounded-xl px-4 py-4 text-center border transition-all duration-300"
                                 style="background:{{ $p['color'] }}0d; border-color:{{ $p['color'] }}25;">
                                <div class="font-syne font-extrabold text-base leading-tight mb-1" style="color:{{ $p['color'] }};">{{ $result }}</div>
                            </div>
                            @endforeach
                        </div>
                    </div>

                    {{-- Tags --}}
                    <div class="flex flex-wrap gap-2 mb-8">
                        @foreach($p['tags'] as $tag)
                        <span class="text-xs px-3 py-1.5 rounded-full border border-white/[0.07] text-muted font-medium">{{ $tag }}</span>
                        @endforeach
                    </div>

                    {{-- CTA --}}
                    <a href="{{ url('/contact') }}"
                       class="inline-flex items-center gap-2 text-sm font-semibold no-underline hover:gap-3 transition-all duration-200"
                       style="color:{{ $p['color'] }};">
                        Work with us on something like this
                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none"><path d="M2 7h10M8 3l4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                    </a>
                </div>
            </div>

            {{-- Divider (not on last) --}}
            @if(!$loop->last)
            <div class="mt-24 border-b border-white/[0.05]"></div>
            @endif
        </div>
        @endforeach
    </div>

    {{-- Empty state --}}
    <div id="emptyState" style="display:none;" class="text-center py-24">
        <div class="text-4xl mb-4">🔍</div>
        <p class="text-muted text-base">No projects found in this category yet.</p>
    </div>
</section>


{{-- ══════════════════════════════════════
     STATS BAR
══════════════════════════════════════ --}}
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
    <div class="reveal reveal-delay-{{ $i }} px-12 py-14 border border-white/[0.07] hover:bg-surface transition-colors duration-300 text-center">
        <div class="stat-num font-syne text-[3rem] font-extrabold leading-none tracking-tight mb-2" data-target="{{ $stat['num'] }}" data-suffix="{{ $stat['suffix'] }}">0</div>
        <div class="text-muted text-sm font-medium">{{ $stat['label'] }}</div>
    </div>
    @endforeach
</div>


{{-- ══════════════════════════════════════
     CTA
══════════════════════════════════════ --}}
<section class="relative text-center px-14 py-36 overflow-hidden">
    <div class="cta-radial absolute inset-0 pointer-events-none"></div>
    <div class="relative max-w-2xl mx-auto reveal">
        <div class="inline-flex justify-center items-center gap-2.5 text-xs font-semibold tracking-[0.15em] uppercase text-accent mb-6 before:content-[''] before:w-5 before:h-px before:bg-accent after:content-[''] after:w-5 after:h-px after:bg-accent">
            Let's Build Together
        </div>
        <h2 class="font-syne font-extrabold leading-tight tracking-tight mb-4" style="font-size: clamp(2.5rem,5vw,4rem);">
            Want results<br>like these?
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
                class="projects-pill flex items-center gap-2 px-5 py-2.5 rounded-full border text-sm font-medium transition-all duration-200"
                style="border-color:rgba(255,255,255,0.07); color:#6b7280; background:#131720;">
                <span>{{ $icon }}</span>
                <span>{{ $label }}</span>
            </button>
            @endforeach
        </div>

        <div class="flex gap-3 max-w-md mx-auto">
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
@push('jsonld')
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "CollectionPage",
    "name": "SkyInfers Projects & Portfolio",
    "description": "Portfolio of web design, social media marketing and system development projects by SkyInfers.",
    "url": "{{ config('app.url') }}/projects",
    "breadcrumb": {
        "@type": "BreadcrumbList",
        "itemListElement": [
            { "@type": "ListItem", "position": 1, "name": "Home",     "item": "{{ config('app.url') }}" },
            { "@type": "ListItem", "position": 2, "name": "Projects", "item": "{{ config('app.url') }}/projects" }
        ]
    }
}
</script>
@endpush


@push('scripts')
<style>
    .mockup-img-wrap {
        overflow: hidden;
        position: relative;
    }
    .mockup-img-wrap img {
        width: 100%;
        object-fit: cover;
        object-position: top;
        transition: object-position 6s ease, transform 6s ease;
        height: 340px;
        display: block;
    }
    .mockup-img-wrap:hover img {
        object-position: bottom;
    }

    .phone-img-wrap {
        overflow: hidden;
        position: relative;
    }
    .phone-img-wrap img {
        width: 100%;
        object-fit: cover;
        object-position: top;
        transition: object-position 3s ease;
        height: 460px;
        display: block;
    }
    .phone-img-wrap:hover img {
        object-position: bottom;
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
        }, { threshold: 0.10 }).observe(el);
    });

    // ── COUNT UP
    const countObs = new IntersectionObserver(entries => {
        entries.forEach(e => {
            if (!e.isIntersecting) return;
            const el     = e.target;
            const target = +el.dataset.target;
            const suffix = el.dataset.suffix || '';
            let n = 0;
            const step  = target / 60;
            const timer = setInterval(() => {
                n = Math.min(n + step, target);
                el.textContent = Math.round(n) + suffix;
                if (n >= target) clearInterval(timer);
            }, 25);
            countObs.unobserve(el);
        });
    }, { threshold: 0.5 });
    document.querySelectorAll('.stat-num').forEach(el => countObs.observe(el));

    // ── FILTER TABS
    const filterBtns = document.querySelectorAll('.filter-btn');
    filterBtns.forEach(btn => {
        btn.addEventListener('mouseenter', function() {
            if (this.dataset.active !== 'true') {
                this.style.borderColor = 'rgba(79,142,255,0.4)';
                this.style.color       = '#ffffff';
            }
        });
        btn.addEventListener('mouseleave', function() {
            if (this.dataset.active !== 'true') {
                this.style.borderColor = 'rgba(255,255,255,0.07)';
                this.style.color       = '#6b7280';
            }
        });
        btn.addEventListener('click', function() {
            filterBtns.forEach(b => {
                b.dataset.active    = 'false';
                b.style.borderColor = 'rgba(255,255,255,0.07)';
                b.style.color       = '#6b7280';
                b.style.background  = 'transparent';
            });
            this.dataset.active    = 'true';
            this.style.borderColor = '#4f8eff';
            this.style.color       = '#ffffff';
            this.style.background  = 'rgba(79,142,255,0.1)';

            const filter = this.dataset.filter;
            const cards  = document.querySelectorAll('.project-card');
            let visible  = 0;
            cards.forEach(card => {
                const show = filter === 'All' || card.dataset.category === filter;
                card.style.display = show ? '' : 'none';
                if (show) visible++;
            });
            document.getElementById('emptyState').style.display = visible === 0 ? 'block' : 'none';
        });
    });
    document.querySelector('.filter-btn[data-filter="All"]').click();

    // ── PROJECTS SERVICE SELECTOR
    const projectsSelected = new Set();
    document.querySelectorAll('.projects-pill').forEach(btn => {
        btn.addEventListener('mouseenter', function() {
            if (!projectsSelected.has(this.querySelectorAll('span')[1].textContent.trim())) {
                this.style.borderColor = 'rgba(79,142,255,0.4)';
                this.style.color       = '#ffffff';
            }
        });
        btn.addEventListener('mouseleave', function() {
            if (!projectsSelected.has(this.querySelectorAll('span')[1].textContent.trim())) {
                this.style.borderColor = 'rgba(255,255,255,0.07)';
                this.style.color       = '#6b7280';
            }
        });
        btn.addEventListener('click', function() {
            const label = this.querySelectorAll('span')[1].textContent.trim();
            if (projectsSelected.has(label)) {
                projectsSelected.delete(label);
                this.style.borderColor = 'rgba(255,255,255,0.07)';
                this.style.color       = '#6b7280';
                this.style.background  = '#131720';
            } else {
                projectsSelected.add(label);
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
        if (projectsSelected.size === 0) {
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
        msg.textContent   = `✓ Got it! We'll reach out about: ${[...projectsSelected].join(', ')}`;
    }
</script>
@endpush