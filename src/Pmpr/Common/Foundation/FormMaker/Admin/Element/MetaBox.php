<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b5973b89a9             |
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
    
    protected ?string $context = "\156\157\x72\155\141\154";
    
    public function __construct($aokagokqyuysuksm, $meqocwsecsywiiqs = null, $yiyasiwyokuumigg = false)
    {
        goto uyiaigymeewauaku;
        qoecuquaikiiqqsm:
        $this->hookAble = $yiyasiwyokuumigg;
        goto mikckoqyykkgeugq;
        sgaiuqsccumqooea:
        $this->title = $meqocwsecsywiiqs;
        goto qoecuquaikiiqqsm;
        mikckoqyykkgeugq:
        parent::__construct($aokagokqyuysuksm);
        goto scyuoqosoisassoe;
        uyiaigymeewauaku:
        $this->id = $aokagokqyuysuksm;
        goto sgaiuqsccumqooea;
        scyuoqosoisassoe:
    }
    public function wigskegsqequoeks()
    {
        goto iccgqioeygeciycq;
        sqaoumqsweiacuum:
        oomioaggyeeaysic:
        goto igkggcocgwmsiaiy;
        qugkumuigeucuoqa:
        $this->qcsmikeggeemccuu("\x63\155\142\62\137\141\x64\x6d\x69\156\x5f\151\x6e\x69\164", [$this, "\x72\145\x67\151\x73\x74\145\x72"]);
        goto sqaoumqsweiacuum;
        iccgqioeygeciycq:
        if (!($this->qwkguquqiiaekmsi() && !ManipulateAjax::mcgoysmkqsqooceq())) {
            goto oomioaggyeeaysic;
        }
        goto qugkumuigeucuoqa;
        igkggcocgwmsiaiy:
        parent::wigskegsqequoeks();
        goto gsoqmqmumeumywaq;
        gsoqmqmumeumywaq:
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
        $this->sucsaaaeiecgqcem("\156\x6f\x72\155\x61\154");
        return $this;
    }
    
    public function igeseuiwcwwsuesi() : self
    {
        $this->sucsaaaeiecgqcem("\163\x69\144\x65");
        return $this;
    }
    
    public function ymyesuiosuagoaco() : self
    {
        $this->sucsaaaeiecgqcem("\x61\144\166\141\156\x63\x65\144");
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
        goto escysimqcgcqkmom;
        qeemqoosooyaegke:
        $aiowsaccomcoikus->jyumyyugiwwiqomk(count($this->ugmceccgwaaaigiy()) + 1);
        goto aameqiooucocgook;
        aameqiooucocgook:
        kcyswcqsqcoggwai:
        goto ucqcgumsoccaigae;
        isogegoossgykuiy:
        return $this;
        goto ugeqoeowygumsuia;
        escysimqcgcqkmom:
        if ($aiowsaccomcoikus->yywskysiycwkwsgw()) {
            goto kcyswcqsqcoggwai;
        }
        goto qeemqoosooyaegke;
        ucqcgumsoccaigae:
        $this->fields[$aiowsaccomcoikus->mwikyscisascoeea()] = $aiowsaccomcoikus;
        goto isogegoossgykuiy;
        ugeqoeowygumsuia:
    }
    
    public function ewweaossowcqywaw(array $ikgwqyuyckaewsow) : self
    {
        goto wqkoouqaoogskyuw;
        iumeegsgcmyycymc:
        return $this;
        goto yicweuosuasyciwm;
        yqoiugwmcaoccouu:
        wxiguggaamcqwyii:
        goto iumeegsgcmyycymc;
        wqkoouqaoogskyuw:
        foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) {
            goto ouogqskwiuqyeqam;
            ouogqskwiuqyeqam:
            if (!$aiowsaccomcoikus instanceof Field) {
                goto wauscgmymskwmkos;
            }
            goto awgyucsimgkaeqcc;
            eucqeyegokoyegie:
            qwaiaeicmcuyicss:
            goto asieusgwkwamqacy;
            awgyucsimgkaeqcc:
            $this->mkksewyosgeumwsa($aiowsaccomcoikus);
            goto ssgomuoumiyccuuo;
            ssgomuoumiyccuuo:
            wauscgmymskwmkos:
            goto eucqeyegokoyegie;
            asieusgwkwamqacy:
        }
        goto yqoiugwmcaoccouu;
        yicweuosuasyciwm:
    }
    
    public function mukiwuqwmywsckco() : bool
    {
        return !empty($this->ugmceccgwaaaigiy());
    }
    
    public function kukswgcoysaeescm(string $mqyaskyaekmkegmg) : self
    {
        goto ocyayeiwgmsmiomi;
        aqumewkymkyqckki:
        return $this;
        goto kaqmaugqgwwugucc;
        ocyayeiwgmsmiomi:
        if (is_array($this->objectType)) {
            goto mmuyykecaoggaemg;
        }
        goto wqkiowymegocycgs;
        gggkiioeyaywqwcq:
        mmuyykecaoggaemg:
        goto qoqagcimawkcegme;
        wqkiowymegocycgs:
        $this->objectType = [];
        goto gggkiioeyaywqwcq;
        qoqagcimawkcegme:
        $this->objectType[] = $mqyaskyaekmkegmg;
        goto aqumewkymkyqckki;
        kaqmaugqgwwugucc:
    }
    
    public function iakygkwocqoukwuc() : ?array
    {
        return $this->postTypes;
    }
    
    public function mgieiwsmcswmmiim(string $useksmwkuswkwcqg) : self
    {
        goto skgmcsquswcqyiig;
        iycagsyoqoqqwamc:
        $this->kukswgcoysaeescm($useksmwkuswkwcqg);
        goto mqeauomuwcycgekg;
        isekukgeyoucwesg:
        return $this;
        goto eucoegmqucoieeug;
        mqeauomuwcycgekg:
        ieyammyusayuiesk:
        goto isekukgeyoucwesg;
        egsoqqcqyckeogae:
        $this->postTypes[] = $useksmwkuswkwcqg;
        goto iycagsyoqoqqwamc;
        skgmcsquswcqyiig:
        if (in_array($useksmwkuswkwcqg, $this->iakygkwocqoukwuc())) {
            goto ieyammyusayuiesk;
        }
        goto egsoqqcqyckeogae;
        eucoegmqucoieeug:
    }
    
    public function aueosikimququsko(array $sciomagaqmgggsiu) : self
    {
        goto cgyoccckmuogiyka;
        cgyoccckmuogiyka:
        foreach ($sciomagaqmgggsiu as $useksmwkuswkwcqg) {
            goto gskaeswcikaiaaui;
            iqcskuiusowukoem:
            wckkcawqigkukggg:
            goto qmuycmagkuookckm;
            mayyksswcuawuswu:
            cqoekiuwmwsmyyki:
            goto iqcskuiusowukoem;
            wuswwoggiwegqwsi:
            $this->mgieiwsmcswmmiim($useksmwkuswkwcqg);
            goto mayyksswcuawuswu;
            gskaeswcikaiaaui:
            if (!$useksmwkuswkwcqg) {
                goto cqoekiuwmwsmyyki;
            }
            goto wuswwoggiwegqwsi;
            qmuycmagkuookckm:
        }
        goto eaqsmwsowasswwck;
        eaqsmwsowasswwck:
        cqmwiaeeaegiqckq:
        goto uyccwiywcyesiwoi;
        uyccwiywcyesiwoi:
        return $this;
        goto qkkekmcemcqusiia;
        qkkekmcemcqusiia:
    }
    
    public function iwqugwigmoiagwec()
    {
        goto cygaymiommawgamm;
        ckemugoooeseikmi:
        if (!$this->eyamqkqiykagecsw()) {
            goto wsykyiouyyysaywo;
        }
        goto smyayuoysyaukcca;
        eaqmceoqyemuqsic:
        return $meqocwsecsywiiqs;
        goto cuiiwyscgawowmwi;
        kamqomyowmaeyeae:
        wsykyiouyyysaywo:
        goto eaqmceoqyemuqsic;
        aaoseogoukyoqaiu:
        $meqocwsecsywiiqs = ManipulateHTML::uuccukgasskgimsq("\x64\x69\166", ["\x63\x6c\141\163\x73" => "\160\162\55\x6d\x65\x74\x61\x62\x6f\170\x2d\x74\x69\164\154\x65\40\x6d\x79\x2d\141\x75\x74\157"], [$wkaqekwwgqsqwcoi, $meqocwsecsywiiqs]);
        goto kamqomyowmaeyeae;
        cygaymiommawgamm:
        $meqocwsecsywiiqs = $this->qcgakseyaikigqco();
        goto ckemugoooeseikmi;
        smyayuoysyaukcca:
        $wkaqekwwgqsqwcoi = ManipulateHTML::cuoygaaeqeqcuggu($this->eyamqkqiykagecsw(), ["\143\x6c\141\x73\x73" => "\x70\x72\x2d\x6d\145\164\141\x62\x6f\170\x2d\x69\x63\157\156\x20\x69\143\157\156\x2d\163\155"]);
        goto aaoseogoukyoqaiu;
        cuiiwyscgawowmwi:
    }
    
    public function mqmocoguqcyymgqu() : ?array
    {
        return $this->taxonomies;
    }
    
    public function acqyqaaeeogkosoq(string $kesssewsiegssiya) : self
    {
        goto wmmewkuagqcoymyi;
        uigqcoagsgoikwwa:
        return $this;
        goto wkeuiawyakqmkkeu;
        wmmewkuagqcoymyi:
        if (in_array($kesssewsiegssiya, $this->mqmocoguqcyymgqu())) {
            goto ksisasisogugagwe;
        }
        goto isaskseywycoiksi;
        cgameakayuqewmuy:
        ksisasisogugagwe:
        goto uigqcoagsgoikwwa;
        isaskseywycoiksi:
        $this->taxonomies[] = $kesssewsiegssiya;
        goto cgameakayuqewmuy;
        wkeuiawyakqmkkeu:
    }
    public function mieeukuyckssemsm(array $seyqqsmuaiegkeeq) : self
    {
        goto smsgucswuyeoaeoc;
        msoscooawisocoia:
        return $this;
        goto kegscyoeseeqkwqo;
        mskcmsyuewcoicaa:
        awouamqqqcgwcami:
        goto msoscooawisocoia;
        smsgucswuyeoaeoc:
        foreach ($seyqqsmuaiegkeeq as $kesssewsiegssiya) {
            goto qkyuwiqqgkuikgwy;
            iygooyusgigoeoow:
            qqsoeicimqgoimau:
            goto imicgeaucyyaycau;
            qkyuwiqqgkuikgwy:
            if (!$kesssewsiegssiya) {
                goto mgiyosiiqgqeeawo;
            }
            goto aycikwgsmgssgeui;
            aycikwgsmgssgeui:
            $this->acqyqaaeeogkosoq($kesssewsiegssiya);
            goto wuquqskocseageai;
            wuquqskocseageai:
            mgiyosiiqgqeeawo:
            goto iygooyusgigoeoow;
            imicgeaucyyaycau:
        }
        goto mskcmsyuewcoicaa;
        kegscyoeseeqkwqo:
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
        goto koqwiwoycwuewsqi;
        qyeuammiwmguogks:
        qyaiqywcawamgqko:
        goto guuqakcckyuiwweq;
        guuqakcckyuiwweq:
        return $this;
        goto gmkwgkeaysqucoac;
        koqwiwoycwuewsqi:
        foreach ($ywoucyskcquysiwc as $cciauwuwuqaywgce) {
            goto cwqkqyekyqamcacc;
            acwcacwmkgyykoqq:
            muweikgaeoamyaaw:
            goto wqsyawgogiswmkgo;
            wqsyawgogiswmkgo:
            gmgqmceekqkkccmq:
            goto iuiioagqmsigmmqw;
            imcaayemagekyysy:
            $this->aucimgwswmgaocae($cciauwuwuqaywgce);
            goto acwcacwmkgyykoqq;
            cwqkqyekyqamcacc:
            if (!$cciauwuwuqaywgce instanceof Tab) {
                goto muweikgaeoamyaaw;
            }
            goto imcaayemagekyysy;
            iuiioagqmsigmmqw:
        }
        goto qyeuammiwmguogks;
        gmkwgkeaysqucoac:
    }
    
    public function osqsemgesogkmios() : bool
    {
        return !empty($this->equiyaoamqmaeckc());
    }
    
    public function register($uusmaiomayssaecw = null) : CMB2
    {
        goto kiywwuogciceaawk;
        waycoiasakwsguey:
        sggogwaomwkwyics:
        goto gmimikyuuummsqgq;
        amaoismuweoiksau:
        qiqwwkqsiuoumgio:
        goto qmwmsywoygsaqkio;
        gmimikyuuummsqgq:
        if (!$this->osqsemgesogkmios()) {
            goto umekamuowemeygwq;
        }
        goto uiicisqcyuwkusyo;
        kiywwuogciceaawk:
        $uiewakwqscemywuo = [];
        goto migagswgousikqii;
        mueqyymqucqywkuu:
        return $oeoswouussioaimo;
        goto qyqmkeauqqkmqseu;
        gyysamqwsycqoueo:
        $oeoswouussioaimo = new_cmb2_box($uiewakwqscemywuo);
        goto yqegceyooessmcyo;
        migagswgousikqii:
        if ($uusmaiomayssaecw) {
            goto sggogwaomwkwyics;
        }
        goto cowiomsgsyuyyega;
        yqegceyooessmcyo:
        
        $oeoswouussioaimo->object_type($this->aaamyckgicycisqq());
        goto mueqyymqucqywkuu;
        cgoysuiaaumssasc:
        umekamuowemeygwq:
        goto agoigaqmiekycgkc;
        cwcekuuiweyymiae:
        $uiewakwqscemywuo["\x74\141\x62\x73"] = array_filter($this->equiyaoamqmaeckc(), function ($cciauwuwuqaywgce) {
            return $cciauwuwuqaywgce->wkkcmkuiigsukyik();
        });
        goto cgoysuiaaumssasc;
        uiicisqcyuwkusyo:
        foreach ($this->equiyaoamqmaeckc() as $cciauwuwuqaywgce) {
            goto wmagsimyuceuawoy;
            auyyeawsgkagaaau:
            $this->ewweaossowcqywaw($cciauwuwuqaywgce->ugmceccgwaaaigiy());
            goto qcayciumgumuqcka;
            ywsygyaqaosmsowe:
            gsawyomckqmowaoy:
            goto accqceameoskmmau;
            qcayciumgumuqcka:
            yweyyywyogmugiuy:
            goto ywsygyaqaosmsowe;
            wmagsimyuceuawoy:
            if (!($cciauwuwuqaywgce instanceof Tab && $cciauwuwuqaywgce->wkkcmkuiigsukyik())) {
                goto yweyyywyogmugiuy;
            }
            goto auyyeawsgkagaaau;
            accqceameoskmmau:
        }
        goto ekoywwcmuycuogkk;
        ueoqeuoaskcsokea:
        $uiewakwqscemywuo["\x66\151\x65\154\x64\163"] = $this->yceyooiweyiqgsam($this->ugmceccgwaaaigiy());
        goto amaoismuweoiksau;
        qmwmsywoygsaqkio:
        $uiewakwqscemywuo = array_merge($uiewakwqscemywuo, $this->weqsyyuyccsemacu($uusmaiomayssaecw));
        goto gyysamqwsycqoueo;
        ekoywwcmuycuogkk:
        sguygkqsmgcuciyo:
        goto cwcekuuiweyymiae;
        cowiomsgsyuyyega:
        $uusmaiomayssaecw = $this->cisyiemkeykgkomc();
        goto waycoiasakwsguey;
        agoigaqmiekycgkc:
        if (!$this->mukiwuqwmywsckco()) {
            goto qiqwwkqsiuoumgio;
        }
        goto ueoqeuoaskcsokea;
        qyqmkeauqqkmqseu:
    }
    
    public function gisikkgygmseekyi() : self
    {
        return $this->ycgswwsswoyyeqgc(["\143\x6f\155\155\x65\156\164"]);
    }
    
    public function weqsyyuyccsemacu($kooiowmeygoykmms = null) : array
    {
        goto gsaucycumgsmsymc;
        vwgqesqmwyueecok:
        csokgguoueumamee:
        goto yewmgwogkoscccca;
        auyaikoiociousmy:
        if (!$this->mqmocoguqcyymgqu()) {
            goto qmqgueuqmwyksssq;
        }
        goto woyiusauaiiscqgk;
        aiamywyeoksiyawe:
        aumyyiwqawqyimwk:
        goto ssmwkcqiauygamuc;
        qesyekwwiuosiyau:
        $uiewakwqscemywuo["\163\150\157\x77\x5f\x6f\156"] = ["\x6b\x65\x79" => $this->aaamyckgicycisqq(), "\x76\x61\154\165\145" => [$kooiowmeygoykmms]];
        goto vwgqesqmwyueecok;
        mucwgogisqikigky:
        return $this->configuration;
        goto oeqcguogcymoaumy;
        kuiuwqwakomqyoey:
        uaqkeycsegiqgiae:
        goto keuacmemqaigmkgu;
        wqeqooqkimkggumq:
        $uiewakwqscemywuo["\x74\141\x78\157\156\157\x6d\x69\x65\163"] = $this->mqmocoguqcyymgqu();
        goto iygoyeckqssygyqg;
        qaocqwauwmuuiqwk:
        $egkyssmuqcwaciya .= "\40\x70\162\x2d\x6d\x65\x74\x61\x62\157\x78";
        goto aiamywyeoksiyawe;
        ccyowiaoasoqoaic:
        if ($this->iakygkwocqoukwuc()) {
            goto uaqkeycsegiqgiae;
        }
        goto auyaikoiociousmy;
        ceugeqiqkmygwwik:
        $egkyssmuqcwaciya = "\x66\x6f\x72\x6d\55\x63\157\x6e\x74\x61\x69\156\x65\x72";
        goto ccyowiaoasoqoaic;
        iqgyemmowuemqccs:
        $this->megwuoouecmkuaqm($uiewakwqscemywuo);
        goto mucwgogisqikigky;
        iygoyeckqssygyqg:
        $uiewakwqscemywuo["\x6f\x62\152\x65\143\164\137\x74\171\160\145\x73"] = ["\x74\x65\162\x6d"];
        goto omeaeeoqseegqyqw;
        woyiusauaiiscqgk:
        $egkyssmuqcwaciya .= "\x20\160\162\55\x74\x65\162\155";
        goto wqeqooqkimkggumq;
        keuacmemqaigmkgu:
        $uiewakwqscemywuo["\160\x6f\x73\x74\137\x74\171\160\145\x73"] = $this->iakygkwocqoukwuc();
        goto qaocqwauwmuuiqwk;
        kemuauaewuaeuowc:
        goto aumyyiwqawqyimwk;
        goto kuiuwqwakomqyoey;
        omeaeeoqseegqyqw:
        qmqgueuqmwyksssq:
        goto kemuauaewuaeuowc;
        yewmgwogkoscccca:
        $uiewakwqscemywuo["\x63\154\x61\163\x73\145\x73"] = $egkyssmuqcwaciya;
        goto iqgyemmowuemqccs;
        ssmwkcqiauygamuc:
        if (!(!$this->qwkguquqiiaekmsi() && $kooiowmeygoykmms)) {
            goto csokgguoueumamee;
        }
        goto qesyekwwiuosiyau;
        gsaucycumgsmsymc:
        $uiewakwqscemywuo = ["\151\x64" => $this->mwikyscisascoeea(), "\164\x69\x74\154\145" => $this->iwqugwigmoiagwec(), "\x63\x6f\156\164\145\x78\x74" => $this->yqsycyoeiusqqqgm(), "\x70\x72\151\157\162\x69\164\x79" => $this->yywskysiycwkwsgw(), "\x73\x68\x6f\167\137\x6e\x61\x6d\x65\163" => $this->eoceqqugyiaqqayw(), "\x63\141\x70\141\142\x69\x6c\x69\164\x79" => $this->gwaeeegmgggawiyi(), "\x64\x69\x73\x70\154\x61\171\137\143\142" => false, "\157\142\152\145\x63\164\137\164\171\x70\145\x73" => $this->aaamyckgicycisqq(), "\166\145\x72\x74\151\143\141\154\137\164\x61\x62\163" => $this->kyccqycmcyqomiqm(), "\141\x64\x6d\151\x6e\x5f\x6d\145\156\x75\137\150\x6f\x6f\x6b" => false];
        goto ceugeqiqkmygwwik;
        oeqcguogcymoaumy:
    }
}
