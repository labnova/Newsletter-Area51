

<?php


/* global $nome;
global $cognome;
global $mail;
global $scelta;
global $data_di_nascita;
global $scelta; */

if(isset($_POST['submit'])) {


function download($path) {
	
	


	
	if(!file_exists($path)) {
		
		die("errore, non esiste ancora il file!");
		
	} else {
		
header ("Cache-Control: public");
header("Content-type: application/x-file-to-save"); 
header ( "Content-Disposition: attachment; filename=" .basename($path) );
header ("Content-Transfer-Encoding: binary");
header ( "Content-Description: Download file" );
header('Pragma: no-cache');
header('Expires: 0');
header ( "Content-Length: " . filesize ($path) );

readfile ($path);

	}
	
}

if(isset($_GET['download'])) {
	
	if(!empty($_GET['download'])) {
		$file=$_GET['download'];
		
		
		$path= $file;
		download($path);
		
	}
	
}

$valori_selezionati=0;

$nome=$_POST['nome'];
$cognome=$_POST['cognome'];
$mail=$_POST['mail'];
$data_di_nascita=$_POST['data_di_nascita'];




if(isset($_POST['scelta'])) {
        $valori_selezionati = implode($_POST['scelta'],', '); 
 }   else {
        $valori_selezionati = 'Nessun valore selezionato'; }
    
   
         
  



$destinatario="info@area51editore.com"; 
$oggetto= "NUOVA ISCRIZIONE ALLA NEWSLETTER";
$messaggio="è arrivata una nuova iscrizione alla newsletter.
Ecco i dati completi

nome: ".$nome." 
cognome: ".$cognome."
mail: ".$mail."
data_di_nascita: ".$data_di_nascita."
categorie preferite: " .$valori_selezionati."";

strip_tags(trim(stripslashes($messaggio)));

if(!@mail($destinatario, $oggetto, $messaggio)) {

?>

<p>qualcosa &egrave; andato storto. Riprova l'iscrizione. 
<a href="index.php">torna indietro</a>



<?php

} else {

?> 

<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css" />
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css" />
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
<style type="text/css">



	





.contenitore {
	font-size:25px;
	text-align:center;
	width:100%;
	font-family: 'font', Calibri, Arial, sans-serif;
	padding: 20px;
 	background: #bfd9e6;
    border-radius: 4px;
    color: #7e7975;
    box-shadow:
        0 2px 2px rgba(0,0,0,0.2),        
        0 1px 5px rgba(0,0,0,0.2),        
        0 0 0 12px rgba(255,255,255,0.4); 

display:block;
margin-left:auto;
margin-right:auto;
text-align:center;

}

</style>
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css" />
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
</head>
<body>
<div class="contenitore">

	<p> L'iscrizione &egrave; avvenuta correttamente! 
	Ecco i link per scaricare i tuoi omaggi:</p>

	<a href="http://cdn.area51editore.com/PROMOZIONI/PromoAutunno/PromoAutunnoLaltraMedicinaAudiolibro/Fs89798Hber826.zip">AUDIOLIBRO IN FORMATO MP3: Feng Shui</a>
	<br/>
	<a href="http://cdn.area51editore.com/VENDITA/Iacli764gtr/InArmoniaConLInfinito.epub">EBOOK IN FORMATO EPUB (PER TUTTI I DISPOSITIVI ECCETTO KINDLE): In Armonia con l&rsquo;infinito</a>
	<br/>
	<a href="http://cdn.area51editore.com/VENDITA/Iacli764gtr/InArmoniaConLInfinito.mobi">EBOOK IN FORMATO MOBI (PER I DISPOSITIVI KINDLE): In Armonia con l&rsquo;infinito</a>
</div>
</body>
<?php  

}

	


}

?>

</html>