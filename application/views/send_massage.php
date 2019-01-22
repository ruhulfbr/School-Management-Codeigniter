<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
$('#sms-form').submit(function(e){
    var phoneNumber=$('#phoneNumber').val();
    var message=$('#message').val();
    if(phoneNumber == '' ||message=='' ){
        return alert("please type Valid Input/Input is blank.");
    }
    else{
    var data = JSON.stringify(
    {
    "from": "NoaparaModelSchool",
    "to": phoneNumber,
    "text": message
    }
    );

    var xhr = new XMLHttpRequest(); xhr.withCredentials = false;

    xhr.addEventListener("readystatechange", function () {
    if (this.readyState === this.DONE) { 
    console.log(this.responseText);
    }
    });

    xhr.open("POST", "http://107.20.199.106/restapi/sms/1/single"); xhr.setRequestHeader("authorization", "Basic c2NsYmQ6c2NsYmQqKg==");
    xhr.setRequestHeader("content-type", "application/json"); xhr.setRequestHeader("accept",  "application/json");

    var confirmStatus = xhr.send(data);
   if(confirmStatus){
       alert('Message Sending Succecfully Done.');
//       windo.location("domain/index.php/comtroller/functin");
   }else{
 alert('Message Sending Succecfully Done.');
       //alert("Message Sending Fail / please Contract Your Subscriber");
   }
    e.preventDefault();
    }	
	});
	
	});
	</script>


<form action="#" method="post" enctype="multipart/form-data" id="sms-form">
        <fieldset>
            <legend>Send Massage</legend>

            <table class="nostyle">
                <tr>
                    <td>Phone Number:</td>
                    <td><input type="number"  name="phone_number"  required="1" id="phoneNumber" style="width: 343px; height: 40px"/></td>
                </tr>
                <tr>
                    <td class="va-top">Details:</td>
                    <td>
                        <textarea cols="48" rows="10" name="message" id="message"></textarea>
                    </td>
                </tr>
<!--                <tr>
                    <td>PDF file:</td>
                    <td><input type="file" size="40" name="notice_pdf" class="input-text" required="1"/></td>
                </tr>-->
<!--                <tr>
                    <td>Input:</td>
                    <td>
                        <label><input type="radio" name="publish" value="1" checked="1"/> Publish</label> &nbsp;
                        <label><input type="radio" name="publish" value="0"/> Un-publish</label>
                    </td>
                </tr>-->
                <tr>
                    <td colspan="2" class="t-right"><input type="submit" class="input-submit" name="upload" value="Submit" /></td>
                </tr>
            </table>
        </fieldset>
    </form>