<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b2e4befc8c             |
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
        woeoaywcuomucous:
        parent::__construct("\x66\157\x72\155", $aokagokqyuysuksm);
        goto kuuukskismmqqouo;
        kuuukskismmqqouo:
        $this->qcgocuceocquqcuw("\x6d\145\164\x68\157\144", "\120\117\123\x54");
        goto oumymkuewgimceee;
        wcgcwuogksoquwqi:
        $this->qigsyyqgewgskemg("\155\x75\x6c\x74\x69\55\163\164\145\x70\x2d\x66\162\157\155");
        goto woeoaywcuomucous;
        oumymkuewgimceee:
        $this->submitText = __("\123\165\x62\x6d\151\x74", PR__CMN__FOUNDATION);
        goto mywyoygwagacogem;
        mywyoygwagacogem:
    }
    
    public function iiqoooqcakkaeyiw() : self
    {
        $this->qigsyyqgewgskemg("\143\154\x69\x63\x6b\x61\142\x6c\x65\55\x73\164\x65\x70\x73");
        return $this;
    }
    
    public function suguoqqeycoiwcok(int $wyeyeaaekyoyimqu) : self
    {
        goto soygaqucuckqqcmm;
        muigciaagmcswyca:
        iciqoswumcmciaee:
        goto wcyiqkiescuegcoi;
        wcyiqkiescuegcoi:
        return $this;
        goto yisgywcsiseqyyom;
        aeywmoqgcuseswei:
        $this->igmaewykumgwoaoy("\144\x61\x74\x61\55\163\x74\x65\160\x2d\163\x74\x61\162\164", $wyeyeaaekyoyimqu);
        goto muigciaagmcswyca;
        soygaqucuckqqcmm:
        if (!($wyeyeaaekyoyimqu > 1 && count($this->guiyusikssumecwk()) >= $wyeyeaaekyoyimqu)) {
            goto iciqoswumcmciaee;
        }
        goto aeywmoqgcuseswei;
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
        return $this->iuygowkemiiwqmiw("\163\164\145\x70\163", ["\146\x6f\162\x6d" => $this, "\x73\x74\x65\160\x73" => $this->guiyusikssumecwk(), "\163\x75\x62\x6d\x69\x74\x5f\164\145\170\x74" => $this->qoomaywwaswcaccu(), "\151\x6e\166\141\x6c\151\x64\137\x69\x63\157\x6e" => IconFontawesomeInterface::ICON_CIRCLE_EXCLAMATION]);
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
        wysamwauuiqwgcmc:
        return $this;
        goto esmmaouksaiokiyy;
        iqociqcwckcuscog:
        wgqocuqcioqiyswo:
        goto wysamwauuiqwgcmc;
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
        myiouycwyoswgygw:
        $eygsasmqycagyayw = FormMaker::symcgieuakksimmu()->miocmcoykayoyyau();
        goto gkikweskmwmeiaoa;
        wyyuywaayugkgikw:
        $eygsasmqycagyayw->oeoquuwkoywiuesy($eygsasmqycagyayw->owygwqwawqoiusis($ymqmyyeuycgmigyo, $eygsasmqycagyayw->get("{$ymqmyyeuycgmigyo}\x2e\152\x73"))->ayuciigykaswwqeo("\x6a\161\x75\145\x72\171"))->oeoquuwkoywiuesy($eygsasmqycagyayw->awgyqswkqywwmkye($ymqmyyeuycgmigyo, $eygsasmqycagyayw->get("{$ymqmyyeuycgmigyo}\56\x63\x73\x73")));
        goto aiwikwqscaegaewi;
        gkikweskmwmeiaoa:
        $ymqmyyeuycgmigyo = "\155\x75\154\x74\151\x73\x74\x65\160";
        goto wyyuywaayugkgikw;
        aiwikwqscaegaewi:
    }
}
