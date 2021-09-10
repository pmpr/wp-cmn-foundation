<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b6c65a2d22             |
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
        parent::__construct("\146\x6f\x72\155", $aokagokqyuysuksm);
        $this->cukciuymuoaqgwic("\x50\117\123\124");
    }
    
    public function souwykwwmyygqyqi() : ?string
    {
        goto eawkaqqqaeooyyws;
        auqkowcaacmmoqqk:
        $ewgwqamkygiqaawc = str_replace(self::CHILD_CONTENT, $ewgwqamkygiqaawc, $skikiykssoocmmik->render());
        goto skyosyooeugyimmm;
        ggiqkimkqqwskeoa:
        $skikiykssoocmmik = $this->kmiowswwgwcocguk();
        goto awmcioiwswckueis;
        gsgkgikagiuqeoie:
        return $ewgwqamkygiqaawc;
        goto ogqeqywosyqyaigy;
        ioouuggmywygqauo:
        foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) {
            goto swiqeuyomyeicqea;
            mwskikiiuqwkeiqq:
            $ewgwqamkygiqaawc .= $aiowsaccomcoikus->render();
            goto aywemsgsqqwuwasc;
            mqueqquuggcakwcy:
            essaksagsgmwyccs:
            goto mggewcywmuekqcaq;
            aywemsgsqqwuwasc:
            meqcqssumqokgkqc:
            goto mqueqquuggcakwcy;
            swiqeuyomyeicqea:
            if (!$aiowsaccomcoikus instanceof Element) {
                goto meqcqssumqokgkqc;
            }
            goto mwskikiiuqwkeiqq;
            mggewcywmuekqcaq:
        }
        goto oiyywaikucqwquie;
        skyosyooeugyimmm:
        iakeaakmeqkaioeg:
        goto gsgkgikagiuqeoie;
        eawkaqqqaeooyyws:
        
        $ikgwqyuyckaewsow = ManipulateArray::yaeiiwwyckwugsem($this->ugmceccgwaaaigiy());
        goto wykwsyuewigykqeg;
        awmcioiwswckueis:
        if (!$skikiykssoocmmik) {
            goto iakeaakmeqkaioeg;
        }
        goto auqkowcaacmmoqqk;
        oiyywaikucqwquie:
        cgqcuiaiciwumqyy:
        goto ggiqkimkqqwskeoa;
        wykwsyuewigykqeg:
        $ewgwqamkygiqaawc = '';
        goto ioouuggmywygqauo;
        ogqeqywosyqyaigy:
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
        goto eeyueqsugiwsyiig;
        eeyueqsugiwsyiig:
        if (!(!$aiowsaccomcoikus->yywskysiycwkwsgw() && is_array($this->ugmceccgwaaaigiy()))) {
            goto ysawesawywsauwoi;
        }
        goto eemcaiwmeswmukso;
        kimswwmiyciiwsuk:
        return $this;
        goto acaowkgayugqqgmk;
        mogmqciagcakuqkw:
        $this->fields[$aiowsaccomcoikus->mwikyscisascoeea()] = $aiowsaccomcoikus;
        goto kimswwmiyciiwsuk;
        gasqiyouygwogiku:
        ysawesawywsauwoi:
        goto mogmqciagcakuqkw;
        eemcaiwmeswmukso:
        $aiowsaccomcoikus->jyumyyugiwwiqomk(count($this->ugmceccgwaaaigiy()) + 1);
        goto gasqiyouygwogiku;
        acaowkgayugqqgmk:
    }
    
    public function ewweaossowcqywaw(array $ikgwqyuyckaewsow) : self
    {
        goto wscymqowwagkecqk;
        eeowmomscuckuoum:
        scumgsosuakacmee:
        goto auksmaiaiccmekam;
        wscymqowwagkecqk:
        foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) {
            goto yyqqwsawsocusuqc;
            yyqqwsawsocusuqc:
            if (!$aiowsaccomcoikus instanceof Field) {
                goto msmewamakoiksqok;
            }
            goto ceaccikuogcywkaw;
            ceaccikuogcywkaw:
            $this->mkksewyosgeumwsa($aiowsaccomcoikus);
            goto uywmokmuiikigyso;
            awckqcsumswoggcm:
            gaqqyqieyeoccskc:
            goto kiwsaeeagagkwooc;
            uywmokmuiikigyso:
            msmewamakoiksqok:
            goto awckqcsumswoggcm;
            kiwsaeeagagkwooc:
        }
        goto eeowmomscuckuoum;
        auksmaiaiccmekam:
        return $this;
        goto wquwyumimoaeeqkm;
        wquwyumimoaeeqkm:
    }
    
    public function cwqickkaaokiquuo(string $aiamqeawckcsuaou) : self
    {
        $this->qcgocuceocquqcuw("\x61\143\164\151\157\x6e", $aiamqeawckcsuaou);
        return $this;
    }
    
    public function cukciuymuoaqgwic(string $qgciuiagkkguykgs) : self
    {
        $this->qcgocuceocquqcuw("\x6d\x65\164\x68\x6f\x64", $qgciuiagkkguykgs);
        return $this;
    }
}
