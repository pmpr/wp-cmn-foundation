<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b1e8aa0c03             |
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
        goto oceaukigiquccwqc;
        wuoswacwqaomucyy:
        $this->qcgocuceocquqcuw("\155\145\164\x68\x6f\144", "\120\117\123\x54");
        goto wcgcwuogksoquwqi;
        wcgcwuogksoquwqi:
        $this->submitText = __("\x53\x75\142\155\151\x74", PR__CMN__FOUNDATION);
        goto woeoaywcuomucous;
        oceaukigiquccwqc:
        $this->qigsyyqgewgskemg("\x6d\165\x6c\x74\151\55\163\164\x65\160\x2d\x66\162\x6f\x6d");
        goto ksoewgyacsmkosys;
        ksoewgyacsmkosys:
        parent::__construct("\x66\157\162\x6d", $aokagokqyuysuksm);
        goto wuoswacwqaomucyy;
        woeoaywcuomucous:
    }
    
    public function iiqoooqcakkaeyiw() : self
    {
        $this->qigsyyqgewgskemg("\x63\x6c\151\x63\153\x61\142\x6c\x65\x2d\163\x74\145\160\163");
        return $this;
    }
    
    public function suguoqqeycoiwcok(int $wyeyeaaekyoyimqu) : self
    {
        goto oumymkuewgimceee;
        soygaqucuckqqcmm:
        return $this;
        goto aeywmoqgcuseswei;
        mywyoygwagacogem:
        $this->igmaewykumgwoaoy("\x64\141\164\x61\55\163\x74\145\x70\x2d\163\164\x61\162\x74", $wyeyeaaekyoyimqu);
        goto iciqoswumcmciaee;
        iciqoswumcmciaee:
        kuuukskismmqqouo:
        goto soygaqucuckqqcmm;
        oumymkuewgimceee:
        if (!($wyeyeaaekyoyimqu > 1 && count($this->guiyusikssumecwk()) >= $wyeyeaaekyoyimqu)) {
            goto kuuukskismmqqouo;
        }
        goto mywyoygwagacogem;
        aeywmoqgcuseswei:
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
        return $this->iuygowkemiiwqmiw("\163\x74\145\160\163", ["\x66\x6f\x72\155" => $this, "\163\x74\x65\x70\163" => $this->guiyusikssumecwk(), "\163\x75\142\x6d\x69\x74\137\x74\145\170\x74" => $this->qoomaywwaswcaccu(), "\151\156\x76\x61\154\151\144\x5f\151\143\157\x6e" => IconFontawesomeInterface::ICON_CIRCLE_EXCLAMATION]);
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
        goto yisgywcsiseqyyom;
        wgqocuqcioqiyswo:
        muigciaagmcswyca:
        goto egigmseymumckcic;
        egigmseymumckcic:
        return $this;
        goto augiwimiiwysgskw;
        yisgywcsiseqyyom:
        foreach ($asuggasaseaacmqu as $wyeyeaaekyoyimqu) {
            $this->mgqggiyywoageqmo($wyeyeaaekyoyimqu);
            wcyiqkiescuegcoi:
        }
        goto wgqocuqcioqiyswo;
        augiwimiiwysgskw:
    }
    public function enqueue()
    {
        goto iqociqcwckcuscog;
        esmmaouksaiokiyy:
        $eygsasmqycagyayw->oeoquuwkoywiuesy($eygsasmqycagyayw->owygwqwawqoiusis($ymqmyyeuycgmigyo, $eygsasmqycagyayw->get("{$ymqmyyeuycgmigyo}\56\x6a\x73"))->ayuciigykaswwqeo("\152\161\x75\145\x72\x79"))->oeoquuwkoywiuesy($eygsasmqycagyayw->awgyqswkqywwmkye($ymqmyyeuycgmigyo, $eygsasmqycagyayw->get("{$ymqmyyeuycgmigyo}\56\x63\x73\163")));
        goto myiouycwyoswgygw;
        wysamwauuiqwgcmc:
        $ymqmyyeuycgmigyo = "\155\x75\x6c\164\x69\x73\164\x65\160";
        goto esmmaouksaiokiyy;
        iqociqcwckcuscog:
        $eygsasmqycagyayw = FormMaker::symcgieuakksimmu()->miocmcoykayoyyau();
        goto wysamwauuiqwgcmc;
        myiouycwyoswgygw:
    }
}
