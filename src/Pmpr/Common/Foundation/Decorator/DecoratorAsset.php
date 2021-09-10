<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613bb98fa102d             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Decorator;


class DecoratorAsset extends Decorator
{
    
    public static function iqmcmgkyssqgoqok($eueuqacmukymcyya)
    {
        wp_deregister_style($eueuqacmukymcyya);
    }
    
    public static function cawwmsmyseesuyee($eueuqacmukymcyya)
    {
        wp_deregister_script($eueuqacmukymcyya);
    }
    
    public static function ousmawwywumikwwc($ywmkwiwkosakssii = [])
    {
        $ksaameoqigiaoigg = false;
        if (function_exists('wp_enqueue_code_editor')) {
            $ksaameoqigiaoigg = wp_enqueue_code_editor($ywmkwiwkosakssii);
        }
        return $ksaameoqigiaoigg;
    }
    
    public static function fowiaymccsmewemu($eueuqacmukymcyya, $ymqmyyeuycgmigyo, $kuomuqkiouseymgq)
    {
        return wp_localize_script($eueuqacmukymcyya, $ymqmyyeuycgmigyo, $kuomuqkiouseymgq);
    }
    
    public static function qkyugogwegiuiime($eueuqacmukymcyya, $uksimyckcoyyemsk = true)
    {
        wp_dequeue_style($eueuqacmukymcyya);
        if ($uksimyckcoyyemsk) {
            self::iqmcmgkyssqgoqok($eueuqacmukymcyya);
        }
    }
    
    public static function saisougiwmauksiy($eueuqacmukymcyya, $uksimyckcoyyemsk = true)
    {
        wp_dequeue_script($eueuqacmukymcyya);
        if ($uksimyckcoyyemsk) {
            self::cawwmsmyseesuyee($eueuqacmukymcyya);
        }
    }
    
    public static function ciuuyygmkuwgoiki(string $eueuqacmukymcyya, $uusmaiomayssaecw, $eqgoocgaqwqcimie)
    {
        return wp_style_add_data($eueuqacmukymcyya, $uusmaiomayssaecw, $eqgoocgaqwqcimie);
    }
    
    public static function myyikeyuuomqoyew(string $eueuqacmukymcyya, $ogomymegcoacqisg = '', $ugmuiugkaygmsagq = [], $cksswamugeeeawgw = false, $qsmqqqccagyuaiso = 'all')
    {
        wp_enqueue_style($eueuqacmukymcyya, $ogomymegcoacqisg, $ugmuiugkaygmsagq, $cksswamugeeeawgw, $qsmqqqccagyuaiso);
    }
    
    public static function mkaaikgsosqiaiqg(string $eueuqacmukymcyya, $ogomymegcoacqisg, $ugmuiugkaygmsagq = [], $cksswamugeeeawgw = false, $qsmqqqccagyuaiso = 'all') : bool
    {
        return wp_register_style($eueuqacmukymcyya, $ogomymegcoacqisg, $ugmuiugkaygmsagq, $cksswamugeeeawgw, $qsmqqqccagyuaiso);
    }
    
    public static function oiqqguakwcieaioo(string $eueuqacmukymcyya, ?string $icwicymcioeyeyek = '')
    {
        $icwicymcioeyeyek = DecoratorHook::sscegwueamckwmcy('wp_add_inline_style_data', $icwicymcioeyeyek, $eueuqacmukymcyya);
        return wp_add_inline_style($eueuqacmukymcyya, $icwicymcioeyeyek);
    }
    
    public static function imsomwwswyoquoqk(string $eueuqacmukymcyya, ?string $ogomymegcoacqisg = '', $ugmuiugkaygmsagq = [], $gygawogosumsgmme = null, $siucegisggggeiei = true)
    {
        wp_enqueue_script($eueuqacmukymcyya, $ogomymegcoacqisg, $ugmuiugkaygmsagq, $gygawogosumsgmme, $siucegisggggeiei);
    }
    
    public static function wyouyuiqisgqwgww(string $eueuqacmukymcyya, ?string $ogomymegcoacqisg = '', $ugmuiugkaygmsagq = [], $cksswamugeeeawgw = false, $siucegisggggeiei = true)
    {
        return wp_register_script($eueuqacmukymcyya, $ogomymegcoacqisg, $ugmuiugkaygmsagq, $cksswamugeeeawgw, $siucegisggggeiei);
    }
    
    public static function yocqwqycwegayowg(string $eueuqacmukymcyya, ?string $icwicymcioeyeyek = '', string $kuuiuigeacouwmaa = 'after')
    {
        $icwicymcioeyeyek = DecoratorHook::sscegwueamckwmcy('wp_add_inline_script_data', $icwicymcioeyeyek, $eueuqacmukymcyya);
        return wp_add_inline_script($eueuqacmukymcyya, $icwicymcioeyeyek, $kuuiuigeacouwmaa);
    }
}
