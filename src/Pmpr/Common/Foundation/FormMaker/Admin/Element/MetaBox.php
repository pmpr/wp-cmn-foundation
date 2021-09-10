<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b499786a1b             |
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
    
    protected ?string $context = "\x6e\x6f\162\155\x61\x6c";
    
    public function __construct($aokagokqyuysuksm, $meqocwsecsywiiqs = null, $yiyasiwyokuumigg = false)
    {
        goto uyiaigymeewauaku;
        qoecuquaikiiqqsm:
        $this->hookAble = $yiyasiwyokuumigg;
        goto mikckoqyykkgeugq;
        uyiaigymeewauaku:
        $this->id = $aokagokqyuysuksm;
        goto sgaiuqsccumqooea;
        sgaiuqsccumqooea:
        $this->title = $meqocwsecsywiiqs;
        goto qoecuquaikiiqqsm;
        mikckoqyykkgeugq:
        parent::__construct($aokagokqyuysuksm);
        goto scyuoqosoisassoe;
        scyuoqosoisassoe:
    }
    public function wigskegsqequoeks()
    {
        goto iccgqioeygeciycq;
        iccgqioeygeciycq:
        if (!($this->qwkguquqiiaekmsi() && !ManipulateAjax::mcgoysmkqsqooceq())) {
            goto oomioaggyeeaysic;
        }
        goto qugkumuigeucuoqa;
        sqaoumqsweiacuum:
        oomioaggyeeaysic:
        goto igkggcocgwmsiaiy;
        igkggcocgwmsiaiy:
        parent::wigskegsqequoeks();
        goto gsoqmqmumeumywaq;
        qugkumuigeucuoqa:
        $this->qcsmikeggeemccuu("\143\x6d\142\62\x5f\x61\144\x6d\151\156\137\151\156\x69\x74", [$this, "\x72\x65\x67\151\163\164\145\x72"]);
        goto sqaoumqsweiacuum;
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
        $this->sucsaaaeiecgqcem("\x6e\157\x72\155\141\154");
        return $this;
    }
    
    public function igeseuiwcwwsuesi() : self
    {
        $this->sucsaaaeiecgqcem("\163\x69\144\x65");
        return $this;
    }
    
    public function ymyesuiosuagoaco() : self
    {
        $this->sucsaaaeiecgqcem("\141\x64\x76\x61\x6e\x63\x65\144");
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
        ucqcgumsoccaigae:
        $this->fields[$aiowsaccomcoikus->mwikyscisascoeea()] = $aiowsaccomcoikus;
        goto isogegoossgykuiy;
        escysimqcgcqkmom:
        if ($aiowsaccomcoikus->yywskysiycwkwsgw()) {
            goto kcyswcqsqcoggwai;
        }
        goto qeemqoosooyaegke;
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
            awgyucsimgkaeqcc:
            $this->mkksewyosgeumwsa($aiowsaccomcoikus);
            goto ssgomuoumiyccuuo;
            ssgomuoumiyccuuo:
            wauscgmymskwmkos:
            goto eucqeyegokoyegie;
            ouogqskwiuqyeqam:
            if (!$aiowsaccomcoikus instanceof Field) {
                goto wauscgmymskwmkos;
            }
            goto awgyucsimgkaeqcc;
            eucqeyegokoyegie:
            qwaiaeicmcuyicss:
            goto asieusgwkwamqacy;
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
        gggkiioeyaywqwcq:
        mmuyykecaoggaemg:
        goto qoqagcimawkcegme;
        wqkiowymegocycgs:
        $this->objectType = [];
        goto gggkiioeyaywqwcq;
        ocyayeiwgmsmiomi:
        if (is_array($this->objectType)) {
            goto mmuyykecaoggaemg;
        }
        goto wqkiowymegocycgs;
        qoqagcimawkcegme:
        $this->objectType[] = $mqyaskyaekmkegmg;
        goto aqumewkymkyqckki;
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
        skgmcsquswcqyiig:
        if (in_array($useksmwkuswkwcqg, $this->iakygkwocqoukwuc())) {
            goto ieyammyusayuiesk;
        }
        goto egsoqqcqyckeogae;
        mqeauomuwcycgekg:
        ieyammyusayuiesk:
        goto isekukgeyoucwesg;
        iycagsyoqoqqwamc:
        $this->kukswgcoysaeescm($useksmwkuswkwcqg);
        goto mqeauomuwcycgekg;
        isekukgeyoucwesg:
        return $this;
        goto eucoegmqucoieeug;
        eucoegmqucoieeug:
    }
    
    public function aueosikimququsko(array $sciomagaqmgggsiu) : self
    {
        goto cgyoccckmuogiyka;
        cgyoccckmuogiyka:
        foreach ($sciomagaqmgggsiu as $useksmwkuswkwcqg) {
            goto gskaeswcikaiaaui;
            wuswwoggiwegqwsi:
            $this->mgieiwsmcswmmiim($useksmwkuswkwcqg);
            goto mayyksswcuawuswu;
            gskaeswcikaiaaui:
            if (!$useksmwkuswkwcqg) {
                goto cqoekiuwmwsmyyki;
            }
            goto wuswwoggiwegqwsi;
            iqcskuiusowukoem:
            wckkcawqigkukggg:
            goto qmuycmagkuookckm;
            mayyksswcuawuswu:
            cqoekiuwmwsmyyki:
            goto iqcskuiusowukoem;
            qmuycmagkuookckm:
        }
        goto eaqsmwsowasswwck;
        uyccwiywcyesiwoi:
        return $this;
        goto qkkekmcemcqusiia;
        eaqsmwsowasswwck:
        cqmwiaeeaegiqckq:
        goto uyccwiywcyesiwoi;
        qkkekmcemcqusiia:
    }
    
    public function iwqugwigmoiagwec()
    {
        goto cygaymiommawgamm;
        kamqomyowmaeyeae:
        wsykyiouyyysaywo:
        goto eaqmceoqyemuqsic;
        cygaymiommawgamm:
        $meqocwsecsywiiqs = $this->qcgakseyaikigqco();
        goto ckemugoooeseikmi;
        eaqmceoqyemuqsic:
        return $meqocwsecsywiiqs;
        goto cuiiwyscgawowmwi;
        smyayuoysyaukcca:
        $wkaqekwwgqsqwcoi = ManipulateHTML::cuoygaaeqeqcuggu($this->eyamqkqiykagecsw(), ["\143\x6c\141\163\163" => "\160\x72\55\155\x65\x74\x61\x62\x6f\170\x2d\x69\143\x6f\x6e\x20\x69\x63\x6f\156\55\163\x6d"]);
        goto aaoseogoukyoqaiu;
        ckemugoooeseikmi:
        if (!$this->eyamqkqiykagecsw()) {
            goto wsykyiouyyysaywo;
        }
        goto smyayuoysyaukcca;
        aaoseogoukyoqaiu:
        $meqocwsecsywiiqs = ManipulateHTML::uuccukgasskgimsq("\x64\x69\166", ["\x63\x6c\141\163\x73" => "\x70\162\55\155\x65\164\141\x62\157\x78\55\x74\x69\x74\154\145\x20\155\171\55\x61\165\x74\x6f"], [$wkaqekwwgqsqwcoi, $meqocwsecsywiiqs]);
        goto kamqomyowmaeyeae;
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
        wmmewkuagqcoymyi:
        if (in_array($kesssewsiegssiya, $this->mqmocoguqcyymgqu())) {
            goto ksisasisogugagwe;
        }
        goto isaskseywycoiksi;
        isaskseywycoiksi:
        $this->taxonomies[] = $kesssewsiegssiya;
        goto cgameakayuqewmuy;
        uigqcoagsgoikwwa:
        return $this;
        goto wkeuiawyakqmkkeu;
        wkeuiawyakqmkkeu:
    }
    public function mieeukuyckssemsm(array $seyqqsmuaiegkeeq) : self
    {
        goto smsgucswuyeoaeoc;
        smsgucswuyeoaeoc:
        foreach ($seyqqsmuaiegkeeq as $kesssewsiegssiya) {
            goto qkyuwiqqgkuikgwy;
            aycikwgsmgssgeui:
            $this->acqyqaaeeogkosoq($kesssewsiegssiya);
            goto wuquqskocseageai;
            wuquqskocseageai:
            mgiyosiiqgqeeawo:
            goto iygooyusgigoeoow;
            iygooyusgigoeoow:
            qqsoeicimqgoimau:
            goto imicgeaucyyaycau;
            qkyuwiqqgkuikgwy:
            if (!$kesssewsiegssiya) {
                goto mgiyosiiqgqeeawo;
            }
            goto aycikwgsmgssgeui;
            imicgeaucyyaycau:
        }
        goto mskcmsyuewcoicaa;
        mskcmsyuewcoicaa:
        awouamqqqcgwcami:
        goto msoscooawisocoia;
        msoscooawisocoia:
        return $this;
        goto kegscyoeseeqkwqo;
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
        guuqakcckyuiwweq:
        return $this;
        goto gmkwgkeaysqucoac;
        qyeuammiwmguogks:
        qyaiqywcawamgqko:
        goto guuqakcckyuiwweq;
        koqwiwoycwuewsqi:
        foreach ($ywoucyskcquysiwc as $cciauwuwuqaywgce) {
            goto cwqkqyekyqamcacc;
            wqsyawgogiswmkgo:
            gmgqmceekqkkccmq:
            goto iuiioagqmsigmmqw;
            cwqkqyekyqamcacc:
            if (!$cciauwuwuqaywgce instanceof Tab) {
                goto muweikgaeoamyaaw;
            }
            goto imcaayemagekyysy;
            acwcacwmkgyykoqq:
            muweikgaeoamyaaw:
            goto wqsyawgogiswmkgo;
            imcaayemagekyysy:
            $this->aucimgwswmgaocae($cciauwuwuqaywgce);
            goto acwcacwmkgyykoqq;
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
        cwcekuuiweyymiae:
        $uiewakwqscemywuo["\x74\x61\142\163"] = array_filter($this->equiyaoamqmaeckc(), function ($cciauwuwuqaywgce) {
            return $cciauwuwuqaywgce->wkkcmkuiigsukyik();
        });
        goto cgoysuiaaumssasc;
        agoigaqmiekycgkc:
        if (!$this->mukiwuqwmywsckco()) {
            goto qiqwwkqsiuoumgio;
        }
        goto ueoqeuoaskcsokea;
        ueoqeuoaskcsokea:
        $uiewakwqscemywuo["\146\x69\x65\154\144\163"] = $this->yceyooiweyiqgsam($this->ugmceccgwaaaigiy());
        goto amaoismuweoiksau;
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
        kiywwuogciceaawk:
        $uiewakwqscemywuo = [];
        goto migagswgousikqii;
        cowiomsgsyuyyega:
        $uusmaiomayssaecw = $this->cisyiemkeykgkomc();
        goto waycoiasakwsguey;
        gyysamqwsycqoueo:
        $oeoswouussioaimo = new_cmb2_box($uiewakwqscemywuo);
        goto yqegceyooessmcyo;
        migagswgousikqii:
        if ($uusmaiomayssaecw) {
            goto sggogwaomwkwyics;
        }
        goto cowiomsgsyuyyega;
        gmimikyuuummsqgq:
        if (!$this->osqsemgesogkmios()) {
            goto umekamuowemeygwq;
        }
        goto uiicisqcyuwkusyo;
        qmwmsywoygsaqkio:
        $uiewakwqscemywuo = array_merge($uiewakwqscemywuo, $this->weqsyyuyccsemacu($uusmaiomayssaecw));
        goto gyysamqwsycqoueo;
        ekoywwcmuycuogkk:
        sguygkqsmgcuciyo:
        goto cwcekuuiweyymiae;
        yqegceyooessmcyo:
        
        $oeoswouussioaimo->object_type($this->aaamyckgicycisqq());
        goto mueqyymqucqywkuu;
        cgoysuiaaumssasc:
        umekamuowemeygwq:
        goto agoigaqmiekycgkc;
        amaoismuweoiksau:
        qiqwwkqsiuoumgio:
        goto qmwmsywoygsaqkio;
        mueqyymqucqywkuu:
        return $oeoswouussioaimo;
        goto qyqmkeauqqkmqseu;
        waycoiasakwsguey:
        sggogwaomwkwyics:
        goto gmimikyuuummsqgq;
        qyqmkeauqqkmqseu:
    }
    
    public function gisikkgygmseekyi() : self
    {
        return $this->ycgswwsswoyyeqgc(["\143\x6f\155\x6d\145\x6e\x74"]);
    }
    
    public function weqsyyuyccsemacu($kooiowmeygoykmms = null) : array
    {
        goto gsaucycumgsmsymc;
        woyiusauaiiscqgk:
        $egkyssmuqcwaciya .= "\40\160\x72\x2d\x74\145\x72\155";
        goto wqeqooqkimkggumq;
        ccyowiaoasoqoaic:
        if ($this->iakygkwocqoukwuc()) {
            goto uaqkeycsegiqgiae;
        }
        goto auyaikoiociousmy;
        wqeqooqkimkggumq:
        $uiewakwqscemywuo["\x74\141\x78\157\x6e\157\x6d\x69\145\163"] = $this->mqmocoguqcyymgqu();
        goto iygoyeckqssygyqg;
        kuiuwqwakomqyoey:
        uaqkeycsegiqgiae:
        goto keuacmemqaigmkgu;
        keuacmemqaigmkgu:
        $uiewakwqscemywuo["\x70\157\163\x74\137\164\x79\x70\145\163"] = $this->iakygkwocqoukwuc();
        goto qaocqwauwmuuiqwk;
        qaocqwauwmuuiqwk:
        $egkyssmuqcwaciya .= "\x20\160\x72\x2d\155\145\x74\x61\x62\157\x78";
        goto aiamywyeoksiyawe;
        yewmgwogkoscccca:
        $uiewakwqscemywuo["\143\154\x61\x73\x73\x65\163"] = $egkyssmuqcwaciya;
        goto iqgyemmowuemqccs;
        ssmwkcqiauygamuc:
        if (!(!$this->qwkguquqiiaekmsi() && $kooiowmeygoykmms)) {
            goto csokgguoueumamee;
        }
        goto qesyekwwiuosiyau;
        auyaikoiociousmy:
        if (!$this->mqmocoguqcyymgqu()) {
            goto qmqgueuqmwyksssq;
        }
        goto woyiusauaiiscqgk;
        kemuauaewuaeuowc:
        goto aumyyiwqawqyimwk;
        goto kuiuwqwakomqyoey;
        mucwgogisqikigky:
        return $this->configuration;
        goto oeqcguogcymoaumy;
        omeaeeoqseegqyqw:
        qmqgueuqmwyksssq:
        goto kemuauaewuaeuowc;
        aiamywyeoksiyawe:
        aumyyiwqawqyimwk:
        goto ssmwkcqiauygamuc;
        gsaucycumgsmsymc:
        $uiewakwqscemywuo = ["\151\x64" => $this->mwikyscisascoeea(), "\164\151\164\154\x65" => $this->iwqugwigmoiagwec(), "\143\157\156\164\x65\x78\164" => $this->yqsycyoeiusqqqgm(), "\160\x72\x69\157\162\151\164\x79" => $this->yywskysiycwkwsgw(), "\x73\x68\157\x77\x5f\x6e\x61\x6d\145\163" => $this->eoceqqugyiaqqayw(), "\143\141\160\x61\x62\x69\154\x69\164\171" => $this->gwaeeegmgggawiyi(), "\x64\x69\x73\x70\154\141\x79\x5f\x63\x62" => false, "\x6f\x62\x6a\145\143\x74\137\164\171\160\x65\163" => $this->aaamyckgicycisqq(), "\166\145\162\x74\151\143\141\154\137\x74\141\142\x73" => $this->kyccqycmcyqomiqm(), "\x61\144\155\x69\156\x5f\x6d\145\156\x75\x5f\150\157\x6f\153" => false];
        goto ceugeqiqkmygwwik;
        ceugeqiqkmygwwik:
        $egkyssmuqcwaciya = "\x66\157\x72\x6d\55\x63\x6f\x6e\164\x61\x69\x6e\x65\x72";
        goto ccyowiaoasoqoaic;
        iqgyemmowuemqccs:
        $this->megwuoouecmkuaqm($uiewakwqscemywuo);
        goto mucwgogisqikigky;
        qesyekwwiuosiyau:
        $uiewakwqscemywuo["\163\x68\157\167\x5f\157\156"] = ["\153\145\171" => $this->aaamyckgicycisqq(), "\166\x61\x6c\165\145" => [$kooiowmeygoykmms]];
        goto vwgqesqmwyueecok;
        vwgqesqmwyueecok:
        csokgguoueumamee:
        goto yewmgwogkoscccca;
        iygoyeckqssygyqg:
        $uiewakwqscemywuo["\157\x62\152\145\143\x74\137\164\171\x70\x65\x73"] = ["\164\x65\162\155"];
        goto omeaeeoqseegqyqw;
        oeqcguogcymoaumy:
    }
}
