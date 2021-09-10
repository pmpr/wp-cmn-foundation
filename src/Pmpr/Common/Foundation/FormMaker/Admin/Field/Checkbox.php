<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b30261f503             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\FormMaker\Admin\Field;


class Checkbox extends Field
{
    
    protected array $confirmable = [];
    
    public function __construct(?string $aokagokqyuysuksm, ?string $ymqmyyeuycgmigyo, ?string $mkqqqewsokcswckc = null)
    {
        goto msikckyqsccyeemi;
        qguqgmiiseimmuki:
        $this->igmaewykumgwoaoy("\x64\141\x74\x61\x2d\164\x6f\147\x67\154\145", "\x73\x77\x69\x74\x63\x68")->igmaewykumgwoaoy("\144\x61\164\x61\55\163\151\x7a\145", "\x73\155")->igmaewykumgwoaoy("\144\x61\x74\x61\x2d\x6f\156\123\164\171\x6c\x65", "\x6f\156")->igmaewykumgwoaoy("\144\141\x74\141\x2d\157\146\146\x53\x74\x79\x6c\x65", "\157\146\146")->igmaewykumgwoaoy("\144\x61\x74\x61\x2d\157\156", __("\105\x6e\141\x62\x6c\145", PR__CMN__FOUNDATION))->igmaewykumgwoaoy("\x64\x61\x74\x61\x2d\157\146\146", __("\104\x69\163\x61\x62\154\145", PR__CMN__FOUNDATION));
        goto gmwowyekemmasgas;
        gmwowyekemmasgas:
        $this->usoqcyyugsuyiewc("\x70\x72\x2d\163\x77\x69\x74\x63\150");
        goto egqmkokiwysiicqo;
        msikckyqsccyeemi:
        parent::__construct("\143\150\x65\x63\153\142\157\x78", $aokagokqyuysuksm, $ymqmyyeuycgmigyo, $mkqqqewsokcswckc);
        goto qguqgmiiseimmuki;
        egqmkokiwysiicqo:
    }
    
    public function eyygsasuqmommkua($ggauoeuaesiymgee) : Field
    {
        $ggauoeuaesiymgee = isset($_GET["\x70\157\x73\x74"]) || isset($_GET["\x74\x61\x67\137\111\104"]) ? '' : ($ggauoeuaesiymgee ? (string) $ggauoeuaesiymgee : '');
        return parent::eyygsasuqmommkua($ggauoeuaesiymgee);
    }
    
    public function agywyaaquwawwuiy($koegqoagisewcica = [], $yiygigeewmuiyceu = []) : Field
    {
        return $this->oeeumggeiyyckkom("\x6f\156", $koegqoagisewcica)->oeeumggeiyyckkom("\x6f\146\x66", $yiygigeewmuiyceu);
    }
    
    public function ooowowweyusommmm(string $meqocwsecsywiiqs, string $uamcoiueqaamsqma, $sqeykgyoooqysmca = "\x77\x61\162\156\x69\x6e\x67") : self
    {
        $this->confirmable = ["\164\x79\x70\145" => $sqeykgyoooqysmca, "\x74\x69\164\154\145" => $meqocwsecsywiiqs, "\x6d\145\163\163\141\x67\145" => $uamcoiueqaamsqma];
        return $this->qigsyyqgewgskemg("\160\162\x2d\143\157\156\x66\151\162\155\x61\x62\x6c\x65\55\x69\156\x70\x75\164");
    }
    
    public function yeigkegagskeaaim() : self
    {
        return $this->ooowowweyusommmm(__("\x54\150\151\163\x20\143\x6f\x75\x6c\144\40\142\x72\x65\141\x6b\x20\x74\150\x69\x6e\x67\163\x21", PR__CMN__FOUNDATION), __("\x49\146\40\171\157\x75\x20\156\157\164\x69\143\x65\x20\x61\156\171\40\145\162\x72\x6f\x72\x73\x20\157\156\x20\171\157\x75\x72\40\x77\145\x62\163\x69\164\x65\x20\x61\146\x74\145\162\x20\150\141\166\x69\156\147\x20\141\143\164\151\166\141\164\145\144\x20\164\x68\151\163\x20\x73\x65\x74\164\151\x6e\x67\54\x20\152\165\x73\x74\x20\x64\x65\141\x63\x74\x69\x76\x61\x74\145\40\151\164\x20\141\x67\x61\151\x6e\54\40\x61\156\144\40\x79\157\x75\162\40\x73\x69\164\x65\x20\167\x69\154\154\40\x62\x65\x20\142\x61\x63\153\x20\x74\x6f\40\x6e\157\x72\x6d\x61\154\x2e", PR__CMN__FOUNDATION));
    }
}
