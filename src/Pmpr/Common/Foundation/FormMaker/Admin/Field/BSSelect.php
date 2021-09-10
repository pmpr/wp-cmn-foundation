<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b499786a1b             |
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
        parent::__construct($aokagokqyuysuksm, $ymqmyyeuycgmigyo, $qiouiwasaauyaaue, $mkqqqewsokcswckc, "\142\x73\163\x65\154\145\143\164");
        $this->qcgocuceocquqcuw("\144\141\x74\141\55\x6c\151\x76\x65\x2d\163\145\x61\162\x63\x68", "\x74\162\x75\x65")->qcgocuceocquqcuw("\144\x61\164\141\x2d\163\x74\171\x6c\145", "\x62\164\x6e\55\x77\150\x69\x74\x65")->qigsyyqgewgskemg("\x70\162\55\142\157\x6f\163\x74\162\141\x70\x2d\x73\x65\x6c\145\143\164\40\x62\x6f\x6f\x73\x74\162\141\160\55\163\145\154\x65\143\164");
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
        eeosougaawskcqme:
        return $this;
        goto acquwsaqecuammqu;
        muwkcogucacmioyk:
        if (!(is_array($oammesyieqmwuwyi) && $oammesyieqmwuwyi)) {
            goto meqoykkccigcymuq;
        }
        goto wskwayesikacgimy;
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
        eeugkasygsucwemg:
        $this->qcgocuceocquqcuw("\x64\x61\164\141\x2d\155\141\x78\x2d\x6f\160\164\x69\x6f\156\x73", (string) $giqggecqqikcysgq);
        goto aqkqkawsoekoguwq;
        aqkqkawsoekoguwq:
        mmgecsioimmsaese:
        goto iywsuggwumemiueu;
        iywsuggwumemiueu:
        return $this;
        goto qwuwmceyoweoquwe;
        qwuwmceyoweoquwe:
    }
    
    public function soyqkauogoaqekos() : self
    {
        $this->oockkiieqcwiocga("\x75\x73\145\162\163");
        return $this;
    }
    
    public function yyayequseyasoyks() : self
    {
        $this->oockkiieqcwiocga("\164\x65\162\155\x73");
        return $this;
    }
    
    public function smmismmuuccmscya() : self
    {
        $this->oockkiieqcwiocga("\x70\157\x73\164\x73");
        return $this;
    }
    
    public function wkqyoukciomqiyew() : self
    {
        $this->oockkiieqcwiocga("\155\x6f\x64\x65\x6c\x73");
        return $this;
    }
    
    public function kacywqgmseagyuyu() : self
    {
        $this->oockkiieqcwiocga("\151\x63\x6f\156\x73");
        return $this;
    }
    
    public function squsacgomqgkakaw() : ?string
    {
        return $this->target;
    }
    
    public function imwouwmsiukakwqi() : self
    {
        $this->oockkiieqcwiocga("\x63\x6f\x6d\x6d\145\x6e\164\x73");
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
        $this->qcgocuceocquqcuw("\x64\x61\x74\x61\55\x61\x72\x67\163", $ywmkwiwkosakssii);
        goto egkogyiekywscqky;
        gekwsciqyqicqssw:
    }
    
    public function osmkwgikieoyykwg() : self
    {
        $this->oikgogcweiiaocka()->usoqcyyugsuyiewc("\163\x6f\162\x74\141\x62\x6c\x65\x2d\163\145\x6c\145\x63\164")->qigsyyqgewgskemg("\x73\x6f\x72\164\141\142\154\145\x2d\x73\x65\154\x65\143\164");
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
        return $this->aseocggwwegcmqes("\155\x75\154\164\151{$this->gueasuouwqysmomu()}")->iqiasugacuagiwcw();
    }
    
    public function zosqeeykkcqmmkqs() : bool
    {
        return strpos($this->gueasuouwqysmomu(), "\155\x75\154\164\x69") !== false;
    }
    
    public function kyiucygqsgequoys(?string $iwiewowoqmoekyqi = null) : self
    {
        return $this->qcgocuceocquqcuw("\x74\151\x74\x6c\x65", $iwiewowoqmoekyqi);
    }
    
    public function iqiasugacuagiwcw($gaeqamemwmwsyukm = null) : self
    {
        goto wcqwgisyoeuosuyq;
        qmammsguewagcqkg:
        $uiymkeeaukcyqqik = "{$uiymkeeaukcyqqik}\40\x3e\40{$gaeqamemwmwsyukm}";
        goto qwysywacqwqcqsoa;
        qwysywacqwqcqsoa:
        iewmcmiquoyacgyq:
        goto kcsqwsswsemaumma;
        mwuueaqkukaikwki:
        if (!$gaeqamemwmwsyukm) {
            goto iewmcmiquoyacgyq;
        }
        goto qmammsguewagcqkg;
        kcsqwsswsemaumma:
        return $this->qcgocuceocquqcuw("\144\x61\x74\x61\x2d\163\145\154\x65\x63\164\x65\x64\x2d\164\145\x78\x74\55\146\x6f\x72\x6d\141\x74", $uiymkeeaukcyqqik);
        goto wcqcuygyssquoecu;
        wcqwgisyoeuosuyq:
        $uiymkeeaukcyqqik = "\143\157\165\x6e\164";
        goto mwuueaqkukaikwki;
        wcqcuygyssquoecu:
    }
    
    public function qgsieamsswkgysow(array $ywmkwiwkosakssii = []) : void
    {
        goto isqmsyisayasekmi;
        imummuqgkwsswaqg:
        if ($this->msmiagueogcsucgc()) {
            goto cussqussoggmeosi;
        }
        goto kaksyamuwcoawuyi;
        mumiaqugqwusaqms:
        amkuiuweeikqwmiy:
        goto kamqckgacqaqymiu;
        wagiaqiqcimegwae:
        if (!is_array($oammesyieqmwuwyi)) {
            goto aqswwkimeemgqqig;
        }
        goto uaisequwcmsgwoek;
        wayeccuwqcsagsku:
        cussqussoggmeosi:
        goto isskocqmuyoukaaq;
        maieoomciymaweag:
        $this->qcgocuceocquqcuw("\x64\x61\164\x61\x2d\164\141\x72\147\145\x74", $this->squsacgomqgkakaw());
        goto mumiaqugqwusaqms;
        isqmsyisayasekmi:
        $oammesyieqmwuwyi = $this->wasgwsogmuquqeaa();
        goto wagiaqiqcimegwae;
        uaisequwcmsgwoek:
        if (!$this->squsacgomqgkakaw()) {
            goto amkuiuweeikqwmiy;
        }
        goto maieoomciymaweag;
        kaksyamuwcoawuyi:
        $this->kyiucygqsgequoys(__("\103\150\x6f\x69\143\145\40\157\x6e\40\x6f\x66\x20\x66\157\x6c\x6c\x6f\167\x69\156\x67\40\157\x70\164\x69\x6f\156\163\56\56\x2e", PR__CMN__FOUNDATION))->qcgocuceocquqcuw("\144\x61\164\141\x2d\x64\145\163\145\154\x65\143\164\55\141\154\x6c\55\x74\145\170\164", __("\x44\x65\163\145\154\145\143\164", PR__CMN__FOUNDATION));
        goto wayeccuwqcsagsku;
        kamqckgacqaqymiu:
        $this->qcgocuceocquqcuw("\x64\x61\164\x61\55\x69\164\x65\155\163", json_encode($oammesyieqmwuwyi));
        goto emwwmokiwkwyucwo;
        isskocqmuyoukaaq:
        parent::qgsieamsswkgysow($ywmkwiwkosakssii);
        goto scysisyaqygmiege;
        emwwmokiwkwyucwo:
        aqswwkimeemgqqig:
        goto imummuqgkwsswaqg;
        scysisyaqygmiege:
    }
}
