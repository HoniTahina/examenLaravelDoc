<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
      <a class="sidebar-brand brand-logo" href="index.html"><img src="admin/assets/images/logo.svg" alt="logo" /></a>
      <a class="sidebar-brand brand-logo-mini" href="index.html"><img src="admin/assets/images/logo-mini.svg" alt="logo" /></a>
    </div>
    <ul class="nav">
      <li class="nav-item profile">
        <div class="profile-desc">
          <div class="profile-pic">
            <div class="count-indicator">
              <img class="img-xs rounded-circle " src="admin/assets/images/faces/face15.jpg" alt="">
              <span class="count bg-success"></span>
            </div>
            <div class="profile-name">
              <h5 class="mb-0 font-weight-normal">Henry Klein</h5>
              <span>Gold Member</span>
            </div>
          </div>
          
        </div>
      </li>
      <li class="nav-item nav-category">
        <span class="nav-link">Navigation</span>
      </li>
   
      <li class="nav-item menu-items mt-3">
        <a class="nav-link" href="{{url('home')}}">
          <span class="menu-icon">
            <i class="mdi mdi-file-document-box"></i>
          </span>
          <span class="menu-title">Tableau de bord</span> 
        </a>
      </li>

      <li class="nav-item menu-items mt-3">
        <a class="nav-link" href="{{url('liste-demandes')}}">
          <span class="menu-icon">
            <i class="mdi mdi-file-document-box"></i>
          </span>
          <span class="menu-title">Demandes</span>
        </a>
      </li>

      <li class="nav-item menu-items mt-3">
        <a class="nav-link" href="{{url('archive-demandes')}}">
          <span class="menu-icon">
            <i class="mdi mdi-file-document-box"></i>
          </span>
          <span class="menu-title">Archive</span>
        </a>
      </li>

      {{-- <li class="nav-item menu-items mt-3">
        <a class="nav-link" href="{{url('showdocument')}}">
          <span class="menu-icon">
            <i class="mdi mdi-file-document-box"></i>
          </span>
          <span class="menu-title">Tous les documents</span>
        </a>
      </li> --}}
      <li class="nav-item menu-items mt-3">
        <a class="nav-link" href="{{url('showuser')}}">
          <span class="menu-icon">
            <i class="mdi mdi-file-document-box"></i>
          </span>
          <span class="menu-title">Liste des utilisateurs</span>
        </a>
      </li>
    </ul>
  </nav>
