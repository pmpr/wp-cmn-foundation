<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61b7c1de9c843             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\ORM\DB; use Illuminate\Database\Query\Builder as BaseClass; class Builder extends BaseClass { public function addWhereExistsQuery($gqgemcmoicmgaqie, $qsycuegoicqcqkmo = "\141\x6e\x64", $mqogqgswmasasmik = false) : Builder { $sqeykgyoooqysmca = $mqogqgswmasasmik ? "\116\157\164\x45\x78\x69\x73\x74\163" : "\105\x78\151\163\x74\163"; $this->wheres[] = compact("\164\x79\x70\145", "\161\165\145\x72\171", "\142\157\157\154\x65\141\156"); $iykmscciaowcagqu = $gqgemcmoicmgaqie->getBindings(); $this->addBinding($iykmscciaowcagqu); return $this; } public function leftJoin($aasascamegmwqmqk, $sysgmomuyiiawwcm, $cackiyicawmkyqqg = null, $gcegymooyemmaysk = null) : Builder { $aasascamegmwqmqk = $this->cokoiaeeomgssqgy($aasascamegmwqmqk); return parent::leftJoin($aasascamegmwqmqk, $sysgmomuyiiawwcm, $cackiyicawmkyqqg, $gcegymooyemmaysk); } public function cokoiaeeomgssqgy($aasascamegmwqmqk) : string { $mgcmmwqwguicsews = $this->getConnection(); if (!$mgcmmwqwguicsews instanceof Database) { goto yquwqeooeyyociqm; } $aasascamegmwqmqk = $mgcmmwqwguicsews->getTableName($aasascamegmwqmqk); yquwqeooeyyociqm: return $aasascamegmwqmqk; } }
