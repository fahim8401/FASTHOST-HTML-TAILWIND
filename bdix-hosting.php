<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>BDIX Hosting</title>


    <?php include 'header.php';?>
  
  <!-- 🏠 3. Example Content Below Navbar -->

  <!-- 🏷 Hero Section -->
  <section id="home" class="bg-gradient-to-br from-green-600 via-green-700 to-green-800 text-white py-16 sm:py-20 lg:py-24 relative overflow-hidden">
    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-10">
      <div class="absolute top-0 right-0 w-64 h-64 bg-white rounded-full filter blur-3xl"></div>
      <div class="absolute bottom-0 left-0 w-64 h-64 bg-white rounded-full filter blur-3xl"></div>
    </div>
    
    <div class="container mx-auto px-4 sm:px-6 text-center relative z-10">
      <h1 class="text-3xl sm:text-4xl md:text-5xl font-bold mb-4 sm:mb-6">Reliable BDIX Hosting Services</h1>
      <p class="text-base sm:text-lg md:text-xl mb-6 sm:mb-8 max-w-3xl mx-auto">Fast, Secure, and Affordable Hosting Solutions Tailored for Your Needs.</p>
      <a href="#pricing" class="inline-block bg-white text-green-600 px-6 sm:px-8 py-3 sm:py-4 rounded-full font-semibold hover:bg-gray-100 transition-all duration-300 shadow-lg hover:shadow-xl transform hover:scale-105 text-sm sm:text-base">Get Started</a>
    </div>
  </section>
  <!-- End Hero Section -->

  <!-- 🏷 Features Section -->
  <section id="services" class="py-12 sm:py-16 bg-gray-50">
    <div class="container mx-auto px-4 sm:px-6">
      <div class="text-center mb-8 sm:mb-12">
        <h2 class="text-3xl sm:text-4xl font-extrabold text-gray-800 mb-3 sm:mb-4">Why Choose BDIX Hosting?</h2>
        <p class="text-gray-600 text-base sm:text-lg max-w-3xl mx-auto">Experience unmatched performance and support with our hosting services.</p>
      </div>
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">
        <!-- Feature 1 -->
        <div class="bg-white rounded-xl shadow-lg p-6 sm:p-8 hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
          <div class="text-green-600 mb-4 flex justify-center">
            <i class="fas fa-shield-alt fa-3x"></i>
          </div>
          <h3 class="text-xl sm:text-2xl font-semibold mb-2 sm:mb-3 text-center text-gray-800">Secure Hosting</h3>
          <p class="text-gray-600 text-center text-sm sm:text-base">Advanced security measures to protect your website from threats.</p>
        </div>
        <!-- End Feature 1 -->

        <!-- Feature 2 -->
        <div class="bg-white rounded-xl shadow-lg p-6 sm:p-8 hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
          <div class="text-green-600 mb-4 flex justify-center">
            <i class="fas fa-tachometer-alt fa-3x"></i>
          </div>
          <h3 class="text-xl sm:text-2xl font-semibold mb-2 sm:mb-3 text-center text-gray-800">High Performance</h3>
          <p class="text-gray-600 text-center text-sm sm:text-base">Optimized servers ensure your website runs smoothly and efficiently.</p>
        </div>
        <!-- End Feature 2 -->

        <!-- Feature 3 -->
        <div class="bg-white rounded-xl shadow-lg p-6 sm:p-8 hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
          <div class="text-green-600 mb-4 flex justify-center">
            <i class="fas fa-headset fa-3x"></i>
          </div>
          <h3 class="text-xl sm:text-2xl font-semibold mb-2 sm:mb-3 text-center text-gray-800">24x7 Support</h3>
          <p class="text-gray-600 text-center text-sm sm:text-base">Our expert team is always available to assist you with any issues.</p>
        </div>
        <!-- End Feature 3 -->
      </div>
    </div>
  </section>
  <!-- End Features Section -->
<!-- 🏷 Pricing Section -->
  <section class="py-12 sm:py-16 bg-gray-100" id="pricing">
    <div class="container mx-auto px-4 sm:px-6">
      <!-- Section Title -->
      <div class="text-center mb-8 sm:mb-12">
        <h2 class="text-3xl sm:text-4xl font-extrabold text-gray-800 mb-3 sm:mb-4">Our Hosting Plans</h2>
        <p class="text-gray-600 text-base sm:text-lg">Choose the perfect plan that fits your needs.</p>
      </div>

      <!-- Plans Wrapper -->
      <div id="pricing-plans" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 sm:gap-8">
        
        <!-- Card 1: 2GB cPanel Hosting -->
        <div class="bg-white border border-gray-200 rounded-lg shadow-lg hover:shadow-2xl transition-shadow duration-300 flex flex-col relative">
          <!-- Badge / Ribbon -->
          <div class="absolute top-0 right-0 bg-blue-600 text-white text-xs px-3 py-1 rounded-bl-lg">
            Popular
          </div>

          <!-- Plan Content -->
          <div class="p-6 flex flex-col flex-grow">
            <!-- Plan Title & Icon -->
            <div class="flex items-center mb-4">
              <!-- Replace with relevant icon -->
              <svg class="w-8 h-8 text-blue-600 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-6a2 2 0 012-2h2a2 2 0 012 2v6m-6 0h6" />
              </svg>
              <h3 class="text-2xl font-semibold text-gray-800">cPanel Basic</h3>
            </div>

            <!-- Price -->
            <div class="mb-4">
              <span class="text-5xl font-extrabold text-green-600">৳1,695</span>
              <span class="text-2xl font-bold text-green-600">($14.45)</span>
            </div>

            <!-- Billing Cycle Label -->
            <p class="text-center text-sm text-gray-500 mb-6">- Per Year -</p>

            <!-- Features List -->
            <ul class="text-gray-600 space-y-2 mb-6">
              <li class="flex items-center">
                <svg class="w-5 h-5 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                <strong>500 MB NVMe</strong> SSD Storage
              </li>
              <li class="flex items-center">
                <svg class="w-5 h-5 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 016-3.464A4 4 0 0117 12h1a3 3 0 010 6H7a4 4 0 01-4-4z" />
                </svg>
                <strong>40 GB</strong> Traffic/month
              </li>
              <li class="flex items-center">
                <svg class="w-5 h-5 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                </svg>
                <strong>1 CPU</strong> Core Limit
              </li>
              <li class="flex items-center">
                <svg class="w-5 h-5 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-3-3v6" />
                </svg>
                <strong>512 MB</strong> RAM
              </li>
              <li class="flex items-center">
                <svg class="w-5 h-5 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                <strong>20 EP & 100 NP</strong>
              </li>
              <li class="flex items-center">
                <svg class="w-5 h-5 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                </svg>
                <strong>20 MB/s</strong> I/O
              </li>
              <li class="flex items-center">
                <svg class="w-5 h-5 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                </svg>
                <strong>MariaDB</strong>
              </li>
              <li class="flex items-center">
                <svg class="w-5 h-5 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8h18M3 16h18" />
                </svg>
                <strong>Basic Email</strong> Features
              </li>
              <li class="flex items-center">
                <svg class="w-5 h-5 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26L21 8" />
                </svg>
                <strong>Single Domain</strong> Hosting
              </li>
              <li class="flex items-center">
                <svg class="w-5 h-5 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 2L15 8l6 1-4 5 1 6-5-3-5 3 1-6-4-5 6-1z" />
                </svg>
                <strong>CloudLinux OS</strong>
              </li>
              <li class="flex items-center">
                <svg class="w-5 h-5 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H3" />
                </svg>
                <strong>BD/SG Data</strong> Center
              </li>
              <li class="flex items-center">
                <svg class="w-5 h-5 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 17l4-4-4-4m8 8v-8" />
                </svg>
                <strong>24x7</strong> Online Support
              </li>
            </ul>
          </div>

          <!-- Order Button -->
          <div class="text-center mt-auto">
            <a 
              href="#order-now" 
              class="bg-gradient-to-r from-green-500 to-green-700 hover:from-green-600 hover:to-green-800 text-white px-4 py-2 rounded-md font-semibold shadow-lg transform hover:scale-105 transition duration-300 flex items-center justify-center"
              aria-label="Order cPanel Basic Hosting"
            >
              <i class="fas fa-shopping-cart mr-2"></i> Order Now
            </a>
          </div>
        </div>
        <!-- End Card 1 -->

        <!-- Card 2: 5GB cPanel Hosting -->
        <div class="bg-white border border-gray-200 rounded-lg shadow-lg hover:shadow-2xl transition-shadow duration-300 flex flex-col relative">
          <!-- Badge / Ribbon -->
          <div class="absolute top-0 right-0 bg-blue-600 text-white text-xs px-3 py-1 rounded-bl-lg">
            Popular
          </div>

          <!-- Plan Content -->
          <div class="p-6 flex flex-col flex-grow">
            <!-- Plan Title & Icon -->
            <div class="flex items-center mb-4">
              <!-- Replace with relevant icon -->
              <svg class="w-8 h-8 text-blue-600 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-6a2 2 0 012-2h2a2 2 0 012 2v6m-6 0h6" />
              </svg>
              <h3 class="text-2xl font-semibold text-gray-800">cPanel Advanced</h3>
            </div>

            <!-- Price -->
            <div class="mb-4">
              <span class="text-5xl font-extrabold text-green-600">৳2,995</span>
              <span class="text-2xl font-bold text-green-600">($25.50)</span>
            </div>

            <!-- Billing Cycle Label -->
            <p class="text-center text-sm text-gray-500 mb-6">- Per Year -</p>

            <!-- Features List -->
            <ul class="text-gray-600 space-y-2 mb-6">
              <li class="flex items-center">
                <svg class="w-5 h-5 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                <strong>5GB NVMe</strong> SSD Storage
              </li>
              <li class="flex items-center">
                <svg class="w-5 h-5 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 016-3.464A4 4 0 0117 12h1a3 3 0 010 6H7a4 4 0 01-4-4z" />
                </svg>
                <strong>75 GB</strong> Traffic/month
              </li>
              <li class="flex items-center">
                <svg class="w-5 h-5 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                </svg>
                <strong>2 CPU</strong> Cores
              </li>
              <li class="flex items-center">
                <svg class="w-5 h-5 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-3-3v6" />
                </svg>
                <strong>1 GB</strong> RAM
              </li>
              <li class="flex items-center">
                <svg class="w-5 h-5 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                <strong>40 EP & 200 NP</strong>
              </li>
              <li class="flex items-center">
                <svg class="w-5 h-5 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                </svg>
                <strong>40 MB/s</strong> I/O
              </li>
              <li class="flex items-center">
                <svg class="w-5 h-5 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                </svg>
                <strong>MariaDB</strong>
              </li>
              <li class="flex items-center">
                <svg class="w-5 h-5 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8h18M3 16h18" />
                </svg>
                <strong>Advanced Email</strong> Features
              </li>
              <li class="flex items-center">
                <svg class="w-5 h-5 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26L21 8" />
                </svg>
                <strong>Multiple Domains</strong> Hosting
              </li>
              <li class="flex items-center">
                <svg class="w-5 h-5 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 2L15 8l6 1-4 5 1 6-5-3-5 3 1-6-4-5 6-1z" />
                </svg>
                <strong>CloudLinux OS</strong>
              </li>
              <li class="flex items-center">
                <svg class="w-5 h-5 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H3" />
                </svg>
                <strong>BD/SG Data</strong> Center
              </li>
              <li class="flex items-center">
                <svg class="w-5 h-5 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 17l4-4-4-4m8 8v-8" />
                </svg>
                <strong>24x7</strong> Online Support
              </li>
            </ul>
          </div>

          <!-- Order Button -->
          <div class="text-center mt-auto">
            <a 
              href="#order-now" 
              class="bg-gradient-to-r from-green-500 to-green-700 hover:from-green-600 hover:to-green-800 text-white px-4 py-2 rounded-md font-semibold shadow-lg transform hover:scale-105 transition duration-300 flex items-center justify-center"
              aria-label="Order cPanel Basic Hosting"
            >
              <i class="fas fa-shopping-cart mr-2"></i> Order Now
            </a>
          </div>
        </div>
        <!-- End Card 1 -->

        <!-- Card 2: 5GB cPanel Hosting -->
        <div class="bg-white border border-gray-200 rounded-lg shadow-lg hover:shadow-2xl transition-shadow duration-300 flex flex-col relative">
          <!-- Badge / Ribbon -->
          <div class="absolute top-0 right-0 bg-blue-600 text-white text-xs px-3 py-1 rounded-bl-lg">
            Popular
          </div>

          <!-- Plan Content -->
          <div class="p-6 flex flex-col flex-grow">
            <!-- Plan Title & Icon -->
            <div class="flex items-center mb-4">
              <!-- Replace with relevant icon -->
              <svg class="w-8 h-8 text-blue-600 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-6a2 2 0 012-2h2a2 2 0 012 2v6m-6 0h6" />
              </svg>
              <h3 class="text-2xl font-semibold text-gray-800">cPanel Advanced</h3>
            </div>

            <!-- Price -->
            <div class="mb-4">
              <span class="text-5xl font-extrabold text-green-600">৳2,995</span>
              <span class="text-2xl font-bold text-green-600">($25.50)</span>
            </div>

            <!-- Billing Cycle Label -->
            <p class="text-center text-sm text-gray-500 mb-6">- Per Year -</p>

            <!-- Features List -->
            <ul class="text-gray-600 space-y-2 mb-6">
              <li class="flex items-center">
                <svg class="w-5 h-5 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                <strong>5GB NVMe</strong> SSD Storage
              </li>
              <li class="flex items-center">
                <svg class="w-5 h-5 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 016-3.464A4 4 0 0117 12h1a3 3 0 010 6H7a4 4 0 01-4-4z" />
                </svg>
                <strong>75 GB</strong> Traffic/month
              </li>
              <li class="flex items-center">
                <svg class="w-5 h-5 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                </svg>
                <strong>2 CPU</strong> Cores
              </li>
              <li class="flex items-center">
                <svg class="w-5 h-5 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-3-3v6" />
                </svg>
                <strong>1 GB</strong> RAM
              </li>
              <li class="flex items-center">
                <svg class="w-5 h-5 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                <strong>40 EP & 200 NP</strong>
              </li>
              <li class="flex items-center">
                <svg class="w-5 h-5 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                </svg>
                <strong>40 MB/s</strong> I/O
              </li>
              <li class="flex items-center">
                <svg class="w-5 h-5 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                </svg>
                <strong>MariaDB</strong>
              </li>
              <li class="flex items-center">
                <svg class="w-5 h-5 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8h18M3 16h18" />
                </svg>
                <strong>Advanced Email</strong> Features
              </li>
              <li class="flex items-center">
                <svg class="w-5 h-5 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26L21 8" />
                </svg>
                <strong>Multiple Domains</strong> Hosting
              </li>
              <li class="flex items-center">
                <svg class="w-5 h-5 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 2L15 8l6 1-4 5 1 6-5-3-5 3 1-6-4-5 6-1z" />
                </svg>
                <strong>CloudLinux OS</strong>
              </li>
              <li class="flex items-center">
                <svg class="w-5 h-5 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H3" />
                </svg>
                <strong>BD/SG Data</strong> Center
              </li>
              <li class="flex items-center">
                <svg class="w-5 h-5 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 17l4-4-4-4m8 8v-8" />
                </svg>
                <strong>24x7</strong> Online Support
              </li>
            </ul>
          </div>

          <!-- Order Button -->
          <div class="text-center mt-auto">
            <a 
              href="#order-now" 
              class="bg-gradient-to-r from-green-500 to-green-700 hover:from-green-600 hover:to-green-800 text-white px-4 py-2 rounded-md font-semibold shadow-lg transform hover:scale-105 transition duration-300 flex items-center justify-center"
              aria-label="Order cPanel Advanced Hosting"
            >
              <i class="fas fa-shopping-cart mr-2"></i> Order Now
            </a>
          </div>
        </div>
        <!-- End Card 2 -->

        <!-- Card 3: 10GB cPanel Hosting -->
        <div class="bg-white border border-gray-200 rounded-lg shadow-lg hover:shadow-2xl transition-shadow duration-300 flex flex-col relative">
          <!-- Badge / Ribbon -->
          <div class="absolute top-0 right-0 bg-blue-600 text-white text-xs px-3 py-1 rounded-bl-lg">
            Popular
          </div>

          <!-- Plan Content -->
          <div class="p-6 flex flex-col flex-grow">
            <!-- Plan Title & Icon -->
            <div class="flex items-center mb-4">
              <!-- Replace with relevant icon -->
              <svg class="w-8 h-8 text-blue-600 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-6a2 2 0 012-2h2a2 2 0 012 2v6m-6 0h6" />
              </svg>
              <h3 class="text-2xl font-semibold text-gray-800">cPanel Pro</h3>
            </div>

            <!-- Price -->
            <div class="mb-4">
              <span class="text-5xl font-extrabold text-green-600">৳4,995</span>
              <span class="text-2xl font-bold text-green-600">($42.50)</span>
            </div>

            <!-- Billing Cycle Label -->
            <p class="text-center text-sm text-gray-500 mb-6">- Per Year -</p>

            <!-- Features List -->
            <ul class="text-gray-600 space-y-2 mb-6">
              <li class="flex items-center">
                <svg class="w-5 h-5 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                <strong>10GB NVMe</strong> SSD Storage
              </li>
              <li class="flex items-center">
                <svg class="w-5 h-5 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 016-3.464A4 4 0 0117 12h1a3 3 0 010 6H7a4 4 0 01-4-4z" />
                </svg>
                <strong>100 GB</strong> Traffic/month
              </li>
              <li class="flex items-center">
                <svg class="w-5 h-5 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                </svg>
                <strong>3 CPU</strong> Cores
              </li>
              <li class="flex items-center">
                <svg class="w-5 h-5 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-3-3v6" />
                </svg>
                <strong>2 GB</strong> RAM
              </li>
              <li class="flex items-center">
                <svg class="w-5 h-5 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                <strong>80 EP & 400 NP</strong>
              </li>
              <li class="flex items-center">
                <svg class="w-5 h-5 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                </svg>
                <strong>80 MB/s</strong> I/O
              </li>
              <li class="flex items-center">
                <svg class="w-5 h-5 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                </svg>
                <strong>MariaDB</strong>
              </li>
              <li class="flex items-center">
                <svg class="w-5 h-5 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8h18M3 16h18" />
                </svg>
                <strong>Premium Email</strong> Features
              </li>
              <li class="flex items-center">
                <svg class="w-5 h-5 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26L21 8" />
                </svg>
                <strong>Multiple Domains</strong> Hosting
              </li>
              <li class="flex items-center">
                <svg class="w-5 h-5 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 2L15 8l6 1-4 5 1 6-5-3-5 3 1-6-4-5 6-1z" />
                </svg>
                <strong>CloudLinux OS</strong>
              </li>
              <li class="flex items-center">
                <svg class="w-5 h-5 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H3" />
                </svg>
                <strong>BD/SG Data</strong> Center
              </li>
              <li class="flex items-center">
                <svg class="w-5 h-5 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 17l4-4-4-4m8 8v-8" />
                </svg>
                <strong>24x7</strong> Online Support
              </li>
            </ul>
          </div>

          <!-- Order Button -->
          <div class="text-center mt-auto">
            <a 
              href="#order-now" 
              class="bg-gradient-to-r from-green-500 to-green-700 hover:from-green-600 hover:to-green-800 text-white px-4 py-2 rounded-md font-semibold shadow-lg transform hover:scale-105 transition duration-300 flex items-center justify-center"
              aria-label="Order cPanel Pro Hosting"
            >
              <i class="fas fa-shopping-cart mr-2"></i> Order Now
            </a>
          </div>
        </div>
        <!-- End Card 3 -->

      </div>
    </div>
  </section>
  <!-- End Pricing Section -->

  <!-- 🏷 Call to Action Section -->
  <section class="bg-green-600 text-white py-16">
    <div class="container mx-auto px-6 text-center">
      <h2 class="text-3xl font-bold mb-4">Ready to Upgrade Your Hosting?</h2>
      <p class="text-lg mb-8">Join thousands of satisfied customers and experience top-notch hosting services.</p>
      <a href="#order-now" class="bg-white text-green-600 px-6 py-3 rounded-full font-semibold hover:bg-gray-100 transition">Get Started</a>
    </div>
  </section>
  <!-- End Call to Action Section -->

<?php include 'footer.php';?>



</body>
</html>