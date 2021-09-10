<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b5973b89a9             |
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
        $this->qcsmikeggeemccuu("\167\157\157\x63\x6f\x6d\x6d\x65\162\x63\145\137\x61\x64\155\151\156\137\146\151\x65\154\x64\x5f\x63\x75\x73\x74\x6f\155", [$this, "\147\155\155\x61\x71\161\x63\157\165\167\x73\141\147\155\x69\147"]);
        parent::wigskegsqequoeks();
    }
    public function kgquecmsgcouyaya()
    {
        $this->cecaguuoecmccuse("\x77\x6f\x6f\x63\157\155\x6d\x65\x72\x63\x65\x5f\x61\x76\141\x69\154\x61\142\154\x65\x5f\x76\141\162\x69\x61\x74\x69\157\x6e", [$this, "\145\167\155\151\157\163\151\161\163\163\x6f\x65\145\157\141\151"], 10, 3);
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
        ayiescmccgoscuwm:
        ManipulateHTML::sykissckqqccoiqs("\x74\x72", [], [ManipulateHTML::uuccukgasskgimsq("\164\x68", ["\x73\143\x6f\x70\145" => "\x72\x6f\x77", "\x63\154\141\163\163" => "\x74\151\x74\154\x65\144\x65\163\x63"], ManipulateHTML::uuccukgasskgimsq("\x6c\x61\x62\x65\x6c", ["\146\x6f\x72" => $aiowsaccomcoikus->mwikyscisascoeea()], ManipulateArray::get($ywmkwiwkosakssii, self::TITLE, $aiowsaccomcoikus->aakmagwggmkoiiyu()))), ManipulateHTML::uuccukgasskgimsq("\164\x64", [], $aiowsaccomcoikus->render(false))]);
        goto siamksowsoewemyk;
        ykymyiswyykokeoi:
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\145\x63\150\x6f" => true, "\x63\x75\163\164\157\x6d\55\164\171\x70\145" => self::TEXT]);
        goto mgsusugkgmaowkwy;
        gsmwukqywosmyauk:
        if (!$aiowsaccomcoikus) {
            goto wqmkimmusyyeicag;
        }
        goto ayiescmccgoscuwm;
        imyksgwckoyysuwo:
        $aiowsaccomcoikus = MetaBox::okmsgamiiemyesao(array_filter($ywmkwiwkosakssii));
        goto gsmwukqywosmyauk;
        mgsusugkgmaowkwy:
        $ywmkwiwkosakssii[self::TYPE] = $ywmkwiwkosakssii["\x63\x75\x73\x74\157\x6d\55\164\171\160\145"];
        goto imyksgwckoyysuwo;
        siamksowsoewemyk:
        wqmkimmusyyeicag:
        goto kwiouekiyaeoeiwq;
        kwiouekiyaeoeiwq:
    }
    
    public function ewmiosiqssoeeoai($uomewyckeuqoqocu, $product, $isweyuoisomqyaag)
    {
        goto gqeaoyucgsqueucg;
        uqwwsmumussiogou:
        gsyiisgksesmwkme:
        goto oekeqowkqecgsmuk;
        gqeaoyucgsqueucg:
        $siquossayskcwkea = ManipulateArray::get($uomewyckeuqoqocu, "\x61\x74\x74\162\x69\x62\x75\164\x65\163");
        goto ggioowsogoacmyyi;
        cequowgomkkwmoom:
        return $uomewyckeuqoqocu;
        goto gaymgiaccgkgsiwq;
        ggyikcqwqysmouye:
        foreach ($siquossayskcwkea as $ymqmyyeuycgmigyo => $aaokuekaimigoyue) {
            $uomewyckeuqoqocu["\141\x74\164\162\x69\x62\x75\164\145\137\x6e\141\x6d\145\163"][$ymqmyyeuycgmigyo] = $isweyuoisomqyaag->get_attribute(str_replace("\141\164\164\x72\151\x62\x75\x74\x65\x5f", '', $ymqmyyeuycgmigyo));
            iquaiwacukwgyksm:
        }
        goto uqwwsmumussiogou;
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
