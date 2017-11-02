/* Задание */
/* Создать класс с названием Car внутри этого класса создать функцию под названием Models которая должна возвращать массив данных (Простой массив) */
/* Создать форму ввода с полем (Название модели) и кнопка отправки */
/* Все это дело пропушить в массив после сабмита формы */
   

   <form method="post">
    <div class="">
         <input type="text" name="marka" placeholder="Марка">
         <input type="text" name="model" placeholder="Модель">
    </div>
    <button type="submit">Отправить</button>
</form>

<?php 
class Car {
	function Models() {
        $array = [];
        $array = ['Toyota' => 'Corowa', 'Mercedes' => 'e230', 'Mitsubishi' => 'Pajero'];
        
        return $array;
	}
}
$model=''; $marka='';
if(!empty($_POST['model']) and !empty($_POST['marka'])) {
    $model = $_POST['model'];
    $marka = $_POST['marka'];
}
$car = new Car;
$array = $car->models();
array_push($array, [$marka => $model]);
print_r($array);
---------------------------------------------------------------------------------------------------------------------------
       <form method="post">
    <div class="">
         <input type="text" name="op1" placeholder="">
         <input type="text" name="op2" placeholder="">
    </div>
    <button type="submit">Отправить</button>
</form>

<?php 
class Car {
	function Models() {
        $array = [];
        
        return $array;
	}
}
$sum = 0;
if(!empty($_POST['op1']) and !empty($_POST['op2'])) {
    $op1 = $_POST['op1'];
    $op2 = $_POST['op2'];
    $sum = $op1 + $op2;
}
$car = new Car;
$array = $car->models();
array_push($array, $sum);
print_r($array);