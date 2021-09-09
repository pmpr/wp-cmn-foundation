<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613a1be32d755             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\FormMaker\Front\Field;

use Pmpr\Common\Foundation\FormMaker\FormMaker;
use Pmpr\Common\Foundation\Manipulate\ManipulateServer;

class Text extends Field
{
    
    protected ?string $icon = null;
    
    public function __construct(?string $aokagokqyuysuksm, string $pkyyagewkiyckmwy = null, string $mkqqqewsokcswckc = null, string $sqeykgyoooqysmca = self::TEXT)
    {
        parent::__construct("\151\x6e\160\x75\x74", $sqeykgyoooqysmca, $aokagokqyuysuksm, $pkyyagewkiyckmwy, $mkqqqewsokcswckc);
        $this->qigsyyqgewgskemg("\146\x6f\162\x6d\55\143\x6f\156\164\162\157\x6c");
    }
    
    public function eyamqkqiykagecsw() : ?string
    {
        return $this->icon;
    }
    
    public function saemoowcasogykak(?string $wkaqekwwgqsqwcoi) : self
    {
        $this->icon = $wkaqekwwgqsqwcoi;
        return $this;
    }
    
    public function mkiaygiogeeyogqm() : self
    {
        $this->soqmwakwiegiceeo();
        return $this->aseocggwwegcmqes("\145\155\141\x69\154");
    }
    
    public function esakmaucmeoucami() : self
    {
        return $this->aseocggwwegcmqes("\x73\x65\141\x72\x63\x68");
    }
    
    public function smigkcmumwkgamkk() : self
    {
        return $this->aseocggwwegcmqes("\164\x65\154");
    }
    
    public function xkgcwkwsqysqamic() : self
    {
        return $this->aseocggwwegcmqes(self::URL);
    }
    
    public function sqsumkuougquscyg() : self
    {
        return $this->aseocggwwegcmqes("\x70\x61\x73\163\x77\157\x72\144");
    }
    
    public function kyiucygqsgequoys(?string $iwiewowoqmoekyqi) : self
    {
        $this->gysckqgokmciyqcg($iwiewowoqmoekyqi);
        return $this->qcgocuceocquqcuw("\160\x6c\x61\x63\145\x68\x6f\x6c\x64\x65\x72", $iwiewowoqmoekyqi);
    }
    
    public function umyeigwcmeakuqsu($qsuyiaikaquswaug = false) : self
    {
        goto eikwaewqcysuywmw;
        cyakakoyscyyseim:
        $this->iygyugseyaqwywyg($eqgoocgaqwqcimie);
        goto kegswsuciueamysc;
        sgsuggymsisiisya:
        guqakeyeceygukgo:
        goto kemseeaykemmgosi;
        kemseeaykemmgosi:
        $eqgoocgaqwqcimie = ManipulateServer::get($aokagokqyuysuksm);
        goto rsiscqyuuaqqukaq;
        kegswsuciueamysc:
        seqicmqaumeoweik:
        goto gcwsyykomkieycmo;
        qasqismygkemyaka:
        $eqgoocgaqwqcimie = ManipulateServer::ayueggmoqeeukqmq($aokagokqyuysuksm);
        goto yaigsowoksoegqig;
        lowoswoqauswsswm:
        if ($qsuyiaikaquswaug) {
            goto guqakeyeceygukgo;
        }
        goto qasqismygkemyaka;
        wayumgcgmkiqwouu:
        $aokagokqyuysuksm = $this->mwikyscisascoeea();
        goto lowoswoqauswsswm;
        eikwaewqcysuywmw:
        if ($this->qooeaookuemoqecm()) {
            goto seqicmqaumeoweik;
        }
        goto wayumgcgmkiqwouu;
        yaigsowoksoegqig:
        goto kioecaokqiyeyimw;
        goto sgsuggymsisiisya;
        rsiscqyuuaqqukaq:
        kioecaokqiyeyimw:
        goto cyakakoyscyyseim;
        gcwsyykomkieycmo:
        return $this;
        goto wmmicyyikqyykeqm;
        wmmicyyikqyykeqm:
    }
    
    public function qgsieamsswkgysow(array $ywmkwiwkosakssii = []) : void
    {
        goto gsiggywymmcuoyow;
        ecoyeceqcymocmge:
        $this->saemoowcasogykak(FormMaker::symcgieuakksimmu()->miocmcoykayoyyau()->eyamqkqiykagecsw($this->eyamqkqiykagecsw()));
        goto ayekommagiogccge;
        ayekommagiogccge:
        cmsosmamsmyuogsi:
        goto sgwigiywwyuoakok;
        gsiggywymmcuoyow:
        if (!$this->eyamqkqiykagecsw()) {
            goto cmsosmamsmyuogsi;
        }
        goto ecoyeceqcymocmge;
        sgwigiywwyuoakok:
    }
}
