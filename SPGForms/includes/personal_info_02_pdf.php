<?php
// for Legal Services

    // Profile Section                                                          // $pdf->Ln() is the same as $pdf->Cell(...,1,1);
    $pdf->Cell($pw*2/5,$ch,'FIRST NAME: ' . $row['FirstName'],1);
    $pdf->Cell($pw*3/5,$ch,'LAST NAME: ' . $row['LastName'],1);
    $pdf->Ln();
    $pdf->Cell($pw*2/5,$ch,'ADDRESS: ' . $row['Address'],1);
    $pdf->Cell($pw*3/5,$ch,'EMAIL: ' . $row['Email'],1);
    $pdf->Ln();
    $pdf->Cell($pw*2/5,$ch,'CITY: ' . $row['City'],1);
    $pdf->Cell($pw*3/5,$ch,'HOME PHONE:' . $row['HomePhone'] . ' CELL:' . $row['CellPhone'],1);
    $pdf->Ln();
    $pdf->Cell($pw*2/5,$ch,'STATE: ' . $row['State'] . '                                 ZIP: ' . $row['ZIP'],1);
    $pdf->Cell($pw*3/5,$ch,'WORK PHONE:' . $row['WorkPhone'],1);
    $pdf->Ln();
    $current_y = $pdf->GetY();
    $current_x = $pdf->GetX();

    $pdf->MultiCell($pw*2/5,$ch*0.7,"DOB " . $row['DOB'] . "\n ",1,'L');
    $pdf->SetXY($current_x + $pw*2/5, $current_y);
    $pdf->MultiCell($pw*3/5,$ch*0.7,"ARE YOU PERMITTED TO WORK IN THE US ON AN INDEFINITE\nBASIS FOR ANY EMPLOYER? " . $row['PermittedToWork'],1,'L');
    $pdf->Cell($pw*2/5,$ch,'MINIMUM ANNUAL SALARY: $ ' . $row['MinSalary'],1);
    $pdf->Cell($pw*3/5,$ch,'MINIMUM HOURLY RATE: $ ' . $row['MinHourlyRate'],1,1);
    $current_y = $pdf->GetY();
    $current_x = $pdf->GetX();

    $pdf->MultiCell($pw/3,$ch*0.7,"Available to travel?\n " . $row['Travel'],1,'L');
    $pdf->SetXY($current_x + $pw/3, $current_y);
    $pdf->MultiCell($pw/3,$ch*0.7,"Where can you work in the Metro Area? List areas.\n" . $row['MetroAreas'],1,'L');
    $pdf->SetXY($current_x + $pw*2/3, $current_y);
    $pdf->MultiCell($pw/3,$ch*0.7,"BAR ADMISSIONS:\nIn good standing? " . $row['BarStanding'],1,'L');
    $current_y = $pdf->GetY();
    $current_x = $pdf->GetX();

    $pdf->MultiCell($pw/3,$ch*0.7,"FOREIGN LANGUAGE FLUENCY:\n " . $row['ForeignLanguages'] . "\n ",1,'L');
    $pdf->SetXY($current_x + $pw/3, $current_y);
    $pdf->MultiCell($pw/3,$ch*0.7,"Have you ever been the subject of a disciplinary action by the bar of any state? " . $row['BarDiscipline'] . "\n If yes, " . $row['BarDisciplineNote'],1,'L');
    $pdf->SetXY($current_x + $pw*2/3, $current_y);
    $pdf->MultiCell($pw/3,$ch*0.7,"Software Experience:\n" . $row['SoftwareExperience'] . "\n ",1,'L');
    $pdf->Ln($ch);

?>