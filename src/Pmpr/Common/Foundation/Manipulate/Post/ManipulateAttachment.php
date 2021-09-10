<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613bb98fa102d             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Manipulate\Post;

use Pmpr\Common\Foundation\Decorator\DecoratorHook;
use Pmpr\Common\Foundation\Decorator\DecoratorOption;
use Pmpr\Common\Foundation\Decorator\Post\DecoratorAttachment;
use Pmpr\Common\Foundation\Filesystem;
use Pmpr\Common\Foundation\Manipulate\ManipulateFormat;
use Pmpr\Common\Foundation\Manipulate\ManipulateServer;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateString;
use WP_Post;
use WP_Query;

class ManipulateAttachment extends ManipulatePost
{
    
    public static function wgogyccwcysggaig() : array
    {
        $wkuikksoimmikkek = [];
        $ggauoeuaesiymgee = get_intermediate_image_sizes();
        foreach ($ggauoeuaesiymgee as $oiegiwogmwmawkeo) {
            $qaiwqwwemmyyqosy = self::iuwsgyqakicakuoq($oiegiwogmwmawkeo);
            if ($qaiwqwwemmyyqosy) {
                $wkuikksoimmikkek[$oiegiwogmwmawkeo] = $qaiwqwwemmyyqosy;
            }
            goaowamiyyamueiw:
        }
        gsqcoqqsioiyoykq:
        global $_wp_additional_image_sizes;
        if (isset($_wp_additional_image_sizes) && count($_wp_additional_image_sizes)) {
            $wkuikksoimmikkek = array_merge($wkuikksoimmikkek, $_wp_additional_image_sizes);
        }
        return $wkuikksoimmikkek;
    }
    
    public static function iuwsgyqakicakuoq($ymqmyyeuycgmigyo)
    {
        global $_wp_additional_image_sizes;
        $qaiwqwwemmyyqosy = ManipulateArray::get($_wp_additional_image_sizes, $ymqmyyeuycgmigyo, []);
        if (!$qaiwqwwemmyyqosy) {
            $euciqcqmqamuoqga = intval(DecoratorOption::get("{$ymqmyyeuycgmigyo}_crop"));
            $qeswwaqqsyymqawg = intval(DecoratorOption::get("{$ymqmyyeuycgmigyo}_size_w"));
            $cswemwoyesycwkuq = intval(DecoratorOption::get("{$ymqmyyeuycgmigyo}_size_h"));
            if ($qeswwaqqsyymqawg && $cswemwoyesycwkuq) {
                $qaiwqwwemmyyqosy = ['crop' => $euciqcqmqamuoqga, 'width' => $qeswwaqqsyymqawg, 'height' => $cswemwoyesycwkuq];
            }
        }
        return $qaiwqwwemmyyqosy;
    }
    
    public static function aauyuieeeaakygki($aiooqyausygaasqm)
    {
        return self::ccwssmqgyasqqcoc($aiooqyausygaasqm, 'attachment');
    }
    
    public static function qecqsmowoqmwgagu($aiooqyausygaasqm) : bool
    {
        return DecoratorAttachment::qecqsmowoqmwgagu(self::mwikyscisascoeea($aiooqyausygaasqm));
    }
    
    public static function yucssysgmisaquki($aiooqyausygaasqm)
    {
        $iwywmkygwewiamwm = false;
        if ($aiooqyausygaasqm) {
            $aokagokqyuysuksm = self::mwikyscisascoeea($aiooqyausygaasqm);
            if ($aokagokqyuysuksm) {
                $ymacoouqwcqwwagu = ManipulateString::crypt($aokagokqyuysuksm, true);
                $iwywmkygwewiamwm = untrailingslashit(ManipulateServer::gmigwwwmwemyaayy()) . "/download/{$ymacoouqwcqwwagu}/";
            }
        }
        return $iwywmkygwewiamwm;
    }
    
    public static function _updateMeta($aiooqyausygaasqm, $icwicymcioeyeyek)
    {
        return DecoratorAttachment::ksmqawcowkmegigw(self::mwikyscisascoeea($aiooqyausygaasqm), $icwicymcioeyeyek);
    }
    
    public static function ikocqgeqiykwwyqs($aiooqyausygaasqm = null)
    {
        return DecoratorAttachment::ikocqgeqiykwwyqs(self::mwikyscisascoeea($aiooqyausygaasqm));
    }
    
    public static function mgaeeqsgeoukeokc($aiooqyausygaasqm, $oiegiwogmwmawkeo = 'full')
    {
        $mcqieaigyeeyaksm = self::uikkssqcoewckces($aiooqyausygaasqm, $oiegiwogmwmawkeo);
        return ManipulateArray::get($mcqieaigyeeyaksm, 0);
    }
    
    public static function smiqaaaecemiwugu($aiooqyausygaasqm, $qogsmwakwacwqogk)
    {
        return DecoratorAttachment::smiqaaaecemiwugu(self::mwikyscisascoeea($aiooqyausygaasqm), $qogsmwakwacwqogk);
    }
    
    public static function ckoygqywcuqasqea($aiooqyausygaasqm, $beuoaqwyyugcgeas = false)
    {
        return DecoratorAttachment::ckoygqywcuqasqea(self::mwikyscisascoeea($aiooqyausygaasqm), $beuoaqwyyugcgeas);
    }
    
    public static function uikkssqcoewckces($aiooqyausygaasqm, $oiegiwogmwmawkeo = 'thumbnail', $wkaqekwwgqsqwcoi = false)
    {
        return DecoratorAttachment::uikkssqcoewckces($aiooqyausygaasqm, $oiegiwogmwmawkeo, $wkaqekwwgqsqwcoi);
    }
    
    public static function wggscwmuogkkkmgq($aiooqyausygaasqm, $acsweksygkmmgggk = true, $siquossayskcwkea = [])
    {
        $acqcekoeswseswws = self::ckoygqywcuqasqea($aiooqyausygaasqm);
        if (Filesystem::symcgieuakksimmu()->exists($acqcekoeswseswws)) {
            $meqocwsecsywiiqs = self::qcgakseyaikigqco($aiooqyausygaasqm);
            if ($acsweksygkmmgggk) {
                $iwywmkygwewiamwm = self::yucssysgmisaquki($aiooqyausygaasqm);
            } else {
                $iwywmkygwewiamwm = DecoratorAttachment::oiucukewkckkwiqc($aiooqyausygaasqm);
            }
            $siquossayskcwkea = ManipulateFormat::omaawkkwwyesqwcc($siquossayskcwkea, ['href' => $iwywmkygwewiamwm, 'title' => $meqocwsecsywiiqs ? $meqocwsecsywiiqs : self::aqcogscycyycgkuq($aiooqyausygaasqm), 'target' => '_blank', 'download' => rawurldecode(basename($acqcekoeswseswws))]);
        }
        return $siquossayskcwkea;
    }
    
    public static function ecqkouyiioksggkw(string $eeamcawaiqocomwy)
    {
        $aokagokqyuysuksm = 0;
        $miawkwqioaeasiig = wp_upload_dir();
        
        if (false === strpos($eeamcawaiqocomwy, $miawkwqioaeasiig['baseurl'] . '/')) {
            return false;
        }
        $qogsmwakwacwqogk = basename($eeamcawaiqocomwy);
        $ywmkwiwkosakssii = ['post_type' => 'attachment', 'post_status' => 'inherit', 'fields' => 'ids', 'meta_query' => [['value' => $qogsmwakwacwqogk, 'compare' => 'LIKE', 'key' => '_wp_attachment_metadata']]];
        $gqgemcmoicmgaqie = new WP_Query($ywmkwiwkosakssii);
        if ($gqgemcmoicmgaqie->have_posts()) {
            foreach ($gqgemcmoicmgaqie->posts as $gcqseksiskwueksc) {
                $ugugimquukqwogge = wp_get_attachment_metadata($gcqseksiskwueksc);
                $ccgkuocaoksweawk = isset($ugugimquukqwogge['sizes']) ? wp_list_pluck($ugugimquukqwogge['sizes'], 'file') : [];
                $wsiwwymgaoqsyagc = basename($ugugimquukqwogge['file']);
                if ($wsiwwymgaoqsyagc === $qogsmwakwacwqogk || in_array($qogsmwakwacwqogk, $ccgkuocaoksweawk)) {
                    $aokagokqyuysuksm = $gcqseksiskwueksc;
                    goto iaomqomgiwiegoca;
                }
                ysweqawmawicakeo:
            }
            iaomqomgiwiegoca:
        }
        return 0 === $aokagokqyuysuksm ? false : $aokagokqyuysuksm;
    }
    
    public static function qaeeusqkgwagwaqc($aokagokqyuysuksm, $oiegiwogmwmawkeo = 'thumbnail', $wisgiwskwawciiee = [], $sscegwueamckwmcy = true, $wkaqekwwgqsqwcoi = false)
    {
        $nsmgceoqaqogqmuw = DecoratorAttachment::qaeeusqkgwagwaqc($aokagokqyuysuksm, $oiegiwogmwmawkeo, $wisgiwskwawciiee, $wkaqekwwgqsqwcoi);
        if ($sscegwueamckwmcy) {
            $nsmgceoqaqogqmuw = DecoratorHook::sscegwueamckwmcy('wp_get_attachment_image', $nsmgceoqaqogqmuw, $aokagokqyuysuksm, $oiegiwogmwmawkeo, $wisgiwskwawciiee, $wkaqekwwgqsqwcoi);
        }
        return $nsmgceoqaqogqmuw;
    }
}
