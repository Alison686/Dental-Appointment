<header class="fixed top-0 left-0 right-0 bg-white/95 backdrop-blur-sm shadow-sm z-50 transition-all duration-300">
    <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            <!-- Logo -->
            <a href="#" class="flex items-center gap-2 group">
                <div class="w-10 h-10 bg-gradient-to-br from-blue-600 via-purple-600 to-indigo-600 rounded-xl flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg>
                </div>
                <span class="text-xl font-bold text-slate-900 group-hover:text-blue-600 transition-colors">Dental Clinic</span>
            </a>
            
            <!-- Desktop Navigation -->
            <div class="hidden md:flex items-center gap-6">
                <a href="#" class="text-slate-700 hover:text-blue-600 font-medium transition-colors hover:scale-105 transform">Home</a>
                <a href="#services" class="text-slate-700 hover:text-emerald-600 font-medium transition-colors hover:scale-105 transform">Services</a>
                <a href="#" class="text-slate-700 hover:text-purple-600 font-medium transition-colors hover:scale-105 transform">Dental Cases</a>
                <a href="#contact" class="text-slate-700 hover:text-amber-600 font-medium transition-colors hover:scale-105 transform">Contact</a>
                <x-mary-button 
                    label="Book Appointment" 
                    link="{{ route('dashboard') }}" 
                    color="primary"
                    size="sm"
                    class="hover:scale-105 transition-transform duration-300"
                />
            </div>
            
            <!-- Mobile Menu Button -->
            <button class="md:hidden p-2 rounded-lg hover:bg-slate-100 transition-colors">
                <svg class="w-6 h-6 text-slate-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
            </button>
        </div>
    </nav>
</header>
