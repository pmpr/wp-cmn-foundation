<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b2e4befc8c             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\ORM\View;

use Pmpr\Common\Foundation\Decorator\DecoratorUser;
use Pmpr\Common\Foundation\Manipulate\ManipulateFormat;
use Pmpr\Common\Foundation\Manipulate\ManipulateServer;
use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateHTML;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;
use Pmpr\Common\Foundation\ORM\DB\Builder;
use Pmpr\Common\Foundation\ORM\DB\Field\DateTime;
use Pmpr\Common\Foundation\ORM\DB\Field\Foreign;
use Pmpr\Common\Foundation\ORM\DB\Model;
use Pmpr\Common\Foundation\WPListTable;

class ListTable extends WPListTable
{
    
    protected ?Model $model = null;
    
    public function __construct(Model $meywaqqsugaoeyys)
    {
        goto equwcsciiggsuiam;
        awkqcyusycccekwq:
        parent::__construct($ywmkwiwkosakssii);
        goto yugmwomumkosucsc;
        qsaoyggkqwcgskwk:
        $yyksucsgisomecgg = $meywaqqsugaoeyys->oyeskqayoscwciem();
        goto myooisakyuggoggc;
        equwcsciiggsuiam:
        $this->model = $meywaqqsugaoeyys;
        goto qsaoyggkqwcgskwk;
        myooisakyuggoggc:
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($yyksucsgisomecgg->sacmkccceuywoqsq(true), ["\x73\x63\162\x65\x65\x6e" => convert_to_screen($yyksucsgisomecgg->qeeuwmmksmqiuywg())]);
        goto awkqcyusycccekwq;
        yugmwomumkosucsc:
    }
    
    public function mgogaykgkoogasim() : ?Model
    {
        return $this->model;
    }
    function no_items()
    {
        echo $this->mgogaykgkoogasim()->oyeskqayoscwciem()->uikgwcuascgeissw("\156\x6f\164\x5f\x66\157\165\156\144");
    }
    
    protected function get_views()
    {
        $umwgoasiowmqcumw = parent::get_views();
        return $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("{$this->mgogaykgkoogasim()->miwqiiqeegeqcwis()}\x5f\155\x61\156\141\x67\145\x5f\x76\151\x65\167\163"), $umwgoasiowmqcumw);
    }
    
    public function get_columns()
    {
        goto ykogqmmywykgouqy;
        ayucsuwsiocgycww:
        return $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("{$this->mgogaykgkoogasim()->miwqiiqeegeqcwis()}\x5f\155\x61\156\x61\x67\x65\137\143\157\154\165\155\x6e\163"), $wkkweuacukumqmya);
        goto smmagoyuqoigoesc;
        gmsyoscesymiwwue:
        $wkkweuacukumqmya["\143\142"] = ManipulateHTML::qgsekwygcgawekeq("\151\x6e\x70\165\x74", ["\164\x79\160\145" => "\143\150\145\x63\x6b\142\x6f\170"]);
        goto eiicmcasqikiyasw;
        eiicmcasqikiyasw:
        kqwyogqqwumumiwg:
        goto ayucsuwsiocgycww;
        aqksouwmeckaqyaq:
        if (!$this->get_bulk_actions()) {
            goto kqwyogqqwumumiwg;
        }
        goto gmsyoscesymiwwue;
        ykogqmmywykgouqy:
        $wkkweuacukumqmya = [];
        goto aqksouwmeckaqyaq;
        smmagoyuqoigoesc:
    }
    
    public function ocimsyskieegygok()
    {
        return ManipulateServer::get("\163", '');
    }
    
    public function column_cb($igqsaukqcqscimok)
    {
        goto swesqeqmagkicuws;
        rgaagksgsewuwgmo:
        $eqgoocgaqwqcimie = $igqsaukqcqscimok->{$ceiwsaacewygcsqg};
        goto mcmcocyuugueaeww;
        eucakkcoiiwkwsme:
        wsqeiwkgoiekwasy:
        goto iwsaaiggkciigsmc;
        cwyaysecsakaqgew:
        $ceiwsaacewygcsqg = $meywaqqsugaoeyys->kumuygiiqswoyasy();
        goto kgqgcggccmiwayua;
        kgqgcggccmiwayua:
        $gkswkiicccswksiq = $meywaqqsugaoeyys->oyeskqayoscwciem()->gwaeeegmgggawiyi("\x65\144\x69\164\137\x69\x74\145\155\x73");
        goto kwayumouacgkgyas;
        swesqeqmagkicuws:
        $meywaqqsugaoeyys = $this->mgogaykgkoogasim();
        goto cwyaysecsakaqgew;
        kwayumouacgkgyas:
        if (!DecoratorUser::scmcyesmmikkucie($gkswkiicccswksiq)) {
            goto wsqeiwkgoiekwasy;
        }
        goto rgaagksgsewuwgmo;
        mcmcocyuugueaeww:
        echo $this->iuygowkemiiwqmiw("\143\x61\x6c\x6c\x62\141\x63\153", ["\x76\141\x6c\165\145" => $eqgoocgaqwqcimie, "\x74\x69\164\154\145" => __("\123\x65\x6c\x65\x63\164\x20\x49\164\145\155\40\x23\x25\x64", PR__CMN__FOUNDATION), "\x74\145\170\x74" => __("\46\x23\x38\62\x32\x30\x3b\111\164\145\155\40\43\45\x64\46\x23\70\62\62\x31\x3b\40\x69\163\40\154\x6f\143\153\x65\144", PR__CMN__FOUNDATION)], ["\x63\x6c\141\163\163" => self::class]);
        goto eucakkcoiiwkwsme;
        iwsaaiggkciigsmc:
    }
    
    protected function get_bulk_actions() : array
    {
        goto kygccamgawookukq;
        ooooceiweeackgie:
        $ccowyogiqwikkkie["\x64\145\x6c\x65\x74\x65"] = __("\104\x65\154\145\164\x65", PR__CMN__FOUNDATION);
        goto gkeymcqqsewayscs;
        qysmyemoucigsmua:
        $ccowyogiqwikkkie = [];
        goto kuaiscyqkgcouiye;
        qwiyicoywcekgyce:
        return (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("{$this->mgogaykgkoogasim()->miwqiiqeegeqcwis()}\x5f\142\x75\x6c\153\137\141\x63\x74\x69\x6f\x6e\x73"), $ccowyogiqwikkkie, $this->umaeoegyykkkqmia());
        goto tagquiiokseckkqs;
        kygccamgawookukq:
        $meywaqqsugaoeyys = $this->mgogaykgkoogasim();
        goto qysmyemoucigsmua;
        kuaiscyqkgcouiye:
        if (!$meywaqqsugaoeyys->mukyysqkgaimcygs()) {
            goto agsuaimomgsoyiem;
        }
        goto ooooceiweeackgie;
        gkeymcqqsewayscs:
        agsuaimomgsoyiem:
        goto qwiyicoywcekgyce;
        tagquiiokseckkqs:
    }
    
    public function get_sortable_columns() : array
    {
        return (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("{$this->mgogaykgkoogasim()->miwqiiqeegeqcwis()}\137\x6d\141\156\x61\147\145\137\x73\x6f\162\164\141\x62\x6c\x65\137\x63\x6f\x6c\x75\155\x6e\x73"), []);
    }
    
    protected function get_table_classes() : array
    {
        return ["\x77\x69\x64\x65\146\141\164", "\146\x69\x78\x65\144", "\x73\164\x72\151\x70\x65\144", $this->mgogaykgkoogasim()->miwqiiqeegeqcwis()];
    }
    
    public function search_box($cmwygeyygwqaemaq, $euueacigmgoqkimu)
    {
        goto gcaykgmmmqomsyis;
        kmseiouukkqiumum:
        $sikaymiwcesagayc = ManipulateArray::get($icwicymcioeyeyek, "\157\162\x64\x65\162\142\171");
        goto syuywgysqyckcqay;
        suiywiakesiegcwu:
        $icwicymcioeyeyek = $_POST;
        goto kmseiouukkqiumum;
        yccuomocgmewkeca:
        $euueacigmgoqkimu = $euueacigmgoqkimu . "\55\163\145\x61\162\x63\150\x2d\x69\156\160\165\164";
        goto suiywiakesiegcwu;
        ycueoqkeakismiqw:
        $umwqusowiqmyseom = ManipulateArray::get($icwicymcioeyeyek, "\x6f\x72\x64\x65\x72");
        goto awimwukcyiceackk;
        cyymeyomuakqakwo:
        ocwouquuwsaqakae:
        goto uwscegkmmumymoaq;
        cquikgykuscqmigw:
        echo $this->iuygowkemiiwqmiw("\163\145\141\x72\x63\150\x5f\142\157\170", ["\151\x6e\160\165\x74" => $euueacigmgoqkimu, "\164\145\170\x74" => $cmwygeyygwqaemaq, "\x71\165\145\162\171" => _admin_search_query(), "\x73\165\142\155\151\x74" => get_submit_button($cmwygeyygwqaemaq, "\x62\165\x74\164\157\x6e", false, false, ["\x49\x44" => "\163\x65\x61\162\x63\x68\x2d\163\x75\142\x6d\151\x74"])], ["\x63\154\x61\163\163" => self::class]);
        goto cyymeyomuakqakwo;
        syuywgysqyckcqay:
        if (!$sikaymiwcesagayc) {
            goto qoacckkkwsqkokye;
        }
        goto ggewkaiwwgkmkwgc;
        ggewkaiwwgkmkwgc:
        ManipulateHTML::awwqwouuoioauoaw("\x69\156\160\x75\164", ["\x74\x79\x70\x65" => "\x68\151\x64\x64\x65\156", "\x6e\141\x6d\145" => "\157\x72\x64\x65\162\x62\x61\x79", "\166\141\154\x75\145" => $sikaymiwcesagayc], true);
        goto kkieqqwwascekcmo;
        kkieqqwwascekcmo:
        qoacckkkwsqkokye:
        goto ycueoqkeakismiqw;
        gcaykgmmmqomsyis:
        if (!$this->has_items()) {
            goto ocwouquuwsaqakae;
        }
        goto yccuomocgmewkeca;
        awimwukcyiceackk:
        if (!$umwqusowiqmyseom) {
            goto swuggqyiaiqywgge;
        }
        goto mugeiwyysiemwaym;
        mugeiwyysiemwaym:
        ManipulateHTML::awwqwouuoioauoaw("\151\x6e\160\x75\x74", ["\x74\171\x70\x65" => "\150\x69\144\x64\x65\156", "\156\141\x6d\145" => "\x6f\162\144\145\162", "\x76\x61\x6c\x75\x65" => $umwqusowiqmyseom], true);
        goto euymeegkukskiowq;
        euymeegkukskiowq:
        swuggqyiaiqywgge:
        goto cquikgykuscqmigw;
        uwscegkmmumymoaq:
    }
    
    public function column_default($igqsaukqcqscimok, $column_name)
    {
        goto simkiasocoimioew;
        wqieuwguumokgyqg:
        gkwoqoeaecgkymeu:
        goto aueiggyawkmkamum;
        aueiggyawkmkamum:
        $aqykuigiuwmmcieu = $this->seukicauekqqwwme($eqgoocgaqwqcimie, $column_name);
        goto qswqmgiwiyyqwioa;
        ksoawacwkgasqgmk:
        sieykcqauaygcais:
        goto yqeqouqemksasmqc;
        wmsiqkyqsiysgcyy:
        if ($aiowsaccomcoikus instanceof DateTime) {
            goto gkwoqoeaecgkymeu;
        }
        goto ysggiwiksocomkek;
        ekmogkwmcqsykgsq:
        qgyaeoqgekocwkmw:
        goto ksoawacwkgasqgmk;
        ayyyeiyaosoacoqm:
        
        $aqykuigiuwmmcieu = ManipulateHTML::ciuuiyckmsygceis(ManipulateHTML::qgsekwygcgawekeq("\141", ["\150\x72\145\x66" => $iwywmkygwewiamwm, "\x63\x6c\x61\x73\163" => "\x72\x6f\x77\55\x74\x69\x74\x6c\x65", "\x61\x72\151\141\55\154\141\142\145\154" => sprintf(__("\x45\144\151\x74\40\42\x25\x73\42", PR__CMN__FOUNDATION), $aqykuigiuwmmcieu)], true, $aqykuigiuwmmcieu));
        goto aiwygewkmigcwusw;
        kumuckkicykgwqqm:
        yukacyeckkwagusw:
        goto sguyyaygwyikaggk;
        miqmoasmioksggkm:
        wgeueumgacuuuama:
        goto cykaikwsaskgeemo;
        qswqmgiwiyyqwioa:
        ouaoyqugwsagkqaa:
        goto omekuqkuugyocmoc;
        kmiqskugkmaiugae:
        $eqgoocgaqwqcimie = ManipulateArray::get($igqsaukqcqscimok, $column_name, '');
        goto cqemkecywkkwaaii;
        ieoiygycmseqmmgc:
        if ($aqykuigiuwmmcieu) {
            goto wgeueumgacuuuama;
        }
        goto gkuwmiusoqwesqoo;
        qaikeckkiwasykwk:
        $aqykuigiuwmmcieu = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("{$meywaqqsugaoeyys->miwqiiqeegeqcwis()}\137\155\141\156\x61\x67\x65\x5f\x63\x75\163\164\x6f\155\x5f\x63\x6f\x6c\x75\155\x6e"), '', $column_name, $eqgoocgaqwqcimie, $aokagokqyuysuksm, $igqsaukqcqscimok);
        goto ieoiygycmseqmmgc;
        oqsecqsucukywaee:
        $yygmoeguaqyumuui = array_keys($wkkweuacukumqmya);
        goto iqamwyasyoqsugeu;
        wkqwywgikoyqkyeg:
        goto ouaoyqugwsagkqaa;
        goto wqieuwguumokgyqg;
        eqemoayymokeqaqi:
        $awyomkauyyymugeq = !empty($ccowyogiqwikkkie) ? 1 : 0;
        goto keewmqmgqegumiwa;
        aiwygewkmigcwusw:
        
        $aqykuigiuwmmcieu .= ManipulateHTML::qgsekwygcgawekeq("\x62\x75\164\x74\157\156", ["\x74\x79\x70\x65" => "\142\x75\164\164\157\156", "\143\x6c\x61\x73\163" => "\164\157\147\147\x6c\x65\55\x72\x6f\x77"], true, ManipulateHTML::qgsekwygcgawekeq("\x73\160\x61\156", ["\143\154\x61\x73\x73" => "\163\143\x72\x65\x65\x6e\55\x72\145\141\x64\145\x72\x2d\x74\x65\x78\x74"], true, __("\123\x68\x6f\167\x20\x6d\x6f\x72\x65\40\144\x65\x74\x61\x69\154\163", PR__CMN__FOUNDATION)));
        goto ekmogkwmcqsykgsq;
        omgkuuyoiugcymmy:
        $iwywmkygwewiamwm = $meywaqqsugaoeyys->yyykkcyiksewsoqy($aokagokqyuysuksm);
        goto kumuckkicykgwqqm;
        gkuwmiusoqwesqoo:
        if ($aiowsaccomcoikus instanceof Foreign) {
            goto auaywaskqooasiuq;
        }
        goto wmsiqkyqsiysgcyy;
        uiqycwuommmmuowy:
        $iwywmkygwewiamwm = $meywaqqsugaoeyys->uesweuocqoywoyms($aokagokqyuysuksm);
        goto moqcomgmwiamuomq;
        moqcomgmwiamuomq:
        if ($iwywmkygwewiamwm) {
            goto yukacyeckkwagusw;
        }
        goto omgkuuyoiugcymmy;
        simkiasocoimioew:
        $meywaqqsugaoeyys = $this->mgogaykgkoogasim();
        goto iuaeeeeggkikuiig;
        cykaikwsaskgeemo:
        $ccowyogiqwikkkie = $this->get_bulk_actions();
        goto eqemoayymokeqaqi;
        keewmqmgqegumiwa:
        $wkkweuacukumqmya = $this->get_columns();
        goto oqsecqsucukywaee;
        uogkcsaewswoaosw:
        ewoqyogcaksucksk:
        goto miqmoasmioksggkm;
        iqamwyasyoqsugeu:
        if (!($column_name === $yygmoeguaqyumuui[$awyomkauyyymugeq])) {
            goto sieykcqauaygcais;
        }
        goto uiqycwuommmmuowy;
        omekuqkuugyocmoc:
        goto ewoqyogcaksucksk;
        goto giuswooyckooaoms;
        iuaeeeeggkikuiig:
        $ceiwsaacewygcsqg = $meywaqqsugaoeyys->kumuygiiqswoyasy();
        goto kmiqskugkmaiugae;
        sguyyaygwyikaggk:
        if (!$iwywmkygwewiamwm) {
            goto qgyaeoqgekocwkmw;
        }
        goto ayyyeiyaosoacoqm;
        yqeqouqemksasmqc:
        return $aqykuigiuwmmcieu;
        goto wgaqkacekoyiwggi;
        cqemkecywkkwaaii:
        $aokagokqyuysuksm = (int) $igqsaukqcqscimok->{$ceiwsaacewygcsqg};
        goto wcioaoeiiawwqqqq;
        giuswooyckooaoms:
        auaywaskqooasiuq:
        goto uogkcsaewswoaosw;
        wcioaoeiiawwqqqq:
        $aiowsaccomcoikus = $meywaqqsugaoeyys->oyeskqayoscwciem()->uqeoyqiwywwmsiew($column_name);
        goto qaikeckkiwasykwk;
        ysggiwiksocomkek:
        $aqykuigiuwmmcieu = $eqgoocgaqwqcimie;
        goto wkqwywgikoyqkyeg;
        wgaqkacekoyiwggi:
    }
    
    public function umaeoegyykkkqmia()
    {
        goto emioyucskiowqumg;
        emioyucskiowqumg:
        $meywaqqsugaoeyys = $this->mgogaykgkoogasim();
        goto jkaemsuwyyoamwim;
        suwsiaeoumiwkiqg:
        $igaagwuyasawwqms = ManipulateArray::get($_GET, $meywaqqsugaoeyys::ORM_FILTER_BY, false);
        goto yoauoocuckogmsuw;
        koiyaaokigmamqyc:
        $umwgoasiowmqcumw = $this->get_views();
        goto qiqegseqwywcmwoe;
        amyaoueckysgmmas:
        if (!((!$eqgoocgaqwqcimie || !$igaagwuyasawwqms) && $tsuauommsquiesmk)) {
            goto cscskwugoamcmqyu;
        }
        goto koiyaaokigmamqyc;
        yosyyiksyyscacus:
        cscskwugoamcmqyu:
        goto kwcscewawgicomok;
        yoauoocuckogmsuw:
        $eqgoocgaqwqcimie = ManipulateArray::get($_GET, $meywaqqsugaoeyys::ORM_FILTER_VALUE, false);
        goto amyaoueckysgmmas;
        kwcscewawgicomok:
        return $eqgoocgaqwqcimie;
        goto kikkkocywiyuyuqw;
        qiqegseqwywcmwoe:
        $eqgoocgaqwqcimie = ManipulateArray::get(array_keys($umwgoasiowmqcumw), 0, false);
        goto yosyyiksyyscacus;
        jkaemsuwyyoamwim:
        $tsuauommsquiesmk = $meywaqqsugaoeyys->aakiaoueckoiyoew();
        goto suwsiaeoumiwkiqg;
        kikkkocywiyuyuqw:
    }
    
    public function before_pagination(?Builder $siykeiywomwwuoiw) : ?Builder
    {
        return $siykeiywomwwuoiw;
    }
    
    public function prepare_items($suaemuyiacqyugsm = 1, $weyoqgcesqgeusiu = null)
    {
        goto oaociaioauummsey;
        owiguescmqyqukui:
        
        $this->set_pagination_args(["\x70\145\162\x5f\x70\141\x67\145" => $weyoqgcesqgeusiu, "\164\157\164\x61\x6c\x5f\x69\x74\145\x6d\x73" => $gmwiogsuisuoiwqu["\160\141\x67\x69\x6e\141\x74\151\x6f\156"]["\x74\x6f\x74\x61\x6c"], "\164\x6f\164\x61\154\x5f\x70\141\147\x65\x73" => $gmwiogsuisuoiwqu["\160\141\x67\x69\x6e\141\164\151\x6f\156"]["\160\x61\147\x65\x73"]]);
        goto guummoewucyeuiek;
        cueuscqkicwwicei:
        if ($weyoqgcesqgeusiu) {
            goto aqeyqwuywqcmuoce;
        }
        goto gcecamucuogcciig;
        kiewcwsykccgocuc:
        $siykeiywomwwuoiw = $meywaqqsugaoeyys->gqaysymikgeawkqa();
        goto eysuawiooiswaseq;
        euuekiyqwkowiees:
        $eqgoocgaqwqcimie = $this->umaeoegyykkkqmia();
        goto assoyoeukmqiucyq;
        eogomkswkaqwyycm:
        goto akoweomooyuwamow;
        goto egiauwuekseyeaeq;
        egiauwuekseyeaeq:
        qayiqaykkywcyisq:
        goto euuekiyqwkowiees;
        kikkkoqiumqoeiyy:
        $aiowsaccomcoikus = $meywaqqsugaoeyys->aakiaoueckoiyoew();
        goto wyqueeskecameuks;
        msiuqseowuumiwuo:
        $siykeiywomwwuoiw = $this->before_pagination($siykeiywomwwuoiw);
        goto gqycmyieayoegcsy;
        assoyoeukmqiucyq:
        if (!($eqgoocgaqwqcimie && $eqgoocgaqwqcimie !== "\141\x6c\x6c")) {
            goto aymoguycgmuggcik;
        }
        goto kikkkoqiumqoeiyy;
        wyqueeskecameuks:
        
        $siykeiywomwwuoiw->where($aiowsaccomcoikus, self::EQUAL_SYMBOL, $eqgoocgaqwqcimie);
        goto esokkakkumskkmiu;
        iayguaeseyaemwkk:
        $siykeiywomwwuoiw = $meywaqqsugaoeyys->aaeswuecycyquqwk($siykeiywomwwuoiw, $this);
        goto akyiiioycmgqyuok;
        gqycmyieayoegcsy:
        $ceiwsaacewygcsqg = $meywaqqsugaoeyys->kumuygiiqswoyasy();
        goto sqiyuasgusgawuoi;
        esokkakkumskkmiu:
        aymoguycgmuggcik:
        goto msiuqseowuumiwuo;
        akyiiioycmgqyuok:
        
        $gmwiogsuisuoiwqu = $meywaqqsugaoeyys->aeggeuqycwawueqy($siykeiywomwwuoiw, [self::PAGE => $suaemuyiacqyugsm, "\146\x69\x6c\164\x65\162\137\x76\141\x6c\165\x65" => false, self::PER_PAGE => $weyoqgcesqgeusiu]);
        goto ycomeuqeessamows;
        gcecamucuogcciig:
        
        $weyoqgcesqgeusiu = $this->get_items_per_page("\145\144\151\164\137" . $meywaqqsugaoeyys->miwqiiqeegeqcwis() . "\x5f\160\x65\x72\137\160\141\147\x65");
        goto suscosoukqeyyqgs;
        guummoewucyeuiek:
        akoweomooyuwamow:
        goto mqacqosyicuiqwia;
        sqiyuasgusgawuoi:
        $meywaqqsugaoeyys->ewkswoqykwsuckok($siykeiywomwwuoiw, $ceiwsaacewygcsqg, self::DESC);
        goto iayguaeseyaemwkk;
        iecqkqoiqimmisyw:
        $this->items = [];
        goto eogomkswkaqwyycm;
        ycomeuqeessamows:
        $this->items = $gmwiogsuisuoiwqu[self::ITEMS];
        goto owiguescmqyqukui;
        suscosoukqeyyqgs:
        aqeyqwuywqcmuoce:
        goto kiewcwsykccgocuc;
        oaociaioauummsey:
        $meywaqqsugaoeyys = $this->mgogaykgkoogasim();
        goto cueuscqkicwwicei;
        eysuawiooiswaseq:
        if ($siykeiywomwwuoiw) {
            goto qayiqaykkywcyisq;
        }
        goto iecqkqoiqimmisyw;
        mqacqosyicuiqwia:
    }
    
    public function seukicauekqqwwme($ocogsiouoiuuguym, $qgoqiacsiccwoawi)
    {
        return $this->eciukqcoqmyacwow($ocogsiouoiuuguym);
    }
    
    public function sokuygywyckaocci() : array
    {
        return [];
    }
    
    public function extra_tablenav($wcagyqamwoksawik)
    {
        goto kwowggaooiyqawyq;
        ciiyqsiswkcwsocm:
        ManipulateHTML::awwqwouuoioauoaw("\144\x69\166", ["\143\x6c\141\163\x73" => "\x70\162\x2d\160\x72\x69\155\x61\x72\x79\x2d\x61\x63\164\x69\157\156\163"], true, $ccowyogiqwikkkie);
        goto ugyawwukegyoqmsq;
        soqkewsayowwcmco:
        parent::extra_tablenav($wcagyqamwoksawik);
        goto ukigmkeewuqomooc;
        kwowggaooiyqawyq:
        $ccowyogiqwikkkie = $this->sokuygywyckaocci();
        goto ieoeeyieoskuyiyw;
        ugyawwukegyoqmsq:
        mcuoyseuwoueyaie:
        goto soqkewsayowwcmco;
        ieoeeyieoskuyiyw:
        if (!$ccowyogiqwikkkie) {
            goto mcuoyseuwoueyaie;
        }
        goto ciiyqsiswkcwsocm;
        ukigmkeewuqomooc:
    }
    
    protected function handle_row_actions($igqsaukqcqscimok, $column_name, $micmwmywmkguiyyk) : string
    {
        goto ykcmomsiayaymysm;
        cwmuqmoeauqcewoy:
        $ceiwsaacewygcsqg = $meywaqqsugaoeyys->kumuygiiqswoyasy();
        goto eiecgqokmuekaesc;
        wicuauokauykwoeu:
        wwgikwuigiiqsswq:
        goto gcecieuocqawmgci;
        eiecgqokmuekaesc:
        $eqgoocgaqwqcimie = $igqsaukqcqscimok->{$ceiwsaacewygcsqg};
        goto ggsugekocmsukuci;
        oksqsucimimsswcg:
        seyygcwcaogkmaqe:
        goto gqeoaceyoiicoaec;
        gcecieuocqawmgci:
        if (!($iwywmkygwewiamwm = $meywaqqsugaoeyys->cgccmsewskigcuig($eqgoocgaqwqcimie))) {
            goto seyygcwcaogkmaqe;
        }
        goto msmmiaumiasmsiog;
        qoaawmmcqyacokws:
        $ccowyogiqwikkkie = '';
        goto uwyeycaywowwiquu;
        kcwgiwimgqesukqu:
        $ccowyogiqwikkkie["\x65\144\151\x74"] = ManipulateHTML::uuccukgasskgimsq("\141", ["\x68\162\145\x66" => $iwywmkygwewiamwm, "\141\162\x69\141\x2d\x6c\141\142\x65\154" => __("\105\144\151\x74", PR__CMN__FOUNDATION)], __("\105\144\151\164", PR__CMN__FOUNDATION));
        goto wicuauokauykwoeu;
        uwyeycaywowwiquu:
        if (!($micmwmywmkguiyyk === $column_name)) {
            goto uugiuqkesegaamqw;
        }
        goto cwmuqmoeauqcewoy;
        gqeoaceyoiicoaec:
        $ccowyogiqwikkkie = $this->row_actions($ccowyogiqwikkkie);
        goto kkckyqmcyussauma;
        ceosmkqgqgwsowwg:
        if (!($iwywmkygwewiamwm = $meywaqqsugaoeyys->yyykkcyiksewsoqy($eqgoocgaqwqcimie))) {
            goto wwgikwuigiiqsswq;
        }
        goto kcwgiwimgqesukqu;
        msmmiaumiasmsiog:
        $ccowyogiqwikkkie["\144\x65\154\x65\x74\145"] = $meywaqqsugaoeyys->rkmkouiquumiecqy($iwywmkygwewiamwm);
        goto oksqsucimimsswcg;
        ggsugekocmsukuci:
        $ccowyogiqwikkkie = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("{$meywaqqsugaoeyys->miwqiiqeegeqcwis()}\x5f\x72\157\167\x5f\141\x63\164\151\x6f\156\163"), [], $eqgoocgaqwqcimie, $this->umaeoegyykkkqmia(), $igqsaukqcqscimok);
        goto ceosmkqgqgwsowwg;
        kkckyqmcyussauma:
        uugiuqkesegaamqw:
        goto ikukqooiowqywyqo;
        ykcmomsiayaymysm:
        $meywaqqsugaoeyys = $this->mgogaykgkoogasim();
        goto qoaawmmcqyacokws;
        ikukqooiowqywyqo:
        return $ccowyogiqwikkkie;
        goto cciakcwuweqmcose;
        cciakcwuweqmcose:
    }
}
