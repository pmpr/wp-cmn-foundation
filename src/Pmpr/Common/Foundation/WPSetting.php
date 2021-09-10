<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613bb98fa102d             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation;

use Pmpr\Common\Foundation\Container\Container;
use Pmpr\Common\Foundation\Decorator\DecoratorOption;
use Pmpr\Common\Foundation\FormMaker\Admin\Element\MetaBox;
use Pmpr\Common\Foundation\Manipulate\ManipulateFormat;

class WPSetting extends Container
{
    public function wigskegsqequoeks()
    {
        $this->qcsmikeggeemccuu('admin_init', [$this, 'yeyiguyegmmyusea']);
        parent::wigskegsqequoeks();
    }
    public function yeyiguyegmmyusea()
    {
        $qeqooyuoiasweuck = $this->sscegwueamckwmcy('wordpress_settings_fields', []);
        foreach ($qeqooyuoiasweuck as $aokagokqyuysuksm => $amakmumgguksgmum) {
            $amakmumgguksgmum = ManipulateFormat::omaawkkwwyesqwcc($amakmumgguksgmum, ['section' => 'default', 'title' => '', 'group' => 'general', 'args' => []]);
            register_setting($amakmumgguksgmum['group'], $aokagokqyuysuksm);
            $amakmumgguksgmum['args']['id'] = $aokagokqyuysuksm;
            add_settings_field($aokagokqyuysuksm, $amakmumgguksgmum['title'], [$this, 'render'], $amakmumgguksgmum['group'], $amakmumgguksgmum['section'], $amakmumgguksgmum['args']);
            kosaqwikueyksqmw:
        }
        mqkmcysgoiaouiwm:
    }
    
    public function render($ywmkwiwkosakssii)
    {
        MetaBox::okmsgamiiemyesao(ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ['echo' => true]));
    }
    
    public static function eiwcuqigayigimak($uusmaiomayssaecw, $ggauoeuaesiymgee = false)
    {
        return DecoratorOption::get($uusmaiomayssaecw, $ggauoeuaesiymgee);
    }
}
