<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613a1be32d755             |
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
        goto koosywukiiocsmmc;
        skuioqyugmyaiyys:
        return $ksaameoqigiaoigg;
        goto aikyqicagksmuuwm;
        ywiauwqgumuuuuey:
        iuqqsyuuwaygsmak:
        goto skuioqyugmyaiyys;
        iweokokocwugywsk:
        $ksaameoqigiaoigg = wp_enqueue_code_editor($ywmkwiwkosakssii);
        goto ywiauwqgumuuuuey;
        ioegkeouusgkmaqi:
        if (!function_exists("\x77\x70\x5f\145\x6e\x71\165\145\165\145\137\143\157\x64\145\x5f\145\144\x69\x74\157\162")) {
            goto iuqqsyuuwaygsmak;
        }
        goto iweokokocwugywsk;
        koosywukiiocsmmc:
        $ksaameoqigiaoigg = false;
        goto ioegkeouusgkmaqi;
        aikyqicagksmuuwm:
    }
    
    public static function fowiaymccsmewemu($eueuqacmukymcyya, $ymqmyyeuycgmigyo, $kuomuqkiouseymgq)
    {
        return wp_localize_script($eueuqacmukymcyya, $ymqmyyeuycgmigyo, $kuomuqkiouseymgq);
    }
    
    public static function qkyugogwegiuiime($eueuqacmukymcyya, $uksimyckcoyyemsk = true)
    {
        goto ousuugweskuyuccq;
        mwecckoekskqkugm:
        if (!$uksimyckcoyyemsk) {
            goto eygoeceyyscgauce;
        }
        goto scwiacyickugosom;
        ousuugweskuyuccq:
        wp_dequeue_style($eueuqacmukymcyya);
        goto mwecckoekskqkugm;
        eiysgoqwsaegmqim:
        eygoeceyyscgauce:
        goto kkuaccyigssoywao;
        scwiacyickugosom:
        self::iqmcmgkyssqgoqok($eueuqacmukymcyya);
        goto eiysgoqwsaegmqim;
        kkuaccyigssoywao:
    }
    
    public static function saisougiwmauksiy($eueuqacmukymcyya, $uksimyckcoyyemsk = true)
    {
        goto ecmmowyyaeoocsyc;
        ecmmowyyaeoocsyc:
        wp_dequeue_script($eueuqacmukymcyya);
        goto qomaaqwmkkusiquy;
        qomaaqwmkkusiquy:
        if (!$uksimyckcoyyemsk) {
            goto yeeuymikamycumyc;
        }
        goto isguecsoekyicicy;
        kueeuuagoswgkmck:
        yeeuymikamycumyc:
        goto yyqyuoqqyisuwuks;
        isguecsoekyicicy:
        self::cawwmsmyseesuyee($eueuqacmukymcyya);
        goto kueeuuagoswgkmck;
        yyqyuoqqyisuwuks:
    }
    
    public static function ciuuyygmkuwgoiki(string $eueuqacmukymcyya, $uusmaiomayssaecw, $eqgoocgaqwqcimie)
    {
        return wp_style_add_data($eueuqacmukymcyya, $uusmaiomayssaecw, $eqgoocgaqwqcimie);
    }
    
    public static function myyikeyuuomqoyew(string $eueuqacmukymcyya, $ogomymegcoacqisg = '', $ugmuiugkaygmsagq = [], $cksswamugeeeawgw = false, $qsmqqqccagyuaiso = "\x61\154\x6c")
    {
        wp_enqueue_style($eueuqacmukymcyya, $ogomymegcoacqisg, $ugmuiugkaygmsagq, $cksswamugeeeawgw, $qsmqqqccagyuaiso);
    }
    
    public static function mkaaikgsosqiaiqg(string $eueuqacmukymcyya, $ogomymegcoacqisg, $ugmuiugkaygmsagq = [], $cksswamugeeeawgw = false, $qsmqqqccagyuaiso = "\141\x6c\x6c") : bool
    {
        return wp_register_style($eueuqacmukymcyya, $ogomymegcoacqisg, $ugmuiugkaygmsagq, $cksswamugeeeawgw, $qsmqqqccagyuaiso);
    }
    
    public static function oiqqguakwcieaioo(string $eueuqacmukymcyya, ?string $icwicymcioeyeyek = '')
    {
        $icwicymcioeyeyek = DecoratorHook::sscegwueamckwmcy("\x77\160\137\141\x64\144\137\x69\x6e\x6c\151\x6e\145\x5f\x73\x74\x79\x6c\x65\137\144\x61\164\x61", $icwicymcioeyeyek, $eueuqacmukymcyya);
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
    
    public static function yocqwqycwegayowg(string $eueuqacmukymcyya, ?string $icwicymcioeyeyek = '', string $kuuiuigeacouwmaa = "\141\x66\164\145\x72")
    {
        $icwicymcioeyeyek = DecoratorHook::sscegwueamckwmcy("\167\160\x5f\141\144\144\137\x69\x6e\x6c\x69\x6e\x65\x5f\x73\x63\x72\151\x70\164\x5f\144\x61\x74\141", $icwicymcioeyeyek, $eueuqacmukymcyya);
        return wp_add_inline_script($eueuqacmukymcyya, $icwicymcioeyeyek, $kuuiuigeacouwmaa);
    }
}
