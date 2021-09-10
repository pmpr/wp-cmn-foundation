<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b2e4befc8c             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Process;

use Pmpr\Common\Foundation\Decorator\DecoratorCron;
use Pmpr\Common\Foundation\Manipulate\ManipulateAjax;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;
use stdClass;

abstract class Background extends Async
{
    const IDENTIFIER_POSTFIX = "\137\x62\141\164\x63\x68\137";
    
    protected int $startTime = 0;
    
    protected ?string $cronHookIdentifier = '';
    
    protected ?string $cronIntervalIdentifier = '';
    
    protected ?string $action = "\x62\141\143\153\x67\x72\x6f\165\156\x64\x5f\160\x72\157\143\x65\x73\x73";
    public function wigskegsqequoeks()
    {
        goto gsmyumksyakiggcm;
        ogqewmmmiykuksem:
        $this->qcsmikeggeemccuu($this->swyooakuoqwwiiws(), [$this, "\x67\171\x71\171\x77\x6b\157\x61\x75\x6f\x6d\x65\161\x69\163\145"]);
        goto wcygoekisgskgwiy;
        gsmyumksyakiggcm:
        
        $this->cronHookIdentifier = "{$this->eiswegiqykyigwig()}\x5f\143\162\x6f\x6e";
        goto uckkymmemmicgwig;
        uckkymmemmicgwig:
        $this->cronIntervalIdentifier = "{$this->eiswegiqykyigwig()}\137\143\x72\157\x6e\137\151\x6e\164\x65\x72\166\141\x6c";
        goto ogqewmmmiykuksem;
        wcygoekisgskgwiy:
        parent::wigskegsqequoeks();
        goto vskouskskegecgwa;
        vskouskskegecgwa:
    }
    public function kgquecmsgcouyaya()
    {
        $this->cecaguuoecmccuse("\143\162\157\x6e\x5f\163\x63\150\x65\x64\x75\x6c\x65\163", [$this, "\x73\171\x79\151\157\x6b\x6f\x6d\x75\163\147\x65\x79\153\167\165"]);
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
        ysequocgiooyuosk:
        ocsiqemkuomayusk:
        goto umsskuauuckkimsm;
        imsqgqomukkegqka:
        update_site_option($this->gykguuqikwcyouws(), $this->seyyiqmgwymyumoq());
        goto ysequocgiooyuosk;
        umsskuauuckkimsm:
        return $this;
        goto kiqmqoqcmswwwmug;
        oeyyggkauuucqwgo:
        if (!$this->seyyiqmgwymyumoq()) {
            goto ocsiqemkuomayusk;
        }
        goto imsqgqomukkegqka;
        kiqmqoqcmswwwmug:
    }
    
    public function update(string $uusmaiomayssaecw, array $icwicymcioeyeyek = [])
    {
        goto cigmikkigagaoism;
        sssomqswysysigko:
        update_site_option($uusmaiomayssaecw, $icwicymcioeyeyek);
        goto cyommmwuyyyiqsaa;
        cigmikkigagaoism:
        if (!$icwicymcioeyeyek) {
            goto qkcoaggwwskkqggy;
        }
        goto sssomqswysysigko;
        cyommmwuyyyiqsaa:
        qkcoaggwwskkqggy:
        goto icuukaaeuwwgoymw;
        icuukaaeuwwgoymw:
        return $this;
        goto uimsyaquwymkcaao;
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
        yqkqmmeaasceaaui:
        return substr($mwweeceqggqmogwk . $omasqoksqewuwwkq, 0, $ykiwomimkkuiigoq);
        goto xamgygckoocqmyae;
        msakgmkaaosagcgc:
        $omasqoksqewuwwkq = md5(microtime() . rand());
        goto ocwgmoemmmqwwmoi;
        ocwgmoemmmqwwmoi:
        $mwweeceqggqmogwk = $this->eiswegiqykyigwig() . self::IDENTIFIER_POSTFIX;
        goto yqkqmmeaasceaaui;
        xamgygckoocqmyae:
    }
    
    public function aqskqeakoauwowwm()
    {
        goto yacemkmocmaamgui;
        kuouoyaeougsusic:
        $this->handle();
        goto gkumkcqesowgysme;
        yacemkmocmaamgui:
        
        session_write_close();
        goto ccoyciugiugeaqea;
        uqcmqacyoyegyica:
        
        wp_die();
        goto rweicwousieukigk;
        ccoyciugiugeaqea:
        if (!$this->yyqyaigucmaueykw()) {
            goto qaqkcsmkgkuieoqq;
        }
        goto cyemeggkueyokkym;
        squwcqweceecssck:
        if (!ManipulateAjax::wqsmsuyggkkyyocc($this->eiswegiqykyigwig(), "\156\157\x6e\x63\145")) {
            goto qgqmieaieecsksyo;
        }
        goto kuouoyaeougsusic;
        kooyawcskwoagaqi:
        if (!$this->uuqwmkuaqimkcmei()) {
            goto mwegucqywugusieu;
        }
        goto uqcmqacyoyegyica;
        rweicwousieukigk:
        mwegucqywugusieu:
        goto squwcqweceecssck;
        yogaoogoakmaggii:
        qaqkcsmkgkuieoqq:
        goto kooyawcskwoagaqi;
        yqwaggyckkquggqs:
        wp_die();
        goto eeqmaiqacegskmae;
        gkumkcqesowgysme:
        qgqmieaieecsksyo:
        goto yqwaggyckkquggqs;
        cyemeggkueyokkym:
        
        wp_die();
        goto yogaoogoakmaggii;
        eeqmaiqacegskmae:
    }
    
    protected function uuqwmkuaqimkcmei()
    {
        goto saagquesokaackwy;
        qcaceeoqgiwmegia:
        ysawmmcgoceiuqmg:
        goto gqwoewuysuocgwku;
        aqgeugceemmqaemu:
        $aasascamegmwqmqk = $wpdb->options;
        goto ismmcscmkqogkwyo;
        qckqqkmgqmyoouuw:
        $qgoqiacsiccwoawi = "\x6d\x65\x74\141\137\x6b\x65\171";
        goto qcaceeoqgiwmegia;
        ismmcscmkqogkwyo:
        $qgoqiacsiccwoawi = "\157\x70\x74\151\x6f\x6e\137\156\x61\155\145";
        goto saiswigiqcyqmgmm;
        ummccggkuwqiqieu:
        $gaeqamemwmwsyukm = $wpdb->get_var($wpdb->prepare("\x53\x45\114\x45\x43\x54\x20\x43\117\x55\x4e\124\50\x2a\51\x20\106\x52\117\x4d\x20{$aasascamegmwqmqk}\x20\x57\x48\x45\x52\x45\x20{$qgoqiacsiccwoawi}\40\x4c\x49\x4b\105\40\45\163", $uusmaiomayssaecw));
        goto qyssyuwuywoyqwso;
        gqwoewuysuocgwku:
        $uusmaiomayssaecw = $wpdb->esc_like($this->eiswegiqykyigwig() . self::IDENTIFIER_POSTFIX) . "\x25";
        goto ummccggkuwqiqieu;
        qyssyuwuywoyqwso:
        return $gaeqamemwmwsyukm > 0 ? false : true;
        goto qoogiceokacewciw;
        saiswigiqcyqmgmm:
        if (!is_multisite()) {
            goto ysawmmcgoceiuqmg;
        }
        goto yekkkcaukiossquk;
        saagquesokaackwy:
        global $wpdb;
        goto aqgeugceemmqaemu;
        yekkkcaukiossquk:
        $aasascamegmwqmqk = $wpdb->sitemeta;
        goto qckqqkmgqmyoouuw;
        qoogiceokacewciw:
    }
    
    public function yyqyaigucmaueykw()
    {
        return get_site_transient("{$this->eiswegiqykyigwig()}\137\160\162\x6f\x63\x65\163\x73\x5f\x6c\157\143\x6b");
    }
    
    public function aegawcwekgqycoig()
    {
        goto lsggiimkmcoccyqa;
        iskmaskwiwguswym:
        
        $owmuuoycwiskaeme = method_exists($this, "\153\143\x6b\x69\161\157\147\x65\155\x6d\151\161\161\x71\x65\x6b") ? $this->kckiqogemmiqqqek() : 60;
        goto wyysmocawoaemiew;
        oumecckuoogcisam:
        set_site_transient("{$this->eiswegiqykyigwig()}\137\x70\x72\157\143\145\x73\x73\x5f\154\157\x63\153", microtime(), $owmuuoycwiskaeme);
        goto isekoekueuaeuaew;
        wyysmocawoaemiew:
        $owmuuoycwiskaeme = $this->sscegwueamckwmcy("{$this->eiswegiqykyigwig()}\137\x71\165\x65\x75\145\x5f\154\157\x63\153\137\x74\x69\155\145", $owmuuoycwiskaeme);
        goto oumecckuoogcisam;
        lsggiimkmcoccyqa:
        $this->startTime = time();
        goto iskmaskwiwguswym;
        isekoekueuaeuaew:
    }
    
    public function ycuqagwqkwuuyagc() : Background
    {
        delete_site_transient("{$this->eiswegiqykyigwig()}\x5f\x70\x72\x6f\143\145\x73\163\x5f\x6c\x6f\143\x6b");
        return $this;
    }
    
    protected function kycesesquyayogwg()
    {
        goto kuquukieoauysqes;
        kwusgqycuoswqwqs:
        $aasascamegmwqmqk = $wpdb->options;
        goto egqmoeqagueyiqug;
        smgiescoeygeokka:
        $owuckwsseckgeweg = new stdClass();
        goto meiqskieagikegyk;
        ukysouqeuaqacccc:
        $ssemgewueawkmcqw = "\157\160\164\151\157\156\x5f\151\x64";
        goto cgakgqageuiwqsyk;
        skcckgmwseumsiom:
        $qgoqiacsiccwoawi = "\x6d\x65\x74\x61\x5f\153\145\171";
        goto iigwwgoaiogqysey;
        egqmoeqagueyiqug:
        $qgoqiacsiccwoawi = "\157\x70\x74\x69\x6f\156\x5f\x6e\x61\x6d\x65";
        goto ukysouqeuaqacccc;
        egmogkeseuwqokei:
        return $owuckwsseckgeweg;
        goto cuiegucyaegqkyuq;
        oycqqwgueqayoiqs:
        $gqgemcmoicmgaqie = $wpdb->get_row($wpdb->prepare("\x53\105\114\x45\103\x54\x20\x2a\x20\106\x52\x4f\115\x20{$aasascamegmwqmqk}\x20\127\110\x45\122\105\40{$qgoqiacsiccwoawi}\x20\x4c\x49\x4b\105\40\x25\x73\x20\x4f\x52\104\x45\x52\40\x42\x59\x20{$ssemgewueawkmcqw}\40\101\x53\103\x20\x4c\111\115\111\124\40\x31", $uusmaiomayssaecw));
        goto smgiescoeygeokka;
        cgakgqageuiwqsyk:
        $qmiicscguaqeiiow = "\x6f\x70\164\x69\157\x6e\x5f\166\x61\x6c\165\145";
        goto iyowacasiugcygyy;
        kuquukieoauysqes:
        global $wpdb;
        goto kwusgqycuoswqwqs;
        ugkggeccqcqagaas:
        $owuckwsseckgeweg->data = maybe_unserialize($gqgemcmoicmgaqie->{$qmiicscguaqeiiow});
        goto egmogkeseuwqokei;
        meiqskieagikegyk:
        $owuckwsseckgeweg->key = $gqgemcmoicmgaqie->{$qgoqiacsiccwoawi};
        goto ugkggeccqcqagaas;
        eegcsakukykecaqs:
        $uusmaiomayssaecw = $wpdb->esc_like($this->eiswegiqykyigwig() . self::IDENTIFIER_POSTFIX) . "\45";
        goto oycqqwgueqayoiqs;
        aceaseasgiukkmog:
        $qmiicscguaqeiiow = "\x6d\x65\x74\141\x5f\x76\x61\x6c\165\145";
        goto aiymqumesmissmcg;
        aiymqumesmissmcg:
        queymekwsgcuckek:
        goto eegcsakukykecaqs;
        iigwwgoaiogqysey:
        $ssemgewueawkmcqw = "\x6d\145\x74\x61\137\151\144";
        goto aceaseasgiukkmog;
        iyowacasiugcygyy:
        if (!is_multisite()) {
            goto queymekwsgcuckek;
        }
        goto awiysoiaoiuokgwu;
        awiysoiaoiuokgwu:
        $aasascamegmwqmqk = $wpdb->sitemeta;
        goto skcckgmwseumsiom;
        cuiegucyaegqkyuq:
    }
    
    protected function handle()
    {
        goto kcyqucscowsueeys;
        meiuukwequycmqog:
        $this->delete($owuckwsseckgeweg->key);
        goto ioyaceieouqueusq;
        ioyaceieouqueusq:
        goto qqmiwgcqgccgqsyg;
        goto kgawaeyumcuuciqw;
        gamsaysmouyaiqga:
        equwmukmuisgcwgg:
        goto aygsuymqoyigcwse;
        kcyqucscowsueeys:
        $this->aegawcwekgqycoig();
        goto gamsaysmouyaiqga;
        kqmgsgoqugmkumkw:
        qcuwkgcsoeeaakoi:
        goto skoaamakmkeyeeso;
        weciqsgukwuccsqo:
        $this->ieyosyaaisyquesq();
        goto esumogyswyyqekek;
        yqacwcwwaqymeiwe:
        qemwgosogkieccqo:
        goto aqosuiskiicyymim;
        skoaamakmkeyeeso:
        $this->yuqksmouoaowioyi();
        goto yqacwcwwaqymeiwe;
        mqiagimaakecsmqe:
        foreach ($owuckwsseckgeweg->data as $uusmaiomayssaecw => $eqgoocgaqwqcimie) {
            goto qyyuoqgmcmamwmyk;
            emggyucsukgwkcgc:
            yekkgsqqsgmkgmms:
            goto iqaieccaegoeggii;
            iqaieccaegoeggii:
            if (!($this->egmyoaiiswagkkuw() || $this->wscswagsquiyigao())) {
                goto iiykaqkywwwcaccq;
            }
            goto cgqyoogsouswccci;
            cgqyoogsouswccci:
            goto wuqywqumeskyygok;
            goto hymewosaaisgikci;
            qyyuoqgmcmamwmyk:
            $siyykeyqqywuequu = $this->siyykeyqqywuequu($eqgoocgaqwqcimie);
            goto iwqueooewwgeioyq;
            yyykasuqssggyosq:
            kswocgwqsymwqyqa:
            goto acmweeyugmqqyokk;
            acmweeyugmqqyokk:
            $owuckwsseckgeweg->data[$uusmaiomayssaecw] = $siyykeyqqywuequu;
            goto emggyucsukgwkcgc;
            cakagawwksoawgcm:
            ckmeygmuimmiegqs:
            goto uqkuemgmsakoywag;
            hymewosaaisgikci:
            iiykaqkywwwcaccq:
            goto cakagawwksoawgcm;
            ucakoqesgoskmmmm:
            goto yekkgsqqsgmkgmms;
            goto yyykasuqssggyosq;
            sqscykoomqwyaweu:
            ManipulateArray::unset($owuckwsseckgeweg->data, $uusmaiomayssaecw);
            goto ucakoqesgoskmmmm;
            iwqueooewwgeioyq:
            if (false !== $siyykeyqqywuequu) {
                goto kswocgwqsymwqyqa;
            }
            goto sqscykoomqwyaweu;
            uqkuemgmsakoywag:
        }
        goto kqoqowksykgissie;
        esumogyswyyqekek:
        goto qemwgosogkieccqo;
        goto kqmgsgoqugmkumkw;
        ckycsaeqqguawwwi:
        $this->ycuqagwqkwuuyagc();
        goto maiioecwmocoiggy;
        oyewocgsmcoqokek:
        if (!$this->egmyoaiiswagkkuw() && !$this->wscswagsquiyigao() && !$this->uuqwmkuaqimkcmei()) {
            goto equwmukmuisgcwgg;
        }
        goto yeuioyeiyuwqkayk;
        yeuioyeiyuwqkayk:
        emciiyeqsikycqqa:
        goto ckycsaeqqguawwwi;
        maiioecwmocoiggy:
        
        if ($this->uuqwmkuaqimkcmei()) {
            goto qcuwkgcsoeeaakoi;
        }
        goto weciqsgukwuccsqo;
        wugiyayiwyqyqyse:
        
        if ($owuckwsseckgeweg->data) {
            goto isgegieeaowwoykm;
        }
        goto meiuukwequycmqog;
        kqoqowksykgissie:
        wuqywqumeskyygok:
        goto wugiyayiwyqyqyse;
        aqosuiskiicyymim:
        wp_die();
        goto asgkgckgcgaowmqc;
        cacogygqoikeooyg:
        $this->update($owuckwsseckgeweg->key, $owuckwsseckgeweg->data);
        goto eymcqqymeqcwgqea;
        eymcqqymeqcwgqea:
        qqmiwgcqgccgqsyg:
        goto oyewocgsmcoqokek;
        aygsuymqoyigcwse:
        $owuckwsseckgeweg = $this->kycesesquyayogwg();
        goto mqiagimaakecsmqe;
        kgawaeyumcuuciqw:
        isgegieeaowwoykm:
        goto cacogygqoikeooyg;
        asgkgckgcgaowmqc:
    }
    
    protected function wscswagsquiyigao()
    {
        goto aeyiikqmacugigig;
        ekumegaekiouaqau:
        return $this->sscegwueamckwmcy("{$this->eiswegiqykyigwig()}\137\155\x65\155\157\x72\171\x5f\x65\170\143\145\x65\144\x65\144", $ksaameoqigiaoigg);
        goto mgyysecwqceoeqkc;
        ewaaoqsacsuaskso:
        woamusawsweikowo:
        goto ekumegaekiouaqau;
        ooymsigkiymussmk:
        if (!($iquygkkomwmwiuqy >= $kykimuycmcucisac)) {
            goto woamusawsweikowo;
        }
        goto oagugomioiouugkg;
        oagugomioiouugkg:
        $ksaameoqigiaoigg = true;
        goto ewaaoqsacsuaskso;
        umcgeowmcyakagce:
        $kykimuycmcucisac = $this->psweseawgksmugec() * 0.9;
        goto ccqauscokygeseqg;
        aeyiikqmacugigig:
        $ksaameoqigiaoigg = false;
        goto umcgeowmcyakagce;
        ccqauscokygeseqg:
        
        $iquygkkomwmwiuqy = memory_get_usage(true);
        goto ooymsigkiymussmk;
        mgyysecwqceoeqkc:
    }
    
    protected function psweseawgksmugec()
    {
        goto coaoysumumkmugqe;
        gegewgiwkgmmocua:
        if (!(!$kykimuycmcucisac || -1 === intval($kykimuycmcucisac))) {
            goto mqicqmuiucsiwyyu;
        }
        goto yauqoemesamemoog;
        gsukkgwiogagoeym:
        mqicqmuiucsiwyyu:
        goto qkqgiqqqauueicmg;
        qkqgiqqqauueicmg:
        return intval($kykimuycmcucisac) * 1024 * 1024;
        goto iweywcmciioqsoka;
        symeoeugigmiwkss:
        
        $kykimuycmcucisac = "\61\x32\70\115";
        goto wwkmcacgmyaswsaw;
        coaoysumumkmugqe:
        if (function_exists("\x69\156\x69\137\147\x65\x74")) {
            goto kaiwcqcgoqgoqmuy;
        }
        goto symeoeugigmiwkss;
        uwoeomuksucugygo:
        $kykimuycmcucisac = ini_get("\x6d\145\155\157\162\x79\x5f\154\x69\x6d\x69\164");
        goto wwwykymsssmcmkii;
        wwkmcacgmyaswsaw:
        goto wiwmyyqikeackcgi;
        goto sgueqceaumcqumye;
        wwwykymsssmcmkii:
        wiwmyyqikeackcgi:
        goto gegewgiwkgmmocua;
        sgueqceaumcqumye:
        kaiwcqcgoqgoqmuy:
        goto uwoeomuksucugygo;
        yauqoemesamemoog:
        
        $kykimuycmcucisac = "\x33\62\x30\x30\x30\x4d";
        goto gsukkgwiogagoeym;
        iweywcmciioqsoka:
    }
    
    protected function egmyoaiiswagkkuw()
    {
        goto gcgokiaeqcqsqogw;
        iqyaayumigaguyks:
        cwkqmgykgysmgiyq:
        goto gcmmwomegsoosqgw;
        gcgokiaeqcqsqogw:
        $eyyawusiwecymiug = $this->yuqoqckgwkaqucqk() + $this->sscegwueamckwmcy("{$this->eiswegiqykyigwig()}\x5f\144\x65\x66\141\x75\154\x74\x5f\x74\x69\x6d\x65\x5f\x6c\x69\155\151\x74", 20);
        goto myymosmuygkiwagm;
        aqwqycaysagwiesw:
        $ksaameoqigiaoigg = true;
        goto iqyaayumigaguyks;
        myymosmuygkiwagm:
        
        $ksaameoqigiaoigg = false;
        goto cyaiikokmuyugiow;
        gcmmwomegsoosqgw:
        return $this->sscegwueamckwmcy("{$this->eiswegiqykyigwig()}\137\x74\x69\x6d\145\137\145\x78\143\x65\145\144\x65\144", $ksaameoqigiaoigg);
        goto ewskyikcqksaoqui;
        cyaiikokmuyugiow:
        if (!(time() >= $eyyawusiwecymiug)) {
            goto cwkqmgykgysmgiyq;
        }
        goto aqwqycaysagwiesw;
        ewskyikcqksaoqui:
    }
    
    protected function yuqksmouoaowioyi()
    {
        
        $this->eqcmmyoimqigequa();
    }
    
    public function syyiokomusgeykwu($immuisiomomksweo)
    {
        goto ywwagicseyckmgoc;
        smaosqyeiqocuoqc:
        iugwuicgyyakcoas:
        goto eowukugguiywsoyq;
        mcaowagyicymmeca:
        $ycooswiwewekokei = $this->sscegwueamckwmcy($this->eiswegiqykyigwig() . "\x5f\143\162\x6f\x6e\137\151\156\x74\145\162\x76\141\x6c", $this->yquogugyqggisgio());
        goto smaosqyeiqocuoqc;
        ackekiywiuwuswcg:
        return $immuisiomomksweo;
        goto owssoyiioasuoiwy;
        ywwagicseyckmgoc:
        $ycooswiwewekokei = $this->sscegwueamckwmcy($this->eiswegiqykyigwig() . "\137\143\x72\157\x6e\137\151\x6e\164\145\x72\166\141\154", 5);
        goto iywakcgekyskmwyq;
        iywakcgekyskmwyq:
        if (!method_exists($this, "\x79\x71\x75\157\147\165\147\x79\x71\147\147\151\163\147\x69\x6f")) {
            goto iugwuicgyyakcoas;
        }
        goto mcaowagyicymmeca;
        eowukugguiywsoyq:
        
        $immuisiomomksweo["{$this->eiswegiqykyigwig()}\x5f\143\x72\157\x6e\137\x69\x6e\x74\145\x72\x76\141\154"] = ["\x69\156\x74\x65\162\x76\x61\154" => MINUTE_IN_SECONDS * $ycooswiwewekokei, "\x64\x69\163\x70\154\x61\x79" => sprintf(__("\x45\x76\145\162\x79\x20\x25\144\x20\x4d\x69\x6e\x75\x74\145\x73"), $ycooswiwewekokei)];
        goto ackekiywiuwuswcg;
        owssoyiioasuoiwy:
    }
    
    public function gyqywkoauomeqise()
    {
        goto saugggiieycqisoo;
        uqwywgiauqaiimwa:
        if (!$this->uuqwmkuaqimkcmei()) {
            goto icgakkuyckqesico;
        }
        goto qgsskoeisqceyeay;
        qaiekqcmmmomwkay:
        exit;
        goto egoyamquqqewuegi;
        qgsskoeisqceyeay:
        
        $this->eqcmmyoimqigequa();
        goto qaiekqcmmmomwkay;
        imkssyywooioucus:
        
        exit;
        goto ocmeugiacmiquqme;
        uwgmiksaegmqceyk:
        exit;
        goto amskquyqikemocuo;
        ocmeugiacmiquqme:
        cisygcmgeoiywmus:
        goto uqwywgiauqaiimwa;
        iakkmkweqaagekgo:
        $this->handle();
        goto uwgmiksaegmqceyk;
        egoyamquqqewuegi:
        icgakkuyckqesico:
        goto iakkmkweqaagekgo;
        saugggiieycqisoo:
        if (!$this->yyqyaigucmaueykw()) {
            goto cisygcmgeoiywmus;
        }
        goto imkssyywooioucus;
        amskquyqikemocuo:
    }
    
    protected function uwugaiqywmseksqm()
    {
        goto skumomgmiegcqycw;
        wsymeeuaouaawqei:
        qaqimkwawaoyquqo:
        goto cmimcccwuucogiaa;
        wcsmeukkkeykymku:
        DecoratorCron::uwugaiqywmseksqm(time(), $this->kmaaqwymiwaikeyi(), $this->swyooakuoqwwiiws());
        goto wsymeeuaouaawqei;
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
        yuuwkkqomcewkmma:
        mawocayqcocoacma:
        goto kuecssumeqasoaoo;
        qygsseugiwqmmyck:
        if (!$yiuogaeewyockeak) {
            goto mawocayqcocoacma;
        }
        goto kccaqkcqoayausew;
        kccaqkcqoayausew:
        DecoratorCron::swgggegyusmecoky($yiuogaeewyockeak, $this->swyooakuoqwwiiws());
        goto yuuwkkqomcewkmma;
        yiqackmqoqegssaa:
        $yiuogaeewyockeak = DecoratorCron::sceqickmyoseqcue($this->swyooakuoqwwiiws());
        goto qygsseugiwqmmyck;
        kuecssumeqasoaoo:
    }
    
    public function ywieukewwemywsgi()
    {
        goto mweocegcwiiiwkcs;
        egswysgmqmcsswia:
        wp_clear_scheduled_hook($this->swyooakuoqwwiiws());
        goto ygcassqguceeaako;
        wsooeyooiuqokgwo:
        $owuckwsseckgeweg = $this->kycesesquyayogwg();
        goto yymkawwocayqmcew;
        yymkawwocayqmcew:
        $this->delete($owuckwsseckgeweg->key);
        goto egswysgmqmcsswia;
        ygcassqguceeaako:
        scwisyammksaguea:
        goto amkoayycaiguswem;
        amkoayycaiguswem:
        $this->cqscqicucmeamkyq("{$this->wqqseoqcmgkgoiug()}\137\x70\162\157\x63\145\x73\163\137\143\141\x6e\143\145\154\x65\144", $this);
        goto qosuqqceyccekysq;
        mweocegcwiiiwkcs:
        if ($this->uuqwmkuaqimkcmei()) {
            goto scwisyammksaguea;
        }
        goto wsooeyooiuqokgwo;
        qosuqqceyccekysq:
    }
    
    public abstract function siyykeyqqywuequu($igqsaukqcqscimok);
}
