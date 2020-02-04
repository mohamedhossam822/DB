function check_password ()
{
	let current = document.getElementById("pw").value;
	let passwordconfirm = document.getElementById("con_pw").value;

	if (!(passwordconfirm==current))
	{
		document.getElementById("pw_div").textContent = " * passwords doesnt match";
		return false;
	}
	else if(!(current) || !(passwordconfirm)){
		document.getElementById("pw_div").textContent = " * password cannot be empty";
		return false;
	}
	else{
		document.getElementById("pw_div").textContent = "";
		return true;
	}
}

function check_username_all_char (test) //need to be checked again
{
	return /\d/.test(test);
}
function check_first_name()
{
	let name = document.getElementById("fn").value;
	if ((name==""))
	{
		document.getElementById("fn_div").textContent = "* please enter your name";
		return false;
  }
    else if (check_username_all_char (name))
    {
			document.getElementById("fn_div").textContent="* first name cant have a number in it ";
      return false;
    }
	else
	{
		document.getElementById("fn_div").textContent="";
		return true;
	}
}
function check_Last_name()
{
	let name = document.getElementById("ln").value;
	if ((name==""))
	{
		document.getElementById("ln_div").textContent = "* please enter your lastname";
		return false;
    }
    else if (check_username_all_char (name))
    {
			document.getElementById("ln_div").textContent="* last name cant have a number in it ";
			return false;
    }
	else{
			document.getElementById("ln_div").textContent="";
			return true;
	}


}

function check_email ()
{
	let mailgot = document.getElementById("mail").value;
	let regx = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
	if(!mailgot){
		document.getElementById("email_div").textContent="* please enter your email";
		return false;
	}
	else if(!regx.test(mailgot)){
		document.getElementById("email_div").textContent="* Email invalid";
		return false;
	}
	else{
		document.getElementById("email_div").textContent="";
		return true;
	}

}

function check_number()
{
	let numb = document.getElementById("phone_num").value;
	let reg = /^\d+$/;
	if(!numb){
		document.getElementById("num_div").textContent="* please enter your phone number";
		return false;
	}
	else if(!reg.test(numb)){
		document.getElementById("num_div").textContent="* invalid phone number";
		return false;
	}
	else{
		document.getElementById("num_div").textContent="";
		return true;
	}

}

function check_all()
{
	let v1 = check_first_name();
	let v2 = check_Last_name();
	let v3 = check_email();
	let v4 = check_password();
	let v5 = check_number();

	if(v1 && v2 && v3 && v4 && v5)
	return true;
	else
	return false;
}
