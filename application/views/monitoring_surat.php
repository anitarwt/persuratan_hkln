<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Purple Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="<?php echo base_url();?>/assets/images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
      <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
          <a class="navbar-brand brand-logo" href="index.html"><img src="<?php echo base_url();?>/assets/images/logo_kementerian_agama.svg" alt="logo" />
         Biro Hukum dan Kerjasama Luar Negeri </a>
          <a class="navbar-brand brand-logo-mini" href="index.html"><img src="<?php echo base_url();?>/assets/assets/images/logo-mini.svg" alt="logo" /></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-stretch">
          
          
          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item nav-profile dropdown">
              <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <div class="nav-profile-img">
                  <img src="<?php echo base_url();?>/assets/images/faces/face1.jpg" alt="image">
                  <span class="availability-status online"></span>
                </div>
                <div class="nav-profile-text">
                  <p class="mb-1 text-black">David Greymaax</p>
                </div>
              </a>
              <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
                <a class="dropdown-item" href="#">
                  <i class="mdi mdi-cached mr-2 text-success"></i> Activity Log </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">
                  <i class="mdi mdi-logout mr-2 text-primary"></i> Signout </a>
              </div>
            </li>
            
            
            
            <li class="nav-item nav-logout d-none d-lg-block">
              <a class="nav-link" href="#">
                <i class="mdi mdi-power"></i>
              </a>
            </li>
            <li class="nav-item nav-settings d-none d-lg-block">
              <a class="nav-link" href="#">
                <i class="mdi mdi-format-line-spacing"></i>
              </a>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            
            <li class="nav-item">
              <a class="nav-link" href="index.html">
                <span class="menu-title">Dashboard</span>
                <i class="mdi mdi-home menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">Input Surat Masuk</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-crosshairs-gps menu-icon"></i>
              </a>
              
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url();?>assets/pages/icons/mdi.html">
                <span class="menu-title">Cetak Disposisi Surat</span>
                <i class="mdi mdi-contacts menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url();?>assets/pages/forms/basic_elements.html">
                <span class="menu-title">Daftar Surat Masuk TU</span>
                <i class="mdi mdi-format-list-bulleted menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url();?>assets/pages/charts/chartjs.html">
                <span class="menu-title">Monitoring Surat Masuk</span>
                &nbsp;
                <i class="mdi mdi-chart-bar menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url();?>assets/pages/tables/basic-table.html">
                <span class="menu-title">Pencarian Surat Masuk</span>
                <i class="mdi mdi-table-large menu-icon"></i>
              </a>
            </li>
            
            
          </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">

          <div class="content-wrapper">
             
            <div div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                   
                
                    <h4 class="card-title">Monitoring Surat Masuk Biro Hukum dan Kerjasama Luar Negeri</h4>
                   <button type="button" class="btn btn-gradient-primary btn-icon-text btn-sm"> Tambah Surat <i class="mdi mdi-file-check btn-icon-append"></i></button>
                    <table class="table table-bordered" width="100%">
                      <thead>
                        <tr>
                          <th> No </th>
                          <th> Tanggal Surat </th>
                          <th> Tanggal Masuk </th>
                          <th> No Surat </th>
                          <th> Jenis Surat </th>
                          <th> Perihal </th>
                          <th> Ringkasan Isi Surat </th>
                          <th> Pengirim </th>
                          <th> Disposisi Kepada </th>
                          <th> Posisi Surat </th>
                          <th> Aksi </th>
                          
                        </tr>
                       
              
                      </thead>
                      <tbody>
                        <tr>
                          <td> 1 </td>
                          <td> 20-12-2019 </td>
                          <td> 17-12-2019 </td>
                          <td> 999/JK.2/KL.822H/2/12/2019 </td>
                          <td> Undangan </td>
                           <td> Undangan Narasumber</td>
                          <td> Kementerian Dalam Negeri </td>
                          <td> Undangan Narasumber Rapat</td>
                           <td>
                              <label class="badge badge-gradient-warning">PROGRESS</label>
                            </td> 
                         <td>
                        <button type="button" class="btn btn-gradient-primary btn-icon-text btn-sm"> Edit <i class="mdi mdi-file-check btn-icon-append"></i></button>
                            <button type="button" class="btn btn-gradient-primary btn-sm">Detail <i class=" mdi mdi-view-grid btn-icon-append"></i></button>
                        </td>
                        </tr>
                        <tr>
                          <td> 2 </td>
                          <td> 20-12-2019 </td>
                          <td> 999/JK.2/KL.822H/2/12/2019 </td>
                          <td> Undangan Narasumber </td>
                          <td> Kementerian Dalam Negeri </td>
                          <td> Undangan Narasumber Rapat</td>
                           <td>
                              <label class="badge badge-gradient-warning">PROGRESS</label>
                            </td> 
                         <td>
                        
                          <button type="button" class="btn btn-gradient-primary btn-icon-text btn-sm"> Edit <i class="mdi mdi-file-check btn-icon-append"></i></button>
                            <button type="button" class="btn btn-gradient-primary btn-sm">Detail <i class=" mdi mdi-view-grid btn-icon-append"></i></button>
                        </td>
                        </tr>
                         <tr>
                          <td> 3 </td>
                          <td> 20-12-2019 </td>
                          <td> 999/JK.2/KL.822H/2/12/2019 </td>
                          <td> Undangan Narasumber </td>
                          <td> Kementerian Dalam Negeri </td>
                          <td> Undangan Narasumber Rapat</td>
                           <td>
                              <label class="badge badge-gradient-warning">PROGRESS</label>
                            </td> 
                         <td>
                        
                         <button type="button" class="btn btn-gradient-primary btn-icon-text btn-sm"> Edit <i class="mdi mdi-file-check btn-icon-append"></i></button>
                            <button type="button" class="btn btn-gradient-primary btn-sm">Detail <i class=" mdi mdi-view-grid btn-icon-append"></i></button>
                        </td>
                        </tr>
                        <tr>
                          <td> 4 </td>
                          <td> 20-12-2019 </td>
                          <td> 999/JK.2/KL.822H/2/12/2019 </td>
                          <td> Undangan Narasumber </td>
                          <td> Kementerian Dalam Negeri </td>
                          <td> Undangan Narasumber Rapat</td>
                           <td>
                              <label class="badge badge-gradient-warning">PROGRESS</label>
                            </td> 
                         <td>
                        
                        <button type="button" class="btn btn-gradient-primary btn-icon-text btn-sm"> Edit <i class="mdi mdi-file-check btn-icon-append"></i></button>
                            <button type="button" class="btn btn-gradient-primary btn-sm">Detail <i class=" mdi mdi-view-grid btn-icon-append"></i></button>
                        </td>
                        </tr>
                         <tr>
                          <td> 5 </td>
                          <td> 20-12-2019 </td>
                          <td> 999/JK.2/KL.822H/2/12/2019 </td>
                          <td> Undangan Narasumber </td>
                          <td> Kementerian Dalam Negeri </td>
                          <td> Undangan Narasumber Rapat</td>
                           <td>
                              <label class="badge badge-gradient-warning">PROGRESS</label>
                            </td> 
                         <td>
                        
                         <button type="button" class="btn btn-gradient-primary btn-icon-text btn-sm"> Edit <i class="mdi mdi-file-check btn-icon-append"></i></button>
                            <button type="button" class="btn btn-gradient-primary btn-sm">Detail <i class=" mdi mdi-view-grid btn-icon-append"></i></button>
                        </td>
                        </tr>
                         <tr>
                          <td> 6 </td>
                          <td> 20-12-2019 </td>
                          <td> 999/JK.2/KL.822H/2/12/2019 </td>
                          <td> Undangan Narasumber </td>
                          <td> Kementerian Dalam Negeri </td>
                          <td> Undangan Narasumber Rapat</td>
                           <td>
                              <label class="badge badge-gradient-warning">PROGRESS</label>
                            </td> 
                         <td>
                        
                        <button type="button" class="btn btn-gradient-primary btn-icon-text btn-sm"> Edit <i class="mdi mdi-file-check btn-icon-append"></i></button>
                            <button type="button" class="btn btn-gradient-primary btn-sm">Detail <i class=" mdi mdi-view-grid btn-icon-append"></i></button>
                        </td>
                        </tr>
                        <tr>
                          <td> 7 </td>
                          <td> 20-12-2019 </td>
                          <td> 999/JK.2/KL.822H/2/12/2019 </td>
                          <td> Undangan Narasumber </td>
                          <td> Kementerian Dalam Negeri </td>
                          <td> Undangan Narasumber Rapat</td>
                           <td>
                              <label class="badge badge-gradient-warning">PROGRESS</label>
                            </td> 
                         <td>
                        
                        <button type="button" class="btn btn-gradient-primary btn-icon-text btn-sm"> Edit <i class="mdi mdi-file-check btn-icon-append"></i></button>
                            <button type="button" class="btn btn-gradient-primary btn-sm">Detail <i class=" mdi mdi-view-grid btn-icon-append"></i></button>
                        </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
           
           
            
            
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2017 <a href="https://www.bootstrapdash.com/" target="_blank">BootstrapDash</a>. All rights reserved.</span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="mdi mdi-heart text-danger"></i></span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="<?php echo base_url();?>assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="<?php echo base_url();?>assets/vendors/chart.js/Chart.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="<?php echo base_url();?>/assets/js/off-canvas.js"></script>
    <script src="<?php echo base_url();?>/assets/js/hoverable-collapse.js"></script>
    <script src="<?php echo base_url();?>/assets/js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="<?php echo base_url();?>/assets/js/dashboard.js"></script>
    <script src="<?php echo base_url();?>/assets/js/todolist.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>