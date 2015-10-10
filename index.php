<?php

  // PHPGen default index page

  // Include the PGPGen page generator
  include './static/skeleton.php';
  $skeleton = new Skeleton;

  // Set the page name
  $skeleton->setPageName("PHPGen Test Page");

  // Start output buffer collection for the CSS
  ob_start();
?>

  <link rel="stylesheet" type="text/css" href="/css/style.css">

<?php

  // Get the output buffer contents and then set the CSS to it
  $cnt = ob_get_clean();

  $skeleton->setCSS($cnt);

  // Start output buffer collection for the main content
  ob_start();
?>

  <h2> PHPGen </h2>

  <p> This is a test page for PHPGen. </p>

<?php
  $cnt = ob_get_clean();

  $skeleton->setMainCnt($cnt);

  // Start output buffer collection for the JavaScript
  ob_start();
?>

  window.alert("PHPGen JavaScript test");

<?php
  $cnt = ob_get_clean();

  $skeleton->setJavascript($cnt);

  // Build the page
  $skeleton->buildPage();

  // Include the newly built page
  include './static/temp.php';
?>
