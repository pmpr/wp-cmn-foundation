<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b1e8aa0c03             |
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
        myooisakyuggoggc:
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($yyksucsgisomecgg->sacmkccceuywoqsq(true), ["\x73\x63\x72\x65\145\156" => convert_to_screen($yyksucsgisomecgg->qeeuwmmksmqiuywg())]);
        goto awkqcyusycccekwq;
        equwcsciiggsuiam:
        $this->model = $meywaqqsugaoeyys;
        goto qsaoyggkqwcgskwk;
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
        echo $this->mgogaykgkoogasim()->oyeskqayoscwciem()->uikgwcuascgeissw("\156\x6f\164\137\x66\x6f\x75\156\x64");
    }
    
    protected function get_views()
    {
        $umwgoasiowmqcumw = parent::get_views();
        return $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("{$this->mgogaykgkoogasim()->miwqiiqeegeqcwis()}\137\x6d\141\156\x61\147\x65\x5f\166\151\145\167\x73"), $umwgoasiowmqcumw);
    }
    
    public function get_columns()
    {
        goto ykogqmmywykgouqy;
        ykogqmmywykgouqy:
        $wkkweuacukumqmya = [];
        goto aqksouwmeckaqyaq;
        gmsyoscesymiwwue:
        $wkkweuacukumqmya["\143\x62"] = ManipulateHTML::qgsekwygcgawekeq("\151\156\160\x75\164", ["\x74\171\x70\x65" => "\x63\x68\x65\x63\153\142\x6f\170"]);
        goto eiicmcasqikiyasw;
        aqksouwmeckaqyaq:
        if (!$this->get_bulk_actions()) {
            goto kqwyogqqwumumiwg;
        }
        goto gmsyoscesymiwwue;
        ayucsuwsiocgycww:
        return $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("{$this->mgogaykgkoogasim()->miwqiiqeegeqcwis()}\x5f\155\141\x6e\x61\x67\145\x5f\143\x6f\x6c\165\155\x6e\x73"), $wkkweuacukumqmya);
        goto smmagoyuqoigoesc;
        eiicmcasqikiyasw:
        kqwyogqqwumumiwg:
        goto ayucsuwsiocgycww;
        smmagoyuqoigoesc:
    }
    
    public function ocimsyskieegygok()
    {
        return ManipulateServer::get("\163", '');
    }
    
    public function column_cb($igqsaukqcqscimok)
    {
        goto swesqeqmagkicuws;
        kgqgcggccmiwayua:
        $gkswkiicccswksiq = $meywaqqsugaoeyys->oyeskqayoscwciem()->gwaeeegmgggawiyi("\x65\x64\x69\x74\x5f\151\x74\145\x6d\163");
        goto kwayumouacgkgyas;
        rgaagksgsewuwgmo:
        $eqgoocgaqwqcimie = $igqsaukqcqscimok->{$ceiwsaacewygcsqg};
        goto mcmcocyuugueaeww;
        mcmcocyuugueaeww:
        echo $this->iuygowkemiiwqmiw("\143\x61\154\154\142\141\143\153", ["\x76\141\154\x75\145" => $eqgoocgaqwqcimie, "\x74\x69\x74\154\145" => __("\x53\145\x6c\145\x63\164\40\x49\164\x65\x6d\x20\43\45\x64", PR__CMN__FOUNDATION), "\164\145\170\x74" => __("\x26\43\x38\62\62\x30\73\x49\164\145\155\40\x23\x25\x64\x26\43\70\62\x32\61\x3b\x20\151\x73\40\154\x6f\143\x6b\145\144", PR__CMN__FOUNDATION)], ["\x63\x6c\x61\163\x73" => self::class]);
        goto eucakkcoiiwkwsme;
        cwyaysecsakaqgew:
        $ceiwsaacewygcsqg = $meywaqqsugaoeyys->kumuygiiqswoyasy();
        goto kgqgcggccmiwayua;
        swesqeqmagkicuws:
        $meywaqqsugaoeyys = $this->mgogaykgkoogasim();
        goto cwyaysecsakaqgew;
        kwayumouacgkgyas:
        if (!DecoratorUser::scmcyesmmikkucie($gkswkiicccswksiq)) {
            goto wsqeiwkgoiekwasy;
        }
        goto rgaagksgsewuwgmo;
        eucakkcoiiwkwsme:
        wsqeiwkgoiekwasy:
        goto iwsaaiggkciigsmc;
        iwsaaiggkciigsmc:
    }
    
    protected function get_bulk_actions() : array
    {
        goto kygccamgawookukq;
        kygccamgawookukq:
        $meywaqqsugaoeyys = $this->mgogaykgkoogasim();
        goto qysmyemoucigsmua;
        gkeymcqqsewayscs:
        agsuaimomgsoyiem:
        goto qwiyicoywcekgyce;
        ooooceiweeackgie:
        $ccowyogiqwikkkie["\144\145\x6c\x65\164\x65"] = __("\x44\x65\x6c\x65\164\x65", PR__CMN__FOUNDATION);
        goto gkeymcqqsewayscs;
        qwiyicoywcekgyce:
        return (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("{$this->mgogaykgkoogasim()->miwqiiqeegeqcwis()}\137\142\x75\x6c\x6b\137\141\x63\x74\x69\157\x6e\163"), $ccowyogiqwikkkie, $this->umaeoegyykkkqmia());
        goto tagquiiokseckkqs;
        kuaiscyqkgcouiye:
        if (!$meywaqqsugaoeyys->mukyysqkgaimcygs()) {
            goto agsuaimomgsoyiem;
        }
        goto ooooceiweeackgie;
        qysmyemoucigsmua:
        $ccowyogiqwikkkie = [];
        goto kuaiscyqkgcouiye;
        tagquiiokseckkqs:
    }
    
    public function get_sortable_columns() : array
    {
        return (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("{$this->mgogaykgkoogasim()->miwqiiqeegeqcwis()}\x5f\155\x61\x6e\x61\x67\145\x5f\x73\157\162\164\141\x62\x6c\145\x5f\x63\x6f\154\165\155\x6e\163"), []);
    }
    
    protected function get_table_classes() : array
    {
        return ["\167\151\x64\145\x66\x61\x74", "\146\x69\170\145\x64", "\x73\x74\162\151\160\145\144", $this->mgogaykgkoogasim()->miwqiiqeegeqcwis()];
    }
    
    public function search_box($cmwygeyygwqaemaq, $euueacigmgoqkimu)
    {
        goto gcaykgmmmqomsyis;
        syuywgysqyckcqay:
        if (!$sikaymiwcesagayc) {
            goto qoacckkkwsqkokye;
        }
        goto ggewkaiwwgkmkwgc;
        yccuomocgmewkeca:
        $euueacigmgoqkimu = $euueacigmgoqkimu . "\55\x73\145\141\x72\x63\x68\55\151\156\160\165\x74";
        goto suiywiakesiegcwu;
        mugeiwyysiemwaym:
        ManipulateHTML::awwqwouuoioauoaw("\x69\156\x70\165\x74", ["\164\x79\x70\x65" => "\x68\151\x64\144\x65\x6e", "\x6e\141\x6d\145" => "\157\162\x64\x65\162", "\x76\x61\x6c\x75\145" => $umwqusowiqmyseom], true);
        goto euymeegkukskiowq;
        ggewkaiwwgkmkwgc:
        ManipulateHTML::awwqwouuoioauoaw("\151\156\x70\165\164", ["\164\x79\160\x65" => "\150\151\144\x64\x65\x6e", "\156\141\155\145" => "\157\x72\144\x65\x72\142\x61\171", "\x76\x61\x6c\x75\145" => $sikaymiwcesagayc], true);
        goto kkieqqwwascekcmo;
        cquikgykuscqmigw:
        echo $this->iuygowkemiiwqmiw("\163\x65\x61\x72\x63\150\x5f\x62\x6f\x78", ["\x69\156\160\x75\x74" => $euueacigmgoqkimu, "\164\145\170\164" => $cmwygeyygwqaemaq, "\x71\x75\x65\162\171" => _admin_search_query(), "\163\165\x62\x6d\151\x74" => get_submit_button($cmwygeyygwqaemaq, "\x62\165\164\164\x6f\x6e", false, false, ["\111\104" => "\163\x65\141\x72\x63\150\x2d\163\x75\142\155\151\164"])], ["\x63\x6c\141\x73\x73" => self::class]);
        goto cyymeyomuakqakwo;
        gcaykgmmmqomsyis:
        if (!$this->has_items()) {
            goto ocwouquuwsaqakae;
        }
        goto yccuomocgmewkeca;
        ycueoqkeakismiqw:
        $umwqusowiqmyseom = ManipulateArray::get($icwicymcioeyeyek, "\x6f\x72\144\x65\x72");
        goto awimwukcyiceackk;
        kmseiouukkqiumum:
        $sikaymiwcesagayc = ManipulateArray::get($icwicymcioeyeyek, "\157\x72\144\145\x72\142\171");
        goto syuywgysqyckcqay;
        kkieqqwwascekcmo:
        qoacckkkwsqkokye:
        goto ycueoqkeakismiqw;
        euymeegkukskiowq:
        swuggqyiaiqywgge:
        goto cquikgykuscqmigw;
        awimwukcyiceackk:
        if (!$umwqusowiqmyseom) {
            goto swuggqyiaiqywgge;
        }
        goto mugeiwyysiemwaym;
        cyymeyomuakqakwo:
        ocwouquuwsaqakae:
        goto uwscegkmmumymoaq;
        suiywiakesiegcwu:
        $icwicymcioeyeyek = $_POST;
        goto kmseiouukkqiumum;
        uwscegkmmumymoaq:
    }
    
    public function column_default($igqsaukqcqscimok, $column_name)
    {
        goto simkiasocoimioew;
        ekmogkwmcqsykgsq:
        qgyaeoqgekocwkmw:
        goto ksoawacwkgasqgmk;
        wkqwywgikoyqkyeg:
        goto ouaoyqugwsagkqaa;
        goto wqieuwguumokgyqg;
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
        wqieuwguumokgyqg:
        gkwoqoeaecgkymeu:
        goto aueiggyawkmkamum;
        eqemoayymokeqaqi:
        $awyomkauyyymugeq = !empty($ccowyogiqwikkkie) ? 1 : 0;
        goto keewmqmgqegumiwa;
        iqamwyasyoqsugeu:
        if (!($column_name === $yygmoeguaqyumuui[$awyomkauyyymugeq])) {
            goto sieykcqauaygcais;
        }
        goto uiqycwuommmmuowy;
        yqeqouqemksasmqc:
        return $aqykuigiuwmmcieu;
        goto wgaqkacekoyiwggi;
        ayyyeiyaosoacoqm:
        
        $aqykuigiuwmmcieu = ManipulateHTML::ciuuiyckmsygceis(ManipulateHTML::qgsekwygcgawekeq("\141", ["\x68\x72\145\x66" => $iwywmkygwewiamwm, "\x63\x6c\141\x73\x73" => "\x72\x6f\167\x2d\164\x69\164\154\145", "\x61\x72\151\x61\x2d\x6c\141\142\145\154" => sprintf(__("\x45\144\151\164\40\x22\45\163\x22", PR__CMN__FOUNDATION), $aqykuigiuwmmcieu)], true, $aqykuigiuwmmcieu));
        goto aiwygewkmigcwusw;
        moqcomgmwiamuomq:
        if ($iwywmkygwewiamwm) {
            goto yukacyeckkwagusw;
        }
        goto omgkuuyoiugcymmy;
        aiwygewkmigcwusw:
        
        $aqykuigiuwmmcieu .= ManipulateHTML::qgsekwygcgawekeq("\x62\x75\x74\x74\x6f\156", ["\x74\171\x70\x65" => "\x62\x75\164\164\157\x6e", "\x63\x6c\x61\x73\163" => "\x74\157\147\x67\x6c\x65\55\x72\157\167"], true, ManipulateHTML::qgsekwygcgawekeq("\163\160\141\x6e", ["\x63\154\141\x73\163" => "\x73\143\162\x65\x65\x6e\x2d\x72\145\x61\x64\x65\162\55\164\145\170\164"], true, __("\123\x68\157\167\40\x6d\157\162\x65\40\x64\145\164\141\151\x6c\x73", PR__CMN__FOUNDATION)));
        goto ekmogkwmcqsykgsq;
        ysggiwiksocomkek:
        $aqykuigiuwmmcieu = $eqgoocgaqwqcimie;
        goto wkqwywgikoyqkyeg;
        cqemkecywkkwaaii:
        $aokagokqyuysuksm = (int) $igqsaukqcqscimok->{$ceiwsaacewygcsqg};
        goto wcioaoeiiawwqqqq;
        kumuckkicykgwqqm:
        yukacyeckkwagusw:
        goto sguyyaygwyikaggk;
        uogkcsaewswoaosw:
        ewoqyogcaksucksk:
        goto miqmoasmioksggkm;
        omgkuuyoiugcymmy:
        $iwywmkygwewiamwm = $meywaqqsugaoeyys->yyykkcyiksewsoqy($aokagokqyuysuksm);
        goto kumuckkicykgwqqm;
        oqsecqsucukywaee:
        $yygmoeguaqyumuui = array_keys($wkkweuacukumqmya);
        goto iqamwyasyoqsugeu;
        iuaeeeeggkikuiig:
        $ceiwsaacewygcsqg = $meywaqqsugaoeyys->kumuygiiqswoyasy();
        goto kmiqskugkmaiugae;
        wmsiqkyqsiysgcyy:
        if ($aiowsaccomcoikus instanceof DateTime) {
            goto gkwoqoeaecgkymeu;
        }
        goto ysggiwiksocomkek;
        qaikeckkiwasykwk:
        $aqykuigiuwmmcieu = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("{$meywaqqsugaoeyys->miwqiiqeegeqcwis()}\137\155\141\x6e\x61\147\145\x5f\x63\165\x73\164\x6f\155\x5f\143\157\x6c\165\x6d\x6e"), '', $column_name, $eqgoocgaqwqcimie, $aokagokqyuysuksm, $igqsaukqcqscimok);
        goto ieoiygycmseqmmgc;
        ksoawacwkgasqgmk:
        sieykcqauaygcais:
        goto yqeqouqemksasmqc;
        ieoiygycmseqmmgc:
        if ($aqykuigiuwmmcieu) {
            goto wgeueumgacuuuama;
        }
        goto gkuwmiusoqwesqoo;
        kmiqskugkmaiugae:
        $eqgoocgaqwqcimie = ManipulateArray::get($igqsaukqcqscimok, $column_name, '');
        goto cqemkecywkkwaaii;
        miqmoasmioksggkm:
        wgeueumgacuuuama:
        goto cykaikwsaskgeemo;
        cykaikwsaskgeemo:
        $ccowyogiqwikkkie = $this->get_bulk_actions();
        goto eqemoayymokeqaqi;
        keewmqmgqegumiwa:
        $wkkweuacukumqmya = $this->get_columns();
        goto oqsecqsucukywaee;
        omekuqkuugyocmoc:
        goto ewoqyogcaksucksk;
        goto giuswooyckooaoms;
        qswqmgiwiyyqwioa:
        ouaoyqugwsagkqaa:
        goto omekuqkuugyocmoc;
        aueiggyawkmkamum:
        $aqykuigiuwmmcieu = $this->seukicauekqqwwme($eqgoocgaqwqcimie, $column_name);
        goto qswqmgiwiyyqwioa;
        simkiasocoimioew:
        $meywaqqsugaoeyys = $this->mgogaykgkoogasim();
        goto iuaeeeeggkikuiig;
        uiqycwuommmmuowy:
        $iwywmkygwewiamwm = $meywaqqsugaoeyys->uesweuocqoywoyms($aokagokqyuysuksm);
        goto moqcomgmwiamuomq;
        wcioaoeiiawwqqqq:
        $aiowsaccomcoikus = $meywaqqsugaoeyys->oyeskqayoscwciem()->uqeoyqiwywwmsiew($column_name);
        goto qaikeckkiwasykwk;
        giuswooyckooaoms:
        auaywaskqooasiuq:
        goto uogkcsaewswoaosw;
        wgaqkacekoyiwggi:
    }
    
    public function umaeoegyykkkqmia()
    {
        goto emioyucskiowqumg;
        amyaoueckysgmmas:
        if (!((!$eqgoocgaqwqcimie || !$igaagwuyasawwqms) && $tsuauommsquiesmk)) {
            goto cscskwugoamcmqyu;
        }
        goto koiyaaokigmamqyc;
        suwsiaeoumiwkiqg:
        $igaagwuyasawwqms = ManipulateArray::get($_GET, $meywaqqsugaoeyys::ORM_FILTER_BY, false);
        goto yoauoocuckogmsuw;
        koiyaaokigmamqyc:
        $umwgoasiowmqcumw = $this->get_views();
        goto qiqegseqwywcmwoe;
        jkaemsuwyyoamwim:
        $tsuauommsquiesmk = $meywaqqsugaoeyys->aakiaoueckoiyoew();
        goto suwsiaeoumiwkiqg;
        kwcscewawgicomok:
        return $eqgoocgaqwqcimie;
        goto kikkkocywiyuyuqw;
        qiqegseqwywcmwoe:
        $eqgoocgaqwqcimie = ManipulateArray::get(array_keys($umwgoasiowmqcumw), 0, false);
        goto yosyyiksyyscacus;
        emioyucskiowqumg:
        $meywaqqsugaoeyys = $this->mgogaykgkoogasim();
        goto jkaemsuwyyoamwim;
        yoauoocuckogmsuw:
        $eqgoocgaqwqcimie = ManipulateArray::get($_GET, $meywaqqsugaoeyys::ORM_FILTER_VALUE, false);
        goto amyaoueckysgmmas;
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
        cueuscqkicwwicei:
        if ($weyoqgcesqgeusiu) {
            goto aqeyqwuywqcmuoce;
        }
        goto gcecamucuogcciig;
        assoyoeukmqiucyq:
        if (!($eqgoocgaqwqcimie && $eqgoocgaqwqcimie !== "\x61\154\x6c")) {
            goto aymoguycgmuggcik;
        }
        goto kikkkoqiumqoeiyy;
        gqycmyieayoegcsy:
        $ceiwsaacewygcsqg = $meywaqqsugaoeyys->kumuygiiqswoyasy();
        goto sqiyuasgusgawuoi;
        kiewcwsykccgocuc:
        $siykeiywomwwuoiw = $meywaqqsugaoeyys->gqaysymikgeawkqa();
        goto eysuawiooiswaseq;
        ycomeuqeessamows:
        $this->items = $gmwiogsuisuoiwqu[self::ITEMS];
        goto owiguescmqyqukui;
        egiauwuekseyeaeq:
        qayiqaykkywcyisq:
        goto euuekiyqwkowiees;
        eysuawiooiswaseq:
        if ($siykeiywomwwuoiw) {
            goto qayiqaykkywcyisq;
        }
        goto iecqkqoiqimmisyw;
        guummoewucyeuiek:
        akoweomooyuwamow:
        goto mqacqosyicuiqwia;
        iayguaeseyaemwkk:
        $siykeiywomwwuoiw = $meywaqqsugaoeyys->aaeswuecycyquqwk($siykeiywomwwuoiw, $this);
        goto akyiiioycmgqyuok;
        euuekiyqwkowiees:
        $eqgoocgaqwqcimie = $this->umaeoegyykkkqmia();
        goto assoyoeukmqiucyq;
        wyqueeskecameuks:
        
        $siykeiywomwwuoiw->where($aiowsaccomcoikus, self::EQUAL_SYMBOL, $eqgoocgaqwqcimie);
        goto esokkakkumskkmiu;
        kikkkoqiumqoeiyy:
        $aiowsaccomcoikus = $meywaqqsugaoeyys->aakiaoueckoiyoew();
        goto wyqueeskecameuks;
        oaociaioauummsey:
        $meywaqqsugaoeyys = $this->mgogaykgkoogasim();
        goto cueuscqkicwwicei;
        sqiyuasgusgawuoi:
        $meywaqqsugaoeyys->ewkswoqykwsuckok($siykeiywomwwuoiw, $ceiwsaacewygcsqg, self::DESC);
        goto iayguaeseyaemwkk;
        msiuqseowuumiwuo:
        $siykeiywomwwuoiw = $this->before_pagination($siykeiywomwwuoiw);
        goto gqycmyieayoegcsy;
        akyiiioycmgqyuok:
        
        $gmwiogsuisuoiwqu = $meywaqqsugaoeyys->aeggeuqycwawueqy($siykeiywomwwuoiw, [self::PAGE => $suaemuyiacqyugsm, "\x66\x69\154\x74\145\162\137\166\x61\x6c\165\145" => false, self::PER_PAGE => $weyoqgcesqgeusiu]);
        goto ycomeuqeessamows;
        esokkakkumskkmiu:
        aymoguycgmuggcik:
        goto msiuqseowuumiwuo;
        eogomkswkaqwyycm:
        goto akoweomooyuwamow;
        goto egiauwuekseyeaeq;
        suscosoukqeyyqgs:
        aqeyqwuywqcmuoce:
        goto kiewcwsykccgocuc;
        owiguescmqyqukui:
        
        $this->set_pagination_args(["\x70\x65\x72\x5f\160\x61\147\145" => $weyoqgcesqgeusiu, "\x74\157\164\x61\x6c\x5f\151\164\145\155\x73" => $gmwiogsuisuoiwqu["\164\x6f\164\x61\x6c"], "\x74\x6f\164\141\154\137\160\x61\147\145\163" => $gmwiogsuisuoiwqu["\160\x61\x67\x65\x73"]]);
        goto guummoewucyeuiek;
        gcecamucuogcciig:
        
        $weyoqgcesqgeusiu = $this->get_items_per_page("\145\x64\151\x74\x5f" . $meywaqqsugaoeyys->miwqiiqeegeqcwis() . "\137\x70\x65\x72\137\160\x61\147\145");
        goto suscosoukqeyyqgs;
        iecqkqoiqimmisyw:
        $this->items = [];
        goto eogomkswkaqwyycm;
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
        ciiyqsiswkcwsocm:
        ManipulateHTML::awwqwouuoioauoaw("\144\151\166", ["\143\x6c\141\163\163" => "\x70\x72\x2d\x70\162\151\x6d\x61\x72\171\55\x61\x63\164\151\x6f\x6e\x73"], true, $ccowyogiqwikkkie);
        goto ugyawwukegyoqmsq;
        ieoeeyieoskuyiyw:
        if (!$ccowyogiqwikkkie) {
            goto mcuoyseuwoueyaie;
        }
        goto ciiyqsiswkcwsocm;
        ugyawwukegyoqmsq:
        mcuoyseuwoueyaie:
        goto soqkewsayowwcmco;
        kwowggaooiyqawyq:
        $ccowyogiqwikkkie = $this->sokuygywyckaocci();
        goto ieoeeyieoskuyiyw;
        ukigmkeewuqomooc:
    }
    
    protected function handle_row_actions($igqsaukqcqscimok, $column_name, $micmwmywmkguiyyk) : string
    {
        goto ykcmomsiayaymysm;
        kcwgiwimgqesukqu:
        $ccowyogiqwikkkie["\x65\x64\x69\x74"] = ManipulateHTML::uuccukgasskgimsq("\141", ["\x68\x72\x65\146" => $iwywmkygwewiamwm, "\141\162\151\x61\x2d\x6c\x61\142\145\x6c" => __("\x45\144\x69\x74", PR__CMN__FOUNDATION)], __("\105\x64\x69\x74", PR__CMN__FOUNDATION));
        goto wicuauokauykwoeu;
        msmmiaumiasmsiog:
        $ccowyogiqwikkkie["\x64\145\154\x65\x74\145"] = $meywaqqsugaoeyys->rkmkouiquumiecqy($iwywmkygwewiamwm);
        goto oksqsucimimsswcg;
        gcecieuocqawmgci:
        if (!($iwywmkygwewiamwm = $meywaqqsugaoeyys->cgccmsewskigcuig($eqgoocgaqwqcimie))) {
            goto seyygcwcaogkmaqe;
        }
        goto msmmiaumiasmsiog;
        ykcmomsiayaymysm:
        $meywaqqsugaoeyys = $this->mgogaykgkoogasim();
        goto qoaawmmcqyacokws;
        eiecgqokmuekaesc:
        $eqgoocgaqwqcimie = $igqsaukqcqscimok->{$ceiwsaacewygcsqg};
        goto ggsugekocmsukuci;
        qoaawmmcqyacokws:
        $ccowyogiqwikkkie = '';
        goto uwyeycaywowwiquu;
        kkckyqmcyussauma:
        uugiuqkesegaamqw:
        goto ikukqooiowqywyqo;
        uwyeycaywowwiquu:
        if (!($micmwmywmkguiyyk === $column_name)) {
            goto uugiuqkesegaamqw;
        }
        goto cwmuqmoeauqcewoy;
        ceosmkqgqgwsowwg:
        if (!($iwywmkygwewiamwm = $meywaqqsugaoeyys->yyykkcyiksewsoqy($eqgoocgaqwqcimie))) {
            goto wwgikwuigiiqsswq;
        }
        goto kcwgiwimgqesukqu;
        gqeoaceyoiicoaec:
        $ccowyogiqwikkkie = $this->row_actions($ccowyogiqwikkkie);
        goto kkckyqmcyussauma;
        oksqsucimimsswcg:
        seyygcwcaogkmaqe:
        goto gqeoaceyoiicoaec;
        wicuauokauykwoeu:
        wwgikwuigiiqsswq:
        goto gcecieuocqawmgci;
        cwmuqmoeauqcewoy:
        $ceiwsaacewygcsqg = $meywaqqsugaoeyys->kumuygiiqswoyasy();
        goto eiecgqokmuekaesc;
        ikukqooiowqywyqo:
        return $ccowyogiqwikkkie;
        goto cciakcwuweqmcose;
        ggsugekocmsukuci:
        $ccowyogiqwikkkie = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("{$meywaqqsugaoeyys->miwqiiqeegeqcwis()}\x5f\162\x6f\x77\137\141\143\164\x69\x6f\x6e\163"), [], $eqgoocgaqwqcimie, $this->umaeoegyykkkqmia(), $igqsaukqcqscimok);
        goto ceosmkqgqgwsowwg;
        cciakcwuweqmcose:
    }
}
