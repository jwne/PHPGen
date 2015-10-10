<?php

// PGPGen by jswny

  class Skeleton
  {
      // Set variables
      public $_layout;
      public $_page;
      public $_pageName;
      public $_CSS;
      public $_mainCnt;
      public $_JavaScript;

      // Set constants and triggers
      const PAGE_NAME_TRIGGER = '<!pageNameInsert>';
      const CSS_TRIGGER = '<!CSSInsert>';
      const JAVASCRIPT_TRIGGER = '<!JavaScriptInsert>';
      const SERVER_NAME_TRIGGER = '<!serverNameInsert>';

    // Default constructor
    public function Skeleton()
    {
        // Location of your layout file
        $this->_layout = file_get_contents('./static/layout.php');
        $this->_page = $this->_layout;

       // Parse domain as page title in uppercase
       $this->_page = str_replace(self::SERVER_NAME_TRIGGER, strtoupper($_SERVER['SERVER_NAME']), $this->_page);
    }

      // Set the page name
      public function setPageName($pageName)
      {
          $this->_pageName = $pageName;
      }

      // Set the CSS
      public function setCSS($CSS)
      {
          $this->_CSS = $CSS;
      }

      // Set the main content
      public function setMainCnt($mainCnt)
      {
          $this->_mainCnt = $mainCnt;

          // Store main content in a temporary content file
          $tempFile = fopen('./static/cnt_temp.php', 'w+') or die('PHPGen: Unable to open temporary content file!');
          fwrite($tempFile, $this->_mainCnt);
          fclose($tempFile);
      }

      // Set the JavaScript to be executed after the main content is loaded
      public function setJavaScript($JavaScript)
      {
          $this->_JavaScript = $JavaScript;
      }

      // Build the page and export it to a temporary file
      public function buildPage()
      {
          $this->_page = str_replace(self::PAGE_NAME_TRIGGER, $this->_pageName, $this->_page);
          $this->_page = str_replace(self::CSS_TRIGGER, $this->_CSS, $this->_page);
          $this->_page = str_replace(self::JAVASCRIPT_TRIGGER, $this->_JavaScript, $this->_page);

          $tempFile = fopen('./static/temp.php', 'w+') or die('PHPGen: Unable to open temporary file!');
          fwrite($tempFile, $this->_page);
          fclose($tempFile);
      }

      // Return the finished page
      public function getPage()
      {
          return $this->_page;
      }
  }
?>
