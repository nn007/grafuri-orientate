<?php 
	session_start();
	require 'database.php';
	if (isset($_SESSION['user_id'])) {
		$records= $conn->prepare('SELECT id,email,user,password FROM utilizatori WHERE id=:id ');
		$records->bindParam(':id', $_SESSION['user_id']);
		$records->execute();
		$results=$records->fetch(PDO::FETCH_ASSOC);

		$user=NULL;
		if (count($results)>0) {
			$user= $results;
		}

	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>Grafuri Orientate </title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style.css">

	

</head>
<body>

	<div class="header">
		<a href="index.php"></a>
	</div>

	

	<?php if (!empty($user)) {  ?>
	<!-- PAGE WITH USER LOGGED IN -->
	<ul class="nav justify-content-center">
		  	<li class="nav-item">
		    	<a class="nav-link" href="#teorie" id="toTeorie">TEORIE</a>
		  	</li>
		  	<li class="nav-item">
		    	<a class="nav-link" href="#video" id="toVideo">VIDEO</a>
		  	</li>
		  	<li class="nav-item">
		    	<a class="nav-link" href="quiz.php">TEST</a>
		  	</li>	  	
	</ul>

		<div class="bar">
			<span><u><?= $user['user'] ?></u> , bine ai venit!</span>
			<a href="logout.php">Logout ?</a>
		</div>
		
		<div id="particles-js">
			<div class="content">
				<h1>Grafuri Orientate</h1>
			</div>
			<button id="toTopButton" class="toTopButton"><i class="fas fa-arrow-circle-up" ></i></button>
		</div>


		<div class="jumbotron jumbotron-fluid wrapper" >

		  	<div class="container">
		  		<div class="row">
				    <p class="lead" id="teorie">

				    	<ul>Se numeşte graf orientat o pereche ordonată de multimi notată G=(V, U), unde:
							<li>
								V : este o multime, finită şi nevidă, ale cărei elemente se numesc noduri sau vârfuri;
							</li>
							<li>
								U : este o multime, de perechi ordonate de elemente distincte din V, ale cărei elemente se numesc arce.
							</li>
							<li>Exemplu de graf orientat:
								G=(V, U) unde: V={ 1,2,3,4}
								U={{1,2}, {2,3},{1,4}} 
							</li>
						</ul>
				    </p>
				    <p class="lead" id="teorie">
				    	<ul>În continuare, vom nota submultimea {x,y}, care reprezintă un arc, cu ( x,y) (într-un graf orientat arcul (x,y)
						este diferit de arcul ( y,x)). În baza celor spuse anterior, graful prezentat în exemplul de mai sus se reprezintă textual astfel: 
							<li>
								G=(V, U) unde: V={ 1,2,3,4}
								U={(1,2), (2,3), (1,4) } 
							</li>
						</ul>
						<ul>In teoria grafurilor orientate se întâlnesc frecvent notiunile: 
							<li><b>extremitătile unui arc</b><br>
								<ul>Fiind dat arcul u=(x,y), se numesc extremităti ale sale nodurile x şi y:
									<li>x se numeşte extremitate initială.</li>
									<li>y se numeşte extremitate finală.</li>
								</ul>	 
							</li>
							<li><b>vârfuri adiacente</b><br>
								<ul> dacă într-un graf există arcul u=(x,y) (sau u=(y,x), sau amândouă), se spune despre nodurile x şi y că sunt adiacente:
								</ul>	 
							</li>
							<li><b>incidenta</b><br>
								<ul> dacă ul şi u2 sunt două arce ale aceluiaşi graf, se numesc incidente dacă au o extremitate comună. </ul>
								<ul> dacă u1=(x,y) este un arc într-un graf, se spune despre el şi nodul x, sau nodul y, că sunt incidente. </ul>	 
							</li>
						</ul>
						<ul>Reprezentarea unui graf orientat admite două forme, şi anume: 
							<li>reprezentare textuală: aşa cum s-a reprezentat graful din exemplul anterior; </li>
							<li>reprezentare grafică : arcele sunt reprezentate prin săgeti orientate, iar nodurile prin puncte. </li>
							<ul>Exemplu de graf orientat reprezentat textual:
								<li>
									G=(V, U) unde: V={ 1,2,3,4}
									U={(1,2), (2,3), (1,4), (4,1)}
								</li>
							</ul>
							<ul>Exemplu de graf orientat reprezentat grafic 
								<li><img src="img/img1.png"></li>
							</ul>
							
						</ul>
				    </p>
				    <p class="lead" id="teorie">

				    	<ul><b>Notiunea de graf partial</b><br>
 							<li><b>Definitie:</b> Fie G=(V, U) un graf orientat. Se numeşte graf partial, al grafului G, graful orientat G1=(V, U1) unde U1 inclus U. 
 							</li>
								<ul>
									<img src="img/gfpartial.png" class="img-fluid" alt="Graf partial">
								</ul><b>Observatie!</b> Fie G=(V, U) un graf orientat. Un graf partial, al grafului G, se obtine păstrând vârfurile şi eliminând eventual nişte arce (se pot elimina şi toate arcele sau chiar nici unul). 
						</ul>
				    </p>
				    <p class="lead" id="teorie">

				    	<ul><b>Notiunea de graf subpartial</b><br>
 							<li><b>Definitie:</b> . Fie G=(V, U) un graf orientat. Se numeşte subgraf, al grafului G, graful orientat G1=(V1,U1) unde V1 inclus V iar U1 contine toate arcele din U care au extremitătile în V1. 
 							</li>
								<ul>
									<img src="img/gfsubgraf.png" class="img-fluid" alt="Subgraf">
								</ul><b>Observatie!</b>  Fie G=(V, U) un graf orientat. Un subgraf, al grafului G, se obtine ştergând eventual anumite vârfuri şi odată cu acestea şi arcele care le admit ca extremitate (nu se pot şterge toate vârfurile deoarece s-ar obtine un graf cu multimea vârfurilor vidă). 
						</ul>
				    </p>
				    <p class="lead" id="teorie">
				    	<ul><b>Gradul unui varf</b><br>
 							<ul><b>Gradul exterior</b>
 								<li>Fie G=(V, U) un graf orientat si x un nod al său. Se numeşte grad exterior al nodului x, numărul arcelor de forma (x,y) (adică numărul arcelor care ies din x), notat d<sup>+</sup>(x).
 									<ul>
 										<img src="img/gradexterior.png" class="img-fluid" alt="Grad exterior">
 									</ul>
								</li>
 							</ul>
 							<ul><b>Gradul interior</b>
 								<li>Fie G=(V, U) un graf orientat si x un nod al său. Se numeşte grad exterior al nodului x, numărul arcelor de forma (x,y) (adică numărul arcelor care ies din x), notat d<sup>-</sup>(x).
 									<ul>
 										<img src="img/gradinterior.png" class="img-fluid" alt="Grad interior">
 									</ul>
								</li>
 							</ul>
 							<ul>Un nod se numeşte <b>izolat</b> dacă: 
 								<li>
 									d<sup>+</sup>(x)=d<sup>-</sup>(x)=0
								</li>
 							</ul>
						</ul>
				    </p>
				    <p class="lead" id="teorie">
				    	<ul><b>Graf complet</b><br>
 							<ul>
 								<li>Fie G=(V, U) un graf orientat. Graful G se numeşte <b>graf complet</b> dacă oricare două vârfuri distincte ale sale sunt adiacente. 
 									<ul>
 										<img src="img/gfcomplet.png" class="img-fluid" alt="Graf complet">
 									</ul>
								</li>
 							</ul>
						</ul>
				    </p>
				    <p class="lead" id="teorie">
				    	<ul><b>Lant</b><br>
 							<ul>
 								<li> Fie G=(V, U) un graf orientat. Se numeşte <b>lant</b>, în graful G, o succesiune de arce, notată L=[u1,u2...uk],cu proprietatea ca oricare două arce consecutive au o extremitate comună (nu are importantă orientarea arcelor). 
 									<ul>
 										<img src="img/lant.png" class="img-fluid" alt="Lant">
 									</ul>
								</li>
 							</ul>
						</ul>
				    </p>
				    <p class="lead" id="teorie">
				    	<ul><b>Drum</b><br>
 							<ul>
 								<li>Fie G=(V,U) un graf orientat. Se numeste <b>drum</b>, o succesiune de noduri notata D=(x1,x2...xk), cu proprietatea (x1,x2),...,(xk-1,xk) sunt arce.
 									<ul>
 										<img src="img/drum.png" class="img-fluid" alt="Lant">
 									</ul>
								</li>
								<li>
									 Fie G=(V, U) un graf orientat: Se numeşte drum <b>elementar</b>, un drumu cu prorpietatea ca oricare doua noduri ale sale sunt distincte (printr-un nod se trece o singura data), in caz contrar drumul este <b>neelementar</b>
								</li>
 							</ul>
						</ul>
				    </p>
				    <p class="lead" id="teorie">
				    	<ul><b>Circuit</b><br>
 							<ul>
 								<li>Fie G=(V,U) un graf orientat. Se numeste <b>circuit</b>, drumul D=(x1,x2...xk), cu proprietatea x1=xk si are arcele cel putin diferite două câte două.
 									<ul>
 										<img src="img/circuit.png" class="img-fluid" alt="Circuit">
 									</ul>
								</li>
								<li>
									Fie G=(V, U) un graf orientat. Se numeşte <b>circuit elementar</b>, un circuit cu proprietatea că oricare două noduri ale sale, cu exceptia primului şi a ultimului, sunt distincte, in caz contrar se numeste <b>circuit neelementar</b> 
								</li>
 							</ul>
						</ul>
				    </p>
				    <p class="lead" id="teorie">
				    	<ul><b>Graf conex</b><br>
 							<ul>
 								<li>Fie G=(V, U) un graf orientat. Graful G se numeşte <b>conex</b> dacă pentru oricare două vârfuri x şi y, x!=y, există un lant de extremităti x şi y. 
 									<ul>
 										<img src="img/gfconex.png" class="img-fluid" alt="Graf conex">
 									</ul>
								</li>
 							</ul>
						</ul>
				    </p>
				    <p class="lead" id="teorie">
				    	<ul><b>Componentă conexă</b><br>
 							<ul>
 								<li>Fie G=(V, U) un graf orientat. Se numeşte <b>componentă conexă</b> un graf orientat G1=(V1 ,U1) careverifică următoarele conditii:
 								<li>este subgraf al grafului G; </li> 
 								<li>este conex;</li> 
 								<li>nu există nici un lant în G care să lege un nod din V, cu an nod din V-V1. </li>
 									<ul>
 										<img src="img/cmpconexa.png" class="img-fluid" alt="Componenta conexa">
 									</ul>
								</li>
 							</ul>
						</ul>
				    </p>
				    <p class="lead" id="teorie">
				    	<ul><b>Reprezentarea grafurilor</b><br>
 							<ul>
 								<img src="img/matrice.png" class="img-fluid" alt="Matrice">
 							</ul>
						</ul>
				    </p>
				    
				</div>
		  	</div>
		  	<hr>
		</div>
		<!-- VIDEO PART -->
		<div class="jumbotron jumbotron-fluid " >
		  	<div class="container" id="video">
			    <div class="embed-responsive embed-responsive-16by9">
					<iframe class="embed-responsive-item" src="//www.youtube.com/embed/f3otiJBjtwY" allowfullscreen></iframe>
				</div>
		  	</div>
		</div>
		

	<!-- END OF PAGE USER LOGGEND IN -->


	<!-- MAIN PAGE WITHOUT LOG IN -->
	<?php }else{ ?>

		<ul class="nav justify-content-center">
		  	<li class="nav-item">
		    	<a class="nav-link" href="#teorie" id="toTeorie">TEORIE</a>
		  	</li>
		  	<li class="nav-item">
		    	<a class="nav-link" href="#video" id="toVideo">VIDEO</a>
		  	</li>
		  	<li class="nav-item">
		    	<a class="nav-link" href="quiz.php">TEST</a>
		  	</li>
		  	
		</ul>
		

		
		<div id="particles-js" class="particles-js">
			<div class="content">
				<h1>Grafuri Orientate</h1>
				<a href="login.php">Login</a> or
				<a href="register.php">Register</a>
			</div>
			<button id="toTopButton" class="toTopButton"><i class="fas fa-arrow-circle-up" ></i></button>
		</div>


		<div class="jumbotron jumbotron-fluid wrapper" >
		  	<div class="container">
		  		<div class="row">

				    <p class="lead" id="teorie">
				    	<ul>Se numeşte graf orientat o pereche ordonată de multimi notată G=(V, U), unde:
							<li>
								V : este o multime, finită şi nevidă, ale cărei elemente se numesc noduri sau vârfuri;
							</li>
							<li>
								U : este o multime, de perechi ordonate de elemente distincte din V, ale cărei elemente se numesc arce.
							</li>
							<li>Exemplu de graf orientat:
								G=(V, U) unde: V={ 1,2,3,4}
								U={{1,2}, {2,3},{1,4}} 
							</li>
						</ul>
				    </p>
				    <p class="lead" id="teorie">
				    	<ul>În continuare, vom nota submultimea {x,y}, care reprezintă un arc, cu ( x,y) (într-un graf orientat arcul (x,y)
						este diferit de arcul ( y,x)). În baza celor spuse anterior, graful prezentat în exemplul de mai sus se reprezintă textual astfel: 
							<li>
								G=(V, U) unde: V={ 1,2,3,4}
								U={(1,2), (2,3), (1,4) } 
							</li>
						</ul>
						<ul>In teoria grafurilor orientate se întâlnesc frecvent notiunile: 
							<li><b>extremitătile unui arc</b><br>
								<ul>Fiind dat arcul u=(x,y), se numesc extremităti ale sale nodurile x şi y:
									<li>x se numeşte extremitate initială.</li>
									<li>y se numeşte extremitate finală.</li>
								</ul>	 
							</li>
							<li><b>vârfuri adiacente</b><br>
								<ul> dacă într-un graf există arcul u=(x,y) (sau u=(y,x), sau amândouă), se spune despre nodurile x şi y că sunt adiacente:
								</ul>	 
							</li>
							<li><b>incidenta</b><br>
								<ul> dacă ul şi u2 sunt două arce ale aceluiaşi graf, se numesc incidente dacă au o extremitate comună. </ul>
								<ul> dacă u1=(x,y) este un arc într-un graf, se spune despre el şi nodul x, sau nodul y, că sunt incidente. </ul>	 
							</li>
						</ul>
						<ul>Reprezentarea unui graf orientat admite două forme, şi anume: 
							<li>reprezentare textuală: aşa cum s-a reprezentat graful din exemplul anterior; </li>
							<li>reprezentare grafică : arcele sunt reprezentate prin săgeti orientate, iar nodurile prin puncte. </li>
							<ul>Exemplu de graf orientat reprezentat textual:
								<li>
									G=(V, U) unde: V={ 1,2,3,4}
									U={(1,2), (2,3), (1,4), (4,1)}
								</li>
							</ul>
							<ul>Exemplu de graf orientat reprezentat grafic 
								<li><img src="img/img1.png"></li>
							</ul>
							
						</ul>
				    </p>

				</div>

				<div class="row">
					<button type="button" class="btn btn-default moreInfo"><a href="login.php">Vrei mai mult, autentificate!</a> </button>
				</div>
		  	</div>
		  	<hr>
		</div>
		<!-- VIDEO PART -->
		<div class="jumbotron jumbotron-fluid " >
		  	<div class="container" id="video">
			    <div class="embed-responsive embed-responsive-16by9">
					<iframe class="embed-responsive-item" src="//www.youtube.com/embed/f3otiJBjtwY" allowfullscreen></iframe>
				</div>
		  	</div>
		</div>

		
		

	<?php } ?>
	<!-- END OF MAIN PAGE WITHOUT LOG IN -->

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>
	<script src="JS/particles.js"></script>
	<script src="JS/app.js"></script>

	<script src="JS/script.js"></script>
</body>
</html>