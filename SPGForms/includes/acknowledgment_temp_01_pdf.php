<?php
    $pdf->SetFont('Arial','',$smallercontentFZ);
    $pdf->Write(0.1,
                "I understand that employment by Solomon Page Group LLC (SPG) is at will, meaning that either I or SPG can terminate the employment relationship to the full extent permitted by law, with or without cause, at any time, with or without notice. I confirm that none of the information provided in this application, the attached resume, any other documents or during the interview process has been or will be false, incomplete or misleading. I agree to and will submit an authorized timesheet for all hours worked on assignments for any client and will notify SPG upon completion of each assignment. I understand that aas any assignment is completed, or my availability changes, it is my responsibility to immediately notify SPG. Failure to notify SPG will result in SPG determining that a resignation has occurred. In consideration for my employment by SPG, I agree that during any assignment by SPG to any client and for a period of 180 days following the completion of my last assignment through SPG at that client. I will not accept employment by, or perform services for, that client, either directly or indirectly through another staffing firm or otherwise, without the prior written consent of SPG.\n\nIn consideration for my employment by SPG, and regardless of my assignment by SPG to any client, I agree that I am solely an employee of SPG for purposes of any benefits plans or laws involving benefits (including, but not limited to, health care, pensions, vacations and other leave) and that I am eligible only for such benefits as SPG may offer to its temporary employees in accordance with eligibility standards. I understand and agree that I am not eligible for or entitled to benefits provided by SPG clients to any of their employees, regardless of the length of my assignment to such clients and regardless of whether I am found to be a common law employee of such client for any purpose. I have negotiated my wages with SPG accordingly. Therefore, with full knowledge and understanding, and to the full extend allowed by law, I hereby expressly waive all claims or rights that I may have to such benefits and agree not to make any claim for such benefits.\n\nIn consideration for my employment by SPG, except as explicitly authorized in writing by any client to which I am assigned, (1) I will not disclose, use, copy or take, directly or indirectly, either during or after my assignment, any property of the client or confidential or proprietary information in any format concerning the client and/or its business and customers (collectively, \"protected property/information\"). and (2) I agree to deliver promptly to the client (on request at any time or on the date of termination of my assignment) all protected property/information.\n\n");
    $pdf->SetFont('Arial','B',$smallercontentFZ);
    $pdf->Write(0.1,"Solomon-Page Group LLC is an Equal Employment Opportunity Employer: ");
    $pdf->SetFont('Arial','',$smallercontentFZ);
    $pdf->Write(0.1,
                "Solomon-Page Group LLC provides equal employment opportunities to all employees and applicants for employment without regard to race, color, creed, religion, sex, national origin, age, citizenship, disability, veteran status, or any other protected status. This policy governs all areas of employment at Solomon-Page Group LLC, including, recruiting, hiring training, assignments, promotions, compensation, benefits, and termination.");
    $pdf->Ln();
    $pdf->SetFont('Arial','',$contentFZ);

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