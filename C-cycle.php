<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
    <title>C-cycle</title>
	<style>
		#accordion{
			box-shadow:10px 10px rgba(0,0,0,0.2)
		}
		#accordion .card{
			border:1px inset gray;
		}
		#nav{
			font-size:20px !important;
			
		}
		#nav a{
			color:rgb(196, 196, 196) !important;
		}
		#nav a:hover{
			color:white !important;
		}
		#navbar a:hover{
			color:black !important;
		}
		body{
			height:100%;
			background-color:rgb(214, 214, 214);
		}
		
	</style>
  </head>
  <body>
		<div class="jumbotron bg-dark text-light">
			<h4 class="display-1 text-center font-weight-bold ">Chemistry Cycle</h4>
			<ul class="nav justify-content-end mt-5" id="nav" >
			  <li class="nav-item active"><a class="nav-link" href="E-learning_Homepage.html">Home</a></li>
					<li class="nav-item ml-0"><a class="nav-link" href="about.html">About Us</a></li>
					<li class="nav-item ml-0"><a class="nav-link" href="contact.html">Contact Us</a></li>
					<li class="nav-item ml-0"><a class="nav-link" href="">Forum</a></li>
					<li class="nav-item dropdown ml-0">
						<a class="nav-link dropdown-toggle " href="" data-toggle="dropdown">Sem</a>
						<div class="dropdown-menu bg-dark" id="navbar">
							<a class="dropdown-item text-light" href="P-cycle.php">P-cycle</a>
							<a class="dropdown-item" href="C-cycle.php">C-cycle</a>
							<a class="dropdown-item" href="sem3.php">Sem 3</a>
							<a class="dropdown-item" href="sem4.php">Sem 4</a>
							<a class="dropdown-item" href="sem5.php">Sem 5</a>
							<a class="dropdown-item" href="sem6.php">Sem 6</a>
							<a class="dropdown-item" href="sem7.php">Sem 7</a>
							<a class="dropdown-item"href="sem8.php">Sem 8</a>
						</div>
					</li>
					<form class="form-inline">
					<input class="form-control mr-2" type="search" placeholder="Search...">
					<button class="btn btn-outline-success" id="search">Search</button>
				</form>
		</ul>
		
		</div>
		<div class="container">
			<div id="accordion">
			
				<div class="card">
					<div class="card-header">
						<a class="card-link text-dark text-center" data-toggle="collapse" data-parent="#accordion" href="#mat"><h3 class="display-5">Engineering Mathematics -II</h3></a>
					</div>
					<div class="collapse fade" id="mat">
						<div class="card-body">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">Module 1</h4>
								</div>
								<div class="card-body">
									<p class="card-text">
										<strong>Linear differential equations with constant coefficients</strong><br>
										Linear differential equations with constant coefficients:
										Solutions of second and higher order differential equations - inverse differential operator method, method of undetermined coefficients and method ofvariation of parameters.
									</p>
									<div class="btn-group">
										<button type="button" class="btn btn-dark mx-auto">Download</button>
										<button type="button" class="btn btn-dark dropdown-toggle dropdown-toggle-split" data-toggle="dropdown"><span class="caret"></span></button>
										<div class="dropdown-menu">
											<a class="dropdown-item" href="">Notes</a>
											<a class="dropdown-item" href="">PPTs</a>
											<a class="dropdown-item" href="">Videos</a>
										</div>
									</div>
								</div>
							</div>
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">Module 2</h4>
								</div>
								<div class="card-body">
									<p class="card-text">
										<strong>Differential equations-2</strong><br>
										Differential equations-2:
										Linear differential equations with variable coefficients: Solution ofCauchy’s and Legendre’s linear differential equations.Nonlinear differential equations - Equations solvable for p,equations solvable for y, equations solvable for x, general and singularsolutions, Clairauit’s equations and equations reducible to Clairauit’sform.
									</p>
									<div class="btn-group">
										<button type="button" class="btn btn-dark mx-auto">Download</button>
										<button type="button" class="btn btn-dark dropdown-toggle dropdown-toggle-split" data-toggle="dropdown"><span class="caret"></span></button>
										<div class="dropdown-menu">
											<a class="dropdown-item" href="">Notes</a>
											<a class="dropdown-item" href="">PPTs</a>
											<a class="dropdown-item" href="">Videos</a>
										</div>
									</div>
								</div>
							</div>
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">Module 3</h4>
								</div>
								<div class="card-body">
									<p class="card-text">
										<strong>Partial Differential equations</strong><br>
										Partial Differential equations:
										Formulation of Partial differential equations by elimination ofarbitrary constants/functions, solution of non-homogeneous Partialdifferential equations by direct integration, solution of homogeneousPartial differential equations involving derivative with respect to oneindependent variable only.
										Derivation of one dimensional heat and wave equations and theirsolutions by variable separable method.			
									</p>
									<div class="btn-group">
										<button type="button" class="btn btn-dark mx-auto">Download</button>
										<button type="button" class="btn btn-dark dropdown-toggle dropdown-toggle-split" data-toggle="dropdown"><span class="caret"></span></button>
										<div class="dropdown-menu">
											<a class="dropdown-item" href="">Notes</a>
											<a class="dropdown-item" href="">PPTs</a>
											<a class="dropdown-item" href="">Videos</a>
										</div>
									</div>
								</div>
								
							</div>
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">Module 4</h4>
								</div>
								<div class="card-body">
									<p class="card-text">
										<strong>Integral Calculus</strong><br>
										Double and triple integrals: Evaluation of double and tripleintegrals. Evaluation of double integrals by changing the order ofintegration and by changing into polar co-ordinates. Application ofdouble and triple integrals to find area and volume.
										Beta and Gamma functions: definitions, Relation between beta and gammafunctions and simple problems.	
									</p>
									<div class="btn-group">
										<button type="button" class="btn btn-dark mx-auto">Download</button>
										<button type="button" class="btn btn-dark dropdown-toggle dropdown-toggle-split" data-toggle="dropdown"><span class="caret"></span></button>
										<div class="dropdown-menu">
											<a class="dropdown-item" href="">Notes</a>
											<a class="dropdown-item" href="">PPTs</a>
											<a class="dropdown-item" href="">Videos</a>
										</div>
									</div>
								</div>
								
							</div>
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">Module 5</h4>
								</div>
								<div class="card-body">
									<p class="card-text">
										<strong>Laplace Transform</strong><br>
												Laplace Transform:
												Definition and Laplace transforms of elementary functions.Laplace transforms of (without proof) ,periodic functions and unit-step function- problemsInverse Laplace Transform
												Inverse Laplace Transform - problems, Convolution theorem tofind the inverse Laplace transforms(without proof) and problems,solution of linear differential equations using Laplace Transforms.
									</p>
									<div class="btn-group">
										<button type="button" class="btn btn-dark mx-auto">Download</button>
										<button type="button" class="btn btn-dark dropdown-toggle dropdown-toggle-split" data-toggle="dropdown"><span class="caret"></span></button>
										<div class="dropdown-menu">
											<a class="dropdown-item" href="">Notes</a>
											<a class="dropdown-item" href="">PPTs</a>
											<a class="dropdown-item" href="">Videos</a>
										</div>
									</div>
								</div>
								
							</div>
						</div>
					</div>
			</div>
			
				<div class="card">
					<div class="card-header">
						<a class="card-link text-dark text-center" data-toggle="collapse" data-parent="#accordion" href="#chem"><h3 class="display-5">Engineering Chemistry</h3></a>
					</div>
					<div class="collapse fade" id="chem">
						<div class="card-body">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">Module 1</h4>
								</div>
								<div class="card-body">
									<p class="card-text">
										<strong>Electrochemistry and Battery Technology</strong><br>
										Electrochemistry: Introduction, Derivation of Nernst equation forelectrode potential. Reference electrodes: Introduction,construction, working and applications of calomel and Ag / AgClelectrodes. Measurement of electrode potential using calomelelectrode. Ion selective electrode: Introduction; Construction andworking of glass electrode, determination of pH using glasselectrode. Concentration cells: Electrolyte concentration cells,numerical problems.
										Battery Technology: Introduction, classification - primary,secondary and reserve batteries. Characteristics - cell potential,current, capacity, electricity storage density, energy efficiency, cycle life and shelf life. Construction, working and applications of Zinc Air,Nickel- metal hydride batteries. Lithium batteries: Introduction,construction, working and applications of Li-MnO2 and Li-ionbatteries.
										Fuel Cells: Introduction, difference between conventional cell andfuel cell, limitations & advantages. Construction, working &applications of methanol-oxygen fuel cell with H2SO4 electrolyte.
									</p>
									<div class="btn-group">
										<button type="button" class="btn btn-dark mx-auto">Download</button>
										<button type="button" class="btn btn-dark dropdown-toggle dropdown-toggle-split" data-toggle="dropdown"><span class="caret"></span></button>
										<div class="dropdown-menu">
											<a class="dropdown-item" href="">Notes</a>
											<a class="dropdown-item" href="">PPTs</a>
											<a class="dropdown-item" href="">Videos</a>
										</div>
									</div>
								</div>
							</div>
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">Module 2</h4>
								</div>
								<div class="card-body">
									<p class="card-text">
										<strong>Corrosion and Metal Finishing</strong><br>
										Corrosion: Introduction, electrochemical theory of corrosion,galvanic series. Factors affecting the rate of corrosion: ratio ofanodic to cathodic areas, nature of metal, nature of corrosionproduct, nature of medium – pH, conductivity, and temperature.Types of corrosion- Differential metal, differential aeration (Pittingand water line) and stress. Corrosion control: Inorganic coatingsAnodizingof Al and phosphating; Metal coatings-Galvanization andTinning. Cathodic protection (sacrificial anodic and impressedcurrent methods).
										Metal Finishing: Introduction, Technological importance.Electroplating: Introduction, principles governing-Polarization,decomposition potential and overvoltage. Factors influencing thenature of electro deposit-current density, concentration of metal ion& electrolyte; pH, temperature & throwing power of plating bath;additives- brighteners, levellers, structure modifiers & wettingagents. Electroplating of Nickel (Watt’s Bath) andChromium(decorative and hard). Electro less plating: Introduction,distinction between electroplating and electro less plating, electroless plating of copper & manufacture of double sided PrintedCircuit Board with copper.
									</p>
									<div class="btn-group">
										<button type="button" class="btn btn-dark mx-auto">Download</button>
										<button type="button" class="btn btn-dark dropdown-toggle dropdown-toggle-split" data-toggle="dropdown"><span class="caret"></span></button>
										<div class="dropdown-menu">
											<a class="dropdown-item" href="">Notes</a>
											<a class="dropdown-item" href="">PPTs</a>
											<a class="dropdown-item" href="">Videos</a>
										</div>
									</div>
								</div>
							</div>
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">Module 3</h4>
								</div>
								<div class="card-body">
									<p class="card-text">
										<strong>Fuels and Solar Energy</strong><br>
										Fuels: Introduction, classification, calorific value- gross andnet calorific values, determination of calorific value of fuel usingbomb calorimeter, numerical problems. Cracking: Introduction,fluidized catalytic cracking, synthesis of petrol by Fishcher-Tropschprocess, reformation of petrol, octane and cetane numbers.Gasoline and diesel knocking and their mechanism, anti knockingagents, power alcohol & biodiesel.
										Solar Energy: Introduction, utilization and conversion,photovoltaic cells- construction and working. Design of PV cells:modules, panels & arrays. Advantages & disadvantages of PV cells.Production of solar grade silicon: Union carbide process,purification of silicon (zone refining), doping of silicon-diffusiontechnique (n&p types).
									</p>
									<div class="btn-group">
										<button type="button" class="btn btn-dark mx-auto">Download</button>
										<button type="button" class="btn btn-dark dropdown-toggle dropdown-toggle-split" data-toggle="dropdown"><span class="caret"></span></button>
										<div class="dropdown-menu">
											<a class="dropdown-item" href="">Notes</a>
											<a class="dropdown-item" href="">PPTs</a>
											<a class="dropdown-item" href="">Videos</a>
										</div>
									</div>
								</div>
								
							</div>
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">Module 4</h4>
								</div>
								<div class="card-body">
									<p class="card-text">
										<strong>Polymers</strong><br>
										Introduction, types of polymerization:
										addition and condensation,mechanism of polymerization- free radical mechanism taking vinylchloride as an example. Molecular weight of polymers: numberaverage and weight average, numerical problems. Glass transitiontemperature (Tg): Factors influencing Tg-Flexibility, inter molecularforces, molecular mass, branching & cross linking and stereoregularity. Significance of Tg. Structure property relationship:crystallinity, tensile strength, elasticity & chemical resistivity.Synthesis, properties and applications of PMMA (plexi glass),Polyurethane and polycarbonate. Elastomers: Introduction,synthesis, properties and applications of Silicone rubber.Adhesives: Introduction, synthesis, properties and applications ofepoxy resin. Polymer Composites: Introduction, synthesis,properties and applications of Kevlar. Conducting polymers:Introduction, mechanism of conduction in Poly aniline andapplications of conducting poly aniline.	
									</p>
									<div class="btn-group">
										<button type="button" class="btn btn-dark mx-auto">Download</button>
										<button type="button" class="btn btn-dark dropdown-toggle dropdown-toggle-split" data-toggle="dropdown"><span class="caret"></span></button>
										<div class="dropdown-menu">
											<a class="dropdown-item" href="">Notes</a>
											<a class="dropdown-item" href="">PPTs</a>
											<a class="dropdown-item" href="">Videos</a>
										</div>
									</div>
								</div>
								
							</div>
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">Module 5</h4>
								</div>
								<div class="card-body">
									<p class="card-text">
										<strong>Water Technology and Nanomaterials</strong><br>
												Water Technology: Introduction, boiler troubles withdisadvantages & prevention methods-scale and sludge formation,priming and foaming, boiler corrosion(due to dissolved O2, CO2 andMgCl2). Determination of DO, BOD and COD, numerical problemson COD. Sewage treatment: Primary, secondary (activated sludgemethod) and tertiary methods. Softening of water by ion exchangeprocess. Desalination of sea water by reverse osmosis & electrodialysis (ion selective).
												Nano Materials: Introduction, properties (size dependent).Synthesis-bottom up approach (sol-gel, precipitation, gascondensation & chemical vapour condensation processes). Nanoscale materials- carbon nano tubes, nano wires, fullerenes,dendrimers, nano rods, & nano composites.	
									</p>
									<div class="btn-group">
										<button type="button" class="btn btn-dark mx-auto">Download</button>
										<button type="button" class="btn btn-dark dropdown-toggle dropdown-toggle-split" data-toggle="dropdown"><span class="caret"></span></button>
										<div class="dropdown-menu">
											<a class="dropdown-item" href="">Notes</a>
											<a class="dropdown-item" href="">PPTs</a>
											<a class="dropdown-item" href="">Videos</a>
										</div>
									</div>
								</div>
								
							</div>
						</div>
					</div>
			</div>
			
			<div class="card">
					<div class="card-header">
						<a class="card-link text-dark text-center" data-toggle="collapse" data-parent="#accordion" href="#pcd"><h3 class="display-5">Programming in C and Data Structures </h3></a>
					</div>
					<div class="collapse fade" id="pcd">
						<div class="card-body">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">Module 1</h4>
								</div>
								<div class="card-body">
									<p class="card-text">
										<strong>Introduction to C language</strong><br>
										Pseudo code solution to problem, Basic concepts in a C program,Declaration, Assignment & Print statements, Data Types,operators and expressions etc, Programming examples andexercise.
										
									</p>
									<div class="btn-group">
										<button type="button" class="btn btn-dark mx-auto">Download</button>
										<button type="button" class="btn btn-dark dropdown-toggle dropdown-toggle-split" data-toggle="dropdown"><span class="caret"></span></button>
										<div class="dropdown-menu">
											<a class="dropdown-item" href="">Notes</a>
											<a class="dropdown-item" href="">PPTs</a>
											<a class="dropdown-item" href="">Videos</a>
										</div>
									</div>
								</div>
							</div>
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">Module 2</h4>
								</div>
								<div class="card-body">
									<p class="card-text">
										<strong>Branching and Looping</strong><br>
												Two way selection (if, if-else, nested if-else, cascaded if-else),switch statement, ternary operator? Go to, Loops (For, while-do,do-while) in C, break and continue, Programming examples andexercises.
												
									</p>
									<div class="btn-group">
										<button type="button" class="btn btn-dark mx-auto">Download</button>
										<button type="button" class="btn btn-dark dropdown-toggle dropdown-toggle-split" data-toggle="dropdown"><span class="caret"></span></button>
										<div class="dropdown-menu">
											<a class="dropdown-item" href="">Notes</a>
											<a class="dropdown-item" href="">PPTs</a>
											<a class="dropdown-item" href="">Videos</a>
										</div>
									</div>
								</div>
							</div>
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">Module 3</h4>
								</div>
								<div class="card-body">
									<p class="card-text">
										<strong>Functions, Arrays and Strings</strong><br>
										ARRAYS AND STRINGS: Using an array, Using arrays withFunctions, Multi-Dimensional arrays. String: Declaring,Initializing, Printing and reading strings, string manipulationfunctions, String input and output functions, array of strings,Programming examples and Exercises.
										FUNCTIONS: Functions in C, Argument Passing – call by value,call by reference, Functions and program structure, location offunctions, void and parameter less Functions, Recursion,Programming examples and exercises.
									</p>
									<div class="btn-group">
										<button type="button" class="btn btn-dark mx-auto">Download</button>
										<button type="button" class="btn btn-dark dropdown-toggle dropdown-toggle-split" data-toggle="dropdown"><span class="caret"></span></button>
										<div class="dropdown-menu">
											<a class="dropdown-item" href="">Notes</a>
											<a class="dropdown-item" href="">PPTs</a>
											<a class="dropdown-item" href="">Videos</a>
										</div>
									</div>
								</div>
								
							</div>
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">Module 4</h4>
								</div>
								<div class="card-body">
									<p class="card-text">
										<strong>Structures and File Management</strong><br>
										Basic of structures, structures and Functions, Array ofstructures, structure Data types, type definition, Defining, openingand closing of files, Input and output operations, Programmingexamples and exercises.
									</p>
									<div class="btn-group">
										<button type="button" class="btn btn-dark mx-auto">Download</button>
										<button type="button" class="btn btn-dark dropdown-toggle dropdown-toggle-split" data-toggle="dropdown"><span class="caret"></span></button>
										<div class="dropdown-menu">
											<a class="dropdown-item" href="">Notes</a>
											<a class="dropdown-item" href="">PPTs</a>
											<a class="dropdown-item" href="">Videos</a>
										</div>
									</div>
								</div>
								
							</div>
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">Module 5</h4>
								</div>
								<div class="card-body">
									<p class="card-text">
										<strong>Pointers and Preprocessors & Data structures</strong><br>
										Pointers and address, pointers and functions (call by reference)arguments, pointers and arrays, address arithmetic, characterpointer and functions, pointers to pointer ,Initialization of pointerarrays, Dynamic memory allocations methods, Introduction toPreprocessors, compiler control Directives, Programming examplesand exercises.
										Introduction to Data Structures: Primitive and non primitivedata types, Abstract data types, Definition and applications ofStacks, Queues, Linked Lists and Trees.	
									</p>
									<div class="btn-group">
										<button type="button" class="btn btn-dark mx-auto">Download</button>
										<button type="button" class="btn btn-dark dropdown-toggle dropdown-toggle-split" data-toggle="dropdown"><span class="caret"></span></button>
										<div class="dropdown-menu">
											<a class="dropdown-item" href="">Notes</a>
											<a class="dropdown-item" href="">PPTs</a>
											<a class="dropdown-item" href="">Videos</a>
										</div>
									</div>
								</div>
								
							</div>
						</div>
					</div>
			</div>
			
			<div class="card">
					<div class="card-header">
						<a class="card-link text-dark text-center" data-toggle="collapse" data-parent="#accordion" href="#cad"><h3 class="display-5">Computer Aided Engineering Drawing </h3></a>
					</div>
					<div class="collapse fade" id="cad">
						<div class="card-body">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">Module 1</h4>
								</div>
								<div class="card-body">
									<p class="card-text">
										<strong>Introduction to Computer Aided Sketching</strong><br>
										
										Introduction, Drawing Instruments and their uses, BISconventions, Lettering, Dimensioning and free hand practicing.Computer screen, layout of the software, standard toolbar/menus and description of most commonly used tool bars,navigational tools. Co-ordinate system and reference planes. ofHP, VP, RPP & LPP. of 2D/3D environment. Selection of drawingsize and scale. Commands and creation of Lines, Co-ordinatepoints, axes, poly-lines, square, rectangle, polygons, splines,circles, ellipse, text, move, copy, off-set, mirror, rotate, trim,extend, break, chamfer, fillet, curves, constraints viz. tangency,parallelism, inclination and perpendicularity. Dimensioning, lineconventions, material conventions and lettering.
									</p>
									<div class="btn-group">
										<button type="button" class="btn btn-dark mx-auto">Download</button>
										<button type="button" class="btn btn-dark dropdown-toggle dropdown-toggle-split" data-toggle="dropdown"><span class="caret"></span></button>
										<div class="dropdown-menu">
											<a class="dropdown-item" href="">Notes</a>
											<a class="dropdown-item" href="">PPTs</a>
											<a class="dropdown-item" href="">Videos</a>
										</div>
									</div>
								</div>
							</div>
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">Module 2</h4>
								</div>
								<div class="card-body">
									<p class="card-text">
									<strong>Orthographic projections</strong><br>
										Introduction, Definitions - Planes of projection, reference line andconventions employed, Projections of points in all the fourquadrants, Projections of straight lines (located in Firstquadrant/first angle only), True and apparent lengths, True andapparent inclinations to reference planes (No applicationproblems).
										Orthographic Projections of Plane Surfaces (First Angle ProjectionOnly)
										Introduction, Definitions–projections of plane surfaces–triangle,square, rectangle, rhombus, pentagon, hexagon and circle,planes in different positions by change of position method only(No problems on punched plates and composite plates).
									</p>
									<div class="btn-group">
										<button type="button" class="btn btn-dark mx-auto">Download</button>
										<button type="button" class="btn btn-dark dropdown-toggle dropdown-toggle-split" data-toggle="dropdown"><span class="caret"></span></button>
										<div class="dropdown-menu">
											<a class="dropdown-item" href="">Notes</a>
											<a class="dropdown-item" href="">PPTs</a>
											<a class="dropdown-item" href="">Videos</a>
										</div>
									</div>
								</div>
							</div>
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">Module 3</h4>
								</div>
								<div class="card-body">
									<p class="card-text">
										<strong>Projections of Solids (First angle Projection only)</strong><br>
										Introduction, Definitions – Projections of right regulartetrahedron, hexahedron (cube), prisms, pyramids, cylinders andcones in different positions (No problems on octahedrons andcombination solid).
									</p>
									<div class="btn-group">
										<button type="button" class="btn btn-dark mx-auto">Download</button>
										<button type="button" class="btn btn-dark dropdown-toggle dropdown-toggle-split" data-toggle="dropdown"><span class="caret"></span></button>
										<div class="dropdown-menu">
											<a class="dropdown-item" href="">Notes</a>
											<a class="dropdown-item" href="">PPTs</a>
											<a class="dropdown-item" href="">Videos</a>
										</div>
									</div>
								</div>
								
							</div>
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">Module 4</h4>
								</div>
								<div class="card-body">
									<p class="card-text">
										<strong>Sections And Development of Lateral Surfaces of Solids</strong><br>
										Introduction, Section planes, Sections, Section views, Sectionalviews, Apparent shapes and True shapes of Sections of rightregular prisms, pyramids, cylinders and cones resting with baseon HP. (No problems on sections of solids)
										Development of lateral surfaces of above solids, their frustumsand truncations. (No problems on lateral surfaces of trays,tetrahedrons, spheres and transition pieces).
									</p>
									<div class="btn-group">
										<button type="button" class="btn btn-dark mx-auto">Download</button>
										<button type="button" class="btn btn-dark dropdown-toggle dropdown-toggle-split" data-toggle="dropdown"><span class="caret"></span></button>
										<div class="dropdown-menu">
											<a class="dropdown-item" href="">Notes</a>
											<a class="dropdown-item" href="">PPTs</a>
											<a class="dropdown-item" href="">Videos</a>
										</div>
									</div>
								</div>
								
							</div>
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">Module 5</h4>
								</div>
								<div class="card-body">
									<p class="card-text">
										<strong>Isometric Projection (Using Isometric Scale Only)</strong><br>
										Introduction, Isometric scale, Isometric projection of simple planefigures, Isometric projection of tetrahedron, hexahedron(cube),right regular prisms, pyramids, cylinders, cones, spheres, cutspheres and combination of solids (Maximum of three solids).
									</p>
									<div class="btn-group">
										<button type="button" class="btn btn-dark mx-auto">Download</button>
										<button type="button" class="btn btn-dark dropdown-toggle dropdown-toggle-split" data-toggle="dropdown"><span class="caret"></span></button>
										<div class="dropdown-menu">
											<a class="dropdown-item" href="">Notes</a>
											<a class="dropdown-item" href="">PPTs</a>
											<a class="dropdown-item" href="">Videos</a>
										</div>
									</div>
								</div>
								
							</div>
						</div>
					</div>
			</div>
			
			<div class="card">
					<div class="card-header">
						<a class="card-link text-dark text-center" data-toggle="collapse" data-parent="#accordion" href="#eln"><h3 class="display-5">Basic Electronics</h3></a>
					</div>
					<div class="collapse fade" id="eln">
						<div class="card-body">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">Module 1</h4>
								</div>
								<div class="card-body">
									<p class="card-text">
										<strong>Semiconductor Diodes and Applications</strong><br>
										Semiconductor Diodes and Applications: p-n junctiondiode, Characteristics and Parameters, Diode approximations, DCload line analysis, Half-wave rectifier, Two-diode Full-wave rectifier,Bridge rectifier, Capacitor filter circuit (only qualitative approch),Zener diode voltage regulators: Regulator circuit with no load,Loaded Regulator. Numerical examples as applicable.
										Bipolar Junction Transistors: BJT operation, BJT Voltages andCurrents, BJT amplification, Common Base, Common Emitter andCommon Collector Characteristics, Numerical examples as applicable
									</p>
									<div class="btn-group">
										<button type="button" class="btn btn-dark mx-auto">Download</button>
										<button type="button" class="btn btn-dark dropdown-toggle dropdown-toggle-split" data-toggle="dropdown"><span class="caret"></span></button>
										<div class="dropdown-menu">
											<a class="dropdown-item" href="">Notes</a>
											<a class="dropdown-item" href="">PPTs</a>
											<a class="dropdown-item" href="">Videos</a>
										</div>
									</div>
								</div>
							</div>
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">Module 2</h4>
								</div>
								<div class="card-body">
									<p class="card-text">
									<strong>BJT Biasing</strong><br>
									BJT Biasing : DC Load line and Bias Point, Base Bias,Voltage divider Bias, Numerical examples as applicable.
									Introduction to Operational Amplifiers: Ideal OPAMP,Inverting and Non Inverting OPAMP circuits, OPAMP applications:voltage follower, addition, subtraction, integration, differentiation;Numerical examples as applicable.
									</p>
									<div class="btn-group">
										<button type="button" class="btn btn-dark mx-auto">Download</button>
										<button type="button" class="btn btn-dark dropdown-toggle dropdown-toggle-split" data-toggle="dropdown"><span class="caret"></span></button>
										<div class="dropdown-menu">
											<a class="dropdown-item" href="">Notes</a>
											<a class="dropdown-item" href="">PPTs</a>
											<a class="dropdown-item" href="">Videos</a>
										</div>
									</div>
								</div>
							</div>
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">Module 3</h4>
								</div>
								<div class="card-body">
									<p class="card-text">
										<strong>Digital Electronics</strong><br>
										Introduction, Switching and LogicLevels, Digital Waveform (Sections 9.1to 9.3). Number Systems:Decimal Number System, Binary Number System, ConvertingDecimal to Binary, Hexadecimal Number System: ConvertingBinary to Hexadecimal, Hexadecimal to Binary, ConvertingHexadecimal to Decimal, Converting Decimal to Hexadecimal, OctalNumbers: Binary to Octal Conversion. Complement of BinaryNumbers. Boolean Algebra Theorems, De Morgan’s theorem. DigitalCircuits: Logic gates, NOT Gate, AND Gate, OR Gate, XOR Gate,NAND Gate, NOR Gate, X-NOR Gate. Algebraic Simplification,NAND and NOR Implementation (Sections 11.7 and 11.8): NANDImplementation, NOR Implementation. Half adder, Full adder.
									</p>
									<div class="btn-group">
										<button type="button" class="btn btn-dark mx-auto">Download</button>
										<button type="button" class="btn btn-dark dropdown-toggle dropdown-toggle-split" data-toggle="dropdown"><span class="caret"></span></button>
										<div class="dropdown-menu">
											<a class="dropdown-item" href="">Notes</a>
											<a class="dropdown-item" href="">PPTs</a>
											<a class="dropdown-item" href="">Videos</a>
										</div>
									</div>
								</div>
								
							</div>
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">Module 4</h4>
								</div>
								<div class="card-body">
									<p class="card-text">
										<strong>Flip-Flops</strong><br>
										Flip-Flops: Introduction to Flip-Flops, NANDGate Latch/ NOR Gate Latch, RS Flip-Flop, Gated Flip-Flops:Clocked RS Flip-Flop.
										Microcontrollers: Introduction to Microcontrollers, 8051Microcontroller Architecture and an example of Microcontrollerbased stepper motor control system (only Block Diagram approach).
									</p>
									<div class="btn-group">
										<button type="button" class="btn btn-dark mx-auto">Download</button>
										<button type="button" class="btn btn-dark dropdown-toggle dropdown-toggle-split" data-toggle="dropdown"><span class="caret"></span></button>
										<div class="dropdown-menu">
											<a class="dropdown-item" href="">Notes</a>
											<a class="dropdown-item" href="">PPTs</a>
											<a class="dropdown-item" href="">Videos</a>
										</div>
									</div>
								</div>
								
							</div>
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">Module 5</h4>
								</div>
								<div class="card-body">
									<p class="card-text">
										<strong>Communication Systems</strong><br>
										Communication Systems: Introduction, Elements ofCommunication Systems, Modulation: Amplitude Modulation,Spectrum Power, AM Detection (Demodulation), Frequency andPhase Modulation. Amplitude and Frequency Modulation: Acomparison.
										Transducers: Introduction, Passive Electrical Transducers,Resistive Transducers, Resistance Thermometers, Thermistor.Linear Variable Differential Transformer (LVDT). Active ElectricalTransducers, Piezoelectric Transducer, Photoelectric Transducer.
									</p>
									<div class="btn-group">
										<button type="button" class="btn btn-dark mx-auto">Download</button>
										<button type="button" class="btn btn-dark dropdown-toggle dropdown-toggle-split" data-toggle="dropdown"><span class="caret"></span></button>
										<div class="dropdown-menu">
											<a class="dropdown-item" href="">Notes</a>
											<a class="dropdown-item" href="">PPTs</a>
											<a class="dropdown-item" href="">Videos</a>
										</div>
									</div>
								</div>
								
							</div>
						</div>
					</div>
			</div>
			
			<div class="card">
					<div class="card-header">
						<a class="card-link text-dark text-center" data-toggle="collapse" data-parent="#accordion" href="#cpl"><h3 class="display-5">Computer Programming Laboratory </h3></a>
					</div>
					<div class="collapse fade" id="cpl">
						<div class="card-body">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">Experiments</h4>
								</div>
								<div class="card-body">
									<p class="card-text">
										 <ol>
										 <li>Design and develop a flowchart or an algorithm that takes three coefficients (a, b, and c) of aQuadratic equation (ax2+bx+c=0) as input and compute all possible roots. Implement a Cprogram for the developed flowchart/algorithm and execute the same to output the possibleroots for a given set of coefficients with appropriate messages.</li>
										 <li>Design and develop an algorithm to find the reverse of an integer number NUM and checkwhether it is PALINDROME or NOT. Implement a C program for the developed algorithmthat takes an integer number as input and output the reverse of the same with suitablemessages. Ex: Num: 2014, Reverse: 4102, Not a Palindrome</li>
										 <li>3a. Design and develop a flowchart to find the square root of a given number N. Implementa C program for the same and execute for all possible inputs with appropriate messages.Note: Don’t use library function sqrt(n). <br>
										3b. Design and develop a C program to read a year as an input and find whether it is leap year ornot. Also consider end of the centuries.</li>
										 <li>Design and develop an algorithm to evaluate polynomial f(x) = a4x4 + a3x3 + a2x2 + a1x + a0,for a given value of x and its coefficients using Horner’s method. Implement a C programfor the same and execute the program with different set of values of coefficients and x.</li>
										 <li>Draw the flowchart and Write a C Program to compute Sin(x) using Taylor series approximationgiven by Sin(x) = x - (x3/3!) + (x5/5!) - (x7/7!) + …….
											Compare your result with the built- in Library function. Print both the results with appropriatemessages.</li>
										 <li>Develop an algorithm, implement and execute a C program that reads N integer numbers andarrange them in ascending order using Bubble Sort.</li>
										 <li>Develop, implement and execute a C program that reads two matrices A (m x n ) and B(p x q ) and Compute product of matrices A and B. Read matrix A and matrix B in rowmajor order and in column major order respectively. Print both the input matrices and resultantmatrix with suitable headings and output should be in matrix format only. Program mustcheck the compatibility of orders of the matrices for multiplication. Report appropriatemessage in case of incompatibility.</li>
										 <li>Develop, implement and execute a C program to search a Name in a list of names using Binarysearching Technique</li>
										 <li>Write and execute a C program that<br>
												i. Implements string copy operation STRCOPY(str1,str2) that copies a string str1 to another string str2 without using library function.<br>
												ii. Read a sentence and print frequency of vowels and total count of consonants.</li>
										 <li>a. Design and develop a C function RightShift(x ,n) that takes two integers x and n asinput and returns value of the integer x rotated to the right by n positions. Assume theintegers are unsigned. Write a C program that invokes this function with different valuesfor x and n and tabulate the results with suitable headings<br>
											b. Design and develop a C function isprime(num) that accepts an integer argument andreturns 1 if the argument is prime, a 0 otherwise. Write a C program that invokes thisfunction to generate prime numbers between the given range.</li>
										 <li>Draw the flowchart and write a recursive C function to find the factorial of a number, n!, defined byfact(n)=1, if n=0. Otherwise fact(n)=n*fact(n-1). Using this function, write a C program to computethe binomial coefficient nCr. Tabulate the results for different values of n and r with suitablemessages.</li>
										 <li>Given two university information files “studentname.txt” and “usn.txt” that contains studentsName and USN respectively. Write a C program to create a new file called “output.txt” andcopy the content of files “studentname.txt” and “usn.txt” into output file in the sequence shown below . Display the contents of output file “output.txt” on to the screen. <br>
											Student Name USN<br>
											Name 1 USN1<br>
											Name 2 USN2<br>
											…. ….<br>
											…. …. <br></li>
											<li>Write a C program to maintain a record of n student details using an array of structures withfour fields (Roll number, Name, Marks, and Grade). Assume appropriate data type for eachfield. Print the marks of the student, given the student name as input.</li>
											<li>Write a C program using pointers to compute the sum, mean and standard deviation of all elementsstored in an array of n real numbers.</li>
										 </ol>
									</p>
									<div class="btn-group">
										<button type="button" class="btn btn-dark mx-auto">Download</button>
										<button type="button" class="btn btn-dark dropdown-toggle dropdown-toggle-split" data-toggle="dropdown"><span class="caret"></span></button>
										<div class="dropdown-menu">
											<a class="dropdown-item" href="">Notes</a>
											<a class="dropdown-item" href="">PPTs</a>
											<a class="dropdown-item" href="">Videos</a>
										</div>
									</div>
								</div>
							</div>
						
						</div>
					</div>
			</div>
			
			<div class="card">
					<div class="card-header">
						<a class="card-link text-dark text-center" data-toggle="collapse" data-parent="#accordion" href="#pl"><h3 class="display-5">Engineering Chemistry Laboratory</h3></a>
					</div>
					<div class="collapse fade" id="pl">
						<div class="card-body">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">Experiments</h4>
								</div>
								<div class="card-body">
									<p class="card-text">
										 <ol>
										 <li>Estimation of FAS potentiometrically using standard K2Cr2O7 solution.</li>
										 <li>Estimation of Copper colorimetrically</li>
										 <li>Estimation of Acids in acid mixture conductometrically.</li>
										 <li>Determination of pKa of weak acid using pH meter.</li>
										 <li>Determination of Viscosity co-efficient of the given liquid using Ostwald’s viscometer</li>
										 <li>Estimation of Sodium and Potassium in the given sample of water using FlamePhotometer.</li>
										 <li>Estimation of Total hardness of water by EDTA complexometric method</li>
										 <li>Estimation of CaO in cement solution by rapid EDTA method</li>
										 <li>Determination of percentage of Copper in brass using standard sodium thiosulphate solution.</li>
										 <li>Estimation of Iron in haematite ore solution using standard K2Cr2O7 solution by External Indicator method</li>
										 <li>Estimation of Alkalinity (OH-, CO3-- & HCO3-) of water using standard HCl solution.</li>
										 <li>Determination of COD of waste water.</li>
										 </ol>
									</p>
									<div class="btn-group">
										<button type="button" class="btn btn-dark mx-auto">Download</button>
										<button type="button" class="btn btn-dark dropdown-toggle dropdown-toggle-split" data-toggle="dropdown"><span class="caret"></span></button>
										<div class="dropdown-menu">
											<a class="dropdown-item" href="">Notes</a>
											<a class="dropdown-item" href="">PPTs</a>
											<a class="dropdown-item" href="">Videos</a>
										</div>
									</div>
								</div>
							</div>
						
						</div>
					</div>
			</div>
		</div>
	</div>
	<footer id="footer-main" class="bg-dark text-light mt-5">
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<p><i class="fa fa-copyright" aria-hidden="true"></i>copyright 2018</p><p>Designed by dept of CSE</p>
				</div>
				<div class="col-sm-3">
				<h4>Pages</h4>
					<ul class="list-unstyled">
					<li id="navbar"><a href="" >Home</a></li>
					<li id="navbar"><a href="" >About</a></li>
					<li id="navbar"><a href="" >Contact</a></li>
					<li id="navbar"><a href="">Sem</a></li>
					</ul>
				</div>
				<div class="col-sm-3">
					<h4>About This Site</h4>
					<p>This website is only designed for the department of cse.</p>

				</div>
				<div class="col-sm-3">
				<h4>Location</h4>
				<p>College Campus
					R N S Institute of Technology,
					Rajarajeshwarinagar post,
					Channasandra,
					Bangalore - 560098
					Tel : +91 80 28611880/1 Fax : +91 80 28611882</p>

				</div>
			</div>
		</div>
		<div class="social text-center">
				<a href="#" class="fa fa-facebook"></a>
				<a href="#" class="fa fa-twitter"></a>
				<a href="#" class="fa fa-google"></a>
				<a href="#" class="fa fa-linkedin"></a>
				<a href="#" class="fa fa-instagram"></a>
			</div>

			<div class="clear"></div>


	</footer>
  </body>
</html>