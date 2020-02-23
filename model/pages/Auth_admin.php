<?php
require '/opt/lampp/htdocs/www/planning lbs/model/inc/header.php';
?>

<body class="bg-gradient-primary" style="background-color: rgba(33,49,95,0.55);color: rgb(220,222,241);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9 col-lg-12 col-xl-10">
                <div class="card shadow-lg o-hidden border-0 my-5">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-flex">
                                <div class="flex-grow-1 bg-login-image" style="background-image: url(&quot;assets/img/photo6046422953668751421.jpg&quot;);"></div>
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h4 class="text-dark mb-4">Login Administration</h4>
                                    </div>
                                    <form class="user" method="POST"  action="../../traitement/Auth_admin.php">
                                        <div class="form-group"><input class="form-control form-control-user" type="text" style="height: 50px;padding: 22px;" id="content" name="username" placeholder="User name" required ></div>
                                        <div class="form-group"><input class="form-control form-control-user" type="password" id="exampleInputPassword" placeholder="Password" name="password" required ></div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <div class="form-check"><input class="form-check-input custom-control-input" type="checkbox" id="formCheck-1"><label class="form-check-label custom-control-label" for="formCheck-1">Remember Me</label></div>
                                            </div>
                                        </div><button class="btn btn-primary btn-block text-white btn-user" type="submit">Login</button>
                                        <hr>
                                        <div class="text-center"></div>
                                    </form>
                                    <div class="text-center"><a class="small" href="#TODO">Forgot Password?</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="assets/js/script.min.js"></script>












    <?php
    require '/opt/lampp/htdocs/www/planning lbs/model/inc/footer.php';
    ?>

