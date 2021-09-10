<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b499786a1b             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\FormMaker\Admin\Field;


class Checkbox extends Field
{
    
    protected array $confirmable = [];
    
    public function __construct(?string $aokagokqyuysuksm, ?string $ymqmyyeuycgmigyo, ?string $mkqqqewsokcswckc = null)
    {
        goto qguqgmiiseimmuki;
        qguqgmiiseimmuki:
        parent::__construct("\x63\150\x65\x63\x6b\142\157\x78", $aokagokqyuysuksm, $ymqmyyeuycgmigyo, $mkqqqewsokcswckc);
        goto gmwowyekemmasgas;
        egqmkokiwysiicqo:
        $this->usoqcyyugsuyiewc("\160\162\55\163\167\x69\x74\143\x68");
        goto suweswocokiemugi;
        gmwowyekemmasgas:
        $this->igmaewykumgwoaoy("\144\141\x74\141\x2d\164\x6f\x67\x67\154\x65", "\163\167\151\164\143\x68")->igmaewykumgwoaoy("\x64\141\164\x61\x2d\163\151\x7a\145", "\x73\x6d")->igmaewykumgwoaoy("\x64\x61\x74\x61\55\157\x6e\123\x74\x79\x6c\145", "\x6f\x6e")->igmaewykumgwoaoy("\x64\x61\164\141\55\x6f\x66\146\x53\x74\171\x6c\x65", "\157\146\146")->igmaewykumgwoaoy("\x64\141\164\x61\x2d\x6f\156", __("\x45\x6e\x61\x62\x6c\x65", PR__CMN__FOUNDATION))->igmaewykumgwoaoy("\144\141\164\x61\x2d\x6f\146\146", __("\104\151\x73\x61\142\x6c\145", PR__CMN__FOUNDATION));
        goto egqmkokiwysiicqo;
        suweswocokiemugi:
    }
    
    public function eyygsasuqmommkua($ggauoeuaesiymgee) : Field
    {
        $ggauoeuaesiymgee = isset($_GET["\160\157\163\x74"]) || isset($_GET["\x74\x61\147\x5f\x49\x44"]) ? '' : ($ggauoeuaesiymgee ? (string) $ggauoeuaesiymgee : '');
        return parent::eyygsasuqmommkua($ggauoeuaesiymgee);
    }
    
    public function agywyaaquwawwuiy($koegqoagisewcica = [], $yiygigeewmuiyceu = []) : Field
    {
        return $this->oeeumggeiyyckkom("\x6f\x6e", $koegqoagisewcica)->oeeumggeiyyckkom("\x6f\x66\x66", $yiygigeewmuiyceu);
    }
    
    public function ooowowweyusommmm(string $meqocwsecsywiiqs, string $uamcoiueqaamsqma, $sqeykgyoooqysmca = "\167\x61\162\156\151\156\x67") : self
    {
        $this->confirmable = ["\164\x79\160\x65" => $sqeykgyoooqysmca, "\164\151\x74\x6c\x65" => $meqocwsecsywiiqs, "\155\145\x73\163\141\x67\145" => $uamcoiueqaamsqma];
        return $this->qigsyyqgewgskemg("\x70\x72\55\143\x6f\x6e\x66\151\162\x6d\141\142\154\x65\55\x69\156\x70\x75\164");
    }
    
    public function yeigkegagskeaaim() : self
    {
        return $this->ooowowweyusommmm(__("\x54\150\x69\x73\40\x63\157\165\154\x64\40\142\162\x65\141\x6b\40\164\x68\x69\x6e\147\163\x21", PR__CMN__FOUNDATION), __("\x49\x66\x20\x79\x6f\165\40\156\157\x74\x69\143\145\40\141\x6e\x79\40\145\162\162\x6f\x72\x73\40\x6f\x6e\x20\x79\157\x75\x72\x20\167\x65\x62\x73\151\164\x65\x20\x61\x66\164\145\x72\x20\150\x61\x76\151\156\x67\40\x61\x63\x74\151\x76\x61\164\x65\144\x20\x74\x68\151\x73\x20\163\145\164\x74\151\156\147\54\40\x6a\165\x73\164\40\144\x65\141\x63\x74\x69\x76\x61\164\145\x20\151\x74\40\x61\x67\x61\151\156\54\x20\x61\x6e\144\x20\x79\157\165\162\40\x73\x69\164\x65\x20\167\151\154\154\x20\142\145\x20\142\x61\x63\153\x20\164\x6f\x20\x6e\x6f\162\x6d\141\154\56", PR__CMN__FOUNDATION));
    }
}
