<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b1e8aa0c03             |
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
        $this->qcsmikeggeemccuu("\x77\x6f\x6f\x63\157\155\155\x65\162\143\145\x5f\x61\144\155\x69\156\x5f\x66\151\x65\154\x64\x5f\x63\165\x73\164\x6f\155", [$this, "\x67\155\x6d\x61\x71\161\x63\x6f\x75\x77\163\141\147\155\x69\147"]);
        parent::wigskegsqequoeks();
    }
    public function kgquecmsgcouyaya()
    {
        $this->cecaguuoecmccuse("\x77\157\x6f\x63\157\x6d\x6d\145\162\x63\145\137\x61\166\x61\151\154\141\142\154\145\x5f\166\141\162\x69\x61\164\151\x6f\156", [$this, "\x65\167\155\x69\x6f\163\151\161\163\x73\157\x65\145\x6f\141\x69"], 10, 3);
        parent::kgquecmsgcouyaya();
    }
    public function iemaakgqgqosiecm()
    {
        Attribute::symcgieuakksimmu();
        Variation::symcgieuakksimmu();
    }
    
    public function gmmaqqcouwsagmig($ywmkwiwkosakssii = [])
    {
        goto ukgkawqgeqswmywc;
        mgsusugkgmaowkwy:
        ManipulateHTML::sykissckqqccoiqs("\x74\x72", [], [ManipulateHTML::uuccukgasskgimsq("\164\x68", ["\x73\x63\157\160\x65" => "\162\x6f\167", "\x63\x6c\141\163\163" => "\164\151\164\x6c\x65\144\x65\163\x63"], ManipulateHTML::uuccukgasskgimsq("\x6c\141\142\x65\154", ["\x66\157\x72" => $aiowsaccomcoikus->mwikyscisascoeea()], ManipulateArray::get($ywmkwiwkosakssii, self::TITLE, $aiowsaccomcoikus->aakmagwggmkoiiyu()))), ManipulateHTML::uuccukgasskgimsq("\x74\144", [], $aiowsaccomcoikus->render(false))]);
        goto imyksgwckoyysuwo;
        wqmkimmusyyeicag:
        $aiowsaccomcoikus = MetaBox::okmsgamiiemyesao(array_filter($ywmkwiwkosakssii));
        goto ykymyiswyykokeoi;
        imyksgwckoyysuwo:
        usgiwsguoqiaguiu:
        goto gsmwukqywosmyauk;
        ykymyiswyykokeoi:
        if (!$aiowsaccomcoikus) {
            goto usgiwsguoqiaguiu;
        }
        goto mgsusugkgmaowkwy;
        ukgkawqgeqswmywc:
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\145\143\150\x6f" => true, "\143\165\163\164\157\155\x2d\x74\171\160\145" => self::TEXT]);
        goto smuaquguuyqakyyk;
        smuaquguuyqakyyk:
        $ywmkwiwkosakssii[self::TYPE] = $ywmkwiwkosakssii["\143\x75\163\164\x6f\x6d\55\164\x79\160\145"];
        goto wqmkimmusyyeicag;
        gsmwukqywosmyauk:
    }
    
    public function ewmiosiqssoeeoai($uomewyckeuqoqocu, $product, $isweyuoisomqyaag)
    {
        goto gsyiisgksesmwkme;
        euuwcqqueakwukom:
        foreach ($siquossayskcwkea as $ymqmyyeuycgmigyo => $aaokuekaimigoyue) {
            $uomewyckeuqoqocu["\x61\x74\164\x72\x69\x62\x75\x74\x65\x5f\x6e\x61\155\x65\x73"][$ymqmyyeuycgmigyo] = $isweyuoisomqyaag->get_attribute(str_replace("\141\164\x74\162\151\142\x75\x74\x65\137", '', $ymqmyyeuycgmigyo));
            siamksowsoewemyk:
        }
        goto gqeaoyucgsqueucg;
        ggyikcqwqysmouye:
        return $uomewyckeuqoqocu;
        goto uqwwsmumussiogou;
        iquaiwacukwgyksm:
        if (!$siquossayskcwkea) {
            goto kwiouekiyaeoeiwq;
        }
        goto euuwcqqueakwukom;
        gsyiisgksesmwkme:
        $siquossayskcwkea = ManipulateArray::get($uomewyckeuqoqocu, "\141\164\x74\x72\151\142\x75\x74\x65\163");
        goto iquaiwacukwgyksm;
        gqeaoyucgsqueucg:
        ayiescmccgoscuwm:
        goto ggioowsogoacmyyi;
        ggioowsogoacmyyi:
        kwiouekiyaeoeiwq:
        goto ggyikcqwqysmouye;
        uqwwsmumussiogou:
    }
}
