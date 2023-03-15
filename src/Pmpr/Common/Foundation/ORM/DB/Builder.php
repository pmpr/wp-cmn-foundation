<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             641183e17ed46             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\ORM\DB; use Illuminate\Database\Query\Builder as BaseClass; class Builder extends BaseClass { public function addWhereExistsQuery($gqgemcmoicmgaqie, $qsycuegoicqcqkmo = "\141\x6e\144", $mqogqgswmasasmik = false) : Builder { $sqeykgyoooqysmca = $mqogqgswmasasmik ? "\x4e\x6f\164\105\170\x69\x73\x74\163" : "\105\170\151\x73\x74\163"; $this->wheres[] = compact("\164\x79\160\145", "\x71\x75\145\x72\171", "\x62\x6f\157\154\x65\x61\x6e"); $iykmscciaowcagqu = $gqgemcmoicmgaqie->getBindings(); $this->addBinding($iykmscciaowcagqu); return $this; } public function cokoiaeeomgssqgy($aasascamegmwqmqk) : string { $mgcmmwqwguicsews = $this->getConnection(); if (!$mgcmmwqwguicsews instanceof Database) { goto wugeaooaequcowwc; } $aasascamegmwqmqk = $mgcmmwqwguicsews->cokoiaeeomgssqgy($aasascamegmwqmqk); wugeaooaequcowwc: return $aasascamegmwqmqk; } }
