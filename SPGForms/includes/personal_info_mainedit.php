<!--
This is for the management system all fields are listed.
-->

<table>
    <tr>
        <td colspan="2" align="right">
            DATE: <input type="date" name="ApplyDate" value=<?php echo $row['ApplyDate']; ?>>
        </td>
    </tr>
    <tr>
        <td width="50%">
                First Name:<br><input name="FirstName" placeholder="input here" value="<?php echo htmlspecialchars($row['FirstName']); ?>">
        </td>
        <td>
            Last Name:<br><input name="LastName" placeholder="input here" value="<?php echo htmlspecialchars($row['LastName']); ?>">
        </td>
    </tr>
    <tr>
        <td>
            E-mail:<br><input type="email" name="Email" placeholder="input here" value="<?php echo htmlspecialchars($row['Email']); ?>">
        </td>
        <td>
            Address:<br><input name="Address" placeholder="input here" value="<?php echo htmlspecialchars($row['Address']); ?>">
        </td>
    </tr>
    <tr>
        <td>
            City:<br><input name="City" placeholder="input here" value="<?php echo htmlspecialchars($row['City']); ?>">
        </td>
        <td>
            State:<br>
            <select name="State" id="State">
                <option value="AL" <?php echo (htmlspecialchars($row['State']) == "AL")? 'Selected' : ''; ?>>Alabama</option>
                <option value="AK" <?php echo (htmlspecialchars($row['State']) == "AK")? 'Selected' : ''; ?>>Alaska</option>
                <option value="AZ" <?php echo (htmlspecialchars($row['State']) == "AZ")? 'Selected' : ''; ?>>Arizona</option>
                <option value="AR" <?php echo (htmlspecialchars($row['State']) == "AR")? 'Selected' : ''; ?>>Arkansas</option>
                <option value="CA" <?php echo (htmlspecialchars($row['State']) == "CA")? 'Selected' : ''; ?>>California</option>
                <option value="CO" <?php echo (htmlspecialchars($row['State']) == "CO")? 'Selected' : ''; ?>>Colorado</option>
                <option value="CT" <?php echo (htmlspecialchars($row['State']) == "CT")? 'Selected' : ''; ?>>Connecticut</option>
                <option value="DE" <?php echo (htmlspecialchars($row['State']) == "DE")? 'Selected' : ''; ?>>Delaware</option>
                <option value="DC" <?php echo (htmlspecialchars($row['State']) == "DC")? 'Selected' : ''; ?>>District Of Columbia</option>
                <option value="FL" <?php echo (htmlspecialchars($row['State']) == "FL")? 'Selected' : ''; ?>>Florida</option>
                <option value="GA" <?php echo (htmlspecialchars($row['State']) == "GA")? 'Selected' : ''; ?>>Georgia</option>
                <option value="HI" <?php echo (htmlspecialchars($row['State']) == "HI")? 'Selected' : ''; ?>>Hawaii</option>
                <option value="ID" <?php echo (htmlspecialchars($row['State']) == "ID")? 'Selected' : ''; ?>>Idaho</option>
                <option value="IL" <?php echo (htmlspecialchars($row['State']) == "IL")? 'Selected' : ''; ?>>Illinois</option>
                <option value="IN" <?php echo (htmlspecialchars($row['State']) == "IN")? 'Selected' : ''; ?>>Indiana</option>
                <option value="IA" <?php echo (htmlspecialchars($row['State']) == "IA")? 'Selected' : ''; ?>>Iowa</option>
                <option value="KS" <?php echo (htmlspecialchars($row['State']) == "KS")? 'Selected' : ''; ?>>Kansas</option>
                <option value="KY" <?php echo (htmlspecialchars($row['State']) == "KY")? 'Selected' : ''; ?>>Kentucky</option>
                <option value="LA" <?php echo (htmlspecialchars($row['State']) == "LA")? 'Selected' : ''; ?>>Louisiana</option>
                <option value="ME" <?php echo (htmlspecialchars($row['State']) == "ME")? 'Selected' : ''; ?>>Maine</option>
                <option value="MD" <?php echo (htmlspecialchars($row['State']) == "MD")? 'Selected' : ''; ?>>Maryland</option>
                <option value="MA" <?php echo (htmlspecialchars($row['State']) == "MA")? 'Selected' : ''; ?>>Massachusetts</option>
                <option value="MI" <?php echo (htmlspecialchars($row['State']) == "MI")? 'Selected' : ''; ?>>Michigan</option>
                <option value="MN" <?php echo (htmlspecialchars($row['State']) == "MN")? 'Selected' : ''; ?>>Minnesota</option>
                <option value="MS" <?php echo (htmlspecialchars($row['State']) == "MS")? 'Selected' : ''; ?>>Mississippi</option>
                <option value="MO" <?php echo (htmlspecialchars($row['State']) == "MO")? 'Selected' : ''; ?>>Missouri</option>
                <option value="MT" <?php echo (htmlspecialchars($row['State']) == "MT")? 'Selected' : ''; ?>>Montana</option>
                <option value="NE" <?php echo (htmlspecialchars($row['State']) == "NE")? 'Selected' : ''; ?>>Nebraska</option>
                <option value="NV" <?php echo (htmlspecialchars($row['State']) == "NV")? 'Selected' : ''; ?>>Nevada</option>
                <option value="NH" <?php echo (htmlspecialchars($row['State']) == "NH")? 'Selected' : ''; ?>>New Hampshire</option>
                <option value="NJ" <?php echo (htmlspecialchars($row['State']) == "NJ")? 'Selected' : ''; ?>>New Jersey</option>
                <option value="NM" <?php echo (htmlspecialchars($row['State']) == "NM")? 'Selected' : ''; ?>>New Mexico</option>
                <option value="NY" <?php echo (htmlspecialchars($row['State']) == "NY")? 'Selected' : ''; ?>>New York</option>
                <option value="NC" <?php echo (htmlspecialchars($row['State']) == "NC")? 'Selected' : ''; ?>>North Carolina</option>
                <option value="ND" <?php echo (htmlspecialchars($row['State']) == "ND")? 'Selected' : ''; ?>>North Dakota</option>
                <option value="OH" <?php echo (htmlspecialchars($row['State']) == "OH")? 'Selected' : ''; ?>>Ohio</option>
                <option value="OK" <?php echo (htmlspecialchars($row['State']) == "OK")? 'Selected' : ''; ?>>Oklahoma</option>
                <option value="OR" <?php echo (htmlspecialchars($row['State']) == "OR")? 'Selected' : ''; ?>>Oregon</option>
                <option value="PA" <?php echo (htmlspecialchars($row['State']) == "PA")? 'Selected' : ''; ?>>Pennsylvania</option>
                <option value="RI" <?php echo (htmlspecialchars($row['State']) == "RI")? 'Selected' : ''; ?>>Rhode Island</option>
                <option value="SC" <?php echo (htmlspecialchars($row['State']) == "SC")? 'Selected' : ''; ?>>South Carolina</option>
                <option value="SD" <?php echo (htmlspecialchars($row['State']) == "SD")? 'Selected' : ''; ?>>South Dakota</option>
                <option value="TN" <?php echo (htmlspecialchars($row['State']) == "TN")? 'Selected' : ''; ?>>Tennessee</option>
                <option value="TX" <?php echo (htmlspecialchars($row['State']) == "TX")? 'Selected' : ''; ?>>Texas</option>
                <option value="UT" <?php echo (htmlspecialchars($row['State']) == "UT")? 'Selected' : ''; ?>>Utah</option>
                <option value="VT" <?php echo (htmlspecialchars($row['State']) == "VT")? 'Selected' : ''; ?>>Vermont</option>
                <option value="VA" <?php echo (htmlspecialchars($row['State']) == "VA")? 'Selected' : ''; ?>>Virginia</option>
                <option value="WA" <?php echo (htmlspecialchars($row['State']) == "WA")? 'Selected' : ''; ?>>Washington</option>
                <option value="WV" <?php echo (htmlspecialchars($row['State']) == "WV")? 'Selected' : ''; ?>>West Virginia</option>
                <option value="WI" <?php echo (htmlspecialchars($row['State']) == "WI")? 'Selected' : ''; ?>>Wisconsin</option>
                <option value="WY" <?php echo (htmlspecialchars($row['State']) == "WY")? 'Selected' : ''; ?>>Wyoming</option>
                <option value="AS" <?php echo (htmlspecialchars($row['State']) == "AS")? 'Selected' : ''; ?>>American Samoa</option>
                <option value="GU" <?php echo (htmlspecialchars($row['State']) == "GU")? 'Selected' : ''; ?>>Guam</option>
                <option value="MP" <?php echo (htmlspecialchars($row['State']) == "MP")? 'Selected' : ''; ?>>Northern Mariana Islands</option>
                <option value="PR" <?php echo (htmlspecialchars($row['State']) == "PR")? 'Selected' : ''; ?>>Puerto Rico</option>
                <option value="UM" <?php echo (htmlspecialchars($row['State']) == "UM")? 'Selected' : ''; ?>>Minor Outlying Islands</option>
                <option value="VI" <?php echo (htmlspecialchars($row['State']) == "VI")? 'Selected' : ''; ?>>Virgin Islands</option>
                <option value="AA" <?php echo (htmlspecialchars($row['State']) == "AA")? 'Selected' : ''; ?>>Armed Forces Americas</option>
                <option value="AP" <?php echo (htmlspecialchars($row['State']) == "AP")? 'Selected' : ''; ?>>Armed Forces Pacific</option>
                <option value="AE" <?php echo (htmlspecialchars($row['State']) == "AE")? 'Selected' : ''; ?>>Armed Forces Others</option>	
            </select>
            <br>
            Zip:<br><input name="ZIP" placeholder="input here" value="<?php echo htmlspecialchars($row['ZIP']); ?>">
        </td>
    </tr>
    <tr>
        <td>
            Home Phone:<br><input class="phone" name="HomePhone" id="HomePhone" placeholder="At least home or cell" value="<?php echo htmlspecialchars($row['HomePhone']); ?>"><span class="phoneerr" id="HomePhoneErr"></span><br>
            Cell Phone:<br><input class="phone" name="CellPhone" id="CellPhone"  value="<?php echo htmlspecialchars($row['CellPhone']); ?>"><span class="phoneerr" id="CellPhoneErr"></span>
        </td>
        <td>
            Work Phone:<br><input class="phone" id="WorkPhone" name="WorkPhone" placeholder="optional" value="<?php echo htmlspecialchars($row['WorkPhone']); ?>"><span class="phoneerr" id="WorkPhoneErr"></span>
        </td>
    </tr>
    <tr>
        <td>
            DOB:<br><input type="date" name="DOB" id="DOB" value="<?php echo $row['DOB']; ?>">
        </td>
        <td>
            SSN:<br><input name="SSN" id="SSN" placeholder="Social Security Number" maxlength="11" value="<?php echo htmlspecialchars($row['SSN']); ?>">
        </td>
    </tr>
    <tr>
        <td>
            MOST RECENT COMPENSATION? Base Salary<br>
            $ <input class="money" name="RecentBaseSalary" id="RecentBaseSalary" placeholder="numbers only (optional)" value="<?php echo htmlspecialchars($row['RecentBaseSalary']); ?>"><span class="moneyerr" id="RecentBaseSalaryErr"></span>
        </td>
        <td>
            Hourly Rate<br>
            $ <input class="money" name="RecentHourlyRate" id="RecentHourlyRate" placeholder="numbers only (optional)" value="<?php echo htmlspecialchars($row['RecentHourlyRate']); ?>"><span class="moneyerr" id="RecentHourlyRateErr"></span>
        </td>
    </tr>
    <tr>
        <td>
            MINIMUM ANNUAL SALARY<br>
            $ <input class="money" name="MinSalary" id="MinSalary" placeholder="numbers only (optional)" value="<?php echo htmlspecialchars($row['MinSalary']); ?>"><span class="moneyerr" id="MinSalaryErr"></span>
        </td>
        <td>
            MINIMUM HOURLY RATE<br>
            $ <input class="money" name="MinHourlyRate" id="MinHourlyRate" placeholder="numbers only (optional)" value="<?php echo htmlspecialchars($row['MinHourlyRate']); ?>"><span class="moneyerr" id="MinHourlyRateErr"></span>
        </td>
    </tr>
    <tr>
        <td>
            ARE YOU PERMITTED TO WORK IN THE US ON AN INDEFINITE BASIS FOR ANY EMPLOYER?<br>
            YES <input type="radio" name="PermittedToWork" value="YES" <?php echo (htmlspecialchars($row['PermittedToWork']) == "YES")? 'Checked' : ''; ?>><br>NO <input type="radio" name="PermittedToWork" value="NO" <?php echo (htmlspecialchars($row['PermittedToWork']) == "NO")? 'Checked' : ''; ?>>
        </td>
        <td>
            CURRENTLY EMPLOYED?<br>
            YES <input type="radio" name="Employed" value="YES" <?php echo (htmlspecialchars($row['Employed']) == "YES")? 'Checked' : ''; ?>><br>NO <input type="radio" name="Employed" value="NO" <?php echo (htmlspecialchars($row['Employed']) == "NO")? 'Checked' : ''; ?>>
        </td>
    </tr>
    <tr>
        <td>
            Preferred W2 <input type="radio" name="W2or1099" value="W2" <?php echo (htmlspecialchars($row['W2or1099']) == "W2")? 'Checked' : ''; ?>> or 1099 <input type="radio" name="W2or1099" value="1099" <?php echo (htmlspecialchars($row['W2or1099']) == "1099")? 'Checked' : ''; ?>>
        </td>
        <td>
            DO YOU HAVE A CAR?<br>
            YES <input type="radio" name="Car" value="YES" <?php echo (htmlspecialchars($row['Car']) == "YES")? 'Checked' : ''; ?>><br>NO <input type="radio" name="Car" value="NO" <?php echo (htmlspecialchars($row['Car']) == "NO")? 'Checked' : ''; ?>>
        </td>
    </tr>
    <tr>
        <td>
            Available to travel?<br>
            YES <input type="radio" name="Travel" value="YES" <?php echo (htmlspecialchars($row['Travel']) == "YES")? 'Checked' : ''; ?>><br>NO <input type="radio" name="Travel" value="NO" <?php echo (htmlspecialchars($row['Travel']) == "NO")? 'Checked' : ''; ?>>
        </td>
        <td>
            Where can you work in the Metro Area? List areas:<br>
            <input name="MetroAreas" value="<?php echo htmlspecialchars($row['MetroAreas']); ?>">
        </td>
    </tr>
    <tr>
        <td>
            BAR ADMISSIONS: In good standing?<br>
            YES <input type="radio" name="BarStanding" value="YES" <?php echo (htmlspecialchars($row['BarStanding']) == "YES")? 'Checked' : ''; ?>><br>NO <input type="radio" name="BarStanding" value="NO" <?php echo (htmlspecialchars($row['BarStanding']) == "NO")? 'Checked' : ''; ?>>
        </td>
        <td>
            FOREIGN LANGUAGE FLUENCY:<br>
            <input name="ForeignLanguages" value="<?php echo htmlspecialchars($row['ForeignLanguages']); ?>">
        </td>
    </tr>
    <tr>
        <td>
            Have you ever been the subject of a disciplinary action by the bar of any state?<br>
            YES <input type="radio" name="BarDiscipline" value="YES" <?php echo (htmlspecialchars($row['BarDiscipline']) == "YES")? 'Checked' : ''; ?>><br>NO <input type="radio" name="BarDiscipline" value="NO" <?php echo (htmlspecialchars($row['BarDiscipline']) == "NO")? 'Checked' : ''; ?>><br>
            If yes, <input name="BarDisciplineNote" value="<?php echo htmlspecialchars($row['BarDisciplineNote']); ?>">
        </td>
        <td>
            Software Experience:<br>
            <input name="SoftwareExperience" value="<?php echo htmlspecialchars($row['BarDisciplineNote']); ?>">
        </td>
    </tr>
</table>
<script>
    $(function() {       
        // PHONES FORMAT
        //called when key is pressed in textbox - For Phone fields
        function formatPhone(x) {
            x = x.replace(/\D/g, "");
            x = x.replace(/(^\d)/, '($1');
            x = x.replace(/(^\(\d{3})(\d)/, '$1) $2');
            x = x.replace(/(^\(\d{3}\) \d{3})(\d)/, '$1-$2');
            x = x.replace(/(^\(\d{3}\) \d{3}-\d{4})(\d)/, '$1 ext. $2');
            return x;
        }
        $("#HomePhone").keypress(function (e) {
            //if the letter is not digit then display error and don't type anything
            if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
            //display error message
            $("#HomePhoneErr").html("Numbers Only").show().fadeOut("slow");
                return false;
            }
        });
        $("#CellPhone").keypress(function (e) {
            //if the letter is not digit then display error and don't type anything
            if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
            //display error message
            $("#CellPhoneErr").html("Numbers Only").show().fadeOut("slow");
                return false;
            }
        });
        $("#WorkPhone").keypress(function (e) {
            //if the letter is not digit then display error and don't type anything
            if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
            //display error message
            $("#WorkPhoneErr").html("Numbers Only").show().fadeOut("slow");
                return false;
            }
        });
        
        $("input.phone").keyup(function (e) {
            this.value = formatPhone(this.value);
        });
        // in case input is changed by pasting
        $("input.phone").on('paste', function (e) {
           this.value = formatPhone(this.value); 
        });
        
        
        // MONEY FORMAT
        //called when key is pressed in textbox - For Money fields
        function numberWithCommas(x) {
            x = x.replace(/[^\d\.]/g, "");          // only digits and "." allowed
            x = x.replace(/^\./, "0.");             // do not allow "." in front
            x = x.replace(/(\.\d*)\./, '$1');             // do not allow more than one "."
            x = x.replace(/(\.\d{2})\d+/, '$1');       // do not allow more than 2 decimals after "."
            return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        }
        $("#RecentHourlyRate").keypress(function (e) {
            //if the letter is not digit then display error and don't type anything
            if (e.which != 8 && e.which != 0 && ((e.which < 48 && e.which != 46) || e.which > 57)) {
            //display error message
            $("#RecentHourlyRateErr").html("Numbers Only").show().fadeOut("slow");
                return false;
            }
        });

        $("#RecentBaseSalary").keypress(function (e) {
            //if the letter is not digit then display error and don't type anything
            if (e.which != 8 && e.which != 0 && ((e.which < 48 && e.which != 46) || e.which > 57)) {
            //display error message
            $("#RecentBaseSalaryErr").html("Numbers Only").show().fadeOut("slow");
                return false;
            }
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