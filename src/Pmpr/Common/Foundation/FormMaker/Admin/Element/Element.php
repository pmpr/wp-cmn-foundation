<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b499786a1b             |
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
    
    protected $objectType = "\x6f\x70\x74\x69\157\156\x73\55\160\141\x67\145";
    
    protected ?string $capability = null;
    
    protected array $configuration = [];
    
    public function __construct($aokagokqyuysuksm = null)
    {
        goto yssakamqiieugqyk;
        miekisauamqswgie:
        $this->capability = "\155\x61\156\x61\x67\145\x5f\x6f\x70\x74\151\x6f\x6e\163";
        goto amyqwcqwqccgwigq;
        yssakamqiieugqyk:
        $this->id = $aokagokqyuysuksm;
        goto yqwgcuuuocyqysso;
        amyqwcqwqccgwigq:
        $this->configuration = [];
        goto ccsemsumseigmmoa;
        ccsemsumseigmmoa:
        parent::__construct();
        goto qyogwowwcogugweq;
        yqwgcuuuocyqysso:
        $this->showNames = true;
        goto miekisauamqswgie;
        qyogwowwcogugweq:
    }
    public function wigskegsqequoeks()
    {
        $this->qcsmikeggeemccuu("\167\160", [$this, "\x67\157\163\x6d\x71\143\x6d\155\x6f\155\x6b\161\167\155\x69\x73"], 99)->qcsmikeggeemccuu("\x69\156\x69\x74", [$this, "\x69\x6e\151\x74"], 99)->qcsmikeggeemccuu("\x61\x64\x6d\x69\156\137\x69\x6e\x69\164", [$this, "\x79\x65\171\x69\147\165\171\145\147\155\x6d\x79\x75\163\145\x61"], 99);
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
        $this->wcweamocuicuusky("\x74\141\x78\x6f\x6e\157\x6d\151\x65\163", $seyqqsmuaiegkeeq);
        return $this->ycgswwsswoyyeqgc("\164\x65\x72\x6d");
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
        uoeegwsgqyokwwws:
        return $aokagokqyuysuksm;
        goto ugssgcuiagwkicqq;
        iiukuwmwimmiiiim:
        return $ymqmyyeuycgmigyo;
        goto ewukmsoywcsagcsg;
        ugssgcuiagwkicqq:
        goto eeqaqskwawmqocaa;
        goto qcuiamcckoceggwu;
        komwmwgumckimamm:
        goto eeqaqskwawmqocaa;
        goto geywkoimqymqkyem;
        qcuiamcckoceggwu:
        iyomyggaemmmucqq:
        goto iiukuwmwimmiiiim;
        geywkoimqymqkyem:
        caasqyskqsecuawu:
        goto uoeegwsgqyokwwws;
        gcskwyqqyqmauwow:
        $aokagokqyuysuksm = $this->mwikyscisascoeea();
        goto mqogcscwmowgogkm;
        ewukmsoywcsagcsg:
        eeqaqskwawmqocaa:
        goto soisuocuwuwaaoig;
        cgueqqgoouykmoes:
        if ($ymqmyyeuycgmigyo) {
            goto iyomyggaemmmucqq;
        }
        goto komwmwgumckimamm;
        ckwwkkemmmccgcws:
        $ymqmyyeuycgmigyo = $this->aakmagwggmkoiiyu();
        goto gcskwyqqyqmauwow;
        mqogcscwmowgogkm:
        if ($aokagokqyuysuksm) {
            goto caasqyskqsecuawu;
        }
        goto cgueqqgoouykmoes;
        soisuocuwuwaaoig:
        return '';
        goto sugqcoagaisyeuge;
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
        imycoqycguuasiac:
        $this->configuration[$uusmaiomayssaecw] = $eqgoocgaqwqcimie;
        goto ieuwcqiiwigyigag;
        ikiwkmouiywogyqo:
        return $this;
        goto uiwemgiowgygaqic;
        ieuwcqiiwigyigag:
        gyessymseyoiocey:
        goto ikiwkmouiywogyqo;
        uguigcssweukyeic:
        if (isset($this->configuration[$uusmaiomayssaecw])) {
            goto gyessymseyoiocey;
        }
        goto imycoqycguuasiac;
        uiwemgiowgygaqic:
    }
}
