<header>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="#">Navbar</a>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item">
                <a class="nav-link" aria-current="page" <?= \App\Core\Router\Router::routerLink("acceuil")?>>ACCUEIL</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" <?= \App\Core\Router\Router::routerLink("formation")?>>FORMATION</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" <?= \App\Core\Router\Router::routerLink("condition_admission")?>>CONDITION D'ADMISSION</a>
              </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
</header>


<header>
      <nav
        class="navbar navbar-expand-sm bg-light p-2 mb-3 "
      >
      <!-- shadow , rounded  bg-body-->
      <!--      mb-5 ==>>mb-3       -->
        <div class="container-fluid">
          <a class="navbar-brand" href="#"
            ><img class="" src="./images/Logo_MIt.png" alt=""
          /></a>
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
                <a class="nav-link" aria-current="page" >CONTACTS</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>