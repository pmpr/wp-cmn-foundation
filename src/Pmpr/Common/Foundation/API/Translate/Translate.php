<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b6c65a2d22             |
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
    const RESULT_REGEX = ["\x2f\x2c\53\57" => "\54", "\57\134\133\x2c\57" => "\133"];
    
    protected ?string $lastDetectedSource = null;
    
    protected ?GeneratorInterface $token = null;
    public function __construct()
    {
        goto ymsuaaycogmcakuc;
        cukaykgmayuaoeau:
        $this->ueqoossgegqyosem([
            "\x63\x6c\151\x65\156\164" => "\x67\164\x78",
            
            "\x68\154" => "\x65\x6e",
            "\x64\x74" => ["\164", "\142\x64", "\141\164", "\x65\170", "\154\144", "\x6d\x64", "\161\x63\141", "\x72\x77", "\x72\155", "\x73\x73"],
            "\163\154" => null,
            
            "\x74\x6c" => null,
            
            "\x71" => null,
            
            "\x69\x65" => "\x55\124\106\55\x38",
            
            "\x6f\145" => "\x55\x54\x46\55\70",
            
            "\155\x75\154\164\151\x72\x65\x73" => 1,
            "\157\x74\146" => 0,
            "\160\x63" => 1,
            "\164\162\163" => 1,
            "\x73\x73\145\x6c" => 0,
            "\x74\163\145\154" => 0,
            "\153\x63" => 1,
            "\x74\x6b" => null,
        ]);
        goto eyyqesscicaiisos;
        ymsuaaycogmcakuc:
        $this->token = new Generator();
        goto qokuacmaaweiawei;
        eyyqesscicaiisos:
        parent::__construct();
        goto qoucwoamyowaoyms;
        qokuacmaaweiawei:
        $this->domain = "\150\x74\164\160\163\72\57\x2f\164\162\x61\x6e\x73\x6c\x61\x74\x65\x2e\147\157\x6f\x67\154\145\56\143\157\155\x2f\164\162\141\156\x73\x6c\141\x74\145\x5f\141";
        goto cukaykgmayuaoeau;
        qoucwoamyowaoyms:
    }
    public function kgquecmsgcouyaya()
    {
        $this->cecaguuoecmccuse($this->ygyygikyocoymgaw("\x61\x70\x69\137\x74\x72\x61\156\x73\154\141\164\145"), [$this, "\x74\162\x61\x6e\163\x6c\x61\x74\x65"], 10, 4);
        parent::kgquecmsgcouyaya();
    }
    
    public function translate(string $cmwygeyygwqaemaq = '', string $ccamueccusigaaio = "\x66\141", string $egsumesakcaaukem = "\145\x6e", array $qiouiwasaauyaaue = [])
    {
        goto cgkkewwuoaesyckq;
        qwmaquiuiegowwqu:
        ckkcsqmieacuiwws:
        goto ooywaqmkyimkwigy;
        uwcocoiugsyyigak:
        
        $this->ekcqeousicimaeww(null);
        goto cisoskkacswwwgme;
        famqscccoawysowy:
        
        if (!isset($mguwwsqkwwekgegu[count($keccaugmemegoimu) - 2][0][0])) {
            goto ugoqickwqkmmuoea;
        }
        goto gecemgoaygoigwkq;
        cekuuoakmewkciem:
        if (is_string($keccaugmemegoimu)) {
            goto yucywyomwoymeaoo;
        }
        goto cgikkekmwssakwme;
        giacoeeosqmawgwy:
        return $keccaugmemegoimu;
        goto aymekuseakseoeke;
        geowyegsewcqeyeg:
        try {
            goto asqeeswqiqkmeuqu;
            ugwaeuogggmsckkc:
            $keccaugmemegoimu = $this->get("\x2f\163\151\x6e\x67\154\x65", $qiouiwasaauyaaue);
            goto uokugmckkqqmacsk;
            asqeeswqiqkmeuqu:
            $this->ueqoossgegqyosem(["\x73\x6c" => $egsumesakcaaukem, "\x74\154" => $ccamueccusigaaio, "\x71" => $cmwygeyygwqaemaq], true);
            goto ugwaeuogggmsckkc;
            uokugmckkqqmacsk:
            $keccaugmemegoimu = $this->qemyqseaomicaacs($keccaugmemegoimu);
            goto iyuewqwuauaqesgw;
            iyuewqwuauaqesgw:
        } catch (Exception $wgaoewqkwgomoaai) {
            $keccaugmemegoimu = $cmwygeyygwqaemaq;
        }
        goto keokimwocecqqykq;
        gecemgoaygoigwkq:
        $coamwgceiiaocqmi[] = $keccaugmemegoimu[count($keccaugmemegoimu) - 2][0][0];
        goto miyykescgesaauak;
        yywwooiikmgqogsw:
        if ($ccamueccusigaaio === $egsumesakcaaukem) {
            goto mkwssqgmseeueoei;
        }
        goto geowyegsewcqeyeg;
        tosaeugqweaqkmkw:
        
        if (!(isset($keccaugmemegoimu[0]) && $keccaugmemegoimu[0])) {
            goto iimckuqgqcmmaaus;
        }
        goto cmaiwqeugyoggqmu;
        qegwqosqeiaywqio:
        iimckuqgqcmmaaus:
        goto yagcgciumusoisuq;
        yagcgciumusoisuq:
        goto aaysmqyimgwwmswc;
        goto wiauusmyowuykyis;
        wkyowwwemoiseoke:
        $keccaugmemegoimu = [$keccaugmemegoimu];
        goto ooeisqqwmqwgaaky;
        wmimmucwgosqieee:
        aqeuykaemmwcmkag:
        goto giacoeeosqmawgwy;
        keokimwocecqqykq:
        if (!(is_string($keccaugmemegoimu) && $keccaugmemegoimu != '')) {
            goto guqiucweqcwwokmq;
        }
        goto wkyowwwemoiseoke;
        akauggwssmsooago:
        $keccaugmemegoimu = $cmwygeyygwqaemaq;
        goto ocqukkewagukgwcm;
        wauycggqcisyequc:
        if (is_string($keccaugmemegoimu)) {
            goto iummmcuamoigqyye;
        }
        goto qcggsaqoywyumieq;
        cgikkekmwssakwme:
        foreach ($keccaugmemegoimu as $igqsaukqcqscimok) {
            goto qeyioyeeqomywygg;
            iygqiwugsgasmmei:
            $coamwgceiiaocqmi[] = $igqsaukqcqscimok;
            goto qowkkywgauqwcaye;
            qeyioyeeqomywygg:
            if (!is_string($igqsaukqcqscimok)) {
                goto esmysgwsqekkgyos;
            }
            goto iygqiwugsgasmmei;
            iusakgweowcmymgq:
            geioaoiakaaskmiq:
            goto myeegekumqiuqyky;
            qowkkywgauqwcaye:
            esmysgwsqekkgyos:
            goto iusakgweowcmymgq;
            myeegekumqiuqyky:
        }
        goto qwmaquiuiegowwqu;
        iokigyiokgscmmyk:
        $keccaugmemegoimu = (string) $keccaugmemegoimu[0];
        goto usiqwuciygicyqsi;
        ogoyusqumokucecg:
        iummmcuamoigqyye:
        goto qegwqosqeiaywqio;
        ugcqckmoiguqaqyg:
        if (!$cmwygeyygwqaemaq) {
            goto aqeuykaemmwcmkag;
        }
        goto yywwooiikmgqogsw;
        qwkyqiemkeyeesow:
        wkwqooeoiqqskigc:
        goto guiasequyoqeqwiw;
        miyykescgesaauak:
        ugoqickwqkmmuoea:
        goto uwcocoiugsyyigak;
        guiasequyoqeqwiw:
        $keccaugmemegoimu = (string) array_reduce($keccaugmemegoimu[0], function ($ouameqkugmqkussm, $igqsaukqcqscimok) {
            $ouameqkugmqkussm .= $igqsaukqcqscimok[0];
            return $ouameqkugmqkussm;
        });
        goto cwmouqwqmkioeqiq;
        cwmouqwqmkioeqiq:
        ekwqsmwucymewqco:
        goto ogoyusqumokucecg;
        cgkkewwuoaesyckq:
        $keccaugmemegoimu = $cmwygeyygwqaemaq;
        goto ugcqckmoiguqaqyg;
        ooeisqqwmqwgaaky:
        guqiucweqcwwokmq:
        goto tosaeugqweaqkmkw;
        qcggsaqoywyumieq:
        if (is_array($keccaugmemegoimu[0])) {
            goto wkwqooeoiqqskigc;
        }
        goto iokigyiokgscmmyk;
        ooywaqmkyimkwigy:
        yucywyomwoymeaoo:
        goto famqscccoawysowy;
        wiauusmyowuykyis:
        mkwssqgmseeueoei:
        goto akauggwssmsooago;
        usiqwuciygicyqsi:
        goto ekwqsmwucymewqco;
        goto qwkyqiemkeyeesow;
        cisoskkacswwwgme:
        
        foreach ($coamwgceiiaocqmi as $swaukaagekiououo) {
            goto siimgcqgmymwoauo;
            siimgcqgmymwoauo:
            if (!$this->rkacqeomakmygemu($swaukaagekiououo)) {
                goto momssyeueaumcmii;
            }
            goto mawswmiuewqagcsa;
            qmoiyuckwyakswoy:
            goto ewyyeyokouyicmom;
            goto owqgqgysciogcuwk;
            mawswmiuewqagcsa:
            $this->ekcqeousicimaeww($swaukaagekiououo);
            goto qmoiyuckwyakswoy;
            owqgqgysciogcuwk:
            momssyeueaumcmii:
            goto wyuukkaqwkysasgk;
            wyuukkaqwkysasgk:
            qsiqiykmmeooamai:
            goto cugkwkcgcwamkeek;
            cugkwkcgcwamkeek:
        }
        goto wiqwqecsuqsqisgm;
        cmaiwqeugyoggqmu:
        $coamwgceiiaocqmi = [];
        goto cekuuoakmewkciem;
        wiqwqecsuqsqisgm:
        ewyyeyokouyicmom:
        goto wauycggqcisyequc;
        ocqukkewagukgwcm:
        aaysmqyimgwwmswc:
        goto wmimmucwgosqieee;
        aymekuseakseoeke:
    }
    
    public function qemyqseaomicaacs(?ResponseInterface $keccaugmemegoimu)
    {
        goto oeykoakwmouewksg;
        oeykoakwmouewksg:
        $kuukgsmqkagwaciu = $keccaugmemegoimu->wesecsykkuakgyec();
        goto wqayyeskagucmeis;
        wqayyeskagucmeis:
        $oouuuwawmuaayiku = preg_replace(array_keys(self::RESULT_REGEX), array_values(self::RESULT_REGEX), $kuukgsmqkagwaciu);
        goto woyiagsemicyskkg;
        cegwmkmcgiuyegci:
        zkwcmqmekgeqwemw:
        goto swususomkmoeegsg;
        woyiagsemicyskkg:
        
        if (!(($kuukgsmqkagwaciu = json_decode($oouuuwawmuaayiku, true)) === null)) {
            goto zkwcmqmekgeqwemw;
        }
        goto wewusgmimaqoasim;
        swususomkmoeegsg:
        return $kuukgsmqkagwaciu;
        goto saigkiiwwkkusicm;
        wewusgmimaqoasim:
        throw new UnexpectedValueException(__("\104\x61\164\x61\x20\x63\x61\156\x6e\x6f\x74\x20\142\145\x20\144\x65\143\x6f\144\145\x64\40\157\162\x20\x69\164\40\151\163\40\x64\145\145\x70\145\x72\x20\x74\x68\x61\x6e\x20\164\150\x65\40\162\x65\143\x75\162\x73\151\x6f\156\40\x6c\x69\x6d\151\164", PR__CMN__FOUNDATION));
        goto cegwmkmcgiuyegci;
        saigkiiwwkkusicm:
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
        return (bool) preg_match("\x2f\x5e\x28\133\141\55\x7a\135\173\x32\x7d\51\x28\x2d\x5b\101\x2d\132\135\173\62\x7d\51\x3f\x24\57", $aamkqmkgsaqmcuao);
    }
    
    public function xowwwqwgumcsaaqc(&$xeciwimgioieayek, &$qiouiwasaauyaaue, &$qgciuiagkkguykgs)
    {
        goto gimcguskeecmoags;
        mmkycoggqqcyiugc:
        aksgswgmycoikuoo:
        goto uaswgieioykugsww;
        uaswgieioykugsww:
        parent::xowwwqwgumcsaaqc($xeciwimgioieayek, $qiouiwasaauyaaue, $qgciuiagkkguykgs);
        goto aqmgmaaomqqwswos;
        oiiwcwuccecwaiaa:
        if (!$qqmmggwcsmymegca) {
            goto aksgswgmycoikuoo;
        }
        goto yeiqiuuwaiysiuom;
        yeiqiuuwaiysiuom:
        $this->ksiyskmggywgsayu("\x74\153", $this->sygeeqgwywmygsyu()->ysyiouymigoigsma($qqmmggwcsmymegca), true);
        goto mmkycoggqqcyiugc;
        gimcguskeecmoags:
        $qqmmggwcsmymegca = ManipulateArray::get($this->ksqekagyyameaceq(), "\x71");
        goto oiiwcwuccecwaiaa;
        aqmgmaaomqqwswos:
    }
    
    public function ekcqeousicimaeww(?string $gesecasgkkioeega) : self
    {
        $this->lastDetectedSource = $gesecasgkkioeega;
        return $this;
    }
}
