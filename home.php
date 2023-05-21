<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selenophile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="./assets/nav.css">
</head>

<body style='background-color: #F1F6F9'>

    <nav class='navbar navbar-expand-lg navbar-red navbar-dark'>
        <div class='wrapper'>

        </div>
        <div class='container-fluid all-show'>
            <a class='navbar-brand' href='#'>Selenophile<i class='fa fa-codepen'></i></a>
            <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarSupportedContent'
                aria-controls='navbarSupportedContent' aria-expanded='false' aria-label='Toggle navigation'>
                <span class='navbar-toggler-icon'></span>
            </button>
            <div class='collapse navbar-collapse' id='navbarSupportedContent'>
                <ul class='navbar-nav mr-auto mb-2 mb-lg-0'>
                <li class='nav-item'>
                    <div class="dropdown">
                    <button class="btn btn-none btn-sm dropdown-toggle text-light" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Categories
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Mens'</a>
                            <a class="dropdown-item" href="#">Women's</a>
                            <a class="dropdown-item" href="#">Suits</a>
                        </div>
                    </div> 
                </li>
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
                        <a class='nav-link' href='#' data-bs-toggle='modal' data-bs-target='#exampleModal'>Logout</a>
                    </li>

                    <li class='nav-item'>
                        <a class='nav-link' href='#'><i class='fa fa-search'></i></a>
                    </li>


                </ul>
            </div>
        </div>
    </nav>


    <div class='modal fade' id='exampleModal' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel'
        aria-hidden='true'>
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
                                    <form action='index.php' method='POST'
                                        class='form text-center border border-info rounded p-4'>
                                        <h4 class='form__title text-center'>Do you wish to Logout?</h4>
                                        <button class='form__button btn btn-primary w-50' type='submit'
                                            id='log-in'>Continue logout</button>
                                        <button class='form__button btn btn-danger w-25' data-bs-dismiss='modal'>No</button>
                                    </form>
                                </div>
                        </div>
                        </center>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php 
            include "dbcon.php";
            include "./src/carousel.php";
            include "./src/card.php";
            include "./src/footer.php";
    echo "<script>
    alert('Successfully Logged in!');
    </script>";
        ?>
</body>

</html>
