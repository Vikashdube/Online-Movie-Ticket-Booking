<?php
session_start();


if(empty($_SESSION["username"])){
     
   header("Location:index.php");
}
else{
   include("header.php");
}

?>

<section class="mt-4">
   <h3 class="text-center"><i>Book Your tickets Now</i></h3>

   <!----------------------- form  -->

   <div class="container">
   <form>
      <div class="form-group">
         <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
      </div>
      <div class="form-group">
         <input type="password" name="psw" class="form-control" id="exampleInputPassword1" placeholder="Password">
      </div>

      <div class="form-group">
         <input type="password" name="psw-repeat" class="form-control" id="exampleInputPassword1" placeholder="Repite Password">
      </div>

      <div class="form-group">
         <input type="tel" name="number" class="form-control" id="exampleInputPassword1" placeholder="Mobile">
      </div>



      <button type="submit" name="byn_booking" class="btn btn-primary w-100 mb-5" style="background-color: maroon; color:white">Conform Booking</button>
   </form>
   </div>

</section>


<?php
include("footer.php");
?>