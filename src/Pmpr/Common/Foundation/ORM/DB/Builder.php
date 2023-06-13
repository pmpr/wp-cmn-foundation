<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             648879b8b8674             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\ORM\DB; use Illuminate\Database\Query\Builder as BaseClass; class Builder extends BaseClass { public function addWhereExistsQuery($gqgemcmoicmgaqie, $qsycuegoicqcqkmo = "\x61\x6e\144", $mqogqgswmasasmik = false) : Builder { $sqeykgyoooqysmca = $mqogqgswmasasmik ? "\x4e\x6f\164\105\170\151\x73\x74\x73" : "\105\170\x69\163\164\163"; $this->wheres[] = compact("\164\171\160\x65", "\161\165\x65\162\171", "\x62\157\157\154\145\141\156"); $iykmscciaowcagqu = $gqgemcmoicmgaqie->getBindings(); $this->addBinding($iykmscciaowcagqu); return $this; } public function cokoiaeeomgssqgy($aasascamegmwqmqk) : string { $mgcmmwqwguicsews = $this->getConnection(); if (!$mgcmmwqwguicsews instanceof Database) { goto imymswaceomsasks; } $aasascamegmwqmqk = $mgcmmwqwguicsews->cokoiaeeomgssqgy($aasascamegmwqmqk); imymswaceomsasks: return $aasascamegmwqmqk; } }
