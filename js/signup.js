function check_password ()
{
	let current = document.getElementById("password").value;
	let passwordconfirm = document.getElementById("confirm-password").value;
	let flag=0;

	if (!(passwordconfirm==current) || !(current) || !(passwordconfirm))
	{
		alert("Password error ");

	}
	else
		flag=1;
	return flag;

}

function check_username_all_char (test) //need to be checked again
{
 let i=0;
 for (i in test )
 {

	 if (test[i]=='0' || test[i]=='1' || test[i]=='2' || test[i]=='3' || test[i]=='4' || test[i]=='5' || test[i]=='6' || test[i]=='7' || test[i]=='8' || test[i]=='9' )
     {



            return 1;
            break ;
     }
 }
 return 0 ;

}
function check_first_name()
{
	let name = document.getElementsByName("first-name")[0].value;
	let flag =0;
	if ((name==""))
	{
		alert("First name is required ! " );

    }
    else if (check_username_all_char (name))
    {
        alert ("Name has number in it ");
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
		alert("Last name is required ! " );

    }
    else if (check_username_all_char (name))
    {
        alert ("Name has number in it ");
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
		alert("Mail error" );
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
             return 1;
             break ;
      }
  }
  return 0 ;
}

function check_all ()
{

	if (check_first_name() && check_Last_name()  && check_email() && check_password () && check_number())
		 data ();

}




let dt = new Date();
document.getElementById("datetime").innerHTML = dt.toLocaleString();
