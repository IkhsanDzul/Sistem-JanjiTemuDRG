<!-- FAQ Section -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <!-- Left Column - FAQ Navigation & Contact -->
            <div>
                <h2 class="text-4xl font-bold text-dental-teal mb-8">
                    Mulai membuat janji temu
                </h2>
                
                <!-- FAQ Navigation -->
                <div class="space-y-4 mb-8">
                    <a href="#general" class="block text-base text-gray-700 hover:text-dental-teal transition-colors py-2 border-b border-gray-200">
                        General
                    </a>
                    <a href="#security" class="block text-base text-gray-700 hover:text-dental-teal transition-colors py-2 border-b border-gray-200">
                        Security & Privacy
                    </a>
                    <a href="#account" class="block text-base text-gray-700 hover:text-dental-teal transition-colors py-2 border-b border-gray-200">
                        Account Settings
                    </a>
                    <a href="#payment" class="block text-base text-gray-700 hover:text-dental-teal transition-colors py-2 border-b border-gray-200">
                        Payment
                    </a>
                    <a href="#pricing" class="block text-base text-gray-700 hover:text-dental-teal transition-colors py-2 border-b border-gray-200">
                        Pricing
                    </a>
                </div>

                <!-- Contact Information -->
                <div class="bg-gray-50 p-6 rounded-lg">
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">
                        Masih ada pertanyaan?
                    </h3>
                    <p class="text-gray-600 mb-4">
                        Hubungi tim customer service kami untuk mendapatkan bantuan lebih lanjut.
                    </p>
                    <p class="text-dental-teal font-semibold">
                        📞 0800 1234 5678
                    </p>
                </div>
            </div>

            <!-- Right Column - FAQ Items -->
            <div>
                <h3 class="text-2xl font-semibold text-gray-800 mb-6">General</h3>
                
                <!-- FAQ Accordion -->
                <div class="space-y-4">
                    <!-- FAQ Item 1 -->
                    <div class="border border-gray-200 rounded-lg">
                        <button class="w-full px-6 py-4 text-left flex items-center justify-between hover:bg-gray-50 transition-colors" onclick="toggleFAQ('faq1')">
                            <div class="flex items-center">
                                <div class="w-8 h-8 bg-green-100 rounded-full flex items-center justify-center mr-4">
                                    <span class="text-green-600 font-bold">?</span>
                                </div>
                                <span class="text-gray-800 font-medium">Bagaimana cara membuat janji temu?</span>
                            </div>
                            <svg id="faq1-icon" class="w-5 h-5 text-gray-500 transform transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div id="faq1-content" class="px-6 pb-4 hidden">
                            <div class="ml-12">
                                <p class="text-gray-600">
                                    Membuat janji temu sangat mudah! Cukup pilih dokter yang Anda inginkan, 
                                    tentukan tanggal dan waktu yang sesuai, lalu konfirmasi booking Anda. 
                                    Sistem akan mengirimkan konfirmasi melalui email dan SMS.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- FAQ Item 2 -->
                    <div class="border border-gray-200 rounded-lg">
                        <button class="w-full px-6 py-4 text-left flex items-center justify-between hover:bg-gray-50 transition-colors" onclick="toggleFAQ('faq2')">
                            <div class="flex items-center">
                                <div class="w-8 h-8 bg-green-100 rounded-full flex items-center justify-center mr-4">
                                    <span class="text-green-600 font-bold">?</span>
                                </div>
                                <span class="text-gray-800 font-medium">Apakah ada biaya untuk menggunakan layanan ini?</span>
                            </div>
                            <svg id="faq2-icon" class="w-5 h-5 text-gray-500 transform transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div id="faq2-content" class="px-6 pb-4 hidden">
                            <div class="ml-12">
                                <p class="text-gray-600">
                                    Layanan booking janji temu kami gratis untuk pasien. 
                                    Anda hanya membayar biaya konsultasi sesuai dengan tarif dokter yang dipilih.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- FAQ Item 3 -->
                    <div class="border border-gray-200 rounded-lg">
                        <button class="w-full px-6 py-4 text-left flex items-center justify-between hover:bg-gray-50 transition-colors" onclick="toggleFAQ('faq3')">
                            <div class="flex items-center">
                                <div class="w-8 h-8 bg-green-100 rounded-full flex items-center justify-center mr-4">
                                    <span class="text-green-600 font-bold">?</span>
                                </div>
                                <span class="text-gray-800 font-medium">Bagaimana cara membatalkan janji temu?</span>
                            </div>
                            <svg id="faq3-icon" class="w-5 h-5 text-gray-500 transform transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div id="faq3-content" class="px-6 pb-4 hidden">
                            <div class="ml-12">
                                <p class="text-gray-600">
                                    Anda dapat membatalkan janji temu minimal 24 jam sebelum waktu yang dijadwalkan 
                                    melalui dashboard akun Anda atau menghubungi customer service kami.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- FAQ Item 4 -->
                    <div class="border border-gray-200 rounded-lg">
                        <button class="w-full px-6 py-4 text-left flex items-center justify-between hover:bg-gray-50 transition-colors" onclick="toggleFAQ('faq4')">
                            <div class="flex items-center">
                                <div class="w-8 h-8 bg-green-100 rounded-full flex items-center justify-center mr-4">
                                    <span class="text-green-600 font-bold">?</span>
                                </div>
                                <span class="text-gray-800 font-medium">Apakah data pribadi saya aman?</span>
                            </div>
                            <svg id="faq4-icon" class="w-5 h-5 text-gray-500 transform transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div id="faq4-content" class="px-6 pb-4 hidden">
                            <div class="ml-12">
                                <p class="text-gray-600">
                                    Ya, kami menggunakan enkripsi tingkat tinggi untuk melindungi data pribadi Anda. 
                                    Semua informasi medis dan pribadi disimpan dengan standar keamanan internasional.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
function toggleFAQ(faqId) {
    const content = document.getElementById(faqId + '-content');
    const icon = document.getElementById(faqId + '-icon');
    
    if (content.classList.contains('hidden')) {
        content.classList.remove('hidden');
        icon.style.transform = 'rotate(180deg)';
    } else {
        content.classList.add('hidden');
        icon.style.transform = 'rotate(0deg)';
    }
}
</script>
