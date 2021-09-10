<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b30261f503             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Manipulate;

use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;

class ManipulateFormat extends Manipulate
{
    
    public static function aoaeiwswyagmesku($eeamcawaiqocomwy)
    {
        goto mwqsossoseygkwmy;
        mwqsossoseygkwmy:
        $egsumesakcaaukem = self::gooqqcmsyseiaikc(ManipulateServer::gmigwwwmwemyaayy());
        goto igwqkcqgscwckiuk;
        igwqkcqgscwckiuk:
        $ccamueccusigaaio = self::gooqqcmsyseiaikc($eeamcawaiqocomwy);
        goto cyomuiwaiksgqyis;
        cmumiaooyqwsmeuo:
        return $egsumesakcaaukem && $wkwsmsgmkcmugoya && $ccamueccusigaaio && $yukwwaakiyeueawg && strcasecmp($yukwwaakiyeueawg, $wkwsmsgmkcmugoya) !== 0;
        goto lmguwygiwkqsssgg;
        cyomuiwaiksgqyis:
        $wkwsmsgmkcmugoya = ManipulateArray::get($egsumesakcaaukem, "\x68\157\x73\x74");
        goto imkwkuoumqqysmmo;
        imkwkuoumqqysmmo:
        $yukwwaakiyeueawg = ManipulateArray::get($ccamueccusigaaio, "\150\x6f\163\x74");
        goto cmumiaooyqwsmeuo;
        lmguwygiwkqsssgg:
    }
    
    public static function gooqqcmsyseiaikc($eeamcawaiqocomwy, $wksoawcgagcgoask = -1)
    {
        goto aaauiqoqqegqooay;
        eoguuwgwkauemioy:
        soskiwqicumascii:
        goto sauuoosgewomwsiy;
        aaauiqoqqegqooay:
        if (function_exists("\x77\x70\137\x70\141\x72\x73\x65\137\165\x72\154")) {
            goto soskiwqicumascii;
        }
        goto ccgouqosggeqqywe;
        ccgouqosggeqqywe:
        $yiasugywggckywoa = parse_url($eeamcawaiqocomwy, $wksoawcgagcgoask);
        goto oweuewiycuqueioi;
        sauuoosgewomwsiy:
        $yiasugywggckywoa = wp_parse_url($eeamcawaiqocomwy, $wksoawcgagcgoask);
        goto miaesquumiwuikow;
        gocakccykoiugocw:
        return $yiasugywggckywoa;
        goto qgsuysqmamgkcamg;
        miaesquumiwuikow:
        mcqousgoosgkwymi:
        goto gocakccykoiugocw;
        oweuewiycuqueioi:
        goto mcqousgoosgkwymi;
        goto eoguuwgwkauemioy;
        qgsuysqmamgkcamg:
    }
    
    public static function omaawkkwwyesqwcc($ywmkwiwkosakssii, $ycmguuqqaiisymgg = [])
    {
        return wp_parse_args($ywmkwiwkosakssii, $ycmguuqqaiisymgg);
    }
    
    public static function qugygsasyieckkoc(string $eeamcawaiqocomwy) : string
    {
        goto auugmgyeukqkoecc;
        geeygkawayuqsesa:
        if (!(substr($eeamcawaiqocomwy, 0, 2) !== "\57\x2f")) {
            goto ioyquegiawkuegmw;
        }
        goto oeeaiusewwccaeca;
        gicokucyoymgamsk:
        ckygqsyqoiuiqqgs:
        goto mgkouoausowamwao;
        mgkouoausowamwao:
        return $eeamcawaiqocomwy;
        goto muouacosiuwuwuuw;
        auugmgyeukqkoecc:
        if (!(!strpos($eeamcawaiqocomwy, "\150\164\x74\x70\x3a\x2f\57") !== false && !strpos($eeamcawaiqocomwy, "\x68\x74\x74\x70\x73\72\57\x2f") !== false)) {
            goto ckygqsyqoiuiqqgs;
        }
        goto geeygkawayuqsesa;
        oeeaiusewwccaeca:
        $eeamcawaiqocomwy = "\x2f\57" . $eeamcawaiqocomwy;
        goto oamcwqaceqmoiimo;
        wemsokoqyyyiemio:
        $eeamcawaiqocomwy = set_url_scheme($eeamcawaiqocomwy);
        goto gicokucyoymgamsk;
        oamcwqaceqmoiimo:
        ioyquegiawkuegmw:
        goto wemsokoqyyyiemio;
        muouacosiuwuwuuw:
    }
    
    public static function gokuyqsimauyacke($eeamcawaiqocomwy = '') : ?string
    {
        return str_replace(["\x68\x74\x74\x70\x3a\x2f\57", "\150\164\164\160\163\x3a\x2f\57", "\x2f\57"], '', $eeamcawaiqocomwy);
    }
}
