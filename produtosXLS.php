<?php
    /*
if(file_exists('chache-prod.cache')){ //verificar se cache existe
       require 'chache-prod.cache'; //carréga-o
}else{
     ob_start();              //inicia  sessão  que gravará na memória o conteúdo, não exibí-lo.
    */ 
     
require_once 'Classes/PHPExcel.php';
// iniciar o objecto para leitura
// definir a abertura do ficheiro em modo só de leitura
$objReader = new PHPExcel_Reader_Excel5();
$objReader->setReadDataOnly(true);
$objPHPExcel = $objReader->load("tbprodutos.xls");
$objPHPExcel->setActiveSheetIndex(0);
$Rows = $objPHPExcel->setActiveSheetIndex(0)->getHighestRow();

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
         <ul class="produto-filter text-center">
                <li>
                <a class="btn btn-default active" href="#" data-filter="*">
                Categorias-></a></li>
                <li>
                <a class="btn btn-default" href="#" data-filter=".aditivo">
                Aditivos</a></li>
                <li>
                <a class="btn btn-default" href="#" data-filter=".filtro">
                Filtros</a></li>                
                <li>
                <a class="btn btn-default" href="#" data-filter=".oleo">
                Óleos</a></li>
                <li>
                <a class="btn btn-default" href="#" data-filter=".lona">
                Lonas Freio</a></li>
                <li>
                <a class="btn btn-default" href="#" data-filter=".palheta">
                Palheta</a></li>                
               <li>
               <a class="btn btn-default" href="#" data-filter=".limpeza">
                Limpeza</a></li>                
               <li>
               <a class="btn btn-default" href="#" data-filter=".pastilha">
                Pastilha</a></li>                
               <li>
               <a class="btn btn-default" href="#" data-filter=".vela">
                Vela</a></li>                
               <li>
               <a class="btn btn-default" href="#" data-filter=".aromatizante">
                Aromatizante</a></li>                
               <li>
               <a class="btn btn-default" href="#" data-filter=".estopa">
                Estopa</a></li> 
                <li>
               <a class="btn btn-default" href="#" data-filter=".fluido">
                Fluido</a></li>
               <li>
               <a href="catalogo/catalogoCativo.pdf" target="blank" class="btn btn-default" title="Catálogo" >..<i class="fa fa-newspaper-o" aria-hidden="true"></i>..
                </a></li>
            </ul>

            <div class="row subR">
                <div class="produto-items">
                <?php
                // navegar na linha
for($linha=2; $linha<=$Rows; $linha++){
    // pegar valores das colunas
    $cod=($objPHPExcel->getActiveSheet()->getCell('A'.$linha)->getValue());
    $descr=($objPHPExcel->getActiveSheet()->getCell('B'.$linha)->getValue());
    $foto=($objPHPExcel->getActiveSheet()->getCell('A'.$linha)->getValue());
    $cat=($objPHPExcel->getActiveSheet()->getCell('C'.$linha)->getValue());
      ?>
 <div class="produto-item <?php echo $cat ?> col-md-2 col-sm-3 col-xs-3 ">
    <div class="recent-work-wrap">    
        <img class="img-responsive" src="img/produtos/pq/<?php echo $foto.'.jpg' ?>" alt="">
        <div class="overlay">
            <div class="recent-work-inner"> 
                <a class="preview" href="img/produtos/full/<?php echo $foto.'.jpg' ?>" rel="prettyPhoto"><h4 style="text-align:center;">
                <?php echo strtoupper($cat) ?> </h4>
                <span style="font-family: Arial"><?php echo strtoupper($descr) ?></span>
                <br /><i class="fa fa-eye"></i>Ver</a>
            </div> 
        </div>
        
    </div>
</div><!-- col -->
                    <?php
                   
            } 
                 ?>   
<div class="produto-item  col-md-2 col-sm-3 col-xs-3 aditivo filtro oleo lona palheta limpeza pastilha vela aromatizante estopa fluido">
    <div class="recent-work-wrap">       
    <img class="img-responsive" src="img/mais.jpg ">           
        <div class="overlay">
            <div class="recent-work-inner"> 
                <h3 style="text-align:center;">                                           
                <a class="preview" href="catalogo/catalogoCativo.pdf" target="blank">Catálogo</a></h3>
            </div> 
        </div>
        
    </div>
</div><!-- col -->                 

                </div>
            </div><!-- row -->
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

<?php
/*
   $prod= ob_get_contents();  // variável recebe o conteúdo  carregado.
  ob_end_clean();             //  finaliza a sessão de registro ob 
file_put_contents('chache-prod.cache',$prod);   // grava conteúdo em cache
echo $prod;                   //exibe variável que foi gravada no cache.
}*/
?>