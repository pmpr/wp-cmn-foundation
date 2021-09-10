<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b1e8aa0c03             |
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
        $this->cecaguuoecmccuse("\167\157\x6f\x63\x6f\155\155\x65\x72\x63\145\137\141\164\164\162\x69\142\165\x74\x65\x5f\157\165\x74\x70\x75\x74", [$this, "\x6e\157\161\x75\x6d\x71\x61\x71\151\163\x6d\x6d\153\x61\143\x75"], 99, 4);
        parent::kgquecmsgcouyaya();
    }
    
    public function aakmagwggmkoiiyu() : ?string
    {
        return $this->name;
    }
    
    public function ugmceccgwaaaigiy($product = null) : array
    {
        return (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\167\x6f\157\143\x6f\155\155\145\x72\x63\145\137{$this->aakmagwggmkoiiyu()}\x5f\x61\164\x74\162\151\x62\x75\164\x65\x5f\x63\x75\163\164\157\x6d\x5f\146\x69\x65\x6c\144\x73"), $this->fields, $product);
    }
    
    public function mkksewyosgeumwsa(Field $aiowsaccomcoikus) : self
    {
        $this->fields[$aiowsaccomcoikus->mwikyscisascoeea()] = $aiowsaccomcoikus;
        return $this;
    }
    
    public function aqasygcsqysmmyke($aokagokqyuysuksm = null) : int
    {
        goto smwyssciamywmcwc;
        mukimwqesmuuceii:
        return absint($product);
        goto wumkcikqsegaceuy;
        wqekysuysssisica:
        $product = ManipulateWoocommerce::omwkqcuwceweymcc($aokagokqyuysuksm);
        goto gscweoakqmmoeuki;
        smwyssciamywmcwc:
        $product = ManipulateServer::ayueggmoqeeukqmq("\x70\157\163\x74\137\151\x64");
        goto ukyauawycqguowmk;
        gscweoakqmmoeuki:
        eaqqgoagskioaooo:
        goto mukimwqesmuuceii;
        ukyauawycqguowmk:
        if (!(!$product || $aokagokqyuysuksm)) {
            goto eaqqgoagskioaooo;
        }
        goto wqekysuysssisica;
        wumkcikqsegaceuy:
    }
    
    public function noqumqaqismmkacu($aqykuigiuwmmcieu, $ymkomoccmymcoiea, $product)
    {
        goto moueuekwquacwkok;
        kwuiqqycqycswaku:
        gmmcayeamkkksegg:
        goto eqwqmiawekysseqe;
        eyecumosyciiiooq:
        foreach ($ikgwqyuyckaewsow as $uusmaiomayssaecw => $aiowsaccomcoikus) {
            goto yawsicegksimgmco;
            kkqkiieookquommo:
            kwyqumksiocogsue:
            goto agiaqmmawekwgsky;
            smoiwyguceomewwy:
            $aqykuigiuwmmcieu[$uusmaiomayssaecw] = $this->qooeaookuemoqecm($aiowsaccomcoikus->mwikyscisascoeea(), $this->uqsmmauywmsuqais($ymkomoccmymcoiea));
            goto kkqkiieookquommo;
            iumwukayaosoaois:
            if (ManipulateArray::get($aqykuigiuwmmcieu, $uusmaiomayssaecw)) {
                goto kwyqumksiocogsue;
            }
            goto smoiwyguceomewwy;
            yygceasikmuigagu:
            $uusmaiomayssaecw = $aiowsaccomcoikus->mwikyscisascoeea();
            goto ykssueyoewywagwk;
            ykssueyoewywagwk:
            gqkaemugiuqsakac:
            goto iumwukayaosoaois;
            qqsgiayqyskeisua:
            okyewgwqccwumwew:
            goto wugmoiceuaawcoem;
            yawsicegksimgmco:
            if (!$aiowsaccomcoikus instanceof Field) {
                goto gmwgckwgwcswwsys;
            }
            goto tawikeiumkmiyomw;
            agiaqmmawekwgsky:
            gmwgckwgwcswwsys:
            goto qqsgiayqyskeisua;
            tawikeiumkmiyomw:
            if (!is_numeric($uusmaiomayssaecw)) {
                goto gqkaemugiuqsakac;
            }
            goto yygceasikmuigagu;
            wugmoiceuaawcoem:
        }
        goto kwuiqqycqycswaku;
        eqwqmiawekysseqe:
        aiiskmcymwiakkgc:
        goto soqkyegaguykmcso;
        esmwwomccacsqywi:
        $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy($product);
        goto eyecumosyciiiooq;
        cgukcskqwgsmumcy:
        if (!$ymkomoccmymcoiea instanceof WC_Product_Attribute) {
            goto aiiskmcymwiakkgc;
        }
        goto esmwwomccacsqywi;
        moueuekwquacwkok:
        $product = $this->aqasygcsqysmmyke($product);
        goto cgukcskqwgsmumcy;
        soqkyegaguykmcso:
        return $aqykuigiuwmmcieu;
        goto sciuwmmsmaecigik;
        sciuwmmsmaecigik:
    }
    
    public abstract function qooeaookuemoqecm($qqgocisyeuuqmcwc, $ymkomoccmymcoiea);
    
    public abstract function uqsmmauywmsuqais($ymkomoccmymcoiea) : ?string;
}
