<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613bb98fa102d             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Woocommerce;

use Pmpr\Common\Foundation\Decorator\DecoratorQuery;
use Pmpr\Common\Foundation\FormMaker\Admin\Element\MetaBox;
use Pmpr\Common\Foundation\FormMaker\Admin\Field\Group;
use Pmpr\Common\Foundation\FormMaker\Front\MultiStepForm;
use Pmpr\Common\Foundation\FormMaker\Front\Step;
use Pmpr\Common\Foundation\Manipulate\ManipulateServer;
use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulateWoocommerce;
use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost;
use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateHTML;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateString;
use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconFontawesomeInterface;
use WC_Product;
use WC_Product_Simple;
use WC_Product_Variable;

abstract class MultiStepSingleProduct extends Common
{
    const NEXT_STEP_BUTTON = 'next_step_button';
    const PRODUCT_SINGLE_STEPS = 'product_single_steps';
    
    protected array $steps = [];
    
    protected ?int $product = null;
    
    protected ?MultiStepForm $form = null;
    public function wigskegsqequoeks()
    {
        $this->qcsmikeggeemccuu('init', [$this, 'init'])->qcsmikeggeemccuu('wp', [$this, 'ekgeecoacwmsucie'])->qcsmikeggeemccuu('woocommerce_single_product_summary', [$this, 'iiwiiykseauqqcyq'], 9)->qcsmikeggeemccuu('woocommerce_single_product_summary', [$this, 'issqewesgeceqgqk'], 501);
        parent::wigskegsqequoeks();
    }
    public function ekgeecoacwmsucie()
    {
        if ($this->cyeywmmccyoumgku()) {
            $asuggasaseaacmqu = ManipulatePost::igawqaomowicuayw(self::PRODUCT_SINGLE_STEPS, $this->aqasygcsqysmmyke());
            if ($asuggasaseaacmqu && is_array($asuggasaseaacmqu)) {
                foreach ($asuggasaseaacmqu as $wyeyeaaekyoyimqu) {
                    if (ManipulateArray::get($wyeyeaaekyoyimqu, self::TITLE) && ManipulateArray::get($wyeyeaaekyoyimqu, self::TEMPLATE)) {
                        $this->mgqggiyywoageqmo($wyeyeaaekyoyimqu);
                    }
                    soaccwqimeksgwiw:
                }
                suqkuqygkkgwyaie:
                $this->enqueue();
            }
        }
    }
    public function init()
    {
        if ($this->oiomuqiuyskqewke()) {
            MetaBox::cgygmuguceeosoey(self::PRODUCT_SINGLE_STEPS . '_form', __('Add To Cart Steps', PR__CMN__FOUNDATION), true)->ewweaossowcqywaw($this->qegwqkeqkmgeyouk())->mgieiwsmcswmmiim(self::PRODUCT)->maosyyqsuygkawma()->saemoowcasogykak(IconFontawesomeInterface::ICON_FORWARD_STEP);
        }
    }
    
    public function yyoqecggyacaseko() : ?MultiStepForm
    {
        if (!$this->form) {
            $eaoumsseceiowgsk = new MultiStepForm(ManipulateString::uniqid(5));
            $eaoumsseceiowgsk->iiqoooqcakkaeyiw();
            $this->form = $eaoumsseceiowgsk;
        }
        return $this->form;
    }
    
    public function aqasygcsqysmmyke() : ?int
    {
        return $this->product;
    }
    
    public function yiagkoqoiemmqssu() : ?WC_Product
    {
        return ManipulateWoocommerce::aqasygcsqysmmyke($this->aqasygcsqysmmyke());
    }
    public function iiwiiykseauqqcyq()
    {
        if ($this->cyeywmmccyoumgku()) {
            ob_start();
        }
    }
    public function issqewesgeceqgqk()
    {
        if ($this->cyeywmmccyoumgku()) {
            ob_clean();
            $this->esoeigiuggwycwiq();
            if ($this->yyoqecggyacaseko()->wmoeeiseqeecugmu()) {
                $this->yyoqecggyacaseko()->render(['echo' => true]);
            }
        }
    }
    
    public function oiomuqiuyskqewke() : bool
    {
        $ccamueccusigaaio = $this->aqasygcsqysmmyke();
        return $ccamueccusigaaio && is_admin() && (ManipulateServer::get('action') == 'edit' && ManipulateServer::get(self::POST) == $ccamueccusigaaio || ManipulateServer::ayueggmoqeeukqmq('action') == 'editpost');
    }
    
    public function syguimaaeugakesm() : Group
    {
        return MetaBox::iseogkiymousogom(self::PRODUCT_SINGLE_STEPS, __('Step', PR__CMN__FOUNDATION))->mkksewyosgeumwsa(MetaBox::wcwmusaouiqaqeww(self::ENABLE, __('Enable', PR__CMN__FOUNDATION)))->mkksewyosgeumwsa(MetaBox::ymuegqgyuagyucws(self::TITLE, __('Title', PR__CMN__FOUNDATION)))->mkksewyosgeumwsa(MetaBox::uouyygwcgsmygaee(self::DESCRIPTION, __('Description', PR__CMN__FOUNDATION))->qsecygiycssgacqs(3))->mkksewyosgeumwsa(MetaBox::scgissgkcwaumgky(self::ICON))->mkksewyosgeumwsa(MetaBox::ckuwucygcwsiawms(self::TEMPLATE, __('Template', PR__CMN__FOUNDATION), $this->swocoigyikkommyq()))->mkksewyosgeumwsa(MetaBox::ymuegqgyuagyucws(self::NEXT_STEP_BUTTON, __('Next Step Button Title', PR__CMN__FOUNDATION))->eyygsasuqmommkua(__('Next Step', PR__CMN__FOUNDATION)))->usosgsaaimqcysyk()->awaeegwoiqoisoam([self::TEMPLATE]);
    }
    
    public function cyeywmmccyoumgku() : bool
    {
        $ksaameoqigiaoigg = false;
        if (DecoratorQuery::cukiusasccucgwqc(self::PRODUCT)) {
            $ccamueccusigaaio = $this->aqasygcsqysmmyke();
            $ksaameoqigiaoigg = $ccamueccusigaaio && ManipulatePost::mwikyscisascoeea() === $ccamueccusigaaio;
        }
        return $ksaameoqigiaoigg;
    }
    
    public function qegwqkeqkmgeyouk() : array
    {
        return [$this->syguimaaeugakesm()];
    }
    
    public function wmoeeiseqeecugmu() : bool
    {
        return !empty($this->guiyusikssumecwk());
    }
    
    public function mgqggiyywoageqmo($wyeyeaaekyoyimqu) : self
    {
        $this->steps[] = $wyeyeaaekyoyimqu;
        return $this;
    }
    
    public function guiyusikssumecwk() : array
    {
        return $this->steps;
    }
    
    public function maoomkygegkowemi(array $asuggasaseaacmqu) : self
    {
        foreach ($asuggasaseaacmqu as $wyeyeaaekyoyimqu) {
            $this->mgqggiyywoageqmo($wyeyeaaekyoyimqu);
            skkamseieeusycye:
        }
        wiysogeqqwgioyka:
        return $this;
    }
    public function esoeigiuggwycwiq()
    {
        $asuggasaseaacmqu = $this->guiyusikssumecwk();
        if ($asuggasaseaacmqu) {
            foreach ($asuggasaseaacmqu as $momcykaoccoymeig => $wyeyeaaekyoyimqu) {
                $qqswgiawgeaeoecu = ManipulateArray::gucyquqwoimkiiaq($wyeyeaaekyoyimqu, [self::ENABLE, self::TITLE, self::ICON, self::DESCRIPTION, self::TEMPLATE, self::NEXT_STEP_BUTTON]);
                [$oqkgomucoyswikgk, $meqocwsecsywiiqs, $wkaqekwwgqsqwcoi, $mkqqqewsokcswckc, $qqscaoyqikuyeoaw, $mkemseqwyqgsgsek] = array_values($qqswgiawgeaeoecu);
                if ($oqkgomucoyswikgk && $meqocwsecsywiiqs && $qqscaoyqikuyeoaw) {
                    $oyoqqgcsgigcmqqu = new Step($momcykaoccoymeig + 1);
                    $mkqqqewsokcswckc = ManipulateHTML::uuccukgasskgimsq('p', ['class' => 'font-weight-bold font-17 text-muted'], $mkqqqewsokcswckc);
                    $ewgwqamkygiqaawc = $this->iuygowkemiiwqmiw($qqscaoyqikuyeoaw, $this->rsysgcucogueguuk($qqscaoyqikuyeoaw));
                    $oyoqqgcsgigcmqqu->saemoowcasogykak($wkaqekwwgqsqwcoi)->gswweykyogmsyawy($meqocwsecsywiiqs)->oguessuismosauuu($mkqqqewsokcswckc . $ewgwqamkygiqaawc)->gucwmccyimoagwcm($mkqqqewsokcswckc);
                    if ($mkemseqwyqgsgsek) {
                        $oyoqqgcsgigcmqqu->gwwmcykumqueaosa($mkemseqwyqgsgsek);
                    }
                    $this->yyoqecggyacaseko()->mgqggiyywoageqmo($oyoqqgcsgigcmqqu);
                }
                syiqkaasoueowwui:
            }
            cgiscsqwwgqqaeqi:
        }
    }
    public function enqueue()
    {
        $this->yyoqecggyacaseko()->enqueue();
    }
    
    public function rsysgcucogueguuk($qqscaoyqikuyeoaw) : array
    {
        return [];
    }
    
    public abstract function swocoigyikkommyq() : array;
}
