<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             640cfe3ea2dc9             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\ORM\DB; use Illuminate\Database\Query\Builder as BaseClass; class Builder extends BaseClass { public function addWhereExistsQuery($gqgemcmoicmgaqie, $qsycuegoicqcqkmo = "\141\156\x64", $mqogqgswmasasmik = false) : Builder { $sqeykgyoooqysmca = $mqogqgswmasasmik ? "\116\x6f\164\x45\x78\x69\163\x74\163" : "\x45\170\x69\163\x74\163"; $this->wheres[] = compact("\164\171\160\145", "\x71\x75\x65\162\x79", "\x62\x6f\157\154\x65\x61\156"); $iykmscciaowcagqu = $gqgemcmoicmgaqie->getBindings(); $this->addBinding($iykmscciaowcagqu); return $this; } public function cokoiaeeomgssqgy($aasascamegmwqmqk) : string { $mgcmmwqwguicsews = $this->getConnection(); if (!$mgcmmwqwguicsews instanceof Database) { goto wqmwcuggcisqieao; } $aasascamegmwqmqk = $mgcmmwqwguicsews->cokoiaeeomgssqgy($aasascamegmwqmqk); wqmwcuggcisqieao: return $aasascamegmwqmqk; } }
