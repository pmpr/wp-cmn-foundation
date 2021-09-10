<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b1e8aa0c03             |
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
        goto qcaqeqscugwwgyci;
        mcqoyigqsewkkwgc:
        parent::__construct();
        goto eiguqiumekikicuw;
        qcaqeqscugwwgyci:
        $this->device = new Mobile_Detect();
        goto qsikciasasogymew;
        qsikciasasogymew:
        $this->browser = Browser::symcgieuakksimmu();
        goto mcqoyigqsewkkwgc;
        eiguqiumekikicuw:
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
        return $this->is("\155\157\142\151\x6c\145");
    }
    
    public function uggoocigiyiqkmww() : bool
    {
        return $this->is("\x63\157\155\160\165\164\x65\x72");
    }
    
    public function gsuucswsiuggysyw() : bool
    {
        return $this->is("\164\141\142\154\145\x74");
    }
    
    public function iwuicqgsgkaeikwa() : bool
    {
        return $this->is("\103\150\x72\157\155\145");
    }
    
    public function yksyugcywqmuqgwo() : bool
    {
        return $this->is("\106\x69\x72\x65\x66\157\x78");
    }
    
    private function is($eqgoocgaqwqcimie) : bool
    {
        goto yaaisamcwuuowiua;
        ueiwqykysgmsogyo:
        wwauaucuwsokocmm:
        goto uqsauksiquqaiiiw;
        acoqamisuacwkqyo:
        $syowsmcowosssaos = $this->gekgcikwymwuuuog();
        goto eugsgogsukuqwyou;
        eugsgogsukuqwyou:
        switch ($eqgoocgaqwqcimie) {
            case "\x63\x6f\155\x70\165\164\x65\x72":
                return !$syowsmcowosssaos->qawecuimqqcqwgsw();
            case "\x74\x61\142\154\x65\x74":
                return $syowsmcowosssaos->gsuucswsiuggysyw();
            case "\x6d\x6f\x62\x69\x6c\x65":
                return $syowsmcowosssaos->qawecuimqqcqwgsw() && !$syowsmcowosssaos->gsuucswsiuggysyw();
            case "\102\x72\141\x76\x65":
                return Browser::BROWSER_BRAVE === $quckouuiqiiowoei;
            case "\103\x68\x72\x6f\x6d\145":
                return Browser::BROWSER_CHROME === $quckouuiqiiowoei;
            case "\x46\151\x72\x65\146\x6f\x78":
                return Browser::BROWSER_FIREFOX === $quckouuiqiiowoei;
            case "\105\x64\x67\x65":
                return Browser::BROWSER_EDGE === $quckouuiqiiowoei;
            case "\111\x6e\x74\x65\162\x6e\145\x74\40\x45\170\160\x6c\x6f\162\145\x72":
                return Browser::BROWSER_IE === $quckouuiqiiowoei;
            case "\117\160\x65\162\x61":
                return Browser::BROWSER_OPERA === $quckouuiqiiowoei;
            case "\x53\x61\146\141\x72\151":
                return Browser::BROWSER_SAFARI === $quckouuiqiiowoei;
            case "\123\x61\x66\x61\x72\151\40\157\x6e\40\x69\120\x68\x6f\156\x65":
                return Browser::BROWSER_IPHONE === $quckouuiqiiowoei;
            default:
                return true;
        }
        goto yeyskwsagaowouas;
        yaaisamcwuuowiua:
        $quckouuiqiiowoei = $this->aagmmewiwysmgseq()->aagmmewiwysmgseq();
        goto acoqamisuacwkqyo;
        yeyskwsagaowouas:
        eccymasqomswiwug:
        goto ueiwqykysgmsogyo;
        uqsauksiquqaiiiw:
    }
}
