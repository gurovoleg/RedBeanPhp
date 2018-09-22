<?php 

	// Подключаем библиотеку RedBeanPhp
	require('libs/rb-mysql.php');

	R::setup('mysql:host=localhost;dbname=school','root','root');

	// Замораживаем БД (не даем возможность добавлять новые поля)
	// R::freeze( TRUE );
	
	// Замораживаем  указанные таблицы БД (не даем возможность добавлять новые поля)
	// R::freeze( ['courses'] );

?>