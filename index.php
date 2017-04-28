<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Bublello</title>
		<link rel="stylesheet" href="css/style.css"/>
	</head>
 	<body>

		<!-- met cette pagge le temps que la page ce charge -->
			<!-- <div class="bl-loader" id="loader">
				<div class="bl-blobs">
				  <div class="bl-blob"></div>
				  <div class="bl-blob"></div>
				  <div class="bl-blob"></div>
					<div class="bl-blob">Chargement</div>
				</div>
			</div> -->
			<!-- effet de vague a la fin du loader -->
			<!-- <svg version="1.1" class="bl-vague" id="vague" viewBox="0 0 700 170" preserveAspectRation="none">
					<path d="M 0,0 0,100 C 0,80 224,50 350,90 475,150 700,100 700,100 L 700,0 Z"
					data-to="M 0,0 0,100 C 0,100 224,100 350,100 475,100 700,100 700,100 L 700,0 Z"/>
			</svg> -->

			<!-- filtre qui rend liquide -->
				<svg version="1.1">
					<filter id="goo">
						<feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur" />
						<feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo" />
						<feComposite in="SourceGraphic" in2="goo" operator="atop"/>
					</filter>
				</svg>


			<!-- debut du site web -->
			<nav class="bl-nav">

			</nav>
		<div class="bl-content">

			<h1>Bublello php and css framework</h1>

<!-- text -->
			<article class="bl-article">
				<h2> text</h2>
				class="bl-z-depth-0 shadow-demo"
				<p>
					ext ever szince the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets cont
					xt ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets cont
					xt ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets cont
				</p>
			<article>
<!-- shadow -->
			<article class="bl-article">
				<h2>Ombre</h2>
				<p>
					Dans le material design, toute chose devrait avoir un certain index de profondeur (z) déterminant à quelle hauteur se trouver l'élément par rapport à la page.
					<br />Pour cela il vous suffit de rajouter <code>class="bl-z-depth-x"</code> ou x est un entier compris entre 0 et 5 compris. <code>class="bl-z-depth-0"</code> peut etre utilisé pour enlever les ombres par default.
				</p>
				<p class="bl-z-depth-0 bl-shadow-demo">z-depth-0</p><p class="bl-z-depth-1 bl-shadow-demo">z-depth-1</p><p class="bl-z-depth-2 bl-shadow-demo">z-depth-2</p><p class="bl-z-depth-3 bl-shadow-demo">z-depth-3</p><p class="bl-z-depth-4 bl-shadow-demo">z-depth-4</p><p class="bl-z-depth-5 bl-shadow-demo">z-depth-5</p>

			<article>
<!-- code -->
			<article class="bl-article">
			<h2> code</h2>
			<p>On peut insérer facilement du code en grosse partie:</p>
				<textarea class="bl-code" disabled>

					'votre gros code'

				</textarea>
				<p>Soit des petits mots a ajouter directement dans du texte:</p>
				<code> 'votre petit bout de code' </code><br /><br />
				<textarea class="bl-code" disabled>
	<textarea class="bl-code" disabled>

		'votre gros code'

	<&#47;textarea>

	<code> 'votre petit bout de code' </code>
				</textarea>
			<article>
<!-- table -->
			<article class="bl-article">
				<h2> tableau</h2>
				<p>Les tableaux sont un bon moyen d'organiser de grandes quantités d'informations. Nous fournissons quelques classes afin d'aider la personnalisation des tableaux. De plus, afin d'améliorer l'expérience sur mobile, les tableaux sur les largeurs d'affichage mobile sont automatiquement centrées.<br />
				Les tableaux sont sans bordure par défaut vous pouvez ajouter des options dans l'atribut <code>class=" "</code> que vous pouvez fusioner.</p>
				<table class="bl-table">
					<thead>
						<tr>
							<th>Nom</th>
							<th>Prenom</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Pierre</td>
							<td>Jean</td>
						</tr>
						<tr>
							<td>Dupont</td>
							<td>Anabelle</td>
						</tr>
						<tr>
							<td>Doo</td>
							<td>Jhon</td>
						</tr>
					</tbody>
				</table><br />
				<textarea class="bl-code" disabled>
	<table class="bl-table">
		<thead>
			<tr>
				<th>Nom</th>
				<th>Prenom</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Pierre</td>
				<td>Jean</td>
			</tr>
			<tr>
				<td>Dupont</td>
				<td>Anabelle</td>
			</tr>
			<tr>
				<td>Doo</td>
				<td>Jhon</td>
			</tr>
		</tbody>
	</table>
				</textarea>
				<h3>Tableau à bordure</h3>
				<p>Ajoutez <code>class="bl-bordered"</code> pour ajouter des bordures</p>
				<table class="bl-table bl-bordered">
					<thead>
						<tr>
							<th>Nom</th>
							<th>Prenom</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Pierre</td>
							<td>Jean</td>
						</tr>
						<tr>
							<td>Dupont</td>
							<td>Anabelle</td>
						</tr>
						<tr>
							<td>Doo</td>
							<td>Jhon</td>
						</tr>
					</tbody>
				</table>

			<h3>Tableau rayé</h3>
			<p>Ajoutez <code>class="bl-striped"</code> pour avoir une ligne sur deux grisé.</p>
			<table class="bl-table bl-striped">
				<thead>
					<tr>
						<th>Nom</th>
						<th>Prenom</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Pierre</td>
						<td>Jean</td>
					</tr>
					<tr>
						<td>Dupont</td>
						<td>Anabelle</td>
					</tr>
					<tr>
						<td>Doo</td>
						<td>Jhon</td>
					</tr>
				</tbody>
			</table>

			<h3>Tableau rayé réactif</h3>
			<p>Ajoutez <code>class="bl-highlight"</code> pour avoir une ligne lorsque l'on passe par dessus.</p>
			<table class="bl-table bl-highlight">
				<thead>
					<tr>
						<th>Nom</th>
						<th>Prenom</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Pierre</td>
						<td>Jean</td>
					</tr>
					<tr>
						<td>Dupont</td>
						<td>Anabelle</td>
					</tr>
					<tr>
						<td>Doo</td>
						<td>Jhon</td>
					</tr>
				</tbody>
			</table>

			<h3>Tableau centré</h3>
			<p>Ajoutez <code>class="bl-centered"</code> pour aligner tout le texte en centré.</p>
			<table class="bl-table bl-centered">
				<thead>
					<tr>
						<th>Nom</th>
						<th>Prenom</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Pierre</td>
						<td>Jean</td>
					</tr>
					<tr>
						<td>Dupont</td>
						<td>Anabelle</td>
					</tr>
					<tr>
						<td>Doo</td>
						<td>Jhon</td>
					</tr>
				</tbody>
			</table>


		<article>
<!-- radio -->
			<article class="bl-article">
				<h2> radio</h2>
				<div class="bl-radio">
					<input type="radio" id="checkOui" value="oui" name="check" checked>
					<label for="checkOui">radio base</label>
					<div class="bl-check"></div>
				</div>
				<div class="bl-radio bl-classic">
					<input type="radio" id="checkNon" value="non" name="check">
					<label for="checkNon">radio classique</label>
					<div class="bl-check"></div>
				</div>
				<textarea class="bl-code" disabled>
	<div class="bl-radio">
		<input type="radio" id="checkOui" value="oui" name="check" checked>
		<label for="checkOui">radio de base</label>
		<div class="bl-check"></div>
	</div>

	<div class="bl-radio bl-classic">
		<input type="radio" id="checkNon" value="non" name="check">
		<label for="checkNon">radio classique</label>
		<div class="bl-check"></div>
	</div>
				</textarea>
			<article>
<!-- check box -->
			<article class="bl-article">
				<h2> check box</h2>
				<div class='bl-checkbox'>
					<input type='checkbox' id='CheckTest' name='CheckTest' >
					<label for='CheckTest'>Check box de base</label>
					<div class='bl-check'></div>
				</div>



				<textarea class="bl-code" disabled>
	<div class='bl-checkbox'>
		<input type='checkbox' id='CheckTest' name='CheckTest' >
		<label for='CheckTest'>Check box de base</label>
		<div class='bl-check'></div>
	</div>
				</textarea>
			<article>
<!-- select -->
			<article class="bl-article">
				<h2> select</h2>
				<select name="select" class="bl-custom-select bl-bubble" placeholder="Select de base">
					<option value="option 1">option 1 qui est courte</option>
					<option value="option 2">option 2 qui est plus longue</option>
					<option value="option 3">option 3</option>
					<option value="option 4">option 4</option>
				</select>
				<select name="select" class="bl-custom-select bl-classic" placeholder="Select classique">
					<option value="option 1">option 1 qui est courte</option>
					<option value="option 2">option 2 qui est plus longue</option>
					<option value="option 3">option 3</option>
					<option value="option 4">option 4</option>
				</select>

				<textarea class="bl-code" disabled>
	<select name="select" class="bl-custom-select bl-bubble" placeholder="Select de base">
		<option value="option 1">option 1 qui est courte</option>
		<option value="option 2">option 2 qui est plus longue</option>
		<option value="option 3">option 3</option>
		<option value="option 4">option 4</option>
	</select>

	<select name="select" class="bl-custom-select bl-classic" placeholder="Select classique">
		<option value="option 1">option 1 qui est courte</option>
		<option value="option 2">option 2 qui est plus longue</option>
		<option value="option 3">option 3</option>
		<option value="option 4">option 4</option>
	</select>
				</textarea>

			<article>
<!-- images responsive -->
			<article class="bl-article">
				<h2> image</h2>
				<div id="imgTest" class="bl-img bl-parallax" data-image-src="pictures/test1.jpg" data-image-height="50vh"></div>
				<p>Ces divs ont par default un min-heigt de 200px et la largeur de leurs parent mais vous pouvez changer leurs dimensions
				a bonne essient! Le code de base pour afficher une image responsive est:</p>
				<textarea class="bl-code" disabled>
<div class="bl-img" class="'your options'" data-image-src="path_to_image/image.jpg"></div>
				</textarea>
				Quelques options que vous pouvez fusioner a ajouter dans la balise img. <br /><br />
				<table class="bl-table highlight bordered">
	        <thead>
	          <tr>
								<th></th>
	              <th>Fonction</th>
	          </tr>
	        </thead>
	        <tbody>
	          <tr>
							<td><code>class="bl-grayscale"</code></td>
	            <td>image en noir et blanc</td>
	          </tr>
	          <tr>
							<td><code>class="bl-parallax"</code></td>
	            <td>image avec un effet paralax</td>
	          </tr>
						<tr>
							<td><code>data-image-height="20vh"</code></td>
	            <td>hauteur de l'image, vous pouvez remplacer <code>20vh</code> par nimporte quel autre unité de mesure</td>
	          </tr>
	        </tbody>
	      </table>
			<article>

		</div>


		<footer>

		</footer>
		<!-- importation js -->
		<script type="text/javascript" src="js/jquery-3.2.0.min.js"></script>
		<script type="text/javascript" src="js/dynamics.min.js"></script> <!--pour des effets de rebondissement -->
		<script type="text/javascript" src="js/elastic.js"></script> <!--pour avoir des textarea auto -->
		<script src='js/jquery.keyframes.min.js'></script><!--pour manipuler le svg -->
		<script src="js/parallax.js"></script> <!--pour un effet paralax -->
		<script type="text/javascript" src="js/functions.js"></script>
	</body>
</html>
