<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613bb98fa102d             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Manipulate\Post;

use Pmpr\Common\Foundation\Decorator\DecoratorHook;
use Pmpr\Common\Foundation\Decorator\DecoratorOption;
use Pmpr\Common\Foundation\Decorator\Post\DecoratorComment;
use Pmpr\Common\Foundation\Manipulate\ManipulateFormat;
use Pmpr\Common\Foundation\Manipulate\ManipulateSetting;
use Pmpr\Common\Foundation\Manipulate\ManipulateUser;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;
use WP_Comment;
use WP_Post;

class ManipulateComment extends Common
{
    
    public static function get($aqqmosqmsuueyaes)
    {
        if (!$aqqmosqmsuueyaes instanceof WP_Comment) {
            $aokagokqyuysuksm = self::mwikyscisascoeea($aqqmosqmsuueyaes);
            $aqqmosqmsuueyaes = DecoratorComment::get($aokagokqyuysuksm);
        }
        return $aqqmosqmsuueyaes;
    }
    
    public static function mwikyscisascoeea($aqqmosqmsuueyaes)
    {
        $aokagokqyuysuksm = null;
        if ($aqqmosqmsuueyaes instanceof WP_Comment) {
            $aokagokqyuysuksm = $aqqmosqmsuueyaes->comment_ID;
        } elseif (is_numeric($aqqmosqmsuueyaes)) {
            $aokagokqyuysuksm = $aqqmosqmsuueyaes;
        }
        return $aokagokqyuysuksm;
    }
    
    public static function ayueggmoqeeukqmq($aqqmosqmsuueyaes)
    {
        $post = null;
        $aqqmosqmsuueyaes = self::get($aqqmosqmsuueyaes);
        if ($aqqmosqmsuueyaes instanceof WP_Comment) {
            $post = ManipulatePost::get($aqqmosqmsuueyaes->comment_post_ID);
        }
        return $post;
    }
    
    public static function issssuygyewuaswa($aqqmosqmsuueyaes)
    {
        $aqqmosqmsuueyaes = self::get($aqqmosqmsuueyaes);
        $qscaoekmoooeuyqg = null;
        if ($aqqmosqmsuueyaes) {
            $qscaoekmoooeuyqg = ManipulateUser::get($aqqmosqmsuueyaes->user_id, true);
        }
        return $qscaoekmoooeuyqg;
    }
    
    public static function ciugwooasaqcywas($ywmkwiwkosakssii = [])
    {
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ['status' => 'all', 'search' => '', 'count' => false]);
        return DecoratorComment::ciugwooasaqcywas($ywmkwiwkosakssii);
    }
    
    public static function mguqscccckuywsya($aqqmosqmsuueyaes)
    {
        return DecoratorComment::mguqscccckuywsya(self::mwikyscisascoeea($aqqmosqmsuueyaes));
    }
    
    public static function souwykwwmyygqyqi($aqqmosqmsuueyaes)
    {
        return DecoratorComment::ykgcioecqcwwkime(self::mwikyscisascoeea($aqqmosqmsuueyaes));
    }
    
    public static function qkweigiqsaaigqau($aqqmosqmsuueyaes)
    {
        return DecoratorComment::qkweigiqsaaigqau(self::mwikyscisascoeea($aqqmosqmsuueyaes));
    }
    
    public static function uikgwcuascgeissw($aqqmosqmsuueyaes) : string
    {
        $post = self::ayueggmoqeeukqmq($aqqmosqmsuueyaes);
        $meqocwsecsywiiqs = ManipulatePost::qcgakseyaikigqco($post);
        $useksmwkuswkwcqg = ManipulatePost::gueasuouwqysmomu($post, true);
        if ($useksmwkuswkwcqg) {
            $useksmwkuswkwcqg = $useksmwkuswkwcqg->label;
        }
        $qscaoekmoooeuyqg = self::mguqscccckuywsya($aqqmosqmsuueyaes);
        $ocogsiouoiuuguym = self::squyiyimquqicqke($aqqmosqmsuueyaes);
        return sprintf('%s - %s - %s - %s', $qscaoekmoooeuyqg, $ocogsiouoiuuguym, $useksmwkuswkwcqg, $meqocwsecsywiiqs);
    }
    
    public static function immcwcemcmyosyoo($awqscowmskeuymeu = true)
    {
        $aqqmosqmsuueyaes = '';
        if (isset($_GET['action'], $_GET['c']) && $_GET['action'] == 'editcomment') {
            $aqqmosqmsuueyaes = $_GET['c'];
        } elseif (isset($_POST['action'], $_POST['comment_ID']) && $_POST['action'] == 'editedcomment') {
            $aqqmosqmsuueyaes = $_POST['comment_ID'];
        }
        if ($aqqmosqmsuueyaes) {
            $aqqmosqmsuueyaes = self::get($aqqmosqmsuueyaes);
        }
        return $aqqmosqmsuueyaes;
    }
    
    public static function delete($aqqmosqmsuueyaes, $cwwowqyuwccuykom = false)
    {
        $eysyeukyagaoqqcy = false;
        if ($aqqmosqmsuueyaes && is_numeric($aqqmosqmsuueyaes)) {
            wp_delete_comment($aqqmosqmsuueyaes, $cwwowqyuwccuykom);
        }
        return $eysyeukyagaoqqcy;
    }
    
    public static function omkaowmygoqwsywq($ggauoeuaesiymgee = 10)
    {
        $uuyoeicyoayimaoa = DecoratorOption::get('comments_per_page', $ggauoeuaesiymgee);
        if (!$uuyoeicyoayimaoa) {
            $uuyoeicyoayimaoa = ManipulateSetting::omkaowmygoqwsywq($ggauoeuaesiymgee);
        }
        return $uuyoeicyoayimaoa;
    }
    
    public static function igawqaomowicuayw($uusmaiomayssaecw, $aqqmosqmsuueyaes = null, $cuyooiakswegosog = true)
    {
        return DecoratorComment::igawqaomowicuayw(self::mwikyscisascoeea($aqqmosqmsuueyaes), $uusmaiomayssaecw, $cuyooiakswegosog);
    }
    
    public static function giwmekimakcaawsq($uusmaiomayssaecw, $eqgoocgaqwqcimie, $aqqmosqmsuueyaes = null, $omasqoksqewuwwkq = true)
    {
        DecoratorComment::giwmekimakcaawsq(self::mwikyscisascoeea($aqqmosqmsuueyaes), $uusmaiomayssaecw, $eqgoocgaqwqcimie, $omasqoksqewuwwkq);
    }
    
    public static function ksmqawcowkmegigw($uusmaiomayssaecw, $eqgoocgaqwqcimie, $aqqmosqmsuueyaes = null, $cuyooiakswegosog = true)
    {
        DecoratorComment::ksmqawcowkmegigw(self::mwikyscisascoeea($aqqmosqmsuueyaes), $uusmaiomayssaecw, $eqgoocgaqwqcimie, $cuyooiakswegosog);
    }
    
    public static function squyiyimquqicqke($aqqmosqmsuueyaes, $saqmwwmqiwmkiwaa = null, $egkeamycaysqsoma = true)
    {
        $aqqmosqmsuueyaes = self::get($aqqmosqmsuueyaes);
        if (!$saqmwwmqiwmkiwaa) {
            $saqmwwmqiwmkiwaa = ManipulateSetting::uyomwmskouyyqyyq();
        }
        $ocogsiouoiuuguym = mysql2date($saqmwwmqiwmkiwaa, $aqqmosqmsuueyaes->comment_date, false);
        if ($egkeamycaysqsoma) {
            $ocogsiouoiuuguym = DecoratorHook::sscegwueamckwmcy('get_comment_date', $ocogsiouoiuuguym, $saqmwwmqiwmkiwaa, $aqqmosqmsuueyaes);
        }
        return $ocogsiouoiuuguym;
    }
}
