<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613bb98fa102d             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\FormMaker\Admin\Field;

use Pmpr\Common\Foundation\Decorator\DecoratorAsset;
use Pmpr\Common\Foundation\Decorator\DecoratorHook;

class Colorpicker extends OptionAwareField
{
    
    public function __construct(?string $aokagokqyuysuksm, ?string $ymqmyyeuycgmigyo = null, ?string $mkqqqewsokcswckc = null)
    {
        parent::__construct('colorpicker', $aokagokqyuysuksm, $ymqmyyeuycgmigyo, $mkqqqewsokcswckc);
        $this->kesomeowemmyygey('alpha', true)->qigsyyqgewgskemg('color-picker')->igmaewykumgwoaoy('data-colorpicker', '');
        DecoratorHook::qcsmikeggeemccuu('admin_footer', [$this, 'enqueue'], 9999);
    }
    public function enqueue()
    {
        DecoratorAsset::imsomwwswyoquoqk('wp-color-picker');
        DecoratorAsset::imsomwwswyoquoqk('wp-color-picker-alpha');
    }
}
