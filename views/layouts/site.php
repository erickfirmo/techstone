<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="uft-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php section('title'); ?></title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php url('/node_modules/bootstrap/dist/css/bootstrap.css'); ?>">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="<?php url('/assets/site/css/style.css'); ?>">
</head>
<body>
<?php partial('site/_navbar'); ?>

<?php include '../views'.constant('CONTENT').'.php'; ?>

<?php partial('site/_footer'); ?>
<script src="<?php url('/node_modules/jquery/dist/jquery.slim.min.js'); ?>"></script>
<script src="<?php url('/node_modules/popper.js/dist/umd/popper.min.js'); ?>"></script>
<script src="<?php url('/node_modules/bootstrap/dist/js/bootstrap.js'); ?>"></script>

<script src="<?php url('/assets/site/js/_navbar.js'); ?>"></script>

</body>
</html>
