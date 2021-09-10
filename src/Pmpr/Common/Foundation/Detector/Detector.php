<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613bb98fa102d             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Detector;

use Mobile_Detect;

class Detector extends Common
{
    
    protected ?Browser $browser = null;
    
    protected ?Mobile_Detect $device = null;
    public function __construct()
    {
        $this->device = new Mobile_Detect();
        $this->browser = Browser::symcgieuakksimmu();
        parent::__construct();
    }
    
    public function cyciimaqkakwcqqy($acsweksygkmmgggk) : bool
    {
        return $acsweksygkmmgggk && !($this->qawecuimqqcqwgsw() || $this->gsuucswsiuggysyw());
    }
    
    public function gekgcikwymwuuuog() : ?Mobile_Detect
    {
        return $this->device;
    }
    
    public function aagmmewiwysmgseq() : ?Browser
    {
        return $this->browser;
    }
    
    public function qawecuimqqcqwgsw() : bool
    {
        return $this->is('mobile');
    }
    
    public function uggoocigiyiqkmww() : bool
    {
        return $this->is('computer');
    }
    
    public function gsuucswsiuggysyw() : bool
    {
        return $this->is('tablet');
    }
    
    public function iwuicqgsgkaeikwa() : bool
    {
        return $this->is('Chrome');
    }
    
    public function yksyugcywqmuqgwo() : bool
    {
        return $this->is('Firefox');
    }
    
    private function is($eqgoocgaqwqcimie) : bool
    {
        $quckouuiqiiowoei = $this->aagmmewiwysmgseq()->aagmmewiwysmgseq();
        $syowsmcowosssaos = $this->gekgcikwymwuuuog();
        switch ($eqgoocgaqwqcimie) {
            case 'computer':
                return !$syowsmcowosssaos->qawecuimqqcqwgsw();
            case 'tablet':
                return $syowsmcowosssaos->gsuucswsiuggysyw();
            case 'mobile':
                return $syowsmcowosssaos->qawecuimqqcqwgsw() && !$syowsmcowosssaos->gsuucswsiuggysyw();
            case 'Brave':
                return Browser::BROWSER_BRAVE === $quckouuiqiiowoei;
            case 'Chrome':
                return Browser::BROWSER_CHROME === $quckouuiqiiowoei;
            case 'Firefox':
                return Browser::BROWSER_FIREFOX === $quckouuiqiiowoei;
            case 'Edge':
                return Browser::BROWSER_EDGE === $quckouuiqiiowoei;
            case 'Internet Explorer':
                return Browser::BROWSER_IE === $quckouuiqiiowoei;
            case 'Opera':
                return Browser::BROWSER_OPERA === $quckouuiqiiowoei;
            case 'Safari':
                return Browser::BROWSER_SAFARI === $quckouuiqiiowoei;
            case 'Safari on iPhone':
                return Browser::BROWSER_IPHONE === $quckouuiqiiowoei;
            default:
                return true;
        }
        usymasgsyqgsuocg:
        eucqomyqykgoiuge:
    }
}
