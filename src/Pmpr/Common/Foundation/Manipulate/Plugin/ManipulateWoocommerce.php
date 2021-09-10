<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613bb98fa102d             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Manipulate\Plugin;

use Pmpr\Common\Foundation\Decorator\DecoratorHook;
use Pmpr\Common\Foundation\Decorator\DecoratorOption;
use Pmpr\Common\Foundation\Decorator\DecoratorQuery;
use Pmpr\Common\Foundation\Decorator\DecoratorSanitize;
use Pmpr\Common\Foundation\Decorator\Plugin\DecoratorWoocommerce;
use Pmpr\Common\Foundation\Decorator\Taxonomy\DecoratorTaxonomy;
use Pmpr\Common\Foundation\Manipulate\Manipulate;
use Pmpr\Common\Foundation\Manipulate\ManipulateFormat;
use Pmpr\Common\Foundation\Manipulate\ManipulateUser;
use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost;
use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTerm;
use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateHTML;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateString;
use WC_Cart;
use WC_Checkout;
use WC_Coupon;
use WC_Product_Variable;
use WooCommerce;

class ManipulateWoocommerce extends Manipulate
{
    
    public static function kuoewkkoaoyaagmi(array $isweyuoisomqyaag) : array
    {
        $sogksuscggsicmac = [];
        $seyqqsmuaiegkeeq = DecoratorWoocommerce::mqsqiyqiceqasokq();
        foreach ($isweyuoisomqyaag as $ymqmyyeuycgmigyo => $igqsaukqcqscimok) {
            $kesssewsiegssiya = ManipulateArray::get($seyqqsmuaiegkeeq, ManipulateString::wiecmkiugmyyqiqc('pa_', '', $ymqmyyeuycgmigyo));
            if ($kesssewsiegssiya) {
                $sogksuscggsicmac[$ymqmyyeuycgmigyo] = ['ymkomoccmymcoiea' => $kesssewsiegssiya, 'iwewcwusemqaiggk' => []];
            }
            yiceawuuiusakwiq:
        }
        qeuyekusasqmcqms:
        return $sogksuscggsicmac;
    }
    
    public static function kyycwccmaemgokwu($smwiiesyqsgyisos) : string
    {
        if (!$smwiiesyqsgyisos instanceof WC_Coupon) {
            $smwiiesyqsgyisos = new WC_Coupon($smwiiesyqsgyisos);
        }
        
        return $smwiiesyqsgyisos->get_code();
    }
    
    public static function oeeuywgiaywkimek($smwiiesyqsgyisos)
    {
        $smwiiesyqsgyisos = new WC_Coupon($smwiiesyqsgyisos);
        if (!self::kyycwccmaemgokwu($smwiiesyqsgyisos)) {
            $smwiiesyqsgyisos = false;
        }
        return $smwiiesyqsgyisos;
    }
    
    public static function cuwomiomuqqkayoo($ioakeqoosmkukeaa)
    {
        $wwcysoksoogyacog = ManipulateWoocommerce::uceecgsoicggikeu();
        if ($wwcysoksoogyacog) {
            
            $wwcysoksoogyacog->add_discount($ioakeqoosmkukeaa);
        }
    }
    
    public static function mmmcswscsiecscwg($umwqusowiqmyseom)
    {
        if (!is_a($umwqusowiqmyseom, 'WC_Order')) {
            $umwqusowiqmyseom = DecoratorWoocommerce::mmmcswscsiecscwg($umwqusowiqmyseom);
        }
        return $umwqusowiqmyseom;
    }
    
    public static function wcqicmcuiewessgy($umwqusowiqmyseom) : string
    {
        $umwqusowiqmyseom = self::mmmcswscsiecscwg($umwqusowiqmyseom);
        $iueymcwwscwqkiyq = '';
        if ($umwqusowiqmyseom) {
            $iueymcwwscwqkiyq = DecoratorWoocommerce::ueqkgikommgyqmoa($umwqusowiqmyseom->get_status());
        }
        return $iueymcwwscwqkiyq;
    }
    
    public static function susisykioakswkmm($umwqusowiqmyseom) : string
    {
        $qsegigkmaaskiaeo = '';
        $umwqusowiqmyseom = self::mmmcswscsiecscwg($umwqusowiqmyseom);
        if ($umwqusowiqmyseom) {
            if ($umwqusowiqmyseom->get_billing_first_name() || $umwqusowiqmyseom->get_billing_last_name()) {
                $qsegigkmaaskiaeo = trim(sprintf("%s %s", $umwqusowiqmyseom->get_billing_first_name(), $umwqusowiqmyseom->get_billing_last_name()));
            } else {
                if ($umwqusowiqmyseom->get_billing_company()) {
                    $qsegigkmaaskiaeo = trim($umwqusowiqmyseom->get_billing_company());
                } else {
                    if ($umwqusowiqmyseom->get_customer_id()) {
                        $mkucggyaiaukqoce = ManipulateUser::get($umwqusowiqmyseom->get_customer_id(), true);
                        if ($mkucggyaiaukqoce) {
                            $qsegigkmaaskiaeo = ucwords($mkucggyaiaukqoce->display_name);
                        }
                    }
                }
            }
        }
        return $qsegigkmaaskiaeo;
    }
    
    public static function ogequuuycswsseas($ywmkwiwkosakssii = []) : array
    {
        return DecoratorWoocommerce::ogequuuycswsseas($ywmkwiwkosakssii);
    }
    
    public static function icsokmyykmuweoco($suaemuyiacqyugsm, $post = null) : bool
    {
        return DecoratorWoocommerce::imsiwqgqaeceoomu($suaemuyiacqyugsm) == ManipulatePost::mwikyscisascoeea($post);
    }
    public static function uauicwgqqogawesc()
    {
        if (function_exists('wc_empty_cart')) {
            wc_empty_cart();
        } else {
            $wwcysoksoogyacog = self::uceecgsoicggikeu();
            if ($wwcysoksoogyacog) {
                $wwcysoksoogyacog->empty_cart();
            }
        }
    }
    
    public static function uakuwyoiooeqqiow() : array
    {
        $wwcysoksoogyacog = self::uceecgsoicggikeu();
        $ygwoqcwsaggqoamw = [];
        if ($wwcysoksoogyacog) {
            $ygwoqcwsaggqoamw = $wwcysoksoogyacog->get_cart_contents();
        }
        return $ygwoqcwsaggqoamw;
    }
    
    public static function geoemsmuouqcqmei() : ?string
    {
        $woocommerce = self::kkewuuisyiscmgyc();
        if (function_exists('wc_get_cart_url')) {
            return wc_get_cart_url();
        } else {
            return $woocommerce->cart->get_cart_url();
        }
    }
    
    public static function ayseokmqycoqaigc() : bool
    {
        return class_exists('woocommerce') && ManipulatePlugin::ggocakcisguuokai('woocommerce/woocommerce.php');
    }
    
    public static function uiskcesaqyyewwsa() : bool
    {
        return DecoratorWoocommerce::wayckuoqggqsuiys() || self::gmowuaggkmgkseyo();
    }
    
    public static function gyewmgoywgqycmck() : bool
    {
        return DecoratorWoocommerce::kmymkocwcawgeccm() && !self::yaaucgakecuykawk() && !self::ogkieiokqueakmyc();
    }
    
    public static function kcwiwskyggmcimie($umwqusowiqmyseom) : ?int
    {
        $aokagokqyuysuksm = $umwqusowiqmyseom;
        if (is_a($umwqusowiqmyseom, 'WC_Order')) {
            $aokagokqyuysuksm = $umwqusowiqmyseom->get_id();
        }
        return $aokagokqyuysuksm;
    }
    
    public static function aqasygcsqysmmyke($product = null)
    {
        if (!is_a($product, 'WC_Product')) {
            $product = DecoratorWoocommerce::aqasygcsqysmmyke($product);
        }
        return $product;
    }
    
    public static function mkiigkeqaeiwqyua() : bool
    {
        return in_array(DecoratorWoocommerce::useawgqusasoukqm(), ['IRT', 'IRR']);
    }
    
    public static function eywqaumgkccycyau($aokagokqyuysuksm, $ywmkwiwkosakssii = [])
    {
        $ywmkwiwkosakssii[self::ID] = $aokagokqyuysuksm;
        $wkyuegumgeqqqmyg = [];
        foreach ($wkyuegumgeqqqmyg as $aiowsaccomcoikus) {
            if (isset($ywmkwiwkosakssii[$aiowsaccomcoikus])) {
                $ywmkwiwkosakssii[$aiowsaccomcoikus] = DecoratorSanitize::aoeoykwemwaqsikc($ywmkwiwkosakssii[$aiowsaccomcoikus]);
            }
            qwisiamkmkkwucyo:
        }
        sgocecweikecwwgq:
        DecoratorWoocommerce::eywqaumgkccycyau($ywmkwiwkosakssii);
    }
    
    public static function oseiymowmquqkaca() : bool
    {
        global $woocommerce_loop;
        return DecoratorWoocommerce::kmymkocwcawgeccm() && isset($woocommerce_loop['name']) && in_array($woocommerce_loop['name'], ["related", "up - sells"]);
    }
    
    public static function kyckwuuiqwmyoqma() : ?\WC_Query
    {
        $gqgemcmoicmgaqie = null;
        $woocommerce = self::kkewuuisyiscmgyc();
        if ($woocommerce) {
            $gqgemcmoicmgaqie = $woocommerce->query;
        }
        return $gqgemcmoicmgaqie;
    }
    
    public static function kkewuuisyiscmgyc() : WooCommerce
    {
        if (function_exists('WC')) {
            $mksyucucyswaukig = WC();
        } else {
            global $woocommerce;
            $mksyucucyswaukig = $woocommerce;
        }
        return $mksyucucyswaukig;
    }
    
    public static function scgumisucgwskyqk($product, $mgkceomocowocqyo = 'view') : string
    {
        $aumscagymwyyicag = '';
        $product = self::aqasygcsqysmmyke($product);
        if ($product) {
            if (method_exists($product, 'get_sale_price')) {
                $eyuymeqcioasuyyi = $product->get_regular_price($mgkceomocowocqyo);
            } else {
                $eyuymeqcioasuyyi = $product->regular_price;
            }
            $aumscagymwyyicag = DecoratorHook::sscegwueamckwmcy('woocommerce_product_regular_price', $eyuymeqcioasuyyi, $product);
        }
        return $aumscagymwyyicag;
    }
    
    public static function asaycagaeksiumkw($product, $mgkceomocowocqyo = 'view') : string
    {
        $aumscagymwyyicag = '';
        $product = self::aqasygcsqysmmyke($product);
        if ($product) {
            if (method_exists($product, 'get_sale_price')) {
                $eyuymeqcioasuyyi = $product->get_sale_price($mgkceomocowocqyo);
            } else {
                $eyuymeqcioasuyyi = $product->sale_price;
            }
            $aumscagymwyyicag = DecoratorHook::sscegwueamckwmcy('woocommerce_product_sale_price', $eyuymeqcioasuyyi, $product);
        }
        return $aumscagymwyyicag;
    }
    
    public static function aqwquwewocyewasw() : bool
    {
        $uwqkkwmiiumuukoa = false;
        $woocommerce = self::kkewuuisyiscmgyc();
        if ($woocommerce && method_exists($woocommerce, 'is_rest_api_request')) {
            $uwqkkwmiiumuukoa = $woocommerce->is_rest_api_request();
        }
        return $uwqkkwmiiumuukoa;
    }
    
    public static function uceecgsoicggikeu() : ?WC_Cart
    {
        $wwcysoksoogyacog = null;
        $woocommerce = self::kkewuuisyiscmgyc();
        if ($woocommerce) {
            $wwcysoksoogyacog = $woocommerce->cart;
        }
        return $wwcysoksoogyacog;
    }
    
    public static function aoqkwiysueqqwigk() : ?string
    {
        $woocommerce = self::kkewuuisyiscmgyc();
        if (function_exists('wc_get_checkout_url')) {
            return wc_get_checkout_url();
        } else {
            return $woocommerce->cart->get_checkout_url();
        }
    }
    
    public static function kccgkwigyyiugcco() : bool
    {
        return 'yes' === self::giiuwsmyumqwwiyq('enable_myaccount_registration');
    }
    
    public static function yaaucgakecuykawk() : bool
    {
        global $woocommerce_loop;
        return DecoratorWoocommerce::kmymkocwcawgeccm() && isset($woocommerce_loop['name']) && in_array($woocommerce_loop['name'], ["up - sells"]);
    }
    
    public static function ogkieiokqueakmyc() : bool
    {
        global $woocommerce_loop;
        return DecoratorWoocommerce::kmymkocwcawgeccm() && isset($woocommerce_loop['name']) && in_array($woocommerce_loop['name'], ["related"]);
    }
    
    public static function omwkqcuwceweymcc($product = null)
    {
        if (!$product) {
            $product = self::aqasygcsqysmmyke(ManipulatePost::mwikyscisascoeea());
        }
        $aokagokqyuysuksm = $product;
        if (is_a($product, 'WC_Product')) {
            $aokagokqyuysuksm = $product->get_id();
        }
        return $aokagokqyuysuksm;
    }
    
    public static function ageqswwkkqywckco($ywmkwiwkosakssii = []) : array
    {
        $ywmkwiwkosakssii['fields'] = 'ids';
        $oysoyeaucuawyaky = ManipulatePost::ciugwooasaqcywas('product', $ywmkwiwkosakssii);
        $oksqskmgoqiqciis = [];
        if (is_array($oysoyeaucuawyaky)) {
            foreach ($oysoyeaucuawyaky as $aokagokqyuysuksm) {
                $product = self::aqasygcsqysmmyke($aokagokqyuysuksm);
                if ($product) {
                    $oksqskmgoqiqciis[$aokagokqyuysuksm] = $product;
                }
                iwkckkeimmeoquyq:
            }
            yqcusaeysomccaok:
        }
        return $oksqskmgoqiqciis;
    }
    
    public static function weqwusgaqsmseiyq() : array
    {
        return ['image' => esc_html__('Image', PR__CMN__FOUNDATION), 'price' => esc_html__('Price', PR__CMN__FOUNDATION), 'add-to-cart' => esc_html__('Add to cart', PR__CMN__FOUNDATION), 'description' => esc_html__('Description', PR__CMN__FOUNDATION), 'sku' => esc_html__('Sku', PR__CMN__FOUNDATION), 'stock' => esc_html__('Availability', PR__CMN__FOUNDATION), 'weight' => esc_html__('Weight', PR__CMN__FOUNDATION), 'dimensions' => esc_html__('Dimensions', PR__CMN__FOUNDATION)];
    }
    
    public static function gmowuaggkmgkseyo() : bool
    {
        return DecoratorQuery::qmssqeyayicowkgy('product_cat');
    }
    
    public static function ecaegsuskkkigkgc() : ?WC_Checkout
    {
        $yogeuygiqackeiky = null;
        $woocommerce = self::kkewuuisyiscmgyc();
        if ($woocommerce) {
            $yogeuygiqackeiky = $woocommerce->yogeuygiqackeiky();
        }
        return $yogeuygiqackeiky;
    }
    
    public static function giyscymwkesykqsg($ymqmyyeuycgmigyo, $eqgoocgaqwqcimie)
    {
        self::cmussoegoauyyguw('set', $ymqmyyeuycgmigyo, $eqgoocgaqwqcimie);
    }
    
    public static function qusqewgmqyucyooc($product, $ikgwqyuyckaewsow)
    {
        $product = self::aqasygcsqysmmyke($product);
        if ($product) {
            $qqswgiawgeaeoecu = [];
            $aokagokqyuysuksm = $product->get_id();
            
            foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus => $ymqmyyeuycgmigyo) {
                switch ($aiowsaccomcoikus) {
                    case 'title':
                        $qqswgiawgeaeoecu[$aiowsaccomcoikus] = $product->get_title();
                        goto yoqsigmoyaaceqky;
                    case 'price':
                        $qqswgiawgeaeoecu[$aiowsaccomcoikus] = $product->get_price_html();
                        goto yoqsigmoyaaceqky;
                    case 'image':
                        $qqswgiawgeaeoecu[$aiowsaccomcoikus] = intval(ManipulatePost::wsiiswmaagmyiaiw($aokagokqyuysuksm));
                        goto yoqsigmoyaaceqky;
                    case 'description':
                        $ukwokcuqauuosmoo = DecoratorHook::sscegwueamckwmcy('woocommerce_short_description', $product->get_short_description());
                        $qqswgiawgeaeoecu[$aiowsaccomcoikus] = $ukwokcuqauuosmoo;
                        goto yoqsigmoyaaceqky;
                    case 'stock':
                        $imooqykauqyyswsw = $product->get_availability();
                        if (empty($imooqykauqyyswsw['availability'])) {
                            $imooqykauqyyswsw['availability'] = __('In stock', PR__CMN__FOUNDATION);
                        }
                        $qqswgiawgeaeoecu[$aiowsaccomcoikus] = $imooqykauqyyswsw['availability'];
                        goto yoqsigmoyaaceqky;
                    case 'sku':
                        $mmkkmgusieqaqkki = $product->get_sku();
                        !$mmkkmgusieqaqkki && ($mmkkmgusieqaqkki = '-');
                        $qqswgiawgeaeoecu[$aiowsaccomcoikus] = $mmkkmgusieqaqkki;
                        goto yoqsigmoyaaceqky;
                    case 'weight':
                        if ($mycwwoyokwokowmo = $product->get_weight()) {
                            $mycwwoyokwokowmo = wc_format_localized_decimal($mycwwoyokwokowmo) . ' ' . esc_attr(DecoratorOption::get('woocommerce_weight_unit'));
                        } else {
                            $mycwwoyokwokowmo = '-';
                        }
                        $qqswgiawgeaeoecu[$aiowsaccomcoikus] = $mycwwoyokwokowmo;
                        goto yoqsigmoyaaceqky;
                    case 'dimensions':
                        $qaiwqwwemmyyqosy = function_exists('wc_format_dimensions') ? wc_format_dimensions($product->get_dimensions(false)) : $product->get_dimensions();
                        !$qaiwqwwemmyyqosy && ($qaiwqwwemmyyqosy = '-');
                        $qqswgiawgeaeoecu[$aiowsaccomcoikus] = $qaiwqwwemmyyqosy;
                        goto yoqsigmoyaaceqky;
                    default:
                        if (DecoratorTaxonomy::myagqecycsaiyqsk($aiowsaccomcoikus)) {
                            $qqswgiawgeaeoecu[$aiowsaccomcoikus] = [];
                            $uyuaosigqymaqsaa = ManipulatePost::weescwwgqgiyumyw($aokagokqyuysuksm, $aiowsaccomcoikus);
                            if (!empty($uyuaosigqymaqsaa)) {
                                foreach ($uyuaosigqymaqsaa as $iwewcwusemqaiggk) {
                                    $iwewcwusemqaiggk = DecoratorSanitize::iwewcwusemqaiggk($iwewcwusemqaiggk, $aiowsaccomcoikus);
                                    $qqswgiawgeaeoecu[$aiowsaccomcoikus][] = ManipulateTerm::qcgakseyaikigqco($iwewcwusemqaiggk);
                                    acgqaeakoyasgkku:
                                }
                                giugwaeuwaomossq:
                            }
                            $qqswgiawgeaeoecu[$aiowsaccomcoikus] = implode(', ', $qqswgiawgeaeoecu[$aiowsaccomcoikus]);
                        } else {
                            $eqgoocgaqwqcimie = $product->get_attribute($aiowsaccomcoikus);
                            if (is_array($eqgoocgaqwqcimie)) {
                                $eqgoocgaqwqcimie = implode(', ', $eqgoocgaqwqcimie);
                            }
                            $qqswgiawgeaeoecu[$aiowsaccomcoikus] = $eqgoocgaqwqcimie;
                        }
                        goto yoqsigmoyaaceqky;
                }
                suqckoccuyeeymww:
                yoqsigmoyaaceqky:
                yksywwikmeksikqc:
            }
            masakmomqmeocqqg:
            if ($qqswgiawgeaeoecu) {
                $product->fields = $qqswgiawgeaeoecu;
            }
        }
        return $product;
    }
    
    public static function qysuguqkwiksywaq($product, $isweyuoisomqyaag) : array
    {
        $uomewyckeuqoqocu = [];
        $product = self::aqasygcsqysmmyke($product);
        if ($isweyuoisomqyaag && $product instanceof WC_Product_Variable) {
            $uomewyckeuqoqocu = $product->get_available_variation($isweyuoisomqyaag);
        }
        return $uomewyckeuqoqocu;
    }
    
    public static function mcgaskyiamgqmqgu($aumscagymwyyicag, $ywmkwiwkosakssii = []) : string
    {
        return DecoratorWoocommerce::aumscagymwyyicag($aumscagymwyyicag, $ywmkwiwkosakssii);
    }
    
    public static function wugwewwmekuaamos($ymqmyyeuycgmigyo, $kekikiwsckuiyuyo = false)
    {
        return self::cmussoegoauyyguw('get', $ymqmyyeuycgmigyo, '', $kekikiwsckuiyuyo);
    }
    
    public static function ucauuyiegweuccsq($uusmaiomayssaecw, $eqgoocgaqwqcimie, $ywmkwiwkosakssii = [])
    {
        $ywmkwiwkosakssii['meta_query'] = ['meta_key' => $uusmaiomayssaecw, 'meta_value' => $eqgoocgaqwqcimie, 'meta_compare' => 'LIKE'];
        return DecoratorWoocommerce::ageqswwkkqywckco($ywmkwiwkosakssii);
    }
    
    public static function gkokioeusiomuwee($product, $cqcsaaswaciweiie = [], $aqcaekiaqgiaiwiu = true)
    {
        $uomewyckeuqoqocu = [];
        $product = self::aqasygcsqysmmyke($product);
        
        $qaiwqwwemmyyqosy = DecoratorHook::sscegwueamckwmcy('wc_product_enable_dimensions_display', $product->has_weight() || $product->has_dimensions());
        if ($qaiwqwwemmyyqosy && $product->has_weight()) {
            $uomewyckeuqoqocu['weight'] = ['label' => __('Weight', 'woocommerce'), 'value' => wc_format_weight($product->get_weight())];
        }
        if ($qaiwqwwemmyyqosy && $product->has_dimensions()) {
            $uomewyckeuqoqocu['dimensions'] = ['label' => __('Dimensions', 'woocommerce'), 'value' => wc_format_dimensions($product->get_dimensions(false))];
        }
        
        $siquossayskcwkea = array_filter($product->get_attributes(), 'wc_attributes_array_filter_visible');
        foreach ($siquossayskcwkea as $ymkomoccmymcoiea) {
            $mmykcgusskuuuace = self::cswwmqwaucwuqcaq($product, $ymkomoccmymcoiea);
            $kskgqoywkoawosao = true;
            if (is_array($cqcsaaswaciweiie) && $cqcsaaswaciweiie) {
                foreach ($cqcsaaswaciweiie as $tsuauommsquiesmk => $eqgoocgaqwqcimie) {
                    $uiymkeeaukcyqqik = ManipulateArray::get($mmykcgusskuuuace, $tsuauommsquiesmk, false);
                    if (is_array($uiymkeeaukcyqqik) && !in_array($eqgoocgaqwqcimie, $uiymkeeaukcyqqik) && $uiymkeeaukcyqqik != $eqgoocgaqwqcimie) {
                        $kskgqoywkoawosao = false;
                        goto mqgeseysuwcaqwiy;
                    }
                    ekoqieigyoeyauqa:
                }
                mqgeseysuwcaqwiy:
            }
            if ($kskgqoywkoawosao) {
                $ymqmyyeuycgmigyo = $ymkomoccmymcoiea->get_name();
                if ($aqcaekiaqgiaiwiu) {
                    $ymqmyyeuycgmigyo = DecoratorWoocommerce::gmeusukogwcamcyc($ymqmyyeuycgmigyo);
                }
                $uomewyckeuqoqocu[$ymqmyyeuycgmigyo] = $mmykcgusskuuuace;
            }
            ssagcgqaucssyego:
        }
        sycougcyeqmeiagk:
        return DecoratorHook::sscegwueamckwmcy('woocommerce_display_product_attributes', $uomewyckeuqoqocu, $product);
    }
    
    public static function ucqakycuekccuocw($aqykuigiuwmmcieu = self::OBJECT) : ?array
    {
        static $seyqqsmuaiegkeeq = [];
        if (empty($seyqqsmuaiegkeeq)) {
            $seyqqsmuaiegkeeq = DecoratorTaxonomy::qgckgkwskmsomoqs('product', $aqykuigiuwmmcieu);
            ManipulateArray::unset($seyqqsmuaiegkeeq, ['product_shipping_class', 'product_visibility', 'product_type']);
        }
        return $seyqqsmuaiegkeeq;
    }
    
    public static function mywkcmciykgikmyc($product, $kesssewsiegssiya, $ywmkwiwkosakssii = []) : array
    {
        return DecoratorWoocommerce::mywkcmciykgikmyc(self::omwkqcuwceweymcc($product), $kesssewsiegssiya, $ywmkwiwkosakssii);
    }
    
    public static function iwoqeaamkmyoquwm($product, $scwmkmciyywokcug) : array
    {
        global $wpdb;
        $yuwymayicwwqiske = $wpdb->prefix;
        $product = self::omwkqcuwceweymcc($product);
        $oqseeekuqisekiwy = array_map('esc_sql', DecoratorWoocommerce::ouqoeawmueswmksm());
        return $wpdb->get_col("\n\t\t\tSELECT ois.order_id\n\t\t\tFROM {$yuwymayicwwqiske}woocommerce_order_items as ois\n\t\t\tLEFT JOIN {$yuwymayicwwqiske}woocommerce_order_itemmeta as oim ON ois.order_item_id = oim.order_item_id\n\t\t\tLEFT JOIN {$wpdb->posts} AS p ON ois.order_id = p.ID\n\t\t\tLEFT JOIN {$wpdb->postmeta} AS pm ON ois.order_id = pm.meta_id\n\t\t\tWHERE p.post_type = 'shop_order'\n\t\t\tAND p.post_status IN ( 'wc-" . implode("', 'wc-", $oqseeekuqisekiwy) . "' )\n\t\t\tAND ois.order_item_type = 'line_item'\n\t\t\tAND oim.meta_key = '_product_id'\n\t\t\tAND oim.meta_value = '{$product}'\n\t\t\tAND pm.meta_key = '_customer_user'\n\t\t\tAND pm.meta_value = '{$scwmkmciyywokcug}'\n    \t");
    }
    
    public static function giiuwsmyumqwwiyq($uusmaiomayssaecw, $ggauoeuaesiymgee = null, $yuwymayicwwqiske = 'woocommerce_')
    {
        if ($yuwymayicwwqiske) {
            $uusmaiomayssaecw = $yuwymayicwwqiske . $uusmaiomayssaecw;
        }
        return DecoratorOption::get($uusmaiomayssaecw, $ggauoeuaesiymgee);
    }
    
    public static function cswwmqwaucwuqcaq($product, $ymkomoccmymcoiea) : array
    {
        $qqswgiawgeaeoecu = [];
        if ($ymkomoccmymcoiea->is_taxonomy()) {
            $kesssewsiegssiya = $ymkomoccmymcoiea->get_taxonomy_object();
            $uyuaosigqymaqsaa = self::mywkcmciykgikmyc($product, $ymkomoccmymcoiea->get_name(), ['fields' => 'all']);
            foreach ($uyuaosigqymaqsaa as $iwewcwusemqaiggk) {
                $ymqmyyeuycgmigyo = esc_html($iwewcwusemqaiggk->name);
                if ($kesssewsiegssiya->attribute_public) {
                    $qqswgiawgeaeoecu[] = ManipulateHTML::uuccukgasskgimsq('a', ['href' => ManipulateTerm::qmgcisuuikgmqcsu(ManipulateTerm::mwikyscisascoeea($iwewcwusemqaiggk), $ymkomoccmymcoiea->get_name()), 'rel' => 'tag'], $ymqmyyeuycgmigyo);
                } else {
                    $qqswgiawgeaeoecu[] = $ymqmyyeuycgmigyo;
                }
                mimacwyuueomgwwy:
            }
            cuwcsamuuqyuyqsu:
        } else {
            $qqswgiawgeaeoecu = $ymkomoccmymcoiea->get_options();
            foreach ($qqswgiawgeaeoecu as &$eqgoocgaqwqcimie) {
                $eqgoocgaqwqcimie = make_clickable(esc_html($eqgoocgaqwqcimie));
                igwkcikeyoowosoi:
            }
            ksckqkmwiqggykke:
        }
        $mmykcgusskuuuace = ['value' => DecoratorHook::sscegwueamckwmcy('woocommerce_attribute', wptexturize(implode(', ', $qqswgiawgeaeoecu)), $ymkomoccmymcoiea, $qqswgiawgeaeoecu), 'label' => DecoratorWoocommerce::qysciqmmoqsaqmqk($ymkomoccmymcoiea->get_name(), $product)];
        return (array) DecoratorHook::sscegwueamckwmcy('woocommerce_attribute_output', $mmykcgusskuuuace, $ymkomoccmymcoiea, $product);
    }
    
    public static function cmussoegoauyyguw($aiamqeawckcsuaou, $ymqmyyeuycgmigyo = '', $eqgoocgaqwqcimie = '', $kekikiwsckuiyuyo = false)
    {
        $woocommerce = self::kkewuuisyiscmgyc();
        $cmussoegoauyyguw = $woocommerce->session;
        if ($aiamqeawckcsuaou == 'set') {
            if (method_exists($cmussoegoauyyguw, $aiamqeawckcsuaou)) {
                $woocommerce->session->{$aiamqeawckcsuaou}($ymqmyyeuycgmigyo, $eqgoocgaqwqcimie);
            } else {
                $woocommerce->session->{$ymqmyyeuycgmigyo} = $eqgoocgaqwqcimie;
            }
        } else {
            if ($aiamqeawckcsuaou == 'get') {
                if (method_exists($cmussoegoauyyguw, $aiamqeawckcsuaou)) {
                    $eqgoocgaqwqcimie = $cmussoegoauyyguw->{$aiamqeawckcsuaou}($ymqmyyeuycgmigyo);
                } else {
                    $eqgoocgaqwqcimie = $cmussoegoauyyguw->{$ymqmyyeuycgmigyo};
                }
                if ($kekikiwsckuiyuyo) {
                    unset($woocommerce->session->{$ymqmyyeuycgmigyo});
                }
            }
        }
        return $eqgoocgaqwqcimie;
    }
    
    public static function ceusksoaisoswmia($umwqusowiqmyseom = null) : array
    {
        $oammesyieqmwuwyi = self::uakuwyoiooeqqiow();
        if (!$oammesyieqmwuwyi && $umwqusowiqmyseom) {
            $umwqusowiqmyseom = self::mmmcswscsiecscwg($umwqusowiqmyseom);
            if ($umwqusowiqmyseom) {
                $oammesyieqmwuwyi = $umwqusowiqmyseom->get_items();
            }
        }
        return $oammesyieqmwuwyi;
    }
    
    public static function uwyscmkeyeuqyukk($ywmkwiwkosakssii = []) : string
    {
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ['tip' => '', self::NAME => '', self::LABEL => '', self::VALUE => '']);
        $wwgucssaecqekuek = ['class' => 'checkbox', self::TYPE => 'checkbox', self::NAME => ManipulateArray::get($ywmkwiwkosakssii, self::NAME)];
        if (ManipulateArray::get($ywmkwiwkosakssii, self::VALUE, false)) {
            $wwgucssaecqekuek['checked'] = true;
        }
        return ManipulateHTML::uuccukgasskgimsq('label', ['class' => 'tips', 'data-tip' => ManipulateArray::get($ywmkwiwkosakssii, 'tip')], [ManipulateArray::get($ywmkwiwkosakssii, self::LABEL), ManipulateHTML::qgsekwygcgawekeq('input', $wwgucssaecqekuek)]);
    }
}
