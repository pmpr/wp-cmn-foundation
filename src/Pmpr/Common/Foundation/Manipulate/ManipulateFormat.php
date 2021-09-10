<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b6c65a2d22             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Manipulate;

use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;

class ManipulateFormat extends Manipulate
{
    
    public static function aoaeiwswyagmesku($eeamcawaiqocomwy)
    {
        goto cyomuiwaiksgqyis;
        soskiwqicumascii:
        return $egsumesakcaaukem && $wkwsmsgmkcmugoya && $ccamueccusigaaio && $yukwwaakiyeueawg && strcasecmp($yukwwaakiyeueawg, $wkwsmsgmkcmugoya) !== 0;
        goto mcqousgoosgkwymi;
        imkwkuoumqqysmmo:
        $ccamueccusigaaio = self::gooqqcmsyseiaikc($eeamcawaiqocomwy);
        goto cmumiaooyqwsmeuo;
        cmumiaooyqwsmeuo:
        $wkwsmsgmkcmugoya = ManipulateArray::get($egsumesakcaaukem, "\x68\157\x73\x74");
        goto lmguwygiwkqsssgg;
        cyomuiwaiksgqyis:
        $egsumesakcaaukem = self::gooqqcmsyseiaikc(ManipulateServer::gmigwwwmwemyaayy());
        goto imkwkuoumqqysmmo;
        lmguwygiwkqsssgg:
        $yukwwaakiyeueawg = ManipulateArray::get($ccamueccusigaaio, "\x68\x6f\x73\164");
        goto soskiwqicumascii;
        mcqousgoosgkwymi:
    }
    
    public static function gooqqcmsyseiaikc($eeamcawaiqocomwy, $wksoawcgagcgoask = -1)
    {
        goto oweuewiycuqueioi;
        gocakccykoiugocw:
        $yiasugywggckywoa = wp_parse_url($eeamcawaiqocomwy, $wksoawcgagcgoask);
        goto qgsuysqmamgkcamg;
        oweuewiycuqueioi:
        if (function_exists("\x77\x70\137\x70\x61\162\x73\145\x5f\165\x72\154")) {
            goto aaauiqoqqegqooay;
        }
        goto eoguuwgwkauemioy;
        sauuoosgewomwsiy:
        goto ccgouqosggeqqywe;
        goto miaesquumiwuikow;
        miaesquumiwuikow:
        aaauiqoqqegqooay:
        goto gocakccykoiugocw;
        ioyquegiawkuegmw:
        return $yiasugywggckywoa;
        goto ckygqsyqoiuiqqgs;
        qgsuysqmamgkcamg:
        ccgouqosggeqqywe:
        goto ioyquegiawkuegmw;
        eoguuwgwkauemioy:
        $yiasugywggckywoa = parse_url($eeamcawaiqocomwy, $wksoawcgagcgoask);
        goto sauuoosgewomwsiy;
        ckygqsyqoiuiqqgs:
    }
    
    public static function omaawkkwwyesqwcc($ywmkwiwkosakssii, $ycmguuqqaiisymgg = [])
    {
        return wp_parse_args($ywmkwiwkosakssii, $ycmguuqqaiisymgg);
    }
    
    public static function qugygsasyieckkoc(string $eeamcawaiqocomwy) : string
    {
        goto oeeaiusewwccaeca;
        oeeaiusewwccaeca:
        if (!(!strpos($eeamcawaiqocomwy, "\x68\164\x74\x70\x3a\57\x2f") !== false && !strpos($eeamcawaiqocomwy, "\150\x74\164\160\x73\x3a\x2f\x2f") !== false)) {
            goto geeygkawayuqsesa;
        }
        goto oamcwqaceqmoiimo;
        muouacosiuwuwuuw:
        geeygkawayuqsesa:
        goto wqawogguqkeuwwco;
        oamcwqaceqmoiimo:
        if (!(substr($eeamcawaiqocomwy, 0, 2) !== "\x2f\57")) {
            goto auugmgyeukqkoecc;
        }
        goto wemsokoqyyyiemio;
        mgkouoausowamwao:
        $eeamcawaiqocomwy = set_url_scheme($eeamcawaiqocomwy);
        goto muouacosiuwuwuuw;
        wemsokoqyyyiemio:
        $eeamcawaiqocomwy = "\x2f\x2f" . $eeamcawaiqocomwy;
        goto gicokucyoymgamsk;
        gicokucyoymgamsk:
        auugmgyeukqkoecc:
        goto mgkouoausowamwao;
        wqawogguqkeuwwco:
        return $eeamcawaiqocomwy;
        goto aaekwqgakyuqksiw;
        aaekwqgakyuqksiw:
    }
    
    public static function gokuyqsimauyacke($eeamcawaiqocomwy = '') : ?string
    {
        return str_replace(["\x68\164\x74\x70\72\x2f\x2f", "\x68\x74\x74\x70\x73\72\57\x2f", "\x2f\x2f"], '', $eeamcawaiqocomwy);
    }
}
