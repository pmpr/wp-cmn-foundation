<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66ebf559ba6b4             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\_ORM\Database; use DateTime; use Exception; use Illuminate\Database\Eloquent\Collection; use Illuminate\Database\Query\Builder; use Illuminate\Database\Eloquent\Relations\Relation; use Illuminate\Database\Query\Expression; use Illuminate\Database\Query\JoinClause; use Pmpr\Common\Foundation\_ORM\Database\Schema\Enum; use Pmpr\Common\Foundation\_ORM\Database\Schema\Foreign; use Pmpr\Common\Foundation\_ORM\Database\Schema\Json; use Pmpr\Common\Foundation\_ORM\Database\Schema\Str; use Pmpr\Common\Foundation\_ORM\Database\Schema\Text; use Pmpr\Common\Foundation\_ORM\Traits\ModelTrait; use Pmpr\Common\Foundation\Interfaces\Constants; class Repository extends Common { use ModelTrait; const ksawcegcqeeuswkm = "\x3d"; const gwakowakcqqsyiyu = "\x3c"; const ggyiwkyegsqmgaee = "\x3e"; const kkiokksygkekyaki = "\x3c\x3d"; const wuuiwugmcgkwkimw = "\x3e\75"; public function gqaysymikgeawkqa(bool $owoiyeqyeaucssey = true) : ?Builder { $siykeiywomwwuoiw = null; try { $mgcmmwqwguicsews = $this->mgogaykgkoogasim()->ysgiswuowuciwqaq(); $aasascamegmwqmqk = $mgcmmwqwguicsews->cokoiaeeomgssqgy($this->mgogaykgkoogasim()->cueaickeeoiwayou()); $siykeiywomwwuoiw = $mgcmmwqwguicsews->table($aasascamegmwqmqk); } catch (Exception $wgaoewqkwgomoaai) { $this->caokeucsksukesyo()->mskuyeumceaigegs()->iswcokucwmiosiaq($this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($wgaoewqkwgomoaai)); if (!$owoiyeqyeaucssey) { goto uugwmywmaqomeksa; } $this->mgogaykgkoogasim()->geskigquisseygoc()->cucqgwmoseqakgoe(); $siykeiywomwwuoiw = $this->gqaysymikgeawkqa(false); uugwmywmaqomeksa: } return $siykeiywomwwuoiw; } public final function syugmyosqomgwywi($siykeiywomwwuoiw) : string { if (!is_array($siykeiywomwwuoiw)) { goto wowmysuygugawmmu; } $siykeiywomwwuoiw = $this->kqewyqqqiyiouaou($siykeiywomwwuoiw); wowmysuygugawmmu: $asiqcaccsgscgcyq = $siykeiywomwwuoiw->toSql(); $eyagkkkqkwcuygso = $siykeiywomwwuoiw->getBindings(); $gqgemcmoicmgaqie = str_replace(["\x3f", "\x5c\x22", "\42"], ["\47\x25\163\x27", '', ''], $asiqcaccsgscgcyq); return vsprintf($gqgemcmoicmgaqie, $eyagkkkqkwcuygso); } public final function myywwqkyiwawwquy(string $aasascamegmwqmqk, string $qgoqiacsiccwoawi) : string { return "{$aasascamegmwqmqk}\x2e{$qgoqiacsiccwoawi}"; } public final function kmgukcsewikeswco(string $aasascamegmwqmqk, string $qgoqiacsiccwoawi, string $aikcyecgesuiaacw) { if ("\156\165\154\154" === strtolower($aikcyecgesuiaacw)) { goto mmmqqoemusicwgqg; } $sogksuscggsicmac = "{$this->myywwqkyiwawwquy($aasascamegmwqmqk, $qgoqiacsiccwoawi)}\x20\x61\163\x20{$aikcyecgesuiaacw}"; goto iquugwoswgkoiieg; mmmqqoemusicwgqg: $sogksuscggsicmac = $this->gqaysymikgeawkqa()->raw("\156\165\x6c\x6c\x20\x61\163\x20{$qgoqiacsiccwoawi}"); iquugwoswgkoiieg: return $sogksuscggsicmac; } public function kqewyqqqiyiouaou(array $uoomaookgsyciacm, $siykeiywomwwuoiw = null, $iqqgseqwyegkeqws = null) { if (!(!$siykeiywomwwuoiw instanceof Builder || !$siykeiywomwwuoiw instanceof Relation)) { goto xogaycsaesgqeqig; } $siykeiywomwwuoiw = $this->gqaysymikgeawkqa(); xogaycsaesgqeqig: $meywaqqsugaoeyys = $this->mgogaykgkoogasim(); if ($iqqgseqwyegkeqws) { goto gsiaskgsukseumig; } $iqqgseqwyegkeqws = $meywaqqsugaoeyys->cokoiaeeomgssqgy(); gsiaskgsukseumig: if (!($siykeiywomwwuoiw && $uoomaookgsyciacm)) { goto imeaiksowuukikui; } foreach ($uoomaookgsyciacm as $qgoqiacsiccwoawi => $gqgemcmoicmgaqie) { $mqogqgswmasasmik = (bool) ($gqgemcmoicmgaqie[Constants::sieeooaigsmwocym] ?? false); $sgiywwewawiewkam = (bool) ($gqgemcmoicmgaqie[Constants::sikukwmqygowwwiy] ?? false); $eqgoocgaqwqcimie = $gqgemcmoicmgaqie[Constants::ciyoccqkiamemcmm] ?? $gqgemcmoicmgaqie; $aasascamegmwqmqk = $gqgemcmoicmgaqie[Constants::ugsuecoyuqcamsac] ?? $iqqgseqwyegkeqws; $yummaigqmauwcyou = $gqgemcmoicmgaqie[Constants::euoaaiqkqcqcgeco] ?? Constants::qmesccgukkkogskw; $qsycuegoicqcqkmo = $gqgemcmoicmgaqie[Constants::cwsguekoagqkaesm] ?? Constants::weaykmmocuacwekg; $cackiyicawmkyqqg = $gqgemcmoicmgaqie[Constants::eugyciakiowwcuwm] ?? self::ksawcegcqeeuswkm; $ewumwgcosqecykeo = $gqgemcmoicmgaqie[Constants::emkkgysokckswycs] ?? $meywaqqsugaoeyys; $mqgysgoemumiwmis = $gqgemcmoicmgaqie[Constants::iowgsqgiaamyuswi] ?? []; if (!is_numeric($qgoqiacsiccwoawi)) { goto imwiyqcekcykscui; } $qgoqiacsiccwoawi = $gqgemcmoicmgaqie[Constants::meisqwykgaymauka] ?? $qgoqiacsiccwoawi; imwiyqcekcykscui: $qekiiaomcwyquqqm = $qgoqiacsiccwoawi; if (!($aasascamegmwqmqk && is_string($qgoqiacsiccwoawi))) { goto umemmgiwimkymaya; } $qgoqiacsiccwoawi = $this->myywwqkyiwawwquy($aasascamegmwqmqk, $qgoqiacsiccwoawi); umemmgiwimkymaya: if (!$sgiywwewawiewkam) { goto omsmaougqkqigogw; } $eqgoocgaqwqcimie = $siykeiywomwwuoiw->raw($eqgoocgaqwqcimie); omsmaougqkqigogw: if (!(!$mqgysgoemumiwmis && is_array($eqgoocgaqwqcimie) && $yummaigqmauwcyou === Constants::qmesccgukkkogskw)) { goto geasgywiogoeamek; } $yummaigqmauwcyou = Constants::wuwqeigceueyqmsc; geasgywiogoeamek: $aaqqkgyougeiueyq = $ewumwgcosqecykeo->uqeoyqiwywwmsiew($qekiiaomcwyquqqm); if (!$aaqqkgyougeiueyq instanceof Enum) { goto qweyymyuuqwcmkqg; } $eqgoocgaqwqcimie = $aaqqkgyougeiueyq->oiesyimugeuuwcma($eqgoocgaqwqcimie); qweyymyuuqwcmkqg: switch ($yummaigqmauwcyou) { case Constants::uwkgmaicmwigeeee: $siykeiywomwwuoiw = $siykeiywomwwuoiw->distinct(); goto guqmgiqaaowaauyo; case Constants::cgiswgcumueqgcmw: $siykeiywomwwuoiw = $siykeiywomwwuoiw->limit($eqgoocgaqwqcimie); goto guqmgiqaaowaauyo; case Constants::kcweakweogywcmoq: $siykeiywomwwuoiw = $siykeiywomwwuoiw->groupBy($eqgoocgaqwqcimie); goto guqmgiqaaowaauyo; case Constants::wwywmwwigoiyqimg: $siykeiywomwwuoiw = $siykeiywomwwuoiw->inRandomOrder(); goto guqmgiqaaowaauyo; case Constants::gqiasegggowomgie: case Constants::cqcimoqckgmaacyw: if (is_array($eqgoocgaqwqcimie)) { goto iuyagqakcieasiua; } if (in_array($eqgoocgaqwqcimie, [Constants::omaksceqmigeaoko, Constants::eeccqomoaqsawouy], true)) { goto ucaoyoamaycsiacq; } $eqgoocgaqwqcimie = Constants::eeccqomoaqsawouy; ucaoyoamaycsiacq: $siykeiywomwwuoiw = $this->ewkswoqykwsuckok($siykeiywomwwuoiw, $qgoqiacsiccwoawi, $eqgoocgaqwqcimie); goto oasisywuwssumsok; iuyagqakcieasiua: $eqgoocgaqwqcimie = $this->caokeucsksukesyo()->owgcciayoweymuws()->eqyqgywiseiwqocc($eqgoocgaqwqcimie); $siykeiywomwwuoiw = $siykeiywomwwuoiw->orderByRaw("\106\111\x45\114\104\x28{$ewumwgcosqecykeo->ouscimcwyiassmcs($qgoqiacsiccwoawi)}\x2c\x20\x27{$eqgoocgaqwqcimie}\x27\x29"); oasisywuwssumsok: goto guqmgiqaaowaauyo; case Constants::ackcaikowcokggsc: case Constants::wuwqeigceueyqmsc: if (is_array($eqgoocgaqwqcimie)) { goto iaoyeugekskmewgs; } $eqgoocgaqwqcimie = [$eqgoocgaqwqcimie]; iaoyeugekskmewgs: if ($aaqqkgyougeiueyq instanceof Json) { goto eciksmgaqikwegwq; } $siykeiywomwwuoiw = $siykeiywomwwuoiw->whereIn($qgoqiacsiccwoawi, $eqgoocgaqwqcimie, $qsycuegoicqcqkmo, $mqogqgswmasasmik); goto kieyoaoawqacqamy; eciksmgaqikwegwq: $sucyqoqkkkyqwkao = []; foreach ($eqgoocgaqwqcimie as $igqsaukqcqscimok) { $sucyqoqkkkyqwkao[] = [Constants::ciyoccqkiamemcmm => "\x25\x22{$igqsaukqcqscimok}\42\45", Constants::meisqwykgaymauka => $qekiiaomcwyquqqm, Constants::cwsguekoagqkaesm => $qsycuegoicqcqkmo, Constants::eugyciakiowwcuwm => Constants::augocsiaqqukkuui]; okagauksoqkoqygi: } iokemmkgmcaksiqu: $siykeiywomwwuoiw = $this->kqewyqqqiyiouaou($sucyqoqkkkyqwkao, $siykeiywomwwuoiw, $aasascamegmwqmqk); kieyoaoawqacqamy: goto guqmgiqaaowaauyo; case Constants::SELECT: $siykeiywomwwuoiw = $siykeiywomwwuoiw->select($qekiiaomcwyquqqm); goto guqmgiqaaowaauyo; case Constants::yqwcogcwsuecwscy: $siykeiywomwwuoiw = $siykeiywomwwuoiw->addSelect($eqgoocgaqwqcimie); goto guqmgiqaaowaauyo; case Constants::ycasqqegycucigcy: $sqeykgyoooqysmca = $gqgemcmoicmgaqie[Constants::squoamkioomemiyi] ?? Constants::qyiusaesoeakesco; $icsywsyukqcciiky = (bool) ($gqgemcmoicmgaqie[Constants::qmesccgukkkogskw] ?? false); $siykeiywomwwuoiw = $siykeiywomwwuoiw->join($aasascamegmwqmqk, $eqgoocgaqwqcimie[0], $cackiyicawmkyqqg, $eqgoocgaqwqcimie[1], $sqeykgyoooqysmca, $icsywsyukqcciiky); goto guqmgiqaaowaauyo; case Constants::imiesusgyysqwyew: $saqkweiwkkmkaiso = $eqgoocgaqwqcimie[0] ?? null; $wcigocykcugesikg = $eqgoocgaqwqcimie[1] ?? null; if (!$aaqqkgyougeiueyq instanceof Foreign) { goto camawumockccayaq; } $mookcykiycqukcks = $aaqqkgyougeiueyq->ggmimykuacwcogaq(); if (!$mookcykiycqukcks) { goto gykuaukukosiocoy; } if ($saqkweiwkkmkaiso) { goto auaigccmwqwsqsku; } if (!$aaqqkgyougeiueyq->ygswmewosceowmya() && $aaqqkgyougeiueyq->aumgkcogqygmwsqy()) { goto qckouamqueqiykqi; } $saqkweiwkkmkaiso = $this->kumuygiiqswoyasy(); goto measoqewessauqma; qckouamqueqiykqi: $saqkweiwkkmkaiso = $qekiiaomcwyquqqm; measoqewessauqma: auaigccmwqwsqsku: $saqkweiwkkmkaiso = $this->myywwqkyiwawwquy($saqkweiwkkmkaiso); if (!$wcigocykcugesikg && is_string($eqgoocgaqwqcimie)) { goto mcucegiogmuyogki; } if (!(!$aaqqkgyougeiueyq->ygswmewosceowmya() && $aaqqkgyougeiueyq->aumgkcogqygmwsqy())) { goto wiaesksmicgikqcm; } $wcigocykcugesikg = $mookcykiycqukcks->kumuygiiqswoyasy(); wiaesksmicgikqcm: goto gqaimiooakyykccy; mcucegiogmuyogki: $wcigocykcugesikg = $eqgoocgaqwqcimie; gqaimiooakyykccy: if ($aaqqkgyougeiueyq->ygswmewosceowmya()) { goto agemeseegiuuowgo; } $aasascamegmwqmqk = $mookcykiycqukcks->cokoiaeeomgssqgy(); $wcigocykcugesikg = $mookcykiycqukcks->myywwqkyiwawwquy($wcigocykcugesikg); goto goswwiomuackymqi; agemeseegiuuowgo: [$aasascamegmwqmqk] = $this->acamgaegcsioysiw($aaqqkgyougeiueyq); $wcigocykcugesikg = $this->myywwqkyiwawwquy($aasascamegmwqmqk, $wcigocykcugesikg); goswwiomuackymqi: gykuaukukosiocoy: camawumockccayaq: if ($mqgysgoemumiwmis) { goto ggqeakyaggiuegek; } $siykeiywomwwuoiw = $siykeiywomwwuoiw->leftJoin($aasascamegmwqmqk, $saqkweiwkkmkaiso, $cackiyicawmkyqqg, $wcigocykcugesikg); goto usgcoawgqswoeiec; ggqeakyaggiuegek: $koegqoagisewcica = (bool) ($gqgemcmoicmgaqie[Constants::ON] ?? true); $siykeiywomwwuoiw = $siykeiywomwwuoiw->leftJoin($aasascamegmwqmqk, function (JoinClause $eagqsqeocaokmsim) use($saqkweiwkkmkaiso, $cackiyicawmkyqqg, $wcigocykcugesikg, $mqgysgoemumiwmis, $koegqoagisewcica, $aasascamegmwqmqk) { if (!$koegqoagisewcica) { goto uuisaeysawuagysg; } $eagqsqeocaokmsim->on($saqkweiwkkmkaiso, $cackiyicawmkyqqg, $wcigocykcugesikg); uuisaeysawuagysg: return $this->kqewyqqqiyiouaou($mqgysgoemumiwmis, $eagqsqeocaokmsim, $aasascamegmwqmqk); }); usgcoawgqswoeiec: goto guqmgiqaaowaauyo; case Constants::weigugswsgkycqkc: $siykeiywomwwuoiw = $siykeiywomwwuoiw->whereNull($qgoqiacsiccwoawi, $qsycuegoicqcqkmo, $mqogqgswmasasmik); goto guqmgiqaaowaauyo; case Constants::amiwmcmkayqsycia: $siykeiywomwwuoiw = $siykeiywomwwuoiw->whereNotNull($qgoqiacsiccwoawi, $qsycuegoicqcqkmo); goto guqmgiqaaowaauyo; case Constants::qmesccgukkkogskw: if ($mqgysgoemumiwmis) { goto qowcwmsiyscackaa; } $siykeiywomwwuoiw = $siykeiywomwwuoiw->where($qgoqiacsiccwoawi, $cackiyicawmkyqqg, $eqgoocgaqwqcimie, $qsycuegoicqcqkmo); goto aqigiwmamkowomiw; qowcwmsiyscackaa: $siykeiywomwwuoiw = $siykeiywomwwuoiw->where(function ($gqgemcmoicmgaqie) use($mqgysgoemumiwmis, $aasascamegmwqmqk) { return $this->kqewyqqqiyiouaou($mqgysgoemumiwmis, $gqgemcmoicmgaqie, $aasascamegmwqmqk); }, null, null, $qsycuegoicqcqkmo); aqigiwmamkowomiw: goto guqmgiqaaowaauyo; case Constants::kumuoysauoagaiiy: $siykeiywomwwuoiw = $this->ewaugyyiauqmiwsu($qgoqiacsiccwoawi, $eqgoocgaqwqcimie, $cackiyicawmkyqqg, $qsycuegoicqcqkmo, $mqogqgswmasasmik, $siykeiywomwwuoiw); goto guqmgiqaaowaauyo; case Constants::oeusoaowacmykwsm: if (!is_array($eqgoocgaqwqcimie)) { goto sugumgeqcwgekcqs; } $aikcyecgesuiaacw = $gqgemcmoicmgaqie[Constants::wsgoaaeiyusigoym] ?? []; $mciqqmyssqigmqyo = 0; $iiueagsqmqqkiiwm = $gqgemcmoicmgaqie[Constants::SELECT] ?? []; foreach ($iiueagsqmqqkiiwm as $uusmaiomayssaecw => $igqsaukqcqscimok) { switch ($uusmaiomayssaecw) { case Constants::sgyowqgsmegoocaw: if (!is_array($igqsaukqcqscimok)) { goto gyeayeuuyiemuwuq; } $kaywamcmkqogouck = []; foreach ($igqsaukqcqscimok as $imgcoakmmgqsckkm => $wocwawaaemuoqmig) { $uiymkeeaukcyqqik = $wocwawaaemuoqmig[Constants::ciyoccqkiamemcmm] ?? $wocwawaaemuoqmig; $imgcoakmmgqsckkm = $wocwawaaemuoqmig[Constants::meisqwykgaymauka] ?? $imgcoakmmgqsckkm; $weawyioewioikeaq = $wocwawaaemuoqmig[Constants::eugyciakiowwcuwm] ?? $cackiyicawmkyqqg; if (!($imgcoakmmgqsckkm && $uiymkeeaukcyqqik)) { goto aymmymequcisekie; } if (is_numeric($uiymkeeaukcyqqik)) { goto yyamycyesguwueuw; } $uiymkeeaukcyqqik = "\47{$uiymkeeaukcyqqik}\47"; yyamycyesguwueuw: $kaywamcmkqogouck[] = "{$imgcoakmmgqsckkm}\40{$weawyioewioikeaq}\x20{$uiymkeeaukcyqqik}"; aymmymequcisekie: waewaiuiogywqigu: } mmkoqmccusoeaoyi: $kaywamcmkqogouck = implode("\40\101\116\104\40", $kaywamcmkqogouck); gyeayeuuyiemuwuq: goto ggqwcqssoauckuic; case Constants::mskoigqmkguawcac: $ssccayguowuawggi = $igqsaukqcqscimok; goto ggqwcqssoauckuic; case Constants::kgmgkqegkacowmia: $mciqqmyssqigmqyo = $igqsaukqcqscimok; goto ggqwcqssoauckuic; } ggwcauaeuagekeyo: ggqwcqssoauckuic: csyoimsqgwcmiwki: } qesqgumuouyymcwa: if (!isset($kaywamcmkqogouck, $ssccayguowuawggi, $mciqqmyssqigmqyo)) { goto kyggwyywiycksgqq; } $siykeiywomwwuoiw = $siykeiywomwwuoiw->selectRaw("\123\125\x4d\x28\103\101\x53\105\x20\x57\110\x45\x4e\x20{$kaywamcmkqogouck}\40\x54\110\105\x4e\40{$ssccayguowuawggi}\40\105\114\x53\x45\x20{$mciqqmyssqigmqyo}\x20\x45\116\x44\51\40\x61\163\40{$aikcyecgesuiaacw}"); kyggwyywiycksgqq: sugumgeqcwgekcqs: goto guqmgiqaaowaauyo; } mccimkgwkkamsime: guqmgiqaaowaauyo: woqkgwmkmqsuceuy: } syiyemqigyugagks: imeaiksowuukikui: return $siykeiywomwwuoiw; } public function wkmkqaiwuqouweye(string $aiowsaccomcoikus, $eqgoocgaqwqcimie, string $cackiyicawmkyqqg = self::ksawcegcqeeuswkm, $siykeiywomwwuoiw = null) { return $this->kqewyqqqiyiouaou([$aiowsaccomcoikus => [Constants::ciyoccqkiamemcmm => $eqgoocgaqwqcimie, Constants::eugyciakiowwcuwm => $cackiyicawmkyqqg]], $siykeiywomwwuoiw); } public function akkkoiiymmamsauc($eqgoocgaqwqcimie = null, string $aiowsaccomcoikus = null, $wkkweuacukumqmya = "\52") { if ($aiowsaccomcoikus) { goto aqmiewawgseaqeqk; } $aiowsaccomcoikus = $this->mgogaykgkoogasim()->kumuygiiqswoyasy(); aqmiewawgseaqeqk: return $this->geeumyocaqwwquwk($this->wkmkqaiwuqouweye($aiowsaccomcoikus, $eqgoocgaqwqcimie), $wkkweuacukumqmya); } public function oqomcmyuuakigusk(array $uoomaookgsyciacm = [], $wkkweuacukumqmya = ["\52"]) { return $this->geeumyocaqwwquwk($this->kqewyqqqiyiouaou($uoomaookgsyciacm), $wkkweuacukumqmya); } private function geeumyocaqwwquwk($siykeiywomwwuoiw, $wkkweuacukumqmya = ["\52"]) { $mksyucucyswaukig = null; if (!$siykeiywomwwuoiw) { goto gaceikykesgywssm; } $mksyucucyswaukig = $this->awkaaqmauiuwwsca($siykeiywomwwuoiw, $wkkweuacukumqmya); gaceikykesgywssm: return $mksyucucyswaukig; } public function awkaaqmauiuwwsca($siykeiywomwwuoiw, $wkkweuacukumqmya = ["\52"], $qgoqiacsiccwoawi = null, $ecysmcqmumqmaagg = null) { if ($siykeiywomwwuoiw) { goto weggeeowykuqooyg; } $siykeiywomwwuoiw = $this->gqaysymikgeawkqa(); weggeeowykuqooyg: if (!($qgoqiacsiccwoawi && $ecysmcqmumqmaagg)) { goto cqkuuyouqoqyguus; } $siykeiywomwwuoiw = $this->ewkswoqykwsuckok($siykeiywomwwuoiw, $qgoqiacsiccwoawi, $ecysmcqmumqmaagg); cqkuuyouqoqyguus: $mksyucucyswaukig = null; if (!$siykeiywomwwuoiw) { goto ssmgmiuqoeiuacsa; } $mksyucucyswaukig = $siykeiywomwwuoiw->first($wkkweuacukumqmya); ssmgmiuqoeiuacsa: return $mksyucucyswaukig; } public function yassqyiieqeywoqi(string $aiowsaccomcoikus, $eqgoocgaqwqcimie, string $cackiyicawmkyqqg = self::ksawcegcqeeuswkm, $wkkweuacukumqmya = ["\52"], string $aiamqeawckcsuaou = Constants::isukcamoimieegam) : array { $aqykuigiuwmmcieu = []; $siykeiywomwwuoiw = $this->wkmkqaiwuqouweye($aiowsaccomcoikus, $eqgoocgaqwqcimie, $cackiyicawmkyqqg); if (!$siykeiywomwwuoiw) { goto wiqigqgiegmacgsw; } $aqykuigiuwmmcieu = $this->aocqcwaksksgckaw($siykeiywomwwuoiw, $wkkweuacukumqmya, $aiamqeawckcsuaou); wiqigqgiegmacgsw: return $aqykuigiuwmmcieu; } public function cieaqygkucwoqwke(array $uoomaookgsyciacm = [], $wkkweuacukumqmya = ["\52"], string $aiamqeawckcsuaou = Constants::isukcamoimieegam) : array { $aqykuigiuwmmcieu = []; $siykeiywomwwuoiw = $this->kqewyqqqiyiouaou($uoomaookgsyciacm); if (!$siykeiywomwwuoiw) { goto gwoacimkeyymqccq; } $aqykuigiuwmmcieu = $this->aocqcwaksksgckaw($siykeiywomwwuoiw, $wkkweuacukumqmya, $aiamqeawckcsuaou); gwoacimkeyymqccq: return $aqykuigiuwmmcieu; } public function asskucacysemeoiu(array $uoomaookgsyciacm = [], $wkkweuacukumqmya = "\52") : int { return $this->ygmcsmegcysyeoss($wkkweuacukumqmya, $this->kqewyqqqiyiouaou($uoomaookgsyciacm)); } public function ieieyoeqmmeysauc(string $aiowsaccomcoikus, $eqgoocgaqwqcimie, string $cackiyicawmkyqqg = self::ksawcegcqeeuswkm, $wkkweuacukumqmya = "\x2a", $siykeiywomwwuoiw = null) : int { return $this->ygmcsmegcysyeoss($wkkweuacukumqmya, $this->wkmkqaiwuqouweye($aiowsaccomcoikus, $cackiyicawmkyqqg, $eqgoocgaqwqcimie, $siykeiywomwwuoiw)); } public function ygmcsmegcysyeoss($wkkweuacukumqmya = "\x2a", $siykeiywomwwuoiw = null) : int { $gaeqamemwmwsyukm = 0; if ($siykeiywomwwuoiw) { goto koggssokukoukkay; } $siykeiywomwwuoiw = $this->gqaysymikgeawkqa(); koggssokukoukkay: if (!$siykeiywomwwuoiw) { goto ueaiskyiqcquiika; } $gaeqamemwmwsyukm = $siykeiywomwwuoiw->count($wkkweuacukumqmya); ueaiskyiqcquiika: return $gaeqamemwmwsyukm; } public function qgiewwqykwugcuoo(string $qgoqiacsiccwoawi, array $uoomaookgsyciacm = [], $siykeiywomwwuoiw = null) { $qsmaqqyoggcuyukq = 0; $siykeiywomwwuoiw = $this->kqewyqqqiyiouaou($uoomaookgsyciacm, $siykeiywomwwuoiw); if (!$siykeiywomwwuoiw) { goto eqemcocqsyasqycq; } $qsmaqqyoggcuyukq = $siykeiywomwwuoiw->sum($qgoqiacsiccwoawi); eqemcocqsyasqycq: return $qsmaqqyoggcuyukq; } public function iscemaoqqckmkago($iceamweyeeiwiucs, $mksyucucyswaukig = null, $wkkweuacukumqmya = ["\52"], array $uoomaookgsyciacm = []) { $essikcmqiyqaqoaq = []; try { if ($iceamweyeeiwiucs instanceof Relation) { goto qccmuwiwykuegoga; } $jwsqucqyaoaasykk = $this->mgogaykgkoogasim(); $aaqqkgyougeiueyq = $jwsqucqyaoaasykk->uqeoyqiwywwmsiew($iceamweyeeiwiucs); if (!$aaqqkgyougeiueyq instanceof Foreign) { goto osqgywagokmsicqe; } if (!($meywaqqsugaoeyys = $aaqqkgyougeiueyq->ggmimykuacwcogaq())) { goto qaiuogoowcoimwee; } $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $ceiwsaacewygcsqg = $meywaqqsugaoeyys->kumuygiiqswoyasy(); $sgmoseoaumayiowg = $gkyciwoiiisgywcs->get($mksyucucyswaukig, $iceamweyeeiwiucs); $moqewomugocaueis = $gkyciwoiiisgywcs->get($mksyucucyswaukig, $ceiwsaacewygcsqg); $iscgcmeykqwwowmq = $aaqqkgyougeiueyq->ogkqyamocsimiymw(); if (!($aaqqkgyougeiueyq->eiyqqesoywqkegwu() || $aaqqkgyougeiueyq->wmomygggskkoqess())) { goto yuoamgkigcwaooqu; } if (!$aaqqkgyougeiueyq->wmomygggskkoqess()) { goto kaiqsuaywyuckuoo; } if (!$aaqqkgyougeiueyq->aumgkcogqygmwsqy()) { goto ucecweoaoyeoyuue; } return $this->akkkoiiymmamsauc($sgmoseoaumayiowg, $aaqqkgyougeiueyq->iooowgsqoyqseyuu()); ucecweoaoyeoyuue: if (!$iscgcmeykqwwowmq) { goto cqugssuesycomqwa; } return $meywaqqsugaoeyys->iekyeyicoyyawomk()->akkkoiiymmamsauc($moqewomugocaueis, $iscgcmeykqwwowmq); cqugssuesycomqwa: kaiqsuaywyuckuoo: return $meywaqqsugaoeyys->iekyeyicoyyawomk()->akkkoiiymmamsauc($sgmoseoaumayiowg, $ceiwsaacewygcsqg); yuoamgkigcwaooqu: if (!($iscgcmeykqwwowmq && $aaqqkgyougeiueyq->gumeeckcowwoyoci())) { goto ymwyooosikgokiaa; } return $meywaqqsugaoeyys->iekyeyicoyyawomk()->yassqyiieqeywoqi($iscgcmeykqwwowmq, $moqewomugocaueis); ymwyooosikgokiaa: qaiuogoowcoimwee: osqgywagokmsicqe: $ayegqaqygsqsmews = $this->mgacegaoeamymmya($iceamweyeeiwiucs, $mksyucucyswaukig); goto csucwwqcsaymyiuk; qccmuwiwykuegoga: $ayegqaqygsqsmews = $iceamweyeeiwiucs; csucwwqcsaymyiuk: if (!$ayegqaqygsqsmews) { goto ooqmaweuqmcmwsuk; } if (!$uoomaookgsyciacm) { goto iiuuwuwcwamqegey; } $ayegqaqygsqsmews = $this->kqewyqqqiyiouaou($uoomaookgsyciacm, $ayegqaqygsqsmews); iiuuwuwcwamqegey: if (!$ayegqaqygsqsmews) { goto qmgueimkwqmsakis; } $essikcmqiyqaqoaq = $this->iiqauwkoiguyeawu($ayegqaqygsqsmews, $wkkweuacukumqmya); qmgueimkwqmsakis: ooqmaweuqmcmwsuk: } catch (Exception $wgaoewqkwgomoaai) { } return $essikcmqiyqaqoaq; } public function mgacegaoeamymmya($ymaogssqccumcyqa, $mksyucucyswaukig = null) : ?Relation { $ayegqaqygsqsmews = null; $meywaqqsugaoeyys = $this->mgogaykgkoogasim(); if ($mksyucucyswaukig instanceof self) { goto kuyqusuycscumuek; } $aokagokqyuysuksm = $meywaqqsugaoeyys->mwyqswsaeeewsosm($mksyucucyswaukig); if (!$mksyucucyswaukig) { goto uscissuaiyuiukea; } $mksyucucyswaukig = $meywaqqsugaoeyys->gssiscqyqsacmeca()->cyyiiykmaeuqqgok($aokagokqyuysuksm); uscissuaiyuiukea: kuyqusuycscumuek: if (!$mksyucucyswaukig instanceof self) { goto iauwkeeaqsgweeoo; } $aaqqkgyougeiueyq = $meywaqqsugaoeyys->uqeoyqiwywwmsiew($ymaogssqccumcyqa); if (!$aaqqkgyougeiueyq instanceof Foreign) { goto ywoyioqqyuocoygk; } if (!($yccmomaaqwugeiuo = $aaqqkgyougeiueyq->ggmimykuacwcogaq())) { goto awgmyaycugswmwae; } $egkyssmuqcwaciya = $yccmomaaqwugeiuo::class; if ($aaqqkgyougeiueyq->gumeeckcowwoyoci()) { goto kkwqmoeeqygoimwg; } if ($aaqqkgyougeiueyq->eiyqqesoywqkegwu()) { goto gimquiiwucueoqkw; } if ($aaqqkgyougeiueyq->wmomygggskkoqess()) { goto qioswooukgoowsuc; } if (!$aaqqkgyougeiueyq->ygswmewosceowmya()) { goto qycsooiomiugimqc; } if (!$yccmomaaqwugeiuo instanceof self) { goto koemwyegoqwiikom; } [$syeseoiyagmgumcy] = $this->acamgaegcsioysiw($aaqqkgyougeiueyq); $ayegqaqygsqsmews = $mksyucucyswaukig->belongsToMany($egkyssmuqcwaciya, $syeseoiyagmgumcy); koemwyegoqwiikom: qycsooiomiugimqc: goto ggoimgeeuugseiwk; qioswooukgoowsuc: if ($aaqqkgyougeiueyq->iueigwuckeaswyuu()) { goto cycwgukowsksmkyc; } $ayegqaqygsqsmews = $mksyucucyswaukig->belongsTo($egkyssmuqcwaciya); goto siuyaemoiiqyoggo; cycwgukowsksmkyc: $ayegqaqygsqsmews = $mksyucucyswaukig->hasOne($egkyssmuqcwaciya); siuyaemoiiqyoggo: ggoimgeeuugseiwk: goto eimouyomcoqkmaae; gimquiiwucueoqkw: $ayegqaqygsqsmews = $mksyucucyswaukig->belongsTo($egkyssmuqcwaciya); eimouyomcoqkmaae: goto mwqcykaeywsmoumm; kkwqmoeeqygoimwg: $ayegqaqygsqsmews = $mksyucucyswaukig->hasMany($egkyssmuqcwaciya); mwqcykaeywsmoumm: awgmyaycugswmwae: ywoyioqqyuocoygk: iauwkeeaqsgweeoo: return $ayegqaqygsqsmews; } public function acamgaegcsioysiw($aaqqkgyougeiueyq) : array { $sogksuscggsicmac = []; $meywaqqsugaoeyys = $this->mgogaykgkoogasim(); if (!is_string($aaqqkgyougeiueyq)) { goto aycqgowuwagcgque; } $aaqqkgyougeiueyq = $meywaqqsugaoeyys->uqeoyqiwywwmsiew($aaqqkgyougeiueyq); aycqgowuwagcgque: if (!($aaqqkgyougeiueyq instanceof Foreign && $aaqqkgyougeiueyq->ygswmewosceowmya())) { goto ikqagqacuwcgwmqy; } $gsmssqouaueqkeui = $aaqqkgyougeiueyq->ggmimykuacwcogaq(); if (!$gsmssqouaueqkeui) { goto iyyaiuccouqowyga; } if ($aaqqkgyougeiueyq->iueigwuckeaswyuu()) { goto icuukwkwqeoogyae; } $yuwymayicwwqiske = $gsmssqouaueqkeui->ogqgmqymcwsqikme(); $usymcioagieycusu = $gsmssqouaueqkeui->aakmagwggmkoiiyu(); $wkwywcemusswkgwk = $meywaqqsugaoeyys->aakmagwggmkoiiyu(); goto iwcmgioeaiyuacwi; icuukwkwqeoogyae: $yuwymayicwwqiske = $meywaqqsugaoeyys->ogqgmqymcwsqikme(); $usymcioagieycusu = $meywaqqsugaoeyys->aakmagwggmkoiiyu(); $wkwywcemusswkgwk = $gsmssqouaueqkeui->aakmagwggmkoiiyu(); iwcmgioeaiyuacwi: $syeseoiyagmgumcy = $meywaqqsugaoeyys->ysgiswuowuciwqaq()->cokoiaeeomgssqgy("{$yuwymayicwwqiske}{$usymcioagieycusu}\137{$wkwywcemusswkgwk}"); $sogksuscggsicmac = [$syeseoiyagmgumcy, $usymcioagieycusu, $wkwywcemusswkgwk, $gsmssqouaueqkeui]; iyyaiuccouqowyga: ikqagqacuwcgwmqy: return $sogksuscggsicmac; } public function ewaugyyiauqmiwsu($ymaogssqccumcyqa, $eqgoocgaqwqcimie, string $cackiyicawmkyqqg = self::wuuiwugmcgkwkimw, string $qsycuegoicqcqkmo = Constants::weaykmmocuacwekg, bool $mqogqgswmasasmik = false, $siykeiywomwwuoiw = null) { try { if ($siykeiywomwwuoiw) { goto gcogomgmqcgkeceg; } $siykeiywomwwuoiw = $this->gqaysymikgeawkqa(); gcogomgmqcgkeceg: if ($cackiyicawmkyqqg === Constants::yoaakgmawgaeyeim && is_array($eqgoocgaqwqcimie)) { goto ugmukcwgcioqgywy; } if (!is_numeric($eqgoocgaqwqcimie)) { goto cksomiiqscosigke; } $eqgoocgaqwqcimie = new DateTime($eqgoocgaqwqcimie); cksomiiqscosigke: $siykeiywomwwuoiw = $siykeiywomwwuoiw->whereDate($ymaogssqccumcyqa, $cackiyicawmkyqqg, $eqgoocgaqwqcimie, $qsycuegoicqcqkmo); goto kisccmsaieigisiu; ugmukcwgcioqgywy: $siykeiywomwwuoiw = $siykeiywomwwuoiw->whereBetween($ymaogssqccumcyqa, $eqgoocgaqwqcimie, $qsycuegoicqcqkmo, $mqogqgswmasasmik); kisccmsaieigisiu: } catch (Exception $wgaoewqkwgomoaai) { $mmeioagwmyscwumo = 1; } return $siykeiywomwwuoiw; } public function ewkswoqykwsuckok($siykeiywomwwuoiw, string $qgoqiacsiccwoawi, string $ecysmcqmumqmaagg = Constants::eeccqomoaqsawouy) { if ($siykeiywomwwuoiw) { goto euoscysqgugsqewc; } $siykeiywomwwuoiw = $this->gqaysymikgeawkqa(); euoscysqgugsqewc: if (!$siykeiywomwwuoiw) { goto mwwygasiagaqsimo; } $siykeiywomwwuoiw = $siykeiywomwwuoiw->orderBy($qgoqiacsiccwoawi, $ecysmcqmumqmaagg); mwwygasiagaqsimo: return $siykeiywomwwuoiw; } public function ygyguskuyykskwko(string $qwcmueausqgiwigy, $siykeiywomwwuoiw = null) { return $this->kqewyqqqiyiouaou($this->qgeqgaaksyemysgo($qwcmueausqgiwigy), $siykeiywomwwuoiw); } public function qgeqgaaksyemysgo(string $qwcmueausqgiwigy) : array { $uoomaookgsyciacm = []; $qssskwiqeumgkago = $this->mgogaykgkoogasim()->aeosueemgsygqese(); foreach ($qssskwiqeumgkago as $aaqqkgyougeiueyq) { $aokagokqyuysuksm = $aaqqkgyougeiueyq->mwyqswsaeeewsosm(); if (!($aaqqkgyougeiueyq instanceof Str || $aaqqkgyougeiueyq instanceof Text)) { goto mseokuecmeoyoggk; } $uoomaookgsyciacm[$aokagokqyuysuksm] = [Constants::ciyoccqkiamemcmm => "\x25{$qwcmueausqgiwigy}\x25", Constants::cwsguekoagqkaesm => Constants::ieiyckasqmcyekim, Constants::eugyciakiowwcuwm => Constants::augocsiaqqukkuui]; mseokuecmeoyoggk: eeomcmuiqwgwwuqk: } wucacaegysmiusai: return $uoomaookgsyciacm; } public function aeggeuqycwawueqy($siykeiywomwwuoiw, array $ywmkwiwkosakssii = []) : array { try { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::imywcsggckkcywgk => 1, Constants::wikgqsqysyuoykse => [], Constants::soquiwyuimckgiow => ["\x2a"], Constants::ausqeuugegoygouq => $this->caokeucsksukesyo()->eiwcuqigayigimak()->kasoumcmomkcwwyg(), Constants::ieyywsoeoqmceucw => Constants::imywcsggckkcywgk, Constants::wosqwewmqmyweqea => true]); $ymiyawysimukkoso = $siykeiywomwwuoiw->paginate($ywmkwiwkosakssii[Constants::ausqeuugegoygouq] ?: 10, $ywmkwiwkosakssii[Constants::soquiwyuimckgiow] ?: ["\52"], $ywmkwiwkosakssii[Constants::ieyywsoeoqmceucw] ?: Constants::imywcsggckkcywgk, $ywmkwiwkosakssii[Constants::imywcsggckkcywgk] ?: 1); $oammesyieqmwuwyi = $ymiyawysimukkoso->items(); if ($oammesyieqmwuwyi) { goto uookseqsmsqgweuy; } $oammesyieqmwuwyi = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($ywmkwiwkosakssii, Constants::wikgqsqysyuoykse); uookseqsmsqgweuy: if (!$ywmkwiwkosakssii[Constants::wosqwewmqmyweqea]) { goto yeaqsiqgakskoykg; } $oammesyieqmwuwyi = $this->mgogaykgkoogasim()->cwgkcyyaymmsomqa($oammesyieqmwuwyi); yeaqsiqgakskoykg: $uuwmqqqiwksuaise = $ymiyawysimukkoso->total(); $qcugmkuyweqqyggk = $ymiyawysimukkoso->lastPage(); $weyoqgcesqgeusiu = $ymiyawysimukkoso->perPage(); $yeacayasgueouoqc = $ymiyawysimukkoso->currentPage(); } catch (Exception $wgaoewqkwgomoaai) { $oammesyieqmwuwyi = []; $uuwmqqqiwksuaise = 0; $weyoqgcesqgeusiu = 0; $qcugmkuyweqqyggk = 0; $yeacayasgueouoqc = 1; } return $this->oosqweumiyeayasy($oammesyieqmwuwyi, $uuwmqqqiwksuaise, $yeacayasgueouoqc, $qcugmkuyweqqyggk, $weyoqgcesqgeusiu); } public function oosqweumiyeayasy($oammesyieqmwuwyi = [], $uuwmqqqiwksuaise = 1, $yeacayasgueouoqc = 1, $ocqawgquwsqioses = 1, $weyoqgcesqgeusiu = 10) : array { return [Constants::ycuusiweasqygwiw => [Constants::uiiqiokqwmccomiu => $uuwmqqqiwksuaise, Constants::yusuiaeueqwieqqq => $ocqawgquwsqioses, Constants::asmooogmgyecqqka => $yeacayasgueouoqc, Constants::ausqeuugegoygouq => $weyoqgcesqgeusiu], Constants::qwumqqyuasyskkkc => $oammesyieqmwuwyi]; } public function iiqauwkoiguyeawu($siykeiywomwwuoiw, $wkkweuacukumqmya = ["\52"]) : array { return $this->aocqcwaksksgckaw($siykeiywomwwuoiw, $wkkweuacukumqmya); } private function aocqcwaksksgckaw($siykeiywomwwuoiw, $wkkweuacukumqmya = ["\52"], string $aiamqeawckcsuaou = Constants::isukcamoimieegam, $uusmaiomayssaecw = null) : array { $uomewyckeuqoqocu = []; $iwqgomgkuumgyswi = $this->ymkikmwesqgscscy($siykeiywomwwuoiw, $wkkweuacukumqmya, $aiamqeawckcsuaou, $uusmaiomayssaecw); if (!$iwqgomgkuumgyswi) { goto esgyqksmcukeuwyk; } $uomewyckeuqoqocu = $iwqgomgkuumgyswi->toArray(); esgyqksmcukeuwyk: return $uomewyckeuqoqocu; } private function ymkikmwesqgscscy($siykeiywomwwuoiw, $wkkweuacukumqmya = ["\52"], string $aiamqeawckcsuaou = Constants::isukcamoimieegam, $uusmaiomayssaecw = null) : ?Collection { if ($siykeiywomwwuoiw) { goto iigmgswcogqemgao; } $siykeiywomwwuoiw = $this->gqaysymikgeawkqa(); iigmgswcogqemgao: $iwqgomgkuumgyswi = null; if (!$siykeiywomwwuoiw) { goto aeockieewgkequae; } try { switch ($aiamqeawckcsuaou) { case Constants::kaqagayamqaywssm: $iwqgomgkuumgyswi = $siykeiywomwwuoiw->pluck($wkkweuacukumqmya, $uusmaiomayssaecw); goto ycaqooeeseougumo; default: $iwqgomgkuumgyswi = $siykeiywomwwuoiw->get($wkkweuacukumqmya); goto ycaqooeeseougumo; } eceeoiwuagocweus: ycaqooeeseougumo: } catch (Exception $wgaoewqkwgomoaai) { } aeockieewgkequae: return $iwqgomgkuumgyswi; } }