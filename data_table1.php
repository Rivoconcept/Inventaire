<html>
<head>
<meta charset="UTF-8">

<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>LISTE DES ORDINATEURS DE LA SOCIÉTÉ KARLIT</title>



<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/autofill/2.3.6/css/autoFill.bootstrap.min.css">
<!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
<link rel="stylesheet" href="css/myscript.css">
</head>
<body>
<img class="affichage" src="image/titr.png" alt="">
<div class="container">
<nav class="navbar-light bg-light navbarplace">

    <ul class="nav justify-content-end">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Accueil</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="http://localhost/COURSPHP/KARLIT/#">Enregistrement</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="http://localhost/COURSPHP/KARLIT/Affichage.php">Visualisation</a>
            </li>
    </ul>

</nav>  
</div>



<hr>
    <div class="container">
    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Num</th>
                <th>id</th> 
                <th>date</th>              
                <th >Prénom</th>
                <th >Matricule</th>
                <th >Fonction</th>
                <th >Salle</th>
                <th >Nom_PC</th>
                <th >Marque</th>
                <th >Référence</th>
                <th >Couleur</th>
                <th >Processeur</th>
                <th >RAM</th>
                <th >HDD</th>
                <th >Suppr</th>
                <th >Mise à jour</th>

            </tr>
        </thead>
        <tbody id ="test1">
         
        </tbody>
 
    </table>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/autofill/2.3.6/js/dataTables.autoFill.min.js"></script>
    <script src="https://cdn.datatables.net/autofill/2.3.6/js/autoFill.bootstrap.min.js"></script>
    <script src="js/test.js"></script>

</body>
</html>