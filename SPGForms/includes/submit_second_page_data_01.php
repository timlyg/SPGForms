<!--This is universal for all forms-->


<?php
    include 'includes/dbconnect.php';

    $SignaturePath = $_POST["SignaturePath"];
    $SignDate = $_POST["SignDate"];

    // Insert main record
    $sql = "UPDATE applicant_profile_table SET SignaturePath=:signaturepath, SignDate=:signdate WHERE ApplicantID=:applicantid";

    $statement = $db->prepare($sql);
    $statement->bindValue(":signaturepath", $SignaturePath);
    $statement->bindValue(":signdate", $SignDate);
    $statement->bindValue(":applicantid", $_SESSION["ApplicantID"]);
    $statement->execute();

    $db = null;        // Disconnect
?>
