<?php

class MagicMethodsExample {

    // Магический метод для вызова несуществующего метода
    public function __call($name, $arguments) {
        echo "__call: Вызван метод $name с аргументами: " . implode(', ', $arguments) . "<br>";
    }

    // Магический метод для обращения к несуществующему свойству
    public function __get($name) {
        echo "__get: Обращение к несуществующему свойству $name<br>";
    }

    // Магический метод для присваивания значения несуществующему свойству
    public function __set($name, $value) {
        echo "__set: Присваивание значения '$value' свойству $name<br>";
    }

    // Магический метод для проверки существования свойства
    public function __isset($name) {
        echo "__isset: Проверка существования свойства $name<br>";
        return false;  // Возвращаем false, т.к. свойство не существует
    }

    // Магический метод для очистки (unset) несуществующего свойства
    public function __unset($name) {
        echo "__unset: Очистка свойства $name<br>";
    }

    // Магический метод для преобразования объекта в строку
    public function __toString() {
        return "__toString: Этот объект преобразован в строку<br>";
    }

    // Магический метод для вызова недоступного метода
    public static function __callStatic($name, $arguments) {
        echo "__callStatic: Вызван статический метод $name с аргументами: " . implode(', ', $arguments) . "<br>";
    }

    // Магический метод для клонирования объекта
    public function __clone() {
        echo "__clone: Объект был клонирован<br>";
    }

    // Магический метод для уничтожения объекта
    public function __destruct() {
        echo "__destruct: Объект был уничтожен<br>";
    }

    // Магический метод для конструирования объекта
    public function __construct() {
        echo "__construct: Конструктор объекта был вызван<br>";
    }
}

?>



