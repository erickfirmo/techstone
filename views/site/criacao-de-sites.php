<?php 
section('title', 'TechStone | Desenvolvimento Web');
section('description', 'Criação de Sites');
if(!defined('LAYOUT')) return 'site';
?>


<?php partial('site/_title-page'); ?>


<?php partial('site/_banner-produto', [
    'image' => 'banner-portfolio.png',
    'text' => 'Trabalhamos com o desenvolvimento de site modernos, com layouts adaptáveis a todos os dispositívos e 100% gerenciáveis pelo cliente.'
    ]); ?>



<?php partial('site/_etapas'); ?>
<?php partial('site/_portfolio-grid'); ?>
