<script type="text/javascript">
   
    
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
        
        <span class="navbar-brand" onclick="openToggle()">
            <img src="img/logos/Cativo_15anos.png" />            
        </span>
        <div>
        <ul class="topnav aux" id="myTopnav" >
        <li>
        <a href="index.php" id="lkHome" target="_self">Principal</a></li>
        <li><a href="empresa.php" id="lkEmp" target="_self">Empresa</a></li>
        <li><a href="produtos.php" id="lkProd" target="_self">Produtos</a></li> 
        <li><a href="fornecedores.php" id="lkFor" target="_self">Fornecedores</a></li>
        <li><a href="catalogo.php" id="lkCat" target="_self">Catálogo</a></li>
        <li><a href="contato.php"  id="lkCont" target="_self">Contato</a></li>
        <li class="icon" style="font-size:15px;" onclick="openToggle()">       
            <i class="fa">&#xf0c9;</i>       
        </li>
        </ul>
        </div>
    
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