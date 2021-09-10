<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613bb98fa102d             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\FormMaker\Admin\Type;

use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;

class Display extends Common
{
    
    public function render($aiowsaccomcoikus, $eqgoocgaqwqcimie, $kqokimuosyuyyucg, $mqyaskyaekmkegmg, $ymygiwwuwyuakysk)
    {
        $eqgoocgaqwqcimie = ManipulateArray::get($aiowsaccomcoikus->args, 'value', $eqgoocgaqwqcimie);
        
        $wwgucssaecqekuek = $ymygiwwuwyuakysk->parse_args($this->gueasuouwqysmomu(), ['class' => $aiowsaccomcoikus->args['classes'], 'name' => $ymygiwwuwyuakysk->_name(), 'id' => $ymygiwwuwyuakysk->_id()]);
        echo sprintf('<div%s>%s</div>%s', $ymygiwwuwyuakysk->concat_attrs($wwgucssaecqekuek), $eqgoocgaqwqcimie, $ymygiwwuwyuakysk->_desc(true));
    }
}
