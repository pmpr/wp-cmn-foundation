<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             65622cf540ce2             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\ORM\DB; use Illuminate\Database\Query\Builder as BaseClass; class Builder extends BaseClass { public function addWhereExistsQuery($gqgemcmoicmgaqie, $qsycuegoicqcqkmo = "\141\x6e\144", $mqogqgswmasasmik = false) : Builder { $sqeykgyoooqysmca = $mqogqgswmasasmik ? "\x4e\157\x74\105\x78\x69\163\164\x73" : "\x45\170\151\163\x74\x73"; $this->wheres[] = compact("\x74\171\x70\x65", "\x71\x75\145\x72\171", "\142\157\x6f\x6c\145\x61\x6e"); $iykmscciaowcagqu = $gqgemcmoicmgaqie->getBindings(); $this->addBinding($iykmscciaowcagqu); return $this; } public function cokoiaeeomgssqgy($aasascamegmwqmqk) : string { $mgcmmwqwguicsews = $this->getConnection(); if (!$mgcmmwqwguicsews instanceof Database) { goto suaymckwwgmugsaa; } $aasascamegmwqmqk = $mgcmmwqwguicsews->cokoiaeeomgssqgy($aasascamegmwqmqk); suaymckwwgmugsaa: return $aasascamegmwqmqk; } }
