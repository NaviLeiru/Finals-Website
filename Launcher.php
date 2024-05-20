<?php
    include 'HTMLTag.php';

    $br = HTMLTag::br()
    ->renderOneTag();

    $metacharset = HTMLTag::meta()
    ->charset("UTF-8")
    ->renderOneTag();

    $title = HTMLTag::title()
    ->content("Libretto Books")
    ->renderTag();

    $librettocss = HTMLTag::link()
    ->rel("stylesheet")
    ->type("text/css")
    ->href("../CSSGenerator/CSS_Launcher.php")
    ->renderOneTag();

    $libmenucss = HTMLTag::link()
    ->rel("stylesheet")
    ->type("text/css")
    ->href("../CSSGenerator/CSS_Launcher.php")
    ->renderOneTag();

    $head = HTMLTag::head()
    ->content($metacharset)
    ->content($title)
    ->content($librettocss)
    ->content($libmenucss)
    ->renderTag();

    $librettologo = HTMLTag::img()
    ->src("../pictures/libretto2_200px.png")
    ->renderOneTag();

    $lefthead = HTMLTag::div()
    ->id("lefthead")
    ->content($librettologo)
    ->renderTag();

    $librettobanner = HTMLTag::img()
    ->src("../pictures/libretto_banner.png")
    ->renderOneTag();

    $righthead = HTMLTag::div()
    ->id("righthead")
    ->content($librettobanner)
    ->renderTag();

    $header = HTMLTag::div()
    ->id("header")
    ->content($lefthead)
    ->content($righthead)
    ->renderTag();

    $homelink = HTMLTag::a()
    ->href("#")
    ->content("Home")
    ->renderTag();

    $readinglink = HTMLTag::a()
    ->href("#")
    ->content("Reading")
    ->renderTag();

    $featuredlink = HTMLTag::a()
    ->href("#")
    ->content("Featured")
    ->renderTag();

    $orderslink = HTMLTag::a()
    ->href("#")
    ->content("Orders")
    ->renderTag();

    $deallink = HTMLTag::a()
    ->href("#")
    ->content("Deals & Offers")
    ->renderTag();

    $novellink = HTMLTag::a()
    ->href("#")
    ->content("Novels")
    ->renderTag();

    $hardboundlink = HTMLTag::a()
    ->href("#")
    ->content("Hardbound")
    ->renderTag();

    $paperbacklink = HTMLTag::a()
    ->href("#")
    ->content("Paperback")
    ->renderTag();

    $comicslink = HTMLTag::a()
    ->href("#")
    ->content("Comics")
    ->renderTag();

    $categorieslink = HTMLTag::a()
    ->href("#")
    ->content("Categories")
    ->renderTag();

    $novels = HTMLTag::li()
    ->content($novellink)
    ->renderTag();

    $hardbound = HTMLTag::li()
    ->content($hardboundlink)
    ->renderTag();

    $paperback = HTMLTag::li()
    ->content($paperbacklink)
    ->renderTag();

    $comics = HTMLTag::li()
    ->content($comicslink)
    ->renderTag();

    $categories = HTMLTag::li()
    ->content($categorieslink)
    ->renderTag();

    $sub1 = HTMLTag::ul()
    ->class("sub1")
    ->content($novels)
    ->content($hardbound)
    ->content($paperback)
    ->content($comics)
    ->content($categories)
    ->renderTag();

    $home = HTMLTag::li()
    ->content($homelink)
    ->renderTag();

    $reading = HTMLTag::li()
    ->content($readinglink)
    ->content($sub1)
    ->renderTag();

    $featured = HTMLTag::li()
    ->content($featuredlink)
    ->renderTag();

    $orders = HTMLTag::li()
    ->content($orderslink)
    ->renderTag();

    $deal = HTMLTag::li()
    ->content($deallink)
    ->renderTag();

    $mainmenu = HTMLTag::ul()
    ->id("mainmenu")
    ->content($home)
    ->content($reading)
    ->content($featured)
    ->content($orders)
    ->content($deal)
    ->renderTag();

    $mainmenubar = HTMLTag::div()
    ->id("mainmenubar")
    ->content($mainmenu)
    ->renderTag();

    $hungergames = HTMLTag::img()
    ->src("../pictures/hunger_games_trilogy.jpg")
    ->attrtitle("The Hunger Games Trilogy")
    ->alt("The Hunger Games Trilogy")
    ->renderOneTag();

    $headlleft = HTMLTag::div()
    ->id("headlleft")
    ->content($hungergames)
    ->renderTag();

    $headlineimpact = HTMLTag::div()
    ->class("headlineimpact")
    ->content("Special Offer!!!")
    ->renderTag();

    $headlinetext = HTMLTag::div()
    ->class("headlinetext")
    ->content("Limited stocks only!!!")
    ->renderTag();

    $headlright = HTMLTag::div()
    ->id("headlright")
    ->content($br)
    ->content($br)
    ->content($headlineimpact)
    ->content($br)
    ->content($headlinetext)
    ->content($br)
    ->renderTag();

    $headline = HTMLTag::div()
    ->id("headline")
    ->content($headlleft)
    ->content($headlright)
    ->renderTag();

    $left = HTMLTag::div()
    ->id("left")
    ->content("")
    ->renderTag();

    $blockheadings = HTMLTag::div()
    ->class("blockheadings")
    ->content("Book News")
    ->renderTag();

    $sectiontext = HTMLTag::div()
    ->class("sectiontext")
    ->content("\"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\"")
    ->renderTag();

    $literature = HTMLTag::p()
    ->content("Literature")
    ->renderTag();

    $arts = HTMLTag::p()
    ->content("Arts")
    ->renderTag();

    $drama = HTMLTag::p()
    ->content("Drama")
    ->renderTag();

    $scific = HTMLTag::p()
    ->content("Science/Fiction")
    ->renderTag();

    $horror = HTMLTag::p()
    ->content("Horror")
    ->renderTag();

    $love = HTMLTag::p()
    ->content("Love Story")
    ->renderTag();

    $litsection = HTMLTag::div()
    ->class("sections")
    ->content($literature)
    ->content($sectiontext)
    ->renderTag();

    $artsection = HTMLTag::div()
    ->class("sections")
    ->content($arts)
    ->content($sectiontext)
    ->renderTag();

    $dramasection = HTMLTag::div()
    ->class("sections")
    ->content($drama)
    ->content($sectiontext)
    ->renderTag();

    $scificsection = HTMLTag::div()
    ->class("sections")
    ->content($scific)
    ->content($sectiontext)
    ->renderTag();

    $horrorsection = HTMLTag::div()
    ->class("sections")
    ->content($horror)
    ->content($sectiontext)
    ->renderTag();

    $lovesection = HTMLTag::div()
    ->class("sections")
    ->content($love)
    ->content($sectiontext)
    ->renderTag();

    $placeholder = HTMLTag::div()
    ->id("placeholder")
    ->content($litsection)
    ->content($artsection)
    ->content($br)
    ->content($dramasection)
    ->content($scificsection)
    ->content($br)
    ->content($horrorsection)
    ->content($lovesection)
    ->renderTag();

    $right = HTMLTag::div()
    ->id("right")
    ->content($blockheadings)
    ->content($placeholder)
    ->renderTag();

    $copyright = HTMLTag::div()
    ->id("copyrighttext")
    ->content("Copyright © International Web Development, All rights reserved 2013")
    ->renderTag();

    $footer = HTMLTag::div()
    ->id("footer")
    ->content($copyright)
    ->renderTag();

    $maincontainer = HTMLTag::div()
    ->id("maincontainer")
    ->content($headline)
    ->content($left)
    ->content($right)
    ->renderTag();

    $body = HTMLTag::body()
    ->content($header)
    ->content($mainmenubar)
    ->content($maincontainer)
    ->content($footer)
    ->content($br)
    ->renderTag();

    $html = HTMLTag::html()
    ->content($head)
    ->content($body)
    ->renderTag();


    file_put_contents("final.html", $html);
    echo "You have successfully created an HTML file.";