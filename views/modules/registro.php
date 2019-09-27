<body>
        <!-- Begin page -->
        <div class="accountbg" style="background: url('upv.jpg');background-size: auto auto;"></div>

        <div class="wrapper-page account-page-full">

            <div class="card">
                <div class="card-block">

                    <div class="account-box">

                        <div class="card-box p-3">
                            <h2 class="text-uppercase text-center pb-1">
                                <a href="index.html" class="text-success">
                                    <span><img src="post.png" alt="" height="120"></span>
                                </a>
                            </h2>

                            <form class="form-horizontal" action="#">

                                <div class="form-group row m-b-5">
                                    <div class="col-12">
                                        <label for="username">Nombre</label>
                                        <input class="form-control" type="text" name="nombreRegistro" required="" placeholder="Nombre">
                                    </div>
                                </div>
                                
                                <div class="form-group row m-b-5">
                                    <div class="col-12">
                                        <label for="username">Apellido Paterno</label>
                                        <input class="form-control" type="text" name="apellidopRegistro" required="" placeholder="Apellido Paterno">
                                    </div>
                                </div>
                                                                
                                <div class="form-group row m-b-5">
                                    <div class="col-12">
                                        <label for="username">Apellido Materno</label>
                                        <input class="form-control" type="text" name="apellidomRegistro" required="" placeholder="Apellido Materno">
                                    </div>
                                </div>

                                <div class="form-group row m-b-5">
                                    <div class="col-12">
                                        <label for="emailaddress">Email address</label>
                                        <input class="form-control" type="email" id="emailaddress" required="" placeholder="john@deo.com">
                                    </div>
                                </div>

                                <div class="form-group row m-b-5">
                                    <div class="col-12">
                                        <label for="password">Password</label>
                                        <input class="form-control" type="password" required="" id="password" placeholder="Enter your password">
                                    </div>
                                </div>

                                <div class="form-group row m-b-5">
                                    <div class="col-12">

                                        <div class="checkbox checkbox-custom">
                                            <input id="remember" type="checkbox" checked="">
                                            <label for="remember">
                                                Acepto <a href="#" class="text-custom">Terminos y Condiciones</a>
                                            </label>
                                        </div>

                                    </div>
                                </div>

                                <div class="form-group row text-center m-t-5">
                                    <div class="col-12">
                                        <button class="btn btn-block btn-custom waves-effect waves-light" type="submit">Registrarse</button>
                                    </div>
                                </div>

                            </form>

                            <div class="row m-t-1">
                                <div class="col-sm-12 text-center">
                                    <p class="text-muted">Ya tienes cuenta?  <a href="index.php?action=login" class="text-dark m-l-5"><b>Iniciar sesión</b></a></p>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>

        </div>
</body>