<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613bb98fa102d             |
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
        parent::__construct('form', $aokagokqyuysuksm);
        $this->cukciuymuoaqgwic('POST');
    }
    
    public function souwykwwmyygqyqi() : ?string
    {
        
        $ikgwqyuyckaewsow = ManipulateArray::yaeiiwwyckwugsem($this->ugmceccgwaaaigiy());
        $ewgwqamkygiqaawc = '';
        foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) {
            if ($aiowsaccomcoikus instanceof Element) {
                $ewgwqamkygiqaawc .= $aiowsaccomcoikus->render();
            }
            ysiqakyaiooyscwy:
        }
        ygcgoaokauigwuus:
        $skikiykssoocmmik = $this->kmiowswwgwcocguk();
        if ($skikiykssoocmmik) {
            $ewgwqamkygiqaawc = str_replace(self::CHILD_CONTENT, $ewgwqamkygiqaawc, $skikiykssoocmmik->render());
        }
        return $ewgwqamkygiqaawc;
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
        if (!$aiowsaccomcoikus->yywskysiycwkwsgw() && is_array($this->ugmceccgwaaaigiy())) {
            $aiowsaccomcoikus->jyumyyugiwwiqomk(count($this->ugmceccgwaaaigiy()) + 1);
        }
        $this->fields[$aiowsaccomcoikus->mwikyscisascoeea()] = $aiowsaccomcoikus;
        return $this;
    }
    
    public function ewweaossowcqywaw(array $ikgwqyuyckaewsow) : self
    {
        foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) {
            if ($aiowsaccomcoikus instanceof Field) {
                $this->mkksewyosgeumwsa($aiowsaccomcoikus);
            }
            ousmyagwsiooumos:
        }
        auumaoycmsmsgigs:
        return $this;
    }
    
    public function cwqickkaaokiquuo(string $aiamqeawckcsuaou) : self
    {
        $this->qcgocuceocquqcuw('action', $aiamqeawckcsuaou);
        return $this;
    }
    
    public function cukciuymuoaqgwic(string $qgciuiagkkguykgs) : self
    {
        $this->qcgocuceocquqcuw('method', $qgciuiagkkguykgs);
        return $this;
    }
}
