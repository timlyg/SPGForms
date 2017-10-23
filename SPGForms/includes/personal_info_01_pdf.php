<?php
// for UX

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
    $pdf->Cell($pw*2/5,$ch,'ARE YOU CURRENTLY EMPLOYED: ' . $row['Employed'],1);
    $pdf->Cell($pw*3/5,$ch,'MOST RECENT COMPENSATION? Base Salary: $' . $row['RecentBaseSalary'] . '   Hourly Rate: $' . $row['RecentHourlyRate'],1);
    $pdf->Ln($ch*2);

?>