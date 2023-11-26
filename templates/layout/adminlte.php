<!DOCTYPE html>
<html>

<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <!-- Font Awesome -->
    <!-- overlayScrollbars -->
    <!-- Theme style -->
    <?= $this->Html->css([
        '/adminlte/plugins/fontawesome-free/css/all.min',
        '/adminlte/plugins/overlayScrollbars/css/OverlayScrollbars.min',
        '/adminlte/dist/css/adminlte.min',
    ]) ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
</head>

<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">

        <?= $this->element('adminlte/preloader'); ?>
        <?= $this->element('adminlte/navbar-dark'); ?>
        <?= $this->element('adminlte/sidebar'); ?>

        <?= $this->Flash->render() ?>
        <?= $this->fetch('content') ?>

        <?= $this->element('adminlte/footer'); ?>
        <?= $this->element('adminlte/control-sidebar'); ?>

    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->
    <!-- jQuery -->
    <!-- Bootstrap -->
    <!-- overlayScrollbars -->
    <!-- AdminLTE App -->
    <?= $this->Html->script([
        '/adminlte/plugins/jquery/jquery.min',
        '/adminlte/plugins/bootstrap/js/bootstrap.bundle.min',
        '/adminlte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min',
        '/adminlte/dist/js/adminlte'
    ]) ?>

    <!-- PAGE PLUGINS -->
    <!-- jQuery Mapael -->
    <!-- ChartJS -->
    <!-- AdminLTE for demo purposes -->
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <?= $this->Html->script([
        '/adminlte/plugins/jquery-mousewheel/jquery.mousewheel',
        '/adminlte/plugins/raphael/raphael.min',
        '/adminlte/plugins/jquery-mapael/jquery.mapael.min',
        '/adminlte/plugins/jquery-mapael/maps/usa_states.min',
        '/adminlte/plugins/chart.js/Chart.min',
        '/adminlte/dist/js/demo',
        '/adminlte/dist/js/pages/dashboard2'
    ]) ?>

    <?= $this->fetch('script') ?>

</body>

</html>