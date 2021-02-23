<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>KELOMPOK 2</title>
    <style>
    /*NAVBAR*/
      .navbar-nav{
        padding-right: 100px;
      }
      .nav-item{
        padding-right: 25px;
      }
      .bg-light{
        background-color: rgba(0, 0, 0,0) !important;
      }
      .bg-nontrans{
        background-color: rgba(255,255,255,255) !important;
      }

    </style>
  </head>
  <body>

    <!-- Navbar -->
    <nav id="navbar" class="navbar navbar-expand-lg fixed-top navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="#home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#gallery">Gallery</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact">Contact Us</a>
            </li>
          </ul>
        </div>
      </div>
  </nav>

  <section id="home">
    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img/1.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="img/2.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="img/3.jpg" class="d-block w-100" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel"  data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#myCarousel"  data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
  </div>
  </section>

  <section id="about" class="bg-secondary">
    <div class="container">
      <div class="row">
        <div class="col-md-8 mx-auto text-center">
          <h1>This is about page</h1>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe non recusandae molestiae qui corporis tempore facere nisi blanditiis, a, ipsum ab! Earum fuga deleniti magni, reiciendis at ab exercitationem saepe.</p>

          <br/></br>
          <button type="buton" class="btn btn-primary btn-lg">Button</button>
        </div>
      </div>
    </div>
  </section>

  <section id="gallery" class="bg-success">
    <div class="container">
      <div class="row">
        <div class="col-md-8 mx-auto text-center">
          <h1>This is gallery page</h1>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe non recusandae molestiae qui corporis tempore facere nisi blanditiis, a, ipsum ab! Earum fuga deleniti magni, reiciendis at ab exercitationem saepe.</p>

          <br/></br>
          <button type="buton" class="btn btn-primary btn-lg">Button</button>
        </div>
      </div>
    </div>
  </section>

  <section id="contact" class="bg-warning">
    <div class="container">
      <div class="row">
        <div class="col-md-8 mx-auto text-center">
          <h1>This is contact page</h1>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe non recusandae molestiae qui corporis tempore facere nisi blanditiis, a, ipsum ab! Earum fuga deleniti magni, reiciendis at ab exercitationem saepe.</p>

          <br/></br>
          <button type="buton" class="btn btn-primary btn-lg">Button</button>
        </div>
      </div>
    </div>
  </section>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <script>
      $(document).scroll(function(){
        if ($(window).scrollTop() > 50) {
          $('#navbar').removeClass('bg-light').addClass('bg-nontrans');
        }else if($(window).scrollTop() <=50){
          $('#navbar').removeClass('bg-nontrans').addClass('bg-light');
        }
      });
    </script>

  </body>
</html>
