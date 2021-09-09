<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613a1be32d755             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Media;

use enshrined\svgSanitize\Sanitizer;
use Exception;
use Pmpr\Common\Foundation\Decorator\DecoratorFile;
use Pmpr\Common\Foundation\Decorator\DecoratorOption;
use Pmpr\Common\Foundation\DOMCrawler;
use Pmpr\Common\Foundation\Manipulate\Post\ManipulateAttachment;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;

class Svg extends Common
{
    const SVG_MIME_TYPE = "\x69\155\x61\x67\x65\57\x73\x76\147\53\x78\155\154";
    
    public ?Sanitizer $sanitizer = null;
    public function __construct()
    {
        goto aqosuiskiicyymim;
        asgkgckgcgaowmqc:
        
        $umcwwewscqegoqoe->minify(true);
        goto woamusawsweikowo;
        aeyiikqmacugigig:
        parent::__construct();
        goto umcgeowmcyakagce;
        woamusawsweikowo:
        $this->sanitizer = $umcwwewscqegoqoe;
        goto aeyiikqmacugigig;
        aqosuiskiicyymim:
        $umcwwewscqegoqoe = new Sanitizer();
        goto asgkgckgcgaowmqc;
        umcgeowmcyakagce:
    }
    public function wigskegsqequoeks()
    {
        $this->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\141\144\x64\137\x74\167\x69\147\137\146\165\156\x63\164\151\x6f\x6e\x73"), [$this, "\145\x75\145\145\x79\145\x6d\147\x6b\145\171\143\145\151\x73\141"])->qcsmikeggeemccuu("\x67\145\x74\x5f\x69\x6d\x61\147\x65\x5f\164\141\147", [$this, "\143\147\x69\x61\153\141\x63\143\x6b\x6d\143\141\x71\x67\x69\153"], 10, 6);
        parent::wigskegsqequoeks();
    }
    public function kgquecmsgcouyaya()
    {
        $this->cecaguuoecmccuse("\165\160\x6c\x6f\x61\x64\x5f\x6d\x69\x6d\x65\x73", [$this, "\147\x67\x77\x63\x65\x71\167\x65\x65\141\141\143\167\x6f\151\x73"])->cecaguuoecmccuse("\x77\160\x5f\x68\141\x6e\144\x6c\145\x5f\165\x70\154\157\x61\x64\137\x70\x72\145\146\x69\154\164\145\162", [$this, "\155\145\153\145\165\x77\x69\x65\143\x69\x71\171\155\141\x69\x6f"])->cecaguuoecmccuse("\163\x76\x67\137\141\164\164\x72\x69\142\x75\164\x65\163", [$this, "\x6d\161\171\x61\143\x77\x61\x61\157\143\x67\x63\163\171\x61\147"], 999)->cecaguuoecmccuse("\x77\160\137\143\x68\145\x63\x6b\x5f\146\151\154\x65\x74\x79\160\145\137\141\156\144\137\x65\170\164", [$this, "\141\153\x69\157\157\x79\x61\x75\x6b\147\171\165\155\x63\155\165"], 75, 4)->cecaguuoecmccuse("\x61\144\155\x69\x6e\x5f\x70\x6f\163\x74\137\x74\x68\x75\x6d\x62\156\141\x69\x6c\x5f\x68\164\155\x6c", [$this, "\157\x75\x61\165\171\x79\141\153\x65\x61\x75\141\161\x71\151\153"], 10, 3)->cecaguuoecmccuse("\x77\160\137\147\145\164\137\x61\164\x74\141\x63\x68\155\145\x6e\164\x5f\155\145\164\x61\x64\x61\164\141", [$this, "\167\161\x79\161\x69\163\147\143\x79\145\x77\151\155\x6f\141\x69"], 10, 2)->cecaguuoecmccuse("\x77\160\137\160\x72\x65\160\x61\x72\145\137\141\164\x74\141\143\x68\155\x65\x6e\164\137\146\157\x72\137\x6a\x73", [$this, "\163\x6b\153\147\167\167\x6b\171\x6d\157\x6f\161\161\141\x77\x6d"], 10, 2)->cecaguuoecmccuse("\x77\x70\x5f\147\x65\x6e\x65\x72\141\164\x65\x5f\x61\x74\164\141\x63\x68\155\x65\x6e\164\137\x6d\x65\164\141\144\x61\x74\x61", [$this, "\171\167\147\x75\141\x6d\x61\151\x69\x79\141\x67\x61\167\163\143"], 10, 2)->cecaguuoecmccuse("\x69\x6d\141\x67\145\x5f\x75\160\154\x6f\x61\144\137\x66\x69\x6c\164\145\162\137\145\x78\143\154\165\x64\145", [$this, "\161\161\x6b\x6f\x77\x73\143\x61\x6f\157\x75\x63\x6b\145\147\157"], 10, 2)->cecaguuoecmccuse($this->ygyygikyocoymgaw("\x61\x74\164\x61\143\150\x6d\x65\156\x74\137\151\x73\137\x73\166\147"), [$this, "\145\147\x75\157\153\x77\161\x61\x6d\x63\x63\167\143\x71\157\155"], 10, 2)->cecaguuoecmccuse("\x77\x70\x5f\x67\x65\164\137\x61\164\x74\x61\x63\x68\x6d\145\156\x74\x5f\x69\x6d\x61\x67\145\x5f\x61\164\x74\162\151\x62\x75\164\145\163", [$this, "\x79\143\x79\x71\x6b\x67\x63\x69\x67\x67\x6f\x61\x67\141\147\x67"], 10, 3);
        parent::kgquecmsgcouyaya();
    }
    
    public function ycyqkgciggoagagg($wisgiwskwawciiee, $aiooqyausygaasqm, $oiegiwogmwmawkeo)
    {
        $wisgiwskwawciiee = $this->wmiseqaieauskweu($wisgiwskwawciiee, $aiooqyausygaasqm);
        
        return $wisgiwskwawciiee;
    }
    
    public function mqyacwaaocgcsyag($siquossayskcwkea = [])
    {
        goto ooymsigkiymussmk;
        mgyysecwqceoeqkc:
        ccqauscokygeseqg:
        goto kaiwcqcgoqgoqmuy;
        oagugomioiouugkg:
        if (!(!isset($siquossayskcwkea["\x68\x65\151\147\x68\x74"]) && !isset($siquossayskcwkea["\167\151\144\164\150"]))) {
            goto ccqauscokygeseqg;
        }
        goto ewaaoqsacsuaskso;
        kaiwcqcgoqgoqmuy:
        return $siquossayskcwkea;
        goto wiwmyyqikeackcgi;
        ekumegaekiouaqau:
        $siquossayskcwkea["\x77\151\x64\x74\x68"] = 100;
        goto mgyysecwqceoeqkc;
        ewaaoqsacsuaskso:
        $siquossayskcwkea["\150\145\x69\x67\150\164"] = 100;
        goto ekumegaekiouaqau;
        ooymsigkiymussmk:
        $siquossayskcwkea = $this->kguoyqackakgysoy($siquossayskcwkea);
        goto oagugomioiouugkg;
        wiwmyyqikeackcgi:
    }
    
    public function kguoyqackakgysoy($siquossayskcwkea, $uuossqmuccwyiemo = 16)
    {
        goto iywakcgekyskmwyq;
        uqwywgiauqaiimwa:
        return $siquossayskcwkea;
        goto qgsskoeisqceyeay;
        cisygcmgeoiywmus:
        mqicqmuiucsiwyyu:
        goto icgakkuyckqesico;
        smaosqyeiqocuoqc:
        $wyicceigkekkkwgs = (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x73\x76\147\x5f\145\154\x65\155\145\x6e\164\137\143\x6c\141\x73\x73\x5f\162\x61\x74\x69\x6f\156\x5f\143\x6f\x6e\x76\x65\162\x74\145\162"), []);
        goto eowukugguiywsoyq;
        mcaowagyicymmeca:
        if (!$egkyssmuqcwaciya) {
            goto ywwagicseyckmgoc;
        }
        goto smaosqyeiqocuoqc;
        iywakcgekyskmwyq:
        $egkyssmuqcwaciya = ManipulateArray::get($siquossayskcwkea, "\x63\x6c\x61\163\x73");
        goto mcaowagyicymmeca;
        imkssyywooioucus:
        iugwuicgyyakcoas:
        goto ocmeugiacmiquqme;
        owssoyiioasuoiwy:
        $uuossqmuccwyiemo = 16;
        goto cisygcmgeoiywmus;
        saugggiieycqisoo:
        coaoysumumkmugqe:
        goto imkssyywooioucus;
        ackekiywiuwuswcg:
        if (!(!is_numeric($uuossqmuccwyiemo) || $uuossqmuccwyiemo < 1)) {
            goto mqicqmuiucsiwyyu;
        }
        goto owssoyiioasuoiwy;
        icgakkuyckqesico:
        foreach ($wyicceigkekkkwgs as $oiegiwogmwmawkeo => $eqgoocgaqwqcimie) {
            goto wwwykymsssmcmkii;
            gcmmwomegsoosqgw:
            symeoeugigmiwkss:
            goto ewskyikcqksaoqui;
            yauqoemesamemoog:
            $eqgoocgaqwqcimie *= $uuossqmuccwyiemo;
            goto gsukkgwiogagoeym;
            gegewgiwkgmmocua:
            if (is_array($eqgoocgaqwqcimie)) {
                goto wwkmcacgmyaswsaw;
            }
            goto yauqoemesamemoog;
            wwwykymsssmcmkii:
            if (!(strpos($egkyssmuqcwaciya, $oiegiwogmwmawkeo) !== false)) {
                goto uwoeomuksucugygo;
            }
            goto gegewgiwkgmmocua;
            cwkqmgykgysmgiyq:
            wwkmcacgmyaswsaw:
            goto gcgokiaeqcqsqogw;
            aqwqycaysagwiesw:
            goto coaoysumumkmugqe;
            goto iqyaayumigaguyks;
            gsukkgwiogagoeym:
            $siquossayskcwkea["\x77\x69\144\x74\x68"] = intval($eqgoocgaqwqcimie);
            goto qkqgiqqqauueicmg;
            gcgokiaeqcqsqogw:
            $siquossayskcwkea["\x77\151\x64\164\150"] = intval($eqgoocgaqwqcimie[0] * $uuossqmuccwyiemo);
            goto myymosmuygkiwagm;
            myymosmuygkiwagm:
            $siquossayskcwkea["\x68\x65\151\x67\150\x74"] = intval($eqgoocgaqwqcimie[1] * $uuossqmuccwyiemo);
            goto cyaiikokmuyugiow;
            iweywcmciioqsoka:
            goto sgueqceaumcqumye;
            goto cwkqmgykgysmgiyq;
            cyaiikokmuyugiow:
            sgueqceaumcqumye:
            goto aqwqycaysagwiesw;
            iqyaayumigaguyks:
            uwoeomuksucugygo:
            goto gcmmwomegsoosqgw;
            qkqgiqqqauueicmg:
            $siquossayskcwkea["\150\145\151\147\x68\x74"] = intval($eqgoocgaqwqcimie);
            goto iweywcmciioqsoka;
            ewskyikcqksaoqui:
        }
        goto saugggiieycqisoo;
        ocmeugiacmiquqme:
        ywwagicseyckmgoc:
        goto uqwywgiauqaiimwa;
        eowukugguiywsoyq:
        if (!$wyicceigkekkkwgs) {
            goto iugwuicgyyakcoas;
        }
        goto ackekiywiuwuswcg;
        qgsskoeisqceyeay:
    }
    
    public function qqkowscaoouckego($couiucmsqaieciue = [])
    {
        $couiucmsqaieciue[] = self::SVG_MIME_TYPE;
        return $couiucmsqaieciue;
    }
    
    public function eueeyemgkeyceisa($eyoesceegakeygsi)
    {
        $eyoesceegakeygsi->kmmegqceukkkawme("\x69\163\137\x73\166\x67", function ($aiooqyausygaasqm) {
            return $this->iigcaickwcykouca($aiooqyausygaasqm);
        });
    }
    
    public function eguokwqamccwcqom($iigcaickwcykouca, $post)
    {
        return $this->iigcaickwcykouca($post);
    }
    
    public function ggwceqweeaacwois($yawwowoqosismgyq)
    {
        goto qaiekqcmmmomwkay;
        iakkmkweqaagekgo:
        return $yawwowoqosismgyq;
        goto uwgmiksaegmqceyk;
        qaiekqcmmmomwkay:
        $yawwowoqosismgyq["\163\x76\147"] = self::SVG_MIME_TYPE;
        goto egoyamquqqewuegi;
        egoyamquqqewuegi:
        $yawwowoqosismgyq["\x73\166\x67\x7a"] = self::SVG_MIME_TYPE;
        goto iakkmkweqaagekgo;
        uwgmiksaegmqceyk:
    }
    
    public function wsqcimqccawqouge($nsmgceoqaqogqmuw, $post, $uickqscmwgggsmgy)
    {
        return $this->uwmcsgckegoamwas($nsmgceoqaqogqmuw, $uickqscmwgggsmgy);
    }
    
    public function umsucesyoggwwwmu($nsmgceoqaqogqmuw, $aokagokqyuysuksm)
    {
        return $this->uwmcsgckegoamwas($nsmgceoqaqogqmuw, $aokagokqyuysuksm);
    }
    
    public function wmiseqaieauskweu($wwgucssaecqekuek, $aokagokqyuysuksm)
    {
        goto qaqimkwawaoyquqo;
        wcsmeukkkeykymku:
        amskquyqikemocuo:
        goto wsymeeuaouaawqei;
        qaqimkwawaoyquqo:
        if (!$this->iigcaickwcykouca($aokagokqyuysuksm)) {
            goto amskquyqikemocuo;
        }
        goto skumomgmiegcqycw;
        skumomgmiegcqycw:
        ManipulateArray::unset($wwgucssaecqekuek, ["\163\162\x63\163\x65\164", "\163\151\172\x65\163"]);
        goto wcsmeukkkeykymku;
        wsymeeuaouaawqei:
        return $wwgucssaecqekuek;
        goto cmimcccwuucogiaa;
        cmimcccwuucogiaa:
    }
    
    public function uwmcsgckegoamwas($nsmgceoqaqogqmuw, $aokagokqyuysuksm)
    {
        goto mweocegcwiiiwkcs;
        egswysgmqmcsswia:
        scwisyammksaguea:
        goto ygcassqguceeaako;
        mweocegcwiiiwkcs:
        $aqykuigiuwmmcieu = $nsmgceoqaqogqmuw;
        goto wsooeyooiuqokgwo;
        ygcassqguceeaako:
        return $aqykuigiuwmmcieu;
        goto amkoayycaiguswem;
        yymkawwocayqmcew:
        try {
            goto mawocayqcocoacma;
            mawocayqcocoacma:
            $egkyssmuqcwaciya = DOMCrawler::waecsyqmwascmqoa($nsmgceoqaqogqmuw, "\151\155\147", "\x63\x6c\x61\163\163");
            goto yiqackmqoqegssaa;
            qygsseugiwqmmyck:
            $ewgwqamkygiqaawc = $this->kcciqwskewsuaemk()->souwykwwmyygqyqi($qogsmwakwacwqogk);
            goto kccaqkcqoayausew;
            yiqackmqoqegssaa:
            $qogsmwakwacwqogk = ManipulateAttachment::ygwimyogyaqgumam($aokagokqyuysuksm);
            goto qygsseugiwqmmyck;
            kccaqkcqoayausew:
            $ewgwqamkygiqaawc = preg_replace("\57\74\x5c\77\170\155\154\x2e\x2a\77\134\x3f\x3e\57", '', $ewgwqamkygiqaawc);
            goto yuuwkkqomcewkmma;
            yuuwkkqomcewkmma:
            $aqykuigiuwmmcieu = DOMCrawler::igmaewykumgwoaoy($ewgwqamkygiqaawc, ["\163\166\x67" => ["\143\x6c\141\x73\x73" => $egkyssmuqcwaciya]]);
            goto kuecssumeqasoaoo;
            kuecssumeqasoaoo:
        } catch (Exception $wgaoewqkwgomoaai) {
            $aqykuigiuwmmcieu = $nsmgceoqaqogqmuw;
        }
        goto egswysgmqmcsswia;
        wsooeyooiuqokgwo:
        if (!($nsmgceoqaqogqmuw && $this->iigcaickwcykouca($aokagokqyuysuksm))) {
            goto scwisyammksaguea;
        }
        goto yymkawwocayqmcew;
        amkoayycaiguswem:
    }
    
    public function akiooyaukgyumcmu($icwicymcioeyeyek = null, $qogsmwakwacwqogk = null, $wkcwykowmmmwioqs = null, $yawwowoqosismgyq = null)
    {
        goto cuacsemcmuyaokge;
        kwkeiomeuququaoy:
        $ukequsueuukqgaca = explode("\56", $wkcwykowmmmwioqs);
        goto giqysmgscwwqgmqe;
        giqysmgscwwqgmqe:
        $yucgcsieomwqgwws = strtolower(end($ukequsueuukqgaca));
        goto qaeqsckgkimiuwca;
        cuacsemcmuyaokge:
        $yucgcsieomwqgwws = isset($icwicymcioeyeyek["\145\x78\x74"]) ? $icwicymcioeyeyek["\145\x78\164"] : '';
        goto aoqqweiisiaekqsk;
        smmagsweysscecce:
        return $icwicymcioeyeyek;
        goto iiogyckwmaouswqy;
        guoqssciqoegywsg:
        if (!in_array($yucgcsieomwqgwws, ["\163\x76\147", "\163\x76\147\x7a"])) {
            goto ksuoesmcewiqukgy;
        }
        goto gqcosoeyaqmyccca;
        gqcosoeyaqmyccca:
        $icwicymcioeyeyek["\164\171\160\145"] = self::SVG_MIME_TYPE;
        goto skegiiomcggeymuw;
        skegiiomcggeymuw:
        $icwicymcioeyeyek["\145\x78\164"] = $yucgcsieomwqgwws;
        goto oqumomyawuuomquy;
        qaeqsckgkimiuwca:
        qosuqqceyccekysq:
        goto guoqssciqoegywsg;
        oqumomyawuuomquy:
        ksuoesmcewiqukgy:
        goto smmagsweysscecce;
        aoqqweiisiaekqsk:
        if (!(strlen($yucgcsieomwqgwws) < 1)) {
            goto qosuqqceyccekysq;
        }
        goto kwkeiomeuququaoy;
        iiogyckwmaouswqy:
    }
    
    public function mekeuwieciqymaio($qogsmwakwacwqogk)
    {
        goto eagggcysqeeaeose;
        oimegoemmuwwwkyo:
        wkoqomessckkgeua:
        goto oayiqwmaaukkuimy;
        oayiqwmaaukkuimy:
        return $qogsmwakwacwqogk;
        goto eiwkyioqeaaemqsa;
        eagggcysqeeaeose:
        if (!($qogsmwakwacwqogk["\164\171\x70\145"] === self::SVG_MIME_TYPE)) {
            goto wkoqomessckkgeua;
        }
        goto gcwikewmwkqsugms;
        ecmiggsmgmeaaqug:
        $qogsmwakwacwqogk["\x65\162\162\x6f\162"] = __("\123\157\162\162\x79\54\40\x74\150\151\163\x20\x66\151\154\145\40\143\157\165\154\x64\x6e\47\164\x20\142\145\x20\163\141\156\x69\164\151\172\145\x64\40\x73\x6f\x20\x66\157\x72\x20\163\x65\x63\x75\x72\151\164\171\x20\x72\x65\141\x73\157\x6e\163\x20\x77\141\x73\156\x27\x74\40\x75\x70\x6c\x6f\141\144\x65\x64", PR__CMN__FOUNDATION);
        goto qaoooeioqwiiceyq;
        qaoooeioqwiiceyq:
        qyckwskcewqioqyk:
        goto oimegoemmuwwwkyo;
        gcwikewmwkqsugms:
        if ($this->yiiiqewsseywemqu($qogsmwakwacwqogk["\164\x6d\160\137\x6e\141\155\145"])) {
            goto qyckwskcewqioqyk;
        }
        goto ecmiggsmgmeaaqug;
        eiwkyioqeaaemqsa:
    }
    
    public function skkgwwkymooqqawm($keccaugmemegoimu, $aiooqyausygaasqm) : array
    {
        goto yikaqawiqaokyqgw;
        cumoewcksgaqwwoo:
        $keccaugmemegoimu["\x69\x63\157\156"] = $keccaugmemegoimu["\x75\162\154"];
        goto kuiomeesyokwsgio;
        yikaqawiqaokyqgw:
        if (!($keccaugmemegoimu["\155\x69\x6d\145"] == self::SVG_MIME_TYPE)) {
            goto iwemkuaseiooqoqg;
        }
        goto askiamwsewkaqwoi;
        qgmegqweacumuccw:
        $keccaugmemegoimu["\163\x69\172\x65\x73"] = $wyicceigkekkkwgs;
        goto cumoewcksgaqwwoo;
        kuiomeesyokwsgio:
        iwemkuaseiooqoqg:
        goto yescggaseyimocqu;
        eqggkouoswesgwya:
        $possible_sizes = $this->sscegwueamckwmcy("\151\x6d\x61\147\x65\x5f\163\x69\x7a\145\x5f\x6e\141\155\x65\163\x5f\143\x68\x6f\157\163\x65", ["\x66\x75\x6c\x6c" => __("\x46\x75\x6c\x6c\40\x53\151\172\145", PR__CMN__FOUNDATION), "\x74\150\165\155\142\x6e\x61\x69\154" => __("\x54\150\165\x6d\x62\156\141\151\x6c", PR__CMN__FOUNDATION), "\155\x65\144\151\165\155" => __("\x4d\145\144\151\x75\155", PR__CMN__FOUNDATION), "\154\141\x72\x67\145" => __("\x4c\x61\162\147\145", PR__CMN__FOUNDATION)]);
        goto icoooiwmiusyeaes;
        icoooiwmiusyeaes:
        $wyicceigkekkkwgs = [];
        goto emoaoyuqmmymmwkq;
        yescggaseyimocqu:
        return $keccaugmemegoimu;
        goto ywgyaqcqgosmigae;
        coawukgoisakmosc:
        if (!$qaiwqwwemmyyqosy) {
            goto kgogceiykkokkgeg;
        }
        goto eqiqgwqscsswkmwk;
        eqiqgwqscsswkmwk:
        $keccaugmemegoimu = array_merge($keccaugmemegoimu, $qaiwqwwemmyyqosy);
        goto aymkogwsagaggsem;
        aymkogwsagaggsem:
        kgogceiykkokkgeg:
        goto eqggkouoswesgwya;
        askiamwsewkaqwoi:
        $qaiwqwwemmyyqosy = $this->qaeakmimoqkugagk(ManipulateAttachment::ckoygqywcuqasqea($aiooqyausygaasqm));
        goto coawukgoisakmosc;
        semoowiyeimkyeuc:
        gkoasaqwwqsgwqgo:
        goto qgmegqweacumuccw;
        emoaoyuqmmymmwkq:
        foreach ($possible_sizes as $oiegiwogmwmawkeo => $pkyyagewkiyckmwy) {
            goto isgiyocowwwceaoa;
            ucoikisgieeseyqo:
            $default_width = 2000;
            goto gmmaicwkwqiywwyc;
            gmmaicwkwqiywwyc:
            if (!("\146\x75\x6c\154" === $oiegiwogmwmawkeo && $qaiwqwwemmyyqosy)) {
                goto euemimammkmwkuwk;
            }
            goto goouowwycoakigim;
            isgiyocowwwceaoa:
            $default_height = 2000;
            goto ucoikisgieeseyqo;
            goouowwycoakigim:
            $default_height = $qaiwqwwemmyyqosy["\x68\145\151\x67\150\164"];
            goto aasuycoysaucuaaq;
            seocecaioucmugky:
            okwsycyoqycgwaco:
            goto eeicwkoeaqmaoywm;
            kgeiskysuuasqckq:
            euemimammkmwkuwk:
            goto cwccwmggqyeeggwe;
            cwccwmggqyeeggwe:
            $wyicceigkekkkwgs[$oiegiwogmwmawkeo] = ["\150\x65\x69\147\x68\x74" => DecoratorOption::get("{$oiegiwogmwmawkeo}\x5f\x73\151\172\x65\137\167", $default_height), "\x77\151\144\164\150" => DecoratorOption::get("{$oiegiwogmwmawkeo}\137\x73\x69\172\145\x5f\x68", $default_width), "\165\162\154" => $keccaugmemegoimu["\165\x72\x6c"], "\157\x72\151\145\156\x74\141\x74\151\x6f\x6e" => "\x70\157\162\164\x72\141\x69\x74"];
            goto seocecaioucmugky;
            aasuycoysaucuaaq:
            $default_width = $qaiwqwwemmyyqosy["\x77\x69\x64\164\150"];
            goto kgeiskysuuasqckq;
            eeicwkoeaqmaoywm:
        }
        goto semoowiyeimkyeuc;
        ywgyaqcqgosmigae:
    }
    
    protected function yiiiqewsseywemqu($qogsmwakwacwqogk)
    {
        goto mywueecygymayigq;
        oeaskyqueyagqcmc:
        
        if (!($yuoaskweqogoasgc = $this->wsggsqigawogiwky($yeueggiecgqcswqm))) {
            goto msaegiggioiykouc;
        }
        goto ckcesgcceqqqieem;
        qqyeogaouscuaikw:
        return false;
        goto swkmkgmucceyweie;
        aooeykwscmqgouay:
        msaegiggioiykouc:
        goto mcccguiaquiickwq;
        swkmkgmucceyweie:
        gsoyaqsaauaokukc:
        goto aooeykwscmqgouay;
        sugmgeiemuygeoce:
        uymqoeqgwwkeiuok:
        goto soeggysyusqoiwwg;
        mywueecygymayigq:
        $yeueggiecgqcswqm = $this->kcciqwskewsuaemk()->souwykwwmyygqyqi($qogsmwakwacwqogk);
        goto oeaskyqueyagqcmc;
        oesqomwsgwmckgsq:
        return $this->kcciqwskewsuaemk()->kwsmkgyoyaqecwuu($qogsmwakwacwqogk, $qawsmigsyysqwmeq);
        goto wswmegcumomiwaqo;
        eiiqicyywgugksuc:
        return false;
        goto sugmgeiemuygeoce;
        quwwquywcuyiiweo:
        if (!($qawsmigsyysqwmeq === false)) {
            goto uymqoeqgwwkeiuok;
        }
        goto eiiqicyywgugksuc;
        ckcesgcceqqqieem:
        $yeueggiecgqcswqm = gzdecode($yeueggiecgqcswqm);
        goto mmqsgsuycqioemgo;
        soeggysyusqoiwwg:
        
        if (!$yuoaskweqogoasgc) {
            goto akcqkwesmcuumqqc;
        }
        goto ommmymgkaageowym;
        mcccguiaquiickwq:
        
        $qawsmigsyysqwmeq = $this->sanitizer->sanitize($yeueggiecgqcswqm);
        goto quwwquywcuyiiweo;
        mmqsgsuycqioemgo:
        
        if (!($yeueggiecgqcswqm === false)) {
            goto gsoyaqsaauaokukc;
        }
        goto qqyeogaouscuaikw;
        aseoykguwasmaggs:
        akcqkwesmcuumqqc:
        goto oesqomwsgwmckgsq;
        ommmymgkaageowym:
        $qawsmigsyysqwmeq = gzencode($qawsmigsyysqwmeq);
        goto aseoykguwasmaggs;
        wswmegcumomiwaqo:
    }
    
    protected function wsggsqigawogiwky($ygwoqcwsaggqoamw)
    {
        goto scageqmiwcyqmmmk;
        yqewusaguumeiqyq:
        qaugkmgccegqkasu:
        goto kwwgmsmuoeysguwq;
        fosuiwomyuwkaisi:
        return 0 === mb_strpos($ygwoqcwsaggqoamw, "\x1f" . "\213" . "\10");
        goto yqewusaguumeiqyq;
        swgecgeeeaaakgss:
        return 0 === strpos($ygwoqcwsaggqoamw, "\37" . "\x8b" . "\10");
        goto qssyiieuymmiwicm;
        qssyiieuymmiwicm:
        goto qaugkmgccegqkasu;
        goto kuyuwimysoqcmgek;
        scageqmiwcyqmmmk:
        if (function_exists("\x6d\x62\137\163\164\162\x70\x6f\x73")) {
            goto wsouygqoeyuksock;
        }
        goto swgecgeeeaaakgss;
        kuyuwimysoqcmgek:
        wsouygqoeyuksock:
        goto fosuiwomyuwkaisi;
        kwwgmsmuoeysguwq:
    }
    
    public function oowwkoeekmwwgieu($mcqieaigyeeyaksm, $aiooqyausygaasqm, $oiegiwogmwmawkeo)
    {
        goto yigecwqswuowoakm;
        aqguswuomiqimcwy:
        $gkiuoymeukweiaaw = ManipulateAttachment::iuwsgyqakicakuoq($oiegiwogmwmawkeo);
        goto gocwgeomykcekcso;
        cgsawegeqqsecwam:
        qeaugewkiwmkoaas:
        goto eucsyaygqqcqamus;
        kyswigcwgusmesqi:
        $cswemwoyesycwkuq = ManipulateAttachment::get($gkiuoymeukweiaaw, "\x68\x65\151\147\150\164");
        goto oimaymokouuwueum;
        gocwgeomykcekcso:
        $cswemwoyesycwkuq = false;
        goto kggwiioyiqgskcem;
        kggwiioyiqgskcem:
        $qeswwaqqsyymqawg = false;
        goto emwggqiqcmmqeawy;
        uoqequmkiyukiqgi:
        return $mcqieaigyeeyaksm;
        goto qwikcqiaiumsswow;
        emwggqiqcmmqeawy:
        if (!$gkiuoymeukweiaaw) {
            goto qeaugewkiwmkoaas;
        }
        goto kyswigcwgusmesqi;
        eucsyaygqqcqamus:
        
        
        goto iaqwisciugaosygy;
        iaqwisciugaosygy:
        cgmgikoumekoyyae:
        goto uoqequmkiyukiqgi;
        oimaymokouuwueum:
        $qeswwaqqsyymqawg = ManipulateAttachment::get($gkiuoymeukweiaaw, "\167\151\144\x74\150");
        goto cgsawegeqqsecwam;
        yigecwqswuowoakm:
        if (!$this->iigcaickwcykouca($aiooqyausygaasqm)) {
            goto cgmgikoumekoyyae;
        }
        goto aqguswuomiqimcwy;
        qwikcqiaiumsswow:
    }
    
    public function ouauyyakeauaqqik($ewgwqamkygiqaawc, $post_id, $thumbnail_id)
    {
        goto iekecmawqyigmqcg;
        oeeakgukqusiqswc:
        return $ewgwqamkygiqaawc;
        goto cocwomcoymcaqgky;
        wsawmoiaemkggocs:
        $ewgwqamkygiqaawc = DOMCrawler::igmaewykumgwoaoy($ewgwqamkygiqaawc, ["\x69\155\147\x2c\x20\x61" => ["\143\x6c\141\x73\163" => "\x77\x2d\x31\60\60"]]);
        goto iuiawwoouuwwiqca;
        iekecmawqyigmqcg:
        if (!$this->iigcaickwcykouca($thumbnail_id)) {
            goto ukggweysgiiygqsa;
        }
        goto wsawmoiaemkggocs;
        iuiawwoouuwwiqca:
        ukggweysgiiygqsa:
        goto oeeakgukqusiqswc;
        cocwomcoymcaqgky:
    }
    
    public function cgiakacckmcaqgik($nsmgceoqaqogqmuw, $aokagokqyuysuksm, $gkykacccamuwowwc, $meqocwsecsywiiqs, $ioogmuawkgcgmkia, $oiegiwogmwmawkeo)
    {
        goto oyeswuecyaiiawyg;
        oyeswuecyaiiawyg:
        if (!$this->iigcaickwcykouca($aokagokqyuysuksm)) {
            goto wqmgwcsuccoweocq;
        }
        goto kkscsmuyumawosyc;
        qucoecmmmacqooek:
        $nsmgceoqaqogqmuw = str_replace("\x77\151\144\164\x68\75\42\x31\x22\40", '', $nsmgceoqaqogqmuw);
        goto qeggwmykewcoieic;
        icqaiqyewuyegkeq:
        $nsmgceoqaqogqmuw = str_replace("\167\151\x64\x74\150\x3d\x22\x31\x22\x20", sprintf("\167\x69\x64\164\150\75\x22\45\x73\x22\x20", $qeswwaqqsyymqawg), $nsmgceoqaqogqmuw);
        goto dmwmgeswweekqyuw;
        moyqaggmqqimwusm:
        $qeswwaqqsyymqawg = $oiegiwogmwmawkeo[0];
        goto kawgkswoygkmgmao;
        moeseousgukmygmy:
        wqgecqaciyakecys:
        goto xaiaogcwcaeweoiu;
        tsywwmwawwgcwmuc:
        if ($cswemwoyesycwkuq && $qeswwaqqsyymqawg) {
            goto yemwekyegaywgoug;
        }
        goto qucoecmmmacqooek;
        kkscsmuyumawosyc:
        if (is_array($oiegiwogmwmawkeo)) {
            goto moeeimaaoaycycmi;
        }
        goto ysmessckmysogeua;
        xaiaogcwcaeweoiu:
        $nsmgceoqaqogqmuw = str_replace("\x2f\x3e", "\40\162\157\154\145\75\42\x69\x6d\147\42\x20\57\x3e", $nsmgceoqaqogqmuw);
        goto ogwaiqiccywqqiwk;
        yqckgyeeuyayosww:
        $cswemwoyesycwkuq = $qaiwqwwemmyyqosy["\x68\x65\151\147\x68\164"];
        goto qmsyaycokgmmwycs;
        giiqogwyoikiiqyi:
        $qeswwaqqsyymqawg = DecoratorOption::get("{$oiegiwogmwmawkeo}\x5f\x73\151\172\x65\137\167", false);
        goto iqiwimyamykmuiwo;
        ogwaiqiccywqqiwk:
        wqmgwcsuccoweocq:
        goto wsomqsmeououqiwu;
        iqiwimyamykmuiwo:
        $cswemwoyesycwkuq = DecoratorOption::get("{$oiegiwogmwmawkeo}\137\x73\x69\172\145\x5f\x68", false);
        goto egyuciuossumacuy;
        qmsyaycokgmmwycs:
        ymiosikicyqkaiaa:
        goto geqakgsumkyosuca;
        qicekkeggigkwqeu:
        moeeimaaoaycycmi:
        goto moyqaggmqqimwusm;
        egyuciuossumacuy:
        goto ymiosikicyqkaiaa;
        goto egwuecigeyuooiam;
        sieccokukwgmuggw:
        $qeswwaqqsyymqawg = $qaiwqwwemmyyqosy["\x77\x69\144\164\150"];
        goto yqckgyeeuyayosww;
        ysmessckmysogeua:
        if ("\146\x75\x6c\154" == $oiegiwogmwmawkeo && ($qaiwqwwemmyyqosy = $this->qaeakmimoqkugagk(ManipulateAttachment::ckoygqywcuqasqea($aokagokqyuysuksm)))) {
            goto ukygqcaqcaqqmyew;
        }
        goto giiqogwyoikiiqyi;
        suewugkisoommmgy:
        mggyiwyuuiwswaks:
        goto tsywwmwawwgcwmuc;
        ieauiumamygiuckc:
        goto wqgecqaciyakecys;
        goto eookussqeicycoio;
        wsomqsmeououqiwu:
        return $nsmgceoqaqogqmuw;
        goto eouugaqkgamwmgmo;
        dmwmgeswweekqyuw:
        $nsmgceoqaqogqmuw = str_replace("\150\145\151\147\150\164\75\x22\61\42\40", sprintf("\150\x65\x69\147\150\x74\75\x22\45\x73\x22\40", $cswemwoyesycwkuq), $nsmgceoqaqogqmuw);
        goto moeseousgukmygmy;
        eookussqeicycoio:
        yemwekyegaywgoug:
        goto icqaiqyewuyegkeq;
        egwuecigeyuooiam:
        ukygqcaqcaqqmyew:
        goto sieccokukwgmuggw;
        kawgkswoygkmgmao:
        $cswemwoyesycwkuq = $oiegiwogmwmawkeo[1];
        goto suewugkisoommmgy;
        geqakgsumkyosuca:
        goto mggyiwyuuiwswaks;
        goto qicekkeggigkwqeu;
        qeggwmykewcoieic:
        $nsmgceoqaqogqmuw = str_replace("\150\x65\151\x67\x68\x74\75\x22\x31\42\40", '', $nsmgceoqaqogqmuw);
        goto ieauiumamygiuckc;
        eouugaqkgamwmgmo:
    }
    
    public function ywguamaiiyagawsc($kuguwoaesuqsqysu, $attachment_id)
    {
        goto yguicqcomwueokwm;
        kyaysckiwskgogci:
        $upload_dir = DecoratorFile::oemywwmmmiywiqai();
        goto eageyyymyekskmue;
        csmqeagwuisqiuym:
        $qaiwqwwemmyyqosy = $this->qaeakmimoqkugagk($svg_path);
        goto ccymqyyaikauqaiq;
        qkycyqgwwoiuaomq:
        $wkcwykowmmmwioqs = basename($svg_path);
        goto csmqeagwuisqiuym;
        uyouccoiyogmuwey:
        $kuguwoaesuqsqysu = ["\167\151\x64\164\x68" => intval($qaiwqwwemmyyqosy["\x77\x69\x64\164\150"]), "\150\x65\x69\147\x68\x74" => intval($qaiwqwwemmyyqosy["\x68\145\x69\147\x68\164"]), "\146\151\x6c\x65" => $relative_path];
        goto meyowgukekkkkuqe;
        eageyyymyekskmue:
        
        $relative_path = str_replace($upload_dir["\x62\x61\x73\x65\144\x69\x72"], '', $svg_path);
        goto qkycyqgwwoiuaomq;
        cooiowgwqgssuqcw:
        weocosykwsaimaks:
        goto uyouccoiyogmuwey;
        wkumckmusackacmi:
        gmywmsmiayimqygy:
        goto wayyiemaccqkmqeg;
        yguicqcomwueokwm:
        if (!$this->iigcaickwcykouca($attachment_id)) {
            goto kqsyuyukgswmwcys;
        }
        goto aikuwguwuiekouoo;
        ygaggwgwiceegasy:
        return $kuguwoaesuqsqysu;
        goto cooiowgwqgssuqcw;
        kysaqkaiksosyegu:
        return $kuguwoaesuqsqysu;
        goto iwawqgcgskysqyaa;
        yygqgeukeuaciewa:
        kqsyuyukgswmwcys:
        goto kysaqkaiksosyegu;
        meyowgukekkkkuqe:
        
        $wyicceigkekkkwgs = [];
        goto mgocagiwqsgaisyq;
        mgocagiwqsgaisyq:
        foreach (get_intermediate_image_sizes() as $piuesceqiguuskme) {
            goto iisgwcgceeygauyk;
            aesukugmkcsuocwc:
            uqwsiocauuswgwok:
            goto uyowywywqeagqcuw;
            aoewemyqigugysua:
            kcaysyweukeimoik:
            goto egauqkuumkisssaa;
            maycimoaceiiuemu:
            
            $wyicceigkekkkwgs[$piuesceqiguuskme]["\x63\162\x6f\x70"] = intval($additional_image_sizes[$piuesceqiguuskme]["\x63\162\157\160"]);
            goto aesukugmkcsuocwc;
            umekgwemiaygomky:
            $wyicceigkekkkwgs[$piuesceqiguuskme]["\155\x69\155\x65\x2d\x74\x79\160\x65"] = ManipulateAttachment::ikocqgeqiykwwyqs($attachment_id);
            goto aoewemyqigugysua;
            qoysygagyigwsiwm:
            if (isset($additional_image_sizes[$piuesceqiguuskme]["\x63\162\x6f\x70"])) {
                goto wcoekawkkswkgamc;
            }
            goto yqwkgwucqwqyuqmw;
            iwciaqcioigqwiys:
            goto noswwaawyacomwyo;
            goto awgamseuywgciius;
            uyyieiuceauoecyq:
            wcoekawkkswkgamc:
            goto maycimoaceiiuemu;
            eswgqkmomsiauqqy:
            noswwaawyacomwyo:
            goto qoysygagyigwsiwm;
            yigmeqsygwgioyaa:
            
            $wyicceigkekkkwgs[$piuesceqiguuskme]["\150\x65\151\x67\x68\x74"] = DecoratorOption::get("{$piuesceqiguuskme}\x5f\x73\151\172\x65\137\x68");
            goto iwciaqcioigqwiys;
            giueuuwusgmgeick:
            
            $wyicceigkekkkwgs[$piuesceqiguuskme]["\167\x69\x64\164\x68"] = DecoratorOption::get("{$piuesceqiguuskme}\137\x73\151\x7a\145\137\167");
            goto eksamuqymmeumqsg;
            awgamseuywgciius:
            qmiouyoeguiqymgi:
            goto cmqocusuososcwqk;
            uyowywywqeagqcuw:
            $wyicceigkekkkwgs[$piuesceqiguuskme]["\146\151\x6c\145"] = $wkcwykowmmmwioqs;
            goto umekgwemiaygomky;
            iiuwcsgwcguceiko:
            
            $wyicceigkekkkwgs[$piuesceqiguuskme]["\x77\x69\144\x74\150"] = intval($additional_image_sizes[$piuesceqiguuskme]["\167\151\144\164\x68"]);
            goto wkycksmmuskouies;
            yqwkgwucqwqyuqmw:
            
            $wyicceigkekkkwgs[$piuesceqiguuskme]["\143\x72\x6f\x70"] = DecoratorOption::get("{$piuesceqiguuskme}\137\x63\x72\x6f\x70");
            goto icckscyoesgiyksu;
            iisgwcgceeygauyk:
            $wyicceigkekkkwgs[$piuesceqiguuskme] = ["\167\x69\144\x74\150" => '', "\x68\x65\151\147\150\164" => '', "\143\x72\x6f\x70" => false];
            goto oqyosskkgcuckmes;
            icckscyoesgiyksu:
            goto uqwsiocauuswgwok;
            goto uyyieiuceauoecyq;
            wkycksmmuskouies:
            aqyimgoegakwgoum:
            goto emucccmcoiwcyioq;
            oqyosskkgcuckmes:
            if (isset($additional_image_sizes[$piuesceqiguuskme]["\x77\151\x64\x74\x68"])) {
                goto eakoykqcmyemgyum;
            }
            goto giueuuwusgmgeick;
            wskcqwywmwmwigce:
            eakoykqcmyemgyum:
            goto iiuwcsgwcguceiko;
            cmqocusuososcwqk:
            
            $wyicceigkekkkwgs[$piuesceqiguuskme]["\150\145\151\x67\x68\164"] = intval($additional_image_sizes[$piuesceqiguuskme]["\150\145\151\147\150\x74"]);
            goto eswgqkmomsiauqqy;
            emucccmcoiwcyioq:
            if (isset($additional_image_sizes[$piuesceqiguuskme]["\150\x65\x69\x67\x68\x74"])) {
                goto qmiouyoeguiqymgi;
            }
            goto yigmeqsygwgioyaa;
            eksamuqymmeumqsg:
            goto aqyimgoegakwgoum;
            goto wskcqwywmwmwigce;
            egauqkuumkisssaa:
        }
        goto wkumckmusackacmi;
        aikuwguwuiekouoo:
        $additional_image_sizes = wp_get_additional_image_sizes();
        goto wicguyksogckqums;
        ccymqyyaikauqaiq:
        if ($qaiwqwwemmyyqosy) {
            goto weocosykwsaimaks;
        }
        goto ygaggwgwiceegasy;
        wayyiemaccqkmqeg:
        $kuguwoaesuqsqysu["\163\151\172\145\x73"] = $wyicceigkekkkwgs;
        goto yygqgeukeuaciewa;
        wicguyksogckqums:
        $svg_path = ManipulateAttachment::ckoygqywcuqasqea($attachment_id);
        goto kyaysckiwskgogci;
        iwawqgcgskysqyaa:
    }
    
    public function wqyqisgcyewimoai($icwicymcioeyeyek, $post)
    {
        goto caocoiecwueosoig;
        musiyggyqaiwwouu:
        return $icwicymcioeyeyek;
        goto imymswaceomsasks;
        caocoiecwueosoig:
        
        if (!is_wp_error($icwicymcioeyeyek)) {
            goto agaomyyqaaswykui;
        }
        goto qsuyqoeocsmkomwy;
        qsuyqoeocsmkomwy:
        $icwicymcioeyeyek = ManipulateAttachment::smiqaaaecemiwugu($post, ManipulateAttachment::ckoygqywcuqasqea($post));
        goto ioyyiaguqyiaeaqs;
        ioyyiaguqyiaeaqs:
        ManipulateAttachment::_updateMeta($post, $icwicymcioeyeyek);
        goto ywyqmwuswkcoyqsy;
        ywyqmwuswkcoyqsy:
        agaomyyqaaswykui:
        goto musiyggyqaiwwouu;
        imymswaceomsasks:
    }
    
    protected function qaeakmimoqkugagk($waoisqguweoociwe)
    {
        goto cmsyegseqcwmyycy;
        gymqkieyuiawacwi:
        $qeswwaqqsyymqawg = intval($wyicceigkekkkwgs[2]);
        goto eskcocwimiseewmu;
        scymgswieuyiqwmm:
        if (!isset($wyicceigkekkkwgs[2], $wyicceigkekkkwgs[3])) {
            goto sacmqsciuaucgaww;
        }
        goto gymqkieyuiawacwi;
        cmsyegseqcwmyycy:
        $waoisqguweoociwe = @simplexml_load_file($waoisqguweoociwe);
        goto wiiaiqiomosmyuwq;
        wmismwqqqagsomky:
        wiomewyyumkmwsum:
        goto gkwyuumqeuikwiku;
        uieeaeqciogamoqe:
        return false;
        goto wmskawmisgksegwe;
        mekaesaeskqmgqii:
        uacekkwiaagmuieg:
        goto kuigwocyaagakags;
        kemiasqyoocyqqgm:
        return ["\167\x69\x64\x74\x68" => $qeswwaqqsyymqawg, "\x68\145\151\147\x68\x74" => $cswemwoyesycwkuq, "\157\162\151\x65\x6e\x74\141\x74\x69\x6f\x6e" => $qeswwaqqsyymqawg > $cswemwoyesycwkuq ? "\154\141\156\x64\x73\x63\x61\160\x65" : "\x70\x6f\x72\164\162\141\x69\x74"];
        goto esgykeaqimuiewgw;
        auoaywowugkacsia:
        seiysueoskimiaam:
        goto wgkeakuiaqswmkes;
        gkwyuumqeuikwiku:
        goto seiysueoskimiaam;
        goto mekaesaeskqmgqii;
        sccaumocseyiqsue:
        $cswemwoyesycwkuq = 0;
        goto cmmoyuuegqguakga;
        usasekcgsyyqymgy:
        mqywccygymoeaoym:
        goto uqggmkmmysmeqkmy;
        wgkeakuiaqswmkes:
        gawswamyawcmsmei:
        goto kemiasqyoocyqqgm;
        cmmoyuuegqguakga:
        if (!$waoisqguweoociwe) {
            goto gawswamyawcmsmei;
        }
        goto ooccckeeomycucao;
        kuigwocyaagakags:
        $qeswwaqqsyymqawg = intval($siquossayskcwkea->width);
        goto miiaowmiyoemouke;
        wmskawmisgksegwe:
        goto wiomewyyumkmwsum;
        goto usasekcgsyyqymgy;
        iymwycosumimggmu:
        sacmqsciuaucgaww:
        goto wmismwqqqagsomky;
        eskcocwimiseewmu:
        $cswemwoyesycwkuq = intval($wyicceigkekkkwgs[3]);
        goto iymwycosumimggmu;
        uqggmkmmysmeqkmy:
        $wyicceigkekkkwgs = explode("\x20", $siquossayskcwkea->viewBox);
        goto scymgswieuyiqwmm;
        miiaowmiyoemouke:
        $cswemwoyesycwkuq = intval($siquossayskcwkea->height);
        goto auoaywowugkacsia;
        cwmkgosooecsywcm:
        if (isset($siquossayskcwkea->width, $siquossayskcwkea->height)) {
            goto uacekkwiaagmuieg;
        }
        goto ooqwuoiqmiswgkyu;
        wiiaiqiomosmyuwq:
        $qeswwaqqsyymqawg = 0;
        goto sccaumocseyiqsue;
        ooqwuoiqmiswgkyu:
        if (isset($siquossayskcwkea->viewBox)) {
            goto mqywccygymoeaoym;
        }
        goto uieeaeqciogamoqe;
        ooccckeeomycucao:
        $siquossayskcwkea = $waoisqguweoociwe->attributes();
        goto cwmkgosooecsywcm;
        esgykeaqimuiewgw:
    }
    
    public function umacyowesakeiewk($wisgiwskwawciiee, $aiooqyausygaasqm, $oiegiwogmwmawkeo)
    {
        goto qsisgmaawywioogk;
        eiwcgwomusuokygg:
        bweusaooumwyemuu:
        goto oeyyasumsgwocquw;
        amemoiimosckqems:
        if (!$qaiwqwwemmyyqosy) {
            goto oueaeyqiqiakqaek;
        }
        goto yqimmomioeoaqwkq;
        ggccmgysseeqcaga:
        $qaiwqwwemmyyqosy = $this->qaeakmimoqkugagk(ManipulateAttachment::ckoygqywcuqasqea($aiooqyausygaasqm));
        goto uiuiuicckaiksqyc;
        kosccieswmaoeoyk:
        $qeswwaqqsyymqawg = ManipulateArray::get($qaiwqwwemmyyqosy, "\x77\151\144\164\x68");
        goto yumiokuikmkkwcwg;
        qwkyuqqgkugqggqo:
        $qeswwaqqsyymqawg = 100;
        goto cacaysyqsqaauawm;
        yqimmomioeoaqwkq:
        $cswemwoyesycwkuq = ManipulateArray::get($qaiwqwwemmyyqosy, "\x68\x65\151\147\x68\x74");
        goto kosccieswmaoeoyk;
        kqgqymcemksgmsaa:
        if ($qaiwqwwemmyyqosy) {
            goto eymgmkoqgoqicgsi;
        }
        goto ggccmgysseeqcaga;
        iosymaiumakyyaos:
        $qaiwqwwemmyyqosy = ManipulateAttachment::iuwsgyqakicakuoq($oiegiwogmwmawkeo);
        goto kqgqymcemksgmsaa;
        isgceyiuweaueqeu:
        $wisgiwskwawciiee["\150\x65\x69\147\150\164"] = 80;
        goto guqwqwceceswwucy;
        oeyyasumsgwocquw:
        return $wisgiwskwawciiee;
        goto oqmeeqioiooguikk;
        cacaysyqsqaauawm:
        $cswemwoyesycwkuq = 100;
        goto iosymaiumakyyaos;
        yksgcagiyukouics:
        
        goto eiwcgwomusuokygg;
        yumiokuikmkkwcwg:
        oueaeyqiqiakqaek:
        goto isgceyiuweaueqeu;
        guqwqwceceswwucy:
        
        $wisgiwskwawciiee["\167\x69\144\164\x68"] = 80;
        goto yksgcagiyukouics;
        qsisgmaawywioogk:
        if (!$this->iigcaickwcykouca($aiooqyausygaasqm)) {
            goto bweusaooumwyemuu;
        }
        goto qwkyuqqgkugqggqo;
        uiuiuicckaiksqyc:
        eymgmkoqgoqicgsi:
        goto amemoiimosckqems;
        oqmeeqioiooguikk:
    }
    
    public function iigcaickwcykouca($aiooqyausygaasqm) : bool
    {
        return self::SVG_MIME_TYPE === ManipulateAttachment::ikocqgeqiykwwyqs($aiooqyausygaasqm);
    }
}
