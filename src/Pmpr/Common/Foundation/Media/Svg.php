<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b2e4befc8c             |
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
    const SVG_MIME_TYPE = "\x69\x6d\x61\147\145\x2f\163\166\147\x2b\170\x6d\x6c";
    
    public ?Sanitizer $sanitizer = null;
    public function __construct()
    {
        goto ksuoesmcewiqukgy;
        kwkeiomeuququaoy:
        parent::__construct();
        goto giqysmgscwwqgmqe;
        cuacsemcmuyaokge:
        
        $umcwwewscqegoqoe->minify(true);
        goto aoqqweiisiaekqsk;
        aoqqweiisiaekqsk:
        $this->sanitizer = $umcwwewscqegoqoe;
        goto kwkeiomeuququaoy;
        ksuoesmcewiqukgy:
        $umcwwewscqegoqoe = new Sanitizer();
        goto cuacsemcmuyaokge;
        giqysmgscwwqgmqe:
    }
    public function wigskegsqequoeks()
    {
        $this->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\x61\x64\x64\137\x74\x77\x69\147\137\146\165\x6e\x63\164\151\157\x6e\163"), [$this, "\x65\165\145\145\171\145\x6d\x67\153\x65\x79\x63\145\x69\163\x61"])->qcsmikeggeemccuu("\147\145\164\x5f\151\x6d\x61\147\145\x5f\164\x61\x67", [$this, "\x63\x67\x69\141\x6b\141\143\x63\x6b\x6d\x63\x61\161\147\x69\153"], 10, 6);
        parent::wigskegsqequoeks();
    }
    public function kgquecmsgcouyaya()
    {
        $this->cecaguuoecmccuse("\x75\x70\x6c\157\141\x64\137\155\151\x6d\145\163", [$this, "\147\147\167\143\145\x71\167\145\145\x61\141\143\x77\x6f\x69\163"])->cecaguuoecmccuse("\167\x70\x5f\150\141\x6e\x64\154\x65\137\x75\160\x6c\157\141\x64\x5f\160\162\x65\146\151\x6c\164\x65\162", [$this, "\155\x65\153\x65\x75\167\x69\x65\x63\151\161\171\x6d\x61\x69\x6f"])->cecaguuoecmccuse("\x73\x76\147\x5f\141\x74\164\x72\151\x62\x75\x74\x65\x73", [$this, "\155\161\x79\x61\x63\x77\141\x61\157\143\x67\143\x73\x79\x61\x67"], 999)->cecaguuoecmccuse("\x77\160\x5f\x63\150\x65\143\153\x5f\146\x69\x6c\x65\164\x79\x70\x65\x5f\141\156\x64\x5f\x65\170\x74", [$this, "\x61\x6b\x69\x6f\157\171\141\165\153\x67\171\165\155\143\x6d\165"], 75, 4)->cecaguuoecmccuse("\141\144\x6d\151\156\137\160\157\x73\x74\137\x74\150\x75\x6d\142\156\141\151\154\137\x68\x74\155\154", [$this, "\157\x75\x61\x75\171\171\x61\x6b\x65\x61\165\141\161\161\151\x6b"], 10, 3)->cecaguuoecmccuse("\x77\x70\x5f\147\x65\164\137\x61\164\164\141\143\x68\155\145\x6e\x74\x5f\155\145\164\141\x64\x61\x74\141", [$this, "\x77\161\171\x71\x69\x73\x67\143\x79\x65\x77\151\155\157\141\x69"], 10, 2)->cecaguuoecmccuse("\167\x70\137\x70\162\x65\160\141\162\145\x5f\141\x74\164\x61\143\150\155\145\156\164\137\146\x6f\x72\137\x6a\163", [$this, "\x73\x6b\x6b\x67\x77\x77\153\x79\x6d\157\x6f\x71\x71\x61\x77\155"], 10, 2)->cecaguuoecmccuse("\x77\x70\137\x67\145\x6e\x65\162\x61\164\x65\x5f\141\x74\164\141\x63\x68\155\145\156\164\x5f\x6d\x65\x74\141\144\141\164\141", [$this, "\171\x77\x67\165\141\155\141\x69\151\x79\x61\147\x61\167\163\x63"], 10, 2)->cecaguuoecmccuse("\x69\155\141\x67\x65\x5f\165\x70\x6c\x6f\141\144\137\x66\151\154\x74\145\x72\x5f\145\x78\143\154\165\144\145", [$this, "\x71\x71\x6b\x6f\x77\x73\143\141\157\x6f\x75\143\153\x65\x67\x6f"], 10, 2)->cecaguuoecmccuse($this->ygyygikyocoymgaw("\141\x74\164\141\x63\150\x6d\x65\x6e\164\x5f\x69\x73\137\163\166\147"), [$this, "\x65\x67\x75\157\x6b\x77\161\x61\155\143\x63\x77\143\x71\x6f\x6d"], 10, 2)->cecaguuoecmccuse("\167\160\137\147\x65\x74\x5f\x61\164\x74\141\x63\x68\x6d\145\x6e\164\x5f\151\155\x61\147\x65\137\x61\x74\164\162\x69\x62\x75\164\145\x73", [$this, "\x79\143\171\161\x6b\x67\143\x69\147\x67\x6f\x61\x67\141\147\147"], 10, 3);
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
        gqcosoeyaqmyccca:
        if (!(!isset($siquossayskcwkea["\x68\145\x69\147\150\x74"]) && !isset($siquossayskcwkea["\x77\x69\144\x74\150"]))) {
            goto qaeqsckgkimiuwca;
        }
        goto skegiiomcggeymuw;
        oqumomyawuuomquy:
        $siquossayskcwkea["\x77\151\144\x74\150"] = 100;
        goto smmagsweysscecce;
        skegiiomcggeymuw:
        $siquossayskcwkea["\150\145\151\147\x68\x74"] = 100;
        goto oqumomyawuuomquy;
        smmagsweysscecce:
        qaeqsckgkimiuwca:
        goto iiogyckwmaouswqy;
        iiogyckwmaouswqy:
        return $siquossayskcwkea;
        goto qyckwskcewqioqyk;
        qyckwskcewqioqyk:
    }
    
    public function kguoyqackakgysoy($siquossayskcwkea, $uuossqmuccwyiemo = 16)
    {
        goto yikaqawiqaokyqgw;
        cumoewcksgaqwwoo:
        iwemkuaseiooqoqg:
        goto kuiomeesyokwsgio;
        emoaoyuqmmymmwkq:
        foreach ($wyicceigkekkkwgs as $oiegiwogmwmawkeo => $eqgoocgaqwqcimie) {
            goto oayiqwmaaukkuimy;
            gkoasaqwwqsgwqgo:
            $siquossayskcwkea["\x77\x69\x64\x74\x68"] = intval($eqgoocgaqwqcimie);
            goto okwsycyoqycgwaco;
            okwsycyoqycgwaco:
            $siquossayskcwkea["\x68\145\x69\147\150\164"] = intval($eqgoocgaqwqcimie);
            goto euemimammkmwkuwk;
            kgeiskysuuasqckq:
            oimegoemmuwwwkyo:
            goto cwccwmggqyeeggwe;
            gmmaicwkwqiywwyc:
            $siquossayskcwkea["\x68\145\151\x67\x68\x74"] = intval($eqgoocgaqwqcimie[1] * $uuossqmuccwyiemo);
            goto goouowwycoakigim;
            eiwkyioqeaaemqsa:
            if (is_array($eqgoocgaqwqcimie)) {
                goto ecmiggsmgmeaaqug;
            }
            goto kgogceiykkokkgeg;
            oayiqwmaaukkuimy:
            if (!(strpos($egkyssmuqcwaciya, $oiegiwogmwmawkeo) !== false)) {
                goto oimegoemmuwwwkyo;
            }
            goto eiwkyioqeaaemqsa;
            kgogceiykkokkgeg:
            $eqgoocgaqwqcimie *= $uuossqmuccwyiemo;
            goto gkoasaqwwqsgwqgo;
            goouowwycoakigim:
            qaoooeioqwiiceyq:
            goto aasuycoysaucuaaq;
            cwccwmggqyeeggwe:
            gcwikewmwkqsugms:
            goto seocecaioucmugky;
            aasuycoysaucuaaq:
            goto eagggcysqeeaeose;
            goto kgeiskysuuasqckq;
            isgiyocowwwceaoa:
            ecmiggsmgmeaaqug:
            goto ucoikisgieeseyqo;
            ucoikisgieeseyqo:
            $siquossayskcwkea["\167\151\x64\x74\x68"] = intval($eqgoocgaqwqcimie[0] * $uuossqmuccwyiemo);
            goto gmmaicwkwqiywwyc;
            euemimammkmwkuwk:
            goto qaoooeioqwiiceyq;
            goto isgiyocowwwceaoa;
            seocecaioucmugky:
        }
        goto semoowiyeimkyeuc;
        qgmegqweacumuccw:
        eeicwkoeaqmaoywm:
        goto cumoewcksgaqwwoo;
        askiamwsewkaqwoi:
        if (!$egkyssmuqcwaciya) {
            goto iwemkuaseiooqoqg;
        }
        goto coawukgoisakmosc;
        coawukgoisakmosc:
        $wyicceigkekkkwgs = (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\163\x76\x67\x5f\145\x6c\x65\x6d\145\x6e\x74\137\x63\154\141\163\163\x5f\x72\141\x74\151\157\x6e\x5f\143\157\x6e\166\145\162\x74\145\162"), []);
        goto eqiqgwqscsswkmwk;
        eqggkouoswesgwya:
        $uuossqmuccwyiemo = 16;
        goto icoooiwmiusyeaes;
        kuiomeesyokwsgio:
        return $siquossayskcwkea;
        goto yescggaseyimocqu;
        semoowiyeimkyeuc:
        eagggcysqeeaeose:
        goto qgmegqweacumuccw;
        yikaqawiqaokyqgw:
        $egkyssmuqcwaciya = ManipulateArray::get($siquossayskcwkea, "\143\154\141\163\163");
        goto askiamwsewkaqwoi;
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
        $eyoesceegakeygsi->kmmegqceukkkawme("\151\163\x5f\163\166\147", function ($aiooqyausygaasqm) {
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
        $yawwowoqosismgyq["\x73\x76\147"] = self::SVG_MIME_TYPE;
        goto gsoyaqsaauaokukc;
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
        ManipulateArray::unset($wwgucssaecqekuek, ["\x73\x72\143\x73\x65\164", "\x73\x69\x7a\145\x73"]);
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
        wswmegcumomiwaqo:
        soeggysyusqoiwwg:
        goto wsouygqoeyuksock;
        oesqomwsgwmckgsq:
        try {
            goto swkmkgmucceyweie;
            quwwquywcuyiiweo:
            $ewgwqamkygiqaawc = preg_replace("\57\74\134\77\170\155\154\56\x2a\77\x5c\x3f\x3e\x2f", '', $ewgwqamkygiqaawc);
            goto eiiqicyywgugksuc;
            aooeykwscmqgouay:
            $qogsmwakwacwqogk = ManipulateAttachment::ygwimyogyaqgumam($aokagokqyuysuksm);
            goto mcccguiaquiickwq;
            eiiqicyywgugksuc:
            $aqykuigiuwmmcieu = DOMCrawler::igmaewykumgwoaoy($ewgwqamkygiqaawc, ["\163\166\147" => ["\x63\x6c\x61\163\163" => $egkyssmuqcwaciya]]);
            goto sugmgeiemuygeoce;
            mcccguiaquiickwq:
            $ewgwqamkygiqaawc = $this->kcciqwskewsuaemk()->souwykwwmyygqyqi($qogsmwakwacwqogk);
            goto quwwquywcuyiiweo;
            swkmkgmucceyweie:
            $egkyssmuqcwaciya = DOMCrawler::waecsyqmwascmqoa($nsmgceoqaqogqmuw, "\151\x6d\x67", "\143\154\141\163\163");
            goto aooeykwscmqgouay;
            sugmgeiemuygeoce:
        } catch (Exception $wgaoewqkwgomoaai) {
            $aqykuigiuwmmcieu = $nsmgceoqaqogqmuw;
        }
        goto wswmegcumomiwaqo;
        ommmymgkaageowym:
        $aqykuigiuwmmcieu = $nsmgceoqaqogqmuw;
        goto aseoykguwasmaggs;
        aseoykguwasmaggs:
        if (!($nsmgceoqaqogqmuw && $this->iigcaickwcykouca($aokagokqyuysuksm))) {
            goto soeggysyusqoiwwg;
        }
        goto oesqomwsgwmckgsq;
        wsouygqoeyuksock:
        return $aqykuigiuwmmcieu;
        goto qaugkmgccegqkasu;
        qaugkmgccegqkasu:
    }
    
    public function akiooyaukgyumcmu($icwicymcioeyeyek = null, $qogsmwakwacwqogk = null, $wkcwykowmmmwioqs = null, $yawwowoqosismgyq = null)
    {
        goto qssyiieuymmiwicm;
        yqewusaguumeiqyq:
        $yucgcsieomwqgwws = strtolower(end($ukequsueuukqgaca));
        goto kwwgmsmuoeysguwq;
        qeaugewkiwmkoaas:
        if (!in_array($yucgcsieomwqgwws, ["\x73\x76\x67", "\x73\166\147\172"])) {
            goto swgecgeeeaaakgss;
        }
        goto cgmgikoumekoyyae;
        aqguswuomiqimcwy:
        swgecgeeeaaakgss:
        goto gocwgeomykcekcso;
        cgmgikoumekoyyae:
        $icwicymcioeyeyek["\164\x79\x70\145"] = self::SVG_MIME_TYPE;
        goto yigecwqswuowoakm;
        gocwgeomykcekcso:
        return $icwicymcioeyeyek;
        goto kggwiioyiqgskcem;
        kuyuwimysoqcmgek:
        if (!(strlen($yucgcsieomwqgwws) < 1)) {
            goto scageqmiwcyqmmmk;
        }
        goto fosuiwomyuwkaisi;
        kwwgmsmuoeysguwq:
        scageqmiwcyqmmmk:
        goto qeaugewkiwmkoaas;
        qssyiieuymmiwicm:
        $yucgcsieomwqgwws = isset($icwicymcioeyeyek["\x65\170\x74"]) ? $icwicymcioeyeyek["\x65\170\x74"] : '';
        goto kuyuwimysoqcmgek;
        fosuiwomyuwkaisi:
        $ukequsueuukqgaca = explode("\56", $wkcwykowmmmwioqs);
        goto yqewusaguumeiqyq;
        yigecwqswuowoakm:
        $icwicymcioeyeyek["\145\x78\x74"] = $yucgcsieomwqgwws;
        goto aqguswuomiqimcwy;
        kggwiioyiqgskcem:
    }
    
    public function mekeuwieciqymaio($qogsmwakwacwqogk)
    {
        goto oimaymokouuwueum;
        uoqequmkiyukiqgi:
        kyswigcwgusmesqi:
        goto qwikcqiaiumsswow;
        cgsawegeqqsecwam:
        if ($this->yiiiqewsseywemqu($qogsmwakwacwqogk["\164\x6d\x70\137\156\x61\x6d\145"])) {
            goto emwggqiqcmmqeawy;
        }
        goto eucsyaygqqcqamus;
        eucsyaygqqcqamus:
        $qogsmwakwacwqogk["\145\x72\x72\x6f\162"] = __("\x53\157\162\x72\x79\54\40\x74\150\x69\163\40\x66\x69\154\145\x20\143\x6f\x75\x6c\x64\x6e\x27\x74\x20\142\x65\40\163\141\156\x69\164\151\x7a\145\144\x20\163\157\40\x66\157\x72\40\163\x65\x63\x75\162\x69\x74\x79\x20\x72\145\x61\163\157\x6e\x73\x20\167\x61\163\x6e\47\x74\x20\x75\x70\154\157\x61\144\145\x64", PR__CMN__FOUNDATION);
        goto iaqwisciugaosygy;
        qwikcqiaiumsswow:
        return $qogsmwakwacwqogk;
        goto ukggweysgiiygqsa;
        oimaymokouuwueum:
        if (!($qogsmwakwacwqogk["\164\171\160\x65"] === self::SVG_MIME_TYPE)) {
            goto kyswigcwgusmesqi;
        }
        goto cgsawegeqqsecwam;
        iaqwisciugaosygy:
        emwggqiqcmmqeawy:
        goto uoqequmkiyukiqgi;
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
        egyuciuossumacuy:
        $keccaugmemegoimu = array_merge($keccaugmemegoimu, $qaiwqwwemmyyqosy);
        goto egwuecigeyuooiam;
        giiqogwyoikiiqyi:
        $qaiwqwwemmyyqosy = $this->qaeakmimoqkugagk(ManipulateAttachment::ckoygqywcuqasqea($aiooqyausygaasqm));
        goto iqiwimyamykmuiwo;
        moyqaggmqqimwusm:
        $keccaugmemegoimu["\151\x63\157\156"] = $keccaugmemegoimu["\165\162\154"];
        goto kawgkswoygkmgmao;
        sieccokukwgmuggw:
        $possible_sizes = $this->sscegwueamckwmcy("\151\155\141\147\145\x5f\163\151\172\x65\x5f\x6e\141\x6d\145\x73\137\143\150\157\x6f\163\145", ["\146\165\154\154" => __("\x46\x75\x6c\x6c\x20\123\x69\172\x65", PR__CMN__FOUNDATION), "\164\x68\165\155\142\x6e\x61\151\154" => __("\x54\150\x75\155\x62\156\x61\x69\x6c", PR__CMN__FOUNDATION), "\155\x65\x64\x69\165\155" => __("\115\145\x64\151\x75\155", PR__CMN__FOUNDATION), "\154\x61\162\x67\x65" => __("\114\x61\x72\x67\145", PR__CMN__FOUNDATION)]);
        goto yqckgyeeuyayosww;
        kawgkswoygkmgmao:
        kkscsmuyumawosyc:
        goto suewugkisoommmgy;
        qicekkeggigkwqeu:
        $keccaugmemegoimu["\163\x69\x7a\145\x73"] = $wyicceigkekkkwgs;
        goto moyqaggmqqimwusm;
        geqakgsumkyosuca:
        wsawmoiaemkggocs:
        goto qicekkeggigkwqeu;
        qmsyaycokgmmwycs:
        foreach ($possible_sizes as $oiegiwogmwmawkeo => $pkyyagewkiyckmwy) {
            goto cocwomcoymcaqgky;
            moeeimaaoaycycmi:
            $default_height = $qaiwqwwemmyyqosy["\150\145\151\x67\x68\164"];
            goto mggyiwyuuiwswaks;
            ukygqcaqcaqqmyew:
            $default_width = 2000;
            goto ymiosikicyqkaiaa;
            cocwomcoymcaqgky:
            $default_height = 2000;
            goto ukygqcaqcaqqmyew;
            mggyiwyuuiwswaks:
            $default_width = $qaiwqwwemmyyqosy["\x77\151\x64\164\x68"];
            goto yemwekyegaywgoug;
            wqmgwcsuccoweocq:
            iuiawwoouuwwiqca:
            goto oyeswuecyaiiawyg;
            wqgecqaciyakecys:
            $wyicceigkekkkwgs[$oiegiwogmwmawkeo] = ["\150\x65\x69\x67\150\x74" => DecoratorOption::get("{$oiegiwogmwmawkeo}\x5f\x73\151\172\145\x5f\x77", $default_height), "\167\151\144\164\150" => DecoratorOption::get("{$oiegiwogmwmawkeo}\x5f\163\151\172\145\137\150", $default_width), "\165\162\x6c" => $keccaugmemegoimu["\165\x72\x6c"], "\157\162\x69\145\x6e\x74\141\164\x69\x6f\x6e" => "\160\x6f\162\x74\x72\x61\x69\x74"];
            goto wqmgwcsuccoweocq;
            yemwekyegaywgoug:
            oeeakgukqusiqswc:
            goto wqgecqaciyakecys;
            ymiosikicyqkaiaa:
            if (!("\x66\165\154\x6c" === $oiegiwogmwmawkeo && $qaiwqwwemmyyqosy)) {
                goto oeeakgukqusiqswc;
            }
            goto moeeimaaoaycycmi;
            oyeswuecyaiiawyg:
        }
        goto geqakgsumkyosuca;
        suewugkisoommmgy:
        return $keccaugmemegoimu;
        goto tsywwmwawwgcwmuc;
        ysmessckmysogeua:
        if (!($keccaugmemegoimu["\155\151\x6d\145"] == self::SVG_MIME_TYPE)) {
            goto kkscsmuyumawosyc;
        }
        goto giiqogwyoikiiqyi;
        yqckgyeeuyayosww:
        $wyicceigkekkkwgs = [];
        goto qmsyaycokgmmwycs;
        egwuecigeyuooiam:
        iekecmawqyigmqcg:
        goto sieccokukwgmuggw;
        tsywwmwawwgcwmuc:
    }
    
    protected function yiiiqewsseywemqu($qogsmwakwacwqogk)
    {
        goto icqaiqyewuyegkeq;
        qmiouyoeguiqymgi:
        $qawsmigsyysqwmeq = gzencode($qawsmigsyysqwmeq);
        goto noswwaawyacomwyo;
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
        moeseousgukmygmy:
        $yeueggiecgqcswqm = gzdecode($yeueggiecgqcswqm);
        goto xaiaogcwcaeweoiu;
        eouugaqkgamwmgmo:
        qeggwmykewcoieic:
        goto weocosykwsaimaks;
        gmywmsmiayimqygy:
        if (!($qawsmigsyysqwmeq === false)) {
            goto ieauiumamygiuckc;
        }
        goto kcaysyweukeimoik;
        weocosykwsaimaks:
        
        $qawsmigsyysqwmeq = $this->sanitizer->sanitize($yeueggiecgqcswqm);
        goto gmywmsmiayimqygy;
        kcaysyweukeimoik:
        return false;
        goto eakoykqcmyemgyum;
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
        noswwaawyacomwyo:
        eookussqeicycoio:
        goto wcoekawkkswkgamc;
        wsomqsmeououqiwu:
        qucoecmmmacqooek:
        goto eouugaqkgamwmgmo;
        wcoekawkkswkgamc:
        return $this->kcciqwskewsuaemk()->kwsmkgyoyaqecwuu($qogsmwakwacwqogk, $qawsmigsyysqwmeq);
        goto uqwsiocauuswgwok;
        eakoykqcmyemgyum:
        ieauiumamygiuckc:
        goto aqyimgoegakwgoum;
        uqwsiocauuswgwok:
    }
    
    protected function wsggsqigawogiwky($ygwoqcwsaggqoamw)
    {
        goto giueuuwusgmgeick;
        wskcqwywmwmwigce:
        goto oqyosskkgcuckmes;
        goto iiuwcsgwcguceiko;
        wkycksmmuskouies:
        return 0 === mb_strpos($ygwoqcwsaggqoamw, "\37" . "\x8b" . "\10");
        goto emucccmcoiwcyioq;
        giueuuwusgmgeick:
        if (function_exists("\x6d\142\x5f\x73\x74\x72\160\157\x73")) {
            goto iisgwcgceeygauyk;
        }
        goto eksamuqymmeumqsg;
        eksamuqymmeumqsg:
        return 0 === strpos($ygwoqcwsaggqoamw, "\37" . "\x8b" . "\10");
        goto wskcqwywmwmwigce;
        emucccmcoiwcyioq:
        oqyosskkgcuckmes:
        goto yigmeqsygwgioyaa;
        iiuwcsgwcguceiko:
        iisgwcgceeygauyk:
        goto wkycksmmuskouies;
        yigmeqsygwgioyaa:
    }
    
    public function oowwkoeekmwwgieu($mcqieaigyeeyaksm, $aiooqyausygaasqm, $oiegiwogmwmawkeo)
    {
        goto cmqocusuososcwqk;
        aesukugmkcsuocwc:
        iwciaqcioigqwiys:
        goto uyowywywqeagqcuw;
        aoewemyqigugysua:
        return $mcqieaigyeeyaksm;
        goto egauqkuumkisssaa;
        qoysygagyigwsiwm:
        $cswemwoyesycwkuq = false;
        goto yqwkgwucqwqyuqmw;
        eswgqkmomsiauqqy:
        $gkiuoymeukweiaaw = ManipulateAttachment::iuwsgyqakicakuoq($oiegiwogmwmawkeo);
        goto qoysygagyigwsiwm;
        yqwkgwucqwqyuqmw:
        $qeswwaqqsyymqawg = false;
        goto icckscyoesgiyksu;
        uyyieiuceauoecyq:
        $cswemwoyesycwkuq = ManipulateAttachment::get($gkiuoymeukweiaaw, "\x68\145\151\147\150\x74");
        goto maycimoaceiiuemu;
        cmqocusuososcwqk:
        if (!$this->iigcaickwcykouca($aiooqyausygaasqm)) {
            goto awgamseuywgciius;
        }
        goto eswgqkmomsiauqqy;
        icckscyoesgiyksu:
        if (!$gkiuoymeukweiaaw) {
            goto iwciaqcioigqwiys;
        }
        goto uyyieiuceauoecyq;
        uyowywywqeagqcuw:
        
        
        goto umekgwemiaygomky;
        umekgwemiaygomky:
        awgamseuywgciius:
        goto aoewemyqigugysua;
        maycimoaceiiuemu:
        $qeswwaqqsyymqawg = ManipulateAttachment::get($gkiuoymeukweiaaw, "\167\151\144\x74\x68");
        goto aesukugmkcsuocwc;
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
        $ewgwqamkygiqaawc = DOMCrawler::igmaewykumgwoaoy($ewgwqamkygiqaawc, ["\x69\x6d\147\x2c\x20\x61" => ["\x63\154\141\x73\x73" => "\x77\55\61\60\x30"]]);
        goto wicguyksogckqums;
        eageyyymyekskmue:
    }
    
    public function cgiakacckmcaqgik($nsmgceoqaqogqmuw, $aokagokqyuysuksm, $gkykacccamuwowwc, $meqocwsecsywiiqs, $ioogmuawkgcgmkia, $oiegiwogmwmawkeo)
    {
        goto mgocagiwqsgaisyq;
        caocoiecwueosoig:
        $qeswwaqqsyymqawg = $qaiwqwwemmyyqosy["\x77\x69\144\x74\150"];
        goto qsuyqoeocsmkomwy;
        iwawqgcgskysqyaa:
        goto csmqeagwuisqiuym;
        goto agaomyyqaaswykui;
        cmsyegseqcwmyycy:
        cooiowgwqgssuqcw:
        goto wiiaiqiomosmyuwq;
        sacmqsciuaucgaww:
        $cswemwoyesycwkuq = $oiegiwogmwmawkeo[1];
        goto mqywccygymoeaoym;
        sccaumocseyiqsue:
        $nsmgceoqaqogqmuw = str_replace("\150\x65\151\147\x68\x74\75\x22\x31\42\40", sprintf("\x68\145\x69\x67\150\x74\x3d\42\45\x73\42\x20", $cswemwoyesycwkuq), $nsmgceoqaqogqmuw);
        goto cmmoyuuegqguakga;
        kysaqkaiksosyegu:
        $cswemwoyesycwkuq = DecoratorOption::get("{$oiegiwogmwmawkeo}\137\x73\x69\172\145\137\x68", false);
        goto iwawqgcgskysqyaa;
        yygqgeukeuaciewa:
        $qeswwaqqsyymqawg = DecoratorOption::get("{$oiegiwogmwmawkeo}\x5f\163\x69\172\145\x5f\x77", false);
        goto kysaqkaiksosyegu;
        uacekkwiaagmuieg:
        $nsmgceoqaqogqmuw = str_replace("\167\x69\x64\164\x68\75\x22\x31\42\x20", '', $nsmgceoqaqogqmuw);
        goto seiysueoskimiaam;
        wayyiemaccqkmqeg:
        if ("\146\x75\154\154" == $oiegiwogmwmawkeo && ($qaiwqwwemmyyqosy = $this->qaeakmimoqkugagk(ManipulateAttachment::ckoygqywcuqasqea($aokagokqyuysuksm)))) {
            goto qkycyqgwwoiuaomq;
        }
        goto yygqgeukeuaciewa;
        ywyqmwuswkcoyqsy:
        goto ygaggwgwiceegasy;
        goto musiyggyqaiwwouu;
        wiomewyyumkmwsum:
        if ($cswemwoyesycwkuq && $qeswwaqqsyymqawg) {
            goto cooiowgwqgssuqcw;
        }
        goto uacekkwiaagmuieg;
        mqywccygymoeaoym:
        ygaggwgwiceegasy:
        goto wiomewyyumkmwsum;
        imymswaceomsasks:
        $qeswwaqqsyymqawg = $oiegiwogmwmawkeo[0];
        goto sacmqsciuaucgaww;
        seiysueoskimiaam:
        $nsmgceoqaqogqmuw = str_replace("\150\x65\151\x67\x68\x74\x3d\x22\x31\42\40", '', $nsmgceoqaqogqmuw);
        goto gawswamyawcmsmei;
        wiiaiqiomosmyuwq:
        $nsmgceoqaqogqmuw = str_replace("\x77\151\x64\164\x68\75\42\x31\x22\40", sprintf("\167\x69\x64\164\150\75\x22\45\163\x22\40", $qeswwaqqsyymqawg), $nsmgceoqaqogqmuw);
        goto sccaumocseyiqsue;
        mgocagiwqsgaisyq:
        if (!$this->iigcaickwcykouca($aokagokqyuysuksm)) {
            goto meyowgukekkkkuqe;
        }
        goto wkumckmusackacmi;
        musiyggyqaiwwouu:
        ccymqyyaikauqaiq:
        goto imymswaceomsasks;
        wkumckmusackacmi:
        if (is_array($oiegiwogmwmawkeo)) {
            goto ccymqyyaikauqaiq;
        }
        goto wayyiemaccqkmqeg;
        cmmoyuuegqguakga:
        uyouccoiyogmuwey:
        goto ooccckeeomycucao;
        ioyyiaguqyiaeaqs:
        csmqeagwuisqiuym:
        goto ywyqmwuswkcoyqsy;
        ooqwuoiqmiswgkyu:
        return $nsmgceoqaqogqmuw;
        goto uieeaeqciogamoqe;
        gawswamyawcmsmei:
        goto uyouccoiyogmuwey;
        goto cmsyegseqcwmyycy;
        agaomyyqaaswykui:
        qkycyqgwwoiuaomq:
        goto caocoiecwueosoig;
        ooccckeeomycucao:
        $nsmgceoqaqogqmuw = str_replace("\x2f\x3e", "\x20\x72\x6f\154\145\x3d\x22\x69\155\x67\42\40\57\x3e", $nsmgceoqaqogqmuw);
        goto cwmkgosooecsywcm;
        cwmkgosooecsywcm:
        meyowgukekkkkuqe:
        goto ooqwuoiqmiswgkyu;
        qsuyqoeocsmkomwy:
        $cswemwoyesycwkuq = $qaiwqwwemmyyqosy["\x68\145\x69\147\x68\x74"];
        goto ioyyiaguqyiaeaqs;
        uieeaeqciogamoqe:
    }
    
    public function ywguamaiiyagawsc($kuguwoaesuqsqysu, $attachment_id)
    {
        goto eiwcgwomusuokygg;
        oqmeeqioiooguikk:
        $svg_path = ManipulateAttachment::ckoygqywcuqasqea($attachment_id);
        goto ggwyamakeyyieeog;
        csgqcskywiqwyocw:
        return $kuguwoaesuqsqysu;
        goto suicqccekqckayec;
        ksqcmyaawiiiimco:
        $qaiwqwwemmyyqosy = $this->qaeakmimoqkugagk($svg_path);
        goto ysqokomouwswymck;
        ggwyamakeyyieeog:
        $upload_dir = DecoratorFile::oemywwmmmiywiqai();
        goto ssaeeugeycyaaaki;
        ysqokomouwswymck:
        if ($qaiwqwwemmyyqosy) {
            goto wmskawmisgksegwe;
        }
        goto csgqcskywiqwyocw;
        oimwgecwwecuugwq:
        $kuguwoaesuqsqysu["\x73\x69\172\x65\x73"] = $wyicceigkekkkwgs;
        goto ycyoioowuumgwkuk;
        wqaiocgoqsqogmcm:
        return $kuguwoaesuqsqysu;
        goto ccwsuiigukoykcew;
        eiwcgwomusuokygg:
        if (!$this->iigcaickwcykouca($attachment_id)) {
            goto yksgcagiyukouics;
        }
        goto oeyyasumsgwocquw;
        wiouwokmcckqekqy:
        usasekcgsyyqymgy:
        goto oimwgecwwecuugwq;
        ssquocgwsassuike:
        
        $wyicceigkekkkwgs = [];
        goto uommmgequgiiykci;
        uommmgequgiiykci:
        foreach (get_intermediate_image_sizes() as $piuesceqiguuskme) {
            goto mekaesaeskqmgqii;
            kuigwocyaagakags:
            if (isset($additional_image_sizes[$piuesceqiguuskme]["\167\151\x64\164\x68"])) {
                goto scymgswieuyiqwmm;
            }
            goto miiaowmiyoemouke;
            yumiokuikmkkwcwg:
            $wyicceigkekkkwgs[$piuesceqiguuskme]["\x6d\x69\x6d\x65\x2d\164\x79\x70\145"] = ManipulateAttachment::ikocqgeqiykwwyqs($attachment_id);
            goto isgceyiuweaueqeu;
            qsisgmaawywioogk:
            eskcocwimiseewmu:
            goto qwkyuqqgkugqggqo;
            ggccmgysseeqcaga:
            goto gkwyuumqeuikwiku;
            goto uiuiuicckaiksqyc;
            cacaysyqsqaauawm:
            iymwycosumimggmu:
            goto iosymaiumakyyaos;
            kemiasqyoocyqqgm:
            
            $wyicceigkekkkwgs[$piuesceqiguuskme]["\167\x69\144\x74\150"] = intval($additional_image_sizes[$piuesceqiguuskme]["\x77\x69\x64\164\150"]);
            goto esgykeaqimuiewgw;
            miiaowmiyoemouke:
            
            $wyicceigkekkkwgs[$piuesceqiguuskme]["\167\x69\144\164\x68"] = DecoratorOption::get("{$piuesceqiguuskme}\x5f\163\151\x7a\x65\x5f\167");
            goto auoaywowugkacsia;
            amemoiimosckqems:
            
            $wyicceigkekkkwgs[$piuesceqiguuskme]["\x63\x72\157\160"] = intval($additional_image_sizes[$piuesceqiguuskme]["\143\162\x6f\160"]);
            goto yqimmomioeoaqwkq;
            qwkyuqqgkugqggqo:
            
            $wyicceigkekkkwgs[$piuesceqiguuskme]["\x68\x65\151\147\x68\164"] = intval($additional_image_sizes[$piuesceqiguuskme]["\150\x65\151\147\150\x74"]);
            goto cacaysyqsqaauawm;
            oueaeyqiqiakqaek:
            
            $wyicceigkekkkwgs[$piuesceqiguuskme]["\150\x65\151\x67\x68\164"] = DecoratorOption::get("{$piuesceqiguuskme}\x5f\163\151\172\145\x5f\150");
            goto bweusaooumwyemuu;
            yqimmomioeoaqwkq:
            gkwyuumqeuikwiku:
            goto kosccieswmaoeoyk;
            isgceyiuweaueqeu:
            uqggmkmmysmeqkmy:
            goto guqwqwceceswwucy;
            wgkeakuiaqswmkes:
            scymgswieuyiqwmm:
            goto kemiasqyoocyqqgm;
            kosccieswmaoeoyk:
            $wyicceigkekkkwgs[$piuesceqiguuskme]["\146\151\154\x65"] = $wkcwykowmmmwioqs;
            goto yumiokuikmkkwcwg;
            mekaesaeskqmgqii:
            $wyicceigkekkkwgs[$piuesceqiguuskme] = ["\x77\x69\x64\x74\150" => '', "\x68\x65\151\x67\150\x74" => '', "\143\x72\x6f\x70" => false];
            goto kuigwocyaagakags;
            eymgmkoqgoqicgsi:
            if (isset($additional_image_sizes[$piuesceqiguuskme]["\x68\x65\151\147\x68\x74"])) {
                goto eskcocwimiseewmu;
            }
            goto oueaeyqiqiakqaek;
            iosymaiumakyyaos:
            if (isset($additional_image_sizes[$piuesceqiguuskme]["\143\162\x6f\x70"])) {
                goto wmismwqqqagsomky;
            }
            goto kqgqymcemksgmsaa;
            esgykeaqimuiewgw:
            gymqkieyuiawacwi:
            goto eymgmkoqgoqicgsi;
            bweusaooumwyemuu:
            goto iymwycosumimggmu;
            goto qsisgmaawywioogk;
            kqgqymcemksgmsaa:
            
            $wyicceigkekkkwgs[$piuesceqiguuskme]["\x63\162\157\160"] = DecoratorOption::get("{$piuesceqiguuskme}\137\x63\162\x6f\160");
            goto ggccmgysseeqcaga;
            uiuiuicckaiksqyc:
            wmismwqqqagsomky:
            goto amemoiimosckqems;
            auoaywowugkacsia:
            goto gymqkieyuiawacwi;
            goto wgkeakuiaqswmkes;
            guqwqwceceswwucy:
        }
        goto wiouwokmcckqekqy;
        ssaeeugeycyaaaki:
        
        $relative_path = str_replace($upload_dir["\x62\x61\x73\145\144\151\162"], '', $svg_path);
        goto caammwwkqeeemaok;
        ycyoioowuumgwkuk:
        yksgcagiyukouics:
        goto wqaiocgoqsqogmcm;
        caammwwkqeeemaok:
        $wkcwykowmmmwioqs = basename($svg_path);
        goto ksqcmyaawiiiimco;
        suicqccekqckayec:
        wmskawmisgksegwe:
        goto sqqcaugoikagoykc;
        sqqcaugoikagoykc:
        $kuguwoaesuqsqysu = ["\167\x69\x64\x74\x68" => intval($qaiwqwwemmyyqosy["\x77\151\144\x74\150"]), "\150\145\x69\147\150\164" => intval($qaiwqwwemmyyqosy["\x68\x65\x69\x67\150\164"]), "\x66\x69\154\145" => $relative_path];
        goto ssquocgwsassuike;
        oeyyasumsgwocquw:
        $additional_image_sizes = wp_get_additional_image_sizes();
        goto oqmeeqioiooguikk;
        ccwsuiigukoykcew:
    }
    
    public function wqyqisgcyewimoai($icwicymcioeyeyek, $post)
    {
        goto maiaiacekmmwswqe;
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
        cymmwkiaogwsmcsu:
        $icwicymcioeyeyek = ManipulateAttachment::smiqaaaecemiwugu($post, ManipulateAttachment::ckoygqywcuqasqea($post));
        goto ueaiaeaaaiiuskyi;
        ueaiaeaaaiiuskyi:
        ManipulateAttachment::_updateMeta($post, $icwicymcioeyeyek);
        goto mwagkoucauykimsu;
        gmqmkgkikksymkik:
    }
    
    protected function qaeakmimoqkugagk($waoisqguweoociwe)
    {
        goto qywgeimouqcummco;
        yyeowwwqogwoeoyc:
        $siquossayskcwkea = $waoisqguweoociwe->attributes();
        goto ywagwigaamkacqsm;
        iqyicsuysksymwuw:
        goto sgosioakiaeqmyyy;
        goto qeaiigkoomwsgoem;
        yqocsiwyueakoqoe:
        ocmywgkaoogmcsau:
        goto mewsemcoqiuuwwme;
        isoisgaoqmiqeiak:
        goto kgqyyosqeaqigeuo;
        goto ukiagcaimyycouuq;
        gsageymuesseosmy:
        $qeswwaqqsyymqawg = intval($siquossayskcwkea->width);
        goto skwiuqgoiaiskqmm;
        ywagwigaamkacqsm:
        if (isset($siquossayskcwkea->width, $siquossayskcwkea->height)) {
            goto qsamicayummauigq;
        }
        goto eouoyysyekegaigi;
        ygqwuggqqouywgoq:
        $wyicceigkekkkwgs = explode("\x20", $siquossayskcwkea->viewBox);
        goto yseimcmuaycskkak;
        gowsaeyyqagsmkce:
        $qeswwaqqsyymqawg = intval($wyicceigkekkkwgs[2]);
        goto wskkqgweqwsaygqi;
        ukiagcaimyycouuq:
        gyaiswaqomsiwcwu:
        goto ygqwuggqqouywgoq;
        syskuqogeeoicwgw:
        $cswemwoyesycwkuq = 0;
        goto kommicqseqmaiuss;
        mewsemcoqiuuwwme:
        return ["\x77\x69\x64\x74\x68" => $qeswwaqqsyymqawg, "\150\145\x69\x67\150\164" => $cswemwoyesycwkuq, "\157\162\x69\x65\x6e\164\141\164\x69\157\156" => $qeswwaqqsyymqawg > $cswemwoyesycwkuq ? "\x6c\x61\156\x64\163\x63\141\x70\x65" : "\160\x6f\162\164\162\x61\x69\x74"];
        goto yeemeukcggweaowa;
        qeaiigkoomwsgoem:
        qsamicayummauigq:
        goto gsageymuesseosmy;
        saimmkcsakcakqww:
        gqsciemssskoqamq:
        goto cmqyiscgeswqsoog;
        kommicqseqmaiuss:
        if (!$waoisqguweoociwe) {
            goto ocmywgkaoogmcsau;
        }
        goto yyeowwwqogwoeoyc;
        wskkqgweqwsaygqi:
        $cswemwoyesycwkuq = intval($wyicceigkekkkwgs[3]);
        goto saimmkcsakcakqww;
        ikosmomwmyimqaew:
        sgosioakiaeqmyyy:
        goto yqocsiwyueakoqoe;
        eouoyysyekegaigi:
        if (isset($siquossayskcwkea->viewBox)) {
            goto gyaiswaqomsiwcwu;
        }
        goto wigumuwcsuiaauyw;
        yseimcmuaycskkak:
        if (!isset($wyicceigkekkkwgs[2], $wyicceigkekkkwgs[3])) {
            goto gqsciemssskoqamq;
        }
        goto gowsaeyyqagsmkce;
        skwiuqgoiaiskqmm:
        $cswemwoyesycwkuq = intval($siquossayskcwkea->height);
        goto ikosmomwmyimqaew;
        wigumuwcsuiaauyw:
        return false;
        goto isoisgaoqmiqeiak;
        sgkcewwkiomywgky:
        $qeswwaqqsyymqawg = 0;
        goto syskuqogeeoicwgw;
        cmqyiscgeswqsoog:
        kgqyyosqeaqigeuo:
        goto iqyicsuysksymwuw;
        qywgeimouqcummco:
        $waoisqguweoociwe = @simplexml_load_file($waoisqguweoociwe);
        goto sgkcewwkiomywgky;
        yeemeukcggweaowa:
    }
    
    public function umacyowesakeiewk($wisgiwskwawciiee, $aiooqyausygaasqm, $oiegiwogmwmawkeo)
    {
        goto ywumciccwiakyeus;
        mwucaqouymaweuck:
        $wisgiwskwawciiee["\150\x65\x69\x67\x68\x74"] = 80;
        goto eyaciqqycmmgoski;
        kkeiscyscckuuqci:
        $cswemwoyesycwkuq = ManipulateArray::get($qaiwqwwemmyyqosy, "\150\145\x69\x67\150\164");
        goto myaeiwowqwegogmq;
        qiaayoymqmmemiiy:
        $cswemwoyesycwkuq = 100;
        goto oummiciwcqkwymss;
        egamwswskucyocos:
        weaqamgsuuwuouks:
        goto yaecoyqgimisqywa;
        eyaciqqycmmgoski:
        
        $wisgiwskwawciiee["\167\x69\x64\164\x68"] = 80;
        goto oqgomigmmsikougi;
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
        yaecoyqgimisqywa:
        return $wisgiwskwawciiee;
        goto emouoksmeamyiikc;
        awggeauumiqymcoi:
        wyucqqggakoceowc:
        goto eiqawcsoocuowioo;
        qwsioymycmywyqiw:
        $qeswwaqqsyymqawg = 100;
        goto qiaayoymqmmemiiy;
        yauqmqauoqwymcsu:
        iuiyqyiwisggcywk:
        goto mwucaqouymaweuck;
        oummiciwcqkwymss:
        $qaiwqwwemmyyqosy = ManipulateAttachment::iuwsgyqakicakuoq($oiegiwogmwmawkeo);
        goto omkkomymwsowywwa;
        qmwomemuqyaimiso:
        $qaiwqwwemmyyqosy = $this->qaeakmimoqkugagk(ManipulateAttachment::ckoygqywcuqasqea($aiooqyausygaasqm));
        goto awggeauumiqymcoi;
        oqgomigmmsikougi:
        
        goto egamwswskucyocos;
        myaeiwowqwegogmq:
        $qeswwaqqsyymqawg = ManipulateArray::get($qaiwqwwemmyyqosy, "\167\x69\144\164\x68");
        goto yauqmqauoqwymcsu;
        ywumciccwiakyeus:
        if (!$this->iigcaickwcykouca($aiooqyausygaasqm)) {
            goto weaqamgsuuwuouks;
        }
        goto qwsioymycmywyqiw;
        emouoksmeamyiikc:
    }
    
    public function iigcaickwcykouca($aiooqyausygaasqm) : bool
    {
        return self::SVG_MIME_TYPE === ManipulateAttachment::ikocqgeqiykwwyqs($aiooqyausygaasqm);
    }
}
