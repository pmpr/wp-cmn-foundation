<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613bb98fa102d             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Decorator\Plugin;

use Pmpr\Common\Foundation\Decorator\DecoratorSanitize;
use Pmpr\Common\Foundation\Manipulate\ManipulateFormat;
use WC_Order;
use WC_Order_Refund;
use WC_Product;

class DecoratorWoocommerce extends Common
{
    
    public static function ouqoeawmueswmksm() : array
    {
        return self::qyyygkguqcmgkmey('wc_get_is_paid_statuses', []);
    }
    
    public static function kgikcmyuyomawmgw($ymqmyyeuycgmigyo) : bool
    {
        return self::qyyygkguqcmgkmey('taxonomy_is_product_attribute', false, $ymqmyyeuycgmigyo);
    }
    
    public static function mqsqiyqiceqasokq() : array
    {
        return self::qyyygkguqcmgkmey('wc_get_attribute_taxonomies', []);
    }
    
    public static function gmeusukogwcamcyc($ymkomoccmymcoiea) : string
    {
        $ggauoeuaesiymgee = 'attribute_' . DecoratorSanitize::wouqysuosmigaggy($ymkomoccmymcoiea);
        return self::qyyygkguqcmgkmey('wc_variation_attribute_name', $ggauoeuaesiymgee, $ymkomoccmymcoiea);
    }
    
    public static function scemgqiggsykoisk($ymkomoccmymcoiea) : string
    {
        return self::qyyygkguqcmgkmey('wc_attribute_taxonomy_name', $ymkomoccmymcoiea, $ymkomoccmymcoiea);
    }
    
    public static function wayckuoqggqsuiys() : bool
    {
        return self::qyyygkguqcmgkmey('is_shop');
    }
    
    public static function wwgwoqsqqmseioea() : bool
    {
        return self::qyyygkguqcmgkmey('is_woocommerce');
    }
    
    public static function ogequuuycswsseas($ywmkwiwkosakssii = []) : array
    {
        return self::qyyygkguqcmgkmey('wc_get_orders', [], $ywmkwiwkosakssii);
    }
    
    public static function useawgqusasoukqm() : string
    {
        return self::qyyygkguqcmgkmey('get_woocommerce_currency', '');
    }
    
    public static function wmqwkwyuqwksiiqk() : bool
    {
        return self::qyyygkguqcmgkmey('is_cart');
    }
    
    public static function mmmcswscsiecscwg($umwqusowiqmyseom)
    {
        return self::qyyygkguqcmgkmey('wc_get_order', false, $umwqusowiqmyseom);
    }
    
    public static function ueqkgikommgyqmoa($iueymcwwscwqkiyq) : string
    {
        return self::qyyygkguqcmgkmey('wc_get_order_status_name', '', $iueymcwwscwqkiyq);
    }
    
    public static function kmymkocwcawgeccm() : bool
    {
        return self::qyyygkguqcmgkmey('is_product');
    }
    
    public static function imsiwqgqaeceoomu($suaemuyiacqyugsm) : int
    {
        return self::qyyygkguqcmgkmey('wc_get_page_id', 0, $suaemuyiacqyugsm);
    }
    
    public static function gqoskmoekogyqwsc() : bool
    {
        return self::qyyygkguqcmgkmey('is_checkout');
    }
    
    public static function aqasygcsqysmmyke($aokagokqyuysuksm = null)
    {
        global $product;
        if (!$aokagokqyuysuksm && $product) {
            $sogksuscggsicmac = $product;
        } else {
            $sogksuscggsicmac = self::qyyygkguqcmgkmey('wc_get_product', null, $aokagokqyuysuksm);
            if (!$sogksuscggsicmac) {
                $sogksuscggsicmac = self::qyyygkguqcmgkmey('get_product', null, $aokagokqyuysuksm);
            }
        }
        return $sogksuscggsicmac;
    }
    
    public static function eywqaumgkccycyau($ywmkwiwkosakssii = [])
    {
        woocommerce_wp_text_input($ywmkwiwkosakssii);
    }
    
    public static function ckeyeaouokcgeqeq() : bool
    {
        return function_exists('is_account_page') && is_account_page();
    }
    
    public static function ageqswwkkqywckco($ywmkwiwkosakssii = [])
    {
        return wc_get_products($ywmkwiwkosakssii);
    }
    
    public static function aumscagymwyyicag($aumscagymwyyicag, $ywmkwiwkosakssii = []) : string
    {
        return wc_price($aumscagymwyyicag, $ywmkwiwkosakssii);
    }
    
    public static function owuaywucuaiyocum($product) : string
    {
        $aumscagymwyyicag = '';
        $product = self::aqasygcsqysmmyke($product);
        if ($product) {
            
            $aumscagymwyyicag = $product->get_price();
        }
        return $aumscagymwyyicag;
    }
    
    public static function oeiymaksaoqaeqkk($product, $ywmkwiwkosakssii = []) : float
    {
        $aumscagymwyyicag = 0;
        $product = self::aqasygcsqysmmyke($product);
        if ($product) {
            $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ['qty' => 1, 'price' => self::owuaywucuaiyocum($product)]);
            if (function_exists('wc_get_price_including_tax')) {
                
                $aumscagymwyyicag = wc_get_price_including_tax($product, $ywmkwiwkosakssii);
            } else {
                
                
                $aumscagymwyyicag = $product->get_price_including_tax($ywmkwiwkosakssii['qty'], $ywmkwiwkosakssii['price']);
            }
        }
        return $aumscagymwyyicag;
    }
    
    public static function uewkmqiiguwwscwy($product, $ywmkwiwkosakssii = [])
    {
        $aumscagymwyyicag = 0;
        $product = self::aqasygcsqysmmyke($product);
        if ($product) {
            $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ['qty' => 1, 'price' => self::owuaywucuaiyocum($product)]);
            if (function_exists('wc_get_price_excluding_tax')) {
                $aumscagymwyyicag = wc_get_price_excluding_tax($product, $ywmkwiwkosakssii);
            } else {
                
                $aumscagymwyyicag = $product->get_price_excluding_tax($ywmkwiwkosakssii['qty'], $ywmkwiwkosakssii['price']);
            }
        }
        return $aumscagymwyyicag;
    }
    
    public static function soqyyosiiqwwucga($wwigiesyquoeawog = '') : string
    {
        return get_woocommerce_currency_symbol($wwigiesyquoeawog);
    }
    
    public static function qysciqmmoqsaqmqk($ymqmyyeuycgmigyo, $product = '') : string
    {
        return wc_attribute_label($ymqmyyeuycgmigyo, $product);
    }
    
    public static function yiggueaiwiygoiyi($uamcoiueqaamsqma, $sqeykgyoooqysmca = 'success', $icwicymcioeyeyek = [])
    {
        wc_add_notice($uamcoiueqaamsqma, $sqeykgyoooqysmca, $icwicymcioeyeyek);
    }
    
    public static function mywkcmciykgikmyc($product, $kesssewsiegssiya, $ywmkwiwkosakssii = []) : array
    {
        return wc_get_product_terms($product, $kesssewsiegssiya, $ywmkwiwkosakssii);
    }
}
