    <?php
        echo '<h2> "Завдання №1": </h2>' ;
        echo '<br>';
        echo '<h3> «Я вивчаю PHP!» </h3>';

        echo '<br>';
        echo '<h2> "Завдання №2": </h2>' ;
        
        for($a = 1; $a <= 10; $a++ ){
            for($b = 1; $b <= 10; $b++){
                echo "$a * $b = " . $a * $b ;
                  echo '</br>' ;
            }
            echo '<br>' ;
        }

        echo '<br>';
        echo '<h2> "Завдання №3": </h2>' ;
        $array = array(0,2,-3,5); //Створення масиву
        var_dump($array); //Виведення масиву в рядок
        echo '<br>' ;
        print_r($array); //Виведення масиву через ф-ю print_r
        echo '<p>' ;
        foreach ($array as $value) { //Виведення масиву у стовпчик
			echo $value . '<br>';
		}
        echo '<p>'.'Сума всіх елементів масиву = ' ;
        echo array_sum($array).';';
        echo '<p>'.'Середнє арифметичне = ';
        $sum = 0;
        $mult = 1;
        foreach ($array as $value){
            $sum += $value;
        }
        $avarage = $sum/count($array);
        echo $avarage;
        echo '</br>';

        foreach ($array as $value){
            if($value > $avarage){
                $mult *= $value;
            }
        }
        echo "Добуток чисел, більших за середнє арифметичне: ";
        echo $mult;
    ?>

