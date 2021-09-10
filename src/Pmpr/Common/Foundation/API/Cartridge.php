<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b1e8aa0c03             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\API;

use Pmpr\Common\Foundation\Decorator\DecoratorOption;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;
use Psr\Http\Message\ResponseInterface;

class Cartridge extends API
{
    const CURRENT_DOMAIN = "\141\x70\151\x5f\143\165\x72\162\145\x6e\164\137\144\157\x6d\x61\151\156";
    const LOCK_REQUEST_TRANSIENT = "\141\x70\x69\x5f\154\157\x63\x6b\x5f\x72\x65\161\165\145\163\x74\137\x74\x72\141\x6e\x73\x69\x65\x6e\x74";
    
    protected array $domains = [];
    
    public function __construct()
    {
        $this->kesomeowemmyygey("\164\151\x6d\145\x6f\165\x74", false);
        parent::__construct();
    }
    
    public function wiqumkmqkqoycqyi() : array
    {
        return $this->domains;
    }
    
    public function iggeecowsiwyaooe(string $mokawwccycoiqeka) : string
    {
        $this->domains[] = $mokawwccycoiqeka;
        return $mokawwccycoiqeka;
    }
    
    public function next() : self
    {
        goto ewyyeyokouyicmom;
        siimgcqgmymwoauo:
        $this->ucuoiawgsicougqu($mokawwccycoiqeka);
        goto mawswmiuewqagcsa;
        wyuukkaqwkysasgk:
        $this->saqqeqmcyyoeqici("\103\141\x72\x74\162\x69\x64\147\145\40\x61\160\x69\40\154\157\143\153\x65\x64\x20\x66\157\x72\x20\156\145\x78\x74\40\x32\60\40\155\x69\156\165\164\145\163\x2e");
        goto cugkwkcgcwamkeek;
        aqeuykaemmwcmkag:
        ugoqickwqkmmuoea:
        goto cgkkewwuoaesyckq;
        iimckuqgqcmmaaus:
        DecoratorOption::update(self::CURRENT_DOMAIN, $mokawwccycoiqeka);
        goto mkwssqgmseeueoei;
        mawswmiuewqagcsa:
        $momcykaoccoymeig = array_search($mokawwccycoiqeka, $wqogggcaamgeiwew);
        goto qmoiyuckwyakswoy;
        momssyeueaumcmii:
        $wqogggcaamgeiwew = $this->wiqumkmqkqoycqyi();
        goto siimgcqgmymwoauo;
        cgkkewwuoaesyckq:
        return $this;
        goto ugcqckmoiguqaqyg;
        owqgqgysciogcuwk:
        if ($mokawwccycoiqeka) {
            goto myeegekumqiuqyky;
        }
        goto wyuukkaqwkysasgk;
        qmoiyuckwyakswoy:
        $mokawwccycoiqeka = ManipulateArray::get($wqogggcaamgeiwew, intval($momcykaoccoymeig) + 1);
        goto owqgqgysciogcuwk;
        qsiqiykmmeooamai:
        if (!$mokawwccycoiqeka) {
            goto ugoqickwqkmmuoea;
        }
        goto momssyeueaumcmii;
        mkwssqgmseeueoei:
        $this->gyuwiwqqyesiekag($mokawwccycoiqeka);
        goto aaysmqyimgwwmswc;
        ewyyeyokouyicmom:
        $mokawwccycoiqeka = $this->wwawisckiqeueoua();
        goto qsiqiykmmeooamai;
        wkwqooeoiqqskigc:
        DecoratorOption::delete(self::CURRENT_DOMAIN);
        goto ekwqsmwucymewqco;
        iummmcuamoigqyye:
        myeegekumqiuqyky:
        goto iimckuqgqcmmaaus;
        cugkwkcgcwamkeek:
        
        set_transient(self::LOCK_REQUEST_TRANSIENT, 1, MINUTE_IN_SECONDS * 2);
        goto wkwqooeoiqqskigc;
        aaysmqyimgwwmswc:
        yucywyomwoymeaoo:
        goto aqeuykaemmwcmkag;
        ekwqsmwucymewqco:
        goto yucywyomwoymeaoo;
        goto iummmcuamoigqyye;
        ugcqckmoiguqaqyg:
    }
    
    public function wwawisckiqeueoua() : ?string
    {
        goto geowyegsewcqeyeg;
        geowyegsewcqeyeg:
        $yeacayasgueouoqc = null;
        goto keokimwocecqqykq;
        ooeisqqwmqwgaaky:
        yywwooiikmgqogsw:
        goto tosaeugqweaqkmkw;
        keokimwocecqqykq:
        if ($this->yyqoaomsmcauuscg()) {
            goto yywwooiikmgqogsw;
        }
        goto wkyowwwemoiseoke;
        wkyowwwemoiseoke:
        $yeacayasgueouoqc = DecoratorOption::get(self::CURRENT_DOMAIN, ManipulateArray::get($this->wiqumkmqkqoycqyi(), 0));
        goto ooeisqqwmqwgaaky;
        tosaeugqweaqkmkw:
        return $yeacayasgueouoqc;
        goto cmaiwqeugyoggqmu;
        cmaiwqeugyoggqmu:
    }
    
    public function send($xeciwimgioieayek, $qiouiwasaauyaaue = [], $qgciuiagkkguykgs = "\x67\x65\164") : ?ResponseInterface
    {
        goto ooywaqmkyimkwigy;
        gecemgoaygoigwkq:
        goto qwmaquiuiegowwqu;
        goto miyykescgesaauak;
        wauycggqcisyequc:
        sleep(2);
        goto qcggsaqoywyumieq;
        qcggsaqoywyumieq:
        $keccaugmemegoimu = $this->send($xeciwimgioieayek, $qiouiwasaauyaaue, $qgciuiagkkguykgs);
        goto iokigyiokgscmmyk;
        usiqwuciygicyqsi:
        qwmaquiuiegowwqu:
        goto qwkyqiemkeyeesow;
        qwkyqiemkeyeesow:
        return $keccaugmemegoimu;
        goto guiasequyoqeqwiw;
        miyykescgesaauak:
        cgikkekmwssakwme:
        goto uwcocoiugsyyigak;
        wiqwqecsuqsqisgm:
        $this->next();
        goto wauycggqcisyequc;
        ooywaqmkyimkwigy:
        if (!$this->yyqoaomsmcauuscg()) {
            goto cgikkekmwssakwme;
        }
        goto famqscccoawysowy;
        iokigyiokgscmmyk:
        cekuuoakmewkciem:
        goto usiqwuciygicyqsi;
        famqscccoawysowy:
        $keccaugmemegoimu = null;
        goto gecemgoaygoigwkq;
        cisoskkacswwwgme:
        if ($this->occymigcemkqucuw($keccaugmemegoimu, $iswcokucwmiosiaq)) {
            goto cekuuoakmewkciem;
        }
        goto wiqwqecsuqsqisgm;
        uwcocoiugsyyigak:
        $keccaugmemegoimu = parent::send($xeciwimgioieayek, $qiouiwasaauyaaue, $qgciuiagkkguykgs);
        goto cisoskkacswwwgme;
        guiasequyoqeqwiw:
    }
    
    public function yyqoaomsmcauuscg() : bool
    {
        
        return false;
    }
    
    public function ucuoiawgsicougqu($yeacayasgueouoqc)
    {
    }
    
    public function gyuwiwqqyesiekag($yeacayasgueouoqc)
    {
    }
}
