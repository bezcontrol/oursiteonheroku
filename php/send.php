<?php
$fio = $_POST['fio'];
$email = $_POST['email'];
$fio = htmlspecialchars($fio);
$email = htmlspecialchars($email);
$fio = urldecode($fio);
$email = urldecode($email);
$fio = trim($fio);
$email = trim($email);
//echo $fio;
//echo "<br>";
//echo $email;
if (mail("krchau.alex@gmail.ru", "������ � �����", "���:".$fio.". E-mail: ".$email ,"From: oleksii.baklanov@nure.ua \r\n"))
 {     echo "��������� ������� ����������"; 
} else { 
    echo "��� �������� ��������� �������� ������";
}?>