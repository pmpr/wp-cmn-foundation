<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613a1be32d755             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Manipulate;

use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;

class ManipulateFormat extends Manipulate
{
    
    public static function aoaeiwswyagmesku($eeamcawaiqocomwy)
    {
        goto ekiaoywcsemmomqw;
        ekiaoywcsemmomqw:
        $egsumesakcaaukem = self::gooqqcmsyseiaikc(ManipulateServer::gmigwwwmwemyaayy());
        goto koaeoimocwqoguem;
        koaeoimocwqoguem:
        $ccamueccusigaaio = self::gooqqcmsyseiaikc($eeamcawaiqocomwy);
        goto yaiicikgkwuucyac;
        awcsskayoyoqcuie:
        return $egsumesakcaaukem && $wkwsmsgmkcmugoya && $ccamueccusigaaio && $yukwwaakiyeueawg && strcasecmp($yukwwaakiyeueawg, $wkwsmsgmkcmugoya) !== 0;
        goto kwakioosoiemmiok;
        yaiicikgkwuucyac:
        $wkwsmsgmkcmugoya = ManipulateArray::get($egsumesakcaaukem, "\x68\x6f\x73\x74");
        goto cwsacmayigiyqiim;
        cwsacmayigiyqiim:
        $yukwwaakiyeueawg = ManipulateArray::get($ccamueccusigaaio, "\150\157\x73\x74");
        goto awcsskayoyoqcuie;
        kwakioosoiemmiok:
    }
    
    public static function gooqqcmsyseiaikc($eeamcawaiqocomwy, $wksoawcgagcgoask = -1)
    {
        goto aamysqsckaiwqayk;
        aamysqsckaiwqayk:
        if (function_exists("\x77\160\137\x70\x61\x72\163\145\x5f\x75\x72\154")) {
            goto ckawikqsskikqiya;
        }
        goto ceusqkuwoqusqoug;
        cysskkuqiccoycuk:
        ckawikqsskikqiya:
        goto micwmacyekkoumqe;
        kcyiiwwsyagcyiic:
        goto gegywycsimoakaei;
        goto cysskkuqiccoycuk;
        ceusqkuwoqusqoug:
        $yiasugywggckywoa = parse_url($eeamcawaiqocomwy, $wksoawcgagcgoask);
        goto kcyiiwwsyagcyiic;
        micwmacyekkoumqe:
        $yiasugywggckywoa = wp_parse_url($eeamcawaiqocomwy, $wksoawcgagcgoask);
        goto iqqsmugsquwuwmys;
        qoagkeesiqqueeac:
        return $yiasugywggckywoa;
        goto syaceqoiqwmukkka;
        iqqsmugsquwuwmys:
        gegywycsimoakaei:
        goto qoagkeesiqqueeac;
        syaceqoiqwmukkka:
    }
    
    public static function omaawkkwwyesqwcc($ywmkwiwkosakssii, $ycmguuqqaiisymgg = [])
    {
        return wp_parse_args($ywmkwiwkosakssii, $ycmguuqqaiisymgg);
    }
    
    public static function qugygsasyieckkoc(string $eeamcawaiqocomwy) : string
    {
        goto ywsmaykqgsqcascy;
        wsekioqwsiuuemiu:
        $eeamcawaiqocomwy = set_url_scheme($eeamcawaiqocomwy);
        goto eqgaeioggggckcqy;
        ywsmaykqgsqcascy:
        if (!(!strpos($eeamcawaiqocomwy, "\x68\164\164\x70\x3a\57\57") !== false && !strpos($eeamcawaiqocomwy, "\x68\x74\164\160\163\x3a\x2f\57") !== false)) {
            goto iymgcgmyoeuckqyq;
        }
        goto qeumeeoamsmgwgga;
        qeumeeoamsmgwgga:
        if (!(substr($eeamcawaiqocomwy, 0, 2) !== "\57\57")) {
            goto eoiammowyewyyqog;
        }
        goto sycwismoacqosiiq;
        sycwismoacqosiiq:
        $eeamcawaiqocomwy = "\57\57" . $eeamcawaiqocomwy;
        goto msywwusgwymwiwoo;
        kwqigwcciguyuegu:
        return $eeamcawaiqocomwy;
        goto qequskoucemymsom;
        msywwusgwymwiwoo:
        eoiammowyewyyqog:
        goto wsekioqwsiuuemiu;
        eqgaeioggggckcqy:
        iymgcgmyoeuckqyq:
        goto kwqigwcciguyuegu;
        qequskoucemymsom:
    }
    
    public static function gokuyqsimauyacke($eeamcawaiqocomwy = '') : ?string
    {
        return str_replace(["\x68\164\x74\160\x3a\57\x2f", "\x68\164\x74\160\x73\72\57\x2f", "\x2f\x2f"], '', $eeamcawaiqocomwy);
    }
}
