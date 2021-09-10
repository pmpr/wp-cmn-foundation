<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b3993be3fb             |
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
        parent::__construct($aokagokqyuysuksm, $ymqmyyeuycgmigyo, $qiouiwasaauyaaue, $mkqqqewsokcswckc, "\142\x73\163\x65\x6c\145\x63\164");
        $this->qcgocuceocquqcuw("\144\x61\164\x61\x2d\x6c\x69\x76\145\55\163\x65\141\x72\143\150", "\164\162\165\145")->qcgocuceocquqcuw("\x64\x61\164\141\x2d\163\x74\x79\x6c\x65", "\x62\x74\x6e\x2d\x77\150\151\x74\145")->qigsyyqgewgskemg("\x70\x72\x2d\142\x6f\157\163\164\162\x61\x70\55\x73\x65\154\145\x63\164\40\x62\157\x6f\163\164\162\141\160\55\x73\x65\x6c\145\143\164");
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
        goto muwkcogucacmioyk;
        useqokgmmisiguym:
        meqoykkccigcymuq:
        goto eeosougaawskcqme;
        kcwywemwqiokmwqu:
        kkuumakayqumesck:
        goto useqokgmmisiguym;
        eeosougaawskcqme:
        return $this;
        goto acquwsaqecuammqu;
        muwkcogucacmioyk:
        if (!(is_array($oammesyieqmwuwyi) && $oammesyieqmwuwyi)) {
            goto meqoykkccigcymuq;
        }
        goto wskwayesikacgimy;
        wskwayesikacgimy:
        foreach ($oammesyieqmwuwyi as $igqsaukqcqscimok) {
            $this->oeewiaacscgyamai($igqsaukqcqscimok);
            usqogwuuyqisgqoy:
        }
        goto kcwywemwqiokmwqu;
        acquwsaqecuammqu:
    }
    
    public function ikgocaywoggomiak($giqggecqqikcysgq = null) : self
    {
        goto iuwckqmwgeegmkym;
        aqkqkawsoekoguwq:
        mmgecsioimmsaese:
        goto iywsuggwumemiueu;
        iuwckqmwgeegmkym:
        if (!$giqggecqqikcysgq) {
            goto mmgecsioimmsaese;
        }
        goto eeugkasygsucwemg;
        eeugkasygsucwemg:
        $this->qcgocuceocquqcuw("\144\141\x74\141\x2d\155\x61\170\55\x6f\x70\x74\x69\157\x6e\163", (string) $giqggecqqikcysgq);
        goto aqkqkawsoekoguwq;
        iywsuggwumemiueu:
        return $this;
        goto qwuwmceyoweoquwe;
        qwuwmceyoweoquwe:
    }
    
    public function soyqkauogoaqekos() : self
    {
        $this->oockkiieqcwiocga("\x75\x73\145\x72\x73");
        return $this;
    }
    
    public function yyayequseyasoyks() : self
    {
        $this->oockkiieqcwiocga("\164\145\x72\155\163");
        return $this;
    }
    
    public function smmismmuuccmscya() : self
    {
        $this->oockkiieqcwiocga("\160\157\163\164\x73");
        return $this;
    }
    
    public function wkqyoukciomqiyew() : self
    {
        $this->oockkiieqcwiocga("\x6d\x6f\144\145\x6c\163");
        return $this;
    }
    
    public function kacywqgmseagyuyu() : self
    {
        $this->oockkiieqcwiocga("\151\x63\x6f\x6e\163");
        return $this;
    }
    
    public function squsacgomqgkakaw() : ?string
    {
        return $this->target;
    }
    
    public function imwouwmsiukakwqi() : self
    {
        $this->oockkiieqcwiocga("\x63\x6f\155\155\x65\x6e\x74\163");
        return $this;
    }
    
    public function oockkiieqcwiocga(?string $ccamueccusigaaio) : self
    {
        $this->target = $ccamueccusigaaio;
        return $this;
    }
    
    public function eukmukacucooequu(array $ywmkwiwkosakssii = []) : self
    {
        goto acgckkceoemekqye;
        acgckkceoemekqye:
        $ywmkwiwkosakssii = json_encode($ywmkwiwkosakssii, JSON_UNESCAPED_SLASHES);
        goto cywuoisiuqqycswk;
        cywuoisiuqqycswk:
        $this->qcgocuceocquqcuw("\144\x61\164\141\x2d\141\162\x67\x73", $ywmkwiwkosakssii);
        goto egkogyiekywscqky;
        egkogyiekywscqky:
        return $this;
        goto gekwsciqyqicqssw;
        gekwsciqyqicqssw:
    }
    
    public function osmkwgikieoyykwg() : self
    {
        $this->oikgogcweiiaocka()->usoqcyyugsuyiewc("\163\157\162\164\141\x62\154\145\55\163\x65\x6c\145\x63\164")->qigsyyqgewgskemg("\x73\157\162\164\x61\142\x6c\145\55\163\x65\154\145\143\164");
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
        return $this->aseocggwwegcmqes("\x6d\x75\x6c\x74\151{$this->gueasuouwqysmomu()}")->iqiasugacuagiwcw();
    }
    
    public function zosqeeykkcqmmkqs() : bool
    {
        return strpos($this->gueasuouwqysmomu(), "\x6d\x75\154\164\x69") !== false;
    }
    
    public function kyiucygqsgequoys(?string $iwiewowoqmoekyqi = null) : self
    {
        return $this->qcgocuceocquqcuw("\164\x69\164\x6c\x65", $iwiewowoqmoekyqi);
    }
    
    public function iqiasugacuagiwcw($gaeqamemwmwsyukm = null) : self
    {
        goto wcqwgisyoeuosuyq;
        mwuueaqkukaikwki:
        if (!$gaeqamemwmwsyukm) {
            goto iewmcmiquoyacgyq;
        }
        goto qmammsguewagcqkg;
        qmammsguewagcqkg:
        $uiymkeeaukcyqqik = "{$uiymkeeaukcyqqik}\40\x3e\x20{$gaeqamemwmwsyukm}";
        goto qwysywacqwqcqsoa;
        kcsqwsswsemaumma:
        return $this->qcgocuceocquqcuw("\x64\141\164\141\x2d\x73\145\x6c\145\x63\164\145\x64\x2d\164\x65\170\164\x2d\x66\157\x72\x6d\141\x74", $uiymkeeaukcyqqik);
        goto wcqcuygyssquoecu;
        wcqwgisyoeuosuyq:
        $uiymkeeaukcyqqik = "\x63\157\165\156\x74";
        goto mwuueaqkukaikwki;
        qwysywacqwqcqsoa:
        iewmcmiquoyacgyq:
        goto kcsqwsswsemaumma;
        wcqcuygyssquoecu:
    }
    
    public function qgsieamsswkgysow(array $ywmkwiwkosakssii = []) : void
    {
        goto isqmsyisayasekmi;
        uaisequwcmsgwoek:
        if (!$this->squsacgomqgkakaw()) {
            goto amkuiuweeikqwmiy;
        }
        goto maieoomciymaweag;
        maieoomciymaweag:
        $this->qcgocuceocquqcuw("\x64\141\x74\x61\55\164\x61\x72\x67\x65\164", $this->squsacgomqgkakaw());
        goto mumiaqugqwusaqms;
        wagiaqiqcimegwae:
        if (!is_array($oammesyieqmwuwyi)) {
            goto aqswwkimeemgqqig;
        }
        goto uaisequwcmsgwoek;
        isqmsyisayasekmi:
        $oammesyieqmwuwyi = $this->wasgwsogmuquqeaa();
        goto wagiaqiqcimegwae;
        mumiaqugqwusaqms:
        amkuiuweeikqwmiy:
        goto kamqckgacqaqymiu;
        emwwmokiwkwyucwo:
        aqswwkimeemgqqig:
        goto imummuqgkwsswaqg;
        isskocqmuyoukaaq:
        parent::qgsieamsswkgysow($ywmkwiwkosakssii);
        goto scysisyaqygmiege;
        kamqckgacqaqymiu:
        $this->qcgocuceocquqcuw("\144\141\x74\x61\x2d\151\164\x65\155\x73", json_encode($oammesyieqmwuwyi));
        goto emwwmokiwkwyucwo;
        imummuqgkwsswaqg:
        if ($this->msmiagueogcsucgc()) {
            goto cussqussoggmeosi;
        }
        goto kaksyamuwcoawuyi;
        wayeccuwqcsagsku:
        cussqussoggmeosi:
        goto isskocqmuyoukaaq;
        kaksyamuwcoawuyi:
        $this->kyiucygqsgequoys(__("\x43\150\x6f\151\x63\x65\40\x6f\x6e\40\157\146\x20\146\x6f\x6c\154\157\167\151\156\147\x20\x6f\160\x74\151\157\x6e\x73\56\56\x2e", PR__CMN__FOUNDATION))->qcgocuceocquqcuw("\144\141\164\x61\55\144\x65\x73\x65\154\145\x63\x74\55\141\x6c\x6c\55\164\145\170\x74", __("\104\145\x73\145\154\x65\x63\164", PR__CMN__FOUNDATION));
        goto wayeccuwqcsagsku;
        scysisyaqygmiege:
    }
}
