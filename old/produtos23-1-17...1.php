<?php
require 'conect.php'; 
?>
<!DOCTYPE html>
 <html class="no-js" lang="pt-br"> 
   
    <head>
    <title>Cativo Comercial e Logística</title>
     <?php include 'meta.php';
    ?>	

    <link href="produtos/responsive.css" rel="stylesheet">
    <link href="produtos/animate.min.css" rel="stylesheet">
    <link href="produtos/prettyPhoto.css" rel="stylesheet">
    <link rel="stylesheet" href="css/lightbox.css" />
    <link rel="stylesheet" href="css/lightbox.min.css" />
   

</head>
<body>
<?php include "header.php" ?> 
<div class="container" >
	<section id="produto">
        <div class="container">
         <div id="cat" class="col-md-9 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-12 ">   
         <a href="catalogo/catalogoCativo.pdf" target="blank"> <h1>
        <br><br><br><i class="fa fa-newspaper-o" aria-hidden="true"></i>
        Cat&aacute;logo.</h1></a><br><br><br><br><br><br><br>
        </div>
    </section>
	
    <!-- jQuery (necessary for almoxarifado's JavaScript plugins) -->
    
    <script src="produtos/jquery.prettyPhoto.js"></script>
    <script src="produtos/jquery.isotope.min.js"></script>   
    <script src="produtos/wow.min.js"></script>
	<script src="produtos/main.js"></script>
</div><!--container -->			

<div align="center"  >
	<?php  include('promocao.php'); ?>
</div>

</div> <!--container principal-->

</body>
<section id="foot" class="bg-f">
	<?php include ('footer.php');  ?>			
</section>
<?php include "metaJS.php"; ?>
</html>