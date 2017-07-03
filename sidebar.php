<div id="sidebar">
  <div >
    <div class="panel panel-primary">
      <div class="panel-heading">
        <h2 class="panel-title"><?php _e('Categories'); ?></h2>
      </div>
      <div class="panel-body">
        <ul >
        <?php wp_list_cats('sort_column=name&optioncount=1&hierarchical=0'); ?>
        </ul>
      </div>
    </div><!-- panel-primary -->

    <div class="panel panel-primary">
    <div class="panel-heading">
      <h2 class="panel-title" ><?php _e('Archives'); ?></h2>
    </div>
    <div class="panel-body">
      <ul >
      <?php wp_get_archives('type=monthly'); ?>
      </ul>
    </div><!-- panel-body -->
  </div><!-- panel-primary -->

  </div>
</div>
