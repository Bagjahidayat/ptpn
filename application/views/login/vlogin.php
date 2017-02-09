<!doctype html>
<html lang="en" class="no-js">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="<?=base_url();?>assets/img/favicon.ico">

    <title>PT. Perkebunan Nusantara VIII</title>

    <?php $this->load->view('plugin/include_css') ?>

</head>

<body>
    <div class="login-page bk-img" style="background-image: url(<?=base_url();?>assets/img/bg-kebun.jpg);">
        <div class="form-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <h1 class="text-center text-bold text-light mt-4x">PT. Perkebunan Nusantara VIII</h1>
                        <div class="well row pt-2x pb-3x bk-light">
                            <div class="col-md-8 col-md-offset-2">
                            <!--    <form action="" class="mt"> -->
                            <?=form_open('login/ProsesLogin', ['class'=>'']);?>
                                    <label for="" class="text-uppercase text-sm">Username</label>
                                    <input type="text" id="username" name="username" placeholder="Username" class="form-control mb">


                                    <label for="" class="text-uppercase text-sm">Password</label>
                                    <input type="password" id="password" name="password" placeholder="Password" class="form-control mb">

                                    <button class="btn btn-primary btn-block" type="submit">Masuk</button><br></br>
                        

                    <!--            </form> -->
                                <?=form_close();?>
                            
                                    <label>Belum punya akun?</label>
                                    <a href="<?=base_url();?>index.php/Cptpn/insertDataAdmin">
                                    <button class="btn btn-warning btn-block" type="submit">Daftar</button>
                                    </a>
                        
                            </div>
                        </div>
                        <div class="text-center text-light">
                            <div class="text-light">@Copyright 2017 PT. Perkebunan Nusantara VIII, Bandung </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Loading Scripts -->
    <?php $this->load->view('plugin/include_js') ?>
</body>
</html>