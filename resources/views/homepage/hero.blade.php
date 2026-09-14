<section class="relative bg-gradient-to-br from-blue-50 via-purple-50 to-indigo-50 overflow-hidden">
    <div class="absolute inset-0">
        <div class="absolute top-20 right-20 w-96 h-96 bg-blue-200/40 rounded-full blur-3xl animate-float"></div>
        <div class="absolute bottom-20 left-20 w-80 h-80 bg-purple-200/40 rounded-full blur-3xl animate-float-delayed"></div>
        <div class="absolute top-1/2 left-1/2 w-64 h-64 bg-emerald-200/30 rounded-full blur-3xl animate-float"></div>
    </div>
    
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 lg:py-32">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <div class="space-y-8 animate-fade-in">
                <x-mary-badge label="Advanced Dental Care" color="primary" />
                
                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-slate-900 leading-tight">
                    Your Smile Is Our
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 via-purple-600 to-indigo-600"> Priority</span>
                </h1>
                
                <p class="text-lg text-slate-600 leading-relaxed max-w-xl">
                    Experience world-class dental care with our team of expert professionals. 
                    Book appointments online, view our dental cases, and start your journey to a perfect smile.
                </p>
                
                <div class="flex flex-col sm:flex-row gap-4">
                    <x-mary-button 
                        label="Book Appointment" 
                        link="{{ route('dashboard') }}" 
                        color="primary"
                        class="w-full sm:w-auto hover:scale-105 transition-transform duration-300"
                    />
                    <x-mary-button 
                        label="Contact Us" 
                        href="#contact" 
                        color="white"
                        class="w-full sm:w-auto hover:scale-105 transition-transform duration-300"
                    />
                </div>
                
                <div class="flex items-center gap-8 pt-4">
                    <div class="flex -space-x-3">
                        <div class="w-10 h-10 rounded-full bg-blue-600 flex items-center justify-center text-white font-bold border-2 border-white hover:scale-110 transition-transform cursor-pointer">A</div>
                        <div class="w-10 h-10 rounded-full bg-purple-600 flex items-center justify-center text-white font-bold border-2 border-white hover:scale-110 transition-transform cursor-pointer">B</div>
                        <div class="w-10 h-10 rounded-full bg-emerald-600 flex items-center justify-center text-white font-bold border-2 border-white hover:scale-110 transition-transform cursor-pointer">C</div>
                        <div class="w-10 h-10 rounded-full bg-amber-500 flex items-center justify-center text-white font-bold border-2 border-white hover:scale-110 transition-transform cursor-pointer">+5</div>
                    </div>
                    <div>
                        <div class="flex items-center">
                        <div class="text-amber-400">★★★★★</div>
                            <span class="ml-2 text-sm text-slate-600">4.9/5 Rating</span>
                        </div>
                        <p class="text-sm text-slate-500">500+ Happy Patients</p>
                    </div>
                </div>
            </div>
            
            <div class="relative animate-slide-up">
                <x-mary-card class="transform hover:scale-105 transition-all duration-500 shadow-2xl hover:shadow-3xl border-4 border-blue-200 hover:border-blue-400">
                    <div class="aspect-video bg-gradient-to-br from-blue-500 via-purple-500 to-indigo-600 rounded-xl flex items-center justify-center">
                        <svg class="w-24 h-24 text-white/90 animate-pulse" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg>
                    </div>
                    <div class="mt-6 space-y-3">
                        <div class="flex items-center gap-3 group">
                            <svg class="w-6 h-6 text-emerald-600 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                            <span class="text-slate-700 group-hover:text-emerald-600 transition-colors">Expert Dentists</span>
                        </div>
                        <div class="flex items-center gap-3 group">
                            <svg class="w-6 h-6 text-amber-600 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                            <span class="text-slate-700 group-hover:text-amber-600 transition-colors">Modern Equipment</span>
                        </div>
                        <div class="flex items-center gap-3 group">
                            <svg class="w-6 h-6 text-rose-600 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                            <span class="text-slate-700 group-hover:text-rose-600 transition-colors">24/7 Support</span>
                        </div>
                    </div>
                </x-mary-card>
            </div>
        </div>
    </div>
</section>
