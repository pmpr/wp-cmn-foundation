<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b30261f503             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\FormMaker\Admin\Field;


class Select2 extends Select
{
    
    protected ?array $items = [];
    
    protected bool $isCustom = false;
    
    protected ?string $target = null;
    
    public function __construct(?string $aokagokqyuysuksm, ?string $ymqmyyeuycgmigyo, array $qiouiwasaauyaaue = [], ?string $mkqqqewsokcswckc = null)
    {
        parent::__construct($aokagokqyuysuksm, $ymqmyyeuycgmigyo, $qiouiwasaauyaaue, $mkqqqewsokcswckc, "\163\x65\154\145\x63\164\x32");
        $this->igmaewykumgwoaoy("\x64\141\x74\x61\x2d\141\x64\144\141\142\x6c\145", "\146\141\154\x73\145");
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
        goto wemoskgcoyswcqcw;
        ommcykyccgwugoqm:
        return $this;
        goto iqmsuqsowuugeqkk;
        kaaemgwqywywyaic:
        foreach ($oammesyieqmwuwyi as $igqsaukqcqscimok) {
            $this->oeewiaacscgyamai($igqsaukqcqscimok);
            cmcokscaskcamuuq:
        }
        goto yioiswceaiqqiiwi;
        yioiswceaiqqiiwi:
        sskgisessswoogay:
        goto mmqwyegygkueycwc;
        mmqwyegygkueycwc:
        eyqykmseeukuwiqy:
        goto ommcykyccgwugoqm;
        wemoskgcoyswcqcw:
        if (!(is_array($oammesyieqmwuwyi) && $oammesyieqmwuwyi)) {
            goto eyqykmseeukuwiqy;
        }
        goto kaaemgwqywywyaic;
        iqmsuqsowuugeqkk:
    }
    
    public function ikgocaywoggomiak($giqggecqqikcysgq = null) : self
    {
        goto aquqwcumywwyyaca;
        ksqksagegqimoksg:
        return $this;
        goto kwmqeaimowikmkyy;
        qqiyociaumgusckw:
        qyeqgykkuoikusue:
        goto ksqksagegqimoksg;
        aquqwcumywwyyaca:
        if (!$giqggecqqikcysgq) {
            goto qyeqgykkuoikusue;
        }
        goto ysowyesceeamcimi;
        ysowyesceeamcimi:
        $this->igmaewykumgwoaoy("\x64\141\164\141\55\x6d\x61\170\x69\x6d\x75\x6d\55\x73\x65\x6c\145\143\164\x69\x6f\156\55\154\x65\x6e\x67\164\150", (string) $giqggecqqikcysgq);
        goto qqiyociaumgusckw;
        kwmqeaimowikmkyy:
    }
    
    public function soyqkauogoaqekos() : self
    {
        $this->oockkiieqcwiocga("\x75\163\145\162\163");
        return $this;
    }
    
    public function yyayequseyasoyks() : self
    {
        $this->oockkiieqcwiocga("\164\x65\x72\x6d\x73");
        return $this;
    }
    
    public function smmismmuuccmscya() : self
    {
        $this->oockkiieqcwiocga("\x70\x6f\163\164\x73");
        return $this;
    }
    
    public function squsacgomqgkakaw() : ?string
    {
        return $this->target;
    }
    
    public function imwouwmsiukakwqi() : self
    {
        $this->oockkiieqcwiocga("\143\x6f\155\155\145\156\164\x73");
        return $this;
    }
    
    public function oockkiieqcwiocga(?string $ccamueccusigaaio) : self
    {
        $this->target = $ccamueccusigaaio;
        return $this;
    }
    
    public function eukmukacucooequu(array $ywmkwiwkosakssii = []) : self
    {
        $this->igmaewykumgwoaoy("\144\x61\164\x61\x2d\141\x72\x67\163", json_encode($ywmkwiwkosakssii));
        return $this;
    }
    
    public function osmkwgikieoyykwg() : self
    {
        $this->oikgogcweiiaocka()->usoqcyyugsuyiewc("\163\x6f\x72\164\141\x62\154\145\x2d\x73\145\154\145\143\x74\62")->qigsyyqgewgskemg("\163\157\162\164\x61\142\x6c\145\x2d\163\145\154\145\143\164\x32");
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
        return $this->aseocggwwegcmqes("\155\x75\154\x74\151{$this->gueasuouwqysmomu()}");
    }
    
    public function kyiucygqsgequoys(?string $iwiewowoqmoekyqi = null) : self
    {
        return $this->igmaewykumgwoaoy("\x64\x61\x74\141\x2d\x70\x6c\x61\143\x65\150\x6f\x6c\x64\x65\x72", $iwiewowoqmoekyqi);
    }
    
    public function qgsieamsswkgysow(array $ywmkwiwkosakssii = []) : void
    {
        goto igkewuickceykeoc;
        gewikeykcysagaki:
        cgykugsckguoykyi:
        goto wguqeameioywkcum;
        gkmgcqsicokksosc:
        $this->igmaewykumgwoaoy("\143\154\141\163\x73", "\x73\145\x6c\x65\x63\164\x32\x2d\163\145\x6c\145\x63\164\157\x72");
        goto igqagwwkgcgkweay;
        kigugswqqcsmeuey:
        akeaemmagkkwsamy:
        goto eqiqamsciuamsqoq;
        qesamoswoqgcuyae:
        if (!is_array($oammesyieqmwuwyi)) {
            goto ouicgucmgawgyais;
        }
        goto sckmgcowqceaoicu;
        cwmweiaomowsaswo:
        parent::qgsieamsswkgysow($ywmkwiwkosakssii);
        goto wseiuooqwmgigama;
        cswacsayomisqwsc:
        $this->igmaewykumgwoaoy("\143\154\x61\x73\x73", "\143\x75\x73\164\x6f\x6d\x2d\163\x65\154\x65\143\164\x32\55\x73\145\154\x65\x63\x74\x6f\162");
        goto kigugswqqcsmeuey;
        sckmgcowqceaoicu:
        if (!$this->squsacgomqgkakaw()) {
            goto cgykugsckguoykyi;
        }
        goto aaqeqiaquomiwywg;
        wguqeameioywkcum:
        $this->igmaewykumgwoaoy("\144\x61\x74\x61\x2d\151\x74\145\x6d\x73", json_encode($oammesyieqmwuwyi));
        goto kkwikyuiwyaaokgu;
        eqiqamsciuamsqoq:
        $oammesyieqmwuwyi = $this->wasgwsogmuquqeaa();
        goto qesamoswoqgcuyae;
        igkewuickceykeoc:
        if ($this->somyygqqawwswkyk()) {
            goto kqqscwcakcekcsyc;
        }
        goto gkmgcqsicokksosc;
        aaqeqiaquomiwywg:
        $this->igmaewykumgwoaoy("\144\141\164\x61\55\x74\x61\162\147\x65\x74", $this->squsacgomqgkakaw());
        goto gewikeykcysagaki;
        igqagwwkgcgkweay:
        goto akeaemmagkkwsamy;
        goto easiiuiosaweasya;
        easiiuiosaweasya:
        kqqscwcakcekcsyc:
        goto cswacsayomisqwsc;
        kkwikyuiwyaaokgu:
        ouicgucmgawgyais:
        goto cwmweiaomowsaswo;
        wseiuooqwmgigama:
    }
}
