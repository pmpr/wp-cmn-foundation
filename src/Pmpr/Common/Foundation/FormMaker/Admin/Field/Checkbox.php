<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b6c65a2d22             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\FormMaker\Admin\Field;


class Checkbox extends Field
{
    
    protected array $confirmable = [];
    
    public function __construct(?string $aokagokqyuysuksm, ?string $ymqmyyeuycgmigyo, ?string $mkqqqewsokcswckc = null)
    {
        goto gmwowyekemmasgas;
        egqmkokiwysiicqo:
        $this->igmaewykumgwoaoy("\x64\141\164\141\x2d\x74\x6f\x67\147\154\x65", "\163\167\151\164\143\x68")->igmaewykumgwoaoy("\x64\141\164\x61\55\x73\x69\172\145", "\x73\155")->igmaewykumgwoaoy("\x64\141\x74\x61\55\x6f\x6e\x53\x74\x79\x6c\145", "\157\156")->igmaewykumgwoaoy("\x64\141\x74\141\55\x6f\x66\146\x53\164\171\154\x65", "\x6f\x66\x66")->igmaewykumgwoaoy("\144\x61\x74\141\x2d\157\156", __("\105\x6e\x61\x62\154\145", PR__CMN__FOUNDATION))->igmaewykumgwoaoy("\x64\x61\164\x61\x2d\x6f\x66\146", __("\x44\x69\x73\x61\142\x6c\145", PR__CMN__FOUNDATION));
        goto suweswocokiemugi;
        gmwowyekemmasgas:
        parent::__construct("\143\150\145\143\153\142\157\170", $aokagokqyuysuksm, $ymqmyyeuycgmigyo, $mkqqqewsokcswckc);
        goto egqmkokiwysiicqo;
        suweswocokiemugi:
        $this->usoqcyyugsuyiewc("\160\162\55\163\167\x69\164\143\150");
        goto ieesuqwoumyssgmi;
        ieesuqwoumyssgmi:
    }
    
    public function eyygsasuqmommkua($ggauoeuaesiymgee) : Field
    {
        $ggauoeuaesiymgee = isset($_GET["\x70\x6f\x73\x74"]) || isset($_GET["\x74\141\147\x5f\111\x44"]) ? '' : ($ggauoeuaesiymgee ? (string) $ggauoeuaesiymgee : '');
        return parent::eyygsasuqmommkua($ggauoeuaesiymgee);
    }
    
    public function agywyaaquwawwuiy($koegqoagisewcica = [], $yiygigeewmuiyceu = []) : Field
    {
        return $this->oeeumggeiyyckkom("\157\x6e", $koegqoagisewcica)->oeeumggeiyyckkom("\x6f\146\146", $yiygigeewmuiyceu);
    }
    
    public function ooowowweyusommmm(string $meqocwsecsywiiqs, string $uamcoiueqaamsqma, $sqeykgyoooqysmca = "\x77\141\x72\156\151\x6e\147") : self
    {
        $this->confirmable = ["\x74\171\160\x65" => $sqeykgyoooqysmca, "\x74\151\164\x6c\145" => $meqocwsecsywiiqs, "\x6d\x65\163\163\x61\147\x65" => $uamcoiueqaamsqma];
        return $this->qigsyyqgewgskemg("\x70\162\x2d\143\157\156\146\x69\162\155\141\142\154\x65\x2d\151\x6e\160\165\164");
    }
    
    public function yeigkegagskeaaim() : self
    {
        return $this->ooowowweyusommmm(__("\x54\150\x69\163\40\143\157\165\x6c\144\40\x62\x72\x65\141\x6b\x20\x74\x68\151\x6e\x67\x73\x21", PR__CMN__FOUNDATION), __("\111\146\40\x79\157\165\40\156\157\x74\x69\143\x65\40\141\156\x79\x20\145\x72\162\x6f\x72\163\x20\x6f\x6e\40\171\x6f\x75\162\40\167\145\x62\x73\x69\164\x65\40\141\x66\x74\145\x72\x20\x68\141\166\x69\x6e\147\x20\141\x63\164\151\x76\x61\164\145\x64\40\x74\x68\x69\163\40\x73\x65\164\x74\x69\156\x67\x2c\40\152\x75\x73\x74\x20\x64\x65\x61\x63\164\x69\x76\x61\x74\145\40\x69\x74\40\x61\147\x61\151\156\54\x20\x61\156\x64\40\171\x6f\165\162\40\x73\x69\x74\x65\x20\x77\151\154\x6c\x20\142\x65\40\142\141\x63\x6b\x20\164\157\40\156\x6f\x72\155\x61\154\x2e", PR__CMN__FOUNDATION));
    }
}
