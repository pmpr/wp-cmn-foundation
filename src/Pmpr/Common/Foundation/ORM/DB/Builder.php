<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             640d020920cd1             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\ORM\DB; use Illuminate\Database\Query\Builder as BaseClass; class Builder extends BaseClass { public function addWhereExistsQuery($gqgemcmoicmgaqie, $qsycuegoicqcqkmo = "\x61\156\x64", $mqogqgswmasasmik = false) : Builder { $sqeykgyoooqysmca = $mqogqgswmasasmik ? "\116\157\x74\x45\x78\151\x73\x74\163" : "\105\170\151\x73\x74\163"; $this->wheres[] = compact("\164\171\x70\145", "\x71\x75\x65\162\x79", "\x62\x6f\x6f\154\145\x61\x6e"); $iykmscciaowcagqu = $gqgemcmoicmgaqie->getBindings(); $this->addBinding($iykmscciaowcagqu); return $this; } public function cokoiaeeomgssqgy($aasascamegmwqmqk) : string { $mgcmmwqwguicsews = $this->getConnection(); if (!$mgcmmwqwguicsews instanceof Database) { goto wqmwcuggcisqieao; } $aasascamegmwqmqk = $mgcmmwqwguicsews->cokoiaeeomgssqgy($aasascamegmwqmqk); wqmwcuggcisqieao: return $aasascamegmwqmqk; } }
