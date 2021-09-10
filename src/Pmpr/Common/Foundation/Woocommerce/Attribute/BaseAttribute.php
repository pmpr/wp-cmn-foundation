<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b30261f503             |
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
        $this->cecaguuoecmccuse("\167\157\157\143\157\x6d\155\145\162\x63\145\x5f\141\x74\x74\162\151\142\165\x74\x65\137\x6f\x75\x74\x70\x75\164", [$this, "\156\157\x71\165\155\x71\x61\x71\x69\163\155\155\153\141\x63\x75"], 99, 4);
        parent::kgquecmsgcouyaya();
    }
    
    public function aakmagwggmkoiiyu() : ?string
    {
        return $this->name;
    }
    
    public function ugmceccgwaaaigiy($product = null) : array
    {
        return (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x77\x6f\x6f\x63\157\155\x6d\x65\x72\x63\x65\137{$this->aakmagwggmkoiiyu()}\x5f\141\x74\164\162\x69\x62\x75\x74\x65\137\143\x75\163\x74\157\155\137\x66\x69\145\154\x64\163"), $this->fields, $product);
    }
    
    public function mkksewyosgeumwsa(Field $aiowsaccomcoikus) : self
    {
        $this->fields[$aiowsaccomcoikus->mwikyscisascoeea()] = $aiowsaccomcoikus;
        return $this;
    }
    
    public function aqasygcsqysmmyke($aokagokqyuysuksm = null) : int
    {
        goto gscweoakqmmoeuki;
        mukimwqesmuuceii:
        if (!(!$product || $aokagokqyuysuksm)) {
            goto wqekysuysssisica;
        }
        goto wumkcikqsegaceuy;
        okyewgwqccwumwew:
        return absint($product);
        goto gqkaemugiuqsakac;
        wumkcikqsegaceuy:
        $product = ManipulateWoocommerce::omwkqcuwceweymcc($aokagokqyuysuksm);
        goto gmmcayeamkkksegg;
        gscweoakqmmoeuki:
        $product = ManipulateServer::ayueggmoqeeukqmq("\160\157\163\164\137\x69\144");
        goto mukimwqesmuuceii;
        gmmcayeamkkksegg:
        wqekysuysssisica:
        goto okyewgwqccwumwew;
        gqkaemugiuqsakac:
    }
    
    public function noqumqaqismmkacu($aqykuigiuwmmcieu, $ymkomoccmymcoiea, $product)
    {
        goto eyecumosyciiiooq;
        wsyqaoimygmemgay:
        return $aqykuigiuwmmcieu;
        goto guqcykekieeiuyoc;
        sciuwmmsmaecigik:
        kwyqumksiocogsue:
        goto umueiqgeckuoywuw;
        umueiqgeckuoywuw:
        esmwwomccacsqywi:
        goto wsyqaoimygmemgay;
        soqkyegaguykmcso:
        foreach ($ikgwqyuyckaewsow as $uusmaiomayssaecw => $aiowsaccomcoikus) {
            goto ykssueyoewywagwk;
            wugmoiceuaawcoem:
            tawikeiumkmiyomw:
            goto aiiskmcymwiakkgc;
            ykssueyoewywagwk:
            if (!$aiowsaccomcoikus instanceof Field) {
                goto yygceasikmuigagu;
            }
            goto iumwukayaosoaois;
            smoiwyguceomewwy:
            $uusmaiomayssaecw = $aiowsaccomcoikus->mwikyscisascoeea();
            goto kkqkiieookquommo;
            aiiskmcymwiakkgc:
            yygceasikmuigagu:
            goto moueuekwquacwkok;
            qqsgiayqyskeisua:
            $aqykuigiuwmmcieu[$uusmaiomayssaecw] = $this->qooeaookuemoqecm($aiowsaccomcoikus->mwikyscisascoeea(), $this->uqsmmauywmsuqais($ymkomoccmymcoiea));
            goto wugmoiceuaawcoem;
            kkqkiieookquommo:
            yawsicegksimgmco:
            goto agiaqmmawekwgsky;
            agiaqmmawekwgsky:
            if (ManipulateArray::get($aqykuigiuwmmcieu, $uusmaiomayssaecw)) {
                goto tawikeiumkmiyomw;
            }
            goto qqsgiayqyskeisua;
            moueuekwquacwkok:
            gmwgckwgwcswwsys:
            goto cgukcskqwgsmumcy;
            iumwukayaosoaois:
            if (!is_numeric($uusmaiomayssaecw)) {
                goto yawsicegksimgmco;
            }
            goto smoiwyguceomewwy;
            cgukcskqwgsmumcy:
        }
        goto sciuwmmsmaecigik;
        eyecumosyciiiooq:
        $product = $this->aqasygcsqysmmyke($product);
        goto kwuiqqycqycswaku;
        eqwqmiawekysseqe:
        $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy($product);
        goto soqkyegaguykmcso;
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
