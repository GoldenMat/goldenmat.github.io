<?php
	$title = "Corni di Canzo - Ferrata Corno Rat";
    $track = "03082023.gpx";
	$day = "03-08-2023, Giovedì";
	$participants = "<img class=\"person\" src=\"../assets/people/oracolo.png\"> Oracolo";
	$path = "../relazioni/11_1_9/cornorat-ferrata/";
?>

<head>
	<link rel="stylesheet" href="../style/style.css">
	<script type="text/javascript" src="../script/script.js"></script>
	<link rel="icon" type="image/x-icon" href="../assets/icon.png">
	<title>I Luci! <?php echo $title; ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
	<div class="container">
	
		<div class="banner-container"><img class="banner" src="../assets/banner/ferrata.png"></div>
		
		<!-- Descrizione -->
		<?php
		include $path . 'descrizione.php';
		?>
		
		<div class="picker-bar bordered-sides">
			<div class="picker-choice"><div class="picker button ferrata selected" id="relazione-button">Relazione</div></div>
			<div class="picker-choice"><div class="picker button ferrata" id="condizioni-button">Condizioni</div></div>
			<div class="picker-choice"><div class="picker button ferrata" id="racconti-button">Racconti</div></div>
			<div class="picker-choice"><div class="picker button ferrata" id="foto-button">Foto</div></div>
		</div>
		
		<div class="content">
		
			<!-- Relazione -->
			<?php
			include $path . 'index.php';
			?>
			
			<!-- Condizioni -->
			<div id="condizioni" class="condizioni hidden">
				<h3>Condizioni</h3>
				
				<table class="info ferrata">
					<tr>
						<th>Meteo e Condizioni</th>
						<td>Serata dal meteo minaccioso, verso la fine della ferrata tuonava ma ha piovuto solo da San Tomaso in giù, e comunque non ha fatto molto rispetto a quello che ha fatto sull'altro versante del lago. La roccia sulla ferrata è unta ma solida.</td>
					</tr>
					<tr>
						<th>Difficoltà Percepita</th>
						<td>F (Oracolo)</td>
					</tr>
					<tr>
						<th>Giudizio Soggettivo</th>
						<td>
							<img class="star" src="../assets/star.png">
							<img class="star" src="../assets/star.png">
							<img class="star" src="../assets/star.png">
							<img class="star" src="../assets/emptystar.png">
							<img class="star" src="../assets/emptystar.png"> (Oracolo)
						</td>
					</tr>
					<tr>
						<th>Materiale</th>
						<td>Imbrago, casco e kit da ferrata.</td>
					</tr>
					<tr>
						<th>Orientamento</th>
						<td>I sentieri e la ferrata sono ottimamente segnati da bolli e cartelli. L'unico punto dove ci si può sbagliare è l'inizio della discesa, seguire la traccia a sinistra e non andare oltre.</td>
					</tr>
					<tr>
						<th>Chiodatura</th>
						<td>La ferrata grazie alla ristrutturazione del 2021 è in ottimo stato, cavo su tutto il percorso e numerose staffe (anche fin troppe a volte).</td>
					</tr>
				</table>
			</div>
		
			<!-- Racconti -->
			<div id="racconti" class="racconti hidden">
				<h3>Racconti</h3>
				
				<div class="story left">
				
					<div class="profile-block">
						<img class="profile" src="../assets/people/oracolo.png">
						<br>Oracolo
					</div>
					
					<div class="story-block ferrata">
						Doveva piovere dopo cena allora opto per fare la ferrata del Corno Rat in velocità. Salgo rapido all'attacco e ancora più rapido sulla ferrata, nella parte alta sembra che debba beccare il temporale ma invece inizierà a piovere soltanto mentre sto arrivando a San Tomaso, dove trovo dei ragazzi che volevano salire anche loro alla ferrata ma temo dovranno cambiare piani. Alla fine scendo col k-way inizialmente visto che tira parecchio vento e sembra stia arrivando il temporale, ma in realtà non farà nulla di rilevante: nuvoloni e tuoni li vedo in lontananza soltanto in Valsassina.
					</div>
				</div>
			</div>
		
			<!-- Foto -->
			<div id="foto" class="foto hidden">
				<h3>Foto</h3>
				
				<a href="https://photos.app.goo.gl/APgDxjx2EcTcNdMAA" target="_blank" rel="noopener noreferrer">
					<img src="../assets/googlephotos.png">
					<p>Google Photos Album</p>
				</a>
			</div>
		</div>
	
		<a href="../">
			<div class="back ferrata">
				<div class="back-button">
					<img class="back-image" src="../assets/back.png">
				</div>
				<div class="back-text">
					<p class="back-text">Home</p>
				</div>
			</div>
		</a>
	</div>

</body>
