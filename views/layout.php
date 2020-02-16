<?php include_once '../views/inc/modals.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>School System</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../views/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../views/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="../views/css/all.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../views/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../views/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../views/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">

<?php include_once 'inc/header.php'; ?>
<?php include_once ($path); ?>
<?php include_once 'inc/footer.php'; ?>


</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="../views/js/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../views/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="../views/js/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../views/js/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../views/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../views/js/demo.js"></script>
</body>
</html>
