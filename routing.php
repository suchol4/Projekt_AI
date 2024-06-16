<?php

use core\App;
use core\Utils;

App::getRouter()->setDefaultRoute('userList'); // akcja/ścieżka domyślna
App::getRouter()->setLoginRoute('login'); // akcja/ścieżka na potrzeby logowania (przekierowanie, gdy nie ma dostępu)

Utils::addRoute('userList',    'userListCtrl');
Utils::addRoute('userListPart','userListCtrl');
Utils::addRoute('loginShow',     'LoginCtrl');
Utils::addRoute('login',         'LoginCtrl');
Utils::addRoute('logout',        'LoginCtrl');
Utils::addRoute('userNew',     'userEditCtrl',	['user','admin']);
Utils::addRoute('userEdit',    'userEditCtrl',	['user','admin']);
Utils::addRoute('userSave',    'userEditCtrl',	['user','admin']);
Utils::addRoute('userDelete',  'userEditCtrl',	['admin']);