<?php
/**
 * Created by PhpStorm.
 * User: Katriin
 * Date: 18.03.2019
 * Time: 13:54
 */
$nav = new Template('nav.nav');
$item = new Template('nav.item');
$item->set('name', 'Main Page');
$link = $http->getLink(array('controller' => 'main'));
$item->set('link', $link);
$nav->add('items', $item->parse());
$item->set('name', 'Contact');
$link = $http->getLink(array('controller' => 'contact'));
$item->set('link', $link);
$nav->add('items', $item->parse());
$item->set('name', 'Log In');
$link = $http->getLink(array('controller' => 'login'));
$item->set('link', $link);
$nav->add('items', $item->parse());
$mainContent->set('nav', $nav->parse());