<?php 
include '../includes/config.php'; 
require "../includes/header.php"; 
?>


<?php
    $id = $_GET['id'];
    $sql = "SELECT * FROM users where id = $id";
    $result = $conn->query($sql);
        if (isset($_SESSION['id'])) { //General view
            if ($_SESSION['id'] == $id ) { 
                if ($result->num_rows > 0)  { //profile view
                    while($row = $result->fetch_assoc()) {
//PERSONAL PROFILE
echo '<div id="profile_wrapper">
<div id="profileLeft">
    <img src="../../portfolio_images-assets/cl_logo_big.png" alt="" class="profilePic">
    <div>
        <h2>'. $row["username"] .'</h2>
        <h3>'. $row["id"] .'</h3>
        <button type="button" class="edit_profile_btn">Edit Profile</button>
        <button type="button" class="edit_profile_btn" id="add_project">Add Project</button>
        <button type="button" class="edit_profile_btn">Remove Project</button>
        <button type="button" class="edit_profile_btn">Edit Project</button>
    </div>

</div>
<div id="profile_content_edit">
    <div id="profileNav">
        <ul>
            <li><a href="#">Edit Profile</a></li>
            <li><a href="#">Add Project </a></li>
            <li><a href="#">Remove Project</a></li>
            <li><a href="#">Edit Project</a></li>
        </ul>
    </div>
    <div class="section">
    <table class="projects_table">
    <tr>
    <th>Project Name</th>
    <th>Project Icon(url)</th>
    <th>Project Link(url)</th>
    <th>Project Git(url)</th>
    <th></th>
    </tr>
    <tr>
    <td><input class="projects_input"></td>
    <td><input class="projects_input"></td>
    <td><input class="projects_input"></td>
    <td><input class="projects_input"></td>
    <td><button type="button">Add Project</button></td>
    </tr>
    </table>
    </div>
</div>
<div id="profile_content">
    <div id="profileNav">
        <ul>
            <li><a href="#">Overview</a></li>
            <li><a href="#">Projects</a></li>
        </ul>
    </div>
    <div class="section">
        <!-- <h3>Overview</h3> -->
<h3>Member Info</h3>
<table class="profile_table">
    <tr>
        <th>Registration Date</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Projects Count</th>
        <th>Git</th>
        <th>Code Pen</th>
    </tr>
    <tr>
        <td>Date</td>
        <td>John</td>
        <td>Smith</td>
        <td>6</td>
        <td><a href="#">Link</a></td>
        <td><a href="#">Link</a></td>
    </tr>
</table>
<h3>Projects Overview</h3>
<table class="profile_table">
    <tr>
        <th>Projects</th>
        <th>Status</th>
        <th>Icon</th>
        <th>Link</th>
        <th>Git</th>
        <th>Updated By</th>
        <th>Update Date</th>
    </tr>
    <tr>
        <td>Project Management Site</td>
        <td>Orange</td>
        <td></td>
        <td>Test</td>
        <td><a href="#">Here</a></td>
        <td><a href="#">User</a></td>
        <td>Test</td>
    </tr>
    <tr>
        <td>Portfolio</td>
        <td>Orange</td>
        <td><img src="../../portfolio_images-assets/cl_logo.png" alt="icon" class="prjct_table_icon"></td>
        <td>Test</td>
        <td><a href="#">Here</a></td>
        <td><a href="#">User</a></td>
        <td>Test</td>
    </tr>
    <tr>
    <td>Real Estate Websiite</td>
    <td>Red</td>
    <td></td>
    <td>Test</td>
    <td><a href="#">Here</a></td>
    <td><a href="#">User</a></td>
    <td>Test</td>
</tr>
    <tr>
        <td>E-commerce</td>
        <td>Red</td>
        <td></td>
        <td>Test</td>
        <td><a href="#">Here</a></td>
        <td><a href="#">User</a></td>
        <td>Test</td>
    </tr>    <tr>
    <td>Digital Agency</td>
    <td>Red</td>
    <td></td>
    <td>Test</td>
    <td><a href="#">Here</a></td>
    <td><a href="#">User</a></td>
    <td>Test</td>
</tr>
</table>
<h3>About</h3>
<p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci in, sapiente libero blanditiis
    exercitationem vel cupiditate nostrum! Repellendus nobis non distinctio voluptas iste at similique hic,
    molestias modi architecto accusantium rerum quae porro, vitae illum dignissimos maxime quis natus id
    perferendis autem magni officiis enim. Iusto corrupti architecto inventore reprehenderit?</p>
</div>
</div>
</div> 
';


}
}
}
else
{
if ($result->num_rows > 0) { //profile view
//MEMBER VIEW OTHER PROFILE
    while($row = $result->fetch_assoc()) {
        echo '<div id="profile_wrapper">
        <div id="profileLeft">
            <img src="../../portfolio_images-assets/cl_logo_big.png" alt="" class="profilePic">
            <div>
                <h2>' . $row["username"] . '</h2>
                <h3>' . $row["id"] . '</h3>
            </div>
        
        </div>
        <div id="profile_content">
            <div id="profileNav">
                <ul>
                    <li><a href="#">Overview</a></li>
                    <li><a href="#">Projects</a></li>
                </ul>
            </div>
            <div class="section">
                <!-- <h3>Overview</h3> -->
        <h3>Member Info</h3>
        <table class="profile_table">
            <tr>
                <th>Registration Date</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Projects Count</th>
                <th>Git</th>
                <th>Code Pen</th>
            </tr>
            <tr>
                <td>Date</td>
                <td>John</td>
                <td>Smith</td>
                <td>6</td>
                <td><a href="#">Link</a></td>
                <td><a href="#">Link</a></td>
            </tr>
        </table>
        <h3>Projects Overview</h3>
        <table class="profile_table">
            <tr>
                <th>Projects</th>
                <th>Status</th>
                <th>Icon</th>
                <th>Link</th>
                <th>Git</th>
                <th>Updated By</th>
                <th>Update Date</th>
            </tr>
            <tr>
                <td>Project Management Site</td>
                <td>Orange</td>
                <td></td>
                <td>Test</td>
                <td><a href="#">Here</a></td>
                <td><a href="#">User</a></td>
                <td>Test</td>
            </tr>
            <tr>
                <td>Portfolio</td>
                <td>Orange</td>
                <td><img src="../../portfolio_images-assets/cl_logo.png" alt="icon" class="prjct_table_icon"></td>
                <td>Test</td>
                <td><a href="#">Here</a></td>
                <td><a href="#">User</a></td>
                <td>Test</td>
            </tr>
            <tr>
            <td>Real Estate Website</td>
            <td>Red</td>
            <td></td>
            <td>Test</td>
            <td><a href="#">Here</a></td>
            <td><a href="#">User</a></td>
            <td>Test</td>
        </tr>
            <tr>
                <td>E-commerce</td>
                <td>Red</td>
                <td></td>
                <td>Test</td>
                <td><a href="#">Here</a></td>
                <td><a href="#">User</a></td>
                <td>Test</td>
            </tr>    <tr>
            <td>Digital Agency</td>
            <td>Red</td>
            <td></td>
            <td>Test</td>
            <td><a href="#">Here</a></td>
            <td><a href="#">User</a></td>
            <td>Test</td>
        </tr>
        </table>
        <h3>About</h3>
        <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci in, sapiente libero blanditiis
            exercitationem vel cupiditate nostrum! Repellendus nobis non distinctio voluptas iste at similique hic,
            molestias modi architecto accusantium rerum quae porro, vitae illum dignissimos maxime quis natus id
            perferendis autem magni officiis enim. Iusto corrupti architecto inventore reprehenderit?</p>
        </div>
        </div>
        </div>';
    }
    }
    }
    }
    else {
        //NON MEMBER VIEW
        if ($result->num_rows > 0) { //profile view

            while($row = $result->fetch_assoc()) {
                echo '<div id="profile_wrapper">
                <div id="profileLeft">
                    <img src="../../portfolio_images-assets/cl_logo_big.png" alt="" class="profilePic">
                    <div>
                        <h2>' . $row["username"] . '</h2>
                        <h3>' . $row["id"] . '</h3>
                    </div>
                
                </div>
                <div id="profile_content">
                    <div id="profileNav">
                        <ul>
                            <li><a href="#">Overview</a></li>
                            <li><a href="#">Projects</a></li>
                        </ul>
                    </div>
                    <div class="section">
                        <!-- <h3>Overview</h3> -->
                <h3>Member Info</h3>
                <table class="profile_table">
                    <tr>
                        <th>Registration Date</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Projects Count</th>
                        <th>Git</th>
                        <th>Code Pen</th>
                    </tr>
                    <tr>
                        <td>Date</td>
                        <td>John</td>
                        <td>Smith</td>
                        <td>6</td>
                        <td><a href="#">Link</a></td>
                        <td><a href="#">Link</a></td>
                    </tr>
                </table>
                <h3>Projects Overview</h3>
                <table class="profile_table">
                    <tr>
                        <th>Projects</th>
                        <th>Status</th>
                        <th>Icon</th>
                        <th>Link</th>
                        <th>Git</th>
                        <th>Updated By</th>
                        <th>Update Date</th>
                    </tr>
                    <tr>
                        <td>Project Management Site</td>
                        <td>Orange</td>
                        <td></td>
                        <td>Test</td>
                        <td><a href="#">Here</a></td>
                        <td><a href="#">User</a></td>
                        <td>Test</td>
                    </tr>
                    <tr>
                        <td>Portfolio</td>
                        <td>Orange</td>
                        <td><img src="../../portfolio_images-assets/cl_logo.png" alt="icon" class="prjct_table_icon"></td>
                        <td>Test</td>
                        <td><a href="#">Here</a></td>
                        <td><a href="#">User</a></td>
                        <td>Test</td>
                    </tr>
                    <tr>
                    <td>Real Estate Website</td>
                    <td>Red</td>
                    <td></td>
                    <td>Test</td>
                    <td><a href="#">Here</a></td>
                    <td><a href="#">User</a></td>
                    <td>Test</td>
                </tr>
                    <tr>
                        <td>E-commerce</td>
                        <td>Red</td>
                        <td></td>
                        <td>Test</td>
                        <td><a href="#">Here</a></td>
                        <td><a href="#">User</a></td>
                        <td>Test</td>
                    </tr>    <tr>
                    <td>Digital Agency</td>
                    <td>Red</td>
                    <td></td>
                    <td>Test</td>
                    <td><a href="#">Here</a></td>
                    <td><a href="#">User</a></td>
                    <td>Test</td>
                </tr>
                </table>
                <h3>About</h3>
                <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci in, sapiente libero blanditiis
                    exercitationem vel cupiditate nostrum! Repellendus nobis non distinctio voluptas iste at similique hic,
                    molestias modi architecto accusantium rerum quae porro, vitae illum dignissimos maxime quis natus id
                    perferendis autem magni officiis enim. Iusto corrupti architecto inventore reprehenderit?</p>
                </div>
                </div>
                </div>';
            }
        }

    }
    ?>
<?php
    require "../includes/footer.php";
    ?>