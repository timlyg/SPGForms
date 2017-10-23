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

    

// Insert main record, only if ApplicantID is not yet set
    if(!isset($_SESSION["ApplicantID"])) {           // First time at this page, only time use INSERT; Else I guess the page is accidentally refreshed, ignore any DB insert
        include 'includes/dbconnect.php';       // initiate database connection
        $sql = "INSERT INTO applicant_profile_table (
                    Department, DeptFullTempType, ApplyDate, FirstName, LastName, Address, Email, City, HomePhone, CellPhone, WorkPhone, State, ZIP, DOB, SSN, ReferenceName1, ReferenceTitle1, ReferenceCompany1, ReferenceContact1, ReferenceAcquaintedYears1, ReferenceRelationship1, ReferenceName2, ReferenceTitle2, ReferenceCompany2, ReferenceContact2, ReferenceAcquaintedYears2, ReferenceRelationship2, ReferenceName3, ReferenceTitle3, ReferenceCompany3, ReferenceContact3, ReferenceAcquaintedYears3, ReferenceRelationship3, EmergencyName, EmergencyRelationship, EmergencyPhone, MinSalary, MinHourlyRate, RecentBaseSalary, RecentHourlyRate, PermittedToWork, Employed, Car, W2or1099, ComputerSkills, IdealCompany1, IdealCompanyNote1, IdealCompany2, IdealCompanyNote2, IdealCompany3, IdealCompanyNote3, IdealCompany4, IdealCompanyNote4, Travel, MetroAreas, BarStanding, ForeignLanguages, BarDiscipline, BarDisciplineNote, SoftwareExperience
                ) VALUES (
                    :department, :deptfulltemptype, :applydate, :firstname, :lastname, :address, :email, :city, :homephone, :cellphone, :workphone, :state, :zip, :dob, :ssn, :referencename1, :referencetitle1, :referencecompany1, :referencecontact1, :referenceacquaintedyears1, :referencerelationship1, :referencename2, :referencetitle2, :referencecompany2, :referencecontact2, :referenceacquaintedyears2, :referencerelationship2, :referencename3, :referencetitle3, :referencecompany3, :referencecontact3, :referenceacquaintedyears3, :referencerelationship3, :emergencyname, :emergencyrelationship, :emergencyphone, :minsalary, :minhourlyrate, :recentbasesalary, :recenthourlyrate, :permittedtowork, :employed, :car, :w2or1099, :computerskills, :idealcompany1, :idealcompanynote1, :idealcompany2, :idealcompanynote2, :idealcompany3, :idealcompanynote3, :idealcompany4, :idealcompanynote4, :travel, :metroareas, :barstanding, :foreignlanguages, :bardiscipline, :bardisciplinenote, :softwareexperience
                )";
        $statement = $db->prepare($sql);
        //print_r($statement->errorInfo());                             // used only for debugging
        echo "Department: " . $_SESSION["Department"];
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
        $statement->execute();
        //print_r($statement->errorInfo());                 // used only for debugging
        $_SESSION["ApplicantID"] = $db->lastInsertId();     // get ProfileID of newly inserted record, $_SESSION["ApplicantID"] is set here.
        

        
        
        // Insert Education of ApplicantID into applicant_education_table        
        $Schools = $_POST["School"];                            // these two are arrays, from Education Table
        $Degrees = $_POST["Degree"];
        $SchoolTypes = (isset($_POST["SchoolType"])? $_POST["SchoolType"] : array() );
        $GraduateYears = (isset($_POST["GraduateYear"])? $_POST["GraduateYear"] : array() );
        $GPA = (isset($_POST["GPA"])? $_POST["GPA"] : array() );
        
        $sql = "INSERT INTO applicant_education_table (
                    ApplicantID, SchoolName, SchoolType, Degree, GraduateYear, GPA
                ) VALUES (
                    :applicantid, :schoolname, :schooltype, :degree, :graduateyear, :gpa
                )";
        $statement = $db->prepare($sql);
        $statement->bindValue(":applicantid", $_SESSION["ApplicantID"]);
        foreach ($Schools as $key => $school) {                                             // it is assumed that at least School name must be a required field
            // Don't insert if School/Degree is empty
            if ($school) {
                $statement->bindValue(":schoolname", $school);
                $statement->bindValue(":schooltype", isset($SchoolTypes[$key])? $SchoolTypes[$key] : "");
                $statement->bindValue(":degree", isset($Degrees[$key])? $Degrees[$key] : "");
                $statement->bindValue(":graduateyear", isset($GraduateYears[$key])? $GraduateYears[$key] : "");
                $statement->bindValue(":gpa", isset($GPA[$key])? $GPA[$key] : "");
                $statement->execute();
                //print_r($statement->errorInfo());                 // used only for debugging
            }
        }
        
        
        // For some forms viz. UX, insert Recent Interviews of ApplicantID into applicant_recentinterviews_table
        if (isset($_POST["InterviewCompany"])) {                               // using $_POST["InterviewCompany"] (could also be any of the other two interview fields) to validate this part.
                                                                            // It doesn't matter since these 3 fields always exist as a group.
            $InterviewDates = (isset($_POST["InterviewDate"])? $_POST["InterviewDate"] : "");
            $InterviewCompanies = (isset($_POST["InterviewCompany"])? $_POST["InterviewCompany"] : "");
            $InterviewPositions = (isset($_POST["InterviewPosition"])? $_POST["InterviewPosition"] : "");
            
            $sql = "INSERT INTO applicant_recentinterviews_table (
                        ApplicantID, Date, Company, Position
                    ) VALUES (
                        :applicantid, :interviewdate, :interviewcompany, :interviewposition
                    )";
            $statement = $db->prepare($sql);
            $statement->bindValue(":applicantid", $_SESSION["ApplicantID"]);
            foreach ($InterviewCompanies as $key => $interviewcompany) {
                // Don't insert if School/Degree is empty
                if ($interviewcompany) {                                                    // It is assumed that at least interviewcompany must be a required field
                    $statement->bindValue(":interviewcompany", $interviewcompany);
                    $statement->bindValue(":interviewdate", $InterviewDates[$key]);
                    $statement->bindValue(":interviewposition", $InterviewPositions[$key]);
                    $statement->execute();
                }
            }
        }
        
        
        // Serialize array of SkillSets and insert into SkillSets Field
        if (isset($_POST["SkillSets"])) {
            $SkillSets = serialize($_POST["SkillSets"]);
            
            // Insert main record
            $sql = "UPDATE applicant_profile_table SET SkillSets=:skillsets WHERE ApplicantID=:applicantid";

            $statement = $db->prepare($sql);
            $statement->bindValue(":skillsets", $SkillSets);
            $statement->bindValue(":applicantid", $_SESSION["ApplicantID"]);
            $statement->execute();
        }
        
        
        $db = null;        // Disconnect
    }

?>