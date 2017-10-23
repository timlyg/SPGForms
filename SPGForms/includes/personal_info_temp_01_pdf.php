<?php
//This is the first section personal info part of the larger form for fulltime for the following departments:
//- Admin & Support Temp


    // Profile Section
    $pdf->Cell($pw*2/5,$ch,'FIRST NAME: ' . $row['FirstName'],1);
    $pdf->Cell($pw*3/5,$ch,'LAST NAME: ' . $row['LastName'],1);
    $pdf->Ln();
    $pdf->Cell($pw*2/5,$ch,'ADDRESS: ' . $row['Address'],1);
    $pdf->Cell($pw*3/5,$ch,'EMAIL: ' . $row['Email'],1);
    $pdf->Ln();
    $pdf->Cell($pw*2/5,$ch,'CITY: ' . $row['City'],1);
    $pdf->Cell($pw*3/5,$ch,'HOME PHONE:' . $row['HomePhone'] . ' CELL PHONE:' . $row['CellPhone'],1);
    $pdf->Ln();
    $pdf->Cell($pw*2/5,$ch,'STATE: ' . $row['State'] . '                                 ZIP: ' . $row['ZIP'],1);
    $pdf->Cell($pw*3/5,$ch,'WORK PHONE:' . $row['WorkPhone'],1);
    $pdf->Ln();
    $pdf->Cell($pw*2/5,$ch,'MOST RECENT COMPENSATION? Base Salary: $' . $row['RecentBaseSalary'],'LTB');
    $pdf->Cell($pw*3/5,$ch,'Hourly Rate: $' . $row['RecentHourlyRate'],'TBR');
    $pdf->Ln();

    $current_y = $pdf->GetY();
    $current_x = $pdf->GetX();

    $pdf->MultiCell($pw*2/5,$ch*0.7,"ARE YOU PERMITTED TO WORK IN THE US ON AN INDEFINITE BASIS FOR ANY EMPLOYER? " . $row['PermittedToWork'],1,'L');
    $pdf->SetXY($current_x + $pw*2/5, $current_y);
    $pdf->MultiCell($pw*3/5,$ch*0.7,"CURRENTLY EMPLOYED?\n " . $row['Employed'],1,'L');
    $pdf->Ln();

?>