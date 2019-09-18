<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>Document</title>
	</head>

	<body>
		<?php
		echo '<h1>Practice</h1>';
		
		$students = array("Fatima", "Mariyam", "Abiha", "Hussain", "Ali", "Khurram", "Zehra", "Dua", "Insiya", "Kazim");
		echo $students[2];
		echo '<br/>';
		$counting = count($students);
		echo $counting;
		echo '<br/>';
		foreach($students as $skeys => $singlestudent){
			echo $skeys.':';
			
			echo $singlestudent;
			echo '<br/>';
		}
			echo '------****--------';
			echo '<br/>';
		for($x=0;$x<$counting;$x++){
			
			echo $students[$x];
			echo '<br/>';
		}
		
		$fruits = array('apple','orange','banana','watermelon','melon','strawberry','grapes','papaya','plum','pear','apricot','peach','coconut','cherry','mango','tomato','chilli');
		$count = count($fruits);
		echo $count;
		echo '<br/>';
		$fruits[5]=555;//for change the value of decsribed key
		foreach($fruits as $key => $fruit){
			echo $key . ':';
			echo $fruit;
			echo '<br/>';
			
		}
		echo sizeof($fruits).'function';
		echo '<br/>';
			
		for($x = 0; $x < $count;$x++){
			echo $fruits[$x];
			echo '<br/>';
		}
		var_dump($fruits);
		?>
	</body>
</html>	