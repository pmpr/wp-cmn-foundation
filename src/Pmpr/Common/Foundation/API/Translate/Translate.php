<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b2e4befc8c             |
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
    const RESULT_REGEX = ["\57\54\x2b\57" => "\x2c", "\x2f\x5c\133\54\57" => "\x5b"];
    
    protected ?string $lastDetectedSource = null;
    
    protected ?GeneratorInterface $token = null;
    public function __construct()
    {
        goto aamewgauekskkmqy;
        coycukegioumceac:
        parent::__construct();
        goto dauumiwwoaomeeiq;
        aamewgauekskkmqy:
        $this->token = new Generator();
        goto mqamoqcwieeeaogq;
        mqamoqcwieeeaogq:
        $this->domain = "\150\x74\164\x70\163\72\x2f\x2f\x74\162\141\x6e\163\x6c\x61\164\x65\x2e\x67\157\x6f\x67\154\x65\56\143\157\155\57\164\162\x61\156\163\x6c\141\x74\145\x5f\x61";
        goto aiiugysmmiyeweqw;
        aiiugysmmiyeweqw:
        $this->ueqoossgegqyosem([
            "\x63\154\151\145\x6e\164" => "\147\164\x78",
            
            "\150\154" => "\145\x6e",
            "\x64\164" => ["\164", "\142\x64", "\141\164", "\x65\x78", "\154\144", "\x6d\144", "\161\x63\141", "\x72\x77", "\162\155", "\x73\x73"],
            "\x73\x6c" => null,
            
            "\164\154" => null,
            
            "\161" => null,
            
            "\x69\x65" => "\x55\124\106\55\x38",
            
            "\x6f\x65" => "\125\124\106\x2d\70",
            
            "\x6d\165\154\164\x69\162\x65\x73" => 1,
            "\157\164\x66" => 0,
            "\x70\x63" => 1,
            "\164\162\163" => 1,
            "\163\163\145\x6c" => 0,
            "\x74\x73\145\x6c" => 0,
            "\x6b\x63" => 1,
            "\164\153" => null,
        ]);
        goto coycukegioumceac;
        dauumiwwoaomeeiq:
    }
    public function kgquecmsgcouyaya()
    {
        $this->cecaguuoecmccuse($this->ygyygikyocoymgaw("\x61\x70\151\137\x74\162\141\156\x73\x6c\x61\164\x65"), [$this, "\x74\162\x61\x6e\163\154\x61\164\145"], 10, 4);
        parent::kgquecmsgcouyaya();
    }
    
    public function translate(string $cmwygeyygwqaemaq = '', string $ccamueccusigaaio = "\x66\141", string $egsumesakcaaukem = "\x65\156", array $qiouiwasaauyaaue = [])
    {
        goto owosugyaauewwmak;
        aseowoeeewyquqcq:
        goto qkacaucsuuqmwssw;
        goto mgcsosaagcyukwsk;
        eqgkmgqumukyyuyg:
        $keccaugmemegoimu = (string) $keccaugmemegoimu[0];
        goto wkokskegkswkoswi;
        gykgossysqcskces:
        qqioismeqoaquugc:
        goto oeiacaimywgymucg;
        mmiuwggkkoukmcii:
        
        foreach ($coamwgceiiaocqmi as $swaukaagekiououo) {
            goto swwewqamyieuaeyo;
            swwewqamyieuaeyo:
            if (!$this->rkacqeomakmygemu($swaukaagekiououo)) {
                goto myesgqoumasukcam;
            }
            goto sysyossykggwkgim;
            sysyossykggwkgim:
            $this->ekcqeousicimaeww($swaukaagekiououo);
            goto eaacgaouamsuwkga;
            eaacgaouamsuwkga:
            goto qqioismeqoaquugc;
            goto cyygmmqaimqqikya;
            eiqwgagequiueqqu:
            ymsggkuocaouwqeg:
            goto mkkkugwkseusuoys;
            cyygmmqaimqqikya:
            myesgqoumasukcam:
            goto eiqwgagequiueqqu;
            mkkkugwkseusuoys:
        }
        goto gykgossysqcskces;
        qqssuiecukiyiemg:
        qeaqweiacsqaekao:
        goto aseowoeeewyquqcq;
        wkokskegkswkoswi:
        goto qmcqkyugmgcsqusu;
        goto omesscwqssieckec;
        qgcqeawyaymwqmyu:
        ksgmewmmokmawgcs:
        goto uasiwuwoekkugeoo;
        oeiacaimywgymucg:
        if (is_string($keccaugmemegoimu)) {
            goto eoikcysgayayyaik;
        }
        goto qokuwssowkeimwio;
        womemmoiqkyuyygi:
        $coamwgceiiaocqmi = [];
        goto usiagamiyyiciywo;
        mgcsosaagcyukwsk:
        gmuemckgkssugeao:
        goto ymsuaaycogmcakuc;
        usiagamiyyiciywo:
        if (is_string($keccaugmemegoimu)) {
            goto aewqkyaucyssiaay;
        }
        goto qcceiumauoumwkas;
        iqeqsgmquuaakqas:
        if (!$cmwygeyygwqaemaq) {
            goto oamyuqkoaokkoakc;
        }
        goto qkgwsqyiqqyyqkuk;
        qqguqmkumwouusqg:
        lowyoqyqsskqwkoc:
        goto memaegceciwcsuoe;
        uasiwuwoekkugeoo:
        
        $this->ekcqeousicimaeww(null);
        goto mmiuwggkkoukmcii;
        kwqcqueyukysmuia:
        eoikcysgayayyaik:
        goto qqssuiecukiyiemg;
        qokuwssowkeimwio:
        if (is_array($keccaugmemegoimu[0])) {
            goto mkowswyuyusgiwys;
        }
        goto eqgkmgqumukyyuyg;
        myioiyiacgwyqgka:
        try {
            goto kiyaqowgamikyywa;
            uqckucscguaykcqq:
            $keccaugmemegoimu = $this->get("\x2f\163\x69\156\x67\154\145", $qiouiwasaauyaaue);
            goto qogqquussuskqcws;
            kiyaqowgamikyywa:
            $this->ueqoossgegqyosem(["\163\x6c" => $egsumesakcaaukem, "\x74\x6c" => $ccamueccusigaaio, "\x71" => $cmwygeyygwqaemaq], true);
            goto uqckucscguaykcqq;
            qogqquussuskqcws:
            $keccaugmemegoimu = $this->qemyqseaomicaacs($keccaugmemegoimu);
            goto qeqecusgmismyekk;
            qeqecusgmismyekk:
        } catch (Exception $wgaoewqkwgomoaai) {
            $keccaugmemegoimu = $cmwygeyygwqaemaq;
        }
        goto sqeosuowqqmiygoe;
        iueewwccugsweuau:
        $coamwgceiiaocqmi[] = $keccaugmemegoimu[count($keccaugmemegoimu) - 2][0][0];
        goto qgcqeawyaymwqmyu;
        omesscwqssieckec:
        mkowswyuyusgiwys:
        goto amugscyksemawyue;
        memaegceciwcsuoe:
        aewqkyaucyssiaay:
        goto yucwgauyiuemgkoe;
        yucwgauyiuemgkoe:
        
        if (!isset($mguwwsqkwwekgegu[count($keccaugmemegoimu) - 2][0][0])) {
            goto ksgmewmmokmawgcs;
        }
        goto iueewwccugsweuau;
        owosugyaauewwmak:
        $keccaugmemegoimu = $cmwygeyygwqaemaq;
        goto iqeqsgmquuaakqas;
        eyyqesscicaiisos:
        return $keccaugmemegoimu;
        goto qoucwoamyowaoyms;
        qcceiumauoumwkas:
        foreach ($keccaugmemegoimu as $igqsaukqcqscimok) {
            goto ogwukogyomoywaus;
            ogwukogyomoywaus:
            if (!is_string($igqsaukqcqscimok)) {
                goto oesiikeuecwqyacc;
            }
            goto yeiggwkgkoeucuiw;
            gkwscmymwmeaqqwu:
            oesiikeuecwqyacc:
            goto qeawowmmogmaiwiy;
            qeawowmmogmaiwiy:
            amakaqaagmewkmcq:
            goto cucwqoikogogyiae;
            yeiggwkgkoeucuiw:
            $coamwgceiiaocqmi[] = $igqsaukqcqscimok;
            goto gkwscmymwmeaqqwu;
            cucwqoikogogyiae:
        }
        goto qqguqmkumwouusqg;
        cukaykgmayuaoeau:
        oamyuqkoaokkoakc:
        goto eyyqesscicaiisos;
        sqeosuowqqmiygoe:
        if (!(is_string($keccaugmemegoimu) && $keccaugmemegoimu != '')) {
            goto aumowykksoissaee;
        }
        goto oukamomweoyacmyy;
        gggagaqgieumsous:
        qmcqkyugmgcsqusu:
        goto kwqcqueyukysmuia;
        oukamomweoyacmyy:
        $keccaugmemegoimu = [$keccaugmemegoimu];
        goto sqqgewuqsikkeoqc;
        sqqgewuqsikkeoqc:
        aumowykksoissaee:
        goto qagceekoguwswkym;
        qagceekoguwswkym:
        
        if (!(isset($keccaugmemegoimu[0]) && $keccaugmemegoimu[0])) {
            goto qeaqweiacsqaekao;
        }
        goto womemmoiqkyuyygi;
        qkgwsqyiqqyyqkuk:
        if ($ccamueccusigaaio === $egsumesakcaaukem) {
            goto gmuemckgkssugeao;
        }
        goto myioiyiacgwyqgka;
        amugscyksemawyue:
        $keccaugmemegoimu = (string) array_reduce($keccaugmemegoimu[0], function ($ouameqkugmqkussm, $igqsaukqcqscimok) {
            $ouameqkugmqkussm .= $igqsaukqcqscimok[0];
            return $ouameqkugmqkussm;
        });
        goto gggagaqgieumsous;
        ymsuaaycogmcakuc:
        $keccaugmemegoimu = $cmwygeyygwqaemaq;
        goto qokuacmaaweiawei;
        qokuacmaaweiawei:
        qkacaucsuuqmwssw:
        goto cukaykgmayuaoeau;
        qoucwoamyowaoyms:
    }
    
    public function qemyqseaomicaacs(?ResponseInterface $keccaugmemegoimu)
    {
        goto ugwaeuogggmsckkc;
        guqiucweqcwwokmq:
        throw new UnexpectedValueException(__("\104\141\164\x61\40\143\x61\156\x6e\157\164\40\x62\x65\x20\144\x65\143\157\144\x65\x64\40\157\162\x20\x69\164\40\x69\163\40\x64\145\x65\160\x65\x72\40\164\150\x61\156\x20\164\150\x65\x20\162\145\x63\x75\162\163\x69\157\x6e\x20\154\151\155\151\164", PR__CMN__FOUNDATION));
        goto ckkcsqmieacuiwws;
        uokugmckkqqmacsk:
        $oouuuwawmuaayiku = preg_replace(array_keys(self::RESULT_REGEX), array_values(self::RESULT_REGEX), $kuukgsmqkagwaciu);
        goto iyuewqwuauaqesgw;
        ckkcsqmieacuiwws:
        asqeeswqiqkmeuqu:
        goto geioaoiakaaskmiq;
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
        return (bool) preg_match("\x2f\x5e\50\x5b\141\x2d\172\x5d\173\x32\175\x29\x28\55\133\x41\x2d\132\x5d\x7b\62\175\x29\77\44\x2f", $aamkqmkgsaqmcuao);
    }
    
    public function xowwwqwgumcsaaqc(&$xeciwimgioieayek, &$qiouiwasaauyaaue, &$qgciuiagkkguykgs)
    {
        goto iygqiwugsgasmmei;
        iygqiwugsgasmmei:
        $qqmmggwcsmymegca = ManipulateArray::get($this->ksqekagyyameaceq(), "\x71");
        goto qowkkywgauqwcaye;
        yucywyomwoymeaoo:
        parent::xowwwqwgumcsaaqc($xeciwimgioieayek, $qiouiwasaauyaaue, $qgciuiagkkguykgs);
        goto ugoqickwqkmmuoea;
        iusakgweowcmymgq:
        $this->ksiyskmggywgsayu("\x74\153", $this->sygeeqgwywmygsyu()->ysyiouymigoigsma($qqmmggwcsmymegca), true);
        goto myeegekumqiuqyky;
        qowkkywgauqwcaye:
        if (!$qqmmggwcsmymegca) {
            goto qeyioyeeqomywygg;
        }
        goto iusakgweowcmymgq;
        myeegekumqiuqyky:
        qeyioyeeqomywygg:
        goto yucywyomwoymeaoo;
        ugoqickwqkmmuoea:
    }
    
    public function ekcqeousicimaeww(?string $gesecasgkkioeega) : self
    {
        $this->lastDetectedSource = $gesecasgkkioeega;
        return $this;
    }
}
