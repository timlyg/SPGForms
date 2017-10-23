<!--This is universal for all forms-->


<?php
    // Get all records pertain to specific applicant (in Work History)
    $sql = "SELECT * FROM applicant_workhistory_table WHERE ApplicantID=:applicantid";
    $stmt = $db->prepare($sql);
    $stmt->bindValue(':applicantid', $_SESSION["ApplicantID"]);

    $stmt->execute();
    //print_r($statement->errorInfo());                                // used only for debugging
    $workrows = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>


<h3>Work History</h3>
<script>
    function numberWithCommas(x) {
        x = x.replace(/[^\d\.]/g, "");          // only digits and "." allowed
        x = x.replace(/^\./, "0.");             // do not allow "." in front
        x = x.replace(/(\.\d*)\./, '$1');             // do not allow more than one "."
        x = x.replace(/(\.\d{2})\d+/, '$1');       // do not allow more than 2 decimals after "."
        return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    }
    
    
    // This adds more work history input
    $(document).ready(function(){
        $("#addWorkHistory").click(function(){
            $("#WorkHistoryTable").append("<table frame=\"box\"><tr><td><input type=\"hidden\" name=\"WorkID[]\" value=\"N\">COMPANY: <input name=\"Company[]\"></td><td>LOCATION: <input name=\"Location[]\"></td></tr><tr><td>DATES WORKED: <input name=\"WorkDates[]\"></td><td>TITLE: <input name=\"Title[]\"></td></tr><tr><td>SUPERVISOR: <input name=\"Supervisor[]\"></td><td>REASON LEFT: <input name=\"ReasonLeft[]\"></td></tr><tr><td>COMPENSATION: BASE: <input class=\"money\" name=\"BasePay[]\"></td><td>Hourly: <input class=\"money\" name=\"HourlyPay[]\"></td></tr><tr><td>Bonus: <input class=\"money\" name=\"BonusPay[]\"></td><td>OT PAY: <input class=\"money\" name=\"OTPay[]\"></td></tr><tr><td colspan=\"2\">Office Use: <input name=\"OfficeUse[]\"></td></tr><tr><td colspan=\"2\" align=\"center\"><a href=\"#\" class=\"removeWorkHistory\">Remove</a></td></tr></table><br>");
        });
        $("#WorkHistoryTable").on("click", ".removeWorkHistory", function(e){
            e.preventDefault();
            $(this).parent().parent().parent().remove();
        });

        $("input.money").keyup(function (e) {
           this.value = numberWithCommas(this.value); 
        });
        // in case input is changed by pasting
        $("input.money").on('paste', function (e) {
           this.value = numberWithCommas(this.value); 
        });
    });
</script>
<div id="WorkHistoryTable">
    <?php
        foreach ($workrows as $workrow) {
    ?>
        <table frame="box" border="1">
            <tr><td><input type="hidden" name="WorkID[]" value="<?php echo htmlspecialchars($workrow['ID']); ?>">
                COMPANY: <input name="Company[]" value="<?php echo htmlspecialchars($workrow['Company']); ?>"></td><td>LOCATION: <input name="Location[]" value="<?php echo htmlspecialchars($workrow['Location']); ?>"></td></tr>
            <tr><td>DATES WORKED: <input name="WorkDates[]" value="<?php echo htmlspecialchars($workrow['WorkDates']); ?>"></td><td>TITLE: <input name="Title[]" value="<?php echo htmlspecialchars($workrow['Title']); ?>"></td></tr>
            <tr><td>SUPERVISOR: <input name="Supervisor[]" value="<?php echo htmlspecialchars($workrow['Supervisor']); ?>"></td><td>REASON LEFT: <input name="ReasonLeft[]" value="<?php echo htmlspecialchars($workrow['ReasonLeft']); ?>"></td></tr>
            <tr><td>COMPENSATION: BASE: $<input class="money" name="BasePay[]" value="<?php echo htmlspecialchars($workrow['BasePay']); ?>"></td><td>Hourly: $<input class="money" name="HourlyPay[]" value="<?php echo htmlspecialchars($workrow['HourlyPay']); ?>"></td></tr>
            <tr><td>Bonus: $<input class="money" name="BonusPay[]" value="<?php echo htmlspecialchars($workrow['BonusPay']); ?>"></td><td>OT PAY: $<input class="money" name="OTPay[]" value="<?php echo htmlspecialchars($workrow['OTPay']); ?>"></td></tr>
            <tr>
                <td colspan="2">Office Use: <input name="OfficeUse[]" value="<?php echo htmlspecialchars($workrow['OfficeUse']); ?>"></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><a href="#" class="removeWorkHistory">Remove</a></td>
            </tr>
        </table>
        <br>
    <?php        
        }
    ?>
</div>

<input type="button" id="addWorkHistory" value="Add Work History">
