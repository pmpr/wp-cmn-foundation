<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b6c65a2d22             |
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
        $this->qcsmikeggeemccuu("\x77\157\157\143\x6f\x6d\x6d\145\x72\x63\145\x5f\x61\144\x6d\x69\156\x5f\146\151\x65\154\x64\x5f\143\165\163\x74\x6f\x6d", [$this, "\x67\x6d\155\x61\x71\x71\143\x6f\165\x77\x73\x61\x67\155\151\x67"]);
        parent::wigskegsqequoeks();
    }
    public function kgquecmsgcouyaya()
    {
        $this->cecaguuoecmccuse("\x77\157\x6f\x63\157\x6d\x6d\x65\x72\x63\x65\137\x61\x76\x61\x69\x6c\x61\x62\154\x65\x5f\166\x61\x72\x69\x61\164\151\x6f\156", [$this, "\145\x77\x6d\151\x6f\163\151\x71\x73\163\x6f\x65\145\157\x61\151"], 10, 3);
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
        gsmwukqywosmyauk:
        if (!$aiowsaccomcoikus) {
            goto wqmkimmusyyeicag;
        }
        goto ayiescmccgoscuwm;
        mgsusugkgmaowkwy:
        $ywmkwiwkosakssii[self::TYPE] = $ywmkwiwkosakssii["\x63\165\x73\164\157\155\55\x74\171\160\145"];
        goto imyksgwckoyysuwo;
        ayiescmccgoscuwm:
        ManipulateHTML::sykissckqqccoiqs("\x74\x72", [], [ManipulateHTML::uuccukgasskgimsq("\x74\x68", ["\x73\143\x6f\x70\145" => "\x72\157\x77", "\x63\x6c\x61\x73\163" => "\164\151\164\154\x65\144\x65\x73\143"], ManipulateHTML::uuccukgasskgimsq("\x6c\141\x62\145\x6c", ["\x66\157\162" => $aiowsaccomcoikus->mwikyscisascoeea()], ManipulateArray::get($ywmkwiwkosakssii, self::TITLE, $aiowsaccomcoikus->aakmagwggmkoiiyu()))), ManipulateHTML::uuccukgasskgimsq("\164\144", [], $aiowsaccomcoikus->render(false))]);
        goto siamksowsoewemyk;
        imyksgwckoyysuwo:
        $aiowsaccomcoikus = MetaBox::okmsgamiiemyesao(array_filter($ywmkwiwkosakssii));
        goto gsmwukqywosmyauk;
        siamksowsoewemyk:
        wqmkimmusyyeicag:
        goto kwiouekiyaeoeiwq;
        ykymyiswyykokeoi:
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\x65\143\x68\x6f" => true, "\x63\x75\163\164\157\x6d\55\164\171\x70\x65" => self::TEXT]);
        goto mgsusugkgmaowkwy;
        kwiouekiyaeoeiwq:
    }
    
    public function ewmiosiqssoeeoai($uomewyckeuqoqocu, $product, $isweyuoisomqyaag)
    {
        goto gqeaoyucgsqueucg;
        ggyikcqwqysmouye:
        foreach ($siquossayskcwkea as $ymqmyyeuycgmigyo => $aaokuekaimigoyue) {
            $uomewyckeuqoqocu["\x61\x74\164\x72\151\x62\165\x74\x65\137\x6e\141\x6d\145\163"][$ymqmyyeuycgmigyo] = $isweyuoisomqyaag->get_attribute(str_replace("\141\x74\164\162\151\x62\165\x74\145\137", '', $ymqmyyeuycgmigyo));
            iquaiwacukwgyksm:
        }
        goto uqwwsmumussiogou;
        uqwwsmumussiogou:
        gsyiisgksesmwkme:
        goto oekeqowkqecgsmuk;
        gqeaoyucgsqueucg:
        $siquossayskcwkea = ManipulateArray::get($uomewyckeuqoqocu, "\x61\164\164\x72\x69\142\165\164\145\x73");
        goto ggioowsogoacmyyi;
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
        gaymgiaccgkgsiwq:
    }
}
