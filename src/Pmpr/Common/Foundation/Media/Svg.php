<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b1e8aa0c03             |
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
    const SVG_MIME_TYPE = "\151\155\141\147\x65\57\163\x76\147\53\170\155\154";
    
    public ?Sanitizer $sanitizer = null;
    public function __construct()
    {
        goto ygcassqguceeaako;
        amkoayycaiguswem:
        
        $umcwwewscqegoqoe->minify(true);
        goto qosuqqceyccekysq;
        ksuoesmcewiqukgy:
        parent::__construct();
        goto cuacsemcmuyaokge;
        ygcassqguceeaako:
        $umcwwewscqegoqoe = new Sanitizer();
        goto amkoayycaiguswem;
        qosuqqceyccekysq:
        $this->sanitizer = $umcwwewscqegoqoe;
        goto ksuoesmcewiqukgy;
        cuacsemcmuyaokge:
    }
    public function wigskegsqequoeks()
    {
        $this->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\141\x64\x64\137\164\x77\x69\x67\x5f\146\x75\x6e\143\x74\151\157\x6e\x73"), [$this, "\145\165\145\145\x79\145\155\147\153\145\171\x63\x65\151\163\x61"])->qcsmikeggeemccuu("\147\x65\164\137\151\155\141\147\145\x5f\x74\x61\147", [$this, "\143\x67\x69\141\153\x61\x63\143\x6b\155\x63\141\x71\x67\x69\153"], 10, 6);
        parent::wigskegsqequoeks();
    }
    public function kgquecmsgcouyaya()
    {
        $this->cecaguuoecmccuse("\x75\x70\x6c\x6f\x61\144\137\155\x69\155\x65\x73", [$this, "\x67\x67\x77\143\x65\161\167\x65\145\x61\x61\x63\167\157\x69\x73"])->cecaguuoecmccuse("\x77\x70\x5f\150\141\x6e\144\154\x65\137\165\x70\x6c\157\x61\144\137\x70\162\145\x66\x69\x6c\164\145\x72", [$this, "\x6d\145\153\x65\165\167\x69\x65\x63\151\x71\x79\x6d\x61\x69\x6f"])->cecaguuoecmccuse("\x73\x76\x67\137\x61\164\x74\x72\151\x62\165\164\145\x73", [$this, "\x6d\161\x79\141\x63\167\141\x61\x6f\143\147\x63\x73\171\141\147"], 999)->cecaguuoecmccuse("\x77\x70\x5f\x63\x68\x65\143\x6b\x5f\146\x69\x6c\x65\x74\x79\x70\145\x5f\141\156\x64\x5f\145\x78\164", [$this, "\141\153\151\x6f\x6f\x79\x61\x75\153\147\x79\x75\x6d\143\155\165"], 75, 4)->cecaguuoecmccuse("\x61\x64\x6d\151\x6e\x5f\x70\157\x73\x74\137\164\x68\x75\155\142\156\x61\x69\154\x5f\x68\164\x6d\154", [$this, "\157\x75\141\165\x79\171\x61\153\145\141\x75\x61\x71\x71\x69\153"], 10, 3)->cecaguuoecmccuse("\x77\x70\x5f\x67\x65\164\x5f\141\164\x74\x61\143\x68\155\145\x6e\x74\137\155\145\x74\141\144\141\x74\x61", [$this, "\167\161\x79\x71\x69\x73\x67\143\171\x65\x77\x69\x6d\x6f\x61\x69"], 10, 2)->cecaguuoecmccuse("\167\x70\137\160\x72\145\160\141\162\x65\137\x61\x74\x74\x61\143\150\155\145\156\x74\x5f\x66\x6f\162\x5f\x6a\163", [$this, "\x73\x6b\x6b\147\167\167\x6b\171\x6d\157\x6f\161\x71\141\x77\155"], 10, 2)->cecaguuoecmccuse("\167\x70\x5f\x67\x65\156\x65\162\141\x74\145\x5f\141\164\x74\141\143\x68\x6d\145\x6e\164\x5f\155\145\x74\141\x64\141\164\141", [$this, "\x79\x77\147\165\x61\x6d\141\x69\151\x79\x61\x67\x61\x77\x73\x63"], 10, 2)->cecaguuoecmccuse("\151\x6d\141\147\x65\137\165\x70\x6c\x6f\141\x64\137\x66\151\154\x74\x65\x72\137\145\x78\143\154\x75\x64\x65", [$this, "\x71\x71\153\x6f\x77\163\143\141\157\x6f\165\143\153\145\147\x6f"], 10, 2)->cecaguuoecmccuse($this->ygyygikyocoymgaw("\141\x74\x74\x61\x63\150\155\x65\x6e\164\x5f\151\x73\x5f\x73\x76\x67"), [$this, "\x65\x67\165\x6f\x6b\x77\161\141\x6d\x63\x63\167\x63\x71\x6f\155"], 10, 2)->cecaguuoecmccuse("\167\160\137\147\x65\164\137\x61\x74\164\x61\x63\150\x6d\x65\x6e\164\137\x69\x6d\141\147\x65\x5f\141\x74\x74\x72\x69\142\x75\x74\x65\163", [$this, "\x79\143\x79\x71\153\147\143\151\x67\x67\x6f\x61\x67\x61\x67\x67"], 10, 3);
        parent::kgquecmsgcouyaya();
    }
    
    public function ycyqkgciggoagagg($wisgiwskwawciiee, $aiooqyausygaasqm, $oiegiwogmwmawkeo)
    {
        $wisgiwskwawciiee = $this->wmiseqaieauskweu($wisgiwskwawciiee, $aiooqyausygaasqm);
        
        return $wisgiwskwawciiee;
    }
    
    public function mqyacwaaocgcsyag($siquossayskcwkea = [])
    {
        goto kwkeiomeuququaoy;
        kwkeiomeuququaoy:
        $siquossayskcwkea = $this->kguoyqackakgysoy($siquossayskcwkea);
        goto giqysmgscwwqgmqe;
        giqysmgscwwqgmqe:
        if (!(!isset($siquossayskcwkea["\150\x65\x69\147\x68\x74"]) && !isset($siquossayskcwkea["\167\151\x64\x74\150"]))) {
            goto aoqqweiisiaekqsk;
        }
        goto qaeqsckgkimiuwca;
        gqcosoeyaqmyccca:
        aoqqweiisiaekqsk:
        goto skegiiomcggeymuw;
        guoqssciqoegywsg:
        $siquossayskcwkea["\x77\151\144\x74\x68"] = 100;
        goto gqcosoeyaqmyccca;
        skegiiomcggeymuw:
        return $siquossayskcwkea;
        goto oqumomyawuuomquy;
        qaeqsckgkimiuwca:
        $siquossayskcwkea["\x68\145\x69\147\150\164"] = 100;
        goto guoqssciqoegywsg;
        oqumomyawuuomquy:
    }
    
    public function kguoyqackakgysoy($siquossayskcwkea, $uuossqmuccwyiemo = 16)
    {
        goto seocecaioucmugky;
        semoowiyeimkyeuc:
        return $siquossayskcwkea;
        goto qgmegqweacumuccw;
        eqggkouoswesgwya:
        iiogyckwmaouswqy:
        goto icoooiwmiusyeaes;
        eqiqgwqscsswkmwk:
        smmagsweysscecce:
        goto aymkogwsagaggsem;
        seocecaioucmugky:
        $egkyssmuqcwaciya = ManipulateArray::get($siquossayskcwkea, "\143\x6c\141\163\163");
        goto eeicwkoeaqmaoywm;
        iwemkuaseiooqoqg:
        $wyicceigkekkkwgs = (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x73\166\x67\137\145\x6c\145\x6d\145\156\164\137\x63\x6c\141\163\163\137\x72\x61\x74\x69\x6f\x6e\x5f\x63\x6f\156\166\x65\x72\x74\x65\162"), []);
        goto yikaqawiqaokyqgw;
        icoooiwmiusyeaes:
        kgeiskysuuasqckq:
        goto emoaoyuqmmymmwkq;
        yikaqawiqaokyqgw:
        if (!$wyicceigkekkkwgs) {
            goto kgeiskysuuasqckq;
        }
        goto askiamwsewkaqwoi;
        emoaoyuqmmymmwkq:
        cwccwmggqyeeggwe:
        goto semoowiyeimkyeuc;
        askiamwsewkaqwoi:
        if (!(!is_numeric($uuossqmuccwyiemo) || $uuossqmuccwyiemo < 1)) {
            goto smmagsweysscecce;
        }
        goto coawukgoisakmosc;
        eeicwkoeaqmaoywm:
        if (!$egkyssmuqcwaciya) {
            goto cwccwmggqyeeggwe;
        }
        goto iwemkuaseiooqoqg;
        aymkogwsagaggsem:
        foreach ($wyicceigkekkkwgs as $oiegiwogmwmawkeo => $eqgoocgaqwqcimie) {
            goto ecmiggsmgmeaaqug;
            gkoasaqwwqsgwqgo:
            wkoqomessckkgeua:
            goto okwsycyoqycgwaco;
            oayiqwmaaukkuimy:
            $siquossayskcwkea["\167\151\144\x74\150"] = intval($eqgoocgaqwqcimie);
            goto eiwkyioqeaaemqsa;
            ecmiggsmgmeaaqug:
            if (!(strpos($egkyssmuqcwaciya, $oiegiwogmwmawkeo) !== false)) {
                goto gcwikewmwkqsugms;
            }
            goto qaoooeioqwiiceyq;
            euemimammkmwkuwk:
            $siquossayskcwkea["\150\x65\151\x67\150\164"] = intval($eqgoocgaqwqcimie[1] * $uuossqmuccwyiemo);
            goto isgiyocowwwceaoa;
            goouowwycoakigim:
            qyckwskcewqioqyk:
            goto aasuycoysaucuaaq;
            qaoooeioqwiiceyq:
            if (is_array($eqgoocgaqwqcimie)) {
                goto wkoqomessckkgeua;
            }
            goto oimegoemmuwwwkyo;
            kgogceiykkokkgeg:
            goto eagggcysqeeaeose;
            goto gkoasaqwwqsgwqgo;
            ucoikisgieeseyqo:
            goto iiogyckwmaouswqy;
            goto gmmaicwkwqiywwyc;
            gmmaicwkwqiywwyc:
            gcwikewmwkqsugms:
            goto goouowwycoakigim;
            oimegoemmuwwwkyo:
            $eqgoocgaqwqcimie *= $uuossqmuccwyiemo;
            goto oayiqwmaaukkuimy;
            okwsycyoqycgwaco:
            $siquossayskcwkea["\167\x69\x64\x74\x68"] = intval($eqgoocgaqwqcimie[0] * $uuossqmuccwyiemo);
            goto euemimammkmwkuwk;
            eiwkyioqeaaemqsa:
            $siquossayskcwkea["\x68\145\151\x67\x68\164"] = intval($eqgoocgaqwqcimie);
            goto kgogceiykkokkgeg;
            isgiyocowwwceaoa:
            eagggcysqeeaeose:
            goto ucoikisgieeseyqo;
            aasuycoysaucuaaq:
        }
        goto eqggkouoswesgwya;
        coawukgoisakmosc:
        $uuossqmuccwyiemo = 16;
        goto eqiqgwqscsswkmwk;
        qgmegqweacumuccw:
    }
    
    public function qqkowscaoouckego($couiucmsqaieciue = [])
    {
        $couiucmsqaieciue[] = self::SVG_MIME_TYPE;
        return $couiucmsqaieciue;
    }
    
    public function eueeyemgkeyceisa($eyoesceegakeygsi)
    {
        $eyoesceegakeygsi->kmmegqceukkkawme("\151\163\137\163\x76\x67", function ($aiooqyausygaasqm) {
            return $this->iigcaickwcykouca($aiooqyausygaasqm);
        });
    }
    
    public function eguokwqamccwcqom($iigcaickwcykouca, $post)
    {
        return $this->iigcaickwcykouca($post);
    }
    
    public function ggwceqweeaacwois($yawwowoqosismgyq)
    {
        goto cumoewcksgaqwwoo;
        kuiomeesyokwsgio:
        $yawwowoqosismgyq["\x73\166\x67\172"] = self::SVG_MIME_TYPE;
        goto yescggaseyimocqu;
        cumoewcksgaqwwoo:
        $yawwowoqosismgyq["\x73\166\147"] = self::SVG_MIME_TYPE;
        goto kuiomeesyokwsgio;
        yescggaseyimocqu:
        return $yawwowoqosismgyq;
        goto ywgyaqcqgosmigae;
        ywgyaqcqgosmigae:
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
        goto msaegiggioiykouc;
        msaegiggioiykouc:
        if (!$this->iigcaickwcykouca($aokagokqyuysuksm)) {
            goto gsoyaqsaauaokukc;
        }
        goto uymqoeqgwwkeiuok;
        mywueecygymayigq:
        return $wwgucssaecqekuek;
        goto oeaskyqueyagqcmc;
        akcqkwesmcuumqqc:
        gsoyaqsaauaokukc:
        goto mywueecygymayigq;
        uymqoeqgwwkeiuok:
        ManipulateArray::unset($wwgucssaecqekuek, ["\163\x72\143\163\145\x74", "\x73\x69\x7a\x65\163"]);
        goto akcqkwesmcuumqqc;
        oeaskyqueyagqcmc:
    }
    
    public function uwmcsgckegoamwas($nsmgceoqaqogqmuw, $aokagokqyuysuksm)
    {
        goto eiiqicyywgugksuc;
        soeggysyusqoiwwg:
        try {
            goto ckcesgcceqqqieem;
            swkmkgmucceyweie:
            $ewgwqamkygiqaawc = preg_replace("\57\74\134\77\170\155\154\56\52\77\x5c\77\x3e\x2f", '', $ewgwqamkygiqaawc);
            goto aooeykwscmqgouay;
            qqyeogaouscuaikw:
            $ewgwqamkygiqaawc = $this->kcciqwskewsuaemk()->souwykwwmyygqyqi($qogsmwakwacwqogk);
            goto swkmkgmucceyweie;
            aooeykwscmqgouay:
            $aqykuigiuwmmcieu = DOMCrawler::igmaewykumgwoaoy($ewgwqamkygiqaawc, ["\163\166\147" => ["\143\154\x61\x73\163" => $egkyssmuqcwaciya]]);
            goto mcccguiaquiickwq;
            ckcesgcceqqqieem:
            $egkyssmuqcwaciya = DOMCrawler::waecsyqmwascmqoa($nsmgceoqaqogqmuw, "\151\x6d\147", "\143\x6c\x61\x73\163");
            goto mmqsgsuycqioemgo;
            mmqsgsuycqioemgo:
            $qogsmwakwacwqogk = ManipulateAttachment::ygwimyogyaqgumam($aokagokqyuysuksm);
            goto qqyeogaouscuaikw;
            mcccguiaquiickwq:
        } catch (Exception $wgaoewqkwgomoaai) {
            $aqykuigiuwmmcieu = $nsmgceoqaqogqmuw;
        }
        goto ommmymgkaageowym;
        ommmymgkaageowym:
        quwwquywcuyiiweo:
        goto aseoykguwasmaggs;
        aseoykguwasmaggs:
        return $aqykuigiuwmmcieu;
        goto oesqomwsgwmckgsq;
        sugmgeiemuygeoce:
        if (!($nsmgceoqaqogqmuw && $this->iigcaickwcykouca($aokagokqyuysuksm))) {
            goto quwwquywcuyiiweo;
        }
        goto soeggysyusqoiwwg;
        eiiqicyywgugksuc:
        $aqykuigiuwmmcieu = $nsmgceoqaqogqmuw;
        goto sugmgeiemuygeoce;
        oesqomwsgwmckgsq:
    }
    
    public function akiooyaukgyumcmu($icwicymcioeyeyek = null, $qogsmwakwacwqogk = null, $wkcwykowmmmwioqs = null, $yawwowoqosismgyq = null)
    {
        goto qaugkmgccegqkasu;
        scageqmiwcyqmmmk:
        if (!(strlen($yucgcsieomwqgwws) < 1)) {
            goto wswmegcumomiwaqo;
        }
        goto swgecgeeeaaakgss;
        fosuiwomyuwkaisi:
        if (!in_array($yucgcsieomwqgwws, ["\x73\166\147", "\x73\166\147\172"])) {
            goto wsouygqoeyuksock;
        }
        goto yqewusaguumeiqyq;
        qeaugewkiwmkoaas:
        wsouygqoeyuksock:
        goto cgmgikoumekoyyae;
        swgecgeeeaaakgss:
        $ukequsueuukqgaca = explode("\x2e", $wkcwykowmmmwioqs);
        goto qssyiieuymmiwicm;
        cgmgikoumekoyyae:
        return $icwicymcioeyeyek;
        goto yigecwqswuowoakm;
        qaugkmgccegqkasu:
        $yucgcsieomwqgwws = isset($icwicymcioeyeyek["\x65\170\x74"]) ? $icwicymcioeyeyek["\145\x78\x74"] : '';
        goto scageqmiwcyqmmmk;
        kwwgmsmuoeysguwq:
        $icwicymcioeyeyek["\x65\170\x74"] = $yucgcsieomwqgwws;
        goto qeaugewkiwmkoaas;
        qssyiieuymmiwicm:
        $yucgcsieomwqgwws = strtolower(end($ukequsueuukqgaca));
        goto kuyuwimysoqcmgek;
        kuyuwimysoqcmgek:
        wswmegcumomiwaqo:
        goto fosuiwomyuwkaisi;
        yqewusaguumeiqyq:
        $icwicymcioeyeyek["\x74\171\x70\145"] = self::SVG_MIME_TYPE;
        goto kwwgmsmuoeysguwq;
        yigecwqswuowoakm:
    }
    
    public function mekeuwieciqymaio($qogsmwakwacwqogk)
    {
        goto kggwiioyiqgskcem;
        cgsawegeqqsecwam:
        gocwgeomykcekcso:
        goto eucsyaygqqcqamus;
        oimaymokouuwueum:
        aqguswuomiqimcwy:
        goto cgsawegeqqsecwam;
        eucsyaygqqcqamus:
        return $qogsmwakwacwqogk;
        goto iaqwisciugaosygy;
        kggwiioyiqgskcem:
        if (!($qogsmwakwacwqogk["\x74\171\x70\x65"] === self::SVG_MIME_TYPE)) {
            goto gocwgeomykcekcso;
        }
        goto emwggqiqcmmqeawy;
        emwggqiqcmmqeawy:
        if ($this->yiiiqewsseywemqu($qogsmwakwacwqogk["\x74\155\x70\x5f\156\141\155\x65"])) {
            goto aqguswuomiqimcwy;
        }
        goto kyswigcwgusmesqi;
        kyswigcwgusmesqi:
        $qogsmwakwacwqogk["\x65\x72\x72\157\x72"] = __("\123\x6f\x72\162\x79\54\40\x74\150\x69\163\x20\x66\151\154\x65\40\x63\x6f\165\154\144\156\47\164\40\x62\x65\x20\x73\x61\x6e\x69\164\151\172\x65\144\40\163\x6f\x20\146\157\x72\x20\163\x65\143\165\162\x69\x74\x79\x20\x72\145\141\x73\x6f\x6e\163\40\167\141\x73\x6e\x27\x74\x20\x75\x70\154\x6f\x61\x64\145\x64", PR__CMN__FOUNDATION);
        goto oimaymokouuwueum;
        iaqwisciugaosygy:
    }
    
    public function skkgwwkymooqqawm($keccaugmemegoimu, $aiooqyausygaasqm) : array
    {
        goto wqmgwcsuccoweocq;
        geqakgsumkyosuca:
        wqgecqaciyakecys:
        goto qicekkeggigkwqeu;
        giiqogwyoikiiqyi:
        uoqequmkiyukiqgi:
        goto iqiwimyamykmuiwo;
        egwuecigeyuooiam:
        foreach ($possible_sizes as $oiegiwogmwmawkeo => $pkyyagewkiyckmwy) {
            goto wsawmoiaemkggocs;
            moeeimaaoaycycmi:
            $wyicceigkekkkwgs[$oiegiwogmwmawkeo] = ["\150\145\151\x67\150\x74" => DecoratorOption::get("{$oiegiwogmwmawkeo}\137\163\x69\x7a\145\137\167", $default_height), "\x77\x69\144\x74\150" => DecoratorOption::get("{$oiegiwogmwmawkeo}\137\163\151\172\x65\137\150", $default_width), "\x75\162\154" => $keccaugmemegoimu["\165\162\154"], "\157\x72\151\x65\156\x74\x61\x74\x69\157\x6e" => "\x70\157\162\164\162\x61\x69\164"];
            goto mggyiwyuuiwswaks;
            cocwomcoymcaqgky:
            $default_height = $qaiwqwwemmyyqosy["\150\x65\151\x67\150\x74"];
            goto ukygqcaqcaqqmyew;
            mggyiwyuuiwswaks:
            ukggweysgiiygqsa:
            goto yemwekyegaywgoug;
            oeeakgukqusiqswc:
            if (!("\146\165\154\154" === $oiegiwogmwmawkeo && $qaiwqwwemmyyqosy)) {
                goto iekecmawqyigmqcg;
            }
            goto cocwomcoymcaqgky;
            ukygqcaqcaqqmyew:
            $default_width = $qaiwqwwemmyyqosy["\167\x69\x64\164\x68"];
            goto ymiosikicyqkaiaa;
            ymiosikicyqkaiaa:
            iekecmawqyigmqcg:
            goto moeeimaaoaycycmi;
            wsawmoiaemkggocs:
            $default_height = 2000;
            goto iuiawwoouuwwiqca;
            iuiawwoouuwwiqca:
            $default_width = 2000;
            goto oeeakgukqusiqswc;
            yemwekyegaywgoug:
        }
        goto sieccokukwgmuggw;
        ysmessckmysogeua:
        $keccaugmemegoimu = array_merge($keccaugmemegoimu, $qaiwqwwemmyyqosy);
        goto giiqogwyoikiiqyi;
        qicekkeggigkwqeu:
        return $keccaugmemegoimu;
        goto moyqaggmqqimwusm;
        yqckgyeeuyayosww:
        $keccaugmemegoimu["\x73\x69\172\x65\163"] = $wyicceigkekkkwgs;
        goto qmsyaycokgmmwycs;
        kkscsmuyumawosyc:
        if (!$qaiwqwwemmyyqosy) {
            goto uoqequmkiyukiqgi;
        }
        goto ysmessckmysogeua;
        iqiwimyamykmuiwo:
        $possible_sizes = $this->sscegwueamckwmcy("\x69\155\141\x67\x65\137\x73\x69\x7a\145\137\156\141\x6d\x65\x73\x5f\143\150\157\x6f\x73\145", ["\x66\x75\154\x6c" => __("\x46\x75\154\x6c\x20\x53\x69\172\x65", PR__CMN__FOUNDATION), "\x74\150\x75\x6d\142\156\141\151\x6c" => __("\x54\x68\x75\155\x62\156\x61\151\154", PR__CMN__FOUNDATION), "\x6d\145\144\151\x75\155" => __("\115\145\144\x69\165\155", PR__CMN__FOUNDATION), "\x6c\x61\162\147\145" => __("\114\x61\x72\x67\x65", PR__CMN__FOUNDATION)]);
        goto egyuciuossumacuy;
        qmsyaycokgmmwycs:
        $keccaugmemegoimu["\151\x63\157\156"] = $keccaugmemegoimu["\165\162\x6c"];
        goto geqakgsumkyosuca;
        sieccokukwgmuggw:
        qwikcqiaiumsswow:
        goto yqckgyeeuyayosww;
        oyeswuecyaiiawyg:
        $qaiwqwwemmyyqosy = $this->qaeakmimoqkugagk(ManipulateAttachment::ckoygqywcuqasqea($aiooqyausygaasqm));
        goto kkscsmuyumawosyc;
        wqmgwcsuccoweocq:
        if (!($keccaugmemegoimu["\155\x69\155\145"] == self::SVG_MIME_TYPE)) {
            goto wqgecqaciyakecys;
        }
        goto oyeswuecyaiiawyg;
        egyuciuossumacuy:
        $wyicceigkekkkwgs = [];
        goto egwuecigeyuooiam;
        moyqaggmqqimwusm:
    }
    
    protected function yiiiqewsseywemqu($qogsmwakwacwqogk)
    {
        goto qeggwmykewcoieic;
        qeggwmykewcoieic:
        $yeueggiecgqcswqm = $this->kcciqwskewsuaemk()->souwykwwmyygqyqi($qogsmwakwacwqogk);
        goto ieauiumamygiuckc;
        eookussqeicycoio:
        $yeueggiecgqcswqm = gzdecode($yeueggiecgqcswqm);
        goto icqaiqyewuyegkeq;
        xaiaogcwcaeweoiu:
        suewugkisoommmgy:
        goto ogwaiqiccywqqiwk;
        eakoykqcmyemgyum:
        qucoecmmmacqooek:
        goto aqyimgoegakwgoum;
        kcaysyweukeimoik:
        $qawsmigsyysqwmeq = gzencode($qawsmigsyysqwmeq);
        goto eakoykqcmyemgyum;
        eouugaqkgamwmgmo:
        return false;
        goto weocosykwsaimaks;
        icqaiqyewuyegkeq:
        
        if (!($yeueggiecgqcswqm === false)) {
            goto kawgkswoygkmgmao;
        }
        goto dmwmgeswweekqyuw;
        weocosykwsaimaks:
        tsywwmwawwgcwmuc:
        goto gmywmsmiayimqygy;
        moeseousgukmygmy:
        kawgkswoygkmgmao:
        goto xaiaogcwcaeweoiu;
        dmwmgeswweekqyuw:
        return false;
        goto moeseousgukmygmy;
        ieauiumamygiuckc:
        
        if (!($yuoaskweqogoasgc = $this->wsggsqigawogiwky($yeueggiecgqcswqm))) {
            goto suewugkisoommmgy;
        }
        goto eookussqeicycoio;
        aqyimgoegakwgoum:
        return $this->kcciqwskewsuaemk()->kwsmkgyoyaqecwuu($qogsmwakwacwqogk, $qawsmigsyysqwmeq);
        goto qmiouyoeguiqymgi;
        gmywmsmiayimqygy:
        
        if (!$yuoaskweqogoasgc) {
            goto qucoecmmmacqooek;
        }
        goto kcaysyweukeimoik;
        wsomqsmeououqiwu:
        if (!($qawsmigsyysqwmeq === false)) {
            goto tsywwmwawwgcwmuc;
        }
        goto eouugaqkgamwmgmo;
        ogwaiqiccywqqiwk:
        
        $qawsmigsyysqwmeq = $this->sanitizer->sanitize($yeueggiecgqcswqm);
        goto wsomqsmeououqiwu;
        qmiouyoeguiqymgi:
    }
    
    protected function wsggsqigawogiwky($ygwoqcwsaggqoamw)
    {
        goto uqwsiocauuswgwok;
        wskcqwywmwmwigce:
        wcoekawkkswkgamc:
        goto iiuwcsgwcguceiko;
        eksamuqymmeumqsg:
        return 0 === mb_strpos($ygwoqcwsaggqoamw, "\x1f" . "\x8b" . "\x8");
        goto wskcqwywmwmwigce;
        uqwsiocauuswgwok:
        if (function_exists("\155\142\137\163\164\162\160\157\163")) {
            goto noswwaawyacomwyo;
        }
        goto iisgwcgceeygauyk;
        oqyosskkgcuckmes:
        goto wcoekawkkswkgamc;
        goto giueuuwusgmgeick;
        giueuuwusgmgeick:
        noswwaawyacomwyo:
        goto eksamuqymmeumqsg;
        iisgwcgceeygauyk:
        return 0 === strpos($ygwoqcwsaggqoamw, "\x1f" . "\213" . "\x8");
        goto oqyosskkgcuckmes;
        iiuwcsgwcguceiko:
    }
    
    public function oowwkoeekmwwgieu($mcqieaigyeeyaksm, $aiooqyausygaasqm, $oiegiwogmwmawkeo)
    {
        goto yigmeqsygwgioyaa;
        qoysygagyigwsiwm:
        $cswemwoyesycwkuq = ManipulateAttachment::get($gkiuoymeukweiaaw, "\150\145\x69\147\150\x74");
        goto yqwkgwucqwqyuqmw;
        awgamseuywgciius:
        $cswemwoyesycwkuq = false;
        goto cmqocusuososcwqk;
        yigmeqsygwgioyaa:
        if (!$this->iigcaickwcykouca($aiooqyausygaasqm)) {
            goto emucccmcoiwcyioq;
        }
        goto iwciaqcioigqwiys;
        cmqocusuososcwqk:
        $qeswwaqqsyymqawg = false;
        goto eswgqkmomsiauqqy;
        yqwkgwucqwqyuqmw:
        $qeswwaqqsyymqawg = ManipulateAttachment::get($gkiuoymeukweiaaw, "\x77\x69\x64\164\150");
        goto icckscyoesgiyksu;
        icckscyoesgiyksu:
        wkycksmmuskouies:
        goto uyyieiuceauoecyq;
        uyyieiuceauoecyq:
        
        
        goto maycimoaceiiuemu;
        aesukugmkcsuocwc:
        return $mcqieaigyeeyaksm;
        goto uyowywywqeagqcuw;
        iwciaqcioigqwiys:
        $gkiuoymeukweiaaw = ManipulateAttachment::iuwsgyqakicakuoq($oiegiwogmwmawkeo);
        goto awgamseuywgciius;
        maycimoaceiiuemu:
        emucccmcoiwcyioq:
        goto aesukugmkcsuocwc;
        eswgqkmomsiauqqy:
        if (!$gkiuoymeukweiaaw) {
            goto wkycksmmuskouies;
        }
        goto qoysygagyigwsiwm;
        uyowywywqeagqcuw:
    }
    
    public function ouauyyakeauaqqik($ewgwqamkygiqaawc, $post_id, $thumbnail_id)
    {
        goto aoewemyqigugysua;
        egauqkuumkisssaa:
        $ewgwqamkygiqaawc = DOMCrawler::igmaewykumgwoaoy($ewgwqamkygiqaawc, ["\x69\155\147\54\40\x61" => ["\x63\x6c\x61\163\x73" => "\x77\x2d\x31\x30\60"]]);
        goto kqsyuyukgswmwcys;
        kqsyuyukgswmwcys:
        umekgwemiaygomky:
        goto yguicqcomwueokwm;
        aoewemyqigugysua:
        if (!$this->iigcaickwcykouca($thumbnail_id)) {
            goto umekgwemiaygomky;
        }
        goto egauqkuumkisssaa;
        yguicqcomwueokwm:
        return $ewgwqamkygiqaawc;
        goto aikuwguwuiekouoo;
        aikuwguwuiekouoo:
    }
    
    public function cgiakacckmcaqgik($nsmgceoqaqogqmuw, $aokagokqyuysuksm, $gkykacccamuwowwc, $meqocwsecsywiiqs, $ioogmuawkgcgmkia, $oiegiwogmwmawkeo)
    {
        goto cooiowgwqgssuqcw;
        wiiaiqiomosmyuwq:
        $nsmgceoqaqogqmuw = str_replace("\57\76", "\x20\x72\x6f\x6c\x65\75\x22\151\155\x67\42\x20\x2f\76", $nsmgceoqaqogqmuw);
        goto sccaumocseyiqsue;
        iwawqgcgskysqyaa:
        $cswemwoyesycwkuq = $qaiwqwwemmyyqosy["\150\145\x69\x67\x68\x74"];
        goto agaomyyqaaswykui;
        yygqgeukeuaciewa:
        wicguyksogckqums:
        goto kysaqkaiksosyegu;
        uacekkwiaagmuieg:
        csmqeagwuisqiuym:
        goto seiysueoskimiaam;
        mgocagiwqsgaisyq:
        $qeswwaqqsyymqawg = DecoratorOption::get("{$oiegiwogmwmawkeo}\137\x73\x69\x7a\x65\137\167", false);
        goto wkumckmusackacmi;
        agaomyyqaaswykui:
        kyaysckiwskgogci:
        goto caocoiecwueosoig;
        ioyyiaguqyiaeaqs:
        $qeswwaqqsyymqawg = $oiegiwogmwmawkeo[0];
        goto ywyqmwuswkcoyqsy;
        sccaumocseyiqsue:
        ygaggwgwiceegasy:
        goto cmmoyuuegqguakga;
        cmmoyuuegqguakga:
        return $nsmgceoqaqogqmuw;
        goto ooccckeeomycucao;
        wiomewyyumkmwsum:
        goto ccymqyyaikauqaiq;
        goto uacekkwiaagmuieg;
        caocoiecwueosoig:
        goto qkycyqgwwoiuaomq;
        goto qsuyqoeocsmkomwy;
        musiyggyqaiwwouu:
        qkycyqgwwoiuaomq:
        goto imymswaceomsasks;
        seiysueoskimiaam:
        $nsmgceoqaqogqmuw = str_replace("\167\151\x64\164\x68\75\42\61\42\40", sprintf("\167\151\144\x74\x68\x3d\42\45\x73\42\40", $qeswwaqqsyymqawg), $nsmgceoqaqogqmuw);
        goto gawswamyawcmsmei;
        wayyiemaccqkmqeg:
        goto kyaysckiwskgogci;
        goto yygqgeukeuaciewa;
        uyouccoiyogmuwey:
        if (is_array($oiegiwogmwmawkeo)) {
            goto eageyyymyekskmue;
        }
        goto meyowgukekkkkuqe;
        wkumckmusackacmi:
        $cswemwoyesycwkuq = DecoratorOption::get("{$oiegiwogmwmawkeo}\x5f\163\x69\x7a\145\137\150", false);
        goto wayyiemaccqkmqeg;
        cooiowgwqgssuqcw:
        if (!$this->iigcaickwcykouca($aokagokqyuysuksm)) {
            goto ygaggwgwiceegasy;
        }
        goto uyouccoiyogmuwey;
        meyowgukekkkkuqe:
        if ("\146\165\154\154" == $oiegiwogmwmawkeo && ($qaiwqwwemmyyqosy = $this->qaeakmimoqkugagk(ManipulateAttachment::ckoygqywcuqasqea($aokagokqyuysuksm)))) {
            goto wicguyksogckqums;
        }
        goto mgocagiwqsgaisyq;
        imymswaceomsasks:
        if ($cswemwoyesycwkuq && $qeswwaqqsyymqawg) {
            goto csmqeagwuisqiuym;
        }
        goto sacmqsciuaucgaww;
        ywyqmwuswkcoyqsy:
        $cswemwoyesycwkuq = $oiegiwogmwmawkeo[1];
        goto musiyggyqaiwwouu;
        kysaqkaiksosyegu:
        $qeswwaqqsyymqawg = $qaiwqwwemmyyqosy["\167\151\x64\164\150"];
        goto iwawqgcgskysqyaa;
        qsuyqoeocsmkomwy:
        eageyyymyekskmue:
        goto ioyyiaguqyiaeaqs;
        mqywccygymoeaoym:
        $nsmgceoqaqogqmuw = str_replace("\x68\x65\x69\x67\x68\164\x3d\x22\x31\42\x20", '', $nsmgceoqaqogqmuw);
        goto wiomewyyumkmwsum;
        sacmqsciuaucgaww:
        $nsmgceoqaqogqmuw = str_replace("\x77\151\x64\x74\x68\x3d\x22\x31\x22\40", '', $nsmgceoqaqogqmuw);
        goto mqywccygymoeaoym;
        gawswamyawcmsmei:
        $nsmgceoqaqogqmuw = str_replace("\150\145\x69\x67\150\164\x3d\x22\61\42\x20", sprintf("\150\x65\151\x67\x68\x74\x3d\42\x25\x73\42\40", $cswemwoyesycwkuq), $nsmgceoqaqogqmuw);
        goto cmsyegseqcwmyycy;
        cmsyegseqcwmyycy:
        ccymqyyaikauqaiq:
        goto wiiaiqiomosmyuwq;
        ooccckeeomycucao:
    }
    
    public function ywguamaiiyagawsc($kuguwoaesuqsqysu, $attachment_id)
    {
        goto isgceyiuweaueqeu;
        yksgcagiyukouics:
        $svg_path = ManipulateAttachment::ckoygqywcuqasqea($attachment_id);
        goto eiwcgwomusuokygg;
        oqmeeqioiooguikk:
        $wkcwykowmmmwioqs = basename($svg_path);
        goto ggwyamakeyyieeog;
        ksqcmyaawiiiimco:
        cwmkgosooecsywcm:
        goto ysqokomouwswymck;
        caammwwkqeeemaok:
        return $kuguwoaesuqsqysu;
        goto ksqcmyaawiiiimco;
        wiouwokmcckqekqy:
        return $kuguwoaesuqsqysu;
        goto oimwgecwwecuugwq;
        guqwqwceceswwucy:
        $additional_image_sizes = wp_get_additional_image_sizes();
        goto yksgcagiyukouics;
        oeyyasumsgwocquw:
        
        $relative_path = str_replace($upload_dir["\x62\141\163\x65\144\151\162"], '', $svg_path);
        goto oqmeeqioiooguikk;
        ssquocgwsassuike:
        $kuguwoaesuqsqysu["\x73\151\172\145\x73"] = $wyicceigkekkkwgs;
        goto uommmgequgiiykci;
        ysqokomouwswymck:
        $kuguwoaesuqsqysu = ["\x77\151\x64\164\150" => intval($qaiwqwwemmyyqosy["\167\x69\x64\164\150"]), "\150\145\x69\x67\x68\164" => intval($qaiwqwwemmyyqosy["\x68\x65\x69\x67\x68\164"]), "\x66\151\154\x65" => $relative_path];
        goto csgqcskywiqwyocw;
        suicqccekqckayec:
        foreach (get_intermediate_image_sizes() as $piuesceqiguuskme) {
            goto iymwycosumimggmu;
            yqimmomioeoaqwkq:
            uieeaeqciogamoqe:
            goto kosccieswmaoeoyk;
            gkwyuumqeuikwiku:
            
            $wyicceigkekkkwgs[$piuesceqiguuskme]["\167\x69\x64\164\x68"] = DecoratorOption::get("{$piuesceqiguuskme}\137\163\x69\x7a\x65\137\x77");
            goto mekaesaeskqmgqii;
            iymwycosumimggmu:
            $wyicceigkekkkwgs[$piuesceqiguuskme] = ["\x77\x69\144\164\150" => '', "\x68\x65\x69\x67\x68\164" => '', "\143\x72\157\160" => false];
            goto wmismwqqqagsomky;
            eymgmkoqgoqicgsi:
            uqggmkmmysmeqkmy:
            goto oueaeyqiqiakqaek;
            uiuiuicckaiksqyc:
            $wyicceigkekkkwgs[$piuesceqiguuskme]["\146\151\x6c\x65"] = $wkcwykowmmmwioqs;
            goto amemoiimosckqems;
            qwkyuqqgkugqggqo:
            
            $wyicceigkekkkwgs[$piuesceqiguuskme]["\x63\x72\x6f\x70"] = DecoratorOption::get("{$piuesceqiguuskme}\137\143\162\157\160");
            goto cacaysyqsqaauawm;
            bweusaooumwyemuu:
            scymgswieuyiqwmm:
            goto qsisgmaawywioogk;
            amemoiimosckqems:
            $wyicceigkekkkwgs[$piuesceqiguuskme]["\x6d\x69\155\145\55\x74\x79\160\x65"] = ManipulateAttachment::ikocqgeqiykwwyqs($attachment_id);
            goto yqimmomioeoaqwkq;
            cacaysyqsqaauawm:
            goto eskcocwimiseewmu;
            goto iosymaiumakyyaos;
            ggccmgysseeqcaga:
            eskcocwimiseewmu:
            goto uiuiuicckaiksqyc;
            esgykeaqimuiewgw:
            goto scymgswieuyiqwmm;
            goto eymgmkoqgoqicgsi;
            wgkeakuiaqswmkes:
            if (isset($additional_image_sizes[$piuesceqiguuskme]["\150\145\x69\147\150\x74"])) {
                goto uqggmkmmysmeqkmy;
            }
            goto kemiasqyoocyqqgm;
            qsisgmaawywioogk:
            if (isset($additional_image_sizes[$piuesceqiguuskme]["\x63\162\x6f\x70"])) {
                goto gymqkieyuiawacwi;
            }
            goto qwkyuqqgkugqggqo;
            miiaowmiyoemouke:
            
            $wyicceigkekkkwgs[$piuesceqiguuskme]["\x77\x69\144\164\150"] = intval($additional_image_sizes[$piuesceqiguuskme]["\167\151\144\164\x68"]);
            goto auoaywowugkacsia;
            auoaywowugkacsia:
            usasekcgsyyqymgy:
            goto wgkeakuiaqswmkes;
            kuigwocyaagakags:
            wmskawmisgksegwe:
            goto miiaowmiyoemouke;
            kqgqymcemksgmsaa:
            
            $wyicceigkekkkwgs[$piuesceqiguuskme]["\143\162\x6f\160"] = intval($additional_image_sizes[$piuesceqiguuskme]["\x63\162\157\x70"]);
            goto ggccmgysseeqcaga;
            mekaesaeskqmgqii:
            goto usasekcgsyyqymgy;
            goto kuigwocyaagakags;
            oueaeyqiqiakqaek:
            
            $wyicceigkekkkwgs[$piuesceqiguuskme]["\150\145\x69\147\x68\x74"] = intval($additional_image_sizes[$piuesceqiguuskme]["\150\x65\151\x67\x68\x74"]);
            goto bweusaooumwyemuu;
            wmismwqqqagsomky:
            if (isset($additional_image_sizes[$piuesceqiguuskme]["\167\151\144\x74\150"])) {
                goto wmskawmisgksegwe;
            }
            goto gkwyuumqeuikwiku;
            kemiasqyoocyqqgm:
            
            $wyicceigkekkkwgs[$piuesceqiguuskme]["\x68\145\x69\147\x68\164"] = DecoratorOption::get("{$piuesceqiguuskme}\x5f\x73\x69\x7a\x65\x5f\150");
            goto esgykeaqimuiewgw;
            iosymaiumakyyaos:
            gymqkieyuiawacwi:
            goto kqgqymcemksgmsaa;
            kosccieswmaoeoyk:
        }
        goto sqqcaugoikagoykc;
        eiwcgwomusuokygg:
        $upload_dir = DecoratorFile::oemywwmmmiywiqai();
        goto oeyyasumsgwocquw;
        csgqcskywiqwyocw:
        
        $wyicceigkekkkwgs = [];
        goto suicqccekqckayec;
        ggwyamakeyyieeog:
        $qaiwqwwemmyyqosy = $this->qaeakmimoqkugagk($svg_path);
        goto ssaeeugeycyaaaki;
        uommmgequgiiykci:
        yumiokuikmkkwcwg:
        goto wiouwokmcckqekqy;
        ssaeeugeycyaaaki:
        if ($qaiwqwwemmyyqosy) {
            goto cwmkgosooecsywcm;
        }
        goto caammwwkqeeemaok;
        sqqcaugoikagoykc:
        ooqwuoiqmiswgkyu:
        goto ssquocgwsassuike;
        isgceyiuweaueqeu:
        if (!$this->iigcaickwcykouca($attachment_id)) {
            goto yumiokuikmkkwcwg;
        }
        goto guqwqwceceswwucy;
        oimwgecwwecuugwq:
    }
    
    public function wqyqisgcyewimoai($icwicymcioeyeyek, $post)
    {
        goto wqaiocgoqsqogmcm;
        cymmwkiaogwsmcsu:
        return $icwicymcioeyeyek;
        goto ueaiaeaaaiiuskyi;
        wqaiocgoqsqogmcm:
        
        if (!is_wp_error($icwicymcioeyeyek)) {
            goto ycyoioowuumgwkuk;
        }
        goto ccwsuiigukoykcew;
        ccwsuiigukoykcew:
        $icwicymcioeyeyek = ManipulateAttachment::smiqaaaecemiwugu($post, ManipulateAttachment::ckoygqywcuqasqea($post));
        goto wkemscqmqyimmqme;
        wkemscqmqyimmqme:
        ManipulateAttachment::_updateMeta($post, $icwicymcioeyeyek);
        goto maiaiacekmmwswqe;
        maiaiacekmmwswqe:
        ycyoioowuumgwkuk:
        goto cymmwkiaogwsmcsu;
        ueaiaeaaaiiuskyi:
    }
    
    protected function qaeakmimoqkugagk($waoisqguweoociwe)
    {
        goto qsamicayummauigq;
        syskuqogeeoicwgw:
        if (isset($siquossayskcwkea->width, $siquossayskcwkea->height)) {
            goto gqsciemssskoqamq;
        }
        goto kommicqseqmaiuss;
        sgosioakiaeqmyyy:
        $qeswwaqqsyymqawg = 0;
        goto ocmywgkaoogmcsau;
        qsamicayummauigq:
        $waoisqguweoociwe = @simplexml_load_file($waoisqguweoociwe);
        goto sgosioakiaeqmyyy;
        qeaiigkoomwsgoem:
        gyaiswaqomsiwcwu:
        goto gsageymuesseosmy;
        yseimcmuaycskkak:
        mwagkoucauykimsu:
        goto gowsaeyyqagsmkce;
        ywagwigaamkacqsm:
        goto gmqmkgkikksymkik;
        goto eouoyysyekegaigi;
        ygqwuggqqouywgoq:
        $cswemwoyesycwkuq = intval($wyicceigkekkkwgs[3]);
        goto yseimcmuaycskkak;
        ukiagcaimyycouuq:
        $qeswwaqqsyymqawg = intval($wyicceigkekkkwgs[2]);
        goto ygqwuggqqouywgoq;
        cmqyiscgeswqsoog:
        $qeswwaqqsyymqawg = intval($siquossayskcwkea->width);
        goto iqyicsuysksymwuw;
        wskkqgweqwsaygqi:
        goto gyaiswaqomsiwcwu;
        goto saimmkcsakcakqww;
        eouoyysyekegaigi:
        weqkaeeoycmmmkcc:
        goto wigumuwcsuiaauyw;
        wigumuwcsuiaauyw:
        $wyicceigkekkkwgs = explode("\x20", $siquossayskcwkea->viewBox);
        goto isoisgaoqmiqeiak;
        qywgeimouqcummco:
        if (!$waoisqguweoociwe) {
            goto kgqyyosqeaqigeuo;
        }
        goto sgkcewwkiomywgky;
        sgkcewwkiomywgky:
        $siquossayskcwkea = $waoisqguweoociwe->attributes();
        goto syskuqogeeoicwgw;
        isoisgaoqmiqeiak:
        if (!isset($wyicceigkekkkwgs[2], $wyicceigkekkkwgs[3])) {
            goto mwagkoucauykimsu;
        }
        goto ukiagcaimyycouuq;
        saimmkcsakcakqww:
        gqsciemssskoqamq:
        goto cmqyiscgeswqsoog;
        kommicqseqmaiuss:
        if (isset($siquossayskcwkea->viewBox)) {
            goto weqkaeeoycmmmkcc;
        }
        goto yyeowwwqogwoeoyc;
        gsageymuesseosmy:
        kgqyyosqeaqigeuo:
        goto skwiuqgoiaiskqmm;
        ocmywgkaoogmcsau:
        $cswemwoyesycwkuq = 0;
        goto qywgeimouqcummco;
        skwiuqgoiaiskqmm:
        return ["\x77\151\x64\x74\150" => $qeswwaqqsyymqawg, "\150\x65\x69\147\x68\164" => $cswemwoyesycwkuq, "\157\x72\x69\x65\x6e\164\x61\x74\151\x6f\x6e" => $qeswwaqqsyymqawg > $cswemwoyesycwkuq ? "\x6c\141\x6e\144\x73\143\141\160\x65" : "\160\157\x72\x74\x72\141\x69\164"];
        goto ikosmomwmyimqaew;
        iqyicsuysksymwuw:
        $cswemwoyesycwkuq = intval($siquossayskcwkea->height);
        goto qeaiigkoomwsgoem;
        gowsaeyyqagsmkce:
        gmqmkgkikksymkik:
        goto wskkqgweqwsaygqi;
        yyeowwwqogwoeoyc:
        return false;
        goto ywagwigaamkacqsm;
        ikosmomwmyimqaew:
    }
    
    public function umacyowesakeiewk($wisgiwskwawciiee, $aiooqyausygaasqm, $oiegiwogmwmawkeo)
    {
        goto wyucqqggakoceowc;
        omkkomymwsowywwa:
        if (!$qaiwqwwemmyyqosy) {
            goto mewsemcoqiuuwwme;
        }
        goto qmwomemuqyaimiso;
        myaeiwowqwegogmq:
        
        $wisgiwskwawciiee["\167\x69\x64\164\x68"] = 80;
        goto yauqmqauoqwymcsu;
        wyucqqggakoceowc:
        if (!$this->iigcaickwcykouca($aiooqyausygaasqm)) {
            goto yeemeukcggweaowa;
        }
        goto iuiyqyiwisggcywk;
        qiaayoymqmmemiiy:
        $qaiwqwwemmyyqosy = $this->qaeakmimoqkugagk(ManipulateAttachment::ckoygqywcuqasqea($aiooqyausygaasqm));
        goto oummiciwcqkwymss;
        weaqamgsuuwuouks:
        $cswemwoyesycwkuq = 100;
        goto ywumciccwiakyeus;
        oummiciwcqkwymss:
        yqocsiwyueakoqoe:
        goto omkkomymwsowywwa;
        mwucaqouymaweuck:
        yeemeukcggweaowa:
        goto eyaciqqycmmgoski;
        qwsioymycmywyqiw:
        if ($qaiwqwwemmyyqosy) {
            goto yqocsiwyueakoqoe;
        }
        goto qiaayoymqmmemiiy;
        eyaciqqycmmgoski:
        return $wisgiwskwawciiee;
        goto oqgomigmmsikougi;
        awggeauumiqymcoi:
        $qeswwaqqsyymqawg = ManipulateArray::get($qaiwqwwemmyyqosy, "\x77\151\144\164\x68");
        goto eiqawcsoocuowioo;
        eiqawcsoocuowioo:
        mewsemcoqiuuwwme:
        goto kkeiscyscckuuqci;
        ywumciccwiakyeus:
        $qaiwqwwemmyyqosy = ManipulateAttachment::iuwsgyqakicakuoq($oiegiwogmwmawkeo);
        goto qwsioymycmywyqiw;
        yauqmqauoqwymcsu:
        
        goto mwucaqouymaweuck;
        iuiyqyiwisggcywk:
        $qeswwaqqsyymqawg = 100;
        goto weaqamgsuuwuouks;
        kkeiscyscckuuqci:
        $wisgiwskwawciiee["\150\145\x69\147\x68\x74"] = 80;
        goto myaeiwowqwegogmq;
        qmwomemuqyaimiso:
        $cswemwoyesycwkuq = ManipulateArray::get($qaiwqwwemmyyqosy, "\150\145\151\147\150\164");
        goto awggeauumiqymcoi;
        oqgomigmmsikougi:
    }
    
    public function iigcaickwcykouca($aiooqyausygaasqm) : bool
    {
        return self::SVG_MIME_TYPE === ManipulateAttachment::ikocqgeqiykwwyqs($aiooqyausygaasqm);
    }
}
