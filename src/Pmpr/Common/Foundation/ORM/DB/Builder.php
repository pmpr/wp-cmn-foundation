<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63ee0e20c7576             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\ORM\DB; use Illuminate\Database\Query\Builder as BaseClass; class Builder extends BaseClass { public function addWhereExistsQuery($gqgemcmoicmgaqie, $qsycuegoicqcqkmo = "\141\x6e\144", $mqogqgswmasasmik = false) : Builder { $sqeykgyoooqysmca = $mqogqgswmasasmik ? "\116\x6f\164\x45\x78\151\163\x74\x73" : "\105\170\151\163\164\163"; $this->wheres[] = compact("\x74\171\x70\145", "\161\x75\x65\x72\171", "\x62\157\x6f\154\x65\x61\156"); $iykmscciaowcagqu = $gqgemcmoicmgaqie->getBindings(); $this->addBinding($iykmscciaowcagqu); return $this; } public function cokoiaeeomgssqgy($aasascamegmwqmqk) : string { $mgcmmwqwguicsews = $this->getConnection(); if (!$mgcmmwqwguicsews instanceof Database) { goto weiwkwaagqqcwkoq; } $aasascamegmwqmqk = $mgcmmwqwguicsews->cokoiaeeomgssqgy($aasascamegmwqmqk); weiwkwaagqqcwkoq: return $aasascamegmwqmqk; } }
