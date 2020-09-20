<?php 
include '../includes/config.php'; 
require "../includes/header.php"; 
?>

<section>
    <div class="content-wrapper-sp">
        <h2 class="content-h2">Enrollment</h2>
        <p>At KMA, we accept all children and families regardless of race, culture, economic status, color, ethnicity,
            religion, abilities, and language. We aim to teach and exemplify diversity within our classrooms on a daily
            basis. All children between the ages of 3 years and 5 years of age are welcomed regardless of the
            classifications stated above</p>
        <form class="enrollment-form" action="" method="post">
            <h3>Enrollment Request</h3>
            <input type="text" placeholder="Fathers Name" name="father">
            <input type="text" placeholder="Mothers Name" name="mother">
            <input type="text" placeholder="Email" name="email">
            <input type="tel" placeholder="Phone" name="phone">
            <input type="text" placeholder="Childs Name" name="child">
            <input type="text" placeholder="List any allergies" name="allergies">
            <input type="date" placeholder="Potential Start Date" name="startDate">
            <label>Is financial assistance needed?</label>
            <input type="checkbox" value="Yes">
            <label>Yes</label>
            <input type="checkbox" value="No">
            <label>No</label> <br /> <br />
            <input type="submit" class="submit-btn" value="Submit Request">
        </form>
        <p>test</p>
    </div>
</section>
<?php 
require "../includes/footer.php"; 
?>