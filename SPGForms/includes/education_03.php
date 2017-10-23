<!--
This is used by:
- Legal Services

Added schooltype, GraduateYear & GPA
-->


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
        $("#addSchool").click(function(){
            $("#EducationTable").append("<tr><td><input name=\"School[]\" placeholder=\"SCHOOL\"></td><td><input name=\"Degree[]\" placeholder=\"DEGREE\"></td><td><input class=\"GraduateYear\" name=\"GraduateYear[]\" placeholder=\"YEAR\" maxlength=\"4\"></td><td><input class=\"GPA\" name=\"GPA[]\" placeholder=\"GPA\"><a href=\"#\" class=\"removeSchool\">Remove</a></td></tr>");
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
    <tr><td><input name="School[]" placeholder="HIGH SCHOOL"><input type="hidden" name="SchoolType[]" value="HIGH SCHOOL"></td><td><input name="Degree[]" placeholder="DEGREE"></td><td><input class="GraduateYear" name="GraduateYear[]" placeholder="YEAR (ie. 1997)" maxlength="4"></td><td><input class="GPA" name="GPA[]" placeholder="GPA (ie. 3.82)"></td></tr>
    <tr><td><input name="School[]" placeholder="COLLEGE"><input type="hidden" name="SchoolType[]" value="COLLEGE"></td><td><input name="Degree[]" placeholder="DEGREE"></td><td><input class="GraduateYear" name="GraduateYear[]" placeholder="YEAR" maxlength="4"></td><td><input class="GPA" name="GPA[]" placeholder="GPA"></td></tr>
    <tr><td><input name="School[]" placeholder="LAW SCHOOL"><input type="hidden" name="SchoolType[]" value="LAW SCHOOL"></td><td><input name="Degree[]" placeholder="DEGREE"></td><td><input class="GraduateYear" name="GraduateYear[]" placeholder="YEAR" maxlength="4"></td><td><input class="GPA" name="GPA[]" placeholder="GPA"></td></tr>
</table>
<input type="button" id="addSchool" value="Add School">