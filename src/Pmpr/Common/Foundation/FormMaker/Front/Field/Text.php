<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613bb98fa102d             |
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
        parent::__construct('input', $sqeykgyoooqysmca, $aokagokqyuysuksm, $pkyyagewkiyckmwy, $mkqqqewsokcswckc);
        $this->qigsyyqgewgskemg('form-control');
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
        return $this->aseocggwwegcmqes('email');
    }
    
    public function esakmaucmeoucami() : self
    {
        return $this->aseocggwwegcmqes('search');
    }
    
    public function smigkcmumwkgamkk() : self
    {
        return $this->aseocggwwegcmqes('tel');
    }
    
    public function xkgcwkwsqysqamic() : self
    {
        return $this->aseocggwwegcmqes(self::URL);
    }
    
    public function sqsumkuougquscyg() : self
    {
        return $this->aseocggwwegcmqes('password');
    }
    
    public function kyiucygqsgequoys(?string $iwiewowoqmoekyqi) : self
    {
        $this->gysckqgokmciyqcg($iwiewowoqmoekyqi);
        return $this->qcgocuceocquqcuw('placeholder', $iwiewowoqmoekyqi);
    }
    
    public function umyeigwcmeakuqsu($qsuyiaikaquswaug = false) : self
    {
        if (!$this->qooeaookuemoqecm()) {
            $aokagokqyuysuksm = $this->mwikyscisascoeea();
            if ($qsuyiaikaquswaug) {
                $eqgoocgaqwqcimie = ManipulateServer::get($aokagokqyuysuksm);
            } else {
                $eqgoocgaqwqcimie = ManipulateServer::ayueggmoqeeukqmq($aokagokqyuysuksm);
            }
            $this->iygyugseyaqwywyg($eqgoocgaqwqcimie);
        }
        return $this;
    }
    
    public function qgsieamsswkgysow(array $ywmkwiwkosakssii = []) : void
    {
        if ($this->eyamqkqiykagecsw()) {
            $this->saemoowcasogykak(FormMaker::symcgieuakksimmu()->miocmcoykayoyyau()->eyamqkqiykagecsw($this->eyamqkqiykagecsw()));
        }
    }
}
