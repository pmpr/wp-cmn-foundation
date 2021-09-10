<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b3993be3fb             |
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
    const SVG_MIME_TYPE = "\151\155\141\147\x65\57\163\x76\x67\53\x78\155\x6c";
    
    public ?Sanitizer $sanitizer = null;
    public function __construct()
    {
        goto ksuoesmcewiqukgy;
        cuacsemcmuyaokge:
        
        $umcwwewscqegoqoe->minify(true);
        goto aoqqweiisiaekqsk;
        kwkeiomeuququaoy:
        parent::__construct();
        goto giqysmgscwwqgmqe;
        ksuoesmcewiqukgy:
        $umcwwewscqegoqoe = new Sanitizer();
        goto cuacsemcmuyaokge;
        aoqqweiisiaekqsk:
        $this->sanitizer = $umcwwewscqegoqoe;
        goto kwkeiomeuququaoy;
        giqysmgscwwqgmqe:
    }
    public function wigskegsqequoeks()
    {
        $this->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\x61\144\x64\x5f\164\167\151\147\137\146\x75\x6e\x63\164\x69\157\156\x73"), [$this, "\145\165\145\145\x79\x65\155\x67\x6b\145\171\143\x65\151\163\x61"])->qcsmikeggeemccuu("\147\x65\x74\137\151\x6d\141\x67\145\137\x74\141\x67", [$this, "\x63\x67\151\x61\153\141\143\143\153\155\x63\141\161\147\x69\153"], 10, 6);
        parent::wigskegsqequoeks();
    }
    public function kgquecmsgcouyaya()
    {
        $this->cecaguuoecmccuse("\165\x70\154\157\141\x64\x5f\x6d\151\155\145\x73", [$this, "\147\x67\167\x63\145\161\167\x65\145\x61\141\x63\x77\157\151\163"])->cecaguuoecmccuse("\x77\160\x5f\150\141\156\x64\x6c\145\x5f\165\x70\154\157\x61\144\137\160\162\x65\x66\x69\x6c\164\145\x72", [$this, "\155\x65\x6b\x65\165\167\x69\x65\143\x69\x71\x79\155\141\x69\x6f"])->cecaguuoecmccuse("\163\166\147\x5f\x61\x74\164\x72\151\x62\x75\164\x65\163", [$this, "\x6d\161\x79\x61\x63\167\141\141\x6f\143\147\143\163\171\141\147"], 999)->cecaguuoecmccuse("\167\160\137\143\x68\145\x63\153\x5f\x66\151\x6c\x65\164\x79\x70\x65\137\x61\156\144\x5f\145\170\164", [$this, "\x61\153\x69\157\x6f\x79\141\x75\x6b\x67\x79\165\155\x63\x6d\165"], 75, 4)->cecaguuoecmccuse("\141\144\x6d\151\156\137\160\x6f\x73\x74\x5f\164\x68\165\x6d\142\x6e\141\151\x6c\137\150\164\x6d\x6c", [$this, "\157\x75\141\165\171\x79\141\153\145\x61\x75\141\x71\x71\x69\x6b"], 10, 3)->cecaguuoecmccuse("\167\x70\x5f\x67\x65\164\x5f\141\164\164\141\x63\x68\x6d\x65\156\164\137\155\145\x74\141\x64\141\x74\141", [$this, "\167\x71\171\161\x69\163\x67\143\171\145\x77\x69\155\x6f\141\151"], 10, 2)->cecaguuoecmccuse("\x77\x70\x5f\x70\162\x65\x70\x61\162\x65\137\141\x74\x74\141\143\150\x6d\x65\x6e\x74\x5f\146\x6f\x72\137\x6a\163", [$this, "\x73\153\x6b\x67\x77\167\153\171\155\x6f\x6f\161\161\x61\167\155"], 10, 2)->cecaguuoecmccuse("\x77\160\x5f\x67\145\x6e\x65\162\141\164\x65\137\x61\x74\x74\x61\143\150\155\x65\156\x74\x5f\x6d\145\x74\x61\144\141\x74\141", [$this, "\x79\x77\147\165\141\x6d\x61\151\x69\x79\x61\x67\141\167\x73\143"], 10, 2)->cecaguuoecmccuse("\x69\155\141\x67\x65\x5f\165\x70\x6c\x6f\x61\x64\x5f\146\x69\x6c\x74\x65\162\137\x65\170\x63\x6c\x75\x64\145", [$this, "\161\x71\153\157\x77\163\x63\141\157\x6f\x75\143\x6b\x65\147\157"], 10, 2)->cecaguuoecmccuse($this->ygyygikyocoymgaw("\141\164\164\x61\143\150\x6d\x65\156\x74\x5f\x69\163\137\163\x76\147"), [$this, "\x65\147\165\x6f\x6b\x77\x71\141\155\x63\143\x77\x63\x71\157\155"], 10, 2)->cecaguuoecmccuse("\x77\160\137\x67\145\x74\x5f\x61\164\x74\141\x63\150\155\145\x6e\164\137\151\x6d\x61\147\145\137\x61\x74\x74\x72\x69\142\x75\164\145\x73", [$this, "\x79\x63\x79\161\x6b\147\x63\151\147\147\157\x61\147\x61\147\x67"], 10, 3);
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
        gqcosoeyaqmyccca:
        if (!(!isset($siquossayskcwkea["\x68\x65\151\x67\x68\164"]) && !isset($siquossayskcwkea["\167\151\x64\x74\150"]))) {
            goto qaeqsckgkimiuwca;
        }
        goto skegiiomcggeymuw;
        smmagsweysscecce:
        qaeqsckgkimiuwca:
        goto iiogyckwmaouswqy;
        iiogyckwmaouswqy:
        return $siquossayskcwkea;
        goto qyckwskcewqioqyk;
        guoqssciqoegywsg:
        $siquossayskcwkea = $this->kguoyqackakgysoy($siquossayskcwkea);
        goto gqcosoeyaqmyccca;
        skegiiomcggeymuw:
        $siquossayskcwkea["\150\145\151\147\x68\164"] = 100;
        goto oqumomyawuuomquy;
        oqumomyawuuomquy:
        $siquossayskcwkea["\x77\x69\x64\x74\150"] = 100;
        goto smmagsweysscecce;
        qyckwskcewqioqyk:
    }
    
    public function kguoyqackakgysoy($siquossayskcwkea, $uuossqmuccwyiemo = 16)
    {
        goto yikaqawiqaokyqgw;
        qgmegqweacumuccw:
        eeicwkoeaqmaoywm:
        goto cumoewcksgaqwwoo;
        coawukgoisakmosc:
        $wyicceigkekkkwgs = (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\163\166\147\137\145\x6c\x65\155\x65\156\164\137\x63\x6c\141\x73\163\x5f\162\141\x74\x69\157\x6e\x5f\x63\x6f\156\x76\145\162\x74\145\162"), []);
        goto eqiqgwqscsswkmwk;
        eqiqgwqscsswkmwk:
        if (!$wyicceigkekkkwgs) {
            goto eeicwkoeaqmaoywm;
        }
        goto aymkogwsagaggsem;
        emoaoyuqmmymmwkq:
        foreach ($wyicceigkekkkwgs as $oiegiwogmwmawkeo => $eqgoocgaqwqcimie) {
            goto oayiqwmaaukkuimy;
            okwsycyoqycgwaco:
            $siquossayskcwkea["\150\x65\x69\x67\150\164"] = intval($eqgoocgaqwqcimie);
            goto euemimammkmwkuwk;
            kgeiskysuuasqckq:
            oimegoemmuwwwkyo:
            goto cwccwmggqyeeggwe;
            ucoikisgieeseyqo:
            $siquossayskcwkea["\x77\151\144\164\150"] = intval($eqgoocgaqwqcimie[0] * $uuossqmuccwyiemo);
            goto gmmaicwkwqiywwyc;
            isgiyocowwwceaoa:
            ecmiggsmgmeaaqug:
            goto ucoikisgieeseyqo;
            gkoasaqwwqsgwqgo:
            $siquossayskcwkea["\x77\x69\x64\x74\150"] = intval($eqgoocgaqwqcimie);
            goto okwsycyoqycgwaco;
            kgogceiykkokkgeg:
            $eqgoocgaqwqcimie *= $uuossqmuccwyiemo;
            goto gkoasaqwwqsgwqgo;
            oayiqwmaaukkuimy:
            if (!(strpos($egkyssmuqcwaciya, $oiegiwogmwmawkeo) !== false)) {
                goto oimegoemmuwwwkyo;
            }
            goto eiwkyioqeaaemqsa;
            eiwkyioqeaaemqsa:
            if (is_array($eqgoocgaqwqcimie)) {
                goto ecmiggsmgmeaaqug;
            }
            goto kgogceiykkokkgeg;
            cwccwmggqyeeggwe:
            gcwikewmwkqsugms:
            goto seocecaioucmugky;
            gmmaicwkwqiywwyc:
            $siquossayskcwkea["\x68\x65\151\147\150\164"] = intval($eqgoocgaqwqcimie[1] * $uuossqmuccwyiemo);
            goto goouowwycoakigim;
            goouowwycoakigim:
            qaoooeioqwiiceyq:
            goto aasuycoysaucuaaq;
            aasuycoysaucuaaq:
            goto eagggcysqeeaeose;
            goto kgeiskysuuasqckq;
            euemimammkmwkuwk:
            goto qaoooeioqwiiceyq;
            goto isgiyocowwwceaoa;
            seocecaioucmugky:
        }
        goto semoowiyeimkyeuc;
        kuiomeesyokwsgio:
        return $siquossayskcwkea;
        goto yescggaseyimocqu;
        semoowiyeimkyeuc:
        eagggcysqeeaeose:
        goto qgmegqweacumuccw;
        aymkogwsagaggsem:
        if (!(!is_numeric($uuossqmuccwyiemo) || $uuossqmuccwyiemo < 1)) {
            goto wkoqomessckkgeua;
        }
        goto eqggkouoswesgwya;
        eqggkouoswesgwya:
        $uuossqmuccwyiemo = 16;
        goto icoooiwmiusyeaes;
        icoooiwmiusyeaes:
        wkoqomessckkgeua:
        goto emoaoyuqmmymmwkq;
        askiamwsewkaqwoi:
        if (!$egkyssmuqcwaciya) {
            goto iwemkuaseiooqoqg;
        }
        goto coawukgoisakmosc;
        yikaqawiqaokyqgw:
        $egkyssmuqcwaciya = ManipulateArray::get($siquossayskcwkea, "\x63\154\141\163\163");
        goto askiamwsewkaqwoi;
        cumoewcksgaqwwoo:
        iwemkuaseiooqoqg:
        goto kuiomeesyokwsgio;
        yescggaseyimocqu:
    }
    
    public function qqkowscaoouckego($couiucmsqaieciue = [])
    {
        $couiucmsqaieciue[] = self::SVG_MIME_TYPE;
        return $couiucmsqaieciue;
    }
    
    public function eueeyemgkeyceisa($eyoesceegakeygsi)
    {
        $eyoesceegakeygsi->kmmegqceukkkawme("\151\163\x5f\163\x76\x67", function ($aiooqyausygaasqm) {
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
        ywgyaqcqgosmigae:
        $yawwowoqosismgyq["\163\x76\147"] = self::SVG_MIME_TYPE;
        goto gsoyaqsaauaokukc;
        msaegiggioiykouc:
        return $yawwowoqosismgyq;
        goto uymqoeqgwwkeiuok;
        gsoyaqsaauaokukc:
        $yawwowoqosismgyq["\x73\166\x67\172"] = self::SVG_MIME_TYPE;
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
        oeaskyqueyagqcmc:
        ManipulateArray::unset($wwgucssaecqekuek, ["\x73\x72\x63\163\145\x74", "\x73\x69\172\145\x73"]);
        goto ckcesgcceqqqieem;
        mmqsgsuycqioemgo:
        return $wwgucssaecqekuek;
        goto qqyeogaouscuaikw;
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
        oesqomwsgwmckgsq:
        try {
            goto swkmkgmucceyweie;
            eiiqicyywgugksuc:
            $aqykuigiuwmmcieu = DOMCrawler::igmaewykumgwoaoy($ewgwqamkygiqaawc, ["\163\x76\147" => ["\x63\x6c\141\x73\163" => $egkyssmuqcwaciya]]);
            goto sugmgeiemuygeoce;
            mcccguiaquiickwq:
            $ewgwqamkygiqaawc = $this->kcciqwskewsuaemk()->souwykwwmyygqyqi($qogsmwakwacwqogk);
            goto quwwquywcuyiiweo;
            quwwquywcuyiiweo:
            $ewgwqamkygiqaawc = preg_replace("\x2f\x3c\x5c\77\x78\x6d\154\x2e\52\77\x5c\77\x3e\x2f", '', $ewgwqamkygiqaawc);
            goto eiiqicyywgugksuc;
            aooeykwscmqgouay:
            $qogsmwakwacwqogk = ManipulateAttachment::ygwimyogyaqgumam($aokagokqyuysuksm);
            goto mcccguiaquiickwq;
            swkmkgmucceyweie:
            $egkyssmuqcwaciya = DOMCrawler::waecsyqmwascmqoa($nsmgceoqaqogqmuw, "\151\155\x67", "\x63\154\x61\163\x73");
            goto aooeykwscmqgouay;
            sugmgeiemuygeoce:
        } catch (Exception $wgaoewqkwgomoaai) {
            $aqykuigiuwmmcieu = $nsmgceoqaqogqmuw;
        }
        goto wswmegcumomiwaqo;
        wswmegcumomiwaqo:
        soeggysyusqoiwwg:
        goto wsouygqoeyuksock;
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
        yqewusaguumeiqyq:
        $yucgcsieomwqgwws = strtolower(end($ukequsueuukqgaca));
        goto kwwgmsmuoeysguwq;
        yigecwqswuowoakm:
        $icwicymcioeyeyek["\x65\x78\x74"] = $yucgcsieomwqgwws;
        goto aqguswuomiqimcwy;
        qssyiieuymmiwicm:
        $yucgcsieomwqgwws = isset($icwicymcioeyeyek["\x65\x78\x74"]) ? $icwicymcioeyeyek["\x65\170\x74"] : '';
        goto kuyuwimysoqcmgek;
        gocwgeomykcekcso:
        return $icwicymcioeyeyek;
        goto kggwiioyiqgskcem;
        qeaugewkiwmkoaas:
        if (!in_array($yucgcsieomwqgwws, ["\x73\x76\147", "\163\x76\x67\172"])) {
            goto swgecgeeeaaakgss;
        }
        goto cgmgikoumekoyyae;
        kwwgmsmuoeysguwq:
        scageqmiwcyqmmmk:
        goto qeaugewkiwmkoaas;
        fosuiwomyuwkaisi:
        $ukequsueuukqgaca = explode("\56", $wkcwykowmmmwioqs);
        goto yqewusaguumeiqyq;
        aqguswuomiqimcwy:
        swgecgeeeaaakgss:
        goto gocwgeomykcekcso;
        cgmgikoumekoyyae:
        $icwicymcioeyeyek["\164\x79\160\145"] = self::SVG_MIME_TYPE;
        goto yigecwqswuowoakm;
        kggwiioyiqgskcem:
    }
    
    public function mekeuwieciqymaio($qogsmwakwacwqogk)
    {
        goto oimaymokouuwueum;
        eucsyaygqqcqamus:
        $qogsmwakwacwqogk["\145\162\162\157\x72"] = __("\x53\x6f\162\x72\x79\54\x20\164\x68\151\163\x20\146\151\x6c\x65\40\x63\157\165\x6c\144\x6e\47\x74\x20\142\x65\40\163\141\x6e\x69\x74\x69\172\145\144\x20\163\157\x20\x66\157\162\x20\x73\145\x63\x75\162\x69\x74\171\40\162\145\141\x73\x6f\156\163\x20\167\x61\x73\x6e\47\164\x20\165\160\x6c\157\141\x64\145\x64", PR__CMN__FOUNDATION);
        goto iaqwisciugaosygy;
        oimaymokouuwueum:
        if (!($qogsmwakwacwqogk["\164\x79\160\x65"] === self::SVG_MIME_TYPE)) {
            goto kyswigcwgusmesqi;
        }
        goto cgsawegeqqsecwam;
        uoqequmkiyukiqgi:
        kyswigcwgusmesqi:
        goto qwikcqiaiumsswow;
        qwikcqiaiumsswow:
        return $qogsmwakwacwqogk;
        goto ukggweysgiiygqsa;
        iaqwisciugaosygy:
        emwggqiqcmmqeawy:
        goto uoqequmkiyukiqgi;
        cgsawegeqqsecwam:
        if ($this->yiiiqewsseywemqu($qogsmwakwacwqogk["\164\155\x70\x5f\x6e\x61\155\145"])) {
            goto emwggqiqcmmqeawy;
        }
        goto eucsyaygqqcqamus;
        ukggweysgiiygqsa:
    }
    
    public function skkgwwkymooqqawm($keccaugmemegoimu, $aiooqyausygaasqm) : array
    {
        goto ysmessckmysogeua;
        iqiwimyamykmuiwo:
        if (!$qaiwqwwemmyyqosy) {
            goto iekecmawqyigmqcg;
        }
        goto egyuciuossumacuy;
        qmsyaycokgmmwycs:
        foreach ($possible_sizes as $oiegiwogmwmawkeo => $pkyyagewkiyckmwy) {
            goto cocwomcoymcaqgky;
            cocwomcoymcaqgky:
            $default_height = 2000;
            goto ukygqcaqcaqqmyew;
            wqgecqaciyakecys:
            $wyicceigkekkkwgs[$oiegiwogmwmawkeo] = ["\150\145\151\x67\x68\164" => DecoratorOption::get("{$oiegiwogmwmawkeo}\137\x73\x69\172\145\x5f\x77", $default_height), "\x77\151\144\164\150" => DecoratorOption::get("{$oiegiwogmwmawkeo}\x5f\163\151\172\145\x5f\150", $default_width), "\165\162\x6c" => $keccaugmemegoimu["\x75\162\154"], "\x6f\x72\x69\145\156\164\141\164\x69\157\156" => "\x70\x6f\x72\x74\x72\141\151\x74"];
            goto wqmgwcsuccoweocq;
            yemwekyegaywgoug:
            oeeakgukqusiqswc:
            goto wqgecqaciyakecys;
            ymiosikicyqkaiaa:
            if (!("\146\165\x6c\x6c" === $oiegiwogmwmawkeo && $qaiwqwwemmyyqosy)) {
                goto oeeakgukqusiqswc;
            }
            goto moeeimaaoaycycmi;
            wqmgwcsuccoweocq:
            iuiawwoouuwwiqca:
            goto oyeswuecyaiiawyg;
            ukygqcaqcaqqmyew:
            $default_width = 2000;
            goto ymiosikicyqkaiaa;
            mggyiwyuuiwswaks:
            $default_width = $qaiwqwwemmyyqosy["\167\x69\x64\x74\150"];
            goto yemwekyegaywgoug;
            moeeimaaoaycycmi:
            $default_height = $qaiwqwwemmyyqosy["\x68\145\x69\147\150\164"];
            goto mggyiwyuuiwswaks;
            oyeswuecyaiiawyg:
        }
        goto geqakgsumkyosuca;
        egyuciuossumacuy:
        $keccaugmemegoimu = array_merge($keccaugmemegoimu, $qaiwqwwemmyyqosy);
        goto egwuecigeyuooiam;
        qicekkeggigkwqeu:
        $keccaugmemegoimu["\163\151\172\x65\163"] = $wyicceigkekkkwgs;
        goto moyqaggmqqimwusm;
        moyqaggmqqimwusm:
        $keccaugmemegoimu["\151\x63\x6f\x6e"] = $keccaugmemegoimu["\x75\162\x6c"];
        goto kawgkswoygkmgmao;
        ysmessckmysogeua:
        if (!($keccaugmemegoimu["\x6d\151\155\x65"] == self::SVG_MIME_TYPE)) {
            goto kkscsmuyumawosyc;
        }
        goto giiqogwyoikiiqyi;
        suewugkisoommmgy:
        return $keccaugmemegoimu;
        goto tsywwmwawwgcwmuc;
        geqakgsumkyosuca:
        wsawmoiaemkggocs:
        goto qicekkeggigkwqeu;
        egwuecigeyuooiam:
        iekecmawqyigmqcg:
        goto sieccokukwgmuggw;
        sieccokukwgmuggw:
        $possible_sizes = $this->sscegwueamckwmcy("\x69\x6d\141\147\145\x5f\x73\151\172\x65\x5f\x6e\141\x6d\x65\x73\137\143\x68\x6f\157\163\145", ["\x66\165\x6c\x6c" => __("\106\x75\154\154\x20\123\151\x7a\x65", PR__CMN__FOUNDATION), "\x74\x68\165\155\142\156\141\151\154" => __("\x54\150\165\x6d\x62\x6e\141\151\x6c", PR__CMN__FOUNDATION), "\x6d\x65\144\x69\165\x6d" => __("\115\145\144\151\x75\155", PR__CMN__FOUNDATION), "\154\x61\x72\147\x65" => __("\114\141\x72\147\145", PR__CMN__FOUNDATION)]);
        goto yqckgyeeuyayosww;
        kawgkswoygkmgmao:
        kkscsmuyumawosyc:
        goto suewugkisoommmgy;
        giiqogwyoikiiqyi:
        $qaiwqwwemmyyqosy = $this->qaeakmimoqkugagk(ManipulateAttachment::ckoygqywcuqasqea($aiooqyausygaasqm));
        goto iqiwimyamykmuiwo;
        yqckgyeeuyayosww:
        $wyicceigkekkkwgs = [];
        goto qmsyaycokgmmwycs;
        tsywwmwawwgcwmuc:
    }
    
    protected function yiiiqewsseywemqu($qogsmwakwacwqogk)
    {
        goto icqaiqyewuyegkeq;
        moeseousgukmygmy:
        $yeueggiecgqcswqm = gzdecode($yeueggiecgqcswqm);
        goto xaiaogcwcaeweoiu;
        aqyimgoegakwgoum:
        
        if (!$yuoaskweqogoasgc) {
            goto eookussqeicycoio;
        }
        goto qmiouyoeguiqymgi;
        ogwaiqiccywqqiwk:
        return false;
        goto wsomqsmeououqiwu;
        noswwaawyacomwyo:
        eookussqeicycoio:
        goto wcoekawkkswkgamc;
        eouugaqkgamwmgmo:
        qeggwmykewcoieic:
        goto weocosykwsaimaks;
        qmiouyoeguiqymgi:
        $qawsmigsyysqwmeq = gzencode($qawsmigsyysqwmeq);
        goto noswwaawyacomwyo;
        weocosykwsaimaks:
        
        $qawsmigsyysqwmeq = $this->sanitizer->sanitize($yeueggiecgqcswqm);
        goto gmywmsmiayimqygy;
        eakoykqcmyemgyum:
        ieauiumamygiuckc:
        goto aqyimgoegakwgoum;
        wsomqsmeououqiwu:
        qucoecmmmacqooek:
        goto eouugaqkgamwmgmo;
        xaiaogcwcaeweoiu:
        
        if (!($yeueggiecgqcswqm === false)) {
            goto qucoecmmmacqooek;
        }
        goto ogwaiqiccywqqiwk;
        dmwmgeswweekqyuw:
        
        if (!($yuoaskweqogoasgc = $this->wsggsqigawogiwky($yeueggiecgqcswqm))) {
            goto qeggwmykewcoieic;
        }
        goto moeseousgukmygmy;
        icqaiqyewuyegkeq:
        $yeueggiecgqcswqm = $this->kcciqwskewsuaemk()->souwykwwmyygqyqi($qogsmwakwacwqogk);
        goto dmwmgeswweekqyuw;
        wcoekawkkswkgamc:
        return $this->kcciqwskewsuaemk()->kwsmkgyoyaqecwuu($qogsmwakwacwqogk, $qawsmigsyysqwmeq);
        goto uqwsiocauuswgwok;
        kcaysyweukeimoik:
        return false;
        goto eakoykqcmyemgyum;
        gmywmsmiayimqygy:
        if (!($qawsmigsyysqwmeq === false)) {
            goto ieauiumamygiuckc;
        }
        goto kcaysyweukeimoik;
        uqwsiocauuswgwok:
    }
    
    protected function wsggsqigawogiwky($ygwoqcwsaggqoamw)
    {
        goto giueuuwusgmgeick;
        wskcqwywmwmwigce:
        goto oqyosskkgcuckmes;
        goto iiuwcsgwcguceiko;
        emucccmcoiwcyioq:
        oqyosskkgcuckmes:
        goto yigmeqsygwgioyaa;
        giueuuwusgmgeick:
        if (function_exists("\x6d\x62\137\163\x74\162\160\157\163")) {
            goto iisgwcgceeygauyk;
        }
        goto eksamuqymmeumqsg;
        eksamuqymmeumqsg:
        return 0 === strpos($ygwoqcwsaggqoamw, "\37" . "\213" . "\10");
        goto wskcqwywmwmwigce;
        iiuwcsgwcguceiko:
        iisgwcgceeygauyk:
        goto wkycksmmuskouies;
        wkycksmmuskouies:
        return 0 === mb_strpos($ygwoqcwsaggqoamw, "\37" . "\x8b" . "\10");
        goto emucccmcoiwcyioq;
        yigmeqsygwgioyaa:
    }
    
    public function oowwkoeekmwwgieu($mcqieaigyeeyaksm, $aiooqyausygaasqm, $oiegiwogmwmawkeo)
    {
        goto cmqocusuososcwqk;
        cmqocusuososcwqk:
        if (!$this->iigcaickwcykouca($aiooqyausygaasqm)) {
            goto awgamseuywgciius;
        }
        goto eswgqkmomsiauqqy;
        eswgqkmomsiauqqy:
        $gkiuoymeukweiaaw = ManipulateAttachment::iuwsgyqakicakuoq($oiegiwogmwmawkeo);
        goto qoysygagyigwsiwm;
        uyowywywqeagqcuw:
        
        
        goto umekgwemiaygomky;
        maycimoaceiiuemu:
        $qeswwaqqsyymqawg = ManipulateAttachment::get($gkiuoymeukweiaaw, "\x77\151\144\164\150");
        goto aesukugmkcsuocwc;
        qoysygagyigwsiwm:
        $cswemwoyesycwkuq = false;
        goto yqwkgwucqwqyuqmw;
        aesukugmkcsuocwc:
        iwciaqcioigqwiys:
        goto uyowywywqeagqcuw;
        icckscyoesgiyksu:
        if (!$gkiuoymeukweiaaw) {
            goto iwciaqcioigqwiys;
        }
        goto uyyieiuceauoecyq;
        uyyieiuceauoecyq:
        $cswemwoyesycwkuq = ManipulateAttachment::get($gkiuoymeukweiaaw, "\x68\x65\151\147\x68\x74");
        goto maycimoaceiiuemu;
        aoewemyqigugysua:
        return $mcqieaigyeeyaksm;
        goto egauqkuumkisssaa;
        yqwkgwucqwqyuqmw:
        $qeswwaqqsyymqawg = false;
        goto icckscyoesgiyksu;
        umekgwemiaygomky:
        awgamseuywgciius:
        goto aoewemyqigugysua;
        egauqkuumkisssaa:
    }
    
    public function ouauyyakeauaqqik($ewgwqamkygiqaawc, $post_id, $thumbnail_id)
    {
        goto yguicqcomwueokwm;
        wicguyksogckqums:
        kqsyuyukgswmwcys:
        goto kyaysckiwskgogci;
        kyaysckiwskgogci:
        return $ewgwqamkygiqaawc;
        goto eageyyymyekskmue;
        yguicqcomwueokwm:
        if (!$this->iigcaickwcykouca($thumbnail_id)) {
            goto kqsyuyukgswmwcys;
        }
        goto aikuwguwuiekouoo;
        aikuwguwuiekouoo:
        $ewgwqamkygiqaawc = DOMCrawler::igmaewykumgwoaoy($ewgwqamkygiqaawc, ["\x69\x6d\x67\54\x20\x61" => ["\x63\x6c\x61\163\x73" => "\167\55\x31\60\x30"]]);
        goto wicguyksogckqums;
        eageyyymyekskmue:
    }
    
    public function cgiakacckmcaqgik($nsmgceoqaqogqmuw, $aokagokqyuysuksm, $gkykacccamuwowwc, $meqocwsecsywiiqs, $ioogmuawkgcgmkia, $oiegiwogmwmawkeo)
    {
        goto mgocagiwqsgaisyq;
        sacmqsciuaucgaww:
        $cswemwoyesycwkuq = $oiegiwogmwmawkeo[1];
        goto mqywccygymoeaoym;
        cmsyegseqcwmyycy:
        cooiowgwqgssuqcw:
        goto wiiaiqiomosmyuwq;
        qsuyqoeocsmkomwy:
        $cswemwoyesycwkuq = $qaiwqwwemmyyqosy["\150\x65\x69\x67\150\x74"];
        goto ioyyiaguqyiaeaqs;
        ywyqmwuswkcoyqsy:
        goto ygaggwgwiceegasy;
        goto musiyggyqaiwwouu;
        caocoiecwueosoig:
        $qeswwaqqsyymqawg = $qaiwqwwemmyyqosy["\167\x69\144\164\150"];
        goto qsuyqoeocsmkomwy;
        wiiaiqiomosmyuwq:
        $nsmgceoqaqogqmuw = str_replace("\x77\151\x64\164\x68\x3d\42\x31\x22\x20", sprintf("\x77\x69\x64\164\150\x3d\42\45\x73\x22\40", $qeswwaqqsyymqawg), $nsmgceoqaqogqmuw);
        goto sccaumocseyiqsue;
        wayyiemaccqkmqeg:
        if ("\146\165\154\154" == $oiegiwogmwmawkeo && ($qaiwqwwemmyyqosy = $this->qaeakmimoqkugagk(ManipulateAttachment::ckoygqywcuqasqea($aokagokqyuysuksm)))) {
            goto qkycyqgwwoiuaomq;
        }
        goto yygqgeukeuaciewa;
        iwawqgcgskysqyaa:
        goto csmqeagwuisqiuym;
        goto agaomyyqaaswykui;
        ooccckeeomycucao:
        $nsmgceoqaqogqmuw = str_replace("\57\76", "\40\162\157\x6c\145\75\x22\151\155\147\42\x20\57\x3e", $nsmgceoqaqogqmuw);
        goto cwmkgosooecsywcm;
        kysaqkaiksosyegu:
        $cswemwoyesycwkuq = DecoratorOption::get("{$oiegiwogmwmawkeo}\x5f\163\x69\172\x65\x5f\150", false);
        goto iwawqgcgskysqyaa;
        wiomewyyumkmwsum:
        if ($cswemwoyesycwkuq && $qeswwaqqsyymqawg) {
            goto cooiowgwqgssuqcw;
        }
        goto uacekkwiaagmuieg;
        mgocagiwqsgaisyq:
        if (!$this->iigcaickwcykouca($aokagokqyuysuksm)) {
            goto meyowgukekkkkuqe;
        }
        goto wkumckmusackacmi;
        sccaumocseyiqsue:
        $nsmgceoqaqogqmuw = str_replace("\x68\145\x69\147\150\x74\75\42\x31\42\40", sprintf("\150\x65\x69\147\150\164\75\x22\x25\x73\42\x20", $cswemwoyesycwkuq), $nsmgceoqaqogqmuw);
        goto cmmoyuuegqguakga;
        musiyggyqaiwwouu:
        ccymqyyaikauqaiq:
        goto imymswaceomsasks;
        gawswamyawcmsmei:
        goto uyouccoiyogmuwey;
        goto cmsyegseqcwmyycy;
        agaomyyqaaswykui:
        qkycyqgwwoiuaomq:
        goto caocoiecwueosoig;
        mqywccygymoeaoym:
        ygaggwgwiceegasy:
        goto wiomewyyumkmwsum;
        uacekkwiaagmuieg:
        $nsmgceoqaqogqmuw = str_replace("\167\151\x64\x74\x68\75\42\61\x22\40", '', $nsmgceoqaqogqmuw);
        goto seiysueoskimiaam;
        wkumckmusackacmi:
        if (is_array($oiegiwogmwmawkeo)) {
            goto ccymqyyaikauqaiq;
        }
        goto wayyiemaccqkmqeg;
        ooqwuoiqmiswgkyu:
        return $nsmgceoqaqogqmuw;
        goto uieeaeqciogamoqe;
        yygqgeukeuaciewa:
        $qeswwaqqsyymqawg = DecoratorOption::get("{$oiegiwogmwmawkeo}\137\163\151\172\x65\x5f\x77", false);
        goto kysaqkaiksosyegu;
        ioyyiaguqyiaeaqs:
        csmqeagwuisqiuym:
        goto ywyqmwuswkcoyqsy;
        cwmkgosooecsywcm:
        meyowgukekkkkuqe:
        goto ooqwuoiqmiswgkyu;
        cmmoyuuegqguakga:
        uyouccoiyogmuwey:
        goto ooccckeeomycucao;
        seiysueoskimiaam:
        $nsmgceoqaqogqmuw = str_replace("\150\145\x69\147\x68\x74\x3d\42\x31\42\40", '', $nsmgceoqaqogqmuw);
        goto gawswamyawcmsmei;
        imymswaceomsasks:
        $qeswwaqqsyymqawg = $oiegiwogmwmawkeo[0];
        goto sacmqsciuaucgaww;
        uieeaeqciogamoqe:
    }
    
    public function ywguamaiiyagawsc($kuguwoaesuqsqysu, $attachment_id)
    {
        goto eiwcgwomusuokygg;
        oeyyasumsgwocquw:
        $additional_image_sizes = wp_get_additional_image_sizes();
        goto oqmeeqioiooguikk;
        oimwgecwwecuugwq:
        $kuguwoaesuqsqysu["\x73\151\172\145\x73"] = $wyicceigkekkkwgs;
        goto ycyoioowuumgwkuk;
        wiouwokmcckqekqy:
        usasekcgsyyqymgy:
        goto oimwgecwwecuugwq;
        wqaiocgoqsqogmcm:
        return $kuguwoaesuqsqysu;
        goto ccwsuiigukoykcew;
        ycyoioowuumgwkuk:
        yksgcagiyukouics:
        goto wqaiocgoqsqogmcm;
        csgqcskywiqwyocw:
        return $kuguwoaesuqsqysu;
        goto suicqccekqckayec;
        eiwcgwomusuokygg:
        if (!$this->iigcaickwcykouca($attachment_id)) {
            goto yksgcagiyukouics;
        }
        goto oeyyasumsgwocquw;
        ksqcmyaawiiiimco:
        $qaiwqwwemmyyqosy = $this->qaeakmimoqkugagk($svg_path);
        goto ysqokomouwswymck;
        ssquocgwsassuike:
        
        $wyicceigkekkkwgs = [];
        goto uommmgequgiiykci;
        caammwwkqeeemaok:
        $wkcwykowmmmwioqs = basename($svg_path);
        goto ksqcmyaawiiiimco;
        ysqokomouwswymck:
        if ($qaiwqwwemmyyqosy) {
            goto wmskawmisgksegwe;
        }
        goto csgqcskywiqwyocw;
        ggwyamakeyyieeog:
        $upload_dir = DecoratorFile::oemywwmmmiywiqai();
        goto ssaeeugeycyaaaki;
        sqqcaugoikagoykc:
        $kuguwoaesuqsqysu = ["\x77\x69\144\x74\150" => intval($qaiwqwwemmyyqosy["\167\151\x64\164\x68"]), "\150\x65\x69\x67\150\164" => intval($qaiwqwwemmyyqosy["\x68\145\151\147\150\164"]), "\146\x69\x6c\145" => $relative_path];
        goto ssquocgwsassuike;
        suicqccekqckayec:
        wmskawmisgksegwe:
        goto sqqcaugoikagoykc;
        uommmgequgiiykci:
        foreach (get_intermediate_image_sizes() as $piuesceqiguuskme) {
            goto mekaesaeskqmgqii;
            mekaesaeskqmgqii:
            $wyicceigkekkkwgs[$piuesceqiguuskme] = ["\167\151\x64\164\x68" => '', "\x68\145\151\147\150\164" => '', "\x63\x72\157\x70" => false];
            goto kuigwocyaagakags;
            cacaysyqsqaauawm:
            iymwycosumimggmu:
            goto iosymaiumakyyaos;
            miiaowmiyoemouke:
            
            $wyicceigkekkkwgs[$piuesceqiguuskme]["\167\151\144\164\x68"] = DecoratorOption::get("{$piuesceqiguuskme}\x5f\163\x69\172\145\x5f\x77");
            goto auoaywowugkacsia;
            isgceyiuweaueqeu:
            uqggmkmmysmeqkmy:
            goto guqwqwceceswwucy;
            uiuiuicckaiksqyc:
            wmismwqqqagsomky:
            goto amemoiimosckqems;
            qsisgmaawywioogk:
            eskcocwimiseewmu:
            goto qwkyuqqgkugqggqo;
            wgkeakuiaqswmkes:
            scymgswieuyiqwmm:
            goto kemiasqyoocyqqgm;
            kuigwocyaagakags:
            if (isset($additional_image_sizes[$piuesceqiguuskme]["\167\151\144\164\150"])) {
                goto scymgswieuyiqwmm;
            }
            goto miiaowmiyoemouke;
            eymgmkoqgoqicgsi:
            if (isset($additional_image_sizes[$piuesceqiguuskme]["\x68\145\x69\x67\x68\164"])) {
                goto eskcocwimiseewmu;
            }
            goto oueaeyqiqiakqaek;
            qwkyuqqgkugqggqo:
            
            $wyicceigkekkkwgs[$piuesceqiguuskme]["\150\x65\151\147\x68\164"] = intval($additional_image_sizes[$piuesceqiguuskme]["\150\145\151\147\150\x74"]);
            goto cacaysyqsqaauawm;
            kqgqymcemksgmsaa:
            
            $wyicceigkekkkwgs[$piuesceqiguuskme]["\x63\162\x6f\160"] = DecoratorOption::get("{$piuesceqiguuskme}\x5f\x63\162\x6f\x70");
            goto ggccmgysseeqcaga;
            esgykeaqimuiewgw:
            gymqkieyuiawacwi:
            goto eymgmkoqgoqicgsi;
            yqimmomioeoaqwkq:
            gkwyuumqeuikwiku:
            goto kosccieswmaoeoyk;
            amemoiimosckqems:
            
            $wyicceigkekkkwgs[$piuesceqiguuskme]["\143\162\157\160"] = intval($additional_image_sizes[$piuesceqiguuskme]["\x63\162\157\x70"]);
            goto yqimmomioeoaqwkq;
            yumiokuikmkkwcwg:
            $wyicceigkekkkwgs[$piuesceqiguuskme]["\155\x69\x6d\145\55\164\x79\x70\x65"] = ManipulateAttachment::ikocqgeqiykwwyqs($attachment_id);
            goto isgceyiuweaueqeu;
            oueaeyqiqiakqaek:
            
            $wyicceigkekkkwgs[$piuesceqiguuskme]["\x68\x65\x69\x67\x68\x74"] = DecoratorOption::get("{$piuesceqiguuskme}\x5f\x73\151\x7a\x65\137\x68");
            goto bweusaooumwyemuu;
            bweusaooumwyemuu:
            goto iymwycosumimggmu;
            goto qsisgmaawywioogk;
            auoaywowugkacsia:
            goto gymqkieyuiawacwi;
            goto wgkeakuiaqswmkes;
            iosymaiumakyyaos:
            if (isset($additional_image_sizes[$piuesceqiguuskme]["\143\x72\x6f\160"])) {
                goto wmismwqqqagsomky;
            }
            goto kqgqymcemksgmsaa;
            kosccieswmaoeoyk:
            $wyicceigkekkkwgs[$piuesceqiguuskme]["\x66\151\154\x65"] = $wkcwykowmmmwioqs;
            goto yumiokuikmkkwcwg;
            ggccmgysseeqcaga:
            goto gkwyuumqeuikwiku;
            goto uiuiuicckaiksqyc;
            kemiasqyoocyqqgm:
            
            $wyicceigkekkkwgs[$piuesceqiguuskme]["\x77\151\x64\x74\150"] = intval($additional_image_sizes[$piuesceqiguuskme]["\x77\151\144\164\x68"]);
            goto esgykeaqimuiewgw;
            guqwqwceceswwucy:
        }
        goto wiouwokmcckqekqy;
        ssaeeugeycyaaaki:
        
        $relative_path = str_replace($upload_dir["\x62\141\x73\145\x64\151\162"], '', $svg_path);
        goto caammwwkqeeemaok;
        oqmeeqioiooguikk:
        $svg_path = ManipulateAttachment::ckoygqywcuqasqea($attachment_id);
        goto ggwyamakeyyieeog;
        ccwsuiigukoykcew:
    }
    
    public function wqyqisgcyewimoai($icwicymcioeyeyek, $post)
    {
        goto maiaiacekmmwswqe;
        mwagkoucauykimsu:
        wkemscqmqyimmqme:
        goto weqkaeeoycmmmkcc;
        weqkaeeoycmmmkcc:
        return $icwicymcioeyeyek;
        goto gmqmkgkikksymkik;
        cymmwkiaogwsmcsu:
        $icwicymcioeyeyek = ManipulateAttachment::smiqaaaecemiwugu($post, ManipulateAttachment::ckoygqywcuqasqea($post));
        goto ueaiaeaaaiiuskyi;
        maiaiacekmmwswqe:
        
        if (!is_wp_error($icwicymcioeyeyek)) {
            goto wkemscqmqyimmqme;
        }
        goto cymmwkiaogwsmcsu;
        ueaiaeaaaiiuskyi:
        ManipulateAttachment::_updateMeta($post, $icwicymcioeyeyek);
        goto mwagkoucauykimsu;
        gmqmkgkikksymkik:
    }
    
    protected function qaeakmimoqkugagk($waoisqguweoociwe)
    {
        goto qywgeimouqcummco;
        saimmkcsakcakqww:
        gqsciemssskoqamq:
        goto cmqyiscgeswqsoog;
        cmqyiscgeswqsoog:
        kgqyyosqeaqigeuo:
        goto iqyicsuysksymwuw;
        gsageymuesseosmy:
        $qeswwaqqsyymqawg = intval($siquossayskcwkea->width);
        goto skwiuqgoiaiskqmm;
        sgkcewwkiomywgky:
        $qeswwaqqsyymqawg = 0;
        goto syskuqogeeoicwgw;
        ygqwuggqqouywgoq:
        $wyicceigkekkkwgs = explode("\40", $siquossayskcwkea->viewBox);
        goto yseimcmuaycskkak;
        mewsemcoqiuuwwme:
        return ["\x77\151\x64\164\150" => $qeswwaqqsyymqawg, "\150\x65\151\x67\150\x74" => $cswemwoyesycwkuq, "\x6f\162\x69\145\156\x74\141\164\151\157\156" => $qeswwaqqsyymqawg > $cswemwoyesycwkuq ? "\x6c\141\156\x64\x73\x63\x61\x70\x65" : "\x70\157\x72\x74\162\141\x69\164"];
        goto yeemeukcggweaowa;
        wigumuwcsuiaauyw:
        return false;
        goto isoisgaoqmiqeiak;
        eouoyysyekegaigi:
        if (isset($siquossayskcwkea->viewBox)) {
            goto gyaiswaqomsiwcwu;
        }
        goto wigumuwcsuiaauyw;
        syskuqogeeoicwgw:
        $cswemwoyesycwkuq = 0;
        goto kommicqseqmaiuss;
        yseimcmuaycskkak:
        if (!isset($wyicceigkekkkwgs[2], $wyicceigkekkkwgs[3])) {
            goto gqsciemssskoqamq;
        }
        goto gowsaeyyqagsmkce;
        yyeowwwqogwoeoyc:
        $siquossayskcwkea = $waoisqguweoociwe->attributes();
        goto ywagwigaamkacqsm;
        ukiagcaimyycouuq:
        gyaiswaqomsiwcwu:
        goto ygqwuggqqouywgoq;
        qywgeimouqcummco:
        $waoisqguweoociwe = @simplexml_load_file($waoisqguweoociwe);
        goto sgkcewwkiomywgky;
        skwiuqgoiaiskqmm:
        $cswemwoyesycwkuq = intval($siquossayskcwkea->height);
        goto ikosmomwmyimqaew;
        wskkqgweqwsaygqi:
        $cswemwoyesycwkuq = intval($wyicceigkekkkwgs[3]);
        goto saimmkcsakcakqww;
        isoisgaoqmiqeiak:
        goto kgqyyosqeaqigeuo;
        goto ukiagcaimyycouuq;
        ikosmomwmyimqaew:
        sgosioakiaeqmyyy:
        goto yqocsiwyueakoqoe;
        gowsaeyyqagsmkce:
        $qeswwaqqsyymqawg = intval($wyicceigkekkkwgs[2]);
        goto wskkqgweqwsaygqi;
        qeaiigkoomwsgoem:
        qsamicayummauigq:
        goto gsageymuesseosmy;
        kommicqseqmaiuss:
        if (!$waoisqguweoociwe) {
            goto ocmywgkaoogmcsau;
        }
        goto yyeowwwqogwoeoyc;
        iqyicsuysksymwuw:
        goto sgosioakiaeqmyyy;
        goto qeaiigkoomwsgoem;
        ywagwigaamkacqsm:
        if (isset($siquossayskcwkea->width, $siquossayskcwkea->height)) {
            goto qsamicayummauigq;
        }
        goto eouoyysyekegaigi;
        yqocsiwyueakoqoe:
        ocmywgkaoogmcsau:
        goto mewsemcoqiuuwwme;
        yeemeukcggweaowa:
    }
    
    public function umacyowesakeiewk($wisgiwskwawciiee, $aiooqyausygaasqm, $oiegiwogmwmawkeo)
    {
        goto ywumciccwiakyeus;
        oqgomigmmsikougi:
        
        goto egamwswskucyocos;
        myaeiwowqwegogmq:
        $qeswwaqqsyymqawg = ManipulateArray::get($qaiwqwwemmyyqosy, "\x77\x69\144\164\150");
        goto yauqmqauoqwymcsu;
        eiqawcsoocuowioo:
        if (!$qaiwqwwemmyyqosy) {
            goto iuiyqyiwisggcywk;
        }
        goto kkeiscyscckuuqci;
        qwsioymycmywyqiw:
        $qeswwaqqsyymqawg = 100;
        goto qiaayoymqmmemiiy;
        mwucaqouymaweuck:
        $wisgiwskwawciiee["\150\145\x69\x67\150\x74"] = 80;
        goto eyaciqqycmmgoski;
        oummiciwcqkwymss:
        $qaiwqwwemmyyqosy = ManipulateAttachment::iuwsgyqakicakuoq($oiegiwogmwmawkeo);
        goto omkkomymwsowywwa;
        yauqmqauoqwymcsu:
        iuiyqyiwisggcywk:
        goto mwucaqouymaweuck;
        eyaciqqycmmgoski:
        
        $wisgiwskwawciiee["\x77\151\x64\x74\150"] = 80;
        goto oqgomigmmsikougi;
        qiaayoymqmmemiiy:
        $cswemwoyesycwkuq = 100;
        goto oummiciwcqkwymss;
        ywumciccwiakyeus:
        if (!$this->iigcaickwcykouca($aiooqyausygaasqm)) {
            goto weaqamgsuuwuouks;
        }
        goto qwsioymycmywyqiw;
        yaecoyqgimisqywa:
        return $wisgiwskwawciiee;
        goto emouoksmeamyiikc;
        awggeauumiqymcoi:
        wyucqqggakoceowc:
        goto eiqawcsoocuowioo;
        omkkomymwsowywwa:
        if ($qaiwqwwemmyyqosy) {
            goto wyucqqggakoceowc;
        }
        goto qmwomemuqyaimiso;
        qmwomemuqyaimiso:
        $qaiwqwwemmyyqosy = $this->qaeakmimoqkugagk(ManipulateAttachment::ckoygqywcuqasqea($aiooqyausygaasqm));
        goto awggeauumiqymcoi;
        kkeiscyscckuuqci:
        $cswemwoyesycwkuq = ManipulateArray::get($qaiwqwwemmyyqosy, "\x68\145\x69\x67\150\164");
        goto myaeiwowqwegogmq;
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
