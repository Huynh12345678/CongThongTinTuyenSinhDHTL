<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url();?>asset/vendor/reset.css">
    <link rel="stylesheet" href="<?php echo base_url();?>asset/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url();?>asset/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>asset/vendor/owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>asset/vendor/owlcarousel/owl.theme.default.min.css">
    <title>lienhe</title>
</head>
<body>
    <div id="wrapper">
        <?php 
            include("header-lienhe.php");
            include("main-lienhe.php");
            include("footer.php");
        ?>

    </div>
    <script src="<?php echo base_url();?>asset/vendor/jquery.min.js"></script>
    <script src="<?php echo base_url();?>asset/vendor/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>asset/font/a076d05399.js"></script>
    <script src="<?php echo base_url();?>asset/vendor/owlcarousel/owl.carousel.js"></script>
    <script src="<?php echo base_url();?>asset/js/script.js"></script>
</body>
</html>