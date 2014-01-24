<!DOCTYPE html>
<html>
	<head>
		<title>
			Mijn eerste site
		</title>
	</head>
	<body>
		<h3>Voer hieronder twee getallen in (tussen de 0 en 999)</h3>
		<form action="bereken.php" method="post">
			<table border="0">
				<tr>
				   <td>Eerste getal:</td>
				   <td>
					  <input type="text"
							 maxlength="3"
							 size="3"
							 placeholder="getal 1"
							 name="getal1"/>
					</td>
				</tr>
				<tr>
				   <td>Tweede getal:</td>
				   <td>
					  <input type="text"
							 maxlength="3"
							 size="3"
							 placeholder="getal 2"
							 name="getal2"/>
				   </td>
				</tr>
				<tr>
					<td>Kies een bewerking:</td>
					<td>
						<select name="bewerking">
							<option value="1">+</option>
							<option value="2">-</option>
							<option value="3">x</option>
							<option value="4">/</option>
						</select>
					</td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="Bereken"/></td>
				</tr>
			</table>
		</form>
	</body>
</html>