<style>
.ender{
  width:80%; margin:10px auto; clear:both; min-width:250px;
}
.divide{
	transform:rotate(90deg);
	 -ms-transform:rotate(90deg);
	 -webkit-transform:rotate(90deg);
	  width:50px;
	  position:relative;
	  margin-right:0px;
	  margin-top:-40px;
	}
.linha{
	transform:rotate(90deg);
	 -ms-transform:rotate(90deg);
	 -webkit-transform:rotate(90deg);
	  width:50px;
	  position:relative;
	  margin-right:0px;
	  margin-top:-15px;
	  margin-bottom:20px;
	  clear:both;
}
.info ul li{
	width:20%;
	position:relative;
	float:left;
	display:inline-block;
	min-width:250px;
	}
@media (max-width: 1367px) {
	.info ul li{
		width:50%
	}
	.divide, .linha{
	 transform:rotate(0deg);
	 -ms-transform:rotate(0deg);
	 -webkit-transform:rotate(0deg);
	  width:100%;
	  margin-right:auto;	  
	  margin-left:-20px;
	  margin-top:10px;
	}
}
@media (max-width: 767px) {
	.divide, .linha{
	 transform:rotate(0deg);
	 -ms-transform:rotate(0deg);
	 -webkit-transform:rotate(0deg);
	  width:100%;
	  margin-right:auto;	  
	  margin-left:-20px;
	  margin-top:10px;
	}
	.ender{
		top:15px;
		position:relative;
		border-top:#FFF 1px solid;
	}
	.info ul li{
		width:100%
	}
}
</style>
<div class="clearfix" style="z-index:1500;">
          	<h2 style="text-align:center"><i class="fa fa-calendar-check-o" aria-hidden="true"> </i> Marque seu evento</h2>
          </div>
          <hr style="width:75%;" /><br />

             <div class="col-lg-6 col-sm-7 wow fadeInLeft">
                    <div class="contato-info-box clearfix">
                        <h3>Shows:</h3>
                        <span>
                           <ul>
                            	<li>
					(31) 3032-9696 - Nazarito
                                </li>
                                <li>
                                	contato@joaogabrielethyago.com.br
                                </li>
			 </ul>
		       </span>
                        <h3>IMPRENSA:</h3>
                        <span>
                            <ul>
                            	<li>
                            		(31) 98742-9632 Luciana Braga 

                                </li>
                            	<li>
                            		lubraga@nazamusic.com
                                </li>
                           </ul>
			</span>
                        <h3>R&Aacute;DIOS BRASIL:</h3>
                        <span>
                            <ul>
                            	<li>
                            		divulgacao@nazamusic.com 

                                </li>
                           </ul>
			</span>
                        <h3>F&Atilde; CLUBE:</h3>
                        <span>
                            <ul>
                            	<li>
					faclube@joaogabrielethyago.com.br 

                                </li>
                           </ul>
			</span>
                        <h3> CORRESPOND&Ecirc;NCIA:</h3>
                        <span>
                            <ul>
                            	<li>
					Rua Guajajaras, 1470 Sala 1408

                                </li>
                                <li>
                                	Barro Preto - CEP: 30180-101 | BH/MG
                                </li>
                           </ul>
			</span>
                    </div>
                   
 


                    <div class="contato-info-box phone clearfix">
                    <h3><i class="fa fa-phone" style="color:#fff; ">  </i> fones:</h3>
                    	<span>
	                        <ul style="margin-top:20px;">
	                        	<li>(31) 3032-9696 | (31) 98925-1835</li>
	                        </ul>
	                </span>
                    </div>
                    <div class="contato-info-box email clearfix">
                        <h3><i class="fa fa-envelope" style="color:#fff;"> </i> E-mail:</h3>
                        <span>
	                        <ul style="margin-top:0px;">
        	                	<li>contato@joaogabrielethyago.com.br</li>
                	        </ul>
                	</span>
                    </div>
                    
		</div>
		
                
                <div class="col-lg-6 col-sm-5 wow fadeInUp delay-05s">
                  <div class="formulario" style="z-index:5000;">
     		
                      <form action="envia.php" method="post" role="form" class="contactForm" id="form">
                      
                            <div class="form-group">
                                <input type="text" name="nomeremetente" class="form-control input-text input-texto" id="nome_contato" placeholder="Seu nome" data-rule-minlength="4" data-msg-minlength="M&iacute;nimo de 4 caracteres." data-rule-required="true" data-msg-required="Campo obrigat&oacute;rio." /><i class="fa fa-user" style="position:relative; float: right; font-size:35px; margin: -60px 10px 0px auto; clear:both"></i>
                                <div class="validation"></div>
                            </div>
                            <div class="form-group">
                                <input type="text" name="empresa" class="form-control input-text input-texto" id="empresa_contato" placeholder="Nome da empresa" data-rule-minlength="4" data-msg-minlength="M&iacute;nimo de 4 caracteres." />
                                <i class="fa fa-group" style="position:relative; float: right; font-size:35px; margin: -60px 10px 0px auto; clear:both"></i>
                        </div>
                            <div class="form-group">
                                <input type="email" class="form-control input-text input-texto" name="emailremetente" id="email_contato" placeholder="Seu e-mail" data-rule-required="true" data-msg-required="Campo obrigat&oacute;rio." data-rule-email="true" data-msg-email="Informe um e-mail v&aacute;lido." />
                            
                              <i class="fa fa-envelope" style="position:relative; float: right; font-size:35px; margin: -60px 10px 0px auto; clear:both"></i>
                                <div class="validation"></div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control input-text input-texto" name="assunto" id="assunto_mensagem" placeholder="Assunto" data-rule-minlength="8" data-msg-minlength="M&iacute;nimo de 8 caracteres." data-rule-required="true" data-msg-required="Campo obrigat&oacute;rio." />
                              <i class="fa fa-pencil" style="position:relative; float: right; font-size:35px; margin: -60px 10px 0px auto; clear:both"></i>
                                <div class="validation"></div>
                            </div>
                            <div class="form-group">
                              <span id="fixo">
                           	  <input name="fixo" class="form-control input-text input-fone"  type="text" data-rule-fixo="true" data-rule-required="true" data-msg-required="Campo obrigat&oacute;rio." placeholder="Telefone fixo"/>
                              <i class="fa fa-phone" style="position:relative; float: left; font-size:40px; margin: -60px 0px 0px 40%; clear:both"></i>
                            <div class="validation"></div></span> </div>
                            <div class="form-group">
                              <span id="celular">                            
                              <input name="celular" class="form-control input-text input-fone"  type="text" data-rule-required="true" data-msg-required="Campo obrigat&oacute;rio." data-rule-celular="true" placeholder="Telefone m&oacute;vel" />
                              <i class="fa fa-mobile" style="position:relative; float: left; font-size:40px; margin: -60px 0px 0px 40%; clear:both"></i>
                              </span> </div>
                        <div class="form-group">
                                <textarea class="form-control input-text texto-area" name="mensagem" id="mensagem_contato" rows="5" data-rule-minlength="35" data-msg-minlength="M&iacute;nimo de 35 caracteres" data-rule-required="true" data-msg-required="Informe detalhes do evento." placeholder="Informe detalhes do evento como:
Data e hor&aacute;rio
Local e capacidade
Endere&ccedil;o completo"></textarea> <i class="fa fa-edit" style="position:relative; float: right; font-size:35px; margin: -60px 10px 0px auto; clear:both"></i>
                                <div class="validation"></div>
                            </div>
                            
                        <div class="text-center"><button type="submit" class="botao">Enviar</button></div>
                    </form>
                    </div>	

                </div>
                