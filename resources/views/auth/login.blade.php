
<!DOCTYPE html>
<html lang="pt-BR" dir="ltr" data-nav-layout="vertical" data-vertical-style="overlay" data-theme-mode="light" data-header-styles="light" data-menu-styles="light" data-toggled="close">

    <head>

        <!-- Meta Data -->
        <meta charset="UTF-8">
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="Description" content="Sistema SISGEN Frotas">
        <meta name="Author" content="Ronaldo Amaral - UHLELO">
        <meta name="keywords" content="sisgen, frotas, sisgen_frotas, sisgen frotas, laravel admin panel, admin template, admin dashboard, admin, admin panel, laravel template, laravel admin, dashboard, admin dashboard template, admin panel template, template dashboard, bootstrap dashboard, bootstrap admin template, laravel dashboard, dashboard bootstrap 5">
    
        <title> LOGIN | SISGEN FROTAS </title>
        <title>LOGIN – SISGEN FROTAS &amp;</title>

        <link rel="icon" href="https://laravelui.spruko.com/synto/build/assets/img/brand-logos/favicon.ico" type="image/x-icon">
        <link id="style" href="https://laravelui.spruko.com/synto/build/assets/libs/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://laravelui.spruko.com/synto/build/assets/icon-fonts/icons.css" rel="stylesheet">
        <link rel="preload" as="style" href="https://laravelui.spruko.com/synto/build/assets/app-C3rLMrk5.css" /><link rel="stylesheet" href="https://laravelui.spruko.com/synto/build/assets/app-C3rLMrk5.css" />
        

    </head>

	<body class="bg-white">
	<form method="POST" action="{{ route('admin.login.submit') }}">
        @csrf
        <div class="row authentication coming-soon mx-0">
            <div class="col-xl-6 col-lg-7 d-lg-block d-none px-0">
                <div class="cover p-5">
                    <a href="https://laravelui.spruko.com/synto/index" class="float-end">
                        <img src="http://localhost/UHLELO/uhlelo_sisgen/public/imgs/logo_sisgen_frotas.jpg" alt="" class=""> 
                    </a>
                    <div class="authentication-page justify-center align-items-center authentication-img w-100 h-100 d-flex ">
                        <img src="https://laravelui.spruko.com/synto/build/assets/img/authentication/2.png" alt="logo" class="mx-auto">
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-5 col-12">
                <div class="authentication-cover">
                    <div class="aunthentication-cover-content ">
                        <div class="row justify-content-center">
                            <div class="col-xl-6 col-lg-10 col-sm-6 col-10">
                                <p class="h4 fw-bold mb-2 text-center">Autenticação</p>
                                    <!-- <div class="text-center">
                                        <p class="fs-14 text-muted mt-3">Não possui uma conta? <a href="https://laravelui.spruko.com/synto/signup" class="text-primary fw-semibold">Sign up here</a></p>
                                    </div> -->
                                    <!-- <div class="d-grid align-items-center">
                                        <button class="btn btn-outline-light border shadow-sm">
                                            <img src="https://laravelui.spruko.com/synto/build/assets/img/authentication/social/1.png" class="w-4 h-4 me-2" alt="google-img">Sign in with Google
                                        </button>
                                    </div> -->
                                    <!-- <div class="text-center my-3 authentication-barrier">
                                        <span>OR</span>
                                    </div> -->
                                    <div class="row gy-3">
                                        <div class="col-xl-12">
                                            <label for="signup-Email" class="form-label text-default op=8">Login</label>
                                            <input required type="text" name="email" class="form-control form-control-lg" id="signup-Email" placeholder="Digite seu login">
                                        </div>
                                        <div class="col-xl-12">
                                            <label  class="form-label text-default d-block">Senha
                                                <a href="https://laravelui.spruko.com/synto/reset" class="float-end text-success">Esqueceu sua senha ?</a>
                                            </label>
                                            <div class="input-group">
                                                <input required type="password" name="password" class="form-control form-control-lg" id="signup-password" placeholder="Digite sua senha">
                                            </div>
                                        </div>
                                        <div class="col-xl-12 d-grid mt-2">
                                            <button id="form_submit" type="submit" class="btn btn-lg btn-primary">Acessar</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>


        <!-- Bootstrap JS -->
    	<script src="https://laravelui.spruko.com/synto/build/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        
		</form>

    
    </body>
    
</html>    


