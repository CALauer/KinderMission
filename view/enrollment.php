<?php 
include '../includes/config.php'; 
require "../includes/header.php"; 
?>


	<!-- CALL TO ACTION -->
	<section class="enrollment-page">
        <div class="enrollment-page-interior">
    <div class="two-columns" id="index-form">
    <div class="one-column"><h2 class="color-white">Simple, fast, and easy</h2>
<p class="color-white">Simply fill out the form and we will be in touch as soon possible.</p>
<img src="../images/enrollform.svg" alt="" class="enroll-img">
</div>
        <div class="one-column">
			<form class="enrollment-form-index" action="../includes/enroll.php" method="post">
			<?php 
				if (isset($_GET['error'])) {
						if ($_GET['error'] == "emptyFields") {
							echo '<p class="helper">Please fill in all fields</p>';
						}
						else if ($_GET['error'] == "invalidEmail"){
							echo '<p class="helper">Please enter a valid email address</p>';
						}
						else if ($_GET['error'] == "invalidPhone"){
							echo '<p class="helper">Please enter a valid phone number</p>';
						}
						else if ($_GET['error'] == "invalidFather"){
							echo '<p class="helper">Please enter a valid fathers name</p>';
						}
						else if ($_GET['error'] == "invalidMother"){
							echo '<p class="helper">Please enter a valid mothers name</p>';
						}
						else if ($_GET['error'] == "invalidChild"){
							echo '<p class="helper">Please enter a valid childs name</p>';
						}
					else if ($_GET['error'] == "Success"){
						echo '<p class="helper_suc">You have successfully sent an enrollment request</p>';
						}
					}
			?>
				<input type="text" placeholder="Parent/Guardian's Name" name="guardian">
				<input type="text" placeholder="Child's Name" name="child">
				<input type="text" placeholder="Email" name="email">
				<input type="tel" placeholder="Phone" name="phone">
				<input type="text" name="allergies" placeholder="List Allergies or None" >
				<label for="">Potential Start Date</label>
				<input type="date" placeholder="Potential Start Date" name="startDate">
				<label>Is financial assistance needed?</label> <br /><br />
				<input type="checkbox" value="Yes" name="financial">
				<label>Yes</label>
				<input type="checkbox" value="No" name="financial">
				<label>No</label> <br /> <br />
				<input type="submit" class="submit-btn" value="Submit Request">
				</form>
            </div>



            </div>
	</section>
<?php 
require "../includes/footer.php"; 
?>