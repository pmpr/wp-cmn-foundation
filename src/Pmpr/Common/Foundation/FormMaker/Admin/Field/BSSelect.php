<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613bb98fa102d             |
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
        parent::__construct($aokagokqyuysuksm, $ymqmyyeuycgmigyo, $qiouiwasaauyaaue, $mkqqqewsokcswckc, 'bsselect');
        $this->qcgocuceocquqcuw('data-live-search', 'true')->qcgocuceocquqcuw('data-style', 'btn-white')->qigsyyqgewgskemg('pr-boostrap-select boostrap-select');
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
                kaiesowkgwogqseg:
            }
            egaymskkosukqeao:
        }
        return $this;
    }
    
    public function ikgocaywoggomiak($giqggecqqikcysgq = null) : self
    {
        if ($giqggecqqikcysgq) {
            $this->qcgocuceocquqcuw('data-max-options', (string) $giqggecqqikcysgq);
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
    
    public function wkqyoukciomqiyew() : self
    {
        $this->oockkiieqcwiocga('models');
        return $this;
    }
    
    public function kacywqgmseagyuyu() : self
    {
        $this->oockkiieqcwiocga('icons');
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
        $ywmkwiwkosakssii = json_encode($ywmkwiwkosakssii, JSON_UNESCAPED_SLASHES);
        $this->qcgocuceocquqcuw('data-args', $ywmkwiwkosakssii);
        return $this;
    }
    
    public function osmkwgikieoyykwg() : self
    {
        $this->oikgogcweiiaocka()->usoqcyyugsuyiewc('sortable-select')->qigsyyqgewgskemg('sortable-select');
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
        return $this->aseocggwwegcmqes("multi{$this->gueasuouwqysmomu()}")->iqiasugacuagiwcw();
    }
    
    public function zosqeeykkcqmmkqs() : bool
    {
        return strpos($this->gueasuouwqysmomu(), 'multi') !== false;
    }
    
    public function kyiucygqsgequoys(?string $iwiewowoqmoekyqi = null) : self
    {
        return $this->qcgocuceocquqcuw('title', $iwiewowoqmoekyqi);
    }
    
    public function iqiasugacuagiwcw($gaeqamemwmwsyukm = null) : self
    {
        $uiymkeeaukcyqqik = 'count';
        if ($gaeqamemwmwsyukm) {
            $uiymkeeaukcyqqik = "{$uiymkeeaukcyqqik} > {$gaeqamemwmwsyukm}";
        }
        return $this->qcgocuceocquqcuw('data-selected-text-format', $uiymkeeaukcyqqik);
    }
    
    public function qgsieamsswkgysow(array $ywmkwiwkosakssii = []) : void
    {
        $oammesyieqmwuwyi = $this->wasgwsogmuquqeaa();
        if (is_array($oammesyieqmwuwyi)) {
            if ($this->squsacgomqgkakaw()) {
                $this->qcgocuceocquqcuw('data-target', $this->squsacgomqgkakaw());
            }
            $this->qcgocuceocquqcuw('data-items', json_encode($oammesyieqmwuwyi));
        }
        if (!$this->msmiagueogcsucgc()) {
            $this->kyiucygqsgequoys(__('Choice on of following options...', PR__CMN__FOUNDATION))->qcgocuceocquqcuw('data-deselect-all-text', __('Deselect', PR__CMN__FOUNDATION));
        }
        parent::qgsieamsswkgysow($ywmkwiwkosakssii);
    }
}
