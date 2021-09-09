<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613a1be32d755             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Process;

use Pmpr\Common\Foundation\Decorator\DecoratorCron;
use Pmpr\Common\Foundation\Manipulate\ManipulateAjax;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;
use stdClass;

abstract class Background extends Async
{
    const IDENTIFIER_POSTFIX = "\137\142\141\164\x63\x68\x5f";
    
    protected int $startTime = 0;
    
    protected ?string $cronHookIdentifier = '';
    
    protected ?string $cronIntervalIdentifier = '';
    
    protected ?string $action = "\x62\141\143\153\147\x72\157\165\x6e\144\137\x70\x72\157\x63\x65\163\163";
    public function wigskegsqequoeks()
    {
        goto iusacogsuyamauuw;
        skamksaaqymicwgm:
        $this->cronIntervalIdentifier = "{$this->eiswegiqykyigwig()}\x5f\143\162\157\156\x5f\x69\156\x74\145\x72\x76\x61\154";
        goto umymemssaqquqisa;
        umymemssaqquqisa:
        $this->qcsmikeggeemccuu($this->swyooakuoqwwiiws(), [$this, "\147\171\161\x79\167\153\x6f\141\165\x6f\155\x65\161\x69\163\x65"]);
        goto asywiwgmyyoikyke;
        iusacogsuyamauuw:
        
        $this->cronHookIdentifier = "{$this->eiswegiqykyigwig()}\137\143\162\157\x6e";
        goto skamksaaqymicwgm;
        asywiwgmyyoikyke:
        parent::wigskegsqequoeks();
        goto sucgueksmmwgekau;
        sucgueksmmwgekau:
    }
    public function kgquecmsgcouyaya()
    {
        $this->cecaguuoecmccuse("\143\162\x6f\x6e\x5f\x73\x63\150\x65\x64\165\154\x65\x73", [$this, "\163\171\x79\151\157\153\x6f\x6d\x75\163\147\x65\171\153\x77\165"]);
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
        goto eakyagcgwegumqqq;
        ymasgcocsigmuwoc:
        update_site_option($this->gykguuqikwcyouws(), $this->seyyiqmgwymyumoq());
        goto ssuiuyiqqcwciysg;
        ymamscycaiaguigo:
        return $this;
        goto kqiiyyqmssquuoic;
        eakyagcgwegumqqq:
        if (!$this->seyyiqmgwymyumoq()) {
            goto egkqesmwiiaqiiyc;
        }
        goto ymasgcocsigmuwoc;
        ssuiuyiqqcwciysg:
        egkqesmwiiaqiiyc:
        goto ymamscycaiaguigo;
        kqiiyyqmssquuoic:
    }
    
    public function update(string $uusmaiomayssaecw, array $icwicymcioeyeyek = [])
    {
        goto gwgqcomgikwoquyy;
        aouekkmogmyoeguw:
        update_site_option($uusmaiomayssaecw, $icwicymcioeyeyek);
        goto imkoimywaemoquiu;
        ycemmsosewuoyiqs:
        return $this;
        goto aqimagkgyewmgkyw;
        gwgqcomgikwoquyy:
        if (!$icwicymcioeyeyek) {
            goto oeuqcqkguageoagc;
        }
        goto aouekkmogmyoeguw;
        imkoimywaemoquiu:
        oeuqcqkguageoagc:
        goto ycemmsosewuoyiqs;
        aqimagkgyewmgkyw:
    }
    
    public function delete(string $uusmaiomayssaecw)
    {
        delete_site_option($uusmaiomayssaecw);
        return $this;
    }
    
    protected function gykguuqikwcyouws($ykiwomimkkuiigoq = 64)
    {
        goto cywkuyeqqawqwgwo;
        wqkekssiaiaqkqck:
        return substr($mwweeceqggqmogwk . $omasqoksqewuwwkq, 0, $ykiwomimkkuiigoq);
        goto wgagqmumyekewuge;
        cywkuyeqqawqwgwo:
        $omasqoksqewuwwkq = md5(microtime() . rand());
        goto kiswkeissywuosao;
        kiswkeissywuosao:
        $mwweeceqggqmogwk = $this->eiswegiqykyigwig() . self::IDENTIFIER_POSTFIX;
        goto wqkekssiaiaqkqck;
        wgagqmumyekewuge:
    }
    
    public function aqskqeakoauwowwm()
    {
        goto kysgwgoeaoiyaqea;
        yaeakiwsegsacsge:
        gscssgigiaqmgiuw:
        goto mqeykkkeiygqugcq;
        muqyyaqmeuimcuey:
        muiggeckwwywcusy:
        goto kasewecuqyooymwi;
        mkwemyioswykkqyc:
        
        wp_die();
        goto muqyyaqmeuimcuey;
        scssmwmagsaouymy:
        if (!$this->yyqyaigucmaueykw()) {
            goto gscssgigiaqmgiuw;
        }
        goto gsymoqgeekuqeiia;
        gimsqaumkeequwwu:
        wcosqycukygikgsa:
        goto iaamqeeowsgwogau;
        gsymoqgeekuqeiia:
        
        wp_die();
        goto yaeakiwsegsacsge;
        iaamqeeowsgwogau:
        wp_die();
        goto syweyeiawwgmkmio;
        kasewecuqyooymwi:
        if (!ManipulateAjax::wqsmsuyggkkyyocc($this->eiswegiqykyigwig(), "\156\157\x6e\x63\145")) {
            goto wcosqycukygikgsa;
        }
        goto yqoaamqqqokguyis;
        yqoaamqqqokguyis:
        $this->handle();
        goto gimsqaumkeequwwu;
        mqeykkkeiygqugcq:
        if (!$this->uuqwmkuaqimkcmei()) {
            goto muiggeckwwywcusy;
        }
        goto mkwemyioswykkqyc;
        kysgwgoeaoiyaqea:
        
        session_write_close();
        goto scssmwmagsaouymy;
        syweyeiawwgmkmio:
    }
    
    protected function uuqwmkuaqimkcmei()
    {
        goto oyaequqoiqwmagqe;
        kaosyomgqswqeyue:
        $uusmaiomayssaecw = $wpdb->esc_like($this->eiswegiqykyigwig() . self::IDENTIFIER_POSTFIX) . "\x25";
        goto iagcgqyssmegamqo;
        oyaequqoiqwmagqe:
        global $wpdb;
        goto imoeyqywqygoeigm;
        ioqyoqsseocgsiki:
        return $gaeqamemwmwsyukm > 0 ? false : true;
        goto giswiemqquiigucy;
        wkquwqwsswuayeoy:
        $aasascamegmwqmqk = $wpdb->sitemeta;
        goto uwguwaeqqmissegu;
        csiucioiukwwmmki:
        akaeugoqiowqeiay:
        goto kaosyomgqswqeyue;
        iagcgqyssmegamqo:
        $gaeqamemwmwsyukm = $wpdb->get_var($wpdb->prepare("\x53\x45\114\x45\103\x54\x20\103\x4f\x55\116\x54\x28\52\51\x20\x46\122\x4f\115\40{$aasascamegmwqmqk}\x20\x57\110\x45\122\x45\40{$qgoqiacsiccwoawi}\x20\x4c\111\113\105\x20\x25\x73", $uusmaiomayssaecw));
        goto ioqyoqsseocgsiki;
        uwguwaeqqmissegu:
        $qgoqiacsiccwoawi = "\155\x65\164\141\x5f\153\x65\171";
        goto csiucioiukwwmmki;
        imoeyqywqygoeigm:
        $aasascamegmwqmqk = $wpdb->options;
        goto ommcauiiosgwswii;
        ommcauiiosgwswii:
        $qgoqiacsiccwoawi = "\x6f\160\x74\151\157\x6e\x5f\x6e\x61\x6d\145";
        goto gagkmiwkumaccqog;
        gagkmiwkumaccqog:
        if (!is_multisite()) {
            goto akaeugoqiowqeiay;
        }
        goto wkquwqwsswuayeoy;
        giswiemqquiigucy:
    }
    
    public function yyqyaigucmaueykw()
    {
        return get_site_transient("{$this->eiswegiqykyigwig()}\137\160\162\157\x63\x65\x73\x73\x5f\x6c\157\x63\153");
    }
    
    public function aegawcwekgqycoig()
    {
        goto cwqeoeeoiggkocks;
        pscgmkuecmwkakcs:
        $owmuuoycwiskaeme = $this->sscegwueamckwmcy("{$this->eiswegiqykyigwig()}\x5f\161\165\x65\165\145\137\x6c\157\143\153\x5f\164\151\155\145", $owmuuoycwiskaeme);
        goto yysaoyaeyoyiwaao;
        qaqaieuiuemceagu:
        
        $owmuuoycwiskaeme = method_exists($this, "\x6b\143\x6b\151\x71\157\x67\145\155\x6d\151\161\x71\x71\145\153") ? $this->kckiqogemmiqqqek() : 60;
        goto pscgmkuecmwkakcs;
        yysaoyaeyoyiwaao:
        set_site_transient("{$this->eiswegiqykyigwig()}\137\x70\x72\157\143\x65\163\163\x5f\154\x6f\143\153", microtime(), $owmuuoycwiskaeme);
        goto gsaqgmmoiyoqcqge;
        cwqeoeeoiggkocks:
        $this->startTime = time();
        goto qaqaieuiuemceagu;
        gsaqgmmoiyoqcqge:
    }
    
    public function ycuqagwqkwuuyagc() : Background
    {
        delete_site_transient("{$this->eiswegiqykyigwig()}\137\x70\x72\x6f\x63\x65\163\x73\137\154\157\x63\153");
        return $this;
    }
    
    protected function kycesesquyayogwg()
    {
        goto muoasgcackyqmwya;
        weccgwumycqumocm:
        $gqgemcmoicmgaqie = $wpdb->get_row($wpdb->prepare("\x53\x45\x4c\x45\103\x54\x20\x2a\40\106\x52\117\x4d\x20{$aasascamegmwqmqk}\x20\127\x48\105\x52\105\x20{$qgoqiacsiccwoawi}\x20\114\x49\113\105\40\45\x73\x20\x4f\122\104\105\122\x20\102\131\40{$ssemgewueawkmcqw}\40\101\123\x43\40\114\x49\115\111\124\x20\61", $uusmaiomayssaecw));
        goto syiauiggwuycaaus;
        aqagyoekusowaige:
        $owuckwsseckgeweg->key = $gqgemcmoicmgaqie->{$qgoqiacsiccwoawi};
        goto mkccuoewagiiuaea;
        aoyeggqisqucyycw:
        $ssemgewueawkmcqw = "\x6f\x70\164\151\157\156\x5f\x69\x64";
        goto kqyauuewaeqaaemq;
        ycsqqcuwcamsswio:
        $qgoqiacsiccwoawi = "\157\160\164\151\157\156\x5f\156\x61\x6d\x65";
        goto aoyeggqisqucyycw;
        kqyauuewaeqaaemq:
        $qmiicscguaqeiiow = "\157\x70\x74\151\x6f\156\137\166\141\154\165\x65";
        goto uimkessmquwwowuy;
        gmgiugscseeqmcws:
        $aasascamegmwqmqk = $wpdb->sitemeta;
        goto cgskgkccqqoeqwek;
        mkccuoewagiiuaea:
        $owuckwsseckgeweg->data = maybe_unserialize($gqgemcmoicmgaqie->{$qmiicscguaqeiiow});
        goto sseaggmmkeusqqgm;
        muoasgcackyqmwya:
        global $wpdb;
        goto gkgaqgyiuuggesqi;
        uimkessmquwwowuy:
        if (!is_multisite()) {
            goto kusuiaesiqamokwu;
        }
        goto gmgiugscseeqmcws;
        syiauiggwuycaaus:
        $owuckwsseckgeweg = new stdClass();
        goto aqagyoekusowaige;
        cgskgkccqqoeqwek:
        $qgoqiacsiccwoawi = "\x6d\x65\x74\x61\x5f\x6b\x65\x79";
        goto ooysyaacumewauwa;
        gkgaqgyiuuggesqi:
        $aasascamegmwqmqk = $wpdb->options;
        goto ycsqqcuwcamsswio;
        ooysyaacumewauwa:
        $ssemgewueawkmcqw = "\x6d\x65\x74\x61\x5f\151\x64";
        goto kckkwasakyqqaysi;
        kckkwasakyqqaysi:
        $qmiicscguaqeiiow = "\155\145\x74\x61\x5f\x76\141\x6c\165\145";
        goto wugeaooaequcowwc;
        ugweisqsykoymuuk:
        $uusmaiomayssaecw = $wpdb->esc_like($this->eiswegiqykyigwig() . self::IDENTIFIER_POSTFIX) . "\x25";
        goto weccgwumycqumocm;
        sseaggmmkeusqqgm:
        return $owuckwsseckgeweg;
        goto cuckqumkcguagqoe;
        wugeaooaequcowwc:
        kusuiaesiqamokwu:
        goto ugweisqsykoymuuk;
        cuckqumkcguagqoe:
    }
    
    protected function handle()
    {
        goto qgqmieaieecsksyo;
        kooyawcskwoagaqi:
        
        if ($owuckwsseckgeweg->data) {
            goto yqkqmmeaasceaaui;
        }
        goto uqcmqacyoyegyica;
        kuouoyaeougsusic:
        $this->update($owuckwsseckgeweg->key, $owuckwsseckgeweg->data);
        goto gkumkcqesowgysme;
        saagquesokaackwy:
        
        if ($this->uuqwmkuaqimkcmei()) {
            goto qaqkcsmkgkuieoqq;
        }
        goto aqgeugceemmqaemu;
        yogaoogoakmaggii:
        ogqewmmmiykuksem:
        goto kooyawcskwoagaqi;
        gkumkcqesowgysme:
        xamgygckoocqmyae:
        goto yqwaggyckkquggqs;
        rweicwousieukigk:
        goto xamgygckoocqmyae;
        goto squwcqweceecssck;
        saiswigiqcyqmgmm:
        qaqkcsmkgkuieoqq:
        goto yekkkcaukiossquk;
        eeqmaiqacegskmae:
        gsmyumksyakiggcm:
        goto ysawmmcgoceiuqmg;
        yekkkcaukiossquk:
        $this->yuqksmouoaowioyi();
        goto qckqqkmgqmyoouuw;
        aqgeugceemmqaemu:
        $this->ieyosyaaisyquesq();
        goto ismmcscmkqogkwyo;
        cyemeggkueyokkym:
        foreach ($owuckwsseckgeweg->data as $uusmaiomayssaecw => $eqgoocgaqwqcimie) {
            goto imsqgqomukkegqka;
            qkcoaggwwskkqggy:
            vskouskskegecgwa:
            goto cigmikkigagaoism;
            uimsyaquwymkcaao:
            oeyyggkauuucqwgo:
            goto msakgmkaaosagcgc;
            kiqmqoqcmswwwmug:
            goto ocsiqemkuomayusk;
            goto qkcoaggwwskkqggy;
            icuukaaeuwwgoymw:
            goto ogqewmmmiykuksem;
            goto uimsyaquwymkcaao;
            imsqgqomukkegqka:
            $siyykeyqqywuequu = $this->siyykeyqqywuequu($eqgoocgaqwqcimie);
            goto ysequocgiooyuosk;
            msakgmkaaosagcgc:
            wcygoekisgskgwiy:
            goto ocwgmoemmmqwwmoi;
            cigmikkigagaoism:
            $owuckwsseckgeweg->data[$uusmaiomayssaecw] = $siyykeyqqywuequu;
            goto sssomqswysysigko;
            sssomqswysysigko:
            ocsiqemkuomayusk:
            goto cyommmwuyyyiqsaa;
            cyommmwuyyyiqsaa:
            if (!($this->egmyoaiiswagkkuw() || $this->wscswagsquiyigao())) {
                goto oeyyggkauuucqwgo;
            }
            goto icuukaaeuwwgoymw;
            umsskuauuckkimsm:
            ManipulateArray::unset($owuckwsseckgeweg->data, $uusmaiomayssaecw);
            goto kiqmqoqcmswwwmug;
            ysequocgiooyuosk:
            if (false !== $siyykeyqqywuequu) {
                goto vskouskskegecgwa;
            }
            goto umsskuauuckkimsm;
            ocwgmoemmmqwwmoi:
        }
        goto yogaoogoakmaggii;
        yqwaggyckkquggqs:
        if (!$this->egmyoaiiswagkkuw() && !$this->wscswagsquiyigao() && !$this->uuqwmkuaqimkcmei()) {
            goto uckkymmemmicgwig;
        }
        goto eeqmaiqacegskmae;
        qgqmieaieecsksyo:
        $this->aegawcwekgqycoig();
        goto yacemkmocmaamgui;
        qckqqkmgqmyoouuw:
        mwegucqywugusieu:
        goto qcaceeoqgiwmegia;
        ccoyciugiugeaqea:
        $owuckwsseckgeweg = $this->kycesesquyayogwg();
        goto cyemeggkueyokkym;
        qcaceeoqgiwmegia:
        wp_die();
        goto gqwoewuysuocgwku;
        ismmcscmkqogkwyo:
        goto mwegucqywugusieu;
        goto saiswigiqcyqmgmm;
        ysawmmcgoceiuqmg:
        $this->ycuqagwqkwuuyagc();
        goto saagquesokaackwy;
        uqcmqacyoyegyica:
        $this->delete($owuckwsseckgeweg->key);
        goto rweicwousieukigk;
        yacemkmocmaamgui:
        uckkymmemmicgwig:
        goto ccoyciugiugeaqea;
        squwcqweceecssck:
        yqkqmmeaasceaaui:
        goto kuouoyaeougsusic;
        gqwoewuysuocgwku:
    }
    
    protected function wscswagsquiyigao()
    {
        goto qyssyuwuywoyqwso;
        lsggiimkmcoccyqa:
        
        $iquygkkomwmwiuqy = memory_get_usage(true);
        goto iskmaskwiwguswym;
        qoogiceokacewciw:
        $kykimuycmcucisac = $this->psweseawgksmugec() * 0.9;
        goto lsggiimkmcoccyqa;
        oumecckuoogcisam:
        ummccggkuwqiqieu:
        goto isekoekueuaeuaew;
        wyysmocawoaemiew:
        $ksaameoqigiaoigg = true;
        goto oumecckuoogcisam;
        qyssyuwuywoyqwso:
        $ksaameoqigiaoigg = false;
        goto qoogiceokacewciw;
        iskmaskwiwguswym:
        if (!($iquygkkomwmwiuqy >= $kykimuycmcucisac)) {
            goto ummccggkuwqiqieu;
        }
        goto wyysmocawoaemiew;
        isekoekueuaeuaew:
        return $this->sscegwueamckwmcy("{$this->eiswegiqykyigwig()}\x5f\x6d\x65\155\x6f\x72\171\x5f\x65\x78\143\x65\x65\x64\x65\144", $ksaameoqigiaoigg);
        goto queymekwsgcuckek;
        queymekwsgcuckek:
    }
    
    protected function psweseawgksmugec()
    {
        goto ukysouqeuaqacccc;
        ukysouqeuaqacccc:
        if (function_exists("\x69\156\151\x5f\x67\x65\x74")) {
            goto kuquukieoauysqes;
        }
        goto cgakgqageuiwqsyk;
        oycqqwgueqayoiqs:
        return intval($kykimuycmcucisac) * 1024 * 1024;
        goto smgiescoeygeokka;
        skcckgmwseumsiom:
        $kykimuycmcucisac = ini_get("\x6d\x65\x6d\157\162\171\x5f\154\151\x6d\151\x74");
        goto iigwwgoaiogqysey;
        aceaseasgiukkmog:
        if (!(!$kykimuycmcucisac || -1 === intval($kykimuycmcucisac))) {
            goto egqmoeqagueyiqug;
        }
        goto aiymqumesmissmcg;
        eegcsakukykecaqs:
        egqmoeqagueyiqug:
        goto oycqqwgueqayoiqs;
        awiysoiaoiuokgwu:
        kuquukieoauysqes:
        goto skcckgmwseumsiom;
        iigwwgoaiogqysey:
        kwusgqycuoswqwqs:
        goto aceaseasgiukkmog;
        iyowacasiugcygyy:
        goto kwusgqycuoswqwqs;
        goto awiysoiaoiuokgwu;
        aiymqumesmissmcg:
        
        $kykimuycmcucisac = "\x33\x32\60\60\60\x4d";
        goto eegcsakukykecaqs;
        cgakgqageuiwqsyk:
        
        $kykimuycmcucisac = "\x31\x32\70\x4d";
        goto iyowacasiugcygyy;
        smgiescoeygeokka:
    }
    
    protected function egmyoaiiswagkkuw()
    {
        goto ugkggeccqcqagaas;
        emciiyeqsikycqqa:
        $ksaameoqigiaoigg = true;
        goto equwmukmuisgcwgg;
        egmogkeseuwqokei:
        
        $ksaameoqigiaoigg = false;
        goto cuiegucyaegqkyuq;
        cuiegucyaegqkyuq:
        if (!(time() >= $eyyawusiwecymiug)) {
            goto meiqskieagikegyk;
        }
        goto emciiyeqsikycqqa;
        ugkggeccqcqagaas:
        $eyyawusiwecymiug = $this->yuqoqckgwkaqucqk() + $this->sscegwueamckwmcy("{$this->eiswegiqykyigwig()}\x5f\144\145\x66\141\x75\x6c\164\x5f\164\x69\x6d\x65\137\154\151\x6d\x69\x74", 20);
        goto egmogkeseuwqokei;
        equwmukmuisgcwgg:
        meiqskieagikegyk:
        goto wuqywqumeskyygok;
        wuqywqumeskyygok:
        return $this->sscegwueamckwmcy("{$this->eiswegiqykyigwig()}\x5f\x74\x69\155\x65\137\x65\x78\143\145\x65\x64\x65\144", $ksaameoqigiaoigg);
        goto ckmeygmuimmiegqs;
        ckmeygmuimmiegqs:
    }
    
    protected function yuqksmouoaowioyi()
    {
        
        $this->eqcmmyoimqigequa();
    }
    
    public function syyiokomusgeykwu($immuisiomomksweo)
    {
        goto yekkgsqqsgmkgmms;
        ucakoqesgoskmmmm:
        return $immuisiomomksweo;
        goto yyykasuqssggyosq;
        yekkgsqqsgmkgmms:
        $ycooswiwewekokei = $this->sscegwueamckwmcy($this->eiswegiqykyigwig() . "\x5f\143\x72\x6f\156\x5f\151\156\164\145\x72\166\x61\x6c", 5);
        goto iiykaqkywwwcaccq;
        sqscykoomqwyaweu:
        
        $immuisiomomksweo["{$this->eiswegiqykyigwig()}\137\x63\x72\157\x6e\x5f\151\x6e\x74\x65\162\x76\x61\154"] = ["\151\x6e\164\x65\162\x76\x61\x6c" => MINUTE_IN_SECONDS * $ycooswiwewekokei, "\x64\151\x73\160\x6c\141\x79" => sprintf(__("\x45\x76\x65\x72\x79\40\45\x64\40\x4d\151\156\x75\x74\145\x73"), $ycooswiwewekokei)];
        goto ucakoqesgoskmmmm;
        iiykaqkywwwcaccq:
        if (!method_exists($this, "\x79\x71\x75\x6f\x67\x75\x67\171\161\147\147\x69\163\147\151\x6f")) {
            goto kswocgwqsymwqyqa;
        }
        goto qyyuoqgmcmamwmyk;
        iwqueooewwgeioyq:
        kswocgwqsymwqyqa:
        goto sqscykoomqwyaweu;
        qyyuoqgmcmamwmyk:
        $ycooswiwewekokei = $this->sscegwueamckwmcy($this->eiswegiqykyigwig() . "\137\143\x72\x6f\x6e\137\151\x6e\164\145\x72\x76\141\x6c", $this->yquogugyqggisgio());
        goto iwqueooewwgeioyq;
        yyykasuqssggyosq:
    }
    
    public function gyqywkoauomeqise()
    {
        goto iqaieccaegoeggii;
        hymewosaaisgikci:
        acmweeyugmqqyokk:
        goto cakagawwksoawgcm;
        iqaieccaegoeggii:
        if (!$this->yyqyaigucmaueykw()) {
            goto acmweeyugmqqyokk;
        }
        goto cgqyoogsouswccci;
        isgegieeaowwoykm:
        exit;
        goto qqmiwgcqgccgqsyg;
        uqkuemgmsakoywag:
        
        $this->eqcmmyoimqigequa();
        goto isgegieeaowwoykm;
        cakagawwksoawgcm:
        if (!$this->uuqwmkuaqimkcmei()) {
            goto emggyucsukgwkcgc;
        }
        goto uqkuemgmsakoywag;
        qemwgosogkieccqo:
        exit;
        goto kcyqucscowsueeys;
        cgqyoogsouswccci:
        
        exit;
        goto hymewosaaisgikci;
        qcuwkgcsoeeaakoi:
        $this->handle();
        goto qemwgosogkieccqo;
        qqmiwgcqgccgqsyg:
        emggyucsukgwkcgc:
        goto qcuwkgcsoeeaakoi;
        kcyqucscowsueeys:
    }
    
    protected function uwugaiqywmseksqm()
    {
        goto aygsuymqoyigcwse;
        aygsuymqoyigcwse:
        if (DecoratorCron::sceqickmyoseqcue($this->swyooakuoqwwiiws())) {
            goto gamsaysmouyaiqga;
        }
        goto mqiagimaakecsmqe;
        kqoqowksykgissie:
        gamsaysmouyaiqga:
        goto wugiyayiwyqyqyse;
        mqiagimaakecsmqe:
        DecoratorCron::uwugaiqywmseksqm(time(), $this->kmaaqwymiwaikeyi(), $this->swyooakuoqwwiiws());
        goto kqoqowksykgissie;
        wugiyayiwyqyqyse:
    }
    
    protected function eqcmmyoimqigequa()
    {
        goto ioyaceieouqueusq;
        kgawaeyumcuuciqw:
        if (!$yiuogaeewyockeak) {
            goto meiuukwequycmqog;
        }
        goto cacogygqoikeooyg;
        ioyaceieouqueusq:
        $yiuogaeewyockeak = DecoratorCron::sceqickmyoseqcue($this->swyooakuoqwwiiws());
        goto kgawaeyumcuuciqw;
        cacogygqoikeooyg:
        DecoratorCron::swgggegyusmecoky($yiuogaeewyockeak, $this->swyooakuoqwwiiws());
        goto eymcqqymeqcwgqea;
        eymcqqymeqcwgqea:
        meiuukwequycmqog:
        goto oyewocgsmcoqokek;
        oyewocgsmcoqokek:
    }
    
    public function ywieukewwemywsgi()
    {
        goto ckycsaeqqguawwwi;
        kqmgsgoqugmkumkw:
        yeuioyeiyuwqkayk:
        goto skoaamakmkeyeeso;
        maiioecwmocoiggy:
        $owuckwsseckgeweg = $this->kycesesquyayogwg();
        goto weciqsgukwuccsqo;
        ckycsaeqqguawwwi:
        if ($this->uuqwmkuaqimkcmei()) {
            goto yeuioyeiyuwqkayk;
        }
        goto maiioecwmocoiggy;
        weciqsgukwuccsqo:
        $this->delete($owuckwsseckgeweg->key);
        goto esumogyswyyqekek;
        skoaamakmkeyeeso:
        $this->cqscqicucmeamkyq("{$this->wqqseoqcmgkgoiug()}\137\x70\162\x6f\x63\145\163\163\x5f\143\141\156\143\x65\x6c\x65\x64", $this);
        goto yqacwcwwaqymeiwe;
        esumogyswyyqekek:
        wp_clear_scheduled_hook($this->swyooakuoqwwiiws());
        goto kqmgsgoqugmkumkw;
        yqacwcwwaqymeiwe:
    }
    
    public abstract function siyykeyqqywuequu($igqsaukqcqscimok);
}
