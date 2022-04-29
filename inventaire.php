<?php
session_start();

  if (!isset($_SESSION['Admin'])) {
    header('Location: /inventaire/');
    exit;
  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Inventaire_Karlit</title>
  <link rel="shortcut icon" type="image" href="image/titre.png">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css"> -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/fixedheader/3.2.0/css/fixedHeader.dataTables.min.css">
    



    <!-- <link rel="stylesheet" type="text/css" href="css/jquery.dataTables.min.css"> -->
    

    
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/buttons/1.7.0/css/buttons.dataTables.min.css">
    <!-- <link rel="stylesheet" type="text/css" href="css/buttons.dataTables.min.css"> -->
    <link rel="stylesheet" href="css/monstyle.css">
    <link rel="stylesheet" href="css/sousmenu.css">
  
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
    
        <button id="cadenas" class="glow-on-hover" type="button">
        <?php
            if (isset($_SESSION['Admin'])) {
                echo "<img style='width:23px;height:27px' src='image/open.png'>";
            }
        ?>
        </button>
        
  
</div>
<div class="logout no-gutters">
   
      <div class="card-pts card text-white bg-white" role="alert" style="border:none; background: linear-gradient(217deg, rgb(40 1 255), rgba(44, 1, 255,0) 70.71%),linear-gradient(127deg, rgb(1 9 255), rgba(107, 1, 255,0) 70.71%), linear-gradient(336deg, rgb(0 255 241), rgba(0,0,255,0) 70.71%)">
        <div class="card-body">
            <div class="admin" style="color:yellow; font-weight: bolder;">ADMIN PANEL</div>
            <div class="emailadmin" style="color:white; padding-top:10px">
                <?php
                    if (isset($_SESSION['Admin'])) {
                    echo (implode(",", $_SESSION['Admin']));
                    }
                ?>
            </div>
            
        
        
        </div>
      
        <div class=" signin text-center py-3">
          <a id="btnlogout" id=""><img src="image/logout.png"></a>
        </div>
        

     </div>
</div>
<div class="entete_titre  smallspace"><p style="font-size:15px">Cabinet Comptable</p><p style="font-size:16.5px">M a d a g a s c a r</p></div>
<div class="logo">               
        <img class="smallspace" src="image/logo1.png" alt="">
</div>  
<div class="logo bigspace">Cabinet Comptable<img src="image/logo1.png" alt="">M a d a g a s c a r</div>

<div class="blue"></div>
<div class="navb">
    <div class="wrapper">
        <div class="row">
            <div class="col-12 col-md-12">
                <div class="card card-primary card-outline card-tabs">
                    
                    <div class="card-header p-0 pt-1 border-bottom-0">
                    
                    
                        <ul class="nav nav-tabs" id="custom-tabs-three-tab" role="tablist">
                        <li class="nav-item" id="accueil">
                            <a class="nav-link active" id="custom-tabs-three-home-tab" data-toggle="pill" href="#custom-tabs-three-home" role="tab" aria-controls="custom-tabs-three-home" aria-selected="true">Acceuil</a>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link" id="custom-tabs-three-profile-tab" data-toggle="pill" href="#custom-tabs-three-profile" role="tab" aria-controls="custom-tabs-three-profile" aria-selected="false">Profile</a>
                        </li> -->
                        <li class="nav-item" id="formulaire">
                            <a class="nav-link" id="custom-tabs-three-enregistrement-tab" data-toggle="pill" href="#custom-tabs-three-enregistrement" role="tab" aria-controls="custom-tabs-three-enregistrement" aria-selected="false">Enregistrement</a>
                        </li>
                        <li class="nav-item" id="actualisation" >
                            <a class="nav-link" id="custom-tabs-three-settings-tab" data-toggle="pill" href="#custom-tabs-three-settings" role="tab" aria-controls="custom-tabs-three-settings" aria-selected="false">Visualisation</a>
                            <div id="sousmenu">
                                <ul>
                                    <li>
                                        <a id="menuecran">E C R A N</a>    
                                    </li>
                                    <li>
                                        <a id="menulaptop">L A P T O P</a> 
                                    </li>                                  
                                    <li>
                                        <a id="menuautres">U C</a>
                                    </li>
                                    <li>
                                        <a id="menuonduleur">O N D U L E U R</a>
                                    </li>
                                    <li>
                                        <a id="menuautres">A U T R E S</a>
                                    </li>
                                </ul>

                            </div>
                        </li>
                        </ul>
                    </div>
                    <hr style="width:100%; margin-top:-1px">
                    <div class="card-body" style="overflow-y: auto">
                        <div class="tab-content" id="custom-tabs-three-tabContent">
                            <div class="tab-pane fade show active" id="custom-tabs-three-home" role="tabpanel" aria-labelledby="custom-tabs-three-home-tab">
                                <div class="accueil1">
                                    <div class="contenu">
                                            <h1 class="titre1">Inventaire Général</h1>
                                            <h3 class="titre2">des matériels informatiques</h3>
                                            <button id="onglet" type="button" class="btn btn-primary delete">Commencer</button>  
                                    </div>
                                    
                                </div>
                               
                                <div class="accueil2" style="display:none">
                                    <img src="image/accueilfond.png" alt="">
                                    <div class="contenu">
                                            <h1 class="titre1">Inventaire Général</h1>
                                            <h3 class="titre2">des matériels informatiques</h3>
                                            <button id="onglet" type="button" class="btn btn-primary delete">Commencer</button>  
                                    </div>
                                    
                                </div>
                                <div class="container">
                                        <div class="text1">
                                                La mission de ce site web est de stocker les informations concernant le recensement des matériels de la société Karlit.  Il est très simple à manipuler mais Seul une personne assignée peut gérer  son administration. Étant le principal responsable, il aura pour tâche d’entrer toutes les données nécessaires pour l’inventaire.  Il peut aussi supprimer et apporter des modifications aux données enregistrées.
                                        </div>
                                </div>
                                <div class="footer"></div></div>
                                
                               
                               
                        
                            <!-- <div class="tab-pane fade" id="custom-tabs-three-profile" role="tabpanel" aria-labelledby="custom-tabs-three-profile-tab">
                                Mauris tincidunt mi at erat gravida, eget tristique urna bibendum. Mauris pharetra purus ut ligula tempor, et vulputate metus facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Maecenas sollicitudin, nisi a luctus interdum, nisl ligula placerat mi, quis posuere purus ligula eu lectus. Donec nunc tellus, elementum sit amet ultricies at, posuere nec nunc. Nunc euismod pellentesque diam.
                            </div> -->
                            
                            <div class="tab-pane fade" id="custom-tabs-three-enregistrement" style="width:100%" role="tabpanel" aria-labelledby="custom-tabs-three-enregistrement-tab">
                                <div class="container">
                                    <div class="consigne">
                                        Veuillez choisir le matériel à enregistrer
                                    </div>
                                    <div class="triangle"></div>
                                    <div class="selection">
                                        <select class="form-control materiel" aria-describedby="basic-addon3">
                                            <option selected>Votre Choix</option>
                                            <option>E C R A N</option>
                                            <option>L A P T O P</option>
                                            <option>U C</option>
                                            <option>O N D U L E U R</option>
                                            <option>A U T R E S</option>
                                        </select>    
                                    </div> 
                                    <hr class="espace">
                                    <div id="fondformulaire"><img src="image/imgformulaire.png" alt=""></div>
                                    <div class="ecran" style="display:none">
                                        <div class="row">
                                                <div class="col-md-2">
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon3">Code</span>
                                                        <input type="text" class="form-control idecran idvaleur1" aria-describedby="basic-addon3">
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon3">Marque</span>
                                                        <input type="text" class="form-control idecran idvaleur2"  aria-describedby="basic-addon3">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon3">Année</span>
                                                        <input type="text" class="form-control idecran idvaleur3"  aria-describedby="basic-addon3">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="input-group mb-3">
                                                            <span class="input-group-text" id="basic-addon3">Etat</span>
                                                            <input type="text"  class="form-control idecran idvaleur4" aria-describedby="basic-addon3">
                                                    </div>   
                                                </div>
                                                
                                        </div>
                                        <div class="row">
                                                <div class="col-md-2">
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon3">Matricule</span>
                                                        <input type="text" class="form-control idecran idvaleur5" aria-describedby="basic-addon3">
                                                    </div>
                                                </div>
                                                <div class="col-md-5">
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon3">Utilisateur</span>
                                                        <input type="text" class="form-control idecran idvaleur6"  aria-describedby="basic-addon3">
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon3">Affectation</span>
                                                        <input type="text" class="form-control idecran idvaleur7"  aria-describedby="basic-addon3">
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="input-group mb-3">
                                                            <span class="input-group-text" id="basic-addon3">Supervision</span>
                                                            <input type="text" class="form-control idecran idvaleur8" aria-describedby="basic-addon3">
                                                    </div>   
                                                </div>
                                                
                                        </div>
                                    </div>
                                    
                                    <div class="laptop" style="display:none">
                                        <div class="row">
                                                <div class="col-md-3">
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon3">Code</span>
                                                        <input type="text" class="form-control idlaptop idvaleur1" aria-describedby="basic-addon3">
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon3">Nom_PC</span>
                                                        <input type="text" class="form-control idlaptop idvaleur2"  aria-describedby="basic-addon3">
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon3">Marque</span>
                                                        <input type="text" class="form-control idlaptop idvaleur3"  aria-describedby="basic-addon3">
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="input-group mb-3">
                                                            <span class="input-group-text" id="basic-addon3">CPU</span>
                                                            <input type="text"  class="form-control idlaptop idvaleur4" aria-describedby="basic-addon3">
                                                    </div>   
                                                </div>
                                                
                                        </div>
                                        <div class="row">
                                                <div class="col-md-2">
                                                        <div class="input-group mb-3">
                                                            <span class="input-group-text" id="basic-addon3">RAM</span>
                                                            <input type="text"   class="form-control idlaptop idvaleur5" aria-describedby="basic-addon3">
                                                        </div>   
                                                </div>
                                                <div class="col-md-4">
                                                        <div class="input-group mb-3">
                                                            <span class="input-group-text" id="basic-addon3">Année</span>
                                                            <input type="text" class="form-control idlaptop idvaleur6"  aria-describedby="basic-addon3">
                                                        </div> 
                                                </div>
                                                <div class="col-md-4">
                                                        <div class="input-group mb-3">
                                                            <span class="input-group-text" id="basic-addon3">État</span>
                                                            <input type="text" class="form-control idlaptop idvaleur7"  aria-describedby="basic-addon3">
                                                        </div> 
                                                </div>
                                                <div class="col-md-2">
                                                        <div class="input-group mb-3">
                                                            <span class="input-group-text" id="basic-addon3">Matricule</span>
                                                            <input type="text" class="form-control idlaptop idvaleur8" aria-describedby="basic-addon3">
                                                        </div>
                                                </div>
                                        </div>                                      
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addon3">Nom_user</span>
                                                <input type="text"  class="form-control idlaptop idvaleur9" aria-describedby="basic-addon3">
                                                </div>  
                                            </div>
                                            <div class="col-md-2">
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text" id="basic-addon3">Affectation</span>
                                                    <input type="text" class="form-control idlaptop idvaleur10" aria-describedby="basic-addon3">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text" id="basic-addon3">Supervision</span>
                                                    <input type="text"  class="form-control idlaptop idvaleur11"  aria-describedby="basic-addon3">
                                                </div>
                                            </div>
                                        </div>  
                                    </div>    

                                    <div class="misenform">
                                            <button class="btn btn-primary btnplace">E N R E G I S T R E R</button>      
                                    </div>  
                                </div>
                            </div>

                            <div class="tab-pane fade" id="custom-tabs-three-settings" role="tabpanel" aria-labelledby="custom-tabs-three-settings-tab">
                                <div class="overlay" style="display:none">  </div>
                               
                                
                                <div class="popup delete">
                                        <p style="padding-bottom:20px">Êtes-vous sûr de vouloir supprimer</p>
                                        <div class="text-right">
                                            <button id="delete" type="button" class="btn btn-primary delete">OUI</button>
                                            <button id="echap" type="button" class="btn btn-cancel">Cancel</button>
                                        </div>
                                </div>
                                <div class="popup update">
                                        <p style="padding-bottom:20px">Voulez-vous vraiment mettre à jour cet enregistrement?</p>
                                        <div class="text-right">
                                            <button id="btnupd" type="button" class="btn btn-primary delete">OUI</button>
                                            <button id="cancel" type="button" class="btn btn-cancel">Cancel</button>
                                        </div>
                                </div>
                                <div class="menushow">E C R A N </div>
                                <div class="corpstableau">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- <script src="js/jquery-3.5.1.js"></script> -->
<!-- <script src="js/datatables.min.js"></script> -->
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<!-- <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/fixedheader/3.2.0/js/dataTables.fixedHeader.min.js"></script> -->
<script src="js/dataTables.responsive.min.js"></script>
<script src="js/dataTables.fixedHeader.min.js"></script>









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
