<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <?php
      if ( function_exists( 'the_custom_logo' ) ) {
        $custom_logo_id = get_theme_mod( 'custom_logo' );
        $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
        echo '<a href="'. get_bloginfo( "wpurl" ).'"><img id="logo" src="'. esc_url( $logo[0] ) .'"></a>';
      }else{
        echo '<a class="navbar-brand nav-title" href="'. get_bloginfo( "wpurl" ).'"><'.get_bloginfo( "name" ) .'</a></div>';
      }
      ?>

    </div>
    <ul class="nav navbar-nav">
    </ul>
    <div class="collapse navbar-collapse" id="myNavbar">
      <div class="btn-group navbar-nav navbar-right">

        <button type="button" class="btn navbar-btn btn-primary" data-toggle="modal" data-target="#perfilModal"><span class="glyphicon glyphicon-user" > Perfil</span></button>
        <button type="button" class="btn navbar-btn btn-primary" data-toggle="modal" data-target="#salirModal"><span class="glyphicon glyphicon-log-in"> Salir</span></button>
      </div>
    </div>
  </div>
</nav>
<!-- modal perfil-->
<div class="modal fade" id="perfilModal" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Perfil</h4>
      </div>
      <div class="modal-body">
        <p>Función en construcción</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Aceptar</button>
      </div>
    </div>
  </div>
</div>
<!-- modal salir-->
<div class="modal fade" id="salirModal" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Salir</h4>
      </div>
      <div class="modal-body">
        <p>Función en construcción</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Aceptar</button>
      </div>
    </div>
  </div>
</div>
