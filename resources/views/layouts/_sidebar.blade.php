<div class="sidebar bg-light text-dark" style="width: 220px; height: 100vh; position: fixed; top: 0; left: 0; overflow: auto;">
  <div class="p-3">
    <h4 class="text-primary mb-4">
      <i class="fas fa-tachometer-alt"></i> Menu
    </h4>
    <ul class="nav flex-column">
      <li class="nav-item">
        <a class="nav-link" href="#" data-bs-toggle="collapse" data-bs-target="#submenu" aria-expanded="false">
          <i class="fas fa-bars me-2"></i> Menu
        </a>
        <ul class="collapse" id="submenu">
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/presentation') }}">
              <i class="fas fa-user me-2"></i> Présentation
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/campus') }}">
              <i class="fas fa-map-marker-alt me-2"></i> Campus
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/formations') }}">
              <i class="fas fa-graduation-cap me-2"></i> Nos Formations
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/contact') }}">
              <i class="fas fa-envelope me-2"></i> Contact
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-primary" href="{{ route('preinscription') }}">
              <i class="fas fa-pencil-alt me-2"></i> Préinscription
            </a>
          </li>
        </ul>
      </li>
    </ul>
  </div>
</div>
