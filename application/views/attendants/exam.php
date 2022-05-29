<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('common/head');?>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Pre Test</a>
      </li>
    </ul>

    <!-- Right navbar links -->
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
      <img src="../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>
    <?php $this->load->view('common/sidemenu');?>

    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Pre test Bimtek Juleha Jatim Angkatan ke 2</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Pre Test</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      <?php $c=1;?>
      <?php foreach($questions as $question){?>
      <div class="card">
        <div class="card-header">
          <h3 class="card-title"><?php echo $c . '. ' . $question->subject;?> (point <?php echo $question->qweight;?>)</h3>
        </div>
        <div class="card-body">
          <div><input type="radio" name="answer<?php echo $question->id;?>" value="a" onclick="doSaveAnswer({user_id:'<?php echo $attendant_id;?>',question_id:'<?php echo $question->id;?>',option_id:'a'})">&nbsp;Berdoa</div>
          <div><input type="radio" name="answer<?php echo $question->id;?>" value="b" onclick="doSaveAnswer({user_id:'<?php echo $attendant_id;?>',question_id:'<?php echo $question->id;?>',option_id:'b'})">&nbsp;Bermusyawarah</div>
          <div><input type="radio" name="answer<?php echo $question->id;?>" value="c" onclick="doSaveAnswer({user_id:'<?php echo $attendant_id;?>',question_id:'<?php echo $question->id;?>',option_id:'c'})">&nbsp;Sarapan</div>
          <div><input type="radio" name="answer<?php echo $question->id;?>" value="d" onclick="doSaveAnswer({user_id:'<?php echo $attendant_id;?>',question_id:'<?php echo $question->id;?>',option_id:'d'})">&nbsp;Sholat</div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->
      <?php $c++;?>
      <?php }?>
        <div>
          <button class="btn btn-primary">Soal Sebelumnya</button>
          <button class="btn btn-primary">Soal Berikutnya</button>
        </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.1.0-rc
    </div>
    <strong>Copyright &copy; bimtek Juleha Jatim 2022 <a href="/">julehajatim.com</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="/assets/adminlte/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="/assets/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="/assets/adminlte/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/assets/adminlte/dist/js/demo.js"></script>
<script>
  $(document).ready(function(){
    doSaveAnswer = function(obj){
      $.ajax({
        url:'/attendants/dosaveanswer',
        data:obj,
        type:'post',
        dataType:'ajax'
      })
      .done(res=>{
        console.log('Res',res)
      })
      .fail(err=>{
        console.log("Err",err)
      })
      console.log("save",obj)
    }
  });
</script>
</body>
</html>
