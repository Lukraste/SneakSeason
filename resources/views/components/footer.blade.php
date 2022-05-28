<footer>
        <div class="mx-auto container py-16 xl:px-20 lg:px-12 sm:px-6 px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-3 md:gap-8 gap-4 text-[#dbe1e3] text-sm lg:text-lg">
                <div class="flex flex-col flex-shrink-0">
                    <h1 class="font-semibold mr-36" >SneakSeason</h1>
                    <p class="leading-none">Copyright © 2022 SneakSeason</p>
                    <p class="leading-none">Tous droits réservés</p>

                    @include('components.socials')

                </div>
                <div class="flex mt-8 pt-6 flex-col">
                    <h2 class="font-semibold leading-2 ">En savoir plus</h2>
                    <a href="{{route('who')}}" class="focus:outline-none focus:underline hover:underline  leading-4 mt-6 cursor-pointer">Qui sommes-nous ?</a>
                    <a href="{{route('rgpd')}}" class="focus:outline-none focus:underline hover:underline  leading-4 mt-6  cursor-pointer">Politiques de confidentialité</a>
                </div>
                
            <div class="flex mt-8 pt-6 flex-col">
                <h2 class="font-semibold leading-3 ">Contacts</h2>
                <a href="javascript:void(0)" class="focus:outline-none focus:underline hover:underline  leading-4 mt-6 cursor-pointer">Tél : +32 xxx.xx.xx.xx</a>
                <a href="javascript:void(0)" class="focus:outline-none focus:underline hover:underline  leading-4 mt-6  cursor-pointer">contact@sneakseason.be</a>
            </div>

                <!-- <div class="mt-10 lg:block hidden">
                    <label class="text-lg font-medium leading-4 ">S'abonner à la newsletter</label>
                    <div class="cursor-pointer flex items-center justify-between border border-gray-800 dark:border-white mt-4">
                        <input type="text" class=" leading-4 p-4 w-full focus:outline-none  dark:placeholder-white dark:bg-gray-900 dark:border-white placeholder-gray-800" placeholder="Votre adresse e-mail" />
                        <button aria-label="send" class="mr-4 fill-current text-gray-800 hover:underline focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800">
                            <svg class="dark:text-white dark:hover:text-gray-200" width="16" height="17" viewBox="0 0 16 17" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M14.8934 7.39673L14.8884 7.39457L1.54219 1.9166C1.42993 1.87011 1.30778 1.85187 1.18666 1.86353C1.06554 1.87519 0.949225 1.91637 0.848125 1.9834C0.741311 2.05266 0.653573 2.14711 0.592805 2.25826C0.532037 2.36941 0.500145 2.49376 0.5 2.62013V6.12357C0.50006 6.29633 0.561019 6.46366 0.67237 6.59671C0.783722 6.72976 0.938491 6.82021 1.11 6.85246L8.38906 8.18438C8.41767 8.18974 8.44348 8.20482 8.46205 8.22701C8.48062 8.2492 8.49078 8.2771 8.49078 8.30591C8.49078 8.33472 8.48062 8.36263 8.46205 8.38481C8.44348 8.407 8.41767 8.42208 8.38906 8.42744L1.11031 9.75936C0.938851 9.79153 0.784092 9.88185 0.67269 10.0148C0.561288 10.1477 0.500219 10.3149 0.5 10.4876V13.9917C0.499917 14.1124 0.530111 14.2312 0.587871 14.3374C0.645632 14.4437 0.729152 14.5341 0.830938 14.6006C0.953375 14.6811 1.09706 14.7241 1.24406 14.7243C1.34626 14.7242 1.4474 14.7039 1.54156 14.6646L14.8875 9.21787L14.8934 9.21509C15.0731 9.13869 15.2262 9.01185 15.3337 8.85025C15.4413 8.68866 15.4986 8.49941 15.4986 8.30591C15.4986 8.11241 15.4413 7.92316 15.3337 7.76157C15.2262 7.59997 15.0731 7.47313 14.8934 7.39673Z"
                                    fill="currentColor"
                                />
                            </svg>
                        </button>
                    </div>
                </div> -->
            </div>

            <div class="mt-10 lg:hidden">
                <label class="font-medium leading-5 ">S'abonner à la newsletter</label>
                <div class="flex items-center justify-between border border-gray-800 dark:border-white mt-4">
                    <input type="text" class=" leading-4 p-4 relative z-0 w-full focus:outline-none text-gray-800 placeholder-gray-800 dark:text-white dark:placeholder-white dark:border-white dark:bg-gray-900" placeholder="Enter your email" />
                    <button aria-label="send" class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800 cursor-pointer mr-4 cursor-pointer relative z-40">
                        <svg class="fill-current text-gray-800 hover:underline dark:text-white dark:hover:text-gray-200" width="16" height="17" viewBox="0 0 16 17" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M14.8934 7.39673L14.8884 7.39457L1.54219 1.9166C1.42993 1.87011 1.30778 1.85187 1.18666 1.86353C1.06554 1.87519 0.949225 1.91637 0.848125 1.9834C0.741311 2.05266 0.653573 2.14711 0.592805 2.25826C0.532037 2.36941 0.500145 2.49376 0.5 2.62013V6.12357C0.50006 6.29633 0.561019 6.46366 0.67237 6.59671C0.783722 6.72976 0.938491 6.82021 1.11 6.85246L8.38906 8.18438C8.41767 8.18974 8.44348 8.20482 8.46205 8.22701C8.48062 8.2492 8.49078 8.2771 8.49078 8.30591C8.49078 8.33472 8.48062 8.36263 8.46205 8.38481C8.44348 8.407 8.41767 8.42208 8.38906 8.42744L1.11031 9.75936C0.938851 9.79153 0.784092 9.88185 0.67269 10.0148C0.561288 10.1477 0.500219 10.3149 0.5 10.4876V13.9917C0.499917 14.1124 0.530111 14.2312 0.587871 14.3374C0.645632 14.4437 0.729152 14.5341 0.830938 14.6006C0.953375 14.6811 1.09706 14.7241 1.24406 14.7243C1.34626 14.7242 1.4474 14.7039 1.54156 14.6646L14.8875 9.21787L14.8934 9.21509C15.0731 9.13869 15.2262 9.01185 15.3337 8.85025C15.4413 8.68866 15.4986 8.49941 15.4986 8.30591C15.4986 8.11241 15.4413 7.92316 15.3337 7.76157C15.2262 7.59997 15.0731 7.47313 14.8934 7.39673Z"
                                fill="currentColor"
                            />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </footer>

