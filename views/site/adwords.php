<?php 
section('title', 'TechStone | Desenvolvimento Web');
section('description', 'Adwords');
if(!defined('LAYOUT')) return 'site';
?>

<?php partial('site/_title-page'); ?>

<?php partial('site/_banner-produto', [
    'image' => 'banner-portfolio.png',
    'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur lectus felis, vehicula quis luctus blandit, ornare vel velit. Donec consequat cursus nulla, quis semper ante tempus eget. Integer in enim bibendum nibh sagittis vehicula vel et magna. Nunc erat sapien, luctus ut auctor id, imperdiet non mauris. Etiam nec lobortis massa. Fusce sed augue magna. Phasellus pulvinar ligula sit amet tellus aliquam tristique. Curabitur congue mollis lectus imperdiet sagittis.'
    ]); ?>
    
<?php partial('site/_etapas'); ?>