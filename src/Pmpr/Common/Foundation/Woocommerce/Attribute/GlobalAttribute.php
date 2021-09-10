<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613bb98fa102d             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Woocommerce\Attribute;

use Pmpr\Common\Foundation\FormMaker\Admin\Element\MetaBox;
use Pmpr\Common\Foundation\FormMaker\Admin\Field\Field;
use Pmpr\Common\Foundation\Manipulate\ManipulateServer;
use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTerm;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;

class GlobalAttribute extends BaseAttribute
{
    const VALUE_TYPE = self::VALUE . '_type';
    
    protected ?Model $model = null;
    
    public function __construct()
    {
        $this->name = 'global';
        $this->model = Model::symcgieuakksimmu();
        parent::__construct();
    }
    public function wigskegsqequoeks()
    {
        $this->qcsmikeggeemccuu('plugins_loaded', [$this, 'icwcgmcoimqeigye'])->qcsmikeggeemccuu('woocommerce_attribute_updated', [$this, 'save'])->qcsmikeggeemccuu('woocommerce_after_add_attribute_fields', [$this, 'iiscqcwaiceokoyu'])->qcsmikeggeemccuu('woocommerce_after_edit_attribute_fields', [$this, 'ggcygaycmccceswo']);
        parent::wigskegsqequoeks();
    }
    public function kgquecmsgcouyaya()
    {
        $this->cecaguuoecmccuse('woocommerce_attribute_taxonomies', [$this, 'gsckqysokumkwqsq']);
        parent::kgquecmsgcouyaya();
    }
    public function icwcgmcoimqeigye()
    {
        $iggakkcyoeakgcmq = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw('woocommerce_attribute_taxonomies_value_types'), [self::DATE => __('Date', PR__CMN__FOUNDATION), self::NUMBER => __('Number', PR__CMN__FOUNDATION)]);
        $this->mkksewyosgeumwsa(MetaBox::ckuwucygcwsiawms(self::VALUE_TYPE, __('Value type', PR__CMN__FOUNDATION), $iggakkcyoeakgcmq)->ccmwycqioaicegoc(__('Type of values', PR__CMN__FOUNDATION)));
    }
    
    public function gsckqysokumkwqsq($oammesyieqmwuwyi)
    {
        $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy();
        if (is_array($oammesyieqmwuwyi)) {
            foreach ($oammesyieqmwuwyi as $momcykaoccoymeig => $igqsaukqcqscimok) {
                $mqeiemgcoiugcyuc = ManipulateArray::get($igqsaukqcqscimok, 'attribute_id');
                if ($mqeiemgcoiugcyuc) {
                    foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) {
                        $qiuwqmysqigceouo = $aiowsaccomcoikus->mwikyscisascoeea();
                        $igqsaukqcqscimok = ManipulateArray::set($igqsaukqcqscimok, [$qiuwqmysqigceouo => $this->qooeaookuemoqecm($qiuwqmysqigceouo, $mqeiemgcoiugcyuc)]);
                        wcugqegqsuuuwqao:
                    }
                    iwsuawwqomaowuii:
                }
                $oammesyieqmwuwyi[$momcykaoccoymeig] = $igqsaukqcqscimok;
                qoqskyuuwueqkquk:
            }
            wagqgeqymeqoeuyi:
        }
        return $oammesyieqmwuwyi;
    }
    
    public function mgogaykgkoogasim() : ?Model
    {
        return $this->model;
    }
    
    public function uqsmmauywmsuqais($ymkomoccmymcoiea) : ?string
    {
        return $ymkomoccmymcoiea->get_id();
    }
    
    public function save($aokagokqyuysuksm)
    {
        foreach ($this->ugmceccgwaaaigiy() as $aiowsaccomcoikus) {
            if ($aiowsaccomcoikus instanceof Field && $aiowsaccomcoikus->mwikyscisascoeea()) {
                $ymqmyyeuycgmigyo = $aiowsaccomcoikus->mwikyscisascoeea();
                $eqgoocgaqwqcimie = ManipulateServer::ayueggmoqeeukqmq($ymqmyyeuycgmigyo, '');
                $this->mgogaykgkoogasim()->aawsuyueaaimeqsm($aokagokqyuysuksm, $ymqmyyeuycgmigyo, $eqgoocgaqwqcimie);
            }
            ciykoyeioqgyaeqo:
        }
        asiqwuoswmigcaki:
    }
    
    public function qooeaookuemoqecm($qqgocisyeuuqmcwc, $ymkomoccmymcoiea)
    {
        return $this->mgogaykgkoogasim()->eukesgmuogimqwaa($ymkomoccmymcoiea, $qqgocisyeuuqmcwc);
    }
    public function iiscqcwaiceokoyu()
    {
        $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy();
        foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) {
            echo ManipulateTerm::qkauysqeioauswys($aiowsaccomcoikus);
            qgeugwymkkiacwoc:
        }
        mqicocmqegwukkwg:
    }
    public function ggcygaycmccceswo()
    {
        $wwgeaeqgacgwooqi = ManipulateServer::get('edit');
        if ($wwgeaeqgacgwooqi) {
            $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy();
            foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) {
                if ($aiowsaccomcoikus instanceof Field) {
                    $aiowsaccomcoikus->iygyugseyaqwywyg($this->qooeaookuemoqecm($aiowsaccomcoikus->mwikyscisascoeea(), $wwgeaeqgacgwooqi));
                    echo ManipulateTerm::qkauysqeioauswys($aiowsaccomcoikus, true);
                }
                ouamogymawucwswu:
            }
            emmsycooskoqmgeg:
        }
    }
}
