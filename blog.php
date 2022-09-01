<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
   
    <header>
        <img class="logo" src="images/logo.png" alt="logo">
        <nav>
            <ul class="navbarre">
                <li> <a href="index.html">Acceuil</a></li>
                <li> <a href="index2.html">A propos de nous</a></li>
                <li> <a href="index3.html">Nos services</a></li>

            </ul>
        </nav>
        <a class="contact" href="contact"><button>Contact</button></a>


    </header>
    <!-- End Menu for all pages -->
    <div class="container">
        <header class="topbar">
            <div class="left">
                <a href="#Posts">All Posts</a>
                <a href="#Scolaire">Formation Scolaire</a>
                <a href="#Formation">Formation</a>
            </div>
            <div class="right">
                <i class="fa-solid fa-magnifying-glass"></i>
                <button><a href="#">sign in / sign up</a></button>
            </div>
        </header>
        <!--======================================Articles for blog page===================================-->
        <section class="articles" id="Posts">
            <div class="left">
                <img src="assets/blogimg3.png ">
            </div>
            <div class="right">
                <div class="head">
                    <div class="logo">
                        <img src="assets/photo2.png " alt="">
                    </div>
                    <div class="desc_logo">
                        <span>Odjouman Allagbe</span><br>
                        <span>18 mars 2020</span>
                        <span> 3 Min de lecture</span>
                    </div>
                </div>
                <div class="description">
                    <h1>Coup de projecteur sur le <br> parcours entrepreneuriat de <br> la Formation Solaire à Energy <br> Generation</h1>
                    <p class="desc_right">Parce que le solaire représente une véritable <br> opportunité de création d'emplois pour les jeunes,<br> tout en participant au développement...</p>
                </div>
                <div class="foot">
                    <div class="left_foot">
                        <div class="vues">222 vues</div>
                        <div class="commentaires">0 commentaire</div>
                    </div>
                    <div class="right_foot">
                        <div class="love"><i class="fa-regular fa-heart"></i></div>
                        <div class="nombre_love">40</div>
                    </div>
                </div>
            </div>
        </section><br><br>

        <section class="articles">
            <div class="left">
                <img src="assets/blogimg2.png  ">
            </div>
            <div class="right">
                <div class="head">
                    <div class="logo">
                        <img src="assets/photo2.png " alt="">
                    </div>
                    <div class="desc_logo">
                        <span>Odjouman Allagbe</span><br>
                        <span>18 mars 2020</span>
                        <span> 3 Min de lecture</span>
                    </div>
                </div>
                <div class="description">
                    <h1>Coup de projecteur sur le <br> parcours entrepreneuriat de <br> la Formation Solaire à Energy <br> Generation</h1>
                    <p class="desc_right">Parce que le solaire représente une véritable <br> opportunité de création d'emplois pour les jeunes,<br> tout en participant au développement...</p>
                </div>
                <div class="foot">
                    <div class="left_foot">
                        <div class="vues">222 vues</div>
                        <div class="commentaires">0 commentaire</div>
                    </div>
                    <div class="right_foot">
                        <div class="love"><i class="fa-regular fa-heart"></i></div>
                        <div class="nombre_love">40</div>
                    </div>
                </div>
            </div>
        </section><br><br>

        <section class="articles">
            <div class="left">
                <img src="assets/blogimg3.png ">
            </div>
            <div class="right">
                <div class="head">
                    <div class="logo">
                        <img src="assets/photo2.png " alt="">
                    </div>
                    <div class="desc_logo">
                        <span>Odjouman Allagbe</span><br>
                        <span>18 mars 2020</span>
                        <span> 3 Min de lecture</span>
                    </div>
                </div>
                <div class="description">
                    <h1>Coup de projecteur sur le <br> parcours entrepreneuriat de <br> la Formation Solaire à Energy <br> Generation</h1>
                    <p class="desc_right">Parce que le solaire représente une véritable <br> opportunité de création d'emplois pour les jeunes,<br> tout en participant au développement...</p>
                </div>
                <div class="foot">
                    <div class="left_foot">
                        <div class="vues">222 vues</div>
                        <div class="commentaires">0 commentaire</div>
                    </div>
                    <div class="right_foot">
                        <div class="love"><i class="fa-regular fa-heart"></i></div>
                        <div class="nombre_love">40</div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- Start Footer section page -->
    
        <!-- <div class="footer">
            <div class="newsletter stagger_el_foot">
                <div class="newsletter_gtitle">Newsletter</div>
                <div class="newsletter_ltitle">Get our latest info, podcasts, advices...</div>
                <form action="news.php" method="post" class="newsletter_form">
                    <input type="text" placeholder="First name" name="name">
                    <input type="text" placeholder="Email" name="mail">
                    <fieldset>
                        <legend>Campus Language</legend>
                        <label class="radio">
                            <input type="radio" name="lang" value="fr">
                            <span>Je préfère recevoir les informations en français</span>
                        </label>
                        <br>
                        <label class="radio">
                            <input type="radio" name="lang" value="en">
                            <span>I wish to receive the content in English</span>
                        </label>
                    </fieldset>
                    <input type="submit" class="subscribe_btn" value="Subscribe" name="submit">
                </form>
            </div>
            <div class="social_links_section stagger_el_foot">
                <div class="logo_immg">
                    <img src="assets/logo.png">
                </div>
                <div class="socials_link">
                    <a href="#">
                        <img src="assets/facebook.svg">
                    </a>
                    <a href="#">
                        <img src="assets/twitter.svg">
                    </a>
                    <a href="#">
                        <img src="assets/linkedin.svg">
                    </a>
                    <a href="#">
                        <img src="assets/youtube.svg">
                    </a>
                </div>
            </div>
            <div class="all_links stagger_el_foot">
                <div class="all_link_title">
                    Links
                </div>
                <ul class="site_links">
                    <li><a href="index.html">Accueil</a></li>
                    <li><a href="index.html">Programs</a></li>
                    <li><a href="index.html">Energy Space</a></li>
                    <li><a href="index.html">Blog</a></li>
                </ul>
            </div>
            <div class="copyright stagger_el_foot">
                © 2022 - Energy Generation - All rights reserved.
            </div>
        </div>
    </div>
    End Footer section page -->

    <!-- End Footer section page -->


    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/ScrollTrigger.min.js"></script>
    <script src="script.js"></script>
    <script src="./blog.js"></script>
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                pageLanguage: 'fr'
            }, 'google_translate_element');
        }
    </script>
</body>

</html>