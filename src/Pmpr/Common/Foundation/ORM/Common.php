<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613bb98fa102d             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\ORM;

use Pmpr\Common\Foundation\Container\Container;

class Common extends Container
{
    
    public function homgcsoocssgwgym($smgioooysaacyigy = [], $eouokigcckggaywy = null, $qmiqqoqeakyeuuuw = null) : ?array
    {
        if (!is_array($eouokigcckggaywy)) {
            $eouokigcckggaywy = [$eouokigcckggaywy, "{$eouokigcckggaywy}s"];
        }
        [$acasoawmkoksguqw, $qgmsmgywssakmiow] = $eouokigcckggaywy;
        $ggauoeuaesiymgee = ['edit_item' => 'edit_' . $acasoawmkoksguqw, 'read_item' => 'read_' . $acasoawmkoksguqw, 'delete_item' => 'delete_' . $acasoawmkoksguqw, 'delete_items' => 'delete_' . $qgmsmgywssakmiow, 'edit_items' => 'edit_' . $qgmsmgywssakmiow, 'edit_others_items' => 'edit_others_' . $qgmsmgywssakmiow, 'publish_items' => 'publish_' . $qgmsmgywssakmiow, 'read_private_items' => 'read_private_' . $qgmsmgywssakmiow];
        
        if ($qmiqqoqeakyeuuuw) {
            $ggmysogesocycwio = ['read' => 'read', 'delete_items' => 'delete_' . $qgmsmgywssakmiow, 'delete_private_items' => 'delete_private_' . $qgmsmgywssakmiow, 'delete_published_items' => 'delete_published_' . $qgmsmgywssakmiow, 'delete_others_items' => 'delete_others_' . $qgmsmgywssakmiow, 'edit_private_items' => 'edit_private_' . $qgmsmgywssakmiow, 'edit_published_items' => 'edit_published_' . $qgmsmgywssakmiow];
            $ggauoeuaesiymgee = array_merge($ggauoeuaesiymgee, $ggmysogesocycwio);
        }
        $smgioooysaacyigy = array_merge($ggauoeuaesiymgee, $smgioooysaacyigy);
        
        if (!isset($smgioooysaacyigy['create_items'])) {
            $smgioooysaacyigy['create_items'] = $smgioooysaacyigy['edit_items'];
        }
        
        if ($qmiqqoqeakyeuuuw) {
            global $metaCaps;
            foreach ($smgioooysaacyigy as $oaeyummsoqeweuce => $ugugagoguiycqeys) {
                if (in_array($oaeyummsoqeweuce, ['read_item', 'delete_item', 'edit_item'])) {
                    $metaCaps[$ugugagoguiycqeys] = $oaeyummsoqeweuce;
                }
                qiaqsassksqiuyae:
            }
            cecuyayqoioasumi:
        }
        return $smgioooysaacyigy;
    }
}
