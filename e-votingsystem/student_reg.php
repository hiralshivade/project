<?php include "header.php";?>
<div id="cover">
<div id="content">
<br/><h3>Registration</h3>
  <div id="login">
        <fieldset>
            <legend><h3> Registration Form</h3></legend>
  <h4 style="color:#e60808;">
  <?php global $nam; echo $nam;?> </h4> 
  <?php global $error; echo $error;?>                  
			<!-- the login form-->
<form action="reg1_action.php" method="post" id="myform">
                <div class="login">
				<table width="400px">
<tr><td><label>Firstname</label></td>
    <td><input type="text" name="firstname" value="" style="width:250px; height:34px; border:1px solid #336666;"/></td>
</tr>
<tr><td><label>Fathername</label></td>
    <td><input type="text" name="fathername" value="" style="width:250px; height:34px; border:1px solid #336666;"/></td>
</tr>

<tr><td><label>Lastname</label></td>
    <td><input type="text" name="lastname" value="" style="width:250px; height:34px; border:1px solid #336666;"/></td>
</tr>
<tr><td><label>Date Of Birth</label></td>
    <td><input type="date" name="dob" value="" style="width:250px; height:34px; border:1px solid #336666;"/></td>
</tr>
<tr><td><label>Age</label></td>
    <td><input type="text" name="age" onclick="processs()"  value="" style="width:250px; height:34px; border:1px solid #336666;"/></td>
</tr>
<tr><td><label>Email ID</label></td>
    <td><input type="text" name="email" value="" style="width:250px; height:34px; border:1px solid #336666;"/></td>
</tr>
<tr><td><label>Username</label></td>
    <td><input type="text" name="username" value="" style="width:250px; height:34px; border:1px solid #336666;"/></td>
</tr>
<tr><td><label>Password</label></td>
    <td><input type="password" name="password" value="" style="width:250px; height:34px; border:1px solid #336666;"/></td>
</tr>
<tr>
    <td><label>State</label></td>
    <td><select name="state" style="width:250px; height:34px; border:1px solid #336666;">
    <option value="000">Select State</option>
<option value="Andhra Pradesh">Andhra Pradesh</option>
<option value="Arunachal Pradesh">Arunachal Pradesh</option>
<option value="Assam">Assam</option>
<option value="Bihar">Bihar</option>
<option value="Chhattisgarh">Chhattisgarh</option>
<option value="Delhi">Delhi</option>
<option value="Goa">Goa</option>
<option value="Gujarat">Gujarat</option>
<option value="Haryana">Haryana</option>
<option value="Himachal Pradesh">Himachal Pradesh</option>
<option value="Jammu & Kashmir">Jammu & Kashmir</option>
<option value="Jharkhand">Jharkhand</option>
<option value="Karnataka">Karnataka</option>
<option value="Kerala">Kerala</option>
<option value="Madhya Pradesh">Madhya Pradesh</option>
<option value="Maharashtra">Maharashtra</option>
<option value="Manipur">Manipur</option>
<option value="Meghalaya">Meghalaya</option>
<option value="Mizoram">Mizoram</option>
<option value="Maharashtra">Maharashtra</option>
<option value="Nagaland">Nagaland</option>
<option value="Odisha">Odisha</option>
<option value="Punjab">Punjab</option>
<option value="Rajasthan">Rajasthan</option>
<option value="Sikkim">Sikkim</option>

    <option value="Tamil Nadu">Tamil Nadu</option>
    <option value="Telangana">Telangana</option>
    <option value="Tripura">Tripura</option>
    <option value="Uttar Pradesh">Uttar Pradesh</option>
    <option value="Uttarakhand">Uttarakhand</option>
<option value="West Bengal">West Bengal</option>

</select>

</td>
</tr>
<tr><td><label>Phone no.</label></td>
    <td><input type="text" name="phone" value="" style="width:250px; height:34px; border:1px solid #336666;"/></td>
</tr>
<tr>
    <td><label>Occupation</label></td>
    <td><select name="occupation" style="width:250px; height:34px; border:1px solid #336666;">
    <option value="000">Select Occupation</option>
    <option value="Bussiness men">Bussiness men</option>
    <option value="Govt. Employee">Govt. Employee</option>
    <option value="Farmer">Farmer</option>
    <option value="Student">Student</option>
    <option value="Other">Other</option></select>
</td>
</tr>
<tr><td colspan="2" align="left"><input type="submit" name="submit" value="Next" style="width:100px; height:34px; border:1px solid #336666; border-radius:4px;"></td></tr>
				 </table>
			    </div>
</form>
<script type="text/javascript">
function process()

{
if(age>=18)
{
echo}
}


 var frmvalidator = new Validator("myform"); 

 frmvalidator.addValidation("firstname","req","Please enter firstname"); 
 frmvalidator.addValidation("firstname","maxlen=50");
 frmvalidator.addValidation("fathername","req","Please enter fathername"); 
 frmvalidator.addValidation("fathername","maxlen=50");
 frmvalidator.addValidation("lastname","req","Please enter lastname"); 
 frmvalidator.addValidation("lastname","maxlen=50");
 frmvalidator.addValidation("dob","req","Please enter DOB"); 
 frmvalidator.addValidation("dob","maxlen=50");
 frmvalidator.addValidation("age","req","Please enter your age"); 
 frmvalidator.addValidation("age","age>=18");
 frmvalidator.addValidation("email","req","Please enter Email ID"); 
 frmvalidator.addValidation("email","maxlen=50");
 frmvalidator.addValidation("username","req","Please enter username"); 
 frmvalidator.addValidation("username","maxlen=50");
 frmvalidator.addValidation("password","req","Please enter password"); 
 frmvalidator.addValidation("password","minlen=3","Password must not be less than 3 characters.");
 frmvalidator.addValidation("state","req","Please select your state"); 
 frmvalidator.addValidation("state","dontselect=000","Please select your state");
 frmvalidator.addValidation("occupation","req","Please enter your occupation"); 
 frmvalidator.addValidation("occupation","dontselect=000","You did't select your occupation");
 frmvalidator.addValidation("phone","req","Please enter your Phone No"); 
 frmvalidator.addValidation("phone","minlen=10","Invalid Mobile Number, it can't be less than 10 digits.please check it and try again");

</script>
        </fieldset>
        </div>
</div>
</div>
<?php include "footer.php";?>
