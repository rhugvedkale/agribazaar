<?php
include("header.php");
?>

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container text-center position-relative" data-aos="fade-in" data-aos-delay="200">
      <h1>AGRI-BAZAAR</h1>
      <h2>Bringing you the best farming experience</h2>
      <a href="customerreglogin.php" class="btn-get-started scrollto">Let's Go Farming!</a>
    </div>
  </section><!-- End Hero -->

  <main id="main">



    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row content">
          <div class="col-lg-6" data-aos-delay="100">
<img src="img/hd1.jpg" style="width: 100%;">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0" data-aos-delay="200">
            <ul>
              <li><i class="ri-check-fill"></i> Agri-Bazaar is a web application for Agriculture Management System</li><br>
              <li><i class="ri-check-fill"></i> It provides a concept of virtual agricultural trade to its users.</li><br>
              <li><i class="ri-check-fill"></i> It provides farmers with a wider market</li><br>
              <li><i class="ri-check-fill"></i> It helps the wholesalers and retailers in buying produce from larger number of farmers.</li><br>
              <li><i class="ri-check-fill"></i> It suggest some best farming practices to farmers</li><br>
              <li><i class="ri-check-fill"></i> It provides a direct link from farmers to consumers</li>
            </ul>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container">

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container">

        <div class="row">

          <div class="col-lg-12 d-flex align-items-stretch">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-xl-6 d-flex align-items-stretch">
                  <div class="icon-box mt-6 mt-xl-0">
                    <h4>Customer</h4>
                    <i class="bx bx-group"></i>
                    <p>Are you willing to purchase agricultural products from Farmers ? <br> <b>Login / Register as Customer</b></p>
					<div class="text-center"><button type="button" class="btn btn-info" onclick="window.location='customerreglogin.php'">Click Here</button></div>
                  </div>
                </div>
                <div class="col-xl-6 d-flex align-items-stretch">
                  <div class="icon-box mt-6 mt-xl-0">
                    <h4>Farmer</h4>
                    <i class="bx bx-donate-heart"></i>
                    <p>Are you willing to sell your agricultural products such as fruits, vegetables, spices, etc to customers ? <br>
					<b>Login / Register as Farmer</b></p>
					<div class="text-center"><button type="button" class="btn btn-info" onclick="window.location='farmerreglogin.php'">Click Here</button></div>
                  </div>
                </div>
              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End Why Us Section -->


  </main><!-- End #main -->
  
<?php
include("footer.php");
?>