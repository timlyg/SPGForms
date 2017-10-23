<?php

// This is a universal (for all applicant form types) database submission, though it is labeled *-01.

    $_SESSION["FirstName"] = $_POST["FirstName"];           // If the fields need to be carried across multiple pages,
    $_SESSION["LastName"] = $_POST["LastName"];             // use $_SESSION["field"], instead of $field / $_POST[$field]: This is Resource management.
    $_SESSION["Department"] = $_POST["Department"];                 // if fields are certain to be present all the time, no need isset
    $_SESSION["DeptFullTempType"] = $_POST["DeptFullTempType"];     // isset deals with fields that could be absent in some applicant forms
    $_SESSION["ApplyDate"] = $_POST["ApplyDate"];
    $_SESSION["Address"] = $_POST["Address"];
    $_SESSION["Email"] = $_POST["Email"];
    $_SESSION["City"] = $_POST["City"];
    $_SESSION["HomePhone"] = $_POST["HomePhone"];
    $_SESSION["CellPhone"] = $_POST["CellPhone"];
    $_SESSION["WorkPhone"] = $_POST["WorkPhone"];
    $_SESSION["State"] = $_POST["State"];
    $_SESSION["ZIP"] = $_POST["ZIP"];
    $_SESSION["ReferenceName1"] = $_POST["ReferenceName1"];
    $_SESSION["ReferenceTitle1"] = $_POST["ReferenceTitle1"];
    $_SESSION["ReferenceCompany1"] = $_POST["ReferenceCompany1"];
    $_SESSION["ReferenceContact1"] = $_POST["ReferenceContact1"];
    $_SESSION["ReferenceAcquaintedYears1"] = (isset($_POST["ReferenceAcquaintedYears1"])? $_POST["ReferenceAcquaintedYears1"] : "");
    $_SESSION["ReferenceRelationship1"] = (isset($_POST["ReferenceRelationship1"])? $_POST["ReferenceRelationship1"] : "");
    $_SESSION["ReferenceName2"] = $_POST["ReferenceName2"];
    $_SESSION["ReferenceTitle2"] = $_POST["ReferenceTitle2"];
    $_SESSION["ReferenceCompany2"] = $_POST["ReferenceCompany2"];
    $_SESSION["ReferenceContact2"] = $_POST["ReferenceContact2"];
    $_SESSION["ReferenceAcquaintedYears2"] = (isset($_POST["ReferenceAcquaintedYears2"])? $_POST["ReferenceAcquaintedYears2"] : "");
    $_SESSION["ReferenceRelationship2"] = (isset($_POST["ReferenceRelationship2"])? $_POST["ReferenceRelationship2"] : "");
    $_SESSION["ReferenceName3"] = $_POST["ReferenceName3"];
    $_SESSION["ReferenceTitle3"] = $_POST["ReferenceTitle3"];
    $_SESSION["ReferenceCompany3"] = $_POST["ReferenceCompany3"];
    $_SESSION["ReferenceContact3"] = $_POST["ReferenceContact3"];
    $_SESSION["ReferenceAcquaintedYears3"] = (isset($_POST["ReferenceAcquaintedYears3"])? $_POST["ReferenceAcquaintedYears3"] : "");
    $_SESSION["ReferenceRelationship3"] = (isset($_POST["ReferenceRelationship3"])? $_POST["ReferenceRelationship3"] : "");
    $_SESSION["EmergencyName"] = (isset($_POST["EmergencyName"])? $_POST["EmergencyName"] : "");
    $_SESSION["EmergencyRelationship"] = (isset($_POST["EmergencyRelationship"])? $_POST["EmergencyRelationship"] : "");
    $_SESSION["EmergencyPhone"] = (isset($_POST["EmergencyPhone"])? $_POST["EmergencyPhone"] : "");
    $_SESSION["DOB"] = (isset($_POST["DOB"])? $_POST["DOB"] : "");
    $_SESSION["SSN"] = (isset($_POST["SSN"])? $_POST["SSN"] : "");
    $_SESSION["MinSalary"] = (isset($_POST["MinSalary"])? str_replace(",", "", $_POST["MinSalary"]) : "");
    $_SESSION["MinHourlyRate"] = (isset($_POST["MinHourlyRate"])? str_replace(",", "", $_POST["MinHourlyRate"]) : "");
    $_SESSION["RecentHourlyRate"] = (isset($_POST["RecentHourlyRate"])? str_replace(",", "", $_POST["RecentHourlyRate"]) : "");
    $_SESSION["RecentBaseSalary"] = (isset($_POST["RecentBaseSalary"])? str_replace(",", "", $_POST["RecentBaseSalary"]) : "");
    $_SESSION["PermittedToWork"] = (isset($_POST["PermittedToWork"])? $_POST["PermittedToWork"] : "");
    $_SESSION["Employed"] = (isset($_POST["Employed"])? $_POST["Employed"] : "");
    $_SESSION["Car"] = (isset($_POST["Car"])? $_POST["Car"] : "");
    $_SESSION["W2or1099"] = (isset($_POST["W2or1099"])? $_POST["W2or1099"] : "");
    $_SESSION["ComputerSkills"] = (isset($_POST["ComputerSkills"])? $_POST["ComputerSkills"] : "");
    $_SESSION["IdealCompany1"] = (isset($_POST["IdealCompany1"])? $_POST["IdealCompany1"] : "");                    // seen in UX forms
    $_SESSION["IdealCompanyNote1"] = (isset($_POST["IdealCompanyNote1"])? $_POST["IdealCompanyNote1"] : "");
    $_SESSION["IdealCompany2"] = (isset($_POST["IdealCompany2"])? $_POST["IdealCompany2"] : "");
    $_SESSION["IdealCompanyNote2"] = (isset($_POST["IdealCompanyNote2"])? $_POST["IdealCompanyNote2"] : "");
    $_SESSION["IdealCompany3"] = (isset($_POST["IdealCompany3"])? $_POST["IdealCompany3"] : "");
    $_SESSION["IdealCompanyNote3"] = (isset($_POST["IdealCompanyNote3"])? $_POST["IdealCompanyNote3"] : "");
    $_SESSION["IdealCompany4"] = (isset($_POST["IdealCompany4"])? $_POST["IdealCompany4"] : "");
    $_SESSION["IdealCompanyNote4"] = (isset($_POST["IdealCompanyNote4"])? $_POST["IdealCompanyNote4"] : "");
    $_SESSION["Travel"] = (isset($_POST["Travel"])? $_POST["Travel"] : "");
    $_SESSION["MetroAreas"] = (isset($_POST["MetroAreas"])? $_POST["MetroAreas"] : "");
    $_SESSION["BarStanding"] = (isset($_POST["BarStanding"])? $_POST["BarStanding"] : "");
    $_SESSION["ForeignLanguages"] = (isset($_POST["ForeignLanguages"])? $_POST["ForeignLanguages"] : "");
    $_SESSION["BarDiscipline"] = (isset($_POST["BarDiscipline"])? $_POST["BarDiscipline"] : "");
    $_SESSION["BarDisciplineNote"] = (isset($_POST["BarDisciplineNote"])? $_POST["BarDisciplineNote"] : "");
    $_SESSION["SoftwareExperience"] = (isset($_POST["SoftwareExperience"])? $_POST["SoftwareExperience"] : "");
    
    $SignaturePath = "signatures/signature." . $_SESSION["ApplicantID"] . ".png";
    $_SESSION["SignDate"] = $_POST["SignDate"];

    $_SESSION["SkillSets"] = (isset($_POST["SkillSets"])? serialize($_POST["SkillSets"]) : '');        // Set to NULL if no SkillSets

    

// Insert main record, only if ApplicantID is not yet set
    if(isset($_SESSION["ApplicantID"])) {           // First time at this page, only time use INSERT; Else I guess the page is accidentally refreshed, ignore any DB insert
        include 'includes/dbconnect.php';       // initiate database connection
        $sql = "UPDATE applicant_profile_table SET Department=:department, DeptFullTempType=:deptfulltemptype, ApplyDate=:applydate, FirstName=:firstname, LastName=:lastname, Address=:address, Email=:email, City=:city, HomePhone=:homephone, CellPhone=:cellphone, WorkPhone=:workphone, State=:state, ZIP=:zip, DOB=:dob, SSN=:ssn, ReferenceName1=:referencename1, ReferenceTitle1=:referencetitle1, ReferenceCompany1=:referencecompany1, ReferenceContact1=:referencecontact1, ReferenceAcquaintedYears1=:referenceacquaintedyears1, ReferenceRelationship1=:referencerelationship1, ReferenceName2=:referencename2, ReferenceTitle2=:referencetitle2, ReferenceCompany2=:referencecompany2, ReferenceContact2=:referencecontact2, ReferenceAcquaintedYears2=:referenceacquaintedyears2, ReferenceRelationship2=:referencerelationship2, ReferenceName3=:referencename3, ReferenceTitle3=:referencetitle3, ReferenceCompany3=:referencecompany3, ReferenceContact3=:referencecontact3, ReferenceAcquaintedYears3=:referenceacquaintedyears3, ReferenceRelationship3=:referencerelationship3, EmergencyName=:emergencyname, EmergencyRelationship=:emergencyrelationship, EmergencyPhone=:emergencyphone, MinSalary=:minsalary, MinHourlyRate=:minhourlyrate, RecentBaseSalary=:recentbasesalary, RecentHourlyRate=:recenthourlyrate, PermittedToWork=:permittedtowork, Employed=:employed, Car=:car, W2or1099=:w2or1099, ComputerSkills=:computerskills, IdealCompany1=:idealcompany1, IdealCompanyNote1=:idealcompanynote1, IdealCompany2=:idealcompany2, IdealCompanyNote2=:idealcompanynote2, IdealCompany3=:idealcompany3, IdealCompanyNote3=:idealcompanynote3, IdealCompany4=:idealcompany4, IdealCompanyNote4=:idealcompanynote4, Travel=:travel, MetroAreas=:metroareas, BarStanding=:barstanding, ForeignLanguages=:foreignlanguages, BarDiscipline=:bardiscipline, BarDisciplineNote=:bardisciplinenote, SoftwareExperience=:softwareexperience, SkillSets=:skillsets, SignaturePath=:signaturepath, SignDate=:signdate WHERE ApplicantID=:applicantid";
        $statement = $db->prepare($sql);
        // print_r($statement->errorInfo());                             // used only for debugging
        $statement->bindValue(":applicantid", $_SESSION["ApplicantID"]);
        $statement->bindValue(":department", $_SESSION["Department"]);
        $statement->bindValue(":deptfulltemptype", $_SESSION["DeptFullTempType"]);
        $statement->bindValue(":applydate", $_SESSION["ApplyDate"]);
        $statement->bindValue(":firstname", $_SESSION["FirstName"]);
        $statement->bindValue(":lastname", $_SESSION["LastName"]);
        $statement->bindValue(":address", $_SESSION["Address"]);
        $statement->bindValue(":email", $_SESSION["Email"]);
        $statement->bindValue(":city", $_SESSION["City"]);
        $statement->bindValue(":homephone", $_SESSION["HomePhone"]);
        $statement->bindValue(":cellphone", $_SESSION["CellPhone"]);
        $statement->bindValue(":workphone", $_SESSION["WorkPhone"]);
        $statement->bindValue(":state", $_SESSION["State"]);
        $statement->bindValue(":zip", $_SESSION["ZIP"]);
        $statement->bindValue(":dob", $_SESSION["DOB"]);
        $statement->bindValue(":ssn", $_SESSION["SSN"]);
        $statement->bindValue(":referencename1", $_SESSION["ReferenceName1"]);
        $statement->bindValue(":referencetitle1", $_SESSION["ReferenceTitle1"]);
        $statement->bindValue(":referencecompany1", $_SESSION["ReferenceCompany1"]);
        $statement->bindValue(":referencecontact1", $_SESSION["ReferenceContact1"]);
        $statement->bindValue(":referenceacquaintedyears1", $_SESSION["ReferenceAcquaintedYears1"]);
        $statement->bindValue(":referencerelationship1", $_SESSION["ReferenceRelationship1"]);
        $statement->bindValue(":referencename2", $_SESSION["ReferenceName2"]);
        $statement->bindValue(":referencetitle2", $_SESSION["ReferenceTitle2"]);
        $statement->bindValue(":referencecompany2", $_SESSION["ReferenceCompany2"]);
        $statement->bindValue(":referencecontact2", $_SESSION["ReferenceContact2"]);
        $statement->bindValue(":referenceacquaintedyears2", $_SESSION["ReferenceAcquaintedYears2"]);
        $statement->bindValue(":referencerelationship2", $_SESSION["ReferenceRelationship2"]);
        $statement->bindValue(":referencename3", $_SESSION["ReferenceName3"]);
        $statement->bindValue(":referencetitle3", $_SESSION["ReferenceTitle3"]);
        $statement->bindValue(":referencecompany3", $_SESSION["ReferenceCompany3"]);
        $statement->bindValue(":referencecontact3", $_SESSION["ReferenceContact3"]);
        $statement->bindValue(":referenceacquaintedyears3", $_SESSION["ReferenceAcquaintedYears3"]);
        $statement->bindValue(":referencerelationship3", $_SESSION["ReferenceRelationship3"]);
        $statement->bindValue(":emergencyname", $_SESSION["EmergencyName"]);
        $statement->bindValue(":emergencyrelationship", $_SESSION["EmergencyRelationship"]);
        $statement->bindValue(":emergencyphone", $_SESSION["EmergencyPhone"]);
        $statement->bindValue(":minsalary", $_SESSION["MinSalary"]);
        $statement->bindValue(":minhourlyrate", $_SESSION["MinHourlyRate"]);
        $statement->bindValue(":recentbasesalary", $_SESSION["RecentBaseSalary"]);
        $statement->bindValue(":recenthourlyrate", $_SESSION["RecentHourlyRate"]);
        $statement->bindValue(":permittedtowork", $_SESSION["PermittedToWork"]);
        $statement->bindValue(":employed", $_SESSION["Employed"]);
        $statement->bindValue(":car", $_SESSION["Car"]);
        $statement->bindValue(":w2or1099", $_SESSION["W2or1099"]);
        $statement->bindValue(":computerskills", $_SESSION["ComputerSkills"]);
        $statement->bindValue(":idealcompany1", $_SESSION["IdealCompany1"]);
        $statement->bindValue(":idealcompanynote1", $_SESSION["IdealCompanyNote1"]);
        $statement->bindValue(":idealcompany2", $_SESSION["IdealCompany2"]);
        $statement->bindValue(":idealcompanynote2", $_SESSION["IdealCompanyNote2"]);
        $statement->bindValue(":idealcompany3", $_SESSION["IdealCompany3"]);
        $statement->bindValue(":idealcompanynote3", $_SESSION["IdealCompanyNote3"]);
        $statement->bindValue(":idealcompany4", $_SESSION["IdealCompany4"]);
        $statement->bindValue(":idealcompanynote4", $_SESSION["IdealCompanyNote4"]);
        $statement->bindValue(":travel", $_SESSION["Travel"]);
        $statement->bindValue(":metroareas", $_SESSION["MetroAreas"]);
        $statement->bindValue(":barstanding", $_SESSION["BarStanding"]);
        $statement->bindValue(":foreignlanguages", $_SESSION["ForeignLanguages"]);
        $statement->bindValue(":bardiscipline", $_SESSION["BarDiscipline"]);
        $statement->bindValue(":bardisciplinenote", $_SESSION["BarDisciplineNote"]);
        $statement->bindValue(":softwareexperience", $_SESSION["SoftwareExperience"]);
        $statement->bindValue(":skillsets", $_SESSION["SkillSets"]);
        $statement->bindValue(":signaturepath", $SignaturePath);
        $statement->bindValue(":signdate", $_SESSION["SignDate"]);
        $statement->execute();
        //print_r($statement->errorInfo());                 // used only for debugging
        

        
        // EDUCATION SECTION
        // UPDATE Education of ApplicantID into applicant_education_table        
        // these are arrays, from Education Table
        $EduIDs = (isset($_POST["EduID"])? $_POST["EduID"] : array());           // if Education is emptied/empty, set to empty array to deal with possible deletion of previous records
        $Schools = (isset($_POST["School"])? $_POST["School"] : array());            // if $Schools is not set, then foreach has problem later, so set it to empty array.
        $Degrees = (isset($_POST["Degree"])? $_POST["Degree"] : array());
        $SchoolTypes = (isset($_POST["SchoolType"])? $_POST["SchoolType"] : array());
        $GraduateYears = (isset($_POST["GraduateYear"])? $_POST["GraduateYear"] : array() );
        $GPA = (isset($_POST["GPA"])? $_POST["GPA"] : array() );
        
        
        // Get original list of Record IDs, for comparison => record deletion.
        $sql = "SELECT ID FROM applicant_education_table WHERE ApplicantID=:applicantid";
        $statement = $db->prepare($sql);
        $statement->bindValue(":applicantid", $_SESSION["ApplicantID"]);
        $statement->execute();
        $OriginalEduIDs = array();
        while ($SQL_OriginalEduIDs = $statement->fetch(PDO::FETCH_ASSOC)) {
            array_push($OriginalEduIDs, $SQL_OriginalEduIDs['ID']);
        }
        $OriginalEduIDs = array_diff($OriginalEduIDs, $EduIDs);         // filter out current records, leaving record IDs to be deleted in $OriginalEduIDs
        
        // Delete records from education table
        $sql = "DELETE FROM applicant_education_table WHERE ID=:eduid AND ApplicantID=:applicantid";
        $statement = $db->prepare($sql);
        $statement->bindValue(":applicantid", $_SESSION["ApplicantID"]);
        foreach ($OriginalEduIDs as $OriginalEduID) {
            $statement->bindValue(":eduid", $OriginalEduID);
            $statement->execute();
            //print_r($statement->errorInfo());                 // used only for debugging
        }
        
        // Update or Add new records
        foreach ($Schools as $key => $school) {
            // Don't insert if School/Degree is empty
            if ($school) {
                // Updating existing records
                if ($EduIDs[$key] != "N") {
                    $sql = "UPDATE applicant_education_table SET SchoolName=:schoolname, SchoolType=:schooltype, Degree=:degree, GraduateYear=:graduateyear, GPA=:gpa WHERE ApplicantID=:applicantid AND ID=:eduid";          // Not necessary for both WHERE ApplicantID & ID matches, but just for precaution.
                    $statement = $db->prepare($sql);
                    $statement->bindValue(":eduid", $EduIDs[$key]);
                }
                // adding new records
                else {
                    $sql = "INSERT INTO applicant_education_table (
                                ApplicantID, SchoolName, SchoolType, Degree, GraduateYear, GPA
                            ) VALUES (
                                :applicantid, :schoolname, :schooltype, :degree, :graduateyear, :gpa
                            )";
                    $statement = $db->prepare($sql);
                }
                
                $statement->bindValue(":applicantid", $_SESSION["ApplicantID"]);
                $statement->bindValue(":schoolname", $school);
                $statement->bindValue(":schooltype", isset($SchoolTypes[$key])? $SchoolTypes[$key] : "");
                $statement->bindValue(":degree", isset($Degrees[$key])? $Degrees[$key] : "");
                $statement->bindValue(":graduateyear", isset($GraduateYears[$key])? $GraduateYears[$key] : "");
                $statement->bindValue(":gpa", isset($GPA[$key])? $GPA[$key] : "");
                $statement->execute();
                //print_r($statement->errorInfo());                 // used only for debugging
            }
        }
        
        
        
        
        // RECENT INTERVIEW SECTION
        // UPDATE (for some forms) Recent Interviews of ApplicantID into applicant_recentinterviews_table
        $InterviewIDs = (isset($_POST["InterviewID"])? $_POST["InterviewID"] : array());           // if Interviews is emptied/empty, set to empty array to deal with possible deletion of previous records
        $InterviewDates = (isset($_POST["InterviewDate"])? $_POST["InterviewDate"] : array());
        $InterviewCompanies = (isset($_POST["InterviewCompany"])? $_POST["InterviewCompany"] : array()); // if $InterviewCompanies is not set, then foreach has problem later, so set it to empty array.
        $InterviewPositions = (isset($_POST["InterviewPosition"])? $_POST["InterviewPosition"] : array());

        // Get original list of Record IDs, for comparison => record deletion.
        $sql = "SELECT ID FROM applicant_recentinterviews_table WHERE ApplicantID=:applicantid";
        $statement = $db->prepare($sql);
        $statement->bindValue(":applicantid", $_SESSION["ApplicantID"]);
        $statement->execute();
        $OriginalInterviewIDs = array();
        while ($SQL_OriginalInterviewIDs = $statement->fetch(PDO::FETCH_ASSOC)) {
            array_push($OriginalInterviewIDs, $SQL_OriginalInterviewIDs['ID']);
        }
        $OriginalInterviewIDs = array_diff($OriginalInterviewIDs, $InterviewIDs);         // filter out current records, leaving record IDs to be deleted in $OriginalInterviewIDs
        
        // Delete records from recent interviews table
        $sql = "DELETE FROM applicant_recentinterviews_table WHERE ID=:interviewid AND ApplicantID=:applicantid";
        $statement = $db->prepare($sql);
        $statement->bindValue(":applicantid", $_SESSION["ApplicantID"]);
        foreach ($OriginalInterviewIDs as $OriginalInterviewID) {
            $statement->bindValue(":interviewid", $OriginalInterviewID);
            $statement->execute();
            //print_r($statement->errorInfo());                 // used only for debugging
        }
        
        // Update or add a new records
        foreach ($InterviewCompanies as $key => $interviewcompany) {
            // Don't insert if School/Degree is empty
            if ($interviewcompany) {                                                    // It is assumed that at least interviewcompany must be a required field
                // Updating existing records
                if ($InterviewIDs[$key] != "N") {
                    $sql = "UPDATE applicant_recentinterviews_table SET Date=:interviewdate, Company=:interviewcompany, Position=:interviewposition WHERE ApplicantID=:applicantid AND ID=:interviewid";          // Not necessary for both WHERE ApplicantID & ID matches, but just for precaution.
                    $statement = $db->prepare($sql);
                    $statement->bindValue(":interviewid", $InterviewIDs[$key]);
                }
                // adding new records
                else {
                    $sql = "INSERT INTO applicant_recentinterviews_table (
                                ApplicantID, Date, Company, Position
                            ) VALUES (
                                :applicantid, :interviewdate, :interviewcompany, :interviewposition
                            )";
                    $statement = $db->prepare($sql);
                }
                $statement->bindValue(":applicantid", $_SESSION["ApplicantID"]);
                $statement->bindValue(":interviewcompany", $interviewcompany);
                $statement->bindValue(":interviewdate", $InterviewDates[$key]);
                $statement->bindValue(":interviewposition", $InterviewPositions[$key]);
                $statement->execute();
            }
        }
        
        

        
        // WORK HISTORY Section        
        // Update Work History records
        $WorkIDs = (isset($_POST["WorkID"])? $_POST["WorkID"] : array());           // if Work History is emptied/empty, set to empty array to deal with possible deletion of previous records
        $Companies = (isset($_POST["Company"])? $_POST["Company"] : array());       // if $Companies is not set, then foreach has problem later, so set it to empty array.
        $Location = (isset($_POST["Location"])? $_POST["Location"] : array());           // not necessary but just in case for future handling
        $WorkDates = (isset($_POST["WorkDates"])? $_POST["WorkDates"] : array());
        $Title = (isset($_POST["Title"])? $_POST["Title"] : array());
        $Supervisor = (isset($_POST["Supervisor"])? $_POST["Supervisor"] : array());
        $ReasonLeft = (isset($_POST["ReasonLeft"])? $_POST["ReasonLeft"] : array());
        $BasePay = (isset($_POST["BasePay"])? $_POST["BasePay"] : array());
        $HourlyPay = (isset($_POST["HourlyPay"])? $_POST["HourlyPay"] : array());
        $BonusPay = (isset($_POST["BonusPay"])? $_POST["BonusPay"] : array());
        $OTPay = (isset($_POST["OTPay"])? $_POST["OTPay"] : array());
        $OfficeUse = (isset($_POST["OfficeUse"])? $_POST["OfficeUse"] : array());

        // Get original list of Record IDs, for comparison => record deletion.
        $sql = "SELECT ID FROM applicant_workhistory_table WHERE ApplicantID=:applicantid";
        $statement = $db->prepare($sql);
        $statement->bindValue(":applicantid", $_SESSION["ApplicantID"]);
        $statement->execute();
        $OriginalWorkIDs = array();
        while ($SQL_OriginalWorkIDs = $statement->fetch(PDO::FETCH_ASSOC)) {
            array_push($OriginalWorkIDs, $SQL_OriginalWorkIDs['ID']);
        }
        $OriginalWorkIDs = array_diff($OriginalWorkIDs, $WorkIDs);         // filter out current records, leaving record IDs to be deleted in $OriginalWorkIDs
        
        // Delete records from Work History table
        $sql = "DELETE FROM applicant_workhistory_table WHERE ID=:workid AND ApplicantID=:applicantid";
        $statement = $db->prepare($sql);
        $statement->bindValue(":applicantid", $_SESSION["ApplicantID"]);
        foreach ($OriginalWorkIDs as $OriginalWorkID) {
            $statement->bindValue(":workid", $OriginalWorkID);
            $statement->execute();
            //print_r($statement->errorInfo());                 // used only for debugging
        }

        // Update or Add new records        
        foreach ($Companies as $key => $Company) {
            // Don't insert if Company is empty
            if ($Company) {
                // Updating existing records
                if ($WorkIDs[$key] != "N") {
                    $sql = "UPDATE applicant_workhistory_table SET Company=:company, Location=:location, WorkDates=:workdates, Title=:title, Supervisor=:supervisor, ReasonLeft=:reasonleft, BasePay=:basepay, HourlyPay=:hourlypay, BonusPay=:bonuspay, OTPay=:otpay, OfficeUse=:officeuse WHERE ApplicantID=:applicantid AND ID=:workid";          // Not necessary for both WHERE ApplicantID & ID matches, but just for precaution.
                    $statement = $db->prepare($sql);
                    $statement->bindValue(":workid", $WorkIDs[$key]);
                }
                // adding new records
                else {
                    $sql = "INSERT INTO applicant_workhistory_table (
                                ApplicantID, Company, Location, WorkDates, Title, Supervisor, ReasonLeft, BasePay, HourlyPay, BonusPay, OTPay, OfficeUse
                            ) VALUES (
                                :applicantid, :company, :location, :workdates, :title, :supervisor, :reasonleft, :basepay, :hourlypay, :bonuspay, :otpay, :officeuse
                            )";
                    $statement = $db->prepare($sql);
                }
                $statement->bindValue(":applicantid", $_SESSION["ApplicantID"]);
                $statement->bindValue(":company", $Company);
                $statement->bindValue(":location", $Location[$key]);
                $statement->bindValue(":workdates", $WorkDates[$key]);
                $statement->bindValue(":title", $Title[$key]);
                $statement->bindValue(":supervisor", $Supervisor[$key]);
                $statement->bindValue(":reasonleft", $ReasonLeft[$key]);
                $statement->bindValue(":basepay", str_replace(",", "", $BasePay[$key]));
                $statement->bindValue(":hourlypay", str_replace(",", "", $HourlyPay[$key]));
                $statement->bindValue(":bonuspay", str_replace(",", "", $BonusPay[$key]));
                $statement->bindValue(":otpay", str_replace(",", "", $OTPay[$key]));
                $statement->bindValue(":officeuse", str_replace(",", "", $OfficeUse[$key]));
                $statement->execute();
                //print_r($statement->errorInfo());                 // used only for debugging
            }
        }
        
        
        
        
        $db = null;        // Disconnect
    }

?>