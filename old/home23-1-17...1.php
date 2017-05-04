<script type="text/javascript">
	$(document).ready(function() {
   $('#myModal').modal('hide');
});

	
	
</script>

<!--
<div id="myModal" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" style="background-color:transparent;">
    
      <img src="img\natal.png" class="imgNatal">
  
</div>
-->
<div align="center" class="container wellcome" >
<div class="row" style="padding-top:20px;" >

	<div class="col-md-5 " >
		<div class="row subR">
			<div class="col-md -12 col-xs-12 text-justify">
			Bem-vindo a <span class="cativo ">Cativo Comercial e Logística</span>, aqui você encontrará as melhores marcas e uma ampla variedade de produtos para seu automóvel.
			</div>
		</div>

		<div class="row subR">
			<div class="col-md -12 col-xs-12 imgC  " >
			<img src="img/Castrol_logo.png" >
				<br><span class="text-justify">Distribuidor Autorizado</span>
			</div>
		</div>	

		<div class="row subR">
			<div class="col-md -12 col-xs-12 " >
				<br><span class="text-justify">Sobre Castrol - a história</span>
				<br>
				<iframe src="https://www.youtube.com/embed/vMSREOh_PPU" frameborder="0" allowfullscreen width="220"></iframe>
				<br>
			</div>
		</div>	

		<div class="row subR">
		
			<div class="col-md -12 col-xs-12 text-justify"><br>
			<!-- texto exibido-->
			Castrol oferece lubrificantes para praticamente todas as aplicações privadas, comerciais e industriais. Os nossos lubrificantes para o sector automóvel incluem uma ampla gama de óleos  		
			<span class="pre-spoiler">
			<input id="xs" value="+" onclick="
				if (this.parentNode.parentNode.getElementsByTagName('span')[1].getElementsByTagName('span')[0].style.display != '') { 
					this.parentNode.parentNode.getElementsByTagName('span')[1].getElementsByTagName('span')[0].style.display = '';
					this.value = '-';
					this.title= 'Menos'; 
					this.innerText = '';		
					} else { 
					this.parentNode.parentNode.getElementsByTagName('span')[1].getElementsByTagName('span')[0].style.display = 'none'; 
					this.value = '+';
					this.title= 'Ler mais...'; }	
			" type="button" title="Ler mais..."> 
			</span>
			<span><!-- texto a exibir-->
			<span class="spoiler" style="display: none;">
			de transmissão manual e automática, lubrificantes cadeia e ceras, refrigerantes, fluidos de amortecimento, fluidos de freio, graxas, produtos de limpeza e produtos de manutenção. Nós também fabricamos e fornecemos produtos para máquinas agrícolas, plantas e indústria em geral, bem como para a navegação. Todos os nossos produtos têm um status de registro global de produtos químicos e atendem aos requisitos regulamentares, sempre que o produto é utilizado.	
			</span>
			</span>
			</div>
		</div>

		<div class="row subR">	
			<div class="col-md-4 col-sm-4 col-xs-12  imgC " >
			<a href="img/cast-caca-bueno.png" data-lightbox="cbueno">
					<img src="img/cast-caca-bueno.png" ></a>
			</div>
			<div class="col-md-8 col-sm-8 col-xs-12  text-left" >
			<br>Mais que óleo, engenharia líquida.
			'CASTROL MAGNATEC garante proteção e alta perfórmance desde o momento da partida.'
			</div>
		</div><!-- row-->
		<hr>
		
		<div class="row subR">	
			<div class="col-md-4 col-sm-4 col-xs-12   imgC" >	
			<a href="img/nasa.jpg" data-lightbox="nasa">
				<img src="img/nasa.jpg" ></a>
			</div>
			<div class="col-md-8 col-sm-8 col-xs-12  text-left" >
				<br>O inovador lubrificante CASTROL INDUSTRIAL
				lubrifica as rodas do sucesso da NASA. Conhecido como Castrol Braycode 601 EF.
			</div><!--col  -->
		</div>	<!-- row-->	
		<hr>
	</div><!--col 5 -->
	<div class="col-md-7 " ><!--col 5 principal-->
		<div class="row subR">	<!--sub row -->	
		<?php include "slider-home.html" ?>
		
		</div>
		
		<div class="row subR">
			<div class="col-md-12 evDesc">
					<h4 class="color">Eventos</h4>
					
			</div>	
		</div>
		<div class="row subR">	
			
			<div class="col-md-3 col-sm-6 col-xs-6 evDesc">		
				<div class=" imgC" >
					<a href="eventos/inauguracao/inauguracao.html" target="blank">		
					<img src="eventos/inauguracao/data1/images/29.jpg" >
					</a><br>
					<span class="text-center">Sede da Cativo</span>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 col-xs-6 evDesc">	
				<div class=" imgC" >
					<a href="eventos/mahle/mahle.html" target="blank">		
					<img src="eventos/mahle/data1/images/01.jpg" >
					</a><br>
					<span class="text-center">Mahle/ Metal Leve</span>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 col-xs-6 evDesc">	
				<div class=" imgC" >
					<a href="eventos/jae/jae.html" target="blank">
					<img src="eventos/jae/data1/images/jae.jpg"  >
					</a><br>
					<span class="text-center">Inaugura&ccedil;&atilde;o J&aacute; &eacute; Motos</span>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 col-xs-6 evDesc">
				<div class=" imgC" >
					
				</div>
			</div>
		</div>
		<div class="row subR" ><!-- eventos-->
			
			<div class="col-md-3 col-offset-1 col-sm-6 col-xs-6 evDesc">	
				<div class=" imgC" >
					<a href="eventos/cdl/cdl.html" target="blank">		
					<img src="eventos/cdl/data1/images/1.jpg" >
					</a><br>
					<span class="text-center">Feijoada CDL</span>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 col-xs-6 evDesc">	
				<div class=" imgC" >
					<a href="eventos/box7/box7.html" target="blank">
					<img src="eventos/box7/data1/images/box_1.jpg"  >
					</a><br>
					<span class="text-center">Box7-Palestra Dudu Costa</span>
				</div>
			</div>	
			<div class="col-md-3 col-sm-6 col-xs-6 evDesc">	
				
			</div>			
		</div>

	</div>

</div><!-- row -->	

<br>
	<div class="row subR"><!--linha lançamentos -->
		<div class="col-md-12 ">
			<h4 class="news">Lan&ccedil;amentos</h4>
			<span class="text-center">Clique nas marcas abaixo e visualize seus produtos</span><br />
		</div>	           	
	</div>
	<div class="row subR">

		<div class="col-md-2 col-sm-2 col-xs-6   imgC" >
		</div>	
		<div class="col-md-2 col-sm-2 col-xs-6   imgC" >
			<a href="lancamento/cobreq.pdf" target="_blank">
			<img src="img/logos/fornec/cobreq.png" alt="" width="150" border="0" /></a>
		</div>
		<div class="col-md-2 col-sm-2 col-xs-6   imgC" >
			<a href="lancamento/wega.pdf" target="_blank">
			<img src="img/logos/fornec/wega.png" width="120"  /></a>
		</div>
	</div>
</div><!-- container -->



	




		