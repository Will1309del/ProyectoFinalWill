<?php include '../../layouts/header.php'; ?>

<?php include '../../layouts/headerStyle.php'; ?>

    <body class="fixed-left">

        <?php include '../../layouts/loader.php'; ?>

        <!-- Begin page -->
        <div class="accountbg"></div>
        <div class="wrapper-page">

            <div class="card">
                <div class="card-body">

                    <h3 class="text-center m-0">
                        <a href="index.php" class="logo logo-admin"><img src="../../public/assets/images/login.png" height="70" alt="logo"></a>
                    </h3>

                    <div class="p-3">
                        <h4 class="font-18 m-b-5 text-center">Bienvenido Nuevamente!</h4>
                        <p class="text-muted text-center">Inicia sesion para continuar en Lockers.</p>

                        <form class="form-horizontal m-t-30" action="formulario_login">

                            <div class="form-group">
                                <label for="username">Username/Usuario</label>
                                <input type="text" class="form-control" name="usuario" id="username" placeholder="Enter username/Inserte Nombre de Usuario">
                            </div>

                            <div class="form-group">
                                <label for="userpassword">Password/Contraseña</label>
                                <input type="password"  name="contraseña" class="form-control" id="userpassword" placeholder="Enter password/Ingrese contraseña">
                            </div>

                            <div class="form-group row m-t-20">
                                <div class="col-sm-6">

                                </div>
                                <div class="col-sm-6 text-right">
                                    <button class="btn btn-primary w-md waves-effect waves-light" type="submit">Iniciar Sesion</button>
                                </div>
                            </div>

                            <div class="form-group m-t-10 mb-0 row">
                                <div class="col-12 m-t-20">
                                    <a href="#" class="text-muted"><i class="mdi mdi-lock"></i> ¿Olvidaste tu contraseña?</a>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>

            <div class="m-t-40 text-center">
                <p class="text-white">Don't have an account ? <a href="pages-register.php" class="font-500 font-14 text-white font-secondary"> Signup Now </a> </p>
                <p class="text-white">© <?php echo date("Y",strtotime("-1 year")); ?> - <?php echo date("Y"); ?>  Admiria. Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand</p>
            </div>

        </div>

        <?php include '../../layouts/footerScript.php'; ?>

        <!-- App js -->
        <script src="../../public/assets/js/app.js"></script>
        <script src="funciones_ingreso.js" type="text/javascript" charset="utf-8" async defer></script>

    </body>
</html>