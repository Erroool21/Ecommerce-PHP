<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/nav.css">
</head>
<body>
    
<?php
echo " <nav class='navbar navbar-expand-lg navbar-red navbar-dark'>
<div class='wrapper'>
  
</div>
<div class='container-fluid all-show'>
<a class='navbar-brand' href='#'>Selenophile<i class='fa fa-codepen'></i></a>
<button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarSupportedContent' aria-controls='navbarSupportedContent' aria-expanded='false' aria-label='Toggle navigation'>
<span class='navbar-toggler-icon'></span>
</button>
<div class='collapse navbar-collapse' id='navbarSupportedContent'>
<ul class='navbar-nav mr-auto mb-2 mb-lg-0'>
<li class='nav-item'>
  <a class='nav-link active' aria-current='page' href='#'>About us</a>
</li>
<li class='nav-item'>
  <a class='nav-link' href='./index.php'>Products</a>
</li>

<li class='nav-item'>
  <a class='nav-link' href='#'>Services</a>
</li>

<li class='nav-item'>
  <a class='nav-link' href='#'>Events</a>
</li>

<li class='nav-item'>
  <a class='nav-link' href='#' data-bs-toggle='modal' data-bs-target='#exampleModal'>Login/Signup</a>
</li>

<li class='nav-item'>
  <a class='nav-link' href='#'><i class='fa fa-search'></i></a>
</li>


</ul>
</div>
</div>
</nav>


<div class='modal fade' id='exampleModal' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
  <div class='modal-dialog modal-dialog-centered' role='document'>
    <div class='modal-content'>
      <div class='modal-header'>
        <h5 class='modal-title' id='exampleModalLabel'>Selenophile</h5>
        <button type='button' class='close btn btn-danger' data-bs-dismiss='modal' aria-label='Close'>
          <span aria-hidden='true'>&times;</span>
        </button>
      </div>
      <div class='modal-body'>
      <div>
      <div class='row'>
          <center>
          <div class='container_form'>
              <form action='./src/login.php' method='POST' class='form text-center border border-info rounded p-4'>
                  <h4 class='form__title'>Login into Selenophile</h4>
                  <center>
                  <div class='form__input-group m-3'>
                      <input type='hidden' class='form-control' name='login_id'/>
                      <input class='inputField form-control' name='username' type='text' class='form__input' autofocus placeholder='Username or email'>
                  </div>
                  <div class='form__input-group m-3'>
                      <input class='inputField form-control' name='password' type='password' class='form__input' autofocus placeholder='Password'>
                  </div>
                  <button class='form__button btn btn-primary w-100' type='submit' id='log-in'>Login</button>
              </center>
              </form>
          </div>
      </div>
  </center>
  </div>
      </div>
      <div class='modal-footer'>
        <p class='text-center'>Don't have an account? <a href='#' style='text-decoration: none;'>Sign up now</a></p>
      </div>
    </div>
  </div>
</div>
"



?>
</body>
</html>


