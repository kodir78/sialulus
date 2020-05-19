@php
$currentUser = Auth::user()
@endphp
<!-- Navbar -->
<nav class="main-header navbar navbar-expand-md navbar-light navbar-white fixed-top">
  <div class="container">
    <a href="/" class="navbar-brand">
      
      <span class="brand-text font-weight-light"></span>
    </a>
    
    <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse order-3" id="navbarCollapse">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="/"><strong> SMP Negeri 1 Samarinda</strong></a>
        </li>
      </ul>
      
      
    <!-- Right navbar links -->
    
    <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
      <!-- Authentication Links -->
      @guest
      <li class="nav-item">
        <a href="/" class="nav-link">Home</a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link">Hubungi Kami</a>
      </li>
      {{-- <li class="nav-item">
        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
      </li> --}}
      @if (Route::has('register'))
      {{-- <li class="nav-item">
        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
      </li> --}}
      @endif
      @else
      <li class="nav-item">
        <a href="/" class="nav-link">Home</a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link">Hubungi Kami</a>
      </li>
      <li class="nav-item dropdown">
        <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Manage</a>
        <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
          <li>
            <a href="#" class="dropdown-item"><i class="nav-icon fas fa-edit"></i>Informasi Umum </a>
          </li>
          <li><a href="#" class="dropdown-item">Petunjuk Pencarian</a></li>
          <li><a href="{{ route('graduates.index') }}" class="dropdown-item">Data Kelulusan</a></li>
        </ul>
      </li>
      <li class="nav-item dropdown">
        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
          {{ Auth::user()->name }} <span class="caret"></span>
        </a>
        
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{ route('logout') }}"
          onclick="event.preventDefault();
          document.getElementById('logout-form').submit();">
          {{ __('Logout') }}
        </a>
        
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          @csrf
        </form>
      </div>
    </li>
    @endguest
  </ul>
</div>
</nav>