<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b6c65a2d22             |
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
    
    protected $objectType = "\x6f\160\164\151\157\156\163\55\160\141\147\145";
    
    protected ?string $capability = null;
    
    protected array $configuration = [];
    
    public function __construct($aokagokqyuysuksm = null)
    {
        goto yqwgcuuuocyqysso;
        amyqwcqwqccgwigq:
        $this->capability = "\x6d\x61\x6e\x61\147\x65\x5f\x6f\x70\164\151\x6f\x6e\x73";
        goto ccsemsumseigmmoa;
        ccsemsumseigmmoa:
        $this->configuration = [];
        goto qyogwowwcogugweq;
        yqwgcuuuocyqysso:
        $this->id = $aokagokqyuysuksm;
        goto miekisauamqswgie;
        qyogwowwcogugweq:
        parent::__construct();
        goto eeqaqskwawmqocaa;
        miekisauamqswgie:
        $this->showNames = true;
        goto amyqwcqwqccgwigq;
        eeqaqskwawmqocaa:
    }
    public function wigskegsqequoeks()
    {
        $this->qcsmikeggeemccuu("\167\x70", [$this, "\147\157\x73\155\x71\143\155\x6d\157\x6d\x6b\161\167\155\151\x73"], 99)->qcsmikeggeemccuu("\x69\156\151\164", [$this, "\x69\x6e\x69\x74"], 99)->qcsmikeggeemccuu("\x61\x64\x6d\151\156\x5f\x69\x6e\x69\x74", [$this, "\171\145\x79\151\147\x75\x79\145\x67\x6d\155\171\x75\x73\145\x61"], 99);
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
        $this->wcweamocuicuusky("\164\141\x78\x6f\x6e\x6f\155\151\145\163", $seyqqsmuaiegkeeq);
        return $this->ycgswwsswoyyeqgc("\164\x65\162\155");
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
        goto gcskwyqqyqmauwow;
        ugssgcuiagwkicqq:
        return $aokagokqyuysuksm;
        goto qcuiamcckoceggwu;
        sugqcoagaisyeuge:
        return '';
        goto ooaiowseiuogqeek;
        soisuocuwuwaaoig:
        caasqyskqsecuawu:
        goto sugqcoagaisyeuge;
        uoeegwsgqyokwwws:
        iyomyggaemmmucqq:
        goto ugssgcuiagwkicqq;
        komwmwgumckimamm:
        if ($ymqmyyeuycgmigyo) {
            goto ckwwkkemmmccgcws;
        }
        goto geywkoimqymqkyem;
        mqogcscwmowgogkm:
        $aokagokqyuysuksm = $this->mwikyscisascoeea();
        goto cgueqqgoouykmoes;
        geywkoimqymqkyem:
        goto caasqyskqsecuawu;
        goto uoeegwsgqyokwwws;
        gcskwyqqyqmauwow:
        $ymqmyyeuycgmigyo = $this->aakmagwggmkoiiyu();
        goto mqogcscwmowgogkm;
        cgueqqgoouykmoes:
        if ($aokagokqyuysuksm) {
            goto iyomyggaemmmucqq;
        }
        goto komwmwgumckimamm;
        iiukuwmwimmiiiim:
        ckwwkkemmmccgcws:
        goto ewukmsoywcsagcsg;
        qcuiamcckoceggwu:
        goto caasqyskqsecuawu;
        goto iiukuwmwimmiiiim;
        ewukmsoywcsagcsg:
        return $ymqmyyeuycgmigyo;
        goto soisuocuwuwaaoig;
        ooaiowseiuogqeek:
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
        goto iusicoaiyamcoikg;
        gsaascomiaiemesg:
        kwigscuqywmmyess:
        goto egqgieqcwseicqki;
        egqgieqcwseicqki:
        return $this;
        goto gyessymseyoiocey;
        iusicoaiyamcoikg:
        foreach ($oyuikeusicgqgwak as $uusmaiomayssaecw => $uiewakwqscemywuo) {
            $this->wcweamocuicuusky($uusmaiomayssaecw, $uiewakwqscemywuo);
            qmqakowgsqgcqass:
        }
        goto gsaascomiaiemesg;
        gyessymseyoiocey:
    }
    
    public function wcweamocuicuusky($uusmaiomayssaecw, $eqgoocgaqwqcimie) : self
    {
        goto imycoqycguuasiac;
        imycoqycguuasiac:
        if (isset($this->configuration[$uusmaiomayssaecw])) {
            goto uguigcssweukyeic;
        }
        goto ieuwcqiiwigyigag;
        ieuwcqiiwigyigag:
        $this->configuration[$uusmaiomayssaecw] = $eqgoocgaqwqcimie;
        goto ikiwkmouiywogyqo;
        uiwemgiowgygaqic:
        return $this;
        goto eecakgugucgugsqg;
        ikiwkmouiywogyqo:
        uguigcssweukyeic:
        goto uiwemgiowgygaqic;
        eecakgugucgugsqg:
    }
}
