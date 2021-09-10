<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b1e8aa0c03             |
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
    const RESULT_REGEX = ["\x2f\54\53\x2f" => "\54", "\x2f\134\x5b\54\x2f" => "\133"];
    
    protected ?string $lastDetectedSource = null;
    
    protected ?GeneratorInterface $token = null;
    public function __construct()
    {
        goto uoqocqgeokeqiuay;
        ukquewooeyquymyg:
        $this->ueqoossgegqyosem([
            "\143\154\151\145\x6e\164" => "\x67\164\x78",
            
            "\x68\154" => "\x65\156",
            "\144\x74" => ["\x74", "\142\x64", "\141\x74", "\145\x78", "\x6c\x64", "\x6d\x64", "\x71\x63\x61", "\162\x77", "\x72\x6d", "\x73\163"],
            "\x73\x6c" => null,
            
            "\x74\154" => null,
            
            "\x71" => null,
            
            "\x69\145" => "\x55\x54\106\55\x38",
            
            "\157\145" => "\x55\x54\106\55\70",
            
            "\155\x75\x6c\x74\151\162\145\x73" => 1,
            "\x6f\164\146" => 0,
            "\x70\143" => 1,
            "\164\x72\163" => 1,
            "\x73\x73\145\x6c" => 0,
            "\164\x73\x65\x6c" => 0,
            "\153\143" => 1,
            "\x74\x6b" => null,
        ]);
        goto aamewgauekskkmqy;
        wauuckiwcmyacuma:
        $this->domain = "\150\164\x74\160\163\72\57\57\x74\x72\x61\156\163\154\141\164\x65\56\147\157\157\x67\x6c\145\56\143\x6f\x6d\57\x74\162\x61\x6e\x73\154\141\164\x65\x5f\x61";
        goto ukquewooeyquymyg;
        aamewgauekskkmqy:
        parent::__construct();
        goto mqamoqcwieeeaogq;
        uoqocqgeokeqiuay:
        $this->token = new Generator();
        goto wauuckiwcmyacuma;
        mqamoqcwieeeaogq:
    }
    public function kgquecmsgcouyaya()
    {
        $this->cecaguuoecmccuse($this->ygyygikyocoymgaw("\141\160\151\x5f\164\x72\141\156\163\154\x61\x74\x65"), [$this, "\164\x72\141\x6e\x73\154\x61\164\x65"], 10, 4);
        parent::kgquecmsgcouyaya();
    }
    
    public function translate(string $cmwygeyygwqaemaq = '', string $ccamueccusigaaio = "\146\141", string $egsumesakcaaukem = "\145\156", array $qiouiwasaauyaaue = [])
    {
        goto gmuemckgkssugeao;
        gykgossysqcskces:
        $keccaugmemegoimu = (string) $keccaugmemegoimu[0];
        goto oeiacaimywgymucg;
        oeiacaimywgymucg:
        goto eiqwgagequiueqqu;
        goto qokuwssowkeimwio;
        ymsuaaycogmcakuc:
        return $keccaugmemegoimu;
        goto qokuacmaaweiawei;
        oukamomweoyacmyy:
        $coamwgceiiaocqmi = [];
        goto sqqgewuqsikkeoqc;
        iueewwccugsweuau:
        
        foreach ($coamwgceiiaocqmi as $swaukaagekiououo) {
            goto qqioismeqoaquugc;
            myesgqoumasukcam:
            goto cucwqoikogogyiae;
            goto swwewqamyieuaeyo;
            qqioismeqoaquugc:
            if (!$this->rkacqeomakmygemu($swaukaagekiououo)) {
                goto ksgmewmmokmawgcs;
            }
            goto ymsggkuocaouwqeg;
            sysyossykggwkgim:
            aewqkyaucyssiaay:
            goto eaacgaouamsuwkga;
            ymsggkuocaouwqeg:
            $this->ekcqeousicimaeww($swaukaagekiououo);
            goto myesgqoumasukcam;
            swwewqamyieuaeyo:
            ksgmewmmokmawgcs:
            goto sysyossykggwkgim;
            eaacgaouamsuwkga:
        }
        goto qgcqeawyaymwqmyu;
        womemmoiqkyuyygi:
        qogqquussuskqcws:
        goto usiagamiyyiciywo;
        owosugyaauewwmak:
        try {
            goto aiiugysmmiyeweqw;
            coycukegioumceac:
            $keccaugmemegoimu = $this->get("\57\x73\x69\x6e\147\154\x65", $qiouiwasaauyaaue);
            goto dauumiwwoaomeeiq;
            dauumiwwoaomeeiq:
            $keccaugmemegoimu = $this->qemyqseaomicaacs($keccaugmemegoimu);
            goto kiyaqowgamikyywa;
            aiiugysmmiyeweqw:
            $this->ueqoossgegqyosem(["\163\154" => $egsumesakcaaukem, "\164\x6c" => $ccamueccusigaaio, "\161" => $cmwygeyygwqaemaq], true);
            goto coycukegioumceac;
            kiyaqowgamikyywa:
        } catch (Exception $wgaoewqkwgomoaai) {
            $keccaugmemegoimu = $cmwygeyygwqaemaq;
        }
        goto iqeqsgmquuaakqas;
        iqeqsgmquuaakqas:
        if (!(is_string($keccaugmemegoimu) && $keccaugmemegoimu != '')) {
            goto uqckucscguaykcqq;
        }
        goto qkgwsqyiqqyyqkuk;
        wkokskegkswkoswi:
        eiqwgagequiueqqu:
        goto omesscwqssieckec;
        gggagaqgieumsous:
        goto eoikcysgayayyaik;
        goto kwqcqueyukysmuia;
        qkacaucsuuqmwssw:
        if (!$cmwygeyygwqaemaq) {
            goto qeaqweiacsqaekao;
        }
        goto oamyuqkoaokkoakc;
        sqqgewuqsikkeoqc:
        if (is_string($keccaugmemegoimu)) {
            goto gkwscmymwmeaqqwu;
        }
        goto qagceekoguwswkym;
        amugscyksemawyue:
        mkowswyuyusgiwys:
        goto gggagaqgieumsous;
        sqeosuowqqmiygoe:
        
        if (!(isset($keccaugmemegoimu[0]) && $keccaugmemegoimu[0])) {
            goto mkowswyuyusgiwys;
        }
        goto oukamomweoyacmyy;
        eqgkmgqumukyyuyg:
        $keccaugmemegoimu = (string) array_reduce($keccaugmemegoimu[0], function ($ouameqkugmqkussm, $igqsaukqcqscimok) {
            $ouameqkugmqkussm .= $igqsaukqcqscimok[0];
            return $ouameqkugmqkussm;
        });
        goto wkokskegkswkoswi;
        qcceiumauoumwkas:
        
        if (!isset($mguwwsqkwwekgegu[count($keccaugmemegoimu) - 2][0][0])) {
            goto qeawowmmogmaiwiy;
        }
        goto qqguqmkumwouusqg;
        myioiyiacgwyqgka:
        uqckucscguaykcqq:
        goto sqeosuowqqmiygoe;
        qagceekoguwswkym:
        foreach ($keccaugmemegoimu as $igqsaukqcqscimok) {
            goto lowyoqyqsskqwkoc;
            lowyoqyqsskqwkoc:
            if (!is_string($igqsaukqcqscimok)) {
                goto aumowykksoissaee;
            }
            goto amakaqaagmewkmcq;
            oesiikeuecwqyacc:
            aumowykksoissaee:
            goto ogwukogyomoywaus;
            amakaqaagmewkmcq:
            $coamwgceiiaocqmi[] = $igqsaukqcqscimok;
            goto oesiikeuecwqyacc;
            ogwukogyomoywaus:
            qeqecusgmismyekk:
            goto yeiggwkgkoeucuiw;
            yeiggwkgkoeucuiw:
        }
        goto womemmoiqkyuyygi;
        omesscwqssieckec:
        mkkkugwkseusuoys:
        goto amugscyksemawyue;
        qqguqmkumwouusqg:
        $coamwgceiiaocqmi[] = $keccaugmemegoimu[count($keccaugmemegoimu) - 2][0][0];
        goto memaegceciwcsuoe;
        oamyuqkoaokkoakc:
        if ($ccamueccusigaaio === $egsumesakcaaukem) {
            goto qmcqkyugmgcsqusu;
        }
        goto owosugyaauewwmak;
        aseowoeeewyquqcq:
        eoikcysgayayyaik:
        goto mgcsosaagcyukwsk;
        uasiwuwoekkugeoo:
        if (is_string($keccaugmemegoimu)) {
            goto mkkkugwkseusuoys;
        }
        goto mmiuwggkkoukmcii;
        kwqcqueyukysmuia:
        qmcqkyugmgcsqusu:
        goto qqssuiecukiyiemg;
        qqssuiecukiyiemg:
        $keccaugmemegoimu = $cmwygeyygwqaemaq;
        goto aseowoeeewyquqcq;
        qgcqeawyaymwqmyu:
        cucwqoikogogyiae:
        goto uasiwuwoekkugeoo;
        usiagamiyyiciywo:
        gkwscmymwmeaqqwu:
        goto qcceiumauoumwkas;
        qkgwsqyiqqyyqkuk:
        $keccaugmemegoimu = [$keccaugmemegoimu];
        goto myioiyiacgwyqgka;
        memaegceciwcsuoe:
        qeawowmmogmaiwiy:
        goto yucwgauyiuemgkoe;
        mgcsosaagcyukwsk:
        qeaqweiacsqaekao:
        goto ymsuaaycogmcakuc;
        mmiuwggkkoukmcii:
        if (is_array($keccaugmemegoimu[0])) {
            goto cyygmmqaimqqikya;
        }
        goto gykgossysqcskces;
        qokuwssowkeimwio:
        cyygmmqaimqqikya:
        goto eqgkmgqumukyyuyg;
        gmuemckgkssugeao:
        $keccaugmemegoimu = $cmwygeyygwqaemaq;
        goto qkacaucsuuqmwssw;
        yucwgauyiuemgkoe:
        
        $this->ekcqeousicimaeww(null);
        goto iueewwccugsweuau;
        qokuacmaaweiawei:
    }
    
    public function qemyqseaomicaacs(?ResponseInterface $keccaugmemegoimu)
    {
        goto eyyqesscicaiisos;
        qoucwoamyowaoyms:
        $oouuuwawmuaayiku = preg_replace(array_keys(self::RESULT_REGEX), array_values(self::RESULT_REGEX), $kuukgsmqkagwaciu);
        goto asqeeswqiqkmeuqu;
        eyyqesscicaiisos:
        $kuukgsmqkagwaciu = $keccaugmemegoimu->wesecsykkuakgyec();
        goto qoucwoamyowaoyms;
        asqeeswqiqkmeuqu:
        
        if (!(($kuukgsmqkagwaciu = json_decode($oouuuwawmuaayiku, true)) === null)) {
            goto cukaykgmayuaoeau;
        }
        goto ugwaeuogggmsckkc;
        uokugmckkqqmacsk:
        cukaykgmayuaoeau:
        goto iyuewqwuauaqesgw;
        iyuewqwuauaqesgw:
        return $kuukgsmqkagwaciu;
        goto guqiucweqcwwokmq;
        ugwaeuogggmsckkc:
        throw new UnexpectedValueException(__("\104\141\164\141\x20\143\141\156\156\x6f\x74\40\142\145\x20\x64\x65\143\x6f\x64\145\144\x20\157\x72\40\x69\x74\x20\151\x73\40\x64\145\145\160\145\x72\40\x74\x68\x61\156\40\164\150\x65\40\x72\145\143\x75\x72\x73\x69\x6f\156\x20\154\151\x6d\x69\164", PR__CMN__FOUNDATION));
        goto uokugmckkqqmacsk;
        guqiucweqcwwokmq:
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
        return (bool) preg_match("\x2f\136\x28\133\x61\55\172\x5d\173\x32\x7d\x29\x28\x2d\x5b\x41\x2d\132\x5d\173\62\x7d\51\x3f\44\57", $aamkqmkgsaqmcuao);
    }
    
    public function xowwwqwgumcsaaqc(&$xeciwimgioieayek, &$qiouiwasaauyaaue, &$qgciuiagkkguykgs)
    {
        goto geioaoiakaaskmiq;
        geioaoiakaaskmiq:
        $qqmmggwcsmymegca = ManipulateArray::get($this->ksqekagyyameaceq(), "\161");
        goto esmysgwsqekkgyos;
        qowkkywgauqwcaye:
        parent::xowwwqwgumcsaaqc($xeciwimgioieayek, $qiouiwasaauyaaue, $qgciuiagkkguykgs);
        goto iusakgweowcmymgq;
        iygqiwugsgasmmei:
        ckkcsqmieacuiwws:
        goto qowkkywgauqwcaye;
        qeyioyeeqomywygg:
        $this->ksiyskmggywgsayu("\164\x6b", $this->sygeeqgwywmygsyu()->ysyiouymigoigsma($qqmmggwcsmymegca), true);
        goto iygqiwugsgasmmei;
        esmysgwsqekkgyos:
        if (!$qqmmggwcsmymegca) {
            goto ckkcsqmieacuiwws;
        }
        goto qeyioyeeqomywygg;
        iusakgweowcmymgq:
    }
    
    public function ekcqeousicimaeww(?string $gesecasgkkioeega) : self
    {
        $this->lastDetectedSource = $gesecasgkkioeega;
        return $this;
    }
}
