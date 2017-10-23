<!--
This is for the management system all fields are listed.
-->

<?php
    // Get all records pertain to specific applicant (in Recent Interviews)
    $sql = "SELECT * FROM applicant_recentinterviews_table WHERE ApplicantID=:applicantid";
    $stmt = $db->prepare($sql);
    $stmt->bindValue(':applicantid', $_SESSION["ApplicantID"]);

    $stmt->execute();
    //print_r($statement->errorInfo());                                // used only for debugging
    $interviewrows = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>


<h3>RECENT INTERVIEWS:</h3>
<script>
    // This adds more Education input
    $(document).ready(function(){
        $("#addInterview").click(function(){
            $("#InterviewTable").append("<tr><td><input type=\"hidden\" name=\"InterviewID[]\" value=\"N\">Date: <input type=\"date\" name=\"InterviewDate[]\"></td><td>Company: <input name=\"InterviewCompany[]\"></td><td>Position: <input name=\"InterviewPosition[]\"><a href=\"#\" class=\"removeInterview\">Remove</a></td></tr>");
        });
        $("#InterviewTable").on("click", ".removeInterview", function(e){
            e.preventDefault();
            $(this).parent().parent().remove();
        });
    });
</script>
<table id="InterviewTable">
    <?php
        foreach ($interviewrows as $interviewrow) {
    ?>
        <tr><td><input type="hidden" name="InterviewID[]" value="<?php echo htmlspecialchars($interviewrow['ID']); ?>">Date: <input type="date" name="InterviewDate[]" value="<?php echo htmlspecialchars($interviewrow['Date']); ?>"></td><td>Company: <input name="InterviewCompany[]" value="<?php echo htmlspecialchars($interviewrow['Company']); ?>"></td><td>Position: <input name="InterviewPosition[]" value="<?php echo htmlspecialchars($interviewrow['Position']); ?>"><a href="#" class="removeInterview">Remove</a></td></tr>
    <?php        
        }
    ?>
</table>
<input type="button" id="addInterview" value="Add More Recent Interviews">