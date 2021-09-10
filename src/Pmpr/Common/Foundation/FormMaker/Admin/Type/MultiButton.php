<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b6c65a2d22             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\FormMaker\Admin\Type;

use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;

class MultiButton extends Button
{
    
    public function render($aiowsaccomcoikus, $eqgoocgaqwqcimie, $kqokimuosyuyyucg, $mqyaskyaekmkegmg, $ymygiwwuwyuakysk)
    {
        goto sywcgogayiwoguqo;
        wcsasgasgaoeiucc:
        ksscsamsaakkuaek:
        goto iegeckgokmkasqai;
        aqgcokuwcsyieseo:
        echo $ymygiwwuwyuakysk->_desc(true);
        goto iakwuqcuyuyqisme;
        sywcgogayiwoguqo:
        $qyukicweqoisimwg = ManipulateArray::get($aiowsaccomcoikus->args, "\x62\165\x74\x74\157\x6e\163", []);
        goto yiycscagsqscmoec;
        iakwuqcuyuyqisme:
        foreach ($qyukicweqoisimwg as $gskauacumcmekigs) {
            echo $this->sywokgmoskcocqgy($gskauacumcmekigs, $ymygiwwuwyuakysk);
            meyuecuukqqaagoy:
        }
        goto meiikgkcswuuayug;
        yiycscagsqscmoec:
        if (!(is_array($qyukicweqoisimwg) && $qyukicweqoisimwg)) {
            goto ksscsamsaakkuaek;
        }
        goto aqgcokuwcsyieseo;
        meiikgkcswuuayug:
        kgmmusocuywcamkm:
        goto wcsasgasgaoeiucc;
        iegeckgokmkasqai:
    }
}
