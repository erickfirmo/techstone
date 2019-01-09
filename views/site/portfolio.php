<?php 
section('title', 'TechStone | Desenvolvimento Web');
section('description', 'Portfólio');
if(!defined('LAYOUT')) return 'site';
?>

<?php partial('site/_title-page'); ?>

<div class="container">
    <div class="row portfolio-options">
        <div class="col-md-3">
        TODOS
        </div>
        <div class="col-md-3">
        LOJAS VIRTUAIS
        </div>
        <div class="col-md-3">
        SITES    
        </div>
        <div class="col-md-3">
        SISTEMAS WEB
        </div>
    </div>
</div>

<?php partial('site/_portfolio-grid'); ?>