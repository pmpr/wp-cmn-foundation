<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66e5ebdb08957             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\_ORM\View; use Pmpr\Common\Foundation\_ORM\Database\Query; use Pmpr\Common\Foundation\_ORM\ORMObject; use Pmpr\Common\Foundation\_ORM\Traits\ORMTrait; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\WPListTable; class ListTable extends WPListTable { use ORMTrait; protected ?Query $query = null; protected bool $showMinimum = false; public function __construct(ORMObject $eqygaqsaqgiwokyo, bool $scsaeueqgyymsyei = false, array $ywmkwiwkosakssii = []) { $this->uqcykecycmgqkssy($eqygaqsaqgiwokyo); $this->query = $ywmkwiwkosakssii[Constants::meieskyuuegwwcsy] ?? null; $this->showMinimum = $scsaeueqgyymsyei; $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, $eqygaqsaqgiwokyo->kooiucqkggeagccu()); $gcgsqcoqciockquc = null; if (isset($ywmkwiwkosakssii[Constants::cacismqswgaewkuu])) { goto aqwcyyigiukqikui; } $gcgsqcoqciockquc = $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw()->oequuauskyumwyau(); goto kmgoiquwmsayywsc; aqwcyyigiukqikui: if (!is_string($ywmkwiwkosakssii[Constants::cacismqswgaewkuu])) { goto zawceoyikyuwoucg; } $gcgsqcoqciockquc = $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw()->wyucwisgamaqoiey($ywmkwiwkosakssii[Constants::cacismqswgaewkuu]); zawceoyikyuwoucg: kmgoiquwmsayywsc: if (!$gcgsqcoqciockquc) { goto gcgckeksyymcgays; } $gcgsqcoqciockquc->add_option(Constants::ausqeuugegoygouq, [Constants::wikgqsqysyuoykse => 20, Constants::ugqacsomqcgmoqug => $eqygaqsaqgiwokyo->cueaickeeoiwayou() . "\137\x70\x65\162\137\x70\141\147\145"]); $ywmkwiwkosakssii[Constants::cacismqswgaewkuu] = $gcgsqcoqciockquc; gcgckeksyymcgays: parent::__construct($ywmkwiwkosakssii); } protected function display_tablenav($wcagyqamwoksawik) { if ($this->qaccsiwkuqigokoe()) { goto eqmcakqmqkqkweww; } parent::display_tablenav($wcagyqamwoksawik); eqmcakqmqkqkweww: } public function oykkqiicyegyyssa() : self { $this->showMinimum = true; return $this; } public function qaccsiwkuqigokoe() : bool { return $this->showMinimum; } public function mgogaykgkoogasim() : ?Model { return $this->model; } function no_items() { echo $this->mgogaykgkoogasim()->oyeskqayoscwciem()->uikgwcuascgeissw("\x6e\157\164\x5f\x66\x6f\165\x6e\x64"); } public function single_row($igqsaukqcqscimok) { if (!($meywaqqsugaoeyys = $this->mgogaykgkoogasim())) { goto eocaacmwsqqqauuc; } $wwgucssaecqekuek = ["\144\x61\164\x61\x2d\151\144" => $meywaqqsugaoeyys->keeuqgyooycqoygw($igqsaukqcqscimok)]; $egkyssmuqcwaciya = [$meywaqqsugaoeyys->miwqiiqeegeqcwis(), $meywaqqsugaoeyys->oyeskqayoscwciem()->aiqioscoyukqgsgw()]; if (!$meywaqqsugaoeyys->ksmisoyyqmwgwiye($igqsaukqcqscimok)) { goto iwcsismeakueeiya; } $egkyssmuqcwaciya[] = "\165\156\x73\145\x65\x6e"; iwcsismeakueeiya: if (!($ikgwqyuyckaewsow = $meywaqqsugaoeyys->ukcqkkgyogwoiccm())) { goto ogmueiimgsogucqa; } foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { $egkyssmuqcwaciya[] = "{$aiowsaccomcoikus}\55{$meywaqqsugaoeyys->ogegcqqcukiaqscy($aiowsaccomcoikus, $igqsaukqcqscimok)}"; emsqksecccqeueoa: } gkmgqmcgouseqwyg: ogmueiimgsogucqa: if (!$egkyssmuqcwaciya) { goto kyoogyegwukaqoce; } $wwgucssaecqekuek["\x63\154\x61\163\163"] = $egkyssmuqcwaciya; kyoogyegwukaqoce: $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->awwqwouuoioauoaw("\x74\x72", $wwgucssaecqekuek); $this->single_row_columns($igqsaukqcqscimok); echo "\x3c\57\x74\162\x3e"; eocaacmwsqqqauuc: } protected function get_views() { $umwgoasiowmqcumw = []; if ($this->qaccsiwkuqigokoe()) { goto maougsuwuoiecwgy; } $umwgoasiowmqcumw = parent::get_views(); $umwgoasiowmqcumw = $this->ocksiywmkyaqseou("{$this->mgogaykgkoogasim()->miwqiiqeegeqcwis()}\x5f\x6d\x61\156\x61\x67\x65\137\x76\x69\145\167\x73", $umwgoasiowmqcumw, $this->qkeoieugywkooams()); maougsuwuoiecwgy: return $umwgoasiowmqcumw; } public function qkeoieugywkooams() : ?Builder { if (!(!$this->builder && ($meywaqqsugaoeyys = $this->mgogaykgkoogasim()))) { goto pseqauyuqgmccuwe; } $this->builder = $meywaqqsugaoeyys->gqaysymikgeawkqa(); pseqauyuqgmccuwe: return $this->builder; } public function get_columns() { $wkkweuacukumqmya = []; if (!($meywaqqsugaoeyys = $this->mgogaykgkoogasim())) { goto aiaayumowqswqqqk; } if (!$this->get_bulk_actions()) { goto smqeaeiimomewqsw; } $wkkweuacukumqmya["\x63\x62"] = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->qgsekwygcgawekeq("\x69\x6e\x70\x75\x74", [Constants::squoamkioomemiyi => Constants::semqugiuwygamias]); smqeaeiimomewqsw: $wkkweuacukumqmya = $this->ocksiywmkyaqseou("{$meywaqqsugaoeyys->miwqiiqeegeqcwis()}\137\155\x61\x6e\141\x67\145\137\x63\157\154\x75\155\x6e\163", $wkkweuacukumqmya); if (!$meywaqqsugaoeyys->igosuocmowawmwyq()) { goto wkgmgumyswiayyae; } $wkkweuacukumqmya[Constants::myikkigscysoykgy] = __("\101\143\x74\x69\157\x6e\163", PR__CMN__FOUNDATION); wkgmgumyswiayyae: aiaayumowqswqqqk: return $wkkweuacukumqmya; } public function ocimsyskieegygok() { return $this->caokeucsksukesyo()->giiecckwoyiawoyy()->gkwaaeusmsaywikg("\x73", ''); } public function column_cb($igqsaukqcqscimok) { if (!($meywaqqsugaoeyys = $this->mgogaykgkoogasim())) { goto awkmmuyuakwiaqae; } $gkswkiicccswksiq = $meywaqqsugaoeyys->oyeskqayoscwciem()->gwaeeegmgggawiyi("\145\x64\151\164\137\151\164\145\x6d\163"); if (!$this->uwkmaywceaaaigwo()->issssuygyewuaswa()->scmcyesmmikkucie($gkswkiicccswksiq)) { goto swmeecwwakawqqcw; } $this->iuygowkemiiwqmiw("\x63\x61\x6c\154\142\141\x63\x6b", [Constants::ciyoccqkiamemcmm => $meywaqqsugaoeyys->keeuqgyooycqoygw($igqsaukqcqscimok), Constants::qescuiwgsyuikume => __("\123\145\154\x65\143\164\40\111\164\x65\x6d\40\43\45\144", PR__CMN__FOUNDATION), Constants::TEXT => __("\x26\43\x38\x32\62\60\73\111\164\145\155\40\43\45\x64\46\43\x38\62\62\61\x3b\40\x69\163\40\x6c\157\143\153\x65\x64", PR__CMN__FOUNDATION)], ["\x63\x6c\x61\x73\163" => self::class, Constants::qaacaqioeyiuakeu => true]); swmeecwwakawqqcw: awkmmuyuakwiaqae: } protected function get_bulk_actions() : array { $ccowyogiqwikkkie = []; if ($this->qaccsiwkuqigokoe()) { goto tokguaiieequuwwa; } if (!(($meywaqqsugaoeyys = $this->mgogaykgkoogasim()) && $meywaqqsugaoeyys->mukyysqkgaimcygs())) { goto qogogggqiuuewakw; } $ccowyogiqwikkkie[Constants::DELETE] = __("\104\145\154\x65\x74\145", PR__CMN__FOUNDATION); qogogggqiuuewakw: $ccowyogiqwikkkie = (array) $this->ocksiywmkyaqseou("{$this->mgogaykgkoogasim()->miwqiiqeegeqcwis()}\x5f\x62\165\154\153\x5f\141\x63\x74\151\x6f\x6e\163", $ccowyogiqwikkkie, $this->umaeoegyykkkqmia()); tokguaiieequuwwa: return $ccowyogiqwikkkie; } public function get_sortable_columns() : array { return (array) $this->ocksiywmkyaqseou("{$this->mgogaykgkoogasim()->miwqiiqeegeqcwis()}\137\155\x61\x6e\x61\x67\145\137\163\x6f\162\164\141\x62\x6c\145\x5f\143\157\x6c\x75\155\x6e\x73", []); } protected function get_table_classes() : array { $cmkqisoeyioisqaw = $this->mgogaykgkoogasim()->quqgocgogegaauao(Constants::ugsuecoyuqcamsac); if (is_array($cmkqisoeyioisqaw)) { goto ccgmicuyeoggoecu; } $cmkqisoeyioisqaw = ["\167\151\144\x65\x66\x61\x74", "\163\164\x72\151\160\145\x64", $this->mgogaykgkoogasim()->miwqiiqeegeqcwis()]; ccgmicuyeoggoecu: return $cmkqisoeyioisqaw; } public function search_box($cmwygeyygwqaemaq, $euueacigmgoqkimu) { if (!(!$this->qaccsiwkuqigokoe() && (isset($_REQUEST["\163"]) || $this->has_items()))) { goto sgamuuiycksmssoi; } $euueacigmgoqkimu .= "\55\163\x65\x61\162\143\x68\55\x69\156\x70\165\x74"; $omwieegygisoswgw = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); if (!($sikaymiwcesagayc = $eiicaiwgqkgsekce->yyqgamuwwakgciey(Constants::gqiasegggowomgie))) { goto ewosekcicaqucsua; } $omwieegygisoswgw->awwqwouuoioauoaw("\x69\156\160\165\x74", [Constants::squoamkioomemiyi => "\150\151\x64\x64\145\156", Constants::NAME => "\x6f\162\x64\145\x72\x62\141\171", Constants::ciyoccqkiamemcmm => $sikaymiwcesagayc], true); ewosekcicaqucsua: if (!($umwqusowiqmyseom = $eiicaiwgqkgsekce->yyqgamuwwakgciey(Constants::awkcoioakcaougmq))) { goto mugaisykgmqcaggg; } $omwieegygisoswgw->awwqwouuoioauoaw("\x69\156\160\165\x74", [Constants::squoamkioomemiyi => "\x68\x69\x64\144\x65\x6e", Constants::NAME => "\x6f\162\144\145\162", Constants::ciyoccqkiamemcmm => $umwqusowiqmyseom], true); mugaisykgmqcaggg: $this->iuygowkemiiwqmiw("\x73\x65\141\162\x63\150\137\x62\157\x78", [Constants::TEXT => $cmwygeyygwqaemaq, Constants::eqkosgouogiogsko => $euueacigmgoqkimu, Constants::meieskyuuegwwcsy => esc_attr($this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->ukiweowwwwkiaqgo($eiicaiwgqkgsekce->yyqgamuwwakgciey("\x73"))), Constants::iueeekcmggceyscu => $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw()->mmkeekwmoemcwgew($cmwygeyygwqaemaq, "\142\x75\x74\x74\157\x6e", false, false, ["\111\104" => "\x73\145\141\162\143\x68\x2d\x73\x75\142\155\x69\164"])], ["\x63\154\x61\163\163" => self::class, Constants::qaacaqioeyiuakeu => true]); sgamuuiycksmssoi: } public function column_default($igqsaukqcqscimok, $column_name) { $aqykuigiuwmmcieu = ''; if (!($meywaqqsugaoeyys = $this->mgogaykgkoogasim())) { goto ceegwysaccigqqck; } $ceiwsaacewygcsqg = $meywaqqsugaoeyys->kumuygiiqswoyasy(); $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $aokagokqyuysuksm = (int) $igqsaukqcqscimok->{$ceiwsaacewygcsqg}; if ($column_name === Constants::myikkigscysoykgy) { goto oukqakowgcgeugam; } $eqgoocgaqwqcimie = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($igqsaukqcqscimok, $column_name, ''); $aaqqkgyougeiueyq = $meywaqqsugaoeyys->oyeskqayoscwciem()->uqeoyqiwywwmsiew($column_name); $aqykuigiuwmmcieu = $this->ocksiywmkyaqseou("{$meywaqqsugaoeyys->miwqiiqeegeqcwis()}\x5f\155\141\156\x61\x67\x65\x5f\x63\x75\163\x74\x6f\x6d\x5f\x63\157\x6c\165\155\156", '', $column_name, $eqgoocgaqwqcimie, $aokagokqyuysuksm, $igqsaukqcqscimok); if ($aqykuigiuwmmcieu) { goto wameiecycmkcuimk; } if ($aaqqkgyougeiueyq instanceof DateTime) { goto ksseoiqcgiqsamwy; } $aqykuigiuwmmcieu = $eqgoocgaqwqcimie; goto qgeiemoywoccmwgw; ksseoiqcgiqsamwy: $aqykuigiuwmmcieu = $this->seukicauekqqwwme($eqgoocgaqwqcimie, $column_name); qgeiemoywoccmwgw: wameiecycmkcuimk: if (!$aaqqkgyougeiueyq instanceof Enum) { goto ecyauwageoukkaaq; } $aqykuigiuwmmcieu = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($igqsaukqcqscimok, $column_name . Constants::icmokuskwoskgace, $aqykuigiuwmmcieu); ecyauwageoukkaaq: $ccowyogiqwikkkie = $this->get_bulk_actions(); $awyomkauyyymugeq = !empty($ccowyogiqwikkkie) ? 1 : 0; $wkkweuacukumqmya = $this->get_columns(); $yygmoeguaqyumuui = array_keys($wkkweuacukumqmya); if (!($column_name === $yygmoeguaqyumuui[$awyomkauyyymugeq])) { goto cesywumicwqkaeaq; } if (!($aqykuigiuwmmcieu && !$this->caokeucsksukesyo()->gkksucgseqqemesc()->has($aqykuigiuwmmcieu, "\141"))) { goto oamaoeaeoyckwmgk; } $iwywmkygwewiamwm = $meywaqqsugaoeyys->uesweuocqoywoyms($aokagokqyuysuksm); if ($iwywmkygwewiamwm) { goto cceesacikyckyiim; } $iwywmkygwewiamwm = $meywaqqsugaoeyys->yyykkcyiksewsoqy($aokagokqyuysuksm); cceesacikyckyiim: if (!$iwywmkygwewiamwm) { goto uqqawaaiywcggesu; } $aqykuigiuwmmcieu = $swqimwqeweekeusq->ciuuiyckmsygceis($swqimwqeweekeusq->yuawgssgauywkiia($aqykuigiuwmmcieu, $iwywmkygwewiamwm, ["\143\x6c\141\163\163" => "\x72\157\x77\55\x74\x69\164\154\145", "\141\x72\151\x61\x2d\x6c\x61\x62\145\154" => sprintf(__("\105\x64\x69\x74\40\x22\x25\x73\x22", PR__CMN__FOUNDATION), $aqykuigiuwmmcieu)])); $aqykuigiuwmmcieu .= $swqimwqeweekeusq->uuccukgasskgimsq("\x62\x75\164\164\157\156", ["\x74\x79\x70\145" => "\x62\x75\164\x74\157\156", "\x63\x6c\141\x73\163" => "\x74\x6f\147\x67\154\145\55\162\157\167"], $swqimwqeweekeusq->gmqyuaqwgiayskei(__("\123\150\x6f\x77\40\155\157\x72\x65\x20\144\x65\164\141\151\x6c\x73", PR__CMN__FOUNDATION), ["\x63\154\x61\163\x73" => "\163\x63\162\x65\145\x6e\x2d\162\145\x61\144\145\x72\55\x74\145\170\164"])); uqqawaaiywcggesu: oamaoeaeoyckwmgk: cesywumicwqkaeaq: goto aoyqwwsacwqumucg; oukqakowgcgeugam: $ccowyogiqwikkkie = $meywaqqsugaoeyys->igosuocmowawmwyq($igqsaukqcqscimok); foreach ($ccowyogiqwikkkie as $uusmaiomayssaecw => $aiamqeawckcsuaou) { if (is_array($aiamqeawckcsuaou)) { goto gyaoqaggggoiaoqs; } if (!is_string($aiamqeawckcsuaou)) { goto memcsokyqmowucuo; } $aqykuigiuwmmcieu .= $aiamqeawckcsuaou; memcsokyqmowucuo: goto ciwcwcqkgkmoguok; gyaoqaggggoiaoqs: $wkaqekwwgqsqwcoi = $aiamqeawckcsuaou[Constants::qgqyauaqwqmqseim] ?? ''; $cmwygeyygwqaemaq = $aiamqeawckcsuaou[Constants::qescuiwgsyuikume] ?? ''; if (!$cmwygeyygwqaemaq) { goto keygauyiuaycggcw; } $gskauacumcmekigs = $this->caokeucsksukesyo()->wmkogisswkckmeua()->qoeiescseggagsqs($uusmaiomayssaecw . $aokagokqyuysuksm)->qigsyyqgewgskemg("\x61\163\55\x69\x63\157\156")->gswweykyogmsyawy($cmwygeyygwqaemaq)->saemoowcasogykak($wkaqekwwgqsqwcoi)->ekyuiyywyoyksmuy()->sueyawuweyoqyeaq($aiamqeawckcsuaou[Constants::ysskgssgwuwmqwym] ?? []); $aegqqyquausewoqe = $aiamqeawckcsuaou[Constants::ismwycwsasweqomi] ?? []; if (!$aegqqyquausewoqe) { goto wwugkwcimumgukko; } $gskauacumcmekigs->ukmcmuaawacquume($aegqqyquausewoqe); wwugkwcimumgukko: $aqykuigiuwmmcieu .= $gskauacumcmekigs->render([Constants::qaacaqioeyiuakeu => false]); keygauyiuaycggcw: ciwcwcqkgkmoguok: oouisuwokmqgwiau: } ymsscygscwwicumm: aoyqwwsacwqumucg: ceegwysaccigqqck: return $aqykuigiuwmmcieu; } public function umaeoegyykkkqmia() : array { $eqgoocgaqwqcimie = $ymqmyyeuycgmigyo = null; if (!($meywaqqsugaoeyys = $this->mgogaykgkoogasim())) { goto ayggscyaoccukyso; } $cqcsaaswaciweiie = $meywaqqsugaoeyys->ukcqkkgyogwoiccm(); $ymqmyyeuycgmigyo = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->gkwaaeusmsaywikg($meywaqqsugaoeyys::oqaymwacgaosqsom, false); $eqgoocgaqwqcimie = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->gkwaaeusmsaywikg($meywaqqsugaoeyys::ykyeawseyyawawyy, false); if (!((!$eqgoocgaqwqcimie || !$ymqmyyeuycgmigyo) && $cqcsaaswaciweiie)) { goto uyueemusgoakawmc; } $eqgoocgaqwqcimie = Constants::ALL; uyueemusgoakawmc: ayggscyaoccukyso: return [Constants::NAME => $ymqmyyeuycgmigyo, Constants::ciyoccqkiamemcmm => $eqgoocgaqwqcimie]; } public function before_pagination(?Builder $siykeiywomwwuoiw) : ?Builder { return $siykeiywomwwuoiw; } public function prepare_items($ywmkwiwkosakssii = []) { if (!($meywaqqsugaoeyys = $this->mgogaykgkoogasim())) { goto csqwmisikmgeaaky; } $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::kkcqmwgccaygggcu => 1, Constants::awkcoioakcaougmq => Constants::omaksceqmigeaoko, Constants::yayciqueeakqwese => '', Constants::iaesmigkgskyygem => null, Constants::gqiasegggowomgie => $meywaqqsugaoeyys->kumuygiiqswoyasy(), Constants::ausqeuugegoygouq => $this->get_items_per_page($meywaqqsugaoeyys->miwqiiqeegeqcwis() . "\137\x70\145\162\137\160\141\147\x65")]); if (!isset($ywmkwiwkosakssii[Constants::cqcimoqckgmaacyw])) { goto iiakoqmowuggmkqw; } $ywmkwiwkosakssii[Constants::gqiasegggowomgie] = $ywmkwiwkosakssii[Constants::cqcimoqckgmaacyw]; iiakoqmowuggmkqw: $tsuauommsquiesmk = $this->umaeoegyykkkqmia(); $siykeiywomwwuoiw = $ywmkwiwkosakssii[Constants::iaesmigkgskyygem]; if ($tsuauommsquiesmk[Constants::ciyoccqkiamemcmm] && $tsuauommsquiesmk[Constants::ciyoccqkiamemcmm] !== Constants::ALL) { goto uiuekqekiguikuce; } if ($siykeiywomwwuoiw) { goto cuqeayuiccuwcyua; } $siykeiywomwwuoiw = $meywaqqsugaoeyys->gqaysymikgeawkqa(); cuqeayuiccuwcyua: goto comiusqosmykagiq; uiuekqekiguikuce: $siykeiywomwwuoiw = $meywaqqsugaoeyys->wkmkqaiwuqouweye($tsuauommsquiesmk[Constants::NAME], $tsuauommsquiesmk[Constants::ciyoccqkiamemcmm], "\x3d", $siykeiywomwwuoiw); comiusqosmykagiq: if ($siykeiywomwwuoiw) { goto qewmkgeeuomgomia; } $this->items = []; goto wmasiggggymwkeqs; qewmkgeeuomgomia: $siykeiywomwwuoiw = $this->ocksiywmkyaqseou("\157\x72\155\x5f\x76\151\145\x77\137\151\x6e\x64\145\170\x5f\142\165\x69\154\144\145\162", $siykeiywomwwuoiw, $meywaqqsugaoeyys); $siykeiywomwwuoiw = $this->ocksiywmkyaqseou("\x6f\x72\155\137\166\x69\x65\x77\137\x69\156\x64\145\x78\137{$meywaqqsugaoeyys->miwqiiqeegeqcwis()}\x5f\142\x75\151\154\144\x65\162", $siykeiywomwwuoiw, $meywaqqsugaoeyys); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $siykeiywomwwuoiw = $this->before_pagination($siykeiywomwwuoiw); $siykeiywomwwuoiw = $meywaqqsugaoeyys->aaeswuecycyquqwk($siykeiywomwwuoiw, $this); $siykeiywomwwuoiw = $meywaqqsugaoeyys->ewkswoqykwsuckok($siykeiywomwwuoiw, $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::gqiasegggowomgie), $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::awkcoioakcaougmq, Constants::omaksceqmigeaoko)); if (!($qwcmueausqgiwigy = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::yayciqueeakqwese, false))) { goto vwyusaemeqkswgee; } $siykeiywomwwuoiw = $meywaqqsugaoeyys->ygyguskuyykskwko($qwcmueausqgiwigy, $siykeiywomwwuoiw); vwyusaemeqkswgee: $weyoqgcesqgeusiu = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::ausqeuugegoygouq); $gmwiogsuisuoiwqu = $meywaqqsugaoeyys->aeggeuqycwawueqy($siykeiywomwwuoiw, [Constants::imywcsggckkcywgk => $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::kkcqmwgccaygggcu), Constants::ausqeuugegoygouq => $weyoqgcesqgeusiu, Constants::wosqwewmqmyweqea => false]); $this->items = $gmwiogsuisuoiwqu[Constants::qwumqqyuasyskkkc]; $this->set_pagination_args(["\160\145\162\137\x70\141\147\x65" => $weyoqgcesqgeusiu, "\164\157\164\x61\154\x5f\x69\x74\x65\155\163" => $gmwiogsuisuoiwqu["\160\x61\147\151\x6e\x61\164\x69\157\x6e"]["\164\x6f\x74\x61\154"], "\164\x6f\164\141\154\x5f\160\x61\x67\x65\x73" => $gmwiogsuisuoiwqu["\160\141\147\151\156\x61\x74\151\157\x6e"]["\160\141\147\145\x73"]]); wmasiggggymwkeqs: csqwmisikmgeaaky: } public function seukicauekqqwwme($ocogsiouoiuuguym, $qgoqiacsiccwoawi) { return $this->caokeucsksukesyo()->gagsyqagguwwauac()->ekasyoagocygouom($ocogsiouoiuuguym); } public function sokuygywyckaocci() : array { return []; } public function extra_tablenav($wcagyqamwoksawik) { if ($this->qaccsiwkuqigokoe()) { goto ayekogimgycgmgau; } $ccowyogiqwikkkie = $this->sokuygywyckaocci(); if (!$ccowyogiqwikkkie) { goto skokkuuieagmuwgm; } $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->awwqwouuoioauoaw("\x64\151\166", ["\x63\x6c\141\163\163" => "\160\x72\55\x70\x72\x69\x6d\x61\162\x79\x2d\x61\x63\x74\x69\x6f\156\x73"], true, $ccowyogiqwikkkie); skokkuuieagmuwgm: parent::extra_tablenav($wcagyqamwoksawik); ayekogimgycgmgau: } protected function handle_row_actions($igqsaukqcqscimok, $column_name, $micmwmywmkguiyyk) : string { $ccowyogiqwikkkie = ''; if (!($micmwmywmkguiyyk === $column_name)) { goto skuykkqcgakewusu; } $eqygaqsaqgiwokyo = $this->aqaqiqcucamsygaq(); $eqgoocgaqwqcimie = $eqygaqsaqgiwokyo->mwyqswsaeeewsosm($igqsaukqcqscimok); $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $ccowyogiqwikkkie = []; if (!($eqwekkkkmkkeismg = $meywaqqsugaoeyys->yyykkcyiksewsoqy($eqgoocgaqwqcimie))) { goto isqemmgcymcqgmyu; } $ccowyogiqwikkkie[Constants::awysmmukegasimmq] = $swqimwqeweekeusq->yuawgssgauywkiia(__("\x45\144\151\x74", PR__CMN__FOUNDATION), $eqwekkkkmkkeismg, ["\141\x72\151\141\55\x6c\141\x62\x65\154" => __("\105\x64\x69\x74", PR__CMN__FOUNDATION)]); $ccowyogiqwikkkie[Constants::kyccsamqmuwysaws] = $swqimwqeweekeusq->yuawgssgauywkiia(__("\x51\x75\151\x63\153\x20\x45\144\151\164", PR__CMN__FOUNDATION), "\43", ["\x63\x6c\x61\x73\x73" => "\x6f\162\x6d\x2d\x71\165\151\143\153\55\x65\x64\151\164", "\x61\162\151\x61\55\x6c\x61\142\145\154" => __("\121\165\x69\143\x6b\40\x45\144\151\x74", PR__CMN__FOUNDATION), "\x64\x61\164\x61\55\x6d\157\144\x65\x6c" => $eqygaqsaqgiwokyo::class, "\144\x61\x74\141\55\x6f\142\x6a\145\x63\164" => $this->caokeucsksukesyo()->owgcciayoweymuws()->wegeuqkaeuusoike($eqygaqsaqgiwokyo->ekuykcasmcmywewi($igqsaukqcqscimok))]); isqemmgcymcqgmyu: if (!($aoyimogsmooskgsm = $meywaqqsugaoeyys->uesweuocqoywoyms($eqgoocgaqwqcimie))) { goto muuiwammayaceuue; } $ccowyogiqwikkkie[Constants::ieioeisgwcgysukw] = $swqimwqeweekeusq->yuawgssgauywkiia(__("\x53\x68\157\167", PR__CMN__FOUNDATION), $aoyimogsmooskgsm, ["\x61\162\x69\141\x2d\154\x61\142\x65\154" => __("\x53\x68\x6f\x77", PR__CMN__FOUNDATION)]); muuiwammayaceuue: if (!($maycsqycmwyoqwwy = $meywaqqsugaoeyys->cgccmsewskigcuig($eqgoocgaqwqcimie))) { goto aqmauesokgqoyugm; } $ccowyogiqwikkkie[Constants::DELETE] = $meywaqqsugaoeyys->rkmkouiquumiecqy($maycsqycmwyoqwwy); aqmauesokgqoyugm: $euiiykgssaaqwcmw = $meywaqqsugaoeyys->eaccsioyemcakcss($igqsaukqcqscimok); if (!$euiiykgssaaqwcmw) { goto ummgomwmsqygiqcy; } foreach ($euiiykgssaaqwcmw as $uusmaiomayssaecw => $yaaiaiskqiiiugmm) { if (is_string($yaaiaiskqiiiugmm)) { goto sgiescgmgsowcakk; } if (!is_array($yaaiaiskqiiiugmm)) { goto wskwmocqgakykmgw; } $ccowyogiqwikkkie[$uusmaiomayssaecw] = $swqimwqeweekeusq->uuccukgasskgimsq("\x61", $yaaiaiskqiiiugmm[Constants::ysskgssgwuwmqwym] ?? [], $yaaiaiskqiiiugmm[Constants::TEXT] ?? ''); wskwmocqgakykmgw: goto cgeuosayqssasuou; sgiescgmgsowcakk: $ccowyogiqwikkkie[$uusmaiomayssaecw] = $yaaiaiskqiiiugmm; cgeuosayqssasuou: qyoscouawykeimiu: } scigcaogysowccsk: ummgomwmsqygiqcy: $ccowyogiqwikkkie = $this->ocksiywmkyaqseou("{$eqygaqsaqgiwokyo->cueaickeeoiwayou()}\x5f\162\157\x77\x5f\141\x63\x74\151\157\x6e\x73", $ccowyogiqwikkkie, $eqgoocgaqwqcimie, $this->umaeoegyykkkqmia(), $igqsaukqcqscimok); $ccowyogiqwikkkie = $this->row_actions($ccowyogiqwikkkie); skuykkqcgakewusu: return $ccowyogiqwikkkie; } }