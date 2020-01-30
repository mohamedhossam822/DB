<?php

  $errors = array('emailE' => '', 'FNE' => '', 'LNE' => '', 'PSE' => '','GenderE'=> '','DateE'=> '');
	if(isset($_POST['submit']))
  {
    //EmailValidation
    if(empty($_POST['email']))
    {
		    $errors['emailE'] = 'An email is required';
		}
    else
    {
			$email = $_POST['email'];
			if(!filter_var($email, FILTER_VALIDATE_EMAIL))
      {
		 	    $errors['emailE'] = 'Email must be a valid email address';
		  }
      else
      {
        require_once 'Config.php';
        $sql="SELECT `Email` FROM `users` WHERE `email` = '".$_POST['email']."'";
        $select = mysqli_query($DBConnect,$sql);
        if(mysqli_num_rows($select)>0)
        {
          $errors['emailE']='This email is already being used';
        }
      }
		}
    //FNameValidation
    if(empty($_POST['first-name']))
    {
			$errors['FNE'] = 'First Name is required';
		}
    else
    {
			$FNE = $_POST['first-name'];
			if(!preg_match('/^[a-zA-Z\s]+$/', $FNE))
      {
			$errors['FNE'] = 'Name must be letters and spaces only';
			}
    }
    //LNameValidation
    if(empty($_POST['last-name']))
    {
			$errors['LNE'] = 'Last Name is required';
		}
    else
    {
			$LNE = $_POST['last-name'];
			if(!preg_match('/^[a-zA-Z\s]+$/', $LNE))
      {
			$errors['LNE'] = 'Name must be letters and spaces only';
			}
		}
    //PSValidation
    if(empty($_POST['password']))
    {
      $errors['PSE'] = 'Password is required';
    }
    else
    {
      $PS = $_POST['password'];
      $CPS = $_POST['confirm-password'];
      if($PS!=$CPS)
      {
      $errors['PSE'] = "Passwords don't match";
      }
    }
    //GenderValidation
    if(empty($_POST['gender']))
    {
      $errors['GenderE'] = 'Gender is required';
    }
    //DateValidation
    if(empty($_POST['DOB']))
    {
      $errors['DateE'] = 'Date of birth is required';
    }

    if(array_filter($errors))
    {
			echo 'errors in form';
      echo $errors['FNE'];
      echo $errors['LNE'];
      echo $errors['emailE'];
      echo $errors['PSE'];
      echo $errors['DateE'];
      echo $errors['GenderE'];
		} else {
			echo 'form is valid';
			include 'InsertUser.php';
		}
  }
?>
