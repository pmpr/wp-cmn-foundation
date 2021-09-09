<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613a1be32d755             |
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
        return (array) DecoratorOption::get("\x61\x63\x74\x69\166\145\137\x70\x6c\x75\x67\x69\x6e\x73", []);
    }
    
    public static function ggocakcisguuokai(?string $mkysicwccoeicumg) : bool
    {
        return DecoratorPlugin::ggocakcisguuokai($mkysicwccoeicumg) || self::sioyqaykmwwugmgi($mkysicwccoeicumg);
    }
    
    public static function sskmceyamwugkaii($ywmkwiwkosakssii = []) : bool
    {
        goto kogocyykgoassccw;
        kogocyykgoassccw:
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\x70\x68\160" => "\x37\x2e\x34", "\167\160" => "\x35\56\62"]);
        goto ukqyaweoikcegyco;
        ukqyaweoikcegyco:
        $gioggcykgoikcwiy = new WP_Requirements_Check($ywmkwiwkosakssii);
        goto cgqcuiaiciwumqyy;
        cgqcuiaiciwumqyy:
        return $gioggcykgoikcwiy->uysacksscoseuguc();
        goto essaksagsgmwyccs;
        essaksagsgmwyccs:
    }
    
    public static function sioyqaykmwwugmgi(?string $mkysicwccoeicumg) : bool
    {
        goto swiqeuyomyeicqea;
        mwskikiiuqwkeiqq:
        if (!is_multisite()) {
            goto meqcqssumqokgkqc;
        }
        goto aywemsgsqqwuwasc;
        swiqeuyomyeicqea:
        $ggocakcisguuokai = false;
        goto mwskikiiuqwkeiqq;
        mggewcywmuekqcaq:
        meqcqssumqokgkqc:
        goto iakeaakmeqkaioeg;
        mqueqquuggcakwcy:
        $ggocakcisguuokai = isset($mseykiqqcmyesccu[$mkysicwccoeicumg]);
        goto mggewcywmuekqcaq;
        aywemsgsqqwuwasc:
        $mseykiqqcmyesccu = DecoratorOption::kuaqqosyyoqiueym("\x61\143\x74\x69\x76\x65\137\163\x69\164\145\167\151\x64\x65\137\160\x6c\x75\x67\151\156\x73");
        goto mqueqquuggcakwcy;
        iakeaakmeqkaioeg:
        return $ggocakcisguuokai;
        goto eawkaqqqaeooyyws;
        eawkaqqqaeooyyws:
    }
}
