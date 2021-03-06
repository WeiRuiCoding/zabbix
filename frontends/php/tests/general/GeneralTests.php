<?php
/*
** Zabbix
** Copyright (C) 2001-2019 Zabbix SIA
**
** This program is free software; you can redistribute it and/or modify
** it under the terms of the GNU General Public License as published by
** the Free Software Foundation; either version 2 of the License, or
** (at your option) any later version.
**
** This program is distributed in the hope that it will be useful,
** but WITHOUT ANY WARRANTY; without even the implied warranty of
** MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
** GNU General Public License for more details.
**
** You should have received a copy of the GNU General Public License
** along with this program; if not, write to the Free Software
** Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
**/


require_once dirname(__FILE__).'/function_DBcommit.php';
require_once dirname(__FILE__).'/function_DBconnect.php';
require_once dirname(__FILE__).'/function_DBclose.php';
require_once dirname(__FILE__).'/function_DBend.php';
require_once dirname(__FILE__).'/function_DBexecute.php';
require_once dirname(__FILE__).'/function_DBfetch.php';
require_once dirname(__FILE__).'/function_DBloadfile.php';
require_once dirname(__FILE__).'/function_DBrollback.php';
require_once dirname(__FILE__).'/function_DBselect.php';
require_once dirname(__FILE__).'/function_DBstart.php';
require_once dirname(__FILE__).'/zbx_dbcast_2bigintTest.php';
require_once dirname(__FILE__).'/dbConditionIntTest.php';
require_once dirname(__FILE__).'/dbConditionIdTest.php';
require_once dirname(__FILE__).'/dbConditionStringTest.php';
require_once dirname(__FILE__).'/testHistoryManager.php';
// require_once dirname(__FILE__).'/urlParamTest.php';

class GeneralTests {

	public static function suite() {
		$suite = new PHPUnit_Framework_TestSuite('general');

		$suite->addTestSuite('function_DBcommit');
		$suite->addTestSuite('function_DBconnect');
		$suite->addTestSuite('function_DBclose');
		$suite->addTestSuite('function_DBend');
		$suite->addTestSuite('function_DBexecute');
		$suite->addTestSuite('function_DBfetch');
		$suite->addTestSuite('function_DBloadfile');
		$suite->addTestSuite('function_DBrollback');
		$suite->addTestSuite('function_DBselect');
		$suite->addTestSuite('function_DBstart');
		$suite->addTestSuite('zbx_dbcast_2bigintTest');
		$suite->addTestSuite('dbConditionIntTest');
		$suite->addTestSuite('dbConditionIdTest');
		$suite->addTestSuite('dbConditionStringTest');
		$suite->addTestSuite('testHistoryManager');
//		$suite->addTestSuite('urlParamTest');

		return $suite;
	}
}
