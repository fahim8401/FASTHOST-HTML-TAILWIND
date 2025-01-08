<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>HPLink Hosting & VPS</title>

<?php include 'header.php';?>
  
  <!-- 🏠 4. Hero Section (Another Example Content) -->
  <section id="hero" class="pt-20 bg-blue-600 text-white">
    <div class="container mx-auto px-6 py-20 text-center">
      <h1 class="text-4xl md:text-6xl font-bold mb-4">Reliable Hosting & VPS Solutions</h1>
      <p class="text-lg md:text-2xl mb-8">Scalable, Secure, and Affordable Plans for Your Online Needs.</p>
      <a href="#pricing" class="bg-white text-blue-600 px-6 py-3 rounded-full text-lg font-semibold hover:bg-gray-200">Get Started</a>
    </div>
  </section>
  
  


    
  <!-- 🛠️ 5. Services Section -->
  <section id="services" class="py-20">
    <div class="container mx-auto px-6">
      <h2 class="text-3xl font-bold text-center mb-12">Our Services</h2>
      <div class="flex flex-wrap -mx-4">
        <!-- Service Card 1 -->
        <div class="w-full md:w-1/3 px-4 mb-8">
          <div class="bg-white rounded-lg shadow-lg p-6 text-center hover:shadow-xl transition-shadow duration-300">
            <img src="images/Shared Hosting.png" alt="Shared Hosting" class="mx-auto h-16 w-16 mb-4">
            <h3 class="text-2xl font-semibold mb-2">Shared Hosting</h3>
            <p class="text-gray-700 mb-4">Affordable hosting solution for personal and small business websites.</p>
            <a href="pricing.html" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">View Plans</a>
          </div>
        </div>
        <!-- Service Card 2 -->
        <div class="w-full md:w-1/3 px-4 mb-8">
          <div class="bg-white rounded-lg shadow-lg p-6 text-center hover:shadow-xl transition-shadow duration-300">
            <img src="images/VPS Hosting.png" alt="VPS Hosting" class="mx-auto h-16 w-16 mb-4">
            <h3 class="text-2xl font-semibold mb-2">VPS Hosting</h3>
            <p class="text-gray-700 mb-4">High-performance VPS hosting for growing businesses and applications.</p>
            <a href="pricing.html" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">View Plans</a>
          </div>
        </div>
        <!-- Service Card 3 -->
        <div class="w-full md:w-1/3 px-4 mb-8">
          <div class="bg-white rounded-lg shadow-lg p-6 text-center hover:shadow-xl transition-shadow duration-300">
            <img src="images/Dedicated Servers.png" alt="Dedicated Servers" class="mx-auto h-16 w-16 mb-4">
            <h3 class="text-2xl font-semibold mb-2">Dedicated Servers</h3>
            <p class="text-gray-700 mb-4">Ultimate control and performance with our dedicated server solutions.</p>
            <a href="pricing.html" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">View Plans</a>
          </div>
        </div>
      </div>
    </div>
  </section>
<!-- 🏷 Enhanced Pricing Section with Toggle Buttons -->
<section class="py-16 bg-gray-100" id="pricing">
  <div class="container mx-auto px-6">
    <!-- Section Title -->
    <div class="text-center mb-12">
      <h2 class="text-4xl font-extrabold text-gray-800 mb-4">Our Hosting Plans</h2>
      <p class="text-gray-600 text-lg">Choose the perfect plan that fits your needs.</p>
    </div>

<!-- Toggle Buttons Row -->
<div class="mb-12 flex justify-center">
  <!-- cPanel Button (Active by Default) -->
  <button
    class="toggle-button bg-green-500 text-white px-6 py-3 text-lg rounded-l-lg hover:bg-green-600 focus:outline-none border-2 border-green-500"
    data-target="cpanel-plans"
    aria-pressed="true"
  >
    cPanel
  </button>

  <!-- VPS Button -->
  <button
    class="toggle-button bg-gray-300 text-gray-800 px-6 py-3 text-lg hover:bg-gray-400 focus:outline-none border-t-2 border-b-2 border-gray-300"
    data-target="vps-plans"
    aria-pressed="false"
  >
    VPS
  </button>

  <!-- RDP Button -->
  <button
    class="toggle-button bg-gray-300 text-gray-800 px-6 py-3 text-lg hover:bg-gray-400 focus:outline-none border-t-2 border-b-2 border-gray-300"
    data-target="rdp-plans"
    aria-pressed="false"
  >
    RDP
  </button>

  <!-- Dedicated Button -->
  <button
    class="toggle-button bg-gray-300 text-gray-800 px-6 py-3 text-lg hover:bg-gray-400 focus:outline-none rounded-r-lg border-2 border-gray-300"
    data-target="dedicated-plans"
    aria-pressed="false"
  >
    Dedicated
  </button>
</div>


    <!-- Plans Wrapper -->
    <div id="pricing-plans" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
      
      <!-- cPanel Hosting Plans -->
      <div id="cpanel-plans" class="plan-category">
        <!-- Plan 1: cPanel Basic -->
        <div class="bg-white border border-gray-200 rounded-lg shadow-lg hover:shadow-2xl transition-shadow duration-300 flex flex-col relative">
          <!-- Badge / Ribbon (Optional) -->
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
              <span class="text-4xl font-bold text-green-600">৳75</span>
              <span class="text-lg text-gray-600">/mo</span>
            </div>

            <!-- Billing Cycle Selector (Optional) -->
            <div class="mb-4">
              <select class="w-full border border-green-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-green-400">
                <option>1 Month - ৳75</option>
                <option>3 Months - ৳200</option>
                <option>6 Months - ৳380</option>
                <option>1 Year - ৳750</option>
              </select>
            </div>

            <!-- Features List -->
            <ul class="mb-6 space-y-2 flex-grow">
              <li class="flex items-center text-gray-700">
                <!-- Feature Icon -->
                <svg class="w-5 h-5 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                500 MB NVMe SSD Storage
              </li>
              <li class="flex items-center text-gray-700">
                <svg class="w-5 h-5 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 016-3.464A4 4 0 0117 12h1a3 3 0 010 6H7a4 4 0 01-4-4z" />
                </svg>
                40 GB Traffic/month
              </li>
              <li class="flex items-center text-gray-700">
                <svg class="w-5 h-5 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                </svg>
                1 CPU Core Limit
              </li>
              <li class="flex items-center text-gray-700">
                <svg class="w-5 h-5 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-3-3v6" />
                </svg>
                512 MB RAM
              </li>
              <li class="flex items-center text-gray-700">
                <svg class="w-5 h-5 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                20 EP & 100 NP
              </li>
              <li class="flex items-center text-gray-700">
                <svg class="w-5 h-5 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                </svg>
                20 MB/s I/O
              </li>
              <li class="flex items-center text-gray-700">
                <svg class="w-5 h-5 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                </svg>
                MariaDB
              </li>
              <li class="flex items-center text-gray-700">
                <svg class="w-5 h-5 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8h18M3 16h18" />
                </svg>
                Basic Email Features
              </li>
              <li class="flex items-center text-gray-700">
                <svg class="w-5 h-5 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h18v18H3V3z" />
                </svg>
                Single Domain Hosting
              </li>
              <li class="flex items-center text-gray-700">
                <svg class="w-5 h-5 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26L21 8" />
                </svg>
                100 Emails Per Day
              </li>
              <li class="flex items-center text-gray-700">
                <svg class="w-5 h-5 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 2L15 8l6 1-4 5 1 6-5-3-5 3 1-6-4-5 6-1z" />
                </svg>
                CloudLinux OS
              </li>
              <li class="flex items-center text-gray-700">
                <svg class="w-5 h-5 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H3" />
                </svg>
                BD/SG Data Center
              </li>
              <li class="flex items-center text-gray-700">
                <svg class="w-5 h-5 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 17l4-4-4-4m8 8v-8" />
                </svg>
                24x7 Online Support
              </li>
            </ul>
          </div>

          <!-- Order Button -->
          <a 
            href="#order-now" 
            class="mt-auto bg-green-600 text-white py-3 rounded-b-lg hover:bg-green-700 transition-colors duration-300 text-center font-semibold"
          >
            Order Now
          </a>
        </div>
        <!-- End cPanel Plan 1 -->

        <!-- Repeat similar blocks for other cPanel plans -->
        <!-- Example: cPanel Advanced, cPanel Pro, etc. -->
      </div>
      <!-- End cPanel Hosting Plans -->

      <!-- VPS Hosting Plans -->
      <div id="vps-plans" class="plan-category hidden">
        <!-- Plan 1: VPS Basic -->
        <div class="bg-white border border-gray-200 rounded-lg shadow-lg hover:shadow-2xl transition-shadow duration-300 flex flex-col relative">
          <!-- Badge / Ribbon (Optional) -->
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
              <h3 class="text-2xl font-semibold text-gray-800">VPS Basic</h3>
            </div>

            <!-- Price -->
            <div class="mb-4">
              <span class="text-4xl font-bold text-green-600">৳1,500</span>
              <span class="text-lg text-gray-600">/mo</span>
            </div>

            <!-- Billing Cycle Selector (Optional) -->
            <div class="mb-4">
              <select class="w-full border border-green-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-green-400">
                <option>1 Month - ৳1,500</option>
                <option>6 Months - ৳8,500</option>
                <option>1 Year - ৳16,000</option>
              </select>
            </div>

            <!-- Features List -->
            <ul class="mb-6 space-y-2 flex-grow">
              <li class="flex items-center text-gray-700">
                <!-- Feature Icon -->
                <svg class="w-5 h-5 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                2 GB RAM
              </li>
              <li class="flex items-center text-gray-700">
                <svg class="w-5 h-5 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a6 6 0 1112 0 6 6 0 01-12 0z" />
                </svg>
                50 GB SSD Storage
              </li>
              <li class="flex items-center text-gray-700">
                <svg class="w-5 h-5 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                </svg>
                2 CPU Cores
              </li>
              <li class="flex items-center text-gray-700">
                <svg class="w-5 h-5 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-3-3v6" />
                </svg>
                100 GB Bandwidth
              </li>
              <li class="flex items-center text-gray-700">
                <svg class="w-5 h-5 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                4 IP Addresses
              </li>
              <li class="flex items-center text-gray-700">
                <svg class="w-5 h-5 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                </svg>
                Full Root Access
              </li>
              <li class="flex items-center text-gray-700">
                <svg class="w-5 h-5 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 2L15 8l6 1-4 5 1 6-5-3-5 3 1-6-4-5 6-1z" />
                </svg>
                CloudLinux OS
              </li>
              <li class="flex items-center text-gray-700">
                <svg class="w-5 h-5 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H3" />
                </svg>
                BD/SG Data Center
              </li>
              <li class="flex items-center text-gray-700">
                <svg class="w-5 h-5 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 17l4-4-4-4m8 8v-8" />
                </svg>
                24x7 Online Support
              </li>
            </ul>
          </div>

          <!-- Order Button -->
          <a 
            href="#order-now" 
            class="mt-auto bg-green-600 text-white py-3 rounded-b-lg hover:bg-green-700 transition-colors duration-300 text-center font-semibold"
          >
            Order Now
          </a>
        </div>
        <!-- End VPS Plan 1 -->

        <!-- Repeat similar blocks for other VPS plans -->
        <!-- Example: VPS Advanced, VPS Pro, etc. -->
      </div>
      <!-- End VPS Hosting Plans -->

      <!-- RDP Hosting Plans -->
      <div id="rdp-plans" class="plan-category hidden">
        <!-- RDP Plan 1: RDP Starter -->
        <div class="bg-white border border-gray-200 rounded-lg shadow-lg hover:shadow-2xl transition-shadow duration-300 flex flex-col relative">
          <!-- Badge / Ribbon (Optional) -->
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
              <h3 class="text-2xl font-semibold text-gray-800">RDP Starter</h3>
            </div>

            <!-- Price -->
            <div class="mb-4">
              <span class="text-4xl font-bold text-green-600">৳2,000</span>
              <span class="text-lg text-gray-600">/mo</span>
            </div>

            <!-- Billing Cycle Selector (Optional) -->
            <div class="mb-4">
              <select class="w-full border border-green-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-green-400">
                <option>1 Month - ৳2,000</option>
                <option>6 Months - ৳11,500</option>
                <option>1 Year - ৳21,000</option>
              </select>
            </div>

            <!-- Features List -->
            <ul class="mb-6 space-y-2 flex-grow">
              <li class="flex items-center text-gray-700">
                <!-- Feature Icon -->
                <svg class="w-5 h-5 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                4 GB RAM
              </li>
              <li class="flex items-center text-gray-700">
                <svg class="w-5 h-5 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a6 6 0 1112 0 6 6 0 01-12 0z" />
                </svg>
                100 GB SSD Storage
              </li>
              <li class="flex items-center text-gray-700">
                <svg class="w-5 h-5 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                </svg>
                4 CPU Cores
              </li>
              <li class="flex items-center text-gray-700">
                <svg class="w-5 h-5 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-3-3v6" />
                </svg>
                200 GB Bandwidth
              </li>
              <li class="flex items-center text-gray-700">
                <svg class="w-5 h-5 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                8 IP Addresses
              </li>
              <li class="flex items-center text-gray-700">
                <svg class="w-5 h-5 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                </svg>
                Windows Server OS
              </li>
              <li class="flex items-center text-gray-700">
                <svg class="w-5 h-5 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 2L15 8l6 1-4 5 1 6-5-3-5 3 1-6-4-5 6-1z" />
                </svg>
                CloudLinux OS
              </li>
              <li class="flex items-center text-gray-700">
                <svg class="w-5 h-5 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H3" />
                </svg>
                BD/SG Data Center
              </li>
              <li class="flex items-center text-gray-700">
                <svg class="w-5 h-5 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 17l4-4-4-4m8 8v-8" />
                </svg>
                24x7 Online Support
              </li>
            </ul>
          </div>

          <!-- Order Button -->
          <a 
            href="#order-now" 
            class="mt-auto bg-green-600 text-white py-3 rounded-b-lg hover:bg-green-700 transition-colors duration-300 text-center font-semibold"
          >
            Order Now
          </a>
        </div>
        <!-- End RDP Plan 1 -->

        <!-- Repeat similar blocks for other RDP plans -->
        <!-- Example: RDP Advanced, RDP Pro, etc. -->
      </div>
      <!-- End RDP Hosting Plans -->

      <!-- Dedicated Hosting Plans -->
      <div id="dedicated-plans" class="plan-category hidden">
        <!-- Dedicated Plan 1: Dedicated Starter -->
        <div class="bg-white border border-gray-200 rounded-lg shadow-lg hover:shadow-2xl transition-shadow duration-300 flex flex-col relative">
          <!-- Badge / Ribbon (Optional) -->
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
              <h3 class="text-2xl font-semibold text-gray-800">Dedicated Starter</h3>
            </div>

            <!-- Price -->
            <div class="mb-4">
              <span class="text-4xl font-bold text-green-600">৳5,000</span>
              <span class="text-lg text-gray-600">/mo</span>
            </div>

            <!-- Billing Cycle Selector (Optional) -->
            <div class="mb-4">
              <select class="w-full border border-green-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-green-400">
                <option>1 Month - ৳5,000</option>
                <option>6 Months - ৳28,000</option>
                <option>1 Year - ৳55,000</option>
              </select>
            </div>

            <!-- Features List -->
            <ul class="mb-6 space-y-2 flex-grow">
              <li class="flex items-center text-gray-700">
                <!-- Feature Icon -->
                <svg class="w-5 h-5 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                8 GB RAM
              </li>
              <li class="flex items-center text-gray-700">
                <svg class="w-5 h-5 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a6 6 0 1112 0 6 6 0 01-12 0z" />
                </svg>
                200 GB SSD Storage
              </li>
              <li class="flex items-center text-gray-700">
                <svg class="w-5 h-5 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                </svg>
                8 CPU Cores
              </li>
              <li class="flex items-center text-gray-700">
                <svg class="w-5 h-5 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-3-3v6" />
                </svg>
                500 GB Bandwidth
              </li>
              <li class="flex items-center text-gray-700">
                <svg class="w-5 h-5 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                16 IP Addresses
              </li>
              <li class="flex items-center text-gray-700">
                <svg class="w-5 h-5 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                </svg>
                Custom OS Options
              </li>
              <li class="flex items-center text-gray-700">
                <svg class="w-5 h-5 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 2L15 8l6 1-4 5 1 6-5-3-5 3 1-6-4-5 6-1z" />
                </svg>
                CloudLinux OS
              </li>
              <li class="flex items-center text-gray-700">
                <svg class="w-5 h-5 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H3" />
                </svg>
                BD/SG Data Center
              </li>
              <li class="flex items-center text-gray-700">
                <svg class="w-5 h-5 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 17l4-4-4-4m8 8v-8" />
                </svg>
                24x7 Online Support
              </li>
            </ul>
          </div>

          <!-- Order Button -->
          <a 
            href="#order-now" 
            class="mt-auto bg-green-600 text-white py-3 rounded-b-lg hover:bg-green-700 transition-colors duration-300 text-center font-semibold"
          >
            Order Now
          </a>
        </div>
        <!-- End Dedicated Plan 1 -->

        <!-- Repeat similar blocks for other Dedicated plans -->
        <!-- Example: Dedicated Advanced, Dedicated Pro, etc. -->
      </div>
      <!-- End Dedicated Hosting Plans -->

    </div>
  </div>
</section>
<!-- End Pricing Section -->



  <!-- 💬 7. Testimonials Section -->
  <section id="testimonials" class="py-20">
    <div class="container mx-auto px-6">
      <h2 class="text-3xl font-bold text-center mb-12">What Our Customers Say</h2>
      <div class="flex flex-wrap -mx-4">
        <!-- Testimonial Card 1 -->
        <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-8">
          <div class="bg-white rounded-lg shadow-lg p-6">
            <p class="text-gray-700 mb-4">"HPLink provided us with excellent VPS hosting that perfectly fits our needs. The support team is always responsive and helpful."</p>
            <div class="flex items-center">
              <img src="images/user1.jpg" alt="Jane Doe" class="w-12 h-12 rounded-full mr-4">
              <div>
                <p class="font-semibold">Jane Doe</p>
                <p class="text-sm text-gray-500">CEO, TechCorp</p>
              </div>
            </div>
          </div>
        </div>
        <!-- Testimonial Card 2 -->
        <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-8">
          <div class="bg-white rounded-lg shadow-lg p-6">
            <p class="text-gray-700 mb-4">"The shared hosting plans are affordable and reliable. We've had zero downtime since switching to HPLink."</p>
            <div class="flex items-center">
              <img src="images/user2.jpg" alt="John Smith" class="w-12 h-12 rounded-full mr-4">
              <div>
                <p class="font-semibold">John Smith</p>
                <p class="text-sm text-gray-500">Developer, WebSolutions</p>
              </div>
            </div>
          </div>
        </div>
        <!-- Testimonial Card 3 -->
        <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-8">
          <div class="bg-white rounded-lg shadow-lg p-6">
            <p class="text-gray-700 mb-4">"Exceptional performance and scalability. HPLink's VPS hosting has allowed our applications to run smoothly."</p>
            <div class="flex items-center">
              <img src="images/user3.jpg" alt="Alice Johnson" class="w-12 h-12 rounded-full mr-4">
              <div>
                <p class="font-semibold">Alice Johnson</p>
                <p class="text-sm text-gray-500">CTO, InnovateX</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  
  <!-- 🔰 6. IT Solutions / Stats Section -->
<section id="it-solutions" class="py-16 bg-white">
  <div class="container mx-auto px-6">
    <!-- Section Title -->
    <div class="text-center mb-12">
      <h2 class="text-3xl md:text-4xl font-bold">MOST RESPECTED <span class="text-blue-600">IT SOLUTIONS</span> IN BANGLADESH</h2>
      <!-- Optional: Fancy divider or line -->
      <div class="flex items-center justify-center mt-2">
        <div class="w-16 h-px bg-blue-600"></div>
        <svg class="w-6 h-6 text-blue-600 mx-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01" />
        </svg>
        <div class="w-16 h-px bg-blue-600"></div>
      </div>
    </div>

    <!-- Stats Cards -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
      <!-- Card 1 -->
      <div class="border-2 border-blue-600 rounded-xl p-6 text-center transition transform hover:scale-105">
        <!-- Icon (Example: Star icon for "Happy Customers") -->
        <div class="mb-4 text-blue-600 flex justify-center">
          <!-- Replace with your own SVG or image icon -->
          <svg class="w-12 h-12" fill="currentColor" viewBox="0 0 24 24">
            <path d="M12 17.27l5.18 3.04-1.64-7.03 5.46-4.73-7.1-.61L12 2 9.1 7.94l-7.1 .61 5.46 4.73-1.64 7.03 5.18-3.04z"/>
          </svg>
        </div>
        <!-- Big Number / Stat -->
        <h3 class="text-2xl font-bold text-gray-800">5000+</h3>
        <!-- Description / Caption -->
        <p class="text-gray-600 mt-2">HAPPY CUSTOMERS IN <br> OVER 60+ COUNTRIES</p>
      </div>

      <!-- Card 2 -->
      <div class="border-2 border-orange-600 rounded-xl p-6 text-center transition transform hover:scale-105">
        <div class="mb-4 text-orange-600 flex justify-center">
          <!-- Icon for "Data Centers" -->
          <svg class="w-12 h-12" fill="currentColor" viewBox="0 0 24 24">
            <path d="M5 4h14v2H5V4zm0 14h14v2H5v-2zm0-7h14v2H5v-2z"/>
          </svg>
        </div>
        <h3 class="text-2xl font-bold text-gray-800">33</h3>
        <p class="text-gray-600 mt-2">DATA CENTERS IN <br> WORLDWIDE</p>
      </div>

      <!-- Card 3 -->
      <div class="border-2 border-blue-500 rounded-xl p-6 text-center transition transform hover:scale-105">
        <div class="mb-4 text-blue-500 flex justify-center">
          <!-- Icon for "Years of Experience" -->
          <svg class="w-12 h-12" fill="currentColor" viewBox="0 0 24 24">
            <path d="M8 2h8a2 2 0 012 2v16l-6-3-6 3V4a2 2 0 012-2z" />
          </svg>
        </div>
        <h3 class="text-2xl font-bold text-gray-800">24+</h3>
        <p class="text-gray-600 mt-2">YEAR OF EXPERIENCE <br> IN IT SOLUTIONS</p>
      </div>

      <!-- Card 4 -->
      <div class="border-2 border-teal-600 rounded-xl p-6 text-center transition transform hover:scale-105">
        <div class="mb-4 text-teal-600 flex justify-center">
          <!-- Icon for "Satisfaction Guarantee" -->
          <svg class="w-12 h-12" fill="currentColor" viewBox="0 0 24 24">
            <path d="M12 2C8.13 2 5 5.13 5 9c0 4.28 6 13 7 14 1-1 7-9.72 7-14 0-3.87-3.13-7-7-7zM9.07 11.25l1.25 1.25 4.25-4.25 1.06 1.06-5.31 5.31-2.31-2.31 1.06-1.06z" />
          </svg>
        </div>
        <h3 class="text-2xl font-bold text-gray-800">100%</h3>
        <p class="text-gray-600 mt-2">SATISFACTION <br> GUARANTEE</p>
      </div>
    </div>
  </div>
</section>

 <!-- ❓ 4. FAQ Section -->
  <section id="faq" class="py-16 bg-white">
    <div class="container mx-auto px-6">
      <div class="text-center mb-12">
        <h2 class="text-3xl md:text-4xl font-bold">Frequently Asked Questions</h2>
        <p class="text-gray-600 mt-4">Find answers to the most common questions about our hosting services.</p>
      </div>
      
      <div class="max-w-3xl mx-auto">
        <!-- FAQ Item 1 -->
        <div class="mb-4 border-b border-gray-200">
          <button class="w-full text-left py-4 focus:outline-none flex justify-between items-center" aria-expanded="false">
            <span class="text-lg font-medium">What is the uptime guarantee for your hosting plans?</span>
            <svg class="w-6 h-6 transform transition-transform duration-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
            </svg>
          </button>
          <div class="hidden">
            <p class="py-2 text-gray-600">
              We offer a 99.9% uptime guarantee on all our hosting plans. This ensures that your website remains accessible and performs optimally at all times.
            </p>
          </div>
        </div>
        
        <!-- FAQ Item 2 -->
        <div class="mb-4 border-b border-gray-200">
          <button class="w-full text-left py-4 focus:outline-none flex justify-between items-center" aria-expanded="false">
            <span class="text-lg font-medium">Can I upgrade my hosting plan at any time?</span>
            <svg class="w-6 h-6 transform transition-transform duration-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
            </svg>
          </button>
          <div class="hidden">
            <p class="py-2 text-gray-600">
              Yes, you can upgrade your hosting plan at any time through your account dashboard. Upgrades are processed immediately, and you’ll have access to additional resources right away.
            </p>
          </div>
        </div>
        
        <!-- FAQ Item 3 -->
        <div class="mb-4 border-b border-gray-200">
          <button class="w-full text-left py-4 focus:outline-none flex justify-between items-center" aria-expanded="false">
            <span class="text-lg font-medium">Do you provide customer support 24/7?</span>
            <svg class="w-6 h-6 transform transition-transform duration-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
            </svg>
          </button>
          <div class="hidden">
            <p class="py-2 text-gray-600">
              Absolutely! Our support team is available 24/7 via live chat, email, and phone to assist you with any issues or questions you may have.
            </p>
          </div>
        </div>
        
        <!-- FAQ Item 4 -->
        <div class="mb-4 border-b border-gray-200">
          <button class="w-full text-left py-4 focus:outline-none flex justify-between items-center" aria-expanded="false">
            <span class="text-lg font-medium">Is there a money-back guarantee?</span>
            <svg class="w-6 h-6 transform transition-transform duration-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
            </svg>
          </button>
          <div class="hidden">
            <p class="py-2 text-gray-600">
              Yes, we offer a 30-day money-back guarantee on all our hosting plans. If you’re not satisfied with our services within the first 30 days, you can request a full refund.
            </p>
          </div>
        </div>
        
        <!-- Add more FAQ items as needed -->
        
      </div>
    </div>
  </section>
  
<?php include 'footer.php';?>


</body>
</html>