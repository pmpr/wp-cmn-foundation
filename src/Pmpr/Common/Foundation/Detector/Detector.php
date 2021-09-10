<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b6c65a2d22             |
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
        eugsgogsukuqwyou:
        $this->device = new Mobile_Detect();
        goto yeyskwsagaowouas;
        ueiwqykysgmsogyo:
        parent::__construct();
        goto uqsauksiquqaiiiw;
        yeyskwsagaowouas:
        $this->browser = Browser::symcgieuakksimmu();
        goto ueiwqykysgmsogyo;
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
        return $this->is("\x6d\157\142\x69\154\x65");
    }
    
    public function uggoocigiyiqkmww() : bool
    {
        return $this->is("\143\x6f\155\x70\x75\164\x65\x72");
    }
    
    public function gsuucswsiuggysyw() : bool
    {
        return $this->is("\x74\x61\x62\x6c\145\164");
    }
    
    public function iwuicqgsgkaeikwa() : bool
    {
        return $this->is("\103\x68\162\157\155\x65");
    }
    
    public function yksyugcywqmuqgwo() : bool
    {
        return $this->is("\106\x69\x72\x65\146\x6f\x78");
    }
    
    private function is($eqgoocgaqwqcimie) : bool
    {
        goto acwaqgoyqeucuaog;
        uiucgkyeaqmqkyqs:
        iciimkyykgigcesk:
        goto iqgwecwqkqwkmkig;
        akkwmeyiiekgcemi:
        switch ($eqgoocgaqwqcimie) {
            case "\x63\x6f\155\160\x75\x74\145\162":
                return !$syowsmcowosssaos->qawecuimqqcqwgsw();
            case "\164\141\x62\154\145\x74":
                return $syowsmcowosssaos->gsuucswsiuggysyw();
            case "\x6d\x6f\x62\x69\x6c\145":
                return $syowsmcowosssaos->qawecuimqqcqwgsw() && !$syowsmcowosssaos->gsuucswsiuggysyw();
            case "\x42\162\x61\x76\145":
                return Browser::BROWSER_BRAVE === $quckouuiqiiowoei;
            case "\103\x68\162\157\155\x65":
                return Browser::BROWSER_CHROME === $quckouuiqiiowoei;
            case "\106\151\x72\x65\146\x6f\x78":
                return Browser::BROWSER_FIREFOX === $quckouuiqiiowoei;
            case "\105\x64\147\x65":
                return Browser::BROWSER_EDGE === $quckouuiqiiowoei;
            case "\x49\156\x74\145\162\156\145\x74\x20\105\170\x70\154\x6f\x72\x65\162":
                return Browser::BROWSER_IE === $quckouuiqiiowoei;
            case "\117\160\x65\162\x61":
                return Browser::BROWSER_OPERA === $quckouuiqiiowoei;
            case "\x53\x61\x66\x61\x72\x69":
                return Browser::BROWSER_SAFARI === $quckouuiqiiowoei;
            case "\123\141\x66\x61\162\x69\x20\157\x6e\40\151\x50\x68\x6f\156\145":
                return Browser::BROWSER_IPHONE === $quckouuiqiiowoei;
            default:
                return true;
        }
        goto uskmmqwwysiawwwa;
        uskmmqwwysiawwwa:
        skecwsguwggckqom:
        goto uiucgkyeaqmqkyqs;
        siykkykaeiswaqmc:
        $syowsmcowosssaos = $this->gekgcikwymwuuuog();
        goto akkwmeyiiekgcemi;
        acwaqgoyqeucuaog:
        $quckouuiqiiowoei = $this->aagmmewiwysmgseq()->aagmmewiwysmgseq();
        goto siykkykaeiswaqmc;
        iqgwecwqkqwkmkig:
    }
}
