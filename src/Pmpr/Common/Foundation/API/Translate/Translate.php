<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b5973b89a9             |
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
    const RESULT_REGEX = ["\57\54\x2b\x2f" => "\54", "\57\x5c\x5b\x2c\57" => "\133"];
    
    protected ?string $lastDetectedSource = null;
    
    protected ?GeneratorInterface $token = null;
    public function __construct()
    {
        goto mgcsosaagcyukwsk;
        ymsuaaycogmcakuc:
        $this->domain = "\150\164\164\x70\163\x3a\x2f\57\x74\x72\x61\x6e\163\154\x61\164\145\56\x67\x6f\x6f\x67\154\x65\x2e\x63\157\155\x2f\164\x72\141\x6e\x73\154\x61\x74\x65\137\x61";
        goto qokuacmaaweiawei;
        qokuacmaaweiawei:
        $this->ueqoossgegqyosem([
            "\143\154\151\x65\x6e\x74" => "\147\x74\170",
            
            "\150\x6c" => "\145\x6e",
            "\144\x74" => ["\x74", "\142\144", "\141\164", "\x65\170", "\154\144", "\x6d\x64", "\x71\143\141", "\162\x77", "\x72\155", "\163\163"],
            "\x73\154" => null,
            
            "\164\154" => null,
            
            "\x71" => null,
            
            "\151\145" => "\x55\124\106\55\70",
            
            "\x6f\145" => "\x55\124\106\55\x38",
            
            "\155\165\154\164\151\162\x65\163" => 1,
            "\157\164\x66" => 0,
            "\x70\143" => 1,
            "\164\x72\163" => 1,
            "\x73\x73\145\x6c" => 0,
            "\x74\x73\145\154" => 0,
            "\x6b\x63" => 1,
            "\x74\153" => null,
        ]);
        goto cukaykgmayuaoeau;
        cukaykgmayuaoeau:
        parent::__construct();
        goto eyyqesscicaiisos;
        mgcsosaagcyukwsk:
        $this->token = new Generator();
        goto ymsuaaycogmcakuc;
        eyyqesscicaiisos:
    }
    public function kgquecmsgcouyaya()
    {
        $this->cecaguuoecmccuse($this->ygyygikyocoymgaw("\x61\x70\x69\x5f\x74\162\x61\x6e\163\154\141\x74\145"), [$this, "\164\162\141\x6e\x73\154\141\x74\x65"], 10, 4);
        parent::kgquecmsgcouyaya();
    }
    
    public function translate(string $cmwygeyygwqaemaq = '', string $ccamueccusigaaio = "\146\x61", string $egsumesakcaaukem = "\x65\156", array $qiouiwasaauyaaue = [])
    {
        goto aqeuykaemmwcmkag;
        guiasequyoqeqwiw:
        wkwqooeoiqqskigc:
        goto cwmouqwqmkioeqiq;
        qcggsaqoywyumieq:
        $keccaugmemegoimu = (string) $keccaugmemegoimu[0];
        goto iokigyiokgscmmyk;
        keokimwocecqqykq:
        $keccaugmemegoimu = [$keccaugmemegoimu];
        goto wkyowwwemoiseoke;
        iokigyiokgscmmyk:
        goto wkwqooeoiqqskigc;
        goto usiqwuciygicyqsi;
        uwcocoiugsyyigak:
        
        foreach ($coamwgceiiaocqmi as $swaukaagekiououo) {
            goto momssyeueaumcmii;
            mawswmiuewqagcsa:
            goto ugoqickwqkmmuoea;
            goto qmoiyuckwyakswoy;
            siimgcqgmymwoauo:
            $this->ekcqeousicimaeww($swaukaagekiououo);
            goto mawswmiuewqagcsa;
            owqgqgysciogcuwk:
            ewyyeyokouyicmom:
            goto wyuukkaqwkysasgk;
            qmoiyuckwyakswoy:
            qsiqiykmmeooamai:
            goto owqgqgysciogcuwk;
            momssyeueaumcmii:
            if (!$this->rkacqeomakmygemu($swaukaagekiououo)) {
                goto qsiqiykmmeooamai;
            }
            goto siimgcqgmymwoauo;
            wyuukkaqwkysasgk:
        }
        goto cisoskkacswwwgme;
        qwmaquiuiegowwqu:
        myeegekumqiuqyky:
        goto ooywaqmkyimkwigy;
        usiqwuciygicyqsi:
        cugkwkcgcwamkeek:
        goto qwkyqiemkeyeesow;
        wiauusmyowuykyis:
        $keccaugmemegoimu = $cmwygeyygwqaemaq;
        goto akauggwssmsooago;
        wmimmucwgosqieee:
        return $keccaugmemegoimu;
        goto giacoeeosqmawgwy;
        famqscccoawysowy:
        $coamwgceiiaocqmi[] = $keccaugmemegoimu[count($keccaugmemegoimu) - 2][0][0];
        goto gecemgoaygoigwkq;
        ugcqckmoiguqaqyg:
        if ($ccamueccusigaaio === $egsumesakcaaukem) {
            goto iimckuqgqcmmaaus;
        }
        goto yywwooiikmgqogsw;
        cmaiwqeugyoggqmu:
        if (is_string($keccaugmemegoimu)) {
            goto myeegekumqiuqyky;
        }
        goto cekuuoakmewkciem;
        ogoyusqumokucecg:
        iummmcuamoigqyye:
        goto qegwqosqeiaywqio;
        ooeisqqwmqwgaaky:
        
        if (!(isset($keccaugmemegoimu[0]) && $keccaugmemegoimu[0])) {
            goto iummmcuamoigqyye;
        }
        goto tosaeugqweaqkmkw;
        wiqwqecsuqsqisgm:
        if (is_string($keccaugmemegoimu)) {
            goto ekwqsmwucymewqco;
        }
        goto wauycggqcisyequc;
        ocqukkewagukgwcm:
        aaysmqyimgwwmswc:
        goto wmimmucwgosqieee;
        ooywaqmkyimkwigy:
        
        if (!isset($mguwwsqkwwekgegu[count($keccaugmemegoimu) - 2][0][0])) {
            goto yucywyomwoymeaoo;
        }
        goto famqscccoawysowy;
        cgkkewwuoaesyckq:
        if (!$cmwygeyygwqaemaq) {
            goto aaysmqyimgwwmswc;
        }
        goto ugcqckmoiguqaqyg;
        akauggwssmsooago:
        mkwssqgmseeueoei:
        goto ocqukkewagukgwcm;
        qegwqosqeiaywqio:
        goto mkwssqgmseeueoei;
        goto yagcgciumusoisuq;
        cisoskkacswwwgme:
        ugoqickwqkmmuoea:
        goto wiqwqecsuqsqisgm;
        wkyowwwemoiseoke:
        iyuewqwuauaqesgw:
        goto ooeisqqwmqwgaaky;
        aqeuykaemmwcmkag:
        $keccaugmemegoimu = $cmwygeyygwqaemaq;
        goto cgkkewwuoaesyckq;
        geowyegsewcqeyeg:
        if (!(is_string($keccaugmemegoimu) && $keccaugmemegoimu != '')) {
            goto iyuewqwuauaqesgw;
        }
        goto keokimwocecqqykq;
        yywwooiikmgqogsw:
        try {
            goto qoucwoamyowaoyms;
            asqeeswqiqkmeuqu:
            $keccaugmemegoimu = $this->get("\57\x73\151\x6e\x67\x6c\145", $qiouiwasaauyaaue);
            goto ugwaeuogggmsckkc;
            qoucwoamyowaoyms:
            $this->ueqoossgegqyosem(["\163\x6c" => $egsumesakcaaukem, "\x74\x6c" => $ccamueccusigaaio, "\161" => $cmwygeyygwqaemaq], true);
            goto asqeeswqiqkmeuqu;
            ugwaeuogggmsckkc:
            $keccaugmemegoimu = $this->qemyqseaomicaacs($keccaugmemegoimu);
            goto uokugmckkqqmacsk;
            uokugmckkqqmacsk:
        } catch (Exception $wgaoewqkwgomoaai) {
            $keccaugmemegoimu = $cmwygeyygwqaemaq;
        }
        goto geowyegsewcqeyeg;
        cgikkekmwssakwme:
        guqiucweqcwwokmq:
        goto qwmaquiuiegowwqu;
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
            qowkkywgauqwcaye:
            ckkcsqmieacuiwws:
            goto iusakgweowcmymgq;
            iygqiwugsgasmmei:
            geioaoiakaaskmiq:
            goto qowkkywgauqwcaye;
            iusakgweowcmymgq:
        }
        goto cgikkekmwssakwme;
        wauycggqcisyequc:
        if (is_array($keccaugmemegoimu[0])) {
            goto cugkwkcgcwamkeek;
        }
        goto qcggsaqoywyumieq;
        cwmouqwqmkioeqiq:
        ekwqsmwucymewqco:
        goto ogoyusqumokucecg;
        qwkyqiemkeyeesow:
        $keccaugmemegoimu = (string) array_reduce($keccaugmemegoimu[0], function ($ouameqkugmqkussm, $igqsaukqcqscimok) {
            $ouameqkugmqkussm .= $igqsaukqcqscimok[0];
            return $ouameqkugmqkussm;
        });
        goto guiasequyoqeqwiw;
        yagcgciumusoisuq:
        iimckuqgqcmmaaus:
        goto wiauusmyowuykyis;
        tosaeugqweaqkmkw:
        $coamwgceiiaocqmi = [];
        goto cmaiwqeugyoggqmu;
        gecemgoaygoigwkq:
        yucywyomwoymeaoo:
        goto miyykescgesaauak;
        miyykescgesaauak:
        
        $this->ekcqeousicimaeww(null);
        goto uwcocoiugsyyigak;
        giacoeeosqmawgwy:
    }
    
    public function qemyqseaomicaacs(?ResponseInterface $keccaugmemegoimu)
    {
        goto zkwcmqmekgeqwemw;
        woyiagsemicyskkg:
        throw new UnexpectedValueException(__("\x44\141\164\141\x20\x63\x61\x6e\156\157\x74\x20\x62\x65\x20\x64\x65\x63\157\144\145\x64\40\x6f\x72\x20\151\164\x20\151\163\x20\x64\145\x65\160\x65\x72\40\164\150\x61\156\x20\164\150\x65\40\x72\145\143\165\162\x73\x69\157\156\40\x6c\151\155\151\164", PR__CMN__FOUNDATION));
        goto wewusgmimaqoasim;
        wqayyeskagucmeis:
        
        if (!(($kuukgsmqkagwaciu = json_decode($oouuuwawmuaayiku, true)) === null)) {
            goto aymekuseakseoeke;
        }
        goto woyiagsemicyskkg;
        zkwcmqmekgeqwemw:
        $kuukgsmqkagwaciu = $keccaugmemegoimu->wesecsykkuakgyec();
        goto oeykoakwmouewksg;
        oeykoakwmouewksg:
        $oouuuwawmuaayiku = preg_replace(array_keys(self::RESULT_REGEX), array_values(self::RESULT_REGEX), $kuukgsmqkagwaciu);
        goto wqayyeskagucmeis;
        cegwmkmcgiuyegci:
        return $kuukgsmqkagwaciu;
        goto swususomkmoeegsg;
        wewusgmimaqoasim:
        aymekuseakseoeke:
        goto cegwmkmcgiuyegci;
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
        return (bool) preg_match("\57\x5e\x28\x5b\141\55\x7a\135\x7b\62\x7d\51\x28\x2d\133\101\55\132\x5d\x7b\62\x7d\51\x3f\x24\x2f", $aamkqmkgsaqmcuao);
    }
    
    public function xowwwqwgumcsaaqc(&$xeciwimgioieayek, &$qiouiwasaauyaaue, &$qgciuiagkkguykgs)
    {
        goto aksgswgmycoikuoo;
        aksgswgmycoikuoo:
        $qqmmggwcsmymegca = ManipulateArray::get($this->ksqekagyyameaceq(), "\x71");
        goto gimcguskeecmoags;
        mmkycoggqqcyiugc:
        parent::xowwwqwgumcsaaqc($xeciwimgioieayek, $qiouiwasaauyaaue, $qgciuiagkkguykgs);
        goto uaswgieioykugsww;
        gimcguskeecmoags:
        if (!$qqmmggwcsmymegca) {
            goto saigkiiwwkkusicm;
        }
        goto oiiwcwuccecwaiaa;
        oiiwcwuccecwaiaa:
        $this->ksiyskmggywgsayu("\164\153", $this->sygeeqgwywmygsyu()->ysyiouymigoigsma($qqmmggwcsmymegca), true);
        goto yeiqiuuwaiysiuom;
        yeiqiuuwaiysiuom:
        saigkiiwwkkusicm:
        goto mmkycoggqqcyiugc;
        uaswgieioykugsww:
    }
    
    public function ekcqeousicimaeww(?string $gesecasgkkioeega) : self
    {
        $this->lastDetectedSource = $gesecasgkkioeega;
        return $this;
    }
}
