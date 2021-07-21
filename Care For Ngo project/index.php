<!doctype html>
<?php
session_start();
 ?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans:wght@400;700&display=swap" rel="stylesheet">
    <title>Care For</title>
    <link rel="stylesheet" href="main.css">
    <script src="https://kit.fontawesome.com/332a215f17.js" crossorigin="anonymous"></script>
  </head>

  <body>
      <!-- Navbar-->
      <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top" id="mainNav">
          <div class="container">
              <a class="navbar-brand js-scroll-trigger" href="#page-top">
                <span class="logo">Care For</span>
              </a>
              <button class="navbar-toggler navbar-toggler-right"
              type="button" data-toggle="collapse" data-target="#navbarResponsive"
              aria-controls="navbarResponsive" aria-expanded="false"
              aria-label="Toggle navigation">Menu
              <i class="fas fa-bars ml-1"></i>
            </button>
              <div class="collapse navbar-collapse" id="navbarResponsive">
                  <ul class="navbar-nav text-uppercase ml-auto">
                      <li class="nav-item">
                  <a class="nav-link js-scroll-trigger" href="#home">Home</a></li>
                  <li class="nav-item">
                 <a class="nav-link js-scroll-trigger" href="#causes">Causes</a></li>
                  <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="#project">Projects</a></li>
                <li class="nav-item">
                  <a class="nav-link js-scroll-trigger" href="#about">About</a></li>
               <li class="nav-item">
                  <a class="nav-link js-scroll-trigger" href="#team">Team</a></li>
                  <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#blog">Blog</a></li>
                 <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="#contact">Contact</a></li>
                <?php
                if(isset($_SESSION["is_logged_in"]))
                {
                $firstname=$_SESSION["firstname"];
                echo "<li class='nav-item'>";
                echo "<a class='nav-link js-scroll-trigger' href='logout.php'>Welcome".$firstname." </a></li>";
                }
                 ?>
                  </ul>
              </div>
          </div>
      </nav>
      <!-- Hero-->
      <header class="hero">
          <div class="container">
          <div class="hero-heading text-uppercase">We care for you </div>
        <a class="btn btn-danger btn-lg text-uppercase"
        href="form.php">Donate Now</a>
          </div>
      </header>
      <!--end of Hero Image-->
      <!-- Major Causes-->
      <section class="mt-5 page-section" id="services">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase font-weight-bold">Major Causes</h2>
                <h3 class="section-subheading text-muted">
                  Care For is one of the non-profit organization near you.</h3>
            </div>
            <div class="row text-center">
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                      <i class="fas fa-circle fa-stack-2x text-danger"></i>
                      <i class="fas fa-hand-holding-usd fa-stack-1x fa-inverse"></i>

                    </span>
                    <h4 class="my-3">Give Donations</h4>
                    <p class="text-muted">Giving frees us from the familiar territory of our own needs by opening our mind to the unexplained worlds occupied by the needs of others. </p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                      <i class="fas fa-circle fa-stack-2x text-warning"></i>
                      <i class="fas fa-lightbulb fa-stack-1x fa-inverse"></i>
                      </span>
                    <h4 class="my-3">Give Inspiration</h4>
                    <p class="text-muted">Environment is no one’s property to destroy; it’s everyone’s responsibility to protect. We need people like you who can give inspiration to new generation.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                      <i class="fas fa-circle fa-stack-2x text-success"></i>
                      <i class="fas fa-tshirt fa-stack-1x fa-inverse"></i>
                    </span>

                    <h4 class="my-3">Become Volunteer</h4>
                    <p class="text-muted">As you grow older, you will discover that you have two hands — one for helping yourself, the other for helping others. become volunteer for us and help this green world.</p>
                </div>
            </div>
        </div>
    </section>
      <!-- End of Major Causes-->
      <!--Project Section-->
     <section class="proj-section bg-light py-5" id="project">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Projects</h2>
                <h3 class="section-subheading text-muted">
                  Our projects around the region of india.</h3>
            </div>
            <div class="row">
              <!---Project 1-->
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="project-item">
                      <a class="project-link" data-toggle="modal"
                       href="#projectModal1">
                       <div class="project-hover">
                       <div class="project-hover-content">
                         <i class="fas fa-plus fa-3x"></i>
                        </div>
                      </div>
                    <img src="Images/porj1.jpg" class="img-fluid" alt=""></a>
                        <div class="project-caption">
                            <div class="project-caption-heading">Lions</div>
                            <div class="project-caption-subheading text-muted">
                              Save</div>
                        </div>
                    </div>
                </div>
                <!--- End of Project 1-->
                <!---Project 2-->
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="project-item">
                        <a class="project-link" data-toggle="modal"
                        href="#projectModal2"
                            ><div class="project-hover">
                                <div class="project-hover-content">
                                  <i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="Images/porj2.jpg" alt=""
                        /></a>
                        <div class="project-caption">
                            <div class="project-caption-heading">Blackbuck</div>
                            <div class="project-caption-subheading text-muted">India</div>
                        </div>
                    </div>
                </div>
                <!--End of Project 2-->
                <!--Project 3-->
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="project-item">
                   <a class="project-link" data-toggle="modal"href="#projectModal3"
                            ><div class="project-hover">
                                <div class="project-hover-content">
                                  <i class="fas fa-plus fa-3x"></i></div>
                            </div>
                      <img class="img-fluid" src="Images/porj3.jpg" alt=""></a>
                        <div class="project-caption">
                       <div class="project-caption-heading">Factories</div>
                  <div class="project-caption-subheading text-muted">Pollution</div>
                        </div>
                    </div>
                </div>
                <!--End of Project 3-->
                <!--Project4 -->
                <div class="col-lg-4 col-sm-6 mb-4">
                  <div class="project-item">
                 <a class="project-link" data-toggle="modal"href="#projectModal4"
                          ><div class="project-hover">
                              <div class="project-hover-content">
                                <i class="fas fa-plus fa-3x"></i></div>
                          </div>
                    <img class="img-fluid" src="Images/porj4.jpg" alt=""></a>
                      <div class="project-caption">
                     <div class="project-caption-heading">Farming</div>
                <div class="project-caption-subheading text-muted">Help</div>
                      </div>
                  </div>
              </div>
              <!--End of Project 4-->
              <!--Project5 -->
              <div class="col-lg-4 col-sm-6 mb-4">
                <div class="project-item">
               <a class="project-link" data-toggle="modal"href="#projectModal5"
                        ><div class="project-hover">
                            <div class="project-hover-content">
                              <i class="fas fa-plus fa-3x"></i></div>
                        </div>
                  <img class="img-fluid" src="Images/porj5.jpg" alt=""></a>
                    <div class="project-caption">
                   <div class="project-caption-heading">Sparrow</div>
              <div class="project-caption-subheading text-muted">Birds</div>
                    </div>
                </div>
            </div>
            <!--End of Project 5-->
                <!--Project6 -->
                <div class="col-lg-4 col-sm-6 mb-4">
                  <div class="project-item">
                 <a class="project-link" data-toggle="modal"href="#projectModal6"
                          ><div class="project-hover">
                              <div class="project-hover-content">
                                <i class="fas fa-plus fa-3x"></i></div>
                          </div>
                    <img class="img-fluid" src="Images/porj6.jpg" alt=""></a>
                      <div class="project-caption">
                     <div class="project-caption-heading">Plants</div>
                <div class="project-caption-subheading text-muted">Tree</div>
                      </div>
                  </div>
              </div>
              <!--End of Project 6-->

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End of Project Section-->
    <!---About us-->
<!-- About-->
<section class="about-section mt-5" id="about">
  <div class="container">
      <div class="text-center">
          <h2 class="section-heading text-uppercase">About</h2>
          <h3 class="section-subheading text-muted">
            Let us introduce ourselves to you.</h3>
      </div>
      <!-- ======= Apna about section ======= -->
    <section id="about" class="about">
      <div class="container-fluid">

        <div class="row">
          <div class="col-xl-5 col-lg-6 d-flex justify-content-center align-items-stretch" data-aos="fade-right">
             <img src="Images/about.jpg" class="img-fluid" alt="">
          </div>

          <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5"
          data-aos="fade-left">
            <h3>A clean, healthy and well protected environment supporting a sustainable society and economy.</h3>
            <p>'Care For' challenges the systems of power and privilege that destroy the environment and place disproportionate burdens on vulnerable communities. As Care For, we know from nature that diversity is essential to life on the planet and success in our organization.</p>
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
              <div class="icon"><i class="fas fa-low-vision"></i></div>
              <h4 class="title"><a href="">Our Vision</a></h4>
              <p class="description">To save waste from being littered, burnt or going into dumping grounds through recycling, composting or co-processing and create waste free cities, towns and villages.</p>
            </div>

            <div class="icon-box" data-aos="zoom-in" data-aos-delay="200">
              <div class="icon"><i class="fas fa-user-astronaut"></i></div>
              <h4 class="title"><a href="">Our Mission</a></h4>
              <p class="description">To create urban and rural models for Waste Management by focusing on one ward in states and one district in rural india respectively and make them waste free.</p>
            </div>

            <div class="icon-box" data-aos="zoom-in" data-aos-delay="300">
              <div class="icon"><i class="fas fa-mug-hot"></i></div>
              <h4 class="title"><a href="">How We Work</a></h4>
              <p class="description">Our strategy is to work with various stakeholders like residential communities, government bodies, Corporates, Foundations, NGO partners and other entrepreneurs to implement our programs focused on segregation of waste at source and ensuring each stream of waste goes to the appropriate destination.</p>
            </div>

          </div>
        </div>

      </div>
    </section>
    <!-- End About Section -->


   <!-- Team-->
   <section class="team-section mt-5"  id="team">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Our Amazing Team</h2>
            <h3 class="section-subheading text-muted">Meet the founders of this great team.</h3>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="team-member box">
                  <div class="img-box">
                    <img src="Images/team1.jpeg" alt="">
                  </div>
                  <div class="content">
                    <h4 class="text-dark">Lavleen Jain</h4>
                    <p class="text-muted">Lorem ipsum dolor sit amet consectetur,
                      adipisicing elit. Rerum, tempora!</p>
                     </div>
                      </div>
            </div>
            <!--  -->
            <div class="col-lg-4">
              <div class="team-member box">
                <div class="img-box">
                  <img src="Images/team2.jpeg" alt="">
                </div>
                <div class="content">
                  <h4 class="text-dark">Mayur Pawar</h4>
                  <p class="text-muted">Mayur is a spiritually-rooted coach and trainer with more than 4 years experience working in social and economic justice movements.</p>
                  </div>
                </div>
          </div>
          <!--  -->
          <div class="col-lg-4">
            <div class="team-member box">
              <div class="img-box">
                <img src="Images/team3.jpeg" alt="">
              </div>
              <div class="content">
                <h4 class="text-color">Vikas Prajapati</h4>
                <p class="text-muted">Vikas is a progressive political activist who has spent his life working with cutting edge NGOs that are about creating social change.</p>
                </div>
              </div>
        </div>
        <!--  -->
       </div>
    </div>
</section>
<!--End of Team Section-->
<!--Blog Section-->
<section class="page-section mt-5"  id="blog">
  <div class="container">
      <div class="text-center">
          <h2 class="section-heading text-uppercase">Latest Blogs</h2>
          <h3 class="section-subheading text-muted">Give your thoughts on saving Environment.</h3>
      </div>
      <div class="row">
        <div class="col-12 col-lg-4">
          <div class="card mb-4 shadow color">
            <div class="card-body ">
              <img src="Images/about3.jpg" class="card-img-top">
              <div class="ribbon text font-weight-bold">Why India’s E-waste Should Worry Us</div>
              <article>
                <header class="mb-2">
                   <div class="font-weight-bold">Nischita Verrendra</div>
                  <div class="small">Posted on: <time datetime="2017-03-12T10:24">Oct 10, 2020 at 01:44 PM</time></div>
                 </header>
                <p>October 14th is International E-waste Day. In the last five years the world has witnessed a staggering 21% rise in e-waste generation. India is the third largest producer of e-waste globally with China and US topping the list.</p>
                <a href="https://www.greenpeace.org/india/en/story/10543/why-indias-e-waste-should-worry-us/" class="btn btn-color">Read more</a>
              </article>
            </div>
          </div>
        </div>
        <!---End of card-->
        <div class="col-12 col-lg-4">
          <div class="card mb-4 shadow color">
            <div class="card-body ">
              <img src="Images/about4.jpg" class="card-img-top">
              <div class="ribbon text font-weight-bold">Go organic, to improve Indian Economy</div>
              <article>
                <header class="mb-2">
                   <div class="font-weight-bold">Paras Yadav</div>
                  <div class="small">Posted on: <time datetime="2017-03-12T10:24">july 30, 2020 at 01:44 PM</time></div>
                 </header>
                <p>Consultation on sustainable agro-economy and improving soil health was co-organised by Care For India, Mahila Shramjeebee Mancha, Odisha, and Odisha Shramjeebee Mancha on Tuesday. The discussion aimed to sensitise stakeholders especially...</p>
                <a href="https://www.greenpeace.org/india/en/story/4542/go-organic-to-improve-indian-economy/" class="btn btn-color">Read more</a>
              </article>
            </div>
          </div>
        </div>
        <!---End of card-->
        <div class="col-12 col-lg-4">
          <div class="card mb-4 shadow color">
            <div class="card-body ">
              <img src="Images/about1.jpg" class="card-img-top">
              <div class="ribbon text font-weight-bold">Government must deal with plague</div>
              <article>
                <header class="mb-2">
                   <div class="font-weight-bold">Greenpeace India</div>
                  <div class="small">Posted on: <time datetime="2017-03-12T10:24">june 2, 2020 at 01:44 PM</time></div>
                 </header>
                <p>To minimize the environmental costs of locust control, non pesticidal measures must be prioritised</p>
                <a href="https://www.greenpeace.org/india/en/story/9821/government-must-deal-with-locust-plague-as-a-priority/" class="btn btn-color">Read more</a>
              </article>
            </div>
          </div>
        </div>
        <!---End of card-->
      </div>
      </section>
<!--end of Blog Section-->


 <!-- Project Modals-->
 <!-- Modal 1-->
 <div class="project-modal modal fade"
 id="projectModal1" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <i class="fas fa-window-close"></i>
            </div>
          <div class="container">
              <div class="row justify-content-center">
                  <div class="col-lg-8">
                      <div class="modal-body">
              <!-- Project Details Go Here-->
                <h2 class="text-uppercase">Protect Lions</h2>
               <p class="item-intro text-muted">Protecting Asiatic lions in the Gir Forest</p>

             <img class="img-fluid d-block mx-auto" src="Images/porj1.jpg" alt="lion" />
           <p>'Care For' is working ALRP.The Asiatic Lion Reintroduction Project is an initiative of the Indian Government to provide safeguards to the Asiatic lion from extinction in the wild by means of reintroduction. 'Care For 'is a comprehensive program supporting on-the-ground conservation projects, education and a global public awareness campaign about all the big cats. </p>
         <ul class="list-inline">
                              <li>Date: Oct 2020</li>
                              <li>Category: Save Big Cats</li>
                          </ul>
                          <button class="btn btn-danger"
                          data-dismiss="modal" type="button">
                          <i class="fas fa-times mr-1"></i>Close Project</button>
                          <!-- details end  -->
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
<!-- Modal 2-->
<div class="project-modal modal fade"
id="projectModal2" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <i class="fas fa-window-close"></i></div>
          <div class="container">
              <div class="row justify-content-center">
                  <div class="col-lg-8">
                      <div class="modal-body">
                          <!-- Project Details Go Here-->
                          <h2 class="text-uppercase">Blackbucks</h2>
                <p class="item-intro text-muted">Collaborations to save Agra blackbucks</p>
             <img  src="Images/porj2.jpg" class="img-fluid d-block mx-auto"alt="" />
                <p>The Archaeological Survey of India (ASI) with support from Uttar Pradesh forest department and our NGO 'Care For' on Saturday launched a research project to study and translocate wild jackals from Akbar's Tomb area in Agra to save blackbucks.</p>
                           <ul class="list-inline">
                              <li>Date: Nov 2020</li>
                               <li>Category: Extincting Animals</li>
                          </ul>
         <button class="btn btn-danger" data-dismiss="modal" type="button">
           <i class="fas fa-times mr-1"></i>Close Project</button>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
<!-- Modal 3-->
<div class="project-modal modal fade" id="projectModal3"
tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <i class="fas fa-window-close"></i>
          </div>
          <div class="container">
              <div class="row justify-content-center">
                  <div class="col-lg-8">
                      <div class="modal-body">
                 <!-- Project Details Go Here-->
                <h2 class="text-uppercase">Stop Air Pollution</h2>
             <p class="item-intro text-muted">Our initiative to overcome air pollution.</p>
             <img src="Images/porj3.jpg" class="img-fluid d-block mx-auto" alt="" />
                          <p>The fight for the right to clean air is behind the goal of our NGO: CARE FOR organization that believes in standards in order for people to breathe pure air, a right, not a luxury. The NGO aims at changing the fact by helping impacted communities and ensuring that the Clear Air Act is upheld on every point, including the reduction of industrial pollution.</p>
                          <ul class="list-inline">
                              <li>Date: May 2020</li>
                              <li>Category: Air pollution</li>
                          </ul>
                          <button class="btn btn-danger" data-dismiss="modal" type="button"><i class="fas fa-times mr-1"></i>Close Project</button>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
<!-- Modal 4-->
<div class="project-modal modal fade"
id="projectModal4" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <i class="fas fa-window-close"></i>
          </div>
          <div class="container">
              <div class="row justify-content-center">
                  <div class="col-lg-8">
                   <div class="modal-body">
                    <!-- Project Details Go Here-->
                 <h2 class="text-uppercase">Farmers are the god</h2>
                <p class="item-intro text-muted">our initiative to help farmer.</p>
             <img src="images/porj4.jpg"class="img-fluid d-block mx-auto" alt="" />
                          <p>'Care For' aims to create and restore small scale-water resources and micro-irrigation structures by building community-based management institutions that help farmers in India. This will help mitigate climate change and assure a sustainable source of income from farming. You can donate to Care For and support sustainable agriculture and improve the plight of farmers in India.
                          </p>
                          <ul class="list-inline">
                              <li>Date: May 2020</li>
                               <li>Category: Farming</li>
                          </ul>
                          <button class="btn btn-danger" data-dismiss="modal" type="button"><i class="fas fa-times mr-1"></i>Close Project</button>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
<!-- Modal 5-->
<div class="project-modal modal fade" id="projectModal5"
tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <i class="fas fa-window-close"></i>
          </div>
          <div class="container">
              <div class="row justify-content-center">
                  <div class="col-lg-8">
                      <div class="modal-body">
                          <!-- Project Details Go Here-->
                          <h2 class="text-uppercase">Our Friend Sparrow</h2>
           <p class="item-intro text-muted">Project to save out sparrow a noble initiative.</p>
       <img  src="Images/porj5.jpg"class="img-fluid d-block mx-auto" alt="">
                          <p>Every animal and plant in this world has its significance. The sparrow is a member of many food chain and food web. So as you know if you harm any food chain it will affect complete food web. So if you will not save sparrow it will disturb ecological balance.
                            It is our duty to save this small, lovable, beautiful and harmless bird for environment and for ourselves.
                          </p>
                          <ul class="list-inline">
                              <li>Date: Jan 2020</li>
                             <li>Category: Birds</li>
                          </ul>
                          <button class="btn btn-danger" data-dismiss="modal" type="button"><i class="fas fa-times mr-1"></i>Close Project</button>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
<!-- Modal 6-->
<div class="project-modal modal fade" id="projectModal6"
tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <i class="fas fa-window-close"></i>
          </div>
          <div class="container">
              <div class="row justify-content-center">
                  <div class="col-lg-8">
                      <div class="modal-body">
                          <!-- Project Details Go Here-->
                          <h2 class="text-uppercase">Go Green Kids</h2>
           <p class="item-intro text-muted">Tree plantation initiative.</p>
       <img  src="Images/porj6.jpg"class="img-fluid d-block mx-auto" alt="">
                          <p>This organisation organises tree plantation activities and inculcates the sense of responsibility among the young students across Maharashtra. The name of this program is ‘Go Green Kids.’ They provide free saplings in schools and let the students plant and take care of those saplings. Also, they regularly check up to see how the trees are and surprisingly have a 95 percent survival rate so far. Taking it ahead, they are now planning to expand their operations to schools across India. </p>
                          <ul class="list-inline">
                              <li>Date: May 2020</li>
                             <li>Category: plantation</li>
                          </ul>
                          <button class="btn btn-danger" data-dismiss="modal" type="button"><i class="fas fa-times mr-1"></i>Close Project</button>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>

<!-- End of modal part -->

<!--Footer Section-->
<!-- Signup-->
<section class="signup-section mt-5" id="signup">
  <div class="container">
      <div class="row">
          <div class="col-md-10 col-lg-8 mx-auto text-center">
         <h2 class="text-dark mb-5">Subscribe to receive updates!</h2>
              <form class="form-inline d-flex">
              <input class="form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-0"
               id="inputEmail" type="email" placeholder="Enter email address...">
               <button class="btn btn-danger mx-auto" type="submit">
                 Subscribe</button>
                </form>
          </div>
      </div>
  </div>
</section>
<!-- ======= Contact Section ======= -->
<section id="contact" class="contact mt-5">
  <div class="container">
    <div class="text-center">
      <h2 class="section-heading text-uppercase">Contact</h2>
      <h3 class="section-subheading text-muted">Be the part of the team. Be helpfull.</h3>
  </div>

    <div class="row">

      <div class="col-lg-6">
        <div class="row">
          <div class="col-lg-6 info">
            <i class="fas fa-map"></i>
            <h4>Address</h4>
            <p>Goadbander road,<br>Thane, SP 456879</p>
          </div>
          <div class="col-lg-6 info">
            <i class="fas fa-phone"></i>
            <h4>Call Us</h4>
            <p>+91 9888452465<br>+91 7028325114</p>
          </div>
          <div class="col-lg-6 info">
            <i class="fas fa-envelope"></i>
            <h4>Email Us</h4>
            <p>CareFor@Join.com<br>DonateCareFor@gmail.com</p>
          </div>
          <div class="col-lg-6 info">
            <i class="fas fa-clock"></i>
            <h4>Working Hours</h4>
            <p>Mon - Fri: 9AM to 5PM<br>Sunday: 9AM to 1PM</p>
          </div>
        </div>
      </div>
        <div class="col-lg-6">
        <form>
          <div class="form-group">
            <input placeholder="Your Name" type="text" name="name"
            class="form-control">
             </div>
          <div class="form-group">
            <input placeholder="Your Email" type="email" class="form-control"
             name="email">
              </div>
          <div class="form-group">
            <input placeholder="Subject" type="text" class="form-control"
            name="subject">
            </div>
          <div class="form-group">
            <textarea placeholder="Message" class="form-control"
            name="message" rows="5"></textarea>
            <div class="validate"></div>
          </div>
            <div class="text-center">
              <button type="submit"
              class="btn btn-danger rounded-cor">Send Message</button>
            </div>
        </form>
      </div>
    </div>
  </div>
</section>
<!-- End Contact Section -->
 <!-- ======= Footer ======= -->
 <footer class="mt-5" id="footer">
    <div class="container d-md-flex py-4">
    <div class="mr-md-auto text-center text-md-left">
      <div class="copyright">
        &copy; Copyright <strong><span>Care For</span></strong>. All Rights Reserved
      </div>
       </div>
    <div class="social-links text-center text-md-right pt-3 pt-md-0">
      <ul class="social">
        <li class="list-item">
          <a class="list-link" href="#">
            <i class="fab fa-facebook"></i>
          </a>
        </li>
        <li class="list-item">
          <a class="list-link" href="#">
            <i class="fab fa-twitter"></i>
          </a>
        </li>
        <li class="list-item">
          <a class="list-link" href="#">
            <i class="fab fa-instagram"></i>
          </a>
        </li>
        <li class="list-item">
          <a class="list-link" href="#">
            <i class="fab fa-linkedin"></i>
          </a>
        </li>
      </ul>
     </div>
  </div>
</footer><!-- End Footer -->













    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>
