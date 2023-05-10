<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             645b55b56129e             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\ORM\DB; use Illuminate\Database\Query\Builder as BaseClass; class Builder extends BaseClass { public function addWhereExistsQuery($gqgemcmoicmgaqie, $qsycuegoicqcqkmo = "\141\156\x64", $mqogqgswmasasmik = false) : Builder { $sqeykgyoooqysmca = $mqogqgswmasasmik ? "\x4e\157\164\x45\170\151\163\164\x73" : "\x45\x78\151\x73\x74\163"; $this->wheres[] = compact("\164\171\x70\x65", "\x71\165\145\162\x79", "\x62\x6f\157\x6c\145\x61\x6e"); $iykmscciaowcagqu = $gqgemcmoicmgaqie->getBindings(); $this->addBinding($iykmscciaowcagqu); return $this; } public function cokoiaeeomgssqgy($aasascamegmwqmqk) : string { $mgcmmwqwguicsews = $this->getConnection(); if (!$mgcmmwqwguicsews instanceof Database) { goto oagiismqgcciokqw; } $aasascamegmwqmqk = $mgcmmwqwguicsews->cokoiaeeomgssqgy($aasascamegmwqmqk); oagiismqgcciokqw: return $aasascamegmwqmqk; } }
