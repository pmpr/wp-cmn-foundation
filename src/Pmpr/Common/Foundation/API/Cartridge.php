<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b2e4befc8c             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\API;

use Pmpr\Common\Foundation\Decorator\DecoratorOption;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;
use Psr\Http\Message\ResponseInterface;

class Cartridge extends API
{
    const CURRENT_DOMAIN = "\141\x70\151\x5f\x63\165\x72\x72\x65\x6e\x74\137\144\x6f\155\x61\x69\x6e";
    const LOCK_REQUEST_TRANSIENT = "\x61\160\x69\x5f\x6c\x6f\143\153\x5f\x72\x65\x71\165\145\163\164\x5f\x74\x72\x61\156\x73\151\145\156\164";
    
    protected array $domains = [];
    
    public function __construct()
    {
        $this->kesomeowemmyygey("\164\151\x6d\145\157\x75\x74", false);
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
        goto siimgcqgmymwoauo;
        mkwssqgmseeueoei:
        goto qsiqiykmmeooamai;
        goto aaysmqyimgwwmswc;
        wyuukkaqwkysasgk:
        $momcykaoccoymeig = array_search($mokawwccycoiqeka, $wqogggcaamgeiwew);
        goto cugkwkcgcwamkeek;
        geowyegsewcqeyeg:
        return $this;
        goto keokimwocecqqykq;
        ekwqsmwucymewqco:
        $this->saqqeqmcyyoeqici("\x43\x61\162\x74\x72\x69\144\147\145\x20\141\160\x69\40\154\x6f\143\x6b\145\x64\40\x66\x6f\162\40\x6e\145\170\x74\x20\x32\x30\x20\155\x69\x6e\165\164\145\163\56");
        goto iummmcuamoigqyye;
        cugkwkcgcwamkeek:
        $mokawwccycoiqeka = ManipulateArray::get($wqogggcaamgeiwew, intval($momcykaoccoymeig) + 1);
        goto wkwqooeoiqqskigc;
        yywwooiikmgqogsw:
        momssyeueaumcmii:
        goto geowyegsewcqeyeg;
        aaysmqyimgwwmswc:
        ewyyeyokouyicmom:
        goto aqeuykaemmwcmkag;
        iummmcuamoigqyye:
        
        set_transient(self::LOCK_REQUEST_TRANSIENT, 1, MINUTE_IN_SECONDS * 2);
        goto iimckuqgqcmmaaus;
        iimckuqgqcmmaaus:
        DecoratorOption::delete(self::CURRENT_DOMAIN);
        goto mkwssqgmseeueoei;
        qmoiyuckwyakswoy:
        $wqogggcaamgeiwew = $this->wiqumkmqkqoycqyi();
        goto owqgqgysciogcuwk;
        siimgcqgmymwoauo:
        $mokawwccycoiqeka = $this->wwawisckiqeueoua();
        goto mawswmiuewqagcsa;
        owqgqgysciogcuwk:
        $this->ucuoiawgsicougqu($mokawwccycoiqeka);
        goto wyuukkaqwkysasgk;
        aqeuykaemmwcmkag:
        DecoratorOption::update(self::CURRENT_DOMAIN, $mokawwccycoiqeka);
        goto cgkkewwuoaesyckq;
        ugcqckmoiguqaqyg:
        qsiqiykmmeooamai:
        goto yywwooiikmgqogsw;
        mawswmiuewqagcsa:
        if (!$mokawwccycoiqeka) {
            goto momssyeueaumcmii;
        }
        goto qmoiyuckwyakswoy;
        cgkkewwuoaesyckq:
        $this->gyuwiwqqyesiekag($mokawwccycoiqeka);
        goto ugcqckmoiguqaqyg;
        wkwqooeoiqqskigc:
        if ($mokawwccycoiqeka) {
            goto ewyyeyokouyicmom;
        }
        goto ekwqsmwucymewqco;
        keokimwocecqqykq:
    }
    
    public function wwawisckiqeueoua() : ?string
    {
        goto ooeisqqwmqwgaaky;
        cekuuoakmewkciem:
        wkyowwwemoiseoke:
        goto cgikkekmwssakwme;
        tosaeugqweaqkmkw:
        if ($this->yyqoaomsmcauuscg()) {
            goto wkyowwwemoiseoke;
        }
        goto cmaiwqeugyoggqmu;
        cgikkekmwssakwme:
        return $yeacayasgueouoqc;
        goto qwmaquiuiegowwqu;
        ooeisqqwmqwgaaky:
        $yeacayasgueouoqc = null;
        goto tosaeugqweaqkmkw;
        cmaiwqeugyoggqmu:
        $yeacayasgueouoqc = DecoratorOption::get(self::CURRENT_DOMAIN, ManipulateArray::get($this->wiqumkmqkqoycqyi(), 0));
        goto cekuuoakmewkciem;
        qwmaquiuiegowwqu:
    }
    
    public function send($xeciwimgioieayek, $qiouiwasaauyaaue = [], $qgciuiagkkguykgs = "\x67\145\164") : ?ResponseInterface
    {
        goto miyykescgesaauak;
        qwkyqiemkeyeesow:
        $keccaugmemegoimu = $this->send($xeciwimgioieayek, $qiouiwasaauyaaue, $qgciuiagkkguykgs);
        goto guiasequyoqeqwiw;
        usiqwuciygicyqsi:
        sleep(2);
        goto qwkyqiemkeyeesow;
        ogoyusqumokucecg:
        return $keccaugmemegoimu;
        goto qegwqosqeiaywqio;
        uwcocoiugsyyigak:
        $keccaugmemegoimu = null;
        goto cisoskkacswwwgme;
        cisoskkacswwwgme:
        goto gecemgoaygoigwkq;
        goto wiqwqecsuqsqisgm;
        guiasequyoqeqwiw:
        ooywaqmkyimkwigy:
        goto cwmouqwqmkioeqiq;
        iokigyiokgscmmyk:
        $this->next();
        goto usiqwuciygicyqsi;
        wiqwqecsuqsqisgm:
        famqscccoawysowy:
        goto wauycggqcisyequc;
        qcggsaqoywyumieq:
        if ($this->occymigcemkqucuw($keccaugmemegoimu, $iswcokucwmiosiaq)) {
            goto ooywaqmkyimkwigy;
        }
        goto iokigyiokgscmmyk;
        wauycggqcisyequc:
        $keccaugmemegoimu = parent::send($xeciwimgioieayek, $qiouiwasaauyaaue, $qgciuiagkkguykgs);
        goto qcggsaqoywyumieq;
        miyykescgesaauak:
        if (!$this->yyqoaomsmcauuscg()) {
            goto famqscccoawysowy;
        }
        goto uwcocoiugsyyigak;
        cwmouqwqmkioeqiq:
        gecemgoaygoigwkq:
        goto ogoyusqumokucecg;
        qegwqosqeiaywqio:
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
