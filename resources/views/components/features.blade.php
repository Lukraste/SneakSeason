<div id="features">
   <a href="{{ route('user.orders') }}">
       <img src="{{ asset('images/icons/shopping-cart.png')}}"alt="account-icon">
   </a>
   <a href="{{ route('user.favoris') }}">
       <img  src="{{ asset('images/icons/heart.png')}}"alt="account-icon">
   </a>
   <a href="{{ route('user.index') }}">
       <img class="white" src="{{ asset('images/icons/account.png')}}"alt="account-icon">
   </a>

   <form action="{{ route('logout') }}" method="post">
    @csrf
        <button type="submit">
            <img src="{{ asset('images/icons/exit.png')}}"alt="account-icon">
        </button>
   </form>
</div>