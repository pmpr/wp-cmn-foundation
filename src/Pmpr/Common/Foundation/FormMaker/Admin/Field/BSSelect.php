<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b5973b89a9             |
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
        parent::__construct($aokagokqyuysuksm, $ymqmyyeuycgmigyo, $qiouiwasaauyaaue, $mkqqqewsokcswckc, "\142\x73\163\x65\x6c\145\x63\x74");
        $this->qcgocuceocquqcuw("\144\141\164\x61\x2d\x6c\x69\166\145\55\x73\x65\141\x72\x63\150", "\164\x72\x75\x65")->qcgocuceocquqcuw("\x64\141\164\x61\x2d\163\x74\171\154\x65", "\142\164\156\55\167\150\151\x74\145")->qigsyyqgewgskemg("\x70\x72\x2d\142\157\157\x73\164\x72\x61\x70\x2d\x73\145\x6c\x65\143\164\40\142\x6f\157\x73\164\162\x61\160\x2d\163\x65\x6c\145\143\164");
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
        wskwayesikacgimy:
        foreach ($oammesyieqmwuwyi as $igqsaukqcqscimok) {
            $this->oeewiaacscgyamai($igqsaukqcqscimok);
            usqogwuuyqisgqoy:
        }
        goto kcwywemwqiokmwqu;
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
        acquwsaqecuammqu:
    }
    
    public function ikgocaywoggomiak($giqggecqqikcysgq = null) : self
    {
        goto iuwckqmwgeegmkym;
        iuwckqmwgeegmkym:
        if (!$giqggecqqikcysgq) {
            goto mmgecsioimmsaese;
        }
        goto eeugkasygsucwemg;
        iywsuggwumemiueu:
        return $this;
        goto qwuwmceyoweoquwe;
        aqkqkawsoekoguwq:
        mmgecsioimmsaese:
        goto iywsuggwumemiueu;
        eeugkasygsucwemg:
        $this->qcgocuceocquqcuw("\x64\x61\164\x61\55\155\141\170\55\157\160\164\151\x6f\x6e\x73", (string) $giqggecqqikcysgq);
        goto aqkqkawsoekoguwq;
        qwuwmceyoweoquwe:
    }
    
    public function soyqkauogoaqekos() : self
    {
        $this->oockkiieqcwiocga("\x75\x73\145\x72\163");
        return $this;
    }
    
    public function yyayequseyasoyks() : self
    {
        $this->oockkiieqcwiocga("\164\x65\x72\155\x73");
        return $this;
    }
    
    public function smmismmuuccmscya() : self
    {
        $this->oockkiieqcwiocga("\160\x6f\x73\x74\163");
        return $this;
    }
    
    public function wkqyoukciomqiyew() : self
    {
        $this->oockkiieqcwiocga("\x6d\157\144\145\x6c\x73");
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
        $this->oockkiieqcwiocga("\143\x6f\x6d\155\145\x6e\164\x73");
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
        egkogyiekywscqky:
        return $this;
        goto gekwsciqyqicqssw;
        acgckkceoemekqye:
        $ywmkwiwkosakssii = json_encode($ywmkwiwkosakssii, JSON_UNESCAPED_SLASHES);
        goto cywuoisiuqqycswk;
        cywuoisiuqqycswk:
        $this->qcgocuceocquqcuw("\144\141\164\141\x2d\141\162\147\x73", $ywmkwiwkosakssii);
        goto egkogyiekywscqky;
        gekwsciqyqicqssw:
    }
    
    public function osmkwgikieoyykwg() : self
    {
        $this->oikgogcweiiaocka()->usoqcyyugsuyiewc("\163\157\x72\x74\141\x62\x6c\145\x2d\x73\145\154\145\143\164")->qigsyyqgewgskemg("\163\157\162\x74\x61\142\x6c\145\x2d\163\x65\154\145\143\x74");
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
        return $this->aseocggwwegcmqes("\x6d\165\154\x74\151{$this->gueasuouwqysmomu()}")->iqiasugacuagiwcw();
    }
    
    public function zosqeeykkcqmmkqs() : bool
    {
        return strpos($this->gueasuouwqysmomu(), "\155\165\x6c\x74\151") !== false;
    }
    
    public function kyiucygqsgequoys(?string $iwiewowoqmoekyqi = null) : self
    {
        return $this->qcgocuceocquqcuw("\x74\151\164\154\145", $iwiewowoqmoekyqi);
    }
    
    public function iqiasugacuagiwcw($gaeqamemwmwsyukm = null) : self
    {
        goto wcqwgisyoeuosuyq;
        kcsqwsswsemaumma:
        return $this->qcgocuceocquqcuw("\x64\141\x74\x61\55\163\x65\x6c\x65\143\x74\x65\144\x2d\164\145\x78\164\x2d\146\x6f\x72\x6d\141\x74", $uiymkeeaukcyqqik);
        goto wcqcuygyssquoecu;
        qwysywacqwqcqsoa:
        iewmcmiquoyacgyq:
        goto kcsqwsswsemaumma;
        qmammsguewagcqkg:
        $uiymkeeaukcyqqik = "{$uiymkeeaukcyqqik}\x20\x3e\40{$gaeqamemwmwsyukm}";
        goto qwysywacqwqcqsoa;
        mwuueaqkukaikwki:
        if (!$gaeqamemwmwsyukm) {
            goto iewmcmiquoyacgyq;
        }
        goto qmammsguewagcqkg;
        wcqwgisyoeuosuyq:
        $uiymkeeaukcyqqik = "\x63\x6f\165\x6e\164";
        goto mwuueaqkukaikwki;
        wcqcuygyssquoecu:
    }
    
    public function qgsieamsswkgysow(array $ywmkwiwkosakssii = []) : void
    {
        goto isqmsyisayasekmi;
        wagiaqiqcimegwae:
        if (!is_array($oammesyieqmwuwyi)) {
            goto aqswwkimeemgqqig;
        }
        goto uaisequwcmsgwoek;
        emwwmokiwkwyucwo:
        aqswwkimeemgqqig:
        goto imummuqgkwsswaqg;
        isqmsyisayasekmi:
        $oammesyieqmwuwyi = $this->wasgwsogmuquqeaa();
        goto wagiaqiqcimegwae;
        kamqckgacqaqymiu:
        $this->qcgocuceocquqcuw("\x64\141\164\x61\x2d\151\164\145\x6d\163", json_encode($oammesyieqmwuwyi));
        goto emwwmokiwkwyucwo;
        maieoomciymaweag:
        $this->qcgocuceocquqcuw("\144\x61\164\x61\x2d\164\141\162\147\x65\164", $this->squsacgomqgkakaw());
        goto mumiaqugqwusaqms;
        uaisequwcmsgwoek:
        if (!$this->squsacgomqgkakaw()) {
            goto amkuiuweeikqwmiy;
        }
        goto maieoomciymaweag;
        isskocqmuyoukaaq:
        parent::qgsieamsswkgysow($ywmkwiwkosakssii);
        goto scysisyaqygmiege;
        kaksyamuwcoawuyi:
        $this->kyiucygqsgequoys(__("\x43\x68\x6f\x69\143\145\40\157\156\x20\157\146\40\x66\157\154\154\157\x77\151\x6e\x67\40\x6f\x70\164\x69\157\x6e\x73\56\56\56", PR__CMN__FOUNDATION))->qcgocuceocquqcuw("\x64\141\164\141\x2d\144\x65\163\145\x6c\145\x63\x74\55\141\x6c\154\x2d\x74\145\170\164", __("\x44\145\x73\x65\x6c\145\x63\x74", PR__CMN__FOUNDATION));
        goto wayeccuwqcsagsku;
        wayeccuwqcsagsku:
        cussqussoggmeosi:
        goto isskocqmuyoukaaq;
        imummuqgkwsswaqg:
        if ($this->msmiagueogcsucgc()) {
            goto cussqussoggmeosi;
        }
        goto kaksyamuwcoawuyi;
        mumiaqugqwusaqms:
        amkuiuweeikqwmiy:
        goto kamqckgacqaqymiu;
        scysisyaqygmiege:
    }
}
