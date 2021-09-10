<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b2e4befc8c             |
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
        goto eiguqiumekikicuw;
        wwauaucuwsokocmm:
        $this->browser = Browser::symcgieuakksimmu();
        goto eccymasqomswiwug;
        eiguqiumekikicuw:
        $this->device = new Mobile_Detect();
        goto wwauaucuwsokocmm;
        eccymasqomswiwug:
        parent::__construct();
        goto yaaisamcwuuowiua;
        yaaisamcwuuowiua:
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
        return $this->is("\155\x6f\142\151\154\x65");
    }
    
    public function uggoocigiyiqkmww() : bool
    {
        return $this->is("\143\x6f\155\x70\x75\164\145\x72");
    }
    
    public function gsuucswsiuggysyw() : bool
    {
        return $this->is("\x74\141\x62\x6c\x65\164");
    }
    
    public function iwuicqgsgkaeikwa() : bool
    {
        return $this->is("\103\150\x72\157\155\145");
    }
    
    public function yksyugcywqmuqgwo() : bool
    {
        return $this->is("\106\x69\x72\x65\x66\x6f\x78");
    }
    
    private function is($eqgoocgaqwqcimie) : bool
    {
        goto yeyskwsagaowouas;
        iciimkyykgigcesk:
        eugsgogsukuqwyou:
        goto skecwsguwggckqom;
        yeyskwsagaowouas:
        $quckouuiqiiowoei = $this->aagmmewiwysmgseq()->aagmmewiwysmgseq();
        goto ueiwqykysgmsogyo;
        uqsauksiquqaiiiw:
        switch ($eqgoocgaqwqcimie) {
            case "\x63\x6f\155\x70\165\164\145\x72":
                return !$syowsmcowosssaos->qawecuimqqcqwgsw();
            case "\164\141\142\154\145\x74":
                return $syowsmcowosssaos->gsuucswsiuggysyw();
            case "\155\x6f\142\151\154\145":
                return $syowsmcowosssaos->qawecuimqqcqwgsw() && !$syowsmcowosssaos->gsuucswsiuggysyw();
            case "\x42\x72\x61\166\x65":
                return Browser::BROWSER_BRAVE === $quckouuiqiiowoei;
            case "\103\150\162\157\x6d\x65":
                return Browser::BROWSER_CHROME === $quckouuiqiiowoei;
            case "\106\x69\162\x65\146\157\170":
                return Browser::BROWSER_FIREFOX === $quckouuiqiiowoei;
            case "\x45\x64\x67\x65":
                return Browser::BROWSER_EDGE === $quckouuiqiiowoei;
            case "\111\156\x74\x65\x72\156\145\x74\40\105\170\160\x6c\157\162\145\x72":
                return Browser::BROWSER_IE === $quckouuiqiiowoei;
            case "\x4f\x70\145\162\x61":
                return Browser::BROWSER_OPERA === $quckouuiqiiowoei;
            case "\123\x61\146\x61\162\x69":
                return Browser::BROWSER_SAFARI === $quckouuiqiiowoei;
            case "\123\141\x66\x61\162\151\x20\157\156\x20\151\120\150\157\156\145":
                return Browser::BROWSER_IPHONE === $quckouuiqiiowoei;
            default:
                return true;
        }
        goto iciimkyykgigcesk;
        skecwsguwggckqom:
        acoqamisuacwkqyo:
        goto acwaqgoyqeucuaog;
        ueiwqykysgmsogyo:
        $syowsmcowosssaos = $this->gekgcikwymwuuuog();
        goto uqsauksiquqaiiiw;
        acwaqgoyqeucuaog:
    }
}
