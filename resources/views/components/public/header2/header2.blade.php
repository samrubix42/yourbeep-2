<div x-data="{ 
    hours: 23,
    minutes: 59, 
    seconds: 59,
    initTimer() {
        let expiry = localStorage.getItem('yourbeep_countdown_expiry');
        const now = Date.now();
        const duration = (23 * 3600 + 59 * 60 + 59) * 1000;

        if (!expiry || parseInt(expiry) < now) {
            expiry = now + duration;
            localStorage.setItem('yourbeep_countdown_expiry', expiry);
        }

        const update = () => {
            const timeLeft = parseInt(expiry) - Date.now();
            if (timeLeft <= 0) {
                const newExpiry = Date.now() + duration;
                localStorage.setItem('yourbeep_countdown_expiry', newExpiry);
                this.hours = 23;
                this.minutes = 59;
                this.seconds = 59;
            } else {
                const totalSeconds = Math.floor(timeLeft / 1000);
                this.hours = Math.floor(totalSeconds / 3600);
                this.minutes = Math.floor((totalSeconds % 3600) / 60);
                this.seconds = totalSeconds % 60;
            }
        };

        update();
        setInterval(update, 1000);
    }
}" x-init="initTimer()" class="w-full">

    <!-- Top Urgency Banner (Sleek Dark Theme for high contrast and modern look) -->
    <div class="fixed top-0 left-0 right-0 z-50 bg-slate-900 border-b border-slate-800 px-3 sm:px-4 py-2 sm:py-2.5 text-center flex items-center justify-center gap-1.5 sm:gap-3 shadow-md">
        <span class="inline-flex items-center gap-1 sm:gap-1.5 text-[11px] sm:text-sm font-extrabold text-white tracking-wide truncate">
            <span class="animate-bounce shrink-0 text-xs sm:text-sm">🔥</span>
            <span class="truncate">Special Launch Offer: <span class="line-through text-slate-400">$15</span> <span class="text-rose-450">$9</span> (Save 40% Today) &nbsp;|&nbsp; Offer Closes In:</span>
        </span>
        <div class="inline-flex items-center gap-1 sm:gap-1.5 text-rose-400 font-mono font-bold text-[11px] sm:text-xs bg-rose-500/10 px-2 sm:px-2.5 py-0.5 rounded border border-rose-500/25 shadow-sm whitespace-nowrap shrink-0">
            <i class="ri-time-line text-[11px] sm:text-xs"></i>
            <span x-text="String(hours).padStart(2, '0')">23</span>
            <span class="animate-pulse">:</span>
            <span x-text="String(minutes).padStart(2, '0')">59</span>
            <span class="animate-pulse">:</span>
            <span x-text="String(seconds).padStart(2, '0')">59</span>
        </div>
    </div>

    <!-- Navigation Header -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-12 sm:pt-14 pb-2 sm:pb-3">
        <div class="flex items-center justify-between border-b border-slate-100 pb-2 sm:pb-3">
            <div class="flex items-center gap-2 sm:gap-4">
                <!-- Black text logo renders perfectly on this white background -->
                <img src="/app_logo.png" alt="Yourbeep Logo" class="h-8 sm:h-11 w-auto object-contain transition-opacity duration-300 hover:opacity-85">
            </div>
            <div class="flex items-center gap-2 sm:gap-4">
                <span class="hidden md:inline-flex items-center gap-1.5 text-xs text-slate-500 bg-slate-50 border border-slate-200/80 px-3.5 py-1.5 rounded-full shadow-xs">
                    <i class="ri-shield-check-fill text-teal-600 text-sm"></i>
                    Verified Course Page
                </span>
                <!-- Enroll Now button redirects directly to the main courses checkout page -->
                <a href="https://www.yourbeep.com/courses/6a41f00fdc0af597eb154d43/pricing" class="text-xs sm:text-sm font-bold text-white bg-gradient-to-r from-teal-600 to-emerald-600 hover:from-teal-500 hover:to-emerald-500 px-4 sm:px-5 py-2 sm:py-2.5 rounded-xl shadow-md hover:shadow-lg hover:shadow-teal-500/20 transition-all duration-200 hover:-translate-y-0.5 active:scale-95 whitespace-nowrap">
                    Enroll Now
                </a>
            </div>
        </div>
    </div>

</div>