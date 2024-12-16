<?php

include "App.php"

// Создание объекта и тестирование магических методов
echo "<h2>Пример использования магических методов:</h2>";

$obj = new MagicMethodsExample();  // Вызов конструктора
echo "<br>";

$obj->nonExistentMethod('arg1', 'arg2');  // Вызов несуществующего метода
echo "<br>";

$obj->nonExistentProperty = 'Some Value';  // Присваивание несуществующего свойства
echo "<br>";

echo isset($obj->nonExistentProperty) ? 'Свойство существует' : 'Свойство не существует';  // Проверка на существование свойства
echo "<br>";

unset($obj->nonExistentProperty);  // Удаление несуществующего свойства
echo "<br>";

echo $obj;  // Преобразование объекта в строку
echo "<br>";

MagicMethodsExample::staticMethod('staticArg1');  // Вызов статического метода
echo "<br>";

$clonedObj = clone $obj;  // Клонирование объекта
echo "<br>";

unset($obj);  // Уничтожение объекта

?>
