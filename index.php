<?php include("includes/header.php"); ?>

<?php 
$message = "";
if(isset($_POST['submit'])) {
	$auto = new Auto();
	$auto->auto_name = $_POST['automobilis'];
	$auto->first_name = $_POST['firstname'];
	$auto->last_name = $_POST['lastname'];
	$auto->number = $_POST['number'];
	$auto->email = $_POST['email'];
	$auto->content = $_POST['content'];

	if($auto->save()) {
		$message = "Uzsakymas priimtas sekmingai";
	} else {
		$message = "Uzsakymas nepavyko";
	}
}
?>

	<?php include("includes/nav.php") ?>

	<p class="success"><?php echo $message; ?></p>

	<article id="main">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1>Automobilių nuoma</h1>
					<p class="apie-prisistatymas">
						Už patrauklią kainą išnuomos Jums tinkantį ir patinkantį automobilį. Mūsų įmonė garantuoja išskirtinę kainą ir patrauklias kainas. Vertiname kiekvieną klientą, todėl įsiklausome į Jūsų norus ir stengiamės rasti priimtiniausią sprendimą. Visi automobiliai drausti civiliniu ir KASKO draudimu. Rūpinamės, kad jūsų kelionė mūsų išnuomotu automobiliu būtų saugi ir patikima.
					</p>
				</div>
			</div>
		</div>
	</article>

	<article id="auto">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1>Mūsų automobiliai</h1>
				</div>
			</div>
			
			<div class="row">
				<div class="col-md-4">
					<div class="card">
	  					<img class="card-img-top" src="img/civictyper.jpg" alt="Card image cap">
	  					<div class="card-body">
	    					<h5 class="card-title">Honda Civic Type R</h5>
	    					<p class="card-text">Pasisveikinkite su galingiausiu, greičiau nei bet kada anksčiau įsibėgėjančiu, priekiniais ratais varomu automobiliu.„Mūsų „Civic Type R“ vizija buvo užtikrinti manevringumą, kuriuo vairuotojai galėtų visiškai pasitikėti ir jaustųsi taip, tarsi automobilį galėtų vairuoti amžinai.“</p>
	  					</div>
					  	<ul class="list-group list-group-flush">
					    	<li class="list-group-item">Variklis: 2.0</li>
					    	<li class="list-group-item">Vidutinės kuro sąnaudos 7,7l / 100km</li>
					    	<li class="list-group-item">Pavarų dėžė: <strong>Mechaninė</strong></li>
					  	</ul>
	  					<div class="card-body">
	    					<a href="#uzsakymas" class="card-link">Užsisakyti</a>
	  					</div>
					</div>
				</div>

				<div class="col-md-4">
					<div class="card">
	  					<img class="card-img-top" src="img/audir8.jpg" alt="Card image cap">
	  					<div class="card-body">
	    					<h5 class="card-title">Audi R8</h5>
	    					<p class="card-text">3,2 sekundės pakanka, kad pirmasis įspūdis virstų ilgalaikiu. 5,2 l FSI variklis tiekiamas dviejų versijų: viena versija 397 kW (540 AG) galios ir kita sportinė versija 449 kW (610 AG) galios. </p>
	  					</div>
					  	<ul class="list-group list-group-flush">
					    	<li class="list-group-item">Variklis: 5.2</li>
					    	<li class="list-group-item">Vidutinės kuro sąnaudos 11,7l / 100km</li>
					    	<li class="list-group-item">Pavarų dėžė: <strong>Automatinė</strong></li>
					  	</ul>
	  					<div class="card-body">
	    					<a href="#uzsakymas" class="card-link">Užsisakyti</a>
	  					</div>
					</div>
				</div>

				<div class="col-md-4">
					<div class="card">
	  					<img class="card-img-top" src="img/bmwm4.jpg" alt="Card image cap">
	  					<div class="card-body">
	    					<h5 class="card-title">BMW M4</h5>
	    					<p class="card-text">Naujasis BMW M4. Galios atspindys: BMW M4 Coupé galia akivaizdžiai matoma kiekvienoje detalėje. Įspūdingos priekinėje automobilio dalyje integruotos oro įleidimo angos užtikrina galingo M variklio aušinimą važiuojant dideliu greičiu. 431 AG jūsų paslaugoms.</p>
	  					</div>
					  	<ul class="list-group list-group-flush">
					    	<li class="list-group-item">Variklis: 3.0</li>
					    	<li class="list-group-item">Vidutinės kuro sąnaudos 8,8l / 100km</li>
					    	<li class="list-group-item">Pavarų dėžė: <strong>Mechaninė</strong></li>
					  	</ul>
	  					<div class="card-body">
	    					<a href="#uzsakymas" class="card-link">Užsisakyti</a>
	  					</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-4">
					<div class="card">
	  					<img class="card-img-top" src="img/xc90.jpg" alt="Card image cap">
	  					<div class="card-body">
	    					<h5 class="card-title">Volvo XC90</h5>
	    					<p class="card-text">Harmoningas šio automobilio dizainas nė nesistengia paslėpti sąžiningo jo charakterio. Kad ir koks būtų kelias, bene maloniausias būdas juo patekti iš taško A į tašką B – su Volvo XC90.
							</p>
	  					</div>
					  	<ul class="list-group list-group-flush">
					    	<li class="list-group-item">Variklis: 2.0</li>
					    	<li class="list-group-item">Vidutinės kuro sąnaudos 5,7l / 100km</li>
					    	<li class="list-group-item">Pavarų dėžė: <strong>Automatinė</strong></li>
					  	</ul>
	  					<div class="card-body">
	    					<a href="#uzsakymas" class="card-link">Užsisakyti</a>
	  					</div>
					</div>
				</div>

				<div class="col-md-4">
					<div class="card">
	  					<img class="card-img-top" src="img/bentley.jpg" alt="Card image cap">
	  					<div class="card-body">
	    					<h5 class="card-title">Bentley Continental GT</h5>
	    					<p class="card-text">Jau iš pirmo žvilgsnio tai – vienas gražesnių prabangių kupė automobilių pramonėje. Trečios kartos „Continental GT“ sudaro įspūdį, jog britai pasistengė su aerodinamika. Automobilio priekinė dalis smailesnė, joje kruopščiai įkomponuotos „Bentley“ grotelės bei 4 apvalūs žibintai.
							</p>
	  					</div>
					  	<ul class="list-group list-group-flush">
					    	<li class="list-group-item">Variklis: 6.0</li>
					    	<li class="list-group-item">Vidutinės kuro sąnaudos 12,2l / 100km</li>
					    	<li class="list-group-item">Pavarų dėžė: <strong>Automatinė</strong></li>
					  	</ul>
	  					<div class="card-body">
	    					<a href="#uzsakymas" class="card-link">Užsisakyti</a>
	  					</div>
					</div>
				</div>

				<div class="col-md-4">
					<div class="card">
	  					<img class="card-img-top" src="img/jaguar.jpg" alt="Card image cap">
	  					<div class="card-body">
	    					<h5 class="card-title">Jaguar XF</h5>
	    					<p class="card-text">Aptakiame, dinamiškame ir drąsiame XF modelyje puikiai dera įspūdingas sportinio automobilio efektyvumas ir elegantiškas neprilygstamos prabangos salonas, kuriame gali patogiai įsitaisyti penki suaugę asmenys. Šis įspūdingas dizainas pelnė daugiau kaip šimtą tarptautinių apdovanojimų.
							</p>
	  					</div>
					  	<ul class="list-group list-group-flush">
					    	<li class="list-group-item">Variklis: 2.0</li>
					    	<li class="list-group-item">Vidutinės kuro sąnaudos 4,5l / 100km</li>
					    	<li class="list-group-item">Pavarų dėžė: <strong>Automatinė</strong></li>
					  	</ul>
	  					<div class="card-body">
	    					<a href="#uzsakymas" class="card-link">Užsisakyti</a>
	  					</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-4">
					<div class="card">
	  					<img class="card-img-top" src="img/slc.jpg" alt="Card image cap">
	  					<div class="card-body">
	    					<h5 class="card-title">Mercedes-Benz SLC</h5>
	    					<p class="card-text">Pakaks tik vieno mygtuko paspaudimo, ir jūsų atviras SLK taps uždaru coupe, apsaugančiu jus nuo lietaus ir vėjo. SLK automobiliuose įdiegta labai daug naujovių. Patobulintas išorės ir vidaus dizainas, atnaujintos technologijos, didesnis papildomos įrangos ir variklių pasirinkimas.
							</p>
	  					</div>
					  	<ul class="list-group list-group-flush">
					    	<li class="list-group-item">Variklis: 2.0</li>
					    	<li class="list-group-item">Vidutinės kuro sąnaudos 6,6l / 100km</li>
					    	<li class="list-group-item">Pavarų dėžė: <strong>Automatinė</strong></li>
					  	</ul>
	  					<div class="card-body">
	    					<a href="#uzsakymas" class="card-link">Užsisakyti</a>
	  					</div>
					</div>
				</div>

				<div class="col-md-4">
					<div class="card">
	  					<img class="card-img-top" src="img/rs.jpg" alt="Card image cap">
	  					<div class="card-body">
	    					<h5 class="card-title">Ford Focus RS</h5>
	    					<p class="card-text">Naujas Ford Focus RS. Tai jau trečios kartos Focus RS ir trisdešimtas „Ford“ automobilis, dėvintis RS ženklelį. Metraštyje yra tokios legendos kaip Ford Escort RS 1600, Ford Sierra RS Cosworth ir keturiais ratais varomas 1992-ųjų Ford Escort RS Cosworth, tačiau nė vienas RS nebuvo toks galingas kaip naujasis Focus.
							</p>
	  					</div>
					  	<ul class="list-group list-group-flush">
					    	<li class="list-group-item">Variklis: 2.3</li>
					    	<li class="list-group-item">Vidutinės kuro sąnaudos 6,4l / 100km</li>
					    	<li class="list-group-item">Pavarų dėžė: <strong>Mechaninė</strong></li>
					  	</ul>
	  					<div class="card-body">
	    					<a href="#uzsakymas" class="card-link">Užsisakyti</a>
	  					</div>
					</div>
				</div>

				<div class="col-md-4">
					<div class="card">
	  					<img class="card-img-top" src="img/lc.jpg" alt="Card image cap">
	  					<div class="card-body">
	    					<h5 class="card-title">Lexus LC</h5>
	    					<p class="card-text">Projektuojant automobilį, Lexus inžinierių pagrindinis tikslas buvo išsaugoti originalaus koncepcinio LF-LC automobilio dizaino esminius elementus, sukuriant flagmaną kupė, atspindintį Lexus apibrėžiantį radikalų dizainąNe mažiau svarbu ir tai, kas glūdi po šio automobilio kėbulu.
							</p>
	  					</div>
					  	<ul class="list-group list-group-flush">
					    	<li class="list-group-item">Variklis: 3.5 (Hybrid)</li>
					    	<li class="list-group-item">Vidutinės kuro sąnaudos 0,0 / 100km</li>
					    	<li class="list-group-item">Pavarų dėžė: <strong>Automatinė</strong></li>
					  	</ul>
	  					<div class="card-body">
	    					<a href="#uzsakymas" class="card-link">Užsisakyti</a>
	  					</div>
					</div>
				</div>
			</div>
		</div>
	</article>



	<article id="uzsakymas">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1>Užsakymo forma</h1>
					<form action="" method="post">
						<div class="col-md-6 mx-auto">
							<div class="form-group">
		    					<input type="email" name="email" class="form-control" id="email" autocomplete="off" placeholder="Jūsų el. paštas" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required>
		  					</div>
	  					
							<div class="form-group">
		    					<input type="text" name="firstname" class="form-control" id="name" autocomplete="off" placeholder="Jūsų vardas" required>
		  					</div>
	  					
							<div class="form-group">
		    					<input type="text" name="lastname" class="form-control" id="lname" autocomplete="off" placeholder="Jūsų pavardė" required>
		  					</div>
	  					
							<div class="form-group">
		    					<input type="text" name="number" class="form-control" id="number" autocomplete="off" placeholder="Jūsų telefono numeris" required>
		  					</div>

		  					<div class="form-group">
		  						<label for="automobilis">Pasirinkite automobilį</label>
		  						<select name="automobilis" id="automobilis" class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
								    <option value="honda">Honda</option>
									<option value="audi">Audi</option>
									<option value="bmw">BMW</option>
									<option value="volvo">Volvo</option>
									<option value="bentley">Bentley</option>
									<option value="jaguar">Jaguar</option>
									<option value="mercedes">Mercedes-Benz</option>
									<option value="ford">Ford</option>
									<option value="lexus">Lexus</option>
								</select>
		  					</div>
	  						
	  						<div class="form-group">
	  							<textarea class="form-control" name="content" id="content" rows="5" placeholder="Jusu pageidaujami papildomi dalykai, pvz. Pilnas kuro bakas, draudimas asmenims neturintiems 25 metu"></textarea>
	  						</div>

	  						<div class="form-group">
	  							<button type="submit" id="submit" name="submit" class="btn btn-success">Užsisakyti</button>
	  						</div>
	  					</div>
					</form>
				</div>
			</div>
<?php include("includes/footer.php") ?>