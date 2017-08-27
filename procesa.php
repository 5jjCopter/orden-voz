<?php
$valor = $_POST["voz"];
if($valor=="lila encender luz salón" || $valor=="lila encender salón" || $valor=="lila luz salón" || $valor=="lila encender luz" || $valor=="lila luz")
{
    
    exec('sudo ./encender_salon.sh');
   
}
if($valor=='lila apagar luz' || $valor=='lila apagar luz salon' || $valor=='lila apagar salon' || $valor=='lila desactivar')
{
    
    exec('sudo ./apagar_salon.sh');
   
}
if($valor=='lila encender ventilador' || $valor=='lila ventilador' )
{
    exec('sudo ./encender_ventilador.sh');
   
}
if($valor=='lila apagar ventilador' || $valor=='lila apagar el ventilador' )
{
    exec('sudo ./apagar_ventilador.sh');
   
}
if($valor=='lila cocina' || $valor=='lila encender cocina' || $valor=='lila encender led' )
{
    exec('sudo python encender_cocina.py');
    exec('sudo espeak -ves+f6 "Luz de la cocina encendida"');
}
if($valor=='lila apagar luz cocina' || $valor=='lila apagar cocina' || $valor=='lila apagar led' )
{
    exec('sudo python apagar_cocina.py');
       
}
?>
