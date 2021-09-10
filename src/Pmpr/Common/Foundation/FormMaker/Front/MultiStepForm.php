<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b30261f503             |
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
        goto wcgcwuogksoquwqi;
        oumymkuewgimceee:
        $this->submitText = __("\x53\x75\x62\x6d\x69\x74", PR__CMN__FOUNDATION);
        goto mywyoygwagacogem;
        woeoaywcuomucous:
        parent::__construct("\146\x6f\x72\x6d", $aokagokqyuysuksm);
        goto kuuukskismmqqouo;
        kuuukskismmqqouo:
        $this->qcgocuceocquqcuw("\155\145\x74\x68\157\144", "\120\x4f\x53\x54");
        goto oumymkuewgimceee;
        wcgcwuogksoquwqi:
        $this->qigsyyqgewgskemg("\x6d\x75\154\164\x69\x2d\163\164\x65\x70\x2d\x66\x72\157\x6d");
        goto woeoaywcuomucous;
        mywyoygwagacogem:
    }
    
    public function iiqoooqcakkaeyiw() : self
    {
        $this->qigsyyqgewgskemg("\143\154\151\143\x6b\x61\142\154\145\x2d\x73\164\145\160\163");
        return $this;
    }
    
    public function suguoqqeycoiwcok(int $wyeyeaaekyoyimqu) : self
    {
        goto soygaqucuckqqcmm;
        soygaqucuckqqcmm:
        if (!($wyeyeaaekyoyimqu > 1 && count($this->guiyusikssumecwk()) >= $wyeyeaaekyoyimqu)) {
            goto iciqoswumcmciaee;
        }
        goto aeywmoqgcuseswei;
        muigciaagmcswyca:
        iciqoswumcmciaee:
        goto wcyiqkiescuegcoi;
        aeywmoqgcuseswei:
        $this->igmaewykumgwoaoy("\x64\x61\164\141\55\x73\164\145\x70\x2d\x73\164\141\x72\164", $wyeyeaaekyoyimqu);
        goto muigciaagmcswyca;
        wcyiqkiescuegcoi:
        return $this;
        goto yisgywcsiseqyyom;
        yisgywcsiseqyyom:
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
        return $this->iuygowkemiiwqmiw("\163\164\x65\160\x73", ["\146\157\x72\155" => $this, "\x73\x74\x65\160\x73" => $this->guiyusikssumecwk(), "\163\x75\x62\x6d\x69\164\137\164\145\x78\164" => $this->qoomaywwaswcaccu(), "\151\x6e\x76\x61\154\x69\144\137\151\143\157\156" => IconFontawesomeInterface::ICON_CIRCLE_EXCLAMATION]);
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
        goto augiwimiiwysgskw;
        iqociqcwckcuscog:
        wgqocuqcioqiyswo:
        goto wysamwauuiqwgcmc;
        wysamwauuiqwgcmc:
        return $this;
        goto esmmaouksaiokiyy;
        augiwimiiwysgskw:
        foreach ($asuggasaseaacmqu as $wyeyeaaekyoyimqu) {
            $this->mgqggiyywoageqmo($wyeyeaaekyoyimqu);
            egigmseymumckcic:
        }
        goto iqociqcwckcuscog;
        esmmaouksaiokiyy:
    }
    public function enqueue()
    {
        goto myiouycwyoswgygw;
        gkikweskmwmeiaoa:
        $ymqmyyeuycgmigyo = "\x6d\165\154\164\151\x73\164\145\160";
        goto wyyuywaayugkgikw;
        wyyuywaayugkgikw:
        $eygsasmqycagyayw->oeoquuwkoywiuesy($eygsasmqycagyayw->owygwqwawqoiusis($ymqmyyeuycgmigyo, $eygsasmqycagyayw->get("{$ymqmyyeuycgmigyo}\56\152\x73"))->ayuciigykaswwqeo("\x6a\x71\x75\x65\162\171"))->oeoquuwkoywiuesy($eygsasmqycagyayw->awgyqswkqywwmkye($ymqmyyeuycgmigyo, $eygsasmqycagyayw->get("{$ymqmyyeuycgmigyo}\x2e\143\163\163")));
        goto aiwikwqscaegaewi;
        myiouycwyoswgygw:
        $eygsasmqycagyayw = FormMaker::symcgieuakksimmu()->miocmcoykayoyyau();
        goto gkikweskmwmeiaoa;
        aiwikwqscaegaewi:
    }
}
