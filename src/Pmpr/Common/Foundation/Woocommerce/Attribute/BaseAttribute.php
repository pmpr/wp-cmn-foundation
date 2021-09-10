<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b2e4befc8c             |
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
        $this->cecaguuoecmccuse("\x77\157\157\x63\x6f\x6d\x6d\x65\162\x63\x65\137\141\x74\x74\x72\x69\x62\165\164\145\137\157\x75\164\x70\165\164", [$this, "\156\157\x71\165\155\161\x61\161\151\163\x6d\155\x6b\141\x63\x75"], 99, 4);
        parent::kgquecmsgcouyaya();
    }
    
    public function aakmagwggmkoiiyu() : ?string
    {
        return $this->name;
    }
    
    public function ugmceccgwaaaigiy($product = null) : array
    {
        return (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x77\157\157\143\157\155\155\145\x72\143\x65\x5f{$this->aakmagwggmkoiiyu()}\x5f\141\164\164\162\151\142\165\164\145\x5f\x63\x75\163\x74\157\155\137\146\x69\x65\154\x64\x73"), $this->fields, $product);
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
        mukimwqesmuuceii:
        if (!(!$product || $aokagokqyuysuksm)) {
            goto wqekysuysssisica;
        }
        goto wumkcikqsegaceuy;
        wumkcikqsegaceuy:
        $product = ManipulateWoocommerce::omwkqcuwceweymcc($aokagokqyuysuksm);
        goto gmmcayeamkkksegg;
        gscweoakqmmoeuki:
        $product = ManipulateServer::ayueggmoqeeukqmq("\160\157\x73\164\137\151\x64");
        goto mukimwqesmuuceii;
        okyewgwqccwumwew:
        return absint($product);
        goto gqkaemugiuqsakac;
        gqkaemugiuqsakac:
    }
    
    public function noqumqaqismmkacu($aqykuigiuwmmcieu, $ymkomoccmymcoiea, $product)
    {
        goto eyecumosyciiiooq;
        eyecumosyciiiooq:
        $product = $this->aqasygcsqysmmyke($product);
        goto kwuiqqycqycswaku;
        wsyqaoimygmemgay:
        return $aqykuigiuwmmcieu;
        goto guqcykekieeiuyoc;
        kwuiqqycqycswaku:
        if (!$ymkomoccmymcoiea instanceof WC_Product_Attribute) {
            goto esmwwomccacsqywi;
        }
        goto eqwqmiawekysseqe;
        soqkyegaguykmcso:
        foreach ($ikgwqyuyckaewsow as $uusmaiomayssaecw => $aiowsaccomcoikus) {
            goto ykssueyoewywagwk;
            qqsgiayqyskeisua:
            $aqykuigiuwmmcieu[$uusmaiomayssaecw] = $this->qooeaookuemoqecm($aiowsaccomcoikus->mwikyscisascoeea(), $this->uqsmmauywmsuqais($ymkomoccmymcoiea));
            goto wugmoiceuaawcoem;
            wugmoiceuaawcoem:
            tawikeiumkmiyomw:
            goto aiiskmcymwiakkgc;
            agiaqmmawekwgsky:
            if (ManipulateArray::get($aqykuigiuwmmcieu, $uusmaiomayssaecw)) {
                goto tawikeiumkmiyomw;
            }
            goto qqsgiayqyskeisua;
            smoiwyguceomewwy:
            $uusmaiomayssaecw = $aiowsaccomcoikus->mwikyscisascoeea();
            goto kkqkiieookquommo;
            iumwukayaosoaois:
            if (!is_numeric($uusmaiomayssaecw)) {
                goto yawsicegksimgmco;
            }
            goto smoiwyguceomewwy;
            ykssueyoewywagwk:
            if (!$aiowsaccomcoikus instanceof Field) {
                goto yygceasikmuigagu;
            }
            goto iumwukayaosoaois;
            moueuekwquacwkok:
            gmwgckwgwcswwsys:
            goto cgukcskqwgsmumcy;
            kkqkiieookquommo:
            yawsicegksimgmco:
            goto agiaqmmawekwgsky;
            aiiskmcymwiakkgc:
            yygceasikmuigagu:
            goto moueuekwquacwkok;
            cgukcskqwgsmumcy:
        }
        goto sciuwmmsmaecigik;
        eqwqmiawekysseqe:
        $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy($product);
        goto soqkyegaguykmcso;
        umueiqgeckuoywuw:
        esmwwomccacsqywi:
        goto wsyqaoimygmemgay;
        sciuwmmsmaecigik:
        kwyqumksiocogsue:
        goto umueiqgeckuoywuw;
        guqcykekieeiuyoc:
    }
    
    public abstract function qooeaookuemoqecm($qqgocisyeuuqmcwc, $ymkomoccmymcoiea);
    
    public abstract function uqsmmauywmsuqais($ymkomoccmymcoiea) : ?string;
}
