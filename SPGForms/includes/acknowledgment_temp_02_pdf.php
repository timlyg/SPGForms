<?php

// For UX Freelance

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

    $pdf->Image($row['SignaturePath'],1.8,null,1,0.2);
    $pdf->SetFont('Arial','',$titleFZ);
    $pdf->Cell($pw/6,$ch, 'SIGNATURE');
    $pdf->SetFont('Arial','U',$titleFZ);
    $pdf->Cell($pw*2/6,$ch, '                                                 ');    // white spaces to make underline longer

    $pdf->SetFont('Arial','',$titleFZ);
    $pdf->Cell($pw/4,$ch, 'DATE: ',0,0,'R');
    $pdf->SetFont('Arial','U',$titleFZ);
    $pdf->Cell($pw/4,$ch, '     ' . $row['SignDate'] . '   ',0,1);  // white spaces to make underline longer
    $pdf->Ln();


    // Skillsets & Internal Notes
    $SkillSets = unserialize($row['SkillSets']);
    $pdf->SetFont('Arial','',$titleFZ);
    $NotesX = $pdf->getX();
    $NotesY = $pdf->getY();
    $pdf->Cell($pw,$ch,'CHECK YOUR SKILL SETS',0,1);
    $pdf->SetFont('Arial','',$contentFZ);
    $pdf->Cell($pw/4,$ch,(empty($SkillSets)? '___' : (in_array('Agile/Scrum Environment',$SkillSets)? '_X_':'___')) . 'Agile/Scrum Environment',0);
    $pdf->Cell($pw/4,$ch,(empty($SkillSets)? '___' : (in_array('Competitor Analysis',$SkillSets)? '_X_':'___')) . 'Competitor Analysis',0,1);
    $pdf->Cell($pw/4,$ch,(empty($SkillSets)? '___' : (in_array('Complex Interaction Models',$SkillSets)? '_X_':'___')) . 'Complex Interaction Models',0);
    $pdf->Cell($pw/4,$ch,(empty($SkillSets)? '___' : (in_array('Content Mapping',$SkillSets)? '_X_':'___')) . 'Content Mapping',0,1);
    $pdf->Cell($pw/4,$ch,(empty($SkillSets)? '___' : (in_array('Design',$SkillSets)? '_X_':'___')) . 'Design',0);
    $pdf->Cell($pw/4,$ch,(empty($SkillSets)? '___' : (in_array('Design Research',$SkillSets)? '_X_':'___')) . 'Design Research',0,1);
    $pdf->Cell($pw/4,$ch,(empty($SkillSets)? '___' : (in_array('HTML/CSS',$SkillSets)? '_X_':'___')) . 'HTML/CSS',0);
    $pdf->Cell($pw/4,$ch,(empty($SkillSets)? '___' : (in_array('Interaction Design',$SkillSets)? '_X_':'___')) . 'Interaction Design',0,1);
    $pdf->Cell($pw/4,$ch,(empty($SkillSets)? '___' : (in_array('iOS Mobile Skills',$SkillSets)? '_X_':'___')) . 'iOS Mobile Skills',0);
    $pdf->Cell($pw/4,$ch,(empty($SkillSets)? '___' : (in_array('Android Mobile Skills',$SkillSets)? '_X_':'___')) . 'Android Mobile Skills',0,1);
    $pdf->Cell($pw/4,$ch,(empty($SkillSets)? '___' : (in_array('Product Management',$SkillSets)? '_X_':'___')) . 'Product Management',0);
    $pdf->Cell($pw/4,$ch,(empty($SkillSets)? '___' : (in_array('Prototyping',$SkillSets)? '_X_':'___')) . 'Prototyping',0,1);
    $pdf->Cell($pw/4,$ch,(empty($SkillSets)? '___' : (in_array('Quality Assurance',$SkillSets)? '_X_':'___')) . 'Quality Assurance',0);
    $pdf->Cell($pw/4,$ch,(empty($SkillSets)? '___' : (in_array('Quantitative/Qualitative Research',$SkillSets)? '_X_':'___')) . 'Quantitative/Qualitative Research',0,1);
    $pdf->Cell($pw/4,$ch,(empty($SkillSets)? '___' : (in_array('Site Maps',$SkillSets)? '_X_':'___')) . 'Site Maps',0);
    $pdf->Cell($pw/4,$ch,(empty($SkillSets)? '___' : (in_array('Responsive Design',$SkillSets)? '_X_':'___')) . 'Responsive Design',0,1);
    $pdf->Cell($pw/4,$ch,(empty($SkillSets)? '___' : (in_array('Storyboards',$SkillSets)? '_X_':'___')) . 'Storyboards',0);
    $pdf->Cell($pw/4,$ch,(empty($SkillSets)? '___' : (in_array('Style Guides',$SkillSets)? '_X_':'___')) . 'Style Guides',0,1);
    $pdf->Cell($pw/4,$ch,(empty($SkillSets)? '___' : (in_array('Usability Testing',$SkillSets)? '_X_':'___')) . 'Usability Testing',0);
    $pdf->Cell($pw/4,$ch,(empty($SkillSets)? '___' : (in_array('User/Process Flows',$SkillSets)? '_X_':'___')) . 'User/Process Flows',0,1);
    $pdf->Cell($pw/4,$ch,(empty($SkillSets)? '___' : (in_array('Wireframes',$SkillSets)? '_X_':'___')) . 'Wireframes',0);
    $pdf->setY($NotesY);
    $pdf->setX($NotesX+$pw/2);
    $pdf->SetFont('Arial','B',$titleFZ);
    $pdf->MultiCell($pw/2,$ch,"NOTES-INTERNAL USE ONLY\n " . $row['InternalNotes'],1,'L');
    $pdf->SetDrawColor($tbcolor,$tbcolor,$tbcolor);

?>