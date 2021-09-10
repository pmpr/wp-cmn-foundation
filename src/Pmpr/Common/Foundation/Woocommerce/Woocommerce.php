<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b499786a1b             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Woocommerce;

use Pmpr\Common\Foundation\FormMaker\Admin\Element\MetaBox;
use Pmpr\Common\Foundation\Manipulate\ManipulateFormat;
use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateHTML;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;
use Pmpr\Common\Foundation\Woocommerce\Attribute\Attribute;

class Woocommerce extends Common
{
    
    public function __construct()
    {
        parent::__construct();
        $this->iemaakgqgqosiecm();
    }
    public function wigskegsqequoeks()
    {
        $this->qcsmikeggeemccuu("\x77\x6f\157\x63\157\x6d\x6d\145\162\143\x65\137\141\x64\155\x69\x6e\137\x66\151\145\154\144\137\x63\165\x73\164\x6f\155", [$this, "\x67\155\x6d\x61\161\x71\143\x6f\165\x77\163\141\x67\155\x69\147"]);
        parent::wigskegsqequoeks();
    }
    public function kgquecmsgcouyaya()
    {
        $this->cecaguuoecmccuse("\x77\157\157\143\157\x6d\x6d\x65\x72\143\x65\x5f\141\166\x61\151\x6c\141\x62\154\x65\137\x76\141\162\x69\141\164\x69\157\156", [$this, "\x65\167\155\151\157\x73\151\x71\163\x73\x6f\x65\145\157\141\x69"], 10, 3);
        parent::kgquecmsgcouyaya();
    }
    public function iemaakgqgqosiecm()
    {
        Attribute::symcgieuakksimmu();
        Variation::symcgieuakksimmu();
    }
    
    public function gmmaqqcouwsagmig($ywmkwiwkosakssii = [])
    {
        goto ykymyiswyykokeoi;
        mgsusugkgmaowkwy:
        $ywmkwiwkosakssii[self::TYPE] = $ywmkwiwkosakssii["\143\x75\163\x74\x6f\155\55\164\x79\160\x65"];
        goto imyksgwckoyysuwo;
        siamksowsoewemyk:
        wqmkimmusyyeicag:
        goto kwiouekiyaeoeiwq;
        imyksgwckoyysuwo:
        $aiowsaccomcoikus = MetaBox::okmsgamiiemyesao(array_filter($ywmkwiwkosakssii));
        goto gsmwukqywosmyauk;
        ykymyiswyykokeoi:
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\145\143\150\x6f" => true, "\x63\x75\x73\x74\157\155\x2d\x74\x79\x70\145" => self::TEXT]);
        goto mgsusugkgmaowkwy;
        ayiescmccgoscuwm:
        ManipulateHTML::sykissckqqccoiqs("\x74\162", [], [ManipulateHTML::uuccukgasskgimsq("\164\x68", ["\163\143\157\160\145" => "\x72\157\167", "\143\154\x61\x73\163" => "\164\151\164\x6c\145\x64\145\x73\x63"], ManipulateHTML::uuccukgasskgimsq("\154\141\x62\145\x6c", ["\x66\x6f\162" => $aiowsaccomcoikus->mwikyscisascoeea()], ManipulateArray::get($ywmkwiwkosakssii, self::TITLE, $aiowsaccomcoikus->aakmagwggmkoiiyu()))), ManipulateHTML::uuccukgasskgimsq("\x74\x64", [], $aiowsaccomcoikus->render(false))]);
        goto siamksowsoewemyk;
        gsmwukqywosmyauk:
        if (!$aiowsaccomcoikus) {
            goto wqmkimmusyyeicag;
        }
        goto ayiescmccgoscuwm;
        kwiouekiyaeoeiwq:
    }
    
    public function ewmiosiqssoeeoai($uomewyckeuqoqocu, $product, $isweyuoisomqyaag)
    {
        goto gqeaoyucgsqueucg;
        ggyikcqwqysmouye:
        foreach ($siquossayskcwkea as $ymqmyyeuycgmigyo => $aaokuekaimigoyue) {
            $uomewyckeuqoqocu["\x61\x74\x74\162\x69\142\165\164\145\137\156\141\x6d\x65\x73"][$ymqmyyeuycgmigyo] = $isweyuoisomqyaag->get_attribute(str_replace("\x61\164\x74\x72\151\142\165\164\145\x5f", '', $ymqmyyeuycgmigyo));
            iquaiwacukwgyksm:
        }
        goto uqwwsmumussiogou;
        uqwwsmumussiogou:
        gsyiisgksesmwkme:
        goto oekeqowkqecgsmuk;
        cequowgomkkwmoom:
        return $uomewyckeuqoqocu;
        goto gaymgiaccgkgsiwq;
        oekeqowkqecgsmuk:
        euuwcqqueakwukom:
        goto cequowgomkkwmoom;
        ggioowsogoacmyyi:
        if (!$siquossayskcwkea) {
            goto euuwcqqueakwukom;
        }
        goto ggyikcqwqysmouye;
        gqeaoyucgsqueucg:
        $siquossayskcwkea = ManipulateArray::get($uomewyckeuqoqocu, "\141\164\x74\162\x69\142\x75\x74\x65\163");
        goto ggioowsogoacmyyi;
        gaymgiaccgkgsiwq:
    }
}
