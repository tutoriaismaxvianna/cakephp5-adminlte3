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
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

    <!-- Font Awesome -->
    <!-- Tempusdominus Bootstrap 4 -->
    <!-- iCheck -->
    <!-- JQVMap -->
    <!-- Theme style -->
    <!-- overlayScrollbars -->
    <!-- Daterange picker -->
    <!-- summernote -->
    <?= $this->Html->css([
        '/adminlte/plugins/fontawesome-free/css/all.min',
        '/adminlte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min',
        '/adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min',
        '/adminlte/plugins/jqvmap/jqvmap.min',
        '/adminlte/dist/css/adminlte.min',
        '/adminlte/plugins/overlayScrollbars/css/OverlayScrollbars.min',
        '/adminlte/plugins/daterangepicker/daterangepicker',
        '/adminlte/plugins/summernote/summernote-bs4.min',
    ]) ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <?= $this->Flash->render() ?>
        <?= $this->fetch('content') ?>

    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <!-- jQuery UI 1.11.4 -->
    <?= $this->Html->script([
        '/adminlte/plugins/jquery/jquery.min',
        '/adminlte/plugins/jquery-ui/jquery-ui.min',
    ]) ?>

    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>

    <!-- Bootstrap 4 -->
    <!-- ChartJS -->
    <!-- Sparkline -->
    <!-- JQVMap -->
    <!-- jQuery Knob Chart -->
    <!-- daterangepicker -->
    <!-- Tempusdominus Bootstrap 4 -->
    <!-- Summernote -->
    <!-- overlayScrollbars -->
    <!-- AdminLTE App -->
    <!-- AdminLTE for demo purposes -->
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->

    <?= $this->Html->script([
        '/adminlte/plugins/bootstrap/js/bootstrap.bundle.min',
        '/adminlte/plugins/chart.js/Chart.min',
        '/adminlte/plugins/sparklines/sparkline',
        '/adminlte/plugins/jqvmap/jquery.vmap.min',
        '/adminlte/plugins/jqvmap/maps/jquery.vmap.usa',
        '/adminlte/plugins/jquery-knob/jquery.knob.min',
        '/adminlte/plugins/moment/moment.min',
        '/adminlte/plugins/daterangepicker/daterangepicker',
        '/adminlte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min',
        '/adminlte/plugins/summernote/summernote-bs4.min',
        '/adminlte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min',
        '/adminlte/dist/js/adminlte',
        '/adminlte/dist/js/demo',
        '/adminlte/dist/js/pages/dashboard',
    ]) ?>

    <?= $this->fetch('script') ?>

</body>

</html>