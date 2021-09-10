<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b3993be3fb             |
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
    
    protected $objectType = "\x6f\x70\164\151\157\156\x73\55\x70\141\x67\x65";
    
    protected ?string $capability = null;
    
    protected array $configuration = [];
    
    public function __construct($aokagokqyuysuksm = null)
    {
        goto yssakamqiieugqyk;
        yssakamqiieugqyk:
        $this->id = $aokagokqyuysuksm;
        goto yqwgcuuuocyqysso;
        miekisauamqswgie:
        $this->capability = "\155\141\x6e\141\x67\x65\137\x6f\x70\164\151\x6f\x6e\163";
        goto amyqwcqwqccgwigq;
        yqwgcuuuocyqysso:
        $this->showNames = true;
        goto miekisauamqswgie;
        amyqwcqwqccgwigq:
        $this->configuration = [];
        goto ccsemsumseigmmoa;
        ccsemsumseigmmoa:
        parent::__construct();
        goto qyogwowwcogugweq;
        qyogwowwcogugweq:
    }
    public function wigskegsqequoeks()
    {
        $this->qcsmikeggeemccuu("\167\160", [$this, "\x67\x6f\163\155\161\143\x6d\x6d\157\x6d\x6b\x71\167\x6d\151\x73"], 99)->qcsmikeggeemccuu("\x69\x6e\x69\164", [$this, "\x69\x6e\151\164"], 99)->qcsmikeggeemccuu("\x61\x64\155\x69\156\137\x69\x6e\x69\x74", [$this, "\x79\145\x79\151\x67\165\171\145\x67\155\155\171\x75\163\x65\x61"], 99);
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
        $this->wcweamocuicuusky("\x74\x61\x78\x6f\156\157\155\x69\145\x73", $seyqqsmuaiegkeeq);
        return $this->ycgswwsswoyyeqgc("\164\145\x72\155");
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
        mqogcscwmowgogkm:
        if ($aokagokqyuysuksm) {
            goto caasqyskqsecuawu;
        }
        goto cgueqqgoouykmoes;
        cgueqqgoouykmoes:
        if ($ymqmyyeuycgmigyo) {
            goto iyomyggaemmmucqq;
        }
        goto komwmwgumckimamm;
        geywkoimqymqkyem:
        caasqyskqsecuawu:
        goto uoeegwsgqyokwwws;
        komwmwgumckimamm:
        goto eeqaqskwawmqocaa;
        goto geywkoimqymqkyem;
        ugssgcuiagwkicqq:
        goto eeqaqskwawmqocaa;
        goto qcuiamcckoceggwu;
        ckwwkkemmmccgcws:
        $ymqmyyeuycgmigyo = $this->aakmagwggmkoiiyu();
        goto gcskwyqqyqmauwow;
        soisuocuwuwaaoig:
        return '';
        goto sugqcoagaisyeuge;
        gcskwyqqyqmauwow:
        $aokagokqyuysuksm = $this->mwikyscisascoeea();
        goto mqogcscwmowgogkm;
        uoeegwsgqyokwwws:
        return $aokagokqyuysuksm;
        goto ugssgcuiagwkicqq;
        ewukmsoywcsagcsg:
        eeqaqskwawmqocaa:
        goto soisuocuwuwaaoig;
        iiukuwmwimmiiiim:
        return $ymqmyyeuycgmigyo;
        goto ewukmsoywcsagcsg;
        qcuiamcckoceggwu:
        iyomyggaemmmucqq:
        goto iiukuwmwimmiiiim;
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
