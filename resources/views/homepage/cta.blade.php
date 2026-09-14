<section class="py-20 bg-white relative overflow-hidden"> 
    <div class="absolute inset-0 bg-gradient-to-r from-emerald-50 to-teal-50"></div> 
     
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8"> 
        <x-mary-card class="bg-gradient-to-r from-emerald-600 to-teal-500 text-white rounded-3xl shadow-2xl hover:shadow-3xl transition-all duration-500 transform hover:-translate-y-1 border-4 border-emerald-200"> 
            <div class="p-12 text-center"> 
                <h2 class="text-3xl sm:text-4xl font-bold text-white mb-4">
                    Ready to Transform Your Smile?
                </h2> 
                
                <p class="text-xl text-emerald-50 mb-8 max-w-2xl mx-auto">
                    Book your appointment today and take the first step towards a healthier, more beautiful smile.
                </p> 
                 
                <div class="flex flex-col sm:flex-row gap-4 justify-center"> 
                    <x-mary-button  
                        label="Book Appointment Now"  
                        link="{{ route('dashboard') }}"  
                        color="white" 
                        class="w-full sm:w-auto hover:scale-105 transition-transform duration-300" 
                    /> 
                    
                    <x-mary-button  
                        label="+91 6009321822"  
                        href="tel:+916009321822"  
                        color="white" 
                        class="w-full sm:w-auto hover:scale-105 transition-transform duration-300" 
                    /> 
                </div> 
            </div> 
        </x-mary-card> 
    </div> 
</section>