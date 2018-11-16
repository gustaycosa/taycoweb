<html xmlns="http://www.w3.org/1999/xhtml">
<head id="Head1" runat="server">
    <title>Autorizaciones Data Ware House </title>
    <style type="text/css">
        .style1
        {
            color: #FFFFFF;
            font-weight: bold;
        }    
        .style2
        {
            color: #000000;
            font-weight: bold;
       }
    		.centrar

	{

		position: absolute;

		/*nos posicionamos en el centro del navegador*/

		

		left:50%;

		/*determinamos una anchura*/

		width:500px;

		/*indicamos que el margen izquierdo, es la mitad de la anchura*/

		margin-left:-200px;

		/*determinamos una altura*/

		height:200px;

		/*indicamos que el margen superior, es la mitad de la altura*/

		


		border:1px solid #808080;

		padding:5px;

	}
    </style>
</head>
<body style="padding: 0px; margin: 0px"  >
<div class='centrar'>
<div style="text-align: center; " class="style2" bgcolor="#99CCCC">DataWareHose - Autorizacion de Ordenes de Compra </div>
        <table style="width:100%;">
            <td  width="90px">
<?php
$iId = $_GET['id'];
$sOrden = $_GET['Orden'];
$sResp = $_GET['ok'];

$WebService="http://dwh.taycosa.mx/WEB_SERVICES/DataLogs.asmx?wsdl";
//$WebService="http://192.168.1.1/WEB_SERVICES/DataLogs.asmx?wsdl";
//parametros de la llamada
$parametros = array();
$parametros['Id'] = $iId;
$parametros['Orden'] = $sOrden;
$parametros['Respuesta'] = $sResp;
//Invocación al web service
$WS = new SoapClient($WebService, $parametros);
//recibimos la respuesta dentro de un objeto
$result = $WS->AutOrden($parametros);

$Autoriza = $result->AutOrdenResult->string;
  
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
</html>