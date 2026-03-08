@extends('layouts.app')

@section('title',       'Contact SkyInfers — Get a Free Consultation | Digital Agency Johor Bahru')
@section('description',  'Get in touch with SkyInfers for web design, social media marketing or system development. Based in Johor Bahru, Malaysia. We reply within 24 hours.')
@section('keywords',     'contact skyinfers, digital marketing agency contact johor bahru, web design consultation malaysia, hire web designer johor bahru, digital agency malaysia contact')
@section('canonical',    url('/contact'))
@section('og_title',     'Contact SkyInfers — Free Consultation')
@section('og_description','Have a project in mind? Contact SkyInfers in Johor Bahru. We reply within 24 hours.')

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
            Get In Touch
        </div>
        <h1 class="font-syne font-extrabold leading-[1.05] tracking-tight mb-6"
            style="font-size: clamp(2rem, 5vw, 4.2rem);">
            Let's build something<br><span class="text-accent">great together</span>
        </h1>
        <p class="text-muted text-lg leading-relaxed max-w-xl mx-auto">
            Have a project in mind? We'd love to hear about it. Drop us a message and we'll get back to you within 24 hours.
        </p>
    </div>
</section>


{{-- ══════════════════════════════════════
     CONTACT FORM + INFO
══════════════════════════════════════ --}}
<section class="px-14 py-24 border-b border-white/[0.07]">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-16 items-start">

        {{-- Left: Contact Info --}}
        <div class="reveal">
            <div class="flex items-center gap-2.5 text-xs font-semibold tracking-[0.15em] uppercase text-accent mb-5 before:content-[''] before:w-5 before:h-px before:bg-accent">
                &nbsp;Contact Info
            </div>
            <h2 class="font-syne font-extrabold leading-tight tracking-tight mb-6" style="font-size: clamp(1.8rem,3.5vw,2.5rem);">
                We're just a<br>message away
            </h2>
            <p class="text-muted text-base leading-relaxed mb-10">
                Whether you have a clear brief or just a rough idea, reach out. We'll ask the right questions, understand your goals, and figure out the best way to help.
            </p>

            {{-- Contact Details --}}
            <div class="flex flex-col gap-4 mb-10">
                @php
                $contacts = [
                    ['icon' => '📧', 'label' => 'Email',    'value' => 'info@skyinfers.com',   'href' => 'mailto:hello@skyinfers.com'],
                    ['icon' => '💬', 'label' => 'WhatsApp', 'value' => '+60 11-7023 7694',        'href' => 'https://wa.me/601234567890'],
                    ['icon' => '📍', 'label' => 'Location', 'value' => 'Johor Bahru, Malaysia', 'href' => null],
                ];
                @endphp
                @foreach($contacts as $c)
                <div class="flex items-center gap-4 bg-surface border border-white/[0.07] rounded-2xl px-6 py-5 hover:border-accent/25 transition-all duration-300">
                    <div class="w-11 h-11 bg-accent/10 rounded-xl flex items-center justify-center text-xl flex-shrink-0">{{ $c['icon'] }}</div>
                    <div>
                        <div class="text-xs text-muted font-semibold tracking-widest uppercase mb-0.5">{{ $c['label'] }}</div>
                        @if($c['href'])
                            <a href="{{ $c['href'] }}" class="text-sm font-semibold text-[#e8eaf0] hover:text-accent transition-colors duration-200 no-underline">{{ $c['value'] }}</a>
                        @else
                            <span class="text-sm font-semibold text-[#e8eaf0]">{{ $c['value'] }}</span>
                        @endif
                    </div>
                </div>
                @endforeach
            </div>

            {{-- Social Links --}}
            <div>
                <div class="text-xs font-semibold tracking-widest uppercase text-muted mb-4">Follow Us</div>
                <div class="flex gap-3">
                    @php
                    $socials = [
                        ['label' => 'Instagram', 'href' => '#', 'icon' => '📸'],
                        ['label' => 'LinkedIn',  'href' => '#', 'icon' => '💼'],
                        ['label' => 'TikTok',    'href' => '#', 'icon' => '🎵'],
                        ['label' => 'Facebook',  'href' => '#', 'icon' => '👥'],
                    ];
                    @endphp
                    @foreach($socials as $s)
                    <a href="{{ $s['href'] }}"
                       class="flex items-center gap-2 px-4 py-2.5 bg-surface border border-white/[0.07] rounded-xl text-muted text-xs font-semibold hover:border-accent/40 hover:text-white transition-all duration-200 no-underline">
                        <span>{{ $s['icon'] }}</span>
                        <span>{{ $s['label'] }}</span>
                    </a>
                    @endforeach
                </div>
            </div>
        </div>

        {{-- Right: Contact Form --}}
        <div class="reveal reveal-delay-1 bg-surface border border-white/[0.07] rounded-2xl p-10">
            <h3 class="font-syne font-bold text-xl tracking-tight mb-8">Send us a message</h3>

            <div class="flex flex-col gap-5">
                {{-- Name --}}
                <div>
                    <label class="text-xs font-semibold tracking-widest uppercase text-muted mb-2 block">Your Name</label>
                    <input
                        type="text"
                        id="contactName"
                        placeholder="John Doe"
                        class="w-full bg-bg border border-white/[0.07] focus:border-accent rounded-xl px-5 py-3.5 text-[#e8eaf0] text-sm font-dm outline-none placeholder-muted transition-colors duration-200"
                    >
                </div>

                {{-- Email --}}
                <div>
                    <label class="text-xs font-semibold tracking-widest uppercase text-muted mb-2 block">Email Address</label>
                    <input
                        type="email"
                        id="contactEmail"
                        placeholder="your@email.com"
                        class="w-full bg-bg border border-white/[0.07] focus:border-accent rounded-xl px-5 py-3.5 text-[#e8eaf0] text-sm font-dm outline-none placeholder-muted transition-colors duration-200"
                    >
                </div>

                {{-- Service --}}
                <div>
                    <label class="text-xs font-semibold tracking-widest uppercase text-muted mb-2 block">I'm interested in</label>
                    <div class="flex flex-wrap gap-2" id="contactServices">
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
                            class="contact-pill flex items-center gap-2 px-4 py-3 rounded-full border text-xs font-medium transition-all duration-200"
                            style="border-color:rgba(255,255,255,0.07); color:#6b7280; background:#0d1117;">
                            <span>{{ $icon }}</span>
                            <span>{{ $label }}</span>
                        </button>
                        @endforeach
                    </div>
                </div>

                {{-- Message --}}
                <div>
                    <label class="text-xs font-semibold tracking-widest uppercase text-muted mb-2 block">Message <span class="text-white/30 normal-case tracking-normal font-normal">(optional)</span></label>
                    <textarea
                        id="contactMessage"
                        placeholder="Tell us about your project, timeline, or any questions you have..."
                        rows="4"
                        class="w-full bg-bg border border-white/[0.07] focus:border-accent rounded-xl px-5 py-3.5 text-[#e8eaf0] text-sm font-dm outline-none placeholder-muted transition-colors duration-200 resize-none"
                    ></textarea>
                </div>

                {{-- Submit --}}
                <button
                    type="button"
                    onclick="submitContact()"
                    class="w-full bg-accent hover:bg-[#3a7bef] text-white py-4 rounded-xl font-semibold text-sm transition-all duration-200 hover:-translate-y-0.5 hover:shadow-[0_8px_30px_rgba(79,142,255,0.3)]">
                    Send Message →
                </button>
                <p id="contact-msg" style="display:none; font-size:.875rem; text-align:center;"></p>
            </div>
        </div>
    </div>
</section>


{{-- ══════════════════════════════════════
     FAQ
══════════════════════════════════════ --}}
<section class="bg-bg-2 px-14 py-24 border-b border-white/[0.07]">
    <div class="reveal mb-16">
        <div class="flex items-center gap-2.5 text-xs font-semibold tracking-[0.15em] uppercase text-accent mb-5 before:content-[''] before:w-5 before:h-px before:bg-accent">
            &nbsp;FAQ
        </div>
        <h2 class="font-syne font-extrabold leading-tight tracking-tight" style="font-size: clamp(2rem,4vw,3.2rem);">
            Questions we get<br>all the time
        </h2>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-0.5" id="faqList">
        @php
        $faqs = [
            ['q' => 'How long does a project take?',                 'a' => 'It depends on the scope. A landing page takes 3–5 days, a corporate website 7–14 days, and a custom system can range from 2–8 weeks. We always give you a clear timeline before starting.'],
            ['q' => 'Do you work with small businesses?',            'a' => 'Absolutely. We work with businesses of all sizes, from solo founders launching their first product to established companies looking to scale. Our packages are flexible to fit different budgets.'],
            ['q' => 'Can I request revisions?',                      'a' => 'Yes! Every project includes revision rounds. We work collaboratively with you throughout the process to make sure the final output matches your vision.'],
            ['q' => 'Do you offer ongoing support after launch?',    'a' => 'Yes. We offer post-launch support for all our web and system projects. Whether it\'s a quick fix or a new feature, we\'re available to help after delivery.'],
            ['q' => 'What information do I need to get started?',    'a' => 'Just reach out! You don\'t need a fully detailed brief to get started. We\'ll ask the right questions during our initial conversation to understand your goals and suggest the best approach.'],
            ['q' => 'How does payment work?',                        'a' => 'We typically work with a 50% deposit upfront and 50% upon delivery. For larger projects, we can arrange milestone-based payments. We\'ll discuss this clearly before any work begins.'],
        ];
        @endphp
        @foreach($faqs as $i => $faq)
        <div class="reveal {{ $i % 2 !== 0 ? 'reveal-delay-1' : '' }} faq-item bg-surface border border-white/[0.07]
            {{ $i === 0 ? 'rounded-tl-2xl' : '' }}
            {{ $i === 1 ? 'rounded-tr-2xl' : '' }}
            {{ $i === count($faqs)-2 ? 'rounded-bl-2xl' : '' }}
            {{ $i === count($faqs)-1 ? 'rounded-br-2xl' : '' }}
            p-8 cursor-pointer hover:border-accent/25 transition-all duration-300"
            onclick="toggleFaq(this)">
            <div class="flex items-start justify-between gap-4">
                <h3 class="font-syne font-bold text-base tracking-tight">{{ $faq['q'] }}</h3>
                <span class="faq-icon text-accent text-lg flex-shrink-0 transition-transform duration-300">+</span>
            </div>
            <p class="faq-answer text-muted text-sm leading-relaxed mt-4">{{ $faq['a'] }}</p>
        </div>
        @endforeach
    </div>
</section>

@endsection
@push('jsonld')
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "ContactPage",
    "name": "Contact SkyInfers",
    "description": "Get in touch with SkyInfers for digital marketing, web design or system development services.",
    "url": "{{ config('app.url') }}/contact",
    "breadcrumb": {
        "@type": "BreadcrumbList",
        "itemListElement": [
            { "@type": "ListItem", "position": 1, "name": "Home",    "item": "{{ config('app.url') }}" },
            { "@type": "ListItem", "position": 2, "name": "Contact", "item": "{{ config('app.url') }}/contact" }
        ]
    }
}
</script>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "mainEntity": [
        {
            "@type": "Question",
            "name": "How long does a project take?",
            "acceptedAnswer": { "@type": "Answer", "text": "A landing page takes 3–5 days, a corporate website 7–14 days, and a custom system can range from 2–8 weeks." }
        },
        {
            "@type": "Question",
            "name": "Do you work with small businesses?",
            "acceptedAnswer": { "@type": "Answer", "text": "Absolutely. We work with businesses of all sizes, from solo founders to established companies. Our packages are flexible to fit different budgets." }
        },
        {
            "@type": "Question",
            "name": "Do you offer ongoing support after launch?",
            "acceptedAnswer": { "@type": "Answer", "text": "Yes. We offer post-launch support for all our web and system projects." }
        },
        {
            "@type": "Question",
            "name": "How does payment work?",
            "acceptedAnswer": { "@type": "Answer", "text": "We typically work with a 50% deposit upfront and 50% upon delivery. For larger projects, we can arrange milestone-based payments." }
        }
    ]
}
</script>
@endpush


@push('scripts')
<style>
    .faq-answer {
        max-height: 0;
        overflow: hidden;
        margin-top: 0;
        transition: max-height 0.2s ease, margin 0.35s ease;
    }
    .faq-answer.open {
        max-height: 200px;
        margin-top: 16px;
    }
    .faq-icon {
        display: inline-block;
        transition: transform 0.3s ease;
    }
    .faq-icon.open {
        transform: rotate(45deg);
    }
</style>

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

    // ── CONTACT SERVICE PILLS
    const contactSelected = new Set();
    document.querySelectorAll('.contact-pill').forEach(btn => {
        btn.addEventListener('mouseenter', function() {
            if (!contactSelected.has(this.querySelectorAll('span')[1].textContent.trim())) {
                this.style.borderColor = 'rgba(79,142,255,0.4)';
                this.style.color       = '#ffffff';
            }
        });
        btn.addEventListener('mouseleave', function() {
            if (!contactSelected.has(this.querySelectorAll('span')[1].textContent.trim())) {
                this.style.borderColor = 'rgba(255,255,255,0.07)';
                this.style.color       = '#6b7280';
            }
        });
        btn.addEventListener('click', function() {
            const label = this.querySelectorAll('span')[1].textContent.trim();
            if (contactSelected.has(label)) {
                contactSelected.delete(label);
                this.style.borderColor = 'rgba(255,255,255,0.07)';
                this.style.color       = '#6b7280';
                this.style.background  = '#0d1117';
            } else {
                contactSelected.add(label);
                this.style.borderColor = '#4f8eff';
                this.style.color       = '#ffffff';
                this.style.background  = 'rgba(79,142,255,0.1)';
            }
        });
    });

    // ── CONTACT FORM SUBMIT
    function submitContact() {
        const name    = document.getElementById('contactName');
        const email   = document.getElementById('contactEmail');
        const msg     = document.getElementById('contact-msg');

        if (!name.value.trim()) {
            name.style.borderColor = '#ef4444';
            msg.style.display = 'block';
            msg.style.color   = '#ef4444';
            msg.textContent   = 'Please enter your name.';
            return;
        }
        if (!email.value || !email.value.includes('@')) {
            email.style.borderColor = '#ef4444';
            msg.style.display = 'block';
            msg.style.color   = '#ef4444';
            msg.textContent   = 'Please enter a valid email address.';
            return;
        }
        if (contactSelected.size === 0) {
            msg.style.display = 'block';
            msg.style.color   = '#f59e0b';
            msg.textContent   = 'Please select at least one service you\'re interested in.';
            return;
        }

        // Success
        name.style.borderColor  = '#00d4aa';
        email.style.borderColor = '#00d4aa';
        msg.style.display = 'block';
        msg.style.color   = '#00d4aa';
        msg.textContent   = `✓ Message sent! We'll reach out about ${[...contactSelected].join(', ')} within 24 hours.`;
    }

    // ── FAQ ACCORDION
    function toggleFaq(el) {
        const answer = el.querySelector('.faq-answer');
        const icon   = el.querySelector('.faq-icon');
        const isOpen = answer.classList.contains('open');

        // Close all
        document.querySelectorAll('.faq-item').forEach(item => {
            item.querySelector('.faq-answer').classList.remove('open');
            item.querySelector('.faq-icon').classList.remove('open');
        });

        // Open clicked if it was closed
        if (!isOpen) {
            answer.classList.add('open');
            icon.classList.add('open');
        }
    }
</script>
@endpush