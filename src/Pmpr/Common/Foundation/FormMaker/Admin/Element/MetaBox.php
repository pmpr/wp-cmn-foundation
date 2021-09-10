<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b3993be3fb             |
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
    
    protected ?string $context = "\x6e\157\162\x6d\141\x6c";
    
    public function __construct($aokagokqyuysuksm, $meqocwsecsywiiqs = null, $yiyasiwyokuumigg = false)
    {
        goto uyiaigymeewauaku;
        uyiaigymeewauaku:
        $this->id = $aokagokqyuysuksm;
        goto sgaiuqsccumqooea;
        mikckoqyykkgeugq:
        parent::__construct($aokagokqyuysuksm);
        goto scyuoqosoisassoe;
        qoecuquaikiiqqsm:
        $this->hookAble = $yiyasiwyokuumigg;
        goto mikckoqyykkgeugq;
        sgaiuqsccumqooea:
        $this->title = $meqocwsecsywiiqs;
        goto qoecuquaikiiqqsm;
        scyuoqosoisassoe:
    }
    public function wigskegsqequoeks()
    {
        goto iccgqioeygeciycq;
        igkggcocgwmsiaiy:
        parent::wigskegsqequoeks();
        goto gsoqmqmumeumywaq;
        qugkumuigeucuoqa:
        $this->qcsmikeggeemccuu("\143\x6d\x62\x32\137\x61\x64\155\x69\x6e\137\x69\x6e\151\164", [$this, "\162\145\147\151\163\x74\x65\x72"]);
        goto sqaoumqsweiacuum;
        sqaoumqsweiacuum:
        oomioaggyeeaysic:
        goto igkggcocgwmsiaiy;
        iccgqioeygeciycq:
        if (!($this->qwkguquqiiaekmsi() && !ManipulateAjax::mcgoysmkqsqooceq())) {
            goto oomioaggyeeaysic;
        }
        goto qugkumuigeucuoqa;
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
        $this->sucsaaaeiecgqcem("\x6e\x6f\x72\155\141\x6c");
        return $this;
    }
    
    public function igeseuiwcwwsuesi() : self
    {
        $this->sucsaaaeiecgqcem("\x73\151\144\145");
        return $this;
    }
    
    public function ymyesuiosuagoaco() : self
    {
        $this->sucsaaaeiecgqcem("\x61\x64\166\141\156\x63\x65\x64");
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
        ucqcgumsoccaigae:
        $this->fields[$aiowsaccomcoikus->mwikyscisascoeea()] = $aiowsaccomcoikus;
        goto isogegoossgykuiy;
        escysimqcgcqkmom:
        if ($aiowsaccomcoikus->yywskysiycwkwsgw()) {
            goto kcyswcqsqcoggwai;
        }
        goto qeemqoosooyaegke;
        aameqiooucocgook:
        kcyswcqsqcoggwai:
        goto ucqcgumsoccaigae;
        isogegoossgykuiy:
        return $this;
        goto ugeqoeowygumsuia;
        ugeqoeowygumsuia:
    }
    
    public function ewweaossowcqywaw(array $ikgwqyuyckaewsow) : self
    {
        goto wqkoouqaoogskyuw;
        wqkoouqaoogskyuw:
        foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) {
            goto ouogqskwiuqyeqam;
            awgyucsimgkaeqcc:
            $this->mkksewyosgeumwsa($aiowsaccomcoikus);
            goto ssgomuoumiyccuuo;
            ouogqskwiuqyeqam:
            if (!$aiowsaccomcoikus instanceof Field) {
                goto wauscgmymskwmkos;
            }
            goto awgyucsimgkaeqcc;
            ssgomuoumiyccuuo:
            wauscgmymskwmkos:
            goto eucqeyegokoyegie;
            eucqeyegokoyegie:
            qwaiaeicmcuyicss:
            goto asieusgwkwamqacy;
            asieusgwkwamqacy:
        }
        goto yqoiugwmcaoccouu;
        iumeegsgcmyycymc:
        return $this;
        goto yicweuosuasyciwm;
        yqoiugwmcaoccouu:
        wxiguggaamcqwyii:
        goto iumeegsgcmyycymc;
        yicweuosuasyciwm:
    }
    
    public function mukiwuqwmywsckco() : bool
    {
        return !empty($this->ugmceccgwaaaigiy());
    }
    
    public function kukswgcoysaeescm(string $mqyaskyaekmkegmg) : self
    {
        goto ocyayeiwgmsmiomi;
        ocyayeiwgmsmiomi:
        if (is_array($this->objectType)) {
            goto mmuyykecaoggaemg;
        }
        goto wqkiowymegocycgs;
        wqkiowymegocycgs:
        $this->objectType = [];
        goto gggkiioeyaywqwcq;
        qoqagcimawkcegme:
        $this->objectType[] = $mqyaskyaekmkegmg;
        goto aqumewkymkyqckki;
        gggkiioeyaywqwcq:
        mmuyykecaoggaemg:
        goto qoqagcimawkcegme;
        aqumewkymkyqckki:
        return $this;
        goto kaqmaugqgwwugucc;
        kaqmaugqgwwugucc:
    }
    
    public function iakygkwocqoukwuc() : ?array
    {
        return $this->postTypes;
    }
    
    public function mgieiwsmcswmmiim(string $useksmwkuswkwcqg) : self
    {
        goto skgmcsquswcqyiig;
        egsoqqcqyckeogae:
        $this->postTypes[] = $useksmwkuswkwcqg;
        goto iycagsyoqoqqwamc;
        mqeauomuwcycgekg:
        ieyammyusayuiesk:
        goto isekukgeyoucwesg;
        iycagsyoqoqqwamc:
        $this->kukswgcoysaeescm($useksmwkuswkwcqg);
        goto mqeauomuwcycgekg;
        skgmcsquswcqyiig:
        if (in_array($useksmwkuswkwcqg, $this->iakygkwocqoukwuc())) {
            goto ieyammyusayuiesk;
        }
        goto egsoqqcqyckeogae;
        isekukgeyoucwesg:
        return $this;
        goto eucoegmqucoieeug;
        eucoegmqucoieeug:
    }
    
    public function aueosikimququsko(array $sciomagaqmgggsiu) : self
    {
        goto cgyoccckmuogiyka;
        uyccwiywcyesiwoi:
        return $this;
        goto qkkekmcemcqusiia;
        cgyoccckmuogiyka:
        foreach ($sciomagaqmgggsiu as $useksmwkuswkwcqg) {
            goto gskaeswcikaiaaui;
            wuswwoggiwegqwsi:
            $this->mgieiwsmcswmmiim($useksmwkuswkwcqg);
            goto mayyksswcuawuswu;
            iqcskuiusowukoem:
            wckkcawqigkukggg:
            goto qmuycmagkuookckm;
            mayyksswcuawuswu:
            cqoekiuwmwsmyyki:
            goto iqcskuiusowukoem;
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
        qkkekmcemcqusiia:
    }
    
    public function iwqugwigmoiagwec()
    {
        goto cygaymiommawgamm;
        smyayuoysyaukcca:
        $wkaqekwwgqsqwcoi = ManipulateHTML::cuoygaaeqeqcuggu($this->eyamqkqiykagecsw(), ["\x63\154\141\x73\x73" => "\x70\x72\x2d\155\145\x74\x61\x62\157\170\55\151\x63\157\x6e\40\151\143\x6f\156\x2d\x73\x6d"]);
        goto aaoseogoukyoqaiu;
        ckemugoooeseikmi:
        if (!$this->eyamqkqiykagecsw()) {
            goto wsykyiouyyysaywo;
        }
        goto smyayuoysyaukcca;
        aaoseogoukyoqaiu:
        $meqocwsecsywiiqs = ManipulateHTML::uuccukgasskgimsq("\144\151\x76", ["\143\154\x61\163\163" => "\160\162\x2d\x6d\145\164\x61\x62\x6f\x78\55\x74\151\x74\x6c\145\40\155\171\x2d\141\165\x74\157"], [$wkaqekwwgqsqwcoi, $meqocwsecsywiiqs]);
        goto kamqomyowmaeyeae;
        cygaymiommawgamm:
        $meqocwsecsywiiqs = $this->qcgakseyaikigqco();
        goto ckemugoooeseikmi;
        kamqomyowmaeyeae:
        wsykyiouyyysaywo:
        goto eaqmceoqyemuqsic;
        eaqmceoqyemuqsic:
        return $meqocwsecsywiiqs;
        goto cuiiwyscgawowmwi;
        cuiiwyscgawowmwi:
    }
    
    public function mqmocoguqcyymgqu() : ?array
    {
        return $this->taxonomies;
    }
    
    public function acqyqaaeeogkosoq(string $kesssewsiegssiya) : self
    {
        goto wmmewkuagqcoymyi;
        cgameakayuqewmuy:
        ksisasisogugagwe:
        goto uigqcoagsgoikwwa;
        uigqcoagsgoikwwa:
        return $this;
        goto wkeuiawyakqmkkeu;
        wmmewkuagqcoymyi:
        if (in_array($kesssewsiegssiya, $this->mqmocoguqcyymgqu())) {
            goto ksisasisogugagwe;
        }
        goto isaskseywycoiksi;
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
            aycikwgsmgssgeui:
            $this->acqyqaaeeogkosoq($kesssewsiegssiya);
            goto wuquqskocseageai;
            iygooyusgigoeoow:
            qqsoeicimqgoimau:
            goto imicgeaucyyaycau;
            wuquqskocseageai:
            mgiyosiiqgqeeawo:
            goto iygooyusgigoeoow;
            qkyuwiqqgkuikgwy:
            if (!$kesssewsiegssiya) {
                goto mgiyosiiqgqeeawo;
            }
            goto aycikwgsmgssgeui;
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
        koqwiwoycwuewsqi:
        foreach ($ywoucyskcquysiwc as $cciauwuwuqaywgce) {
            goto cwqkqyekyqamcacc;
            acwcacwmkgyykoqq:
            muweikgaeoamyaaw:
            goto wqsyawgogiswmkgo;
            wqsyawgogiswmkgo:
            gmgqmceekqkkccmq:
            goto iuiioagqmsigmmqw;
            cwqkqyekyqamcacc:
            if (!$cciauwuwuqaywgce instanceof Tab) {
                goto muweikgaeoamyaaw;
            }
            goto imcaayemagekyysy;
            imcaayemagekyysy:
            $this->aucimgwswmgaocae($cciauwuwuqaywgce);
            goto acwcacwmkgyykoqq;
            iuiioagqmsigmmqw:
        }
        goto qyeuammiwmguogks;
        guuqakcckyuiwweq:
        return $this;
        goto gmkwgkeaysqucoac;
        gmkwgkeaysqucoac:
    }
    
    public function osqsemgesogkmios() : bool
    {
        return !empty($this->equiyaoamqmaeckc());
    }
    
    public function register($uusmaiomayssaecw = null) : CMB2
    {
        goto kiywwuogciceaawk;
        uiicisqcyuwkusyo:
        foreach ($this->equiyaoamqmaeckc() as $cciauwuwuqaywgce) {
            goto wmagsimyuceuawoy;
            ywsygyaqaosmsowe:
            gsawyomckqmowaoy:
            goto accqceameoskmmau;
            qcayciumgumuqcka:
            yweyyywyogmugiuy:
            goto ywsygyaqaosmsowe;
            auyyeawsgkagaaau:
            $this->ewweaossowcqywaw($cciauwuwuqaywgce->ugmceccgwaaaigiy());
            goto qcayciumgumuqcka;
            wmagsimyuceuawoy:
            if (!($cciauwuwuqaywgce instanceof Tab && $cciauwuwuqaywgce->wkkcmkuiigsukyik())) {
                goto yweyyywyogmugiuy;
            }
            goto auyyeawsgkagaaau;
            accqceameoskmmau:
        }
        goto ekoywwcmuycuogkk;
        migagswgousikqii:
        if ($uusmaiomayssaecw) {
            goto sggogwaomwkwyics;
        }
        goto cowiomsgsyuyyega;
        qmwmsywoygsaqkio:
        $uiewakwqscemywuo = array_merge($uiewakwqscemywuo, $this->weqsyyuyccsemacu($uusmaiomayssaecw));
        goto gyysamqwsycqoueo;
        waycoiasakwsguey:
        sggogwaomwkwyics:
        goto gmimikyuuummsqgq;
        cowiomsgsyuyyega:
        $uusmaiomayssaecw = $this->cisyiemkeykgkomc();
        goto waycoiasakwsguey;
        yqegceyooessmcyo:
        
        $oeoswouussioaimo->object_type($this->aaamyckgicycisqq());
        goto mueqyymqucqywkuu;
        ueoqeuoaskcsokea:
        $uiewakwqscemywuo["\x66\x69\145\x6c\x64\163"] = $this->yceyooiweyiqgsam($this->ugmceccgwaaaigiy());
        goto amaoismuweoiksau;
        agoigaqmiekycgkc:
        if (!$this->mukiwuqwmywsckco()) {
            goto qiqwwkqsiuoumgio;
        }
        goto ueoqeuoaskcsokea;
        cgoysuiaaumssasc:
        umekamuowemeygwq:
        goto agoigaqmiekycgkc;
        cwcekuuiweyymiae:
        $uiewakwqscemywuo["\164\x61\142\x73"] = array_filter($this->equiyaoamqmaeckc(), function ($cciauwuwuqaywgce) {
            return $cciauwuwuqaywgce->wkkcmkuiigsukyik();
        });
        goto cgoysuiaaumssasc;
        ekoywwcmuycuogkk:
        sguygkqsmgcuciyo:
        goto cwcekuuiweyymiae;
        mueqyymqucqywkuu:
        return $oeoswouussioaimo;
        goto qyqmkeauqqkmqseu;
        amaoismuweoiksau:
        qiqwwkqsiuoumgio:
        goto qmwmsywoygsaqkio;
        kiywwuogciceaawk:
        $uiewakwqscemywuo = [];
        goto migagswgousikqii;
        gyysamqwsycqoueo:
        $oeoswouussioaimo = new_cmb2_box($uiewakwqscemywuo);
        goto yqegceyooessmcyo;
        gmimikyuuummsqgq:
        if (!$this->osqsemgesogkmios()) {
            goto umekamuowemeygwq;
        }
        goto uiicisqcyuwkusyo;
        qyqmkeauqqkmqseu:
    }
    
    public function gisikkgygmseekyi() : self
    {
        return $this->ycgswwsswoyyeqgc(["\143\157\155\x6d\145\156\x74"]);
    }
    
    public function weqsyyuyccsemacu($kooiowmeygoykmms = null) : array
    {
        goto gsaucycumgsmsymc;
        yewmgwogkoscccca:
        $uiewakwqscemywuo["\143\154\141\163\x73\145\163"] = $egkyssmuqcwaciya;
        goto iqgyemmowuemqccs;
        ccyowiaoasoqoaic:
        if ($this->iakygkwocqoukwuc()) {
            goto uaqkeycsegiqgiae;
        }
        goto auyaikoiociousmy;
        omeaeeoqseegqyqw:
        qmqgueuqmwyksssq:
        goto kemuauaewuaeuowc;
        ssmwkcqiauygamuc:
        if (!(!$this->qwkguquqiiaekmsi() && $kooiowmeygoykmms)) {
            goto csokgguoueumamee;
        }
        goto qesyekwwiuosiyau;
        mucwgogisqikigky:
        return $this->configuration;
        goto oeqcguogcymoaumy;
        iqgyemmowuemqccs:
        $this->megwuoouecmkuaqm($uiewakwqscemywuo);
        goto mucwgogisqikigky;
        qaocqwauwmuuiqwk:
        $egkyssmuqcwaciya .= "\x20\x70\162\55\x6d\145\164\x61\x62\x6f\170";
        goto aiamywyeoksiyawe;
        iygoyeckqssygyqg:
        $uiewakwqscemywuo["\157\x62\152\x65\x63\164\x5f\164\171\x70\145\163"] = ["\x74\145\x72\155"];
        goto omeaeeoqseegqyqw;
        gsaucycumgsmsymc:
        $uiewakwqscemywuo = ["\151\144" => $this->mwikyscisascoeea(), "\164\x69\x74\x6c\145" => $this->iwqugwigmoiagwec(), "\143\157\156\x74\x65\170\164" => $this->yqsycyoeiusqqqgm(), "\160\162\x69\x6f\x72\151\164\171" => $this->yywskysiycwkwsgw(), "\163\150\157\167\137\156\141\x6d\145\x73" => $this->eoceqqugyiaqqayw(), "\x63\141\160\x61\x62\151\154\x69\x74\171" => $this->gwaeeegmgggawiyi(), "\144\x69\x73\x70\x6c\x61\171\137\143\142" => false, "\x6f\142\x6a\145\x63\164\x5f\164\x79\x70\145\163" => $this->aaamyckgicycisqq(), "\x76\x65\x72\x74\151\x63\x61\x6c\x5f\164\141\142\x73" => $this->kyccqycmcyqomiqm(), "\x61\x64\155\151\x6e\x5f\155\x65\x6e\x75\137\x68\x6f\157\x6b" => false];
        goto ceugeqiqkmygwwik;
        woyiusauaiiscqgk:
        $egkyssmuqcwaciya .= "\40\160\x72\x2d\x74\x65\162\x6d";
        goto wqeqooqkimkggumq;
        wqeqooqkimkggumq:
        $uiewakwqscemywuo["\164\141\170\157\156\x6f\155\x69\x65\163"] = $this->mqmocoguqcyymgqu();
        goto iygoyeckqssygyqg;
        vwgqesqmwyueecok:
        csokgguoueumamee:
        goto yewmgwogkoscccca;
        qesyekwwiuosiyau:
        $uiewakwqscemywuo["\x73\x68\157\167\137\x6f\156"] = ["\x6b\x65\x79" => $this->aaamyckgicycisqq(), "\166\141\154\165\x65" => [$kooiowmeygoykmms]];
        goto vwgqesqmwyueecok;
        kuiuwqwakomqyoey:
        uaqkeycsegiqgiae:
        goto keuacmemqaigmkgu;
        aiamywyeoksiyawe:
        aumyyiwqawqyimwk:
        goto ssmwkcqiauygamuc;
        ceugeqiqkmygwwik:
        $egkyssmuqcwaciya = "\146\157\162\x6d\x2d\x63\157\156\164\x61\x69\x6e\x65\x72";
        goto ccyowiaoasoqoaic;
        keuacmemqaigmkgu:
        $uiewakwqscemywuo["\x70\157\163\x74\x5f\x74\171\160\145\x73"] = $this->iakygkwocqoukwuc();
        goto qaocqwauwmuuiqwk;
        kemuauaewuaeuowc:
        goto aumyyiwqawqyimwk;
        goto kuiuwqwakomqyoey;
        auyaikoiociousmy:
        if (!$this->mqmocoguqcyymgqu()) {
            goto qmqgueuqmwyksssq;
        }
        goto woyiusauaiiscqgk;
        oeqcguogcymoaumy:
    }
}
