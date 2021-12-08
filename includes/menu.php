  
<style>
    .submenu, .submenustart {
        position: relative;
    }

    .submenu:hover > .dropdown-menu {
        display: block;
        position: absolute;
        margin-left: 1%;
        left: 100%;
        top: 0;
    }

    .submenustart:hover > .submenu-item {
        display: block;
        position: absolute;
        margin-right: 1%;
        right: 100%;
        top: 0;
    }

    .btn-primary {
        border-color: #003300;
    }

    .btn-primary:hover {
        border-color: #45a945;
    }

    .form-body a {
        color: #258e25;
    }

    .form-body a:hover {
        color: #003300;
    }

    .form-control {
        border: none;
        outline: none;
        border-radius: 0px;
        border-bottom: 1px solid #45a945;
    }

    .form-control:focus {
        box-shadow: none;
        border-color: #003300;
    }

    .modal-header {
        background-color: #0f7311;
    }

    .modal-content {
        border: none;
    }

    .btn-primary:hover {
        background-color: #0f7311;
    }

    .btn-close {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23FFF'%3e%3cpath d='M.293.293a1 1 0 011.414 0L8 6.586 14.293.293a1 1 0 111.414 1.414L9.414 8l6.293 6.293a1 1 0 01-1.414 1.414L8 9.414l-6.293 6.293a1 1 0 01-1.414-1.414L6.586 8 .293 1.707a1 1 0 010-1.414z'/%3e%3c/svg%3e");
    }

    .btn-outline-success:hover {
        background-color: #0f7311;
    }

    @media screen and (max-width:767px){
        .submenu:hover > .dropdown-menu {
            position: static;
        }

        .submenustart:hover > .submenu-item {
            position: static;
        }
    }
</style>
<div class="test sticky-top">
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark ownigreen">
        <div class="container-fluid">
            <a href="index.php" class="navbar-brand"><img src="img/logo/optimized-owniilogo-white.png"></a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div id="navbarCollapse" class="collapse navbar-collapse">

                <ul class="nav navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="index.php" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">About</a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a href="about.php" class="dropdown-item">About</a>
                            <a href="#" class="dropdown-item">Team</a>
                            <a href="whitepaper.php" class="dropdown-item">Whitepaper</a>
                            <a href="roadmap.php" class="dropdown-item">Roadmap</a>
                            <a href="index.php#faq-section" class="dropdown-item">FAQ</a>
                            <a href="#" class="dropdown-item">How It Works</a>
                            <!-- <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">Test</a> -->
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Team</a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a href="#" class="dropdown-item">OWNii Global</a>
                            <a href="#" class="dropdown-item">OWNii Energy</a>
                            <a href="#" class="dropdown-item">San Victus Energy</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Token</a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a href="#" class="dropdown-item">Buy Token</a>
                            <a href="#" class="dropdown-item">Token Sales</a>
                            <a href="#" class="dropdown-item">Ownii Wallet</a>
                            <div class="submenu dropend py-0">
                                <a class="dropdown-toggle" href="#" data-bs-toggle="dropdown">
                                    Ownii Token
                                </a>
                                <ul class="dropdown-menu">
                                    <a href="#" class="dropdown-item">Description</a>
                                    <a href="#" class="dropdown-item">Volume</a>
                                    <a href="#" class="dropdown-item">Pricing</a>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Products</a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a href="#" class="dropdown-item">Li-Fi bulbs</a>
                            <a href="#" class="dropdown-item">Li-Fi enabled modems</a>
                            <a href="#" class="dropdown-item">Li-Fi enabled receivers</a>
                            <a href="#" class="dropdown-item">Li-Fi enabled transmitters</a>
                            <a href="#" class="dropdown-item">Li-Fi enabled routers</a>
                            <a href="#" class="dropdown-item">CGE generators technology package</a>
                            <a href="#" class="dropdown-item">WTE C6 technology package</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Services</a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <div class="submenustart dropstart py-0">
                                <a class="dropdown-toggle" href="#" data-bs-toggle="dropdown">
                                    OWNii Ecosystem suite
                                </a>
                                <ul class="dropdown-menu submenu-item">
                                    <a href="#" class="dropdown-item">Energy Audit</a>
                                    <a href="#" class="dropdown-item">Internet speed and connectivity</a>
                                    <a href="#" class="dropdown-item">Installation and testing</a>
                                    <a href="#" class="dropdown-item">Troubleshooting</a>
                                </ul>
                            </div>
                            <div class="submenustart dropstart py-0">
                                <a class="dropdown-toggle" href="#" data-bs-toggle="dropdown">
                                    Blockchain services
                                </a>
                                <ul class="dropdown-menu submenu-item">
                                    <a href="#" class="dropdown-item">Payment solutions</a>
                                    <a href="#" class="dropdown-item">Transaction solutions</a>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Shop</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a href="contactus.php" class="nav-link">Contact</a>
                    </li>
                    <!-- <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Admin</a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a href="#" class="dropdown-item">Reports</a>
                            <a href="#" class="dropdown-item">Settings</a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">Logout</a>
                        </div>
                    </li> -->
                </ul>

                <!-- Start Login Button -->
                <div class="d-flex">
                    <button class="btn btn-light ms-3" data-bs-toggle="modal" data-bs-target="#loginModal">Login</button>
                </div>
                <!-- End Login Button -->

            </div>
        </div>
    </nav>    
</div>

<!-- Start Login Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header py-2">
                <img src="img/logo/owniilogo.jpg" class="col-3 ms-2" height="50px"/>
                <h2 class="col-6 text-center modal-title text-white" id="loginModalLabel">LOGIN</h2>
                <button type="button" class="btn-close me-2 col-3" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body mt-2">
                <div class="container form-body">
                    <form action="" method="post">
                        <div class="form-group row mb-3">
                            <div class="col-1 d-flex justify-content-center align-items-center">
                                <i class="fa fa-user fa-2x color-primary-4a"></i>
                            </div>
                            <div class="col-10 p-0">
                                <input type="text" class="col form-control p-2" id="username" autocomplete="off" placeholder="Username">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-1 d-flex justify-content-center align-items-center">
                                <i class="fa fa-lock fa-2x color-primary-4a"></i>
                            </div>
                            <div class="col-10 p-0">
                                <input type="password" class="form-control p-2" id="password" placeholder="Password">
                            </div>
                            <div class="mt-2 mb-4 row text-end">
                                <a href="">Forgot Password?</a>
                            </div>
                        </div>
                        <div class="form-group d-flex justify-content-center">
                            <button type="submit" class="w-50 btn btn-primary rounded-pill fs-5">Login</button>
                        </div>
                    </form>
                    
                    <div class="row mt-3 text-center">
                        <p class="col"> Didn't have an account? <a href="">Sign Up</a></p>
                    </div>
                    <div class="row justify-content-end">
                        <button type="button" class="my-auto btn btn-outline-success col-3" data-bs-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Login Modal -->

</body>
</html>