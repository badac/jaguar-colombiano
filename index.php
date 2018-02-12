<?php echo head(array('bodyid'=>'home')); ?>

<?php if (get_theme_option('Homepage Text') && (get_theme_option('Homepage Text Position') !== 'bottom')): ?>
<div id="intro">
    <p><?php echo get_theme_option('Homepage Text'); ?></p>
</div>
<?php endif; ?>

<!-- Featured Exhibit -->
<?php if ((get_theme_option('Display Featured Exhibit') !== '0')
        && plugin_is_active('ExhibitBuilder')
        && function_exists('thedaily_display_random_featured_exhibits')): ?>

  <div id="featured-exhibit" class="layout-<?php echo thedaily_featured_count(); ?>">
    <?php echo thedaily_display_random_featured_exhibits(0); ?>
  </div>

<?php endif; ?>
<!-- End Featured Exhibit -->

<!-- Featured Collection -->
<?php if (get_theme_option('Display Featured Collection') !== '0' && count(get_random_featured_collection()) > 0): ?>
  <h1 class="section-title" >Featured Collection</h1>
    <div id="featured-collection" class="layout-<?php echo thedaily_featured_count(); ?>">
    <?php echo random_featured_collection(0); ?>
</div>
<?php endif; ?>
<!-- End Featured Collection -->

<!-- Featured Item -->

<?php if (get_theme_option('Display Featured Item') !== '0' && count(get_random_featured_items()) > 0): ?>
  <h1  class="section-title" >Featured Items</h1>
  <div id="featured-items" class="layout-<?php echo thedaily_featured_count(); ?>">
      <?php echo random_featured_items(0); ?>
  </div>
<?php endif; ?>

<!--end featured-item-->

<?php if (get_theme_option('Homepage Text') && (get_theme_option('Homepage Text Position') == 'bottom')): ?>
<div id="intro">
    <p><?php echo get_theme_option('Homepage Text'); ?></p>
</div>
<?php endif; ?>

<?php fire_plugin_hook('public_home', array('view' => $this)); ?>

<?php echo foot(); ?>
