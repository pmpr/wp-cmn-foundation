<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613a1be32d755             |
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
    
    protected ?string $context = "\156\x6f\162\155\x61\x6c";
    
    public function __construct($aokagokqyuysuksm, $meqocwsecsywiiqs = null, $yiyasiwyokuumigg = false)
    {
        goto smweugsusmooiiio;
        kguqqkyiyiewesws:
        $this->title = $meqocwsecsywiiqs;
        goto eymiseesqmwcqkkc;
        smweugsusmooiiio:
        $this->id = $aokagokqyuysuksm;
        goto kguqqkyiyiewesws;
        eymiseesqmwcqkkc:
        $this->hookAble = $yiyasiwyokuumigg;
        goto soqyweewgwukmieu;
        soqyweewgwukmieu:
        parent::__construct($aokagokqyuysuksm);
        goto uekisuecwyiqcmum;
        uekisuecwyiqcmum:
    }
    public function wigskegsqequoeks()
    {
        goto pkuuoegoucsmcciu;
        wgaickycsmcoocym:
        parent::wigskegsqequoeks();
        goto gisggqiemyiokyck;
        uwyeioqkgkmockse:
        $this->qcsmikeggeemccuu("\x63\x6d\142\x32\137\141\144\x6d\x69\x6e\137\151\156\151\164", [$this, "\162\x65\147\151\x73\x74\x65\162"]);
        goto yyyacuumougcsooy;
        yyyacuumougcsooy:
        iyumqcqimwmcouwy:
        goto wgaickycsmcoocym;
        pkuuoegoucsmcciu:
        if (!($this->qwkguquqiiaekmsi() && !ManipulateAjax::mcgoysmkqsqooceq())) {
            goto iyumqcqimwmcouwy;
        }
        goto uwyeioqkgkmockse;
        gisggqiemyiokyck:
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
        $this->sucsaaaeiecgqcem("\163\151\x64\x65");
        return $this;
    }
    
    public function ymyesuiosuagoaco() : self
    {
        $this->sucsaaaeiecgqcem("\141\144\x76\141\x6e\143\x65\144");
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
        goto keccieguacsgccuq;
        mckiewcikccuweas:
        $this->fields[$aiowsaccomcoikus->mwikyscisascoeea()] = $aiowsaccomcoikus;
        goto ccackosockmyumws;
        cgyqyossocsqgaug:
        eckeooegecygieyk:
        goto mckiewcikccuweas;
        keccieguacsgccuq:
        if ($aiowsaccomcoikus->yywskysiycwkwsgw()) {
            goto eckeooegecygieyk;
        }
        goto koecgmwauymuscgy;
        ccackosockmyumws:
        return $this;
        goto iugaemoyuymuioeg;
        koecgmwauymuscgy:
        $aiowsaccomcoikus->jyumyyugiwwiqomk(count($this->ugmceccgwaaaigiy()) + 1);
        goto cgyqyossocsqgaug;
        iugaemoyuymuioeg:
    }
    
    public function ewweaossowcqywaw(array $ikgwqyuyckaewsow) : self
    {
        goto ycaoqcaoskmiaecy;
        ycaoqcaoskmiaecy:
        foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) {
            goto oskuaiwgisysakgu;
            miywwekqqwcioqgm:
            $this->mkksewyosgeumwsa($aiowsaccomcoikus);
            goto koguuqyauswemwqw;
            oskuaiwgisysakgu:
            if (!$aiowsaccomcoikus instanceof Field) {
                goto qcoaaekiwcomokqa;
            }
            goto miywwekqqwcioqgm;
            koguuqyauswemwqw:
            qcoaaekiwcomokqa:
            goto mgoeiguueowceuya;
            mgoeiguueowceuya:
            uisoqcsgasswqgma:
            goto owwiiseawccyqagc;
            owwiiseawccyqagc:
        }
        goto awoyigaookcgkick;
        iccwagsgiwweegyu:
        return $this;
        goto uuiomuugqeygqqsw;
        awoyigaookcgkick:
        aaiucmuaeceaikis:
        goto iccwagsgiwweegyu;
        uuiomuugqeygqqsw:
    }
    
    public function mukiwuqwmywsckco() : bool
    {
        return !empty($this->ugmceccgwaaaigiy());
    }
    
    public function kukswgcoysaeescm(string $mqyaskyaekmkegmg) : self
    {
        goto gqiusmcakwmqwqoe;
        sgyqosasmwkkaicm:
        return $this;
        goto sooiqioysqysuqmc;
        gqiusmcakwmqwqoe:
        if (is_array($this->objectType)) {
            goto scoyasauucwmisgg;
        }
        goto cqwsyoowkeoomees;
        uyaweouuukcayyki:
        scoyasauucwmisgg:
        goto rskioecskoesimmm;
        cqwsyoowkeoomees:
        $this->objectType = [];
        goto uyaweouuukcayyki;
        rskioecskoesimmm:
        $this->objectType[] = $mqyaskyaekmkegmg;
        goto sgyqosasmwkkaicm;
        sooiqioysqysuqmc:
    }
    
    public function iakygkwocqoukwuc() : ?array
    {
        return $this->postTypes;
    }
    
    public function mgieiwsmcswmmiim(string $useksmwkuswkwcqg) : self
    {
        goto ayackygkmucicasi;
        ayackygkmucicasi:
        if (in_array($useksmwkuswkwcqg, $this->iakygkwocqoukwuc())) {
            goto ieuoqekamagwewua;
        }
        goto gyyquueyoigmqqgi;
        osmgkacsseggaeok:
        return $this;
        goto soaqqkyyqkggaqiq;
        uiwekeeeswqescmu:
        $this->kukswgcoysaeescm($useksmwkuswkwcqg);
        goto yaoqsoaicwocoeum;
        yaoqsoaicwocoeum:
        ieuoqekamagwewua:
        goto osmgkacsseggaeok;
        gyyquueyoigmqqgi:
        $this->postTypes[] = $useksmwkuswkwcqg;
        goto uiwekeeeswqescmu;
        soaqqkyyqkggaqiq:
    }
    
    public function aueosikimququsko(array $sciomagaqmgggsiu) : self
    {
        goto imyyqsmeukmygqea;
        yqgkaaakeeguqsoa:
        return $this;
        goto esgwmaommcoqgaqq;
        ucqcosmcaeqoqiik:
        meoyawcgmeswowic:
        goto yqgkaaakeeguqsoa;
        imyyqsmeukmygqea:
        foreach ($sciomagaqmgggsiu as $useksmwkuswkwcqg) {
            goto kmwewkusymggygku;
            wyecwskuasocyssk:
            $this->mgieiwsmcswmmiim($useksmwkuswkwcqg);
            goto yomwykwgomcossok;
            yomwykwgomcossok:
            aaseiuggiycwiqaa:
            goto wsyqiqqugeikswyw;
            kmwewkusymggygku:
            if (!$useksmwkuswkwcqg) {
                goto aaseiuggiycwiqaa;
            }
            goto wyecwskuasocyssk;
            wsyqiqqugeikswyw:
            yqkkowqgkkoagyau:
            goto sasqcgyokocouous;
            sasqcgyokocouous:
        }
        goto ucqcosmcaeqoqiik;
        esgwmaommcoqgaqq:
    }
    
    public function iwqugwigmoiagwec()
    {
        goto ywescecsocscqiek;
        qkoiyqmiyqgggewm:
        $meqocwsecsywiiqs = ManipulateHTML::uuccukgasskgimsq("\x64\151\x76", ["\x63\154\141\x73\x73" => "\160\x72\x2d\x6d\x65\164\x61\142\x6f\x78\55\x74\151\164\x6c\145\x20\155\x79\55\x61\165\164\157"], [$wkaqekwwgqsqwcoi, $meqocwsecsywiiqs]);
        goto augqyewgugakswko;
        makcqoyaqeuqegso:
        $wkaqekwwgqsqwcoi = ManipulateHTML::cuoygaaeqeqcuggu($this->eyamqkqiykagecsw(), ["\143\154\141\x73\x73" => "\160\162\55\155\x65\164\x61\x62\157\170\x2d\x69\x63\x6f\x6e\x20\x69\x63\x6f\x6e\x2d\163\x6d"]);
        goto qkoiyqmiyqgggewm;
        ywescecsocscqiek:
        $meqocwsecsywiiqs = $this->qcgakseyaikigqco();
        goto gouewaoykimcgakg;
        augqyewgugakswko:
        ueqckqsoacegcogq:
        goto suceoykiqcawgyee;
        gouewaoykimcgakg:
        if (!$this->eyamqkqiykagecsw()) {
            goto ueqckqsoacegcogq;
        }
        goto makcqoyaqeuqegso;
        suceoykiqcawgyee:
        return $meqocwsecsywiiqs;
        goto qwsikwwqgimcyuim;
        qwsikwwqgimcyuim:
    }
    
    public function mqmocoguqcyymgqu() : ?array
    {
        return $this->taxonomies;
    }
    
    public function acqyqaaeeogkosoq(string $kesssewsiegssiya) : self
    {
        goto uocqwqamsmykosmy;
        aukeeueesqyksqwu:
        return $this;
        goto skcmyumokskqcckq;
        meyykqkewoegmugo:
        $this->taxonomies[] = $kesssewsiegssiya;
        goto asuksoocskiwciqc;
        uocqwqamsmykosmy:
        if (in_array($kesssewsiegssiya, $this->mqmocoguqcyymgqu())) {
            goto cekgegesyoewqcis;
        }
        goto meyykqkewoegmugo;
        asuksoocskiwciqc:
        cekgegesyoewqcis:
        goto aukeeueesqyksqwu;
        skcmyumokskqcckq:
    }
    public function mieeukuyckssemsm(array $seyqqsmuaiegkeeq) : self
    {
        goto oomioaggyeeaysic;
        qugkumuigeucuoqa:
        return $this;
        goto sqaoumqsweiacuum;
        iccgqioeygeciycq:
        vmikeaymiccuswas:
        goto qugkumuigeucuoqa;
        oomioaggyeeaysic:
        foreach ($seyqqsmuaiegkeeq as $kesssewsiegssiya) {
            goto uyiaigymeewauaku;
            mikckoqyykkgeugq:
            qyykcmssmowcqqmu:
            goto scyuoqosoisassoe;
            qoecuquaikiiqqsm:
            wigkkwoicoeusyui:
            goto mikckoqyykkgeugq;
            sgaiuqsccumqooea:
            $this->acqyqaaeeogkosoq($kesssewsiegssiya);
            goto qoecuquaikiiqqsm;
            uyiaigymeewauaku:
            if (!$kesssewsiegssiya) {
                goto wigkkwoicoeusyui;
            }
            goto sgaiuqsccumqooea;
            scyuoqosoisassoe:
        }
        goto iccgqioeygeciycq;
        sqaoumqsweiacuum:
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
        goto ugeqoeowygumsuia;
        wxiguggaamcqwyii:
        igkggcocgwmsiaiy:
        goto qwaiaeicmcuyicss;
        qwaiaeicmcuyicss:
        return $this;
        goto wauscgmymskwmkos;
        ugeqoeowygumsuia:
        foreach ($ywoucyskcquysiwc as $cciauwuwuqaywgce) {
            goto escysimqcgcqkmom;
            qeemqoosooyaegke:
            $this->aucimgwswmgaocae($cciauwuwuqaywgce);
            goto aameqiooucocgook;
            aameqiooucocgook:
            kcyswcqsqcoggwai:
            goto ucqcgumsoccaigae;
            ucqcgumsoccaigae:
            gsoqmqmumeumywaq:
            goto isogegoossgykuiy;
            escysimqcgcqkmom:
            if (!$cciauwuwuqaywgce instanceof Tab) {
                goto kcyswcqsqcoggwai;
            }
            goto qeemqoosooyaegke;
            isogegoossgykuiy:
        }
        goto wxiguggaamcqwyii;
        wauscgmymskwmkos:
    }
    
    public function osqsemgesogkmios() : bool
    {
        return !empty($this->equiyaoamqmaeckc());
    }
    
    public function register($uusmaiomayssaecw = null) : CMB2
    {
        goto wqkiowymegocycgs;
        qoqagcimawkcegme:
        $uusmaiomayssaecw = $this->cisyiemkeykgkomc();
        goto aqumewkymkyqckki;
        kaqmaugqgwwugucc:
        if (!$this->osqsemgesogkmios()) {
            goto mmuyykecaoggaemg;
        }
        goto ieyammyusayuiesk;
        ieyammyusayuiesk:
        foreach ($this->equiyaoamqmaeckc() as $cciauwuwuqaywgce) {
            goto asieusgwkwamqacy;
            yqoiugwmcaoccouu:
            eucqeyegokoyegie:
            goto iumeegsgcmyycymc;
            iumeegsgcmyycymc:
            ssgomuoumiyccuuo:
            goto yicweuosuasyciwm;
            wqkoouqaoogskyuw:
            $this->ewweaossowcqywaw($cciauwuwuqaywgce->ugmceccgwaaaigiy());
            goto yqoiugwmcaoccouu;
            asieusgwkwamqacy:
            if (!($cciauwuwuqaywgce instanceof Tab && $cciauwuwuqaywgce->wkkcmkuiigsukyik())) {
                goto eucqeyegokoyegie;
            }
            goto wqkoouqaoogskyuw;
            yicweuosuasyciwm:
        }
        goto skgmcsquswcqyiig;
        wckkcawqigkukggg:
        $oeoswouussioaimo = new_cmb2_box($uiewakwqscemywuo);
        goto cqoekiuwmwsmyyki;
        eucoegmqucoieeug:
        ocyayeiwgmsmiomi:
        goto cqmwiaeeaegiqckq;
        cqoekiuwmwsmyyki:
        
        $oeoswouussioaimo->object_type($this->aaamyckgicycisqq());
        goto gskaeswcikaiaaui;
        aqumewkymkyqckki:
        ouogqskwiuqyeqam:
        goto kaqmaugqgwwugucc;
        iycagsyoqoqqwamc:
        mmuyykecaoggaemg:
        goto mqeauomuwcycgekg;
        isekukgeyoucwesg:
        $uiewakwqscemywuo["\146\151\145\x6c\144\163"] = $this->yceyooiweyiqgsam($this->ugmceccgwaaaigiy());
        goto eucoegmqucoieeug;
        mqeauomuwcycgekg:
        if (!$this->mukiwuqwmywsckco()) {
            goto ocyayeiwgmsmiomi;
        }
        goto isekukgeyoucwesg;
        gggkiioeyaywqwcq:
        if ($uusmaiomayssaecw) {
            goto ouogqskwiuqyeqam;
        }
        goto qoqagcimawkcegme;
        skgmcsquswcqyiig:
        awgyucsimgkaeqcc:
        goto egsoqqcqyckeogae;
        wqkiowymegocycgs:
        $uiewakwqscemywuo = [];
        goto gggkiioeyaywqwcq;
        gskaeswcikaiaaui:
        return $oeoswouussioaimo;
        goto wuswwoggiwegqwsi;
        cqmwiaeeaegiqckq:
        $uiewakwqscemywuo = array_merge($uiewakwqscemywuo, $this->weqsyyuyccsemacu($uusmaiomayssaecw));
        goto wckkcawqigkukggg;
        egsoqqcqyckeogae:
        $uiewakwqscemywuo["\x74\x61\x62\x73"] = array_filter($this->equiyaoamqmaeckc(), function ($cciauwuwuqaywgce) {
            return $cciauwuwuqaywgce->wkkcmkuiigsukyik();
        });
        goto iycagsyoqoqqwamc;
        wuswwoggiwegqwsi:
    }
    
    public function gisikkgygmseekyi() : self
    {
        return $this->ycgswwsswoyyeqgc(["\x63\157\155\x6d\x65\x6e\164"]);
    }
    
    public function weqsyyuyccsemacu($kooiowmeygoykmms = null) : array
    {
        goto eaqsmwsowasswwck;
        wkeuiawyakqmkkeu:
        $uiewakwqscemywuo["\143\x6c\141\x73\x73\145\163"] = $egkyssmuqcwaciya;
        goto awouamqqqcgwcami;
        uyccwiywcyesiwoi:
        $egkyssmuqcwaciya = "\x66\x6f\x72\x6d\x2d\x63\x6f\156\x74\141\x69\156\145\162";
        goto qkkekmcemcqusiia;
        cygaymiommawgamm:
        $egkyssmuqcwaciya .= "\x20\x70\x72\x2d\x74\x65\x72\155";
        goto ckemugoooeseikmi;
        eaqmceoqyemuqsic:
        iqcskuiusowukoem:
        goto cuiiwyscgawowmwi;
        isaskseywycoiksi:
        if (!(!$this->qwkguquqiiaekmsi() && $kooiowmeygoykmms)) {
            goto cgyoccckmuogiyka;
        }
        goto cgameakayuqewmuy;
        kamqomyowmaeyeae:
        goto qmuycmagkuookckm;
        goto eaqmceoqyemuqsic;
        ckemugoooeseikmi:
        $uiewakwqscemywuo["\x74\141\x78\157\156\157\155\x69\145\x73"] = $this->mqmocoguqcyymgqu();
        goto smyayuoysyaukcca;
        wsykyiouyyysaywo:
        if (!$this->mqmocoguqcyymgqu()) {
            goto mayyksswcuawuswu;
        }
        goto cygaymiommawgamm;
        awouamqqqcgwcami:
        $this->megwuoouecmkuaqm($uiewakwqscemywuo);
        goto qqsoeicimqgoimau;
        qqsoeicimqgoimau:
        return $this->configuration;
        goto mgiyosiiqgqeeawo;
        smyayuoysyaukcca:
        $uiewakwqscemywuo["\x6f\x62\152\x65\x63\x74\x5f\x74\x79\x70\145\163"] = ["\x74\145\162\155"];
        goto aaoseogoukyoqaiu;
        cgameakayuqewmuy:
        $uiewakwqscemywuo["\x73\150\x6f\x77\x5f\x6f\x6e"] = ["\153\145\x79" => $this->aaamyckgicycisqq(), "\x76\x61\x6c\165\x65" => [$kooiowmeygoykmms]];
        goto uigqcoagsgoikwwa;
        qkkekmcemcqusiia:
        if ($this->iakygkwocqoukwuc()) {
            goto iqcskuiusowukoem;
        }
        goto wsykyiouyyysaywo;
        uigqcoagsgoikwwa:
        cgyoccckmuogiyka:
        goto wkeuiawyakqmkkeu;
        wmmewkuagqcoymyi:
        qmuycmagkuookckm:
        goto isaskseywycoiksi;
        cuiiwyscgawowmwi:
        $uiewakwqscemywuo["\x70\157\163\164\137\x74\171\160\145\x73"] = $this->iakygkwocqoukwuc();
        goto ksisasisogugagwe;
        aaoseogoukyoqaiu:
        mayyksswcuawuswu:
        goto kamqomyowmaeyeae;
        ksisasisogugagwe:
        $egkyssmuqcwaciya .= "\x20\160\162\x2d\x6d\145\x74\141\x62\x6f\170";
        goto wmmewkuagqcoymyi;
        eaqsmwsowasswwck:
        $uiewakwqscemywuo = ["\x69\144" => $this->mwikyscisascoeea(), "\x74\151\164\x6c\145" => $this->iwqugwigmoiagwec(), "\x63\x6f\156\164\145\170\164" => $this->yqsycyoeiusqqqgm(), "\x70\162\151\157\x72\151\164\171" => $this->yywskysiycwkwsgw(), "\x73\150\x6f\x77\137\x6e\141\x6d\x65\163" => $this->eoceqqugyiaqqayw(), "\143\141\160\x61\142\x69\154\x69\x74\171" => $this->gwaeeegmgggawiyi(), "\x64\x69\163\x70\x6c\x61\171\137\x63\x62" => false, "\157\142\152\145\x63\164\x5f\164\171\x70\x65\163" => $this->aaamyckgicycisqq(), "\x76\145\x72\x74\151\143\x61\154\x5f\x74\x61\x62\163" => $this->kyccqycmcyqomiqm(), "\x61\x64\155\151\156\x5f\x6d\145\156\x75\x5f\x68\157\157\x6b" => false];
        goto uyccwiywcyesiwoi;
        mgiyosiiqgqeeawo:
    }
}
