<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613bb98fa102d             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Media;

use Pmpr\Common\Foundation\Decorator\DecoratorOption;
use WP_Image_Editor_GD;
require_once ABSPATH . WPINC . "/class-wp-image-editor.php";
require_once ABSPATH . WPINC . "/class-wp-image-editor-gd.php";

class Editor extends WP_Image_Editor_GD
{
    const TOLERANCE = 0.01;
    const MIN_WIDTH_16_9 = 1200;
    const MIN_HEIGHT_16_9 = 675;
    const MIN_WIDTH_4_3 = 1200;
    const MIN_HEIGHT_4_3 = 900;
    const MIN_WIDTH_1_1 = 1200;
    const MIN_HEIGHT_1_1 = 1200;
    
    public function generate_filename($yuwymayicwwqiske = null, $dest_path = null, $uwumuuykwookaauo = null)
    {
        
        if (!$yuwymayicwwqiske) {
            $yuwymayicwwqiske = $this->get_suffix();
        }
        $prefix_array = explode('x', $yuwymayicwwqiske);
        $mwweeceqggqmogwk = '';
        if (1 == DecoratorOption::get(Image::ASPECT_RATION_URLS) && 2 == sizeof($prefix_array) && !empty($prefix_array[1])) {
            $prefix_array[0] = (int) $prefix_array[0];
            $prefix_array[1] = (int) $prefix_array[1];
            if (self::TOLERANCE >= abs($prefix_array[0] / $prefix_array[1] - 16 / 9)) {
                if (self::MIN_WIDTH_16_9 <= $prefix_array[0] && self::MIN_HEIGHT_16_9 <= $prefix_array[1]) {
                    $mwweeceqggqmogwk = '16x9';
                }
            } elseif (self::TOLERANCE >= abs($prefix_array[0] / $prefix_array[1] - 4 / 3)) {
                if (self::MIN_WIDTH_4_3 <= $prefix_array[0] && self::MIN_HEIGHT_4_3 <= $prefix_array[1]) {
                    $mwweeceqggqmogwk = '4x3';
                }
            } elseif (self::TOLERANCE >= abs($prefix_array[0] / $prefix_array[1] - 1)) {
                if (self::MIN_WIDTH_1_1 <= $prefix_array[0] && self::MIN_HEIGHT_1_1 <= $prefix_array[1]) {
                    $mwweeceqggqmogwk = '1x1';
                }
            }
        }
        
        $yyimiwcuegayoskq = pathinfo($this->file);
        $miawkwqioaeasiig = $yyimiwcuegayoskq['dirname'];
        $yucgcsieomwqgwws = $yyimiwcuegayoskq['extension'];
        
        $ymqmyyeuycgmigyo = wp_basename($this->file, ".{$yucgcsieomwqgwws}");
        
        $new_ext = strtolower($uwumuuykwookaauo ? $uwumuuykwookaauo : $yucgcsieomwqgwws);
        
        if (!is_null($dest_path) && ($_dest_path = realpath($dest_path))) {
            $miawkwqioaeasiig = $_dest_path;
        }
        if ('' != $mwweeceqggqmogwk) {
            
            return trailingslashit($miawkwqioaeasiig) . "{$mwweeceqggqmogwk}/{$ymqmyyeuycgmigyo}.{$new_ext}";
        } else {
            
            $scqcgogsiaiksiiq = $this->get_suffix();
            
            return trailingslashit($miawkwqioaeasiig) . "{$ymqmyyeuycgmigyo}-{$scqcgogsiaiksiiq}.{$new_ext}";
        }
    }
}
