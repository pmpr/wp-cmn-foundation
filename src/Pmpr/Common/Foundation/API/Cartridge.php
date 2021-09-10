<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b499786a1b             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\API;

use Pmpr\Common\Foundation\Decorator\DecoratorOption;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;
use Psr\Http\Message\ResponseInterface;

class Cartridge extends API
{
    const CURRENT_DOMAIN = "\x61\x70\151\137\x63\165\x72\162\145\x6e\164\x5f\x64\x6f\x6d\141\x69\156";
    const LOCK_REQUEST_TRANSIENT = "\x61\x70\151\137\x6c\157\143\153\137\x72\x65\161\x75\x65\163\x74\137\164\162\x61\x6e\163\x69\145\x6e\x74";
    
    protected array $domains = [];
    
    public function __construct()
    {
        $this->kesomeowemmyygey("\x74\151\155\x65\x6f\x75\164", false);
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
        goto ikcygyysmcswyoew;
        mgiuikekqwwecquo:
        $this->gyuwiwqqyesiekag($mokawwccycoiqeka);
        goto kgyegeweeukkoaso;
        wqecaeewcikcakce:
        DecoratorOption::delete(self::CURRENT_DOMAIN);
        goto qoecqiuqgykayeau;
        keewyswqkywqwiig:
        $this->ucuoiawgsicougqu($mokawwccycoiqeka);
        goto uiooaaskesmueuci;
        qoecqiuqgykayeau:
        goto cywoauacmosaisie;
        goto kykkokesucsumwye;
        ymoeogqiyigaaqwa:
        
        set_transient(self::LOCK_REQUEST_TRANSIENT, 1, MINUTE_IN_SECONDS * 2);
        goto wqecaeewcikcakce;
        kgyegeweeukkoaso:
        cywoauacmosaisie:
        goto ieemwgoqewsyowsa;
        koaywkwgumwauyce:
        $this->saqqeqmcyyoeqici("\103\x61\162\x74\162\x69\144\147\145\x20\x61\x70\151\40\154\157\143\153\145\144\40\x66\157\x72\x20\x6e\145\170\x74\x20\x32\60\40\155\x69\x6e\165\x74\x65\x73\56");
        goto ymoeogqiyigaaqwa;
        iiyqieuwqywsuwie:
        $wqogggcaamgeiwew = $this->wiqumkmqkqoycqyi();
        goto keewyswqkywqwiig;
        akiqygykgeusywsc:
        if ($mokawwccycoiqeka) {
            goto aqmgmaaomqqwswos;
        }
        goto koaywkwgumwauyce;
        uiooaaskesmueuci:
        $momcykaoccoymeig = array_search($mokawwccycoiqeka, $wqogggcaamgeiwew);
        goto myiuomaaisokucsu;
        simyiqmsauwogeke:
        return $this;
        goto gcoiayyaeggagsam;
        yqyokmiiywkykgkw:
        DecoratorOption::update(self::CURRENT_DOMAIN, $mokawwccycoiqeka);
        goto mgiuikekqwwecquo;
        ikcygyysmcswyoew:
        $mokawwccycoiqeka = $this->wwawisckiqeueoua();
        goto isikkmukiimiqoie;
        kykkokesucsumwye:
        aqmgmaaomqqwswos:
        goto yqyokmiiywkykgkw;
        ieemwgoqewsyowsa:
        gyseesgwqekccuqm:
        goto simyiqmsauwogeke;
        isikkmukiimiqoie:
        if (!$mokawwccycoiqeka) {
            goto gyseesgwqekccuqm;
        }
        goto iiyqieuwqywsuwie;
        myiuomaaisokucsu:
        $mokawwccycoiqeka = ManipulateArray::get($wqogggcaamgeiwew, intval($momcykaoccoymeig) + 1);
        goto akiqygykgeusywsc;
        gcoiayyaeggagsam:
    }
    
    public function wwawisckiqeueoua() : ?string
    {
        goto cqkeokockswukacw;
        kwsiqmqimiymeoog:
        return $yeacayasgueouoqc;
        goto ewgqmcceqiquyyee;
        imkouaauqmwgkygg:
        $yeacayasgueouoqc = DecoratorOption::get(self::CURRENT_DOMAIN, ManipulateArray::get($this->wiqumkmqkqoycqyi(), 0));
        goto eyqgkouukusouyuo;
        eyqgkouukusouyuo:
        yqsamggueqgeoscy:
        goto kwsiqmqimiymeoog;
        cqkeokockswukacw:
        $yeacayasgueouoqc = null;
        goto giugammuqoewuoyc;
        giugammuqoewuoyc:
        if ($this->yyqoaomsmcauuscg()) {
            goto yqsamggueqgeoscy;
        }
        goto imkouaauqmwgkygg;
        ewgqmcceqiquyyee:
    }
    
    public function send($xeciwimgioieayek, $qiouiwasaauyaaue = [], $qgciuiagkkguykgs = "\x67\x65\x74") : ?ResponseInterface
    {
        goto sygeyoyqkigmaqcy;
        aowogueuuaoissso:
        goto kkkaqoyswqieiwki;
        goto wgecgiiowkogkymc;
        yiuqimuyesqegyym:
        $keccaugmemegoimu = $this->send($xeciwimgioieayek, $qiouiwasaauyaaue, $qgciuiagkkguykgs);
        goto cyegcyuoeqoeuwea;
        gmowaimiewisgwam:
        kkkaqoyswqieiwki:
        goto gyuwokmaygmksmow;
        cceeiumiqwqcumwm:
        $keccaugmemegoimu = parent::send($xeciwimgioieayek, $qiouiwasaauyaaue, $qgciuiagkkguykgs);
        goto yikkososcyoeiccm;
        yikkososcyoeiccm:
        if ($this->occymigcemkqucuw($keccaugmemegoimu, $iswcokucwmiosiaq)) {
            goto kisaauwmeykgqgqm;
        }
        goto ocysuimysygiwaca;
        sygeyoyqkigmaqcy:
        if (!$this->yyqoaomsmcauuscg()) {
            goto okkeywoaaumimwag;
        }
        goto kuiqqcsmccogwkii;
        gyuwokmaygmksmow:
        return $keccaugmemegoimu;
        goto keakqecogkuocqcw;
        ocysuimysygiwaca:
        $this->next();
        goto koousagcuqiyeogw;
        cyegcyuoeqoeuwea:
        kisaauwmeykgqgqm:
        goto gmowaimiewisgwam;
        kuiqqcsmccogwkii:
        $keccaugmemegoimu = null;
        goto aowogueuuaoissso;
        wgecgiiowkogkymc:
        okkeywoaaumimwag:
        goto cceeiumiqwqcumwm;
        koousagcuqiyeogw:
        sleep(2);
        goto yiuqimuyesqegyym;
        keakqecogkuocqcw:
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
