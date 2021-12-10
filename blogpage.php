<?php include 'includes/header.php'; ?>

<style>
    .blogpage {
        padding-bottom: 5%;
    }

    .content {
        width: 90%;
        padding-top: 2%;
    }

    .title-section h2 {
        color: var(--owniigreen);
        letter-spacing: 2px;
        padding-top: 3%;
        padding-bottom: 10px;
    }

    .title-section a{
        text-decoration: none;
        color: var(--owniigreen);
    }

    .title-section a:hover, .title-section h2:hover{
        color: #258e25;
    }

    .title-section i {
        font-size: 30px;
    }

    .sidebar .nav-link {
        color: inherit;
        border-bottom: 1px solid var(--bg-1);
        padding: 12px;
    }


</style>

<!-- Blog page container starts -->
<div class="blogpage container">
    <?php

        $blogs = array (
            array("id" => 1,"title" => "LiFi","description" => "LiFi is a Visible Light Communications system transmitting wireless internet communications at very high speeds. The technology makes a LED light bulb emit pulses of light that are undetectable to the human eye and within those emitted pulses, data can travel to and from receivers. Then, the receivers collect information and interpret the transmitted data. This is conceptually similar to decoding Morse code but in a much faster rate – millions times a second. LiFi transmission speeds can go over 100 Gbps, 14 times faster than WiGig, also known as the world’s fastest WiFi.","image" => "img/Bg-Image1.png","publishedBy" => "Author1","keywords" => "LiFi","createdAt" => new DateTime("09-12-2021T15:03:01"),"updatedAt" => new DateTime("09-12-2021T15:03:01")),
            array("id" => 2,"title" => "OWNii","description" => "OWNii is an acronym for 'Optical Wireless Network Internet Infrastructure.' It is based on the 4th industrial revolutionary, disruptive, LiFi technology. LiFi, meaning 'Light Fidelity' is the brainchild of Harold Haas et al and pureLiFi, Ltd. It expands the spectrum bands for more devices in the IoT era to go online without jamming the ecosystem. It is safer, healthier and with far more advantages than the alternative of small cell towers electromagnetically transmitting within short distances of each other in our communities, that is, the current technology behind wireless communication more commonly known as Wi-Fi, Bluetooth, etc. LiFi technology significantly increases speed, security, and density.","image" => "img/distribution.png","publishedBy" => "Author1","keywords" => "Blockchain,CryptoCurrency,LiFi","createdAt" => new DateTime("09-12-2021T20:15:03"),"updatedAt" => new DateTime("09-12-2021T20:15:03")),
            array("id" => 3,"title" => "CryptoCurrency","description" => "A cryptocurrency is a digital or virtual currency that is secured by cryptography, which makes it nearly impossible to counterfeit or double-spend. Many cryptocurrencies are decentralized networks based on blockchain technology—a distributed ledger enforced by a disparate network of computers. A defining feature of cryptocurrencies is that they are generally not issued by any central authority, rendering them theoretically immune to government interference or manipulation.","image" => "img/coin-back.png","publishedBy" => "Author1","keywords" => "CryptoCurrency,Blockchain","createdAt" => new DateTime("08-12-2021T09:27:10"),"updatedAt" => new DateTime("08-12-2021T09:27:10")),
            array("id" => 4,"title" => "Blockchain","description" => "Blockchain is a system of recording information in a way that makes it difficult or impossible to change, hack, or cheat the system. A blockchain is essentially a digital ledger of transactions that is duplicated and distributed across the entire network of computer systems on the blockchain.","image" => "img/logo/owniilogo.jpg","publishedBy" => "Author1","keywords" => "Blockchain","createdAt" => new DateTime("07-12-2021T12:05:26"),"updatedAt" => new DateTime("07-12-2021T12:05:26")),
            array("id" => 5,"title" => "OWNii","description" => "OWNii is an acronym for 'Optical Wireless Network Internet Infrastructure.' It is based on the 4th industrial revolutionary, disruptive, LiFi technology. LiFi, meaning 'Light Fidelity' is the brainchild of Harold Haas et al and pureLiFi, Ltd. It expands the spectrum bands for more devices in the IoT era to go online without jamming the ecosystem. It is safer, healthier and with far more advantages than the alternative of small cell towers electromagnetically transmitting within short distances of each other in our communities, that is, the current technology behind wireless communication more commonly known as Wi-Fi, Bluetooth, etc. LiFi technology significantly increases speed, security, and density.","image" => "img/bg1.jpg","publishedBy" => "Author1","keywords" => "Energy,CryptoCurrency","createdAt" => new DateTime("09-12-2021T13:08:23"),"updatedAt" => new DateTime("09-12-2021T13:08:23"))
            
        );

        //getting the blog id from params
        $blogid = $_GET["id"];

        //fetching the current blog information from the id
        $currentBlog = array_filter($blogs, function($blog) use($blogid){
            return ($blog["id"] == $blogid);
        });

        $currentBlog = array_values($currentBlog)[0];

        // print_r($currentBlog);

    ?>

    <div class="title-section w-100">
        <a href="blog.php">
            <i class="fa fa-chevron-left me-2"></i>
            <h2 class="d-inline-block">OWNII BLOG</h2>
        </a>
    </div>

    <div class="row">
        <div class="blog col-md-8 col-lg-9 pb-4">
            <div class="d-flex justify-content-center">
                <div class="content">
                    <h1><?php echo $currentBlog["title"]; ?></h1>
                    <p><small class="text-muted">PUBLISHED BY <?php echo $currentBlog["publishedBy"].' DATED '.$currentBlog["createdAt"]->format('d-m-Y'); ?></small></p>

                    <div class="body mt-4 mb-5">
                        <p>
                            <?php echo $currentBlog["description"]; ?>
                        </p>
                    </div>

                    <div class="image-container d-flex justify-content-center align-items-center">
                        <img src=<?php echo '"'.$currentBlog["image"].'"'; ?> alt="..." class="img-fluid" width=400 height=400>
                    </div>
                </div>
            </div>
        </div>

        <div class="sidebar col-md-4 col-lg-3 py-4">
            <div class="container-fluid text-center">
                <h3>RELATED POSTS</h3>
            </div>
            <div class="container mt-4">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="#">POST 1</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">POST 2</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">POST 3</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Blog page container ends -->

<?php include 'includes/footer.php'; ?>

<?php include 'includes/script.php'; ?>