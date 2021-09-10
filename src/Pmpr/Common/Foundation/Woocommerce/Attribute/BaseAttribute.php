<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b5973b89a9             |
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
        $this->cecaguuoecmccuse("\x77\x6f\x6f\143\x6f\155\x6d\145\x72\143\x65\137\141\164\x74\162\x69\142\165\x74\x65\137\157\165\164\160\165\164", [$this, "\x6e\157\161\x75\x6d\161\x61\161\151\x73\155\x6d\x6b\141\143\165"], 99, 4);
        parent::kgquecmsgcouyaya();
    }
    
    public function aakmagwggmkoiiyu() : ?string
    {
        return $this->name;
    }
    
    public function ugmceccgwaaaigiy($product = null) : array
    {
        return (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\167\157\x6f\143\x6f\155\x6d\x65\162\143\145\137{$this->aakmagwggmkoiiyu()}\x5f\x61\164\164\162\151\142\x75\164\145\x5f\x63\165\163\164\157\155\x5f\146\x69\x65\x6c\x64\x73"), $this->fields, $product);
    }
    
    public function mkksewyosgeumwsa(Field $aiowsaccomcoikus) : self
    {
        $this->fields[$aiowsaccomcoikus->mwikyscisascoeea()] = $aiowsaccomcoikus;
        return $this;
    }
    
    public function aqasygcsqysmmyke($aokagokqyuysuksm = null) : int
    {
        goto gscweoakqmmoeuki;
        gmmcayeamkkksegg:
        wqekysuysssisica:
        goto okyewgwqccwumwew;
        gscweoakqmmoeuki:
        $product = ManipulateServer::ayueggmoqeeukqmq("\x70\x6f\x73\164\137\151\x64");
        goto mukimwqesmuuceii;
        mukimwqesmuuceii:
        if (!(!$product || $aokagokqyuysuksm)) {
            goto wqekysuysssisica;
        }
        goto wumkcikqsegaceuy;
        wumkcikqsegaceuy:
        $product = ManipulateWoocommerce::omwkqcuwceweymcc($aokagokqyuysuksm);
        goto gmmcayeamkkksegg;
        okyewgwqccwumwew:
        return absint($product);
        goto gqkaemugiuqsakac;
        gqkaemugiuqsakac:
    }
    
    public function noqumqaqismmkacu($aqykuigiuwmmcieu, $ymkomoccmymcoiea, $product)
    {
        goto eyecumosyciiiooq;
        sciuwmmsmaecigik:
        kwyqumksiocogsue:
        goto umueiqgeckuoywuw;
        soqkyegaguykmcso:
        foreach ($ikgwqyuyckaewsow as $uusmaiomayssaecw => $aiowsaccomcoikus) {
            goto ykssueyoewywagwk;
            wugmoiceuaawcoem:
            tawikeiumkmiyomw:
            goto aiiskmcymwiakkgc;
            agiaqmmawekwgsky:
            if (ManipulateArray::get($aqykuigiuwmmcieu, $uusmaiomayssaecw)) {
                goto tawikeiumkmiyomw;
            }
            goto qqsgiayqyskeisua;
            iumwukayaosoaois:
            if (!is_numeric($uusmaiomayssaecw)) {
                goto yawsicegksimgmco;
            }
            goto smoiwyguceomewwy;
            aiiskmcymwiakkgc:
            yygceasikmuigagu:
            goto moueuekwquacwkok;
            ykssueyoewywagwk:
            if (!$aiowsaccomcoikus instanceof Field) {
                goto yygceasikmuigagu;
            }
            goto iumwukayaosoaois;
            kkqkiieookquommo:
            yawsicegksimgmco:
            goto agiaqmmawekwgsky;
            smoiwyguceomewwy:
            $uusmaiomayssaecw = $aiowsaccomcoikus->mwikyscisascoeea();
            goto kkqkiieookquommo;
            moueuekwquacwkok:
            gmwgckwgwcswwsys:
            goto cgukcskqwgsmumcy;
            qqsgiayqyskeisua:
            $aqykuigiuwmmcieu[$uusmaiomayssaecw] = $this->qooeaookuemoqecm($aiowsaccomcoikus->mwikyscisascoeea(), $this->uqsmmauywmsuqais($ymkomoccmymcoiea));
            goto wugmoiceuaawcoem;
            cgukcskqwgsmumcy:
        }
        goto sciuwmmsmaecigik;
        umueiqgeckuoywuw:
        esmwwomccacsqywi:
        goto wsyqaoimygmemgay;
        eyecumosyciiiooq:
        $product = $this->aqasygcsqysmmyke($product);
        goto kwuiqqycqycswaku;
        kwuiqqycqycswaku:
        if (!$ymkomoccmymcoiea instanceof WC_Product_Attribute) {
            goto esmwwomccacsqywi;
        }
        goto eqwqmiawekysseqe;
        eqwqmiawekysseqe:
        $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy($product);
        goto soqkyegaguykmcso;
        wsyqaoimygmemgay:
        return $aqykuigiuwmmcieu;
        goto guqcykekieeiuyoc;
        guqcykekieeiuyoc:
    }
    
    public abstract function qooeaookuemoqecm($qqgocisyeuuqmcwc, $ymkomoccmymcoiea);
    
    public abstract function uqsmmauywmsuqais($ymkomoccmymcoiea) : ?string;
}
