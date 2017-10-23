<link rel="stylesheet" type="text/css" href="css/main_admin.css">
<?php
    include 'includes/dbconnect.php';
    session_start();

    if (isset($_POST["SubmitLogin"])) {
        $stmt = $db->prepare("SELECT * FROM credentials_table WHERE username=:username AND hash=:hash");
        $stmt->bindValue(':username', $_POST["username"]);
        $stmt->bindValue(':hash', crypt($_POST["password"],"solomonpage"));
        $stmt->execute();
        $row_count = $stmt->rowCount();
        if ($row_count == 1) {
            $_SESSION["username"] = $_POST["username"];
        }
        else {
            echo "Login failed, username/password does not mach.<br>Please try again<br>";
        }    
    }
    if (isset($_POST["SubmitLogout"])) {
        session_unset();       // unset all sessions at the start of sign-in and at the end.
        session_destroy();     // end session.
        echo "Logged out successfully<br>";
    }

?>


<?php if (!isset($_SESSION["username"])): ?>

    <form name="adminlogin" action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> method="post">
        Admin Login: <input name=username> (admin)<br>
        Password: <input type="password" name="password"> (admin)<br>
        <input type="submit" name="SubmitLogin" value="LOGIN">
    </form>

<?php else: ?>

    <?php echo "Logged in as " . $_SESSION["username"] . "<br>"; ?>
    <form name="adminlogout" action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> method="post">
        <input type="submit" name="SubmitLogout" value="LOGOUT">
    </form>

    <form name="searchdb" action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> method="post">
        Search by (hit SEARCH without any input to list all)<br>
        Applicant ID: <input name="ByApplicantID"><br>
        First Name: <input name="ByFirstName"><br>
        Last Name: <input name="ByLastName"><br>
        <input type="submit" name="Search" value="SEARCH">
        
    </form>

    <?php
        if (isset($_POST["Search"])) {
            $sql = "SELECT * FROM applicant_profile_table";
            
            if ($_POST["ByApplicantID"]) {
                $sql = $sql . " WHERE ApplicantID=:applicantid";
                $stmt = $db->prepare($sql);
                $stmt->bindValue(':applicantid', $_POST["ByApplicantID"]);
            }
            else if ($_POST["ByFirstName"] && $_POST["ByLastName"]) {
                $sql = $sql . " WHERE FirstName LIKE :firstname AND LastName LIKE :lastname";
                $stmt = $db->prepare($sql);
                $stmt->bindValue(':firstname', '%' . $_POST["ByFirstName"] . '%');
                $stmt->bindValue(':lastname', '%' . $_POST["ByLastName"] . '%');
            }
            else if ($_POST["ByFirstName"]) {
                $sql = $sql . " WHERE FirstName LIKE :firstname";
                $stmt = $db->prepare($sql);
                $stmt->bindValue(':firstname', '%' . $_POST["ByFirstName"] . '%');
            }
            else if ($_POST["ByLastName"]) {
                $sql = $sql . " WHERE LastName LIKE :lastname";
                $stmt = $db->prepare($sql);
                $stmt->bindValue(':lastname', '%' . $_POST["ByLastName"] . '%');
            }
            else $stmt = $db->prepare($sql);
            $stmt->execute();
            //print_r($statement->errorInfo());                             // used only for debugging
            
            
            // List Search Result Table:
            echo "Results:<br>";
            echo "<table><tr><th>Action</th><th>ApplicantID</th><th>First Name</th><th>Last Name</th><th>Department</th><th>Job Type</th></tr>";
            while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                echo "<tr><td><a href=\"adminedit.php?ApplicantID=".$row['ApplicantID']."\" target=\"_blank\">EDIT</a> | <a href=\"pdf.php?ApplicantID=".$row['ApplicantID']."\" target=\"_blank\">PDF</a> | BULLHORN-it </td><td>" . $row['ApplicantID'].'</td><td>'.$row['FirstName'].'</td><td>'.$row['LastName'].'</td><td>'.$row['Department'].'</td><td>'.$row['DeptFullTempType'].'</td></tr>';
            }
            echo "</table>";
            
        }

    ?>



<?php endif; ?>