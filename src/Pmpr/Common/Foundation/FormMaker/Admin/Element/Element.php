<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b2e4befc8c             |
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
    
    protected $objectType = "\x6f\x70\164\x69\157\x6e\163\x2d\160\x61\147\x65";
    
    protected ?string $capability = null;
    
    protected array $configuration = [];
    
    public function __construct($aokagokqyuysuksm = null)
    {
        goto kqkicmysyusskuua;
        yssakamqiieugqyk:
        $this->showNames = true;
        goto yqwgcuuuocyqysso;
        amyqwcqwqccgwigq:
        parent::__construct();
        goto ccsemsumseigmmoa;
        miekisauamqswgie:
        $this->configuration = [];
        goto amyqwcqwqccgwigq;
        yqwgcuuuocyqysso:
        $this->capability = "\x6d\141\x6e\x61\x67\x65\x5f\x6f\x70\x74\x69\x6f\x6e\163";
        goto miekisauamqswgie;
        kqkicmysyusskuua:
        $this->id = $aokagokqyuysuksm;
        goto yssakamqiieugqyk;
        ccsemsumseigmmoa:
    }
    public function wigskegsqequoeks()
    {
        $this->qcsmikeggeemccuu("\x77\x70", [$this, "\x67\x6f\x73\155\161\143\x6d\155\x6f\155\153\x71\167\x6d\151\x73"], 99)->qcsmikeggeemccuu("\x69\x6e\151\x74", [$this, "\x69\x6e\151\164"], 99)->qcsmikeggeemccuu("\141\144\155\151\156\137\151\156\151\164", [$this, "\x79\145\171\151\147\165\x79\145\x67\155\x6d\x79\x75\x73\x65\x61"], 99);
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
        $this->wcweamocuicuusky("\164\141\170\x6f\x6e\x6f\155\x69\x65\x73", $seyqqsmuaiegkeeq);
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
        goto iyomyggaemmmucqq;
        komwmwgumckimamm:
        eeqaqskwawmqocaa:
        goto geywkoimqymqkyem;
        ewukmsoywcsagcsg:
        return '';
        goto soisuocuwuwaaoig;
        iyomyggaemmmucqq:
        $ymqmyyeuycgmigyo = $this->aakmagwggmkoiiyu();
        goto ckwwkkemmmccgcws;
        ugssgcuiagwkicqq:
        caasqyskqsecuawu:
        goto qcuiamcckoceggwu;
        mqogcscwmowgogkm:
        if ($ymqmyyeuycgmigyo) {
            goto caasqyskqsecuawu;
        }
        goto cgueqqgoouykmoes;
        qcuiamcckoceggwu:
        return $ymqmyyeuycgmigyo;
        goto iiukuwmwimmiiiim;
        gcskwyqqyqmauwow:
        if ($aokagokqyuysuksm) {
            goto eeqaqskwawmqocaa;
        }
        goto mqogcscwmowgogkm;
        cgueqqgoouykmoes:
        goto qyogwowwcogugweq;
        goto komwmwgumckimamm;
        geywkoimqymqkyem:
        return $aokagokqyuysuksm;
        goto uoeegwsgqyokwwws;
        ckwwkkemmmccgcws:
        $aokagokqyuysuksm = $this->mwikyscisascoeea();
        goto gcskwyqqyqmauwow;
        uoeegwsgqyokwwws:
        goto qyogwowwcogugweq;
        goto ugssgcuiagwkicqq;
        iiukuwmwimmiiiim:
        qyogwowwcogugweq:
        goto ewukmsoywcsagcsg;
        soisuocuwuwaaoig:
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
        goto kwigscuqywmmyess;
        qmqakowgsqgcqass:
        sugqcoagaisyeuge:
        goto iusicoaiyamcoikg;
        kwigscuqywmmyess:
        foreach ($oyuikeusicgqgwak as $uusmaiomayssaecw => $uiewakwqscemywuo) {
            $this->wcweamocuicuusky($uusmaiomayssaecw, $uiewakwqscemywuo);
            ooaiowseiuogqeek:
        }
        goto qmqakowgsqgcqass;
        iusicoaiyamcoikg:
        return $this;
        goto gsaascomiaiemesg;
        gsaascomiaiemesg:
    }
    
    public function wcweamocuicuusky($uusmaiomayssaecw, $eqgoocgaqwqcimie) : self
    {
        goto gyessymseyoiocey;
        imycoqycguuasiac:
        egqgieqcwseicqki:
        goto ieuwcqiiwigyigag;
        gyessymseyoiocey:
        if (isset($this->configuration[$uusmaiomayssaecw])) {
            goto egqgieqcwseicqki;
        }
        goto uguigcssweukyeic;
        uguigcssweukyeic:
        $this->configuration[$uusmaiomayssaecw] = $eqgoocgaqwqcimie;
        goto imycoqycguuasiac;
        ieuwcqiiwigyigag:
        return $this;
        goto ikiwkmouiywogyqo;
        ikiwkmouiywogyqo:
    }
}
