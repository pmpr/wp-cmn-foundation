<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b30261f503             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\ORM\DB;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\MorphToMany;
use Illuminate\Support\Collection;
use Pmpr\Common\Foundation\Container\Traits\SingletonTrait;
use Pmpr\Common\Foundation\Decorator\DecoratorQuery;
use Pmpr\Common\Foundation\Decorator\DecoratorUser;
use Pmpr\Common\Foundation\FormMaker\Admin\Element\MetaBox;
use Pmpr\Common\Foundation\FormMaker\Admin\Field\BSSelect;
use Pmpr\Common\Foundation\Interfaces\ConstantInterface;
use Pmpr\Common\Foundation\Logger\Traits\LogTrait;
use Pmpr\Common\Foundation\Manipulate\ManipulateAjax;
use Pmpr\Common\Foundation\Manipulate\ManipulateFormat;
use Pmpr\Common\Foundation\Manipulate\ManipulateServer;
use Pmpr\Common\Foundation\Manipulate\ManipulateSetting;
use Pmpr\Common\Foundation\Manipulate\ManipulateValidation;
use Pmpr\Common\Foundation\Manipulate\Post\ManipulateAttachment;
use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateHTML;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateString;
use Pmpr\Common\Foundation\ORM\DB\Field\DateTime;
use Pmpr\Common\Foundation\ORM\DB\Field\Enumeration;
use Pmpr\Common\Foundation\ORM\DB\Field\File;
use Pmpr\Common\Foundation\ORM\DB\Field\Timestamp;
use Pmpr\Common\Foundation\ORM\View\Show;
use Pmpr\Common\Foundation\Traits\ComponentTrait;
use Pmpr\Common\Foundation\ORM\DB\Field\Boolean;
use Pmpr\Common\Foundation\ORM\DB\Field\Field;
use Pmpr\Common\Foundation\ORM\DB\Field\Foreign;
use Pmpr\Common\Foundation\ORM\DB\Field\Json;
use Pmpr\Common\Foundation\ORM\DB\Traits\ActionTrait;
use Pmpr\Common\Foundation\ORM\Form;
use Pmpr\Common\Foundation\ORM\ORM;
use Pmpr\Common\Foundation\ORM\View\Edit;
use Pmpr\Common\Foundation\ORM\View\Index;
use Pmpr\Common\Foundation\ORM\View\View;
use Pmpr\Common\Foundation\ORM\DB\Traits\FieldTrait;
use Pmpr\Common\Foundation\ORM\Register;
use Exception;
use Illuminate\Database\Eloquent\Model as BaseClass;
use Illuminate\Database\Eloquent\Relations\Relation;
use Pmpr\Common\Foundation\Traits\AjaxTrait;
use Pmpr\Common\Foundation\Traits\HookTrait;
use Pmpr\Common\Foundation\Traits\TranslateTrait;
use UnexpectedValueException;

class Model extends BaseClass implements ConstantInterface
{
    const ORM_FILTER_BY = "\x6f\162\x6d\x5f\146\x69\154\164\x65\x72\137\x62\x79";
    const ORM_FILTER_VALUE = "\157\x72\x6d\x5f\x66\x69\x6c\x74\145\162\x5f\166\x61\x6c\165\145";
    use SingletonTrait, TranslateTrait, ComponentTrait, ActionTrait, FieldTrait, HookTrait, AjaxTrait, LogTrait;
    
    protected ?int $id = 0;
    
    public $timestamps = true;
    
    protected ?array $views = [];
    
    protected ?array $fields = [];
    
    protected bool $canDelete = true;
    
    protected ?Register $register = null;
    
    protected ?string $labelKey = "\164\151\164\154\x65";
    
    protected ?array $validationErrors = [];
    
    public function __construct($aokagokqyuysuksm = null, ?array $siquossayskcwkea = [])
    {
        goto yamoiggaeugmgkku;
        mwskgsimqagmkcgq:
        $suckquwcuiuyiogc = ManipulateSetting::cmaecekuqkwmemms("\x55\x50\104\101\124\x45\x5f\x4f\122\115\x5f\x44\101\124\x41\102\101\123\105", 0);
        goto mkuigmcgkawyawee;
        qoiuwyogucoeaoew:
        if ($ymqmyyeuycgmigyo) {
            goto muwyuiikuywigwso;
        }
        goto qkkqiagwgaoyauki;
        gioqkcywauuckmua:
        $this->table = $mgcmmwqwguicsews->cokoiaeeomgssqgy($ymqmyyeuycgmigyo);
        goto miaiggsoiaekmqwy;
        ccqgkeesikyegcik:
        $aiqugsyouyikgawm->yuaecocyyyqqgsyw($this->oyeskqayoscwciem())->uwyqgmcuomgeccgy($mgcmmwqwguicsews);
        goto aakwscykmyyykoms;
        yuoyackaoigyyyso:
        cgasgmiiqegqesic:
        goto kcqieuukskyiywss;
        iqeqqwcmaiqakawc:
        
        $mgcmmwqwguicsews = $this->getConnection();
        goto gioqkcywauuckmua;
        kwaqakoogeiacmwi:
        if (!$aiqugsyouyikgawm instanceof Updater) {
            goto gikaiicgqyueeoco;
        }
        goto ccqgkeesikyegcik;
        wcoqiwuusoeqiqwi:
        if (is_numeric($aokagokqyuysuksm)) {
            goto akoiqkoqmmmcieug;
        }
        goto oqwyemgwoossauyk;
        eqekaoaioiykuaiw:
        $ymqmyyeuycgmigyo = $this->miwqiiqeegeqcwis();
        goto qoiuwyogucoeaoew;
        uqagqomggiacosqm:
        $this->ewaqwooqoqmcoomi();
        goto mwskgsimqagmkcgq;
        agqmoymkiswqswqo:
        $aiqugsyouyikgawm = Updater::ocmycskcuiawkecq($ymqmyyeuycgmigyo);
        goto kwaqakoogeiacmwi;
        iiuawywwoaeyauge:
        akcakssqcqcouwew:
        goto wcoqiwuusoeqiqwi;
        qkkqiagwgaoyauki:
        wp_die("\156\x61\x6d\145\x20\151\x73\x20\156\x6f\x74\x20\144\x65\146\151\156\x65\40\x66\x6f\162\40\155\x6f\x64\145\154\72\x20" . self::uqggkiomyiceyooa());
        goto oyywywoqaqcykucs;
        mkuigmcgkawyawee:
        if (!(!ManipulateAjax::mcgoysmkqsqooceq() && ($suckquwcuiuyiogc || !$this->gqaysymikgeawkqa()))) {
            goto akcakssqcqcouwew;
        }
        goto ouqwmaaskykywyqo;
        suoymucmyegewkmu:
        if (self::quiqwmkiyigesygc()) {
            goto cgasgmiiqegqesic;
        }
        goto uqagqomggiacosqm;
        kcqieuukskyiywss:
        parent::__construct($siquossayskcwkea);
        goto wukuisoeoeomgegu;
        yamoiggaeugmgkku:
        $this->ckgmycmaukqgkosk();
        goto eqekaoaioiykuaiw;
        oqwyemgwoossauyk:
        $this->gyqeoeemeemicgqi();
        goto cwcmwogseemgqgqq;
        ouqwmaaskykywyqo:
        $mgcmmwqwguicsews->cymcyywycwkawmsi();
        goto agqmoymkiswqswqo;
        oyywywoqaqcykucs:
        muwyuiikuywigwso:
        goto iqeqqwcmaiqakawc;
        aakwscykmyyykoms:
        gikaiicgqyueeoco:
        goto iiuawywwoaeyauge;
        cwcmwogseemgqgqq:
        akoiqkoqmmmcieug:
        goto yuoyackaoigyyyso;
        miaiggsoiaekmqwy:
        static::$resolver = new Resolver();
        goto suoymucmyegewkmu;
        wukuisoeoeomgegu:
    }
    public function wigskegsqequoeks()
    {
        $ymqmyyeuycgmigyo = $this->miwqiiqeegeqcwis();
        $this->qcsmikeggeemccuu("\x69\156\151\164", [$this, "\x63\x67\x61\x6d\165\x77\x69\161\163\147\x77\x73\x69\153\x6b\155"])->koaegcswmcqsiykq($this->ygyygikyocoymgaw("{$ymqmyyeuycgmigyo}\x5f\147\145\164\137\154\151\x73\x74"), [$this, "\x63\153\x67\x79\145\x67\x6b\165\x73\155\x75\171\x6d\x69\155\x6f"])->qcsmikeggeemccuu($this->ygyygikyocoymgaw("{$ymqmyyeuycgmigyo}\x5f\144\157\137\142\165\x6c\x6b\x5f\141\x63\164\151\x6f\x6e"), [$this, "\155\x79\x79\161\x77\171\163\x77\x77\x65\163\167\x69\x75\167\x75"], 10, 2)->qcsmikeggeemccuu($this->ygyygikyocoymgaw("{$ymqmyyeuycgmigyo}\x5f\x64\x6f\137\163\151\156\147\x6c\x65\137\x61\143\x74\151\157\156"), [$this, "\x6b\x6f\x73\157\141\157\x75\x6f\147\x6b\x65\141\x6f\155\x77\157"], 10, 2);
    }
    public function kgquecmsgcouyaya()
    {
        $ymqmyyeuycgmigyo = $this->miwqiiqeegeqcwis();
        $this->cecaguuoecmccuse($this->ygyygikyocoymgaw("{$ymqmyyeuycgmigyo}\137\x6d\141\156\x61\147\x65\x5f\x76\151\x65\167\163"), [$this, "\161\145\157\167\143\x75\x63\165\157\141\x71\x79\x71\x77\x75\167"])->cecaguuoecmccuse($this->ygyygikyocoymgaw("{$ymqmyyeuycgmigyo}\x5f\155\141\x6e\141\147\x65\137\143\x6f\x6c\x75\x6d\156\x73"), [$this, "\153\x67\x6f\147\x6f\x63\x63\141\x69\x6d\165\x79\x77\x73\157\x79"])->cecaguuoecmccuse($this->ygyygikyocoymgaw("{$ymqmyyeuycgmigyo}\x5f\x6d\x61\156\x61\147\145\137\163\157\162\x74\141\142\x6c\145\x5f\x63\x6f\x6c\165\155\156\x73"), [$this, "\170\x65\x6b\143\167\145\143\147\165\x79\x6b\155\155\147\147\x6f"])->cecaguuoecmccuse($this->ygyygikyocoymgaw("{$ymqmyyeuycgmigyo}\137\162\x6f\167\137\x61\x63\164\x69\157\156\x73"), [$this, "\155\x63\141\147\147\155\x75\171\x61\155\147\x73\157\155\141\141"], 10, 4)->cecaguuoecmccuse($this->ygyygikyocoymgaw("{$ymqmyyeuycgmigyo}\137\142\x75\x6c\153\x5f\x61\x63\164\x69\157\156\163"), [$this, "\x6d\163\x79\x79\145\x73\167\145\x6f\157\167\x63\165\165\x6f\x75"], 10, 2)->cecaguuoecmccuse($this->ygyygikyocoymgaw("\157\162\x6d\137\x76\x69\x65\x77\x5f\163\150\x6f\167\x5f{$ymqmyyeuycgmigyo}\137\x74\141\x62\x73"), [$this, "\x75\165\171\x6d\x6b\151\x79\147\x69\x75\x61\x69\171\145\155\141"], 10, 2)->cecaguuoecmccuse($this->ygyygikyocoymgaw("{$ymqmyyeuycgmigyo}\137\x6d\x61\x6e\141\147\x65\x5f\143\165\163\x74\157\155\137\x63\157\x6c\x75\155\x6e"), [$this, "\x71\x65\167\x6d\x6b\x75\x77\x79\x6d\x71\x6b\153\x63\155\161\155"], 10, 5)->cecaguuoecmccuse($this->ygyygikyocoymgaw("{$ymqmyyeuycgmigyo}\x5f\x6d\x61\156\x61\147\x65\137\145\144\x69\x74\x5f\146\x69\145\154\144\137\163\150\x6f\167"), [$this, "\x66\141\143\161\167\161\x6d\147\x63\157\147\x77\x73\x6f\x6b\167"], 10, 4)->cecaguuoecmccuse($this->ygyygikyocoymgaw("{$ymqmyyeuycgmigyo}\x5f\x6d\141\x6e\141\147\145\137\x65\x64\x69\164\x5f\146\x69\145\154\144\137\166\x61\x6c\165\x65"), [$this, "\157\x65\161\163\x69\145\x6d\x61\x77\157\147\x77\x77\171\x6d\x6f"], 10, 4);
    }
    
    public function getUpdatedAtColumn() : ?string
    {
        return $this->mcqcwciaoqyggeoa(self::UPDATED_AT);
    }
    
    public function getCreatedAtColumn() : ?string
    {
        return $this->mcqcwciaoqyggeoa(self::CREATED_AT);
    }
    
    public function mcqcwciaoqyggeoa(string $aiowsaccomcoikus) : ?string
    {
        goto mgwgiesscqoaqcau;
        cgmcwkmmcmmkiooc:
        goto quewwumogiocouii;
        goto iamooqskosymqsmw;
        ioacywuoyuskqmwy:
        if (!$vkkeimekwwkyiyyc) {
            goto geugsymgsiuuqccg;
        }
        goto bgoygegmogcmeaou;
        uykwmucgoywoesui:
        goto gqywcowiigceimaw;
        goto iisieuaeyiqwckou;
        bgoygegmogcmeaou:
        if (is_array($vkkeimekwwkyiyyc)) {
            goto eyuoecmogqwkmomi;
        }
        goto awgaewwsskasueke;
        iwosouqsesoqcska:
        geugsymgsiuuqccg:
        goto iacwyogogoccmwsg;
        eygqeoiskweuiuqi:
        $vkkeimekwwkyiyyc = null;
        goto uykwmucgoywoesui;
        iacwyogogoccmwsg:
        return $vkkeimekwwkyiyyc;
        goto wqmwcuggcisqieao;
        awgaewwsskasueke:
        $vkkeimekwwkyiyyc = $aiowsaccomcoikus;
        goto cgmcwkmmcmmkiooc;
        mgwgiesscqoaqcau:
        $vkkeimekwwkyiyyc = $this->timestamps;
        goto ioacywuoyuskqmwy;
        iisieuaeyiqwckou:
        gsimeiqkoyqkuecq:
        goto oskwkeaemiqcaqkc;
        wwccoougkywoaoui:
        if (in_array($aiowsaccomcoikus, $vkkeimekwwkyiyyc)) {
            goto gsimeiqkoyqkuecq;
        }
        goto eygqeoiskweuiuqi;
        oskwkeaemiqcaqkc:
        $vkkeimekwwkyiyyc = $aiowsaccomcoikus;
        goto kiqmcymowosckmii;
        iamooqskosymqsmw:
        eyuoecmogqwkmomi:
        goto wwccoougkywoaoui;
        kiqmcymowosckmii:
        gqywcowiigceimaw:
        goto iaygaasesyymwgss;
        iaygaasesyymwgss:
        quewwumogiocouii:
        goto iwosouqsesoqcska;
        wqmwcuggcisqieao:
    }
    
    public function mwikyscisascoeea() : ?int
    {
        return $this->id;
    }
    public function ckgyegkusmuymimo()
    {
        goto yyyyawaqcowsgqcs;
        coskmuqsawiaeyqg:
        yueosioyegouuwqo:
        goto umccwcqwkoiaakmu;
        yisoawmmammassqk:
        issgmmkcgesyeoas:
        goto gcsosokicycukoyc;
        iuooqassskiyeemo:
        if ($aokagokqyuysuksm = $icwicymcioeyeyek[self::ID]) {
            goto issgmmkcgesyeoas;
        }
        goto cquyuwsisgqscemm;
        gcsosokicycukoyc:
        
        $oammesyieqmwuwyi[] = $siykeiywomwwuoiw->find($aokagokqyuysuksm);
        goto seqammocqkyswaim;
        mqaamqyoywyekiko:
        
        $gmwiogsuisuoiwqu = $this->getPaginateItems($siykeiywomwwuoiw, [self::PAGE => $icwicymcioeyeyek[self::PAGE]]);
        goto smkakiyekkqoggao;
        cquyuwsisgqscemm:
        $qwcmueausqgiwigy = $icwicymcioeyeyek[self::SEARCH];
        goto imykswegcuekqwio;
        umccwcqwkoiaakmu:
        foreach ($oammesyieqmwuwyi as $igqsaukqcqscimok) {
            goto swkeiggkawwgewuw;
            wmcucyuieqgqisis:
            mssaawaiaimogowg:
            goto qwsmiaegmcwuskwi;
            eykiuqsamowqykam:
            ccyiggckemwgooco:
            goto ywqouwqomiqwoquu;
            qcwkymcgqacaaywc:
            umamqqwcoewcigew:
            goto wmcucyuieqgqisis;
            gaiaucesmcqgqwac:
            $ceiwsaacewygcsqg = $this->kumuygiiqswoyasy();
            goto kuimgwmkcgcoecko;
            aacaoywsaqscgyua:
            $sogksuscggsicmac = ["\111\x44" => $aokagokqyuysuksm, self::TEXT => $pkyyagewkiyckmwy, self::VALUE => $aokagokqyuysuksm];
            goto miigqygoawqmkkqm;
            miigqygoawqmkkqm:
            if (!$icwicymcioeyeyek["\x6d\x61\162\153\x75\x70"]) {
                goto ccyiggckemwgooco;
            }
            goto yywwaaiicukuwcao;
            swkeiggkawwgewuw:
            if (!$igqsaukqcqscimok) {
                goto umamqqwcoewcigew;
            }
            goto gaiaucesmcqgqwac;
            kuimgwmkcgcoecko:
            $aokagokqyuysuksm = $igqsaukqcqscimok->{$ceiwsaacewygcsqg};
            goto oaskqsoyesmmeaew;
            oaskqsoyesmmeaew:
            $pkyyagewkiyckmwy = $this->uikgwcuascgeissw($igqsaukqcqscimok);
            goto aacaoywsaqscgyua;
            ywqouwqomiqwoquu:
            $qeiakyocuggicwsy[$aokagokqyuysuksm] = $sogksuscggsicmac;
            goto qcwkymcgqacaaywc;
            yywwaaiicukuwcao:
            $sogksuscggsicmac["\155\x61\x72\x6b\165\x70"] = $this->iuygowkemiiwqmiw($icwicymcioeyeyek["\x74\145\x6d\160\154\x61\164\x65\137\x74\171\x70\145"], ["\111\104" => $aokagokqyuysuksm, self::TITLE => $pkyyagewkiyckmwy, "\x6f\x62\152\x65\143\x74\137\164\171\x70\145" => $this->oyeskqayoscwciem()->giiayuqckuiecosm()], ["\x63\154\x61\163\x73" => self::class]);
            goto eykiuqsamowqykam;
            qwsmiaegmcwuskwi:
        }
        goto ekgkiioywougquka;
        seqammocqkyswaim:
        yeiicwscguyokwyu:
        goto coskmuqsawiaeyqg;
        smkakiyekkqoggao:
        $oammesyieqmwuwyi = $gmwiogsuisuoiwqu[self::ITEMS];
        goto zggweikegkcgkmma;
        wammkmaqucqagqww:
        if (!$siykeiywomwwuoiw) {
            goto yueosioyegouuwqo;
        }
        goto iuooqassskiyeemo;
        eokikuciuqkyauum:
        $siykeiywomwwuoiw = $this->kqewyqqqiyiouaou([$this->ukqioecasimmeygm() => [self::OPERATOR => self::LIKE, self::VALUE => "\x25{$qwcmueausqgiwigy}\x25"]], $siykeiywomwwuoiw);
        goto ykuqeyogsasokqis;
        imykswegcuekqwio:
        if (!$qwcmueausqgiwigy) {
            goto qsyqcokomswykyso;
        }
        goto eokikuciuqkyauum;
        sikmqkecsiyciaei:
        $qeiakyocuggicwsy = [];
        goto wmycwscioqackeig;
        wmycwscioqackeig:
        $siykeiywomwwuoiw = $this->gqaysymikgeawkqa();
        goto wammkmaqucqagqww;
        zggweikegkcgkmma:
        goto yeiicwscguyokwyu;
        goto yisoawmmammassqk;
        yyyyawaqcowsgqcs:
        $icwicymcioeyeyek = ManipulateFormat::omaawkkwwyesqwcc(ManipulateServer::ayueggmoqeeukqmq(), ["\151\x64" => false, "\160\141\147\x65" => 1, "\141\x72\x67\x73" => [], "\151\164\145\155\x73" => [], "\x73\x65\141\162\143\x68" => null, "\x6d\x61\x72\153\165\x70" => false, "\x74\145\x6d\x70\154\x61\x74\x65\137\164\x79\160\x65" => "\x61\x6a\141\170\x5f\x72\145\163\x75\154\164"]);
        goto usmagcaocwiugqum;
        wyyowcsciaqkuiuq:
        $this->uaggqsoeugksgooc(true, $qeiakyocuggicwsy);
        goto imquwacukaswoyka;
        ykuqeyogsasokqis:
        qsyqcokomswykyso:
        goto mqaamqyoywyekiko;
        usmagcaocwiugqum:
        $oammesyieqmwuwyi = [];
        goto sikmqkecsiyciaei;
        ekgkiioywougquka:
        giuoqsumkimmuaya:
        goto wyyowcsciaqkuiuq;
        imquwacukaswoyka:
    }
    
    public function aeggeuqycwawueqy(Builder $siykeiywomwwuoiw, array $ywmkwiwkosakssii = []) : array
    {
        try {
            goto gsggsmmwcmkgyyss;
            uieuouugckwokske:
            
            $weyoqgcesqgeusiu = $ymiyawysimukkoso->perPage();
            goto seaiwkkgyyegiyug;
            yweucowesgsoewyc:
            
            $ymiyawysimukkoso = $siykeiywomwwuoiw->paginate($ywmkwiwkosakssii[self::PER_PAGE] ?: 10, $ywmkwiwkosakssii[self::COLUMNS] ?: ["\52"], $ywmkwiwkosakssii["\x70\141\147\x65\137\156\141\155\145"] ?: self::PAGE, $ywmkwiwkosakssii[self::PAGE] ?: 1);
            goto ikygockuuyimmmwk;
            yicaqocukqoauqgc:
            if (!$ywmkwiwkosakssii["\146\151\154\x74\145\162\137\166\141\154\165\145"]) {
                goto qwgkwokcyocqiyee;
            }
            goto kmcygqkmwcgwamkw;
            sueeqeioeiwkscao:
            
            $uuwmqqqiwksuaise = $ymiyawysimukkoso->total();
            goto mmesoisgqucowwms;
            ikygockuuyimmmwk:
            
            $oammesyieqmwuwyi = $ymiyawysimukkoso->items();
            goto uwmcugkwqwcuqqsq;
            muimagegskoisckc:
            smksoismyouykeoa:
            goto yicaqocukqoauqgc;
            mmesoisgqucowwms:
            
            $qcugmkuyweqqyggk = $ymiyawysimukkoso->lastPage();
            goto uieuouugckwokske;
            cycasoiysmksuwqk:
            $oammesyieqmwuwyi = ManipulateArray::get($ywmkwiwkosakssii, self::DEFAULT);
            goto muimagegskoisckc;
            gysmigyakgaakeoy:
            qwgkwokcyocqiyee:
            goto sueeqeioeiwkscao;
            kmcygqkmwcgwamkw:
            $oammesyieqmwuwyi = $this->cwgkcyyaymmsomqa($oammesyieqmwuwyi);
            goto gysmigyakgaakeoy;
            uwmcugkwqwcuqqsq:
            if ($oammesyieqmwuwyi) {
                goto smksoismyouykeoa;
            }
            goto cycasoiysmksuwqk;
            gsggsmmwcmkgyyss:
            $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\x70\141\x67\145\137\x6e\x61\x6d\x65" => self::PAGE, self::PAGE => 1, self::DEFAULT => [], self::COLUMNS => ["\x2a"], "\x66\x69\154\x74\x65\162\x5f\166\x61\154\x75\145" => true, self::PER_PAGE => ManipulateSetting::omkaowmygoqwsywq()]);
            goto yweucowesgsoewyc;
            seaiwkkgyyegiyug:
        } catch (Exception $wgaoewqkwgomoaai) {
            goto maeccckgcsaaumkw;
            kcqueaewmayywqeq:
            $weyoqgcesqgeusiu = 0;
            goto uagsgicwwcakecwq;
            uagsgicwwcakecwq:
            $qcugmkuyweqqyggk = 0;
            goto qocgmocqauaaekii;
            maeccckgcsaaumkw:
            $oammesyieqmwuwyi = [];
            goto gcoeaokkagaaeuse;
            gcoeaokkagaaeuse:
            $uuwmqqqiwksuaise = 0;
            goto kcqueaewmayywqeq;
            qocgmocqauaaekii:
        }
        return $this->oosqweumiyeayasy($oammesyieqmwuwyi, $uuwmqqqiwksuaise, $qcugmkuyweqqyggk, $weyoqgcesqgeusiu);
    }
    
    public function oosqweumiyeayasy($oammesyieqmwuwyi = [], $uuwmqqqiwksuaise = 1, $ocqawgquwsqioses = 1, $weyoqgcesqgeusiu = 10) : array
    {
        return ["\x70\141\x67\x69\156\141\x74\x69\157\156" => ["\x74\x6f\164\141\x6c" => $uuwmqqqiwksuaise, "\x70\x61\x67\x65\163" => $ocqawgquwsqioses, self::PER_PAGE => $weyoqgcesqgeusiu], self::ITEMS => $oammesyieqmwuwyi];
    }
    
    public function uuymkiygiuaiyema($ywoucyskcquysiwc, $mksyucucyswaukig)
    {
        return $ywoucyskcquysiwc;
    }
    
    public function gqigeuumsosmamqs() : bool
    {
        return $this->canDelete;
    }
    
    public function eucukwckumgiyyww($oyuikeusicgqgwak = []) : array
    {
        goto ysiwoiqiaosqoikm;
        gskaqcgccswmuqsy:
        uekueeyqaackuwao:
        goto uccuykggugcmiyam;
        eieiwacwqkgsewai:
        if (!$vkkeimekwwkyiyyc) {
            goto uaiiuywoakccusge;
        }
        goto gokwmwmaumiwscua;
        gokwmwmaumiwscua:
        if (!is_bool($vkkeimekwwkyiyyc)) {
            goto uauuoyigkmqoasaq;
        }
        goto eauiumeeyckucuyc;
        uccuykggugcmiyam:
        uaiiuywoakccusge:
        goto saycoceqywiekqsi;
        ysiwoiqiaosqoikm:
        $vkkeimekwwkyiyyc = $this->timestamps;
        goto eieiwacwqkgsewai;
        esuuweysgwuwcuue:
        if (!is_array($vkkeimekwwkyiyyc)) {
            goto uekueeyqaackuwao;
        }
        goto ykuycowuguumseuu;
        saycoceqywiekqsi:
        return $oyuikeusicgqgwak;
        goto sqaowueaequoigsa;
        ykuycowuguumseuu:
        foreach ($vkkeimekwwkyiyyc as $yiuogaeewyockeak) {
            goto aemoyqueimayqcaw;
            mmqkuymyyycywmqu:
            sequgigsgkqaikmq:
            goto iaockwkwaiqgeuyu;
            woaoeyaowkuukkqm:
            switch ($yiuogaeewyockeak) {
                case self::CREATED_AT:
                    $aaqqkgyougeiueyq->gswweykyogmsyawy(__("\103\x72\145\x61\164\x65\144\x20\x41\164", PR__CMN__FOUNDATION));
                    goto ugqucegcucyyayga;
                case self::UPDATED_AT:
                    $aaqqkgyougeiueyq->gswweykyogmsyawy(__("\x55\x70\144\x61\x74\145\144\x20\101\164", PR__CMN__FOUNDATION));
                    goto ugqucegcucyyayga;
            }
            goto mmqkuymyyycywmqu;
            aemoyqueimayqcaw:
            $aaqqkgyougeiueyq = self::ceqawoymcymsaeqo($yiuogaeewyockeak)->jyumyyugiwwiqomk(5000);
            goto woaoeyaowkuukkqm;
            iaockwkwaiqgeuyu:
            ugqucegcucyyayga:
            goto oeeasouoaaoaaemm;
            oeeasouoaaoaaemm:
            $oyuikeusicgqgwak[] = $aaqqkgyougeiueyq;
            goto icmsyimgycuocisu;
            icmsyimgycuocisu:
            akieeaeqiwugimie:
            goto wassyiqsqasaoiau;
            wassyiqsqasaoiau:
        }
        goto qugsgsscqyikugyc;
        gigiwwouakeekoim:
        uauuoyigkmqoasaq:
        goto esuuweysgwuwcuue;
        qugsgsscqyikugyc:
        kmwwqgiacsoksgcy:
        goto gskaqcgccswmuqsy;
        eauiumeeyckucuyc:
        $vkkeimekwwkyiyyc = [self::CREATED_AT, self::UPDATED_AT];
        goto gigiwwouakeekoim;
        sqaowueaequoigsa:
    }
    public final function ewaqwooqoqmcoomi()
    {
        
        $this->oyeskqayoscwciem()->ckaemmoueyosqqkq(ManipulateArray::yaeiiwwyckwugsem($this->eucukwckumgiyyww()));
    }
    public final function cgamuwiqsgwsikkm()
    {
        goto yuoyeeuqqaockyqw;
        giiucsyqgcooaima:
        waycokyiesmqgqcg:
        goto awikkaqmmuqkukma;
        yuoyeeuqqaockyqw:
        
        if (ManipulateAjax::mcgoysmkqsqooceq()) {
            goto ugcyukgoaiiysymc;
        }
        goto kygcymkakucoeock;
        osoqssymqqoqcuky:
        $uieukiskgwkouwyi = false;
        goto qcywwqceiqogcoyo;
        kygcymkakucoeock:
        global $orm_model;
        goto qkiqquymecyoouki;
        qoameasiqwaqgmca:
        eqmauwqqowsiwaue:
        goto osoqssymqqoqcuky;
        qcywwqceiqogcoyo:
        foreach ($yyksucsgisomecgg->aioqieywgykaaoec() as $qqomumygoacsmsie => $ywmkwiwkosakssii) {
            goto asueqykmkoaimguq;
            mmusoowesqcmuqew:
            yqkyoaiwcyqeaqwu:
            goto wkwkeicwosmkcygc;
            oeosugomyqyekmuq:
            kkogaccoqmsmmkmo:
            goto emgssiqceagusgyg;
            asueqykmkoaimguq:
            $ewgsciccscsweqik = null;
            goto iyocimuyeemkaaso;
            gooqkmwgsmseuiwq:
            switch ($qqomumygoacsmsie) {
                case "\x69\156\144\145\170":
                    goto ysaumykuimqigeqa;
                    oegaywiwywuyksaq:
                    $ikugycsiyegwoiay = $this->acsiseaeysswwqkw();
                    goto eyskqaccgeomqmyw;
                    eyskqaccgeomqmyw:
                    if (!$ikugycsiyegwoiay) {
                        goto qmiqicgscsuoyeqo;
                    }
                    goto uiowwckamqucksim;
                    icawmkaswkmwicsa:
                    goto yuyiqaawwgaywgqo;
                    goto imsgusweocmiyygi;
                    uiowwckamqucksim:
                    $this->icyamyikwyaaoqya("\x61\144\x64", $yyksucsgisomecgg->uikgwcuascgeissw("\x61\144\x64\x5f\156\145\x77\x5f\151\x74\x65\x6d"), ["\x68\162\x65\x66" => $ikugycsiyegwoiay]);
                    goto wscikmsmwmocsqeu;
                    ysaumykuimqigeqa:
                    $ewgsciccscsweqik = new Index($this, $ywmkwiwkosakssii);
                    goto oegaywiwywuyksaq;
                    wscikmsmwmocsqeu:
                    qmiqicgscsuoyeqo:
                    goto icawmkaswkmwicsa;
                    imsgusweocmiyygi:
                case "\145\x64\151\164":
                case "\x61\x64\144":
                    goto igckskemqkqueukg;
                    gimsiyauegmikyka:
                    weuueokkumksgaeo:
                    goto kisuswmyqsocukgk;
                    wgmeyycmqioioaqc:
                    if (!in_array($suaemuyiacqyugsm, [$ymqmyyeuycgmigyo, "\145\x64\x69\164\x5f{$ymqmyyeuycgmigyo}", "\141\x64\144\x5f{$ymqmyyeuycgmigyo}", "\x73\x68\157\167\x5f{$ymqmyyeuycgmigyo}"])) {
                        goto weuueokkumksgaeo;
                    }
                    goto ykiyuciecskusaae;
                    ykiyuciecskusaae:
                    if ($uieukiskgwkouwyi) {
                        goto kmeekqukcecuscye;
                    }
                    goto pssquaaiioygwqoq;
                    momgmqemgcasyuqq:
                    $eaoumsseceiowgsk = Form::symcgieuakksimmu($ymqmyyeuycgmigyo);
                    goto qmuikumqukcyaeqa;
                    oaseseemoaqcgqeu:
                    $ewgsciccscsweqik = new Edit($this, $ywmkwiwkosakssii);
                    goto kuymgsewmeoimeuq;
                    pssquaaiioygwqoq:
                    $this->aygiawwcgymgyaya();
                    goto ucugeysomcyceyos;
                    kisuswmyqsocukgk:
                    goto yuyiqaawwgaywgqo;
                    goto wisaekiyyweeemuy;
                    kuymgsewmeoimeuq:
                    csoeisssoumqqeoa:
                    goto gimsiyauegmikyka;
                    imaiuooqwwokwemw:
                    qwueqigcisoogaec:
                    goto mioqycmmeucswoms;
                    igckskemqkqueukg:
                    $ymqmyyeuycgmigyo = $yyksucsgisomecgg->aakmagwggmkoiiyu();
                    goto wgmeyycmqioioaqc;
                    mioaoacqueiyueak:
                    if (!$this->ugmceccgwaaaigiy()) {
                        goto csoeisssoumqqeoa;
                    }
                    goto oaseseemoaqcgqeu;
                    mioqycmmeucswoms:
                    kmeekqukcecuscye:
                    goto mioaoacqueiyueak;
                    keyiswqkmqqquosw:
                    $eaoumsseceiowgsk->asumqyigwsqmyeoc($this);
                    goto imaiuooqwwokwemw;
                    ucugeysomcyceyos:
                    $uieukiskgwkouwyi = true;
                    goto momgmqemgcasyuqq;
                    qmuikumqukcyaeqa:
                    if (!$eaoumsseceiowgsk instanceof Form) {
                        goto qwueqigcisoogaec;
                    }
                    goto keyiswqkmqqquosw;
                    wisaekiyyweeemuy:
                case "\x73\150\x6f\167":
                    $ewgsciccscsweqik = new Show($this, $ywmkwiwkosakssii);
                    goto yuyiqaawwgaywgqo;
                default:
                    $ewgsciccscsweqik = new View($this, $ywmkwiwkosakssii);
                    goto yuyiqaawwgaywgqo;
            }
            goto oeosugomyqyekmuq;
            ugowqoisymsioeye:
            meegaqaesckqmyec:
            goto gooqkmwgsmseuiwq;
            yskswskmsgoouyco:
            $this->ecmiqywsauuoccwo($qqomumygoacsmsie, $ewgsciccscsweqik);
            goto oaciskoioaecgwee;
            kcwyeqmysgqkoqcm:
            $this->ecmiqywsauuoccwo($qqomumygoacsmsie, $ywmkwiwkosakssii);
            goto wamgcqkaieummksu;
            csskguekqcwcmocu:
            scccyaiaggeasgqg:
            goto mmusoowesqcmuqew;
            emgssiqceagusgyg:
            yuyiqaawwgaywgqo:
            goto ysusaysykymegguk;
            isaouwiaamimceeg:
            if (!($ywmkwiwkosakssii instanceof View || is_subclass_of($ywmkwiwkosakssii, View::class))) {
                goto emqmqkeygumaasam;
            }
            goto kcwyeqmysgqkoqcm;
            ysusaysykymegguk:
            if (!$ewgsciccscsweqik) {
                goto aosasoogesueygak;
            }
            goto yskswskmsgoouyco;
            oaciskoioaecgwee:
            aosasoogesueygak:
            goto csskguekqcwcmocu;
            iyocimuyeemkaaso:
            if (is_array($ywmkwiwkosakssii)) {
                goto meegaqaesckqmyec;
            }
            goto isaouwiaamimceeg;
            mwgaaiaswusakkaq:
            goto scccyaiaggeasgqg;
            goto ugowqoisymsioeye;
            wamgcqkaieummksu:
            emqmqkeygumaasam:
            goto mwgaaiaswusakkaq;
            wkwkeicwosmkcygc:
        }
        goto giiucsyqgcooaima;
        qkiqquymecyoouki:
        $suaemuyiacqyugsm = ManipulateServer::get(self::PAGE);
        goto iqukigoyiqgcggue;
        iqukigoyiqgcggue:
        $yyksucsgisomecgg = $this->oyeskqayoscwciem();
        goto amkcomscieegkygc;
        amkcomscieegkygc:
        if (!(strpos($suaemuyiacqyugsm, $yyksucsgisomecgg->aakmagwggmkoiiyu()) !== false)) {
            goto eqmauwqqowsiwaue;
        }
        goto uugekiumuwemyuyc;
        awikkaqmmuqkukma:
        ugcyukgoaiiysymc:
        goto uckeuuaqimqamuyc;
        uugekiumuwemyuyc:
        $orm_model = $this;
        goto qoameasiqwaqgmca;
        uckeuuaqimqamuyc:
    }
    
    public function kssgsuewkcwgiksa() : array
    {
        return [];
    }
    
    public function hkwssiimkcysaiyo() : ?string
    {
        goto uqkqmseoeemyaqck;
        cceyoumkiicaguio:
        $qqomumygoacsmsie = str_replace("\137{$ymqmyyeuycgmigyo}", '', ManipulateServer::get(self::PAGE));
        goto yayykakkyeoieicm;
        uqkqmseoeemyaqck:
        $ymqmyyeuycgmigyo = $this->miwqiiqeegeqcwis();
        goto cceyoumkiicaguio;
        yuiouamaogkkqmck:
        $qqomumygoacsmsie = "\x69\x6e\144\145\170";
        goto mmwqwowqcaseyyki;
        yayykakkyeoieicm:
        if (!($qqomumygoacsmsie === $ymqmyyeuycgmigyo)) {
            goto mieeugiewckceagc;
        }
        goto yuiouamaogkkqmck;
        mmwqwowqcaseyyki:
        mieeugiewckceagc:
        goto wsckacayikksiswo;
        wsckacayikksiswo:
        return $qqomumygoacsmsie;
        goto qiawociayswicugw;
        qiawociayswicugw:
    }
    
    public function uqiykqoyaqymcues() : bool
    {
        return $this->hkwssiimkcysaiyo() == "\145\144\151\x74";
    }
    
    public function wkcuasmkgoscaiay() : bool
    {
        return $this->hkwssiimkcysaiyo() == "\x73\150\x6f\x77";
    }
    
    public function wmwguecgowcscues() : bool
    {
        return $this->hkwssiimkcysaiyo() == "\151\x6e\144\145\x78";
    }
    
    public final function aygiawwcgymgyaya() : ?array
    {
        goto yoaewquyogiimyic;
        yoaewquyogiimyic:
        $ikgwqyuyckaewsow = $this->kssgsuewkcwgiksa();
        goto wmcmqmmcweecqmsw;
        wmcmqmmcweecqmsw:
        $qssskwiqeumgkago = $this->oyeskqayoscwciem()->aeosueemgsygqese();
        goto aakoeuuosouyeemc;
        cicegcoqyuoggiwy:
        return $this->ugmceccgwaaaigiy();
        goto ugcwqacogqoswyse;
        aakoeuuosouyeemc:
        foreach ($ikgwqyuyckaewsow as $uusmaiomayssaecw => $uiewakwqscemywuo) {
            goto cksoeiwawiygyiyg;
            sagemooicmgceiug:
            aescssauecumgwso:
            goto uqcwyyiykmwygeau;
            koiiaewwicsckseu:
            goto mquyemuqcqeassqc;
            goto umcyeiusoakewyaa;
            qcweoyigoaeacsow:
            kkacggiosquqagew:
            goto iyceygqsmokgmams;
            usmuqsuwuueogimc:
            gqyyccceswkqcmaa:
            goto koiiaewwicsckseu;
            scgmwokeuqwiekkk:
            if ($aaqqkgyougeiueyq instanceof Foreign) {
                goto sykuuisikqcwuaqu;
            }
            goto ceusyscosamyaiws;
            eoeiaccouaymakgm:
            goto gqyyccceswkqcmaa;
            goto owaimkmgemoqewmm;
            gsusqquicmukegcs:
            $sqeykgyoooqysmca = ManipulateArray::get($uiewakwqscemywuo, "\x74\x79\x70\145");
            goto wcsysckgigeykkwy;
            ksawwekgswywwuwm:
            $sqeykgyoooqysmca = "\x62\163\163\145\x6c\145\143\x74";
            goto yuqisiwgqacgmsym;
            wickgagwgqqsomum:
            weiaigyyigkusucy:
            goto wmwgeoequuwwwywa;
            ekwuycsiuqwycqea:
            goto qkwckeqowgaokkuy;
            goto iyaugygcsmqqqkmo;
            ceusyscosamyaiws:
            if (in_array($eewwgseqamqiouyq, ["\x62\x6f\x6f\154\x65\141\x6e", "\164\151\x6e\x79\x69\x6e\x74"])) {
                goto kqkymieyyqaoeymw;
            }
            goto gysmmooawoeggaow;
            ysoqeuugiuswykyu:
            $sqeykgyoooqysmca = "\x63\150\x65\x63\153\x62\x6f\x78";
            goto usmuqsuwuueogimc;
            icouowaoycuuisqe:
            gkoyqgogsukuowqi:
            goto ocmwuquguuqigose;
            gkwuewqmqeswqukg:
            $sqeykgyoooqysmca = "\144\141\164\145";
            goto sagemooicmgceiug;
            egikqoaqqegawugu:
            qimomesqamyyicmo:
            goto caaygouikgagsssc;
            iyikuwuweqigiuey:
            if (in_array($eewwgseqamqiouyq, ["\164\x65\x78\x74"])) {
                goto cooeoemccqiyewks;
            }
            goto acsigwcaesyyoiie;
            yeiokcoikcysyimu:
            cooeoemccqiyewks:
            goto kkmwwqyesmkescyg;
            yggciikgkomgeqsc:
            qkwckeqowgaokkuy:
            goto eoeiaccouaymakgm;
            uqcwyyiykmwygeau:
            goto qcceyyqiuiqcyqqm;
            goto yeiokcoikcysyimu;
            akwwuuiykscgicuw:
            $qqgeiaygkaoyccig = ["\151\x64" => $uusmaiomayssaecw, "\156\141\x6d\145" => $aaqqkgyougeiueyq->qcgakseyaikigqco()];
            goto ueqsiwuwumoqgsck;
            iyceygqsmokgmams:
            goto aescssauecumgwso;
            goto wcekgciqeggiiwgk;
            owaimkmgemoqewmm:
            kqkymieyyqaoeymw:
            goto ysoqeuugiuswykyu;
            umcyeiusoakewyaa:
            sykuuisikqcwuaqu:
            goto ksawwekgswywwuwm;
            iqwsqykoueqyyomy:
            sgikkoswwyesqomo:
            goto ggaucuaykyuiikem;
            cksoeiwawiygyiyg:
            $aaqqkgyougeiueyq = ManipulateArray::get($qssskwiqeumgkago, $uusmaiomayssaecw);
            goto cyqokqcacysioeyc;
            kmqusaiaiogecyiy:
            mgieeyuyuoeccaog:
            goto swckikycciugciqq;
            cieumoqayigkoocy:
            $sqeykgyoooqysmca = "\164\x65\170\164";
            goto yggciikgkomgeqsc;
            acsigwcaesyyoiie:
            if (in_array($eewwgseqamqiouyq, ["\144\141\x74\145", "\x64\x61\x74\145\x74\151\x6d\145"])) {
                goto augqweqsqioesmim;
            }
            goto aqaaqeucgoegeeuk;
            wcekgciqeggiiwgk:
            augqweqsqioesmim:
            goto gkwuewqmqeswqukg;
            wywwieycqskuqcwc:
            throw new UnexpectedValueException("{$uusmaiomayssaecw}\40\151\x73\40\x6e\x6f\x74\40\141\40\166\x61\154\x69\x64\x20\146\x69\x65\154\144\56");
            goto gwyseusuceuwwccu;
            iyaugygcsmqqqkmo:
            ssesmiwwmsayksum:
            goto cieumoqayigkoocy;
            uqugcugeomqakcqo:
            $aiowsaccomcoikus = MetaBox::okmsgamiiemyesao($uiewakwqscemywuo);
            goto qmoisuweiskkekca;
            cyqokqcacysioeyc:
            if (!$aaqqkgyougeiueyq instanceof Field) {
                goto aayysiegiyweiyuu;
            }
            goto akwwuuiykscgicuw;
            ueqsiwuwumoqgsck:
            $eewwgseqamqiouyq = $aaqqkgyougeiueyq->gueasuouwqysmomu();
            goto iikgiaocummweiga;
            wcsysckgigeykkwy:
            if ($sqeykgyoooqysmca) {
                goto weiaigyyigkusucy;
            }
            goto scgmwokeuqwiekkk;
            yuqisiwgqacgmsym:
            mquyemuqcqeassqc:
            goto wickgagwgqqsomum;
            coogyackikgmecic:
            $this->qaqsggqyouammqgm($aiowsaccomcoikus);
            goto iqwsqykoueqyyomy;
            wycmcqaauqkgegau:
            $sqeykgyoooqysmca = "\142\x73\163\145\154\x65\x63\x74";
            goto qcweoyigoaeacsow;
            aqaaqeucgoegeeuk:
            if (!in_array($eewwgseqamqiouyq, ["\x65\x6e\x75\x6d"])) {
                goto kkacggiosquqagew;
            }
            goto wycmcqaauqkgegau;
            ocmwuquguuqigose:
            switch ($eewwgseqamqiouyq) {
                case "\x65\156\165\155":
                    goto gwksywaoeowkesei;
                    cauqmacqkssciwyq:
                    goto bagkewioewygysea;
                    goto gusgywuaimwooawc;
                    sgkwaiuukkaqyqki:
                    $aiowsaccomcoikus->acauweqyyugwisqc($aaqqkgyougeiueyq->gkwkqmwweiawigae());
                    goto emagssesowicacoa;
                    gwksywaoeowkesei:
                    if (!$aiowsaccomcoikus instanceof BSSelect) {
                        goto amgsicqmemeuuaem;
                    }
                    goto sgkwaiuukkaqyqki;
                    emagssesowicacoa:
                    amgsicqmemeuuaem:
                    goto cauqmacqkssciwyq;
                    gusgywuaimwooawc:
                case "\146\157\x72\145\x69\x67\156":
                    goto acmgueaoaaweiqqu;
                    kgikoagqwkuocesg:
                    goto bagkewioewygysea;
                    goto skaayekywasksoug;
                    awaaowoqskgokwiy:
                    $aiowsaccomcoikus->wkqyoukciomqiyew()->oeewiaacscgyamai($aaqqkgyougeiueyq->uecyuoauykiqqkey());
                    goto uqiekawkwcegsumy;
                    uqiekawkwcegsumy:
                    uugwoygiyecgymgw:
                    goto kgikoagqwkuocesg;
                    acmgueaoaaweiqqu:
                    if (!$aiowsaccomcoikus instanceof BSSelect) {
                        goto uugwoygiyecgymgw;
                    }
                    goto awaaowoqskgokwiy;
                    skaayekywasksoug:
            }
            goto kmqusaiaiogecyiy;
            swckikycciugciqq:
            bagkewioewygysea:
            goto coogyackikgmecic;
            kkmwwqyesmkescyg:
            $sqeykgyoooqysmca = "\164\145\170\164\x61\162\x65\141";
            goto uamuuwkyuqomqyuy;
            wmwgeoequuwwwywa:
            $uiewakwqscemywuo[self::TYPE] = $sqeykgyoooqysmca;
            goto uqugcugeomqakcqo;
            iikgiaocummweiga:
            $uiewakwqscemywuo = ManipulateFormat::omaawkkwwyesqwcc($uiewakwqscemywuo, $qqgeiaygkaoyccig);
            goto gsusqquicmukegcs;
            gysmmooawoeggaow:
            if (in_array($eewwgseqamqiouyq, ["\x73\164\x72\151\x6e\x67", "\142\151\147\151\156\164"])) {
                goto ssesmiwwmsayksum;
            }
            goto iyikuwuweqigiuey;
            gwyseusuceuwwccu:
            goto sgikkoswwyesqomo;
            goto icouowaoycuuisqe;
            ggaucuaykyuiikem:
            aayysiegiyweiyuu:
            goto egikqoaqqegawugu;
            uamuuwkyuqomqyuy:
            qcceyyqiuiqcyqqm:
            goto ekwuycsiuqwycqea;
            qmoisuweiskkekca:
            if ($aiowsaccomcoikus) {
                goto gkoyqgogsukuowqi;
            }
            goto wywwieycqskuqcwc;
            caaygouikgagsssc:
        }
        goto qsmoiwqcuamyuwyu;
        qsmoiwqcuamyuwyu:
        ngagwiymmmycgscu:
        goto cicegcoqyuoggiwy;
        ugcwqacogqoswyse:
    }
    
    public function qewmkuwymqkkcmqm($aqykuigiuwmmcieu, $qgoqiacsiccwoawi, $eqgoocgaqwqcimie, $aokagokqyuysuksm, $igqsaukqcqscimok)
    {
        return $this->kamyqikiiuwqiiuw($qgoqiacsiccwoawi, $eqgoocgaqwqcimie, $igqsaukqcqscimok);
    }
    
    public function msyyesweoowcuuou($ccowyogiqwikkkie, $tsuauommsquiesmk)
    {
        return $ccowyogiqwikkkie;
    }
    
    public function kgogoccaimuywsoy($wkkweuacukumqmya = []) : array
    {
        goto egmocemomockemia;
        kucqcqeesaiacekm:
        return $wkkweuacukumqmya;
        goto cewyaqiqmmwmauce;
        aaiymmkqmocgakei:
        wwwggoemicgwwasy:
        goto kucqcqeesaiacekm;
        egmocemomockemia:
        $qssskwiqeumgkago = $this->oyeskqayoscwciem()->aeosueemgsygqese();
        goto gemwkqocygssmequ;
        gemwkqocygssmequ:
        if (!($qssskwiqeumgkago && is_array($qssskwiqeumgkago))) {
            goto wwwggoemicgwwasy;
        }
        goto cqaeiesyciakcagu;
        cqaeiesyciakcagu:
        foreach ($qssskwiqeumgkago as $aiowsaccomcoikus) {
            goto sqmiymiemeegegic;
            esqiocgueosoksyq:
            meseuuacmkuowqau:
            goto csggsqueaqmwgwkk;
            csqakuuiyywassgw:
            $wkkweuacukumqmya[$aiowsaccomcoikus->mwikyscisascoeea()] = $aiowsaccomcoikus->qcgakseyaikigqco();
            goto esqiocgueosoksyq;
            csggsqueaqmwgwkk:
            wycuyiukyceccaow:
            goto sescaagayikiggyq;
            sqmiymiemeegegic:
            if (!($aiowsaccomcoikus instanceof Field && $aiowsaccomcoikus->uwaascqoguwkwiaw())) {
                goto meseuuacmkuowqau;
            }
            goto csqakuuiyywassgw;
            sescaagayikiggyq:
        }
        goto acisycocoswkekik;
        acisycocoswkekik:
        saekesoeysauokkq:
        goto aaiymmkqmocgakei;
        cewyaqiqmmwmauce:
    }
    
    public function qeowcucuoaqyqwuw($umwgoasiowmqcumw) : array
    {
        goto amoygaweoeymiuiy;
        cqwgmwqiakmgyuee:
        if (!(is_array($umwgoasiowmqcumw) && $umwgoasiowmqcumw)) {
            goto moimkkmkooeiyisc;
        }
        goto ksgwgcguemcescqg;
        kiwiesucugwoiuum:
        foreach ($umwgoasiowmqcumw as $qqomumygoacsmsie => $icwicymcioeyeyek) {
            goto qscqkykqskqmisgw;
            wsqoskqgyooqeyga:
            $geecqyososceumsk = DecoratorQuery::oiamiqcuyksmmomm([self::ORM_FILTER_BY, self::ORM_FILTER_VALUE], $geecqyososceumsk);
            goto uekkkmwciocmosgg;
            ksqgwiceoomkuuiy:
            $gaeqamemwmwsyukm = ManipulateArray::get($icwicymcioeyeyek, "\143\x6f\x75\x6e\164", 0);
            goto gkoiyaagwgycysim;
            swmgucaogosuueug:
            eokcuuwqaomkooag:
            goto uwsmcsiiisuocgwg;
            uekkkmwciocmosgg:
            goto sccqekuwywiisami;
            goto ecqeqquikuomwgsu;
            suaymckwwgmugsaa:
            if ($qqomumygoacsmsie !== "\141\x6c\154") {
                goto ciwggusyecgskagy;
            }
            goto wsqoskqgyooqeyga;
            gkoiyaagwgycysim:
            if ($meqocwsecsywiiqs) {
                goto eokcuuwqaomkooag;
            }
            goto ysssquieawyysiyc;
            ycskuioouwwemgke:
            $yeacayasgueouoqc = $scsyuucsumiwkqqc ? $scsyuucsumiwkqqc === $qqomumygoacsmsie : $momcykaoccoymeig === 1;
            goto syeeegeygawwqiuu;
            iuieskocqoqkkwus:
            $momcykaoccoymeig++;
            goto isiqkeyciyqgkayu;
            gwayeyymscmgwqkg:
            ycweseaccsomkioa:
            goto caoikoqmyeqsqqqe;
            ysssquieawyysiyc:
            ManipulateArray::unset($cqcsaaswaciweiie, $qqomumygoacsmsie);
            goto yomoeykcqyukscmi;
            ecqeqquikuomwgsu:
            ciwggusyecgskagy:
            goto igscwycsqsckmcuq;
            yomoeykcqyukscmi:
            goto qgqasacusgwmoegy;
            goto swmgucaogosuueug;
            syeeegeygawwqiuu:
            $umwgoasiowmqcumw[$qqomumygoacsmsie] = ManipulateHTML::qgsekwygcgawekeq("\141", ["\x68\x72\x65\146" => $geecqyososceumsk, "\143\x6c\x61\163\163" => "\157\x72\155\55\x66\x69\154\x74\145\x72\x2d\x6c\x69\156\153" . ($yeacayasgueouoqc ? "\x20\143\x75\162\162\145\x6e\x74" : '')], true, sprintf("\45\x73\40\x28\45\x73\51", $meqocwsecsywiiqs, ManipulateHTML::gmqyuaqwgiayskei($this->wusgwkaycokeckqs($gaeqamemwmwsyukm))));
            goto iuieskocqoqkkwus;
            wmcaecgwmmwuuqsq:
            sccqekuwywiisami:
            goto ycskuioouwwemgke;
            qscqkykqskqmisgw:
            $meqocwsecsywiiqs = ManipulateArray::get($icwicymcioeyeyek, "\x74\151\164\154\145", false);
            goto ksqgwiceoomkuuiy;
            isiqkeyciyqgkayu:
            qgqasacusgwmoegy:
            goto gwayeyymscmgwqkg;
            igscwycsqsckmcuq:
            $geecqyososceumsk = DecoratorQuery::yqymaqmqiqmmmsoo([self::ORM_FILTER_BY => $ymaogssqccumcyqa, self::ORM_FILTER_VALUE => $qqomumygoacsmsie], $geecqyososceumsk);
            goto wmcaecgwmmwuuqsq;
            uwsmcsiiisuocgwg:
            $geecqyososceumsk = ManipulateServer::ekcymmyqoceukosc(true);
            goto suaymckwwgmugsaa;
            caoikoqmyeqsqqqe:
        }
        goto cmagycousakeeaei;
        kcomueysiyyqagus:
        $ymaogssqccumcyqa = $this->aakiaoueckoiyoew();
        goto ckuagmyqkyoeeaeu;
        ksgwgcguemcescqg:
        $umwgoasiowmqcumw = ["\141\x6c\154" => ["\x74\x69\x74\x6c\145" => __("\x41\154\154", PR__CMN__FOUNDATION), "\x63\157\165\156\x74" => array_sum(array_map(function ($mokouoooiwsmcmiu) {
            return $mokouoooiwsmcmiu["\143\157\165\x6e\x74"];
        }, $umwgoasiowmqcumw))]] + $umwgoasiowmqcumw;
        goto kiwiesucugwoiuum;
        okemsmmeceoeaswi:
        return $umwgoasiowmqcumw;
        goto ossyqogewmggmaoc;
        amoygaweoeymiuiy:
        $momcykaoccoymeig = 1;
        goto kcomueysiyyqagus;
        ckuagmyqkyoeeaeu:
        $scsyuucsumiwkqqc = ManipulateServer::get("\x6f\x72\x6d\x5f\146\x69\154\164\145\x72\x5f\x76\x61\x6c\x75\145");
        goto cqwgmwqiakmgyuee;
        eekeksysqeuoskoo:
        moimkkmkooeiyisc:
        goto okemsmmeceoeaswi;
        cmagycousakeeaei:
        scyqmcegwikkoesw:
        goto eekeksysqeuoskoo;
        ossyqogewmggmaoc:
    }
    
    public function facqwqmgcogwsokw($ekcswiguywieeeoc, $aokagokqyuysuksm, $aiowsaccomcoikus, $mksyucucyswaukig)
    {
        return $ekcswiguywieeeoc;
    }
    
    public function oeqsiemawogwwymo($eqgoocgaqwqcimie, $aokagokqyuysuksm, $aiowsaccomcoikus, $mksyucucyswaukig)
    {
        return $eqgoocgaqwqcimie;
    }
    
    public function xekcwecguykmmggo($wkkweuacukumqmya = []) : array
    {
        return $wkkweuacukumqmya;
    }
    
    public function mcaggmuyamgsomaa($ccowyogiqwikkkie = [], $aokagokqyuysuksm = null, $tsuauommsquiesmk = null, $igqsaukqcqscimok = null) : array
    {
        return $ccowyogiqwikkkie;
    }
    
    public function kumuygiiqswoyasy(bool $iqoeaggekweuwcgw = false) : ?string
    {
        goto egosmwkuuikwqeak;
        eymiqwsygoowowuu:
        $ceiwsaacewygcsqg = $this->myywwqkyiwawwquy($ceiwsaacewygcsqg);
        goto keqagmaiqqsgkmso;
        ekgsawcuswowmosm:
        return $ceiwsaacewygcsqg;
        goto uiwswesymogiwsgg;
        egosmwkuuikwqeak:
        $ceiwsaacewygcsqg = $this->primaryKey;
        goto eosmwawqaocwgccq;
        keqagmaiqqsgkmso:
        ggkoiouwecyiosym:
        goto ekgsawcuswowmosm;
        eosmwawqaocwgccq:
        if (!$iqoeaggekweuwcgw) {
            goto ggkoiouwecyiosym;
        }
        goto eymiqwsygoowowuu;
        uiwswesymogiwsgg:
    }
    
    public function gqaysymikgeawkqa() : ?Builder
    {
        goto kgeggsckmgcgwcqm;
        qimieogaimwmukmu:
        try {
            goto wkcwuemioaiyouek;
            usgmimcwygsmcioa:
            
            $siykeiywomwwuoiw = $this->getConnection()->table($aasascamegmwqmqk);
            goto qggiogeyowcoaiqy;
            qosckaqceoumcasm:
            euogcyyayioyyiyg:
            goto gmcqkoqwkiawaikw;
            ekgcquiosyesyism:
            $siykeiywomwwuoiw = null;
            goto qosckaqceoumcasm;
            qggiogeyowcoaiqy:
            if (!($siykeiywomwwuoiw && !$siykeiywomwwuoiw->exists())) {
                goto euogcyyayioyyiyg;
            }
            goto ekgcquiosyesyism;
            wkcwuemioaiyouek:
            $aasascamegmwqmqk = $this->miwqiiqeegeqcwis();
            goto usgmimcwygsmcioa;
            gmcqkoqwkiawaikw:
        } catch (Exception $wgaoewqkwgomoaai) {
            $this->saqqeqmcyyoeqici($this->kyacickkomkioeyu($wgaoewqkwgomoaai));
        }
        goto gmymycwymqkuiisi;
        kgeggsckmgcgwcqm:
        $siykeiywomwwuoiw = null;
        goto qimieogaimwmukmu;
        gmymycwymqkuiisi:
        return $siykeiywomwwuoiw;
        goto wogokmgkgkumqcws;
        wogokmgkgkumqcws:
    }
    
    public function feccsgmuogywweio($mksyucucyswaukig)
    {
        goto cycyaqqawmwiywwe;
        ygywkqgioiscmuie:
        koawwmccgquqqmwa:
        goto iuaommmyqoecmuss;
        eqieeecackceeweg:
        goto cokacyaayuueyuuu;
        goto ygywkqgioiscmuie;
        cycyaqqawmwiywwe:
        if (is_numeric($mksyucucyswaukig)) {
            goto koawwmccgquqqmwa;
        }
        goto ckowiuagwmsqmiqc;
        eecgougegqassgyq:
        return $this->cyyiiykmaeuqqgok($aokagokqyuysuksm);
        goto cuwkqgemkmuuegkc;
        iuaommmyqoecmuss:
        $aokagokqyuysuksm = $mksyucucyswaukig;
        goto ikeyoyoigsuouokm;
        ckowiuagwmsqmiqc:
        $aokagokqyuysuksm = ManipulateArray::get($mksyucucyswaukig, $this->kumuygiiqswoyasy());
        goto eqieeecackceeweg;
        ikeyoyoigsuouokm:
        cokacyaayuueyuuu:
        goto eecgougegqassgyq;
        cuwkqgemkmuuegkc:
    }
    
    public function getConnection() : Database
    {
        goto wemmseueskwkcwou;
        cceakqgoysacqwmc:
        $mgcmmwqwguicsews = Database::symcgieuakksimmu($ymqmyyeuycgmigyo);
        goto scaimkkukmgoeaya;
        wemmseueskwkcwou:
        $ymqmyyeuycgmigyo = $this->miwqiiqeegeqcwis();
        goto cceakqgoysacqwmc;
        ceeqguaoysyaasey:
        $mgcmmwqwguicsews->wcweamocuicuusky("\156\141\155\x65", $ymqmyyeuycgmigyo);
        goto ekmqouqsgsaukeiq;
        scaimkkukmgoeaya:
        if (!($mgcmmwqwguicsews instanceof Database && !$mgcmmwqwguicsews->aakmagwggmkoiiyu())) {
            goto oyicskieeaewgwce;
        }
        goto ceeqguaoysyaasey;
        ekmqouqsgsaukeiq:
        oyicskieeaewgwce:
        goto cugkqmkuyuwwqcec;
        cugkqmkuyuwwqcec:
        return $mgcmmwqwguicsews;
        goto ewooakeuigcyuemu;
        ewooakeuigcyuemu:
    }
    public function ckgmycmaukqgkosk()
    {
        goto kacgiqwewyeeyyam;
        cgqkqmiekaageyka:
        wceiuqaeywmgscww:
        goto goimywgsweeqsewo;
        qwogeocemuaaasiw:
        if ($yyksucsgisomecgg->masyeqmaiuqwosei()) {
            goto wceiuqaeywmgscww;
        }
        goto ywmuoigomwwigqea;
        kacgiqwewyeeyyam:
        $yyksucsgisomecgg = $this->oyeskqayoscwciem();
        goto qwogeocemuaaasiw;
        ywmuoigomwwigqea:
        $yyksucsgisomecgg->usuqmwksoeaayaig(ManipulateString::kwuyaykukcmaqggg(ManipulateString::mkwcwqkqeqkqyggc(self::uqggkiomyiceyooa())));
        goto cgqkqmiekaageyka;
        goimywgsweeqsewo:
        $yyksucsgisomecgg->iqoguoscqueomqsk(ORM::symcgieuakksimmu()->homgcsoocssgwgym($yyksucsgisomecgg->ggqekkkocygywmoy(), $yyksucsgisomecgg->cwueseysoqeewkao(), $yyksucsgisomecgg->iemucaoqaisiwise()));
        goto uomwseyiqckeewgo;
        uomwseyiqckeewgo:
    }
    
    public function oyeskqayoscwciem() : Register
    {
        goto kmocamaieycogugg;
        kmocamaieycogugg:
        if ($this->register) {
            goto cqyiukmuqceicqwa;
        }
        goto iuieyqacggsykgus;
        eywcgeccsmquugsw:
        return $this->register;
        goto wwskeewecyukygeg;
        iuieyqacggsykgus:
        $this->register = new Register();
        goto wamkaouokmyoyuqu;
        wamkaouokmyoyuqu:
        cqyiukmuqceicqwa:
        goto eywcgeccsmquugsw;
        wwskeewecyukygeg:
    }
    
    public final function miwqiiqeegeqcwis() : ?string
    {
        return $this->oyeskqayoscwciem()->aakmagwggmkoiiyu();
    }
    
    protected function newBaseQueryBuilder() : Builder
    {
        
        return $this->getConnection()->query();
    }
    
    public function aioqieywgykaaoec() : ?array
    {
        return $this->views;
    }
    
    public function cgswceaawqgeskua(string $sqeykgyoooqysmca) : ?View
    {
        return ManipulateArray::get($this->aioqieywgykaaoec(), $sqeykgyoooqysmca);
    }
    
    public function ecmiqywsauuoccwo($sqeykgyoooqysmca, View $qqomumygoacsmsie) : self
    {
        $this->views[$sqeykgyoooqysmca] = $qqomumygoacsmsie;
        return $this;
    }
    
    public function ggwyugcggywuwcse()
    {
        goto cqeceeagmysoyoqg;
        cqeceeagmysoyoqg:
        $yciaosuiyeieceug = false;
        goto wggeggkumkwaaesu;
        qcuywygiosoqycaa:
        sickakeesgcgwisw:
        goto coaysoeouasaekie;
        coaysoeouasaekie:
        wmqegaqemgiggsce:
        goto ykymogaqkgaiiiyi;
        wggeggkumkwaaesu:
        $yskommoiekkwiggo = $this->cgswceaawqgeskua("\x65\x64\151\164");
        goto uauqmaeueukkmuwa;
        kmikwoqwigwuyqae:
        $yciaosuiyeieceug = $yskommoiekkwiggo;
        goto qcuywygiosoqycaa;
        uauqmaeueukkmuwa:
        if (!$yskommoiekkwiggo instanceof Edit) {
            goto wmqegaqemgiggsce;
        }
        goto gkyguugwwoaqoigy;
        gkyguugwwoaqoigy:
        
        if (!DecoratorUser::scmcyesmmikkucie($this->oyeskqayoscwciem()->gwaeeegmgggawiyi("\145\x64\x69\164\137\151\x74\x65\x6d\163"))) {
            goto sickakeesgcgwisw;
        }
        goto kmikwoqwigwuyqae;
        ykymogaqkgaiiiyi:
        return $yciaosuiyeieceug;
        goto uusyaguomkqeakkm;
        uusyaguomkqeakkm:
    }
    
    public function qqakqoekigkcmyek()
    {
        goto qsyyeoosgigiiequ;
        qikmwaessamuueoe:
        qoigaauuokyusmgk:
        goto aeekgeqawgsmgiqw;
        yegkgccwomcgkumi:
        $yciaosuiyeieceug = $kmsymkkmiwykeyqi;
        goto qikmwaessamuueoe;
        mgiwqumikeuieocg:
        if (!$kmsymkkmiwykeyqi instanceof Show) {
            goto qoigaauuokyusmgk;
        }
        goto yegkgccwomcgkumi;
        aeekgeqawgsmgiqw:
        return $yciaosuiyeieceug;
        goto imgagmqusgiqissi;
        qsyyeoosgigiiequ:
        $yciaosuiyeieceug = false;
        goto jweeyemwqyqmyuys;
        jweeyemwqyqmyuys:
        $kmsymkkmiwykeyqi = $this->cgswceaawqgeskua("\163\x68\x6f\167");
        goto mgiwqumikeuieocg;
        imgagmqusgiqissi:
    }
    
    public function mukyysqkgaimcygs() : bool
    {
        $gkswkiicccswksiq = $this->oyeskqayoscwciem()->gwaeeegmgggawiyi("\x64\145\x6c\x65\164\145\x5f\151\164\x65\x6d\163");
        return $this->gqigeuumsosmamqs() && DecoratorUser::scmcyesmmikkucie($gkswkiicccswksiq);
    }
    
    public function comogmawyoiquwis() : ?string
    {
        goto cesaaiguwciccysi;
        cesaaiguwciccysi:
        $iwywmkygwewiamwm = null;
        goto wskccugoccagaqcw;
        kqsyqwwscwoswsgk:
        $iwywmkygwewiamwm = $qqomumygoacsmsie->qmgcisuuikgmqcsu();
        goto yemuiyokmqoqckwu;
        yemuiyokmqoqckwu:
        scaciowogmayswms:
        goto qocmmyskykeuwsae;
        qocmmyskykeuwsae:
        return $iwywmkygwewiamwm;
        goto kywmiquiiwmwgooy;
        wskccugoccagaqcw:
        $qqomumygoacsmsie = $this->cgswceaawqgeskua("\151\156\144\x65\170");
        goto sqyceswygksmmqqa;
        sqyceswygksmmqqa:
        if (!$qqomumygoacsmsie instanceof Index) {
            goto scaciowogmayswms;
        }
        goto kqsyqwwscwoswsgk;
        kywmiquiiwmwgooy:
    }
    
    public function yyykkcyiksewsoqy($kqokimuosyuyyucg = 0) : ?string
    {
        goto yquysamwsoyyqcya;
        gyceukwoyaasuwik:
        syquiiogeymgicuy:
        goto iiyamaquicwswcyu;
        yquysamwsoyyqcya:
        $iwywmkygwewiamwm = null;
        goto qsycguggqkgywgaq;
        iiyamaquicwswcyu:
        return $iwywmkygwewiamwm;
        goto iiyggeuemwuwqiey;
        wsyeqyekimescwkq:
        $iwywmkygwewiamwm = DecoratorQuery::yqymaqmqiqmmmsoo([$this->kumuygiiqswoyasy() => $kqokimuosyuyyucg], $qqomumygoacsmsie->qmgcisuuikgmqcsu());
        goto gyceukwoyaasuwik;
        qsycguggqkgywgaq:
        if (!($qqomumygoacsmsie = $this->ggwyugcggywuwcse())) {
            goto syquiiogeymgicuy;
        }
        goto wsyeqyekimescwkq;
        iiyggeuemwuwqiey:
    }
    
    public function uesweuocqoywoyms($kqokimuosyuyyucg = 0) : ?string
    {
        goto agokkauammisaqke;
        agokkauammisaqke:
        $iwywmkygwewiamwm = null;
        goto ggoyigsoyccmscum;
        pscqogmyseiwuqye:
        omeookmiomoieeee:
        goto cyyecekuwygaqwcy;
        ggoyigsoyccmscum:
        if (!($qqomumygoacsmsie = $this->qqakqoekigkcmyek())) {
            goto omeookmiomoieeee;
        }
        goto aigeoggkowgwwwqg;
        aigeoggkowgwwwqg:
        $iwywmkygwewiamwm = DecoratorQuery::yqymaqmqiqmmmsoo([$this->kumuygiiqswoyasy() => $kqokimuosyuyyucg], $qqomumygoacsmsie->qmgcisuuikgmqcsu());
        goto pscqogmyseiwuqye;
        cyyecekuwygaqwcy:
        return $iwywmkygwewiamwm;
        goto muqeeocooyiosouk;
        muqeeocooyiosouk:
    }
    
    public function cgccmsewskigcuig($kqokimuosyuyyucg = 0) : ?string
    {
        goto mowauiysyiciqaaa;
        qooykiaywemimcke:
        ayggiggmcqckqwom:
        goto okceyucmoigyokyy;
        msuyygiskkumokec:
        if (!$kqokimuosyuyyucg) {
            goto wiiyageyqowkmmko;
        }
        goto ggkgseywksemuogc;
        uecmkggsueeiyawk:
        return $iwywmkygwewiamwm;
        goto iyakeemwaiqeueme;
        keiciayiyqsemsys:
        goto ogywsgmqcgioaoqk;
        goto ggoquyyseekiwukq;
        sykwygmouoikuyws:
        $iwywmkygwewiamwm = $qqomumygoacsmsie->qmgcisuuikgmqcsu();
        goto keiciayiyqsemsys;
        iyeswqeqcsmsoueq:
        if (!($qqomumygoacsmsie instanceof Index && $this->mukyysqkgaimcygs())) {
            goto ayggiggmcqckqwom;
        }
        goto eiekcqosmyqmwqag;
        eiekcqosmyqmwqag:
        $ceiwsaacewygcsqg = $this->kumuygiiqswoyasy();
        goto mgscyaiwekksacco;
        mgscyaiwekksacco:
        if ($qqomumygoacsmsie->qcsgmgoukiouuscw()) {
            goto wcagqkquasswioos;
        }
        goto sykwygmouoikuyws;
        dwciioycickkwawq:
        $iwywmkygwewiamwm = ManipulateServer::ekcymmyqoceukosc(true);
        goto yoociieskmuucgms;
        okceyucmoigyokyy:
        wiiyageyqowkmmko:
        goto uecmkggsueeiyawk;
        mowauiysyiciqaaa:
        $iwywmkygwewiamwm = null;
        goto msuyygiskkumokec;
        ysiuiuqawkaaamus:
        $iwywmkygwewiamwm = DecoratorQuery::yqymaqmqiqmmmsoo(["\157\162\155\55\141\x63\x74\x69\157\x6e" => "\x64\x65\x6c\145\x74\145", $ceiwsaacewygcsqg => $kqokimuosyuyyucg], $iwywmkygwewiamwm);
        goto qooykiaywemimcke;
        ggkgseywksemuogc:
        $qqomumygoacsmsie = $this->cgswceaawqgeskua("\151\x6e\144\145\x78");
        goto iyeswqeqcsmsoueq;
        yoociieskmuucgms:
        ogywsgmqcgioaoqk:
        goto ysiuiuqawkaaamus;
        ggoquyyseekiwukq:
        wcagqkquasswioos:
        goto dwciioycickkwawq;
        iyakeemwaiqeueme:
    }
    
    public function setCreatedAt($eqgoocgaqwqcimie)
    {
        $this->{static::CREATED_AT} = current_time("\155\x79\x73\x71\154");
    }
    
    public function setUpdatedAt($eqgoocgaqwqcimie)
    {
        $this->{static::UPDATED_AT} = current_time("\155\x79\x73\x71\154");
    }
    
    public function acsiseaeysswwqkw() : ?string
    {
        goto jgaoqcmiqagoiuko;
        cwsgieeaugwciiwu:
        return $iwywmkygwewiamwm;
        goto wiigoqowismumcsm;
        sqokyowsuawgkusy:
        $iwywmkygwewiamwm = $ecmiqywsauuoccwo->qmgcisuuikgmqcsu();
        goto iyekgiaayeasoggw;
        oycikycyewimcaew:
        if (!($ecmiqywsauuoccwo instanceof View && DecoratorUser::scmcyesmmikkucie($gkswkiicccswksiq))) {
            goto ouuuacyewgmocwsc;
        }
        goto sqokyowsuawgkusy;
        wimggeysyugwwkca:
        $ecmiqywsauuoccwo = $this->cgswceaawqgeskua("\141\144\x64");
        goto oycikycyewimcaew;
        iyekgiaayeasoggw:
        ouuuacyewgmocwsc:
        goto cwsgieeaugwciiwu;
        jgaoqcmiqagoiuko:
        $iwywmkygwewiamwm = null;
        goto iekesyeicomwcuas;
        iekesyeicomwcuas:
        $gkswkiicccswksiq = $this->oyeskqayoscwciem()->gwaeeegmgggawiyi("\x63\162\145\x61\x74\x65\137\151\x74\x65\155\163");
        goto wimggeysyugwwkca;
        wiigoqowismumcsm:
    }
    
    public function sgcuwcowgwimgsgk($aokagokqyuysuksm, $cwwowqyuwccuykom = false)
    {
        goto waiqmywasoeggkce;
        imgyqyeaoawqscae:
        $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\142\145\x66\x6f\162\x65\137\144\x65\154\x65\x74\x65\x5f\157\x62\152\145\143\164", self::class), $mksyucucyswaukig, $aokagokqyuysuksm);
        goto isssemmuiiaewiwi;
        ggcayqaayysyqmia:
        $kigowwqauiumummw = false;
        goto miiegqgiuamasook;
        miiegqgiuamasook:
        if (!$mksyucucyswaukig instanceof Model) {
            goto qwqwwywiiuqayaca;
        }
        goto eskmkooukwwieuke;
        waiqmywasoeggkce:
        $mksyucucyswaukig = $this->cyyiiykmaeuqqgok($aokagokqyuysuksm);
        goto ggcayqaayysyqmia;
        eskmkooukwwieuke:
        $yciaosuiyeieceug = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x63\141\156\x5f\144\145\x6c\145\x74\x65\x5f\157\142\152\x65\143\x74", self::class), true, $mksyucucyswaukig, $cwwowqyuwccuykom);
        goto muaigwwqgsgowgkk;
        isssemmuiiaewiwi:
        try {
            goto caskqicqwmyuugku;
            ykcymsoikgqeaukw:
            $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\157\142\x6a\145\143\164\x5f\x64\145\x6c\x65\164\x65\144", self::class), $aokagokqyuysuksm);
            goto akcqguucucewaqws;
            akycayowsciesmug:
            ukcukckucsyaggmw:
            goto ogqaueuweieisowc;
            assyuumuuuocycyy:
            
            if ($mksyucucyswaukig->delete()) {
                goto mwkcmgksoyycumos;
            }
            goto oiueawimuggcqgky;
            oiueawimuggcqgky:
            $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x66\x61\151\154\x65\144\x5f\144\145\154\x65\164\x65\137\157\x62\x6a\x65\143\x74", self::class), $aokagokqyuysuksm);
            goto qqiwcikkcgmmakow;
            wgcuewwyieoqaoek:
            mwkcmgksoyycumos:
            goto wksssmewgogkacei;
            qqiwcikkcgmmakow:
            goto aikukgimkamkgwsu;
            goto wgcuewwyieoqaoek;
            wksssmewgogkacei:
            $kigowwqauiumummw = $mksyucucyswaukig;
            goto ykcymsoikgqeaukw;
            caskqicqwmyuugku:
            if (!$this->ueaumcyiwwkeueag($aokagokqyuysuksm, $mksyucucyswaukig)) {
                goto ukcukckucsyaggmw;
            }
            goto assyuumuuuocycyy;
            akcqguucucewaqws:
            aikukgimkamkgwsu:
            goto akycayowsciesmug;
            ogqaueuweieisowc:
        } catch (Exception $wgaoewqkwgomoaai) {
            $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\146\141\x69\x6c\x65\144\137\x64\145\154\x65\x74\145\137\x6f\142\x6a\x65\143\164", self::class), $aokagokqyuysuksm);
        }
        goto oiguycsiaweycioe;
        ueeowyociayoygsa:
        qwqwwywiiuqayaca:
        goto isumwussqyqawwmy;
        isumwussqyqawwmy:
        return $kigowwqauiumummw;
        goto ksaimkacqesiguyg;
        oiguycsiaweycioe:
        yaokowamwsaggege:
        goto ueeowyociayoygsa;
        muaigwwqgsgowgkk:
        if (!$yciaosuiyeieceug) {
            goto yaokowamwsaggege;
        }
        goto imgyqyeaoawqscae;
        ksaimkacqesiguyg:
    }
    
    public function ueaumcyiwwkeueag($aokagokqyuysuksm, $mksyucucyswaukig) : bool
    {
        return true;
    }
    
    public function ugmceccgwaaaigiy() : ?array
    {
        return $this->fields;
    }
    
    public function qaqsggqyouammqgm($aiowsaccomcoikus) : self
    {
        $this->fields[] = $aiowsaccomcoikus;
        return $this;
    }
    
    public function ukqioecasimmeygm() : ?string
    {
        return $this->labelKey;
    }
    
    public function uikgwcuascgeissw($mksyucucyswaukig) : ?string
    {
        $cewmysakgwuuigoy = $this->ukqioecasimmeygm();
        return $mksyucucyswaukig->{$cewmysakgwuuigoy};
    }
    
    public function kuuugksiksqcaaaa(&$icwicymcioeyeyek) : bool
    {
        return count($this->coescmgakmkiyseg()) < 1;
    }
    
    public function coescmgakmkiyseg() : ?array
    {
        return $this->validationErrors;
    }
    
    public function skwiagoagiyswgay() : ?array
    {
        goto semymwueqcweowae;
        semymwueqcweowae:
        $ueeagokqmgisgauy = $this->coescmgakmkiyseg();
        goto oegcoaeyokkgoqyg;
        oegcoaeyokkgoqyg:
        $this->validationErrors = [];
        goto euuoiciaiieoqyws;
        euuoiciaiieoqyws:
        return $ueeagokqmgisgauy;
        goto wcmksyiisiciasko;
        wcmksyiisiciasko:
    }
    
    public function qmqogusoaqeygewm($mksyucucyswaukig)
    {
        return $mksyucucyswaukig;
    }
    
    public function iasywwkguyauiywu($msqkueqksqwmskak, $uwomkgseoiegeume)
    {
    }
    
    public function gscuuyuyauokoyuo(array $icwicymcioeyeyek, $cwwowqyuwccuykom = false) : array
    {
        goto ekcwasmkccgmogmy;
        wguccgmciesyocmi:
        try {
            goto aiociqsiiwguaywy;
            gggkwgcemqeckcse:
            ugoeueisekcsquug:
            goto ayamqyqegiuausko;
            isomygcucicwccgy:
            if ($aokagokqyuysuksm) {
                goto acuyqioeqaoeskya;
            }
            goto wcaeyoeeuiqqgqou;
            mseimosiimuuceoa:
            koueosuswmucsaec:
            goto scaoisaaceiaweoe;
            uwiaeuuiaimugqys:
            $egkyssmuqcwaciya = self::uqggkiomyiceyooa();
            goto eyyamwsogeqwamug;
            cecaekugyecciwcg:
            $mksyucucyswaukig = null;
            goto wyoqmwcsuewswiua;
            wuuucygsmqmsiyoi:
            $kuuugksiksqcaaaa = $this->gkieuyoqcusoksmg($icwicymcioeyeyek, $mksyucucyswaukig);
            goto gwkumgocycceogce;
            aiociqsiiwguaywy:
            $aokagokqyuysuksm = (int) ManipulateArray::get($icwicymcioeyeyek, $ceiwsaacewygcsqg);
            goto isomygcucicwccgy;
            yqaacqqyisoewkqq:
            $this->scmmymqkoyckgkam($mksyucucyswaukig);
            goto mseimosiimuuceoa;
            aqcuimcoqmsiygwk:
            $this->qiwiemuiqiugqqqg($mksyucucyswaukig, $icwicymcioeyeyek);
            goto yqaacqqyisoewkqq;
            eyyamwsogeqwamug:
            $mksyucucyswaukig = new $egkyssmuqcwaciya();
            goto oqccquoqqkkaqksk;
            ckmycmakimaeygcu:
            
            if ($mksyucucyswaukig->save()) {
                goto ugoeueisekcsquug;
            }
            goto cecaekugyecciwcg;
            cwyauqoosqaoaoki:
            $mksyucucyswaukig = $this->ckcicmwwiccamyqk($this, $mksyucucyswaukig, $icwicymcioeyeyek);
            goto wiciqigmosmkkmwk;
            someqooawckycwao:
            $iggwcmkgmicmouyu = false;
            goto ymwckeawsukyukqs;
            wsmkoikacqsiweuw:
            $kuuugksiksqcaaaa = $this->gkieuyoqcusoksmg($icwicymcioeyeyek);
            goto gaikqsuyumumsesg;
            wiciqigmosmkkmwk:
            $mksyucucyswaukig = $this->qmqogusoaqeygewm($mksyucucyswaukig);
            goto ckmycmakimaeygcu;
            ayamqyqegiuausko:
            $kigowwqauiumummw = true;
            goto aqcuimcoqmsiygwk;
            swkysimqcqkikmgy:
            if (!($kuuugksiksqcaaaa && $mksyucucyswaukig instanceof Model)) {
                goto wyqmackmyaikcggs;
            }
            goto cwyauqoosqaoaoki;
            ymwckeawsukyukqs:
            $mksyucucyswaukig = $this->cyyiiykmaeuqqgok($aokagokqyuysuksm);
            goto gosaiqsaqksagqsg;
            wyoqmwcsuewswiua:
            goto koueosuswmucsaec;
            goto gggkwgcemqeckcse;
            iougqueaywwucoko:
            acuyqioeqaoeskya:
            goto someqooawckycwao;
            wouekamwmcuguaoa:
            goto ukkmusemcqayowoa;
            goto iougqueaywwucoko;
            wcaeyoeeuiqqgqou:
            $iggwcmkgmicmouyu = true;
            goto wsmkoikacqsiweuw;
            gaikqsuyumumsesg:
            if (!$kuuugksiksqcaaaa) {
                goto igkeawygswqouuym;
            }
            goto uwiaeuuiaimugqys;
            gwkumgocycceogce:
            ukkmusemcqayowoa:
            goto swkysimqcqkikmgy;
            gosaiqsaqksagqsg:
            $this->iasywwkguyauiywu($mksyucucyswaukig, $icwicymcioeyeyek);
            goto wuuucygsmqmsiyoi;
            scaoisaaceiaweoe:
            wyqmackmyaikcggs:
            goto mcgcqaiwmkewmwue;
            oqccquoqqkkaqksk:
            igkeawygswqouuym:
            goto wouekamwmcuguaoa;
            mcgcqaiwmkewmwue:
        } catch (Exception $wgaoewqkwgomoaai) {
            goto gecywkyeskagueqm;
            guackgkaeswkcaoq:
            qscmokiskqyuswqo:
            goto wyoouquciqoosuim;
            ekwmcssqowkcoyci:
            if (!$iggwcmkgmicmouyu) {
                goto sswmueweogqkqumq;
            }
            goto oqkcuegyumswqekg;
            qmwmasuoyuwmcigw:
            $kigowwqauiumummw = false;
            goto guackgkaeswkcaoq;
            ewiwaeckgqaiwgio:
            $mksyucucyswaukig = null;
            goto qmwmasuoyuwmcigw;
            wcgoiisqmmawuiag:
            sswmueweogqkqumq:
            goto ewiwaeckgqaiwgio;
            yckkwcimmakkieos:
            if (!$kigowwqauiumummw) {
                goto qscmokiskqyuswqo;
            }
            goto ekwmcssqowkcoyci;
            oqkcuegyumswqekg:
            try {
                
                $mksyucucyswaukig->delete();
            } catch (Exception $wgaoewqkwgomoaai) {
            }
            goto wcgoiisqmmawuiag;
            gecywkyeskagueqm:
            $this->kmsyisgakgwscyey($this->kyacickkomkioeyu($wgaoewqkwgomoaai));
            goto yckkwcimmakkieos;
            wyoouquciqoosuim:
        }
        goto qmkmuwomcwygkysi;
        ooceggceowgoacyu:
        $kigowwqauiumummw = false;
        goto gwmauwgkiomyggmu;
        ekwsguueioyegqkc:
        $iggwcmkgmicmouyu = true;
        goto ooceggceowgoacyu;
        coqycqiqgwkgkymo:
        $ceiwsaacewygcsqg = $this->kumuygiiqswoyasy();
        goto qcmakskemmcgaeyg;
        ekcwasmkccgmogmy:
        $mksyucucyswaukig = null;
        goto ekwsguueioyegqkc;
        qmkmuwomcwygkysi:
        ziggykossqqayaki:
        goto iaiooeockccgaaiq;
        syaqwysmymkgkcuu:
        $siykeiywomwwuoiw = $this->gqaysymikgeawkqa();
        goto coqycqiqgwkgkymo;
        aigseumaammwaqck:
        augyqmcwawmsykme:
        goto ggqqwysyuqiwksgm;
        msayswiykqokmuqa:
        if ($cwwowqyuwccuykom) {
            goto augyqmcwawmsykme;
        }
        goto yeacwagosugscqcg;
        ggqqwysyuqiwksgm:
        if (!$this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x6f\162\155\137\x70\x65\162\x73\x69\x73\164\x5f\157\x72\x5f\x75\160\144\141\164\145\x5f\166\x61\x6c\x69\144\141\x74\151\157\x6e"), $kuuugksiksqcaaaa, $icwicymcioeyeyek, $this)) {
            goto ziggykossqqayaki;
        }
        goto wguccgmciesyocmi;
        aaeuuccoyyuqkouc:
        return ["\x6f\x62\x6a\x65\x63\164" => $mksyucucyswaukig, $ceiwsaacewygcsqg => ManipulateArray::get($mksyucucyswaukig, $ceiwsaacewygcsqg), self::ERRORS => $this->skwiagoagiyswgay(), self::SUCCESS => $kigowwqauiumummw];
        goto skoscsikiaakokqe;
        gwmauwgkiomyggmu:
        $kuuugksiksqcaaaa = true;
        goto syaqwysmymkgkcuu;
        qcmakskemmcgaeyg:
        if (!$siykeiywomwwuoiw) {
            goto sooqqqougsgcumko;
        }
        goto msayswiykqokmuqa;
        yeacwagosugscqcg:
        $kuuugksiksqcaaaa = $this->kuuugksiksqcaaaa($icwicymcioeyeyek);
        goto aigseumaammwaqck;
        iaiooeockccgaaiq:
        sooqqqougsgcumko:
        goto aaeuuccoyyuqkouc;
        skoscsikiaakokqe:
    }
    
    public function scmmymqkoyckgkam($mksyucucyswaukig)
    {
    }
    
    public function iysseyicgouwysgk($mksyucucyswaukig) : ?string
    {
        return '';
    }
    
    public function mayuaaqmsqeyayyg($mksyucucyswaukig, $qqomumygoacsmsie = "\163\x68\157\167") : ?string
    {
        goto skkqqcysscikmmik;
        oewsoauskqoqmiqa:
        $mksyucucyswaukig = $this->akkkoiiymmamsauc($mksyucucyswaukig);
        goto sgaoyyoooykieusg;
        oiissisqowcgwiyc:
        if (!$iwywmkygwewiamwm) {
            goto yqisgseiimwmoeee;
        }
        goto ugqeagqqaucqkcys;
        ugqeagqqaucqkcys:
        $pkyyagewkiyckmwy = $this->geyuyukmwaoksywa($iwywmkygwewiamwm, $pkyyagewkiyckmwy);
        goto ywiugkwcqkomgucy;
        ywiugkwcqkomgucy:
        yqisgseiimwmoeee:
        goto ekoeysiuqeggaqku;
        cmogamaycywckuim:
        $pkyyagewkiyckmwy = $this->iysseyicgouwysgk($mksyucucyswaukig);
        goto oiissisqowcgwiyc;
        iyekyouiiwcsewgy:
        switch ($qqomumygoacsmsie) {
            case "\163\x68\x6f\167":
                $iwywmkygwewiamwm = $this->uesweuocqoywoyms($aokagokqyuysuksm);
                goto skysqikkawmaoase;
            case "\x65\144\151\164":
                $iwywmkygwewiamwm = $this->yyykkcyiksewsoqy($aokagokqyuysuksm);
                goto skysqikkawmaoase;
        }
        goto sqsksyaqsweqiyci;
        yuqowmmcwscosmgy:
        $iwywmkygwewiamwm = $this->uesweuocqoywoyms($aokagokqyuysuksm);
        goto iyekyouiiwcsewgy;
        skkqqcysscikmmik:
        if (!is_numeric($mksyucucyswaukig)) {
            goto icyuwesuyoimomqs;
        }
        goto oewsoauskqoqmiqa;
        ekoeysiuqeggaqku:
        return $pkyyagewkiyckmwy;
        goto sqcoigaqqssykoui;
        guwyuigmkeeqssgw:
        skysqikkawmaoase:
        goto cmogamaycywckuim;
        sgaoyyoooykieusg:
        icyuwesuyoimomqs:
        goto yywgsissmueymcmg;
        sqsksyaqsweqiyci:
        ksksqwcyqoqgmgke:
        goto guwyuigmkeeqssgw;
        yywgsissmueymcmg:
        $aokagokqyuysuksm = ManipulateArray::get($mksyucucyswaukig, $this->kumuygiiqswoyasy());
        goto yuqowmmcwscosmgy;
        sqcoigaqqssykoui:
    }
    
    public function aouwuegyyugiwksc($qgoqiacsiccwoawi, $mksyucucyswaukig, $mugogceoccysackm = true) : ?string
    {
        goto uqkmkmmikmaqkgym;
        siuwcesauyyweaky:
        if ($mugogceoccysackm) {
            goto mkmasewiiuocaekm;
        }
        goto wucomycmoigosose;
        omuskqikewygsuuu:
        $meywaqqsugaoeyys = $aaqqkgyougeiueyq->uecyuoauykiqqkey()::symcgieuakksimmu();
        goto kqumggcumkiygaya;
        kmasgsycmswqoeii:
        goto iuageyamssqwqqyw;
        goto ccikqgeseseueseo;
        uwiqeuqyaseimcyk:
        $pkyyagewkiyckmwy = $meywaqqsugaoeyys->mayuaaqmsqeyayyg($icwicymcioeyeyek);
        goto aeieoesqsyiqwkkk;
        uqkmkmmikmaqkgym:
        $aaqqkgyougeiueyq = $this->oyeskqayoscwciem()->uqeoyqiwywwmsiew($qgoqiacsiccwoawi);
        goto yckkkceuiuiaucce;
        yckkkceuiuiaucce:
        $icwicymcioeyeyek = $this->iscemaoqqckmkago($qgoqiacsiccwoawi, $mksyucucyswaukig);
        goto smeocsiuyouseuqo;
        yqmygsgkwmkeyqmm:
        if (!$aaqqkgyougeiueyq instanceof Foreign) {
            goto cwaqmauwsyugsieo;
        }
        goto omuskqikewygsuuu;
        kqumggcumkiygaya:
        if (!$meywaqqsugaoeyys instanceof Model) {
            goto wkmsuekwweweqoys;
        }
        goto siuwcesauyyweaky;
        syiwwokguucmgsyy:
        wkmsuekwweweqoys:
        goto mawqcoscmcqkoskk;
        ccikqgeseseueseo:
        mkmasewiiuocaekm:
        goto uwiqeuqyaseimcyk;
        wmiysuwsmawyogmu:
        return $pkyyagewkiyckmwy;
        goto uoieeoimcawgsacs;
        smeocsiuyouseuqo:
        $pkyyagewkiyckmwy = '';
        goto yqmygsgkwmkeyqmm;
        wucomycmoigosose:
        $pkyyagewkiyckmwy = $meywaqqsugaoeyys->iysseyicgouwysgk($icwicymcioeyeyek);
        goto kmasgsycmswqoeii;
        mawqcoscmcqkoskk:
        cwaqmauwsyugsieo:
        goto wmiysuwsmawyogmu;
        aeieoesqsyiqwkkk:
        iuageyamssqwqqyw:
        goto syiwwokguucmgsyy;
        uoieeoimcawgsacs:
    }
    
    public function iscemaoqqckmkago($iceamweyeeiwiucs, $mksyucucyswaukig = null, $wkkweuacukumqmya = "\x2a", $uoomaookgsyciacm = [])
    {
        goto ysicqksgomomkoek;
        ccegsywqocccgegu:
        return $essikcmqiyqaqoaq;
        goto swqkyoemiswegyci;
        ocgsiomyyckcausy:
        try {
            goto qqyegacwyoqqqqwy;
            iiceuymgyemuaciy:
            gmckgcsamacayoiy:
            goto qsgagomkgqcmscyu;
            omaswaiucwamaywi:
            csimcqggmigoacwk:
            goto ieewmicwgqaigeqi;
            eaisogogsygugsqi:
            $ayegqaqygsqsmews = $this->mgacegaoeamymmya($iceamweyeeiwiucs, $mksyucucyswaukig);
            goto usiqksiiiqgokuaq;
            mgiykamgwsemmiio:
            if (!$ayegqaqygsqsmews) {
                goto yuciwasueswewmqw;
            }
            goto iwkyewqeogaamiou;
            ieewmicwgqaigeqi:
            $ayegqaqygsqsmews = $iceamweyeeiwiucs;
            goto ouokmaemueykkiqq;
            ouokmaemueykkiqq:
            suykumskkmicioig:
            goto mgiykamgwsemmiio;
            uaaiuqickwysiqiy:
            sqkuwuwiceguscku:
            goto iioauiogmamumiym;
            qqyegacwyoqqqqwy:
            if ($iceamweyeeiwiucs instanceof Relation) {
                goto csimcqggmigoacwk;
            }
            goto wasacacaowicmiyw;
            suokacgwamyumagy:
            yuciwasueswewmqw:
            goto gscckcagyggagway;
            iioauiogmamumiym:
            if (!$ayegqaqygsqsmews) {
                goto iscaisuqmaikumko;
            }
            goto gmwcqkgsaesmsuea;
            gmwcqkgsaesmsuea:
            $essikcmqiyqaqoaq = $ayegqaqygsqsmews->get($wkkweuacukumqmya)->sacmkccceuywoqsq();
            goto cgkaoiyoqwmkaqck;
            qiekksmyigmwmiws:
            if (!$meywaqqsugaoeyys instanceof Model) {
                goto gmckgcsamacayoiy;
            }
            goto qmqsgkwueccwgsqa;
            usiqksiiiqgokuaq:
            goto suykumskkmicioig;
            goto omaswaiucwamaywi;
            oksouuguouqowuyq:
            if (!($aaqqkgyougeiueyq instanceof Foreign && ($aaqqkgyougeiueyq->wmomygggskkoqess() || $aaqqkgyougeiueyq->eiyqqesoywqkegwu()))) {
                goto kysaoseimkmckcoc;
            }
            goto okygssymuimommeg;
            iwkyewqeogaamiou:
            if (!$uoomaookgsyciacm) {
                goto sqkuwuwiceguscku;
            }
            goto yqqwweuisgoskcwa;
            yqqwweuisgoskcwa:
            $ayegqaqygsqsmews = $this->kqewyqqqiyiouaou($uoomaookgsyciacm, $ayegqaqygsqsmews);
            goto uaaiuqickwysiqiy;
            cgkaoiyoqwmkaqck:
            iscaisuqmaikumko:
            goto suokacgwamyumagy;
            okygssymuimommeg:
            $meywaqqsugaoeyys = $aaqqkgyougeiueyq->uecyuoauykiqqkey()::symcgieuakksimmu();
            goto qiekksmyigmwmiws;
            qsgagomkgqcmscyu:
            kysaoseimkmckcoc:
            goto eaisogogsygugsqi;
            qmqsgkwueccwgsqa:
            return $meywaqqsugaoeyys->akkkoiiymmamsauc(ManipulateArray::get($mksyucucyswaukig, $iceamweyeeiwiucs), $meywaqqsugaoeyys->kumuygiiqswoyasy());
            goto iiceuymgyemuaciy;
            wasacacaowicmiyw:
            $aaqqkgyougeiueyq = $this->oyeskqayoscwciem()->uqeoyqiwywwmsiew($iceamweyeeiwiucs);
            goto oksouuguouqowuyq;
            gscckcagyggagway:
        } catch (Exception $wgaoewqkwgomoaai) {
        }
        goto ccegsywqocccgegu;
        ysicqksgomomkoek:
        $essikcmqiyqaqoaq = [];
        goto ocgsiomyyckcausy;
        swqkyoemiswegyci:
    }
    
    public function mgacegaoeamymmya($ymaogssqccumcyqa, $mksyucucyswaukig = null) : ?Relation
    {
        goto cuyaakuucgwmcuqq;
        cecamogauimuwoow:
        
        $ayegqaqygsqsmews = $mksyucucyswaukig->morphToMany($egkyssmuqcwaciya, $mgugyyocqwmeeuai);
        goto ygqqeqgiaasoimgs;
        ccqkugckigeckeqa:
        yuqiqaquoygggoqc:
        goto waaammoiumecaiys;
        ugowokkqeoeugkqe:
        goto akkmaiaiamyaikqe;
        goto qmqumgawyyqqamoa;
        sqmgqacueqiiekay:
        goto ceesgeawumeqkcic;
        goto iuoqiecqaoosioey;
        coygueuwyguuciww:
        pmaiksascsegweci:
        goto ckmkeuakisiukage;
        qgmgmkeiemcqkyim:
        if (!$mksyucucyswaukig instanceof Model) {
            goto iysiwmeymsoucaka;
        }
        goto oqoogougwwcqeimq;
        uaiqqcsoksgukasg:
        okeecmwsuoikguuo:
        goto iqyqgqwwaaigmuou;
        cuyaakuucgwmcuqq:
        $ayegqaqygsqsmews = null;
        goto gsgocqicesmaecse;
        ckmkeuakisiukage:
        
        $ayegqaqygsqsmews = $mksyucucyswaukig->hasOne($egkyssmuqcwaciya);
        goto uaiqqcsoksgukasg;
        oskwwcgyuwkiuacu:
        $aokagokqyuysuksm = ManipulateArray::get($mksyucucyswaukig, $this->kumuygiiqswoyasy());
        goto qsecoiqswyiseake;
        ywykuacciwwkwmmy:
        $mgugyyocqwmeeuai = $aaqqkgyougeiueyq->mwikyscisascoeea();
        goto qgcgucmskokqquwk;
        iuoqiecqaoosioey:
        iquykqikookaokgq:
        goto woqsaqwocioumoeu;
        ygqqeqgiaasoimgs:
        aeoiiewygoiwuiii:
        goto gsiagogeoqwqekei;
        mogomwoquuesmcec:
        iysiwmeymsoucaka:
        goto akiuyguwqaukuugs;
        swkukukimeueycaq:
        $mksyucucyswaukig = $this->cyyiiykmaeuqqgok($aokagokqyuysuksm);
        goto ccqkugckigeckeqa;
        goqkegseiummeiak:
        ksyukmeagigokcgi:
        goto wgeskeagymiuoigi;
        waaammoiumecaiys:
        uwswkegomekswkus:
        goto qgmgmkeiemcqkyim;
        yuccckoykmccwyce:
        goto eicuywagooikuusg;
        goto goqkegseiummeiak;
        eguukwmoyaaieuww:
        if ($aaqqkgyougeiueyq->gumeeckcowwoyoci()) {
            goto qiyiyuwmuoamwccs;
        }
        goto kqkeomoaociyuoye;
        oikomikqcwikimkw:
        goto aeoiiewygoiwuiii;
        goto uwmgacqaowuguiow;
        akiuyguwqaukuugs:
        return $ayegqaqygsqsmews;
        goto emiyocoiuwcucuwu;
        wcqyakkqcgmeqaag:
        goto okeecmwsuoikguuo;
        goto coygueuwyguuciww;
        auauyoooouqkickk:
        akkmaiaiamyaikqe:
        goto egcsskmsysqiiikm;
        wgeskeagymiuoigi:
        if ($aaqqkgyougeiueyq->iueigwuckeaswyuu()) {
            goto pmaiksascsegweci;
        }
        goto mcoyaaiggymgcsgq;
        qsecoiqswyiseake:
        if (!$mksyucucyswaukig) {
            goto yuqiqaquoygggoqc;
        }
        goto swkukukimeueycaq;
        mcoyaaiggymgcsgq:
        
        $ayegqaqygsqsmews = $mksyucucyswaukig->belongsTo($egkyssmuqcwaciya);
        goto wcqyakkqcgmeqaag;
        emomkqccysciiqya:
        if (!$aaqqkgyougeiueyq->ygswmewosceowmya()) {
            goto cwoaockwkoukuwae;
        }
        goto ywykuacciwwkwmmy;
        iqyqgqwwaaigmuou:
        eicuywagooikuusg:
        goto sqmgqacueqiiekay;
        gsgocqicesmaecse:
        if ($mksyucucyswaukig instanceof Model) {
            goto uwswkegomekswkus;
        }
        goto oskwwcgyuwkiuacu;
        kqkeomoaociyuoye:
        if ($aaqqkgyougeiueyq->eiyqqesoywqkegwu()) {
            goto iquykqikookaokgq;
        }
        goto kswkouussqmqsssy;
        gsiagogeoqwqekei:
        cwoaockwkoukuwae:
        goto yuccckoykmccwyce;
        ewcyigsymwuuogci:
        
        $ayegqaqygsqsmews = $mksyucucyswaukig->hasMany($egkyssmuqcwaciya);
        goto auauyoooouqkickk;
        woqsaqwocioumoeu:
        
        $ayegqaqygsqsmews = $mksyucucyswaukig->belongsTo($egkyssmuqcwaciya);
        goto ukyoyoqcyywgaywg;
        eqiiqamuyewoowwy:
        if (!$aaqqkgyougeiueyq instanceof Foreign) {
            goto iiikyaquagwawkce;
        }
        goto cwomucmeuqqucyge;
        uwmgacqaowuguiow:
        iwycgkausoseqmwu:
        goto cecamogauimuwoow;
        cwomucmeuqqucyge:
        $egkyssmuqcwaciya = $aaqqkgyougeiueyq->uecyuoauykiqqkey();
        goto eguukwmoyaaieuww;
        egcsskmsysqiiikm:
        iiikyaquagwawkce:
        goto mogomwoquuesmcec;
        ukyoyoqcyywgaywg:
        ceesgeawumeqkcic:
        goto ugowokkqeoeugkqe;
        oqoogougwwcqeimq:
        $aaqqkgyougeiueyq = $this->oyeskqayoscwciem()->uqeoyqiwywwmsiew($ymaogssqccumcyqa);
        goto eqiiqamuyewoowwy;
        kswkouussqmqsssy:
        if ($aaqqkgyougeiueyq->wmomygggskkoqess()) {
            goto ksyukmeagigokcgi;
        }
        goto emomkqccysciiqya;
        ismoiisskiwmmmiu:
        
        $ayegqaqygsqsmews = $mksyucucyswaukig->morphedByMany($egkyssmuqcwaciya, $mgugyyocqwmeeuai);
        goto oikomikqcwikimkw;
        qmqumgawyyqqamoa:
        qiyiyuwmuoamwccs:
        goto ewcyigsymwuuogci;
        qgcgucmskokqquwk:
        if ($aaqqkgyougeiueyq->iueigwuckeaswyuu()) {
            goto iwycgkausoseqmwu;
        }
        goto ismoiisskiwmmmiu;
        emiyocoiuwcucuwu:
    }
    
    public function qiwiemuiqiugqqqg(Model $mksyucucyswaukig, $icwicymcioeyeyek)
    {
        foreach ($icwicymcioeyeyek as $uusmaiomayssaecw => $qqswgiawgeaeoecu) {
            goto ssoooeigmwugyycm;
            rwaeioueucocosgu:
            essokuoguqegyeua:
            goto cuqusekekewuseio;
            yyousguikogqkecs:
            
            $csamwuowsigosqys->hasMany($swmgqkqyqcgemack)->save($mksyucucyswaukig);
            goto syggoyqwycmmcuck;
            mawsaauyquacosus:
            $kooyscwkscsogysg = $egkyssmuqcwaciya::symcgieuakksimmu();
            goto cwkwkgkqasguwscg;
            csueasskicaaoaii:
            $swmgqkqyqcgemack = self::uqggkiomyiceyooa();
            goto yyousguikogqkecs;
            wqcquwuiqkqaoamo:
            if (!$csamwuowsigosqys instanceof Model) {
                goto qquugwwesqswouyc;
            }
            goto csueasskicaaoaii;
            mkauomqacwwmyigy:
            gamuuauwykwgaegc:
            goto cmsgssaekakgcqmg;
            koaeayomowaiywam:
            if (!$aaqqkgyougeiueyq->eiyqqesoywqkegwu()) {
                goto wwigiswokyqkamsu;
            }
            goto ikwamukqumiokwkk;
            cmsgssaekakgcqmg:
            if (!$myqeggyewswyoowe) {
                goto smmgkqeacswimyas;
            }
            goto ckscysysmayieagk;
            oukacgcyoiggqosq:
            $myqeggyewswyoowe = [];
            goto usiiuuommggemcke;
            emsuycioaeoeeeqo:
            if ($aaqqkgyougeiueyq->gumeeckcowwoyoci()) {
                goto iqicwseckoykqowm;
            }
            goto koaeayomowaiywam;
            aeywmsqkisycgqce:
            if (!$egkyssmuqcwaciya) {
                goto aqoyesawuayoeuag;
            }
            goto mawsaauyquacosus;
            aimaqcomigwccomu:
            smmgkqeacswimyas:
            goto osawsyawkikquqya;
            symwoekuwqcmowwo:
            if ($aaqqkgyougeiueyq->wmomygggskkoqess()) {
                goto awwwoikmmaisyisy;
            }
            goto emsuycioaeoeeeqo;
            ckscysysmayieagk:
            
            $mksyucucyswaukig->hasMany($egkyssmuqcwaciya)->saveMany($myqeggyewswyoowe);
            goto aimaqcomigwccomu;
            icasgckmuawkaksg:
            $egkyssmuqcwaciya = $aaqqkgyougeiueyq->uecyuoauykiqqkey();
            goto aeywmsqkisycgqce;
            cgoqqicyaiwasqme:
            yisooseceggsgyqw:
            goto ckagywkumgkaswyy;
            yoeaiskyyqgqiwga:
            if ($aaqqkgyougeiueyq->iueigwuckeaswyuu()) {
                goto aegiwggkecgaiocs;
            }
            goto ioaeiakqkiuqymoq;
            ogwosuisocqykoma:
            cuamsmyiamaicwou:
            goto rwaeioueucocosgu;
            yseacqgykcseamce:
            uceksuykgsckwwsu:
            goto xkgykmoskoqykakc;
            aagewueuesckuqke:
            foreach ($qqswgiawgeaeoecu as $eqgoocgaqwqcimie) {
                goto csmmiwegweusuimi;
                csmmiwegweusuimi:
                if ($aokagokqyuysuksm = ManipulateArray::get($eqgoocgaqwqcimie, $gqkcqoaumsuwkqom, $qqswgiawgeaeoecu)) {
                    goto eemgoyuiauwuomcw;
                }
                goto imsougccawciqsuw;
                uawcmuiummigeqea:
                smeeigiqmommceye:
                goto qmmieiquoegeaqok;
                imsougccawciqsuw:
                $msqyiyqkassmkgce = $kooyscwkscsogysg->ciqgsyoasskoiukm($eqgoocgaqwqcimie);
                goto syaegaiuaioeaocq;
                ckkecwwioeywccwa:
                eemgoyuiauwuomcw:
                goto koceayskwssiisyi;
                syaegaiuaioeaocq:
                goto ikgwcgcgcaaaskig;
                goto ckkecwwioeywccwa;
                iiwcuqeosmwgogus:
                ikgwcgcgcaaaskig:
                goto uqsoseuiwgukywas;
                wgaggmmmgeumiouk:
                $myqeggyewswyoowe[] = $msqyiyqkassmkgce;
                goto cwkouaeieiyiykim;
                uqsoseuiwgukywas:
                if (!$msqyiyqkassmkgce) {
                    goto amcqceoiqgmwisce;
                }
                goto wgaggmmmgeumiouk;
                koceayskwssiisyi:
                $msqyiyqkassmkgce = $kooyscwkscsogysg->cyyiiykmaeuqqgok($aokagokqyuysuksm);
                goto auqmeqswuuioemge;
                cwkouaeieiyiykim:
                amcqceoiqgmwisce:
                goto uawcmuiummigeqea;
                auqmeqswuuioemge:
                $msqyiyqkassmkgce = $this->ckcicmwwiccamyqk($kooyscwkscsogysg, $msqyiyqkassmkgce, $eqgoocgaqwqcimie);
                goto iiwcuqeosmwgogus;
                qmmieiquoegeaqok:
            }
            goto mkauomqacwwmyigy;
            ikwamukqumiokwkk:
            if (!is_numeric($qqswgiawgeaeoecu)) {
                goto ewugkyumwuomukie;
            }
            goto uueyawewomkuiiwc;
            qqowguycmsmuauyu:
            agoikageaeouqaqi:
            goto yseacqgykcseamce;
            makqqsaegsesgquq:
            $gqkcqoaumsuwkqom = $kooyscwkscsogysg->primaryKey;
            goto symwoekuwqcmowwo;
            aesgakksmyecsusi:
            $accumooemgmowewu = $mksyucucyswaukig::uqggkiomyiceyooa();
            goto igewmkyikyaiamsq;
            guosgucaaeueacgu:
            ummsowuaoeyusgoq:
            goto wowakayqsywcaogm;
            ioaeiakqkiuqymoq:
            $miowmmgaiagcuyoo = $kooyscwkscsogysg->cyyiiykmaeuqqgok($qqswgiawgeaeoecu);
            goto cssysqmcgcuwyyuu;
            owwwikwqsyakweeq:
            ewugkyumwuomukie:
            goto awmyoukmqymausgu;
            uueyawewomkuiiwc:
            $csamwuowsigosqys = $kooyscwkscsogysg->cyyiiykmaeuqqgok($qqswgiawgeaeoecu);
            goto wqcquwuiqkqaoamo;
            igewmkyikyaiamsq:
            
            $miowmmgaiagcuyoo->hasOne($accumooemgmowewu)->save($mksyucucyswaukig);
            goto guosgucaaeueacgu;
            uyisqeuweamsqwgg:
            if (!$aaqqkgyougeiueyq instanceof Foreign) {
                goto agoikageaeouqaqi;
            }
            goto icasgckmuawkaksg;
            oswgoyqaacoyqegu:
            awwwoikmmaisyisy:
            goto yoeaiskyyqgqiwga;
            cssysqmcgcuwyyuu:
            if (!$miowmmgaiagcuyoo instanceof Model) {
                goto ummsowuaoeyusgoq;
            }
            goto aesgakksmyecsusi;
            eicuoesagiuykmos:
            goto yisooseceggsgyqw;
            goto eqkaikmaegscweqq;
            ckagywkumgkaswyy:
            goto cuamsmyiamaicwou;
            goto oswgoyqaacoyqegu;
            usiiuuommggemcke:
            if (!is_array($qqswgiawgeaeoecu)) {
                goto kmwwamokwgagomye;
            }
            goto aagewueuesckuqke;
            syggoyqwycmmcuck:
            qquugwwesqswouyc:
            goto owwwikwqsyakweeq;
            cuqusekekewuseio:
            aqoyesawuayoeuag:
            goto qqowguycmsmuauyu;
            eqkaikmaegscweqq:
            iqicwseckoykqowm:
            goto oukacgcyoiggqosq;
            awmyoukmqymausgu:
            wwigiswokyqkamsu:
            goto eicuoesagiuykmos;
            ssoooeigmwugyycm:
            $aaqqkgyougeiueyq = $this->oyeskqayoscwciem()->uqeoyqiwywwmsiew($uusmaiomayssaecw);
            goto uyisqeuweamsqwgg;
            osawsyawkikquqya:
            kmwwamokwgagomye:
            goto cgoqqicyaiwasqme;
            cwkwkgkqasguwscg:
            if (!$kooyscwkscsogysg instanceof Model) {
                goto essokuoguqegyeua;
            }
            goto makqqsaegsesgquq;
            wowakayqsywcaogm:
            aegiwggkecgaiocs:
            goto ogwosuisocqykoma;
            xkgykmoskoqykakc:
        }
        cyikoqssoemgwyyk:
    }
    
    public function gkieuyoqcusoksmg($icwicymcioeyeyek, $mksyucucyswaukig = null) : bool
    {
        goto sumsswekusmugwcc;
        suaouieqqoauuwme:
        aoiaykkukcyyoaio:
        goto kewooggoaouemcaq;
        quoamckmecwqkkus:
        foreach ($icwicymcioeyeyek as $oaukocmsckciqaok => $eqgoocgaqwqcimie) {
            goto iwccwiiumyyccquy;
            ycoomucecckyease:
            $this->kmsyisgakgwscyey(sprintf(__("\45\163\x20\143\x61\156\x6e\x27\164\40\142\x65\40\x65\x6d\160\164\x79\54\40\160\154\x65\141\x73\x65\x20\x66\151\154\x6c\40\151\x74\56", PR__CMN__FOUNDATION), ManipulateHTML::ciuuiyckmsygceis($aaqqkgyougeiueyq->qcgakseyaikigqco())), $oaukocmsckciqaok);
            goto myegqayeyqaigmqi;
            eokgqgsswamgswqu:
            uwsgccckqqookusc:
            goto gcumogmsuuyuwsie;
            kuyeoaemuwcqkoae:
            msegcuqmgweissmw:
            goto cuwasskqkoysieey;
            gqaiqcgwsmyugimu:
            goto aoiaykkukcyyoaio;
            goto akuiskwoukoesuou;
            caiiwysgssyqoouc:
            if (!(!$aaqqkgyougeiueyq->yseywyqacmugimme() && !$eqgoocgaqwqcimie)) {
                goto ckyeeqwsugcoksek;
            }
            goto ycoomucecckyease;
            myegqayeyqaigmqi:
            $sogksuscggsicmac = false;
            goto qqocmsauqkwoscqy;
            igeiewqcwieuawms:
            if (!($myagqecycsaiyqsk && ManipulateArray::get($mksyucucyswaukig, $ceiwsaacewygcsqg) != ManipulateArray::get($myagqecycsaiyqsk, $ceiwsaacewygcsqg))) {
                goto komaoacquqwgysgc;
            }
            goto wuqysikmouuiawwi;
            asoweekcciigkweo:
            goto siwekyoigwegiosa;
            goto kuyeoaemuwcqkoae;
            wuqysikmouuiawwi:
            $this->kmsyisgakgwscyey(sprintf(__("\x25\x73\x20\x69\x73\40\165\x6e\x69\161\x75\x65\40\x61\x6e\x64\x20\145\x6e\x74\x65\x72\145\x64\40\166\141\154\165\145\40\141\x6c\162\145\141\144\171\x20\x65\170\151\x73\x74\x2e", PR__CMN__FOUNDATION), ManipulateHTML::ciuuiyckmsygceis($aaqqkgyougeiueyq->qcgakseyaikigqco())), $oaukocmsckciqaok);
            goto egumckcoaaowkgoy;
            uisaoikyqyseiyas:
            if ($sogksuscggsicmac) {
                goto ucuyaouwikuyyemm;
            }
            goto gqaiqcgwsmyugimu;
            gcumogmsuuyuwsie:
            ksmmosiwmsousgkg:
            goto uyouoeaoqcieeayg;
            iwccwiiumyyccquy:
            $aaqqkgyougeiueyq = $this->oyeskqayoscwciem()->uqeoyqiwywwmsiew($oaukocmsckciqaok);
            goto swmmiykiawycgoes;
            mqigiiusqaieqeaa:
            $ceiwsaacewygcsqg = $this->kumuygiiqswoyasy();
            goto igeiewqcwieuawms;
            wiaugmimkuikykys:
            siwekyoigwegiosa:
            goto uisaoikyqyseiyas;
            swmmiykiawycgoes:
            if (!($aaqqkgyougeiueyq instanceof Field && !$aaqqkgyougeiueyq instanceof Foreign)) {
                goto uwsgccckqqookusc;
            }
            goto zsweawcwmisoogao;
            akuiskwoukoesuou:
            ucuyaouwikuyyemm:
            goto eokgqgsswamgswqu;
            qyeewwmuogssaegc:
            komaoacquqwgysgc:
            goto wiaugmimkuikykys;
            qqocmsauqkwoscqy:
            ckyeeqwsugcoksek:
            goto asoweekcciigkweo;
            cuwasskqkoysieey:
            $myagqecycsaiyqsk = $this->akkkoiiymmamsauc($eqgoocgaqwqcimie, $oaukocmsckciqaok);
            goto mqigiiusqaieqeaa;
            egumckcoaaowkgoy:
            $sogksuscggsicmac = false;
            goto qyeewwmuogssaegc;
            zsweawcwmisoogao:
            if ($aaqqkgyougeiueyq->kweqqkiwiugikyam()) {
                goto msegcuqmgweissmw;
            }
            goto caiiwysgssyqoouc;
            uyouoeaoqcieeayg:
        }
        goto suaouieqqoauuwme;
        sumsswekusmugwcc:
        $sogksuscggsicmac = true;
        goto quoamckmecwqkkus;
        kewooggoaouemcaq:
        return $sogksuscggsicmac;
        goto uwwooikcoamioeaq;
        uwwooikcoamioeaq:
    }
    
    public function ckcicmwwiccamyqk(Model $owgumcsyqsamiemg, Model $mksyucucyswaukig, $icwicymcioeyeyek) : Model
    {
        goto qqcusuaqmyukwyqk;
        qqcusuaqmyukwyqk:
        foreach ($icwicymcioeyeyek as $oaukocmsckciqaok => $eqgoocgaqwqcimie) {
            goto gsewiomcwceysquc;
            ooiaoiygiiamsmum:
            $eqgoocgaqwqcimie = $eqgoocgaqwqcimie === "\157\156";
            goto qkmmgqgcegcuawuu;
            gkekqmkyumkmywky:
            osgmksikyyqqcaag:
            goto muoougyakwgcicuo;
            ggqmaecmwgeqkuge:
            ukuuumkkameeuesk:
            goto ieyimqciuswcokke;
            muoougyakwgcicuo:
            yqysciwesgsiuayi:
            goto ywgqeosekkwswyac;
            gsewiomcwceysquc:
            $aaqqkgyougeiueyq = $owgumcsyqsamiemg->oyeskqayoscwciem()->uqeoyqiwywwmsiew($oaukocmsckciqaok);
            goto ouyqaaywykeqimmi;
            csismgmuaiogeucq:
            muygyqckegkuiwyi:
            goto aqaseyqwkgoyaiyg;
            aqaseyqwkgoyaiyg:
            $mksyucucyswaukig->cmgoqeksagmigwmg($oaukocmsckciqaok, $eqgoocgaqwqcimie);
            goto gkekqmkyumkmywky;
            ieyimqciuswcokke:
            $eqgoocgaqwqcimie = wp_json_encode($eqgoocgaqwqcimie);
            goto csismgmuaiogeucq;
            qkmmgqgcegcuawuu:
            kwwoucisuqcmqmqu:
            goto auouiegmaiasywkw;
            egicsmysugywycqq:
            if ($aaqqkgyougeiueyq instanceof Json && $eqgoocgaqwqcimie) {
                goto ukuuumkkameeuesk;
            }
            goto migwkuscokgmogea;
            ouyqaaywykeqimmi:
            if (!($aaqqkgyougeiueyq instanceof Field && !$aaqqkgyougeiueyq instanceof Foreign)) {
                goto osgmksikyyqqcaag;
            }
            goto egicsmysugywycqq;
            migwkuscokgmogea:
            if (!$aaqqkgyougeiueyq instanceof Boolean) {
                goto kwwoucisuqcmqmqu;
            }
            goto ooiaoiygiiamsmum;
            auouiegmaiasywkw:
            goto muygyqckegkuiwyi;
            goto ggqmaecmwgeqkuge;
            ywgqeosekkwswyac:
        }
        goto souucimemowwaseo;
        souucimemowwaseo:
        qcsceusmgwewumuy:
        goto oqyeyuocsyoeogim;
        oqyeyuocsyoeogim:
        return $mksyucucyswaukig;
        goto egawiicamoykemqq;
        egawiicamoykemqq:
    }
    
    public function osymioeiweugcoms($aokagokqyuysuksm, $ymaogssqccumcyqa, $ggauoeuaesiymgee = null)
    {
        return ManipulateArray::get($this->akkkoiiymmamsauc($aokagokqyuysuksm), $ymaogssqccumcyqa, $ggauoeuaesiymgee);
    }
    
    public function kmsyisgakgwscyey($iswcokucwmiosiaq, $uusmaiomayssaecw = null) : self
    {
        goto akkwoqycamwckeui;
        kquwekemiawwmuqs:
        ksoygkwycsqicooa:
        goto cgykkwqwamaougme;
        akkwoqycamwckeui:
        if ($uusmaiomayssaecw) {
            goto qqwukskiymcymgqc;
        }
        goto goimqkkiyegggysa;
        ssqemoqcimayewqm:
        $this->validationErrors[$uusmaiomayssaecw] = $iswcokucwmiosiaq;
        goto kquwekemiawwmuqs;
        mkayykckiywayuko:
        goto ksoygkwycsqicooa;
        goto wmgyemaskuuowuum;
        cgykkwqwamaougme:
        return $this;
        goto gcmmgmowsmgwkoye;
        wmgyemaskuuowuum:
        qqwukskiymcymgqc:
        goto ssqemoqcimayewqm;
        goimqkkiyegggysa:
        $this->validationErrors[] = $iswcokucwmiosiaq;
        goto mkayykckiywayuko;
        gcmmgmowsmgwkoye:
    }
    
    public function dgugskkmsgccgiii($ueeagokqmgisgauy) : self
    {
        goto aqkoqskkimiuyqug;
        yceksmgauwmiwmsw:
        return $this;
        goto oseqayimqaycaycw;
        aqkoqskkimiuyqug:
        foreach ($ueeagokqmgisgauy as $uusmaiomayssaecw => $iswcokucwmiosiaq) {
            $this->kmsyisgakgwscyey($iswcokucwmiosiaq, $uusmaiomayssaecw);
            sygekyuywqgiawas:
        }
        goto kouecqmcueugwcqw;
        kouecqmcueugwcqw:
        ugcaeymeciausmao:
        goto yceksmgauwmiwmsw;
        oseqayimqaycaycw:
    }
    
    public function akkkoiiymmamsauc(?string $eqgoocgaqwqcimie = null, ?string $aiowsaccomcoikus = null, $wkkweuacukumqmya = "\x2a")
    {
        goto oiemkksaoaiyckgi;
        wqameeueegakoqya:
        $siykeiywomwwuoiw = $this->gqaysymikgeawkqa();
        goto eeyksuucagkaqmsi;
        eeyksuucagkaqmsi:
        $wkawwaegamqisugs = null;
        goto ciuwaqyasauagkeu;
        gakmkuaayakeymaa:
        
        $siykeiywomwwuoiw = $siykeiywomwwuoiw->where($aiowsaccomcoikus, self::EQUAL_SYMBOL, $eqgoocgaqwqcimie);
        goto sucquwgiacwooomw;
        oiemkksaoaiyckgi:
        if ($aiowsaccomcoikus) {
            goto imsmosgqcqgeksws;
        }
        goto wicqcmuwosqwyggg;
        ciuwaqyasauagkeu:
        if (!$siykeiywomwwuoiw) {
            goto omqkeukuycyymmke;
        }
        goto gakmkuaayakeymaa;
        sucquwgiacwooomw:
        $wkawwaegamqisugs = $this->geeumyocaqwwquwk($siykeiywomwwuoiw, $wkkweuacukumqmya);
        goto sgoioieqoekqywik;
        sgoioieqoekqywik:
        omqkeukuycyymmke:
        goto susauskwueokgaku;
        wwuiwkkgqescsyyw:
        imsmosgqcqgeksws:
        goto wqameeueegakoqya;
        wicqcmuwosqwyggg:
        $aiowsaccomcoikus = $this->kumuygiiqswoyasy();
        goto wwuiwkkgqescsyyw;
        susauskwueokgaku:
        return $wkawwaegamqisugs;
        goto usaykyskgyqwquca;
        usaykyskgyqwquca:
    }
    
    public function oqomcmyuuakigusk($ikgwqyuyckaewsow = [], $wkkweuacukumqmya = ["\x2a"])
    {
        return $this->geeumyocaqwwquwk($this->kqewyqqqiyiouaou($ikgwqyuyckaewsow), $wkkweuacukumqmya);
    }
    
    private function geeumyocaqwwquwk($siykeiywomwwuoiw, $wkkweuacukumqmya = ["\x2a"])
    {
        goto mewuwwsmewiimgsi;
        gaqcesscgywweieq:
        return $wkawwaegamqisugs;
        goto swqwssmgwikmieoa;
        iaewsguseweeqcqe:
        if (!$siykeiywomwwuoiw) {
            goto qiamskskowaugckg;
        }
        goto msmcmycooiwwqiik;
        imagiycyokkwucge:
        qiamskskowaugckg:
        goto gaqcesscgywweieq;
        msmcmycooiwwqiik:
        $wkawwaegamqisugs = $this->awkaaqmauiuwwsca($siykeiywomwwuoiw, $wkkweuacukumqmya);
        goto imagiycyokkwucge;
        mewuwwsmewiimgsi:
        $wkawwaegamqisugs = null;
        goto iaewsguseweeqcqe;
        swqwssmgwikmieoa:
    }
    
    public function qumqowkwyaceeqwu($ikgwqyuyckaewsow = []) : bool
    {
        goto qaswkqkwqgqqcyws;
        maqmyigowgsmqaco:
        meuaykaqyqkseycs:
        goto eigowcoqoqkwuoiq;
        qaswkqkwqgqqcyws:
        $cmaccwokqweqweqi = false;
        goto ekimmsiekwwoawym;
        ukicwqcoggwiskgo:
        
        $cmaccwokqweqweqi = $siykeiywomwwuoiw->exists();
        goto maqmyigowgsmqaco;
        eigowcoqoqkwuoiq:
        return $cmaccwokqweqweqi;
        goto iqiuaammwkeiamuo;
        gsimucysiuikweme:
        if (!$siykeiywomwwuoiw) {
            goto meuaykaqyqkseycs;
        }
        goto ukicwqcoggwiskgo;
        ekimmsiekwwoawym:
        $siykeiywomwwuoiw = $this->kqewyqqqiyiouaou($ikgwqyuyckaewsow);
        goto gsimucysiuikweme;
        iqiuaammwkeiamuo:
    }
    
    public function aakiaoueckoiyoew() : ?string
    {
        return null;
    }
    
    public function myyqwyswweswiuwu($aiamqeawckcsuaou, $oysoyeaucuawyaky)
    {
        return false;
    }
    
    public function kosoaouogkeaomwo($aiamqeawckcsuaou, $aokagokqyuysuksm)
    {
    }
    
    public function ymaommgoigkakyes($iwywmkygwewiamwm)
    {
        $meqocwsecsywiiqs = __("\104\x65\x6c\145\164\145", PR__CMN__FOUNDATION);
        return ManipulateHTML::uskieqmcqyecigmy(["\164\x79\160\145" => "\x65\162\162\157\162", "\164\151\x74\x6c\145" => $meqocwsecsywiiqs, "\x63\157\156\164\145\x6e\x74" => __("\101\162\145\40\x79\x6f\x75\x20\x73\165\x72\x65\40\x79\x6f\165\x20\x77\x61\156\x74\40\164\x6f\40\144\145\x6c\145\164\x65\40\x74\150\x69\x73\x20\151\164\x65\x6d\x3f", PR__CMN__FOUNDATION), "\142\165\x74\164\157\x6e\163" => ["\143\141\x6e\143\x65\154", ["\150\x72\145\146" => $iwywmkygwewiamwm, "\x63\154\x61\x73\x73" => "\160\x72\55\157\162\x6d\55\141\x63\164\x69\x6f\x6e\40\x62\x74\156\x20\x62\164\x6e\55\160\162\x69\x6d\x61\162\x79", "\164\151\x74\154\145" => $meqocwsecsywiiqs, "\144\x69\x73\155\151\x73\x73" => true]]]);
    }
    
    public function rkmkouiquumiecqy($iwywmkygwewiamwm) : string
    {
        $meqocwsecsywiiqs = __("\104\x65\154\145\164\145", PR__CMN__FOUNDATION);
        return ManipulateHTML::uuccukgasskgimsq("\141", ["\x68\x72\145\x66" => "\43", "\143\154\x61\x73\163" => "\163\165\x62\155\x69\164\x64\145\x6c\145\164\x65\x20\x70\162\55\x63\157\156\146\151\x72\155\141\x62\154\x65\x2d\x61\143\x74\x69\x6f\156", "\x64\141\164\x61\x2d\143\x6f\x6e\146\151\x67" => $this->ymaommgoigkakyes($iwywmkygwewiamwm)], $meqocwsecsywiiqs);
    }
    
    public function aaeswuecycyquqwk($siykeiywomwwuoiw, $qsyooiqcmkcieyuk)
    {
        return $siykeiywomwwuoiw;
    }
    
    public function eukyqwmmeyakcyoo($mksyucucyswaukig, $yygmoeguaqyumuui = []) : array
    {
        goto ciwcwcqkgkmoguok;
        qgeiemoywoccmwgw:
        $qssskwiqeumgkago = $this->oyeskqayoscwciem()->aeosueemgsygqese();
        goto wameiecycmkcuimk;
        cceesacikyckyiim:
        gyaoqaggggoiaoqs:
        goto uqqawaaiywcggesu;
        uqqawaaiywcggesu:
        return ManipulateArray::yaeiiwwyckwugsem($oammesyieqmwuwyi);
        goto oamaoeaeoyckwmgk;
        ecyauwageoukkaaq:
        imygueoqiqikwcws:
        goto cceesacikyckyiim;
        ksseoiqcgiqsamwy:
        if (!($mksyucucyswaukig && $yygmoeguaqyumuui)) {
            goto gyaoqaggggoiaoqs;
        }
        goto qgeiemoywoccmwgw;
        ciwcwcqkgkmoguok:
        $oammesyieqmwuwyi = [];
        goto ksseoiqcgiqsamwy;
        wameiecycmkcuimk:
        foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw => $pkyyagewkiyckmwy) {
            goto gkmgqmcgouseqwyg;
            pseqauyuqgmccuwe:
            $sqqewmoeaekuyyas = 1000;
            goto smqeaeiimomewqsw;
            ymsscygscwwicumm:
            if (!($pkyyagewkiyckmwy && $eqgoocgaqwqcimie)) {
                goto iwcsismeakueeiya;
            }
            goto oouisuwokmqgwiau;
            aiaayumowqswqqqk:
            $pkyyagewkiyckmwy = $aaqqkgyougeiueyq->qcgakseyaikigqco();
            goto swmeecwwakawqqcw;
            swmeecwwakawqqcw:
            $sqqewmoeaekuyyas = $aaqqkgyougeiueyq->yywskysiycwkwsgw();
            goto awkmmuyuakwiaqae;
            ccgmicuyeoggoecu:
            $sqqewmoeaekuyyas = 0;
            goto ewosekcicaqucsua;
            keygauyiuaycggcw:
            zawceoyikyuwoucg:
            goto memcsokyqmowucuo;
            sgamuuiycksmssoi:
            $eqgoocgaqwqcimie = $this->kamyqikiiuwqiiuw($uusmaiomayssaecw, $eqgoocgaqwqcimie, $mksyucucyswaukig);
            goto ymsscygscwwicumm;
            eocaacmwsqqqauuc:
            if ($aaqqkgyougeiueyq instanceof Field) {
                goto aqwcyyigiukqikui;
            }
            goto maougsuwuoiecwgy;
            smqeaeiimomewqsw:
            goto kmgoiquwmsayywsc;
            goto wkgmgumyswiayyae;
            oouisuwokmqgwiau:
            $oammesyieqmwuwyi[$uusmaiomayssaecw] = [self::LABEL => $pkyyagewkiyckmwy, self::VALUE => $eqgoocgaqwqcimie, self::PRIORITY => $sqqewmoeaekuyyas];
            goto wwugkwcimumgukko;
            gkmgqmcgouseqwyg:
            if (!is_numeric($uusmaiomayssaecw)) {
                goto gcgckeksyymcgays;
            }
            goto emsqksecccqeueoa;
            qogogggqiuuewakw:
            goto eqmcakqmqkqkweww;
            goto tokguaiieequuwwa;
            mugaisykgmqcaggg:
            eqmcakqmqkqkweww:
            goto sgamuuiycksmssoi;
            kyoogyegwukaqoce:
            $aaqqkgyougeiueyq = ManipulateArray::get($qssskwiqeumgkago, $uusmaiomayssaecw);
            goto eocaacmwsqqqauuc;
            maougsuwuoiecwgy:
            $pkyyagewkiyckmwy = ManipulateArray::get([self::CREATED_AT => __("\x43\x72\x65\x61\164\145\144\x20\101\164", PR__CMN__FOUNDATION), self::UPDATED_AT => __("\125\160\x64\x61\164\x65\144\40\x41\x74", PR__CMN__FOUNDATION)], $uusmaiomayssaecw, '');
            goto pseqauyuqgmccuwe;
            emsqksecccqeueoa:
            $uusmaiomayssaecw = ManipulateString::ogimogiceeekegoi($pkyyagewkiyckmwy);
            goto ogmueiimgsogucqa;
            wwugkwcimumgukko:
            iwcsismeakueeiya:
            goto keygauyiuaycggcw;
            awkmmuyuakwiaqae:
            kmgoiquwmsayywsc:
            goto qogogggqiuuewakw;
            ogmueiimgsogucqa:
            $eqgoocgaqwqcimie = ManipulateArray::get($mksyucucyswaukig, $uusmaiomayssaecw);
            goto kyoogyegwukaqoce;
            tokguaiieequuwwa:
            gcgckeksyymcgays:
            goto ccgmicuyeoggoecu;
            ewosekcicaqucsua:
            $eqgoocgaqwqcimie = '';
            goto mugaisykgmqcaggg;
            wkgmgumyswiayyae:
            aqwcyyigiukqikui:
            goto aiaayumowqswqqqk;
            memcsokyqmowucuo:
        }
        goto ecyauwageoukkaaq;
        oamaoeaeoyckwmgk:
    }
    
    public function giiqwciomksuiymm($yygmoeguaqyumuui = []) : array
    {
        return $yygmoeguaqyumuui;
    }
    
    public function mgeouagciaesieae($yygmoeguaqyumuui = []) : array
    {
        return $yygmoeguaqyumuui;
    }
    
    public function ocsysguqyuuygeak($ccowyogiqwikkkie = [], $tsuauommsquiesmk = '') : array
    {
        return $ccowyogiqwikkkie;
    }
    
    public function ooeucgsymeocguuu($qgoqiacsiccwoawi, $eqgoocgaqwqcimie, $saqmwwmqiwmkiwaa = null, $aamkqmkgsaqmcuao = null, $mksyucucyswaukig = null)
    {
        return $this->eciukqcoqmyacwow($eqgoocgaqwqcimie, $saqmwwmqiwmkiwaa, $aamkqmkgsaqmcuao);
    }
    
    public function kamyqikiiuwqiiuw($qgoqiacsiccwoawi, $eqgoocgaqwqcimie, $mksyucucyswaukig = null)
    {
        goto isqemmgcymcqgmyu;
        csiokukquwmccgqc:
        skokkuuieagmuwgm:
        goto sgaiaqoewagooqoo;
        skuykkqcgakewusu:
        $eqgoocgaqwqcimie = $this->wusgwkaycokeckqs($eqgoocgaqwqcimie);
        goto imyoiukqcmewqkkw;
        ugsomcmgekqayoqc:
        wmasiggggymwkeqs:
        goto kecgiacuyaumcewe;
        uksgyweoymomgqos:
        goto csqwmisikmgeaaky;
        goto ugsomcmgekqayoqc;
        ieumcesgiqicqima:
        ayggscyaoccukyso:
        goto ysswaukcymggikui;
        ysswaukcymggikui:
        qewmkgeeuomgomia:
        goto uksgyweoymomgqos;
        wskwmocqgakykmgw:
        if ($aaqqkgyougeiueyq instanceof Enumeration) {
            goto wmasiggggymwkeqs;
        }
        goto sgiescgmgsowcakk;
        oscukosgcqaqwcmi:
        $eqgoocgaqwqcimie = $aiooqyausygaasqm;
        goto myasecwmmmiemgik;
        eacqgkqmwkcsscec:
        if (!is_numeric($eqgoocgaqwqcimie)) {
            goto uyueemusgoakawmc;
        }
        goto eucysoaqoumycmso;
        qyoscouawykeimiu:
        if ($aaqqkgyougeiueyq instanceof DateTime || $aaqqkgyougeiueyq instanceof Timestamp) {
            goto skokkuuieagmuwgm;
        }
        goto wskwmocqgakykmgw;
        cgeuosayqssasuou:
        if (!is_numeric($eqgoocgaqwqcimie)) {
            goto comiusqosmykagiq;
        }
        goto ummgomwmsqygiqcy;
        ggwkueqyesouyaya:
        if ($eqgoocgaqwqcimie) {
            goto iiakoqmowuggmkqw;
        }
        goto gyeqsyqiosmysiio;
        oykuimwkwcmuekci:
        goto qewmkgeeuomgomia;
        goto icausgkyooymuwqq;
        ugoqkakikayagkmm:
        cuqeayuiccuwcyua:
        goto guyskocigecaisas;
        giqssgogumimqkeo:
        csqwmisikmgeaaky:
        goto wgiuiaqoekymkwwo;
        ycekisssayygosaw:
        goto aoyqwwsacwqumucg;
        goto qawqosgwykeguasw;
        kwagmsukmimymmmg:
        uyueemusgoakawmc:
        goto ieumcesgiqicqima;
        aqmauesokgqoyugm:
        cesywumicwqkaeaq:
        goto scigcaogysowccsk;
        wugmawaqkksguaoa:
        $eqgoocgaqwqcimie = $this->aouwuegyyugiwksc($qgoqiacsiccwoawi, $mksyucucyswaukig, !$this->wmwguecgowcscues());
        goto ggwkueqyesouyaya;
        gyeqsyqiosmysiio:
        $eqgoocgaqwqcimie = $aokagokqyuysuksm;
        goto skwuueyuqkueasuu;
        ikgusckaomuoiggs:
        comiusqosmykagiq:
        goto oykuimwkwcmuekci;
        icegsqiumouewcqo:
        return $eqgoocgaqwqcimie;
        goto mgeiyeygqcoismqq;
        oeoeeqeaokougsec:
        uiuekqekiguikuce:
        goto ikgusckaomuoiggs;
        myasecwmmmiemgik:
        aoyqwwsacwqumucg:
        goto kwmkusgsuoqoyses;
        iugooscuiysaeqgs:
        ayekogimgycgmgau:
        goto icegsqiumouewcqo;
        sesqsywwesiycmmq:
        if (!(!is_numeric($eqgoocgaqwqcimie) && ManipulateValidation::wmcwegoisyeeosqu($eqgoocgaqwqcimie))) {
            goto ceegwysaccigqqck;
        }
        goto wwyukkoeeeiiuewk;
        guyskocigecaisas:
        $aokagokqyuysuksm = $eqgoocgaqwqcimie;
        goto wugmawaqkksguaoa;
        eucysoaqoumycmso:
        $eqgoocgaqwqcimie = ManipulateAttachment::qaeeusqkgwagwaqc($eqgoocgaqwqcimie);
        goto kwagmsukmimymmmg;
        qmeskaiqawomuqmk:
        $eqgoocgaqwqcimie = ManipulateHTML::qgsekwygcgawekeq("\x69\155\x67", ["\163\162\x63" => $eqgoocgaqwqcimie, "\x77\x69\144\x74\x68" => "\70\x30", "\150\145\151\x67\x68\x74" => "\70\60"]);
        goto ycekisssayygosaw;
        muuiwammayaceuue:
        return $eqgoocgaqwqcimie;
        goto aqmauesokgqoyugm;
        icausgkyooymuwqq:
        vwyusaemeqkswgee:
        goto gwyguuaqscsukaqg;
        sgiescgmgsowcakk:
        if ($aaqqkgyougeiueyq instanceof File) {
            goto vwyusaemeqkswgee;
        }
        goto cgeuosayqssasuou;
        skwuueyuqkueasuu:
        iiakoqmowuggmkqw:
        goto oeoeeqeaokougsec;
        scigcaogysowccsk:
        $aaqqkgyougeiueyq = $this->oyeskqayoscwciem()->uqeoyqiwywwmsiew($qgoqiacsiccwoawi);
        goto qyoscouawykeimiu;
        kecgiacuyaumcewe:
        $eqgoocgaqwqcimie = ManipulateArray::get($aaqqkgyougeiueyq->gkwkqmwweiawigae(), $eqgoocgaqwqcimie, $eqgoocgaqwqcimie);
        goto giqssgogumimqkeo;
        sgaiaqoewagooqoo:
        $eqgoocgaqwqcimie = $this->ooeucgsymeocguuu($qgoqiacsiccwoawi, $eqgoocgaqwqcimie, null, null, $mksyucucyswaukig);
        goto iugooscuiysaeqgs;
        ummgomwmsqygiqcy:
        if ($aaqqkgyougeiueyq instanceof Foreign && $aaqqkgyougeiueyq->eiyqqesoywqkegwu()) {
            goto cuqeayuiccuwcyua;
        }
        goto skuykkqcgakewusu;
        isqemmgcymcqgmyu:
        if (!($this->kumuygiiqswoyasy() === $qgoqiacsiccwoawi)) {
            goto cesywumicwqkaeaq;
        }
        goto muuiwammayaceuue;
        imyoiukqcmewqkkw:
        goto uiuekqekiguikuce;
        goto ugoqkakikayagkmm;
        wgiuiaqoekymkwwo:
        goto ayekogimgycgmgau;
        goto csiokukquwmccgqc;
        gwyguuaqscsukaqg:
        if (!($this->wkcuasmkgoscaiay() || $this->wmwguecgowcscues())) {
            goto ayggscyaoccukyso;
        }
        goto sesqsywwesiycmmq;
        kwmkusgsuoqoyses:
        ceegwysaccigqqck:
        goto eacqgkqmwkcsscec;
        wwyukkoeeeiiuewk:
        if ($aiooqyausygaasqm = ManipulateAttachment::ecqkouyiioksggkw($eqgoocgaqwqcimie)) {
            goto oukqakowgcgeugam;
        }
        goto qmeskaiqawomuqmk;
        qawqosgwykeguasw:
        oukqakowgcgeugam:
        goto oscukosgcqaqwcmi;
        mgeiyeygqcoismqq:
    }
    
    public function geyuyukmwaoksywa($migiiksoiymissge, $ewgwqamkygiqaawc = '', $wwgucssaecqekuek = []) : string
    {
        goto yseysoymiwmicuoi;
        wuugmygqgsmkgsmc:
        return $nsmgceoqaqogqmuw;
        goto wcuuwegqcysecoom;
        miqekiwaouwgqgui:
        $iwywmkygwewiamwm = ManipulateHTML::qgsekwygcgawekeq("\x61", ManipulateFormat::omaawkkwwyesqwcc($wwgucssaecqekuek, ["\x68\162\145\x66" => $migiiksoiymissge, "\143\154\141\163\x73" => "\x74\145\170\x74\x2d\x64\x65\143\157\162\141\164\151\x6f\156\55\x6e\x6f\156\x65"]), true, $ewgwqamkygiqaawc);
        goto wawwaqicwyyeamqu;
        yseysoymiwmicuoi:
        $nsmgceoqaqogqmuw = '';
        goto kmemegqksaeuqcow;
        kmemegqksaeuqcow:
        if (!($migiiksoiymissge && $ewgwqamkygiqaawc)) {
            goto wkqumiwieauokkcy;
        }
        goto miqekiwaouwgqgui;
        quccsmwoagiquqya:
        wkqumiwieauokkcy:
        goto wuugmygqgsmkgsmc;
        wawwaqicwyyeamqu:
        $nsmgceoqaqogqmuw = ManipulateHTML::ciuuiyckmsygceis($iwywmkygwewiamwm);
        goto quccsmwoagiquqya;
        wcuuwegqcysecoom:
    }
    
    public function ykaiaukuaeswygey($mksyucucyswaukig, $ikgwqyuyckaewsow, $eqgoocgaqwqcimie, $wamcomkuwysqgwgk = "\74\x64\x69\166\76\x25\x73\x3a\40\45\163\x3c\x2f\144\151\x76\x3e") : string
    {
        goto wksaesosugiyoqoe;
        ygmkqoaymoicisso:
        wyioauuuyckygcaq:
        goto mwsuqsikwoimcgiq;
        wksaesosugiyoqoe:
        $ukmeuaouyackgwaa = '';
        goto kkiwuqcmoqmiquqq;
        kkiwuqcmoqmiquqq:
        foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) {
            goto geusysuemiqgegcw;
            siowcuqygwiqumii:
            $aiowsaccomcoikus = ManipulateArray::get($this->oyeskqayoscwciem()->aeosueemgsygqese(), $aiowsaccomcoikus);
            goto yuiwacwscsiukyqe;
            yuiwacwscsiukyqe:
            if (!($aiowsaccomcoikus && $uiymkeeaukcyqqik)) {
                goto iyaaokkcuycqywco;
            }
            goto oooiaawaqeogogky;
            oooiaawaqeogogky:
            $ukmeuaouyackgwaa .= sprintf($wamcomkuwysqgwgk, $aiowsaccomcoikus->qcgakseyaikigqco(), $this->kamyqikiiuwqiiuw($aiowsaccomcoikus->mwikyscisascoeea(), $uiymkeeaukcyqqik, $mksyucucyswaukig));
            goto cmugciymsqakcssq;
            geusysuemiqgegcw:
            $uiymkeeaukcyqqik = ManipulateArray::get($mksyucucyswaukig, $aiowsaccomcoikus);
            goto siowcuqygwiqumii;
            cmugciymsqakcssq:
            iyaaokkcuycqywco:
            goto omgecsuaqiqymwms;
            omgecsuaqiqymwms:
            suweomwcwyiiscee:
            goto qqucyqsowaqsmagw;
            qqucyqsowaqsmagw:
        }
        goto ygmkqoaymoicisso;
        iwyomomasqykuwcw:
        return $eqgoocgaqwqcimie;
        goto jwicyuowwocymagu;
        mwsuqsikwoimcgiq:
        if (!$ukmeuaouyackgwaa) {
            goto myswmcskaagkuaiq;
        }
        goto moiwoyyuauwqywom;
        ekgcsqsycamakgak:
        myswmcskaagkuaiq:
        goto iwyomomasqykuwcw;
        moiwoyyuauwqywom:
        $eqgoocgaqwqcimie = "{$eqgoocgaqwqcimie}\x3c\x68\x72\x3e{$ukmeuaouyackgwaa}";
        goto ekgcsqsycamakgak;
        jwicyuowwocymagu:
    }
    
    public function wkmkqaiwuqouweye($aiowsaccomcoikus, $eqgoocgaqwqcimie, $cackiyicawmkyqqg = self::EQUAL_SYMBOL, $siykeiywomwwuoiw = null) : ?Builder
    {
        try {
            goto egeeugucoaimuyai;
            iweqeyugoiogqcsw:
            $siykeiywomwwuoiw = $this->gqaysymikgeawkqa();
            goto yiswuyuuwakywmiy;
            coswqmcmeyyaemcs:
            if (!$siykeiywomwwuoiw) {
                goto laqgkacikykmcsos;
            }
            goto amcyugmyywgmwyys;
            eqqgiqaceosmskyq:
            laqgkacikykmcsos:
            goto gcikiyucocqiqkic;
            amcyugmyywgmwyys:
            
            $siykeiywomwwuoiw = $siykeiywomwwuoiw->where($aiowsaccomcoikus, $cackiyicawmkyqqg, $eqgoocgaqwqcimie);
            goto eqqgiqaceosmskyq;
            yiswuyuuwakywmiy:
            amwqgwykwqyqsygy:
            goto coswqmcmeyyaemcs;
            egeeugucoaimuyai:
            if ($siykeiywomwwuoiw) {
                goto amwqgwykwqyqsygy;
            }
            goto iweqeyugoiogqcsw;
            gcikiyucocqiqkic:
        } catch (Exception $wgaoewqkwgomoaai) {
            $siykeiywomwwuoiw = null;
        }
        return $siykeiywomwwuoiw;
    }
    
    public function woimamkkeyoyauoa($aiowsaccomcoikus, $eqgoocgaqwqcimie, $cackiyicawmkyqqg = self::EQUAL_SYMBOL, $wkkweuacukumqmya = ["\x2a"], $aiamqeawckcsuaou = self::GET) : array
    {
        goto ykomkgsekoimwoga;
        uwacyygkmmwmqumm:
        $siykeiywomwwuoiw = $this->wkmkqaiwuqouweye($aiowsaccomcoikus, $cackiyicawmkyqqg, $eqgoocgaqwqcimie);
        goto toacieymkgsmouum;
        wgyckicucikswwgc:
        kgaiygkqciegamkk:
        goto kuewoymyameyusgi;
        toacieymkgsmouum:
        if (!$siykeiywomwwuoiw) {
            goto kgaiygkqciegamkk;
        }
        goto uooyycimwyiscwik;
        uooyycimwyiscwik:
        $aqykuigiuwmmcieu = $this->aocqcwaksksgckaw($siykeiywomwwuoiw, $wkkweuacukumqmya, $aiamqeawckcsuaou);
        goto wgyckicucikswwgc;
        ykomkgsekoimwoga:
        $aqykuigiuwmmcieu = [];
        goto uwacyygkmmwmqumm;
        kuewoymyameyusgi:
        return $aqykuigiuwmmcieu;
        goto saqssgocioekcyik;
        saqssgocioekcyik:
    }
    
    public function mkcmqiiwgccguoko($aiowsaccomcoikus, $eqgoocgaqwqcimie, $cackiyicawmkyqqg = self::EQUAL_SYMBOL, $wkkweuacukumqmya = ["\52"]) : array
    {
        return $this->woimamkkeyoyauoa($aiowsaccomcoikus, $eqgoocgaqwqcimie, $cackiyicawmkyqqg, $wkkweuacukumqmya, self::PLUCK);
    }
    
    public function cwgkcyyaymmsomqa($mguygkocuoaoqqkg) : array
    {
        goto cusmikqmacqsyoma;
        qcqecwaeywouwwyw:
        $mguygkocuoaoqqkg = [];
        goto uyiyiugiugqiqgce;
        ciiggekwccqceewc:
        return $mguygkocuoaoqqkg;
        goto kgseuyacuyamciku;
        uyiyiugiugqiqgce:
        goto iaemoucqgyeioome;
        goto aacaaeuuscacmgws;
        aacaaeuuscacmgws:
        cqggosuciisguwka:
        goto imccgasockkumogm;
        imccgasockkumogm:
        foreach ($mguygkocuoaoqqkg as $momcykaoccoymeig => $mksyucucyswaukig) {
            $mguygkocuoaoqqkg[$momcykaoccoymeig] = $this->scqakcemaqsqkema($mksyucucyswaukig);
            aygymyyeaiouckwm:
        }
        goto yawiksokukeuwumm;
        wiisumwwuyqmqggs:
        iaemoucqgyeioome:
        goto ciiggekwccqceewc;
        yawiksokukeuwumm:
        ocqocwcocigwogao:
        goto wiisumwwuyqmqggs;
        cusmikqmacqsyoma:
        if ($mguygkocuoaoqqkg && is_array($mguygkocuoaoqqkg)) {
            goto cqggosuciisguwka;
        }
        goto qcqecwaeywouwwyw;
        kgseuyacuyamciku:
    }
    
    public function scqakcemaqsqkema($mksyucucyswaukig, $yiosiwewiecqmkaa = [])
    {
        goto aockoackcyuqgoky;
        scuysmagomwasugy:
        foreach ($mksyucucyswaukig as $aiowsaccomcoikus => $eqgoocgaqwqcimie) {
            goto auyuqgiwqummogko;
            ouiaceqmgmusysiq:
            oqwssckcieuowiwc:
            goto egcykicymsycioaq;
            egcykicymsycioaq:
            cuiswoyuykyksukc:
            goto scgkuqsgoooesoak;
            qgowycwwyqeusmqk:
            $mksyucucyswaukig = ManipulateArray::set($mksyucucyswaukig, [$aiowsaccomcoikus => $this->kamyqikiiuwqiiuw($aiowsaccomcoikus, $eqgoocgaqwqcimie, $mksyucucyswaukig)]);
            goto ouiaceqmgmusysiq;
            auyuqgiwqummogko:
            if (!(!$yiosiwewiecqmkaa || in_array($aiowsaccomcoikus, $yiosiwewiecqmkaa))) {
                goto oqwssckcieuowiwc;
            }
            goto qgowycwwyqeusmqk;
            scgkuqsgoooesoak:
        }
        goto yamuiaoquqoesiye;
        yamuiaoquqoesiye:
        wewskayogyikqqwe:
        goto keeayqkcscoegmmc;
        aockoackcyuqgoky:
        if (!$mksyucucyswaukig) {
            goto kiwygqkmigumiiuk;
        }
        goto scuysmagomwasugy;
        iescmuyqmwkeagcg:
        return $mksyucucyswaukig;
        goto eyacawwuwcgegekw;
        keeayqkcscoegmmc:
        kiwygqkmigumiiuk:
        goto iescmuyqmwkeagcg;
        eyacawwuwcgegekw:
    }
    
    public function yaswokogyqciggeq($aiowsaccomcoikus, $eqgoocgaqwqcimie, $qgoqiacsiccwoawi = self::ID, $cackiyicawmkyqqg = self::EQUAL_SYMBOL) : array
    {
        return $this->mkcmqiiwgccguoko($aiowsaccomcoikus, $eqgoocgaqwqcimie, $cackiyicawmkyqqg, $qgoqiacsiccwoawi);
    }
    
    public function cwkywyqksyucoyia($ikgwqyuyckaewsow, $wkkweuacukumqmya = ["\52"]) : array
    {
        goto mgomeacemugqgswa;
        mgomeacemugqgswa:
        $aqykuigiuwmmcieu = [];
        goto muewmqsoeqoosicu;
        ieceiycekgcommqi:
        return $aqykuigiuwmmcieu;
        goto umskgiqgaemaokmw;
        ekcsiqgsyyiwyiui:
        if (!$siykeiywomwwuoiw) {
            goto eyecoeksswsicqkq;
        }
        goto uyeiksuwckaowkqm;
        uyeiksuwckaowkqm:
        $aqykuigiuwmmcieu = $this->aocqcwaksksgckaw($siykeiywomwwuoiw, $wkkweuacukumqmya);
        goto qiykkoqakyesmswm;
        muewmqsoeqoosicu:
        $siykeiywomwwuoiw = $this->kqewyqqqiyiouaou($ikgwqyuyckaewsow);
        goto ekcsiqgsyyiwyiui;
        qiykkoqakyesmswm:
        eyecoeksswsicqkq:
        goto ieceiycekgcommqi;
        umskgiqgaemaokmw:
    }
    
    public function kqewyqqqiyiouaou($ikgwqyuyckaewsow, $siykeiywomwwuoiw = null)
    {
        goto aakegewkccyyeuwc;
        wiqmeiaaqqauqeme:
        try {
            goto cuqsyqewuemsysgi;
            meywqwweoiaqwwiu:
            igqwceeuaueagaem:
            goto umseiamyiyksuyim;
            cuqsyqewuemsysgi:
            if (!$siykeiywomwwuoiw) {
                goto yoegkeiammkuouua;
            }
            goto aicoaaeeewwmioou;
            aicoaaeeewwmioou:
            foreach ($ikgwqyuyckaewsow as $qgoqiacsiccwoawi => $ywmkwiwkosakssii) {
                goto mcsucqagsqysgieu;
                cswkeogkecaoyoka:
                $qsycuegoicqcqkmo = ManipulateArray::get($ywmkwiwkosakssii, self::BOOLEAN, self::AND);
                goto oekyuoucqkakcewe;
                mywgmggymygqamce:
                $yummaigqmauwcyou = ManipulateArray::get($ywmkwiwkosakssii, self::CLAUSE, self::WHERE);
                goto cswkeogkecaoyoka;
                ieaswyqkcwyaycse:
                switch ($yummaigqmauwcyou) {
                    case self::CONTAIN:
                        
                        $siykeiywomwwuoiw = $siykeiywomwwuoiw->whereIn($qgoqiacsiccwoawi, $eqgoocgaqwqcimie, $qsycuegoicqcqkmo, $mqogqgswmasasmik);
                        goto wskuiymiemyqssui;
                    case self::JOIN:
                        goto quweggukmkusygwe;
                        mmoyseisgqkyouaq:
                        $aasascamegmwqmqk = $qgoqiacsiccwoawi;
                        goto oyeuoiqgeuioiqie;
                        quweggukmkusygwe:
                        $sqeykgyoooqysmca = ManipulateArray::get($ywmkwiwkosakssii, self::TYPE, "\x69\x6e\x6e\145\x72");
                        goto ysmqqmuesgeyquws;
                        oyeuoiqgeuioiqie:
                        
                        $siykeiywomwwuoiw = $siykeiywomwwuoiw->join($aasascamegmwqmqk, $eqgoocgaqwqcimie[0], $cackiyicawmkyqqg, $eqgoocgaqwqcimie[1], $sqeykgyoooqysmca, $icsywsyukqcciiky);
                        goto qwuwcoeiguyqekuy;
                        ysmqqmuesgeyquws:
                        $icsywsyukqcciiky = ManipulateArray::get($ywmkwiwkosakssii, self::WHERE, false);
                        goto mmoyseisgqkyouaq;
                        qwuwcoeiguyqekuy:
                        goto wskuiymiemyqssui;
                        goto osskmmsaekmgemwc;
                        osskmmsaekmgemwc:
                    case self::WHERE:
                        goto gmmgscuqwgiiqsmc;
                        woqwmsyieymgsqao:
                        ygsoccgkwamsqewm:
                        goto qywoucqwciweuyeg;
                        wwioiasoggswmeyy:
                        eowskcomgqqwcyui:
                        goto aacmqqkkmcyowsko;
                        imwwaqcuqskiyeqc:
                        switch ($qsycuegoicqcqkmo) {
                            case self::AND:
                                
                                $siykeiywomwwuoiw->where($qgoqiacsiccwoawi, $cackiyicawmkyqqg, $eqgoocgaqwqcimie, $qsycuegoicqcqkmo);
                                goto ygsoccgkwamsqewm;
                            case self::OR:
                                
                                $siykeiywomwwuoiw->orWhere($qgoqiacsiccwoawi, $cackiyicawmkyqqg, $eqgoocgaqwqcimie);
                                goto ygsoccgkwamsqewm;
                        }
                        goto owsusyqkaqmcmkwu;
                        gmmgscuqwgiiqsmc:
                        if (is_array($eqgoocgaqwqcimie)) {
                            goto smwcscokyasiosks;
                        }
                        goto imwwaqcuqskiyeqc;
                        gwgssaymsgykwaoe:
                        wococciimesuaeys:
                        goto wwioiasoggswmeyy;
                        kwiwoeckcqgewwsc:
                        smwcscokyasiosks:
                        goto meseoaayykmoeicm;
                        owsusyqkaqmcmkwu:
                        skmyqomuuowkeeqe:
                        goto woqwmsyieymgsqao;
                        iokqqymyimieyyyy:
                        goto wskuiymiemyqssui;
                        goto aoaymmuyuuwqwcuy;
                        qywoucqwciweuyeg:
                        goto momgaqeuucmowiii;
                        goto kwiwoeckcqgewwsc;
                        aacmqqkkmcyowsko:
                        momgaqeuucmowiii:
                        goto iokqqymyimieyyyy;
                        meseoaayykmoeicm:
                        switch ($qsycuegoicqcqkmo) {
                            case self::AND:
                                
                                $siykeiywomwwuoiw->whereIn($qgoqiacsiccwoawi, $eqgoocgaqwqcimie, $qsycuegoicqcqkmo, $mqogqgswmasasmik);
                                goto eowskcomgqqwcyui;
                            case self::OR:
                                
                                $siykeiywomwwuoiw->orWhereIn($qgoqiacsiccwoawi, $eqgoocgaqwqcimie);
                                goto eowskcomgqqwcyui;
                        }
                        goto gwgssaymsgykwaoe;
                        aoaymmuyuuwqwcuy:
                    case self::DATE:
                        $siykeiywomwwuoiw = $this->ewaugyyiauqmiwsu($qgoqiacsiccwoawi, $eqgoocgaqwqcimie, $cackiyicawmkyqqg, $qsycuegoicqcqkmo, $mqogqgswmasasmik, $siykeiywomwwuoiw);
                        goto wskuiymiemyqssui;
                }
                goto yiuwcmkkcemwksaq;
                kqkqessiagyiiuim:
                wyuuoyquywymqoqc:
                goto omyeseoqwqiuwqcw;
                wgegmwgsmsgmceqo:
                wskuiymiemyqssui:
                goto kqkqessiagyiiuim;
                mcsucqagsqysgieu:
                $mqogqgswmasasmik = ManipulateArray::get($ywmkwiwkosakssii, self::NOT, false);
                goto yuuygkmacmmcakma;
                yiuwcmkkcemwksaq:
                muoaaecywcccquoa:
                goto wgegmwgsmsgmceqo;
                oekyuoucqkakcewe:
                $cackiyicawmkyqqg = ManipulateArray::get($ywmkwiwkosakssii, self::OPERATOR, self::EQUAL_SYMBOL);
                goto ieaswyqkcwyaycse;
                yuuygkmacmmcakma:
                $eqgoocgaqwqcimie = ManipulateArray::get($ywmkwiwkosakssii, self::VALUE, $ywmkwiwkosakssii);
                goto mywgmggymygqamce;
                omyeseoqwqiuwqcw:
            }
            goto meywqwweoiaqwwiu;
            umseiamyiyksuyim:
            yoegkeiammkuouua:
            goto ubsguocwequeoicm;
            ubsguocwequeoicm:
        } catch (Exception $wgaoewqkwgomoaai) {
            $siykeiywomwwuoiw = null;
        }
        goto csouyaoieqauoyww;
        aakegewkccyyeuwc:
        if (!(!$siykeiywomwwuoiw instanceof Builder && !$siykeiywomwwuoiw instanceof Relation)) {
            goto ieuoskasoucciwkq;
        }
        goto iewmwscqgiiicygc;
        gikgmkgewswggoou:
        ieuoskasoucciwkq:
        goto wiqmeiaaqqauqeme;
        iewmwscqgiiicygc:
        $siykeiywomwwuoiw = $this->gqaysymikgeawkqa();
        goto gikgmkgewswggoou;
        csouyaoieqauoyww:
        return $siykeiywomwwuoiw;
        goto ewyqasqeksiqauuw;
        ewyqasqeksiqauuw:
    }
    
    public function ieieyoeqmmeysauc($aiowsaccomcoikus, $eqgoocgaqwqcimie, $cackiyicawmkyqqg = self::EQUAL_SYMBOL, $siykeiywomwwuoiw = null) : int
    {
        goto ssocqyqwsyyekiik;
        iiueqisykokweaaw:
        if (!$siykeiywomwwuoiw) {
            goto eyoiasswoyuyuuco;
        }
        goto maquyauskaqkikks;
        wgggaasiaeeucygm:
        eyoiasswoyuyuuco:
        goto wmgokkkswmssqimu;
        ssocqyqwsyyekiik:
        $gaeqamemwmwsyukm = 0;
        goto nomsoewcmsqiikyy;
        nomsoewcmsqiikyy:
        $siykeiywomwwuoiw = $this->wkmkqaiwuqouweye($aiowsaccomcoikus, $cackiyicawmkyqqg, $eqgoocgaqwqcimie, $siykeiywomwwuoiw);
        goto iiueqisykokweaaw;
        maquyauskaqkikks:
        
        $gaeqamemwmwsyukm = $siykeiywomwwuoiw->count();
        goto wgggaasiaeeucygm;
        wmgokkkswmssqimu:
        return $gaeqamemwmwsyukm;
        goto ywueqiukuessuggs;
        ywueqiukuessuggs:
    }
    
    public function ssqiqiiwyusygike($aiowsaccomcoikus, $eqgoocgaqwqcimie, $qgoqiacsiccwoawi, $cackiyicawmkyqqg = self::EQUAL_SYMBOL)
    {
        goto sogccagmgkcaoase;
        oweiysimemyoswom:
        if (!$siykeiywomwwuoiw) {
            goto iwwcoscasyysaqoo;
        }
        goto coakykwqwcigaoeq;
        gekuacoquiucucoa:
        iwwcoscasyysaqoo:
        goto samuycgcmqkmcgea;
        sogccagmgkcaoase:
        $qsmaqqyoggcuyukq = 0;
        goto useouyguueemgkmq;
        coakykwqwcigaoeq:
        
        $qsmaqqyoggcuyukq = $siykeiywomwwuoiw->sum($qgoqiacsiccwoawi);
        goto gekuacoquiucucoa;
        useouyguueemgkmq:
        $siykeiywomwwuoiw = $this->wkmkqaiwuqouweye($aiowsaccomcoikus, $cackiyicawmkyqqg, $eqgoocgaqwqcimie);
        goto oweiysimemyoswom;
        samuycgcmqkmcgea:
        return $qsmaqqyoggcuyukq;
        goto kqacoqsymeyimagg;
        kqacoqsymeyimagg:
    }
    
    public function ewaugyyiauqmiwsu($ymaogssqccumcyqa, $eqgoocgaqwqcimie, $cackiyicawmkyqqg = self::GE_SYMBOL, $qsycuegoicqcqkmo = self::AND, $mqogqgswmasasmik = false, $siykeiywomwwuoiw = null) : ?Builder
    {
        try {
            goto wcksgisuiomywugm;
            geacaysasaiqsewo:
            maiokoamiosssisk:
            goto kigeagsoeqmgaosa;
            wewikewycwowkqui:
            $eqgoocgaqwqcimie = new \DateTime($eqgoocgaqwqcimie);
            goto qqgoygcaggkkisyw;
            wcksgisuiomywugm:
            if ($siykeiywomwwuoiw) {
                goto maiokoamiosssisk;
            }
            goto mwwqyciigykaycis;
            eoeomqmkgaogkome:
            
            $siykeiywomwwuoiw = $siykeiywomwwuoiw->whereBetween($ymaogssqccumcyqa, $eqgoocgaqwqcimie, $qsycuegoicqcqkmo, $mqogqgswmasasmik);
            goto cmcawyswoeumueys;
            imiieooawogoyagw:
            
            $siykeiywomwwuoiw = $siykeiywomwwuoiw->whereDate($ymaogssqccumcyqa, $cackiyicawmkyqqg, $eqgoocgaqwqcimie, $qsycuegoicqcqkmo);
            goto imyqaycayqeucsau;
            qqgoygcaggkkisyw:
            qqqseeocmmummkga:
            goto imiieooawogoyagw;
            yiqskmikgqukkewq:
            wwwyugiayoaucqiu:
            goto eoeomqmkgaogkome;
            imyqaycayqeucsau:
            goto iswgeeweeweswyoy;
            goto yiqskmikgqukkewq;
            iiowkswmewooomes:
            if (!is_numeric($eqgoocgaqwqcimie)) {
                goto qqqseeocmmummkga;
            }
            goto wewikewycwowkqui;
            kigeagsoeqmgaosa:
            if ($cackiyicawmkyqqg == "\142\x65\164\x77\145\x65\x6e" && is_array($eqgoocgaqwqcimie)) {
                goto wwwyugiayoaucqiu;
            }
            goto iiowkswmewooomes;
            mwwqyciigykaycis:
            $siykeiywomwwuoiw = $this->gqaysymikgeawkqa();
            goto geacaysasaiqsewo;
            cmcawyswoeumueys:
            iswgeeweeweswyoy:
            goto ugcquuakimgkmeqc;
            ugcquuakimgkmeqc:
        } catch (Exception $wgaoewqkwgomoaai) {
        }
        return $siykeiywomwwuoiw;
    }
    
    public function eowgwggyqseqeywy($kwkmegesqkqwyska, $cackiyicawmkyqqg = self::GRATER_SYMBOL, $wkkweuacukumqmya = ["\x2a"]) : array
    {
        return $this->iiqauwkoiguyeawu($this->ewaugyyiauqmiwsu(self::CREATED_AT, $kwkmegesqkqwyska, $cackiyicawmkyqqg), $wkkweuacukumqmya);
    }
    
    public function qogaqkcsogcqiaic($mksyucucyswaukig, $aiowsaccomcoikus, $ggauoeuaesiymgee = null)
    {
        goto ugkqimokoeicsyqm;
        mkosooeggqemyqqy:
        if ($aiowsaccomcoikus instanceof Field) {
            goto sumiomammkayeqis;
        }
        goto uyugkucyiqymcuus;
        kyuewcuomwmweguq:
        $ksiyqouuaoymsycg = $this->oyeskqayoscwciem()->uqeoyqiwywwmsiew($aiowsaccomcoikus);
        goto syokeusmqogkicks;
        uyugkucyiqymcuus:
        $eqgoocgaqwqcimie = ManipulateArray::get($mksyucucyswaukig, $aiowsaccomcoikus, $ggauoeuaesiymgee);
        goto kokkacggmoaagiae;
        ugwyeeockousskag:
        ueeuassqywswigaq:
        goto ooqqyyewioyccuww;
        oekmoqcqwyauiaeg:
        if (!$eqgoocgaqwqcimie) {
            goto oqksakqyecmsuscq;
        }
        goto uiqaoucyoiwykywa;
        qiiwgkcyqweecqoa:
        uwkuasmeoueseaou:
        goto ekkkweoucuyuqwik;
        syokeusmqogkicks:
        if (!$ksiyqouuaoymsycg) {
            goto uwkuasmeoueseaou;
        }
        goto oqkqaggagwswaaqi;
        uiqaoucyoiwykywa:
        if (!$aiowsaccomcoikus instanceof Json) {
            goto msaugmwuooqkmwus;
        }
        goto umawcakyaoykccao;
        oqkqaggagwswaaqi:
        $aiowsaccomcoikus = $ksiyqouuaoymsycg;
        goto qiiwgkcyqweecqoa;
        kokkacggmoaagiae:
        goto ueeuassqywswigaq;
        goto iweickamaucqgysq;
        ugkqimokoeicsyqm:
        if ($aiowsaccomcoikus instanceof Field) {
            goto agcugqouiqgiskcq;
        }
        goto kyuewcuomwmweguq;
        aksogeackceaeays:
        oqksakqyecmsuscq:
        goto ugwyeeockousskag;
        aecamacaoskqmccs:
        $eqgoocgaqwqcimie = ManipulateArray::get($mksyucucyswaukig, $aiowsaccomcoikus->mwikyscisascoeea(), $ggauoeuaesiymgee);
        goto oekmoqcqwyauiaeg;
        ooqqyyewioyccuww:
        return $eqgoocgaqwqcimie;
        goto umasasgawwamkisc;
        iweickamaucqgysq:
        sumiomammkayeqis:
        goto aecamacaoskqmccs;
        umawcakyaoykccao:
        $eqgoocgaqwqcimie = json_decode($eqgoocgaqwqcimie);
        goto wwmscmqgasawkkwa;
        wwmscmqgasawkkwa:
        msaugmwuooqkmwus:
        goto aksogeackceaeays;
        ekkkweoucuyuqwik:
        agcugqouiqgiskcq:
        goto mkosooeggqemyqqy;
        umasasgawwamkisc:
    }
    
    private function aocqcwaksksgckaw($siykeiywomwwuoiw, $wkkweuacukumqmya = ["\x2a"], $aiamqeawckcsuaou = self::GET) : array
    {
        goto qqkqiioqwkekqsoq;
        aewqyqksisqayska:
        iqsoeqgwemgyiimg:
        goto ayegqigqcsuoqess;
        qqkqiioqwkekqsoq:
        $uomewyckeuqoqocu = [];
        goto ckugukmoqamgcwci;
        omeukkwiesseygwy:
        if (!$iwqgomgkuumgyswi) {
            goto iqsoeqgwemgyiimg;
        }
        goto gewecumqwgcuwikk;
        ckugukmoqamgcwci:
        $iwqgomgkuumgyswi = $this->ymkikmwesqgscscy($siykeiywomwwuoiw, $wkkweuacukumqmya, $aiamqeawckcsuaou);
        goto omeukkwiesseygwy;
        ayegqigqcsuoqess:
        return $uomewyckeuqoqocu;
        goto scqwioawomamygwa;
        gewecumqwgcuwikk:
        $uomewyckeuqoqocu = $iwqgomgkuumgyswi->sacmkccceuywoqsq();
        goto aewqyqksisqayska;
        scqwioawomamygwa:
    }
    
    public function ymkikmwesqgscscy($siykeiywomwwuoiw, $wkkweuacukumqmya = ["\52"], $aiamqeawckcsuaou = self::GET) : ?Collection
    {
        goto qywgscciuywgmaia;
        wiqmoimycyeesqse:
        $siykeiywomwwuoiw = $this->gqaysymikgeawkqa();
        goto kaewigguiigmcsoe;
        yaiwoisswowiyski:
        if (!in_array($aiamqeawckcsuaou, [self::GET, self::PLUCK])) {
            goto auucmoqsmsouecag;
        }
        goto gecscumwugkogmyq;
        iiwessuyuisaawek:
        return $iwqgomgkuumgyswi;
        goto yqukoacecemgkkay;
        kaewigguiigmcsoe:
        muooqqykkmuismwk:
        goto wmoqoeyuaikokayu;
        qywgscciuywgmaia:
        if ($siykeiywomwwuoiw) {
            goto muooqqykkmuismwk;
        }
        goto wiqmoimycyeesqse;
        gecscumwugkogmyq:
        $iwqgomgkuumgyswi = $siykeiywomwwuoiw->{$aiamqeawckcsuaou}($wkkweuacukumqmya);
        goto euaikwmkiyegwqae;
        euaikwmkiyegwqae:
        auucmoqsmsouecag:
        goto qgiscekgegqwemgs;
        ucwwsgoweeagukyq:
        if (!$siykeiywomwwuoiw) {
            goto euiiaygickweagiw;
        }
        goto yaiwoisswowiyski;
        qgiscekgegqwemgs:
        euiiaygickweagiw:
        goto iiwessuyuisaawek;
        wmoqoeyuaikokayu:
        $iwqgomgkuumgyswi = null;
        goto ucwwsgoweeagukyq;
        yqukoacecemgkkay:
    }
    
    public function kmqmiwcimmagogoy($siykeiywomwwuoiw, $wkkweuacukumqmya = ["\x2a"], $aiamqeawckcsuaou = self::GET)
    {
        goto owsgmougoacgokmi;
        ukecesmaioggmyoc:
        soyqsccuokmyuagk:
        goto wcyawmskokoagwqq;
        owsgmougoacgokmi:
        $qsmaqqyoggcuyukq = 0;
        goto iaqyisoeeygqwcym;
        cymigkmkskowwcei:
        $qsmaqqyoggcuyukq = $iwqgomgkuumgyswi->qsmaqqyoggcuyukq();
        goto ukecesmaioggmyoc;
        iaqyisoeeygqwcym:
        $iwqgomgkuumgyswi = $this->ymkikmwesqgscscy($siykeiywomwwuoiw, $wkkweuacukumqmya, $aiamqeawckcsuaou);
        goto qokakquaeuigqcwy;
        wcyawmskokoagwqq:
        return $qsmaqqyoggcuyukq;
        goto yseoucmemeekwkig;
        qokakquaeuigqcwy:
        if (!$iwqgomgkuumgyswi) {
            goto soyqsccuokmyuagk;
        }
        goto cymigkmkskowwcei;
        yseoucmemeekwkig:
    }
    
    public function iiqauwkoiguyeawu($siykeiywomwwuoiw, $wkkweuacukumqmya = ["\52"]) : array
    {
        return $this->aocqcwaksksgckaw($siykeiywomwwuoiw, $wkkweuacukumqmya);
    }
    
    public function iykmimcgkyyoimoc($siykeiywomwwuoiw, $wkkweuacukumqmya = ["\52"]) : array
    {
        return $this->aocqcwaksksgckaw($siykeiywomwwuoiw, $wkkweuacukumqmya, self::PLUCK);
    }
    
    public function wsymaekkqgymcyms($siykeiywomwwuoiw, $wkkweuacukumqmya = ["\52"]) : ?Collection
    {
        return $this->ymkikmwesqgscscy($siykeiywomwwuoiw, $wkkweuacukumqmya, self::PLUCK);
    }
    
    public function ewkswoqykwsuckok($siykeiywomwwuoiw, $qgoqiacsiccwoawi, $ecysmcqmumqmaagg = self::ASC)
    {
        goto uogakawoeucgocym;
        aokcewiioiiyiqeu:
        return $siykeiywomwwuoiw;
        goto iisykceuumgoicmc;
        cyukykwcccsawesg:
        $siykeiywomwwuoiw = $this->gqaysymikgeawkqa();
        goto soywogweqoqmymqw;
        umeiiiomksmkmoaa:
        igoseisickgqeaog:
        goto aokcewiioiiyiqeu;
        sqwgcyyoaismwkqs:
        
        $siykeiywomwwuoiw = $siykeiywomwwuoiw->orderBy($qgoqiacsiccwoawi, $ecysmcqmumqmaagg);
        goto umeiiiomksmkmoaa;
        uogakawoeucgocym:
        if ($siykeiywomwwuoiw) {
            goto suggiaqykiwgkkey;
        }
        goto cyukykwcccsawesg;
        soywogweqoqmymqw:
        suggiaqykiwgkkey:
        goto gscsssqcacocusua;
        gscsssqcacocusua:
        if (!$siykeiywomwwuoiw) {
            goto igoseisickgqeaog;
        }
        goto sqwgcyyoaismwkqs;
        iisykceuumgoicmc:
    }
    
    public function awkaaqmauiuwwsca($siykeiywomwwuoiw, $wkkweuacukumqmya = ["\x2a"], $qgoqiacsiccwoawi = null, $ecysmcqmumqmaagg = null)
    {
        goto cgmukwicwgikewei;
        omcskkiwcgiysuis:
        
        $mksyucucyswaukig = $siykeiywomwwuoiw->first($wkkweuacukumqmya);
        goto wywuimckaigaukkg;
        iasuykaqammykyuc:
        if (!($qgoqiacsiccwoawi && $ecysmcqmumqmaagg)) {
            goto ayoyuasegggqqosu;
        }
        goto ykmceyuggseogcgm;
        cgmukwicwgikewei:
        if ($siykeiywomwwuoiw) {
            goto womgsyqqiwokqyiw;
        }
        goto iuasemkmccmcauoc;
        wywuimckaigaukkg:
        mkikakaaaqwygquu:
        goto ykeuwugswmeukgii;
        sycysmgqeucmisiw:
        $mksyucucyswaukig = null;
        goto sawkcaueekoqcaoq;
        ykeuwugswmeukgii:
        return $mksyucucyswaukig;
        goto gaucesmmweqmemkg;
        sscqwggcsoumagsw:
        womgsyqqiwokqyiw:
        goto iasuykaqammykyuc;
        oiakiumycyquagqu:
        ayoyuasegggqqosu:
        goto sycysmgqeucmisiw;
        sawkcaueekoqcaoq:
        if (!$siykeiywomwwuoiw) {
            goto mkikakaaaqwygquu;
        }
        goto omcskkiwcgiysuis;
        iuasemkmccmcauoc:
        $siykeiywomwwuoiw = $this->gqaysymikgeawkqa();
        goto sscqwggcsoumagsw;
        ykmceyuggseogcgm:
        $siykeiywomwwuoiw = $this->ewkswoqykwsuckok($siykeiywomwwuoiw, $qgoqiacsiccwoawi, $ecysmcqmumqmaagg);
        goto oiakiumycyquagqu;
        gaucesmmweqmemkg:
    }
    
    public function kasiqqyyaswsgics() : array
    {
        return $this->iiqauwkoiguyeawu($this->gqaysymikgeawkqa());
    }
    
    public function myywwqkyiwawwquy($qgoqiacsiccwoawi) : string
    {
        return "{$this->cokoiaeeomgssqgy()}\x2e{$qgoqiacsiccwoawi}";
    }
    
    public function cokoiaeeomgssqgy() : string
    {
        
        return $this->getTable();
    }
    
    public function uckwcqkkygmuquqq($aasascamegmwqmqk, $sysgmomuyiiawwcm, $gcegymooyemmaysk, $siykeiywomwwuoiw = null, $cackiyicawmkyqqg = self::EQUAL_SYMBOL, $sqeykgyoooqysmca = "\151\x6e\x6e\145\x72", $icsywsyukqcciiky = false) : ?Builder
    {
        goto kecaqcyccioyaoaa;
        giemwgcqeogmauao:
        osgaygqiwagaowsq:
        goto siawaquisuoeysqa;
        qsmmausewiocaesg:
        uuooygauoaumkemu:
        goto caseeeggigkaoswu;
        csuyaisqcmkkyqiw:
        $siykeiywomwwuoiw = $this->gqaysymikgeawkqa();
        goto qsmmausewiocaesg;
        kecaqcyccioyaoaa:
        if ($siykeiywomwwuoiw) {
            goto uuooygauoaumkemu;
        }
        goto csuyaisqcmkkyqiw;
        caseeeggigkaoswu:
        if (!$siykeiywomwwuoiw) {
            goto osgaygqiwagaowsq;
        }
        goto cwuqamaiywoeieyw;
        siawaquisuoeysqa:
        return $siykeiywomwwuoiw;
        goto mgqqigauyucewouk;
        cwuqamaiywoeieyw:
        
        $siykeiywomwwuoiw = $siykeiywomwwuoiw->join($aasascamegmwqmqk, $sysgmomuyiiawwcm, $cackiyicawmkyqqg, $gcegymooyemmaysk, $sqeykgyoooqysmca, $icsywsyukqcciiky);
        goto giemwgcqeogmauao;
        mgqqigauyucewouk:
    }
    
    public function cyyiiykmaeuqqgok($gqgemcmoicmgaqie)
    {
        
        return $this::find($gqgemcmoicmgaqie);
    }
    
    public function ciqgsyoasskoiukm($icwicymcioeyeyek)
    {
        
        return $this::create($icwicymcioeyeyek);
    }
    
    public function ymuggqmcauqgigao($gqgemcmoicmgaqie)
    {
        
        return $this::where($gqgemcmoicmgaqie);
    }
}
