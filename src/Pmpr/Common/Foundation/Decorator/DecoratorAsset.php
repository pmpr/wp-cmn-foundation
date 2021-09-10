<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b3993be3fb             |
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
        gcmikiuqumkkacyo:
        yewaicmwsoqyceeg:
        goto ccuegmwmimgiocso;
        icsikkwucecsisuk:
        $ksaameoqigiaoigg = wp_enqueue_code_editor($ywmkwiwkosakssii);
        goto gcmikiuqumkkacyo;
        ccuegmwmimgiocso:
        return $ksaameoqigiaoigg;
        goto cakioquwkusgwwkw;
        kayqeeaqmuuqkuou:
        if (!function_exists("\167\160\x5f\145\156\x71\165\x65\165\145\x5f\x63\x6f\x64\x65\137\145\x64\x69\164\157\162")) {
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
        kcwkigqegoyyasgo:
        self::iqmcmgkyssqgoqok($eueuqacmukymcyya);
        goto aeyqisueowykqqem;
        mmgicwwygeekgamc:
        if (!$uksimyckcoyyemsk) {
            goto uwoogcquscauiwkg;
        }
        goto kcwkigqegoyyasgo;
        lnoeyaecmcmsigqy:
        wp_dequeue_style($eueuqacmukymcyya);
        goto mmgicwwygeekgamc;
        uaqggqikeeeoemee:
    }
    
    public static function saisougiwmauksiy($eueuqacmukymcyya, $uksimyckcoyyemsk = true)
    {
        goto wayiayqaaoyykyaa;
        wayiayqaaoyykyaa:
        wp_dequeue_script($eueuqacmukymcyya);
        goto kcyymkyskosacoym;
        kcyymkyskosacoym:
        if (!$uksimyckcoyyemsk) {
            goto oyyuwwmewyyewikc;
        }
        goto gwkmcaioucoamkao;
        gwkmcaioucoamkao:
        self::cawwmsmyseesuyee($eueuqacmukymcyya);
        goto aaccqgcuggcugeqw;
        aaccqgcuggcugeqw:
        oyyuwwmewyyewikc:
        goto yyyamkcqacumuegm;
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
    
    public static function mkaaikgsosqiaiqg(string $eueuqacmukymcyya, $ogomymegcoacqisg, $ugmuiugkaygmsagq = [], $cksswamugeeeawgw = false, $qsmqqqccagyuaiso = "\x61\154\x6c") : bool
    {
        return wp_register_style($eueuqacmukymcyya, $ogomymegcoacqisg, $ugmuiugkaygmsagq, $cksswamugeeeawgw, $qsmqqqccagyuaiso);
    }
    
    public static function oiqqguakwcieaioo(string $eueuqacmukymcyya, ?string $icwicymcioeyeyek = '')
    {
        $icwicymcioeyeyek = DecoratorHook::sscegwueamckwmcy("\x77\160\x5f\141\x64\x64\x5f\x69\x6e\x6c\151\156\x65\137\163\x74\x79\154\145\x5f\x64\141\x74\141", $icwicymcioeyeyek, $eueuqacmukymcyya);
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
    
    public static function yocqwqycwegayowg(string $eueuqacmukymcyya, ?string $icwicymcioeyeyek = '', string $kuuiuigeacouwmaa = "\141\146\x74\145\162")
    {
        $icwicymcioeyeyek = DecoratorHook::sscegwueamckwmcy("\167\160\137\x61\x64\x64\x5f\x69\156\x6c\x69\x6e\145\x5f\163\143\162\151\x70\164\x5f\144\141\x74\141", $icwicymcioeyeyek, $eueuqacmukymcyya);
        return wp_add_inline_script($eueuqacmukymcyya, $icwicymcioeyeyek, $kuuiuigeacouwmaa);
    }
}
