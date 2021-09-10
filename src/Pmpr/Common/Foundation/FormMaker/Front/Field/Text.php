<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b5973b89a9             |
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
        parent::__construct("\151\156\x70\x75\x74", $sqeykgyoooqysmca, $aokagokqyuysuksm, $pkyyagewkiyckmwy, $mkqqqewsokcswckc);
        $this->qigsyyqgewgskemg("\146\157\162\x6d\x2d\143\157\x6e\x74\x72\x6f\154");
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
        return $this->aseocggwwegcmqes("\x65\155\141\x69\154");
    }
    
    public function esakmaucmeoucami() : self
    {
        return $this->aseocggwwegcmqes("\163\145\141\x72\x63\x68");
    }
    
    public function smigkcmumwkgamkk() : self
    {
        return $this->aseocggwwegcmqes("\x74\x65\x6c");
    }
    
    public function xkgcwkwsqysqamic() : self
    {
        return $this->aseocggwwegcmqes(self::URL);
    }
    
    public function sqsumkuougquscyg() : self
    {
        return $this->aseocggwwegcmqes("\160\x61\x73\163\x77\x6f\162\144");
    }
    
    public function kyiucygqsgequoys(?string $iwiewowoqmoekyqi) : self
    {
        $this->gysckqgokmciyqcg($iwiewowoqmoekyqi);
        return $this->qcgocuceocquqcuw("\160\x6c\141\143\145\x68\x6f\x6c\x64\x65\x72", $iwiewowoqmoekyqi);
    }
    
    public function umyeigwcmeakuqsu($qsuyiaikaquswaug = false) : self
    {
        goto oqysqmwmogqewsgo;
        iegeiekyeqckmise:
        $aokagokqyuysuksm = $this->mwikyscisascoeea();
        goto egsqoeumwyykkuuy;
        yiakeoiamgskcgwe:
        $this->iygyugseyaqwywyg($eqgoocgaqwqcimie);
        goto gmmoskogsamiimaw;
        kuycusakouywkiiw:
        ugwqyegaaskmucay:
        goto yiakeoiamgskcgwe;
        oqysqmwmogqewsgo:
        if ($this->qooeaookuemoqecm()) {
            goto wcmeymioukakwmii;
        }
        goto iegeiekyeqckmise;
        gmmoskogsamiimaw:
        wcmeymioukakwmii:
        goto guemiwyaaiokymkk;
        kakeaucaseukciea:
        eswsgqmeomgauiew:
        goto qkuuooygeauqoqqm;
        egsqoeumwyykkuuy:
        if ($qsuyiaikaquswaug) {
            goto eswsgqmeomgauiew;
        }
        goto iqsqgccwyeomyawk;
        iqsqgccwyeomyawk:
        $eqgoocgaqwqcimie = ManipulateServer::ayueggmoqeeukqmq($aokagokqyuysuksm);
        goto iokasswuskcumqkc;
        guemiwyaaiokymkk:
        return $this;
        goto skeosquyqemagyii;
        qkuuooygeauqoqqm:
        $eqgoocgaqwqcimie = ManipulateServer::get($aokagokqyuysuksm);
        goto kuycusakouywkiiw;
        iokasswuskcumqkc:
        goto ugwqyegaaskmucay;
        goto kakeaucaseukciea;
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
        uqwgiykoaeaaiayu:
        $this->saemoowcasogykak(FormMaker::symcgieuakksimmu()->miocmcoykayoyyau()->eyamqkqiykagecsw($this->eyamqkqiykagecsw()));
        goto mumskauyosuokigg;
        mumskauyosuokigg:
        wmqgyceaymweimmu:
        goto yoscseoiqicoccku;
        yoscseoiqicoccku:
    }
}
