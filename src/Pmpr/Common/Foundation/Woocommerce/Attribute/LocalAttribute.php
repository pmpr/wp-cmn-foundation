<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613bb98fa102d             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Woocommerce\Attribute;

use Pmpr\Common\Foundation\Decorator\Plugin\DecoratorWoocommerce;
use Pmpr\Common\Foundation\FormMaker\Admin\Element\MetaBox;
use Pmpr\Common\Foundation\FormMaker\Admin\Field\Checkbox;
use Pmpr\Common\Foundation\FormMaker\Admin\Field\Field;
use Pmpr\Common\Foundation\Manipulate\ManipulateAjax;
use Pmpr\Common\Foundation\Manipulate\ManipulateServer;
use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateString;
use WC_Product_Attribute;

class LocalAttribute extends BaseAttribute
{
    
    public function __construct()
    {
        $this->name = 'local';
        parent::__construct();
    }
    public function wigskegsqequoeks()
    {
        $this->koaegcswmcqsiykq('woocommerce_save_attributes', [$this, 'save'], 5)->qcsmikeggeemccuu('woocommerce_after_product_attribute_settings', [$this, 'iuaucuookgoqiiio'], 10, 2);
        parent::wigskegsqequoeks();
    }
    
    public function uqsmmauywmsuqais($ymkomoccmymcoiea) : ?string
    {
        return DecoratorWoocommerce::scemgqiggsykoisk($ymkomoccmymcoiea->get_name());
    }
    public function save()
    {
        if (ManipulateAjax::wqsmsuyggkkyyocc('save-attributes', 'security')) {
            parse_str(ManipulateServer::ayueggmoqeeukqmq(self::DATA), $icwicymcioeyeyek);
            $aiwgcyaewwagisoo = ManipulateArray::get($icwicymcioeyeyek, 'attribute_names');
            if ($icwicymcioeyeyek && $aiwgcyaewwagisoo) {
                $product = $this->aqasygcsqysmmyke();
                $ikgwqyuyckaewsow = array_merge($this->ugmceccgwaaaigiy($product), GlobalAttribute::symcgieuakksimmu()->ugmceccgwaaaigiy($product));
                foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) {
                    if ($aiowsaccomcoikus instanceof Field) {
                        $aokagokqyuysuksm = $aiowsaccomcoikus->mwikyscisascoeea();
                        $qqswgiawgeaeoecu = ManipulateArray::get($icwicymcioeyeyek, $aokagokqyuysuksm, []);
                        if (is_array($qqswgiawgeaeoecu) && $qqswgiawgeaeoecu) {
                            foreach ($qqswgiawgeaeoecu as $momcykaoccoymeig => $eqgoocgaqwqcimie) {
                                $ymqmyyeuycgmigyo = ManipulateArray::get($aiwgcyaewwagisoo, $momcykaoccoymeig);
                                if ($aiowsaccomcoikus instanceof Checkbox) {
                                    $eqgoocgaqwqcimie = true;
                                }
                                $ymqmyyeuycgmigyo = DecoratorWoocommerce::scemgqiggsykoisk($ymqmyyeuycgmigyo);
                                ManipulatePost::ksmqawcowkmegigw($aokagokqyuysuksm . $ymqmyyeuycgmigyo, $eqgoocgaqwqcimie, $product);
                                kqgcyoscsusgoaqi:
                            }
                            wgewmqieuamsoayy:
                        }
                    }
                    ugqaaewwmkocwwgy:
                }
                omqiayeucoioqoao:
            }
        }
    }
    
    public function qooeaookuemoqecm($qqgocisyeuuqmcwc, $ymkomoccmymcoiea)
    {
        return ManipulatePost::igawqaomowicuayw($qqgocisyeuuqmcwc . $ymkomoccmymcoiea, $this->aqasygcsqysmmyke(), true);
    }
    
    public function iuaucuookgoqiiio($ymkomoccmymcoiea, $momcykaoccoymeig)
    {
        if ($ymkomoccmymcoiea instanceof WC_Product_Attribute) {
            $product = $this->aqasygcsqysmmyke();
            $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy($product);
            if (!$ymkomoccmymcoiea->is_taxonomy()) {
                $ikgwqyuyckaewsow = array_merge($ikgwqyuyckaewsow, GlobalAttribute::symcgieuakksimmu()->ugmceccgwaaaigiy($product));
            }
            $ikgwqyuyckaewsow = $this->uiwgikskqiusqook($ikgwqyuyckaewsow, $this->uqsmmauywmsuqais($ymkomoccmymcoiea), $momcykaoccoymeig);
            if ($ikgwqyuyckaewsow) {
                $ikgwqyuyckaewsow = ManipulateArray::yaeiiwwyckwugsem($ikgwqyuyckaewsow);
                foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) {
                    if ($aiowsaccomcoikus instanceof Field) {
                        $aiowsaccomcoikus->ggiaseqygioygumq("{$aiowsaccomcoikus->mwikyscisascoeea()}[{$momcykaoccoymeig}]")->oiwawawcmigageco(4)->yoimakcqmoqokkcu();
                    }
                    sggawugoykqcmsug:
                }
                ueigkucgaucgeimc:
                echo $this->iuygowkemiiwqmiw('form', ['id' => ManipulateString::uniqid(5), 'title' => __('Custom Fields', PR__CMN__FOUNDATION), 'fields' => MetaBox::iuaucuookgoqiiio($ikgwqyuyckaewsow, ['echo' => false]), 'can_add_js' => ManipulateAjax::mcgoysmkqsqooceq(), 'alert_message' => __('Can not render fields correctly, please refresh page manually.', PR__CMN__FOUNDATION), 'success_message' => __('fields loaded correctly.', PR__CMN__FOUNDATION)]);
            }
        }
    }
    
    public function uiwgikskqiusqook($ikgwqyuyckaewsow = [], $ymqmyyeuycgmigyo = '', $momcykaoccoymeig = 0) : array
    {
        if ($ikgwqyuyckaewsow) {
            parse_str(ManipulateServer::ayueggmoqeeukqmq(self::DATA), $icwicymcioeyeyek);
            $product = $this->aqasygcsqysmmyke();
            foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) {
                if ($aiowsaccomcoikus instanceof Field) {
                    $uusmaiomayssaecw = $aiowsaccomcoikus->mwikyscisascoeea();
                    $eqgoocgaqwqcimie = false;
                    if ($icwicymcioeyeyek && isset($icwicymcioeyeyek[$uusmaiomayssaecw])) {
                        if ($aiowsaccomcoikus instanceof Checkbox) {
                            $eqgoocgaqwqcimie = isset($icwicymcioeyeyek[$uusmaiomayssaecw][$momcykaoccoymeig]);
                        } else {
                            $eqgoocgaqwqcimie = ManipulateArray::get($icwicymcioeyeyek[$uusmaiomayssaecw], $momcykaoccoymeig, $icwicymcioeyeyek[$uusmaiomayssaecw]);
                        }
                    } else {
                        if ($product) {
                            $eqgoocgaqwqcimie = $this->qooeaookuemoqecm($uusmaiomayssaecw, $ymqmyyeuycgmigyo);
                        }
                    }
                    $aiowsaccomcoikus->iygyugseyaqwywyg($eqgoocgaqwqcimie);
                }
                wakmayaoqoskekqy:
            }
            wkeuuycukmuqiaom:
        }
        return $ikgwqyuyckaewsow;
    }
}
