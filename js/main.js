$(function(){
 var cmbo = $('.op');
//var code_client = $('select').children('opition:selected').data('value');

   cmbo.on("change",function(){
   //  alert( $('#choix').attr('data-adresse'));
       //affiche l'attribute adresse
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
   });

});
