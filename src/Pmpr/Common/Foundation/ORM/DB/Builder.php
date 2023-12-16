<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             657d6bb4c8522             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\ORM\DB; use Illuminate\Database\Query\Builder as BaseClass; class Builder extends BaseClass { public function addWhereExistsQuery($gqgemcmoicmgaqie, $qsycuegoicqcqkmo = "\x61\156\x64", $mqogqgswmasasmik = false) : Builder { $sqeykgyoooqysmca = $mqogqgswmasasmik ? "\x4e\157\164\105\x78\x69\163\164\x73" : "\105\x78\151\163\x74\x73"; $this->wheres[] = compact("\x74\171\160\145", "\x71\x75\145\x72\171", "\x62\157\157\154\145\x61\x6e"); $iykmscciaowcagqu = $gqgemcmoicmgaqie->getBindings(); $this->addBinding($iykmscciaowcagqu); return $this; } public function cokoiaeeomgssqgy($aasascamegmwqmqk) : string { $mgcmmwqwguicsews = $this->getConnection(); if (!$mgcmmwqwguicsews instanceof Database) { goto gsikauqawyoasewq; } $aasascamegmwqmqk = $mgcmmwqwguicsews->cokoiaeeomgssqgy($aasascamegmwqmqk); gsikauqawyoasewq: return $aasascamegmwqmqk; } }
