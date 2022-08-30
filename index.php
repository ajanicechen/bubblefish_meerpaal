<?php 
    // Section 1/ item1
    $welcome = "Welcome!";
    $greet = "Leg aan in onze haven";
    $intro = "Op VMBO De Meerpaal valt niemand buiten de boot, wat je verhaal ook is. 
            Of je nou moeite hebt met stilzitten of je last hebt van dyslexie, 
            bij ons is het normaal dat iedereen bijzonder is. Door de vertrouwensband 
            van leerling tot leerkracht en van conciërge tot ouder creëren wij een 
            veilige omgeving waarin iedereen kan opbloeien. Leg aan in onze haven!";

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
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>meerpaal</title>

        <!-- Stylesheet Iskra Font -->
        <!-- <link href="//db.onlinewebfonts.com/c/2111f7d4b53c115e872c6151b09af646?family=Iskra" rel="stylesheet" type="text/css"/> -->

        <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
        
        <!-- Bootstrap and own stylesheet -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
    </head>

    <body>
        <!-- Container -->
        <div class="content-container">
            <!-- Burger Menu -->
            <div class="menu sticky-top overflow-hidden">
                <div>
                    <img class="svg-img" src="resources/Group_715.svg"></img>
                    <img class="svg-img" src="resources/Group_716.svg"></img>
                    <img class="svg-img" src="resources/Group_717.svg"></img>
                </div>    
            </div>

            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid align-middle header top-0">
                    <p class="menu-tag">Menu</p>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Waar ben je naar opzoek?" aria-label="Search">
                        <button class="btn" type="submit">Zoeken</button>
                    </form>
                </div>
            </nav>

            <!-- section content 1 -->
            <div class="item1">
                <h1><?php echo $welcome; ?></h1>
                <h2><?php echo $greet; ?></h2>
                <p class="intro"><?php echo $intro; ?></p>
                <a class="white-btn" href="#">Ik ben nieuw →</a>
            </div>

            <!-- section content 2 -->
            <div class="item2">
                <div class="container text-left">
                    <h3>Actueel</h3>

                    <div class="row justify-content-start">
                        <div class="col">
                            <h4>Om te noteren</h4>
                        </div>
                        <div class="col">
                            <h4>Nieuws</h4>
                        </div>
                    </div>

                    <div>
                        <h3>Ahoy Meerpaler!</h3>
                        <p class="p-white">
                            Op zoek naar informatie over vakanties, verlof of de leerlingenraad? 
                            Download de schoolgids of ga naar de pagina <i>Mijn school</i>.
                        </p>

                        <div class="pink-btn d-flex">
                            <a class="" href="#">Download de schoolgids</a>
                            <iframe class="iframe-svg justify-content-end" src="resources/Icon_feather-external-link.svg"></iframe>
                        </div>
                        
                        <a class="blue-btn" href="#">Mijn school →</a>

                        
                    </div>
                </div>
            </div>

            <!-- section content 3 -->
            <div class="item3">
                <div>
                    <h5><?php echo $vision;?></h5>
                    <h6><?php echo $safety;?></h6>
                    <p class="p-blue"><?php echo $safetyDescription; ?></p>
                    <a class="white-btn" href="#">Voor ouders →</a>
                </div>

                <!-- line goes through here??? -->

                <div>
                    <h6><?php echo $comenius;?></h6>
                    <p class="p-blue"><?php echo $comeniusDescription;?></p>
                    <div class="pink-btn d-flex">
                        <a class="" href="#">Download de schoolgids</a>
                        <iframe class="iframe-svg justify-content-end" src="resources/Icon_feather-external-link.svg"></iframe>
                    </div>
                </div>
            </div>
            
            <!-- section content 4 -->
            <div class="item4">
                <h1>Ook het anker uitgooien?</h1>
                <p class="p-white">
                    Heb je het advies vmbo-tl, -kb of -bb gekregen? En zoek je een school met extra begeleiding? 
                    De Meerpaal is dan misschien een goede school voor jou. Check de pagina Ik ben nieuw om 
                    te zien wat je van ons kan verwachten.
                </p>
            </div>
            
            <!-- footer -->
            <div class="footer">
                <div class="row align-items-start">
                    <div class="col-4">
                        <ul>
                            <li>©2022 Calvijn</li>
                            <li><a href="">Privacyverklaring</a></li>                                
                            <li>Ontwerp Doordacht</li>
                        </ul>
                    </div>
                    <div class="col-4">
                        <ul>
                            <li>Contact Kreeftstraat 44</li>
                            <li>3067 JV Rotterdam </li>
                            <li>Op schooldagen open </li>
                            <li>van 08.00 tot 16.30 uur </li>
                            <br>
                            <li>010 286 1313 </li>
                            <li>info@vmbo-demeerpaal.nl</li>
                        </ul>
                    </div>
                    <div class="col-4">
                        <ul>
                            <li>Sitemap </li>
                            <li>Welkom </li>
                            <li>Ik ben nieuw</li> 
                            <li>Mijn school </li>
                            <li>Voor ouders </li>
                            <li>Organisatie </li>
                            <li>Nieuws </li>
                            <li>Agenda </li>
                            <li>Vacatures </li>
                            <li>Contact </li>
                            <li>Portaal↗ </li>
                            <li>Comenius↗</li>
                        </ul>
                    </div>
                </div>
            </div>
            <img class="right-img sticky-top" src="resources/Rectangle_177.png">
        </div>
    </body>
   

</html>