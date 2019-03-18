<?php
/**
 * Created by PhpStorm.
 * User: Katriin
 * Date: 18.03.2019
 * Time: 13:31
 */
$login = new Template('login');
$login->set('username', 'User');
$login->set('password', 'Pass');
$login->set('button', 'Log In');
$link = $http->getLink(array('controller' => 'login_do'));
$login->set('link', $link);
$mainContent->set('content', $login->parse());