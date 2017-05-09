<?php

$auth = new \Core\Auth\DBAuth(App::getInstance()->getDb());
$auth->disconnected();