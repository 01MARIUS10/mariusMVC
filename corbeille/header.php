<header>
  <nav class="navbar navbar-expand-sm bg-light shadow p-2 mb-5 bg-body rounded">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <img class="" src="./assets/images/Logo_MIt.png" alt=""/>
          </a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
          <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul
              class="navbar-nav navUl d-flex justify-content-md-end justify-content-lg-around mb-2"
            >
              <li class="nav-item">
                <a class="nav-link" aria-current="page" <?= \App\Core\Router\Router::routerLink("acceuil")?>>ACCUEIL</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" <?= \App\Core\Router\Router::routerLink("formation")?>>FORMATION</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" <?= \App\Core\Router\Router::routerLink("condition_admission")?>>CONDITION D'ADMISSION</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" >CONTACTS</a>
              </li>
            </ul>
          </div>
        </div>
  </nav>
</header>