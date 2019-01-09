<?php 
section('title', 'TechStone | Desenvolvimento Web');
section('description', 'Criação de Sites');
if(!defined('LAYOUT')) return 'site';
?>

<?php partial('site/_title-page'); ?>
<?php partial('site/_etapas'); ?>
<?php partial('site/_portfolio-grid'); ?>
