<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b3993be3fb             |
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
        $yukwwaakiyeueawg = ManipulateArray::get($ccamueccusigaaio, "\150\x6f\x73\x74");
        goto lmguwygiwkqsssgg;
        igwqkcqgscwckiuk:
        $egsumesakcaaukem = self::gooqqcmsyseiaikc(ManipulateServer::gmigwwwmwemyaayy());
        goto cyomuiwaiksgqyis;
        imkwkuoumqqysmmo:
        $wkwsmsgmkcmugoya = ManipulateArray::get($egsumesakcaaukem, "\150\x6f\x73\x74");
        goto cmumiaooyqwsmeuo;
        lmguwygiwkqsssgg:
        return $egsumesakcaaukem && $wkwsmsgmkcmugoya && $ccamueccusigaaio && $yukwwaakiyeueawg && strcasecmp($yukwwaakiyeueawg, $wkwsmsgmkcmugoya) !== 0;
        goto soskiwqicumascii;
        cyomuiwaiksgqyis:
        $ccamueccusigaaio = self::gooqqcmsyseiaikc($eeamcawaiqocomwy);
        goto imkwkuoumqqysmmo;
        soskiwqicumascii:
    }
    
    public static function gooqqcmsyseiaikc($eeamcawaiqocomwy, $wksoawcgagcgoask = -1)
    {
        goto ccgouqosggeqqywe;
        ccgouqosggeqqywe:
        if (function_exists("\x77\160\x5f\x70\141\162\163\145\137\165\x72\x6c")) {
            goto mcqousgoosgkwymi;
        }
        goto oweuewiycuqueioi;
        miaesquumiwuikow:
        $yiasugywggckywoa = wp_parse_url($eeamcawaiqocomwy, $wksoawcgagcgoask);
        goto gocakccykoiugocw;
        gocakccykoiugocw:
        aaauiqoqqegqooay:
        goto qgsuysqmamgkcamg;
        qgsuysqmamgkcamg:
        return $yiasugywggckywoa;
        goto ioyquegiawkuegmw;
        sauuoosgewomwsiy:
        mcqousgoosgkwymi:
        goto miaesquumiwuikow;
        eoguuwgwkauemioy:
        goto aaauiqoqqegqooay;
        goto sauuoosgewomwsiy;
        oweuewiycuqueioi:
        $yiasugywggckywoa = parse_url($eeamcawaiqocomwy, $wksoawcgagcgoask);
        goto eoguuwgwkauemioy;
        ioyquegiawkuegmw:
    }
    
    public static function omaawkkwwyesqwcc($ywmkwiwkosakssii, $ycmguuqqaiisymgg = [])
    {
        return wp_parse_args($ywmkwiwkosakssii, $ycmguuqqaiisymgg);
    }
    
    public static function qugygsasyieckkoc(string $eeamcawaiqocomwy) : string
    {
        goto geeygkawayuqsesa;
        gicokucyoymgamsk:
        $eeamcawaiqocomwy = set_url_scheme($eeamcawaiqocomwy);
        goto mgkouoausowamwao;
        oamcwqaceqmoiimo:
        $eeamcawaiqocomwy = "\x2f\57" . $eeamcawaiqocomwy;
        goto wemsokoqyyyiemio;
        muouacosiuwuwuuw:
        return $eeamcawaiqocomwy;
        goto wqawogguqkeuwwco;
        mgkouoausowamwao:
        auugmgyeukqkoecc:
        goto muouacosiuwuwuuw;
        oeeaiusewwccaeca:
        if (!(substr($eeamcawaiqocomwy, 0, 2) !== "\x2f\x2f")) {
            goto ckygqsyqoiuiqqgs;
        }
        goto oamcwqaceqmoiimo;
        wemsokoqyyyiemio:
        ckygqsyqoiuiqqgs:
        goto gicokucyoymgamsk;
        geeygkawayuqsesa:
        if (!(!strpos($eeamcawaiqocomwy, "\150\x74\164\x70\x3a\57\57") !== false && !strpos($eeamcawaiqocomwy, "\x68\164\x74\160\163\x3a\57\x2f") !== false)) {
            goto auugmgyeukqkoecc;
        }
        goto oeeaiusewwccaeca;
        wqawogguqkeuwwco:
    }
    
    public static function gokuyqsimauyacke($eeamcawaiqocomwy = '') : ?string
    {
        return str_replace(["\150\164\x74\x70\72\57\57", "\x68\164\164\x70\x73\72\57\57", "\x2f\57"], '', $eeamcawaiqocomwy);
    }
}
