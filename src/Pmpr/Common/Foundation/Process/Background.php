<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b1e8aa0c03             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Process;

use Pmpr\Common\Foundation\Decorator\DecoratorCron;
use Pmpr\Common\Foundation\Manipulate\ManipulateAjax;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;
use stdClass;

abstract class Background extends Async
{
    const IDENTIFIER_POSTFIX = "\x5f\142\141\164\x63\150\x5f";
    
    protected int $startTime = 0;
    
    protected ?string $cronHookIdentifier = '';
    
    protected ?string $cronIntervalIdentifier = '';
    
    protected ?string $action = "\142\141\x63\153\x67\162\157\x75\x6e\144\137\x70\162\157\143\x65\163\x73";
    public function wigskegsqequoeks()
    {
        goto mkccuoewagiiuaea;
        cuckqumkcguagqoe:
        $this->qcsmikeggeemccuu($this->swyooakuoqwwiiws(), [$this, "\x67\171\x71\x79\x77\x6b\x6f\141\x75\x6f\155\x65\161\151\163\145"]);
        goto gsmyumksyakiggcm;
        sseaggmmkeusqqgm:
        $this->cronIntervalIdentifier = "{$this->eiswegiqykyigwig()}\x5f\x63\162\x6f\156\137\x69\x6e\x74\x65\x72\166\141\154";
        goto cuckqumkcguagqoe;
        gsmyumksyakiggcm:
        parent::wigskegsqequoeks();
        goto uckkymmemmicgwig;
        mkccuoewagiiuaea:
        
        $this->cronHookIdentifier = "{$this->eiswegiqykyigwig()}\x5f\143\162\x6f\156";
        goto sseaggmmkeusqqgm;
        uckkymmemmicgwig:
    }
    public function kgquecmsgcouyaya()
    {
        $this->cecaguuoecmccuse("\143\162\x6f\156\x5f\x73\143\x68\145\x64\165\x6c\x65\163", [$this, "\163\x79\x79\151\x6f\x6b\157\x6d\x75\x73\x67\145\171\153\167\165"]);
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
        goto wcygoekisgskgwiy;
        oeyyggkauuucqwgo:
        return $this;
        goto imsqgqomukkegqka;
        wcygoekisgskgwiy:
        if (!$this->seyyiqmgwymyumoq()) {
            goto ogqewmmmiykuksem;
        }
        goto vskouskskegecgwa;
        ocsiqemkuomayusk:
        ogqewmmmiykuksem:
        goto oeyyggkauuucqwgo;
        vskouskskegecgwa:
        update_site_option($this->gykguuqikwcyouws(), $this->seyyiqmgwymyumoq());
        goto ocsiqemkuomayusk;
        imsqgqomukkegqka:
    }
    
    public function update(string $uusmaiomayssaecw, array $icwicymcioeyeyek = [])
    {
        goto umsskuauuckkimsm;
        qkcoaggwwskkqggy:
        ysequocgiooyuosk:
        goto cigmikkigagaoism;
        kiqmqoqcmswwwmug:
        update_site_option($uusmaiomayssaecw, $icwicymcioeyeyek);
        goto qkcoaggwwskkqggy;
        umsskuauuckkimsm:
        if (!$icwicymcioeyeyek) {
            goto ysequocgiooyuosk;
        }
        goto kiqmqoqcmswwwmug;
        cigmikkigagaoism:
        return $this;
        goto sssomqswysysigko;
        sssomqswysysigko:
    }
    
    public function delete(string $uusmaiomayssaecw)
    {
        delete_site_option($uusmaiomayssaecw);
        return $this;
    }
    
    protected function gykguuqikwcyouws($ykiwomimkkuiigoq = 64)
    {
        goto cyommmwuyyyiqsaa;
        icuukaaeuwwgoymw:
        $mwweeceqggqmogwk = $this->eiswegiqykyigwig() . self::IDENTIFIER_POSTFIX;
        goto uimsyaquwymkcaao;
        cyommmwuyyyiqsaa:
        $omasqoksqewuwwkq = md5(microtime() . rand());
        goto icuukaaeuwwgoymw;
        uimsyaquwymkcaao:
        return substr($mwweeceqggqmogwk . $omasqoksqewuwwkq, 0, $ykiwomimkkuiigoq);
        goto msakgmkaaosagcgc;
        msakgmkaaosagcgc:
    }
    
    public function aqskqeakoauwowwm()
    {
        goto qaqkcsmkgkuieoqq;
        rweicwousieukigk:
        xamgygckoocqmyae:
        goto squwcqweceecssck;
        kooyawcskwoagaqi:
        if (!ManipulateAjax::wqsmsuyggkkyyocc($this->eiswegiqykyigwig(), "\x6e\157\x6e\143\145")) {
            goto xamgygckoocqmyae;
        }
        goto uqcmqacyoyegyica;
        squwcqweceecssck:
        wp_die();
        goto kuouoyaeougsusic;
        yacemkmocmaamgui:
        ocwgmoemmmqwwmoi:
        goto ccoyciugiugeaqea;
        ccoyciugiugeaqea:
        if (!$this->uuqwmkuaqimkcmei()) {
            goto yqkqmmeaasceaaui;
        }
        goto cyemeggkueyokkym;
        uqcmqacyoyegyica:
        $this->handle();
        goto rweicwousieukigk;
        qaqkcsmkgkuieoqq:
        
        session_write_close();
        goto mwegucqywugusieu;
        yogaoogoakmaggii:
        yqkqmmeaasceaaui:
        goto kooyawcskwoagaqi;
        cyemeggkueyokkym:
        
        wp_die();
        goto yogaoogoakmaggii;
        qgqmieaieecsksyo:
        
        wp_die();
        goto yacemkmocmaamgui;
        mwegucqywugusieu:
        if (!$this->yyqyaigucmaueykw()) {
            goto ocwgmoemmmqwwmoi;
        }
        goto qgqmieaieecsksyo;
        kuouoyaeougsusic:
    }
    
    protected function uuqwmkuaqimkcmei()
    {
        goto yqwaggyckkquggqs;
        saiswigiqcyqmgmm:
        gkumkcqesowgysme:
        goto yekkkcaukiossquk;
        yekkkcaukiossquk:
        $uusmaiomayssaecw = $wpdb->esc_like($this->eiswegiqykyigwig() . self::IDENTIFIER_POSTFIX) . "\x25";
        goto qckqqkmgqmyoouuw;
        saagquesokaackwy:
        if (!is_multisite()) {
            goto gkumkcqesowgysme;
        }
        goto aqgeugceemmqaemu;
        ysawmmcgoceiuqmg:
        $qgoqiacsiccwoawi = "\157\x70\x74\151\x6f\156\x5f\156\x61\x6d\x65";
        goto saagquesokaackwy;
        aqgeugceemmqaemu:
        $aasascamegmwqmqk = $wpdb->sitemeta;
        goto ismmcscmkqogkwyo;
        qcaceeoqgiwmegia:
        return $gaeqamemwmwsyukm > 0 ? false : true;
        goto gqwoewuysuocgwku;
        eeqmaiqacegskmae:
        $aasascamegmwqmqk = $wpdb->options;
        goto ysawmmcgoceiuqmg;
        yqwaggyckkquggqs:
        global $wpdb;
        goto eeqmaiqacegskmae;
        ismmcscmkqogkwyo:
        $qgoqiacsiccwoawi = "\155\145\164\141\137\153\145\x79";
        goto saiswigiqcyqmgmm;
        qckqqkmgqmyoouuw:
        $gaeqamemwmwsyukm = $wpdb->get_var($wpdb->prepare("\123\x45\114\105\103\124\40\x43\117\x55\x4e\x54\50\52\51\x20\x46\122\117\115\x20{$aasascamegmwqmqk}\x20\x57\x48\x45\122\105\x20{$qgoqiacsiccwoawi}\40\114\x49\x4b\x45\40\x25\163", $uusmaiomayssaecw));
        goto qcaceeoqgiwmegia;
        gqwoewuysuocgwku:
    }
    
    public function yyqyaigucmaueykw()
    {
        return get_site_transient("{$this->eiswegiqykyigwig()}\x5f\160\162\x6f\x63\x65\163\163\137\x6c\x6f\143\153");
    }
    
    public function aegawcwekgqycoig()
    {
        goto ummccggkuwqiqieu;
        lsggiimkmcoccyqa:
        set_site_transient("{$this->eiswegiqykyigwig()}\137\x70\162\x6f\x63\x65\x73\163\x5f\x6c\x6f\143\x6b", microtime(), $owmuuoycwiskaeme);
        goto iskmaskwiwguswym;
        ummccggkuwqiqieu:
        $this->startTime = time();
        goto qyssyuwuywoyqwso;
        qyssyuwuywoyqwso:
        
        $owmuuoycwiskaeme = method_exists($this, "\x6b\x63\153\x69\x71\x6f\147\x65\155\155\x69\161\161\x71\x65\153") ? $this->kckiqogemmiqqqek() : 60;
        goto qoogiceokacewciw;
        qoogiceokacewciw:
        $owmuuoycwiskaeme = $this->sscegwueamckwmcy("{$this->eiswegiqykyigwig()}\137\161\x75\x65\165\x65\137\154\x6f\x63\153\x5f\x74\x69\155\145", $owmuuoycwiskaeme);
        goto lsggiimkmcoccyqa;
        iskmaskwiwguswym:
    }
    
    public function ycuqagwqkwuuyagc() : Background
    {
        delete_site_transient("{$this->eiswegiqykyigwig()}\137\160\162\157\143\x65\163\x73\137\154\157\143\153");
        return $this;
    }
    
    protected function kycesesquyayogwg()
    {
        goto oumecckuoogcisam;
        aceaseasgiukkmog:
        $gqgemcmoicmgaqie = $wpdb->get_row($wpdb->prepare("\123\x45\114\105\103\124\x20\x2a\x20\106\122\117\x4d\40{$aasascamegmwqmqk}\40\x57\x48\105\x52\105\40{$qgoqiacsiccwoawi}\x20\114\x49\x4b\x45\x20\45\x73\x20\117\x52\104\105\x52\40\x42\131\x20{$ssemgewueawkmcqw}\40\x41\123\x43\40\x4c\x49\115\x49\124\40\61", $uusmaiomayssaecw));
        goto aiymqumesmissmcg;
        iyowacasiugcygyy:
        $ssemgewueawkmcqw = "\155\145\164\x61\x5f\151\x64";
        goto awiysoiaoiuokgwu;
        awiysoiaoiuokgwu:
        $qmiicscguaqeiiow = "\x6d\145\164\x61\x5f\166\x61\154\165\145";
        goto skcckgmwseumsiom;
        isekoekueuaeuaew:
        $aasascamegmwqmqk = $wpdb->options;
        goto queymekwsgcuckek;
        eegcsakukykecaqs:
        $owuckwsseckgeweg->key = $gqgemcmoicmgaqie->{$qgoqiacsiccwoawi};
        goto oycqqwgueqayoiqs;
        aiymqumesmissmcg:
        $owuckwsseckgeweg = new stdClass();
        goto eegcsakukykecaqs;
        kuquukieoauysqes:
        $ssemgewueawkmcqw = "\157\x70\164\x69\157\x6e\137\151\x64";
        goto kwusgqycuoswqwqs;
        cgakgqageuiwqsyk:
        $qgoqiacsiccwoawi = "\x6d\145\x74\x61\137\153\145\171";
        goto iyowacasiugcygyy;
        egqmoeqagueyiqug:
        if (!is_multisite()) {
            goto wyysmocawoaemiew;
        }
        goto ukysouqeuaqacccc;
        iigwwgoaiogqysey:
        $uusmaiomayssaecw = $wpdb->esc_like($this->eiswegiqykyigwig() . self::IDENTIFIER_POSTFIX) . "\x25";
        goto aceaseasgiukkmog;
        oumecckuoogcisam:
        global $wpdb;
        goto isekoekueuaeuaew;
        skcckgmwseumsiom:
        wyysmocawoaemiew:
        goto iigwwgoaiogqysey;
        queymekwsgcuckek:
        $qgoqiacsiccwoawi = "\x6f\x70\164\151\x6f\x6e\x5f\156\141\x6d\x65";
        goto kuquukieoauysqes;
        smgiescoeygeokka:
        return $owuckwsseckgeweg;
        goto meiqskieagikegyk;
        kwusgqycuoswqwqs:
        $qmiicscguaqeiiow = "\x6f\x70\164\x69\x6f\156\x5f\166\x61\x6c\165\x65";
        goto egqmoeqagueyiqug;
        oycqqwgueqayoiqs:
        $owuckwsseckgeweg->data = maybe_unserialize($gqgemcmoicmgaqie->{$qmiicscguaqeiiow});
        goto smgiescoeygeokka;
        ukysouqeuaqacccc:
        $aasascamegmwqmqk = $wpdb->sitemeta;
        goto cgakgqageuiwqsyk;
        meiqskieagikegyk:
    }
    
    protected function handle()
    {
        goto qqmiwgcqgccgqsyg;
        maiioecwmocoiggy:
        uqkuemgmsakoywag:
        goto weciqsgukwuccsqo;
        yeuioyeiyuwqkayk:
        $this->ieyosyaaisyquesq();
        goto ckycsaeqqguawwwi;
        cacogygqoikeooyg:
        ugkggeccqcqagaas:
        goto eymcqqymeqcwgqea;
        qemwgosogkieccqo:
        $owuckwsseckgeweg = $this->kycesesquyayogwg();
        goto kcyqucscowsueeys;
        esumogyswyyqekek:
        isgegieeaowwoykm:
        goto kqmgsgoqugmkumkw;
        weciqsgukwuccsqo:
        $this->yuqksmouoaowioyi();
        goto esumogyswyyqekek;
        kcyqucscowsueeys:
        foreach ($owuckwsseckgeweg->data as $uusmaiomayssaecw => $eqgoocgaqwqcimie) {
            goto kswocgwqsymwqyqa;
            yyykasuqssggyosq:
            if (!($this->egmyoaiiswagkkuw() || $this->wscswagsquiyigao())) {
                goto ckmeygmuimmiegqs;
            }
            goto acmweeyugmqqyokk;
            yekkgsqqsgmkgmms:
            if (false !== $siyykeyqqywuequu) {
                goto equwmukmuisgcwgg;
            }
            goto iiykaqkywwwcaccq;
            kswocgwqsymwqyqa:
            $siyykeyqqywuequu = $this->siyykeyqqywuequu($eqgoocgaqwqcimie);
            goto yekkgsqqsgmkgmms;
            iiykaqkywwwcaccq:
            ManipulateArray::unset($owuckwsseckgeweg->data, $uusmaiomayssaecw);
            goto qyyuoqgmcmamwmyk;
            iqaieccaegoeggii:
            emciiyeqsikycqqa:
            goto cgqyoogsouswccci;
            emggyucsukgwkcgc:
            ckmeygmuimmiegqs:
            goto iqaieccaegoeggii;
            acmweeyugmqqyokk:
            goto cuiegucyaegqkyuq;
            goto emggyucsukgwkcgc;
            ucakoqesgoskmmmm:
            wuqywqumeskyygok:
            goto yyykasuqssggyosq;
            qyyuoqgmcmamwmyk:
            goto wuqywqumeskyygok;
            goto iwqueooewwgeioyq;
            sqscykoomqwyaweu:
            $owuckwsseckgeweg->data[$uusmaiomayssaecw] = $siyykeyqqywuequu;
            goto ucakoqesgoskmmmm;
            iwqueooewwgeioyq:
            equwmukmuisgcwgg:
            goto sqscykoomqwyaweu;
            cgqyoogsouswccci:
        }
        goto gamsaysmouyaiqga;
        qcuwkgcsoeeaakoi:
        egmogkeseuwqokei:
        goto qemwgosogkieccqo;
        aygsuymqoyigcwse:
        
        if ($owuckwsseckgeweg->data) {
            goto hymewosaaisgikci;
        }
        goto mqiagimaakecsmqe;
        wugiyayiwyqyqyse:
        hymewosaaisgikci:
        goto meiuukwequycmqog;
        oyewocgsmcoqokek:
        
        if ($this->uuqwmkuaqimkcmei()) {
            goto uqkuemgmsakoywag;
        }
        goto yeuioyeiyuwqkayk;
        mqiagimaakecsmqe:
        $this->delete($owuckwsseckgeweg->key);
        goto kqoqowksykgissie;
        meiuukwequycmqog:
        $this->update($owuckwsseckgeweg->key, $owuckwsseckgeweg->data);
        goto ioyaceieouqueusq;
        gamsaysmouyaiqga:
        cuiegucyaegqkyuq:
        goto aygsuymqoyigcwse;
        ioyaceieouqueusq:
        cakagawwksoawgcm:
        goto kgawaeyumcuuciqw;
        qqmiwgcqgccgqsyg:
        $this->aegawcwekgqycoig();
        goto qcuwkgcsoeeaakoi;
        kqoqowksykgissie:
        goto cakagawwksoawgcm;
        goto wugiyayiwyqyqyse;
        ckycsaeqqguawwwi:
        goto isgegieeaowwoykm;
        goto maiioecwmocoiggy;
        kgawaeyumcuuciqw:
        if (!$this->egmyoaiiswagkkuw() && !$this->wscswagsquiyigao() && !$this->uuqwmkuaqimkcmei()) {
            goto egmogkeseuwqokei;
        }
        goto cacogygqoikeooyg;
        kqmgsgoqugmkumkw:
        wp_die();
        goto skoaamakmkeyeeso;
        eymcqqymeqcwgqea:
        $this->ycuqagwqkwuuyagc();
        goto oyewocgsmcoqokek;
        skoaamakmkeyeeso:
    }
    
    protected function wscswagsquiyigao()
    {
        goto aqosuiskiicyymim;
        ccqauscokygeseqg:
        yqacwcwwaqymeiwe:
        goto ooymsigkiymussmk;
        ooymsigkiymussmk:
        return $this->sscegwueamckwmcy("{$this->eiswegiqykyigwig()}\x5f\155\145\155\x6f\162\171\x5f\x65\170\143\145\145\144\145\144", $ksaameoqigiaoigg);
        goto oagugomioiouugkg;
        woamusawsweikowo:
        
        $iquygkkomwmwiuqy = memory_get_usage(true);
        goto aeyiikqmacugigig;
        aeyiikqmacugigig:
        if (!($iquygkkomwmwiuqy >= $kykimuycmcucisac)) {
            goto yqacwcwwaqymeiwe;
        }
        goto umcgeowmcyakagce;
        asgkgckgcgaowmqc:
        $kykimuycmcucisac = $this->psweseawgksmugec() * 0.9;
        goto woamusawsweikowo;
        umcgeowmcyakagce:
        $ksaameoqigiaoigg = true;
        goto ccqauscokygeseqg;
        aqosuiskiicyymim:
        $ksaameoqigiaoigg = false;
        goto asgkgckgcgaowmqc;
        oagugomioiouugkg:
    }
    
    protected function psweseawgksmugec()
    {
        goto kaiwcqcgoqgoqmuy;
        uwoeomuksucugygo:
        
        $kykimuycmcucisac = "\63\62\60\60\x30\x4d";
        goto wwwykymsssmcmkii;
        gegewgiwkgmmocua:
        return intval($kykimuycmcucisac) * 1024 * 1024;
        goto yauqoemesamemoog;
        coaoysumumkmugqe:
        ewaaoqsacsuaskso:
        goto symeoeugigmiwkss;
        symeoeugigmiwkss:
        $kykimuycmcucisac = ini_get("\x6d\x65\x6d\157\162\171\x5f\154\151\155\151\x74");
        goto wwkmcacgmyaswsaw;
        wwwykymsssmcmkii:
        mgyysecwqceoeqkc:
        goto gegewgiwkgmmocua;
        wwkmcacgmyaswsaw:
        ekumegaekiouaqau:
        goto sgueqceaumcqumye;
        kaiwcqcgoqgoqmuy:
        if (function_exists("\x69\x6e\151\137\x67\x65\x74")) {
            goto ewaaoqsacsuaskso;
        }
        goto wiwmyyqikeackcgi;
        sgueqceaumcqumye:
        if (!(!$kykimuycmcucisac || -1 === intval($kykimuycmcucisac))) {
            goto mgyysecwqceoeqkc;
        }
        goto uwoeomuksucugygo;
        wiwmyyqikeackcgi:
        
        $kykimuycmcucisac = "\x31\x32\70\x4d";
        goto mqicqmuiucsiwyyu;
        mqicqmuiucsiwyyu:
        goto ekumegaekiouaqau;
        goto coaoysumumkmugqe;
        yauqoemesamemoog:
    }
    
    protected function egmyoaiiswagkkuw()
    {
        goto qkqgiqqqauueicmg;
        cyaiikokmuyugiow:
        return $this->sscegwueamckwmcy("{$this->eiswegiqykyigwig()}\137\164\151\x6d\x65\x5f\145\x78\x63\x65\145\144\x65\x64", $ksaameoqigiaoigg);
        goto aqwqycaysagwiesw;
        qkqgiqqqauueicmg:
        $eyyawusiwecymiug = $this->yuqoqckgwkaqucqk() + $this->sscegwueamckwmcy("{$this->eiswegiqykyigwig()}\x5f\x64\145\x66\141\x75\x6c\164\x5f\164\x69\x6d\145\137\x6c\151\x6d\151\164", 20);
        goto iweywcmciioqsoka;
        gcgokiaeqcqsqogw:
        $ksaameoqigiaoigg = true;
        goto myymosmuygkiwagm;
        iweywcmciioqsoka:
        
        $ksaameoqigiaoigg = false;
        goto cwkqmgykgysmgiyq;
        myymosmuygkiwagm:
        gsukkgwiogagoeym:
        goto cyaiikokmuyugiow;
        cwkqmgykgysmgiyq:
        if (!(time() >= $eyyawusiwecymiug)) {
            goto gsukkgwiogagoeym;
        }
        goto gcgokiaeqcqsqogw;
        aqwqycaysagwiesw:
    }
    
    protected function yuqksmouoaowioyi()
    {
        
        $this->eqcmmyoimqigequa();
    }
    
    public function syyiokomusgeykwu($immuisiomomksweo)
    {
        goto gcmmwomegsoosqgw;
        mcaowagyicymmeca:
        return $immuisiomomksweo;
        goto smaosqyeiqocuoqc;
        ywwagicseyckmgoc:
        iqyaayumigaguyks:
        goto iywakcgekyskmwyq;
        iugwuicgyyakcoas:
        $ycooswiwewekokei = $this->sscegwueamckwmcy($this->eiswegiqykyigwig() . "\137\143\162\x6f\156\x5f\x69\156\164\145\162\166\x61\x6c", $this->yquogugyqggisgio());
        goto ywwagicseyckmgoc;
        iywakcgekyskmwyq:
        
        $immuisiomomksweo["{$this->eiswegiqykyigwig()}\x5f\x63\x72\x6f\156\x5f\151\156\x74\x65\x72\166\x61\x6c"] = ["\x69\156\164\x65\x72\166\141\154" => MINUTE_IN_SECONDS * $ycooswiwewekokei, "\144\x69\x73\160\154\x61\x79" => sprintf(__("\x45\x76\145\x72\x79\x20\x25\144\x20\x4d\x69\x6e\165\x74\145\163"), $ycooswiwewekokei)];
        goto mcaowagyicymmeca;
        ewskyikcqksaoqui:
        if (!method_exists($this, "\x79\x71\165\157\x67\x75\147\x79\x71\x67\x67\151\163\147\151\x6f")) {
            goto iqyaayumigaguyks;
        }
        goto iugwuicgyyakcoas;
        gcmmwomegsoosqgw:
        $ycooswiwewekokei = $this->sscegwueamckwmcy($this->eiswegiqykyigwig() . "\137\x63\x72\x6f\x6e\x5f\x69\156\x74\x65\162\x76\141\x6c", 5);
        goto ewskyikcqksaoqui;
        smaosqyeiqocuoqc:
    }
    
    public function gyqywkoauomeqise()
    {
        goto owssoyiioasuoiwy;
        cisygcmgeoiywmus:
        
        exit;
        goto icgakkuyckqesico;
        owssoyiioasuoiwy:
        if (!$this->yyqyaigucmaueykw()) {
            goto eowukugguiywsoyq;
        }
        goto cisygcmgeoiywmus;
        icgakkuyckqesico:
        eowukugguiywsoyq:
        goto saugggiieycqisoo;
        imkssyywooioucus:
        
        $this->eqcmmyoimqigequa();
        goto ocmeugiacmiquqme;
        qgsskoeisqceyeay:
        $this->handle();
        goto qaiekqcmmmomwkay;
        ocmeugiacmiquqme:
        exit;
        goto uqwywgiauqaiimwa;
        qaiekqcmmmomwkay:
        exit;
        goto egoyamquqqewuegi;
        saugggiieycqisoo:
        if (!$this->uuqwmkuaqimkcmei()) {
            goto ackekiywiuwuswcg;
        }
        goto imkssyywooioucus;
        uqwywgiauqaiimwa:
        ackekiywiuwuswcg:
        goto qgsskoeisqceyeay;
        egoyamquqqewuegi:
    }
    
    protected function uwugaiqywmseksqm()
    {
        goto uwgmiksaegmqceyk;
        qaqimkwawaoyquqo:
        iakkmkweqaagekgo:
        goto skumomgmiegcqycw;
        uwgmiksaegmqceyk:
        if (DecoratorCron::sceqickmyoseqcue($this->swyooakuoqwwiiws())) {
            goto iakkmkweqaagekgo;
        }
        goto amskquyqikemocuo;
        amskquyqikemocuo:
        DecoratorCron::uwugaiqywmseksqm(time(), $this->kmaaqwymiwaikeyi(), $this->swyooakuoqwwiiws());
        goto qaqimkwawaoyquqo;
        skumomgmiegcqycw:
    }
    
    protected function eqcmmyoimqigequa()
    {
        goto wsymeeuaouaawqei;
        yiqackmqoqegssaa:
        wcsmeukkkeykymku:
        goto qygsseugiwqmmyck;
        cmimcccwuucogiaa:
        if (!$yiuogaeewyockeak) {
            goto wcsmeukkkeykymku;
        }
        goto mawocayqcocoacma;
        mawocayqcocoacma:
        DecoratorCron::swgggegyusmecoky($yiuogaeewyockeak, $this->swyooakuoqwwiiws());
        goto yiqackmqoqegssaa;
        wsymeeuaouaawqei:
        $yiuogaeewyockeak = DecoratorCron::sceqickmyoseqcue($this->swyooakuoqwwiiws());
        goto cmimcccwuucogiaa;
        qygsseugiwqmmyck:
    }
    
    public function ywieukewwemywsgi()
    {
        goto yuuwkkqomcewkmma;
        scwisyammksaguea:
        $this->delete($owuckwsseckgeweg->key);
        goto mweocegcwiiiwkcs;
        mweocegcwiiiwkcs:
        wp_clear_scheduled_hook($this->swyooakuoqwwiiws());
        goto wsooeyooiuqokgwo;
        wsooeyooiuqokgwo:
        kccaqkcqoayausew:
        goto yymkawwocayqmcew;
        yymkawwocayqmcew:
        $this->cqscqicucmeamkyq("{$this->wqqseoqcmgkgoiug()}\x5f\x70\162\157\x63\145\x73\163\137\143\x61\x6e\143\x65\x6c\145\144", $this);
        goto egswysgmqmcsswia;
        kuecssumeqasoaoo:
        $owuckwsseckgeweg = $this->kycesesquyayogwg();
        goto scwisyammksaguea;
        yuuwkkqomcewkmma:
        if ($this->uuqwmkuaqimkcmei()) {
            goto kccaqkcqoayausew;
        }
        goto kuecssumeqasoaoo;
        egswysgmqmcsswia:
    }
    
    public abstract function siyykeyqqywuequu($igqsaukqcqscimok);
}
