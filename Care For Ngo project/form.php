<?php
session_start();
$firstname=isset($_POST["firstname"])? $_POST['firstname']:'';
$lastname=isset($_POST["lastname"])? $_POST['lastname']:'';
$emailid=isset($_POST["emailid"])? $_POST['emailid']:'';
$password=isset($_POST["password"])? $_POST['password']:'';
?>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<div class="Jumbotron">
    <div class="container" align="center">
      <h2>Donate Now !</h2>
<?php
if(isset($_GET['error'])==true){
    echo "<hr>";
    echo "<p class ='error text-danger'>Password Mismatch</p>";
  }
 ?>
      <h3>It's Quick And Easy!</h3>
      <form  action="form_action.php" method="post">
                    <div class="form-group row">
                        <label for="firstname" class="col-md-2 col-form-label">First Name</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" id="firstname" name="firstname" value="<?=htmlentities($firstname)?>" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="lastname" class="col-md-2 col-form-label">Last Name</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" id="lastname" name="lastname" value="<?=htmlentities($lastname)?>" required>
                        </div>
                    </div>
<!--                    <div class="form-group row">
                         <label for="telnum" class="col-12 col-md-2 col-form-label">Contact Tel.</label>
                         <div class="col-5 col-md-3">
                             <input type="tel" class="form-control" id="areacode" name="areacode" placeholder="Area code" required>
                         </div>
                         <div class="col-7 col-md-7">
                             <input type="tel" class="form-control" id="telnum" name="telnum" placeholder="Tel. number" required>
                         </div>
                     </div>
-->
                     <div class="form-group row">
                         <label for="emailid" class="col-md-2 col-form-label">Email</label>
                         <div class="col-md-10">
                             <input type="email" class="form-control" id="emailid" name="emailid" value="<?=htmlentities($emailid)?>" required>
                         </div>
                     </div>
                     <div class="form-group row">
                         <label for="pass" class="col-md-2 col-form-label">Password</label>
                         <div class="col-md-10">
                             <input type="password" class="form-control" id="pass" name="password" value="" required>
                         </div>
                     </div>
                     <div class="form-group row">
                         <label for="confirmpass" class="col-md-2 col-form-label">Confirm Password</label>
                         <div class="col-md-10">
                             <input type="password" class="form-control" id="confirmpass" name="confirmpass" value="" required>
                         </div>
                     </div>
                     <div class="form-group row">
                        <div class="col-md-6 offset-md-2">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" name="approve" id="approve" value="">
                                <label class="form-check-label" for="approve">
                                    <strong>May we contact you?</strong>
                                </label>
                            </div>
                        </div>
                        <div class="col-md-3 offset-md-1">
                            <select class="form-control">
                                <option>Tel.</option>
                                <option>Email</option>
                            </select>
                        </div>
                    </div>
                     <div class="form-group row">
                       <label for="gender" class="col-md-2 col-form-label">Gender</label>
                       <div class="col-md-10">
                         <label>Male</label>
                         <input type="radio" name="gender" value="Male" required>
                         <label>Female</label>
                         <input type="radio" name="gender" value="Female" required>
                       </div>
                      </div>
                      <div class="form-group row">
                          <div class="offset-md-2 col-md-10">
                              <button type="submit" class="btn btn-success">Submit</button>
                              <button type="reset" class="btn btn-danger">Reset</button>
                              <input  type="button" class="btn btn-secondary"onclick="location.href='form.php';return false;"value="Cancel">
                          </div>
                      </div>
<!--
                 <input type="button"onclick="location.href="form.php";return false;"value="Cancel">
                 in this the location attibrute ,the file should be in the same folder htdocs/wdl
-->
        </form>
</div>
</div>

<div class="Jumbotron">
  <div class="container">
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
</div>
</div>
</body>
</html>
