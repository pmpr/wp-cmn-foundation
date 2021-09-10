<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613bb98fa102d             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Woocommerce;

use Pmpr\Common\Foundation\Manipulate\ManipulateValidation;
use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulateWoocommerce;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateString;
use WC_Admin_Settings;

abstract class Setting extends Common
{
    const WOOCOMMERCE_ = 'woocommerce_';
    const STORED_ADDRESS = 'stored_address';
    const CATALOG_OPTIONS = 'catalog_options';
    const GENERAL_OPTIONS = 'general_options';
    const PRICING_OPTIONS = 'pricing_options';
    const PRODUCT_RATING_OPTIONS = 'product_rating_options';
    const DIGITAL_DOWNLOAD_OPTIONS = 'digital_download_options';
    const PRODUCT_INVENTORY_OPTIONS = 'product_inventory_options';
    const PRODUCT_MEASUREMENT_OPTIONS = 'product_measurement_options';
    public function kgquecmsgcouyaya()
    {
        $ywoucyskcquysiwc = ['general' => [self::STORED_ADDRESS, self::GENERAL_OPTIONS, self::PRICING_OPTIONS], 'shipping', 'inventory' => [self::PRODUCT_INVENTORY_OPTIONS], 'products_general' => [self::CATALOG_OPTIONS, self::PRODUCT_RATING_OPTIONS, self::PRODUCT_MEASUREMENT_OPTIONS], 'downloadable_products' => [self::DIGITAL_DOWNLOAD_OPTIONS], 'account_registration_options'];
        foreach ($ywoucyskcquysiwc as $cciauwuwuqaywgce => $mgiqqesweuqmsymo) {
            if (is_numeric($cciauwuwuqaywgce)) {
                $cciauwuwuqaywgce = $mgiqqesweuqmsymo;
            }
            $ekiuyucoiagmscgy = ManipulateString::qoqowykumameucwa($cciauwuwuqaywgce);
            if ($ekiuyucoiagmscgy = ManipulateValidation::pwcgsiswecasgkgs($this, $ekiuyucoiagmscgy)) {
                $this->cecaguuoecmccuse("woocommerce_{$cciauwuwuqaywgce}_settings", [$this, $ekiuyucoiagmscgy]);
            }
            if (is_array($mgiqqesweuqmsymo)) {
                foreach ($mgiqqesweuqmsymo as $awcmekyiwwkeyisq) {
                    $ekiuyucoiagmscgy = ManipulateString::qoqowykumameucwa("{$cciauwuwuqaywgce}_section_{$awcmekyiwwkeyisq}");
                    $amcsoieoyceiwyiy = "{$ekiuyucoiagmscgy}Start";
                    $oqeqeekoomwgugqi = "{$ekiuyucoiagmscgy}End";
                    if ($amcsoieoyceiwyiy = ManipulateValidation::pwcgsiswecasgkgs($this, $amcsoieoyceiwyiy)) {
                        $this->cecaguuoecmccuse("woocommerce_settings_{$awcmekyiwwkeyisq}", [$this, $amcsoieoyceiwyiy]);
                    }
                    if ($oqeqeekoomwgugqi = ManipulateValidation::pwcgsiswecasgkgs($this, $oqeqeekoomwgugqi)) {
                        $this->cecaguuoecmccuse("woocommerce_settings_{$awcmekyiwwkeyisq}_end", [$this, $oqeqeekoomwgugqi]);
                    }
                    wmywuusgukmmaams:
                }
                cmegwsegsosyqcai:
            }
            ewymsmkkiksgwysk:
        }
        giaacoqqqsekcayy:
        parent::kgquecmsgcouyaya();
    }
    
    public final function iuaucuookgoqiiio($ikgwqyuyckaewsow = [])
    {
        WC_Admin_Settings::output_fields($ikgwqyuyckaewsow);
    }
    
    public final function qkauysqeioauswys($aiowsaccomcoikus)
    {
        $this->iuaucuookgoqiiio([$aiowsaccomcoikus]);
    }
    
    public final function gmqowegieyawsgau($uwomkgseoiegeume, $ikgwqyuyckaewsow, $awcmekyiwwkeyisq, $qmeuaeiseuacgiqc = true)
    {
        return $this->ucgocwsamgumcyiq([$uwomkgseoiegeume], $ikgwqyuyckaewsow, $awcmekyiwwkeyisq, $qmeuaeiseuacgiqc);
    }
    
    public function ucgocwsamgumcyiq($uwomkgseoiegeume, $ikgwqyuyckaewsow, $awcmekyiwwkeyisq, $qmeuaeiseuacgiqc = true)
    {
        foreach ($uwomkgseoiegeume as $momcykaoccoymeig => $aiowsaccomcoikus) {
            $aiowsaccomcoikus[self::ID] = ManipulateArray::get($aiowsaccomcoikus, self::ID, $momcykaoccoymeig);
            $aiowsaccomcoikus[self::TYPE] = ManipulateArray::get($aiowsaccomcoikus, self::TYPE, self::TEXT);
            $uwomkgseoiegeume[$momcykaoccoymeig] = $aiowsaccomcoikus;
            ooeausyowguqicuo:
        }
        gkyawqqcmigqgaiq:
        $awcmekyiwwkeyisq = $this->gkookkaogucisskc($ikgwqyuyckaewsow, $awcmekyiwwkeyisq, $qmeuaeiseuacgiqc);
        if (is_numeric($awcmekyiwwkeyisq)) {
            if (!$qmeuaeiseuacgiqc) {
                $awcmekyiwwkeyisq++;
            }
            array_splice($ikgwqyuyckaewsow, $awcmekyiwwkeyisq, 0, $uwomkgseoiegeume);
        }
        return $ikgwqyuyckaewsow;
    }
    
    public function gkookkaogucisskc(array $ikgwqyuyckaewsow, string $awcmekyiwwkeyisq, $qmeuaeiseuacgiqc = true) : string
    {
        foreach ($ikgwqyuyckaewsow as $momcykaoccoymeig => $aiowsaccomcoikus) {
            if ($qmeuaeiseuacgiqc) {
                $ccamueccusigaaio = 'sectionend';
            } else {
                $ccamueccusigaaio = self::TITLE;
            }
            $aokagokqyuysuksm = ManipulateArray::get($aiowsaccomcoikus, self::ID);
            $sqeykgyoooqysmca = ManipulateArray::get($aiowsaccomcoikus, self::TYPE);
            if ($aokagokqyuysuksm == $awcmekyiwwkeyisq && $sqeykgyoooqysmca === $ccamueccusigaaio) {
                $awcmekyiwwkeyisq = $momcykaoccoymeig;
                goto egyyiccaeeiooaua;
            }
            scisgsyemmsekgos:
        }
        egyyiccaeeiooaua:
        return $awcmekyiwwkeyisq;
    }
    
    public static function eiwcuqigayigimak($uusmaiomayssaecw, $ggauoeuaesiymgee = null, $yuwymayicwwqiske = self::WOOCOMMERCE_)
    {
        if ($yuwymayicwwqiske && substr($uusmaiomayssaecw, 0, strlen($yuwymayicwwqiske)) === $yuwymayicwwqiske) {
            $yuwymayicwwqiske = '';
        }
        return ManipulateWoocommerce::giiuwsmyumqwwiyq($uusmaiomayssaecw, $ggauoeuaesiymgee, $yuwymayicwwqiske);
    }
    
    protected static function ossscgwwiwwqyuiy($uusmaiomayssaecw, $megmggkiokqkcwou = [])
    {
        $cmqeouisgweqguee = self::eiwcuqigayigimak($uusmaiomayssaecw);
        if (is_array($cmqeouisgweqguee) && $cmqeouisgweqguee && is_array($megmggkiokqkcwou) && $megmggkiokqkcwou) {
            $cmqeouisgweqguee = array_flip($cmqeouisgweqguee);
            $oammesyieqmwuwyi = [];
            if (is_array($megmggkiokqkcwou) && is_array($cmqeouisgweqguee)) {
                $oammesyieqmwuwyi = array_intersect_key($megmggkiokqkcwou, $cmqeouisgweqguee);
            }
        } else {
            $oammesyieqmwuwyi = $cmqeouisgweqguee;
        }
        return $oammesyieqmwuwyi;
    }
}
