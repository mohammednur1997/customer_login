	


	<?php
	$server='localhost';
	$username='root';
	$password='';
	$dbname='user';
	$link=mysqli_connect($server,$username,$password,$dbname);
	if(!$link)
	{
       echo'faild to connect database:'.mysqli_connect_error($link);
	}
    //take data from user
    $email=$_POST['email'];
    $password=$_POST['password'];

     //sql ar jonno csss code
	$sql="SELECT * FROM person WHERE email='$email' && password='$password'";
	$result=mysqli_query($link,$sql);
	$num=mysqli_num_rows($result);
	if($num==1)
	{
		session_start();
        header('location:../loder.html');
        $_SESSION['username']=$email;
 
	}else
	{
         echo "your username and password is incorret,
        <a href='login.html'>Login Again</a>";
	}
	mysqli_close($link);

	?>
	