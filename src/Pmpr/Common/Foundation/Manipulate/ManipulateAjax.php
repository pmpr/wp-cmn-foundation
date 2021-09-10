<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613bb98fa102d             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Manipulate;

use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;

class ManipulateAjax extends Manipulate
{
    
    public static function mcgoysmkqsqooceq() : bool
    {
        $mcgoysmkqsqooceq = false;
        if (function_exists('wp_doing_ajax') && wp_doing_ajax()) {
            $mcgoysmkqsqooceq = true;
        } else {
            if (function_exists('is_ajax') && is_ajax()) {
                $mcgoysmkqsqooceq = true;
            } else {
                if (ManipulateArray::get($_SERVER, 'HTTP_X_REQUESTED_WITH') == 'XMLHttpRequest' || self::cmaecekuqkwmemms('DOING_AJAX')) {
                    $mcgoysmkqsqooceq = true;
                }
            }
        }
        return $mcgoysmkqsqooceq;
    }
    
    public static function oiucukewkckkwiqc() : ?string
    {
        return admin_url('admin-ajax.php');
    }
    
    public static function imkyucqsciqykkee($uamcoiueqaamsqma, $kigowwqauiumummw = true)
    {
        if ($kigowwqauiumummw) {
            wp_send_json_success($uamcoiueqaamsqma);
        } else {
            wp_send_json_error($uamcoiueqaamsqma);
        }
        return $uamcoiueqaamsqma;
    }
    
    public static function wqsmsuyggkkyyocc($aiamqeawckcsuaou, $seauiwyeoycowegg = 'nonce', $gqgoqaeswmcwagoi = false)
    {
        return check_ajax_referer($aiamqeawckcsuaou, $seauiwyeoycowegg, $gqgoqaeswmcwagoi);
    }
}
