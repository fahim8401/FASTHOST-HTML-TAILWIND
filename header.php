  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <!-- Tailwind CSS via CDN (Consider using a build process for production) -->
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.tailwindcss.com">
  <!-- Optional: Favicon -->
  <link rel="icon" href="images/favicon.ico" type="image/x-icon">
  <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  
  <!-- Custom Styles (Optional) -->
  <style>
    /* Custom scrollbar for dropdowns */
    ::-webkit-scrollbar {
      width: 8px;
    }

    ::-webkit-scrollbar-thumb {
      background-color: rgba(0, 0, 0, 0.2);
      border-radius: 4px;
    }

    ::-webkit-scrollbar-thumb:hover {
      background-color: rgba(0, 0, 0, 0.4);
    }
  </style>
  <script>
let closeDropdownTimeout;

function toggleDropdown() {
  const dropdownMenu = document.getElementById('dropdownMenu');
  if (dropdownMenu.classList.contains('hidden')) {
    // Show the menu and cancel any pending close timeout
    dropdownMenu.classList.remove('hidden');
    if (closeDropdownTimeout) {
      clearTimeout(closeDropdownTimeout);
    }
  } else {
    // Hide the menu after a 3-second delay
    closeDropdownTimeout = setTimeout(() => {
      dropdownMenu.classList.add('hidden');
    }, 1500); // 3000ms = 3 seconds
  }
}
</script>
</head>
<body class="bg-gray-100">
  
  <!-- 🛠️ 1. Responsive Sticky Navigation Bar with Logo -->
  <nav class="bg-blue-700 text-white shadow-lg sticky top-0 z-50">
    <div class="container mx-auto flex justify-between items-center py-4 px-6">
      <!-- Logo -->
      <a href="index.php" class="flex items-center">
        <img src="images/Asset 1-8.png" alt="HPLink Logo" class="h-8 w-auto mr-2">
        <span class="text-2xl font-bold"></span>
      </a>
      
      <!-- Navigation Links (Desktop) -->
      <div class="hidden md:flex items-center space-x-4">
        <!-- Home -->
        <a href="index.php" class="nav-link px-4 py-2 rounded hover:bg-blue-800 focus:ring-2 focus:ring-blue-500">Home</a>
        
        <!-- Domain Dropdown -->
        <div class="relative group" >
          <button aria-haspopup="true" aria-expanded="false" class="nav-link px-4 py-2 rounded hover:bg-blue-800 focus:outline-none flex items-center" >
            Domain
            <!-- Dropdown Arrow Icon -->
            <svg class="inline ml-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 10.584l3.71-3.354a.75.75 0 111.04 1.08l-4 3.625a.75.75 0 01-1.04 0l-4-3.625a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
            </svg>
          </button>
          
          <!-- Domain Dropdown Menu -->
          <div class="absolute left-0 mt-2 w-48 bg-blue-700 rounded-md shadow-lg opacity-0 group-hover:opacity-100 transform scale-95 group-hover:scale-100 transition-all duration-200 z-50">
            <a href="Domain.php" class="flex items-center px-4 py-2 text-sm text-white hover:bg-blue-800">
              <!-- Register Domain Icon -->
              <svg class="w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
              </svg>
              Register Domain
            </a>
            <a href="https://fhostbd.com/portal/cart.php?a=add&domain=transfer" class="flex items-center px-4 py-2 text-sm text-white hover:bg-blue-800">
              <!-- Transfer Domain Icon -->
              <svg class="w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
              </svg>
              Transfer Domain
            </a>
          </div>
        </div>
        <!-- End Domain Dropdown -->
        
        <!-- Hosting Dropdown -->
        <div class="relative group">
          <button aria-haspopup="true" aria-expanded="false" class="nav-link px-4 py-2 rounded hover:bg-blue-800 focus:outline-none flex items-center">
            Hosting
            <!-- Dropdown Arrow Icon -->
            <svg class="inline ml-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 10.584l3.71-3.354a.75.75 0 111.04 1.08l-4 3.625a.75.75 0 01-1.04 0l-4-3.625a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
            </svg>
          </button>
          
          <!-- Hosting Dropdown Menu -->
              <div class="absolute left-0 mt-2 w-48 bg-blue-700 rounded-md shadow-lg opacity-0 group-hover:opacity-100 transform scale-95 group-hover:scale-100 transition-all duration-200 z-50">
         
         
           <a href="bdix-hosting.php" class="flex items-center px-4 py-2 text-sm text-white hover:bg-blue-800">
                 <!-- BDIX Icon -->
             <i class="fa-solid fa-database w-4 h-4 mr-2"></i>
              BDIX Hosting
            </a>

            <a href="germany-hosting.php" class="flex items-center px-4 py-2 text-sm text-white hover:bg-blue-800">
             
              <i class="fa-solid fa-bangladeshi-taka-sign w-4 h-4 mr-2"></i>
              Cheap Hosting
            </a>
            <a href="cloud-hosting.php" class="flex items-center px-4 py-2 text-sm text-white hover:bg-blue-800">
              <!-- Cloud Icon -->
            <i class="fa-solid fa-cloud w-4 h-4 mr-2"></i>
             
              Cloud Hosting
            </a>
            <a href="premium-hosting.php" class="flex items-center px-4 py-2 text-sm text-white hover:bg-blue-800">
              <!-- Premium Icon -->
             <i class="fa-solid fa-ranking-star w-4 h-4 mr-2"></i>
              Premium Hosting
            </a>
            <a href="corporate-hosting.php" class="flex items-center px-4 py-2 text-sm text-white hover:bg-blue-800">
              <!-- Corporate Icon -->
              <i class="fa-solid fa-user-tie w-4 h-4 mr-2"></i>
              Corporate Hosting
            </a>
          </div>
        </div>
        <!-- End Hosting Dropdown -->
        
        <!-- 🆕 Reseller Dropdown -->
        <div class="relative group">
          <button aria-haspopup="true" aria-expanded="false" class="nav-link px-4 py-2 rounded hover:bg-blue-800 focus:outline-none flex items-center">
            Reseller
            <!-- Dropdown Arrow Icon -->
            <svg class="inline ml-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 10.584l3.71-3.354a.75.75 0 111.04 1.08l-4 3.625a.75.75 0 01-1.04 0l-4-3.625a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
            </svg>
          </button>
          
          <!-- Reseller Dropdown Menu -->
          <div class="absolute left-0 mt-2 w-48 bg-blue-700 rounded-md shadow-lg opacity-0 group-hover:opacity-100 transform scale-95 group-hover:scale-100 transition-all duration-200 z-50">
            <a href="mini-reseller.php" class="flex items-center px-4 py-2 text-sm text-white hover:bg-blue-800">
              <!-- Mini Reseller Icon -->
              <svg class="w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14" />
              </svg>
              Mini Reseller
            </a>
            <a href="master-reseller.php" class="flex items-center px-4 py-2 text-sm text-white hover:bg-blue-800">
              <!-- Master Reseller Icon -->
              <svg class="w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14" />
              </svg>
              Master Reseller
            </a>
            <a href="alpha-reseller.php" class="flex items-center px-4 py-2 text-sm text-white hover:bg-blue-800">
              <!-- Alpha Reseller Icon -->
              <svg class="w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14" />
              </svg>
              Alpha Reseller
            </a>
          </div>
        </div>
        <!-- End Reseller Dropdown -->
        












       <!-- VPS Dropdown -->
<div class="relative group">
  <button aria-haspopup="true" aria-expanded="false" class="nav-link px-4 py-2 rounded hover:bg-blue-800 focus:outline-none flex items-center">
    VPS
    <!-- Dropdown Arrow Icon -->
    <svg class="inline ml-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
      <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 10.584l3.71-3.354a.75.75 0 111.04 1.08l-4 3.625a.75.75 0 01-1.04 0l-4-3.625a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
    </svg>
  </button>
  
  <!-- VPS Dropdown Menu -->
  <div class="absolute left-0 mt-2 w-48 bg-blue-700 rounded-md shadow-lg opacity-0 group-hover:opacity-100 transform scale-95 group-hover:scale-100 transition-all duration-200 z-50">
    
    <a href="linux-vps.php" class="flex items-center px-4 py-2 text-sm text-white hover:bg-blue-800">
      <!-- Linux VPS Icon -->
     <i class="fa-brands fa-linux w-4 h-4 mr-2"></i>
      Linux VPS
    </a>
    <a href="windows-vps.php" class="flex items-center px-4 py-2 text-sm text-white hover:bg-blue-800">
      <!-- Windows VPS Icon -->
      <i class="fa-brands fa-windows w-4 h-4 mr-2"></i>
      Windows VPS
    </a>
     <a href="Storage-vps.php" class="flex items-center px-4 py-2 text-sm text-white hover:bg-blue-800">
      <!-- Storage VPS Icon -->
      <i class="fa-solid fa-hard-drive w-4 h-4 mr-2"></i>
      Storage VPS
    </a>
    
    
  </div>
</div>
<!-- End VPS Dropdown -->


<!-- Dedicated Server -->
<a href="dedicated-server.php" class="nav-link px-4 py-2 rounded hover:bg-blue-800">Dedicated Server</a>


<!-- License -->
<a href="license.php" class="nav-link px-4 py-2 rounded hover:bg-blue-800">License</a>



        <a href="offers.php" class="nav-link flex items-center px-4 py-2 rounded hover:bg-blue-800 focus:ring-2 focus:ring-blue-500">
          Offers <span class="bg-red-500 text-white text-xs px-2 py-0.5 rounded ml-2">1</span>
        </a>
        <a href="contact.php" class="nav-link px-4 py-2 rounded hover:bg-blue-800 focus:ring-2 focus:ring-blue-500">Contact</a>
      </div>
      
      <!-- Action Buttons (Desktop) -->
      <div class="hidden md:flex items-center space-x-4">
        <a href="https://fhostbd.com/portal/index.php?rp=/login" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 flex items-center focus:ring-2 focus:ring-blue-500">
          <!-- Login Icon -->
          <svg class="w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 17l-4 4m0 0l-4-4m4 4V3" />
          </svg>
          Login
        </a>
        <a href="https://fhostbd.com/portal/register.php" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600 flex items-center focus:ring-2 focus:ring-green-500">
          <!-- Sign-Up Icon -->
          <svg class="w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
          </svg>
          Sign-UP
        </a>
      </div>
      
      <!-- 🆕 Hamburger Menu Button (Mobile) -->
      <button id="menu-toggle" aria-controls="mobile-menu" aria-expanded="false" aria-label="Toggle navigation menu" class="md:hidden flex items-center px-3 py-2 border rounded text-white border-white hover:bg-blue-800 focus:outline-none">
        <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
          <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
        </svg>
      </button>
    </div>
    
    <!-- 🆕 Mobile Menu -->
    <div id="mobile-menu" class="hidden md:hidden flex flex-col space-y-2 bg-blue-700 px-6 py-4">
      <a href="index.php" class="nav-link flex items-center px-4 py-2 rounded hover:bg-blue-800 focus:ring-2 focus:ring-blue-500">
        <!-- Home Icon -->
        <svg class="w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M13 5v6h6" />
        </svg>
        Home
      </a>
      
      <!-- Domain Dropdown in Mobile -->
      <div class="relative">
        <button id="mobile-domain-toggle" aria-haspopup="true" aria-expanded="false" class="flex justify-between items-center w-full px-4 py-2 rounded hover:bg-blue-800 focus:outline-none">
          <span>Domain</span>
          <!-- Dropdown Arrow Icon -->
          <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
            <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 10.584l3.71-3.354a.75.75 0 111.04 1.08l-4 3.625a.75.75 0 01-1.04 0l-4-3.625a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
          </svg>
        </button>
        
        <!-- Domain Dropdown Menu -->
        <div id="mobile-domain-menu" class="hidden flex-col mt-2 space-y-2 bg-blue-700 rounded-md">
          <a href="Domain.php" class="flex items-center px-4 py-2 text-sm text-white hover:bg-blue-800 focus:ring-2 focus:ring-blue-500">
            <!-- Register Domain Icon -->
            <svg class="w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
            </svg>
            Register Domain
          </a>
          <a href="transfer.php" class="flex items-center px-4 py-2 text-sm text-white hover:bg-blue-800 focus:ring-2 focus:ring-blue-500">
            <!-- Transfer Domain Icon -->
            <svg class="w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
            </svg>
            Transfer Domain
          </a>
        </div>
      </div>
      <!-- End Domain Dropdown in Mobile -->
      
      <!-- Hosting Dropdown in Mobile -->
      <div class="relative">
        <button id="mobile-hosting-toggle" aria-haspopup="true" aria-expanded="false" class="flex justify-between items-center w-full px-4 py-2 rounded hover:bg-blue-800 focus:outline-none">
          <span>Hosting</span>
          <!-- Dropdown Arrow Icon -->
          <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
            <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 10.584l3.71-3.354a.75.75 0 111.04 1.08l-4 3.625a.75.75 0 01-1.04 0l-4-3.625a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
          </svg>
        </button>
        
        <!-- Hosting Dropdown Menu -->
        <div id="mobile-hosting-menu" class="hidden flex-col mt-2 space-y-2 bg-blue-700 rounded-md">
          <a href="bdix-hosting.php" class="flex items-center px-4 py-2 text-sm text-white hover:bg-blue-800 focus:ring-2 focus:ring-blue-500">
            <!-- BDIX Icon -->
              <i class="fa-solid fa-database w-4 h-4 mr-2"></i>
            BDIX Hosting
          </a>
          <a href="germany-hosting.php" class="flex items-center px-4 py-2 text-sm text-white hover:bg-blue-800 focus:ring-2 focus:ring-blue-500">
            <!-- Germany Icon -->
          <i class="fa-solid fa-bangladeshi-taka-sign w-4 h-4 mr-2"></i>
            Cheap Hosting
          </a>
          <a href="cloud-hosting.php" class="flex items-center px-4 py-2 text-sm text-white hover:bg-blue-800 focus:ring-2 focus:ring-blue-500">
            <!-- Cloud Icon -->
            <i class="fa-solid fa-cloud w-4 h-4 mr-2"></i>
            Cloud Hosting
          </a>
          <a href="premium-hosting.php" class="flex items-center px-4 py-2 text-sm text-white hover:bg-blue-800 focus:ring-2 focus:ring-blue-500">
            <!-- Premium Icon -->
            <i class="fa-solid fa-ranking-star w-4 h-4 mr-2"></i>
            Premium Hosting
          </a>
          <a href="corporate-hosting.php" class="flex items-center px-4 py-2 text-sm text-white hover:bg-blue-800 focus:ring-2 focus:ring-blue-500">
            <!-- Corporate Icon -->
          <i class="fa-solid fa-user-tie w-4 h-4 mr-2"></i>
            Corporate Hosting
          </a>
        </div>
      </div>
      <!-- End Hosting Dropdown in Mobile -->
      
      <!-- 🆕 Reseller Dropdown in Mobile -->
      <div class="relative">
        <button id="mobile-reseller-toggle" aria-haspopup="true" aria-expanded="false" class="flex justify-between items-center w-full px-4 py-2 rounded hover:bg-blue-800 focus:outline-none">
          <span>Reseller</span>
          <!-- Dropdown Arrow Icon -->
          <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
            <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 10.584l3.71-3.354a.75.75 0 111.04 1.08l-4 3.625a.75.75 0 01-1.04 0l-4-3.625a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
          </svg>
        </button>
        
        <!-- Reseller Dropdown Menu -->
        <div id="mobile-reseller-menu" class="hidden flex-col mt-2 space-y-2 bg-blue-700 rounded-md">
          <a href="mini-reseller.php" class="flex items-center px-4 py-2 text-sm text-white hover:bg-blue-800 focus:ring-2 focus:ring-blue-500">
            <!-- Mini Reseller Icon -->
            <svg class="w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14" />
            </svg>
            Mini Reseller
          </a>
          <a href="master-reseller.php" class="flex items-center px-4 py-2 text-sm text-white hover:bg-blue-800 focus:ring-2 focus:ring-blue-500">
            <!-- Master Reseller Icon -->
            <svg class="w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14" />
            </svg>
            Master Reseller
          </a>
          <a href="alpha-reseller.php" class="flex items-center px-4 py-2 text-sm text-white hover:bg-blue-800 focus:ring-2 focus:ring-blue-500">
            <!-- Alpha Reseller Icon -->
            <svg class="w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14" />
            </svg>
            Alpha Reseller
          </a>
        </div>
      </div>
      <!-- End Reseller Dropdown in Mobile -->
      
     <!-- VPS Dropdown in Mobile -->
<div class="relative">
  <button id="mobile-vps-toggle" aria-haspopup="true" aria-expanded="false" class="flex justify-between items-center w-full px-4 py-2 rounded hover:bg-blue-800 focus:outline-none">
    <span>VPS</span>
    <!-- Dropdown Arrow Icon -->
    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
      <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 10.584l3.71-3.354a.75.75 0 111.04 1.08l-4 3.625a.75.75 0 01-1.04 0l-4-3.625a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
    </svg>
  </button>
  
  <!-- VPS Dropdown Menu -->
  <div id="mobile-vps-menu" class="hidden flex-col mt-2 space-y-2 bg-blue-700 rounded-md">
    <a href="linux-vps.php" class="flex items-center px-4 py-2 text-sm text-white hover:bg-blue-800 focus:ring-2 focus:ring-blue-500">
      <!-- Linux VPS Icon -->
      <i class="fa-brands fa-linux w-4 h-4 mr-2"></i>
      Linux VPS
    </a>
    <a href="windows-vps.php" class="flex items-center px-4 py-2 text-sm text-white hover:bg-blue-800 focus:ring-2 focus:ring-blue-500">
      <!-- Windows VPS Icon -->
      <i class="fa-brands fa-windows w-4 h-4 mr-2"></i>
      Windows VPS
    </a>
     <a href="Storage-vps.php" class="flex items-center px-4 py-2 text-sm text-white hover:bg-blue-800">
      <!-- Storage VPS Icon -->
      <i class="fa-solid fa-hard-drive w-4 h-4 mr-2"></i>
      Storage VPS
    </a>
  </div>
</div>
<!-- End VPS Dropdown in Mobile -->
<!-- Dedicated Server -->
<a href="dedicated-server.php" class="flex items-center px-4 py-2 rounded hover:bg-blue-800">
  Dedicated Server
</a>





<!-- License -->
<a href="license.php" class="flex items-center px-4 py-2 rounded hover:bg-blue-800">
  License
</a>





      <a href="offers.php" class="nav-link flex items-center px-4 py-2 rounded hover:bg-blue-800 focus:ring-2 focus:ring-blue-500">
        <!-- Offers Icon -->
        <svg class="w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-width="2" stroke-linecap="round" stroke-linejoin="round" d="M3 3h18v18H3V3z" />
        </svg>
        Offers <span class="bg-red-500 text-white text-xs px-2 py-0.5 rounded ml-2">1</span>
      </a>
      <a href="contact.php" class="nav-link flex items-center px-4 py-2 rounded hover:bg-blue-800 focus:ring-2 focus:ring-blue-500">
        <!-- Contact Icon -->
        <svg class="w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-width="2" stroke-linecap="round" stroke-linejoin="round" d="M8 10h.01M12 10h.01M16 10h.01M21 12c0 4.418-3.582 8-8 8H11a8 8 0 01-8-8V4a8 8 0 018-8h2a8 8 0 018 8v8z" />
        </svg>
        Contact
      </a>
      
      <!-- Action Buttons (Mobile) -->
      <div class="flex space-x-4 mt-4">
        <a href="https://fhostbd.com/portal/index.php?rp=/login" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 flex items-center focus:ring-2 focus:ring-blue-500">
          <!-- Login Icon -->
          <svg class="w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 17l-4 4m0 0l-4-4m4 4V3" />
          </svg>
          Login
        </a>
        <a href="https://fhostbd.com/portal/register.php" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600 flex items-center focus:ring-2 focus:ring-green-500">
          <!-- Sign-Up Icon -->
          <svg class="w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
          </svg>
          Sign-UP
        </a>
      </div>
    </div>
  </nav>
  
<script>

document.addEventListener('DOMContentLoaded', () => {
  // Toggle mobile menu
  const menuToggle = document.getElementById('menu-toggle');
  const mobileMenu = document.getElementById('mobile-menu');
  menuToggle?.addEventListener('click', () => {
    mobileMenu?.classList.toggle('hidden');
    menuToggle.setAttribute(
      'aria-expanded',
      mobileMenu.classList.contains('hidden') ? 'false' : 'true'
    );
  });

  // Dropdown toggles
  const dropdownToggles = document.querySelectorAll('[aria-haspopup="true"]');
  dropdownToggles.forEach((toggle) => {
    const menu = toggle.nextElementSibling;
    toggle.addEventListener('click', (e) => {
      e.stopPropagation();
      menu?.classList.toggle('hidden');
      toggle.setAttribute(
        'aria-expanded',
        menu?.classList.contains('hidden') ? 'false' : 'true'
      );
    });
  });

  // Close all menus on click outside or Escape key
  document.addEventListener('click', () => {
    dropdownToggles.forEach((toggle) => {
      const menu = toggle.nextElementSibling;
      menu?.classList.add('hidden');
      toggle.setAttribute('aria-expanded', 'false');
    });
  });
  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape') {
      dropdownToggles.forEach((toggle) => {
        const menu = toggle.nextElementSibling;
        menu?.classList.add('hidden');
        toggle.setAttribute('aria-expanded', 'false');
      });
      mobileMenu?.classList.add('hidden');
      menuToggle.setAttribute('aria-expanded', 'false');
    }
  });
});
</script>





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

  <!-- 🏠 3. Example Content Below Navbar -->
  <!-- Your page content goes here -->