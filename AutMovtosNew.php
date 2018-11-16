<!DOCTYPE html>
<html class="no-js">

<?php include("head-tayco.php"); ?>

<body>
<body style="padding: 0px; margin: 0px"  >
<div class='centrar'>
<div style="text-align: center; " class="style2" bgcolor="#99CCCC">DataWareHose - Autorizacion de Ordenes de Compra </div>
        <table style="width:100%;">
            <td  width="90px">
<?php
$iId = $_GET['Id'];
$sOrden = $_GET['Orden'];
$sResp = $_GET['ok'];

$WebService="http://dwh.taycosa.mx/WEB_SERVICES/DataLogs.asmx?wsdl";

$parametros = array(
'Id' => $iId,
'Orden' => $sOrden,
'Respuesta' => $sResp,
);

//Invocación al web service
$WS = new SoapClient($WebService,$parametros);
//recibimos la respuesta dentro de un objeto
$result = $WS->AutCliSolicitud($parametros);

$Autoriza = $result->AutCliSolicitudResult->string;
  
var_dump($Autoriza); 

$valido = $Autoriza[1] ;
$Cadena = $Autoriza[0] ;

if ($valido==0) {
echo '<img alt="" src="img/OkAut.png" height="80" width="80" />';
}
else
{
echo '<img alt="" src="img/NoAut.png" height="80" width="80" />';

}
?>
</td>
<td  style="text-align: center;"  bgcolor="#CCFF99">
 <Label ID="lblResultado" ForeColor="Black"> <?php echo ($Cadena)  ?> </asp:Label>
</td>
</tr>
        </table>
    </div>
</body>
<?php include("script-tayco.php"); ?>

</html>