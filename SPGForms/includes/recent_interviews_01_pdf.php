<?php
//This is the first section personal info part of the larger form for fulltime for the following departments:
//- UX


    // Recent Interviews Section
    $pdf->SetFont('Arial','B',$titleFZ);
    $pdf->Cell(0,$ch,'RECENT INTERVIEWS');
    $pdf->Ln();
    $pdf->SetFont('Arial','',$contentFZ);
    $stmt = $db->prepare("SELECT * FROM applicant_recentinterviews_table WHERE ApplicantID=:applicantid");
    $stmt->bindValue(':applicantid', $ApplicantID);
    $stmt->execute();
    $rinterviewrows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    //print_r($stmt->errorInfo());                             // used only for debugging
    $pdf->Cell($pw/5,$ch,"DATE",1);         // Print table head
    $pdf->Cell($pw*2/5,$ch,"COMPANY",1);
    $pdf->Cell($pw*2/5,$ch,"POSITION",1);
    $pdf->Ln();
    foreach($rinterviewrows as $rinterviewrow) {
        $pdf->Cell($pw/5,$ch,$rinterviewrow['Date'],1);
        $pdf->Cell($pw*2/5,$ch,$rinterviewrow['Company'],1);
        $pdf->Cell($pw*2/5,$ch,$rinterviewrow['Position'],1);
        $pdf->Ln();
    }
    $pdf->Ln();

?>