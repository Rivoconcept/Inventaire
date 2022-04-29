<?php
session_start();
@$param = $_POST["param"];



if($param == "testsession"){


  if (isset($_SESSION['Admin'])) {
    echo $_SESSION;
  }else{
      exit();
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Navbar & Tabs</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/monstyle.css">

    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/buttons/1.7.0/css/buttons.dataTables.min.css">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="plugins/sweetalert2/sweetalert2.min.css">
  <!-- Toastr -->
  <link rel="stylesheet" href="plugins/toastr/toastr.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">

<div class="user">
    
    <button id="cadena" class="glow-on-hover" type="button">
    <?php
        if (!isset($_SESSION['Admin'])) {
            echo "<img style='width:27px' src='image/close.png'>";
        }
    ?>
    </button>
    

</div>
<div class="logo"><span class="p1">Cabinet Comptable</span><img src="image/logo1.png" alt="">M a d a g a s c a r</span></div>
<div class="blue"></div>
<div class="fonddiv" >
    <div class="login-page">
        <div class="form">

            <form class="login-form">
                <div class="msg" style="color:green; "></div>
                <input type="text" id="email" required pattern="[^@]+@[^@]+\.[a-zA-Z]{2,6}"  placeholder="username or e-mail"/>
                <input type="password" id="pword" placeholder="password"/>
              
                <div class="wraps">
                    <button id="session" class="bouton" type="button">Submit</button>
                </div>
            <p class="message">Not registered? <a href="#">Create an account</a></p>
            </form>
            
        </div>
    </div>
</div>



<script src="js/jquery-3.5.1.js"></script> 
<script src="js/datatables.min.js"></script>



<script src="js/dataTables.buttons.min.js"></script>
<script src="js/jszip.min.js"></script>
<script src="js/pdfmake.min.js"></script>
<script src="js/vfs_fonts.js"></script>
<script src="js/buttons.html5.min.js"></script>
<script src="js/buttons.print.min.js"></script>



<script src="js/myscript.js"></script>


<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="dist/js/adminlte.min.js"></script>

<script src="dist/js/demo.js"></script>
</body>
</html>
