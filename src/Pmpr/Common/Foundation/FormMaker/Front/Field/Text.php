<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b499786a1b             |
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
        $this->qigsyyqgewgskemg("\146\157\162\155\x2d\x63\157\x6e\x74\162\x6f\154");
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
        return $this->aseocggwwegcmqes("\145\155\141\151\x6c");
    }
    
    public function esakmaucmeoucami() : self
    {
        return $this->aseocggwwegcmqes("\163\145\141\x72\143\x68");
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
        return $this->aseocggwwegcmqes("\x70\x61\163\x73\167\x6f\x72\144");
    }
    
    public function kyiucygqsgequoys(?string $iwiewowoqmoekyqi) : self
    {
        $this->gysckqgokmciyqcg($iwiewowoqmoekyqi);
        return $this->qcgocuceocquqcuw("\160\154\141\143\x65\x68\157\154\x64\145\x72", $iwiewowoqmoekyqi);
    }
    
    public function umyeigwcmeakuqsu($qsuyiaikaquswaug = false) : self
    {
        goto oqysqmwmogqewsgo;
        iokasswuskcumqkc:
        goto ugwqyegaaskmucay;
        goto kakeaucaseukciea;
        egsqoeumwyykkuuy:
        if ($qsuyiaikaquswaug) {
            goto eswsgqmeomgauiew;
        }
        goto iqsqgccwyeomyawk;
        qkuuooygeauqoqqm:
        $eqgoocgaqwqcimie = ManipulateServer::get($aokagokqyuysuksm);
        goto kuycusakouywkiiw;
        kuycusakouywkiiw:
        ugwqyegaaskmucay:
        goto yiakeoiamgskcgwe;
        guemiwyaaiokymkk:
        return $this;
        goto skeosquyqemagyii;
        yiakeoiamgskcgwe:
        $this->iygyugseyaqwywyg($eqgoocgaqwqcimie);
        goto gmmoskogsamiimaw;
        kakeaucaseukciea:
        eswsgqmeomgauiew:
        goto qkuuooygeauqoqqm;
        iegeiekyeqckmise:
        $aokagokqyuysuksm = $this->mwikyscisascoeea();
        goto egsqoeumwyykkuuy;
        oqysqmwmogqewsgo:
        if ($this->qooeaookuemoqecm()) {
            goto wcmeymioukakwmii;
        }
        goto iegeiekyeqckmise;
        iqsqgccwyeomyawk:
        $eqgoocgaqwqcimie = ManipulateServer::ayueggmoqeeukqmq($aokagokqyuysuksm);
        goto iokasswuskcumqkc;
        gmmoskogsamiimaw:
        wcmeymioukakwmii:
        goto guemiwyaaiokymkk;
        skeosquyqemagyii:
    }
    
    public function qgsieamsswkgysow(array $ywmkwiwkosakssii = []) : void
    {
        goto yeqeyiiywssgsyou;
        mumskauyosuokigg:
        wmqgyceaymweimmu:
        goto yoscseoiqicoccku;
        uqwgiykoaeaaiayu:
        $this->saemoowcasogykak(FormMaker::symcgieuakksimmu()->miocmcoykayoyyau()->eyamqkqiykagecsw($this->eyamqkqiykagecsw()));
        goto mumskauyosuokigg;
        yeqeyiiywssgsyou:
        if (!$this->eyamqkqiykagecsw()) {
            goto wmqgyceaymweimmu;
        }
        goto uqwgiykoaeaaiayu;
        yoscseoiqicoccku:
    }
}
