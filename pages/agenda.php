<?php require_once('Connections/db_data.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "form1")) {
  $updateSQL = sprintf("UPDATE data_evento SET px_evento=%s WHERE id=%s",
                       GetSQLValueString($_POST['novaData'], "text"),
                       GetSQLValueString($_POST['px_evento'], "int"));

  mysql_select_db($database_db_data, $db_data);
  $Result1 = mysql_query($updateSQL, $db_data) or die(mysql_error());

}
mysql_select_db($database_db_data, $db_data);
$query_RsAtualData = "SELECT * FROM data_evento ORDER BY px_evento ASC";
$RsAtualData = mysql_query($query_RsAtualData, $db_data) or die(mysql_connect_error());
$row_RsAtualData = mysql_fetch_assoc($RsAtualData);
$totalRows_RsAtualData = mysql_num_rows($RsAtualData);
?>
<div class="container wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms" style="width:100%; z-index:1100; position:relative; clear:both;">

      <div class="heading wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
        <div class="row" style="width:100%; background:#000; z-index:1100; position:relative; clear:both; text-align:center; 
  padding-bottom:35px; padding-top:80px; margin-bottom:-50px;">
          <div class="text-center col-sm-8 col-sm-offset-2">
            <h2>

            
            <i class="fa fa-calendar"> </i> Agenda
            
            
            </h2>
              
              <h3>
              
             Restam apenas
             
             </h3>
            	<div>
			<ul id="countdown">
						<li>					
							<span class="days time-font">00</span>
							<p>dias </p>
						</li>
						<li>
							<span class="hours time-font">00</span>
							<p class="">horas </p>
						</li>
						<li>
							<span class="minutes time-font">00</span>
							<p class="">minutos</p>
						</li>
						<li>
							<span class="seconds time-font">00</span>
							<p class="">segundos</p>
						</li>				
		  </ul>
</div>
              <p>
              
              <h3>
              
             para o pr&oacute;ximo evento!
             
             </h3>
              
              
              
              </p>
          
    <form action="<?php echo $editFormAction; ?>" method="POST" name="form1" id="form1";>
    <?php if($_GET['data'] == 'atualizada') { ?>
    <h2 style="color:#960;">Data do Pr&oacute;ximo envento atualizada!</h2><meta http-equiv="Refresh" content="5;URL=http://www.joaogabrielethyago.com.br/#agenda" />
    <?php }elseif($_GET['naza'] == 'altera'){ ?>
            <input type="text" name="novaData" id="novaData" />
            <input type = "submit" id="alteraData" name = "Submit" value = "Alterar">   
		<?php } ?> 
            <label id = "resultado"><?php echo $row_RsAtualData['px_evento']; ?></label>
            
            <input type="hidden" name="MM_update" value="form1" />
            <input type="hidden" name="px_evento" value="<?php echo $row_RsAtualData['id']; ?>" />
            
    </form>
          </div>
        </div> 
      </div>
      <div class="text-center agenda-item">
        <div class="row" style="width:100%; background:#000; z-index:1100; position:relative; clear:both; text-align:center;">
          <div class="col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
            <div class="image-icon">
            <span class="folio-expand"><a href="images/agenda/4.jpg" data-lightbox="agenda">
              <i><img class="img-responsive" src="images/agenda/tmb_4.jpg" /></i></a></span>
            </div>
            <div class="agenda-info">
              <h3>
              
              
              
              <a onclick="MM_showHideLayers('mapa2','','show')" onmouseover="MM_changeProp('mapa_lnk2','','color','#fff','DIV')" onmouseout="MM_changeProp('mapa_lnk2','','color','#960','DIV')" id="mapa_lnk2" style=" color:#960;">


<i class="fa fa-map-marker"> </i>
Restaurante Recanto da Lagoa</a>
              
              
              </h3>
              <p>
              
              
              
              
    SEGUNDA SEM LEI!!!<br />
JO&Atilde;O GABRIEL &amp; THYAGO com participa&ccedil;&atilde;o de Wadson Sanfoneiro!!!
              
              
              
              </p>
              <hr/>
              <h3 style="text-align:right; bottom:5px;">
              
              
              
               <i class="fa fa-calendar"> </i> TODAS AS SEGUNDAS
              
              
              
              </h3>
            </div>
          </div>
          <div class="col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="450ms">
            <div class="image-icon">
            <span class="folio-expand"><a href="images/agenda/5.jpg" data-lightbox="agenda">
              <i><img class="img-responsive" src="images/agenda/tmb_5.jpg" /></i></a></span>
            </div>
            
            
            <div class="agenda-info"><h3>
              
              
              
              <a onclick="MM_showHideLayers('mapa2','','show')" onmouseover="MM_changeProp('mapa_lnk2','','color','#fff','DIV')" onmouseout="MM_changeProp('mapa_lnk2','','color','#960','DIV')" id="mapa_lnk2" style=" color:#960;">


<i class="fa fa-map-marker"> </i>
Restaurante Recanto da Lagoa</a>
              
              
              </h3>
              
              
              
              
              <p>
    QUINTA SERTANEJA!!!<br />
O melhor do Sertanejo com a dupla JO&Atilde;O GABRIEL &amp; THYAGO !!!!!!
              
              
              
              </p>
              <hr/>
              <h3 style="text-align:right;">
              
              
              
               <i class="fa fa-calendar"> </i> TODAS AS QUINTAS
              
              
              
              </h3>
            </div>
          </div>
          <div class="col-sm-4 wow fadeInDown" id="col-baixo" data-wow-duration="1000ms" data-wow-delay="550ms">
            <div class="image-icon">
            
            <span class="folio-expand"><a href="images/agenda/6.jpg" data-lightbox="agenda">
              <i><img class="img-responsive" src="images/agenda/tmb_6.jpg" /></i></a></span>
            </div>
            <div class="agenda-info">
              <h3 id="mapa_lnk2" style="color:#960;">
              
              
              
              <i class="fa fa-map-marker"> </i> N&atilde;o definido <br/><br/>
              
              
              
              
              </h3>
              <p>
              
              
              LAN&Ccedil;AMENTO DO "CD" DE ESTR&Eacute;IA
              <br/>
              
              	Uma Can&ccedil;&atilde;o Pra Voc&ecirc; ser&aacute; lan&ccedil;ado no in&iacute;cio de 2017, com 14 faixas autorais.
              
              
              
              
              
              
              </p>
              <hr/>
              <h3 style="text-align:right; bottom:5px;">
              
              
              
               <i class="fa fa-calendar"> </i> EM BREVE
              
              
              
              </h3>
            </div>
          </div>
        </div>
      </div>
    </div>

<script type="text/javascript" src="pages/calendar/jquery/jquery-1.8.3.min.js" charset="UTF-8"></script>
<?php
mysql_free_result($RsAtualData);
?>