<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b3993be3fb             |
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
        parent::__construct($aokagokqyuysuksm, $ymqmyyeuycgmigyo, $qiouiwasaauyaaue, $mkqqqewsokcswckc, "\x73\145\x6c\145\x63\164\x32");
        $this->igmaewykumgwoaoy("\144\x61\164\x61\x2d\x61\144\144\141\142\x6c\x65", "\146\141\154\163\145");
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
        mmqwyegygkueycwc:
        cmcokscaskcamuuq:
        goto ommcykyccgwugoqm;
        yioiswceaiqqiiwi:
        foreach ($oammesyieqmwuwyi as $igqsaukqcqscimok) {
            $this->oeewiaacscgyamai($igqsaukqcqscimok);
            eyqykmseeukuwiqy:
        }
        goto mmqwyegygkueycwc;
        iqmsuqsowuugeqkk:
        return $this;
        goto qyeqgykkuoikusue;
        kaaemgwqywywyaic:
        if (!(is_array($oammesyieqmwuwyi) && $oammesyieqmwuwyi)) {
            goto wemoskgcoyswcqcw;
        }
        goto yioiswceaiqqiiwi;
        ommcykyccgwugoqm:
        wemoskgcoyswcqcw:
        goto iqmsuqsowuugeqkk;
        qyeqgykkuoikusue:
    }
    
    public function ikgocaywoggomiak($giqggecqqikcysgq = null) : self
    {
        goto ysowyesceeamcimi;
        kwmqeaimowikmkyy:
        return $this;
        goto kqqscwcakcekcsyc;
        ksqksagegqimoksg:
        aquqwcumywwyyaca:
        goto kwmqeaimowikmkyy;
        ysowyesceeamcimi:
        if (!$giqggecqqikcysgq) {
            goto aquqwcumywwyyaca;
        }
        goto qqiyociaumgusckw;
        qqiyociaumgusckw:
        $this->igmaewykumgwoaoy("\144\x61\x74\x61\55\x6d\141\170\x69\155\165\155\55\163\145\154\x65\x63\x74\151\x6f\x6e\x2d\x6c\x65\156\147\x74\150", (string) $giqggecqqikcysgq);
        goto ksqksagegqimoksg;
        kqqscwcakcekcsyc:
    }
    
    public function soyqkauogoaqekos() : self
    {
        $this->oockkiieqcwiocga("\x75\163\x65\162\x73");
        return $this;
    }
    
    public function yyayequseyasoyks() : self
    {
        $this->oockkiieqcwiocga("\x74\145\162\155\x73");
        return $this;
    }
    
    public function smmismmuuccmscya() : self
    {
        $this->oockkiieqcwiocga("\160\x6f\163\164\163");
        return $this;
    }
    
    public function squsacgomqgkakaw() : ?string
    {
        return $this->target;
    }
    
    public function imwouwmsiukakwqi() : self
    {
        $this->oockkiieqcwiocga("\x63\157\x6d\155\x65\156\x74\x73");
        return $this;
    }
    
    public function oockkiieqcwiocga(?string $ccamueccusigaaio) : self
    {
        $this->target = $ccamueccusigaaio;
        return $this;
    }
    
    public function eukmukacucooequu(array $ywmkwiwkosakssii = []) : self
    {
        $this->igmaewykumgwoaoy("\144\x61\x74\x61\55\x61\162\147\x73", json_encode($ywmkwiwkosakssii));
        return $this;
    }
    
    public function osmkwgikieoyykwg() : self
    {
        $this->oikgogcweiiaocka()->usoqcyyugsuyiewc("\163\x6f\162\x74\141\x62\x6c\x65\x2d\x73\145\154\145\143\x74\62")->qigsyyqgewgskemg("\x73\157\162\x74\141\142\154\x65\55\163\145\x6c\145\x63\164\x32");
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
        return $this->aseocggwwegcmqes("\x6d\x75\x6c\x74\151{$this->gueasuouwqysmomu()}");
    }
    
    public function kyiucygqsgequoys(?string $iwiewowoqmoekyqi = null) : self
    {
        return $this->igmaewykumgwoaoy("\x64\x61\x74\141\x2d\160\x6c\141\x63\x65\x68\157\x6c\144\x65\x72", $iwiewowoqmoekyqi);
    }
    
    public function qgsieamsswkgysow(array $ywmkwiwkosakssii = []) : void
    {
        goto gkmgcqsicokksosc;
        gkmgcqsicokksosc:
        if ($this->somyygqqawwswkyk()) {
            goto akeaemmagkkwsamy;
        }
        goto igqagwwkgcgkweay;
        kigugswqqcsmeuey:
        $this->igmaewykumgwoaoy("\x63\x6c\x61\163\x73", "\143\165\x73\164\157\155\x2d\163\145\154\145\x63\164\x32\x2d\163\x65\154\145\143\x74\x6f\x72");
        goto eqiqamsciuamsqoq;
        igqagwwkgcgkweay:
        $this->igmaewykumgwoaoy("\143\154\141\x73\163", "\x73\145\154\145\x63\164\62\55\163\x65\x6c\x65\143\164\x6f\162");
        goto easiiuiosaweasya;
        kkwikyuiwyaaokgu:
        $this->igmaewykumgwoaoy("\x64\141\164\141\x2d\x69\164\145\155\x73", json_encode($oammesyieqmwuwyi));
        goto cwmweiaomowsaswo;
        aaqeqiaquomiwywg:
        if (!$this->squsacgomqgkakaw()) {
            goto ouicgucmgawgyais;
        }
        goto gewikeykcysagaki;
        easiiuiosaweasya:
        goto cgykugsckguoykyi;
        goto cswacsayomisqwsc;
        gewikeykcysagaki:
        $this->igmaewykumgwoaoy("\144\141\164\141\x2d\x74\x61\162\x67\145\x74", $this->squsacgomqgkakaw());
        goto wguqeameioywkcum;
        eqiqamsciuamsqoq:
        cgykugsckguoykyi:
        goto qesamoswoqgcuyae;
        sckmgcowqceaoicu:
        if (!is_array($oammesyieqmwuwyi)) {
            goto igkewuickceykeoc;
        }
        goto aaqeqiaquomiwywg;
        wseiuooqwmgigama:
        parent::qgsieamsswkgysow($ywmkwiwkosakssii);
        goto kauusamousoweoia;
        qesamoswoqgcuyae:
        $oammesyieqmwuwyi = $this->wasgwsogmuquqeaa();
        goto sckmgcowqceaoicu;
        cwmweiaomowsaswo:
        igkewuickceykeoc:
        goto wseiuooqwmgigama;
        wguqeameioywkcum:
        ouicgucmgawgyais:
        goto kkwikyuiwyaaokgu;
        cswacsayomisqwsc:
        akeaemmagkkwsamy:
        goto kigugswqqcsmeuey;
        kauusamousoweoia:
    }
}
