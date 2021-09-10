<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b5973b89a9             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Process;

use Pmpr\Common\Foundation\Decorator\DecoratorCron;
use Pmpr\Common\Foundation\Manipulate\ManipulateAjax;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;
use stdClass;

abstract class Background extends Async
{
    const IDENTIFIER_POSTFIX = "\137\x62\141\x74\143\x68\137";
    
    protected int $startTime = 0;
    
    protected ?string $cronHookIdentifier = '';
    
    protected ?string $cronIntervalIdentifier = '';
    
    protected ?string $action = "\x62\141\143\153\x67\x72\x6f\165\156\x64\137\160\x72\157\x63\x65\x73\163";
    public function wigskegsqequoeks()
    {
        goto gsmyumksyakiggcm;
        gsmyumksyakiggcm:
        
        $this->cronHookIdentifier = "{$this->eiswegiqykyigwig()}\137\x63\x72\157\156";
        goto uckkymmemmicgwig;
        uckkymmemmicgwig:
        $this->cronIntervalIdentifier = "{$this->eiswegiqykyigwig()}\137\143\162\157\156\137\151\156\x74\x65\162\x76\x61\154";
        goto ogqewmmmiykuksem;
        wcygoekisgskgwiy:
        parent::wigskegsqequoeks();
        goto vskouskskegecgwa;
        ogqewmmmiykuksem:
        $this->qcsmikeggeemccuu($this->swyooakuoqwwiiws(), [$this, "\x67\171\161\171\167\x6b\x6f\141\165\157\155\145\161\x69\x73\x65"]);
        goto wcygoekisgskgwiy;
        vskouskskegecgwa:
    }
    public function kgquecmsgcouyaya()
    {
        $this->cecaguuoecmccuse("\143\x72\157\156\137\163\143\x68\145\x64\165\x6c\x65\163", [$this, "\x73\171\171\x69\x6f\153\x6f\x6d\x75\163\x67\x65\171\153\167\165"]);
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
        ysequocgiooyuosk:
        ocsiqemkuomayusk:
        goto umsskuauuckkimsm;
        oeyyggkauuucqwgo:
        if (!$this->seyyiqmgwymyumoq()) {
            goto ocsiqemkuomayusk;
        }
        goto imsqgqomukkegqka;
        imsqgqomukkegqka:
        update_site_option($this->gykguuqikwcyouws(), $this->seyyiqmgwymyumoq());
        goto ysequocgiooyuosk;
        kiqmqoqcmswwwmug:
    }
    
    public function update(string $uusmaiomayssaecw, array $icwicymcioeyeyek = [])
    {
        goto cigmikkigagaoism;
        cyommmwuyyyiqsaa:
        qkcoaggwwskkqggy:
        goto icuukaaeuwwgoymw;
        icuukaaeuwwgoymw:
        return $this;
        goto uimsyaquwymkcaao;
        cigmikkigagaoism:
        if (!$icwicymcioeyeyek) {
            goto qkcoaggwwskkqggy;
        }
        goto sssomqswysysigko;
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
        yqwaggyckkquggqs:
        wp_die();
        goto eeqmaiqacegskmae;
        rweicwousieukigk:
        mwegucqywugusieu:
        goto squwcqweceecssck;
        kuouoyaeougsusic:
        $this->handle();
        goto gkumkcqesowgysme;
        squwcqweceecssck:
        if (!ManipulateAjax::wqsmsuyggkkyyocc($this->eiswegiqykyigwig(), "\x6e\x6f\156\143\145")) {
            goto qgqmieaieecsksyo;
        }
        goto kuouoyaeougsusic;
        gkumkcqesowgysme:
        qgqmieaieecsksyo:
        goto yqwaggyckkquggqs;
        kooyawcskwoagaqi:
        if (!$this->uuqwmkuaqimkcmei()) {
            goto mwegucqywugusieu;
        }
        goto uqcmqacyoyegyica;
        yogaoogoakmaggii:
        qaqkcsmkgkuieoqq:
        goto kooyawcskwoagaqi;
        yacemkmocmaamgui:
        
        session_write_close();
        goto ccoyciugiugeaqea;
        cyemeggkueyokkym:
        
        wp_die();
        goto yogaoogoakmaggii;
        ccoyciugiugeaqea:
        if (!$this->yyqyaigucmaueykw()) {
            goto qaqkcsmkgkuieoqq;
        }
        goto cyemeggkueyokkym;
        uqcmqacyoyegyica:
        
        wp_die();
        goto rweicwousieukigk;
        eeqmaiqacegskmae:
    }
    
    protected function uuqwmkuaqimkcmei()
    {
        goto saagquesokaackwy;
        ismmcscmkqogkwyo:
        $qgoqiacsiccwoawi = "\x6f\160\164\151\157\x6e\x5f\x6e\141\x6d\x65";
        goto saiswigiqcyqmgmm;
        gqwoewuysuocgwku:
        $uusmaiomayssaecw = $wpdb->esc_like($this->eiswegiqykyigwig() . self::IDENTIFIER_POSTFIX) . "\x25";
        goto ummccggkuwqiqieu;
        aqgeugceemmqaemu:
        $aasascamegmwqmqk = $wpdb->options;
        goto ismmcscmkqogkwyo;
        yekkkcaukiossquk:
        $aasascamegmwqmqk = $wpdb->sitemeta;
        goto qckqqkmgqmyoouuw;
        saagquesokaackwy:
        global $wpdb;
        goto aqgeugceemmqaemu;
        saiswigiqcyqmgmm:
        if (!is_multisite()) {
            goto ysawmmcgoceiuqmg;
        }
        goto yekkkcaukiossquk;
        qcaceeoqgiwmegia:
        ysawmmcgoceiuqmg:
        goto gqwoewuysuocgwku;
        ummccggkuwqiqieu:
        $gaeqamemwmwsyukm = $wpdb->get_var($wpdb->prepare("\x53\105\x4c\x45\x43\x54\40\x43\x4f\x55\x4e\124\50\52\x29\40\106\122\117\x4d\x20{$aasascamegmwqmqk}\40\x57\110\x45\122\x45\x20{$qgoqiacsiccwoawi}\x20\x4c\x49\113\x45\x20\x25\x73", $uusmaiomayssaecw));
        goto qyssyuwuywoyqwso;
        qckqqkmgqmyoouuw:
        $qgoqiacsiccwoawi = "\155\145\x74\141\137\x6b\145\x79";
        goto qcaceeoqgiwmegia;
        qyssyuwuywoyqwso:
        return $gaeqamemwmwsyukm > 0 ? false : true;
        goto qoogiceokacewciw;
        qoogiceokacewciw:
    }
    
    public function yyqyaigucmaueykw()
    {
        return get_site_transient("{$this->eiswegiqykyigwig()}\137\x70\162\x6f\143\145\163\x73\137\x6c\157\x63\x6b");
    }
    
    public function aegawcwekgqycoig()
    {
        goto lsggiimkmcoccyqa;
        wyysmocawoaemiew:
        $owmuuoycwiskaeme = $this->sscegwueamckwmcy("{$this->eiswegiqykyigwig()}\137\161\165\145\165\145\137\x6c\x6f\143\153\x5f\x74\x69\155\145", $owmuuoycwiskaeme);
        goto oumecckuoogcisam;
        iskmaskwiwguswym:
        
        $owmuuoycwiskaeme = method_exists($this, "\153\x63\153\151\161\157\x67\145\x6d\155\x69\161\161\x71\x65\x6b") ? $this->kckiqogemmiqqqek() : 60;
        goto wyysmocawoaemiew;
        oumecckuoogcisam:
        set_site_transient("{$this->eiswegiqykyigwig()}\137\x70\x72\x6f\143\x65\163\x73\137\x6c\157\x63\153", microtime(), $owmuuoycwiskaeme);
        goto isekoekueuaeuaew;
        lsggiimkmcoccyqa:
        $this->startTime = time();
        goto iskmaskwiwguswym;
        isekoekueuaeuaew:
    }
    
    public function ycuqagwqkwuuyagc() : Background
    {
        delete_site_transient("{$this->eiswegiqykyigwig()}\137\x70\x72\x6f\x63\145\163\163\137\154\x6f\x63\x6b");
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
        smgiescoeygeokka:
        $owuckwsseckgeweg = new stdClass();
        goto meiqskieagikegyk;
        skcckgmwseumsiom:
        $qgoqiacsiccwoawi = "\155\x65\164\141\x5f\x6b\145\x79";
        goto iigwwgoaiogqysey;
        ugkggeccqcqagaas:
        $owuckwsseckgeweg->data = maybe_unserialize($gqgemcmoicmgaqie->{$qmiicscguaqeiiow});
        goto egmogkeseuwqokei;
        awiysoiaoiuokgwu:
        $aasascamegmwqmqk = $wpdb->sitemeta;
        goto skcckgmwseumsiom;
        kuquukieoauysqes:
        global $wpdb;
        goto kwusgqycuoswqwqs;
        aceaseasgiukkmog:
        $qmiicscguaqeiiow = "\x6d\145\x74\141\x5f\x76\x61\x6c\x75\x65";
        goto aiymqumesmissmcg;
        ukysouqeuaqacccc:
        $ssemgewueawkmcqw = "\x6f\160\x74\151\x6f\x6e\x5f\x69\x64";
        goto cgakgqageuiwqsyk;
        egmogkeseuwqokei:
        return $owuckwsseckgeweg;
        goto cuiegucyaegqkyuq;
        eegcsakukykecaqs:
        $uusmaiomayssaecw = $wpdb->esc_like($this->eiswegiqykyigwig() . self::IDENTIFIER_POSTFIX) . "\x25";
        goto oycqqwgueqayoiqs;
        egqmoeqagueyiqug:
        $qgoqiacsiccwoawi = "\157\160\x74\151\157\156\x5f\x6e\141\x6d\x65";
        goto ukysouqeuaqacccc;
        oycqqwgueqayoiqs:
        $gqgemcmoicmgaqie = $wpdb->get_row($wpdb->prepare("\123\x45\114\x45\103\124\40\52\x20\106\122\117\115\40{$aasascamegmwqmqk}\x20\127\x48\105\x52\x45\x20{$qgoqiacsiccwoawi}\x20\114\111\113\x45\40\45\163\40\x4f\x52\x44\105\x52\x20\102\131\40{$ssemgewueawkmcqw}\40\101\x53\x43\x20\114\x49\115\111\x54\x20\61", $uusmaiomayssaecw));
        goto smgiescoeygeokka;
        cgakgqageuiwqsyk:
        $qmiicscguaqeiiow = "\157\160\x74\x69\x6f\156\x5f\x76\141\x6c\x75\x65";
        goto iyowacasiugcygyy;
        aiymqumesmissmcg:
        queymekwsgcuckek:
        goto eegcsakukykecaqs;
        meiqskieagikegyk:
        $owuckwsseckgeweg->key = $gqgemcmoicmgaqie->{$qgoqiacsiccwoawi};
        goto ugkggeccqcqagaas;
        iigwwgoaiogqysey:
        $ssemgewueawkmcqw = "\x6d\145\x74\x61\x5f\151\144";
        goto aceaseasgiukkmog;
        kwusgqycuoswqwqs:
        $aasascamegmwqmqk = $wpdb->options;
        goto egqmoeqagueyiqug;
        cuiegucyaegqkyuq:
    }
    
    protected function handle()
    {
        goto kcyqucscowsueeys;
        kqoqowksykgissie:
        wuqywqumeskyygok:
        goto wugiyayiwyqyqyse;
        wugiyayiwyqyqyse:
        
        if ($owuckwsseckgeweg->data) {
            goto isgegieeaowwoykm;
        }
        goto meiuukwequycmqog;
        yqacwcwwaqymeiwe:
        qemwgosogkieccqo:
        goto aqosuiskiicyymim;
        oyewocgsmcoqokek:
        if (!$this->egmyoaiiswagkkuw() && !$this->wscswagsquiyigao() && !$this->uuqwmkuaqimkcmei()) {
            goto equwmukmuisgcwgg;
        }
        goto yeuioyeiyuwqkayk;
        meiuukwequycmqog:
        $this->delete($owuckwsseckgeweg->key);
        goto ioyaceieouqueusq;
        yeuioyeiyuwqkayk:
        emciiyeqsikycqqa:
        goto ckycsaeqqguawwwi;
        esumogyswyyqekek:
        goto qemwgosogkieccqo;
        goto kqmgsgoqugmkumkw;
        kgawaeyumcuuciqw:
        isgegieeaowwoykm:
        goto cacogygqoikeooyg;
        ioyaceieouqueusq:
        goto qqmiwgcqgccgqsyg;
        goto kgawaeyumcuuciqw;
        maiioecwmocoiggy:
        
        if ($this->uuqwmkuaqimkcmei()) {
            goto qcuwkgcsoeeaakoi;
        }
        goto weciqsgukwuccsqo;
        mqiagimaakecsmqe:
        foreach ($owuckwsseckgeweg->data as $uusmaiomayssaecw => $eqgoocgaqwqcimie) {
            goto qyyuoqgmcmamwmyk;
            qyyuoqgmcmamwmyk:
            $siyykeyqqywuequu = $this->siyykeyqqywuequu($eqgoocgaqwqcimie);
            goto iwqueooewwgeioyq;
            hymewosaaisgikci:
            iiykaqkywwwcaccq:
            goto cakagawwksoawgcm;
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
            yyykasuqssggyosq:
            kswocgwqsymwqyqa:
            goto acmweeyugmqqyokk;
            acmweeyugmqqyokk:
            $owuckwsseckgeweg->data[$uusmaiomayssaecw] = $siyykeyqqywuequu;
            goto emggyucsukgwkcgc;
            sqscykoomqwyaweu:
            ManipulateArray::unset($owuckwsseckgeweg->data, $uusmaiomayssaecw);
            goto ucakoqesgoskmmmm;
            ucakoqesgoskmmmm:
            goto yekkgsqqsgmkgmms;
            goto yyykasuqssggyosq;
            iwqueooewwgeioyq:
            if (false !== $siyykeyqqywuequu) {
                goto kswocgwqsymwqyqa;
            }
            goto sqscykoomqwyaweu;
            cakagawwksoawgcm:
            ckmeygmuimmiegqs:
            goto uqkuemgmsakoywag;
            uqkuemgmsakoywag:
        }
        goto kqoqowksykgissie;
        kqmgsgoqugmkumkw:
        qcuwkgcsoeeaakoi:
        goto skoaamakmkeyeeso;
        weciqsgukwuccsqo:
        $this->ieyosyaaisyquesq();
        goto esumogyswyyqekek;
        eymcqqymeqcwgqea:
        qqmiwgcqgccgqsyg:
        goto oyewocgsmcoqokek;
        aqosuiskiicyymim:
        wp_die();
        goto asgkgckgcgaowmqc;
        skoaamakmkeyeeso:
        $this->yuqksmouoaowioyi();
        goto yqacwcwwaqymeiwe;
        gamsaysmouyaiqga:
        equwmukmuisgcwgg:
        goto aygsuymqoyigcwse;
        aygsuymqoyigcwse:
        $owuckwsseckgeweg = $this->kycesesquyayogwg();
        goto mqiagimaakecsmqe;
        cacogygqoikeooyg:
        $this->update($owuckwsseckgeweg->key, $owuckwsseckgeweg->data);
        goto eymcqqymeqcwgqea;
        ckycsaeqqguawwwi:
        $this->ycuqagwqkwuuyagc();
        goto maiioecwmocoiggy;
        kcyqucscowsueeys:
        $this->aegawcwekgqycoig();
        goto gamsaysmouyaiqga;
        asgkgckgcgaowmqc:
    }
    
    protected function wscswagsquiyigao()
    {
        goto aeyiikqmacugigig;
        ekumegaekiouaqau:
        return $this->sscegwueamckwmcy("{$this->eiswegiqykyigwig()}\137\155\145\155\x6f\x72\x79\x5f\x65\x78\143\x65\x65\x64\145\144", $ksaameoqigiaoigg);
        goto mgyysecwqceoeqkc;
        umcgeowmcyakagce:
        $kykimuycmcucisac = $this->psweseawgksmugec() * 0.9;
        goto ccqauscokygeseqg;
        oagugomioiouugkg:
        $ksaameoqigiaoigg = true;
        goto ewaaoqsacsuaskso;
        ccqauscokygeseqg:
        
        $iquygkkomwmwiuqy = memory_get_usage(true);
        goto ooymsigkiymussmk;
        ooymsigkiymussmk:
        if (!($iquygkkomwmwiuqy >= $kykimuycmcucisac)) {
            goto woamusawsweikowo;
        }
        goto oagugomioiouugkg;
        ewaaoqsacsuaskso:
        woamusawsweikowo:
        goto ekumegaekiouaqau;
        aeyiikqmacugigig:
        $ksaameoqigiaoigg = false;
        goto umcgeowmcyakagce;
        mgyysecwqceoeqkc:
    }
    
    protected function psweseawgksmugec()
    {
        goto coaoysumumkmugqe;
        wwwykymsssmcmkii:
        wiwmyyqikeackcgi:
        goto gegewgiwkgmmocua;
        symeoeugigmiwkss:
        
        $kykimuycmcucisac = "\x31\62\x38\x4d";
        goto wwkmcacgmyaswsaw;
        uwoeomuksucugygo:
        $kykimuycmcucisac = ini_get("\x6d\145\155\157\162\x79\137\154\151\x6d\151\x74");
        goto wwwykymsssmcmkii;
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
        sgueqceaumcqumye:
        kaiwcqcgoqgoqmuy:
        goto uwoeomuksucugygo;
        coaoysumumkmugqe:
        if (function_exists("\x69\x6e\151\x5f\147\145\x74")) {
            goto kaiwcqcgoqgoqmuy;
        }
        goto symeoeugigmiwkss;
        qkqgiqqqauueicmg:
        return intval($kykimuycmcucisac) * 1024 * 1024;
        goto iweywcmciioqsoka;
        yauqoemesamemoog:
        
        $kykimuycmcucisac = "\63\x32\60\x30\x30\x4d";
        goto gsukkgwiogagoeym;
        iweywcmciioqsoka:
    }
    
    protected function egmyoaiiswagkkuw()
    {
        goto gcgokiaeqcqsqogw;
        iqyaayumigaguyks:
        cwkqmgykgysmgiyq:
        goto gcmmwomegsoosqgw;
        gcmmwomegsoosqgw:
        return $this->sscegwueamckwmcy("{$this->eiswegiqykyigwig()}\x5f\x74\151\155\x65\x5f\x65\x78\143\x65\x65\x64\145\x64", $ksaameoqigiaoigg);
        goto ewskyikcqksaoqui;
        cyaiikokmuyugiow:
        if (!(time() >= $eyyawusiwecymiug)) {
            goto cwkqmgykgysmgiyq;
        }
        goto aqwqycaysagwiesw;
        aqwqycaysagwiesw:
        $ksaameoqigiaoigg = true;
        goto iqyaayumigaguyks;
        myymosmuygkiwagm:
        
        $ksaameoqigiaoigg = false;
        goto cyaiikokmuyugiow;
        gcgokiaeqcqsqogw:
        $eyyawusiwecymiug = $this->yuqoqckgwkaqucqk() + $this->sscegwueamckwmcy("{$this->eiswegiqykyigwig()}\137\x64\x65\146\x61\x75\154\x74\137\x74\x69\x6d\x65\x5f\x6c\151\x6d\x69\x74", 20);
        goto myymosmuygkiwagm;
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
        $ycooswiwewekokei = $this->sscegwueamckwmcy($this->eiswegiqykyigwig() . "\x5f\x63\x72\x6f\156\137\151\156\x74\x65\x72\x76\141\154", $this->yquogugyqggisgio());
        goto smaosqyeiqocuoqc;
        smaosqyeiqocuoqc:
        iugwuicgyyakcoas:
        goto eowukugguiywsoyq;
        ackekiywiuwuswcg:
        return $immuisiomomksweo;
        goto owssoyiioasuoiwy;
        ywwagicseyckmgoc:
        $ycooswiwewekokei = $this->sscegwueamckwmcy($this->eiswegiqykyigwig() . "\137\143\x72\x6f\x6e\137\151\x6e\x74\x65\x72\166\x61\154", 5);
        goto iywakcgekyskmwyq;
        iywakcgekyskmwyq:
        if (!method_exists($this, "\171\161\x75\157\x67\x75\x67\x79\x71\x67\147\151\x73\147\x69\157")) {
            goto iugwuicgyyakcoas;
        }
        goto mcaowagyicymmeca;
        eowukugguiywsoyq:
        
        $immuisiomomksweo["{$this->eiswegiqykyigwig()}\x5f\143\162\x6f\156\x5f\151\156\x74\x65\162\x76\141\154"] = ["\x69\156\164\x65\162\x76\141\x6c" => MINUTE_IN_SECONDS * $ycooswiwewekokei, "\144\x69\x73\x70\x6c\x61\x79" => sprintf(__("\x45\166\145\162\x79\x20\x25\x64\x20\x4d\x69\156\165\164\x65\x73"), $ycooswiwewekokei)];
        goto ackekiywiuwuswcg;
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
        qgsskoeisqceyeay:
        
        $this->eqcmmyoimqigequa();
        goto qaiekqcmmmomwkay;
        egoyamquqqewuegi:
        icgakkuyckqesico:
        goto iakkmkweqaagekgo;
        ocmeugiacmiquqme:
        cisygcmgeoiywmus:
        goto uqwywgiauqaiimwa;
        qaiekqcmmmomwkay:
        exit;
        goto egoyamquqqewuegi;
        iakkmkweqaagekgo:
        $this->handle();
        goto uwgmiksaegmqceyk;
        uqwywgiauqaiimwa:
        if (!$this->uuqwmkuaqimkcmei()) {
            goto icgakkuyckqesico;
        }
        goto qgsskoeisqceyeay;
        uwgmiksaegmqceyk:
        exit;
        goto amskquyqikemocuo;
        amskquyqikemocuo:
    }
    
    protected function uwugaiqywmseksqm()
    {
        goto skumomgmiegcqycw;
        wcsmeukkkeykymku:
        DecoratorCron::uwugaiqywmseksqm(time(), $this->kmaaqwymiwaikeyi(), $this->swyooakuoqwwiiws());
        goto wsymeeuaouaawqei;
        skumomgmiegcqycw:
        if (DecoratorCron::sceqickmyoseqcue($this->swyooakuoqwwiiws())) {
            goto qaqimkwawaoyquqo;
        }
        goto wcsmeukkkeykymku;
        wsymeeuaouaawqei:
        qaqimkwawaoyquqo:
        goto cmimcccwuucogiaa;
        cmimcccwuucogiaa:
    }
    
    protected function eqcmmyoimqigequa()
    {
        goto yiqackmqoqegssaa;
        qygsseugiwqmmyck:
        if (!$yiuogaeewyockeak) {
            goto mawocayqcocoacma;
        }
        goto kccaqkcqoayausew;
        yuuwkkqomcewkmma:
        mawocayqcocoacma:
        goto kuecssumeqasoaoo;
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
        ygcassqguceeaako:
        scwisyammksaguea:
        goto amkoayycaiguswem;
        egswysgmqmcsswia:
        wp_clear_scheduled_hook($this->swyooakuoqwwiiws());
        goto ygcassqguceeaako;
        mweocegcwiiiwkcs:
        if ($this->uuqwmkuaqimkcmei()) {
            goto scwisyammksaguea;
        }
        goto wsooeyooiuqokgwo;
        yymkawwocayqmcew:
        $this->delete($owuckwsseckgeweg->key);
        goto egswysgmqmcsswia;
        wsooeyooiuqokgwo:
        $owuckwsseckgeweg = $this->kycesesquyayogwg();
        goto yymkawwocayqmcew;
        amkoayycaiguswem:
        $this->cqscqicucmeamkyq("{$this->wqqseoqcmgkgoiug()}\137\160\162\157\x63\x65\163\x73\x5f\143\x61\156\143\145\x6c\x65\144", $this);
        goto qosuqqceyccekysq;
        qosuqqceyccekysq:
    }
    
    public abstract function siyykeyqqywuequu($igqsaukqcqscimok);
}
