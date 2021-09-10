<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613bb98fa102d             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation;

use Pmpr\Common\Foundation\Container\Container;
use Pmpr\Common\Foundation\Convert\Type\ConvertArray;
use Pmpr\Common\Foundation\Decorator\Taxonomy\DecoratorTaxonomy;
use Pmpr\Common\Foundation\FormMaker\Admin\Element\MetaBox;
use Pmpr\Common\Foundation\Manipulate\ManipulateFormat;
use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost;
use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTaxonomy;
use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTerm;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;

class Taxonomy extends Container
{
    public function wigskegsqequoeks()
    {
        $this->qcsmikeggeemccuu('init', [$this, 'init'], 999);
        parent::wigskegsqequoeks();
    }
    public function kgquecmsgcouyaya()
    {
        $this->cecaguuoecmccuse('get_terms_args', [$this, 'sgkiyewcooggcmks'])->cecaguuoecmccuse('get_terms_orderby', [$this, 'kuoyiqiusseyeaea'], 10, 2);
        parent::kgquecmsgcouyaya();
    }
    public function init()
    {
        $this->modify();
    }
    public function modify()
    {
        $seyqqsmuaiegkeeq = ManipulateTaxonomy::ciugwooasaqcywas();
        $vewwuwosemqiwyaw = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw('taxonomy_single_value_modify_items'), []);
        foreach ($seyqqsmuaiegkeeq as $kesssewsiegssiya) {
            $ymqmyyeuycgmigyo = ManipulateTaxonomy::aakmagwggmkoiiyu($kesssewsiegssiya);
            if (in_array($ymqmyyeuycgmigyo, $vewwuwosemqiwyaw) || ManipulateArray::get($kesssewsiegssiya, 'single_value')) {
                $kesssewsiegssiya->single_value = true;
                $kesssewsiegssiya->meta_box_cb = [$this, 'ausymmgsksoqwuqk'];
            }
            $kesssewsiegssiya->meta_box_sanitize_cb = [$this, 'yiiiqewsseywemqu'];
            $kesssewsiegssiya->rewrite['hierarchical'] = false;
            DecoratorTaxonomy::register(substr($kesssewsiegssiya->name, 0, 32), $kesssewsiegssiya->object_type, (array) $kesssewsiegssiya);
            gqaimiooakyykccy:
        }
        mcucegiogmuyogki:
    }
    
    public function sgkiyewcooggcmks($ywmkwiwkosakssii)
    {
        if (is_admin()) {
            $ywmkwiwkosakssii[self::ORDERBY] = self::ID;
            return $ywmkwiwkosakssii;
        }
        return $ywmkwiwkosakssii;
    }
    
    public function yiiiqewsseywemqu($kesssewsiegssiya, $uyuaosigqymaqsaa)
    {
        if (is_array($uyuaosigqymaqsaa)) {
            $uyuaosigqymaqsaa = ConvertArray::comkeiiwgwaqmcwe($uyuaosigqymaqsaa);
        } elseif (is_string($uyuaosigqymaqsaa)) {
            $uyuaosigqymaqsaa = [intval($uyuaosigqymaqsaa)];
        }
        return $uyuaosigqymaqsaa;
    }
    
    public function ausymmgsksoqwuqk($post, $uoeiskamgscgeccq)
    {
        if (!isset($uoeiskamgscgeccq['args']) || !is_array($uoeiskamgscgeccq['args'])) {
            $ywmkwiwkosakssii = [];
        } else {
            $ywmkwiwkosakssii = $uoeiskamgscgeccq['args'];
        }
        extract(ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii), EXTR_SKIP);
        if (isset($kesssewsiegssiya)) {
            $ymqmyyeuycgmigyo = esc_attr($kesssewsiegssiya);
            $kesssewsiegssiya = ManipulateTaxonomy::imgymusqgccqsqqq($kesssewsiegssiya);
            $ymmmmaiuoocagigk = ManipulatePost::weescwwgqgiyumyw($post, $ymqmyyeuycgmigyo, ['fields' => self::IDS]);
            if (ManipulateArray::get($kesssewsiegssiya, 'single_value')) {
                $ymmmmaiuoocagigk = ManipulateArray::get($ymmmmaiuoocagigk, 0, null);
            }
            $augiookssyeuewki = MetaBox::ckuwucygcwsiawms("tax_input[{$ymqmyyeuycgmigyo}]")->yyayequseyasoyks()->oeewiaacscgyamai($ymqmyyeuycgmigyo)->qcgocuceocquqcuw('id', "tax_input_{$ymqmyyeuycgmigyo}")->iygyugseyaqwywyg($ymmmmaiuoocagigk)->usoqcyyugsuyiewc('border-box p-0')->yoimakcqmoqokkcu();
            if (!ManipulateArray::get($kesssewsiegssiya, 'single_value', false)) {
                $augiookssyeuewki->oikgogcweiiaocka();
            }
            $augiookssyeuewki = $augiookssyeuewki->render();
            $cowauqqkuseckgyy = ManipulateTerm::ciugwooasaqcywas($ymqmyyeuycgmigyo, ['include' => wp_popular_terms_checklist($ymqmyyeuycgmigyo, 0, 0, false)]);
            $cowauqqkuseckgyy = $this->iuygowkemiiwqmiw('meta_box_popular', ['data' => $cowauqqkuseckgyy, 'ymqmyyeuycgmigyo' => $ymqmyyeuycgmigyo]);
            echo $this->iuygowkemiiwqmiw('meta_box_single_value', ['list' => $augiookssyeuewki, 'popular' => $cowauqqkuseckgyy, 'taxonomy' => $kesssewsiegssiya, 'name' => $ymqmyyeuycgmigyo, 'post' => ManipulatePost::mwikyscisascoeea($post), 'args' => self::esqgqsacwywoakok($kesssewsiegssiya), 'empty_message' => __('There are not %s yet.', PR__CMN__FOUNDATION)]);
        }
    }
    
    public function kuoyiqiusseyeaea($sikaymiwcesagayc, $ywmkwiwkosakssii) : string
    {
        if (ManipulateArray::get($ywmkwiwkosakssii, 'orderby') == 'include') {
            $ooiewiwkegguusum = implode(',', array_map('absint', $ywmkwiwkosakssii['include']));
            $sikaymiwcesagayc = "FIELD(t.term_id, {$ooiewiwkegguusum})";
        }
        return $sikaymiwcesagayc;
    }
    
    public static function esqgqsacwywoakok($kesssewsiegssiya, $koaqeegoeiaiccse = true) : array
    {
        $kesssewsiegssiya = ManipulateTaxonomy::imgymusqgccqsqqq($kesssewsiegssiya);
        $ymqmyyeuycgmigyo = ManipulateTaxonomy::aakmagwggmkoiiyu($kesssewsiegssiya);
        return ['echo' => $koaqeegoeiaiccse, self::NAME => "new{$ymqmyyeuycgmigyo}_parent", self::ORDERBY => self::ID, self::TAXONOMY => $ymqmyyeuycgmigyo, 'hide_empty' => 0, 'hierarchical' => 1, 'show_option_none' => "&mdash; {$kesssewsiegssiya->labels->parent_item} &mdash;"];
    }
}
