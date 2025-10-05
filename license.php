
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>License Sales</title>
    
    
    <?php
// license.php

// Include common header and configuration files
include_once 'header.php'; // Header includes navigation
?>

<body class="bg-gray-100">


<section class="bg-white py-12 sm:py-16">
  <div class="container mx-auto flex flex-col lg:flex-row items-center justify-between gap-8 px-4 sm:px-6">
    <!-- Text Content -->
    <div class="text-center lg:text-left lg:w-1/2">
      <h1 class="text-3xl sm:text-4xl font-bold text-gray-800 mb-4 sm:mb-6">FastHostBd by RC Projects</h1>
      <p class="text-gray-600 text-base sm:text-lg mb-4 sm:mb-6 leading-relaxed">
        Best licensing system provider since 2017, stable and secure services designed by RC projects.
        We provide cheap licenses such as cPanel, LiteSpeed, CloudLinux, etc. We also provide a reseller
        program, WHMCS module, API, and a fully manageable licensing panel.
      </p>
      <a href="#pricing" class="inline-block px-6 sm:px-8 py-3 sm:py-4 bg-gray-800 text-white rounded-lg shadow-lg hover:bg-gray-900 transition-all duration-300 hover:shadow-xl transform hover:scale-105 text-sm sm:text-base font-semibold">
        See pricing
      </a>
    </div>

    <!-- Illustration -->
    <div class="mt-10 lg:mt-0 lg:w-1/2 flex justify-center">
      <img src="images/group.png" alt="Licenses Illustration" class="w-full max-w-md">
    </div>
  </div>

  <!-- Logos -->
  <div class="mt-12 sm:mt-16 flex flex-wrap justify-center items-center gap-4 sm:gap-6 px-4 sm:px-6">
    <img src="images/imunify-1.png" alt="Imunify360" class="w-20 sm:w-24 md:w-28 h-auto hover:scale-110 transition-transform duration-300">
    <img src="images/cloudlinux-1-1.png" alt="CloudLinux" class="w-20 sm:w-24 md:w-28 h-auto hover:scale-110 transition-transform duration-300">
    <img src="images/lite1-1-1-1.png" alt="LiteSpeed" class="w-20 sm:w-24 md:w-28 h-auto hover:scale-110 transition-transform duration-300">
    <img src="images/cpanel-dedicated-1-1.png" alt="cPanel" class="w-20 sm:w-24 md:w-28 h-auto hover:scale-110 transition-transform duration-300">
    <img src="images/plesk-1-1.png" alt="Plesk" class="w-20 sm:w-24 md:w-28 h-auto hover:scale-110 transition-transform duration-300">
    <img src="images/softaculous-1.png" alt="Softaculous" class="w-20 sm:w-24 md:w-28 h-auto hover:scale-110 transition-transform duration-300">
  </div>
</section>


<!-- Header Section -->
<section class="bg-gradient-to-r from-blue-600 to-blue-700 py-10 sm:py-12">
    <div class="container mx-auto text-center px-4 sm:px-6">
        <h1 class="text-3xl sm:text-4xl font-bold text-white">Licenses for Your Business</h1>
        <p class="text-base sm:text-lg text-gray-200 mt-3 sm:mt-4 max-w-3xl mx-auto">Get the best licenses like cPanel, CloudLinux, LiteSpeed, and more at competitive prices!</p>
    </div>
</section>

<section class="bg-gray-100 py-12 sm:py-16" id="pricing">
  <div class="container mx-auto px-4 sm:px-6">
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">
      <!-- Pricing Card 1 -->
      <div class="bg-white shadow-xl rounded-xl p-5 sm:p-6 text-center hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
        <img src="images/lite1-1-1-1.png" alt="LiteSpeed" class="mx-auto mb-4 w-48 sm:w-60 h-auto">
        <h3 class="text-xl sm:text-2xl font-bold mb-2 text-gray-800">$5 <span class="text-sm font-normal text-gray-600">/Per Month</span></h3>
        <p class="text-gray-600 mb-4 text-sm sm:text-base">2, 4, & 8 X worker available</p>
        <ul class="text-left text-gray-600 mb-6 space-y-2 text-sm sm:text-base">
          <li>✔️ one command installation</li>
          <li>✔️ real-time updates</li>
          <li>✔️ free license IP change</li>
          <li>✔️ free technical support</li>
          <li>✔️ cheap LiteSpeed license</li>
        </ul>
        <a href="#" class="block w-full bg-gray-800 text-white py-2 sm:py-3 rounded-lg hover:bg-gray-900 transition-all duration-300 font-semibold shadow-md hover:shadow-lg text-sm sm:text-base">Order License</a>
      </div>

      <!-- Pricing Card 2 (Popular) -->
      <div class="bg-gradient-to-br from-gray-800 to-gray-900 text-white shadow-xl rounded-xl p-5 sm:p-6 text-center relative hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
        <span class="absolute top-2 right-2 bg-yellow-500 text-gray-900 text-xs font-bold px-2 sm:px-3 py-1 rounded-lg">POPULAR</span>
        <img src="images/cpanel-dedicated-1-1.png" alt="cPanel" class="mx-auto mb-4 w-48 sm:w-60 h-auto">
        <h3 class="text-xl sm:text-2xl font-bold mb-2">$5 <span class="text-sm font-normal text-gray-300">/Per Month</span></h3>
        <p class="text-gray-300 mb-4 text-sm sm:text-base">+ Free Softaculous, SitePad, and FleetSSL</p>
        <ul class="text-left text-gray-300 mb-6 space-y-2 text-sm sm:text-base">
          <li>✔️ one command installation</li>
          <li>✔️ real-time updates</li>
          <li>✔️ free license IP change</li>
          <li>✔️ free technical support</li>
          <li>✔️ cheap cPanel license</li>
        </ul>
        <a href="#" class="block w-full bg-white text-gray-900 py-2 sm:py-3 rounded-lg hover:bg-gray-100 transition-all duration-300 font-semibold shadow-md hover:shadow-lg text-sm sm:text-base">Order License</a>
      </div>

      <!-- Pricing Card 3 -->
      <div class="bg-white shadow-xl rounded-xl p-5 sm:p-6 text-center hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
        <img src="images/cloudlinux-1-1.png" alt="CloudLinux" class="mx-auto mb-4 w-48 sm:w-60 h-auto">
        <h3 class="text-xl sm:text-2xl font-bold mb-2 text-gray-800">$5 <span class="text-sm font-normal text-gray-600">/Per Month</span></h3>
        <ul class="text-left text-gray-600 mb-6 space-y-2 text-sm sm:text-base mt-8">
          <li>✔️ one command installation</li>
          <li>✔️ real-time updates</li>
          <li>✔️ free license IP change</li>
          <li>✔️ free technical support</li>
          <li>✔️ cheap CloudLinux license</li>
        </ul>
        <a href="#" class="block w-full bg-black text-white py-2 rounded-md">Order License</a>
      </div>

      <!-- Pricing Card 4 -->
      <div class="bg-white shadow-md rounded-lg p-6 text-center">
        <img src="images/plesk-1-1.png" alt="Plesk" class="mx-auto mb-4 w-60 h-25">
        <h3 class="text-2xl font-bold mb-2">$3 <span class="text-sm font-normal">/Per Month</span></h3>
        <ul class="text-left text-gray-600 mb-6">
          <li>✔️ one command installation</li>
          <li>✔️ real-time updates</li>
          <li>✔️ free license IP change</li>
          <li>✔️ free technical support</li>
          <li>✔️ cheap Plesk license</li>
        </ul>
        <a href="#" class="block w-full bg-black text-white py-2 rounded-md">Order License</a>
      </div>

      <!-- Pricing Card 5 -->
      <div class="bg-white shadow-md rounded-lg p-6 text-center">
        <img src="images/imunify-1.png" alt="Imunify360" class="mx-auto mb-4 w-60 h-30">
        <h3 class="text-2xl font-bold mb-2">$2 <span class="text-sm font-normal">/Per Month</span></h3>
        <ul class="text-left text-gray-600 mb-6">
          <li>✔️ one command installation</li>
          <li>✔️ real-time updates</li>
          <li>✔️ free license IP change</li>
          <li>✔️ free technical support</li>
          <li>✔️ cheap Imunify360 license</li>
        </ul>
        <a href="#" class="block w-full bg-black text-white py-2 rounded-md">Order License</a>
      </div>

      <!-- Pricing Card 6 -->
      <div class="bg-white shadow-md rounded-lg p-6 text-center">
        <img src="images/softaculous-1.png" alt="Softaculous" class="mx-auto mb-4 w-60 h-25">
        <h3 class="text-2xl font-bold mb-2">$2 <span class="text-sm font-normal">/Per Month</span></h3>
        <ul class="text-left text-gray-600 mb-6">
          <li>✔️ one command installation</li>
          <li>✔️ real-time updates</li>
          <li>✔️ free license IP change</li>
          <li>✔️ free technical support</li>
          <li>✔️ cheap Softaculous license</li>
        </ul>
        <a href="#" class="block w-full bg-black text-white py-2 rounded-md">Order License</a>
      </div>
    </div>

    <!-- Additional Button -->
    <div class="text-center mt-8 sm:mt-10">
      <a href="#" class="inline-block px-6 sm:px-8 py-3 sm:py-4 bg-gray-800 text-white rounded-lg shadow-lg hover:bg-gray-900 transition-all duration-300 hover:shadow-xl transform hover:scale-105 text-sm sm:text-base font-semibold">Other licenses</a>
    </div>
  </div>
</section>





    <?php include_once 'footer.php'; ?> <!-- Footer -->
</body>
</html>
