<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613bb98fa102d             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Manipulate;

use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;

class ManipulateFormat extends Manipulate
{
    
    public static function aoaeiwswyagmesku($eeamcawaiqocomwy)
    {
        $egsumesakcaaukem = self::gooqqcmsyseiaikc(ManipulateServer::gmigwwwmwemyaayy());
        $ccamueccusigaaio = self::gooqqcmsyseiaikc($eeamcawaiqocomwy);
        $wkwsmsgmkcmugoya = ManipulateArray::get($egsumesakcaaukem, 'host');
        $yukwwaakiyeueawg = ManipulateArray::get($ccamueccusigaaio, 'host');
        return $egsumesakcaaukem && $wkwsmsgmkcmugoya && $ccamueccusigaaio && $yukwwaakiyeueawg && strcasecmp($yukwwaakiyeueawg, $wkwsmsgmkcmugoya) !== 0;
    }
    
    public static function gooqqcmsyseiaikc($eeamcawaiqocomwy, $wksoawcgagcgoask = -1)
    {
        if (function_exists('wp_parse_url')) {
            $yiasugywggckywoa = wp_parse_url($eeamcawaiqocomwy, $wksoawcgagcgoask);
        } else {
            $yiasugywggckywoa = parse_url($eeamcawaiqocomwy, $wksoawcgagcgoask);
        }
        return $yiasugywggckywoa;
    }
    
    public static function omaawkkwwyesqwcc($ywmkwiwkosakssii, $ycmguuqqaiisymgg = [])
    {
        return wp_parse_args($ywmkwiwkosakssii, $ycmguuqqaiisymgg);
    }
    
    public static function qugygsasyieckkoc(string $eeamcawaiqocomwy) : string
    {
        if (!strpos($eeamcawaiqocomwy, 'http://') !== false && !strpos($eeamcawaiqocomwy, 'https://') !== false) {
            if (substr($eeamcawaiqocomwy, 0, 2) !== '//') {
                $eeamcawaiqocomwy = '//' . $eeamcawaiqocomwy;
            }
            $eeamcawaiqocomwy = set_url_scheme($eeamcawaiqocomwy);
        }
        return $eeamcawaiqocomwy;
    }
    
    public static function gokuyqsimauyacke($eeamcawaiqocomwy = '') : ?string
    {
        return str_replace(['http://', 'https://', '//'], '', $eeamcawaiqocomwy);
    }
}
