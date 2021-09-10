<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613bb98fa102d             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Woocommerce\Attribute;

use Pmpr\Common\Foundation\FormMaker\Admin\Field\Field;
use Pmpr\Common\Foundation\Manipulate\ManipulateServer;
use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulateWoocommerce;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;
use WC_Product_Attribute;

abstract class BaseAttribute extends Common
{
    
    protected array $fields = [];
    
    protected ?string $name = null;
    public function kgquecmsgcouyaya()
    {
        $this->cecaguuoecmccuse('woocommerce_attribute_output', [$this, 'noqumqaqismmkacu'], 99, 4);
        parent::kgquecmsgcouyaya();
    }
    
    public function aakmagwggmkoiiyu() : ?string
    {
        return $this->name;
    }
    
    public function ugmceccgwaaaigiy($product = null) : array
    {
        return (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("woocommerce_{$this->aakmagwggmkoiiyu()}_attribute_custom_fields"), $this->fields, $product);
    }
    
    public function mkksewyosgeumwsa(Field $aiowsaccomcoikus) : self
    {
        $this->fields[$aiowsaccomcoikus->mwikyscisascoeea()] = $aiowsaccomcoikus;
        return $this;
    }
    
    public function aqasygcsqysmmyke($aokagokqyuysuksm = null) : int
    {
        $product = ManipulateServer::ayueggmoqeeukqmq('post_id');
        if (!$product || $aokagokqyuysuksm) {
            $product = ManipulateWoocommerce::omwkqcuwceweymcc($aokagokqyuysuksm);
        }
        return absint($product);
    }
    
    public function noqumqaqismmkacu($aqykuigiuwmmcieu, $ymkomoccmymcoiea, $product)
    {
        $product = $this->aqasygcsqysmmyke($product);
        if ($ymkomoccmymcoiea instanceof WC_Product_Attribute) {
            $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy($product);
            foreach ($ikgwqyuyckaewsow as $uusmaiomayssaecw => $aiowsaccomcoikus) {
                if ($aiowsaccomcoikus instanceof Field) {
                    if (is_numeric($uusmaiomayssaecw)) {
                        $uusmaiomayssaecw = $aiowsaccomcoikus->mwikyscisascoeea();
                    }
                    if (!ManipulateArray::get($aqykuigiuwmmcieu, $uusmaiomayssaecw)) {
                        $aqykuigiuwmmcieu[$uusmaiomayssaecw] = $this->qooeaookuemoqecm($aiowsaccomcoikus->mwikyscisascoeea(), $this->uqsmmauywmsuqais($ymkomoccmymcoiea));
                    }
                }
                acsqgiuageaasiyy:
            }
            mugqyyeayeyggqqk:
        }
        return $aqykuigiuwmmcieu;
    }
    
    public abstract function qooeaookuemoqecm($qqgocisyeuuqmcwc, $ymkomoccmymcoiea);
    
    public abstract function uqsmmauywmsuqais($ymkomoccmymcoiea) : ?string;
}
