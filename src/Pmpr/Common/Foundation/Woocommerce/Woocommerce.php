<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613a1be32d755             |
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
        $this->qcsmikeggeemccuu("\167\157\x6f\x63\157\x6d\155\145\162\143\145\137\x61\x64\x6d\x69\x6e\137\x66\151\x65\x6c\144\x5f\x63\x75\x73\164\x6f\155", [$this, "\147\155\155\x61\161\x71\143\x6f\165\x77\x73\x61\x67\155\151\x67"]);
        parent::wigskegsqequoeks();
    }
    public function kgquecmsgcouyaya()
    {
        $this->cecaguuoecmccuse("\x77\x6f\x6f\143\157\155\x6d\145\162\x63\145\137\141\x76\141\151\x6c\x61\x62\x6c\x65\x5f\166\141\162\151\x61\x74\151\x6f\x6e", [$this, "\145\167\x6d\x69\157\x73\x69\x71\163\163\x6f\145\145\157\x61\151"], 10, 3);
        parent::kgquecmsgcouyaya();
    }
    public function iemaakgqgqosiecm()
    {
        Attribute::symcgieuakksimmu();
        Variation::symcgieuakksimmu();
    }
    
    public function gmmaqqcouwsagmig($ywmkwiwkosakssii = [])
    {
        goto komymyuaekmkkiko;
        imyemkiyouuuequq:
        ManipulateHTML::sykissckqqccoiqs("\164\162", [], [ManipulateHTML::uuccukgasskgimsq("\x74\x68", ["\163\143\x6f\160\145" => "\162\x6f\x77", "\x63\154\x61\163\163" => "\164\151\x74\x6c\145\144\x65\x73\143"], ManipulateHTML::uuccukgasskgimsq("\154\x61\x62\145\x6c", ["\146\157\x72" => $aiowsaccomcoikus->mwikyscisascoeea()], ManipulateArray::get($ywmkwiwkosakssii, self::TITLE, $aiowsaccomcoikus->aakmagwggmkoiiyu()))), ManipulateHTML::uuccukgasskgimsq("\x74\x64", [], $aiowsaccomcoikus->render(false))]);
        goto awgeaewuaksssysc;
        kkowueuygsqqgogc:
        $ywmkwiwkosakssii[self::TYPE] = $ywmkwiwkosakssii["\x63\165\x73\164\157\x6d\x2d\164\171\x70\145"];
        goto qccawiseummsemsk;
        wiikygmkoykkkgyw:
        if (!$aiowsaccomcoikus) {
            goto muaokgycwsoimmaw;
        }
        goto imyemkiyouuuequq;
        awgeaewuaksssysc:
        muaokgycwsoimmaw:
        goto mukmkmiwaaowwymu;
        komymyuaekmkkiko:
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\x65\143\x68\x6f" => true, "\x63\165\x73\164\157\x6d\x2d\x74\171\x70\x65" => self::TEXT]);
        goto kkowueuygsqqgogc;
        qccawiseummsemsk:
        $aiowsaccomcoikus = MetaBox::okmsgamiiemyesao(array_filter($ywmkwiwkosakssii));
        goto wiikygmkoykkkgyw;
        mukmkmiwaaowwymu:
    }
    
    public function ewmiosiqssoeeoai($uomewyckeuqoqocu, $product, $isweyuoisomqyaag)
    {
        goto ueikeuosueikmmqy;
        imwggkqiceiqwwyw:
        if (!$siquossayskcwkea) {
            goto oqoksuwkayakeyco;
        }
        goto yoummmmsocscggua;
        ueikeuosueikmmqy:
        $siquossayskcwkea = ManipulateArray::get($uomewyckeuqoqocu, "\x61\164\x74\162\151\142\x75\x74\x65\163");
        goto imwggkqiceiqwwyw;
        yoummmmsocscggua:
        foreach ($siquossayskcwkea as $ymqmyyeuycgmigyo => $aaokuekaimigoyue) {
            $uomewyckeuqoqocu["\x61\x74\164\162\151\x62\165\x74\x65\137\x6e\141\155\x65\163"][$ymqmyyeuycgmigyo] = $isweyuoisomqyaag->get_attribute(str_replace("\x61\164\x74\x72\x69\142\165\x74\145\137", '', $ymqmyyeuycgmigyo));
            egamkewimgoayiwc:
        }
        goto uewomuwyiswwamwg;
        cceqaegwsqgaqges:
        oqoksuwkayakeyco:
        goto wyscaumqgyqycymq;
        wyscaumqgyqycymq:
        return $uomewyckeuqoqocu;
        goto sgkiwwkeeuyuyqwg;
        uewomuwyiswwamwg:
        kmqgwuksekimwosw:
        goto cceqaegwsqgaqges;
        sgkiwwkeeuyuyqwg:
    }
}
