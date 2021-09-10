<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613bb98fa102d             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\FormMaker\Front\Field;

use Pmpr\Common\Foundation\Manipulate\ManipulateFormat;
use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateHTML;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;

class Select extends OptionAwareField
{
    
    protected ?string $placeholder = '';
    
    public function __construct(?string $aokagokqyuysuksm, string $pkyyagewkiyckmwy = null, string $mkqqqewsokcswckc = null)
    {
        parent::__construct('select', 'select', $aokagokqyuysuksm, $pkyyagewkiyckmwy, $mkqqqewsokcswckc);
        $this->qigsyyqgewgskemg('custom-select');
    }
    
    public function sqquuscwqowicoqm() : ?string
    {
        return $this->placeholder;
    }
    
    public function uikgwcuascgeissw() : ?string
    {
        $pkyyagewkiyckmwy = parent::uikgwcuascgeissw();
        return $pkyyagewkiyckmwy ? $pkyyagewkiyckmwy : $this->sqquuscwqowicoqm();
    }
    
    public function souwykwwmyygqyqi() : ?string
    {
        $ewgwqamkygiqaawc = '';
        $qiouiwasaauyaaue = $this->gkwkqmwweiawigae();
        $iwiewowoqmoekyqi = $this->sqquuscwqowicoqm();
        if ($iwiewowoqmoekyqi) {
            $ewgwqamkygiqaawc .= ManipulateHTML::qgsekwygcgawekeq('option', ['disabled' => '', 'selected' => '', self::VALUE => ''], true, $iwiewowoqmoekyqi);
        }
        if (is_array($qiouiwasaauyaaue) && $qiouiwasaauyaaue) {
            foreach ($qiouiwasaauyaaue as $eqgoocgaqwqcimie => $omkysikckkcieckq) {
                if (is_string($omkysikckkcieckq)) {
                    $ymqmyyeuycgmigyo = $omkysikckkcieckq;
                } else {
                    $ymqmyyeuycgmigyo = ManipulateArray::get($omkysikckkcieckq, self::NAME);
                }
                $wwgucssaecqekuek = ManipulateArray::get($omkysikckkcieckq, self::ATTRS, []);
                $wwgucssaecqekuek = ManipulateFormat::omaawkkwwyesqwcc([self::VALUE => $eqgoocgaqwqcimie, 'cyqwkiwqesscguga' => $ymqmyyeuycgmigyo], $wwgucssaecqekuek);
                if ($eqgoocgaqwqcimie == $this->qooeaookuemoqecm()) {
                    $wwgucssaecqekuek['selected'] = '';
                }
                $ewgwqamkygiqaawc .= ManipulateHTML::qgsekwygcgawekeq('option', $wwgucssaecqekuek, true, $ymqmyyeuycgmigyo);
                ssywsaaqqaucesau:
            }
            qyyyycwaookqaoke:
        }
        return $ewgwqamkygiqaawc;
    }
    
    public function kyiucygqsgequoys(string $iwiewowoqmoekyqi) : self
    {
        $this->placeholder = $iwiewowoqmoekyqi;
        return $this;
    }
    
    public function mswqgegakmgmewwq() : self
    {
        $this->qigsyyqgewgskemg('custom-select-sm')->qigsyyqgewgskemg('lh-1');
        return $this;
    }
}
