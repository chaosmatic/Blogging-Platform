<?php
require_once('head.php');

if (isset($_POST['password'])){

	$title = $_POST['title'];
	$dblocation = mysql_escape_string($_POST['dblocation']);
	$dbname = mysql_escape_string($_POST['dbname']);
	$dbusername = mysql_escape_string($_POST['dbusername']);
	$dbpassword = mysql_escape_string($_POST['dbpassword']);
	$rootdbusername = mysql_escape_string($_POST['rootdbusername']);
	$rootdbpassword = mysql_escape_string($_POST['rootdbpassword']);


	$titleLine = " define('TITLE','".$title."');";
	$dblocationLine = "define('DB_DSN','mysql:host=".$dblocation.";dbname=".$dbname."');";
	$dbuserLine = "define('DB_USR','".$dbusername."');";
	$dbpasswordLine = "define('DB_PWD','".$dbpassword."');";

	$configFile = fopen('../../config/config.php','w');
	fwrite($configFile,"<?php ");
	fwrite($configFile," ");
	fwrite($configFile,$titleLine);
	fwrite($configFile,$dblocationLine);
	fwrite($configFile,$dbuserLine);
	fwrite($configFile,$dbpasswordLine);
	fwrite($configFile," ?>");
	fclose($configFile);

    try {
        $dbh = new PDO('mysql:host='.$dblocation.';', $rootdbusername, $rootdbpassword);

        $dbh->exec("CREATE DATABASE `$dbname`;
                CREATE USER '".$dbusername."'@'".$dblocation."' IDENTIFIED BY '".$dbpassword."';
                GRANT ALL ON `".$dbname."`.* TO '".$dbusername."'@'".$dblocation."';
                FLUSH PRIVILEGES;") 
        or die(print_r($dbh->errorInfo(), true));

    } catch (PDOException $e) {
        die("DB ERROR: ". $e->getMessage());
    }

	
	$command = "mysql -u{$_POST['dbusername']} -p{$_POST['dbpassword']} "
	. "-h {$_POST['dblocation']} -D {$_POST['dbname']} < {$script}";
	$output = shell_exec($command . 'Blogging-Platform.sql');

	$password= $_POST["password"];
	$password1 = $_POST["password1"];

	require_once('user.php');
	require_once('database.php');
	$fulldbh = new databaseaccess;
	$user = new user($fulldbh);
	$user->changePassword($password,$password1);

	echo "Setup was successful";


}else{
	?>
	Hi there, it looks like this is the first time Blogging Platform is running on this web server. Please fill out the details below to complete the installation.
	<p>
	Make sure that the server user (typically www-data) has write permission to the folder.
	<form method="post" action="setup.php">
	Blog title:<br><input type="text" size="50" maxlength="50" name="title"><br>
	Password for Admin user:<br><input type="password" size="50" maxlength="50" name="password"><br>
	Password again:<br><input type="password" size="50" maxlength="50" name="password1"><br>
	Database location (IP address):<br><input type="text" size="50" maxlength="50" name="dblocation"><br>
	Database name (name of DB to be created in MySQL):<br><input type="text" size="50" maxlength="50" name="dbname"><br>
	Database root username (enter root login details for MySQL):<br><input type="text" size="50" maxlength="50" name="rootdbusername"><br>
	Database root Password (enter root login details for MySQL):<br><input type="password" size="50" maxlength="50" name="rootdbpassword"><br>
	Database username (enter new user login details):<br><input type="text" size="50" maxlength="50" name="dbusername"><br>
	Database Password (enter new user login details for MySQL):<br><input type="password" size="50" maxlength="50" name="dbpassword"><br>
	<input type="submit" value="submit" name="submit">
	</form>
	You may also wish to edit colours.css to change the colours of certain items.
	<?php
}