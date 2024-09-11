<nav class="custom-navbar bg-white shadow-md">
  <div class="container mx-auto px-4 py-3 flex items-center justify-between">
    <!-- Logo -->
    <a class="text-white text-2xl font-semibold" href="#">Asad-Web</a>
    
    <!-- Search Form (Center) -->
    <div class="flex-1 flex justify-center hidden md:flex">
      <form class="flex items-center space-x-2 w-full max-w-2xl"> <!-- Slightly narrower width -->
        <input class="form-control border rounded-full px-4 py-2 w-full" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success px-4 py-2 rounded-full" type="submit">Search</button>
      </form>
    </div>
    
    <!-- Mobile Menu Button -->
    <button class="block md:hidden text-FCF6F5 focus:outline-none" id="menu-toggle">
      <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
      </svg>
    </button>
    
    <!-- Navigation Links (Desktop) -->
    <div class="hidden md:flex space-x-6 ml-auto">
      <a class="custom-nav-link" href="{{'/'}}">Home</a>
      <a class="custom-nav-link" href="{{'/index'}}">Products</a>
      <a class="custom-nav-link" href="{{'/std'}}">Form</a>
      <a class="custom-nav-link" href="#contact">Contact</a>
    </div>
  </div>
  
  <!-- Mobile Menu (Hidden by default) -->
  <div class="md:hidden hidden bg-white shadow-md" id="mobile-menu">
    <ul class="space-y-4 py-4 px-6">
      <li><a class="custom-nav-link" href="{{'/'}}">Home</a></li>
      <li><a class="custom-nav-link" href="{{'/index'}}">Products</a></li>
      <li><a class="custom-nav-link" href="{{'/std'}}">Form</a></li>
      <li><a class="custom-nav-link" href="#contact">Contact</a></li>
    </ul>
  </div>
  
  <!-- Mobile Search Form (Hidden by default) -->
  <div class="md:hidden hidden w-full bg-white shadow-md" id="mobile-search">
    <form class="flex items-center space-x-2 w-full px-4 py-2">
      <input class="form-control border rounded-full px-4 py-2 w-full" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success px-4 py-2 rounded-full" type="submit">Search</button>
    </form>
  </div>
</nav>

<!-- Add some Tailwind CSS for styles -->
<style>
  .custom-navbar {
    background-color: #ffffff; /* Adjust as needed */
  }
  .custom-nav-link {
    color: #990011; /* Adjust as needed */
    text-decoration: none;
    padding: 0.5rem;
    transition: color 0.3s ease;
  }
  .custom-nav-link:hover {
    color: #FCF6F5; /* Adjust as needed */
  }
  .btn-outline-success {
    border: 1px solid #990011; /* Adjust as needed */
    color: #990011; /* Adjust as needed */
  }
  .btn-outline-success:hover {
    background-color: #990011; /* Adjust as needed */
    color: #ffffff; /* Adjust as needed */
  }
</style>

<!-- Add JavaScript to toggle mobile menu and search visibility -->
<script>
  document.getElementById('menu-toggle').addEventListener('click', function() {
    const mobileMenu = document.getElementById('mobile-menu');
    mobileMenu.classList.toggle('hidden');
  });

  document.getElementById('search-toggle').addEventListener('click', function() {
    const mobileSearch = document.getElementById('mobile-search');
    mobileSearch.classList.toggle('hidden');
  });
</script>
