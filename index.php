<?php include 'inc/header.php'; ?>

	<div class="container">
		<div class="row">
			<p id="total"><span class="col-md-3">Total Units:</span> <span id="QHRS" class="col-md-1 col-md-offset-2">1</span></p>
			<br>
			<p><strong>GPA:</strong> <span id="GPA"></span></p>
			<br>
		</div>
		<div class="row">
			<div class="col-md-1 col-md-offset-3">
				<button id="add">+</button>
				<button id="remove">-</button>
			</div>
		</div>
		<button id="submit" type="submit">Submit</button>

	</div>

	<script>
		var input = "<div class='row input'><div class='form-group col-md-3 letter'>Letter Grade<br><select class='form-control letter-value'><option selected='selected' value='4.0'>A/A+</option><option value='3.7'>A-</option><option value='3.3'>B+</option><option value='3.0'>B</option><option value='2.7'>B-</option><option value='2.3'>C+</option><option value='2.0'>C</option><option value='1.7'>C-</option><option value='1.3'>D+</option><option value='1.0'>D</option><option value='0.7'>D-</option><option value='0.0'>F</option></select></div><div class='form-group col-md-3 units'>Units<br><select class='form-control unit-value'><option value='1.0'>1.0</option><option value='2.0'>2.0</option><option value='3.0'>3.0</option><option selected='selected' value='4.0'>4.0</option><option value='5.0'>5.0</option><option value='6.0'>6.0</option></select></div></div>";

		var QHRS = 1;
		function sumUnits(){
			QHRS = 0;
			$(".unit-value").each(function(){
				QHRS = QHRS + (+$(this).val());
			});
			calculateGradePoints();
			document.getElementById("QHRS").innerHTML=QHRS;
		}

		var QPTS = 0;
		function calculateGradePoints(){
			QPTS = 0;
			$(".input").each(function(){
				var value = (+$(this).find(".letter").find(".letter-value").val());
				var unitValue = (+$(this).find(".units").find(".unit-value").val());
				QPTS = QPTS + (value*unitValue);
			});
		}

		var GPA = 0;
		function calculateGPA(){
			GPA = QPTS/QHRS
			document.getElementById("GPA").innerHTML=GPA;
		}

		$("#total").before(input);
		sumUnits();
		calculateGradePoints();
		$(".unit-value").change(sumUnits);
		$(".letter-value").change(calculateGradePoints);
		$("#add").click(function(){
			$("#total").before(input);
			sumUnits();
			$(".unit-value").change(sumUnits);
			$(".letter-value").change(calculateGradePoints);
		});
		$("#remove").click(function(){
			$("#total").prev().remove();
			sumUnits();
		});
		$("#submit").click(calculateGPA);

	</script>






<?php include 'inc/footer.php'; ?>
