<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="/">
    <img src="img/logo2.jpg" width="40" height="40" alt="">
    SKÅL
  </a>

  <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">
    <?php

      if(Auth::user()) {
        $nombre=Auth::user()->nombre;
        echo "Hola, ".$nombre;
      }
    ?>
  </a>
  <button class="navbar-toggler py-0" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/">Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/faq">FAQ's</a>
      </li>
    </li>
      <?php if (Auth::user()): ?>
        <a class="nav-link" href="{{ route('logout') }}"
           onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
        <a  class="nav-item"href="/cart"><i class="material-icons" style=color:grey> shopping_cart </i></a>

          <?php else: ?>
          <a class="nav-link" href="/register" tabindex="-1" aria-disabled="true">Register</a>
          <a class="nav-link" href="/login">Login</a>

        <?php endif; ?>

        <?php
        if (Auth::user()&& Auth::user()->perfil == 9): ?>
            <a class="nav-link" href="/abmusuarios">ABM: Usuarios</a>
            <a class="nav-link" href="/abmmuebles">ABM: Muebles</a>
          <?php endif; ?>
      </ul>
  </div>
</nav>
