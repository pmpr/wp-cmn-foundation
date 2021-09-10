<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b30261f503             |
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
    const SVG_MIME_TYPE = "\151\x6d\141\x67\x65\57\163\x76\x67\x2b\x78\155\154";
    
    public ?Sanitizer $sanitizer = null;
    public function __construct()
    {
        goto ksuoesmcewiqukgy;
        ksuoesmcewiqukgy:
        $umcwwewscqegoqoe = new Sanitizer();
        goto cuacsemcmuyaokge;
        kwkeiomeuququaoy:
        parent::__construct();
        goto giqysmgscwwqgmqe;
        cuacsemcmuyaokge:
        
        $umcwwewscqegoqoe->minify(true);
        goto aoqqweiisiaekqsk;
        aoqqweiisiaekqsk:
        $this->sanitizer = $umcwwewscqegoqoe;
        goto kwkeiomeuququaoy;
        giqysmgscwwqgmqe:
    }
    public function wigskegsqequoeks()
    {
        $this->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\141\144\x64\x5f\164\x77\151\x67\137\x66\165\x6e\x63\164\x69\x6f\156\163"), [$this, "\145\x75\145\x65\x79\x65\x6d\x67\153\145\x79\143\145\151\x73\141"])->qcsmikeggeemccuu("\147\x65\x74\x5f\151\155\x61\147\145\137\x74\141\x67", [$this, "\x63\147\151\x61\153\x61\x63\x63\x6b\155\143\x61\x71\147\151\153"], 10, 6);
        parent::wigskegsqequoeks();
    }
    public function kgquecmsgcouyaya()
    {
        $this->cecaguuoecmccuse("\165\160\x6c\157\141\144\x5f\x6d\x69\x6d\145\163", [$this, "\147\x67\167\143\145\x71\x77\x65\x65\x61\x61\143\x77\157\151\x73"])->cecaguuoecmccuse("\167\x70\137\x68\141\x6e\144\x6c\145\x5f\165\x70\154\157\141\144\137\x70\x72\x65\x66\151\154\164\145\x72", [$this, "\155\x65\x6b\x65\165\x77\151\x65\x63\x69\161\171\x6d\141\151\x6f"])->cecaguuoecmccuse("\x73\166\x67\137\x61\x74\x74\x72\151\x62\165\164\145\163", [$this, "\x6d\x71\171\141\143\167\x61\x61\157\143\147\x63\x73\x79\x61\147"], 999)->cecaguuoecmccuse("\167\x70\x5f\x63\150\x65\x63\x6b\x5f\x66\151\154\x65\x74\x79\x70\x65\137\x61\x6e\x64\137\x65\170\164", [$this, "\141\x6b\151\157\157\171\x61\x75\x6b\147\171\165\155\x63\x6d\x75"], 75, 4)->cecaguuoecmccuse("\x61\144\155\151\156\137\160\157\163\164\137\x74\150\x75\155\142\x6e\141\151\154\x5f\x68\164\x6d\x6c", [$this, "\157\165\141\165\171\x79\x61\x6b\x65\x61\165\x61\x71\x71\151\x6b"], 10, 3)->cecaguuoecmccuse("\167\160\137\147\x65\164\x5f\141\x74\164\141\143\150\155\x65\156\164\x5f\155\x65\x74\x61\144\x61\x74\x61", [$this, "\167\x71\171\161\151\x73\147\143\171\x65\x77\x69\x6d\157\141\151"], 10, 2)->cecaguuoecmccuse("\167\160\x5f\160\x72\x65\160\x61\162\x65\x5f\141\164\164\x61\143\150\x6d\145\156\x74\137\146\157\162\137\152\163", [$this, "\163\153\x6b\147\167\x77\x6b\171\155\157\x6f\161\x71\x61\x77\155"], 10, 2)->cecaguuoecmccuse("\167\160\137\x67\x65\x6e\x65\x72\141\164\145\137\141\x74\x74\141\x63\x68\155\x65\x6e\164\137\x6d\145\x74\141\144\141\x74\x61", [$this, "\171\167\147\165\x61\x6d\141\x69\151\171\141\147\x61\167\x73\143"], 10, 2)->cecaguuoecmccuse("\x69\155\x61\147\x65\137\x75\x70\154\157\x61\x64\x5f\x66\x69\154\x74\x65\x72\x5f\x65\x78\x63\x6c\x75\144\145", [$this, "\x71\x71\x6b\x6f\167\163\x63\141\157\x6f\165\143\x6b\145\147\x6f"], 10, 2)->cecaguuoecmccuse($this->ygyygikyocoymgaw("\141\x74\164\x61\143\x68\x6d\145\x6e\164\137\x69\163\137\x73\166\x67"), [$this, "\x65\x67\165\157\153\167\161\141\x6d\143\143\167\x63\161\x6f\155"], 10, 2)->cecaguuoecmccuse("\167\x70\137\147\145\164\x5f\x61\x74\x74\141\x63\150\155\145\156\x74\137\151\x6d\141\147\x65\x5f\x61\x74\164\x72\x69\x62\x75\x74\145\x73", [$this, "\x79\x63\x79\x71\x6b\x67\x63\151\147\147\x6f\141\147\x61\x67\x67"], 10, 3);
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
        iiogyckwmaouswqy:
        return $siquossayskcwkea;
        goto qyckwskcewqioqyk;
        smmagsweysscecce:
        qaeqsckgkimiuwca:
        goto iiogyckwmaouswqy;
        gqcosoeyaqmyccca:
        if (!(!isset($siquossayskcwkea["\150\145\x69\x67\150\164"]) && !isset($siquossayskcwkea["\x77\151\144\x74\x68"]))) {
            goto qaeqsckgkimiuwca;
        }
        goto skegiiomcggeymuw;
        guoqssciqoegywsg:
        $siquossayskcwkea = $this->kguoyqackakgysoy($siquossayskcwkea);
        goto gqcosoeyaqmyccca;
        oqumomyawuuomquy:
        $siquossayskcwkea["\x77\x69\x64\x74\x68"] = 100;
        goto smmagsweysscecce;
        skegiiomcggeymuw:
        $siquossayskcwkea["\150\145\151\x67\150\164"] = 100;
        goto oqumomyawuuomquy;
        qyckwskcewqioqyk:
    }
    
    public function kguoyqackakgysoy($siquossayskcwkea, $uuossqmuccwyiemo = 16)
    {
        goto yikaqawiqaokyqgw;
        kuiomeesyokwsgio:
        return $siquossayskcwkea;
        goto yescggaseyimocqu;
        cumoewcksgaqwwoo:
        iwemkuaseiooqoqg:
        goto kuiomeesyokwsgio;
        eqiqgwqscsswkmwk:
        if (!$wyicceigkekkkwgs) {
            goto eeicwkoeaqmaoywm;
        }
        goto aymkogwsagaggsem;
        aymkogwsagaggsem:
        if (!(!is_numeric($uuossqmuccwyiemo) || $uuossqmuccwyiemo < 1)) {
            goto wkoqomessckkgeua;
        }
        goto eqggkouoswesgwya;
        qgmegqweacumuccw:
        eeicwkoeaqmaoywm:
        goto cumoewcksgaqwwoo;
        yikaqawiqaokyqgw:
        $egkyssmuqcwaciya = ManipulateArray::get($siquossayskcwkea, "\143\x6c\141\x73\x73");
        goto askiamwsewkaqwoi;
        semoowiyeimkyeuc:
        eagggcysqeeaeose:
        goto qgmegqweacumuccw;
        icoooiwmiusyeaes:
        wkoqomessckkgeua:
        goto emoaoyuqmmymmwkq;
        coawukgoisakmosc:
        $wyicceigkekkkwgs = (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\163\x76\147\x5f\x65\x6c\145\155\x65\x6e\x74\x5f\x63\154\x61\x73\x73\x5f\x72\x61\x74\x69\157\x6e\137\x63\x6f\156\x76\x65\162\164\145\x72"), []);
        goto eqiqgwqscsswkmwk;
        eqggkouoswesgwya:
        $uuossqmuccwyiemo = 16;
        goto icoooiwmiusyeaes;
        emoaoyuqmmymmwkq:
        foreach ($wyicceigkekkkwgs as $oiegiwogmwmawkeo => $eqgoocgaqwqcimie) {
            goto oayiqwmaaukkuimy;
            kgogceiykkokkgeg:
            $eqgoocgaqwqcimie *= $uuossqmuccwyiemo;
            goto gkoasaqwwqsgwqgo;
            ucoikisgieeseyqo:
            $siquossayskcwkea["\167\151\x64\x74\x68"] = intval($eqgoocgaqwqcimie[0] * $uuossqmuccwyiemo);
            goto gmmaicwkwqiywwyc;
            euemimammkmwkuwk:
            goto qaoooeioqwiiceyq;
            goto isgiyocowwwceaoa;
            kgeiskysuuasqckq:
            oimegoemmuwwwkyo:
            goto cwccwmggqyeeggwe;
            eiwkyioqeaaemqsa:
            if (is_array($eqgoocgaqwqcimie)) {
                goto ecmiggsmgmeaaqug;
            }
            goto kgogceiykkokkgeg;
            aasuycoysaucuaaq:
            goto eagggcysqeeaeose;
            goto kgeiskysuuasqckq;
            cwccwmggqyeeggwe:
            gcwikewmwkqsugms:
            goto seocecaioucmugky;
            gmmaicwkwqiywwyc:
            $siquossayskcwkea["\150\145\x69\147\x68\x74"] = intval($eqgoocgaqwqcimie[1] * $uuossqmuccwyiemo);
            goto goouowwycoakigim;
            gkoasaqwwqsgwqgo:
            $siquossayskcwkea["\x77\x69\144\x74\x68"] = intval($eqgoocgaqwqcimie);
            goto okwsycyoqycgwaco;
            goouowwycoakigim:
            qaoooeioqwiiceyq:
            goto aasuycoysaucuaaq;
            okwsycyoqycgwaco:
            $siquossayskcwkea["\150\x65\151\147\150\164"] = intval($eqgoocgaqwqcimie);
            goto euemimammkmwkuwk;
            oayiqwmaaukkuimy:
            if (!(strpos($egkyssmuqcwaciya, $oiegiwogmwmawkeo) !== false)) {
                goto oimegoemmuwwwkyo;
            }
            goto eiwkyioqeaaemqsa;
            isgiyocowwwceaoa:
            ecmiggsmgmeaaqug:
            goto ucoikisgieeseyqo;
            seocecaioucmugky:
        }
        goto semoowiyeimkyeuc;
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
        $eyoesceegakeygsi->kmmegqceukkkawme("\151\163\137\x73\166\x67", function ($aiooqyausygaasqm) {
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
        gsoyaqsaauaokukc:
        $yawwowoqosismgyq["\163\166\147\172"] = self::SVG_MIME_TYPE;
        goto msaegiggioiykouc;
        ywgyaqcqgosmigae:
        $yawwowoqosismgyq["\x73\166\x67"] = self::SVG_MIME_TYPE;
        goto gsoyaqsaauaokukc;
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
        ManipulateArray::unset($wwgucssaecqekuek, ["\163\x72\143\163\x65\164", "\163\x69\x7a\145\x73"]);
        goto ckcesgcceqqqieem;
        ckcesgcceqqqieem:
        akcqkwesmcuumqqc:
        goto mmqsgsuycqioemgo;
        qqyeogaouscuaikw:
    }
    
    public function uwmcsgckegoamwas($nsmgceoqaqogqmuw, $aokagokqyuysuksm)
    {
        goto ommmymgkaageowym;
        wsouygqoeyuksock:
        return $aqykuigiuwmmcieu;
        goto qaugkmgccegqkasu;
        oesqomwsgwmckgsq:
        try {
            goto swkmkgmucceyweie;
            swkmkgmucceyweie:
            $egkyssmuqcwaciya = DOMCrawler::waecsyqmwascmqoa($nsmgceoqaqogqmuw, "\x69\x6d\147", "\143\154\x61\x73\x73");
            goto aooeykwscmqgouay;
            mcccguiaquiickwq:
            $ewgwqamkygiqaawc = $this->kcciqwskewsuaemk()->souwykwwmyygqyqi($qogsmwakwacwqogk);
            goto quwwquywcuyiiweo;
            aooeykwscmqgouay:
            $qogsmwakwacwqogk = ManipulateAttachment::ygwimyogyaqgumam($aokagokqyuysuksm);
            goto mcccguiaquiickwq;
            eiiqicyywgugksuc:
            $aqykuigiuwmmcieu = DOMCrawler::igmaewykumgwoaoy($ewgwqamkygiqaawc, ["\x73\x76\x67" => ["\x63\x6c\141\163\x73" => $egkyssmuqcwaciya]]);
            goto sugmgeiemuygeoce;
            quwwquywcuyiiweo:
            $ewgwqamkygiqaawc = preg_replace("\x2f\74\134\x3f\170\155\x6c\x2e\x2a\77\134\x3f\x3e\x2f", '', $ewgwqamkygiqaawc);
            goto eiiqicyywgugksuc;
            sugmgeiemuygeoce:
        } catch (Exception $wgaoewqkwgomoaai) {
            $aqykuigiuwmmcieu = $nsmgceoqaqogqmuw;
        }
        goto wswmegcumomiwaqo;
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
        qssyiieuymmiwicm:
        $yucgcsieomwqgwws = isset($icwicymcioeyeyek["\145\x78\x74"]) ? $icwicymcioeyeyek["\145\170\164"] : '';
        goto kuyuwimysoqcmgek;
        fosuiwomyuwkaisi:
        $ukequsueuukqgaca = explode("\x2e", $wkcwykowmmmwioqs);
        goto yqewusaguumeiqyq;
        aqguswuomiqimcwy:
        swgecgeeeaaakgss:
        goto gocwgeomykcekcso;
        gocwgeomykcekcso:
        return $icwicymcioeyeyek;
        goto kggwiioyiqgskcem;
        kwwgmsmuoeysguwq:
        scageqmiwcyqmmmk:
        goto qeaugewkiwmkoaas;
        kuyuwimysoqcmgek:
        if (!(strlen($yucgcsieomwqgwws) < 1)) {
            goto scageqmiwcyqmmmk;
        }
        goto fosuiwomyuwkaisi;
        qeaugewkiwmkoaas:
        if (!in_array($yucgcsieomwqgwws, ["\x73\166\x67", "\x73\x76\147\x7a"])) {
            goto swgecgeeeaaakgss;
        }
        goto cgmgikoumekoyyae;
        cgmgikoumekoyyae:
        $icwicymcioeyeyek["\164\x79\160\145"] = self::SVG_MIME_TYPE;
        goto yigecwqswuowoakm;
        yqewusaguumeiqyq:
        $yucgcsieomwqgwws = strtolower(end($ukequsueuukqgaca));
        goto kwwgmsmuoeysguwq;
        yigecwqswuowoakm:
        $icwicymcioeyeyek["\x65\170\x74"] = $yucgcsieomwqgwws;
        goto aqguswuomiqimcwy;
        kggwiioyiqgskcem:
    }
    
    public function mekeuwieciqymaio($qogsmwakwacwqogk)
    {
        goto oimaymokouuwueum;
        iaqwisciugaosygy:
        emwggqiqcmmqeawy:
        goto uoqequmkiyukiqgi;
        qwikcqiaiumsswow:
        return $qogsmwakwacwqogk;
        goto ukggweysgiiygqsa;
        cgsawegeqqsecwam:
        if ($this->yiiiqewsseywemqu($qogsmwakwacwqogk["\x74\x6d\160\137\156\x61\x6d\x65"])) {
            goto emwggqiqcmmqeawy;
        }
        goto eucsyaygqqcqamus;
        uoqequmkiyukiqgi:
        kyswigcwgusmesqi:
        goto qwikcqiaiumsswow;
        oimaymokouuwueum:
        if (!($qogsmwakwacwqogk["\x74\x79\160\145"] === self::SVG_MIME_TYPE)) {
            goto kyswigcwgusmesqi;
        }
        goto cgsawegeqqsecwam;
        eucsyaygqqcqamus:
        $qogsmwakwacwqogk["\145\x72\x72\157\x72"] = __("\x53\157\x72\x72\171\x2c\40\x74\150\x69\163\x20\146\151\x6c\145\x20\x63\157\165\154\144\x6e\x27\x74\40\142\145\x20\x73\x61\156\x69\164\151\172\145\144\x20\163\157\x20\x66\x6f\162\40\x73\145\143\165\162\151\x74\171\40\x72\145\141\163\x6f\156\x73\40\x77\141\x73\x6e\x27\164\x20\x75\x70\x6c\157\x61\144\x65\144", PR__CMN__FOUNDATION);
        goto iaqwisciugaosygy;
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
        suewugkisoommmgy:
        return $keccaugmemegoimu;
        goto tsywwmwawwgcwmuc;
        kawgkswoygkmgmao:
        kkscsmuyumawosyc:
        goto suewugkisoommmgy;
        ysmessckmysogeua:
        if (!($keccaugmemegoimu["\155\x69\155\x65"] == self::SVG_MIME_TYPE)) {
            goto kkscsmuyumawosyc;
        }
        goto giiqogwyoikiiqyi;
        sieccokukwgmuggw:
        $possible_sizes = $this->sscegwueamckwmcy("\x69\155\141\x67\145\137\163\151\172\145\x5f\156\x61\x6d\145\x73\x5f\x63\150\x6f\x6f\x73\x65", ["\146\165\x6c\x6c" => __("\x46\165\154\x6c\x20\x53\x69\172\145", PR__CMN__FOUNDATION), "\x74\150\x75\x6d\142\156\141\x69\x6c" => __("\124\x68\165\155\x62\156\x61\151\x6c", PR__CMN__FOUNDATION), "\155\145\x64\151\x75\x6d" => __("\115\145\144\x69\165\155", PR__CMN__FOUNDATION), "\x6c\x61\x72\147\x65" => __("\x4c\x61\162\x67\145", PR__CMN__FOUNDATION)]);
        goto yqckgyeeuyayosww;
        geqakgsumkyosuca:
        wsawmoiaemkggocs:
        goto qicekkeggigkwqeu;
        qmsyaycokgmmwycs:
        foreach ($possible_sizes as $oiegiwogmwmawkeo => $pkyyagewkiyckmwy) {
            goto cocwomcoymcaqgky;
            wqgecqaciyakecys:
            $wyicceigkekkkwgs[$oiegiwogmwmawkeo] = ["\x68\x65\x69\147\150\x74" => DecoratorOption::get("{$oiegiwogmwmawkeo}\137\163\x69\172\145\x5f\x77", $default_height), "\x77\151\x64\x74\150" => DecoratorOption::get("{$oiegiwogmwmawkeo}\137\x73\x69\172\x65\x5f\150", $default_width), "\165\x72\154" => $keccaugmemegoimu["\165\162\x6c"], "\x6f\162\151\x65\156\164\x61\x74\x69\x6f\x6e" => "\x70\157\162\x74\x72\141\151\x74"];
            goto wqmgwcsuccoweocq;
            mggyiwyuuiwswaks:
            $default_width = $qaiwqwwemmyyqosy["\x77\151\144\x74\x68"];
            goto yemwekyegaywgoug;
            wqmgwcsuccoweocq:
            iuiawwoouuwwiqca:
            goto oyeswuecyaiiawyg;
            ymiosikicyqkaiaa:
            if (!("\146\x75\x6c\x6c" === $oiegiwogmwmawkeo && $qaiwqwwemmyyqosy)) {
                goto oeeakgukqusiqswc;
            }
            goto moeeimaaoaycycmi;
            yemwekyegaywgoug:
            oeeakgukqusiqswc:
            goto wqgecqaciyakecys;
            moeeimaaoaycycmi:
            $default_height = $qaiwqwwemmyyqosy["\150\x65\x69\x67\x68\164"];
            goto mggyiwyuuiwswaks;
            cocwomcoymcaqgky:
            $default_height = 2000;
            goto ukygqcaqcaqqmyew;
            ukygqcaqcaqqmyew:
            $default_width = 2000;
            goto ymiosikicyqkaiaa;
            oyeswuecyaiiawyg:
        }
        goto geqakgsumkyosuca;
        giiqogwyoikiiqyi:
        $qaiwqwwemmyyqosy = $this->qaeakmimoqkugagk(ManipulateAttachment::ckoygqywcuqasqea($aiooqyausygaasqm));
        goto iqiwimyamykmuiwo;
        egwuecigeyuooiam:
        iekecmawqyigmqcg:
        goto sieccokukwgmuggw;
        egyuciuossumacuy:
        $keccaugmemegoimu = array_merge($keccaugmemegoimu, $qaiwqwwemmyyqosy);
        goto egwuecigeyuooiam;
        moyqaggmqqimwusm:
        $keccaugmemegoimu["\151\143\157\x6e"] = $keccaugmemegoimu["\x75\x72\154"];
        goto kawgkswoygkmgmao;
        yqckgyeeuyayosww:
        $wyicceigkekkkwgs = [];
        goto qmsyaycokgmmwycs;
        qicekkeggigkwqeu:
        $keccaugmemegoimu["\163\x69\172\x65\163"] = $wyicceigkekkkwgs;
        goto moyqaggmqqimwusm;
        tsywwmwawwgcwmuc:
    }
    
    protected function yiiiqewsseywemqu($qogsmwakwacwqogk)
    {
        goto icqaiqyewuyegkeq;
        ogwaiqiccywqqiwk:
        return false;
        goto wsomqsmeououqiwu;
        aqyimgoegakwgoum:
        
        if (!$yuoaskweqogoasgc) {
            goto eookussqeicycoio;
        }
        goto qmiouyoeguiqymgi;
        icqaiqyewuyegkeq:
        $yeueggiecgqcswqm = $this->kcciqwskewsuaemk()->souwykwwmyygqyqi($qogsmwakwacwqogk);
        goto dmwmgeswweekqyuw;
        kcaysyweukeimoik:
        return false;
        goto eakoykqcmyemgyum;
        dmwmgeswweekqyuw:
        
        if (!($yuoaskweqogoasgc = $this->wsggsqigawogiwky($yeueggiecgqcswqm))) {
            goto qeggwmykewcoieic;
        }
        goto moeseousgukmygmy;
        weocosykwsaimaks:
        
        $qawsmigsyysqwmeq = $this->sanitizer->sanitize($yeueggiecgqcswqm);
        goto gmywmsmiayimqygy;
        eakoykqcmyemgyum:
        ieauiumamygiuckc:
        goto aqyimgoegakwgoum;
        xaiaogcwcaeweoiu:
        
        if (!($yeueggiecgqcswqm === false)) {
            goto qucoecmmmacqooek;
        }
        goto ogwaiqiccywqqiwk;
        wcoekawkkswkgamc:
        return $this->kcciqwskewsuaemk()->kwsmkgyoyaqecwuu($qogsmwakwacwqogk, $qawsmigsyysqwmeq);
        goto uqwsiocauuswgwok;
        eouugaqkgamwmgmo:
        qeggwmykewcoieic:
        goto weocosykwsaimaks;
        moeseousgukmygmy:
        $yeueggiecgqcswqm = gzdecode($yeueggiecgqcswqm);
        goto xaiaogcwcaeweoiu;
        gmywmsmiayimqygy:
        if (!($qawsmigsyysqwmeq === false)) {
            goto ieauiumamygiuckc;
        }
        goto kcaysyweukeimoik;
        wsomqsmeououqiwu:
        qucoecmmmacqooek:
        goto eouugaqkgamwmgmo;
        qmiouyoeguiqymgi:
        $qawsmigsyysqwmeq = gzencode($qawsmigsyysqwmeq);
        goto noswwaawyacomwyo;
        noswwaawyacomwyo:
        eookussqeicycoio:
        goto wcoekawkkswkgamc;
        uqwsiocauuswgwok:
    }
    
    protected function wsggsqigawogiwky($ygwoqcwsaggqoamw)
    {
        goto giueuuwusgmgeick;
        wskcqwywmwmwigce:
        goto oqyosskkgcuckmes;
        goto iiuwcsgwcguceiko;
        iiuwcsgwcguceiko:
        iisgwcgceeygauyk:
        goto wkycksmmuskouies;
        giueuuwusgmgeick:
        if (function_exists("\155\x62\x5f\x73\x74\x72\x70\x6f\x73")) {
            goto iisgwcgceeygauyk;
        }
        goto eksamuqymmeumqsg;
        emucccmcoiwcyioq:
        oqyosskkgcuckmes:
        goto yigmeqsygwgioyaa;
        eksamuqymmeumqsg:
        return 0 === strpos($ygwoqcwsaggqoamw, "\x1f" . "\x8b" . "\10");
        goto wskcqwywmwmwigce;
        wkycksmmuskouies:
        return 0 === mb_strpos($ygwoqcwsaggqoamw, "\37" . "\213" . "\10");
        goto emucccmcoiwcyioq;
        yigmeqsygwgioyaa:
    }
    
    public function oowwkoeekmwwgieu($mcqieaigyeeyaksm, $aiooqyausygaasqm, $oiegiwogmwmawkeo)
    {
        goto cmqocusuososcwqk;
        icckscyoesgiyksu:
        if (!$gkiuoymeukweiaaw) {
            goto iwciaqcioigqwiys;
        }
        goto uyyieiuceauoecyq;
        maycimoaceiiuemu:
        $qeswwaqqsyymqawg = ManipulateAttachment::get($gkiuoymeukweiaaw, "\x77\151\144\164\150");
        goto aesukugmkcsuocwc;
        qoysygagyigwsiwm:
        $cswemwoyesycwkuq = false;
        goto yqwkgwucqwqyuqmw;
        eswgqkmomsiauqqy:
        $gkiuoymeukweiaaw = ManipulateAttachment::iuwsgyqakicakuoq($oiegiwogmwmawkeo);
        goto qoysygagyigwsiwm;
        uyyieiuceauoecyq:
        $cswemwoyesycwkuq = ManipulateAttachment::get($gkiuoymeukweiaaw, "\150\x65\151\147\x68\164");
        goto maycimoaceiiuemu;
        cmqocusuososcwqk:
        if (!$this->iigcaickwcykouca($aiooqyausygaasqm)) {
            goto awgamseuywgciius;
        }
        goto eswgqkmomsiauqqy;
        aesukugmkcsuocwc:
        iwciaqcioigqwiys:
        goto uyowywywqeagqcuw;
        umekgwemiaygomky:
        awgamseuywgciius:
        goto aoewemyqigugysua;
        aoewemyqigugysua:
        return $mcqieaigyeeyaksm;
        goto egauqkuumkisssaa;
        yqwkgwucqwqyuqmw:
        $qeswwaqqsyymqawg = false;
        goto icckscyoesgiyksu;
        uyowywywqeagqcuw:
        
        
        goto umekgwemiaygomky;
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
        aikuwguwuiekouoo:
        $ewgwqamkygiqaawc = DOMCrawler::igmaewykumgwoaoy($ewgwqamkygiqaawc, ["\151\155\147\54\x20\141" => ["\143\x6c\x61\x73\x73" => "\167\55\x31\60\60"]]);
        goto wicguyksogckqums;
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
        sacmqsciuaucgaww:
        $cswemwoyesycwkuq = $oiegiwogmwmawkeo[1];
        goto mqywccygymoeaoym;
        gawswamyawcmsmei:
        goto uyouccoiyogmuwey;
        goto cmsyegseqcwmyycy;
        seiysueoskimiaam:
        $nsmgceoqaqogqmuw = str_replace("\x68\145\x69\147\150\x74\x3d\x22\x31\x22\40", '', $nsmgceoqaqogqmuw);
        goto gawswamyawcmsmei;
        wayyiemaccqkmqeg:
        if ("\146\x75\x6c\x6c" == $oiegiwogmwmawkeo && ($qaiwqwwemmyyqosy = $this->qaeakmimoqkugagk(ManipulateAttachment::ckoygqywcuqasqea($aokagokqyuysuksm)))) {
            goto qkycyqgwwoiuaomq;
        }
        goto yygqgeukeuaciewa;
        mgocagiwqsgaisyq:
        if (!$this->iigcaickwcykouca($aokagokqyuysuksm)) {
            goto meyowgukekkkkuqe;
        }
        goto wkumckmusackacmi;
        wkumckmusackacmi:
        if (is_array($oiegiwogmwmawkeo)) {
            goto ccymqyyaikauqaiq;
        }
        goto wayyiemaccqkmqeg;
        yygqgeukeuaciewa:
        $qeswwaqqsyymqawg = DecoratorOption::get("{$oiegiwogmwmawkeo}\137\x73\151\x7a\x65\137\x77", false);
        goto kysaqkaiksosyegu;
        qsuyqoeocsmkomwy:
        $cswemwoyesycwkuq = $qaiwqwwemmyyqosy["\x68\x65\151\x67\150\x74"];
        goto ioyyiaguqyiaeaqs;
        cmsyegseqcwmyycy:
        cooiowgwqgssuqcw:
        goto wiiaiqiomosmyuwq;
        ooccckeeomycucao:
        $nsmgceoqaqogqmuw = str_replace("\57\76", "\40\x72\157\x6c\x65\x3d\42\151\155\147\42\40\x2f\x3e", $nsmgceoqaqogqmuw);
        goto cwmkgosooecsywcm;
        musiyggyqaiwwouu:
        ccymqyyaikauqaiq:
        goto imymswaceomsasks;
        uacekkwiaagmuieg:
        $nsmgceoqaqogqmuw = str_replace("\167\x69\x64\x74\150\x3d\42\61\42\x20", '', $nsmgceoqaqogqmuw);
        goto seiysueoskimiaam;
        cmmoyuuegqguakga:
        uyouccoiyogmuwey:
        goto ooccckeeomycucao;
        mqywccygymoeaoym:
        ygaggwgwiceegasy:
        goto wiomewyyumkmwsum;
        cwmkgosooecsywcm:
        meyowgukekkkkuqe:
        goto ooqwuoiqmiswgkyu;
        ooqwuoiqmiswgkyu:
        return $nsmgceoqaqogqmuw;
        goto uieeaeqciogamoqe;
        ywyqmwuswkcoyqsy:
        goto ygaggwgwiceegasy;
        goto musiyggyqaiwwouu;
        imymswaceomsasks:
        $qeswwaqqsyymqawg = $oiegiwogmwmawkeo[0];
        goto sacmqsciuaucgaww;
        agaomyyqaaswykui:
        qkycyqgwwoiuaomq:
        goto caocoiecwueosoig;
        ioyyiaguqyiaeaqs:
        csmqeagwuisqiuym:
        goto ywyqmwuswkcoyqsy;
        iwawqgcgskysqyaa:
        goto csmqeagwuisqiuym;
        goto agaomyyqaaswykui;
        kysaqkaiksosyegu:
        $cswemwoyesycwkuq = DecoratorOption::get("{$oiegiwogmwmawkeo}\137\x73\x69\x7a\145\137\150", false);
        goto iwawqgcgskysqyaa;
        caocoiecwueosoig:
        $qeswwaqqsyymqawg = $qaiwqwwemmyyqosy["\x77\x69\x64\x74\x68"];
        goto qsuyqoeocsmkomwy;
        wiomewyyumkmwsum:
        if ($cswemwoyesycwkuq && $qeswwaqqsyymqawg) {
            goto cooiowgwqgssuqcw;
        }
        goto uacekkwiaagmuieg;
        sccaumocseyiqsue:
        $nsmgceoqaqogqmuw = str_replace("\x68\145\x69\x67\x68\164\75\x22\61\x22\40", sprintf("\x68\145\151\x67\150\164\75\42\45\x73\42\40", $cswemwoyesycwkuq), $nsmgceoqaqogqmuw);
        goto cmmoyuuegqguakga;
        wiiaiqiomosmyuwq:
        $nsmgceoqaqogqmuw = str_replace("\167\x69\x64\x74\x68\x3d\42\x31\42\x20", sprintf("\x77\x69\144\x74\x68\x3d\42\x25\x73\x22\40", $qeswwaqqsyymqawg), $nsmgceoqaqogqmuw);
        goto sccaumocseyiqsue;
        uieeaeqciogamoqe:
    }
    
    public function ywguamaiiyagawsc($kuguwoaesuqsqysu, $attachment_id)
    {
        goto eiwcgwomusuokygg;
        ggwyamakeyyieeog:
        $upload_dir = DecoratorFile::oemywwmmmiywiqai();
        goto ssaeeugeycyaaaki;
        ksqcmyaawiiiimco:
        $qaiwqwwemmyyqosy = $this->qaeakmimoqkugagk($svg_path);
        goto ysqokomouwswymck;
        ysqokomouwswymck:
        if ($qaiwqwwemmyyqosy) {
            goto wmskawmisgksegwe;
        }
        goto csgqcskywiqwyocw;
        ycyoioowuumgwkuk:
        yksgcagiyukouics:
        goto wqaiocgoqsqogmcm;
        oeyyasumsgwocquw:
        $additional_image_sizes = wp_get_additional_image_sizes();
        goto oqmeeqioiooguikk;
        wiouwokmcckqekqy:
        usasekcgsyyqymgy:
        goto oimwgecwwecuugwq;
        csgqcskywiqwyocw:
        return $kuguwoaesuqsqysu;
        goto suicqccekqckayec;
        ssaeeugeycyaaaki:
        
        $relative_path = str_replace($upload_dir["\142\x61\163\x65\x64\x69\x72"], '', $svg_path);
        goto caammwwkqeeemaok;
        oimwgecwwecuugwq:
        $kuguwoaesuqsqysu["\x73\x69\172\145\163"] = $wyicceigkekkkwgs;
        goto ycyoioowuumgwkuk;
        ssquocgwsassuike:
        
        $wyicceigkekkkwgs = [];
        goto uommmgequgiiykci;
        suicqccekqckayec:
        wmskawmisgksegwe:
        goto sqqcaugoikagoykc;
        caammwwkqeeemaok:
        $wkcwykowmmmwioqs = basename($svg_path);
        goto ksqcmyaawiiiimco;
        sqqcaugoikagoykc:
        $kuguwoaesuqsqysu = ["\x77\x69\144\164\150" => intval($qaiwqwwemmyyqosy["\x77\x69\144\x74\150"]), "\x68\145\x69\147\150\x74" => intval($qaiwqwwemmyyqosy["\x68\145\x69\147\x68\164"]), "\x66\x69\x6c\x65" => $relative_path];
        goto ssquocgwsassuike;
        uommmgequgiiykci:
        foreach (get_intermediate_image_sizes() as $piuesceqiguuskme) {
            goto mekaesaeskqmgqii;
            qsisgmaawywioogk:
            eskcocwimiseewmu:
            goto qwkyuqqgkugqggqo;
            cacaysyqsqaauawm:
            iymwycosumimggmu:
            goto iosymaiumakyyaos;
            kosccieswmaoeoyk:
            $wyicceigkekkkwgs[$piuesceqiguuskme]["\x66\x69\154\x65"] = $wkcwykowmmmwioqs;
            goto yumiokuikmkkwcwg;
            qwkyuqqgkugqggqo:
            
            $wyicceigkekkkwgs[$piuesceqiguuskme]["\x68\x65\x69\147\x68\x74"] = intval($additional_image_sizes[$piuesceqiguuskme]["\x68\x65\x69\x67\150\x74"]);
            goto cacaysyqsqaauawm;
            wgkeakuiaqswmkes:
            scymgswieuyiqwmm:
            goto kemiasqyoocyqqgm;
            esgykeaqimuiewgw:
            gymqkieyuiawacwi:
            goto eymgmkoqgoqicgsi;
            bweusaooumwyemuu:
            goto iymwycosumimggmu;
            goto qsisgmaawywioogk;
            kqgqymcemksgmsaa:
            
            $wyicceigkekkkwgs[$piuesceqiguuskme]["\x63\162\x6f\x70"] = DecoratorOption::get("{$piuesceqiguuskme}\x5f\x63\162\157\x70");
            goto ggccmgysseeqcaga;
            kemiasqyoocyqqgm:
            
            $wyicceigkekkkwgs[$piuesceqiguuskme]["\x77\151\144\164\150"] = intval($additional_image_sizes[$piuesceqiguuskme]["\167\x69\x64\164\x68"]);
            goto esgykeaqimuiewgw;
            isgceyiuweaueqeu:
            uqggmkmmysmeqkmy:
            goto guqwqwceceswwucy;
            miiaowmiyoemouke:
            
            $wyicceigkekkkwgs[$piuesceqiguuskme]["\167\x69\144\164\x68"] = DecoratorOption::get("{$piuesceqiguuskme}\x5f\x73\x69\172\x65\x5f\x77");
            goto auoaywowugkacsia;
            uiuiuicckaiksqyc:
            wmismwqqqagsomky:
            goto amemoiimosckqems;
            amemoiimosckqems:
            
            $wyicceigkekkkwgs[$piuesceqiguuskme]["\143\x72\157\x70"] = intval($additional_image_sizes[$piuesceqiguuskme]["\143\162\x6f\x70"]);
            goto yqimmomioeoaqwkq;
            iosymaiumakyyaos:
            if (isset($additional_image_sizes[$piuesceqiguuskme]["\143\x72\157\160"])) {
                goto wmismwqqqagsomky;
            }
            goto kqgqymcemksgmsaa;
            yqimmomioeoaqwkq:
            gkwyuumqeuikwiku:
            goto kosccieswmaoeoyk;
            kuigwocyaagakags:
            if (isset($additional_image_sizes[$piuesceqiguuskme]["\x77\151\x64\x74\x68"])) {
                goto scymgswieuyiqwmm;
            }
            goto miiaowmiyoemouke;
            ggccmgysseeqcaga:
            goto gkwyuumqeuikwiku;
            goto uiuiuicckaiksqyc;
            mekaesaeskqmgqii:
            $wyicceigkekkkwgs[$piuesceqiguuskme] = ["\167\151\144\x74\x68" => '', "\150\145\x69\x67\150\x74" => '', "\143\162\157\160" => false];
            goto kuigwocyaagakags;
            yumiokuikmkkwcwg:
            $wyicceigkekkkwgs[$piuesceqiguuskme]["\x6d\x69\155\145\55\x74\171\160\145"] = ManipulateAttachment::ikocqgeqiykwwyqs($attachment_id);
            goto isgceyiuweaueqeu;
            auoaywowugkacsia:
            goto gymqkieyuiawacwi;
            goto wgkeakuiaqswmkes;
            oueaeyqiqiakqaek:
            
            $wyicceigkekkkwgs[$piuesceqiguuskme]["\150\145\x69\147\x68\164"] = DecoratorOption::get("{$piuesceqiguuskme}\137\163\x69\x7a\x65\137\x68");
            goto bweusaooumwyemuu;
            eymgmkoqgoqicgsi:
            if (isset($additional_image_sizes[$piuesceqiguuskme]["\x68\x65\x69\x67\150\164"])) {
                goto eskcocwimiseewmu;
            }
            goto oueaeyqiqiakqaek;
            guqwqwceceswwucy:
        }
        goto wiouwokmcckqekqy;
        eiwcgwomusuokygg:
        if (!$this->iigcaickwcykouca($attachment_id)) {
            goto yksgcagiyukouics;
        }
        goto oeyyasumsgwocquw;
        oqmeeqioiooguikk:
        $svg_path = ManipulateAttachment::ckoygqywcuqasqea($attachment_id);
        goto ggwyamakeyyieeog;
        wqaiocgoqsqogmcm:
        return $kuguwoaesuqsqysu;
        goto ccwsuiigukoykcew;
        ccwsuiigukoykcew:
    }
    
    public function wqyqisgcyewimoai($icwicymcioeyeyek, $post)
    {
        goto maiaiacekmmwswqe;
        cymmwkiaogwsmcsu:
        $icwicymcioeyeyek = ManipulateAttachment::smiqaaaecemiwugu($post, ManipulateAttachment::ckoygqywcuqasqea($post));
        goto ueaiaeaaaiiuskyi;
        maiaiacekmmwswqe:
        
        if (!is_wp_error($icwicymcioeyeyek)) {
            goto wkemscqmqyimmqme;
        }
        goto cymmwkiaogwsmcsu;
        weqkaeeoycmmmkcc:
        return $icwicymcioeyeyek;
        goto gmqmkgkikksymkik;
        mwagkoucauykimsu:
        wkemscqmqyimmqme:
        goto weqkaeeoycmmmkcc;
        ueaiaeaaaiiuskyi:
        ManipulateAttachment::_updateMeta($post, $icwicymcioeyeyek);
        goto mwagkoucauykimsu;
        gmqmkgkikksymkik:
    }
    
    protected function qaeakmimoqkugagk($waoisqguweoociwe)
    {
        goto qywgeimouqcummco;
        iqyicsuysksymwuw:
        goto sgosioakiaeqmyyy;
        goto qeaiigkoomwsgoem;
        saimmkcsakcakqww:
        gqsciemssskoqamq:
        goto cmqyiscgeswqsoog;
        ikosmomwmyimqaew:
        sgosioakiaeqmyyy:
        goto yqocsiwyueakoqoe;
        qywgeimouqcummco:
        $waoisqguweoociwe = @simplexml_load_file($waoisqguweoociwe);
        goto sgkcewwkiomywgky;
        syskuqogeeoicwgw:
        $cswemwoyesycwkuq = 0;
        goto kommicqseqmaiuss;
        ukiagcaimyycouuq:
        gyaiswaqomsiwcwu:
        goto ygqwuggqqouywgoq;
        yqocsiwyueakoqoe:
        ocmywgkaoogmcsau:
        goto mewsemcoqiuuwwme;
        wskkqgweqwsaygqi:
        $cswemwoyesycwkuq = intval($wyicceigkekkkwgs[3]);
        goto saimmkcsakcakqww;
        isoisgaoqmiqeiak:
        goto kgqyyosqeaqigeuo;
        goto ukiagcaimyycouuq;
        eouoyysyekegaigi:
        if (isset($siquossayskcwkea->viewBox)) {
            goto gyaiswaqomsiwcwu;
        }
        goto wigumuwcsuiaauyw;
        ywagwigaamkacqsm:
        if (isset($siquossayskcwkea->width, $siquossayskcwkea->height)) {
            goto qsamicayummauigq;
        }
        goto eouoyysyekegaigi;
        wigumuwcsuiaauyw:
        return false;
        goto isoisgaoqmiqeiak;
        qeaiigkoomwsgoem:
        qsamicayummauigq:
        goto gsageymuesseosmy;
        yseimcmuaycskkak:
        if (!isset($wyicceigkekkkwgs[2], $wyicceigkekkkwgs[3])) {
            goto gqsciemssskoqamq;
        }
        goto gowsaeyyqagsmkce;
        skwiuqgoiaiskqmm:
        $cswemwoyesycwkuq = intval($siquossayskcwkea->height);
        goto ikosmomwmyimqaew;
        cmqyiscgeswqsoog:
        kgqyyosqeaqigeuo:
        goto iqyicsuysksymwuw;
        ygqwuggqqouywgoq:
        $wyicceigkekkkwgs = explode("\40", $siquossayskcwkea->viewBox);
        goto yseimcmuaycskkak;
        yyeowwwqogwoeoyc:
        $siquossayskcwkea = $waoisqguweoociwe->attributes();
        goto ywagwigaamkacqsm;
        mewsemcoqiuuwwme:
        return ["\x77\151\x64\x74\x68" => $qeswwaqqsyymqawg, "\150\145\x69\147\x68\164" => $cswemwoyesycwkuq, "\157\162\151\145\x6e\164\141\164\x69\157\156" => $qeswwaqqsyymqawg > $cswemwoyesycwkuq ? "\154\141\156\144\x73\143\141\x70\x65" : "\x70\x6f\162\x74\162\141\x69\164"];
        goto yeemeukcggweaowa;
        kommicqseqmaiuss:
        if (!$waoisqguweoociwe) {
            goto ocmywgkaoogmcsau;
        }
        goto yyeowwwqogwoeoyc;
        gsageymuesseosmy:
        $qeswwaqqsyymqawg = intval($siquossayskcwkea->width);
        goto skwiuqgoiaiskqmm;
        sgkcewwkiomywgky:
        $qeswwaqqsyymqawg = 0;
        goto syskuqogeeoicwgw;
        gowsaeyyqagsmkce:
        $qeswwaqqsyymqawg = intval($wyicceigkekkkwgs[2]);
        goto wskkqgweqwsaygqi;
        yeemeukcggweaowa:
    }
    
    public function umacyowesakeiewk($wisgiwskwawciiee, $aiooqyausygaasqm, $oiegiwogmwmawkeo)
    {
        goto ywumciccwiakyeus;
        qiaayoymqmmemiiy:
        $cswemwoyesycwkuq = 100;
        goto oummiciwcqkwymss;
        awggeauumiqymcoi:
        wyucqqggakoceowc:
        goto eiqawcsoocuowioo;
        ywumciccwiakyeus:
        if (!$this->iigcaickwcykouca($aiooqyausygaasqm)) {
            goto weaqamgsuuwuouks;
        }
        goto qwsioymycmywyqiw;
        oummiciwcqkwymss:
        $qaiwqwwemmyyqosy = ManipulateAttachment::iuwsgyqakicakuoq($oiegiwogmwmawkeo);
        goto omkkomymwsowywwa;
        oqgomigmmsikougi:
        
        goto egamwswskucyocos;
        yauqmqauoqwymcsu:
        iuiyqyiwisggcywk:
        goto mwucaqouymaweuck;
        myaeiwowqwegogmq:
        $qeswwaqqsyymqawg = ManipulateArray::get($qaiwqwwemmyyqosy, "\x77\151\144\x74\150");
        goto yauqmqauoqwymcsu;
        kkeiscyscckuuqci:
        $cswemwoyesycwkuq = ManipulateArray::get($qaiwqwwemmyyqosy, "\150\x65\x69\x67\x68\x74");
        goto myaeiwowqwegogmq;
        omkkomymwsowywwa:
        if ($qaiwqwwemmyyqosy) {
            goto wyucqqggakoceowc;
        }
        goto qmwomemuqyaimiso;
        eiqawcsoocuowioo:
        if (!$qaiwqwwemmyyqosy) {
            goto iuiyqyiwisggcywk;
        }
        goto kkeiscyscckuuqci;
        eyaciqqycmmgoski:
        
        $wisgiwskwawciiee["\x77\151\144\164\150"] = 80;
        goto oqgomigmmsikougi;
        yaecoyqgimisqywa:
        return $wisgiwskwawciiee;
        goto emouoksmeamyiikc;
        qmwomemuqyaimiso:
        $qaiwqwwemmyyqosy = $this->qaeakmimoqkugagk(ManipulateAttachment::ckoygqywcuqasqea($aiooqyausygaasqm));
        goto awggeauumiqymcoi;
        qwsioymycmywyqiw:
        $qeswwaqqsyymqawg = 100;
        goto qiaayoymqmmemiiy;
        mwucaqouymaweuck:
        $wisgiwskwawciiee["\150\x65\x69\x67\x68\x74"] = 80;
        goto eyaciqqycmmgoski;
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
