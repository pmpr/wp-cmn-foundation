<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613bb98fa102d             |
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
        parent::__construct($aokagokqyuysuksm, $ymqmyyeuycgmigyo, $qiouiwasaauyaaue, $mkqqqewsokcswckc, 'select2');
        $this->igmaewykumgwoaoy('data-addable', 'false');
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
        if (is_array($oammesyieqmwuwyi) && $oammesyieqmwuwyi) {
            foreach ($oammesyieqmwuwyi as $igqsaukqcqscimok) {
                $this->oeewiaacscgyamai($igqsaukqcqscimok);
                cwikoaeqmmoimmso:
            }
            acggikioyeueeowg:
        }
        return $this;
    }
    
    public function ikgocaywoggomiak($giqggecqqikcysgq = null) : self
    {
        if ($giqggecqqikcysgq) {
            $this->igmaewykumgwoaoy('data-maximum-selection-length', (string) $giqggecqqikcysgq);
        }
        return $this;
    }
    
    public function soyqkauogoaqekos() : self
    {
        $this->oockkiieqcwiocga('users');
        return $this;
    }
    
    public function yyayequseyasoyks() : self
    {
        $this->oockkiieqcwiocga('terms');
        return $this;
    }
    
    public function smmismmuuccmscya() : self
    {
        $this->oockkiieqcwiocga('posts');
        return $this;
    }
    
    public function squsacgomqgkakaw() : ?string
    {
        return $this->target;
    }
    
    public function imwouwmsiukakwqi() : self
    {
        $this->oockkiieqcwiocga('comments');
        return $this;
    }
    
    public function oockkiieqcwiocga(?string $ccamueccusigaaio) : self
    {
        $this->target = $ccamueccusigaaio;
        return $this;
    }
    
    public function eukmukacucooequu(array $ywmkwiwkosakssii = []) : self
    {
        $this->igmaewykumgwoaoy('data-args', json_encode($ywmkwiwkosakssii));
        return $this;
    }
    
    public function osmkwgikieoyykwg() : self
    {
        $this->oikgogcweiiaocka()->usoqcyyugsuyiewc('sortable-select2')->qigsyyqgewgskemg('sortable-select2');
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
        return $this->aseocggwwegcmqes("multi{$this->gueasuouwqysmomu()}");
    }
    
    public function kyiucygqsgequoys(?string $iwiewowoqmoekyqi = null) : self
    {
        return $this->igmaewykumgwoaoy('data-placeholder', $iwiewowoqmoekyqi);
    }
    
    public function qgsieamsswkgysow(array $ywmkwiwkosakssii = []) : void
    {
        if ($this->somyygqqawwswkyk()) {
            $this->igmaewykumgwoaoy('class', 'custom-select2-selector');
        } else {
            $this->igmaewykumgwoaoy('class', 'select2-selector');
        }
        $oammesyieqmwuwyi = $this->wasgwsogmuquqeaa();
        if (is_array($oammesyieqmwuwyi)) {
            if ($this->squsacgomqgkakaw()) {
                $this->igmaewykumgwoaoy('data-target', $this->squsacgomqgkakaw());
            }
            $this->igmaewykumgwoaoy('data-items', json_encode($oammesyieqmwuwyi));
        }
        parent::qgsieamsswkgysow($ywmkwiwkosakssii);
    }
}
