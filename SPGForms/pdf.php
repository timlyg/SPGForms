<?php
require('includes/fpdf/fpdf.php');
include 'includes/dbconnect.php';       // initiate database connection

session_start();        // possibility to use SESSIONS, ie. $_SESSION["username"]

$ApplicantID = $_GET["ApplicantID"];

$stmt = $db->prepare("SELECT * FROM applicant_profile_table WHERE ApplicantID=:applicantid");
$stmt->bindValue(':applicantid', $ApplicantID);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);
//print_r($statement->errorInfo());                             // used only for debugging




class PDF extends FPDF
{
    // Page header
    function Header()
    {
        global $row;
        $logo = 'img/' . str_replace(" and ", "_", strtolower($row['Department']));
        $logo = str_replace(" ", "_", $logo);
        $logo = $logo . '_logo.png';
        // Logo
        $this->Image($logo,0.2,0.2,2.5);          // the logo is based on the Applicant's data.
        $this->SetFont('Arial','B',10);
        $this->Cell(0,0.5,'APPLICANT PROFILE        DATE ' . date("m/d/Y",strtotime($row['ApplyDate'])),0,1,'R');

    }

    // Page footer
    function Footer()
    {
        // Position at 8in from bottom
        $this->SetY(-1);
        // Arial italic 8
        $this->SetFont('Arial','I',8);
        // Page number
        $this->Cell(0,1,'Page '.$this->PageNo().'/{nb}',0,0,'C');
    }
}

// define cell width/height
$pw = 7.8;  // width of paper
$ch = 0.2;
$tbcolor = 200; // define general table border color
$titleFZ = 9;  // title Font Size
$contentFZ = 8; // content Font Size
$smallercontentFZ = 7; // for longer disclaimer in Temp's signature

$pdf = new PDF('P','in','Letter');
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetDrawColor($tbcolor,$tbcolor,$tbcolor);
$pdf->SetFont('Arial','',$contentFZ);


// Start choosing Which Department / Fulltime /Temp/Freelance, & Fulltime or Temp/Freelance

$DepartmentID = $row['Department'] . ' ' . $row['DeptFullTempType'];
switch ($DepartmentID) {
    case 'Admin and Support Fulltime':                                                              // For Admin and Support Fulltime
        include 'includes/personal_info_fulltime_01_pdf.php';
        include 'includes/education_01_pdf.php';
        include 'includes/references_01_pdf.php';
        include 'includes/emergency_contact_01_pdf.php';
        include 'includes/acknowledgment_fulltime_01_pdf.php';
        break;
    case 'Admin and Support Temp':                                                                  // For Admin and Support Temp
        include 'includes/personal_info_temp_01_pdf.php';
        include 'includes/education_01_pdf.php';
        include 'includes/references_01_pdf.php';
        include 'includes/emergency_contact_01_pdf.php';
        include 'includes/acknowledgment_temp_01_pdf.php';
        break;
    case 'Creative and Marketing Fulltime':                                                         // For Creative and Marketing Fulltime
        include 'includes/personal_info_fulltime_02_pdf.php';
        include 'includes/education_01_pdf.php';
        include 'includes/references_01_pdf.php';
        include 'includes/emergency_contact_01_pdf.php';
        include 'includes/acknowledgment_fulltime_01_pdf.php';
        break;
    case 'Creative and Marketing Temp':                                                             // For Creative and Marketing Temp
        include 'includes/personal_info_temp_02_pdf.php';
        include 'includes/education_01_pdf.php';
        include 'includes/references_01_pdf.php';
        include 'includes/emergency_contact_01_pdf.php';
        include 'includes/acknowledgment_temp_01_pdf.php';
        break;
    case 'UX Fulltime':                                                                             // For UX Fulltime
        $ch = 0.18;
        $contentFZ = 7.5;
        include 'includes/personal_info_01_pdf.php';
        include 'includes/education_02_pdf.php';
        include 'includes/references_02_pdf.php';
        include 'includes/recent_interviews_01_pdf.php';
        include 'includes/ideal_companies_01_pdf.php';
        include 'includes/acknowledgment_fulltime_02_pdf.php';
        break;
    case 'UX Freelance':                                                                             // For UX Freelance
        $ch = 0.15;
        $contentFZ = 7;
        include 'includes/personal_info_01_pdf.php';
        include 'includes/education_02_pdf.php';
        include 'includes/references_02_pdf.php';
        include 'includes/recent_interviews_01_pdf.php';
        include 'includes/ideal_companies_01_pdf.php';
        include 'includes/acknowledgment_temp_02_pdf.php';
        break;
    case 'Fashion and Beauty Fulltime':                                                                             // For Fashion and Beauty Fulltime
        include 'includes/personal_info_fulltime_03_pdf.php';
        include 'includes/education_01_pdf.php';
        include 'includes/references_01_pdf.php';
        include 'includes/emergency_contact_01_pdf.php';
        include 'includes/acknowledgment_fulltime_01_pdf.php';
        break;
    case 'Fashion and Beauty Freelance':                                                                             // For Fashion and Beauty Freelance
        include 'includes/personal_info_temp_03_pdf.php';
        include 'includes/education_01_pdf.php';
        include 'includes/references_01_pdf.php';
        include 'includes/emergency_contact_01_pdf.php';
        include 'includes/acknowledgment_temp_01_pdf.php';
        break;
    case 'Hospitality Temp':                                                                             // For Hospitality Temp
        include 'includes/personal_info_temp_01_pdf.php';
        include 'includes/education_01_pdf.php';
        include 'includes/references_01_pdf.php';
        include 'includes/emergency_contact_01_pdf.php';
        include 'includes/acknowledgment_temp_01_pdf.php';
        break;
    case 'Legal Services Fulltime':                                                                             // For Legal Services Fulltime
        include 'includes/personal_info_02_pdf.php';
        include 'includes/education_03_pdf.php';
        include 'includes/references_03_pdf.php';
        include 'includes/emergency_contact_01_pdf.php';
        include 'includes/acknowledgment_fulltime_01_pdf.php';
        break;
    case 'Legal Services Temp':                                                                             // For Legal Services Temp
        include 'includes/personal_info_02_pdf.php';
        include 'includes/education_03_pdf.php';
        include 'includes/references_03_pdf.php';
        include 'includes/emergency_contact_01_pdf.php';
        include 'includes/acknowledgment_temp_01_pdf.php';
        break;
    case 'Scientific and Engineering Fulltime':                                                                             // For Scientific and Engineering Fulltime
        include 'includes/personal_info_temp_01_pdf.php';
        include 'includes/education_01_pdf.php';
        include 'includes/references_01_pdf.php';
        include 'includes/emergency_contact_01_pdf.php';
        include 'includes/acknowledgment_fulltime_01_pdf.php';
        break;
    case 'Scientific and Engineering Temp':                                                                             // For Scientific and Engineering Temp
        include 'includes/personal_info_temp_01_pdf.php';
        include 'includes/education_01_pdf.php';
        include 'includes/references_01_pdf.php';
        include 'includes/emergency_contact_01_pdf.php';
        include 'includes/acknowledgment_temp_01_pdf.php';
        break;
    case 'Accounting and Finance Fulltime':                                                                             // For Accounting and Finance Fulltime
        include 'includes/personal_info_fulltime_03_pdf.php';
        include 'includes/education_01_pdf.php';
        include 'includes/references_01_pdf.php';
        include 'includes/emergency_contact_01_pdf.php';
        include 'includes/acknowledgment_fulltime_01_pdf.php';
        break;
    case 'Accounting and Finance Temp':                                                                             // For Accounting and Finance Temp
        include 'includes/personal_info_temp_03_pdf.php';
        include 'includes/education_01_pdf.php';
        include 'includes/references_01_pdf.php';
        include 'includes/emergency_contact_01_pdf.php';
        include 'includes/acknowledgment_temp_01_pdf.php';
        break;
        
    default:
        // Profile Section                                                          // $pdf->Ln() is the same as $pdf->Cell(...,1,1);
        $pdf->Cell($pw/2,$ch,'FIRST NAME: ' . $row['FirstName'],1);
        $pdf->Cell($pw/2,$ch,'LAST NAME: ' . $row['LastName'],1);
        $pdf->Ln();
        $pdf->Cell($pw/2,$ch,'ADDRESS: ' . $row['Address'],1);
        $pdf->Cell($pw/2,$ch,'EMAIL: ' . $row['Email'],1);
        $pdf->Ln();
        $pdf->Cell($pw/2,$ch,'CITY: ' . $row['City'],1);
        $pdf->Cell($pw/2,$ch,'HOME PHONE:' . $row['HomePhone'] . ' CELL:' . $row['CellPhone'],1);
        $pdf->Ln();
        $pdf->Cell($pw/2,$ch,'STATE: ' . $row['State'] . '                                 ZIP: ' . $row['ZIP'],1);
        $pdf->Cell($pw/2,$ch,'WORK PHONE:' . $row['WorkPhone'],1);
        $pdf->Ln();
        $current_y = $pdf->GetY();
        $current_x = $pdf->GetX();

        $pdf->MultiCell($pw/2,$ch*0.7,"DOB " . $row['DOB'] . "\n ",1,'L');
        $pdf->SetXY($current_x + $pw/2, $current_y);
        $pdf->MultiCell($pw/2,$ch*0.7,"ARE YOU PERMITTED TO WORK IN THE US ON AN INDEFINITE\nBASIS FOR ANY EMPLOYER? " . $row['PermittedToWork'],1,'L');
        $pdf->Cell($pw/2,$ch,'MINIMUM ANNUAL SALARY: $ ' . $row['MinSalary'],1);
        $pdf->Cell($pw/2,$ch,'MINIMUM HOURLY RATE: $ ' . $row['MinHourlyRate'],1,1);
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

        // References Section
        $pdf->SetFont('Arial','B',$titleFZ);
        $pdf->Cell(0,$ch,'REFERENCES');
        $pdf->Ln();
        $pdf->SetFont('Arial','',$contentFZ);
        $pdf->Cell(0,$ch,'PLEASE LIST THE NAMES OF THREE PERSONS NOT RELATED TO YOU WHOM YOU HAVE KNOWN AT LEAST ONE YEAR.');
        $pdf->Ln();
        $Theads = ["NAME", "TITLE", "COMPANY", "PHONE/EMAIL", "RELATIONSHIP"];
        foreach ($Theads as $Thead) $pdf->Cell($pw/5,$ch,$Thead,1);
        $pdf->Ln();
        $pdf->Cell($pw/5,$ch,'1. ' . $row['ReferenceName1'],1);
        $pdf->Cell($pw/5,$ch, $row['ReferenceTitle1'],1);
        $pdf->Cell($pw/5,$ch, $row['ReferenceCompany1'],1);
        $pdf->Cell($pw/5,$ch, $row['ReferenceContact1'],1);
        $pdf->Cell($pw/5,$ch, $row['ReferenceRelationship1'],1);
        $pdf->Ln();
        $pdf->Cell($pw/5,$ch,'2. ' . $row['ReferenceName2'],1);
        $pdf->Cell($pw/5,$ch, $row['ReferenceTitle2'],1);
        $pdf->Cell($pw/5,$ch, $row['ReferenceCompany2'],1);
        $pdf->Cell($pw/5,$ch, $row['ReferenceContact2'],1);
        $pdf->Cell($pw/5,$ch, $row['ReferenceRelationship2'],1);
        $pdf->Ln();
        $pdf->Cell($pw/5,$ch,'3. ' . $row['ReferenceName3'],1);
        $pdf->Cell($pw/5,$ch, $row['ReferenceTitle3'],1);
        $pdf->Cell($pw/5,$ch, $row['ReferenceCompany3'],1);
        $pdf->Cell($pw/5,$ch, $row['ReferenceContact3'],1);
        $pdf->Cell($pw/5,$ch, $row['ReferenceRelationship3'],1);
        $pdf->Ln($ch*2);


        // Emergency Contact Section
        $pdf->SetFont('Arial','B',$titleFZ);
        $pdf->Cell(0,$ch,'EMERGENCY CONTACT');
        $pdf->Ln();
        $pdf->SetFont('Arial','',$contentFZ);
        $Theads = ["NAME", "RELATIONSHIP", "PHONE NUMBER"];
        foreach ($Theads as $Thead) $pdf->Cell($pw/3,$ch,$Thead,1);
        $pdf->Ln();
        $pdf->Cell($pw/3,$ch, $row['EmergencyName'],1);
        $pdf->Cell($pw/3,$ch, $row['EmergencyRelationship'],1);
        $pdf->Cell($pw/3,$ch, $row['EmergencyPhone'],1);
        $pdf->Ln($ch*2);


        // Acknowledgement Section
        if ($row['DeptFullTempType'] == 'Fulltime')
            $pdf->MultiCell(0,$ch*0.55,
                           "I acknowledge that any false, incomplete or misleading information I provide in this application form, in the attached resume or any other information I provide to SPG in a pre-employment interview will be grounds to deny my application or, if discovered later by the hiring client, could be grounds for immediate dismissal from employment.\n\nIn consideration for my introduction to the hiring client by SPG, if I am not employed by the hiring client, I agree that for a period of 180 days following my last contact with them, that I will not accept employment by, or perform services for them (in the area I was introduced to) without the prior written consent of SPG.\n\nSolomon Page Group LLC provides equal employment opportunities to all applicants without regard to race, color, creed, religion, sex, national origin, age, citizenship, disability, veteran status, or any other protected status.",0,'L');
        else {
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
        }

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
        $pdf->SetFont('Arial','B',$titleFZ);
        $pdf->MultiCell($pw,$ch,"NOTES-INTERNAL USE ONLY\n " . $row['InternalNotes'],1,'L');
        $pdf->SetDrawColor($tbcolor,$tbcolor,$tbcolor);
        Break;
        
    }
// Work History
$pdf->AddPage();
$pdf->SetFont('Arial','B',$titleFZ);
$pdf->Cell($pw,$ch,"EMPLOYMENT HISTORY",0,1,'C');
$pdf->SetFont('Arial','',$contentFZ);
$stmt = $db->prepare("SELECT * FROM applicant_workhistory_table WHERE ApplicantID=:applicantid");
$stmt->bindValue(':applicantid', $ApplicantID);//$_GET["ApplicantID"]);
$stmt->execute();
$workrows = $stmt->fetchAll(PDO::FETCH_ASSOC);
//print_r($stmt->errorInfo());                             // used only for debugging
foreach($workrows as $workrow) {
    $pdf->Cell($pw/3,$ch,'COMPANY: ' . $workrow['Company'],1);
    $pdf->Cell($pw*2/3,$ch,'LOCATION: ' . $workrow['Location'],1);
    $pdf->Ln();
    $pdf->Cell($pw,$ch,'DATES WORKED: ' . $workrow['WorkDates'],1,1);
    $pdf->Cell($pw,$ch,'TITLE: ' . $workrow['Title'],1,1);
    $pdf->Cell($pw,$ch,'SUPERVISOR: ' . $workrow['Supervisor'],1,1);
    $pdf->Cell($pw,$ch,'REASON LEFT: ' . $workrow['ReasonLeft'],1,1);
    $pdf->Cell($pw/5,$ch,'COMPENSATION:','L');
    $pdf->Cell($pw/5,$ch,'Base');
    $pdf->Cell($pw/5,$ch,'Hourly');
    $pdf->Cell($pw/5,$ch,'Bonus');
    $pdf->Cell($pw/5,$ch,'OT Pay','R',1);
    $pdf->Cell($pw/5,$ch,'','L');
    $pdf->Cell($pw/5,$ch,'$' . $workrow['BasePay']);
    $pdf->Cell($pw/5,$ch,'$' . $workrow['HourlyPay']);
    $pdf->Cell($pw/5,$ch,'$' . $workrow['BonusPay']);
    $pdf->Cell($pw/5,$ch,'$' . $workrow['OTPay'],'R',1);
    $pdf->Cell($pw,$ch,'OFFICE USE: ' . $workrow['OfficeUse'],1,1);
    $pdf->Ln();
}
$pdf->Ln();

$pdf->Output();
?>