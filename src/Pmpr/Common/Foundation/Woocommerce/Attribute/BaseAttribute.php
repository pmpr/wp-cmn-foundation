<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b499786a1b             |
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
        $this->cecaguuoecmccuse("\x77\157\157\143\x6f\155\x6d\x65\x72\143\x65\x5f\141\164\x74\162\151\142\165\164\x65\137\157\x75\x74\160\165\x74", [$this, "\156\157\x71\165\155\x71\141\x71\151\x73\155\155\153\141\x63\x75"], 99, 4);
        parent::kgquecmsgcouyaya();
    }
    
    public function aakmagwggmkoiiyu() : ?string
    {
        return $this->name;
    }
    
    public function ugmceccgwaaaigiy($product = null) : array
    {
        return (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\167\157\157\x63\x6f\155\x6d\145\x72\143\145\137{$this->aakmagwggmkoiiyu()}\137\x61\x74\x74\162\x69\x62\165\x74\x65\x5f\x63\165\163\164\157\155\137\x66\x69\x65\x6c\144\163"), $this->fields, $product);
    }
    
    public function mkksewyosgeumwsa(Field $aiowsaccomcoikus) : self
    {
        $this->fields[$aiowsaccomcoikus->mwikyscisascoeea()] = $aiowsaccomcoikus;
        return $this;
    }
    
    public function aqasygcsqysmmyke($aokagokqyuysuksm = null) : int
    {
        goto gscweoakqmmoeuki;
        gscweoakqmmoeuki:
        $product = ManipulateServer::ayueggmoqeeukqmq("\x70\x6f\x73\x74\137\x69\144");
        goto mukimwqesmuuceii;
        gmmcayeamkkksegg:
        wqekysuysssisica:
        goto okyewgwqccwumwew;
        okyewgwqccwumwew:
        return absint($product);
        goto gqkaemugiuqsakac;
        wumkcikqsegaceuy:
        $product = ManipulateWoocommerce::omwkqcuwceweymcc($aokagokqyuysuksm);
        goto gmmcayeamkkksegg;
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
        eqwqmiawekysseqe:
        $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy($product);
        goto soqkyegaguykmcso;
        wsyqaoimygmemgay:
        return $aqykuigiuwmmcieu;
        goto guqcykekieeiuyoc;
        umueiqgeckuoywuw:
        esmwwomccacsqywi:
        goto wsyqaoimygmemgay;
        sciuwmmsmaecigik:
        kwyqumksiocogsue:
        goto umueiqgeckuoywuw;
        kwuiqqycqycswaku:
        if (!$ymkomoccmymcoiea instanceof WC_Product_Attribute) {
            goto esmwwomccacsqywi;
        }
        goto eqwqmiawekysseqe;
        soqkyegaguykmcso:
        foreach ($ikgwqyuyckaewsow as $uusmaiomayssaecw => $aiowsaccomcoikus) {
            goto ykssueyoewywagwk;
            smoiwyguceomewwy:
            $uusmaiomayssaecw = $aiowsaccomcoikus->mwikyscisascoeea();
            goto kkqkiieookquommo;
            kkqkiieookquommo:
            yawsicegksimgmco:
            goto agiaqmmawekwgsky;
            wugmoiceuaawcoem:
            tawikeiumkmiyomw:
            goto aiiskmcymwiakkgc;
            iumwukayaosoaois:
            if (!is_numeric($uusmaiomayssaecw)) {
                goto yawsicegksimgmco;
            }
            goto smoiwyguceomewwy;
            agiaqmmawekwgsky:
            if (ManipulateArray::get($aqykuigiuwmmcieu, $uusmaiomayssaecw)) {
                goto tawikeiumkmiyomw;
            }
            goto qqsgiayqyskeisua;
            ykssueyoewywagwk:
            if (!$aiowsaccomcoikus instanceof Field) {
                goto yygceasikmuigagu;
            }
            goto iumwukayaosoaois;
            moueuekwquacwkok:
            gmwgckwgwcswwsys:
            goto cgukcskqwgsmumcy;
            qqsgiayqyskeisua:
            $aqykuigiuwmmcieu[$uusmaiomayssaecw] = $this->qooeaookuemoqecm($aiowsaccomcoikus->mwikyscisascoeea(), $this->uqsmmauywmsuqais($ymkomoccmymcoiea));
            goto wugmoiceuaawcoem;
            aiiskmcymwiakkgc:
            yygceasikmuigagu:
            goto moueuekwquacwkok;
            cgukcskqwgsmumcy:
        }
        goto sciuwmmsmaecigik;
        eyecumosyciiiooq:
        $product = $this->aqasygcsqysmmyke($product);
        goto kwuiqqycqycswaku;
        guqcykekieeiuyoc:
    }
    
    public abstract function qooeaookuemoqecm($qqgocisyeuuqmcwc, $ymkomoccmymcoiea);
    
    public abstract function uqsmmauywmsuqais($ymkomoccmymcoiea) : ?string;
}
