<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b499786a1b             |
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
    const RESULT_REGEX = ["\x2f\54\53\x2f" => "\x2c", "\57\x5c\x5b\x2c\57" => "\133"];
    
    protected ?string $lastDetectedSource = null;
    
    protected ?GeneratorInterface $token = null;
    public function __construct()
    {
        goto mgcsosaagcyukwsk;
        qokuacmaaweiawei:
        $this->ueqoossgegqyosem([
            "\x63\x6c\151\x65\156\164" => "\147\164\170",
            
            "\x68\x6c" => "\145\156",
            "\144\164" => ["\164", "\142\144", "\x61\164", "\x65\170", "\154\x64", "\x6d\144", "\161\x63\141", "\x72\x77", "\162\x6d", "\163\x73"],
            "\163\154" => null,
            
            "\x74\154" => null,
            
            "\x71" => null,
            
            "\x69\145" => "\x55\124\106\55\70",
            
            "\x6f\x65" => "\x55\x54\106\x2d\x38",
            
            "\155\165\x6c\164\151\162\145\163" => 1,
            "\157\x74\146" => 0,
            "\160\x63" => 1,
            "\x74\x72\163" => 1,
            "\x73\x73\145\x6c" => 0,
            "\164\163\145\x6c" => 0,
            "\153\143" => 1,
            "\164\153" => null,
        ]);
        goto cukaykgmayuaoeau;
        cukaykgmayuaoeau:
        parent::__construct();
        goto eyyqesscicaiisos;
        mgcsosaagcyukwsk:
        $this->token = new Generator();
        goto ymsuaaycogmcakuc;
        ymsuaaycogmcakuc:
        $this->domain = "\150\x74\164\160\163\72\x2f\57\164\162\141\156\x73\154\x61\164\x65\x2e\147\157\157\x67\x6c\x65\56\x63\157\155\57\164\162\x61\x6e\x73\x6c\141\x74\145\137\x61";
        goto qokuacmaaweiawei;
        eyyqesscicaiisos:
    }
    public function kgquecmsgcouyaya()
    {
        $this->cecaguuoecmccuse($this->ygyygikyocoymgaw("\141\160\151\137\x74\x72\141\156\x73\154\x61\x74\145"), [$this, "\x74\x72\141\156\163\x6c\x61\x74\145"], 10, 4);
        parent::kgquecmsgcouyaya();
    }
    
    public function translate(string $cmwygeyygwqaemaq = '', string $ccamueccusigaaio = "\x66\141", string $egsumesakcaaukem = "\x65\156", array $qiouiwasaauyaaue = [])
    {
        goto aqeuykaemmwcmkag;
        ooywaqmkyimkwigy:
        
        if (!isset($mguwwsqkwwekgegu[count($keccaugmemegoimu) - 2][0][0])) {
            goto yucywyomwoymeaoo;
        }
        goto famqscccoawysowy;
        ocqukkewagukgwcm:
        aaysmqyimgwwmswc:
        goto wmimmucwgosqieee;
        cgkkewwuoaesyckq:
        if (!$cmwygeyygwqaemaq) {
            goto aaysmqyimgwwmswc;
        }
        goto ugcqckmoiguqaqyg;
        cisoskkacswwwgme:
        ugoqickwqkmmuoea:
        goto wiqwqecsuqsqisgm;
        tosaeugqweaqkmkw:
        $coamwgceiiaocqmi = [];
        goto cmaiwqeugyoggqmu;
        qwkyqiemkeyeesow:
        $keccaugmemegoimu = (string) array_reduce($keccaugmemegoimu[0], function ($ouameqkugmqkussm, $igqsaukqcqscimok) {
            $ouameqkugmqkussm .= $igqsaukqcqscimok[0];
            return $ouameqkugmqkussm;
        });
        goto guiasequyoqeqwiw;
        wauycggqcisyequc:
        if (is_array($keccaugmemegoimu[0])) {
            goto cugkwkcgcwamkeek;
        }
        goto qcggsaqoywyumieq;
        cekuuoakmewkciem:
        foreach ($keccaugmemegoimu as $igqsaukqcqscimok) {
            goto esmysgwsqekkgyos;
            qeyioyeeqomywygg:
            $coamwgceiiaocqmi[] = $igqsaukqcqscimok;
            goto iygqiwugsgasmmei;
            esmysgwsqekkgyos:
            if (!is_string($igqsaukqcqscimok)) {
                goto geioaoiakaaskmiq;
            }
            goto qeyioyeeqomywygg;
            iygqiwugsgasmmei:
            geioaoiakaaskmiq:
            goto qowkkywgauqwcaye;
            qowkkywgauqwcaye:
            ckkcsqmieacuiwws:
            goto iusakgweowcmymgq;
            iusakgweowcmymgq:
        }
        goto cgikkekmwssakwme;
        wmimmucwgosqieee:
        return $keccaugmemegoimu;
        goto giacoeeosqmawgwy;
        aqeuykaemmwcmkag:
        $keccaugmemegoimu = $cmwygeyygwqaemaq;
        goto cgkkewwuoaesyckq;
        wiauusmyowuykyis:
        $keccaugmemegoimu = $cmwygeyygwqaemaq;
        goto akauggwssmsooago;
        ogoyusqumokucecg:
        iummmcuamoigqyye:
        goto qegwqosqeiaywqio;
        famqscccoawysowy:
        $coamwgceiiaocqmi[] = $keccaugmemegoimu[count($keccaugmemegoimu) - 2][0][0];
        goto gecemgoaygoigwkq;
        iokigyiokgscmmyk:
        goto wkwqooeoiqqskigc;
        goto usiqwuciygicyqsi;
        guiasequyoqeqwiw:
        wkwqooeoiqqskigc:
        goto cwmouqwqmkioeqiq;
        yywwooiikmgqogsw:
        try {
            goto qoucwoamyowaoyms;
            qoucwoamyowaoyms:
            $this->ueqoossgegqyosem(["\163\154" => $egsumesakcaaukem, "\164\x6c" => $ccamueccusigaaio, "\x71" => $cmwygeyygwqaemaq], true);
            goto asqeeswqiqkmeuqu;
            ugwaeuogggmsckkc:
            $keccaugmemegoimu = $this->qemyqseaomicaacs($keccaugmemegoimu);
            goto uokugmckkqqmacsk;
            asqeeswqiqkmeuqu:
            $keccaugmemegoimu = $this->get("\57\x73\151\x6e\x67\154\145", $qiouiwasaauyaaue);
            goto ugwaeuogggmsckkc;
            uokugmckkqqmacsk:
        } catch (Exception $wgaoewqkwgomoaai) {
            $keccaugmemegoimu = $cmwygeyygwqaemaq;
        }
        goto geowyegsewcqeyeg;
        usiqwuciygicyqsi:
        cugkwkcgcwamkeek:
        goto qwkyqiemkeyeesow;
        akauggwssmsooago:
        mkwssqgmseeueoei:
        goto ocqukkewagukgwcm;
        cmaiwqeugyoggqmu:
        if (is_string($keccaugmemegoimu)) {
            goto myeegekumqiuqyky;
        }
        goto cekuuoakmewkciem;
        qegwqosqeiaywqio:
        goto mkwssqgmseeueoei;
        goto yagcgciumusoisuq;
        gecemgoaygoigwkq:
        yucywyomwoymeaoo:
        goto miyykescgesaauak;
        keokimwocecqqykq:
        $keccaugmemegoimu = [$keccaugmemegoimu];
        goto wkyowwwemoiseoke;
        uwcocoiugsyyigak:
        
        foreach ($coamwgceiiaocqmi as $swaukaagekiououo) {
            goto momssyeueaumcmii;
            momssyeueaumcmii:
            if (!$this->rkacqeomakmygemu($swaukaagekiououo)) {
                goto qsiqiykmmeooamai;
            }
            goto siimgcqgmymwoauo;
            siimgcqgmymwoauo:
            $this->ekcqeousicimaeww($swaukaagekiououo);
            goto mawswmiuewqagcsa;
            mawswmiuewqagcsa:
            goto ugoqickwqkmmuoea;
            goto qmoiyuckwyakswoy;
            qmoiyuckwyakswoy:
            qsiqiykmmeooamai:
            goto owqgqgysciogcuwk;
            owqgqgysciogcuwk:
            ewyyeyokouyicmom:
            goto wyuukkaqwkysasgk;
            wyuukkaqwkysasgk:
        }
        goto cisoskkacswwwgme;
        qcggsaqoywyumieq:
        $keccaugmemegoimu = (string) $keccaugmemegoimu[0];
        goto iokigyiokgscmmyk;
        cwmouqwqmkioeqiq:
        ekwqsmwucymewqco:
        goto ogoyusqumokucecg;
        ooeisqqwmqwgaaky:
        
        if (!(isset($keccaugmemegoimu[0]) && $keccaugmemegoimu[0])) {
            goto iummmcuamoigqyye;
        }
        goto tosaeugqweaqkmkw;
        qwmaquiuiegowwqu:
        myeegekumqiuqyky:
        goto ooywaqmkyimkwigy;
        yagcgciumusoisuq:
        iimckuqgqcmmaaus:
        goto wiauusmyowuykyis;
        wiqwqecsuqsqisgm:
        if (is_string($keccaugmemegoimu)) {
            goto ekwqsmwucymewqco;
        }
        goto wauycggqcisyequc;
        wkyowwwemoiseoke:
        iyuewqwuauaqesgw:
        goto ooeisqqwmqwgaaky;
        geowyegsewcqeyeg:
        if (!(is_string($keccaugmemegoimu) && $keccaugmemegoimu != '')) {
            goto iyuewqwuauaqesgw;
        }
        goto keokimwocecqqykq;
        cgikkekmwssakwme:
        guqiucweqcwwokmq:
        goto qwmaquiuiegowwqu;
        miyykescgesaauak:
        
        $this->ekcqeousicimaeww(null);
        goto uwcocoiugsyyigak;
        ugcqckmoiguqaqyg:
        if ($ccamueccusigaaio === $egsumesakcaaukem) {
            goto iimckuqgqcmmaaus;
        }
        goto yywwooiikmgqogsw;
        giacoeeosqmawgwy:
    }
    
    public function qemyqseaomicaacs(?ResponseInterface $keccaugmemegoimu)
    {
        goto zkwcmqmekgeqwemw;
        woyiagsemicyskkg:
        throw new UnexpectedValueException(__("\104\x61\x74\141\x20\x63\141\x6e\x6e\157\164\40\142\145\x20\x64\145\x63\x6f\144\x65\x64\x20\157\x72\40\151\164\40\151\x73\40\x64\145\x65\160\145\x72\40\164\150\x61\x6e\x20\164\x68\x65\40\162\x65\143\x75\162\x73\151\157\x6e\40\x6c\151\x6d\151\164", PR__CMN__FOUNDATION));
        goto wewusgmimaqoasim;
        oeykoakwmouewksg:
        $oouuuwawmuaayiku = preg_replace(array_keys(self::RESULT_REGEX), array_values(self::RESULT_REGEX), $kuukgsmqkagwaciu);
        goto wqayyeskagucmeis;
        wewusgmimaqoasim:
        aymekuseakseoeke:
        goto cegwmkmcgiuyegci;
        wqayyeskagucmeis:
        
        if (!(($kuukgsmqkagwaciu = json_decode($oouuuwawmuaayiku, true)) === null)) {
            goto aymekuseakseoeke;
        }
        goto woyiagsemicyskkg;
        zkwcmqmekgeqwemw:
        $kuukgsmqkagwaciu = $keccaugmemegoimu->wesecsykkuakgyec();
        goto oeykoakwmouewksg;
        cegwmkmcgiuyegci:
        return $kuukgsmqkagwaciu;
        goto swususomkmoeegsg;
        swususomkmoeegsg:
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
        return (bool) preg_match("\57\136\x28\x5b\x61\55\x7a\x5d\173\62\175\x29\x28\x2d\133\x41\x2d\x5a\135\173\x32\x7d\x29\77\44\x2f", $aamkqmkgsaqmcuao);
    }
    
    public function xowwwqwgumcsaaqc(&$xeciwimgioieayek, &$qiouiwasaauyaaue, &$qgciuiagkkguykgs)
    {
        goto aksgswgmycoikuoo;
        aksgswgmycoikuoo:
        $qqmmggwcsmymegca = ManipulateArray::get($this->ksqekagyyameaceq(), "\161");
        goto gimcguskeecmoags;
        yeiqiuuwaiysiuom:
        saigkiiwwkkusicm:
        goto mmkycoggqqcyiugc;
        mmkycoggqqcyiugc:
        parent::xowwwqwgumcsaaqc($xeciwimgioieayek, $qiouiwasaauyaaue, $qgciuiagkkguykgs);
        goto uaswgieioykugsww;
        gimcguskeecmoags:
        if (!$qqmmggwcsmymegca) {
            goto saigkiiwwkkusicm;
        }
        goto oiiwcwuccecwaiaa;
        oiiwcwuccecwaiaa:
        $this->ksiyskmggywgsayu("\x74\153", $this->sygeeqgwywmygsyu()->ysyiouymigoigsma($qqmmggwcsmymegca), true);
        goto yeiqiuuwaiysiuom;
        uaswgieioykugsww:
    }
    
    public function ekcqeousicimaeww(?string $gesecasgkkioeega) : self
    {
        $this->lastDetectedSource = $gesecasgkkioeega;
        return $this;
    }
}
