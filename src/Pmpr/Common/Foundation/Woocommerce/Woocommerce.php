<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b2e4befc8c             |
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
        $this->qcsmikeggeemccuu("\167\x6f\x6f\143\157\x6d\155\x65\x72\143\145\x5f\x61\144\155\151\x6e\x5f\x66\x69\x65\154\x64\137\143\165\x73\x74\157\155", [$this, "\147\x6d\x6d\141\161\161\x63\157\x75\x77\163\x61\147\155\151\x67"]);
        parent::wigskegsqequoeks();
    }
    public function kgquecmsgcouyaya()
    {
        $this->cecaguuoecmccuse("\167\157\x6f\x63\157\155\155\x65\x72\143\145\x5f\x61\x76\x61\x69\154\x61\x62\154\145\x5f\x76\x61\162\151\141\x74\x69\157\156", [$this, "\x65\x77\155\151\x6f\163\151\161\x73\x73\157\145\x65\157\141\151"], 10, 3);
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
        siamksowsoewemyk:
        wqmkimmusyyeicag:
        goto kwiouekiyaeoeiwq;
        ykymyiswyykokeoi:
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\x65\143\x68\x6f" => true, "\x63\165\163\164\157\x6d\x2d\164\x79\x70\x65" => self::TEXT]);
        goto mgsusugkgmaowkwy;
        imyksgwckoyysuwo:
        $aiowsaccomcoikus = MetaBox::okmsgamiiemyesao(array_filter($ywmkwiwkosakssii));
        goto gsmwukqywosmyauk;
        mgsusugkgmaowkwy:
        $ywmkwiwkosakssii[self::TYPE] = $ywmkwiwkosakssii["\x63\165\x73\164\157\x6d\x2d\164\171\x70\x65"];
        goto imyksgwckoyysuwo;
        gsmwukqywosmyauk:
        if (!$aiowsaccomcoikus) {
            goto wqmkimmusyyeicag;
        }
        goto ayiescmccgoscuwm;
        ayiescmccgoscuwm:
        ManipulateHTML::sykissckqqccoiqs("\164\x72", [], [ManipulateHTML::uuccukgasskgimsq("\164\150", ["\163\x63\157\x70\145" => "\162\x6f\x77", "\x63\154\141\x73\x73" => "\x74\151\164\154\x65\144\x65\x73\x63"], ManipulateHTML::uuccukgasskgimsq("\x6c\x61\x62\145\x6c", ["\146\x6f\x72" => $aiowsaccomcoikus->mwikyscisascoeea()], ManipulateArray::get($ywmkwiwkosakssii, self::TITLE, $aiowsaccomcoikus->aakmagwggmkoiiyu()))), ManipulateHTML::uuccukgasskgimsq("\x74\144", [], $aiowsaccomcoikus->render(false))]);
        goto siamksowsoewemyk;
        kwiouekiyaeoeiwq:
    }
    
    public function ewmiosiqssoeeoai($uomewyckeuqoqocu, $product, $isweyuoisomqyaag)
    {
        goto gqeaoyucgsqueucg;
        cequowgomkkwmoom:
        return $uomewyckeuqoqocu;
        goto gaymgiaccgkgsiwq;
        uqwwsmumussiogou:
        gsyiisgksesmwkme:
        goto oekeqowkqecgsmuk;
        gqeaoyucgsqueucg:
        $siquossayskcwkea = ManipulateArray::get($uomewyckeuqoqocu, "\x61\164\164\162\151\142\x75\164\x65\163");
        goto ggioowsogoacmyyi;
        ggioowsogoacmyyi:
        if (!$siquossayskcwkea) {
            goto euuwcqqueakwukom;
        }
        goto ggyikcqwqysmouye;
        ggyikcqwqysmouye:
        foreach ($siquossayskcwkea as $ymqmyyeuycgmigyo => $aaokuekaimigoyue) {
            $uomewyckeuqoqocu["\141\164\164\162\x69\x62\165\164\x65\x5f\156\x61\x6d\145\163"][$ymqmyyeuycgmigyo] = $isweyuoisomqyaag->get_attribute(str_replace("\141\164\164\162\x69\142\x75\164\145\137", '', $ymqmyyeuycgmigyo));
            iquaiwacukwgyksm:
        }
        goto uqwwsmumussiogou;
        oekeqowkqecgsmuk:
        euuwcqqueakwukom:
        goto cequowgomkkwmoom;
        gaymgiaccgkgsiwq:
    }
}
