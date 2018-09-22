<?php

	require('db.php');

	// Создаем новую запись
	// Новые столбцы можно задавать прям здесь. Будут автоматически созданы в БД.
	// $course = R::dispense('courses');
	// $course->title = "Курс по React";
	// $course->tasks = 10;
	// $course->homeworks = 15;
	// $course->level = "Для новичков";
	// $course->price = 100;

	// // Сохраняем в базу
	// R::store($course);

	// Получение данных из БД
	// $result = R::find('courses');
	// // print_r($result);

	// foreach ($result as $course) {
	// 	// print_r($course);

	// 	echo "ID:" . $course->id . "<br>";
	// 	echo "Название:" . $course->title . "<br>";
	// 	echo "Задания:" . $course->tasks . "<br>";
	// 	echo "Домашки:" . $course->homeworks . "<br>";
	// 	echo "Уровень:" . $course->level . "<br>";
	// 	echo "Цена:" . $course->price . "<br>";
	// 	echo "<hr>";
	
	// }

	// Обновление данных в БД
	// Получаем запись с id=10
	// $result = R::load('courses', 9);

	// // echo "ID:" . $result->id . "<br>";
	// // echo "Название:" . $result->title . "<br>";
	// // echo "Задания:" . $result->tasks . "<br>";
	// // echo "Домашки:" . $result->homeworks . "<br>";
	// // echo "Уровень:" . $result->level . "<br>";
	// // echo "Цена:" . $result->price . "<br>";

	// // Изменяем данные записи
	// $result->title = "Курс по JS";
	// $result->tasks = 20;
	// $result->homeworks = 30;
	// $result->level = "Продвинутый";
	// $result->price = 111000;
	// $result->oldprice = 3000;
	// $result->newprice2 = 3000;

	// // Сохраняем изменения в БД
	// R::store($result);

	// Удаляем запси в БД
	// Загружаем запись которую требуются удалить
	$result = R::load('courses', 11);

	R::trash($result);




?>