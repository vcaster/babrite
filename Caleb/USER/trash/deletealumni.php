<?php require_once('db.php');?>
<?php require_once("Sessions.php"); ?>
<?php require_once("Functions.php"); ?>
<?php Confirm_Login();?>

 <?php 
            if(isset($_POST["Submit"])){
                $deleteid = $_GET['deletealumniid'];
                $Surname=mysqli_real_escape_string($conn,$_POST["Surname"]);
                $Firstname=mysqli_real_escape_string($conn,$_POST["Firstname"]);
                $Middlename=mysqli_real_escape_string($conn,$_POST["Middlename"]);
                $Email=mysqli_real_escape_string($conn,$_POST["Email"]);
                $Address=mysqli_real_escape_string($conn,$_POST["Address"]);
                $Matric=mysqli_real_escape_string($conn,$_POST["Matric"]);

                date_default_timezone_set("Africa/Lagos");
                $CurrentTime=time();
                //$DateTime=strftime("%Y-%m-%d %H:%M:%S",$CurrentTime);
                $DateTime=strftime("%B-%d-%Y %H:%M:%S",$CurrentTime);
                $DateTime;
                $Admin=$_SESSION['User_Username'];

	global $conn;
        
        $sql9="DELETE FROM info WHERE id='$deleteid'";
        $Execute = mysqli_query($conn,$sql9);
  
	if($Execute){
	$_SESSION["SuccessMessage"]="Alumni Deleted Successfully";
	redirect("admindashboard.php");
 	}else{
	$_SESSION["ErrorMessage"]="Something Went Wrong. Try Again !";
	redirect("admindashboard.php");
		
	}
	
    }	
	

	


?>
<!DOCTYPE HTML>
<html>
<?php include("head.php") ?>
<body>	
<div class="page-container">	
   <div class="left-content">
	   <div class="mother-grid-inner">
            <!--header start here-->
		<?php include("headermain.php") ?>
<!--heder end here-->
<!-- script-for sticky-nav -->
		<script>
		$(document).ready(function() {
			 var navoffeset=$(".header-main").offset().top;
			 $(window).scroll(function(){
				var scrollpos=$(window).scrollTop(); 
				if(scrollpos >=navoffeset){
					$(".header-main").addClass("fixed");
				}else{
					$(".header-main").removeClass("fixed");
				}
			 });
			 
		});
		</script>
		<!-- /script-for sticky-nav -->
<!--inner block start here-->
<div class="inner-block">
    <div class="cols-grids panel-widget">
    	<h2>Delete Post</h2>
        <div></div>
        <?php 
            
//            $update_record = $_GET['updateid'];   
            $deleteid = $_GET['deletealumniid'];
            global $conn;
            $sql9="SELECT * FROM info WHERE id='$deleteid'";
            $Execute1 = mysqli_query($conn,$sql9);

while($DataRows = mysqli_fetch_array($Execute1,MYSQLI_ASSOC)){             
	$Id=$DataRows["id"];
	$Surname=$DataRows["surname"];
	$Firstname=$DataRows["firstname"];
	$Middlename=$DataRows["middlename"];
	$Email=$DataRows["email"];
	$Address=$DataRows["address"];
	$Matric=$DataRows["matric"];



}   
        ?>
          <div>
            <form action="deletealumni.php?deletealumniid=<?php echo $deleteid; ?>" method="post" enctype="multipart/form-data">
                    <fieldset>
                    <div class="form-group">
                    <label for="surname"><span class="FieldInfo">Surname:</span></label>
                    <input style="width: 50% "  disabled class="form-control" type="text" name="Surname" id="surname" value="<?php echo $Surname; ?>" placeholder="Surname...">
                    </div>
                     <div  class="form-group">
                    <label  for="fistname"><span class="FieldInfo">Firstname:</span></label>
                    <input style="width: 50% " disabled class="form-control" type="text" name="Firstname" id="firstname" value="<?php echo $Firstname; ?>" placeholder="First name...">
                    </div>
                        <div class="form-group">
                    <label for="middlename"><span class="FieldInfo">Middlename:</span></label>
                    <input style="width: 50% " disabled class="form-control" type="text" name="Middlename" id="middlename" value="<?php echo $Middlename; ?>" placeholder="Middle name...">
                    </div>
                        <div class="form-group">
                    <label for="email"><span class="FieldInfo">Email:</span></label>
                    <input style="width: 50% " disabled class="form-control" type="email" name="Email" id="email" value="<?php echo $Email; ?>" placeholder="Email...">
                    </div>
                        <div class="form-group">
                    <label for="address"><span class="FieldInfo">Address:</span></label>
                    <input style="width: 50% " disabled class="form-control" type="text" name="Address" id="address" value="<?php echo $Address; ?>" placeholder="Adresss...">
                    </div>
                        <div class="form-group">
                    <label for="matric"><span class="FieldInfo">Matric:</span></label>
                    <input style="width: 50% " disabled class="form-control" type="text" name="Matric" id="matric" value="<?php echo $Matric; ?>" placeholder="Matric No...">
                    </div>

                   <input class="btn btn-danger" type="Submit" name="Submit" value="Delete Alumni"> 

                    </fieldset>
                    <br>
            </form>
           
            </div>
	 </div>	
        <br>
<br>
<br>
<br>
<br>


</div>
</div>
<!--inner block end here-->
<!--copy rights start here-->
<?php include("copyright.php") ?>	
<!--COPY rights end here-->
</div>
<!--slider menu-->
    <?php include("sidenav.php") ?>
	<div class="clearfix"> </div>
</div>
<!--slide bar menu end here-->
<script>
var toggle = true;
            
$(".sidebar-icon").click(function() {                
  if (toggle)
  {
    $(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
    $("#menu span").css({"position":"absolute"});
  }
  else
  {
    $(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
    setTimeout(function() {
      $("#menu span").css({"position":"relative"});
    }, 400);
  }               
                toggle = !toggle;
            });
</script>
<!--scrolling js-->
		<script src="js/jquery.nicescroll.js"></script>
		<script src="js/scripts.js"></script>
		<!--//scrolling js-->
<script src="js/bootstrap.js"> </script>
<!-- mother grid end here-->
</body>
</html>

      

              
