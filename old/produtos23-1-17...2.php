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
         <ul class="produto-filter text-center">
                <li><a class="btn btn-default active" href="#" data-filter="*">
                Todos</a></li>
                <li><a class="btn btn-default" href="#" data-filter=".aditivo">
                Aditivos</a></li>
                <li><a class="btn btn-default" href="#" data-filter=".filtro">
                Filtros</a></li>                
                <li><a class="btn btn-default" href="#" data-filter=".oleo">
                Óleos</a></li>
                <li><a class="btn btn-default" href="#" data-filter=".lona">
                Lonas Freio</a></li>
                <li><a class="btn btn-default" href="#" data-filter=".palheta">
                Palheta</a></li>               
                <li><a class="btn btn-default" href="#" data-filter=".limpeza">
                Limpeza</a></li>
            </ul>

            <div class="row subR">
                <div class="produto-items">
                
                <?php                
                $sql="select * from tbprodutos";
                $sql=$pdo->query($sql);

                if ($sql!=null) 
                {
                    foreach ($sql->fetchAll() as $p) 
                    {
                    ?>

                     <div class="produto-item <?php echo $p['cat'] ?> col_md_2 col_xs_6 col_sm_4 ">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="img/produtos/full/<?php echo $p['foto'] ?>" 
                            alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">                                    
                                    <span class="text-center">
                                    <?php echo substr($p['foto'], 0,strlen($p['foto'])-4) ?><br>
                                    <?php echo ucfirst(strtolower($p['descr'])) ?></span><br>
                                    <a class="preview" href="img/produtos/full/<?php echo $p['foto'] ?>" rel="prettyPhoto" data-lightbox="imgP"><i class="fa fa-eye"></i> Ver</a>
                                </div> 
                            </div>
                        </div>
                    </div>
                    <?php
                    }
                }
                   
                 ?>  

                </div>
            </div>
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