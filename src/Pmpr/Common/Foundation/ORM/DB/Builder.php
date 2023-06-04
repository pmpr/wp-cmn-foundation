<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             647cafa1ad878             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\ORM\DB; use Illuminate\Database\Query\Builder as BaseClass; class Builder extends BaseClass { public function addWhereExistsQuery($gqgemcmoicmgaqie, $qsycuegoicqcqkmo = "\141\156\x64", $mqogqgswmasasmik = false) : Builder { $sqeykgyoooqysmca = $mqogqgswmasasmik ? "\116\157\164\105\x78\x69\163\x74\163" : "\105\170\151\163\x74\x73"; $this->wheres[] = compact("\x74\x79\160\x65", "\x71\165\145\162\x79", "\x62\157\x6f\x6c\145\141\156"); $iykmscciaowcagqu = $gqgemcmoicmgaqie->getBindings(); $this->addBinding($iykmscciaowcagqu); return $this; } public function cokoiaeeomgssqgy($aasascamegmwqmqk) : string { $mgcmmwqwguicsews = $this->getConnection(); if (!$mgcmmwqwguicsews instanceof Database) { goto ywyqmwuswkcoyqsy; } $aasascamegmwqmqk = $mgcmmwqwguicsews->cokoiaeeomgssqgy($aasascamegmwqmqk); ywyqmwuswkcoyqsy: return $aasascamegmwqmqk; } }
