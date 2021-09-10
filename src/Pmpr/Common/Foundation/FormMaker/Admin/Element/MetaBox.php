<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b30261f503             |
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
        goto wigkkwoicoeusyui;
        sgaiuqsccumqooea:
        $this->hookAble = $yiyasiwyokuumigg;
        goto qoecuquaikiiqqsm;
        qoecuquaikiiqqsm:
        parent::__construct($aokagokqyuysuksm);
        goto mikckoqyykkgeugq;
        wigkkwoicoeusyui:
        $this->id = $aokagokqyuysuksm;
        goto uyiaigymeewauaku;
        uyiaigymeewauaku:
        $this->title = $meqocwsecsywiiqs;
        goto sgaiuqsccumqooea;
        mikckoqyykkgeugq:
    }
    public function wigskegsqequoeks()
    {
        goto oomioaggyeeaysic;
        qugkumuigeucuoqa:
        scyuoqosoisassoe:
        goto sqaoumqsweiacuum;
        oomioaggyeeaysic:
        if (!($this->qwkguquqiiaekmsi() && !ManipulateAjax::mcgoysmkqsqooceq())) {
            goto scyuoqosoisassoe;
        }
        goto iccgqioeygeciycq;
        sqaoumqsweiacuum:
        parent::wigskegsqequoeks();
        goto igkggcocgwmsiaiy;
        iccgqioeygeciycq:
        $this->qcsmikeggeemccuu("\143\155\x62\62\137\x61\144\x6d\x69\x6e\x5f\x69\x6e\151\x74", [$this, "\x72\145\x67\151\163\x74\x65\162"]);
        goto qugkumuigeucuoqa;
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
        $this->sucsaaaeiecgqcem("\156\157\162\155\141\154");
        return $this;
    }
    
    public function igeseuiwcwwsuesi() : self
    {
        $this->sucsaaaeiecgqcem("\x73\x69\x64\145");
        return $this;
    }
    
    public function ymyesuiosuagoaco() : self
    {
        $this->sucsaaaeiecgqcem("\141\144\166\x61\156\x63\145\x64");
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
        kcyswcqsqcoggwai:
        if ($aiowsaccomcoikus->yywskysiycwkwsgw()) {
            goto gsoqmqmumeumywaq;
        }
        goto escysimqcgcqkmom;
        aameqiooucocgook:
        $this->fields[$aiowsaccomcoikus->mwikyscisascoeea()] = $aiowsaccomcoikus;
        goto ucqcgumsoccaigae;
        escysimqcgcqkmom:
        $aiowsaccomcoikus->jyumyyugiwwiqomk(count($this->ugmceccgwaaaigiy()) + 1);
        goto qeemqoosooyaegke;
        ucqcgumsoccaigae:
        return $this;
        goto isogegoossgykuiy;
        qeemqoosooyaegke:
        gsoqmqmumeumywaq:
        goto aameqiooucocgook;
        isogegoossgykuiy:
    }
    
    public function ewweaossowcqywaw(array $ikgwqyuyckaewsow) : self
    {
        goto asieusgwkwamqacy;
        asieusgwkwamqacy:
        foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) {
            goto wauscgmymskwmkos;
            ssgomuoumiyccuuo:
            wxiguggaamcqwyii:
            goto eucqeyegokoyegie;
            awgyucsimgkaeqcc:
            qwaiaeicmcuyicss:
            goto ssgomuoumiyccuuo;
            wauscgmymskwmkos:
            if (!$aiowsaccomcoikus instanceof Field) {
                goto qwaiaeicmcuyicss;
            }
            goto ouogqskwiuqyeqam;
            ouogqskwiuqyeqam:
            $this->mkksewyosgeumwsa($aiowsaccomcoikus);
            goto awgyucsimgkaeqcc;
            eucqeyegokoyegie:
        }
        goto wqkoouqaoogskyuw;
        wqkoouqaoogskyuw:
        ugeqoeowygumsuia:
        goto yqoiugwmcaoccouu;
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
        qoqagcimawkcegme:
        return $this;
        goto aqumewkymkyqckki;
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
        aqumewkymkyqckki:
    }
    
    public function iakygkwocqoukwuc() : ?array
    {
        return $this->postTypes;
    }
    
    public function mgieiwsmcswmmiim(string $useksmwkuswkwcqg) : self
    {
        goto ieyammyusayuiesk;
        ieyammyusayuiesk:
        if (in_array($useksmwkuswkwcqg, $this->iakygkwocqoukwuc())) {
            goto kaqmaugqgwwugucc;
        }
        goto skgmcsquswcqyiig;
        mqeauomuwcycgekg:
        return $this;
        goto isekukgeyoucwesg;
        skgmcsquswcqyiig:
        $this->postTypes[] = $useksmwkuswkwcqg;
        goto egsoqqcqyckeogae;
        iycagsyoqoqqwamc:
        kaqmaugqgwwugucc:
        goto mqeauomuwcycgekg;
        egsoqqcqyckeogae:
        $this->kukswgcoysaeescm($useksmwkuswkwcqg);
        goto iycagsyoqoqqwamc;
        isekukgeyoucwesg:
    }
    
    public function aueosikimququsko(array $sciomagaqmgggsiu) : self
    {
        goto qmuycmagkuookckm;
        cgyoccckmuogiyka:
        eucoegmqucoieeug:
        goto eaqsmwsowasswwck;
        eaqsmwsowasswwck:
        return $this;
        goto uyccwiywcyesiwoi;
        qmuycmagkuookckm:
        foreach ($sciomagaqmgggsiu as $useksmwkuswkwcqg) {
            goto cqoekiuwmwsmyyki;
            mayyksswcuawuswu:
            cqmwiaeeaegiqckq:
            goto iqcskuiusowukoem;
            cqoekiuwmwsmyyki:
            if (!$useksmwkuswkwcqg) {
                goto wckkcawqigkukggg;
            }
            goto gskaeswcikaiaaui;
            wuswwoggiwegqwsi:
            wckkcawqigkukggg:
            goto mayyksswcuawuswu;
            gskaeswcikaiaaui:
            $this->mgieiwsmcswmmiim($useksmwkuswkwcqg);
            goto wuswwoggiwegqwsi;
            iqcskuiusowukoem:
        }
        goto cgyoccckmuogiyka;
        uyccwiywcyesiwoi:
    }
    
    public function iwqugwigmoiagwec()
    {
        goto wsykyiouyyysaywo;
        ckemugoooeseikmi:
        $wkaqekwwgqsqwcoi = ManipulateHTML::cuoygaaeqeqcuggu($this->eyamqkqiykagecsw(), ["\x63\x6c\x61\163\x73" => "\x70\162\x2d\x6d\145\164\x61\x62\x6f\170\x2d\151\143\x6f\x6e\40\151\x63\157\x6e\x2d\163\155"]);
        goto smyayuoysyaukcca;
        aaoseogoukyoqaiu:
        qkkekmcemcqusiia:
        goto kamqomyowmaeyeae;
        kamqomyowmaeyeae:
        return $meqocwsecsywiiqs;
        goto eaqmceoqyemuqsic;
        wsykyiouyyysaywo:
        $meqocwsecsywiiqs = $this->qcgakseyaikigqco();
        goto cygaymiommawgamm;
        smyayuoysyaukcca:
        $meqocwsecsywiiqs = ManipulateHTML::uuccukgasskgimsq("\144\x69\x76", ["\x63\x6c\x61\x73\163" => "\x70\x72\x2d\155\145\164\x61\142\x6f\x78\x2d\164\x69\x74\154\x65\40\155\x79\x2d\x61\165\164\x6f"], [$wkaqekwwgqsqwcoi, $meqocwsecsywiiqs]);
        goto aaoseogoukyoqaiu;
        cygaymiommawgamm:
        if (!$this->eyamqkqiykagecsw()) {
            goto qkkekmcemcqusiia;
        }
        goto ckemugoooeseikmi;
        eaqmceoqyemuqsic:
    }
    
    public function mqmocoguqcyymgqu() : ?array
    {
        return $this->taxonomies;
    }
    
    public function acqyqaaeeogkosoq(string $kesssewsiegssiya) : self
    {
        goto ksisasisogugagwe;
        ksisasisogugagwe:
        if (in_array($kesssewsiegssiya, $this->mqmocoguqcyymgqu())) {
            goto cuiiwyscgawowmwi;
        }
        goto wmmewkuagqcoymyi;
        wmmewkuagqcoymyi:
        $this->taxonomies[] = $kesssewsiegssiya;
        goto isaskseywycoiksi;
        isaskseywycoiksi:
        cuiiwyscgawowmwi:
        goto cgameakayuqewmuy;
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
            mgiyosiiqgqeeawo:
            if (!$kesssewsiegssiya) {
                goto qqsoeicimqgoimau;
            }
            goto qkyuwiqqgkuikgwy;
            aycikwgsmgssgeui:
            qqsoeicimqgoimau:
            goto wuquqskocseageai;
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
        qyeuammiwmguogks:
        return $this;
        goto guuqakcckyuiwweq;
        iuiioagqmsigmmqw:
        foreach ($ywoucyskcquysiwc as $cciauwuwuqaywgce) {
            goto muweikgaeoamyaaw;
            muweikgaeoamyaaw:
            if (!$cciauwuwuqaywgce instanceof Tab) {
                goto gmgqmceekqkkccmq;
            }
            goto cwqkqyekyqamcacc;
            imcaayemagekyysy:
            gmgqmceekqkkccmq:
            goto acwcacwmkgyykoqq;
            cwqkqyekyqamcacc:
            $this->aucimgwswmgaocae($cciauwuwuqaywgce);
            goto imcaayemagekyysy;
            acwcacwmkgyykoqq:
            qyaiqywcawamgqko:
            goto wqsyawgogiswmkgo;
            wqsyawgogiswmkgo:
        }
        goto koqwiwoycwuewsqi;
        koqwiwoycwuewsqi:
        kegscyoeseeqkwqo:
        goto qyeuammiwmguogks;
        guuqakcckyuiwweq:
    }
    
    public function osqsemgesogkmios() : bool
    {
        return !empty($this->equiyaoamqmaeckc());
    }
    
    public function register($uusmaiomayssaecw = null) : CMB2
    {
        goto qiqwwkqsiuoumgio;
        cgoysuiaaumssasc:
        if (!$this->mukiwuqwmywsckco()) {
            goto umekamuowemeygwq;
        }
        goto agoigaqmiekycgkc;
        gmimikyuuummsqgq:
        foreach ($this->equiyaoamqmaeckc() as $cciauwuwuqaywgce) {
            goto yweyyywyogmugiuy;
            wmagsimyuceuawoy:
            $this->ewweaossowcqywaw($cciauwuwuqaywgce->ugmceccgwaaaigiy());
            goto auyyeawsgkagaaau;
            yweyyywyogmugiuy:
            if (!($cciauwuwuqaywgce instanceof Tab && $cciauwuwuqaywgce->wkkcmkuiigsukyik())) {
                goto gsawyomckqmowaoy;
            }
            goto wmagsimyuceuawoy;
            auyyeawsgkagaaau:
            gsawyomckqmowaoy:
            goto qcayciumgumuqcka;
            qcayciumgumuqcka:
            sguygkqsmgcuciyo:
            goto ywsygyaqaosmsowe;
            ywsygyaqaosmsowe:
        }
        goto uiicisqcyuwkusyo;
        cwcekuuiweyymiae:
        accqceameoskmmau:
        goto cgoysuiaaumssasc;
        migagswgousikqii:
        $uusmaiomayssaecw = $this->cisyiemkeykgkomc();
        goto cowiomsgsyuyyega;
        cowiomsgsyuyyega:
        gmkwgkeaysqucoac:
        goto waycoiasakwsguey;
        qiqwwkqsiuoumgio:
        $uiewakwqscemywuo = [];
        goto kiywwuogciceaawk;
        qmwmsywoygsaqkio:
        $oeoswouussioaimo = new_cmb2_box($uiewakwqscemywuo);
        goto gyysamqwsycqoueo;
        amaoismuweoiksau:
        $uiewakwqscemywuo = array_merge($uiewakwqscemywuo, $this->weqsyyuyccsemacu($uusmaiomayssaecw));
        goto qmwmsywoygsaqkio;
        ueoqeuoaskcsokea:
        umekamuowemeygwq:
        goto amaoismuweoiksau;
        ekoywwcmuycuogkk:
        $uiewakwqscemywuo["\164\x61\x62\163"] = array_filter($this->equiyaoamqmaeckc(), function ($cciauwuwuqaywgce) {
            return $cciauwuwuqaywgce->wkkcmkuiigsukyik();
        });
        goto cwcekuuiweyymiae;
        uiicisqcyuwkusyo:
        sggogwaomwkwyics:
        goto ekoywwcmuycuogkk;
        agoigaqmiekycgkc:
        $uiewakwqscemywuo["\146\151\145\x6c\x64\x73"] = $this->yceyooiweyiqgsam($this->ugmceccgwaaaigiy());
        goto ueoqeuoaskcsokea;
        waycoiasakwsguey:
        if (!$this->osqsemgesogkmios()) {
            goto accqceameoskmmau;
        }
        goto gmimikyuuummsqgq;
        yqegceyooessmcyo:
        return $oeoswouussioaimo;
        goto mueqyymqucqywkuu;
        kiywwuogciceaawk:
        if ($uusmaiomayssaecw) {
            goto gmkwgkeaysqucoac;
        }
        goto migagswgousikqii;
        gyysamqwsycqoueo:
        
        $oeoswouussioaimo->object_type($this->aaamyckgicycisqq());
        goto yqegceyooessmcyo;
        mueqyymqucqywkuu:
    }
    
    public function gisikkgygmseekyi() : self
    {
        return $this->ycgswwsswoyyeqgc(["\143\157\x6d\155\145\156\164"]);
    }
    
    public function weqsyyuyccsemacu($kooiowmeygoykmms = null) : array
    {
        goto csokgguoueumamee;
        kemuauaewuaeuowc:
        qmqgueuqmwyksssq:
        goto kuiuwqwakomqyoey;
        qaocqwauwmuuiqwk:
        uaqkeycsegiqgiae:
        goto aiamywyeoksiyawe;
        aiamywyeoksiyawe:
        if (!(!$this->qwkguquqiiaekmsi() && $kooiowmeygoykmms)) {
            goto aumyyiwqawqyimwk;
        }
        goto ssmwkcqiauygamuc;
        qesyekwwiuosiyau:
        aumyyiwqawqyimwk:
        goto vwgqesqmwyueecok;
        gsaucycumgsmsymc:
        $egkyssmuqcwaciya = "\x66\x6f\162\x6d\x2d\x63\157\156\164\x61\151\156\x65\x72";
        goto ceugeqiqkmygwwik;
        kuiuwqwakomqyoey:
        $uiewakwqscemywuo["\160\x6f\163\x74\x5f\164\171\160\145\163"] = $this->iakygkwocqoukwuc();
        goto keuacmemqaigmkgu;
        yewmgwogkoscccca:
        $this->megwuoouecmkuaqm($uiewakwqscemywuo);
        goto iqgyemmowuemqccs;
        keuacmemqaigmkgu:
        $egkyssmuqcwaciya .= "\x20\160\x72\x2d\155\145\164\x61\142\157\x78";
        goto qaocqwauwmuuiqwk;
        ccyowiaoasoqoaic:
        if (!$this->mqmocoguqcyymgqu()) {
            goto qyqmkeauqqkmqseu;
        }
        goto auyaikoiociousmy;
        ceugeqiqkmygwwik:
        if ($this->iakygkwocqoukwuc()) {
            goto qmqgueuqmwyksssq;
        }
        goto ccyowiaoasoqoaic;
        omeaeeoqseegqyqw:
        goto uaqkeycsegiqgiae;
        goto kemuauaewuaeuowc;
        vwgqesqmwyueecok:
        $uiewakwqscemywuo["\143\x6c\x61\x73\163\145\163"] = $egkyssmuqcwaciya;
        goto yewmgwogkoscccca;
        wqeqooqkimkggumq:
        $uiewakwqscemywuo["\157\142\152\145\x63\x74\x5f\164\171\160\145\x73"] = ["\x74\145\x72\x6d"];
        goto iygoyeckqssygyqg;
        ssmwkcqiauygamuc:
        $uiewakwqscemywuo["\x73\150\x6f\167\137\157\156"] = ["\153\145\x79" => $this->aaamyckgicycisqq(), "\x76\141\x6c\x75\145" => [$kooiowmeygoykmms]];
        goto qesyekwwiuosiyau;
        iqgyemmowuemqccs:
        return $this->configuration;
        goto mucwgogisqikigky;
        iygoyeckqssygyqg:
        qyqmkeauqqkmqseu:
        goto omeaeeoqseegqyqw;
        woyiusauaiiscqgk:
        $uiewakwqscemywuo["\x74\141\170\x6f\x6e\157\155\x69\x65\x73"] = $this->mqmocoguqcyymgqu();
        goto wqeqooqkimkggumq;
        csokgguoueumamee:
        $uiewakwqscemywuo = ["\151\x64" => $this->mwikyscisascoeea(), "\x74\x69\x74\x6c\x65" => $this->iwqugwigmoiagwec(), "\143\157\x6e\164\145\x78\164" => $this->yqsycyoeiusqqqgm(), "\160\162\x69\157\162\151\x74\171" => $this->yywskysiycwkwsgw(), "\163\150\x6f\x77\x5f\x6e\x61\155\145\x73" => $this->eoceqqugyiaqqayw(), "\x63\x61\x70\141\x62\x69\154\x69\x74\171" => $this->gwaeeegmgggawiyi(), "\144\151\x73\x70\x6c\x61\171\137\143\142" => false, "\157\142\152\145\x63\x74\137\164\x79\160\145\x73" => $this->aaamyckgicycisqq(), "\x76\x65\x72\x74\151\143\x61\x6c\137\164\x61\142\163" => $this->kyccqycmcyqomiqm(), "\141\144\155\x69\x6e\x5f\x6d\145\156\165\x5f\150\157\x6f\153" => false];
        goto gsaucycumgsmsymc;
        auyaikoiociousmy:
        $egkyssmuqcwaciya .= "\40\160\162\55\164\x65\162\x6d";
        goto woyiusauaiiscqgk;
        mucwgogisqikigky:
    }
}
