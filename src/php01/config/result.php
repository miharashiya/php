<?php
$my_name = htmlspecialchars($_POST['user_name'], ENT_QUOTES);
$choices = htmlspecialchars($_POST['selection'], ENT_QUOTES);
$number = htmlspecialchars($_POST['number'], ENT_QUOTES);

print "私の名前は、" . $user_name . "<br>";
print "ご希望の商品は、" . $selection . "<br>";
print "注文数は、" . $number;
