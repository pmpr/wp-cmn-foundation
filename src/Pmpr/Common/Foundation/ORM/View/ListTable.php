<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b30261f503             |
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
        equwcsciiggsuiam:
        $this->model = $meywaqqsugaoeyys;
        goto qsaoyggkqwcgskwk;
        myooisakyuggoggc:
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($yyksucsgisomecgg->sacmkccceuywoqsq(true), ["\163\143\162\x65\145\x6e" => convert_to_screen($yyksucsgisomecgg->qeeuwmmksmqiuywg())]);
        goto awkqcyusycccekwq;
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
        echo $this->mgogaykgkoogasim()->oyeskqayoscwciem()->uikgwcuascgeissw("\x6e\x6f\x74\137\x66\x6f\x75\x6e\144");
    }
    
    protected function get_views()
    {
        $umwgoasiowmqcumw = parent::get_views();
        return $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("{$this->mgogaykgkoogasim()->miwqiiqeegeqcwis()}\137\155\141\x6e\141\x67\x65\x5f\x76\x69\145\x77\x73"), $umwgoasiowmqcumw);
    }
    
    public function get_columns()
    {
        goto ykogqmmywykgouqy;
        gmsyoscesymiwwue:
        $wkkweuacukumqmya["\x63\142"] = ManipulateHTML::qgsekwygcgawekeq("\x69\156\x70\x75\x74", ["\164\171\160\x65" => "\x63\150\145\x63\153\142\x6f\170"]);
        goto eiicmcasqikiyasw;
        ayucsuwsiocgycww:
        return $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("{$this->mgogaykgkoogasim()->miwqiiqeegeqcwis()}\137\x6d\141\156\141\147\x65\137\x63\157\154\165\155\x6e\163"), $wkkweuacukumqmya);
        goto smmagoyuqoigoesc;
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
        swesqeqmagkicuws:
        $meywaqqsugaoeyys = $this->mgogaykgkoogasim();
        goto cwyaysecsakaqgew;
        rgaagksgsewuwgmo:
        $eqgoocgaqwqcimie = $igqsaukqcqscimok->{$ceiwsaacewygcsqg};
        goto mcmcocyuugueaeww;
        mcmcocyuugueaeww:
        echo $this->iuygowkemiiwqmiw("\x63\141\x6c\154\142\x61\143\x6b", ["\x76\x61\x6c\x75\x65" => $eqgoocgaqwqcimie, "\164\x69\x74\x6c\x65" => __("\x53\x65\x6c\145\143\x74\40\x49\x74\145\x6d\x20\43\x25\x64", PR__CMN__FOUNDATION), "\164\x65\170\164" => __("\x26\43\x38\62\62\x30\73\x49\164\145\155\40\x23\x25\144\46\x23\x38\x32\62\61\73\40\x69\163\40\x6c\157\x63\153\145\x64", PR__CMN__FOUNDATION)], ["\143\154\x61\x73\x73" => self::class]);
        goto eucakkcoiiwkwsme;
        eucakkcoiiwkwsme:
        wsqeiwkgoiekwasy:
        goto iwsaaiggkciigsmc;
        kwayumouacgkgyas:
        if (!DecoratorUser::scmcyesmmikkucie($gkswkiicccswksiq)) {
            goto wsqeiwkgoiekwasy;
        }
        goto rgaagksgsewuwgmo;
        cwyaysecsakaqgew:
        $ceiwsaacewygcsqg = $meywaqqsugaoeyys->kumuygiiqswoyasy();
        goto kgqgcggccmiwayua;
        kgqgcggccmiwayua:
        $gkswkiicccswksiq = $meywaqqsugaoeyys->oyeskqayoscwciem()->gwaeeegmgggawiyi("\145\x64\x69\x74\137\x69\164\x65\x6d\163");
        goto kwayumouacgkgyas;
        iwsaaiggkciigsmc:
    }
    
    protected function get_bulk_actions() : array
    {
        goto kygccamgawookukq;
        kuaiscyqkgcouiye:
        if (!$meywaqqsugaoeyys->mukyysqkgaimcygs()) {
            goto agsuaimomgsoyiem;
        }
        goto ooooceiweeackgie;
        qwiyicoywcekgyce:
        return (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("{$this->mgogaykgkoogasim()->miwqiiqeegeqcwis()}\137\142\165\x6c\x6b\137\x61\143\x74\151\157\x6e\x73"), $ccowyogiqwikkkie, $this->umaeoegyykkkqmia());
        goto tagquiiokseckkqs;
        ooooceiweeackgie:
        $ccowyogiqwikkkie["\144\145\x6c\x65\x74\x65"] = __("\x44\x65\154\x65\164\145", PR__CMN__FOUNDATION);
        goto gkeymcqqsewayscs;
        kygccamgawookukq:
        $meywaqqsugaoeyys = $this->mgogaykgkoogasim();
        goto qysmyemoucigsmua;
        qysmyemoucigsmua:
        $ccowyogiqwikkkie = [];
        goto kuaiscyqkgcouiye;
        gkeymcqqsewayscs:
        agsuaimomgsoyiem:
        goto qwiyicoywcekgyce;
        tagquiiokseckkqs:
    }
    
    public function get_sortable_columns() : array
    {
        return (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("{$this->mgogaykgkoogasim()->miwqiiqeegeqcwis()}\137\155\x61\x6e\141\147\145\137\163\157\x72\164\x61\142\x6c\145\x5f\x63\157\x6c\165\x6d\156\163"), []);
    }
    
    protected function get_table_classes() : array
    {
        return ["\167\151\144\x65\x66\141\x74", "\x66\x69\170\145\x64", "\x73\x74\x72\151\160\x65\x64", $this->mgogaykgkoogasim()->miwqiiqeegeqcwis()];
    }
    
    public function search_box($cmwygeyygwqaemaq, $euueacigmgoqkimu)
    {
        goto gcaykgmmmqomsyis;
        syuywgysqyckcqay:
        if (!$sikaymiwcesagayc) {
            goto qoacckkkwsqkokye;
        }
        goto ggewkaiwwgkmkwgc;
        ycueoqkeakismiqw:
        $umwqusowiqmyseom = ManipulateArray::get($icwicymcioeyeyek, "\x6f\162\144\145\162");
        goto awimwukcyiceackk;
        euymeegkukskiowq:
        swuggqyiaiqywgge:
        goto cquikgykuscqmigw;
        kmseiouukkqiumum:
        $sikaymiwcesagayc = ManipulateArray::get($icwicymcioeyeyek, "\157\x72\x64\x65\162\142\x79");
        goto syuywgysqyckcqay;
        mugeiwyysiemwaym:
        ManipulateHTML::awwqwouuoioauoaw("\151\156\x70\x75\x74", ["\164\x79\x70\x65" => "\150\151\144\x64\145\x6e", "\156\141\x6d\145" => "\157\162\x64\145\162", "\x76\141\154\x75\x65" => $umwqusowiqmyseom], true);
        goto euymeegkukskiowq;
        awimwukcyiceackk:
        if (!$umwqusowiqmyseom) {
            goto swuggqyiaiqywgge;
        }
        goto mugeiwyysiemwaym;
        yccuomocgmewkeca:
        $euueacigmgoqkimu = $euueacigmgoqkimu . "\55\163\x65\x61\162\x63\x68\55\x69\x6e\x70\x75\x74";
        goto suiywiakesiegcwu;
        kkieqqwwascekcmo:
        qoacckkkwsqkokye:
        goto ycueoqkeakismiqw;
        ggewkaiwwgkmkwgc:
        ManipulateHTML::awwqwouuoioauoaw("\x69\156\x70\165\164", ["\164\171\160\x65" => "\150\151\144\x64\145\x6e", "\156\141\155\x65" => "\x6f\x72\144\145\x72\142\x61\171", "\x76\141\x6c\x75\x65" => $sikaymiwcesagayc], true);
        goto kkieqqwwascekcmo;
        gcaykgmmmqomsyis:
        if (!$this->has_items()) {
            goto ocwouquuwsaqakae;
        }
        goto yccuomocgmewkeca;
        suiywiakesiegcwu:
        $icwicymcioeyeyek = $_POST;
        goto kmseiouukkqiumum;
        cyymeyomuakqakwo:
        ocwouquuwsaqakae:
        goto uwscegkmmumymoaq;
        cquikgykuscqmigw:
        echo $this->iuygowkemiiwqmiw("\163\x65\141\x72\143\150\137\x62\157\x78", ["\x69\156\160\x75\164" => $euueacigmgoqkimu, "\164\x65\170\x74" => $cmwygeyygwqaemaq, "\x71\165\145\x72\171" => _admin_search_query(), "\163\165\x62\x6d\151\164" => get_submit_button($cmwygeyygwqaemaq, "\142\x75\164\164\157\156", false, false, ["\111\104" => "\163\145\141\x72\143\150\55\x73\x75\142\x6d\x69\164"])], ["\143\x6c\141\x73\x73" => self::class]);
        goto cyymeyomuakqakwo;
        uwscegkmmumymoaq:
    }
    
    public function column_default($igqsaukqcqscimok, $column_name)
    {
        goto simkiasocoimioew;
        ksoawacwkgasqgmk:
        sieykcqauaygcais:
        goto yqeqouqemksasmqc;
        ieoiygycmseqmmgc:
        if ($aqykuigiuwmmcieu) {
            goto wgeueumgacuuuama;
        }
        goto gkuwmiusoqwesqoo;
        kumuckkicykgwqqm:
        yukacyeckkwagusw:
        goto sguyyaygwyikaggk;
        uogkcsaewswoaosw:
        ewoqyogcaksucksk:
        goto miqmoasmioksggkm;
        omekuqkuugyocmoc:
        goto ewoqyogcaksucksk;
        goto giuswooyckooaoms;
        ysggiwiksocomkek:
        $aqykuigiuwmmcieu = $eqgoocgaqwqcimie;
        goto wkqwywgikoyqkyeg;
        qaikeckkiwasykwk:
        $aqykuigiuwmmcieu = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("{$meywaqqsugaoeyys->miwqiiqeegeqcwis()}\x5f\155\x61\x6e\x61\x67\x65\137\143\x75\x73\164\157\x6d\x5f\143\157\x6c\x75\x6d\156"), '', $column_name, $eqgoocgaqwqcimie, $aokagokqyuysuksm, $igqsaukqcqscimok);
        goto ieoiygycmseqmmgc;
        wkqwywgikoyqkyeg:
        goto ouaoyqugwsagkqaa;
        goto wqieuwguumokgyqg;
        simkiasocoimioew:
        $meywaqqsugaoeyys = $this->mgogaykgkoogasim();
        goto iuaeeeeggkikuiig;
        kmiqskugkmaiugae:
        $eqgoocgaqwqcimie = ManipulateArray::get($igqsaukqcqscimok, $column_name, '');
        goto cqemkecywkkwaaii;
        qswqmgiwiyyqwioa:
        ouaoyqugwsagkqaa:
        goto omekuqkuugyocmoc;
        giuswooyckooaoms:
        auaywaskqooasiuq:
        goto uogkcsaewswoaosw;
        cykaikwsaskgeemo:
        $ccowyogiqwikkkie = $this->get_bulk_actions();
        goto eqemoayymokeqaqi;
        miqmoasmioksggkm:
        wgeueumgacuuuama:
        goto cykaikwsaskgeemo;
        uiqycwuommmmuowy:
        $iwywmkygwewiamwm = $meywaqqsugaoeyys->uesweuocqoywoyms($aokagokqyuysuksm);
        goto moqcomgmwiamuomq;
        omgkuuyoiugcymmy:
        $iwywmkygwewiamwm = $meywaqqsugaoeyys->yyykkcyiksewsoqy($aokagokqyuysuksm);
        goto kumuckkicykgwqqm;
        oqsecqsucukywaee:
        $yygmoeguaqyumuui = array_keys($wkkweuacukumqmya);
        goto iqamwyasyoqsugeu;
        wqieuwguumokgyqg:
        gkwoqoeaecgkymeu:
        goto aueiggyawkmkamum;
        ekmogkwmcqsykgsq:
        qgyaeoqgekocwkmw:
        goto ksoawacwkgasqgmk;
        cqemkecywkkwaaii:
        $aokagokqyuysuksm = (int) $igqsaukqcqscimok->{$ceiwsaacewygcsqg};
        goto wcioaoeiiawwqqqq;
        aueiggyawkmkamum:
        $aqykuigiuwmmcieu = $this->seukicauekqqwwme($eqgoocgaqwqcimie, $column_name);
        goto qswqmgiwiyyqwioa;
        eqemoayymokeqaqi:
        $awyomkauyyymugeq = !empty($ccowyogiqwikkkie) ? 1 : 0;
        goto keewmqmgqegumiwa;
        sguyyaygwyikaggk:
        if (!$iwywmkygwewiamwm) {
            goto qgyaeoqgekocwkmw;
        }
        goto ayyyeiyaosoacoqm;
        gkuwmiusoqwesqoo:
        if ($aiowsaccomcoikus instanceof Foreign) {
            goto auaywaskqooasiuq;
        }
        goto wmsiqkyqsiysgcyy;
        yqeqouqemksasmqc:
        return $aqykuigiuwmmcieu;
        goto wgaqkacekoyiwggi;
        iqamwyasyoqsugeu:
        if (!($column_name === $yygmoeguaqyumuui[$awyomkauyyymugeq])) {
            goto sieykcqauaygcais;
        }
        goto uiqycwuommmmuowy;
        keewmqmgqegumiwa:
        $wkkweuacukumqmya = $this->get_columns();
        goto oqsecqsucukywaee;
        aiwygewkmigcwusw:
        
        $aqykuigiuwmmcieu .= ManipulateHTML::qgsekwygcgawekeq("\142\x75\164\164\157\x6e", ["\164\171\x70\145" => "\142\165\164\x74\x6f\156", "\143\x6c\141\x73\163" => "\164\157\x67\147\x6c\145\x2d\162\157\x77"], true, ManipulateHTML::qgsekwygcgawekeq("\163\160\x61\x6e", ["\x63\x6c\x61\163\163" => "\x73\x63\x72\145\145\x6e\55\162\145\x61\x64\145\162\x2d\164\145\x78\164"], true, __("\x53\x68\x6f\x77\x20\x6d\157\162\x65\40\x64\x65\164\141\151\x6c\x73", PR__CMN__FOUNDATION)));
        goto ekmogkwmcqsykgsq;
        moqcomgmwiamuomq:
        if ($iwywmkygwewiamwm) {
            goto yukacyeckkwagusw;
        }
        goto omgkuuyoiugcymmy;
        ayyyeiyaosoacoqm:
        
        $aqykuigiuwmmcieu = ManipulateHTML::ciuuiyckmsygceis(ManipulateHTML::qgsekwygcgawekeq("\x61", ["\x68\x72\145\x66" => $iwywmkygwewiamwm, "\143\x6c\x61\x73\163" => "\162\157\167\55\x74\x69\164\154\x65", "\x61\x72\151\141\55\154\x61\x62\x65\154" => sprintf(__("\105\144\151\164\40\42\x25\x73\x22", PR__CMN__FOUNDATION), $aqykuigiuwmmcieu)], true, $aqykuigiuwmmcieu));
        goto aiwygewkmigcwusw;
        iuaeeeeggkikuiig:
        $ceiwsaacewygcsqg = $meywaqqsugaoeyys->kumuygiiqswoyasy();
        goto kmiqskugkmaiugae;
        wcioaoeiiawwqqqq:
        $aiowsaccomcoikus = $meywaqqsugaoeyys->oyeskqayoscwciem()->uqeoyqiwywwmsiew($column_name);
        goto qaikeckkiwasykwk;
        wmsiqkyqsiysgcyy:
        if ($aiowsaccomcoikus instanceof DateTime) {
            goto gkwoqoeaecgkymeu;
        }
        goto ysggiwiksocomkek;
        wgaqkacekoyiwggi:
    }
    
    public function umaeoegyykkkqmia()
    {
        goto emioyucskiowqumg;
        yoauoocuckogmsuw:
        $eqgoocgaqwqcimie = ManipulateArray::get($_GET, $meywaqqsugaoeyys::ORM_FILTER_VALUE, false);
        goto amyaoueckysgmmas;
        emioyucskiowqumg:
        $meywaqqsugaoeyys = $this->mgogaykgkoogasim();
        goto jkaemsuwyyoamwim;
        amyaoueckysgmmas:
        if (!((!$eqgoocgaqwqcimie || !$igaagwuyasawwqms) && $tsuauommsquiesmk)) {
            goto cscskwugoamcmqyu;
        }
        goto koiyaaokigmamqyc;
        kwcscewawgicomok:
        return $eqgoocgaqwqcimie;
        goto kikkkocywiyuyuqw;
        jkaemsuwyyoamwim:
        $tsuauommsquiesmk = $meywaqqsugaoeyys->aakiaoueckoiyoew();
        goto suwsiaeoumiwkiqg;
        yosyyiksyyscacus:
        cscskwugoamcmqyu:
        goto kwcscewawgicomok;
        qiqegseqwywcmwoe:
        $eqgoocgaqwqcimie = ManipulateArray::get(array_keys($umwgoasiowmqcumw), 0, false);
        goto yosyyiksyyscacus;
        koiyaaokigmamqyc:
        $umwgoasiowmqcumw = $this->get_views();
        goto qiqegseqwywcmwoe;
        suwsiaeoumiwkiqg:
        $igaagwuyasawwqms = ManipulateArray::get($_GET, $meywaqqsugaoeyys::ORM_FILTER_BY, false);
        goto yoauoocuckogmsuw;
        kikkkocywiyuyuqw:
    }
    
    public function before_pagination(?Builder $siykeiywomwwuoiw) : ?Builder
    {
        return $siykeiywomwwuoiw;
    }
    
    public function prepare_items($suaemuyiacqyugsm = 1, $weyoqgcesqgeusiu = null)
    {
        goto oaociaioauummsey;
        esokkakkumskkmiu:
        aymoguycgmuggcik:
        goto msiuqseowuumiwuo;
        eysuawiooiswaseq:
        if ($siykeiywomwwuoiw) {
            goto qayiqaykkywcyisq;
        }
        goto iecqkqoiqimmisyw;
        assoyoeukmqiucyq:
        if (!($eqgoocgaqwqcimie && $eqgoocgaqwqcimie !== "\141\x6c\154")) {
            goto aymoguycgmuggcik;
        }
        goto kikkkoqiumqoeiyy;
        sqiyuasgusgawuoi:
        $meywaqqsugaoeyys->ewkswoqykwsuckok($siykeiywomwwuoiw, $ceiwsaacewygcsqg, self::DESC);
        goto iayguaeseyaemwkk;
        msiuqseowuumiwuo:
        $siykeiywomwwuoiw = $this->before_pagination($siykeiywomwwuoiw);
        goto gqycmyieayoegcsy;
        iayguaeseyaemwkk:
        $siykeiywomwwuoiw = $meywaqqsugaoeyys->aaeswuecycyquqwk($siykeiywomwwuoiw, $this);
        goto akyiiioycmgqyuok;
        owiguescmqyqukui:
        
        $this->set_pagination_args(["\x70\145\162\137\160\141\x67\x65" => $weyoqgcesqgeusiu, "\164\x6f\x74\141\x6c\x5f\151\x74\145\x6d\163" => $gmwiogsuisuoiwqu["\x70\x61\147\x69\x6e\x61\x74\x69\157\x6e"]["\x74\157\x74\x61\154"], "\x74\x6f\x74\x61\x6c\137\160\141\147\145\x73" => $gmwiogsuisuoiwqu["\160\x61\147\151\x6e\x61\164\151\157\x6e"]["\160\x61\147\x65\163"]]);
        goto guummoewucyeuiek;
        egiauwuekseyeaeq:
        qayiqaykkywcyisq:
        goto euuekiyqwkowiees;
        akyiiioycmgqyuok:
        
        $gmwiogsuisuoiwqu = $meywaqqsugaoeyys->aeggeuqycwawueqy($siykeiywomwwuoiw, [self::PAGE => $suaemuyiacqyugsm, "\x66\x69\x6c\164\x65\x72\137\x76\x61\154\165\x65" => false, self::PER_PAGE => $weyoqgcesqgeusiu]);
        goto ycomeuqeessamows;
        suscosoukqeyyqgs:
        aqeyqwuywqcmuoce:
        goto kiewcwsykccgocuc;
        euuekiyqwkowiees:
        $eqgoocgaqwqcimie = $this->umaeoegyykkkqmia();
        goto assoyoeukmqiucyq;
        iecqkqoiqimmisyw:
        $this->items = [];
        goto eogomkswkaqwyycm;
        gqycmyieayoegcsy:
        $ceiwsaacewygcsqg = $meywaqqsugaoeyys->kumuygiiqswoyasy();
        goto sqiyuasgusgawuoi;
        oaociaioauummsey:
        $meywaqqsugaoeyys = $this->mgogaykgkoogasim();
        goto cueuscqkicwwicei;
        eogomkswkaqwyycm:
        goto akoweomooyuwamow;
        goto egiauwuekseyeaeq;
        wyqueeskecameuks:
        
        $siykeiywomwwuoiw->where($aiowsaccomcoikus, self::EQUAL_SYMBOL, $eqgoocgaqwqcimie);
        goto esokkakkumskkmiu;
        guummoewucyeuiek:
        akoweomooyuwamow:
        goto mqacqosyicuiqwia;
        cueuscqkicwwicei:
        if ($weyoqgcesqgeusiu) {
            goto aqeyqwuywqcmuoce;
        }
        goto gcecamucuogcciig;
        kikkkoqiumqoeiyy:
        $aiowsaccomcoikus = $meywaqqsugaoeyys->aakiaoueckoiyoew();
        goto wyqueeskecameuks;
        gcecamucuogcciig:
        
        $weyoqgcesqgeusiu = $this->get_items_per_page("\x65\x64\x69\164\137" . $meywaqqsugaoeyys->miwqiiqeegeqcwis() . "\137\160\x65\x72\x5f\160\x61\147\145");
        goto suscosoukqeyyqgs;
        kiewcwsykccgocuc:
        $siykeiywomwwuoiw = $meywaqqsugaoeyys->gqaysymikgeawkqa();
        goto eysuawiooiswaseq;
        ycomeuqeessamows:
        $this->items = $gmwiogsuisuoiwqu[self::ITEMS];
        goto owiguescmqyqukui;
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
        kwowggaooiyqawyq:
        $ccowyogiqwikkkie = $this->sokuygywyckaocci();
        goto ieoeeyieoskuyiyw;
        soqkewsayowwcmco:
        parent::extra_tablenav($wcagyqamwoksawik);
        goto ukigmkeewuqomooc;
        ugyawwukegyoqmsq:
        mcuoyseuwoueyaie:
        goto soqkewsayowwcmco;
        ieoeeyieoskuyiyw:
        if (!$ccowyogiqwikkkie) {
            goto mcuoyseuwoueyaie;
        }
        goto ciiyqsiswkcwsocm;
        ciiyqsiswkcwsocm:
        ManipulateHTML::awwqwouuoioauoaw("\x64\x69\166", ["\143\x6c\141\163\x73" => "\x70\x72\x2d\x70\162\x69\x6d\x61\162\171\x2d\141\143\x74\x69\157\x6e\x73"], true, $ccowyogiqwikkkie);
        goto ugyawwukegyoqmsq;
        ukigmkeewuqomooc:
    }
    
    protected function handle_row_actions($igqsaukqcqscimok, $column_name, $micmwmywmkguiyyk) : string
    {
        goto ykcmomsiayaymysm;
        gqeoaceyoiicoaec:
        $ccowyogiqwikkkie = $this->row_actions($ccowyogiqwikkkie);
        goto kkckyqmcyussauma;
        eiecgqokmuekaesc:
        $eqgoocgaqwqcimie = $igqsaukqcqscimok->{$ceiwsaacewygcsqg};
        goto ggsugekocmsukuci;
        uwyeycaywowwiquu:
        if (!($micmwmywmkguiyyk === $column_name)) {
            goto uugiuqkesegaamqw;
        }
        goto cwmuqmoeauqcewoy;
        gcecieuocqawmgci:
        if (!($iwywmkygwewiamwm = $meywaqqsugaoeyys->cgccmsewskigcuig($eqgoocgaqwqcimie))) {
            goto seyygcwcaogkmaqe;
        }
        goto msmmiaumiasmsiog;
        ggsugekocmsukuci:
        $ccowyogiqwikkkie = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("{$meywaqqsugaoeyys->miwqiiqeegeqcwis()}\x5f\x72\157\167\137\x61\x63\164\151\x6f\x6e\x73"), [], $eqgoocgaqwqcimie, $this->umaeoegyykkkqmia(), $igqsaukqcqscimok);
        goto ceosmkqgqgwsowwg;
        kkckyqmcyussauma:
        uugiuqkesegaamqw:
        goto ikukqooiowqywyqo;
        msmmiaumiasmsiog:
        $ccowyogiqwikkkie["\144\145\154\x65\x74\145"] = $meywaqqsugaoeyys->rkmkouiquumiecqy($iwywmkygwewiamwm);
        goto oksqsucimimsswcg;
        cwmuqmoeauqcewoy:
        $ceiwsaacewygcsqg = $meywaqqsugaoeyys->kumuygiiqswoyasy();
        goto eiecgqokmuekaesc;
        qoaawmmcqyacokws:
        $ccowyogiqwikkkie = '';
        goto uwyeycaywowwiquu;
        ikukqooiowqywyqo:
        return $ccowyogiqwikkkie;
        goto cciakcwuweqmcose;
        ykcmomsiayaymysm:
        $meywaqqsugaoeyys = $this->mgogaykgkoogasim();
        goto qoaawmmcqyacokws;
        wicuauokauykwoeu:
        wwgikwuigiiqsswq:
        goto gcecieuocqawmgci;
        ceosmkqgqgwsowwg:
        if (!($iwywmkygwewiamwm = $meywaqqsugaoeyys->yyykkcyiksewsoqy($eqgoocgaqwqcimie))) {
            goto wwgikwuigiiqsswq;
        }
        goto kcwgiwimgqesukqu;
        oksqsucimimsswcg:
        seyygcwcaogkmaqe:
        goto gqeoaceyoiicoaec;
        kcwgiwimgqesukqu:
        $ccowyogiqwikkkie["\x65\144\151\x74"] = ManipulateHTML::uuccukgasskgimsq("\x61", ["\150\x72\145\146" => $iwywmkygwewiamwm, "\x61\162\151\141\55\x6c\x61\x62\x65\154" => __("\105\144\151\x74", PR__CMN__FOUNDATION)], __("\x45\144\151\x74", PR__CMN__FOUNDATION));
        goto wicuauokauykwoeu;
        cciakcwuweqmcose:
    }
}
