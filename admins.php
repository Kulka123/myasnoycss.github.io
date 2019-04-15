<?php include "config.php"; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Админы сервера</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="keywords" content="<?echo $defkey;?>">
    <meta name="description" content="<?echo $defdesc;?>">
    <meta name="robots" content="index,follow">
    <meta name="generator" content="<?echo $version ;?>" />
<meta name="author" content="<?echo $author;?>" />


    <!-- Le styles -->
    <link href="/main/css/bootstrap.css" rel="stylesheet">
    <link href="/main/css/bootstrap.css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="/wp-content/themes/clear-theme/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
                                   <link rel="shortcut icon" href="/wp-content/themes/clear-theme/img/favicon.png">
  </head>

  <body>


<?php
# Header
require_once "include/header.php"; 
?>
    

    <div class="container-fluid">
      <div class="row-fluid">
       <div class="col-lg-3">
<?php
# Left Block
require_once "include/leftblock.php"; 
?>
        </div><!--/col-lg-->

         <div class="col-lg-9">
          <?php
# Admins
require_once "modules/admins/content.php"; 
?>
        </div><!--/col-lg-9-->
      </div><!--/row-->
    </div><!--/.fluid-container-->

    <div class="container-fluid">
      <hr>
      <footer>
<?php
# Footer
require_once "include/footer.php"; 
?>
      </footer>
</div>

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="/main/js/bootstrap.min.js"></script>

  </body>
</html>