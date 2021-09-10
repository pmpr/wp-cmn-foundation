<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b1e8aa0c03             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\FormMaker\Admin\Field;


class Checkbox extends Field
{
    
    protected array $confirmable = [];
    
    public function __construct(?string $aokagokqyuysuksm, ?string $ymqmyyeuycgmigyo, ?string $mkqqqewsokcswckc = null)
    {
        goto okcciyqesuaygcws;
        gswcgsouggoimkww:
        $this->igmaewykumgwoaoy("\x64\141\164\x61\x2d\164\157\147\147\154\145", "\x73\167\151\x74\x63\x68")->igmaewykumgwoaoy("\x64\x61\164\141\55\163\x69\172\x65", "\163\x6d")->igmaewykumgwoaoy("\144\141\164\x61\55\x6f\156\123\164\x79\154\x65", "\157\x6e")->igmaewykumgwoaoy("\x64\x61\x74\x61\x2d\157\x66\146\123\x74\171\x6c\x65", "\157\x66\146")->igmaewykumgwoaoy("\x64\x61\x74\x61\x2d\157\x6e", __("\105\x6e\141\x62\x6c\145", PR__CMN__FOUNDATION))->igmaewykumgwoaoy("\144\x61\x74\141\x2d\x6f\x66\146", __("\x44\151\163\141\142\x6c\145", PR__CMN__FOUNDATION));
        goto esgcemuwcguosmsa;
        okcciyqesuaygcws:
        parent::__construct("\143\150\145\x63\x6b\x62\x6f\170", $aokagokqyuysuksm, $ymqmyyeuycgmigyo, $mkqqqewsokcswckc);
        goto gswcgsouggoimkww;
        esgcemuwcguosmsa:
        $this->usoqcyyugsuyiewc("\x70\x72\x2d\x73\x77\x69\x74\143\150");
        goto msikckyqsccyeemi;
        msikckyqsccyeemi:
    }
    
    public function eyygsasuqmommkua($ggauoeuaesiymgee) : Field
    {
        $ggauoeuaesiymgee = isset($_GET["\x70\x6f\x73\x74"]) || isset($_GET["\164\x61\147\x5f\x49\x44"]) ? '' : ($ggauoeuaesiymgee ? (string) $ggauoeuaesiymgee : '');
        return parent::eyygsasuqmommkua($ggauoeuaesiymgee);
    }
    
    public function agywyaaquwawwuiy($koegqoagisewcica = [], $yiygigeewmuiyceu = []) : Field
    {
        return $this->oeeumggeiyyckkom("\157\156", $koegqoagisewcica)->oeeumggeiyyckkom("\157\146\146", $yiygigeewmuiyceu);
    }
    
    public function ooowowweyusommmm(string $meqocwsecsywiiqs, string $uamcoiueqaamsqma, $sqeykgyoooqysmca = "\x77\141\162\156\x69\x6e\x67") : self
    {
        $this->confirmable = ["\x74\171\x70\145" => $sqeykgyoooqysmca, "\164\x69\x74\x6c\x65" => $meqocwsecsywiiqs, "\x6d\x65\163\x73\x61\x67\145" => $uamcoiueqaamsqma];
        return $this->qigsyyqgewgskemg("\160\162\55\143\x6f\x6e\x66\151\x72\155\x61\x62\154\145\x2d\x69\x6e\x70\x75\x74");
    }
    
    public function yeigkegagskeaaim() : self
    {
        return $this->ooowowweyusommmm(__("\x54\x68\x69\x73\x20\x63\x6f\x75\x6c\x64\40\x62\162\x65\141\153\40\164\150\151\x6e\x67\x73\41", PR__CMN__FOUNDATION), __("\111\x66\40\x79\x6f\x75\x20\156\x6f\164\151\x63\x65\40\x61\x6e\x79\x20\x65\162\162\157\x72\163\x20\x6f\x6e\x20\171\157\165\162\40\167\x65\x62\x73\x69\164\145\40\141\146\164\x65\x72\40\150\141\166\151\x6e\147\40\x61\x63\164\151\x76\141\164\145\x64\40\x74\x68\151\163\40\163\x65\164\164\151\156\x67\54\x20\x6a\x75\x73\164\40\x64\x65\141\143\x74\151\x76\141\164\x65\x20\151\164\40\141\147\x61\151\x6e\x2c\x20\141\x6e\144\40\x79\157\165\x72\x20\163\x69\x74\145\x20\x77\x69\x6c\x6c\x20\142\x65\x20\x62\x61\x63\153\40\x74\x6f\x20\156\157\162\x6d\x61\154\56", PR__CMN__FOUNDATION));
    }
}
