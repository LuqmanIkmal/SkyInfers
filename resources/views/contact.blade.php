@extends('layouts.app')

@section('title', 'Contact — SkyInfers')

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
            Get In Touch
        </div>
        <h1 class="font-syne font-extrabold leading-[1.05] tracking-tight mb-5 sm:mb-6"
            style="font-size: clamp(1.8rem, 5vw, 4.2rem);">
            Let's build something<br><span class="text-accent">great together</span>
        </h1>
        <p class="text-muted text-base sm:text-lg leading-relaxed max-w-xs sm:max-w-xl mx-auto">
            Have a project in mind? We'd love to hear about it. Drop us a message and we'll get back to you within 24 hours.
        </p>
    </div>
</section>


{{-- CONTACT FORM + INFO --}}
<section class="px-4 sm:px-8 lg:px-14 py-14 sm:py-20 lg:py-24 border-b border-white/[0.07]">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 sm:gap-12 lg:gap-16 items-start">

        {{-- Left: Contact Info --}}
        <div class="reveal">
            <div class="flex items-center gap-2.5 text-xs font-semibold tracking-[0.15em] uppercase text-accent mb-4 sm:mb-5 before:content-[''] before:w-5 before:h-px before:bg-accent">
                &nbsp;Contact Info
            </div>
            <h2 class="font-syne font-extrabold leading-tight tracking-tight mb-5 sm:mb-6" style="font-size: clamp(1.6rem,3.5vw,2.5rem);">
                We're just a<br>message away
            </h2>
            <p class="text-muted text-sm sm:text-base leading-relaxed mb-8 sm:mb-10">
                Whether you have a clear brief or just a rough idea, reach out. We'll ask the right questions, understand your goals, and figure out the best way to help.
            </p>

            {{-- Contact Details --}}
            <div class="flex flex-col gap-3 sm:gap-4 mb-8 sm:mb-10">
                @php
                $contacts = [
                    ['icon' => '📧', 'label' => 'Email',    'value' => 'info@skyinfers.com',   'href' => 'mailto:info@skyinfers.com'],
                    ['icon' => '💬', 'label' => 'WhatsApp', 'value' => '+60 11-7023 7694',        'href' => 'https://wa.me/601170237694'],
                    ['icon' => '📍', 'label' => 'Location', 'value' => 'Johor Bahru, Malaysia', 'href' => null],
                ];
                @endphp
                @foreach($contacts as $c)
                <div class="flex items-center gap-3 sm:gap-4 bg-surface border border-white/[0.07] rounded-xl sm:rounded-2xl px-4 sm:px-6 py-4 sm:py-5 hover:border-accent/25 transition-all duration-300">
                    <div class="w-10 h-10 sm:w-11 sm:h-11 bg-accent/10 rounded-lg sm:rounded-xl flex items-center justify-center text-lg sm:text-xl flex-shrink-0">{{ $c['icon'] }}</div>
                    <div>
                        <div class="text-xs text-muted font-semibold tracking-widest uppercase mb-0.5">{{ $c['label'] }}</div>
                        @if($c['href'])
                            <a href="{{ $c['href'] }}" class="text-xs sm:text-sm font-semibold text-[#e8eaf0] hover:text-accent transition-colors duration-200 no-underline">{{ $c['value'] }}</a>
                        @else
                            <span class="text-xs sm:text-sm font-semibold text-[#e8eaf0]">{{ $c['value'] }}</span>
                        @endif
                    </div>
                </div>
                @endforeach
            </div>

            {{-- Social Links --}}
            <div>
                <div class="text-xs font-semibold tracking-widest uppercase text-muted mb-3 sm:mb-4">Follow Us</div>
                <div class="flex flex-wrap gap-2 sm:gap-3">
                    @php
                    $socials = [
                        ['label' => 'Instagram', 'href' => '#'],
                        ['label' => 'TikTok',    'href' => '#'],
                        ['label' => 'Facebook',  'href' => '#'],
                        ['label' => 'WhatsApp',  'href' => '#'],
                    ];
                    @endphp
                    @foreach($socials as $s)
                    <a href="{{ $s['href'] }}"
                       class="flex items-center gap-2 px-3 sm:px-4 py-2 sm:py-2.5 bg-surface border border-white/[0.07] rounded-lg sm:rounded-xl text-muted text-xs font-semibold hover:border-accent/40 hover:text-white transition-all duration-200 no-underline">
                        <span>{{ $s['label'] }}</span>
                    </a>
                    @endforeach
                </div>
            </div>
        </div>

        {{-- Right: Contact Form --}}
        <div class="reveal bg-surface border border-white/[0.07] rounded-xl sm:rounded-2xl p-6 sm:p-8 lg:p-10">
            <h3 class="font-syne font-bold text-lg sm:text-xl tracking-tight mb-6 sm:mb-8">Send us a message</h3>

            <div class="flex flex-col gap-4 sm:gap-5">
                {{-- Name --}}
                <div>
                    <label class="text-xs font-semibold tracking-widest uppercase text-muted mb-1.5 sm:mb-2 block">Your Name</label>
                    <input type="text" id="contactName" placeholder="John Doe"
                        class="w-full bg-bg border border-white/[0.07] focus:border-accent rounded-xl px-4 sm:px-5 py-3 sm:py-3.5 text-[#e8eaf0] text-sm outline-none placeholder-muted transition-colors duration-200">
                </div>

                {{-- Email --}}
                <div>
                    <label class="text-xs font-semibold tracking-widest uppercase text-muted mb-1.5 sm:mb-2 block">Email Address</label>
                    <input type="email" id="contactEmail" placeholder="your@email.com"
                        class="w-full bg-bg border border-white/[0.07] focus:border-accent rounded-xl px-4 sm:px-5 py-3 sm:py-3.5 text-[#e8eaf0] text-sm outline-none placeholder-muted transition-colors duration-200">
                </div>

                {{-- Service --}}
                <div>
                    <label class="text-xs font-semibold tracking-widest uppercase text-muted mb-1.5 sm:mb-2 block">I'm interested in</label>
                    <div class="flex flex-wrap gap-2" id="contactServices">
                        @foreach([['🚀','Landing Page'],['🏢','Corporate Website'],['🛒','E-Commerce'],['⚙️','System Development']] as [$icon, $label])
                        <button type="button" class="contact-pill flex items-center gap-1.5 sm:gap-2 px-3 sm:px-4 py-2 sm:py-3 rounded-full border text-xs font-medium transition-all duration-200"
                            style="border-color:rgba(255,255,255,0.07); color:#6b7280; background:#0d1117;">
                            <span>{{ $icon }}</span><span>{{ $label }}</span>
                        </button>
                        @endforeach
                    </div>
                </div>

                {{-- Message --}}
                <div>
                    <label class="text-xs font-semibold tracking-widest uppercase text-muted mb-1.5 sm:mb-2 block">
                        Message <span class="text-white/30 normal-case tracking-normal font-normal">(optional)</span>
                    </label>
                    <textarea id="contactMessage" placeholder="Tell us about your project, timeline, or any questions you have..." rows="4"
                        class="w-full bg-bg border border-white/[0.07] focus:border-accent rounded-xl px-4 sm:px-5 py-3 sm:py-3.5 text-[#e8eaf0] text-sm outline-none placeholder-muted transition-colors duration-200 resize-none"></textarea>
                </div>

                {{-- Submit --}}
                <button type="button" onclick="submitContact()"
                    class="w-full bg-accent hover:bg-[#3a7bef] text-white py-3.5 sm:py-4 rounded-xl font-semibold text-sm transition-all duration-200 hover:-translate-y-0.5 hover:shadow-[0_8px_30px_rgba(79,142,255,0.3)]">
                    Send Message →
                </button>
                <p id="contact-msg" style="display:none; font-size:.875rem; text-align:center;"></p>
            </div>
        </div>
    </div>
</section>


{{-- FAQ --}}
<section class="bg-bg-2 px-4 sm:px-8 lg:px-14 py-14 sm:py-20 lg:py-24 border-b border-white/[0.07]">
    <div class="reveal mb-10 sm:mb-16">
        <div class="flex items-center gap-2.5 text-xs font-semibold tracking-[0.15em] uppercase text-accent mb-4 sm:mb-5 before:content-[''] before:w-5 before:h-px before:bg-accent">
            &nbsp;FAQ
        </div>
        <h2 class="font-syne font-extrabold leading-tight tracking-tight" style="font-size: clamp(1.7rem,4vw,3.2rem);">
            Questions we get<br>all the time
        </h2>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-0.5" id="faqList">
        @php
        $faqs = [
            ['q' => 'How long does a project take?',              'a' => 'It depends on the scope. A landing page takes 3–5 days, a corporate website 7–14 days, and a custom system can range from 2–8 weeks. We always give you a clear timeline before starting.'],
            ['q' => 'Do you work with small businesses?',         'a' => 'Absolutely. We work with businesses of all sizes, from solo founders launching their first product to established companies looking to scale. Our packages are flexible to fit different budgets.'],
            ['q' => 'Can I request revisions?',                   'a' => 'Yes! Every project includes revision rounds. We work collaboratively with you throughout the process to make sure the final output matches your vision.'],
            ['q' => 'Do you offer ongoing support after launch?', 'a' => 'Yes. We offer post-launch support for all our web and system projects. Whether it\'s a quick fix or a new feature, we\'re available to help after delivery.'],
            ['q' => 'What information do I need to get started?', 'a' => 'Just reach out! You don\'t need a fully detailed brief to get started. We\'ll ask the right questions during our initial conversation to understand your goals.'],
            ['q' => 'How does payment work?',                     'a' => 'We typically work with a 50% deposit upfront and 50% upon delivery. For larger projects, we can arrange milestone-based payments. We\'ll discuss this clearly before any work begins.'],
        ];
        @endphp
        @foreach($faqs as $i => $faq)
        <div class="reveal faq-item bg-surface border border-white/[0.07]
            {{ $i === 0 ? 'rounded-tl-2xl' : '' }}
            {{ $i === 1 ? 'rounded-tr-2xl sm:rounded-none' : '' }}
            {{ $i === 2 ? 'rounded-bl-2xl sm:rounded-none' : '' }}
            {{ $i === count($faqs)-2 ? 'sm:rounded-bl-2xl' : '' }}
            {{ $i === count($faqs)-1 ? 'rounded-br-2xl' : '' }}
            {{ $i === 1 ? 'sm:rounded-tr-2xl' : '' }}
            p-5 sm:p-8 cursor-pointer hover:border-accent/25 transition-all duration-300"
            onclick="toggleFaq(this)">
            <div class="flex items-start justify-between gap-3 sm:gap-4">
                <h3 class="font-syne font-bold text-sm sm:text-base tracking-tight">{{ $faq['q'] }}</h3>
                <span class="faq-icon text-accent text-lg flex-shrink-0 transition-transform duration-300 leading-none mt-0.5">+</span>
            </div>
            <p class="faq-answer text-muted text-xs sm:text-sm leading-relaxed mt-0">{{ $faq['a'] }}</p>
        </div>
        @endforeach
    </div>
</section>

@endsection


@push('scripts')
<style>
    .reveal { opacity:0; transform:translateY(30px); transition:opacity .6s ease,transform .6s ease; }
    .reveal.show { opacity:1; transform:translateY(0); }
    .faq-answer { max-height:0; overflow:hidden; margin-top:0; transition:max-height .3s ease, margin .3s ease; }
    .faq-answer.open { max-height:300px; margin-top:12px; }
    .faq-icon { display:inline-block; transition:transform .3s ease; }
    .faq-icon.open { transform:rotate(45deg); }
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

    const contactSelected = new Set();
    document.querySelectorAll('.contact-pill').forEach(btn => {
        btn.addEventListener('click', function() {
            const label=this.querySelectorAll('span')[1].textContent.trim();
            if(contactSelected.has(label)) { contactSelected.delete(label); this.style.borderColor='rgba(255,255,255,0.07)'; this.style.color='#6b7280'; this.style.background='#0d1117'; }
            else { contactSelected.add(label); this.style.borderColor='#4f8eff'; this.style.color='#ffffff'; this.style.background='rgba(79,142,255,0.1)'; }
        });
    });

    function submitContact() {
        const name=document.getElementById('contactName'), email=document.getElementById('contactEmail'), msg=document.getElementById('contact-msg');
        if(!name.value.trim()) { name.style.borderColor='#ef4444'; msg.style.display='block'; msg.style.color='#ef4444'; msg.textContent='Please enter your name.'; return; }
        if(!email.value||!email.value.includes('@')) { email.style.borderColor='#ef4444'; msg.style.display='block'; msg.style.color='#ef4444'; msg.textContent='Please enter a valid email address.'; return; }
        if(contactSelected.size===0) { msg.style.display='block'; msg.style.color='#f59e0b'; msg.textContent='Please select at least one service you\'re interested in.'; return; }
        name.style.borderColor='#00d4aa'; email.style.borderColor='#00d4aa';
        msg.style.display='block'; msg.style.color='#00d4aa';
        msg.textContent=`✓ Message sent! We'll reach out about ${[...contactSelected].join(', ')} within 24 hours.`;
    }

    function toggleFaq(el) {
        const answer=el.querySelector('.faq-answer'), icon=el.querySelector('.faq-icon'), isOpen=answer.classList.contains('open');
        document.querySelectorAll('.faq-item').forEach(item => { item.querySelector('.faq-answer').classList.remove('open'); item.querySelector('.faq-icon').classList.remove('open'); });
        if(!isOpen) { answer.classList.add('open'); icon.classList.add('open'); }
    }
</script>
@endpush