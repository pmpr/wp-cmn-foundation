<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b3993be3fb             |
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
        equwcsciiggsuiam:
        $this->model = $meywaqqsugaoeyys;
        goto qsaoyggkqwcgskwk;
        myooisakyuggoggc:
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($yyksucsgisomecgg->sacmkccceuywoqsq(true), ["\163\143\162\x65\x65\x6e" => convert_to_screen($yyksucsgisomecgg->qeeuwmmksmqiuywg())]);
        goto awkqcyusycccekwq;
        awkqcyusycccekwq:
        parent::__construct($ywmkwiwkosakssii);
        goto yugmwomumkosucsc;
        qsaoyggkqwcgskwk:
        $yyksucsgisomecgg = $meywaqqsugaoeyys->oyeskqayoscwciem();
        goto myooisakyuggoggc;
        yugmwomumkosucsc:
    }
    
    public function mgogaykgkoogasim() : ?Model
    {
        return $this->model;
    }
    function no_items()
    {
        echo $this->mgogaykgkoogasim()->oyeskqayoscwciem()->uikgwcuascgeissw("\156\157\x74\137\x66\x6f\x75\156\144");
    }
    
    protected function get_views()
    {
        $umwgoasiowmqcumw = parent::get_views();
        return $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("{$this->mgogaykgkoogasim()->miwqiiqeegeqcwis()}\x5f\155\x61\x6e\x61\147\x65\137\x76\x69\x65\167\x73"), $umwgoasiowmqcumw);
    }
    
    public function get_columns()
    {
        goto ykogqmmywykgouqy;
        ayucsuwsiocgycww:
        return $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("{$this->mgogaykgkoogasim()->miwqiiqeegeqcwis()}\x5f\x6d\x61\x6e\141\147\145\x5f\143\x6f\154\x75\155\156\x73"), $wkkweuacukumqmya);
        goto smmagoyuqoigoesc;
        ykogqmmywykgouqy:
        $wkkweuacukumqmya = [];
        goto aqksouwmeckaqyaq;
        aqksouwmeckaqyaq:
        if (!$this->get_bulk_actions()) {
            goto kqwyogqqwumumiwg;
        }
        goto gmsyoscesymiwwue;
        eiicmcasqikiyasw:
        kqwyogqqwumumiwg:
        goto ayucsuwsiocgycww;
        gmsyoscesymiwwue:
        $wkkweuacukumqmya["\143\142"] = ManipulateHTML::qgsekwygcgawekeq("\x69\156\x70\x75\x74", ["\x74\171\x70\x65" => "\x63\150\x65\x63\x6b\x62\157\170"]);
        goto eiicmcasqikiyasw;
        smmagoyuqoigoesc:
    }
    
    public function ocimsyskieegygok()
    {
        return ManipulateServer::get("\163", '');
    }
    
    public function column_cb($igqsaukqcqscimok)
    {
        goto swesqeqmagkicuws;
        eucakkcoiiwkwsme:
        wsqeiwkgoiekwasy:
        goto iwsaaiggkciigsmc;
        cwyaysecsakaqgew:
        $ceiwsaacewygcsqg = $meywaqqsugaoeyys->kumuygiiqswoyasy();
        goto kgqgcggccmiwayua;
        kwayumouacgkgyas:
        if (!DecoratorUser::scmcyesmmikkucie($gkswkiicccswksiq)) {
            goto wsqeiwkgoiekwasy;
        }
        goto rgaagksgsewuwgmo;
        swesqeqmagkicuws:
        $meywaqqsugaoeyys = $this->mgogaykgkoogasim();
        goto cwyaysecsakaqgew;
        mcmcocyuugueaeww:
        echo $this->iuygowkemiiwqmiw("\143\141\154\x6c\142\x61\143\x6b", ["\x76\x61\x6c\165\145" => $eqgoocgaqwqcimie, "\164\x69\x74\154\145" => __("\123\145\154\x65\143\164\x20\x49\x74\x65\x6d\x20\x23\x25\144", PR__CMN__FOUNDATION), "\x74\145\x78\164" => __("\x26\43\x38\62\x32\x30\x3b\x49\164\145\x6d\x20\43\45\x64\x26\43\70\62\62\61\x3b\x20\x69\163\40\x6c\157\x63\153\x65\x64", PR__CMN__FOUNDATION)], ["\143\x6c\x61\x73\163" => self::class]);
        goto eucakkcoiiwkwsme;
        rgaagksgsewuwgmo:
        $eqgoocgaqwqcimie = $igqsaukqcqscimok->{$ceiwsaacewygcsqg};
        goto mcmcocyuugueaeww;
        kgqgcggccmiwayua:
        $gkswkiicccswksiq = $meywaqqsugaoeyys->oyeskqayoscwciem()->gwaeeegmgggawiyi("\x65\x64\151\x74\137\x69\x74\145\x6d\163");
        goto kwayumouacgkgyas;
        iwsaaiggkciigsmc:
    }
    
    protected function get_bulk_actions() : array
    {
        goto kygccamgawookukq;
        qysmyemoucigsmua:
        $ccowyogiqwikkkie = [];
        goto kuaiscyqkgcouiye;
        ooooceiweeackgie:
        $ccowyogiqwikkkie["\144\x65\x6c\x65\164\x65"] = __("\104\x65\x6c\145\164\145", PR__CMN__FOUNDATION);
        goto gkeymcqqsewayscs;
        gkeymcqqsewayscs:
        agsuaimomgsoyiem:
        goto qwiyicoywcekgyce;
        kygccamgawookukq:
        $meywaqqsugaoeyys = $this->mgogaykgkoogasim();
        goto qysmyemoucigsmua;
        qwiyicoywcekgyce:
        return (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("{$this->mgogaykgkoogasim()->miwqiiqeegeqcwis()}\x5f\x62\165\154\153\x5f\x61\x63\x74\151\x6f\156\163"), $ccowyogiqwikkkie, $this->umaeoegyykkkqmia());
        goto tagquiiokseckkqs;
        kuaiscyqkgcouiye:
        if (!$meywaqqsugaoeyys->mukyysqkgaimcygs()) {
            goto agsuaimomgsoyiem;
        }
        goto ooooceiweeackgie;
        tagquiiokseckkqs:
    }
    
    public function get_sortable_columns() : array
    {
        return (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("{$this->mgogaykgkoogasim()->miwqiiqeegeqcwis()}\x5f\x6d\x61\x6e\x61\147\x65\x5f\163\157\162\x74\141\142\154\x65\x5f\143\x6f\154\165\155\x6e\163"), []);
    }
    
    protected function get_table_classes() : array
    {
        return ["\x77\x69\144\x65\x66\141\x74", "\146\151\x78\x65\144", "\163\x74\x72\151\160\x65\x64", $this->mgogaykgkoogasim()->miwqiiqeegeqcwis()];
    }
    
    public function search_box($cmwygeyygwqaemaq, $euueacigmgoqkimu)
    {
        goto gcaykgmmmqomsyis;
        awimwukcyiceackk:
        if (!$umwqusowiqmyseom) {
            goto swuggqyiaiqywgge;
        }
        goto mugeiwyysiemwaym;
        gcaykgmmmqomsyis:
        if (!$this->has_items()) {
            goto ocwouquuwsaqakae;
        }
        goto yccuomocgmewkeca;
        yccuomocgmewkeca:
        $euueacigmgoqkimu = $euueacigmgoqkimu . "\55\x73\145\141\162\143\x68\x2d\x69\x6e\160\x75\164";
        goto suiywiakesiegcwu;
        ycueoqkeakismiqw:
        $umwqusowiqmyseom = ManipulateArray::get($icwicymcioeyeyek, "\157\162\144\x65\x72");
        goto awimwukcyiceackk;
        euymeegkukskiowq:
        swuggqyiaiqywgge:
        goto cquikgykuscqmigw;
        ggewkaiwwgkmkwgc:
        ManipulateHTML::awwqwouuoioauoaw("\x69\156\x70\165\164", ["\164\x79\160\145" => "\150\151\x64\144\x65\x6e", "\x6e\141\155\145" => "\157\x72\x64\145\x72\142\x61\171", "\166\141\x6c\165\145" => $sikaymiwcesagayc], true);
        goto kkieqqwwascekcmo;
        suiywiakesiegcwu:
        $icwicymcioeyeyek = $_POST;
        goto kmseiouukkqiumum;
        cyymeyomuakqakwo:
        ocwouquuwsaqakae:
        goto uwscegkmmumymoaq;
        mugeiwyysiemwaym:
        ManipulateHTML::awwqwouuoioauoaw("\x69\x6e\x70\165\164", ["\164\x79\160\145" => "\x68\x69\144\x64\x65\156", "\x6e\141\155\145" => "\x6f\162\144\x65\x72", "\166\x61\x6c\x75\x65" => $umwqusowiqmyseom], true);
        goto euymeegkukskiowq;
        kmseiouukkqiumum:
        $sikaymiwcesagayc = ManipulateArray::get($icwicymcioeyeyek, "\157\x72\144\x65\x72\x62\x79");
        goto syuywgysqyckcqay;
        kkieqqwwascekcmo:
        qoacckkkwsqkokye:
        goto ycueoqkeakismiqw;
        syuywgysqyckcqay:
        if (!$sikaymiwcesagayc) {
            goto qoacckkkwsqkokye;
        }
        goto ggewkaiwwgkmkwgc;
        cquikgykuscqmigw:
        echo $this->iuygowkemiiwqmiw("\x73\145\x61\x72\x63\x68\x5f\142\157\x78", ["\151\156\x70\165\164" => $euueacigmgoqkimu, "\x74\145\170\x74" => $cmwygeyygwqaemaq, "\x71\x75\145\162\x79" => _admin_search_query(), "\x73\x75\142\155\151\164" => get_submit_button($cmwygeyygwqaemaq, "\x62\165\164\164\x6f\x6e", false, false, ["\x49\x44" => "\163\145\x61\x72\x63\x68\x2d\x73\x75\x62\155\151\164"])], ["\143\x6c\141\163\163" => self::class]);
        goto cyymeyomuakqakwo;
        uwscegkmmumymoaq:
    }
    
    public function column_default($igqsaukqcqscimok, $column_name)
    {
        goto simkiasocoimioew;
        wqieuwguumokgyqg:
        gkwoqoeaecgkymeu:
        goto aueiggyawkmkamum;
        gkuwmiusoqwesqoo:
        if ($aiowsaccomcoikus instanceof Foreign) {
            goto auaywaskqooasiuq;
        }
        goto wmsiqkyqsiysgcyy;
        moqcomgmwiamuomq:
        if ($iwywmkygwewiamwm) {
            goto yukacyeckkwagusw;
        }
        goto omgkuuyoiugcymmy;
        eqemoayymokeqaqi:
        $awyomkauyyymugeq = !empty($ccowyogiqwikkkie) ? 1 : 0;
        goto keewmqmgqegumiwa;
        omgkuuyoiugcymmy:
        $iwywmkygwewiamwm = $meywaqqsugaoeyys->yyykkcyiksewsoqy($aokagokqyuysuksm);
        goto kumuckkicykgwqqm;
        keewmqmgqegumiwa:
        $wkkweuacukumqmya = $this->get_columns();
        goto oqsecqsucukywaee;
        miqmoasmioksggkm:
        wgeueumgacuuuama:
        goto cykaikwsaskgeemo;
        ksoawacwkgasqgmk:
        sieykcqauaygcais:
        goto yqeqouqemksasmqc;
        wkqwywgikoyqkyeg:
        goto ouaoyqugwsagkqaa;
        goto wqieuwguumokgyqg;
        ayyyeiyaosoacoqm:
        
        $aqykuigiuwmmcieu = ManipulateHTML::ciuuiyckmsygceis(ManipulateHTML::qgsekwygcgawekeq("\141", ["\x68\x72\145\x66" => $iwywmkygwewiamwm, "\143\x6c\141\x73\163" => "\x72\157\x77\55\164\151\164\x6c\x65", "\x61\x72\151\x61\55\x6c\141\x62\145\x6c" => sprintf(__("\105\144\151\x74\40\x22\x25\163\42", PR__CMN__FOUNDATION), $aqykuigiuwmmcieu)], true, $aqykuigiuwmmcieu));
        goto aiwygewkmigcwusw;
        aiwygewkmigcwusw:
        
        $aqykuigiuwmmcieu .= ManipulateHTML::qgsekwygcgawekeq("\x62\165\x74\164\157\x6e", ["\164\x79\x70\x65" => "\142\x75\x74\164\157\x6e", "\x63\x6c\x61\163\163" => "\x74\157\147\147\x6c\x65\55\162\157\x77"], true, ManipulateHTML::qgsekwygcgawekeq("\163\x70\x61\x6e", ["\x63\x6c\x61\163\x73" => "\163\143\x72\145\145\x6e\x2d\162\x65\141\x64\145\x72\55\x74\145\x78\x74"], true, __("\123\x68\157\167\x20\x6d\x6f\x72\x65\x20\144\x65\x74\x61\x69\x6c\163", PR__CMN__FOUNDATION)));
        goto ekmogkwmcqsykgsq;
        uiqycwuommmmuowy:
        $iwywmkygwewiamwm = $meywaqqsugaoeyys->uesweuocqoywoyms($aokagokqyuysuksm);
        goto moqcomgmwiamuomq;
        giuswooyckooaoms:
        auaywaskqooasiuq:
        goto uogkcsaewswoaosw;
        cqemkecywkkwaaii:
        $aokagokqyuysuksm = (int) $igqsaukqcqscimok->{$ceiwsaacewygcsqg};
        goto wcioaoeiiawwqqqq;
        aueiggyawkmkamum:
        $aqykuigiuwmmcieu = $this->seukicauekqqwwme($eqgoocgaqwqcimie, $column_name);
        goto qswqmgiwiyyqwioa;
        uogkcsaewswoaosw:
        ewoqyogcaksucksk:
        goto miqmoasmioksggkm;
        wmsiqkyqsiysgcyy:
        if ($aiowsaccomcoikus instanceof DateTime) {
            goto gkwoqoeaecgkymeu;
        }
        goto ysggiwiksocomkek;
        cykaikwsaskgeemo:
        $ccowyogiqwikkkie = $this->get_bulk_actions();
        goto eqemoayymokeqaqi;
        sguyyaygwyikaggk:
        if (!$iwywmkygwewiamwm) {
            goto qgyaeoqgekocwkmw;
        }
        goto ayyyeiyaosoacoqm;
        ysggiwiksocomkek:
        $aqykuigiuwmmcieu = $eqgoocgaqwqcimie;
        goto wkqwywgikoyqkyeg;
        oqsecqsucukywaee:
        $yygmoeguaqyumuui = array_keys($wkkweuacukumqmya);
        goto iqamwyasyoqsugeu;
        simkiasocoimioew:
        $meywaqqsugaoeyys = $this->mgogaykgkoogasim();
        goto iuaeeeeggkikuiig;
        iqamwyasyoqsugeu:
        if (!($column_name === $yygmoeguaqyumuui[$awyomkauyyymugeq])) {
            goto sieykcqauaygcais;
        }
        goto uiqycwuommmmuowy;
        qaikeckkiwasykwk:
        $aqykuigiuwmmcieu = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("{$meywaqqsugaoeyys->miwqiiqeegeqcwis()}\137\x6d\x61\x6e\x61\147\145\x5f\143\165\x73\164\157\x6d\x5f\143\x6f\154\165\155\156"), '', $column_name, $eqgoocgaqwqcimie, $aokagokqyuysuksm, $igqsaukqcqscimok);
        goto ieoiygycmseqmmgc;
        omekuqkuugyocmoc:
        goto ewoqyogcaksucksk;
        goto giuswooyckooaoms;
        yqeqouqemksasmqc:
        return $aqykuigiuwmmcieu;
        goto wgaqkacekoyiwggi;
        wcioaoeiiawwqqqq:
        $aiowsaccomcoikus = $meywaqqsugaoeyys->oyeskqayoscwciem()->uqeoyqiwywwmsiew($column_name);
        goto qaikeckkiwasykwk;
        kumuckkicykgwqqm:
        yukacyeckkwagusw:
        goto sguyyaygwyikaggk;
        qswqmgiwiyyqwioa:
        ouaoyqugwsagkqaa:
        goto omekuqkuugyocmoc;
        iuaeeeeggkikuiig:
        $ceiwsaacewygcsqg = $meywaqqsugaoeyys->kumuygiiqswoyasy();
        goto kmiqskugkmaiugae;
        kmiqskugkmaiugae:
        $eqgoocgaqwqcimie = ManipulateArray::get($igqsaukqcqscimok, $column_name, '');
        goto cqemkecywkkwaaii;
        ieoiygycmseqmmgc:
        if ($aqykuigiuwmmcieu) {
            goto wgeueumgacuuuama;
        }
        goto gkuwmiusoqwesqoo;
        ekmogkwmcqsykgsq:
        qgyaeoqgekocwkmw:
        goto ksoawacwkgasqgmk;
        wgaqkacekoyiwggi:
    }
    
    public function umaeoegyykkkqmia()
    {
        goto emioyucskiowqumg;
        emioyucskiowqumg:
        $meywaqqsugaoeyys = $this->mgogaykgkoogasim();
        goto jkaemsuwyyoamwim;
        qiqegseqwywcmwoe:
        $eqgoocgaqwqcimie = ManipulateArray::get(array_keys($umwgoasiowmqcumw), 0, false);
        goto yosyyiksyyscacus;
        suwsiaeoumiwkiqg:
        $igaagwuyasawwqms = ManipulateArray::get($_GET, $meywaqqsugaoeyys::ORM_FILTER_BY, false);
        goto yoauoocuckogmsuw;
        koiyaaokigmamqyc:
        $umwgoasiowmqcumw = $this->get_views();
        goto qiqegseqwywcmwoe;
        jkaemsuwyyoamwim:
        $tsuauommsquiesmk = $meywaqqsugaoeyys->aakiaoueckoiyoew();
        goto suwsiaeoumiwkiqg;
        amyaoueckysgmmas:
        if (!((!$eqgoocgaqwqcimie || !$igaagwuyasawwqms) && $tsuauommsquiesmk)) {
            goto cscskwugoamcmqyu;
        }
        goto koiyaaokigmamqyc;
        yoauoocuckogmsuw:
        $eqgoocgaqwqcimie = ManipulateArray::get($_GET, $meywaqqsugaoeyys::ORM_FILTER_VALUE, false);
        goto amyaoueckysgmmas;
        kwcscewawgicomok:
        return $eqgoocgaqwqcimie;
        goto kikkkocywiyuyuqw;
        yosyyiksyyscacus:
        cscskwugoamcmqyu:
        goto kwcscewawgicomok;
        kikkkocywiyuyuqw:
    }
    
    public function before_pagination(?Builder $siykeiywomwwuoiw) : ?Builder
    {
        return $siykeiywomwwuoiw;
    }
    
    public function prepare_items($suaemuyiacqyugsm = 1, $weyoqgcesqgeusiu = null)
    {
        goto oaociaioauummsey;
        gcecamucuogcciig:
        
        $weyoqgcesqgeusiu = $this->get_items_per_page("\145\x64\x69\164\x5f" . $meywaqqsugaoeyys->miwqiiqeegeqcwis() . "\137\x70\145\162\x5f\160\141\147\145");
        goto suscosoukqeyyqgs;
        cueuscqkicwwicei:
        if ($weyoqgcesqgeusiu) {
            goto aqeyqwuywqcmuoce;
        }
        goto gcecamucuogcciig;
        akyiiioycmgqyuok:
        
        $gmwiogsuisuoiwqu = $meywaqqsugaoeyys->aeggeuqycwawueqy($siykeiywomwwuoiw, [self::PAGE => $suaemuyiacqyugsm, "\x66\x69\x6c\164\x65\x72\137\166\x61\154\165\145" => false, self::PER_PAGE => $weyoqgcesqgeusiu]);
        goto ycomeuqeessamows;
        suscosoukqeyyqgs:
        aqeyqwuywqcmuoce:
        goto kiewcwsykccgocuc;
        gqycmyieayoegcsy:
        $ceiwsaacewygcsqg = $meywaqqsugaoeyys->kumuygiiqswoyasy();
        goto sqiyuasgusgawuoi;
        eogomkswkaqwyycm:
        goto akoweomooyuwamow;
        goto egiauwuekseyeaeq;
        msiuqseowuumiwuo:
        $siykeiywomwwuoiw = $this->before_pagination($siykeiywomwwuoiw);
        goto gqycmyieayoegcsy;
        eysuawiooiswaseq:
        if ($siykeiywomwwuoiw) {
            goto qayiqaykkywcyisq;
        }
        goto iecqkqoiqimmisyw;
        esokkakkumskkmiu:
        aymoguycgmuggcik:
        goto msiuqseowuumiwuo;
        iecqkqoiqimmisyw:
        $this->items = [];
        goto eogomkswkaqwyycm;
        owiguescmqyqukui:
        
        $this->set_pagination_args(["\160\145\162\137\160\x61\x67\145" => $weyoqgcesqgeusiu, "\x74\x6f\164\141\x6c\137\151\164\x65\155\x73" => $gmwiogsuisuoiwqu["\160\141\147\151\x6e\141\164\x69\157\156"]["\164\157\164\141\x6c"], "\164\157\164\x61\154\137\160\x61\147\x65\163" => $gmwiogsuisuoiwqu["\x70\x61\147\151\156\141\164\x69\157\156"]["\160\141\x67\x65\163"]]);
        goto guummoewucyeuiek;
        ycomeuqeessamows:
        $this->items = $gmwiogsuisuoiwqu[self::ITEMS];
        goto owiguescmqyqukui;
        wyqueeskecameuks:
        
        $siykeiywomwwuoiw->where($aiowsaccomcoikus, self::EQUAL_SYMBOL, $eqgoocgaqwqcimie);
        goto esokkakkumskkmiu;
        iayguaeseyaemwkk:
        $siykeiywomwwuoiw = $meywaqqsugaoeyys->aaeswuecycyquqwk($siykeiywomwwuoiw, $this);
        goto akyiiioycmgqyuok;
        guummoewucyeuiek:
        akoweomooyuwamow:
        goto mqacqosyicuiqwia;
        kikkkoqiumqoeiyy:
        $aiowsaccomcoikus = $meywaqqsugaoeyys->aakiaoueckoiyoew();
        goto wyqueeskecameuks;
        oaociaioauummsey:
        $meywaqqsugaoeyys = $this->mgogaykgkoogasim();
        goto cueuscqkicwwicei;
        euuekiyqwkowiees:
        $eqgoocgaqwqcimie = $this->umaeoegyykkkqmia();
        goto assoyoeukmqiucyq;
        kiewcwsykccgocuc:
        $siykeiywomwwuoiw = $meywaqqsugaoeyys->gqaysymikgeawkqa();
        goto eysuawiooiswaseq;
        assoyoeukmqiucyq:
        if (!($eqgoocgaqwqcimie && $eqgoocgaqwqcimie !== "\141\154\x6c")) {
            goto aymoguycgmuggcik;
        }
        goto kikkkoqiumqoeiyy;
        sqiyuasgusgawuoi:
        $meywaqqsugaoeyys->ewkswoqykwsuckok($siykeiywomwwuoiw, $ceiwsaacewygcsqg, self::DESC);
        goto iayguaeseyaemwkk;
        egiauwuekseyeaeq:
        qayiqaykkywcyisq:
        goto euuekiyqwkowiees;
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
        ciiyqsiswkcwsocm:
        ManipulateHTML::awwqwouuoioauoaw("\144\x69\166", ["\x63\154\x61\x73\x73" => "\x70\162\55\160\x72\151\x6d\141\162\171\55\141\x63\164\151\157\156\x73"], true, $ccowyogiqwikkkie);
        goto ugyawwukegyoqmsq;
        ukigmkeewuqomooc:
    }
    
    protected function handle_row_actions($igqsaukqcqscimok, $column_name, $micmwmywmkguiyyk) : string
    {
        goto ykcmomsiayaymysm;
        wicuauokauykwoeu:
        wwgikwuigiiqsswq:
        goto gcecieuocqawmgci;
        kcwgiwimgqesukqu:
        $ccowyogiqwikkkie["\145\144\x69\164"] = ManipulateHTML::uuccukgasskgimsq("\x61", ["\150\x72\145\x66" => $iwywmkygwewiamwm, "\141\x72\151\141\55\x6c\141\x62\145\x6c" => __("\x45\144\151\164", PR__CMN__FOUNDATION)], __("\x45\x64\x69\x74", PR__CMN__FOUNDATION));
        goto wicuauokauykwoeu;
        cwmuqmoeauqcewoy:
        $ceiwsaacewygcsqg = $meywaqqsugaoeyys->kumuygiiqswoyasy();
        goto eiecgqokmuekaesc;
        gcecieuocqawmgci:
        if (!($iwywmkygwewiamwm = $meywaqqsugaoeyys->cgccmsewskigcuig($eqgoocgaqwqcimie))) {
            goto seyygcwcaogkmaqe;
        }
        goto msmmiaumiasmsiog;
        ikukqooiowqywyqo:
        return $ccowyogiqwikkkie;
        goto cciakcwuweqmcose;
        ggsugekocmsukuci:
        $ccowyogiqwikkkie = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("{$meywaqqsugaoeyys->miwqiiqeegeqcwis()}\x5f\x72\157\167\137\141\143\x74\151\x6f\x6e\163"), [], $eqgoocgaqwqcimie, $this->umaeoegyykkkqmia(), $igqsaukqcqscimok);
        goto ceosmkqgqgwsowwg;
        eiecgqokmuekaesc:
        $eqgoocgaqwqcimie = $igqsaukqcqscimok->{$ceiwsaacewygcsqg};
        goto ggsugekocmsukuci;
        ceosmkqgqgwsowwg:
        if (!($iwywmkygwewiamwm = $meywaqqsugaoeyys->yyykkcyiksewsoqy($eqgoocgaqwqcimie))) {
            goto wwgikwuigiiqsswq;
        }
        goto kcwgiwimgqesukqu;
        oksqsucimimsswcg:
        seyygcwcaogkmaqe:
        goto gqeoaceyoiicoaec;
        msmmiaumiasmsiog:
        $ccowyogiqwikkkie["\x64\x65\x6c\x65\x74\145"] = $meywaqqsugaoeyys->rkmkouiquumiecqy($iwywmkygwewiamwm);
        goto oksqsucimimsswcg;
        ykcmomsiayaymysm:
        $meywaqqsugaoeyys = $this->mgogaykgkoogasim();
        goto qoaawmmcqyacokws;
        uwyeycaywowwiquu:
        if (!($micmwmywmkguiyyk === $column_name)) {
            goto uugiuqkesegaamqw;
        }
        goto cwmuqmoeauqcewoy;
        gqeoaceyoiicoaec:
        $ccowyogiqwikkkie = $this->row_actions($ccowyogiqwikkkie);
        goto kkckyqmcyussauma;
        qoaawmmcqyacokws:
        $ccowyogiqwikkkie = '';
        goto uwyeycaywowwiquu;
        kkckyqmcyussauma:
        uugiuqkesegaamqw:
        goto ikukqooiowqywyqo;
        cciakcwuweqmcose:
    }
}
