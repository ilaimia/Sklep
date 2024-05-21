$(document).ready(function() {
    
    $(".menu").click(function(){
        var plik = $(this).attr("przycisk");
        $("#stronka").load(plik);
    });
   
    

    
}); 