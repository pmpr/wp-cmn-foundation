<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b30261f503             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Process;

use Pmpr\Common\Foundation\Decorator\DecoratorCron;
use Pmpr\Common\Foundation\Manipulate\ManipulateAjax;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;
use stdClass;

abstract class Background extends Async
{
    const IDENTIFIER_POSTFIX = "\137\x62\x61\164\x63\x68\x5f";
    
    protected int $startTime = 0;
    
    protected ?string $cronHookIdentifier = '';
    
    protected ?string $cronIntervalIdentifier = '';
    
    protected ?string $action = "\x62\141\143\x6b\x67\x72\x6f\165\156\144\137\x70\162\x6f\x63\145\x73\163";
    public function wigskegsqequoeks()
    {
        goto gsmyumksyakiggcm;
        uckkymmemmicgwig:
        $this->cronIntervalIdentifier = "{$this->eiswegiqykyigwig()}\137\143\x72\157\156\x5f\151\x6e\164\145\x72\166\141\154";
        goto ogqewmmmiykuksem;
        ogqewmmmiykuksem:
        $this->qcsmikeggeemccuu($this->swyooakuoqwwiiws(), [$this, "\x67\171\x71\171\x77\153\x6f\141\x75\x6f\x6d\x65\161\x69\163\x65"]);
        goto wcygoekisgskgwiy;
        wcygoekisgskgwiy:
        parent::wigskegsqequoeks();
        goto vskouskskegecgwa;
        gsmyumksyakiggcm:
        
        $this->cronHookIdentifier = "{$this->eiswegiqykyigwig()}\x5f\x63\x72\x6f\156";
        goto uckkymmemmicgwig;
        vskouskskegecgwa:
    }
    public function kgquecmsgcouyaya()
    {
        $this->cecaguuoecmccuse("\143\x72\157\x6e\137\x73\143\150\x65\x64\x75\154\x65\x73", [$this, "\x73\x79\x79\x69\x6f\153\157\155\165\x73\x67\145\171\153\x77\165"]);
        parent::kgquecmsgcouyaya();
    }
    
    public function yuqoqckgwkaqucqk() : int
    {
        return $this->startTime;
    }
    
    public function swyooakuoqwwiiws() : ?string
    {
        return $this->cronHookIdentifier;
    }
    
    public function kmaaqwymiwaikeyi() : ?string
    {
        return $this->cronIntervalIdentifier;
    }
    
    public function ieyosyaaisyquesq()
    {
        
        $this->uwugaiqywmseksqm();
        
        return parent::ieyosyaaisyquesq();
    }
    
    public function mykuoqakuiwsoiss($icwicymcioeyeyek)
    {
        $this->data[] = $icwicymcioeyeyek;
        return $this;
    }
    
    public function save()
    {
        goto oeyyggkauuucqwgo;
        umsskuauuckkimsm:
        return $this;
        goto kiqmqoqcmswwwmug;
        oeyyggkauuucqwgo:
        if (!$this->seyyiqmgwymyumoq()) {
            goto ocsiqemkuomayusk;
        }
        goto imsqgqomukkegqka;
        imsqgqomukkegqka:
        update_site_option($this->gykguuqikwcyouws(), $this->seyyiqmgwymyumoq());
        goto ysequocgiooyuosk;
        ysequocgiooyuosk:
        ocsiqemkuomayusk:
        goto umsskuauuckkimsm;
        kiqmqoqcmswwwmug:
    }
    
    public function update(string $uusmaiomayssaecw, array $icwicymcioeyeyek = [])
    {
        goto cigmikkigagaoism;
        sssomqswysysigko:
        update_site_option($uusmaiomayssaecw, $icwicymcioeyeyek);
        goto cyommmwuyyyiqsaa;
        icuukaaeuwwgoymw:
        return $this;
        goto uimsyaquwymkcaao;
        cigmikkigagaoism:
        if (!$icwicymcioeyeyek) {
            goto qkcoaggwwskkqggy;
        }
        goto sssomqswysysigko;
        cyommmwuyyyiqsaa:
        qkcoaggwwskkqggy:
        goto icuukaaeuwwgoymw;
        uimsyaquwymkcaao:
    }
    
    public function delete(string $uusmaiomayssaecw)
    {
        delete_site_option($uusmaiomayssaecw);
        return $this;
    }
    
    protected function gykguuqikwcyouws($ykiwomimkkuiigoq = 64)
    {
        goto msakgmkaaosagcgc;
        ocwgmoemmmqwwmoi:
        $mwweeceqggqmogwk = $this->eiswegiqykyigwig() . self::IDENTIFIER_POSTFIX;
        goto yqkqmmeaasceaaui;
        yqkqmmeaasceaaui:
        return substr($mwweeceqggqmogwk . $omasqoksqewuwwkq, 0, $ykiwomimkkuiigoq);
        goto xamgygckoocqmyae;
        msakgmkaaosagcgc:
        $omasqoksqewuwwkq = md5(microtime() . rand());
        goto ocwgmoemmmqwwmoi;
        xamgygckoocqmyae:
    }
    
    public function aqskqeakoauwowwm()
    {
        goto yacemkmocmaamgui;
        gkumkcqesowgysme:
        qgqmieaieecsksyo:
        goto yqwaggyckkquggqs;
        yqwaggyckkquggqs:
        wp_die();
        goto eeqmaiqacegskmae;
        ccoyciugiugeaqea:
        if (!$this->yyqyaigucmaueykw()) {
            goto qaqkcsmkgkuieoqq;
        }
        goto cyemeggkueyokkym;
        yacemkmocmaamgui:
        
        session_write_close();
        goto ccoyciugiugeaqea;
        squwcqweceecssck:
        if (!ManipulateAjax::wqsmsuyggkkyyocc($this->eiswegiqykyigwig(), "\156\x6f\156\x63\145")) {
            goto qgqmieaieecsksyo;
        }
        goto kuouoyaeougsusic;
        kuouoyaeougsusic:
        $this->handle();
        goto gkumkcqesowgysme;
        uqcmqacyoyegyica:
        
        wp_die();
        goto rweicwousieukigk;
        kooyawcskwoagaqi:
        if (!$this->uuqwmkuaqimkcmei()) {
            goto mwegucqywugusieu;
        }
        goto uqcmqacyoyegyica;
        cyemeggkueyokkym:
        
        wp_die();
        goto yogaoogoakmaggii;
        yogaoogoakmaggii:
        qaqkcsmkgkuieoqq:
        goto kooyawcskwoagaqi;
        rweicwousieukigk:
        mwegucqywugusieu:
        goto squwcqweceecssck;
        eeqmaiqacegskmae:
    }
    
    protected function uuqwmkuaqimkcmei()
    {
        goto saagquesokaackwy;
        gqwoewuysuocgwku:
        $uusmaiomayssaecw = $wpdb->esc_like($this->eiswegiqykyigwig() . self::IDENTIFIER_POSTFIX) . "\45";
        goto ummccggkuwqiqieu;
        qcaceeoqgiwmegia:
        ysawmmcgoceiuqmg:
        goto gqwoewuysuocgwku;
        ummccggkuwqiqieu:
        $gaeqamemwmwsyukm = $wpdb->get_var($wpdb->prepare("\123\x45\x4c\105\x43\124\40\x43\x4f\125\116\x54\50\52\51\40\106\122\117\x4d\x20{$aasascamegmwqmqk}\40\x57\110\105\x52\x45\x20{$qgoqiacsiccwoawi}\40\x4c\111\113\105\40\45\163", $uusmaiomayssaecw));
        goto qyssyuwuywoyqwso;
        saiswigiqcyqmgmm:
        if (!is_multisite()) {
            goto ysawmmcgoceiuqmg;
        }
        goto yekkkcaukiossquk;
        ismmcscmkqogkwyo:
        $qgoqiacsiccwoawi = "\x6f\160\164\151\157\156\137\x6e\x61\x6d\x65";
        goto saiswigiqcyqmgmm;
        yekkkcaukiossquk:
        $aasascamegmwqmqk = $wpdb->sitemeta;
        goto qckqqkmgqmyoouuw;
        qckqqkmgqmyoouuw:
        $qgoqiacsiccwoawi = "\155\x65\164\x61\137\x6b\x65\171";
        goto qcaceeoqgiwmegia;
        qyssyuwuywoyqwso:
        return $gaeqamemwmwsyukm > 0 ? false : true;
        goto qoogiceokacewciw;
        aqgeugceemmqaemu:
        $aasascamegmwqmqk = $wpdb->options;
        goto ismmcscmkqogkwyo;
        saagquesokaackwy:
        global $wpdb;
        goto aqgeugceemmqaemu;
        qoogiceokacewciw:
    }
    
    public function yyqyaigucmaueykw()
    {
        return get_site_transient("{$this->eiswegiqykyigwig()}\137\160\162\x6f\x63\145\x73\163\x5f\154\157\143\x6b");
    }
    
    public function aegawcwekgqycoig()
    {
        goto lsggiimkmcoccyqa;
        iskmaskwiwguswym:
        
        $owmuuoycwiskaeme = method_exists($this, "\x6b\143\x6b\x69\161\x6f\x67\x65\155\155\x69\161\161\x71\145\x6b") ? $this->kckiqogemmiqqqek() : 60;
        goto wyysmocawoaemiew;
        oumecckuoogcisam:
        set_site_transient("{$this->eiswegiqykyigwig()}\x5f\160\162\157\x63\145\163\x73\137\154\x6f\143\153", microtime(), $owmuuoycwiskaeme);
        goto isekoekueuaeuaew;
        wyysmocawoaemiew:
        $owmuuoycwiskaeme = $this->sscegwueamckwmcy("{$this->eiswegiqykyigwig()}\137\161\165\x65\x75\x65\137\x6c\x6f\x63\153\x5f\164\x69\155\x65", $owmuuoycwiskaeme);
        goto oumecckuoogcisam;
        lsggiimkmcoccyqa:
        $this->startTime = time();
        goto iskmaskwiwguswym;
        isekoekueuaeuaew:
    }
    
    public function ycuqagwqkwuuyagc() : Background
    {
        delete_site_transient("{$this->eiswegiqykyigwig()}\137\160\162\157\143\145\163\163\137\x6c\x6f\x63\153");
        return $this;
    }
    
    protected function kycesesquyayogwg()
    {
        goto kuquukieoauysqes;
        iyowacasiugcygyy:
        if (!is_multisite()) {
            goto queymekwsgcuckek;
        }
        goto awiysoiaoiuokgwu;
        kuquukieoauysqes:
        global $wpdb;
        goto kwusgqycuoswqwqs;
        egqmoeqagueyiqug:
        $qgoqiacsiccwoawi = "\x6f\x70\x74\151\x6f\x6e\x5f\156\141\x6d\145";
        goto ukysouqeuaqacccc;
        smgiescoeygeokka:
        $owuckwsseckgeweg = new stdClass();
        goto meiqskieagikegyk;
        eegcsakukykecaqs:
        $uusmaiomayssaecw = $wpdb->esc_like($this->eiswegiqykyigwig() . self::IDENTIFIER_POSTFIX) . "\x25";
        goto oycqqwgueqayoiqs;
        aiymqumesmissmcg:
        queymekwsgcuckek:
        goto eegcsakukykecaqs;
        egmogkeseuwqokei:
        return $owuckwsseckgeweg;
        goto cuiegucyaegqkyuq;
        ugkggeccqcqagaas:
        $owuckwsseckgeweg->data = maybe_unserialize($gqgemcmoicmgaqie->{$qmiicscguaqeiiow});
        goto egmogkeseuwqokei;
        awiysoiaoiuokgwu:
        $aasascamegmwqmqk = $wpdb->sitemeta;
        goto skcckgmwseumsiom;
        oycqqwgueqayoiqs:
        $gqgemcmoicmgaqie = $wpdb->get_row($wpdb->prepare("\123\105\114\x45\103\x54\40\x2a\40\106\x52\x4f\115\x20{$aasascamegmwqmqk}\x20\x57\x48\x45\122\x45\40{$qgoqiacsiccwoawi}\x20\114\111\113\x45\x20\45\x73\40\117\x52\104\105\x52\x20\x42\x59\x20{$ssemgewueawkmcqw}\40\101\x53\x43\40\114\x49\115\111\x54\x20\x31", $uusmaiomayssaecw));
        goto smgiescoeygeokka;
        skcckgmwseumsiom:
        $qgoqiacsiccwoawi = "\155\x65\164\141\137\153\145\171";
        goto iigwwgoaiogqysey;
        cgakgqageuiwqsyk:
        $qmiicscguaqeiiow = "\x6f\160\164\151\157\156\x5f\166\x61\x6c\x75\x65";
        goto iyowacasiugcygyy;
        iigwwgoaiogqysey:
        $ssemgewueawkmcqw = "\x6d\145\164\141\137\151\144";
        goto aceaseasgiukkmog;
        aceaseasgiukkmog:
        $qmiicscguaqeiiow = "\155\145\x74\x61\x5f\166\x61\x6c\x75\145";
        goto aiymqumesmissmcg;
        ukysouqeuaqacccc:
        $ssemgewueawkmcqw = "\x6f\x70\x74\151\157\156\x5f\x69\x64";
        goto cgakgqageuiwqsyk;
        meiqskieagikegyk:
        $owuckwsseckgeweg->key = $gqgemcmoicmgaqie->{$qgoqiacsiccwoawi};
        goto ugkggeccqcqagaas;
        kwusgqycuoswqwqs:
        $aasascamegmwqmqk = $wpdb->options;
        goto egqmoeqagueyiqug;
        cuiegucyaegqkyuq:
    }
    
    protected function handle()
    {
        goto kcyqucscowsueeys;
        kqmgsgoqugmkumkw:
        qcuwkgcsoeeaakoi:
        goto skoaamakmkeyeeso;
        weciqsgukwuccsqo:
        $this->ieyosyaaisyquesq();
        goto esumogyswyyqekek;
        ioyaceieouqueusq:
        goto qqmiwgcqgccgqsyg;
        goto kgawaeyumcuuciqw;
        kqoqowksykgissie:
        wuqywqumeskyygok:
        goto wugiyayiwyqyqyse;
        wugiyayiwyqyqyse:
        
        if ($owuckwsseckgeweg->data) {
            goto isgegieeaowwoykm;
        }
        goto meiuukwequycmqog;
        gamsaysmouyaiqga:
        equwmukmuisgcwgg:
        goto aygsuymqoyigcwse;
        cacogygqoikeooyg:
        $this->update($owuckwsseckgeweg->key, $owuckwsseckgeweg->data);
        goto eymcqqymeqcwgqea;
        yeuioyeiyuwqkayk:
        emciiyeqsikycqqa:
        goto ckycsaeqqguawwwi;
        maiioecwmocoiggy:
        
        if ($this->uuqwmkuaqimkcmei()) {
            goto qcuwkgcsoeeaakoi;
        }
        goto weciqsgukwuccsqo;
        aqosuiskiicyymim:
        wp_die();
        goto asgkgckgcgaowmqc;
        oyewocgsmcoqokek:
        if (!$this->egmyoaiiswagkkuw() && !$this->wscswagsquiyigao() && !$this->uuqwmkuaqimkcmei()) {
            goto equwmukmuisgcwgg;
        }
        goto yeuioyeiyuwqkayk;
        kgawaeyumcuuciqw:
        isgegieeaowwoykm:
        goto cacogygqoikeooyg;
        kcyqucscowsueeys:
        $this->aegawcwekgqycoig();
        goto gamsaysmouyaiqga;
        esumogyswyyqekek:
        goto qemwgosogkieccqo;
        goto kqmgsgoqugmkumkw;
        skoaamakmkeyeeso:
        $this->yuqksmouoaowioyi();
        goto yqacwcwwaqymeiwe;
        aygsuymqoyigcwse:
        $owuckwsseckgeweg = $this->kycesesquyayogwg();
        goto mqiagimaakecsmqe;
        yqacwcwwaqymeiwe:
        qemwgosogkieccqo:
        goto aqosuiskiicyymim;
        meiuukwequycmqog:
        $this->delete($owuckwsseckgeweg->key);
        goto ioyaceieouqueusq;
        eymcqqymeqcwgqea:
        qqmiwgcqgccgqsyg:
        goto oyewocgsmcoqokek;
        ckycsaeqqguawwwi:
        $this->ycuqagwqkwuuyagc();
        goto maiioecwmocoiggy;
        mqiagimaakecsmqe:
        foreach ($owuckwsseckgeweg->data as $uusmaiomayssaecw => $eqgoocgaqwqcimie) {
            goto qyyuoqgmcmamwmyk;
            cgqyoogsouswccci:
            goto wuqywqumeskyygok;
            goto hymewosaaisgikci;
            iqaieccaegoeggii:
            if (!($this->egmyoaiiswagkkuw() || $this->wscswagsquiyigao())) {
                goto iiykaqkywwwcaccq;
            }
            goto cgqyoogsouswccci;
            iwqueooewwgeioyq:
            if (false !== $siyykeyqqywuequu) {
                goto kswocgwqsymwqyqa;
            }
            goto sqscykoomqwyaweu;
            yyykasuqssggyosq:
            kswocgwqsymwqyqa:
            goto acmweeyugmqqyokk;
            ucakoqesgoskmmmm:
            goto yekkgsqqsgmkgmms;
            goto yyykasuqssggyosq;
            qyyuoqgmcmamwmyk:
            $siyykeyqqywuequu = $this->siyykeyqqywuequu($eqgoocgaqwqcimie);
            goto iwqueooewwgeioyq;
            sqscykoomqwyaweu:
            ManipulateArray::unset($owuckwsseckgeweg->data, $uusmaiomayssaecw);
            goto ucakoqesgoskmmmm;
            emggyucsukgwkcgc:
            yekkgsqqsgmkgmms:
            goto iqaieccaegoeggii;
            cakagawwksoawgcm:
            ckmeygmuimmiegqs:
            goto uqkuemgmsakoywag;
            acmweeyugmqqyokk:
            $owuckwsseckgeweg->data[$uusmaiomayssaecw] = $siyykeyqqywuequu;
            goto emggyucsukgwkcgc;
            hymewosaaisgikci:
            iiykaqkywwwcaccq:
            goto cakagawwksoawgcm;
            uqkuemgmsakoywag:
        }
        goto kqoqowksykgissie;
        asgkgckgcgaowmqc:
    }
    
    protected function wscswagsquiyigao()
    {
        goto aeyiikqmacugigig;
        ewaaoqsacsuaskso:
        woamusawsweikowo:
        goto ekumegaekiouaqau;
        ccqauscokygeseqg:
        
        $iquygkkomwmwiuqy = memory_get_usage(true);
        goto ooymsigkiymussmk;
        aeyiikqmacugigig:
        $ksaameoqigiaoigg = false;
        goto umcgeowmcyakagce;
        umcgeowmcyakagce:
        $kykimuycmcucisac = $this->psweseawgksmugec() * 0.9;
        goto ccqauscokygeseqg;
        ekumegaekiouaqau:
        return $this->sscegwueamckwmcy("{$this->eiswegiqykyigwig()}\x5f\x6d\x65\x6d\x6f\162\171\137\x65\x78\x63\x65\x65\144\x65\x64", $ksaameoqigiaoigg);
        goto mgyysecwqceoeqkc;
        ooymsigkiymussmk:
        if (!($iquygkkomwmwiuqy >= $kykimuycmcucisac)) {
            goto woamusawsweikowo;
        }
        goto oagugomioiouugkg;
        oagugomioiouugkg:
        $ksaameoqigiaoigg = true;
        goto ewaaoqsacsuaskso;
        mgyysecwqceoeqkc:
    }
    
    protected function psweseawgksmugec()
    {
        goto coaoysumumkmugqe;
        yauqoemesamemoog:
        
        $kykimuycmcucisac = "\x33\x32\x30\60\60\x4d";
        goto gsukkgwiogagoeym;
        uwoeomuksucugygo:
        $kykimuycmcucisac = ini_get("\155\x65\x6d\157\162\171\x5f\x6c\151\155\151\164");
        goto wwwykymsssmcmkii;
        qkqgiqqqauueicmg:
        return intval($kykimuycmcucisac) * 1024 * 1024;
        goto iweywcmciioqsoka;
        wwwykymsssmcmkii:
        wiwmyyqikeackcgi:
        goto gegewgiwkgmmocua;
        gegewgiwkgmmocua:
        if (!(!$kykimuycmcucisac || -1 === intval($kykimuycmcucisac))) {
            goto mqicqmuiucsiwyyu;
        }
        goto yauqoemesamemoog;
        symeoeugigmiwkss:
        
        $kykimuycmcucisac = "\61\x32\70\115";
        goto wwkmcacgmyaswsaw;
        wwkmcacgmyaswsaw:
        goto wiwmyyqikeackcgi;
        goto sgueqceaumcqumye;
        coaoysumumkmugqe:
        if (function_exists("\151\156\x69\137\x67\x65\164")) {
            goto kaiwcqcgoqgoqmuy;
        }
        goto symeoeugigmiwkss;
        gsukkgwiogagoeym:
        mqicqmuiucsiwyyu:
        goto qkqgiqqqauueicmg;
        sgueqceaumcqumye:
        kaiwcqcgoqgoqmuy:
        goto uwoeomuksucugygo;
        iweywcmciioqsoka:
    }
    
    protected function egmyoaiiswagkkuw()
    {
        goto gcgokiaeqcqsqogw;
        aqwqycaysagwiesw:
        $ksaameoqigiaoigg = true;
        goto iqyaayumigaguyks;
        gcgokiaeqcqsqogw:
        $eyyawusiwecymiug = $this->yuqoqckgwkaqucqk() + $this->sscegwueamckwmcy("{$this->eiswegiqykyigwig()}\x5f\x64\x65\x66\141\165\x6c\164\137\x74\x69\x6d\145\x5f\x6c\x69\155\x69\x74", 20);
        goto myymosmuygkiwagm;
        cyaiikokmuyugiow:
        if (!(time() >= $eyyawusiwecymiug)) {
            goto cwkqmgykgysmgiyq;
        }
        goto aqwqycaysagwiesw;
        myymosmuygkiwagm:
        
        $ksaameoqigiaoigg = false;
        goto cyaiikokmuyugiow;
        gcmmwomegsoosqgw:
        return $this->sscegwueamckwmcy("{$this->eiswegiqykyigwig()}\x5f\x74\151\155\145\x5f\145\x78\x63\x65\145\x64\x65\x64", $ksaameoqigiaoigg);
        goto ewskyikcqksaoqui;
        iqyaayumigaguyks:
        cwkqmgykgysmgiyq:
        goto gcmmwomegsoosqgw;
        ewskyikcqksaoqui:
    }
    
    protected function yuqksmouoaowioyi()
    {
        
        $this->eqcmmyoimqigequa();
    }
    
    public function syyiokomusgeykwu($immuisiomomksweo)
    {
        goto ywwagicseyckmgoc;
        iywakcgekyskmwyq:
        if (!method_exists($this, "\x79\x71\x75\157\x67\165\147\x79\x71\x67\147\151\x73\147\x69\157")) {
            goto iugwuicgyyakcoas;
        }
        goto mcaowagyicymmeca;
        mcaowagyicymmeca:
        $ycooswiwewekokei = $this->sscegwueamckwmcy($this->eiswegiqykyigwig() . "\x5f\143\x72\x6f\156\x5f\151\156\x74\145\162\x76\141\x6c", $this->yquogugyqggisgio());
        goto smaosqyeiqocuoqc;
        ackekiywiuwuswcg:
        return $immuisiomomksweo;
        goto owssoyiioasuoiwy;
        smaosqyeiqocuoqc:
        iugwuicgyyakcoas:
        goto eowukugguiywsoyq;
        ywwagicseyckmgoc:
        $ycooswiwewekokei = $this->sscegwueamckwmcy($this->eiswegiqykyigwig() . "\137\143\162\x6f\x6e\137\x69\x6e\x74\x65\x72\x76\x61\154", 5);
        goto iywakcgekyskmwyq;
        eowukugguiywsoyq:
        
        $immuisiomomksweo["{$this->eiswegiqykyigwig()}\x5f\x63\162\x6f\156\x5f\x69\x6e\164\145\x72\x76\141\154"] = ["\x69\x6e\x74\145\x72\166\141\x6c" => MINUTE_IN_SECONDS * $ycooswiwewekokei, "\144\x69\163\x70\x6c\141\171" => sprintf(__("\x45\x76\x65\x72\x79\40\45\x64\x20\x4d\151\x6e\x75\164\145\163"), $ycooswiwewekokei)];
        goto ackekiywiuwuswcg;
        owssoyiioasuoiwy:
    }
    
    public function gyqywkoauomeqise()
    {
        goto saugggiieycqisoo;
        ocmeugiacmiquqme:
        cisygcmgeoiywmus:
        goto uqwywgiauqaiimwa;
        iakkmkweqaagekgo:
        $this->handle();
        goto uwgmiksaegmqceyk;
        saugggiieycqisoo:
        if (!$this->yyqyaigucmaueykw()) {
            goto cisygcmgeoiywmus;
        }
        goto imkssyywooioucus;
        egoyamquqqewuegi:
        icgakkuyckqesico:
        goto iakkmkweqaagekgo;
        uwgmiksaegmqceyk:
        exit;
        goto amskquyqikemocuo;
        imkssyywooioucus:
        
        exit;
        goto ocmeugiacmiquqme;
        qgsskoeisqceyeay:
        
        $this->eqcmmyoimqigequa();
        goto qaiekqcmmmomwkay;
        uqwywgiauqaiimwa:
        if (!$this->uuqwmkuaqimkcmei()) {
            goto icgakkuyckqesico;
        }
        goto qgsskoeisqceyeay;
        qaiekqcmmmomwkay:
        exit;
        goto egoyamquqqewuegi;
        amskquyqikemocuo:
    }
    
    protected function uwugaiqywmseksqm()
    {
        goto skumomgmiegcqycw;
        wcsmeukkkeykymku:
        DecoratorCron::uwugaiqywmseksqm(time(), $this->kmaaqwymiwaikeyi(), $this->swyooakuoqwwiiws());
        goto wsymeeuaouaawqei;
        wsymeeuaouaawqei:
        qaqimkwawaoyquqo:
        goto cmimcccwuucogiaa;
        skumomgmiegcqycw:
        if (DecoratorCron::sceqickmyoseqcue($this->swyooakuoqwwiiws())) {
            goto qaqimkwawaoyquqo;
        }
        goto wcsmeukkkeykymku;
        cmimcccwuucogiaa:
    }
    
    protected function eqcmmyoimqigequa()
    {
        goto yiqackmqoqegssaa;
        kccaqkcqoayausew:
        DecoratorCron::swgggegyusmecoky($yiuogaeewyockeak, $this->swyooakuoqwwiiws());
        goto yuuwkkqomcewkmma;
        yuuwkkqomcewkmma:
        mawocayqcocoacma:
        goto kuecssumeqasoaoo;
        qygsseugiwqmmyck:
        if (!$yiuogaeewyockeak) {
            goto mawocayqcocoacma;
        }
        goto kccaqkcqoayausew;
        yiqackmqoqegssaa:
        $yiuogaeewyockeak = DecoratorCron::sceqickmyoseqcue($this->swyooakuoqwwiiws());
        goto qygsseugiwqmmyck;
        kuecssumeqasoaoo:
    }
    
    public function ywieukewwemywsgi()
    {
        goto mweocegcwiiiwkcs;
        yymkawwocayqmcew:
        $this->delete($owuckwsseckgeweg->key);
        goto egswysgmqmcsswia;
        mweocegcwiiiwkcs:
        if ($this->uuqwmkuaqimkcmei()) {
            goto scwisyammksaguea;
        }
        goto wsooeyooiuqokgwo;
        ygcassqguceeaako:
        scwisyammksaguea:
        goto amkoayycaiguswem;
        amkoayycaiguswem:
        $this->cqscqicucmeamkyq("{$this->wqqseoqcmgkgoiug()}\137\160\x72\157\143\145\163\x73\137\143\x61\x6e\143\145\x6c\x65\144", $this);
        goto qosuqqceyccekysq;
        wsooeyooiuqokgwo:
        $owuckwsseckgeweg = $this->kycesesquyayogwg();
        goto yymkawwocayqmcew;
        egswysgmqmcsswia:
        wp_clear_scheduled_hook($this->swyooakuoqwwiiws());
        goto ygcassqguceeaako;
        qosuqqceyccekysq:
    }
    
    public abstract function siyykeyqqywuequu($igqsaukqcqscimok);
}
