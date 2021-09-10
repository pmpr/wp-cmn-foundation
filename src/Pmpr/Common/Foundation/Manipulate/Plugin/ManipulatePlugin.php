<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b5973b89a9             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Manipulate\Plugin;

use Pmpr\Common\Foundation\Decorator\DecoratorOption;
use Pmpr\Common\Foundation\Decorator\DecoratorPlugin;
use Pmpr\Common\Foundation\Manipulate\ManipulateFormat;
use WP_Requirements_Check;

class ManipulatePlugin extends Common
{
    
    public static function yicegakcoioyuwos() : array
    {
        return (array) DecoratorOption::get("\141\143\x74\x69\x76\145\137\x70\x6c\x75\147\151\156\x73", []);
    }
    
    public static function ggocakcisguuokai(?string $mkysicwccoeicumg) : bool
    {
        return DecoratorPlugin::ggocakcisguuokai($mkysicwccoeicumg) || self::sioyqaykmwwugmgi($mkysicwccoeicumg);
    }
    
    public static function sskmceyamwugkaii($ywmkwiwkosakssii = []) : bool
    {
        goto gaoycoykycqicwaq;
        eoieikyaiucwwwas:
        $gioggcykgoikcwiy = new WP_Requirements_Check($ywmkwiwkosakssii);
        goto oeooskowyaoiesig;
        gaoycoykycqicwaq:
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\x70\150\x70" => "\x37\x2e\64", "\167\160" => "\65\x2e\x32"]);
        goto eoieikyaiucwwwas;
        oeooskowyaoiesig:
        return $gioggcykgoikcwiy->uysacksscoseuguc();
        goto awkycquykaigeoms;
        awkycquykaigeoms:
    }
    
    public static function sioyqaykmwwugmgi(?string $mkysicwccoeicumg) : bool
    {
        goto makoqausqoiwyouc;
        skgguaeyousyogee:
        $mseykiqqcmyesccu = DecoratorOption::kuaqqosyyoqiueym("\x61\143\164\151\166\145\x5f\x73\x69\x74\x65\167\x69\144\x65\x5f\160\154\165\147\x69\156\163");
        goto gqqmmososkagcqco;
        wuogwyququiiecaa:
        return $ggocakcisguuokai;
        goto scqwymaqqacaugqa;
        asoqwsaqqyuoioac:
        oioygkocoumymyqa:
        goto wuogwyququiiecaa;
        gqqmmososkagcqco:
        $ggocakcisguuokai = isset($mseykiqqcmyesccu[$mkysicwccoeicumg]);
        goto asoqwsaqqyuoioac;
        makoqausqoiwyouc:
        $ggocakcisguuokai = false;
        goto ocgyqmccaskoieei;
        ocgyqmccaskoieei:
        if (!is_multisite()) {
            goto oioygkocoumymyqa;
        }
        goto skgguaeyousyogee;
        scqwymaqqacaugqa:
    }
}
