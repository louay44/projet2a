<?PHP
include "../core/codec.php";
$commandesc1=new codec();
?>
<html>
    <head>
        <title>Gretong a Ecommerce Admin Panel Category Flat Bootstrap Responsive Web Template | Sweater :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Gretong Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Graph CSS -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'/>
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<!-- lined-icons -->
<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
<script src="js/simpleCart.min.js"> </script>
<script src="js/amcharts.js"></script>	
<script src="js/serial.js"></script>	
<script src="js/light.js"></script>	
<!-- //lined-icons -->
<script src="js/jquery-1.10.2.min.js"></script>
   <!--pie-chart--->
<script src="js/pie-chart.js" type="text/javascript"></script>
 <script type="text/javascript">

        $(document).ready(function () {
            $('#demo-pie-1').pieChart({
                barColor: '#3bb2d0',
                trackColor: '#eee',
                lineCap: 'round',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });

            $('#demo-pie-2').pieChart({
                barColor: '#fbb03b',
                trackColor: '#eee',
                lineCap: 'butt',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });

            $('#demo-pie-3').pieChart({
                barColor: '#ed6498',
                trackColor: '#eee',
                lineCap: 'square',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });

           
        });

    </script>
    </head>
    <body>
        <div class="page-container">
   <!--/content-inner-->
	<div class="left-content">
	   <div class="inner-content">
		<!-- header-starts -->
			<div class="header-section">
			<!-- top_bg -->
						<div class="top_bg">
								<div class="header_top">
									<div class="top_right">
										<ul>
											<li><a href="contact.html">help</a></li>|
											<li><a href="contact.html">Contact</a></li>|
											<li><a href="checkout.html">Delivery information</a></li>
										</ul>
									</div>
									<div class="top_left">
										<h2><span></span> Call us : 032 2352 782</h2>
									</div>
										<div class="clearfix"> </div>
								</div>
						</div>
					<div class="clearfix"></div>
				<!-- /top_bg -->
				</div>
				<div class="header_bg">
							<div class="header">
								<div class="head-t">
									<div class="logo">
										<a href="#"><img src="images/logo99.png" class="img-responsive" alt=""> </a>
									</div>
										<!-- start header_right -->
									<div class="header_right">
										<div class="rgt-bottom">
											<div class="log">
												<div class="login">
													<div id="loginContainer"><a id="loginButton" class=""><span>Login</span></a>
														<div id="loginBox" style="display: none;">                
															<form id="loginForm">
																	<fieldset id="body">
																		<fieldset>
																			  <label for="email">Email Address</label>
																			  <input type="text" name="email" id="email">
																		</fieldset>
																		<fieldset>
																				<label for="password">Password</label>
																				<input type="password" name="password" id="password">
																		 </fieldset>
																		<input type="submit" id="login" value="Sign in">
																		<label for="checkbox"><input type="checkbox" id="checkbox"> <i>Remember me</i></label>
																	</fieldset>
																<span><a href="#">Forgot your password?</a></span>
															</form>
														</div>
													</div>
												</div>
											</div>
											<div class="reg">
												<a href="register.html">REGISTER</a>
											</div>
										<div class="clearfix"> </div>
									</div>
									<div class="search">
										<form>
											<input type="text" value="" placeholder="search...">
											<input type="submit" value="">
										</form>
									</div>
									<div class="clearfix"> </div>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
				</div>
					<!-- //header-ends -->
				<!--content-->
           <div style="margin-left: 100px;">
                <caption><strong>Ajouter Code</strong></caption>
               <form method="POST" action="ajoutercode.php">
                    <table>
                    <tr>
                    <td>montant</td>
                    <td><input type="number" name="montant" size="20" min="1" max="1000"></td>
                    </tr>
                    <tr>
                    <td>code</td>
                    <td><div>
                      <script language="javascript" type="text/javascript">
                                      function calculeLongueur(){
                                          var iLongueur, iLongueurRestante;
                                          iLongueur = document.getElementById('autre').value.length;
                                          if (iLongueur>10) {
                                            document.getElementById('autre').value = document.getElementById('autre').value.substring(0,12);
                                            iLongueurRestante = 0;
                                          }
                                          else {
                                          iLongueurRestante = 12 - iLongueur;
                                        }
                                        if (iLongueurRestante <= 1)
                                          document.getElementById('indic').innerHTML = iLongueurRestante + "&nbsp;caract&egrave;re&nbsp;disponible";
                                        else
                                          document.getElementById('indic').innerHTML = iLongueurRestante + "&nbsp;caract&egrave;res&nbsp;disponibles";
                                      }
                                  </script>
                                  <input   type="number" name="code" onblur="calculeLongueur();" onfocus="calculeLongueur();" onkeydown="calculeLongueur();" onkeyup="calculeLongueur();"  id="autre" class="form-control"></input>
                        </div> </td>
                    </tr>
                    <tr>
                    <td></td>
                    <td><input type="submit" name="ajouter" value="ajouter"></td>
                    </tr>
                    </table> </form>
           </div>
<div class="content">
<div class="women_main">
	<!-- start content -->
   <div class="w_content">
		
		
		
	</div>
   <div class="clearfix"></div>
	<!-- end content -->
	<div class="foot-top">
	
		<div class="col-md-6 s-c">
			<li>
				<div class="fooll">
					<h1>follow us on</h1>
				</div>
			</li>
			<li>
				<div class="social-ic">
					<ul>
						<li><a href="#"><i class="facebok"> </i></a></li>
						<li><a href="#"><i class="twiter"> </i></a></li>
						<li><a href="#"><i class="goog"> </i></a></li>
						<li><a href="#"><i class="be"> </i></a></li>
							<div class="clearfix"></div>	
					</ul>
				</div>
			</li>
				<div class="clearfix"> </div>
		</div>
		<div class="col-md-6 s-c">
			<div class="stay">
						<div class="stay-left">
							<form>
								<input type="text" placeholder="Enter your email" required="">
							</form>
						</div>
						<div class="btn-1">
							<form>
								<input type="submit" value="join">
							</form>
						</div>
							<div class="clearfix"> </div>
			</div>
		</div>
			<div class="clearfix"> </div>
</div>
<div class="footer">
					<div class="col-md-3 cust">
						<h4>CUSTOMER CARE</h4>
							<li><a href="contact.html">Help Center</a></li>
							<li><a href="faq.html">FAQ</a></li>
							<li><a href="details.html">How To Buy</a></li>
							<li><a href="checkout.html">Delivery</a></li>
					</div>
					<div class="col-md-2 abt">
						<h4>ABOUT US</h4>
							<li><a href="products.html">Our Stories</a></li>
							<li><a href="products.html">Press</a></li>
							<li><a href="faq.html">Career</a></li>
							<li><a href="contact.html">Contact</a></li>
					</div>
					<div class="col-md-2 myac">
						<h4>MY ACCOUNT</h4>
							<li><a href="register.html">Register</a></li>
							<li><a href="checkout.html">My Cart</a></li>
							<li><a href="checkout.html">Order History</a></li>
							<li><a href="details.html">Payment</a></li>
					</div>
					<div class="col-md-5 our-st">
						<div class="our-left">
							<h4>OUR STORES</h4>
						</div>
						
							<li><i class="add"> </i>Mark peter</li>
							<li><i class="phone"> </i>012-586987</li>
							<li><a href="mailto:info@example.com"><i class="mail"> </i>info@sitename.com </a></li>
					</div>
					<div class="clearfix"> </div>
						<p>© 2016 Gretong. All Rights Reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
			</div>
</div>
</div>
			<!--content-->
		</div>
</div>
				<!--//content-inner-->
			<!--/sidebar-menu-->
				<div class="sidebar-menu">
					<header class="logo1">
						<a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> 
					</header>
						<div style="border-top:1px ridge rgba(255, 255, 255, 0.15)"></div>
                           <div class="menu">
									<ul id="menu" >
										<li><a href="index.html"><i class="fa fa-tachometer"></i> <span>Home</span></a></li>
										 <li id="menu-academico" ><a href="#"><i class="fa fa-table"></i> <span> New Arrivals</span> <span class="fa fa-angle-right" style="float: right"></span></a>
										   <ul id="menu-academico-sub" >
										   <li id="menu-academico-avaliacoes" ><a href="shoes.html">Shoes</a></li>
											<li id="menu-academico-avaliacoes" ><a href="products.html">Watches</a></li>
											<li id="menu-academico-boletim" ><a href="sunglasses.html">Sunglasses</a></li>
										  </ul>
										</li>
										 <li id="menu-academico" ><a href="sunglasses.html"><i class="fa fa-file-text-o"></i> <span>Sunglasses</span></a></li>
									<li><a href="sweater.html"><i class="lnr lnr-pencil"></i> <span>Gestion des commandes</span></a></li>
									<li id="menu-academico" ><a href="catalog.html"><i class="fa fa-file-text-o"></i> <span>Catalog</span></a></li>
									<li id="menu-academico" ><a href="shoes.html"><i class="lnr lnr-book"></i> <span>Shoes</span></a></li>
									 <li><a href="bags.html"><i class="lnr lnr-envelope"></i> <span>Bags</span></a></li>
									<li><a href="products.html"><i class="lnr lnr-chart-bars"></i> <span>Watches</span></a></li>
							        <li id="menu-academico" ><a href="#"><i class="lnr lnr-layers"></i> <span>Commandes</span> <span class="fa fa-angle-right" style="float: right"></span></a>
										 <ul id="menu-academico-sub" >
											<li id="menu-academico-avaliacoes" ><a href="afficherCommande.php">Afficher les commandes</a></li>
											<li id="menu-academico-boletim" ><a href="ajoutCommande.html">Ajouter une commande</a></li>
                                            <li id="menu-academico-boletim" ><a href="recherchercommande.php">Rechercher avancé</a></li>
                                            <li id="menu-academico-boletim" ><a href="tricommandes.php">Trier les commandes</a></li>
										  </ul>
									 </li>
									<li><a href="#"><i class="lnr lnr-chart-bars"></i> <span>Codes</span> <span class="fa fa-angle-right" style="float: right"></span></a>
									  <ul>
										<li><a href="affichcomplet.php">Afficher les codes</a></li>
										<li><a href="ajoutCode.php">Ajouter un code</a></li>
                                        <li><a href="recherchercode.php">Rechercher avancé</a></li>
                                        <li><a href="tri.php">Trier les codes</a></li>
									</ul>
									</li>
								  </ul>
								</div>
							  </div>
							  <div class="clearfix"></div>	
							</div>
        <script>
							var toggle = true;
										
							$(".sidebar-icon").click(function() {                
							  if (toggle)
							  {
								$(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
								$("#menu span").css({"position":"absolute"});
							  }
							  else
							  {
								$(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
								setTimeout(function() {
								  $("#menu span").css({"position":"relative"});
								}, 400);
							  }
											
											toggle = !toggle;
										});
							</script>
<!--js -->
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.min.js"></script>
   <!-- /Bootstrap Core JavaScript -->
   <!-- real-time -->
<script language="javascript" type="text/javascript" src="js/jquery.flot.js"></script>
	<script type="text/javascript">

	$(function() {

		// We use an inline data source in the example, usually data would
		// be fetched from a server

		var data = [],
			totalPoints = 300;

		function getRandomData() {

			if (data.length > 0)
				data = data.slice(1);

			// Do a random walk

			while (data.length < totalPoints) {

				var prev = data.length > 0 ? data[data.length - 1] : 50,
					y = prev + Math.random() * 10 - 5;

				if (y < 0) {
					y = 0;
				} else if (y > 100) {
					y = 100;
				}

				data.push(y);
			}

			// Zip the generated y values with the x values

			var res = [];
			for (var i = 0; i < data.length; ++i) {
				res.push([i, data[i]])
			}

			return res;
		}

		// Set up the control widget

		var updateInterval = 30;
		$("#updateInterval").val(updateInterval).change(function () {
			var v = $(this).val();
			if (v && !isNaN(+v)) {
				updateInterval = +v;
				if (updateInterval < 1) {
					updateInterval = 1;
				} else if (updateInterval > 2000) {
					updateInterval = 2000;
				}
				$(this).val("" + updateInterval);
			}
		});

		var plot = $.plot("#placeholder", [ getRandomData() ], {
			series: {
				shadowSize: 0	// Drawing is faster without shadows
			},
			yaxis: {
				min: 0,
				max: 100
			},
			xaxis: {
				show: false
			}
		});

		function update() {

			plot.setData([getRandomData()]);

			// Since the axes don't change, we don't need to call plot.setupGrid()

			plot.draw();
			setTimeout(update, updateInterval);
		}

		update();

		// Add the Flot version string to the footer

		$("#footer").prepend("Flot " + $.plot.version + " &ndash; ");
	});

	</script>
<!-- /real-time -->
<script src="js/jquery.fn.gantt.js"></script>
    <script>

		$(function() {

			"use strict";

			$(".gantt").gantt({
				source: [{
					name: "Sprint 0",
					desc: "Analysis",
					values: [{
						from: "/Date(1320192000000)/",
						to: "/Date(1322401600000)/",
						label: "Requirement Gathering", 
						customClass: "ganttRed"
					}]
				},{
					name: " ",
					desc: "Scoping",
					values: [{
						from: "/Date(1322611200000)/",
						to: "/Date(1323302400000)/",
						label: "Scoping", 
						customClass: "ganttRed"
					}]
				},{
					name: "Sprint 1",
					desc: "Development",
					values: [{
						from: "/Date(1323802400000)/",
						to: "/Date(1325685200000)/",
						label: "Development", 
						customClass: "ganttGreen"
					}]
				},{
					name: " ",
					desc: "Showcasing",
					values: [{
						from: "/Date(1325685200000)/",
						to: "/Date(1325695200000)/",
						label: "Showcasing", 
						customClass: "ganttBlue"
					}]
				},{
					name: "Sprint 2",
					desc: "Development",
					values: [{
						from: "/Date(1326785200000)/",
						to: "/Date(1325785200000)/",
						label: "Development", 
						customClass: "ganttGreen"
					}]
				},{
					name: " ",
					desc: "Showcasing",
					values: [{
						from: "/Date(1328785200000)/",
						to: "/Date(1328905200000)/",
						label: "Showcasing", 
						customClass: "ganttBlue"
					}]
				},{
					name: "Release Stage",
					desc: "Training",
					values: [{
						from: "/Date(1330011200000)/",
						to: "/Date(1336611200000)/",
						label: "Training", 
						customClass: "ganttOrange"
					}]
				},{
					name: " ",
					desc: "Deployment",
					values: [{
						from: "/Date(1336611200000)/",
						to: "/Date(1338711200000)/",
						label: "Deployment", 
						customClass: "ganttOrange"
					}]
				},{
					name: " ",
					desc: "Warranty Period",
					values: [{
						from: "/Date(1336611200000)/",
						to: "/Date(1349711200000)/",
						label: "Warranty Period", 
						customClass: "ganttOrange"
					}]
				}],
				navigate: "scroll",
				scale: "weeks",
				maxScale: "months",
				minScale: "days",
				itemsPerPage: 10,
				onItemClick: function(data) {
					alert("Item clicked - show some details");
				},
				onAddClick: function(dt, rowId) {
					alert("Empty space clicked - add an item!");
				},
				onRender: function() {
					if (window.console && typeof console.log === "function") {
						console.log("chart rendered");
					}
				}
			});

			$(".gantt").popover({
				selector: ".bar",
				title: "I'm a popover",
				content: "And I'm the content of said popover.",
				trigger: "hover"
			});

			prettyPrint();

		});

    </script>
		   <script src="js/menu_jquery.js"></script>


</body>
</html>