<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6601ae5f34a2d             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Ajax; use Pmpr\Common\Foundation\ORM\DB\Model as ORMModel; class Model extends Common { public function maewiqmcygmeuaso(array $icwicymcioeyeyek) : array { $mguygkocuoaoqqkg = []; if (!($euoagoueguiyeggu = $icwicymcioeyeyek[self::squoamkioomemiyi])) { goto wisyigcyyuaoaiai; } foreach ($euoagoueguiyeggu as $egkyssmuqcwaciya) { $egkyssmuqcwaciya = str_replace("\134\134", "\x5c", $egkyssmuqcwaciya); if (!class_exists($egkyssmuqcwaciya)) { goto igoukeaccigacuqy; } $owgumcsyqsamiemg = $egkyssmuqcwaciya::symcgieuakksimmu(); if (!$owgumcsyqsamiemg instanceof ORMModel) { goto msuuwaqwqmmwagmi; } if ($eqgoocgaqwqcimie = $icwicymcioeyeyek[self::ciyoccqkiamemcmm]) { goto emeqkgwamumkcuii; } $siykeiywomwwuoiw = $owgumcsyqsamiemg->gqaysymikgeawkqa(); if (!($qwcmueausqgiwigy = $icwicymcioeyeyek[self::yayciqueeakqwese])) { goto gsicykeesggkwsyw; } $siykeiywomwwuoiw = $owgumcsyqsamiemg->ygyguskuyykskwko($qwcmueausqgiwigy, $siykeiywomwwuoiw); gsicykeesggkwsyw: $gmwiogsuisuoiwqu = $owgumcsyqsamiemg->aeggeuqycwawueqy($siykeiywomwwuoiw, [self::wosqwewmqmyweqea => false]); $mguygkocuoaoqqkg = $gmwiogsuisuoiwqu[self::qwumqqyuasyskkkc]; goto mwigwkmoumcqyauu; emeqkgwamumkcuii: $mguygkocuoaoqqkg = $owgumcsyqsamiemg->cwkywyqksyucoyia([$owgumcsyqsamiemg->kumuygiiqswoyasy() => [self::euoaaiqkqcqcgeco => self::wuwqeigceueyqmsc, self::ciyoccqkiamemcmm => $eqgoocgaqwqcimie]]); mwigwkmoumcqyauu: foreach ($mguygkocuoaoqqkg as $uusmaiomayssaecw => $mksyucucyswaukig) { $mguygkocuoaoqqkg[$uusmaiomayssaecw] = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->set($mksyucucyswaukig, [self::gouqcwikiiygyasc => $owgumcsyqsamiemg->keeuqgyooycqoygw($mksyucucyswaukig), self::uissasisiuymwsmu => $owgumcsyqsamiemg->uikgwcuascgeissw($mksyucucyswaukig), self::squoamkioomemiyi => $owgumcsyqsamiemg->oyeskqayoscwciem()->giiayuqckuiecosm()]); uccgigcqcqwsksmi: } syqywaowckiiouck: msuuwaqwqmmwagmi: igoukeaccigacuqy: kwyaykgmcuookkcw: } ekeagiqmwqmiigiw: wisyigcyyuaoaiai: return $mguygkocuoaoqqkg; } public function ooyiwkyooyaiqumk($igqsaukqcqscimok) : array { $gyskaqycyaywiiyi = parent::ooyiwkyooyaiqumk($igqsaukqcqscimok); if ($gyskaqycyaywiiyi) { goto eqiemywuquiseawy; } $gyskaqycyaywiiyi = (array) $igqsaukqcqscimok; eqiemywuquiseawy: return $gyskaqycyaywiiyi; } public function muycisweeuoquemg($igqsaukqcqscimok) { return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($igqsaukqcqscimok, self::gouqcwikiiygyasc); } public function keaewwiqiewaaigy($igqsaukqcqscimok) : string { return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($igqsaukqcqscimok, self::uissasisiuymwsmu); } }
