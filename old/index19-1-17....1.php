<!DOCTYPE html>
 <html class="no-js" lang="pt-br"> 
   
    <head>
    <title>Cativo Comercial e Logística</title>	
    <?php include 'meta.php' ?>	
	
	<!--
	<link rel="stylesheet" href="css/Flickity.css">
	<script src="js/Flickity.js"></script> 
	-->
	<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		
		  ga('create', 'UA-54152927-1', 'auto');
		  ga('send', 'pageview');
	

		$(document).ready(function() {
		  setTimeout('$("#loader").fadeOut(100);', 5000);
		});
		

		$(document).ready(function() {
	   $('#myModal').modal('show');
	});
		$(document).ready(function(){
			$("#lkHome").focus();
		});

		function changeBackGround(img) {
		document.getElementById('body').style.backgroundImage="url('"+ img +"')";
	}
	</script>
	
    </head>
	
    <body id="body">
      <!--
		<div id="loading-mask" >
			<div class="cssload-loader">
				<div class="cssload-inner cssload-one"></div>
				<div class="cssload-inner cssload-two"></div>
				<div class="cssload-inner cssload-three"></div>
				
			</div>Loading...
		</div>		    
      

      <div style="/*background-image:url('img/universo.gif');" class="preload" id="loader">
      		<img src="img/universo.gif">

      </div>-->

        	<?php include "header.php"; 
        		  include "home.php";	?> 
</body >
<section id="foot" class="bg-f">
	<?php include ('footer.php');  ?>			
</section>
	
	<?php include "metaJS.php" ?>
</html>