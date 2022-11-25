<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

use \Bitrix\Main\Loader;
use \Bitrix\Main\LoaderException;

class news extends CBitrixComponent {
	public function executeComponent() {
		$this->IncludeComponentTemplate();
	}
}

?>