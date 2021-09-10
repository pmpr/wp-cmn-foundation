<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b5973b89a9             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\API;

use Pmpr\Common\Foundation\Decorator\DecoratorOption;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;
use Psr\Http\Message\ResponseInterface;

class Cartridge extends API
{
    const CURRENT_DOMAIN = "\141\160\151\x5f\x63\x75\162\162\145\156\x74\x5f\x64\x6f\155\x61\x69\156";
    const LOCK_REQUEST_TRANSIENT = "\x61\160\151\x5f\154\x6f\x63\x6b\137\x72\145\x71\x75\145\x73\164\x5f\x74\162\x61\x6e\x73\x69\x65\156\x74";
    
    protected array $domains = [];
    
    public function __construct()
    {
        $this->kesomeowemmyygey("\x74\151\x6d\x65\157\165\x74", false);
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
        kykkokesucsumwye:
        aqmgmaaomqqwswos:
        goto yqyokmiiywkykgkw;
        simyiqmsauwogeke:
        return $this;
        goto gcoiayyaeggagsam;
        isikkmukiimiqoie:
        if (!$mokawwccycoiqeka) {
            goto gyseesgwqekccuqm;
        }
        goto iiyqieuwqywsuwie;
        keewyswqkywqwiig:
        $this->ucuoiawgsicougqu($mokawwccycoiqeka);
        goto uiooaaskesmueuci;
        ieemwgoqewsyowsa:
        gyseesgwqekccuqm:
        goto simyiqmsauwogeke;
        akiqygykgeusywsc:
        if ($mokawwccycoiqeka) {
            goto aqmgmaaomqqwswos;
        }
        goto koaywkwgumwauyce;
        uiooaaskesmueuci:
        $momcykaoccoymeig = array_search($mokawwccycoiqeka, $wqogggcaamgeiwew);
        goto myiuomaaisokucsu;
        ikcygyysmcswyoew:
        $mokawwccycoiqeka = $this->wwawisckiqeueoua();
        goto isikkmukiimiqoie;
        kgyegeweeukkoaso:
        cywoauacmosaisie:
        goto ieemwgoqewsyowsa;
        iiyqieuwqywsuwie:
        $wqogggcaamgeiwew = $this->wiqumkmqkqoycqyi();
        goto keewyswqkywqwiig;
        yqyokmiiywkykgkw:
        DecoratorOption::update(self::CURRENT_DOMAIN, $mokawwccycoiqeka);
        goto mgiuikekqwwecquo;
        myiuomaaisokucsu:
        $mokawwccycoiqeka = ManipulateArray::get($wqogggcaamgeiwew, intval($momcykaoccoymeig) + 1);
        goto akiqygykgeusywsc;
        wqecaeewcikcakce:
        DecoratorOption::delete(self::CURRENT_DOMAIN);
        goto qoecqiuqgykayeau;
        ymoeogqiyigaaqwa:
        
        set_transient(self::LOCK_REQUEST_TRANSIENT, 1, MINUTE_IN_SECONDS * 2);
        goto wqecaeewcikcakce;
        koaywkwgumwauyce:
        $this->saqqeqmcyyoeqici("\103\141\x72\x74\162\x69\x64\x67\x65\x20\141\160\x69\40\x6c\157\143\x6b\145\x64\40\146\157\x72\40\156\x65\170\x74\x20\x32\60\40\x6d\151\x6e\165\164\145\163\56");
        goto ymoeogqiyigaaqwa;
        qoecqiuqgykayeau:
        goto cywoauacmosaisie;
        goto kykkokesucsumwye;
        mgiuikekqwwecquo:
        $this->gyuwiwqqyesiekag($mokawwccycoiqeka);
        goto kgyegeweeukkoaso;
        gcoiayyaeggagsam:
    }
    
    public function wwawisckiqeueoua() : ?string
    {
        goto cqkeokockswukacw;
        kwsiqmqimiymeoog:
        return $yeacayasgueouoqc;
        goto ewgqmcceqiquyyee;
        giugammuqoewuoyc:
        if ($this->yyqoaomsmcauuscg()) {
            goto yqsamggueqgeoscy;
        }
        goto imkouaauqmwgkygg;
        cqkeokockswukacw:
        $yeacayasgueouoqc = null;
        goto giugammuqoewuoyc;
        eyqgkouukusouyuo:
        yqsamggueqgeoscy:
        goto kwsiqmqimiymeoog;
        imkouaauqmwgkygg:
        $yeacayasgueouoqc = DecoratorOption::get(self::CURRENT_DOMAIN, ManipulateArray::get($this->wiqumkmqkqoycqyi(), 0));
        goto eyqgkouukusouyuo;
        ewgqmcceqiquyyee:
    }
    
    public function send($xeciwimgioieayek, $qiouiwasaauyaaue = [], $qgciuiagkkguykgs = "\x67\145\164") : ?ResponseInterface
    {
        goto sygeyoyqkigmaqcy;
        wgecgiiowkogkymc:
        okkeywoaaumimwag:
        goto cceeiumiqwqcumwm;
        gyuwokmaygmksmow:
        return $keccaugmemegoimu;
        goto keakqecogkuocqcw;
        yiuqimuyesqegyym:
        $keccaugmemegoimu = $this->send($xeciwimgioieayek, $qiouiwasaauyaaue, $qgciuiagkkguykgs);
        goto cyegcyuoeqoeuwea;
        gmowaimiewisgwam:
        kkkaqoyswqieiwki:
        goto gyuwokmaygmksmow;
        kuiqqcsmccogwkii:
        $keccaugmemegoimu = null;
        goto aowogueuuaoissso;
        aowogueuuaoissso:
        goto kkkaqoyswqieiwki;
        goto wgecgiiowkogkymc;
        sygeyoyqkigmaqcy:
        if (!$this->yyqoaomsmcauuscg()) {
            goto okkeywoaaumimwag;
        }
        goto kuiqqcsmccogwkii;
        cyegcyuoeqoeuwea:
        kisaauwmeykgqgqm:
        goto gmowaimiewisgwam;
        ocysuimysygiwaca:
        $this->next();
        goto koousagcuqiyeogw;
        yikkososcyoeiccm:
        if ($this->occymigcemkqucuw($keccaugmemegoimu, $iswcokucwmiosiaq)) {
            goto kisaauwmeykgqgqm;
        }
        goto ocysuimysygiwaca;
        koousagcuqiyeogw:
        sleep(2);
        goto yiuqimuyesqegyym;
        cceeiumiqwqcumwm:
        $keccaugmemegoimu = parent::send($xeciwimgioieayek, $qiouiwasaauyaaue, $qgciuiagkkguykgs);
        goto yikkososcyoeiccm;
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
