<!--This is used for all fulltime forms-->


<br>
I acknowledge that any false, incomplete or misleading information I provide in this application form, in the attached resume or any other information I provide to SPG in a pre-employment interview will be grounds to deny my application or, if discovered later by the hiring client, could be grounds for immediate dismissal from employment.<br><br>

In consideration for my introduction to the hiring client by SPG, if I am not employed by the hiring client, I agree that for a period of 180 days following my last contact with them, that I will not accept employment by, or perform services for them (in the area I was introduced to) without the prior written consent of SPG.<br><br>

Solomon Page Group LLC provides equal employment opportunities to all applicants without regard to race, color, creed, religion, sex, national origin, age, citizenship, disability, veteran status, or any other protected status.

<br><br>
SIGN HERE:
<!-- references to Signature_Pad: This is placed in this section to avoid error "warning" since this is a conditional section where without which the reference doesn't work -->
<link rel="stylesheet" type="text/css" href="css/signature_pad.css">
<script src="js/signature_pad.min.js"></script>
<script src="js/signaturefunction.js"></script>

<div class="wrapper" id="wrapper">
  <canvas id="signature-pad" class="signature-pad" width=400 height=200></canvas>
</div>
<div>
  <button type="button" id="clear">Clear</button>
</div>
<input type="hidden" name="signeddata" id="signeddata">

<form id="submitSignatureForm" action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> method="post">
    <input type="hidden" name="SignaturePage">
    <input type="hidden" name="ApplicantID" id="ApplicantID" value=<?php echo $_SESSION["ApplicantID"]; ?>>
    <input type="hidden" name="SignaturePath" value=<?php echo "signatures/signature." . $_SESSION["ApplicantID"] . ".png"; ?>>
    DATE: <input name="SignDate" type="Date" value=<?php echo date("Y-m-d"); ?>> <br>
    <input type="submit" name="SignatureFormSubmit" id="submitSignatureButton" value="This Button Should Not be Shown">                <!-- This submit button is called by the "Save" button -->
</form>
<button type="button" id="save">Next 2/3</button>