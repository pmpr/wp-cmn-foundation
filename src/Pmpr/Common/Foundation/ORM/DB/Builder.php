<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             642ad5cc3c612             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\ORM\DB; use Illuminate\Database\Query\Builder as BaseClass; class Builder extends BaseClass { public function addWhereExistsQuery($gqgemcmoicmgaqie, $qsycuegoicqcqkmo = "\x61\x6e\x64", $mqogqgswmasasmik = false) : Builder { $sqeykgyoooqysmca = $mqogqgswmasasmik ? "\116\157\164\x45\170\151\x73\164\x73" : "\x45\x78\x69\163\x74\x73"; $this->wheres[] = compact("\x74\x79\160\145", "\161\x75\x65\162\x79", "\x62\x6f\157\x6c\145\141\156"); $iykmscciaowcagqu = $gqgemcmoicmgaqie->getBindings(); $this->addBinding($iykmscciaowcagqu); return $this; } public function cokoiaeeomgssqgy($aasascamegmwqmqk) : string { $mgcmmwqwguicsews = $this->getConnection(); if (!$mgcmmwqwguicsews instanceof Database) { goto mwegucqywugusieu; } $aasascamegmwqmqk = $mgcmmwqwguicsews->cokoiaeeomgssqgy($aasascamegmwqmqk); mwegucqywugusieu: return $aasascamegmwqmqk; } }
