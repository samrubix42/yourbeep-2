<div x-data="{ 
    toastOpen: false,
    toastUser: { name: '', city: '', time_ago: '' },
    purchasersList: @js($this->purchasers)
}" x-init="
    if (purchasersList && purchasersList.length > 0) {
        let index = Math.floor(Math.random() * purchasersList.length);
        toastUser = purchasersList[index];
        setTimeout(() => {
            toastOpen = true;
            setInterval(() => {
                toastOpen = false;
                setTimeout(() => {
                    index = (index + 1 + Math.floor(Math.random() * 5)) % purchasersList.length;
                    toastUser = purchasersList[index];
                    toastOpen = true;
                }, 600);
            }, 8500);
        }, 3000);
    }
" class="w-full bg-slate-50 text-slate-800 min-h-screen flex flex-col justify-between relative">

    <!-- Reusable Header Livewire Component -->
    <livewire:public.header />

    <!-- HERO SECTION (Premium Light Theme with Glow Lights and Grid Mesh) -->
    <section class="w-full bg-white border-b border-slate-200/50 py-16 sm:py-24 relative overflow-hidden flex-1">
        <!-- Dotted grid mesh pattern -->
        <div class="absolute inset-0 bg-[radial-gradient(#cbd5e1_1px,transparent_1px)] [background-size:24px_24px] opacity-25 pointer-events-none"></div>

        <!-- Glow highlights -->
        <div class="absolute top-0 right-1/4 w-[450px] h-[450px] bg-teal-500/[0.06] rounded-full blur-[120px] pointer-events-none"></div>
        <div class="absolute bottom-0 left-1/3 w-[400px] h-[400px] bg-rose-500/[0.05] rounded-full blur-[100px] pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <!-- Hero Content Header -->
            <div class="text-center max-w-4xl mx-auto space-y-6 mb-16">
                <!-- Premium Pill Badge -->
                <div class="inline-flex items-center gap-2.5 px-4 py-1.5 bg-rose-500/5 border border-rose-500/20 rounded-full text-rose-700 text-xs font-semibold uppercase tracking-wider shadow-xs backdrop-blur-xs">
                    <span class="flex h-2 w-2 relative">
                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-rose-400 opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-2 w-2 bg-rose-600"></span>
                    </span>
                    <span>Exclusive Early Member Access</span>
                </div>

                <!-- Trust Badge Above the Fold -->
                <div class="flex flex-wrap items-center justify-center gap-2 mt-2">
                    <div class="flex text-amber-500 text-sm">
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                    </div>
                    <span class="text-slate-700 text-xs font-bold">4.9/5 Rating</span>
                    <span class="text-slate-300">|</span>
                    <span class="text-slate-600 text-xs font-medium">Join 500+ Early Access Members Across 5 Countries</span>
                </div>

                <!-- Main Hero Headline -->
                <h1 class="text-3xl sm:text-4xl lg:text-5xl font-black tracking-tight text-slate-900 leading-[1.15] font-sans">
                    Running at 200% Effort, and yet…<br>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-rose-600 to-amber-500 font-extrabold block mt-2">
                        Still Falling Short of That 100% Life?
                    </span>
                </h1>

                <!-- Bold Highlight Statement -->
                <div class="inline-block bg-teal-500/5 border-l-4 border-teal-500 px-6 py-4 rounded-r-xl max-w-2xl text-left shadow-2xs">
                    <span class="block text-slate-650 text-base sm:text-lg font-light leading-relaxed">Don't Question Your Ambition or Effort.</span>
                    <span class="block text-slate-900 text-lg sm:text-xl font-bold">Question Your Hidden Behaviour Blockers.</span>
                </div>

                <!-- Sub-headline -->
                <div class="max-w-3xl mx-auto mt-6 p-6 rounded-2xl bg-amber-500/[0.03] border border-amber-500/20 shadow-xs backdrop-blur-xs relative overflow-hidden text-center">
                    <!-- Subtle glow effect behind -->
                    <div class="absolute -top-12 -left-12 w-24 h-24 bg-amber-500/10 rounded-full blur-xl pointer-events-none"></div>
                    <div class="absolute -bottom-12 -right-12 w-24 h-24 bg-teal-500/10 rounded-full blur-xl pointer-events-none"></div>
                    
                    <p class="text-base sm:text-lg text-slate-700 leading-relaxed font-medium font-sans relative z-10">
                        <span class="bg-gradient-to-r from-amber-600 to-rose-600 bg-clip-text text-transparent font-extrabold">Break Free</span> from <span class="text-slate-900 font-bold underline decoration-amber-500/60 decoration-wavy decoration-2">Hidden Burnout &amp; Overthinking Loops</span> in Just <span class="bg-teal-100/80 text-teal-800 px-2 py-0.5 rounded font-bold">10 Minutes a Day</span>Without Meditations, Generic Affirmations, or 21-Day Challenges.
                    </p>
                </div>
            </div>

            <!-- Form Section with Grid Split -->
            <div id="registration-section" class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-start pt-6">
                
                <!-- Left Side: Image and BSI Content below it -->
                <div class="lg:col-span-7 space-y-8">

                    <!-- Image Slider Card -->
                    <div x-data="{ 
                        activeSlide: 0,
                        totalSlides: 3,
                        slideInterval: null,
                        touchStartX: 0,
                        touchEndX: 0,
                        next() {
                            this.activeSlide = (this.activeSlide + 1) % this.totalSlides;
                        },
                        prev() {
                            this.activeSlide = (this.activeSlide - 1 + this.totalSlides) % this.totalSlides;
                        },
                        startAutoSlide() {
                            this.stopAutoSlide();
                            this.slideInterval = setInterval(() => {
                                this.next();
                            }, 5000);
                        },
                        stopAutoSlide() {
                            if (this.slideInterval) clearInterval(this.slideInterval);
                        },
                        handleTouchStart(e) {
                            this.stopAutoSlide();
                            this.touchStartX = e.touches[0].clientX;
                            this.touchEndX = this.touchStartX;
                        },
                        handleTouchMove(e) {
                            this.touchEndX = e.touches[0].clientX;
                        },
                        handleTouchEnd(e) {
                            const threshold = 50;
                            if (this.touchStartX - this.touchEndX > threshold) {
                                this.next();
                            } else if (this.touchEndX - this.touchStartX > threshold) {
                                this.prev();
                            }
                            this.startAutoSlide();
                        }
                    }" 
                    x-init="startAutoSlide()"
                    @mouseenter="stopAutoSlide()"
                    @mouseleave="startAutoSlide()"
                    @touchstart="handleTouchStart($event)"
                    @touchmove="handleTouchMove($event)"
                    @touchend="handleTouchEnd($event)"
                    @touchcancel="startAutoSlide()"
                    wire:ignore
                    class="relative group rounded-3xl overflow-hidden transition-transform duration-300 hover:scale-[1.01] flex flex-col cursor-grab active:cursor-grabbing touch-pan-y">
                        
                        <!-- Image Container with Transition effects -->
                        <div class="relative w-full aspect-[1.5/1] rounded-3xl overflow-hidden">
                            <div class="flex w-full h-full transition-transform duration-500 ease-out"
                                 :style="'transform: translateX(-' + (activeSlide * 100) + '%)'">
                                @foreach ([
                                    asset('Mobile graphic - slide 1-1.png'),
                                    asset('Mobile graphic - slide 2-1.png'),
                                    asset('Mobile graphic - slide 3-1.png')
                                ] as $idx => $img)
                                    <div class="w-full h-full flex-shrink-0">
                                        <img src="{{ $img }}" alt="Behavioral Signals Masterclass Slide" class="w-full h-full object-contain select-none pointer-events-none">
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <!-- Indicator Dots inside the card -->
                        <div class="flex justify-center gap-2 mt-4 mb-2">
                            @foreach ([0, 1, 2] as $idx)
                                <button @click="activeSlide = {{ $idx }}" 
                                        :class="activeSlide === {{ $idx }} ? 'w-6 bg-teal-500' : 'w-2 bg-slate-300 hover:bg-slate-400'"
                                        class="h-2 rounded-full transition-all duration-300 cursor-pointer"
                                        aria-label="Go to slide {{ $idx + 1 }}"></button>
                            @endforeach
                        </div>
                    </div>

                    <!-- BSI Description Box below the image -->
                    <div class="bg-gradient-to-br  from-slate-50 to-slate-100/70 border border-slate-200/80 rounded-2xl p-6 sm:p-7 space-y-4 shadow-sm relative">
                        <div class="absolute -top-3 left-6 px-3.5 py-0.5 bg-white border border-slate-200 rounded-full text-[10px] font-extrabold text-slate-500 uppercase tracking-widest shadow-2xs">
                            About YourBeep Framework
                        </div>

                        <div class="flex items-center gap-3 text-teal-600">
                            <span class="flex items-center justify-center w-8 h-8 rounded-lg bg-teal-50 text-teal-650 text-base"><i class="ri-pulse-line"></i></span>
                            <span class="text-xs font-bold uppercase tracking-wider text-teal-800">Behavioural 
Signal Intelligence (BSI)</span>
                        </div>

                        <p class="text-sm text-slate-600 leading-relaxed font-light font-sans">
                            <strong>Yourbeep</strong> is the first gamified wellbeing platform  built around an exclusive <strong class="text-teal-700 font-semibold">Behavioural Signal Intelligence (BSI)</strong> framework that integrates your Emotional, Somatic, and Pattern Resonance into one powerful personal growth metric: your <strong class="text-teal-700 font-bold">Resonance Quotient (RQ)</strong>.
                        </p>
                    </div>
                </div>

                <!-- Right Side: Livewire Form -->
                <div class="lg:col-span-5 relative w-full sticky top-24">
                    <div class="absolute inset-0 bg-gradient-to-br from-teal-500 to-emerald-600 rounded-3xl blur-[20px] opacity-10 animate-pulse-slow"></div>

                    <div class="relative bg-white border border-slate-200/85 rounded-3xl p-6 sm:p-8 shadow-2xl backdrop-blur-sm">
                        @if ($this->success)
                            <!-- Success State -->
                            <div class="text-center py-6 space-y-6">
                                <div class="w-16 h-16 rounded-full bg-emerald-50 border border-emerald-100 flex items-center justify-center mx-auto text-emerald-650 shadow-inner">
                                    <i class="ri-checkbox-circle-fill text-4xl"></i>
                                </div>
                                <div class="space-y-2">
                                    <h3 class="text-2xl font-bold text-slate-900 tracking-tight">Access Secured!</h3>
                                    <p class="text-slate-600 text-sm">
                                        Thank you for showing your interest here, <strong class="text-slate-850">{{ $this->name }}</strong>. We will contact you shortly.
                                    </p>
                                </div>

                                <div class="bg-slate-50 p-5 rounded-2xl border border-slate-200 text-left space-y-2 shadow-xs">
                                    <span class="text-xs font-bold text-teal-700 uppercase tracking-widest block">🚀 DETAILS CONFIRMED</span>
                                    <p class="text-xs text-slate-550 leading-relaxed">
                                        We have registered your email <strong>{{ $this->email }}</strong>. Thank you for showing your interest here, we will contact you shortly!
                                    </p>
                                </div>

                                <button type="button" wire:click="resetForm" class="text-xs text-slate-500 hover:text-slate-700 underline underline-offset-4 cursor-pointer">
                                    Submit another user
                                </button>
                            </div>
                        @else
                            <!-- Active Form State -->
                            <div class="space-y-6">
                                <div class="border-b border-slate-100 pb-4 space-y-3">
                                    <div class="flex items-center justify-between">
                                        <span class="inline-flex items-center gap-1 px-3 py-1 bg-rose-50 border border-rose-100 rounded-full text-[10px] font-extrabold text-rose-700 uppercase tracking-wide">
                                            🎫 Limited Spots Open
                                        </span>
                                        <span class="flex h-2 w-2 relative">
                                            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
                                            <span class="relative inline-flex rounded-full h-2 w-2 bg-emerald-500"></span>
                                        </span>
                                    </div>
                                    <h3 class="text-2xl font-black text-slate-900 tracking-tight leading-tight">
                                        Start Your Journey
                                    </h3>
                                    
                                    <!-- Offer Box -->
                                    <div class="bg-amber-500/5 border border-amber-500/25 rounded-2xl p-3.5 space-y-2 text-left">
                                        <div class="flex items-center justify-between text-xs">
                                            <span class="font-bold text-slate-800">Special Launch Offer:</span>
                                            <span class="font-bold text-slate-950"><span class="line-through text-slate-400 text-[10px] mr-1">₹499</span> ₹299 <span class="text-rose-600 text-[10px] font-extrabold">(Save 40% Today)</span></span>
                                        </div>
                                        <div class="border-t border-slate-200/50 my-1.5"></div>
                                        <p class="text-[11px] text-slate-600 leading-relaxed font-light">
                                            <strong class="font-bold text-slate-800">Includes:</strong> 60-Min BSI Masterclass + Guided Exercises + Lifetime Access
                                        </p>
                                    </div>
                                </div>

                                <form wire:submit.prevent="submit" class="space-y-5">
                                    <!-- Full Name -->
                                    <div class="space-y-1.5">
                                        <label for="name" class="block text-[10px] font-bold text-slate-500 uppercase tracking-widest">Full Name</label>
                                        <div class="relative rounded-xl shadow-xs">
                                            <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-slate-400">
                                                <i class="ri-user-line text-sm"></i>
                                            </div>
                                            <input type="text" id="name" wire:model="name" placeholder="Rahul Sharma" class="w-full bg-slate-50/60 border border-slate-200 rounded-xl py-2.5 pl-10.5 pr-4 text-slate-800 placeholder-slate-400 focus:outline-none focus:border-teal-500 focus:ring-1 focus:ring-teal-500 transition text-sm">
                                        </div>
                                        @error('name') <span class="text-rose-600 text-xs mt-1 block font-light"><i class="ri-error-warning-line"></i> {{ $message }}</span> @enderror
                                    </div>

                                    <!-- Email Address -->
                                    <div class="space-y-1.5">
                                        <label for="email" class="block text-[10px] font-bold text-slate-500 uppercase tracking-widest">Email Address</label>
                                        <div class="relative rounded-xl shadow-xs">
                                            <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-slate-400">
                                                <i class="ri-mail-line text-sm"></i>
                                            </div>
                                            <input type="email" id="email" wire:model="email" placeholder="rahul@gmail.com" class="w-full bg-slate-50/60 border border-slate-200 rounded-xl py-2.5 pl-10.5 pr-4 text-slate-800 placeholder-slate-400 focus:outline-none focus:border-teal-500 focus:ring-1 focus:ring-teal-500 transition text-sm">
                                        </div>
                                        @error('email') <span class="text-rose-600 text-xs mt-1 block font-light"><i class="ri-error-warning-line"></i> {{ $message }}</span> @enderror
                                    </div>

                                    <!-- WhatsApp Phone Number -->
                                    <div class="space-y-1.5">
                                        <label for="phone" class="block text-[10px] font-bold text-slate-500 uppercase tracking-widest">WhatsApp Mobile Number</label>
                                        <div class="relative rounded-xl shadow-xs">
                                            <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-slate-400">
                                                <i class="ri-whatsapp-line text-sm"></i>
                                            </div>
                                            <input type="tel" id="phone" wire:model="phone" placeholder="9823456789" class="w-full bg-slate-50/60 border border-slate-200 rounded-xl py-2.5 pl-10.5 pr-4 text-slate-800 placeholder-slate-400 focus:outline-none focus:border-teal-500 focus:ring-1 focus:ring-teal-500 transition text-sm">
                                        </div>
                                        @error('phone') <span class="text-rose-600 text-xs mt-1 block font-light"><i class="ri-error-warning-line"></i> {{ $message }}</span> @enderror
                                    </div>

                                    <!-- Submit Button -->
                                    <button type="submit" wire:loading.attr="disabled" wire:target="submit" class="w-full mt-2 bg-gradient-to-r from-teal-600 to-emerald-600 hover:from-teal-500 hover:to-emerald-500 text-white font-bold py-3 px-6 rounded-xl shadow-lg shadow-teal-500/20 hover:shadow-teal-500/35 transition transform duration-150 active:scale-95 text-center text-xs uppercase tracking-wider cursor-pointer disabled:opacity-75 disabled:cursor-not-allowed flex items-center justify-center gap-2">
                                        <span>Start my BSI Journey<i class="ri-arrow-right-line ml-2"></i></span>
                                        <svg wire:loading wire:target="submit" class="animate-spin h-4 w-4 text-white" fill="none" viewBox="0 0 24 24">
                                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                                        </svg>
                                    </button>
                                </form>

                                <div class="border-t border-slate-100 pt-4 text-center">
                                    <span class="text-[10px] text-slate-450 block font-light"><i class="ri-lock-fill text-teal-600 mr-1"></i> Verified SSL Secure Connection</span>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section class="w-full bg-slate-950 py-16 relative overflow-hidden border-y border-slate-900">
        <!-- Dotted grid mesh pattern for dark mode -->
        <div class="absolute inset-0 bg-[radial-gradient(#334155_1px,transparent_1px)] [background-size:24px_24px] opacity-25 pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <!-- 2x2 Grid on Mobile, 4 columns on desktop -->
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-y-10 gap-x-6 sm:gap-8">
                <!-- Point 1 -->
                <div class="flex flex-col items-center text-center space-y-3">
                    <div class="w-10 h-10 sm:w-12 sm:h-12 rounded-full bg-teal-950/60 border border-teal-900/20 text-teal-400 flex items-center justify-center text-xl sm:text-2xl shadow-inner">
                        <i class="ri-global-line"></i>
                    </div>
                    <div class="space-y-1 max-w-[160px] sm:max-w-none">
                        <span class="block text-sm sm:text-xl font-extrabold text-white leading-tight">5 Countries</span>
                        <span class="block text-[11px] sm:text-xs text-slate-400 font-light leading-relaxed">Early Access members across 5 countries</span>
                    </div>
                </div>

                <!-- Point 2 -->
                <div class="flex flex-col items-center text-center space-y-3">
                    <div class="w-10 h-10 sm:w-12 sm:h-12 rounded-full bg-rose-950/60 border border-rose-900/20 text-rose-400 flex items-center justify-center text-xl sm:text-2xl shadow-inner">
                        <i class="ri-brain-line"></i>
                    </div>
                    <div class="space-y-1 max-w-[160px] sm:max-w-none">
                        <span class="block text-sm sm:text-xl font-extrabold text-white leading-tight">BSI™ Framework</span>
                        <span class="block text-[11px] sm:text-xs text-slate-400 font-light leading-relaxed">Unique Behavioural Intelligence framework</span>
                    </div>
                </div>

                <!-- Point 3 -->
                <div class="flex flex-col items-center text-center space-y-3">
                    <div class="w-10 h-10 sm:w-12 sm:h-12 rounded-full bg-amber-950/60 border border-amber-900/20 text-amber-400 flex items-center justify-center text-xl sm:text-2xl shadow-inner">
                        <i class="ri-gamepad-line"></i>
                    </div>
                    <div class="space-y-1 max-w-[160px] sm:max-w-none">
                        <span class="block text-sm sm:text-xl font-extrabold text-white leading-tight">45+ Activities</span>
                        <span class="block text-[11px] sm:text-xs text-slate-400 font-light leading-relaxed">45+ gamified activities</span>
                    </div>
                </div>

                <!-- Point 4 -->
                <div class="flex flex-col items-center text-center space-y-3">
                    <div class="w-10 h-10 sm:w-12 sm:h-12 rounded-full bg-blue-950/60 border border-blue-900/20 text-blue-400 flex items-center justify-center text-xl sm:text-2xl shadow-inner">
                        <i class="ri-history-line"></i>
                    </div>
                    <div class="space-y-1 max-w-[160px] sm:max-w-none">
                        <span class="block text-sm sm:text-xl font-extrabold text-white leading-tight">15+ Years</span>
                        <span class="block text-[11px] sm:text-xs text-slate-400 font-light leading-relaxed">15+ years’ experience in transformation</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- THE PROBLEM SECTION: Why Meditation Apps & Generic Self-Help Fail You -->
    <section class="w-full bg-slate-50 py-20 sm:py-24 relative overflow-hidden border-b border-slate-200/50">
        <div class="absolute inset-0 bg-[radial-gradient(#cbd5e1_1px,transparent_1px)] [background-size:24px_24px] opacity-20 pointer-events-none"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <!-- Section Header -->
            <div class="text-center max-w-3xl mx-auto space-y-4 mb-16">
                <span class="inline-flex items-center gap-1.5 px-3 py-1 bg-rose-50 border border-rose-100 rounded-full text-[10px] font-extrabold text-rose-700 uppercase tracking-wide">
                    ⚠️ The Self-Help Paradox
                </span>
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black text-slate-900 tracking-tight leading-tight font-sans mt-3">
                    Why Meditation Apps & Generic Self-Help Fail You
                </h2>
                <p class="text-sm sm:text-base text-slate-500 font-light font-sans max-w-2xl mx-auto">
                    Most self-help methods try to treat the symptoms of stress rather than decoding the root cause. Here is why they don't stick and how BSI™ changes the game.
                </p>
            </div>

            <!-- Side-by-Side Comparison Grid -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12 max-w-5xl mx-auto">
                <!-- Left: Traditional Wellness Apps -->
                <div class="bg-white border border-slate-200/80 rounded-3xl p-8 space-y-6 shadow-xs relative overflow-hidden">
                    <div class="absolute top-0 right-0 w-24 h-24 bg-rose-500/[0.01] rounded-full blur-xl pointer-events-none"></div>
                    <div class="flex items-center gap-3">
                        <span class="flex items-center justify-center w-10 h-10 rounded-xl bg-rose-50 text-rose-600 text-lg font-bold">🙅</span>
                        <h3 class="text-lg font-bold text-slate-900 font-sans">Traditional Wellness Apps</h3>
                    </div>
                    
                    <ul class="space-y-6">
                        <li class="flex gap-3">
                            <span class="w-5 h-5 rounded-full bg-rose-50 border border-rose-100 flex items-center justify-center shrink-0 mt-0.5"><i class="ri-close-line text-rose-500 text-xs"></i></span>
                            <div class="space-y-1">
                                <h4 class="text-sm font-bold text-slate-800">Temporary Calm Through Deep Breathing</h4>
                                <p class="text-xs text-slate-500 leading-relaxed font-light">Deep breathing and ambient sounds only soothe you in the moment. When the session ends, the underlying triggers remain untouched.</p>
                            </div>
                        </li>
                        <li class="flex gap-3">
                            <span class="w-5 h-5 rounded-full bg-rose-50 border border-rose-100 flex items-center justify-center shrink-0 mt-0.5"><i class="ri-close-line text-rose-500 text-xs"></i></span>
                            <div class="space-y-1">
                                <h4 class="text-sm font-bold text-slate-800">Requires 30–60 Min Daily Meditation</h4>
                                <p class="text-xs text-slate-500 leading-relaxed font-light">Demands a large time commitment that is highly impractical for busy professionals, leading to guilt and abandonment when skipped.</p>
                            </div>
                        </li>
                        <li class="flex gap-3">
                            <span class="w-5 h-5 rounded-full bg-rose-50 border border-rose-100 flex items-center justify-center shrink-0 mt-0.5"><i class="ri-close-line text-rose-500 text-xs"></i></span>
                            <div class="space-y-1">
                                <h4 class="text-sm font-bold text-slate-800">Abstract Feeling with No Measurement</h4>
                                <p class="text-xs text-slate-500 leading-relaxed font-light">Leaves you with no objective way to measure progress. You either "feel better" or don't, making it impossible to track growth over time.</p>
                            </div>
                        </li>
                    </ul>
                </div>

                <!-- Right: The BSI™ Masterclass Method -->
                <div class="bg-white border-2 border-teal-500/20 rounded-3xl p-8 space-y-6 shadow-md relative overflow-hidden ring-1 ring-teal-500/5">
                    <div class="absolute top-0 right-0 w-24 h-24 bg-teal-500/[0.03] rounded-full blur-xl pointer-events-none"></div>
                    <div class="flex items-center gap-3">
                        <span class="flex items-center justify-center w-10 h-10 rounded-xl bg-teal-50 text-teal-655 text-lg font-bold">✨</span>
                        <h3 class="text-lg font-bold text-slate-900 font-sans">The BSI™ Masterclass Method</h3>
                    </div>
                    
                    <ul class="space-y-6">
                        <li class="flex gap-3">
                            <span class="w-5 h-5 rounded-full bg-teal-50 border border-teal-100 flex items-center justify-center shrink-0 mt-0.5"><i class="ri-check-line text-teal-655 text-xs font-bold"></i></span>
                            <div class="space-y-1">
                                <h4 class="text-sm font-bold text-slate-800">Identifies Why You React or Feel Stuck</h4>
                                <p class="text-xs text-slate-500 leading-relaxed font-light">Pinpoints the specific behavioral loops causing overthinking, resistance, or burnout, helping you reset them permanently.</p>
                            </div>
                        </li>
                        <li class="flex gap-3">
                            <span class="w-5 h-5 rounded-full bg-teal-50 border border-teal-100 flex items-center justify-center shrink-0 mt-0.5"><i class="ri-check-line text-teal-655 text-xs font-bold"></i></span>
                            <div class="space-y-1">
                                <h4 class="text-sm font-bold text-slate-800">Designed for Busy Schedules (10 Mins/Day)</h4>
                                <p class="text-xs text-slate-500 leading-relaxed font-light">Gamified exercises that take just 10 minutes, fitting seamlessly into your day whenever and wherever you are.</p>
                            </div>
                        </li>
                        <li class="flex gap-3">
                            <span class="w-5 h-5 rounded-full bg-teal-50 border border-teal-100 flex items-center justify-center shrink-0 mt-0.5"><i class="ri-check-line text-teal-655 text-xs font-bold"></i></span>
                            <div class="space-y-1">
                                <h4 class="text-sm font-bold text-slate-800">Trackable Resonance Quotient (RQ) Score</h4>
                                <p class="text-xs text-slate-500 leading-relaxed font-light">Calculates a real-time behavioral intelligence metric across Somatic, Emotional, and Pattern Resonance so progress is fully visible.</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- WHY YOURBEEP APPROACH SECTION -->
    <section class="w-full bg-white py-20 sm:py-24 relative overflow-hidden">
        <!-- Subtle background details -->
        <div class="absolute inset-0 bg-[radial-gradient(#e2e8f0_1px,transparent_1px)] [background-size:32px_32px] opacity-30 pointer-events-none"></div>
        <div class="absolute top-1/2 left-1/4 w-[350px] h-[350px] bg-teal-500/[0.04] rounded-full blur-[100px] pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <!-- Section Header -->
            <div class="text-center max-w-3xl mx-auto space-y-4 mb-16">
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black text-slate-900 tracking-tight leading-tight font-sans">
                    Why should you be interested in Yourbeep’s approach to behavioural wellbeing?
                </h2>
            </div>

            <!-- Swipe Indicator (Mobile only) -->
            <div class="lg:hidden text-center mb-6">
                <span class="text-[11px] text-slate-400 inline-flex items-center gap-1.5 font-light bg-slate-50 border border-slate-200/60 rounded-full px-3 py-1 shadow-xs">
                    <span>Swipe to explore our approach</span> <i class="ri-arrow-right-line animate-pulse-slow"></i>
                </span>
            </div>

            <!-- Features Grid (3 Columns) -->
            <div class="flex overflow-x-auto lg:grid lg:grid-cols-3 gap-6 lg:gap-8 snap-x snap-mandatory pb-6 lg:pb-0 scrollbar-hide -mx-4 px-4 sm:-mx-6 sm:px-6 lg:mx-0 lg:px-0">
                <!-- Point 1 -->
                <div class="snap-center shrink-0 w-[85vw] sm:w-[350px] lg:w-auto bg-slate-50/50 border border-slate-200 rounded-3xl p-8 space-y-6 transition duration-300 hover:shadow-xl hover:bg-white lg:hover:scale-[1.02] flex flex-col justify-between">
                    <div class="space-y-6">
                        <div class="w-14 h-14 rounded-2xl bg-teal-50 text-teal-650 flex items-center justify-center text-3xl shadow-xs">
                            <i class="ri-flask-line"></i>
                        </div>
                        <div class="space-y-3">
                            <h3 class="text-xl font-bold text-slate-900 font-sans">Science in, jargon out</h3>
                            <p class="text-sm text-slate-600 leading-relaxed font-light font-sans">
                                You want tools grounded in real behavioural science  not crystals, not affirmations, not a 21-day challenge that resets to zero on day 22. You want to be better at life, and you want a comprehensive method to hold up under scrutiny.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Point 2 -->
                <div class="snap-center shrink-0 w-[85vw] sm:w-[350px] lg:w-auto bg-slate-50/50 border border-slate-200 rounded-3xl p-8 space-y-6 transition duration-300 hover:shadow-xl hover:bg-white lg:hover:scale-[1.02] flex flex-col justify-between">
                    <div class="space-y-6">
                        <div class="w-14 h-14 rounded-2xl bg-amber-50 text-amber-600 flex items-center justify-center text-3xl shadow-xs">
                            <i class="ri-line-chart-line"></i>
                        </div>
                        <div class="space-y-3">
                            <h3 class="text-xl font-bold text-slate-900 font-sans">Proof that the process is working</h3>
                            <p class="text-sm text-slate-600 leading-relaxed font-light font-sans">
                                No abstract breakthroughs. There’s still the "trust the process", but with evidence to show for it. Yourbeep’s methodology gives you a real-time “Resonance Quotient”  a personal growth metric that moves as you grow, so progress is something you measure, not just something you feel.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Point 3 -->
                <div class="snap-center shrink-0 w-[85vw] sm:w-[350px] lg:w-auto bg-slate-50/50 border border-slate-200 rounded-3xl p-8 space-y-6 transition duration-300 hover:shadow-xl hover:bg-white lg:hover:scale-[1.02] flex flex-col justify-between">
                    <div class="space-y-6">
                        <div class="w-14 h-14 rounded-2xl bg-rose-50 text-rose-600 flex items-center justify-center text-3xl shadow-xs">
                            <i class="ri-time-line"></i>
                        </div>
                        <div class="space-y-3">
                            <h3 class="text-xl font-bold text-slate-900 font-sans">Built for a full life, not a free one</h3>
                            <p class="text-sm text-slate-600 leading-relaxed font-light font-sans">
                                Gamified activities designed for people juggling work, family, ambition, and everything in between. No meditation den required. No hour-long sessions. No guilt when life gets in the way. Just 10 minutes  wherever you are, whenever you can.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- WHAT YOU'LL DISCOVER SECTION (Premium dark background with dotted mesh) -->
    <section class="w-full bg-slate-950 py-20 sm:py-28 relative overflow-hidden border-t border-slate-900">
        <!-- Subtle background details -->
        <div class="absolute inset-0 bg-[radial-gradient(#334155_1px,transparent_1px)] [background-size:24px_24px] opacity-25 pointer-events-none"></div>
        <div class="absolute bottom-0 right-1/4 w-[400px] h-[400px] bg-rose-500/[0.03] rounded-full blur-[100px] pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <!-- Section Header -->
            <div class="text-center max-w-3xl mx-auto space-y-4 mb-16">
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black text-white tracking-tight leading-tight font-sans">
                    What You'll Discover in the BSI Masterclass
                </h2>
                <p class="text-sm sm:text-base text-slate-400 font-light font-sans max-w-2xl mx-auto">
                    Your first step into the BSI methodology. In under 60 minutes, walk away with tools you'll use even before the full course begins.
                </p>
            </div>

            <!-- Swipe Indicator (Mobile only) -->
            <div class="md:hidden text-center mb-6">
                <span class="text-[11px] text-slate-400 inline-flex items-center gap-1.5 font-light bg-slate-900/60 border border-slate-800/80 rounded-full px-3 py-1 shadow-xs">
                    <span>Swipe to discover more</span> <i class="ri-arrow-right-line animate-pulse-slow text-rose-400"></i>
                </span>
            </div>

            <!-- Discovery Grid -->
            <div class="flex overflow-x-auto md:grid md:grid-cols-6 lg:grid-cols-12 gap-6 md:gap-8 snap-x snap-mandatory pb-6 md:pb-0 scrollbar-hide -mx-4 px-4 sm:-mx-6 sm:px-6 md:mx-0 md:px-0">
                <!-- Card 1 -->
                <div class="snap-center shrink-0 w-[85vw] sm:w-[350px] md:w-auto md:col-span-3 lg:col-span-4 bg-slate-900/40 border border-slate-800/80 rounded-3xl p-8 space-y-6 transition duration-300 hover:shadow-2xl hover:bg-slate-900/80 hover:border-slate-700/60 md:hover:scale-[1.02] flex flex-col justify-between">
                    <div class="space-y-6">
                        <div class="w-14 h-14 rounded-2xl bg-indigo-950/40 border border-indigo-900/30 text-indigo-400 flex items-center justify-center text-3xl shadow-xs">
                            <i class="ri-brain-line"></i>
                        </div>
                        <div class="space-y-3">
                            <h3 class="text-xl font-bold text-white font-sans">Active Self-Inquiry, Not Passive Calm</h3>
                            <p class="text-sm text-slate-400 leading-relaxed font-light font-sans">
                                Understand how behavioural patterns are formed sneakily without conscious awareness  and why this single mindset shift changes everything about how you approach growth, relationships, and performance.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="snap-center shrink-0 w-[85vw] sm:w-[350px] md:w-auto md:col-span-3 lg:col-span-4 bg-slate-900/40 border border-slate-800/80 rounded-3xl p-8 space-y-6 transition duration-300 hover:shadow-2xl hover:bg-slate-900/80 hover:border-slate-700/60 md:hover:scale-[1.02] flex flex-col justify-between">
                    <div class="space-y-6">
                        <div class="w-14 h-14 rounded-2xl bg-rose-950/40 border border-rose-900/30 text-rose-400 flex items-center justify-center text-3xl shadow-xs">
                            <i class="ri-focus-3-line"></i>
                        </div>
                        <div class="space-y-3">
                            <h3 class="text-xl font-bold text-white font-sans">Behavioural Wellbeing the Missing Link in Wellness apps</h3>
                            <p class="text-sm text-slate-400 leading-relaxed font-light font-sans">
                                Most platforms ask you to calm yourself in the moment. BSI asks a harder question: why are you reacting this way at all? The difference between superficial calm and inner transformation lies in understanding the why.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="snap-center shrink-0 w-[85vw] sm:w-[350px] md:w-auto md:col-span-3 lg:col-span-4 bg-slate-900/40 border border-slate-800/80 rounded-3xl p-8 space-y-6 transition duration-300 hover:shadow-2xl hover:bg-slate-900/80 hover:border-slate-700/60 md:hover:scale-[1.02] flex flex-col justify-between">
                    <div class="space-y-6">
                        <div class="w-14 h-14 rounded-2xl bg-amber-950/40 border border-amber-900/30 text-amber-400 flex items-center justify-center text-3xl shadow-xs">
                            <i class="ri-flashlight-line"></i>
                        </div>
                        <div class="space-y-3">
                            <h3 class="text-xl font-bold text-white font-sans">The BSI Framework Your Personal Behavioural Intelligence System</h3>
                            <p class="text-sm text-slate-400 leading-relaxed font-light font-sans">
                                A full introduction to Behavioural Signal Intelligence  built around Emotional, Somatic, and Pattern Resonance  giving you a measurable, personal picture of your inner state for the first time.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="snap-center shrink-0 w-[85vw] sm:w-[350px] md:w-auto md:col-span-3 lg:col-span-6 bg-slate-900/40 border border-slate-800/80 rounded-3xl p-8 space-y-6 transition duration-300 hover:shadow-2xl hover:bg-slate-900/80 hover:border-slate-700/60 md:hover:scale-[1.02] flex flex-col justify-between">
                    <div class="space-y-6">
                        <div class="w-14 h-14 rounded-2xl bg-emerald-950/40 border border-emerald-900/30 text-emerald-400 flex items-center justify-center text-3xl shadow-xs">
                            <i class="ri-gamepad-line"></i>
                        </div>
                        <div class="space-y-3">
                            <h3 class="text-xl font-bold text-white font-sans">BSI Activities Not a Demo. The Real Thing.</h3>
                            <p class="text-sm text-slate-400 leading-relaxed font-light font-sans">
                                This isn't a walkthrough. You'll do an actual gamified BSI exercise from the yourbeep platform  so you feel the shift, not just understand it. Most people notice something they've never noticed before.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Card 5 -->
                <div class="snap-center shrink-0 w-[85vw] sm:w-[350px] md:w-auto md:col-span-3 lg:col-span-6 bg-slate-900/40 border border-slate-800/80 rounded-3xl p-8 space-y-6 transition duration-300 hover:shadow-2xl hover:bg-slate-900/80 hover:border-slate-700/60 md:hover:scale-[1.02] flex flex-col justify-between">
                    <div class="space-y-6">
                        <div class="w-14 h-14 rounded-2xl bg-blue-950/40 border border-blue-900/30 text-blue-400 flex items-center justify-center text-3xl shadow-xs">
                            <i class="ri-windy-line"></i>
                        </div>
                        <div class="space-y-3">
                            <h3 class="text-xl font-bold text-white font-sans">The Internal Shift Finds You – No Chase. No BS.</h3>
                            <p class="text-sm text-slate-400 leading-relaxed font-light font-sans">
                                Practical somatic techniques to release fight-or-flight mode  plus creative expression mapping exercises you can use anywhere, anytime, when life is happening at full speed. When the nervous system is regulated, a state of equilibrium brings inner transformation.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- WHO IS THIS FOR SECTION -->
    <section class="w-full bg-white pt-20 pb-10 sm:pt-24 sm:pb-12 relative overflow-hidden border-t border-slate-200/50">
        <div class="absolute inset-0 bg-[radial-gradient(#e2e8f0_1px,transparent_1px)] [background-size:32px_32px] opacity-35 pointer-events-none"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <!-- Section Header -->
            <div class="text-center max-w-3xl mx-auto space-y-4 mb-16">
                <span class="inline-flex items-center gap-1.5 px-3 py-1 bg-teal-50 border border-teal-200/80 rounded-full text-[10px] font-extrabold text-teal-700 uppercase tracking-wide">
                    🎯 Who is this for?
                </span>
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black text-slate-900 tracking-tight leading-tight font-sans mt-3">
                    Is the BSI™ Masterclass For You?
                </h2>
                <p class="text-sm sm:text-base text-slate-500 font-light font-sans max-w-2xl mx-auto">
                    BSI™ is built specifically for high-achievers who are tired of generic wellness advice and want actionable, science-backed behavioral clarity.
                </p>
            </div>

            <!-- Audience Cards Grid -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-6xl mx-auto">
                <!-- Card 1: High-Performing Professionals -->
                <div class="bg-slate-50/50 border border-slate-200 rounded-3xl p-8 space-y-6 hover:shadow-xl hover:bg-white transition duration-300 flex flex-col justify-between">
                    <div class="space-y-5">
                        <div class="w-12 h-12 rounded-xl bg-teal-50 text-teal-650 flex items-center justify-center text-2xl shadow-2xs">
                            <i class="ri-briefcase-line"></i>
                        </div>
                        <div class="space-y-2">
                            <h3 class="text-lg font-bold text-slate-900 font-sans">Busy Professionals</h3>
                            <p class="text-xs text-slate-500 leading-relaxed font-light">
                                Juggling demanding careers, endless meetings, and family responsibilities. You need tools that fit into a packed schedule (under 10 minutes a day) and deliver real clarity without causing more guilt.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Card 2: Founders & Leaders -->
                <div class="bg-slate-50/50 border border-slate-200 rounded-3xl p-8 space-y-6 hover:shadow-xl hover:bg-white transition duration-300 flex flex-col justify-between">
                    <div class="space-y-5">
                        <div class="w-12 h-12 rounded-xl bg-rose-50 text-rose-600 flex items-center justify-center text-2xl shadow-2xs">
                            <i class="ri-lightbulb-line"></i>
                        </div>
                        <div class="space-y-2">
                            <h3 class="text-lg font-bold text-slate-900 font-sans">Founders & Entrepreneurs</h3>
                            <p class="text-xs text-slate-500 leading-relaxed font-light">
                                Operating in high-stakes environments where decision fatigue and burnout are constant threats. You want a structured, data-driven framework to optimize your behavioral patterns and decision-making loops.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Card 3: Chronic Overthinkers -->
                <div class="bg-slate-50/50 border border-slate-200 rounded-3xl p-8 space-y-6 hover:shadow-xl hover:bg-white transition duration-300 flex flex-col justify-between">
                    <div class="space-y-5">
                        <div class="w-12 h-12 rounded-xl bg-amber-50 text-amber-600 flex items-center justify-center text-2xl shadow-2xs">
                            <i class="ri-brain-line"></i>
                        </div>
                        <div class="space-y-2">
                            <h3 class="text-lg font-bold text-slate-900 font-sans">Chronic Overthinkers</h3>
                            <p class="text-xs text-slate-500 leading-relaxed font-light">
                                Trapped in constant analysis paralysis, second-guessing your choices, or staying stuck in repeating relationship/career patterns. BSI™ helps you label and disrupt these loops in real time.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

        <!-- TESTIMONIALS SECTION -->
    <section class="w-full bg-slate-950 py-20 sm:py-28 relative overflow-hidden border-t border-slate-900">
        <!-- Background decorative glows -->
        <div class="absolute top-1/2 left-1/4 w-[450px] h-[450px] bg-rose-500/[0.04] rounded-full blur-[100px] pointer-events-none"></div>
        <div class="absolute top-1/3 right-1/4 w-[450px] h-[450px] bg-teal-500/[0.04] rounded-full blur-[100px] pointer-events-none"></div>

        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <!-- Video Testimonials Grid -->
            <div class="space-y-10">
                <div class="text-center max-w-xl mx-auto">
                    <span class="inline-flex items-center gap-1.5 px-3 py-1 bg-teal-950/60 border border-teal-900/30 rounded-full text-[10px] font-bold text-teal-400 uppercase tracking-widest">
                        🎬 Video Stories
                    </span>
                    <h3 class="text-2xl sm:text-3xl font-extrabold text-white font-sans mt-3">
                        Watch BSI in Action
                    </h3>
                    <p class="text-xs sm:text-sm text-slate-400 font-light mt-2 font-sans">
                        See how early access members are decoding their behaviors and resetting their routines.
                    </p>
                </div>
                
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 max-w-5xl mx-auto">
                    <!-- Video 1 -->
                    <div class="bg-slate-900/40 border border-slate-800/80 rounded-3xl p-4 flex flex-col items-center space-y-4 shadow-xl transition-all duration-300 hover:scale-[1.02] hover:bg-slate-900/80 hover:border-teal-500/30 group max-w-[260px] w-full mx-auto">
                        <div class="relative w-full aspect-[9/16] rounded-2xl overflow-hidden shadow-lg bg-black/60">
                            <iframe 
                                class="absolute inset-0 w-full h-full" 
                                src="https://www.youtube.com/embed/WskXjQ2UTIk?rel=0&modestbranding=1" 
                                title="Yourbeep Video Testimonial 1" 
                                frameborder="0" 
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                                allowfullscreen>
                            </iframe>
                        </div>
                        <div class="inline-flex items-center gap-1.5 px-3.5 py-1 bg-teal-950/60 border border-teal-900/30 rounded-full text-[10px] font-bold text-teal-400 uppercase tracking-wider">
                            <i class="ri-play-circle-line text-xs"></i>
                            <span>Watch</span>
                        </div>
                    </div>

                    <!-- Video 2 -->
                    <div class="bg-slate-900/40 border border-slate-800/80 rounded-3xl p-4 flex flex-col items-center space-y-4 shadow-xl transition-all duration-300 hover:scale-[1.02] hover:bg-slate-900/80 hover:border-rose-500/30 group max-w-[260px] w-full mx-auto">
                        <div class="relative w-full aspect-[9/16] rounded-2xl overflow-hidden shadow-lg bg-black/60">
                            <iframe 
                                class="absolute inset-0 w-full h-full" 
                                src="https://www.youtube.com/embed/P2enxeLhMPU?rel=0&modestbranding=1" 
                                title="Yourbeep Video Testimonial 2" 
                                frameborder="0" 
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                                allowfullscreen>
                            </iframe>
                        </div>
                        <div class="inline-flex items-center gap-1.5 px-3.5 py-1 bg-rose-950/60 border border-rose-900/30 rounded-full text-[10px] font-bold text-rose-400 uppercase tracking-wider">
                            <i class="ri-play-circle-line text-xs"></i>
                            <span>Watch</span>
                        </div>
                    </div>

                    <!-- Video 3 -->
                    <div class="bg-slate-900/40 border border-slate-800/80 rounded-3xl p-4 flex flex-col items-center space-y-4 shadow-xl transition-all duration-300 hover:scale-[1.02] hover:bg-slate-900/80 hover:border-amber-500/30 group max-w-[260px] w-full mx-auto sm:col-span-2 lg:col-span-1">
                        <div class="relative w-full aspect-[9/16] rounded-2xl overflow-hidden shadow-lg bg-black/60">
                            <iframe 
                                class="absolute inset-0 w-full h-full" 
                                src="https://www.youtube.com/embed/qoqENvpIVNo?rel=0&modestbranding=1" 
                                title="Yourbeep Video Testimonial 3" 
                                frameborder="0" 
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                                allowfullscreen>
                            </iframe>
                        </div>
                        <div class="inline-flex items-center gap-1.5 px-3.5 py-1 bg-amber-950/60 border border-amber-900/30 rounded-full text-[10px] font-bold text-amber-400 uppercase tracking-wider">
                            <i class="ri-play-circle-line text-xs"></i>
                            <span>Watch</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- ABOUT THE FOUNDER SECTION -->
    <section class="w-full bg-slate-50 py-20 sm:py-28 relative overflow-hidden border-t border-slate-200/50">
        <!-- Background decorative glows -->
        <div class="absolute top-1/3 right-1/4 w-[400px] h-[400px] bg-teal-500/[0.02] rounded-full blur-[100px] pointer-events-none"></div>
        <div class="absolute bottom-1/3 left-1/4 w-[400px] h-[400px] bg-rose-500/[0.02] rounded-full blur-[100px] pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-start">
                
                <!-- Left Side: Founder Image & Quote Badge -->
                <div class="lg:col-span-5 space-y-6">
                    <!-- Image Card with Glow & Borders -->
                    <div class="relative group rounded-3xl overflow-hidden border border-slate-200 bg-white p-3 shadow-xl transition duration-300 hover:scale-[1.01]">
                        <!-- Subtle hover overlay -->
                        <div class="absolute inset-0 bg-gradient-to-tr from-teal-500/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 pointer-events-none z-10"></div>
                        <img src="{{ asset('founder.webp') }}" alt="Alolika - Founder of Yourbeep" class="w-full h-auto rounded-2xl object-cover shadow-xs">
                    </div>
                    
                    <div class="bg-white border border-slate-200 rounded-2xl p-5 shadow-xs text-center space-y-1">
                        <h3 class="text-base font-bold text-slate-900 font-sans">Alolika</h3>
                        <span class="inline-block text-xs font-bold text-teal-700 bg-teal-50 px-2.5 py-0.5 rounded-full uppercase tracking-wider">Architect of BSI</span>
                    </div>
                </div>

                <!-- Right Side: Content Details -->
                <div class="lg:col-span-7 space-y-8">
                    <!-- Intro Header -->
                    <div class="space-y-4">
                        <span class="text-xs font-bold text-teal-650 uppercase tracking-widest block font-sans">Meet the Architect</span>
                        <h2 class="text-3xl sm:text-4xl font-black text-slate-900 tracking-tight leading-tight font-sans">
                            About the Founder
                        </h2>
                        
                        <p class="text-base sm:text-lg text-slate-700 leading-relaxed font-light font-sans">
                            Most behavioural frameworks give you one lens cognitive, somatic, or spiritual. BSI gives you all of them at once. Because its architect hasn't just studied human behaviour. She's lived it from every angle possible.
                        </p>
                    </div>

                    <!-- Quote Block -->
                    <div class="border-l-4 border-teal-600 bg-teal-500/[0.04] p-5 sm:p-6 rounded-r-2xl space-y-3">
                        <p class="text-sm text-slate-750 leading-relaxed font-light font-sans">
                            After 15 years of leading 7,000+ people through transformation across 20+ fortune 500 firms, Alolika arrived at one uncomfortable truth – <strong class="text-slate-900 font-bold">“the only thing that consistently gets in the way of people's growth is their own behavioural limitations and patterns"</strong>.
                        </p>
                    </div>

                    <!-- Career Context -->
                    <p class="text-sm text-slate-650 leading-relaxed font-light font-sans">
                        So at the peak of her career Senior Leader at a renowned US advisory firm she walked away to build something that addresses exactly that, at its core.
                    </p>

                    <!-- Core Hats Section -->
                    <div class="space-y-6">
                        <div class="space-y-2">
                            <h3 class="text-base font-bold text-slate-900 font-sans">BSI isn't a leaf out of any textbook.</h3>
                            <p class="text-xs text-slate-500 font-sans font-light">
                                It's what happens when one person spends decades wearing genuinely different hats and refuses to take any of them off:
                            </p>
                        </div>

                        <!-- 6 Hats Grid List -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <!-- Hat 1 -->
                            <div class="flex gap-4">
                                <div class="w-10 h-10 rounded-xl bg-teal-50 flex items-center justify-center border border-teal-100 text-teal-650 shrink-0 select-none">
                                    <i class="ri-graduation-cap-line text-lg"></i>
                                </div>
                                <div class="space-y-1">
                                    <h4 class="text-sm font-bold text-slate-800 font-sans">The academic</h4>
                                    <p class="text-xs text-slate-500 leading-relaxed font-light font-sans">
                                        who understands why people make the decisions they do, even when those decisions work against them
                                    </p>
                                </div>
                            </div>

                            <!-- Hat 2 -->
                            <div class="flex gap-4">
                                <div class="w-10 h-10 rounded-xl bg-teal-50 flex items-center justify-center border border-teal-100 text-teal-650 shrink-0 select-none">
                                    <i class="ri-loop-left-line text-lg"></i>
                                </div>
                                <div class="space-y-1">
                                    <h4 class="text-sm font-bold text-slate-800 font-sans">The transformation advisor</h4>
                                    <p class="text-xs text-slate-500 leading-relaxed font-light font-sans">
                                        who has sat with resistance, navigated denial, and watched 7,000+ people eventually integrate real change
                                    </p>
                                </div>
                            </div>

                            <!-- Hat 3 -->
                            <div class="flex gap-4">
                                <div class="w-10 h-10 rounded-xl bg-teal-50 flex items-center justify-center border border-teal-100 text-teal-650 shrink-0 select-none">
                                    <i class="ri-mental-health-line text-lg"></i>
                                </div>
                                <div class="space-y-1">
                                    <h4 class="text-sm font-bold text-slate-800 font-sans">The Vipassana practitioner & Sufi whirler</h4>
                                    <p class="text-xs text-slate-500 leading-relaxed font-light font-sans">
                                        who has spent years learning to observe and move through emotional states with grace
                                    </p>
                                </div>
                            </div>

                            <!-- Hat 4 -->
                            <div class="flex gap-4">
                                <div class="w-10 h-10 rounded-xl bg-teal-50 flex items-center justify-center border border-teal-100 text-teal-650 shrink-0 select-none">
                                    <i class="ri-body-scan-line text-lg"></i>
                                </div>
                                <div class="space-y-1">
                                    <h4 class="text-sm font-bold text-slate-800 font-sans">The movement practitioner</h4>
                                    <p class="text-xs text-slate-500 leading-relaxed font-light font-sans">
                                        20+ years across dance, MMA, aerial, circus, and yoga, building a somatic vocabulary most people never develop
                                    </p>
                                </div>
                            </div>

                            <!-- Hat 5 -->
                            <div class="flex gap-4">
                                <div class="w-10 h-10 rounded-xl bg-teal-50 flex items-center justify-center border border-teal-100 text-teal-650 shrink-0 select-none">
                                    <i class="ri-palette-line text-lg"></i>
                                </div>
                                <div class="space-y-1">
                                    <h4 class="text-sm font-bold text-slate-800 font-sans">The visual artist</h4>
                                    <p class="text-xs text-slate-500 leading-relaxed font-light font-sans">
                                        trained to see patterns before they're fully formed, before the mind can name them
                                    </p>
                                </div>
                            </div>

                            <!-- Hat 6 -->
                            <div class="flex gap-4">
                                <div class="w-10 h-10 rounded-xl bg-teal-50 flex items-center justify-center border border-teal-100 text-teal-650 shrink-0 select-none">
                                    <i class="ri-earth-line text-lg"></i>
                                </div>
                                <div class="space-y-1">
                                    <h4 class="text-sm font-bold text-slate-800 font-sans">The global resident</h4>
                                    <p class="text-xs text-slate-500 leading-relaxed font-light font-sans">
                                        who has lived and worked across continents long enough to know what every framework leaves out
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Closing Summary -->
                    <div class="pt-4 border-t border-slate-200/60 text-xs text-slate-550 leading-relaxed font-light font-sans">
                        These aren't credentials. They're the constituents of a life lived with unusual breadth and unusual intentionality. And BSI is what emerged from it.
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- PRODUCT MATRIX COMPARISON SECTION -->
    <section class="w-full bg-slate-50 py-20 sm:py-28 relative overflow-hidden border-t border-slate-200/50">
        <!-- Background glows -->
        <div class="absolute top-1/4 left-1/3 w-[500px] h-[500px] bg-rose-500/[0.02] rounded-full blur-[120px] pointer-events-none"></div>
        <div class="absolute bottom-1/4 right-1/3 w-[500px] h-[500px] bg-teal-500/[0.03] rounded-full blur-[120px] pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <!-- Section Header -->
            <div class="text-center max-w-3xl mx-auto space-y-4 mb-16">
                <span class="text-xs font-bold text-teal-600 uppercase tracking-widest block font-sans">Find the Right Fit</span>
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black text-slate-900 tracking-tight leading-tight font-sans">
                    Still searching for the right fit?
                </h2>
                <p class="text-sm sm:text-base text-slate-500 font-light font-sans leading-relaxed">
                    You've probably tried some kind of mental wellness platform. If you’re still not sure, here's an honest look at what each actually delivers.
                </p>
                
                <!-- Emoji Legend Badges -->
                <div class="pt-4 flex flex-wrap justify-center gap-3 text-xs">
                    <span class="inline-flex items-center gap-1.5 px-3 py-1 bg-white border border-slate-200 rounded-full text-slate-600 shadow-2xs font-sans">
                        <span class="text-emerald-500 font-bold">✅</span> <strong class="font-semibold text-slate-700">Absolutely</strong>
                    </span>
                    <span class="inline-flex items-center gap-1.5 px-3 py-1 bg-white border border-slate-200 rounded-full text-slate-650 shadow-2xs font-sans">
                        <span class="text-amber-500 font-bold">🤷</span> <strong class="font-semibold text-slate-700">Occasionally</strong>
                    </span>
                    <span class="inline-flex items-center gap-1.5 px-3 py-1 bg-white border border-slate-200 rounded-full text-slate-650 shadow-2xs font-sans">
                        <span class="text-rose-500 font-bold">🙅</span> <strong class="font-semibold text-slate-700">Nope</strong>
                    </span>
                    <span class="inline-flex items-center gap-1.5 px-3 py-1 bg-white border border-slate-200 rounded-full text-slate-650 shadow-2xs font-sans">
                        <span class="text-slate-450 font-bold">🤐</span> <strong class="font-semibold text-slate-800">I’d rather not say!</strong>
                    </span>
                </div>
            </div>

            <!-- Comparison Table (Desktop View, lg and up) -->
            <div class="hidden lg:block border border-slate-200 rounded-3xl overflow-hidden shadow-2xl bg-white">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="bg-slate-50/70 border-b border-slate-200">
                            <th class="p-5 text-xs font-bold text-slate-400 uppercase tracking-wider w-5/12 align-middle">What I'm actually looking for...</th>
                            <th class="p-5 text-center text-xs font-bold text-slate-700 uppercase tracking-wider w-1.5/12 align-middle border-r border-slate-100">Spiritual Groups</th>
                            <th class="p-5 text-center text-xs font-bold text-slate-700 uppercase tracking-wider w-1.5/12 align-middle border-r border-slate-100">Mindfulness Apps</th>
                            <th class="p-5 text-center text-xs font-bold text-slate-700 uppercase tracking-wider w-1.5/12 align-middle border-r border-slate-100">1-1 Counselling</th>
                            <th class="p-5 text-center text-xs font-bold text-teal-900 uppercase tracking-wider w-2.5/12 align-middle bg-teal-500/8">BSI @ Yourbeep</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100 text-sm align-middle">
                        <!-- Row 1 -->
                        <tr>
                            <td class="p-5 font-medium text-slate-800 bg-slate-50/10">I just need a quick moment to center myself</td>
                            <td class="p-5 text-center text-base border-r border-slate-100">✅</td>
                            <td class="p-5 text-center text-base border-r border-slate-100">✅</td>
                            <td class="p-5 text-center text-base border-r border-slate-100">🤷</td>
                            <td class="p-5 text-center text-base bg-teal-500/[0.03] font-semibold text-slate-800">🤷</td>
                        </tr>
                        <!-- Row 2 -->
                        <tr>
                            <td class="p-5 font-medium text-slate-800 bg-slate-50/10">I want scientifically deconstructed frameworks to label my inner state.</td>
                            <td class="p-5 text-center text-base border-r border-slate-100">🤐</td>
                            <td class="p-5 text-center text-base border-r border-slate-100">🤷</td>
                            <td class="p-5 text-center text-base border-r border-slate-100">🤐</td>
                            <td class="p-5 text-center text-base bg-teal-500/[0.03] font-semibold text-slate-800">✅</td>
                        </tr>
                        <!-- Row 3 -->
                        <tr>
                            <td class="p-5 font-medium text-slate-800 bg-slate-50/10">I want wellness that feels natural like play, not stressful like homework</td>
                            <td class="p-5 text-center text-base border-r border-slate-100">🙅</td>
                            <td class="p-5 text-center text-base border-r border-slate-100">🤷</td>
                            <td class="p-5 text-center text-base border-r border-slate-100">🙅</td>
                            <td class="p-5 text-center text-base bg-teal-500/[0.03] font-semibold text-slate-800">✅</td>
                        </tr>
                        <!-- Row 4 -->
                        <tr>
                            <td class="p-5 font-medium text-slate-800 bg-slate-50/10">I want a full read of my emotional, physiological and nervous system state, a clear score, and not a generic mood state</td>
                            <td class="p-5 text-center text-base border-r border-slate-100">🙅</td>
                            <td class="p-5 text-center text-base border-r border-slate-100">🤷</td>
                            <td class="p-5 text-center text-base border-r border-slate-100">🤷</td>
                            <td class="p-5 text-center text-base bg-teal-500/[0.03] font-semibold text-slate-800">✅</td>
                        </tr>
                        <!-- Row 5 -->
                        <tr>
                            <td class="p-5 font-medium text-slate-800 bg-slate-50/10">I want actual proof that I'm making progress in my long-term behavioural wellbeing.</td>
                            <td class="p-5 text-center text-base border-r border-slate-100">🤐</td>
                            <td class="p-5 text-center text-base border-r border-slate-100">🤐</td>
                            <td class="p-5 text-center text-base border-r border-slate-100">🤷</td>
                            <td class="p-5 text-center text-base bg-teal-500/[0.03] font-semibold text-slate-800">✅</td>
                        </tr>
                        <!-- Row 6 -->
                        <tr>
                            <td class="p-5 font-medium text-slate-800 bg-slate-50/10">I can fit this into my mad daily routine, and also learn to read and regulate my own signals.</td>
                            <td class="p-5 text-center text-base border-r border-slate-100">🙅</td>
                            <td class="p-5 text-center text-base border-r border-slate-100">✅</td>
                            <td class="p-5 text-center text-base border-r border-slate-100">🤷</td>
                            <td class="p-5 text-center text-base bg-teal-500/[0.03] font-semibold text-slate-800">✅</td>
                        </tr>
                        <!-- Row 7 -->
                        <tr>
                            <td class="p-5 font-medium text-slate-800 bg-slate-50/10">I want recurring community meets so I can share my learnings</td>
                            <td class="p-5 text-center text-base border-r border-slate-100">✅</td>
                            <td class="p-5 text-center text-base border-r border-slate-100">🤷</td>
                            <td class="p-5 text-center text-base border-r border-slate-100">🙅</td>
                            <td class="p-5 text-center text-base bg-teal-500/[0.03] font-semibold text-slate-800">✅</td>
                        </tr>
                        <!-- Row 8 -->
                        <tr>
                            <td class="p-5 font-medium text-slate-800 bg-slate-50/10">I want to disappear from the world and find inner peace.</td>
                            <td class="p-5 text-center text-base border-r border-slate-100">✅</td>
                            <td class="p-5 text-center text-base border-r border-slate-100">🙅</td>
                            <td class="p-5 text-center text-base border-r border-slate-100">🙅</td>
                            <td class="p-5 text-center text-base bg-teal-500/[0.03] font-semibold text-slate-800">🙅</td>
                        </tr>
                        <!-- Row 9 -->
                        <tr>
                            <td class="p-5 font-medium text-slate-800 bg-slate-50/10">I want to discuss a specific life situation that needs to be addressed</td>
                            <td class="p-5 text-center text-base border-r border-slate-100">🤷</td>
                            <td class="p-5 text-center text-base border-r border-slate-100">🤐</td>
                            <td class="p-5 text-center text-base border-r border-slate-100">✅</td>
                            <td class="p-5 text-center text-base bg-teal-500/[0.03] font-semibold text-slate-800">🙅</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Mobile View (Horizontal Scrollable Cards) -->
            <div class="lg:hidden">
                <p class="text-xs text-slate-400 text-center mb-4 flex items-center justify-center gap-1 font-light">
                    <span>Swipe horizontally to compare platforms</span> <i class="ri-arrow-right-line"></i>
                </p>
                <div class="flex overflow-x-auto snap-x snap-mandatory gap-6 pb-6 scrollbar-hide -mx-4 px-4">
                    
                    <!-- Card 1 -->
                    <div class="snap-center shrink-0 w-80 bg-white border border-slate-200 rounded-2xl p-5 space-y-4 shadow-md">
                        <h4 class="text-sm font-bold text-slate-800 leading-snug">“I just need a quick moment to center myself”</h4>
                        <div class="space-y-2.5 text-xs">
                            <div class="flex justify-between items-center py-1.5 border-b border-slate-100">
                                <span class="text-slate-500">Spiritual Groups</span>
                                <span class="font-bold text-slate-800">✅ Absolutely</span>
                            </div>
                            <div class="flex justify-between items-center py-1.5 border-b border-slate-100">
                                <span class="text-slate-500">Mindfulness Apps</span>
                                <span class="font-bold text-slate-800">✅ Absolutely</span>
                            </div>
                            <div class="flex justify-between items-center py-1.5 border-b border-slate-100">
                                <span class="text-slate-500">1-1 Counselling</span>
                                <span class="font-bold text-slate-700">🤷 Occasionally</span>
                            </div>
                            <div class="flex justify-between items-center bg-teal-50 -mx-3 px-3 py-2 rounded-xl">
                                <span class="text-teal-900 font-semibold">BSI @ Yourbeep</span>
                                <span class="font-black text-teal-700">🤷 Occasionally</span>
                            </div>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="snap-center shrink-0 w-80 bg-white border border-slate-200 rounded-2xl p-5 space-y-4 shadow-md">
                        <h4 class="text-sm font-bold text-slate-800 leading-snug">“I want scientifically deconstructed frameworks to label my inner state”</h4>
                        <div class="space-y-2.5 text-xs">
                            <div class="flex justify-between items-center py-1.5 border-b border-slate-100">
                                <span class="text-slate-500">Spiritual Groups</span>
                                <span class="font-bold text-slate-700">🤐 I'd rather not say</span>
                            </div>
                            <div class="flex justify-between items-center py-1.5 border-b border-slate-100">
                                <span class="text-slate-500">Mindfulness Apps</span>
                                <span class="font-bold text-slate-700">🤷 Occasionally</span>
                            </div>
                            <div class="flex justify-between items-center py-1.5 border-b border-slate-100">
                                <span class="text-slate-500">1-1 Counselling</span>
                                <span class="font-bold text-slate-700">🤐 I'd rather not say</span>
                            </div>
                            <div class="flex justify-between items-center bg-teal-50 -mx-3 px-3 py-2 rounded-xl">
                                <span class="text-teal-900 font-semibold">BSI @ Yourbeep</span>
                                <span class="font-black text-teal-700">✅ Absolutely</span>
                            </div>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="snap-center shrink-0 w-80 bg-white border border-slate-200 rounded-2xl p-5 space-y-4 shadow-md">
                        <h4 class="text-sm font-bold text-slate-800 leading-snug">“I want wellness that feels natural like play, not stressful like homework”</h4>
                        <div class="space-y-2.5 text-xs">
                            <div class="flex justify-between items-center py-1.5 border-b border-slate-100">
                                <span class="text-slate-500">Spiritual Groups</span>
                                <span class="font-bold text-slate-700">🙅 Nope</span>
                            </div>
                            <div class="flex justify-between items-center py-1.5 border-b border-slate-100">
                                <span class="text-slate-500">Mindfulness Apps</span>
                                <span class="font-bold text-slate-700">🤷 Occasionally</span>
                            </div>
                            <div class="flex justify-between items-center py-1.5 border-b border-slate-100">
                                <span class="text-slate-500">1-1 Counselling</span>
                                <span class="font-bold text-slate-700">🙅 Nope</span>
                            </div>
                            <div class="flex justify-between items-center bg-teal-50 -mx-3 px-3 py-2 rounded-xl">
                                <span class="text-teal-900 font-semibold">BSI @ Yourbeep</span>
                                <span class="font-black text-teal-700">✅ Absolutely</span>
                            </div>
                        </div>
                    </div>

                    <!-- Card 4 -->
                    <div class="snap-center shrink-0 w-80 bg-white border border-slate-200 rounded-2xl p-5 space-y-4 shadow-md">
                        <h4 class="text-sm font-bold text-slate-800 leading-snug">“I want a full read of my emotional, somatic and nervous system state”</h4>
                        <div class="space-y-2.5 text-xs">
                            <div class="flex justify-between items-center py-1.5 border-b border-slate-100">
                                <span class="text-slate-500">Spiritual Groups</span>
                                <span class="font-bold text-slate-700">🙅 Nope</span>
                            </div>
                            <div class="flex justify-between items-center py-1.5 border-b border-slate-100">
                                <span class="text-slate-500">Mindfulness Apps</span>
                                <span class="font-bold text-slate-700">🤷 Occasionally</span>
                            </div>
                            <div class="flex justify-between items-center py-1.5 border-b border-slate-100">
                                <span class="text-slate-500">1-1 Counselling</span>
                                <span class="font-bold text-slate-700">🤷 Occasionally</span>
                            </div>
                            <div class="flex justify-between items-center bg-teal-50 -mx-3 px-3 py-2 rounded-xl">
                                <span class="text-teal-900 font-semibold">BSI @ Yourbeep</span>
                                <span class="font-black text-teal-700">✅ Absolutely</span>
                            </div>
                        </div>
                    </div>

                    <!-- Card 5 -->
                    <div class="snap-center shrink-0 w-80 bg-white border border-slate-200 rounded-2xl p-5 space-y-4 shadow-md">
                        <h4 class="text-sm font-bold text-slate-800 leading-snug">“I want actual proof of my long-term progress”</h4>
                        <div class="space-y-2.5 text-xs">
                            <div class="flex justify-between items-center py-1.5 border-b border-slate-100">
                                <span class="text-slate-500">Spiritual Groups</span>
                                <span class="font-bold text-slate-700">🤐 I'd rather not say</span>
                            </div>
                            <div class="flex justify-between items-center py-1.5 border-b border-slate-100">
                                <span class="text-slate-500">Mindfulness Apps</span>
                                <span class="font-bold text-slate-700">🤐 I'd rather not say</span>
                            </div>
                            <div class="flex justify-between items-center py-1.5 border-b border-slate-100">
                                <span class="text-slate-500">1-1 Counselling</span>
                                <span class="font-bold text-slate-700">🤷 Occasionally</span>
                            </div>
                            <div class="flex justify-between items-center bg-teal-50 -mx-3 px-3 py-2 rounded-xl">
                                <span class="text-teal-900 font-semibold">BSI @ Yourbeep</span>
                                <span class="font-black text-teal-700">✅ Absolutely</span>
                            </div>
                        </div>
                    </div>

                    <!-- Card 6 -->
                    <div class="snap-center shrink-0 w-80 bg-white border border-slate-200 rounded-2xl p-5 space-y-4 shadow-md">
                        <h4 class="text-sm font-bold text-slate-800 leading-snug">“I can fit this into my mad daily routine & learn to regulate myself”</h4>
                        <div class="space-y-2.5 text-xs">
                            <div class="flex justify-between items-center py-1.5 border-b border-slate-100">
                                <span class="text-slate-500">Spiritual Groups</span>
                                <span class="font-bold text-slate-700">🙅 Nope</span>
                            </div>
                            <div class="flex justify-between items-center py-1.5 border-b border-slate-100">
                                <span class="text-slate-500">Mindfulness Apps</span>
                                <span class="font-bold text-slate-800">✅ Absolutely</span>
                            </div>
                            <div class="flex justify-between items-center py-1.5 border-b border-slate-100">
                                <span class="text-slate-500">1-1 Counselling</span>
                                <span class="font-bold text-slate-700">🤷 Occasionally</span>
                            </div>
                            <div class="flex justify-between items-center bg-teal-50 -mx-3 px-3 py-2 rounded-xl">
                                <span class="text-teal-900 font-semibold">BSI @ Yourbeep</span>
                                <span class="font-black text-teal-700">✅ Absolutely</span>
                            </div>
                        </div>
                    </div>

                    <!-- Card 7 -->
                    <div class="snap-center shrink-0 w-80 bg-white border border-slate-200 rounded-2xl p-5 space-y-4 shadow-md">
                        <h4 class="text-sm font-bold text-slate-800 leading-snug">“I want recurring community meets to share learnings”</h4>
                        <div class="space-y-2.5 text-xs">
                            <div class="flex justify-between items-center py-1.5 border-b border-slate-100">
                                <span class="text-slate-500">Spiritual Groups</span>
                                <span class="font-bold text-slate-800">✅ Absolutely</span>
                            </div>
                            <div class="flex justify-between items-center py-1.5 border-b border-slate-100">
                                <span class="text-slate-500">Mindfulness Apps</span>
                                <span class="font-bold text-slate-700">🤷 Occasionally</span>
                            </div>
                            <div class="flex justify-between items-center py-1.5 border-b border-slate-100">
                                <span class="text-slate-500">1-1 Counselling</span>
                                <span class="font-bold text-slate-700">🙅 Nope</span>
                            </div>
                            <div class="flex justify-between items-center bg-teal-50 -mx-3 px-3 py-2 rounded-xl">
                                <span class="text-teal-900 font-semibold">BSI @ Yourbeep</span>
                                <span class="font-black text-teal-700">✅ Absolutely</span>
                            </div>
                        </div>
                    </div>

                    <!-- Card 8 -->
                    <div class="snap-center shrink-0 w-80 bg-white border border-slate-200 rounded-2xl p-5 space-y-4 shadow-md">
                        <h4 class="text-sm font-bold text-slate-800 leading-snug">“I want to disappear from the world and find inner peace”</h4>
                        <div class="space-y-2.5 text-xs">
                            <div class="flex justify-between items-center py-1.5 border-b border-slate-100">
                                <span class="text-slate-500">Spiritual Groups</span>
                                <span class="font-bold text-slate-850">✅ Absolutely</span>
                            </div>
                            <div class="flex justify-between items-center py-1.5 border-b border-slate-100">
                                <span class="text-slate-500">Mindfulness Apps</span>
                                <span class="font-bold text-slate-700">🙅 Nope</span>
                            </div>
                            <div class="flex justify-between items-center py-1.5 border-b border-slate-100">
                                <span class="text-slate-500">1-1 Counselling</span>
                                <span class="font-bold text-slate-700">🙅 Nope</span>
                            </div>
                            <div class="flex justify-between items-center bg-teal-50 -mx-3 px-3 py-2 rounded-xl">
                                <span class="text-teal-900 font-semibold">BSI @ Yourbeep</span>
                                <span class="font-black text-teal-700">🙅 Nope</span>
                            </div>
                        </div>
                    </div>

                    <!-- Card 9 -->
                    <div class="snap-center shrink-0 w-80 bg-white border border-slate-200 rounded-2xl p-5 space-y-4 shadow-md">
                        <h4 class="text-sm font-bold text-slate-800 leading-snug">“I want to discuss a specific life situation that needs to be addressed”</h4>
                        <div class="space-y-2.5 text-xs">
                            <div class="flex justify-between items-center py-1.5 border-b border-slate-100">
                                <span class="text-slate-500">Spiritual Groups</span>
                                <span class="font-bold text-slate-700">🤷 Occasionally</span>
                            </div>
                            <div class="flex justify-between items-center py-1.5 border-b border-slate-100">
                                <span class="text-slate-500">Mindfulness Apps</span>
                                <span class="font-bold text-slate-700">🤐 I'd rather not say</span>
                            </div>
                            <div class="flex justify-between items-center py-1.5 border-b border-slate-100">
                                <span class="text-slate-500">1-1 Counselling</span>
                                <span class="font-bold text-slate-800">✅ Absolutely</span>
                            </div>
                            <div class="flex justify-between items-center bg-teal-50 -mx-3 px-3 py-2 rounded-xl">
                                <span class="text-teal-900 font-semibold">BSI @ Yourbeep</span>
                                <span class="font-black text-teal-700">🙅 Nope</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Closing Statement & CTA -->
            <div class="mt-16 text-center max-w-3xl mx-auto space-y-6">
                <div class="inline-block bg-teal-500/[0.04] border-l-4 border-teal-600 px-6 py-4 rounded-r-2xl text-left shadow-xs">
                    <p class="text-slate-800 text-base sm:text-lg font-light leading-relaxed font-sans">
                        Yourbeep isn't for everyone  <strong class="text-teal-900 font-bold">and that's the point.</strong>
                    </p>
                    <p class="text-slate-650 text-sm sm:text-base font-light leading-relaxed font-sans">
                        It's for the ones who want to understand themselves, not just feel better for a day.
                    </p>
                </div>

                <div class="pt-4">
                    <a href="https://www.yourbeep.com/courses/6a41f00fdc0af597eb154d43/pricing" class="inline-flex items-center gap-2 bg-gradient-to-r from-teal-600 to-emerald-600 hover:from-teal-500 hover:to-emerald-500 text-white font-black py-4 px-10 rounded-2xl shadow-lg hover:shadow-xl transition transform duration-150 active:scale-95 text-sm sm:text-base uppercase tracking-wider cursor-pointer">
                        <span>Start Decoding My Behaviour NOW</span>
                        <i class="ri-arrow-right-line text-lg"></i>
                    </a>
                </div>
            </div>

        </div>
    </section>

    <!-- BONUSES SECTION -->
    <section class="w-full bg-slate-950 py-20 sm:py-28 relative overflow-hidden border-t border-slate-900">
        <!-- Background decorative glows -->
        <div class="absolute top-1/2 left-1/4 w-[450px] h-[450px] bg-rose-500/[0.04] rounded-full blur-[100px] pointer-events-none"></div>
        <div class="absolute bottom-1/4 right-1/4 w-[450px] h-[450px] bg-teal-500/[0.04] rounded-full blur-[100px] pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <!-- Section Header -->
            <div class="text-center max-w-3xl mx-auto space-y-4 mb-16">
                <span class="text-xs font-bold text-teal-400 uppercase tracking-widest block font-sans">Founding Offer</span>
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black text-white tracking-tight leading-tight font-sans">
                    Everything You Get Today
                </h2>
                <p class="text-sm sm:text-base text-slate-400 font-light font-sans">
                    As a founding member of yourbeep  before the price goes up.
                </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-start">
                <!-- Left: Stack Items list -->
                <div class="lg:col-span-7 space-y-8">
                    <!-- Stack Item 1 -->
                    <div class="flex gap-4 p-5 rounded-2xl border border-slate-800/60 bg-slate-900/30 hover:bg-slate-900/60 transition duration-150">
                        <div class="w-12 h-12 rounded-2xl bg-teal-950/40 border border-teal-900/30 text-teal-400 flex items-center justify-center shrink-0 text-2xl shadow-xs">
                            <i class="ri-graduation-cap-line"></i>
                        </div>
                        <div class="space-y-2">
                            <h4 class="text-base font-bold text-white font-sans">The BSI Masterclass</h4>
                            <p class="text-sm text-slate-400 leading-relaxed font-light font-sans">
                                Your foundational introduction to Behavioural Signal Intelligence  6 real gamified activities, introduction to the BSI framework, and a partial RQ dashboard. In under 60 minutes.
                            </p>
                            <div class="text-xs font-bold font-sans text-teal-400">
                                Yours at <span class="line-through text-slate-500">₹499</span> ₹299
                            </div>
                        </div>
                    </div>

                    <!-- Stack Item 2 -->
                    <div class="flex gap-4 p-5 rounded-2xl border border-slate-800/60 bg-slate-900/30 hover:bg-slate-900/60 transition duration-150">
                        <div class="w-12 h-12 rounded-2xl bg-teal-950/40 border border-teal-900/30 text-teal-400 flex items-center justify-center shrink-0 text-2xl shadow-xs">
                            <i class="ri-gamepad-line"></i>
                        </div>
                        <div class="space-y-2">
                            <h4 class="text-base font-bold text-white font-sans">6 Gamified BSI Activities</h4>
                            <p class="text-sm text-slate-400 leading-relaxed font-light font-sans">
                                Not demos. Not theory. Actual yourbeep platform activities  across Emotional, Somatic, and Pattern Resonance  that you can start using the same day.
                            </p>
                            <div class="text-xs font-bold font-sans text-teal-400">
                                <span class="line-through text-slate-500">₹499</span> Included
                            </div>
                        </div>
                    </div>

                    <!-- Stack Item 3 -->
                    <div class="flex gap-4 p-5 rounded-2xl border border-slate-800/60 bg-slate-900/30 hover:bg-slate-900/60 transition duration-150">
                        <div class="w-12 h-12 rounded-2xl bg-teal-950/40 border border-teal-900/30 text-teal-400 flex items-center justify-center shrink-0 text-2xl shadow-xs">
                            <i class="ri-bar-chart-2-line"></i>
                        </div>
                        <div class="space-y-2">
                            <h4 class="text-base font-bold text-white font-sans">Your Partial RQ Dashboard</h4>
                            <p class="text-sm text-slate-400 leading-relaxed font-light font-sans">
                                A first look at your personal Resonance Quotient  your Emotional, Somatic, and Pattern Resonance scores  so you can see where your signals are aligned and where they need work.
                            </p>
                            <div class="text-xs font-bold font-sans text-teal-400">
                                <span class="line-through text-slate-500">₹499</span> Included
                            </div>
                        </div>
                    </div>

                    <!-- Stack Item 4 -->
                    <div class="flex gap-4 p-5 rounded-2xl border border-slate-800/60 bg-slate-900/30 hover:bg-slate-900/60 transition duration-150">
                        <div class="w-12 h-12 rounded-2xl bg-teal-950/40 border border-teal-900/30 text-teal-400 flex items-center justify-center shrink-0 text-2xl shadow-xs">
                            <i class="ri-group-line"></i>
                        </div>
                        <div class="space-y-2">
                            <h4 class="text-base font-bold text-white font-sans">Monthly Founding Member Community Meets</h4>
                            <p class="text-sm text-slate-400 leading-relaxed font-light font-sans">
                                Live sessions with Alolika and fellow founding members  to share progress, ask questions, and stay accountable. Only available to this founding cohort.
                            </p>
                            <div class="text-xs font-bold font-sans text-teal-400">
                                <span class="line-through text-slate-500">₹999/month</span> Included
                            </div>
                        </div>
                    </div>

                    <!-- Stack Item 5 -->
                    <div class="flex gap-4 p-5 rounded-2xl border border-slate-800/60 bg-slate-900/30 hover:bg-slate-900/60 transition duration-150">
                        <div class="w-12 h-12 rounded-2xl bg-teal-950/40 border border-teal-900/30 text-teal-400 flex items-center justify-center shrink-0 text-2xl shadow-xs">
                            <i class="ri-hand-coin-line"></i>
                        </div>
                        <div class="space-y-2">
                            <h4 class="text-base font-bold text-white font-sans">Full Masterclass Fee Credited to the Full Course</h4>
                            <p class="text-sm text-slate-400 leading-relaxed font-light font-sans">
                                Loved the masterclass and want to go deeper? Your entire <span class="line-through decoration-2 decoration-slate-400 text-slate-500">₹499</span> ₹299 is credited toward the full BSI course when you upgrade. You pay nothing twice.
                            </p>
                            <div class="text-xs font-bold font-sans text-teal-400">
                                <span class="line-through decoration-2 decoration-slate-500 text-slate-500">₹499</span> ₹299 Credited back in full
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right: Total Value receipt card -->
                <div class="lg:col-span-5">
                    <div class="bg-slate-900 text-white rounded-3xl p-8 sm:p-10 shadow-2xl relative overflow-hidden border border-slate-800 space-y-8">
                        <!-- Corner Accent glow -->
                        <div class="absolute top-0 right-0 w-32 h-32 bg-teal-500/20 rounded-full blur-2xl pointer-events-none"></div>
                        
                        <div class="space-y-2">
                            <span class="text-xs font-bold text-teal-400 uppercase tracking-widest block font-sans">Summary</span>
                            <h3 class="text-xl font-bold font-sans">Your Founding Membership</h3>
                        </div>

                        <!-- Price Breakdown -->
                        <div class="space-y-4 border-t border-slate-800 pt-6">
                            <div class="flex justify-between items-center text-sm">
                                <span class="text-slate-400 font-light font-sans">Total value</span>
                                <span class="text-slate-200 font-semibold font-mono text-base">₹2,495</span>
                            </div>
                            
                            <div class="flex justify-between items-center text-sm">
                                <span class="text-slate-400 font-light font-sans">Your founding member price</span>
                                <div class="flex items-baseline gap-2">
                                    <span class="text-teal-400 font-black font-mono text-2xl">₹299</span>
                                    <span class="text-slate-550 line-through text-sm font-normal">₹499</span>
                                </div>
                            </div>

                            <div class="flex justify-between items-center bg-teal-950/50 border border-teal-800/30 px-4 py-3 rounded-2xl">
                                <span class="text-teal-300 text-xs font-bold uppercase tracking-wider font-sans">You save</span>
                                <span class="text-teal-400 font-black font-mono text-lg">₹2,196</span>
                            </div>
                        </div>

                        <!-- Warning / Closing text -->
                        <p class="text-xs text-slate-400 leading-relaxed font-light font-sans">
                            This price closes soon. After that, Early Member Access is gone  and so is the masterclass credit toward the full course.
                        </p>

                        <!-- CTA Button -->
                        <div class="pt-2">
                            <a href="https://www.yourbeep.com/courses/6a41f00fdc0af597eb154d43/pricing" class="w-full inline-flex items-center justify-center gap-1.5 bg-gradient-to-r from-teal-500 to-emerald-500 hover:from-teal-400 hover:to-emerald-400 text-white font-black py-4 px-3 sm:px-6 rounded-2xl shadow-lg hover:shadow-xl transition transform duration-150 active:scale-95 text-[9px] sm:text-[10px] md:text-xs whitespace-nowrap uppercase tracking-wider cursor-pointer text-center">
                                <span>Claim Early Member Price Before It Closes</span>
                                <i class="ri-arrow-right-line text-xs sm:text-sm"></i>
                            </a>
                        </div>

                        <!-- Risk Reversal Guarantee -->
                        <div class="mt-4 bg-emerald-950/40 border border-emerald-500/20 rounded-2xl p-4 text-left">
                            <span class="text-[10px] font-extrabold text-emerald-400 uppercase tracking-widest block mb-1">🛡️ 100% Risk-Free Guarantee</span>
                            <p class="text-[10px] text-slate-300 leading-relaxed font-light">
                                If you don't discover at least 3 hidden behavior patterns holding you back in the first 30 minutes, drop us a message for a full refund—no questions asked.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="w-full bg-gradient-to-b from-slate-50 to-slate-100/60 pt-10 pb-20 sm:pt-14 sm:pb-28 relative overflow-hidden border-t border-slate-200/50">
        <!-- Background glows -->
        <div class="absolute top-1/3 right-1/4 w-[400px] h-[400px] bg-teal-500/[0.03] rounded-full blur-[100px] pointer-events-none"></div>
        <div class="absolute bottom-1/3 left-1/4 w-[400px] h-[400px] bg-indigo-500/[0.03] rounded-full blur-[100px] pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <!-- Section Header -->
            <div class="text-center max-w-3xl mx-auto space-y-4 mb-10">
                <span class="text-xs font-bold text-teal-600 uppercase tracking-widest block font-sans">Start Your Journey</span>
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black text-slate-900 tracking-tight leading-tight font-sans">
                    The BSI Masterclass
                </h2>
                <p class="text-sm sm:text-base text-slate-500 font-light font-sans">
                    Begin decoding your behavioral loops and patterns in just 10 minutes a day.
                </p>
            </div>

            <!-- Premium Single Pricing Card -->
            <div class="max-w-xl mx-auto bg-white border border-slate-200 rounded-3xl p-8 space-y-6 shadow-2xl relative overflow-hidden">
                <!-- Soft glow details in card -->
                <div class="absolute top-0 right-0 w-32 h-32 bg-teal-500/[0.03] rounded-full blur-2xl pointer-events-none"></div>
                
                <div class="flex items-center justify-between border-b border-slate-100 pb-4 flex-wrap gap-2">
                    <span class="inline-flex items-center gap-1.5 px-3 py-1 bg-teal-50 text-teal-700 rounded-full text-xs font-bold uppercase tracking-wider">
                        🎯 BSI Masterclass
                    </span>
                    <div class="flex items-baseline gap-2">
                        <span class="text-sm text-slate-400 line-through">₹499</span>
                        <span class="text-3xl font-black text-slate-900 font-sans">₹299</span>
                    </div>
                </div>

                <div class="space-y-4">
                    <h4 class="text-sm font-bold text-slate-900 uppercase tracking-wider">What's Included:</h4>
                    <ul class="space-y-4 text-sm text-slate-650 font-sans font-light">
                        <li class="flex items-start gap-2.5">
                            <i class="ri-checkbox-circle-fill text-teal-600 text-base mt-0.5 shrink-0"></i>
                            <span><strong>BSI Framework:</strong> Introduction to the 4-pillar approach to read your behavioural signals.</span>
                        </li>
                        <li class="flex items-start gap-2.5">
                            <i class="ri-checkbox-circle-fill text-teal-600 text-base mt-0.5 shrink-0"></i>
                            <span><strong>Educational Videos:</strong> 1 deep-dive video (45 mins) to guide your awareness.</span>
                        </li>
                        <li class="flex items-start gap-2.5">
                            <i class="ri-checkbox-circle-fill text-teal-600 text-base mt-0.5 shrink-0"></i>
                            <span><strong>Gamified Activities:</strong> 6 interactive daily behavioural exercises.</span>
                        </li>
                        <li class="flex items-start gap-2.5">
                            <i class="ri-checkbox-circle-fill text-teal-600 text-base mt-0.5 shrink-0"></i>
                            <span><strong>RQ Score Dashboard:</strong> Partial Somatic and Pattern Resonance score metrics.</span>
                        </li>
                    </ul>
                </div>

                <div class="pt-6 border-t border-slate-100">
                    <a href="https://www.yourbeep.com/courses/6a41f00fdc0af597eb154d43/pricing" class="flex items-center justify-center w-full bg-gradient-to-r from-teal-600 to-emerald-600 hover:from-teal-500 hover:to-emerald-500 text-white font-bold py-3.5 px-6 rounded-xl text-xs uppercase tracking-wider shadow-lg shadow-teal-500/20 hover:shadow-teal-500/35 transition transform duration-150 active:scale-95 text-center cursor-pointer">
                        <span>Get Started with the Masterclass</span>
                        <i class="ri-arrow-right-line ml-2"></i>
                    </a>
                </div>

                <!-- Risk Reversal Guarantee Note -->
                <div class="pt-4 border-t border-slate-100/80">
                    <p class="text-[11px] text-slate-450 leading-relaxed font-light font-sans text-center">
                        <strong class="font-bold text-slate-600">🛡️ 100% Risk-Free Guarantee:</strong> If you don't discover at least 3 hidden behavior patterns holding you back in the first 30 minutes, drop us a message for a full refund—no questions asked.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ SECTION -->
    <section class="w-full bg-slate-50 py-20 sm:py-28 relative overflow-hidden border-t border-slate-200/50">
        <!-- Background decorative glows -->
        <div class="absolute top-1/3 left-1/4 w-[400px] h-[400px] bg-rose-500/[0.02] rounded-full blur-[100px] pointer-events-none"></div>
        <div class="absolute bottom-1/3 right-1/4 w-[400px] h-[400px] bg-teal-500/[0.02] rounded-full blur-[100px] pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-start">
                
                <!-- Left Side: Header Copy -->
                <div class="lg:col-span-5 space-y-4 sticky top-8">
                    <span class="text-xs font-bold text-teal-650 uppercase tracking-widest block font-sans">Frequently Asked Questions</span>
                    <h2 class="text-3xl sm:text-4xl font-black text-slate-900 tracking-tight leading-tight font-sans">
                        Got Questions?<br>We’ve Got Answers.
                    </h2>
                    <p class="text-sm sm:text-base text-slate-500 font-light font-sans max-w-md">
                        Everything you need to know about the Behavioural Signal Intelligence (BSI) framework and how yourbeep works.
                    </p>
                </div>

                <!-- Right Side: Accordion List -->
                <div class="lg:col-span-7 space-y-4" x-data="{ activeAccordion: null }">
                    <!-- FAQ 1 -->
                    <div class="border border-slate-200 rounded-2xl bg-white shadow-xs overflow-hidden transition-all duration-300">
                        <button @click="activeAccordion = (activeAccordion === 1 ? null : 1)" 
                                class="w-full p-6 text-left flex justify-between items-center gap-4 hover:bg-slate-50/50 transition">
                            <span class="text-sm sm:text-base font-bold text-slate-900 font-sans">Is this a live masterclass or recorded?</span>
                            <span class="shrink-0 w-8 h-8 rounded-full bg-slate-50 flex items-center justify-center border border-slate-200 transition duration-300"
                                  :class="activeAccordion === 1 ? 'rotate-180 bg-teal-50 border-teal-200 text-teal-655' : 'text-slate-500'">
                                <i class="ri-arrow-down-s-line text-lg"></i>
                            </span>
                        </button>
                        <div x-show="activeAccordion === 1" 
                             x-transition:enter="transition ease-out duration-200"
                             x-transition:enter-start="opacity-0 max-h-0"
                             x-transition:enter-end="opacity-100 max-h-[500px]"
                             x-transition:leave="transition ease-in duration-150"
                             x-transition:leave-start="opacity-100 max-h-[500px]"
                             x-transition:leave-end="opacity-0 max-h-0"
                             class="px-6 pb-6 pt-0 border-t border-slate-100/50">
                            <p class="text-xs sm:text-sm text-slate-600 leading-relaxed font-light font-sans">
                                The BSI Masterclass is pre-recorded, self-paced, and split into digestible 10-minute segments. This allows you to fit it into your schedule without having to attend a live call at a specific time.
                            </p>
                        </div>
                    </div>

                    <!-- FAQ 2 -->
                    <div class="border border-slate-200 rounded-2xl bg-white shadow-xs overflow-hidden transition-all duration-300">
                        <button @click="activeAccordion = (activeAccordion === 2 ? null : 2)" 
                                class="w-full p-6 text-left flex justify-between items-center gap-4 hover:bg-slate-50/50 transition">
                            <span class="text-sm sm:text-base font-bold text-slate-900 font-sans">How long do I get access to the materials?</span>
                            <span class="shrink-0 w-8 h-8 rounded-full bg-slate-50 flex items-center justify-center border border-slate-200 transition duration-300"
                                  :class="activeAccordion === 2 ? 'rotate-180 bg-teal-50 border-teal-200 text-teal-655' : 'text-slate-500'">
                                <i class="ri-arrow-down-s-line text-lg"></i>
                            </span>
                        </button>
                        <div x-show="activeAccordion === 2" 
                             x-transition:enter="transition ease-out duration-200"
                             x-transition:enter-start="opacity-0 max-h-0"
                             x-transition:enter-end="opacity-100 max-h-[500px]"
                             x-transition:leave="transition ease-in duration-150"
                             x-transition:leave-start="opacity-100 max-h-[500px]"
                             x-transition:leave-end="opacity-0 max-h-0"
                             class="px-6 pb-6 pt-0 border-t border-slate-100/50">
                            <p class="text-xs sm:text-sm text-slate-600 leading-relaxed font-light font-sans">
                                You get lifetime access to the masterclass, guided exercises, and the partial Resonance Quotient (RQ) dashboard. You can revisit the tools whenever you feel stuck.
                            </p>
                        </div>
                    </div>

                    <!-- FAQ 3 -->
                    <div class="border border-slate-200 rounded-2xl bg-white shadow-xs overflow-hidden transition-all duration-300">
                        <button @click="activeAccordion = (activeAccordion === 3 ? null : 3)" 
                                class="w-full p-6 text-left flex justify-between items-center gap-4 hover:bg-slate-50/50 transition">
                            <span class="text-sm sm:text-base font-bold text-slate-900 font-sans">How is BSI different from standard mindfulness/meditation?</span>
                            <span class="shrink-0 w-8 h-8 rounded-full bg-slate-50 flex items-center justify-center border border-slate-200 transition duration-300"
                                  :class="activeAccordion === 3 ? 'rotate-180 bg-teal-50 border-teal-200 text-teal-655' : 'text-slate-500'">
                                <i class="ri-arrow-down-s-line text-lg"></i>
                            </span>
                        </button>
                        <div x-show="activeAccordion === 3" 
                             x-transition:enter="transition ease-out duration-200"
                             x-transition:enter-start="opacity-0 max-h-0"
                             x-transition:enter-end="opacity-100 max-h-[500px]"
                             x-transition:leave="transition ease-in duration-150"
                             x-transition:leave-start="opacity-100 max-h-[500px]"
                             x-transition:leave-end="opacity-0 max-h-0"
                             class="px-6 pb-6 pt-0 border-t border-slate-100/50">
                            <p class="text-xs sm:text-sm text-slate-600 leading-relaxed font-light font-sans">
                                Standard mindfulness teaches you to calm yourself *after* you're already stressed. BSI™ (Behavioural Signal Intelligence) is a practical, deconstructed framework that helps you identify *why* you react or get stuck in the first place, giving you a trackable Resonance Quotient (RQ) score to measure your real-time behavioral state.
                            </p>
                        </div>
                    </div>

                    <!-- FAQ 4 -->
                    <div class="border border-slate-200 rounded-2xl bg-white shadow-xs overflow-hidden transition-all duration-300">
                        <button @click="activeAccordion = (activeAccordion === 4 ? null : 4)" 
                                class="w-full p-6 text-left flex justify-between items-center gap-4 hover:bg-slate-50/50 transition">
                            <span class="text-sm sm:text-base font-bold text-slate-900 font-sans">Will this take up a lot of my time?</span>
                            <span class="shrink-0 w-8 h-8 rounded-full bg-slate-50 flex items-center justify-center border border-slate-200 transition duration-300"
                                  :class="activeAccordion === 4 ? 'rotate-180 bg-teal-50 border-teal-200 text-teal-655' : 'text-slate-500'">
                                <i class="ri-arrow-down-s-line text-lg"></i>
                            </span>
                        </button>
                        <div x-show="activeAccordion === 4" 
                             x-transition:enter="transition ease-out duration-200"
                             x-transition:enter-start="opacity-0 max-h-0"
                             x-transition:enter-end="opacity-100 max-h-[500px]"
                             x-transition:leave="transition ease-in duration-150"
                             x-transition:leave-start="opacity-100 max-h-[500px]"
                             x-transition:leave-end="opacity-0 max-h-0"
                             class="px-6 pb-6 pt-0 border-t border-slate-100/50">
                            <p class="text-xs sm:text-sm text-slate-600 leading-relaxed font-light font-sans">
                                Not at all. Juggling work and life is hard enough. BSI™ is designed to be completed in under 10 minutes a day, fitting right into your schedule without causing extra pressure or guilt.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Reusable Footer Livewire Component -->
    <livewire:public.footer />

    <!-- Social Proof Notification Toaster (Bottom-Left popup, Clean Light style with Teal accents) -->
    <div class="fixed bottom-24 md:bottom-6 left-4 md:left-6 right-4 md:right-auto z-50 bg-white border border-teal-500/20 rounded-2xl p-4 sm:p-4.5 shadow-2xl max-w-[calc(100%-2rem)] md:max-w-sm flex items-center gap-3.5 backdrop-blur transition-all duration-500 transform"
        x-show="toastOpen"
        x-transition:enter="transition ease-out duration-500"
        x-transition:enter-start="opacity-0 translate-y-8 scale-95"
        x-transition:enter-end="opacity-100 translate-y-0 scale-100"
        x-transition:leave="transition ease-in duration-300"
        x-transition:leave-start="opacity-100 translate-y-0 scale-100"
        x-transition:leave-end="opacity-0 -translate-y-8 scale-95">

        <div class="w-8.5 h-8.5 rounded-full bg-teal-50 border border-teal-100 flex items-center justify-center text-teal-600 font-bold select-none shrink-0">
            <i class="ri-user-received-2-line text-sm"></i>
        </div>
        <div class="space-y-0.5 pr-2 text-left flex-1 min-w-0">
            <p class="text-xs text-slate-700 font-light truncate">
                <strong class="text-slate-900 font-bold" x-text="toastUser.name"></strong> from <span class="text-teal-700 font-semibold" x-text="toastUser.city"></span>
            </p>
            <p class="text-[10px] text-slate-500 leading-none">
                just purchased the masterclass! <span class="text-slate-400 font-mono" x-text="'(' + toastUser.time_ago + ')'"></span>
            </p>
        </div>
        <button type="button" @click="toastOpen = false" class="text-slate-400 hover:text-slate-650 text-sm font-semibold select-none ml-auto cursor-pointer shrink-0">
            <i class="ri-close-line text-base"></i>
        </button>
    </div>

    <!-- Sticky Bottom Bar (Mobile Conversion Hook - Fixed on Phone Screen) -->
    <div class="fixed bottom-0 left-0 right-0 z-40 bg-white/95 backdrop-blur-md border-t border-slate-200/90 px-4 py-3 shadow-[0_-4px_20px_rgba(0,0,0,0.08)] flex items-center justify-between gap-3 md:hidden">
        <div class="min-w-0 flex-1">
            <span class="block text-[10px] font-extrabold text-rose-600 uppercase tracking-wider flex items-center gap-1">
                <span class="w-1.5 h-1.5 rounded-full bg-rose-500 animate-pulse"></span>
                MASTERCLASS
            </span>
            <span class="block text-xs font-bold text-slate-900 truncate">Enroll For Just ₹299 <span class="line-through text-slate-400 font-normal">₹499</span></span>
        </div>
        <a href="https://www.yourbeep.com/courses/6a41f00fdc0af597eb154d43/pricing" class="bg-gradient-to-r from-teal-600 to-emerald-600 hover:from-teal-500 hover:to-emerald-500 text-white font-extrabold py-2.5 px-5 rounded-xl text-xs uppercase tracking-wider shadow-md active:scale-95 transition-transform shrink-0 whitespace-nowrap">
            Enroll Now
        </a>
    </div>

</div>