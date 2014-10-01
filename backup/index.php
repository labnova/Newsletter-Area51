
<html>

<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css" />
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css" />
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
	
<style type="text/css">

@font-face {
font-family: 'font';
src:url(font/font.woff);

}

body {
width:100%;
font-family: 'font', Calibri, Arial, sans-serif;



}

form {
	padding: 20px;
 	background: #bfd9e6;
    border-radius: 4px;
    color: #7e7975;
    box-shadow:
        0 2px 2px rgba(0,0,0,0.2),        
        0 1px 5px rgba(0,0,0,0.2),        
        0 0 0 12px rgba(255,255,255,0.4); 


}



input, select {
	font-size:20px;
	display:block;
	margin-left:auto;
	margin-right:auto;
	position:relative;
	width:40%;
 border: 3px solid #ebe6e2;
 -webkit-transition: all 0.3s ease-out;
    -moz-transition: all 0.3s ease-out;
    -ms-transition: all 0.3s ease-out;
    -o-transition: all 0.3s ease-out;
    transition: all 0.3s ease-out;


}



input[type="text"], input[type="email"], input[type="date"], select {
margin-top: 1em;
width: 60%;
padding: 10px;
text-align:center;
border-radius: 10px;
box-shadow: 
		0 0 1px rgba(0,0,0, 0.3),
		0 3px 7px rgba(0,0,0, 0.3),
		inset 0 1px rgba(128,128,128,1),
        inset 0 -3px 2px rgba(0,0,0,0.25);

}


label {

text-align:center; 

}

input[type="radio"] {


width:30px;
display:block;
margin-left:auto;
margin-right:auto;
position:relative;



}

 #sesso, #consenso {

display:block;
margin-left:auto;
margin-right:auto;
position:relative;
font-size:20px;


}

input[type="submit"] {
	display:block;
	margin-left:auto;
	margin-right:auto;
	font-size:25px;
 	width:80%;
 	border-radius:20px;
    background: #fbd568; /* Fallback */
    background: -moz-linear-gradient(#fbd568, #ffb347);
    background: -ms-linear-gradient(#fbd568, #ffb347);
    background: -o-linear-gradient(#fbd568, #ffb347);
    background: -webkit-gradient(linear, 0 0, 0 100%, from(#fbd568), to(#ffb347));
    background: -webkit-linear-gradient(#fbd568, #ffb347);
    background: linear-gradient(#fbd568, #ffb347);
    border: 1px solid #f4ab4c;
    color: #996319;
    text-shadow: 0 1px rgba(255,255,255,0.3);


}

label {
	font-size: 25px;
	margin-right:20px;
}
</style>
</head>


 <body>
 
<div class="container">
<form method="post" action="download.php" >


<label>Nome</label><input type="text" name="nome" placeholder="inserisci il tuo nome" required="true" /><br/>
<label>Cognome</label><input type="text" name="cognome" placeholder="inserisci il tuo cognome" required="true" /><br/>

<label>Sesso</label>
<div id="sesso">
<input type="radio" name="sesso" value="maschio" />
<label id="sesso" style="text-align:center; font-size:15px;">Maschio</label>

<input type="radio" name="sesso" value="femmina"  />
<label  id="sesso" style="text-align:center !important; font-size:15px;">Femmina</label><br/>
</div>
<label>Data di nascita</label><input type="date"  max="03/01/2020" name="data_di_nascita" placeholder="inserisci la tua data di nascita" /><br/>
<br/>



<label>Indirizzo mail</label><input type="email" name="mail" placeholder="inserisci la mail" required="true" /><br/>

<label>Seleziona le tue categorie preferite</label>

<select name="scelta[]" size='6' multiple="multiple">
	<option  value="benessere">BENESSERE</option>
	<option  value="informatica">INFORMATICA</option>
	<option  value="web marketing">WEB MARKETING</option>
	<option  value="storia">STORIA</option>

</select> <br/><br/><br/><br/>

<p style="color:black; text-align:justify;">I dati forniti saranno custoditi nel rispetto delle disposizione del D. Lgs. n. 196/03 sulla privacy.
Area51 Publishing garantisce la massima riservatezza dei dati forniti: in particolare garantisce che tali dati verranno utilizzati 
solo ed esclusivamente per finalit&agrave; funzionali allo svolgimento dell'attivit&agrave; e connesse alla fruizione e alla comunicazione dei servizi 
di questo sito, per la elaborazione di statistiche, la commercializzazione e l'invio di materiale informativo, 
promozionale e di aggiornamento sui prodotti e servizi di Area51 Publishing mediante posta elettronica, 
telefono e sms e per l'assolvimento degli obblighi di legge.</p>
<p>Per maggiori informazioni <a href="http://www.area51editore.com/privacy" target="_blank">clicca qui.</a></p>

<input  type="radio" name="consenso" required="true" title="Devi fornire il consenso" /><label id="consenso">Do il consenso</label><br/>


<input type="submit" name="submit" value="Iscriviti" />
</form>
</div>
</body>


</html>