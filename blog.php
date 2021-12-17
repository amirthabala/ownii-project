<?php include 'includes/header.php'; ?>

<style>

    .title-section h2 {
        text-decoration: underline;
        text-underline-position: under;
        color: var(--owniigreen);
        letter-spacing: 2px;
        padding-top: 5%;
        padding-bottom: 10px;
    }

    .carousel-item {
        height: 340px;
    }

    .card {
        height: 340px;
        padding: 20px;
    }

    .img-class {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    /* .img-class img {
        height: 300px;
    } */

    .nav-link {
        color: #003300;
    }

    .nav-pills .nav-link.active, .nav-pills .show>.nav-link {
        background-color: #45a945;
    }

    .form-control {
        border: 1px solid #45a945;
    }

    .form-control:focus {
        border-right: none;
    }

    .btn-primary {
        background-color: #45a945;
        border-color: #45a945; 
        border-radius: 0px;
    }

    .btn-primary:hover {
        background-color: #003300;
        border-color: #003300;
    }

    input[type="search"]::-webkit-search-cancel-button {
        -webkit-appearance: none;
        appearance: none;
        height: 10px;
        width: 10px;
        background-image: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pg0KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDE2LjAuMCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPg0KPCFET0NUWVBFIHN2ZyBQVUJMSUMgIi0vL1czQy8vRFREIFNWRyAxLjEvL0VOIiAiaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkIj4NCjxzdmcgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB4PSIwcHgiIHk9IjBweCINCgkgd2lkdGg9IjEyMy4wNXB4IiBoZWlnaHQ9IjEyMy4wNXB4IiB2aWV3Qm94PSIwIDAgMTIzLjA1IDEyMy4wNSIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgMTIzLjA1IDEyMy4wNTsiDQoJIHhtbDpzcGFjZT0icHJlc2VydmUiPg0KPGc+DQoJPHBhdGggZD0iTTEyMS4zMjUsMTAuOTI1bC04LjUtOC4zOTljLTIuMy0yLjMtNi4xLTIuMy04LjUsMGwtNDIuNCw0Mi4zOTlMMTguNzI2LDEuNzI2Yy0yLjMwMS0yLjMwMS02LjEwMS0yLjMwMS04LjUsMGwtOC41LDguNQ0KCQljLTIuMzAxLDIuMy0yLjMwMSw2LjEsMCw4LjVsNDMuMSw0My4xbC00Mi4zLDQyLjVjLTIuMywyLjMtMi4zLDYuMSwwLDguNWw4LjUsOC41YzIuMywyLjMsNi4xLDIuMyw4LjUsMGw0Mi4zOTktNDIuNGw0Mi40LDQyLjQNCgkJYzIuMywyLjMsNi4xLDIuMyw4LjUsMGw4LjUtOC41YzIuMy0yLjMsMi4zLTYuMSwwLTguNWwtNDIuNS00Mi40bDQyLjQtNDIuMzk5QzEyMy42MjUsMTcuMTI1LDEyMy42MjUsMTMuMzI1LDEyMS4zMjUsMTAuOTI1eiIvPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPC9zdmc+DQo=);
        background-size: 10px 10px;
        color: #003300;
    }

    .blogpost {
        padding-top: 2%;
        padding-bottom: 7%;
    }

    /* .card-image {
        height: 280px;
    } */

    a {
        text-decoration: none;
        color: inherit;
    }

    a:hover {
        color: inherit;
    }

    @media screen and (max-width: 768px){
        /* .card-image {
            height: 200px;
        } */

        .img-class img {
            height: 150px;
        }

        .carousel-item,
        .card {
            height: 290px;
        }
    }

    @media screen and (max-width: 600px){
        .image {
            text-align: center;
        }
        
        .card-image {
            width: 320px;
            height: 200px;
        }

        .img-class img {
            height: 180px;
        }

        .carousel-item,
        .card {
            height: 350px;
        }
    }

</style>

<!--Blog Container Starts-->
<div class="blog container">

    <div class="text-center title-section">
        <h2>OWNII BLOG</h2>
        <h5 class="text-secondary">Stay up to date with the latest stories and trends brought to you by OWNii!</h5>
    </div>

    <!-- Carousel Container Starts-->
    <div class="my-5 p-4">

        <?php 

            //Sample blog posts data
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

            //logic for displaying recent posts in Carousel
            $carousel = $blogs;
            $category = array();

            $dates = array();
            foreach ($carousel as $key => $val)
            {
                $dates[$key] = $val['createdAt'];

                //getting the keywords and finding the available categories
                $keywords = explode("," , $val["keywords"]);

                foreach($keywords as $keyword) {
                   
                    if(!(in_array($keyword,$category))){
                        array_push($category,$keyword);
                    }
                }
                
            }

            $categoryBlogs = array_fill(0,count($category),array());

            //segregating the blogs based on category
            foreach ($blogs as $blog) {
                $keywords = explode("," , $blog["keywords"]);
                foreach($keywords as $keyword) {
                   $index = array_search($keyword,$category);
                   array_push($categoryBlogs[$index],$blog);
                }
            }

            //Sorting the array based on created date
            array_multisort($dates, SORT_DESC, $carousel);

            //Slicing the array to 5 recent posts
            $carousel = array_slice($carousel,0,5);


            echo 
            '<div id="carouselExampleIndicators" class="carousel carousel-dark slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>';

                    //loop for indicator buttons(latest posts)
                    for($ind=1; $ind<count($carousel); $ind++){
                        echo 
                        '<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="'.$ind.'" aria-label="Slide '.($ind+1).'"></button>';
                    }
                    
                echo 
                '</div>
                <div class="carousel-inner">
                    <div class="carousel-item active">

                        <!-- For large screens -->
                        <a href="blogpage.php?id='.$carousel[0]["id"].'" >
                            <div class="card mb-3 d-none d-md-block d-md-flex justify-content-center align-items-center">
                                <div class="row g-0">
                                    <div class="offset-md-1 col-md-4 img-class">
                                        <img src="'.$carousel[0]["image"].'" class="img-fluid rounded-start p-2" alt="...">
                                    </div>
                                    <div class="col-md-6 ms-4">
                                        <div class="card-body">
                                            <h4 class="card-title mb-4">'.$carousel[0]["title"].'</h4>
                                            <p class="card-text">'.substr($carousel[0]["description"],0,150).'...</p>
                                            <p class="card-text"><small class="text-muted">'.$carousel[0]["createdAt"]->format('d-m-Y').'</small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <!-- For small Screens -->
                        <a href="blogpage.php?id='.$carousel[0]["id"].'" >
                            <div class="card d-block d-md-none d-flex justify-content-center align-items-center">
                                <div class="img-class">
                                    <img src="'.$carousel[0]["image"].'" class="card-img-top p-2" alt="...">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">'.$carousel[0]["title"].'</h5>
                                    <p class="card-text m-0">'.substr($carousel[0]["description"],0,40).'...</p>
                                    <!--<p class="card-text"><small class="text-muted">'.$carousel[0]["createdAt"]->format('d-m-Y').'</small></p>-->
                                </div>
                            </div>
                        </a>
                    </div>';

                    //loop for each carousel display(latest posts)
                    for($ind=1; $ind<count($carousel); $ind++){
                        echo 
                        '<div class="carousel-item">

                            <!-- For Large Screens -->

                            <a href="blogpage.php?id='.$carousel[$ind]["id"].'" >
                                <div class="card mb-3 d-none d-md-block d-md-flex justify-content-center align-items-center">
                                    <div class="row g-0">
                                        <div class="offset-md-1 col-md-4 img-class">
                                            <img src="'.$carousel[$ind]["image"].'" class="img-fluid rounded-start p-2" alt="...">
                                        </div>
                                        <div class="col-md-6 ms-4">
                                            <div class="card-body">
                                                <h4 class="card-title mb-4">'.$carousel[$ind]["title"].'</h4>
                                                <p class="card-text">'.substr($carousel[$ind]["description"],0,150).'...</p>
                                                <p class="card-text"><small class="text-muted">'.$carousel[$ind]["createdAt"]->format('d-m-Y').'</small></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <!-- For small Screens -->
                            <a href="blogpage.php?id='.$carousel[$ind]["id"].'" >
                                <div class="card d-block d-md-none d-flex justify-content-center align-items-center">
                                    <div class="img-class">
                                        <img src="'.$carousel[$ind]["image"].'" class="card-img-top p-2" alt="...">
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">'.$carousel[$ind]["title"].'</h5>
                                        <p class="card-text m-0">'.substr($carousel[$ind]["description"],0,40).'...</p>
                                        <!--<p class="card-text"><small class="text-muted">'.$carousel[$ind]["createdAt"]->format('d-m-Y').'</small></p>-->
                                    </div>
                                </div>
                            </a>
                        </div>';
                    }
                
                //Carousel Controls - prev and next
                echo
                '</div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>';
        ?>
    </div>
    <!-- Carousel Container Ends-->
    
    <!--Category tabs Starts -->
    <div class="category-nav row px-2">
        <div class="col-12 col-md-8 col-lg-9">
            <ul class="nav nav-pills " id="Tab" role="tablist">
                <?php 
                    echo 
                    '<li class="nav-item me-2" role="presentation">
                        <a class="nav-link active" id="tab0" data-bs-toggle="tab" href="#tab-content0" role="tab" aria-controls="'.$category[0].'" aria-selected="true">'.$category[0].'</a>
                    </li>';
                    for($index=1; $index<count($category); $index++){
                        echo
                        '<li class="nav-item me-2" role="presentation">
                            <a class="nav-link" id="tab'.$index.'" data-bs-toggle="tab" href="#tab-content'.$index.'" role="tab" aria-controls="'.$category[$index].'" aria-selected="false">'.$category[$index].'</a>
                        </li>';
                    }
                ?>
            </ul>
        </div>
        <div class="col-12 col-md-4 col-lg-3 row mx-0">
            <div class="form-outline col-10 p-0" style="margin-top:1px;">
                <input type="search" id="form1" class="form-control" placeholder="Search"/>
            </div>
            <button type="button" class="btn btn-primary col-2 d-flex justify-content-center align-items-center">
                <i class="fa fa-search"></i>
            </button>
        </div>
    </div>
    <!--Category tabs Ends -->


    <!-- Tab content -->
    <div class="tab-content" id="TabContent">
            <div class="tab-pane fade show active" id="tab-content0" role="tabpanel" aria-labelledby="tab0">

                <!-- Blog Posts Container Starts-->
                <div class="row blogpost">
                    <?php
                        //loop for each blog display
                        foreach($categoryBlogs[0] as $blog) {
                            echo 
                            '<div class="col-xs-12 col-md-6 col-lg-4 my-4">
                                <a href="blogpage.php?id='.$blog["id"].'" >
                                    <div class="card h-100">
                                        <div class="image">
                                            <img src="'.$blog["image"].'" class="card-img-top p-2 img-fluid card-image" alt="...">
                                        </div>
                                        <div class="card-body">
                                            <h5 class="card-title">'.$blog["title"].'</h5>
                                            <p class="card-text">'.substr($blog["description"],0,120).'...</p>
                                        </div>
                                        <div class="card-footer">
                                            <div class="row">
                                                <p class="card-text col mb-1"><small class="text-muted">PUBLISHED BY '.$blog["publishedBy"].'</small></p>
                                                <p class="card-text col mb-1 text-end"><small class="text-muted">'.$blog["createdAt"]->format('d-m-Y').'</small></p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>';
                        }
                    ?>
                </div>
            </div>

            <?php
                for($index=1; $index<count($category); $index++){
                    echo 
                    '<div class="tab-pane fade" id="tab-content'.$index.'" role="tabpanel" aria-labelledby="tab'.$index.'">
                        <div class="row blogpost">';
                            //loop for each blog display
                            foreach($categoryBlogs[$index] as $blog) {
                                echo 
                                '<div class="col-xs-12 col-md-6 col-lg-4 my-4">
                                    <a href="blogpage.php?id='.$blog["id"].'" >
                                        <div class="card h-100">
                                            <div class="image">
                                                <img src="'.$blog["image"].'" class="card-img-top p-2 img-fluid card-image" alt="...">
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title">'.$blog["title"].'</h5>
                                                <p class="card-text">'.substr($blog["description"],0,120).'...</p>
                                            </div>
                                            <div class="card-footer">
                                                <div class="row">
                                                    <p class="card-text col mb-1"><small class="text-muted">PUBLISHED BY '.$blog["publishedBy"].'</small></p>
                                                    <p class="card-text col mb-1 text-end"><small class="text-muted">'.$blog["createdAt"]->format('d-m-Y').'</small></p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>';
                            }
                        echo  
                        '</div>
                    </div>';
                }
            ?>
            <!-- Blog Posts Container Ends-->
    </div>
   
</div>
<!--Blog Container Ends-->

<?php include 'includes/footer.php'; ?>


<?php include 'includes/script.php'; ?>