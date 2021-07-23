
<section class="h-100 w-100 bg-white" style="box-sizing: border-box">
    <style>
      @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

      .navbar-1-2.navbar-light .navbar-nav .nav-link {
        color: #28b5b5;
        transition: 0.3s;
      }

      .navbar-1-2.navbar-light .navbar-nav .nav-link:hover {
        font-weight: 500;
        color: #F9B208 ;
      }

      .navbar-1-2 .btn-get-started {
        border-radius: 20px;
        padding: 12px 30px;
        font-weight: 500;
      }

      .navbar-1-2 .btn-get-started-yellow {
        background-color: #28b5b5;
        color: #ffff;
        transition: 0.3s;
      }

      .navbar-1-2 .btn-get-started-yellow:hover {
        background-color: #F9B208;
        color: #fff;
        transition: 0.3s;
      }
    </style>
    <nav class="navbar-1-2 navbar navbar-expand-lg navbar-light p-4 px-md-4 mb-3 bg-body"
      style="font-family: Poppins, sans-serif">
      <div class="container">
        <a class="navbar-brand" href="<?=base_url();?>">
         <img src="<?=base_url()?>/logo.svg" style="width:128px" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02"
          aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link px-md-4" href="<?=base_url()?>/kelass">Kelas</a>
            </li>
            <li class="nav-item">
              <a class="nav-link px-md-4" href="<?=base_url()?>/toko">Toko</a>
            </li>
            <li class="nav-item">
              <a class="nav-link px-md-4" href="https://www.instagram.com/subhitech_/">Microblog</a>
            </li>
            
          </ul>
          <div class="d-flex">
            <a class="btn btn-get-started btn-get-started-yellow" href="#">Get Started</a>
          </div>
        </div>
      </div>
    </nav>
  </section> 