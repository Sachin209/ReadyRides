function enableButton()
{
	if (document.getElementById ("remember").checked)
	{
		document.getElementById ("submit").disabled = false;
	}
	else
	{
		document.getElementById ("submit").disabled = true;
	}
}.0