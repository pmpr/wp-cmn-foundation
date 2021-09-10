<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b499786a1b             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Process;

use Pmpr\Common\Foundation\Decorator\DecoratorCron;
use Pmpr\Common\Foundation\Manipulate\ManipulateAjax;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;
use stdClass;

abstract class Background extends Async
{
    const IDENTIFIER_POSTFIX = "\x5f\142\141\x74\143\150\137";
    
    protected int $startTime = 0;
    
    protected ?string $cronHookIdentifier = '';
    
    protected ?string $cronIntervalIdentifier = '';
    
    protected ?string $action = "\x62\141\x63\153\x67\x72\157\x75\156\144\137\160\162\157\143\145\x73\x73";
    public function wigskegsqequoeks()
    {
        goto gsmyumksyakiggcm;
        gsmyumksyakiggcm:
        
        $this->cronHookIdentifier = "{$this->eiswegiqykyigwig()}\137\x63\162\157\x6e";
        goto uckkymmemmicgwig;
        uckkymmemmicgwig:
        $this->cronIntervalIdentifier = "{$this->eiswegiqykyigwig()}\x5f\143\x72\x6f\x6e\137\x69\x6e\164\145\x72\166\x61\154";
        goto ogqewmmmiykuksem;
        ogqewmmmiykuksem:
        $this->qcsmikeggeemccuu($this->swyooakuoqwwiiws(), [$this, "\147\x79\161\171\x77\x6b\157\141\x75\x6f\x6d\x65\161\x69\163\145"]);
        goto wcygoekisgskgwiy;
        wcygoekisgskgwiy:
        parent::wigskegsqequoeks();
        goto vskouskskegecgwa;
        vskouskskegecgwa:
    }
    public function kgquecmsgcouyaya()
    {
        $this->cecaguuoecmccuse("\x63\x72\157\156\137\163\x63\150\x65\144\165\x6c\145\163", [$this, "\x73\171\x79\x69\x6f\x6b\157\x6d\x75\x73\x67\145\x79\153\167\x75"]);
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
        oeyyggkauuucqwgo:
        if (!$this->seyyiqmgwymyumoq()) {
            goto ocsiqemkuomayusk;
        }
        goto imsqgqomukkegqka;
        imsqgqomukkegqka:
        update_site_option($this->gykguuqikwcyouws(), $this->seyyiqmgwymyumoq());
        goto ysequocgiooyuosk;
        umsskuauuckkimsm:
        return $this;
        goto kiqmqoqcmswwwmug;
        ysequocgiooyuosk:
        ocsiqemkuomayusk:
        goto umsskuauuckkimsm;
        kiqmqoqcmswwwmug:
    }
    
    public function update(string $uusmaiomayssaecw, array $icwicymcioeyeyek = [])
    {
        goto cigmikkigagaoism;
        cyommmwuyyyiqsaa:
        qkcoaggwwskkqggy:
        goto icuukaaeuwwgoymw;
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
        ocwgmoemmmqwwmoi:
        $mwweeceqggqmogwk = $this->eiswegiqykyigwig() . self::IDENTIFIER_POSTFIX;
        goto yqkqmmeaasceaaui;
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
        cyemeggkueyokkym:
        
        wp_die();
        goto yogaoogoakmaggii;
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
        ccoyciugiugeaqea:
        if (!$this->yyqyaigucmaueykw()) {
            goto qaqkcsmkgkuieoqq;
        }
        goto cyemeggkueyokkym;
        rweicwousieukigk:
        mwegucqywugusieu:
        goto squwcqweceecssck;
        yqwaggyckkquggqs:
        wp_die();
        goto eeqmaiqacegskmae;
        yacemkmocmaamgui:
        
        session_write_close();
        goto ccoyciugiugeaqea;
        kooyawcskwoagaqi:
        if (!$this->uuqwmkuaqimkcmei()) {
            goto mwegucqywugusieu;
        }
        goto uqcmqacyoyegyica;
        yogaoogoakmaggii:
        qaqkcsmkgkuieoqq:
        goto kooyawcskwoagaqi;
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
        yekkkcaukiossquk:
        $aasascamegmwqmqk = $wpdb->sitemeta;
        goto qckqqkmgqmyoouuw;
        ismmcscmkqogkwyo:
        $qgoqiacsiccwoawi = "\157\160\x74\151\157\156\137\156\x61\155\145";
        goto saiswigiqcyqmgmm;
        saagquesokaackwy:
        global $wpdb;
        goto aqgeugceemmqaemu;
        qckqqkmgqmyoouuw:
        $qgoqiacsiccwoawi = "\x6d\145\164\x61\137\153\x65\171";
        goto qcaceeoqgiwmegia;
        qyssyuwuywoyqwso:
        return $gaeqamemwmwsyukm > 0 ? false : true;
        goto qoogiceokacewciw;
        saiswigiqcyqmgmm:
        if (!is_multisite()) {
            goto ysawmmcgoceiuqmg;
        }
        goto yekkkcaukiossquk;
        ummccggkuwqiqieu:
        $gaeqamemwmwsyukm = $wpdb->get_var($wpdb->prepare("\x53\105\114\105\x43\x54\x20\103\117\125\x4e\124\x28\52\51\40\106\x52\x4f\115\40{$aasascamegmwqmqk}\x20\x57\110\x45\x52\x45\x20{$qgoqiacsiccwoawi}\x20\x4c\x49\113\105\x20\x25\163", $uusmaiomayssaecw));
        goto qyssyuwuywoyqwso;
        gqwoewuysuocgwku:
        $uusmaiomayssaecw = $wpdb->esc_like($this->eiswegiqykyigwig() . self::IDENTIFIER_POSTFIX) . "\x25";
        goto ummccggkuwqiqieu;
        qoogiceokacewciw:
    }
    
    public function yyqyaigucmaueykw()
    {
        return get_site_transient("{$this->eiswegiqykyigwig()}\x5f\x70\x72\x6f\x63\x65\163\x73\x5f\154\157\x63\153");
    }
    
    public function aegawcwekgqycoig()
    {
        goto lsggiimkmcoccyqa;
        wyysmocawoaemiew:
        $owmuuoycwiskaeme = $this->sscegwueamckwmcy("{$this->eiswegiqykyigwig()}\137\x71\165\145\x75\x65\137\x6c\157\x63\x6b\137\164\x69\155\145", $owmuuoycwiskaeme);
        goto oumecckuoogcisam;
        lsggiimkmcoccyqa:
        $this->startTime = time();
        goto iskmaskwiwguswym;
        oumecckuoogcisam:
        set_site_transient("{$this->eiswegiqykyigwig()}\137\x70\162\157\x63\145\x73\163\x5f\x6c\x6f\x63\x6b", microtime(), $owmuuoycwiskaeme);
        goto isekoekueuaeuaew;
        iskmaskwiwguswym:
        
        $owmuuoycwiskaeme = method_exists($this, "\x6b\x63\153\x69\x71\157\147\x65\x6d\155\x69\x71\161\161\145\153") ? $this->kckiqogemmiqqqek() : 60;
        goto wyysmocawoaemiew;
        isekoekueuaeuaew:
    }
    
    public function ycuqagwqkwuuyagc() : Background
    {
        delete_site_transient("{$this->eiswegiqykyigwig()}\x5f\160\162\157\143\x65\163\163\137\x6c\157\x63\x6b");
        return $this;
    }
    
    protected function kycesesquyayogwg()
    {
        goto kuquukieoauysqes;
        meiqskieagikegyk:
        $owuckwsseckgeweg->key = $gqgemcmoicmgaqie->{$qgoqiacsiccwoawi};
        goto ugkggeccqcqagaas;
        egmogkeseuwqokei:
        return $owuckwsseckgeweg;
        goto cuiegucyaegqkyuq;
        kuquukieoauysqes:
        global $wpdb;
        goto kwusgqycuoswqwqs;
        awiysoiaoiuokgwu:
        $aasascamegmwqmqk = $wpdb->sitemeta;
        goto skcckgmwseumsiom;
        iyowacasiugcygyy:
        if (!is_multisite()) {
            goto queymekwsgcuckek;
        }
        goto awiysoiaoiuokgwu;
        smgiescoeygeokka:
        $owuckwsseckgeweg = new stdClass();
        goto meiqskieagikegyk;
        eegcsakukykecaqs:
        $uusmaiomayssaecw = $wpdb->esc_like($this->eiswegiqykyigwig() . self::IDENTIFIER_POSTFIX) . "\45";
        goto oycqqwgueqayoiqs;
        egqmoeqagueyiqug:
        $qgoqiacsiccwoawi = "\157\x70\164\x69\157\156\x5f\x6e\x61\x6d\145";
        goto ukysouqeuaqacccc;
        ukysouqeuaqacccc:
        $ssemgewueawkmcqw = "\157\x70\164\151\x6f\x6e\x5f\x69\144";
        goto cgakgqageuiwqsyk;
        ugkggeccqcqagaas:
        $owuckwsseckgeweg->data = maybe_unserialize($gqgemcmoicmgaqie->{$qmiicscguaqeiiow});
        goto egmogkeseuwqokei;
        iigwwgoaiogqysey:
        $ssemgewueawkmcqw = "\x6d\145\x74\141\137\151\144";
        goto aceaseasgiukkmog;
        cgakgqageuiwqsyk:
        $qmiicscguaqeiiow = "\x6f\x70\x74\x69\157\156\x5f\x76\141\x6c\x75\145";
        goto iyowacasiugcygyy;
        aceaseasgiukkmog:
        $qmiicscguaqeiiow = "\x6d\x65\164\x61\x5f\x76\x61\154\x75\145";
        goto aiymqumesmissmcg;
        kwusgqycuoswqwqs:
        $aasascamegmwqmqk = $wpdb->options;
        goto egqmoeqagueyiqug;
        aiymqumesmissmcg:
        queymekwsgcuckek:
        goto eegcsakukykecaqs;
        skcckgmwseumsiom:
        $qgoqiacsiccwoawi = "\155\x65\164\141\x5f\x6b\145\171";
        goto iigwwgoaiogqysey;
        oycqqwgueqayoiqs:
        $gqgemcmoicmgaqie = $wpdb->get_row($wpdb->prepare("\x53\x45\114\x45\103\124\40\x2a\40\x46\x52\x4f\115\40{$aasascamegmwqmqk}\x20\127\110\x45\x52\105\x20{$qgoqiacsiccwoawi}\40\x4c\x49\x4b\105\40\x25\x73\40\x4f\122\104\x45\x52\40\102\x59\x20{$ssemgewueawkmcqw}\40\x41\x53\103\x20\x4c\x49\115\x49\x54\x20\x31", $uusmaiomayssaecw));
        goto smgiescoeygeokka;
        cuiegucyaegqkyuq:
    }
    
    protected function handle()
    {
        goto kcyqucscowsueeys;
        skoaamakmkeyeeso:
        $this->yuqksmouoaowioyi();
        goto yqacwcwwaqymeiwe;
        maiioecwmocoiggy:
        
        if ($this->uuqwmkuaqimkcmei()) {
            goto qcuwkgcsoeeaakoi;
        }
        goto weciqsgukwuccsqo;
        ioyaceieouqueusq:
        goto qqmiwgcqgccgqsyg;
        goto kgawaeyumcuuciqw;
        gamsaysmouyaiqga:
        equwmukmuisgcwgg:
        goto aygsuymqoyigcwse;
        esumogyswyyqekek:
        goto qemwgosogkieccqo;
        goto kqmgsgoqugmkumkw;
        kcyqucscowsueeys:
        $this->aegawcwekgqycoig();
        goto gamsaysmouyaiqga;
        mqiagimaakecsmqe:
        foreach ($owuckwsseckgeweg->data as $uusmaiomayssaecw => $eqgoocgaqwqcimie) {
            goto qyyuoqgmcmamwmyk;
            cgqyoogsouswccci:
            goto wuqywqumeskyygok;
            goto hymewosaaisgikci;
            iwqueooewwgeioyq:
            if (false !== $siyykeyqqywuequu) {
                goto kswocgwqsymwqyqa;
            }
            goto sqscykoomqwyaweu;
            sqscykoomqwyaweu:
            ManipulateArray::unset($owuckwsseckgeweg->data, $uusmaiomayssaecw);
            goto ucakoqesgoskmmmm;
            hymewosaaisgikci:
            iiykaqkywwwcaccq:
            goto cakagawwksoawgcm;
            yyykasuqssggyosq:
            kswocgwqsymwqyqa:
            goto acmweeyugmqqyokk;
            cakagawwksoawgcm:
            ckmeygmuimmiegqs:
            goto uqkuemgmsakoywag;
            acmweeyugmqqyokk:
            $owuckwsseckgeweg->data[$uusmaiomayssaecw] = $siyykeyqqywuequu;
            goto emggyucsukgwkcgc;
            iqaieccaegoeggii:
            if (!($this->egmyoaiiswagkkuw() || $this->wscswagsquiyigao())) {
                goto iiykaqkywwwcaccq;
            }
            goto cgqyoogsouswccci;
            qyyuoqgmcmamwmyk:
            $siyykeyqqywuequu = $this->siyykeyqqywuequu($eqgoocgaqwqcimie);
            goto iwqueooewwgeioyq;
            emggyucsukgwkcgc:
            yekkgsqqsgmkgmms:
            goto iqaieccaegoeggii;
            ucakoqesgoskmmmm:
            goto yekkgsqqsgmkgmms;
            goto yyykasuqssggyosq;
            uqkuemgmsakoywag:
        }
        goto kqoqowksykgissie;
        kqoqowksykgissie:
        wuqywqumeskyygok:
        goto wugiyayiwyqyqyse;
        aqosuiskiicyymim:
        wp_die();
        goto asgkgckgcgaowmqc;
        oyewocgsmcoqokek:
        if (!$this->egmyoaiiswagkkuw() && !$this->wscswagsquiyigao() && !$this->uuqwmkuaqimkcmei()) {
            goto equwmukmuisgcwgg;
        }
        goto yeuioyeiyuwqkayk;
        aygsuymqoyigcwse:
        $owuckwsseckgeweg = $this->kycesesquyayogwg();
        goto mqiagimaakecsmqe;
        kqmgsgoqugmkumkw:
        qcuwkgcsoeeaakoi:
        goto skoaamakmkeyeeso;
        yeuioyeiyuwqkayk:
        emciiyeqsikycqqa:
        goto ckycsaeqqguawwwi;
        wugiyayiwyqyqyse:
        
        if ($owuckwsseckgeweg->data) {
            goto isgegieeaowwoykm;
        }
        goto meiuukwequycmqog;
        kgawaeyumcuuciqw:
        isgegieeaowwoykm:
        goto cacogygqoikeooyg;
        cacogygqoikeooyg:
        $this->update($owuckwsseckgeweg->key, $owuckwsseckgeweg->data);
        goto eymcqqymeqcwgqea;
        yqacwcwwaqymeiwe:
        qemwgosogkieccqo:
        goto aqosuiskiicyymim;
        weciqsgukwuccsqo:
        $this->ieyosyaaisyquesq();
        goto esumogyswyyqekek;
        ckycsaeqqguawwwi:
        $this->ycuqagwqkwuuyagc();
        goto maiioecwmocoiggy;
        eymcqqymeqcwgqea:
        qqmiwgcqgccgqsyg:
        goto oyewocgsmcoqokek;
        meiuukwequycmqog:
        $this->delete($owuckwsseckgeweg->key);
        goto ioyaceieouqueusq;
        asgkgckgcgaowmqc:
    }
    
    protected function wscswagsquiyigao()
    {
        goto aeyiikqmacugigig;
        ekumegaekiouaqau:
        return $this->sscegwueamckwmcy("{$this->eiswegiqykyigwig()}\x5f\x6d\x65\155\157\162\171\137\x65\170\x63\x65\x65\x64\x65\144", $ksaameoqigiaoigg);
        goto mgyysecwqceoeqkc;
        umcgeowmcyakagce:
        $kykimuycmcucisac = $this->psweseawgksmugec() * 0.9;
        goto ccqauscokygeseqg;
        aeyiikqmacugigig:
        $ksaameoqigiaoigg = false;
        goto umcgeowmcyakagce;
        ooymsigkiymussmk:
        if (!($iquygkkomwmwiuqy >= $kykimuycmcucisac)) {
            goto woamusawsweikowo;
        }
        goto oagugomioiouugkg;
        oagugomioiouugkg:
        $ksaameoqigiaoigg = true;
        goto ewaaoqsacsuaskso;
        ewaaoqsacsuaskso:
        woamusawsweikowo:
        goto ekumegaekiouaqau;
        ccqauscokygeseqg:
        
        $iquygkkomwmwiuqy = memory_get_usage(true);
        goto ooymsigkiymussmk;
        mgyysecwqceoeqkc:
    }
    
    protected function psweseawgksmugec()
    {
        goto coaoysumumkmugqe;
        yauqoemesamemoog:
        
        $kykimuycmcucisac = "\63\x32\x30\x30\x30\x4d";
        goto gsukkgwiogagoeym;
        gsukkgwiogagoeym:
        mqicqmuiucsiwyyu:
        goto qkqgiqqqauueicmg;
        gegewgiwkgmmocua:
        if (!(!$kykimuycmcucisac || -1 === intval($kykimuycmcucisac))) {
            goto mqicqmuiucsiwyyu;
        }
        goto yauqoemesamemoog;
        wwkmcacgmyaswsaw:
        goto wiwmyyqikeackcgi;
        goto sgueqceaumcqumye;
        qkqgiqqqauueicmg:
        return intval($kykimuycmcucisac) * 1024 * 1024;
        goto iweywcmciioqsoka;
        sgueqceaumcqumye:
        kaiwcqcgoqgoqmuy:
        goto uwoeomuksucugygo;
        coaoysumumkmugqe:
        if (function_exists("\151\x6e\151\137\x67\145\x74")) {
            goto kaiwcqcgoqgoqmuy;
        }
        goto symeoeugigmiwkss;
        symeoeugigmiwkss:
        
        $kykimuycmcucisac = "\x31\62\70\115";
        goto wwkmcacgmyaswsaw;
        wwwykymsssmcmkii:
        wiwmyyqikeackcgi:
        goto gegewgiwkgmmocua;
        uwoeomuksucugygo:
        $kykimuycmcucisac = ini_get("\155\145\155\157\162\171\x5f\154\x69\x6d\151\164");
        goto wwwykymsssmcmkii;
        iweywcmciioqsoka:
    }
    
    protected function egmyoaiiswagkkuw()
    {
        goto gcgokiaeqcqsqogw;
        iqyaayumigaguyks:
        cwkqmgykgysmgiyq:
        goto gcmmwomegsoosqgw;
        cyaiikokmuyugiow:
        if (!(time() >= $eyyawusiwecymiug)) {
            goto cwkqmgykgysmgiyq;
        }
        goto aqwqycaysagwiesw;
        gcgokiaeqcqsqogw:
        $eyyawusiwecymiug = $this->yuqoqckgwkaqucqk() + $this->sscegwueamckwmcy("{$this->eiswegiqykyigwig()}\137\x64\x65\146\141\x75\154\164\x5f\x74\151\155\x65\137\154\151\155\151\x74", 20);
        goto myymosmuygkiwagm;
        gcmmwomegsoosqgw:
        return $this->sscegwueamckwmcy("{$this->eiswegiqykyigwig()}\x5f\x74\151\155\x65\137\145\170\143\145\145\x64\x65\144", $ksaameoqigiaoigg);
        goto ewskyikcqksaoqui;
        myymosmuygkiwagm:
        
        $ksaameoqigiaoigg = false;
        goto cyaiikokmuyugiow;
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
        ywwagicseyckmgoc:
        $ycooswiwewekokei = $this->sscegwueamckwmcy($this->eiswegiqykyigwig() . "\x5f\x63\x72\157\156\137\151\x6e\x74\145\x72\x76\x61\x6c", 5);
        goto iywakcgekyskmwyq;
        smaosqyeiqocuoqc:
        iugwuicgyyakcoas:
        goto eowukugguiywsoyq;
        mcaowagyicymmeca:
        $ycooswiwewekokei = $this->sscegwueamckwmcy($this->eiswegiqykyigwig() . "\x5f\143\x72\157\156\137\x69\156\164\145\162\x76\x61\x6c", $this->yquogugyqggisgio());
        goto smaosqyeiqocuoqc;
        iywakcgekyskmwyq:
        if (!method_exists($this, "\x79\161\x75\x6f\147\x75\147\171\x71\147\x67\x69\163\147\151\x6f")) {
            goto iugwuicgyyakcoas;
        }
        goto mcaowagyicymmeca;
        eowukugguiywsoyq:
        
        $immuisiomomksweo["{$this->eiswegiqykyigwig()}\137\x63\x72\x6f\156\x5f\x69\156\x74\145\162\x76\x61\x6c"] = ["\151\x6e\164\145\x72\166\x61\x6c" => MINUTE_IN_SECONDS * $ycooswiwewekokei, "\x64\151\163\x70\154\141\x79" => sprintf(__("\105\166\145\162\171\40\x25\144\40\115\x69\156\x75\164\145\x73"), $ycooswiwewekokei)];
        goto ackekiywiuwuswcg;
        ackekiywiuwuswcg:
        return $immuisiomomksweo;
        goto owssoyiioasuoiwy;
        owssoyiioasuoiwy:
    }
    
    public function gyqywkoauomeqise()
    {
        goto saugggiieycqisoo;
        saugggiieycqisoo:
        if (!$this->yyqyaigucmaueykw()) {
            goto cisygcmgeoiywmus;
        }
        goto imkssyywooioucus;
        imkssyywooioucus:
        
        exit;
        goto ocmeugiacmiquqme;
        qaiekqcmmmomwkay:
        exit;
        goto egoyamquqqewuegi;
        uwgmiksaegmqceyk:
        exit;
        goto amskquyqikemocuo;
        iakkmkweqaagekgo:
        $this->handle();
        goto uwgmiksaegmqceyk;
        qgsskoeisqceyeay:
        
        $this->eqcmmyoimqigequa();
        goto qaiekqcmmmomwkay;
        uqwywgiauqaiimwa:
        if (!$this->uuqwmkuaqimkcmei()) {
            goto icgakkuyckqesico;
        }
        goto qgsskoeisqceyeay;
        egoyamquqqewuegi:
        icgakkuyckqesico:
        goto iakkmkweqaagekgo;
        ocmeugiacmiquqme:
        cisygcmgeoiywmus:
        goto uqwywgiauqaiimwa;
        amskquyqikemocuo:
    }
    
    protected function uwugaiqywmseksqm()
    {
        goto skumomgmiegcqycw;
        wsymeeuaouaawqei:
        qaqimkwawaoyquqo:
        goto cmimcccwuucogiaa;
        skumomgmiegcqycw:
        if (DecoratorCron::sceqickmyoseqcue($this->swyooakuoqwwiiws())) {
            goto qaqimkwawaoyquqo;
        }
        goto wcsmeukkkeykymku;
        wcsmeukkkeykymku:
        DecoratorCron::uwugaiqywmseksqm(time(), $this->kmaaqwymiwaikeyi(), $this->swyooakuoqwwiiws());
        goto wsymeeuaouaawqei;
        cmimcccwuucogiaa:
    }
    
    protected function eqcmmyoimqigequa()
    {
        goto yiqackmqoqegssaa;
        yuuwkkqomcewkmma:
        mawocayqcocoacma:
        goto kuecssumeqasoaoo;
        kccaqkcqoayausew:
        DecoratorCron::swgggegyusmecoky($yiuogaeewyockeak, $this->swyooakuoqwwiiws());
        goto yuuwkkqomcewkmma;
        yiqackmqoqegssaa:
        $yiuogaeewyockeak = DecoratorCron::sceqickmyoseqcue($this->swyooakuoqwwiiws());
        goto qygsseugiwqmmyck;
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
        ygcassqguceeaako:
        scwisyammksaguea:
        goto amkoayycaiguswem;
        yymkawwocayqmcew:
        $this->delete($owuckwsseckgeweg->key);
        goto egswysgmqmcsswia;
        egswysgmqmcsswia:
        wp_clear_scheduled_hook($this->swyooakuoqwwiiws());
        goto ygcassqguceeaako;
        wsooeyooiuqokgwo:
        $owuckwsseckgeweg = $this->kycesesquyayogwg();
        goto yymkawwocayqmcew;
        mweocegcwiiiwkcs:
        if ($this->uuqwmkuaqimkcmei()) {
            goto scwisyammksaguea;
        }
        goto wsooeyooiuqokgwo;
        amkoayycaiguswem:
        $this->cqscqicucmeamkyq("{$this->wqqseoqcmgkgoiug()}\x5f\160\x72\157\143\145\x73\x73\x5f\143\141\x6e\143\x65\154\x65\144", $this);
        goto qosuqqceyccekysq;
        qosuqqceyccekysq:
    }
    
    public abstract function siyykeyqqywuequu($igqsaukqcqscimok);
}
