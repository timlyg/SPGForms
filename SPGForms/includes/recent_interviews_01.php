<!--
This is used by:
- UX
-->


<h3>RECENT INTERVIEWS:</h3>
<script>
    // This adds more Education input
    $(document).ready(function(){
        $("#addInterview").click(function(){
            $("#InterviewTable").append("<tr><td>Date: <input type=\"date\" name=\"InterviewDate[]\"></td><td>Company: <input name=\"InterviewCompany[]\"></td><td>Position: <input name=\"InterviewPosition[]\"><a href=\"#\" class=\"removeInterview\">Remove</a></td></tr>");
        });
        $("#InterviewTable").on("click", ".removeInterview", function(e){
            e.preventDefault();
            $(this).parent().parent().remove();
        });
    });
</script>
<table id="InterviewTable">
    <tr><td>Date: <input type="date" name="InterviewDate[]"></td><td>Company: <input name="InterviewCompany[]"></td><td>Position: <input name="InterviewPosition[]"></td></tr>
</table>
<input type="button" id="addInterview" value="Add More Recent Interviews">