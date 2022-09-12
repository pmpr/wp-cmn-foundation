<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             631f857c645de             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\ORM\DB; use Illuminate\Database\Query\Builder as BaseClass; class Builder extends BaseClass { public function addWhereExistsQuery($gqgemcmoicmgaqie, $qsycuegoicqcqkmo = "\x61\156\x64", $mqogqgswmasasmik = false) : Builder { $sqeykgyoooqysmca = $mqogqgswmasasmik ? "\116\x6f\x74\105\170\x69\163\x74\163" : "\x45\x78\x69\163\x74\163"; $this->wheres[] = compact("\x74\x79\x70\x65", "\x71\165\x65\162\x79", "\142\x6f\x6f\154\x65\141\156"); $iykmscciaowcagqu = $gqgemcmoicmgaqie->getBindings(); $this->addBinding($iykmscciaowcagqu); return $this; } public function cokoiaeeomgssqgy($aasascamegmwqmqk) : string { $mgcmmwqwguicsews = $this->getConnection(); if (!$mgcmmwqwguicsews instanceof Database) { goto gamuuauwykwgaegc; } $aasascamegmwqmqk = $mgcmmwqwguicsews->cokoiaeeomgssqgy($aasascamegmwqmqk); gamuuauwykwgaegc: return $aasascamegmwqmqk; } }
