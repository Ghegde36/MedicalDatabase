function validPass()
{
	var x = document.forms["signup"]["pass"].value;
	var y = document.forms["signup"]["apass"].value;
	if(x != y)
	{
		alert("the passwords do not match!!");
		return false;
	}
}

