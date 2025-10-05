<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Domain Registration</title>
<?php include 'header.php';?>
    <style>
        /* Custom Animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        .animate-fade-in-up {
            animation: fadeInUp 0.8s ease-out;
        }
    </style>
</head>
<body class="bg-gray-50 text-gray-800">



<!-- Futuristic Text Slideshow -->
<section class="bg-blue-700 py-12 text-white text-center">
    <div class="overflow-hidden">
        <div class="slideshow-container">
            <p class="slideshow-text text-2xl md:text-4xl font-bold">
                <span class="animate-slide">Fast & Reliable Domain Search</span>
                <span class="animate-slide">Get Your Dream Domain Now</span>
                <span class="animate-slide">Affordable Pricing, Instant Registration</span>
                <span class="animate-slide">Find Your Identity Online</span>
            </p>
        </div>
    </div>
</section>

<!-- Add this CSS -->
<style>
    .slideshow-container {
        height: 5em; /* Adjust as needed for text size */
        overflow: hidden;
        display: flex;
        justify-content: center;
        align-items: center;
        position: relative;
    }

    .slideshow-text span {
        display: inline-block;
        white-space: nowrap;
        opacity: 0;
        transform: translateY(100%);
        animation: slideUp 6s linear infinite;
    }

    @keyframes slideUp {
        0%, 20% { opacity: 1; transform: translateY(0); }
        25%, 100% { opacity: 0; transform: translateY(-100%); }
    }

    .animate-slide:nth-child(1) { animation-delay: 0s; }
    .animate-slide:nth-child(2) { animation-delay: 1.5s; }
    .animate-slide:nth-child(3) { animation-delay: 3s; }
    .animate-slide:nth-child(4) { animation-delay: 4.5s; }
</style>




<!-- Domain Search Section -->
<section class="py-12 sm:py-16 bg-gradient-to-br from-blue-500 via-blue-600 to-blue-700 text-white relative overflow-hidden">
    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-10">
      <div class="absolute top-0 right-0 w-64 h-64 bg-white rounded-full filter blur-3xl"></div>
      <div class="absolute bottom-0 left-0 w-64 h-64 bg-white rounded-full filter blur-3xl"></div>
    </div>
    
    <div class="container mx-auto text-center px-4 sm:px-6 relative z-10">
        <h2 class="text-3xl sm:text-4xl font-bold mb-4 sm:mb-6 animate-fade-in-down">Find Your Perfect Domain</h2>
        <p class="mb-6 sm:mb-8 text-base sm:text-lg animate-fade-in-up max-w-2xl mx-auto">Secure your desired domain name today and kickstart your online journey!</p>
        <form action="https://fhostbd.com/portal/cart.php?a=add&domain=register" method="post" class="flex flex-col sm:flex-row justify-center items-center gap-3 sm:gap-4 animate-slide-in-left max-w-3xl mx-auto">
            <input 
                type="text" 
                name="query" 
                placeholder="Enter your domain name" 
                class="w-full sm:w-2/3 px-4 sm:px-6 py-3 sm:py-4 rounded-full text-gray-700 focus:outline-none focus:ring-4 focus:ring-yellow-300 transition-all duration-300 shadow-lg"
                required 
            />
            <button 
                type="submit" 
                class="w-full sm:w-auto bg-yellow-500 text-blue-900 px-6 sm:px-8 py-3 sm:py-4 rounded-full font-semibold hover:bg-yellow-600 focus:outline-none focus:ring-4 focus:ring-yellow-300 transition-all duration-300 shadow-lg hover:shadow-xl transform hover:scale-105 whitespace-nowrap">
                Search
            </button>
        </form>
        <p class="mt-4 sm:mt-6 text-xs sm:text-sm text-gray-200">Check availability of .com, .net, .shop, .top, .store, and many more!</p>
    </div>

    <!-- Pricing Section -->
    <div class="container mx-auto mt-8 sm:mt-10 text-center px-4 sm:px-6 relative z-10">
        <h3 class="text-2xl sm:text-3xl font-semibold mb-6 sm:mb-8 animate-fade-in-down">Popular Domain Pricing</h3>
        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-5 gap-3 sm:gap-4 text-gray-800">
            <!-- .com -->
            <div class="bg-white rounded-xl p-4 sm:p-6 shadow-lg transform hover:scale-105 transition-all duration-300 hover:shadow-2xl">
                <h4 class="text-lg sm:text-xl font-bold mb-2 text-blue-700">.com</h4>
                <p class="text-base sm:text-lg font-semibold text-gray-800">$10.99/year</p>
            </div>
            <!-- .net -->
            <div class="bg-white rounded-xl p-4 sm:p-6 shadow-lg transform hover:scale-105 transition-all duration-300 hover:shadow-2xl">
                <h4 class="text-lg sm:text-xl font-bold mb-2 text-blue-700">.net</h4>
                <p class="text-base sm:text-lg font-semibold text-gray-800">$12.99/year</p>
            </div>
            <!-- .shop -->
            <div class="bg-white rounded-xl p-4 sm:p-6 shadow-lg transform hover:scale-105 transition-all duration-300 hover:shadow-2xl">
                <h4 class="text-lg sm:text-xl font-bold mb-2 text-blue-700">.shop</h4>
                <p class="text-base sm:text-lg font-semibold text-gray-800">$5.99/year</p>
            </div>
            <!-- .top -->
            <div class="bg-white rounded-xl p-4 sm:p-6 shadow-lg transform hover:scale-105 transition-all duration-300 hover:shadow-2xl">
                <h4 class="text-lg sm:text-xl font-bold mb-2 text-blue-700">.top</h4>
                <p class="text-base sm:text-lg font-semibold text-gray-800">$3.99/year</p>
            </div>
            <!-- .store -->
            <div class="bg-white rounded-xl p-4 sm:p-6 shadow-lg transform hover:scale-105 transition-all duration-300 hover:shadow-2xl">
                <h4 class="text-lg sm:text-xl font-bold mb-2 text-blue-700">.store</h4>
                <p class="text-base sm:text-lg font-semibold text-gray-800">$9.99/year</p>
            </div>
        </div>
    </div>

    <!-- Decorative Animation Circles -->
    <div class="absolute top-0 left-0 w-48 h-48 bg-yellow-400 rounded-full opacity-20 animate-spin-slow"></div>
    <div class="absolute bottom-0 right-0 w-64 h-64 bg-white rounded-full opacity-10 animate-pulse"></div>
</section>
<!-- Why Choose Us Section -->
<section class="py-12 sm:py-16 bg-gradient-to-r from-gray-50 to-gray-100">
    <div class="container mx-auto text-center px-4 sm:px-6">
        <h2 class="text-2xl sm:text-3xl font-bold mb-6 sm:mb-8 text-gray-800">Why Choose Us</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">
            <div class="p-6 sm:p-8 bg-white shadow-lg rounded-xl hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                <h3 class="text-lg sm:text-xl font-bold mb-2 sm:mb-3 text-blue-600">Reliable Network</h3>
                <p class="text-gray-600 text-sm sm:text-base">Our domain hosting services are powered by a highly reliable network infrastructure.</p>
            </div>
            <div class="p-6 sm:p-8 bg-white shadow-lg rounded-xl hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                <h3 class="text-lg sm:text-xl font-bold mb-2 sm:mb-3 text-blue-600">Competitive Pricing</h3>
                <p class="text-gray-600 text-sm sm:text-base">Get the best deals on domain names with us!</p>
            </div>
            <div class="p-6 sm:p-8 bg-white shadow-lg rounded-xl hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                <h3 class="text-lg sm:text-xl font-bold mb-2 sm:mb-3 text-blue-600">24/7 Support</h3>
                <p>We provide 24/7 support to assist you with any domain-related queries.</p>
            </div>
        </div>
    </div>
</section>

<!-- Contact Us Section -->
<section class="py-12 sm:py-16 bg-gradient-to-r from-blue-500 to-blue-600 text-white">
    <div class="container mx-auto text-center px-4 sm:px-6">
        <h2 class="text-2xl sm:text-3xl font-bold mb-4 sm:mb-6">Need Help?</h2>
        <p class="mb-6 sm:mb-8 text-sm sm:text-base max-w-2xl mx-auto">If you have any questions about domains or need assistance, feel free to contact us.</p>
        <a href="contact.php" class="inline-block bg-yellow-500 text-blue-900 px-6 sm:px-8 py-3 sm:py-4 rounded-full font-semibold hover:bg-yellow-600 focus:ring-4 focus:ring-yellow-300 transition-all duration-300 shadow-lg hover:shadow-xl transform hover:scale-105">
            Contact Us
        </a>
    </div>
</section>
<?php include 'footer.php';?>
</body>
</html>
