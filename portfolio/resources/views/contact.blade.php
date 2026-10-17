@extends('layout')

@section('title', 'Contact - Get In Touch')

@section('content')
<section class="py-16">
    <div class="max-w-4xl mx-auto px-4">
        <h1 class="text-5xl font-bold text-center mb-4 text-white animate-on-scroll">Get In Touch</h1>
        <p class="text-center text-gray-400 mb-12 text-lg animate-on-scroll delay-200">
            Feel free to reach out through any of the channels below!
        </p>

        <div class="max-w-md mx-auto">
            <!-- Contact Info -->
            <div class="animate-on-scroll delay-300">
                <h2 class="text-2xl font-bold mb-6 text-white">Contact Information</h2>

                <div class="gradient-border p-4 mb-6 hover-lift">
                    <div class="flex items-center gap-3">
                        <i class="fas fa-envelope text-blue-500 text-2xl"></i>
                        <div>
                            <h3 class="text-lg font-semibold text-white">Email</h3>
                            <p class="text-gray-400">mhakurniawan222@gmail.com</p>
                        </div>
                    </div>
                </div>

                <div class="gradient-border p-4 mb-6 hover-lift">
                    <h3 class="text-lg font-semibold flex items-center gap-3 mb-2 text-white">
                        <i class="fas fa-phone text-blue-500 text-2xl"></i>
                        Phone
                    </h3>
                    <p class="text-gray-400">+62 896 2901 8837</p>
                </div>

                <div class="gradient-border p-4 mb-6 hover-lift">
                    <h3 class="text-lg font-semibold flex items-center gap-3 mb-2 text-white">
                        <i class="fas fa-map-marker-alt text-blue-500 text-2xl"></i>
                        Location
                    </h3>
                    <p class="text-gray-400">Jl. May Zen Lr. Iwari 1 No.99, Palembang</p>
                </div>

                <div>
                    <h3 class="text-lg font-semibold mb-4 text-white">Follow Me</h3>
                    <div class="flex gap-4">
                        <a href="https://github.com/Mkurniawan4010" target="_blank" rel="noopener noreferrer" class="text-3xl text-gray-500 hover:text-blue-400 transition hover-lift">
                            <i class="fab fa-github"></i>
                        </a>
                        <a href="https://www.linkedin.com/in/m-kurniawan-kurniawan-7abaa0407/" target="_blank" rel="noopener noreferrer" class="text-3xl text-gray-500 hover:text-blue-400 transition hover-lift">
                            <i class="fab fa-linkedin"></i>
                        </a>
                        <a href="https://x.com/Kurnia1_444?s=20" target="_blank" rel="noopener noreferrer" class="text-3xl text-gray-500 hover:text-blue-400 transition hover-lift">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="https://www.instagram.com/k_wwan4/?utm_source=ig_web_button_share_sheet" target="_blank" rel="noopener noreferrer" class="text-3xl text-gray-500 hover:text-pink-400 transition hover-lift">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection