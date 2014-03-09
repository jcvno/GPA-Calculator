<?php include 'inc/header.php'; ?>

	<div class="container">
		<form id="myForm" action="#" method="post" role="form">
			<div class="row">
				<div class="form-group col-md-3">
					Letter Grade
					<br>
					<select class="form-control" name="value">
					<option selected="selected" value="A">A/A+</option>
						<option value="A-">A-</option>
						<option value="B+">B+</option>
						<option value="B">B</option>
						<option value="B-">B-</option>
						<option value="C+">C+</option>
						<option value="C">C</option>
						<option value="C-">C-</option>
						<option value="D+">D+</option>
						<option value="D">D</option>
						<option value="D-">D-</option>
						<option value="F">F</option>
					</select>
				</div>
				<div class="form-group col-md-3">
					Units
					<br>
					<select class="form-control" name="unit-value">
						<option selected="selected" value="1">1.0</option>
						<option value="2">2.0</option>
						<option value="3">3.0</option>
						<option value="4">4.0</option>
						<option value="5">5.0</option>
						<option value="6">6.0</option>
					</select>
				</div>
			</div>
			<div class="row">
				<div class="col-md-1 col-md-offset-3">
					<button id="add">+</button>
				</div>
			</div>
			<button type="submit">Submit</button>
		</form>

		<br>

	</div>







<?php include 'inc/footer.php'; ?>
