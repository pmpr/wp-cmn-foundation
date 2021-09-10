<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b5973b89a9             |
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
        meiikgkcswuuayug:
        kgmmusocuywcamkm:
        goto wcsasgasgaoeiucc;
        yiycscagsqscmoec:
        if (!(is_array($qyukicweqoisimwg) && $qyukicweqoisimwg)) {
            goto ksscsamsaakkuaek;
        }
        goto aqgcokuwcsyieseo;
        sywcgogayiwoguqo:
        $qyukicweqoisimwg = ManipulateArray::get($aiowsaccomcoikus->args, "\x62\x75\x74\164\157\x6e\163", []);
        goto yiycscagsqscmoec;
        aqgcokuwcsyieseo:
        echo $ymygiwwuwyuakysk->_desc(true);
        goto iakwuqcuyuyqisme;
        iakwuqcuyuyqisme:
        foreach ($qyukicweqoisimwg as $gskauacumcmekigs) {
            echo $this->sywokgmoskcocqgy($gskauacumcmekigs, $ymygiwwuwyuakysk);
            meyuecuukqqaagoy:
        }
        goto meiikgkcswuuayug;
        iegeckgokmkasqai:
    }
}
