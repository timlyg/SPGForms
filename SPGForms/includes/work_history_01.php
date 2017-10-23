<!--This is universal for all forms-->


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
            $("#WorkHistoryTable").append("<table frame=\"box\"><tr><td>COMPANY: <input name=\"Company[]\"></td><td>LOCATION: <input name=\"Location[]\"></td></tr><tr><td>DATES WORKED: <input name=\"WorkDates[]\"></td><td>TITLE: <input name=\"Title[]\"></td></tr><tr><td>SUPERVISOR: <input name=\"Supervisor[]\"></td><td>REASON LEFT: <input name=\"ReasonLeft[]\"></td></tr><tr><td>COMPENSATION: BASE: <input class=\"money\" name=\"BasePay[]\"></td><td>Hourly: <input class=\"money\" name=\"HourlyPay[]\"></td></tr><tr><td>Bonus: <input class=\"money\" name=\"BonusPay[]\"></td><td>OT PAY: <input class=\"money\" name=\"OTPay[]\"></td></tr><tr><td colspan=\"2\"><a href=\"#\" class=\"removeWorkHistory\">Remove</a></td></tr></table>");
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
    <table frame="box">
        <tr><td>COMPANY: <input name="Company[]"></td><td>LOCATION: <input name="Location[]"></td></tr>
        <tr><td>DATES WORKED: <input name="WorkDates[]"></td><td>TITLE: <input name="Title[]"></td></tr>
        <tr><td>SUPERVISOR: <input name="Supervisor[]"></td><td>REASON LEFT: <input name="ReasonLeft[]"></td></tr>
        <tr><td>COMPENSATION: BASE: $<input class="money" name="BasePay[]"></td><td>Hourly: $<input class="money" name="HourlyPay[]"></td></tr>
        <tr><td>Bonus: $<input class="money" name="BonusPay[]"></td><td>OT PAY: $<input class="money" name="OTPay[]"></td></tr>
    </table>
</div>

<input type="button" id="addWorkHistory" value="Add Another">
<input type="hidden" name="WorkHistory">
<input type="submit" name="WorkHistorySubmit" value="Next 3/3">
