<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SIMANTRA-BPS</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="shortcut icon" type="image/png" href="/img/logo-favicon.png">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url() ?>/plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="<?= base_url() ?>/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?= base_url() ?>/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?= base_url() ?>/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url() ?>/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?= base_url() ?>/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?= base_url() ?>/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="<?= base_url() ?>/plugins/summernote/summernote-bs4.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">



    <!-- Navbar -->
    <?= $this->include('templates/topbar') ?>

    <!-- /.navbar -->
    <?= $this->include('templates/sidebar') ?>
    <!-- Main Sidebar Container -->


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- konten utama -->
      <?= $this->renderSection('konten-utama') ?>
    </div>
    <!-- /.content-wrapper -->

    <?= $this->include('templates/footer') ?>

  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="<?= base_url() ?>/plugins/jquery/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="<?= base_url() ?>/plugins/jquery-ui/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <!-- Bootstrap 4 -->
  <script src="<?= base_url() ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- ChartJS -->
  <script src="<?= base_url() ?>/plugins/chart.js/Chart.min.js"></script>
  <!-- Sparkline -->
  <script src="<?= base_url() ?>/plugins/sparklines/sparkline.js"></script>
  <!-- JQVMap -->
  <script src="<?= base_url() ?>/plugins/jqvmap/jquery.vmap.min.js"></script>
  <script src="<?= base_url() ?>/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
  <!-- jQuery Knob Chart -->
  <script src="<?= base_url() ?>/plugins/jquery-knob/jquery.knob.min.js"></script>
  <!-- daterangepicker -->
  <script src="<?= base_url() ?>/plugins/moment/moment.min.js"></script>
  <script src="<?= base_url() ?>/plugins/daterangepicker/daterangepicker.js"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="<?= base_url() ?>/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
  <!-- Summernote -->
  <script src="<?= base_url() ?>/plugins/summernote/summernote-bs4.min.js"></script>
  <!-- overlayScrollbars -->
  <script src="<?= base_url() ?>/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!-- AdminLTE App -->
  <script src="<?= base_url() ?>/js/adminlte.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="<?= base_url() ?>/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
  <script src="<?= base_url() ?>/plugins/datatables-buttons/js/buttons.print.min.js"></script>
  <script src="<?= base_url() ?>/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
  <script src="<?= base_url() ?>/plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="<?= base_url() ?>/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="<?= base_url() ?>/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="<?= base_url() ?>/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
  <script src="<?= base_url() ?>/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
  <script src="<?= base_url() ?>/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
  <!-- Page specific script -->
  <script>
    $(function() {
      $("#example1").DataTable({
        "responsive": true,
        "lengthChange": false,
        "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
    $('.btn-change-group').on('click', function() {
      const id = $(this).data('id');

      $('.id').val(id);
      $('#changeGroupModal').modal('show');
    });
    $('.btn-ubah').on('click', function() {
      const id = $(this).data('id');
      const username = $(this).data('username');
      $('#user_id').val(id);
      $('#username').val(username);
      $('#ubah_password').modal('show');
    });

    $('#nik').on('input', () => {
      var nik = $('#nik').val()
      console.log(nik);
      var url = '/kegiatan_mitra/cariMitra/' + nik
      console.log(url);
      // if (nik.length == ) {
        $.ajax({
          url: url,
          method: 'GET',
          dataType: 'json',
          success: function(data) {

            console.log(data);
            if (data) {
              $('#nama_mitra').val(data.nama_mitra)
            } else {
              $('#nama_mitra').val('mitra belum terdaftar')
            }
          },
          error: function(error) {
            console.error('Error fetching data:', error);
          }
        });
      // }
    })


    $(document).ready(function() {

      $('select[name="kategori"]').on('change', function() {

        var selectedKategori = $(this).val();


        if (selectedKategori === 'lapangan') {


          $.ajax({
            url: '/kegiatan_mitra/cariUser/3',
            method: 'GET',
            dataType: 'json',
            success: function(data) {

              $('select[name="pj"]').empty();


              $.each(data, function(index, user) {
                $('select[name="pj"]').append($('<option>', {
                  value: user.id,
                  text: user.username
                }));
              });
            },
            error: function(error) {
              console.error('Error fetching data:', error);
            }
          });
        } else if (selectedKategori === 'pengolahan') {
          $.ajax({
            url: '/kegiatan_mitra/cariUser/4',
            method: 'GET',
            dataType: 'json',
            success: function(data) {

              $('select[name="pj"]').empty();


              $.each(data, function(index, user) {
                $('select[name="pj"]').append($('<option>', {
                  value: user.id,
                  text: user.username
                }));
              });
            },
            error: function(error) {
              console.error('Error fetching data:', error);
            }
          });
        }
      });
    });
  </script>

</body>

</html>