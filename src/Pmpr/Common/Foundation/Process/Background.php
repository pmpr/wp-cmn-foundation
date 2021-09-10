<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b3993be3fb             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Process;

use Pmpr\Common\Foundation\Decorator\DecoratorCron;
use Pmpr\Common\Foundation\Manipulate\ManipulateAjax;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;
use stdClass;

abstract class Background extends Async
{
    const IDENTIFIER_POSTFIX = "\x5f\x62\141\x74\x63\x68\137";
    
    protected int $startTime = 0;
    
    protected ?string $cronHookIdentifier = '';
    
    protected ?string $cronIntervalIdentifier = '';
    
    protected ?string $action = "\142\141\x63\x6b\147\162\157\165\x6e\144\137\x70\162\x6f\143\145\163\x73";
    public function wigskegsqequoeks()
    {
        goto gsmyumksyakiggcm;
        wcygoekisgskgwiy:
        parent::wigskegsqequoeks();
        goto vskouskskegecgwa;
        ogqewmmmiykuksem:
        $this->qcsmikeggeemccuu($this->swyooakuoqwwiiws(), [$this, "\147\171\161\x79\x77\x6b\x6f\x61\165\x6f\x6d\145\161\151\x73\x65"]);
        goto wcygoekisgskgwiy;
        uckkymmemmicgwig:
        $this->cronIntervalIdentifier = "{$this->eiswegiqykyigwig()}\x5f\143\x72\157\156\x5f\x69\x6e\164\145\162\x76\x61\x6c";
        goto ogqewmmmiykuksem;
        gsmyumksyakiggcm:
        
        $this->cronHookIdentifier = "{$this->eiswegiqykyigwig()}\x5f\143\162\157\156";
        goto uckkymmemmicgwig;
        vskouskskegecgwa:
    }
    public function kgquecmsgcouyaya()
    {
        $this->cecaguuoecmccuse("\143\x72\157\x6e\137\163\143\150\145\x64\165\x6c\x65\x73", [$this, "\163\171\171\x69\x6f\153\x6f\155\165\163\x67\145\171\x6b\167\165"]);
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
        imsqgqomukkegqka:
        update_site_option($this->gykguuqikwcyouws(), $this->seyyiqmgwymyumoq());
        goto ysequocgiooyuosk;
        umsskuauuckkimsm:
        return $this;
        goto kiqmqoqcmswwwmug;
        ysequocgiooyuosk:
        ocsiqemkuomayusk:
        goto umsskuauuckkimsm;
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
        cigmikkigagaoism:
        if (!$icwicymcioeyeyek) {
            goto qkcoaggwwskkqggy;
        }
        goto sssomqswysysigko;
        icuukaaeuwwgoymw:
        return $this;
        goto uimsyaquwymkcaao;
        cyommmwuyyyiqsaa:
        qkcoaggwwskkqggy:
        goto icuukaaeuwwgoymw;
        sssomqswysysigko:
        update_site_option($uusmaiomayssaecw, $icwicymcioeyeyek);
        goto cyommmwuyyyiqsaa;
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
        msakgmkaaosagcgc:
        $omasqoksqewuwwkq = md5(microtime() . rand());
        goto ocwgmoemmmqwwmoi;
        ocwgmoemmmqwwmoi:
        $mwweeceqggqmogwk = $this->eiswegiqykyigwig() . self::IDENTIFIER_POSTFIX;
        goto yqkqmmeaasceaaui;
        yqkqmmeaasceaaui:
        return substr($mwweeceqggqmogwk . $omasqoksqewuwwkq, 0, $ykiwomimkkuiigoq);
        goto xamgygckoocqmyae;
        xamgygckoocqmyae:
    }
    
    public function aqskqeakoauwowwm()
    {
        goto yacemkmocmaamgui;
        yqwaggyckkquggqs:
        wp_die();
        goto eeqmaiqacegskmae;
        squwcqweceecssck:
        if (!ManipulateAjax::wqsmsuyggkkyyocc($this->eiswegiqykyigwig(), "\156\157\x6e\x63\145")) {
            goto qgqmieaieecsksyo;
        }
        goto kuouoyaeougsusic;
        kuouoyaeougsusic:
        $this->handle();
        goto gkumkcqesowgysme;
        yacemkmocmaamgui:
        
        session_write_close();
        goto ccoyciugiugeaqea;
        cyemeggkueyokkym:
        
        wp_die();
        goto yogaoogoakmaggii;
        rweicwousieukigk:
        mwegucqywugusieu:
        goto squwcqweceecssck;
        ccoyciugiugeaqea:
        if (!$this->yyqyaigucmaueykw()) {
            goto qaqkcsmkgkuieoqq;
        }
        goto cyemeggkueyokkym;
        uqcmqacyoyegyica:
        
        wp_die();
        goto rweicwousieukigk;
        yogaoogoakmaggii:
        qaqkcsmkgkuieoqq:
        goto kooyawcskwoagaqi;
        gkumkcqesowgysme:
        qgqmieaieecsksyo:
        goto yqwaggyckkquggqs;
        kooyawcskwoagaqi:
        if (!$this->uuqwmkuaqimkcmei()) {
            goto mwegucqywugusieu;
        }
        goto uqcmqacyoyegyica;
        eeqmaiqacegskmae:
    }
    
    protected function uuqwmkuaqimkcmei()
    {
        goto saagquesokaackwy;
        saiswigiqcyqmgmm:
        if (!is_multisite()) {
            goto ysawmmcgoceiuqmg;
        }
        goto yekkkcaukiossquk;
        yekkkcaukiossquk:
        $aasascamegmwqmqk = $wpdb->sitemeta;
        goto qckqqkmgqmyoouuw;
        ismmcscmkqogkwyo:
        $qgoqiacsiccwoawi = "\x6f\160\164\151\x6f\156\137\x6e\141\x6d\145";
        goto saiswigiqcyqmgmm;
        qcaceeoqgiwmegia:
        ysawmmcgoceiuqmg:
        goto gqwoewuysuocgwku;
        qyssyuwuywoyqwso:
        return $gaeqamemwmwsyukm > 0 ? false : true;
        goto qoogiceokacewciw;
        ummccggkuwqiqieu:
        $gaeqamemwmwsyukm = $wpdb->get_var($wpdb->prepare("\x53\105\x4c\x45\103\x54\x20\x43\117\x55\116\x54\x28\x2a\x29\40\106\x52\x4f\115\x20{$aasascamegmwqmqk}\40\x57\x48\x45\122\105\x20{$qgoqiacsiccwoawi}\x20\x4c\x49\113\x45\40\x25\163", $uusmaiomayssaecw));
        goto qyssyuwuywoyqwso;
        aqgeugceemmqaemu:
        $aasascamegmwqmqk = $wpdb->options;
        goto ismmcscmkqogkwyo;
        saagquesokaackwy:
        global $wpdb;
        goto aqgeugceemmqaemu;
        qckqqkmgqmyoouuw:
        $qgoqiacsiccwoawi = "\x6d\145\x74\x61\137\153\145\171";
        goto qcaceeoqgiwmegia;
        gqwoewuysuocgwku:
        $uusmaiomayssaecw = $wpdb->esc_like($this->eiswegiqykyigwig() . self::IDENTIFIER_POSTFIX) . "\x25";
        goto ummccggkuwqiqieu;
        qoogiceokacewciw:
    }
    
    public function yyqyaigucmaueykw()
    {
        return get_site_transient("{$this->eiswegiqykyigwig()}\137\160\x72\x6f\143\x65\x73\163\x5f\154\157\143\x6b");
    }
    
    public function aegawcwekgqycoig()
    {
        goto lsggiimkmcoccyqa;
        wyysmocawoaemiew:
        $owmuuoycwiskaeme = $this->sscegwueamckwmcy("{$this->eiswegiqykyigwig()}\x5f\x71\x75\145\x75\x65\137\154\157\143\153\x5f\164\x69\x6d\x65", $owmuuoycwiskaeme);
        goto oumecckuoogcisam;
        iskmaskwiwguswym:
        
        $owmuuoycwiskaeme = method_exists($this, "\x6b\x63\x6b\151\161\157\147\145\155\155\151\x71\x71\x71\145\x6b") ? $this->kckiqogemmiqqqek() : 60;
        goto wyysmocawoaemiew;
        oumecckuoogcisam:
        set_site_transient("{$this->eiswegiqykyigwig()}\137\160\162\x6f\x63\x65\163\x73\137\154\157\x63\153", microtime(), $owmuuoycwiskaeme);
        goto isekoekueuaeuaew;
        lsggiimkmcoccyqa:
        $this->startTime = time();
        goto iskmaskwiwguswym;
        isekoekueuaeuaew:
    }
    
    public function ycuqagwqkwuuyagc() : Background
    {
        delete_site_transient("{$this->eiswegiqykyigwig()}\x5f\160\x72\x6f\143\x65\x73\163\x5f\x6c\157\x63\153");
        return $this;
    }
    
    protected function kycesesquyayogwg()
    {
        goto kuquukieoauysqes;
        iigwwgoaiogqysey:
        $ssemgewueawkmcqw = "\x6d\x65\x74\141\x5f\151\144";
        goto aceaseasgiukkmog;
        awiysoiaoiuokgwu:
        $aasascamegmwqmqk = $wpdb->sitemeta;
        goto skcckgmwseumsiom;
        aiymqumesmissmcg:
        queymekwsgcuckek:
        goto eegcsakukykecaqs;
        aceaseasgiukkmog:
        $qmiicscguaqeiiow = "\155\x65\x74\x61\137\166\141\x6c\165\x65";
        goto aiymqumesmissmcg;
        iyowacasiugcygyy:
        if (!is_multisite()) {
            goto queymekwsgcuckek;
        }
        goto awiysoiaoiuokgwu;
        smgiescoeygeokka:
        $owuckwsseckgeweg = new stdClass();
        goto meiqskieagikegyk;
        ukysouqeuaqacccc:
        $ssemgewueawkmcqw = "\x6f\x70\x74\x69\157\156\x5f\151\144";
        goto cgakgqageuiwqsyk;
        egmogkeseuwqokei:
        return $owuckwsseckgeweg;
        goto cuiegucyaegqkyuq;
        kuquukieoauysqes:
        global $wpdb;
        goto kwusgqycuoswqwqs;
        oycqqwgueqayoiqs:
        $gqgemcmoicmgaqie = $wpdb->get_row($wpdb->prepare("\x53\x45\x4c\105\x43\124\40\52\x20\x46\x52\x4f\x4d\40{$aasascamegmwqmqk}\x20\127\x48\105\122\x45\x20{$qgoqiacsiccwoawi}\40\114\111\113\x45\x20\45\163\40\117\x52\104\x45\122\40\x42\x59\40{$ssemgewueawkmcqw}\40\x41\123\103\x20\x4c\x49\115\111\124\40\x31", $uusmaiomayssaecw));
        goto smgiescoeygeokka;
        meiqskieagikegyk:
        $owuckwsseckgeweg->key = $gqgemcmoicmgaqie->{$qgoqiacsiccwoawi};
        goto ugkggeccqcqagaas;
        egqmoeqagueyiqug:
        $qgoqiacsiccwoawi = "\157\160\x74\x69\x6f\156\x5f\156\x61\x6d\x65";
        goto ukysouqeuaqacccc;
        skcckgmwseumsiom:
        $qgoqiacsiccwoawi = "\x6d\x65\x74\x61\x5f\153\x65\171";
        goto iigwwgoaiogqysey;
        eegcsakukykecaqs:
        $uusmaiomayssaecw = $wpdb->esc_like($this->eiswegiqykyigwig() . self::IDENTIFIER_POSTFIX) . "\45";
        goto oycqqwgueqayoiqs;
        kwusgqycuoswqwqs:
        $aasascamegmwqmqk = $wpdb->options;
        goto egqmoeqagueyiqug;
        cgakgqageuiwqsyk:
        $qmiicscguaqeiiow = "\157\x70\164\151\x6f\x6e\x5f\x76\x61\154\165\x65";
        goto iyowacasiugcygyy;
        ugkggeccqcqagaas:
        $owuckwsseckgeweg->data = maybe_unserialize($gqgemcmoicmgaqie->{$qmiicscguaqeiiow});
        goto egmogkeseuwqokei;
        cuiegucyaegqkyuq:
    }
    
    protected function handle()
    {
        goto kcyqucscowsueeys;
        esumogyswyyqekek:
        goto qemwgosogkieccqo;
        goto kqmgsgoqugmkumkw;
        oyewocgsmcoqokek:
        if (!$this->egmyoaiiswagkkuw() && !$this->wscswagsquiyigao() && !$this->uuqwmkuaqimkcmei()) {
            goto equwmukmuisgcwgg;
        }
        goto yeuioyeiyuwqkayk;
        kqmgsgoqugmkumkw:
        qcuwkgcsoeeaakoi:
        goto skoaamakmkeyeeso;
        kgawaeyumcuuciqw:
        isgegieeaowwoykm:
        goto cacogygqoikeooyg;
        yqacwcwwaqymeiwe:
        qemwgosogkieccqo:
        goto aqosuiskiicyymim;
        yeuioyeiyuwqkayk:
        emciiyeqsikycqqa:
        goto ckycsaeqqguawwwi;
        mqiagimaakecsmqe:
        foreach ($owuckwsseckgeweg->data as $uusmaiomayssaecw => $eqgoocgaqwqcimie) {
            goto qyyuoqgmcmamwmyk;
            iwqueooewwgeioyq:
            if (false !== $siyykeyqqywuequu) {
                goto kswocgwqsymwqyqa;
            }
            goto sqscykoomqwyaweu;
            hymewosaaisgikci:
            iiykaqkywwwcaccq:
            goto cakagawwksoawgcm;
            iqaieccaegoeggii:
            if (!($this->egmyoaiiswagkkuw() || $this->wscswagsquiyigao())) {
                goto iiykaqkywwwcaccq;
            }
            goto cgqyoogsouswccci;
            acmweeyugmqqyokk:
            $owuckwsseckgeweg->data[$uusmaiomayssaecw] = $siyykeyqqywuequu;
            goto emggyucsukgwkcgc;
            cgqyoogsouswccci:
            goto wuqywqumeskyygok;
            goto hymewosaaisgikci;
            sqscykoomqwyaweu:
            ManipulateArray::unset($owuckwsseckgeweg->data, $uusmaiomayssaecw);
            goto ucakoqesgoskmmmm;
            ucakoqesgoskmmmm:
            goto yekkgsqqsgmkgmms;
            goto yyykasuqssggyosq;
            emggyucsukgwkcgc:
            yekkgsqqsgmkgmms:
            goto iqaieccaegoeggii;
            cakagawwksoawgcm:
            ckmeygmuimmiegqs:
            goto uqkuemgmsakoywag;
            yyykasuqssggyosq:
            kswocgwqsymwqyqa:
            goto acmweeyugmqqyokk;
            qyyuoqgmcmamwmyk:
            $siyykeyqqywuequu = $this->siyykeyqqywuequu($eqgoocgaqwqcimie);
            goto iwqueooewwgeioyq;
            uqkuemgmsakoywag:
        }
        goto kqoqowksykgissie;
        ioyaceieouqueusq:
        goto qqmiwgcqgccgqsyg;
        goto kgawaeyumcuuciqw;
        wugiyayiwyqyqyse:
        
        if ($owuckwsseckgeweg->data) {
            goto isgegieeaowwoykm;
        }
        goto meiuukwequycmqog;
        kcyqucscowsueeys:
        $this->aegawcwekgqycoig();
        goto gamsaysmouyaiqga;
        weciqsgukwuccsqo:
        $this->ieyosyaaisyquesq();
        goto esumogyswyyqekek;
        ckycsaeqqguawwwi:
        $this->ycuqagwqkwuuyagc();
        goto maiioecwmocoiggy;
        aqosuiskiicyymim:
        wp_die();
        goto asgkgckgcgaowmqc;
        kqoqowksykgissie:
        wuqywqumeskyygok:
        goto wugiyayiwyqyqyse;
        maiioecwmocoiggy:
        
        if ($this->uuqwmkuaqimkcmei()) {
            goto qcuwkgcsoeeaakoi;
        }
        goto weciqsgukwuccsqo;
        skoaamakmkeyeeso:
        $this->yuqksmouoaowioyi();
        goto yqacwcwwaqymeiwe;
        cacogygqoikeooyg:
        $this->update($owuckwsseckgeweg->key, $owuckwsseckgeweg->data);
        goto eymcqqymeqcwgqea;
        aygsuymqoyigcwse:
        $owuckwsseckgeweg = $this->kycesesquyayogwg();
        goto mqiagimaakecsmqe;
        meiuukwequycmqog:
        $this->delete($owuckwsseckgeweg->key);
        goto ioyaceieouqueusq;
        eymcqqymeqcwgqea:
        qqmiwgcqgccgqsyg:
        goto oyewocgsmcoqokek;
        gamsaysmouyaiqga:
        equwmukmuisgcwgg:
        goto aygsuymqoyigcwse;
        asgkgckgcgaowmqc:
    }
    
    protected function wscswagsquiyigao()
    {
        goto aeyiikqmacugigig;
        umcgeowmcyakagce:
        $kykimuycmcucisac = $this->psweseawgksmugec() * 0.9;
        goto ccqauscokygeseqg;
        oagugomioiouugkg:
        $ksaameoqigiaoigg = true;
        goto ewaaoqsacsuaskso;
        aeyiikqmacugigig:
        $ksaameoqigiaoigg = false;
        goto umcgeowmcyakagce;
        ooymsigkiymussmk:
        if (!($iquygkkomwmwiuqy >= $kykimuycmcucisac)) {
            goto woamusawsweikowo;
        }
        goto oagugomioiouugkg;
        ccqauscokygeseqg:
        
        $iquygkkomwmwiuqy = memory_get_usage(true);
        goto ooymsigkiymussmk;
        ewaaoqsacsuaskso:
        woamusawsweikowo:
        goto ekumegaekiouaqau;
        ekumegaekiouaqau:
        return $this->sscegwueamckwmcy("{$this->eiswegiqykyigwig()}\137\155\x65\155\x6f\x72\x79\137\x65\170\143\145\x65\144\145\x64", $ksaameoqigiaoigg);
        goto mgyysecwqceoeqkc;
        mgyysecwqceoeqkc:
    }
    
    protected function psweseawgksmugec()
    {
        goto coaoysumumkmugqe;
        gsukkgwiogagoeym:
        mqicqmuiucsiwyyu:
        goto qkqgiqqqauueicmg;
        coaoysumumkmugqe:
        if (function_exists("\x69\x6e\151\137\147\x65\164")) {
            goto kaiwcqcgoqgoqmuy;
        }
        goto symeoeugigmiwkss;
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
        
        $kykimuycmcucisac = "\x31\62\70\115";
        goto wwkmcacgmyaswsaw;
        yauqoemesamemoog:
        
        $kykimuycmcucisac = "\x33\62\60\60\60\x4d";
        goto gsukkgwiogagoeym;
        wwkmcacgmyaswsaw:
        goto wiwmyyqikeackcgi;
        goto sgueqceaumcqumye;
        sgueqceaumcqumye:
        kaiwcqcgoqgoqmuy:
        goto uwoeomuksucugygo;
        uwoeomuksucugygo:
        $kykimuycmcucisac = ini_get("\x6d\145\x6d\x6f\x72\171\137\154\x69\155\x69\164");
        goto wwwykymsssmcmkii;
        iweywcmciioqsoka:
    }
    
    protected function egmyoaiiswagkkuw()
    {
        goto gcgokiaeqcqsqogw;
        gcmmwomegsoosqgw:
        return $this->sscegwueamckwmcy("{$this->eiswegiqykyigwig()}\137\x74\151\x6d\x65\137\x65\170\143\x65\145\144\x65\144", $ksaameoqigiaoigg);
        goto ewskyikcqksaoqui;
        myymosmuygkiwagm:
        
        $ksaameoqigiaoigg = false;
        goto cyaiikokmuyugiow;
        gcgokiaeqcqsqogw:
        $eyyawusiwecymiug = $this->yuqoqckgwkaqucqk() + $this->sscegwueamckwmcy("{$this->eiswegiqykyigwig()}\137\x64\x65\x66\141\165\x6c\164\137\x74\151\x6d\145\x5f\x6c\x69\x6d\151\164", 20);
        goto myymosmuygkiwagm;
        cyaiikokmuyugiow:
        if (!(time() >= $eyyawusiwecymiug)) {
            goto cwkqmgykgysmgiyq;
        }
        goto aqwqycaysagwiesw;
        iqyaayumigaguyks:
        cwkqmgykgysmgiyq:
        goto gcmmwomegsoosqgw;
        aqwqycaysagwiesw:
        $ksaameoqigiaoigg = true;
        goto iqyaayumigaguyks;
        ewskyikcqksaoqui:
    }
    
    protected function yuqksmouoaowioyi()
    {
        
        $this->eqcmmyoimqigequa();
    }
    
    public function syyiokomusgeykwu($immuisiomomksweo)
    {
        goto ywwagicseyckmgoc;
        mcaowagyicymmeca:
        $ycooswiwewekokei = $this->sscegwueamckwmcy($this->eiswegiqykyigwig() . "\137\x63\x72\x6f\156\137\151\x6e\x74\x65\162\x76\x61\154", $this->yquogugyqggisgio());
        goto smaosqyeiqocuoqc;
        smaosqyeiqocuoqc:
        iugwuicgyyakcoas:
        goto eowukugguiywsoyq;
        ackekiywiuwuswcg:
        return $immuisiomomksweo;
        goto owssoyiioasuoiwy;
        eowukugguiywsoyq:
        
        $immuisiomomksweo["{$this->eiswegiqykyigwig()}\x5f\x63\162\157\156\x5f\151\156\164\145\162\x76\x61\154"] = ["\x69\156\x74\x65\x72\166\141\154" => MINUTE_IN_SECONDS * $ycooswiwewekokei, "\x64\x69\x73\160\x6c\141\171" => sprintf(__("\105\166\145\x72\171\40\x25\144\x20\115\x69\156\x75\164\145\163"), $ycooswiwewekokei)];
        goto ackekiywiuwuswcg;
        iywakcgekyskmwyq:
        if (!method_exists($this, "\171\161\x75\x6f\147\165\x67\x79\x71\147\x67\151\163\x67\151\x6f")) {
            goto iugwuicgyyakcoas;
        }
        goto mcaowagyicymmeca;
        ywwagicseyckmgoc:
        $ycooswiwewekokei = $this->sscegwueamckwmcy($this->eiswegiqykyigwig() . "\137\x63\x72\157\x6e\x5f\151\x6e\x74\x65\162\x76\x61\154", 5);
        goto iywakcgekyskmwyq;
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
        saugggiieycqisoo:
        if (!$this->yyqyaigucmaueykw()) {
            goto cisygcmgeoiywmus;
        }
        goto imkssyywooioucus;
        qaiekqcmmmomwkay:
        exit;
        goto egoyamquqqewuegi;
        uwgmiksaegmqceyk:
        exit;
        goto amskquyqikemocuo;
        imkssyywooioucus:
        
        exit;
        goto ocmeugiacmiquqme;
        ocmeugiacmiquqme:
        cisygcmgeoiywmus:
        goto uqwywgiauqaiimwa;
        iakkmkweqaagekgo:
        $this->handle();
        goto uwgmiksaegmqceyk;
        qgsskoeisqceyeay:
        
        $this->eqcmmyoimqigequa();
        goto qaiekqcmmmomwkay;
        egoyamquqqewuegi:
        icgakkuyckqesico:
        goto iakkmkweqaagekgo;
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
        yuuwkkqomcewkmma:
        mawocayqcocoacma:
        goto kuecssumeqasoaoo;
        yiqackmqoqegssaa:
        $yiuogaeewyockeak = DecoratorCron::sceqickmyoseqcue($this->swyooakuoqwwiiws());
        goto qygsseugiwqmmyck;
        kccaqkcqoayausew:
        DecoratorCron::swgggegyusmecoky($yiuogaeewyockeak, $this->swyooakuoqwwiiws());
        goto yuuwkkqomcewkmma;
        qygsseugiwqmmyck:
        if (!$yiuogaeewyockeak) {
            goto mawocayqcocoacma;
        }
        goto kccaqkcqoayausew;
        kuecssumeqasoaoo:
    }
    
    public function ywieukewwemywsgi()
    {
        goto mweocegcwiiiwkcs;
        egswysgmqmcsswia:
        wp_clear_scheduled_hook($this->swyooakuoqwwiiws());
        goto ygcassqguceeaako;
        yymkawwocayqmcew:
        $this->delete($owuckwsseckgeweg->key);
        goto egswysgmqmcsswia;
        mweocegcwiiiwkcs:
        if ($this->uuqwmkuaqimkcmei()) {
            goto scwisyammksaguea;
        }
        goto wsooeyooiuqokgwo;
        wsooeyooiuqokgwo:
        $owuckwsseckgeweg = $this->kycesesquyayogwg();
        goto yymkawwocayqmcew;
        amkoayycaiguswem:
        $this->cqscqicucmeamkyq("{$this->wqqseoqcmgkgoiug()}\x5f\x70\162\157\143\x65\x73\x73\x5f\143\141\x6e\x63\x65\154\145\144", $this);
        goto qosuqqceyccekysq;
        ygcassqguceeaako:
        scwisyammksaguea:
        goto amkoayycaiguswem;
        qosuqqceyccekysq:
    }
    
    public abstract function siyykeyqqywuequu($igqsaukqcqscimok);
}
