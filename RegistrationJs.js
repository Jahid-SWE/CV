function checkNameLength(){
	var z=document.forms["registrationForm"]["FullName"].value;
	if(z.length<5)
	{
		alert("Name can't be <5 character!");
		return false;
	}
	else{

	}
}
function checkPassword(){
	var pass1=document.forms["registrationForm"]["password"].value;
	var pass2=document.forms["registrationForm"]["confirm"].value;
	if(pass1!=pass2)
	{
		alert("Password did not match");
	}
}
function checkAge()
{
	var x=document.forms["registrationForm"]["age"].value;
	if(x<18)
	{
		alert("Sorry you are under age");
	}
}
function check()
{
	var x=document.getElementById('checkBox').checked;
	if(x==true)
	{
		alert("")
		return false;
	}
	else{
		alert("You must accept terms and conditions");
	}
}