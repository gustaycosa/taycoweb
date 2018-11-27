<html xmlns="http://www.w3.org/1999/xhtml">
<head id="Head1" runat="server"><meta http-equiv="Content-Type" content="text/html; charset=gb18030">
    <title>Autorizaciones Data Ware House </title>
    <style type="text/css">
        .style1{
            color: #FFFFFF;
            font-weight: bold;
        }    
        .style2{
            color: #000000;
            font-weight: bold;
        }
        .centrar{
            position: absolute;
            left:50%;
            width:500px;
            margin-left:-200px;
            height:200px;
            border:1px solid #808080;
            padding:5px;
        }
    </style>
</head>
<body style="padding: 0px; margin: 0px"  >
<div class='centrar'>
<div style="text-align: center; " class="style2" bgcolor="#99CCCC">DataWareHose - Autorizacion de Movimientos NetClientes</div>
        <table style="width:100%;">
            <tr>
            <td  width="90px">
<?php
$p1 = $_GET['p1'];
$p2 = $_GET['p2'];
$p3 = $_GET['p3'];


$wsdl="http://200.23.19.82/WEB_SERVICES/DataLogs.asmx?wsdl";
//$wsdl="http://192.168.1.1/WEB_SERVICES/DataLogs.asmx?wsdl";

$parametros = array();
$parametros['p1'] = $p1;
$parametros['p2'] = $p2;
$parametros['p3'] = $p3;


//Invocación al web service
$cliente = new SoapClient($wsdl);

//recibimos la respuesta dentro de un objeto
$result = $cliente ->AutX($parametros);

$Autoriza = $result->AutXResult->string;
  

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
 <Label ID="lblResultado" ForeColor="Black"> <?php echo ($Cadena)  ?> </Label>
</td>
</tr>
        </table>
    </div>
</body>
</html>