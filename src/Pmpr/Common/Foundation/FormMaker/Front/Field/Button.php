<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613bb98fa102d             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\FormMaker\Front\Field;

use Pmpr\Common\Foundation\Manipulate\ManipulateFormat;
use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateHTML;

class Button extends Field
{
    
    protected bool $left = true;
    
    public function __construct(string $aokagokqyuysuksm = null, string $pkyyagewkiyckmwy = null)
    {
        parent::__construct('button', 'button', $aokagokqyuysuksm, $pkyyagewkiyckmwy);
        $this->qigsyyqgewgskemg('btn');
        $this->gysckqgokmciyqcg($pkyyagewkiyckmwy);
    }
    
    public function souwykwwmyygqyqi() : ?string
    {
        return $this->uikgwcuascgeissw();
    }
    
    public function heckyiakawemwsmu() : bool
    {
        return $this->left;
    }
    
    public function kkoaikueoggssssc(bool $iyqeksimguuekuum) : self
    {
        $this->left = $iyqeksimguuekuum;
        return $this;
    }
    
    public function iswqmkousoeksaae($ywmkwiwkosakssii = []) : self
    {
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, [
            'size' => 'sm',
            
            'type' => 'border',
            
            'hidden' => true,
            'loading' => sprintf('%s...', __('Loading', PR__CMN__FOUNDATION)),
        ]);
        $pkyyagewkiyckmwy = $this->uikgwcuascgeissw();
        $sqeykgyoooqysmca = $ywmkwiwkosakssii['type'];
        $egkyssmuqcwaciya = "my-auto pr-spinner spinner-holder spinner-{$sqeykgyoooqysmca} spinner-{$sqeykgyoooqysmca}-{$ywmkwiwkosakssii['size']}";
        if (!$ywmkwiwkosakssii['hidden']) {
            $egkyssmuqcwaciya .= ' show';
        }
        $omiygkiiauwgkegg = ManipulateHTML::gmqyuaqwgiayskei('', ['aria-hidden' => 'true', 'class' => $egkyssmuqcwaciya, 'role' => 'status']);
        $omiygkiiauwgkegg .= ManipulateHTML::gmqyuaqwgiayskei($ywmkwiwkosakssii['loading'], ['class' => 'sr-only']);
        $pkyyagewkiyckmwy = ManipulateHTML::gmqyuaqwgiayskei($pkyyagewkiyckmwy, ['class' => 'px-2']);
        $this->qigsyyqgewgskemg('d-flex');
        return $this->eqggmusacqoqcwuk($omiygkiiauwgkegg . $pkyyagewkiyckmwy);
    }
}
