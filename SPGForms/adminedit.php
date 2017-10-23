<!doctype html>

<html>
	<head>
		<title>Applicants Database Management</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1.0">
        <!-- major Javascript Frameworks used -->
        <script src="js/jquery.min.js"></script>
        <link rel="stylesheet" type="text/css" href="css/default.css">
	</head>

	<body>
        <?php
            include 'includes/dbconnect.php';
            session_start();

        //  Handles Management credential
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
            <br><br>
        
            <?php
                // End of Admin Credential handling
        
        
                // Start of the main form
                $ApplicantID = (isset($_GET["ApplicantID"])? $_GET["ApplicantID"] : $_SESSION["ApplicantID"]);
                $_SESSION["ApplicantID"] = $ApplicantID;
                $sql = "SELECT * FROM applicant_profile_table WHERE ApplicantID=:applicantid";
                $stmt = $db->prepare($sql);
                $stmt->bindValue(':applicantid', $ApplicantID);

                $stmt->execute();
                //print_r($statement->errorInfo());                                // used only for debugging
                $row = $stmt->fetch(PDO::FETCH_ASSOC);

                echo "ApplicantID:" . $ApplicantID;
            ?>
            <br><br>
        
            <?php if (!isset($_POST["ProfileFormSubmit"])): ?>
                <form id="editForm" name="editForm" action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> method="post">
                    <b>Department:</b> 
                    <select name="Department">
                        <option value="Accounting and Finance" <?php echo (htmlspecialchars($row['Department']) == "Accounting and Finance")? 'Selected' : ''; ?>>Accounting and Finance</option>
                        <option value="Admin and Support" <?php echo (htmlspecialchars($row['Department']) == "Admin and Support")? 'Selected' : ''; ?>>Admin and Support</option>
                        <option value="Creative and Marketing" <?php echo (htmlspecialchars($row['Department']) == "Creative and Marketing")? 'Selected' : ''; ?>>Creative and Marketing</option>
                        <option value="Fashion and Beauty" <?php echo (htmlspecialchars($row['Department']) == "Fashion and Beauty")? 'Selected' : ''; ?>>Fashion and Beauty</option>
                        <option value="Hospitality" <?php echo (htmlspecialchars($row['Department']) == "Hospitality")? 'Selected' : ''; ?>>Hospitality</option>
                        <option value="Legal Services" <?php echo (htmlspecialchars($row['Department']) == "Legal Services")? 'Selected' : ''; ?>>Legal Services</option>
                        <option value="Scientific and Engineering" <?php echo (htmlspecialchars($row['Department']) == "Scientific and Engineering")? 'Selected' : ''; ?>>Scientific and Engineering</option>
                        <option value="UX" <?php echo (htmlspecialchars($row['Department']) == "UX")? 'Selected' : ''; ?>>UX</option>
                    </select>
                    <b>Job Type:</b>
                    <select name="DeptFullTempType">
                        <option value="Fulltime" <?php echo (htmlspecialchars($row['DeptFullTempType']) == "Fulltime")? 'Selected' : ''; ?>>Fulltime</option>
                        <option value="Temp" <?php echo (htmlspecialchars($row['DeptFullTempType']) == "Temp")? 'Selected' : ''; ?>>Temp</option>
                        <option value="Freelance" <?php echo (htmlspecialchars($row['DeptFullTempType']) == "Freelance")? 'Selected' : ''; ?>>Freelance</option>
                    </select>

                    <!-- SECTION 01 - General Bio information -->
                    <?php include 'includes/personal_info_mainedit.php'; ?>

                    <!-- SECTION 02 - Educational Background information -->
                    <?php include 'includes/education_mainedit.php'; ?>

                    <!-- SECTION 03 - References information -->
                    <?php include 'includes/references_mainedit.php'; ?>

                    <!-- SECTION 04 - Recent Interviews information -->
                    <?php include 'includes/recent_interviews_mainedit.php'; ?>

                    <!-- SECTION 05 - Ideal Companies information -->
                    <?php include 'includes/ideal_companies_mainedit.php'; ?>

                    <!-- SECTION 06 - Emergency Contact -->
                    <?php include 'includes/emergency_contact_mainedit.php'; ?>
                    
                    <!-- SECTION 07 - SkillSets (For UX) -->
                    <?php include 'includes/skillsets_mainedit_01.php'; ?>
                    
                    <!-- SECTION 08 - Work History -->
                    <?php include 'includes/work_history_mainedit.php'; ?>
                    

                    <br><br>
                    <h3>CANDIDATE'S SIGNATURE</h3>
                    <!-- references to Signature_Pad: This is placed in this section to avoid error "warning" since this is a conditional section where without which the reference doesn't work -->
                    Original:<br>
                    <img id="signatureImage" src=<?php echo "signatures/signature." . $ApplicantID . ".png?no-cache=" . rand(10000,99999); ?>>
                    <br>
                    Change(Hit "Save" to apply signature change)? (all replaced signatures are backed up)
                    <link rel="stylesheet" type="text/css" href="css/signature_pad.css">
                    <script src="js/signature_pad.min.js"></script>
                    <script src="js/signaturefunction_adminedit.js"></script>

                    <div class="wrapper" id="wrapper">
                      <canvas id="signature-pad" class="signature-pad" width=400 height=200></canvas>
                    </div>
                    <div>
                        <button type="button" id="clear">Clear</button>
                        <button type="button" id="save">Save</button>
                    </div>
                    <input type="hidden" name="signeddata" id="signeddata">

                    <input type="hidden" name="SignaturePage">
                    <input type="hidden" name="ApplicantID" id="ApplicantID" value=<?php echo $ApplicantID; ?>>

                    <input type="hidden" name="SignaturePath" value=<?php echo "signatures/signature." . $ApplicantID . ".png"; ?>>
                    DATE: <input name="SignDate" type="date" value=<?php echo $row['SignDate']; ?>> <br>

                    <br>
                    Internal Notes: <textarea name="InternalNotes"><?php echo htmlspecialchars($row['InternalNotes']); ?></textarea>
                    <br>
                    <input type="submit" class="formbuttons" name="ProfileFormSubmit" value="Update">
                </form>
        
            <!-- Update Data -->
            <?php else: ?>
            
                <?php include 'includes/submit_all_data_01.php'; ?>
                Data Updated.<br>
            <?php endif; ?>



        <?php endif; ?>
	</body>
</html>