<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b499786a1b             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Manipulate;

use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;

class ManipulateFormat extends Manipulate
{
    
    public static function aoaeiwswyagmesku($eeamcawaiqocomwy)
    {
        goto igwqkcqgscwckiuk;
        cmumiaooyqwsmeuo:
        $yukwwaakiyeueawg = ManipulateArray::get($ccamueccusigaaio, "\x68\x6f\163\x74");
        goto lmguwygiwkqsssgg;
        cyomuiwaiksgqyis:
        $ccamueccusigaaio = self::gooqqcmsyseiaikc($eeamcawaiqocomwy);
        goto imkwkuoumqqysmmo;
        lmguwygiwkqsssgg:
        return $egsumesakcaaukem && $wkwsmsgmkcmugoya && $ccamueccusigaaio && $yukwwaakiyeueawg && strcasecmp($yukwwaakiyeueawg, $wkwsmsgmkcmugoya) !== 0;
        goto soskiwqicumascii;
        imkwkuoumqqysmmo:
        $wkwsmsgmkcmugoya = ManipulateArray::get($egsumesakcaaukem, "\x68\x6f\x73\164");
        goto cmumiaooyqwsmeuo;
        igwqkcqgscwckiuk:
        $egsumesakcaaukem = self::gooqqcmsyseiaikc(ManipulateServer::gmigwwwmwemyaayy());
        goto cyomuiwaiksgqyis;
        soskiwqicumascii:
    }
    
    public static function gooqqcmsyseiaikc($eeamcawaiqocomwy, $wksoawcgagcgoask = -1)
    {
        goto ccgouqosggeqqywe;
        oweuewiycuqueioi:
        $yiasugywggckywoa = parse_url($eeamcawaiqocomwy, $wksoawcgagcgoask);
        goto eoguuwgwkauemioy;
        ccgouqosggeqqywe:
        if (function_exists("\x77\160\137\x70\141\162\x73\145\x5f\x75\162\x6c")) {
            goto mcqousgoosgkwymi;
        }
        goto oweuewiycuqueioi;
        qgsuysqmamgkcamg:
        return $yiasugywggckywoa;
        goto ioyquegiawkuegmw;
        eoguuwgwkauemioy:
        goto aaauiqoqqegqooay;
        goto sauuoosgewomwsiy;
        miaesquumiwuikow:
        $yiasugywggckywoa = wp_parse_url($eeamcawaiqocomwy, $wksoawcgagcgoask);
        goto gocakccykoiugocw;
        sauuoosgewomwsiy:
        mcqousgoosgkwymi:
        goto miaesquumiwuikow;
        gocakccykoiugocw:
        aaauiqoqqegqooay:
        goto qgsuysqmamgkcamg;
        ioyquegiawkuegmw:
    }
    
    public static function omaawkkwwyesqwcc($ywmkwiwkosakssii, $ycmguuqqaiisymgg = [])
    {
        return wp_parse_args($ywmkwiwkosakssii, $ycmguuqqaiisymgg);
    }
    
    public static function qugygsasyieckkoc(string $eeamcawaiqocomwy) : string
    {
        goto geeygkawayuqsesa;
        wemsokoqyyyiemio:
        ckygqsyqoiuiqqgs:
        goto gicokucyoymgamsk;
        geeygkawayuqsesa:
        if (!(!strpos($eeamcawaiqocomwy, "\x68\x74\x74\x70\72\57\57") !== false && !strpos($eeamcawaiqocomwy, "\x68\164\x74\160\x73\72\57\x2f") !== false)) {
            goto auugmgyeukqkoecc;
        }
        goto oeeaiusewwccaeca;
        mgkouoausowamwao:
        auugmgyeukqkoecc:
        goto muouacosiuwuwuuw;
        muouacosiuwuwuuw:
        return $eeamcawaiqocomwy;
        goto wqawogguqkeuwwco;
        oeeaiusewwccaeca:
        if (!(substr($eeamcawaiqocomwy, 0, 2) !== "\x2f\x2f")) {
            goto ckygqsyqoiuiqqgs;
        }
        goto oamcwqaceqmoiimo;
        gicokucyoymgamsk:
        $eeamcawaiqocomwy = set_url_scheme($eeamcawaiqocomwy);
        goto mgkouoausowamwao;
        oamcwqaceqmoiimo:
        $eeamcawaiqocomwy = "\x2f\x2f" . $eeamcawaiqocomwy;
        goto wemsokoqyyyiemio;
        wqawogguqkeuwwco:
    }
    
    public static function gokuyqsimauyacke($eeamcawaiqocomwy = '') : ?string
    {
        return str_replace(["\150\x74\x74\x70\72\57\x2f", "\150\x74\164\160\163\x3a\x2f\x2f", "\57\x2f"], '', $eeamcawaiqocomwy);
    }
}
