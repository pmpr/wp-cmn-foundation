<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63fe72e42d07f             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\ORM\DB; use Illuminate\Database\Query\Builder as BaseClass; class Builder extends BaseClass { public function addWhereExistsQuery($gqgemcmoicmgaqie, $qsycuegoicqcqkmo = "\x61\156\144", $mqogqgswmasasmik = false) : Builder { $sqeykgyoooqysmca = $mqogqgswmasasmik ? "\x4e\157\164\105\170\x69\x73\x74\x73" : "\x45\x78\151\x73\x74\163"; $this->wheres[] = compact("\164\x79\160\x65", "\x71\x75\145\x72\171", "\142\x6f\x6f\154\x65\x61\156"); $iykmscciaowcagqu = $gqgemcmoicmgaqie->getBindings(); $this->addBinding($iykmscciaowcagqu); return $this; } public function cokoiaeeomgssqgy($aasascamegmwqmqk) : string { $mgcmmwqwguicsews = $this->getConnection(); if (!$mgcmmwqwguicsews instanceof Database) { goto agemwcwmiqisoagc; } $aasascamegmwqmqk = $mgcmmwqwguicsews->cokoiaeeomgssqgy($aasascamegmwqmqk); agemwcwmiqisoagc: return $aasascamegmwqmqk; } }
