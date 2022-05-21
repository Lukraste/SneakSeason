<header>

    <div id="main">

        <!-- Logos des réseaux sociaux -->

        @include('components.socials')

        <!-- Logo principal cliquable -->

        <div id="logo">
            <a href="/">
                <img src="{{ asset('storage/images/logos/raccoon-logo.png')}}" alt="logo-sneakseason">
            </a>
        </div>

        <!-- Fonctionnalités utilisateur -->

        @include('components.features')
    </div>

     <!-- Barre de navigation-->

     @include('components.navbar')

      <!-- Carousel d'images -->

     @include('components.carousel')
</header>
