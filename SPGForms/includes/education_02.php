<!--
This is used by:
- UX
-->

<h3>EDUCATION:</h3>
<script>
    // This adds more Education input
    $(document).ready(function(){
        $("#addSchool").click(function(){
            $("#EducationTable").append("<tr><td>SCHOOL: <input name=\"School[]\"></td><td>DEGREE: <input name=\"Degree[]\"><a href=\"#\" class=\"removeSchool\">Remove</a></td></tr>");
        });
        $("#EducationTable").on("click", ".removeSchool", function(e){
            e.preventDefault();
            $(this).parent().parent().remove();
        });
    });
</script>
<table id="EducationTable">
    <tr><td>SCHOOL: <input name="School[]"></td><td>DEGREE: <input name="Degree[]"></td></tr>
</table>
<input type="button" id="addSchool" value="Add School">
<br>
Computer Skills: <input type="text" name="ComputerSkills" size="50">