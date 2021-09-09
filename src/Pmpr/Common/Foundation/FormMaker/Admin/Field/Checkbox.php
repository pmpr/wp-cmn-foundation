<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613a1be32d755             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\FormMaker\Admin\Field;


class Checkbox extends Field
{
    
    protected array $confirmable = [];
    
    public function __construct(?string $aokagokqyuysuksm, ?string $ymqmyyeuycgmigyo, ?string $mkqqqewsokcswckc = null)
    {
        goto keawawscoqeyeksm;
        awaymcmscggqcwyk:
        $this->igmaewykumgwoaoy("\x64\x61\164\x61\x2d\x74\x6f\x67\x67\x6c\145", "\163\167\x69\164\x63\x68")->igmaewykumgwoaoy("\x64\141\x74\x61\x2d\x73\151\x7a\145", "\163\x6d")->igmaewykumgwoaoy("\x64\141\164\x61\55\157\x6e\x53\164\x79\x6c\x65", "\x6f\156")->igmaewykumgwoaoy("\144\141\164\141\55\x6f\x66\146\123\x74\171\x6c\145", "\x6f\146\146")->igmaewykumgwoaoy("\x64\x61\164\141\55\157\x6e", __("\x45\156\141\x62\x6c\145", PR__CMN__FOUNDATION))->igmaewykumgwoaoy("\x64\x61\164\x61\55\157\146\x66", __("\x44\151\x73\x61\x62\154\x65", PR__CMN__FOUNDATION));
        goto sgoqygymeqauosow;
        keawawscoqeyeksm:
        parent::__construct("\143\150\145\x63\153\142\x6f\170", $aokagokqyuysuksm, $ymqmyyeuycgmigyo, $mkqqqewsokcswckc);
        goto awaymcmscggqcwyk;
        sgoqygymeqauosow:
        $this->usoqcyyugsuyiewc("\160\162\x2d\x73\x77\x69\164\143\x68");
        goto uycauyiysqmcmscy;
        uycauyiysqmcmscy:
    }
    
    public function eyygsasuqmommkua($ggauoeuaesiymgee) : Field
    {
        $ggauoeuaesiymgee = isset($_GET["\160\x6f\163\164"]) || isset($_GET["\164\141\147\x5f\x49\104"]) ? '' : ($ggauoeuaesiymgee ? (string) $ggauoeuaesiymgee : '');
        return parent::eyygsasuqmommkua($ggauoeuaesiymgee);
    }
    
    public function agywyaaquwawwuiy($koegqoagisewcica = [], $yiygigeewmuiyceu = []) : Field
    {
        return $this->oeeumggeiyyckkom("\157\x6e", $koegqoagisewcica)->oeeumggeiyyckkom("\157\146\146", $yiygigeewmuiyceu);
    }
    
    public function ooowowweyusommmm(string $meqocwsecsywiiqs, string $uamcoiueqaamsqma, $sqeykgyoooqysmca = "\x77\141\x72\x6e\x69\x6e\x67") : self
    {
        $this->confirmable = ["\x74\171\x70\x65" => $sqeykgyoooqysmca, "\x74\x69\x74\x6c\x65" => $meqocwsecsywiiqs, "\x6d\145\x73\x73\141\147\x65" => $uamcoiueqaamsqma];
        return $this->qigsyyqgewgskemg("\160\162\55\143\x6f\156\146\151\x72\155\141\142\x6c\x65\x2d\x69\156\160\165\164");
    }
    
    public function yeigkegagskeaaim() : self
    {
        return $this->ooowowweyusommmm(__("\x54\x68\x69\163\40\143\x6f\x75\x6c\144\x20\142\x72\145\141\153\x20\164\150\x69\156\x67\163\41", PR__CMN__FOUNDATION), __("\111\146\40\x79\157\x75\x20\x6e\x6f\x74\151\x63\145\40\141\156\x79\x20\145\162\162\x6f\x72\x73\x20\x6f\156\40\171\x6f\165\162\x20\167\145\142\163\x69\164\145\40\141\x66\x74\x65\162\x20\x68\141\x76\x69\x6e\x67\40\x61\x63\x74\x69\166\141\x74\145\x64\x20\164\x68\x69\x73\x20\x73\x65\164\164\151\x6e\147\54\40\152\165\163\164\40\x64\x65\x61\143\x74\x69\166\141\x74\145\x20\151\164\40\141\x67\141\x69\156\x2c\40\x61\156\x64\x20\171\x6f\165\x72\40\163\x69\x74\x65\x20\x77\151\x6c\x6c\40\x62\145\40\142\x61\x63\153\40\164\157\40\156\x6f\x72\155\x61\x6c\56", PR__CMN__FOUNDATION));
    }
}
