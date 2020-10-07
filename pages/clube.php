<style type="text/css">
html, body{
	background-color:#000;
}
.botao{
	padding:5px 10px; 
	margin-top:0px; 
	background:#960; 
	color:#000;
	border-radius:3px;
	clear:both;
	font-weight:300;

}
.form-group i{
	position: static;
	float: right;
	font-size:35px;
	margin-right: 5px;
	margin-top: 5px;
	margin-left: auto;
	margin-bottom:-60px;
	color:#333;
	clear:both;
}
.form-group input{
	float:none;
	clear:both;
}
.inputfile {
  /* visibility: hidden etc. wont work */
  width: 0.1px;
  height: 0.1px;
  opacity: 0;
  overflow: hidden;
  position: relative;
  z-index: -1;
}
.fa_clube .cadastro{
	position:relative;
	float:left;
	padding:5px 7px;
	border:1px solid #555;
	border-radius:5px;
	color:#ccc;
	clear:both;
  	font-family: 'Open Sans', sans-serif;
  	text-transform:uppercase;
  	font-size:100%;
	font-weight:900;
	background:#222;
	text-shadown:1px 1px 2px #000;
}
.fa_clube label{
	float:left;	
	text-align:left;
}
.fa_clube .cadastro:hover { cursor:pointer;
	color:#000;
	background:#ccc;
	border:1px solid #000;
}
form.fa_clube h2{
	font-size:150%;
}
	h3{
		line-height:150%;
		margin-bottom:5px;
	}
#image-holder img{
	position:absolute;
	left:0px;
	top:0px;
	width:auto;
	max-width:78px;
	height:78px;
}
.fa-quote-right{ 
	right:20px;
	  position:absolute;
	   clear:both;
	    text-align:right;
		 font-size:200%;
		bottom:0%;
		
	}
.fa-quote-left{ 
	left:0px;
	 top:60%;
	  position:absolute;
	   clear:both;
	    text-align:left;
		 font-size:200%;
	}
.inputfile:focus + label {
  /* keyboard navigation */
  		outline: 1px dotted #000;
  		outline: -webkit-focus-ring-color auto 5px;
	}
	.inputfile + label * {
  		pointer-events: none;
	}
	.clube-icon img{
		width:78px;
		height:78px;
	}
form.fa_clube{
	width:100%;
	max-width:1000px;
	min-width:200px;
	height:auto;
	top:-130px;
	visibility:hidden;
	position:absolute;
	background:#000;
	padding-top:35px;
	padding-bottom:35px;
	z-index:5300;
	margin:0 auto;
	color:#fff;
}
.twitt{
	display:inline-block;
	margin:5px auto;
	height:10px;
	width:5%;
	max-width:65px;
	min-width:62px;
}
.social {
  margin-top: 15px;
}

.social ul {
  list-style: none;
  padding: 0;
  margin: 0;
}

.social ul li a {
  border-radius: 4px;
  line-height: 33px;
}

.social ul li a:hover {
  color: #fff;
}
.social ul li a.facebook:hover {
  background-color: #3b5999;
}
.social ul li a.twitter:hover {
  background-color: #2ac6f7;
}
.social ul li a.linkedin:hover {
  background-color: #036dc0;
}
.social ul li a.videos:hover {
  background-color:#F00;
}
.social ul li a.sound:hover {
  background-color: #ff6b00;
}
@media (max-width: 767px) {
	#image-holder{
		position:relative;
		margin:0px auto;
		bottom:20px;
	}
	
.inputfile {
		width:90%;
		position:relative;
		margin:0px auto;
	}
	
	#image-holder img{
	position:relative;
	margin-left:0px;
	margin-top:0px;
	margin-bottom:3px;
	width:78px;
	height:78px;
}
	.fa-quote-right{
		bottom:0%;
		 font-size:120%;
		
	}
	.fa-quote-left{
		left:20px;
	 	top:55%;
		 font-size:120%;
	}
	h2{
		line-height:150%;
		}
	form.fa_clube h2{
		line-height:90%;
		margin-bottom:5px;
		text-align:center;
		font-size:115%;
	}
	h3{
		line-height:150%;
		margin-bottom:5px;
	}
	hr{
		margin-bottom:10px;
	}
	form.fa_clube{
		min-width:250px;
		top:-100px;
		bottom:30px;
		margin:0px 0px;
		padding:0px 10px;
	}
	.clube-icon{
		top:0px;
	}
}
</style>

<script language="javascript">
var win = null;
function NovaJanela(pagina,nome,w,h,scroll){
	LeftPosition = (screen.width) ? (screen.width-w)/2 : 0;
	TopPosition = (screen.height) ? (screen.height-h)/2 : 0;
	settings = 'height='+h+',width='+w+',top='+TopPosition+',left='+LeftPosition+',scrollbars='+scroll+',resizable'
	win = window.open(pagina,nome,settings);
}
function MM_showHideLayers() { //v9.0
  var i,p,v,obj,args=MM_showHideLayers.arguments;
  for (i=0; i<(args.length-2); i+=3) 
  with (document) if (getElementById && ((obj=getElementById(args[i]))!=null)) { v=args[i+2];
    if (obj.style) { obj=obj.style; v=(v=='show')?'visible':(v=='hide')?'hidden':v; }
    obj.visibility=v; }
}
</script>
<div  style=" z-index:1200; background-color:#000; opacity: 0.65; padding-bottom:0px; padding-top:30px;">
     <div class="heading wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms" style=" z-index:1100;">
        <div class="row" style="width:100%; max-height:600px; z-index:1100; position:relative; clear:both; text-align:center;  margin-bottom:50px;">
          <div class="text-center col-sm-8 col-sm-offset-2">
            <h2>

            
            Compartilhe sua experi&ecirc;ncia
            
            
            </h2>
              
              <h3 id="hidden">
              Particepe do f&atilde; Clube e fique por dentro de nossas promo&ccedil;&otilde;es</h3>  
             <hr style="margin-bottom:10px;"/>  
          </div>
        </div>
      
      <div class="container" style="background:none; margin-top:-10%; height:auto;">
        <div class="row">
          <div class="col-sm-8 col-sm-offset-2">
            <div id="clube-carousel" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
              
              <i class="fa fa-quote-left"></i>
              
                <div class="item active wow fadeIn" data-wow-duration="1000ms" data-wow-delay="300ms">
            
                    <div class="clube-icon text-center">
                        <img src="images/clube/1.png"/><br />

                      <h4 style="text-align:center;">
                      
                      
                      F&atilde; 1
                      
                      
                      </h4><br />
                  <p>
                  
                  
                  Cadastre-se aqui para ficar por dentro das novidades e promo&ccedil;&otilde;es!
                  
                  
                  </p>
                  </div>
                </div>
                <div class="item fadeIn" data-wow-duration="1000ms" data-wow-delay="300ms">
                    <div class="clube-icon text-center">
                        <img src="images/clube/2.png"/><br />

                      <h4 style="text-align:center;">
                      
                      
                      F&atilde; 2
                      
                      
                      </h4><br />
                  <p>
                  
                  
                  Cadastre-se e concorra a pr&ecirc;mios. 
                  
                  
                  </p>
                  </div>
                </div>
                <div class="item fadeIn" data-wow-duration="1000ms" data-wow-delay="300ms">                          
                    <div class="clube-icon text-center">
                        <img src="images/clube/3.png"/><br />

                      <h4>
                      
                      
                      F&atilde; 3
                      
                      
                      </h4>
                  <p>
                  
                  
                  Concorra a pr&ecirc;mios durante o seu m&ecirc;s de anivers&aacute;rio.
                  
                  
                  </p>
                </div>
              </div>  
    
                    <i class="fa fa-quote-right"></i>                      
            </div> 
            <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
<link rel="me" href="https://twitter.com/thyago_joao"
>
<div class="twitt">
	<a class="twitter-share-button" href="https://twitter.com/intent/tweet">
Tweet</a></div>
<div class="twitt">
	<a class="twitter-follow-button" href="https://twitter.com/thyago_joao" data-show-count="false" data-show-screen-name="false">
Seguir</a>                
          </div>
             <hr />
            <a class="clube-left-control" href="#clube-carousel" role="button" data-slide="prev" style="margin-left:-30%;"><i class="fa fa-angle-left"></i></a>
      <a class="clube-right-control" href="#clube-carousel" role="button" data-slide="next" style="margin-right:-30%;"><i class="fa fa-angle-right"></i></a>
      
              <h3 style="line-height:100%; margin-top:-5px;">
<a href="#clube" class="botao" onclick="MM_showHideLayers('cadastro','','show','hidden','','hide')"> <i class="fa fa-pencil-square-o" ></i><big> <b>Cadastre-se Aqui</b></big></a>   
             
  		</h3> 
  		<br/>
  		
          <div class="social">
          <ul>
          
          <li><a class="facebook" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fjoaogabrielethyago.com.br%2F&amp;src=sdkpreparse', 
'facebook-share-dialog', 
'width=626,height=436'); 
return false;"><i class="fa fa-facebook"></i>
</a></li>
                  <li><a class="twitter" onclick="window.open('http://twitter.com/share?url=http://joaogabrielethyago.com.br/&text=#&via=#', 
'facebook-share-dialog', 
'width=626,height=436'); 
return false;"><i class="fa fa-twitter"></i></a></li>
                  
 
<li data-channelid="UCshv7gKCpD5wyLyt5czr2QQ"><a class="videos" onclick="window.open('https://www.youtube.com/channel/UCshv7gKCpD5wyLyt5czr2QQ', 
'facebook-share-dialog', 
'width=626,height=436'); 
return false;"><i class="fa fa-youtube"></i></a></li>

                  <li><a  onclick="window.open('http://soundcloud.com/naza-music-1', 
'facebook-share-dialog', 
'width=626,height=436'); 
return false;" class="sound" href="#"><i class="fa fa-soundcloud"></i></a></li>
                  
          </ul>
        </div>

      <?php if (isset($_GET['cadastro']) == ('')) { ?>
      <div>
      <form class="fa_clube contactForm" id="cadastro" role="form" action="envia_fa.php" method="post" enctype="multipart/form-data">
      
      <div class="form-group">
                        <div id="image-holder" style="max-width:100%; max-height:78px;">  
                                <div class="validation"></div>                           
    <input name="arquivo" type="file"  lang="pt" class="inputfile" id="file" data-rule-required="true" data-msg-required="Selecione uma imagem para seu perfil." accept="image/*" />	<label for="file" class="cadastro">Envie uma foto para perfil</label>
				</div>
                         </div>
      
      	<h2 ><a href="#clube" onclick="MM_showHideLayers('cadastro','','hide','hidden','','show')">
      		<i class="fa fa-close" style="float:right; margin-right:-25px;"> </i></a>Preencha o formul&aacute;rio
      		</h2>
                            
                        
        <div class="form-group">
        
        		<i class="fa fa-user"></i>
        
                                <input type="text" name="nomeremetente" class="form-control input-text input-texto" id="nome_contato" placeholder="Seu nome" data-rule-minlength="4" data-msg-minlength="M&iacute;nimo de 4 caracteres." data-rule-required="true" data-msg-required="Campo obrigat&oacute;rio."   style="color:#333;"/>
                                <div class="validation"></div>
                            </div>
                            
                            <div class="form-group">
                            
                              <i class="fa fa-envelope"></i>
                              
								<input type="email" class="form-control input-text input-texto" name="emailremetente" id="email_contato" placeholder="Seu e-mail" data-rule-required="true" data-msg-required="Campo obrigat&oacute;rio." data-rule-email="true" data-msg-email="Informe um e-mail v&aacute;lido."  style="color:#333;"/>
                                <div class="validation"></div>
                            </div>
                            <div class="form-group">
                                <input type="hidden" class="form-control input-text input-texto" name="assunto" id="assunto_mensagem" placeholder="Assunto" data-rule-minlength="8" data-msg-minlength="M&iacute;nimo de 8 caracteres." data-rule-required="true" data-msg-required="Campo obrigat&oacute;rio." value="CADASTRO F&Atilde;-CLUBE" />
                              <div class="validation"></div>
                            </div>
                            
                        <div class="form-group">
                        	 <i class="fa fa-edit"></i>
                                <textarea class="form-control input-text texto-area" name="mensagem" id="mensagem_contato" rows="3" data-rule-minlength="35" data-rule-maxlength= "150" data-msg-minlength="M&iacute;nimo de 35 caracteres"  data-msg-maxlength="M&aacute;ximo de 150 caracteres"data-rule-required="true" data-msg-required="Envie sua mensagem." placeholder="Nos escreva uma mensagem." style="color:#333;"></textarea>
                                <div class="validation"></div>
                            </div>
                        <div class="text-center"><button type="submit" class="botao">Enviar</button></div>
      </form>
      </div>
      <?php }elseif ($_GET["cadastro"] == 'sucesso') { ?>
      <div style="clear:both; z-index:5100; position: relative;">
      	<h2 style="color:#960; line-height:120%; font-size:150%;">
      			Solicita&ccedil;&atilde;o enviada com sucesso!<br />
		Agradecemos seu contato!</h2>
	<meta http-equiv="Refresh" content="5;URL=index.php#clube" />
	</div>
      <?php } ?>
        </div>
      </div>  
    </div>
 </div>