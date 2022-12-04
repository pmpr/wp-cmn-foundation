<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             638cf9d050c3e             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\ORM\DB; use Illuminate\Database\Query\Builder as BaseClass; class Builder extends BaseClass { public function addWhereExistsQuery($gqgemcmoicmgaqie, $qsycuegoicqcqkmo = "\141\156\144", $mqogqgswmasasmik = false) : Builder { $sqeykgyoooqysmca = $mqogqgswmasasmik ? "\x4e\157\164\x45\170\151\163\x74\x73" : "\x45\170\x69\x73\x74\x73"; $this->wheres[] = compact("\164\171\x70\x65", "\x71\165\x65\162\x79", "\x62\x6f\x6f\154\145\x61\x6e"); $iykmscciaowcagqu = $gqgemcmoicmgaqie->getBindings(); $this->addBinding($iykmscciaowcagqu); return $this; } public function cokoiaeeomgssqgy($aasascamegmwqmqk) : string { $mgcmmwqwguicsews = $this->getConnection(); if (!$mgcmmwqwguicsews instanceof Database) { goto yueosioyegouuwqo; } $aasascamegmwqmqk = $mgcmmwqwguicsews->cokoiaeeomgssqgy($aasascamegmwqmqk); yueosioyegouuwqo: return $aasascamegmwqmqk; } }
