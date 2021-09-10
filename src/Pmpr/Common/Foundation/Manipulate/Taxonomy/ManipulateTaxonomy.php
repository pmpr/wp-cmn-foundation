<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613bb98fa102d             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Manipulate\Taxonomy;

use Pmpr\Common\Foundation\Decorator\Taxonomy\DecoratorTaxonomy;
use Pmpr\Common\Foundation\Manipulate\ManipulateFormat;
use Pmpr\Common\Foundation\Manipulate\ManipulateServer;
use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;
use WP_Post_Type;
use WP_Taxonomy;
use WP_Term;

class ManipulateTaxonomy extends Common
{
    
    public static function cekoogweeooasayu($kesssewsiegssiya) : bool
    {
        $kesssewsiegssiya = self::imgymusqgccqsqqq($kesssewsiegssiya);
        $cekoogweeooasayu = false;
        if ($kesssewsiegssiya) {
            $cekoogweeooasayu = $kesssewsiegssiya->public && $kesssewsiegssiya->publicly_queryable;
        }
        return $cekoogweeooasayu;
    }
    
    public static function uikgwcuascgeissw($kesssewsiegssiya, $pkyyagewkiyckmwy = 'singular_name')
    {
        $kesssewsiegssiya = self::imgymusqgccqsqqq($kesssewsiegssiya);
        $iwkyyocymeukcceu = ManipulateArray::get($kesssewsiegssiya, 'labels', []);
        return ManipulateArray::get($iwkyyocymeukcceu, $pkyyagewkiyckmwy);
    }
    
    public static function imgymusqgccqsqqq($kesssewsiegssiya)
    {
        if (!$kesssewsiegssiya instanceof WP_Taxonomy) {
            if ($kesssewsiegssiya instanceof WP_Term) {
                $kesssewsiegssiya = $kesssewsiegssiya->taxonomy;
            }
            $kesssewsiegssiya = DecoratorTaxonomy::get($kesssewsiegssiya);
            if (is_wp_error($kesssewsiegssiya)) {
                $kesssewsiegssiya = null;
            }
        }
        return $kesssewsiegssiya;
    }
    
    public static function myagyqumwekameww($kesssewsiegssiya)
    {
        $ymqmyyeuycgmigyo = self::aqcogscycyycgkuq($kesssewsiegssiya);
        return untrailingslashit(ManipulateServer::gmigwwwmwemyaayy()) . "/tax/{$ymqmyyeuycgmigyo}/";
    }
    
    public static function aakmagwggmkoiiyu($kesssewsiegssiya) : string
    {
        return (string) ManipulateArray::get($kesssewsiegssiya, 'name', $kesssewsiegssiya);
    }
    
    public static function aqcogscycyycgkuq($kesssewsiegssiya) : ?string
    {
        $kesssewsiegssiya = self::imgymusqgccqsqqq($kesssewsiegssiya);
        return ManipulateArray::qamwegcyimgcqksw($kesssewsiegssiya, 'rewrite.slug', self::aakmagwggmkoiiyu($kesssewsiegssiya));
    }
    
    public static function yesqcwicqyewqaco($kesssewsiegssiya) : bool
    {
        return ManipulateArray::get(self::imgymusqgccqsqqq($kesssewsiegssiya), 'single_value');
    }
    
    public static function aewcsqigycuaekym($kesssewsiegssiya) : bool
    {
        return DecoratorTaxonomy::aewcsqigycuaekym(self::aakmagwggmkoiiyu($kesssewsiegssiya));
    }
    
    public static function ackyeagsqcowcuos($awqscowmskeuymeu = true)
    {
        $kesssewsiegssiya = null;
        $aqmwamyiwgeeymqa = ManipulateServer::ekcymmyqoceukosc();
        if (preg_match('/\\/tax\\/([^\\/]+)\\/?/', $aqmwamyiwgeeymqa, $meyiiwcswqmuggyg)) {
            $ccamueccusigaaio = $meyiiwcswqmuggyg[1];
            if (DecoratorTaxonomy::myagqecycsaiyqsk($ccamueccusigaaio)) {
                $kesssewsiegssiya = $ccamueccusigaaio;
                if ($awqscowmskeuymeu) {
                    $kesssewsiegssiya = self::imgymusqgccqsqqq($kesssewsiegssiya);
                }
            }
        }
        return $kesssewsiegssiya;
    }
    
    public static function gscioiumssogceuc($kesssewsiegssiya, $aqykuigiuwmmcieu = self::OBJECT)
    {
        $useksmwkuswkwcqg = null;
        $kesssewsiegssiya = self::imgymusqgccqsqqq($kesssewsiegssiya);
        if ($kesssewsiegssiya) {
            $sciomagaqmgggsiu = $kesssewsiegssiya->object_type;
            if (is_array($sciomagaqmgggsiu) && isset($sciomagaqmgggsiu[0])) {
                $useksmwkuswkwcqg = $sciomagaqmgggsiu[0];
                if ($useksmwkuswkwcqg && $aqykuigiuwmmcieu == self::OBJECT) {
                    $useksmwkuswkwcqg = ManipulatePost::waaisqccqacqeium($useksmwkuswkwcqg);
                }
            }
        }
        return $useksmwkuswkwcqg;
    }
    
    public static function ciugwooasaqcywas($ywmkwiwkosakssii = []) : array
    {
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ['public' => true, self::OUTPUT => self::OBJECT]);
        $sogksuscggsicmac = $aqykuigiuwmmcieu = ManipulateArray::unset($ywmkwiwkosakssii, self::OUTPUT);
        if (!in_array($aqykuigiuwmmcieu, [self::OBJECT, self::NAMES])) {
            $aqykuigiuwmmcieu = self::OBJECT;
        }
        $seyqqsmuaiegkeeq = DecoratorTaxonomy::ciugwooasaqcywas($ywmkwiwkosakssii, $aqykuigiuwmmcieu);
        if ($sogksuscggsicmac == self::LABELS) {
            foreach ($seyqqsmuaiegkeeq as $uusmaiomayssaecw => $kesssewsiegssiya) {
                $seyqqsmuaiegkeeq[$uusmaiomayssaecw] = $kesssewsiegssiya->label;
                uaicwcqwauosmsqm:
            }
            cumeycwmuuqawwyu:
        }
        return $seyqqsmuaiegkeeq;
    }
}
