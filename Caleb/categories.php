<?php
    require_once ('Include/DB.php');
?>

<!DOCTYPE>
<html>
    <head>
        <title>Dashboard</title>    
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap3.min.css">
        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/bootstrap3.min.js"></script>
        <link href="css/styleadmin.css" rel="stylesheet" type="text/css" media="all"/>
    </head>
    <body>
   
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-2">
                    <h2>ADMIN PANEL</h2>
                    <ul id="sidnav" class="">
                        <li><a class="btn btn-primary btn-block" href="dashboard.php"><span class="glyphicon glyphicon-dashboard"></span>&nbsp;Dashboard</a></li>
                        <li><a class="btn btn-primary btn-block" href="#"><span class="glyphicon glyphicon-dashboard"></span>&nbsp;Add New Post</a></li>
                        <li><a class="btn btn-primary btn-block active" href="categories.php"><span class="glyphicon glyphicon-dashboard"></span>&nbsp;Catergories</a></li>
                        <li><a class="btn btn-primary btn-block" href="#"><span class="glyphicon glyphicon-dashboard"></span>&nbsp;Comments</a></li>
                        <li><a class="btn btn-primary btn-block" href="#"><span class="glyphicon glyphicon-dashboard"></span>&nbsp;Messages</a></li>
                        <li><a class="btn btn-primary btn-block" href="#"><span class="glyphicon glyphicon-dashboard"></span>&nbsp;Manage Admins</a></li>
                        <li><a class="btn btn-primary btn-block" href="#"><span class="glyphicon glyphicon-dashboard"></span>&nbsp;Logout</a></li>
                        
                    </ul>                
                
                </div>
                <div class="col-sm-10">
                     <h1>Manage Catergories</h1>
                     <form action="categories.php" method="post">
                         <fieldset>
                             <div class="form-group">
                                 <label class="form-control" for="catergoryname"> name:</label>
                             <input type="text" name="Catergory" id="catergoryname" placeholder="Enter new category">
                             <input class="btn btn-dark" type="Submit"  name="Submit" value="Add new category">
                             </div>
                         </fieldset>
                     </form>
                </div>
            </div>
        </div>
        <div id="footer">
            <hr>
            <footer>&copy; 2018 CALEB UNIVERSITY, All Rights Reserved</footer>
        </div>
    </body>
</html>
