<div class="content-wrapper-even">
    <div>
        <h1 class="content-h1">Enrollments are open</h1>
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
            <label>Child's Parent/Legal Guardian</label>
            <input type="text" placeholder="Guardian's Name" name="guardian">
            <label>Child's Name</label>
            <input type="text" placeholder="Child's Name" name="child">
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