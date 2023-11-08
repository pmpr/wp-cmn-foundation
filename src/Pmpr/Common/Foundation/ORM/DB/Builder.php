<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             654bf14facd85             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\ORM\DB; use Illuminate\Database\Query\Builder as BaseClass; class Builder extends BaseClass { public function addWhereExistsQuery($gqgemcmoicmgaqie, $qsycuegoicqcqkmo = "\141\156\144", $mqogqgswmasasmik = false) : Builder { $sqeykgyoooqysmca = $mqogqgswmasasmik ? "\116\157\164\105\170\x69\x73\x74\163" : "\x45\x78\151\x73\164\x73"; $this->wheres[] = compact("\164\x79\160\x65", "\161\165\x65\162\171", "\142\157\x6f\154\x65\x61\156"); $iykmscciaowcagqu = $gqgemcmoicmgaqie->getBindings(); $this->addBinding($iykmscciaowcagqu); return $this; } public function cokoiaeeomgssqgy($aasascamegmwqmqk) : string { $mgcmmwqwguicsews = $this->getConnection(); if (!$mgcmmwqwguicsews instanceof Database) { goto mawqcoscmcqkoskk; } $aasascamegmwqmqk = $mgcmmwqwguicsews->cokoiaeeomgssqgy($aasascamegmwqmqk); mawqcoscmcqkoskk: return $aasascamegmwqmqk; } }
