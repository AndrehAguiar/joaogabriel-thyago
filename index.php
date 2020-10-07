<?php
if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "form1")) {
  $updateGoTo = "http://www.joaogabrielethyago.com.br/?data=atualizada#agenda";
  if (isset($_SERVER['QUERY_STRING'])) {
  }
  header(sprintf("Location: %s", $updateGoTo));
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="images/favicon/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">
  
  <title>Jo&atilde;o Gabriel &amp; Thyago</title>
  
  <link rel="apple-touch-icon" sizes="57x57" href="images/favicon/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="images/favicon/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="images/favicon/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="images/favicon/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="images/favicon/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="images/favicon/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="images/favicon/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="images/favicon/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="images/favicon/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192"  href="images/favicon/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="images/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="images/favicon/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="images/favicon/favicon-16x16.png">
  <link rel="manifest" href="images/favicon/manifest.json">
  <link href="fonts/css/font-awesome.min.css" rel="stylesheet">
  <link href="fonts/css/font-awesome.css" rel="stylesheet">  
  <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/animate.min.css" rel="stylesheet"> 
  <link href="css/animate.css" rel="stylesheet" type="text/css">
  <link href="css/font-awesome.min.css" rel="stylesheet">
  <link href="css/lightbox.css" rel="stylesheet">
  <link href="css/cabec.css" rel="stylesheet">
  <link href="css/news_rotator.css" rel="stylesheet">
  <link href="css/conteudo.css" rel="stylesheet" type="text/css" />
  <link href="css/adapta.css" rel="stylesheet" title="responsive" type="text/css">
  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
  <![endif]-->
  <link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
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
  <div class="preloader"> <i class="fa-li fa fa-spinner fa-spin"></i></div>
  <!--/.preloader-->
  
  <header id="topo" style=" z-index:2200; clear:both">
	  <!--.slider-->
  		<?php include ('pages/cabecalho.php');?>
	  <!--/.slider-->
   	    <div class="main-nav" style=" z-index:2200; clear:both">
	  	<!--.menu-->
	      	<?php include('pages/menu.php');?>
	  <!--/.menu-->
        </div>
  </header>
        
    
  <div style="z-index:1900; clear:both;">
  <?php include('pages/face.php'); ?>
        </div>
          
   <section id="home" style="background-image:url(images/slider/bg8.jpg);
	  background-size: cover;
	  background-repeat: no-repeat;
	  background-position: center;
	  background-attachment: fixed; z-index:300; clear:both;">
	  	<!--#Noticias-->
	      	<?php include('pages/novidades.php');?>
	  <!--/#Noticias-->
  </section>  
        
    
  <section class="main-section team" id="biografia" style="background-image:url(images/slider/bg6.jpg);
	  background-size: cover;
	  background-repeat: no-repeat;
	  background-position: center;
	  background-attachment: scroll; z-index:550; padding:100px 0;">
	  	<!--.biografia-->
	      	<?php include('pages/biografia.php');?>
	  <!--/.biografia-->
  </section> 
       
                
	  <section id="albuns" style="background-image:url(images/slider/bg3.jpg);
		  background-size: cover;
		  background-repeat: no-repeat;
		  background-position: center;
		  background-attachment: fixed;z-index:500;">
	  	<!--.Álbuns-->
	      	   <?php include('pages/albuns.php');?>
    		<!--/.Álbuns-->
  	</section>  
    
  
	  	
    <section id="clube" class="parallax" style="z-index:520;background-image:url(images/slider/bg7.jpg);
	  background-size: cover;
	  background-repeat: no-repeat;
	  background-position: center;
	  background-attachment: fixed;z-index:500; padding-top:10%;">
      <!--#Fã Clube-->
	      	<?php include('pages/clube.php');?>
      <!--/#Fã Clube-->
    </section>
    
  <section id="galeria" style="background-image:url(images/slider/bg7.jpg);
	  background-size: cover;
	  background-repeat: no-repeat;
	  background-position: center;
	  background-attachment: fixed;z-index:500;">
  	<!--.Galeria--> 
    	<?php include ('pages/galeria.php');?>
	<!--/#Galeria-->
 </section>
 
    <section class="agenda clearfix" id="agenda" style="background-image:url(images/slider/bg4.jpg);
	  background-size: cover;
	  background-repeat: no-repeat;
	  background-position: center;
	  background-attachment: fixed; z-index:510; padding:0 0;">
  	<a name="agenda"></a>
       <!--.Agenda-->  
            <?php include('pages/agenda.php'); ?>   
        <!--.Agenda--> 
       </section>
        
       <section class="main-section contato clearfix" id="contato" style="background-image:url(images/slider/bg2.jpg);
	  background-size: cover;
	  background-repeat: no-repeat;
	  background-position: center;
	  background-attachment: fixed; z-index:620; padding:0px 10px 30px 0px;">
       <a name="contato"></a>
       		<!--.Contato-->  
            	<?php include('pages/contato.php'); ?>   
        	<!--.contato-->
   	 </section><!--/#contact-->  
    

    
     <hr style="margin:0px 0px;" />
     
        
      <footer id="footer" style="clear:both;">
       <!--.Rodape-->  
            <?php include('pages/footer.php'); ?>   
        <!--.Rodape--> 
    </footer>
    
    
    <script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>

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
    var i = $("#resultado").html();
jQuery(function($) {
			
			$("#countdown").countdown({        	
					date: i,
					format: "on",
				},
			$("#resultado").change(function(u){
				u.preventDefault(i);	
				i = $('#novaData').val();
				$("#resultado").html(i);
					// callback function				
			})
		);
	});
	$("#formulario").submit(function(e) {
			e.preventDefault(i);	
			i = $('#novaData').val();
			$("#resultado").html(i);
    	});
</script>
  
  <script type="text/javascript">

	var  sprytextfield1 = new Spry.Widget.ValidationTextField("fixo", "phone_number", {format:"phone_custom", pattern:"XX-XXXX-XXXX", hint:"__-____-____", useCharacterMasking:true});

$.validator.addMethod('fixo', function (value, element) {
    return this.optional(element) || /^\d{2}-\d{4}-\d{4}$/.test(value);
}, "Por favor, informe um telefone v&aacute;lido!");

$.validator.addClassRules('fixo', {
    customphone: true
});

	var  sprytextfield2 = new Spry.Widget.ValidationTextField("celular", "phone_number", {format:"phone_custom", pattern:"XX-XXXXX-XXXX", hint:"__-_____-____", useCharacterMasking:true
	});

$.validator.addMethod('celular', function (value, element) {
    return this.optional(element) || /^\d{2}-\d{5}-\d{4}$/.test(value);
}, "Por favor, informe um telefone v&aacute;lido!");

$.validator.addClassRules('celular', {
    customphone: true
});
</script>
  <script type="text/javascript">
$(function(){
  $('.crsl-items').carousel({
    visible: 3,
    itemMinWidth: 180,
    itemEqualHeight: 370,
    itemMargin: 9,
  });
  
  $("a[href=#]").on('click', function(e) {
    e.preventDefault();
  });
});
</script>
<script>
$('#form').validate();
$('#cadastro').validate();
$('#cadastro').on("submit", function(){
 var imgVal = $('[type=file]').val();
        if (imgVal == '') {
            alert("Gentileza enviar uma foto para seu perfil!");
            return false;
        }
});
$("#file").on('change', function () {
    if (typeof (FileReader) != "undefined") {
 
        var image_holder = $("#image-holder");
        image_holder.empty();
 
        var reader = new FileReader();
        reader.onload = function (e) {
            $("<img />", {
                "src": e.target.result,
                "class": "thumb-image"
            }).appendTo(image_holder);
        }
        image_holder.show();
        reader.readAsDataURL($(this)[0].files[0]);
    } else{
        alert("Este navegador nao suporta FileReader.");
    }
});
</script>
</body>
</html>