 <!-- Barre de navigation + menu hamburger -->

 <nav class="navbar navbar-expand-lg shadow-lg py-2 [bg-#171730] text-[#dbe1e3] relative flex items-center w-full justify-center">
   <div class="px-6">
       <button
           class="navbar-toggler border-0 py-3 lg:hidden justify-center  leading-none text-xl bg-transparent"
           type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContentZ"
           aria-controls="navbarSupportedContentZ" aria-expanded="false" aria-label="Toggle navigation">
           <svg aria-hidden="true" focusable="false" data-prefix="fas" class="w-7" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
               <path fill="currentColor" d="M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z"></path>
           </svg>
       </button>

       <div class="navbar-collapse collapse grow items-center" id="navbarSupportedContentZ">
               <ul class="navbar-nav mr-auto flex flex-row align-center">
                   <li class="nav-item">
                       <a class="nav-link block pr-2 lg:px-2 py-2  transition duration-150 ease-in-out" id="hover-underline-animation" href="/selecion-de-saison" data-mdb-ripple="true" data-mdb-ripple-color="light">
                           Sélection de saison
                       </a>
                   </li>
                   <li class="nav-item">
                       <a class="nav-link block pr-2 lg:px-2 py-2 transition duration-150 ease-in-out" id="hover-underline-animation" href="/nouveautes" data-mdb-ripple="true" data-mdb-ripple-color="light">
                           Nouveautes
                       </a>
                   </li>
                   <li class="nav-item">
                       <a  class="nav-link block pr-2 lg:px-2 py-2 transition duration-150 ease-in-out" id="hover-underline-animation" href="/populaire" data-mdb-ripple="true" data-mdb-ripple-color="light">
                           Populaires
                       </a>
                   </li>

                   <li class="nav-item dropdown static">
                       <a  class="nav-link block lg:px-0 py-2 transition duration-150 ease-in-out dropdown-toggle flex items-center whitespace-nowrap" href="/toutes-les-sneakers" data-mdb-ripple="true" data-mdb-ripple-color="light" type="button" id="dropdownMenuButtonZ" data-bs-toggle="dropdown" aria-expanded="false">
                           Sneakers
                           <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="caret-down" class="w-2 ml-2" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                               <path fill="currentColor" d="M31.3 192h257.3c17.8 0 26.7 21.5 14.1 34.1L174.1 354.8c-7.8 7.8-20.5 7.8-28.3 0L17.2 226.1C4.6 213.5 13.5 192 31.3 192z"></path>
                           </svg>
                       </a>

                       <div class="dropdown-menu w-full mt-0 hidden shadow-lg bg-white absolute left-0 text-[#171730] top-full text-primary" aria-labelledby="dropdownMenuButtonZ">
                           <div class="px-80 py-4">
                               <div class="grid md:grid-cols-1 lg:grid-cols-5 gap-1">

                                   @foreach ($brands as $brand)
                                       <div class="bg-white">
                                           <a href="/brands/nike">
                                               <p class="block py-2 border-b border-gray-300 w-40 uppercase font-semibold hover:underline">
                                                   {{ $brand->name }}
                                               </p>
                                           </a>
                                           @foreach ($brand->products->take(3) as $product)
                                               <a href="/sneakers/air-force-1" aria-current="true" class="block py-2 text-primary border-b border-gray-300 w-40 hover:underline transition duration-150 ease-in-out flex items-center">
                                                   <svg aria-hidden="true" focusable="false" data-prefix="fas" class="w-1.5 mr-1.5" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 192 512">
                                                       <path fill="currentColor" d="M0 384.662V127.338c0-17.818 21.543-26.741 34.142-14.142l128.662 128.662c7.81 7.81 7.81 20.474 0 28.284L34.142 398.804C21.543 411.404 0 402.48 0 384.662z"></path>
                                                   </svg>
                                                   {{ $product->name }}
                                               </a>
                                           @endforeach
                                       </div>
                                   @endforeach
                               </div>
                           </div>
                       </div>
                   </li>

                   <li class="nav-item">
                       <a class="nav-link block pr-2 lg:px-2 py-2 transition duration-150 ease-in-out" id="hover-underline-animation" href="/promotions" data-mdb-ripple="true"data-mdb-ripple-color="light">
                           Promotions
                       </a>
                   </li>
               </ul>
           </div>
       </div>
   </nav>