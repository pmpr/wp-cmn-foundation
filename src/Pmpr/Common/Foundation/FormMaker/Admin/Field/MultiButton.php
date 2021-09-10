<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613bb98fa102d             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\FormMaker\Admin\Field;


class MultiButton extends Field
{
    
    protected array $buttons = [];
    
    public function __construct(?string $aokagokqyuysuksm, ?string $ymqmyyeuycgmigyo = null, ?string $mkqqqewsokcswckc = null)
    {
        parent::__construct('multi_buttons', $aokagokqyuysuksm, $ymqmyyeuycgmigyo, $mkqqqewsokcswckc);
        $this->qigsyyqgewgskemg('ml-1');
    }
    
    public function micmwmywmkguiyyk()
    {
        return $this->qigsyyqgewgskemg('button-primary');
    }
    
    public function imswwiyicyksouus() : array
    {
        return $this->buttons;
    }
    
    public function igmamuiesywmkgeu(Button $gskauacumcmekigs) : self
    {
        $this->buttons[$gskauacumcmekigs->mwikyscisascoeea()] = $gskauacumcmekigs;
        return $this;
    }
    
    public function uqawesackiomqgga($kkeqqkkkqwkocsyu, array $ywmkwiwkosakssii = []) : ?array
    {
        if (isset($kkeqqkkkqwkocsyu['buttons']) && $kkeqqkkkqwkocsyu['buttons'] && is_array($kkeqqkkkqwkocsyu['buttons'])) {
            foreach ($kkeqqkkkqwkocsyu['buttons'] as $uusmaiomayssaecw => $gskauacumcmekigs) {
                if ($gskauacumcmekigs instanceof Field) {
                    $kkeqqkkkqwkocsyu['buttons'][$uusmaiomayssaecw] = $gskauacumcmekigs->sacmkccceuywoqsq(false, $ywmkwiwkosakssii);
                }
                aukucaieceiwesmm:
            }
            iauwuugggmegwisk:
        }
        return parent::uqawesackiomqgga($kkeqqkkkqwkocsyu, $ywmkwiwkosakssii);
    }
}
