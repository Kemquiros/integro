$(document).ready(function(){
  $("#boton-ejecutar").click(function(){
    $.post("wp-content/themes/integro_theme/hacker_rank/2cube.php",
    {
      text: $('textarea#text-area').val()
    },
    function(data, status){
      alert("Data: " + data + "\nStatus: " + status);
    });
  });
});
