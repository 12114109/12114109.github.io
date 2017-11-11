
    <!-- Header -->
    <header>
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <img class="d-block img-fluid" src="./img/carousel/macbook.jpg" alt="First slide">
      <div class="carousel-caption d-none d-md-block">
        <h3 class = "clear-text" >Nauči novu tehnologiju</h3>
        <p class = "clear-text" >Prekvalifikuj se ili unapredi svoje trenutno znanje</p>
  </div>
    </div>
    <div class="carousel-item">
      <img class="d-block img-fluid" src="./img/carousel/happy.jpg" alt="Second slide">
      <div class="carousel-caption d-none d-md-block">
        <h3 class = "clear-text" >Nikada lakše do posla iz snova</h3>
        <p class = "clear-text" >Skupljaj bodove, prisustvuj predavanjima i zaposli se</p>
  </div>
    </div>
    <div class="carousel-item">
      <img class="d-block img-fluid" src="./img/carousel/screen.jpg" alt="Third slide">
      <div class="carousel-caption d-none d-md-block">
        <h3 class = "clear-text">Razni kursevi i predavanja vezani za najpopularnije tehnologije</h3>
        <p class = "clear-text" >C++, C#, PHP, Javacript i još mnogo toga </p>
  </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Predhodna</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Sledeća</span>
  </a>
</div>
    </header>

    <!-- Portfolio Grid Section -->
    <section id="portfolio">
      <div class="container">
        <h2 class="text-center">Popularni kursevi</h2>
        <hr class="star-primary">
        <div class="row">
          <div class="col-sm-4 portfolio-item">
            <a class="portfolio-link" href="#portfolioModal1" data-toggle="modal">
              <div class="caption">
                <div class="caption-content">
                  <i class="fa fa-search-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/cabin.png" alt="">
            </a>
          </div>
          <div class="col-sm-4 portfolio-item">
            <a class="portfolio-link" href="#portfolioModal2" data-toggle="modal">
              <div class="caption">
                <div class="caption-content">
                  <i class="fa fa-search-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/cake.png" alt="">
            </a>
          </div>
          <div class="col-sm-4 portfolio-item">
            <a class="portfolio-link" href="#portfolioModal3" data-toggle="modal">
              <div class="caption">
                <div class="caption-content">
                  <i class="fa fa-search-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/circus.png" alt="">
            </a>
          </div>
          <div class="col-sm-4 portfolio-item">
            <a class="portfolio-link" href="#portfolioModal4" data-toggle="modal">
              <div class="caption">
                <div class="caption-content">
                  <i class="fa fa-search-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/game.png" alt="">
            </a>
          </div>
          <div class="col-sm-4 portfolio-item">
            <a class="portfolio-link" href="#portfolioModal5" data-toggle="modal">
              <div class="caption">
                <div class="caption-content">
                  <i class="fa fa-search-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/safe.png" alt="">
            </a>
          </div>
          <div class="col-sm-4 portfolio-item">
            <a class="portfolio-link" href="#portfolioModal6" data-toggle="modal">
              <div class="caption">
                <div class="caption-content">
                  <i class="fa fa-search-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/submarine.png" alt="">
            </a>
          </div>
        </div>
        <div class="text-center">
        <h5 class="mx-auto text-center btn btn-info btn-block btn-lg">Pogledaj sve kurseve</h5>
      </div>
      </div>
    </section>

    <!-- About Section -->
    <section class="success" id="about">
      <div class="container">
        <h2 class="text-center">O nama</h2>
        <hr class="star-light">
        <div class="row">
          <div class="col-lg-4 ml-auto">
            <p>Ovaj projekat je osmišljen u svrhe bolje organizacije i kontrole predavanja, kao i lakšeg pronalaženja perspektivnih ljudi koji slušaju kurseve.   </p>
          </div>
          <div class="col-lg-4 mr-auto">
            <p>Slušaj kurseve, pokaži zanje i želju za učenjem i napredkom i čekaj da ti se vodeće IT kompanije jave sa poslovnom ponudom!</p>
          </div>
         
          <div class="col-lg-8 mx-auto text-center">
          <hr class="star-light">
            <h5 class="">Sve to potpuno besplatno!</h5>
          </div>
        </div>
      </div>
    </section>

    <!-- Contact Section -->
    <section id="contact">
      <div class="container">
        <h2 class="text-center">Kontaktiraj nas</h2>
        <hr class="star-primary">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
            <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
            <form name="sentMessage" id="contactForm">
              <div class="control-group">
                <div class="form-group floating-label-form-group controls">
                  <label>Ime</label>
                  <input class="form-control" id="name" type="text" placeholder="Ime" required data-validation-required-message="Unesite ime.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls">
                  <label>Email adresa</label>
                  <input class="form-control" id="email" type="email" placeholder="Email" required data-validation-required-message="Unesite email adresu.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls">
                  <label>Broj telefona</label>
                  <input class="form-control" id="phone" type="tel" placeholder="Telefon" required data-validation-required-message="Unesite broj telefona.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls">
                  <label>Poruka</label>
                  <textarea class="form-control" id="message" rows="5" placeholder="Poruka" required data-validation-required-message="Unesite sadržaj poruke."></textarea>
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <br>
              <div id="success"></div>
              <div class="form-group">
                <button type="submit" class="btn btn-success btn-lg" id="sendMessageButton">Pošalji</button>
                <button type="reset" class="btn btn-danger btn-lg" id="resetMessageButton">Resetuj</button>

              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer class="text-center">
      <div class="footer-above">
        <div class="container">
          <div class="row">
            <div class="footer-col col-md-4">
              <h3>Lokacija</h3>
              <p>Korzo 1
                <br>Subotica, Srbija</p>
            </div>
            <div class="footer-col col-md-4">
              <h3>Potražite nas na društvenim mrežama</h3>
              <ul class="list-inline">
                <li class="list-inline-item">
                  <a class="btn-social btn-outline" href="#">
                    <i class="fa fa-fw fa-facebook"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a class="btn-social btn-outline" href="#">
                    <i class="fa fa-fw fa-google-plus"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a class="btn-social btn-outline" href="#">
                    <i class="fa fa-fw fa-twitter"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a class="btn-social btn-outline" href="#">
                    <i class="fa fa-fw fa-linkedin"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a class="btn-social btn-outline" href="#">
                    <i class="fa fa-fw fa-dribbble"></i>
                  </a>
                </li>
              </ul>
            </div>
            <div class="footer-col col-md-4">
              <h3>Članovi razvojnog tima</h3>
                  <p>Branko Ilić</p>
                  <p>Zoran Popić</p>
                  <p>Nenad Vukanović</p>
                  <p>Aleksandar Mamužić</p>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-below">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              Copyright &copy; CodeWarriors 2017
            </div>
          </div>
        </div>
      </div>
    </footer>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top d-lg-none">
      <a class="btn btn-primary js-scroll-trigger" href="#page-top">
        <i class="fa fa-chevron-up"></i>
      </a>
    </div>

    <!-- Login Modal -->
    <div class="portfolio-modal modal fade" id="loginmodal" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <h2>Prijava</h2>
                  <hr class="star-primary">
                   <?php
                   if(!isset($_SESSION))
                   {
                   ?>
                    <!-- IF USER IS NOT LOGED IN -->
                    <form action="login.php" method="POST">
                    <div class="form-group">
                    <label for="type_login">Izaberite grupu za prijavu</label>
                    <select required id="type_login" class="form-control">
                      <option value=""><mute>Izaberite iz liste</mute></option>
                      <option value="attendant">Regularan korisnik</option>
                      <option value="instructor">Instruktor</option>
                      <option value="company">Kompanija</option>
                    </select>
                  </div>
                <div class="form-group">
                 <label for="email_login">Email adresa</label>
                 <input name="email" required type="email" class="form-control" id="email_login" aria-describedby="emailHelp" placeholder="Unesite email adresu">
                </div>
                <div class="form-group">
                    <label for="password_login">Šifra</label>
                    <input name="password" required type="password" class="form-control" id="password_login" placeholder="Unesite šifru">
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                    <input name="save_session" type="checkbox" class="form-check-input">
                    Zapamti me
                    </label>
                </div>
                <button type="submit" class="btn btn-primary">Prijavi se</button>
                <button type="submit" class="btn btn-secondary">Resetuj</button>
                </form>

                   <?php 
                     } 
                   ?>
                   <br>
                   <br>
                   <br>
                  <button class="btn btn-success" type="button" data-dismiss="modal">
                    <i class="fa fa-times"></i>
                    Otkaži prijavu</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <!-- Registration Modal -->
    <div class="portfolio-modal modal fade" id="registrationmodal" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <h2>Registracija</h2>
                  <hr class="star-primary">
                   <?php
                   if(!isset($_SESSION))
                   {
                   ?>
                    <!-- IF USER IS NOT LOGED IN AND REGISTERED-->
                    <form action="register.php" method="POST">
                    <div class="form-group">
                    <label for="type_register">Izaberite grupu za registraciju</label>
                    <select name="type" required id="type_register" class="form-control")>
                      <option value="">Izaberite iz liste</option>
                      <option value="attendant">Regularan korisnik</option>
                      <option value="instructor">Instruktor</option>
                      <option value="company">Kompanija</option>
                    </select>
                  </div>


                        <!-- Regular user -->
                <div class="form-group">
                    <label for="username_register">Korisničko ime</label>
                    <input name="username" required type="text" class="form-control" id="username_register" placeholder="Unesite korisničko ime">
                </div>

                <div class="form-group">
                    <label for="password_register">Šifra</label>
                    <input name="password_once" required type="password" class="form-control" id="password_register" placeholder="Unesite šifru">
                </div>

                <div class="form-group">
                    <label for="password_register">Ponovite šifru</label>
                    <input name="passwor_twice" required type="password" class="form-control" id="password_register" placeholder="Ponovite šifru">
                </div>


                <div class="form-group">
                 <label for="email_register">Email adresa</label>
                 <input name="email" required type="email" class="form-control" id="email_register" aria-describedby="emailHelp" placeholder="Unesite email adresu">
                </div>


                
                <div class="form-group">
                    <label for="firstname_register">Ime</label>
                    <input name="firstname" required type="text" class="form-control" id="firstname_register" placeholder="Unesite ime">
                </div>

                <div class="form-group">
                    <label for="lastname_register">Prezime</label>
                    <input name="lastname" required type="text" class="form-control" id="lastname_register" placeholder="Unesite prezime">
                </div>

                <div class="form-group">
                    <label for="birthday_register">Izaberite datum rođenja</label>
                    <input name="birthday" required type="date" class="form-control" id="birthday_register" placeholder="Izaberite datum rođenja">
                </div>
            <!-- Regular user -->

                <button type="submit" class="btn btn-primary">Registruj se</button>
                <button type="submit" class="btn btn-secondary">Resetuj</button>
                </form>

                   <?php 
                     } 
                   ?>
                   <br>
                   <br>
                   <br>
                  <button class="btn btn-success" type="button" data-dismiss="modal">
                    <i class="fa fa-times"></i>
                    Otkaži registraciju</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    