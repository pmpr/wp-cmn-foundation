<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613bb98fa102d             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Woocommerce\Attribute;

use Pmpr\Common\Foundation\Decorator\Plugin\DecoratorWoocommerce;
use Pmpr\Common\Foundation\FormMaker\Admin\Element\MetaBox;
use Pmpr\Common\Foundation\FormMaker\Admin\Field\Field;
use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTerm;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;

class Term extends Common
{
    const SHOW_ON_LIST = 'show-on-list';
    
    protected array $fields = [];
    
    protected $taxonomy = null;
    
    public function ugmceccgwaaaigiy() : array
    {
        return $this->fields;
    }
    
    public function mkksewyosgeumwsa(Field $aiowsaccomcoikus) : self
    {
        $this->fields[$aiowsaccomcoikus->mwikyscisascoeea()] = $aiowsaccomcoikus;
        return $this;
    }
    
    public function yyoeeseewqmmyaee()
    {
        return $this->taxonomy;
    }
    
    public function __construct($kesssewsiegssiya)
    {
        $this->taxonomy = $kesssewsiegssiya;
        if (ManipulateArray::get($kesssewsiegssiya, 'value_type') === self::DATE) {
            $this->mkksewyosgeumwsa(MetaBox::ckuwucygcwsiawms('date_type', __('Date Type', PR__CMN__FOUNDATION), [self::SECOND => __('Seconds', PR__CMN__FOUNDATION), self::MINUTE => __('Minutes', PR__CMN__FOUNDATION), self::HOUR => __('Minutes', PR__CMN__FOUNDATION), self::DAY => __('Days', PR__CMN__FOUNDATION), self::WEEK => __('Weeks', PR__CMN__FOUNDATION), self::MONTH => __('Months', PR__CMN__FOUNDATION), self::YEAR => __('Years', PR__CMN__FOUNDATION)])->qigsyyqgewgskemg(Term::SHOW_ON_LIST));
        }
        $this->mkksewyosgeumwsa(MetaBox::ymuegqgyuagyucws(self::VALUE, __('Value', PR__CMN__FOUNDATION))->escqqisecooswqgo(0)->qigsyyqgewgskemg(Term::SHOW_ON_LIST)->ccmwycqioaicegoc(__('If attribute is a number field, fill this field too.', PR__CMN__FOUNDATION)));
        $ikgwqyuyckaewsow = (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw('woocommerce_product_taxonomy_custom_fields'), $this->ugmceccgwaaaigiy());
        $this->fields = (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("woocommerce_product_taxonomy_{$this->kuaoscooeuayycye()}_custom_fields"), $ikgwqyuyckaewsow);
        parent::__construct();
    }
    public function wigskegsqequoeks()
    {
        $ymqmyyeuycgmigyo = $this->kuaoscooeuayycye();
        $this->qcsmikeggeemccuu('edit_term', [$this, 'oewywamoqeiigags'], 10, 3)->qcsmikeggeemccuu('created_term', [$this, 'oewywamoqeiigags'], 10, 3)->qcsmikeggeemccuu('delete_term', [$this, 'smgycasaqmgcaekq'], 5, 3)->qcsmikeggeemccuu("{$ymqmyyeuycgmigyo}_add_form_fields", [$this, 'add'])->qcsmikeggeemccuu("{$ymqmyyeuycgmigyo}_edit_form_fields", [$this, 'wwgeaeqgacgwooqi'])->qcsmikeggeemccuu("manage_{$ymqmyyeuycgmigyo}_custom_column", [$this, 'uoaoueswwwmiwwqs'], 10, 3);
        parent::wigskegsqequoeks();
    }
    public function kgquecmsgcouyaya()
    {
        $this->cecaguuoecmccuse("manage_edit-{$this->kuaoscooeuayycye()}_columns", [$this, 'eggecuuwykaawoqw']);
        parent::kgquecmsgcouyaya();
    }
    public function add()
    {
        $this->iuaucuookgoqiiio();
    }
    
    public function wwgeaeqgacgwooqi($iwewcwusemqaiggk)
    {
        $this->iuaucuookgoqiiio($iwewcwusemqaiggk);
    }
    
    public function kuaoscooeuayycye() : string
    {
        return DecoratorWoocommerce::scemgqiggsykoisk(ManipulateArray::get($this->yyoeeseewqmmyaee(), 'attribute_name'));
    }
    
    public function eggecuuwykaawoqw($wkkweuacukumqmya)
    {
        foreach ($this->ugmceccgwaaaigiy() as $aiowsaccomcoikus) {
            if ($aiowsaccomcoikus->aeiayqcuemyeackg(self::SHOW_ON_LIST)) {
                $wkkweuacukumqmya[$aiowsaccomcoikus->mwikyscisascoeea()] = $aiowsaccomcoikus->aakmagwggmkoiiyu();
            }
            owmuceyswmgueasi:
        }
        qmuwoecuacmkwgem:
        return $wkkweuacukumqmya;
    }
    
    public function iuaucuookgoqiiio($iwewcwusemqaiggk = false)
    {
        $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy();
        foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) {
            if ($aiowsaccomcoikus instanceof Field) {
                if ($iwewcwusemqaiggk) {
                    $aiowsaccomcoikus->iygyugseyaqwywyg($this->qooeaookuemoqecm($iwewcwusemqaiggk, $aiowsaccomcoikus->mwikyscisascoeea()));
                }
                echo ManipulateTerm::qkauysqeioauswys($aiowsaccomcoikus, !empty($iwewcwusemqaiggk));
            }
            eeauyscekuckoues:
        }
        mwsmsguqqkcwiiuk:
    }
    
    public function qooeaookuemoqecm($mceokigoiqekskwe, $qqgocisyeuuqmcwc)
    {
        return ManipulateTerm::igawqaomowicuayw($mceokigoiqekskwe, $qqgocisyeuuqmcwc, true);
    }
    
    public function oewywamoqeiigags($mceokigoiqekskwe, $tt_id, $kesssewsiegssiya)
    {
        if ($kesssewsiegssiya === $this->kuaoscooeuayycye()) {
            foreach ($this->ugmceccgwaaaigiy() as $aiowsaccomcoikus) {
                if ($aiowsaccomcoikus instanceof Field) {
                    $aokagokqyuysuksm = $aiowsaccomcoikus->mwikyscisascoeea();
                    if (isset($_POST[$aokagokqyuysuksm])) {
                        ManipulateTerm::ksmqawcowkmegigw($mceokigoiqekskwe, $aokagokqyuysuksm, $_POST[$aokagokqyuysuksm]);
                    }
                }
                msemumccgceyugmg:
            }
            eogwckcymuugikuy:
        }
    }
    
    public function smgycasaqmgcaekq($mceokigoiqekskwe, $tt_id, $kesssewsiegssiya)
    {
        if ($kesssewsiegssiya === $this->kuaoscooeuayycye()) {
            global $wpdb;
            if ($mceokigoiqekskwe) {
                $wpdb->delete($wpdb->termmeta, ['term_id' => $mceokigoiqekskwe], ['%d']);
            }
        }
    }
    
    public function uoaoueswwwmiwwqs($wkkweuacukumqmya, $qgoqiacsiccwoawi, $mceokigoiqekskwe)
    {
        echo ManipulateTerm::igawqaomowicuayw($mceokigoiqekskwe, $qgoqiacsiccwoawi, true);
    }
}
