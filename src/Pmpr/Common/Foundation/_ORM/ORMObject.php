<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66e5ebdb08957             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\_ORM; use Exception; use Pmpr\Common\Foundation\_ORM\Database\Connection; use Pmpr\Common\Foundation\_ORM\Database\Model; use Pmpr\Common\Foundation\_ORM\Database\Notification; use Pmpr\Common\Foundation\_ORM\Database\Query; use Pmpr\Common\Foundation\_ORM\Database\Schema\Boolean; use Pmpr\Common\Foundation\_ORM\Database\Schema\Enum; use Pmpr\Common\Foundation\_ORM\Database\Schema\Foreign; use Pmpr\Common\Foundation\_ORM\Database\Schema\Json; use Pmpr\Common\Foundation\_ORM\Database\Schema\Schema; use Pmpr\Common\Foundation\_ORM\Database\Schema\Text; use Pmpr\Common\Foundation\_ORM\Database\Updater; use Pmpr\Common\Foundation\_ORM\View\View; use Pmpr\Common\Foundation\Container\Container; use Pmpr\Common\Foundation\FormGenerator\Traits\FieldsTrait; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Traits\ArgsTrait; use Pmpr\Common\Foundation\Traits\CacheTrait; use Pmpr\Common\Foundation\Traits\LabelsTrait; use WP_Error; abstract class ORMObject extends Common { use ArgsTrait, CacheTrait, FieldsTrait, LabelsTrait; protected string $name = ''; protected string $prefix = ''; protected array $views = []; protected array $errors = []; protected array $schemas = []; public function ikcgmcycisiccyuc() { $this->register(); if ($this->masyeqmaiuqwosei()) { goto uyouoeaoqcieeayg; } $yyauwyaeewsickwk = $this->caokeucsksukesyo()->owgcciayoweymuws(); $this->usuqmwksoeaayaig($yyauwyaeewsickwk->kwuyaykukcmaqggg($yyauwyaeewsickwk->mkwcwqkqeqkqyggc(static::uqggkiomyiceyooa()))); uyouoeaoqcieeayg: if ($this->ogqgmqymcwsqikme()) { goto sumsswekusmugwcc; } $this->prefix = $this->akuociswqmoigkas(); sumsswekusmugwcc: $this->mcacmissyeeqkeak(Constants::meieskyuuegwwcsy, Query::class)->mcacmissyeeqkeak(Constants::emkkgysokckswycs, Model::class)->mcacmissyeeqkeak(Constants::kiecmqmgmigmomck, Connection::class); if (!$this->wuyimwscukmqqsqk(Constants::eguoukkowuumuwgi)) { goto quoamckmecwqkkus; } $this->mcacmissyeeqkeak(Constants::eguoukkowuumuwgi, Notification::class); quoamckmecwqkkus: } public function ikucooaiykwuciii() { } public function aioqieywgykaaoec() : array { if (!empty($this->views)) { goto suaouieqqoauuwme; } $this->ikucooaiykwuciii(); suaouieqqoauuwme: return $this->views; } public function aoqwywcqmoqaukkq() { } public function ugmceccgwaaaigiy() : array { if (!empty($this->fields)) { goto kewooggoaouemcaq; } $this->aoqwywcqmoqaukkq(); kewooggoaouemcaq: return $this->fields; } public function uwmqacgewuauagai() { $weiysqkaieiyiuug = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); if (!$this->kcsywgyywsgqgawm()) { goto uwwooikcoamioeaq; } $this->cquokmemekqqywgi($weiysqkaieiyiuug->omkueasmegecueyk(Constants::sugcoawcimusgaga)->eyygsasuqmommkua(0)->jyumyyugiwwiqomk(999)->aaikegqyiyeoygce("\137\137\162\145\164\x75\x72\x6e\x5f\x66\x61\154\x73\x65")); uwwooikcoamioeaq: } public function aeosueemgsygqese() : ?array { if (!empty($this->schemas)) { goto qcsceusmgwewumuy; } $this->uwmqacgewuauagai(); qcsceusmgwewumuy: return $this->schemas; } public function uqeoyqiwywwmsiew($uusmaiomayssaecw) : ?Schema { return $this->aeosueemgsygqese()[$uusmaiomayssaecw] ?? null; } public function cquokmemekqqywgi(Schema $aaqqkgyougeiueyq) : self { if ($aaqqkgyougeiueyq->yywskysiycwkwsgw()) { goto yqysciwesgsiuayi; } $aaqqkgyougeiueyq->jyumyyugiwwiqomk(count($this->aeosueemgsygqese())); yqysciwesgsiuayi: $this->schemas[$aaqqkgyougeiueyq->mwikyscisascoeea()] = $aaqqkgyougeiueyq; return $this; } public function ckaemmoueyosqqkq(array $qssskwiqeumgkago) : self { foreach ($qssskwiqeumgkago as $aiowsaccomcoikus) { if (!$aiowsaccomcoikus instanceof Schema) { goto muygyqckegkuiwyi; } $this->cquokmemekqqywgi($aiowsaccomcoikus); muygyqckegkuiwyi: ukuuumkkameeuesk: } kwwoucisuqcmqmqu: return $this; } public function masyeqmaiuqwosei() : bool { return !empty($this->name); } public function usuqmwksoeaayaig(string $ymqmyyeuycgmigyo) : self { $this->name = $ymqmyyeuycgmigyo; return $this; } public function aakmagwggmkoiiyu() : string { return $this->name; } public function cueaickeeoiwayou() : string { return $this->ogqgmqymcwsqikme() . $this->aakmagwggmkoiiyu(); } public function ogqgmqymcwsqikme() : string { $yuwymayicwwqiske = $this->prefix; if (empty($yuwymayicwwqiske)) { goto osgmksikyyqqcaag; } $yuwymayicwwqiske .= "\x5f"; osgmksikyyqqcaag: return $yuwymayicwwqiske; } public final function owicscwgeuqcqaig() : Query { return $this->maqyuuwugyqqiqkg(Constants::meieskyuuegwwcsy); } public final function mgogaykgkoogasim() : Model { return $this->maqyuuwugyqqiqkg(Constants::emkkgysokckswycs); } public final function ckomwwkowkmwakmk() : Updater { return $this->maqyuuwugyqqiqkg(Constants::UPDATE); } public final function ayqesuasiggqoeeo() : ?Notification { return $this->maqyuuwugyqqiqkg(Constants::wqyyquqcmoegoyao); } public final function ysgiswuowuciwqaq() : Connection { return $this->maqyuuwugyqqiqkg(Constants::kiecmqmgmigmomck); } private function maqyuuwugyqqiqkg(string $ymqmyyeuycgmigyo) { $egkyssmuqcwaciya = $this->imkyoqyocosuqasu($ymqmyyeuycgmigyo); if (!($egkyssmuqcwaciya && !is_object($egkyssmuqcwaciya) && class_exists($egkyssmuqcwaciya))) { goto qkmmgqgcegcuawuu; } if (is_subclass_of($egkyssmuqcwaciya, Container::class)) { goto gsewiomcwceysquc; } $mksyucucyswaukig = new $egkyssmuqcwaciya(); goto ouyqaaywykeqimmi; gsewiomcwceysquc: $mksyucucyswaukig = $egkyssmuqcwaciya::symcgieuakksimmu(); ouyqaaywykeqimmi: if (!($mksyucucyswaukig instanceof Query || $mksyucucyswaukig instanceof Notification)) { goto migwkuscokgmogea; } $mksyucucyswaukig->uqcykecycmgqkssy($this); if (!$mksyucucyswaukig instanceof Notification) { goto egicsmysugywycqq; } $mksyucucyswaukig->dimsswsyskyecscu($this->imkyoqyocosuqasu(Constants::wqyyquqcmoegoyao)[Constants::uqkkmyyqwqaqeage] ?? []); egicsmysugywycqq: migwkuscokgmogea: if (!$mksyucucyswaukig instanceof Model) { goto ooiaoiygiiamsmum; } $mksyucucyswaukig->yusomaossiaeqoiu($this->kumuygiiqswoyasy()); ooiaoiygiiamsmum: $this->igiywquyccyiaucw($ymqmyyeuycgmigyo, $mksyucucyswaukig); qkmmgqgcegcuawuu: return $this->imkyoqyocosuqasu($ymqmyyeuycgmigyo); } public function saemoowcasogykak(string $wkaqekwwgqsqwcoi) : self { $this->igiywquyccyiaucw(Constants::qgqyauaqwqmqseim, $wkaqekwwgqsqwcoi); return $this; } public function eyamqkqiykagecsw() : ?string { return $this->imkyoqyocosuqasu(Constants::qgqyauaqwqmqseim); } public function guiaswksukmgageq(string $sisssumicskyceeg) : self { $this->igiywquyccyiaucw(Constants::egyqyoogakommguc, $sisssumicskyceeg); return $this; } public function giiayuqckuiecosm() : ?string { return $this->imkyoqyocosuqasu(Constants::egyqyoogakommguc); } public function muuwuqssqkaieqge(string $kcumookcwskcyqak) : self { $this->igiywquyccyiaucw(Constants::mmieaueggwwaokig, $kcumookcwskcyqak); return $this; } public function qeeuwmmksmqiuywg() : ?string { return $this->imkyoqyocosuqasu(Constants::mmieaueggwwaokig); } public function uaywwyimkgwyqwya(array $gegaigmgieqwgasy = []) : self { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($gegaigmgieqwgasy, [Constants::wuowaiyouwecckaw => '', Constants::qoquaeuooeycomks => $this->akuociswqmoigkas(), Constants::yiuwgggacagyeqmo => 10]); $this->igiywquyccyiaucw(Constants::mkywiykkiqimykiw, $ywmkwiwkosakssii); return $this; } public function licekmysugkqeoay(string $uusmaiomayssaecw) { return $this->imkyoqyocosuqasu(Constants::mkywiykkiqimykiw)[$uusmaiomayssaecw] ?? ''; } public function cokoiaeeomgssqgy() : string { return $this->ysgiswuowuciwqaq()->cokoiaeeomgssqgy($this->cueaickeeoiwayou()); } public function myywwqkyiwawwquy(string $qgoqiacsiccwoawi) : string { return $this->owicscwgeuqcqaig()->myywwqkyiwawwquy($this->cokoiaeeomgssqgy(), $qgoqiacsiccwoawi); } public function kmgukcsewikeswco(string $qgoqiacsiccwoawi, string $aikcyecgesuiaacw) : string { return $this->owicscwgeuqcqaig()->kmgukcsewikeswco($this->cokoiaeeomgssqgy(), $qgoqiacsiccwoawi, $aikcyecgesuiaacw); } public function mwyqswsaeeewsosm($mksyucucyswaukig) : int { $aokagokqyuysuksm = 0; if (is_numeric($mksyucucyswaukig)) { goto csismgmuaiogeucq; } if (is_object($mksyucucyswaukig)) { goto ggqmaecmwgeqkuge; } if (!is_array($mksyucucyswaukig)) { goto auouiegmaiasywkw; } $aokagokqyuysuksm = $mksyucucyswaukig[$this->kumuygiiqswoyasy()] ?? 0; auouiegmaiasywkw: goto ieyimqciuswcokke; ggqmaecmwgeqkuge: $aokagokqyuysuksm = $this->waecsyqmwascmqoa($mksyucucyswaukig, $this->kumuygiiqswoyasy(), 0); ieyimqciuswcokke: goto aqaseyqwkgoyaiyg; csismgmuaiogeucq: $aokagokqyuysuksm = $mksyucucyswaukig; aqaseyqwkgoyaiyg: return $aokagokqyuysuksm; } public function kumuygiiqswoyasy(bool $iqoeaggekweuwcgw = false) : string { $ceiwsaacewygcsqg = $this->imkyoqyocosuqasu(Constants::ywgycmwesywaycws, Constants::gouqcwikiiygyasc); if (!$iqoeaggekweuwcgw) { goto gkekqmkyumkmywky; } $ceiwsaacewygcsqg = $this->myywwqkyiwawwquy($ceiwsaacewygcsqg); gkekqmkyumkmywky: return $ceiwsaacewygcsqg; } public final function save(array $icwicymcioeyeyek, bool $oeyyimgeuqaseqai = false) { $sogksuscggsicmac = []; $ceiwsaacewygcsqg = $this->mgogaykgkoogasim()->kumuygiiqswoyasy(); $aagguieukukuysce = $this->caokeucsksukesyo()->euekiyuksecoccus(); if ($this->owicscwgeuqcqaig()->gqaysymikgeawkqa()) { goto ssqemoqcimayewqm; } $sogksuscggsicmac = $aagguieukukuysce->gosmqcmmomkqwmis(__("\x42\165\151\154\x64\x65\x72\40\x69\x73\40\x6e\x75\x6c\154\x2c\40\155\x61\x79\x62\145\40\x74\x61\x62\x6c\x65\40\156\x6f\x74\x20\143\162\145\141\x74\145\144\56", PR__CMN__FOUNDATION)); goto kquwekemiawwmuqs; ssqemoqcimayewqm: try { $meywaqqsugaoeyys = $this->mgogaykgkoogasim(); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $yeacayasgueouoqc = []; $icwicymcioeyeyek = $this->oiemcgqyamccuagg($icwicymcioeyeyek); if ($aokagokqyuysuksm = $gkyciwoiiisgywcs->get($icwicymcioeyeyek, $ceiwsaacewygcsqg)) { goto ywgqeosekkwswyac; } $iggwcmkgmicmouyu = true; $this->wesecyecmgmcuqai($icwicymcioeyeyek); $this->iqauecoycmqkimak(Constants::uokqiiikaewkmiem, $icwicymcioeyeyek); if ($this->ymugiyemyggoumci()) { goto muoougyakwgcicuo; } $oiegkigmcqckmuiu = $meywaqqsugaoeyys::class; $meywaqqsugaoeyys = new $oiegkigmcqckmuiu(); muoougyakwgcicuo: goto qqcusuaqmyukwyqk; ywgqeosekkwswyac: $iggwcmkgmicmouyu = false; $meywaqqsugaoeyys = $meywaqqsugaoeyys->cyyiiykmaeuqqgok($aokagokqyuysuksm); $yeacayasgueouoqc = $this->ccekeuwwqqoiwuwy($meywaqqsugaoeyys); $this->iasywwkguyauiywu($yeacayasgueouoqc, $icwicymcioeyeyek); $this->iqauecoycmqkimak(Constants::uokqiiikaewkmiem, $icwicymcioeyeyek, $yeacayasgueouoqc); qqcusuaqmyukwyqk: if (!(!$oeyyimgeuqaseqai && !$this->ymugiyemyggoumci())) { goto souucimemowwaseo; } $this->iqauecoycmqkimak(Constants::osgiowwgoumoscii, $icwicymcioeyeyek, $yeacayasgueouoqc); souucimemowwaseo: if ($meywaqqsugaoeyys instanceof Model) { goto mkayykckiywayuko; } $sogksuscggsicmac = $aagguieukukuysce->gosmqcmmomkqwmis(__("\x4f\x62\152\145\143\164\40\151\163\40\156\157\x74\40\x73\x75\142\143\x6c\x61\x73\163\40\157\146\40\x4d\x6f\144\x65\x6c", PR__CMN__FOUNDATION)); goto wmgyemaskuuowuum; mkayykckiywayuko: $ueeagokqmgisgauy = $this->ocksiywmkyaqseou("\x6f\162\x6d\x5f\x73\x61\x76\145\x5f\x76\x61\x6c\x69\144\x61\164\x69\157\156", $this->ymoyyqeymakckaee(), $icwicymcioeyeyek, $meywaqqsugaoeyys, $this); if (empty($ueeagokqmgisgauy)) { goto akkwoqycamwckeui; } $sogksuscggsicmac = $aagguieukukuysce->gosmqcmmomkqwmis($ueeagokqmgisgauy); goto goimqkkiyegggysa; akkwoqycamwckeui: $meywaqqsugaoeyys->oogeaysoqqooqoam($icwicymcioeyeyek, $this); $this->qmqogusoaqeygewm($icwicymcioeyeyek); if ($meywaqqsugaoeyys->save()) { goto qqwukskiymcymgqc; } $sogksuscggsicmac = $aagguieukukuysce->gosmqcmmomkqwmis(sprintf(__("\103\141\156\40\x6e\157\164\x20\163\x61\x76\145\x20\45\163\x2e", PR__CMN__FOUNDATION), $this->giiayuqckuiecosm())); goto ksoygkwycsqicooa; qqwukskiymcymgqc: $aokagokqyuysuksm = $meywaqqsugaoeyys->{$ceiwsaacewygcsqg}; $meywaqqsugaoeyys->qiwiemuiqiugqqqg($icwicymcioeyeyek, $this); if ($iggwcmkgmicmouyu) { goto oqyeyuocsyoeogim; } $this->eyusemoqmesiucoq($aokagokqyuysuksm, $yeacayasgueouoqc, $icwicymcioeyeyek); goto egawiicamoykemqq; oqyeyuocsyoeogim: $this->iomcmaskksoyqwws($aokagokqyuysuksm, $icwicymcioeyeyek); $this->ayqesuasiggqoeeo()?->notify($aokagokqyuysuksm, $icwicymcioeyeyek); egawiicamoykemqq: $this->scmmymqkoyckgkam($aokagokqyuysuksm, $icwicymcioeyeyek); $this->ymgmacamemggesko(); ksoygkwycsqicooa: goimqkkiyegggysa: wmgyemaskuuowuum: } catch (Exception $wgaoewqkwgomoaai) { $sogksuscggsicmac = $aagguieukukuysce->gosmqcmmomkqwmis($aagguieukukuysce->kyacickkomkioeyu($wgaoewqkwgomoaai, false)); } kquwekemiawwmuqs: return $sogksuscggsicmac; } public final function wqikesawekycweoi($uyaimqisayeqocig, array $icwicymcioeyeyek, bool $cwwowqyuwccuykom = false) : array { $icwicymcioeyeyek[$this->kumuygiiqswoyasy()] = $this->mwyqswsaeeewsosm($uyaimqisayeqocig); return $this->save($icwicymcioeyeyek, $cwwowqyuwccuykom); } public final function oisyoywgmmaawqmy(array $icwicymcioeyeyek = [], array $gqgemcmoicmgaqie = [], $siykeiywomwwuoiw = null) : int { $siykeiywomwwuoiw = $this->owicscwgeuqcqaig()->kqewyqqqiyiouaou($gqgemcmoicmgaqie, $siykeiywomwwuoiw); if (!($icwicymcioeyeyek = $this->kqgimyueykccweqi($icwicymcioeyeyek))) { goto cgykkwqwamaougme; } return $siykeiywomwwuoiw->update($icwicymcioeyeyek); cgykkwqwamaougme: return 0; } public function oiemcgqyamccuagg($icwicymcioeyeyek) { return $icwicymcioeyeyek; } public function qmqogusoaqeygewm(array $icwicymcioeyeyek) { } public function scmmymqkoyckgkam($aokagokqyuysuksm, array $icwicymcioeyeyek) { } public function iasywwkguyauiywu($msqkueqksqwmskak, array $uwomkgseoiegeume) { } public function eyusemoqmesiucoq($aokagokqyuysuksm, $msqkueqksqwmskak, array $uwomkgseoiegeume) { } public function wesecyecmgmcuqai(array $icwicymcioeyeyek) { } public function iomcmaskksoyqwws($aokagokqyuysuksm, array $icwicymcioeyeyek) { } public function ymugiyemyggoumci() : bool { return !empty($this->errors); } public function ymoyyqeymakckaee() : array { return $this->errors; } public function ekggegaeqwguaceo() : array { $ueeagokqmgisgauy = $this->ymoyyqeymakckaee(); $this->errors = []; return $ueeagokqmgisgauy; } public function msqsseeaasqysese($iswcokucwmiosiaq) : self { $this->errors[] = $iswcokucwmiosiaq; return $this; } private function iqauecoycmqkimak(string $sqeykgyoooqysmca, array $uwomkgseoiegeume = [], $msqkueqksqwmskak = null) { switch ($sqeykgyoooqysmca) { case Constants::osgiowwgoumoscii: $this->msekaqwyeaoqciom($uwomkgseoiegeume, $msqkueqksqwmskak); goto gcmmgmowsmgwkoye; case Constants::uokqiiikaewkmiem: $this->gkieuyoqcusoksmg($uwomkgseoiegeume, $msqkueqksqwmskak); goto gcmmgmowsmgwkoye; } ugcaeymeciausmao: gcmmgmowsmgwkoye: } public function msekaqwyeaoqciom(array $uwomkgseoiegeume = [], $msqkueqksqwmskak = null) { } public function gkieuyoqcusoksmg(array $uwomkgseoiegeume = [], $msqkueqksqwmskak = null) { } public function ekuykcasmcmywewi($mksyucucyswaukig) : array { $mksyucucyswaukig = $this->ccekeuwwqqoiwuwy($mksyucucyswaukig); foreach ($mksyucucyswaukig as $uusmaiomayssaecw => $eqgoocgaqwqcimie) { $aaqqkgyougeiueyq = $this->uqeoyqiwywwmsiew($uusmaiomayssaecw); if (!$aaqqkgyougeiueyq instanceof Enum) { goto kouecqmcueugwcqw; } $mksyucucyswaukig[$uusmaiomayssaecw] = $aaqqkgyougeiueyq->qksikkwyuwmciusw($eqgoocgaqwqcimie); kouecqmcueugwcqw: aqkoqskkimiuyqug: } sygekyuywqgiawas: return $mksyucucyswaukig; } public final function kqgimyueykccweqi(array $icwicymcioeyeyek) : array { $ouggaewqmssscyii = []; foreach ($icwicymcioeyeyek as $oaukocmsckciqaok => $eqgoocgaqwqcimie) { if (!(Constants::ckcuiukmyisueqeo === $oaukocmsckciqaok)) { goto imsmosgqcqgeksws; } goto oseqayimqaycaycw; imsmosgqcqgeksws: $aaqqkgyougeiueyq = $this->uqeoyqiwywwmsiew($oaukocmsckciqaok); if (!($aaqqkgyougeiueyq instanceof Schema && !$aaqqkgyougeiueyq instanceof Foreign)) { goto usaykyskgyqwquca; } if ($aaqqkgyougeiueyq instanceof Json) { goto sucquwgiacwooomw; } if ($aaqqkgyougeiueyq instanceof Enum) { goto ciuwaqyasauagkeu; } if ($aaqqkgyougeiueyq instanceof Boolean) { goto wqameeueegakoqya; } if (!($aaqqkgyougeiueyq instanceof Text && is_array($eqgoocgaqwqcimie))) { goto wwuiwkkgqescsyyw; } $eqgoocgaqwqcimie = $this->caokeucsksukesyo()->owgcciayoweymuws()->wegeuqkaeuusoike($eqgoocgaqwqcimie); wwuiwkkgqescsyyw: goto eeyksuucagkaqmsi; wqameeueegakoqya: $eqgoocgaqwqcimie = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ascqkksqiiwaouic($eqgoocgaqwqcimie) ? 1 : 0; eeyksuucagkaqmsi: goto gakmkuaayakeymaa; ciuwaqyasauagkeu: $eqgoocgaqwqcimie = $aaqqkgyougeiueyq->wcuwocosqgkqkgis($eqgoocgaqwqcimie); if ($eqgoocgaqwqcimie) { goto wicqcmuwosqwyggg; } $eqgoocgaqwqcimie = $aaqqkgyougeiueyq->oiswysuiioecsaae(); wicqcmuwosqwyggg: gakmkuaayakeymaa: goto sgoioieqoekqywik; sucquwgiacwooomw: if (!empty($eqgoocgaqwqcimie)) { goto omqkeukuycyymmke; } $eqgoocgaqwqcimie = null; omqkeukuycyymmke: if (!is_array($eqgoocgaqwqcimie)) { goto oiemkksaoaiyckgi; } $eqgoocgaqwqcimie = $this->caokeucsksukesyo()->owgcciayoweymuws()->wegeuqkaeuusoike($eqgoocgaqwqcimie); oiemkksaoaiyckgi: sgoioieqoekqywik: if (!empty($eqgoocgaqwqcimie)) { goto susauskwueokgaku; } $eqgoocgaqwqcimie = $aaqqkgyougeiueyq->oiswysuiioecsaae(); susauskwueokgaku: $ouggaewqmssscyii[$oaukocmsckciqaok] = $eqgoocgaqwqcimie; usaykyskgyqwquca: oseqayimqaycaycw: } yceksmgauwmiwmsw: return $ouggaewqmssscyii; } public function yomgsemomcmgekyi($aiowsaccomcoikus, $ccmygqgggkyqsias) { $sogksuscggsicmac = ''; $aaqqkgyougeiueyq = $this->uqeoyqiwywwmsiew($aiowsaccomcoikus); if (!$aaqqkgyougeiueyq instanceof Enum) { goto mewuwwsmewiimgsi; } if (!(is_object($ccmygqgggkyqsias) || is_array($ccmygqgggkyqsias))) { goto qiamskskowaugckg; } $ccmygqgggkyqsias = $this->waecsyqmwascmqoa($ccmygqgggkyqsias, $aiowsaccomcoikus); qiamskskowaugckg: $sogksuscggsicmac = $aaqqkgyougeiueyq->ymgomemcusiiyksw($ccmygqgggkyqsias); mewuwwsmewiimgsi: return $sogksuscggsicmac; } public function ogegcqqcukiaqscy($aiowsaccomcoikus, $ccmygqgggkyqsias, $ggauoeuaesiymgee = null) { $sogksuscggsicmac = ''; $aaqqkgyougeiueyq = $this->uqeoyqiwywwmsiew($aiowsaccomcoikus); if (!$aaqqkgyougeiueyq instanceof Enum) { goto msmcmycooiwwqiik; } if (!(is_object($ccmygqgggkyqsias) || is_array($ccmygqgggkyqsias))) { goto iaewsguseweeqcqe; } $ccmygqgggkyqsias = $this->waecsyqmwascmqoa($ccmygqgggkyqsias, $aiowsaccomcoikus, $ggauoeuaesiymgee); iaewsguseweeqcqe: $sogksuscggsicmac = $aaqqkgyougeiueyq->qksikkwyuwmciusw($ccmygqgggkyqsias); msmcmycooiwwqiik: return $sogksuscggsicmac; } public function cyqesesmeiwoguik(string $aiowsaccomcoikus, string $amcuekkyuiqgieyu) { $sogksuscggsicmac = ''; $aaqqkgyougeiueyq = $this->uqeoyqiwywwmsiew($aiowsaccomcoikus); if (!$aaqqkgyougeiueyq instanceof Enum) { goto imagiycyokkwucge; } $sogksuscggsicmac = $aaqqkgyougeiueyq->wcuwocosqgkqkgis($amcuekkyuiqgieyu); imagiycyokkwucge: return $sogksuscggsicmac; } public function wmiscwmeyeomaqya($aiowsaccomcoikus) : array { $aiwgcyaewwagisoo = []; $aaqqkgyougeiueyq = $this->uqeoyqiwywwmsiew($aiowsaccomcoikus); if (!$aaqqkgyougeiueyq instanceof Enum) { goto gaqcesscgywweieq; } $aiwgcyaewwagisoo = $aaqqkgyougeiueyq->ywesecymaqwkmcei(); gaqcesscgywweieq: return $aiwgcyaewwagisoo; } public final function ccekeuwwqqoiwuwy($mksyucucyswaukig) : array { $siquossayskcwkea = []; if ($mksyucucyswaukig instanceof Model) { goto meuaykaqyqkseycs; } if (!is_object($mksyucucyswaukig)) { goto swqwssmgwikmieoa; } $siquossayskcwkea = (array) $mksyucucyswaukig; swqwssmgwikmieoa: goto qaswkqkwqgqqcyws; meuaykaqyqkseycs: $siquossayskcwkea = $mksyucucyswaukig->getAttributes(); qaswkqkwqgqqcyws: return $siquossayskcwkea; } public final function waecsyqmwascmqoa($mksyucucyswaukig, $aiowsaccomcoikus, $ggauoeuaesiymgee = null) { if ($aiowsaccomcoikus instanceof Schema) { goto gsimucysiuikweme; } $ksiyqouuaoymsycg = $this->uqeoyqiwywwmsiew($aiowsaccomcoikus); if (!$ksiyqouuaoymsycg) { goto ekimmsiekwwoawym; } $aiowsaccomcoikus = $ksiyqouuaoymsycg; ekimmsiekwwoawym: gsimucysiuikweme: if (!$mksyucucyswaukig instanceof self) { goto ukicwqcoggwiskgo; } $mksyucucyswaukig = $this->ccekeuwwqqoiwuwy($mksyucucyswaukig); ukicwqcoggwiskgo: $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); if ($aiowsaccomcoikus instanceof Schema) { goto eigowcoqoqkwuoiq; } $eqgoocgaqwqcimie = $gkyciwoiiisgywcs->get($mksyucucyswaukig, $aiowsaccomcoikus, $ggauoeuaesiymgee); goto iqiuaammwkeiamuo; eigowcoqoqkwuoiq: $eqgoocgaqwqcimie = $gkyciwoiiisgywcs->get($mksyucucyswaukig, $aiowsaccomcoikus->mwikyscisascoeea(), $ggauoeuaesiymgee); if (!(is_string($eqgoocgaqwqcimie) && $aiowsaccomcoikus instanceof Json)) { goto maqmyigowgsmqaco; } $eqgoocgaqwqcimie = $this->caokeucsksukesyo()->owgcciayoweymuws()->queuakuqucciemcc($eqgoocgaqwqcimie); maqmyigowgsmqaco: iqiuaammwkeiamuo: return $eqgoocgaqwqcimie; } public function eesuqwkusmukgwma(array $gsgwomokyuwmqqkg = [Constants::miceosguuseyyuqe], array $qceyowgiyaiaqeyi = []) : self { $this->igiywquyccyiaucw(Constants::wqyyquqcmoegoyao, [Constants::uqkkmyyqwqaqeage => $qceyowgiyaiaqeyi, Constants::egswciakmaaouces => $gsgwomokyuwmqqkg]); return $this; } public function kcsywgyywsgqgawm(string $sqeykgyoooqysmca = Constants::miceosguuseyyuqe) : bool { return in_array($sqeykgyoooqysmca, $this->imkyoqyocosuqasu(Constants::wqyyquqcmoegoyao)[Constants::egswciakmaaouces] ?? [], true); } public abstract function register(); }