<?php

// This is universal for all forms

    $Companies = $_POST["Company"];
    $Location = $_POST["Location"];
    $WorkDates = $_POST["WorkDates"];
    $Title = $_POST["Title"];
    $Supervisor = $_POST["Supervisor"];
    $ReasonLeft = $_POST["ReasonLeft"];
    $BasePay = $_POST["BasePay"];
    $HourlyPay = $_POST["HourlyPay"];
    $BonusPay = $_POST["BonusPay"];
    $OTPay = $_POST["OTPay"];


    include 'includes/dbconnect.php';       // initiate database connection

    // Insert WORKHISTORY of ApplicantID into applicant_workhistory_table
    $sql = "INSERT INTO applicant_workhistory_table (
                ApplicantID, Company, Location, WorkDates, Title, Supervisor, ReasonLeft, BasePay, HourlyPay, BonusPay, OTPay
            ) VALUES (
                :applicantid, :company, :location, :workdates, :title, :supervisor, :reasonleft, :basepay, :hourlypay, :bonuspay, :otpay
            )";
    $statement = $db->prepare($sql);
    $statement->bindValue(":applicantid", $_SESSION["ApplicantID"]);
    foreach ($Companies as $key => $Company) {
        // Don't insert if Company is empty
        if ($Company) {                                                                           // it is assumed that at least Company name must be a required field.
            $statement->bindValue(":company", $Company);
            $statement->bindValue(":location", $Location[$key]);
            $statement->bindValue(":workdates", $WorkDates[$key]);
            $statement->bindValue(":title", $Title[$key]);
            $statement->bindValue(":supervisor", $Supervisor[$key]);
            $statement->bindValue(":reasonleft", $ReasonLeft[$key]);
            $statement->bindValue(":basepay", str_replace(",", "", $BasePay[$key]));
            $statement->bindValue(":hourlypay", str_replace(",", "", $HourlyPay[$key]));
            $statement->bindValue(":bonuspay", str_replace(",", "", $BonusPay[$key]));
            $statement->bindValue(":otpay", str_replace(",", "", $OTPay[$key]));
            $statement->execute();
        }
    }
    $db = null;        // Disconnect
?>