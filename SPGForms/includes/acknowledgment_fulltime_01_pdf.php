<?php
// For All fulltime Except UX Fulltime

    $pdf->MultiCell(0,$ch*0.55,
                   "I acknowledge that any false, incomplete or misleading information I provide in this application form, in the attached resume or any other information I provide to SPG in a pre-employment interview will be grounds to deny my application or, if discovered later by the hiring client, could be grounds for immediate dismissal from employment.\n\nIn consideration for my introduction to the hiring client by SPG, if I am not employed by the hiring client, I agree that for a period of 180 days following my last contact with them, that I will not accept employment by, or perform services for them (in the area I was introduced to) without the prior written consent of SPG.\n\nSolomon Page Group LLC provides equal employment opportunities to all applicants without regard to race, color, creed, religion, sex, national origin, age, citizenship, disability, veteran status, or any other protected status.",0,'L');

    $pdf->Image($row['SignaturePath'],1.8,null,1.6,0.6);
    $pdf->SetFont('Arial','',$titleFZ);
    $pdf->Cell($pw/6,$ch, 'SIGNATURE');
    $pdf->SetFont('Arial','U',$titleFZ);
    $pdf->Cell($pw*2/6,$ch, '                                                 ');    // white spaces to make underline longer

    $pdf->SetFont('Arial','',$titleFZ);
    $pdf->Cell($pw/4,$ch, 'DATE: ',0,0,'R');
    $pdf->SetFont('Arial','U',$titleFZ);
    $pdf->Cell($pw/4,$ch, '     ' . $row['SignDate'] . '   ',0,1);  // white spaces to make underline longer
    $pdf->Ln();



    // Internal Notes
    $pdf->SetDrawColor(0,0,0);
    $pdf->SetFont('Arial','B',$titleFZ);
    $pdf->MultiCell($pw,$ch,"NOTES (Internal Use only)\n\n " . $row['InternalNotes'],1,'L');
    $pdf->SetDrawColor($tbcolor,$tbcolor,$tbcolor);
?>