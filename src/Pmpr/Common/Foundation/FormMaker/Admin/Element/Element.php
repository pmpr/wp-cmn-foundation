<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b30261f503             |
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
    
    protected $objectType = "\x6f\160\164\151\x6f\x6e\x73\x2d\160\141\x67\x65";
    
    protected ?string $capability = null;
    
    protected array $configuration = [];
    
    public function __construct($aokagokqyuysuksm = null)
    {
        goto kqkicmysyusskuua;
        miekisauamqswgie:
        $this->configuration = [];
        goto amyqwcqwqccgwigq;
        kqkicmysyusskuua:
        $this->id = $aokagokqyuysuksm;
        goto yssakamqiieugqyk;
        yqwgcuuuocyqysso:
        $this->capability = "\x6d\141\x6e\141\x67\x65\x5f\x6f\x70\164\151\157\x6e\x73";
        goto miekisauamqswgie;
        amyqwcqwqccgwigq:
        parent::__construct();
        goto ccsemsumseigmmoa;
        yssakamqiieugqyk:
        $this->showNames = true;
        goto yqwgcuuuocyqysso;
        ccsemsumseigmmoa:
    }
    public function wigskegsqequoeks()
    {
        $this->qcsmikeggeemccuu("\167\x70", [$this, "\147\157\163\155\161\x63\155\155\157\155\x6b\161\167\x6d\x69\x73"], 99)->qcsmikeggeemccuu("\151\x6e\x69\164", [$this, "\151\x6e\x69\x74"], 99)->qcsmikeggeemccuu("\141\144\155\x69\x6e\137\x69\x6e\x69\x74", [$this, "\171\145\171\151\x67\x75\x79\145\147\155\x6d\171\x75\163\145\x61"], 99);
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
        $this->wcweamocuicuusky("\164\x61\170\157\156\157\155\x69\x65\x73", $seyqqsmuaiegkeeq);
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
        goto iyomyggaemmmucqq;
        ewukmsoywcsagcsg:
        return '';
        goto soisuocuwuwaaoig;
        iiukuwmwimmiiiim:
        qyogwowwcogugweq:
        goto ewukmsoywcsagcsg;
        geywkoimqymqkyem:
        return $aokagokqyuysuksm;
        goto uoeegwsgqyokwwws;
        gcskwyqqyqmauwow:
        if ($aokagokqyuysuksm) {
            goto eeqaqskwawmqocaa;
        }
        goto mqogcscwmowgogkm;
        ckwwkkemmmccgcws:
        $aokagokqyuysuksm = $this->mwikyscisascoeea();
        goto gcskwyqqyqmauwow;
        komwmwgumckimamm:
        eeqaqskwawmqocaa:
        goto geywkoimqymqkyem;
        ugssgcuiagwkicqq:
        caasqyskqsecuawu:
        goto qcuiamcckoceggwu;
        cgueqqgoouykmoes:
        goto qyogwowwcogugweq;
        goto komwmwgumckimamm;
        qcuiamcckoceggwu:
        return $ymqmyyeuycgmigyo;
        goto iiukuwmwimmiiiim;
        mqogcscwmowgogkm:
        if ($ymqmyyeuycgmigyo) {
            goto caasqyskqsecuawu;
        }
        goto cgueqqgoouykmoes;
        iyomyggaemmmucqq:
        $ymqmyyeuycgmigyo = $this->aakmagwggmkoiiyu();
        goto ckwwkkemmmccgcws;
        uoeegwsgqyokwwws:
        goto qyogwowwcogugweq;
        goto ugssgcuiagwkicqq;
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
        ieuwcqiiwigyigag:
        return $this;
        goto ikiwkmouiywogyqo;
        imycoqycguuasiac:
        egqgieqcwseicqki:
        goto ieuwcqiiwigyigag;
        uguigcssweukyeic:
        $this->configuration[$uusmaiomayssaecw] = $eqgoocgaqwqcimie;
        goto imycoqycguuasiac;
        gyessymseyoiocey:
        if (isset($this->configuration[$uusmaiomayssaecw])) {
            goto egqgieqcwseicqki;
        }
        goto uguigcssweukyeic;
        ikiwkmouiywogyqo:
    }
}
