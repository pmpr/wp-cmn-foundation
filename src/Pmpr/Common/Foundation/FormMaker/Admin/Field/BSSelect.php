<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613a1be32d755             |
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
        parent::__construct($aokagokqyuysuksm, $ymqmyyeuycgmigyo, $qiouiwasaauyaaue, $mkqqqewsokcswckc, "\142\x73\x73\145\154\x65\x63\x74");
        $this->qcgocuceocquqcuw("\144\141\164\141\55\x6c\151\x76\145\55\x73\145\x61\x72\143\x68", "\x74\162\165\145")->qcgocuceocquqcuw("\144\141\164\x61\55\x73\164\171\x6c\x65", "\142\164\x6e\x2d\x77\150\151\164\145")->qigsyyqgewgskemg("\x70\162\55\x62\x6f\x6f\163\x74\x72\x61\160\55\x73\x65\154\145\x63\x74\40\142\x6f\157\163\x74\162\141\160\55\163\x65\154\145\x63\164");
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
        goto aquqwcumywwyyaca;
        kwmqeaimowikmkyy:
        return $this;
        goto kqqscwcakcekcsyc;
        qqiyociaumgusckw:
        ommcykyccgwugoqm:
        goto ksqksagegqimoksg;
        ysowyesceeamcimi:
        foreach ($oammesyieqmwuwyi as $igqsaukqcqscimok) {
            $this->oeewiaacscgyamai($igqsaukqcqscimok);
            iqmsuqsowuugeqkk:
        }
        goto qqiyociaumgusckw;
        aquqwcumywwyyaca:
        if (!(is_array($oammesyieqmwuwyi) && $oammesyieqmwuwyi)) {
            goto qyeqgykkuoikusue;
        }
        goto ysowyesceeamcimi;
        ksqksagegqimoksg:
        qyeqgykkuoikusue:
        goto kwmqeaimowikmkyy;
        kqqscwcakcekcsyc:
    }
    
    public function ikgocaywoggomiak($giqggecqqikcysgq = null) : self
    {
        goto cgykugsckguoykyi;
        cgykugsckguoykyi:
        if (!$giqggecqqikcysgq) {
            goto akeaemmagkkwsamy;
        }
        goto ouicgucmgawgyais;
        igkewuickceykeoc:
        akeaemmagkkwsamy:
        goto gkmgcqsicokksosc;
        gkmgcqsicokksosc:
        return $this;
        goto igqagwwkgcgkweay;
        ouicgucmgawgyais:
        $this->qcgocuceocquqcuw("\144\x61\164\141\55\155\x61\x78\55\x6f\160\164\151\x6f\156\163", (string) $giqggecqqikcysgq);
        goto igkewuickceykeoc;
        igqagwwkgcgkweay:
    }
    
    public function soyqkauogoaqekos() : self
    {
        $this->oockkiieqcwiocga("\x75\x73\x65\x72\x73");
        return $this;
    }
    
    public function yyayequseyasoyks() : self
    {
        $this->oockkiieqcwiocga("\164\x65\x72\x6d\163");
        return $this;
    }
    
    public function smmismmuuccmscya() : self
    {
        $this->oockkiieqcwiocga("\x70\157\x73\x74\x73");
        return $this;
    }
    
    public function wkqyoukciomqiyew() : self
    {
        $this->oockkiieqcwiocga("\155\x6f\x64\x65\x6c\163");
        return $this;
    }
    
    public function kacywqgmseagyuyu() : self
    {
        $this->oockkiieqcwiocga("\x69\143\x6f\156\x73");
        return $this;
    }
    
    public function squsacgomqgkakaw() : ?string
    {
        return $this->target;
    }
    
    public function imwouwmsiukakwqi() : self
    {
        $this->oockkiieqcwiocga("\143\157\x6d\x6d\x65\156\x74\x73");
        return $this;
    }
    
    public function oockkiieqcwiocga(?string $ccamueccusigaaio) : self
    {
        $this->target = $ccamueccusigaaio;
        return $this;
    }
    
    public function eukmukacucooequu(array $ywmkwiwkosakssii = []) : self
    {
        goto easiiuiosaweasya;
        easiiuiosaweasya:
        $ywmkwiwkosakssii = json_encode($ywmkwiwkosakssii, JSON_UNESCAPED_SLASHES);
        goto cswacsayomisqwsc;
        cswacsayomisqwsc:
        $this->qcgocuceocquqcuw("\x64\141\164\x61\x2d\141\x72\147\x73", $ywmkwiwkosakssii);
        goto kigugswqqcsmeuey;
        kigugswqqcsmeuey:
        return $this;
        goto eqiqamsciuamsqoq;
        eqiqamsciuamsqoq:
    }
    
    public function osmkwgikieoyykwg() : self
    {
        $this->oikgogcweiiaocka()->usoqcyyugsuyiewc("\x73\x6f\162\164\x61\142\x6c\x65\x2d\163\145\x6c\x65\143\164")->qigsyyqgewgskemg("\163\x6f\162\x74\x61\142\x6c\145\x2d\163\145\x6c\145\x63\x74");
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
        return $this->aseocggwwegcmqes("\x6d\165\x6c\x74\151{$this->gueasuouwqysmomu()}")->iqiasugacuagiwcw();
    }
    
    public function zosqeeykkcqmmkqs() : bool
    {
        return strpos($this->gueasuouwqysmomu(), "\155\165\x6c\x74\151") !== false;
    }
    
    public function kyiucygqsgequoys(?string $iwiewowoqmoekyqi = null) : self
    {
        return $this->qcgocuceocquqcuw("\164\151\164\154\x65", $iwiewowoqmoekyqi);
    }
    
    public function iqiasugacuagiwcw($gaeqamemwmwsyukm = null) : self
    {
        goto sckmgcowqceaoicu;
        gewikeykcysagaki:
        $uiymkeeaukcyqqik = "{$uiymkeeaukcyqqik}\x20\x3e\x20{$gaeqamemwmwsyukm}";
        goto wguqeameioywkcum;
        aaqeqiaquomiwywg:
        if (!$gaeqamemwmwsyukm) {
            goto qesamoswoqgcuyae;
        }
        goto gewikeykcysagaki;
        wguqeameioywkcum:
        qesamoswoqgcuyae:
        goto kkwikyuiwyaaokgu;
        kkwikyuiwyaaokgu:
        return $this->qcgocuceocquqcuw("\144\141\x74\x61\x2d\x73\x65\154\145\x63\164\x65\x64\x2d\164\145\170\164\x2d\x66\157\162\x6d\141\x74", $uiymkeeaukcyqqik);
        goto cwmweiaomowsaswo;
        sckmgcowqceaoicu:
        $uiymkeeaukcyqqik = "\x63\x6f\165\156\164";
        goto aaqeqiaquomiwywg;
        cwmweiaomowsaswo:
    }
    
    public function qgsieamsswkgysow(array $ywmkwiwkosakssii = []) : void
    {
        goto kygskqcaswauoqck;
        oegiqcweqaommiye:
        wseiuooqwmgigama:
        goto ukaykumuckcewsmi;
        ukaykumuckcewsmi:
        $this->qcgocuceocquqcuw("\144\x61\x74\141\55\x69\x74\145\x6d\x73", json_encode($oammesyieqmwuwyi));
        goto csyuoksgywmcoimw;
        iqoouguqkoyqgmky:
        if (!is_array($oammesyieqmwuwyi)) {
            goto kauusamousoweoia;
        }
        goto qcesmwcoywieikko;
        ssgkaswyoucayaog:
        parent::qgsieamsswkgysow($ywmkwiwkosakssii);
        goto uasusasgoiigaoqw;
        qqkqqoeuewiaggcc:
        $this->kyiucygqsgequoys(__("\x43\150\157\x69\143\145\x20\x6f\x6e\40\x6f\x66\40\146\157\154\154\x6f\167\151\x6e\147\x20\157\160\164\151\x6f\156\x73\56\x2e\56", PR__CMN__FOUNDATION))->qcgocuceocquqcuw("\x64\x61\164\141\55\x64\145\x73\x65\154\x65\143\x74\55\x61\x6c\154\55\x74\145\x78\x74", __("\104\145\163\145\154\145\x63\x74", PR__CMN__FOUNDATION));
        goto aiomyakycgammqea;
        haiwsyakmukuosqy:
        if ($this->msmiagueogcsucgc()) {
            goto iceeswmiwuysskwc;
        }
        goto qqkqqoeuewiaggcc;
        qcesmwcoywieikko:
        if (!$this->squsacgomqgkakaw()) {
            goto wseiuooqwmgigama;
        }
        goto egyqgskwmiuqqusm;
        csyuoksgywmcoimw:
        kauusamousoweoia:
        goto haiwsyakmukuosqy;
        egyqgskwmiuqqusm:
        $this->qcgocuceocquqcuw("\144\x61\x74\141\x2d\x74\141\x72\147\145\164", $this->squsacgomqgkakaw());
        goto oegiqcweqaommiye;
        aiomyakycgammqea:
        iceeswmiwuysskwc:
        goto ssgkaswyoucayaog;
        kygskqcaswauoqck:
        $oammesyieqmwuwyi = $this->wasgwsogmuquqeaa();
        goto iqoouguqkoyqgmky;
        uasusasgoiigaoqw:
    }
}
