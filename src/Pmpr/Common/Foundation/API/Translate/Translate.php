<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b30261f503             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\API\Translate;

use Exception;
use Pmpr\Common\Foundation\API\API;
use Pmpr\Common\Foundation\API\Translate\Token\Generator;
use Pmpr\Common\Foundation\API\Translate\Token\GeneratorInterface;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;
use Psr\Http\Message\ResponseInterface;
use UnexpectedValueException;

class Translate extends API
{
    const RESULT_REGEX = ["\57\54\53\57" => "\x2c", "\x2f\x5c\133\x2c\x2f" => "\133"];
    
    protected ?string $lastDetectedSource = null;
    
    protected ?GeneratorInterface $token = null;
    public function __construct()
    {
        goto aamewgauekskkmqy;
        mqamoqcwieeeaogq:
        $this->domain = "\150\164\x74\x70\163\72\57\57\164\162\x61\x6e\x73\154\x61\x74\145\x2e\x67\x6f\x6f\x67\154\145\56\x63\x6f\155\57\x74\162\141\156\x73\x6c\x61\x74\x65\x5f\141";
        goto aiiugysmmiyeweqw;
        aiiugysmmiyeweqw:
        $this->ueqoossgegqyosem([
            "\x63\x6c\151\x65\156\164" => "\147\x74\170",
            
            "\150\x6c" => "\145\x6e",
            "\144\x74" => ["\x74", "\x62\144", "\141\164", "\145\170", "\154\144", "\155\144", "\x71\x63\141", "\162\x77", "\x72\155", "\163\x73"],
            "\163\x6c" => null,
            
            "\x74\x6c" => null,
            
            "\x71" => null,
            
            "\x69\x65" => "\125\x54\x46\x2d\x38",
            
            "\157\x65" => "\125\124\106\55\70",
            
            "\155\165\154\x74\x69\x72\145\163" => 1,
            "\157\164\146" => 0,
            "\160\143" => 1,
            "\x74\162\x73" => 1,
            "\163\x73\x65\154" => 0,
            "\x74\x73\x65\154" => 0,
            "\x6b\x63" => 1,
            "\164\x6b" => null,
        ]);
        goto coycukegioumceac;
        coycukegioumceac:
        parent::__construct();
        goto dauumiwwoaomeeiq;
        aamewgauekskkmqy:
        $this->token = new Generator();
        goto mqamoqcwieeeaogq;
        dauumiwwoaomeeiq:
    }
    public function kgquecmsgcouyaya()
    {
        $this->cecaguuoecmccuse($this->ygyygikyocoymgaw("\x61\x70\151\137\164\162\x61\156\163\154\x61\x74\x65"), [$this, "\164\x72\x61\156\x73\x6c\141\x74\145"], 10, 4);
        parent::kgquecmsgcouyaya();
    }
    
    public function translate(string $cmwygeyygwqaemaq = '', string $ccamueccusigaaio = "\x66\x61", string $egsumesakcaaukem = "\145\x6e", array $qiouiwasaauyaaue = [])
    {
        goto owosugyaauewwmak;
        kwqcqueyukysmuia:
        eoikcysgayayyaik:
        goto qqssuiecukiyiemg;
        aseowoeeewyquqcq:
        goto qkacaucsuuqmwssw;
        goto mgcsosaagcyukwsk;
        wkokskegkswkoswi:
        goto qmcqkyugmgcsqusu;
        goto omesscwqssieckec;
        oeiacaimywgymucg:
        if (is_string($keccaugmemegoimu)) {
            goto eoikcysgayayyaik;
        }
        goto qokuwssowkeimwio;
        usiagamiyyiciywo:
        if (is_string($keccaugmemegoimu)) {
            goto aewqkyaucyssiaay;
        }
        goto qcceiumauoumwkas;
        sqqgewuqsikkeoqc:
        aumowykksoissaee:
        goto qagceekoguwswkym;
        omesscwqssieckec:
        mkowswyuyusgiwys:
        goto amugscyksemawyue;
        amugscyksemawyue:
        $keccaugmemegoimu = (string) array_reduce($keccaugmemegoimu[0], function ($ouameqkugmqkussm, $igqsaukqcqscimok) {
            $ouameqkugmqkussm .= $igqsaukqcqscimok[0];
            return $ouameqkugmqkussm;
        });
        goto gggagaqgieumsous;
        iueewwccugsweuau:
        $coamwgceiiaocqmi[] = $keccaugmemegoimu[count($keccaugmemegoimu) - 2][0][0];
        goto qgcqeawyaymwqmyu;
        sqeosuowqqmiygoe:
        if (!(is_string($keccaugmemegoimu) && $keccaugmemegoimu != '')) {
            goto aumowykksoissaee;
        }
        goto oukamomweoyacmyy;
        gykgossysqcskces:
        qqioismeqoaquugc:
        goto oeiacaimywgymucg;
        mmiuwggkkoukmcii:
        
        foreach ($coamwgceiiaocqmi as $swaukaagekiououo) {
            goto swwewqamyieuaeyo;
            eiqwgagequiueqqu:
            ymsggkuocaouwqeg:
            goto mkkkugwkseusuoys;
            sysyossykggwkgim:
            $this->ekcqeousicimaeww($swaukaagekiououo);
            goto eaacgaouamsuwkga;
            eaacgaouamsuwkga:
            goto qqioismeqoaquugc;
            goto cyygmmqaimqqikya;
            cyygmmqaimqqikya:
            myesgqoumasukcam:
            goto eiqwgagequiueqqu;
            swwewqamyieuaeyo:
            if (!$this->rkacqeomakmygemu($swaukaagekiououo)) {
                goto myesgqoumasukcam;
            }
            goto sysyossykggwkgim;
            mkkkugwkseusuoys:
        }
        goto gykgossysqcskces;
        myioiyiacgwyqgka:
        try {
            goto kiyaqowgamikyywa;
            qogqquussuskqcws:
            $keccaugmemegoimu = $this->qemyqseaomicaacs($keccaugmemegoimu);
            goto qeqecusgmismyekk;
            uqckucscguaykcqq:
            $keccaugmemegoimu = $this->get("\57\163\151\156\x67\x6c\x65", $qiouiwasaauyaaue);
            goto qogqquussuskqcws;
            kiyaqowgamikyywa:
            $this->ueqoossgegqyosem(["\x73\154" => $egsumesakcaaukem, "\x74\x6c" => $ccamueccusigaaio, "\161" => $cmwygeyygwqaemaq], true);
            goto uqckucscguaykcqq;
            qeqecusgmismyekk:
        } catch (Exception $wgaoewqkwgomoaai) {
            $keccaugmemegoimu = $cmwygeyygwqaemaq;
        }
        goto sqeosuowqqmiygoe;
        qqssuiecukiyiemg:
        qeaqweiacsqaekao:
        goto aseowoeeewyquqcq;
        qgcqeawyaymwqmyu:
        ksgmewmmokmawgcs:
        goto uasiwuwoekkugeoo;
        qkgwsqyiqqyyqkuk:
        if ($ccamueccusigaaio === $egsumesakcaaukem) {
            goto gmuemckgkssugeao;
        }
        goto myioiyiacgwyqgka;
        ymsuaaycogmcakuc:
        $keccaugmemegoimu = $cmwygeyygwqaemaq;
        goto qokuacmaaweiawei;
        mgcsosaagcyukwsk:
        gmuemckgkssugeao:
        goto ymsuaaycogmcakuc;
        qagceekoguwswkym:
        
        if (!(isset($keccaugmemegoimu[0]) && $keccaugmemegoimu[0])) {
            goto qeaqweiacsqaekao;
        }
        goto womemmoiqkyuyygi;
        iqeqsgmquuaakqas:
        if (!$cmwygeyygwqaemaq) {
            goto oamyuqkoaokkoakc;
        }
        goto qkgwsqyiqqyyqkuk;
        eyyqesscicaiisos:
        return $keccaugmemegoimu;
        goto qoucwoamyowaoyms;
        womemmoiqkyuyygi:
        $coamwgceiiaocqmi = [];
        goto usiagamiyyiciywo;
        owosugyaauewwmak:
        $keccaugmemegoimu = $cmwygeyygwqaemaq;
        goto iqeqsgmquuaakqas;
        qcceiumauoumwkas:
        foreach ($keccaugmemegoimu as $igqsaukqcqscimok) {
            goto ogwukogyomoywaus;
            gkwscmymwmeaqqwu:
            oesiikeuecwqyacc:
            goto qeawowmmogmaiwiy;
            qeawowmmogmaiwiy:
            amakaqaagmewkmcq:
            goto cucwqoikogogyiae;
            yeiggwkgkoeucuiw:
            $coamwgceiiaocqmi[] = $igqsaukqcqscimok;
            goto gkwscmymwmeaqqwu;
            ogwukogyomoywaus:
            if (!is_string($igqsaukqcqscimok)) {
                goto oesiikeuecwqyacc;
            }
            goto yeiggwkgkoeucuiw;
            cucwqoikogogyiae:
        }
        goto qqguqmkumwouusqg;
        oukamomweoyacmyy:
        $keccaugmemegoimu = [$keccaugmemegoimu];
        goto sqqgewuqsikkeoqc;
        qokuwssowkeimwio:
        if (is_array($keccaugmemegoimu[0])) {
            goto mkowswyuyusgiwys;
        }
        goto eqgkmgqumukyyuyg;
        gggagaqgieumsous:
        qmcqkyugmgcsqusu:
        goto kwqcqueyukysmuia;
        yucwgauyiuemgkoe:
        
        if (!isset($mguwwsqkwwekgegu[count($keccaugmemegoimu) - 2][0][0])) {
            goto ksgmewmmokmawgcs;
        }
        goto iueewwccugsweuau;
        cukaykgmayuaoeau:
        oamyuqkoaokkoakc:
        goto eyyqesscicaiisos;
        eqgkmgqumukyyuyg:
        $keccaugmemegoimu = (string) $keccaugmemegoimu[0];
        goto wkokskegkswkoswi;
        uasiwuwoekkugeoo:
        
        $this->ekcqeousicimaeww(null);
        goto mmiuwggkkoukmcii;
        qqguqmkumwouusqg:
        lowyoqyqsskqwkoc:
        goto memaegceciwcsuoe;
        qokuacmaaweiawei:
        qkacaucsuuqmwssw:
        goto cukaykgmayuaoeau;
        memaegceciwcsuoe:
        aewqkyaucyssiaay:
        goto yucwgauyiuemgkoe;
        qoucwoamyowaoyms:
    }
    
    public function qemyqseaomicaacs(?ResponseInterface $keccaugmemegoimu)
    {
        goto ugwaeuogggmsckkc;
        uokugmckkqqmacsk:
        $oouuuwawmuaayiku = preg_replace(array_keys(self::RESULT_REGEX), array_values(self::RESULT_REGEX), $kuukgsmqkagwaciu);
        goto iyuewqwuauaqesgw;
        ckkcsqmieacuiwws:
        asqeeswqiqkmeuqu:
        goto geioaoiakaaskmiq;
        guqiucweqcwwokmq:
        throw new UnexpectedValueException(__("\x44\141\x74\x61\40\143\x61\x6e\x6e\x6f\164\x20\x62\x65\x20\144\x65\143\x6f\x64\x65\x64\x20\157\x72\x20\151\164\40\x69\163\x20\144\x65\145\160\x65\162\x20\x74\x68\x61\156\40\x74\150\145\40\x72\145\143\165\162\x73\151\157\156\x20\154\x69\155\x69\164", PR__CMN__FOUNDATION));
        goto ckkcsqmieacuiwws;
        geioaoiakaaskmiq:
        return $kuukgsmqkagwaciu;
        goto esmysgwsqekkgyos;
        ugwaeuogggmsckkc:
        $kuukgsmqkagwaciu = $keccaugmemegoimu->wesecsykkuakgyec();
        goto uokugmckkqqmacsk;
        iyuewqwuauaqesgw:
        
        if (!(($kuukgsmqkagwaciu = json_decode($oouuuwawmuaayiku, true)) === null)) {
            goto asqeeswqiqkmeuqu;
        }
        goto guqiucweqcwwokmq;
        esmysgwsqekkgyos:
    }
    
    public function sygeeqgwywmygsyu() : ?GeneratorInterface
    {
        return $this->token;
    }
    
    public function eksymsucwkowwise() : ?string
    {
        return $this->lastDetectedSource;
    }
    
    private function rkacqeomakmygemu(string $aamkqmkgsaqmcuao) : bool
    {
        return (bool) preg_match("\x2f\136\50\133\141\x2d\x7a\135\x7b\62\x7d\x29\50\x2d\133\101\x2d\x5a\x5d\173\x32\175\51\x3f\x24\x2f", $aamkqmkgsaqmcuao);
    }
    
    public function xowwwqwgumcsaaqc(&$xeciwimgioieayek, &$qiouiwasaauyaaue, &$qgciuiagkkguykgs)
    {
        goto iygqiwugsgasmmei;
        myeegekumqiuqyky:
        qeyioyeeqomywygg:
        goto yucywyomwoymeaoo;
        iusakgweowcmymgq:
        $this->ksiyskmggywgsayu("\164\153", $this->sygeeqgwywmygsyu()->ysyiouymigoigsma($qqmmggwcsmymegca), true);
        goto myeegekumqiuqyky;
        yucywyomwoymeaoo:
        parent::xowwwqwgumcsaaqc($xeciwimgioieayek, $qiouiwasaauyaaue, $qgciuiagkkguykgs);
        goto ugoqickwqkmmuoea;
        iygqiwugsgasmmei:
        $qqmmggwcsmymegca = ManipulateArray::get($this->ksqekagyyameaceq(), "\x71");
        goto qowkkywgauqwcaye;
        qowkkywgauqwcaye:
        if (!$qqmmggwcsmymegca) {
            goto qeyioyeeqomywygg;
        }
        goto iusakgweowcmymgq;
        ugoqickwqkmmuoea:
    }
    
    public function ekcqeousicimaeww(?string $gesecasgkkioeega) : self
    {
        $this->lastDetectedSource = $gesecasgkkioeega;
        return $this;
    }
}
