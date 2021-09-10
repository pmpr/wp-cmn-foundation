<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613bb98fa102d             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\FormMaker\Admin;

use Pmpr\Common\Foundation\Manipulate\ManipulateAsset;
use Pmpr\Common\Foundation\Manipulate\ManipulateFile;
use Pmpr\Common\Foundation\Manipulate\ManipulateSetting;
use Pmpr\Common\Foundation\Manipulate\ManipulateValidation;
use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateHTML;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;

class CMB2 extends Common
{
    public function wigskegsqequoeks()
    {
        $this->qcsmikeggeemccuu('cmb2_after_group_rows', [$this, 'wgskaqayecicmsgi'])->qcsmikeggeemccuu('cmb2_before_group_rows', [$this, 'yqmceeqwiyggkkso'])->qcsmikeggeemccuu('cmb2_after_group_row_fields', [$this, 'pwqumygamucskggk'])->qcsmikeggeemccuu('cmb2_before_group_row_fields', [$this, 'iicmygqmususcuyc'])->qcsmikeggeemccuu('cmb2_after_form', [$this, 'umawqkgmmckyygyk'], 10, 4)->qcsmikeggeemccuu('cmb2_before_form', [$this, 'muaowgssocuyksym'], 10, 4);
        parent::wigskegsqequoeks();
    }
    public function kgquecmsgcouyaya()
    {
        $this->cecaguuoecmccuse('cmb2_meta_box_url', [$this, 'ockocugyaieycimk'])->cecaguuoecmccuse($this->ygyygikyocoymgaw('symlink_paths'), [$this, 'kueggmaugugsmgss'])->cecaguuoecmccuse('cmb2_override_meta_value', [$this, 'agucyisikcsmeeug'], 10, 4);
        parent::kgquecmsgcouyaya();
    }
    
    public function agucyisikcsmeeug($eqgoocgaqwqcimie, $aokagokqyuysuksm, $mmeioagwmyscwumo, $aiowsaccomcoikus)
    {
        if ($aiowsaccomcoikus && isset($aiowsaccomcoikus->args['value']) && $aiowsaccomcoikus->args['value']) {
            $eqgoocgaqwqcimie = $aiowsaccomcoikus->args['value'];
        }
        $qqswgiawgeaeoecu = (array) ManipulateArray::get($aiowsaccomcoikus->group, 'value', []);
        if ($qqswgiawgeaeoecu && 'cmb2_field_no_override_val' === $eqgoocgaqwqcimie) {
            $eqgoocgaqwqcimie = $qqswgiawgeaeoecu;
        }
        return $eqgoocgaqwqcimie;
    }
    
    public function ockocugyaieycimk($uciwwqcgyeqmcyec)
    {
        if (!ManipulateSetting::cmaecekuqkwmemms('DONT_UPDATE_BOX_URL') && !ManipulateValidation::wmcwegoisyeeosqu($uciwwqcgyeqmcyec)) {
            $uciwwqcgyeqmcyec = $this->cyecicwkmmoqaomw($uciwwqcgyeqmcyec, $this->cmewgsgomuwkkoou());
            if (!ManipulateValidation::wmcwegoisyeeosqu($uciwwqcgyeqmcyec)) {
                $uciwwqcgyeqmcyec = $this->cyecicwkmmoqaomw($uciwwqcgyeqmcyec, ManipulateFile::cmaecekuqkwmemms(self::BASE__ROOT__PATH));
            }
            if ($ukwaqgesyueoiswk = $this->miocmcoykayoyyau()->omywegoesmqwcmss()) {
                $uciwwqcgyeqmcyec .= "{$ukwaqgesyueoiswk}/";
            }
        }
        return $uciwwqcgyeqmcyec;
    }
    
    public function cyecicwkmmoqaomw($uciwwqcgyeqmcyec, $couygeouymagssgw) : string
    {
        return trailingslashit(str_replace("{$couygeouymagssgw}/vendor/narmafzam", $this->miocmcoykayoyyau()->mkwomgueyaaooyye(), $uciwwqcgyeqmcyec));
    }
    
    public function kueggmaugugsmgss($oegoegssokkyiqam)
    {
        ManipulateSetting::wwckmeoskuagomki('DONT_UPDATE_BOX_URL', 1);
        $oegoegssokkyiqam['cmb2'] = ['css' => ManipulateAsset::omgkgiasggyoyiew('css'), 'js' => ManipulateAsset::omgkgiasggyoyiew('js')];
        return $oegoegssokkyiqam;
    }
    public function yqmceeqwiyggkkso()
    {
        echo '<div class="row mx-0 w-100">';
    }
    public function wgskaqayecicmsgi()
    {
        echo "</div>";
    }
    public function iicmygqmususcuyc()
    {
        echo '<div class="mx-2 cmb2-group-container">';
    }
    public function pwqumygamucskggk()
    {
        echo "</div>";
    }
    
    public function swewemuwgoyasmam($ikgwqyuyckaewsow) : string
    {
        return ManipulateHTML::uuccukgasskgimsq('div', ['class' => 'row'], $ikgwqyuyckaewsow);
    }
    
    public function muaowgssocuyksym($sogsqsawoyqmqsqu, $kqokimuosyuyyucg, $sqeykgyoooqysmca, $scegeeyqweaksmki)
    {
        if ($this->myomgmiksogoikuc($scegeeyqweaksmki)) {
            $sgssayiyusuaawmm = $this->oqmggeywwyoaocca($scegeeyqweaksmki, 'vertical_tabs');
            ManipulateHTML::awwqwouuoioauoaw('div', ['class' => 'pr-tabs-wrap pr-tabs-' . ($sgssayiyusuaawmm ? 'vertical' : 'horizontal')]);
            echo $this->iuygowkemiiwqmiw('tabs', ['tabs' => $this->oqmggeywwyoaocca($scegeeyqweaksmki, 'tabs'), 'cmb_id' => $sogsqsawoyqmqsqu]);
        }
    }
    
    public function umawqkgmmckyygyk($sogsqsawoyqmqsqu, $kqokimuosyuyyucg, $sqeykgyoooqysmca, $scegeeyqweaksmki)
    {
        if ($this->myomgmiksogoikuc($scegeeyqweaksmki)) {
            echo '</div>';
        }
    }
    
    public function myomgmiksogoikuc($scegeeyqweaksmki) : bool
    {
        $ywoucyskcquysiwc = $this->oqmggeywwyoaocca($scegeeyqweaksmki, 'tabs');
        return $ywoucyskcquysiwc && is_array($ywoucyskcquysiwc);
    }
}
