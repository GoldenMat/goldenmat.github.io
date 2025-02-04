<?php
	$title = "Moregallo - Cresta OSA";
    $track = "04102023.gpx";
	$day = "04-10-2023, Mercoledì";
	$participants = "<img class=\"person\" src=\"../assets/people/oracolo.png\"> Oracolo";
	$path = "../relazioni/11_1_9/crestaosa/";
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
	
		<div class="banner-container"><img class="banner" src="../assets/banner/alpinismoroccia.png"></div>
		
		<!-- Descrizione -->
		<?php
		include $path . 'descrizione.php';
		?>
		
		<div class="picker-bar bordered-sides">
			<div class="picker-choice"><div class="picker button roccia selected" id="relazione-button">Relazione</div></div>
			<div class="picker-choice"><div class="picker button roccia" id="condizioni-button">Condizioni</div></div>
			<div class="picker-choice"><div class="picker button roccia" id="racconti-button">Racconti</div></div>
			<div class="picker-choice"><div class="picker button roccia" id="foto-button">Foto</div></div>
		</div>
		
		<div class="content">

			<!-- Relazione -->
			<?php
			include $path . 'index.php';
			?>
		
			<!-- Condizioni -->
			<div id="condizioni" class="condizioni hidden">
				<h3>Condizioni</h3>
				
				<table class="info roccia">
					<tr>
						<th>Meteo e Condizioni</th>
						<td>Serata nebbiosa ma non fredda. La roccia in via come al solito è ottima, a parte il canaletto che porta al ponte di roccia, quindi ordinaria amministrazione.</td>
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
							<img class="star" src="../assets/star.png">
							<img class="star" src="../assets/emptystar.png"> (Oracolo)
						</td>
					</tr>
					<tr>
						<th>Materiale</th>
						<td>NDA per alpinismo su roccia (imbrago, casco, 4-6 rinvii, cordini). Eventualmente qualche friend medio, anche se clessidre e spuntoni abbondano. Scarpette non necessarie (o eventualmente toglierle dopo il camino) e nel caso in cui il primo di cordata abbia sufficiente esperienza una mezza corda è sufficiente.</td>
					</tr>
					<tr>
						<th>Orientamento</th>
						<td>I sentieri son tutti segnati e la via è super logica, nel dubbio rimanere sul filo di cresta che non si sbaglia.</td>
					</tr>
					<tr>
						<th>Chiodatura</th>
						<td>Mancante su tutta la via, soste comprese a parte 3 (di cui una poco utile). Comunque visto la natura della via non c'è bisogno di niente che non offra già la roccia.</td>
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
					
					<div class="story-block roccia">
						Giretto solitario in OSA post lavoro, parto presto e vado deciso fino all'attacco bypassando Sambrosera, nessun problema sulla via a parte il solito passo sulla paretina. Provo una variante a sx prima dei tiri finali ma poi torno sul facile, roccia marcissima. In alto nebbia e freschino, scendo con calma nel buio con la frontale. Comunque buono stato di forma tutto sommato.
					</div>
				</div>
			</div>
		
			<!-- Foto -->
			<div id="foto" class="foto hidden">
				<h3>Foto</h3>
				
				<a href="https://photos.app.goo.gl/pDqw98YpcWvHSsJx7" target="_blank" rel="noopener noreferrer">
					<img src="../assets/googlephotos.png">
					<p>Google Photos Album</p>
				</a>
			</div>
		</div>
	
		<a href="../">
			<div class="back roccia">
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
