<?php
// For security reasons, don't display any errors or warnings. Comment out in DEV.
error_reporting ( 0 );
// start session
session_start ();
class Login {
	// database setup
	// MAKE SURE TO FILL IN DATABASE INFO
	var $hostname_logon = 'localhost'; // Database server LOCATION
	var $database_logon = 'hhtdocuments'; // Database NAME
	var $username_logon = 'root'; // Database USERNAME
	var $password_logon = ''; // Database PASSWORD
	                          
	// table fields
	var $user_table = 'HHT_USERS'; // Users table name
	var $user_id_comumn = 'id'; // The userid on the user autoincremented
	var $user_first_name_column = 'first_name'; // the firstname column
	var $user_last_name_column = 'last_name'; // the lastname column
	var $user_login_column = 'email';
	var $user_password_column = 'password';
	var $user_role_column = 'hht_role';
	var $user_hht_role = 'hht_role'; // (optional) userlevel column
	                                 
	// encryption
	var $encrypt = false; // set to true to use md5 encryption for the password
	                      
	// connect to database
	function dbconnect() {
		$connections = mysql_connect ( $this->hostname_logon, $this->username_logon, $this->password_logon ) or die ( 'Unabale to connect to the database' );
		mysql_select_db ( $this->database_logon ) or die ( 'Unable to select database!' );
		return;
	}
	
	// login function
	function login($table, $username, $password) {
		// conect to DB
		$this->dbconnect ();
		// make sure table name is set
		if ($this->user_table == "") {
			$this->user_table = $table;
		}
		// check if encryption is used
		if ($this->encrypt == true) {
			$password = md5 ( $password );
		}
		// execute login via qry function that prevents MySQL injections
		$result = $this->qry ( "SELECT * FROM " . $this->user_table . " WHERE " . $this->user_login_column . "='?' AND " . $this->user_password_column . " = '?';", $username, $password );
		$row = mysql_fetch_assoc ( $result );
		if ($row != "Error") {
			if ($row [$this->user_column] != "" && $row [$this->pass_column] != "") {
				// register sessions
				// you can add additional sessions here if needed
				$_SESSION ['userId'] = $row [$this->user_id_comumn];
				$_SESSION ['login'] = $row [$this->user_login_column];
				// userlevel session is optional. Use it if you have different user levels
				$_SESSION ['role'] = $row [$this->user_role_column];
				$_SESSION ['first_name'] = $row [$this->user_first_name_column]; // the firstname column
				$_SESSION ['last_name'] = $row [$this->user_last_name_column];
				
				return true;
			} else {
				session_destroy ();
				return false;
			}
		} else {
			return false;
		}
	}
	
	// prevent injection
	function qry($query) {
		$this->dbconnect ();
		$args = func_get_args ();
		$query = array_shift ( $args );
		$query = str_replace ( "?", "%s", $query );
		$args = array_map ( 'mysql_real_escape_string', $args );
		array_unshift ( $args, $query );
		$query = call_user_func_array ( 'sprintf', $args );
		$result = mysql_query ( $query ) or die ( mysql_error () );
		if ($result) {
			return $result;
		} else {
			$error = "Error";
			return $result;
		}
	}
	
	// logout function
	function logout() {
		session_destroy ();
		return;
	}
	
	// check if loggedin
	function logincheck($logincode, $user_table, $user_password_column, $user_login_column) {
		// conect to DB
		$this->dbconnect ();
		// make sure password column and table are set
		if ($this->user_password_column == "") {
			$this->user_password_column = $user_password_column;
		}
		if ($this->user_login_column == "") {
			$this->user_login_column = $user_login_column;
		}
		if ($this->user_table == "") {
			$this->user_table = $user_table;
		}
		// exectue query
		$result = $this->qry ( "SELECT * FROM " . $this->user_table . " WHERE " . $this->user_password_column . " = '?';", $logincode );
		$rownum = mysql_num_rows ( $result );
		// return true if logged in and false if not
		if ($row != "Error") {
			if ($rownum > 0) {
				return true;
			} else {
				return false;
			}
		}
	}
	
	// reset password
	function passwordreset($username, $user_table, $user_password_column, $user_login_column) {
		// conect to DB
		$this->dbconnect ();
		// generate new password
		$newpassword = $this->createPassword ();
		
		// make sure password column and table are set
		if ($this->user_password_column == "") {
			$this->user_password_column = $user_password_column;
		}
		if ($this->user_login_column == "") {
			$this->user_login_column = $user_login_column;
		}
		if ($this->user_table == "") {
			$this->user_table = $user_table;
		}
		// check if encryption is used
		if ($this->encrypt == true) {
			$newpassword_db = md5 ( $newpassword );
		} else {
			$newpassword_db = $newpassword;
		}
		
		// update database with new password
		$qry = "UPDATE " . $this->user_table . " SET " . $this->user_password_colum . "='" . $newpassword_db . "' WHERE " . $this->user_login_column . "='" . stripslashes ( $username ) . "'";
		$result = mysql_query ( $qry ) or die ( mysql_error () );
	}
}

// create random password with 8 alphanumerical characters
function createPassword() {
	$chars = "abcdefghijkmnopqrstuvwxyz023456789";
	srand ( ( double ) microtime () * 1000000 );
	$i = 0;
	$pass = '';
	while ( $i <= 7 ) {
		$num = rand () % 33;
		$tmp = substr ( $chars, $num, 1 );
		$pass = $pass . $tmp;
		$i ++;
	}
	return $pass;
}

// login form
function loginform($formname, $formclass, $formaction) {
	// conect to DB
	$this->dbconnect ();
	echo '
<form name="' . $formname . '" method="post" id="' . $formname . '" class="' . $formclass . '" enctype="application/x-www-form-urlencoded" action="' . $formaction . '">
<div><label for="username">Username</label>
<input name="username" id="username" type="text"></div>
<div><label for="password">Password</label>
<input name="password" id="password" type="password"></div>
<input name="action" id="action" value="login" type="hidden">
<div>
<input name="submit" id="submit" value="Login" type="submit"></div>
</form>
 
';
}
// reset password form
function resetform($formname, $formclass, $formaction) {
	// conect to DB
	$this->dbconnect ();
	echo '
<form name="' . $formname . '" method="post" id="' . $formname . '" class="' . $formclass . '" enctype="application/x-www-form-urlencoded" action="' . $formaction . '">
<div><label for="username">Username</label>
<input name="username" id="username" type="text"></div>
<input name="action" id="action" value="resetlogin" type="hidden">
<div>
<input name="submit" id="submit" value="Reset Password" type="submit"></div>
</form>
 
';
}

?>