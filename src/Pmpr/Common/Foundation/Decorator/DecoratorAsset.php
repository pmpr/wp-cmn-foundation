<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b2e4befc8c             |
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
        goto kcagioquuqegqcyg;
        wwsomoigcwkwsguy:
        if (!function_exists("\167\x70\137\x65\156\x71\x75\145\x75\x65\x5f\143\157\x64\x65\x5f\145\x64\151\x74\157\x72")) {
            goto aqywsykoaksagmii;
        }
        goto iwocsmoqemqaiwuo;
        iwocsmoqemqaiwuo:
        $ksaameoqigiaoigg = wp_enqueue_code_editor($ywmkwiwkosakssii);
        goto ggkqwysmuwoiueyg;
        yewaicmwsoqyceeg:
        return $ksaameoqigiaoigg;
        goto yqaeaawsoygkiuqq;
        ggkqwysmuwoiueyg:
        aqywsykoaksagmii:
        goto yewaicmwsoqyceeg;
        kcagioquuqegqcyg:
        $ksaameoqigiaoigg = false;
        goto wwsomoigcwkwsguy;
        yqaeaawsoygkiuqq:
    }
    
    public static function fowiaymccsmewemu($eueuqacmukymcyya, $ymqmyyeuycgmigyo, $kuomuqkiouseymgq)
    {
        return wp_localize_script($eueuqacmukymcyya, $ymqmyyeuycgmigyo, $kuomuqkiouseymgq);
    }
    
    public static function qkyugogwegiuiime($eueuqacmukymcyya, $uksimyckcoyyemsk = true)
    {
        goto icsikkwucecsisuk;
        gcmikiuqumkkacyo:
        if (!$uksimyckcoyyemsk) {
            goto kayqeeaqmuuqkuou;
        }
        goto ccuegmwmimgiocso;
        icsikkwucecsisuk:
        wp_dequeue_style($eueuqacmukymcyya);
        goto gcmikiuqumkkacyo;
        cakioquwkusgwwkw:
        kayqeeaqmuuqkuou:
        goto uwoogcquscauiwkg;
        ccuegmwmimgiocso:
        self::iqmcmgkyssqgoqok($eueuqacmukymcyya);
        goto cakioquwkusgwwkw;
        uwoogcquscauiwkg:
    }
    
    public static function saisougiwmauksiy($eueuqacmukymcyya, $uksimyckcoyyemsk = true)
    {
        goto mmgicwwygeekgamc;
        mmgicwwygeekgamc:
        wp_dequeue_script($eueuqacmukymcyya);
        goto kcwkigqegoyyasgo;
        uaqggqikeeeoemee:
        lnoeyaecmcmsigqy:
        goto oyyuwwmewyyewikc;
        kcwkigqegoyyasgo:
        if (!$uksimyckcoyyemsk) {
            goto lnoeyaecmcmsigqy;
        }
        goto aeyqisueowykqqem;
        aeyqisueowykqqem:
        self::cawwmsmyseesuyee($eueuqacmukymcyya);
        goto uaqggqikeeeoemee;
        oyyuwwmewyyewikc:
    }
    
    public static function ciuuyygmkuwgoiki(string $eueuqacmukymcyya, $uusmaiomayssaecw, $eqgoocgaqwqcimie)
    {
        return wp_style_add_data($eueuqacmukymcyya, $uusmaiomayssaecw, $eqgoocgaqwqcimie);
    }
    
    public static function myyikeyuuomqoyew(string $eueuqacmukymcyya, $ogomymegcoacqisg = '', $ugmuiugkaygmsagq = [], $cksswamugeeeawgw = false, $qsmqqqccagyuaiso = "\x61\154\154")
    {
        wp_enqueue_style($eueuqacmukymcyya, $ogomymegcoacqisg, $ugmuiugkaygmsagq, $cksswamugeeeawgw, $qsmqqqccagyuaiso);
    }
    
    public static function mkaaikgsosqiaiqg(string $eueuqacmukymcyya, $ogomymegcoacqisg, $ugmuiugkaygmsagq = [], $cksswamugeeeawgw = false, $qsmqqqccagyuaiso = "\141\154\x6c") : bool
    {
        return wp_register_style($eueuqacmukymcyya, $ogomymegcoacqisg, $ugmuiugkaygmsagq, $cksswamugeeeawgw, $qsmqqqccagyuaiso);
    }
    
    public static function oiqqguakwcieaioo(string $eueuqacmukymcyya, ?string $icwicymcioeyeyek = '')
    {
        $icwicymcioeyeyek = DecoratorHook::sscegwueamckwmcy("\167\160\137\141\144\x64\137\151\156\x6c\x69\x6e\x65\137\163\x74\171\x6c\x65\x5f\x64\x61\x74\x61", $icwicymcioeyeyek, $eueuqacmukymcyya);
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
    
    public static function yocqwqycwegayowg(string $eueuqacmukymcyya, ?string $icwicymcioeyeyek = '', string $kuuiuigeacouwmaa = "\141\146\x74\x65\x72")
    {
        $icwicymcioeyeyek = DecoratorHook::sscegwueamckwmcy("\x77\160\x5f\x61\144\144\x5f\x69\156\154\151\156\145\x5f\x73\143\162\x69\x70\164\x5f\x64\141\x74\141", $icwicymcioeyeyek, $eueuqacmukymcyya);
        return wp_add_inline_script($eueuqacmukymcyya, $icwicymcioeyeyek, $kuuiuigeacouwmaa);
    }
}
