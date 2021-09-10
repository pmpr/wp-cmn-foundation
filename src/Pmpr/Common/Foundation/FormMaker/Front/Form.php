<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b5973b89a9             |
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
        parent::__construct("\146\157\162\x6d", $aokagokqyuysuksm);
        $this->cukciuymuoaqgwic("\x50\117\x53\x54");
    }
    
    public function souwykwwmyygqyqi() : ?string
    {
        goto iakeaakmeqkaioeg;
        eawkaqqqaeooyyws:
        $ewgwqamkygiqaawc = '';
        goto wykwsyuewigykqeg;
        wykwsyuewigykqeg:
        foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) {
            goto meqcqssumqokgkqc;
            aywemsgsqqwuwasc:
            cgqcuiaiciwumqyy:
            goto mqueqquuggcakwcy;
            meqcqssumqokgkqc:
            if (!$aiowsaccomcoikus instanceof Element) {
                goto essaksagsgmwyccs;
            }
            goto swiqeuyomyeicqea;
            mwskikiiuqwkeiqq:
            essaksagsgmwyccs:
            goto aywemsgsqqwuwasc;
            swiqeuyomyeicqea:
            $ewgwqamkygiqaawc .= $aiowsaccomcoikus->render();
            goto mwskikiiuqwkeiqq;
            mqueqquuggcakwcy:
        }
        goto ioouuggmywygqauo;
        skyosyooeugyimmm:
        return $ewgwqamkygiqaawc;
        goto gsgkgikagiuqeoie;
        ggiqkimkqqwskeoa:
        if (!$skikiykssoocmmik) {
            goto mggewcywmuekqcaq;
        }
        goto awmcioiwswckueis;
        ioouuggmywygqauo:
        ukqyaweoikcegyco:
        goto oiyywaikucqwquie;
        oiyywaikucqwquie:
        $skikiykssoocmmik = $this->kmiowswwgwcocguk();
        goto ggiqkimkqqwskeoa;
        iakeaakmeqkaioeg:
        
        $ikgwqyuyckaewsow = ManipulateArray::yaeiiwwyckwugsem($this->ugmceccgwaaaigiy());
        goto eawkaqqqaeooyyws;
        awmcioiwswckueis:
        $ewgwqamkygiqaawc = str_replace(self::CHILD_CONTENT, $ewgwqamkygiqaawc, $skikiykssoocmmik->render());
        goto auqkowcaacmmoqqk;
        auqkowcaacmmoqqk:
        mggewcywmuekqcaq:
        goto skyosyooeugyimmm;
        gsgkgikagiuqeoie:
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
        goto ysawesawywsauwoi;
        gasqiyouygwogiku:
        $this->fields[$aiowsaccomcoikus->mwikyscisascoeea()] = $aiowsaccomcoikus;
        goto mogmqciagcakuqkw;
        mogmqciagcakuqkw:
        return $this;
        goto kimswwmiyciiwsuk;
        eeyueqsugiwsyiig:
        $aiowsaccomcoikus->jyumyyugiwwiqomk(count($this->ugmceccgwaaaigiy()) + 1);
        goto eemcaiwmeswmukso;
        ysawesawywsauwoi:
        if (!(!$aiowsaccomcoikus->yywskysiycwkwsgw() && is_array($this->ugmceccgwaaaigiy()))) {
            goto ogqeqywosyqyaigy;
        }
        goto eeyueqsugiwsyiig;
        eemcaiwmeswmukso:
        ogqeqywosyqyaigy:
        goto gasqiyouygwogiku;
        kimswwmiyciiwsuk:
    }
    
    public function ewweaossowcqywaw(array $ikgwqyuyckaewsow) : self
    {
        goto kiwsaeeagagkwooc;
        eeowmomscuckuoum:
        return $this;
        goto auksmaiaiccmekam;
        wscymqowwagkecqk:
        acaowkgayugqqgmk:
        goto eeowmomscuckuoum;
        kiwsaeeagagkwooc:
        foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) {
            goto msmewamakoiksqok;
            ceaccikuogcywkaw:
            gaqqyqieyeoccskc:
            goto uywmokmuiikigyso;
            msmewamakoiksqok:
            if (!$aiowsaccomcoikus instanceof Field) {
                goto gaqqyqieyeoccskc;
            }
            goto yyqqwsawsocusuqc;
            yyqqwsawsocusuqc:
            $this->mkksewyosgeumwsa($aiowsaccomcoikus);
            goto ceaccikuogcywkaw;
            uywmokmuiikigyso:
            scumgsosuakacmee:
            goto awckqcsumswoggcm;
            awckqcsumswoggcm:
        }
        goto wscymqowwagkecqk;
        auksmaiaiccmekam:
    }
    
    public function cwqickkaaokiquuo(string $aiamqeawckcsuaou) : self
    {
        $this->qcgocuceocquqcuw("\x61\143\164\x69\x6f\x6e", $aiamqeawckcsuaou);
        return $this;
    }
    
    public function cukciuymuoaqgwic(string $qgciuiagkkguykgs) : self
    {
        $this->qcgocuceocquqcuw("\x6d\x65\164\150\157\144", $qgciuiagkkguykgs);
        return $this;
    }
}
