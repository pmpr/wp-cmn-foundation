<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613bb98fa102d             |
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
        $this->qcsmikeggeemccuu('woocommerce_admin_field_custom', [$this, 'gmmaqqcouwsagmig']);
        parent::wigskegsqequoeks();
    }
    public function kgquecmsgcouyaya()
    {
        $this->cecaguuoecmccuse('woocommerce_available_variation', [$this, 'ewmiosiqssoeeoai'], 10, 3);
        parent::kgquecmsgcouyaya();
    }
    public function iemaakgqgqosiecm()
    {
        Attribute::symcgieuakksimmu();
        Variation::symcgieuakksimmu();
    }
    
    public function gmmaqqcouwsagmig($ywmkwiwkosakssii = [])
    {
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ['echo' => true, 'custom-type' => self::TEXT]);
        $ywmkwiwkosakssii[self::TYPE] = $ywmkwiwkosakssii['custom-type'];
        $aiowsaccomcoikus = MetaBox::okmsgamiiemyesao(array_filter($ywmkwiwkosakssii));
        if ($aiowsaccomcoikus) {
            ManipulateHTML::sykissckqqccoiqs('tr', [], [ManipulateHTML::uuccukgasskgimsq('th', ['scope' => 'row', 'class' => 'titledesc'], ManipulateHTML::uuccukgasskgimsq('label', ['for' => $aiowsaccomcoikus->mwikyscisascoeea()], ManipulateArray::get($ywmkwiwkosakssii, self::TITLE, $aiowsaccomcoikus->aakmagwggmkoiiyu()))), ManipulateHTML::uuccukgasskgimsq('td', [], $aiowsaccomcoikus->render(false))]);
        }
    }
    
    public function ewmiosiqssoeeoai($uomewyckeuqoqocu, $product, $isweyuoisomqyaag)
    {
        $siquossayskcwkea = ManipulateArray::get($uomewyckeuqoqocu, 'attributes');
        if ($siquossayskcwkea) {
            foreach ($siquossayskcwkea as $ymqmyyeuycgmigyo => $aaokuekaimigoyue) {
                $uomewyckeuqoqocu['attribute_names'][$ymqmyyeuycgmigyo] = $isweyuoisomqyaag->get_attribute(str_replace('attribute_', '', $ymqmyyeuycgmigyo));
                igooksugieceoege:
            }
            cewmoqyysgsmuiya:
        }
        return $uomewyckeuqoqocu;
    }
}
