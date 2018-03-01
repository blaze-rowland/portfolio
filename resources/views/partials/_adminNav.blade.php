<nav class="nav-left">
  <ul class="links">
    <a href="{{ route('home') }}">
      <li><i class="fa fa-home"></i></li>
    </a>
    <a href="{{ route('revenue') }}">
      <li><i class="fa fa-credit-card-alt"></i></li>
    </a>
    <a href="{{ route('projects') }}">
      <li><i class="fa fa-briefcase"></i></li>
    </a>
    <a href="{{ route('clients') }}">
      <li><i class="fa fa-users"></i></li>
    </a>
    <a href="{{ route('posts') }}">
      <li>
        <i><i class="fa fa-rss"></i></i>
      </li>
    </a>
    @include('partials._adminControls')
    <a href="{{ url('/logout') }}">
      <li>
        <i class="fa fa-sign-out"></i>
      </li>
    </a>
  </ul>
</nav>
