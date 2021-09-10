<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613bb98fa102d             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\FormMaker\Admin\Type;

use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;

class MultiButton extends Button
{
    
    public function render($aiowsaccomcoikus, $eqgoocgaqwqcimie, $kqokimuosyuyyucg, $mqyaskyaekmkegmg, $ymygiwwuwyuakysk)
    {
        $qyukicweqoisimwg = ManipulateArray::get($aiowsaccomcoikus->args, 'buttons', []);
        if (is_array($qyukicweqoisimwg) && $qyukicweqoisimwg) {
            echo $ymygiwwuwyuakysk->_desc(true);
            foreach ($qyukicweqoisimwg as $gskauacumcmekigs) {
                echo $this->sywokgmoskcocqgy($gskauacumcmekigs, $ymygiwwuwyuakysk);
                sqyokemumceysegy:
            }
            aiccyaswigkaycqk:
        }
    }
}
