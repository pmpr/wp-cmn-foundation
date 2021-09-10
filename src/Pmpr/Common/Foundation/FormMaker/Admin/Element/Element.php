<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613bb98fa102d             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\FormMaker\Admin\Element;

use Pmpr\Common\Foundation\FormMaker\Admin\Element\Interfaces\ElementInterface;
use Pmpr\Common\Foundation\FormMaker\Admin\MetaTab;
use Pmpr\Common\Foundation\FormMaker\Admin\Traits\FieldTrait;
use Pmpr\Common\Foundation\FormMaker\Admin\Traits\ElementTrait;
use Pmpr\Common\Foundation\FormMaker\Admin\Common;
use CMB2_Field;
use Pmpr\Common\Foundation\Traits\ToArrayTrait;

class Element extends Common implements ElementInterface
{
    use FieldTrait, ToArrayTrait, ElementTrait;
    
    protected int $priority = 0;
    
    protected bool $show = true;
    
    protected ?string $id = null;
    
    protected ?string $name = null;
    
    protected ?string $title = null;
    
    protected bool $showNames = false;
    
    protected $objectType = 'options-page';
    
    protected ?string $capability = null;
    
    protected array $configuration = [];
    
    public function __construct($aokagokqyuysuksm = null)
    {
        $this->id = $aokagokqyuysuksm;
        $this->showNames = true;
        $this->capability = 'manage_options';
        $this->configuration = [];
        parent::__construct();
    }
    public function wigskegsqequoeks()
    {
        $this->qcsmikeggeemccuu('wp', [$this, 'gosmqcmmomkqwmis'], 99)->qcsmikeggeemccuu('init', [$this, 'init'], 99)->qcsmikeggeemccuu('admin_init', [$this, 'yeyiguyegmmyusea'], 99);
        parent::wigskegsqequoeks();
    }
    public function gogaagekwoisaqgu()
    {
    }
    public function init()
    {
        $this->gogaagekwoisaqgu();
    }
    public function yeyiguyegmmyusea()
    {
    }
    public function gosmqcmmomkqwmis()
    {
    }
    
    public function wkkcmkuiigsukyik() : bool
    {
        return $this->show;
    }
    
    public function wiukukykqcgssssq($ekcswiguywieeeoc = true) : self
    {
        $this->show = $ekcswiguywieeeoc;
        return $this;
    }
    
    public function gwaeeegmgggawiyi() : ?string
    {
        return $this->capability;
    }
    
    public function womysscuckiacoua(string $eogowigeyucaauig) : self
    {
        $this->capability = $eogowigeyucaauig;
        return $this;
    }
    
    public function aaamyckgicycisqq()
    {
        return $this->objectType;
    }
    
    public function ycgswwsswoyyeqgc($mqyaskyaekmkegmg) : self
    {
        $this->objectType = $mqyaskyaekmkegmg;
        return $this;
    }
    
    public function ekwcyuwcmeeoyqqm(array $seyqqsmuaiegkeeq = []) : self
    {
        $this->wcweamocuicuusky('taxonomies', $seyqqsmuaiegkeeq);
        return $this->ycgswwsswoyyeqgc('term');
    }
    
    public function qcgakseyaikigqco() : ?string
    {
        return $this->title;
    }
    
    public function gswweykyogmsyawy(?string $meqocwsecsywiiqs) : self
    {
        $this->title = $meqocwsecsywiiqs;
        return $this;
    }
    public function ecwgiiuacoaokqkw()
    {
    }
    
    public function aakmagwggmkoiiyu() : ?string
    {
        return $this->name;
    }
    
    public function usuqmwksoeaayaig(string $ymqmyyeuycgmigyo) : self
    {
        $this->name = $ymqmyyeuycgmigyo;
        return $this;
    }
    
    public function eoceqqugyiaqqayw() : ?bool
    {
        return $this->showNames;
    }
    
    public function eioykqwseqsqaskq(bool $egmsqkuugooyouuu) : self
    {
        $this->showNames = $egmsqkuugooyouuu;
        return $this;
    }
    
    public function mwikyscisascoeea() : ?string
    {
        return $this->id;
    }
    
    public function ggiaseqygioygumq(string $aokagokqyuysuksm) : self
    {
        $this->id = $aokagokqyuysuksm;
        return $this;
    }
    
    public function yywskysiycwkwsgw() : ?int
    {
        return $this->priority;
    }
    
    public function jyumyyugiwwiqomk(int $sqqewmoeaekuyyas) : self
    {
        $this->priority = $sqqewmoeaekuyyas;
        return $this;
    }
    
    public function cisyiemkeykgkomc() : ?string
    {
        $ymqmyyeuycgmigyo = $this->aakmagwggmkoiiyu();
        $aokagokqyuysuksm = $this->mwikyscisascoeea();
        if ($aokagokqyuysuksm) {
            return $aokagokqyuysuksm;
        } elseif ($ymqmyyeuycgmigyo) {
            return $ymqmyyeuycgmigyo;
        }
        return '';
    }
    
    public function icwmkesyskgskquu() : ?bool
    {
        return true;
    }
    
    public function weqsyyuyccsemacu() : array
    {
        return $this->configuration;
    }
    
    public function megwuoouecmkuaqm($oyuikeusicgqgwak) : self
    {
        foreach ($oyuikeusicgqgwak as $uusmaiomayssaecw => $uiewakwqscemywuo) {
            $this->wcweamocuicuusky($uusmaiomayssaecw, $uiewakwqscemywuo);
            isewysikysqewkis:
        }
        ugykmcouiwiscoqu:
        return $this;
    }
    
    public function wcweamocuicuusky($uusmaiomayssaecw, $eqgoocgaqwqcimie) : self
    {
        if (!isset($this->configuration[$uusmaiomayssaecw])) {
            $this->configuration[$uusmaiomayssaecw] = $eqgoocgaqwqcimie;
        }
        return $this;
    }
}
