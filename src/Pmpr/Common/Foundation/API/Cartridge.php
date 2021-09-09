<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613a1be32d755             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\API;

use Pmpr\Common\Foundation\Decorator\DecoratorOption;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;
use Psr\Http\Message\ResponseInterface;

class Cartridge extends API
{
    const CURRENT_DOMAIN = "\141\x70\151\x5f\x63\x75\162\x72\x65\156\164\x5f\x64\x6f\x6d\141\x69\x6e";
    const LOCK_REQUEST_TRANSIENT = "\141\160\x69\x5f\x6c\157\x63\153\137\162\x65\161\165\145\163\164\137\164\x72\141\x6e\x73\151\x65\156\164";
    
    protected array $domains = [];
    
    public function __construct()
    {
        $this->kesomeowemmyygey("\164\151\x6d\145\157\x75\164", false);
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
        goto cucwqoikogogyiae;
        sysyossykggwkgim:
        $this->saqqeqmcyyoeqici("\x43\x61\162\x74\162\x69\144\x67\x65\40\x61\x70\151\40\154\x6f\x63\x6b\145\x64\x20\146\x6f\162\40\x6e\x65\170\x74\x20\62\x30\x20\x6d\x69\156\x75\x74\145\x73\x2e");
        goto eaacgaouamsuwkga;
        gmuemckgkssugeao:
        return $this;
        goto qkacaucsuuqmwssw;
        ymsggkuocaouwqeg:
        $momcykaoccoymeig = array_search($mokawwccycoiqeka, $wqogggcaamgeiwew);
        goto myesgqoumasukcam;
        mkowswyuyusgiwys:
        DecoratorOption::update(self::CURRENT_DOMAIN, $mokawwccycoiqeka);
        goto qmcqkyugmgcsqusu;
        qqioismeqoaquugc:
        $this->ucuoiawgsicougqu($mokawwccycoiqeka);
        goto ymsggkuocaouwqeg;
        qmcqkyugmgcsqusu:
        $this->gyuwiwqqyesiekag($mokawwccycoiqeka);
        goto eoikcysgayayyaik;
        cyygmmqaimqqikya:
        DecoratorOption::delete(self::CURRENT_DOMAIN);
        goto eiqwgagequiueqqu;
        swwewqamyieuaeyo:
        if ($mokawwccycoiqeka) {
            goto yeiggwkgkoeucuiw;
        }
        goto sysyossykggwkgim;
        qeaqweiacsqaekao:
        qeawowmmogmaiwiy:
        goto gmuemckgkssugeao;
        eoikcysgayayyaik:
        gkwscmymwmeaqqwu:
        goto qeaqweiacsqaekao;
        mkkkugwkseusuoys:
        yeiggwkgkoeucuiw:
        goto mkowswyuyusgiwys;
        aewqkyaucyssiaay:
        if (!$mokawwccycoiqeka) {
            goto qeawowmmogmaiwiy;
        }
        goto ksgmewmmokmawgcs;
        ksgmewmmokmawgcs:
        $wqogggcaamgeiwew = $this->wiqumkmqkqoycqyi();
        goto qqioismeqoaquugc;
        cucwqoikogogyiae:
        $mokawwccycoiqeka = $this->wwawisckiqeueoua();
        goto aewqkyaucyssiaay;
        eiqwgagequiueqqu:
        goto gkwscmymwmeaqqwu;
        goto mkkkugwkseusuoys;
        myesgqoumasukcam:
        $mokawwccycoiqeka = ManipulateArray::get($wqogggcaamgeiwew, intval($momcykaoccoymeig) + 1);
        goto swwewqamyieuaeyo;
        eaacgaouamsuwkga:
        
        set_transient(self::LOCK_REQUEST_TRANSIENT, 1, MINUTE_IN_SECONDS * 2);
        goto cyygmmqaimqqikya;
        qkacaucsuuqmwssw:
    }
    
    public function wwawisckiqeueoua() : ?string
    {
        goto owosugyaauewwmak;
        iqeqsgmquuaakqas:
        if ($this->yyqoaomsmcauuscg()) {
            goto oamyuqkoaokkoakc;
        }
        goto qkgwsqyiqqyyqkuk;
        sqeosuowqqmiygoe:
        return $yeacayasgueouoqc;
        goto oukamomweoyacmyy;
        owosugyaauewwmak:
        $yeacayasgueouoqc = null;
        goto iqeqsgmquuaakqas;
        qkgwsqyiqqyyqkuk:
        $yeacayasgueouoqc = DecoratorOption::get(self::CURRENT_DOMAIN, ManipulateArray::get($this->wiqumkmqkqoycqyi(), 0));
        goto myioiyiacgwyqgka;
        myioiyiacgwyqgka:
        oamyuqkoaokkoakc:
        goto sqeosuowqqmiygoe;
        oukamomweoyacmyy:
    }
    
    public function send($xeciwimgioieayek, $qiouiwasaauyaaue = [], $qgciuiagkkguykgs = "\147\145\164") : ?ResponseInterface
    {
        goto usiagamiyyiciywo;
        qgcqeawyaymwqmyu:
        $this->next();
        goto uasiwuwoekkugeoo;
        qokuwssowkeimwio:
        return $keccaugmemegoimu;
        goto eqgkmgqumukyyuyg;
        mmiuwggkkoukmcii:
        $keccaugmemegoimu = $this->send($xeciwimgioieayek, $qiouiwasaauyaaue, $qgciuiagkkguykgs);
        goto gykgossysqcskces;
        oeiacaimywgymucg:
        womemmoiqkyuyygi:
        goto qokuwssowkeimwio;
        memaegceciwcsuoe:
        qagceekoguwswkym:
        goto yucwgauyiuemgkoe;
        gykgossysqcskces:
        sqqgewuqsikkeoqc:
        goto oeiacaimywgymucg;
        usiagamiyyiciywo:
        if (!$this->yyqoaomsmcauuscg()) {
            goto qagceekoguwswkym;
        }
        goto qcceiumauoumwkas;
        yucwgauyiuemgkoe:
        $keccaugmemegoimu = parent::send($xeciwimgioieayek, $qiouiwasaauyaaue, $qgciuiagkkguykgs);
        goto iueewwccugsweuau;
        qqguqmkumwouusqg:
        goto womemmoiqkyuyygi;
        goto memaegceciwcsuoe;
        uasiwuwoekkugeoo:
        sleep(2);
        goto mmiuwggkkoukmcii;
        qcceiumauoumwkas:
        $keccaugmemegoimu = null;
        goto qqguqmkumwouusqg;
        iueewwccugsweuau:
        if ($this->occymigcemkqucuw($keccaugmemegoimu, $iswcokucwmiosiaq)) {
            goto sqqgewuqsikkeoqc;
        }
        goto qgcqeawyaymwqmyu;
        eqgkmgqumukyyuyg:
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
