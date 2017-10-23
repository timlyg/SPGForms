<!--
This is used by:
//- All but UX & Legal services
-->

<h3>REFERENCES:</h3>
PLEASE LIST THE NAMES OF THREE PERSONS NOT RELATED TO YOU WHOM YOU HAVE KNOWN AT LEAST ONE YEAR.
<table>
    <tr>
        <th>NAME</th><th>TITLE</th><th>COMPANY</th><th>TELEPHONE</th><th>YEARS ACQUAINTED<br><span id="ReferenceAcquaintedYearsErr"></span></th>
    </tr>
    <tr>
        <td><input name="ReferenceName1" placeholder="1."></td><td><input name="ReferenceTitle1"></td>
        <td><input name="ReferenceCompany1"></td><td><input name="ReferenceContact1"></td><td><input class="ReferenceAcquaintedYears" id="ReferenceAcquaintedYears1" name="ReferenceAcquaintedYears1"></td>
    </tr>
    <tr>
        <td><input name="ReferenceName2" placeholder="2."></td><td><input name="ReferenceTitle2"></td>
        <td><input name="ReferenceCompany2"></td><td><input name="ReferenceContact2"></td><td><input class="ReferenceAcquaintedYears" id="ReferenceAcquaintedYears2" name="ReferenceAcquaintedYears2"></td>
    </tr>
    <tr>
        <td><input name="ReferenceName3" placeholder="3."></td><td><input name="ReferenceTitle3"></td>
        <td><input name="ReferenceCompany3"></td><td><input name="ReferenceContact3"></td><td><input class="ReferenceAcquaintedYears" id="ReferenceAcquaintedYears3" name="ReferenceAcquaintedYears3"></td>
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