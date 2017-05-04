<!DOCTYPE html>
 <html  lang="pt-br" class="no-js"> 
   
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
		function bgAnimate(){
		$('body').addClass("bg-animate");
		}
		function changeBackGround(img) {
		document.getElementById('body').style.backgroundImage="url('"+ img +"')";
	}
	</script>
	
    </head>
	
<body id="body" class="bg-animate">
<?php include "header.php" ?> 

		<section id="home" class="bg-one">	    
			<?php include ('home.php');  ?>
		</section>
		
		<section id="about" class="bg-two">
			 <?php include ('empresa.php'); ?>
		</section>
		
		<section id="produtos" class="bg-one">
			<?php include ('produtos.php'); ?>
		</section>

		<section id="fornec" class="bg-two">
			<?php include ('fornecedores.php');  ?>
		</section>   

		<section id="catalogo" class="bg-one">
			<?php include ('catalogo.php');  ?>
		</section> 
		
		<section id="contato" class="bg-two">
			<?php include ('contato.php');  ?>			
		</section>
		
		<section id="foot" class="bg-f">
			<?php include ('footer.php');  ?>			
		</section>        	
</body >
	<?php include "metaJS.php" ?>
</html>