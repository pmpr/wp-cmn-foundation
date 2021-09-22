<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             614b0be44f82d             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\ORM\DB; use Illuminate\Database\Query\Builder as BaseClass; class Builder extends BaseClass { public function addWhereExistsQuery($gqgemcmoicmgaqie, $qsycuegoicqcqkmo = "\x61\x6e\144", $mqogqgswmasasmik = false) : Builder { $sqeykgyoooqysmca = $mqogqgswmasasmik ? "\x4e\x6f\x74\x45\170\x69\x73\164\x73" : "\x45\x78\x69\x73\164\163"; $this->wheres[] = compact("\x74\x79\x70\145", "\x71\x75\145\162\171", "\x62\157\157\x6c\x65\141\x6e"); $iykmscciaowcagqu = $gqgemcmoicmgaqie->getBindings(); $this->addBinding($iykmscciaowcagqu); return $this; } public function leftJoin($aasascamegmwqmqk, $sysgmomuyiiawwcm, $cackiyicawmkyqqg = null, $gcegymooyemmaysk = null) : Builder { $aasascamegmwqmqk = $this->cokoiaeeomgssqgy($aasascamegmwqmqk); return parent::leftJoin($aasascamegmwqmqk, $sysgmomuyiiawwcm, $cackiyicawmkyqqg, $gcegymooyemmaysk); } public function cokoiaeeomgssqgy($aasascamegmwqmqk) : string { $mgcmmwqwguicsews = $this->getConnection(); if (!$mgcmmwqwguicsews instanceof Database) { goto kucymsiiugmiooyo; } $aasascamegmwqmqk = $mgcmmwqwguicsews->getTableName($aasascamegmwqmqk); kucymsiiugmiooyo: return $aasascamegmwqmqk; } }
