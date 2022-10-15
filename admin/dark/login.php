<?php  
require_once "../settings/code/login.php";?>
<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
   
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <title>Elite Admin Template - The Ultimate Multipurpose admin template</title>
    

    <link href="dist/css/pages/login-register-lock.css" rel="stylesheet">

    <link href="dist/css/style.min.css" rel="stylesheet">
    
    
</head>

<body class="skin-default card-no-border">
  
    <section id="wrapper">
        <div class="login-register" style="background-image:url(../assets/images/background/login-register.jpg);">
            <div class="login-box card">
                <div class="card-body">
                    <form class="form-horizontal form-material" id="loginform" action="#" method="POST">
                        <h3 class="text-center m-b-20">Qeyqiyyatdan kec</h3>
                        <div class="form-group ">
                            <div class="col-xs-12">
                                <input class="form-control" type="email" required="" placeholder="Email" name="email"> </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <input class="form-control" type="password" required="" placeholder="Password"name="pass"> </div>
                        </div>
                        <div class="form-group text-center">
                            <div class="col-xs-12 p-b-20">
                                <button class="btn btn-block btn-lg btn-info btn-rounded" type="submit" name="enter">Log In</button>
                            </div>
                        </div>
                  
                    </form>
              
                </div>
            </div>
        </div>
    </section>
    
   
    <script src="../assets/node_modules/jquery/jquery-3.2.1.min.js"></script>

    <script src="../assets/node_modules/popper/popper.min.js"></script>
    <script src="../assets/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        $(function() {
            $(".preloader").fadeOut();
        });
        $(function() {
            $('[data-toggle="tooltip"]').tooltip()
        });
     
        $('#to-recover').on("click", function() {
            $("#loginform").slideUp();
            $("#recoverform").fadeIn();
        });
    </script>
    
</body>



</html>