$(function(){
    // var nbrecolonne = "";
    
            
    // $.ajax({
    //     type: "POST",
    //     url: "insertion.php",
    //     data: 
    //     {
    //         param: "nbrcolonne",
            
    //     },
    //     success: function (response) {
            
    //     nbrecolonne = response
    //     },
    // });
    
    


    $("#fondformulaire").addClass("fondformulaire");
    $("button.btn.btn-primary.btnplace").hide();

    $("select.materiel").on("change", function(){
        var type = $(".materiel option:selected").text();
        
        // $(".r, .m, .v").css("display", "inline-block");
            if ( type == "E C R A N") {
                $(".ecran").show();
                $(".laptop").css("display", "none");
                $(".idlaptop").removeAttr("id");
                    var nbrid= $('.idecran');
                    for (var i = 0; i < nbrid.length + 1; i++) {
                        $(".idecran.idvaleur"+i).attr("id", "valeur"+i);
                    }
                $("#fondformulaire").hide();

                $("button.btn.btn-primary.btnplace").removeAttr("id");
                $("button.btn.btn-primary.btnplace").attr("id", "btnvalider");
                $("button.btn.btn-primary.btnplace").show();
                
            } 
            else if ( type == "L A P T O P"){
                $(".ecran").css("display", "none");
                $(".laptop").show();
                $(".idecran").removeAttr("id");
                var nbrid= $('.idlaptop');
                for (var i = 0; i < nbrid.length + 1; i++) {
                    $(".idlaptop.idvaleur"+i).attr("id", "valeur"+i);
                }
                $("#fondformulaire").hide();
                
                $("button.btn.btn-primary.btnplace").removeAttr("id");
                $("button.btn.btn-primary.btnplace").attr("id", "btnvalider");
                $("button.btn.btn-primary.btnplace").show();
            } else {
                $(".ecran").hide();
                $(".laptop").hide();
                $("#fondformulaire").show();
                $("#fondformulaire").addClass("fondformulaire");
                $("button.btn.btn-primary.btnplace").hide();



            }
           
                
        })
/***************************************************************ACCUEIL**************************************************************************/
    $(document).on('click','#onglet', function(){
        
                $("#accueil a").removeClass("active");
                $("div#custom-tabs-three-home").removeClass("active show");
                $("li#formulaire a").addClass("active");
                $("div#custom-tabs-three-enregistrement").addClass("active show");
    })
    /*************************************************INSERTION*********************************************************************************** */

    $(document).on('click','#btnvalider', function(){
        
        
        if ($("#valeur1").val() !=""){
        
            
            if ($(".materiel option:selected").text()=="E C R A N") {
       
                    var nbrid = $('.idecran');
                    var nomtable = "ecran";

            } else if ($(".materiel option:selected").text()=="L A P T O P") {

                    var nbrid = $('.idlaptop');
                    var nomtable = "laptop";
            }


                    var values = "";
                    for(var i =1; i< nbrid.length + 1; i++){
                        values += ($('#valeur'+ i ).val()+"akonndro");
                        $('#valeur'+ i ).val("");
                    }
                        $('#valeur1').focus();

                
                    var value = '"'+values+'"'; 
                        $.ajax({
                            type: "POST",
                            url: "insertion.php",
                            data: 
                            {
                                param: "insertionbdd",
                                colonnevalues : values,
                                tablename : nomtable,
                                
                                
                            },
                            success: function (i) {
                                
                            
                            
                            alert(i);
                            },
                        });
            } else {
                alert("Veuillez-bien compléter les champs");
            }
        
        
         
         
     })
    

/**************************************************AFFICHAGE************************************************************************************/

 
   
     

    function valeurpardefaux(){
        var menu = $(".menushow").html();

        

        $.ajax({
                
            url: "insertion.php",
            type: "POST",
            data:{
        
                param: "selectpardefaut",
                menushow: menu,
            },
            success: function(ii){
            
  
            $('.corpstableau').html('<table id="myTable" class="table table-striped table-bordered" style="width:99%">'+ ii + '</tbody></table>');
                $('#myTable').dataTable( {
                    
                    fixedHeader : {
                        header : true,
                        footer : false,
                        
                    },
                        responsive: true,
                        paging: true,
                        autoFill: true,
                        pageLength: 50,
                        dom: 'Bfrtip',
                        buttons: [
                            'copy', 'excel', 'pdf'
                        ]
                        
                
                    
                    } );
                   
                   
            
         
                    $(".dataTables_info").html($(".dataTables_info").html().replace(/Showing/,"Affichage").replace(/to/,"à").replace(/of/,"pour").replace(/entries/,"enregistrements"));
            },

            
        }); 
                
        
        
        
        }
        valeurpardefaux();
        
/*VISUALISASTION************************************************************************************************************************************* */ 
    
        $(document).on('mouseleave','#sousmenu ul', function(){ 
            $("#sousmenu").fadeOut("3000");    
        })
        $(document).on('click','body', function(){ 
            // alert(  $(".logo span.p1").css('font-size'));
            // $(".menushow").insertBefore(".dt-button.buttons-copy");
            // $(".menushow").css("margin-left", "38%");
            // $(".menushow").addClass("dt-button buttons-html5");
            // if ( $("#sousmenu ul").is(':hover')==false) {
                $("#sousmenu").fadeOut("3000");
            // }
        })
        $(document).on('mouseenter','#actualisation', function(){
            
            if ($("a#custom-tabs-three-settings-tab").hasClass("active")==true) {
                $("#sousmenu").show();
                
            }
            
            valeurpardefaux();
        });
        $(document).on('click','#actualisation', function(){

            $("#sousmenu").show();
            $(".menushow").show();
            valeurpardefaux();
        });
   
        $(document).on('click','#sousmenu ul a', function(){    
            $(".menushow").show();
            $(".menushow").html($(this).html()); 
            $("#sousmenu").fadeOut("3000"); 
        });
        $(document).on('click','#accueil', function(){           
            $(".menushow").hide(); 
        });
        $(document).on('click','#formulaire', function(){       
            $(".menushow").hide(); 

     
        });




    /*DELETE************************************************************************************************************************************* */ 
    $(document).on('click','.chk', function(){  
        $('.chk').each(function(i){
            if($(this).is(":checked")){
                
                $(this).closest('tr').css('background-color', 'yellow');
            }else {
                $(this).closest('tr').css('background-color', 'inherit');
            }
        })      
        
    })
    var recupid = "";
    $(document).on('click','#erase', function(){  
        $('.chk').each(function(i){
            if($(this).is(":checked")){
                recupid += $(this).closest('tr').find('td:nth-child(2)').html() + ",";
                $(this).closest('tr').css('background-color', 'red');
            }
        })      
 
        
        $('.overlay').css("display", "inherit");
        $('.popup.delete').css("display", "inherit");
        
    })    
        $(document).on('click','#delete', function(){
            var menu = $(".menushow").html().replace(/ /g,"").toLowerCase();
        
                $('.cachediv').css("display", "inherit")
                $('.overlay').css("display", "none");
                $('.popup.delete').css("display", "none");
                valeurpardefaux();
            
                $.ajax({
                    type: "POST",
                    url: "delete.php",
                    data: 
                    {
                        param: "suppression",
                        idbase: recupid,
                        menushow: menu,
                        
                    },
                    success: function (response) {
                        valeurpardefaux();
                        // window.location="http://localhost/inventaire/delete.php";
                        
                    },
                });       
                
        })
        
        $(document).on('click','#echap', function(){
            $('.overlay').css("display", "none");
            $('.popup.delete').css("display", "none");
            
        })
    /*********************************************************UPDATE*********************************************************************************/

    var recupid = "";
    $(document).on('click','#update', function(){        
        idupdate = $(this).closest('tr').find('td:nth-child(2)').html();
        var select = $(".menushow").html().trim();
        $('.overlay').css("display", "inherit");
        $('.popup.update').css("display", "inherit");  
        $("select.materiel").val(select);
                if ( select == "E C R A N") {
                    $(".ecran").show();
                    $(".idlaptop").removeAttr("id");
                    $(".laptop").css("display", "none");
                        var nbrid= $('.idecran');
                        for (var i = 0; i < nbrid.length + 1; i++) {
                            $(".idecran.idvaleur"+i).attr("id", "valeur"+i);
                        }
                    $("#fondformulaire").hide();
                    $("button.btn.btn-primary.btnplace").removeAttr("id");
                    $("button.btn.btn-primary.btnplace").attr("id", "btnmiseajour");
                    $("button.btn.btn-primary.btnplace").html("METTRE À JOUR");
                    
  
                } 
                else if ( select == "L A P T O P"){
                    $(".ecran").css("display", "none");
                    $(".laptop").show();
                    $(".idecran").removeAttr("id");
                    var nbrid= $('.idlaptop');
                    for (var i = 0; i < nbrid.length + 1; i++) {
                        $(".idlaptop.idvaleur"+i).attr("id", "valeur"+i);
                    }
                    $("#fondformulaire").hide();
                    // $("button.btn.btn-primary.btnplace").removeAttr("id");
                    // $("button.btn.btn-primary.btnplace").attr("id", "btnmiseajour");
                    // $("button.btn.btn-primary.btnplace").html("METTRE À JOUR");
                   
                    
                } else {
                    $(".ecran").hide();
                    $(".laptop").hide();
                    $("#fondformulaire").show();
                    $("#fondformulaire").addClass("fondformulaire");
                    $("button.btn.btn-primary.btnplace").hide();
    
    
    
                }
    })    
    $(document).on('click','#cancel', function(){
            $('.overlay').css("display", "none");
            $('.popup.update').css("display", "none");
        
    })
    
        $(document).on('click','#btnupd', function(){
            var menu = $(".menushow").html().replace(/ /g,"").toLowerCase();
         
            $.ajax({
                type: "POST",
                url: "updateview.php",
                data: 
                    {
                    param: "miseajour",
                    idbase: idupdate,
                    menushow: menu,
                    
                    
                    },
                success: function (result) {
                
                var resultat = result.substring(0,result.length-8);
                var resultats = resultat.split("akonndro");
                for(var t = 1; t<resultats.length + 1; t++){
                    $("#valeur"+t).val(resultats[t]);
                };
        
                    },
                });       
        
                $('.cachediv').css("display", "inherit")
                $('.overlay').css("display", "none");
                $('.popup').css("display", "none");
                $("button.btn.btn-primary.btnplace").removeAttr("id");
                $("button.btn.btn-primary.btnplace").attr("id", "btnmiseajour");
                $("button.btn.btn-primary.btnplace").html("METTRE À JOUR");
                $("button.btn.btn-primary.btnplace").show();
                $(".menushow").hide();
            
                $("#actualisation a").removeClass("active");
                $("div#custom-tabs-three-settings").removeClass("active show");
                $("li#formulaire a").addClass("active");
                $("div#custom-tabs-three-enregistrement").addClass("active show");
        
                
        })
        
        $(document).on('click','#btnmiseajour', function(){
                var values = "";
                var nbrid= $('.idlaptop');
                var menu = $(".menushow").html().replace(/ /g,"").toLowerCase();

            for(var i =1; i< nbrid.length+1; i++){
                values += ($('#valeur'+ i ).val()+"akonndro");
                $('#valeur'+ i ).val("");
            }
                $('#valeur1').focus();
    
            $.ajax({
                type: "POST",
                url: "update.php",
                data: 
                {
                    param: "insertupdate",
                    colonnevalues : values,
                    idsend : idupdate,
                    menushow: menu,
                    
                    
                },
                success: function () {
                    $("button.btn.btn-primary.btnplace").removeAttr("id");
                    $("button.btn.btn-primary.btnplace").attr("id", "btnlaptopvalider");
                    $("button.btn.btn-primary.btnplace").html("E N R E G I S T R E R");
            
                },
            });
        
        });
        

    /*********************************************************LOGIN*********************************************************************************/

    $(document).on('focusout','#pword', function(){

    
        $.ajax({
            type: "POST",
            url: "authentif.php",
            data: 
            {
                param: "postlogin",
                postemail: $("#email").val(),
                postpsw: $("#pword").val(),
                
            },
            success: function (response) {
                
            },
        });

        if ($("#email").val()=="" || $("#pword").val()=="") {
            $(".msg").css("display", "inherit");
            $(".msg").html("Veuillez bien remplir les champs");
        }else {
            $(".msg").css("display", "none");
        };
        
    })

    $(document).on('click','#session', function(){

        $.ajax({
            type: "POST",
            url: "authentif.php",
            data: 
            {
                param: "entersession",
                postemail: $("#email").val(),
                postpsw: $("#pword").val(),
            
                
            },
            success: function (response) {
                var reponse = response.split(',');
            
                if (reponse[0] == 'YES'){  
                    window.location.assign("http://localho/inventaire/inventaire.php");
                            
                } else {
                    $(".msg").css("display", "inherit");
                    $(".msg").html(response);
                };
            },
        });   
    }); 
    $(document).ready(function() {
    
            $.ajax({
                type: "POST",
                url: "inventaire.php",
                data: 
                {
                    param: "testsession",
                
                },
                success: function (response) {
                    var reponse = response.split('*');
                
                    if (reponse[0] == 'oui'){  
                        $('.user').html(reponse[1]);
                    }else {
                        return;
                    };
                },
            }); 
    });


    
    $('#pword').bind('keypress', function(e) {
        var code = (e.keyCode ? e.keyCode : e.which);
    
    if(code == 13) { 
        $.ajax({
                type: "POST",
                url: "authentif.php",
                data: 
                {
                    param: "entersession",
                    postemail: $("#email").val(),
                    postpsw: $("#pword").val(),
                
                    
                },
                success: function (response) {
                    var reponse = response.split(',');
                
                    if (reponse[0] == 'YES'){  
                        window.location.assign("http://localhost/inventaire/inventaire.php");
                                
                    } else {
                        $(".msg").css("display", "inherit");
                        $(".msg").html(response);
                    };
                },
            });  
    }
        });
        
        

    $(document).on('click','#cadena', function(){ 
        $("#email").focus();
        
    })
    $(document).on('focusout','#update', function(){

    
        $.ajax({
            type: "POST",
            url: "authentif.php",
            data: 
            {
                param: "postlogin",
                postemail: $("#email").val(),
                postpsw: $("#pword").val(),
                
            },
            success: function (response) {
                
            },
        });

        if ($("#email").val()=="" || $("#pword").val()=="") {
            $(".msg").css("display", "inherit");
            $(".msg").html("Veuillez bien remplir les champs");
        }else {
            $(".msg").css("display", "none");
        };
        
    })
    /*********************************************************LOGOUT*********************************************************************************/
    $(document).on('click','#cadenas', function(){ 
        $(".logout").css("display", "inherit");
        
    })
    $(document).on('mouseleave','.logout', function(){ 
        $(".logout").fadeOut("3000");
        
    })
    $(document).on('click','#btnlogout', function(){ 
        $.ajax({
            type: "POST",
            url: "destroy.php",
            data: 
            {
                param: "deconnexion",
                
                
            },
            success: function (response) {
                
            },
        });
        window.location.assign("http://localhost/inventaire/");
    
        
    })
/******************************************************************* ****************************************************************** */

 

})
           

