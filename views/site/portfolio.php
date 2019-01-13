<?php 
section('title', 'TechStone | Desenvolvimento Web');
section('description', 'Portfólio');
if(!defined('LAYOUT')) return 'site';
?>

<?php partial('site/_title-page'); ?>

<?php partial('site/_portfolio-grid'); ?>