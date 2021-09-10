<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b3993be3fb             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\API;

use Pmpr\Common\Foundation\Decorator\DecoratorOption;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;
use Psr\Http\Message\ResponseInterface;

class Cartridge extends API
{
    const CURRENT_DOMAIN = "\x61\160\151\137\143\165\162\x72\145\x6e\x74\137\144\157\155\141\151\x6e";
    const LOCK_REQUEST_TRANSIENT = "\141\160\151\x5f\x6c\157\x63\x6b\x5f\162\x65\161\x75\145\x73\x74\x5f\164\162\x61\156\163\151\145\156\164";
    
    protected array $domains = [];
    
    public function __construct()
    {
        $this->kesomeowemmyygey("\x74\x69\x6d\145\x6f\165\x74", false);
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
        myiuomaaisokucsu:
        $mokawwccycoiqeka = ManipulateArray::get($wqogggcaamgeiwew, intval($momcykaoccoymeig) + 1);
        goto akiqygykgeusywsc;
        isikkmukiimiqoie:
        if (!$mokawwccycoiqeka) {
            goto gyseesgwqekccuqm;
        }
        goto iiyqieuwqywsuwie;
        iiyqieuwqywsuwie:
        $wqogggcaamgeiwew = $this->wiqumkmqkqoycqyi();
        goto keewyswqkywqwiig;
        ymoeogqiyigaaqwa:
        
        set_transient(self::LOCK_REQUEST_TRANSIENT, 1, MINUTE_IN_SECONDS * 2);
        goto wqecaeewcikcakce;
        wqecaeewcikcakce:
        DecoratorOption::delete(self::CURRENT_DOMAIN);
        goto qoecqiuqgykayeau;
        keewyswqkywqwiig:
        $this->ucuoiawgsicougqu($mokawwccycoiqeka);
        goto uiooaaskesmueuci;
        kykkokesucsumwye:
        aqmgmaaomqqwswos:
        goto yqyokmiiywkykgkw;
        ikcygyysmcswyoew:
        $mokawwccycoiqeka = $this->wwawisckiqeueoua();
        goto isikkmukiimiqoie;
        ieemwgoqewsyowsa:
        gyseesgwqekccuqm:
        goto simyiqmsauwogeke;
        kgyegeweeukkoaso:
        cywoauacmosaisie:
        goto ieemwgoqewsyowsa;
        mgiuikekqwwecquo:
        $this->gyuwiwqqyesiekag($mokawwccycoiqeka);
        goto kgyegeweeukkoaso;
        akiqygykgeusywsc:
        if ($mokawwccycoiqeka) {
            goto aqmgmaaomqqwswos;
        }
        goto koaywkwgumwauyce;
        qoecqiuqgykayeau:
        goto cywoauacmosaisie;
        goto kykkokesucsumwye;
        simyiqmsauwogeke:
        return $this;
        goto gcoiayyaeggagsam;
        koaywkwgumwauyce:
        $this->saqqeqmcyyoeqici("\x43\141\x72\x74\162\151\x64\x67\x65\40\x61\160\x69\x20\x6c\157\143\x6b\x65\144\x20\146\x6f\x72\40\156\x65\x78\164\40\x32\60\40\155\x69\x6e\165\164\145\163\x2e");
        goto ymoeogqiyigaaqwa;
        uiooaaskesmueuci:
        $momcykaoccoymeig = array_search($mokawwccycoiqeka, $wqogggcaamgeiwew);
        goto myiuomaaisokucsu;
        yqyokmiiywkykgkw:
        DecoratorOption::update(self::CURRENT_DOMAIN, $mokawwccycoiqeka);
        goto mgiuikekqwwecquo;
        gcoiayyaeggagsam:
    }
    
    public function wwawisckiqeueoua() : ?string
    {
        goto cqkeokockswukacw;
        imkouaauqmwgkygg:
        $yeacayasgueouoqc = DecoratorOption::get(self::CURRENT_DOMAIN, ManipulateArray::get($this->wiqumkmqkqoycqyi(), 0));
        goto eyqgkouukusouyuo;
        eyqgkouukusouyuo:
        yqsamggueqgeoscy:
        goto kwsiqmqimiymeoog;
        cqkeokockswukacw:
        $yeacayasgueouoqc = null;
        goto giugammuqoewuoyc;
        kwsiqmqimiymeoog:
        return $yeacayasgueouoqc;
        goto ewgqmcceqiquyyee;
        giugammuqoewuoyc:
        if ($this->yyqoaomsmcauuscg()) {
            goto yqsamggueqgeoscy;
        }
        goto imkouaauqmwgkygg;
        ewgqmcceqiquyyee:
    }
    
    public function send($xeciwimgioieayek, $qiouiwasaauyaaue = [], $qgciuiagkkguykgs = "\x67\x65\164") : ?ResponseInterface
    {
        goto sygeyoyqkigmaqcy;
        koousagcuqiyeogw:
        sleep(2);
        goto yiuqimuyesqegyym;
        aowogueuuaoissso:
        goto kkkaqoyswqieiwki;
        goto wgecgiiowkogkymc;
        gmowaimiewisgwam:
        kkkaqoyswqieiwki:
        goto gyuwokmaygmksmow;
        yikkososcyoeiccm:
        if ($this->occymigcemkqucuw($keccaugmemegoimu, $iswcokucwmiosiaq)) {
            goto kisaauwmeykgqgqm;
        }
        goto ocysuimysygiwaca;
        ocysuimysygiwaca:
        $this->next();
        goto koousagcuqiyeogw;
        kuiqqcsmccogwkii:
        $keccaugmemegoimu = null;
        goto aowogueuuaoissso;
        cceeiumiqwqcumwm:
        $keccaugmemegoimu = parent::send($xeciwimgioieayek, $qiouiwasaauyaaue, $qgciuiagkkguykgs);
        goto yikkososcyoeiccm;
        sygeyoyqkigmaqcy:
        if (!$this->yyqoaomsmcauuscg()) {
            goto okkeywoaaumimwag;
        }
        goto kuiqqcsmccogwkii;
        wgecgiiowkogkymc:
        okkeywoaaumimwag:
        goto cceeiumiqwqcumwm;
        cyegcyuoeqoeuwea:
        kisaauwmeykgqgqm:
        goto gmowaimiewisgwam;
        gyuwokmaygmksmow:
        return $keccaugmemegoimu;
        goto keakqecogkuocqcw;
        yiuqimuyesqegyym:
        $keccaugmemegoimu = $this->send($xeciwimgioieayek, $qiouiwasaauyaaue, $qgciuiagkkguykgs);
        goto cyegcyuoeqoeuwea;
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
