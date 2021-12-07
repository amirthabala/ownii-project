  
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
                <div class="d-flex">
                <button class="btn btn-light ms-3">Login</button>
                </div>
            </div>
        </div>
    </nav>    
</div>


</body>
</html>