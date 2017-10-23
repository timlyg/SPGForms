// This function will be called when DOMcontent is ready
// thanks to https://stackoverflow.com/questions/25828426/uncaught-typeerror-cannot-read-property-getcontext-of-null
function init() {            
    var signaturePad = new SignaturePad(document.getElementById('signature-pad'), {
      backgroundColor: 'rgba(255, 255, 255, 0)',
      penColor: 'rgb(0, 0, 0)'
    });
    var saveButton = document.getElementById('save');
    var cancelButton = document.getElementById('clear');

    saveButton.addEventListener('click', function (event) {
        if (signaturePad.isEmpty()) {
            alert("You must sign!");
            return;
        }
        
        document.getElementById('signeddata').value = signaturePad.toDataURL('image/png');

        // Send data for making sinature.png file via AJAX
        var xmlhttp = new XMLHttpRequest();
        var signatureData = new FormData();
        var ApplicantID = document.getElementById("ApplicantID").value;
        signatureData.append("signeddata",document.getElementById("signeddata").value);
        signatureData.append("ApplicantID",ApplicantID);
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("submitSignatureForm").submit();
            }
        };
        xmlhttp.open("POST", "includes/signaturefilemaker.php", true);
        xmlhttp.send(signatureData);
        
    // Send data to server instead...
    // window.open(signaturedata);
    });

    cancelButton.addEventListener('click', function (event) {
      signaturePad.clear();
    });
}

document.addEventListener("DOMContentLoaded", init, false);