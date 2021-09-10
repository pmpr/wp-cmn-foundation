<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b6c65a2d22             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\FormMaker\Front;

use Pmpr\Common\Foundation\FormMaker\FormMaker;
use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconFontawesomeInterface;

class MultiStepForm extends Element
{
    
    protected array $steps = [];
    
    protected ?string $submitText = null;
    
    public function __construct(string $aokagokqyuysuksm = null)
    {
        goto kuuukskismmqqouo;
        mywyoygwagacogem:
        $this->qcgocuceocquqcuw("\155\145\164\150\x6f\144", "\x50\x4f\123\124");
        goto iciqoswumcmciaee;
        oumymkuewgimceee:
        parent::__construct("\146\157\162\x6d", $aokagokqyuysuksm);
        goto mywyoygwagacogem;
        iciqoswumcmciaee:
        $this->submitText = __("\x53\x75\x62\x6d\151\164", PR__CMN__FOUNDATION);
        goto soygaqucuckqqcmm;
        kuuukskismmqqouo:
        $this->qigsyyqgewgskemg("\x6d\x75\154\x74\x69\55\x73\x74\x65\160\x2d\146\x72\x6f\x6d");
        goto oumymkuewgimceee;
        soygaqucuckqqcmm:
    }
    
    public function iiqoooqcakkaeyiw() : self
    {
        $this->qigsyyqgewgskemg("\143\x6c\x69\x63\x6b\141\x62\x6c\x65\55\163\x74\x65\160\163");
        return $this;
    }
    
    public function suguoqqeycoiwcok(int $wyeyeaaekyoyimqu) : self
    {
        goto muigciaagmcswyca;
        wgqocuqcioqiyswo:
        return $this;
        goto egigmseymumckcic;
        yisgywcsiseqyyom:
        aeywmoqgcuseswei:
        goto wgqocuqcioqiyswo;
        muigciaagmcswyca:
        if (!($wyeyeaaekyoyimqu > 1 && count($this->guiyusikssumecwk()) >= $wyeyeaaekyoyimqu)) {
            goto aeywmoqgcuseswei;
        }
        goto wcyiqkiescuegcoi;
        wcyiqkiescuegcoi:
        $this->igmaewykumgwoaoy("\144\141\x74\x61\55\x73\164\x65\160\55\x73\164\x61\162\164", $wyeyeaaekyoyimqu);
        goto yisgywcsiseqyyom;
        egigmseymumckcic:
    }
    
    public function qoomaywwaswcaccu() : ?string
    {
        return $this->submitText;
    }
    
    public function misaicooiwoaimmu(?string $skmckiwuuaoeqemm) : self
    {
        $this->submitText = $skmckiwuuaoeqemm;
        return $this;
    }
    
    public function souwykwwmyygqyqi() : ?string
    {
        return $this->iuygowkemiiwqmiw("\163\164\x65\x70\x73", ["\x66\157\x72\155" => $this, "\163\164\145\160\163" => $this->guiyusikssumecwk(), "\x73\165\142\x6d\151\164\x5f\x74\x65\x78\164" => $this->qoomaywwaswcaccu(), "\x69\156\166\141\x6c\x69\144\x5f\151\x63\x6f\156" => IconFontawesomeInterface::ICON_CIRCLE_EXCLAMATION]);
    }
    
    public function wmoeeiseqeecugmu() : bool
    {
        return !empty($this->steps);
    }
    
    public function guiyusikssumecwk() : array
    {
        return $this->steps;
    }
    
    public function mgqggiyywoageqmo(Step $wyeyeaaekyoyimqu) : self
    {
        $this->steps[$wyeyeaaekyoyimqu->mwikyscisascoeea()] = $wyeyeaaekyoyimqu;
        return $this;
    }
    
    public function maoomkygegkowemi(array $asuggasaseaacmqu) : self
    {
        goto wysamwauuiqwgcmc;
        myiouycwyoswgygw:
        return $this;
        goto gkikweskmwmeiaoa;
        esmmaouksaiokiyy:
        augiwimiiwysgskw:
        goto myiouycwyoswgygw;
        wysamwauuiqwgcmc:
        foreach ($asuggasaseaacmqu as $wyeyeaaekyoyimqu) {
            $this->mgqggiyywoageqmo($wyeyeaaekyoyimqu);
            iqociqcwckcuscog:
        }
        goto esmmaouksaiokiyy;
        gkikweskmwmeiaoa:
    }
    public function enqueue()
    {
        goto wyyuywaayugkgikw;
        aiwikwqscaegaewi:
        $ymqmyyeuycgmigyo = "\155\x75\x6c\x74\151\163\164\145\160";
        goto eewoqsggiasaygku;
        wyyuywaayugkgikw:
        $eygsasmqycagyayw = FormMaker::symcgieuakksimmu()->miocmcoykayoyyau();
        goto aiwikwqscaegaewi;
        eewoqsggiasaygku:
        $eygsasmqycagyayw->oeoquuwkoywiuesy($eygsasmqycagyayw->owygwqwawqoiusis($ymqmyyeuycgmigyo, $eygsasmqycagyayw->get("{$ymqmyyeuycgmigyo}\56\152\163"))->ayuciigykaswwqeo("\152\161\165\145\x72\171"))->oeoquuwkoywiuesy($eygsasmqycagyayw->awgyqswkqywwmkye($ymqmyyeuycgmigyo, $eygsasmqycagyayw->get("{$ymqmyyeuycgmigyo}\56\143\163\163")));
        goto cqasaekogukkaawi;
        cqasaekogukkaawi:
    }
}
