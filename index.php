<html>
 <head>
  <title>Тестируем PHP</title>
 </head>
 <body>
 <?php 
//	phpinfo();
# полная лабуда

	echo date('H:i:s'); echo date (' j F Y');
	$numer1 = 21;
	$numer = 'numer1'; $name = "Лариса"; $name_1 = " CCC ";
#	echo 'Трям ,'; echo $name;
	$name_1 = $name_1 . $name;
	echo "Трям, $name"; echo $name_1 . "\n";
	echo "\n";
	echo gettype($numer);
	echo "\n";
	echo gettype($name);
	echo '<br>';
	$value = "53 февраля 2014";
	settype($value, "integer");
	echo $value;
	echo '<br>';
	echo 100 + '10 попугаев'; 
	echo '<br>';
	echo "-1 Значение $numer равно ${$numer}";
	echo '<br>';
	echo "-2 Значение " . $numer . " равно " . $$numer;
	
	$muma = 7;
	if ($numer < 22) {
		echo "$muma меньше 7 ";
		#$muma = 'muma'-1;
		echo '<br>';
	}
	echo '<br>';
	echo '<br>';
	
	$number_3 = 33;
	if ($number_3 > 22 and $number_3 < 99) {
		echo "$number_3 больше 22 и меньше 99";
	}
 	echo '<br>';
	echo '<br>';
	$time_hour = 12;
	if ($time_hour < 9) {
		echo "вау, ты ужо не дрыхнешь!";
	}
	else  {
		echo "можешь н вставать!";
	}

 	echo '<br>';
	echo '<br>';
	$hour = date("H");
	if ($hour < 9) {
		echo "впечатляет!";
	}
	elseif ($hour < 12)  {
		echo "нуууу 12 это тоже показатель";
	}
	elseif ($hour < 15)  {
		echo "да ты турист спать до 15";
	}
	elseif ($hour < 18)  {
		echo "18 уже - домаой пора";
	}
	elseif ($hour < 22)  {
		echo "ты за работой и за ночуешь?";
	}
 	echo '<br>';
	echo '<br>';
	
	$name_ = "Нефакт";
	switch ($name_) {
		case "Winnw":
		case "Нефакт":
		case "Дружаня":
			echo "Вау, гильдия";
			break;
		case "Буря":
		case "Негрос":
			echo "ПНХ жидо";
			break;
		default :
			echo "ПНХ пуХло";
	}
 	echo '<br> <br>';

	$count = 1;
	while ($count <=11){
		$square = $count * $count;
		echo "Квадрат $count равен $square <br>";
		$count++;
	}
	
	echo '<br> <br>';
		
	$count = 1;
	do { 
		$square = $count * $count;
		echo "Квадрат $count равен $square <br>";
		$count++;
	} while ( $count <=11 );
	
	
	echo '<br> <br>';
		
	for ($count = 1; $count <=11; $count++){
		$square = $count * $count;
		echo "Квадрат $count равен $square <br>";
	}
	
	function add_tax($amount){
		$total = $amount * 1.2;
		return $total;
	}
	$price = 17.00;
	echo "Цена без налога: $price <br>";
	echo "Цена с налогом: ";
	echo add_tax($price);
	
	echo '<br> <br>';
	
	echo 7 / 4;
	$dig1 = '7';
	$dig2 = '5';
	echo '<br>';
	echo "$dig1 % $dig2 = "; echo '<br>';
	echo $dig1 % $dig2;

	echo '<br> <br>';
	echo "dig1 = $dig1 ; dig2 = $dig2"; echo "<br>";
	echo $dig1 += $dig2; echo "<br>";
	echo $dig1 -= $dig2; echo "<br>";
	echo $dig1 *= $dig2; echo "<br>";
	echo $dig1 /= $dig2; echo "<br>";
	
	echo "<br>";echo "<br>";
	echo $dig1;
	echo "<br>";echo "<br>";
	echo --$dig1; echo "<br>";
	echo $dig1--;
	
	echo "<br>";echo "<br>";
	echo "$dig1 <br>";
	
	echo $dig1 = $dig1 + 3;
	echo "<br>";echo "<br>";
	echo 3 * (4 + 5); 
	echo "<br><br>";
	if (is_int($dig1)){
		echo "$dig1 - целое число";
	}
	else {
		echo "$dig1 - не целое число";
	}
	echo "<br><br>";
	$dig3 = "7";
	$dig3++;
	echo "$dig3 имеет тип " . gettype($dig3);
	
	$dig4 = 2.3;
	echo "<br>";
	echo ceil ($dig4);
	echo "<br>";
	echo floor ($dig4);
	
	echo "<br> round";
	$distance = 2834;
	echo round($distance, 2);
	echo "<br>";
	echo round($distance, -1);
	
	echo "<br> max min " ;
	
	$dig5 = 5; $dig6 = 84;
	echo "<br>" . max ($dig5, $dig6, 75, 3); 
	
	echo "<br>" . min ($dig5, $dig6, 75, 7);
	
	echo "<br>";
	for ($cix =1; $cix <=15; $cix++){
	echo " $cix = " .rand (1,100);
	}
	echo "<br>";
	echo "Урок 6 ( Обработка строк .) <br>";
	$phrase ="\"Привет\", - сказал Вася.";
	echo "<br> $phrase <br>" ;
	$phrase ="\"Привет\", - сказал я.";
	echo $phrase;
	echo "<br>";
	$offer = "Сэкономьте \$10 на первом покупка";
	echo "$offer <br>";
	
	$phrase = "Я хочу ";
	$phrase .= " очень сильно ";
	$phrase .= " выучить PHP Asterisk  MySQL  Java!";
	echo "$phrase <br>";
	
	$last_word = "Boggle";
	if ($last_word < "G") {
		echo " Do G ";
	}
	else {
		echo " Posle G ";
	}
	echo "<br>";
	echo "Lesson 19 - connect to mysql db.";

#	$link = mysqli_connect("localhost", "root", "","lessons");
#	if (mysqli_query($link, "INSERT INTO 'vacancy' ( id, name, cost) values ('1','Admin Unix', '1200')") === TRUE) {
#    printf("Таблица myCity успешно создана.\n");
#	}

	$db = mysql_connect("localhost", "root", "");
	mysql_select_db("lessons", $db);
	$sql = "INSERT INTO 'vacancy' ( id, name, cost) values ('1','Admin Unix', '1200')";
	mysqli_query($sql, $conn);
#	mysql_close($db);

	?>
 </body>
</html>