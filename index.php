<?php include 'inc/header.php'; ?>

	<div class="container">
		<div class='row'
			<p id="total"><span class="col-md-3">Total Units:</span> <span id="units" class="col-md-1 col-md-offset-2">1</span></p>
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
		var input = "<div class='row'><div class='form-group col-md-3'><span class='letter-grade'>Letter Grade</span><br><select class='form-control value'><option selected='selected' value='A'>A/A+</option><option value='A-'>A-</option><option value='B+'>B+</option><option value='B'>B</option><option value='B-'>B-</option><option value='C+'>C+</option><option value='C'>C</option><option value='C-'>C-</option><option value='D+'>D+</option><option value='D'>D</option><option value='D-'>D-</option><option value='F'>F</option></select></div><div class='form-group col-md-3'><span class='units'>Units</span><br><select class='form-control unit-value'><option selected='selected' value='1'>1.0</option><option value='2'>2.0</option><option value='3'>3.0</option><option value='4'>4.0</option><option value='5'>5.0</option><option value='6'>6.0</option></select></div></div>";

		var QHRS = 0;
		function sumUnits(){
			QHRS = 0;
			$(".unit-value").each(function(){
				QHRS = QHRS + (+$(this).val());
			});
			document.getElementById("units").innerHTML=QHRS;
		}
		$("#total").before(input);
		$(".unit-value").change(sumUnits);
		$("#add").click(function(){
			$("#total").before(input);
			sumUnits();
			$(".unit-value").change(sumUnits);
		});
		$("#remove").click(function(){
			$("#total").prev().remove();
			sumUnits();
		});


	</script>






<?php include 'inc/footer.php'; ?>
