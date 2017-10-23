<?php
    $encoded_image = explode(",", $_POST['signeddata'])[1];
    $decoded_image = base64_decode($encoded_image);


    // check if signature file exists, if so renamed existing to backup format (signature.id.backup.lastmodifieddate(not signdate but should be the same).currentdatetime.png)
    if (file_exists("../signatures/signature." . $_POST['ApplicantID'] . ".png")) {
        rename("../signatures/signature." . $_POST['ApplicantID'] . ".png", "../signatures/signature." . $_POST['ApplicantID'] . ".backup." . date("Ymd",filemtime("../signatures/signature." . $_POST['ApplicantID'] . ".png")) . "." . date("YmdHis") . ".png");
    }

    // The path here is relative. So adjust accordingly should the calling file be moved.
    file_put_contents("../signatures/signature." . $_POST['ApplicantID'] . ".png", $decoded_image);
?>