<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b3993be3fb             |
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
    const ORM_FILTER_BY = "\x6f\x72\155\x5f\146\x69\x6c\164\x65\x72\x5f\142\x79";
    const ORM_FILTER_VALUE = "\x6f\162\155\x5f\146\151\154\164\x65\x72\x5f\166\x61\154\x75\145";
    use SingletonTrait, TranslateTrait, ComponentTrait, ActionTrait, FieldTrait, HookTrait, AjaxTrait, LogTrait;
    
    protected ?int $id = 0;
    
    public $timestamps = true;
    
    protected ?array $views = [];
    
    protected ?array $fields = [];
    
    protected bool $canDelete = true;
    
    protected ?Register $register = null;
    
    protected ?string $labelKey = "\164\x69\164\154\x65";
    
    protected ?array $validationErrors = [];
    
    public function __construct($aokagokqyuysuksm = null, ?array $siquossayskcwkea = [])
    {
        goto yamoiggaeugmgkku;
        mwskgsimqagmkcgq:
        $suckquwcuiuyiogc = ManipulateSetting::cmaecekuqkwmemms("\x55\120\104\101\124\105\x5f\117\122\x4d\x5f\x44\x41\x54\x41\102\x41\123\105", 0);
        goto mkuigmcgkawyawee;
        yuoyackaoigyyyso:
        cgasgmiiqegqesic:
        goto kcqieuukskyiywss;
        ccqgkeesikyegcik:
        $aiqugsyouyikgawm->yuaecocyyyqqgsyw($this->oyeskqayoscwciem())->uwyqgmcuomgeccgy($mgcmmwqwguicsews);
        goto aakwscykmyyykoms;
        uqagqomggiacosqm:
        $this->ewaqwooqoqmcoomi();
        goto mwskgsimqagmkcgq;
        oyywywoqaqcykucs:
        muwyuiikuywigwso:
        goto iqeqqwcmaiqakawc;
        cwcmwogseemgqgqq:
        akoiqkoqmmmcieug:
        goto yuoyackaoigyyyso;
        kwaqakoogeiacmwi:
        if (!$aiqugsyouyikgawm instanceof Updater) {
            goto gikaiicgqyueeoco;
        }
        goto ccqgkeesikyegcik;
        aakwscykmyyykoms:
        gikaiicgqyueeoco:
        goto iiuawywwoaeyauge;
        eqekaoaioiykuaiw:
        $ymqmyyeuycgmigyo = $this->miwqiiqeegeqcwis();
        goto qoiuwyogucoeaoew;
        iiuawywwoaeyauge:
        akcakssqcqcouwew:
        goto wcoqiwuusoeqiqwi;
        qoiuwyogucoeaoew:
        if ($ymqmyyeuycgmigyo) {
            goto muwyuiikuywigwso;
        }
        goto qkkqiagwgaoyauki;
        kcqieuukskyiywss:
        parent::__construct($siquossayskcwkea);
        goto wukuisoeoeomgegu;
        gioqkcywauuckmua:
        $this->table = $mgcmmwqwguicsews->cokoiaeeomgssqgy($ymqmyyeuycgmigyo);
        goto miaiggsoiaekmqwy;
        ouqwmaaskykywyqo:
        $mgcmmwqwguicsews->cymcyywycwkawmsi();
        goto agqmoymkiswqswqo;
        agqmoymkiswqswqo:
        $aiqugsyouyikgawm = Updater::ocmycskcuiawkecq($ymqmyyeuycgmigyo);
        goto kwaqakoogeiacmwi;
        wcoqiwuusoeqiqwi:
        if (is_numeric($aokagokqyuysuksm)) {
            goto akoiqkoqmmmcieug;
        }
        goto oqwyemgwoossauyk;
        iqeqqwcmaiqakawc:
        
        $mgcmmwqwguicsews = $this->getConnection();
        goto gioqkcywauuckmua;
        suoymucmyegewkmu:
        if (self::quiqwmkiyigesygc()) {
            goto cgasgmiiqegqesic;
        }
        goto uqagqomggiacosqm;
        mkuigmcgkawyawee:
        if (!(!ManipulateAjax::mcgoysmkqsqooceq() && ($suckquwcuiuyiogc || !$this->gqaysymikgeawkqa()))) {
            goto akcakssqcqcouwew;
        }
        goto ouqwmaaskykywyqo;
        oqwyemgwoossauyk:
        $this->gyqeoeemeemicgqi();
        goto cwcmwogseemgqgqq;
        qkkqiagwgaoyauki:
        wp_die("\156\141\155\x65\40\151\x73\x20\x6e\157\164\40\x64\x65\x66\151\x6e\145\40\x66\157\x72\x20\x6d\157\x64\x65\x6c\x3a\x20" . self::uqggkiomyiceyooa());
        goto oyywywoqaqcykucs;
        yamoiggaeugmgkku:
        $this->ckgmycmaukqgkosk();
        goto eqekaoaioiykuaiw;
        miaiggsoiaekmqwy:
        static::$resolver = new Resolver();
        goto suoymucmyegewkmu;
        wukuisoeoeomgegu:
    }
    public function wigskegsqequoeks()
    {
        $ymqmyyeuycgmigyo = $this->miwqiiqeegeqcwis();
        $this->qcsmikeggeemccuu("\x69\x6e\x69\164", [$this, "\x63\147\141\x6d\165\x77\151\161\x73\147\167\163\151\153\153\x6d"])->koaegcswmcqsiykq($this->ygyygikyocoymgaw("{$ymqmyyeuycgmigyo}\137\x67\x65\x74\x5f\x6c\x69\x73\164"), [$this, "\143\x6b\x67\171\x65\147\153\165\163\x6d\x75\171\155\x69\x6d\157"])->qcsmikeggeemccuu($this->ygyygikyocoymgaw("{$ymqmyyeuycgmigyo}\x5f\144\x6f\137\142\165\154\x6b\137\141\143\x74\151\x6f\156"), [$this, "\x6d\171\x79\x71\x77\171\163\x77\167\145\163\167\151\165\167\x75"], 10, 2)->qcsmikeggeemccuu($this->ygyygikyocoymgaw("{$ymqmyyeuycgmigyo}\137\x64\157\x5f\163\x69\x6e\x67\154\145\x5f\x61\143\164\x69\157\x6e"), [$this, "\153\x6f\x73\157\141\157\165\x6f\147\x6b\145\x61\x6f\x6d\x77\157"], 10, 2);
    }
    public function kgquecmsgcouyaya()
    {
        $ymqmyyeuycgmigyo = $this->miwqiiqeegeqcwis();
        $this->cecaguuoecmccuse($this->ygyygikyocoymgaw("{$ymqmyyeuycgmigyo}\137\x6d\141\156\141\x67\145\x5f\166\151\145\x77\x73"), [$this, "\x71\x65\157\167\x63\x75\143\x75\157\141\x71\171\161\167\165\167"])->cecaguuoecmccuse($this->ygyygikyocoymgaw("{$ymqmyyeuycgmigyo}\x5f\155\141\156\x61\147\145\x5f\143\x6f\154\x75\x6d\x6e\x73"), [$this, "\153\147\x6f\x67\x6f\143\x63\x61\x69\155\165\x79\167\x73\157\171"])->cecaguuoecmccuse($this->ygyygikyocoymgaw("{$ymqmyyeuycgmigyo}\137\155\141\x6e\x61\x67\x65\137\x73\x6f\x72\x74\141\142\154\x65\x5f\x63\x6f\x6c\x75\x6d\156\x73"), [$this, "\x78\x65\153\143\x77\145\x63\147\x75\x79\153\155\155\x67\147\157"])->cecaguuoecmccuse($this->ygyygikyocoymgaw("{$ymqmyyeuycgmigyo}\137\162\x6f\x77\137\x61\143\x74\151\157\x6e\163"), [$this, "\x6d\143\x61\x67\x67\x6d\x75\x79\x61\155\x67\x73\x6f\155\x61\141"], 10, 4)->cecaguuoecmccuse($this->ygyygikyocoymgaw("{$ymqmyyeuycgmigyo}\137\x62\165\154\153\137\141\143\164\x69\157\x6e\163"), [$this, "\x6d\x73\171\171\145\x73\x77\145\157\x6f\167\143\165\165\157\165"], 10, 2)->cecaguuoecmccuse($this->ygyygikyocoymgaw("\157\162\x6d\x5f\x76\x69\x65\x77\137\163\x68\157\x77\x5f{$ymqmyyeuycgmigyo}\137\164\x61\142\x73"), [$this, "\165\x75\x79\155\153\x69\x79\x67\151\x75\x61\x69\x79\x65\x6d\x61"], 10, 2)->cecaguuoecmccuse($this->ygyygikyocoymgaw("{$ymqmyyeuycgmigyo}\137\155\141\156\x61\x67\x65\x5f\143\165\x73\x74\157\x6d\x5f\x63\157\x6c\x75\155\x6e"), [$this, "\161\145\x77\155\x6b\165\x77\171\155\161\x6b\153\x63\x6d\x71\x6d"], 10, 5)->cecaguuoecmccuse($this->ygyygikyocoymgaw("{$ymqmyyeuycgmigyo}\x5f\155\x61\156\141\147\x65\x5f\x65\x64\x69\x74\x5f\146\x69\145\x6c\144\137\x73\150\157\167"), [$this, "\x66\141\x63\x71\x77\161\x6d\x67\x63\157\x67\x77\x73\x6f\153\167"], 10, 4)->cecaguuoecmccuse($this->ygyygikyocoymgaw("{$ymqmyyeuycgmigyo}\x5f\x6d\141\156\x61\x67\x65\x5f\x65\144\x69\x74\137\x66\x69\145\x6c\144\137\x76\141\154\165\145"), [$this, "\x6f\145\x71\163\151\145\x6d\141\x77\157\x67\x77\x77\171\155\157"], 10, 4);
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
        eygqeoiskweuiuqi:
        $vkkeimekwwkyiyyc = null;
        goto uykwmucgoywoesui;
        oskwkeaemiqcaqkc:
        $vkkeimekwwkyiyyc = $aiowsaccomcoikus;
        goto kiqmcymowosckmii;
        iacwyogogoccmwsg:
        return $vkkeimekwwkyiyyc;
        goto wqmwcuggcisqieao;
        iaygaasesyymwgss:
        quewwumogiocouii:
        goto iwosouqsesoqcska;
        iwosouqsesoqcska:
        geugsymgsiuuqccg:
        goto iacwyogogoccmwsg;
        awgaewwsskasueke:
        $vkkeimekwwkyiyyc = $aiowsaccomcoikus;
        goto cgmcwkmmcmmkiooc;
        ioacywuoyuskqmwy:
        if (!$vkkeimekwwkyiyyc) {
            goto geugsymgsiuuqccg;
        }
        goto bgoygegmogcmeaou;
        mgwgiesscqoaqcau:
        $vkkeimekwwkyiyyc = $this->timestamps;
        goto ioacywuoyuskqmwy;
        iisieuaeyiqwckou:
        gsimeiqkoyqkuecq:
        goto oskwkeaemiqcaqkc;
        kiqmcymowosckmii:
        gqywcowiigceimaw:
        goto iaygaasesyymwgss;
        uykwmucgoywoesui:
        goto gqywcowiigceimaw;
        goto iisieuaeyiqwckou;
        bgoygegmogcmeaou:
        if (is_array($vkkeimekwwkyiyyc)) {
            goto eyuoecmogqwkmomi;
        }
        goto awgaewwsskasueke;
        wwccoougkywoaoui:
        if (in_array($aiowsaccomcoikus, $vkkeimekwwkyiyyc)) {
            goto gsimeiqkoyqkuecq;
        }
        goto eygqeoiskweuiuqi;
        cgmcwkmmcmmkiooc:
        goto quewwumogiocouii;
        goto iamooqskosymqsmw;
        iamooqskosymqsmw:
        eyuoecmogqwkmomi:
        goto wwccoougkywoaoui;
        wqmwcuggcisqieao:
    }
    
    public function mwikyscisascoeea() : ?int
    {
        return $this->id;
    }
    public function ckgyegkusmuymimo()
    {
        goto yyyyawaqcowsgqcs;
        umccwcqwkoiaakmu:
        foreach ($oammesyieqmwuwyi as $igqsaukqcqscimok) {
            goto swkeiggkawwgewuw;
            eykiuqsamowqykam:
            ccyiggckemwgooco:
            goto ywqouwqomiqwoquu;
            wmcucyuieqgqisis:
            mssaawaiaimogowg:
            goto qwsmiaegmcwuskwi;
            swkeiggkawwgewuw:
            if (!$igqsaukqcqscimok) {
                goto umamqqwcoewcigew;
            }
            goto gaiaucesmcqgqwac;
            gaiaucesmcqgqwac:
            $ceiwsaacewygcsqg = $this->kumuygiiqswoyasy();
            goto kuimgwmkcgcoecko;
            aacaoywsaqscgyua:
            $sogksuscggsicmac = ["\x49\104" => $aokagokqyuysuksm, self::TEXT => $pkyyagewkiyckmwy, self::VALUE => $aokagokqyuysuksm];
            goto miigqygoawqmkkqm;
            yywwaaiicukuwcao:
            $sogksuscggsicmac["\155\141\x72\x6b\165\x70"] = $this->iuygowkemiiwqmiw($icwicymcioeyeyek["\164\x65\x6d\x70\154\x61\164\145\137\x74\171\x70\145"], ["\x49\x44" => $aokagokqyuysuksm, self::TITLE => $pkyyagewkiyckmwy, "\x6f\142\152\145\x63\164\x5f\164\x79\x70\145" => $this->oyeskqayoscwciem()->giiayuqckuiecosm()], ["\x63\x6c\x61\x73\163" => self::class]);
            goto eykiuqsamowqykam;
            qcwkymcgqacaaywc:
            umamqqwcoewcigew:
            goto wmcucyuieqgqisis;
            oaskqsoyesmmeaew:
            $pkyyagewkiyckmwy = $this->uikgwcuascgeissw($igqsaukqcqscimok);
            goto aacaoywsaqscgyua;
            ywqouwqomiqwoquu:
            $qeiakyocuggicwsy[$aokagokqyuysuksm] = $sogksuscggsicmac;
            goto qcwkymcgqacaaywc;
            kuimgwmkcgcoecko:
            $aokagokqyuysuksm = $igqsaukqcqscimok->{$ceiwsaacewygcsqg};
            goto oaskqsoyesmmeaew;
            miigqygoawqmkkqm:
            if (!$icwicymcioeyeyek["\x6d\141\162\153\165\x70"]) {
                goto ccyiggckemwgooco;
            }
            goto yywwaaiicukuwcao;
            qwsmiaegmcwuskwi:
        }
        goto ekgkiioywougquka;
        cquyuwsisgqscemm:
        $qwcmueausqgiwigy = $icwicymcioeyeyek[self::SEARCH];
        goto imykswegcuekqwio;
        yisoawmmammassqk:
        issgmmkcgesyeoas:
        goto gcsosokicycukoyc;
        yyyyawaqcowsgqcs:
        $icwicymcioeyeyek = ManipulateFormat::omaawkkwwyesqwcc(ManipulateServer::ayueggmoqeeukqmq(), ["\151\x64" => false, "\160\141\x67\x65" => 1, "\141\x72\x67\x73" => [], "\151\164\145\155\x73" => [], "\163\x65\141\x72\x63\150" => null, "\x6d\141\162\153\x75\x70" => false, "\164\x65\155\x70\154\141\164\x65\137\x74\171\x70\x65" => "\x61\152\x61\170\137\162\145\x73\165\154\x74"]);
        goto usmagcaocwiugqum;
        ykuqeyogsasokqis:
        qsyqcokomswykyso:
        goto mqaamqyoywyekiko;
        imykswegcuekqwio:
        if (!$qwcmueausqgiwigy) {
            goto qsyqcokomswykyso;
        }
        goto eokikuciuqkyauum;
        mqaamqyoywyekiko:
        
        $gmwiogsuisuoiwqu = $this->getPaginateItems($siykeiywomwwuoiw, [self::PAGE => $icwicymcioeyeyek[self::PAGE]]);
        goto smkakiyekkqoggao;
        usmagcaocwiugqum:
        $oammesyieqmwuwyi = [];
        goto sikmqkecsiyciaei;
        sikmqkecsiyciaei:
        $qeiakyocuggicwsy = [];
        goto wmycwscioqackeig;
        wammkmaqucqagqww:
        if (!$siykeiywomwwuoiw) {
            goto yueosioyegouuwqo;
        }
        goto iuooqassskiyeemo;
        ekgkiioywougquka:
        giuoqsumkimmuaya:
        goto wyyowcsciaqkuiuq;
        seqammocqkyswaim:
        yeiicwscguyokwyu:
        goto coskmuqsawiaeyqg;
        smkakiyekkqoggao:
        $oammesyieqmwuwyi = $gmwiogsuisuoiwqu[self::ITEMS];
        goto zggweikegkcgkmma;
        wmycwscioqackeig:
        $siykeiywomwwuoiw = $this->gqaysymikgeawkqa();
        goto wammkmaqucqagqww;
        iuooqassskiyeemo:
        if ($aokagokqyuysuksm = $icwicymcioeyeyek[self::ID]) {
            goto issgmmkcgesyeoas;
        }
        goto cquyuwsisgqscemm;
        zggweikegkcgkmma:
        goto yeiicwscguyokwyu;
        goto yisoawmmammassqk;
        coskmuqsawiaeyqg:
        yueosioyegouuwqo:
        goto umccwcqwkoiaakmu;
        wyyowcsciaqkuiuq:
        $this->uaggqsoeugksgooc(true, $qeiakyocuggicwsy);
        goto imquwacukaswoyka;
        gcsosokicycukoyc:
        
        $oammesyieqmwuwyi[] = $siykeiywomwwuoiw->find($aokagokqyuysuksm);
        goto seqammocqkyswaim;
        eokikuciuqkyauum:
        $siykeiywomwwuoiw = $this->kqewyqqqiyiouaou([$this->ukqioecasimmeygm() => [self::OPERATOR => self::LIKE, self::VALUE => "\45{$qwcmueausqgiwigy}\x25"]], $siykeiywomwwuoiw);
        goto ykuqeyogsasokqis;
        imquwacukaswoyka:
    }
    
    public function aeggeuqycwawueqy(Builder $siykeiywomwwuoiw, array $ywmkwiwkosakssii = []) : array
    {
        try {
            goto gsggsmmwcmkgyyss;
            yweucowesgsoewyc:
            
            $ymiyawysimukkoso = $siykeiywomwwuoiw->paginate($ywmkwiwkosakssii[self::PER_PAGE] ?: 10, $ywmkwiwkosakssii[self::COLUMNS] ?: ["\x2a"], $ywmkwiwkosakssii["\160\x61\147\x65\x5f\156\x61\x6d\x65"] ?: self::PAGE, $ywmkwiwkosakssii[self::PAGE] ?: 1);
            goto ikygockuuyimmmwk;
            yicaqocukqoauqgc:
            if (!$ywmkwiwkosakssii["\x66\151\x6c\x74\x65\162\137\x76\141\154\165\145"]) {
                goto qwgkwokcyocqiyee;
            }
            goto kmcygqkmwcgwamkw;
            cycasoiysmksuwqk:
            $oammesyieqmwuwyi = ManipulateArray::get($ywmkwiwkosakssii, self::DEFAULT);
            goto muimagegskoisckc;
            gsggsmmwcmkgyyss:
            $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\160\x61\x67\145\x5f\x6e\141\155\x65" => self::PAGE, self::PAGE => 1, self::DEFAULT => [], self::COLUMNS => ["\52"], "\x66\x69\x6c\164\x65\x72\137\166\x61\154\165\x65" => true, self::PER_PAGE => ManipulateSetting::omkaowmygoqwsywq()]);
            goto yweucowesgsoewyc;
            uieuouugckwokske:
            
            $weyoqgcesqgeusiu = $ymiyawysimukkoso->perPage();
            goto seaiwkkgyyegiyug;
            mmesoisgqucowwms:
            
            $qcugmkuyweqqyggk = $ymiyawysimukkoso->lastPage();
            goto uieuouugckwokske;
            kmcygqkmwcgwamkw:
            $oammesyieqmwuwyi = $this->cwgkcyyaymmsomqa($oammesyieqmwuwyi);
            goto gysmigyakgaakeoy;
            ikygockuuyimmmwk:
            
            $oammesyieqmwuwyi = $ymiyawysimukkoso->items();
            goto uwmcugkwqwcuqqsq;
            sueeqeioeiwkscao:
            
            $uuwmqqqiwksuaise = $ymiyawysimukkoso->total();
            goto mmesoisgqucowwms;
            gysmigyakgaakeoy:
            qwgkwokcyocqiyee:
            goto sueeqeioeiwkscao;
            muimagegskoisckc:
            smksoismyouykeoa:
            goto yicaqocukqoauqgc;
            uwmcugkwqwcuqqsq:
            if ($oammesyieqmwuwyi) {
                goto smksoismyouykeoa;
            }
            goto cycasoiysmksuwqk;
            seaiwkkgyyegiyug:
        } catch (Exception $wgaoewqkwgomoaai) {
            goto maeccckgcsaaumkw;
            maeccckgcsaaumkw:
            $oammesyieqmwuwyi = [];
            goto gcoeaokkagaaeuse;
            kcqueaewmayywqeq:
            $weyoqgcesqgeusiu = 0;
            goto uagsgicwwcakecwq;
            gcoeaokkagaaeuse:
            $uuwmqqqiwksuaise = 0;
            goto kcqueaewmayywqeq;
            uagsgicwwcakecwq:
            $qcugmkuyweqqyggk = 0;
            goto qocgmocqauaaekii;
            qocgmocqauaaekii:
        }
        return $this->oosqweumiyeayasy($oammesyieqmwuwyi, $uuwmqqqiwksuaise, $qcugmkuyweqqyggk, $weyoqgcesqgeusiu);
    }
    
    public function oosqweumiyeayasy($oammesyieqmwuwyi = [], $uuwmqqqiwksuaise = 1, $ocqawgquwsqioses = 1, $weyoqgcesqgeusiu = 10) : array
    {
        return ["\160\141\147\151\156\x61\164\x69\157\x6e" => ["\x74\x6f\164\x61\154" => $uuwmqqqiwksuaise, "\160\141\x67\145\163" => $ocqawgquwsqioses, self::PER_PAGE => $weyoqgcesqgeusiu], self::ITEMS => $oammesyieqmwuwyi];
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
        uccuykggugcmiyam:
        uaiiuywoakccusge:
        goto saycoceqywiekqsi;
        esuuweysgwuwcuue:
        if (!is_array($vkkeimekwwkyiyyc)) {
            goto uekueeyqaackuwao;
        }
        goto ykuycowuguumseuu;
        ykuycowuguumseuu:
        foreach ($vkkeimekwwkyiyyc as $yiuogaeewyockeak) {
            goto aemoyqueimayqcaw;
            oeeasouoaaoaaemm:
            $oyuikeusicgqgwak[] = $aaqqkgyougeiueyq;
            goto icmsyimgycuocisu;
            aemoyqueimayqcaw:
            $aaqqkgyougeiueyq = self::ceqawoymcymsaeqo($yiuogaeewyockeak)->jyumyyugiwwiqomk(5000);
            goto woaoeyaowkuukkqm;
            iaockwkwaiqgeuyu:
            ugqucegcucyyayga:
            goto oeeasouoaaoaaemm;
            woaoeyaowkuukkqm:
            switch ($yiuogaeewyockeak) {
                case self::CREATED_AT:
                    $aaqqkgyougeiueyq->gswweykyogmsyawy(__("\x43\162\x65\141\164\x65\x64\x20\x41\164", PR__CMN__FOUNDATION));
                    goto ugqucegcucyyayga;
                case self::UPDATED_AT:
                    $aaqqkgyougeiueyq->gswweykyogmsyawy(__("\125\x70\144\141\164\x65\144\40\101\164", PR__CMN__FOUNDATION));
                    goto ugqucegcucyyayga;
            }
            goto mmqkuymyyycywmqu;
            mmqkuymyyycywmqu:
            sequgigsgkqaikmq:
            goto iaockwkwaiqgeuyu;
            icmsyimgycuocisu:
            akieeaeqiwugimie:
            goto wassyiqsqasaoiau;
            wassyiqsqasaoiau:
        }
        goto qugsgsscqyikugyc;
        gigiwwouakeekoim:
        uauuoyigkmqoasaq:
        goto esuuweysgwuwcuue;
        gskaqcgccswmuqsy:
        uekueeyqaackuwao:
        goto uccuykggugcmiyam;
        saycoceqywiekqsi:
        return $oyuikeusicgqgwak;
        goto sqaowueaequoigsa;
        eauiumeeyckucuyc:
        $vkkeimekwwkyiyyc = [self::CREATED_AT, self::UPDATED_AT];
        goto gigiwwouakeekoim;
        eieiwacwqkgsewai:
        if (!$vkkeimekwwkyiyyc) {
            goto uaiiuywoakccusge;
        }
        goto gokwmwmaumiwscua;
        qugsgsscqyikugyc:
        kmwwqgiacsoksgcy:
        goto gskaqcgccswmuqsy;
        gokwmwmaumiwscua:
        if (!is_bool($vkkeimekwwkyiyyc)) {
            goto uauuoyigkmqoasaq;
        }
        goto eauiumeeyckucuyc;
        ysiwoiqiaosqoikm:
        $vkkeimekwwkyiyyc = $this->timestamps;
        goto eieiwacwqkgsewai;
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
        uugekiumuwemyuyc:
        $orm_model = $this;
        goto qoameasiqwaqgmca;
        qoameasiqwaqgmca:
        eqmauwqqowsiwaue:
        goto osoqssymqqoqcuky;
        qcywwqceiqogcoyo:
        foreach ($yyksucsgisomecgg->aioqieywgykaaoec() as $qqomumygoacsmsie => $ywmkwiwkosakssii) {
            goto asueqykmkoaimguq;
            kcwyeqmysgqkoqcm:
            $this->ecmiqywsauuoccwo($qqomumygoacsmsie, $ywmkwiwkosakssii);
            goto wamgcqkaieummksu;
            yskswskmsgoouyco:
            $this->ecmiqywsauuoccwo($qqomumygoacsmsie, $ewgsciccscsweqik);
            goto oaciskoioaecgwee;
            oaciskoioaecgwee:
            aosasoogesueygak:
            goto csskguekqcwcmocu;
            isaouwiaamimceeg:
            if (!($ywmkwiwkosakssii instanceof View || is_subclass_of($ywmkwiwkosakssii, View::class))) {
                goto emqmqkeygumaasam;
            }
            goto kcwyeqmysgqkoqcm;
            gooqkmwgsmseuiwq:
            switch ($qqomumygoacsmsie) {
                case "\x69\x6e\x64\x65\170":
                    goto ysaumykuimqigeqa;
                    eyskqaccgeomqmyw:
                    if (!$ikugycsiyegwoiay) {
                        goto qmiqicgscsuoyeqo;
                    }
                    goto uiowwckamqucksim;
                    oegaywiwywuyksaq:
                    $ikugycsiyegwoiay = $this->acsiseaeysswwqkw();
                    goto eyskqaccgeomqmyw;
                    icawmkaswkmwicsa:
                    goto yuyiqaawwgaywgqo;
                    goto imsgusweocmiyygi;
                    uiowwckamqucksim:
                    $this->icyamyikwyaaoqya("\x61\x64\144", $yyksucsgisomecgg->uikgwcuascgeissw("\141\x64\x64\x5f\156\x65\x77\137\151\164\x65\155"), ["\x68\162\145\x66" => $ikugycsiyegwoiay]);
                    goto wscikmsmwmocsqeu;
                    wscikmsmwmocsqeu:
                    qmiqicgscsuoyeqo:
                    goto icawmkaswkmwicsa;
                    ysaumykuimqigeqa:
                    $ewgsciccscsweqik = new Index($this, $ywmkwiwkosakssii);
                    goto oegaywiwywuyksaq;
                    imsgusweocmiyygi:
                case "\x65\144\151\x74":
                case "\x61\144\144":
                    goto igckskemqkqueukg;
                    kisuswmyqsocukgk:
                    goto yuyiqaawwgaywgqo;
                    goto wisaekiyyweeemuy;
                    mioqycmmeucswoms:
                    kmeekqukcecuscye:
                    goto mioaoacqueiyueak;
                    qmuikumqukcyaeqa:
                    if (!$eaoumsseceiowgsk instanceof Form) {
                        goto qwueqigcisoogaec;
                    }
                    goto keyiswqkmqqquosw;
                    gimsiyauegmikyka:
                    weuueokkumksgaeo:
                    goto kisuswmyqsocukgk;
                    mioaoacqueiyueak:
                    if (!$this->ugmceccgwaaaigiy()) {
                        goto csoeisssoumqqeoa;
                    }
                    goto oaseseemoaqcgqeu;
                    pssquaaiioygwqoq:
                    $this->aygiawwcgymgyaya();
                    goto ucugeysomcyceyos;
                    momgmqemgcasyuqq:
                    $eaoumsseceiowgsk = Form::symcgieuakksimmu($ymqmyyeuycgmigyo);
                    goto qmuikumqukcyaeqa;
                    wgmeyycmqioioaqc:
                    if (!in_array($suaemuyiacqyugsm, [$ymqmyyeuycgmigyo, "\145\144\151\164\137{$ymqmyyeuycgmigyo}", "\141\144\144\x5f{$ymqmyyeuycgmigyo}", "\163\150\x6f\167\x5f{$ymqmyyeuycgmigyo}"])) {
                        goto weuueokkumksgaeo;
                    }
                    goto ykiyuciecskusaae;
                    ucugeysomcyceyos:
                    $uieukiskgwkouwyi = true;
                    goto momgmqemgcasyuqq;
                    kuymgsewmeoimeuq:
                    csoeisssoumqqeoa:
                    goto gimsiyauegmikyka;
                    keyiswqkmqqquosw:
                    $eaoumsseceiowgsk->asumqyigwsqmyeoc($this);
                    goto imaiuooqwwokwemw;
                    igckskemqkqueukg:
                    $ymqmyyeuycgmigyo = $yyksucsgisomecgg->aakmagwggmkoiiyu();
                    goto wgmeyycmqioioaqc;
                    oaseseemoaqcgqeu:
                    $ewgsciccscsweqik = new Edit($this, $ywmkwiwkosakssii);
                    goto kuymgsewmeoimeuq;
                    imaiuooqwwokwemw:
                    qwueqigcisoogaec:
                    goto mioqycmmeucswoms;
                    ykiyuciecskusaae:
                    if ($uieukiskgwkouwyi) {
                        goto kmeekqukcecuscye;
                    }
                    goto pssquaaiioygwqoq;
                    wisaekiyyweeemuy:
                case "\x73\x68\x6f\x77":
                    $ewgsciccscsweqik = new Show($this, $ywmkwiwkosakssii);
                    goto yuyiqaawwgaywgqo;
                default:
                    $ewgsciccscsweqik = new View($this, $ywmkwiwkosakssii);
                    goto yuyiqaawwgaywgqo;
            }
            goto oeosugomyqyekmuq;
            ysusaysykymegguk:
            if (!$ewgsciccscsweqik) {
                goto aosasoogesueygak;
            }
            goto yskswskmsgoouyco;
            mwgaaiaswusakkaq:
            goto scccyaiaggeasgqg;
            goto ugowqoisymsioeye;
            mmusoowesqcmuqew:
            yqkyoaiwcyqeaqwu:
            goto wkwkeicwosmkcygc;
            iyocimuyeemkaaso:
            if (is_array($ywmkwiwkosakssii)) {
                goto meegaqaesckqmyec;
            }
            goto isaouwiaamimceeg;
            oeosugomyqyekmuq:
            kkogaccoqmsmmkmo:
            goto emgssiqceagusgyg;
            wamgcqkaieummksu:
            emqmqkeygumaasam:
            goto mwgaaiaswusakkaq;
            ugowqoisymsioeye:
            meegaqaesckqmyec:
            goto gooqkmwgsmseuiwq;
            csskguekqcwcmocu:
            scccyaiaggeasgqg:
            goto mmusoowesqcmuqew;
            emgssiqceagusgyg:
            yuyiqaawwgaywgqo:
            goto ysusaysykymegguk;
            asueqykmkoaimguq:
            $ewgsciccscsweqik = null;
            goto iyocimuyeemkaaso;
            wkwkeicwosmkcygc:
        }
        goto giiucsyqgcooaima;
        yuoyeeuqqaockyqw:
        
        if (ManipulateAjax::mcgoysmkqsqooceq()) {
            goto ugcyukgoaiiysymc;
        }
        goto kygcymkakucoeock;
        iqukigoyiqgcggue:
        $yyksucsgisomecgg = $this->oyeskqayoscwciem();
        goto amkcomscieegkygc;
        qkiqquymecyoouki:
        $suaemuyiacqyugsm = ManipulateServer::get(self::PAGE);
        goto iqukigoyiqgcggue;
        amkcomscieegkygc:
        if (!(strpos($suaemuyiacqyugsm, $yyksucsgisomecgg->aakmagwggmkoiiyu()) !== false)) {
            goto eqmauwqqowsiwaue;
        }
        goto uugekiumuwemyuyc;
        osoqssymqqoqcuky:
        $uieukiskgwkouwyi = false;
        goto qcywwqceiqogcoyo;
        awikkaqmmuqkukma:
        ugcyukgoaiiysymc:
        goto uckeuuaqimqamuyc;
        kygcymkakucoeock:
        global $orm_model;
        goto qkiqquymecyoouki;
        uckeuuaqimqamuyc:
    }
    
    public function kssgsuewkcwgiksa() : array
    {
        return [];
    }
    
    public function hkwssiimkcysaiyo() : ?string
    {
        goto uqkqmseoeemyaqck;
        uqkqmseoeemyaqck:
        $ymqmyyeuycgmigyo = $this->miwqiiqeegeqcwis();
        goto cceyoumkiicaguio;
        yuiouamaogkkqmck:
        $qqomumygoacsmsie = "\x69\x6e\144\x65\x78";
        goto mmwqwowqcaseyyki;
        mmwqwowqcaseyyki:
        mieeugiewckceagc:
        goto wsckacayikksiswo;
        wsckacayikksiswo:
        return $qqomumygoacsmsie;
        goto qiawociayswicugw;
        yayykakkyeoieicm:
        if (!($qqomumygoacsmsie === $ymqmyyeuycgmigyo)) {
            goto mieeugiewckceagc;
        }
        goto yuiouamaogkkqmck;
        cceyoumkiicaguio:
        $qqomumygoacsmsie = str_replace("\137{$ymqmyyeuycgmigyo}", '', ManipulateServer::get(self::PAGE));
        goto yayykakkyeoieicm;
        qiawociayswicugw:
    }
    
    public function uqiykqoyaqymcues() : bool
    {
        return $this->hkwssiimkcysaiyo() == "\x65\144\x69\164";
    }
    
    public function wkcuasmkgoscaiay() : bool
    {
        return $this->hkwssiimkcysaiyo() == "\x73\x68\157\x77";
    }
    
    public function wmwguecgowcscues() : bool
    {
        return $this->hkwssiimkcysaiyo() == "\151\x6e\x64\x65\x78";
    }
    
    public final function aygiawwcgymgyaya() : ?array
    {
        goto yoaewquyogiimyic;
        cicegcoqyuoggiwy:
        return $this->ugmceccgwaaaigiy();
        goto ugcwqacogqoswyse;
        aakoeuuosouyeemc:
        foreach ($ikgwqyuyckaewsow as $uusmaiomayssaecw => $uiewakwqscemywuo) {
            goto cksoeiwawiygyiyg;
            akwwuuiykscgicuw:
            $qqgeiaygkaoyccig = ["\x69\x64" => $uusmaiomayssaecw, "\x6e\x61\155\145" => $aaqqkgyougeiueyq->qcgakseyaikigqco()];
            goto ueqsiwuwumoqgsck;
            qmoisuweiskkekca:
            if ($aiowsaccomcoikus) {
                goto gkoyqgogsukuowqi;
            }
            goto wywwieycqskuqcwc;
            wickgagwgqqsomum:
            weiaigyyigkusucy:
            goto wmwgeoequuwwwywa;
            acsigwcaesyyoiie:
            if (in_array($eewwgseqamqiouyq, ["\x64\x61\164\x65", "\144\x61\164\145\x74\151\155\145"])) {
                goto augqweqsqioesmim;
            }
            goto aqaaqeucgoegeeuk;
            swckikycciugciqq:
            bagkewioewygysea:
            goto coogyackikgmecic;
            yeiokcoikcysyimu:
            cooeoemccqiyewks:
            goto kkmwwqyesmkescyg;
            iikgiaocummweiga:
            $uiewakwqscemywuo = ManipulateFormat::omaawkkwwyesqwcc($uiewakwqscemywuo, $qqgeiaygkaoyccig);
            goto gsusqquicmukegcs;
            gwyseusuceuwwccu:
            goto sgikkoswwyesqomo;
            goto icouowaoycuuisqe;
            ysoqeuugiuswykyu:
            $sqeykgyoooqysmca = "\x63\150\145\x63\153\142\x6f\170";
            goto usmuqsuwuueogimc;
            wycmcqaauqkgegau:
            $sqeykgyoooqysmca = "\142\163\x73\x65\x6c\145\x63\164";
            goto qcweoyigoaeacsow;
            ekwuycsiuqwycqea:
            goto qkwckeqowgaokkuy;
            goto iyaugygcsmqqqkmo;
            wmwgeoequuwwwywa:
            $uiewakwqscemywuo[self::TYPE] = $sqeykgyoooqysmca;
            goto uqugcugeomqakcqo;
            sagemooicmgceiug:
            aescssauecumgwso:
            goto uqcwyyiykmwygeau;
            icouowaoycuuisqe:
            gkoyqgogsukuowqi:
            goto ocmwuquguuqigose;
            gysmmooawoeggaow:
            if (in_array($eewwgseqamqiouyq, ["\x73\x74\162\x69\x6e\x67", "\142\x69\x67\x69\156\164"])) {
                goto ssesmiwwmsayksum;
            }
            goto iyikuwuweqigiuey;
            uqcwyyiykmwygeau:
            goto qcceyyqiuiqcyqqm;
            goto yeiokcoikcysyimu;
            cieumoqayigkoocy:
            $sqeykgyoooqysmca = "\x74\x65\x78\x74";
            goto yggciikgkomgeqsc;
            wywwieycqskuqcwc:
            throw new UnexpectedValueException("{$uusmaiomayssaecw}\x20\x69\x73\x20\156\x6f\x74\40\x61\40\166\x61\x6c\x69\x64\x20\x66\151\145\x6c\x64\x2e");
            goto gwyseusuceuwwccu;
            owaimkmgemoqewmm:
            kqkymieyyqaoeymw:
            goto ysoqeuugiuswykyu;
            coogyackikgmecic:
            $this->qaqsggqyouammqgm($aiowsaccomcoikus);
            goto iqwsqykoueqyyomy;
            gkwuewqmqeswqukg:
            $sqeykgyoooqysmca = "\x64\x61\x74\x65";
            goto sagemooicmgceiug;
            iqwsqykoueqyyomy:
            sgikkoswwyesqomo:
            goto ggaucuaykyuiikem;
            aqaaqeucgoegeeuk:
            if (!in_array($eewwgseqamqiouyq, ["\x65\x6e\165\x6d"])) {
                goto kkacggiosquqagew;
            }
            goto wycmcqaauqkgegau;
            umcyeiusoakewyaa:
            sykuuisikqcwuaqu:
            goto ksawwekgswywwuwm;
            uamuuwkyuqomqyuy:
            qcceyyqiuiqcyqqm:
            goto ekwuycsiuqwycqea;
            scgmwokeuqwiekkk:
            if ($aaqqkgyougeiueyq instanceof Foreign) {
                goto sykuuisikqcwuaqu;
            }
            goto ceusyscosamyaiws;
            yuqisiwgqacgmsym:
            mquyemuqcqeassqc:
            goto wickgagwgqqsomum;
            cksoeiwawiygyiyg:
            $aaqqkgyougeiueyq = ManipulateArray::get($qssskwiqeumgkago, $uusmaiomayssaecw);
            goto cyqokqcacysioeyc;
            koiiaewwicsckseu:
            goto mquyemuqcqeassqc;
            goto umcyeiusoakewyaa;
            cyqokqcacysioeyc:
            if (!$aaqqkgyougeiueyq instanceof Field) {
                goto aayysiegiyweiyuu;
            }
            goto akwwuuiykscgicuw;
            usmuqsuwuueogimc:
            gqyyccceswkqcmaa:
            goto koiiaewwicsckseu;
            ggaucuaykyuiikem:
            aayysiegiyweiyuu:
            goto egikqoaqqegawugu;
            eoeiaccouaymakgm:
            goto gqyyccceswkqcmaa;
            goto owaimkmgemoqewmm;
            wcekgciqeggiiwgk:
            augqweqsqioesmim:
            goto gkwuewqmqeswqukg;
            qcweoyigoaeacsow:
            kkacggiosquqagew:
            goto iyceygqsmokgmams;
            egikqoaqqegawugu:
            qimomesqamyyicmo:
            goto caaygouikgagsssc;
            iyaugygcsmqqqkmo:
            ssesmiwwmsayksum:
            goto cieumoqayigkoocy;
            iyikuwuweqigiuey:
            if (in_array($eewwgseqamqiouyq, ["\164\145\170\164"])) {
                goto cooeoemccqiyewks;
            }
            goto acsigwcaesyyoiie;
            wcsysckgigeykkwy:
            if ($sqeykgyoooqysmca) {
                goto weiaigyyigkusucy;
            }
            goto scgmwokeuqwiekkk;
            yggciikgkomgeqsc:
            qkwckeqowgaokkuy:
            goto eoeiaccouaymakgm;
            ueqsiwuwumoqgsck:
            $eewwgseqamqiouyq = $aaqqkgyougeiueyq->gueasuouwqysmomu();
            goto iikgiaocummweiga;
            ksawwekgswywwuwm:
            $sqeykgyoooqysmca = "\142\x73\163\145\x6c\145\143\164";
            goto yuqisiwgqacgmsym;
            iyceygqsmokgmams:
            goto aescssauecumgwso;
            goto wcekgciqeggiiwgk;
            kmqusaiaiogecyiy:
            mgieeyuyuoeccaog:
            goto swckikycciugciqq;
            ceusyscosamyaiws:
            if (in_array($eewwgseqamqiouyq, ["\x62\157\157\x6c\145\x61\156", "\x74\x69\156\x79\x69\156\x74"])) {
                goto kqkymieyyqaoeymw;
            }
            goto gysmmooawoeggaow;
            uqugcugeomqakcqo:
            $aiowsaccomcoikus = MetaBox::okmsgamiiemyesao($uiewakwqscemywuo);
            goto qmoisuweiskkekca;
            gsusqquicmukegcs:
            $sqeykgyoooqysmca = ManipulateArray::get($uiewakwqscemywuo, "\164\x79\x70\145");
            goto wcsysckgigeykkwy;
            kkmwwqyesmkescyg:
            $sqeykgyoooqysmca = "\164\x65\170\164\x61\162\145\141";
            goto uamuuwkyuqomqyuy;
            ocmwuquguuqigose:
            switch ($eewwgseqamqiouyq) {
                case "\x65\x6e\165\x6d":
                    goto gwksywaoeowkesei;
                    gwksywaoeowkesei:
                    if (!$aiowsaccomcoikus instanceof BSSelect) {
                        goto amgsicqmemeuuaem;
                    }
                    goto sgkwaiuukkaqyqki;
                    emagssesowicacoa:
                    amgsicqmemeuuaem:
                    goto cauqmacqkssciwyq;
                    sgkwaiuukkaqyqki:
                    $aiowsaccomcoikus->acauweqyyugwisqc($aaqqkgyougeiueyq->gkwkqmwweiawigae());
                    goto emagssesowicacoa;
                    cauqmacqkssciwyq:
                    goto bagkewioewygysea;
                    goto gusgywuaimwooawc;
                    gusgywuaimwooawc:
                case "\x66\x6f\162\x65\151\147\x6e":
                    goto acmgueaoaaweiqqu;
                    kgikoagqwkuocesg:
                    goto bagkewioewygysea;
                    goto skaayekywasksoug;
                    acmgueaoaaweiqqu:
                    if (!$aiowsaccomcoikus instanceof BSSelect) {
                        goto uugwoygiyecgymgw;
                    }
                    goto awaaowoqskgokwiy;
                    uqiekawkwcegsumy:
                    uugwoygiyecgymgw:
                    goto kgikoagqwkuocesg;
                    awaaowoqskgokwiy:
                    $aiowsaccomcoikus->wkqyoukciomqiyew()->oeewiaacscgyamai($aaqqkgyougeiueyq->uecyuoauykiqqkey());
                    goto uqiekawkwcegsumy;
                    skaayekywasksoug:
            }
            goto kmqusaiaiogecyiy;
            caaygouikgagsssc:
        }
        goto qsmoiwqcuamyuwyu;
        wmcmqmmcweecqmsw:
        $qssskwiqeumgkago = $this->oyeskqayoscwciem()->aeosueemgsygqese();
        goto aakoeuuosouyeemc;
        yoaewquyogiimyic:
        $ikgwqyuyckaewsow = $this->kssgsuewkcwgiksa();
        goto wmcmqmmcweecqmsw;
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
        acisycocoswkekik:
        saekesoeysauokkq:
        goto aaiymmkqmocgakei;
        cqaeiesyciakcagu:
        foreach ($qssskwiqeumgkago as $aiowsaccomcoikus) {
            goto sqmiymiemeegegic;
            sqmiymiemeegegic:
            if (!($aiowsaccomcoikus instanceof Field && $aiowsaccomcoikus->uwaascqoguwkwiaw())) {
                goto meseuuacmkuowqau;
            }
            goto csqakuuiyywassgw;
            csggsqueaqmwgwkk:
            wycuyiukyceccaow:
            goto sescaagayikiggyq;
            csqakuuiyywassgw:
            $wkkweuacukumqmya[$aiowsaccomcoikus->mwikyscisascoeea()] = $aiowsaccomcoikus->qcgakseyaikigqco();
            goto esqiocgueosoksyq;
            esqiocgueosoksyq:
            meseuuacmkuowqau:
            goto csggsqueaqmwgwkk;
            sescaagayikiggyq:
        }
        goto acisycocoswkekik;
        kucqcqeesaiacekm:
        return $wkkweuacukumqmya;
        goto cewyaqiqmmwmauce;
        aaiymmkqmocgakei:
        wwwggoemicgwwasy:
        goto kucqcqeesaiacekm;
        gemwkqocygssmequ:
        if (!($qssskwiqeumgkago && is_array($qssskwiqeumgkago))) {
            goto wwwggoemicgwwasy;
        }
        goto cqaeiesyciakcagu;
        egmocemomockemia:
        $qssskwiqeumgkago = $this->oyeskqayoscwciem()->aeosueemgsygqese();
        goto gemwkqocygssmequ;
        cewyaqiqmmwmauce:
    }
    
    public function qeowcucuoaqyqwuw($umwgoasiowmqcumw) : array
    {
        goto amoygaweoeymiuiy;
        eekeksysqeuoskoo:
        moimkkmkooeiyisc:
        goto okemsmmeceoeaswi;
        okemsmmeceoeaswi:
        return $umwgoasiowmqcumw;
        goto ossyqogewmggmaoc;
        cmagycousakeeaei:
        scyqmcegwikkoesw:
        goto eekeksysqeuoskoo;
        ksgwgcguemcescqg:
        $umwgoasiowmqcumw = ["\141\154\154" => ["\x74\151\164\x6c\x65" => __("\x41\154\154", PR__CMN__FOUNDATION), "\x63\x6f\165\x6e\x74" => array_sum(array_map(function ($mokouoooiwsmcmiu) {
            return $mokouoooiwsmcmiu["\x63\157\x75\156\x74"];
        }, $umwgoasiowmqcumw))]] + $umwgoasiowmqcumw;
        goto kiwiesucugwoiuum;
        cqwgmwqiakmgyuee:
        if (!(is_array($umwgoasiowmqcumw) && $umwgoasiowmqcumw)) {
            goto moimkkmkooeiyisc;
        }
        goto ksgwgcguemcescqg;
        amoygaweoeymiuiy:
        $momcykaoccoymeig = 1;
        goto kcomueysiyyqagus;
        kiwiesucugwoiuum:
        foreach ($umwgoasiowmqcumw as $qqomumygoacsmsie => $icwicymcioeyeyek) {
            goto qscqkykqskqmisgw;
            swmgucaogosuueug:
            eokcuuwqaomkooag:
            goto uwsmcsiiisuocgwg;
            yomoeykcqyukscmi:
            goto qgqasacusgwmoegy;
            goto swmgucaogosuueug;
            gkoiyaagwgycysim:
            if ($meqocwsecsywiiqs) {
                goto eokcuuwqaomkooag;
            }
            goto ysssquieawyysiyc;
            ycskuioouwwemgke:
            $yeacayasgueouoqc = $scsyuucsumiwkqqc ? $scsyuucsumiwkqqc === $qqomumygoacsmsie : $momcykaoccoymeig === 1;
            goto syeeegeygawwqiuu;
            ysssquieawyysiyc:
            ManipulateArray::unset($cqcsaaswaciweiie, $qqomumygoacsmsie);
            goto yomoeykcqyukscmi;
            syeeegeygawwqiuu:
            $umwgoasiowmqcumw[$qqomumygoacsmsie] = ManipulateHTML::qgsekwygcgawekeq("\x61", ["\150\x72\x65\x66" => $geecqyososceumsk, "\143\154\x61\163\163" => "\x6f\x72\x6d\55\146\151\154\164\x65\162\x2d\154\151\156\153" . ($yeacayasgueouoqc ? "\40\x63\165\162\162\145\156\164" : '')], true, sprintf("\x25\163\x20\x28\45\163\51", $meqocwsecsywiiqs, ManipulateHTML::gmqyuaqwgiayskei($this->wusgwkaycokeckqs($gaeqamemwmwsyukm))));
            goto iuieskocqoqkkwus;
            wmcaecgwmmwuuqsq:
            sccqekuwywiisami:
            goto ycskuioouwwemgke;
            iuieskocqoqkkwus:
            $momcykaoccoymeig++;
            goto isiqkeyciyqgkayu;
            qscqkykqskqmisgw:
            $meqocwsecsywiiqs = ManipulateArray::get($icwicymcioeyeyek, "\164\151\x74\154\145", false);
            goto ksqgwiceoomkuuiy;
            gwayeyymscmgwqkg:
            ycweseaccsomkioa:
            goto caoikoqmyeqsqqqe;
            igscwycsqsckmcuq:
            $geecqyososceumsk = DecoratorQuery::yqymaqmqiqmmmsoo([self::ORM_FILTER_BY => $ymaogssqccumcyqa, self::ORM_FILTER_VALUE => $qqomumygoacsmsie], $geecqyososceumsk);
            goto wmcaecgwmmwuuqsq;
            isiqkeyciyqgkayu:
            qgqasacusgwmoegy:
            goto gwayeyymscmgwqkg;
            ksqgwiceoomkuuiy:
            $gaeqamemwmwsyukm = ManipulateArray::get($icwicymcioeyeyek, "\143\157\x75\156\x74", 0);
            goto gkoiyaagwgycysim;
            uekkkmwciocmosgg:
            goto sccqekuwywiisami;
            goto ecqeqquikuomwgsu;
            wsqoskqgyooqeyga:
            $geecqyososceumsk = DecoratorQuery::oiamiqcuyksmmomm([self::ORM_FILTER_BY, self::ORM_FILTER_VALUE], $geecqyososceumsk);
            goto uekkkmwciocmosgg;
            suaymckwwgmugsaa:
            if ($qqomumygoacsmsie !== "\x61\x6c\x6c") {
                goto ciwggusyecgskagy;
            }
            goto wsqoskqgyooqeyga;
            uwsmcsiiisuocgwg:
            $geecqyososceumsk = ManipulateServer::ekcymmyqoceukosc(true);
            goto suaymckwwgmugsaa;
            ecqeqquikuomwgsu:
            ciwggusyecgskagy:
            goto igscwycsqsckmcuq;
            caoikoqmyeqsqqqe:
        }
        goto cmagycousakeeaei;
        kcomueysiyyqagus:
        $ymaogssqccumcyqa = $this->aakiaoueckoiyoew();
        goto ckuagmyqkyoeeaeu;
        ckuagmyqkyoeeaeu:
        $scsyuucsumiwkqqc = ManipulateServer::get("\157\162\155\x5f\146\151\154\x74\x65\162\x5f\166\x61\x6c\165\145");
        goto cqwgmwqiakmgyuee;
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
        egosmwkuuikwqeak:
        $ceiwsaacewygcsqg = $this->primaryKey;
        goto eosmwawqaocwgccq;
        eymiqwsygoowowuu:
        $ceiwsaacewygcsqg = $this->myywwqkyiwawwquy($ceiwsaacewygcsqg);
        goto keqagmaiqqsgkmso;
        eosmwawqaocwgccq:
        if (!$iqoeaggekweuwcgw) {
            goto ggkoiouwecyiosym;
        }
        goto eymiqwsygoowowuu;
        keqagmaiqqsgkmso:
        ggkoiouwecyiosym:
        goto ekgsawcuswowmosm;
        ekgsawcuswowmosm:
        return $ceiwsaacewygcsqg;
        goto uiwswesymogiwsgg;
        uiwswesymogiwsgg:
    }
    
    public function gqaysymikgeawkqa() : ?Builder
    {
        goto kgeggsckmgcgwcqm;
        kgeggsckmgcgwcqm:
        $siykeiywomwwuoiw = null;
        goto qimieogaimwmukmu;
        gmymycwymqkuiisi:
        return $siykeiywomwwuoiw;
        goto wogokmgkgkumqcws;
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
            wkcwuemioaiyouek:
            $aasascamegmwqmqk = $this->miwqiiqeegeqcwis();
            goto usgmimcwygsmcioa;
            qggiogeyowcoaiqy:
            if (!($siykeiywomwwuoiw && !$siykeiywomwwuoiw->exists())) {
                goto euogcyyayioyyiyg;
            }
            goto ekgcquiosyesyism;
            gmcqkoqwkiawaikw:
        } catch (Exception $wgaoewqkwgomoaai) {
            $this->saqqeqmcyyoeqici($this->kyacickkomkioeyu($wgaoewqkwgomoaai));
        }
        goto gmymycwymqkuiisi;
        wogokmgkgkumqcws:
    }
    
    public function feccsgmuogywweio($mksyucucyswaukig)
    {
        goto cycyaqqawmwiywwe;
        ikeyoyoigsuouokm:
        cokacyaayuueyuuu:
        goto eecgougegqassgyq;
        iuaommmyqoecmuss:
        $aokagokqyuysuksm = $mksyucucyswaukig;
        goto ikeyoyoigsuouokm;
        cycyaqqawmwiywwe:
        if (is_numeric($mksyucucyswaukig)) {
            goto koawwmccgquqqmwa;
        }
        goto ckowiuagwmsqmiqc;
        ckowiuagwmsqmiqc:
        $aokagokqyuysuksm = ManipulateArray::get($mksyucucyswaukig, $this->kumuygiiqswoyasy());
        goto eqieeecackceeweg;
        ygywkqgioiscmuie:
        koawwmccgquqqmwa:
        goto iuaommmyqoecmuss;
        eqieeecackceeweg:
        goto cokacyaayuueyuuu;
        goto ygywkqgioiscmuie;
        eecgougegqassgyq:
        return $this->cyyiiykmaeuqqgok($aokagokqyuysuksm);
        goto cuwkqgemkmuuegkc;
        cuwkqgemkmuuegkc:
    }
    
    public function getConnection() : Database
    {
        goto wemmseueskwkcwou;
        cugkqmkuyuwwqcec:
        return $mgcmmwqwguicsews;
        goto ewooakeuigcyuemu;
        ceeqguaoysyaasey:
        $mgcmmwqwguicsews->wcweamocuicuusky("\156\141\x6d\145", $ymqmyyeuycgmigyo);
        goto ekmqouqsgsaukeiq;
        ekmqouqsgsaukeiq:
        oyicskieeaewgwce:
        goto cugkqmkuyuwwqcec;
        cceakqgoysacqwmc:
        $mgcmmwqwguicsews = Database::symcgieuakksimmu($ymqmyyeuycgmigyo);
        goto scaimkkukmgoeaya;
        wemmseueskwkcwou:
        $ymqmyyeuycgmigyo = $this->miwqiiqeegeqcwis();
        goto cceakqgoysacqwmc;
        scaimkkukmgoeaya:
        if (!($mgcmmwqwguicsews instanceof Database && !$mgcmmwqwguicsews->aakmagwggmkoiiyu())) {
            goto oyicskieeaewgwce;
        }
        goto ceeqguaoysyaasey;
        ewooakeuigcyuemu:
    }
    public function ckgmycmaukqgkosk()
    {
        goto kacgiqwewyeeyyam;
        goimywgsweeqsewo:
        $yyksucsgisomecgg->iqoguoscqueomqsk(ORM::symcgieuakksimmu()->homgcsoocssgwgym($yyksucsgisomecgg->ggqekkkocygywmoy(), $yyksucsgisomecgg->cwueseysoqeewkao(), $yyksucsgisomecgg->iemucaoqaisiwise()));
        goto uomwseyiqckeewgo;
        qwogeocemuaaasiw:
        if ($yyksucsgisomecgg->masyeqmaiuqwosei()) {
            goto wceiuqaeywmgscww;
        }
        goto ywmuoigomwwigqea;
        ywmuoigomwwigqea:
        $yyksucsgisomecgg->usuqmwksoeaayaig(ManipulateString::kwuyaykukcmaqggg(ManipulateString::mkwcwqkqeqkqyggc(self::uqggkiomyiceyooa())));
        goto cgqkqmiekaageyka;
        kacgiqwewyeeyyam:
        $yyksucsgisomecgg = $this->oyeskqayoscwciem();
        goto qwogeocemuaaasiw;
        cgqkqmiekaageyka:
        wceiuqaeywmgscww:
        goto goimywgsweeqsewo;
        uomwseyiqckeewgo:
    }
    
    public function oyeskqayoscwciem() : Register
    {
        goto kmocamaieycogugg;
        wamkaouokmyoyuqu:
        cqyiukmuqceicqwa:
        goto eywcgeccsmquugsw;
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
        wggeggkumkwaaesu:
        $yskommoiekkwiggo = $this->cgswceaawqgeskua("\x65\144\151\164");
        goto uauqmaeueukkmuwa;
        ykymogaqkgaiiiyi:
        return $yciaosuiyeieceug;
        goto uusyaguomkqeakkm;
        qcuywygiosoqycaa:
        sickakeesgcgwisw:
        goto coaysoeouasaekie;
        coaysoeouasaekie:
        wmqegaqemgiggsce:
        goto ykymogaqkgaiiiyi;
        uauqmaeueukkmuwa:
        if (!$yskommoiekkwiggo instanceof Edit) {
            goto wmqegaqemgiggsce;
        }
        goto gkyguugwwoaqoigy;
        kmikwoqwigwuyqae:
        $yciaosuiyeieceug = $yskommoiekkwiggo;
        goto qcuywygiosoqycaa;
        gkyguugwwoaqoigy:
        
        if (!DecoratorUser::scmcyesmmikkucie($this->oyeskqayoscwciem()->gwaeeegmgggawiyi("\145\144\151\x74\137\x69\x74\x65\155\163"))) {
            goto sickakeesgcgwisw;
        }
        goto kmikwoqwigwuyqae;
        cqeceeagmysoyoqg:
        $yciaosuiyeieceug = false;
        goto wggeggkumkwaaesu;
        uusyaguomkqeakkm:
    }
    
    public function qqakqoekigkcmyek()
    {
        goto qsyyeoosgigiiequ;
        jweeyemwqyqmyuys:
        $kmsymkkmiwykeyqi = $this->cgswceaawqgeskua("\163\150\x6f\x77");
        goto mgiwqumikeuieocg;
        mgiwqumikeuieocg:
        if (!$kmsymkkmiwykeyqi instanceof Show) {
            goto qoigaauuokyusmgk;
        }
        goto yegkgccwomcgkumi;
        yegkgccwomcgkumi:
        $yciaosuiyeieceug = $kmsymkkmiwykeyqi;
        goto qikmwaessamuueoe;
        qikmwaessamuueoe:
        qoigaauuokyusmgk:
        goto aeekgeqawgsmgiqw;
        aeekgeqawgsmgiqw:
        return $yciaosuiyeieceug;
        goto imgagmqusgiqissi;
        qsyyeoosgigiiequ:
        $yciaosuiyeieceug = false;
        goto jweeyemwqyqmyuys;
        imgagmqusgiqissi:
    }
    
    public function mukyysqkgaimcygs() : bool
    {
        $gkswkiicccswksiq = $this->oyeskqayoscwciem()->gwaeeegmgggawiyi("\144\x65\x6c\145\164\145\x5f\x69\x74\145\155\163");
        return $this->gqigeuumsosmamqs() && DecoratorUser::scmcyesmmikkucie($gkswkiicccswksiq);
    }
    
    public function comogmawyoiquwis() : ?string
    {
        goto cesaaiguwciccysi;
        kqsyqwwscwoswsgk:
        $iwywmkygwewiamwm = $qqomumygoacsmsie->qmgcisuuikgmqcsu();
        goto yemuiyokmqoqckwu;
        wskccugoccagaqcw:
        $qqomumygoacsmsie = $this->cgswceaawqgeskua("\151\x6e\144\145\170");
        goto sqyceswygksmmqqa;
        yemuiyokmqoqckwu:
        scaciowogmayswms:
        goto qocmmyskykeuwsae;
        sqyceswygksmmqqa:
        if (!$qqomumygoacsmsie instanceof Index) {
            goto scaciowogmayswms;
        }
        goto kqsyqwwscwoswsgk;
        qocmmyskykeuwsae:
        return $iwywmkygwewiamwm;
        goto kywmiquiiwmwgooy;
        cesaaiguwciccysi:
        $iwywmkygwewiamwm = null;
        goto wskccugoccagaqcw;
        kywmiquiiwmwgooy:
    }
    
    public function yyykkcyiksewsoqy($kqokimuosyuyyucg = 0) : ?string
    {
        goto yquysamwsoyyqcya;
        gyceukwoyaasuwik:
        syquiiogeymgicuy:
        goto iiyamaquicwswcyu;
        qsycguggqkgywgaq:
        if (!($qqomumygoacsmsie = $this->ggwyugcggywuwcse())) {
            goto syquiiogeymgicuy;
        }
        goto wsyeqyekimescwkq;
        wsyeqyekimescwkq:
        $iwywmkygwewiamwm = DecoratorQuery::yqymaqmqiqmmmsoo([$this->kumuygiiqswoyasy() => $kqokimuosyuyyucg], $qqomumygoacsmsie->qmgcisuuikgmqcsu());
        goto gyceukwoyaasuwik;
        yquysamwsoyyqcya:
        $iwywmkygwewiamwm = null;
        goto qsycguggqkgywgaq;
        iiyamaquicwswcyu:
        return $iwywmkygwewiamwm;
        goto iiyggeuemwuwqiey;
        iiyggeuemwuwqiey:
    }
    
    public function uesweuocqoywoyms($kqokimuosyuyyucg = 0) : ?string
    {
        goto agokkauammisaqke;
        cyyecekuwygaqwcy:
        return $iwywmkygwewiamwm;
        goto muqeeocooyiosouk;
        pscqogmyseiwuqye:
        omeookmiomoieeee:
        goto cyyecekuwygaqwcy;
        agokkauammisaqke:
        $iwywmkygwewiamwm = null;
        goto ggoyigsoyccmscum;
        ggoyigsoyccmscum:
        if (!($qqomumygoacsmsie = $this->qqakqoekigkcmyek())) {
            goto omeookmiomoieeee;
        }
        goto aigeoggkowgwwwqg;
        aigeoggkowgwwwqg:
        $iwywmkygwewiamwm = DecoratorQuery::yqymaqmqiqmmmsoo([$this->kumuygiiqswoyasy() => $kqokimuosyuyyucg], $qqomumygoacsmsie->qmgcisuuikgmqcsu());
        goto pscqogmyseiwuqye;
        muqeeocooyiosouk:
    }
    
    public function cgccmsewskigcuig($kqokimuosyuyyucg = 0) : ?string
    {
        goto mowauiysyiciqaaa;
        qooykiaywemimcke:
        ayggiggmcqckqwom:
        goto okceyucmoigyokyy;
        mgscyaiwekksacco:
        if ($qqomumygoacsmsie->qcsgmgoukiouuscw()) {
            goto wcagqkquasswioos;
        }
        goto sykwygmouoikuyws;
        iyeswqeqcsmsoueq:
        if (!($qqomumygoacsmsie instanceof Index && $this->mukyysqkgaimcygs())) {
            goto ayggiggmcqckqwom;
        }
        goto eiekcqosmyqmwqag;
        ggkgseywksemuogc:
        $qqomumygoacsmsie = $this->cgswceaawqgeskua("\151\156\144\145\170");
        goto iyeswqeqcsmsoueq;
        uecmkggsueeiyawk:
        return $iwywmkygwewiamwm;
        goto iyakeemwaiqeueme;
        mowauiysyiciqaaa:
        $iwywmkygwewiamwm = null;
        goto msuyygiskkumokec;
        ggoquyyseekiwukq:
        wcagqkquasswioos:
        goto dwciioycickkwawq;
        okceyucmoigyokyy:
        wiiyageyqowkmmko:
        goto uecmkggsueeiyawk;
        ysiuiuqawkaaamus:
        $iwywmkygwewiamwm = DecoratorQuery::yqymaqmqiqmmmsoo(["\x6f\162\x6d\55\x61\x63\x74\x69\157\156" => "\144\145\154\145\x74\145", $ceiwsaacewygcsqg => $kqokimuosyuyyucg], $iwywmkygwewiamwm);
        goto qooykiaywemimcke;
        eiekcqosmyqmwqag:
        $ceiwsaacewygcsqg = $this->kumuygiiqswoyasy();
        goto mgscyaiwekksacco;
        dwciioycickkwawq:
        $iwywmkygwewiamwm = ManipulateServer::ekcymmyqoceukosc(true);
        goto yoociieskmuucgms;
        yoociieskmuucgms:
        ogywsgmqcgioaoqk:
        goto ysiuiuqawkaaamus;
        keiciayiyqsemsys:
        goto ogywsgmqcgioaoqk;
        goto ggoquyyseekiwukq;
        sykwygmouoikuyws:
        $iwywmkygwewiamwm = $qqomumygoacsmsie->qmgcisuuikgmqcsu();
        goto keiciayiyqsemsys;
        msuyygiskkumokec:
        if (!$kqokimuosyuyyucg) {
            goto wiiyageyqowkmmko;
        }
        goto ggkgseywksemuogc;
        iyakeemwaiqeueme:
    }
    
    public function setCreatedAt($eqgoocgaqwqcimie)
    {
        $this->{static::CREATED_AT} = current_time("\155\x79\x73\x71\154");
    }
    
    public function setUpdatedAt($eqgoocgaqwqcimie)
    {
        $this->{static::UPDATED_AT} = current_time("\x6d\x79\x73\161\154");
    }
    
    public function acsiseaeysswwqkw() : ?string
    {
        goto jgaoqcmiqagoiuko;
        iyekgiaayeasoggw:
        ouuuacyewgmocwsc:
        goto cwsgieeaugwciiwu;
        sqokyowsuawgkusy:
        $iwywmkygwewiamwm = $ecmiqywsauuoccwo->qmgcisuuikgmqcsu();
        goto iyekgiaayeasoggw;
        iekesyeicomwcuas:
        $gkswkiicccswksiq = $this->oyeskqayoscwciem()->gwaeeegmgggawiyi("\143\x72\x65\141\x74\145\137\151\164\x65\155\x73");
        goto wimggeysyugwwkca;
        oycikycyewimcaew:
        if (!($ecmiqywsauuoccwo instanceof View && DecoratorUser::scmcyesmmikkucie($gkswkiicccswksiq))) {
            goto ouuuacyewgmocwsc;
        }
        goto sqokyowsuawgkusy;
        jgaoqcmiqagoiuko:
        $iwywmkygwewiamwm = null;
        goto iekesyeicomwcuas;
        cwsgieeaugwciiwu:
        return $iwywmkygwewiamwm;
        goto wiigoqowismumcsm;
        wimggeysyugwwkca:
        $ecmiqywsauuoccwo = $this->cgswceaawqgeskua("\x61\x64\x64");
        goto oycikycyewimcaew;
        wiigoqowismumcsm:
    }
    
    public function sgcuwcowgwimgsgk($aokagokqyuysuksm, $cwwowqyuwccuykom = false)
    {
        goto waiqmywasoeggkce;
        ggcayqaayysyqmia:
        $kigowwqauiumummw = false;
        goto miiegqgiuamasook;
        oiguycsiaweycioe:
        yaokowamwsaggege:
        goto ueeowyociayoygsa;
        waiqmywasoeggkce:
        $mksyucucyswaukig = $this->cyyiiykmaeuqqgok($aokagokqyuysuksm);
        goto ggcayqaayysyqmia;
        miiegqgiuamasook:
        if (!$mksyucucyswaukig instanceof Model) {
            goto qwqwwywiiuqayaca;
        }
        goto eskmkooukwwieuke;
        ueeowyociayoygsa:
        qwqwwywiiuqayaca:
        goto isumwussqyqawwmy;
        isssemmuiiaewiwi:
        try {
            goto caskqicqwmyuugku;
            oiueawimuggcqgky:
            $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\146\x61\151\154\145\x64\137\x64\145\154\145\164\x65\137\157\142\x6a\145\x63\164", self::class), $aokagokqyuysuksm);
            goto qqiwcikkcgmmakow;
            akycayowsciesmug:
            ukcukckucsyaggmw:
            goto ogqaueuweieisowc;
            qqiwcikkcgmmakow:
            goto aikukgimkamkgwsu;
            goto wgcuewwyieoqaoek;
            wgcuewwyieoqaoek:
            mwkcmgksoyycumos:
            goto wksssmewgogkacei;
            ykcymsoikgqeaukw:
            $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x6f\x62\x6a\x65\143\164\x5f\x64\x65\154\x65\164\145\x64", self::class), $aokagokqyuysuksm);
            goto akcqguucucewaqws;
            caskqicqwmyuugku:
            if (!$this->ueaumcyiwwkeueag($aokagokqyuysuksm, $mksyucucyswaukig)) {
                goto ukcukckucsyaggmw;
            }
            goto assyuumuuuocycyy;
            akcqguucucewaqws:
            aikukgimkamkgwsu:
            goto akycayowsciesmug;
            wksssmewgogkacei:
            $kigowwqauiumummw = $mksyucucyswaukig;
            goto ykcymsoikgqeaukw;
            assyuumuuuocycyy:
            
            if ($mksyucucyswaukig->delete()) {
                goto mwkcmgksoyycumos;
            }
            goto oiueawimuggcqgky;
            ogqaueuweieisowc:
        } catch (Exception $wgaoewqkwgomoaai) {
            $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\146\x61\151\154\145\x64\x5f\x64\145\x6c\x65\164\x65\x5f\157\x62\x6a\x65\x63\164", self::class), $aokagokqyuysuksm);
        }
        goto oiguycsiaweycioe;
        isumwussqyqawwmy:
        return $kigowwqauiumummw;
        goto ksaimkacqesiguyg;
        eskmkooukwwieuke:
        $yciaosuiyeieceug = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x63\x61\x6e\x5f\144\145\x6c\145\164\145\x5f\157\142\152\145\x63\x74", self::class), true, $mksyucucyswaukig, $cwwowqyuwccuykom);
        goto muaigwwqgsgowgkk;
        muaigwwqgsgowgkk:
        if (!$yciaosuiyeieceug) {
            goto yaokowamwsaggege;
        }
        goto imgyqyeaoawqscae;
        imgyqyeaoawqscae:
        $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x62\x65\146\x6f\x72\145\x5f\144\145\154\145\x74\x65\137\x6f\142\152\x65\143\164", self::class), $mksyucucyswaukig, $aokagokqyuysuksm);
        goto isssemmuiiaewiwi;
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
        euuoiciaiieoqyws:
        return $ueeagokqmgisgauy;
        goto wcmksyiisiciasko;
        oegcoaeyokkgoqyg:
        $this->validationErrors = [];
        goto euuoiciaiieoqyws;
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
        ekwsguueioyegqkc:
        $iggwcmkgmicmouyu = true;
        goto ooceggceowgoacyu;
        ooceggceowgoacyu:
        $kigowwqauiumummw = false;
        goto gwmauwgkiomyggmu;
        qmkmuwomcwygkysi:
        ziggykossqqayaki:
        goto iaiooeockccgaaiq;
        aaeuuccoyyuqkouc:
        return ["\x6f\x62\152\145\x63\164" => $mksyucucyswaukig, $ceiwsaacewygcsqg => ManipulateArray::get($mksyucucyswaukig, $ceiwsaacewygcsqg), self::ERRORS => $this->skwiagoagiyswgay(), self::SUCCESS => $kigowwqauiumummw];
        goto skoscsikiaakokqe;
        wguccgmciesyocmi:
        try {
            goto aiociqsiiwguaywy;
            gosaiqsaqksagqsg:
            $this->iasywwkguyauiywu($mksyucucyswaukig, $icwicymcioeyeyek);
            goto wuuucygsmqmsiyoi;
            wuuucygsmqmsiyoi:
            $kuuugksiksqcaaaa = $this->gkieuyoqcusoksmg($icwicymcioeyeyek, $mksyucucyswaukig);
            goto gwkumgocycceogce;
            ckmycmakimaeygcu:
            
            if ($mksyucucyswaukig->save()) {
                goto ugoeueisekcsquug;
            }
            goto cecaekugyecciwcg;
            wiciqigmosmkkmwk:
            $mksyucucyswaukig = $this->qmqogusoaqeygewm($mksyucucyswaukig);
            goto ckmycmakimaeygcu;
            yqaacqqyisoewkqq:
            $this->scmmymqkoyckgkam($mksyucucyswaukig);
            goto mseimosiimuuceoa;
            eyyamwsogeqwamug:
            $mksyucucyswaukig = new $egkyssmuqcwaciya();
            goto oqccquoqqkkaqksk;
            wyoqmwcsuewswiua:
            goto koueosuswmucsaec;
            goto gggkwgcemqeckcse;
            mseimosiimuuceoa:
            koueosuswmucsaec:
            goto scaoisaaceiaweoe;
            someqooawckycwao:
            $iggwcmkgmicmouyu = false;
            goto ymwckeawsukyukqs;
            aiociqsiiwguaywy:
            $aokagokqyuysuksm = (int) ManipulateArray::get($icwicymcioeyeyek, $ceiwsaacewygcsqg);
            goto isomygcucicwccgy;
            scaoisaaceiaweoe:
            wyqmackmyaikcggs:
            goto mcgcqaiwmkewmwue;
            gaikqsuyumumsesg:
            if (!$kuuugksiksqcaaaa) {
                goto igkeawygswqouuym;
            }
            goto uwiaeuuiaimugqys;
            iougqueaywwucoko:
            acuyqioeqaoeskya:
            goto someqooawckycwao;
            cecaekugyecciwcg:
            $mksyucucyswaukig = null;
            goto wyoqmwcsuewswiua;
            wouekamwmcuguaoa:
            goto ukkmusemcqayowoa;
            goto iougqueaywwucoko;
            gwkumgocycceogce:
            ukkmusemcqayowoa:
            goto swkysimqcqkikmgy;
            ayamqyqegiuausko:
            $kigowwqauiumummw = true;
            goto aqcuimcoqmsiygwk;
            wsmkoikacqsiweuw:
            $kuuugksiksqcaaaa = $this->gkieuyoqcusoksmg($icwicymcioeyeyek);
            goto gaikqsuyumumsesg;
            ymwckeawsukyukqs:
            $mksyucucyswaukig = $this->cyyiiykmaeuqqgok($aokagokqyuysuksm);
            goto gosaiqsaqksagqsg;
            aqcuimcoqmsiygwk:
            $this->qiwiemuiqiugqqqg($mksyucucyswaukig, $icwicymcioeyeyek);
            goto yqaacqqyisoewkqq;
            isomygcucicwccgy:
            if ($aokagokqyuysuksm) {
                goto acuyqioeqaoeskya;
            }
            goto wcaeyoeeuiqqgqou;
            uwiaeuuiaimugqys:
            $egkyssmuqcwaciya = self::uqggkiomyiceyooa();
            goto eyyamwsogeqwamug;
            swkysimqcqkikmgy:
            if (!($kuuugksiksqcaaaa && $mksyucucyswaukig instanceof Model)) {
                goto wyqmackmyaikcggs;
            }
            goto cwyauqoosqaoaoki;
            gggkwgcemqeckcse:
            ugoeueisekcsquug:
            goto ayamqyqegiuausko;
            oqccquoqqkkaqksk:
            igkeawygswqouuym:
            goto wouekamwmcuguaoa;
            wcaeyoeeuiqqgqou:
            $iggwcmkgmicmouyu = true;
            goto wsmkoikacqsiweuw;
            cwyauqoosqaoaoki:
            $mksyucucyswaukig = $this->ckcicmwwiccamyqk($this, $mksyucucyswaukig, $icwicymcioeyeyek);
            goto wiciqigmosmkkmwk;
            mcgcqaiwmkewmwue:
        } catch (Exception $wgaoewqkwgomoaai) {
            goto gecywkyeskagueqm;
            guackgkaeswkcaoq:
            qscmokiskqyuswqo:
            goto wyoouquciqoosuim;
            qmwmasuoyuwmcigw:
            $kigowwqauiumummw = false;
            goto guackgkaeswkcaoq;
            gecywkyeskagueqm:
            $this->kmsyisgakgwscyey($this->kyacickkomkioeyu($wgaoewqkwgomoaai));
            goto yckkwcimmakkieos;
            wcgoiisqmmawuiag:
            sswmueweogqkqumq:
            goto ewiwaeckgqaiwgio;
            oqkcuegyumswqekg:
            try {
                
                $mksyucucyswaukig->delete();
            } catch (Exception $wgaoewqkwgomoaai) {
            }
            goto wcgoiisqmmawuiag;
            ewiwaeckgqaiwgio:
            $mksyucucyswaukig = null;
            goto qmwmasuoyuwmcigw;
            ekwmcssqowkcoyci:
            if (!$iggwcmkgmicmouyu) {
                goto sswmueweogqkqumq;
            }
            goto oqkcuegyumswqekg;
            yckkwcimmakkieos:
            if (!$kigowwqauiumummw) {
                goto qscmokiskqyuswqo;
            }
            goto ekwmcssqowkcoyci;
            wyoouquciqoosuim:
        }
        goto qmkmuwomcwygkysi;
        qcmakskemmcgaeyg:
        if (!$siykeiywomwwuoiw) {
            goto sooqqqougsgcumko;
        }
        goto msayswiykqokmuqa;
        msayswiykqokmuqa:
        if ($cwwowqyuwccuykom) {
            goto augyqmcwawmsykme;
        }
        goto yeacwagosugscqcg;
        coqycqiqgwkgkymo:
        $ceiwsaacewygcsqg = $this->kumuygiiqswoyasy();
        goto qcmakskemmcgaeyg;
        iaiooeockccgaaiq:
        sooqqqougsgcumko:
        goto aaeuuccoyyuqkouc;
        aigseumaammwaqck:
        augyqmcwawmsykme:
        goto ggqqwysyuqiwksgm;
        yeacwagosugscqcg:
        $kuuugksiksqcaaaa = $this->kuuugksiksqcaaaa($icwicymcioeyeyek);
        goto aigseumaammwaqck;
        ggqqwysyuqiwksgm:
        if (!$this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x6f\x72\x6d\137\x70\x65\162\163\151\163\164\137\157\162\x5f\165\160\x64\141\x74\145\x5f\166\141\x6c\x69\144\x61\x74\x69\x6f\x6e"), $kuuugksiksqcaaaa, $icwicymcioeyeyek, $this)) {
            goto ziggykossqqayaki;
        }
        goto wguccgmciesyocmi;
        syaqwysmymkgkcuu:
        $siykeiywomwwuoiw = $this->gqaysymikgeawkqa();
        goto coqycqiqgwkgkymo;
        ekcwasmkccgmogmy:
        $mksyucucyswaukig = null;
        goto ekwsguueioyegqkc;
        gwmauwgkiomyggmu:
        $kuuugksiksqcaaaa = true;
        goto syaqwysmymkgkcuu;
        skoscsikiaakokqe:
    }
    
    public function scmmymqkoyckgkam($mksyucucyswaukig)
    {
    }
    
    public function iysseyicgouwysgk($mksyucucyswaukig) : ?string
    {
        return '';
    }
    
    public function mayuaaqmsqeyayyg($mksyucucyswaukig, $qqomumygoacsmsie = "\163\x68\x6f\167") : ?string
    {
        goto skkqqcysscikmmik;
        yuqowmmcwscosmgy:
        $iwywmkygwewiamwm = $this->uesweuocqoywoyms($aokagokqyuysuksm);
        goto iyekyouiiwcsewgy;
        ekoeysiuqeggaqku:
        return $pkyyagewkiyckmwy;
        goto sqcoigaqqssykoui;
        oiissisqowcgwiyc:
        if (!$iwywmkygwewiamwm) {
            goto yqisgseiimwmoeee;
        }
        goto ugqeagqqaucqkcys;
        cmogamaycywckuim:
        $pkyyagewkiyckmwy = $this->iysseyicgouwysgk($mksyucucyswaukig);
        goto oiissisqowcgwiyc;
        yywgsissmueymcmg:
        $aokagokqyuysuksm = ManipulateArray::get($mksyucucyswaukig, $this->kumuygiiqswoyasy());
        goto yuqowmmcwscosmgy;
        iyekyouiiwcsewgy:
        switch ($qqomumygoacsmsie) {
            case "\163\150\x6f\x77":
                $iwywmkygwewiamwm = $this->uesweuocqoywoyms($aokagokqyuysuksm);
                goto skysqikkawmaoase;
            case "\x65\x64\x69\164":
                $iwywmkygwewiamwm = $this->yyykkcyiksewsoqy($aokagokqyuysuksm);
                goto skysqikkawmaoase;
        }
        goto sqsksyaqsweqiyci;
        oewsoauskqoqmiqa:
        $mksyucucyswaukig = $this->akkkoiiymmamsauc($mksyucucyswaukig);
        goto sgaoyyoooykieusg;
        skkqqcysscikmmik:
        if (!is_numeric($mksyucucyswaukig)) {
            goto icyuwesuyoimomqs;
        }
        goto oewsoauskqoqmiqa;
        ywiugkwcqkomgucy:
        yqisgseiimwmoeee:
        goto ekoeysiuqeggaqku;
        sqsksyaqsweqiyci:
        ksksqwcyqoqgmgke:
        goto guwyuigmkeeqssgw;
        sgaoyyoooykieusg:
        icyuwesuyoimomqs:
        goto yywgsissmueymcmg;
        ugqeagqqaucqkcys:
        $pkyyagewkiyckmwy = $this->geyuyukmwaoksywa($iwywmkygwewiamwm, $pkyyagewkiyckmwy);
        goto ywiugkwcqkomgucy;
        guwyuigmkeeqssgw:
        skysqikkawmaoase:
        goto cmogamaycywckuim;
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
        mawqcoscmcqkoskk:
        cwaqmauwsyugsieo:
        goto wmiysuwsmawyogmu;
        omuskqikewygsuuu:
        $meywaqqsugaoeyys = $aaqqkgyougeiueyq->uecyuoauykiqqkey()::symcgieuakksimmu();
        goto kqumggcumkiygaya;
        kmasgsycmswqoeii:
        goto iuageyamssqwqqyw;
        goto ccikqgeseseueseo;
        syiwwokguucmgsyy:
        wkmsuekwweweqoys:
        goto mawqcoscmcqkoskk;
        yckkkceuiuiaucce:
        $icwicymcioeyeyek = $this->iscemaoqqckmkago($qgoqiacsiccwoawi, $mksyucucyswaukig);
        goto smeocsiuyouseuqo;
        yqmygsgkwmkeyqmm:
        if (!$aaqqkgyougeiueyq instanceof Foreign) {
            goto cwaqmauwsyugsieo;
        }
        goto omuskqikewygsuuu;
        uwiqeuqyaseimcyk:
        $pkyyagewkiyckmwy = $meywaqqsugaoeyys->mayuaaqmsqeyayyg($icwicymcioeyeyek);
        goto aeieoesqsyiqwkkk;
        aeieoesqsyiqwkkk:
        iuageyamssqwqqyw:
        goto syiwwokguucmgsyy;
        uqkmkmmikmaqkgym:
        $aaqqkgyougeiueyq = $this->oyeskqayoscwciem()->uqeoyqiwywwmsiew($qgoqiacsiccwoawi);
        goto yckkkceuiuiaucce;
        wmiysuwsmawyogmu:
        return $pkyyagewkiyckmwy;
        goto uoieeoimcawgsacs;
        smeocsiuyouseuqo:
        $pkyyagewkiyckmwy = '';
        goto yqmygsgkwmkeyqmm;
        kqumggcumkiygaya:
        if (!$meywaqqsugaoeyys instanceof Model) {
            goto wkmsuekwweweqoys;
        }
        goto siuwcesauyyweaky;
        wucomycmoigosose:
        $pkyyagewkiyckmwy = $meywaqqsugaoeyys->iysseyicgouwysgk($icwicymcioeyeyek);
        goto kmasgsycmswqoeii;
        ccikqgeseseueseo:
        mkmasewiiuocaekm:
        goto uwiqeuqyaseimcyk;
        uoieeoimcawgsacs:
    }
    
    public function iscemaoqqckmkago($iceamweyeeiwiucs, $mksyucucyswaukig = null, $wkkweuacukumqmya = "\52", $uoomaookgsyciacm = [])
    {
        goto ysicqksgomomkoek;
        ysicqksgomomkoek:
        $essikcmqiyqaqoaq = [];
        goto ocgsiomyyckcausy;
        ccegsywqocccgegu:
        return $essikcmqiyqaqoaq;
        goto swqkyoemiswegyci;
        ocgsiomyyckcausy:
        try {
            goto qqyegacwyoqqqqwy;
            omaswaiucwamaywi:
            csimcqggmigoacwk:
            goto ieewmicwgqaigeqi;
            ouokmaemueykkiqq:
            suykumskkmicioig:
            goto mgiykamgwsemmiio;
            qmqsgkwueccwgsqa:
            return $meywaqqsugaoeyys->akkkoiiymmamsauc(ManipulateArray::get($mksyucucyswaukig, $iceamweyeeiwiucs), $meywaqqsugaoeyys->kumuygiiqswoyasy());
            goto iiceuymgyemuaciy;
            okygssymuimommeg:
            $meywaqqsugaoeyys = $aaqqkgyougeiueyq->uecyuoauykiqqkey()::symcgieuakksimmu();
            goto qiekksmyigmwmiws;
            eaisogogsygugsqi:
            $ayegqaqygsqsmews = $this->mgacegaoeamymmya($iceamweyeeiwiucs, $mksyucucyswaukig);
            goto usiqksiiiqgokuaq;
            wasacacaowicmiyw:
            $aaqqkgyougeiueyq = $this->oyeskqayoscwciem()->uqeoyqiwywwmsiew($iceamweyeeiwiucs);
            goto oksouuguouqowuyq;
            oksouuguouqowuyq:
            if (!($aaqqkgyougeiueyq instanceof Foreign && ($aaqqkgyougeiueyq->wmomygggskkoqess() || $aaqqkgyougeiueyq->eiyqqesoywqkegwu()))) {
                goto kysaoseimkmckcoc;
            }
            goto okygssymuimommeg;
            qqyegacwyoqqqqwy:
            if ($iceamweyeeiwiucs instanceof Relation) {
                goto csimcqggmigoacwk;
            }
            goto wasacacaowicmiyw;
            uaaiuqickwysiqiy:
            sqkuwuwiceguscku:
            goto iioauiogmamumiym;
            iiceuymgyemuaciy:
            gmckgcsamacayoiy:
            goto qsgagomkgqcmscyu;
            ieewmicwgqaigeqi:
            $ayegqaqygsqsmews = $iceamweyeeiwiucs;
            goto ouokmaemueykkiqq;
            iioauiogmamumiym:
            if (!$ayegqaqygsqsmews) {
                goto iscaisuqmaikumko;
            }
            goto gmwcqkgsaesmsuea;
            gmwcqkgsaesmsuea:
            $essikcmqiyqaqoaq = $ayegqaqygsqsmews->get($wkkweuacukumqmya)->sacmkccceuywoqsq();
            goto cgkaoiyoqwmkaqck;
            iwkyewqeogaamiou:
            if (!$uoomaookgsyciacm) {
                goto sqkuwuwiceguscku;
            }
            goto yqqwweuisgoskcwa;
            cgkaoiyoqwmkaqck:
            iscaisuqmaikumko:
            goto suokacgwamyumagy;
            yqqwweuisgoskcwa:
            $ayegqaqygsqsmews = $this->kqewyqqqiyiouaou($uoomaookgsyciacm, $ayegqaqygsqsmews);
            goto uaaiuqickwysiqiy;
            qsgagomkgqcmscyu:
            kysaoseimkmckcoc:
            goto eaisogogsygugsqi;
            qiekksmyigmwmiws:
            if (!$meywaqqsugaoeyys instanceof Model) {
                goto gmckgcsamacayoiy;
            }
            goto qmqsgkwueccwgsqa;
            usiqksiiiqgokuaq:
            goto suykumskkmicioig;
            goto omaswaiucwamaywi;
            suokacgwamyumagy:
            yuciwasueswewmqw:
            goto gscckcagyggagway;
            mgiykamgwsemmiio:
            if (!$ayegqaqygsqsmews) {
                goto yuciwasueswewmqw;
            }
            goto iwkyewqeogaamiou;
            gscckcagyggagway:
        } catch (Exception $wgaoewqkwgomoaai) {
        }
        goto ccegsywqocccgegu;
        swqkyoemiswegyci:
    }
    
    public function mgacegaoeamymmya($ymaogssqccumcyqa, $mksyucucyswaukig = null) : ?Relation
    {
        goto cuyaakuucgwmcuqq;
        ewcyigsymwuuogci:
        
        $ayegqaqygsqsmews = $mksyucucyswaukig->hasMany($egkyssmuqcwaciya);
        goto auauyoooouqkickk;
        qgmgmkeiemcqkyim:
        if (!$mksyucucyswaukig instanceof Model) {
            goto iysiwmeymsoucaka;
        }
        goto oqoogougwwcqeimq;
        uaiqqcsoksgukasg:
        okeecmwsuoikguuo:
        goto iqyqgqwwaaigmuou;
        cecamogauimuwoow:
        
        $ayegqaqygsqsmews = $mksyucucyswaukig->morphToMany($egkyssmuqcwaciya, $mgugyyocqwmeeuai);
        goto ygqqeqgiaasoimgs;
        gsiagogeoqwqekei:
        cwoaockwkoukuwae:
        goto yuccckoykmccwyce;
        cwomucmeuqqucyge:
        $egkyssmuqcwaciya = $aaqqkgyougeiueyq->uecyuoauykiqqkey();
        goto eguukwmoyaaieuww;
        ukyoyoqcyywgaywg:
        ceesgeawumeqkcic:
        goto ugowokkqeoeugkqe;
        woqsaqwocioumoeu:
        
        $ayegqaqygsqsmews = $mksyucucyswaukig->belongsTo($egkyssmuqcwaciya);
        goto ukyoyoqcyywgaywg;
        qmqumgawyyqqamoa:
        qiyiyuwmuoamwccs:
        goto ewcyigsymwuuogci;
        ywykuacciwwkwmmy:
        $mgugyyocqwmeeuai = $aaqqkgyougeiueyq->mwikyscisascoeea();
        goto qgcgucmskokqquwk;
        yuccckoykmccwyce:
        goto eicuywagooikuusg;
        goto goqkegseiummeiak;
        ugowokkqeoeugkqe:
        goto akkmaiaiamyaikqe;
        goto qmqumgawyyqqamoa;
        eguukwmoyaaieuww:
        if ($aaqqkgyougeiueyq->gumeeckcowwoyoci()) {
            goto qiyiyuwmuoamwccs;
        }
        goto kqkeomoaociyuoye;
        kswkouussqmqsssy:
        if ($aaqqkgyougeiueyq->wmomygggskkoqess()) {
            goto ksyukmeagigokcgi;
        }
        goto emomkqccysciiqya;
        ismoiisskiwmmmiu:
        
        $ayegqaqygsqsmews = $mksyucucyswaukig->morphedByMany($egkyssmuqcwaciya, $mgugyyocqwmeeuai);
        goto oikomikqcwikimkw;
        swkukukimeueycaq:
        $mksyucucyswaukig = $this->cyyiiykmaeuqqgok($aokagokqyuysuksm);
        goto ccqkugckigeckeqa;
        auauyoooouqkickk:
        akkmaiaiamyaikqe:
        goto egcsskmsysqiiikm;
        uwmgacqaowuguiow:
        iwycgkausoseqmwu:
        goto cecamogauimuwoow;
        wgeskeagymiuoigi:
        if ($aaqqkgyougeiueyq->iueigwuckeaswyuu()) {
            goto pmaiksascsegweci;
        }
        goto mcoyaaiggymgcsgq;
        ckmkeuakisiukage:
        
        $ayegqaqygsqsmews = $mksyucucyswaukig->hasOne($egkyssmuqcwaciya);
        goto uaiqqcsoksgukasg;
        oqoogougwwcqeimq:
        $aaqqkgyougeiueyq = $this->oyeskqayoscwciem()->uqeoyqiwywwmsiew($ymaogssqccumcyqa);
        goto eqiiqamuyewoowwy;
        mogomwoquuesmcec:
        iysiwmeymsoucaka:
        goto akiuyguwqaukuugs;
        gsgocqicesmaecse:
        if ($mksyucucyswaukig instanceof Model) {
            goto uwswkegomekswkus;
        }
        goto oskwwcgyuwkiuacu;
        oskwwcgyuwkiuacu:
        $aokagokqyuysuksm = ManipulateArray::get($mksyucucyswaukig, $this->kumuygiiqswoyasy());
        goto qsecoiqswyiseake;
        egcsskmsysqiiikm:
        iiikyaquagwawkce:
        goto mogomwoquuesmcec;
        eqiiqamuyewoowwy:
        if (!$aaqqkgyougeiueyq instanceof Foreign) {
            goto iiikyaquagwawkce;
        }
        goto cwomucmeuqqucyge;
        kqkeomoaociyuoye:
        if ($aaqqkgyougeiueyq->eiyqqesoywqkegwu()) {
            goto iquykqikookaokgq;
        }
        goto kswkouussqmqsssy;
        qsecoiqswyiseake:
        if (!$mksyucucyswaukig) {
            goto yuqiqaquoygggoqc;
        }
        goto swkukukimeueycaq;
        waaammoiumecaiys:
        uwswkegomekswkus:
        goto qgmgmkeiemcqkyim;
        qgcgucmskokqquwk:
        if ($aaqqkgyougeiueyq->iueigwuckeaswyuu()) {
            goto iwycgkausoseqmwu;
        }
        goto ismoiisskiwmmmiu;
        iuoqiecqaoosioey:
        iquykqikookaokgq:
        goto woqsaqwocioumoeu;
        iqyqgqwwaaigmuou:
        eicuywagooikuusg:
        goto sqmgqacueqiiekay;
        wcqyakkqcgmeqaag:
        goto okeecmwsuoikguuo;
        goto coygueuwyguuciww;
        mcoyaaiggymgcsgq:
        
        $ayegqaqygsqsmews = $mksyucucyswaukig->belongsTo($egkyssmuqcwaciya);
        goto wcqyakkqcgmeqaag;
        oikomikqcwikimkw:
        goto aeoiiewygoiwuiii;
        goto uwmgacqaowuguiow;
        ygqqeqgiaasoimgs:
        aeoiiewygoiwuiii:
        goto gsiagogeoqwqekei;
        sqmgqacueqiiekay:
        goto ceesgeawumeqkcic;
        goto iuoqiecqaoosioey;
        coygueuwyguuciww:
        pmaiksascsegweci:
        goto ckmkeuakisiukage;
        cuyaakuucgwmcuqq:
        $ayegqaqygsqsmews = null;
        goto gsgocqicesmaecse;
        akiuyguwqaukuugs:
        return $ayegqaqygsqsmews;
        goto emiyocoiuwcucuwu;
        emomkqccysciiqya:
        if (!$aaqqkgyougeiueyq->ygswmewosceowmya()) {
            goto cwoaockwkoukuwae;
        }
        goto ywykuacciwwkwmmy;
        ccqkugckigeckeqa:
        yuqiqaquoygggoqc:
        goto waaammoiumecaiys;
        goqkegseiummeiak:
        ksyukmeagigokcgi:
        goto wgeskeagymiuoigi;
        emiyocoiuwcucuwu:
    }
    
    public function qiwiemuiqiugqqqg(Model $mksyucucyswaukig, $icwicymcioeyeyek)
    {
        foreach ($icwicymcioeyeyek as $uusmaiomayssaecw => $qqswgiawgeaeoecu) {
            goto ssoooeigmwugyycm;
            aeywmsqkisycgqce:
            if (!$egkyssmuqcwaciya) {
                goto aqoyesawuayoeuag;
            }
            goto mawsaauyquacosus;
            owwwikwqsyakweeq:
            ewugkyumwuomukie:
            goto awmyoukmqymausgu;
            ikwamukqumiokwkk:
            if (!is_numeric($qqswgiawgeaeoecu)) {
                goto ewugkyumwuomukie;
            }
            goto uueyawewomkuiiwc;
            symwoekuwqcmowwo:
            if ($aaqqkgyougeiueyq->wmomygggskkoqess()) {
                goto awwwoikmmaisyisy;
            }
            goto emsuycioaeoeeeqo;
            ioaeiakqkiuqymoq:
            $miowmmgaiagcuyoo = $kooyscwkscsogysg->cyyiiykmaeuqqgok($qqswgiawgeaeoecu);
            goto cssysqmcgcuwyyuu;
            wqcquwuiqkqaoamo:
            if (!$csamwuowsigosqys instanceof Model) {
                goto qquugwwesqswouyc;
            }
            goto csueasskicaaoaii;
            oukacgcyoiggqosq:
            $myqeggyewswyoowe = [];
            goto usiiuuommggemcke;
            makqqsaegsesgquq:
            $gqkcqoaumsuwkqom = $kooyscwkscsogysg->primaryKey;
            goto symwoekuwqcmowwo;
            uyisqeuweamsqwgg:
            if (!$aaqqkgyougeiueyq instanceof Foreign) {
                goto agoikageaeouqaqi;
            }
            goto icasgckmuawkaksg;
            awmyoukmqymausgu:
            wwigiswokyqkamsu:
            goto eicuoesagiuykmos;
            cuqusekekewuseio:
            aqoyesawuayoeuag:
            goto qqowguycmsmuauyu;
            uueyawewomkuiiwc:
            $csamwuowsigosqys = $kooyscwkscsogysg->cyyiiykmaeuqqgok($qqswgiawgeaeoecu);
            goto wqcquwuiqkqaoamo;
            yoeaiskyyqgqiwga:
            if ($aaqqkgyougeiueyq->iueigwuckeaswyuu()) {
                goto aegiwggkecgaiocs;
            }
            goto ioaeiakqkiuqymoq;
            cwkwkgkqasguwscg:
            if (!$kooyscwkscsogysg instanceof Model) {
                goto essokuoguqegyeua;
            }
            goto makqqsaegsesgquq;
            igewmkyikyaiamsq:
            
            $miowmmgaiagcuyoo->hasOne($accumooemgmowewu)->save($mksyucucyswaukig);
            goto guosgucaaeueacgu;
            aimaqcomigwccomu:
            smmgkqeacswimyas:
            goto osawsyawkikquqya;
            syggoyqwycmmcuck:
            qquugwwesqswouyc:
            goto owwwikwqsyakweeq;
            qqowguycmsmuauyu:
            agoikageaeouqaqi:
            goto yseacqgykcseamce;
            yyousguikogqkecs:
            
            $csamwuowsigosqys->hasMany($swmgqkqyqcgemack)->save($mksyucucyswaukig);
            goto syggoyqwycmmcuck;
            cmsgssaekakgcqmg:
            if (!$myqeggyewswyoowe) {
                goto smmgkqeacswimyas;
            }
            goto ckscysysmayieagk;
            emsuycioaeoeeeqo:
            if ($aaqqkgyougeiueyq->gumeeckcowwoyoci()) {
                goto iqicwseckoykqowm;
            }
            goto koaeayomowaiywam;
            ogwosuisocqykoma:
            cuamsmyiamaicwou:
            goto rwaeioueucocosgu;
            guosgucaaeueacgu:
            ummsowuaoeyusgoq:
            goto wowakayqsywcaogm;
            yseacqgykcseamce:
            uceksuykgsckwwsu:
            goto xkgykmoskoqykakc;
            wowakayqsywcaogm:
            aegiwggkecgaiocs:
            goto ogwosuisocqykoma;
            aesgakksmyecsusi:
            $accumooemgmowewu = $mksyucucyswaukig::uqggkiomyiceyooa();
            goto igewmkyikyaiamsq;
            osawsyawkikquqya:
            kmwwamokwgagomye:
            goto cgoqqicyaiwasqme;
            ckagywkumgkaswyy:
            goto cuamsmyiamaicwou;
            goto oswgoyqaacoyqegu;
            cgoqqicyaiwasqme:
            yisooseceggsgyqw:
            goto ckagywkumgkaswyy;
            ssoooeigmwugyycm:
            $aaqqkgyougeiueyq = $this->oyeskqayoscwciem()->uqeoyqiwywwmsiew($uusmaiomayssaecw);
            goto uyisqeuweamsqwgg;
            ckscysysmayieagk:
            
            $mksyucucyswaukig->hasMany($egkyssmuqcwaciya)->saveMany($myqeggyewswyoowe);
            goto aimaqcomigwccomu;
            mkauomqacwwmyigy:
            gamuuauwykwgaegc:
            goto cmsgssaekakgcqmg;
            cssysqmcgcuwyyuu:
            if (!$miowmmgaiagcuyoo instanceof Model) {
                goto ummsowuaoeyusgoq;
            }
            goto aesgakksmyecsusi;
            oswgoyqaacoyqegu:
            awwwoikmmaisyisy:
            goto yoeaiskyyqgqiwga;
            aagewueuesckuqke:
            foreach ($qqswgiawgeaeoecu as $eqgoocgaqwqcimie) {
                goto csmmiwegweusuimi;
                iiwcuqeosmwgogus:
                ikgwcgcgcaaaskig:
                goto uqsoseuiwgukywas;
                syaegaiuaioeaocq:
                goto ikgwcgcgcaaaskig;
                goto ckkecwwioeywccwa;
                ckkecwwioeywccwa:
                eemgoyuiauwuomcw:
                goto koceayskwssiisyi;
                uqsoseuiwgukywas:
                if (!$msqyiyqkassmkgce) {
                    goto amcqceoiqgmwisce;
                }
                goto wgaggmmmgeumiouk;
                csmmiwegweusuimi:
                if ($aokagokqyuysuksm = ManipulateArray::get($eqgoocgaqwqcimie, $gqkcqoaumsuwkqom, $qqswgiawgeaeoecu)) {
                    goto eemgoyuiauwuomcw;
                }
                goto imsougccawciqsuw;
                uawcmuiummigeqea:
                smeeigiqmommceye:
                goto qmmieiquoegeaqok;
                wgaggmmmgeumiouk:
                $myqeggyewswyoowe[] = $msqyiyqkassmkgce;
                goto cwkouaeieiyiykim;
                imsougccawciqsuw:
                $msqyiyqkassmkgce = $kooyscwkscsogysg->ciqgsyoasskoiukm($eqgoocgaqwqcimie);
                goto syaegaiuaioeaocq;
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
            koaeayomowaiywam:
            if (!$aaqqkgyougeiueyq->eiyqqesoywqkegwu()) {
                goto wwigiswokyqkamsu;
            }
            goto ikwamukqumiokwkk;
            usiiuuommggemcke:
            if (!is_array($qqswgiawgeaeoecu)) {
                goto kmwwamokwgagomye;
            }
            goto aagewueuesckuqke;
            eqkaikmaegscweqq:
            iqicwseckoykqowm:
            goto oukacgcyoiggqosq;
            mawsaauyquacosus:
            $kooyscwkscsogysg = $egkyssmuqcwaciya::symcgieuakksimmu();
            goto cwkwkgkqasguwscg;
            csueasskicaaoaii:
            $swmgqkqyqcgemack = self::uqggkiomyiceyooa();
            goto yyousguikogqkecs;
            icasgckmuawkaksg:
            $egkyssmuqcwaciya = $aaqqkgyougeiueyq->uecyuoauykiqqkey();
            goto aeywmsqkisycgqce;
            eicuoesagiuykmos:
            goto yisooseceggsgyqw;
            goto eqkaikmaegscweqq;
            rwaeioueucocosgu:
            essokuoguqegyeua:
            goto cuqusekekewuseio;
            xkgykmoskoqykakc:
        }
        cyikoqssoemgwyyk:
    }
    
    public function gkieuyoqcusoksmg($icwicymcioeyeyek, $mksyucucyswaukig = null) : bool
    {
        goto sumsswekusmugwcc;
        quoamckmecwqkkus:
        foreach ($icwicymcioeyeyek as $oaukocmsckciqaok => $eqgoocgaqwqcimie) {
            goto iwccwiiumyyccquy;
            kuyeoaemuwcqkoae:
            msegcuqmgweissmw:
            goto cuwasskqkoysieey;
            mqigiiusqaieqeaa:
            $ceiwsaacewygcsqg = $this->kumuygiiqswoyasy();
            goto igeiewqcwieuawms;
            iwccwiiumyyccquy:
            $aaqqkgyougeiueyq = $this->oyeskqayoscwciem()->uqeoyqiwywwmsiew($oaukocmsckciqaok);
            goto swmmiykiawycgoes;
            cuwasskqkoysieey:
            $myagqecycsaiyqsk = $this->akkkoiiymmamsauc($eqgoocgaqwqcimie, $oaukocmsckciqaok);
            goto mqigiiusqaieqeaa;
            swmmiykiawycgoes:
            if (!($aaqqkgyougeiueyq instanceof Field && !$aaqqkgyougeiueyq instanceof Foreign)) {
                goto uwsgccckqqookusc;
            }
            goto zsweawcwmisoogao;
            caiiwysgssyqoouc:
            if (!(!$aaqqkgyougeiueyq->yseywyqacmugimme() && !$eqgoocgaqwqcimie)) {
                goto ckyeeqwsugcoksek;
            }
            goto ycoomucecckyease;
            ycoomucecckyease:
            $this->kmsyisgakgwscyey(sprintf(__("\x25\x73\40\143\141\156\x6e\x27\164\x20\x62\x65\x20\145\155\x70\164\171\54\x20\x70\154\145\141\x73\x65\x20\x66\151\154\x6c\x20\x69\x74\x2e", PR__CMN__FOUNDATION), ManipulateHTML::ciuuiyckmsygceis($aaqqkgyougeiueyq->qcgakseyaikigqco())), $oaukocmsckciqaok);
            goto myegqayeyqaigmqi;
            akuiskwoukoesuou:
            ucuyaouwikuyyemm:
            goto eokgqgsswamgswqu;
            eokgqgsswamgswqu:
            uwsgccckqqookusc:
            goto gcumogmsuuyuwsie;
            qyeewwmuogssaegc:
            komaoacquqwgysgc:
            goto wiaugmimkuikykys;
            asoweekcciigkweo:
            goto siwekyoigwegiosa;
            goto kuyeoaemuwcqkoae;
            myegqayeyqaigmqi:
            $sogksuscggsicmac = false;
            goto qqocmsauqkwoscqy;
            uisaoikyqyseiyas:
            if ($sogksuscggsicmac) {
                goto ucuyaouwikuyyemm;
            }
            goto gqaiqcgwsmyugimu;
            egumckcoaaowkgoy:
            $sogksuscggsicmac = false;
            goto qyeewwmuogssaegc;
            gcumogmsuuyuwsie:
            ksmmosiwmsousgkg:
            goto uyouoeaoqcieeayg;
            zsweawcwmisoogao:
            if ($aaqqkgyougeiueyq->kweqqkiwiugikyam()) {
                goto msegcuqmgweissmw;
            }
            goto caiiwysgssyqoouc;
            igeiewqcwieuawms:
            if (!($myagqecycsaiyqsk && ManipulateArray::get($mksyucucyswaukig, $ceiwsaacewygcsqg) != ManipulateArray::get($myagqecycsaiyqsk, $ceiwsaacewygcsqg))) {
                goto komaoacquqwgysgc;
            }
            goto wuqysikmouuiawwi;
            qqocmsauqkwoscqy:
            ckyeeqwsugcoksek:
            goto asoweekcciigkweo;
            wuqysikmouuiawwi:
            $this->kmsyisgakgwscyey(sprintf(__("\x25\x73\40\151\163\40\x75\x6e\x69\161\165\145\40\141\x6e\x64\40\x65\156\x74\145\162\145\144\x20\166\141\154\x75\145\x20\x61\154\162\x65\141\x64\171\x20\x65\170\x69\163\x74\x2e", PR__CMN__FOUNDATION), ManipulateHTML::ciuuiyckmsygceis($aaqqkgyougeiueyq->qcgakseyaikigqco())), $oaukocmsckciqaok);
            goto egumckcoaaowkgoy;
            wiaugmimkuikykys:
            siwekyoigwegiosa:
            goto uisaoikyqyseiyas;
            gqaiqcgwsmyugimu:
            goto aoiaykkukcyyoaio;
            goto akuiskwoukoesuou;
            uyouoeaoqcieeayg:
        }
        goto suaouieqqoauuwme;
        sumsswekusmugwcc:
        $sogksuscggsicmac = true;
        goto quoamckmecwqkkus;
        suaouieqqoauuwme:
        aoiaykkukcyyoaio:
        goto kewooggoaouemcaq;
        kewooggoaouemcaq:
        return $sogksuscggsicmac;
        goto uwwooikcoamioeaq;
        uwwooikcoamioeaq:
    }
    
    public function ckcicmwwiccamyqk(Model $owgumcsyqsamiemg, Model $mksyucucyswaukig, $icwicymcioeyeyek) : Model
    {
        goto qqcusuaqmyukwyqk;
        souucimemowwaseo:
        qcsceusmgwewumuy:
        goto oqyeyuocsyoeogim;
        oqyeyuocsyoeogim:
        return $mksyucucyswaukig;
        goto egawiicamoykemqq;
        qqcusuaqmyukwyqk:
        foreach ($icwicymcioeyeyek as $oaukocmsckciqaok => $eqgoocgaqwqcimie) {
            goto gsewiomcwceysquc;
            ouyqaaywykeqimmi:
            if (!($aaqqkgyougeiueyq instanceof Field && !$aaqqkgyougeiueyq instanceof Foreign)) {
                goto osgmksikyyqqcaag;
            }
            goto egicsmysugywycqq;
            egicsmysugywycqq:
            if ($aaqqkgyougeiueyq instanceof Json && $eqgoocgaqwqcimie) {
                goto ukuuumkkameeuesk;
            }
            goto migwkuscokgmogea;
            ieyimqciuswcokke:
            $eqgoocgaqwqcimie = wp_json_encode($eqgoocgaqwqcimie);
            goto csismgmuaiogeucq;
            ooiaoiygiiamsmum:
            $eqgoocgaqwqcimie = $eqgoocgaqwqcimie === "\157\x6e";
            goto qkmmgqgcegcuawuu;
            muoougyakwgcicuo:
            yqysciwesgsiuayi:
            goto ywgqeosekkwswyac;
            aqaseyqwkgoyaiyg:
            $mksyucucyswaukig->cmgoqeksagmigwmg($oaukocmsckciqaok, $eqgoocgaqwqcimie);
            goto gkekqmkyumkmywky;
            migwkuscokgmogea:
            if (!$aaqqkgyougeiueyq instanceof Boolean) {
                goto kwwoucisuqcmqmqu;
            }
            goto ooiaoiygiiamsmum;
            gsewiomcwceysquc:
            $aaqqkgyougeiueyq = $owgumcsyqsamiemg->oyeskqayoscwciem()->uqeoyqiwywwmsiew($oaukocmsckciqaok);
            goto ouyqaaywykeqimmi;
            gkekqmkyumkmywky:
            osgmksikyyqqcaag:
            goto muoougyakwgcicuo;
            csismgmuaiogeucq:
            muygyqckegkuiwyi:
            goto aqaseyqwkgoyaiyg;
            auouiegmaiasywkw:
            goto muygyqckegkuiwyi;
            goto ggqmaecmwgeqkuge;
            ggqmaecmwgeqkuge:
            ukuuumkkameeuesk:
            goto ieyimqciuswcokke;
            qkmmgqgcegcuawuu:
            kwwoucisuqcmqmqu:
            goto auouiegmaiasywkw;
            ywgqeosekkwswyac:
        }
        goto souucimemowwaseo;
        egawiicamoykemqq:
    }
    
    public function osymioeiweugcoms($aokagokqyuysuksm, $ymaogssqccumcyqa, $ggauoeuaesiymgee = null)
    {
        return ManipulateArray::get($this->akkkoiiymmamsauc($aokagokqyuysuksm), $ymaogssqccumcyqa, $ggauoeuaesiymgee);
    }
    
    public function kmsyisgakgwscyey($iswcokucwmiosiaq, $uusmaiomayssaecw = null) : self
    {
        goto akkwoqycamwckeui;
        goimqkkiyegggysa:
        $this->validationErrors[] = $iswcokucwmiosiaq;
        goto mkayykckiywayuko;
        kquwekemiawwmuqs:
        ksoygkwycsqicooa:
        goto cgykkwqwamaougme;
        mkayykckiywayuko:
        goto ksoygkwycsqicooa;
        goto wmgyemaskuuowuum;
        wmgyemaskuuowuum:
        qqwukskiymcymgqc:
        goto ssqemoqcimayewqm;
        akkwoqycamwckeui:
        if ($uusmaiomayssaecw) {
            goto qqwukskiymcymgqc;
        }
        goto goimqkkiyegggysa;
        cgykkwqwamaougme:
        return $this;
        goto gcmmgmowsmgwkoye;
        ssqemoqcimayewqm:
        $this->validationErrors[$uusmaiomayssaecw] = $iswcokucwmiosiaq;
        goto kquwekemiawwmuqs;
        gcmmgmowsmgwkoye:
    }
    
    public function dgugskkmsgccgiii($ueeagokqmgisgauy) : self
    {
        goto aqkoqskkimiuyqug;
        kouecqmcueugwcqw:
        ugcaeymeciausmao:
        goto yceksmgauwmiwmsw;
        yceksmgauwmiwmsw:
        return $this;
        goto oseqayimqaycaycw;
        aqkoqskkimiuyqug:
        foreach ($ueeagokqmgisgauy as $uusmaiomayssaecw => $iswcokucwmiosiaq) {
            $this->kmsyisgakgwscyey($iswcokucwmiosiaq, $uusmaiomayssaecw);
            sygekyuywqgiawas:
        }
        goto kouecqmcueugwcqw;
        oseqayimqaycaycw:
    }
    
    public function akkkoiiymmamsauc(?string $eqgoocgaqwqcimie = null, ?string $aiowsaccomcoikus = null, $wkkweuacukumqmya = "\x2a")
    {
        goto oiemkksaoaiyckgi;
        eeyksuucagkaqmsi:
        $wkawwaegamqisugs = null;
        goto ciuwaqyasauagkeu;
        wqameeueegakoqya:
        $siykeiywomwwuoiw = $this->gqaysymikgeawkqa();
        goto eeyksuucagkaqmsi;
        wicqcmuwosqwyggg:
        $aiowsaccomcoikus = $this->kumuygiiqswoyasy();
        goto wwuiwkkgqescsyyw;
        sgoioieqoekqywik:
        omqkeukuycyymmke:
        goto susauskwueokgaku;
        oiemkksaoaiyckgi:
        if ($aiowsaccomcoikus) {
            goto imsmosgqcqgeksws;
        }
        goto wicqcmuwosqwyggg;
        wwuiwkkgqescsyyw:
        imsmosgqcqgeksws:
        goto wqameeueegakoqya;
        susauskwueokgaku:
        return $wkawwaegamqisugs;
        goto usaykyskgyqwquca;
        gakmkuaayakeymaa:
        
        $siykeiywomwwuoiw = $siykeiywomwwuoiw->where($aiowsaccomcoikus, self::EQUAL_SYMBOL, $eqgoocgaqwqcimie);
        goto sucquwgiacwooomw;
        sucquwgiacwooomw:
        $wkawwaegamqisugs = $this->geeumyocaqwwquwk($siykeiywomwwuoiw, $wkkweuacukumqmya);
        goto sgoioieqoekqywik;
        ciuwaqyasauagkeu:
        if (!$siykeiywomwwuoiw) {
            goto omqkeukuycyymmke;
        }
        goto gakmkuaayakeymaa;
        usaykyskgyqwquca:
    }
    
    public function oqomcmyuuakigusk($ikgwqyuyckaewsow = [], $wkkweuacukumqmya = ["\52"])
    {
        return $this->geeumyocaqwwquwk($this->kqewyqqqiyiouaou($ikgwqyuyckaewsow), $wkkweuacukumqmya);
    }
    
    private function geeumyocaqwwquwk($siykeiywomwwuoiw, $wkkweuacukumqmya = ["\x2a"])
    {
        goto mewuwwsmewiimgsi;
        msmcmycooiwwqiik:
        $wkawwaegamqisugs = $this->awkaaqmauiuwwsca($siykeiywomwwuoiw, $wkkweuacukumqmya);
        goto imagiycyokkwucge;
        gaqcesscgywweieq:
        return $wkawwaegamqisugs;
        goto swqwssmgwikmieoa;
        mewuwwsmewiimgsi:
        $wkawwaegamqisugs = null;
        goto iaewsguseweeqcqe;
        iaewsguseweeqcqe:
        if (!$siykeiywomwwuoiw) {
            goto qiamskskowaugckg;
        }
        goto msmcmycooiwwqiik;
        imagiycyokkwucge:
        qiamskskowaugckg:
        goto gaqcesscgywweieq;
        swqwssmgwikmieoa:
    }
    
    public function qumqowkwyaceeqwu($ikgwqyuyckaewsow = []) : bool
    {
        goto qaswkqkwqgqqcyws;
        gsimucysiuikweme:
        if (!$siykeiywomwwuoiw) {
            goto meuaykaqyqkseycs;
        }
        goto ukicwqcoggwiskgo;
        qaswkqkwqgqqcyws:
        $cmaccwokqweqweqi = false;
        goto ekimmsiekwwoawym;
        ukicwqcoggwiskgo:
        
        $cmaccwokqweqweqi = $siykeiywomwwuoiw->exists();
        goto maqmyigowgsmqaco;
        maqmyigowgsmqaco:
        meuaykaqyqkseycs:
        goto eigowcoqoqkwuoiq;
        eigowcoqoqkwuoiq:
        return $cmaccwokqweqweqi;
        goto iqiuaammwkeiamuo;
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
        $meqocwsecsywiiqs = __("\104\x65\x6c\x65\x74\145", PR__CMN__FOUNDATION);
        return ManipulateHTML::uskieqmcqyecigmy(["\x74\x79\x70\x65" => "\x65\162\162\157\x72", "\x74\x69\164\154\x65" => $meqocwsecsywiiqs, "\143\157\156\164\x65\x6e\x74" => __("\101\x72\145\40\x79\157\165\40\x73\x75\162\x65\x20\x79\x6f\165\x20\x77\141\x6e\164\40\164\157\40\144\x65\154\x65\164\145\40\x74\x68\151\x73\x20\x69\164\145\155\77", PR__CMN__FOUNDATION), "\142\165\x74\x74\157\156\x73" => ["\143\141\156\143\x65\x6c", ["\x68\x72\x65\x66" => $iwywmkygwewiamwm, "\x63\x6c\x61\x73\163" => "\x70\162\x2d\x6f\x72\x6d\x2d\x61\143\164\x69\157\156\x20\142\x74\x6e\40\142\164\156\55\160\162\x69\155\141\x72\171", "\164\151\x74\154\145" => $meqocwsecsywiiqs, "\144\151\163\x6d\151\163\x73" => true]]]);
    }
    
    public function rkmkouiquumiecqy($iwywmkygwewiamwm) : string
    {
        $meqocwsecsywiiqs = __("\104\x65\154\x65\164\x65", PR__CMN__FOUNDATION);
        return ManipulateHTML::uuccukgasskgimsq("\141", ["\x68\162\145\x66" => "\43", "\143\x6c\141\163\163" => "\x73\x75\142\x6d\x69\164\144\145\154\145\164\x65\40\x70\162\x2d\143\x6f\156\146\x69\x72\x6d\x61\x62\154\x65\x2d\x61\x63\164\151\157\x6e", "\x64\141\x74\x61\x2d\143\x6f\156\x66\x69\x67" => $this->ymaommgoigkakyes($iwywmkygwewiamwm)], $meqocwsecsywiiqs);
    }
    
    public function aaeswuecycyquqwk($siykeiywomwwuoiw, $qsyooiqcmkcieyuk)
    {
        return $siykeiywomwwuoiw;
    }
    
    public function eukyqwmmeyakcyoo($mksyucucyswaukig, $yygmoeguaqyumuui = []) : array
    {
        goto ciwcwcqkgkmoguok;
        uqqawaaiywcggesu:
        return ManipulateArray::yaeiiwwyckwugsem($oammesyieqmwuwyi);
        goto oamaoeaeoyckwmgk;
        qgeiemoywoccmwgw:
        $qssskwiqeumgkago = $this->oyeskqayoscwciem()->aeosueemgsygqese();
        goto wameiecycmkcuimk;
        cceesacikyckyiim:
        gyaoqaggggoiaoqs:
        goto uqqawaaiywcggesu;
        ciwcwcqkgkmoguok:
        $oammesyieqmwuwyi = [];
        goto ksseoiqcgiqsamwy;
        ecyauwageoukkaaq:
        imygueoqiqikwcws:
        goto cceesacikyckyiim;
        ksseoiqcgiqsamwy:
        if (!($mksyucucyswaukig && $yygmoeguaqyumuui)) {
            goto gyaoqaggggoiaoqs;
        }
        goto qgeiemoywoccmwgw;
        wameiecycmkcuimk:
        foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw => $pkyyagewkiyckmwy) {
            goto gkmgqmcgouseqwyg;
            eocaacmwsqqqauuc:
            if ($aaqqkgyougeiueyq instanceof Field) {
                goto aqwcyyigiukqikui;
            }
            goto maougsuwuoiecwgy;
            emsqksecccqeueoa:
            $uusmaiomayssaecw = ManipulateString::ogimogiceeekegoi($pkyyagewkiyckmwy);
            goto ogmueiimgsogucqa;
            pseqauyuqgmccuwe:
            $sqqewmoeaekuyyas = 1000;
            goto smqeaeiimomewqsw;
            oouisuwokmqgwiau:
            $oammesyieqmwuwyi[$uusmaiomayssaecw] = [self::LABEL => $pkyyagewkiyckmwy, self::VALUE => $eqgoocgaqwqcimie, self::PRIORITY => $sqqewmoeaekuyyas];
            goto wwugkwcimumgukko;
            kyoogyegwukaqoce:
            $aaqqkgyougeiueyq = ManipulateArray::get($qssskwiqeumgkago, $uusmaiomayssaecw);
            goto eocaacmwsqqqauuc;
            gkmgqmcgouseqwyg:
            if (!is_numeric($uusmaiomayssaecw)) {
                goto gcgckeksyymcgays;
            }
            goto emsqksecccqeueoa;
            wkgmgumyswiayyae:
            aqwcyyigiukqikui:
            goto aiaayumowqswqqqk;
            maougsuwuoiecwgy:
            $pkyyagewkiyckmwy = ManipulateArray::get([self::CREATED_AT => __("\x43\x72\145\141\x74\x65\144\x20\x41\164", PR__CMN__FOUNDATION), self::UPDATED_AT => __("\125\160\144\141\164\x65\144\x20\101\x74", PR__CMN__FOUNDATION)], $uusmaiomayssaecw, '');
            goto pseqauyuqgmccuwe;
            sgamuuiycksmssoi:
            $eqgoocgaqwqcimie = $this->kamyqikiiuwqiiuw($uusmaiomayssaecw, $eqgoocgaqwqcimie, $mksyucucyswaukig);
            goto ymsscygscwwicumm;
            mugaisykgmqcaggg:
            eqmcakqmqkqkweww:
            goto sgamuuiycksmssoi;
            qogogggqiuuewakw:
            goto eqmcakqmqkqkweww;
            goto tokguaiieequuwwa;
            keygauyiuaycggcw:
            zawceoyikyuwoucg:
            goto memcsokyqmowucuo;
            wwugkwcimumgukko:
            iwcsismeakueeiya:
            goto keygauyiuaycggcw;
            aiaayumowqswqqqk:
            $pkyyagewkiyckmwy = $aaqqkgyougeiueyq->qcgakseyaikigqco();
            goto swmeecwwakawqqcw;
            ymsscygscwwicumm:
            if (!($pkyyagewkiyckmwy && $eqgoocgaqwqcimie)) {
                goto iwcsismeakueeiya;
            }
            goto oouisuwokmqgwiau;
            smqeaeiimomewqsw:
            goto kmgoiquwmsayywsc;
            goto wkgmgumyswiayyae;
            swmeecwwakawqqcw:
            $sqqewmoeaekuyyas = $aaqqkgyougeiueyq->yywskysiycwkwsgw();
            goto awkmmuyuakwiaqae;
            ccgmicuyeoggoecu:
            $sqqewmoeaekuyyas = 0;
            goto ewosekcicaqucsua;
            tokguaiieequuwwa:
            gcgckeksyymcgays:
            goto ccgmicuyeoggoecu;
            awkmmuyuakwiaqae:
            kmgoiquwmsayywsc:
            goto qogogggqiuuewakw;
            ogmueiimgsogucqa:
            $eqgoocgaqwqcimie = ManipulateArray::get($mksyucucyswaukig, $uusmaiomayssaecw);
            goto kyoogyegwukaqoce;
            ewosekcicaqucsua:
            $eqgoocgaqwqcimie = '';
            goto mugaisykgmqcaggg;
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
        ysswaukcymggikui:
        qewmkgeeuomgomia:
        goto uksgyweoymomgqos;
        guyskocigecaisas:
        $aokagokqyuysuksm = $eqgoocgaqwqcimie;
        goto wugmawaqkksguaoa;
        oeoeeqeaokougsec:
        uiuekqekiguikuce:
        goto ikgusckaomuoiggs;
        gyeqsyqiosmysiio:
        $eqgoocgaqwqcimie = $aokagokqyuysuksm;
        goto skwuueyuqkueasuu;
        kwmkusgsuoqoyses:
        ceegwysaccigqqck:
        goto eacqgkqmwkcsscec;
        wgiuiaqoekymkwwo:
        goto ayekogimgycgmgau;
        goto csiokukquwmccgqc;
        ieumcesgiqicqima:
        ayggscyaoccukyso:
        goto ysswaukcymggikui;
        wugmawaqkksguaoa:
        $eqgoocgaqwqcimie = $this->aouwuegyyugiwksc($qgoqiacsiccwoawi, $mksyucucyswaukig, !$this->wmwguecgowcscues());
        goto ggwkueqyesouyaya;
        gwyguuaqscsukaqg:
        if (!($this->wkcuasmkgoscaiay() || $this->wmwguecgowcscues())) {
            goto ayggscyaoccukyso;
        }
        goto sesqsywwesiycmmq;
        ummgomwmsqygiqcy:
        if ($aaqqkgyougeiueyq instanceof Foreign && $aaqqkgyougeiueyq->eiyqqesoywqkegwu()) {
            goto cuqeayuiccuwcyua;
        }
        goto skuykkqcgakewusu;
        ugoqkakikayagkmm:
        cuqeayuiccuwcyua:
        goto guyskocigecaisas;
        skwuueyuqkueasuu:
        iiakoqmowuggmkqw:
        goto oeoeeqeaokougsec;
        iugooscuiysaeqgs:
        ayekogimgycgmgau:
        goto icegsqiumouewcqo;
        imyoiukqcmewqkkw:
        goto uiuekqekiguikuce;
        goto ugoqkakikayagkmm;
        csiokukquwmccgqc:
        skokkuuieagmuwgm:
        goto sgaiaqoewagooqoo;
        myasecwmmmiemgik:
        aoyqwwsacwqumucg:
        goto kwmkusgsuoqoyses;
        aqmauesokgqoyugm:
        cesywumicwqkaeaq:
        goto scigcaogysowccsk;
        sgaiaqoewagooqoo:
        $eqgoocgaqwqcimie = $this->ooeucgsymeocguuu($qgoqiacsiccwoawi, $eqgoocgaqwqcimie, null, null, $mksyucucyswaukig);
        goto iugooscuiysaeqgs;
        qawqosgwykeguasw:
        oukqakowgcgeugam:
        goto oscukosgcqaqwcmi;
        wskwmocqgakykmgw:
        if ($aaqqkgyougeiueyq instanceof Enumeration) {
            goto wmasiggggymwkeqs;
        }
        goto sgiescgmgsowcakk;
        eacqgkqmwkcsscec:
        if (!is_numeric($eqgoocgaqwqcimie)) {
            goto uyueemusgoakawmc;
        }
        goto eucysoaqoumycmso;
        ycekisssayygosaw:
        goto aoyqwwsacwqumucg;
        goto qawqosgwykeguasw;
        icausgkyooymuwqq:
        vwyusaemeqkswgee:
        goto gwyguuaqscsukaqg;
        icegsqiumouewcqo:
        return $eqgoocgaqwqcimie;
        goto mgeiyeygqcoismqq;
        muuiwammayaceuue:
        return $eqgoocgaqwqcimie;
        goto aqmauesokgqoyugm;
        kecgiacuyaumcewe:
        $eqgoocgaqwqcimie = ManipulateArray::get($aaqqkgyougeiueyq->gkwkqmwweiawigae(), $eqgoocgaqwqcimie, $eqgoocgaqwqcimie);
        goto giqssgogumimqkeo;
        uksgyweoymomgqos:
        goto csqwmisikmgeaaky;
        goto ugsomcmgekqayoqc;
        oscukosgcqaqwcmi:
        $eqgoocgaqwqcimie = $aiooqyausygaasqm;
        goto myasecwmmmiemgik;
        qyoscouawykeimiu:
        if ($aaqqkgyougeiueyq instanceof DateTime || $aaqqkgyougeiueyq instanceof Timestamp) {
            goto skokkuuieagmuwgm;
        }
        goto wskwmocqgakykmgw;
        sgiescgmgsowcakk:
        if ($aaqqkgyougeiueyq instanceof File) {
            goto vwyusaemeqkswgee;
        }
        goto cgeuosayqssasuou;
        ggwkueqyesouyaya:
        if ($eqgoocgaqwqcimie) {
            goto iiakoqmowuggmkqw;
        }
        goto gyeqsyqiosmysiio;
        cgeuosayqssasuou:
        if (!is_numeric($eqgoocgaqwqcimie)) {
            goto comiusqosmykagiq;
        }
        goto ummgomwmsqygiqcy;
        qmeskaiqawomuqmk:
        $eqgoocgaqwqcimie = ManipulateHTML::qgsekwygcgawekeq("\151\x6d\147", ["\x73\x72\143" => $eqgoocgaqwqcimie, "\167\x69\x64\164\x68" => "\70\x30", "\150\145\151\x67\x68\x74" => "\x38\x30"]);
        goto ycekisssayygosaw;
        ikgusckaomuoiggs:
        comiusqosmykagiq:
        goto oykuimwkwcmuekci;
        eucysoaqoumycmso:
        $eqgoocgaqwqcimie = ManipulateAttachment::qaeeusqkgwagwaqc($eqgoocgaqwqcimie);
        goto kwagmsukmimymmmg;
        scigcaogysowccsk:
        $aaqqkgyougeiueyq = $this->oyeskqayoscwciem()->uqeoyqiwywwmsiew($qgoqiacsiccwoawi);
        goto qyoscouawykeimiu;
        skuykkqcgakewusu:
        $eqgoocgaqwqcimie = $this->wusgwkaycokeckqs($eqgoocgaqwqcimie);
        goto imyoiukqcmewqkkw;
        sesqsywwesiycmmq:
        if (!(!is_numeric($eqgoocgaqwqcimie) && ManipulateValidation::wmcwegoisyeeosqu($eqgoocgaqwqcimie))) {
            goto ceegwysaccigqqck;
        }
        goto wwyukkoeeeiiuewk;
        isqemmgcymcqgmyu:
        if (!($this->kumuygiiqswoyasy() === $qgoqiacsiccwoawi)) {
            goto cesywumicwqkaeaq;
        }
        goto muuiwammayaceuue;
        kwagmsukmimymmmg:
        uyueemusgoakawmc:
        goto ieumcesgiqicqima;
        wwyukkoeeeiiuewk:
        if ($aiooqyausygaasqm = ManipulateAttachment::ecqkouyiioksggkw($eqgoocgaqwqcimie)) {
            goto oukqakowgcgeugam;
        }
        goto qmeskaiqawomuqmk;
        oykuimwkwcmuekci:
        goto qewmkgeeuomgomia;
        goto icausgkyooymuwqq;
        giqssgogumimqkeo:
        csqwmisikmgeaaky:
        goto wgiuiaqoekymkwwo;
        ugsomcmgekqayoqc:
        wmasiggggymwkeqs:
        goto kecgiacuyaumcewe;
        mgeiyeygqcoismqq:
    }
    
    public function geyuyukmwaoksywa($migiiksoiymissge, $ewgwqamkygiqaawc = '', $wwgucssaecqekuek = []) : string
    {
        goto yseysoymiwmicuoi;
        wuugmygqgsmkgsmc:
        return $nsmgceoqaqogqmuw;
        goto wcuuwegqcysecoom;
        quccsmwoagiquqya:
        wkqumiwieauokkcy:
        goto wuugmygqgsmkgsmc;
        kmemegqksaeuqcow:
        if (!($migiiksoiymissge && $ewgwqamkygiqaawc)) {
            goto wkqumiwieauokkcy;
        }
        goto miqekiwaouwgqgui;
        wawwaqicwyyeamqu:
        $nsmgceoqaqogqmuw = ManipulateHTML::ciuuiyckmsygceis($iwywmkygwewiamwm);
        goto quccsmwoagiquqya;
        miqekiwaouwgqgui:
        $iwywmkygwewiamwm = ManipulateHTML::qgsekwygcgawekeq("\141", ManipulateFormat::omaawkkwwyesqwcc($wwgucssaecqekuek, ["\150\162\145\146" => $migiiksoiymissge, "\143\x6c\x61\163\x73" => "\x74\145\x78\164\x2d\144\x65\143\x6f\162\x61\x74\x69\x6f\x6e\55\x6e\x6f\156\x65"]), true, $ewgwqamkygiqaawc);
        goto wawwaqicwyyeamqu;
        yseysoymiwmicuoi:
        $nsmgceoqaqogqmuw = '';
        goto kmemegqksaeuqcow;
        wcuuwegqcysecoom:
    }
    
    public function ykaiaukuaeswygey($mksyucucyswaukig, $ikgwqyuyckaewsow, $eqgoocgaqwqcimie, $wamcomkuwysqgwgk = "\x3c\144\151\x76\76\45\x73\x3a\40\x25\x73\74\57\144\x69\x76\76") : string
    {
        goto wksaesosugiyoqoe;
        moiwoyyuauwqywom:
        $eqgoocgaqwqcimie = "{$eqgoocgaqwqcimie}\74\150\162\76{$ukmeuaouyackgwaa}";
        goto ekgcsqsycamakgak;
        wksaesosugiyoqoe:
        $ukmeuaouyackgwaa = '';
        goto kkiwuqcmoqmiquqq;
        ygmkqoaymoicisso:
        wyioauuuyckygcaq:
        goto mwsuqsikwoimcgiq;
        iwyomomasqykuwcw:
        return $eqgoocgaqwqcimie;
        goto jwicyuowwocymagu;
        kkiwuqcmoqmiquqq:
        foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) {
            goto geusysuemiqgegcw;
            siowcuqygwiqumii:
            $aiowsaccomcoikus = ManipulateArray::get($this->oyeskqayoscwciem()->aeosueemgsygqese(), $aiowsaccomcoikus);
            goto yuiwacwscsiukyqe;
            oooiaawaqeogogky:
            $ukmeuaouyackgwaa .= sprintf($wamcomkuwysqgwgk, $aiowsaccomcoikus->qcgakseyaikigqco(), $this->kamyqikiiuwqiiuw($aiowsaccomcoikus->mwikyscisascoeea(), $uiymkeeaukcyqqik, $mksyucucyswaukig));
            goto cmugciymsqakcssq;
            yuiwacwscsiukyqe:
            if (!($aiowsaccomcoikus && $uiymkeeaukcyqqik)) {
                goto iyaaokkcuycqywco;
            }
            goto oooiaawaqeogogky;
            cmugciymsqakcssq:
            iyaaokkcuycqywco:
            goto omgecsuaqiqymwms;
            geusysuemiqgegcw:
            $uiymkeeaukcyqqik = ManipulateArray::get($mksyucucyswaukig, $aiowsaccomcoikus);
            goto siowcuqygwiqumii;
            omgecsuaqiqymwms:
            suweomwcwyiiscee:
            goto qqucyqsowaqsmagw;
            qqucyqsowaqsmagw:
        }
        goto ygmkqoaymoicisso;
        ekgcsqsycamakgak:
        myswmcskaagkuaiq:
        goto iwyomomasqykuwcw;
        mwsuqsikwoimcgiq:
        if (!$ukmeuaouyackgwaa) {
            goto myswmcskaagkuaiq;
        }
        goto moiwoyyuauwqywom;
        jwicyuowwocymagu:
    }
    
    public function wkmkqaiwuqouweye($aiowsaccomcoikus, $eqgoocgaqwqcimie, $cackiyicawmkyqqg = self::EQUAL_SYMBOL, $siykeiywomwwuoiw = null) : ?Builder
    {
        try {
            goto egeeugucoaimuyai;
            yiswuyuuwakywmiy:
            amwqgwykwqyqsygy:
            goto coswqmcmeyyaemcs;
            eqqgiqaceosmskyq:
            laqgkacikykmcsos:
            goto gcikiyucocqiqkic;
            amcyugmyywgmwyys:
            
            $siykeiywomwwuoiw = $siykeiywomwwuoiw->where($aiowsaccomcoikus, $cackiyicawmkyqqg, $eqgoocgaqwqcimie);
            goto eqqgiqaceosmskyq;
            coswqmcmeyyaemcs:
            if (!$siykeiywomwwuoiw) {
                goto laqgkacikykmcsos;
            }
            goto amcyugmyywgmwyys;
            iweqeyugoiogqcsw:
            $siykeiywomwwuoiw = $this->gqaysymikgeawkqa();
            goto yiswuyuuwakywmiy;
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
        kuewoymyameyusgi:
        return $aqykuigiuwmmcieu;
        goto saqssgocioekcyik;
        uooyycimwyiscwik:
        $aqykuigiuwmmcieu = $this->aocqcwaksksgckaw($siykeiywomwwuoiw, $wkkweuacukumqmya, $aiamqeawckcsuaou);
        goto wgyckicucikswwgc;
        ykomkgsekoimwoga:
        $aqykuigiuwmmcieu = [];
        goto uwacyygkmmwmqumm;
        wgyckicucikswwgc:
        kgaiygkqciegamkk:
        goto kuewoymyameyusgi;
        toacieymkgsmouum:
        if (!$siykeiywomwwuoiw) {
            goto kgaiygkqciegamkk;
        }
        goto uooyycimwyiscwik;
        uwacyygkmmwmqumm:
        $siykeiywomwwuoiw = $this->wkmkqaiwuqouweye($aiowsaccomcoikus, $cackiyicawmkyqqg, $eqgoocgaqwqcimie);
        goto toacieymkgsmouum;
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
        cusmikqmacqsyoma:
        if ($mguygkocuoaoqqkg && is_array($mguygkocuoaoqqkg)) {
            goto cqggosuciisguwka;
        }
        goto qcqecwaeywouwwyw;
        ciiggekwccqceewc:
        return $mguygkocuoaoqqkg;
        goto kgseuyacuyamciku;
        uyiyiugiugqiqgce:
        goto iaemoucqgyeioome;
        goto aacaaeuuscacmgws;
        wiisumwwuyqmqggs:
        iaemoucqgyeioome:
        goto ciiggekwccqceewc;
        imccgasockkumogm:
        foreach ($mguygkocuoaoqqkg as $momcykaoccoymeig => $mksyucucyswaukig) {
            $mguygkocuoaoqqkg[$momcykaoccoymeig] = $this->scqakcemaqsqkema($mksyucucyswaukig);
            aygymyyeaiouckwm:
        }
        goto yawiksokukeuwumm;
        yawiksokukeuwumm:
        ocqocwcocigwogao:
        goto wiisumwwuyqmqggs;
        aacaaeuuscacmgws:
        cqggosuciisguwka:
        goto imccgasockkumogm;
        kgseuyacuyamciku:
    }
    
    public function scqakcemaqsqkema($mksyucucyswaukig, $yiosiwewiecqmkaa = [])
    {
        goto aockoackcyuqgoky;
        yamuiaoquqoesiye:
        wewskayogyikqqwe:
        goto keeayqkcscoegmmc;
        keeayqkcscoegmmc:
        kiwygqkmigumiiuk:
        goto iescmuyqmwkeagcg;
        scuysmagomwasugy:
        foreach ($mksyucucyswaukig as $aiowsaccomcoikus => $eqgoocgaqwqcimie) {
            goto auyuqgiwqummogko;
            egcykicymsycioaq:
            cuiswoyuykyksukc:
            goto scgkuqsgoooesoak;
            qgowycwwyqeusmqk:
            $mksyucucyswaukig = ManipulateArray::set($mksyucucyswaukig, [$aiowsaccomcoikus => $this->kamyqikiiuwqiiuw($aiowsaccomcoikus, $eqgoocgaqwqcimie, $mksyucucyswaukig)]);
            goto ouiaceqmgmusysiq;
            ouiaceqmgmusysiq:
            oqwssckcieuowiwc:
            goto egcykicymsycioaq;
            auyuqgiwqummogko:
            if (!(!$yiosiwewiecqmkaa || in_array($aiowsaccomcoikus, $yiosiwewiecqmkaa))) {
                goto oqwssckcieuowiwc;
            }
            goto qgowycwwyqeusmqk;
            scgkuqsgoooesoak:
        }
        goto yamuiaoquqoesiye;
        aockoackcyuqgoky:
        if (!$mksyucucyswaukig) {
            goto kiwygqkmigumiiuk;
        }
        goto scuysmagomwasugy;
        iescmuyqmwkeagcg:
        return $mksyucucyswaukig;
        goto eyacawwuwcgegekw;
        eyacawwuwcgegekw:
    }
    
    public function yaswokogyqciggeq($aiowsaccomcoikus, $eqgoocgaqwqcimie, $qgoqiacsiccwoawi = self::ID, $cackiyicawmkyqqg = self::EQUAL_SYMBOL) : array
    {
        return $this->mkcmqiiwgccguoko($aiowsaccomcoikus, $eqgoocgaqwqcimie, $cackiyicawmkyqqg, $qgoqiacsiccwoawi);
    }
    
    public function cwkywyqksyucoyia($ikgwqyuyckaewsow, $wkkweuacukumqmya = ["\x2a"]) : array
    {
        goto mgomeacemugqgswa;
        qiykkoqakyesmswm:
        eyecoeksswsicqkq:
        goto ieceiycekgcommqi;
        uyeiksuwckaowkqm:
        $aqykuigiuwmmcieu = $this->aocqcwaksksgckaw($siykeiywomwwuoiw, $wkkweuacukumqmya);
        goto qiykkoqakyesmswm;
        muewmqsoeqoosicu:
        $siykeiywomwwuoiw = $this->kqewyqqqiyiouaou($ikgwqyuyckaewsow);
        goto ekcsiqgsyyiwyiui;
        mgomeacemugqgswa:
        $aqykuigiuwmmcieu = [];
        goto muewmqsoeqoosicu;
        ekcsiqgsyyiwyiui:
        if (!$siykeiywomwwuoiw) {
            goto eyecoeksswsicqkq;
        }
        goto uyeiksuwckaowkqm;
        ieceiycekgcommqi:
        return $aqykuigiuwmmcieu;
        goto umskgiqgaemaokmw;
        umskgiqgaemaokmw:
    }
    
    public function kqewyqqqiyiouaou($ikgwqyuyckaewsow, $siykeiywomwwuoiw = null)
    {
        goto aakegewkccyyeuwc;
        wiqmeiaaqqauqeme:
        try {
            goto cuqsyqewuemsysgi;
            cuqsyqewuemsysgi:
            if (!$siykeiywomwwuoiw) {
                goto yoegkeiammkuouua;
            }
            goto aicoaaeeewwmioou;
            umseiamyiyksuyim:
            yoegkeiammkuouua:
            goto ubsguocwequeoicm;
            meywqwweoiaqwwiu:
            igqwceeuaueagaem:
            goto umseiamyiyksuyim;
            aicoaaeeewwmioou:
            foreach ($ikgwqyuyckaewsow as $qgoqiacsiccwoawi => $ywmkwiwkosakssii) {
                goto mcsucqagsqysgieu;
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
                        qwuwcoeiguyqekuy:
                        goto wskuiymiemyqssui;
                        goto osskmmsaekmgemwc;
                        oyeuoiqgeuioiqie:
                        
                        $siykeiywomwwuoiw = $siykeiywomwwuoiw->join($aasascamegmwqmqk, $eqgoocgaqwqcimie[0], $cackiyicawmkyqqg, $eqgoocgaqwqcimie[1], $sqeykgyoooqysmca, $icsywsyukqcciiky);
                        goto qwuwcoeiguyqekuy;
                        ysmqqmuesgeyquws:
                        $icsywsyukqcciiky = ManipulateArray::get($ywmkwiwkosakssii, self::WHERE, false);
                        goto mmoyseisgqkyouaq;
                        quweggukmkusygwe:
                        $sqeykgyoooqysmca = ManipulateArray::get($ywmkwiwkosakssii, self::TYPE, "\x69\156\x6e\x65\x72");
                        goto ysmqqmuesgeyquws;
                        osskmmsaekmgemwc:
                    case self::WHERE:
                        goto gmmgscuqwgiiqsmc;
                        kwiwoeckcqgewwsc:
                        smwcscokyasiosks:
                        goto meseoaayykmoeicm;
                        owsusyqkaqmcmkwu:
                        skmyqomuuowkeeqe:
                        goto woqwmsyieymgsqao;
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
                        wwioiasoggswmeyy:
                        eowskcomgqqwcyui:
                        goto aacmqqkkmcyowsko;
                        woqwmsyieymgsqao:
                        ygsoccgkwamsqewm:
                        goto qywoucqwciweuyeg;
                        gmmgscuqwgiiqsmc:
                        if (is_array($eqgoocgaqwqcimie)) {
                            goto smwcscokyasiosks;
                        }
                        goto imwwaqcuqskiyeqc;
                        qywoucqwciweuyeg:
                        goto momgaqeuucmowiii;
                        goto kwiwoeckcqgewwsc;
                        iokqqymyimieyyyy:
                        goto wskuiymiemyqssui;
                        goto aoaymmuyuuwqwcuy;
                        gwgssaymsgykwaoe:
                        wococciimesuaeys:
                        goto wwioiasoggswmeyy;
                        aacmqqkkmcyowsko:
                        momgaqeuucmowiii:
                        goto iokqqymyimieyyyy;
                        aoaymmuyuuwqwcuy:
                    case self::DATE:
                        $siykeiywomwwuoiw = $this->ewaugyyiauqmiwsu($qgoqiacsiccwoawi, $eqgoocgaqwqcimie, $cackiyicawmkyqqg, $qsycuegoicqcqkmo, $mqogqgswmasasmik, $siykeiywomwwuoiw);
                        goto wskuiymiemyqssui;
                }
                goto yiuwcmkkcemwksaq;
                cswkeogkecaoyoka:
                $qsycuegoicqcqkmo = ManipulateArray::get($ywmkwiwkosakssii, self::BOOLEAN, self::AND);
                goto oekyuoucqkakcewe;
                wgegmwgsmsgmceqo:
                wskuiymiemyqssui:
                goto kqkqessiagyiiuim;
                yiuwcmkkcemwksaq:
                muoaaecywcccquoa:
                goto wgegmwgsmsgmceqo;
                yuuygkmacmmcakma:
                $eqgoocgaqwqcimie = ManipulateArray::get($ywmkwiwkosakssii, self::VALUE, $ywmkwiwkosakssii);
                goto mywgmggymygqamce;
                mywgmggymygqamce:
                $yummaigqmauwcyou = ManipulateArray::get($ywmkwiwkosakssii, self::CLAUSE, self::WHERE);
                goto cswkeogkecaoyoka;
                kqkqessiagyiiuim:
                wyuuoyquywymqoqc:
                goto omyeseoqwqiuwqcw;
                oekyuoucqkakcewe:
                $cackiyicawmkyqqg = ManipulateArray::get($ywmkwiwkosakssii, self::OPERATOR, self::EQUAL_SYMBOL);
                goto ieaswyqkcwyaycse;
                mcsucqagsqysgieu:
                $mqogqgswmasasmik = ManipulateArray::get($ywmkwiwkosakssii, self::NOT, false);
                goto yuuygkmacmmcakma;
                omyeseoqwqiuwqcw:
            }
            goto meywqwweoiaqwwiu;
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
        ssocqyqwsyyekiik:
        $gaeqamemwmwsyukm = 0;
        goto nomsoewcmsqiikyy;
        wmgokkkswmssqimu:
        return $gaeqamemwmwsyukm;
        goto ywueqiukuessuggs;
        iiueqisykokweaaw:
        if (!$siykeiywomwwuoiw) {
            goto eyoiasswoyuyuuco;
        }
        goto maquyauskaqkikks;
        nomsoewcmsqiikyy:
        $siykeiywomwwuoiw = $this->wkmkqaiwuqouweye($aiowsaccomcoikus, $cackiyicawmkyqqg, $eqgoocgaqwqcimie, $siykeiywomwwuoiw);
        goto iiueqisykokweaaw;
        wgggaasiaeeucygm:
        eyoiasswoyuyuuco:
        goto wmgokkkswmssqimu;
        maquyauskaqkikks:
        
        $gaeqamemwmwsyukm = $siykeiywomwwuoiw->count();
        goto wgggaasiaeeucygm;
        ywueqiukuessuggs:
    }
    
    public function ssqiqiiwyusygike($aiowsaccomcoikus, $eqgoocgaqwqcimie, $qgoqiacsiccwoawi, $cackiyicawmkyqqg = self::EQUAL_SYMBOL)
    {
        goto sogccagmgkcaoase;
        coakykwqwcigaoeq:
        
        $qsmaqqyoggcuyukq = $siykeiywomwwuoiw->sum($qgoqiacsiccwoawi);
        goto gekuacoquiucucoa;
        useouyguueemgkmq:
        $siykeiywomwwuoiw = $this->wkmkqaiwuqouweye($aiowsaccomcoikus, $cackiyicawmkyqqg, $eqgoocgaqwqcimie);
        goto oweiysimemyoswom;
        samuycgcmqkmcgea:
        return $qsmaqqyoggcuyukq;
        goto kqacoqsymeyimagg;
        gekuacoquiucucoa:
        iwwcoscasyysaqoo:
        goto samuycgcmqkmcgea;
        oweiysimemyoswom:
        if (!$siykeiywomwwuoiw) {
            goto iwwcoscasyysaqoo;
        }
        goto coakykwqwcigaoeq;
        sogccagmgkcaoase:
        $qsmaqqyoggcuyukq = 0;
        goto useouyguueemgkmq;
        kqacoqsymeyimagg:
    }
    
    public function ewaugyyiauqmiwsu($ymaogssqccumcyqa, $eqgoocgaqwqcimie, $cackiyicawmkyqqg = self::GE_SYMBOL, $qsycuegoicqcqkmo = self::AND, $mqogqgswmasasmik = false, $siykeiywomwwuoiw = null) : ?Builder
    {
        try {
            goto wcksgisuiomywugm;
            wewikewycwowkqui:
            $eqgoocgaqwqcimie = new \DateTime($eqgoocgaqwqcimie);
            goto qqgoygcaggkkisyw;
            wcksgisuiomywugm:
            if ($siykeiywomwwuoiw) {
                goto maiokoamiosssisk;
            }
            goto mwwqyciigykaycis;
            imiieooawogoyagw:
            
            $siykeiywomwwuoiw = $siykeiywomwwuoiw->whereDate($ymaogssqccumcyqa, $cackiyicawmkyqqg, $eqgoocgaqwqcimie, $qsycuegoicqcqkmo);
            goto imyqaycayqeucsau;
            imyqaycayqeucsau:
            goto iswgeeweeweswyoy;
            goto yiqskmikgqukkewq;
            yiqskmikgqukkewq:
            wwwyugiayoaucqiu:
            goto eoeomqmkgaogkome;
            mwwqyciigykaycis:
            $siykeiywomwwuoiw = $this->gqaysymikgeawkqa();
            goto geacaysasaiqsewo;
            kigeagsoeqmgaosa:
            if ($cackiyicawmkyqqg == "\x62\x65\x74\167\145\x65\x6e" && is_array($eqgoocgaqwqcimie)) {
                goto wwwyugiayoaucqiu;
            }
            goto iiowkswmewooomes;
            iiowkswmewooomes:
            if (!is_numeric($eqgoocgaqwqcimie)) {
                goto qqqseeocmmummkga;
            }
            goto wewikewycwowkqui;
            qqgoygcaggkkisyw:
            qqqseeocmmummkga:
            goto imiieooawogoyagw;
            cmcawyswoeumueys:
            iswgeeweeweswyoy:
            goto ugcquuakimgkmeqc;
            geacaysasaiqsewo:
            maiokoamiosssisk:
            goto kigeagsoeqmgaosa;
            eoeomqmkgaogkome:
            
            $siykeiywomwwuoiw = $siykeiywomwwuoiw->whereBetween($ymaogssqccumcyqa, $eqgoocgaqwqcimie, $qsycuegoicqcqkmo, $mqogqgswmasasmik);
            goto cmcawyswoeumueys;
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
        kyuewcuomwmweguq:
        $ksiyqouuaoymsycg = $this->oyeskqayoscwciem()->uqeoyqiwywwmsiew($aiowsaccomcoikus);
        goto syokeusmqogkicks;
        uyugkucyiqymcuus:
        $eqgoocgaqwqcimie = ManipulateArray::get($mksyucucyswaukig, $aiowsaccomcoikus, $ggauoeuaesiymgee);
        goto kokkacggmoaagiae;
        qiiwgkcyqweecqoa:
        uwkuasmeoueseaou:
        goto ekkkweoucuyuqwik;
        iweickamaucqgysq:
        sumiomammkayeqis:
        goto aecamacaoskqmccs;
        ugwyeeockousskag:
        ueeuassqywswigaq:
        goto ooqqyyewioyccuww;
        aksogeackceaeays:
        oqksakqyecmsuscq:
        goto ugwyeeockousskag;
        oekmoqcqwyauiaeg:
        if (!$eqgoocgaqwqcimie) {
            goto oqksakqyecmsuscq;
        }
        goto uiqaoucyoiwykywa;
        umawcakyaoykccao:
        $eqgoocgaqwqcimie = json_decode($eqgoocgaqwqcimie);
        goto wwmscmqgasawkkwa;
        ugkqimokoeicsyqm:
        if ($aiowsaccomcoikus instanceof Field) {
            goto agcugqouiqgiskcq;
        }
        goto kyuewcuomwmweguq;
        syokeusmqogkicks:
        if (!$ksiyqouuaoymsycg) {
            goto uwkuasmeoueseaou;
        }
        goto oqkqaggagwswaaqi;
        kokkacggmoaagiae:
        goto ueeuassqywswigaq;
        goto iweickamaucqgysq;
        oqkqaggagwswaaqi:
        $aiowsaccomcoikus = $ksiyqouuaoymsycg;
        goto qiiwgkcyqweecqoa;
        wwmscmqgasawkkwa:
        msaugmwuooqkmwus:
        goto aksogeackceaeays;
        uiqaoucyoiwykywa:
        if (!$aiowsaccomcoikus instanceof Json) {
            goto msaugmwuooqkmwus;
        }
        goto umawcakyaoykccao;
        aecamacaoskqmccs:
        $eqgoocgaqwqcimie = ManipulateArray::get($mksyucucyswaukig, $aiowsaccomcoikus->mwikyscisascoeea(), $ggauoeuaesiymgee);
        goto oekmoqcqwyauiaeg;
        ooqqyyewioyccuww:
        return $eqgoocgaqwqcimie;
        goto umasasgawwamkisc;
        ekkkweoucuyuqwik:
        agcugqouiqgiskcq:
        goto mkosooeggqemyqqy;
        mkosooeggqemyqqy:
        if ($aiowsaccomcoikus instanceof Field) {
            goto sumiomammkayeqis;
        }
        goto uyugkucyiqymcuus;
        umasasgawwamkisc:
    }
    
    private function aocqcwaksksgckaw($siykeiywomwwuoiw, $wkkweuacukumqmya = ["\x2a"], $aiamqeawckcsuaou = self::GET) : array
    {
        goto qqkqiioqwkekqsoq;
        ayegqigqcsuoqess:
        return $uomewyckeuqoqocu;
        goto scqwioawomamygwa;
        gewecumqwgcuwikk:
        $uomewyckeuqoqocu = $iwqgomgkuumgyswi->sacmkccceuywoqsq();
        goto aewqyqksisqayska;
        omeukkwiesseygwy:
        if (!$iwqgomgkuumgyswi) {
            goto iqsoeqgwemgyiimg;
        }
        goto gewecumqwgcuwikk;
        aewqyqksisqayska:
        iqsoeqgwemgyiimg:
        goto ayegqigqcsuoqess;
        ckugukmoqamgcwci:
        $iwqgomgkuumgyswi = $this->ymkikmwesqgscscy($siykeiywomwwuoiw, $wkkweuacukumqmya, $aiamqeawckcsuaou);
        goto omeukkwiesseygwy;
        qqkqiioqwkekqsoq:
        $uomewyckeuqoqocu = [];
        goto ckugukmoqamgcwci;
        scqwioawomamygwa:
    }
    
    public function ymkikmwesqgscscy($siykeiywomwwuoiw, $wkkweuacukumqmya = ["\52"], $aiamqeawckcsuaou = self::GET) : ?Collection
    {
        goto qywgscciuywgmaia;
        kaewigguiigmcsoe:
        muooqqykkmuismwk:
        goto wmoqoeyuaikokayu;
        wmoqoeyuaikokayu:
        $iwqgomgkuumgyswi = null;
        goto ucwwsgoweeagukyq;
        qywgscciuywgmaia:
        if ($siykeiywomwwuoiw) {
            goto muooqqykkmuismwk;
        }
        goto wiqmoimycyeesqse;
        euaikwmkiyegwqae:
        auucmoqsmsouecag:
        goto qgiscekgegqwemgs;
        qgiscekgegqwemgs:
        euiiaygickweagiw:
        goto iiwessuyuisaawek;
        gecscumwugkogmyq:
        $iwqgomgkuumgyswi = $siykeiywomwwuoiw->{$aiamqeawckcsuaou}($wkkweuacukumqmya);
        goto euaikwmkiyegwqae;
        ucwwsgoweeagukyq:
        if (!$siykeiywomwwuoiw) {
            goto euiiaygickweagiw;
        }
        goto yaiwoisswowiyski;
        iiwessuyuisaawek:
        return $iwqgomgkuumgyswi;
        goto yqukoacecemgkkay;
        yaiwoisswowiyski:
        if (!in_array($aiamqeawckcsuaou, [self::GET, self::PLUCK])) {
            goto auucmoqsmsouecag;
        }
        goto gecscumwugkogmyq;
        wiqmoimycyeesqse:
        $siykeiywomwwuoiw = $this->gqaysymikgeawkqa();
        goto kaewigguiigmcsoe;
        yqukoacecemgkkay:
    }
    
    public function kmqmiwcimmagogoy($siykeiywomwwuoiw, $wkkweuacukumqmya = ["\52"], $aiamqeawckcsuaou = self::GET)
    {
        goto owsgmougoacgokmi;
        qokakquaeuigqcwy:
        if (!$iwqgomgkuumgyswi) {
            goto soyqsccuokmyuagk;
        }
        goto cymigkmkskowwcei;
        owsgmougoacgokmi:
        $qsmaqqyoggcuyukq = 0;
        goto iaqyisoeeygqwcym;
        ukecesmaioggmyoc:
        soyqsccuokmyuagk:
        goto wcyawmskokoagwqq;
        wcyawmskokoagwqq:
        return $qsmaqqyoggcuyukq;
        goto yseoucmemeekwkig;
        cymigkmkskowwcei:
        $qsmaqqyoggcuyukq = $iwqgomgkuumgyswi->qsmaqqyoggcuyukq();
        goto ukecesmaioggmyoc;
        iaqyisoeeygqwcym:
        $iwqgomgkuumgyswi = $this->ymkikmwesqgscscy($siykeiywomwwuoiw, $wkkweuacukumqmya, $aiamqeawckcsuaou);
        goto qokakquaeuigqcwy;
        yseoucmemeekwkig:
    }
    
    public function iiqauwkoiguyeawu($siykeiywomwwuoiw, $wkkweuacukumqmya = ["\x2a"]) : array
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
        gscsssqcacocusua:
        if (!$siykeiywomwwuoiw) {
            goto igoseisickgqeaog;
        }
        goto sqwgcyyoaismwkqs;
        umeiiiomksmkmoaa:
        igoseisickgqeaog:
        goto aokcewiioiiyiqeu;
        cyukykwcccsawesg:
        $siykeiywomwwuoiw = $this->gqaysymikgeawkqa();
        goto soywogweqoqmymqw;
        uogakawoeucgocym:
        if ($siykeiywomwwuoiw) {
            goto suggiaqykiwgkkey;
        }
        goto cyukykwcccsawesg;
        sqwgcyyoaismwkqs:
        
        $siykeiywomwwuoiw = $siykeiywomwwuoiw->orderBy($qgoqiacsiccwoawi, $ecysmcqmumqmaagg);
        goto umeiiiomksmkmoaa;
        soywogweqoqmymqw:
        suggiaqykiwgkkey:
        goto gscsssqcacocusua;
        aokcewiioiiyiqeu:
        return $siykeiywomwwuoiw;
        goto iisykceuumgoicmc;
        iisykceuumgoicmc:
    }
    
    public function awkaaqmauiuwwsca($siykeiywomwwuoiw, $wkkweuacukumqmya = ["\x2a"], $qgoqiacsiccwoawi = null, $ecysmcqmumqmaagg = null)
    {
        goto cgmukwicwgikewei;
        iasuykaqammykyuc:
        if (!($qgoqiacsiccwoawi && $ecysmcqmumqmaagg)) {
            goto ayoyuasegggqqosu;
        }
        goto ykmceyuggseogcgm;
        wywuimckaigaukkg:
        mkikakaaaqwygquu:
        goto ykeuwugswmeukgii;
        cgmukwicwgikewei:
        if ($siykeiywomwwuoiw) {
            goto womgsyqqiwokqyiw;
        }
        goto iuasemkmccmcauoc;
        iuasemkmccmcauoc:
        $siykeiywomwwuoiw = $this->gqaysymikgeawkqa();
        goto sscqwggcsoumagsw;
        sscqwggcsoumagsw:
        womgsyqqiwokqyiw:
        goto iasuykaqammykyuc;
        ykmceyuggseogcgm:
        $siykeiywomwwuoiw = $this->ewkswoqykwsuckok($siykeiywomwwuoiw, $qgoqiacsiccwoawi, $ecysmcqmumqmaagg);
        goto oiakiumycyquagqu;
        omcskkiwcgiysuis:
        
        $mksyucucyswaukig = $siykeiywomwwuoiw->first($wkkweuacukumqmya);
        goto wywuimckaigaukkg;
        ykeuwugswmeukgii:
        return $mksyucucyswaukig;
        goto gaucesmmweqmemkg;
        sawkcaueekoqcaoq:
        if (!$siykeiywomwwuoiw) {
            goto mkikakaaaqwygquu;
        }
        goto omcskkiwcgiysuis;
        oiakiumycyquagqu:
        ayoyuasegggqqosu:
        goto sycysmgqeucmisiw;
        sycysmgqeucmisiw:
        $mksyucucyswaukig = null;
        goto sawkcaueekoqcaoq;
        gaucesmmweqmemkg:
    }
    
    public function kasiqqyyaswsgics() : array
    {
        return $this->iiqauwkoiguyeawu($this->gqaysymikgeawkqa());
    }
    
    public function myywwqkyiwawwquy($qgoqiacsiccwoawi) : string
    {
        return "{$this->cokoiaeeomgssqgy()}\56{$qgoqiacsiccwoawi}";
    }
    
    public function cokoiaeeomgssqgy() : string
    {
        
        return $this->getTable();
    }
    
    public function uckwcqkkygmuquqq($aasascamegmwqmqk, $sysgmomuyiiawwcm, $gcegymooyemmaysk, $siykeiywomwwuoiw = null, $cackiyicawmkyqqg = self::EQUAL_SYMBOL, $sqeykgyoooqysmca = "\151\x6e\156\x65\162", $icsywsyukqcciiky = false) : ?Builder
    {
        goto kecaqcyccioyaoaa;
        siawaquisuoeysqa:
        return $siykeiywomwwuoiw;
        goto mgqqigauyucewouk;
        qsmmausewiocaesg:
        uuooygauoaumkemu:
        goto caseeeggigkaoswu;
        giemwgcqeogmauao:
        osgaygqiwagaowsq:
        goto siawaquisuoeysqa;
        csuyaisqcmkkyqiw:
        $siykeiywomwwuoiw = $this->gqaysymikgeawkqa();
        goto qsmmausewiocaesg;
        cwuqamaiywoeieyw:
        
        $siykeiywomwwuoiw = $siykeiywomwwuoiw->join($aasascamegmwqmqk, $sysgmomuyiiawwcm, $cackiyicawmkyqqg, $gcegymooyemmaysk, $sqeykgyoooqysmca, $icsywsyukqcciiky);
        goto giemwgcqeogmauao;
        caseeeggigkaoswu:
        if (!$siykeiywomwwuoiw) {
            goto osgaygqiwagaowsq;
        }
        goto cwuqamaiywoeieyw;
        kecaqcyccioyaoaa:
        if ($siykeiywomwwuoiw) {
            goto uuooygauoaumkemu;
        }
        goto csuyaisqcmkkyqiw;
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
