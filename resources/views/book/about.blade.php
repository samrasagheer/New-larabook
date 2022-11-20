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
  <link rel="stylesheet" href="sass/app.scss">
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
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-capitalize" href="#">About us</a>
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
          <a class="nav-link text-capitalize" href="#">Gallery us</a>
        </li> <li class="nav-item">
          <a class="nav-link text-capitalize" href="#">Contact us</a>
        </li>
      </ul>
     
    </div>
  </div>
  </nav>
  <section class="main_header my-5">
  <div class="text-center">
    <h1 class="disply-4">About us</h1>
    <hr class="w-25 mx-auto" />
  </div>
  <div class="container">
    <div class="row my-5 ">
      <div class="col-lg-6 col-md-6 col-12 col-xxl-6">
       <figure>
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSCrdcFlqQXhgoViHDdm451C-E8VCxSFdk3uA&usqp=CAU" alt="" class="img-fluid about_img">
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
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQdQTKRWxqskBXPKXvSsUV6gAaqk9sW6fyr2g&usqp=CAU" class="img-fluid rounded-start" alt="img not load" class="img-fluid">
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
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQdQTKRWxqskBXPKXvSsUV6gAaqk9sW6fyr2g&usqp=CAU" class="img-fluid rounded-start" alt="img not load" class="img-fluid">
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
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQdQTKRWxqskBXPKXvSsUV6gAaqk9sW6fyr2g&usqp=CAU" class="img-fluid rounded-start" alt="img not load" class="img-fluid">
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

</script>
</body>
</html>

