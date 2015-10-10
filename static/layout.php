<!DOCTYPE html>

<!-- PHPGen default layout page-->

<html>

<head>

  <!-- Trigger for page name and server name insertion -->
  <title>
    <!pageNameInsert> - <!serverNameInsert>
  </title>

  <!-- Trigger for CSS insertion -->
  <!CSSInsert>

</head>

<body>

  <!-- jQuery necessary for Ajax -->
  <script src="./js/jquery-2.1.1.js"></script>

  <!-- Div for inserting main HTML content -->
  <div id="main-cnt">

  </div>

  <script>
    // Load main HTML content with Ajax
    $('#main-cnt').html(
      'Loading...'
    );
    $.ajax({
      url: "./static/cnt_temp.php"
    }).done(function(data) {
      $('#main-cnt').html(
        data
      );

      //Inject any necessary JavaScript
      <!JavaScriptInsert>

    });
  </script>

</body>

</html>
