<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b3993be3fb             |
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
        $this->qcsmikeggeemccuu("\x77\157\x6f\x63\157\x6d\x6d\145\162\x63\x65\137\141\144\x6d\x69\x6e\137\146\x69\145\154\144\x5f\143\x75\163\164\157\155", [$this, "\x67\155\155\141\x71\161\143\x6f\165\167\163\141\x67\x6d\x69\147"]);
        parent::wigskegsqequoeks();
    }
    public function kgquecmsgcouyaya()
    {
        $this->cecaguuoecmccuse("\167\157\x6f\143\157\x6d\x6d\145\162\x63\x65\x5f\141\166\141\x69\x6c\x61\x62\154\145\x5f\x76\141\162\x69\141\x74\x69\157\x6e", [$this, "\x65\x77\155\x69\157\x73\x69\161\163\x73\157\145\x65\x6f\141\151"], 10, 3);
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
        ayiescmccgoscuwm:
        ManipulateHTML::sykissckqqccoiqs("\x74\x72", [], [ManipulateHTML::uuccukgasskgimsq("\164\x68", ["\163\x63\157\160\x65" => "\162\x6f\167", "\x63\x6c\x61\163\x73" => "\x74\151\164\154\x65\x64\x65\x73\143"], ManipulateHTML::uuccukgasskgimsq("\x6c\x61\142\x65\154", ["\x66\157\162" => $aiowsaccomcoikus->mwikyscisascoeea()], ManipulateArray::get($ywmkwiwkosakssii, self::TITLE, $aiowsaccomcoikus->aakmagwggmkoiiyu()))), ManipulateHTML::uuccukgasskgimsq("\164\144", [], $aiowsaccomcoikus->render(false))]);
        goto siamksowsoewemyk;
        ykymyiswyykokeoi:
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\x65\x63\x68\157" => true, "\x63\165\x73\164\x6f\155\x2d\164\171\160\145" => self::TEXT]);
        goto mgsusugkgmaowkwy;
        mgsusugkgmaowkwy:
        $ywmkwiwkosakssii[self::TYPE] = $ywmkwiwkosakssii["\143\165\x73\164\x6f\155\55\x74\171\160\x65"];
        goto imyksgwckoyysuwo;
        gsmwukqywosmyauk:
        if (!$aiowsaccomcoikus) {
            goto wqmkimmusyyeicag;
        }
        goto ayiescmccgoscuwm;
        imyksgwckoyysuwo:
        $aiowsaccomcoikus = MetaBox::okmsgamiiemyesao(array_filter($ywmkwiwkosakssii));
        goto gsmwukqywosmyauk;
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
        ggioowsogoacmyyi:
        if (!$siquossayskcwkea) {
            goto euuwcqqueakwukom;
        }
        goto ggyikcqwqysmouye;
        ggyikcqwqysmouye:
        foreach ($siquossayskcwkea as $ymqmyyeuycgmigyo => $aaokuekaimigoyue) {
            $uomewyckeuqoqocu["\141\x74\164\162\151\x62\165\164\x65\137\156\141\x6d\x65\x73"][$ymqmyyeuycgmigyo] = $isweyuoisomqyaag->get_attribute(str_replace("\141\x74\164\x72\151\x62\x75\x74\x65\x5f", '', $ymqmyyeuycgmigyo));
            iquaiwacukwgyksm:
        }
        goto uqwwsmumussiogou;
        oekeqowkqecgsmuk:
        euuwcqqueakwukom:
        goto cequowgomkkwmoom;
        gqeaoyucgsqueucg:
        $siquossayskcwkea = ManipulateArray::get($uomewyckeuqoqocu, "\141\x74\164\x72\x69\x62\x75\164\145\163");
        goto ggioowsogoacmyyi;
        gaymgiaccgkgsiwq:
    }
}
