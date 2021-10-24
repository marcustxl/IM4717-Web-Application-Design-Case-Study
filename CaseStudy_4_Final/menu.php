<!DOCTYPE html>
<html lang="en">
<?php
include "php/update_table.php";
?>
<head>
	<title>JavaJam Coffee House</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="style.css">
  <script type="text/javascript" src="javascript/update_price.js"></script>
</head>
<body onload="init();">
<header>
</header>
	<div class="wrapper">
		<div class='navbar'>
			<nav>
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="menu.php">Menu</a></li>
            <li><a href="music.html">Music</a></li>
            <li><a href="jobs.html">Jobs</a></li>
            <br>
            <li><a href="update.php">Update</a></li>
            <li><a href="sales.php">Sales</a></li>
        </ul>
	    </nav>
		</div>
		<div class="content">
      <h1>Coffee at JavaJam</h1>
      <form action="php/order_submit.php" method="get">
				<table class="menuTable">

							<tr>
									<td id="leftcolumn_table">Just Java</td>
									<td style="padding:5px;">Regular house blend, decaffeinated coffee, or flavor of the day.
											<br>
											<label><input type="radio" name="JJEC" id="JJEC" checked="checked" onchange="calculatePrice(1)">Endless cup $</label>
											<span id="JJEC_price"><?php insert_row(1) ?></span>

									</td>

									<td style="width:40px;">
											<label><input type="number" name="Item1_Quantity" id="Item1_Quantity" value="0" min="0" style="width:30px;" onchange="calculatePrice(1)"></label>
									</td>

									<td style="width:110px;">
											<p>
													Subtotal: $<span id="JJEC_Total"></span>
											</p>
									</td>
							</tr>


							<tr>
									<td>Cafe au Lait</td>
									<td style="padding:5px;">House blended coffee infused into a smooth, steamed milk.
									<br>
											<label><input type="radio" value="CAL_Single" name="CAL_radio" id="CAL_Single" checked="checked" name="CAL" onchange="calculatePrice(2)">Single $</label>
											<span id="CALS_price"><?php insert_row(2) ?></span>
											<label><input type="radio" value="CAL_Double" name="CAL_radio" id="CAL_Double" name="CAL" onchange="calculatePrice(2)">Double $</label>
											<span id="CALD_price"><?php insert_row(3) ?></span>
									</td>
									<td style="width:40px;">
													<labeL><input type="number" name="Item2_Quantity" id="Item2_Quantity" value="0" style="width:30px;" min="0" onchange="calculatePrice(2)"></labeL>
									</td>
									<td style="width:110px;">
											<p>
													Subtotal: $<span id="CAL_Total"></span>
											</p>
									</td>
							</tr>


							<tr>
									<td>Iced Cappuccino</td>
									<td style="padding:5px;">Sweetened espresso blended with icy-cold milk and served in a chilled glass.
									<br>
											<label><input type="radio" value="IC_Single" name="IC_radio" id="IC_Single" checked="checked" name="IC" onchange="calculatePrice(3)">Single $</label>
											<span id="ICS_price"><?php insert_row(4) ?></span>
											<label><input type="radio" value="IC_Double" name="IC_radio" id="IC_Double" name="IC" onchange="calculatePrice(3)">Double $</label>
											<span id="ICD_price"><?php insert_row(5) ?></span>
									<td style="width:40px;">
											<label><input type="number" name="Item3_Quantity" id="Item3_Quantity" value="0" style="width:30px;" min="0" onchange="calculatePrice(3)"></label>
									</td>
									<td style="width:110px;">
											<p>
													Subtotal: $<span id="IC_Total"></span>
											</p>
									</td>
							</tr>


							<tr>
									<td></td><td></td><td></td>
									<td style="width:120px;">
											<p>
													Total: $<span id="totalPrice"></span>
											</p>
									<input type="submit" value="Place order">
									</td>
							</tr>


					</table>
			</form>

	</div>
</div>
      <footer>
				<br>
  			<small>
  				<i>Copyright &copy; 2014 JavaJam Coffee House
  				</i>
  			</small>
  			<br>
  			<a href="mailto:marcus@too.com">
  				marcus@too.com
  			</a>
  		</footer>
  </body>
  </html>
