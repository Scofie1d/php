<?php
$name = readline("Как Вас зовут? ");
$age = readline("Сколько Вам лет? " );
if($age%10 == 1 & $age < 10 || $age > 100){
  echo "Вас зовут {$name}, Вам {$age} год!";
}elseif ($age%10 > 1 & $age%10<=4){
    echo "Вас зовут {$name}, Вам {$age} года!";
}else{
    echo "Вас зовут {$name}, Вам {$age} лет!";
}