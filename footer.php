<div id="footer">
  <ul>
  <?php
  if ( function_exists('register_sidebar') )
      register_sidebar(array(
          'before_widget' => '<p class="footerwidget">',
          'after_widget' => '</p>',
          'before_title' => '<h3>',
          'after_title' => '</h3>',
      ));
  ?>
  <?php if ( !function_exists('dynamic_sidebar')
          || !dynamic_sidebar(2) ) : ?>
  <?php endif; ?>
  </ul>
</div>

</div>



<?php wp_footer(); ?>


</body>

</html>

