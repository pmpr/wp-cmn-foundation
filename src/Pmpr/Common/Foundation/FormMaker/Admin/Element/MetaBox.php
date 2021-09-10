<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b6c65a2d22             |
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
    
    protected ?string $context = "\156\157\162\155\x61\154";
    
    public function __construct($aokagokqyuysuksm, $meqocwsecsywiiqs = null, $yiyasiwyokuumigg = false)
    {
        goto sgaiuqsccumqooea;
        mikckoqyykkgeugq:
        $this->hookAble = $yiyasiwyokuumigg;
        goto scyuoqosoisassoe;
        qoecuquaikiiqqsm:
        $this->title = $meqocwsecsywiiqs;
        goto mikckoqyykkgeugq;
        scyuoqosoisassoe:
        parent::__construct($aokagokqyuysuksm);
        goto oomioaggyeeaysic;
        sgaiuqsccumqooea:
        $this->id = $aokagokqyuysuksm;
        goto qoecuquaikiiqqsm;
        oomioaggyeeaysic:
    }
    public function wigskegsqequoeks()
    {
        goto qugkumuigeucuoqa;
        igkggcocgwmsiaiy:
        iccgqioeygeciycq:
        goto gsoqmqmumeumywaq;
        gsoqmqmumeumywaq:
        parent::wigskegsqequoeks();
        goto kcyswcqsqcoggwai;
        sqaoumqsweiacuum:
        $this->qcsmikeggeemccuu("\x63\x6d\142\62\137\x61\144\x6d\151\156\137\x69\x6e\x69\x74", [$this, "\162\145\147\x69\163\164\x65\162"]);
        goto igkggcocgwmsiaiy;
        qugkumuigeucuoqa:
        if (!($this->qwkguquqiiaekmsi() && !ManipulateAjax::mcgoysmkqsqooceq())) {
            goto iccgqioeygeciycq;
        }
        goto sqaoumqsweiacuum;
        kcyswcqsqcoggwai:
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
        $this->sucsaaaeiecgqcem("\x6e\x6f\162\155\141\x6c");
        return $this;
    }
    
    public function igeseuiwcwwsuesi() : self
    {
        $this->sucsaaaeiecgqcem("\x73\x69\144\x65");
        return $this;
    }
    
    public function ymyesuiosuagoaco() : self
    {
        $this->sucsaaaeiecgqcem("\141\x64\x76\x61\x6e\143\x65\144");
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
        goto qeemqoosooyaegke;
        aameqiooucocgook:
        $aiowsaccomcoikus->jyumyyugiwwiqomk(count($this->ugmceccgwaaaigiy()) + 1);
        goto ucqcgumsoccaigae;
        isogegoossgykuiy:
        $this->fields[$aiowsaccomcoikus->mwikyscisascoeea()] = $aiowsaccomcoikus;
        goto ugeqoeowygumsuia;
        ucqcgumsoccaigae:
        escysimqcgcqkmom:
        goto isogegoossgykuiy;
        ugeqoeowygumsuia:
        return $this;
        goto wxiguggaamcqwyii;
        qeemqoosooyaegke:
        if ($aiowsaccomcoikus->yywskysiycwkwsgw()) {
            goto escysimqcgcqkmom;
        }
        goto aameqiooucocgook;
        wxiguggaamcqwyii:
    }
    
    public function ewweaossowcqywaw(array $ikgwqyuyckaewsow) : self
    {
        goto yqoiugwmcaoccouu;
        yqoiugwmcaoccouu:
        foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) {
            goto awgyucsimgkaeqcc;
            ssgomuoumiyccuuo:
            $this->mkksewyosgeumwsa($aiowsaccomcoikus);
            goto eucqeyegokoyegie;
            eucqeyegokoyegie:
            ouogqskwiuqyeqam:
            goto asieusgwkwamqacy;
            asieusgwkwamqacy:
            wauscgmymskwmkos:
            goto wqkoouqaoogskyuw;
            awgyucsimgkaeqcc:
            if (!$aiowsaccomcoikus instanceof Field) {
                goto ouogqskwiuqyeqam;
            }
            goto ssgomuoumiyccuuo;
            wqkoouqaoogskyuw:
        }
        goto iumeegsgcmyycymc;
        iumeegsgcmyycymc:
        qwaiaeicmcuyicss:
        goto yicweuosuasyciwm;
        yicweuosuasyciwm:
        return $this;
        goto mmuyykecaoggaemg;
        mmuyykecaoggaemg:
    }
    
    public function mukiwuqwmywsckco() : bool
    {
        return !empty($this->ugmceccgwaaaigiy());
    }
    
    public function kukswgcoysaeescm(string $mqyaskyaekmkegmg) : self
    {
        goto wqkiowymegocycgs;
        wqkiowymegocycgs:
        if (is_array($this->objectType)) {
            goto ocyayeiwgmsmiomi;
        }
        goto gggkiioeyaywqwcq;
        gggkiioeyaywqwcq:
        $this->objectType = [];
        goto qoqagcimawkcegme;
        kaqmaugqgwwugucc:
        return $this;
        goto ieyammyusayuiesk;
        qoqagcimawkcegme:
        ocyayeiwgmsmiomi:
        goto aqumewkymkyqckki;
        aqumewkymkyqckki:
        $this->objectType[] = $mqyaskyaekmkegmg;
        goto kaqmaugqgwwugucc;
        ieyammyusayuiesk:
    }
    
    public function iakygkwocqoukwuc() : ?array
    {
        return $this->postTypes;
    }
    
    public function mgieiwsmcswmmiim(string $useksmwkuswkwcqg) : self
    {
        goto egsoqqcqyckeogae;
        egsoqqcqyckeogae:
        if (in_array($useksmwkuswkwcqg, $this->iakygkwocqoukwuc())) {
            goto skgmcsquswcqyiig;
        }
        goto iycagsyoqoqqwamc;
        eucoegmqucoieeug:
        return $this;
        goto cqmwiaeeaegiqckq;
        mqeauomuwcycgekg:
        $this->kukswgcoysaeescm($useksmwkuswkwcqg);
        goto isekukgeyoucwesg;
        iycagsyoqoqqwamc:
        $this->postTypes[] = $useksmwkuswkwcqg;
        goto mqeauomuwcycgekg;
        isekukgeyoucwesg:
        skgmcsquswcqyiig:
        goto eucoegmqucoieeug;
        cqmwiaeeaegiqckq:
    }
    
    public function aueosikimququsko(array $sciomagaqmgggsiu) : self
    {
        goto eaqsmwsowasswwck;
        eaqsmwsowasswwck:
        foreach ($sciomagaqmgggsiu as $useksmwkuswkwcqg) {
            goto wuswwoggiwegqwsi;
            mayyksswcuawuswu:
            $this->mgieiwsmcswmmiim($useksmwkuswkwcqg);
            goto iqcskuiusowukoem;
            iqcskuiusowukoem:
            gskaeswcikaiaaui:
            goto qmuycmagkuookckm;
            qmuycmagkuookckm:
            cqoekiuwmwsmyyki:
            goto cgyoccckmuogiyka;
            wuswwoggiwegqwsi:
            if (!$useksmwkuswkwcqg) {
                goto gskaeswcikaiaaui;
            }
            goto mayyksswcuawuswu;
            cgyoccckmuogiyka:
        }
        goto uyccwiywcyesiwoi;
        uyccwiywcyesiwoi:
        wckkcawqigkukggg:
        goto qkkekmcemcqusiia;
        qkkekmcemcqusiia:
        return $this;
        goto wsykyiouyyysaywo;
        wsykyiouyyysaywo:
    }
    
    public function iwqugwigmoiagwec()
    {
        goto ckemugoooeseikmi;
        ckemugoooeseikmi:
        $meqocwsecsywiiqs = $this->qcgakseyaikigqco();
        goto smyayuoysyaukcca;
        kamqomyowmaeyeae:
        $meqocwsecsywiiqs = ManipulateHTML::uuccukgasskgimsq("\144\151\166", ["\143\x6c\141\x73\x73" => "\x70\x72\55\x6d\x65\x74\141\x62\x6f\x78\55\164\x69\164\154\145\40\155\171\x2d\x61\x75\x74\157"], [$wkaqekwwgqsqwcoi, $meqocwsecsywiiqs]);
        goto eaqmceoqyemuqsic;
        cuiiwyscgawowmwi:
        return $meqocwsecsywiiqs;
        goto ksisasisogugagwe;
        eaqmceoqyemuqsic:
        cygaymiommawgamm:
        goto cuiiwyscgawowmwi;
        smyayuoysyaukcca:
        if (!$this->eyamqkqiykagecsw()) {
            goto cygaymiommawgamm;
        }
        goto aaoseogoukyoqaiu;
        aaoseogoukyoqaiu:
        $wkaqekwwgqsqwcoi = ManipulateHTML::cuoygaaeqeqcuggu($this->eyamqkqiykagecsw(), ["\143\154\141\x73\x73" => "\x70\162\x2d\155\145\x74\x61\142\x6f\x78\55\151\x63\157\x6e\x20\x69\143\x6f\x6e\55\x73\155"]);
        goto kamqomyowmaeyeae;
        ksisasisogugagwe:
    }
    
    public function mqmocoguqcyymgqu() : ?array
    {
        return $this->taxonomies;
    }
    
    public function acqyqaaeeogkosoq(string $kesssewsiegssiya) : self
    {
        goto isaskseywycoiksi;
        wkeuiawyakqmkkeu:
        return $this;
        goto awouamqqqcgwcami;
        isaskseywycoiksi:
        if (in_array($kesssewsiegssiya, $this->mqmocoguqcyymgqu())) {
            goto wmmewkuagqcoymyi;
        }
        goto cgameakayuqewmuy;
        uigqcoagsgoikwwa:
        wmmewkuagqcoymyi:
        goto wkeuiawyakqmkkeu;
        cgameakayuqewmuy:
        $this->taxonomies[] = $kesssewsiegssiya;
        goto uigqcoagsgoikwwa;
        awouamqqqcgwcami:
    }
    public function mieeukuyckssemsm(array $seyqqsmuaiegkeeq) : self
    {
        goto mskcmsyuewcoicaa;
        msoscooawisocoia:
        qqsoeicimqgoimau:
        goto kegscyoeseeqkwqo;
        kegscyoeseeqkwqo:
        return $this;
        goto qyaiqywcawamgqko;
        mskcmsyuewcoicaa:
        foreach ($seyqqsmuaiegkeeq as $kesssewsiegssiya) {
            goto aycikwgsmgssgeui;
            wuquqskocseageai:
            $this->acqyqaaeeogkosoq($kesssewsiegssiya);
            goto iygooyusgigoeoow;
            iygooyusgigoeoow:
            qkyuwiqqgkuikgwy:
            goto imicgeaucyyaycau;
            aycikwgsmgssgeui:
            if (!$kesssewsiegssiya) {
                goto qkyuwiqqgkuikgwy;
            }
            goto wuquqskocseageai;
            imicgeaucyyaycau:
            mgiyosiiqgqeeawo:
            goto smsgucswuyeoaeoc;
            smsgucswuyeoaeoc:
        }
        goto msoscooawisocoia;
        qyaiqywcawamgqko:
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
        goto qyeuammiwmguogks;
        gmkwgkeaysqucoac:
        return $this;
        goto sggogwaomwkwyics;
        qyeuammiwmguogks:
        foreach ($ywoucyskcquysiwc as $cciauwuwuqaywgce) {
            goto imcaayemagekyysy;
            wqsyawgogiswmkgo:
            cwqkqyekyqamcacc:
            goto iuiioagqmsigmmqw;
            acwcacwmkgyykoqq:
            $this->aucimgwswmgaocae($cciauwuwuqaywgce);
            goto wqsyawgogiswmkgo;
            imcaayemagekyysy:
            if (!$cciauwuwuqaywgce instanceof Tab) {
                goto cwqkqyekyqamcacc;
            }
            goto acwcacwmkgyykoqq;
            iuiioagqmsigmmqw:
            muweikgaeoamyaaw:
            goto koqwiwoycwuewsqi;
            koqwiwoycwuewsqi:
        }
        goto guuqakcckyuiwweq;
        guuqakcckyuiwweq:
        gmgqmceekqkkccmq:
        goto gmkwgkeaysqucoac;
        sggogwaomwkwyics:
    }
    
    public function osqsemgesogkmios() : bool
    {
        return !empty($this->equiyaoamqmaeckc());
    }
    
    public function register($uusmaiomayssaecw = null) : CMB2
    {
        goto migagswgousikqii;
        mueqyymqucqywkuu:
        
        $oeoswouussioaimo->object_type($this->aaamyckgicycisqq());
        goto qyqmkeauqqkmqseu;
        cgoysuiaaumssasc:
        $uiewakwqscemywuo["\164\x61\142\x73"] = array_filter($this->equiyaoamqmaeckc(), function ($cciauwuwuqaywgce) {
            return $cciauwuwuqaywgce->wkkcmkuiigsukyik();
        });
        goto agoigaqmiekycgkc;
        yqegceyooessmcyo:
        $oeoswouussioaimo = new_cmb2_box($uiewakwqscemywuo);
        goto mueqyymqucqywkuu;
        migagswgousikqii:
        $uiewakwqscemywuo = [];
        goto cowiomsgsyuyyega;
        cowiomsgsyuyyega:
        if ($uusmaiomayssaecw) {
            goto sguygkqsmgcuciyo;
        }
        goto waycoiasakwsguey;
        gyysamqwsycqoueo:
        $uiewakwqscemywuo = array_merge($uiewakwqscemywuo, $this->weqsyyuyccsemacu($uusmaiomayssaecw));
        goto yqegceyooessmcyo;
        uiicisqcyuwkusyo:
        if (!$this->osqsemgesogkmios()) {
            goto qiqwwkqsiuoumgio;
        }
        goto ekoywwcmuycuogkk;
        gmimikyuuummsqgq:
        sguygkqsmgcuciyo:
        goto uiicisqcyuwkusyo;
        waycoiasakwsguey:
        $uusmaiomayssaecw = $this->cisyiemkeykgkomc();
        goto gmimikyuuummsqgq;
        qyqmkeauqqkmqseu:
        return $oeoswouussioaimo;
        goto qmqgueuqmwyksssq;
        ueoqeuoaskcsokea:
        if (!$this->mukiwuqwmywsckco()) {
            goto kiywwuogciceaawk;
        }
        goto amaoismuweoiksau;
        cwcekuuiweyymiae:
        gsawyomckqmowaoy:
        goto cgoysuiaaumssasc;
        ekoywwcmuycuogkk:
        foreach ($this->equiyaoamqmaeckc() as $cciauwuwuqaywgce) {
            goto auyyeawsgkagaaau;
            accqceameoskmmau:
            yweyyywyogmugiuy:
            goto umekamuowemeygwq;
            ywsygyaqaosmsowe:
            wmagsimyuceuawoy:
            goto accqceameoskmmau;
            qcayciumgumuqcka:
            $this->ewweaossowcqywaw($cciauwuwuqaywgce->ugmceccgwaaaigiy());
            goto ywsygyaqaosmsowe;
            auyyeawsgkagaaau:
            if (!($cciauwuwuqaywgce instanceof Tab && $cciauwuwuqaywgce->wkkcmkuiigsukyik())) {
                goto wmagsimyuceuawoy;
            }
            goto qcayciumgumuqcka;
            umekamuowemeygwq:
        }
        goto cwcekuuiweyymiae;
        qmwmsywoygsaqkio:
        kiywwuogciceaawk:
        goto gyysamqwsycqoueo;
        amaoismuweoiksau:
        $uiewakwqscemywuo["\146\151\145\x6c\x64\163"] = $this->yceyooiweyiqgsam($this->ugmceccgwaaaigiy());
        goto qmwmsywoygsaqkio;
        agoigaqmiekycgkc:
        qiqwwkqsiuoumgio:
        goto ueoqeuoaskcsokea;
        qmqgueuqmwyksssq:
    }
    
    public function gisikkgygmseekyi() : self
    {
        return $this->ycgswwsswoyyeqgc(["\143\157\x6d\x6d\x65\x6e\x74"]);
    }
    
    public function weqsyyuyccsemacu($kooiowmeygoykmms = null) : array
    {
        goto ceugeqiqkmygwwik;
        qaocqwauwmuuiqwk:
        $uiewakwqscemywuo["\x70\157\163\164\137\164\171\160\145\163"] = $this->iakygkwocqoukwuc();
        goto aiamywyeoksiyawe;
        woyiusauaiiscqgk:
        if (!$this->mqmocoguqcyymgqu()) {
            goto uaqkeycsegiqgiae;
        }
        goto wqeqooqkimkggumq;
        mucwgogisqikigky:
        $this->megwuoouecmkuaqm($uiewakwqscemywuo);
        goto oeqcguogcymoaumy;
        omeaeeoqseegqyqw:
        $uiewakwqscemywuo["\157\x62\152\145\x63\164\137\x74\x79\160\145\163"] = ["\164\x65\162\x6d"];
        goto kemuauaewuaeuowc;
        iygoyeckqssygyqg:
        $uiewakwqscemywuo["\164\141\170\157\x6e\x6f\x6d\151\145\163"] = $this->mqmocoguqcyymgqu();
        goto omeaeeoqseegqyqw;
        aiamywyeoksiyawe:
        $egkyssmuqcwaciya .= "\x20\160\162\x2d\x6d\145\x74\x61\x62\157\170";
        goto ssmwkcqiauygamuc;
        oeqcguogcymoaumy:
        return $this->configuration;
        goto uuoasawseskowkkq;
        iqgyemmowuemqccs:
        $uiewakwqscemywuo["\143\x6c\141\163\163\x65\x73"] = $egkyssmuqcwaciya;
        goto mucwgogisqikigky;
        yewmgwogkoscccca:
        gsaucycumgsmsymc:
        goto iqgyemmowuemqccs;
        kuiuwqwakomqyoey:
        goto csokgguoueumamee;
        goto keuacmemqaigmkgu;
        vwgqesqmwyueecok:
        $uiewakwqscemywuo["\x73\150\x6f\167\137\157\156"] = ["\153\145\x79" => $this->aaamyckgicycisqq(), "\x76\x61\x6c\165\145" => [$kooiowmeygoykmms]];
        goto yewmgwogkoscccca;
        kemuauaewuaeuowc:
        uaqkeycsegiqgiae:
        goto kuiuwqwakomqyoey;
        ceugeqiqkmygwwik:
        $uiewakwqscemywuo = ["\x69\x64" => $this->mwikyscisascoeea(), "\164\151\164\x6c\145" => $this->iwqugwigmoiagwec(), "\x63\x6f\156\164\x65\170\164" => $this->yqsycyoeiusqqqgm(), "\x70\162\151\157\x72\151\164\x79" => $this->yywskysiycwkwsgw(), "\163\150\157\167\137\x6e\x61\x6d\x65\x73" => $this->eoceqqugyiaqqayw(), "\143\141\160\141\142\151\x6c\x69\x74\171" => $this->gwaeeegmgggawiyi(), "\144\151\x73\x70\x6c\141\x79\x5f\143\142" => false, "\157\x62\x6a\145\x63\164\137\164\171\x70\145\x73" => $this->aaamyckgicycisqq(), "\x76\x65\162\164\x69\x63\141\154\x5f\164\x61\142\x73" => $this->kyccqycmcyqomiqm(), "\141\x64\155\151\156\137\155\x65\156\165\x5f\150\157\157\x6b" => false];
        goto ccyowiaoasoqoaic;
        ssmwkcqiauygamuc:
        csokgguoueumamee:
        goto qesyekwwiuosiyau;
        keuacmemqaigmkgu:
        aumyyiwqawqyimwk:
        goto qaocqwauwmuuiqwk;
        ccyowiaoasoqoaic:
        $egkyssmuqcwaciya = "\x66\x6f\x72\x6d\55\143\157\x6e\164\x61\151\x6e\145\x72";
        goto auyaikoiociousmy;
        wqeqooqkimkggumq:
        $egkyssmuqcwaciya .= "\40\x70\162\55\164\145\x72\155";
        goto iygoyeckqssygyqg;
        auyaikoiociousmy:
        if ($this->iakygkwocqoukwuc()) {
            goto aumyyiwqawqyimwk;
        }
        goto woyiusauaiiscqgk;
        qesyekwwiuosiyau:
        if (!(!$this->qwkguquqiiaekmsi() && $kooiowmeygoykmms)) {
            goto gsaucycumgsmsymc;
        }
        goto vwgqesqmwyueecok;
        uuoasawseskowkkq:
    }
}
