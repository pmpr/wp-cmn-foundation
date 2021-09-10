<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b6c65a2d22             |
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
        yqaeaawsoygkiuqq:
        $ksaameoqigiaoigg = false;
        goto kayqeeaqmuuqkuou;
        icsikkwucecsisuk:
        $ksaameoqigiaoigg = wp_enqueue_code_editor($ywmkwiwkosakssii);
        goto gcmikiuqumkkacyo;
        gcmikiuqumkkacyo:
        yewaicmwsoqyceeg:
        goto ccuegmwmimgiocso;
        ccuegmwmimgiocso:
        return $ksaameoqigiaoigg;
        goto cakioquwkusgwwkw;
        kayqeeaqmuuqkuou:
        if (!function_exists("\x77\160\x5f\x65\156\x71\x75\x65\x75\145\x5f\x63\157\144\145\137\145\x64\151\164\x6f\162")) {
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
        mmgicwwygeekgamc:
        if (!$uksimyckcoyyemsk) {
            goto uwoogcquscauiwkg;
        }
        goto kcwkigqegoyyasgo;
        aeyqisueowykqqem:
        uwoogcquscauiwkg:
        goto uaqggqikeeeoemee;
        kcwkigqegoyyasgo:
        self::iqmcmgkyssqgoqok($eueuqacmukymcyya);
        goto aeyqisueowykqqem;
        lnoeyaecmcmsigqy:
        wp_dequeue_style($eueuqacmukymcyya);
        goto mmgicwwygeekgamc;
        uaqggqikeeeoemee:
    }
    
    public static function saisougiwmauksiy($eueuqacmukymcyya, $uksimyckcoyyemsk = true)
    {
        goto wayiayqaaoyykyaa;
        gwkmcaioucoamkao:
        self::cawwmsmyseesuyee($eueuqacmukymcyya);
        goto aaccqgcuggcugeqw;
        aaccqgcuggcugeqw:
        oyyuwwmewyyewikc:
        goto yyyamkcqacumuegm;
        kcyymkyskosacoym:
        if (!$uksimyckcoyyemsk) {
            goto oyyuwwmewyyewikc;
        }
        goto gwkmcaioucoamkao;
        wayiayqaaoyykyaa:
        wp_dequeue_script($eueuqacmukymcyya);
        goto kcyymkyskosacoym;
        yyyamkcqacumuegm:
    }
    
    public static function ciuuyygmkuwgoiki(string $eueuqacmukymcyya, $uusmaiomayssaecw, $eqgoocgaqwqcimie)
    {
        return wp_style_add_data($eueuqacmukymcyya, $uusmaiomayssaecw, $eqgoocgaqwqcimie);
    }
    
    public static function myyikeyuuomqoyew(string $eueuqacmukymcyya, $ogomymegcoacqisg = '', $ugmuiugkaygmsagq = [], $cksswamugeeeawgw = false, $qsmqqqccagyuaiso = "\141\x6c\154")
    {
        wp_enqueue_style($eueuqacmukymcyya, $ogomymegcoacqisg, $ugmuiugkaygmsagq, $cksswamugeeeawgw, $qsmqqqccagyuaiso);
    }
    
    public static function mkaaikgsosqiaiqg(string $eueuqacmukymcyya, $ogomymegcoacqisg, $ugmuiugkaygmsagq = [], $cksswamugeeeawgw = false, $qsmqqqccagyuaiso = "\141\154\154") : bool
    {
        return wp_register_style($eueuqacmukymcyya, $ogomymegcoacqisg, $ugmuiugkaygmsagq, $cksswamugeeeawgw, $qsmqqqccagyuaiso);
    }
    
    public static function oiqqguakwcieaioo(string $eueuqacmukymcyya, ?string $icwicymcioeyeyek = '')
    {
        $icwicymcioeyeyek = DecoratorHook::sscegwueamckwmcy("\167\x70\137\x61\x64\x64\137\x69\156\x6c\151\x6e\145\x5f\x73\164\171\x6c\x65\x5f\x64\141\164\141", $icwicymcioeyeyek, $eueuqacmukymcyya);
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
    
    public static function yocqwqycwegayowg(string $eueuqacmukymcyya, ?string $icwicymcioeyeyek = '', string $kuuiuigeacouwmaa = "\141\146\164\145\162")
    {
        $icwicymcioeyeyek = DecoratorHook::sscegwueamckwmcy("\x77\x70\x5f\141\x64\x64\x5f\151\x6e\154\151\156\145\137\x73\x63\162\151\160\164\137\x64\x61\x74\141", $icwicymcioeyeyek, $eueuqacmukymcyya);
        return wp_add_inline_script($eueuqacmukymcyya, $icwicymcioeyeyek, $kuuiuigeacouwmaa);
    }
}
