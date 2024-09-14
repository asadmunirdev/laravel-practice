<nav class="custom-navbar bg-white shadow-md">
  <div class="container mx-auto px-4 py-3 flex items-center justify-between">
    <!-- Logo -->
    <a class="text-2xl font-semibold text-white" href="#">Asad-Web</a>
    <!-- Mobile Menu Button -->
    <button class="block md:hidden text-gray-800 focus:outline-none" id="menu-toggle">
      <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
      </svg>
    </button>

    <!-- Navigation Links (Desktop) -->
    <div class="hidden md:flex space-x-6 ml-auto">
      <a class="custom-nav-link" href="{{'/'}}">Home</a>
      <a class="custom-nav-link" href="{{'/index'}}">Products</a>

      <!-- Dropdown for Forms -->
      <div class="relative">
        <button class="custom-nav-link dropdown-toggle" id="dropdownForm" data-dropdown-toggle="dropdown-form">
          Form
          <svg class="w-4 h-4 inline-block ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
          </svg>
        </button>
        <div id="dropdown-form" class="hidden absolute bg-white shadow-md rounded-lg py-2 space-y-2 w-48 mt-2 z-10">
          <a class="block px-4 py-2 hover:bg-gray-100" href="{{'/std'}}">Student Form</a>
          <a class="block px-4 py-2 hover:bg-gray-100" href="{{'/tch'}}">Teacher Form</a>
        </div>
      </div>

      <!-- Dropdown for View Data -->
      <div class="relative">
        <button class="custom-nav-link dropdown-toggle" id="dropdownViewData" data-dropdown-toggle="dropdown-view-data">
          View Data
          <svg class="w-4 h-4 inline-block ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
          </svg>
        </button>
        <div id="dropdown-view-data" class="hidden absolute bg-white shadow-md rounded-lg py-2 space-y-2 w-48 mt-2 z-10">
          <a class="block px-4 py-2 hover:bg-gray-100" href="{{'/get_data'}}">Student Data</a>
          <a class="block px-4 py-2 hover:bg-gray-100" href="{{'/get_tch_data'}}">Teacher Data</a>
        </div>
      </div>

      <a class="custom-nav-link" href="{{'/contact'}}">Contact</a>
    </div>
  </div>

  <!-- Mobile Menu (Hidden by default) -->
  <div class="md:hidden hidden bg-white shadow-md" id="mobile-menu">
    <ul class="space-y-4 py-4 px-6">
      <li><a class="custom-nav-link" href="{{'/'}}">Home</a></li>
      <li><a class="custom-nav-link" href="{{'/index'}}">Products</a></li>
      <li>
        <button class="custom-nav-link" id="mobileFormToggle">Form</button>
        <ul class="hidden space-y-2 py-2 px-4" id="mobileFormDropdown">
          <li><a class="block px-4 py-2 hover:bg-gray-100" href="{{'/std'}}">Student Form</a></li>
          <li><a class="block px-4 py-2 hover:bg-gray-100" href="{{'/tch'}}">Teacher Form</a></li>
        </ul>
      </li>
      <li>
        <button class="custom-nav-link" id="mobileViewDataToggle">View Data</button>
        <ul class="hidden space-y-2 py-2 px-4" id="mobileViewDataDropdown">
          <li><a class="block px-4 py-2 hover:bg-gray-100" href="{{'/get_data'}}">Student Data</a></li>
          <li><a class="block px-4 py-2 hover:bg-gray-100" href="{{'/get_tch_data'}}">Teacher Data</a></li>
        </ul>
      </li>
      <li><a class="custom-nav-link" href="{{'/contact'}}">Contact</a></li>
    </ul>
  </div>
</nav>

<!-- Tailwind CSS Custom Styles -->
<style>
  .custom-navbar {
    background-color: #ffffff;
  }
  .custom-nav-link {
    color: #990011;
    text-decoration: none;
    padding: 0.5rem;
    transition: color 0.3s ease;
  }
  .custom-nav-link:hover {
    color: #FCF6F5;
  }
  .dropdown-toggle:focus {
    outline: none;
  }
</style>

<!-- JavaScript for Dropdowns -->
<script>
  document.addEventListener('DOMContentLoaded', function() {
    // Dropdown for Forms
    const dropdownForm = document.getElementById('dropdownForm');
    const formMenu = document.getElementById('dropdown-form');
    dropdownForm.addEventListener('click', function() {
        formMenu.classList.toggle('hidden');
    });

    // Dropdown for View Data
    const dropdownViewData = document.getElementById('dropdownViewData');
    const viewDataMenu = document.getElementById('dropdown-view-data');
    dropdownViewData.addEventListener('click', function() {
        viewDataMenu.classList.toggle('hidden');
    });

    // Mobile Menu Toggle (Add this part)
    const menuToggle = document.getElementById('menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');
    menuToggle.addEventListener('click', function() {
        mobileMenu.classList.toggle('hidden');
    });

    // Mobile Form Toggle
    const mobileFormToggle = document.getElementById('mobileFormToggle');
    const mobileFormDropdown = document.getElementById('mobileFormDropdown');
    mobileFormToggle.addEventListener('click', function() {
        mobileFormDropdown.classList.toggle('hidden');
    });

    // Mobile View Data Toggle
    const mobileViewDataToggle = document.getElementById('mobileViewDataToggle');
    const mobileViewDataDropdown = document.getElementById('mobileViewDataDropdown');
    mobileViewDataToggle.addEventListener('click', function() {
        mobileViewDataDropdown.classList.toggle('hidden');
    });
});

 </script>
