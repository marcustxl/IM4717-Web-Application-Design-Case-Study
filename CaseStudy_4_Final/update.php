<!DOCTYPE html>
<html lang="en">
<?php
include "php/update_table.php";
?>
<head>
    <meta charset="UTF-8">
    <title>Admin: Product Price Update</title>
    <link rel="stylesheet" href="style.css">
	<script type="text/javascript" src="javascript/update_admin.js"></script>
</head>
<body>
  <header>
  </header>
  <div class="wrapper">
      <div class="navbar">
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
        <h1>Click to update product prices:</h1>

        <form action="php/update_database.php" method="GET">

        <table class="AdminTable">
            <tr>
                <td style="width:15px;"><input type="checkbox" id="JJ_ckb" name="JJ_ckb" onclick="editPrice(1)" autocomplete="off"></td>
                <td style="width:100px;">Just Java</td>
                <td style="padding:5px;">Regular house blend, decaffeinated coffee, or flavor of the day.
				<br>
                <label>Endless cup $</label>
                <input id="JJEC_box" name="JJEC_box" type="number" step="any" value=<?php insert_row(1) ?> style="width:55px;" disabled>

				</td>
            </tr>

			<tr>
                <td style="width:15px;"><input type="checkbox" id="CAL_ckb" name="CAL_ckb" onclick="editPrice(2)" autocomplete="off"></td>
                <td style="width:100px;">Cafe au Lait</td>
                <td style="padding:5px;">House blended coffee infused into a smooth, steamed milk.
				<br>
                <label>Single $</label>
                <input id="CALS_box" name="CALS_box" type="number" step="any" value=<?php insert_row(2) ?> style="width:55px;" disabled>
                <label>Double $</label>
                <input id="CALD_box" name="CALD_box" type="number" step="any" value=<?php insert_row(3) ?> style="width:55px;" disabled>

				</td>
            </tr>

            <tr>
                <td style="width:15px;"><input type="checkbox" id="IC_ckb" name="IC_ckb" onclick="editPrice(3)" autocomplete="off"></td>
                <td style="width:100px;">Iced Cappuccino</td>
                <td style="padding:5px;">Sweetened espresso blended with icy-cold milk and served in a chilled glass.
				<br>
                <label>Single $</label>
                <input id="ICS_box" name="ICS_box" type="number" step="any" value=<?php insert_row(4) ?> style="width:55px;" disabled>
                <label>Double $</label>
                <input id="ICD_box" name="ICD_box" type="number" step="any" value=<?php insert_row(5) ?> style="width:55px;" disabled>

				</td>
            </tr>

        </table>

        <br>
        <div style="padding-left: 468px;">
        <input type="submit" value="Update" style="width:100px;">
        </div>
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
