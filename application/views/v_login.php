

<html>
    <head>
        <Title>Login SPBB</Title>
        <link rel="stylesheet" href="<?php echo base_url(); ?>boots/style.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>boots/buttons.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </head>
    <body>
        <div class="container-fluid px-1 px-md-5 px-lg-1 px-xl-5 py-5 mx-auto">
            <div class="hilda card card0 border-0">
                <div class="row d-flex">
                    <div class="col-lg-6">
                        <div class="card1 pb-5">
                            <div class="row"> <img src="<?php echo base_url(); ?>boots/img/logo.png" class="logo"> </div>
                            <div class="row px-3 justify-content-center mt-4 mb-5 border-line"> <img src="<?php echo base_url(); ?>boots/img/belajar.png" class="image"> </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card2 card border-0 px-4 py-4">
                            <div class="row px-1 justify-content-center mt-1 mb-1"> <img src="<?php echo base_url(); ?>boots/img/adzira.png" class="logo2"> </div>
                            <div class="justify-content-center row px-3 mb-4">
                                <h1 class="mb-1 mt-3"><b>Login</b></h1>
							</div>
							<form action="<?php echo base_url();?>c_login/aksi_login" method="POST">
                            <div class="row px-3"> <label class="mb-1">
                                    <h6 class="mb-0 text-sm">Username</h6>
                                </label> <input autocomplete="off" class="mb-4" type="text" name="username" placeholder="Enter a valid username">
                            </div>
                            <div class="row px-3"> <label class="mb-1">
                                    <h6 class="mb-0 text-sm">Password</h6>
                                </label> <input type="password" name="password" placeholder="Enter password">
                            </div>
                            <div class="row px-3 mb-4">
                                <div class="custom-control custom-checkbox custom-control-inline"> <input id="chk1" type="checkbox" name="chk" class="custom-control-input"> <label for="chk1" class="custom-control-label text-sm">Ingat saya</label> </div> <a href="#" class="ml-auto mb-0 text-sm">Lupa Password?</a>
                            </div>
                            <div>
                                <input type="submit" class="btn btn-info btn-lg btn-rounded btn-block" value="LOGIN">
                            </div>
						</div>
					</form>
                    </div>
                </div>
                <div class="alucard bg-blue py-4">
                    <div class="row px-3"> <small class="ml-4 ml-sm-5 mb-2">Copyright &copy; 2020 SPBB. <i>Proyek Perangkat Lunak</i></small>
                        <div class="social-contact ml-4 ml-sm-auto"> <span class="fa fa-facebook mr-4 text-sm"></span> <span class="fa fa-google-plus mr-4 text-sm"></span> <span class="fa fa-linkedin mr-4 text-sm"></span> <span class="fa fa-twitter mr-4 mr-sm-5 text-sm"></span> </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>