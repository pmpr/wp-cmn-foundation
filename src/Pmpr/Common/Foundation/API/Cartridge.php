<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b6c65a2d22             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\API;

use Pmpr\Common\Foundation\Decorator\DecoratorOption;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;
use Psr\Http\Message\ResponseInterface;

class Cartridge extends API
{
    const CURRENT_DOMAIN = "\141\x70\151\137\143\165\x72\x72\x65\156\164\137\144\157\x6d\x61\x69\x6e";
    const LOCK_REQUEST_TRANSIENT = "\141\x70\151\137\154\x6f\x63\x6b\137\162\x65\161\165\145\x73\x74\x5f\164\162\141\156\x73\x69\x65\x6e\164";
    
    protected array $domains = [];
    
    public function __construct()
    {
        $this->kesomeowemmyygey("\164\151\155\145\x6f\x75\x74", false);
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
        goto isikkmukiimiqoie;
        iiyqieuwqywsuwie:
        if (!$mokawwccycoiqeka) {
            goto ikcygyysmcswyoew;
        }
        goto keewyswqkywqwiig;
        keewyswqkywqwiig:
        $wqogggcaamgeiwew = $this->wiqumkmqkqoycqyi();
        goto uiooaaskesmueuci;
        uiooaaskesmueuci:
        $this->ucuoiawgsicougqu($mokawwccycoiqeka);
        goto myiuomaaisokucsu;
        yqyokmiiywkykgkw:
        cywoauacmosaisie:
        goto mgiuikekqwwecquo;
        mgiuikekqwwecquo:
        DecoratorOption::update(self::CURRENT_DOMAIN, $mokawwccycoiqeka);
        goto kgyegeweeukkoaso;
        koaywkwgumwauyce:
        if ($mokawwccycoiqeka) {
            goto cywoauacmosaisie;
        }
        goto ymoeogqiyigaaqwa;
        isikkmukiimiqoie:
        $mokawwccycoiqeka = $this->wwawisckiqeueoua();
        goto iiyqieuwqywsuwie;
        ymoeogqiyigaaqwa:
        $this->saqqeqmcyyoeqici("\x43\x61\162\x74\162\151\144\147\145\40\141\160\151\40\x6c\157\143\153\145\144\40\146\157\162\40\x6e\145\170\164\40\x32\60\x20\155\151\x6e\x75\164\x65\x73\x2e");
        goto wqecaeewcikcakce;
        akiqygykgeusywsc:
        $mokawwccycoiqeka = ManipulateArray::get($wqogggcaamgeiwew, intval($momcykaoccoymeig) + 1);
        goto koaywkwgumwauyce;
        kykkokesucsumwye:
        goto gyseesgwqekccuqm;
        goto yqyokmiiywkykgkw;
        myiuomaaisokucsu:
        $momcykaoccoymeig = array_search($mokawwccycoiqeka, $wqogggcaamgeiwew);
        goto akiqygykgeusywsc;
        ieemwgoqewsyowsa:
        gyseesgwqekccuqm:
        goto simyiqmsauwogeke;
        kgyegeweeukkoaso:
        $this->gyuwiwqqyesiekag($mokawwccycoiqeka);
        goto ieemwgoqewsyowsa;
        wqecaeewcikcakce:
        
        set_transient(self::LOCK_REQUEST_TRANSIENT, 1, MINUTE_IN_SECONDS * 2);
        goto qoecqiuqgykayeau;
        gcoiayyaeggagsam:
        return $this;
        goto yqsamggueqgeoscy;
        qoecqiuqgykayeau:
        DecoratorOption::delete(self::CURRENT_DOMAIN);
        goto kykkokesucsumwye;
        simyiqmsauwogeke:
        ikcygyysmcswyoew:
        goto gcoiayyaeggagsam;
        yqsamggueqgeoscy:
    }
    
    public function wwawisckiqeueoua() : ?string
    {
        goto giugammuqoewuoyc;
        kwsiqmqimiymeoog:
        cqkeokockswukacw:
        goto ewgqmcceqiquyyee;
        imkouaauqmwgkygg:
        if ($this->yyqoaomsmcauuscg()) {
            goto cqkeokockswukacw;
        }
        goto eyqgkouukusouyuo;
        ewgqmcceqiquyyee:
        return $yeacayasgueouoqc;
        goto kisaauwmeykgqgqm;
        eyqgkouukusouyuo:
        $yeacayasgueouoqc = DecoratorOption::get(self::CURRENT_DOMAIN, ManipulateArray::get($this->wiqumkmqkqoycqyi(), 0));
        goto kwsiqmqimiymeoog;
        giugammuqoewuoyc:
        $yeacayasgueouoqc = null;
        goto imkouaauqmwgkygg;
        kisaauwmeykgqgqm:
    }
    
    public function send($xeciwimgioieayek, $qiouiwasaauyaaue = [], $qgciuiagkkguykgs = "\147\145\164") : ?ResponseInterface
    {
        goto kuiqqcsmccogwkii;
        cyegcyuoeqoeuwea:
        $keccaugmemegoimu = $this->send($xeciwimgioieayek, $qiouiwasaauyaaue, $qgciuiagkkguykgs);
        goto gmowaimiewisgwam;
        ocysuimysygiwaca:
        if ($this->occymigcemkqucuw($keccaugmemegoimu, $iswcokucwmiosiaq)) {
            goto okkeywoaaumimwag;
        }
        goto koousagcuqiyeogw;
        gmowaimiewisgwam:
        okkeywoaaumimwag:
        goto gyuwokmaygmksmow;
        kuiqqcsmccogwkii:
        if (!$this->yyqoaomsmcauuscg()) {
            goto kkkaqoyswqieiwki;
        }
        goto aowogueuuaoissso;
        aowogueuuaoissso:
        $keccaugmemegoimu = null;
        goto wgecgiiowkogkymc;
        keakqecogkuocqcw:
        return $keccaugmemegoimu;
        goto cgcmcsgeeoecumwq;
        cceeiumiqwqcumwm:
        kkkaqoyswqieiwki:
        goto yikkososcyoeiccm;
        yikkososcyoeiccm:
        $keccaugmemegoimu = parent::send($xeciwimgioieayek, $qiouiwasaauyaaue, $qgciuiagkkguykgs);
        goto ocysuimysygiwaca;
        koousagcuqiyeogw:
        $this->next();
        goto yiuqimuyesqegyym;
        gyuwokmaygmksmow:
        sygeyoyqkigmaqcy:
        goto keakqecogkuocqcw;
        yiuqimuyesqegyym:
        sleep(2);
        goto cyegcyuoeqoeuwea;
        wgecgiiowkogkymc:
        goto sygeyoyqkigmaqcy;
        goto cceeiumiqwqcumwm;
        cgcmcsgeeoecumwq:
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
