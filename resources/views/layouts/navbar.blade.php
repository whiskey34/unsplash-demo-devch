<nav class="navbar navbar-expand-lg sticky-top bg-white">
    <div class="container">
      <a class="navbar-brand" href="/">
        <img src="assets/images/my_unsplash_logo.svg" alt="logo" class="logo-demo">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <div class="me-auto mb-2 mb-lg-0">
          <form action="/" method="GET">
            <div class="search-bar">
              
                <i class="fa-solid fa-magnifying-glass"></i>
                <input class="form-control ms-2" type="search" name="search" placeholder="Search by name">
              
              {{-- <form class="d-flex" role="search">
              </form> --}}
            </div>
          </form>
        </div>
        
        <button class="bt-modal btn btn-success" data-bs-toggle="modal" data-bs-target="#addPhotoModal">Add a photo</button>
      </div>
    </div>
</nav>