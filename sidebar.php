	<div id="sidebar">
		<ul>
<?php
if ( function_exists('register_sidebar') )
    register_sidebar(array(
        'before_widget' => '',
        'after_widget' => '<br /> <hr />',
        'before_title' => '<div class="title">',
        'after_title' => '</div>',
    ));
?>
<?php if ( !function_exists('dynamic_sidebar')
        || !dynamic_sidebar() ) : ?>
<?php endif; ?>
</ul>
</div>

