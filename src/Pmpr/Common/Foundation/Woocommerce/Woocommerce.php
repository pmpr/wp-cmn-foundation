<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b30261f503             |
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
        $this->qcsmikeggeemccuu("\167\x6f\157\x63\x6f\155\155\x65\x72\143\x65\137\x61\144\x6d\x69\x6e\137\x66\x69\x65\x6c\x64\137\x63\165\x73\164\157\x6d", [$this, "\x67\x6d\155\141\161\x71\143\157\165\167\163\141\147\x6d\151\147"]);
        parent::wigskegsqequoeks();
    }
    public function kgquecmsgcouyaya()
    {
        $this->cecaguuoecmccuse("\167\x6f\157\143\157\155\x6d\x65\162\143\145\x5f\x61\x76\141\151\x6c\141\142\x6c\145\137\166\141\162\x69\x61\x74\151\157\156", [$this, "\x65\x77\155\x69\x6f\x73\151\161\x73\x73\157\x65\x65\x6f\141\151"], 10, 3);
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
        $ywmkwiwkosakssii[self::TYPE] = $ywmkwiwkosakssii["\143\x75\x73\164\x6f\x6d\55\x74\171\160\x65"];
        goto imyksgwckoyysuwo;
        ayiescmccgoscuwm:
        ManipulateHTML::sykissckqqccoiqs("\164\162", [], [ManipulateHTML::uuccukgasskgimsq("\x74\x68", ["\163\x63\x6f\160\145" => "\162\157\x77", "\x63\x6c\141\x73\163" => "\164\151\x74\154\x65\x64\145\x73\143"], ManipulateHTML::uuccukgasskgimsq("\x6c\x61\142\x65\154", ["\x66\x6f\x72" => $aiowsaccomcoikus->mwikyscisascoeea()], ManipulateArray::get($ywmkwiwkosakssii, self::TITLE, $aiowsaccomcoikus->aakmagwggmkoiiyu()))), ManipulateHTML::uuccukgasskgimsq("\x74\144", [], $aiowsaccomcoikus->render(false))]);
        goto siamksowsoewemyk;
        ykymyiswyykokeoi:
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\145\143\150\157" => true, "\143\x75\x73\x74\157\155\55\x74\171\160\145" => self::TEXT]);
        goto mgsusugkgmaowkwy;
        siamksowsoewemyk:
        wqmkimmusyyeicag:
        goto kwiouekiyaeoeiwq;
        imyksgwckoyysuwo:
        $aiowsaccomcoikus = MetaBox::okmsgamiiemyesao(array_filter($ywmkwiwkosakssii));
        goto gsmwukqywosmyauk;
        kwiouekiyaeoeiwq:
    }
    
    public function ewmiosiqssoeeoai($uomewyckeuqoqocu, $product, $isweyuoisomqyaag)
    {
        goto gqeaoyucgsqueucg;
        oekeqowkqecgsmuk:
        euuwcqqueakwukom:
        goto cequowgomkkwmoom;
        cequowgomkkwmoom:
        return $uomewyckeuqoqocu;
        goto gaymgiaccgkgsiwq;
        ggioowsogoacmyyi:
        if (!$siquossayskcwkea) {
            goto euuwcqqueakwukom;
        }
        goto ggyikcqwqysmouye;
        gqeaoyucgsqueucg:
        $siquossayskcwkea = ManipulateArray::get($uomewyckeuqoqocu, "\141\x74\164\x72\151\142\165\x74\x65\163");
        goto ggioowsogoacmyyi;
        uqwwsmumussiogou:
        gsyiisgksesmwkme:
        goto oekeqowkqecgsmuk;
        ggyikcqwqysmouye:
        foreach ($siquossayskcwkea as $ymqmyyeuycgmigyo => $aaokuekaimigoyue) {
            $uomewyckeuqoqocu["\x61\164\x74\x72\x69\x62\x75\164\x65\137\x6e\x61\155\x65\x73"][$ymqmyyeuycgmigyo] = $isweyuoisomqyaag->get_attribute(str_replace("\x61\x74\x74\162\151\x62\x75\164\145\x5f", '', $ymqmyyeuycgmigyo));
            iquaiwacukwgyksm:
        }
        goto uqwwsmumussiogou;
        gaymgiaccgkgsiwq:
    }
}
