<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             626fa2aa17411             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\ORM\DB; use Illuminate\Database\Query\Builder as BaseClass; class Builder extends BaseClass { public function addWhereExistsQuery($gqgemcmoicmgaqie, $qsycuegoicqcqkmo = "\x61\156\144", $mqogqgswmasasmik = false) : Builder { $sqeykgyoooqysmca = $mqogqgswmasasmik ? "\116\157\x74\105\x78\x69\163\x74\163" : "\105\170\x69\x73\164\x73"; $this->wheres[] = compact("\x74\171\160\145", "\161\165\x65\162\171", "\x62\x6f\x6f\154\145\x61\x6e"); $iykmscciaowcagqu = $gqgemcmoicmgaqie->getBindings(); $this->addBinding($iykmscciaowcagqu); return $this; } public function cokoiaeeomgssqgy($aasascamegmwqmqk) : string { $mgcmmwqwguicsews = $this->getConnection(); if (!$mgcmmwqwguicsews instanceof Database) { goto qokakquaeuigqcwy; } $aasascamegmwqmqk = $mgcmmwqwguicsews->cokoiaeeomgssqgy($aasascamegmwqmqk); qokakquaeuigqcwy: return $aasascamegmwqmqk; } }
