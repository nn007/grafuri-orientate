<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>Grafuri Orientate Test</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">


	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/quizstyle.css">



</head>
<body>
	<ul class="nav justify-content-center">
		  	<li class="nav-item">
		    	<a class="nav-link" href="index.php"><i class="fas fa-home"></i></a>
		  	</li>	  	
	</ul>
	<div class="jumbotron jumbotron-fluid">
		<div class="container">
				<h2>Alegeti numai varianta corecta</h2>

				<form action="quizcode.php" method="post">
					<div class="wrapper">
						<div class="row">
							<div class="col-md-6">
								<h3>Un graf orientat contine...</h3>
								<p><input type="radio" name="q1"  value="A" />
								<label > Noduri si arce </label></p>
								<p><input type="radio" name="q1"  value="B" />
								<label > Noduri si muchii</label></p>
								<p><input type="radio" name="q1"  value="C" />
								<label > Noduri si arii</label></p>
							</div>
							<div class="col-md-6">
								<h3>Graf orientat are...</h3>
								<p><input type="radio" name="q2"  value="A" />
								<label > Muchii </label></p>
								<p><input type="radio" name="q2"  value="B" />
								<label > Varfuri adiacente</label></p>
								<p><input type="radio" name="q2  value="C" />
								<label > Vectori</label></p>
							</div>
						</div>
						<div class="row">	
							<div class="col-md-6">
								<h3>Un graf partial se obtine...</h3>
								<p><input type="radio" name="q3"  value="A" />
								<label > Prin eliminarea nodurilor </label></p>
								<p><input type="radio" name="q3"  value="B" />
								<label > Prin eliminarea varfurilor</label></p>
								<p><input type="radio" name="q3"  value="C" />
								<label > Prin eliminarea unor arce </label></p>
							</div>
							<div class="col-md-6">
								<h3>Un subgraf se obtine...</h3>
								<p><input type="radio" name="q4"  value="A" />
								<label > Stergand anumite noduri </label></p>
								<p><input type="radio" name="q4"  value="B" />
								<label > Stergand anumite muchii</label></p>
								<p><input type="radio" name="q4"  value="C" />
								<label > Stergand anumite arce </label></p>
							</div>
						</div>
						<div class="row">	
							<div class="col-md-6">
								<h3>Gradul exterior se noteaza...</h3>
								<p><input type="radio" name="q5"  value="A" />
								<label > d<sup>+</sup>(x) </label></p>
								<p><input type="radio" name="q5"  value="B" />
								<label > d<sup>-</sup>(x) </label></p>
								<p><input type="radio" name="q5"  value="C" />
								<label > g<sup>+</sup>(x) </label></p>
							</div>
							<div class="col-md-6">
								<h3>Graful complet are...</h3>
								<p><input type="radio" name="q6"  value="A" />
								<label >  Oricare doua varfuri adiacente</label></p>
								<p><input type="radio" name="q6"  value="B" />
								<label > Toate gradele egale</label></p>
								<p><input type="radio" name="q6"  value="C" />
								<label > Cel putin 6 noduri </label></p>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<h3>Într-un graf orientat cu 7 noduri suma gradelor interioare ale tuturor nodurilor este egală cu 10. Care este valoarea sumei gradelor exterioare ale tuturor nodurilor? </h3>
								<p><input type="radio" name="q7"  value="A" />
								<label > 5 </label></p>
								<p><input type="radio" name="q7"  value="B" />
								<label > 20</label></p>
								<p><input type="radio" name="q7"  value="C" />
								<label > 10 </label></p>
							</div>
							<div class="col-md-6">
								<h3>Un graf orientat este memorat cu ajutorul listelor de adiacenţă scrise alăturat. Nodurile care au gradul exterior egal cu 2 sunt: 1:(5,6) 2:(1,5,4) 3:(1,5)  4:(1,2)  5:(2) 6:(2,4,5)</h3>
								<p><input type="radio" name="q8"  value="A" />
								<label >  2,5</label></p>
								<p><input type="radio" name="q8"  value="B" />
								<label > 1,3,4</label></p>
								<p><input type="radio" name="q8"  value="C" />
								<label >  2,3</label></p>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<h3>Care dintre următoarele propoziţii NU este adevărată pentru graful orientat cu 6 vârfuri,numerotate de la 1 la 6 şi ale cărui arce sunt: (2,1), (3,6), (4,1), (4,3), (4,5),(5,2), (6,4)</h3>
								<p><input type="radio" name="q9"  value="A" />
								<label >  vârful numerotat cu 6 aparţine unui circuit</label></p>
								<p><input type="radio" name="q9"  value="B" />
								<label >  vârful numerotat cu 1 are gradul extern 0</label></p>
								<p><input type="radio" name="q9"  value="C" />
								<label >  graful nu are circuite</label></p>
							</div>
							<div class="col-md-6">
								<h3>Fie graful orientat cu 5 noduri si arcele (1,2),(2,1),(2,3),(3,2),(3,4).Numarul minim de arce ce trebuie adaugate pentru ca graful sa devina conex este: </h3>
								<p><input type="radio" name="q10"  value="A" />
								<label >  1</label></p>
								<p><input type="radio" name="q10"  value="B" />
								<label >  2</label></p>
								<p><input type="radio" name="q11"  value="C" />
								<label >  3</label></p>
							</div>
						</div>

					<input type="submit" value="Verifica" />	
					</div>	

					
					
				</form>

				


					<?php if(!empty($message)){ ?>		
						<p><?= $message ?></p>
					<?php } ?>
		</div>	
	</div>

	

	<script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>

</body>
</html>