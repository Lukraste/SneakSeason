<!DOCTYPE html>
<html lang="fr">

<head>
  @include('components.head')
</head>


<body>

 
  @include('components.header')
   
  @yield('content')

  @include('components.footer')

  <!-- Script pour le slider d'images d'un produit -->

  <!-- Script pour les élements Tailwindcss -->

  <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
  <script>
    const activeImage = document.querySelector(".product-image .active");
    const productImages = document.querySelectorAll(".image-list img");
  
    function changeImage(e) {
      activeImage.src = e.target.src;
    }
    function toggleNavigation(){
    this.nextElementSibling.classList.toggle('active');
    } 
    productImages.forEach(image => image.addEventListener("click", changeImage));
  </script>
  <script src="https://cdn.tailwindcss.com"></script>
</body>
</html>