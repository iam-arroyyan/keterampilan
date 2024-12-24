<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">

   <link rel="icon" href="images/logos.png" type="image/png">

   <!-- BOOTSTRAP CSS -->

   <link rel="stylesheet" href="css/bootstrap.min.css">

   <!-- MAIN CSS -->

   <link rel="stylesheet" href="css/style.css">

   <!-- GOOGLE FONT -->

   <link href="https://fonts.googleapis.com/css?family=Courgette" rel="stylesheet">

   <!-- FONT AWESOME -->

   <script src="js/all.js"></script>

   <link
   href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
   rel="stylesheet"
   />
 
   <title>Bersaudara Motor</title>
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">DASHBOARD ADMIN</a> 
            </div>
  <div style="color: white; padding: 15px 50px 5px 50px; float: right; font-size: 16px;"><a href="../logout.php" class="btn btn-danger square-btn-adjust">Logout</a> </div>

    <!-- /. NAV SIDE  -->
    <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Admin Dashboard</h2>   
                        <h5>Welcome . </h5>
                    </div>
                </div>             
    <!-- /. ROW  -->
     <div class='row'>
                 <?php 
                    
                    if(isset($_GET['halaman'])){
                        if ($_GET['halaman'] == 'tambahmenu') {
                            include 'tambahmenu.php';
                        } elseif ($_GET['halaman'] == 'hapusmenu') {
                            include 'hapusmenu.php';
                        } elseif ($_GET['halaman'] == 'ubahmenu') {
                            include 'ubahmenu.php';
                        }
                    }else {
                        include 'menu.php';
                    }
                    
                    ?>
                 </div>

                 <?php if(!isset($_GET['halaman'])){ ?> 

                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <a href="index.php?halaman=tambahmenu" class="btn btn-primary">Tambah Menu</a>
                    </div>

                <?php } ?>
   <!-- JQUERY -->

   <script src="js/jquery.min.js"></script>

   <!-- BOOTSTRAP JS -->

   <script src="js/bootstrap.min.js"></script>

   <!-- MAIN JS -->

   <script src="js/script.js"></script>

</body>
</html>
