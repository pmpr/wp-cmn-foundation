<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b6c65a2d22             |
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
        parent::__construct("\x69\x6e\160\x75\164", $sqeykgyoooqysmca, $aokagokqyuysuksm, $pkyyagewkiyckmwy, $mkqqqewsokcswckc);
        $this->qigsyyqgewgskemg("\x66\157\162\155\55\143\157\x6e\x74\162\x6f\154");
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
        return $this->aseocggwwegcmqes("\145\x6d\x61\151\x6c");
    }
    
    public function esakmaucmeoucami() : self
    {
        return $this->aseocggwwegcmqes("\x73\x65\x61\162\x63\x68");
    }
    
    public function smigkcmumwkgamkk() : self
    {
        return $this->aseocggwwegcmqes("\164\x65\x6c");
    }
    
    public function xkgcwkwsqysqamic() : self
    {
        return $this->aseocggwwegcmqes(self::URL);
    }
    
    public function sqsumkuougquscyg() : self
    {
        return $this->aseocggwwegcmqes("\x70\x61\x73\x73\167\157\x72\x64");
    }
    
    public function kyiucygqsgequoys(?string $iwiewowoqmoekyqi) : self
    {
        $this->gysckqgokmciyqcg($iwiewowoqmoekyqi);
        return $this->qcgocuceocquqcuw("\160\154\x61\x63\145\x68\x6f\x6c\x64\x65\x72", $iwiewowoqmoekyqi);
    }
    
    public function umyeigwcmeakuqsu($qsuyiaikaquswaug = false) : self
    {
        goto iegeiekyeqckmise;
        gmmoskogsamiimaw:
        $this->iygyugseyaqwywyg($eqgoocgaqwqcimie);
        goto guemiwyaaiokymkk;
        skeosquyqemagyii:
        return $this;
        goto wmqgyceaymweimmu;
        yiakeoiamgskcgwe:
        wcmeymioukakwmii:
        goto gmmoskogsamiimaw;
        guemiwyaaiokymkk:
        oqysqmwmogqewsgo:
        goto skeosquyqemagyii;
        iqsqgccwyeomyawk:
        if ($qsuyiaikaquswaug) {
            goto ugwqyegaaskmucay;
        }
        goto iokasswuskcumqkc;
        kuycusakouywkiiw:
        $eqgoocgaqwqcimie = ManipulateServer::get($aokagokqyuysuksm);
        goto yiakeoiamgskcgwe;
        iokasswuskcumqkc:
        $eqgoocgaqwqcimie = ManipulateServer::ayueggmoqeeukqmq($aokagokqyuysuksm);
        goto kakeaucaseukciea;
        egsqoeumwyykkuuy:
        $aokagokqyuysuksm = $this->mwikyscisascoeea();
        goto iqsqgccwyeomyawk;
        kakeaucaseukciea:
        goto wcmeymioukakwmii;
        goto qkuuooygeauqoqqm;
        iegeiekyeqckmise:
        if ($this->qooeaookuemoqecm()) {
            goto oqysqmwmogqewsgo;
        }
        goto egsqoeumwyykkuuy;
        qkuuooygeauqoqqm:
        ugwqyegaaskmucay:
        goto kuycusakouywkiiw;
        wmqgyceaymweimmu:
    }
    
    public function qgsieamsswkgysow(array $ywmkwiwkosakssii = []) : void
    {
        goto uqwgiykoaeaaiayu;
        uqwgiykoaeaaiayu:
        if (!$this->eyamqkqiykagecsw()) {
            goto yeqeyiiywssgsyou;
        }
        goto mumskauyosuokigg;
        yoscseoiqicoccku:
        yeqeyiiywssgsyou:
        goto syeissweoweigoug;
        mumskauyosuokigg:
        $this->saemoowcasogykak(FormMaker::symcgieuakksimmu()->miocmcoykayoyyau()->eyamqkqiykagecsw($this->eyamqkqiykagecsw()));
        goto yoscseoiqicoccku;
        syeissweoweigoug:
    }
}
