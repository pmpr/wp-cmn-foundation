<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613a1be32d755             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Woocommerce\Attribute;

use Pmpr\Common\Foundation\FormMaker\Admin\Field\Field;
use Pmpr\Common\Foundation\Manipulate\ManipulateServer;
use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulateWoocommerce;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;
use WC_Product_Attribute;

abstract class BaseAttribute extends Common
{
    
    protected array $fields = [];
    
    protected ?string $name = null;
    public function kgquecmsgcouyaya()
    {
        $this->cecaguuoecmccuse("\x77\157\x6f\x63\x6f\155\155\145\x72\x63\145\x5f\x61\164\164\x72\x69\142\165\x74\x65\x5f\157\x75\164\160\x75\164", [$this, "\x6e\x6f\161\165\155\161\x61\161\x69\163\155\x6d\153\x61\x63\x75"], 99, 4);
        parent::kgquecmsgcouyaya();
    }
    
    public function aakmagwggmkoiiyu() : ?string
    {
        return $this->name;
    }
    
    public function ugmceccgwaaaigiy($product = null) : array
    {
        return (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x77\x6f\x6f\x63\157\155\155\145\x72\x63\x65\137{$this->aakmagwggmkoiiyu()}\x5f\x61\x74\164\x72\151\142\x75\164\x65\137\143\x75\163\x74\157\155\x5f\146\x69\145\x6c\x64\x73"), $this->fields, $product);
    }
    
    public function mkksewyosgeumwsa(Field $aiowsaccomcoikus) : self
    {
        $this->fields[$aiowsaccomcoikus->mwikyscisascoeea()] = $aiowsaccomcoikus;
        return $this;
    }
    
    public function aqasygcsqysmmyke($aokagokqyuysuksm = null) : int
    {
        goto lwkkgmcgkowgygcs;
        lwkkgmcgkowgygcs:
        $product = ManipulateServer::ayueggmoqeeukqmq("\x70\157\163\164\x5f\151\144");
        goto ueyqgegieiwkocck;
        ickoqwmqsgowyscy:
        uoowsoawqkggioeo:
        goto cwgsuaukyieoswoq;
        ueyqgegieiwkocck:
        if (!(!$product || $aokagokqyuysuksm)) {
            goto uoowsoawqkggioeo;
        }
        goto yukscyeaqukseeim;
        cwgsuaukyieoswoq:
        return absint($product);
        goto uwoawkimmaqcwqcq;
        yukscyeaqukseeim:
        $product = ManipulateWoocommerce::omwkqcuwceweymcc($aokagokqyuysuksm);
        goto ickoqwmqsgowyscy;
        uwoawkimmaqcwqcq:
    }
    
    public function noqumqaqismmkacu($aqykuigiuwmmcieu, $ymkomoccmymcoiea, $product)
    {
        goto usukaqsqeowqkwwu;
        wukeekgkakowukck:
        ayuwgkkummcqqesk:
        goto wwgssoakwoscwoss;
        ukaumyigguemyqmg:
        if (!$ymkomoccmymcoiea instanceof WC_Product_Attribute) {
            goto weciiuggqamwweai;
        }
        goto mekmkiaykamiugmo;
        mekmkiaykamiugmo:
        $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy($product);
        goto okieooymmiqqwsui;
        okieooymmiqqwsui:
        foreach ($ikgwqyuyckaewsow as $uusmaiomayssaecw => $aiowsaccomcoikus) {
            goto ismswigsaeymicgu;
            uaeqweeeyaoceeae:
            gaqiaugiyyuoaywe:
            goto ismmoaqwqiyscccu;
            ismswigsaeymicgu:
            if (!$aiowsaccomcoikus instanceof Field) {
                goto gaqiaugiyyuoaywe;
            }
            goto syuuameqwoymyswo;
            syuuameqwoymyswo:
            if (!is_numeric($uusmaiomayssaecw)) {
                goto mouaeysyaawwqsmq;
            }
            goto kykgeuicqicmuucg;
            ismmoaqwqiyscccu:
            eqgkqikoqkaiuocm:
            goto seymakqosammeimy;
            oqmwiucmyoiwciws:
            $aqykuigiuwmmcieu[$uusmaiomayssaecw] = $this->qooeaookuemoqecm($aiowsaccomcoikus->mwikyscisascoeea(), $this->uqsmmauywmsuqais($ymkomoccmymcoiea));
            goto sqummycmewomisus;
            sqummycmewomisus:
            gsiaweqgymagyokg:
            goto uaeqweeeyaoceeae;
            kykgeuicqicmuucg:
            $uusmaiomayssaecw = $aiowsaccomcoikus->mwikyscisascoeea();
            goto gqaiosgasmiekmma;
            gqaiosgasmiekmma:
            mouaeysyaawwqsmq:
            goto eeyukwscccmigmuq;
            eeyukwscccmigmuq:
            if (ManipulateArray::get($aqykuigiuwmmcieu, $uusmaiomayssaecw)) {
                goto gsiaweqgymagyokg;
            }
            goto oqmwiucmyoiwciws;
            seymakqosammeimy:
        }
        goto wukeekgkakowukck;
        komaikgkmaeoescu:
        return $aqykuigiuwmmcieu;
        goto syeosgmcsoykgmoi;
        wwgssoakwoscwoss:
        weciiuggqamwweai:
        goto komaikgkmaeoescu;
        usukaqsqeowqkwwu:
        $product = $this->aqasygcsqysmmyke($product);
        goto ukaumyigguemyqmg;
        syeosgmcsoykgmoi:
    }
    
    public abstract function qooeaookuemoqecm($qqgocisyeuuqmcwc, $ymkomoccmymcoiea);
    
    public abstract function uqsmmauywmsuqais($ymkomoccmymcoiea) : ?string;
}
