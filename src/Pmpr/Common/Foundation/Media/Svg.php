<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b499786a1b             |
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
    const SVG_MIME_TYPE = "\151\155\141\147\145\x2f\163\166\147\53\170\155\154";
    
    public ?Sanitizer $sanitizer = null;
    public function __construct()
    {
        goto ksuoesmcewiqukgy;
        aoqqweiisiaekqsk:
        $this->sanitizer = $umcwwewscqegoqoe;
        goto kwkeiomeuququaoy;
        ksuoesmcewiqukgy:
        $umcwwewscqegoqoe = new Sanitizer();
        goto cuacsemcmuyaokge;
        cuacsemcmuyaokge:
        
        $umcwwewscqegoqoe->minify(true);
        goto aoqqweiisiaekqsk;
        kwkeiomeuququaoy:
        parent::__construct();
        goto giqysmgscwwqgmqe;
        giqysmgscwwqgmqe:
    }
    public function wigskegsqequoeks()
    {
        $this->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\141\x64\x64\137\x74\167\151\x67\137\x66\165\156\143\x74\151\x6f\156\x73"), [$this, "\145\x75\x65\x65\171\x65\155\x67\153\x65\171\x63\145\151\x73\x61"])->qcsmikeggeemccuu("\x67\145\x74\x5f\x69\x6d\x61\147\145\137\x74\141\147", [$this, "\143\147\x69\x61\x6b\x61\143\x63\153\x6d\143\141\x71\x67\x69\x6b"], 10, 6);
        parent::wigskegsqequoeks();
    }
    public function kgquecmsgcouyaya()
    {
        $this->cecaguuoecmccuse("\165\x70\x6c\157\x61\144\137\155\151\155\x65\x73", [$this, "\147\x67\x77\143\x65\161\x77\x65\x65\x61\141\143\167\x6f\x69\x73"])->cecaguuoecmccuse("\167\x70\137\150\x61\156\x64\x6c\145\x5f\165\160\154\x6f\x61\x64\137\x70\x72\145\x66\151\154\164\145\x72", [$this, "\x6d\145\x6b\145\165\x77\x69\145\x63\151\x71\x79\x6d\141\x69\x6f"])->cecaguuoecmccuse("\x73\166\147\137\x61\164\164\162\151\142\x75\164\x65\163", [$this, "\x6d\161\x79\141\x63\x77\141\x61\x6f\x63\x67\143\163\171\x61\x67"], 999)->cecaguuoecmccuse("\167\x70\137\143\150\x65\143\x6b\137\146\x69\154\x65\164\171\160\145\x5f\141\x6e\144\137\145\x78\x74", [$this, "\x61\x6b\x69\157\157\x79\x61\x75\153\x67\x79\165\x6d\x63\155\x75"], 75, 4)->cecaguuoecmccuse("\141\x64\x6d\x69\156\x5f\160\157\163\164\x5f\x74\x68\165\155\x62\x6e\141\x69\154\137\x68\x74\155\x6c", [$this, "\157\x75\x61\165\x79\x79\x61\x6b\145\141\x75\141\x71\161\151\x6b"], 10, 3)->cecaguuoecmccuse("\x77\x70\x5f\x67\145\x74\x5f\x61\164\x74\141\143\150\155\145\156\x74\137\x6d\145\x74\x61\x64\141\164\x61", [$this, "\x77\161\x79\161\151\x73\x67\x63\171\145\x77\151\155\157\x61\151"], 10, 2)->cecaguuoecmccuse("\167\x70\137\x70\x72\145\160\141\162\x65\x5f\141\x74\x74\x61\x63\150\x6d\145\156\164\x5f\146\157\x72\137\x6a\163", [$this, "\163\x6b\153\147\167\167\x6b\x79\x6d\157\157\161\x71\x61\x77\155"], 10, 2)->cecaguuoecmccuse("\167\x70\x5f\147\x65\156\145\162\141\164\145\x5f\141\x74\x74\141\x63\150\155\x65\x6e\164\x5f\x6d\145\x74\x61\144\x61\164\x61", [$this, "\x79\x77\x67\165\x61\x6d\141\151\x69\x79\141\x67\141\x77\x73\x63"], 10, 2)->cecaguuoecmccuse("\x69\155\141\x67\145\x5f\x75\x70\154\x6f\141\144\x5f\x66\x69\x6c\x74\145\162\x5f\145\170\143\x6c\165\x64\145", [$this, "\161\161\153\157\167\163\143\x61\157\x6f\165\143\x6b\145\147\157"], 10, 2)->cecaguuoecmccuse($this->ygyygikyocoymgaw("\141\x74\164\x61\x63\x68\x6d\145\x6e\x74\137\x69\x73\x5f\163\166\147"), [$this, "\145\x67\165\x6f\153\167\x71\141\155\x63\143\x77\143\161\x6f\x6d"], 10, 2)->cecaguuoecmccuse("\167\x70\137\147\x65\164\137\141\x74\x74\x61\x63\x68\155\x65\x6e\x74\x5f\x69\x6d\141\147\x65\x5f\x61\164\164\162\x69\x62\165\x74\145\163", [$this, "\171\x63\x79\x71\153\x67\143\151\x67\147\x6f\141\x67\x61\x67\147"], 10, 3);
        parent::kgquecmsgcouyaya();
    }
    
    public function ycyqkgciggoagagg($wisgiwskwawciiee, $aiooqyausygaasqm, $oiegiwogmwmawkeo)
    {
        $wisgiwskwawciiee = $this->wmiseqaieauskweu($wisgiwskwawciiee, $aiooqyausygaasqm);
        
        return $wisgiwskwawciiee;
    }
    
    public function mqyacwaaocgcsyag($siquossayskcwkea = [])
    {
        goto guoqssciqoegywsg;
        skegiiomcggeymuw:
        $siquossayskcwkea["\150\145\151\147\x68\x74"] = 100;
        goto oqumomyawuuomquy;
        iiogyckwmaouswqy:
        return $siquossayskcwkea;
        goto qyckwskcewqioqyk;
        guoqssciqoegywsg:
        $siquossayskcwkea = $this->kguoyqackakgysoy($siquossayskcwkea);
        goto gqcosoeyaqmyccca;
        oqumomyawuuomquy:
        $siquossayskcwkea["\167\151\x64\x74\150"] = 100;
        goto smmagsweysscecce;
        gqcosoeyaqmyccca:
        if (!(!isset($siquossayskcwkea["\x68\x65\151\147\150\164"]) && !isset($siquossayskcwkea["\x77\x69\144\164\150"]))) {
            goto qaeqsckgkimiuwca;
        }
        goto skegiiomcggeymuw;
        smmagsweysscecce:
        qaeqsckgkimiuwca:
        goto iiogyckwmaouswqy;
        qyckwskcewqioqyk:
    }
    
    public function kguoyqackakgysoy($siquossayskcwkea, $uuossqmuccwyiemo = 16)
    {
        goto yikaqawiqaokyqgw;
        coawukgoisakmosc:
        $wyicceigkekkkwgs = (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\163\166\147\x5f\145\x6c\145\x6d\145\x6e\164\137\x63\154\141\x73\163\x5f\162\141\x74\151\157\x6e\137\x63\x6f\x6e\x76\x65\x72\164\x65\x72"), []);
        goto eqiqgwqscsswkmwk;
        emoaoyuqmmymmwkq:
        foreach ($wyicceigkekkkwgs as $oiegiwogmwmawkeo => $eqgoocgaqwqcimie) {
            goto oayiqwmaaukkuimy;
            ucoikisgieeseyqo:
            $siquossayskcwkea["\167\151\144\x74\x68"] = intval($eqgoocgaqwqcimie[0] * $uuossqmuccwyiemo);
            goto gmmaicwkwqiywwyc;
            kgogceiykkokkgeg:
            $eqgoocgaqwqcimie *= $uuossqmuccwyiemo;
            goto gkoasaqwwqsgwqgo;
            eiwkyioqeaaemqsa:
            if (is_array($eqgoocgaqwqcimie)) {
                goto ecmiggsmgmeaaqug;
            }
            goto kgogceiykkokkgeg;
            goouowwycoakigim:
            qaoooeioqwiiceyq:
            goto aasuycoysaucuaaq;
            okwsycyoqycgwaco:
            $siquossayskcwkea["\150\145\x69\147\x68\164"] = intval($eqgoocgaqwqcimie);
            goto euemimammkmwkuwk;
            gkoasaqwwqsgwqgo:
            $siquossayskcwkea["\167\151\x64\164\150"] = intval($eqgoocgaqwqcimie);
            goto okwsycyoqycgwaco;
            euemimammkmwkuwk:
            goto qaoooeioqwiiceyq;
            goto isgiyocowwwceaoa;
            isgiyocowwwceaoa:
            ecmiggsmgmeaaqug:
            goto ucoikisgieeseyqo;
            cwccwmggqyeeggwe:
            gcwikewmwkqsugms:
            goto seocecaioucmugky;
            kgeiskysuuasqckq:
            oimegoemmuwwwkyo:
            goto cwccwmggqyeeggwe;
            oayiqwmaaukkuimy:
            if (!(strpos($egkyssmuqcwaciya, $oiegiwogmwmawkeo) !== false)) {
                goto oimegoemmuwwwkyo;
            }
            goto eiwkyioqeaaemqsa;
            aasuycoysaucuaaq:
            goto eagggcysqeeaeose;
            goto kgeiskysuuasqckq;
            gmmaicwkwqiywwyc:
            $siquossayskcwkea["\x68\145\x69\x67\150\164"] = intval($eqgoocgaqwqcimie[1] * $uuossqmuccwyiemo);
            goto goouowwycoakigim;
            seocecaioucmugky:
        }
        goto semoowiyeimkyeuc;
        semoowiyeimkyeuc:
        eagggcysqeeaeose:
        goto qgmegqweacumuccw;
        yikaqawiqaokyqgw:
        $egkyssmuqcwaciya = ManipulateArray::get($siquossayskcwkea, "\x63\154\141\163\x73");
        goto askiamwsewkaqwoi;
        aymkogwsagaggsem:
        if (!(!is_numeric($uuossqmuccwyiemo) || $uuossqmuccwyiemo < 1)) {
            goto wkoqomessckkgeua;
        }
        goto eqggkouoswesgwya;
        qgmegqweacumuccw:
        eeicwkoeaqmaoywm:
        goto cumoewcksgaqwwoo;
        cumoewcksgaqwwoo:
        iwemkuaseiooqoqg:
        goto kuiomeesyokwsgio;
        kuiomeesyokwsgio:
        return $siquossayskcwkea;
        goto yescggaseyimocqu;
        icoooiwmiusyeaes:
        wkoqomessckkgeua:
        goto emoaoyuqmmymmwkq;
        eqiqgwqscsswkmwk:
        if (!$wyicceigkekkkwgs) {
            goto eeicwkoeaqmaoywm;
        }
        goto aymkogwsagaggsem;
        eqggkouoswesgwya:
        $uuossqmuccwyiemo = 16;
        goto icoooiwmiusyeaes;
        askiamwsewkaqwoi:
        if (!$egkyssmuqcwaciya) {
            goto iwemkuaseiooqoqg;
        }
        goto coawukgoisakmosc;
        yescggaseyimocqu:
    }
    
    public function qqkowscaoouckego($couiucmsqaieciue = [])
    {
        $couiucmsqaieciue[] = self::SVG_MIME_TYPE;
        return $couiucmsqaieciue;
    }
    
    public function eueeyemgkeyceisa($eyoesceegakeygsi)
    {
        $eyoesceegakeygsi->kmmegqceukkkawme("\151\x73\x5f\x73\x76\147", function ($aiooqyausygaasqm) {
            return $this->iigcaickwcykouca($aiooqyausygaasqm);
        });
    }
    
    public function eguokwqamccwcqom($iigcaickwcykouca, $post)
    {
        return $this->iigcaickwcykouca($post);
    }
    
    public function ggwceqweeaacwois($yawwowoqosismgyq)
    {
        goto ywgyaqcqgosmigae;
        msaegiggioiykouc:
        return $yawwowoqosismgyq;
        goto uymqoeqgwwkeiuok;
        ywgyaqcqgosmigae:
        $yawwowoqosismgyq["\163\x76\147"] = self::SVG_MIME_TYPE;
        goto gsoyaqsaauaokukc;
        gsoyaqsaauaokukc:
        $yawwowoqosismgyq["\163\166\147\172"] = self::SVG_MIME_TYPE;
        goto msaegiggioiykouc;
        uymqoeqgwwkeiuok:
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
        goto mywueecygymayigq;
        mywueecygymayigq:
        if (!$this->iigcaickwcykouca($aokagokqyuysuksm)) {
            goto akcqkwesmcuumqqc;
        }
        goto oeaskyqueyagqcmc;
        ckcesgcceqqqieem:
        akcqkwesmcuumqqc:
        goto mmqsgsuycqioemgo;
        mmqsgsuycqioemgo:
        return $wwgucssaecqekuek;
        goto qqyeogaouscuaikw;
        oeaskyqueyagqcmc:
        ManipulateArray::unset($wwgucssaecqekuek, ["\x73\x72\143\163\145\164", "\x73\151\172\x65\x73"]);
        goto ckcesgcceqqqieem;
        qqyeogaouscuaikw:
    }
    
    public function uwmcsgckegoamwas($nsmgceoqaqogqmuw, $aokagokqyuysuksm)
    {
        goto ommmymgkaageowym;
        oesqomwsgwmckgsq:
        try {
            goto swkmkgmucceyweie;
            aooeykwscmqgouay:
            $qogsmwakwacwqogk = ManipulateAttachment::ygwimyogyaqgumam($aokagokqyuysuksm);
            goto mcccguiaquiickwq;
            eiiqicyywgugksuc:
            $aqykuigiuwmmcieu = DOMCrawler::igmaewykumgwoaoy($ewgwqamkygiqaawc, ["\x73\x76\x67" => ["\x63\154\x61\163\163" => $egkyssmuqcwaciya]]);
            goto sugmgeiemuygeoce;
            quwwquywcuyiiweo:
            $ewgwqamkygiqaawc = preg_replace("\x2f\74\x5c\77\170\155\x6c\56\x2a\77\134\77\x3e\57", '', $ewgwqamkygiqaawc);
            goto eiiqicyywgugksuc;
            mcccguiaquiickwq:
            $ewgwqamkygiqaawc = $this->kcciqwskewsuaemk()->souwykwwmyygqyqi($qogsmwakwacwqogk);
            goto quwwquywcuyiiweo;
            swkmkgmucceyweie:
            $egkyssmuqcwaciya = DOMCrawler::waecsyqmwascmqoa($nsmgceoqaqogqmuw, "\151\x6d\147", "\x63\154\x61\x73\163");
            goto aooeykwscmqgouay;
            sugmgeiemuygeoce:
        } catch (Exception $wgaoewqkwgomoaai) {
            $aqykuigiuwmmcieu = $nsmgceoqaqogqmuw;
        }
        goto wswmegcumomiwaqo;
        wsouygqoeyuksock:
        return $aqykuigiuwmmcieu;
        goto qaugkmgccegqkasu;
        aseoykguwasmaggs:
        if (!($nsmgceoqaqogqmuw && $this->iigcaickwcykouca($aokagokqyuysuksm))) {
            goto soeggysyusqoiwwg;
        }
        goto oesqomwsgwmckgsq;
        ommmymgkaageowym:
        $aqykuigiuwmmcieu = $nsmgceoqaqogqmuw;
        goto aseoykguwasmaggs;
        wswmegcumomiwaqo:
        soeggysyusqoiwwg:
        goto wsouygqoeyuksock;
        qaugkmgccegqkasu:
    }
    
    public function akiooyaukgyumcmu($icwicymcioeyeyek = null, $qogsmwakwacwqogk = null, $wkcwykowmmmwioqs = null, $yawwowoqosismgyq = null)
    {
        goto qssyiieuymmiwicm;
        kuyuwimysoqcmgek:
        if (!(strlen($yucgcsieomwqgwws) < 1)) {
            goto scageqmiwcyqmmmk;
        }
        goto fosuiwomyuwkaisi;
        cgmgikoumekoyyae:
        $icwicymcioeyeyek["\x74\x79\160\145"] = self::SVG_MIME_TYPE;
        goto yigecwqswuowoakm;
        yqewusaguumeiqyq:
        $yucgcsieomwqgwws = strtolower(end($ukequsueuukqgaca));
        goto kwwgmsmuoeysguwq;
        qssyiieuymmiwicm:
        $yucgcsieomwqgwws = isset($icwicymcioeyeyek["\x65\170\x74"]) ? $icwicymcioeyeyek["\145\x78\164"] : '';
        goto kuyuwimysoqcmgek;
        gocwgeomykcekcso:
        return $icwicymcioeyeyek;
        goto kggwiioyiqgskcem;
        fosuiwomyuwkaisi:
        $ukequsueuukqgaca = explode("\x2e", $wkcwykowmmmwioqs);
        goto yqewusaguumeiqyq;
        kwwgmsmuoeysguwq:
        scageqmiwcyqmmmk:
        goto qeaugewkiwmkoaas;
        yigecwqswuowoakm:
        $icwicymcioeyeyek["\145\x78\164"] = $yucgcsieomwqgwws;
        goto aqguswuomiqimcwy;
        aqguswuomiqimcwy:
        swgecgeeeaaakgss:
        goto gocwgeomykcekcso;
        qeaugewkiwmkoaas:
        if (!in_array($yucgcsieomwqgwws, ["\163\x76\x67", "\x73\166\x67\172"])) {
            goto swgecgeeeaaakgss;
        }
        goto cgmgikoumekoyyae;
        kggwiioyiqgskcem:
    }
    
    public function mekeuwieciqymaio($qogsmwakwacwqogk)
    {
        goto oimaymokouuwueum;
        uoqequmkiyukiqgi:
        kyswigcwgusmesqi:
        goto qwikcqiaiumsswow;
        oimaymokouuwueum:
        if (!($qogsmwakwacwqogk["\164\x79\160\145"] === self::SVG_MIME_TYPE)) {
            goto kyswigcwgusmesqi;
        }
        goto cgsawegeqqsecwam;
        cgsawegeqqsecwam:
        if ($this->yiiiqewsseywemqu($qogsmwakwacwqogk["\164\155\160\x5f\156\x61\155\x65"])) {
            goto emwggqiqcmmqeawy;
        }
        goto eucsyaygqqcqamus;
        qwikcqiaiumsswow:
        return $qogsmwakwacwqogk;
        goto ukggweysgiiygqsa;
        eucsyaygqqcqamus:
        $qogsmwakwacwqogk["\x65\x72\162\157\x72"] = __("\x53\x6f\x72\x72\171\x2c\40\164\150\x69\163\40\146\151\x6c\x65\x20\143\x6f\x75\x6c\144\x6e\x27\164\40\142\145\40\x73\141\x6e\x69\x74\151\x7a\x65\x64\x20\163\157\40\x66\157\x72\40\x73\145\x63\x75\162\x69\x74\171\40\x72\x65\x61\163\157\156\x73\40\x77\141\x73\156\47\164\40\165\160\154\x6f\x61\x64\x65\x64", PR__CMN__FOUNDATION);
        goto iaqwisciugaosygy;
        iaqwisciugaosygy:
        emwggqiqcmmqeawy:
        goto uoqequmkiyukiqgi;
        ukggweysgiiygqsa:
    }
    
    public function skkgwwkymooqqawm($keccaugmemegoimu, $aiooqyausygaasqm) : array
    {
        goto ysmessckmysogeua;
        qicekkeggigkwqeu:
        $keccaugmemegoimu["\163\151\172\x65\x73"] = $wyicceigkekkkwgs;
        goto moyqaggmqqimwusm;
        sieccokukwgmuggw:
        $possible_sizes = $this->sscegwueamckwmcy("\151\x6d\141\147\x65\x5f\163\151\172\x65\137\x6e\x61\155\x65\163\x5f\143\x68\157\x6f\163\x65", ["\146\x75\x6c\x6c" => __("\x46\165\x6c\154\x20\123\x69\x7a\145", PR__CMN__FOUNDATION), "\164\x68\165\155\142\x6e\x61\x69\154" => __("\x54\x68\x75\155\x62\x6e\x61\151\x6c", PR__CMN__FOUNDATION), "\x6d\x65\x64\151\x75\155" => __("\x4d\145\144\151\x75\x6d", PR__CMN__FOUNDATION), "\154\x61\162\147\145" => __("\114\x61\162\147\145", PR__CMN__FOUNDATION)]);
        goto yqckgyeeuyayosww;
        ysmessckmysogeua:
        if (!($keccaugmemegoimu["\155\151\155\145"] == self::SVG_MIME_TYPE)) {
            goto kkscsmuyumawosyc;
        }
        goto giiqogwyoikiiqyi;
        egwuecigeyuooiam:
        iekecmawqyigmqcg:
        goto sieccokukwgmuggw;
        qmsyaycokgmmwycs:
        foreach ($possible_sizes as $oiegiwogmwmawkeo => $pkyyagewkiyckmwy) {
            goto cocwomcoymcaqgky;
            ukygqcaqcaqqmyew:
            $default_width = 2000;
            goto ymiosikicyqkaiaa;
            wqgecqaciyakecys:
            $wyicceigkekkkwgs[$oiegiwogmwmawkeo] = ["\150\145\x69\x67\x68\x74" => DecoratorOption::get("{$oiegiwogmwmawkeo}\137\163\151\x7a\x65\137\x77", $default_height), "\x77\x69\x64\164\150" => DecoratorOption::get("{$oiegiwogmwmawkeo}\137\x73\151\172\145\137\x68", $default_width), "\165\162\x6c" => $keccaugmemegoimu["\x75\x72\x6c"], "\x6f\162\x69\145\x6e\x74\141\164\151\157\156" => "\x70\x6f\x72\x74\x72\141\151\164"];
            goto wqmgwcsuccoweocq;
            wqmgwcsuccoweocq:
            iuiawwoouuwwiqca:
            goto oyeswuecyaiiawyg;
            mggyiwyuuiwswaks:
            $default_width = $qaiwqwwemmyyqosy["\167\151\144\x74\x68"];
            goto yemwekyegaywgoug;
            cocwomcoymcaqgky:
            $default_height = 2000;
            goto ukygqcaqcaqqmyew;
            yemwekyegaywgoug:
            oeeakgukqusiqswc:
            goto wqgecqaciyakecys;
            ymiosikicyqkaiaa:
            if (!("\146\165\154\x6c" === $oiegiwogmwmawkeo && $qaiwqwwemmyyqosy)) {
                goto oeeakgukqusiqswc;
            }
            goto moeeimaaoaycycmi;
            moeeimaaoaycycmi:
            $default_height = $qaiwqwwemmyyqosy["\x68\145\x69\147\x68\164"];
            goto mggyiwyuuiwswaks;
            oyeswuecyaiiawyg:
        }
        goto geqakgsumkyosuca;
        yqckgyeeuyayosww:
        $wyicceigkekkkwgs = [];
        goto qmsyaycokgmmwycs;
        iqiwimyamykmuiwo:
        if (!$qaiwqwwemmyyqosy) {
            goto iekecmawqyigmqcg;
        }
        goto egyuciuossumacuy;
        geqakgsumkyosuca:
        wsawmoiaemkggocs:
        goto qicekkeggigkwqeu;
        egyuciuossumacuy:
        $keccaugmemegoimu = array_merge($keccaugmemegoimu, $qaiwqwwemmyyqosy);
        goto egwuecigeyuooiam;
        kawgkswoygkmgmao:
        kkscsmuyumawosyc:
        goto suewugkisoommmgy;
        suewugkisoommmgy:
        return $keccaugmemegoimu;
        goto tsywwmwawwgcwmuc;
        moyqaggmqqimwusm:
        $keccaugmemegoimu["\151\143\x6f\156"] = $keccaugmemegoimu["\x75\162\x6c"];
        goto kawgkswoygkmgmao;
        giiqogwyoikiiqyi:
        $qaiwqwwemmyyqosy = $this->qaeakmimoqkugagk(ManipulateAttachment::ckoygqywcuqasqea($aiooqyausygaasqm));
        goto iqiwimyamykmuiwo;
        tsywwmwawwgcwmuc:
    }
    
    protected function yiiiqewsseywemqu($qogsmwakwacwqogk)
    {
        goto icqaiqyewuyegkeq;
        eakoykqcmyemgyum:
        ieauiumamygiuckc:
        goto aqyimgoegakwgoum;
        qmiouyoeguiqymgi:
        $qawsmigsyysqwmeq = gzencode($qawsmigsyysqwmeq);
        goto noswwaawyacomwyo;
        ogwaiqiccywqqiwk:
        return false;
        goto wsomqsmeououqiwu;
        noswwaawyacomwyo:
        eookussqeicycoio:
        goto wcoekawkkswkgamc;
        weocosykwsaimaks:
        
        $qawsmigsyysqwmeq = $this->sanitizer->sanitize($yeueggiecgqcswqm);
        goto gmywmsmiayimqygy;
        wcoekawkkswkgamc:
        return $this->kcciqwskewsuaemk()->kwsmkgyoyaqecwuu($qogsmwakwacwqogk, $qawsmigsyysqwmeq);
        goto uqwsiocauuswgwok;
        wsomqsmeououqiwu:
        qucoecmmmacqooek:
        goto eouugaqkgamwmgmo;
        eouugaqkgamwmgmo:
        qeggwmykewcoieic:
        goto weocosykwsaimaks;
        icqaiqyewuyegkeq:
        $yeueggiecgqcswqm = $this->kcciqwskewsuaemk()->souwykwwmyygqyqi($qogsmwakwacwqogk);
        goto dmwmgeswweekqyuw;
        xaiaogcwcaeweoiu:
        
        if (!($yeueggiecgqcswqm === false)) {
            goto qucoecmmmacqooek;
        }
        goto ogwaiqiccywqqiwk;
        moeseousgukmygmy:
        $yeueggiecgqcswqm = gzdecode($yeueggiecgqcswqm);
        goto xaiaogcwcaeweoiu;
        kcaysyweukeimoik:
        return false;
        goto eakoykqcmyemgyum;
        gmywmsmiayimqygy:
        if (!($qawsmigsyysqwmeq === false)) {
            goto ieauiumamygiuckc;
        }
        goto kcaysyweukeimoik;
        aqyimgoegakwgoum:
        
        if (!$yuoaskweqogoasgc) {
            goto eookussqeicycoio;
        }
        goto qmiouyoeguiqymgi;
        dmwmgeswweekqyuw:
        
        if (!($yuoaskweqogoasgc = $this->wsggsqigawogiwky($yeueggiecgqcswqm))) {
            goto qeggwmykewcoieic;
        }
        goto moeseousgukmygmy;
        uqwsiocauuswgwok:
    }
    
    protected function wsggsqigawogiwky($ygwoqcwsaggqoamw)
    {
        goto giueuuwusgmgeick;
        eksamuqymmeumqsg:
        return 0 === strpos($ygwoqcwsaggqoamw, "\37" . "\213" . "\10");
        goto wskcqwywmwmwigce;
        iiuwcsgwcguceiko:
        iisgwcgceeygauyk:
        goto wkycksmmuskouies;
        wskcqwywmwmwigce:
        goto oqyosskkgcuckmes;
        goto iiuwcsgwcguceiko;
        wkycksmmuskouies:
        return 0 === mb_strpos($ygwoqcwsaggqoamw, "\x1f" . "\x8b" . "\x8");
        goto emucccmcoiwcyioq;
        giueuuwusgmgeick:
        if (function_exists("\155\x62\137\x73\164\x72\160\157\163")) {
            goto iisgwcgceeygauyk;
        }
        goto eksamuqymmeumqsg;
        emucccmcoiwcyioq:
        oqyosskkgcuckmes:
        goto yigmeqsygwgioyaa;
        yigmeqsygwgioyaa:
    }
    
    public function oowwkoeekmwwgieu($mcqieaigyeeyaksm, $aiooqyausygaasqm, $oiegiwogmwmawkeo)
    {
        goto cmqocusuososcwqk;
        aesukugmkcsuocwc:
        iwciaqcioigqwiys:
        goto uyowywywqeagqcuw;
        qoysygagyigwsiwm:
        $cswemwoyesycwkuq = false;
        goto yqwkgwucqwqyuqmw;
        cmqocusuososcwqk:
        if (!$this->iigcaickwcykouca($aiooqyausygaasqm)) {
            goto awgamseuywgciius;
        }
        goto eswgqkmomsiauqqy;
        eswgqkmomsiauqqy:
        $gkiuoymeukweiaaw = ManipulateAttachment::iuwsgyqakicakuoq($oiegiwogmwmawkeo);
        goto qoysygagyigwsiwm;
        yqwkgwucqwqyuqmw:
        $qeswwaqqsyymqawg = false;
        goto icckscyoesgiyksu;
        maycimoaceiiuemu:
        $qeswwaqqsyymqawg = ManipulateAttachment::get($gkiuoymeukweiaaw, "\x77\151\x64\x74\150");
        goto aesukugmkcsuocwc;
        uyowywywqeagqcuw:
        
        
        goto umekgwemiaygomky;
        aoewemyqigugysua:
        return $mcqieaigyeeyaksm;
        goto egauqkuumkisssaa;
        umekgwemiaygomky:
        awgamseuywgciius:
        goto aoewemyqigugysua;
        uyyieiuceauoecyq:
        $cswemwoyesycwkuq = ManipulateAttachment::get($gkiuoymeukweiaaw, "\x68\145\151\x67\x68\164");
        goto maycimoaceiiuemu;
        icckscyoesgiyksu:
        if (!$gkiuoymeukweiaaw) {
            goto iwciaqcioigqwiys;
        }
        goto uyyieiuceauoecyq;
        egauqkuumkisssaa:
    }
    
    public function ouauyyakeauaqqik($ewgwqamkygiqaawc, $post_id, $thumbnail_id)
    {
        goto yguicqcomwueokwm;
        aikuwguwuiekouoo:
        $ewgwqamkygiqaawc = DOMCrawler::igmaewykumgwoaoy($ewgwqamkygiqaawc, ["\x69\x6d\x67\x2c\x20\x61" => ["\143\x6c\141\163\163" => "\167\x2d\61\x30\x30"]]);
        goto wicguyksogckqums;
        wicguyksogckqums:
        kqsyuyukgswmwcys:
        goto kyaysckiwskgogci;
        yguicqcomwueokwm:
        if (!$this->iigcaickwcykouca($thumbnail_id)) {
            goto kqsyuyukgswmwcys;
        }
        goto aikuwguwuiekouoo;
        kyaysckiwskgogci:
        return $ewgwqamkygiqaawc;
        goto eageyyymyekskmue;
        eageyyymyekskmue:
    }
    
    public function cgiakacckmcaqgik($nsmgceoqaqogqmuw, $aokagokqyuysuksm, $gkykacccamuwowwc, $meqocwsecsywiiqs, $ioogmuawkgcgmkia, $oiegiwogmwmawkeo)
    {
        goto mgocagiwqsgaisyq;
        musiyggyqaiwwouu:
        ccymqyyaikauqaiq:
        goto imymswaceomsasks;
        cmsyegseqcwmyycy:
        cooiowgwqgssuqcw:
        goto wiiaiqiomosmyuwq;
        wiiaiqiomosmyuwq:
        $nsmgceoqaqogqmuw = str_replace("\167\151\x64\x74\x68\75\x22\61\42\40", sprintf("\x77\x69\144\x74\150\75\x22\45\163\x22\40", $qeswwaqqsyymqawg), $nsmgceoqaqogqmuw);
        goto sccaumocseyiqsue;
        iwawqgcgskysqyaa:
        goto csmqeagwuisqiuym;
        goto agaomyyqaaswykui;
        sacmqsciuaucgaww:
        $cswemwoyesycwkuq = $oiegiwogmwmawkeo[1];
        goto mqywccygymoeaoym;
        cwmkgosooecsywcm:
        meyowgukekkkkuqe:
        goto ooqwuoiqmiswgkyu;
        wiomewyyumkmwsum:
        if ($cswemwoyesycwkuq && $qeswwaqqsyymqawg) {
            goto cooiowgwqgssuqcw;
        }
        goto uacekkwiaagmuieg;
        gawswamyawcmsmei:
        goto uyouccoiyogmuwey;
        goto cmsyegseqcwmyycy;
        seiysueoskimiaam:
        $nsmgceoqaqogqmuw = str_replace("\x68\145\x69\x67\150\164\x3d\x22\x31\42\x20", '', $nsmgceoqaqogqmuw);
        goto gawswamyawcmsmei;
        imymswaceomsasks:
        $qeswwaqqsyymqawg = $oiegiwogmwmawkeo[0];
        goto sacmqsciuaucgaww;
        wayyiemaccqkmqeg:
        if ("\146\x75\x6c\x6c" == $oiegiwogmwmawkeo && ($qaiwqwwemmyyqosy = $this->qaeakmimoqkugagk(ManipulateAttachment::ckoygqywcuqasqea($aokagokqyuysuksm)))) {
            goto qkycyqgwwoiuaomq;
        }
        goto yygqgeukeuaciewa;
        agaomyyqaaswykui:
        qkycyqgwwoiuaomq:
        goto caocoiecwueosoig;
        ooccckeeomycucao:
        $nsmgceoqaqogqmuw = str_replace("\57\x3e", "\x20\x72\x6f\154\x65\x3d\x22\x69\155\x67\x22\x20\x2f\x3e", $nsmgceoqaqogqmuw);
        goto cwmkgosooecsywcm;
        wkumckmusackacmi:
        if (is_array($oiegiwogmwmawkeo)) {
            goto ccymqyyaikauqaiq;
        }
        goto wayyiemaccqkmqeg;
        kysaqkaiksosyegu:
        $cswemwoyesycwkuq = DecoratorOption::get("{$oiegiwogmwmawkeo}\137\x73\151\172\145\x5f\150", false);
        goto iwawqgcgskysqyaa;
        cmmoyuuegqguakga:
        uyouccoiyogmuwey:
        goto ooccckeeomycucao;
        qsuyqoeocsmkomwy:
        $cswemwoyesycwkuq = $qaiwqwwemmyyqosy["\150\x65\151\147\150\164"];
        goto ioyyiaguqyiaeaqs;
        mqywccygymoeaoym:
        ygaggwgwiceegasy:
        goto wiomewyyumkmwsum;
        ioyyiaguqyiaeaqs:
        csmqeagwuisqiuym:
        goto ywyqmwuswkcoyqsy;
        ooqwuoiqmiswgkyu:
        return $nsmgceoqaqogqmuw;
        goto uieeaeqciogamoqe;
        uacekkwiaagmuieg:
        $nsmgceoqaqogqmuw = str_replace("\167\x69\x64\164\x68\x3d\42\61\x22\x20", '', $nsmgceoqaqogqmuw);
        goto seiysueoskimiaam;
        sccaumocseyiqsue:
        $nsmgceoqaqogqmuw = str_replace("\150\x65\151\147\x68\x74\x3d\x22\x31\x22\x20", sprintf("\x68\145\151\147\150\164\75\42\45\163\42\40", $cswemwoyesycwkuq), $nsmgceoqaqogqmuw);
        goto cmmoyuuegqguakga;
        yygqgeukeuaciewa:
        $qeswwaqqsyymqawg = DecoratorOption::get("{$oiegiwogmwmawkeo}\x5f\x73\x69\x7a\145\x5f\167", false);
        goto kysaqkaiksosyegu;
        mgocagiwqsgaisyq:
        if (!$this->iigcaickwcykouca($aokagokqyuysuksm)) {
            goto meyowgukekkkkuqe;
        }
        goto wkumckmusackacmi;
        caocoiecwueosoig:
        $qeswwaqqsyymqawg = $qaiwqwwemmyyqosy["\x77\151\144\x74\150"];
        goto qsuyqoeocsmkomwy;
        ywyqmwuswkcoyqsy:
        goto ygaggwgwiceegasy;
        goto musiyggyqaiwwouu;
        uieeaeqciogamoqe:
    }
    
    public function ywguamaiiyagawsc($kuguwoaesuqsqysu, $attachment_id)
    {
        goto eiwcgwomusuokygg;
        uommmgequgiiykci:
        foreach (get_intermediate_image_sizes() as $piuesceqiguuskme) {
            goto mekaesaeskqmgqii;
            esgykeaqimuiewgw:
            gymqkieyuiawacwi:
            goto eymgmkoqgoqicgsi;
            kemiasqyoocyqqgm:
            
            $wyicceigkekkkwgs[$piuesceqiguuskme]["\x77\x69\144\x74\150"] = intval($additional_image_sizes[$piuesceqiguuskme]["\167\151\x64\164\150"]);
            goto esgykeaqimuiewgw;
            oueaeyqiqiakqaek:
            
            $wyicceigkekkkwgs[$piuesceqiguuskme]["\150\145\x69\x67\150\x74"] = DecoratorOption::get("{$piuesceqiguuskme}\137\163\x69\172\x65\x5f\150");
            goto bweusaooumwyemuu;
            amemoiimosckqems:
            
            $wyicceigkekkkwgs[$piuesceqiguuskme]["\143\162\157\160"] = intval($additional_image_sizes[$piuesceqiguuskme]["\x63\162\x6f\160"]);
            goto yqimmomioeoaqwkq;
            kuigwocyaagakags:
            if (isset($additional_image_sizes[$piuesceqiguuskme]["\x77\151\x64\x74\150"])) {
                goto scymgswieuyiqwmm;
            }
            goto miiaowmiyoemouke;
            uiuiuicckaiksqyc:
            wmismwqqqagsomky:
            goto amemoiimosckqems;
            mekaesaeskqmgqii:
            $wyicceigkekkkwgs[$piuesceqiguuskme] = ["\x77\x69\144\x74\150" => '', "\150\145\151\x67\150\x74" => '', "\143\x72\157\160" => false];
            goto kuigwocyaagakags;
            kosccieswmaoeoyk:
            $wyicceigkekkkwgs[$piuesceqiguuskme]["\x66\151\154\145"] = $wkcwykowmmmwioqs;
            goto yumiokuikmkkwcwg;
            wgkeakuiaqswmkes:
            scymgswieuyiqwmm:
            goto kemiasqyoocyqqgm;
            yqimmomioeoaqwkq:
            gkwyuumqeuikwiku:
            goto kosccieswmaoeoyk;
            kqgqymcemksgmsaa:
            
            $wyicceigkekkkwgs[$piuesceqiguuskme]["\143\162\x6f\x70"] = DecoratorOption::get("{$piuesceqiguuskme}\x5f\x63\162\157\160");
            goto ggccmgysseeqcaga;
            cacaysyqsqaauawm:
            iymwycosumimggmu:
            goto iosymaiumakyyaos;
            yumiokuikmkkwcwg:
            $wyicceigkekkkwgs[$piuesceqiguuskme]["\155\151\x6d\145\55\x74\171\160\x65"] = ManipulateAttachment::ikocqgeqiykwwyqs($attachment_id);
            goto isgceyiuweaueqeu;
            miiaowmiyoemouke:
            
            $wyicceigkekkkwgs[$piuesceqiguuskme]["\167\x69\x64\x74\150"] = DecoratorOption::get("{$piuesceqiguuskme}\x5f\x73\151\x7a\145\x5f\167");
            goto auoaywowugkacsia;
            bweusaooumwyemuu:
            goto iymwycosumimggmu;
            goto qsisgmaawywioogk;
            isgceyiuweaueqeu:
            uqggmkmmysmeqkmy:
            goto guqwqwceceswwucy;
            auoaywowugkacsia:
            goto gymqkieyuiawacwi;
            goto wgkeakuiaqswmkes;
            iosymaiumakyyaos:
            if (isset($additional_image_sizes[$piuesceqiguuskme]["\143\x72\x6f\x70"])) {
                goto wmismwqqqagsomky;
            }
            goto kqgqymcemksgmsaa;
            qwkyuqqgkugqggqo:
            
            $wyicceigkekkkwgs[$piuesceqiguuskme]["\x68\x65\151\x67\x68\164"] = intval($additional_image_sizes[$piuesceqiguuskme]["\150\145\x69\147\150\164"]);
            goto cacaysyqsqaauawm;
            ggccmgysseeqcaga:
            goto gkwyuumqeuikwiku;
            goto uiuiuicckaiksqyc;
            eymgmkoqgoqicgsi:
            if (isset($additional_image_sizes[$piuesceqiguuskme]["\150\x65\x69\147\x68\x74"])) {
                goto eskcocwimiseewmu;
            }
            goto oueaeyqiqiakqaek;
            qsisgmaawywioogk:
            eskcocwimiseewmu:
            goto qwkyuqqgkugqggqo;
            guqwqwceceswwucy:
        }
        goto wiouwokmcckqekqy;
        wqaiocgoqsqogmcm:
        return $kuguwoaesuqsqysu;
        goto ccwsuiigukoykcew;
        eiwcgwomusuokygg:
        if (!$this->iigcaickwcykouca($attachment_id)) {
            goto yksgcagiyukouics;
        }
        goto oeyyasumsgwocquw;
        suicqccekqckayec:
        wmskawmisgksegwe:
        goto sqqcaugoikagoykc;
        ksqcmyaawiiiimco:
        $qaiwqwwemmyyqosy = $this->qaeakmimoqkugagk($svg_path);
        goto ysqokomouwswymck;
        oimwgecwwecuugwq:
        $kuguwoaesuqsqysu["\x73\x69\172\x65\163"] = $wyicceigkekkkwgs;
        goto ycyoioowuumgwkuk;
        oqmeeqioiooguikk:
        $svg_path = ManipulateAttachment::ckoygqywcuqasqea($attachment_id);
        goto ggwyamakeyyieeog;
        caammwwkqeeemaok:
        $wkcwykowmmmwioqs = basename($svg_path);
        goto ksqcmyaawiiiimco;
        ssaeeugeycyaaaki:
        
        $relative_path = str_replace($upload_dir["\x62\141\163\x65\144\151\162"], '', $svg_path);
        goto caammwwkqeeemaok;
        ssquocgwsassuike:
        
        $wyicceigkekkkwgs = [];
        goto uommmgequgiiykci;
        ggwyamakeyyieeog:
        $upload_dir = DecoratorFile::oemywwmmmiywiqai();
        goto ssaeeugeycyaaaki;
        ycyoioowuumgwkuk:
        yksgcagiyukouics:
        goto wqaiocgoqsqogmcm;
        ysqokomouwswymck:
        if ($qaiwqwwemmyyqosy) {
            goto wmskawmisgksegwe;
        }
        goto csgqcskywiqwyocw;
        wiouwokmcckqekqy:
        usasekcgsyyqymgy:
        goto oimwgecwwecuugwq;
        csgqcskywiqwyocw:
        return $kuguwoaesuqsqysu;
        goto suicqccekqckayec;
        oeyyasumsgwocquw:
        $additional_image_sizes = wp_get_additional_image_sizes();
        goto oqmeeqioiooguikk;
        sqqcaugoikagoykc:
        $kuguwoaesuqsqysu = ["\167\151\x64\x74\x68" => intval($qaiwqwwemmyyqosy["\x77\151\x64\x74\x68"]), "\150\145\151\x67\150\x74" => intval($qaiwqwwemmyyqosy["\x68\145\x69\x67\150\164"]), "\x66\151\x6c\145" => $relative_path];
        goto ssquocgwsassuike;
        ccwsuiigukoykcew:
    }
    
    public function wqyqisgcyewimoai($icwicymcioeyeyek, $post)
    {
        goto maiaiacekmmwswqe;
        weqkaeeoycmmmkcc:
        return $icwicymcioeyeyek;
        goto gmqmkgkikksymkik;
        mwagkoucauykimsu:
        wkemscqmqyimmqme:
        goto weqkaeeoycmmmkcc;
        maiaiacekmmwswqe:
        
        if (!is_wp_error($icwicymcioeyeyek)) {
            goto wkemscqmqyimmqme;
        }
        goto cymmwkiaogwsmcsu;
        ueaiaeaaaiiuskyi:
        ManipulateAttachment::_updateMeta($post, $icwicymcioeyeyek);
        goto mwagkoucauykimsu;
        cymmwkiaogwsmcsu:
        $icwicymcioeyeyek = ManipulateAttachment::smiqaaaecemiwugu($post, ManipulateAttachment::ckoygqywcuqasqea($post));
        goto ueaiaeaaaiiuskyi;
        gmqmkgkikksymkik:
    }
    
    protected function qaeakmimoqkugagk($waoisqguweoociwe)
    {
        goto qywgeimouqcummco;
        ywagwigaamkacqsm:
        if (isset($siquossayskcwkea->width, $siquossayskcwkea->height)) {
            goto qsamicayummauigq;
        }
        goto eouoyysyekegaigi;
        saimmkcsakcakqww:
        gqsciemssskoqamq:
        goto cmqyiscgeswqsoog;
        wigumuwcsuiaauyw:
        return false;
        goto isoisgaoqmiqeiak;
        ygqwuggqqouywgoq:
        $wyicceigkekkkwgs = explode("\x20", $siquossayskcwkea->viewBox);
        goto yseimcmuaycskkak;
        cmqyiscgeswqsoog:
        kgqyyosqeaqigeuo:
        goto iqyicsuysksymwuw;
        yqocsiwyueakoqoe:
        ocmywgkaoogmcsau:
        goto mewsemcoqiuuwwme;
        yyeowwwqogwoeoyc:
        $siquossayskcwkea = $waoisqguweoociwe->attributes();
        goto ywagwigaamkacqsm;
        iqyicsuysksymwuw:
        goto sgosioakiaeqmyyy;
        goto qeaiigkoomwsgoem;
        qywgeimouqcummco:
        $waoisqguweoociwe = @simplexml_load_file($waoisqguweoociwe);
        goto sgkcewwkiomywgky;
        kommicqseqmaiuss:
        if (!$waoisqguweoociwe) {
            goto ocmywgkaoogmcsau;
        }
        goto yyeowwwqogwoeoyc;
        ikosmomwmyimqaew:
        sgosioakiaeqmyyy:
        goto yqocsiwyueakoqoe;
        mewsemcoqiuuwwme:
        return ["\167\151\x64\164\x68" => $qeswwaqqsyymqawg, "\150\x65\x69\147\x68\x74" => $cswemwoyesycwkuq, "\x6f\x72\x69\145\156\164\x61\x74\x69\x6f\x6e" => $qeswwaqqsyymqawg > $cswemwoyesycwkuq ? "\154\x61\156\144\163\x63\141\x70\145" : "\160\157\x72\x74\x72\x61\x69\164"];
        goto yeemeukcggweaowa;
        ukiagcaimyycouuq:
        gyaiswaqomsiwcwu:
        goto ygqwuggqqouywgoq;
        qeaiigkoomwsgoem:
        qsamicayummauigq:
        goto gsageymuesseosmy;
        sgkcewwkiomywgky:
        $qeswwaqqsyymqawg = 0;
        goto syskuqogeeoicwgw;
        gsageymuesseosmy:
        $qeswwaqqsyymqawg = intval($siquossayskcwkea->width);
        goto skwiuqgoiaiskqmm;
        yseimcmuaycskkak:
        if (!isset($wyicceigkekkkwgs[2], $wyicceigkekkkwgs[3])) {
            goto gqsciemssskoqamq;
        }
        goto gowsaeyyqagsmkce;
        skwiuqgoiaiskqmm:
        $cswemwoyesycwkuq = intval($siquossayskcwkea->height);
        goto ikosmomwmyimqaew;
        eouoyysyekegaigi:
        if (isset($siquossayskcwkea->viewBox)) {
            goto gyaiswaqomsiwcwu;
        }
        goto wigumuwcsuiaauyw;
        syskuqogeeoicwgw:
        $cswemwoyesycwkuq = 0;
        goto kommicqseqmaiuss;
        gowsaeyyqagsmkce:
        $qeswwaqqsyymqawg = intval($wyicceigkekkkwgs[2]);
        goto wskkqgweqwsaygqi;
        isoisgaoqmiqeiak:
        goto kgqyyosqeaqigeuo;
        goto ukiagcaimyycouuq;
        wskkqgweqwsaygqi:
        $cswemwoyesycwkuq = intval($wyicceigkekkkwgs[3]);
        goto saimmkcsakcakqww;
        yeemeukcggweaowa:
    }
    
    public function umacyowesakeiewk($wisgiwskwawciiee, $aiooqyausygaasqm, $oiegiwogmwmawkeo)
    {
        goto ywumciccwiakyeus;
        yauqmqauoqwymcsu:
        iuiyqyiwisggcywk:
        goto mwucaqouymaweuck;
        qwsioymycmywyqiw:
        $qeswwaqqsyymqawg = 100;
        goto qiaayoymqmmemiiy;
        ywumciccwiakyeus:
        if (!$this->iigcaickwcykouca($aiooqyausygaasqm)) {
            goto weaqamgsuuwuouks;
        }
        goto qwsioymycmywyqiw;
        qmwomemuqyaimiso:
        $qaiwqwwemmyyqosy = $this->qaeakmimoqkugagk(ManipulateAttachment::ckoygqywcuqasqea($aiooqyausygaasqm));
        goto awggeauumiqymcoi;
        awggeauumiqymcoi:
        wyucqqggakoceowc:
        goto eiqawcsoocuowioo;
        oqgomigmmsikougi:
        
        goto egamwswskucyocos;
        eiqawcsoocuowioo:
        if (!$qaiwqwwemmyyqosy) {
            goto iuiyqyiwisggcywk;
        }
        goto kkeiscyscckuuqci;
        yaecoyqgimisqywa:
        return $wisgiwskwawciiee;
        goto emouoksmeamyiikc;
        omkkomymwsowywwa:
        if ($qaiwqwwemmyyqosy) {
            goto wyucqqggakoceowc;
        }
        goto qmwomemuqyaimiso;
        kkeiscyscckuuqci:
        $cswemwoyesycwkuq = ManipulateArray::get($qaiwqwwemmyyqosy, "\150\145\151\x67\150\164");
        goto myaeiwowqwegogmq;
        eyaciqqycmmgoski:
        
        $wisgiwskwawciiee["\167\x69\144\x74\x68"] = 80;
        goto oqgomigmmsikougi;
        egamwswskucyocos:
        weaqamgsuuwuouks:
        goto yaecoyqgimisqywa;
        mwucaqouymaweuck:
        $wisgiwskwawciiee["\x68\145\151\x67\x68\164"] = 80;
        goto eyaciqqycmmgoski;
        qiaayoymqmmemiiy:
        $cswemwoyesycwkuq = 100;
        goto oummiciwcqkwymss;
        myaeiwowqwegogmq:
        $qeswwaqqsyymqawg = ManipulateArray::get($qaiwqwwemmyyqosy, "\167\x69\x64\x74\x68");
        goto yauqmqauoqwymcsu;
        oummiciwcqkwymss:
        $qaiwqwwemmyyqosy = ManipulateAttachment::iuwsgyqakicakuoq($oiegiwogmwmawkeo);
        goto omkkomymwsowywwa;
        emouoksmeamyiikc:
    }
    
    public function iigcaickwcykouca($aiooqyausygaasqm) : bool
    {
        return self::SVG_MIME_TYPE === ManipulateAttachment::ikocqgeqiykwwyqs($aiooqyausygaasqm);
    }
}
