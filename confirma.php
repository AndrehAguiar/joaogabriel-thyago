<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Jo&atilde;o Gabriel &amp; Thyago</title>
  
  
  <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/animate.min.css" rel="stylesheet"> 
<link href="css/animate.css" rel="stylesheet" type="text/css">
  <link href="css/font-awesome.min.css" rel="stylesheet">
  <link href="fonts/css/font-awesome.min.css" rel="stylesheet">
  <link href="fonts/css/font-awesome.css" rel="stylesheet">
  <link href="css/lightbox.css" rel="stylesheet">
  <link href="css/cabec.css" rel="stylesheet">
  <link href="css/news_rotator.css" rel="stylesheet">
  <link href="css/conteudo.css" rel="stylesheet" type="text/css" />
  <link href="css/adapta.css" rel="stylesheet" title="responsive" type="text/css">
  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
  <![endif]-->
  

<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
  <style>
  html{
	  overflow-x: hidden;
  }
  </style>
</head><!--/head-->

<body>
	  <!--.preloader-->
  <div class="preloader"> <i class="fa fa-circle-o-notch fa-spin"></i></div>
  <!--/.preloader-->
  
  <header id="topo" style=" z-index:1200; clear:both"">
	  	<!--.menu-->
	      	<?php include('pages/menu.php');?>
	  <!--/.menu-->
        </div>
  </header>
  
  <?php if(isset($_GET["mensagem"]) == 'sucesso') { ?>
  <div id="sucesso" style="
    color: #7cc576;
    text-align:center;
    padding:15px;
    font-weight:600;
    margin-top:17%;
    margin-bottom:15%;"><h4 style="color:green; font-size:36px;"><i class="fa fa-envelope"> </i><br />
Agradecemos seu contato!</h4><br /><h3>
Entraremos em contato o mais breve possível.</h3>
<meta http-equiv="Refresh" content="5;URL=index.php" /></div>
  <?php }else{ ?>
  <div id="erro" style="
    color: red;
    text-align:center;
    padding:15px;
    font-weight:900;
    font-size:large;
    margin-top:17%;
    margin-bottom:15%;">
    
    <h4 style="color: red; font-size:36px;"><big><i class="fa fa-calendar-times-o"> </i></big></h4><br />
 Ocorreu algum erro, confirme os dados ou envie para contato@joaogabrielethyago.com.br
<meta http-equiv="Refresh" content="5;URL=index.php#contato" /></div>
	  <?php } ?>
    
     <hr style="margin:0px 0px;" />
     
        
      <footer id="footer">
       <!--.Rodape-->  
            <?php include('pages/footer.php'); ?>   
        <!--.Rodape--> 
    </footer>
    

  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
  <script type="text/javascript" src="js/jquery.inview.min.js"></script>
  <script type="text/javascript" src="js/wow.min.js"></script>
  <script type="text/javascript" src="js/mousescroll.js"></script>
  <script type="text/javascript" src="js/smoothscroll.js"></script>
  <script type="text/javascript" src="js/jquery.countTo.js"></script>
  <script type="text/javascript" src="js/lightbox.min.js"></script>
  <script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="js/responsiveCarousel.min.js"></script>
  <script type="text/javascript" src="js/main.js"></script>
  <script type="text/javascript" src="js/coundown-timer.js"></script>
  <script type="text/javascript" src="js/jquery.validate.min.js">
  </script>
  
  <script type="text/javascript">
$('#formulario').validate();
</script>
</body>
</html>