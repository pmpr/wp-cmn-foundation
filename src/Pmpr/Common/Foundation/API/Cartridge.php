<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b30261f503             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\API;

use Pmpr\Common\Foundation\Decorator\DecoratorOption;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;
use Psr\Http\Message\ResponseInterface;

class Cartridge extends API
{
    const CURRENT_DOMAIN = "\x61\x70\151\x5f\x63\x75\x72\x72\145\156\164\137\144\x6f\155\141\151\x6e";
    const LOCK_REQUEST_TRANSIENT = "\141\160\x69\137\154\157\x63\x6b\x5f\162\145\161\x75\x65\x73\x74\x5f\164\162\x61\x6e\163\151\x65\156\x74";
    
    protected array $domains = [];
    
    public function __construct()
    {
        $this->kesomeowemmyygey("\164\151\x6d\x65\x6f\x75\164", false);
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
        qmoiyuckwyakswoy:
        $wqogggcaamgeiwew = $this->wiqumkmqkqoycqyi();
        goto owqgqgysciogcuwk;
        wyuukkaqwkysasgk:
        $momcykaoccoymeig = array_search($mokawwccycoiqeka, $wqogggcaamgeiwew);
        goto cugkwkcgcwamkeek;
        iimckuqgqcmmaaus:
        DecoratorOption::delete(self::CURRENT_DOMAIN);
        goto mkwssqgmseeueoei;
        mkwssqgmseeueoei:
        goto qsiqiykmmeooamai;
        goto aaysmqyimgwwmswc;
        owqgqgysciogcuwk:
        $this->ucuoiawgsicougqu($mokawwccycoiqeka);
        goto wyuukkaqwkysasgk;
        yywwooiikmgqogsw:
        momssyeueaumcmii:
        goto geowyegsewcqeyeg;
        cugkwkcgcwamkeek:
        $mokawwccycoiqeka = ManipulateArray::get($wqogggcaamgeiwew, intval($momcykaoccoymeig) + 1);
        goto wkwqooeoiqqskigc;
        siimgcqgmymwoauo:
        $mokawwccycoiqeka = $this->wwawisckiqeueoua();
        goto mawswmiuewqagcsa;
        aqeuykaemmwcmkag:
        DecoratorOption::update(self::CURRENT_DOMAIN, $mokawwccycoiqeka);
        goto cgkkewwuoaesyckq;
        ekwqsmwucymewqco:
        $this->saqqeqmcyyoeqici("\x43\141\162\x74\162\151\x64\x67\145\x20\141\160\151\40\x6c\x6f\x63\x6b\145\144\40\146\x6f\162\40\x6e\x65\170\164\x20\x32\x30\x20\155\x69\156\165\164\x65\163\x2e");
        goto iummmcuamoigqyye;
        ugcqckmoiguqaqyg:
        qsiqiykmmeooamai:
        goto yywwooiikmgqogsw;
        mawswmiuewqagcsa:
        if (!$mokawwccycoiqeka) {
            goto momssyeueaumcmii;
        }
        goto qmoiyuckwyakswoy;
        geowyegsewcqeyeg:
        return $this;
        goto keokimwocecqqykq;
        cgkkewwuoaesyckq:
        $this->gyuwiwqqyesiekag($mokawwccycoiqeka);
        goto ugcqckmoiguqaqyg;
        iummmcuamoigqyye:
        
        set_transient(self::LOCK_REQUEST_TRANSIENT, 1, MINUTE_IN_SECONDS * 2);
        goto iimckuqgqcmmaaus;
        aaysmqyimgwwmswc:
        ewyyeyokouyicmom:
        goto aqeuykaemmwcmkag;
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
        ooeisqqwmqwgaaky:
        $yeacayasgueouoqc = null;
        goto tosaeugqweaqkmkw;
        cekuuoakmewkciem:
        wkyowwwemoiseoke:
        goto cgikkekmwssakwme;
        cmaiwqeugyoggqmu:
        $yeacayasgueouoqc = DecoratorOption::get(self::CURRENT_DOMAIN, ManipulateArray::get($this->wiqumkmqkqoycqyi(), 0));
        goto cekuuoakmewkciem;
        tosaeugqweaqkmkw:
        if ($this->yyqoaomsmcauuscg()) {
            goto wkyowwwemoiseoke;
        }
        goto cmaiwqeugyoggqmu;
        cgikkekmwssakwme:
        return $yeacayasgueouoqc;
        goto qwmaquiuiegowwqu;
        qwmaquiuiegowwqu:
    }
    
    public function send($xeciwimgioieayek, $qiouiwasaauyaaue = [], $qgciuiagkkguykgs = "\x67\x65\x74") : ?ResponseInterface
    {
        goto miyykescgesaauak;
        usiqwuciygicyqsi:
        sleep(2);
        goto qwkyqiemkeyeesow;
        wauycggqcisyequc:
        $keccaugmemegoimu = parent::send($xeciwimgioieayek, $qiouiwasaauyaaue, $qgciuiagkkguykgs);
        goto qcggsaqoywyumieq;
        qcggsaqoywyumieq:
        if ($this->occymigcemkqucuw($keccaugmemegoimu, $iswcokucwmiosiaq)) {
            goto ooywaqmkyimkwigy;
        }
        goto iokigyiokgscmmyk;
        qwkyqiemkeyeesow:
        $keccaugmemegoimu = $this->send($xeciwimgioieayek, $qiouiwasaauyaaue, $qgciuiagkkguykgs);
        goto guiasequyoqeqwiw;
        iokigyiokgscmmyk:
        $this->next();
        goto usiqwuciygicyqsi;
        uwcocoiugsyyigak:
        $keccaugmemegoimu = null;
        goto cisoskkacswwwgme;
        guiasequyoqeqwiw:
        ooywaqmkyimkwigy:
        goto cwmouqwqmkioeqiq;
        ogoyusqumokucecg:
        return $keccaugmemegoimu;
        goto qegwqosqeiaywqio;
        cisoskkacswwwgme:
        goto gecemgoaygoigwkq;
        goto wiqwqecsuqsqisgm;
        cwmouqwqmkioeqiq:
        gecemgoaygoigwkq:
        goto ogoyusqumokucecg;
        wiqwqecsuqsqisgm:
        famqscccoawysowy:
        goto wauycggqcisyequc;
        miyykescgesaauak:
        if (!$this->yyqoaomsmcauuscg()) {
            goto famqscccoawysowy;
        }
        goto uwcocoiugsyyigak;
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
