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
<section class="py-12 bg-gradient-to-r from-blue-500 to-blue-700 text-white relative overflow-hidden">
    <div class="container mx-auto text-center">
        <h2 class="text-4xl font-bold mb-6 animate-fade-in-down">Find Your Perfect Domain</h2>
        <p class="mb-8 text-lg animate-fade-in-up">Secure your desired domain name today and kickstart your online journey!</p>
        <form action="https://fhostbd.com/portal/cart.php?a=add&domain=register" method="post" class="flex justify-center items-center gap-4 animate-slide-in-left">
            <input 
                type="text" 
                name="query" 
                placeholder="Enter your domain name" 
                class="w-2/3 lg:w-1/2 px-4 py-3 rounded-full text-gray-700 focus:outline-none focus:ring-4 focus:ring-blue-300 transition-all duration-300"
                required 
            />
            <button 
                type="submit" 
                class="bg-yellow-500 text-blue-900 px-8 py-3 rounded-full font-semibold hover:bg-yellow-600 focus:outline-none focus:ring-4 focus:ring-yellow-300 transition-all duration-300">
                Search
            </button>
        </form>
        <p class="mt-6 text-sm">Check availability of .com, .net, .shop, .top, .store, and many more!</p>
    </div>

    <!-- Pricing Section -->
    <div class="container mx-auto mt-10 text-center">
        <h3 class="text-3xl font-semibold mb-6 animate-fade-in-down">Popular Domain Pricing</h3>
        <div class="grid grid-cols-1 md:grid-cols-5 gap-4 text-gray-800">
            <!-- .com -->
            <div class="bg-white rounded-lg p-6 shadow-lg transform hover:scale-105 transition-all duration-300">
                <h4 class="text-xl font-bold mb-2 text-blue-700">.com</h4>
                <p class="text-lg font-semibold">$10.99/year</p>
            </div>
            <!-- .net -->
            <div class="bg-white rounded-lg p-6 shadow-lg transform hover:scale-105 transition-all duration-300">
                <h4 class="text-xl font-bold mb-2 text-blue-700">.net</h4>
                <p class="text-lg font-semibold">$12.99/year</p>
            </div>
            <!-- .shop -->
            <div class="bg-white rounded-lg p-6 shadow-lg transform hover:scale-105 transition-all duration-300">
                <h4 class="text-xl font-bold mb-2 text-blue-700">.shop</h4>
                <p class="text-lg font-semibold">$5.99/year</p>
            </div>
            <!-- .top -->
            <div class="bg-white rounded-lg p-6 shadow-lg transform hover:scale-105 transition-all duration-300">
                <h4 class="text-xl font-bold mb-2 text-blue-700">.top</h4>
                <p class="text-lg font-semibold">$3.99/year</p>
            </div>
            <!-- .store -->
            <div class="bg-white rounded-lg p-6 shadow-lg transform hover:scale-105 transition-all duration-300">
                <h4 class="text-xl font-bold mb-2 text-blue-700">.store</h4>
                <p class="text-lg font-semibold">$9.99/year</p>
            </div>
        </div>
    </div>

    <!-- Decorative Animation Circles -->
    <div class="absolute top-0 left-0 w-48 h-48 bg-yellow-400 rounded-full opacity-20 animate-spin-slow"></div>
    <div class="absolute bottom-0 right-0 w-64 h-64 bg-white rounded-full opacity-10 animate-pulse"></div>
</section>
<!-- Why Choose Us Section -->
<section class="py-12 bg-gradient-to-r from-gray-50 to-gray-200">
    <div class="container mx-auto text-center">
        <h2 class="text-3xl font-bold mb-6">Why Choose Us</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="p-6 bg-white shadow-lg rounded-lg">
                <h3 class="text-xl font-bold mb-2 text-blue-500">Reliable Network</h3>
                <p>Our domain hosting services are powered by a highly reliable network infrastructure.</p>
            </div>
            <div class="p-6 bg-white shadow-lg rounded-lg">
                <h3 class="text-xl font-bold mb-2 text-blue-500">Competitive Pricing</h3>
                <p>Get the best deals on domain names with us!</p>
            </div>
            <div class="p-6 bg-white shadow-lg rounded-lg">
                <h3 class="text-xl font-bold mb-2 text-blue-500">24/7 Support</h3>
                <p>We provide 24/7 support to assist you with any domain-related queries.</p>
            </div>
        </div>
    </div>
</section>

<!-- Contact Us Section -->
<section class="py-12 bg-blue-500 text-white">
    <div class="container mx-auto text-center">
        <h2 class="text-3xl font-bold mb-6">Need Help?</h2>
        <p class="mb-8">If you have any questions about domains or need assistance, feel free to contact us.</p>
        <a href="contact.php" class="bg-yellow-500 text-blue-900 px-8 py-3 rounded-full font-semibold hover:bg-yellow-600 focus:ring-4 focus:ring-yellow-300 transition duration-300">
            Contact Us
        </a>
    </div>
</section>
<?php include 'footer.php';?>
</body>
</html>
