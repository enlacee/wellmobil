<?php set_time_limit(0);
require('models/Consulta.class.php');
$consulta = new Consultas;
$database=$_GET['id'];
if(isset($_POST['generar'])){ 
$database=$_POST['id'];
$minutos=$_POST['minutos'];
$fi=date("Y-m-d H:i:s",time()-$minutos*60);
$ff=date("Y-m-d H:i:s");
$fi="2013-07-06 00:00:00";
$ff="2013-07-06 23:59:00";
$slots=$consulta->get_Slots_Activos($database);
$fechas=$consulta->GetFechasSlotActivos($database,$fi,$ff);
$nombre_archivo="litologia.csv";

$linea="Fecha;Hora";
foreach($slots as $slot){
$linea.=";".$slot["name"];
}
$linea.="\n";
foreach($fechas as $fecha){
$date_time=$fecha[0];
$date_time_=explode(" ",$date_time);
$linea.=$date_time_[0].";";
$linea.=$date_time_[1];
foreach($slots as $slot){
$slot_id=$slot[0];
$valor=$consulta->GetValorSlotFecha($database,$slot_id,$date_time);
$linea.=";".$valor;
}
$linea.="\n";
echo $linea;
}
/*$link=fopen($nombre_archivo,"w+");
fwrite($link,$linea);
fclose($link);
enviar_archivo($nombre_archivo,100);
@unlink($nombre_archivo);*/

}else{
?>
<html>
<head>
<link rel="stylesheet" href="templates/style.css" />
<style>
body,a{color:#90F491;}
</style>
<body>
<center>
<h1>Exportar Litologia</h1>
<form action="exp_litologia.php" method="post">
<input type="hidden" name="id" value="<?php echo $database;?>">
<label>Ultimos 
<select name="minutos">
<option>30</option>
<option>60</option>
<option>90</option>
<option>120</option>
</select>
Minutos
</label>
<input type="submit" value="Generar" name="generar">
</form>
<a href="detalle?id=xplora-petrokemls">Atras</a>
</center>

</body>

</html>
<?php }


/** Sergio Zegarra Corne
  * www.tareasyclases.co.cc
  * 
  * LIMITAR VELOCIDAD DE DESCARGA DE ARCHIVOS EN PHP
  */

function enviar_archivo($archivo, $speed = 100) {
// Veamos.. existe el fichero ?
	if (!is_file($archivo)) {
		die("<b>404 Archivo no encontrado");
	}
// Recolectamos información sobre el archivo
	$archivo_nombre = basename($archivo);
	$archivo_extension = strtolower(substr(strrchr($archivo_nombre,"."),1));
// Asignamos el Content-Type adecuado a cada tipo de archivo, esto se
// puede configurar al gusto, yo he incluído los más comunes para los
// ebooks: exe, zip, lit, pdf, mp3, html, html
	switch($archivo_extension) {
		case "csv":
			$ctype="text/csv";
			break;
		case "exe":
			$ctype="application/octet-stream";
			break;
		case "zip":
			$ctype="application/zip";
			break;
		case "lit":
			$ctype="application/lit";
			break;
		case "pdf":
			$ctype="application/pdf";
			break;
		case "mp3":
			$ctype="audio/mpeg3";
			break;
		case "htm":
		case "html":
			$ctype="text/html";
			break;
		case "txt":
			$ctype="text/plain";
			break;
// Debemos tener cuidado con no dejar descargar por este
// método ficheros sensibles tales como ficheros .php, .inc, etc...
		case "php":
		case "inc":
			die("<b>No te dejo bajar ficheros ". $archivo_extension ."</b>");
			break;
		default:
			$ctype="application/force-download";
	}
// Empezamos con los headers
	header("Cache-Control:");
	header("Cache-Control: public");
	header("Content-Type: $ctype");
// Meramente estético, sustituímos los posibles guiones bajos ( _ )
// por espacios en el nombre del fichero para bajar archivos más
// legibles. Ej: "fichero_a_bajar.pdf" se convierte en "fichero a bajar.pdf"
	$archivo_nombre_limpio = str_replace("_", " ", $archivo_nombre);
// Forzamos la descarga en lugar de la apertura
	$header='Content-Disposition: attachment; filename='.$archivo_nombre_limpio;
	header($header);
	header("Accept-Ranges: bytes");
	$tamano = filesize($archivo);
// Si el navegador nos solicita el http_range...
	if(isset($_SERVER['HTTP_RANGE'])) {
// entonces le enviamos sólo el trozo que falta.
// (Mundialmente conocido como "resume")
	list($a, $rango)=explode("=",$_SERVER['HTTP_RANGE']);
	str_replace($rango, "-", $rango);
	$tamano2=$tamano-1;
	$nueva_longitud=$tamano2-$rango;
	header("HTTP/1.1 206 Partial Content");
	header("Content-Length: $nueva_longitud");
	header("Content-Range: bytes $rango$tamano2/$tamano");
	} else {
// Si no le enviamos todo el pack
	$tamano2=$tamano-1;
	header("Content-Range: bytes 0-$tamano2/$tamano");
	header("Content-Length: ".$tamano2);
	}
// Una vez tomadas estas decisiones, sólo queda abrir el archivo...
	$puntero_al_fichero = fopen("$archivo","rb");
// localizar el inicio de la parte que queremos enviar...
	fseek($puntero_al_fichero,$posicion_inicio);//$posicion_inicio puede ser 0 cero
// y empezar a enviar. Aqui es donde se produce la magia... en base
// a la variable de velocidad, leemos ese número de Ks del archivo,
// lo enviamos... y nos "dormimos" un segundo. Esta forzada chapuza
// produce exactamente el efecto deseado... ralentizar la descarga a
// los X k/s que deseemos por cada envío.
	while(!feof($puntero_al_fichero)) {
// Nos aseguramos de no producir un timeout por sobrepasar el
// tiempo máximo de ejecución de PHP en caso de archivos
// demasiado grandes.
		set_time_limit(0);
// Ponemos los datos en el buffer...
		print(fread($puntero_al_fichero,1024*$speed));
// Lanzamos el contenido del buffer...
		flush();
// Y a dormir...
		sleep(1);
	}
// Proceso completado, archivo descargado,
// todo el "pescao vendío"
	fclose($puntero_al_fichero);
	exit;
}
//By http://www.propiedadprivada.com


// Y finalmente un ejemplo tonto de uso de la función
//enviar_archivo("fichero.pdf",100);

?>
