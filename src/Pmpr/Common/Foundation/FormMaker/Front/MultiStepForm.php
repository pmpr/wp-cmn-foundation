<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b5973b89a9             |
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
        kuuukskismmqqouo:
        parent::__construct("\146\157\x72\155", $aokagokqyuysuksm);
        goto oumymkuewgimceee;
        mywyoygwagacogem:
        $this->submitText = __("\123\165\x62\155\151\164", PR__CMN__FOUNDATION);
        goto iciqoswumcmciaee;
        woeoaywcuomucous:
        $this->qigsyyqgewgskemg("\155\165\x6c\x74\x69\55\163\x74\145\x70\55\146\162\157\x6d");
        goto kuuukskismmqqouo;
        oumymkuewgimceee:
        $this->qcgocuceocquqcuw("\x6d\145\164\150\157\144", "\120\117\123\x54");
        goto mywyoygwagacogem;
        iciqoswumcmciaee:
    }
    
    public function iiqoooqcakkaeyiw() : self
    {
        $this->qigsyyqgewgskemg("\x63\154\x69\x63\x6b\141\x62\x6c\x65\x2d\163\164\145\x70\163");
        return $this;
    }
    
    public function suguoqqeycoiwcok(int $wyeyeaaekyoyimqu) : self
    {
        goto aeywmoqgcuseswei;
        wcyiqkiescuegcoi:
        soygaqucuckqqcmm:
        goto yisgywcsiseqyyom;
        yisgywcsiseqyyom:
        return $this;
        goto wgqocuqcioqiyswo;
        muigciaagmcswyca:
        $this->igmaewykumgwoaoy("\144\x61\x74\x61\x2d\x73\x74\x65\x70\55\163\x74\x61\162\164", $wyeyeaaekyoyimqu);
        goto wcyiqkiescuegcoi;
        aeywmoqgcuseswei:
        if (!($wyeyeaaekyoyimqu > 1 && count($this->guiyusikssumecwk()) >= $wyeyeaaekyoyimqu)) {
            goto soygaqucuckqqcmm;
        }
        goto muigciaagmcswyca;
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
        return $this->iuygowkemiiwqmiw("\163\x74\x65\x70\163", ["\x66\x6f\162\x6d" => $this, "\163\164\145\x70\163" => $this->guiyusikssumecwk(), "\x73\x75\x62\155\151\164\137\x74\x65\170\164" => $this->qoomaywwaswcaccu(), "\151\x6e\166\x61\x6c\151\x64\x5f\151\143\157\x6e" => IconFontawesomeInterface::ICON_CIRCLE_EXCLAMATION]);
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
        wysamwauuiqwgcmc:
        egigmseymumckcic:
        goto esmmaouksaiokiyy;
        esmmaouksaiokiyy:
        return $this;
        goto myiouycwyoswgygw;
        myiouycwyoswgygw:
    }
    public function enqueue()
    {
        goto gkikweskmwmeiaoa;
        aiwikwqscaegaewi:
        $eygsasmqycagyayw->oeoquuwkoywiuesy($eygsasmqycagyayw->owygwqwawqoiusis($ymqmyyeuycgmigyo, $eygsasmqycagyayw->get("{$ymqmyyeuycgmigyo}\56\152\x73"))->ayuciigykaswwqeo("\x6a\161\165\x65\x72\171"))->oeoquuwkoywiuesy($eygsasmqycagyayw->awgyqswkqywwmkye($ymqmyyeuycgmigyo, $eygsasmqycagyayw->get("{$ymqmyyeuycgmigyo}\x2e\143\163\x73")));
        goto eewoqsggiasaygku;
        gkikweskmwmeiaoa:
        $eygsasmqycagyayw = FormMaker::symcgieuakksimmu()->miocmcoykayoyyau();
        goto wyyuywaayugkgikw;
        wyyuywaayugkgikw:
        $ymqmyyeuycgmigyo = "\155\165\154\164\151\163\164\145\160";
        goto aiwikwqscaegaewi;
        eewoqsggiasaygku:
    }
}
