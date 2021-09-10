<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613bb98fa102d             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\FormMaker\Admin\Type;

use Pmpr\Common\Foundation\Decorator\DecoratorSanitize;
use Pmpr\Common\Foundation\Manipulate\ManipulateFormat;

class Size extends Common
{
    
    public function render($aiowsaccomcoikus, $eqgoocgaqwqcimie, $kqokimuosyuyyucg, $mqyaskyaekmkegmg, $ymygiwwuwyuakysk)
    {
        $eqgoocgaqwqcimie = ManipulateFormat::omaawkkwwyesqwcc($eqgoocgaqwqcimie, ['width' => 100, 'height' => 100]);
        $wyicceigkekkkwgs = [$ymygiwwuwyuakysk->_id('_width') => ['label' => __('Max Width', PR__CMN__FOUNDATION), 'input' => $ymygiwwuwyuakysk->euueacigmgoqkimu(['name' => $ymygiwwuwyuakysk->_name('[width]'), 'id' => $ymygiwwuwyuakysk->_id('_width'), 'value' => $eqgoocgaqwqcimie['width'], 'desc' => '', 'type' => 'number', 'step' => 1, 'min' => 0, 'class' => 'small-text'])], $ymygiwwuwyuakysk->_id('_height') => ['label' => __('Max Height', PR__CMN__FOUNDATION), 'input' => $ymygiwwuwyuakysk->euueacigmgoqkimu(['name' => $ymygiwwuwyuakysk->_name('[height]'), 'id' => $ymygiwwuwyuakysk->_id('_height'), 'value' => $eqgoocgaqwqcimie['height'], 'desc' => '', 'type' => 'number', 'step' => 1, 'min' => 0, 'class' => 'small-text'])]];
        $this->iuygowkemiiwqmiw('size', ['eqgoocgaqwqcimie' => $eqgoocgaqwqcimie, 'wyicceigkekkkwgs' => $wyicceigkekkkwgs]);
    }
    
    public function yiiiqewsseywemqu($egomoiciasmiesww, $eqgoocgaqwqcimie)
    {
        if (is_array($eqgoocgaqwqcimie)) {
            foreach ($eqgoocgaqwqcimie as $uusmaiomayssaecw => $ogskakmksyuqsiwg) {
                $eqgoocgaqwqcimie[$uusmaiomayssaecw] = DecoratorSanitize::aoeoykwemwaqsikc($ogskakmksyuqsiwg);
                zayqqeqgcwkekwws:
            }
            oqousikwiiqagoyw:
            $egomoiciasmiesww = $eqgoocgaqwqcimie;
        }
        return parent::yiiiqewsseywemqu($egomoiciasmiesww, $eqgoocgaqwqcimie);
    }
}
