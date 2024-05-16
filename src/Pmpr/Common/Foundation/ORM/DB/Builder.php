<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             664697d2b4114             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\ORM\DB; use Illuminate\Database\Query\Builder as BaseClass; class Builder extends BaseClass { public function addWhereExistsQuery($gqgemcmoicmgaqie, $qsycuegoicqcqkmo = "\141\156\144", $mqogqgswmasasmik = false) : Builder { $sqeykgyoooqysmca = $mqogqgswmasasmik ? "\116\157\x74\105\170\x69\x73\164\163" : "\x45\x78\151\163\164\163"; $this->wheres[] = compact("\x74\171\x70\x65", "\x71\x75\145\162\171", "\x62\157\x6f\154\x65\141\x6e"); $iykmscciaowcagqu = $gqgemcmoicmgaqie->getBindings(); $this->addBinding($iykmscciaowcagqu); return $this; } public function cokoiaeeomgssqgy($aasascamegmwqmqk) : string { $mgcmmwqwguicsews = $this->getConnection(); if (!$mgcmmwqwguicsews instanceof Database) { goto uieuouugckwokske; } $aasascamegmwqmqk = $mgcmmwqwguicsews->cokoiaeeomgssqgy($aasascamegmwqmqk); uieuouugckwokske: return $aasascamegmwqmqk; } }
