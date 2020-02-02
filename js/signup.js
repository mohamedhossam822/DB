function check_password ()
{
	let current = document.getElementById("password").value;
	let passwordconfirm = document.getElementById("confirm-password").value;
	let flag=0;

	if (!(passwordconfirm==current) || !(current) || !(passwordconfirm))
	{
		document.getElementById("password_msg").style.display='';

	}
	else
		flag=1;
	return flag;

}

function check_username_all_char (test) //need to be checked again
{
 let i=0;
 let flag=0;
 for (i in test )
 {

	 if (test[i]=='0' || test[i]=='1' || test[i]=='2' || test[i]=='3' || test[i]=='4' || test[i]=='5' || test[i]=='6' || test[i]=='7' || test[i]=='8' || test[i]=='9' )
     {
            flag=1;

     }
		 if (flag)
		 {
			 return flag;
			 break;
		 }

 }
 return flag ;

}
function check_first_name()
{
	let name = document.getElementsByName("first-name")[0].value;
	let flag =0;
	if ((name==""))
	{
		document.getElementById("FN_msg").style.display='';

    }
    else if (check_username_all_char (name))
    {
			document.getElementById("FN_msg").textContent="first name has number in it ";
      document.getElementById("FN_msg").style.display='';
    }
	else
		flag=1;
	return flag;

}
function check_Last_name()
{
	let name = document.getElementsByName("last-name")[0].value;
	let flag =0;
	if ((name==""))
	{
		document.getElementById("LN_msg").style.display='';

    }
    else if (check_username_all_char (name))
    {
			document.getElementById("LN_msg").textContent="last name has number in it ";
			document.getElementById("LN_msg").style.display='';
    }
	else
		flag=1;
	return flag;

}

function check_email ()
{
	let email = document.getElementsByName("email")[0].value;
	if (!(email) || !(email.includes(".com")) || !(email.includes("@")))
	{
			document.getElementById("email_msg").style.display='';
	}
	else
		flag=1;
	return flag;
}

function check_number()
{
  let number = document.getElementsByName("phone")[0].value;
  let i=0;
  for (i in number )
  {

 	 if (test[i]!='0' || test[i]!='1' || test[i]!='2' || test[i]!='3' || test[i]!='4' || test[i]!='5' || test[i]!='6' || test[i]!='7' || test[i]!='8' || test[i]!='9' )
      {
			 document.getElementById("number_msg").style.display=''; 
             return 1;
             break ;
      }
  }
  return 0 ;
}

function check_all ()
{

	if (check_first_name() && check_Last_name()  && check_email() && check_password () && check_number())
		 console.log("welcome summoner ");//proceed

}




let dt = new Date();
document.getElementById("datetime").innerHTML = dt.toLocaleString();
