<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b499786a1b             |
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
        qsaoyggkqwcgskwk:
        $yyksucsgisomecgg = $meywaqqsugaoeyys->oyeskqayoscwciem();
        goto myooisakyuggoggc;
        myooisakyuggoggc:
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($yyksucsgisomecgg->sacmkccceuywoqsq(true), ["\x73\143\x72\x65\x65\156" => convert_to_screen($yyksucsgisomecgg->qeeuwmmksmqiuywg())]);
        goto awkqcyusycccekwq;
        awkqcyusycccekwq:
        parent::__construct($ywmkwiwkosakssii);
        goto yugmwomumkosucsc;
        yugmwomumkosucsc:
    }
    
    public function mgogaykgkoogasim() : ?Model
    {
        return $this->model;
    }
    function no_items()
    {
        echo $this->mgogaykgkoogasim()->oyeskqayoscwciem()->uikgwcuascgeissw("\156\157\x74\x5f\x66\x6f\x75\156\144");
    }
    
    protected function get_views()
    {
        $umwgoasiowmqcumw = parent::get_views();
        return $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("{$this->mgogaykgkoogasim()->miwqiiqeegeqcwis()}\137\155\x61\156\141\x67\145\x5f\166\151\x65\x77\163"), $umwgoasiowmqcumw);
    }
    
    public function get_columns()
    {
        goto ykogqmmywykgouqy;
        aqksouwmeckaqyaq:
        if (!$this->get_bulk_actions()) {
            goto kqwyogqqwumumiwg;
        }
        goto gmsyoscesymiwwue;
        gmsyoscesymiwwue:
        $wkkweuacukumqmya["\x63\142"] = ManipulateHTML::qgsekwygcgawekeq("\151\x6e\160\165\164", ["\164\x79\x70\x65" => "\x63\x68\x65\x63\x6b\x62\x6f\x78"]);
        goto eiicmcasqikiyasw;
        eiicmcasqikiyasw:
        kqwyogqqwumumiwg:
        goto ayucsuwsiocgycww;
        ykogqmmywykgouqy:
        $wkkweuacukumqmya = [];
        goto aqksouwmeckaqyaq;
        ayucsuwsiocgycww:
        return $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("{$this->mgogaykgkoogasim()->miwqiiqeegeqcwis()}\x5f\155\x61\156\141\147\145\x5f\x63\x6f\x6c\165\x6d\x6e\163"), $wkkweuacukumqmya);
        goto smmagoyuqoigoesc;
        smmagoyuqoigoesc:
    }
    
    public function ocimsyskieegygok()
    {
        return ManipulateServer::get("\x73", '');
    }
    
    public function column_cb($igqsaukqcqscimok)
    {
        goto swesqeqmagkicuws;
        swesqeqmagkicuws:
        $meywaqqsugaoeyys = $this->mgogaykgkoogasim();
        goto cwyaysecsakaqgew;
        kgqgcggccmiwayua:
        $gkswkiicccswksiq = $meywaqqsugaoeyys->oyeskqayoscwciem()->gwaeeegmgggawiyi("\145\x64\x69\x74\x5f\x69\x74\x65\x6d\163");
        goto kwayumouacgkgyas;
        rgaagksgsewuwgmo:
        $eqgoocgaqwqcimie = $igqsaukqcqscimok->{$ceiwsaacewygcsqg};
        goto mcmcocyuugueaeww;
        cwyaysecsakaqgew:
        $ceiwsaacewygcsqg = $meywaqqsugaoeyys->kumuygiiqswoyasy();
        goto kgqgcggccmiwayua;
        eucakkcoiiwkwsme:
        wsqeiwkgoiekwasy:
        goto iwsaaiggkciigsmc;
        kwayumouacgkgyas:
        if (!DecoratorUser::scmcyesmmikkucie($gkswkiicccswksiq)) {
            goto wsqeiwkgoiekwasy;
        }
        goto rgaagksgsewuwgmo;
        mcmcocyuugueaeww:
        echo $this->iuygowkemiiwqmiw("\143\x61\x6c\154\142\141\143\x6b", ["\x76\x61\x6c\165\x65" => $eqgoocgaqwqcimie, "\164\151\164\154\145" => __("\123\145\154\x65\143\x74\40\111\164\145\x6d\40\43\45\144", PR__CMN__FOUNDATION), "\164\145\170\x74" => __("\x26\x23\x38\x32\62\x30\73\111\164\145\155\x20\43\x25\x64\x26\x23\x38\62\x32\61\73\40\x69\163\x20\154\157\x63\x6b\x65\144", PR__CMN__FOUNDATION)], ["\143\x6c\x61\x73\163" => self::class]);
        goto eucakkcoiiwkwsme;
        iwsaaiggkciigsmc:
    }
    
    protected function get_bulk_actions() : array
    {
        goto kygccamgawookukq;
        qysmyemoucigsmua:
        $ccowyogiqwikkkie = [];
        goto kuaiscyqkgcouiye;
        qwiyicoywcekgyce:
        return (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("{$this->mgogaykgkoogasim()->miwqiiqeegeqcwis()}\137\x62\x75\154\153\x5f\141\x63\x74\151\x6f\x6e\x73"), $ccowyogiqwikkkie, $this->umaeoegyykkkqmia());
        goto tagquiiokseckkqs;
        kygccamgawookukq:
        $meywaqqsugaoeyys = $this->mgogaykgkoogasim();
        goto qysmyemoucigsmua;
        gkeymcqqsewayscs:
        agsuaimomgsoyiem:
        goto qwiyicoywcekgyce;
        ooooceiweeackgie:
        $ccowyogiqwikkkie["\144\x65\x6c\x65\164\145"] = __("\x44\145\154\145\x74\145", PR__CMN__FOUNDATION);
        goto gkeymcqqsewayscs;
        kuaiscyqkgcouiye:
        if (!$meywaqqsugaoeyys->mukyysqkgaimcygs()) {
            goto agsuaimomgsoyiem;
        }
        goto ooooceiweeackgie;
        tagquiiokseckkqs:
    }
    
    public function get_sortable_columns() : array
    {
        return (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("{$this->mgogaykgkoogasim()->miwqiiqeegeqcwis()}\x5f\x6d\x61\x6e\141\x67\145\x5f\x73\157\x72\164\x61\x62\x6c\145\x5f\x63\x6f\154\x75\x6d\x6e\163"), []);
    }
    
    protected function get_table_classes() : array
    {
        return ["\167\151\144\x65\x66\x61\164", "\x66\x69\170\145\144", "\x73\164\162\151\x70\x65\144", $this->mgogaykgkoogasim()->miwqiiqeegeqcwis()];
    }
    
    public function search_box($cmwygeyygwqaemaq, $euueacigmgoqkimu)
    {
        goto gcaykgmmmqomsyis;
        awimwukcyiceackk:
        if (!$umwqusowiqmyseom) {
            goto swuggqyiaiqywgge;
        }
        goto mugeiwyysiemwaym;
        syuywgysqyckcqay:
        if (!$sikaymiwcesagayc) {
            goto qoacckkkwsqkokye;
        }
        goto ggewkaiwwgkmkwgc;
        kkieqqwwascekcmo:
        qoacckkkwsqkokye:
        goto ycueoqkeakismiqw;
        euymeegkukskiowq:
        swuggqyiaiqywgge:
        goto cquikgykuscqmigw;
        ycueoqkeakismiqw:
        $umwqusowiqmyseom = ManipulateArray::get($icwicymcioeyeyek, "\157\162\x64\145\x72");
        goto awimwukcyiceackk;
        ggewkaiwwgkmkwgc:
        ManipulateHTML::awwqwouuoioauoaw("\151\156\160\x75\x74", ["\x74\171\160\145" => "\x68\151\144\x64\145\156", "\156\141\x6d\x65" => "\x6f\x72\x64\x65\162\x62\x61\171", "\166\141\154\x75\x65" => $sikaymiwcesagayc], true);
        goto kkieqqwwascekcmo;
        cyymeyomuakqakwo:
        ocwouquuwsaqakae:
        goto uwscegkmmumymoaq;
        mugeiwyysiemwaym:
        ManipulateHTML::awwqwouuoioauoaw("\x69\x6e\160\x75\x74", ["\164\171\160\145" => "\150\x69\144\144\145\x6e", "\x6e\x61\x6d\x65" => "\157\162\x64\x65\x72", "\166\141\x6c\x75\145" => $umwqusowiqmyseom], true);
        goto euymeegkukskiowq;
        cquikgykuscqmigw:
        echo $this->iuygowkemiiwqmiw("\163\145\141\162\143\x68\137\142\157\170", ["\151\156\x70\x75\164" => $euueacigmgoqkimu, "\x74\145\x78\x74" => $cmwygeyygwqaemaq, "\161\x75\x65\162\x79" => _admin_search_query(), "\163\x75\x62\155\x69\x74" => get_submit_button($cmwygeyygwqaemaq, "\x62\165\x74\164\157\156", false, false, ["\x49\x44" => "\163\x65\141\162\x63\150\x2d\163\x75\142\x6d\151\x74"])], ["\143\154\141\163\163" => self::class]);
        goto cyymeyomuakqakwo;
        kmseiouukkqiumum:
        $sikaymiwcesagayc = ManipulateArray::get($icwicymcioeyeyek, "\x6f\x72\x64\145\x72\x62\x79");
        goto syuywgysqyckcqay;
        gcaykgmmmqomsyis:
        if (!$this->has_items()) {
            goto ocwouquuwsaqakae;
        }
        goto yccuomocgmewkeca;
        yccuomocgmewkeca:
        $euueacigmgoqkimu = $euueacigmgoqkimu . "\55\163\145\x61\162\x63\150\55\x69\156\160\x75\x74";
        goto suiywiakesiegcwu;
        suiywiakesiegcwu:
        $icwicymcioeyeyek = $_POST;
        goto kmseiouukkqiumum;
        uwscegkmmumymoaq:
    }
    
    public function column_default($igqsaukqcqscimok, $column_name)
    {
        goto simkiasocoimioew;
        iqamwyasyoqsugeu:
        if (!($column_name === $yygmoeguaqyumuui[$awyomkauyyymugeq])) {
            goto sieykcqauaygcais;
        }
        goto uiqycwuommmmuowy;
        oqsecqsucukywaee:
        $yygmoeguaqyumuui = array_keys($wkkweuacukumqmya);
        goto iqamwyasyoqsugeu;
        wmsiqkyqsiysgcyy:
        if ($aiowsaccomcoikus instanceof DateTime) {
            goto gkwoqoeaecgkymeu;
        }
        goto ysggiwiksocomkek;
        gkuwmiusoqwesqoo:
        if ($aiowsaccomcoikus instanceof Foreign) {
            goto auaywaskqooasiuq;
        }
        goto wmsiqkyqsiysgcyy;
        omekuqkuugyocmoc:
        goto ewoqyogcaksucksk;
        goto giuswooyckooaoms;
        uogkcsaewswoaosw:
        ewoqyogcaksucksk:
        goto miqmoasmioksggkm;
        moqcomgmwiamuomq:
        if ($iwywmkygwewiamwm) {
            goto yukacyeckkwagusw;
        }
        goto omgkuuyoiugcymmy;
        ayyyeiyaosoacoqm:
        
        $aqykuigiuwmmcieu = ManipulateHTML::ciuuiyckmsygceis(ManipulateHTML::qgsekwygcgawekeq("\141", ["\x68\162\x65\x66" => $iwywmkygwewiamwm, "\143\x6c\x61\163\163" => "\162\x6f\167\55\x74\x69\x74\154\145", "\141\162\151\x61\55\154\141\x62\145\154" => sprintf(__("\x45\144\x69\164\x20\42\45\163\x22", PR__CMN__FOUNDATION), $aqykuigiuwmmcieu)], true, $aqykuigiuwmmcieu));
        goto aiwygewkmigcwusw;
        cqemkecywkkwaaii:
        $aokagokqyuysuksm = (int) $igqsaukqcqscimok->{$ceiwsaacewygcsqg};
        goto wcioaoeiiawwqqqq;
        wqieuwguumokgyqg:
        gkwoqoeaecgkymeu:
        goto aueiggyawkmkamum;
        wcioaoeiiawwqqqq:
        $aiowsaccomcoikus = $meywaqqsugaoeyys->oyeskqayoscwciem()->uqeoyqiwywwmsiew($column_name);
        goto qaikeckkiwasykwk;
        iuaeeeeggkikuiig:
        $ceiwsaacewygcsqg = $meywaqqsugaoeyys->kumuygiiqswoyasy();
        goto kmiqskugkmaiugae;
        cykaikwsaskgeemo:
        $ccowyogiqwikkkie = $this->get_bulk_actions();
        goto eqemoayymokeqaqi;
        ekmogkwmcqsykgsq:
        qgyaeoqgekocwkmw:
        goto ksoawacwkgasqgmk;
        omgkuuyoiugcymmy:
        $iwywmkygwewiamwm = $meywaqqsugaoeyys->yyykkcyiksewsoqy($aokagokqyuysuksm);
        goto kumuckkicykgwqqm;
        keewmqmgqegumiwa:
        $wkkweuacukumqmya = $this->get_columns();
        goto oqsecqsucukywaee;
        ieoiygycmseqmmgc:
        if ($aqykuigiuwmmcieu) {
            goto wgeueumgacuuuama;
        }
        goto gkuwmiusoqwesqoo;
        uiqycwuommmmuowy:
        $iwywmkygwewiamwm = $meywaqqsugaoeyys->uesweuocqoywoyms($aokagokqyuysuksm);
        goto moqcomgmwiamuomq;
        giuswooyckooaoms:
        auaywaskqooasiuq:
        goto uogkcsaewswoaosw;
        yqeqouqemksasmqc:
        return $aqykuigiuwmmcieu;
        goto wgaqkacekoyiwggi;
        aueiggyawkmkamum:
        $aqykuigiuwmmcieu = $this->seukicauekqqwwme($eqgoocgaqwqcimie, $column_name);
        goto qswqmgiwiyyqwioa;
        ksoawacwkgasqgmk:
        sieykcqauaygcais:
        goto yqeqouqemksasmqc;
        aiwygewkmigcwusw:
        
        $aqykuigiuwmmcieu .= ManipulateHTML::qgsekwygcgawekeq("\x62\x75\x74\164\x6f\156", ["\x74\171\x70\145" => "\142\165\x74\x74\157\x6e", "\143\x6c\x61\163\x73" => "\164\157\147\147\154\145\x2d\162\157\x77"], true, ManipulateHTML::qgsekwygcgawekeq("\163\x70\x61\156", ["\143\x6c\x61\163\x73" => "\x73\143\162\145\145\x6e\x2d\x72\145\141\x64\x65\162\55\164\145\170\x74"], true, __("\x53\150\157\x77\x20\x6d\x6f\162\145\40\144\145\x74\x61\x69\x6c\x73", PR__CMN__FOUNDATION)));
        goto ekmogkwmcqsykgsq;
        kmiqskugkmaiugae:
        $eqgoocgaqwqcimie = ManipulateArray::get($igqsaukqcqscimok, $column_name, '');
        goto cqemkecywkkwaaii;
        kumuckkicykgwqqm:
        yukacyeckkwagusw:
        goto sguyyaygwyikaggk;
        wkqwywgikoyqkyeg:
        goto ouaoyqugwsagkqaa;
        goto wqieuwguumokgyqg;
        ysggiwiksocomkek:
        $aqykuigiuwmmcieu = $eqgoocgaqwqcimie;
        goto wkqwywgikoyqkyeg;
        eqemoayymokeqaqi:
        $awyomkauyyymugeq = !empty($ccowyogiqwikkkie) ? 1 : 0;
        goto keewmqmgqegumiwa;
        simkiasocoimioew:
        $meywaqqsugaoeyys = $this->mgogaykgkoogasim();
        goto iuaeeeeggkikuiig;
        qswqmgiwiyyqwioa:
        ouaoyqugwsagkqaa:
        goto omekuqkuugyocmoc;
        sguyyaygwyikaggk:
        if (!$iwywmkygwewiamwm) {
            goto qgyaeoqgekocwkmw;
        }
        goto ayyyeiyaosoacoqm;
        qaikeckkiwasykwk:
        $aqykuigiuwmmcieu = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("{$meywaqqsugaoeyys->miwqiiqeegeqcwis()}\x5f\155\141\156\141\147\x65\x5f\143\x75\x73\164\157\x6d\x5f\x63\157\154\165\x6d\156"), '', $column_name, $eqgoocgaqwqcimie, $aokagokqyuysuksm, $igqsaukqcqscimok);
        goto ieoiygycmseqmmgc;
        miqmoasmioksggkm:
        wgeueumgacuuuama:
        goto cykaikwsaskgeemo;
        wgaqkacekoyiwggi:
    }
    
    public function umaeoegyykkkqmia()
    {
        goto emioyucskiowqumg;
        koiyaaokigmamqyc:
        $umwgoasiowmqcumw = $this->get_views();
        goto qiqegseqwywcmwoe;
        qiqegseqwywcmwoe:
        $eqgoocgaqwqcimie = ManipulateArray::get(array_keys($umwgoasiowmqcumw), 0, false);
        goto yosyyiksyyscacus;
        suwsiaeoumiwkiqg:
        $igaagwuyasawwqms = ManipulateArray::get($_GET, $meywaqqsugaoeyys::ORM_FILTER_BY, false);
        goto yoauoocuckogmsuw;
        jkaemsuwyyoamwim:
        $tsuauommsquiesmk = $meywaqqsugaoeyys->aakiaoueckoiyoew();
        goto suwsiaeoumiwkiqg;
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
        owiguescmqyqukui:
        
        $this->set_pagination_args(["\x70\145\x72\137\160\141\147\145" => $weyoqgcesqgeusiu, "\x74\157\x74\141\x6c\137\151\x74\145\x6d\x73" => $gmwiogsuisuoiwqu["\x70\141\147\151\156\x61\164\151\x6f\x6e"]["\x74\157\x74\141\154"], "\x74\x6f\164\141\x6c\x5f\x70\141\x67\145\x73" => $gmwiogsuisuoiwqu["\160\141\147\151\x6e\141\x74\x69\x6f\x6e"]["\x70\x61\x67\x65\x73"]]);
        goto guummoewucyeuiek;
        akyiiioycmgqyuok:
        
        $gmwiogsuisuoiwqu = $meywaqqsugaoeyys->aeggeuqycwawueqy($siykeiywomwwuoiw, [self::PAGE => $suaemuyiacqyugsm, "\146\x69\x6c\x74\145\x72\x5f\166\141\154\165\145" => false, self::PER_PAGE => $weyoqgcesqgeusiu]);
        goto ycomeuqeessamows;
        esokkakkumskkmiu:
        aymoguycgmuggcik:
        goto msiuqseowuumiwuo;
        msiuqseowuumiwuo:
        $siykeiywomwwuoiw = $this->before_pagination($siykeiywomwwuoiw);
        goto gqycmyieayoegcsy;
        sqiyuasgusgawuoi:
        $meywaqqsugaoeyys->ewkswoqykwsuckok($siykeiywomwwuoiw, $ceiwsaacewygcsqg, self::DESC);
        goto iayguaeseyaemwkk;
        guummoewucyeuiek:
        akoweomooyuwamow:
        goto mqacqosyicuiqwia;
        eogomkswkaqwyycm:
        goto akoweomooyuwamow;
        goto egiauwuekseyeaeq;
        oaociaioauummsey:
        $meywaqqsugaoeyys = $this->mgogaykgkoogasim();
        goto cueuscqkicwwicei;
        ycomeuqeessamows:
        $this->items = $gmwiogsuisuoiwqu[self::ITEMS];
        goto owiguescmqyqukui;
        egiauwuekseyeaeq:
        qayiqaykkywcyisq:
        goto euuekiyqwkowiees;
        kiewcwsykccgocuc:
        $siykeiywomwwuoiw = $meywaqqsugaoeyys->gqaysymikgeawkqa();
        goto eysuawiooiswaseq;
        iayguaeseyaemwkk:
        $siykeiywomwwuoiw = $meywaqqsugaoeyys->aaeswuecycyquqwk($siykeiywomwwuoiw, $this);
        goto akyiiioycmgqyuok;
        euuekiyqwkowiees:
        $eqgoocgaqwqcimie = $this->umaeoegyykkkqmia();
        goto assoyoeukmqiucyq;
        eysuawiooiswaseq:
        if ($siykeiywomwwuoiw) {
            goto qayiqaykkywcyisq;
        }
        goto iecqkqoiqimmisyw;
        kikkkoqiumqoeiyy:
        $aiowsaccomcoikus = $meywaqqsugaoeyys->aakiaoueckoiyoew();
        goto wyqueeskecameuks;
        gqycmyieayoegcsy:
        $ceiwsaacewygcsqg = $meywaqqsugaoeyys->kumuygiiqswoyasy();
        goto sqiyuasgusgawuoi;
        cueuscqkicwwicei:
        if ($weyoqgcesqgeusiu) {
            goto aqeyqwuywqcmuoce;
        }
        goto gcecamucuogcciig;
        wyqueeskecameuks:
        
        $siykeiywomwwuoiw->where($aiowsaccomcoikus, self::EQUAL_SYMBOL, $eqgoocgaqwqcimie);
        goto esokkakkumskkmiu;
        gcecamucuogcciig:
        
        $weyoqgcesqgeusiu = $this->get_items_per_page("\145\x64\151\164\137" . $meywaqqsugaoeyys->miwqiiqeegeqcwis() . "\x5f\x70\x65\x72\x5f\160\x61\x67\145");
        goto suscosoukqeyyqgs;
        iecqkqoiqimmisyw:
        $this->items = [];
        goto eogomkswkaqwyycm;
        suscosoukqeyyqgs:
        aqeyqwuywqcmuoce:
        goto kiewcwsykccgocuc;
        assoyoeukmqiucyq:
        if (!($eqgoocgaqwqcimie && $eqgoocgaqwqcimie !== "\141\154\x6c")) {
            goto aymoguycgmuggcik;
        }
        goto kikkkoqiumqoeiyy;
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
        ugyawwukegyoqmsq:
        mcuoyseuwoueyaie:
        goto soqkewsayowwcmco;
        ciiyqsiswkcwsocm:
        ManipulateHTML::awwqwouuoioauoaw("\144\x69\x76", ["\x63\154\141\163\163" => "\160\x72\55\x70\162\151\155\141\x72\171\55\x61\143\164\151\157\156\163"], true, $ccowyogiqwikkkie);
        goto ugyawwukegyoqmsq;
        soqkewsayowwcmco:
        parent::extra_tablenav($wcagyqamwoksawik);
        goto ukigmkeewuqomooc;
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
        gqeoaceyoiicoaec:
        $ccowyogiqwikkkie = $this->row_actions($ccowyogiqwikkkie);
        goto kkckyqmcyussauma;
        ykcmomsiayaymysm:
        $meywaqqsugaoeyys = $this->mgogaykgkoogasim();
        goto qoaawmmcqyacokws;
        uwyeycaywowwiquu:
        if (!($micmwmywmkguiyyk === $column_name)) {
            goto uugiuqkesegaamqw;
        }
        goto cwmuqmoeauqcewoy;
        msmmiaumiasmsiog:
        $ccowyogiqwikkkie["\144\x65\x6c\x65\x74\x65"] = $meywaqqsugaoeyys->rkmkouiquumiecqy($iwywmkygwewiamwm);
        goto oksqsucimimsswcg;
        cwmuqmoeauqcewoy:
        $ceiwsaacewygcsqg = $meywaqqsugaoeyys->kumuygiiqswoyasy();
        goto eiecgqokmuekaesc;
        wicuauokauykwoeu:
        wwgikwuigiiqsswq:
        goto gcecieuocqawmgci;
        ikukqooiowqywyqo:
        return $ccowyogiqwikkkie;
        goto cciakcwuweqmcose;
        qoaawmmcqyacokws:
        $ccowyogiqwikkkie = '';
        goto uwyeycaywowwiquu;
        gcecieuocqawmgci:
        if (!($iwywmkygwewiamwm = $meywaqqsugaoeyys->cgccmsewskigcuig($eqgoocgaqwqcimie))) {
            goto seyygcwcaogkmaqe;
        }
        goto msmmiaumiasmsiog;
        oksqsucimimsswcg:
        seyygcwcaogkmaqe:
        goto gqeoaceyoiicoaec;
        kkckyqmcyussauma:
        uugiuqkesegaamqw:
        goto ikukqooiowqywyqo;
        kcwgiwimgqesukqu:
        $ccowyogiqwikkkie["\145\144\x69\164"] = ManipulateHTML::uuccukgasskgimsq("\141", ["\150\162\x65\146" => $iwywmkygwewiamwm, "\x61\x72\x69\x61\x2d\x6c\141\142\145\x6c" => __("\105\x64\151\x74", PR__CMN__FOUNDATION)], __("\x45\144\151\164", PR__CMN__FOUNDATION));
        goto wicuauokauykwoeu;
        eiecgqokmuekaesc:
        $eqgoocgaqwqcimie = $igqsaukqcqscimok->{$ceiwsaacewygcsqg};
        goto ggsugekocmsukuci;
        ceosmkqgqgwsowwg:
        if (!($iwywmkygwewiamwm = $meywaqqsugaoeyys->yyykkcyiksewsoqy($eqgoocgaqwqcimie))) {
            goto wwgikwuigiiqsswq;
        }
        goto kcwgiwimgqesukqu;
        ggsugekocmsukuci:
        $ccowyogiqwikkkie = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("{$meywaqqsugaoeyys->miwqiiqeegeqcwis()}\x5f\x72\x6f\x77\x5f\141\143\164\x69\x6f\156\163"), [], $eqgoocgaqwqcimie, $this->umaeoegyykkkqmia(), $igqsaukqcqscimok);
        goto ceosmkqgqgwsowwg;
        cciakcwuweqmcose:
    }
}
