<!--
This is for the management system all fields are listed.
-->

<h3>REFERENCES:</h3>
PLEASE LIST THE NAMES OF THREE PERSONS NOT RELATED TO YOU WHOM YOU HAVE KNOWN AT LEAST ONE YEAR.
<table>
    <tr>
        <th>NAME</th><th>TITLE</th><th>COMPANY</th><th>TELEPHONE/EMAIL</th><th>RELATIONSHIP</th><th>YEARS ACQUAINTED<br><span id="ReferenceAcquaintedYearsErr"></span></th>
    </tr>
    <tr>
        <td><input name="ReferenceName1" placeholder="1." value="<?php echo htmlspecialchars($row['ReferenceName1']); ?>"></td><td><input name="ReferenceTitle1" value="<?php echo htmlspecialchars($row['ReferenceTitle1']); ?>"></td>
        <td><input name="ReferenceCompany1" value="<?php echo htmlspecialchars($row['ReferenceCompany1']); ?>"></td><td><input name="ReferenceContact1" value="<?php echo htmlspecialchars($row['ReferenceContact1']); ?>"></td><td><input name="ReferenceRelationship1" value="<?php echo htmlspecialchars($row['ReferenceRelationship1']); ?>"></td><td><input class="ReferenceAcquaintedYears" id="ReferenceAcquaintedYears1" name="ReferenceAcquaintedYears1" value="<?php echo htmlspecialchars($row['ReferenceAcquaintedYears1']); ?>"></td>
    </tr>
    <tr>
        <td><input name="ReferenceName2" placeholder="2." value="<?php echo htmlspecialchars($row['ReferenceName2']); ?>"></td><td><input name="ReferenceTitle2" value="<?php echo htmlspecialchars($row['ReferenceTitle2']); ?>"></td>
        <td><input name="ReferenceCompany2" value="<?php echo htmlspecialchars($row['ReferenceCompany2']); ?>"></td><td><input name="ReferenceContact2" value="<?php echo htmlspecialchars($row['ReferenceContact2']); ?>"></td><td><input name="ReferenceRelationship1" value="<?php echo htmlspecialchars($row['ReferenceRelationship1']); ?>"></td><td><input class="ReferenceAcquaintedYears" id="ReferenceAcquaintedYears2" name="ReferenceAcquaintedYears2" value="<?php echo htmlspecialchars($row['ReferenceAcquaintedYears2']); ?>"></td>
    </tr>
    <tr>
        <td><input name="ReferenceName3" placeholder="3." value="<?php echo htmlspecialchars($row['ReferenceName3']); ?>"></td><td><input name="ReferenceTitle3" value="<?php echo htmlspecialchars($row['ReferenceTitle3']); ?>"></td>
        <td><input name="ReferenceCompany3" value="<?php echo htmlspecialchars($row['ReferenceCompany3']); ?>"></td><td><input name="ReferenceContact3" value="<?php echo htmlspecialchars($row['ReferenceContact3']); ?>"></td><td><input name="ReferenceRelationship3" value="<?php echo htmlspecialchars($row['ReferenceRelationship3']); ?>"></td><td><input class="ReferenceAcquaintedYears" id="ReferenceAcquaintedYears3" name="ReferenceAcquaintedYears3" value="<?php echo htmlspecialchars($row['ReferenceAcquaintedYears3']); ?>"></td>
    </tr>
</table>

<script>
    $(function() {
        $("input.ReferenceAcquaintedYears").keypress(function (e) {
            //if the letter is not digit then display error and don't type anything
            if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
            //display error message
            $("#ReferenceAcquaintedYearsErr").html("Numbers Only").show().fadeOut("slow");
            return false;
            }
        });
        
        
        $("input.ReferenceAcquaintedYears").keyup(function (e) {
            this.value = this.value.replace(/\D/g, ""); 
            if (this.value < 0 || this.value > 120) {
                this.value = "";
                $("#ReferenceAcquaintedYearsErr").html("Year Length Not Possible").show().fadeOut("slow");
            }
        });
        // in case input is changed by pasting
        $("input.ReferenceAcquaintedYears").on('paste', function (e) {
            this.value = this.value.replace(/\D/g, "");
            if (this.value < 0 || this.value > 120) {
                this.value = "";
                $("#ReferenceAcquaintedYearsErr").html("Year Length Not Possible").show().fadeOut("slow");
            }
        });

        
    });
    
</script>