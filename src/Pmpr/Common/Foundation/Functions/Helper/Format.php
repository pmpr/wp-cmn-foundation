<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6716d8b4c5936             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper; use Pmpr\Common\Foundation\Interfaces\Constants; class Format extends Common { public function unserialize($icwicymcioeyeyek) { if (!empty($icwicymcioeyeyek)) { if (is_string($icwicymcioeyeyek)) { $ycqsugugqomewkke = $this->caokeucsksukesyo()->owgcciayoweymuws()->queuakuqucciemcc($icwicymcioeyeyek); if (!empty($ycqsugugqomewkke)) { $icwicymcioeyeyek = $ycqsugugqomewkke; } } else { if (is_array($icwicymcioeyeyek)) { foreach ($icwicymcioeyeyek as $uusmaiomayssaecw => $eqgoocgaqwqcimie) { $icwicymcioeyeyek[$uusmaiomayssaecw] = $this->unserialize($eqgoocgaqwqcimie); } } } } return $icwicymcioeyeyek; } public function ascqkksqiiwaouic($eqgoocgaqwqcimie) : bool { return !$this->eqieqemcascqscig($eqgoocgaqwqcimie); } public function ogomcyeyumwiqekm(string $uusmaiomayssaecw, $gcyiwacqwwqauegq, bool $cakygmaigwkcacyc = false) : bool { if (!is_array($gcyiwacqwwqauegq)) { $gcyiwacqwwqauegq = (array) $gcyiwacqwwqauegq; } if (empty($gcyiwacqwwqauegq)) { return false; } foreach ($gcyiwacqwwqauegq as $cksyqkosaoycogqe) { if ($cakygmaigwkcacyc) { return $uusmaiomayssaecw === $cksyqkosaoycogqe; } if (strpos($uusmaiomayssaecw, $cksyqkosaoycogqe) !== false) { return true; } } return false; } public function eqieqemcascqscig($eqgoocgaqwqcimie) : bool { return empty($eqgoocgaqwqcimie) || in_array($eqgoocgaqwqcimie, [Constants::OFF, Constants::ioyokcgwaowoqskk, 0, "\60", false, "\146\141\154\163\145"], true); } public function wmcwegoisyeeosqu($eeamcawaiqocomwy) : bool { $eouekqmooogkoqoo = "\57\50\150\x74\164\x70\x7c\x66\164\160\174\150\164\164\x70\163\x29\72\x5c\57\134\57\50\133\x5c\167\137\x2d\x5d\53\50\x3f\72\x28\x3f\x3a\x5c\x2e\133\x5c\167\137\x2d\135\53\x29\x2b\51\51\x28\x5b\134\167\x2e\54\x40\x3f\x5e\75\x25\x26\x3a\134\57\x7e\53\43\55\x5d\52\133\x5c\167\x40\77\x5e\75\45\x26\134\x2f\176\53\43\55\x5d\51\x2f"; return is_string($eeamcawaiqocomwy) && filter_var($eeamcawaiqocomwy, FILTER_VALIDATE_URL) && preg_match($eouekqmooogkoqoo, $eeamcawaiqocomwy); } public function qawecuimqqcqwgsw($euueacigmgoqkimu, ?string $cmmgwyogwccaqaaw = "\151\x72\x61\156") : bool { $euueacigmgoqkimu = trim($euueacigmgoqkimu); switch ($cmmgwyogwccaqaaw) { case "\x69\162\x61\156": return preg_match("\x2f\x5e\x28\134\x2b\x39\70\x7c\x30\x29\x3f\71\134\144\173\x39\x7d\44\x2f", $euueacigmgoqkimu); default: return $this->uqomuowmcuauuikc($euueacigmgoqkimu, null); } } public function uqomuowmcuauuikc($euueacigmgoqkimu, ?string $cmmgwyogwccaqaaw = "\x69\162\141\156") : bool { $euueacigmgoqkimu = trim($euueacigmgoqkimu); switch ($cmmgwyogwccaqaaw) { case "\151\162\x61\x6e": return preg_match("\x2f\136\x30\133\x31\55\70\135\x7b\62\54\175\x5b\60\x2d\71\135\173\70\x2c\175\44\57", $euueacigmgoqkimu); default: $eomsgokgyssmwmai = strlen($euueacigmgoqkimu); return $eomsgokgyssmwmai <= 12 && $eomsgokgyssmwmai >= 10 && preg_match("\x2f\x5e\133\53\x5d\52\x5b\50\x5d\173\60\54\61\x7d\x5b\x30\x2d\71\x5d\173\61\54\64\175\133\51\x5d\x7b\60\x2c\61\175\133\55\134\x73\56\x30\x2d\x39\x5d\x2a\x24\57", $euueacigmgoqkimu); } } public function wsggsqigawogiwky($sociqikgoyemqaac) : bool { if (function_exists("\x6d\142\x5f\163\x74\162\x70\x6f\163")) { $ksaameoqigiaoigg = 0 === mb_strpos($sociqikgoyemqaac, "\37" . "\x8b" . "\x8"); } else { $ksaameoqigiaoigg = 0 === strpos($sociqikgoyemqaac, "\x1f" . "\x8b" . "\x8"); } return $ksaameoqigiaoigg; } public function qeegmakycwwycmcm($sociqikgoyemqaac) : bool { return strlen($sociqikgoyemqaac) === strlen(utf8_decode($sociqikgoyemqaac)); } public function aoaeiwswyagmesku($eeamcawaiqocomwy) : bool { $ooggiaqasyawsuks = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $qcsieyqqegaoocks = $this->uwkmaywceaaaigwo()->gyecsegqciqykomu(); $egsumesakcaaukem = $qcsieyqqegaoocks->gooqqcmsyseiaikc($this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->gmigwwwmwemyaayy()); $ccamueccusigaaio = $qcsieyqqegaoocks->gooqqcmsyseiaikc($eeamcawaiqocomwy); $wkwsmsgmkcmugoya = $ooggiaqasyawsuks->get($egsumesakcaaukem, "\x68\x6f\x73\x74"); $yukwwaakiyeueawg = $ooggiaqasyawsuks->get($ccamueccusigaaio, "\x68\x6f\163\164"); return $egsumesakcaaukem && $wkwsmsgmkcmugoya && $ccamueccusigaaio && $yukwwaakiyeueawg && strcasecmp($yukwwaakiyeueawg, $wkwsmsgmkcmugoya) !== 0; } public function gwckaecmqskyysui(array $auwuoyyagaiegwae = []) { $ucccueqywigcukcc = ''; if ($auwuoyyagaiegwae) { $gmigwwwmwemyaayy = untrailingslashit($this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->gmigwwwmwemyaayy()); $yyauwyaeewsickwk = $this->caokeucsksukesyo()->owgcciayoweymuws(); foreach ($auwuoyyagaiegwae as $momcykaoccoymeig => $eeamcawaiqocomwy) { if ($eeamcawaiqocomwy = $yyauwyaeewsickwk->wiecmkiugmyyqiqc($gmigwwwmwemyaayy, '', $eeamcawaiqocomwy)) { $auwuoyyagaiegwae[$momcykaoccoymeig] = preg_quote($eeamcawaiqocomwy, "\x2f"); } } $ucccueqywigcukcc = $yyauwyaeewsickwk->csqkegwecgkgyaqe($auwuoyyagaiegwae); } return $ucccueqywigcukcc; } public function gmccggksyyimcukm($eeamcawaiqocomwy) : string { $sogksuscggsicmac = ''; $ymkqyawksmqcgsei = explode("\x3f", $eeamcawaiqocomwy); $gaeqamemwmwsyukm = count($ymkqyawksmqcgsei); if ($gaeqamemwmwsyukm > 1) { if ($gaeqamemwmwsyukm === 2) { $sogksuscggsicmac = $ymkqyawksmqcgsei[1]; } else { $sogksuscggsicmac = $this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->gooqqcmsyseiaikc($eeamcawaiqocomwy, PHP_URL_QUERY); } } if (!is_string($sogksuscggsicmac)) { $sogksuscggsicmac = ''; } return $sogksuscggsicmac; } public function iyooiokaaaqgesue(&$eeamcawaiqocomwy) : string { $agoaugssmsiumiym = $this->gmccggksyyimcukm($eeamcawaiqocomwy); if ($agoaugssmsiumiym) { $agoaugssmsiumiym = "\77{$agoaugssmsiumiym}"; $eeamcawaiqocomwy = $this->caokeucsksukesyo()->owgcciayoweymuws()->aimgkskucmymyquc($agoaugssmsiumiym, '', $eeamcawaiqocomwy); } return $agoaugssmsiumiym; } public function iuceiykuqcqkwsoa($euueacigmgoqkimu) : bool { $kuuugksiksqcaaaa = false; if (preg_match("\57\136\x5c\144\x7b\x31\x30\x7d\x24\57", $euueacigmgoqkimu)) { $gioggcykgoikcwiy = (int) $euueacigmgoqkimu[9]; $qsmaqqyoggcuyukq = array_sum(array_map(static function ($iegmsyuiekaayqqy) use($euueacigmgoqkimu) { return (int) $euueacigmgoqkimu[$iegmsyuiekaayqqy] * (10 - $iegmsyuiekaayqqy); }, range(0, 8))) % 11; $kuuugksiksqcaaaa = $qsmaqqyoggcuyukq < 2 && $gioggcykgoikcwiy == $qsmaqqyoggcuyukq || $qsmaqqyoggcuyukq >= 2 && $gioggcykgoikcwiy + $qsmaqqyoggcuyukq == 11; } return $kuuugksiksqcaaaa; } public function qmyusgwkaqieouwi($sociqikgoyemqaac, $kqywgoqsmuswammk = null) : bool { $uuksaskqamgouosy = is_string($sociqikgoyemqaac) && $sociqikgoyemqaac && $sociqikgoyemqaac !== strip_tags($sociqikgoyemqaac); if ($uuksaskqamgouosy && $kqywgoqsmuswammk) { $uuksaskqamgouosy = $this->caokeucsksukesyo()->gkksucgseqqemesc()->has($sociqikgoyemqaac, $kqywgoqsmuswammk); } return $uuksaskqamgouosy; } public function miskwwyaikcioysg($icwicymcioeyeyek) { if (is_array($icwicymcioeyeyek) || is_object($icwicymcioeyeyek)) { array_walk($icwicymcioeyeyek, function (&$eqgoocgaqwqcimie) { $eqgoocgaqwqcimie = $this->miskwwyaikcioysg($eqgoocgaqwqcimie); }); } else { if (is_string($icwicymcioeyeyek)) { $icwicymcioeyeyek = (int) $icwicymcioeyeyek; } } return $icwicymcioeyeyek; } public function okwemgucuqkiwiau($ywmkwiwkosakssii, array $ycmguuqqaiisymgg = []) : object { return (object) $this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->omaawkkwwyesqwcc($ywmkwiwkosakssii, $ycmguuqqaiisymgg); } public function ckscqqquyskscaaw(array $ywmkwiwkosakssii, array $ycmguuqqaiisymgg = []) : array { return (array) $this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->omaawkkwwyesqwcc($ywmkwiwkosakssii, $ycmguuqqaiisymgg); } public function mkcmkkskeeaskowy(string $eeamcawaiqocomwy = '') : string { return (string) str_replace(["\150\x74\164\160\x3a\57\57", "\150\164\164\x70\163\x3a\57\57", "\x66\x74\x70\x3a\x2f\57", "\x2f\x2f"], '', $eeamcawaiqocomwy); } public function aiwgeammgaegccoc(string $eeamcawaiqocomwy = '') : string { return (string) str_replace($this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->gmigwwwmwemyaayy(), '', $eeamcawaiqocomwy); } public function yugsmaqmkekysqmu(string $eeamcawaiqocomwy, string $cgmsicimocaeggqg = '') : string { if (!$cgmsicimocaeggqg) { $cgmsicimocaeggqg = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->wymyeyweagqomiim() ? "\150\x74\x74\160\163" : "\150\x74\164\160"; } if ($yiasugywggckywoa = $this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->gooqqcmsyseiaikc($eeamcawaiqocomwy)) { if (!isset($yiasugywggckywoa["\163\x63\150\145\x6d\x61"])) { $eeamcawaiqocomwy = "{$cgmsicimocaeggqg}\x3a\57\x2f{$eeamcawaiqocomwy}"; } } return $eeamcawaiqocomwy; } }
