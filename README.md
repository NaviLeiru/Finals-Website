**HTML Generator documentation**
Submitted by:
- Logrono Jan Francesca 

FORMAT
$variable = HTMLTag::<tag>()
-><attribute>("value")
->content("text") OR content($variable)
->renderTag(); OR renderOneTag();

$variable - is where the string value of the code is stored.

HTMLTag::<tag>() - calls the fuction that assigns $tag with the string value of the tag name and creates a new instance of the class.

<attribute>("value") - calls the attribute function that assigns $attr with the string value of the attribute name and the $value with the value of the attribute. Then, it stores it in the $attributes array where $attr is the index and $value is the corresponding element. You can method chain as many attributes as you need.

content("text") OR content($variable) - calls the function that stores the text/string or variable containing a string within the tag inside the $contents array. You chan method chain as many content as you need.

renderTag() OR renderOneTag() - calls the function that stores and arranges the string values from HTMLTag::<tag> to content to create the complete code assigned to the $variable. Use renderTag() for tags that need an opening a closing tag, while renderOneTag for ones that don't need a closing tag.

CODE SAMPLES
$p1 = HTMLTag::p()
->class("pclass")
->id("p1name")
->content("This is a p.")
->renderTag();

$p2 = HTMLTag::p()
->class("pclass")
->id("p2name")
->content($p1)
->content("This is another p.")
->renderTag();

$picture = HTMLTag::img()
->src("assets/picture.jpg")
->renderOneTag();

TAGS
HTMLTag::html - is the container for all other HTML elements.
HTMLTag::head - is a container for metadata.
HTMLTag::meta - defines metadata about an HTML document.
HTMLTag::title - defines the title of the document.
HTMLTag::body - defines the document's body.
HTMLTag::link - defines the relationship between the current document and an external resource.
HTMLTag::div - defines a division or a section in an HTML document.
HTMLTag::p - defines a paragraph.
HTMLTag::a - defines a hyperlink, which is used to link from one page to another.
HTMLTag::img - is used to embed an image in an HTML page.
HTMLTag::ul - defines an unordered (bulleted) list.
HTMLTag::ol - defines an ordered list.
HTMLTag::li - defines a list item.
HTMLTag::table - defines an HTML table.
HTMLTag::tr - defines a row in an HTML table.
HTMLTag::th - defines a header cell in an HTML table.
HTMLTag::td - defines a standard data cell in an HTML table.
HTMLTag::form - is used to create an HTML form for user input.
HTMLTag::input - specifies an input field where the user can enter data.
HTMLTag::button - defines a clickable button.
HTMLTag::h1 - define HTML headings. This is the most important heading.
HTMLTag::h2 - define HTML headings.
HTMLTag::h3 - define HTML headings.
HTMLTag::h4 - define HTML headings.
HTMLTag::h5 - define HTML headings.
HTMLTag::h6 - define HTML headings. This is the least important heading.
HTMLTag::br -inserts a single line break.
HTMLTag::label - defines a label for several elements.

ATTRIBUTES
charset - specifies the character encoding for the HTML document.
id - defines a unique identifier for an HTML element.
class - assigns one or more class names to an HTML element.
src - specifies the URL of an external resource. 
onClick - defines the action to be executed when clicked.
rel - specifies the relationship between the current document and the linked document.
href - specifies the URL of the linked document/resource.
type - defines tht type of the element.
for - associates a label element with a form control element.
name - specifies a name for elements.
alt - provides alternative text for an image if it cannot be displayed.
attrtitle - specifies extra information about an element.

