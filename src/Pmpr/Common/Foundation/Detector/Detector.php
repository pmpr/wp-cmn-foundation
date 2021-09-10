<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b499786a1b             |
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
        goto eugsgogsukuqwyou;
        yeyskwsagaowouas:
        $this->browser = Browser::symcgieuakksimmu();
        goto ueiwqykysgmsogyo;
        ueiwqykysgmsogyo:
        parent::__construct();
        goto uqsauksiquqaiiiw;
        eugsgogsukuqwyou:
        $this->device = new Mobile_Detect();
        goto yeyskwsagaowouas;
        uqsauksiquqaiiiw:
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
        return $this->is("\x63\157\x6d\x70\165\164\x65\162");
    }
    
    public function gsuucswsiuggysyw() : bool
    {
        return $this->is("\x74\141\x62\x6c\145\164");
    }
    
    public function iwuicqgsgkaeikwa() : bool
    {
        return $this->is("\x43\150\162\x6f\x6d\x65");
    }
    
    public function yksyugcywqmuqgwo() : bool
    {
        return $this->is("\106\151\162\x65\x66\157\x78");
    }
    
    private function is($eqgoocgaqwqcimie) : bool
    {
        goto acwaqgoyqeucuaog;
        uiucgkyeaqmqkyqs:
        iciimkyykgigcesk:
        goto iqgwecwqkqwkmkig;
        acwaqgoyqeucuaog:
        $quckouuiqiiowoei = $this->aagmmewiwysmgseq()->aagmmewiwysmgseq();
        goto siykkykaeiswaqmc;
        siykkykaeiswaqmc:
        $syowsmcowosssaos = $this->gekgcikwymwuuuog();
        goto akkwmeyiiekgcemi;
        uskmmqwwysiawwwa:
        skecwsguwggckqom:
        goto uiucgkyeaqmqkyqs;
        akkwmeyiiekgcemi:
        switch ($eqgoocgaqwqcimie) {
            case "\x63\157\155\160\x75\x74\x65\162":
                return !$syowsmcowosssaos->qawecuimqqcqwgsw();
            case "\x74\141\x62\154\145\x74":
                return $syowsmcowosssaos->gsuucswsiuggysyw();
            case "\155\x6f\142\x69\x6c\x65":
                return $syowsmcowosssaos->qawecuimqqcqwgsw() && !$syowsmcowosssaos->gsuucswsiuggysyw();
            case "\x42\x72\x61\166\145":
                return Browser::BROWSER_BRAVE === $quckouuiqiiowoei;
            case "\103\x68\162\x6f\x6d\x65":
                return Browser::BROWSER_CHROME === $quckouuiqiiowoei;
            case "\106\x69\x72\145\146\157\x78":
                return Browser::BROWSER_FIREFOX === $quckouuiqiiowoei;
            case "\105\x64\147\145":
                return Browser::BROWSER_EDGE === $quckouuiqiiowoei;
            case "\111\x6e\164\145\162\156\x65\164\40\x45\x78\160\x6c\x6f\x72\145\162":
                return Browser::BROWSER_IE === $quckouuiqiiowoei;
            case "\x4f\160\145\x72\x61":
                return Browser::BROWSER_OPERA === $quckouuiqiiowoei;
            case "\x53\141\x66\x61\162\151":
                return Browser::BROWSER_SAFARI === $quckouuiqiiowoei;
            case "\123\141\146\141\162\151\x20\157\156\40\151\x50\150\157\x6e\x65":
                return Browser::BROWSER_IPHONE === $quckouuiqiiowoei;
            default:
                return true;
        }
        goto uskmmqwwysiawwwa;
        iqgwecwqkqwkmkig:
    }
}
