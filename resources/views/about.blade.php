@extends('layouts.app')

@section('title',       'About SkyInfers — Creative & Tech Agency in Johor Bahru, Malaysia')
@section('description',  'Meet the team behind SkyInfers — Luqman Ikmal (Technical Director) and Firas Jazmi (Creative Director). A creative and tech agency built to grow businesses in Malaysia.')
@section('keywords',     'about skyinfers, digital agency johor bahru, luqman ikmal, firas jazmi, creative tech agency malaysia, web design team johor bahru')
@section('canonical',    url('/about'))
@section('og_title',     'About SkyInfers — The Team Behind Every Project')
@section('og_description','SkyInfers is led by a technical director and creative director working together to deliver results. Based in Johor Bahru, Malaysia.')

@section('content')

{{-- ══════════════════════════════════════
     PAGE HERO
══════════════════════════════════════ --}}
<section class="relative flex flex-col justify-center px-14 pt-40 pb-20 overflow-hidden border-b border-white/[0.07]">

    {{-- Background blobs --}}
    <div class="absolute inset-0 pointer-events-none">
        <div class="absolute w-[500px] h-[500px] -top-20 -right-20 rounded-full bg-accent blur-[140px] opacity-[0.12]"></div>
        <div class="absolute w-[300px] h-[300px] bottom-0 left-10 rounded-full bg-accent-2 blur-[120px] opacity-[0.10]"></div>
        <div class="grid-overlay"></div>
        <canvas id="heroCanvas" class="absolute inset-0 w-full h-full" style="opacity:0.4;"></canvas>
    </div>

    <div class="relative text-center mx-auto reveal">
        <div class="inline-flex items-center gap-2 bg-accent/10 border border-accent/25 rounded-full px-4 py-1.5 text-xs text-accent font-semibold tracking-widest uppercase mb-8">
            <span class="w-1.5 h-1.5 bg-accent-2 rounded-full animate-pulse-dot"></span>
            Who We Are
        </div>
        <h1 class="font-syne font-extrabold leading-[1.05] tracking-tight mb-6"
            style="font-size: clamp(2rem, 5vw, 4.2rem);">
            Built by creators,<br>driven by <span class="text-accent">results</span>
        </h1>
        <p class="text-muted text-lg leading-relaxed max-w-xl mx-auto">
            SkyInfers is a creative and tech agency that helps businesses grow through content, design, and custom systems, all under one roof.
        </p>
    </div>
</section>


{{-- ══════════════════════════════════════
     MEET THE TEAM
══════════════════════════════════════ --}}
<section class="px-14 py-24 border-b border-white/[0.07]">

    {{-- Header --}}
    <div class="reveal text-center max-w-xl mx-auto mb-16">
        <div class="inline-flex items-center gap-2.5 text-xs font-semibold tracking-[0.15em] uppercase text-accent mb-5 before:content-[''] before:w-5 before:h-px before:bg-accent after:content-[''] after:w-5 after:h-px after:bg-accent">
            &nbsp;Our Teams&nbsp;
        </div>
        <h2 class="font-syne font-extrabold leading-tight tracking-tight" style="font-size: clamp(2rem,4vw,3.2rem);">
            The people behind<br>every project
        </h2>
    </div>

    {{-- Team Cards --}}
    <div class="grid grid-cols-1 md:grid-cols-2 gap-0.5">

        {{-- ── TECHNICAL DIRECTOR ── --}}
        <div class="reveal group relative bg-surface border border-white/[0.07] rounded-l-2xl overflow-hidden hover:border-accent/30 transition-all duration-500">

            {{-- Glow on hover --}}
            <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none"
                 style="background: radial-gradient(ellipse at top left, rgba(79,142,255,0.06) 0%, transparent 60%);"></div>

            {{-- Left accent bar --}}
            <div class="absolute left-0 top-0 w-[3px] h-0 group-hover:h-full transition-all duration-500 ease-out rounded-r-full"
                 style="background: linear-gradient(to bottom, #4f8eff, rgba(79,142,255,0.1));"></div>

            <div class="relative p-10">

                {{-- Photo --}}
                <div class="relative mb-8 overflow-hidden rounded-2xl"
                     style="height: 380px;">

                     <img src="{{ asset('images/TechnicalDirector.png') }}"
                     class="w-full h-full object-cover object-top group-hover:scale-[1.02] transition-all duration-500">

                    <div class="w-full h-full flex flex-col items-center justify-center gap-3 transition-all duration-500 group-hover:scale-[1.02]"
                         style="background: linear-gradient(135deg, #1a2030 0%, #0d1520 50%, #131720 100%);">

                        {{-- Decorative silhouette placeholder --}}
                        <div class="relative flex flex-col items-center">
                            <div class="w-24 h-24 rounded-full mb-3 flex items-center justify-center text-4xl"
                                 style="background: rgba(79,142,255,0.12); border: 2px solid rgba(79,142,255,0.2);">
                                👨‍💻
                            </div>
                            <div class="w-40 h-2.5 rounded-full mb-2" style="background:rgba(255,255,255,0.06);"></div>
                            <div class="w-28 h-2 rounded-full" style="background:rgba(255,255,255,0.04);"></div>
                        </div>

                        {{-- Hover hint --}}
                        <div class="absolute inset-0 flex items-end justify-center pb-6 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <div class="text-center">
                                <p class="text-white/40 text-xs">Replace with your photo</p>
                                <p class="text-accent/60 text-xs font-mono mt-1">asset('images/TechnicalDirector.png')</p>
                            </div>
                        </div>
                    </div>

                    {{-- Gradient fade at bottom of photo --}}
                    <div class="absolute bottom-0 left-0 right-0 h-24 pointer-events-none"
                         style="background: linear-gradient(to top, #1a2030, transparent);"></div>
                </div>

                {{-- Info --}}
                <div class="flex items-start justify-between gap-4 mb-4">
                    <div>
                        <div class="text-xs font-bold tracking-widest uppercase mb-2" style="color:#4f8eff;">Technical Director</div>
                        <h3 class="font-syne font-extrabold text-2xl tracking-tight group-hover:text-white transition-colors duration-300">Luqman Ikmal</h3>
                    </div>
                    <div class="flex gap-2 mt-1">
                        <a href="#" class="w-8 h-8 rounded-full border border-white/[0.07] flex items-center justify-center text-muted hover:border-accent/40 hover:text-accent transition-all duration-200 no-underline text-xs font-bold">in</a>
                        <a href="#" class="w-8 h-8 rounded-full border border-white/[0.07] flex items-center justify-center text-muted hover:border-accent/40 hover:text-accent transition-all duration-200 no-underline text-xs font-bold">ig</a>
                    </div>
                </div>

                <p class="text-muted text-sm leading-relaxed mb-6">
                    The architect behind every system and website SkyInfers builds. With a deep passion for clean code and scalable infrastructure, he turns complex technical challenges into elegant, reliable solutions that power business growth.
                </p>

                {{-- Expertise tags --}}
                <div class="flex flex-wrap gap-2">
                    @foreach(['Laravel', 'System Architecture', 'API Development', 'Web Performance'] as $tag)
                    <span class="text-xs px-3 py-1.5 rounded-full border font-medium transition-all duration-300"
                          style="border-color:rgba(79,142,255,0.2); color:rgba(79,142,255,0.8); background:rgba(79,142,255,0.06);">{{ $tag }}</span>
                    @endforeach
                </div>
            </div>
        </div>

        {{-- ── CREATIVE DIRECTOR ── --}}
        <div class="reveal reveal-delay-1 group relative bg-surface border border-white/[0.07] rounded-r-2xl overflow-hidden hover:border-accent-2/30 transition-all duration-500">

            {{-- Glow on hover --}}
            <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none"
                 style="background: radial-gradient(ellipse at top right, rgba(0,212,170,0.06) 0%, transparent 60%);"></div>

            {{-- Right accent bar --}}
            <div class="absolute right-0 top-0 w-[3px] h-0 group-hover:h-full transition-all duration-500 ease-out rounded-l-full"
                 style="background: linear-gradient(to bottom, #00d4aa, rgba(0,212,170,0.1));"></div>

            <div class="relative p-10">

                {{-- Photo --}}
                <div class="relative mb-8 overflow-hidden rounded-2xl"
                     style="height: 380px;">
                    
                     <img src="{{ asset('images/CMO.png') }}"
                     class="w-full h-full object-cover object-top group-hover:scale-[1.02] transition-all duration-500">

                    <div class="w-full h-full flex flex-col items-center justify-center gap-3 transition-all duration-500 group-hover:scale-[1.02]"
                         style="background: linear-gradient(135deg, #1a2030 0%, #001a15 50%, #131720 100%);">

                        <div class="relative flex flex-col items-center">
                            <div class="w-24 h-24 rounded-full mb-3 flex items-center justify-center text-4xl"
                                 style="background: rgba(0,212,170,0.12); border: 2px solid rgba(0,212,170,0.2);">
                                🎨
                            </div>
                            <div class="w-40 h-2.5 rounded-full mb-2" style="background:rgba(255,255,255,0.06);"></div>
                            <div class="w-28 h-2 rounded-full" style="background:rgba(255,255,255,0.04);"></div>
                        </div>

                        <div class="absolute inset-0 flex items-end justify-center pb-6 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <div class="text-center">
                                <p class="text-white/40 text-xs">Replace with your photo</p>
                                <p class="text-accent/60 text-xs font-mono mt-1">asset('images/CMO.png')</p>
                            </div>
                        </div>
                    </div>

                    <div class="absolute bottom-0 left-0 right-0 h-24 pointer-events-none"
                         style="background: linear-gradient(to top, #1a2030, transparent);"></div>
                </div>

                {{-- Info --}}
                <div class="flex items-start justify-between gap-4 mb-4">
                    <div>
                        <div class="text-xs font-bold tracking-widest uppercase mb-2" style="color:#00d4aa;">Creative Director</div>
                        <h3 class="font-syne font-extrabold text-2xl tracking-tight group-hover:text-white transition-colors duration-300">Firas Jazmi</h3>
                    </div>
                    <div class="flex gap-2 mt-1">
                        <a href="#" class="w-8 h-8 rounded-full border border-white/[0.07] flex items-center justify-center text-muted no-underline text-xs font-bold transition-all duration-200"
                           style="" onmouseover="this.style.borderColor='rgba(0,212,170,0.4)';this.style.color='#00d4aa';" onmouseout="this.style.borderColor='rgba(255,255,255,0.07)';this.style.color='#6b7280';">in</a>
                        <a href="#" class="w-8 h-8 rounded-full border border-white/[0.07] flex items-center justify-center text-muted no-underline text-xs font-bold transition-all duration-200"
                           style="" onmouseover="this.style.borderColor='rgba(0,212,170,0.4)';this.style.color='#00d4aa';" onmouseout="this.style.borderColor='rgba(255,255,255,0.07)';this.style.color='#6b7280';">ig</a>
                    </div>
                </div>

                <p class="text-muted text-sm leading-relaxed mb-6">
                    The creative force shaping how SkyInfers looks and feels. With a sharp eye for aesthetics and deep expertise in brand storytelling, he transforms ideas into visuals that people remember from a single logo or poster to an entire brand identity.
                </p>

                {{-- Expertise tags --}}
                <div class="flex flex-wrap gap-2">
                    @foreach(['Brand Identity', 'Poster Design', 'Video Production', 'UI/UX Design'] as $tag)
                    <span class="text-xs px-3 py-1.5 rounded-full border font-medium"
                          style="border-color:rgba(0,212,170,0.2); color:rgba(0,212,170,0.8); background:rgba(0,212,170,0.06);">{{ $tag }}</span>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    {{-- Bottom quote --}}
    <div class="reveal mt-0.5 bg-surface border border-white/[0.07] rounded-b-2xl px-12 py-10 text-center">
        <p class="font-syne font-extrabold text-xl tracking-tight text-white/60 max-w-2xl mx-auto" style="font-size:clamp(1rem,2vw,1.4rem);">
            "Together we cover both sides of the equation, <span class="text-accent">the technical</span> and <span class="text-accent-2">the creative, </span>so nothing falls through the cracks."
        </p>
    </div>
</section>


{{-- ══════════════════════════════════════
     OUR STORY
══════════════════════════════════════ --}}
<section class="px-14 py-24 border-b border-white/[0.07]">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-16 items-center">

        {{-- Left --}}
        <div class="reveal">
            <div class="flex items-center gap-2.5 text-xs font-semibold tracking-[0.15em] uppercase text-accent mb-5 before:content-[''] before:w-5 before:h-px before:bg-accent">
                &nbsp;Our Story
            </div>
            <h2 class="font-syne font-extrabold leading-tight tracking-tight mb-6" style="font-size: clamp(1.8rem,3.5vw,3rem);">
                We started with one<br>simple belief
            </h2>
            <p class="text-muted text-base leading-relaxed mb-5">
                Great businesses deserve great digital presence. But too often, companies are forced to juggle multiple agencies, one for design, one for development, another for content. The result? Inconsistent branding, poor communication, and wasted budget.
            </p>
            <p class="text-muted text-base leading-relaxed mb-5">
                SkyInfers was built to solve that. We bring content creation, web design, and system development together under one team, so everything we build works together seamlessly, from the first poster to the last line of code.
            </p>
            <p class="text-muted text-base leading-relaxed">
                We're not just a vendor. We're a growth partner that's genuinely invested in your success.
            </p>
        </div>

        {{-- Right: Stats --}}
        <div class="reveal reveal-delay-1 grid grid-cols-2 gap-0.5">
            @php
            $stats = [
                ['num' => '120', 'suffix' => '+', 'label' => 'Projects Delivered',  'desc' => 'Across content, web & systems'],
                ['num' => '98',  'suffix' => '%', 'label' => 'Client Satisfaction', 'desc' => 'Based on post-project feedback'],
                ['num' => '50',  'suffix' => '+', 'label' => 'Brands Served',       'desc' => 'From startups to enterprises'],
                ['num' => '3',   'suffix' => '',  'label' => 'Core Services',        'desc' => 'Content, Web & Systems'],
            ];
            @endphp
            @foreach($stats as $i => $stat)
            <div class="bg-surface border border-white/[0.07] {{ $i === 0 ? 'rounded-tl-2xl' : '' }} {{ $i === 1 ? 'rounded-tr-2xl' : '' }} {{ $i === 2 ? 'rounded-bl-2xl' : '' }} {{ $i === 3 ? 'rounded-br-2xl' : '' }} p-8 hover:border-accent/25 transition-all duration-300">
            <div class="stat-num font-syne text-[2.8rem] font-extrabold leading-none tracking-tight mb-1" data-target="{{ $stat['num'] }}" data-suffix="{{ $stat['suffix'] }}">
                0
            </div>
                <div class="font-semibold text-sm mb-1">{{ $stat['label'] }}</div>
                <div class="text-muted text-xs">{{ $stat['desc'] }}</div>
            </div>
            @endforeach
        </div>
    </div>
</section>


{{-- ══════════════════════════════════════
     MISSION & VISION
══════════════════════════════════════ --}}
<section class="bg-bg-2 px-14 py-24 border-b border-white/[0.07]">
    <div class="reveal text-center max-w-2xl mx-auto mb-16">
        <div class="inline-flex items-center gap-2.5 text-xs font-semibold tracking-[0.15em] uppercase text-accent mb-5 before:content-[''] before:w-5 before:h-px before:bg-accent after:content-[''] after:w-5 after:h-px after:bg-accent">
            &nbsp;What Drives Us&nbsp;
        </div>
        <h2 class="font-syne font-extrabold leading-tight tracking-tight" style="font-size: clamp(2rem,4vw,3.2rem);">
            Purpose behind every project
        </h2>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-0.5">
        {{-- Mission --}}
        <div class="reveal bg-surface border border-white/[0.07] rounded-l-2xl p-12 hover:border-accent/25 transition-all duration-300">
            <div class="w-14 h-14 bg-accent/10 rounded-2xl flex items-center justify-center text-3xl mb-8">🎯</div>
            <div class="text-accent text-xs font-bold tracking-widest uppercase mb-4">Our Mission</div>
            <h3 class="font-syne font-extrabold text-2xl tracking-tight mb-5">To make exceptional digital work accessible</h3>
            <p class="text-muted text-base leading-relaxed">
                We exist to give every business regardless of size, access to the kind of creative and technical work that drives real growth. No fluff, no overpriced retainers. Just honest work that delivers results.
            </p>
        </div>

        {{-- Vision --}}
        <div class="reveal reveal-delay-1 bg-surface border border-white/[0.07] rounded-r-2xl p-12 hover:border-accent/25 transition-all duration-300">
            <div class="w-14 h-14 bg-accent-2/10 rounded-2xl flex items-center justify-center text-3xl mb-8">🚀</div>
            <div class="text-accent-2 text-xs font-bold tracking-widest uppercase mb-4">Our Vision</div>
            <h3 class="font-syne font-extrabold text-2xl tracking-tight mb-5">To be the go-to digital partner in Southeast Asia</h3>
            <p class="text-muted text-base leading-relaxed">
                We're building towards a future where SkyInfers is the first name businesses think of when they want to grow online, known for quality, speed, and a team that genuinely cares about outcomes.
            </p>
        </div>
    </div>
</section>


{{-- ══════════════════════════════════════
     OUR VALUES
══════════════════════════════════════ --}}
<section class="px-14 py-24 border-b border-white/[0.07]">
    <div class="reveal mb-16">
        <div class="flex items-center gap-2.5 text-xs font-semibold tracking-[0.15em] uppercase text-accent mb-5 before:content-[''] before:w-5 before:h-px before:bg-accent">
            &nbsp;Our Values
        </div>
        <h2 class="font-syne font-extrabold leading-tight tracking-tight" style="font-size: clamp(2rem,4vw,3.2rem);">
            The principles we<br>build everything on
        </h2>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-0.5">
        @php
        $values = [
            [
                'icon'   => '💡',
                'title'  => 'Clarity Over Complexity',
                'desc'   => 'We believe the best solutions are the simplest ones. We cut through noise to deliver work that\'s clear, purposeful, and easy to understand for you and your audience.',
                'color'  => 'accent',
            ],
            [
                'icon'   => '🔥',
                'title'  => 'Quality Without Compromise',
                'desc'   => 'We hold every deliverable to a high standard. Whether it\'s a social media poster or a full system build, we don\'t ship anything we\'re not proud of.',
                'color'  => 'accent',
            ],
            [
                'icon'   => '🤝',
                'title'  => 'Partnership, Not Transactions',
                'desc'   => 'We treat every client relationship as a long-term partnership. Your success is our success, and we act like it in every interaction, every revision, every follow-up.',
                'color'  => 'accent',
            ],
            [
                'icon'   => '⚡',
                'title'  => 'Speed with Intention',
                'desc'   => 'We move fast, but never carelessly. Every fast delivery is backed by a process designed to maintain quality while respecting your time and budget.',
                'color'  => 'accent',
            ],
            [
                'icon'   => '📊',
                'title'  => 'Results Are the Metric',
                'desc'   => 'We measure success by what actually happens after we deliver, not just by how good something looks. If it\'s not moving the needle, we keep working.',
                'color'  => 'accent',
            ],
            [
                'icon'   => '🌱',
                'title'  => 'Always Growing',
                'desc'   => 'The digital world doesn\'t stand still, and neither do we. We\'re constantly learning, testing, and improving so our clients always get current, relevant work.',
                'color'  => 'accent',
            ],
        ];
        @endphp
        @foreach($values as $i => $v)
        <div class="reveal {{ $i > 0 ? 'reveal-delay-'.min($i,3) : '' }} bg-surface border border-white/[0.07]
            {{ $i === 0 ? 'rounded-tl-2xl' : '' }}
            {{ $i === 2 ? 'rounded-tr-2xl' : '' }}
            {{ $i === 3 ? 'rounded-bl-2xl' : '' }}
            {{ $i === 5 ? 'rounded-br-2xl' : '' }}
            p-10 hover:border-accent/25 hover:-translate-y-0.5 transition-all duration-300">
            <div class="w-12 h-12 bg-accent/10 rounded-xl flex items-center justify-center text-2xl mb-6">{{ $v['icon'] }}</div>
            <h3 class="font-syne font-bold text-lg tracking-tight mb-3">{{ $v['title'] }}</h3>
            <p class="text-muted text-sm leading-relaxed">{{ $v['desc'] }}</p>
        </div>
        @endforeach
    </div>
</section>


{{-- ══════════════════════════════════════
     WHY WORK WITH US
══════════════════════════════════════ --}}
<section class="bg-bg-2 px-14 py-24 border-b border-white/[0.07]">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-16 items-center">

        {{-- Left --}}
        <div class="reveal">
            <div class="flex items-center gap-2.5 text-xs font-semibold tracking-[0.15em] uppercase text-accent mb-5 before:content-[''] before:w-5 before:h-px before:bg-accent">
                &nbsp;Why Work With Us
            </div>
            <h2 class="font-syne font-extrabold leading-tight tracking-tight mb-6" style="font-size: clamp(1.8rem,3.5vw,3rem);">
                Everything in one place,<br>done right
            </h2>
            <p class="text-muted text-base leading-relaxed mb-10">
                Most businesses deal with fragmented teams, a freelancer for design, an agency for development, another for content. With SkyInfers, you get one cohesive team that communicates internally and delivers work that actually fits together.
            </p>
            <a href="{{ url('/services') }}"
               class="bg-accent hover:bg-[#3a7bef] text-white px-8 py-3.5 rounded-xl font-semibold text-sm transition-all duration-200 hover:-translate-y-0.5 hover:shadow-[0_8px_30px_rgba(79,142,255,0.3)] no-underline inline-block">
                See Our Services →
            </a>
        </div>

        {{-- Right: Comparison --}}
        <div class="reveal reveal-delay-1 flex flex-col gap-0.5">
            @php
            $comparisons = [
                ['them' => 'Multiple vendors to manage',          'us' => 'One team for everything'],
                ['them' => 'Inconsistent brand across outputs',   'us' => 'Unified brand voice & visuals'],
                ['them' => 'Slow back-and-forth communication',   'us' => 'Clear, direct communication'],
                ['them' => 'Generic, template-based work',        'us' => 'Custom-crafted for your brand'],
                ['them' => 'Deliverables, no strategy',          'us' => 'Strategy-first, results-focused'],
            ];
            @endphp
            <div class="grid grid-cols-2 gap-0.5 mb-0.5">
                <div class="bg-surface border border-white/[0.07] rounded-tl-2xl px-6 py-3 text-xs font-bold tracking-widest uppercase text-muted text-center">Others</div>
                <div class="bg-accent/10 border border-accent/25 rounded-tr-2xl px-6 py-3 text-xs font-bold tracking-widest uppercase text-accent text-center">SkyInfers</div>
            </div>
            @foreach($comparisons as $i => $c)
            <div class="grid grid-cols-2 gap-0.5 {{ $i === count($comparisons)-1 ? 'rounded-b-2xl overflow-hidden' : '' }}">
                <div class="bg-surface border border-white/[0.07] {{ $i === count($comparisons)-1 ? 'rounded-bl-2xl' : '' }} px-6 py-4 flex items-center gap-3">
                    <span class="text-red-400 text-xs flex-shrink-0">✕</span>
                    <span class="text-muted text-sm">{{ $c['them'] }}</span>
                </div>
                <div class="bg-surface border border-white/[0.07] {{ $i === count($comparisons)-1 ? 'rounded-br-2xl' : '' }} px-6 py-4 flex items-center gap-3">
                    <span class="text-accent-2 text-xs flex-shrink-0">✓</span>
                    <span class="text-sm font-medium">{{ $c['us'] }}</span>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>


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
            Ready to work with<br>a team that cares?
        </h2>
        <p class="text-muted text-lg mb-10">
            Pick what you're interested in and we'll reach out within 24 hours.
        </p>

        {{-- Service Selector --}}
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
                class="about-pill flex items-center gap-2 px-5 py-2.5 rounded-full border text-sm font-medium transition-all duration-200"
                style="border-color:rgba(255,255,255,0.07); color:#6b7280; background:#131720;">
                <span>{{ $icon }}</span>
                <span>{{ $label }}</span>
            </button>
            @endforeach
        </div>

        {{-- Email + Submit --}}
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
    "@type": "AboutPage",
    "name": "About SkyInfers",
    "description": "Meet the team behind SkyInfers — a creative and tech agency in Johor Bahru, Malaysia.",
    "url": "{{ config('app.url') }}/about",
    "breadcrumb": {
        "@type": "BreadcrumbList",
        "itemListElement": [
            { "@type": "ListItem", "position": 1, "name": "Home",  "item": "{{ config('app.url') }}" },
            { "@type": "ListItem", "position": 2, "name": "About", "item": "{{ config('app.url') }}/about" }
        ]
    }
}
</script>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "ItemList",
    "name": "SkyInfers Team",
    "itemListElement": [
        {
            "@type": "ListItem",
            "position": 1,
            "item": {
                "@type": "Person",
                "name": "Luqman Ikmal",
                "jobTitle": "Technical Director",
                "worksFor": { "@type": "Organization", "name": "SkyInfers" },
                "knowsAbout": ["Laravel", "System Architecture", "API Development", "Web Performance"]
            }
        },
        {
            "@type": "ListItem",
            "position": 2,
            "item": {
                "@type": "Person",
                "name": "Firas Jazmi",
                "jobTitle": "Creative Director",
                "worksFor": { "@type": "Organization", "name": "SkyInfers" },
                "knowsAbout": ["Brand Identity", "Poster Design", "Video Production", "UI/UX Design"]
            }
        }
    ]
}
</script>
@endpush


@push('scripts')
<script>
    // ── LIVE CANVAS BACKGROUND
    window.addEventListener('load', () => {
        const canvas = document.getElementById('heroCanvas');
        const ctx    = canvas.getContext('2d');
        const hero   = canvas.closest('section');

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
            entries.forEach(e => { if (e.isIntersecting) { e.target.classList.add('show'); } });
        }, { threshold: 0.12 }).observe(el);
    });

    // ── SERVICE SELECTOR
    const aboutSelected = new Set();
    document.querySelectorAll('.about-pill').forEach(btn => {
        btn.addEventListener('mouseenter', function() {
            if (!aboutSelected.has(this.querySelectorAll('span')[1].textContent.trim())) {
                this.style.borderColor = 'rgba(79,142,255,0.4)';
                this.style.color       = '#ffffff';
            }
        });
        btn.addEventListener('mouseleave', function() {
            if (!aboutSelected.has(this.querySelectorAll('span')[1].textContent.trim())) {
                this.style.borderColor = 'rgba(255,255,255,0.07)';
                this.style.color       = '#6b7280';
            }
        });
        btn.addEventListener('click', function() {
            const label = this.querySelectorAll('span')[1].textContent.trim();
            if (aboutSelected.has(label)) {
                aboutSelected.delete(label);
                this.style.borderColor = 'rgba(255,255,255,0.07)';
                this.style.color       = '#6b7280';
                this.style.background  = '#131720';
            } else {
                aboutSelected.add(label);
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

        if (aboutSelected.size === 0) {
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
        msg.textContent   = `✓ Got it! We'll reach out about: ${[...aboutSelected].join(', ')}`;
    }

    // ── COUNT UP
        const counters = document.querySelectorAll('.stat-num');
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
        counters.forEach(el => countObs.observe(el));
</script>
@endpush