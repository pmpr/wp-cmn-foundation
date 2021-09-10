<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613bb98fa102d             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Decorator;


class DecoratorUser extends Decorator
{
    
    public static function ksgkoukcicwkkaum() : bool
    {
        if (!function_exists('is_user_logged_in')) {
            include_once ABSPATH . 'wp-includes/pluggable.php';
        }
        return is_user_logged_in();
    }
    
    public static function woimamkkeyoyauoa($aiowsaccomcoikus, $eqgoocgaqwqcimie)
    {
        return get_user_by($aiowsaccomcoikus, $eqgoocgaqwqcimie);
    }
    
    public static function ciugwooasaqcywas($ywmkwiwkosakssii = [])
    {
        return get_users($ywmkwiwkosakssii);
    }
    
    public static function kccaogemggeogags() : bool
    {
        return user_can_richedit();
    }
    
    public static function iyouigcsiacgwksc($mkucggyaiaukqoce = null) : string
    {
        return function_exists('get_user_locale') ? get_user_locale($mkucggyaiaukqoce) : get_locale();
    }
    
    public static function yyykkcyiksewsoqy($mkucggyaiaukqoce) : ?string
    {
        return get_edit_user_link($mkucggyaiaukqoce);
    }
    
    public static function ekqiayaoseqcygmo($mkucggyaiaukqoce) : ?string
    {
        return get_edit_profile_url($mkucggyaiaukqoce);
    }
    
    public static function ogcwgigqwycqswms($mkucggyaiaukqoce, $oiegiwogmwmawkeo = 64, $ggauoeuaesiymgee = '', $gkykacccamuwowwc = '', $ywmkwiwkosakssii = [])
    {
        return get_avatar($mkucggyaiaukqoce, $oiegiwogmwmawkeo, $ggauoeuaesiymgee, $gkykacccamuwowwc, $ywmkwiwkosakssii);
    }
    
    public static function iccqaqcagacsuukg() : int
    {
        return get_current_user_id();
    }
    
    public static function smqukgcyacswysqa($uusmaiomayssaecw, $mkucggyaiaukqoce = null, $eqgoocgaqwqcimie = '')
    {
        return delete_user_meta($mkucggyaiaukqoce, $uusmaiomayssaecw, $eqgoocgaqwqcimie);
    }
    
    public static function igawqaomowicuayw($uusmaiomayssaecw, $mkucggyaiaukqoce = null, $cuyooiakswegosog = true)
    {
        return get_user_meta($mkucggyaiaukqoce, $uusmaiomayssaecw, $cuyooiakswegosog);
    }
    
    public static function aeymcyaqkmmukomc($mkucggyaiaukqoce = null, $ywmkwiwkosakssii = []) : bool
    {
        return get_avatar_url($mkucggyaiaukqoce, $ywmkwiwkosakssii);
    }
    
    public static function giiuwsmyumqwwiyq($omkysikckkcieckq, $mkucggyaiaukqoce = 0)
    {
        return get_user_option($omkysikckkcieckq, $mkucggyaiaukqoce);
    }
    
    public static function giwmekimakcaawsq($uusmaiomayssaecw, $eqgoocgaqwqcimie, $mkucggyaiaukqoce = null, $omasqoksqewuwwkq = true)
    {
        return add_user_meta($mkucggyaiaukqoce, $uusmaiomayssaecw, $eqgoocgaqwqcimie, $omasqoksqewuwwkq);
    }
    
    public static function ksmqawcowkmegigw($uusmaiomayssaecw, $eqgoocgaqwqcimie = '', $mkucggyaiaukqoce = null, $swwmymiaiosiyqis = '')
    {
        return update_user_meta($mkucggyaiaukqoce, $uusmaiomayssaecw, $eqgoocgaqwqcimie, $swwmymiaiosiyqis);
    }
    
    public static function scmcyesmmikkucie($eogowigeyucaauig = 'manage_options', ...$ywmkwiwkosakssii) : bool
    {
        return function_exists('current_user_can') && current_user_can($eogowigeyucaauig, ...$ywmkwiwkosakssii);
    }
    
    public static function yciaosuiyeieceug($mkucggyaiaukqoce = null, $eogowigeyucaauig = 'manage_options', ...$ywmkwiwkosakssii) : bool
    {
        return user_can($mkucggyaiaukqoce, $eogowigeyucaauig, ...$ywmkwiwkosakssii);
    }
}
