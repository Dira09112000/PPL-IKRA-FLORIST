<?php

session_start();

include("includes/db.php");
include("includes/header.php");
include("functions/functions.php");
include("includes/main.php");

?>


<!-- MAIN -->
<main>
  <!-- HERO -->
  <div style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;background: linear-gradient(to bottom right, blue, pink);width:100%;height:200px;display:flex;text-align:center;justify-content:center;align-items:center;">
    <div class="nero__heading">
      <span class="nero__bold"></span>
    </div>
    <p class="nero__text">
    </p>
  </div>
</main>



<div id="content"><!-- content Starts -->
  <div class="container"><!-- container Starts -->




    <div class="col-md-12"><!-- col-md-12 Starts -->

      <?php

      if (!isset($_SESSION['customer_email'])) {

        include("customer/customer_login.php");
      } else {

        include("payment_options.php");
      }



      ?>


    </div><!-- col-md-12 Ends -->


  </div><!-- container Ends -->
</div><!-- content Ends -->



<?php

include("includes/footer.php");

?>

<script src="js/jquery.min.js"> </script>

<script src="js/bootstrap.min.js"></script>

</body>

</html>