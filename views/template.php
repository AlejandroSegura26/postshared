<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />        
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/metismenu.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/style.css" rel="stylesheet" type="text/css" />

        <script src="assets/js/modernizr.min.js"></script>   
    </head>
    <body>
  


						<?php
						$mvc = new MvcController();
						$mvc -> enlacesPaginasController();
						?>
    
         <!-- jQuery  -->
         <script src="views/modules/assets/js/jquery.min.js"></script>
        <script src="views/modules/assets/js/popper.min.js"></script>
        <script src="views/modules/assets/js/bootstrap.min.js"></script>
        <script src="views/modules/assets/js/metisMenu.min.js"></script>
        <script src="views/modules/assets/js/waves.js"></script>
        <script src="views/modules/assets/js/jquery.slimscroll.js"></script>

        <!-- App js -->
        <script src="views/modules/assets/js/jquery.core.js"></script>
        <script src="views/modules/assets/js/jquery.app.js"></script>

        <!-- Flot chart -->
        <script src="plugins/flot-chart/jquery.flot.min.js"></script>
        <script src="plugins/flot-chart/jquery.flot.time.js"></script>
        <script src="plugins/flot-chart/jquery.flot.tooltip.min.js"></script>
        <script src="plugins/flot-chart/jquery.flot.resize.js"></script>
        <script src="plugins/flot-chart/jquery.flot.pie.js"></script>
        <script src="plugins/flot-chart/jquery.flot.crosshair.js"></script>
        <script src="plugins/flot-chart/curvedLines.js"></script>
        <script src="plugins/flot-chart/jquery.flot.axislabels.js"></script>
        
        <script src="plugins/jquery-knob/jquery.knob.js"></script>

        <!-- Dashboard Init -->
        <script src="views/modules/assets/pages/jquery.dashboard.init.js"></script>    
    </body>
</html>
    