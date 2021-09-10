<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b499786a1b             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\FormMaker\Admin\Type;

use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;

class MultiButton extends Button
{
    
    public function render($aiowsaccomcoikus, $eqgoocgaqwqcimie, $kqokimuosyuyyucg, $mqyaskyaekmkegmg, $ymygiwwuwyuakysk)
    {
        goto sywcgogayiwoguqo;
        sywcgogayiwoguqo:
        $qyukicweqoisimwg = ManipulateArray::get($aiowsaccomcoikus->args, "\142\x75\164\164\157\x6e\163", []);
        goto yiycscagsqscmoec;
        yiycscagsqscmoec:
        if (!(is_array($qyukicweqoisimwg) && $qyukicweqoisimwg)) {
            goto ksscsamsaakkuaek;
        }
        goto aqgcokuwcsyieseo;
        iakwuqcuyuyqisme:
        foreach ($qyukicweqoisimwg as $gskauacumcmekigs) {
            echo $this->sywokgmoskcocqgy($gskauacumcmekigs, $ymygiwwuwyuakysk);
            meyuecuukqqaagoy:
        }
        goto meiikgkcswuuayug;
        wcsasgasgaoeiucc:
        ksscsamsaakkuaek:
        goto iegeckgokmkasqai;
        aqgcokuwcsyieseo:
        echo $ymygiwwuwyuakysk->_desc(true);
        goto iakwuqcuyuyqisme;
        meiikgkcswuuayug:
        kgmmusocuywcamkm:
        goto wcsasgasgaoeiucc;
        iegeckgokmkasqai:
    }
}
