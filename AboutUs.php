<?php 
  require_once("pfe_template/pages/DAO.php");
  require_once("pfe_template/pages/Association.php");
  require_once('pfe_template/pages/sponsors.php');
  require_once('pfe_template/pages/Collaborateurs.php');
  $dao = new DAO();


  $associations = Association::listeAssociations();
  $nb_colabs = Collaborateurs::getNbCollaborateurs();
  $nb_sponsors = Sponsors::getNbSponsor();

  $demandes = $dao->getPDO()->query("SELECT COUNT(*) FROM demande")->fetchColumn();

  $id_association = $_GET['id_association'];
  if (isset($_GET['id_association']) && is_numeric($_GET['id_association'])) {
    $id_association = htmlspecialchars($_GET['id_association']);
  } else {
      exit();
  }
  
  $asso= $dao->getAssociation($id_association);


?>

<!DOCTYPE html>
<html lang="ar">
    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <!-- les icones -->
        <script src="https://kit.fontawesome.com/35d8d7bd24.js" crossorigin="anonymous"></script>
        
        <link rel="stylesheet" href="fonts/icomoon/style.css">

        <link rel="stylesheet" href="css/owl.carousel.min.css">

        <!-- le navbare -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
        <!-- animation des element CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!-- Swiper CSS -->
        <link rel="stylesheet" href="css/swiper-bundle.min.css">
        <!-- Style -->
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css.css">

        
        <title>HOME</title>

    </head>
    
    <body>
        <!-- l'entete -->
        <div class="entete">
            <div class="telephone">
              <?php 
                foreach($asso as $association){
                  echo "<i class='fas fa-phone'></i>+212 ".$association['NUM_TEL_MEMBRE'];
                  echo "<i class='fa-solid fa-envelope' style='margin-left: 20px;'></i>".$association['EMAIL_ASSOCIATION'];
                }
              ?>
            </div>
            <div class="media">
                <i class='fab fa-facebook'></i>
                <i class='fab fa-instagram'></i>
                <i class='fab fa-whatsapp'></i>
            </div>
        </div>
        <!-- /d'entete -->

        <!-- navbare -->
        <div class="site-mobile-menu">
            <div class="site-mobile-menu-header">
              <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
              </div>
            </div>
            <div class="site-mobile-menu-body"></div>
          </div>
          <header class="site-navbar" role="banner">
      
            <div class="container" style="direction: rtl;">
              <div class="row align-items-center">
                
                <div class="col-11 col-xl-2 logo">
                    <div class="col-11 col-xl-2 text-right">
                        <a href="index.php?id_association=<?php echo $association['ID_ASSOCIATION'] ?>" ><img src="images/logo.png" alt="logo" width="200" style="margin-top: 10px;"></a>
                    </div>
                </div>
                <div class="col-12 col-md-10 d-none d-xl-block" >
                  
                <nav class="site-navigation position-relative text-right" role="navigation">
                  <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block" style="text-align: left;">
                    <li class="active"><a href="index.php"><span>الرأيسية</span></a></li>
                    <li><a href="listings.php"><span>المهام</span></a></li>
                    <li><a href="about.php"><span>الاهداف</span></a></li>
                    <li class="has-children">
                      <a href="about.php"><span>الفروع</span></a>
                      <ul class="dropdown arrow-top">
                        <?php foreach ($associations as $association): ?>
                          <li><a href="index.php?id_association=<?php echo $association['ID_ASSOCIATION'] ?>"><?php echo $association['NOM_ASSOCIATION'] ?></a></li>
                        <?php endforeach; ?>
                      </ul>
                    </li>
                    <li><a href="contact.php"><span>تواصل معنا</span></a></li>
                  </ul>
                </nav>
                </div>
      
      
                <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>
      
                </div>


              </div>
            </div>
            
          </header>
            <div class="image-pages">
                <div class="overlay"></div>
                <img src="images/aboutus.jpg">
                <h1>تعرف علينا</h1>
            </div>
        <!-- /navbare -->


        <!-- man na7n -->
        <div class="block1-aboutus">
            <H1>من نحن؟</H1>
            <div class="p">
              <?php
                foreach($asso as $association){
                  $paragraphes = explode(".", $association['DEFINITION_ASSOCIATION']);
                  foreach ($paragraphes as $paragraphe) {
                    echo "<p>" . $paragraphe . ".</p><br>";
                  }
                }
              ?>
            </div>    
       </div>
        <!-- /man na7n -->

        <!-- la barre -->
        <div class="block4">
            <div class="stat stat1">
                <img src="images/labarre/charite.png" width="30%" style="margin-right: 0;">
                <div class="texts">
                    <p><?php echo"+". $nb_sponsors; ?></p>
                    <h1>المساهمين</h1>
                </div>
            </div>
            <div class="stat stat2" >
                <img src="images/labarre/charite1.png" width="30%" style="margin-right: 0;">
                <div class="texts">
                    <p><?php echo"+". $nb_colabs; ?></p>
                    <h1>شركاء التعاون</h1>
                </div>
            </div>
            <div class="stat stat3">
                <img src="images/labarre/charite2.png" width="30%" style="margin-right: 0;">
                <div class="texts">
                    <p><?php echo"+". $demandes; ?></p>
                    <h1>المستفيدين</h1>
                </div>
            </div>
        </div>
        <!-- /la barre -->
      

        <!--footer -->
        <footer>
            <div class="content-footer">
              <div class="left box" style="margin-right: 5%;">
                <div class="upper" >
                  <div class="topic">معلومات عنا</div>
                  <a href="AboutUs.php"><?php echo "<p>" . substr($association['DEFINITION_ASSOCIATION'], 0, 220) . " . . .  plus</p>";?></a>
                </p>
                </div>
                <div class="lower">
                  <div class="topic">اتصل بنا</div>
                  <div class="phone">
                    <a href="#" ><i class="fas fa-phone-volume"></i><?php echo "0" . $association['NUM_TEL_MEMBRE']; ?></a>
                  </div>
                  <div class="email">
                    <a href="#"><i class="fas fa-envelope"></i><?php echo $association['EMAIL_ASSOCIATION'] ?></a>
                  </div>
                </div>
              </div>
              <div class="middle box" style="margin-right: 5%;">
                <div class="topic">خدماتنا</div>
                <div><a href="#">الرأيسية</a></div>
                <div><a href="#">المهام</a></div>
                <div><a href="#">الاهداف</a></div>
                <div><a href="#">الفروع</a></div>
                <div><a href="#">تواصل معنا</a></div>
              </div>
              <div class="right box" style="display:flex;flex-direction:column;justify-content:center;text-align:center;">
                <a href="#" style="align-self:flex-start;"><img src="images/white_logo.png" width="60%"></a>
                <div class="admin">
                  <a href="/pfe_template/index.html" class="button-admin">التحكم</a>
                </div>
              </div>
              
            </div>
            <div class="bottom" style="text-align: center;margin-top: 3%;">
              <p>Copyright &#169; 2023 <a href="#">CodingLab</a> All rights reserved</p>
            </div>
       </footer>
        <!-- footer -->


        <!-- JAVASCRIPT -->
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.sticky.js"></script>
        <script src="js/main.js"></script>
        <script src="js/swiper.min.js"></script>
        <script src="js/jsfile.js"></script>

    </body>
</html>