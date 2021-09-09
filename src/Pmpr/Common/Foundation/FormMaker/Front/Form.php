<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613a1be32d755             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\FormMaker\Front;

use Pmpr\Common\Foundation\FormMaker\Front\Field\Field;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;

class Form extends Element
{
    
    protected ?array $fields = [];
    
    protected ?Div $fieldsContainer = null;
    
    public function __construct(string $aokagokqyuysuksm = null)
    {
        parent::__construct("\x66\x6f\x72\x6d", $aokagokqyuysuksm);
        $this->cukciuymuoaqgwic("\x50\117\x53\x54");
    }
    
    public function souwykwwmyygqyqi() : ?string
    {
        goto wqkyoqmimmcmqgqw;
        qmgyoamwwkwmkgka:
        $ewgwqamkygiqaawc = '';
        goto mkiywysewmkeqawg;
        aqiyqkqkeeaokeka:
        gsckkwksmcsuowqg:
        goto csaumcaiqkmaosqw;
        csaumcaiqkmaosqw:
        return $ewgwqamkygiqaawc;
        goto qkcawoouacuyaiiw;
        umuqqcsocwogmmuw:
        $skikiykssoocmmik = $this->kmiowswwgwcocguk();
        goto ksyuggwmykuiiooy;
        mkiywysewmkeqawg:
        foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) {
            goto ykaoeemqmkoaimsw;
            ykaoeemqmkoaimsw:
            if (!$aiowsaccomcoikus instanceof Element) {
                goto cmmyoagaqoyeymik;
            }
            goto uywokigkksckcgeg;
            kgmowiykwaamoceq:
            gkauywgyiayiioug:
            goto mgymgcsywkseaaaw;
            iauuqukiyugkmuqe:
            cmmyoagaqoyeymik:
            goto kgmowiykwaamoceq;
            uywokigkksckcgeg:
            $ewgwqamkygiqaawc .= $aiowsaccomcoikus->render();
            goto iauuqukiyugkmuqe;
            mgymgcsywkseaaaw:
        }
        goto skwsosgqyumikwkm;
        weckoamymcgsskke:
        $ewgwqamkygiqaawc = str_replace(self::CHILD_CONTENT, $ewgwqamkygiqaawc, $skikiykssoocmmik->render());
        goto aqiyqkqkeeaokeka;
        wqkyoqmimmcmqgqw:
        
        $ikgwqyuyckaewsow = ManipulateArray::yaeiiwwyckwugsem($this->ugmceccgwaaaigiy());
        goto qmgyoamwwkwmkgka;
        skwsosgqyumikwkm:
        eewuuuyuugucoiwo:
        goto umuqqcsocwogmmuw;
        ksyuggwmykuiiooy:
        if (!$skikiykssoocmmik) {
            goto gsckkwksmcsuowqg;
        }
        goto weckoamymcgsskke;
        qkcawoouacuyaiiw:
    }
    
    public function kmiowswwgwcocguk() : ?Div
    {
        return $this->fieldsContainer;
    }
    
    public function oguwwiuwyqkaueiu($siquossayskcwkea = []) : self
    {
        $this->fieldsContainer = self::mecgagckeuagggyw()->sueyawuweyoqyeaq($siquossayskcwkea);
        return $this;
    }
    
    public function ugmceccgwaaaigiy() : ?array
    {
        return $this->fields;
    }
    
    public function ygwimyogyaqgumam(?string $aokagokqyuysuksm) : ?Field
    {
        return ManipulateArray::get($this->ugmceccgwaaaigiy(), $aokagokqyuysuksm);
    }
    
    public function mkksewyosgeumwsa(Field $aiowsaccomcoikus) : self
    {
        goto wgmoucsgmmgsoeks;
        kgcygucmaeeaeoqw:
        $aiowsaccomcoikus->jyumyyugiwwiqomk(count($this->ugmceccgwaaaigiy()) + 1);
        goto ayumqmewoimoeiwi;
        wkewwcyckywegkgu:
        return $this;
        goto raaikgmaamoasmka;
        wgmoucsgmmgsoeks:
        if (!(!$aiowsaccomcoikus->yywskysiycwkwsgw() && is_array($this->ugmceccgwaaaigiy()))) {
            goto zkqawssceymsouka;
        }
        goto kgcygucmaeeaeoqw;
        ayumqmewoimoeiwi:
        zkqawssceymsouka:
        goto ygceqcgcqeugqsac;
        ygceqcgcqeugqsac:
        $this->fields[$aiowsaccomcoikus->mwikyscisascoeea()] = $aiowsaccomcoikus;
        goto wkewwcyckywegkgu;
        raaikgmaamoasmka:
    }
    
    public function ewweaossowcqywaw(array $ikgwqyuyckaewsow) : self
    {
        goto qayqmgmmymcquuag;
        uewyaeqgisiqwyus:
        return $this;
        goto miqweqaaowcigwek;
        cwuseuekgwsccecg:
        ikkycqcyiskeyiwc:
        goto uewyaeqgisiqwyus;
        qayqmgmmymcquuag:
        foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) {
            goto qkmecaguyiccekqq;
            qkmecaguyiccekqq:
            if (!$aiowsaccomcoikus instanceof Field) {
                goto nvaqyysiqoawekeq;
            }
            goto ekcociwqmcmuagmg;
            ekcociwqmcmuagmg:
            $this->mkksewyosgeumwsa($aiowsaccomcoikus);
            goto smmoumcqseumumuy;
            smmoumcqseumumuy:
            nvaqyysiqoawekeq:
            goto cgkugammwaasskse;
            cgkugammwaasskse:
            gkqwqumumsggkisk:
            goto uuikuwqgwiqisaka;
            uuikuwqgwiqisaka:
        }
        goto cwuseuekgwsccecg;
        miqweqaaowcigwek:
    }
    
    public function cwqickkaaokiquuo(string $aiamqeawckcsuaou) : self
    {
        $this->qcgocuceocquqcuw("\141\x63\164\151\157\156", $aiamqeawckcsuaou);
        return $this;
    }
    
    public function cukciuymuoaqgwic(string $qgciuiagkkguykgs) : self
    {
        $this->qcgocuceocquqcuw("\x6d\145\164\150\x6f\x64", $qgciuiagkkguykgs);
        return $this;
    }
}
