<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b2e4befc8c             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Manipulate;

use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;

class ManipulateFormat extends Manipulate
{
    
    public static function aoaeiwswyagmesku($eeamcawaiqocomwy)
    {
        goto mwqsossoseygkwmy;
        cyomuiwaiksgqyis:
        $wkwsmsgmkcmugoya = ManipulateArray::get($egsumesakcaaukem, "\x68\157\163\x74");
        goto imkwkuoumqqysmmo;
        cmumiaooyqwsmeuo:
        return $egsumesakcaaukem && $wkwsmsgmkcmugoya && $ccamueccusigaaio && $yukwwaakiyeueawg && strcasecmp($yukwwaakiyeueawg, $wkwsmsgmkcmugoya) !== 0;
        goto lmguwygiwkqsssgg;
        igwqkcqgscwckiuk:
        $ccamueccusigaaio = self::gooqqcmsyseiaikc($eeamcawaiqocomwy);
        goto cyomuiwaiksgqyis;
        mwqsossoseygkwmy:
        $egsumesakcaaukem = self::gooqqcmsyseiaikc(ManipulateServer::gmigwwwmwemyaayy());
        goto igwqkcqgscwckiuk;
        imkwkuoumqqysmmo:
        $yukwwaakiyeueawg = ManipulateArray::get($ccamueccusigaaio, "\150\157\163\x74");
        goto cmumiaooyqwsmeuo;
        lmguwygiwkqsssgg:
    }
    
    public static function gooqqcmsyseiaikc($eeamcawaiqocomwy, $wksoawcgagcgoask = -1)
    {
        goto aaauiqoqqegqooay;
        sauuoosgewomwsiy:
        $yiasugywggckywoa = wp_parse_url($eeamcawaiqocomwy, $wksoawcgagcgoask);
        goto miaesquumiwuikow;
        eoguuwgwkauemioy:
        soskiwqicumascii:
        goto sauuoosgewomwsiy;
        gocakccykoiugocw:
        return $yiasugywggckywoa;
        goto qgsuysqmamgkcamg;
        oweuewiycuqueioi:
        goto mcqousgoosgkwymi;
        goto eoguuwgwkauemioy;
        ccgouqosggeqqywe:
        $yiasugywggckywoa = parse_url($eeamcawaiqocomwy, $wksoawcgagcgoask);
        goto oweuewiycuqueioi;
        miaesquumiwuikow:
        mcqousgoosgkwymi:
        goto gocakccykoiugocw;
        aaauiqoqqegqooay:
        if (function_exists("\167\x70\137\x70\x61\x72\x73\x65\137\x75\x72\154")) {
            goto soskiwqicumascii;
        }
        goto ccgouqosggeqqywe;
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
        if (!(substr($eeamcawaiqocomwy, 0, 2) !== "\57\57")) {
            goto ioyquegiawkuegmw;
        }
        goto oeeaiusewwccaeca;
        oamcwqaceqmoiimo:
        ioyquegiawkuegmw:
        goto wemsokoqyyyiemio;
        wemsokoqyyyiemio:
        $eeamcawaiqocomwy = set_url_scheme($eeamcawaiqocomwy);
        goto gicokucyoymgamsk;
        oeeaiusewwccaeca:
        $eeamcawaiqocomwy = "\x2f\x2f" . $eeamcawaiqocomwy;
        goto oamcwqaceqmoiimo;
        gicokucyoymgamsk:
        ckygqsyqoiuiqqgs:
        goto mgkouoausowamwao;
        mgkouoausowamwao:
        return $eeamcawaiqocomwy;
        goto muouacosiuwuwuuw;
        auugmgyeukqkoecc:
        if (!(!strpos($eeamcawaiqocomwy, "\150\x74\164\160\x3a\x2f\57") !== false && !strpos($eeamcawaiqocomwy, "\150\164\164\160\163\x3a\57\57") !== false)) {
            goto ckygqsyqoiuiqqgs;
        }
        goto geeygkawayuqsesa;
        muouacosiuwuwuuw:
    }
    
    public static function gokuyqsimauyacke($eeamcawaiqocomwy = '') : ?string
    {
        return str_replace(["\150\164\x74\160\72\57\x2f", "\150\164\164\160\x73\x3a\x2f\57", "\x2f\57"], '', $eeamcawaiqocomwy);
    }
}
