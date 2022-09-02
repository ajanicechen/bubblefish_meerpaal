<?php 
    // load content.json
    $contentJson = file_get_contents('json/content.json');
    $pageContent = json_decode($contentJson);

    //menu
    $menu = $pageContent->menu;
    $leftMenu = $menu->left;
    $rightMenu = $menu->right;
    $menuButtons = $menu->buttons;

    // section1 /item1
    $intro = $pageContent->intro;

    // section2/ item2
    $actualSection = $pageContent->actual;
    $events = $actualSection->events;
    $posts = $actualSection->posts;
    $guide = $pageContent->guide;

    //section3/ item3
    $visionSection = $pageContent->vision;
    $comeniusSection = $pageContent->comenius;

    //section4 /item4
    $joinSection = $pageContent->join;

    // footer
    $footer = $pageContent->footer;
    $contact = $footer->contact;
    $sitemap = $footer->sitemap;

    // var_dump($events[0]->date);
    // exit();

    // var_dump($menu->buttons);
    // exit();

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
                            <a href="/<?= urlencode($leftMenu->welcome) ?>">
                                <?= $leftMenu->welcome ?>
                            </a>
                        </li>
                        <li>
                            <a href="/<?= urlencode($leftMenu->new->url) ?>">
                                <?= $leftMenu->new->url ?>
                            </a>
                            <p><?= $leftMenu->new->description ?></p>
                        </li>
                        <li>
                            <a href="/<?= urlencode($leftMenu->mySchool->url) ?>">
                                <?= $leftMenu->mySchool->url ?>
                            </a>
                            <p><?= $leftMenu->mySchool->description ?></p>
                        </li>
                        <li>                            
                            <a href="/<?= urlencode($leftMenu->parents->url) ?>">
                                <?= $leftMenu->parents->url ?>
                            </a>
                            <p><?= $leftMenu->parents->description ?></p>
                        </li>
                        <li>
                            <a href="/<?= urlencode($leftMenu->signUp->url) ?>">
                                <?= $leftMenu->signUp->url ?>
                            </a>
                            <p><?= $leftMenu->signUp->description ?></p>
                        </li>   
                    </div>
                    <div class="col-3">
                        <?php foreach ($rightMenu as $menu): ?>
                            <li>
                                <a href="/<?= urlencode($menu) ?>"><?= $menu ?></a>
                            </li>
                        <?php endforeach; ?>
                    </div>
                    <div class="fixed-bottom menu-ext-btn-wrap">
                        <?php foreach ($menuButtons as $button): ?>
                            <a href="#" class="menu-ext-btn">
                                <?= $button ?>
                                <i class="fa-solid fa-up-right-from-square"></i>
                            </a>
                        <?php endforeach; ?>
                    </div>
                </div>         
            </ul>

            <!-- section content 1 -->
            <div class="item1 blue-waves">
                <h1><?= $intro->greet ?></h1>
                <h2><?= $intro->title ?></h2>
                <p class="intro"><?= $intro->description ?></p>
                <a class="white-btn" href="/<?= urlencode($intro->url) ?>"><?= $intro->url ?> →</a>
            </div>

            <!-- section content 2 -->
            <div class="item2 round-waves">
                <div class="container">
                    <h3><?= $actualSection->title; ?></h3>
                    <div class="row justify-content-start">
                        <div class="col-6">
                            <h4><?= $events->title; ?></h4>
                            <div class="yellowContainer">
                                <?php foreach ($events->cards as $card): ?>
                                <div class="card yellowCard">
                                    <div class="card-body">
                                        <p class="title"><?= $card->date ?></p>
                                        <p class="txt"><?= $card->description ?></p>
                                        <p class="arrowR">→</p>
                                    </div>
                                </div>
                                <?php endforeach; ?>
                            </div>
                            <a class="blue-btn" href="#">Agenda →</a>
                            <a class="blue-btn" href="#">Nieuws →</a>
                        </div>
                        <div class="col-6">
                            <h4><?= $posts->title; ?></h4>
                            <?php foreach ($posts->cards as $card): ?>
                            <div class="card whiteCard">
                                <div class="card-body">
                                    <p class="title"><?= $card->title ?></p>
                                    <p class="txt"><?= $card->description ?></p>
                                    <p class="cardFooter"><?= $card->date ?></p>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>

                    <div class="justify-content-start guide">
                        <h3><?= $guide->title; ?></h3>
                        <p class="p-white"><?= $guide->description; ?></p>

                        <div class="pink-btn">
                            <a class="" href="#"><?= $guide->pinkButton; ?></a>
                            <img class="extLinkIcon" src="resources/Icon_feather-external-link.svg"></iframe>
                        </div>
                        
                        <a class="blue-btn" href="#"><?= $guide->blueButton; ?></a>
                    </div>
                </div>
            </div>

            <!-- section content 3 -->
            <div class="item3 blue-waves2">
                <div class="">
                    <h5><?= $visionSection->title ?></h5>
                    <h6><?= $visionSection->safety ?></h6>
                    <p class="p-blue"><?= $visionSection->description ?></p>
                    <a class="white-btn" href="/<?= urlencode($visionSection->url) ?>"><?= $visionSection->url ?> →</a>
                </div>

                <!-- line goes through here??? -->
                <div class="rope-wrapper">
                    <!-- <img class="" src="resources/rope.svg"></img> -->
                    <div class="rope"></div>
                </div>

                <div class="">
                    <h6><?= $comeniusSection->title ?></h6>
                    <p class="p-blue"><?= $comeniusSection->description ?></p>
                    <div class="pink-btn">
                        <a class="" href="/<?= urlencode($comeniusSection->url) ?>"><?= $comeniusSection->url ?></a>
                        <img class="extLinkIcon" src="resources/Icon_feather-external-link.svg"></iframe>
                    </div>
                </div>
            </div>
            
            <!-- section content 4 -->
            <div class="item4 yellow-waves">
                <h1><?= $joinSection->title ?></h1>
                <p class="p-white"><?= $joinSection->description ?></p>
                <a class="blue-btn" href="/<?= urlencode($joinSection->url) ?>"><?= $joinSection->url ?> →</a>
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