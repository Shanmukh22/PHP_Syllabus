<?php session_start(); ?>
<!DOCTYPE html>
<html>
<?php require_once("header.php"); ?>
<H2>Form</H2>
<div id="wrapper">
<form method="post"  action="processor.php" onSubmit="return validatePage1();">
<body style="text-align:center;">
<table BORDER="1">
<tr>

<td><label class="formFieldQuestion">Instructor Full Name&nbsp;*</label></td>
<td><input class=instructorForm type=text name=field_1 id=field_1 size='50' value=''></td>


</tr>
<tr>

<td><label class="formFieldQuestion">Instructor Webpage</label></td>
<td><input class=instructorForm type=website name=field_2 id=field_2 size=50 value="" style="background-image:url(imgs/website.png); background-repeat: no-repeat;  padding: 2px 2px 2px 25px;"></td>

</tr>
<tr>

<td><label class="formFieldQuestion">Instructor Department&nbsp;*</label></td>
<td><input class=instructorForm=text name=field_3 id=field_3 size='50' value=''></td>

</tr>
<tr>

<td><label class="formFieldQuestion">Instructor College&nbsp;*</label></td>
<td><input class=instructorForm type=text name=field_4 id=field_4 size='50' value=''></td>

</tr>
<tr>

<td><label class="formFieldQuestion">Instructor Office&nbsp;*</label></td>
<td><input class=instructorForm type=text name=field_5 id=field_5 size='50' value=''></td>

</tr>
<tr>

<td><label class="formFieldQuestion">Instructor Office Hours&nbsp;*</label></td>
<td><input class=instructorForm type=text name=field_6 id=field_6 size='50' value=''></td>

</tr>
<tr>


<td><label class="formFieldQuestion">Instructor Phone&nbsp;*</label></td>
<td><input class=instructorForm type=phone name=field_7 id=field_7 size=50 value="" style="background-image:url(imgs/phone.png); background-repeat: no-repeat;  padding: 2px 2px 2px 25px;"></td>
</tr>

<tr>

<td><label class="formFieldQuestion">Instructor Email&nbsp;*</label></td>
<td><input class=instructorForm type=email name=field_8 id=field_8 size=50 value="" style="background-image:url(imgs/email.png); background-repeat: no-repeat;  padding: 2px 2px 2px 25px;"></td>
</tr>

<tr>



<td><label class="formFieldQuestion">Course Description</label></td>
<td><textarea class=instructorForm  name=field_9 id=field_9 rows=10 cols=50></textarea></td>

</tr>

<tr>



<td><label class="formFieldQuestion">Course Number&nbsp;*</label></td>
<td><input class=instructorForm type=text name=field_10 id=field_10 size='50' value=''></td>
</tr>
</li>
<tr>



<td><label class="formFieldQuestion">Course Objectives</label></td>
<td><textarea class=instructorForm  name=field_11 id=field_11 rows=10 cols=50></textarea></td>

</tr>

<tr>



<td><label class="formFieldQuestion">Course Requirements</label></td>
<td><textarea class=instructorForm  name=field_12 id=field_12 rows=10 cols=50></textarea></td>

</tr>

<tr>


<td><label class="formFieldQuestion">Text book</label></td>
<td><textarea class=instructorForm  name=field_13 id=field_13 rows=10 cols=50></textarea></td>

</tr>

<tr>



<td><label class="formFieldQuestion">Readings</label></td>
<td><textarea class=instructorForm  name=field_14 id=field_14 rows=10 cols=50></textarea></td>
</tr>

<tr>


<td><label class="formFieldQuestion">Assignments</label></td>
<td><textarea class=instructorForm  name=field_15 id=field_15rows=10 cols=50></textarea></td>

</tr>

<tr>



<td><label class="formFieldQuestion">Course URL</label></td>
<td><input class=instructorForm type=website name=field_16 id=field_16 size=50 value="" style="background-image:url(imgs/website.png); background-repeat: no-repeat;  padding: 2px 2px 2px 25px;"></td>
</tr>

<tr>

<td><label class="formFieldQuestion">Course Title&nbsp;*</label></td>
<td><input class=instructorForm=text name=field_17 id=field_17 size='50' value=''></td>

</tr>

<tr>

<td><label class="formFieldQuestion">University Name&nbsp;*</label></td>
<td><input class=instructorForm=text name=field_18 id=field_18 size='50' value=''></td>
</tr>

<tr>

<td><label class="formFieldQuestion">Department&nbsp;*</label></td>
<td><input class=instructorForm=text name=field_19 id=field_19 size='50' value=''></td>

</tr>

<tr>
<td><label class="formFieldQuestion">Course Semester&nbsp;*</label></td>
<td><input class=instructorForm=text name=field_20 id=field_20 size='50' value=''></td>

</tr>
<tr>

<td><label class="formFieldQuestion">Course Year&nbsp;*</label></td>
<td><input class=instructorForm=text name=field_21 id=field_21 size='50' value=''></td>

</tr>
</table>
</body>
<input type="submit" value="Submit">

</form>
<!-- end of this page -->

<!-- page validation -->
<SCRIPT type=text/javascript>
<!--
function validatePage1()
{
				retVal = true;
				if (validateField('field_1','fieldBox_1','text',1) == false)
                    retVal=false;
    if (validateField('field_2','fieldBox_2','website',0) == false)
        retVal=false;
    if (validateField('field_3','fieldBox_3','text',1) == false)
        retVal=false;
    if (validateField('field_4','fieldBox_4','text',1) == false)
        retVal=false;
    if (validateField('field_5','fieldBox_5','text',1) == false)
        retVal=false;
    if (validateField('field_6','fieldBox_6','text',1) == false)
        retVal=false;
    if (validateField('field_7','fieldBox_7','phone',1) == false)
        retVal=false;
    if (validateField('field_8','fieldBox_8','email',1) == false)
        retVal=false;
    if (validateField('field_9','fieldBox_9','textarea',0) == false)
        retVal=false;
    if (validateField('field_10','fieldBox_10','text',1) == false)
        retVal=false;
    if (validateField('field_11','fieldBox_11','textarea',0) == false)
        retVal=false;
    if (validateField('field_12','fieldBox_12','textarea',0) == false)
        retVal=false;
    if (validateField('field_13','fieldBox_13','textarea',0) == false)
        retVal=false;
    if (validateField('field_14','fieldBox_14','textarea',0) == false)
        retVal=false;
    if (validateField('field_15','fieldBox_15','textarea',0) == false)
        retVal=false;
    if (validateField('field_16','fieldBox_16','website',0) == false)
        retVal=false;
    if (validateField('field_17','fieldBox_17','text',1) == false)
        retVal=false;
    if (validateField('field_18','fieldBox_18','text',1) == false)
        retVal=false;
    if (validateField('field_19','fieldBox_19','text',1) == false)
        retVal=false;
    if (validateField('field_20','fieldBox_20','text',1) == false)
        retVal=false;
    if (validateField('field_21','fieldBox_21','text',1) == false)
        retVal=false;
    
    
				if(retVal == false)
                {
                    alert('Please correct the errors.  Fields marked with an asterisk (*) are required');
                    return false;
                }
				return retVal;
}
//-->
</SCRIPT>

<style>

</style>
</div>
</body>
</html>
