<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b5973b89a9             |
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
        parent::__construct("\143\150\145\x63\153\x62\157\x78", $aokagokqyuysuksm, $ymqmyyeuycgmigyo, $mkqqqewsokcswckc);
        goto gmwowyekemmasgas;
        egqmkokiwysiicqo:
        $this->usoqcyyugsuyiewc("\160\162\55\x73\167\x69\164\x63\x68");
        goto suweswocokiemugi;
        gmwowyekemmasgas:
        $this->igmaewykumgwoaoy("\144\x61\x74\x61\x2d\164\x6f\147\147\154\145", "\x73\x77\x69\x74\143\x68")->igmaewykumgwoaoy("\144\x61\164\x61\x2d\163\x69\172\145", "\163\155")->igmaewykumgwoaoy("\144\x61\x74\141\55\157\x6e\123\x74\171\x6c\x65", "\x6f\x6e")->igmaewykumgwoaoy("\144\141\164\x61\x2d\157\x66\146\x53\164\171\x6c\x65", "\x6f\x66\x66")->igmaewykumgwoaoy("\144\141\x74\x61\x2d\157\x6e", __("\105\156\x61\142\154\145", PR__CMN__FOUNDATION))->igmaewykumgwoaoy("\144\141\x74\x61\x2d\x6f\x66\146", __("\x44\151\163\141\x62\x6c\x65", PR__CMN__FOUNDATION));
        goto egqmkokiwysiicqo;
        suweswocokiemugi:
    }
    
    public function eyygsasuqmommkua($ggauoeuaesiymgee) : Field
    {
        $ggauoeuaesiymgee = isset($_GET["\x70\x6f\x73\x74"]) || isset($_GET["\x74\141\x67\x5f\x49\x44"]) ? '' : ($ggauoeuaesiymgee ? (string) $ggauoeuaesiymgee : '');
        return parent::eyygsasuqmommkua($ggauoeuaesiymgee);
    }
    
    public function agywyaaquwawwuiy($koegqoagisewcica = [], $yiygigeewmuiyceu = []) : Field
    {
        return $this->oeeumggeiyyckkom("\x6f\156", $koegqoagisewcica)->oeeumggeiyyckkom("\157\x66\146", $yiygigeewmuiyceu);
    }
    
    public function ooowowweyusommmm(string $meqocwsecsywiiqs, string $uamcoiueqaamsqma, $sqeykgyoooqysmca = "\167\x61\x72\x6e\151\x6e\x67") : self
    {
        $this->confirmable = ["\164\x79\160\145" => $sqeykgyoooqysmca, "\164\x69\164\154\x65" => $meqocwsecsywiiqs, "\x6d\x65\163\163\x61\x67\x65" => $uamcoiueqaamsqma];
        return $this->qigsyyqgewgskemg("\x70\162\55\x63\157\x6e\146\x69\162\155\141\142\154\x65\55\151\x6e\160\165\164");
    }
    
    public function yeigkegagskeaaim() : self
    {
        return $this->ooowowweyusommmm(__("\124\x68\x69\x73\x20\x63\157\x75\x6c\144\x20\142\x72\x65\141\x6b\x20\x74\x68\151\156\147\163\x21", PR__CMN__FOUNDATION), __("\x49\x66\x20\x79\157\x75\x20\x6e\x6f\x74\x69\x63\x65\40\x61\x6e\171\40\x65\162\x72\157\162\x73\40\157\x6e\x20\171\157\165\x72\40\x77\x65\142\163\x69\x74\x65\40\x61\146\x74\145\162\40\x68\141\166\151\x6e\147\x20\x61\143\164\x69\x76\141\164\145\144\x20\x74\x68\x69\x73\x20\x73\145\x74\164\151\x6e\147\x2c\40\152\165\163\x74\40\144\x65\141\x63\164\151\x76\x61\164\x65\40\151\164\x20\x61\x67\141\x69\156\54\x20\141\156\x64\x20\x79\157\165\162\x20\x73\x69\164\145\x20\x77\151\x6c\154\x20\142\x65\40\x62\x61\143\153\40\x74\x6f\x20\x6e\x6f\x72\x6d\x61\154\x2e", PR__CMN__FOUNDATION));
    }
}
