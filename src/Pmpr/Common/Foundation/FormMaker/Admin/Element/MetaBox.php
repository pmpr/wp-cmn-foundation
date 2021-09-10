<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b2e4befc8c             |
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
    
    protected ?string $context = "\x6e\x6f\x72\x6d\x61\x6c";
    
    public function __construct($aokagokqyuysuksm, $meqocwsecsywiiqs = null, $yiyasiwyokuumigg = false)
    {
        goto wigkkwoicoeusyui;
        qoecuquaikiiqqsm:
        parent::__construct($aokagokqyuysuksm);
        goto mikckoqyykkgeugq;
        sgaiuqsccumqooea:
        $this->hookAble = $yiyasiwyokuumigg;
        goto qoecuquaikiiqqsm;
        uyiaigymeewauaku:
        $this->title = $meqocwsecsywiiqs;
        goto sgaiuqsccumqooea;
        wigkkwoicoeusyui:
        $this->id = $aokagokqyuysuksm;
        goto uyiaigymeewauaku;
        mikckoqyykkgeugq:
    }
    public function wigskegsqequoeks()
    {
        goto oomioaggyeeaysic;
        oomioaggyeeaysic:
        if (!($this->qwkguquqiiaekmsi() && !ManipulateAjax::mcgoysmkqsqooceq())) {
            goto scyuoqosoisassoe;
        }
        goto iccgqioeygeciycq;
        sqaoumqsweiacuum:
        parent::wigskegsqequoeks();
        goto igkggcocgwmsiaiy;
        iccgqioeygeciycq:
        $this->qcsmikeggeemccuu("\x63\155\142\x32\137\141\x64\x6d\151\x6e\137\151\x6e\151\x74", [$this, "\x72\x65\x67\151\x73\164\145\x72"]);
        goto qugkumuigeucuoqa;
        qugkumuigeucuoqa:
        scyuoqosoisassoe:
        goto sqaoumqsweiacuum;
        igkggcocgwmsiaiy:
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
        $this->sucsaaaeiecgqcem("\x6e\x6f\x72\155\141\154");
        return $this;
    }
    
    public function igeseuiwcwwsuesi() : self
    {
        $this->sucsaaaeiecgqcem("\x73\151\144\x65");
        return $this;
    }
    
    public function ymyesuiosuagoaco() : self
    {
        $this->sucsaaaeiecgqcem("\141\144\166\141\x6e\143\145\144");
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
        goto kcyswcqsqcoggwai;
        aameqiooucocgook:
        $this->fields[$aiowsaccomcoikus->mwikyscisascoeea()] = $aiowsaccomcoikus;
        goto ucqcgumsoccaigae;
        qeemqoosooyaegke:
        gsoqmqmumeumywaq:
        goto aameqiooucocgook;
        escysimqcgcqkmom:
        $aiowsaccomcoikus->jyumyyugiwwiqomk(count($this->ugmceccgwaaaigiy()) + 1);
        goto qeemqoosooyaegke;
        kcyswcqsqcoggwai:
        if ($aiowsaccomcoikus->yywskysiycwkwsgw()) {
            goto gsoqmqmumeumywaq;
        }
        goto escysimqcgcqkmom;
        ucqcgumsoccaigae:
        return $this;
        goto isogegoossgykuiy;
        isogegoossgykuiy:
    }
    
    public function ewweaossowcqywaw(array $ikgwqyuyckaewsow) : self
    {
        goto asieusgwkwamqacy;
        wqkoouqaoogskyuw:
        ugeqoeowygumsuia:
        goto yqoiugwmcaoccouu;
        asieusgwkwamqacy:
        foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) {
            goto wauscgmymskwmkos;
            wauscgmymskwmkos:
            if (!$aiowsaccomcoikus instanceof Field) {
                goto qwaiaeicmcuyicss;
            }
            goto ouogqskwiuqyeqam;
            ouogqskwiuqyeqam:
            $this->mkksewyosgeumwsa($aiowsaccomcoikus);
            goto awgyucsimgkaeqcc;
            awgyucsimgkaeqcc:
            qwaiaeicmcuyicss:
            goto ssgomuoumiyccuuo;
            ssgomuoumiyccuuo:
            wxiguggaamcqwyii:
            goto eucqeyegokoyegie;
            eucqeyegokoyegie:
        }
        goto wqkoouqaoogskyuw;
        yqoiugwmcaoccouu:
        return $this;
        goto iumeegsgcmyycymc;
        iumeegsgcmyycymc:
    }
    
    public function mukiwuqwmywsckco() : bool
    {
        return !empty($this->ugmceccgwaaaigiy());
    }
    
    public function kukswgcoysaeescm(string $mqyaskyaekmkegmg) : self
    {
        goto mmuyykecaoggaemg;
        mmuyykecaoggaemg:
        if (is_array($this->objectType)) {
            goto yicweuosuasyciwm;
        }
        goto ocyayeiwgmsmiomi;
        gggkiioeyaywqwcq:
        $this->objectType[] = $mqyaskyaekmkegmg;
        goto qoqagcimawkcegme;
        ocyayeiwgmsmiomi:
        $this->objectType = [];
        goto wqkiowymegocycgs;
        wqkiowymegocycgs:
        yicweuosuasyciwm:
        goto gggkiioeyaywqwcq;
        qoqagcimawkcegme:
        return $this;
        goto aqumewkymkyqckki;
        aqumewkymkyqckki:
    }
    
    public function iakygkwocqoukwuc() : ?array
    {
        return $this->postTypes;
    }
    
    public function mgieiwsmcswmmiim(string $useksmwkuswkwcqg) : self
    {
        goto ieyammyusayuiesk;
        mqeauomuwcycgekg:
        return $this;
        goto isekukgeyoucwesg;
        skgmcsquswcqyiig:
        $this->postTypes[] = $useksmwkuswkwcqg;
        goto egsoqqcqyckeogae;
        egsoqqcqyckeogae:
        $this->kukswgcoysaeescm($useksmwkuswkwcqg);
        goto iycagsyoqoqqwamc;
        ieyammyusayuiesk:
        if (in_array($useksmwkuswkwcqg, $this->iakygkwocqoukwuc())) {
            goto kaqmaugqgwwugucc;
        }
        goto skgmcsquswcqyiig;
        iycagsyoqoqqwamc:
        kaqmaugqgwwugucc:
        goto mqeauomuwcycgekg;
        isekukgeyoucwesg:
    }
    
    public function aueosikimququsko(array $sciomagaqmgggsiu) : self
    {
        goto qmuycmagkuookckm;
        qmuycmagkuookckm:
        foreach ($sciomagaqmgggsiu as $useksmwkuswkwcqg) {
            goto cqoekiuwmwsmyyki;
            mayyksswcuawuswu:
            cqmwiaeeaegiqckq:
            goto iqcskuiusowukoem;
            gskaeswcikaiaaui:
            $this->mgieiwsmcswmmiim($useksmwkuswkwcqg);
            goto wuswwoggiwegqwsi;
            cqoekiuwmwsmyyki:
            if (!$useksmwkuswkwcqg) {
                goto wckkcawqigkukggg;
            }
            goto gskaeswcikaiaaui;
            wuswwoggiwegqwsi:
            wckkcawqigkukggg:
            goto mayyksswcuawuswu;
            iqcskuiusowukoem:
        }
        goto cgyoccckmuogiyka;
        eaqsmwsowasswwck:
        return $this;
        goto uyccwiywcyesiwoi;
        cgyoccckmuogiyka:
        eucoegmqucoieeug:
        goto eaqsmwsowasswwck;
        uyccwiywcyesiwoi:
    }
    
    public function iwqugwigmoiagwec()
    {
        goto wsykyiouyyysaywo;
        ckemugoooeseikmi:
        $wkaqekwwgqsqwcoi = ManipulateHTML::cuoygaaeqeqcuggu($this->eyamqkqiykagecsw(), ["\x63\154\141\x73\163" => "\x70\x72\x2d\x6d\x65\164\x61\142\157\x78\x2d\151\x63\x6f\156\40\x69\x63\157\x6e\55\x73\155"]);
        goto smyayuoysyaukcca;
        kamqomyowmaeyeae:
        return $meqocwsecsywiiqs;
        goto eaqmceoqyemuqsic;
        cygaymiommawgamm:
        if (!$this->eyamqkqiykagecsw()) {
            goto qkkekmcemcqusiia;
        }
        goto ckemugoooeseikmi;
        smyayuoysyaukcca:
        $meqocwsecsywiiqs = ManipulateHTML::uuccukgasskgimsq("\x64\x69\x76", ["\x63\154\x61\x73\x73" => "\x70\162\55\x6d\145\164\x61\x62\x6f\x78\55\x74\151\x74\154\x65\x20\x6d\171\55\x61\x75\164\x6f"], [$wkaqekwwgqsqwcoi, $meqocwsecsywiiqs]);
        goto aaoseogoukyoqaiu;
        wsykyiouyyysaywo:
        $meqocwsecsywiiqs = $this->qcgakseyaikigqco();
        goto cygaymiommawgamm;
        aaoseogoukyoqaiu:
        qkkekmcemcqusiia:
        goto kamqomyowmaeyeae;
        eaqmceoqyemuqsic:
    }
    
    public function mqmocoguqcyymgqu() : ?array
    {
        return $this->taxonomies;
    }
    
    public function acqyqaaeeogkosoq(string $kesssewsiegssiya) : self
    {
        goto ksisasisogugagwe;
        wmmewkuagqcoymyi:
        $this->taxonomies[] = $kesssewsiegssiya;
        goto isaskseywycoiksi;
        isaskseywycoiksi:
        cuiiwyscgawowmwi:
        goto cgameakayuqewmuy;
        ksisasisogugagwe:
        if (in_array($kesssewsiegssiya, $this->mqmocoguqcyymgqu())) {
            goto cuiiwyscgawowmwi;
        }
        goto wmmewkuagqcoymyi;
        cgameakayuqewmuy:
        return $this;
        goto uigqcoagsgoikwwa;
        uigqcoagsgoikwwa:
    }
    public function mieeukuyckssemsm(array $seyqqsmuaiegkeeq) : self
    {
        goto imicgeaucyyaycau;
        imicgeaucyyaycau:
        foreach ($seyqqsmuaiegkeeq as $kesssewsiegssiya) {
            goto mgiyosiiqgqeeawo;
            aycikwgsmgssgeui:
            qqsoeicimqgoimau:
            goto wuquqskocseageai;
            mgiyosiiqgqeeawo:
            if (!$kesssewsiegssiya) {
                goto qqsoeicimqgoimau;
            }
            goto qkyuwiqqgkuikgwy;
            qkyuwiqqgkuikgwy:
            $this->acqyqaaeeogkosoq($kesssewsiegssiya);
            goto aycikwgsmgssgeui;
            wuquqskocseageai:
            awouamqqqcgwcami:
            goto iygooyusgigoeoow;
            iygooyusgigoeoow:
        }
        goto smsgucswuyeoaeoc;
        mskcmsyuewcoicaa:
        return $this;
        goto msoscooawisocoia;
        smsgucswuyeoaeoc:
        wkeuiawyakqmkkeu:
        goto mskcmsyuewcoicaa;
        msoscooawisocoia:
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
        goto iuiioagqmsigmmqw;
        iuiioagqmsigmmqw:
        foreach ($ywoucyskcquysiwc as $cciauwuwuqaywgce) {
            goto muweikgaeoamyaaw;
            imcaayemagekyysy:
            gmgqmceekqkkccmq:
            goto acwcacwmkgyykoqq;
            cwqkqyekyqamcacc:
            $this->aucimgwswmgaocae($cciauwuwuqaywgce);
            goto imcaayemagekyysy;
            acwcacwmkgyykoqq:
            qyaiqywcawamgqko:
            goto wqsyawgogiswmkgo;
            muweikgaeoamyaaw:
            if (!$cciauwuwuqaywgce instanceof Tab) {
                goto gmgqmceekqkkccmq;
            }
            goto cwqkqyekyqamcacc;
            wqsyawgogiswmkgo:
        }
        goto koqwiwoycwuewsqi;
        koqwiwoycwuewsqi:
        kegscyoeseeqkwqo:
        goto qyeuammiwmguogks;
        qyeuammiwmguogks:
        return $this;
        goto guuqakcckyuiwweq;
        guuqakcckyuiwweq:
    }
    
    public function osqsemgesogkmios() : bool
    {
        return !empty($this->equiyaoamqmaeckc());
    }
    
    public function register($uusmaiomayssaecw = null) : CMB2
    {
        goto qiqwwkqsiuoumgio;
        ueoqeuoaskcsokea:
        umekamuowemeygwq:
        goto amaoismuweoiksau;
        amaoismuweoiksau:
        $uiewakwqscemywuo = array_merge($uiewakwqscemywuo, $this->weqsyyuyccsemacu($uusmaiomayssaecw));
        goto qmwmsywoygsaqkio;
        gyysamqwsycqoueo:
        
        $oeoswouussioaimo->object_type($this->aaamyckgicycisqq());
        goto yqegceyooessmcyo;
        yqegceyooessmcyo:
        return $oeoswouussioaimo;
        goto mueqyymqucqywkuu;
        cgoysuiaaumssasc:
        if (!$this->mukiwuqwmywsckco()) {
            goto umekamuowemeygwq;
        }
        goto agoigaqmiekycgkc;
        qiqwwkqsiuoumgio:
        $uiewakwqscemywuo = [];
        goto kiywwuogciceaawk;
        ekoywwcmuycuogkk:
        $uiewakwqscemywuo["\164\x61\142\x73"] = array_filter($this->equiyaoamqmaeckc(), function ($cciauwuwuqaywgce) {
            return $cciauwuwuqaywgce->wkkcmkuiigsukyik();
        });
        goto cwcekuuiweyymiae;
        migagswgousikqii:
        $uusmaiomayssaecw = $this->cisyiemkeykgkomc();
        goto cowiomsgsyuyyega;
        cowiomsgsyuyyega:
        gmkwgkeaysqucoac:
        goto waycoiasakwsguey;
        agoigaqmiekycgkc:
        $uiewakwqscemywuo["\x66\151\145\x6c\144\x73"] = $this->yceyooiweyiqgsam($this->ugmceccgwaaaigiy());
        goto ueoqeuoaskcsokea;
        waycoiasakwsguey:
        if (!$this->osqsemgesogkmios()) {
            goto accqceameoskmmau;
        }
        goto gmimikyuuummsqgq;
        qmwmsywoygsaqkio:
        $oeoswouussioaimo = new_cmb2_box($uiewakwqscemywuo);
        goto gyysamqwsycqoueo;
        uiicisqcyuwkusyo:
        sggogwaomwkwyics:
        goto ekoywwcmuycuogkk;
        cwcekuuiweyymiae:
        accqceameoskmmau:
        goto cgoysuiaaumssasc;
        kiywwuogciceaawk:
        if ($uusmaiomayssaecw) {
            goto gmkwgkeaysqucoac;
        }
        goto migagswgousikqii;
        gmimikyuuummsqgq:
        foreach ($this->equiyaoamqmaeckc() as $cciauwuwuqaywgce) {
            goto yweyyywyogmugiuy;
            auyyeawsgkagaaau:
            gsawyomckqmowaoy:
            goto qcayciumgumuqcka;
            yweyyywyogmugiuy:
            if (!($cciauwuwuqaywgce instanceof Tab && $cciauwuwuqaywgce->wkkcmkuiigsukyik())) {
                goto gsawyomckqmowaoy;
            }
            goto wmagsimyuceuawoy;
            wmagsimyuceuawoy:
            $this->ewweaossowcqywaw($cciauwuwuqaywgce->ugmceccgwaaaigiy());
            goto auyyeawsgkagaaau;
            qcayciumgumuqcka:
            sguygkqsmgcuciyo:
            goto ywsygyaqaosmsowe;
            ywsygyaqaosmsowe:
        }
        goto uiicisqcyuwkusyo;
        mueqyymqucqywkuu:
    }
    
    public function gisikkgygmseekyi() : self
    {
        return $this->ycgswwsswoyyeqgc(["\143\157\x6d\x6d\145\x6e\164"]);
    }
    
    public function weqsyyuyccsemacu($kooiowmeygoykmms = null) : array
    {
        goto csokgguoueumamee;
        csokgguoueumamee:
        $uiewakwqscemywuo = ["\x69\x64" => $this->mwikyscisascoeea(), "\x74\151\x74\154\x65" => $this->iwqugwigmoiagwec(), "\143\157\156\164\x65\170\164" => $this->yqsycyoeiusqqqgm(), "\160\x72\x69\157\x72\x69\x74\x79" => $this->yywskysiycwkwsgw(), "\163\150\157\167\x5f\x6e\141\x6d\145\163" => $this->eoceqqugyiaqqayw(), "\x63\141\160\x61\x62\151\154\x69\164\171" => $this->gwaeeegmgggawiyi(), "\x64\151\x73\x70\x6c\141\171\x5f\143\x62" => false, "\x6f\x62\x6a\x65\x63\x74\x5f\x74\x79\160\x65\x73" => $this->aaamyckgicycisqq(), "\x76\x65\x72\164\x69\143\x61\154\x5f\x74\x61\142\x73" => $this->kyccqycmcyqomiqm(), "\141\144\x6d\151\x6e\x5f\155\x65\x6e\165\137\x68\157\157\x6b" => false];
        goto gsaucycumgsmsymc;
        ceugeqiqkmygwwik:
        if ($this->iakygkwocqoukwuc()) {
            goto qmqgueuqmwyksssq;
        }
        goto ccyowiaoasoqoaic;
        auyaikoiociousmy:
        $egkyssmuqcwaciya .= "\x20\x70\162\55\x74\145\x72\x6d";
        goto woyiusauaiiscqgk;
        gsaucycumgsmsymc:
        $egkyssmuqcwaciya = "\146\x6f\162\x6d\55\x63\157\156\x74\x61\151\156\x65\x72";
        goto ceugeqiqkmygwwik;
        vwgqesqmwyueecok:
        $uiewakwqscemywuo["\x63\154\x61\x73\x73\x65\163"] = $egkyssmuqcwaciya;
        goto yewmgwogkoscccca;
        qaocqwauwmuuiqwk:
        uaqkeycsegiqgiae:
        goto aiamywyeoksiyawe;
        kuiuwqwakomqyoey:
        $uiewakwqscemywuo["\160\x6f\x73\164\x5f\164\x79\x70\x65\x73"] = $this->iakygkwocqoukwuc();
        goto keuacmemqaigmkgu;
        wqeqooqkimkggumq:
        $uiewakwqscemywuo["\x6f\x62\152\145\143\164\x5f\164\171\160\x65\x73"] = ["\x74\145\162\x6d"];
        goto iygoyeckqssygyqg;
        keuacmemqaigmkgu:
        $egkyssmuqcwaciya .= "\x20\x70\x72\55\x6d\x65\164\141\142\157\170";
        goto qaocqwauwmuuiqwk;
        omeaeeoqseegqyqw:
        goto uaqkeycsegiqgiae;
        goto kemuauaewuaeuowc;
        iygoyeckqssygyqg:
        qyqmkeauqqkmqseu:
        goto omeaeeoqseegqyqw;
        aiamywyeoksiyawe:
        if (!(!$this->qwkguquqiiaekmsi() && $kooiowmeygoykmms)) {
            goto aumyyiwqawqyimwk;
        }
        goto ssmwkcqiauygamuc;
        iqgyemmowuemqccs:
        return $this->configuration;
        goto mucwgogisqikigky;
        kemuauaewuaeuowc:
        qmqgueuqmwyksssq:
        goto kuiuwqwakomqyoey;
        yewmgwogkoscccca:
        $this->megwuoouecmkuaqm($uiewakwqscemywuo);
        goto iqgyemmowuemqccs;
        woyiusauaiiscqgk:
        $uiewakwqscemywuo["\164\x61\x78\x6f\x6e\x6f\x6d\x69\x65\x73"] = $this->mqmocoguqcyymgqu();
        goto wqeqooqkimkggumq;
        qesyekwwiuosiyau:
        aumyyiwqawqyimwk:
        goto vwgqesqmwyueecok;
        ssmwkcqiauygamuc:
        $uiewakwqscemywuo["\163\x68\x6f\167\x5f\x6f\156"] = ["\153\x65\x79" => $this->aaamyckgicycisqq(), "\166\x61\x6c\165\145" => [$kooiowmeygoykmms]];
        goto qesyekwwiuosiyau;
        ccyowiaoasoqoaic:
        if (!$this->mqmocoguqcyymgqu()) {
            goto qyqmkeauqqkmqseu;
        }
        goto auyaikoiociousmy;
        mucwgogisqikigky:
    }
}
