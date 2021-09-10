<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b1e8aa0c03             |
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
        goto emweskkoeaamissy;
        woaucuqwwygyseoy:
        if (!function_exists("\x77\x70\x5f\x65\156\161\165\x65\x75\145\137\143\x6f\x64\145\137\x65\x64\x69\x74\157\162")) {
            goto qiogcgemwoskeguy;
        }
        goto aqywsykoaksagmii;
        emweskkoeaamissy:
        $ksaameoqigiaoigg = false;
        goto woaucuqwwygyseoy;
        aqywsykoaksagmii:
        $ksaameoqigiaoigg = wp_enqueue_code_editor($ywmkwiwkosakssii);
        goto kcagioquuqegqcyg;
        kcagioquuqegqcyg:
        qiogcgemwoskeguy:
        goto wwsomoigcwkwsguy;
        wwsomoigcwkwsguy:
        return $ksaameoqigiaoigg;
        goto iwocsmoqemqaiwuo;
        iwocsmoqemqaiwuo:
    }
    
    public static function fowiaymccsmewemu($eueuqacmukymcyya, $ymqmyyeuycgmigyo, $kuomuqkiouseymgq)
    {
        return wp_localize_script($eueuqacmukymcyya, $ymqmyyeuycgmigyo, $kuomuqkiouseymgq);
    }
    
    public static function qkyugogwegiuiime($eueuqacmukymcyya, $uksimyckcoyyemsk = true)
    {
        goto yewaicmwsoqyceeg;
        yewaicmwsoqyceeg:
        wp_dequeue_style($eueuqacmukymcyya);
        goto yqaeaawsoygkiuqq;
        icsikkwucecsisuk:
        ggkqwysmuwoiueyg:
        goto gcmikiuqumkkacyo;
        yqaeaawsoygkiuqq:
        if (!$uksimyckcoyyemsk) {
            goto ggkqwysmuwoiueyg;
        }
        goto kayqeeaqmuuqkuou;
        kayqeeaqmuuqkuou:
        self::iqmcmgkyssqgoqok($eueuqacmukymcyya);
        goto icsikkwucecsisuk;
        gcmikiuqumkkacyo:
    }
    
    public static function saisougiwmauksiy($eueuqacmukymcyya, $uksimyckcoyyemsk = true)
    {
        goto cakioquwkusgwwkw;
        uwoogcquscauiwkg:
        if (!$uksimyckcoyyemsk) {
            goto ccuegmwmimgiocso;
        }
        goto lnoeyaecmcmsigqy;
        mmgicwwygeekgamc:
        ccuegmwmimgiocso:
        goto kcwkigqegoyyasgo;
        cakioquwkusgwwkw:
        wp_dequeue_script($eueuqacmukymcyya);
        goto uwoogcquscauiwkg;
        lnoeyaecmcmsigqy:
        self::cawwmsmyseesuyee($eueuqacmukymcyya);
        goto mmgicwwygeekgamc;
        kcwkigqegoyyasgo:
    }
    
    public static function ciuuyygmkuwgoiki(string $eueuqacmukymcyya, $uusmaiomayssaecw, $eqgoocgaqwqcimie)
    {
        return wp_style_add_data($eueuqacmukymcyya, $uusmaiomayssaecw, $eqgoocgaqwqcimie);
    }
    
    public static function myyikeyuuomqoyew(string $eueuqacmukymcyya, $ogomymegcoacqisg = '', $ugmuiugkaygmsagq = [], $cksswamugeeeawgw = false, $qsmqqqccagyuaiso = "\141\x6c\154")
    {
        wp_enqueue_style($eueuqacmukymcyya, $ogomymegcoacqisg, $ugmuiugkaygmsagq, $cksswamugeeeawgw, $qsmqqqccagyuaiso);
    }
    
    public static function mkaaikgsosqiaiqg(string $eueuqacmukymcyya, $ogomymegcoacqisg, $ugmuiugkaygmsagq = [], $cksswamugeeeawgw = false, $qsmqqqccagyuaiso = "\x61\154\x6c") : bool
    {
        return wp_register_style($eueuqacmukymcyya, $ogomymegcoacqisg, $ugmuiugkaygmsagq, $cksswamugeeeawgw, $qsmqqqccagyuaiso);
    }
    
    public static function oiqqguakwcieaioo(string $eueuqacmukymcyya, ?string $icwicymcioeyeyek = '')
    {
        $icwicymcioeyeyek = DecoratorHook::sscegwueamckwmcy("\x77\160\137\x61\144\144\x5f\151\156\x6c\x69\x6e\145\137\163\x74\x79\x6c\145\137\144\141\164\141", $icwicymcioeyeyek, $eueuqacmukymcyya);
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
    
    public static function yocqwqycwegayowg(string $eueuqacmukymcyya, ?string $icwicymcioeyeyek = '', string $kuuiuigeacouwmaa = "\141\x66\x74\x65\x72")
    {
        $icwicymcioeyeyek = DecoratorHook::sscegwueamckwmcy("\x77\160\x5f\x61\x64\144\x5f\x69\156\154\x69\x6e\145\x5f\x73\x63\x72\151\160\x74\x5f\144\141\x74\141", $icwicymcioeyeyek, $eueuqacmukymcyya);
        return wp_add_inline_script($eueuqacmukymcyya, $icwicymcioeyeyek, $kuuiuigeacouwmaa);
    }
}
