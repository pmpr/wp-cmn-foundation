<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613bb98fa102d             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\FormMaker\Admin\Type;

use Pmpr\Common\Foundation\Manipulate\ManipulateFormat;
use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateHTML;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;
use CMB2_Type_Select;

abstract class Select extends Common
{
    public function wigskegsqequoeks()
    {
        $this->qcsmikeggeemccuu("cmb2_render_multi{$this->gueasuouwqysmomu()}", [$this, 'xouugcsmueogayuu'], 10, 5);
        parent::wigskegsqequoeks();
    }
    public function kgquecmsgcouyaya()
    {
        $this->cecaguuoecmccuse("cmb2_sanitize_multi{$this->gueasuouwqysmomu()}", [$this, 'yawucaasiwigywmo'], 10, 4)->cecaguuoecmccuse("cmb2_types_esc_multi{$this->gueasuouwqysmomu()}", [$this, 'syycewwkyosmwgmm'], 10, 3)->cecaguuoecmccuse('cmb2_repeat_table_row_types', [$this, 'ucqqqcciccieceis'], 10, 1);
        parent::kgquecmsgcouyaya();
    }
    
    public function yawucaasiwigywmo($gioggcykgoikcwiy, $meta_value, $object_id, $field_args)
    {
        if (!is_array($meta_value) || !$field_args['repeatable']) {
            return $gioggcykgoikcwiy;
        }
        foreach ($meta_value as $uusmaiomayssaecw => $uiymkeeaukcyqqik) {
            $meta_value[$uusmaiomayssaecw] = array_map('sanitize_text_field', $uiymkeeaukcyqqik);
            mysueeoswqgccmui:
        }
        aueaceeyommgkicu:
        return $meta_value;
    }
    
    public function syycewwkyosmwgmm($gioggcykgoikcwiy, $ugugimquukqwogge, $field_args)
    {
        if (!is_array($ugugimquukqwogge) || !$field_args['repeatable']) {
            return $gioggcykgoikcwiy;
        }
        foreach ($ugugimquukqwogge as $uusmaiomayssaecw => $uiymkeeaukcyqqik) {
            $ugugimquukqwogge[$uusmaiomayssaecw] = array_map('esc_attr', $uiymkeeaukcyqqik);
            ucuoeymyqeokgsya:
        }
        egmayaiikwsskgmy:
        return $ugugimquukqwogge;
    }
    
    public function render($aiowsaccomcoikus, $eqgoocgaqwqcimie, $kqokimuosyuyyucg, $mqyaskyaekmkegmg, $ymygiwwuwyuakysk)
    {
        $this->gksiugsggmoeqawm($this->gueasuouwqysmomu(), $ymygiwwuwyuakysk, $eqgoocgaqwqcimie);
    }
    
    public function xouugcsmueogayuu($aiowsaccomcoikus, $eqgoocgaqwqcimie, $kqokimuosyuyyucg, $mqyaskyaekmkegmg, $ymygiwwuwyuakysk)
    {
        $this->gksiugsggmoeqawm("multi{$this->gueasuouwqysmomu()}", $ymygiwwuwyuakysk, $eqgoocgaqwqcimie, ['name' => $ymygiwwuwyuakysk->_name() . '[]', 'multiple' => 'multiple']);
    }
    
    public function gksiugsggmoeqawm($ymqmyyeuycgmigyo, $ymygiwwuwyuakysk, $eqgoocgaqwqcimie, $ywmkwiwkosakssii = [])
    {
        $ymygiwwuwyuakysk->type = new CMB2_Type_Select($ymygiwwuwyuakysk);
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ['id' => $ymygiwwuwyuakysk->_id(), 'name' => $ymygiwwuwyuakysk->_name(), 'desc' => $ymygiwwuwyuakysk->_desc(true), 'class' => $this->geecegsgyyayeouq(), 'options' => $this->oosmqciwueygimmo((array) $ymygiwwuwyuakysk->field->options(), $eqgoocgaqwqcimie)]);
        $yiasugywggckywoa = $ymygiwwuwyuakysk->parse_args($ymqmyyeuycgmigyo, $ywmkwiwkosakssii);
        if (is_array($eqgoocgaqwqcimie)) {
            $eqgoocgaqwqcimie = json_encode($eqgoocgaqwqcimie);
        }
        $yiasugywggckywoa['data-values'] = $eqgoocgaqwqcimie;
        $wwgucssaecqekuek = $ymygiwwuwyuakysk->concat_attrs($yiasugywggckywoa, ['desc', 'options']);
        printf('<select%s>%s</select>%s', $wwgucssaecqekuek, $yiasugywggckywoa['options'], $yiasugywggckywoa['desc']);
    }
    
    public function oosmqciwueygimmo($qiouiwasaauyaaue, $ymmmmaiuoocagigk) : string
    {
        $yuukcswmsgcsigms = '';
        foreach ($qiouiwasaauyaaue as $eqgoocgaqwqcimie => $pkyyagewkiyckmwy) {
            $wwgucssaecqekuek = [];
            if (is_array($pkyyagewkiyckmwy)) {
                $meqocwsecsywiiqs = ManipulateArray::unset($pkyyagewkiyckmwy, 'label');
                $wwgucssaecqekuek = $pkyyagewkiyckmwy;
                $pkyyagewkiyckmwy = $meqocwsecsywiiqs;
            }
            $wwgucssaecqekuek['value'] = $eqgoocgaqwqcimie;
            if ($ymmmmaiuoocagigk === $eqgoocgaqwqcimie || is_array($ymmmmaiuoocagigk) && in_array($eqgoocgaqwqcimie, $ymmmmaiuoocagigk)) {
                $wwgucssaecqekuek[] = 'selected';
            }
            $yuukcswmsgcsigms .= ManipulateHTML::uuccukgasskgimsq('option', $wwgucssaecqekuek, $pkyyagewkiyckmwy);
            sguskaeaaqcagqgc:
        }
        yuuyikiacmmueosu:
        return $yuukcswmsgcsigms;
    }
    
    public function sksqyikucwoogkuc(array $uomewyckeuqoqocu, array $ugsswuekcqyycoaa) : array
    {
        $pgugkagcumkaqucc = [];
        foreach ($ugsswuekcqyycoaa as $uusmaiomayssaecw) {
            $omkysikckkcieckq = ManipulateArray::get($uomewyckeuqoqocu, $uusmaiomayssaecw);
            if ($omkysikckkcieckq) {
                $pgugkagcumkaqucc[$uusmaiomayssaecw] = $omkysikckkcieckq;
            }
            syuaummumssgwwee:
        }
        agkmiayuawacakau:
        return $pgugkagcumkaqucc + $uomewyckeuqoqocu;
    }
    
    public function ucqqqcciccieceis($gioggcykgoikcwiy)
    {
        $gioggcykgoikcwiy[] = "multi{$this->gueasuouwqysmomu()}";
        return $gioggcykgoikcwiy;
    }
    
    public abstract function geecegsgyyayeouq() : string;
}
