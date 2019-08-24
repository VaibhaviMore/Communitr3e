<div id="top-bar">
    <div class="container clearfix">

      <div class="col_half fright col_last nobottommargin">
        <div id="top-social">
          <ul>
            <li><a href="{{ url('http://www.facebook.com') }}" target="_blank" class="si-facebook"><span class="ts-icon"><i class="icon-facebook"></i></span><span class="ts-text">Facebook</span></a></li>
            <li><a href="{{ url('http://www.twitter.com') }}" target="_blank" class="si-twitter"><span class="ts-icon"><i class="icon-twitter"></i></span><span class="ts-text">Twitter</span></a></li>
            <li><a href="{{ url('http://www.dribble.com') }}" target="_blank" class="si-dribbble"><span class="ts-icon"><i class="icon-dribbble"></i></span><span class="ts-text">Dribbble</span></a></li>
            <li><a href="{{ url('http://www.github.com') }}" target="_blank" class="si-github"><span class="ts-icon"><i class="icon-github-circled"></i></span><span class="ts-text">Github</span></a></li>
            <li><a href="{{ url('http://www.pinterest.com') }}" target="_blank" class="si-pinterest"><span class="ts-icon"><i class="icon-pinterest"></i></span><span class="ts-text">Pinterest</span></a></li>
            <li><a href="{{ url('http://www.instagram.com') }}" target="_blank" class="si-instagram"><span class="ts-icon"><i class="icon-instagram2"></i></span><span class="ts-text">Instagram</span></a></li>
            <li><a href="tel:+91.11.85412542" class="si-call"><span class="ts-icon"><i class="icon-call"></i></span><span class="ts-text">+1 (519)-577-0762</span></a></li>
            <li><a href="mailto:communitr3e@gmail.com" class="si-email3"><span class="ts-icon"><i class="icon-email3"></i></span><span class="ts-text"><span class="__cf_email__" data-cfemail="a9c0c7cfc6e9cac8c7dfc8da87cac6c4">communitr3e@gmail.com</span></span></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>


  <header id="header" class="full-header">
    <div id="header-wrap">
      <div class="container clearfix">
        <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>
        <div id="logo">
          <a href="{{ url('/home') }}" class="standard-logo float-left"><img src="../images/logo.png" alt="Logo"></a> <a href="index" class="retina-logo"></a> 
            <div class="logo-text float-left">
              <span>Communitr3e</span>
                <p class="font-weight-light font-italic" style="font-size: 16pt;">Everything Under One Hood</p>
            </div>
        
          </div>
        <nav id="primary-menu" class="sub-title">
        <ul>
              <li class="{{ Request::is('home') ? 'current' : '' }}"><a href="{{ url('/home') }}">
                  <div>Home</div>
                  <span>Lets Start</span></a></li>
                <li class="{{ Request::is('about') ? 'current' : '' }}"><a href="{{ url('/about') }}">
                  <div>About</div>
                  <span>Who We Are</span></a></li>
                  <li class="{{ Request::is('programs*') ? 'current' : '' }}"><a href="{{ route('programs.index') }}">
                  <div>Programs</div>
                  <span>Courses &amp; Details</span></a></li>
                <li class="{{ Request::is('accommodation*') ? 'current' : '' }}"><a href="{{ route('accommodation.index') }}">
                  <div>Accommodation</div>
                  <span>Find Your Stay</span></a></li>
                <li class="{{ Request::is('contact') ? 'current' : '' }}"><a href="{{ url('/contact') }}">
                  <div>Contact</div>
                  <span>Get In Touch</span></a></li>
                @if (Route::has('login'))
                    @auth
                <li class="{{ Request::is('profile') ? 'current' : '' }}"><a href="{{ url('/home') }}"><div> {{ Auth::user()->first_name }} </div>
                  <span>Welcome</span></a>
                      <ul>
                        <li><a href="{{ url('/profile') }}"><div>Profile</div></a></li>
                        <li><a href="{{ route('logout') }}"
                          onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();">
                            <div>Logout</div></a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                              @csrf
                            </form>  
                        </li>
                      </ul>
                    </li>
                        @else
                        <li class="{{ Request::is('login') ? 'current' : '' }}"><a href="{{ route('login') }}"><div>Login</div>
                            <span>Access Your Profile</span></a></li>
                            @if (Route::has('register'))
                              <li class="{{ Request::is('register') ? 'current' : '' }}"><a href="{{ route('register') }}">
                                <div>Register</div>
                                <span>Join The Community</span></a></li>
                            @endif
                        @endauth
                    </div>
                @endif
              </ul>
          
          
        </nav>
      </div>
    </div>
  </header>