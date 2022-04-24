<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>AdminLTE</title>


  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href='{{ asset("/bower_components/admin-lte/plugins/fontawesome-free/css/all.min.css") }}'>
  <!-- Theme style -->
  <link rel="stylesheet" href='{{ asset("/bower_components/admin-lte/dist/css/adminlte.min.css") }}'>


  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../admin" class="nav-link">Home</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../admin" class="brand-link">
      <img src='{{ asset("/bower_components/admin-lte/dist/img/AdminLTELogo.png") }}' alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src='https://lh3.googleusercontent.com/ogw/ADGmqu_7FTOfwMWYY50qo8okj5PVFSmgFTh5ohwwKztOvp5xoG4EIwfM3TmECZNSHhrn1-PFnHRK91-mk_Ggf0z_BJUJ2vVxJ9t9Zb9-0ZUu7IIWN4OF3se0_t8mx1BSrnxQPKNU-63FZSjU-fMrcZn8wxhUQ8-6st88ljAccGIoh2ayEuSXqyYP3Ph4lAwLeEj4SphNNRuaqXaMKt-iH-_2IveNFG-s9MryoFAle9gy8JVhDB15k8GoJwv3I-kQyPgMwTx6sIKF302SdeUE7jsVApqkulIuwI1Tnc_Z_9fpP7lbGQNd9E2BwikQOmKJxca1u6OII8BZ51j7E6B87zcRUvQeGm2NXUlGNUfWD5gOK2Ex_UEzWdXAur92jP2M1qp2Jy21qqhuuIl_jI0tPrfiYgyw-9edJsOFm29Qaj0GyYWQFjPkoQQmziLW2DJexEtra88esZ7vsJJ5n3QavpBX5J_LXAZvihviKpeBZ4c7JmWhYctnnto-hY8sRV487D_b3Ks5JrQOVciRTkRQxAntH6r24TjLAtfevTCcZ-FrxIKc7oGs-I2G_1C_G4-hI_6yJ33zLid8zZwQk2zrCaR4QkFQ9ccuuRQ6DtUoBeLeSs6zPLgUaFhh-6ReE2PPH3T5IIQBIjxKvmIf8Vm8I2VzpTg=s83-c' class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">David Sanosyan</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Starter Pages
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
              <li class="nav-item">
                <a href="{{ URL::to('/admin/users') }}"
                                            class="nav-link">
                  <i class="far fa-user nav-icon"></i>
                  <p>Users</p>
                </a>
              </li>
               <li class="nav-item">
                <a href="{{ URL::to('/admin/newses') }}"
                                            class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>News</p>
                </a>
              </li>

            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Simple Link
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>
        </ul>
      </nav>

      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
 <main>
            @yield('content')
        </main>
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2014-2019 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src='{{ asset("/bower_components/admin-lte/plugins/jquery/jquery.min.js") }}'></script>
<!-- Bootstrap 4 -->
<script src='{{ asset("/bower_components/admin-lte/plugins/bootstrap/js/bootstrap.bundle.min.js") }}'></script>
<!-- AdminLTE App -->
<script src='{{ asset("/bower_components/admin-lte/dist/js/adminlte.min.js") }}'></script>
</body>
</html>
