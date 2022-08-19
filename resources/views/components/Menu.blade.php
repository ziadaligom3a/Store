<div class="user_option_box">
    @guest
    <a href="/Login" class="account-link">
      <i class="fa fa-user" aria-hidden="true"></i>
      <span>
        Login
      </span>
    </a>
    <a href="/Register" class="account-link">
      <i class="fa fa-user" aria-hidden="true"></i>
      <span>
        Register
      </span>
    </a>
   
    @endguest
    @auth
    @if(@auth()->id() == 1)
    <a href="/Admin/Dashboard" class="account-link">
      <i class="fa fa-user" aria-hidden="true"></i>
      <span>
        Admin Dashboard
      </span>
    </a>

    @endif
    
    <a href="/My-Account" class="account-link">
      <i class="fa fa-user" aria-hidden="true"></i>
      <span>
        My Account
      </span>
    </a>
    
    @endauth
   
    <a href="" class="cart-link">
      <i class="fa fa-shopping-cart" aria-hidden="true"></i>
      <span>
        Cart
      </span>
    </a>
  </div>