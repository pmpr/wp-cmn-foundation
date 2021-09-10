<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613bb98fa102d             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\FormMaker\Admin\Type;

use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;

class Html extends Common
{
    
    public function render($aiowsaccomcoikus, $eqgoocgaqwqcimie, $kqokimuosyuyyucg, $mqyaskyaekmkegmg, $ymygiwwuwyuakysk)
    {
        
        $wwgucssaecqekuek = $ymygiwwuwyuakysk->parse_args($this->gueasuouwqysmomu(), ['id' => $ymygiwwuwyuakysk->_id()]);
        $ekiuyucoiagmscgy = ManipulateArray::get($aiowsaccomcoikus->args, 'content_cb');
        if ($ekiuyucoiagmscgy) {
            $aiowsaccomcoikus->args['content'] = call_user_func_array($aiowsaccomcoikus->args['content_cb'], [$aiowsaccomcoikus, $kqokimuosyuyyucg, $mqyaskyaekmkegmg]);
        }
        echo sprintf('<div %s>%s</div>', $ymygiwwuwyuakysk->concat_attrs($wwgucssaecqekuek), ManipulateArray::get($aiowsaccomcoikus->args, 'content'));
    }
}
