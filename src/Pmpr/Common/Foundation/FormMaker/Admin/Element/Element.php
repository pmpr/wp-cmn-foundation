<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b5973b89a9             |
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
    
    protected $objectType = "\157\160\x74\x69\157\156\x73\x2d\160\141\147\145";
    
    protected ?string $capability = null;
    
    protected array $configuration = [];
    
    public function __construct($aokagokqyuysuksm = null)
    {
        goto yssakamqiieugqyk;
        yqwgcuuuocyqysso:
        $this->showNames = true;
        goto miekisauamqswgie;
        miekisauamqswgie:
        $this->capability = "\x6d\x61\x6e\x61\x67\145\x5f\x6f\160\164\151\x6f\x6e\x73";
        goto amyqwcqwqccgwigq;
        amyqwcqwqccgwigq:
        $this->configuration = [];
        goto ccsemsumseigmmoa;
        yssakamqiieugqyk:
        $this->id = $aokagokqyuysuksm;
        goto yqwgcuuuocyqysso;
        ccsemsumseigmmoa:
        parent::__construct();
        goto qyogwowwcogugweq;
        qyogwowwcogugweq:
    }
    public function wigskegsqequoeks()
    {
        $this->qcsmikeggeemccuu("\167\160", [$this, "\x67\x6f\x73\x6d\161\x63\x6d\x6d\157\155\x6b\x71\x77\x6d\x69\x73"], 99)->qcsmikeggeemccuu("\151\156\x69\164", [$this, "\151\x6e\151\x74"], 99)->qcsmikeggeemccuu("\141\x64\155\151\x6e\137\x69\x6e\x69\x74", [$this, "\x79\x65\171\151\x67\165\x79\145\147\155\155\171\165\x73\145\x61"], 99);
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
        $this->wcweamocuicuusky("\x74\x61\x78\157\156\x6f\155\151\x65\x73", $seyqqsmuaiegkeeq);
        return $this->ycgswwsswoyyeqgc("\164\x65\162\x6d");
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
        goto ckwwkkemmmccgcws;
        ewukmsoywcsagcsg:
        eeqaqskwawmqocaa:
        goto soisuocuwuwaaoig;
        cgueqqgoouykmoes:
        if ($ymqmyyeuycgmigyo) {
            goto iyomyggaemmmucqq;
        }
        goto komwmwgumckimamm;
        iiukuwmwimmiiiim:
        return $ymqmyyeuycgmigyo;
        goto ewukmsoywcsagcsg;
        gcskwyqqyqmauwow:
        $aokagokqyuysuksm = $this->mwikyscisascoeea();
        goto mqogcscwmowgogkm;
        soisuocuwuwaaoig:
        return '';
        goto sugqcoagaisyeuge;
        ckwwkkemmmccgcws:
        $ymqmyyeuycgmigyo = $this->aakmagwggmkoiiyu();
        goto gcskwyqqyqmauwow;
        uoeegwsgqyokwwws:
        return $aokagokqyuysuksm;
        goto ugssgcuiagwkicqq;
        qcuiamcckoceggwu:
        iyomyggaemmmucqq:
        goto iiukuwmwimmiiiim;
        geywkoimqymqkyem:
        caasqyskqsecuawu:
        goto uoeegwsgqyokwwws;
        komwmwgumckimamm:
        goto eeqaqskwawmqocaa;
        goto geywkoimqymqkyem;
        ugssgcuiagwkicqq:
        goto eeqaqskwawmqocaa;
        goto qcuiamcckoceggwu;
        mqogcscwmowgogkm:
        if ($aokagokqyuysuksm) {
            goto caasqyskqsecuawu;
        }
        goto cgueqqgoouykmoes;
        sugqcoagaisyeuge:
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
        goto qmqakowgsqgcqass;
        gsaascomiaiemesg:
        return $this;
        goto egqgieqcwseicqki;
        iusicoaiyamcoikg:
        ooaiowseiuogqeek:
        goto gsaascomiaiemesg;
        qmqakowgsqgcqass:
        foreach ($oyuikeusicgqgwak as $uusmaiomayssaecw => $uiewakwqscemywuo) {
            $this->wcweamocuicuusky($uusmaiomayssaecw, $uiewakwqscemywuo);
            kwigscuqywmmyess:
        }
        goto iusicoaiyamcoikg;
        egqgieqcwseicqki:
    }
    
    public function wcweamocuicuusky($uusmaiomayssaecw, $eqgoocgaqwqcimie) : self
    {
        goto uguigcssweukyeic;
        ieuwcqiiwigyigag:
        gyessymseyoiocey:
        goto ikiwkmouiywogyqo;
        imycoqycguuasiac:
        $this->configuration[$uusmaiomayssaecw] = $eqgoocgaqwqcimie;
        goto ieuwcqiiwigyigag;
        ikiwkmouiywogyqo:
        return $this;
        goto uiwemgiowgygaqic;
        uguigcssweukyeic:
        if (isset($this->configuration[$uusmaiomayssaecw])) {
            goto gyessymseyoiocey;
        }
        goto imycoqycguuasiac;
        uiwemgiowgygaqic:
    }
}
