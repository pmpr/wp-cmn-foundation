<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             64a9071795a84             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\ORM\DB; use Illuminate\Database\Query\Builder as BaseClass; class Builder extends BaseClass { public function addWhereExistsQuery($gqgemcmoicmgaqie, $qsycuegoicqcqkmo = "\141\x6e\144", $mqogqgswmasasmik = false) : Builder { $sqeykgyoooqysmca = $mqogqgswmasasmik ? "\116\x6f\x74\105\x78\x69\x73\x74\x73" : "\105\x78\x69\x73\x74\163"; $this->wheres[] = compact("\164\x79\160\x65", "\x71\165\145\162\x79", "\142\x6f\x6f\x6c\145\141\156"); $iykmscciaowcagqu = $gqgemcmoicmgaqie->getBindings(); $this->addBinding($iykmscciaowcagqu); return $this; } public function cokoiaeeomgssqgy($aasascamegmwqmqk) : string { $mgcmmwqwguicsews = $this->getConnection(); if (!$mgcmmwqwguicsews instanceof Database) { goto icoiqskygugkgmkm; } $aasascamegmwqmqk = $mgcmmwqwguicsews->cokoiaeeomgssqgy($aasascamegmwqmqk); icoiqskygugkgmkm: return $aasascamegmwqmqk; } }
