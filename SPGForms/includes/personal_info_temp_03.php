<!--
This is the first section personal info part of the larger form for fulltime for the following departments:
- Fashion & Beauty Freelance
- Accounting & Finance Temp

added DOB & SSN
-->


<table>
    <tr>
        <td colspan="2" align="right">
            DATE: <input type="date" name="ApplyDate" value=<?php echo date("Y-m-d"); ?> required>
        </td>
    </tr>
    <tr>
        <td width="50%">
                First Name:<br><input name="FirstName" placeholder="input here" required>
        </td>
        <td>
            Last Name:<br><input name="LastName" placeholder="input here" required>
        </td>
    </tr>
    <tr>
        <td>
            E-mail:<br><input type="email" name="Email" placeholder="input here" required>
        </td>
        <td>
            Address:<br><input name="Address" placeholder="input here" required>
        </td>
    </tr>
    <tr>
        <td>
            City:<br><input name="City" placeholder="input here" required>
        </td>
        <td>
            State:<br>
            <select name="State" id="State" required>
                <option value="">--------Choose One--------</option>
                <option value="N/A">--------50 States--------</option>
                <option value="AL">Alabama</option>
                <option value="AK">Alaska</option>
                <option value="AZ">Arizona</option>
                <option value="AR">Arkansas</option>
                <option value="CA">California</option>
                <option value="CO">Colorado</option>
                <option value="CT">Connecticut</option>
                <option value="DE">Delaware</option>
                <option value="DC">District Of Columbia</option>
                <option value="FL">Florida</option>
                <option value="GA">Georgia</option>
                <option value="HI">Hawaii</option>
                <option value="ID">Idaho</option>
                <option value="IL">Illinois</option>
                <option value="IN">Indiana</option>
                <option value="IA">Iowa</option>
                <option value="KS">Kansas</option>
                <option value="KY">Kentucky</option>
                <option value="LA">Louisiana</option>
                <option value="ME">Maine</option>
                <option value="MD">Maryland</option>
                <option value="MA">Massachusetts</option>
                <option value="MI">Michigan</option>
                <option value="MN">Minnesota</option>
                <option value="MS">Mississippi</option>
                <option value="MO">Missouri</option>
                <option value="MT">Montana</option>
                <option value="NE">Nebraska</option>
                <option value="NV">Nevada</option>
                <option value="NH">New Hampshire</option>
                <option value="NJ">New Jersey</option>
                <option value="NM">New Mexico</option>
                <option value="NY">New York</option>
                <option value="NC">North Carolina</option>
                <option value="ND">North Dakota</option>
                <option value="OH">Ohio</option>
                <option value="OK">Oklahoma</option>
                <option value="OR">Oregon</option>
                <option value="PA">Pennsylvania</option>
                <option value="RI">Rhode Island</option>
                <option value="SC">South Carolina</option>
                <option value="SD">South Dakota</option>
                <option value="TN">Tennessee</option>
                <option value="TX">Texas</option>
                <option value="UT">Utah</option>
                <option value="VT">Vermont</option>
                <option value="VA">Virginia</option>
                <option value="WA">Washington</option>
                <option value="WV">West Virginia</option>
                <option value="WI">Wisconsin</option>
                <option value="WY">Wyoming</option>
                <option value="N/A">--------US Territories--------</option>
                <option value="AS">American Samoa</option>
                <option value="GU">Guam</option>
                <option value="MP">Northern Mariana Islands</option>
                <option value="PR">Puerto Rico</option>
                <option value="UM">Minor Outlying Islands</option>
                <option value="VI">Virgin Islands</option>
                <option value="N/A">--------Armed Forces--------</option>
                <option value="AA">Armed Forces Americas</option>
                <option value="AP">Armed Forces Pacific</option>
                <option value="AE">Armed Forces Others</option>	
            </select>
            <br>
            Zip:<br><input name="ZIP" placeholder="input here" required>
        </td>
    </tr>
    <tr>
        <td>
            Home Phone:<br><input class="phone" name="HomePhone" id="HomePhone" placeholder="At least home or cell" required><span class="phoneerr" id="HomePhoneErr"></span><br>
            Cell Phone:<br><input class="phone" name="CellPhone" id="CellPhone" ><span class="phoneerr" id="CellPhoneErr"></span>
        </td>
        <td>
            Work Phone:<br><input class="phone" id="WorkPhone" name="WorkPhone" placeholder="optional"><span class="phoneerr" id="WorkPhoneErr"></span>
        </td>
    </tr>
    <tr>
        <td>
            DOB:<br><input type="date" name="DOB" id="DOB">
        </td>
        <td>
            SSN:<br><input name="SSN" id="SSN" placeholder="Social Security Number" maxlength="11">
        </td>
    </tr>
    <tr>
        <td>
            MOST RECENT COMPENSATION? Base Salary<br>
            $ <input class="money" name="RecentBaseSalary" id="RecentBaseSalary" placeholder="numbers only (optional)"><span class="moneyerr" id="RecentBaseSalaryErr"></span>
        </td>
        <td>
            Hourly Rate<br>
            $ <input class="money" name="RecentHourlyRate" id="RecentHourlyRate" placeholder="numbers only (optional)"><span class="moneyerr" id="RecentHourlyRateErr"></span>
        </td>
    </tr>
    <tr>
        <td>
            ARE YOU PERMITTED TO WORK IN THE US ON AN INDEFINITE BASIS FOR ANY EMPLOYER?<br>
            YES <input type="radio" name="PermittedToWork" value="YES"><br>NO <input type="radio" name="PermittedToWork" value="NO" required>
        </td>
        <td>
            CURRENTLY EMPLOYED?<br>
            YES <input type="radio" name="Employed" value="YES" required><br>NO <input type="radio" name="Employed" value="NO" required>
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
        // in case field is not filled properly
        $("input.phone").blur(function(){
            if (this.value.length < 14 || (this.value.length > 14 && this.value.length < 21)) this.value = "";      // clear field with wrong format
            if ($("#HomePhone").val().length == 0 && $("#CellPhone").val().length == 0) {
                $("#HomePhone").attr("required", true);
            }
            else {
                $("#HomePhone").removeAttr("required");
            }
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


        // SSN FORMAT
        //called when key is pressed in textbox - For Phone fields
        function formatSSN(x) {
            x = x.replace(/\D/g, "");
            x = x.replace(/(^\d{3})(\d)/, '$1-$2');
            x = x.replace(/(^\d{3}-\d{2})(\d)/, '$1-$2');
            x = x.replace(/(^\d{3}-\d{2}-\d{4})(\d)/, '$1');
            return x;
        }
        
        $("#SSN").keyup(function (e) {
            this.value = formatSSN(this.value);
        });
        // in case input is changed by pasting
        $("#SSN").on('paste', function (e) {
           this.value = formatSSN(this.value); 
        });
        
        
        
        
        // input validation for required fields
        // For SELECT DOM
        $("select").on("change", function(e) {
            if (this.value == "N/A") this.value = "";
        });
    });
    
</script>