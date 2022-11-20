<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
 <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Poppins&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/app.scss">
  <title>Bootstrap5</title>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand text-capitalize" href="#">sam studio</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mx-auto  mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="http://127.0.0.1:8000/book">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-capitalize" href="http://127.0.0.1:8000/about">About us</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Services
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
         <li class="nav-item">
          <a class="nav-link text-capitalize" href="http://127.0.0.1:8000/gallery#">Gallery us</a>
        </li> <li class="nav-item">
          <a class="nav-link text-capitalize" href="http://127.0.0.1:8000/contact">Contact us</a>
        </li>
      </ul>
     
    </div>
  </div>
</nav>
<header>
  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTNfMWfo4cV75Qh7_v7X7SS4BLAJpQrCQ-mmA&usqp=CAU" class="d-block w-100" alt="image not load" style="width:100%;height:100%;">
      <div class="carousel-caption d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTNfMWfo4cV75Qh7_v7X7SS4BLAJpQrCQ-mmA&usqp=CAU" class="d-block w-100" alt="...">
      <div class="carousel-caption d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTNfMWfo4cV75Qh7_v7X7SS4BLAJpQrCQ-mmA&usqp=CAU" class="d-block w-100" alt="...">
      <div class="carousel-caption  d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</header>
<section class="main_header my-5">
  <div class="text-center">
    <h1 class="disply-4">About us</h1>
    <hr class="w-25 mx-auto" />
  </div>
  <div class="container">
    <div class="row my-5 ">
      <div class="col-lg-6 col-md-6 col-12 col-xxl-6">
       <figure>
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSCrdcFlqQXhgoViHDdm451C-E8VCxSFdk3uA&usqp=CAU" alt="" class="img-fluid about_img" style="max-width: 100%;
  min-height: 280px;">
        </figure> 
      </div>
    </div>
     <div class="col-lg-6 col-md-6 col-12 col-xxl-6 d-flex justify-content-center align-items-start flex-column">
        <h1>My Working</h1>
        <p>
          When we make the Guardian available to you online, we use cookies and similar technologies to help us to do this. Some are necessary to help our website work properly and can't be switched off, and some are optional but support the Guardian and your experience in other ways.
        </p>
        <button type="button " class="btn btn-outline-info" data-toggle="tooltip" data-placement ="right" title="How Am I" >Check More</button>
      </div>
  </div>
</section >
<section class="main_heading my-5 bg-light pt-5">
  <div class="text-center">
    <h1 class="disply-4">Our Services</h1>
    <hr class="w-25 mx-auto" />
  </div>
  <div class="container services">
  <div class="row">
    <div class="col-md-4 col-10 col-xxl-4 mx-auto">
      <div class="card mb-3" style="max-width: 540px;">
  <div class="row ">
    <div class="col-md-4">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTf-U76uJcKCy5hFNKsjz6CbF-WU7ppxGNUWQ&usqp=CAU" class="img-fluid rounded-start" alt="img not load" class="img-fluid" style="  width: 100%;
  height: 100%;">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
  </div>
</div>
    </div>
    <div class="col-md-4 col-10 col-xxl-4 mx-auto">
      <div class="card mb-3" style="max-width: 540px;">
  <div class="row ">
    <div class="col-md-4">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTf-U76uJcKCy5hFNKsjz6CbF-WU7ppxGNUWQ&usqp=CAU" class="img-fluid rounded-start" alt="img not load" class="img-fluid" style="  width: 100%;
  height: 100%;">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
  </div>
</div>
    </div>
    <div class="col-md-4 col-10 col-xxl-4 mx-auto">
      <div class="card mb-3" style="max-width: 540px;">
  <div class="row ">
    <div class="col-md-4">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTf-U76uJcKCy5hFNKsjz6CbF-WU7ppxGNUWQ&usqp=CAU" class="img-fluid rounded-start" alt="img not load" class="img-fluid"style="  width: 100%;
  height: 100%;">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
  </div>
</div>
    </div>
    <div class="col-xxl-12 text-center my-5">
        <button type="button " class="btn btn-outline-info" data-toggle="tooltip" data-placement ="right" title="How Am I" >Check More</button>
    </div>
   
    </div>  
  </div>
  </section>
  <section class="main_heading my-5 pt-5">
  <div class="text-center">
    <h1 class="disply-4">Gallery</h1>
    <hr class="w-25 mx-auto" />
  </div>
  <div class="container">
    <div class="row gy-2 my-5">
      <div class="col-md-4 col-10 col-xxl-4 mx-auto">
        <figure>
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSH9jEwjIM8IZVnasqytyGTgBefJxIjF0XoAQ&usqp=CAU" alt="img load" class="img-fluid">
        </figure>
      </div>
       <div class="col-md-4 col-10 col-xxl-4 mx-auto">
        <figure>
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSH9jEwjIM8IZVnasqytyGTgBefJxIjF0XoAQ&usqp=CAU" alt="img load" class="img-fluid">
        </figure>
      </div>
       <div class="col-md-4 col-10 col-xxl-4 mx-auto">
        <figure>
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSH9jEwjIM8IZVnasqytyGTgBefJxIjF0XoAQ&usqp=CAU" alt="img load" class="img-fluid">
        </figure>
      </div>
       <div class="col-md-4 col-10 col-xxl-4 mx-auto">
        <figure>
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSH9jEwjIM8IZVnasqytyGTgBefJxIjF0XoAQ&usqp=CAU" alt="img load" class="img-fluid">
        </figure>
      </div>
       <div class="col-md-4 col-10 col-xxl-4 mx-auto">
        <figure>
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSH9jEwjIM8IZVnasqytyGTgBefJxIjF0XoAQ&usqp=CAU" alt="img load" class="img-fluid">
        </figure>
      </div>
       <div class="col-md-4 col-10 col-xxl-4 mx-auto">
        <figure>
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSH9jEwjIM8IZVnasqytyGTgBefJxIjF0XoAQ&usqp=CAU" alt="img load" class="img-fluid">
        </figure>
      </div>
       <div class="col-md-4 col-10 col-xxl-4 mx-auto">
        <figure>
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSH9jEwjIM8IZVnasqytyGTgBefJxIjF0XoAQ&usqp=CAU" alt="img load" class="img-fluid">
        </figure>
      </div>
       <div class="col-md-4 col-10 col-xxl-4 mx-auto">
        <figure>
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSH9jEwjIM8IZVnasqytyGTgBefJxIjF0XoAQ&usqp=CAU" alt="img load" class="img-fluid">
        </figure>
      </div>
       <div class="col-md-4 col-10 col-xxl-4 mx-auto">
        <figure>
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSH9jEwjIM8IZVnasqytyGTgBefJxIjF0XoAQ&usqp=CAU" alt="img load" class="img-fluid">
        </figure>
      </div>
    </div>
  </div>
  </section>
    <section class="main_heading my-5 py-2 bg-info">
<div class="container-fluid">
  <div class="row">
    <div class="col-xxl-12 col-12 py-5 text-center">
      <h1 class="text-white">Check out my videos</h1>
      <p>hy everyone this is my first designing website and this is for all of u better luck for everyone</p>
      
      <button type="button " class="btn btn-outline-light"  data-toggle="modal" data-target="#exampleModal">
  
        
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-circle" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"/>
</svg> Check More</button>
  
    </div>
  </div>
</div>
    </section>
    
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">My Atractive Video</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <h3>i hope guzy u are enjoy my videos</h3>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
         <a href="http://local.tutorial.com/" target="_facebook">
        <button type="button" class="btn btn-primary">Check Now</button>
        </a>
      </div>
    </div>
  </div>
</div>
    <section class="main_heading my-5 pt-5">
  <div class="text-center">
    <h1 class="disply-4">Contact Us</h1>
    <hr class="w-25 mx-auto" />
  </div>
  <div class="container">
    <div class="row">
     <div class="col-xxl-8 col-10 col-md-8 mx-auto">
      <form>
         <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your Name">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    
 
    <div class="mb-3">
      <label for="" class="pr-4">Gender</label>
    <div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
  <label class="form-check-label" for="inlineRadio1">Male</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
  <label class="form-check-label" for="inlineRadio2">Female</label>
</div>


    </div>
    
  <div class="md-3">
    <label for="exampleDataList" class="form-label">Select City</label>
<input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Type to search...">
<datalist id="datalistOptions">
  <option value="Lahore"></option>
  <option value="Faisalabad"></option>
  <option value="Karachi"></option>
  <option value="Arifwala"></option>
  <option value="Islamabad"></option>
</datalist>
  </div>
 <div class="mb-3">

  <label for="formFile" class="form-label"></label>
  <input class="form-control" type="file" id="formFile">

 </div>
 {{--  --}}
  <div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
</div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
      </div> 
    </div>
  </div>
    </section>
    <footer class="bg-secondary text-center text whit">
      <p>@copywrite Sam Studio</p>
    </footer>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script type="">
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
  return new bootstrap.Tooltip(tooltipTriggerEl);
});


</body>
</html>

