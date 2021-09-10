<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b5973b89a9             |
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
        parent::__construct($aokagokqyuysuksm, $ymqmyyeuycgmigyo, $qiouiwasaauyaaue, $mkqqqewsokcswckc, "\163\x65\154\x65\x63\164\x32");
        $this->igmaewykumgwoaoy("\x64\x61\x74\141\x2d\141\x64\144\x61\x62\154\x65", "\146\141\154\x73\x65");
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
        goto kaaemgwqywywyaic;
        kaaemgwqywywyaic:
        if (!(is_array($oammesyieqmwuwyi) && $oammesyieqmwuwyi)) {
            goto wemoskgcoyswcqcw;
        }
        goto yioiswceaiqqiiwi;
        mmqwyegygkueycwc:
        cmcokscaskcamuuq:
        goto ommcykyccgwugoqm;
        ommcykyccgwugoqm:
        wemoskgcoyswcqcw:
        goto iqmsuqsowuugeqkk;
        yioiswceaiqqiiwi:
        foreach ($oammesyieqmwuwyi as $igqsaukqcqscimok) {
            $this->oeewiaacscgyamai($igqsaukqcqscimok);
            eyqykmseeukuwiqy:
        }
        goto mmqwyegygkueycwc;
        iqmsuqsowuugeqkk:
        return $this;
        goto qyeqgykkuoikusue;
        qyeqgykkuoikusue:
    }
    
    public function ikgocaywoggomiak($giqggecqqikcysgq = null) : self
    {
        goto ysowyesceeamcimi;
        ksqksagegqimoksg:
        aquqwcumywwyyaca:
        goto kwmqeaimowikmkyy;
        kwmqeaimowikmkyy:
        return $this;
        goto kqqscwcakcekcsyc;
        qqiyociaumgusckw:
        $this->igmaewykumgwoaoy("\x64\141\164\x61\55\x6d\x61\170\x69\x6d\x75\x6d\x2d\x73\145\x6c\145\143\164\x69\157\156\x2d\x6c\145\x6e\147\x74\150", (string) $giqggecqqikcysgq);
        goto ksqksagegqimoksg;
        ysowyesceeamcimi:
        if (!$giqggecqqikcysgq) {
            goto aquqwcumywwyyaca;
        }
        goto qqiyociaumgusckw;
        kqqscwcakcekcsyc:
    }
    
    public function soyqkauogoaqekos() : self
    {
        $this->oockkiieqcwiocga("\x75\163\145\x72\163");
        return $this;
    }
    
    public function yyayequseyasoyks() : self
    {
        $this->oockkiieqcwiocga("\164\145\x72\155\163");
        return $this;
    }
    
    public function smmismmuuccmscya() : self
    {
        $this->oockkiieqcwiocga("\160\157\x73\164\163");
        return $this;
    }
    
    public function squsacgomqgkakaw() : ?string
    {
        return $this->target;
    }
    
    public function imwouwmsiukakwqi() : self
    {
        $this->oockkiieqcwiocga("\x63\157\x6d\x6d\145\x6e\164\x73");
        return $this;
    }
    
    public function oockkiieqcwiocga(?string $ccamueccusigaaio) : self
    {
        $this->target = $ccamueccusigaaio;
        return $this;
    }
    
    public function eukmukacucooequu(array $ywmkwiwkosakssii = []) : self
    {
        $this->igmaewykumgwoaoy("\144\141\x74\141\55\141\162\x67\x73", json_encode($ywmkwiwkosakssii));
        return $this;
    }
    
    public function osmkwgikieoyykwg() : self
    {
        $this->oikgogcweiiaocka()->usoqcyyugsuyiewc("\163\157\162\164\x61\142\x6c\145\55\x73\x65\154\145\x63\164\x32")->qigsyyqgewgskemg("\x73\x6f\162\164\x61\x62\x6c\145\55\163\x65\x6c\145\x63\164\x32");
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
        return $this->aseocggwwegcmqes("\155\165\x6c\164\x69{$this->gueasuouwqysmomu()}");
    }
    
    public function kyiucygqsgequoys(?string $iwiewowoqmoekyqi = null) : self
    {
        return $this->igmaewykumgwoaoy("\144\141\164\x61\55\x70\x6c\141\143\x65\150\157\x6c\x64\145\162", $iwiewowoqmoekyqi);
    }
    
    public function qgsieamsswkgysow(array $ywmkwiwkosakssii = []) : void
    {
        goto gkmgcqsicokksosc;
        wguqeameioywkcum:
        ouicgucmgawgyais:
        goto kkwikyuiwyaaokgu;
        eqiqamsciuamsqoq:
        cgykugsckguoykyi:
        goto qesamoswoqgcuyae;
        gewikeykcysagaki:
        $this->igmaewykumgwoaoy("\x64\x61\164\x61\x2d\x74\141\162\147\x65\164", $this->squsacgomqgkakaw());
        goto wguqeameioywkcum;
        gkmgcqsicokksosc:
        if ($this->somyygqqawwswkyk()) {
            goto akeaemmagkkwsamy;
        }
        goto igqagwwkgcgkweay;
        sckmgcowqceaoicu:
        if (!is_array($oammesyieqmwuwyi)) {
            goto igkewuickceykeoc;
        }
        goto aaqeqiaquomiwywg;
        wseiuooqwmgigama:
        parent::qgsieamsswkgysow($ywmkwiwkosakssii);
        goto kauusamousoweoia;
        cwmweiaomowsaswo:
        igkewuickceykeoc:
        goto wseiuooqwmgigama;
        kigugswqqcsmeuey:
        $this->igmaewykumgwoaoy("\x63\154\141\163\x73", "\x63\165\x73\x74\157\x6d\55\163\145\154\x65\143\164\62\55\x73\x65\154\x65\x63\x74\157\162");
        goto eqiqamsciuamsqoq;
        qesamoswoqgcuyae:
        $oammesyieqmwuwyi = $this->wasgwsogmuquqeaa();
        goto sckmgcowqceaoicu;
        aaqeqiaquomiwywg:
        if (!$this->squsacgomqgkakaw()) {
            goto ouicgucmgawgyais;
        }
        goto gewikeykcysagaki;
        kkwikyuiwyaaokgu:
        $this->igmaewykumgwoaoy("\x64\141\x74\x61\x2d\x69\164\145\155\x73", json_encode($oammesyieqmwuwyi));
        goto cwmweiaomowsaswo;
        cswacsayomisqwsc:
        akeaemmagkkwsamy:
        goto kigugswqqcsmeuey;
        igqagwwkgcgkweay:
        $this->igmaewykumgwoaoy("\143\x6c\x61\163\163", "\163\x65\x6c\x65\x63\x74\62\x2d\x73\x65\x6c\145\x63\164\x6f\162");
        goto easiiuiosaweasya;
        easiiuiosaweasya:
        goto cgykugsckguoykyi;
        goto cswacsayomisqwsc;
        kauusamousoweoia:
    }
}
