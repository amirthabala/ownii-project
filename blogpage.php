<?php include 'includes/header.php'; ?>

<style>
    .blogpage {
        padding-bottom: 5%;
    }

    .content {
        width: 90%;
        padding-top: 2%;
    }

    .title-section h3 {
        color: var(--owniigreen);
        letter-spacing: 2px;
        padding-top: 3%;
        padding-bottom: 10px;
    }

    .title-section a{
        text-decoration: none;
        color: var(--owniigreen);
    }

    .title-section a:hover, .title-section h3:hover{
        color: #258e25;
    }

    .title-section i {
        font-size: 25px;
    }

    .sidebar .nav-link {
        color: inherit;
        border-bottom: 1px solid var(--bg-1);
        padding: 12px;
    }

    .image-container img{
        object-fit: cover;
        width: 100%;
        height: 300px;
    }

    .profile {
        width: 85px;
    }

    /* laptops */
    @media screen and (max-width: 1200px){
        .profile {
            height: 70px;
            width: 70px;
        }
    }

    @media screen and (max-width: 768px){
        .image-container img{
            height: 220px;
        }
    }


</style>

<!-- Blog page container starts -->
<div class="blogpage container">
    <?php

        $blogs = array (
            array(
                "id" => 1,
                "title" => "Lorem ipsum",
                "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sit amet laoreet diam, sed pretium turpis. Donec aliquam ex id erat ultricies bibendum. Pellentesque pretium lorem ligula, in rhoncus lorem lacinia ut. Vivamus id suscipit ligula. Pellentesque imperdiet lectus tincidunt nisi congue, quis efficitur eros vulputate. Aliquam erat volutpat. Donec eget eleifend erat. Nulla maximus auctor pulvinar. Aliquam iaculis at nunc posuere fermentum. Maecenas diam urna, tristique a tempor eu, cursus sed lectus. Nulla eleifend ut eros gravida consectetur. Suspendisse potenti. Fusce id nisi aliquet, congue tortor vitae, blandit dui. Nullam laoreet arcu ut mattis dictum. Pellentesque id erat erat.Quisque nisi urna, imperdiet eu augue non, interdum volutpat mauris. Pellentesque a urna est. Integer viverra faucibus enim, sed congue quam aliquam vitae. Aliquam porta dui sit amet mauris posuere pretium. Suspendisse eros leo, tempus non malesuada eu, porttitor in elit. Nam luctus, nunc vitae vestibulum pretium, massa elit malesuada nunc, nec congue arcu ligula id enim. Aliquam hendrerit tristique aliquam. Suspendisse a magna sed quam vulputate fermentum. Suspendisse bibendum mattis augue non pulvinar. Praesent mattis efficitur est, id vulputate magna sollicitudin at. Quisque semper in metus at condimentum",
                "image" => "img/blog/cryptocurrency2.jpg",
                "publishedBy" => "Author1",
                "keywords" => "Lorem ipsum",
                "createdAt" => new DateTime("09-12-2021T15:03:01"),
                "updatedAt" => new DateTime("09-12-2021T15:03:01")
            ),
            array(
                "id" => 2,
                "title" => "Dolor",
                "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sit amet laoreet diam, sed pretium turpis. Donec aliquam ex id erat ultricies bibendum. Pellentesque pretium lorem ligula, in rhoncus lorem lacinia ut. Vivamus id suscipit ligula. Pellentesque imperdiet lectus tincidunt nisi congue, quis efficitur eros vulputate. Aliquam erat volutpat. Donec eget eleifend erat. Nulla maximus auctor pulvinar. Aliquam iaculis at nunc posuere fermentum. Maecenas diam urna, tristique a tempor eu, cursus sed lectus. Nulla eleifend ut eros gravida consectetur. Suspendisse potenti. Fusce id nisi aliquet, congue tortor vitae, blandit dui. Nullam laoreet arcu ut mattis dictum. Pellentesque id erat erat.",
                "image" => "img/blog/btc-3.jpeg",
                "publishedBy" => "Author1",
                "keywords" => "Lorem ipsum,Dolor",
                "createdAt" => new DateTime("09-12-2021T20:15:03"),
                "updatedAt" => new DateTime("09-12-2021T20:15:03")
            ),
            array(
                "id" => 3,
                "title" => "Quisque",
                "description" => "Quisque nisi urna, imperdiet eu augue non, interdum volutpat mauris. Pellentesque a urna est. Integer viverra faucibus enim, sed congue quam aliquam vitae. Aliquam porta dui sit amet mauris posuere pretium. Suspendisse eros leo, tempus non malesuada eu, porttitor in elit. Nam luctus, nunc vitae vestibulum pretium, massa elit malesuada nunc, nec congue arcu ligula id enim. Aliquam hendrerit tristique aliquam. Suspendisse a magna sed quam vulputate fermentum. Suspendisse bibendum mattis augue non pulvinar. Praesent mattis efficitur est, id vulputate magna sollicitudin at. Quisque semper in metus at condimentum.",
                "image" => "img/blog/bitcoin.jpg",
                "publishedBy" => "Author1",
                "keywords" => "Quisque,Dolor",
                "createdAt" => new DateTime("08-12-2021T09:27:10"),
                "updatedAt" => new DateTime("08-12-2021T09:27:10")
            ),
            array(
                "id" => 4,
                "title" => "Maecenas",
                "description" => "Maecenas id justo eget tellus lobortis suscipit. Vestibulum nisl augue, molestie at mi rhoncus, elementum euismod dui. Donec consequat bibendum sem, non aliquet lectus dignissim eu. Vivamus venenatis, neque quis faucibus ultrices, magna lorem suscipit justo, vel commodo magna est sed magna. Curabitur tincidunt, elit ac tempor malesuada, velit velit lacinia ligula, in tincidunt lacus nunc vitae lorem. Aenean nec lectus et arcu blandit iaculis. Cras laoreet metus ut orci consectetur hendrerit. Mauris id aliquet dolor, et porta sapien.",
                "image" => "img/blog/blockchain5.jpg",
                "publishedBy" => "Author1",
                "keywords" => "Maecenas,Loreum",
                "createdAt" => new DateTime("07-12-2021T12:05:26"),
                "updatedAt" => new DateTime("07-12-2021T12:05:26")
            ),
            array(
                "id" => 5,
                "title" => "OWNii",
                "description" => "Suspendisse in nibh in eros posuere bibendum eu id dolor. In ultricies neque sed elit fringilla imperdiet. Praesent eget nibh a sem finibus lacinia. Donec erat nibh, rhoncus et ultrices congue, luctus id nulla. Aliquam mollis accumsan bibendum. Nunc eros elit, cursus at pharetra eget, varius aliquam metus. Donec dolor lectus, rhoncus id eros eu, scelerisque porttitor augue. Curabitur quis odio eleifend, euismod lectus eget, laoreet diam.",
                "image" => "img/blog/ignore cryp.jpg",
                "publishedBy" => "Author1",
                "keywords" => "Suspendisse,Dolor,Maecenas",
                "createdAt" => new DateTime("09-12-2021T13:08:23"),
                "updatedAt" => new DateTime("09-12-2021T13:08:23")
            )
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
            <h3 class="d-inline-block">OWNII BLOG</h3>
        </a>
    </div>

    <div class="row pt-4">
        <div class="blog col-md-8 col-lg-9 pb-4">
            <div class="image-container d-flex justify-content-center align-items-center mb-3">
                <img src=<?php echo '"'.$currentBlog["image"].'"'; ?> alt="..." class="img-fluid">
            </div>

            <div class="d-flex justify-content-center">
                <div class="content">
                    <h1><?php echo $currentBlog["title"]; ?></h1>

                    <div class="body mt-4 mb-5">
                        <p>
                            <?php echo $currentBlog["description"]; ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="sidebar col-md-4 col-lg-3 py-4">
            <div class="row container mb-3 d-flex justify-content-center">
                <div class="container-fluid text-center">
                    <h3>ABOUT POST</h3>
                </div>
                <div class="container mt-3 row">
                    <div class="col-12 col-xl-4 mb-3 d-flex justify-content-center align-items-center">
                        <div class="profile bg-dark rounded-circle d-flex justify-content-center align-items-center">
                            <div class="text-white fs-1 mb-0 d-flex justify-content-center align-items-center mb-2" style="width:50px;height:50px">
                                <?php echo $currentBlog["publishedBy"][0];?>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-xl-8">
                        <div class="text-center">
                            <p><small class="text-muted">PUBLISHED BY <?php echo '<br>'.$currentBlog["publishedBy"].'<br> DATED '.$currentBlog["createdAt"]->format('d-m-Y'); ?></small></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row container mb-4">
                <hr>
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
</div>
<!-- Blog page container ends -->

<?php include 'includes/footer.php'; ?>

<?php include 'includes/script.php'; ?>