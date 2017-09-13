<!DOCTYPE html>
 <html class="no-js" lang="pt-br"> 
<head>
	
	<link rel="stylesheet" href="css\slider3d.css">   	
	<script src="http://code.jquery.com/jquery-1.12.4.min.js"></script>
	<script src="js/slider3d.js"></script>
	<script type="text/javascript">
		

	</script>
	</head>

<body>

<div id="container" class="contForn"></div><!-- conteúdo -->


<div class="title">
<h2>Nossos <span class="color">Fornecedores</span></h2>
</div>
<div class="wrap" id="wrap" data-setting='{								
							 	"firstPicWidth":640,
						 		"firstPicHeight":270,
							 	"scale":0.9,
							 	"speed":600
									}'>
		<div class="gg_left gg_btn"></div>
		<div class="gg_right gg_btn"></div>
		<ul class="wrap_ul">
			<li class="li_item">
			<a href="http://www.avancohp.com.br/" target="_blank">
				<img src="img\logos\avancohp.png" name="avan" alt="" onmouseover="ShowForn(this.name)" onmouseout="HideForn()">
			</a>
			</li>
			<li class="li_item">
			<a href="http://www.bardahl.com.br/site/index.php" target="_blank"><img src="img\logos\bardahl.png" name="bar" alt="" onmouseover="ShowForn(this.name)" onmouseout="HideForn()">
			</a>
			</li>
			<li class="li_item">
			<a href="http://www.castrol.com/pt_br/brazil.html" target="_blank"><img src="img\logos\Castrol_logo.png" name="cast" alt="" onmouseover="ShowForn(this.name)" onmouseout="HideForn()">
			</a>
			</li>
			<li class="li_item">
			<a href="http://www.cobreq.com.br/site/" target="_blank">
				<img src="img\logos\cobreq.png" name="cob" alt="" onmouseover="ShowForn(this.name)" onmouseout="HideForn()">
			</a>
			</li>
			<li class="li_item">
			<a href="http://www.gauss.ind.br/" target="_blank">
				<img src="img\logos\gauss.png" name="gau" alt="" onmouseover="ShowForn(this.name)" onmouseout="HideForn()">
			</a>
			</li>
			<li class="li_item">
			<a href="http://www.scjohnson.com.br/" target="_blank">
				<img src="img\logos\johnson.png" name="john" alt="" onmouseover="ShowForn(this.name)" onmouseout="HideForn()">
			</a>
			</li>
			<li class="li_item">
			<a href="http://www.br.mahle.com/pt/" target="_blank">
				<img src="img\logos\metalleve.png" name="metall" alt="" onmouseover="ShowForn(this.name)" onmouseout="HideForn()">
			</a>
			</li>
			<li class="li_item">
			<a href="http://www.radiex.com.br/" target="_blank">
				<img src="img\logos\RADIEX.png" name="radi" alt="" onmouseover="ShowForn(this.name)" onmouseout="HideForn()">
			</a>
			</li>
			<li class="li_item">
			<a href="http://www.radnaq.com.br/" target="_blank">
				<img src="img\logos\RADNAQ.png"  name="rad" alt="" onmouseover="ShowForn(this.name)" onmouseout="HideForn()">
			</a>
			</li>
			<li class="li_item">
			<a href="http://www.wegamotors.com/" target="_blank">
				<img src="img\logos\wega.png" name="weg" alt="" onmouseover="ShowForn(this.name)" onmouseout="HideForn()">
			</a>
			</li>
		</ul>
		
	</div>
	<div class="text-center" id="passHover">
		Passe o mouse sobre o logotipo.
	</div>
		<div style="height: 200px">
			<p id="txtForn" class="text-center"></p>
		</div>
		
	
<script>
	$(function(){
		Carrousel.init($('#wrap'));
	});

	$(document).ready(function()
	{
		document.getElementById("txtForn").hidden=true;		
		document.getElementById("passHover").hidden=false;		
	});
	function HideForn()
	{
		document.getElementById("txtForn").hidden=true;
		document.getElementById("passHover").hidden=false;		
	}
	function ShowForn(nF)
	{
		var avanc="Lubrificantes Especiais";
		var bard="Óleos e Lubrificantes";
		var castr="Óleos e Lubrificantes";
		var cobr="Lonas, Pastilhas e Sapatas de Freio";
		var ga="Acessórios";
		var jho="Acessórios";
		var ml="Filtros";
		var rad1="Lubrificantes";
		var rad2=" Lubrificantes";
		var w="Filtros, Lubrificantes e Acessórios";
		document.getElementById("passHover").hidden=true;		
		switch(nF)
		{
			case 'avan' :
				document.getElementById("txtForn").hidden=false;				
				document.getElementById("txtForn").innerHTML=avanc;	
				break;
			case 'bar' :		
				document.getElementById("txtForn").hidden=false;						
				document.getElementById("txtForn").innerHTML=bard;	
				break;
			case 'cast' :				
				document.getElementById("txtForn").hidden=false;				
				document.getElementById("txtForn").innerHTML=castr;	
				break;
			case 'cob' :				
				document.getElementById("txtForn").hidden=false;				
				document.getElementById("txtForn").innerHTML=cobr	
				break;
			case 'gau' :
				document.getElementById("txtForn").hidden=false;						
				document.getElementById("txtForn").innerHTML=ga;	
				break;	
			case 'john' :
				document.getElementById("txtForn").hidden=false;						
				document.getElementById("txtForn").innerHTML=jho;	
				break;
			case 'metall' :				
				document.getElementById("txtForn").hidden=false;				
				document.getElementById("txtForn").innerHTML=ml;	
				break;
			case 'radi' :				
				document.getElementById("txtForn").hidden=false;				
				document.getElementById("txtForn").innerHTML=rad1;	
				break;
			case 'rad' :			
				document.getElementById("txtForn").hidden=false;					
				document.getElementById("txtForn").innerHTML=rad2;	
				break;
			case 'weg' :				
				document.getElementById("txtForn").hidden=false;				
				document.getElementById("txtForn").innerHTML=w;	
				break;										
		}
		
	}
</script>
<hr class="hr1" />
</body>   

</html>