<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b1e8aa0c03             |
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
        parent::__construct("\x69\156\x70\x75\x74", $sqeykgyoooqysmca, $aokagokqyuysuksm, $pkyyagewkiyckmwy, $mkqqqewsokcswckc);
        $this->qigsyyqgewgskemg("\x66\157\x72\x6d\x2d\143\x6f\156\164\162\x6f\154");
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
        return $this->aseocggwwegcmqes("\145\x6d\x61\x69\154");
    }
    
    public function esakmaucmeoucami() : self
    {
        return $this->aseocggwwegcmqes("\163\145\141\162\143\x68");
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
        return $this->aseocggwwegcmqes("\160\141\x73\163\167\x6f\162\144");
    }
    
    public function kyiucygqsgequoys(?string $iwiewowoqmoekyqi) : self
    {
        $this->gysckqgokmciyqcg($iwiewowoqmoekyqi);
        return $this->qcgocuceocquqcuw("\x70\154\x61\143\145\x68\157\x6c\x64\145\162", $iwiewowoqmoekyqi);
    }
    
    public function umyeigwcmeakuqsu($qsuyiaikaquswaug = false) : self
    {
        goto gmomkuwegquasyku;
        eswsgqmeomgauiew:
        $aokagokqyuysuksm = $this->mwikyscisascoeea();
        goto ugwqyegaaskmucay;
        ugwqyegaaskmucay:
        if ($qsuyiaikaquswaug) {
            goto qikgswsucicammsu;
        }
        goto wcmeymioukakwmii;
        iegeiekyeqckmise:
        qikgswsucicammsu:
        goto egsqoeumwyykkuuy;
        wcmeymioukakwmii:
        $eqgoocgaqwqcimie = ManipulateServer::ayueggmoqeeukqmq($aokagokqyuysuksm);
        goto oqysqmwmogqewsgo;
        oqysqmwmogqewsgo:
        goto saooicamakkcaiie;
        goto iegeiekyeqckmise;
        iqsqgccwyeomyawk:
        saooicamakkcaiie:
        goto iokasswuskcumqkc;
        qkuuooygeauqoqqm:
        return $this;
        goto kuycusakouywkiiw;
        gmomkuwegquasyku:
        if ($this->qooeaookuemoqecm()) {
            goto iksmqqwswkyygmyw;
        }
        goto eswsgqmeomgauiew;
        kakeaucaseukciea:
        iksmqqwswkyygmyw:
        goto qkuuooygeauqoqqm;
        egsqoeumwyykkuuy:
        $eqgoocgaqwqcimie = ManipulateServer::get($aokagokqyuysuksm);
        goto iqsqgccwyeomyawk;
        iokasswuskcumqkc:
        $this->iygyugseyaqwywyg($eqgoocgaqwqcimie);
        goto kakeaucaseukciea;
        kuycusakouywkiiw:
    }
    
    public function qgsieamsswkgysow(array $ywmkwiwkosakssii = []) : void
    {
        goto gmmoskogsamiimaw;
        guemiwyaaiokymkk:
        $this->saemoowcasogykak(FormMaker::symcgieuakksimmu()->miocmcoykayoyyau()->eyamqkqiykagecsw($this->eyamqkqiykagecsw()));
        goto skeosquyqemagyii;
        gmmoskogsamiimaw:
        if (!$this->eyamqkqiykagecsw()) {
            goto yiakeoiamgskcgwe;
        }
        goto guemiwyaaiokymkk;
        skeosquyqemagyii:
        yiakeoiamgskcgwe:
        goto wmqgyceaymweimmu;
        wmqgyceaymweimmu:
    }
}
