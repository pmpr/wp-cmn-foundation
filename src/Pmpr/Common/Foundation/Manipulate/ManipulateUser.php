<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613bb98fa102d             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Manipulate;

use Pmpr\Common\Foundation\Decorator\DecoratorUser;
use Pmpr\Common\Foundation\DOMCrawler;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;
use WP_Role;
use WP_User;

class ManipulateUser extends Manipulate
{
    
    public static function meymqemgekqiawec()
    {
        $kucumcusyyckayas = '';
        if (isset($_SERVER)) {
            $kkeqqkkkqwkocsyu = ['HTTP_X_REAL_IP', 'HTTP_CLIENT_IP', 'HTTP_X_FORWARDED_FOR', 'REMOTE_ADDR'];
            foreach ($kkeqqkkkqwkocsyu as $gygawogosumsgmme) {
                if (isset($_SERVER[$gygawogosumsgmme]) && $_SERVER[$gygawogosumsgmme]) {
                    if (filter_var($_SERVER[$gygawogosumsgmme], FILTER_VALIDATE_IP)) {
                        $kucumcusyyckayas = $_SERVER[$gygawogosumsgmme];
                        goto qsokkkyoackoycie;
                    } else {
                        $uomewyckeuqoqocu = explode(',', $_SERVER[$gygawogosumsgmme]);
                        if (is_array($uomewyckeuqoqocu) && $uomewyckeuqoqocu && isset($uomewyckeuqoqocu[0]) && filter_var($uomewyckeuqoqocu[0], FILTER_VALIDATE_IP)) {
                            $kucumcusyyckayas = $uomewyckeuqoqocu[0];
                            goto qsokkkyoackoycie;
                        }
                    }
                }
                casgoamcqkekgeeo:
            }
            qsokkkyoackoycie:
        }
        return $kucumcusyyckayas;
    }
    
    public static function eoyueosccuoeqkee() : bool
    {
        global $pagenow;
        return in_array($pagenow, ['user-edit.php', 'user-new.php', 'profile.php']);
    }
    
    public static function ikcimmaqiwekowoi($ymqmyyeuycgmigyo) : ?WP_Role
    {
        return get_role($ymqmyyeuycgmigyo);
    }
    
    public static function ekqiayaoseqcygmo($mkucggyaiaukqoce) : ?string
    {
        return DecoratorUser::ekqiayaoseqcygmo(self::mwikyscisascoeea($mkucggyaiaukqoce));
    }
    
    public static function yyykkcyiksewsoqy($mkucggyaiaukqoce) : ?string
    {
        return DecoratorUser::yyykkcyiksewsoqy(self::mwikyscisascoeea($mkucggyaiaukqoce));
    }
    
    public static function kuswmimkgmyuymiu(?string $miowmmgaiagcuyoo = null)
    {
        if (DecoratorUser::ksgkoukcicwkkaum()) {
            $miowmmgaiagcuyoo = self::mwikyscisascoeea();
        } else {
            if (!$miowmmgaiagcuyoo) {
                $miowmmgaiagcuyoo = ManipulateArray::get($_COOKIE, self::GUEST_ID_COOKIE);
            }
        }
        return $miowmmgaiagcuyoo;
    }
    
    public static function mmgsuuoossqmukqg($uagwmwoawiwkycao, $ywmkwiwkosakssii = []) : array
    {
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ['role' => $uagwmwoawiwkycao]);
        return DecoratorUser::ciugwooasaqcywas($ywmkwiwkosakssii);
    }
    
    public static function get($mkucggyaiaukqoce = null, $cwwowqyuwccuykom = false)
    {
        if ($mkucggyaiaukqoce && is_numeric($mkucggyaiaukqoce)) {
            $mkucggyaiaukqoce = get_userdata($mkucggyaiaukqoce);
        } else {
            if (!$mkucggyaiaukqoce && !$cwwowqyuwccuykom) {
                $mkucggyaiaukqoce = wp_get_current_user();
            }
        }
        if ($mkucggyaiaukqoce && !$mkucggyaiaukqoce->exists()) {
            $mkucggyaiaukqoce = null;
        }
        return $mkucggyaiaukqoce;
    }
    
    public static function mwikyscisascoeea($mkucggyaiaukqoce = null, $cwwowqyuwccuykom = false)
    {
        $aokagokqyuysuksm = null;
        if (!$cwwowqyuwccuykom) {
            $aokagokqyuysuksm = get_current_user_id();
        }
        if ($mkucggyaiaukqoce instanceof WP_User) {
            $aokagokqyuysuksm = $mkucggyaiaukqoce->ID ?? 0;
        } else {
            if (is_numeric($mkucggyaiaukqoce)) {
                $aokagokqyuysuksm = (int) $mkucggyaiaukqoce;
            }
        }
        return $aokagokqyuysuksm;
    }
    
    public static function yagwwwqikmkuyicq($mcmaiqckgiuqayau = false) : array
    {
        $uagwmwoawiwkycao = wp_roles()->get_names();
        if ($mcmaiqckgiuqayau) {
            foreach ($uagwmwoawiwkycao as $uusmaiomayssaecw => $oeucsuyqysaciasy) {
                $uagwmwoawiwkycao[$uusmaiomayssaecw] = translate_user_role($oeucsuyqysaciasy);
                qcgyggiaowuqswuw:
            }
            yseyyukqaowwouua:
        }
        return $uagwmwoawiwkycao;
    }
    
    public static function askmkgcmgekiqwsg($oeucsuyqysaciasy, $mkucggyaiaukqoce = null, $cwwowqyuwccuykom = false) : bool
    {
        $umuecysoywoumgwo = false;
        $mkucggyaiaukqoce = self::get($mkucggyaiaukqoce, $cwwowqyuwccuykom);
        if ($mkucggyaiaukqoce) {
            $uagwmwoawiwkycao = $mkucggyaiaukqoce->roles;
            $umuecysoywoumgwo = in_array($oeucsuyqysaciasy, $uagwmwoawiwkycao);
        }
        return $umuecysoywoumgwo;
    }
    
    public static function igawqaomowicuayw($uusmaiomayssaecw, $mkucggyaiaukqoce = null, $cuyooiakswegosog = true)
    {
        return DecoratorUser::igawqaomowicuayw($uusmaiomayssaecw, self::mwikyscisascoeea($mkucggyaiaukqoce), $cuyooiakswegosog);
    }
    
    public static function smqukgcyacswysqa($uusmaiomayssaecw, $mkucggyaiaukqoce = null, $eqgoocgaqwqcimie = '') : bool
    {
        return DecoratorUser::smqukgcyacswysqa($uusmaiomayssaecw, self::mwikyscisascoeea($mkucggyaiaukqoce), $eqgoocgaqwqcimie);
    }
    
    public static function giwmekimakcaawsq($uusmaiomayssaecw, $eqgoocgaqwqcimie, $mkucggyaiaukqoce = null, $omasqoksqewuwwkq = true)
    {
        return DecoratorUser::giwmekimakcaawsq($uusmaiomayssaecw, $eqgoocgaqwqcimie, self::mwikyscisascoeea($mkucggyaiaukqoce), $omasqoksqewuwwkq);
    }
    
    public static function ksmqawcowkmegigw($uusmaiomayssaecw, $eqgoocgaqwqcimie = '', $mkucggyaiaukqoce = null, $swwmymiaiosiyqis = '')
    {
        return DecoratorUser::ksmqawcowkmegigw($uusmaiomayssaecw, $eqgoocgaqwqcimie, self::mwikyscisascoeea($mkucggyaiaukqoce), $swwmymiaiosiyqis);
    }
    
    public static function qgisekcaywsmigga($uusmaiomayssaecw, $eqgoocgaqwqcimie, $uiuykcweuosgmwki = '=', $ywmkwiwkosakssii = []) : array
    {
        $ywmkwiwkosakssii['meta_query'] = ['relation' => 'AND', ['key' => $uusmaiomayssaecw, 'value' => $eqgoocgaqwqcimie, 'compare' => $uiuykcweuosgmwki]];
        return DecoratorUser::ciugwooasaqcywas($ywmkwiwkosakssii);
    }
    
    public static function ygwimyogyaqgumam($mkucggyaiaukqoce = null, ?string $aiowsaccomcoikus = 'display_name', $cwwowqyuwccuykom = false)
    {
        return ManipulateArray::get(self::get($mkucggyaiaukqoce, $cwwowqyuwccuykom), $aiowsaccomcoikus, null);
    }
    
    public static function ogcwgigqwycqswms($mkucggyaiaukqoce = null, $oiegiwogmwmawkeo = 64, $ywmkwiwkosakssii = [], $gkykacccamuwowwc = '', $ggauoeuaesiymgee = '')
    {
        return DecoratorUser::ogcwgigqwycqswms(self::mwikyscisascoeea($mkucggyaiaukqoce), $oiegiwogmwmawkeo, $ggauoeuaesiymgee, $gkykacccamuwowwc, $ywmkwiwkosakssii);
    }
    
    public static function quasyaqmmikeyoag($mkucggyaiaukqoce = null, $oiegiwogmwmawkeo = 64)
    {
        $mowgokyeuymuwiew = self::ogcwgigqwycqswms($mkucggyaiaukqoce, $oiegiwogmwmawkeo);
        if ($mowgokyeuymuwiew) {
            $mowgokyeuymuwiew = DOMCrawler::waecsyqmwascmqoa($mowgokyeuymuwiew, 'img', 'src');
        }
        return $mowgokyeuymuwiew;
    }
    
    public static function esmswawesuyogmik(array $uagwmwoawiwkycao, $mkucggyaiaukqoce = null, $cwwowqyuwccuykom = false, $wocwawaaemuoqmig = self::CON_OR) : bool
    {
        $umuecysoywoumgwo = false;
        if (is_array($uagwmwoawiwkycao)) {
            foreach ($uagwmwoawiwkycao as $oeucsuyqysaciasy) {
                if (self::askmkgcmgekiqwsg($oeucsuyqysaciasy, $mkucggyaiaukqoce, $cwwowqyuwccuykom)) {
                    if ($wocwawaaemuoqmig == self::CON_OR) {
                        $umuecysoywoumgwo = true;
                        goto sooecucuakgkuyis;
                    }
                } else {
                    if ($wocwawaaemuoqmig == self::CON_AND) {
                        $umuecysoywoumgwo = false;
                        goto sooecucuakgkuyis;
                    }
                }
                ywqakqkmmcoceqka:
            }
            sooecucuakgkuyis:
        }
        return $umuecysoywoumgwo;
    }
}
