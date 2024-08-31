
@yield('php_code')
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
     tailwind.config = {
        theme: {
          extend: {},
        },
        plugins: [],
      }
    </script>
    

   
    <title>@yield('title') </title>
    @yield('header')

  </head>
  <body>

    
      @include('user.components.navbar')

 
        @yield('content')
 
  
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
     document.addEventListener('DOMContentLoaded', function() {
    const mobileMenu = document.getElementById('mobile-menu');
    const mobileMenuContent = mobileMenu.querySelector('div');
    const hamburgerButton = document.querySelector('.hamburger-button');
    const closeMenuButton = document.querySelector('.close-menu-button');

    function toggleMenu() {
        mobileMenu.classList.toggle('opacity-0');
        mobileMenu.classList.toggle('pointer-events-none');
        mobileMenuContent.classList.toggle('-translate-x-full');
    }

    hamburgerButton.addEventListener('click', toggleMenu);
    closeMenuButton.addEventListener('click', toggleMenu);
});
  </script>
 
    @yield('scripts')
  </body>
</html>

