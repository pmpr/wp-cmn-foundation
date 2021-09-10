<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613bb98fa102d             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\FormMaker\Admin\Type;

use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateHTML;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;

class Button extends Common
{
    
    public function render($aiowsaccomcoikus, $eqgoocgaqwqcimie, $kqokimuosyuyyucg, $mqyaskyaekmkegmg, $ymygiwwuwyuakysk)
    {
        echo $this->sywokgmoskcocqgy($aiowsaccomcoikus->args, $ymygiwwuwyuakysk);
    }
    
    public function sywokgmoskcocqgy($ywmkwiwkosakssii = [], $ymygiwwuwyuakysk = null) : string
    {
        $sqeykgyoooqysmca = $this->gueasuouwqysmomu();
        $wwgucssaecqekuek = $ymygiwwuwyuakysk->parse_args($sqeykgyoooqysmca, ['id' => $ymygiwwuwyuakysk->_id(), 'type' => 'button', 'name' => $ymygiwwuwyuakysk->_name(), 'class' => 'button button-' . ManipulateArray::get($ywmkwiwkosakssii, 'button', ''), 'element' => ManipulateArray::get($ywmkwiwkosakssii, 'element', 'button')]);
        $aiamqeawckcsuaou = ManipulateArray::get($ywmkwiwkosakssii, 'action');
        if ($aiamqeawckcsuaou) {
            $wwgucssaecqekuek['value'] = $aiamqeawckcsuaou;
            $wwgucssaecqekuek['name'] = 'pr-action';
            $wwgucssaecqekuek['type'] = 'submit';
        }
        $sqeykgyoooqysmca = ManipulateArray::get($ywmkwiwkosakssii, 'type');
        if ($sqeykgyoooqysmca === 'link') {
            $geecqyososceumsk = 'javascript:void(0);';
            if (isset($ywmkwiwkosakssii['link'])) {
                $geecqyososceumsk = $ywmkwiwkosakssii['link'];
            }
            $wwgucssaecqekuek['href'] = $geecqyososceumsk;
            if (isset($ywmkwiwkosakssii['target'])) {
                $wwgucssaecqekuek['target'] = $ywmkwiwkosakssii['target'];
            }
            $kqywgoqsmuswammk = 'a';
        } else {
            $kqywgoqsmuswammk = 'button';
        }
        $wkaqekwwgqsqwcoi = ManipulateArray::get($ywmkwiwkosakssii, 'icon', '');
        if ($wkaqekwwgqsqwcoi) {
            $wkaqekwwgqsqwcoi = ManipulateHTML::cuoygaaeqeqcuggu($wkaqekwwgqsqwcoi);
        }
        return sprintf('%s<%s %s>%s</%s>%s', $ymygiwwuwyuakysk->_desc(true), $kqywgoqsmuswammk, $ymygiwwuwyuakysk->concat_attrs($wwgucssaecqekuek), $wkaqekwwgqsqwcoi . (isset($ywmkwiwkosakssii['label']) && !empty($ywmkwiwkosakssii['label']) ? $ywmkwiwkosakssii['label'] : $ywmkwiwkosakssii['name']), $kqywgoqsmuswammk, $ywmkwiwkosakssii['message'] ?? ManipulateHTML::gmqyuaqwgiayskei('', ['id' => "{$ymygiwwuwyuakysk->_id()}_message", 'class' => 'message']));
    }
}
