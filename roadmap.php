<?php include 'includes/header.php'; ?>

<style>
  .roadmap {
    padding-top: 50px;
    padding-bottom: 75px;
  }

  .roadmap .row {
    margin-bottom: 25px;
  }

  .left-content, .right-content {
    height: 150px;
  }

  .left-content {
    text-align: right;
  }

  .chart-left, .chart-right {
    width: 150px;
    height: 150px;
    margin: 0px;
  }
  .chart-left svg{
    transform: rotate(90deg);
  }

  .chart-right svg{
    transform: rotate(270deg);
  }

  .chart-left h5 {
    color: white;
    height: 30px;
    width: 200px;
    text-align: center;
    position: absolute;
    top: 50%;
    bottom: 50%;
    left: 50%;
    right: 50%;
    margin: -15px -110px;
  }
  
  .chart-right h5 {
    color: white;
    height: 30px;
    width: 200px;
    text-align: center;
    position: absolute;
    top: 50%;
    bottom: 50%;
    left: 50%;
    right: 50%;
    margin: -15px -90px;
  }

  .chart-left .hr {
    height: 10px;
    width: 140px;  
    position: absolute;
    top: 50%;
    bottom: 50%;
    left: 0%;
    margin-top: -5px;
    margin-bottom: -5px; 
    border:none;
    border-top: 10px dotted #258e25;
    color:#FFF;
    background-color:#FFF;
  }
  
  .chart-right .hr {
    height: 10px;
    width: 140px;  
    position: absolute;
    top: 50%;
    bottom: 50%;
    right: 0%;
    margin-top: -5px;
    margin-bottom: -5px; 
    border:none;
    border-top: 10px dotted #258e25;
    color:#FFF;
    background-color:#FFF;
  }

  .left-content > div {
    display: flex;
    justify-content: flex-end;
  }

  .chart-right .linker {
    width: 98px;
    transform:rotate(90deg);
    border:none;
    border-top: 3px dashed #258e25;
    opacity: 80%;
    color:#FFF;
    background-color:#FFF;
    position: absolute;
    left: 50%;
    right: 50%;
    margin-left: -52px;
    margin-right: -52px;
  }

  .chart-left .linker {
    width: 90px;
    transform:rotate(90deg);
    border:none;
    border-top: 3px dashed #258e25;
    opacity: 80%;
    color:#FFF;
    background-color:#FFF;
    position: absolute;
    left: 50%;
    right: 50%;
    margin-left: -45px;
    margin-right: -45px;
  }

  /* for laptops */
  @media screen and (max-width: 1200px) {
    .chart-left .hr,
    .chart-right .hr {
      width: 80px;  
    }
  }

  /* for tablets */
  @media screen and (max-width: 992px) {
    .left-content, .right-content {
      height: 100px;
    }

    .chart-left, .chart-right {
      width: 100px;
      height: 100px;
    }

    .chart-left h5 {
      font-size: 18px;
      margin: -13px -105px;
    }

    .chart-right h5 {
      font-size: 18px;
      margin: -13px -95px;
    }

    .chart-left .hr,
    .chart-right .hr {
      width: 40px;  
    }

    .chart-left .linker {
      width: 70px;
      margin-left: -35px;
      margin-right: -35px;
    }

    .chart-right .linker {
      width: 76px;
      margin-left: -38px;
      margin-right: -38px;
    }

    .chart-left svg,
    .chart-right svg {
      width: 100px;
      height: 100px;
    }

    @media screen and (max-width: 767px) {
      .left-content, .right-content {
        height: auto;
      }

      .chart-left, .chart-right {
        width: auto;
        height: auto;
      }

      .chart-left .hr {
        width: 50px;  
        position: absolute;
        left: 82%;
        border-width: 8px;
      }
    }
  }

</style>

<!-- contact-section -->
<section id="roadmap-section">
  <div class="container">
    <h2>Roadmap</h2>
  </div>
</section>

<!-- for large screens -->
<div class="roadmap container d-none d-md-block ">
  <div class="row">
    <div class="col-md-4 col-lg-4 left-content">
      <div id="row1-left"></div>
    </div>
    <div class="col-md-3 col-lg-4 d-flex flex-column justify-content-center align-items-center position-relative">
      <div class="chart-right">
        <svg xmlns="http://www.w3.org/2000/svg" width="150" height="150" fill="#005400" class="bi bi-triangle-fill" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M7.022 1.566a1.13 1.13 0 0 1 1.96 0l6.857 11.667c.457.778-.092 1.767-.98 1.767H1.144c-.889 0-1.437-.99-.98-1.767L7.022 1.566z"/>
        </svg>
        <hr class="hr">
        <hr class="linker">
        <h5>2017 Q1</h5>
      </div>
    </div>
    <div class="col-md-5 col-lg-4 right-content">
      <div id="row1-right">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Ownii Concept Born</h5>
            <hr>
            <p class="card-text">The first successful installation of LiFi technology in USA</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-4 col-lg-4 left-content">
      <div id="row2-left">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">1st Group Introduction</h5>
            <hr>
            <p class="card-text">Forums with first initial contributors & revealing of white paper</p>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-3 col-lg-4 d-flex flex-column justify-content-center align-items-center position-relative">
      <div class="chart-left">
        <svg xmlns="http://www.w3.org/2000/svg" width="150" height="150" fill="#005400" class="bi bi-triangle-fill" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M7.022 1.566a1.13 1.13 0 0 1 1.96 0l6.857 11.667c.457.778-.092 1.767-.98 1.767H1.144c-.889 0-1.437-.99-.98-1.767L7.022 1.566z"/>
        </svg>
        <hr class="hr">
        <hr class="linker">
        <h5>2017 Q4</h5>
      </div>
    </div>
    <div class="col-md-5 col-lg-4 right-content">
      <div id="row2-right"></div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-4 col-lg-4 left-content">
      <div id="row3-left"></div>
    </div>
    <div class="col-md-3 col-lg-4 d-flex flex-column justify-content-center align-items-center position-relative">
      <div class="chart-right">
        <svg xmlns="http://www.w3.org/2000/svg" width="150" height="150" fill="#005400" class="bi bi-triangle-fill" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M7.022 1.566a1.13 1.13 0 0 1 1.96 0l6.857 11.667c.457.778-.092 1.767-.98 1.767H1.144c-.889 0-1.437-.99-.98-1.767L7.022 1.566z"/>
        </svg>
        <hr class="hr">
        <hr class="linker">
        <h5>2018 Q1</h5>
      </div>
    </div>
    <div class="col-md-5 col-lg-4 right-content">
      <div id="row3-right">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">1st Independent Publication</h5>
            <hr>
            <p class="card-text">LiFi Technology Research Thesis by Electrical & Electronics Communications student at the University of Ecuador</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-4 col-lg-4 left-content">
      <div id="row4-left">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">1st Commercial LiFi Technology</h5>
            <hr>
            <p class="card-text">Successful installation in Germany Mall & New Products in Development</p>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-3 col-lg-4 d-flex flex-column justify-content-center align-items-center position-relative">
      <div class="chart-left">
        <svg xmlns="http://www.w3.org/2000/svg" width="150" height="150" fill="#005400" class="bi bi-triangle-fill" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M7.022 1.566a1.13 1.13 0 0 1 1.96 0l6.857 11.667c.457.778-.092 1.767-.98 1.767H1.144c-.889 0-1.437-.99-.98-1.767L7.022 1.566z"/>
        </svg>
        <hr class="hr">
        <hr class="linker">
        <h5>2018 Q2</h5>
      </div>
    </div>
    <div class="col-md-5 col-lg-4 right-content">
      <div id="row4-right"></div>
    </div>
  </div>
  
  <div class="row">
    <div class="col-md-4 col-lg-4 left-content">
      <div id="row5-left"></div>
    </div>
    <div class="col-md-3 col-lg-4 d-flex flex-column justify-content-center align-items-center position-relative">
      <div class="chart-right">
        <svg xmlns="http://www.w3.org/2000/svg" width="150" height="150" fill="#005400" class="bi bi-triangle-fill" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M7.022 1.566a1.13 1.13 0 0 1 1.96 0l6.857 11.667c.457.778-.092 1.767-.98 1.767H1.144c-.889 0-1.437-.99-.98-1.767L7.022 1.566z"/>
        </svg>
        <hr class="hr">
        <hr class="linker">
        <h5>2018 Q3</h5>
      </div>
    </div>
    <div class="col-md-5 col-lg-4 right-content">
      <div id="row5-right">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">1st Blog Pubications</h5>
            <hr>
            <p class="card-text">Co-partnership of LiFi Tech News & Trends Insights</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-4 col-lg-4 left-content">
      <div id="row6-left">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">1st Commercial office</h5>
            <hr>
            <p class="card-text">Successful installation in Business Co-Workspace offices at PCDSI in San Jose, CA</p>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-3 col-lg-4 d-flex flex-column justify-content-center align-items-center position-relative">
      <div class="chart-left">
        <svg xmlns="http://www.w3.org/2000/svg" width="150" height="150" fill="#005400" class="bi bi-triangle-fill" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M7.022 1.566a1.13 1.13 0 0 1 1.96 0l6.857 11.667c.457.778-.092 1.767-.98 1.767H1.144c-.889 0-1.437-.99-.98-1.767L7.022 1.566z"/>
        </svg>
        <hr class="hr">
        <hr class="linker">
        <h5>2020 Q3</h5>
      </div>
    </div>
    <div class="col-md-5 col-lg-4 right-content">
      <div id="row6-right"></div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-4 col-lg-4 left-content">
      <div id="row7-left"></div>
    </div>
    <div class="col-md-3 col-lg-4 d-flex flex-column justify-content-center align-items-center position-relative">
      <div class="chart-right">
        <svg xmlns="http://www.w3.org/2000/svg" width="150" height="150" fill="#005400" class="bi bi-triangle-fill" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M7.022 1.566a1.13 1.13 0 0 1 1.96 0l6.857 11.667c.457.778-.092 1.767-.98 1.767H1.144c-.889 0-1.437-.99-.98-1.767L7.022 1.566z"/>
        </svg>
        <hr class="hr">
        <hr class="linker">
        <h5>2020 Q4</h5>
      </div>
    </div>
    <div class="col-md-5 col-lg-4 right-content">
      <div id="row7-right">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Private Sale - Pledgers</h5>
            <hr>
            <p class="card-text">Creation of online platform, Soft Launch & Contributions from Private Pledges Promotion</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-4 col-lg-4 left-content">
      <div id="row8-left">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Journey Continues...</h5>
            <!-- <hr>
            <p class="card-text"></p> -->
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-3 col-lg-4 d-flex flex-column justify-content-center align-items-center position-relative">
      <div class="chart-left">
        <svg xmlns="http://www.w3.org/2000/svg" width="150" height="150" fill="#005400" class="bi bi-triangle-fill" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M7.022 1.566a1.13 1.13 0 0 1 1.96 0l6.857 11.667c.457.778-.092 1.767-.98 1.767H1.144c-.889 0-1.437-.99-.98-1.767L7.022 1.566z"/>
        </svg>
        <hr class="hr">
        <hr class="linker">
        <h5>NOW</h5>
      </div>
    </div>
    <div class="col-md-5 col-lg-4 right-content">
      <div id="row8-right"></div>
    </div>
  </div>
</div>

<!-- for small screens -->
<div class="roadmap container d-block d-md-none ">
<div class="row">
    <div class="col-4 d-flex flex-column justify-content-center align-items-center position-relative">
      <div class="chart-left">
        <svg xmlns="http://www.w3.org/2000/svg" width="150" height="150" fill="#005400" class="bi bi-triangle-fill" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M7.022 1.566a1.13 1.13 0 0 1 1.96 0l6.857 11.667c.457.778-.092 1.767-.98 1.767H1.144c-.889 0-1.437-.99-.98-1.767L7.022 1.566z"/>
        </svg>
        <h5>2017 Q1</h5>
      </div>
    </div>
    <div class="col-8 right-content">
      <div id="row1-right">
        <div class="card">
          <div class="card-body">
          <h5 class="card-title">Ownii Concept Born</h5>
            <hr>
            <p class="card-text">The first successful installation of LiFi technology in USA</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-4 d-flex flex-column justify-content-center align-items-center position-relative">
      <div class="chart-left">
        <svg xmlns="http://www.w3.org/2000/svg" width="150" height="150" fill="#005400" class="bi bi-triangle-fill" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M7.022 1.566a1.13 1.13 0 0 1 1.96 0l6.857 11.667c.457.778-.092 1.767-.98 1.767H1.144c-.889 0-1.437-.99-.98-1.767L7.022 1.566z"/>
        </svg>
        <h5>2017 Q4</h5>
      </div>
    </div>
    <div class="col-8 right-content">
      <div id="row2-right">
        <div class="card">
          <div class="card-body">
          <h5 class="card-title">1st Group Introduction</h5>
            <hr>
            <p class="card-text">Forums with first initial contributors & revealing of white paper</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-4 d-flex flex-column justify-content-center align-items-center position-relative">
      <div class="chart-left">
        <svg xmlns="http://www.w3.org/2000/svg" width="150" height="150" fill="#005400" class="bi bi-triangle-fill" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M7.022 1.566a1.13 1.13 0 0 1 1.96 0l6.857 11.667c.457.778-.092 1.767-.98 1.767H1.144c-.889 0-1.437-.99-.98-1.767L7.022 1.566z"/>
        </svg>
        <h5>2018 Q1</h5>
      </div>
    </div>
    <div class="col-8 right-content">
      <div id="row3-right">
        <div class="card">
          <div class="card-body">
          <h5 class="card-title">1st Independent Publication</h5>
            <hr>
            <p class="card-text">LiFi Technology Research Thesis by Electrical & Electronics Communications student at the University of Ecuador</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-4 d-flex flex-column justify-content-center align-items-center position-relative">
      <div class="chart-left">
        <svg xmlns="http://www.w3.org/2000/svg" width="150" height="150" fill="#005400" class="bi bi-triangle-fill" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M7.022 1.566a1.13 1.13 0 0 1 1.96 0l6.857 11.667c.457.778-.092 1.767-.98 1.767H1.144c-.889 0-1.437-.99-.98-1.767L7.022 1.566z"/>
        </svg>
        <h5>2018 Q2</h5>
      </div>
    </div>
    <div class="col-8 right-content">
      <div id="row4-right">
        <div class="card">
          <div class="card-body">
          <h5 class="card-title">1st Commercial LiFi Technology</h5>
            <hr>
            <p class="card-text">Successful installation in Germany Mall & New Products in Development</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-4 d-flex flex-column justify-content-center align-items-center position-relative">
      <div class="chart-left">
        <svg xmlns="http://www.w3.org/2000/svg" width="150" height="150" fill="#005400" class="bi bi-triangle-fill" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M7.022 1.566a1.13 1.13 0 0 1 1.96 0l6.857 11.667c.457.778-.092 1.767-.98 1.767H1.144c-.889 0-1.437-.99-.98-1.767L7.022 1.566z"/>
        </svg>
        <h5>2018 Q3</h5>
      </div>
    </div>
    <div class="col-8 right-content">
      <div id="row5-right">
        <div class="card">
          <div class="card-body">
          <h5 class="card-title">1st Blog Pubications</h5>
            <hr>
            <p class="card-text">Co-partnership of LiFi Tech News & Trends Insights</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-4 d-flex flex-column justify-content-center align-items-center position-relative">
      <div class="chart-left">
        <svg xmlns="http://www.w3.org/2000/svg" width="150" height="150" fill="#005400" class="bi bi-triangle-fill" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M7.022 1.566a1.13 1.13 0 0 1 1.96 0l6.857 11.667c.457.778-.092 1.767-.98 1.767H1.144c-.889 0-1.437-.99-.98-1.767L7.022 1.566z"/>
        </svg>
        <h5>2020 Q3</h5>
      </div>
    </div>
    <div class="col-8 right-content">
      <div id="row6-right">
        <div class="card">
          <div class="card-body">
          <h5 class="card-title">1st Commercial office</h5>
            <hr>
            <p class="card-text">Successful installation in Business Co-Workspace offices at PCDSI in San Jose, CA</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-4 d-flex flex-column justify-content-center align-items-center position-relative">
      <div class="chart-left">
        <svg xmlns="http://www.w3.org/2000/svg" width="150" height="150" fill="#005400" class="bi bi-triangle-fill" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M7.022 1.566a1.13 1.13 0 0 1 1.96 0l6.857 11.667c.457.778-.092 1.767-.98 1.767H1.144c-.889 0-1.437-.99-.98-1.767L7.022 1.566z"/>
        </svg>
        <h5>2020 Q4</h5>
      </div>
    </div>
    <div class="col-8 right-content">
      <div id="row7-right">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Private Sale - Pledgers</h5>
            <hr>
            <p class="card-text">Creation of online platform, Soft Launch & Contributions from Private Pledges Promotion</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-4 d-flex flex-column justify-content-center align-items-center position-relative">
      <div class="chart-left">
        <svg xmlns="http://www.w3.org/2000/svg" width="150" height="150" fill="#005400" class="bi bi-triangle-fill" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M7.022 1.566a1.13 1.13 0 0 1 1.96 0l6.857 11.667c.457.778-.092 1.767-.98 1.767H1.144c-.889 0-1.437-.99-.98-1.767L7.022 1.566z"/>
        </svg>
        <h5>NOW</h5>
      </div>
    </div>
    <div class="col-8 right-content">
      <div id="row8-right">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Journey Continues...</h5>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<?php include 'includes/footer.php'; ?>


<?php include 'includes/script.php'; ?>