<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Bootstrap CSS -->
    <script src="https://code.jquery.com/jquery-migrate-3.5.2.min.js" integrity="sha256-ocUeptHNod0gW2X1Z+ol3ONVAGWzIJXUmIs+4nUeDLI=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Online Movie Ticket Booking</title>


<script>
    $(document).ready();
</script>




</head>

<body>

    <!------------------------------- navbar -->

    <nav class="navbar navbar-expand-md navbar-dark" style="background-color:maroon; color:white; ">
        <a class="navbar-brand mx-3" href="index.php"><img src="./images/m1.png" style="width: 36px;"></a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0 ">
                <li class="nav-item Active">
                    <a class="nav-link" href="index.php">Home </a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Movies</a>
                    <div class="dropdown-menu" aria-labelledby="dropdownId">
                        <a class="dropdown-item" href="comingsoon.php">Coming Soon</a>
                        <a class="dropdown-item" href="nowshowing.php">Now Showing</a>
                    </div>
                </li>


                <li class="nav-item">
                    <a class="nav-link" href="offer.php">Offers</a>
                </li>
 
                <li class="nav-item">
                    <a class="nav-link" href="booking.php">Book Tickets</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="about.php">About</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="contect.php">Contact</a>
                </li>

            </ul>

            <ul class="navbar-nav mx-4">

                <li class="nav-item ">
                    <a class="nav-link" href="#" data-toggle="modal" data-target="#modelId">Register</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#" data-toggle="modal" data-target="#modelId1">Login</a>
                </li>

            </ul>

            <!-- <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form> -->
        </div>
    </nav>



    <!------------------------------ model  -->



    <!----------Registration Modal ---------->
    <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background-color:maroon; color:white;">
                    <h5 class="modal-title">
                        <center>
                            <h2>Registratioh Here !!</h2>
                        </center>
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <!----------- form  -->

                    <form method="post">
                        <div class="form-group"> 
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="User Name"> 
                        </div>

                        <div class="form-group"> 
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email"> 
                        </div>

                        <div class="form-group">
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        </div>
                        
                        <div class="form-group">
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Repeat Password">
                        </div>
                        
                        <div class="form-group">
                            <input type="tel" class="form-control" id="exampleInputPassword1" placeholder="Mobile Number">
                        </div>
            
                        <div class="container signin">
                           <p>Already have an account <a  style="color: green; cursor:pointer" data-toggle="modal" data-target="#modelId1" data-dismiss="modal">Sign In </a></p>
                        </div>

                    </form>

                  <!-------------  -->

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-danger" style="background-color:maroon; color:white;">Save</button>
                </div>
            </div>
        </div>
    </div>






















    <!------------------------ Login Model -->



    <!-- Modal -->
    <div class="modal fade" id="modelId1" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background-color:maroon; color:white;">
                    <h5 class="modal-title">
                    <center>
                        <h2>🏣 Login Form</h2>
                    </center>
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    

                    <!------- form  -->
                    <form action="post">
                        <div class="form-group">
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        </div>

                        <div class="form-group">
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        </div>

                        
                        <button type="submit" class="btn btn-primary w-100" style="background-color:maroon; color:white;">Submit</button>
                   
                        <div class="container signin">
                           <p>Registration here <a  style="color: green; cursor:pointer" data-toggle="modal" data-target="#modelId" data-dismiss="modal"> Register </a></p>
                        </div>
                   
                   
                   
                    </form>



                </div>
                <!-- <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" style="background-color:maroon; color:white;">Save</button>
                </div> -->
            </div>
        </div>
    </div>