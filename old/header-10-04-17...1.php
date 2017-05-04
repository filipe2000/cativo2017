<script type="text/javascript">
   jQuery(document).ready(function($) 
   { 
    $(".sc").click(function(event)
    {        
        event.preventDefault();
        $('html,body').animate({scrollTop:$(this.hash).offset().top}, 900);
    });    
   });
    function HideTogle(){//fechar menu
    if (screen.width <= 767){//saber tamanho da janela, pois exibe toggle       
             $("#btToggle").click();
    }
   
    function openToggle() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {//fechado
        x.className += " responsive";//aberto

    } else {
        x.className = "topnav";
            }
    }
</script>
<style type="text/css">
    .topnav{
        margin-top: 25px;
    }
   .topnav > li > a {
    color: #000;
    font-size: 20px; 
    line-height: 50px;
    margin: -12px 25px 0px 0px;    
    }
    ul.topnav li a {
  display: inline-block;
  text-align: center;  
  }
  ul.topnav li {float: left;}

    ul.topnav li.icon {display: none;}

@media screen and (max-width:767px) {
    .topnav > li > a:hover{
        background: transparent !important;
    }    
    .col1{
        float: left;
        width: 70%;
        text-align: center;
    }
    .col2{
        float: right;
        width:30%;
    }
  ul.topnav li{
    display: none;
    }
  ul.topnav li.icon {
    float: right;
    display: inline-block;
    font-size:30px !important;
    color:#0000ff;
    margin-right: 15px;
    margin-bottom: 15px;
  }


  ul.topnav.responsive {position: relative;}
  ul.topnav.responsive li.icon {
    position: absolute;
    right: 0;
    top: 0;    
  }
  ul.topnav.responsive li {
    float: none;
    display: inline;
  }
  ul.topnav.responsive li a {
    display: block;
    text-align: left;
    font-size: 12px;
  }
}
</style>

<header id="navigation" class="navbar navbar-inverse">
<div class="container" > 
    <div class="row subR">
        <div class="col1">
        <span class="navbar-brand" onclick="openToggle()">
            <img src="img/logos/Cativo_15anos.png" />            
        </span>
        </div>
               
        <div class="col2">        
        <ul class="topnav aux" id="myTopnav" >
        <li><a href="#body" id="lkHome" class="sc">Principal</a></li>
        <li><a href="#about" id="lkEmp" class="sc">Empresa</a></li>
        <li><a href="#produtos" id="lkProd" class="sc" >Produtos</a></li> 
        <li><a href="#fornec" id="lkFor" class="sc" >Fornecedores</a></li>
        <li><a href="#catalogo" id="lkCat" class="sc">Catálogo</a></li>
        <li><a href="#contato"  id="lkCont" class="sc">Contato</a></li>
        <li class="icon" style="font-size:15px;" onclick="openToggle()">       
            <i class="fa">&#xf0c9;</i>       
        </li>
        </ul>
       
        </div><!-- div col -->
    </div><!--row -->         
</div>
</header>               

<!--
<header id="navigation" class="navbar navbar-inverse">
<div class="container">
    <div class="navbar-header">               
		
        <span class="navbar-brand" onclick="HideTogle()">
			<img src="img/logos/Cativo_15anos.png" />            
		</span>
		
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse" id="btToggle">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
       
    </div>

<div class="collapse navbar-collapse navbar-right" id="navColl" onclick="HideTogle()">
<div class="portfolio-filter clearfix">
    <ul id="nav" class="nav navbar-nav">
        <li><a href="index.php" id="lkHome" target="_self">Principal</a></li>
        <li><a href="empresa.php" id="lkEmp" target="_self">Empresa</a></li>
        <li><a href="produtos.php" id="lkProd" target="_self">Produtos</a></li> 
        <li><a href="fornecedores.php" id="lkFor" target="_self">Fornecedores</a></li>
        <li><a href="catalogo.php" id="lkCat" target="_self">Catálogo</a></li>
        <li><a href="contato.php"  id="lkCont" target="_self">Contato</a></li>
    </ul>
</div>  
</div>	
</div>
</header>
-->