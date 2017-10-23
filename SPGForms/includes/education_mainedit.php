<!--
This is for the management system all fields are listed.
-->

<?php
    // Get all records pertain to specific applicant (in education)
    $sql = "SELECT * FROM applicant_education_table WHERE ApplicantID=:applicantid";
    $stmt = $db->prepare($sql);
    $stmt->bindValue(':applicantid', $_SESSION["ApplicantID"]);

    $stmt->execute();
    //print_r($statement->errorInfo());                                // used only for debugging
    $edurows = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<h3>EDUCATION:</h3>
<script>
    function FormatGPA(x) {
        x = x.replace(/[^\d\.]/g, "");          // only digits and "." allowed
        x = x.replace(/^\./, "0.");             // do not allow "." in front
        x = x.replace(/(\.\d*)\./, '$1');             // do not allow more than one "."
        x = x.replace(/(\.\d{5})\d+/, '$1');       // do not allow more than 5 decimals after "."
        return x
    }
    
    
    // This adds more Education input
    $(document).ready(function(){
        $("#addSchool").click(function(){           // EduID set to 'N' indicating New Record
            $("#EducationTable").append("<tr><td><input type=\"hidden\" name=\"EduID[]\" value=\"N\"><input name=\"School[]\" placeholder=\"SCHOOL\"></td><td><input name=\"SchoolTypel[]\" placeholder=\"SCHOOL TYPE\"></td><td><input name=\"Degree[]\" placeholder=\"DEGREE\"></td><td><input class=\"GraduateYear\" name=\"GraduateYear[]\" placeholder=\"YEAR\" size=\"4\" maxlength=\"4\"></td><td><input class=\"GPA\" name=\"GPA[]\" size=\"5\" placeholder=\"GPA\"><a href=\"#\" class=\"removeSchool\">Remove</a></td></tr>");
        });
        $("#EducationTable").on("click", ".removeSchool", function(e){
            e.preventDefault();
            $(this).parent().parent().remove();
        });
        $("input.GraduateYear").keyup(function (e) {
           this.value = this.value.replace(/\D/g,"");
        });
        // in case input is changed by pasting
        $("input.GraduateYear").on('paste', function (e) {
           this.value = this.value.replace(/\D/g,"");
        });
        
        $("input.GPA").keyup(function (e) {
           this.value = FormatGPA(this.value); 
        });
        // in case input is changed by pasting
        $("input.GPA").on('paste', function (e) {
           this.value = FormatGPA(this.value); 
        });
    });
</script>
<table id="EducationTable">
    <tr>
    <th>School Name</th><th>School Type</th><th>Degree</th><th>Graduation Year</th><th>GPA</th>
    </tr>
    
    <?php
        // List all educations of applicant on record:
        foreach($edurows as $edurow) {
            
    ?>
    <tr><td><input type="hidden" name="EduID[]" value="<?php echo htmlspecialchars($edurow['ID']); ?>"><input name="School[]" value="<?php echo htmlspecialchars($edurow['SchoolName']); ?>" placeholder="SCHOOL NAME"></td><td><input name="SchoolType[]" value="<?php echo htmlspecialchars($edurow['SchoolType']); ?>" placeholder="SCHOOL TYPE"></td><td><input name="Degree[]" value="<?php echo htmlspecialchars($edurow['Degree']); ?>" placeholder="DEGREE"></td><td><input class="GraduateYear" name="GraduateYear[]" value="<?php echo htmlspecialchars($edurow['GraduateYear']); ?>" placeholder="YEAR (ie. 1997)" size="4" maxlength="4"></td><td><input class="GPA" name="GPA[]" value="<?php echo htmlspecialchars($edurow['GPA']); ?>" size="5" placeholder="GPA (ie. 3.82)"><a href="#" class="removeSchool">Remove</a></td></tr>
    
    <?php
        }    
    ?>
    
</table>
<input type="button" id="addSchool" value="Add School">
<br>
Computer Skills: <input type="text" name="ComputerSkills" size="50" value="<?php echo htmlspecialchars($row['ComputerSkills']); ?>">