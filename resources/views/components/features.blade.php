<div id="features">
   <a href="{{ route('user.orders') }}">
       <img src="{{ asset('storage/images/icons/shopping-cart.png')}}"alt="account-icon">
   </a>
   <a href="{{ route('user.favoris') }}">
       <img  src="{{ asset('storage/images/icons/heart.png')}}"alt="account-icon">
   </a>
   <a href="{{ route('user.index') }}">
       <img class="white" src="{{ asset('storage/images/icons/account.png')}}"alt="account-icon">
   </a>

   <form action="{{ route('logout') }}" method="post">
    @csrf
        <button type="submit">
            <img src="{{ asset('storage/images/icons/exit.png')}}"alt="account-icon">
        </button>
   </form>
</div>