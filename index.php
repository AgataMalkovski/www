<html>
 <head>
  <title>��������� PHP</title>
 </head>
 <body>
 <?php 
//	phpinfo();
# ������ ������

	echo date('H:i:s'); echo date (' j F Y');
	$numer1 = 21;
	$numer = 'numer1'; $name = "������"; $name_1 = " CCC ";
#	echo '���� ,'; echo $name;
	$name_1 = $name_1 . $name;
	echo "����, $name"; echo $name_1 . "\n";
	echo "\n";
	echo gettype($numer);
	echo "\n";
	echo gettype($name);
	echo '<br>';
	$value = "53 ������� 2014";
	settype($value, "integer");
	echo $value;
	echo '<br>';
	echo 100 + '10 ��������'; 
	echo '<br>';
	echo "-1 �������� $numer ����� ${$numer}";
	echo '<br>';
	echo "-2 �������� " . $numer . " ����� " . $$numer;
	
	$muma = 7;
	if ($numer < 22) {
		echo "$muma ������ 7 ";
		#$muma = 'muma'-1;
		echo '<br>';
	}
	echo '<br>';
	echo '<br>';
	
	$number_3 = 33;
	if ($number_3 > 22 and $number_3 < 99) {
		echo "$number_3 ������ 22 � ������ 99";
	}
 	echo '<br>';
	echo '<br>';
	$time_hour = 12;
	if ($time_hour < 9) {
		echo "���, �� ��� �� ��������!";
	}
	else  {
		echo "������ � ��������!";
	}

 	echo '<br>';
	echo '<br>';
	$hour = date("H");
	if ($hour < 9) {
		echo "����������!";
	}
	elseif ($hour < 12)  {
		echo "����� 12 ��� ���� ����������";
	}
	elseif ($hour < 15)  {
		echo "�� �� ������ ����� �� 15";
	}
	elseif ($hour < 18)  {
		echo "18 ��� - ������ ����";
	}
	elseif ($hour < 22)  {
		echo "�� �� ������� � �� �������?";
	}
 	echo '<br>';
	echo '<br>';
	
	$name_ = "������";
	switch ($name_) {
		case "Winnw":
		case "������":
		case "�������":
			echo "���, �������";
			break;
		case "����":
		case "������":
			echo "��� ����";
			break;
		default :
			echo "��� �����";
	}
 	echo '<br> <br>';

	$count = 1;
	while ($count <=11){
		$square = $count * $count;
		echo "������� $count ����� $square <br>";
		$count++;
	}
	
	echo '<br> <br>';
		
	$count = 1;
	do { 
		$square = $count * $count;
		echo "������� $count ����� $square <br>";
		$count++;
	} while ( $count <=11 );
	
	
	echo '<br> <br>';
		
	for ($count = 1; $count <=11; $count++){
		$square = $count * $count;
		echo "������� $count ����� $square <br>";
	}
	
	function add_tax($amount){
		$total = $amount * 1.2;
		return $total;
	}
	$price = 17.00;
	echo "���� ��� ������: $price <br>";
	echo "���� � �������: ";
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
		echo "$dig1 - ����� �����";
	}
	else {
		echo "$dig1 - �� ����� �����";
	}
	echo "<br><br>";
	$dig3 = "7";
	$dig3++;
	echo "$dig3 ����� ��� " . gettype($dig3);
	
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
	echo "���� 6 ( ��������� ����� .) <br>";
	$phrase ="\"������\", - ������ ����.";
	echo "<br> $phrase <br>" ;
	$phrase ="\"������\", - ������ �.";
	echo $phrase;
	echo "<br>";
	$offer = "���������� \$10 �� ������ �������";
	echo "$offer <br>";
	
	$phrase = "� ���� ";
	$phrase .= " ����� ������ ";
	$phrase .= " ������� PHP Asterisk  MySQL  Java!";
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
#    printf("������� myCity ������� �������.\n");
#	}

	$db = mysql_connect("localhost", "root", "");
	mysql_select_db("lessons", $db);
	$sql = "INSERT INTO 'vacancy' ( id, name, cost) values ('1','Admin Unix', '1200')";
	mysqli_query($sql, $conn);
#	mysql_close($db);

	?>
 </body>
</html>