<?php
require_once 'CSSTag.php';

$cssGenerator = new CSSGenerator();


$cssGenerator
    ->designSelector('*')
        ->addProperty('margin', '0px')
        ->addProperty('padding', '0px');

$cssGenerator
    ->designSelector('body')
        ->addProperty('margin-top', '20px')
        ->addProperty('background-color', '#ccc')
        ->addProperty('font-family', 'arial, verdana, tahoma, sans-serif');


$cssGenerator
    ->designSelector('#header')
        ->addProperty('margin', '0 auto')
        ->addProperty('width', '1000px')
        ->addProperty('min-height', '200px');

$cssGenerator
    ->designSelector('#lefthead')
        ->addProperty('height', '200px')
        ->addProperty('width', '200px')
        ->addProperty('background', '#fff url("../pictures/libretto2_200px.png") no-repeat')
        ->addProperty('border-top-left-radius', '25px')
        ->addProperty('float', 'left');

$cssGenerator
    ->designSelector('#righthead')
        ->addProperty('height', '200px')
        ->addProperty('width', '800px')
        ->addProperty('background', '#fff url("../pictures/libretto_banner.png") no-repeat')
        ->addProperty('border-top-right-radius', '25px')
        ->addProperty('float', 'left');

$cssGenerator
    ->designSelector('#mainmenubar')
        ->addProperty('margin', '0 auto')
        ->addProperty('width', '1000px')
        ->addProperty('height', '35px')
        ->addProperty('background-color', '#fff')
        ->addProperty('border-bottom', '2px solid black');
 $cssGenerator
        ->designSelector('#mainmenu')
            ->addProperty('margin', '0 auto')
            ->addProperty('font-weight', 'bold');

$cssGenerator
    ->designSelector('#maincontainer')
        ->addProperty('overflow', 'hidden')
        ->addProperty('margin', '0 auto')
        ->addProperty('width', '1000px')
        ->addProperty('height', 'auto')
        ->addProperty('background-color', '#fff')
        ->addProperty('border-bottom', '1px solid black');

$cssGenerator
    ->designSelector('#headline')
        ->addProperty('width', '1000px')
        ->addProperty('height', '350px');

$cssGenerator
    ->designSelector('#headlleft img')
        ->addProperty('display', 'block')
        ->addProperty('padding-top', '40px')
        ->addProperty('margin', '0 auto');

$cssGenerator
    ->designSelector('#headlleft')
        ->addProperty('width', '600px')
        ->addProperty('float', 'left');

$cssGenerator
    ->designSelector('#headlright')
        ->addProperty('width', '400px')
        ->addProperty('float', 'left');

$cssGenerator
    ->designSelector('#left')
        ->addProperty('width', '300px')
        ->addProperty('min-height', '200px')
        ->addProperty('height', 'auto')
        ->addProperty('background-color', '#fff')
        ->addProperty('float', 'left');

$cssGenerator
    ->designSelector('#right')
        ->addProperty('width', '700px')
        ->addProperty('height', 'auto')
        ->addProperty('background-color', '#fff')
        ->addProperty('float', 'left');

$cssGenerator
    ->designSelector('#right .blockheadings')
        ->addProperty('display', 'block')
        ->addProperty('font-family', '"Arial Narrow", arial, sans-serif')
        ->addProperty('font-size', '30px')
        ->addProperty('color', '#fff')
        ->addProperty('padding-left', '10px')
        ->addProperty('background-color', '#65A9D6');

$cssGenerator
    ->designSelector('#right #placeholder')
        ->addProperty('margin', '0 auto')
        ->addProperty('height', 'auto')
        ->addProperty('padding-top', '30px')
        ->addProperty('width', '600px');

$cssGenerator
    ->designSelector('#right .sections')
        ->addProperty('padding', '2px')
        ->addProperty('float', 'left')
        ->addProperty('margin-right', '50px')
        ->addProperty('margin-bottom', '50px')
        ->addProperty('width', '220px')
        ->addProperty('min-height', '50px')
        ->addProperty('border-top-left-radius', '10px')
        ->addProperty('border-top-right-radius', '10px')
        ->addProperty('border', '1px solid #ccc')
        ->addProperty('font-size', '12px');

$cssGenerator
    ->designSelector('#right .sections p')
        ->addProperty('border-top-left-radius', '10px')
        ->addProperty('border-top-right-radius', '10px')
        ->addProperty('background-color', '#65A9D6')
        ->addProperty('font-family', '"Arial Narrow", arial, sans-serif')
        ->addProperty('font-size', '30px')
        ->addProperty('color', '#fff')
        ->addProperty('padding-left', '5px')
        ->addProperty('margin', '0')
        ->addProperty('height', '40px');
        

$cssGenerator
    ->designSelector('#right .sectiontext')
        ->addProperty('text-align', 'left');

$cssGenerator
    ->designSelector('#footer')
        ->addProperty('margin', '0 auto')
        ->addProperty('width', '1000px')
        ->addProperty('min-height', '200px')
        ->addProperty('background-color', '#000')
        ->addProperty('border-bottom-left-radius', '25px')
        ->addProperty('border-bottom-right-radius', '25px')
        ->addProperty('position', 'relative');

$cssGenerator
    ->designSelector('#headlright .headlineimpact')
        ->addProperty('display', 'block')
        ->addProperty('font-family', 'tahoma, sans-serif')
        ->addProperty('font-size', '45px')
        ->addProperty('font-weight', 'normal')
        ->addProperty('color', '#00f')
        ->addProperty('text-align', 'center');

$cssGenerator
    ->designSelector('#headlright .headlinetext')
        ->addProperty('display', 'block')
        ->addProperty('font-family', 'arial, verdana, sans-serif')
        ->addProperty('font-size', '30px')
        ->addProperty('font-weight', 'normal')
        ->addProperty('color', '#f00')
        ->addProperty('text-align', 'center');

$cssGenerator
    ->designSelector('#footer #copyrighttext')
        ->addProperty('display', 'block')
        ->addProperty('text-align', 'right')
        ->addProperty('font-size', '13px')
        ->addProperty('color', '#fff')
        ->addProperty('position', 'absolute')
        ->addProperty('bottom', '20px')
        ->addProperty('right', '10px');

$cssGenerator
    ->designSelector('#mainmenu, .sub1, .sub2')
        ->addProperty('list-style', 'none')
        ->addProperty('padding', '0px')
        ->addProperty('position', 'absolute');

$cssGenerator
    ->designSelector('#mainmenu li')
        ->addProperty('width', '125px')
        ->addProperty('position', 'relative')
        ->addProperty('float', 'left')
        ->addProperty('margin-right', '4px')
        ->addProperty('text-align', 'center');

$cssGenerator
    ->designSelector('#mainmenu a')
        ->addProperty('background-color', 'white')
        ->addProperty('color', '#000')
        ->addProperty('text-decoration', 'none')
        ->addProperty('display', 'block')
        ->addProperty('width', '125px')
        ->addProperty('height', '35px')
        ->addProperty('line-height', '35px');

$cssGenerator
    ->designSelector('#mainmenu .sub1 a')
        ->addProperty('margin-top', '0px');

$cssGenerator
    ->designSelector('#mainmenu .sub2 a')
        ->addProperty('margin-left', '5px');

$cssGenerator
    ->designSelector('#mainmenu li:hover > a')
        ->addProperty('background-color', '#237291');

$cssGenerator
    ->designSelector('#mainmenu li:hover a:hover')
        ->addProperty('background-color', 'aqua');

$cssGenerator
    ->designSelector('#mainmenu .sub1')
        ->addProperty('display', 'none')
        ->addProperty('position', 'absolute');

$cssGenerator
    ->designSelector('#mainmenu .sub2')
        ->addProperty('display', 'none')
        ->addProperty('position', 'absolute')
        ->addProperty('top', '0px')
        ->addProperty('left', '124px');

$cssGenerator
    ->designSelector('#mainmenu li:hover .sub1')
        ->addProperty('display', 'block');

$cssGenerator
    ->designSelector('#mainmenu .sub1 li:hover .sub2')
        ->addProperty('display', 'block');

$cssStyles = $cssGenerator->render();

echo "<style>\n$cssStyles</style>\n";

file_put_contents("styles.css", $cssStyles);
?>
