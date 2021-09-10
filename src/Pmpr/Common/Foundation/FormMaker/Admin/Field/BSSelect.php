<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b30261f503             |
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
        parent::__construct($aokagokqyuysuksm, $ymqmyyeuycgmigyo, $qiouiwasaauyaaue, $mkqqqewsokcswckc, "\x62\163\163\145\154\145\143\x74");
        $this->qcgocuceocquqcuw("\144\141\x74\141\x2d\x6c\x69\x76\145\55\x73\145\141\x72\143\150", "\164\x72\x75\145")->qcgocuceocquqcuw("\x64\x61\164\x61\55\163\164\x79\154\x65", "\142\164\x6e\x2d\x77\150\151\164\145")->qigsyyqgewgskemg("\160\162\55\x62\x6f\x6f\163\164\x72\141\160\55\163\x65\154\145\x63\164\40\142\157\x6f\x73\164\162\x61\x70\55\163\145\154\x65\143\x74");
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
        wskwayesikacgimy:
        uqgymuciaiouwmse:
        goto kcwywemwqiokmwqu;
        kcwywemwqiokmwqu:
        usqogwuuyqisgqoy:
        goto useqokgmmisiguym;
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
        useqokgmmisiguym:
        return $this;
        goto eeosougaawskcqme;
        eeosougaawskcqme:
    }
    
    public function ikgocaywoggomiak($giqggecqqikcysgq = null) : self
    {
        goto mmgecsioimmsaese;
        iuwckqmwgeegmkym:
        $this->qcgocuceocquqcuw("\144\x61\164\141\x2d\x6d\141\170\x2d\x6f\x70\x74\151\x6f\x6e\x73", (string) $giqggecqqikcysgq);
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
        $this->oockkiieqcwiocga("\165\x73\145\162\x73");
        return $this;
    }
    
    public function yyayequseyasoyks() : self
    {
        $this->oockkiieqcwiocga("\164\x65\162\155\163");
        return $this;
    }
    
    public function smmismmuuccmscya() : self
    {
        $this->oockkiieqcwiocga("\160\157\x73\x74\163");
        return $this;
    }
    
    public function wkqyoukciomqiyew() : self
    {
        $this->oockkiieqcwiocga("\155\157\x64\x65\154\x73");
        return $this;
    }
    
    public function kacywqgmseagyuyu() : self
    {
        $this->oockkiieqcwiocga("\x69\143\x6f\x6e\x73");
        return $this;
    }
    
    public function squsacgomqgkakaw() : ?string
    {
        return $this->target;
    }
    
    public function imwouwmsiukakwqi() : self
    {
        $this->oockkiieqcwiocga("\143\x6f\x6d\155\145\156\164\x73");
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
        $this->qcgocuceocquqcuw("\x64\141\164\141\55\x61\162\147\163", $ywmkwiwkosakssii);
        goto cywuoisiuqqycswk;
        egkogyiekywscqky:
    }
    
    public function osmkwgikieoyykwg() : self
    {
        $this->oikgogcweiiaocka()->usoqcyyugsuyiewc("\x73\157\162\164\141\x62\x6c\x65\x2d\163\145\154\x65\x63\164")->qigsyyqgewgskemg("\163\x6f\x72\164\141\142\x6c\145\x2d\163\145\154\x65\x63\x74");
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
        return strpos($this->gueasuouwqysmomu(), "\155\165\x6c\x74\x69") !== false;
    }
    
    public function kyiucygqsgequoys(?string $iwiewowoqmoekyqi = null) : self
    {
        return $this->qcgocuceocquqcuw("\164\x69\164\x6c\145", $iwiewowoqmoekyqi);
    }
    
    public function iqiasugacuagiwcw($gaeqamemwmwsyukm = null) : self
    {
        goto iewmcmiquoyacgyq;
        mwuueaqkukaikwki:
        $uiymkeeaukcyqqik = "{$uiymkeeaukcyqqik}\x20\76\x20{$gaeqamemwmwsyukm}";
        goto qmammsguewagcqkg;
        qwysywacqwqcqsoa:
        return $this->qcgocuceocquqcuw("\144\x61\164\141\55\163\145\154\x65\x63\x74\x65\x64\x2d\x74\x65\x78\x74\55\146\x6f\162\155\x61\x74", $uiymkeeaukcyqqik);
        goto kcsqwsswsemaumma;
        wcqwgisyoeuosuyq:
        if (!$gaeqamemwmwsyukm) {
            goto gekwsciqyqicqssw;
        }
        goto mwuueaqkukaikwki;
        iewmcmiquoyacgyq:
        $uiymkeeaukcyqqik = "\143\x6f\x75\156\x74";
        goto wcqwgisyoeuosuyq;
        qmammsguewagcqkg:
        gekwsciqyqicqssw:
        goto qwysywacqwqcqsoa;
        kcsqwsswsemaumma:
    }
    
    public function qgsieamsswkgysow(array $ywmkwiwkosakssii = []) : void
    {
        goto cussqussoggmeosi;
        kamqckgacqaqymiu:
        amkuiuweeikqwmiy:
        goto emwwmokiwkwyucwo;
        kaksyamuwcoawuyi:
        aqswwkimeemgqqig:
        goto wayeccuwqcsagsku;
        mumiaqugqwusaqms:
        $this->qcgocuceocquqcuw("\144\141\164\x61\55\x69\164\145\x6d\163", json_encode($oammesyieqmwuwyi));
        goto kamqckgacqaqymiu;
        maieoomciymaweag:
        wcqcuygyssquoecu:
        goto mumiaqugqwusaqms;
        uaisequwcmsgwoek:
        $this->qcgocuceocquqcuw("\144\x61\164\141\x2d\x74\x61\x72\x67\x65\164", $this->squsacgomqgkakaw());
        goto maieoomciymaweag;
        cussqussoggmeosi:
        $oammesyieqmwuwyi = $this->wasgwsogmuquqeaa();
        goto isqmsyisayasekmi;
        isqmsyisayasekmi:
        if (!is_array($oammesyieqmwuwyi)) {
            goto amkuiuweeikqwmiy;
        }
        goto wagiaqiqcimegwae;
        emwwmokiwkwyucwo:
        if ($this->msmiagueogcsucgc()) {
            goto aqswwkimeemgqqig;
        }
        goto imummuqgkwsswaqg;
        imummuqgkwsswaqg:
        $this->kyiucygqsgequoys(__("\103\150\157\x69\143\x65\x20\x6f\156\40\x6f\146\x20\146\x6f\154\x6c\x6f\167\151\x6e\x67\x20\157\x70\164\x69\x6f\x6e\x73\56\56\56", PR__CMN__FOUNDATION))->qcgocuceocquqcuw("\x64\141\x74\x61\x2d\144\x65\x73\x65\x6c\145\x63\164\55\x61\x6c\154\x2d\x74\x65\x78\164", __("\x44\145\163\145\154\x65\143\164", PR__CMN__FOUNDATION));
        goto kaksyamuwcoawuyi;
        wagiaqiqcimegwae:
        if (!$this->squsacgomqgkakaw()) {
            goto wcqcuygyssquoecu;
        }
        goto uaisequwcmsgwoek;
        wayeccuwqcsagsku:
        parent::qgsieamsswkgysow($ywmkwiwkosakssii);
        goto isskocqmuyoukaaq;
        isskocqmuyoukaaq:
    }
}
