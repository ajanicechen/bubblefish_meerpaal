<?php 
    // load footer.json
    $footerJson = file_get_contents('json/footer.json');
    $page = json_decode($footerJson);
    $footer = $page->footer;
    $contact = $footer->contact;
    $sitemap = $footer->sitemap;

    // print_r($footer);
    
    // var_dump($footer->credits);
    // exit();

    // Section 1/ item1
    $welcome = "Welkom!";
    $greet = "Leg aan in onze haven";
    $intro = "Op VMBO De Meerpaal valt niemand buiten de boot, wat je verhaal ook is. Of je nou moeite hebt met stilzitten of je last hebt van dyslexie, bij ons is het normaal dat iedereen bijzonder is. Door de vertrouwensband van leerling tot leerkracht en van conciërge tot ouder creëren wij een veilige omgeving waarin iedereen kan opbloeien. Leg aan in onze haven!";

    //section 2 / item2


    //section 3 / item3
    $vision = "Onderwijsvisie";
    $safety = "Veilige leeromgeving";
    $safetyDescription = "De Meerpaal biedt kinderen die in cognitief of sociaal-emotioneel 
        opzicht ‘anders’ zijn, een veilige en uitdagende leeromgeving. Daarom gaat ons onderwijs 
        net een stapje verder dan op andere scholen. Zo hechten wij aan overzichtelijkheid en 
        aandacht voor persoonlijke ontwikkeling. Bovendien heeft iedere leerling eigen leerdoelen, 
        om onderwijs op maat te creëren.";

    $comenius = "Onderdeel van Comenius";
    $comeniusDescription = "De Meerpaal is onderdeel van scholengroep Comenius College. Onder Comenius College 
    vallen een aantal middelbare scholen in Rotterdam-Oost. Op haar beurt is Comenius 
    weer onderdeel van CVO Rotterdam, de vereniging voor Christelijk Voortgezet Onderwijs. 
    Onderdeel van het CVO is ook een shared-service-organisatie die veel van de 
    administratieve taken van De Meerpaal op zich neemt.";

    // section 4
    $join = "Ook het anker uitgooien?";
    $joinInfo = "Heb je het advies vmbo-tl, -kb of -bb gekregen? En zoek je een school met extra begeleiding? 
    De Meerpaal is dan misschien een goede school voor jou. Check de pagina Ik ben nieuw om 
    te zien wat je van ons kan verwachten.";

?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>meerpaal</title>

        <!-- Google font -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Cabin:ital,wght@0,400;0,500;0,700;1,400&display=swap" rel="stylesheet">
        
        <!-- font awesome -->
        <script src="https://kit.fontawesome.com/2d00bc2e49.js" crossorigin="anonymous"></script>

        <!-- Bootstrap and own stylesheet -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
    </head>

    <body>
        <!-- Container -->
        <div class="content-container">

            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid align-middle header top-0">
                    <p class="menuTag">Menu</p>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Waar ben je naar opzoek?" aria-label="Search">
                        <button class="btn" type="submit">Zoeken</button>
                    </form>
                </div>
            </nav>

            <!-- Logo's -->
            <div class="menu sticky-top overflow-hidden">
                <!-- <div class=""> -->
                    <img class="svg-img" id="menuBtn" src="resources/Group_715.svg"></img>
                    <img class="svg-img" src="resources/Group_716.svg"></img>
                    <img class="svg-img" src="resources/Group_717.svg"></img>  
                <!-- </div> -->
            </div>

            <!-- Menu -->
            <ul class="menuItems" id="menuItems">
                <div class="row">
                    <div class="col-3">
                        <li>
                            <a href="">Welkom!</a>
                        </li>
                        <li>
                            <a href="">Ik ben nieuw</a>
                            <p>Hoe gaat het er aan toe op De Meerpaal?</p>
                        </li>
                        <li>
                            <a href="">Mijn school</a>
                            <p>Informatie over ziekte en verlof en de leerlingenraad</p>
                        </li>
                        <li>                            
                            <a href="">Voor ouders</a>
                            <p>Informatie over protocollen, ouderbijdrage en verzekeringen.</p>
                        </li>
                        <li>
                            <a href="">Aanmelden</a>
                            <p>Alles over kennismaken, de toelatingseisen en de aanmeldprocedure</p>
                        </li>   
                    </div>
                    <div class="col-3">
                        <li>
                            <a href="">Agenda</a>
                        </li>
                        <li>
                            <a href="">Nieuws</a>
                        </li>
                        <li>
                            <a href="">Vacatures</a>
                        </li>
                        <li>                            
                            <a href="">Contact</a>
                        </li>
                    </div>
                    <div class="fixed-bottom menu-ext-btn-wrap">
                        <a href="#" class="menu-ext-btn">
                            Portaal
                            <i class="fa-solid fa-up-right-from-square"></i>
                        </a>
                        <a href="#" class="menu-ext-btn">
                            Comenius
                            <i class="fa-solid fa-up-right-from-square"></i>
                        </a>
                    </div>
                </div>         
            </ul>

            <!-- section content 1 -->
            <div class="item1 blue-waves">
                <h1><?php echo $welcome; ?></h1>
                <h2><?php echo $greet; ?></h2>
                <p class="intro"><?php echo $intro; ?></p>
                <a class="white-btn" href="#">Ik ben nieuw →</a>
            </div>

            <!-- section content 2 -->
            <div class="item2 round-waves">
                <div class="container">
                    <h3>Actueel</h3>

                    <div class="row justify-content-start">
                        <div class="col-6">
                            <h4>Om te noteren</h4>
                            <div class="yellowContainer">
                                <div class="card yellowCard">
                                    <div class="card-body">
                                        <p class="title">14 mei 2022</p>
                                        <p class="txt">Studiedag</p>
                                        <p class="arrowR">→</p>
                                    </div>
                                </div>
                                <div class="card yellowCard">
                                    <div class="card-body">
                                        <p class="title">27 april t/m 12 mei 2022</p>
                                        <p class="txt">Meivakantie</p>
                                        <p class="arrowR">→</p>
                                    </div>
                                </div>
                                <div class="card yellowCard">
                                    <div class="card-body">
                                        <p class="title">24 mei t/m 2 juni 2022</p>
                                        <p class="txt">Toetsweken</p>
                                        <p class="arrowR">→</p>
                                    </div>
                                </div>
                                <div class="card yellowCard">
                                    <div class="card-body">
                                        <p class="title">15 juni 2022</p>
                                        <p class="txt">Studiedag</p>
                                        <p class="arrowR">→</p>
                                    </div>
                                </div>
                            </div>
                            <a class="blue-btn" href="#">Agenda →</a>
                            <a class="blue-btn" href="#">Nieuws →</a>
                        </div>
                        <div class="col-6">
                            <h4>Nieuws</h4>
                            <div class="card whiteCard">
                                <div class="card-body">
                                    <p class="title">BREAKING</p>
                                    <p class="txt">De Meerpaal tijdelijk niet telefonisch bereikbaar</p>
                                    <p class="cardFooter">2 uur geleden</p>
                                </div>
                            </div>
                            <div class="card whiteCard">
                                <div class="card-body">
                                    <p class="title">NIEUWS</p>
                                    <p class="txt">De Meerpaal bestaat 40 jaar en dat mag gevierd worden!</p>
                                    <p class="cardFooter">6 dagen geleden</p>
                                </div>
                            </div>
                            <div class="card whiteCard">
                                <div class="card-body">
                                    <p class="title">LEERLINGVERHALEN</p>
                                    <p class="txt">De eerste schooldag van Joanne was even wennen</p>
                                    <p class="cardFooter">15 juni 2022</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="justify-content-start guide">
                        <h3>Ahoy Meerpaler!</h3>
                        <p class="p-white">
                            Op zoek naar informatie over vakanties, verlof of de leerlingenraad? 
                            Download de schoolgids of ga naar de pagina <i>Mijn school</i>.
                        </p>

                        <div class="pink-btn">
                            <a class="" href="#">Download de schoolgids</a>
                            <img class="extLinkIcon" src="resources/Icon_feather-external-link.svg"></iframe>
                        </div>
                        
                        <a class="blue-btn" href="#">Mijn school →</a>
                    </div>
                </div>
            </div>

            <!-- section content 3 -->
            <div class="item3 blue-waves2">
                <div class="">
                    <h5><?php echo $vision;?></h5>
                    <h6><?php echo $safety;?></h6>
                    <p class="p-blue"><?php echo $safetyDescription; ?></p>
                    <a class="white-btn" href="#">Voor ouders →</a>
                </div>

                <!-- line goes through here??? -->
                <div class="rope-wrapper">
                    <!-- <img class="" src="resources/rope.svg"></img> -->
                    <div class="rope"></div>
                </div>

                <div class="">
                    <h6><?php echo $comenius;?></h6>
                    <p class="p-blue"><?php echo $comeniusDescription;?></p>
                    <div class="pink-btn">
                        <a class="" href="#">Download de schoolgids</a>
                        <img class="extLinkIcon" src="resources/Icon_feather-external-link.svg"></iframe>
                    </div>
                </div>
            </div>
            
            <!-- section content 4 -->
            <div class="item4 yellow-waves">
                <h1><?php echo $join;?></h1>
                <p class="p-white"><?php echo $joinInfo;?></p>
                <a class="blue-btn" href="#">Ik ben nieuw →</a>
            </div>
            
            <!-- footer -->
            <div class="footer">
                <div class="row align-items-start">
                    <div class="col-4">
                        <ul>
                            <?php foreach ($footer->credits as $credit): ?> 
                            <li><?= $credit ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <div class="col-4">
                        <ul>
                            <li><?= $contact->title ?></li>
                            <li><?= $contact->adres ?></li>
                            <li><?= $contact->postalcode ?></li>
                            <li><?= $contact->openinghours ?></li>
                            <br>
                            <li><?= $contact->phone ?></li>
                            <li><a href="mailto:<?= $contact->mail ?>"><?= $contact->mail ?></a></li>
                            <li>
                                <a href="" class="fa-brands fa-instagram socials"></a>
                                <a href="" class="fa-brands fa-square-facebook socials"></a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-4">
                        <ul>
                            <li><?= $sitemap->title ?></li>
                            <?php foreach($sitemap->links as $link): ?>
                            <li>
                                <a href='/<?= urlencode($link) ?>'>
                                    <?= $link ?>
                                </a>
                            </li>
                            <?php endforeach ?>
                        </ul>
                    </div>
                </div>
            </div>
            <img class="right-img sticky-top top-0 end-0" src="resources/Rectangle_177.png">
        </div>

        <!-- load js -->
        <script src="js/menuToggle.js"></script>
    </body>
   
</html>