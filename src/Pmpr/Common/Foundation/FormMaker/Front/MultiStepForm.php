<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b3993be3fb             |
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
        goto woeoaywcuomucous;
        oumymkuewgimceee:
        $this->qcgocuceocquqcuw("\155\x65\x74\150\x6f\144", "\x50\117\123\x54");
        goto mywyoygwagacogem;
        woeoaywcuomucous:
        $this->qigsyyqgewgskemg("\155\165\x6c\164\151\x2d\x73\164\145\x70\55\146\162\x6f\155");
        goto kuuukskismmqqouo;
        kuuukskismmqqouo:
        parent::__construct("\x66\157\x72\155", $aokagokqyuysuksm);
        goto oumymkuewgimceee;
        mywyoygwagacogem:
        $this->submitText = __("\x53\165\142\x6d\x69\164", PR__CMN__FOUNDATION);
        goto iciqoswumcmciaee;
        iciqoswumcmciaee:
    }
    
    public function iiqoooqcakkaeyiw() : self
    {
        $this->qigsyyqgewgskemg("\143\x6c\x69\x63\153\x61\142\154\x65\55\163\164\145\x70\163");
        return $this;
    }
    
    public function suguoqqeycoiwcok(int $wyeyeaaekyoyimqu) : self
    {
        goto aeywmoqgcuseswei;
        yisgywcsiseqyyom:
        return $this;
        goto wgqocuqcioqiyswo;
        aeywmoqgcuseswei:
        if (!($wyeyeaaekyoyimqu > 1 && count($this->guiyusikssumecwk()) >= $wyeyeaaekyoyimqu)) {
            goto soygaqucuckqqcmm;
        }
        goto muigciaagmcswyca;
        muigciaagmcswyca:
        $this->igmaewykumgwoaoy("\x64\x61\x74\141\55\163\x74\145\160\55\163\164\141\162\x74", $wyeyeaaekyoyimqu);
        goto wcyiqkiescuegcoi;
        wcyiqkiescuegcoi:
        soygaqucuckqqcmm:
        goto yisgywcsiseqyyom;
        wgqocuqcioqiyswo:
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
        return $this->iuygowkemiiwqmiw("\163\164\x65\x70\x73", ["\146\x6f\162\155" => $this, "\163\x74\145\x70\163" => $this->guiyusikssumecwk(), "\163\165\x62\x6d\151\x74\137\164\x65\170\x74" => $this->qoomaywwaswcaccu(), "\x69\x6e\x76\141\154\x69\144\x5f\151\143\157\x6e" => IconFontawesomeInterface::ICON_CIRCLE_EXCLAMATION]);
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
        goto iqociqcwckcuscog;
        iqociqcwckcuscog:
        foreach ($asuggasaseaacmqu as $wyeyeaaekyoyimqu) {
            $this->mgqggiyywoageqmo($wyeyeaaekyoyimqu);
            augiwimiiwysgskw:
        }
        goto wysamwauuiqwgcmc;
        esmmaouksaiokiyy:
        return $this;
        goto myiouycwyoswgygw;
        wysamwauuiqwgcmc:
        egigmseymumckcic:
        goto esmmaouksaiokiyy;
        myiouycwyoswgygw:
    }
    public function enqueue()
    {
        goto gkikweskmwmeiaoa;
        gkikweskmwmeiaoa:
        $eygsasmqycagyayw = FormMaker::symcgieuakksimmu()->miocmcoykayoyyau();
        goto wyyuywaayugkgikw;
        wyyuywaayugkgikw:
        $ymqmyyeuycgmigyo = "\x6d\x75\154\164\x69\163\x74\145\160";
        goto aiwikwqscaegaewi;
        aiwikwqscaegaewi:
        $eygsasmqycagyayw->oeoquuwkoywiuesy($eygsasmqycagyayw->owygwqwawqoiusis($ymqmyyeuycgmigyo, $eygsasmqycagyayw->get("{$ymqmyyeuycgmigyo}\56\152\x73"))->ayuciigykaswwqeo("\x6a\161\x75\x65\x72\x79"))->oeoquuwkoywiuesy($eygsasmqycagyayw->awgyqswkqywwmkye($ymqmyyeuycgmigyo, $eygsasmqycagyayw->get("{$ymqmyyeuycgmigyo}\x2e\143\x73\163")));
        goto eewoqsggiasaygku;
        eewoqsggiasaygku:
    }
}
