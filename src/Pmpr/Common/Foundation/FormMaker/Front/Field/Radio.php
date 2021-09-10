<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613bb98fa102d             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\FormMaker\Front\Field;

use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateHTML;

class Radio extends OptionAwareField
{
    
    protected bool $inline = false;
    
    public function __construct(?string $aokagokqyuysuksm, string $pkyyagewkiyckmwy = null, string $mkqqqewsokcswckc = null)
    {
        parent::__construct('div', 'radio', $aokagokqyuysuksm, $pkyyagewkiyckmwy, $mkqqqewsokcswckc);
    }
    
    public function mkmssscwmeekwgqo() : self
    {
        $this->inline = true;
        return $this;
    }
    
    public function wmociykwcyesssui() : bool
    {
        return $this->inline;
    }
    
    public function souwykwwmyygqyqi() : ?string
    {
        $ewgwqamkygiqaawc = '';
        $qiouiwasaauyaaue = $this->gkwkqmwweiawigae();
        if (is_array($qiouiwasaauyaaue) && $qiouiwasaauyaaue) {
            $momcykaoccoymeig = 1;
            $ggauoeuaesiymgee = $this->oiswysuiioecsaae();
            foreach ($qiouiwasaauyaaue as $eqgoocgaqwqcimie => $meqocwsecsywiiqs) {
                $aokagokqyuysuksm = $this->mwikyscisascoeea();
                $wwgucssaecqekuek = ['class' => 'custom-control-input', self::ID => $aokagokqyuysuksm . $momcykaoccoymeig, self::TYPE => 'radio', self::NAME => $aokagokqyuysuksm, self::VALUE => $eqgoocgaqwqcimie];
                if ($ggauoeuaesiymgee && $ggauoeuaesiymgee === $eqgoocgaqwqcimie || !$ggauoeuaesiymgee && $momcykaoccoymeig == 1) {
                    $wwgucssaecqekuek['checked'] = true;
                }
                $euueacigmgoqkimu = ManipulateHTML::qgsekwygcgawekeq('input', $wwgucssaecqekuek);
                $pkyyagewkiyckmwy = ManipulateHTML::qgsekwygcgawekeq('label', ['class' => 'custom-control-label', 'for' => $aokagokqyuysuksm . $momcykaoccoymeig], true, $meqocwsecsywiiqs);
                $egkyssmuqcwaciya = 'custom-control custom-radio';
                if ($this->wmociykwcyesssui()) {
                    $egkyssmuqcwaciya .= ' custom-control-inline';
                }
                $ewgwqamkygiqaawc .= ManipulateHTML::uuccukgasskgimsq('div', ['class' => $egkyssmuqcwaciya], [$euueacigmgoqkimu, $pkyyagewkiyckmwy]);
                $momcykaoccoymeig++;
                wwcqoeuwskquakwy:
            }
            omuauimgkygcecsc:
        }
        return $this->uikgwcuascgeissw() . $ewgwqamkygiqaawc;
    }
}
