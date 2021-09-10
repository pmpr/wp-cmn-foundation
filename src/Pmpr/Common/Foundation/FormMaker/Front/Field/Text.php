<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b2e4befc8c             |
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
        parent::__construct("\151\x6e\x70\x75\164", $sqeykgyoooqysmca, $aokagokqyuysuksm, $pkyyagewkiyckmwy, $mkqqqewsokcswckc);
        $this->qigsyyqgewgskemg("\146\157\x72\155\55\143\x6f\x6e\x74\x72\x6f\x6c");
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
        return $this->aseocggwwegcmqes("\x65\x6d\x61\x69\154");
    }
    
    public function esakmaucmeoucami() : self
    {
        return $this->aseocggwwegcmqes("\163\x65\x61\162\143\x68");
    }
    
    public function smigkcmumwkgamkk() : self
    {
        return $this->aseocggwwegcmqes("\x74\145\154");
    }
    
    public function xkgcwkwsqysqamic() : self
    {
        return $this->aseocggwwegcmqes(self::URL);
    }
    
    public function sqsumkuougquscyg() : self
    {
        return $this->aseocggwwegcmqes("\x70\141\163\x73\167\x6f\162\x64");
    }
    
    public function kyiucygqsgequoys(?string $iwiewowoqmoekyqi) : self
    {
        $this->gysckqgokmciyqcg($iwiewowoqmoekyqi);
        return $this->qcgocuceocquqcuw("\x70\154\x61\143\x65\x68\x6f\154\x64\x65\162", $iwiewowoqmoekyqi);
    }
    
    public function umyeigwcmeakuqsu($qsuyiaikaquswaug = false) : self
    {
        goto wcmeymioukakwmii;
        yiakeoiamgskcgwe:
        ugwqyegaaskmucay:
        goto gmmoskogsamiimaw;
        kakeaucaseukciea:
        $eqgoocgaqwqcimie = ManipulateServer::get($aokagokqyuysuksm);
        goto qkuuooygeauqoqqm;
        oqysqmwmogqewsgo:
        $aokagokqyuysuksm = $this->mwikyscisascoeea();
        goto iegeiekyeqckmise;
        qkuuooygeauqoqqm:
        eswsgqmeomgauiew:
        goto kuycusakouywkiiw;
        egsqoeumwyykkuuy:
        $eqgoocgaqwqcimie = ManipulateServer::ayueggmoqeeukqmq($aokagokqyuysuksm);
        goto iqsqgccwyeomyawk;
        wcmeymioukakwmii:
        if ($this->qooeaookuemoqecm()) {
            goto ugwqyegaaskmucay;
        }
        goto oqysqmwmogqewsgo;
        iokasswuskcumqkc:
        gmomkuwegquasyku:
        goto kakeaucaseukciea;
        iqsqgccwyeomyawk:
        goto eswsgqmeomgauiew;
        goto iokasswuskcumqkc;
        iegeiekyeqckmise:
        if ($qsuyiaikaquswaug) {
            goto gmomkuwegquasyku;
        }
        goto egsqoeumwyykkuuy;
        gmmoskogsamiimaw:
        return $this;
        goto guemiwyaaiokymkk;
        kuycusakouywkiiw:
        $this->iygyugseyaqwywyg($eqgoocgaqwqcimie);
        goto yiakeoiamgskcgwe;
        guemiwyaaiokymkk:
    }
    
    public function qgsieamsswkgysow(array $ywmkwiwkosakssii = []) : void
    {
        goto wmqgyceaymweimmu;
        wmqgyceaymweimmu:
        if (!$this->eyamqkqiykagecsw()) {
            goto skeosquyqemagyii;
        }
        goto yeqeyiiywssgsyou;
        uqwgiykoaeaaiayu:
        skeosquyqemagyii:
        goto mumskauyosuokigg;
        yeqeyiiywssgsyou:
        $this->saemoowcasogykak(FormMaker::symcgieuakksimmu()->miocmcoykayoyyau()->eyamqkqiykagecsw($this->eyamqkqiykagecsw()));
        goto uqwgiykoaeaaiayu;
        mumskauyosuokigg:
    }
}
