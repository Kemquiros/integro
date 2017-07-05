$(document).ready(function(){
  $("#boton-ejecutar").click(function(){
    $.post("wp-content/themes/integro_theme/hacker_rank/2cube.php",
    {
      text: $('textarea#text-area-input').val()
    },
    function(data, status){
      $('textarea#text-area-output').val(data);
    });
  });
});
