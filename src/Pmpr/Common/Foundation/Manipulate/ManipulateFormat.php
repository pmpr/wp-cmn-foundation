<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b5973b89a9             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Manipulate;

use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;

class ManipulateFormat extends Manipulate
{
    
    public static function aoaeiwswyagmesku($eeamcawaiqocomwy)
    {
        goto igwqkcqgscwckiuk;
        igwqkcqgscwckiuk:
        $egsumesakcaaukem = self::gooqqcmsyseiaikc(ManipulateServer::gmigwwwmwemyaayy());
        goto cyomuiwaiksgqyis;
        cmumiaooyqwsmeuo:
        $yukwwaakiyeueawg = ManipulateArray::get($ccamueccusigaaio, "\x68\x6f\x73\164");
        goto lmguwygiwkqsssgg;
        cyomuiwaiksgqyis:
        $ccamueccusigaaio = self::gooqqcmsyseiaikc($eeamcawaiqocomwy);
        goto imkwkuoumqqysmmo;
        imkwkuoumqqysmmo:
        $wkwsmsgmkcmugoya = ManipulateArray::get($egsumesakcaaukem, "\150\x6f\163\164");
        goto cmumiaooyqwsmeuo;
        lmguwygiwkqsssgg:
        return $egsumesakcaaukem && $wkwsmsgmkcmugoya && $ccamueccusigaaio && $yukwwaakiyeueawg && strcasecmp($yukwwaakiyeueawg, $wkwsmsgmkcmugoya) !== 0;
        goto soskiwqicumascii;
        soskiwqicumascii:
    }
    
    public static function gooqqcmsyseiaikc($eeamcawaiqocomwy, $wksoawcgagcgoask = -1)
    {
        goto ccgouqosggeqqywe;
        miaesquumiwuikow:
        $yiasugywggckywoa = wp_parse_url($eeamcawaiqocomwy, $wksoawcgagcgoask);
        goto gocakccykoiugocw;
        sauuoosgewomwsiy:
        mcqousgoosgkwymi:
        goto miaesquumiwuikow;
        ccgouqosggeqqywe:
        if (function_exists("\167\x70\x5f\x70\x61\162\163\145\137\165\x72\x6c")) {
            goto mcqousgoosgkwymi;
        }
        goto oweuewiycuqueioi;
        qgsuysqmamgkcamg:
        return $yiasugywggckywoa;
        goto ioyquegiawkuegmw;
        eoguuwgwkauemioy:
        goto aaauiqoqqegqooay;
        goto sauuoosgewomwsiy;
        oweuewiycuqueioi:
        $yiasugywggckywoa = parse_url($eeamcawaiqocomwy, $wksoawcgagcgoask);
        goto eoguuwgwkauemioy;
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
        oamcwqaceqmoiimo:
        $eeamcawaiqocomwy = "\57\57" . $eeamcawaiqocomwy;
        goto wemsokoqyyyiemio;
        oeeaiusewwccaeca:
        if (!(substr($eeamcawaiqocomwy, 0, 2) !== "\x2f\57")) {
            goto ckygqsyqoiuiqqgs;
        }
        goto oamcwqaceqmoiimo;
        muouacosiuwuwuuw:
        return $eeamcawaiqocomwy;
        goto wqawogguqkeuwwco;
        gicokucyoymgamsk:
        $eeamcawaiqocomwy = set_url_scheme($eeamcawaiqocomwy);
        goto mgkouoausowamwao;
        geeygkawayuqsesa:
        if (!(!strpos($eeamcawaiqocomwy, "\150\x74\x74\x70\72\57\57") !== false && !strpos($eeamcawaiqocomwy, "\150\x74\x74\x70\163\72\x2f\x2f") !== false)) {
            goto auugmgyeukqkoecc;
        }
        goto oeeaiusewwccaeca;
        wemsokoqyyyiemio:
        ckygqsyqoiuiqqgs:
        goto gicokucyoymgamsk;
        mgkouoausowamwao:
        auugmgyeukqkoecc:
        goto muouacosiuwuwuuw;
        wqawogguqkeuwwco:
    }
    
    public static function gokuyqsimauyacke($eeamcawaiqocomwy = '') : ?string
    {
        return str_replace(["\150\164\x74\x70\72\x2f\57", "\x68\x74\164\160\x73\x3a\x2f\57", "\x2f\57"], '', $eeamcawaiqocomwy);
    }
}
