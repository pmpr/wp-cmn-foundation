<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             639497eb7718d             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\ORM\DB; use Illuminate\Database\Query\Builder as BaseClass; class Builder extends BaseClass { public function addWhereExistsQuery($gqgemcmoicmgaqie, $qsycuegoicqcqkmo = "\x61\156\144", $mqogqgswmasasmik = false) : Builder { $sqeykgyoooqysmca = $mqogqgswmasasmik ? "\116\157\x74\x45\170\x69\163\164\x73" : "\x45\x78\x69\163\x74\x73"; $this->wheres[] = compact("\x74\x79\160\145", "\x71\165\145\162\x79", "\x62\157\x6f\154\145\x61\x6e"); $iykmscciaowcagqu = $gqgemcmoicmgaqie->getBindings(); $this->addBinding($iykmscciaowcagqu); return $this; } public function cokoiaeeomgssqgy($aasascamegmwqmqk) : string { $mgcmmwqwguicsews = $this->getConnection(); if (!$mgcmmwqwguicsews instanceof Database) { goto imsgusweocmiyygi; } $aasascamegmwqmqk = $mgcmmwqwguicsews->cokoiaeeomgssqgy($aasascamegmwqmqk); imsgusweocmiyygi: return $aasascamegmwqmqk; } }
