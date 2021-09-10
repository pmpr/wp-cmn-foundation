<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b3993be3fb             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\FormMaker\Admin\Field;


class Checkbox extends Field
{
    
    protected array $confirmable = [];
    
    public function __construct(?string $aokagokqyuysuksm, ?string $ymqmyyeuycgmigyo, ?string $mkqqqewsokcswckc = null)
    {
        goto qguqgmiiseimmuki;
        egqmkokiwysiicqo:
        $this->usoqcyyugsuyiewc("\160\162\55\x73\167\151\x74\143\x68");
        goto suweswocokiemugi;
        gmwowyekemmasgas:
        $this->igmaewykumgwoaoy("\144\141\164\x61\x2d\x74\157\x67\147\x6c\x65", "\163\167\151\164\x63\150")->igmaewykumgwoaoy("\144\x61\x74\141\55\x73\151\x7a\x65", "\x73\x6d")->igmaewykumgwoaoy("\144\141\x74\x61\55\157\x6e\123\164\x79\154\145", "\x6f\x6e")->igmaewykumgwoaoy("\144\141\x74\141\55\x6f\x66\146\x53\164\171\154\x65", "\x6f\x66\146")->igmaewykumgwoaoy("\144\141\x74\141\55\157\156", __("\x45\156\x61\142\x6c\x65", PR__CMN__FOUNDATION))->igmaewykumgwoaoy("\144\141\164\x61\x2d\157\146\x66", __("\104\151\x73\141\142\x6c\145", PR__CMN__FOUNDATION));
        goto egqmkokiwysiicqo;
        qguqgmiiseimmuki:
        parent::__construct("\x63\150\x65\x63\x6b\x62\157\x78", $aokagokqyuysuksm, $ymqmyyeuycgmigyo, $mkqqqewsokcswckc);
        goto gmwowyekemmasgas;
        suweswocokiemugi:
    }
    
    public function eyygsasuqmommkua($ggauoeuaesiymgee) : Field
    {
        $ggauoeuaesiymgee = isset($_GET["\x70\x6f\163\x74"]) || isset($_GET["\x74\141\x67\x5f\x49\x44"]) ? '' : ($ggauoeuaesiymgee ? (string) $ggauoeuaesiymgee : '');
        return parent::eyygsasuqmommkua($ggauoeuaesiymgee);
    }
    
    public function agywyaaquwawwuiy($koegqoagisewcica = [], $yiygigeewmuiyceu = []) : Field
    {
        return $this->oeeumggeiyyckkom("\x6f\156", $koegqoagisewcica)->oeeumggeiyyckkom("\157\x66\x66", $yiygigeewmuiyceu);
    }
    
    public function ooowowweyusommmm(string $meqocwsecsywiiqs, string $uamcoiueqaamsqma, $sqeykgyoooqysmca = "\167\141\x72\156\x69\156\x67") : self
    {
        $this->confirmable = ["\x74\171\x70\x65" => $sqeykgyoooqysmca, "\164\151\164\x6c\145" => $meqocwsecsywiiqs, "\155\145\163\x73\x61\x67\x65" => $uamcoiueqaamsqma];
        return $this->qigsyyqgewgskemg("\160\x72\55\143\157\x6e\x66\x69\162\155\x61\x62\x6c\145\x2d\151\156\x70\165\164");
    }
    
    public function yeigkegagskeaaim() : self
    {
        return $this->ooowowweyusommmm(__("\x54\150\151\163\x20\x63\x6f\x75\x6c\x64\40\142\x72\x65\141\153\x20\164\150\x69\x6e\x67\163\41", PR__CMN__FOUNDATION), __("\111\x66\40\171\x6f\x75\40\x6e\x6f\164\151\143\145\x20\141\x6e\x79\x20\145\162\x72\x6f\162\163\x20\157\x6e\40\x79\157\165\162\x20\167\145\x62\163\x69\x74\x65\x20\141\x66\164\145\x72\x20\150\141\166\151\156\147\x20\x61\143\x74\151\x76\x61\164\x65\144\40\x74\150\151\163\x20\163\145\164\x74\x69\x6e\147\54\40\x6a\165\x73\x74\40\x64\145\141\x63\x74\x69\x76\x61\164\x65\x20\x69\164\x20\141\147\x61\x69\x6e\x2c\40\141\x6e\144\40\x79\157\165\x72\40\163\x69\164\x65\40\167\151\x6c\154\x20\x62\145\x20\142\141\143\x6b\40\x74\157\40\x6e\157\x72\155\141\154\x2e", PR__CMN__FOUNDATION));
    }
}
