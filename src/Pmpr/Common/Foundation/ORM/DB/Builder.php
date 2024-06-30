<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66812ccd0a7ad             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\ORM\DB; use Illuminate\Database\Query\Builder as BaseClass; class Builder extends BaseClass { public function addWhereExistsQuery($gqgemcmoicmgaqie, $qsycuegoicqcqkmo = "\x61\x6e\x64", $mqogqgswmasasmik = false) : Builder { $sqeykgyoooqysmca = $mqogqgswmasasmik ? "\116\x6f\164\105\170\151\x73\x74\x73" : "\x45\170\151\163\x74\x73"; $this->wheres[] = compact("\164\171\x70\145", "\x71\165\145\x72\171", "\142\157\157\154\145\141\156"); $iykmscciaowcagqu = $gqgemcmoicmgaqie->getBindings(); $this->addBinding($iykmscciaowcagqu); return $this; } public function cokoiaeeomgssqgy($aasascamegmwqmqk) : string { $mgcmmwqwguicsews = $this->getConnection(); if (!$mgcmmwqwguicsews instanceof Database) { goto eaeokigkusweawki; } $aasascamegmwqmqk = $mgcmmwqwguicsews->cokoiaeeomgssqgy($aasascamegmwqmqk); eaeokigkusweawki: return $aasascamegmwqmqk; } }
