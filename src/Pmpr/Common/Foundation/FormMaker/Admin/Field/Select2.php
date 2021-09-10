<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b499786a1b             |
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
        parent::__construct($aokagokqyuysuksm, $ymqmyyeuycgmigyo, $qiouiwasaauyaaue, $mkqqqewsokcswckc, "\x73\x65\154\x65\143\x74\x32");
        $this->igmaewykumgwoaoy("\144\141\164\x61\x2d\x61\x64\x64\141\142\x6c\145", "\146\x61\x6c\163\x65");
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
        yioiswceaiqqiiwi:
        foreach ($oammesyieqmwuwyi as $igqsaukqcqscimok) {
            $this->oeewiaacscgyamai($igqsaukqcqscimok);
            eyqykmseeukuwiqy:
        }
        goto mmqwyegygkueycwc;
        mmqwyegygkueycwc:
        cmcokscaskcamuuq:
        goto ommcykyccgwugoqm;
        ommcykyccgwugoqm:
        wemoskgcoyswcqcw:
        goto iqmsuqsowuugeqkk;
        iqmsuqsowuugeqkk:
        return $this;
        goto qyeqgykkuoikusue;
        qyeqgykkuoikusue:
    }
    
    public function ikgocaywoggomiak($giqggecqqikcysgq = null) : self
    {
        goto ysowyesceeamcimi;
        kwmqeaimowikmkyy:
        return $this;
        goto kqqscwcakcekcsyc;
        ysowyesceeamcimi:
        if (!$giqggecqqikcysgq) {
            goto aquqwcumywwyyaca;
        }
        goto qqiyociaumgusckw;
        qqiyociaumgusckw:
        $this->igmaewykumgwoaoy("\144\141\x74\x61\55\x6d\141\170\x69\x6d\x75\x6d\55\163\145\x6c\x65\143\x74\x69\157\x6e\55\x6c\145\156\x67\164\150", (string) $giqggecqqikcysgq);
        goto ksqksagegqimoksg;
        ksqksagegqimoksg:
        aquqwcumywwyyaca:
        goto kwmqeaimowikmkyy;
        kqqscwcakcekcsyc:
    }
    
    public function soyqkauogoaqekos() : self
    {
        $this->oockkiieqcwiocga("\x75\x73\145\x72\163");
        return $this;
    }
    
    public function yyayequseyasoyks() : self
    {
        $this->oockkiieqcwiocga("\164\145\x72\x6d\163");
        return $this;
    }
    
    public function smmismmuuccmscya() : self
    {
        $this->oockkiieqcwiocga("\160\157\163\164\163");
        return $this;
    }
    
    public function squsacgomqgkakaw() : ?string
    {
        return $this->target;
    }
    
    public function imwouwmsiukakwqi() : self
    {
        $this->oockkiieqcwiocga("\x63\x6f\155\x6d\145\156\164\x73");
        return $this;
    }
    
    public function oockkiieqcwiocga(?string $ccamueccusigaaio) : self
    {
        $this->target = $ccamueccusigaaio;
        return $this;
    }
    
    public function eukmukacucooequu(array $ywmkwiwkosakssii = []) : self
    {
        $this->igmaewykumgwoaoy("\144\x61\164\x61\x2d\141\162\x67\163", json_encode($ywmkwiwkosakssii));
        return $this;
    }
    
    public function osmkwgikieoyykwg() : self
    {
        $this->oikgogcweiiaocka()->usoqcyyugsuyiewc("\x73\x6f\x72\164\141\142\154\145\55\x73\145\154\145\x63\x74\62")->qigsyyqgewgskemg("\x73\157\x72\x74\x61\142\x6c\x65\55\x73\145\x6c\145\143\x74\x32");
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
        return $this->igmaewykumgwoaoy("\x64\141\x74\141\x2d\160\154\x61\x63\x65\150\157\154\144\x65\162", $iwiewowoqmoekyqi);
    }
    
    public function qgsieamsswkgysow(array $ywmkwiwkosakssii = []) : void
    {
        goto gkmgcqsicokksosc;
        cswacsayomisqwsc:
        akeaemmagkkwsamy:
        goto kigugswqqcsmeuey;
        easiiuiosaweasya:
        goto cgykugsckguoykyi;
        goto cswacsayomisqwsc;
        cwmweiaomowsaswo:
        igkewuickceykeoc:
        goto wseiuooqwmgigama;
        igqagwwkgcgkweay:
        $this->igmaewykumgwoaoy("\x63\x6c\x61\x73\x73", "\163\145\154\145\143\164\62\x2d\163\x65\x6c\145\143\164\157\162");
        goto easiiuiosaweasya;
        aaqeqiaquomiwywg:
        if (!$this->squsacgomqgkakaw()) {
            goto ouicgucmgawgyais;
        }
        goto gewikeykcysagaki;
        kkwikyuiwyaaokgu:
        $this->igmaewykumgwoaoy("\144\141\164\x61\x2d\x69\164\145\x6d\163", json_encode($oammesyieqmwuwyi));
        goto cwmweiaomowsaswo;
        qesamoswoqgcuyae:
        $oammesyieqmwuwyi = $this->wasgwsogmuquqeaa();
        goto sckmgcowqceaoicu;
        kigugswqqcsmeuey:
        $this->igmaewykumgwoaoy("\143\154\141\x73\163", "\x63\x75\x73\x74\157\155\x2d\x73\x65\154\145\143\164\62\55\x73\x65\x6c\145\143\x74\157\162");
        goto eqiqamsciuamsqoq;
        eqiqamsciuamsqoq:
        cgykugsckguoykyi:
        goto qesamoswoqgcuyae;
        sckmgcowqceaoicu:
        if (!is_array($oammesyieqmwuwyi)) {
            goto igkewuickceykeoc;
        }
        goto aaqeqiaquomiwywg;
        wguqeameioywkcum:
        ouicgucmgawgyais:
        goto kkwikyuiwyaaokgu;
        gkmgcqsicokksosc:
        if ($this->somyygqqawwswkyk()) {
            goto akeaemmagkkwsamy;
        }
        goto igqagwwkgcgkweay;
        gewikeykcysagaki:
        $this->igmaewykumgwoaoy("\144\x61\164\x61\x2d\164\x61\162\147\145\x74", $this->squsacgomqgkakaw());
        goto wguqeameioywkcum;
        wseiuooqwmgigama:
        parent::qgsieamsswkgysow($ywmkwiwkosakssii);
        goto kauusamousoweoia;
        kauusamousoweoia:
    }
}
