<?php include'header.php';?>
<!-- banner -->
<div class="inside-banner">
  <div class="container"> 
    <span class="pull-right"><a href="#">Home</a> / Register</span>
    <h2>Register</h2>
</div>
</div>
<!-- banner -->


<div class="container">
<div class="spacer">
<div class="row register">
  <div class="col-lg-6 col-lg-offset-3 col-sm-6 col-sm-offset-3 col-xs-12 ">

<form action="sign.php" method="post">
                <input type="text" id="t1" class="form-control" placeholder="Full Name" name="t1">
				<span class="error">* <?php echo $t1Err;?></span>
                <input type="email" id="t2" class="form-control" placeholder="Enter Email" name="t2">
				<span class="error">* <?php echo $t2Err;?></span>
                <input type="password" id="t3" class="form-control" placeholder="Password" name="t3">
				<span class="error">* <?php echo $t3Err;?></span>
                <input type="password" id="t4" class="form-control" placeholder="Confirm Password" name="t4">
				<span class="error">* <?php echo $t4Err;?></span>

                <input type="text" id="t5" class="form-control" placeholder="Address" name="t5" >
				<span class="error">* <?php echo $t5Err;?></span>
				<input type="submit" class="btn btn-success" name="Submit">
          
</form>

                
        </div>
  
</div>
</div>
</div>

<?php include'footer.php';?>