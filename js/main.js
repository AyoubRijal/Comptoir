$(function(){
 var cmbo = $('.op');
 var produit = $('.produit');
//var code_client = $('select').children('opition:selected').data('value');

   cmbo.on("change",function(){
   //  alert( $('#choix').attr('data-adresse'));
       //affiche l'attribute adresse
  //  alert( $('#choix').val());
       //affiche la valeur de la combo
   // $(".t").val($('#choix').attr('data-adresse'));
       // Affecter la valuer d'adresse a l'input
  //  alert( $('#choix').val());
       //affiche la valeur de la combo
   // $(".t").val($('#choix').attr('data-adresse'));
       // Affecter la valuer d'adresse a l'input
    //$('el).html('');
    //preprendTo('html') .befor
    //    alert($(this).children('option:selected').data('adresse'));
        /* affiche data de la selection */
    var adresse =$(this).children('option:selected').data('adresse');
    var ville = $(this).children('option:selected').data('ville');
    var codePostal = $(this).children('option:selected').data('codepostal');
    var pays = $(this).children('option:selected').data('pays');
    var region = $(this).children('option:selected').data('region');
        $(".codePostal").val(codePostal);
        $(".adresse").val(adresse);
        $(".ville").val(ville);
        $(".region").val(region);
        $(".pays").val(pays);
        $(".societe").val($(this).children('option:selected').data('societe'));

   });
    produit.on("change",function(){
    var prix = $(this).children('option:selected').data('prix');
        $(".inputprix").val(prix);
   });
   // $('').clone(t/f).appendto('');
   var quantite = $('.inputquatite');
   var remise = $('.inputremise');
   var prix =$('.inputprix');
   var total= $('.inputprixtotal');
    quantite.on("focusout",function(){
    if( isNaN($(this).val()) || $(this).val().trim() === ""){
        alert("invalid");
        }
    else {
      var t =  prix.val() * $(this).val() *(1 - remise.val()/100);
      total.val(t);
    }
 // Prix_unitaire * quantite * (1- Remise /100)
    });
    remise.on("focusout",function(){
    if( isNaN($(this).val()) || $(this).val().trim() === ""){
        alert("invalid");
        }
    else {
      var t =  prix.val() * $(this).val() *(1 - remise.val()/100);
      total.val(t);
    }
    });
    $('p').on("click",function(){
      $('.ligneproduit').clone(true).appendTo('table');
    });
});
