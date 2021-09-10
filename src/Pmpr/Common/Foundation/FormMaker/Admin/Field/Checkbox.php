<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b2e4befc8c             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\FormMaker\Admin\Field;


class Checkbox extends Field
{
    
    protected array $confirmable = [];
    
    public function __construct(?string $aokagokqyuysuksm, ?string $ymqmyyeuycgmigyo, ?string $mkqqqewsokcswckc = null)
    {
        goto msikckyqsccyeemi;
        msikckyqsccyeemi:
        parent::__construct("\x63\x68\x65\143\153\x62\x6f\x78", $aokagokqyuysuksm, $ymqmyyeuycgmigyo, $mkqqqewsokcswckc);
        goto qguqgmiiseimmuki;
        gmwowyekemmasgas:
        $this->usoqcyyugsuyiewc("\160\162\x2d\163\167\151\164\143\x68");
        goto egqmkokiwysiicqo;
        qguqgmiiseimmuki:
        $this->igmaewykumgwoaoy("\144\x61\x74\x61\55\x74\157\x67\147\x6c\145", "\x73\167\x69\x74\x63\x68")->igmaewykumgwoaoy("\x64\141\x74\x61\x2d\163\151\172\x65", "\x73\x6d")->igmaewykumgwoaoy("\144\x61\164\x61\x2d\x6f\156\123\164\x79\x6c\x65", "\157\x6e")->igmaewykumgwoaoy("\x64\x61\x74\141\x2d\x6f\x66\146\x53\164\x79\154\145", "\157\x66\146")->igmaewykumgwoaoy("\x64\x61\x74\x61\55\x6f\x6e", __("\x45\156\141\x62\154\x65", PR__CMN__FOUNDATION))->igmaewykumgwoaoy("\144\141\164\x61\55\x6f\146\x66", __("\104\151\x73\x61\142\154\x65", PR__CMN__FOUNDATION));
        goto gmwowyekemmasgas;
        egqmkokiwysiicqo:
    }
    
    public function eyygsasuqmommkua($ggauoeuaesiymgee) : Field
    {
        $ggauoeuaesiymgee = isset($_GET["\x70\157\x73\164"]) || isset($_GET["\164\141\x67\x5f\x49\104"]) ? '' : ($ggauoeuaesiymgee ? (string) $ggauoeuaesiymgee : '');
        return parent::eyygsasuqmommkua($ggauoeuaesiymgee);
    }
    
    public function agywyaaquwawwuiy($koegqoagisewcica = [], $yiygigeewmuiyceu = []) : Field
    {
        return $this->oeeumggeiyyckkom("\157\x6e", $koegqoagisewcica)->oeeumggeiyyckkom("\x6f\x66\x66", $yiygigeewmuiyceu);
    }
    
    public function ooowowweyusommmm(string $meqocwsecsywiiqs, string $uamcoiueqaamsqma, $sqeykgyoooqysmca = "\x77\x61\162\x6e\x69\x6e\147") : self
    {
        $this->confirmable = ["\164\x79\160\x65" => $sqeykgyoooqysmca, "\164\151\x74\154\x65" => $meqocwsecsywiiqs, "\x6d\145\163\163\x61\x67\x65" => $uamcoiueqaamsqma];
        return $this->qigsyyqgewgskemg("\x70\x72\x2d\143\x6f\156\x66\151\162\x6d\141\x62\154\145\55\x69\156\x70\x75\164");
    }
    
    public function yeigkegagskeaaim() : self
    {
        return $this->ooowowweyusommmm(__("\x54\x68\151\x73\x20\143\157\x75\x6c\144\40\x62\x72\145\141\x6b\x20\164\150\151\x6e\x67\x73\41", PR__CMN__FOUNDATION), __("\x49\x66\40\x79\157\x75\40\156\x6f\164\151\143\145\40\141\x6e\x79\x20\145\x72\162\157\x72\x73\x20\157\156\40\171\157\165\x72\40\167\x65\x62\163\151\164\x65\x20\141\x66\x74\x65\x72\40\150\141\x76\x69\156\x67\40\x61\x63\164\151\166\x61\164\x65\x64\x20\x74\x68\x69\x73\x20\163\145\x74\164\x69\156\x67\x2c\x20\x6a\x75\163\x74\40\x64\x65\x61\x63\x74\151\166\141\164\x65\x20\151\164\x20\141\147\x61\x69\156\x2c\40\141\156\x64\40\171\x6f\x75\162\x20\x73\x69\x74\x65\40\x77\151\x6c\154\x20\x62\145\x20\142\x61\143\153\x20\164\x6f\x20\156\157\x72\155\141\x6c\56", PR__CMN__FOUNDATION));
    }
}
