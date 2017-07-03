<!--
<div class="btn-group" role="group" aria-label="Basic example">
  <button type="button" class="btn btn-secondary">Left</button>
  <button type="button" class="btn btn-secondary">Middle</button>
  <button type="button" class="btn btn-secondary">Right</button>
</div>
-->

<nav class="navbar navbar-default nav-border">
  <div class="container-fluid">
    <ul class="nav navbar-nav">
      <!--Código para listas las páginas-->
      <?php
      //wp_list_pages( '&title_li=' );
      ?>
      <!--Inserta un menú personalizado-->
      <?php
      wp_nav_menu( array( 'header_menu' => 'header-menu' ) );
      ?>
    </ul>
  </div>
</nav>
