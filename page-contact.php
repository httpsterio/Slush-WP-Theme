<?php
/*
Template Name: Contact form
*/
get_header(); ?>

		<!-- Row for main content area -->
		<div id="content" class="twelve columns panel" role="main">
	
			<div class="post-box">
				<?php get_template_part('loop', 'page'); ?>
   


<script language="javascript">
function CheckAll(x)
{
    
if (ISBLANK(x.fieldnm_1.value)) 
	{ 	
		    alert("Please define value for Name field !!");
    	    return false;
    }

if (ISBLANK(x.fieldnm_2.value)) 
{ 	
	alert("Please enter Email field !!");
    return false;
}
if(checkemail(x.fieldnm_2.value)==false)
{
	alert("Please enter a valid email address for Email field !!");
	return false;
}

if (ISBLANK(x.fieldnm_3.value)) 
	{ 	
		    alert("Please define value for Message field !!");
    	    return false;
    }

 
	 return true;
}

/// email check

function checkemail(myemail)
{
var str=myemail;
var filter=/^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i
if (filter.test(str))
{
testresults=true
}
else
{
testresults=false
}
return (testresults)
}

/// to check that perticular value is EMPTY OR NOT
function ISBLANK(xx)
{ 
        var cc=0,tt;
		for(tt=0; tt<xx.length; tt++)
		{
		     if (xx.charAt(tt)==' ')
			 {
			 	cc=cc+1; // count blank character
			 }
		}
		if (cc==xx.length)
		{
			return true;  //// means it is BLANK
		}
	     return false;	//// means it is NOT BLANK
}

function is_radio_button_selected(fieldnm)
{
// set var radio_choice to false
var radio_choice = false;

// Loop from zero to the one minus the number of radio button selections
for (counter = 0; counter < fieldnm.length; counter++)
{
// If a radio button has been selected it will return true
// (If not it will return false)
if (fieldnm[counter].checked)
radio_choice = true; 
}

if (!radio_choice)
{
return (false); /// means not selected
}
return (true); /// means selected
}
</script>

<form name="form1" method="POST" action="_sendmail.php" onSubmit="return CheckAll(this);">
<table width="708" border="0" cellspacing="1" cellpadding="2">


<!--   <tr>
      <td width="165" align="right" valign="top">Name *: </td>
      <td width="565" align="left" valign="top"><input name="fieldnm_1" type="text" size="33" /></td>
    </tr>

    <tr>
      <td width="165" align="right" valign="top">Email *: </td>
      <td width="565" align="left" valign="top"><input name="fieldnm_2" type="text" size="33" /></td>
    </tr>

    <tr>
      <td width="165" align="right" valign="top">Message *: </td>
      <td width="565" align="left" valign="top"><input name="fieldnm_3" type="text" size="33" /></td>
    </tr>

    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="Submit" value="Submit">
      <input type="reset" name="Submit2" value="Reset"></td>
    </tr>
</table>
</form> -->



		<form name="form1" method="POST" action="_sendmail.php" onSubmit="return CheckAll(this);">
		          <div class="row collapse">
		            <div class="two columns"><label class="inline">Your Name</label></div>
		            <div class="ten columns"><input name="fieldnm_1" type="text" id="yourName" placeholder="Your beautiful name" />
		          </div>
		          <div class="row collapse">
		            <div class="two columns"><label class="inline">Your Email</label></div>
		            <div class="ten columns">
		            	<input name="fieldnm_2" type="text" placeholder="Your fun and quirky email" />
		          </div>

		          <label>What's up?</label>
		          <textarea name="fieldnm_3" rows="4" placeholder="Whatcha wanna say?"></textarea>
		          
		         <input type="submit" name="Submit" value="Submit" class="button">
		         <input type="reset" name="Submit2" value="Reset" class="button"><br>
		      </form>

			





			</div></div></div>

		</div><!-- End Content row -->
		
		
<?php get_footer(); ?>