<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b30261f503             |
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
        parent::__construct("\151\156\x70\165\x74", $sqeykgyoooqysmca, $aokagokqyuysuksm, $pkyyagewkiyckmwy, $mkqqqewsokcswckc);
        $this->qigsyyqgewgskemg("\146\157\x72\155\x2d\143\x6f\x6e\164\x72\x6f\154");
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
        return $this->aseocggwwegcmqes("\x65\x6d\141\x69\x6c");
    }
    
    public function esakmaucmeoucami() : self
    {
        return $this->aseocggwwegcmqes("\163\x65\x61\x72\143\x68");
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
        return $this->aseocggwwegcmqes("\x70\141\x73\x73\x77\157\162\x64");
    }
    
    public function kyiucygqsgequoys(?string $iwiewowoqmoekyqi) : self
    {
        $this->gysckqgokmciyqcg($iwiewowoqmoekyqi);
        return $this->qcgocuceocquqcuw("\160\154\x61\x63\145\x68\x6f\154\x64\x65\x72", $iwiewowoqmoekyqi);
    }
    
    public function umyeigwcmeakuqsu($qsuyiaikaquswaug = false) : self
    {
        goto wcmeymioukakwmii;
        gmmoskogsamiimaw:
        return $this;
        goto guemiwyaaiokymkk;
        qkuuooygeauqoqqm:
        eswsgqmeomgauiew:
        goto kuycusakouywkiiw;
        wcmeymioukakwmii:
        if ($this->qooeaookuemoqecm()) {
            goto ugwqyegaaskmucay;
        }
        goto oqysqmwmogqewsgo;
        iegeiekyeqckmise:
        if ($qsuyiaikaquswaug) {
            goto gmomkuwegquasyku;
        }
        goto egsqoeumwyykkuuy;
        oqysqmwmogqewsgo:
        $aokagokqyuysuksm = $this->mwikyscisascoeea();
        goto iegeiekyeqckmise;
        egsqoeumwyykkuuy:
        $eqgoocgaqwqcimie = ManipulateServer::ayueggmoqeeukqmq($aokagokqyuysuksm);
        goto iqsqgccwyeomyawk;
        iokasswuskcumqkc:
        gmomkuwegquasyku:
        goto kakeaucaseukciea;
        kuycusakouywkiiw:
        $this->iygyugseyaqwywyg($eqgoocgaqwqcimie);
        goto yiakeoiamgskcgwe;
        yiakeoiamgskcgwe:
        ugwqyegaaskmucay:
        goto gmmoskogsamiimaw;
        iqsqgccwyeomyawk:
        goto eswsgqmeomgauiew;
        goto iokasswuskcumqkc;
        kakeaucaseukciea:
        $eqgoocgaqwqcimie = ManipulateServer::get($aokagokqyuysuksm);
        goto qkuuooygeauqoqqm;
        guemiwyaaiokymkk:
    }
    
    public function qgsieamsswkgysow(array $ywmkwiwkosakssii = []) : void
    {
        goto wmqgyceaymweimmu;
        yeqeyiiywssgsyou:
        $this->saemoowcasogykak(FormMaker::symcgieuakksimmu()->miocmcoykayoyyau()->eyamqkqiykagecsw($this->eyamqkqiykagecsw()));
        goto uqwgiykoaeaaiayu;
        uqwgiykoaeaaiayu:
        skeosquyqemagyii:
        goto mumskauyosuokigg;
        wmqgyceaymweimmu:
        if (!$this->eyamqkqiykagecsw()) {
            goto skeosquyqemagyii;
        }
        goto yeqeyiiywssgsyou;
        mumskauyosuokigg:
    }
}
