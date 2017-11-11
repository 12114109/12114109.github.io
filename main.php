
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
        <h2 class="text-center">Popularna predavanja</h2>
        <hr class="star-primary">
        <div class="row">
         

            <?php
            require ("db_config.php");
            $query_popular_category = "SELECT DISTINCT(name),id_category,logo FROM category LIMIT 6 ";

            $result_popular_category = mysqli_query($connection,$query_popular_category);

            if(!$result_popular_category)
            {
              echo "<h4>DB error, please try again later</h4>";
            }
            else
            {
              foreach ($result_popular_category as $row) {
                
                $id_category = $row['id_category'];
                $category_name = $row['name'];
                $category_logo = $row['logo'];
                if($category_logo=="")
                {
                  $category_logo = "img/category_logo/default.jpg";
                }


                echo '

                 <div class="col-sm-4 portfolio-item">
                <a class="portfolio-link" href="?lessions.php?category='.$id_category.'">
              <div class="caption">
                <div class="caption-content">
                  <h5 style="clear-text">'.$category_name.'</h5>
                  <i class="fa fa-code fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="'.$category_logo.'" alt="">
            </a>
                </div>


                ';



              }
            }


            ?>
            


      
        </div>
        <div class="text-center">
        <a href="index?link=lessions" class="mx-auto text-center btn btn-primary btn-block btn-lg">Pogledaj sva predavanja</a>
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
                 <label for="username_login">Email adresa</label>
                 <input name="username" required type="text" class="form-control" id="email_login" aria-describedby="emailHelp" placeholder="Unesite korisničko ime">
                </div>
                <div class="form-group">
                    <label for="password_login">Šifra</label>
                    <input name="password" required type="password" class="form-control" id="password_login" placeholder="Unesite šifru">
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
                    <form action="index.php?link=register" method="POST">
                    <div class="form-group">
                    <label for="type_register">Izaberite grupu za registraciju</label>
                    <select name="type" required onchange="ChooseForm()" id="type_register" class="form-control")>
                      <option value="">Izaberite iz liste</option>
                      <option value="attendant">Regularan korisnik</option>
                      <option value="instructor">Predavač</option>
                      <option value="company">Kompanija</option>
                    </select>
                  </div>

                        <!-- Regular user -->
                <div id="regular_user_data" style="display: none;">

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
                    <input name="password_twice" required type="password" class="form-control" id="password_register" placeholder="Ponovite šifru">
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
                    <label for="status_register">Izaberite vaše zanimanje</label>
                    <select name="status" required  id="status_register" class="form-control")>
                      <option value="">Izaberite iz liste</option>
                      <option value="student">Student</option>
                      <option value="employed">Zaposlen</option>
                      <option value="unemployed">Nezaposlen</option>
                    </select>
                  </div>
                  <div class="form-group">
                <label for="description_register">Napišite nešto o sebi:</label>
                  <textarea name="description" class="form-control" rows="5" id="description_register"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Registruj se</button>
                <button type="reset" class="btn btn-secondary">Resetuj</button>
            </form>
              </div>

            <!-- Regular user -->
<!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

            <!-- Instructor user -->

               <div id="instructor_user_data" style="display: none;" disabled="disabled">
                <form action="index.php?link=register" method="POST">
                    <input type="hidden" name="type" value="instructor">
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
                    <input name="password_twice" required type="password" class="form-control" id="password_register" placeholder="Ponovite šifru">
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
                    <label for="company_register">Izaberite kompaniju u kojoj ste zaposleni</label>
                    <select name="company" required  id="company_register" class="form-control")>
                      <option selected="" value="">Izaberite iz liste</option>
                  <?php
                            require "db_config.php";
                            $query = "SELECT id_company,name FROM company WHERE active=1";
                            $result = mysqli_query($connection, $query);

                            if (!$result)
                            {
                            echo '<option>DB error</option>';
                            }
                            else
                            {
                            foreach ($result as $row)
                            {
                            $rowid = $row['id_company'];
                            $rowname = $row['name'];
                            echo "<option value='".$rowid."'>".$rowname."</option>";

                            }
                            }

                    ?>


                    </select>
                </div>
                  <div class="form-group">
                <label for="description_register">Napišite nešto o sebi:</label>
                  <textarea name="description" class="form-control" rows="5" id="description_register"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Registruj se</button>
                <button type="reset" class="btn btn-secondary">Resetuj</button>
             </form>
               </div>


            <!-- Instructor user -->


            <!-- ///////////////////////////////////////////////////////////////////////////////////////////////// -->

            <!-- Company user -->


            <div id="company_user_data" style="display: none;" disabled="disabled">
                <form action="index.php?link=register" method="POST">
                    <input type="hidden" name="type" value="company">
                <div class="form-group">
                    <label for="username_register">Korisničko ime</label>
                    <input name="username" required type="text" class="form-control" id="username_register" placeholder="Unesite korisničko ime kompanije">
                </div>

                <div class="form-group">
                    <label for="password_register">Šifra</label>
                    <input name="password_once" required type="password" class="form-control" id="password_register" placeholder="Unesite šifru">
                </div>

                <div class="form-group">
                    <label for="password_register">Ponovite šifru</label>
                    <input name="password_twice" required type="password" class="form-control" id="password_register" placeholder="Ponovite šifru">
                </div>


                <div class="form-group">
                 <label for="email_register">Email adresa</label>
                 <input name="email" required type="email" class="form-control" id="email_register" aria-describedby="emailHelp" placeholder="Unesite email adresu kompanije">
                </div>

                <div class="form-group">
                    <label for="firstname_register">Naziv kompanije</label>
                    <input name="firstname" required type="text" class="form-control" id="firstname_register" placeholder="Unesite ime kompanije">
                </div>

                  <div class="form-group">
                <label for="description_register">Napišite nešto o kompaniji:</label>
                  <textarea name="description" class="form-control" rows="5" id="description_register"></textarea>
                </div>
                      <button type="submit" class="btn btn-primary">Registruj se</button>
                <button type="reset" class="btn btn-secondary">Resetuj</button>
          </form>
            </div>



            <!-- Company user -->



          
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
    