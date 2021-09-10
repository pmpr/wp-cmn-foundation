<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b3993be3fb             |
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
    const RESULT_REGEX = ["\x2f\x2c\53\57" => "\54", "\57\134\133\x2c\x2f" => "\x5b"];
    
    protected ?string $lastDetectedSource = null;
    
    protected ?GeneratorInterface $token = null;
    public function __construct()
    {
        goto mgcsosaagcyukwsk;
        cukaykgmayuaoeau:
        parent::__construct();
        goto eyyqesscicaiisos;
        ymsuaaycogmcakuc:
        $this->domain = "\x68\x74\x74\x70\163\x3a\x2f\57\x74\162\x61\156\x73\154\141\164\x65\56\x67\157\157\x67\x6c\145\x2e\143\x6f\155\57\x74\x72\x61\156\x73\154\141\x74\145\x5f\x61";
        goto qokuacmaaweiawei;
        mgcsosaagcyukwsk:
        $this->token = new Generator();
        goto ymsuaaycogmcakuc;
        qokuacmaaweiawei:
        $this->ueqoossgegqyosem([
            "\x63\154\151\x65\x6e\164" => "\147\164\x78",
            
            "\x68\154" => "\145\156",
            "\x64\164" => ["\164", "\x62\144", "\141\x74", "\145\170", "\x6c\x64", "\155\144", "\161\x63\x61", "\162\x77", "\162\155", "\x73\x73"],
            "\x73\x6c" => null,
            
            "\164\x6c" => null,
            
            "\161" => null,
            
            "\151\145" => "\125\124\x46\55\x38",
            
            "\x6f\145" => "\x55\x54\106\55\70",
            
            "\x6d\x75\154\x74\151\162\145\x73" => 1,
            "\x6f\164\x66" => 0,
            "\x70\x63" => 1,
            "\x74\162\163" => 1,
            "\163\x73\x65\154" => 0,
            "\164\163\x65\154" => 0,
            "\x6b\x63" => 1,
            "\x74\153" => null,
        ]);
        goto cukaykgmayuaoeau;
        eyyqesscicaiisos:
    }
    public function kgquecmsgcouyaya()
    {
        $this->cecaguuoecmccuse($this->ygyygikyocoymgaw("\141\x70\151\137\164\x72\x61\156\x73\x6c\x61\164\x65"), [$this, "\164\x72\141\x6e\x73\154\141\x74\x65"], 10, 4);
        parent::kgquecmsgcouyaya();
    }
    
    public function translate(string $cmwygeyygwqaemaq = '', string $ccamueccusigaaio = "\146\141", string $egsumesakcaaukem = "\x65\x6e", array $qiouiwasaauyaaue = [])
    {
        goto aqeuykaemmwcmkag;
        wauycggqcisyequc:
        if (is_array($keccaugmemegoimu[0])) {
            goto cugkwkcgcwamkeek;
        }
        goto qcggsaqoywyumieq;
        cekuuoakmewkciem:
        foreach ($keccaugmemegoimu as $igqsaukqcqscimok) {
            goto esmysgwsqekkgyos;
            iygqiwugsgasmmei:
            geioaoiakaaskmiq:
            goto qowkkywgauqwcaye;
            qowkkywgauqwcaye:
            ckkcsqmieacuiwws:
            goto iusakgweowcmymgq;
            qeyioyeeqomywygg:
            $coamwgceiiaocqmi[] = $igqsaukqcqscimok;
            goto iygqiwugsgasmmei;
            esmysgwsqekkgyos:
            if (!is_string($igqsaukqcqscimok)) {
                goto geioaoiakaaskmiq;
            }
            goto qeyioyeeqomywygg;
            iusakgweowcmymgq:
        }
        goto cgikkekmwssakwme;
        keokimwocecqqykq:
        $keccaugmemegoimu = [$keccaugmemegoimu];
        goto wkyowwwemoiseoke;
        ugcqckmoiguqaqyg:
        if ($ccamueccusigaaio === $egsumesakcaaukem) {
            goto iimckuqgqcmmaaus;
        }
        goto yywwooiikmgqogsw;
        uwcocoiugsyyigak:
        
        foreach ($coamwgceiiaocqmi as $swaukaagekiououo) {
            goto momssyeueaumcmii;
            momssyeueaumcmii:
            if (!$this->rkacqeomakmygemu($swaukaagekiououo)) {
                goto qsiqiykmmeooamai;
            }
            goto siimgcqgmymwoauo;
            qmoiyuckwyakswoy:
            qsiqiykmmeooamai:
            goto owqgqgysciogcuwk;
            mawswmiuewqagcsa:
            goto ugoqickwqkmmuoea;
            goto qmoiyuckwyakswoy;
            siimgcqgmymwoauo:
            $this->ekcqeousicimaeww($swaukaagekiououo);
            goto mawswmiuewqagcsa;
            owqgqgysciogcuwk:
            ewyyeyokouyicmom:
            goto wyuukkaqwkysasgk;
            wyuukkaqwkysasgk:
        }
        goto cisoskkacswwwgme;
        qegwqosqeiaywqio:
        goto mkwssqgmseeueoei;
        goto yagcgciumusoisuq;
        iokigyiokgscmmyk:
        goto wkwqooeoiqqskigc;
        goto usiqwuciygicyqsi;
        wiqwqecsuqsqisgm:
        if (is_string($keccaugmemegoimu)) {
            goto ekwqsmwucymewqco;
        }
        goto wauycggqcisyequc;
        aqeuykaemmwcmkag:
        $keccaugmemegoimu = $cmwygeyygwqaemaq;
        goto cgkkewwuoaesyckq;
        cisoskkacswwwgme:
        ugoqickwqkmmuoea:
        goto wiqwqecsuqsqisgm;
        yagcgciumusoisuq:
        iimckuqgqcmmaaus:
        goto wiauusmyowuykyis;
        guiasequyoqeqwiw:
        wkwqooeoiqqskigc:
        goto cwmouqwqmkioeqiq;
        usiqwuciygicyqsi:
        cugkwkcgcwamkeek:
        goto qwkyqiemkeyeesow;
        miyykescgesaauak:
        
        $this->ekcqeousicimaeww(null);
        goto uwcocoiugsyyigak;
        ogoyusqumokucecg:
        iummmcuamoigqyye:
        goto qegwqosqeiaywqio;
        ocqukkewagukgwcm:
        aaysmqyimgwwmswc:
        goto wmimmucwgosqieee;
        qwmaquiuiegowwqu:
        myeegekumqiuqyky:
        goto ooywaqmkyimkwigy;
        cmaiwqeugyoggqmu:
        if (is_string($keccaugmemegoimu)) {
            goto myeegekumqiuqyky;
        }
        goto cekuuoakmewkciem;
        cgikkekmwssakwme:
        guqiucweqcwwokmq:
        goto qwmaquiuiegowwqu;
        cwmouqwqmkioeqiq:
        ekwqsmwucymewqco:
        goto ogoyusqumokucecg;
        wiauusmyowuykyis:
        $keccaugmemegoimu = $cmwygeyygwqaemaq;
        goto akauggwssmsooago;
        wmimmucwgosqieee:
        return $keccaugmemegoimu;
        goto giacoeeosqmawgwy;
        gecemgoaygoigwkq:
        yucywyomwoymeaoo:
        goto miyykescgesaauak;
        famqscccoawysowy:
        $coamwgceiiaocqmi[] = $keccaugmemegoimu[count($keccaugmemegoimu) - 2][0][0];
        goto gecemgoaygoigwkq;
        ooeisqqwmqwgaaky:
        
        if (!(isset($keccaugmemegoimu[0]) && $keccaugmemegoimu[0])) {
            goto iummmcuamoigqyye;
        }
        goto tosaeugqweaqkmkw;
        ooywaqmkyimkwigy:
        
        if (!isset($mguwwsqkwwekgegu[count($keccaugmemegoimu) - 2][0][0])) {
            goto yucywyomwoymeaoo;
        }
        goto famqscccoawysowy;
        tosaeugqweaqkmkw:
        $coamwgceiiaocqmi = [];
        goto cmaiwqeugyoggqmu;
        yywwooiikmgqogsw:
        try {
            goto qoucwoamyowaoyms;
            asqeeswqiqkmeuqu:
            $keccaugmemegoimu = $this->get("\57\x73\151\x6e\x67\154\145", $qiouiwasaauyaaue);
            goto ugwaeuogggmsckkc;
            qoucwoamyowaoyms:
            $this->ueqoossgegqyosem(["\x73\154" => $egsumesakcaaukem, "\x74\154" => $ccamueccusigaaio, "\x71" => $cmwygeyygwqaemaq], true);
            goto asqeeswqiqkmeuqu;
            ugwaeuogggmsckkc:
            $keccaugmemegoimu = $this->qemyqseaomicaacs($keccaugmemegoimu);
            goto uokugmckkqqmacsk;
            uokugmckkqqmacsk:
        } catch (Exception $wgaoewqkwgomoaai) {
            $keccaugmemegoimu = $cmwygeyygwqaemaq;
        }
        goto geowyegsewcqeyeg;
        geowyegsewcqeyeg:
        if (!(is_string($keccaugmemegoimu) && $keccaugmemegoimu != '')) {
            goto iyuewqwuauaqesgw;
        }
        goto keokimwocecqqykq;
        wkyowwwemoiseoke:
        iyuewqwuauaqesgw:
        goto ooeisqqwmqwgaaky;
        cgkkewwuoaesyckq:
        if (!$cmwygeyygwqaemaq) {
            goto aaysmqyimgwwmswc;
        }
        goto ugcqckmoiguqaqyg;
        qcggsaqoywyumieq:
        $keccaugmemegoimu = (string) $keccaugmemegoimu[0];
        goto iokigyiokgscmmyk;
        akauggwssmsooago:
        mkwssqgmseeueoei:
        goto ocqukkewagukgwcm;
        qwkyqiemkeyeesow:
        $keccaugmemegoimu = (string) array_reduce($keccaugmemegoimu[0], function ($ouameqkugmqkussm, $igqsaukqcqscimok) {
            $ouameqkugmqkussm .= $igqsaukqcqscimok[0];
            return $ouameqkugmqkussm;
        });
        goto guiasequyoqeqwiw;
        giacoeeosqmawgwy:
    }
    
    public function qemyqseaomicaacs(?ResponseInterface $keccaugmemegoimu)
    {
        goto zkwcmqmekgeqwemw;
        woyiagsemicyskkg:
        throw new UnexpectedValueException(__("\104\141\x74\x61\x20\x63\141\x6e\156\157\x74\x20\142\145\40\x64\145\x63\157\x64\145\x64\x20\157\x72\40\x69\164\x20\151\x73\40\x64\145\145\160\145\x72\x20\164\150\x61\156\x20\x74\x68\x65\x20\162\145\143\165\162\163\x69\157\156\x20\154\151\x6d\x69\164", PR__CMN__FOUNDATION));
        goto wewusgmimaqoasim;
        wqayyeskagucmeis:
        
        if (!(($kuukgsmqkagwaciu = json_decode($oouuuwawmuaayiku, true)) === null)) {
            goto aymekuseakseoeke;
        }
        goto woyiagsemicyskkg;
        wewusgmimaqoasim:
        aymekuseakseoeke:
        goto cegwmkmcgiuyegci;
        zkwcmqmekgeqwemw:
        $kuukgsmqkagwaciu = $keccaugmemegoimu->wesecsykkuakgyec();
        goto oeykoakwmouewksg;
        oeykoakwmouewksg:
        $oouuuwawmuaayiku = preg_replace(array_keys(self::RESULT_REGEX), array_values(self::RESULT_REGEX), $kuukgsmqkagwaciu);
        goto wqayyeskagucmeis;
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
        return (bool) preg_match("\57\x5e\50\133\141\55\x7a\x5d\173\x32\175\x29\x28\55\133\x41\55\132\x5d\173\62\x7d\51\x3f\44\57", $aamkqmkgsaqmcuao);
    }
    
    public function xowwwqwgumcsaaqc(&$xeciwimgioieayek, &$qiouiwasaauyaaue, &$qgciuiagkkguykgs)
    {
        goto aksgswgmycoikuoo;
        mmkycoggqqcyiugc:
        parent::xowwwqwgumcsaaqc($xeciwimgioieayek, $qiouiwasaauyaaue, $qgciuiagkkguykgs);
        goto uaswgieioykugsww;
        gimcguskeecmoags:
        if (!$qqmmggwcsmymegca) {
            goto saigkiiwwkkusicm;
        }
        goto oiiwcwuccecwaiaa;
        yeiqiuuwaiysiuom:
        saigkiiwwkkusicm:
        goto mmkycoggqqcyiugc;
        aksgswgmycoikuoo:
        $qqmmggwcsmymegca = ManipulateArray::get($this->ksqekagyyameaceq(), "\161");
        goto gimcguskeecmoags;
        oiiwcwuccecwaiaa:
        $this->ksiyskmggywgsayu("\164\x6b", $this->sygeeqgwywmygsyu()->ysyiouymigoigsma($qqmmggwcsmymegca), true);
        goto yeiqiuuwaiysiuom;
        uaswgieioykugsww:
    }
    
    public function ekcqeousicimaeww(?string $gesecasgkkioeega) : self
    {
        $this->lastDetectedSource = $gesecasgkkioeega;
        return $this;
    }
}
