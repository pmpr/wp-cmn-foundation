<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613bb98fa102d             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Manipulate\Theme;

use Pmpr\Common\Foundation\Decorator\DecoratorHook;
use Pmpr\Common\Foundation\Manipulate\ManipulateFormat;
use Pmpr\Common\Foundation\Manipulate\ManipulateHook;
use Pmpr\Common\Foundation\Manipulate\ManipulateValidation;
use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTerm;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;

class ManipulateMenu extends Common
{
    
    public static function wswaymeswqkeokco($ewuukoycimkekouc)
    {
        $qyyeoyuaqwwmysuu = get_nav_menu_locations();
        $igscmsiuisqaqwkk = null;
        $ewuukoycimkekouc = ManipulateTerm::mwikyscisascoeea($ewuukoycimkekouc);
        if (in_array($ewuukoycimkekouc, $qyyeoyuaqwwmysuu)) {
            $igscmsiuisqaqwkk = array_search($ewuukoycimkekouc, $qyyeoyuaqwwmysuu);
        }
        return $igscmsiuisqaqwkk;
    }
    
    public static function aemwscceysomkuea($ywmkwiwkosakssii = [])
    {
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ['parent_slug' => '', 'page_title' => '', 'menu_title' => '', 'capability' => 'manage_options', 'function' => '', 'menu_slug' => '', 'icon_url' => '', 'position' => 50]);
        $ywmkwiwkosakssii = array_filter($ywmkwiwkosakssii);
        $eogowigeyucaauig = ManipulateArray::get($ywmkwiwkosakssii, 'capability', '');
        $wgaiuiysuegayseo = ManipulateArray::get($ywmkwiwkosakssii, 'parent_slug', '');
        $cmyoswawcimsecyy = ManipulateArray::get($ywmkwiwkosakssii, 'page_title', '');
        $kuysccmeoqgaiumc = ManipulateArray::get($ywmkwiwkosakssii, 'menu_title', $cmyoswawcimsecyy);
        $eomymqcmcwieomke = ManipulateArray::get($ywmkwiwkosakssii, 'menu_slug', '');
        $akemggqscawwikim = ManipulateArray::get($ywmkwiwkosakssii, 'function', null);
        $kuuiuigeacouwmaa = ManipulateArray::get($ywmkwiwkosakssii, 'position', 0);
        $kisaucuwwaaiwuqe = ManipulateArray::get($ywmkwiwkosakssii, 'icon_url', '');
        if ($kisaucuwwaaiwuqe && !ManipulateValidation::wmcwegoisyeeosqu($kisaucuwwaaiwuqe) && strpos($kisaucuwwaaiwuqe, 'dashicons-') === false) {
            $kisaucuwwaaiwuqe = DecoratorHook::sscegwueamckwmcy(ManipulateHook::ygyygikyocoymgaw('icon_svg2base64'), $kisaucuwwaaiwuqe);
        }
        if ($wgaiuiysuegayseo) {
            $iaakskwmyqceoscy = self::wessoumqogciwogg($wgaiuiysuegayseo, $cmyoswawcimsecyy, $kuysccmeoqgaiumc, $eogowigeyucaauig, $eomymqcmcwieomke, $akemggqscawwikim, $kuuiuigeacouwmaa);
            parse_str("page={$eomymqcmcwieomke}", $uoomaookgsyciacm);
        } else {
            $iaakskwmyqceoscy = self::iyaokukyeukqokqe($cmyoswawcimsecyy, $kuysccmeoqgaiumc, $eogowigeyucaauig, $eomymqcmcwieomke, $akemggqscawwikim, $kisaucuwwaaiwuqe, $kuuiuigeacouwmaa);
            DecoratorHook::qcsmikeggeemccuu('admin_head', function () use($eomymqcmcwieomke, $akemggqscawwikim) {
                if (!$akemggqscawwikim) {
                    self::koskoowkikggmmgy($eomymqcmcwieomke, $eomymqcmcwieomke);
                }
            }, 99);
        }
        return $iaakskwmyqceoscy;
    }
    
    public static function koskoowkikggmmgy(string $aaokuekaimigoyue, string $ccwmwwqcgekcskqa = null)
    {
        if ($ccwmwwqcgekcskqa) {
            $qcgkuqesqqymcuui = remove_submenu_page($aaokuekaimigoyue, $ccwmwwqcgekcskqa);
        } else {
            $qcgkuqesqqymcuui = remove_menu_page($aaokuekaimigoyue);
        }
        return $qcgkuqesqqymcuui;
    }
    
    public static function iyaokukyeukqokqe($cmyoswawcimsecyy, $kuysccmeoqgaiumc, $eogowigeyucaauig, $eomymqcmcwieomke, $akemggqscawwikim = '', $oeggggyoyacueimi = '', $kuuiuigeacouwmaa = null)
    {
        return add_menu_page($cmyoswawcimsecyy, $kuysccmeoqgaiumc, $eogowigeyucaauig, $eomymqcmcwieomke, $akemggqscawwikim, $oeggggyoyacueimi, $kuuiuigeacouwmaa);
    }
    
    public static function wessoumqogciwogg($wgaiuiysuegayseo, $cmyoswawcimsecyy, $kuysccmeoqgaiumc, $eogowigeyucaauig, $eomymqcmcwieomke, $akemggqscawwikim = '', $kuuiuigeacouwmaa = null) : string
    {
        return add_submenu_page($wgaiuiysuegayseo, $cmyoswawcimsecyy, $kuysccmeoqgaiumc, $eogowigeyucaauig, $eomymqcmcwieomke, $akemggqscawwikim, $kuuiuigeacouwmaa);
    }
}
