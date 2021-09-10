<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b1e8aa0c03             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\FormMaker\Admin\Element;

use Pmpr\Common\Foundation\FormMaker\Admin\Field\Field;
use CMB2;
use Pmpr\Common\Foundation\Manipulate\ManipulateAjax;
use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateHTML;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;

class MetaBox extends Element
{
    
    protected array $tabs = [];
    
    protected array $fields = [];
    
    protected ?string $icon = null;
    
    protected array $postTypes = [];
    
    protected bool $hookAble = false;
    
    protected array $taxonomies = [];
    
    protected bool $isVerticalTab = true;
    
    protected ?string $context = "\x6e\x6f\162\155\141\x6c";
    
    public function __construct($aokagokqyuysuksm, $meqocwsecsywiiqs = null, $yiyasiwyokuumigg = false)
    {
        goto skcmyumokskqcckq;
        qyykcmssmowcqqmu:
        $this->hookAble = $yiyasiwyokuumigg;
        goto wigkkwoicoeusyui;
        wigkkwoicoeusyui:
        parent::__construct($aokagokqyuysuksm);
        goto uyiaigymeewauaku;
        vmikeaymiccuswas:
        $this->title = $meqocwsecsywiiqs;
        goto qyykcmssmowcqqmu;
        skcmyumokskqcckq:
        $this->id = $aokagokqyuysuksm;
        goto vmikeaymiccuswas;
        uyiaigymeewauaku:
    }
    public function wigskegsqequoeks()
    {
        goto qoecuquaikiiqqsm;
        mikckoqyykkgeugq:
        $this->qcsmikeggeemccuu("\x63\x6d\x62\62\x5f\141\x64\x6d\151\x6e\x5f\151\156\x69\x74", [$this, "\x72\145\147\x69\x73\164\x65\x72"]);
        goto scyuoqosoisassoe;
        oomioaggyeeaysic:
        parent::wigskegsqequoeks();
        goto iccgqioeygeciycq;
        qoecuquaikiiqqsm:
        if (!($this->qwkguquqiiaekmsi() && !ManipulateAjax::mcgoysmkqsqooceq())) {
            goto sgaiuqsccumqooea;
        }
        goto mikckoqyykkgeugq;
        scyuoqosoisassoe:
        sgaiuqsccumqooea:
        goto oomioaggyeeaysic;
        iccgqioeygeciycq:
    }
    
    public function yqsycyoeiusqqqgm() : ?string
    {
        return $this->context;
    }
    
    public function sucsaaaeiecgqcem(?string $mgkceomocowocqyo) : self
    {
        $this->context = $mgkceomocowocqyo;
        return $this;
    }
    
    public function maosyyqsuygkawma() : self
    {
        $this->sucsaaaeiecgqcem("\156\157\162\x6d\141\x6c");
        return $this;
    }
    
    public function igeseuiwcwwsuesi() : self
    {
        $this->sucsaaaeiecgqcem("\x73\151\144\145");
        return $this;
    }
    
    public function ymyesuiosuagoaco() : self
    {
        $this->sucsaaaeiecgqcem("\x61\x64\166\141\156\x63\145\144");
        return $this;
    }
    
    public function qwkguquqiiaekmsi() : ?bool
    {
        return $this->hookAble;
    }
    
    public function cmuqkakwwqyywqke(bool $yiyasiwyokuumigg) : self
    {
        $this->hookAble = $yiyasiwyokuumigg;
        return $this;
    }
    
    public function eyamqkqiykagecsw() : ?string
    {
        return $this->icon;
    }
    
    public function saemoowcasogykak(?string $wkaqekwwgqsqwcoi) : self
    {
        $this->icon = $wkaqekwwgqsqwcoi;
        return $this;
    }
    
    public function kyccqycmcyqomiqm() : ?bool
    {
        return $this->isVerticalTab;
    }
    
    public function cgmuykwsyqgaymgm(bool $kyccqycmcyqomiqm) : self
    {
        $this->isVerticalTab = $kyccqycmcyqomiqm;
        return $this;
    }
    
    public function ugmceccgwaaaigiy() : ?array
    {
        return $this->fields;
    }
    
    public function mkksewyosgeumwsa(Field $aiowsaccomcoikus) : self
    {
        goto sqaoumqsweiacuum;
        kcyswcqsqcoggwai:
        $this->fields[$aiowsaccomcoikus->mwikyscisascoeea()] = $aiowsaccomcoikus;
        goto escysimqcgcqkmom;
        escysimqcgcqkmom:
        return $this;
        goto qeemqoosooyaegke;
        gsoqmqmumeumywaq:
        qugkumuigeucuoqa:
        goto kcyswcqsqcoggwai;
        sqaoumqsweiacuum:
        if ($aiowsaccomcoikus->yywskysiycwkwsgw()) {
            goto qugkumuigeucuoqa;
        }
        goto igkggcocgwmsiaiy;
        igkggcocgwmsiaiy:
        $aiowsaccomcoikus->jyumyyugiwwiqomk(count($this->ugmceccgwaaaigiy()) + 1);
        goto gsoqmqmumeumywaq;
        qeemqoosooyaegke:
    }
    
    public function ewweaossowcqywaw(array $ikgwqyuyckaewsow) : self
    {
        goto awgyucsimgkaeqcc;
        awgyucsimgkaeqcc:
        foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) {
            goto ugeqoeowygumsuia;
            ugeqoeowygumsuia:
            if (!$aiowsaccomcoikus instanceof Field) {
                goto isogegoossgykuiy;
            }
            goto wxiguggaamcqwyii;
            wauscgmymskwmkos:
            ucqcgumsoccaigae:
            goto ouogqskwiuqyeqam;
            qwaiaeicmcuyicss:
            isogegoossgykuiy:
            goto wauscgmymskwmkos;
            wxiguggaamcqwyii:
            $this->mkksewyosgeumwsa($aiowsaccomcoikus);
            goto qwaiaeicmcuyicss;
            ouogqskwiuqyeqam:
        }
        goto ssgomuoumiyccuuo;
        ssgomuoumiyccuuo:
        aameqiooucocgook:
        goto eucqeyegokoyegie;
        eucqeyegokoyegie:
        return $this;
        goto asieusgwkwamqacy;
        asieusgwkwamqacy:
    }
    
    public function mukiwuqwmywsckco() : bool
    {
        return !empty($this->ugmceccgwaaaigiy());
    }
    
    public function kukswgcoysaeescm(string $mqyaskyaekmkegmg) : self
    {
        goto yqoiugwmcaoccouu;
        ocyayeiwgmsmiomi:
        return $this;
        goto wqkiowymegocycgs;
        yqoiugwmcaoccouu:
        if (is_array($this->objectType)) {
            goto wqkoouqaoogskyuw;
        }
        goto iumeegsgcmyycymc;
        yicweuosuasyciwm:
        wqkoouqaoogskyuw:
        goto mmuyykecaoggaemg;
        iumeegsgcmyycymc:
        $this->objectType = [];
        goto yicweuosuasyciwm;
        mmuyykecaoggaemg:
        $this->objectType[] = $mqyaskyaekmkegmg;
        goto ocyayeiwgmsmiomi;
        wqkiowymegocycgs:
    }
    
    public function iakygkwocqoukwuc() : ?array
    {
        return $this->postTypes;
    }
    
    public function mgieiwsmcswmmiim(string $useksmwkuswkwcqg) : self
    {
        goto qoqagcimawkcegme;
        kaqmaugqgwwugucc:
        $this->kukswgcoysaeescm($useksmwkuswkwcqg);
        goto ieyammyusayuiesk;
        skgmcsquswcqyiig:
        return $this;
        goto egsoqqcqyckeogae;
        ieyammyusayuiesk:
        gggkiioeyaywqwcq:
        goto skgmcsquswcqyiig;
        aqumewkymkyqckki:
        $this->postTypes[] = $useksmwkuswkwcqg;
        goto kaqmaugqgwwugucc;
        qoqagcimawkcegme:
        if (in_array($useksmwkuswkwcqg, $this->iakygkwocqoukwuc())) {
            goto gggkiioeyaywqwcq;
        }
        goto aqumewkymkyqckki;
        egsoqqcqyckeogae:
    }
    
    public function aueosikimququsko(array $sciomagaqmgggsiu) : self
    {
        goto wuswwoggiwegqwsi;
        mayyksswcuawuswu:
        iycagsyoqoqqwamc:
        goto iqcskuiusowukoem;
        iqcskuiusowukoem:
        return $this;
        goto qmuycmagkuookckm;
        wuswwoggiwegqwsi:
        foreach ($sciomagaqmgggsiu as $useksmwkuswkwcqg) {
            goto eucoegmqucoieeug;
            eucoegmqucoieeug:
            if (!$useksmwkuswkwcqg) {
                goto isekukgeyoucwesg;
            }
            goto cqmwiaeeaegiqckq;
            cqmwiaeeaegiqckq:
            $this->mgieiwsmcswmmiim($useksmwkuswkwcqg);
            goto wckkcawqigkukggg;
            cqoekiuwmwsmyyki:
            mqeauomuwcycgekg:
            goto gskaeswcikaiaaui;
            wckkcawqigkukggg:
            isekukgeyoucwesg:
            goto cqoekiuwmwsmyyki;
            gskaeswcikaiaaui:
        }
        goto mayyksswcuawuswu;
        qmuycmagkuookckm:
    }
    
    public function iwqugwigmoiagwec()
    {
        goto eaqsmwsowasswwck;
        ckemugoooeseikmi:
        return $meqocwsecsywiiqs;
        goto smyayuoysyaukcca;
        cygaymiommawgamm:
        cgyoccckmuogiyka:
        goto ckemugoooeseikmi;
        qkkekmcemcqusiia:
        $wkaqekwwgqsqwcoi = ManipulateHTML::cuoygaaeqeqcuggu($this->eyamqkqiykagecsw(), ["\x63\x6c\141\163\163" => "\160\x72\x2d\155\x65\x74\141\x62\x6f\170\x2d\151\143\x6f\156\x20\151\x63\157\156\x2d\163\x6d"]);
        goto wsykyiouyyysaywo;
        wsykyiouyyysaywo:
        $meqocwsecsywiiqs = ManipulateHTML::uuccukgasskgimsq("\x64\x69\166", ["\x63\154\141\x73\163" => "\x70\162\x2d\x6d\x65\x74\141\x62\157\170\55\164\x69\164\154\145\x20\x6d\171\x2d\x61\165\164\x6f"], [$wkaqekwwgqsqwcoi, $meqocwsecsywiiqs]);
        goto cygaymiommawgamm;
        eaqsmwsowasswwck:
        $meqocwsecsywiiqs = $this->qcgakseyaikigqco();
        goto uyccwiywcyesiwoi;
        uyccwiywcyesiwoi:
        if (!$this->eyamqkqiykagecsw()) {
            goto cgyoccckmuogiyka;
        }
        goto qkkekmcemcqusiia;
        smyayuoysyaukcca:
    }
    
    public function mqmocoguqcyymgqu() : ?array
    {
        return $this->taxonomies;
    }
    
    public function acqyqaaeeogkosoq(string $kesssewsiegssiya) : self
    {
        goto kamqomyowmaeyeae;
        eaqmceoqyemuqsic:
        $this->taxonomies[] = $kesssewsiegssiya;
        goto cuiiwyscgawowmwi;
        cuiiwyscgawowmwi:
        aaoseogoukyoqaiu:
        goto ksisasisogugagwe;
        ksisasisogugagwe:
        return $this;
        goto wmmewkuagqcoymyi;
        kamqomyowmaeyeae:
        if (in_array($kesssewsiegssiya, $this->mqmocoguqcyymgqu())) {
            goto aaoseogoukyoqaiu;
        }
        goto eaqmceoqyemuqsic;
        wmmewkuagqcoymyi:
    }
    public function mieeukuyckssemsm(array $seyqqsmuaiegkeeq) : self
    {
        goto aycikwgsmgssgeui;
        iygooyusgigoeoow:
        return $this;
        goto imicgeaucyyaycau;
        wuquqskocseageai:
        isaskseywycoiksi:
        goto iygooyusgigoeoow;
        aycikwgsmgssgeui:
        foreach ($seyqqsmuaiegkeeq as $kesssewsiegssiya) {
            goto wkeuiawyakqmkkeu;
            qqsoeicimqgoimau:
            uigqcoagsgoikwwa:
            goto mgiyosiiqgqeeawo;
            mgiyosiiqgqeeawo:
            cgameakayuqewmuy:
            goto qkyuwiqqgkuikgwy;
            wkeuiawyakqmkkeu:
            if (!$kesssewsiegssiya) {
                goto uigqcoagsgoikwwa;
            }
            goto awouamqqqcgwcami;
            awouamqqqcgwcami:
            $this->acqyqaaeeogkosoq($kesssewsiegssiya);
            goto qqsoeicimqgoimau;
            qkyuwiqqgkuikgwy:
        }
        goto wuquqskocseageai;
        imicgeaucyyaycau:
    }
    
    public function equiyaoamqmaeckc() : ?array
    {
        return $this->tabs;
    }
    
    public function aucimgwswmgaocae(Tab $cciauwuwuqaywgce) : self
    {
        $this->tabs[$cciauwuwuqaywgce->mwikyscisascoeea()] = $cciauwuwuqaywgce;
        return $this;
    }
    
    public function ciwuiwsyckiiogwo(array $ywoucyskcquysiwc) : self
    {
        goto imcaayemagekyysy;
        imcaayemagekyysy:
        foreach ($ywoucyskcquysiwc as $cciauwuwuqaywgce) {
            goto kegscyoeseeqkwqo;
            gmgqmceekqkkccmq:
            msoscooawisocoia:
            goto muweikgaeoamyaaw;
            qyaiqywcawamgqko:
            $this->aucimgwswmgaocae($cciauwuwuqaywgce);
            goto gmgqmceekqkkccmq;
            kegscyoeseeqkwqo:
            if (!$cciauwuwuqaywgce instanceof Tab) {
                goto msoscooawisocoia;
            }
            goto qyaiqywcawamgqko;
            muweikgaeoamyaaw:
            mskcmsyuewcoicaa:
            goto cwqkqyekyqamcacc;
            cwqkqyekyqamcacc:
        }
        goto acwcacwmkgyykoqq;
        acwcacwmkgyykoqq:
        smsgucswuyeoaeoc:
        goto wqsyawgogiswmkgo;
        wqsyawgogiswmkgo:
        return $this;
        goto iuiioagqmsigmmqw;
        iuiioagqmsigmmqw:
    }
    
    public function osqsemgesogkmios() : bool
    {
        return !empty($this->equiyaoamqmaeckc());
    }
    
    public function register($uusmaiomayssaecw = null) : CMB2
    {
        goto ywsygyaqaosmsowe;
        umekamuowemeygwq:
        $uusmaiomayssaecw = $this->cisyiemkeykgkomc();
        goto qiqwwkqsiuoumgio;
        migagswgousikqii:
        foreach ($this->equiyaoamqmaeckc() as $cciauwuwuqaywgce) {
            goto sggogwaomwkwyics;
            sggogwaomwkwyics:
            if (!($cciauwuwuqaywgce instanceof Tab && $cciauwuwuqaywgce->wkkcmkuiigsukyik())) {
                goto gmkwgkeaysqucoac;
            }
            goto sguygkqsmgcuciyo;
            gsawyomckqmowaoy:
            gmkwgkeaysqucoac:
            goto yweyyywyogmugiuy;
            yweyyywyogmugiuy:
            guuqakcckyuiwweq:
            goto wmagsimyuceuawoy;
            sguygkqsmgcuciyo:
            $this->ewweaossowcqywaw($cciauwuwuqaywgce->ugmceccgwaaaigiy());
            goto gsawyomckqmowaoy;
            wmagsimyuceuawoy:
        }
        goto cowiomsgsyuyyega;
        cowiomsgsyuyyega:
        qyeuammiwmguogks:
        goto waycoiasakwsguey;
        gmimikyuuummsqgq:
        auyyeawsgkagaaau:
        goto uiicisqcyuwkusyo;
        ueoqeuoaskcsokea:
        
        $oeoswouussioaimo->object_type($this->aaamyckgicycisqq());
        goto amaoismuweoiksau;
        uiicisqcyuwkusyo:
        if (!$this->mukiwuqwmywsckco()) {
            goto qcayciumgumuqcka;
        }
        goto ekoywwcmuycuogkk;
        ekoywwcmuycuogkk:
        $uiewakwqscemywuo["\x66\x69\145\154\144\x73"] = $this->yceyooiweyiqgsam($this->ugmceccgwaaaigiy());
        goto cwcekuuiweyymiae;
        agoigaqmiekycgkc:
        $oeoswouussioaimo = new_cmb2_box($uiewakwqscemywuo);
        goto ueoqeuoaskcsokea;
        ywsygyaqaosmsowe:
        $uiewakwqscemywuo = [];
        goto accqceameoskmmau;
        cwcekuuiweyymiae:
        qcayciumgumuqcka:
        goto cgoysuiaaumssasc;
        kiywwuogciceaawk:
        if (!$this->osqsemgesogkmios()) {
            goto auyyeawsgkagaaau;
        }
        goto migagswgousikqii;
        cgoysuiaaumssasc:
        $uiewakwqscemywuo = array_merge($uiewakwqscemywuo, $this->weqsyyuyccsemacu($uusmaiomayssaecw));
        goto agoigaqmiekycgkc;
        qiqwwkqsiuoumgio:
        koqwiwoycwuewsqi:
        goto kiywwuogciceaawk;
        accqceameoskmmau:
        if ($uusmaiomayssaecw) {
            goto koqwiwoycwuewsqi;
        }
        goto umekamuowemeygwq;
        amaoismuweoiksau:
        return $oeoswouussioaimo;
        goto qmwmsywoygsaqkio;
        waycoiasakwsguey:
        $uiewakwqscemywuo["\164\141\142\x73"] = array_filter($this->equiyaoamqmaeckc(), function ($cciauwuwuqaywgce) {
            return $cciauwuwuqaywgce->wkkcmkuiigsukyik();
        });
        goto gmimikyuuummsqgq;
        qmwmsywoygsaqkio:
    }
    
    public function gisikkgygmseekyi() : self
    {
        return $this->ycgswwsswoyyeqgc(["\143\157\155\155\145\156\164"]);
    }
    
    public function weqsyyuyccsemacu($kooiowmeygoykmms = null) : array
    {
        goto qmqgueuqmwyksssq;
        ceugeqiqkmygwwik:
        $uiewakwqscemywuo["\164\141\x78\157\156\x6f\x6d\151\145\163"] = $this->mqmocoguqcyymgqu();
        goto ccyowiaoasoqoaic;
        ssmwkcqiauygamuc:
        $this->megwuoouecmkuaqm($uiewakwqscemywuo);
        goto qesyekwwiuosiyau;
        gsaucycumgsmsymc:
        $egkyssmuqcwaciya .= "\x20\x70\x72\x2d\164\145\x72\155";
        goto ceugeqiqkmygwwik;
        wqeqooqkimkggumq:
        yqegceyooessmcyo:
        goto iygoyeckqssygyqg;
        woyiusauaiiscqgk:
        goto mueqyymqucqywkuu;
        goto wqeqooqkimkggumq;
        auyaikoiociousmy:
        gyysamqwsycqoueo:
        goto woyiusauaiiscqgk;
        kemuauaewuaeuowc:
        mueqyymqucqywkuu:
        goto kuiuwqwakomqyoey;
        qesyekwwiuosiyau:
        return $this->configuration;
        goto vwgqesqmwyueecok;
        kuiuwqwakomqyoey:
        if (!(!$this->qwkguquqiiaekmsi() && $kooiowmeygoykmms)) {
            goto qyqmkeauqqkmqseu;
        }
        goto keuacmemqaigmkgu;
        iygoyeckqssygyqg:
        $uiewakwqscemywuo["\x70\157\163\164\137\x74\171\160\145\163"] = $this->iakygkwocqoukwuc();
        goto omeaeeoqseegqyqw;
        ccyowiaoasoqoaic:
        $uiewakwqscemywuo["\x6f\142\x6a\145\x63\x74\137\x74\x79\160\145\x73"] = ["\164\x65\x72\x6d"];
        goto auyaikoiociousmy;
        aumyyiwqawqyimwk:
        if ($this->iakygkwocqoukwuc()) {
            goto yqegceyooessmcyo;
        }
        goto csokgguoueumamee;
        aiamywyeoksiyawe:
        $uiewakwqscemywuo["\143\x6c\141\x73\163\145\x73"] = $egkyssmuqcwaciya;
        goto ssmwkcqiauygamuc;
        omeaeeoqseegqyqw:
        $egkyssmuqcwaciya .= "\x20\x70\x72\x2d\x6d\145\x74\x61\x62\x6f\x78";
        goto kemuauaewuaeuowc;
        qmqgueuqmwyksssq:
        $uiewakwqscemywuo = ["\x69\144" => $this->mwikyscisascoeea(), "\164\x69\x74\154\x65" => $this->iwqugwigmoiagwec(), "\143\x6f\156\x74\x65\170\x74" => $this->yqsycyoeiusqqqgm(), "\x70\x72\x69\157\162\151\x74\171" => $this->yywskysiycwkwsgw(), "\x73\150\x6f\167\137\x6e\141\155\x65\163" => $this->eoceqqugyiaqqayw(), "\143\141\160\x61\142\x69\154\x69\x74\x79" => $this->gwaeeegmgggawiyi(), "\144\151\163\x70\x6c\x61\171\137\143\142" => false, "\x6f\142\152\145\143\x74\137\x74\171\x70\145\163" => $this->aaamyckgicycisqq(), "\166\x65\x72\x74\151\x63\x61\x6c\137\x74\141\x62\163" => $this->kyccqycmcyqomiqm(), "\x61\x64\x6d\x69\x6e\x5f\155\x65\156\165\x5f\150\157\x6f\x6b" => false];
        goto uaqkeycsegiqgiae;
        qaocqwauwmuuiqwk:
        qyqmkeauqqkmqseu:
        goto aiamywyeoksiyawe;
        uaqkeycsegiqgiae:
        $egkyssmuqcwaciya = "\146\x6f\162\x6d\x2d\143\x6f\x6e\x74\x61\151\156\145\162";
        goto aumyyiwqawqyimwk;
        keuacmemqaigmkgu:
        $uiewakwqscemywuo["\163\150\x6f\167\x5f\157\156"] = ["\x6b\x65\171" => $this->aaamyckgicycisqq(), "\166\141\154\x75\145" => [$kooiowmeygoykmms]];
        goto qaocqwauwmuuiqwk;
        csokgguoueumamee:
        if (!$this->mqmocoguqcyymgqu()) {
            goto gyysamqwsycqoueo;
        }
        goto gsaucycumgsmsymc;
        vwgqesqmwyueecok:
    }
}
