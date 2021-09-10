<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b499786a1b             |
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
        $this->qcgocuceocquqcuw("\155\145\164\150\157\x64", "\x50\x4f\123\124");
        goto mywyoygwagacogem;
        woeoaywcuomucous:
        $this->qigsyyqgewgskemg("\155\165\x6c\x74\151\55\x73\x74\x65\160\x2d\146\x72\x6f\155");
        goto kuuukskismmqqouo;
        kuuukskismmqqouo:
        parent::__construct("\146\157\162\155", $aokagokqyuysuksm);
        goto oumymkuewgimceee;
        mywyoygwagacogem:
        $this->submitText = __("\123\165\x62\x6d\151\x74", PR__CMN__FOUNDATION);
        goto iciqoswumcmciaee;
        iciqoswumcmciaee:
    }
    
    public function iiqoooqcakkaeyiw() : self
    {
        $this->qigsyyqgewgskemg("\143\x6c\x69\x63\153\x61\142\154\145\55\x73\164\x65\x70\163");
        return $this;
    }
    
    public function suguoqqeycoiwcok(int $wyeyeaaekyoyimqu) : self
    {
        goto aeywmoqgcuseswei;
        aeywmoqgcuseswei:
        if (!($wyeyeaaekyoyimqu > 1 && count($this->guiyusikssumecwk()) >= $wyeyeaaekyoyimqu)) {
            goto soygaqucuckqqcmm;
        }
        goto muigciaagmcswyca;
        yisgywcsiseqyyom:
        return $this;
        goto wgqocuqcioqiyswo;
        wcyiqkiescuegcoi:
        soygaqucuckqqcmm:
        goto yisgywcsiseqyyom;
        muigciaagmcswyca:
        $this->igmaewykumgwoaoy("\144\141\164\141\55\163\x74\x65\160\55\163\x74\141\162\x74", $wyeyeaaekyoyimqu);
        goto wcyiqkiescuegcoi;
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
        return $this->iuygowkemiiwqmiw("\x73\164\145\x70\163", ["\146\x6f\x72\155" => $this, "\163\x74\145\x70\x73" => $this->guiyusikssumecwk(), "\x73\x75\142\155\x69\164\137\x74\145\170\164" => $this->qoomaywwaswcaccu(), "\x69\x6e\x76\141\x6c\151\144\x5f\x69\143\x6f\x6e" => IconFontawesomeInterface::ICON_CIRCLE_EXCLAMATION]);
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
        $eygsasmqycagyayw->oeoquuwkoywiuesy($eygsasmqycagyayw->owygwqwawqoiusis($ymqmyyeuycgmigyo, $eygsasmqycagyayw->get("{$ymqmyyeuycgmigyo}\x2e\x6a\163"))->ayuciigykaswwqeo("\x6a\x71\165\145\x72\x79"))->oeoquuwkoywiuesy($eygsasmqycagyayw->awgyqswkqywwmkye($ymqmyyeuycgmigyo, $eygsasmqycagyayw->get("{$ymqmyyeuycgmigyo}\x2e\x63\163\x73")));
        goto eewoqsggiasaygku;
        gkikweskmwmeiaoa:
        $eygsasmqycagyayw = FormMaker::symcgieuakksimmu()->miocmcoykayoyyau();
        goto wyyuywaayugkgikw;
        wyyuywaayugkgikw:
        $ymqmyyeuycgmigyo = "\x6d\x75\154\164\x69\163\x74\x65\x70";
        goto aiwikwqscaegaewi;
        eewoqsggiasaygku:
    }
}
