<?php
if(isset($_POST['submit'])) {
	$name = $_POST['name'];
	$gender = $_POST['gender'] === 'male' ? 'hombre' : 'seňora';

	echo "<h1>Hi {$gender} {$name}!</h1>";
}
?>

<form action="/" method="POST" id="hi_form">

	Your name: <input type="text" name="name" value="<?=isset($_POST['name']) ? $_POST['name'] : ''?>">

	<br><br>

	Your gender: <select name="gender">
		<option value="male">Male</option>
		<option value="female">Female</option>
	</select>

	<br><br>

	<input type="submit" value="Say hi to me!" name="submit">
</form>
