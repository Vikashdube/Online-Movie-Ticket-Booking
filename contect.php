<?php 
 include("header.php");
 include("conn.php"); 
 
 if(isset($_POST["btn_submit"])){

    $name = $_POST["name"];
    $email = $_POST["email"];
    $no = $_POST["number"];
    $messg = $_POST["message"];



    $sql = "INSERT INTO contect value (0,'$name','$email','$no','$messg',now())";

    $con = new connect();
    $con->insert($sql);

 }


?>
<section style="min-height: 350px;">


    <div class="container">
        <div class="row mt-3 mb-5">
            <center>
                <h1>Contect Us</h1>
                <p>We'd love to talk about how we can work together .
                    send us a message below and we'll respond as soon as posible. </p>
            </center>
           
            <div class="col-md-6 mt-3" style="background-color:  maroon; color:white; border-radius: 25px;">
                <div class="mx-4 mt-2">
                <h2>Contect Information</h2>
                <p>Our team will get back to you with in 24 Houres.</p>

                <p><i class="fa-solid fa-phone" style="font-size: 10px;">&nbsp; 0254652455</i></p>
                <p><i class="fa-solid fa-envelope" style="font-size: 10px;">&nbsp; Movie123@gmail.com</i></p>
                <p><i class="fa-solid fa-location-dot" style="font-size: 10px;">&nbsp; Mohali</i></p>

                <h2>Join Us </h2>
                 <a href="#"><i class="fa-brands fa-twitter"></i></a>
                 <a href="#" class="mx-5"><i class="fa-brands fa-facebook"></i></a>
                 <a href="#"><i class="fa-brands fa-instagram"></i></a>

                 
                </div>
            </div>



            <div class="col-md-6 mt-3">
                <div class="container " style="color: marron;">


                    <form method="post">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Enter Your Name" required>
                        </div>

                        <div class="form-group">
                            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
                        </div>

                        <div class="form-group">
                            <input type="tel" name="number" class="form-control" id="exampleInputPassword1" placeholder="Mobile Number">
                        </div>

                        <div class="form-group">
                              <textarea class="form-control" name="message" cols="30" rows="3">Message</textarea>
                        </div>


                        <button type="submit" name="btn_submit" class="btn w-100" style="background-color:maroon; color:white">Send Message</button>
                    </form>



                </div>

            </div>
        </div>
    </div>









</section>
<?php include("footer.php"); ?>