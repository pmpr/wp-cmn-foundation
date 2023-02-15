<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63ed57f8a3049             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\ORM\DB; use Illuminate\Database\Query\Builder as BaseClass; class Builder extends BaseClass { public function addWhereExistsQuery($gqgemcmoicmgaqie, $qsycuegoicqcqkmo = "\x61\156\144", $mqogqgswmasasmik = false) : Builder { $sqeykgyoooqysmca = $mqogqgswmasasmik ? "\116\x6f\x74\x45\170\151\163\x74\x73" : "\x45\x78\151\x73\x74\163"; $this->wheres[] = compact("\164\x79\x70\145", "\161\165\x65\162\x79", "\x62\x6f\157\154\x65\141\x6e"); $iykmscciaowcagqu = $gqgemcmoicmgaqie->getBindings(); $this->addBinding($iykmscciaowcagqu); return $this; } public function cokoiaeeomgssqgy($aasascamegmwqmqk) : string { $mgcmmwqwguicsews = $this->getConnection(); if (!$mgcmmwqwguicsews instanceof Database) { goto yimaquocemaqgkew; } $aasascamegmwqmqk = $mgcmmwqwguicsews->cokoiaeeomgssqgy($aasascamegmwqmqk); yimaquocemaqgkew: return $aasascamegmwqmqk; } }
