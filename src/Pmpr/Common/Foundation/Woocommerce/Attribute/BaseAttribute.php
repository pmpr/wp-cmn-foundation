<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b3993be3fb             |
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
        $this->cecaguuoecmccuse("\x77\x6f\x6f\x63\157\x6d\155\145\162\x63\x65\137\141\164\x74\x72\151\142\165\x74\145\137\157\x75\164\x70\165\x74", [$this, "\156\157\x71\165\x6d\x71\141\161\x69\x73\x6d\x6d\x6b\141\x63\165"], 99, 4);
        parent::kgquecmsgcouyaya();
    }
    
    public function aakmagwggmkoiiyu() : ?string
    {
        return $this->name;
    }
    
    public function ugmceccgwaaaigiy($product = null) : array
    {
        return (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x77\157\157\x63\x6f\x6d\155\x65\x72\x63\145\137{$this->aakmagwggmkoiiyu()}\137\141\164\164\x72\x69\x62\x75\x74\x65\137\x63\165\163\164\157\x6d\137\146\x69\145\154\144\163"), $this->fields, $product);
    }
    
    public function mkksewyosgeumwsa(Field $aiowsaccomcoikus) : self
    {
        $this->fields[$aiowsaccomcoikus->mwikyscisascoeea()] = $aiowsaccomcoikus;
        return $this;
    }
    
    public function aqasygcsqysmmyke($aokagokqyuysuksm = null) : int
    {
        goto gscweoakqmmoeuki;
        okyewgwqccwumwew:
        return absint($product);
        goto gqkaemugiuqsakac;
        wumkcikqsegaceuy:
        $product = ManipulateWoocommerce::omwkqcuwceweymcc($aokagokqyuysuksm);
        goto gmmcayeamkkksegg;
        gscweoakqmmoeuki:
        $product = ManipulateServer::ayueggmoqeeukqmq("\x70\x6f\163\x74\x5f\x69\144");
        goto mukimwqesmuuceii;
        gmmcayeamkkksegg:
        wqekysuysssisica:
        goto okyewgwqccwumwew;
        mukimwqesmuuceii:
        if (!(!$product || $aokagokqyuysuksm)) {
            goto wqekysuysssisica;
        }
        goto wumkcikqsegaceuy;
        gqkaemugiuqsakac:
    }
    
    public function noqumqaqismmkacu($aqykuigiuwmmcieu, $ymkomoccmymcoiea, $product)
    {
        goto eyecumosyciiiooq;
        sciuwmmsmaecigik:
        kwyqumksiocogsue:
        goto umueiqgeckuoywuw;
        umueiqgeckuoywuw:
        esmwwomccacsqywi:
        goto wsyqaoimygmemgay;
        eyecumosyciiiooq:
        $product = $this->aqasygcsqysmmyke($product);
        goto kwuiqqycqycswaku;
        soqkyegaguykmcso:
        foreach ($ikgwqyuyckaewsow as $uusmaiomayssaecw => $aiowsaccomcoikus) {
            goto ykssueyoewywagwk;
            moueuekwquacwkok:
            gmwgckwgwcswwsys:
            goto cgukcskqwgsmumcy;
            qqsgiayqyskeisua:
            $aqykuigiuwmmcieu[$uusmaiomayssaecw] = $this->qooeaookuemoqecm($aiowsaccomcoikus->mwikyscisascoeea(), $this->uqsmmauywmsuqais($ymkomoccmymcoiea));
            goto wugmoiceuaawcoem;
            smoiwyguceomewwy:
            $uusmaiomayssaecw = $aiowsaccomcoikus->mwikyscisascoeea();
            goto kkqkiieookquommo;
            kkqkiieookquommo:
            yawsicegksimgmco:
            goto agiaqmmawekwgsky;
            agiaqmmawekwgsky:
            if (ManipulateArray::get($aqykuigiuwmmcieu, $uusmaiomayssaecw)) {
                goto tawikeiumkmiyomw;
            }
            goto qqsgiayqyskeisua;
            aiiskmcymwiakkgc:
            yygceasikmuigagu:
            goto moueuekwquacwkok;
            iumwukayaosoaois:
            if (!is_numeric($uusmaiomayssaecw)) {
                goto yawsicegksimgmco;
            }
            goto smoiwyguceomewwy;
            wugmoiceuaawcoem:
            tawikeiumkmiyomw:
            goto aiiskmcymwiakkgc;
            ykssueyoewywagwk:
            if (!$aiowsaccomcoikus instanceof Field) {
                goto yygceasikmuigagu;
            }
            goto iumwukayaosoaois;
            cgukcskqwgsmumcy:
        }
        goto sciuwmmsmaecigik;
        eqwqmiawekysseqe:
        $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy($product);
        goto soqkyegaguykmcso;
        wsyqaoimygmemgay:
        return $aqykuigiuwmmcieu;
        goto guqcykekieeiuyoc;
        kwuiqqycqycswaku:
        if (!$ymkomoccmymcoiea instanceof WC_Product_Attribute) {
            goto esmwwomccacsqywi;
        }
        goto eqwqmiawekysseqe;
        guqcykekieeiuyoc:
    }
    
    public abstract function qooeaookuemoqecm($qqgocisyeuuqmcwc, $ymkomoccmymcoiea);
    
    public abstract function uqsmmauywmsuqais($ymkomoccmymcoiea) : ?string;
}
