<?php

/**
 * Абстрактный класс AdminBase содержит общую логику для контроллера,
 * которые используется в панели администратора
 * */
abstract class AdminBase {
	/**
	 * Метод, проверяет, является ли пользователь администратором
	 * @return boolean
	 * */
	public static function checkAdmin() {

		// Проверяем авторизирован ли пользователь, если нет, то переадрисуем
		$userId = User::checkLogged();

		// Получаем информацию о текущем пользователе
		$user = User::getUserById($userId);

		// Если роль текущего пользователя "admin", lftv ljcneg d flvby gfytkm
		if ($user['role'] == 'admin') {
			return true;
		}
		// Иначе завершаем работу с сообщением о закрытом доступе
		die('Access denied');
	}
}