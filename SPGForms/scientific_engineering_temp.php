<!doctype html>

<html>
	<head>
		<title>SPG Registration</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1.0">
        
        <!-- major Javascript Frameworks used -->
        <script src="js/jquery.min.js"></script>
        
        <link rel="stylesheet" type="text/css" href="css/default.css">
        
        <!-- initiate session: for login, session vars, etc. -->
        <?php session_start();?>        

	</head>
	<body>
        <center>
            <img src="img/scientific_engineering_logo.png"><br>
            <h3>APPLICANT PROFILE (TEMP)</h3></center>

        
        <!-- First Page of Sign-In: Main Profile -->
        <?php if (empty($_POST)): ?>
        <?php
            session_unset();       // unset all sessions at the start of sign-in and at the end. Starting new session.
        ?>  
        <form id="profileForm" name="bioForm" action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> method="post">
            <input type="hidden" name="Department" value="Scientific and Engineering">
            <input type="hidden" name="DeptFullTempType" value="Temp">
            
            <!-- SECTION 01 - General Bio information -->
            <?php include 'includes/personal_info_temp_01.php'; ?>

            <!-- SECTION 02 - Educational Background information -->
            <?php include 'includes/education_01.php'; ?>

            <!-- SECTION 03 - References information -->
            <?php include 'includes/references_01.php'; ?>

            <!-- SECTION 04 - Emergency Contact -->
            <?php include 'includes/emergency_contact_01.php'; ?>
            
            
            <input type="submit" class="formbuttons" name="ProfileFormSubmit" value="NEXT (1/3)">
        </form>

        
        
        <!-- Second Page of Sign-In: Signature -->
        <?php elseif (!isset($_POST["SignaturePage"]) && !isset($_POST["WorkHistory"])): ?>
        
        <!-- Insert First Page data to Database -->
        <?php include 'includes/submit_first_page_data_01.php'; ?>
        
        <!-- Display Applicant Name/ID -->
        <center>
            <?php
                if (isset($_SESSION["ApplicantID"])) {
                    echo $_SESSION["FirstName"] . ", " . $_SESSION["LastName"] . " (Applicant ID: " . $_SESSION["ApplicantID"] . ")";
                }
            ?>
        </center>
        
        <!-- Display the acknowledgment & signature platform (full time or temp) -->
        <?php include 'includes/acknowledgment_temp_01.php'; ?>
        
        
        
        <!-- Third Page of Sign-In: Work History -->
        <?php elseif (!isset($_POST["WorkHistory"])): ?>
        
        <!-- Display Applicant Name/ID -->
        <center>
            <?php
                if (isset($_SESSION["ApplicantID"])) {
                    echo $_SESSION["FirstName"] . ", " . $_SESSION["LastName"] . " (Applicant ID: " . $_SESSION["ApplicantID"] . ")";
                }
            ?>
        </center>
        
        <!-- Insert Second Page data to Database -->
        <?php include 'includes/submit_second_page_data_01.php'; ?>
        
        <h3>EMPLOYMENT HISTORY:</h3>
        <form name="WorkHistoryForm" action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> method="post">
            <?php include 'includes/work_history_01.php'; ?>
        </form>
        
        
        <!-- Last Page Done -->
        <?php else: ?>
        
        
        <!-- Insert Third Page data to Database -->
        <?php include 'includes/submit_third_page_data_01.php'; ?>
        
        <!-- Result Page (PDF, etc) -->
        <?php include 'includes/Application_Result.php'; ?>
        
        <?php
            session_unset();       // unset all sessions at the start of sign-in and at the end.
            session_destroy();     // end session.
        ?>
                
        <?php endif; ?>
	</body>
</html>