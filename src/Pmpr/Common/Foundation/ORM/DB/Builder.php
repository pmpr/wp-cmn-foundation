<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             646e287f9b7c2             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\ORM\DB; use Illuminate\Database\Query\Builder as BaseClass; class Builder extends BaseClass { public function addWhereExistsQuery($gqgemcmoicmgaqie, $qsycuegoicqcqkmo = "\x61\x6e\x64", $mqogqgswmasasmik = false) : Builder { $sqeykgyoooqysmca = $mqogqgswmasasmik ? "\116\157\164\105\x78\151\163\164\163" : "\105\x78\x69\163\164\x73"; $this->wheres[] = compact("\164\x79\160\x65", "\x71\165\x65\162\x79", "\x62\157\x6f\154\x65\x61\x6e"); $iykmscciaowcagqu = $gqgemcmoicmgaqie->getBindings(); $this->addBinding($iykmscciaowcagqu); return $this; } public function cokoiaeeomgssqgy($aasascamegmwqmqk) : string { $mgcmmwqwguicsews = $this->getConnection(); if (!$mgcmmwqwguicsews instanceof Database) { goto sguosuigwgwkikgs; } $aasascamegmwqmqk = $mgcmmwqwguicsews->cokoiaeeomgssqgy($aasascamegmwqmqk); sguosuigwgwkikgs: return $aasascamegmwqmqk; } }
