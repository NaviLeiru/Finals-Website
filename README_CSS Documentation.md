**CSS Generator documentation**
Submitted by:
- Gonzaga, Alix Marian R.
- Sejismundo, Ivan Uriel

**Description of CSS_Launcher.php:**
The `CSS_Launcher.php` file is a PHP script designed to create and manage the CSS styles for a website. Using a `CSSGenerator` object, it defines styles for various parts of the page, such as the body, header, main menu, and different sections. The script sets properties for things like margins, padding, colors, fonts, and layout positions. By organizing these styles in the script, it makes it easier to maintain and update the website's appearance. The generated CSS is then saved to a file called `styles.css`, allowing the website to load these styles dynamically.

**List of properties used:**

***Text Properties***
1.) `font-family`: Specifies the font for an element.
->designSelector('#right .blockheadings')
    ->addProperty('font-family', '"Arial Narrow", arial, sans-serif');

2.) `font-weight`: Sets the weight (or boldness) of the font.
->designSelector('#headlright .headlineimpact')
    ->addProperty('font-weight', 'normal');

3.) `font-size`: Sets the size of the font.
->designSelector('#headlright .headlinetext')
    ->addProperty('font-size', '30px');

4.) `color`: Sets the color of the text.
->designSelector('#footer #copyrighttext')
    ->addProperty('color', '#fff');

5.) `text-align`: Sets the horizontal alignment of text.
->designSelector('#mainmenu li')
    ->addProperty('text-align', 'center');

6.) `line-height`: Sets the height of each line of text.
->designSelector('#mainmenu a')
    ->addProperty('line-height', '35px');

7.) `text-decoration`: Specifies the decoration added to text.
->designSelector('#mainmenu a')
    ->addProperty('text-decoration', 'none');

***Background Properties***
1.) `background`: Sets the background color, image, and other background properties of an element.
->designSelector('#lefthead')
    ->addProperty('background', '#fff url("../images/libretto2_200px.png") no-repeat');

2.) `background-color`: Sets the background color of an element.
->designSelector('#mainmenu li:hover > a')
    ->addProperty('background-color', '#237291');

***Box Model Properties***
1.) `margin`: Sets the margin area on all four sides of an element.
->designSelector('#mainmenubar')
    ->addProperty('margin', '0 auto');

2.) `margin-top`: Sets the top margin of an element.
->designSelector('#mainmenu .sub1 a')
    ->addProperty('margin-top', '0px');

3.) `margin-right`: Sets the right margin of an element.
->designSelector('#right .sections')
    ->addProperty('margin-right', '50px');

4.) `margin-bottom`: Sets the bottom margin of an element.
->designSelector('#right .sections')
    ->addProperty('margin-bottom', '50px');

5.) `margin-left`: Sets the left margin of an element.
->designSelector('#mainmenu .sub2 a')
    ->addProperty('margin-left', '5px');

6.) `padding`: Sets the padding area on all four sides of an element.
->designSelector('*')
    ->addProperty('padding', '0px');

7.) `padding-top`: Sets the top padding of an element.
->designSelector('#headlleft img')
    ->addProperty('padding-top', '40px');

8.) `padding-left`: Sets the left padding of an element.
->designSelector('#right .blockheadings')
    ->addProperty('padding-left', '10px');

9.) `border`: Sets the style, width, and color of the border on all four sides of an element.
->designSelector('#right .sections')
    ->addProperty('border', '1px solid #ccc');

10.) `border-top-left-radius`: Defines the radius of the element's top-left corner.
->designSelector('#right .sections p')
    ->addProperty('border-top-left-radius', '10px');


11.) `border-top-right-radius`: Defines the radius of the element's top-right corner.
->designSelector('#right .sections p')
    ->addProperty('border-top-right-radius', '10px');

12.) `border-bottom-left-radius`: Defines the radius of the element's bottom-left corner.
->designSelector('#footer')
    ->addProperty('border-bottom-left-radius', '25px');

13.) `border-bottom-right-radius`: Defines the radius of the element's bottom-right corner.
->designSelector('#footer')
    ->addProperty('border-bottom-right-radius', '25px');

14.) `border-bottom`: Sets the style, width, and color of the bottom border of an element.
->designSelector('#mainmenubar')
    ->addProperty('border-bottom', '2px solid black');

***Layout Properties***
1.) `width`: Sets the width of an element.
->designSelector('#maincontainer')
    ->addProperty('width', '1000px');

2.) `min-height`: Sets the minimum height of an element.
->designSelector('#left')
    ->addProperty('min-height', '200px');

3.) `height`: Sets the height of an element.
->designSelector('#right')
    ->addProperty('height', 'auto');

4.) `overflow`: Specifies what happens if content overflows an element's box.
->designSelector('#maincontainer')
    ->addProperty('overflow', 'hidden');

5.) `float`: Specifies whether an element should float to the left, right, or not at all.
->designSelector('#headlleft')
    ->addProperty('float', 'left');

6.) `display`: Specifies the display behavior of an element.
->designSelector('#right .blockheadings')
    ->addProperty('display', 'block');

7.) `position`: Specifies the type of positioning method used for an element.
->designSelector('#footer')
    ->addProperty('position', 'relative');

8.) `top`: Sets the top margin edge for a positioned box.
->designSelector('#mainmenu .sub2')
    ->addProperty('top', '0px');

9.) `bottom`: Sets the bottom margin edge for a positioned box.
->designSelector('#footer #copyrighttext')
    ->addProperty('bottom', '20px');

10.) `left`: Sets the left margin edge for a positioned box.
->designSelector('#mainmenu .sub2')
    ->addProperty('left', '124px');

11.) `right`: Sets the right margin edge for a positioned box.
->designSelector('#footer #copyrighttext')
    ->addProperty('right', '10px');

***Color and Opacity Properties***
1.) `background-color`: Sets the background color of an element.
->designSelector('#mainmenu li:hover a:hover')
    ->addProperty('background-color', 'aqua');

2.) `color`: Sets the color of the text.
->designSelector('#right .blockheadings')
    ->addProperty('color', '#fff');

***Miscellaneous***
1.) `list-style`: Specifies the type of list-item marker.
->designSelector('#mainmenu, .sub1, .sub2')
    ->addProperty('list-style', 'none');

