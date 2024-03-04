<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             65e5235100c8b             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\ORM\DB; use Illuminate\Database\Query\Builder as BaseClass; class Builder extends BaseClass { public function addWhereExistsQuery($gqgemcmoicmgaqie, $qsycuegoicqcqkmo = "\x61\156\144", $mqogqgswmasasmik = false) : Builder { $sqeykgyoooqysmca = $mqogqgswmasasmik ? "\116\157\164\105\x78\151\163\164\x73" : "\x45\170\x69\163\x74\163"; $this->wheres[] = compact("\x74\171\x70\145", "\x71\x75\145\162\x79", "\x62\157\157\154\x65\141\x6e"); $iykmscciaowcagqu = $gqgemcmoicmgaqie->getBindings(); $this->addBinding($iykmscciaowcagqu); return $this; } public function cokoiaeeomgssqgy($aasascamegmwqmqk) : string { $mgcmmwqwguicsews = $this->getConnection(); if (!$mgcmmwqwguicsews instanceof Database) { goto wucqauasuekkoayw; } $aasascamegmwqmqk = $mgcmmwqwguicsews->cokoiaeeomgssqgy($aasascamegmwqmqk); wucqauasuekkoayw: return $aasascamegmwqmqk; } }
