<?php
session_start();

  if (!isset($_SESSION['Admin'])) {
    header('Location: /localhost/datatable/');
  }else{
      exit();
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
<div class="user"></div>
<div class="logo"><span class="p1">Cabinet Comptable</span><img src="image/logo1.png" alt="">M a d a g a s c a r</span></div>
<div class="blue"></div>
<div class="navb">
        <div class="wrapper">
            
                <div class="row">
                    <div class="col-12 col-md-12">
                        <div class="card card-primary card-outline card-tabs">
                        <div class="card-header p-0 pt-1 border-bottom-0">
                            <ul class="nav nav-tabs" id="custom-tabs-three-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="custom-tabs-three-home-tab" data-toggle="pill" href="#custom-tabs-three-home" role="tab" aria-controls="custom-tabs-three-home" aria-selected="true">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="custom-tabs-three-profile-tab" data-toggle="pill" href="#custom-tabs-three-profile" role="tab" aria-controls="custom-tabs-three-profile" aria-selected="false">Profile</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="custom-tabs-three-messages-tab" data-toggle="pill" href="#custom-tabs-three-messages" role="tab" aria-controls="custom-tabs-three-messages" aria-selected="false">Messages</a>
                            </li>
                            <li class="nav-item" id="actualisation" >
                                <a class="nav-link" id="custom-tabs-three-settings-tab" data-toggle="pill" href="#custom-tabs-three-settings" role="tab" aria-controls="custom-tabs-three-settings" aria-selected="false">Visualisation</a>
                            </li>
                            </ul>
                        </div>
                        <div class="card-body" style="overflow-y: auto">
                            <div class="tab-content" id="custom-tabs-three-tabContent">
                                <div class="tab-pane fade show active" id="custom-tabs-three-home" role="tabpanel" aria-labelledby="custom-tabs-three-home-tab">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin malesuada lacus ullamcorper dui molestie, sit amet congue quam finibus. Etiam ultricies nunc non magna feugiat commodo. Etiam odio magna, mollis auctor felis vitae, ullamcorper ornare ligula. Proin pellentesque tincidunt nisi, vitae ullamcorper felis aliquam id. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Proin id orci eu lectus blandit suscipit. Phasellus porta, ante et varius ornare, sem enim sollicitudin eros, at commodo leo est vitae lacus. Etiam ut porta sem. Proin porttitor porta nisl, id tempor risus rhoncus quis. In in quam a nibh cursus pulvinar non consequat neque. Mauris lacus elit, condimentum ac condimentum at, semper vitae lectus. Cras lacinia erat eget sapien porta consectetur.
                            </div>
                            <div class="tab-pane fade" id="custom-tabs-three-profile" role="tabpanel" aria-labelledby="custom-tabs-three-profile-tab">
                                Mauris tincidunt mi at erat gravida, eget tristique urna bibendum. Mauris pharetra purus ut ligula tempor, et vulputate metus facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Maecenas sollicitudin, nisi a luctus interdum, nisl ligula placerat mi, quis posuere purus ligula eu lectus. Donec nunc tellus, elementum sit amet ultricies at, posuere nec nunc. Nunc euismod pellentesque diam.
                            </div>
                            <div class="tab-pane fade" id="custom-tabs-three-messages" role="tabpanel" aria-labelledby="custom-tabs-three-messages-tab">
                            <hr>
    <div class="container">
        
        <div class="row">
            <div class="col-md-6">
                    <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon3">Code</span>
                    <input type="text" id="valeur1" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                    </div>
            </div>
            <div class="col-md-4">
                         <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon3">Nom_PC</span>
                    <input type="text" id="valeur2" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                    </div>
            </div>
            <div class="col-md-2">
                        <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon3">Marque</span>
                    <input type="text" id="valeur3"  class="form-control" id="txt1" aria-describedby="basic-addon3">
                    </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
            <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon3">CPU</span>
                    <input type="text" id="valeur4"  class="form-control" id="txt1" aria-describedby="basic-addon3">
                    </div>
            </div>
            <div class="col-md-3">
            <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon3">Année</span>
                    <input type="text" id="valeur5"  class="form-control" id="txt1" aria-describedby="basic-addon3">
                    </div>
            </div>
            <div class="col-md-3">
                    <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon3">État</span>
                    <input type="text" id="valeur6" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                    </div>
            </div>
            <div class="col-md-3">
                    <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon3">Matricule</span>
                    <input type="text" id="valeur7" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                    </div>
            </div>
        </div>
        <div class="row espace">
            <div class="col-md-3">
                    <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon3">Nom_user</span>
                    <input type="text" id="valeur8" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                    </div>
            </div>
            <div class="col-md-3">
                    <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon3">Affectation</span>
                    <input type="text" id="valeur9" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                    </div>
                    
            </div>
            <div class="col-md-3">
                    <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon3">Supervision</span>
                    <input type="text" id="valeur10" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                    </div>
            </div>
            <div class="col-md-3">
                  
            </div>
        </div>
                <div class="text-center">
                         <button class="btn btn-primary btnplace" id="btnvalider">E N R E G I S T R E R</button>
                </div>
        </form> 

    </div>
                            </div>
                            <div class="tab-pane fade fonddiv"id="custom-tabs-three-settings" role="tabpanel" aria-labelledby="custom-tabs-three-settings-tab">
                            <div class="overlay" style="display:none">
                               
                            </div>
                            <div class="popup">
                                    <p>Êtes-vous sûr de vouloir supprimer</p>
                                    <div class="text-right">
                                        <button id="delete" type="button" class="btn btn-primary delete">OUI</button>
                                        <button id="echap" type="button" class="btn btn-cancel">Cancel</button>
                                    
                                    </div>
                                </div>
                         
                            <div class="corpstableau">

                            </div>
                            

                                
                        
</div>
                            </div>
                            </div>
                        </div>
                        <!-- /.card -->
                        </div>
                    </div>

                    </div>

                    <!-- /.card -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.container-fluid -->
            
            <aside class="control-sidebar control-sidebar-dark">
                <!-- Control sidebar content goes here -->
            </aside>
            <!-- /.control-sidebar -->
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
