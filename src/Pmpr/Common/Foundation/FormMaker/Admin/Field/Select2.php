<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b2e4befc8c             |
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
        parent::__construct($aokagokqyuysuksm, $ymqmyyeuycgmigyo, $qiouiwasaauyaaue, $mkqqqewsokcswckc, "\163\x65\154\x65\143\x74\x32");
        $this->igmaewykumgwoaoy("\x64\x61\164\x61\55\x61\x64\144\141\x62\154\x65", "\x66\x61\154\163\x65");
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
        ommcykyccgwugoqm:
        return $this;
        goto iqmsuqsowuugeqkk;
        kaaemgwqywywyaic:
        foreach ($oammesyieqmwuwyi as $igqsaukqcqscimok) {
            $this->oeewiaacscgyamai($igqsaukqcqscimok);
            cmcokscaskcamuuq:
        }
        goto yioiswceaiqqiiwi;
        iqmsuqsowuugeqkk:
    }
    
    public function ikgocaywoggomiak($giqggecqqikcysgq = null) : self
    {
        goto aquqwcumywwyyaca;
        aquqwcumywwyyaca:
        if (!$giqggecqqikcysgq) {
            goto qyeqgykkuoikusue;
        }
        goto ysowyesceeamcimi;
        qqiyociaumgusckw:
        qyeqgykkuoikusue:
        goto ksqksagegqimoksg;
        ysowyesceeamcimi:
        $this->igmaewykumgwoaoy("\x64\141\164\141\55\155\141\x78\x69\155\x75\155\x2d\x73\145\x6c\x65\143\x74\x69\157\156\55\154\x65\x6e\x67\164\150", (string) $giqggecqqikcysgq);
        goto qqiyociaumgusckw;
        ksqksagegqimoksg:
        return $this;
        goto kwmqeaimowikmkyy;
        kwmqeaimowikmkyy:
    }
    
    public function soyqkauogoaqekos() : self
    {
        $this->oockkiieqcwiocga("\165\x73\x65\162\163");
        return $this;
    }
    
    public function yyayequseyasoyks() : self
    {
        $this->oockkiieqcwiocga("\x74\145\x72\155\x73");
        return $this;
    }
    
    public function smmismmuuccmscya() : self
    {
        $this->oockkiieqcwiocga("\160\x6f\x73\x74\163");
        return $this;
    }
    
    public function squsacgomqgkakaw() : ?string
    {
        return $this->target;
    }
    
    public function imwouwmsiukakwqi() : self
    {
        $this->oockkiieqcwiocga("\x63\157\155\x6d\145\156\164\163");
        return $this;
    }
    
    public function oockkiieqcwiocga(?string $ccamueccusigaaio) : self
    {
        $this->target = $ccamueccusigaaio;
        return $this;
    }
    
    public function eukmukacucooequu(array $ywmkwiwkosakssii = []) : self
    {
        $this->igmaewykumgwoaoy("\x64\x61\164\141\x2d\x61\162\147\x73", json_encode($ywmkwiwkosakssii));
        return $this;
    }
    
    public function osmkwgikieoyykwg() : self
    {
        $this->oikgogcweiiaocka()->usoqcyyugsuyiewc("\163\x6f\x72\164\141\142\x6c\145\55\x73\145\154\145\143\164\x32")->qigsyyqgewgskemg("\x73\157\x72\x74\141\142\x6c\x65\55\x73\x65\154\145\x63\x74\62");
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
        return $this->aseocggwwegcmqes("\155\x75\154\164\x69{$this->gueasuouwqysmomu()}");
    }
    
    public function kyiucygqsgequoys(?string $iwiewowoqmoekyqi = null) : self
    {
        return $this->igmaewykumgwoaoy("\144\141\x74\x61\55\160\x6c\x61\x63\x65\150\157\x6c\144\x65\162", $iwiewowoqmoekyqi);
    }
    
    public function qgsieamsswkgysow(array $ywmkwiwkosakssii = []) : void
    {
        goto igkewuickceykeoc;
        wguqeameioywkcum:
        $this->igmaewykumgwoaoy("\x64\141\x74\x61\x2d\x69\x74\145\155\163", json_encode($oammesyieqmwuwyi));
        goto kkwikyuiwyaaokgu;
        igqagwwkgcgkweay:
        goto akeaemmagkkwsamy;
        goto easiiuiosaweasya;
        cwmweiaomowsaswo:
        parent::qgsieamsswkgysow($ywmkwiwkosakssii);
        goto wseiuooqwmgigama;
        kigugswqqcsmeuey:
        akeaemmagkkwsamy:
        goto eqiqamsciuamsqoq;
        cswacsayomisqwsc:
        $this->igmaewykumgwoaoy("\x63\154\141\163\163", "\143\165\x73\164\x6f\x6d\55\163\145\x6c\x65\143\x74\x32\55\x73\145\154\145\143\x74\x6f\x72");
        goto kigugswqqcsmeuey;
        gkmgcqsicokksosc:
        $this->igmaewykumgwoaoy("\143\154\x61\x73\x73", "\x73\x65\154\x65\143\164\x32\x2d\x73\145\154\x65\x63\x74\x6f\162");
        goto igqagwwkgcgkweay;
        easiiuiosaweasya:
        kqqscwcakcekcsyc:
        goto cswacsayomisqwsc;
        sckmgcowqceaoicu:
        if (!$this->squsacgomqgkakaw()) {
            goto cgykugsckguoykyi;
        }
        goto aaqeqiaquomiwywg;
        aaqeqiaquomiwywg:
        $this->igmaewykumgwoaoy("\144\x61\x74\141\x2d\x74\141\162\x67\x65\164", $this->squsacgomqgkakaw());
        goto gewikeykcysagaki;
        qesamoswoqgcuyae:
        if (!is_array($oammesyieqmwuwyi)) {
            goto ouicgucmgawgyais;
        }
        goto sckmgcowqceaoicu;
        gewikeykcysagaki:
        cgykugsckguoykyi:
        goto wguqeameioywkcum;
        kkwikyuiwyaaokgu:
        ouicgucmgawgyais:
        goto cwmweiaomowsaswo;
        eqiqamsciuamsqoq:
        $oammesyieqmwuwyi = $this->wasgwsogmuquqeaa();
        goto qesamoswoqgcuyae;
        igkewuickceykeoc:
        if ($this->somyygqqawwswkyk()) {
            goto kqqscwcakcekcsyc;
        }
        goto gkmgcqsicokksosc;
        wseiuooqwmgigama:
    }
}
