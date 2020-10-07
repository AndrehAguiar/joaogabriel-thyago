    <!-- Bootstrap Core CSS -->

    <!-- Custom CSS -->
    <link href="css/simple-sidebar.css" rel="stylesheet">
  <link href="fonts/css/font-awesome.min.css" rel="stylesheet">
  <link href="fonts/css/font-awesome.css" rel="stylesheet">
    
  
  <style type="text/css">
  html, body{
	  margin:0;
  }
  		#fb-root{
			width:250px;
			position: relative;
			top:0px;
			z-index:1800;
			margin:0 0;
			padding:0 0;
    z-index: 1800;
		}
  		.fb-page{
			width:250px;
			height:600px;
			left:0px;
			right:0px;
			z-index:1900;
			clear:both;
			}
		 #wrapper{
			 height:500px;
			position: fixed;
			max-width:220px;
			min-width:0px;
			margin-top:0px;
			bottom:0px;
			z-index:1900;
			box-shadow: 2px 2px 15px #000000;
  -webkit-box-shadow: 2px 2px 15px #000000;
  -moz-box-shadow: 2px 2px 15px #000000;
  -o-box-shadow: 2px 2px 15px #000000;
  
		 }
		 #sidebar-wrapper{
			 width:250px;
			 clear:both;
	  overflow:hidden;
		 }
		 #side-toggled{
			z-index:300;
			 margin-left:-50px;
			 margin-right:-85px;
			 bottom:600px;
			 -ms-transform: rotate(90deg); /* IE 9 */
    			-webkit-transform: rotate(90deg); /* Chrome, Safari, Opera */
    				transform: rotate(90deg);
  background-color:#000;
		 }
		.side_btn{ height:450px; margin-left:0px; margin-top:-455px; z-index:2000;}
@media(max-width:668px){

		 #wrapper{
			 height:400px;
			 width:220px; 
			 margin-left:0px;
			 padding-left:220px;
		 }
		 #wrapper.fechado{
			 width:0px;
			 padding-left:0px;
			 margin-left:0px;

  
		 }
		 #sidebar-wrapper{
			 max-width:220px;
			 margin-left:-220px;
			 padding-left:-220px;
			 }
		 .side_btn{
			 margin-top:-360px;
			 margin-left:0px;
		 }
		 #side-toggled{
			 margin-left:-50px;
			 margin-right:-105px;
		 }
  		#fb-root{
			
			position: relative;
			top:0px;
			z-index:1800;
			margin:0 0;
			padding:0 0;
    z-index: 1800;
		}
  		.fb-page{
			
			max-width:219px;
			max-height:400px;
			}		 
		 }
  </style>


<script>
(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.8&appId=112109782641258";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>

<div class="fechado" id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
        
  <div id="fb-root">
  
    <div  id="fb-page" class="fb-page" data-href="https://www.facebook.com/joaogabrielethyagofanpage" data-tabs="timeline" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
    <blockquote cite="https://www.facebook.com/joaogabrielethyagofanpage" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/joaogabrielethyagofanpage">João Gabriel &amp; Thyago</a></blockquote></div></div>
        </div>
        <!-- /#sidebar-wrapper -->
        <div class="side_btn">
                        <a href="#side-toggled" class="btn" id="side-toggled" style="background-color:#000; color:#FFF;"><i class="fa fa-facebook-official"> </i></h3><font face="Montserrat" size="+1"> facebook</font></a>
                        
	</div>
                        
	</div>
    
    <!-- jQuery -->
<script src="js/jquery.js"></script>

<script>
    $("#side-toggled").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("fechado");
    });
    </script>
