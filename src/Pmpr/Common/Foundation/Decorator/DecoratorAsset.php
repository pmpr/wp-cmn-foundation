<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b499786a1b             |
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
        goto yqaeaawsoygkiuqq;
        gcmikiuqumkkacyo:
        yewaicmwsoqyceeg:
        goto ccuegmwmimgiocso;
        yqaeaawsoygkiuqq:
        $ksaameoqigiaoigg = false;
        goto kayqeeaqmuuqkuou;
        icsikkwucecsisuk:
        $ksaameoqigiaoigg = wp_enqueue_code_editor($ywmkwiwkosakssii);
        goto gcmikiuqumkkacyo;
        ccuegmwmimgiocso:
        return $ksaameoqigiaoigg;
        goto cakioquwkusgwwkw;
        kayqeeaqmuuqkuou:
        if (!function_exists("\167\160\x5f\145\156\x71\x75\x65\165\145\137\x63\x6f\144\145\x5f\x65\144\x69\x74\x6f\162")) {
            goto yewaicmwsoqyceeg;
        }
        goto icsikkwucecsisuk;
        cakioquwkusgwwkw:
    }
    
    public static function fowiaymccsmewemu($eueuqacmukymcyya, $ymqmyyeuycgmigyo, $kuomuqkiouseymgq)
    {
        return wp_localize_script($eueuqacmukymcyya, $ymqmyyeuycgmigyo, $kuomuqkiouseymgq);
    }
    
    public static function qkyugogwegiuiime($eueuqacmukymcyya, $uksimyckcoyyemsk = true)
    {
        goto lnoeyaecmcmsigqy;
        aeyqisueowykqqem:
        uwoogcquscauiwkg:
        goto uaqggqikeeeoemee;
        lnoeyaecmcmsigqy:
        wp_dequeue_style($eueuqacmukymcyya);
        goto mmgicwwygeekgamc;
        mmgicwwygeekgamc:
        if (!$uksimyckcoyyemsk) {
            goto uwoogcquscauiwkg;
        }
        goto kcwkigqegoyyasgo;
        kcwkigqegoyyasgo:
        self::iqmcmgkyssqgoqok($eueuqacmukymcyya);
        goto aeyqisueowykqqem;
        uaqggqikeeeoemee:
    }
    
    public static function saisougiwmauksiy($eueuqacmukymcyya, $uksimyckcoyyemsk = true)
    {
        goto wayiayqaaoyykyaa;
        aaccqgcuggcugeqw:
        oyyuwwmewyyewikc:
        goto yyyamkcqacumuegm;
        wayiayqaaoyykyaa:
        wp_dequeue_script($eueuqacmukymcyya);
        goto kcyymkyskosacoym;
        gwkmcaioucoamkao:
        self::cawwmsmyseesuyee($eueuqacmukymcyya);
        goto aaccqgcuggcugeqw;
        kcyymkyskosacoym:
        if (!$uksimyckcoyyemsk) {
            goto oyyuwwmewyyewikc;
        }
        goto gwkmcaioucoamkao;
        yyyamkcqacumuegm:
    }
    
    public static function ciuuyygmkuwgoiki(string $eueuqacmukymcyya, $uusmaiomayssaecw, $eqgoocgaqwqcimie)
    {
        return wp_style_add_data($eueuqacmukymcyya, $uusmaiomayssaecw, $eqgoocgaqwqcimie);
    }
    
    public static function myyikeyuuomqoyew(string $eueuqacmukymcyya, $ogomymegcoacqisg = '', $ugmuiugkaygmsagq = [], $cksswamugeeeawgw = false, $qsmqqqccagyuaiso = "\141\154\x6c")
    {
        wp_enqueue_style($eueuqacmukymcyya, $ogomymegcoacqisg, $ugmuiugkaygmsagq, $cksswamugeeeawgw, $qsmqqqccagyuaiso);
    }
    
    public static function mkaaikgsosqiaiqg(string $eueuqacmukymcyya, $ogomymegcoacqisg, $ugmuiugkaygmsagq = [], $cksswamugeeeawgw = false, $qsmqqqccagyuaiso = "\141\x6c\154") : bool
    {
        return wp_register_style($eueuqacmukymcyya, $ogomymegcoacqisg, $ugmuiugkaygmsagq, $cksswamugeeeawgw, $qsmqqqccagyuaiso);
    }
    
    public static function oiqqguakwcieaioo(string $eueuqacmukymcyya, ?string $icwicymcioeyeyek = '')
    {
        $icwicymcioeyeyek = DecoratorHook::sscegwueamckwmcy("\167\x70\137\141\x64\x64\x5f\151\156\x6c\151\156\145\x5f\163\x74\x79\154\x65\x5f\x64\141\164\141", $icwicymcioeyeyek, $eueuqacmukymcyya);
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
    
    public static function yocqwqycwegayowg(string $eueuqacmukymcyya, ?string $icwicymcioeyeyek = '', string $kuuiuigeacouwmaa = "\x61\x66\x74\x65\x72")
    {
        $icwicymcioeyeyek = DecoratorHook::sscegwueamckwmcy("\167\160\137\141\144\144\x5f\151\156\x6c\x69\156\x65\x5f\x73\143\x72\151\160\164\x5f\x64\141\x74\141", $icwicymcioeyeyek, $eueuqacmukymcyya);
        return wp_add_inline_script($eueuqacmukymcyya, $icwicymcioeyeyek, $kuuiuigeacouwmaa);
    }
}
