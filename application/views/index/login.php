<!DOCTYPE html>
<html>
  <head>
    <title>Login Arpusda</title>
  </head>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="<?php echo base_url('includes/library/adminlte/adminlte.min.css')?>">
  <link rel="stylesheet" href="<?php echo base_url('includes/library/bootstrap/bootstrap.min.css')?>">
  <link rel="stylesheet" href="<?php echo base_url('includes/library/bootstrap/font.css')?>">
  <link rel="stylesheet" href="<?php echo base_url('includes/library/fontawesome/css/font-awesome.min.css')?>">
  <link rel="stylesheet" href="<?php echo base_url('includes/library/izitoast/iziToast.min.css')?>">
  <script src="<?php echo base_url('includes/library/jquery/jquery-2.2.3.min.js')?>"></script>
  <script src="<?php echo base_url('includes/library/jquery-validate/jquery.validate.js')?>"></script>
  <script src="<?php echo base_url('includes/library/izitoast/iziToast.min.js')?>"></script>

  <link rel="shortcut icon" href="<?php echo base_url('includes/logo.png')?>">
  <body class="hold-transition login-page">
  <div class="login-box">
    <div class="login-logo">
      <a href="../../index2.html"><b>ARPUSDA</b></a>
    </div>
    <div class="login-box-body">
      <p class="login-box-msg">Sign in to start your session</p>
       <form id="sign_in" method="POST" action="<?php echo base_url('authenticate/login')?>">
        <div class="form-group">
          <input type="text" name="login_identity" id="identity" class="form-control" placeholder="Email" required autofocus>
        </div>
        <div class="form-group">
          <input type="password" name="login_password" id="password" class="form-control" placeholder="Password" required>
        </div>
        <div class="row">
          <div class="col-xs-8">
            <div class="checkbox icheck">
              <label>
                <input type="checkbox"> Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-xs-4">
            <button id="submit" name="send_forgotten_password" type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <!-- <div class="social-auth-links text-center">
        <p>- OR -</p>
        <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using
          Facebook</a>
        <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using
          Google+</a>
      </div> -->
      <!-- /.social-auth-links -->

      <a href="<?php echo base_url() ?>">Kembali</a><br>

    </div>
    <!-- /.login-box-body -->
  </div>
  <!-- /.login-box -->

</body>
<script type="text/javascript">
  $(function () {
    $('#sign_in').validate({
        highlight: function (input) {
            $(input).parents('.form-group').addClass('has-warning');
        },
        unhighlight: function (input) {
            $(input).parents('.form-group').removeClass('has-warning');
            $(input).parents('.form-group').addClass('has-success');
        },
        errorPlacement: function (error, element) {
            $(element).parents('.form-group').append(error);
        },
        submitHandler: function(input){
            var datas = $('#sign_in').serialize();
            var method = $('#sign_in').attr('method');
            var submit_url = $('#sign_in').attr('action');
            $.ajax({
                url: submit_url,
                type: method,
                data: datas,
                dataType:'json',
                beforeSend:function(data){
                  $("#submit").html('Proses..');
                },
                success:function(data){
                  console.log(data['status']);
                  $("#submit").html('Sign In');
                  $(".proses").show();
                  console.log(data);
                  if(data['status'] == 'error'){
                    iziToast.error({
                        title: '',
                        message: data['message'],
                        position: 'topCenter' // bottomRight, bottomLeft, topRight, topLeft, topCenter, bottomCenter
                    });    
                    $()
                  } else {
                    iziToast.success({
                        title: 'Hello',
                        message: 'Login Anda Berhasil',
                        position: 'topCenter', // bottomRight, bottomLeft, topRight, topLeft, topCenter, bottomCenter
                        onClosing: function(instance, toast, closedBy){
                            window.location.href="";
                        }
                    });
                  }                
                }
            });
        }
    });
  });
</script>
</html>