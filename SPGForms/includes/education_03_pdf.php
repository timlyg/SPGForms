<?php
//This is used by:
//- Legal Services

    // Education Section
    $pdf->SetFont('Arial','B',$titleFZ);
    $pdf->Cell(0,$ch,'EDUCATION');
    $pdf->Ln();
    $pdf->SetFont('Arial','',$contentFZ);
    $stmt = $db->prepare("SELECT * FROM applicant_education_table WHERE ApplicantID=:applicantid");
    $stmt->bindValue(':applicantid', $ApplicantID);
    $stmt->execute();
    $edurows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    //print_r($stmt->errorInfo());                             // used only for debugging
    foreach($edurows as $edurow) {
        $pdf->Cell($pw/4,$ch,$edurow['SchoolType'] . ' ' . $edurow['SchoolName'],1);
        $pdf->Cell($pw/4,$ch,'DEGREE: ' . $edurow['Degree'],1);
        $pdf->Cell($pw/4,$ch,'YEAR: ' . $edurow['GraduateYear'],1);
        $pdf->Cell($pw/4,$ch,'GPA: ' . $edurow['GPA'],1);
        $pdf->Ln();
    }
    $pdf->Ln();

?>