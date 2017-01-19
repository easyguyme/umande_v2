<?php include('header.php'); ?>

<body class="layout-top-nav skin-red hold-transition login-page">
<div class="login-box">
    <div class="login-logo">
        <a href="index.php"><b>Admin</b>Umande</a>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
        <p class="login-box-msg">Sign in to start your session</p>

        <form  id="login_form" method="post">
            <div class="form-group has-feedback">
                <input type="text" class="form-control"  name="username" placeholder="Email">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="password" class="form-control"  name="password" placeholder="Password">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="row">
                <div class="col-xs-8">

                </div>
                <!-- /.col -->
                <div class="col-xs-4">
                    <button type="submit" name="login" class="btn btn-primary btn-block btn-flat">Sign In</button>
                </div>
                <!-- /.col -->
            </div>
        </form>
        <script>
            jQuery(document).ready(function(){
                jQuery("#login_form").submit(function(e){
                    e.preventDefault();
                    var formData = jQuery(this).serialize();
                    $.ajax({
                        type: "POST",
                        url: "login.php",
                        data: formData,
                        success: function(html){
                            if(html=='true')
                            {
                                $.jGrowl("Loading Please Wait......", { sticky: true });
                                $.jGrowl("Welcome to the admin panel", { header: 'Access Granted' });
                                var delay = 2000;
                                setTimeout(function(){ window.location = 'dashboard.php'  }, delay);
                            }
                            else
                            {
                                $.jGrowl("Please Check your username and Password", { header: 'Login Failed' });
                            }
                        }

                    });
                    return false;
                });
            });
        </script>

        <!-- /.social-auth-links -->

        <a href="#">I forgot my password</a><br>


    </div>
    <!-- /.login-box-body -->
</div>


</body>
<?php include('hscripts.php'); ?>
<?php include('script.php'); ?>
</html>
