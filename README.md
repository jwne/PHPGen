# PHPGen
PHPGen is a static page generator built with **Bootstrap** in mind. PHPGen works great with PHPGen uses a layout HTML file to layout all static elements of a page. Each element of the page is loaded into the layout file, which is then saved into a temporary PHP file. Next, the temporary PHP file is included in the calling page thus displaying the content. Finally, PHPGen uses Ajax to load all JavaScript elements of the page after the preliminary loading of HTML elements. 

## Supported Page Elements
- Page name & title
- CSS
- Main HTML content
- JavaScript

## Components
1. *skeleton.php* - Contains the PHP class which does most of the content processing and page building.
2. *layout.php* - The PHP file which contains the static elements of the website.
3. *jquery-2.1.1.js* - jQuery 2.1.1 which allows the use of Ajax requests to load JavaScript.
