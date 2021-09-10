<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b6c65a2d22             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\FormMaker\Admin\Field;


class BSSelect extends Select
{
    
    protected ?array $items = [];
    
    protected bool $isCustom = false;
    
    protected ?string $target = null;
    
    public function __construct(?string $aokagokqyuysuksm, ?string $ymqmyyeuycgmigyo, array $qiouiwasaauyaaue = [], ?string $mkqqqewsokcswckc = null)
    {
        parent::__construct($aokagokqyuysuksm, $ymqmyyeuycgmigyo, $qiouiwasaauyaaue, $mkqqqewsokcswckc, "\x62\x73\x73\x65\x6c\145\143\164");
        $this->qcgocuceocquqcuw("\144\141\164\141\55\154\151\x76\145\x2d\163\145\x61\x72\x63\150", "\x74\162\x75\145")->qcgocuceocquqcuw("\x64\x61\x74\141\55\x73\164\171\x6c\145", "\x62\x74\156\55\167\150\x69\164\145")->qigsyyqgewgskemg("\x70\162\x2d\142\x6f\x6f\x73\164\x72\x61\x70\x2d\x73\x65\x6c\145\x63\x74\40\x62\x6f\x6f\x73\164\162\x61\160\55\163\x65\x6c\x65\143\164");
    }
    
    public function wasgwsogmuquqeaa() : ?array
    {
        return $this->items;
    }
    
    public function icsmsougoccqosgc(?array $oammesyieqmwuwyi) : self
    {
        $this->items = $oammesyieqmwuwyi;
        return $this;
    }
    
    public function oeewiaacscgyamai($igqsaukqcqscimok) : self
    {
        $this->items[] = $igqsaukqcqscimok;
        return $this;
    }
    
    public function wiweskwucmkcukcm($oammesyieqmwuwyi = []) : self
    {
        goto wskwayesikacgimy;
        eeosougaawskcqme:
        muwkcogucacmioyk:
        goto acquwsaqecuammqu;
        useqokgmmisiguym:
        usqogwuuyqisgqoy:
        goto eeosougaawskcqme;
        kcwywemwqiokmwqu:
        foreach ($oammesyieqmwuwyi as $igqsaukqcqscimok) {
            $this->oeewiaacscgyamai($igqsaukqcqscimok);
            meqoykkccigcymuq:
        }
        goto useqokgmmisiguym;
        wskwayesikacgimy:
        if (!(is_array($oammesyieqmwuwyi) && $oammesyieqmwuwyi)) {
            goto muwkcogucacmioyk;
        }
        goto kcwywemwqiokmwqu;
        acquwsaqecuammqu:
        return $this;
        goto mmgecsioimmsaese;
        mmgecsioimmsaese:
    }
    
    public function ikgocaywoggomiak($giqggecqqikcysgq = null) : self
    {
        goto eeugkasygsucwemg;
        qwuwmceyoweoquwe:
        return $this;
        goto acgckkceoemekqye;
        aqkqkawsoekoguwq:
        $this->qcgocuceocquqcuw("\x64\141\164\141\x2d\155\x61\x78\55\157\160\x74\151\x6f\x6e\x73", (string) $giqggecqqikcysgq);
        goto iywsuggwumemiueu;
        eeugkasygsucwemg:
        if (!$giqggecqqikcysgq) {
            goto iuwckqmwgeegmkym;
        }
        goto aqkqkawsoekoguwq;
        iywsuggwumemiueu:
        iuwckqmwgeegmkym:
        goto qwuwmceyoweoquwe;
        acgckkceoemekqye:
    }
    
    public function soyqkauogoaqekos() : self
    {
        $this->oockkiieqcwiocga("\x75\x73\x65\162\x73");
        return $this;
    }
    
    public function yyayequseyasoyks() : self
    {
        $this->oockkiieqcwiocga("\x74\145\162\x6d\163");
        return $this;
    }
    
    public function smmismmuuccmscya() : self
    {
        $this->oockkiieqcwiocga("\x70\157\x73\164\163");
        return $this;
    }
    
    public function wkqyoukciomqiyew() : self
    {
        $this->oockkiieqcwiocga("\x6d\157\x64\x65\154\x73");
        return $this;
    }
    
    public function kacywqgmseagyuyu() : self
    {
        $this->oockkiieqcwiocga("\151\x63\157\156\163");
        return $this;
    }
    
    public function squsacgomqgkakaw() : ?string
    {
        return $this->target;
    }
    
    public function imwouwmsiukakwqi() : self
    {
        $this->oockkiieqcwiocga("\143\157\155\155\x65\156\164\x73");
        return $this;
    }
    
    public function oockkiieqcwiocga(?string $ccamueccusigaaio) : self
    {
        $this->target = $ccamueccusigaaio;
        return $this;
    }
    
    public function eukmukacucooequu(array $ywmkwiwkosakssii = []) : self
    {
        goto cywuoisiuqqycswk;
        gekwsciqyqicqssw:
        return $this;
        goto iewmcmiquoyacgyq;
        egkogyiekywscqky:
        $this->qcgocuceocquqcuw("\144\141\x74\141\55\x61\x72\x67\163", $ywmkwiwkosakssii);
        goto gekwsciqyqicqssw;
        cywuoisiuqqycswk:
        $ywmkwiwkosakssii = json_encode($ywmkwiwkosakssii, JSON_UNESCAPED_SLASHES);
        goto egkogyiekywscqky;
        iewmcmiquoyacgyq:
    }
    
    public function osmkwgikieoyykwg() : self
    {
        $this->oikgogcweiiaocka()->usoqcyyugsuyiewc("\163\x6f\x72\164\x61\x62\154\145\55\163\145\154\x65\x63\164")->qigsyyqgewgskemg("\163\x6f\162\x74\x61\x62\154\x65\55\163\x65\154\145\143\x74");
        return $this;
    }
    
    public function somyygqqawwswkyk() : ?bool
    {
        return $this->isCustom;
    }
    
    public function yogkakywcccsikkg(bool $somyygqqawwswkyk) : self
    {
        $this->isCustom = $somyygqqawwswkyk;
        return $this;
    }
    
    public function oikgogcweiiaocka() : self
    {
        return $this->aseocggwwegcmqes("\155\165\x6c\164\151{$this->gueasuouwqysmomu()}")->iqiasugacuagiwcw();
    }
    
    public function zosqeeykkcqmmkqs() : bool
    {
        return strpos($this->gueasuouwqysmomu(), "\x6d\165\x6c\164\x69") !== false;
    }
    
    public function kyiucygqsgequoys(?string $iwiewowoqmoekyqi = null) : self
    {
        return $this->qcgocuceocquqcuw("\164\x69\x74\154\x65", $iwiewowoqmoekyqi);
    }
    
    public function iqiasugacuagiwcw($gaeqamemwmwsyukm = null) : self
    {
        goto mwuueaqkukaikwki;
        wcqcuygyssquoecu:
        return $this->qcgocuceocquqcuw("\144\141\164\x61\55\x73\x65\x6c\x65\143\x74\x65\144\x2d\164\145\x78\164\x2d\x66\x6f\162\155\x61\164", $uiymkeeaukcyqqik);
        goto amkuiuweeikqwmiy;
        qmammsguewagcqkg:
        if (!$gaeqamemwmwsyukm) {
            goto wcqwgisyoeuosuyq;
        }
        goto qwysywacqwqcqsoa;
        qwysywacqwqcqsoa:
        $uiymkeeaukcyqqik = "{$uiymkeeaukcyqqik}\x20\x3e\40{$gaeqamemwmwsyukm}";
        goto kcsqwsswsemaumma;
        kcsqwsswsemaumma:
        wcqwgisyoeuosuyq:
        goto wcqcuygyssquoecu;
        mwuueaqkukaikwki:
        $uiymkeeaukcyqqik = "\143\x6f\165\x6e\x74";
        goto qmammsguewagcqkg;
        amkuiuweeikqwmiy:
    }
    
    public function qgsieamsswkgysow(array $ywmkwiwkosakssii = []) : void
    {
        goto wagiaqiqcimegwae;
        wagiaqiqcimegwae:
        $oammesyieqmwuwyi = $this->wasgwsogmuquqeaa();
        goto uaisequwcmsgwoek;
        isskocqmuyoukaaq:
        isqmsyisayasekmi:
        goto scysisyaqygmiege;
        imummuqgkwsswaqg:
        cussqussoggmeosi:
        goto kaksyamuwcoawuyi;
        kamqckgacqaqymiu:
        aqswwkimeemgqqig:
        goto emwwmokiwkwyucwo;
        scysisyaqygmiege:
        parent::qgsieamsswkgysow($ywmkwiwkosakssii);
        goto quaceaqiyccsewwm;
        mumiaqugqwusaqms:
        $this->qcgocuceocquqcuw("\144\141\164\x61\55\x74\141\162\147\x65\x74", $this->squsacgomqgkakaw());
        goto kamqckgacqaqymiu;
        uaisequwcmsgwoek:
        if (!is_array($oammesyieqmwuwyi)) {
            goto cussqussoggmeosi;
        }
        goto maieoomciymaweag;
        maieoomciymaweag:
        if (!$this->squsacgomqgkakaw()) {
            goto aqswwkimeemgqqig;
        }
        goto mumiaqugqwusaqms;
        kaksyamuwcoawuyi:
        if ($this->msmiagueogcsucgc()) {
            goto isqmsyisayasekmi;
        }
        goto wayeccuwqcsagsku;
        wayeccuwqcsagsku:
        $this->kyiucygqsgequoys(__("\103\150\157\x69\143\x65\40\157\156\x20\157\x66\40\146\x6f\154\154\157\x77\x69\156\x67\x20\x6f\x70\164\x69\x6f\x6e\x73\56\x2e\x2e", PR__CMN__FOUNDATION))->qcgocuceocquqcuw("\x64\x61\164\141\x2d\144\145\x73\145\154\x65\x63\164\x2d\x61\154\154\x2d\x74\145\x78\164", __("\104\x65\x73\145\154\145\x63\x74", PR__CMN__FOUNDATION));
        goto isskocqmuyoukaaq;
        emwwmokiwkwyucwo:
        $this->qcgocuceocquqcuw("\144\141\164\141\x2d\151\164\x65\155\163", json_encode($oammesyieqmwuwyi));
        goto imummuqgkwsswaqg;
        quaceaqiyccsewwm:
    }
}
