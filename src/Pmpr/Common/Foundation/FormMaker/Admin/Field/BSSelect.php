<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b2e4befc8c             |
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
        parent::__construct($aokagokqyuysuksm, $ymqmyyeuycgmigyo, $qiouiwasaauyaaue, $mkqqqewsokcswckc, "\x62\163\x73\x65\154\145\143\164");
        $this->qcgocuceocquqcuw("\x64\x61\164\141\x2d\x6c\151\166\x65\x2d\x73\x65\x61\162\143\150", "\164\162\165\145")->qcgocuceocquqcuw("\x64\x61\x74\x61\x2d\163\x74\x79\x6c\x65", "\x62\x74\156\x2d\167\150\x69\164\x65")->qigsyyqgewgskemg("\160\162\x2d\x62\x6f\x6f\163\164\162\x61\x70\55\x73\x65\x6c\x65\143\164\40\142\157\157\x73\164\162\141\160\55\x73\x65\154\x65\x63\164");
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
        goto meqoykkccigcymuq;
        muwkcogucacmioyk:
        foreach ($oammesyieqmwuwyi as $igqsaukqcqscimok) {
            $this->oeewiaacscgyamai($igqsaukqcqscimok);
            kkuumakayqumesck:
        }
        goto wskwayesikacgimy;
        meqoykkccigcymuq:
        if (!(is_array($oammesyieqmwuwyi) && $oammesyieqmwuwyi)) {
            goto usqogwuuyqisgqoy;
        }
        goto muwkcogucacmioyk;
        kcwywemwqiokmwqu:
        usqogwuuyqisgqoy:
        goto useqokgmmisiguym;
        wskwayesikacgimy:
        uqgymuciaiouwmse:
        goto kcwywemwqiokmwqu;
        useqokgmmisiguym:
        return $this;
        goto eeosougaawskcqme;
        eeosougaawskcqme:
    }
    
    public function ikgocaywoggomiak($giqggecqqikcysgq = null) : self
    {
        goto mmgecsioimmsaese;
        iuwckqmwgeegmkym:
        $this->qcgocuceocquqcuw("\x64\141\x74\x61\55\155\x61\170\x2d\x6f\x70\164\x69\157\x6e\x73", (string) $giqggecqqikcysgq);
        goto eeugkasygsucwemg;
        mmgecsioimmsaese:
        if (!$giqggecqqikcysgq) {
            goto acquwsaqecuammqu;
        }
        goto iuwckqmwgeegmkym;
        eeugkasygsucwemg:
        acquwsaqecuammqu:
        goto aqkqkawsoekoguwq;
        aqkqkawsoekoguwq:
        return $this;
        goto iywsuggwumemiueu;
        iywsuggwumemiueu:
    }
    
    public function soyqkauogoaqekos() : self
    {
        $this->oockkiieqcwiocga("\165\163\145\x72\x73");
        return $this;
    }
    
    public function yyayequseyasoyks() : self
    {
        $this->oockkiieqcwiocga("\164\145\x72\x6d\163");
        return $this;
    }
    
    public function smmismmuuccmscya() : self
    {
        $this->oockkiieqcwiocga("\160\x6f\x73\x74\163");
        return $this;
    }
    
    public function wkqyoukciomqiyew() : self
    {
        $this->oockkiieqcwiocga("\x6d\157\144\x65\154\163");
        return $this;
    }
    
    public function kacywqgmseagyuyu() : self
    {
        $this->oockkiieqcwiocga("\x69\143\x6f\156\163");
        return $this;
    }
    
    public function squsacgomqgkakaw() : ?string
    {
        return $this->target;
    }
    
    public function imwouwmsiukakwqi() : self
    {
        $this->oockkiieqcwiocga("\143\157\x6d\x6d\x65\156\x74\163");
        return $this;
    }
    
    public function oockkiieqcwiocga(?string $ccamueccusigaaio) : self
    {
        $this->target = $ccamueccusigaaio;
        return $this;
    }
    
    public function eukmukacucooequu(array $ywmkwiwkosakssii = []) : self
    {
        goto qwuwmceyoweoquwe;
        qwuwmceyoweoquwe:
        $ywmkwiwkosakssii = json_encode($ywmkwiwkosakssii, JSON_UNESCAPED_SLASHES);
        goto acgckkceoemekqye;
        cywuoisiuqqycswk:
        return $this;
        goto egkogyiekywscqky;
        acgckkceoemekqye:
        $this->qcgocuceocquqcuw("\144\141\x74\141\55\141\162\x67\163", $ywmkwiwkosakssii);
        goto cywuoisiuqqycswk;
        egkogyiekywscqky:
    }
    
    public function osmkwgikieoyykwg() : self
    {
        $this->oikgogcweiiaocka()->usoqcyyugsuyiewc("\163\x6f\162\x74\x61\x62\154\145\55\163\145\154\145\143\164")->qigsyyqgewgskemg("\x73\157\x72\x74\x61\142\x6c\145\55\163\x65\154\x65\x63\x74");
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
        return strpos($this->gueasuouwqysmomu(), "\x6d\x75\154\x74\x69") !== false;
    }
    
    public function kyiucygqsgequoys(?string $iwiewowoqmoekyqi = null) : self
    {
        return $this->qcgocuceocquqcuw("\x74\151\164\x6c\x65", $iwiewowoqmoekyqi);
    }
    
    public function iqiasugacuagiwcw($gaeqamemwmwsyukm = null) : self
    {
        goto iewmcmiquoyacgyq;
        iewmcmiquoyacgyq:
        $uiymkeeaukcyqqik = "\x63\157\x75\x6e\x74";
        goto wcqwgisyoeuosuyq;
        qmammsguewagcqkg:
        gekwsciqyqicqssw:
        goto qwysywacqwqcqsoa;
        mwuueaqkukaikwki:
        $uiymkeeaukcyqqik = "{$uiymkeeaukcyqqik}\40\x3e\40{$gaeqamemwmwsyukm}";
        goto qmammsguewagcqkg;
        qwysywacqwqcqsoa:
        return $this->qcgocuceocquqcuw("\144\x61\164\141\x2d\163\x65\x6c\145\143\x74\x65\144\x2d\164\145\170\x74\x2d\x66\157\x72\x6d\x61\164", $uiymkeeaukcyqqik);
        goto kcsqwsswsemaumma;
        wcqwgisyoeuosuyq:
        if (!$gaeqamemwmwsyukm) {
            goto gekwsciqyqicqssw;
        }
        goto mwuueaqkukaikwki;
        kcsqwsswsemaumma:
    }
    
    public function qgsieamsswkgysow(array $ywmkwiwkosakssii = []) : void
    {
        goto cussqussoggmeosi;
        cussqussoggmeosi:
        $oammesyieqmwuwyi = $this->wasgwsogmuquqeaa();
        goto isqmsyisayasekmi;
        maieoomciymaweag:
        wcqcuygyssquoecu:
        goto mumiaqugqwusaqms;
        uaisequwcmsgwoek:
        $this->qcgocuceocquqcuw("\144\x61\x74\x61\55\x74\x61\162\147\x65\164", $this->squsacgomqgkakaw());
        goto maieoomciymaweag;
        imummuqgkwsswaqg:
        $this->kyiucygqsgequoys(__("\x43\x68\157\151\143\x65\x20\157\156\40\x6f\x66\40\x66\x6f\x6c\x6c\x6f\x77\x69\x6e\147\x20\157\160\164\151\x6f\x6e\x73\x2e\56\56", PR__CMN__FOUNDATION))->qcgocuceocquqcuw("\144\141\164\x61\x2d\x64\145\163\145\x6c\x65\143\164\55\141\154\x6c\55\164\145\170\164", __("\104\145\163\145\x6c\x65\x63\164", PR__CMN__FOUNDATION));
        goto kaksyamuwcoawuyi;
        wagiaqiqcimegwae:
        if (!$this->squsacgomqgkakaw()) {
            goto wcqcuygyssquoecu;
        }
        goto uaisequwcmsgwoek;
        mumiaqugqwusaqms:
        $this->qcgocuceocquqcuw("\144\141\x74\141\55\x69\x74\145\155\163", json_encode($oammesyieqmwuwyi));
        goto kamqckgacqaqymiu;
        kaksyamuwcoawuyi:
        aqswwkimeemgqqig:
        goto wayeccuwqcsagsku;
        kamqckgacqaqymiu:
        amkuiuweeikqwmiy:
        goto emwwmokiwkwyucwo;
        emwwmokiwkwyucwo:
        if ($this->msmiagueogcsucgc()) {
            goto aqswwkimeemgqqig;
        }
        goto imummuqgkwsswaqg;
        isqmsyisayasekmi:
        if (!is_array($oammesyieqmwuwyi)) {
            goto amkuiuweeikqwmiy;
        }
        goto wagiaqiqcimegwae;
        wayeccuwqcsagsku:
        parent::qgsieamsswkgysow($ywmkwiwkosakssii);
        goto isskocqmuyoukaaq;
        isskocqmuyoukaaq:
    }
}
