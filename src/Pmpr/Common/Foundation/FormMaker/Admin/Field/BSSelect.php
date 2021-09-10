<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b1e8aa0c03             |
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
        parent::__construct($aokagokqyuysuksm, $ymqmyyeuycgmigyo, $qiouiwasaauyaaue, $mkqqqewsokcswckc, "\x62\163\x73\145\154\145\143\x74");
        $this->qcgocuceocquqcuw("\144\x61\164\141\x2d\x6c\x69\166\x65\55\x73\x65\x61\162\x63\x68", "\x74\162\165\145")->qcgocuceocquqcuw("\x64\141\164\141\x2d\163\x74\x79\x6c\x65", "\x62\164\156\55\x77\150\151\164\x65")->qigsyyqgewgskemg("\160\x72\55\142\x6f\157\163\164\162\141\160\55\x73\x65\154\x65\x63\164\40\x62\x6f\157\163\x74\162\141\x70\x2d\163\145\154\x65\143\x74");
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
        goto uqgymuciaiouwmse;
        uqgymuciaiouwmse:
        if (!(is_array($oammesyieqmwuwyi) && $oammesyieqmwuwyi)) {
            goto kuwmsgiyyaykcmcy;
        }
        goto kkuumakayqumesck;
        kkuumakayqumesck:
        foreach ($oammesyieqmwuwyi as $igqsaukqcqscimok) {
            $this->oeewiaacscgyamai($igqsaukqcqscimok);
            aqgswwomukqywuwo:
        }
        goto usqogwuuyqisgqoy;
        usqogwuuyqisgqoy:
        aeigqeeeqiqgkmcw:
        goto meqoykkccigcymuq;
        muwkcogucacmioyk:
        return $this;
        goto wskwayesikacgimy;
        meqoykkccigcymuq:
        kuwmsgiyyaykcmcy:
        goto muwkcogucacmioyk;
        wskwayesikacgimy:
    }
    
    public function ikgocaywoggomiak($giqggecqqikcysgq = null) : self
    {
        goto useqokgmmisiguym;
        eeosougaawskcqme:
        $this->qcgocuceocquqcuw("\144\141\x74\x61\55\155\x61\x78\x2d\157\x70\x74\x69\157\x6e\x73", (string) $giqggecqqikcysgq);
        goto acquwsaqecuammqu;
        acquwsaqecuammqu:
        kcwywemwqiokmwqu:
        goto mmgecsioimmsaese;
        mmgecsioimmsaese:
        return $this;
        goto iuwckqmwgeegmkym;
        useqokgmmisiguym:
        if (!$giqggecqqikcysgq) {
            goto kcwywemwqiokmwqu;
        }
        goto eeosougaawskcqme;
        iuwckqmwgeegmkym:
    }
    
    public function soyqkauogoaqekos() : self
    {
        $this->oockkiieqcwiocga("\165\x73\145\162\163");
        return $this;
    }
    
    public function yyayequseyasoyks() : self
    {
        $this->oockkiieqcwiocga("\x74\x65\x72\x6d\163");
        return $this;
    }
    
    public function smmismmuuccmscya() : self
    {
        $this->oockkiieqcwiocga("\160\157\x73\164\x73");
        return $this;
    }
    
    public function wkqyoukciomqiyew() : self
    {
        $this->oockkiieqcwiocga("\155\157\144\x65\x6c\x73");
        return $this;
    }
    
    public function kacywqgmseagyuyu() : self
    {
        $this->oockkiieqcwiocga("\151\143\x6f\x6e\163");
        return $this;
    }
    
    public function squsacgomqgkakaw() : ?string
    {
        return $this->target;
    }
    
    public function imwouwmsiukakwqi() : self
    {
        $this->oockkiieqcwiocga("\x63\157\x6d\155\145\x6e\164\x73");
        return $this;
    }
    
    public function oockkiieqcwiocga(?string $ccamueccusigaaio) : self
    {
        $this->target = $ccamueccusigaaio;
        return $this;
    }
    
    public function eukmukacucooequu(array $ywmkwiwkosakssii = []) : self
    {
        goto eeugkasygsucwemg;
        iywsuggwumemiueu:
        return $this;
        goto qwuwmceyoweoquwe;
        aqkqkawsoekoguwq:
        $this->qcgocuceocquqcuw("\x64\x61\164\141\x2d\141\162\147\163", $ywmkwiwkosakssii);
        goto iywsuggwumemiueu;
        eeugkasygsucwemg:
        $ywmkwiwkosakssii = json_encode($ywmkwiwkosakssii, JSON_UNESCAPED_SLASHES);
        goto aqkqkawsoekoguwq;
        qwuwmceyoweoquwe:
    }
    
    public function osmkwgikieoyykwg() : self
    {
        $this->oikgogcweiiaocka()->usoqcyyugsuyiewc("\163\x6f\x72\164\141\142\154\x65\x2d\x73\x65\154\x65\x63\x74")->qigsyyqgewgskemg("\x73\x6f\162\x74\141\x62\x6c\x65\x2d\x73\x65\154\145\x63\x74");
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
        return $this->aseocggwwegcmqes("\x6d\165\154\164\151{$this->gueasuouwqysmomu()}")->iqiasugacuagiwcw();
    }
    
    public function zosqeeykkcqmmkqs() : bool
    {
        return strpos($this->gueasuouwqysmomu(), "\155\x75\154\164\151") !== false;
    }
    
    public function kyiucygqsgequoys(?string $iwiewowoqmoekyqi = null) : self
    {
        return $this->qcgocuceocquqcuw("\164\151\x74\154\x65", $iwiewowoqmoekyqi);
    }
    
    public function iqiasugacuagiwcw($gaeqamemwmwsyukm = null) : self
    {
        goto cywuoisiuqqycswk;
        iewmcmiquoyacgyq:
        acgckkceoemekqye:
        goto wcqwgisyoeuosuyq;
        gekwsciqyqicqssw:
        $uiymkeeaukcyqqik = "{$uiymkeeaukcyqqik}\x20\x3e\40{$gaeqamemwmwsyukm}";
        goto iewmcmiquoyacgyq;
        wcqwgisyoeuosuyq:
        return $this->qcgocuceocquqcuw("\144\x61\164\x61\x2d\x73\x65\x6c\x65\x63\164\x65\144\55\164\145\170\x74\x2d\x66\x6f\x72\x6d\x61\164", $uiymkeeaukcyqqik);
        goto mwuueaqkukaikwki;
        cywuoisiuqqycswk:
        $uiymkeeaukcyqqik = "\x63\157\165\156\164";
        goto egkogyiekywscqky;
        egkogyiekywscqky:
        if (!$gaeqamemwmwsyukm) {
            goto acgckkceoemekqye;
        }
        goto gekwsciqyqicqssw;
        mwuueaqkukaikwki:
    }
    
    public function qgsieamsswkgysow(array $ywmkwiwkosakssii = []) : void
    {
        goto wcqcuygyssquoecu;
        isqmsyisayasekmi:
        qmammsguewagcqkg:
        goto wagiaqiqcimegwae;
        aqswwkimeemgqqig:
        if (!$this->squsacgomqgkakaw()) {
            goto qmammsguewagcqkg;
        }
        goto cussqussoggmeosi;
        emwwmokiwkwyucwo:
        parent::qgsieamsswkgysow($ywmkwiwkosakssii);
        goto imummuqgkwsswaqg;
        wagiaqiqcimegwae:
        $this->qcgocuceocquqcuw("\x64\141\164\141\55\151\x74\145\155\x73", json_encode($oammesyieqmwuwyi));
        goto uaisequwcmsgwoek;
        maieoomciymaweag:
        if ($this->msmiagueogcsucgc()) {
            goto kcsqwsswsemaumma;
        }
        goto mumiaqugqwusaqms;
        mumiaqugqwusaqms:
        $this->kyiucygqsgequoys(__("\103\150\157\151\x63\145\x20\157\156\x20\x6f\x66\x20\146\157\154\x6c\157\167\151\x6e\x67\x20\157\160\x74\x69\x6f\156\163\56\56\56", PR__CMN__FOUNDATION))->qcgocuceocquqcuw("\x64\x61\164\141\55\x64\x65\163\145\154\x65\x63\x74\x2d\x61\x6c\154\x2d\164\x65\x78\x74", __("\x44\145\x73\145\154\x65\143\x74", PR__CMN__FOUNDATION));
        goto kamqckgacqaqymiu;
        kamqckgacqaqymiu:
        kcsqwsswsemaumma:
        goto emwwmokiwkwyucwo;
        amkuiuweeikqwmiy:
        if (!is_array($oammesyieqmwuwyi)) {
            goto qwysywacqwqcqsoa;
        }
        goto aqswwkimeemgqqig;
        uaisequwcmsgwoek:
        qwysywacqwqcqsoa:
        goto maieoomciymaweag;
        wcqcuygyssquoecu:
        $oammesyieqmwuwyi = $this->wasgwsogmuquqeaa();
        goto amkuiuweeikqwmiy;
        cussqussoggmeosi:
        $this->qcgocuceocquqcuw("\x64\x61\x74\x61\55\164\x61\162\147\145\164", $this->squsacgomqgkakaw());
        goto isqmsyisayasekmi;
        imummuqgkwsswaqg:
    }
}
