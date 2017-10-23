<?php
//This is used by:
//- All except for UX & Legal services

// Education Section
$pdf->SetFont('Arial','B',$titleFZ);
$pdf->Cell(0,$ch,'EDUCATION');
$pdf->Ln();
$pdf->SetFont('Arial','',$contentFZ);
$stmt = $db->prepare("SELECT * FROM applicant_education_table WHERE ApplicantID=:applicantid");
$stmt->bindValue(':applicantid', $ApplicantID);//$_GET["ApplicantID"]);
$stmt->execute();
$edurows = $stmt->fetchAll(PDO::FETCH_ASSOC);
//print_r($stmt->errorInfo());                             // used only for debugging
foreach($edurows as $edurow) {
    $pdf->Cell($pw/2,$ch,'SCHOOL: ' . $edurow['SchoolName'],1);
    $pdf->Cell($pw/2,$ch,'DEGREE: ' . $edurow['Degree'],1);
    $pdf->Ln();
}
$pdf->Ln();

?>