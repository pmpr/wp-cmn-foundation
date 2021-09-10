<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b1e8aa0c03             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Manipulate;

use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;

class ManipulateFormat extends Manipulate
{
    
    public static function aoaeiwswyagmesku($eeamcawaiqocomwy)
    {
        goto qiugceckoaiawsoi;
        qiugceckoaiawsoi:
        $egsumesakcaaukem = self::gooqqcmsyseiaikc(ManipulateServer::gmigwwwmwemyaayy());
        goto geusmeaowwsycmuc;
        geusmeaowwsycmuc:
        $ccamueccusigaaio = self::gooqqcmsyseiaikc($eeamcawaiqocomwy);
        goto ssoseykuwegsmyum;
        ssoseykuwegsmyum:
        $wkwsmsgmkcmugoya = ManipulateArray::get($egsumesakcaaukem, "\150\x6f\x73\x74");
        goto mwqsossoseygkwmy;
        igwqkcqgscwckiuk:
        return $egsumesakcaaukem && $wkwsmsgmkcmugoya && $ccamueccusigaaio && $yukwwaakiyeueawg && strcasecmp($yukwwaakiyeueawg, $wkwsmsgmkcmugoya) !== 0;
        goto cyomuiwaiksgqyis;
        mwqsossoseygkwmy:
        $yukwwaakiyeueawg = ManipulateArray::get($ccamueccusigaaio, "\x68\x6f\x73\x74");
        goto igwqkcqgscwckiuk;
        cyomuiwaiksgqyis:
    }
    
    public static function gooqqcmsyseiaikc($eeamcawaiqocomwy, $wksoawcgagcgoask = -1)
    {
        goto lmguwygiwkqsssgg;
        mcqousgoosgkwymi:
        goto cmumiaooyqwsmeuo;
        goto aaauiqoqqegqooay;
        oweuewiycuqueioi:
        cmumiaooyqwsmeuo:
        goto eoguuwgwkauemioy;
        soskiwqicumascii:
        $yiasugywggckywoa = parse_url($eeamcawaiqocomwy, $wksoawcgagcgoask);
        goto mcqousgoosgkwymi;
        aaauiqoqqegqooay:
        imkwkuoumqqysmmo:
        goto ccgouqosggeqqywe;
        lmguwygiwkqsssgg:
        if (function_exists("\167\160\137\x70\x61\162\x73\145\137\x75\x72\x6c")) {
            goto imkwkuoumqqysmmo;
        }
        goto soskiwqicumascii;
        ccgouqosggeqqywe:
        $yiasugywggckywoa = wp_parse_url($eeamcawaiqocomwy, $wksoawcgagcgoask);
        goto oweuewiycuqueioi;
        eoguuwgwkauemioy:
        return $yiasugywggckywoa;
        goto sauuoosgewomwsiy;
        sauuoosgewomwsiy:
    }
    
    public static function omaawkkwwyesqwcc($ywmkwiwkosakssii, $ycmguuqqaiisymgg = [])
    {
        return wp_parse_args($ywmkwiwkosakssii, $ycmguuqqaiisymgg);
    }
    
    public static function qugygsasyieckkoc(string $eeamcawaiqocomwy) : string
    {
        goto qgsuysqmamgkcamg;
        auugmgyeukqkoecc:
        miaesquumiwuikow:
        goto geeygkawayuqsesa;
        geeygkawayuqsesa:
        $eeamcawaiqocomwy = set_url_scheme($eeamcawaiqocomwy);
        goto oeeaiusewwccaeca;
        oeeaiusewwccaeca:
        gocakccykoiugocw:
        goto oamcwqaceqmoiimo;
        oamcwqaceqmoiimo:
        return $eeamcawaiqocomwy;
        goto wemsokoqyyyiemio;
        qgsuysqmamgkcamg:
        if (!(!strpos($eeamcawaiqocomwy, "\x68\164\x74\160\x3a\x2f\57") !== false && !strpos($eeamcawaiqocomwy, "\150\x74\x74\x70\x73\x3a\x2f\x2f") !== false)) {
            goto gocakccykoiugocw;
        }
        goto ioyquegiawkuegmw;
        ioyquegiawkuegmw:
        if (!(substr($eeamcawaiqocomwy, 0, 2) !== "\x2f\x2f")) {
            goto miaesquumiwuikow;
        }
        goto ckygqsyqoiuiqqgs;
        ckygqsyqoiuiqqgs:
        $eeamcawaiqocomwy = "\57\x2f" . $eeamcawaiqocomwy;
        goto auugmgyeukqkoecc;
        wemsokoqyyyiemio:
    }
    
    public static function gokuyqsimauyacke($eeamcawaiqocomwy = '') : ?string
    {
        return str_replace(["\x68\x74\x74\160\72\x2f\x2f", "\150\164\x74\160\163\x3a\57\x2f", "\57\57"], '', $eeamcawaiqocomwy);
    }
}
