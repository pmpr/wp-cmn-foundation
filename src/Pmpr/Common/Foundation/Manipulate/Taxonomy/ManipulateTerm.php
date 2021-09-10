<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613bb98fa102d             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Manipulate\Taxonomy;

use Pmpr\Common\Foundation\Decorator\Taxonomy\DecoratorTaxonomy;
use Pmpr\Common\Foundation\Decorator\Taxonomy\DecoratorTerm;
use Pmpr\Common\Foundation\FormMaker\Admin\Field\Field;
use Pmpr\Common\Foundation\Manipulate\ManipulateFormat;
use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost;
use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateHTML;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;
use WP_Error;
use WP_Taxonomy;
use WP_Term;

class ManipulateTerm extends Common
{
    
    public static function owaokmsayecmasqu($iwewcwusemqaiggk)
    {
        $iwewcwusemqaiggk = self::get($iwewcwusemqaiggk);
        if (isset($iwewcwusemqaiggk->parent) && $iwewcwusemqaiggk->parent) {
            $omwmuycmeqcqokom = self::get($iwewcwusemqaiggk->parent);
            $iwewcwusemqaiggk = self::owaokmsayecmasqu($omwmuycmeqcqokom);
        }
        return $iwewcwusemqaiggk;
    }
    
    public static function qcgakseyaikigqco($iwewcwusemqaiggk = null) : string
    {
        return ManipulateArray::get(self::get($iwewcwusemqaiggk), 'name', '');
    }
    
    public static function qkauysqeioauswys($aiowsaccomcoikus, $wwgeaeqgacgwooqi = false) : string
    {
        $nsmgceoqaqogqmuw = '';
        if ($aiowsaccomcoikus instanceof Field) {
            $aiowsaccomcoikus->eqmqucasseomgsce(12)->usoqcyyugsuyiewc('w-md-95')->yqoekuewicqoescm('w-md-100');
            $pkyyagewkiyckmwy = $aiowsaccomcoikus->aakmagwggmkoiiyu();
            $aiowsaccomcoikus->usuqmwksoeaayaig('');
            $nsmgceoqaqogqmuw = $aiowsaccomcoikus->render(false);
            if ($wwgeaeqgacgwooqi) {
                $nsmgceoqaqogqmuw = ManipulateHTML::uuccukgasskgimsq('tr', ['class' => 'form-field'], [ManipulateHTML::uuccukgasskgimsq('th', ['scope' => 'row'], ManipulateHTML::uuccukgasskgimsq('label', ['for' => $aiowsaccomcoikus->mwikyscisascoeea()], $pkyyagewkiyckmwy)), ManipulateHTML::uuccukgasskgimsq('td', [], $nsmgceoqaqogqmuw)]);
            } else {
                $nsmgceoqaqogqmuw = ManipulateHTML::uuccukgasskgimsq('div', ['class' => 'form-field'], [ManipulateHTML::uuccukgasskgimsq('label', ['for' => $aiowsaccomcoikus->mwikyscisascoeea()], $pkyyagewkiyckmwy), $nsmgceoqaqogqmuw]);
            }
        }
        return $nsmgceoqaqogqmuw;
    }
    
    public static function giwmekimakcaawsq($iwewcwusemqaiggk, $uusmaiomayssaecw, $eqgoocgaqwqcimie)
    {
        return DecoratorTerm::giwmekimakcaawsq(self::mwikyscisascoeea($iwewcwusemqaiggk), $uusmaiomayssaecw, $eqgoocgaqwqcimie);
    }
    
    public static function mmoaikqueyiwcesm($iwewcwusemqaiggk, $ywmkwiwkosakssii = [])
    {
        $okcscwesammossuq = [];
        $iwewcwusemqaiggk = self::mwikyscisascoeea($iwewcwusemqaiggk);
        if ($iwewcwusemqaiggk) {
            $ywmkwiwkosakssii['parent'] = $iwewcwusemqaiggk;
            $okcscwesammossuq = self::ciugwooasaqcywas(self::yyoeeseewqmmyaee($iwewcwusemqaiggk), $ywmkwiwkosakssii);
        }
        return $okcscwesammossuq;
    }
    
    public static function ciugwooasaqcywas($kesssewsiegssiya, $ywmkwiwkosakssii = [])
    {
        if ($kesssewsiegssiya instanceof WP_Taxonomy) {
            $kesssewsiegssiya = ManipulateTaxonomy::aakmagwggmkoiiyu($kesssewsiegssiya);
        }
        $ywmkwiwkosakssii['taxonomy'] = $kesssewsiegssiya;
        $suuagcecoyuweoqk = DecoratorTerm::ciugwooasaqcywas($ywmkwiwkosakssii);
        if (!is_array($suuagcecoyuweoqk)) {
            $suuagcecoyuweoqk = [];
        }
        return $suuagcecoyuweoqk;
    }
    
    public static function qmgcisuuikgmqcsu($iwewcwusemqaiggk, $kesssewsiegssiya = '')
    {
        if (!$kesssewsiegssiya) {
            $kesssewsiegssiya = self::yyoeeseewqmmyaee($iwewcwusemqaiggk);
        }
        $kesssewsiegssiya = ManipulateTaxonomy::aakmagwggmkoiiyu($kesssewsiegssiya);
        $aqykuigiuwmmcieu = DecoratorTerm::qmgcisuuikgmqcsu($iwewcwusemqaiggk, $kesssewsiegssiya);
        if (!is_string($aqykuigiuwmmcieu) || is_wp_error($aqykuigiuwmmcieu)) {
            $aqykuigiuwmmcieu = '';
        }
        return $aqykuigiuwmmcieu;
    }
    
    public static function ksmqawcowkmegigw($iwewcwusemqaiggk, $uusmaiomayssaecw, $eqgoocgaqwqcimie, $swwmymiaiosiyqis = '')
    {
        return DecoratorTerm::ksmqawcowkmegigw(self::mwikyscisascoeea($iwewcwusemqaiggk), $uusmaiomayssaecw, $eqgoocgaqwqcimie, $swwmymiaiosiyqis);
    }
    
    public static function get($iwewcwusemqaiggk = null, $kesssewsiegssiya = '')
    {
        if (!$iwewcwusemqaiggk instanceof WP_Term) {
            $iwewcwusemqaiggk = DecoratorTerm::get($iwewcwusemqaiggk, $kesssewsiegssiya);
        }
        if (is_wp_error($iwewcwusemqaiggk)) {
            $iwewcwusemqaiggk = '';
        }
        return $iwewcwusemqaiggk;
    }
    
    public static function mwikyscisascoeea($iwewcwusemqaiggk = null, $cwwowqyuwccuykom = false)
    {
        if (!is_numeric($iwewcwusemqaiggk)) {
            if (!$iwewcwusemqaiggk && !$cwwowqyuwccuykom) {
                $iwewcwusemqaiggk = get_queried_object();
            }
            $iwewcwusemqaiggk = ManipulateArray::get($iwewcwusemqaiggk, 'term_id');
        }
        return $iwewcwusemqaiggk;
    }
    
    public static function smqukgcyacswysqa($iwewcwusemqaiggk, $uusmaiomayssaecw, $eqgoocgaqwqcimie = '')
    {
        return DecoratorTerm::smqukgcyacswysqa(self::mwikyscisascoeea($iwewcwusemqaiggk), $uusmaiomayssaecw, $eqgoocgaqwqcimie);
    }
    
    public static function yyoeeseewqmmyaee($iwewcwusemqaiggk, $awqscowmskeuymeu = false)
    {
        $kesssewsiegssiya = '';
        $iwewcwusemqaiggk = self::get($iwewcwusemqaiggk);
        if ($iwewcwusemqaiggk) {
            $kesssewsiegssiya = ManipulateArray::get($iwewcwusemqaiggk, 'taxonomy');
            if ($awqscowmskeuymeu) {
                $kesssewsiegssiya = ManipulateTaxonomy::imgymusqgccqsqqq($kesssewsiegssiya);
            }
        }
        return $kesssewsiegssiya;
    }
    
    public static function emcckouwaoassquc(?array $seyqqsmuaiegkeeq = [])
    {
        if (!$seyqqsmuaiegkeeq) {
            $seyqqsmuaiegkeeq = ManipulateTaxonomy::ciugwooasaqcywas(['public' => true, self::OUTPUT => self::NAMES, 'publicly_queryable' => true]);
        }
        return self::ciugwooasaqcywas($seyqqsmuaiegkeeq, ['fields' => 'ids', 'hide_empty' => true]);
    }
    
    public static function migkyseymeomymmy($kesssewsiegssiya = '', $iwewcwusemqaiggk = null)
    {
        $migkyseymeomymmy = false;
        if ($kesssewsiegssiya) {
            if (!$iwewcwusemqaiggk) {
                $iwewcwusemqaiggk = get_queried_object();
                if (!$iwewcwusemqaiggk instanceof WP_Term) {
                    $iwewcwusemqaiggk = '';
                }
            }
            $iwewcwusemqaiggk = self::mwikyscisascoeea($iwewcwusemqaiggk);
            if ($iwewcwusemqaiggk) {
                $migkyseymeomymmy = DecoratorTaxonomy::qmssqeyayicowkgy($kesssewsiegssiya, $iwewcwusemqaiggk);
            }
        }
        if (!$migkyseymeomymmy && $kesssewsiegssiya == 'category' && DecoratorTaxonomy::sgayqmgoigoseaoo($iwewcwusemqaiggk)) {
            $migkyseymeomymmy = true;
        }
        if ($migkyseymeomymmy) {
            return $iwewcwusemqaiggk;
        } else {
            return false;
        }
    }
    
    public static function igawqaomowicuayw($iwewcwusemqaiggk, $uusmaiomayssaecw = '', $cuyooiakswegosog = false)
    {
        return DecoratorTerm::igawqaomowicuayw(self::mwikyscisascoeea($iwewcwusemqaiggk), $uusmaiomayssaecw, $cuyooiakswegosog);
    }
    
    public static function yyykkcyiksewsoqy($iwewcwusemqaiggk, $kesssewsiegssiya = '', $sqeykgyoooqysmca = '')
    {
        if (!$kesssewsiegssiya) {
            $kesssewsiegssiya = self::yyoeeseewqmmyaee($iwewcwusemqaiggk);
        }
        return DecoratorTerm::yyykkcyiksewsoqy(self::mwikyscisascoeea($iwewcwusemqaiggk), $kesssewsiegssiya, $sqeykgyoooqysmca);
    }
    
    public static function igkcwemyysqkwuuy($meqocwsecsywiiqs, $kesssewsiegssiya, $yemgmmgogcwccuky = [])
    {
        $ywmkwiwkosakssii = ['order' => 'ASC', 'number' => 10, 'exclude' => $yemgmmgogcwccuky];
        if (strlen($meqocwsecsywiiqs) > 1) {
            $ywmkwiwkosakssii['name__like'] = $meqocwsecsywiiqs;
        }
        return self::ciugwooasaqcywas($kesssewsiegssiya, $ywmkwiwkosakssii);
    }
    
    public static function iyssgoiwgwygeacg($iwewcwusemqaiggk, $useksmwkuswkwcqg = 'post', $ywmkwiwkosakssii = []) : array
    {
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ['tax_query' => [['taxonomy' => self::yyoeeseewqmmyaee($iwewcwusemqaiggk), 'field' => 'term_id', 'terms' => self::mwikyscisascoeea($iwewcwusemqaiggk)]]]);
        return ManipulatePost::ciugwooasaqcywas($useksmwkuswkwcqg, $ywmkwiwkosakssii);
    }
    
    public static function qgisekcaywsmigga($kesssewsiegssiya, $gwiwsycaaqgwmewg, $aucgaecqisksougg = null, $yemgmmgogcwccuky = [])
    {
        $ywmkwiwkosakssii = ['number' => -1, 'exclude' => $yemgmmgogcwccuky, 'meta_query' => [['key' => $gwiwsycaaqgwmewg, 'eqgoocgaqwqcimie' => $aucgaecqisksougg]]];
        return self::ciugwooasaqcywas($kesssewsiegssiya, $ywmkwiwkosakssii);
    }
}
