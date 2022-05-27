<nav class="navbar navbar-expand-lg shadow-lg py-2 [bg-#171730] text-[#dbe1e3] text-xs sm:text-lg md:text-xl relative flex items-center w-full justify-center">
   <div class="px-1">
     <button class="navbar-toggler border-0 py-3 lg:hidden leading-none transition-shadow duration-150 ease-in-out" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContentZ" aria-controls="navbarSupportedContentZ" aria-expanded="false" aria-label="Toggle navigation">
       <svg aria-hidden="true" focusable="false" data-prefix="fas" class="w-6" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
         <path fill="currentColor" d="M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z"></path>
       </svg>
     </button>
     <div class="navbar-collapse collapse grow items-center" id="navbarSupportedContentZ">
       <ul class="navbar-nav mr-auto flex flex-row">

         <li class="nav-item">
           <a class="nav-link block pr-2 lg:px-2 py-2" id="hover-underline-animation" href="{{ route('sneakers.season')}}" data-mdb-ripple="true" data-mdb-ripple-color="light">Sélection de saison</a>
         </li>

         <li class="nav-item">
          <a class="nav-link block pr-2 lg:px-2 py-2 " id="hover-underline-animation" href="/sneakers/nouveautes" data-mdb-ripple="true" data-mdb-ripple-color="light">Nouveautés</a>
        </li>

         <li class="nav-item dropdown static">
           <a class="nav-link block pr-2 lg:px-2 py-2 dropdown-toggle flex items-center whitespace-nowrap" href="#" data-mdb-ripple="true" data-mdb-ripple-color="light" type="button" id="dropdownMenuButtonZ" data-bs-toggle="dropdown"
           aria-expanded="false">Marques
             <svg  aria-hidden="true" focusable="false" data-prefix="fas" data-icon="caret-down" class="w-2 ml-2" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
               <path fill="currentColor" d="M31.3 192h257.3c17.8 0 26.7 21.5 14.1 34.1L174.1 354.8c-7.8 7.8-20.5 7.8-28.3 0L17.2 226.1C4.6 213.5 13.5 192 31.3 192z"></path>
             </svg>
           </a>

           <div class="dropdown-menu w-full mt-0 hidden shadow-lg bg-white absolute text-xs sm:text-sm md:text-lg left-0 top-full text-[#171730] " aria-labelledby="dropdownMenuButtonZ">
             <div class="px-36 py-4">
               <div class="grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-6">

                  @foreach ($brands as $brand)
                    <div class="bg-white">
                      <a href="{{ route('brands.show', ['slug' => $brand->slug]) }}">
                          <p class="block py-2 border-b border-gray-300 w-38 uppercase font-semibold hover:underline">
                            {{ $brand->name }}
                          </p>
                      </a>
                      @foreach ($brand->modeles as $modele)
                        <a href="#" aria-current="true" class="block py-2 text-primary border-b border-gray-300 w-38 hover:underline transition duration-150 ease-in-out flex items-center">
                          <svg aria-hidden="true" focusable="false" data-prefix="fas" class="w-1.5 mr-1.5" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 192 512">
                            <path fill="currentColor" d="M0 384.662V127.338c0-17.818 21.543-26.741 34.142-14.142l128.662 128.662c7.81 7.81 7.81 20.474 0 28.284L34.142 398.804C21.543 411.404 0 402.48 0 384.662z"></path>
                          </svg>
                          {{ $modele->name }}
                        </a>
                      @endforeach
                    </div>
                  @endforeach
               </div>
             </div>
           </div>
         </li>

         <li class="nav-item">
          <a class="nav-link block pr-2 lg:px-2 py-2    transition duration-150 ease-in-out" id="hover-underline-animation" href="{{ route('sneakers.popular')}}" data-mdb-ripple="true" data-mdb-ripple-color="light">Populaires</a>
        </li>

         <li class="nav-item">
          <a class="nav-link block pr-2 lg:px-2 py-2    transition duration-150 ease-in-out" id="hover-underline-animation" href="{{ route('sneakers.all')}}" data-mdb-ripple="true" data-mdb-ripple-color="light">Sneakers</a>
        </li>

        <li class="nav-item">
          <a class="nav-link block pr-2 lg:px-2 py-2    transition duration-150 ease-in-out" id="hover-underline-animation" href="{{ route('sneakers.discounts')}}" data-mdb-ripple="true" data-mdb-ripple-color="light">Promotions</a>
        </li>
       </ul>
     </div>
   </div>
 </nav>