<?php 
include '../includes/config.php'; 
require "../includes/header.php"; 
?>
<!-- <div class="header_Wrapper_enroll">
    <h2 class="content-enroll-h2">Enrollment is open</h2>
</div> -->
<div class="enrollment-wrapper">
    <div>
        <h2 class="content-enroll-h2">Accepting Enrollments</h2>
        <p>At KMA, we accept all children and families regardless of race, culture, economic status, color, ethnicity,
            religion, abilities, and language. We aim to teach and exemplify diversity within our classrooms on a daily
            basis. All children between the ages of 6 weeks and 12 years of age are welcomed regardless of the
            classifications stated above</p>
        <h2 class="content-enroll-h2">What to expect</h2>
        <p>Upon submission of the request, you will receive an automated email, validating that you
            have submitted the request. That email will include a fact sheet with additional information
            on how to schedule a tour of our facility.
    </div>
    <div>
        <form class="enrollment-form" action="../includes/enroll.php" method="post">
            <h3>Enrollment Request</h3>
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
            <label>Child's Father</label>
            <input type="text" placeholder="Fathers Name" name="father">
            <label>Child's Mother</label>
            <input type="text" placeholder="Mothers Name" name="mother">
            <label>Child's Name</label>
            <input type="text" placeholder="Childs Name" name="child">
            <label>Email</label>
            <input type="text" placeholder="Email" name="email">
            <label>Phone</label>
            <input type="tel" placeholder="Phone" name="phone">
            <label>List Allergies</label>
            <input type="text" name="allergies" value="No Allergies">
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
<?php 
require "../includes/footer.php"; 
?>