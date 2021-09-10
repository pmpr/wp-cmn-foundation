<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b5973b89a9             |
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
    const SVG_MIME_TYPE = "\151\155\x61\x67\145\57\163\166\x67\x2b\x78\x6d\154";
    
    public ?Sanitizer $sanitizer = null;
    public function __construct()
    {
        goto ksuoesmcewiqukgy;
        aoqqweiisiaekqsk:
        $this->sanitizer = $umcwwewscqegoqoe;
        goto kwkeiomeuququaoy;
        cuacsemcmuyaokge:
        
        $umcwwewscqegoqoe->minify(true);
        goto aoqqweiisiaekqsk;
        kwkeiomeuququaoy:
        parent::__construct();
        goto giqysmgscwwqgmqe;
        ksuoesmcewiqukgy:
        $umcwwewscqegoqoe = new Sanitizer();
        goto cuacsemcmuyaokge;
        giqysmgscwwqgmqe:
    }
    public function wigskegsqequoeks()
    {
        $this->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\x61\144\144\x5f\164\x77\x69\147\137\x66\x75\x6e\x63\164\x69\x6f\x6e\x73"), [$this, "\x65\165\x65\x65\x79\x65\155\x67\x6b\x65\x79\143\145\151\163\x61"])->qcsmikeggeemccuu("\147\145\x74\x5f\x69\155\x61\x67\x65\x5f\164\141\147", [$this, "\x63\147\x69\x61\x6b\x61\143\143\153\x6d\x63\141\161\x67\151\x6b"], 10, 6);
        parent::wigskegsqequoeks();
    }
    public function kgquecmsgcouyaya()
    {
        $this->cecaguuoecmccuse("\165\x70\x6c\x6f\x61\x64\x5f\155\x69\155\x65\163", [$this, "\x67\x67\x77\x63\x65\x71\x77\145\145\x61\141\143\167\x6f\x69\x73"])->cecaguuoecmccuse("\167\160\x5f\150\x61\x6e\144\154\145\137\x75\160\x6c\x6f\141\144\137\160\x72\145\146\x69\x6c\164\145\162", [$this, "\x6d\x65\153\145\x75\x77\151\x65\143\151\161\x79\155\141\151\157"])->cecaguuoecmccuse("\163\166\147\137\x61\164\x74\162\x69\142\165\x74\145\x73", [$this, "\x6d\161\171\x61\143\x77\141\x61\x6f\143\147\143\163\x79\x61\x67"], 999)->cecaguuoecmccuse("\167\160\137\143\x68\x65\143\x6b\x5f\146\x69\154\145\164\x79\x70\145\137\x61\156\x64\137\145\170\x74", [$this, "\141\153\151\x6f\157\x79\x61\165\x6b\x67\x79\165\155\143\155\x75"], 75, 4)->cecaguuoecmccuse("\x61\144\x6d\x69\x6e\137\160\x6f\x73\164\137\164\150\x75\x6d\142\156\x61\x69\x6c\x5f\150\x74\x6d\x6c", [$this, "\x6f\165\141\x75\171\x79\141\153\x65\141\x75\x61\161\161\151\x6b"], 10, 3)->cecaguuoecmccuse("\x77\x70\x5f\147\x65\164\x5f\x61\x74\164\x61\x63\x68\155\x65\156\x74\137\155\145\x74\x61\144\141\164\x61", [$this, "\167\161\171\161\151\x73\x67\x63\171\145\x77\x69\155\157\x61\x69"], 10, 2)->cecaguuoecmccuse("\x77\160\x5f\160\x72\145\160\141\x72\145\x5f\141\164\164\141\143\x68\x6d\145\x6e\x74\137\x66\x6f\x72\x5f\x6a\163", [$this, "\163\153\153\147\167\x77\153\x79\155\157\157\161\x71\x61\167\x6d"], 10, 2)->cecaguuoecmccuse("\167\x70\137\147\145\x6e\145\162\141\x74\x65\137\x61\164\x74\141\x63\150\x6d\145\x6e\164\x5f\155\x65\x74\141\x64\x61\x74\141", [$this, "\x79\x77\x67\x75\141\155\x61\151\151\x79\x61\x67\141\167\x73\143"], 10, 2)->cecaguuoecmccuse("\x69\155\141\x67\x65\137\x75\160\x6c\x6f\x61\x64\137\146\151\x6c\164\x65\x72\137\145\170\143\154\165\x64\145", [$this, "\x71\161\x6b\157\167\163\x63\141\x6f\157\x75\143\153\145\x67\157"], 10, 2)->cecaguuoecmccuse($this->ygyygikyocoymgaw("\141\x74\x74\141\143\x68\x6d\145\x6e\164\137\151\x73\137\x73\x76\147"), [$this, "\x65\x67\165\x6f\153\167\x71\141\155\x63\143\167\x63\161\157\x6d"], 10, 2)->cecaguuoecmccuse("\x77\x70\x5f\147\x65\164\137\141\164\164\x61\143\x68\155\x65\x6e\164\x5f\x69\x6d\x61\147\145\137\x61\164\x74\x72\x69\142\165\164\x65\x73", [$this, "\x79\x63\x79\161\153\x67\143\151\x67\x67\x6f\x61\x67\x61\147\147"], 10, 3);
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
        guoqssciqoegywsg:
        $siquossayskcwkea = $this->kguoyqackakgysoy($siquossayskcwkea);
        goto gqcosoeyaqmyccca;
        smmagsweysscecce:
        qaeqsckgkimiuwca:
        goto iiogyckwmaouswqy;
        skegiiomcggeymuw:
        $siquossayskcwkea["\x68\145\x69\x67\x68\164"] = 100;
        goto oqumomyawuuomquy;
        iiogyckwmaouswqy:
        return $siquossayskcwkea;
        goto qyckwskcewqioqyk;
        oqumomyawuuomquy:
        $siquossayskcwkea["\x77\151\144\x74\150"] = 100;
        goto smmagsweysscecce;
        gqcosoeyaqmyccca:
        if (!(!isset($siquossayskcwkea["\150\145\x69\x67\150\164"]) && !isset($siquossayskcwkea["\x77\x69\144\164\x68"]))) {
            goto qaeqsckgkimiuwca;
        }
        goto skegiiomcggeymuw;
        qyckwskcewqioqyk:
    }
    
    public function kguoyqackakgysoy($siquossayskcwkea, $uuossqmuccwyiemo = 16)
    {
        goto yikaqawiqaokyqgw;
        semoowiyeimkyeuc:
        eagggcysqeeaeose:
        goto qgmegqweacumuccw;
        kuiomeesyokwsgio:
        return $siquossayskcwkea;
        goto yescggaseyimocqu;
        coawukgoisakmosc:
        $wyicceigkekkkwgs = (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\163\166\147\137\x65\154\145\155\x65\x6e\x74\x5f\143\154\141\163\163\137\x72\x61\x74\151\x6f\x6e\137\143\157\x6e\166\145\162\164\145\x72"), []);
        goto eqiqgwqscsswkmwk;
        aymkogwsagaggsem:
        if (!(!is_numeric($uuossqmuccwyiemo) || $uuossqmuccwyiemo < 1)) {
            goto wkoqomessckkgeua;
        }
        goto eqggkouoswesgwya;
        cumoewcksgaqwwoo:
        iwemkuaseiooqoqg:
        goto kuiomeesyokwsgio;
        emoaoyuqmmymmwkq:
        foreach ($wyicceigkekkkwgs as $oiegiwogmwmawkeo => $eqgoocgaqwqcimie) {
            goto oayiqwmaaukkuimy;
            gmmaicwkwqiywwyc:
            $siquossayskcwkea["\x68\x65\x69\x67\150\164"] = intval($eqgoocgaqwqcimie[1] * $uuossqmuccwyiemo);
            goto goouowwycoakigim;
            gkoasaqwwqsgwqgo:
            $siquossayskcwkea["\167\151\144\x74\150"] = intval($eqgoocgaqwqcimie);
            goto okwsycyoqycgwaco;
            eiwkyioqeaaemqsa:
            if (is_array($eqgoocgaqwqcimie)) {
                goto ecmiggsmgmeaaqug;
            }
            goto kgogceiykkokkgeg;
            kgeiskysuuasqckq:
            oimegoemmuwwwkyo:
            goto cwccwmggqyeeggwe;
            isgiyocowwwceaoa:
            ecmiggsmgmeaaqug:
            goto ucoikisgieeseyqo;
            cwccwmggqyeeggwe:
            gcwikewmwkqsugms:
            goto seocecaioucmugky;
            okwsycyoqycgwaco:
            $siquossayskcwkea["\x68\145\151\x67\x68\x74"] = intval($eqgoocgaqwqcimie);
            goto euemimammkmwkuwk;
            euemimammkmwkuwk:
            goto qaoooeioqwiiceyq;
            goto isgiyocowwwceaoa;
            oayiqwmaaukkuimy:
            if (!(strpos($egkyssmuqcwaciya, $oiegiwogmwmawkeo) !== false)) {
                goto oimegoemmuwwwkyo;
            }
            goto eiwkyioqeaaemqsa;
            ucoikisgieeseyqo:
            $siquossayskcwkea["\167\151\x64\164\x68"] = intval($eqgoocgaqwqcimie[0] * $uuossqmuccwyiemo);
            goto gmmaicwkwqiywwyc;
            kgogceiykkokkgeg:
            $eqgoocgaqwqcimie *= $uuossqmuccwyiemo;
            goto gkoasaqwwqsgwqgo;
            aasuycoysaucuaaq:
            goto eagggcysqeeaeose;
            goto kgeiskysuuasqckq;
            goouowwycoakigim:
            qaoooeioqwiiceyq:
            goto aasuycoysaucuaaq;
            seocecaioucmugky:
        }
        goto semoowiyeimkyeuc;
        eqiqgwqscsswkmwk:
        if (!$wyicceigkekkkwgs) {
            goto eeicwkoeaqmaoywm;
        }
        goto aymkogwsagaggsem;
        yikaqawiqaokyqgw:
        $egkyssmuqcwaciya = ManipulateArray::get($siquossayskcwkea, "\143\154\141\x73\x73");
        goto askiamwsewkaqwoi;
        qgmegqweacumuccw:
        eeicwkoeaqmaoywm:
        goto cumoewcksgaqwwoo;
        askiamwsewkaqwoi:
        if (!$egkyssmuqcwaciya) {
            goto iwemkuaseiooqoqg;
        }
        goto coawukgoisakmosc;
        eqggkouoswesgwya:
        $uuossqmuccwyiemo = 16;
        goto icoooiwmiusyeaes;
        icoooiwmiusyeaes:
        wkoqomessckkgeua:
        goto emoaoyuqmmymmwkq;
        yescggaseyimocqu:
    }
    
    public function qqkowscaoouckego($couiucmsqaieciue = [])
    {
        $couiucmsqaieciue[] = self::SVG_MIME_TYPE;
        return $couiucmsqaieciue;
    }
    
    public function eueeyemgkeyceisa($eyoesceegakeygsi)
    {
        $eyoesceegakeygsi->kmmegqceukkkawme("\x69\163\x5f\x73\166\147", function ($aiooqyausygaasqm) {
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
        $yawwowoqosismgyq["\163\166\147"] = self::SVG_MIME_TYPE;
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
        mmqsgsuycqioemgo:
        return $wwgucssaecqekuek;
        goto qqyeogaouscuaikw;
        oeaskyqueyagqcmc:
        ManipulateArray::unset($wwgucssaecqekuek, ["\x73\162\x63\x73\145\164", "\x73\x69\x7a\145\163"]);
        goto ckcesgcceqqqieem;
        mywueecygymayigq:
        if (!$this->iigcaickwcykouca($aokagokqyuysuksm)) {
            goto akcqkwesmcuumqqc;
        }
        goto oeaskyqueyagqcmc;
        ckcesgcceqqqieem:
        akcqkwesmcuumqqc:
        goto mmqsgsuycqioemgo;
        qqyeogaouscuaikw:
    }
    
    public function uwmcsgckegoamwas($nsmgceoqaqogqmuw, $aokagokqyuysuksm)
    {
        goto ommmymgkaageowym;
        wswmegcumomiwaqo:
        soeggysyusqoiwwg:
        goto wsouygqoeyuksock;
        ommmymgkaageowym:
        $aqykuigiuwmmcieu = $nsmgceoqaqogqmuw;
        goto aseoykguwasmaggs;
        aseoykguwasmaggs:
        if (!($nsmgceoqaqogqmuw && $this->iigcaickwcykouca($aokagokqyuysuksm))) {
            goto soeggysyusqoiwwg;
        }
        goto oesqomwsgwmckgsq;
        oesqomwsgwmckgsq:
        try {
            goto swkmkgmucceyweie;
            aooeykwscmqgouay:
            $qogsmwakwacwqogk = ManipulateAttachment::ygwimyogyaqgumam($aokagokqyuysuksm);
            goto mcccguiaquiickwq;
            mcccguiaquiickwq:
            $ewgwqamkygiqaawc = $this->kcciqwskewsuaemk()->souwykwwmyygqyqi($qogsmwakwacwqogk);
            goto quwwquywcuyiiweo;
            swkmkgmucceyweie:
            $egkyssmuqcwaciya = DOMCrawler::waecsyqmwascmqoa($nsmgceoqaqogqmuw, "\151\155\x67", "\x63\154\x61\163\163");
            goto aooeykwscmqgouay;
            quwwquywcuyiiweo:
            $ewgwqamkygiqaawc = preg_replace("\x2f\x3c\x5c\77\170\155\154\56\x2a\x3f\x5c\x3f\x3e\x2f", '', $ewgwqamkygiqaawc);
            goto eiiqicyywgugksuc;
            eiiqicyywgugksuc:
            $aqykuigiuwmmcieu = DOMCrawler::igmaewykumgwoaoy($ewgwqamkygiqaawc, ["\163\166\147" => ["\143\154\141\163\163" => $egkyssmuqcwaciya]]);
            goto sugmgeiemuygeoce;
            sugmgeiemuygeoce:
        } catch (Exception $wgaoewqkwgomoaai) {
            $aqykuigiuwmmcieu = $nsmgceoqaqogqmuw;
        }
        goto wswmegcumomiwaqo;
        wsouygqoeyuksock:
        return $aqykuigiuwmmcieu;
        goto qaugkmgccegqkasu;
        qaugkmgccegqkasu:
    }
    
    public function akiooyaukgyumcmu($icwicymcioeyeyek = null, $qogsmwakwacwqogk = null, $wkcwykowmmmwioqs = null, $yawwowoqosismgyq = null)
    {
        goto qssyiieuymmiwicm;
        kwwgmsmuoeysguwq:
        scageqmiwcyqmmmk:
        goto qeaugewkiwmkoaas;
        kuyuwimysoqcmgek:
        if (!(strlen($yucgcsieomwqgwws) < 1)) {
            goto scageqmiwcyqmmmk;
        }
        goto fosuiwomyuwkaisi;
        gocwgeomykcekcso:
        return $icwicymcioeyeyek;
        goto kggwiioyiqgskcem;
        fosuiwomyuwkaisi:
        $ukequsueuukqgaca = explode("\56", $wkcwykowmmmwioqs);
        goto yqewusaguumeiqyq;
        aqguswuomiqimcwy:
        swgecgeeeaaakgss:
        goto gocwgeomykcekcso;
        qssyiieuymmiwicm:
        $yucgcsieomwqgwws = isset($icwicymcioeyeyek["\x65\170\x74"]) ? $icwicymcioeyeyek["\x65\x78\x74"] : '';
        goto kuyuwimysoqcmgek;
        yqewusaguumeiqyq:
        $yucgcsieomwqgwws = strtolower(end($ukequsueuukqgaca));
        goto kwwgmsmuoeysguwq;
        yigecwqswuowoakm:
        $icwicymcioeyeyek["\145\x78\x74"] = $yucgcsieomwqgwws;
        goto aqguswuomiqimcwy;
        cgmgikoumekoyyae:
        $icwicymcioeyeyek["\x74\171\x70\145"] = self::SVG_MIME_TYPE;
        goto yigecwqswuowoakm;
        qeaugewkiwmkoaas:
        if (!in_array($yucgcsieomwqgwws, ["\163\166\x67", "\x73\166\x67\172"])) {
            goto swgecgeeeaaakgss;
        }
        goto cgmgikoumekoyyae;
        kggwiioyiqgskcem:
    }
    
    public function mekeuwieciqymaio($qogsmwakwacwqogk)
    {
        goto oimaymokouuwueum;
        iaqwisciugaosygy:
        emwggqiqcmmqeawy:
        goto uoqequmkiyukiqgi;
        cgsawegeqqsecwam:
        if ($this->yiiiqewsseywemqu($qogsmwakwacwqogk["\164\155\160\x5f\x6e\x61\155\x65"])) {
            goto emwggqiqcmmqeawy;
        }
        goto eucsyaygqqcqamus;
        uoqequmkiyukiqgi:
        kyswigcwgusmesqi:
        goto qwikcqiaiumsswow;
        oimaymokouuwueum:
        if (!($qogsmwakwacwqogk["\164\171\x70\145"] === self::SVG_MIME_TYPE)) {
            goto kyswigcwgusmesqi;
        }
        goto cgsawegeqqsecwam;
        eucsyaygqqcqamus:
        $qogsmwakwacwqogk["\x65\162\162\157\162"] = __("\123\x6f\162\162\171\x2c\40\164\x68\x69\163\x20\x66\151\x6c\x65\x20\143\157\x75\154\x64\156\x27\164\x20\142\x65\40\163\141\x6e\x69\x74\151\x7a\x65\144\40\x73\x6f\40\x66\x6f\x72\40\163\x65\143\x75\x72\x69\x74\171\40\162\145\141\x73\157\156\163\x20\167\x61\x73\156\47\164\40\x75\x70\x6c\157\x61\144\x65\x64", PR__CMN__FOUNDATION);
        goto iaqwisciugaosygy;
        qwikcqiaiumsswow:
        return $qogsmwakwacwqogk;
        goto ukggweysgiiygqsa;
        ukggweysgiiygqsa:
    }
    
    public function skkgwwkymooqqawm($keccaugmemegoimu, $aiooqyausygaasqm) : array
    {
        goto ysmessckmysogeua;
        giiqogwyoikiiqyi:
        $qaiwqwwemmyyqosy = $this->qaeakmimoqkugagk(ManipulateAttachment::ckoygqywcuqasqea($aiooqyausygaasqm));
        goto iqiwimyamykmuiwo;
        qmsyaycokgmmwycs:
        foreach ($possible_sizes as $oiegiwogmwmawkeo => $pkyyagewkiyckmwy) {
            goto cocwomcoymcaqgky;
            yemwekyegaywgoug:
            oeeakgukqusiqswc:
            goto wqgecqaciyakecys;
            ukygqcaqcaqqmyew:
            $default_width = 2000;
            goto ymiosikicyqkaiaa;
            mggyiwyuuiwswaks:
            $default_width = $qaiwqwwemmyyqosy["\167\151\144\164\x68"];
            goto yemwekyegaywgoug;
            wqmgwcsuccoweocq:
            iuiawwoouuwwiqca:
            goto oyeswuecyaiiawyg;
            cocwomcoymcaqgky:
            $default_height = 2000;
            goto ukygqcaqcaqqmyew;
            moeeimaaoaycycmi:
            $default_height = $qaiwqwwemmyyqosy["\x68\x65\x69\147\150\x74"];
            goto mggyiwyuuiwswaks;
            wqgecqaciyakecys:
            $wyicceigkekkkwgs[$oiegiwogmwmawkeo] = ["\x68\145\x69\x67\x68\x74" => DecoratorOption::get("{$oiegiwogmwmawkeo}\137\x73\x69\x7a\145\137\x77", $default_height), "\x77\151\x64\164\x68" => DecoratorOption::get("{$oiegiwogmwmawkeo}\137\x73\151\x7a\x65\x5f\150", $default_width), "\x75\x72\x6c" => $keccaugmemegoimu["\165\162\154"], "\x6f\x72\x69\145\156\164\x61\x74\151\x6f\156" => "\160\157\162\x74\162\141\151\164"];
            goto wqmgwcsuccoweocq;
            ymiosikicyqkaiaa:
            if (!("\x66\x75\154\154" === $oiegiwogmwmawkeo && $qaiwqwwemmyyqosy)) {
                goto oeeakgukqusiqswc;
            }
            goto moeeimaaoaycycmi;
            oyeswuecyaiiawyg:
        }
        goto geqakgsumkyosuca;
        geqakgsumkyosuca:
        wsawmoiaemkggocs:
        goto qicekkeggigkwqeu;
        ysmessckmysogeua:
        if (!($keccaugmemegoimu["\x6d\151\155\x65"] == self::SVG_MIME_TYPE)) {
            goto kkscsmuyumawosyc;
        }
        goto giiqogwyoikiiqyi;
        yqckgyeeuyayosww:
        $wyicceigkekkkwgs = [];
        goto qmsyaycokgmmwycs;
        egwuecigeyuooiam:
        iekecmawqyigmqcg:
        goto sieccokukwgmuggw;
        kawgkswoygkmgmao:
        kkscsmuyumawosyc:
        goto suewugkisoommmgy;
        moyqaggmqqimwusm:
        $keccaugmemegoimu["\151\143\x6f\156"] = $keccaugmemegoimu["\x75\162\154"];
        goto kawgkswoygkmgmao;
        qicekkeggigkwqeu:
        $keccaugmemegoimu["\x73\x69\172\x65\163"] = $wyicceigkekkkwgs;
        goto moyqaggmqqimwusm;
        egyuciuossumacuy:
        $keccaugmemegoimu = array_merge($keccaugmemegoimu, $qaiwqwwemmyyqosy);
        goto egwuecigeyuooiam;
        iqiwimyamykmuiwo:
        if (!$qaiwqwwemmyyqosy) {
            goto iekecmawqyigmqcg;
        }
        goto egyuciuossumacuy;
        sieccokukwgmuggw:
        $possible_sizes = $this->sscegwueamckwmcy("\x69\155\x61\x67\x65\137\x73\151\x7a\x65\x5f\156\x61\x6d\145\163\137\143\150\x6f\x6f\x73\145", ["\146\165\154\x6c" => __("\106\x75\x6c\154\x20\123\151\172\145", PR__CMN__FOUNDATION), "\164\x68\x75\x6d\x62\156\141\151\154" => __("\124\x68\165\155\142\x6e\141\151\154", PR__CMN__FOUNDATION), "\155\x65\x64\x69\165\155" => __("\x4d\145\144\x69\x75\155", PR__CMN__FOUNDATION), "\154\x61\162\147\145" => __("\x4c\x61\x72\x67\x65", PR__CMN__FOUNDATION)]);
        goto yqckgyeeuyayosww;
        suewugkisoommmgy:
        return $keccaugmemegoimu;
        goto tsywwmwawwgcwmuc;
        tsywwmwawwgcwmuc:
    }
    
    protected function yiiiqewsseywemqu($qogsmwakwacwqogk)
    {
        goto icqaiqyewuyegkeq;
        kcaysyweukeimoik:
        return false;
        goto eakoykqcmyemgyum;
        moeseousgukmygmy:
        $yeueggiecgqcswqm = gzdecode($yeueggiecgqcswqm);
        goto xaiaogcwcaeweoiu;
        icqaiqyewuyegkeq:
        $yeueggiecgqcswqm = $this->kcciqwskewsuaemk()->souwykwwmyygqyqi($qogsmwakwacwqogk);
        goto dmwmgeswweekqyuw;
        xaiaogcwcaeweoiu:
        
        if (!($yeueggiecgqcswqm === false)) {
            goto qucoecmmmacqooek;
        }
        goto ogwaiqiccywqqiwk;
        gmywmsmiayimqygy:
        if (!($qawsmigsyysqwmeq === false)) {
            goto ieauiumamygiuckc;
        }
        goto kcaysyweukeimoik;
        noswwaawyacomwyo:
        eookussqeicycoio:
        goto wcoekawkkswkgamc;
        ogwaiqiccywqqiwk:
        return false;
        goto wsomqsmeououqiwu;
        weocosykwsaimaks:
        
        $qawsmigsyysqwmeq = $this->sanitizer->sanitize($yeueggiecgqcswqm);
        goto gmywmsmiayimqygy;
        qmiouyoeguiqymgi:
        $qawsmigsyysqwmeq = gzencode($qawsmigsyysqwmeq);
        goto noswwaawyacomwyo;
        wsomqsmeououqiwu:
        qucoecmmmacqooek:
        goto eouugaqkgamwmgmo;
        eakoykqcmyemgyum:
        ieauiumamygiuckc:
        goto aqyimgoegakwgoum;
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
        wcoekawkkswkgamc:
        return $this->kcciqwskewsuaemk()->kwsmkgyoyaqecwuu($qogsmwakwacwqogk, $qawsmigsyysqwmeq);
        goto uqwsiocauuswgwok;
        eouugaqkgamwmgmo:
        qeggwmykewcoieic:
        goto weocosykwsaimaks;
        uqwsiocauuswgwok:
    }
    
    protected function wsggsqigawogiwky($ygwoqcwsaggqoamw)
    {
        goto giueuuwusgmgeick;
        giueuuwusgmgeick:
        if (function_exists("\x6d\x62\x5f\163\x74\162\160\157\x73")) {
            goto iisgwcgceeygauyk;
        }
        goto eksamuqymmeumqsg;
        iiuwcsgwcguceiko:
        iisgwcgceeygauyk:
        goto wkycksmmuskouies;
        eksamuqymmeumqsg:
        return 0 === strpos($ygwoqcwsaggqoamw, "\x1f" . "\213" . "\10");
        goto wskcqwywmwmwigce;
        wskcqwywmwmwigce:
        goto oqyosskkgcuckmes;
        goto iiuwcsgwcguceiko;
        emucccmcoiwcyioq:
        oqyosskkgcuckmes:
        goto yigmeqsygwgioyaa;
        wkycksmmuskouies:
        return 0 === mb_strpos($ygwoqcwsaggqoamw, "\x1f" . "\x8b" . "\x8");
        goto emucccmcoiwcyioq;
        yigmeqsygwgioyaa:
    }
    
    public function oowwkoeekmwwgieu($mcqieaigyeeyaksm, $aiooqyausygaasqm, $oiegiwogmwmawkeo)
    {
        goto cmqocusuososcwqk;
        aesukugmkcsuocwc:
        iwciaqcioigqwiys:
        goto uyowywywqeagqcuw;
        yqwkgwucqwqyuqmw:
        $qeswwaqqsyymqawg = false;
        goto icckscyoesgiyksu;
        maycimoaceiiuemu:
        $qeswwaqqsyymqawg = ManipulateAttachment::get($gkiuoymeukweiaaw, "\x77\151\x64\164\x68");
        goto aesukugmkcsuocwc;
        icckscyoesgiyksu:
        if (!$gkiuoymeukweiaaw) {
            goto iwciaqcioigqwiys;
        }
        goto uyyieiuceauoecyq;
        qoysygagyigwsiwm:
        $cswemwoyesycwkuq = false;
        goto yqwkgwucqwqyuqmw;
        aoewemyqigugysua:
        return $mcqieaigyeeyaksm;
        goto egauqkuumkisssaa;
        uyowywywqeagqcuw:
        
        
        goto umekgwemiaygomky;
        uyyieiuceauoecyq:
        $cswemwoyesycwkuq = ManipulateAttachment::get($gkiuoymeukweiaaw, "\x68\145\151\x67\x68\x74");
        goto maycimoaceiiuemu;
        eswgqkmomsiauqqy:
        $gkiuoymeukweiaaw = ManipulateAttachment::iuwsgyqakicakuoq($oiegiwogmwmawkeo);
        goto qoysygagyigwsiwm;
        umekgwemiaygomky:
        awgamseuywgciius:
        goto aoewemyqigugysua;
        cmqocusuososcwqk:
        if (!$this->iigcaickwcykouca($aiooqyausygaasqm)) {
            goto awgamseuywgciius;
        }
        goto eswgqkmomsiauqqy;
        egauqkuumkisssaa:
    }
    
    public function ouauyyakeauaqqik($ewgwqamkygiqaawc, $post_id, $thumbnail_id)
    {
        goto yguicqcomwueokwm;
        aikuwguwuiekouoo:
        $ewgwqamkygiqaawc = DOMCrawler::igmaewykumgwoaoy($ewgwqamkygiqaawc, ["\x69\155\x67\54\40\x61" => ["\143\154\141\163\163" => "\x77\x2d\61\60\x30"]]);
        goto wicguyksogckqums;
        kyaysckiwskgogci:
        return $ewgwqamkygiqaawc;
        goto eageyyymyekskmue;
        wicguyksogckqums:
        kqsyuyukgswmwcys:
        goto kyaysckiwskgogci;
        yguicqcomwueokwm:
        if (!$this->iigcaickwcykouca($thumbnail_id)) {
            goto kqsyuyukgswmwcys;
        }
        goto aikuwguwuiekouoo;
        eageyyymyekskmue:
    }
    
    public function cgiakacckmcaqgik($nsmgceoqaqogqmuw, $aokagokqyuysuksm, $gkykacccamuwowwc, $meqocwsecsywiiqs, $ioogmuawkgcgmkia, $oiegiwogmwmawkeo)
    {
        goto mgocagiwqsgaisyq;
        mgocagiwqsgaisyq:
        if (!$this->iigcaickwcykouca($aokagokqyuysuksm)) {
            goto meyowgukekkkkuqe;
        }
        goto wkumckmusackacmi;
        musiyggyqaiwwouu:
        ccymqyyaikauqaiq:
        goto imymswaceomsasks;
        gawswamyawcmsmei:
        goto uyouccoiyogmuwey;
        goto cmsyegseqcwmyycy;
        wiomewyyumkmwsum:
        if ($cswemwoyesycwkuq && $qeswwaqqsyymqawg) {
            goto cooiowgwqgssuqcw;
        }
        goto uacekkwiaagmuieg;
        caocoiecwueosoig:
        $qeswwaqqsyymqawg = $qaiwqwwemmyyqosy["\167\151\144\x74\x68"];
        goto qsuyqoeocsmkomwy;
        yygqgeukeuaciewa:
        $qeswwaqqsyymqawg = DecoratorOption::get("{$oiegiwogmwmawkeo}\x5f\163\151\x7a\x65\137\x77", false);
        goto kysaqkaiksosyegu;
        cmsyegseqcwmyycy:
        cooiowgwqgssuqcw:
        goto wiiaiqiomosmyuwq;
        agaomyyqaaswykui:
        qkycyqgwwoiuaomq:
        goto caocoiecwueosoig;
        uacekkwiaagmuieg:
        $nsmgceoqaqogqmuw = str_replace("\x77\x69\x64\164\x68\x3d\x22\61\42\x20", '', $nsmgceoqaqogqmuw);
        goto seiysueoskimiaam;
        kysaqkaiksosyegu:
        $cswemwoyesycwkuq = DecoratorOption::get("{$oiegiwogmwmawkeo}\x5f\163\151\x7a\145\137\150", false);
        goto iwawqgcgskysqyaa;
        qsuyqoeocsmkomwy:
        $cswemwoyesycwkuq = $qaiwqwwemmyyqosy["\150\x65\151\147\x68\x74"];
        goto ioyyiaguqyiaeaqs;
        cmmoyuuegqguakga:
        uyouccoiyogmuwey:
        goto ooccckeeomycucao;
        ooccckeeomycucao:
        $nsmgceoqaqogqmuw = str_replace("\57\x3e", "\40\162\x6f\154\145\75\42\x69\x6d\x67\42\40\x2f\x3e", $nsmgceoqaqogqmuw);
        goto cwmkgosooecsywcm;
        wayyiemaccqkmqeg:
        if ("\146\x75\x6c\x6c" == $oiegiwogmwmawkeo && ($qaiwqwwemmyyqosy = $this->qaeakmimoqkugagk(ManipulateAttachment::ckoygqywcuqasqea($aokagokqyuysuksm)))) {
            goto qkycyqgwwoiuaomq;
        }
        goto yygqgeukeuaciewa;
        mqywccygymoeaoym:
        ygaggwgwiceegasy:
        goto wiomewyyumkmwsum;
        seiysueoskimiaam:
        $nsmgceoqaqogqmuw = str_replace("\x68\145\x69\x67\150\164\x3d\42\x31\x22\x20", '', $nsmgceoqaqogqmuw);
        goto gawswamyawcmsmei;
        sacmqsciuaucgaww:
        $cswemwoyesycwkuq = $oiegiwogmwmawkeo[1];
        goto mqywccygymoeaoym;
        wkumckmusackacmi:
        if (is_array($oiegiwogmwmawkeo)) {
            goto ccymqyyaikauqaiq;
        }
        goto wayyiemaccqkmqeg;
        ywyqmwuswkcoyqsy:
        goto ygaggwgwiceegasy;
        goto musiyggyqaiwwouu;
        ioyyiaguqyiaeaqs:
        csmqeagwuisqiuym:
        goto ywyqmwuswkcoyqsy;
        imymswaceomsasks:
        $qeswwaqqsyymqawg = $oiegiwogmwmawkeo[0];
        goto sacmqsciuaucgaww;
        cwmkgosooecsywcm:
        meyowgukekkkkuqe:
        goto ooqwuoiqmiswgkyu;
        wiiaiqiomosmyuwq:
        $nsmgceoqaqogqmuw = str_replace("\167\151\x64\x74\x68\x3d\42\61\42\x20", sprintf("\167\x69\144\x74\x68\x3d\42\45\x73\42\x20", $qeswwaqqsyymqawg), $nsmgceoqaqogqmuw);
        goto sccaumocseyiqsue;
        iwawqgcgskysqyaa:
        goto csmqeagwuisqiuym;
        goto agaomyyqaaswykui;
        sccaumocseyiqsue:
        $nsmgceoqaqogqmuw = str_replace("\x68\x65\x69\x67\x68\x74\75\42\x31\x22\x20", sprintf("\x68\145\151\147\x68\x74\75\x22\x25\x73\42\40", $cswemwoyesycwkuq), $nsmgceoqaqogqmuw);
        goto cmmoyuuegqguakga;
        ooqwuoiqmiswgkyu:
        return $nsmgceoqaqogqmuw;
        goto uieeaeqciogamoqe;
        uieeaeqciogamoqe:
    }
    
    public function ywguamaiiyagawsc($kuguwoaesuqsqysu, $attachment_id)
    {
        goto eiwcgwomusuokygg;
        eiwcgwomusuokygg:
        if (!$this->iigcaickwcykouca($attachment_id)) {
            goto yksgcagiyukouics;
        }
        goto oeyyasumsgwocquw;
        caammwwkqeeemaok:
        $wkcwykowmmmwioqs = basename($svg_path);
        goto ksqcmyaawiiiimco;
        ssaeeugeycyaaaki:
        
        $relative_path = str_replace($upload_dir["\x62\141\163\x65\144\x69\x72"], '', $svg_path);
        goto caammwwkqeeemaok;
        csgqcskywiqwyocw:
        return $kuguwoaesuqsqysu;
        goto suicqccekqckayec;
        oqmeeqioiooguikk:
        $svg_path = ManipulateAttachment::ckoygqywcuqasqea($attachment_id);
        goto ggwyamakeyyieeog;
        oimwgecwwecuugwq:
        $kuguwoaesuqsqysu["\163\151\172\145\163"] = $wyicceigkekkkwgs;
        goto ycyoioowuumgwkuk;
        ycyoioowuumgwkuk:
        yksgcagiyukouics:
        goto wqaiocgoqsqogmcm;
        ysqokomouwswymck:
        if ($qaiwqwwemmyyqosy) {
            goto wmskawmisgksegwe;
        }
        goto csgqcskywiqwyocw;
        ggwyamakeyyieeog:
        $upload_dir = DecoratorFile::oemywwmmmiywiqai();
        goto ssaeeugeycyaaaki;
        sqqcaugoikagoykc:
        $kuguwoaesuqsqysu = ["\167\x69\144\x74\x68" => intval($qaiwqwwemmyyqosy["\167\x69\144\164\x68"]), "\x68\145\x69\x67\150\x74" => intval($qaiwqwwemmyyqosy["\x68\145\x69\147\150\x74"]), "\x66\151\x6c\145" => $relative_path];
        goto ssquocgwsassuike;
        ksqcmyaawiiiimco:
        $qaiwqwwemmyyqosy = $this->qaeakmimoqkugagk($svg_path);
        goto ysqokomouwswymck;
        oeyyasumsgwocquw:
        $additional_image_sizes = wp_get_additional_image_sizes();
        goto oqmeeqioiooguikk;
        uommmgequgiiykci:
        foreach (get_intermediate_image_sizes() as $piuesceqiguuskme) {
            goto mekaesaeskqmgqii;
            kqgqymcemksgmsaa:
            
            $wyicceigkekkkwgs[$piuesceqiguuskme]["\143\x72\157\x70"] = DecoratorOption::get("{$piuesceqiguuskme}\137\143\x72\x6f\x70");
            goto ggccmgysseeqcaga;
            wgkeakuiaqswmkes:
            scymgswieuyiqwmm:
            goto kemiasqyoocyqqgm;
            kuigwocyaagakags:
            if (isset($additional_image_sizes[$piuesceqiguuskme]["\167\151\144\164\x68"])) {
                goto scymgswieuyiqwmm;
            }
            goto miiaowmiyoemouke;
            kosccieswmaoeoyk:
            $wyicceigkekkkwgs[$piuesceqiguuskme]["\x66\151\154\x65"] = $wkcwykowmmmwioqs;
            goto yumiokuikmkkwcwg;
            amemoiimosckqems:
            
            $wyicceigkekkkwgs[$piuesceqiguuskme]["\x63\x72\x6f\x70"] = intval($additional_image_sizes[$piuesceqiguuskme]["\x63\x72\157\160"]);
            goto yqimmomioeoaqwkq;
            oueaeyqiqiakqaek:
            
            $wyicceigkekkkwgs[$piuesceqiguuskme]["\150\145\151\147\150\x74"] = DecoratorOption::get("{$piuesceqiguuskme}\x5f\x73\151\x7a\x65\137\x68");
            goto bweusaooumwyemuu;
            qsisgmaawywioogk:
            eskcocwimiseewmu:
            goto qwkyuqqgkugqggqo;
            auoaywowugkacsia:
            goto gymqkieyuiawacwi;
            goto wgkeakuiaqswmkes;
            qwkyuqqgkugqggqo:
            
            $wyicceigkekkkwgs[$piuesceqiguuskme]["\x68\x65\x69\x67\150\x74"] = intval($additional_image_sizes[$piuesceqiguuskme]["\150\145\151\x67\150\164"]);
            goto cacaysyqsqaauawm;
            yumiokuikmkkwcwg:
            $wyicceigkekkkwgs[$piuesceqiguuskme]["\155\151\x6d\x65\55\x74\x79\160\x65"] = ManipulateAttachment::ikocqgeqiykwwyqs($attachment_id);
            goto isgceyiuweaueqeu;
            isgceyiuweaueqeu:
            uqggmkmmysmeqkmy:
            goto guqwqwceceswwucy;
            yqimmomioeoaqwkq:
            gkwyuumqeuikwiku:
            goto kosccieswmaoeoyk;
            bweusaooumwyemuu:
            goto iymwycosumimggmu;
            goto qsisgmaawywioogk;
            iosymaiumakyyaos:
            if (isset($additional_image_sizes[$piuesceqiguuskme]["\143\162\x6f\160"])) {
                goto wmismwqqqagsomky;
            }
            goto kqgqymcemksgmsaa;
            ggccmgysseeqcaga:
            goto gkwyuumqeuikwiku;
            goto uiuiuicckaiksqyc;
            uiuiuicckaiksqyc:
            wmismwqqqagsomky:
            goto amemoiimosckqems;
            cacaysyqsqaauawm:
            iymwycosumimggmu:
            goto iosymaiumakyyaos;
            mekaesaeskqmgqii:
            $wyicceigkekkkwgs[$piuesceqiguuskme] = ["\x77\151\144\x74\150" => '', "\150\x65\151\x67\150\164" => '', "\143\162\157\x70" => false];
            goto kuigwocyaagakags;
            esgykeaqimuiewgw:
            gymqkieyuiawacwi:
            goto eymgmkoqgoqicgsi;
            miiaowmiyoemouke:
            
            $wyicceigkekkkwgs[$piuesceqiguuskme]["\x77\151\x64\x74\x68"] = DecoratorOption::get("{$piuesceqiguuskme}\137\163\x69\172\145\x5f\x77");
            goto auoaywowugkacsia;
            kemiasqyoocyqqgm:
            
            $wyicceigkekkkwgs[$piuesceqiguuskme]["\167\x69\x64\164\x68"] = intval($additional_image_sizes[$piuesceqiguuskme]["\x77\x69\144\164\150"]);
            goto esgykeaqimuiewgw;
            eymgmkoqgoqicgsi:
            if (isset($additional_image_sizes[$piuesceqiguuskme]["\150\145\x69\147\x68\x74"])) {
                goto eskcocwimiseewmu;
            }
            goto oueaeyqiqiakqaek;
            guqwqwceceswwucy:
        }
        goto wiouwokmcckqekqy;
        wiouwokmcckqekqy:
        usasekcgsyyqymgy:
        goto oimwgecwwecuugwq;
        suicqccekqckayec:
        wmskawmisgksegwe:
        goto sqqcaugoikagoykc;
        ssquocgwsassuike:
        
        $wyicceigkekkkwgs = [];
        goto uommmgequgiiykci;
        wqaiocgoqsqogmcm:
        return $kuguwoaesuqsqysu;
        goto ccwsuiigukoykcew;
        ccwsuiigukoykcew:
    }
    
    public function wqyqisgcyewimoai($icwicymcioeyeyek, $post)
    {
        goto maiaiacekmmwswqe;
        ueaiaeaaaiiuskyi:
        ManipulateAttachment::_updateMeta($post, $icwicymcioeyeyek);
        goto mwagkoucauykimsu;
        cymmwkiaogwsmcsu:
        $icwicymcioeyeyek = ManipulateAttachment::smiqaaaecemiwugu($post, ManipulateAttachment::ckoygqywcuqasqea($post));
        goto ueaiaeaaaiiuskyi;
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
        gmqmkgkikksymkik:
    }
    
    protected function qaeakmimoqkugagk($waoisqguweoociwe)
    {
        goto qywgeimouqcummco;
        cmqyiscgeswqsoog:
        kgqyyosqeaqigeuo:
        goto iqyicsuysksymwuw;
        saimmkcsakcakqww:
        gqsciemssskoqamq:
        goto cmqyiscgeswqsoog;
        syskuqogeeoicwgw:
        $cswemwoyesycwkuq = 0;
        goto kommicqseqmaiuss;
        iqyicsuysksymwuw:
        goto sgosioakiaeqmyyy;
        goto qeaiigkoomwsgoem;
        wigumuwcsuiaauyw:
        return false;
        goto isoisgaoqmiqeiak;
        yyeowwwqogwoeoyc:
        $siquossayskcwkea = $waoisqguweoociwe->attributes();
        goto ywagwigaamkacqsm;
        mewsemcoqiuuwwme:
        return ["\x77\151\144\x74\150" => $qeswwaqqsyymqawg, "\x68\145\151\x67\150\x74" => $cswemwoyesycwkuq, "\x6f\x72\151\145\x6e\x74\x61\164\151\157\156" => $qeswwaqqsyymqawg > $cswemwoyesycwkuq ? "\154\x61\156\x64\163\143\141\x70\x65" : "\x70\x6f\x72\164\x72\141\151\x74"];
        goto yeemeukcggweaowa;
        skwiuqgoiaiskqmm:
        $cswemwoyesycwkuq = intval($siquossayskcwkea->height);
        goto ikosmomwmyimqaew;
        qywgeimouqcummco:
        $waoisqguweoociwe = @simplexml_load_file($waoisqguweoociwe);
        goto sgkcewwkiomywgky;
        eouoyysyekegaigi:
        if (isset($siquossayskcwkea->viewBox)) {
            goto gyaiswaqomsiwcwu;
        }
        goto wigumuwcsuiaauyw;
        kommicqseqmaiuss:
        if (!$waoisqguweoociwe) {
            goto ocmywgkaoogmcsau;
        }
        goto yyeowwwqogwoeoyc;
        yseimcmuaycskkak:
        if (!isset($wyicceigkekkkwgs[2], $wyicceigkekkkwgs[3])) {
            goto gqsciemssskoqamq;
        }
        goto gowsaeyyqagsmkce;
        ygqwuggqqouywgoq:
        $wyicceigkekkkwgs = explode("\40", $siquossayskcwkea->viewBox);
        goto yseimcmuaycskkak;
        qeaiigkoomwsgoem:
        qsamicayummauigq:
        goto gsageymuesseosmy;
        gowsaeyyqagsmkce:
        $qeswwaqqsyymqawg = intval($wyicceigkekkkwgs[2]);
        goto wskkqgweqwsaygqi;
        yqocsiwyueakoqoe:
        ocmywgkaoogmcsau:
        goto mewsemcoqiuuwwme;
        sgkcewwkiomywgky:
        $qeswwaqqsyymqawg = 0;
        goto syskuqogeeoicwgw;
        ywagwigaamkacqsm:
        if (isset($siquossayskcwkea->width, $siquossayskcwkea->height)) {
            goto qsamicayummauigq;
        }
        goto eouoyysyekegaigi;
        wskkqgweqwsaygqi:
        $cswemwoyesycwkuq = intval($wyicceigkekkkwgs[3]);
        goto saimmkcsakcakqww;
        ukiagcaimyycouuq:
        gyaiswaqomsiwcwu:
        goto ygqwuggqqouywgoq;
        gsageymuesseosmy:
        $qeswwaqqsyymqawg = intval($siquossayskcwkea->width);
        goto skwiuqgoiaiskqmm;
        ikosmomwmyimqaew:
        sgosioakiaeqmyyy:
        goto yqocsiwyueakoqoe;
        isoisgaoqmiqeiak:
        goto kgqyyosqeaqigeuo;
        goto ukiagcaimyycouuq;
        yeemeukcggweaowa:
    }
    
    public function umacyowesakeiewk($wisgiwskwawciiee, $aiooqyausygaasqm, $oiegiwogmwmawkeo)
    {
        goto ywumciccwiakyeus;
        ywumciccwiakyeus:
        if (!$this->iigcaickwcykouca($aiooqyausygaasqm)) {
            goto weaqamgsuuwuouks;
        }
        goto qwsioymycmywyqiw;
        oummiciwcqkwymss:
        $qaiwqwwemmyyqosy = ManipulateAttachment::iuwsgyqakicakuoq($oiegiwogmwmawkeo);
        goto omkkomymwsowywwa;
        kkeiscyscckuuqci:
        $cswemwoyesycwkuq = ManipulateArray::get($qaiwqwwemmyyqosy, "\150\145\x69\x67\150\x74");
        goto myaeiwowqwegogmq;
        eiqawcsoocuowioo:
        if (!$qaiwqwwemmyyqosy) {
            goto iuiyqyiwisggcywk;
        }
        goto kkeiscyscckuuqci;
        mwucaqouymaweuck:
        $wisgiwskwawciiee["\150\x65\x69\x67\150\x74"] = 80;
        goto eyaciqqycmmgoski;
        qiaayoymqmmemiiy:
        $cswemwoyesycwkuq = 100;
        goto oummiciwcqkwymss;
        qwsioymycmywyqiw:
        $qeswwaqqsyymqawg = 100;
        goto qiaayoymqmmemiiy;
        myaeiwowqwegogmq:
        $qeswwaqqsyymqawg = ManipulateArray::get($qaiwqwwemmyyqosy, "\x77\151\x64\164\150");
        goto yauqmqauoqwymcsu;
        oqgomigmmsikougi:
        
        goto egamwswskucyocos;
        yauqmqauoqwymcsu:
        iuiyqyiwisggcywk:
        goto mwucaqouymaweuck;
        qmwomemuqyaimiso:
        $qaiwqwwemmyyqosy = $this->qaeakmimoqkugagk(ManipulateAttachment::ckoygqywcuqasqea($aiooqyausygaasqm));
        goto awggeauumiqymcoi;
        yaecoyqgimisqywa:
        return $wisgiwskwawciiee;
        goto emouoksmeamyiikc;
        omkkomymwsowywwa:
        if ($qaiwqwwemmyyqosy) {
            goto wyucqqggakoceowc;
        }
        goto qmwomemuqyaimiso;
        eyaciqqycmmgoski:
        
        $wisgiwskwawciiee["\x77\151\144\164\150"] = 80;
        goto oqgomigmmsikougi;
        awggeauumiqymcoi:
        wyucqqggakoceowc:
        goto eiqawcsoocuowioo;
        egamwswskucyocos:
        weaqamgsuuwuouks:
        goto yaecoyqgimisqywa;
        emouoksmeamyiikc:
    }
    
    public function iigcaickwcykouca($aiooqyausygaasqm) : bool
    {
        return self::SVG_MIME_TYPE === ManipulateAttachment::ikocqgeqiykwwyqs($aiooqyausygaasqm);
    }
}
