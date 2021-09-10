<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b3993be3fb             |
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
        parent::__construct("\x69\156\x70\x75\164", $sqeykgyoooqysmca, $aokagokqyuysuksm, $pkyyagewkiyckmwy, $mkqqqewsokcswckc);
        $this->qigsyyqgewgskemg("\x66\x6f\162\155\x2d\143\157\x6e\x74\162\x6f\154");
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
        return $this->aseocggwwegcmqes("\x65\x6d\x61\151\x6c");
    }
    
    public function esakmaucmeoucami() : self
    {
        return $this->aseocggwwegcmqes("\163\145\x61\x72\143\x68");
    }
    
    public function smigkcmumwkgamkk() : self
    {
        return $this->aseocggwwegcmqes("\x74\x65\154");
    }
    
    public function xkgcwkwsqysqamic() : self
    {
        return $this->aseocggwwegcmqes(self::URL);
    }
    
    public function sqsumkuougquscyg() : self
    {
        return $this->aseocggwwegcmqes("\160\x61\163\163\167\157\x72\x64");
    }
    
    public function kyiucygqsgequoys(?string $iwiewowoqmoekyqi) : self
    {
        $this->gysckqgokmciyqcg($iwiewowoqmoekyqi);
        return $this->qcgocuceocquqcuw("\160\154\x61\x63\x65\150\157\x6c\144\145\162", $iwiewowoqmoekyqi);
    }
    
    public function umyeigwcmeakuqsu($qsuyiaikaquswaug = false) : self
    {
        goto oqysqmwmogqewsgo;
        kakeaucaseukciea:
        eswsgqmeomgauiew:
        goto qkuuooygeauqoqqm;
        gmmoskogsamiimaw:
        wcmeymioukakwmii:
        goto guemiwyaaiokymkk;
        iegeiekyeqckmise:
        $aokagokqyuysuksm = $this->mwikyscisascoeea();
        goto egsqoeumwyykkuuy;
        yiakeoiamgskcgwe:
        $this->iygyugseyaqwywyg($eqgoocgaqwqcimie);
        goto gmmoskogsamiimaw;
        guemiwyaaiokymkk:
        return $this;
        goto skeosquyqemagyii;
        egsqoeumwyykkuuy:
        if ($qsuyiaikaquswaug) {
            goto eswsgqmeomgauiew;
        }
        goto iqsqgccwyeomyawk;
        kuycusakouywkiiw:
        ugwqyegaaskmucay:
        goto yiakeoiamgskcgwe;
        iokasswuskcumqkc:
        goto ugwqyegaaskmucay;
        goto kakeaucaseukciea;
        iqsqgccwyeomyawk:
        $eqgoocgaqwqcimie = ManipulateServer::ayueggmoqeeukqmq($aokagokqyuysuksm);
        goto iokasswuskcumqkc;
        qkuuooygeauqoqqm:
        $eqgoocgaqwqcimie = ManipulateServer::get($aokagokqyuysuksm);
        goto kuycusakouywkiiw;
        oqysqmwmogqewsgo:
        if ($this->qooeaookuemoqecm()) {
            goto wcmeymioukakwmii;
        }
        goto iegeiekyeqckmise;
        skeosquyqemagyii:
    }
    
    public function qgsieamsswkgysow(array $ywmkwiwkosakssii = []) : void
    {
        goto yeqeyiiywssgsyou;
        yeqeyiiywssgsyou:
        if (!$this->eyamqkqiykagecsw()) {
            goto wmqgyceaymweimmu;
        }
        goto uqwgiykoaeaaiayu;
        mumskauyosuokigg:
        wmqgyceaymweimmu:
        goto yoscseoiqicoccku;
        uqwgiykoaeaaiayu:
        $this->saemoowcasogykak(FormMaker::symcgieuakksimmu()->miocmcoykayoyyau()->eyamqkqiykagecsw($this->eyamqkqiykagecsw()));
        goto mumskauyosuokigg;
        yoscseoiqicoccku:
    }
}
