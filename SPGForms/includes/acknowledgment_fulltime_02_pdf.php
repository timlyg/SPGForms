<?php

// For UX Fulltime


    $pdf->MultiCell(0,$ch*0.55,
                   "I acknowledge that any false, incomplete or misleading information I provide in this application form, in the attached resume or any other information I provide to SPG in a pre-employment interview will be grounds to deny my application or, if discovered later by the hiring client, could be grounds for immediate dismissal from employment.\n\nIn consideration for my introduction to the hiring client by SPG, if I am not employed by the hiring client, I agree that for a period of 180 days following my last contact with them, that I will not accept employment by, or perform services for them (in the area I was introduced to) without the prior written consent of SPG.\n\nSolomon Page Group LLC provides equal employment opportunities to all applicants without regard to race, color, creed, religion, sex, national origin, age, citizenship, disability, veteran status, or any other protected status.",0,'L');

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