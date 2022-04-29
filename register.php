<?php


if (!empty($_POST)) {

  if (isset($_POST['mail'], $_POST['psw'] ) && !empty($_POST['mail']) && !empty($_POST['psw'])){

    //formulaire complet
    // on recupère les données en les protégeant
    // $peudo= strip_taps($_POST["login"]);

    if(!filter_var($_POST["mail"], FILTER_VALIDATE_EMAIL)){
      $mes1 = "";
    }
    //on va hasher le mot de passe
    
       $psw = password_hash($_POST["psw"], PASSWORD_ARGON2I);
       //$psw = password_hash($_POST['mail'], PASSWORD_DEFAULT);

    // on enregistre en BDD

   // require_one "includes/connect.php";

    //$sql = "INSERT INTO `inventaire_karlit`.`session` (`login`, `mdp`) VALUES (:mail, `$psw`, `[\"ROLE_USER\"]`)";

   // $query = $db->bindValue(":mail", $mail, PDO::PARAM_STR);
    //$query = $db->bindValue(":mail", $_POST["mail"], PDO::PARAM_STR);

   // $query->execute($sql);
   

      include_once("connect.php");

      $ins = $base->prepare("SELECT * FROM `session` WHERE `session`.`login`=:email");
      $ins->execute(array("email"=>$_POST['mail']));
      $resultat=$ins->fetchAll();
      
      
           if (count($resultat) > 0) {
                 $mes2 = "";
                
            } else {
              
                
                $ins = $base->prepare("INSERT INTO `inventaire_karlit`.`session` (`login`, `mdp`) 
                VALUES (:mail, :psw)");
              
                  $ins->execute(array(
                    "mail"=>$_POST["mail"],
                      //"psw"=>md5($_POST["psw"])
                    "psw"=>"$psw"
                    
                    
                    ));
        
            }
  
            //if (mysqli_num_rows($user) == 0) {
           //   var_dump($user);
          //  }
      //var_dump($result);

      
      
   
  }else{
    $mes ="";
  }

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Log in</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="js/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="js/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="index2.html"><b>Admin</b>LTE</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start your session</p>

      <form method="POST">
        <div class="input-group mb-3">
          <input type="email" name="mail" class="form-control" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="psw" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <div class="social-auth-links text-center mb-3">
            <div style="color:red; font-style:italic">

                  <?php 
                   if (isset($mes)){
                $mes = "Veuillez bien remplir les champs";
                echo ($mes);
                    }
                    if (isset($mes1)){
                      $mes1 = "E-mail invalide!";
                      echo ($mes1);
                          }
                    if (isset($mes2)){
                          $mes2 = "Cet Email existe déjà ! ";
                        echo ($mes2);
                        }
                  ?>
            </div>
       
        <p>- OR -</p>
        <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
        </a>
      </div>
      <!-- /.social-auth-links -->

      <p class="mb-1">
        <a href="forgot-password.html">I forgot my password</a>
      </p>
      <p class="mb-0">
        <a href="register.html" class="text-center">Register a new membership</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="js/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="js/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
</body>
</html>
