<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b6c65a2d22             |
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
    const SVG_MIME_TYPE = "\x69\x6d\141\x67\145\x2f\x73\166\147\53\x78\x6d\x6c";
    
    public ?Sanitizer $sanitizer = null;
    public function __construct()
    {
        goto ksuoesmcewiqukgy;
        cuacsemcmuyaokge:
        
        $umcwwewscqegoqoe->minify(true);
        goto aoqqweiisiaekqsk;
        ksuoesmcewiqukgy:
        $umcwwewscqegoqoe = new Sanitizer();
        goto cuacsemcmuyaokge;
        kwkeiomeuququaoy:
        parent::__construct();
        goto giqysmgscwwqgmqe;
        aoqqweiisiaekqsk:
        $this->sanitizer = $umcwwewscqegoqoe;
        goto kwkeiomeuququaoy;
        giqysmgscwwqgmqe:
    }
    public function wigskegsqequoeks()
    {
        $this->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\x61\144\x64\x5f\164\167\151\x67\x5f\x66\165\156\x63\x74\151\157\156\163"), [$this, "\x65\x75\x65\145\171\x65\155\147\153\x65\x79\143\x65\151\x73\141"])->qcsmikeggeemccuu("\147\x65\x74\137\151\x6d\x61\147\x65\x5f\164\x61\147", [$this, "\143\x67\151\x61\153\141\x63\143\x6b\x6d\x63\x61\161\x67\x69\x6b"], 10, 6);
        parent::wigskegsqequoeks();
    }
    public function kgquecmsgcouyaya()
    {
        $this->cecaguuoecmccuse("\165\160\x6c\157\x61\144\137\x6d\151\x6d\x65\x73", [$this, "\147\147\167\x63\145\161\x77\145\x65\141\141\x63\167\157\x69\163"])->cecaguuoecmccuse("\167\160\137\x68\141\156\144\154\145\137\x75\x70\x6c\157\141\144\x5f\160\x72\x65\x66\151\x6c\164\145\x72", [$this, "\x6d\145\153\x65\x75\x77\x69\x65\x63\x69\161\171\155\x61\151\x6f"])->cecaguuoecmccuse("\x73\x76\147\x5f\141\164\x74\162\x69\x62\x75\164\x65\163", [$this, "\x6d\161\x79\141\143\x77\141\x61\x6f\x63\x67\143\x73\171\141\x67"], 999)->cecaguuoecmccuse("\x77\160\137\x63\x68\145\x63\153\137\x66\151\x6c\145\x74\171\x70\x65\x5f\141\x6e\x64\137\145\170\164", [$this, "\x61\153\x69\x6f\157\171\141\165\x6b\147\171\165\x6d\143\x6d\x75"], 75, 4)->cecaguuoecmccuse("\x61\x64\x6d\151\x6e\x5f\160\157\163\x74\137\164\150\165\155\142\x6e\141\151\x6c\x5f\150\x74\155\x6c", [$this, "\x6f\x75\x61\165\171\x79\x61\153\x65\141\x75\141\x71\x71\x69\153"], 10, 3)->cecaguuoecmccuse("\x77\160\x5f\x67\145\164\x5f\x61\164\x74\141\x63\x68\x6d\x65\x6e\x74\x5f\x6d\145\164\141\x64\141\164\141", [$this, "\x77\161\171\x71\x69\163\x67\x63\x79\145\x77\151\155\x6f\141\x69"], 10, 2)->cecaguuoecmccuse("\x77\160\137\160\x72\145\160\141\x72\145\x5f\x61\164\x74\141\x63\150\155\x65\x6e\x74\137\x66\x6f\x72\137\x6a\x73", [$this, "\163\153\x6b\x67\x77\167\153\x79\155\157\157\161\x71\141\x77\155"], 10, 2)->cecaguuoecmccuse("\x77\160\x5f\147\145\x6e\145\162\141\164\x65\x5f\141\x74\164\x61\143\x68\x6d\x65\156\164\137\155\x65\x74\x61\x64\x61\x74\141", [$this, "\x79\167\x67\165\141\x6d\x61\151\x69\x79\x61\147\x61\167\x73\x63"], 10, 2)->cecaguuoecmccuse("\151\155\x61\147\145\x5f\x75\160\154\x6f\x61\144\137\146\151\x6c\164\145\x72\137\x65\x78\x63\154\x75\144\x65", [$this, "\x71\161\153\157\167\x73\143\141\x6f\x6f\165\143\x6b\x65\x67\x6f"], 10, 2)->cecaguuoecmccuse($this->ygyygikyocoymgaw("\x61\164\x74\x61\x63\x68\x6d\145\x6e\x74\137\x69\163\x5f\163\166\x67"), [$this, "\145\147\x75\157\x6b\167\x71\141\x6d\x63\x63\x77\x63\161\157\155"], 10, 2)->cecaguuoecmccuse("\167\x70\137\x67\145\164\137\141\164\164\x61\x63\x68\x6d\145\x6e\x74\137\x69\x6d\141\x67\145\x5f\x61\164\164\162\x69\x62\165\164\145\163", [$this, "\171\x63\x79\x71\153\x67\143\151\147\147\157\141\147\141\147\147"], 10, 3);
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
        $siquossayskcwkea["\150\x65\151\x67\150\164"] = 100;
        goto oqumomyawuuomquy;
        smmagsweysscecce:
        qaeqsckgkimiuwca:
        goto iiogyckwmaouswqy;
        oqumomyawuuomquy:
        $siquossayskcwkea["\x77\151\x64\x74\x68"] = 100;
        goto smmagsweysscecce;
        guoqssciqoegywsg:
        $siquossayskcwkea = $this->kguoyqackakgysoy($siquossayskcwkea);
        goto gqcosoeyaqmyccca;
        gqcosoeyaqmyccca:
        if (!(!isset($siquossayskcwkea["\150\145\151\147\x68\x74"]) && !isset($siquossayskcwkea["\x77\151\x64\164\150"]))) {
            goto qaeqsckgkimiuwca;
        }
        goto skegiiomcggeymuw;
        iiogyckwmaouswqy:
        return $siquossayskcwkea;
        goto qyckwskcewqioqyk;
        qyckwskcewqioqyk:
    }
    
    public function kguoyqackakgysoy($siquossayskcwkea, $uuossqmuccwyiemo = 16)
    {
        goto yikaqawiqaokyqgw;
        coawukgoisakmosc:
        $wyicceigkekkkwgs = (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x73\x76\147\137\145\x6c\x65\x6d\145\156\x74\x5f\x63\154\x61\x73\163\137\162\141\x74\x69\x6f\156\x5f\x63\x6f\x6e\x76\145\162\164\145\162"), []);
        goto eqiqgwqscsswkmwk;
        eqggkouoswesgwya:
        $uuossqmuccwyiemo = 16;
        goto icoooiwmiusyeaes;
        semoowiyeimkyeuc:
        eagggcysqeeaeose:
        goto qgmegqweacumuccw;
        aymkogwsagaggsem:
        if (!(!is_numeric($uuossqmuccwyiemo) || $uuossqmuccwyiemo < 1)) {
            goto wkoqomessckkgeua;
        }
        goto eqggkouoswesgwya;
        qgmegqweacumuccw:
        eeicwkoeaqmaoywm:
        goto cumoewcksgaqwwoo;
        yikaqawiqaokyqgw:
        $egkyssmuqcwaciya = ManipulateArray::get($siquossayskcwkea, "\x63\154\x61\x73\163");
        goto askiamwsewkaqwoi;
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
        emoaoyuqmmymmwkq:
        foreach ($wyicceigkekkkwgs as $oiegiwogmwmawkeo => $eqgoocgaqwqcimie) {
            goto oayiqwmaaukkuimy;
            gmmaicwkwqiywwyc:
            $siquossayskcwkea["\150\145\x69\x67\x68\164"] = intval($eqgoocgaqwqcimie[1] * $uuossqmuccwyiemo);
            goto goouowwycoakigim;
            euemimammkmwkuwk:
            goto qaoooeioqwiiceyq;
            goto isgiyocowwwceaoa;
            kgeiskysuuasqckq:
            oimegoemmuwwwkyo:
            goto cwccwmggqyeeggwe;
            gkoasaqwwqsgwqgo:
            $siquossayskcwkea["\167\x69\144\164\x68"] = intval($eqgoocgaqwqcimie);
            goto okwsycyoqycgwaco;
            oayiqwmaaukkuimy:
            if (!(strpos($egkyssmuqcwaciya, $oiegiwogmwmawkeo) !== false)) {
                goto oimegoemmuwwwkyo;
            }
            goto eiwkyioqeaaemqsa;
            ucoikisgieeseyqo:
            $siquossayskcwkea["\167\151\144\x74\x68"] = intval($eqgoocgaqwqcimie[0] * $uuossqmuccwyiemo);
            goto gmmaicwkwqiywwyc;
            cwccwmggqyeeggwe:
            gcwikewmwkqsugms:
            goto seocecaioucmugky;
            okwsycyoqycgwaco:
            $siquossayskcwkea["\150\145\x69\x67\150\x74"] = intval($eqgoocgaqwqcimie);
            goto euemimammkmwkuwk;
            eiwkyioqeaaemqsa:
            if (is_array($eqgoocgaqwqcimie)) {
                goto ecmiggsmgmeaaqug;
            }
            goto kgogceiykkokkgeg;
            isgiyocowwwceaoa:
            ecmiggsmgmeaaqug:
            goto ucoikisgieeseyqo;
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
        cumoewcksgaqwwoo:
        iwemkuaseiooqoqg:
        goto kuiomeesyokwsgio;
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
        $eyoesceegakeygsi->kmmegqceukkkawme("\x69\x73\x5f\x73\166\x67", function ($aiooqyausygaasqm) {
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
        $yawwowoqosismgyq["\x73\166\147"] = self::SVG_MIME_TYPE;
        goto gsoyaqsaauaokukc;
        msaegiggioiykouc:
        return $yawwowoqosismgyq;
        goto uymqoeqgwwkeiuok;
        gsoyaqsaauaokukc:
        $yawwowoqosismgyq["\163\x76\147\x7a"] = self::SVG_MIME_TYPE;
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
        mmqsgsuycqioemgo:
        return $wwgucssaecqekuek;
        goto qqyeogaouscuaikw;
        oeaskyqueyagqcmc:
        ManipulateArray::unset($wwgucssaecqekuek, ["\163\x72\143\163\145\164", "\x73\151\x7a\x65\x73"]);
        goto ckcesgcceqqqieem;
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
        wsouygqoeyuksock:
        return $aqykuigiuwmmcieu;
        goto qaugkmgccegqkasu;
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
            quwwquywcuyiiweo:
            $ewgwqamkygiqaawc = preg_replace("\57\x3c\x5c\x3f\170\x6d\154\56\52\x3f\134\77\x3e\x2f", '', $ewgwqamkygiqaawc);
            goto eiiqicyywgugksuc;
            eiiqicyywgugksuc:
            $aqykuigiuwmmcieu = DOMCrawler::igmaewykumgwoaoy($ewgwqamkygiqaawc, ["\163\x76\x67" => ["\143\154\x61\163\x73" => $egkyssmuqcwaciya]]);
            goto sugmgeiemuygeoce;
            mcccguiaquiickwq:
            $ewgwqamkygiqaawc = $this->kcciqwskewsuaemk()->souwykwwmyygqyqi($qogsmwakwacwqogk);
            goto quwwquywcuyiiweo;
            swkmkgmucceyweie:
            $egkyssmuqcwaciya = DOMCrawler::waecsyqmwascmqoa($nsmgceoqaqogqmuw, "\x69\155\147", "\x63\x6c\x61\x73\x73");
            goto aooeykwscmqgouay;
            sugmgeiemuygeoce:
        } catch (Exception $wgaoewqkwgomoaai) {
            $aqykuigiuwmmcieu = $nsmgceoqaqogqmuw;
        }
        goto wswmegcumomiwaqo;
        qaugkmgccegqkasu:
    }
    
    public function akiooyaukgyumcmu($icwicymcioeyeyek = null, $qogsmwakwacwqogk = null, $wkcwykowmmmwioqs = null, $yawwowoqosismgyq = null)
    {
        goto qssyiieuymmiwicm;
        yigecwqswuowoakm:
        $icwicymcioeyeyek["\145\170\164"] = $yucgcsieomwqgwws;
        goto aqguswuomiqimcwy;
        kuyuwimysoqcmgek:
        if (!(strlen($yucgcsieomwqgwws) < 1)) {
            goto scageqmiwcyqmmmk;
        }
        goto fosuiwomyuwkaisi;
        aqguswuomiqimcwy:
        swgecgeeeaaakgss:
        goto gocwgeomykcekcso;
        qssyiieuymmiwicm:
        $yucgcsieomwqgwws = isset($icwicymcioeyeyek["\x65\170\x74"]) ? $icwicymcioeyeyek["\x65\170\x74"] : '';
        goto kuyuwimysoqcmgek;
        fosuiwomyuwkaisi:
        $ukequsueuukqgaca = explode("\x2e", $wkcwykowmmmwioqs);
        goto yqewusaguumeiqyq;
        yqewusaguumeiqyq:
        $yucgcsieomwqgwws = strtolower(end($ukequsueuukqgaca));
        goto kwwgmsmuoeysguwq;
        kwwgmsmuoeysguwq:
        scageqmiwcyqmmmk:
        goto qeaugewkiwmkoaas;
        gocwgeomykcekcso:
        return $icwicymcioeyeyek;
        goto kggwiioyiqgskcem;
        qeaugewkiwmkoaas:
        if (!in_array($yucgcsieomwqgwws, ["\163\166\147", "\163\166\x67\x7a"])) {
            goto swgecgeeeaaakgss;
        }
        goto cgmgikoumekoyyae;
        cgmgikoumekoyyae:
        $icwicymcioeyeyek["\164\x79\x70\145"] = self::SVG_MIME_TYPE;
        goto yigecwqswuowoakm;
        kggwiioyiqgskcem:
    }
    
    public function mekeuwieciqymaio($qogsmwakwacwqogk)
    {
        goto oimaymokouuwueum;
        qwikcqiaiumsswow:
        return $qogsmwakwacwqogk;
        goto ukggweysgiiygqsa;
        iaqwisciugaosygy:
        emwggqiqcmmqeawy:
        goto uoqequmkiyukiqgi;
        oimaymokouuwueum:
        if (!($qogsmwakwacwqogk["\x74\171\x70\x65"] === self::SVG_MIME_TYPE)) {
            goto kyswigcwgusmesqi;
        }
        goto cgsawegeqqsecwam;
        uoqequmkiyukiqgi:
        kyswigcwgusmesqi:
        goto qwikcqiaiumsswow;
        eucsyaygqqcqamus:
        $qogsmwakwacwqogk["\x65\x72\162\x6f\162"] = __("\123\157\162\162\x79\x2c\x20\x74\x68\x69\163\x20\x66\x69\x6c\x65\x20\143\x6f\165\154\x64\x6e\47\164\40\x62\145\40\x73\x61\x6e\x69\164\x69\172\x65\144\40\163\x6f\40\146\157\162\40\x73\x65\x63\x75\x72\x69\164\x79\x20\162\145\141\x73\157\x6e\163\40\167\141\x73\156\47\164\x20\165\160\154\157\141\x64\145\x64", PR__CMN__FOUNDATION);
        goto iaqwisciugaosygy;
        cgsawegeqqsecwam:
        if ($this->yiiiqewsseywemqu($qogsmwakwacwqogk["\164\x6d\x70\137\x6e\x61\155\145"])) {
            goto emwggqiqcmmqeawy;
        }
        goto eucsyaygqqcqamus;
        ukggweysgiiygqsa:
    }
    
    public function skkgwwkymooqqawm($keccaugmemegoimu, $aiooqyausygaasqm) : array
    {
        goto ysmessckmysogeua;
        suewugkisoommmgy:
        return $keccaugmemegoimu;
        goto tsywwmwawwgcwmuc;
        ysmessckmysogeua:
        if (!($keccaugmemegoimu["\155\151\x6d\x65"] == self::SVG_MIME_TYPE)) {
            goto kkscsmuyumawosyc;
        }
        goto giiqogwyoikiiqyi;
        sieccokukwgmuggw:
        $possible_sizes = $this->sscegwueamckwmcy("\151\155\141\x67\x65\137\x73\x69\x7a\x65\137\x6e\141\155\x65\x73\x5f\x63\150\x6f\157\163\145", ["\146\x75\154\154" => __("\x46\165\x6c\x6c\x20\x53\x69\172\x65", PR__CMN__FOUNDATION), "\164\150\165\x6d\142\156\x61\x69\x6c" => __("\124\x68\165\155\x62\x6e\x61\x69\154", PR__CMN__FOUNDATION), "\155\145\x64\x69\165\x6d" => __("\115\145\144\151\x75\x6d", PR__CMN__FOUNDATION), "\154\141\x72\x67\x65" => __("\x4c\x61\x72\x67\x65", PR__CMN__FOUNDATION)]);
        goto yqckgyeeuyayosww;
        geqakgsumkyosuca:
        wsawmoiaemkggocs:
        goto qicekkeggigkwqeu;
        giiqogwyoikiiqyi:
        $qaiwqwwemmyyqosy = $this->qaeakmimoqkugagk(ManipulateAttachment::ckoygqywcuqasqea($aiooqyausygaasqm));
        goto iqiwimyamykmuiwo;
        iqiwimyamykmuiwo:
        if (!$qaiwqwwemmyyqosy) {
            goto iekecmawqyigmqcg;
        }
        goto egyuciuossumacuy;
        yqckgyeeuyayosww:
        $wyicceigkekkkwgs = [];
        goto qmsyaycokgmmwycs;
        qicekkeggigkwqeu:
        $keccaugmemegoimu["\163\151\172\145\x73"] = $wyicceigkekkkwgs;
        goto moyqaggmqqimwusm;
        egwuecigeyuooiam:
        iekecmawqyigmqcg:
        goto sieccokukwgmuggw;
        qmsyaycokgmmwycs:
        foreach ($possible_sizes as $oiegiwogmwmawkeo => $pkyyagewkiyckmwy) {
            goto cocwomcoymcaqgky;
            wqmgwcsuccoweocq:
            iuiawwoouuwwiqca:
            goto oyeswuecyaiiawyg;
            cocwomcoymcaqgky:
            $default_height = 2000;
            goto ukygqcaqcaqqmyew;
            moeeimaaoaycycmi:
            $default_height = $qaiwqwwemmyyqosy["\150\x65\x69\147\150\x74"];
            goto mggyiwyuuiwswaks;
            wqgecqaciyakecys:
            $wyicceigkekkkwgs[$oiegiwogmwmawkeo] = ["\150\x65\151\147\x68\x74" => DecoratorOption::get("{$oiegiwogmwmawkeo}\x5f\163\151\x7a\x65\x5f\167", $default_height), "\167\x69\x64\x74\x68" => DecoratorOption::get("{$oiegiwogmwmawkeo}\137\163\x69\172\145\137\150", $default_width), "\165\x72\154" => $keccaugmemegoimu["\x75\x72\154"], "\157\162\x69\145\x6e\164\141\x74\151\x6f\156" => "\x70\157\x72\164\x72\x61\x69\x74"];
            goto wqmgwcsuccoweocq;
            ukygqcaqcaqqmyew:
            $default_width = 2000;
            goto ymiosikicyqkaiaa;
            mggyiwyuuiwswaks:
            $default_width = $qaiwqwwemmyyqosy["\167\x69\x64\164\150"];
            goto yemwekyegaywgoug;
            yemwekyegaywgoug:
            oeeakgukqusiqswc:
            goto wqgecqaciyakecys;
            ymiosikicyqkaiaa:
            if (!("\x66\x75\x6c\x6c" === $oiegiwogmwmawkeo && $qaiwqwwemmyyqosy)) {
                goto oeeakgukqusiqswc;
            }
            goto moeeimaaoaycycmi;
            oyeswuecyaiiawyg:
        }
        goto geqakgsumkyosuca;
        kawgkswoygkmgmao:
        kkscsmuyumawosyc:
        goto suewugkisoommmgy;
        moyqaggmqqimwusm:
        $keccaugmemegoimu["\151\x63\157\156"] = $keccaugmemegoimu["\165\162\154"];
        goto kawgkswoygkmgmao;
        egyuciuossumacuy:
        $keccaugmemegoimu = array_merge($keccaugmemegoimu, $qaiwqwwemmyyqosy);
        goto egwuecigeyuooiam;
        tsywwmwawwgcwmuc:
    }
    
    protected function yiiiqewsseywemqu($qogsmwakwacwqogk)
    {
        goto icqaiqyewuyegkeq;
        aqyimgoegakwgoum:
        
        if (!$yuoaskweqogoasgc) {
            goto eookussqeicycoio;
        }
        goto qmiouyoeguiqymgi;
        kcaysyweukeimoik:
        return false;
        goto eakoykqcmyemgyum;
        noswwaawyacomwyo:
        eookussqeicycoio:
        goto wcoekawkkswkgamc;
        gmywmsmiayimqygy:
        if (!($qawsmigsyysqwmeq === false)) {
            goto ieauiumamygiuckc;
        }
        goto kcaysyweukeimoik;
        weocosykwsaimaks:
        
        $qawsmigsyysqwmeq = $this->sanitizer->sanitize($yeueggiecgqcswqm);
        goto gmywmsmiayimqygy;
        eouugaqkgamwmgmo:
        qeggwmykewcoieic:
        goto weocosykwsaimaks;
        ogwaiqiccywqqiwk:
        return false;
        goto wsomqsmeououqiwu;
        wcoekawkkswkgamc:
        return $this->kcciqwskewsuaemk()->kwsmkgyoyaqecwuu($qogsmwakwacwqogk, $qawsmigsyysqwmeq);
        goto uqwsiocauuswgwok;
        wsomqsmeououqiwu:
        qucoecmmmacqooek:
        goto eouugaqkgamwmgmo;
        moeseousgukmygmy:
        $yeueggiecgqcswqm = gzdecode($yeueggiecgqcswqm);
        goto xaiaogcwcaeweoiu;
        eakoykqcmyemgyum:
        ieauiumamygiuckc:
        goto aqyimgoegakwgoum;
        xaiaogcwcaeweoiu:
        
        if (!($yeueggiecgqcswqm === false)) {
            goto qucoecmmmacqooek;
        }
        goto ogwaiqiccywqqiwk;
        qmiouyoeguiqymgi:
        $qawsmigsyysqwmeq = gzencode($qawsmigsyysqwmeq);
        goto noswwaawyacomwyo;
        icqaiqyewuyegkeq:
        $yeueggiecgqcswqm = $this->kcciqwskewsuaemk()->souwykwwmyygqyqi($qogsmwakwacwqogk);
        goto dmwmgeswweekqyuw;
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
        emucccmcoiwcyioq:
        oqyosskkgcuckmes:
        goto yigmeqsygwgioyaa;
        giueuuwusgmgeick:
        if (function_exists("\155\x62\x5f\163\164\162\160\x6f\x73")) {
            goto iisgwcgceeygauyk;
        }
        goto eksamuqymmeumqsg;
        iiuwcsgwcguceiko:
        iisgwcgceeygauyk:
        goto wkycksmmuskouies;
        wkycksmmuskouies:
        return 0 === mb_strpos($ygwoqcwsaggqoamw, "\37" . "\213" . "\x8");
        goto emucccmcoiwcyioq;
        eksamuqymmeumqsg:
        return 0 === strpos($ygwoqcwsaggqoamw, "\x1f" . "\x8b" . "\10");
        goto wskcqwywmwmwigce;
        wskcqwywmwmwigce:
        goto oqyosskkgcuckmes;
        goto iiuwcsgwcguceiko;
        yigmeqsygwgioyaa:
    }
    
    public function oowwkoeekmwwgieu($mcqieaigyeeyaksm, $aiooqyausygaasqm, $oiegiwogmwmawkeo)
    {
        goto cmqocusuososcwqk;
        aoewemyqigugysua:
        return $mcqieaigyeeyaksm;
        goto egauqkuumkisssaa;
        maycimoaceiiuemu:
        $qeswwaqqsyymqawg = ManipulateAttachment::get($gkiuoymeukweiaaw, "\x77\x69\144\x74\x68");
        goto aesukugmkcsuocwc;
        umekgwemiaygomky:
        awgamseuywgciius:
        goto aoewemyqigugysua;
        uyyieiuceauoecyq:
        $cswemwoyesycwkuq = ManipulateAttachment::get($gkiuoymeukweiaaw, "\150\145\151\x67\x68\x74");
        goto maycimoaceiiuemu;
        icckscyoesgiyksu:
        if (!$gkiuoymeukweiaaw) {
            goto iwciaqcioigqwiys;
        }
        goto uyyieiuceauoecyq;
        eswgqkmomsiauqqy:
        $gkiuoymeukweiaaw = ManipulateAttachment::iuwsgyqakicakuoq($oiegiwogmwmawkeo);
        goto qoysygagyigwsiwm;
        uyowywywqeagqcuw:
        
        
        goto umekgwemiaygomky;
        aesukugmkcsuocwc:
        iwciaqcioigqwiys:
        goto uyowywywqeagqcuw;
        yqwkgwucqwqyuqmw:
        $qeswwaqqsyymqawg = false;
        goto icckscyoesgiyksu;
        cmqocusuososcwqk:
        if (!$this->iigcaickwcykouca($aiooqyausygaasqm)) {
            goto awgamseuywgciius;
        }
        goto eswgqkmomsiauqqy;
        qoysygagyigwsiwm:
        $cswemwoyesycwkuq = false;
        goto yqwkgwucqwqyuqmw;
        egauqkuumkisssaa:
    }
    
    public function ouauyyakeauaqqik($ewgwqamkygiqaawc, $post_id, $thumbnail_id)
    {
        goto yguicqcomwueokwm;
        wicguyksogckqums:
        kqsyuyukgswmwcys:
        goto kyaysckiwskgogci;
        yguicqcomwueokwm:
        if (!$this->iigcaickwcykouca($thumbnail_id)) {
            goto kqsyuyukgswmwcys;
        }
        goto aikuwguwuiekouoo;
        aikuwguwuiekouoo:
        $ewgwqamkygiqaawc = DOMCrawler::igmaewykumgwoaoy($ewgwqamkygiqaawc, ["\151\x6d\147\x2c\x20\141" => ["\143\154\141\x73\x73" => "\x77\x2d\61\x30\x30"]]);
        goto wicguyksogckqums;
        kyaysckiwskgogci:
        return $ewgwqamkygiqaawc;
        goto eageyyymyekskmue;
        eageyyymyekskmue:
    }
    
    public function cgiakacckmcaqgik($nsmgceoqaqogqmuw, $aokagokqyuysuksm, $gkykacccamuwowwc, $meqocwsecsywiiqs, $ioogmuawkgcgmkia, $oiegiwogmwmawkeo)
    {
        goto mgocagiwqsgaisyq;
        agaomyyqaaswykui:
        qkycyqgwwoiuaomq:
        goto caocoiecwueosoig;
        ywyqmwuswkcoyqsy:
        goto ygaggwgwiceegasy;
        goto musiyggyqaiwwouu;
        imymswaceomsasks:
        $qeswwaqqsyymqawg = $oiegiwogmwmawkeo[0];
        goto sacmqsciuaucgaww;
        ooqwuoiqmiswgkyu:
        return $nsmgceoqaqogqmuw;
        goto uieeaeqciogamoqe;
        wkumckmusackacmi:
        if (is_array($oiegiwogmwmawkeo)) {
            goto ccymqyyaikauqaiq;
        }
        goto wayyiemaccqkmqeg;
        mgocagiwqsgaisyq:
        if (!$this->iigcaickwcykouca($aokagokqyuysuksm)) {
            goto meyowgukekkkkuqe;
        }
        goto wkumckmusackacmi;
        seiysueoskimiaam:
        $nsmgceoqaqogqmuw = str_replace("\x68\145\x69\147\150\x74\x3d\42\x31\42\x20", '', $nsmgceoqaqogqmuw);
        goto gawswamyawcmsmei;
        iwawqgcgskysqyaa:
        goto csmqeagwuisqiuym;
        goto agaomyyqaaswykui;
        musiyggyqaiwwouu:
        ccymqyyaikauqaiq:
        goto imymswaceomsasks;
        gawswamyawcmsmei:
        goto uyouccoiyogmuwey;
        goto cmsyegseqcwmyycy;
        ioyyiaguqyiaeaqs:
        csmqeagwuisqiuym:
        goto ywyqmwuswkcoyqsy;
        cwmkgosooecsywcm:
        meyowgukekkkkuqe:
        goto ooqwuoiqmiswgkyu;
        qsuyqoeocsmkomwy:
        $cswemwoyesycwkuq = $qaiwqwwemmyyqosy["\x68\145\151\x67\150\164"];
        goto ioyyiaguqyiaeaqs;
        yygqgeukeuaciewa:
        $qeswwaqqsyymqawg = DecoratorOption::get("{$oiegiwogmwmawkeo}\137\163\x69\172\x65\137\x77", false);
        goto kysaqkaiksosyegu;
        ooccckeeomycucao:
        $nsmgceoqaqogqmuw = str_replace("\x2f\76", "\x20\162\157\x6c\x65\75\x22\x69\x6d\x67\42\40\x2f\x3e", $nsmgceoqaqogqmuw);
        goto cwmkgosooecsywcm;
        mqywccygymoeaoym:
        ygaggwgwiceegasy:
        goto wiomewyyumkmwsum;
        caocoiecwueosoig:
        $qeswwaqqsyymqawg = $qaiwqwwemmyyqosy["\x77\x69\144\x74\150"];
        goto qsuyqoeocsmkomwy;
        cmmoyuuegqguakga:
        uyouccoiyogmuwey:
        goto ooccckeeomycucao;
        cmsyegseqcwmyycy:
        cooiowgwqgssuqcw:
        goto wiiaiqiomosmyuwq;
        uacekkwiaagmuieg:
        $nsmgceoqaqogqmuw = str_replace("\167\151\x64\164\150\75\x22\x31\42\x20", '', $nsmgceoqaqogqmuw);
        goto seiysueoskimiaam;
        sacmqsciuaucgaww:
        $cswemwoyesycwkuq = $oiegiwogmwmawkeo[1];
        goto mqywccygymoeaoym;
        kysaqkaiksosyegu:
        $cswemwoyesycwkuq = DecoratorOption::get("{$oiegiwogmwmawkeo}\x5f\163\x69\x7a\x65\137\x68", false);
        goto iwawqgcgskysqyaa;
        sccaumocseyiqsue:
        $nsmgceoqaqogqmuw = str_replace("\x68\145\x69\x67\150\164\75\42\61\x22\x20", sprintf("\150\x65\x69\147\150\164\x3d\x22\x25\x73\42\40", $cswemwoyesycwkuq), $nsmgceoqaqogqmuw);
        goto cmmoyuuegqguakga;
        wayyiemaccqkmqeg:
        if ("\146\x75\x6c\x6c" == $oiegiwogmwmawkeo && ($qaiwqwwemmyyqosy = $this->qaeakmimoqkugagk(ManipulateAttachment::ckoygqywcuqasqea($aokagokqyuysuksm)))) {
            goto qkycyqgwwoiuaomq;
        }
        goto yygqgeukeuaciewa;
        wiomewyyumkmwsum:
        if ($cswemwoyesycwkuq && $qeswwaqqsyymqawg) {
            goto cooiowgwqgssuqcw;
        }
        goto uacekkwiaagmuieg;
        wiiaiqiomosmyuwq:
        $nsmgceoqaqogqmuw = str_replace("\167\151\x64\164\x68\75\42\61\x22\40", sprintf("\x77\x69\x64\x74\x68\x3d\42\x25\x73\42\40", $qeswwaqqsyymqawg), $nsmgceoqaqogqmuw);
        goto sccaumocseyiqsue;
        uieeaeqciogamoqe:
    }
    
    public function ywguamaiiyagawsc($kuguwoaesuqsqysu, $attachment_id)
    {
        goto eiwcgwomusuokygg;
        oimwgecwwecuugwq:
        $kuguwoaesuqsqysu["\x73\x69\x7a\x65\x73"] = $wyicceigkekkkwgs;
        goto ycyoioowuumgwkuk;
        ksqcmyaawiiiimco:
        $qaiwqwwemmyyqosy = $this->qaeakmimoqkugagk($svg_path);
        goto ysqokomouwswymck;
        ycyoioowuumgwkuk:
        yksgcagiyukouics:
        goto wqaiocgoqsqogmcm;
        sqqcaugoikagoykc:
        $kuguwoaesuqsqysu = ["\167\x69\144\x74\150" => intval($qaiwqwwemmyyqosy["\167\x69\x64\164\150"]), "\x68\x65\x69\x67\150\164" => intval($qaiwqwwemmyyqosy["\150\145\x69\147\x68\x74"]), "\146\151\x6c\145" => $relative_path];
        goto ssquocgwsassuike;
        ssaeeugeycyaaaki:
        
        $relative_path = str_replace($upload_dir["\142\141\163\x65\144\x69\162"], '', $svg_path);
        goto caammwwkqeeemaok;
        wqaiocgoqsqogmcm:
        return $kuguwoaesuqsqysu;
        goto ccwsuiigukoykcew;
        ggwyamakeyyieeog:
        $upload_dir = DecoratorFile::oemywwmmmiywiqai();
        goto ssaeeugeycyaaaki;
        oeyyasumsgwocquw:
        $additional_image_sizes = wp_get_additional_image_sizes();
        goto oqmeeqioiooguikk;
        uommmgequgiiykci:
        foreach (get_intermediate_image_sizes() as $piuesceqiguuskme) {
            goto mekaesaeskqmgqii;
            wgkeakuiaqswmkes:
            scymgswieuyiqwmm:
            goto kemiasqyoocyqqgm;
            qwkyuqqgkugqggqo:
            
            $wyicceigkekkkwgs[$piuesceqiguuskme]["\150\145\x69\x67\x68\x74"] = intval($additional_image_sizes[$piuesceqiguuskme]["\150\x65\x69\x67\150\164"]);
            goto cacaysyqsqaauawm;
            qsisgmaawywioogk:
            eskcocwimiseewmu:
            goto qwkyuqqgkugqggqo;
            auoaywowugkacsia:
            goto gymqkieyuiawacwi;
            goto wgkeakuiaqswmkes;
            miiaowmiyoemouke:
            
            $wyicceigkekkkwgs[$piuesceqiguuskme]["\167\151\144\x74\x68"] = DecoratorOption::get("{$piuesceqiguuskme}\x5f\163\x69\172\145\137\167");
            goto auoaywowugkacsia;
            kemiasqyoocyqqgm:
            
            $wyicceigkekkkwgs[$piuesceqiguuskme]["\167\x69\144\164\150"] = intval($additional_image_sizes[$piuesceqiguuskme]["\167\151\144\x74\x68"]);
            goto esgykeaqimuiewgw;
            kqgqymcemksgmsaa:
            
            $wyicceigkekkkwgs[$piuesceqiguuskme]["\x63\162\x6f\x70"] = DecoratorOption::get("{$piuesceqiguuskme}\x5f\143\162\157\x70");
            goto ggccmgysseeqcaga;
            kuigwocyaagakags:
            if (isset($additional_image_sizes[$piuesceqiguuskme]["\167\151\x64\164\150"])) {
                goto scymgswieuyiqwmm;
            }
            goto miiaowmiyoemouke;
            eymgmkoqgoqicgsi:
            if (isset($additional_image_sizes[$piuesceqiguuskme]["\150\x65\151\x67\x68\164"])) {
                goto eskcocwimiseewmu;
            }
            goto oueaeyqiqiakqaek;
            isgceyiuweaueqeu:
            uqggmkmmysmeqkmy:
            goto guqwqwceceswwucy;
            esgykeaqimuiewgw:
            gymqkieyuiawacwi:
            goto eymgmkoqgoqicgsi;
            yumiokuikmkkwcwg:
            $wyicceigkekkkwgs[$piuesceqiguuskme]["\x6d\151\x6d\x65\x2d\164\171\x70\x65"] = ManipulateAttachment::ikocqgeqiykwwyqs($attachment_id);
            goto isgceyiuweaueqeu;
            uiuiuicckaiksqyc:
            wmismwqqqagsomky:
            goto amemoiimosckqems;
            ggccmgysseeqcaga:
            goto gkwyuumqeuikwiku;
            goto uiuiuicckaiksqyc;
            bweusaooumwyemuu:
            goto iymwycosumimggmu;
            goto qsisgmaawywioogk;
            yqimmomioeoaqwkq:
            gkwyuumqeuikwiku:
            goto kosccieswmaoeoyk;
            iosymaiumakyyaos:
            if (isset($additional_image_sizes[$piuesceqiguuskme]["\x63\x72\157\160"])) {
                goto wmismwqqqagsomky;
            }
            goto kqgqymcemksgmsaa;
            mekaesaeskqmgqii:
            $wyicceigkekkkwgs[$piuesceqiguuskme] = ["\167\x69\144\x74\150" => '', "\x68\145\x69\147\150\x74" => '', "\143\162\x6f\160" => false];
            goto kuigwocyaagakags;
            kosccieswmaoeoyk:
            $wyicceigkekkkwgs[$piuesceqiguuskme]["\x66\x69\154\145"] = $wkcwykowmmmwioqs;
            goto yumiokuikmkkwcwg;
            cacaysyqsqaauawm:
            iymwycosumimggmu:
            goto iosymaiumakyyaos;
            amemoiimosckqems:
            
            $wyicceigkekkkwgs[$piuesceqiguuskme]["\143\x72\x6f\x70"] = intval($additional_image_sizes[$piuesceqiguuskme]["\x63\x72\x6f\160"]);
            goto yqimmomioeoaqwkq;
            oueaeyqiqiakqaek:
            
            $wyicceigkekkkwgs[$piuesceqiguuskme]["\x68\145\151\147\x68\164"] = DecoratorOption::get("{$piuesceqiguuskme}\x5f\x73\151\172\145\137\x68");
            goto bweusaooumwyemuu;
            guqwqwceceswwucy:
        }
        goto wiouwokmcckqekqy;
        caammwwkqeeemaok:
        $wkcwykowmmmwioqs = basename($svg_path);
        goto ksqcmyaawiiiimco;
        suicqccekqckayec:
        wmskawmisgksegwe:
        goto sqqcaugoikagoykc;
        oqmeeqioiooguikk:
        $svg_path = ManipulateAttachment::ckoygqywcuqasqea($attachment_id);
        goto ggwyamakeyyieeog;
        eiwcgwomusuokygg:
        if (!$this->iigcaickwcykouca($attachment_id)) {
            goto yksgcagiyukouics;
        }
        goto oeyyasumsgwocquw;
        csgqcskywiqwyocw:
        return $kuguwoaesuqsqysu;
        goto suicqccekqckayec;
        wiouwokmcckqekqy:
        usasekcgsyyqymgy:
        goto oimwgecwwecuugwq;
        ysqokomouwswymck:
        if ($qaiwqwwemmyyqosy) {
            goto wmskawmisgksegwe;
        }
        goto csgqcskywiqwyocw;
        ssquocgwsassuike:
        
        $wyicceigkekkkwgs = [];
        goto uommmgequgiiykci;
        ccwsuiigukoykcew:
    }
    
    public function wqyqisgcyewimoai($icwicymcioeyeyek, $post)
    {
        goto maiaiacekmmwswqe;
        ueaiaeaaaiiuskyi:
        ManipulateAttachment::_updateMeta($post, $icwicymcioeyeyek);
        goto mwagkoucauykimsu;
        mwagkoucauykimsu:
        wkemscqmqyimmqme:
        goto weqkaeeoycmmmkcc;
        maiaiacekmmwswqe:
        
        if (!is_wp_error($icwicymcioeyeyek)) {
            goto wkemscqmqyimmqme;
        }
        goto cymmwkiaogwsmcsu;
        weqkaeeoycmmmkcc:
        return $icwicymcioeyeyek;
        goto gmqmkgkikksymkik;
        cymmwkiaogwsmcsu:
        $icwicymcioeyeyek = ManipulateAttachment::smiqaaaecemiwugu($post, ManipulateAttachment::ckoygqywcuqasqea($post));
        goto ueaiaeaaaiiuskyi;
        gmqmkgkikksymkik:
    }
    
    protected function qaeakmimoqkugagk($waoisqguweoociwe)
    {
        goto qywgeimouqcummco;
        cmqyiscgeswqsoog:
        kgqyyosqeaqigeuo:
        goto iqyicsuysksymwuw;
        wigumuwcsuiaauyw:
        return false;
        goto isoisgaoqmiqeiak;
        ygqwuggqqouywgoq:
        $wyicceigkekkkwgs = explode("\x20", $siquossayskcwkea->viewBox);
        goto yseimcmuaycskkak;
        qeaiigkoomwsgoem:
        qsamicayummauigq:
        goto gsageymuesseosmy;
        qywgeimouqcummco:
        $waoisqguweoociwe = @simplexml_load_file($waoisqguweoociwe);
        goto sgkcewwkiomywgky;
        syskuqogeeoicwgw:
        $cswemwoyesycwkuq = 0;
        goto kommicqseqmaiuss;
        eouoyysyekegaigi:
        if (isset($siquossayskcwkea->viewBox)) {
            goto gyaiswaqomsiwcwu;
        }
        goto wigumuwcsuiaauyw;
        mewsemcoqiuuwwme:
        return ["\x77\x69\x64\x74\x68" => $qeswwaqqsyymqawg, "\150\145\x69\x67\x68\164" => $cswemwoyesycwkuq, "\157\162\x69\x65\x6e\164\x61\x74\151\157\x6e" => $qeswwaqqsyymqawg > $cswemwoyesycwkuq ? "\x6c\x61\156\144\163\x63\x61\x70\x65" : "\x70\157\162\164\162\x61\151\164"];
        goto yeemeukcggweaowa;
        ikosmomwmyimqaew:
        sgosioakiaeqmyyy:
        goto yqocsiwyueakoqoe;
        isoisgaoqmiqeiak:
        goto kgqyyosqeaqigeuo;
        goto ukiagcaimyycouuq;
        wskkqgweqwsaygqi:
        $cswemwoyesycwkuq = intval($wyicceigkekkkwgs[3]);
        goto saimmkcsakcakqww;
        ywagwigaamkacqsm:
        if (isset($siquossayskcwkea->width, $siquossayskcwkea->height)) {
            goto qsamicayummauigq;
        }
        goto eouoyysyekegaigi;
        yqocsiwyueakoqoe:
        ocmywgkaoogmcsau:
        goto mewsemcoqiuuwwme;
        gowsaeyyqagsmkce:
        $qeswwaqqsyymqawg = intval($wyicceigkekkkwgs[2]);
        goto wskkqgweqwsaygqi;
        sgkcewwkiomywgky:
        $qeswwaqqsyymqawg = 0;
        goto syskuqogeeoicwgw;
        ukiagcaimyycouuq:
        gyaiswaqomsiwcwu:
        goto ygqwuggqqouywgoq;
        yseimcmuaycskkak:
        if (!isset($wyicceigkekkkwgs[2], $wyicceigkekkkwgs[3])) {
            goto gqsciemssskoqamq;
        }
        goto gowsaeyyqagsmkce;
        skwiuqgoiaiskqmm:
        $cswemwoyesycwkuq = intval($siquossayskcwkea->height);
        goto ikosmomwmyimqaew;
        iqyicsuysksymwuw:
        goto sgosioakiaeqmyyy;
        goto qeaiigkoomwsgoem;
        yyeowwwqogwoeoyc:
        $siquossayskcwkea = $waoisqguweoociwe->attributes();
        goto ywagwigaamkacqsm;
        saimmkcsakcakqww:
        gqsciemssskoqamq:
        goto cmqyiscgeswqsoog;
        kommicqseqmaiuss:
        if (!$waoisqguweoociwe) {
            goto ocmywgkaoogmcsau;
        }
        goto yyeowwwqogwoeoyc;
        gsageymuesseosmy:
        $qeswwaqqsyymqawg = intval($siquossayskcwkea->width);
        goto skwiuqgoiaiskqmm;
        yeemeukcggweaowa:
    }
    
    public function umacyowesakeiewk($wisgiwskwawciiee, $aiooqyausygaasqm, $oiegiwogmwmawkeo)
    {
        goto ywumciccwiakyeus;
        awggeauumiqymcoi:
        wyucqqggakoceowc:
        goto eiqawcsoocuowioo;
        qmwomemuqyaimiso:
        $qaiwqwwemmyyqosy = $this->qaeakmimoqkugagk(ManipulateAttachment::ckoygqywcuqasqea($aiooqyausygaasqm));
        goto awggeauumiqymcoi;
        qiaayoymqmmemiiy:
        $cswemwoyesycwkuq = 100;
        goto oummiciwcqkwymss;
        mwucaqouymaweuck:
        $wisgiwskwawciiee["\150\145\x69\147\150\164"] = 80;
        goto eyaciqqycmmgoski;
        eiqawcsoocuowioo:
        if (!$qaiwqwwemmyyqosy) {
            goto iuiyqyiwisggcywk;
        }
        goto kkeiscyscckuuqci;
        myaeiwowqwegogmq:
        $qeswwaqqsyymqawg = ManipulateArray::get($qaiwqwwemmyyqosy, "\x77\151\144\164\x68");
        goto yauqmqauoqwymcsu;
        oummiciwcqkwymss:
        $qaiwqwwemmyyqosy = ManipulateAttachment::iuwsgyqakicakuoq($oiegiwogmwmawkeo);
        goto omkkomymwsowywwa;
        egamwswskucyocos:
        weaqamgsuuwuouks:
        goto yaecoyqgimisqywa;
        omkkomymwsowywwa:
        if ($qaiwqwwemmyyqosy) {
            goto wyucqqggakoceowc;
        }
        goto qmwomemuqyaimiso;
        yauqmqauoqwymcsu:
        iuiyqyiwisggcywk:
        goto mwucaqouymaweuck;
        yaecoyqgimisqywa:
        return $wisgiwskwawciiee;
        goto emouoksmeamyiikc;
        ywumciccwiakyeus:
        if (!$this->iigcaickwcykouca($aiooqyausygaasqm)) {
            goto weaqamgsuuwuouks;
        }
        goto qwsioymycmywyqiw;
        kkeiscyscckuuqci:
        $cswemwoyesycwkuq = ManipulateArray::get($qaiwqwwemmyyqosy, "\150\x65\151\147\x68\164");
        goto myaeiwowqwegogmq;
        eyaciqqycmmgoski:
        
        $wisgiwskwawciiee["\167\151\144\x74\x68"] = 80;
        goto oqgomigmmsikougi;
        qwsioymycmywyqiw:
        $qeswwaqqsyymqawg = 100;
        goto qiaayoymqmmemiiy;
        oqgomigmmsikougi:
        
        goto egamwswskucyocos;
        emouoksmeamyiikc:
    }
    
    public function iigcaickwcykouca($aiooqyausygaasqm) : bool
    {
        return self::SVG_MIME_TYPE === ManipulateAttachment::ikocqgeqiykwwyqs($aiooqyausygaasqm);
    }
}
