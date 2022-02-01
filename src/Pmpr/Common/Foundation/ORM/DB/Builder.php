<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61f91ae15b8eb             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\ORM\DB; use Illuminate\Database\Query\Builder as BaseClass; class Builder extends BaseClass { public function addWhereExistsQuery($gqgemcmoicmgaqie, $qsycuegoicqcqkmo = "\x61\156\x64", $mqogqgswmasasmik = false) : Builder { $sqeykgyoooqysmca = $mqogqgswmasasmik ? "\x4e\x6f\164\105\170\x69\163\164\x73" : "\105\170\x69\163\164\x73"; $this->wheres[] = compact("\164\x79\x70\145", "\161\165\x65\162\171", "\x62\157\157\x6c\x65\141\156"); $iykmscciaowcagqu = $gqgemcmoicmgaqie->getBindings(); $this->addBinding($iykmscciaowcagqu); return $this; } public function leftJoin($aasascamegmwqmqk, $sysgmomuyiiawwcm, $cackiyicawmkyqqg = null, $gcegymooyemmaysk = null) : Builder { $aasascamegmwqmqk = $this->cokoiaeeomgssqgy($aasascamegmwqmqk); return parent::leftJoin($aasascamegmwqmqk, $sysgmomuyiiawwcm, $cackiyicawmkyqqg, $gcegymooyemmaysk); } public function cokoiaeeomgssqgy($aasascamegmwqmqk) : string { $mgcmmwqwguicsews = $this->getConnection(); if (!$mgcmmwqwguicsews instanceof Database) { goto imyoiukqcmewqkkw; } $aasascamegmwqmqk = $mgcmmwqwguicsews->cokoiaeeomgssqgy($aasascamegmwqmqk); imyoiukqcmewqkkw: return $aasascamegmwqmqk; } }
