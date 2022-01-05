<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61d60f6616b83             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\ORM\DB; use Illuminate\Database\Query\Builder as BaseClass; class Builder extends BaseClass { public function addWhereExistsQuery($gqgemcmoicmgaqie, $qsycuegoicqcqkmo = "\x61\156\x64", $mqogqgswmasasmik = false) : Builder { $sqeykgyoooqysmca = $mqogqgswmasasmik ? "\x4e\x6f\x74\105\170\151\163\164\x73" : "\x45\170\151\x73\164\x73"; $this->wheres[] = compact("\164\171\x70\145", "\x71\165\x65\x72\171", "\142\157\x6f\x6c\x65\x61\x6e"); $iykmscciaowcagqu = $gqgemcmoicmgaqie->getBindings(); $this->addBinding($iykmscciaowcagqu); return $this; } public function leftJoin($aasascamegmwqmqk, $sysgmomuyiiawwcm, $cackiyicawmkyqqg = null, $gcegymooyemmaysk = null) : Builder { $aasascamegmwqmqk = $this->cokoiaeeomgssqgy($aasascamegmwqmqk); return parent::leftJoin($aasascamegmwqmqk, $sysgmomuyiiawwcm, $cackiyicawmkyqqg, $gcegymooyemmaysk); } public function cokoiaeeomgssqgy($aasascamegmwqmqk) : string { $mgcmmwqwguicsews = $this->getConnection(); if (!$mgcmmwqwguicsews instanceof Database) { goto yauqaiisowsgmsau; } $aasascamegmwqmqk = $mgcmmwqwguicsews->getTableName($aasascamegmwqmqk); yauqaiisowsgmsau: return $aasascamegmwqmqk; } }
