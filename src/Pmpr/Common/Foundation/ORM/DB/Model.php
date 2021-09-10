<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b5973b89a9             |
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
    const ORM_FILTER_BY = "\157\162\x6d\137\146\151\x6c\164\x65\162\x5f\x62\171";
    const ORM_FILTER_VALUE = "\157\x72\155\x5f\146\151\154\x74\x65\x72\x5f\x76\x61\154\x75\x65";
    use SingletonTrait, TranslateTrait, ComponentTrait, ActionTrait, FieldTrait, HookTrait, AjaxTrait, LogTrait;
    
    protected ?int $id = 0;
    
    public $timestamps = true;
    
    protected ?array $views = [];
    
    protected ?array $fields = [];
    
    protected bool $canDelete = true;
    
    protected ?Register $register = null;
    
    protected ?string $labelKey = "\x74\x69\164\154\145";
    
    protected ?array $validationErrors = [];
    
    public function __construct($aokagokqyuysuksm = null, ?array $siquossayskcwkea = [])
    {
        goto yamoiggaeugmgkku;
        kcqieuukskyiywss:
        parent::__construct($siquossayskcwkea);
        goto wukuisoeoeomgegu;
        kwaqakoogeiacmwi:
        if (!$aiqugsyouyikgawm instanceof Updater) {
            goto gikaiicgqyueeoco;
        }
        goto ccqgkeesikyegcik;
        mkuigmcgkawyawee:
        if (!(!ManipulateAjax::mcgoysmkqsqooceq() && ($suckquwcuiuyiogc || !$this->gqaysymikgeawkqa()))) {
            goto akcakssqcqcouwew;
        }
        goto ouqwmaaskykywyqo;
        agqmoymkiswqswqo:
        $aiqugsyouyikgawm = Updater::ocmycskcuiawkecq($ymqmyyeuycgmigyo);
        goto kwaqakoogeiacmwi;
        yamoiggaeugmgkku:
        $this->ckgmycmaukqgkosk();
        goto eqekaoaioiykuaiw;
        oqwyemgwoossauyk:
        $this->gyqeoeemeemicgqi();
        goto cwcmwogseemgqgqq;
        yuoyackaoigyyyso:
        cgasgmiiqegqesic:
        goto kcqieuukskyiywss;
        cwcmwogseemgqgqq:
        akoiqkoqmmmcieug:
        goto yuoyackaoigyyyso;
        ouqwmaaskykywyqo:
        $mgcmmwqwguicsews->cymcyywycwkawmsi();
        goto agqmoymkiswqswqo;
        wcoqiwuusoeqiqwi:
        if (is_numeric($aokagokqyuysuksm)) {
            goto akoiqkoqmmmcieug;
        }
        goto oqwyemgwoossauyk;
        iqeqqwcmaiqakawc:
        
        $mgcmmwqwguicsews = $this->getConnection();
        goto gioqkcywauuckmua;
        uqagqomggiacosqm:
        $this->ewaqwooqoqmcoomi();
        goto mwskgsimqagmkcgq;
        oyywywoqaqcykucs:
        muwyuiikuywigwso:
        goto iqeqqwcmaiqakawc;
        qoiuwyogucoeaoew:
        if ($ymqmyyeuycgmigyo) {
            goto muwyuiikuywigwso;
        }
        goto qkkqiagwgaoyauki;
        qkkqiagwgaoyauki:
        wp_die("\156\141\x6d\x65\x20\x69\163\40\156\157\x74\40\x64\145\x66\x69\x6e\145\40\x66\157\162\40\155\157\144\x65\154\72\x20" . self::uqggkiomyiceyooa());
        goto oyywywoqaqcykucs;
        miaiggsoiaekmqwy:
        static::$resolver = new Resolver();
        goto suoymucmyegewkmu;
        iiuawywwoaeyauge:
        akcakssqcqcouwew:
        goto wcoqiwuusoeqiqwi;
        eqekaoaioiykuaiw:
        $ymqmyyeuycgmigyo = $this->miwqiiqeegeqcwis();
        goto qoiuwyogucoeaoew;
        aakwscykmyyykoms:
        gikaiicgqyueeoco:
        goto iiuawywwoaeyauge;
        suoymucmyegewkmu:
        if (self::quiqwmkiyigesygc()) {
            goto cgasgmiiqegqesic;
        }
        goto uqagqomggiacosqm;
        gioqkcywauuckmua:
        $this->table = $mgcmmwqwguicsews->cokoiaeeomgssqgy($ymqmyyeuycgmigyo);
        goto miaiggsoiaekmqwy;
        mwskgsimqagmkcgq:
        $suckquwcuiuyiogc = ManipulateSetting::cmaecekuqkwmemms("\x55\120\104\x41\x54\105\x5f\117\x52\x4d\137\x44\101\x54\101\x42\x41\123\105", 0);
        goto mkuigmcgkawyawee;
        ccqgkeesikyegcik:
        $aiqugsyouyikgawm->yuaecocyyyqqgsyw($this->oyeskqayoscwciem())->uwyqgmcuomgeccgy($mgcmmwqwguicsews);
        goto aakwscykmyyykoms;
        wukuisoeoeomgegu:
    }
    public function wigskegsqequoeks()
    {
        $ymqmyyeuycgmigyo = $this->miwqiiqeegeqcwis();
        $this->qcsmikeggeemccuu("\151\x6e\x69\x74", [$this, "\x63\147\x61\155\x75\x77\151\161\x73\x67\167\x73\x69\153\x6b\x6d"])->koaegcswmcqsiykq($this->ygyygikyocoymgaw("{$ymqmyyeuycgmigyo}\x5f\147\x65\164\137\154\151\x73\164"), [$this, "\x63\153\x67\171\x65\x67\x6b\x75\x73\x6d\165\x79\x6d\151\x6d\157"])->qcsmikeggeemccuu($this->ygyygikyocoymgaw("{$ymqmyyeuycgmigyo}\x5f\144\x6f\x5f\142\165\x6c\x6b\137\x61\143\x74\x69\157\x6e"), [$this, "\x6d\171\171\x71\x77\x79\x73\x77\167\145\x73\167\x69\165\x77\165"], 10, 2)->qcsmikeggeemccuu($this->ygyygikyocoymgaw("{$ymqmyyeuycgmigyo}\x5f\x64\157\137\163\151\156\147\154\145\x5f\141\143\164\x69\x6f\156"), [$this, "\x6b\x6f\163\157\141\157\165\157\147\x6b\145\x61\157\x6d\167\x6f"], 10, 2);
    }
    public function kgquecmsgcouyaya()
    {
        $ymqmyyeuycgmigyo = $this->miwqiiqeegeqcwis();
        $this->cecaguuoecmccuse($this->ygyygikyocoymgaw("{$ymqmyyeuycgmigyo}\137\x6d\141\x6e\141\x67\x65\x5f\166\x69\x65\167\x73"), [$this, "\x71\x65\x6f\x77\x63\x75\143\165\157\141\161\171\161\x77\x75\x77"])->cecaguuoecmccuse($this->ygyygikyocoymgaw("{$ymqmyyeuycgmigyo}\137\x6d\x61\156\x61\x67\x65\x5f\143\x6f\154\x75\x6d\x6e\163"), [$this, "\153\x67\x6f\x67\x6f\143\143\141\x69\x6d\x75\x79\x77\163\157\171"])->cecaguuoecmccuse($this->ygyygikyocoymgaw("{$ymqmyyeuycgmigyo}\x5f\x6d\141\x6e\141\x67\145\x5f\x73\x6f\162\164\141\142\154\145\137\143\x6f\154\165\155\x6e\163"), [$this, "\x78\145\x6b\x63\167\145\x63\x67\165\x79\153\155\x6d\147\x67\157"])->cecaguuoecmccuse($this->ygyygikyocoymgaw("{$ymqmyyeuycgmigyo}\x5f\162\157\x77\x5f\141\x63\x74\x69\157\156\x73"), [$this, "\155\143\141\x67\x67\x6d\x75\x79\x61\155\x67\x73\x6f\155\x61\x61"], 10, 4)->cecaguuoecmccuse($this->ygyygikyocoymgaw("{$ymqmyyeuycgmigyo}\137\142\x75\x6c\x6b\137\141\143\164\x69\x6f\x6e\163"), [$this, "\x6d\163\171\171\x65\163\167\x65\157\157\167\x63\x75\x75\157\x75"], 10, 2)->cecaguuoecmccuse($this->ygyygikyocoymgaw("\157\x72\x6d\137\166\151\x65\x77\137\163\x68\x6f\167\137{$ymqmyyeuycgmigyo}\x5f\x74\141\142\163"), [$this, "\165\165\x79\155\x6b\151\x79\147\x69\x75\141\x69\171\x65\155\141"], 10, 2)->cecaguuoecmccuse($this->ygyygikyocoymgaw("{$ymqmyyeuycgmigyo}\x5f\x6d\141\156\141\x67\145\x5f\143\165\163\x74\157\155\137\143\157\x6c\x75\155\x6e"), [$this, "\161\145\167\x6d\153\165\x77\171\x6d\161\x6b\x6b\143\155\161\155"], 10, 5)->cecaguuoecmccuse($this->ygyygikyocoymgaw("{$ymqmyyeuycgmigyo}\x5f\155\x61\156\141\x67\x65\x5f\145\x64\151\164\137\x66\x69\x65\x6c\x64\137\163\x68\x6f\167"), [$this, "\x66\x61\143\161\x77\161\155\147\x63\157\x67\x77\x73\x6f\153\x77"], 10, 4)->cecaguuoecmccuse($this->ygyygikyocoymgaw("{$ymqmyyeuycgmigyo}\x5f\155\141\156\x61\x67\x65\x5f\145\x64\151\164\137\x66\x69\145\x6c\144\x5f\166\141\x6c\165\145"), [$this, "\x6f\145\161\163\151\x65\155\x61\167\x6f\147\x77\x77\171\x6d\157"], 10, 4);
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
        iwosouqsesoqcska:
        geugsymgsiuuqccg:
        goto iacwyogogoccmwsg;
        cgmcwkmmcmmkiooc:
        goto quewwumogiocouii;
        goto iamooqskosymqsmw;
        iaygaasesyymwgss:
        quewwumogiocouii:
        goto iwosouqsesoqcska;
        wwccoougkywoaoui:
        if (in_array($aiowsaccomcoikus, $vkkeimekwwkyiyyc)) {
            goto gsimeiqkoyqkuecq;
        }
        goto eygqeoiskweuiuqi;
        ioacywuoyuskqmwy:
        if (!$vkkeimekwwkyiyyc) {
            goto geugsymgsiuuqccg;
        }
        goto bgoygegmogcmeaou;
        bgoygegmogcmeaou:
        if (is_array($vkkeimekwwkyiyyc)) {
            goto eyuoecmogqwkmomi;
        }
        goto awgaewwsskasueke;
        eygqeoiskweuiuqi:
        $vkkeimekwwkyiyyc = null;
        goto uykwmucgoywoesui;
        mgwgiesscqoaqcau:
        $vkkeimekwwkyiyyc = $this->timestamps;
        goto ioacywuoyuskqmwy;
        awgaewwsskasueke:
        $vkkeimekwwkyiyyc = $aiowsaccomcoikus;
        goto cgmcwkmmcmmkiooc;
        kiqmcymowosckmii:
        gqywcowiigceimaw:
        goto iaygaasesyymwgss;
        uykwmucgoywoesui:
        goto gqywcowiigceimaw;
        goto iisieuaeyiqwckou;
        iamooqskosymqsmw:
        eyuoecmogqwkmomi:
        goto wwccoougkywoaoui;
        iisieuaeyiqwckou:
        gsimeiqkoyqkuecq:
        goto oskwkeaemiqcaqkc;
        oskwkeaemiqcaqkc:
        $vkkeimekwwkyiyyc = $aiowsaccomcoikus;
        goto kiqmcymowosckmii;
        iacwyogogoccmwsg:
        return $vkkeimekwwkyiyyc;
        goto wqmwcuggcisqieao;
        wqmwcuggcisqieao:
    }
    
    public function mwikyscisascoeea() : ?int
    {
        return $this->id;
    }
    public function ckgyegkusmuymimo()
    {
        goto yyyyawaqcowsgqcs;
        gcsosokicycukoyc:
        
        $oammesyieqmwuwyi[] = $siykeiywomwwuoiw->find($aokagokqyuysuksm);
        goto seqammocqkyswaim;
        wammkmaqucqagqww:
        if (!$siykeiywomwwuoiw) {
            goto yueosioyegouuwqo;
        }
        goto iuooqassskiyeemo;
        usmagcaocwiugqum:
        $oammesyieqmwuwyi = [];
        goto sikmqkecsiyciaei;
        eokikuciuqkyauum:
        $siykeiywomwwuoiw = $this->kqewyqqqiyiouaou([$this->ukqioecasimmeygm() => [self::OPERATOR => self::LIKE, self::VALUE => "\x25{$qwcmueausqgiwigy}\45"]], $siykeiywomwwuoiw);
        goto ykuqeyogsasokqis;
        iuooqassskiyeemo:
        if ($aokagokqyuysuksm = $icwicymcioeyeyek[self::ID]) {
            goto issgmmkcgesyeoas;
        }
        goto cquyuwsisgqscemm;
        cquyuwsisgqscemm:
        $qwcmueausqgiwigy = $icwicymcioeyeyek[self::SEARCH];
        goto imykswegcuekqwio;
        seqammocqkyswaim:
        yeiicwscguyokwyu:
        goto coskmuqsawiaeyqg;
        sikmqkecsiyciaei:
        $qeiakyocuggicwsy = [];
        goto wmycwscioqackeig;
        coskmuqsawiaeyqg:
        yueosioyegouuwqo:
        goto umccwcqwkoiaakmu;
        umccwcqwkoiaakmu:
        foreach ($oammesyieqmwuwyi as $igqsaukqcqscimok) {
            goto swkeiggkawwgewuw;
            wmcucyuieqgqisis:
            mssaawaiaimogowg:
            goto qwsmiaegmcwuskwi;
            ywqouwqomiqwoquu:
            $qeiakyocuggicwsy[$aokagokqyuysuksm] = $sogksuscggsicmac;
            goto qcwkymcgqacaaywc;
            gaiaucesmcqgqwac:
            $ceiwsaacewygcsqg = $this->kumuygiiqswoyasy();
            goto kuimgwmkcgcoecko;
            swkeiggkawwgewuw:
            if (!$igqsaukqcqscimok) {
                goto umamqqwcoewcigew;
            }
            goto gaiaucesmcqgqwac;
            qcwkymcgqacaaywc:
            umamqqwcoewcigew:
            goto wmcucyuieqgqisis;
            eykiuqsamowqykam:
            ccyiggckemwgooco:
            goto ywqouwqomiqwoquu;
            kuimgwmkcgcoecko:
            $aokagokqyuysuksm = $igqsaukqcqscimok->{$ceiwsaacewygcsqg};
            goto oaskqsoyesmmeaew;
            miigqygoawqmkkqm:
            if (!$icwicymcioeyeyek["\155\141\x72\x6b\165\160"]) {
                goto ccyiggckemwgooco;
            }
            goto yywwaaiicukuwcao;
            oaskqsoyesmmeaew:
            $pkyyagewkiyckmwy = $this->uikgwcuascgeissw($igqsaukqcqscimok);
            goto aacaoywsaqscgyua;
            yywwaaiicukuwcao:
            $sogksuscggsicmac["\155\141\162\x6b\x75\160"] = $this->iuygowkemiiwqmiw($icwicymcioeyeyek["\x74\x65\x6d\x70\154\141\164\x65\x5f\x74\x79\x70\x65"], ["\x49\104" => $aokagokqyuysuksm, self::TITLE => $pkyyagewkiyckmwy, "\x6f\142\x6a\145\x63\164\x5f\164\171\160\145" => $this->oyeskqayoscwciem()->giiayuqckuiecosm()], ["\x63\154\141\x73\x73" => self::class]);
            goto eykiuqsamowqykam;
            aacaoywsaqscgyua:
            $sogksuscggsicmac = ["\x49\104" => $aokagokqyuysuksm, self::TEXT => $pkyyagewkiyckmwy, self::VALUE => $aokagokqyuysuksm];
            goto miigqygoawqmkkqm;
            qwsmiaegmcwuskwi:
        }
        goto ekgkiioywougquka;
        mqaamqyoywyekiko:
        
        $gmwiogsuisuoiwqu = $this->getPaginateItems($siykeiywomwwuoiw, [self::PAGE => $icwicymcioeyeyek[self::PAGE]]);
        goto smkakiyekkqoggao;
        smkakiyekkqoggao:
        $oammesyieqmwuwyi = $gmwiogsuisuoiwqu[self::ITEMS];
        goto zggweikegkcgkmma;
        zggweikegkcgkmma:
        goto yeiicwscguyokwyu;
        goto yisoawmmammassqk;
        yyyyawaqcowsgqcs:
        $icwicymcioeyeyek = ManipulateFormat::omaawkkwwyesqwcc(ManipulateServer::ayueggmoqeeukqmq(), ["\151\x64" => false, "\160\141\x67\145" => 1, "\141\162\x67\163" => [], "\151\x74\x65\x6d\x73" => [], "\x73\x65\x61\162\143\150" => null, "\155\141\x72\x6b\165\x70" => false, "\164\145\x6d\x70\x6c\x61\164\145\x5f\x74\x79\160\145" => "\141\152\x61\170\x5f\x72\145\x73\x75\154\x74"]);
        goto usmagcaocwiugqum;
        yisoawmmammassqk:
        issgmmkcgesyeoas:
        goto gcsosokicycukoyc;
        ykuqeyogsasokqis:
        qsyqcokomswykyso:
        goto mqaamqyoywyekiko;
        imykswegcuekqwio:
        if (!$qwcmueausqgiwigy) {
            goto qsyqcokomswykyso;
        }
        goto eokikuciuqkyauum;
        wyyowcsciaqkuiuq:
        $this->uaggqsoeugksgooc(true, $qeiakyocuggicwsy);
        goto imquwacukaswoyka;
        ekgkiioywougquka:
        giuoqsumkimmuaya:
        goto wyyowcsciaqkuiuq;
        wmycwscioqackeig:
        $siykeiywomwwuoiw = $this->gqaysymikgeawkqa();
        goto wammkmaqucqagqww;
        imquwacukaswoyka:
    }
    
    public function aeggeuqycwawueqy(Builder $siykeiywomwwuoiw, array $ywmkwiwkosakssii = []) : array
    {
        try {
            goto gsggsmmwcmkgyyss;
            mmesoisgqucowwms:
            
            $qcugmkuyweqqyggk = $ymiyawysimukkoso->lastPage();
            goto uieuouugckwokske;
            yicaqocukqoauqgc:
            if (!$ywmkwiwkosakssii["\x66\x69\x6c\164\x65\x72\137\166\x61\154\x75\145"]) {
                goto qwgkwokcyocqiyee;
            }
            goto kmcygqkmwcgwamkw;
            gsggsmmwcmkgyyss:
            $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\160\x61\x67\x65\x5f\x6e\x61\x6d\x65" => self::PAGE, self::PAGE => 1, self::DEFAULT => [], self::COLUMNS => ["\52"], "\x66\x69\154\x74\145\x72\x5f\166\x61\154\x75\x65" => true, self::PER_PAGE => ManipulateSetting::omkaowmygoqwsywq()]);
            goto yweucowesgsoewyc;
            yweucowesgsoewyc:
            
            $ymiyawysimukkoso = $siykeiywomwwuoiw->paginate($ywmkwiwkosakssii[self::PER_PAGE] ?: 10, $ywmkwiwkosakssii[self::COLUMNS] ?: ["\52"], $ywmkwiwkosakssii["\x70\141\x67\145\x5f\156\141\155\145"] ?: self::PAGE, $ywmkwiwkosakssii[self::PAGE] ?: 1);
            goto ikygockuuyimmmwk;
            uieuouugckwokske:
            
            $weyoqgcesqgeusiu = $ymiyawysimukkoso->perPage();
            goto seaiwkkgyyegiyug;
            uwmcugkwqwcuqqsq:
            if ($oammesyieqmwuwyi) {
                goto smksoismyouykeoa;
            }
            goto cycasoiysmksuwqk;
            muimagegskoisckc:
            smksoismyouykeoa:
            goto yicaqocukqoauqgc;
            sueeqeioeiwkscao:
            
            $uuwmqqqiwksuaise = $ymiyawysimukkoso->total();
            goto mmesoisgqucowwms;
            ikygockuuyimmmwk:
            
            $oammesyieqmwuwyi = $ymiyawysimukkoso->items();
            goto uwmcugkwqwcuqqsq;
            gysmigyakgaakeoy:
            qwgkwokcyocqiyee:
            goto sueeqeioeiwkscao;
            kmcygqkmwcgwamkw:
            $oammesyieqmwuwyi = $this->cwgkcyyaymmsomqa($oammesyieqmwuwyi);
            goto gysmigyakgaakeoy;
            cycasoiysmksuwqk:
            $oammesyieqmwuwyi = ManipulateArray::get($ywmkwiwkosakssii, self::DEFAULT);
            goto muimagegskoisckc;
            seaiwkkgyyegiyug:
        } catch (Exception $wgaoewqkwgomoaai) {
            goto maeccckgcsaaumkw;
            kcqueaewmayywqeq:
            $weyoqgcesqgeusiu = 0;
            goto uagsgicwwcakecwq;
            maeccckgcsaaumkw:
            $oammesyieqmwuwyi = [];
            goto gcoeaokkagaaeuse;
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
        return ["\160\141\147\x69\x6e\x61\x74\151\157\156" => ["\x74\157\164\141\x6c" => $uuwmqqqiwksuaise, "\x70\141\147\145\x73" => $ocqawgquwsqioses, self::PER_PAGE => $weyoqgcesqgeusiu], self::ITEMS => $oammesyieqmwuwyi];
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
        qugsgsscqyikugyc:
        kmwwqgiacsoksgcy:
        goto gskaqcgccswmuqsy;
        saycoceqywiekqsi:
        return $oyuikeusicgqgwak;
        goto sqaowueaequoigsa;
        ysiwoiqiaosqoikm:
        $vkkeimekwwkyiyyc = $this->timestamps;
        goto eieiwacwqkgsewai;
        gigiwwouakeekoim:
        uauuoyigkmqoasaq:
        goto esuuweysgwuwcuue;
        ykuycowuguumseuu:
        foreach ($vkkeimekwwkyiyyc as $yiuogaeewyockeak) {
            goto aemoyqueimayqcaw;
            oeeasouoaaoaaemm:
            $oyuikeusicgqgwak[] = $aaqqkgyougeiueyq;
            goto icmsyimgycuocisu;
            iaockwkwaiqgeuyu:
            ugqucegcucyyayga:
            goto oeeasouoaaoaaemm;
            woaoeyaowkuukkqm:
            switch ($yiuogaeewyockeak) {
                case self::CREATED_AT:
                    $aaqqkgyougeiueyq->gswweykyogmsyawy(__("\x43\162\x65\x61\164\x65\144\40\101\x74", PR__CMN__FOUNDATION));
                    goto ugqucegcucyyayga;
                case self::UPDATED_AT:
                    $aaqqkgyougeiueyq->gswweykyogmsyawy(__("\x55\x70\144\141\164\145\144\x20\101\164", PR__CMN__FOUNDATION));
                    goto ugqucegcucyyayga;
            }
            goto mmqkuymyyycywmqu;
            aemoyqueimayqcaw:
            $aaqqkgyougeiueyq = self::ceqawoymcymsaeqo($yiuogaeewyockeak)->jyumyyugiwwiqomk(5000);
            goto woaoeyaowkuukkqm;
            mmqkuymyyycywmqu:
            sequgigsgkqaikmq:
            goto iaockwkwaiqgeuyu;
            icmsyimgycuocisu:
            akieeaeqiwugimie:
            goto wassyiqsqasaoiau;
            wassyiqsqasaoiau:
        }
        goto qugsgsscqyikugyc;
        gskaqcgccswmuqsy:
        uekueeyqaackuwao:
        goto uccuykggugcmiyam;
        eieiwacwqkgsewai:
        if (!$vkkeimekwwkyiyyc) {
            goto uaiiuywoakccusge;
        }
        goto gokwmwmaumiwscua;
        uccuykggugcmiyam:
        uaiiuywoakccusge:
        goto saycoceqywiekqsi;
        eauiumeeyckucuyc:
        $vkkeimekwwkyiyyc = [self::CREATED_AT, self::UPDATED_AT];
        goto gigiwwouakeekoim;
        gokwmwmaumiwscua:
        if (!is_bool($vkkeimekwwkyiyyc)) {
            goto uauuoyigkmqoasaq;
        }
        goto eauiumeeyckucuyc;
        esuuweysgwuwcuue:
        if (!is_array($vkkeimekwwkyiyyc)) {
            goto uekueeyqaackuwao;
        }
        goto ykuycowuguumseuu;
        sqaowueaequoigsa:
    }
    public final function ewaqwooqoqmcoomi()
    {
        
        $this->oyeskqayoscwciem()->ckaemmoueyosqqkq(ManipulateArray::yaeiiwwyckwugsem($this->eucukwckumgiyyww()));
    }
    public final function cgamuwiqsgwsikkm()
    {
        goto yuoyeeuqqaockyqw;
        iqukigoyiqgcggue:
        $yyksucsgisomecgg = $this->oyeskqayoscwciem();
        goto amkcomscieegkygc;
        qcywwqceiqogcoyo:
        foreach ($yyksucsgisomecgg->aioqieywgykaaoec() as $qqomumygoacsmsie => $ywmkwiwkosakssii) {
            goto asueqykmkoaimguq;
            oeosugomyqyekmuq:
            kkogaccoqmsmmkmo:
            goto emgssiqceagusgyg;
            ysusaysykymegguk:
            if (!$ewgsciccscsweqik) {
                goto aosasoogesueygak;
            }
            goto yskswskmsgoouyco;
            gooqkmwgsmseuiwq:
            switch ($qqomumygoacsmsie) {
                case "\151\156\144\x65\x78":
                    goto ysaumykuimqigeqa;
                    eyskqaccgeomqmyw:
                    if (!$ikugycsiyegwoiay) {
                        goto qmiqicgscsuoyeqo;
                    }
                    goto uiowwckamqucksim;
                    uiowwckamqucksim:
                    $this->icyamyikwyaaoqya("\x61\x64\144", $yyksucsgisomecgg->uikgwcuascgeissw("\141\x64\x64\137\156\x65\x77\x5f\x69\164\x65\x6d"), ["\x68\162\145\146" => $ikugycsiyegwoiay]);
                    goto wscikmsmwmocsqeu;
                    oegaywiwywuyksaq:
                    $ikugycsiyegwoiay = $this->acsiseaeysswwqkw();
                    goto eyskqaccgeomqmyw;
                    wscikmsmwmocsqeu:
                    qmiqicgscsuoyeqo:
                    goto icawmkaswkmwicsa;
                    ysaumykuimqigeqa:
                    $ewgsciccscsweqik = new Index($this, $ywmkwiwkosakssii);
                    goto oegaywiwywuyksaq;
                    icawmkaswkmwicsa:
                    goto yuyiqaawwgaywgqo;
                    goto imsgusweocmiyygi;
                    imsgusweocmiyygi:
                case "\145\x64\x69\x74":
                case "\x61\144\144":
                    goto igckskemqkqueukg;
                    imaiuooqwwokwemw:
                    qwueqigcisoogaec:
                    goto mioqycmmeucswoms;
                    wgmeyycmqioioaqc:
                    if (!in_array($suaemuyiacqyugsm, [$ymqmyyeuycgmigyo, "\145\144\151\164\x5f{$ymqmyyeuycgmigyo}", "\141\144\x64\137{$ymqmyyeuycgmigyo}", "\x73\150\x6f\167\x5f{$ymqmyyeuycgmigyo}"])) {
                        goto weuueokkumksgaeo;
                    }
                    goto ykiyuciecskusaae;
                    mioqycmmeucswoms:
                    kmeekqukcecuscye:
                    goto mioaoacqueiyueak;
                    ykiyuciecskusaae:
                    if ($uieukiskgwkouwyi) {
                        goto kmeekqukcecuscye;
                    }
                    goto pssquaaiioygwqoq;
                    oaseseemoaqcgqeu:
                    $ewgsciccscsweqik = new Edit($this, $ywmkwiwkosakssii);
                    goto kuymgsewmeoimeuq;
                    mioaoacqueiyueak:
                    if (!$this->ugmceccgwaaaigiy()) {
                        goto csoeisssoumqqeoa;
                    }
                    goto oaseseemoaqcgqeu;
                    gimsiyauegmikyka:
                    weuueokkumksgaeo:
                    goto kisuswmyqsocukgk;
                    kisuswmyqsocukgk:
                    goto yuyiqaawwgaywgqo;
                    goto wisaekiyyweeemuy;
                    keyiswqkmqqquosw:
                    $eaoumsseceiowgsk->asumqyigwsqmyeoc($this);
                    goto imaiuooqwwokwemw;
                    igckskemqkqueukg:
                    $ymqmyyeuycgmigyo = $yyksucsgisomecgg->aakmagwggmkoiiyu();
                    goto wgmeyycmqioioaqc;
                    qmuikumqukcyaeqa:
                    if (!$eaoumsseceiowgsk instanceof Form) {
                        goto qwueqigcisoogaec;
                    }
                    goto keyiswqkmqqquosw;
                    momgmqemgcasyuqq:
                    $eaoumsseceiowgsk = Form::symcgieuakksimmu($ymqmyyeuycgmigyo);
                    goto qmuikumqukcyaeqa;
                    kuymgsewmeoimeuq:
                    csoeisssoumqqeoa:
                    goto gimsiyauegmikyka;
                    pssquaaiioygwqoq:
                    $this->aygiawwcgymgyaya();
                    goto ucugeysomcyceyos;
                    ucugeysomcyceyos:
                    $uieukiskgwkouwyi = true;
                    goto momgmqemgcasyuqq;
                    wisaekiyyweeemuy:
                case "\163\x68\157\167":
                    $ewgsciccscsweqik = new Show($this, $ywmkwiwkosakssii);
                    goto yuyiqaawwgaywgqo;
                default:
                    $ewgsciccscsweqik = new View($this, $ywmkwiwkosakssii);
                    goto yuyiqaawwgaywgqo;
            }
            goto oeosugomyqyekmuq;
            emgssiqceagusgyg:
            yuyiqaawwgaywgqo:
            goto ysusaysykymegguk;
            mmusoowesqcmuqew:
            yqkyoaiwcyqeaqwu:
            goto wkwkeicwosmkcygc;
            oaciskoioaecgwee:
            aosasoogesueygak:
            goto csskguekqcwcmocu;
            isaouwiaamimceeg:
            if (!($ywmkwiwkosakssii instanceof View || is_subclass_of($ywmkwiwkosakssii, View::class))) {
                goto emqmqkeygumaasam;
            }
            goto kcwyeqmysgqkoqcm;
            yskswskmsgoouyco:
            $this->ecmiqywsauuoccwo($qqomumygoacsmsie, $ewgsciccscsweqik);
            goto oaciskoioaecgwee;
            ugowqoisymsioeye:
            meegaqaesckqmyec:
            goto gooqkmwgsmseuiwq;
            kcwyeqmysgqkoqcm:
            $this->ecmiqywsauuoccwo($qqomumygoacsmsie, $ywmkwiwkosakssii);
            goto wamgcqkaieummksu;
            iyocimuyeemkaaso:
            if (is_array($ywmkwiwkosakssii)) {
                goto meegaqaesckqmyec;
            }
            goto isaouwiaamimceeg;
            asueqykmkoaimguq:
            $ewgsciccscsweqik = null;
            goto iyocimuyeemkaaso;
            mwgaaiaswusakkaq:
            goto scccyaiaggeasgqg;
            goto ugowqoisymsioeye;
            csskguekqcwcmocu:
            scccyaiaggeasgqg:
            goto mmusoowesqcmuqew;
            wamgcqkaieummksu:
            emqmqkeygumaasam:
            goto mwgaaiaswusakkaq;
            wkwkeicwosmkcygc:
        }
        goto giiucsyqgcooaima;
        giiucsyqgcooaima:
        waycokyiesmqgqcg:
        goto awikkaqmmuqkukma;
        qkiqquymecyoouki:
        $suaemuyiacqyugsm = ManipulateServer::get(self::PAGE);
        goto iqukigoyiqgcggue;
        amkcomscieegkygc:
        if (!(strpos($suaemuyiacqyugsm, $yyksucsgisomecgg->aakmagwggmkoiiyu()) !== false)) {
            goto eqmauwqqowsiwaue;
        }
        goto uugekiumuwemyuyc;
        qoameasiqwaqgmca:
        eqmauwqqowsiwaue:
        goto osoqssymqqoqcuky;
        uugekiumuwemyuyc:
        $orm_model = $this;
        goto qoameasiqwaqgmca;
        osoqssymqqoqcuky:
        $uieukiskgwkouwyi = false;
        goto qcywwqceiqogcoyo;
        awikkaqmmuqkukma:
        ugcyukgoaiiysymc:
        goto uckeuuaqimqamuyc;
        yuoyeeuqqaockyqw:
        
        if (ManipulateAjax::mcgoysmkqsqooceq()) {
            goto ugcyukgoaiiysymc;
        }
        goto kygcymkakucoeock;
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
        cceyoumkiicaguio:
        $qqomumygoacsmsie = str_replace("\137{$ymqmyyeuycgmigyo}", '', ManipulateServer::get(self::PAGE));
        goto yayykakkyeoieicm;
        yayykakkyeoieicm:
        if (!($qqomumygoacsmsie === $ymqmyyeuycgmigyo)) {
            goto mieeugiewckceagc;
        }
        goto yuiouamaogkkqmck;
        wsckacayikksiswo:
        return $qqomumygoacsmsie;
        goto qiawociayswicugw;
        yuiouamaogkkqmck:
        $qqomumygoacsmsie = "\151\x6e\x64\145\x78";
        goto mmwqwowqcaseyyki;
        mmwqwowqcaseyyki:
        mieeugiewckceagc:
        goto wsckacayikksiswo;
        qiawociayswicugw:
    }
    
    public function uqiykqoyaqymcues() : bool
    {
        return $this->hkwssiimkcysaiyo() == "\x65\144\x69\x74";
    }
    
    public function wkcuasmkgoscaiay() : bool
    {
        return $this->hkwssiimkcysaiyo() == "\163\x68\157\167";
    }
    
    public function wmwguecgowcscues() : bool
    {
        return $this->hkwssiimkcysaiyo() == "\151\x6e\144\x65\170";
    }
    
    public final function aygiawwcgymgyaya() : ?array
    {
        goto yoaewquyogiimyic;
        cicegcoqyuoggiwy:
        return $this->ugmceccgwaaaigiy();
        goto ugcwqacogqoswyse;
        yoaewquyogiimyic:
        $ikgwqyuyckaewsow = $this->kssgsuewkcwgiksa();
        goto wmcmqmmcweecqmsw;
        qsmoiwqcuamyuwyu:
        ngagwiymmmycgscu:
        goto cicegcoqyuoggiwy;
        wmcmqmmcweecqmsw:
        $qssskwiqeumgkago = $this->oyeskqayoscwciem()->aeosueemgsygqese();
        goto aakoeuuosouyeemc;
        aakoeuuosouyeemc:
        foreach ($ikgwqyuyckaewsow as $uusmaiomayssaecw => $uiewakwqscemywuo) {
            goto cksoeiwawiygyiyg;
            acsigwcaesyyoiie:
            if (in_array($eewwgseqamqiouyq, ["\x64\x61\164\x65", "\144\141\x74\x65\x74\151\155\145"])) {
                goto augqweqsqioesmim;
            }
            goto aqaaqeucgoegeeuk;
            wmwgeoequuwwwywa:
            $uiewakwqscemywuo[self::TYPE] = $sqeykgyoooqysmca;
            goto uqugcugeomqakcqo;
            iyceygqsmokgmams:
            goto aescssauecumgwso;
            goto wcekgciqeggiiwgk;
            kmqusaiaiogecyiy:
            mgieeyuyuoeccaog:
            goto swckikycciugciqq;
            gwyseusuceuwwccu:
            goto sgikkoswwyesqomo;
            goto icouowaoycuuisqe;
            wcekgciqeggiiwgk:
            augqweqsqioesmim:
            goto gkwuewqmqeswqukg;
            wcsysckgigeykkwy:
            if ($sqeykgyoooqysmca) {
                goto weiaigyyigkusucy;
            }
            goto scgmwokeuqwiekkk;
            ggaucuaykyuiikem:
            aayysiegiyweiyuu:
            goto egikqoaqqegawugu;
            ocmwuquguuqigose:
            switch ($eewwgseqamqiouyq) {
                case "\145\156\x75\x6d":
                    goto gwksywaoeowkesei;
                    gwksywaoeowkesei:
                    if (!$aiowsaccomcoikus instanceof BSSelect) {
                        goto amgsicqmemeuuaem;
                    }
                    goto sgkwaiuukkaqyqki;
                    sgkwaiuukkaqyqki:
                    $aiowsaccomcoikus->acauweqyyugwisqc($aaqqkgyougeiueyq->gkwkqmwweiawigae());
                    goto emagssesowicacoa;
                    cauqmacqkssciwyq:
                    goto bagkewioewygysea;
                    goto gusgywuaimwooawc;
                    emagssesowicacoa:
                    amgsicqmemeuuaem:
                    goto cauqmacqkssciwyq;
                    gusgywuaimwooawc:
                case "\146\x6f\x72\x65\x69\147\156":
                    goto acmgueaoaaweiqqu;
                    acmgueaoaaweiqqu:
                    if (!$aiowsaccomcoikus instanceof BSSelect) {
                        goto uugwoygiyecgymgw;
                    }
                    goto awaaowoqskgokwiy;
                    awaaowoqskgokwiy:
                    $aiowsaccomcoikus->wkqyoukciomqiyew()->oeewiaacscgyamai($aaqqkgyougeiueyq->uecyuoauykiqqkey());
                    goto uqiekawkwcegsumy;
                    kgikoagqwkuocesg:
                    goto bagkewioewygysea;
                    goto skaayekywasksoug;
                    uqiekawkwcegsumy:
                    uugwoygiyecgymgw:
                    goto kgikoagqwkuocesg;
                    skaayekywasksoug:
            }
            goto kmqusaiaiogecyiy;
            coogyackikgmecic:
            $this->qaqsggqyouammqgm($aiowsaccomcoikus);
            goto iqwsqykoueqyyomy;
            qcweoyigoaeacsow:
            kkacggiosquqagew:
            goto iyceygqsmokgmams;
            yeiokcoikcysyimu:
            cooeoemccqiyewks:
            goto kkmwwqyesmkescyg;
            wickgagwgqqsomum:
            weiaigyyigkusucy:
            goto wmwgeoequuwwwywa;
            qmoisuweiskkekca:
            if ($aiowsaccomcoikus) {
                goto gkoyqgogsukuowqi;
            }
            goto wywwieycqskuqcwc;
            kkmwwqyesmkescyg:
            $sqeykgyoooqysmca = "\x74\145\x78\164\141\x72\x65\x61";
            goto uamuuwkyuqomqyuy;
            cyqokqcacysioeyc:
            if (!$aaqqkgyougeiueyq instanceof Field) {
                goto aayysiegiyweiyuu;
            }
            goto akwwuuiykscgicuw;
            uqugcugeomqakcqo:
            $aiowsaccomcoikus = MetaBox::okmsgamiiemyesao($uiewakwqscemywuo);
            goto qmoisuweiskkekca;
            gkwuewqmqeswqukg:
            $sqeykgyoooqysmca = "\x64\x61\x74\145";
            goto sagemooicmgceiug;
            yuqisiwgqacgmsym:
            mquyemuqcqeassqc:
            goto wickgagwgqqsomum;
            umcyeiusoakewyaa:
            sykuuisikqcwuaqu:
            goto ksawwekgswywwuwm;
            uamuuwkyuqomqyuy:
            qcceyyqiuiqcyqqm:
            goto ekwuycsiuqwycqea;
            koiiaewwicsckseu:
            goto mquyemuqcqeassqc;
            goto umcyeiusoakewyaa;
            ueqsiwuwumoqgsck:
            $eewwgseqamqiouyq = $aaqqkgyougeiueyq->gueasuouwqysmomu();
            goto iikgiaocummweiga;
            ekwuycsiuqwycqea:
            goto qkwckeqowgaokkuy;
            goto iyaugygcsmqqqkmo;
            ksawwekgswywwuwm:
            $sqeykgyoooqysmca = "\142\x73\163\145\x6c\x65\143\x74";
            goto yuqisiwgqacgmsym;
            iikgiaocummweiga:
            $uiewakwqscemywuo = ManipulateFormat::omaawkkwwyesqwcc($uiewakwqscemywuo, $qqgeiaygkaoyccig);
            goto gsusqquicmukegcs;
            icouowaoycuuisqe:
            gkoyqgogsukuowqi:
            goto ocmwuquguuqigose;
            uqcwyyiykmwygeau:
            goto qcceyyqiuiqcyqqm;
            goto yeiokcoikcysyimu;
            swckikycciugciqq:
            bagkewioewygysea:
            goto coogyackikgmecic;
            wycmcqaauqkgegau:
            $sqeykgyoooqysmca = "\x62\163\x73\145\154\145\x63\164";
            goto qcweoyigoaeacsow;
            iyikuwuweqigiuey:
            if (in_array($eewwgseqamqiouyq, ["\164\x65\170\164"])) {
                goto cooeoemccqiyewks;
            }
            goto acsigwcaesyyoiie;
            gsusqquicmukegcs:
            $sqeykgyoooqysmca = ManipulateArray::get($uiewakwqscemywuo, "\164\x79\x70\x65");
            goto wcsysckgigeykkwy;
            scgmwokeuqwiekkk:
            if ($aaqqkgyougeiueyq instanceof Foreign) {
                goto sykuuisikqcwuaqu;
            }
            goto ceusyscosamyaiws;
            owaimkmgemoqewmm:
            kqkymieyyqaoeymw:
            goto ysoqeuugiuswykyu;
            akwwuuiykscgicuw:
            $qqgeiaygkaoyccig = ["\141\157\x6b\x61\x67\157\153\x71\171\x75\x79\x73\165\153\163\155" => $uusmaiomayssaecw, "\x79\155\x71\x6d\x79\171\x65\165\x79\143\147\155\151\147\171\157" => $aaqqkgyougeiueyq->qcgakseyaikigqco()];
            goto ueqsiwuwumoqgsck;
            iqwsqykoueqyyomy:
            sgikkoswwyesqomo:
            goto ggaucuaykyuiikem;
            cksoeiwawiygyiyg:
            $aaqqkgyougeiueyq = ManipulateArray::get($qssskwiqeumgkago, $uusmaiomayssaecw);
            goto cyqokqcacysioeyc;
            sagemooicmgceiug:
            aescssauecumgwso:
            goto uqcwyyiykmwygeau;
            eoeiaccouaymakgm:
            goto gqyyccceswkqcmaa;
            goto owaimkmgemoqewmm;
            yggciikgkomgeqsc:
            qkwckeqowgaokkuy:
            goto eoeiaccouaymakgm;
            ceusyscosamyaiws:
            if (in_array($eewwgseqamqiouyq, ["\142\157\x6f\x6c\x65\141\x6e", "\x74\x69\x6e\171\151\156\x74"])) {
                goto kqkymieyyqaoeymw;
            }
            goto gysmmooawoeggaow;
            aqaaqeucgoegeeuk:
            if (!in_array($eewwgseqamqiouyq, ["\x65\x6e\x75\155"])) {
                goto kkacggiosquqagew;
            }
            goto wycmcqaauqkgegau;
            wywwieycqskuqcwc:
            throw new UnexpectedValueException("{$uusmaiomayssaecw}\40\151\163\x20\156\157\x74\40\141\x20\x76\141\154\151\x64\40\x66\x69\x65\x6c\144\x2e");
            goto gwyseusuceuwwccu;
            ysoqeuugiuswykyu:
            $sqeykgyoooqysmca = "\x63\x68\145\143\153\142\157\170";
            goto usmuqsuwuueogimc;
            cieumoqayigkoocy:
            $sqeykgyoooqysmca = "\x74\145\x78\164";
            goto yggciikgkomgeqsc;
            gysmmooawoeggaow:
            if (in_array($eewwgseqamqiouyq, ["\x73\164\x72\151\156\147", "\142\x69\147\151\156\164"])) {
                goto ssesmiwwmsayksum;
            }
            goto iyikuwuweqigiuey;
            egikqoaqqegawugu:
            qimomesqamyyicmo:
            goto caaygouikgagsssc;
            usmuqsuwuueogimc:
            gqyyccceswkqcmaa:
            goto koiiaewwicsckseu;
            iyaugygcsmqqqkmo:
            ssesmiwwmsayksum:
            goto cieumoqayigkoocy;
            caaygouikgagsssc:
        }
        goto qsmoiwqcuamyuwyu;
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
        egmocemomockemia:
        $qssskwiqeumgkago = $this->oyeskqayoscwciem()->aeosueemgsygqese();
        goto gemwkqocygssmequ;
        kucqcqeesaiacekm:
        return $wkkweuacukumqmya;
        goto cewyaqiqmmwmauce;
        acisycocoswkekik:
        saekesoeysauokkq:
        goto aaiymmkqmocgakei;
        cqaeiesyciakcagu:
        foreach ($qssskwiqeumgkago as $aiowsaccomcoikus) {
            goto sqmiymiemeegegic;
            csqakuuiyywassgw:
            $wkkweuacukumqmya[$aiowsaccomcoikus->mwikyscisascoeea()] = $aiowsaccomcoikus->qcgakseyaikigqco();
            goto esqiocgueosoksyq;
            sqmiymiemeegegic:
            if (!($aiowsaccomcoikus instanceof Field && $aiowsaccomcoikus->uwaascqoguwkwiaw())) {
                goto meseuuacmkuowqau;
            }
            goto csqakuuiyywassgw;
            csggsqueaqmwgwkk:
            wycuyiukyceccaow:
            goto sescaagayikiggyq;
            esqiocgueosoksyq:
            meseuuacmkuowqau:
            goto csggsqueaqmwgwkk;
            sescaagayikiggyq:
        }
        goto acisycocoswkekik;
        gemwkqocygssmequ:
        if (!($qssskwiqeumgkago && is_array($qssskwiqeumgkago))) {
            goto wwwggoemicgwwasy;
        }
        goto cqaeiesyciakcagu;
        aaiymmkqmocgakei:
        wwwggoemicgwwasy:
        goto kucqcqeesaiacekm;
        cewyaqiqmmwmauce:
    }
    
    public function qeowcucuoaqyqwuw($umwgoasiowmqcumw) : array
    {
        goto amoygaweoeymiuiy;
        kcomueysiyyqagus:
        $ymaogssqccumcyqa = $this->aakiaoueckoiyoew();
        goto ckuagmyqkyoeeaeu;
        ckuagmyqkyoeeaeu:
        $scsyuucsumiwkqqc = ManipulateServer::get("\x6f\x72\155\x5f\x66\151\x6c\x74\x65\162\137\x76\141\x6c\x75\145");
        goto cqwgmwqiakmgyuee;
        ksgwgcguemcescqg:
        $umwgoasiowmqcumw = ["\x61\154\154" => ["\x74\x69\164\x6c\x65" => __("\x41\154\x6c", PR__CMN__FOUNDATION), "\143\157\x75\156\x74" => array_sum(array_map(function ($mokouoooiwsmcmiu) {
            return $mokouoooiwsmcmiu["\x63\157\x75\156\x74"];
        }, $umwgoasiowmqcumw))]] + $umwgoasiowmqcumw;
        goto kiwiesucugwoiuum;
        cmagycousakeeaei:
        scyqmcegwikkoesw:
        goto eekeksysqeuoskoo;
        eekeksysqeuoskoo:
        moimkkmkooeiyisc:
        goto okemsmmeceoeaswi;
        amoygaweoeymiuiy:
        $momcykaoccoymeig = 1;
        goto kcomueysiyyqagus;
        kiwiesucugwoiuum:
        foreach ($umwgoasiowmqcumw as $qqomumygoacsmsie => $icwicymcioeyeyek) {
            goto qscqkykqskqmisgw;
            syeeegeygawwqiuu:
            $umwgoasiowmqcumw[$qqomumygoacsmsie] = ManipulateHTML::qgsekwygcgawekeq("\141", ["\147\x65\145\x63\161\x79\157\163\x6f\x73\143\x65\x75\x6d\163\153" => $geecqyososceumsk, "\x63\x6c\x61\x73\163" => "\157\x72\x6d\x2d\146\x69\154\x74\x65\x72\55\x6c\x69\x6e\x6b" . ($yeacayasgueouoqc ? "\40\143\165\x72\x72\x65\156\164" : '')], true, sprintf("\45\163\x20\x28\45\x73\x29", $meqocwsecsywiiqs, ManipulateHTML::gmqyuaqwgiayskei($this->wusgwkaycokeckqs($gaeqamemwmwsyukm))));
            goto iuieskocqoqkkwus;
            yomoeykcqyukscmi:
            goto qgqasacusgwmoegy;
            goto swmgucaogosuueug;
            uwsmcsiiisuocgwg:
            $geecqyososceumsk = ManipulateServer::ekcymmyqoceukosc(true);
            goto suaymckwwgmugsaa;
            qscqkykqskqmisgw:
            $meqocwsecsywiiqs = ManipulateArray::get($icwicymcioeyeyek, "\x74\x69\164\154\145", false);
            goto ksqgwiceoomkuuiy;
            uekkkmwciocmosgg:
            goto sccqekuwywiisami;
            goto ecqeqquikuomwgsu;
            suaymckwwgmugsaa:
            if ($qqomumygoacsmsie !== "\x61\x6c\154") {
                goto ciwggusyecgskagy;
            }
            goto wsqoskqgyooqeyga;
            iuieskocqoqkkwus:
            $momcykaoccoymeig++;
            goto isiqkeyciyqgkayu;
            wmcaecgwmmwuuqsq:
            sccqekuwywiisami:
            goto ycskuioouwwemgke;
            gkoiyaagwgycysim:
            if ($meqocwsecsywiiqs) {
                goto eokcuuwqaomkooag;
            }
            goto ysssquieawyysiyc;
            ecqeqquikuomwgsu:
            ciwggusyecgskagy:
            goto igscwycsqsckmcuq;
            wsqoskqgyooqeyga:
            $geecqyososceumsk = DecoratorQuery::oiamiqcuyksmmomm([self::ORM_FILTER_BY, self::ORM_FILTER_VALUE], $geecqyososceumsk);
            goto uekkkmwciocmosgg;
            gwayeyymscmgwqkg:
            ycweseaccsomkioa:
            goto caoikoqmyeqsqqqe;
            ysssquieawyysiyc:
            ManipulateArray::unset($cqcsaaswaciweiie, $qqomumygoacsmsie);
            goto yomoeykcqyukscmi;
            swmgucaogosuueug:
            eokcuuwqaomkooag:
            goto uwsmcsiiisuocgwg;
            ksqgwiceoomkuuiy:
            $gaeqamemwmwsyukm = ManipulateArray::get($icwicymcioeyeyek, "\x63\157\165\156\x74", 0);
            goto gkoiyaagwgycysim;
            isiqkeyciyqgkayu:
            qgqasacusgwmoegy:
            goto gwayeyymscmgwqkg;
            igscwycsqsckmcuq:
            $geecqyososceumsk = DecoratorQuery::yqymaqmqiqmmmsoo([self::ORM_FILTER_BY => $ymaogssqccumcyqa, self::ORM_FILTER_VALUE => $qqomumygoacsmsie], $geecqyososceumsk);
            goto wmcaecgwmmwuuqsq;
            ycskuioouwwemgke:
            $yeacayasgueouoqc = $scsyuucsumiwkqqc ? $scsyuucsumiwkqqc === $qqomumygoacsmsie : $momcykaoccoymeig === 1;
            goto syeeegeygawwqiuu;
            caoikoqmyeqsqqqe:
        }
        goto cmagycousakeeaei;
        okemsmmeceoeaswi:
        return $umwgoasiowmqcumw;
        goto ossyqogewmggmaoc;
        cqwgmwqiakmgyuee:
        if (!(is_array($umwgoasiowmqcumw) && $umwgoasiowmqcumw)) {
            goto moimkkmkooeiyisc;
        }
        goto ksgwgcguemcescqg;
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
        eosmwawqaocwgccq:
        if (!$iqoeaggekweuwcgw) {
            goto ggkoiouwecyiosym;
        }
        goto eymiqwsygoowowuu;
        eymiqwsygoowowuu:
        $ceiwsaacewygcsqg = $this->myywwqkyiwawwquy($ceiwsaacewygcsqg);
        goto keqagmaiqqsgkmso;
        egosmwkuuikwqeak:
        $ceiwsaacewygcsqg = $this->primaryKey;
        goto eosmwawqaocwgccq;
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
        qimieogaimwmukmu:
        try {
            goto wkcwuemioaiyouek;
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
            qosckaqceoumcasm:
            euogcyyayioyyiyg:
            goto gmcqkoqwkiawaikw;
            usgmimcwygsmcioa:
            
            $siykeiywomwwuoiw = $this->getConnection()->table($aasascamegmwqmqk);
            goto qggiogeyowcoaiqy;
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
        ikeyoyoigsuouokm:
        cokacyaayuueyuuu:
        goto eecgougegqassgyq;
        ckowiuagwmsqmiqc:
        $aokagokqyuysuksm = ManipulateArray::get($mksyucucyswaukig, $this->kumuygiiqswoyasy());
        goto eqieeecackceeweg;
        ygywkqgioiscmuie:
        koawwmccgquqqmwa:
        goto iuaommmyqoecmuss;
        cycyaqqawmwiywwe:
        if (is_numeric($mksyucucyswaukig)) {
            goto koawwmccgquqqmwa;
        }
        goto ckowiuagwmsqmiqc;
        eqieeecackceeweg:
        goto cokacyaayuueyuuu;
        goto ygywkqgioiscmuie;
        iuaommmyqoecmuss:
        $aokagokqyuysuksm = $mksyucucyswaukig;
        goto ikeyoyoigsuouokm;
        eecgougegqassgyq:
        return $this->cyyiiykmaeuqqgok($aokagokqyuysuksm);
        goto cuwkqgemkmuuegkc;
        cuwkqgemkmuuegkc:
    }
    
    public function getConnection() : Database
    {
        goto wemmseueskwkcwou;
        ceeqguaoysyaasey:
        $mgcmmwqwguicsews->wcweamocuicuusky("\x6e\141\x6d\145", $ymqmyyeuycgmigyo);
        goto ekmqouqsgsaukeiq;
        wemmseueskwkcwou:
        $ymqmyyeuycgmigyo = $this->miwqiiqeegeqcwis();
        goto cceakqgoysacqwmc;
        cugkqmkuyuwwqcec:
        return $mgcmmwqwguicsews;
        goto ewooakeuigcyuemu;
        ekmqouqsgsaukeiq:
        oyicskieeaewgwce:
        goto cugkqmkuyuwwqcec;
        cceakqgoysacqwmc:
        $mgcmmwqwguicsews = Database::symcgieuakksimmu($ymqmyyeuycgmigyo);
        goto scaimkkukmgoeaya;
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
        cgqkqmiekaageyka:
        wceiuqaeywmgscww:
        goto goimywgsweeqsewo;
        kacgiqwewyeeyyam:
        $yyksucsgisomecgg = $this->oyeskqayoscwciem();
        goto qwogeocemuaaasiw;
        qwogeocemuaaasiw:
        if ($yyksucsgisomecgg->masyeqmaiuqwosei()) {
            goto wceiuqaeywmgscww;
        }
        goto ywmuoigomwwigqea;
        ywmuoigomwwigqea:
        $yyksucsgisomecgg->usuqmwksoeaayaig(ManipulateString::kwuyaykukcmaqggg(ManipulateString::mkwcwqkqeqkqyggc(self::uqggkiomyiceyooa())));
        goto cgqkqmiekaageyka;
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
        wamkaouokmyoyuqu:
        cqyiukmuqceicqwa:
        goto eywcgeccsmquugsw;
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
        qcuywygiosoqycaa:
        sickakeesgcgwisw:
        goto coaysoeouasaekie;
        kmikwoqwigwuyqae:
        $yciaosuiyeieceug = $yskommoiekkwiggo;
        goto qcuywygiosoqycaa;
        ykymogaqkgaiiiyi:
        return $yciaosuiyeieceug;
        goto uusyaguomkqeakkm;
        uauqmaeueukkmuwa:
        if (!$yskommoiekkwiggo instanceof Edit) {
            goto wmqegaqemgiggsce;
        }
        goto gkyguugwwoaqoigy;
        coaysoeouasaekie:
        wmqegaqemgiggsce:
        goto ykymogaqkgaiiiyi;
        wggeggkumkwaaesu:
        $yskommoiekkwiggo = $this->cgswceaawqgeskua("\145\x64\151\x74");
        goto uauqmaeueukkmuwa;
        cqeceeagmysoyoqg:
        $yciaosuiyeieceug = false;
        goto wggeggkumkwaaesu;
        gkyguugwwoaqoigy:
        
        if (!DecoratorUser::scmcyesmmikkucie($this->oyeskqayoscwciem()->gwaeeegmgggawiyi("\145\144\x69\x74\x5f\151\164\x65\x6d\163"))) {
            goto sickakeesgcgwisw;
        }
        goto kmikwoqwigwuyqae;
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
        aeekgeqawgsmgiqw:
        return $yciaosuiyeieceug;
        goto imgagmqusgiqissi;
        mgiwqumikeuieocg:
        if (!$kmsymkkmiwykeyqi instanceof Show) {
            goto qoigaauuokyusmgk;
        }
        goto yegkgccwomcgkumi;
        qsyyeoosgigiiequ:
        $yciaosuiyeieceug = false;
        goto jweeyemwqyqmyuys;
        jweeyemwqyqmyuys:
        $kmsymkkmiwykeyqi = $this->cgswceaawqgeskua("\x73\150\157\167");
        goto mgiwqumikeuieocg;
        imgagmqusgiqissi:
    }
    
    public function mukyysqkgaimcygs() : bool
    {
        $gkswkiicccswksiq = $this->oyeskqayoscwciem()->gwaeeegmgggawiyi("\x64\145\154\x65\x74\145\x5f\151\x74\x65\155\163");
        return $this->gqigeuumsosmamqs() && DecoratorUser::scmcyesmmikkucie($gkswkiicccswksiq);
    }
    
    public function comogmawyoiquwis() : ?string
    {
        goto cesaaiguwciccysi;
        yemuiyokmqoqckwu:
        scaciowogmayswms:
        goto qocmmyskykeuwsae;
        wskccugoccagaqcw:
        $qqomumygoacsmsie = $this->cgswceaawqgeskua("\151\x6e\144\x65\x78");
        goto sqyceswygksmmqqa;
        cesaaiguwciccysi:
        $iwywmkygwewiamwm = null;
        goto wskccugoccagaqcw;
        kqsyqwwscwoswsgk:
        $iwywmkygwewiamwm = $qqomumygoacsmsie->qmgcisuuikgmqcsu();
        goto yemuiyokmqoqckwu;
        sqyceswygksmmqqa:
        if (!$qqomumygoacsmsie instanceof Index) {
            goto scaciowogmayswms;
        }
        goto kqsyqwwscwoswsgk;
        qocmmyskykeuwsae:
        return $iwywmkygwewiamwm;
        goto kywmiquiiwmwgooy;
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
        yquysamwsoyyqcya:
        $iwywmkygwewiamwm = null;
        goto qsycguggqkgywgaq;
        wsyeqyekimescwkq:
        $iwywmkygwewiamwm = DecoratorQuery::yqymaqmqiqmmmsoo([$this->kumuygiiqswoyasy() => $kqokimuosyuyyucg], $qqomumygoacsmsie->qmgcisuuikgmqcsu());
        goto gyceukwoyaasuwik;
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
        aigeoggkowgwwwqg:
        $iwywmkygwewiamwm = DecoratorQuery::yqymaqmqiqmmmsoo([$this->kumuygiiqswoyasy() => $kqokimuosyuyyucg], $qqomumygoacsmsie->qmgcisuuikgmqcsu());
        goto pscqogmyseiwuqye;
        agokkauammisaqke:
        $iwywmkygwewiamwm = null;
        goto ggoyigsoyccmscum;
        ggoyigsoyccmscum:
        if (!($qqomumygoacsmsie = $this->qqakqoekigkcmyek())) {
            goto omeookmiomoieeee;
        }
        goto aigeoggkowgwwwqg;
        pscqogmyseiwuqye:
        omeookmiomoieeee:
        goto cyyecekuwygaqwcy;
        muqeeocooyiosouk:
    }
    
    public function cgccmsewskigcuig($kqokimuosyuyyucg = 0) : ?string
    {
        goto mowauiysyiciqaaa;
        uecmkggsueeiyawk:
        return $iwywmkygwewiamwm;
        goto iyakeemwaiqeueme;
        yoociieskmuucgms:
        ogywsgmqcgioaoqk:
        goto ysiuiuqawkaaamus;
        sykwygmouoikuyws:
        $iwywmkygwewiamwm = $qqomumygoacsmsie->qmgcisuuikgmqcsu();
        goto keiciayiyqsemsys;
        keiciayiyqsemsys:
        goto ogywsgmqcgioaoqk;
        goto ggoquyyseekiwukq;
        ysiuiuqawkaaamus:
        $iwywmkygwewiamwm = DecoratorQuery::yqymaqmqiqmmmsoo(["\x6f\162\155\x2d\x61\143\164\x69\157\x6e" => "\x64\x65\x6c\145\x74\145", $ceiwsaacewygcsqg => $kqokimuosyuyyucg], $iwywmkygwewiamwm);
        goto qooykiaywemimcke;
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
        ggkgseywksemuogc:
        $qqomumygoacsmsie = $this->cgswceaawqgeskua("\x69\156\144\145\x78");
        goto iyeswqeqcsmsoueq;
        okceyucmoigyokyy:
        wiiyageyqowkmmko:
        goto uecmkggsueeiyawk;
        ggoquyyseekiwukq:
        wcagqkquasswioos:
        goto dwciioycickkwawq;
        msuyygiskkumokec:
        if (!$kqokimuosyuyyucg) {
            goto wiiyageyqowkmmko;
        }
        goto ggkgseywksemuogc;
        iyeswqeqcsmsoueq:
        if (!($qqomumygoacsmsie instanceof Index && $this->mukyysqkgaimcygs())) {
            goto ayggiggmcqckqwom;
        }
        goto eiekcqosmyqmwqag;
        mowauiysyiciqaaa:
        $iwywmkygwewiamwm = null;
        goto msuyygiskkumokec;
        qooykiaywemimcke:
        ayggiggmcqckqwom:
        goto okceyucmoigyokyy;
        iyakeemwaiqeueme:
    }
    
    public function setCreatedAt($eqgoocgaqwqcimie)
    {
        $this->{static::CREATED_AT} = current_time("\155\x79\x73\x71\154");
    }
    
    public function setUpdatedAt($eqgoocgaqwqcimie)
    {
        $this->{static::UPDATED_AT} = current_time("\x6d\171\163\161\x6c");
    }
    
    public function acsiseaeysswwqkw() : ?string
    {
        goto jgaoqcmiqagoiuko;
        cwsgieeaugwciiwu:
        return $iwywmkygwewiamwm;
        goto wiigoqowismumcsm;
        iyekgiaayeasoggw:
        ouuuacyewgmocwsc:
        goto cwsgieeaugwciiwu;
        oycikycyewimcaew:
        if (!($ecmiqywsauuoccwo instanceof View && DecoratorUser::scmcyesmmikkucie($gkswkiicccswksiq))) {
            goto ouuuacyewgmocwsc;
        }
        goto sqokyowsuawgkusy;
        jgaoqcmiqagoiuko:
        $iwywmkygwewiamwm = null;
        goto iekesyeicomwcuas;
        wimggeysyugwwkca:
        $ecmiqywsauuoccwo = $this->cgswceaawqgeskua("\x61\144\144");
        goto oycikycyewimcaew;
        iekesyeicomwcuas:
        $gkswkiicccswksiq = $this->oyeskqayoscwciem()->gwaeeegmgggawiyi("\x63\x72\x65\x61\x74\145\137\x69\164\145\155\163");
        goto wimggeysyugwwkca;
        sqokyowsuawgkusy:
        $iwywmkygwewiamwm = $ecmiqywsauuoccwo->qmgcisuuikgmqcsu();
        goto iyekgiaayeasoggw;
        wiigoqowismumcsm:
    }
    
    public function sgcuwcowgwimgsgk($aokagokqyuysuksm, $cwwowqyuwccuykom = false)
    {
        goto waiqmywasoeggkce;
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
        oiguycsiaweycioe:
        yaokowamwsaggege:
        goto ueeowyociayoygsa;
        eskmkooukwwieuke:
        $yciaosuiyeieceug = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\143\141\156\x5f\144\x65\x6c\x65\x74\x65\137\157\142\x6a\x65\x63\x74", self::class), true, $mksyucucyswaukig, $cwwowqyuwccuykom);
        goto muaigwwqgsgowgkk;
        imgyqyeaoawqscae:
        $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\142\145\146\x6f\162\x65\137\x64\x65\x6c\145\164\145\137\x6f\x62\x6a\145\143\x74", self::class), $mksyucucyswaukig, $aokagokqyuysuksm);
        goto isssemmuiiaewiwi;
        muaigwwqgsgowgkk:
        if (!$yciaosuiyeieceug) {
            goto yaokowamwsaggege;
        }
        goto imgyqyeaoawqscae;
        ggcayqaayysyqmia:
        $kigowwqauiumummw = false;
        goto miiegqgiuamasook;
        isumwussqyqawwmy:
        return $kigowwqauiumummw;
        goto ksaimkacqesiguyg;
        isssemmuiiaewiwi:
        try {
            goto caskqicqwmyuugku;
            akycayowsciesmug:
            ukcukckucsyaggmw:
            goto ogqaueuweieisowc;
            assyuumuuuocycyy:
            
            if ($mksyucucyswaukig->delete()) {
                goto mwkcmgksoyycumos;
            }
            goto oiueawimuggcqgky;
            ykcymsoikgqeaukw:
            $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\157\x62\x6a\x65\x63\164\137\x64\x65\x6c\x65\164\x65\144", self::class), $aokagokqyuysuksm);
            goto akcqguucucewaqws;
            qqiwcikkcgmmakow:
            goto aikukgimkamkgwsu;
            goto wgcuewwyieoqaoek;
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
            wgcuewwyieoqaoek:
            mwkcmgksoyycumos:
            goto wksssmewgogkacei;
            oiueawimuggcqgky:
            $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\146\141\151\154\x65\x64\137\x64\145\154\x65\x74\145\137\x6f\142\152\145\143\164", self::class), $aokagokqyuysuksm);
            goto qqiwcikkcgmmakow;
            ogqaueuweieisowc:
        } catch (Exception $wgaoewqkwgomoaai) {
            $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\146\x61\x69\154\x65\x64\x5f\144\145\x6c\145\164\x65\137\x6f\142\152\x65\x63\164", self::class), $aokagokqyuysuksm);
        }
        goto oiguycsiaweycioe;
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
        oegcoaeyokkgoqyg:
        $this->validationErrors = [];
        goto euuoiciaiieoqyws;
        euuoiciaiieoqyws:
        return $ueeagokqmgisgauy;
        goto wcmksyiisiciasko;
        semymwueqcweowae:
        $ueeagokqmgisgauy = $this->coescmgakmkiyseg();
        goto oegcoaeyokkgoqyg;
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
        wguccgmciesyocmi:
        try {
            goto aiociqsiiwguaywy;
            eyyamwsogeqwamug:
            $mksyucucyswaukig = new $egkyssmuqcwaciya();
            goto oqccquoqqkkaqksk;
            isomygcucicwccgy:
            if ($aokagokqyuysuksm) {
                goto acuyqioeqaoeskya;
            }
            goto wcaeyoeeuiqqgqou;
            yqaacqqyisoewkqq:
            $this->scmmymqkoyckgkam($mksyucucyswaukig);
            goto mseimosiimuuceoa;
            gwkumgocycceogce:
            ukkmusemcqayowoa:
            goto swkysimqcqkikmgy;
            gosaiqsaqksagqsg:
            $this->iasywwkguyauiywu($mksyucucyswaukig, $icwicymcioeyeyek);
            goto wuuucygsmqmsiyoi;
            cwyauqoosqaoaoki:
            $mksyucucyswaukig = $this->ckcicmwwiccamyqk($this, $mksyucucyswaukig, $icwicymcioeyeyek);
            goto wiciqigmosmkkmwk;
            mseimosiimuuceoa:
            koueosuswmucsaec:
            goto scaoisaaceiaweoe;
            ckmycmakimaeygcu:
            
            if ($mksyucucyswaukig->save()) {
                goto ugoeueisekcsquug;
            }
            goto cecaekugyecciwcg;
            wiciqigmosmkkmwk:
            $mksyucucyswaukig = $this->qmqogusoaqeygewm($mksyucucyswaukig);
            goto ckmycmakimaeygcu;
            swkysimqcqkikmgy:
            if (!($kuuugksiksqcaaaa && $mksyucucyswaukig instanceof Model)) {
                goto wyqmackmyaikcggs;
            }
            goto cwyauqoosqaoaoki;
            ayamqyqegiuausko:
            $kigowwqauiumummw = true;
            goto aqcuimcoqmsiygwk;
            wcaeyoeeuiqqgqou:
            $iggwcmkgmicmouyu = true;
            goto wsmkoikacqsiweuw;
            aiociqsiiwguaywy:
            $aokagokqyuysuksm = (int) ManipulateArray::get($icwicymcioeyeyek, $ceiwsaacewygcsqg);
            goto isomygcucicwccgy;
            gaikqsuyumumsesg:
            if (!$kuuugksiksqcaaaa) {
                goto igkeawygswqouuym;
            }
            goto uwiaeuuiaimugqys;
            wuuucygsmqmsiyoi:
            $kuuugksiksqcaaaa = $this->gkieuyoqcusoksmg($icwicymcioeyeyek, $mksyucucyswaukig);
            goto gwkumgocycceogce;
            someqooawckycwao:
            $iggwcmkgmicmouyu = false;
            goto ymwckeawsukyukqs;
            ymwckeawsukyukqs:
            $mksyucucyswaukig = $this->cyyiiykmaeuqqgok($aokagokqyuysuksm);
            goto gosaiqsaqksagqsg;
            wyoqmwcsuewswiua:
            goto koueosuswmucsaec;
            goto gggkwgcemqeckcse;
            uwiaeuuiaimugqys:
            $egkyssmuqcwaciya = self::uqggkiomyiceyooa();
            goto eyyamwsogeqwamug;
            gggkwgcemqeckcse:
            ugoeueisekcsquug:
            goto ayamqyqegiuausko;
            scaoisaaceiaweoe:
            wyqmackmyaikcggs:
            goto mcgcqaiwmkewmwue;
            wouekamwmcuguaoa:
            goto ukkmusemcqayowoa;
            goto iougqueaywwucoko;
            iougqueaywwucoko:
            acuyqioeqaoeskya:
            goto someqooawckycwao;
            oqccquoqqkkaqksk:
            igkeawygswqouuym:
            goto wouekamwmcuguaoa;
            aqcuimcoqmsiygwk:
            $this->qiwiemuiqiugqqqg($mksyucucyswaukig, $icwicymcioeyeyek);
            goto yqaacqqyisoewkqq;
            wsmkoikacqsiweuw:
            $kuuugksiksqcaaaa = $this->gkieuyoqcusoksmg($icwicymcioeyeyek);
            goto gaikqsuyumumsesg;
            cecaekugyecciwcg:
            $mksyucucyswaukig = null;
            goto wyoqmwcsuewswiua;
            mcgcqaiwmkewmwue:
        } catch (Exception $wgaoewqkwgomoaai) {
            goto gecywkyeskagueqm;
            guackgkaeswkcaoq:
            qscmokiskqyuswqo:
            goto wyoouquciqoosuim;
            qmwmasuoyuwmcigw:
            $kigowwqauiumummw = false;
            goto guackgkaeswkcaoq;
            wcgoiisqmmawuiag:
            sswmueweogqkqumq:
            goto ewiwaeckgqaiwgio;
            yckkwcimmakkieos:
            if (!$kigowwqauiumummw) {
                goto qscmokiskqyuswqo;
            }
            goto ekwmcssqowkcoyci;
            ewiwaeckgqaiwgio:
            $mksyucucyswaukig = null;
            goto qmwmasuoyuwmcigw;
            ekwmcssqowkcoyci:
            if (!$iggwcmkgmicmouyu) {
                goto sswmueweogqkqumq;
            }
            goto oqkcuegyumswqekg;
            gecywkyeskagueqm:
            $this->kmsyisgakgwscyey($this->kyacickkomkioeyu($wgaoewqkwgomoaai));
            goto yckkwcimmakkieos;
            oqkcuegyumswqekg:
            try {
                
                $mksyucucyswaukig->delete();
            } catch (Exception $wgaoewqkwgomoaai) {
            }
            goto wcgoiisqmmawuiag;
            wyoouquciqoosuim:
        }
        goto qmkmuwomcwygkysi;
        aigseumaammwaqck:
        augyqmcwawmsykme:
        goto ggqqwysyuqiwksgm;
        ekcwasmkccgmogmy:
        $mksyucucyswaukig = null;
        goto ekwsguueioyegqkc;
        qmkmuwomcwygkysi:
        ziggykossqqayaki:
        goto iaiooeockccgaaiq;
        ooceggceowgoacyu:
        $kigowwqauiumummw = false;
        goto gwmauwgkiomyggmu;
        ggqqwysyuqiwksgm:
        if (!$this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x6f\x72\x6d\x5f\160\145\x72\x73\x69\163\164\x5f\157\162\137\x75\160\144\141\x74\145\137\166\x61\154\151\x64\x61\x74\151\x6f\x6e"), $kuuugksiksqcaaaa, $icwicymcioeyeyek, $this)) {
            goto ziggykossqqayaki;
        }
        goto wguccgmciesyocmi;
        gwmauwgkiomyggmu:
        $kuuugksiksqcaaaa = true;
        goto syaqwysmymkgkcuu;
        aaeuuccoyyuqkouc:
        return ["\157\x62\152\x65\x63\164" => $mksyucucyswaukig, $ceiwsaacewygcsqg => ManipulateArray::get($mksyucucyswaukig, $ceiwsaacewygcsqg), self::ERRORS => $this->skwiagoagiyswgay(), self::SUCCESS => $kigowwqauiumummw];
        goto skoscsikiaakokqe;
        iaiooeockccgaaiq:
        sooqqqougsgcumko:
        goto aaeuuccoyyuqkouc;
        syaqwysmymkgkcuu:
        $siykeiywomwwuoiw = $this->gqaysymikgeawkqa();
        goto coqycqiqgwkgkymo;
        yeacwagosugscqcg:
        $kuuugksiksqcaaaa = $this->kuuugksiksqcaaaa($icwicymcioeyeyek);
        goto aigseumaammwaqck;
        coqycqiqgwkgkymo:
        $ceiwsaacewygcsqg = $this->kumuygiiqswoyasy();
        goto qcmakskemmcgaeyg;
        msayswiykqokmuqa:
        if ($cwwowqyuwccuykom) {
            goto augyqmcwawmsykme;
        }
        goto yeacwagosugscqcg;
        qcmakskemmcgaeyg:
        if (!$siykeiywomwwuoiw) {
            goto sooqqqougsgcumko;
        }
        goto msayswiykqokmuqa;
        skoscsikiaakokqe:
    }
    
    public function scmmymqkoyckgkam($mksyucucyswaukig)
    {
    }
    
    public function iysseyicgouwysgk($mksyucucyswaukig) : ?string
    {
        return '';
    }
    
    public function mayuaaqmsqeyayyg($mksyucucyswaukig, $qqomumygoacsmsie = "\163\x68\x6f\x77") : ?string
    {
        goto skkqqcysscikmmik;
        cmogamaycywckuim:
        $pkyyagewkiyckmwy = $this->iysseyicgouwysgk($mksyucucyswaukig);
        goto oiissisqowcgwiyc;
        sqsksyaqsweqiyci:
        ksksqwcyqoqgmgke:
        goto guwyuigmkeeqssgw;
        sgaoyyoooykieusg:
        icyuwesuyoimomqs:
        goto yywgsissmueymcmg;
        oiissisqowcgwiyc:
        if (!$iwywmkygwewiamwm) {
            goto yqisgseiimwmoeee;
        }
        goto ugqeagqqaucqkcys;
        skkqqcysscikmmik:
        if (!is_numeric($mksyucucyswaukig)) {
            goto icyuwesuyoimomqs;
        }
        goto oewsoauskqoqmiqa;
        ywiugkwcqkomgucy:
        yqisgseiimwmoeee:
        goto ekoeysiuqeggaqku;
        ekoeysiuqeggaqku:
        return $pkyyagewkiyckmwy;
        goto sqcoigaqqssykoui;
        ugqeagqqaucqkcys:
        $pkyyagewkiyckmwy = $this->geyuyukmwaoksywa($iwywmkygwewiamwm, $pkyyagewkiyckmwy);
        goto ywiugkwcqkomgucy;
        yuqowmmcwscosmgy:
        $iwywmkygwewiamwm = $this->uesweuocqoywoyms($aokagokqyuysuksm);
        goto iyekyouiiwcsewgy;
        oewsoauskqoqmiqa:
        $mksyucucyswaukig = $this->akkkoiiymmamsauc($mksyucucyswaukig);
        goto sgaoyyoooykieusg;
        iyekyouiiwcsewgy:
        switch ($qqomumygoacsmsie) {
            case "\163\150\x6f\167":
                $iwywmkygwewiamwm = $this->uesweuocqoywoyms($aokagokqyuysuksm);
                goto skysqikkawmaoase;
            case "\145\144\151\x74":
                $iwywmkygwewiamwm = $this->yyykkcyiksewsoqy($aokagokqyuysuksm);
                goto skysqikkawmaoase;
        }
        goto sqsksyaqsweqiyci;
        yywgsissmueymcmg:
        $aokagokqyuysuksm = ManipulateArray::get($mksyucucyswaukig, $this->kumuygiiqswoyasy());
        goto yuqowmmcwscosmgy;
        guwyuigmkeeqssgw:
        skysqikkawmaoase:
        goto cmogamaycywckuim;
        sqcoigaqqssykoui:
    }
    
    public function aouwuegyyugiwksc($qgoqiacsiccwoawi, $mksyucucyswaukig, $mugogceoccysackm = true) : ?string
    {
        goto uqkmkmmikmaqkgym;
        uwiqeuqyaseimcyk:
        $pkyyagewkiyckmwy = $meywaqqsugaoeyys->mayuaaqmsqeyayyg($icwicymcioeyeyek);
        goto aeieoesqsyiqwkkk;
        omuskqikewygsuuu:
        $meywaqqsugaoeyys = $aaqqkgyougeiueyq->uecyuoauykiqqkey()::symcgieuakksimmu();
        goto kqumggcumkiygaya;
        ccikqgeseseueseo:
        mkmasewiiuocaekm:
        goto uwiqeuqyaseimcyk;
        aeieoesqsyiqwkkk:
        iuageyamssqwqqyw:
        goto syiwwokguucmgsyy;
        kmasgsycmswqoeii:
        goto iuageyamssqwqqyw;
        goto ccikqgeseseueseo;
        wmiysuwsmawyogmu:
        return $pkyyagewkiyckmwy;
        goto uoieeoimcawgsacs;
        kqumggcumkiygaya:
        if (!$meywaqqsugaoeyys instanceof Model) {
            goto wkmsuekwweweqoys;
        }
        goto siuwcesauyyweaky;
        yckkkceuiuiaucce:
        $icwicymcioeyeyek = $this->iscemaoqqckmkago($qgoqiacsiccwoawi, $mksyucucyswaukig);
        goto smeocsiuyouseuqo;
        syiwwokguucmgsyy:
        wkmsuekwweweqoys:
        goto mawqcoscmcqkoskk;
        yqmygsgkwmkeyqmm:
        if (!$aaqqkgyougeiueyq instanceof Foreign) {
            goto cwaqmauwsyugsieo;
        }
        goto omuskqikewygsuuu;
        uqkmkmmikmaqkgym:
        $aaqqkgyougeiueyq = $this->oyeskqayoscwciem()->uqeoyqiwywwmsiew($qgoqiacsiccwoawi);
        goto yckkkceuiuiaucce;
        smeocsiuyouseuqo:
        $pkyyagewkiyckmwy = '';
        goto yqmygsgkwmkeyqmm;
        siuwcesauyyweaky:
        if ($mugogceoccysackm) {
            goto mkmasewiiuocaekm;
        }
        goto wucomycmoigosose;
        wucomycmoigosose:
        $pkyyagewkiyckmwy = $meywaqqsugaoeyys->iysseyicgouwysgk($icwicymcioeyeyek);
        goto kmasgsycmswqoeii;
        mawqcoscmcqkoskk:
        cwaqmauwsyugsieo:
        goto wmiysuwsmawyogmu;
        uoieeoimcawgsacs:
    }
    
    public function iscemaoqqckmkago($iceamweyeeiwiucs, $mksyucucyswaukig = null, $wkkweuacukumqmya = "\x2a", $uoomaookgsyciacm = [])
    {
        goto ysicqksgomomkoek;
        ocgsiomyyckcausy:
        try {
            goto qqyegacwyoqqqqwy;
            oksouuguouqowuyq:
            if (!($aaqqkgyougeiueyq instanceof Foreign && ($aaqqkgyougeiueyq->wmomygggskkoqess() || $aaqqkgyougeiueyq->eiyqqesoywqkegwu()))) {
                goto kysaoseimkmckcoc;
            }
            goto okygssymuimommeg;
            qiekksmyigmwmiws:
            if (!$meywaqqsugaoeyys instanceof Model) {
                goto gmckgcsamacayoiy;
            }
            goto qmqsgkwueccwgsqa;
            eaisogogsygugsqi:
            $ayegqaqygsqsmews = $this->mgacegaoeamymmya($iceamweyeeiwiucs, $mksyucucyswaukig);
            goto usiqksiiiqgokuaq;
            usiqksiiiqgokuaq:
            goto suykumskkmicioig;
            goto omaswaiucwamaywi;
            qsgagomkgqcmscyu:
            kysaoseimkmckcoc:
            goto eaisogogsygugsqi;
            omaswaiucwamaywi:
            csimcqggmigoacwk:
            goto ieewmicwgqaigeqi;
            wasacacaowicmiyw:
            $aaqqkgyougeiueyq = $this->oyeskqayoscwciem()->uqeoyqiwywwmsiew($iceamweyeeiwiucs);
            goto oksouuguouqowuyq;
            iiceuymgyemuaciy:
            gmckgcsamacayoiy:
            goto qsgagomkgqcmscyu;
            okygssymuimommeg:
            $meywaqqsugaoeyys = $aaqqkgyougeiueyq->uecyuoauykiqqkey()::symcgieuakksimmu();
            goto qiekksmyigmwmiws;
            qmqsgkwueccwgsqa:
            return $meywaqqsugaoeyys->akkkoiiymmamsauc(ManipulateArray::get($mksyucucyswaukig, $iceamweyeeiwiucs), $meywaqqsugaoeyys->kumuygiiqswoyasy());
            goto iiceuymgyemuaciy;
            iwkyewqeogaamiou:
            if (!$uoomaookgsyciacm) {
                goto sqkuwuwiceguscku;
            }
            goto yqqwweuisgoskcwa;
            mgiykamgwsemmiio:
            if (!$ayegqaqygsqsmews) {
                goto yuciwasueswewmqw;
            }
            goto iwkyewqeogaamiou;
            yqqwweuisgoskcwa:
            $ayegqaqygsqsmews = $this->kqewyqqqiyiouaou($uoomaookgsyciacm, $ayegqaqygsqsmews);
            goto uaaiuqickwysiqiy;
            qqyegacwyoqqqqwy:
            if ($iceamweyeeiwiucs instanceof Relation) {
                goto csimcqggmigoacwk;
            }
            goto wasacacaowicmiyw;
            gmwcqkgsaesmsuea:
            $essikcmqiyqaqoaq = $ayegqaqygsqsmews->get($wkkweuacukumqmya)->sacmkccceuywoqsq();
            goto cgkaoiyoqwmkaqck;
            cgkaoiyoqwmkaqck:
            iscaisuqmaikumko:
            goto suokacgwamyumagy;
            ieewmicwgqaigeqi:
            $ayegqaqygsqsmews = $iceamweyeeiwiucs;
            goto ouokmaemueykkiqq;
            iioauiogmamumiym:
            if (!$ayegqaqygsqsmews) {
                goto iscaisuqmaikumko;
            }
            goto gmwcqkgsaesmsuea;
            suokacgwamyumagy:
            yuciwasueswewmqw:
            goto gscckcagyggagway;
            ouokmaemueykkiqq:
            suykumskkmicioig:
            goto mgiykamgwsemmiio;
            uaaiuqickwysiqiy:
            sqkuwuwiceguscku:
            goto iioauiogmamumiym;
            gscckcagyggagway:
        } catch (Exception $wgaoewqkwgomoaai) {
        }
        goto ccegsywqocccgegu;
        ysicqksgomomkoek:
        $essikcmqiyqaqoaq = [];
        goto ocgsiomyyckcausy;
        ccegsywqocccgegu:
        return $essikcmqiyqaqoaq;
        goto swqkyoemiswegyci;
        swqkyoemiswegyci:
    }
    
    public function mgacegaoeamymmya($ymaogssqccumcyqa, $mksyucucyswaukig = null) : ?Relation
    {
        goto cuyaakuucgwmcuqq;
        woqsaqwocioumoeu:
        
        $ayegqaqygsqsmews = $mksyucucyswaukig->belongsTo($egkyssmuqcwaciya);
        goto ukyoyoqcyywgaywg;
        iuoqiecqaoosioey:
        iquykqikookaokgq:
        goto woqsaqwocioumoeu;
        gsgocqicesmaecse:
        if ($mksyucucyswaukig instanceof Model) {
            goto uwswkegomekswkus;
        }
        goto oskwwcgyuwkiuacu;
        swkukukimeueycaq:
        $mksyucucyswaukig = $this->cyyiiykmaeuqqgok($aokagokqyuysuksm);
        goto ccqkugckigeckeqa;
        ygqqeqgiaasoimgs:
        aeoiiewygoiwuiii:
        goto gsiagogeoqwqekei;
        wgeskeagymiuoigi:
        if ($aaqqkgyougeiueyq->iueigwuckeaswyuu()) {
            goto pmaiksascsegweci;
        }
        goto mcoyaaiggymgcsgq;
        ugowokkqeoeugkqe:
        goto akkmaiaiamyaikqe;
        goto qmqumgawyyqqamoa;
        eqiiqamuyewoowwy:
        if (!$aaqqkgyougeiueyq instanceof Foreign) {
            goto iiikyaquagwawkce;
        }
        goto cwomucmeuqqucyge;
        ukyoyoqcyywgaywg:
        ceesgeawumeqkcic:
        goto ugowokkqeoeugkqe;
        mogomwoquuesmcec:
        iysiwmeymsoucaka:
        goto akiuyguwqaukuugs;
        oskwwcgyuwkiuacu:
        $aokagokqyuysuksm = ManipulateArray::get($mksyucucyswaukig, $this->kumuygiiqswoyasy());
        goto qsecoiqswyiseake;
        cuyaakuucgwmcuqq:
        $ayegqaqygsqsmews = null;
        goto gsgocqicesmaecse;
        kqkeomoaociyuoye:
        if ($aaqqkgyougeiueyq->eiyqqesoywqkegwu()) {
            goto iquykqikookaokgq;
        }
        goto kswkouussqmqsssy;
        cecamogauimuwoow:
        
        $ayegqaqygsqsmews = $mksyucucyswaukig->morphToMany($egkyssmuqcwaciya, $mgugyyocqwmeeuai);
        goto ygqqeqgiaasoimgs;
        kswkouussqmqsssy:
        if ($aaqqkgyougeiueyq->wmomygggskkoqess()) {
            goto ksyukmeagigokcgi;
        }
        goto emomkqccysciiqya;
        ewcyigsymwuuogci:
        
        $ayegqaqygsqsmews = $mksyucucyswaukig->hasMany($egkyssmuqcwaciya);
        goto auauyoooouqkickk;
        uwmgacqaowuguiow:
        iwycgkausoseqmwu:
        goto cecamogauimuwoow;
        uaiqqcsoksgukasg:
        okeecmwsuoikguuo:
        goto iqyqgqwwaaigmuou;
        waaammoiumecaiys:
        uwswkegomekswkus:
        goto qgmgmkeiemcqkyim;
        yuccckoykmccwyce:
        goto eicuywagooikuusg;
        goto goqkegseiummeiak;
        oikomikqcwikimkw:
        goto aeoiiewygoiwuiii;
        goto uwmgacqaowuguiow;
        coygueuwyguuciww:
        pmaiksascsegweci:
        goto ckmkeuakisiukage;
        ckmkeuakisiukage:
        
        $ayegqaqygsqsmews = $mksyucucyswaukig->hasOne($egkyssmuqcwaciya);
        goto uaiqqcsoksgukasg;
        iqyqgqwwaaigmuou:
        eicuywagooikuusg:
        goto sqmgqacueqiiekay;
        emomkqccysciiqya:
        if (!$aaqqkgyougeiueyq->ygswmewosceowmya()) {
            goto cwoaockwkoukuwae;
        }
        goto ywykuacciwwkwmmy;
        egcsskmsysqiiikm:
        iiikyaquagwawkce:
        goto mogomwoquuesmcec;
        auauyoooouqkickk:
        akkmaiaiamyaikqe:
        goto egcsskmsysqiiikm;
        mcoyaaiggymgcsgq:
        
        $ayegqaqygsqsmews = $mksyucucyswaukig->belongsTo($egkyssmuqcwaciya);
        goto wcqyakkqcgmeqaag;
        oqoogougwwcqeimq:
        $aaqqkgyougeiueyq = $this->oyeskqayoscwciem()->uqeoyqiwywwmsiew($ymaogssqccumcyqa);
        goto eqiiqamuyewoowwy;
        akiuyguwqaukuugs:
        return $ayegqaqygsqsmews;
        goto emiyocoiuwcucuwu;
        ismoiisskiwmmmiu:
        
        $ayegqaqygsqsmews = $mksyucucyswaukig->morphedByMany($egkyssmuqcwaciya, $mgugyyocqwmeeuai);
        goto oikomikqcwikimkw;
        gsiagogeoqwqekei:
        cwoaockwkoukuwae:
        goto yuccckoykmccwyce;
        eguukwmoyaaieuww:
        if ($aaqqkgyougeiueyq->gumeeckcowwoyoci()) {
            goto qiyiyuwmuoamwccs;
        }
        goto kqkeomoaociyuoye;
        goqkegseiummeiak:
        ksyukmeagigokcgi:
        goto wgeskeagymiuoigi;
        qsecoiqswyiseake:
        if (!$mksyucucyswaukig) {
            goto yuqiqaquoygggoqc;
        }
        goto swkukukimeueycaq;
        ccqkugckigeckeqa:
        yuqiqaquoygggoqc:
        goto waaammoiumecaiys;
        wcqyakkqcgmeqaag:
        goto okeecmwsuoikguuo;
        goto coygueuwyguuciww;
        qgmgmkeiemcqkyim:
        if (!$mksyucucyswaukig instanceof Model) {
            goto iysiwmeymsoucaka;
        }
        goto oqoogougwwcqeimq;
        cwomucmeuqqucyge:
        $egkyssmuqcwaciya = $aaqqkgyougeiueyq->uecyuoauykiqqkey();
        goto eguukwmoyaaieuww;
        sqmgqacueqiiekay:
        goto ceesgeawumeqkcic;
        goto iuoqiecqaoosioey;
        qmqumgawyyqqamoa:
        qiyiyuwmuoamwccs:
        goto ewcyigsymwuuogci;
        qgcgucmskokqquwk:
        if ($aaqqkgyougeiueyq->iueigwuckeaswyuu()) {
            goto iwycgkausoseqmwu;
        }
        goto ismoiisskiwmmmiu;
        ywykuacciwwkwmmy:
        $mgugyyocqwmeeuai = $aaqqkgyougeiueyq->mwikyscisascoeea();
        goto qgcgucmskokqquwk;
        emiyocoiuwcucuwu:
    }
    
    public function qiwiemuiqiugqqqg(Model $mksyucucyswaukig, $icwicymcioeyeyek)
    {
        foreach ($icwicymcioeyeyek as $uusmaiomayssaecw => $qqswgiawgeaeoecu) {
            goto ssoooeigmwugyycm;
            rwaeioueucocosgu:
            essokuoguqegyeua:
            goto cuqusekekewuseio;
            syggoyqwycmmcuck:
            qquugwwesqswouyc:
            goto owwwikwqsyakweeq;
            yyousguikogqkecs:
            
            $csamwuowsigosqys->hasMany($swmgqkqyqcgemack)->save($mksyucucyswaukig);
            goto syggoyqwycmmcuck;
            cgoqqicyaiwasqme:
            yisooseceggsgyqw:
            goto ckagywkumgkaswyy;
            aeywmsqkisycgqce:
            if (!$egkyssmuqcwaciya) {
                goto aqoyesawuayoeuag;
            }
            goto mawsaauyquacosus;
            aagewueuesckuqke:
            foreach ($qqswgiawgeaeoecu as $eqgoocgaqwqcimie) {
                goto csmmiwegweusuimi;
                uqsoseuiwgukywas:
                if (!$msqyiyqkassmkgce) {
                    goto amcqceoiqgmwisce;
                }
                goto wgaggmmmgeumiouk;
                cwkouaeieiyiykim:
                amcqceoiqgmwisce:
                goto uawcmuiummigeqea;
                koceayskwssiisyi:
                $msqyiyqkassmkgce = $kooyscwkscsogysg->cyyiiykmaeuqqgok($aokagokqyuysuksm);
                goto auqmeqswuuioemge;
                imsougccawciqsuw:
                $msqyiyqkassmkgce = $kooyscwkscsogysg->ciqgsyoasskoiukm($eqgoocgaqwqcimie);
                goto syaegaiuaioeaocq;
                syaegaiuaioeaocq:
                goto ikgwcgcgcaaaskig;
                goto ckkecwwioeywccwa;
                csmmiwegweusuimi:
                if ($aokagokqyuysuksm = ManipulateArray::get($eqgoocgaqwqcimie, $gqkcqoaumsuwkqom, $qqswgiawgeaeoecu)) {
                    goto eemgoyuiauwuomcw;
                }
                goto imsougccawciqsuw;
                wgaggmmmgeumiouk:
                $myqeggyewswyoowe[] = $msqyiyqkassmkgce;
                goto cwkouaeieiyiykim;
                uawcmuiummigeqea:
                smeeigiqmommceye:
                goto qmmieiquoegeaqok;
                auqmeqswuuioemge:
                $msqyiyqkassmkgce = $this->ckcicmwwiccamyqk($kooyscwkscsogysg, $msqyiyqkassmkgce, $eqgoocgaqwqcimie);
                goto iiwcuqeosmwgogus;
                ckkecwwioeywccwa:
                eemgoyuiauwuomcw:
                goto koceayskwssiisyi;
                iiwcuqeosmwgogus:
                ikgwcgcgcaaaskig:
                goto uqsoseuiwgukywas;
                qmmieiquoegeaqok:
            }
            goto mkauomqacwwmyigy;
            mkauomqacwwmyigy:
            gamuuauwykwgaegc:
            goto cmsgssaekakgcqmg;
            uyisqeuweamsqwgg:
            if (!$aaqqkgyougeiueyq instanceof Foreign) {
                goto agoikageaeouqaqi;
            }
            goto icasgckmuawkaksg;
            osawsyawkikquqya:
            kmwwamokwgagomye:
            goto cgoqqicyaiwasqme;
            cssysqmcgcuwyyuu:
            if (!$miowmmgaiagcuyoo instanceof Model) {
                goto ummsowuaoeyusgoq;
            }
            goto aesgakksmyecsusi;
            eicuoesagiuykmos:
            goto yisooseceggsgyqw;
            goto eqkaikmaegscweqq;
            koaeayomowaiywam:
            if (!$aaqqkgyougeiueyq->eiyqqesoywqkegwu()) {
                goto wwigiswokyqkamsu;
            }
            goto ikwamukqumiokwkk;
            eqkaikmaegscweqq:
            iqicwseckoykqowm:
            goto oukacgcyoiggqosq;
            qqowguycmsmuauyu:
            agoikageaeouqaqi:
            goto yseacqgykcseamce;
            icasgckmuawkaksg:
            $egkyssmuqcwaciya = $aaqqkgyougeiueyq->uecyuoauykiqqkey();
            goto aeywmsqkisycgqce;
            cuqusekekewuseio:
            aqoyesawuayoeuag:
            goto qqowguycmsmuauyu;
            ckagywkumgkaswyy:
            goto cuamsmyiamaicwou;
            goto oswgoyqaacoyqegu;
            wowakayqsywcaogm:
            aegiwggkecgaiocs:
            goto ogwosuisocqykoma;
            ogwosuisocqykoma:
            cuamsmyiamaicwou:
            goto rwaeioueucocosgu;
            guosgucaaeueacgu:
            ummsowuaoeyusgoq:
            goto wowakayqsywcaogm;
            usiiuuommggemcke:
            if (!is_array($qqswgiawgeaeoecu)) {
                goto kmwwamokwgagomye;
            }
            goto aagewueuesckuqke;
            mawsaauyquacosus:
            $kooyscwkscsogysg = $egkyssmuqcwaciya::symcgieuakksimmu();
            goto cwkwkgkqasguwscg;
            aimaqcomigwccomu:
            smmgkqeacswimyas:
            goto osawsyawkikquqya;
            ioaeiakqkiuqymoq:
            $miowmmgaiagcuyoo = $kooyscwkscsogysg->cyyiiykmaeuqqgok($qqswgiawgeaeoecu);
            goto cssysqmcgcuwyyuu;
            yseacqgykcseamce:
            uceksuykgsckwwsu:
            goto xkgykmoskoqykakc;
            oukacgcyoiggqosq:
            $myqeggyewswyoowe = [];
            goto usiiuuommggemcke;
            makqqsaegsesgquq:
            $gqkcqoaumsuwkqom = $kooyscwkscsogysg->primaryKey;
            goto symwoekuwqcmowwo;
            uueyawewomkuiiwc:
            $csamwuowsigosqys = $kooyscwkscsogysg->cyyiiykmaeuqqgok($qqswgiawgeaeoecu);
            goto wqcquwuiqkqaoamo;
            cwkwkgkqasguwscg:
            if (!$kooyscwkscsogysg instanceof Model) {
                goto essokuoguqegyeua;
            }
            goto makqqsaegsesgquq;
            wqcquwuiqkqaoamo:
            if (!$csamwuowsigosqys instanceof Model) {
                goto qquugwwesqswouyc;
            }
            goto csueasskicaaoaii;
            owwwikwqsyakweeq:
            ewugkyumwuomukie:
            goto awmyoukmqymausgu;
            aesgakksmyecsusi:
            $accumooemgmowewu = $mksyucucyswaukig::uqggkiomyiceyooa();
            goto igewmkyikyaiamsq;
            ckscysysmayieagk:
            
            $mksyucucyswaukig->hasMany($egkyssmuqcwaciya)->saveMany($myqeggyewswyoowe);
            goto aimaqcomigwccomu;
            emsuycioaeoeeeqo:
            if ($aaqqkgyougeiueyq->gumeeckcowwoyoci()) {
                goto iqicwseckoykqowm;
            }
            goto koaeayomowaiywam;
            awmyoukmqymausgu:
            wwigiswokyqkamsu:
            goto eicuoesagiuykmos;
            ikwamukqumiokwkk:
            if (!is_numeric($qqswgiawgeaeoecu)) {
                goto ewugkyumwuomukie;
            }
            goto uueyawewomkuiiwc;
            oswgoyqaacoyqegu:
            awwwoikmmaisyisy:
            goto yoeaiskyyqgqiwga;
            yoeaiskyyqgqiwga:
            if ($aaqqkgyougeiueyq->iueigwuckeaswyuu()) {
                goto aegiwggkecgaiocs;
            }
            goto ioaeiakqkiuqymoq;
            cmsgssaekakgcqmg:
            if (!$myqeggyewswyoowe) {
                goto smmgkqeacswimyas;
            }
            goto ckscysysmayieagk;
            symwoekuwqcmowwo:
            if ($aaqqkgyougeiueyq->wmomygggskkoqess()) {
                goto awwwoikmmaisyisy;
            }
            goto emsuycioaeoeeeqo;
            igewmkyikyaiamsq:
            
            $miowmmgaiagcuyoo->hasOne($accumooemgmowewu)->save($mksyucucyswaukig);
            goto guosgucaaeueacgu;
            ssoooeigmwugyycm:
            $aaqqkgyougeiueyq = $this->oyeskqayoscwciem()->uqeoyqiwywwmsiew($uusmaiomayssaecw);
            goto uyisqeuweamsqwgg;
            csueasskicaaoaii:
            $swmgqkqyqcgemack = self::uqggkiomyiceyooa();
            goto yyousguikogqkecs;
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
            swmmiykiawycgoes:
            if (!($aaqqkgyougeiueyq instanceof Field && !$aaqqkgyougeiueyq instanceof Foreign)) {
                goto uwsgccckqqookusc;
            }
            goto zsweawcwmisoogao;
            qqocmsauqkwoscqy:
            ckyeeqwsugcoksek:
            goto asoweekcciigkweo;
            ycoomucecckyease:
            $this->kmsyisgakgwscyey(sprintf(__("\x25\x73\40\x63\x61\x6e\156\x27\x74\x20\142\145\40\x65\x6d\x70\x74\171\x2c\x20\160\x6c\x65\x61\x73\x65\x20\x66\x69\x6c\154\x20\151\164\56", PR__CMN__FOUNDATION), ManipulateHTML::ciuuiyckmsygceis($aaqqkgyougeiueyq->qcgakseyaikigqco())), $oaukocmsckciqaok);
            goto myegqayeyqaigmqi;
            zsweawcwmisoogao:
            if ($aaqqkgyougeiueyq->kweqqkiwiugikyam()) {
                goto msegcuqmgweissmw;
            }
            goto caiiwysgssyqoouc;
            myegqayeyqaigmqi:
            $sogksuscggsicmac = false;
            goto qqocmsauqkwoscqy;
            qyeewwmuogssaegc:
            komaoacquqwgysgc:
            goto wiaugmimkuikykys;
            uisaoikyqyseiyas:
            if ($sogksuscggsicmac) {
                goto ucuyaouwikuyyemm;
            }
            goto gqaiqcgwsmyugimu;
            kuyeoaemuwcqkoae:
            msegcuqmgweissmw:
            goto cuwasskqkoysieey;
            wuqysikmouuiawwi:
            $this->kmsyisgakgwscyey(sprintf(__("\x25\163\x20\151\x73\40\165\x6e\x69\x71\165\145\40\x61\156\x64\40\145\156\164\x65\162\x65\144\40\166\141\x6c\165\145\40\141\x6c\x72\145\x61\x64\171\40\145\x78\151\x73\164\x2e", PR__CMN__FOUNDATION), ManipulateHTML::ciuuiyckmsygceis($aaqqkgyougeiueyq->qcgakseyaikigqco())), $oaukocmsckciqaok);
            goto egumckcoaaowkgoy;
            iwccwiiumyyccquy:
            $aaqqkgyougeiueyq = $this->oyeskqayoscwciem()->uqeoyqiwywwmsiew($oaukocmsckciqaok);
            goto swmmiykiawycgoes;
            eokgqgsswamgswqu:
            uwsgccckqqookusc:
            goto gcumogmsuuyuwsie;
            cuwasskqkoysieey:
            $myagqecycsaiyqsk = $this->akkkoiiymmamsauc($eqgoocgaqwqcimie, $oaukocmsckciqaok);
            goto mqigiiusqaieqeaa;
            wiaugmimkuikykys:
            siwekyoigwegiosa:
            goto uisaoikyqyseiyas;
            akuiskwoukoesuou:
            ucuyaouwikuyyemm:
            goto eokgqgsswamgswqu;
            caiiwysgssyqoouc:
            if (!(!$aaqqkgyougeiueyq->yseywyqacmugimme() && !$eqgoocgaqwqcimie)) {
                goto ckyeeqwsugcoksek;
            }
            goto ycoomucecckyease;
            egumckcoaaowkgoy:
            $sogksuscggsicmac = false;
            goto qyeewwmuogssaegc;
            gcumogmsuuyuwsie:
            ksmmosiwmsousgkg:
            goto uyouoeaoqcieeayg;
            mqigiiusqaieqeaa:
            $ceiwsaacewygcsqg = $this->kumuygiiqswoyasy();
            goto igeiewqcwieuawms;
            igeiewqcwieuawms:
            if (!($myagqecycsaiyqsk && ManipulateArray::get($mksyucucyswaukig, $ceiwsaacewygcsqg) != ManipulateArray::get($myagqecycsaiyqsk, $ceiwsaacewygcsqg))) {
                goto komaoacquqwgysgc;
            }
            goto wuqysikmouuiawwi;
            gqaiqcgwsmyugimu:
            goto aoiaykkukcyyoaio;
            goto akuiskwoukoesuou;
            asoweekcciigkweo:
            goto siwekyoigwegiosa;
            goto kuyeoaemuwcqkoae;
            uyouoeaoqcieeayg:
        }
        goto suaouieqqoauuwme;
        sumsswekusmugwcc:
        $sogksuscggsicmac = true;
        goto quoamckmecwqkkus;
        kewooggoaouemcaq:
        return $sogksuscggsicmac;
        goto uwwooikcoamioeaq;
        suaouieqqoauuwme:
        aoiaykkukcyyoaio:
        goto kewooggoaouemcaq;
        uwwooikcoamioeaq:
    }
    
    public function ckcicmwwiccamyqk(Model $owgumcsyqsamiemg, Model $mksyucucyswaukig, $icwicymcioeyeyek) : Model
    {
        goto qqcusuaqmyukwyqk;
        souucimemowwaseo:
        qcsceusmgwewumuy:
        goto oqyeyuocsyoeogim;
        qqcusuaqmyukwyqk:
        foreach ($icwicymcioeyeyek as $oaukocmsckciqaok => $eqgoocgaqwqcimie) {
            goto gsewiomcwceysquc;
            qkmmgqgcegcuawuu:
            kwwoucisuqcmqmqu:
            goto auouiegmaiasywkw;
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
            ooiaoiygiiamsmum:
            $eqgoocgaqwqcimie = $eqgoocgaqwqcimie === "\157\156";
            goto qkmmgqgcegcuawuu;
            aqaseyqwkgoyaiyg:
            $mksyucucyswaukig->cmgoqeksagmigwmg($oaukocmsckciqaok, $eqgoocgaqwqcimie);
            goto gkekqmkyumkmywky;
            egicsmysugywycqq:
            if ($aaqqkgyougeiueyq instanceof Json && $eqgoocgaqwqcimie) {
                goto ukuuumkkameeuesk;
            }
            goto migwkuscokgmogea;
            muoougyakwgcicuo:
            yqysciwesgsiuayi:
            goto ywgqeosekkwswyac;
            ieyimqciuswcokke:
            $eqgoocgaqwqcimie = wp_json_encode($eqgoocgaqwqcimie);
            goto csismgmuaiogeucq;
            csismgmuaiogeucq:
            muygyqckegkuiwyi:
            goto aqaseyqwkgoyaiyg;
            gsewiomcwceysquc:
            $aaqqkgyougeiueyq = $owgumcsyqsamiemg->oyeskqayoscwciem()->uqeoyqiwywwmsiew($oaukocmsckciqaok);
            goto ouyqaaywykeqimmi;
            auouiegmaiasywkw:
            goto muygyqckegkuiwyi;
            goto ggqmaecmwgeqkuge;
            gkekqmkyumkmywky:
            osgmksikyyqqcaag:
            goto muoougyakwgcicuo;
            ggqmaecmwgeqkuge:
            ukuuumkkameeuesk:
            goto ieyimqciuswcokke;
            ywgqeosekkwswyac:
        }
        goto souucimemowwaseo;
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
        mkayykckiywayuko:
        goto ksoygkwycsqicooa;
        goto wmgyemaskuuowuum;
        akkwoqycamwckeui:
        if ($uusmaiomayssaecw) {
            goto qqwukskiymcymgqc;
        }
        goto goimqkkiyegggysa;
        goimqkkiyegggysa:
        $this->validationErrors[] = $iswcokucwmiosiaq;
        goto mkayykckiywayuko;
        kquwekemiawwmuqs:
        ksoygkwycsqicooa:
        goto cgykkwqwamaougme;
        cgykkwqwamaougme:
        return $this;
        goto gcmmgmowsmgwkoye;
        ssqemoqcimayewqm:
        $this->validationErrors[$uusmaiomayssaecw] = $iswcokucwmiosiaq;
        goto kquwekemiawwmuqs;
        wmgyemaskuuowuum:
        qqwukskiymcymgqc:
        goto ssqemoqcimayewqm;
        gcmmgmowsmgwkoye:
    }
    
    public function dgugskkmsgccgiii($ueeagokqmgisgauy) : self
    {
        goto aqkoqskkimiuyqug;
        kouecqmcueugwcqw:
        ugcaeymeciausmao:
        goto yceksmgauwmiwmsw;
        aqkoqskkimiuyqug:
        foreach ($ueeagokqmgisgauy as $uusmaiomayssaecw => $iswcokucwmiosiaq) {
            $this->kmsyisgakgwscyey($iswcokucwmiosiaq, $uusmaiomayssaecw);
            sygekyuywqgiawas:
        }
        goto kouecqmcueugwcqw;
        yceksmgauwmiwmsw:
        return $this;
        goto oseqayimqaycaycw;
        oseqayimqaycaycw:
    }
    
    public function akkkoiiymmamsauc(?string $eqgoocgaqwqcimie = null, ?string $aiowsaccomcoikus = null, $wkkweuacukumqmya = "\52")
    {
        goto oiemkksaoaiyckgi;
        gakmkuaayakeymaa:
        
        $siykeiywomwwuoiw = $siykeiywomwwuoiw->where($aiowsaccomcoikus, self::EQUAL_SYMBOL, $eqgoocgaqwqcimie);
        goto sucquwgiacwooomw;
        wicqcmuwosqwyggg:
        $aiowsaccomcoikus = $this->kumuygiiqswoyasy();
        goto wwuiwkkgqescsyyw;
        oiemkksaoaiyckgi:
        if ($aiowsaccomcoikus) {
            goto imsmosgqcqgeksws;
        }
        goto wicqcmuwosqwyggg;
        wqameeueegakoqya:
        $siykeiywomwwuoiw = $this->gqaysymikgeawkqa();
        goto eeyksuucagkaqmsi;
        susauskwueokgaku:
        return $wkawwaegamqisugs;
        goto usaykyskgyqwquca;
        sgoioieqoekqywik:
        omqkeukuycyymmke:
        goto susauskwueokgaku;
        wwuiwkkgqescsyyw:
        imsmosgqcqgeksws:
        goto wqameeueegakoqya;
        ciuwaqyasauagkeu:
        if (!$siykeiywomwwuoiw) {
            goto omqkeukuycyymmke;
        }
        goto gakmkuaayakeymaa;
        eeyksuucagkaqmsi:
        $wkawwaegamqisugs = null;
        goto ciuwaqyasauagkeu;
        sucquwgiacwooomw:
        $wkawwaegamqisugs = $this->geeumyocaqwwquwk($siykeiywomwwuoiw, $wkkweuacukumqmya);
        goto sgoioieqoekqywik;
        usaykyskgyqwquca:
    }
    
    public function oqomcmyuuakigusk($ikgwqyuyckaewsow = [], $wkkweuacukumqmya = ["\x2a"])
    {
        return $this->geeumyocaqwwquwk($this->kqewyqqqiyiouaou($ikgwqyuyckaewsow), $wkkweuacukumqmya);
    }
    
    private function geeumyocaqwwquwk($siykeiywomwwuoiw, $wkkweuacukumqmya = ["\52"])
    {
        goto mewuwwsmewiimgsi;
        msmcmycooiwwqiik:
        $wkawwaegamqisugs = $this->awkaaqmauiuwwsca($siykeiywomwwuoiw, $wkkweuacukumqmya);
        goto imagiycyokkwucge;
        gaqcesscgywweieq:
        return $wkawwaegamqisugs;
        goto swqwssmgwikmieoa;
        iaewsguseweeqcqe:
        if (!$siykeiywomwwuoiw) {
            goto qiamskskowaugckg;
        }
        goto msmcmycooiwwqiik;
        mewuwwsmewiimgsi:
        $wkawwaegamqisugs = null;
        goto iaewsguseweeqcqe;
        imagiycyokkwucge:
        qiamskskowaugckg:
        goto gaqcesscgywweieq;
        swqwssmgwikmieoa:
    }
    
    public function qumqowkwyaceeqwu($ikgwqyuyckaewsow = []) : bool
    {
        goto qaswkqkwqgqqcyws;
        qaswkqkwqgqqcyws:
        $cmaccwokqweqweqi = false;
        goto ekimmsiekwwoawym;
        gsimucysiuikweme:
        if (!$siykeiywomwwuoiw) {
            goto meuaykaqyqkseycs;
        }
        goto ukicwqcoggwiskgo;
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
        $meqocwsecsywiiqs = __("\104\145\x6c\145\x74\145", PR__CMN__FOUNDATION);
        return ManipulateHTML::uskieqmcqyecigmy(["\x74\171\160\145" => "\x65\162\162\157\162", "\164\151\164\154\x65" => $meqocwsecsywiiqs, "\x63\157\156\x74\145\x6e\164" => __("\x41\x72\145\x20\171\157\165\40\163\x75\162\x65\40\171\x6f\165\x20\x77\141\x6e\x74\x20\x74\x6f\x20\144\145\154\x65\x74\145\x20\x74\150\x69\163\x20\151\164\x65\155\x3f", PR__CMN__FOUNDATION), "\x62\165\x74\x74\x6f\156\x73" => ["\143\x61\x6e\x63\145\x6c", ["\150\x72\x65\146" => $iwywmkygwewiamwm, "\x63\154\141\x73\163" => "\x70\x72\x2d\x6f\x72\155\55\x61\x63\164\x69\157\156\x20\x62\164\x6e\40\142\164\x6e\x2d\x70\x72\151\155\141\x72\x79", "\164\151\x74\154\x65" => $meqocwsecsywiiqs, "\x64\x69\163\x6d\151\163\x73" => true]]]);
    }
    
    public function rkmkouiquumiecqy($iwywmkygwewiamwm) : string
    {
        $meqocwsecsywiiqs = __("\x44\x65\x6c\x65\164\x65", PR__CMN__FOUNDATION);
        return ManipulateHTML::uuccukgasskgimsq("\x61", ["\x68\x72\x65\146" => "\x23", "\x63\154\x61\x73\x73" => "\163\165\x62\x6d\x69\x74\x64\x65\x6c\145\164\145\x20\160\162\x2d\x63\157\x6e\146\151\x72\x6d\x61\x62\154\x65\x2d\141\x63\x74\151\x6f\156", "\x64\x61\x74\x61\x2d\x63\157\156\x66\x69\x67" => $this->ymaommgoigkakyes($iwywmkygwewiamwm)], $meqocwsecsywiiqs);
    }
    
    public function aaeswuecycyquqwk($siykeiywomwwuoiw, $qsyooiqcmkcieyuk)
    {
        return $siykeiywomwwuoiw;
    }
    
    public function eukyqwmmeyakcyoo($mksyucucyswaukig, $yygmoeguaqyumuui = []) : array
    {
        goto ciwcwcqkgkmoguok;
        wameiecycmkcuimk:
        foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw => $pkyyagewkiyckmwy) {
            goto gkmgqmcgouseqwyg;
            swmeecwwakawqqcw:
            $sqqewmoeaekuyyas = $aaqqkgyougeiueyq->yywskysiycwkwsgw();
            goto awkmmuyuakwiaqae;
            wwugkwcimumgukko:
            iwcsismeakueeiya:
            goto keygauyiuaycggcw;
            kyoogyegwukaqoce:
            $aaqqkgyougeiueyq = ManipulateArray::get($qssskwiqeumgkago, $uusmaiomayssaecw);
            goto eocaacmwsqqqauuc;
            ccgmicuyeoggoecu:
            $sqqewmoeaekuyyas = 0;
            goto ewosekcicaqucsua;
            ymsscygscwwicumm:
            if (!($pkyyagewkiyckmwy && $eqgoocgaqwqcimie)) {
                goto iwcsismeakueeiya;
            }
            goto oouisuwokmqgwiau;
            maougsuwuoiecwgy:
            $pkyyagewkiyckmwy = ManipulateArray::get([self::CREATED_AT => __("\103\x72\145\x61\x74\145\x64\x20\x41\x74", PR__CMN__FOUNDATION), self::UPDATED_AT => __("\125\160\x64\141\x74\x65\x64\40\x41\x74", PR__CMN__FOUNDATION)], $uusmaiomayssaecw, '');
            goto pseqauyuqgmccuwe;
            emsqksecccqeueoa:
            $uusmaiomayssaecw = ManipulateString::ogimogiceeekegoi($pkyyagewkiyckmwy);
            goto ogmueiimgsogucqa;
            awkmmuyuakwiaqae:
            kmgoiquwmsayywsc:
            goto qogogggqiuuewakw;
            aiaayumowqswqqqk:
            $pkyyagewkiyckmwy = $aaqqkgyougeiueyq->qcgakseyaikigqco();
            goto swmeecwwakawqqcw;
            smqeaeiimomewqsw:
            goto kmgoiquwmsayywsc;
            goto wkgmgumyswiayyae;
            tokguaiieequuwwa:
            gcgckeksyymcgays:
            goto ccgmicuyeoggoecu;
            ogmueiimgsogucqa:
            $eqgoocgaqwqcimie = ManipulateArray::get($mksyucucyswaukig, $uusmaiomayssaecw);
            goto kyoogyegwukaqoce;
            oouisuwokmqgwiau:
            $oammesyieqmwuwyi[$uusmaiomayssaecw] = [self::LABEL => $pkyyagewkiyckmwy, self::VALUE => $eqgoocgaqwqcimie, self::PRIORITY => $sqqewmoeaekuyyas];
            goto wwugkwcimumgukko;
            sgamuuiycksmssoi:
            $eqgoocgaqwqcimie = $this->kamyqikiiuwqiiuw($uusmaiomayssaecw, $eqgoocgaqwqcimie, $mksyucucyswaukig);
            goto ymsscygscwwicumm;
            mugaisykgmqcaggg:
            eqmcakqmqkqkweww:
            goto sgamuuiycksmssoi;
            ewosekcicaqucsua:
            $eqgoocgaqwqcimie = '';
            goto mugaisykgmqcaggg;
            keygauyiuaycggcw:
            zawceoyikyuwoucg:
            goto memcsokyqmowucuo;
            gkmgqmcgouseqwyg:
            if (!is_numeric($uusmaiomayssaecw)) {
                goto gcgckeksyymcgays;
            }
            goto emsqksecccqeueoa;
            qogogggqiuuewakw:
            goto eqmcakqmqkqkweww;
            goto tokguaiieequuwwa;
            eocaacmwsqqqauuc:
            if ($aaqqkgyougeiueyq instanceof Field) {
                goto aqwcyyigiukqikui;
            }
            goto maougsuwuoiecwgy;
            pseqauyuqgmccuwe:
            $sqqewmoeaekuyyas = 1000;
            goto smqeaeiimomewqsw;
            wkgmgumyswiayyae:
            aqwcyyigiukqikui:
            goto aiaayumowqswqqqk;
            memcsokyqmowucuo:
        }
        goto ecyauwageoukkaaq;
        ecyauwageoukkaaq:
        imygueoqiqikwcws:
        goto cceesacikyckyiim;
        ksseoiqcgiqsamwy:
        if (!($mksyucucyswaukig && $yygmoeguaqyumuui)) {
            goto gyaoqaggggoiaoqs;
        }
        goto qgeiemoywoccmwgw;
        qgeiemoywoccmwgw:
        $qssskwiqeumgkago = $this->oyeskqayoscwciem()->aeosueemgsygqese();
        goto wameiecycmkcuimk;
        ciwcwcqkgkmoguok:
        $oammesyieqmwuwyi = [];
        goto ksseoiqcgiqsamwy;
        cceesacikyckyiim:
        gyaoqaggggoiaoqs:
        goto uqqawaaiywcggesu;
        uqqawaaiywcggesu:
        return ManipulateArray::yaeiiwwyckwugsem($oammesyieqmwuwyi);
        goto oamaoeaeoyckwmgk;
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
        eacqgkqmwkcsscec:
        if (!is_numeric($eqgoocgaqwqcimie)) {
            goto uyueemusgoakawmc;
        }
        goto eucysoaqoumycmso;
        sgiescgmgsowcakk:
        if ($aaqqkgyougeiueyq instanceof File) {
            goto vwyusaemeqkswgee;
        }
        goto cgeuosayqssasuou;
        isqemmgcymcqgmyu:
        if (!($this->kumuygiiqswoyasy() === $qgoqiacsiccwoawi)) {
            goto cesywumicwqkaeaq;
        }
        goto muuiwammayaceuue;
        kwmkusgsuoqoyses:
        ceegwysaccigqqck:
        goto eacqgkqmwkcsscec;
        wwyukkoeeeiiuewk:
        if ($aiooqyausygaasqm = ManipulateAttachment::ecqkouyiioksggkw($eqgoocgaqwqcimie)) {
            goto oukqakowgcgeugam;
        }
        goto qmeskaiqawomuqmk;
        icegsqiumouewcqo:
        return $eqgoocgaqwqcimie;
        goto mgeiyeygqcoismqq;
        qawqosgwykeguasw:
        oukqakowgcgeugam:
        goto oscukosgcqaqwcmi;
        sgaiaqoewagooqoo:
        $eqgoocgaqwqcimie = $this->ooeucgsymeocguuu($qgoqiacsiccwoawi, $eqgoocgaqwqcimie, null, null, $mksyucucyswaukig);
        goto iugooscuiysaeqgs;
        skuykkqcgakewusu:
        $eqgoocgaqwqcimie = $this->wusgwkaycokeckqs($eqgoocgaqwqcimie);
        goto imyoiukqcmewqkkw;
        kwagmsukmimymmmg:
        uyueemusgoakawmc:
        goto ieumcesgiqicqima;
        skwuueyuqkueasuu:
        iiakoqmowuggmkqw:
        goto oeoeeqeaokougsec;
        csiokukquwmccgqc:
        skokkuuieagmuwgm:
        goto sgaiaqoewagooqoo;
        qyoscouawykeimiu:
        if ($aaqqkgyougeiueyq instanceof DateTime || $aaqqkgyougeiueyq instanceof Timestamp) {
            goto skokkuuieagmuwgm;
        }
        goto wskwmocqgakykmgw;
        guyskocigecaisas:
        $aokagokqyuysuksm = $eqgoocgaqwqcimie;
        goto wugmawaqkksguaoa;
        uksgyweoymomgqos:
        goto csqwmisikmgeaaky;
        goto ugsomcmgekqayoqc;
        myasecwmmmiemgik:
        aoyqwwsacwqumucg:
        goto kwmkusgsuoqoyses;
        aqmauesokgqoyugm:
        cesywumicwqkaeaq:
        goto scigcaogysowccsk;
        ummgomwmsqygiqcy:
        if ($aaqqkgyougeiueyq instanceof Foreign && $aaqqkgyougeiueyq->eiyqqesoywqkegwu()) {
            goto cuqeayuiccuwcyua;
        }
        goto skuykkqcgakewusu;
        qmeskaiqawomuqmk:
        $eqgoocgaqwqcimie = ManipulateHTML::qgsekwygcgawekeq("\x69\155\x67", ["\x73\x72\143" => $eqgoocgaqwqcimie, "\x77\x69\x64\x74\x68" => "\70\60", "\x68\x65\151\147\x68\x74" => "\70\x30"]);
        goto ycekisssayygosaw;
        scigcaogysowccsk:
        $aaqqkgyougeiueyq = $this->oyeskqayoscwciem()->uqeoyqiwywwmsiew($qgoqiacsiccwoawi);
        goto qyoscouawykeimiu;
        kecgiacuyaumcewe:
        $eqgoocgaqwqcimie = ManipulateArray::get($aaqqkgyougeiueyq->gkwkqmwweiawigae(), $eqgoocgaqwqcimie, $eqgoocgaqwqcimie);
        goto giqssgogumimqkeo;
        eucysoaqoumycmso:
        $eqgoocgaqwqcimie = ManipulateAttachment::qaeeusqkgwagwaqc($eqgoocgaqwqcimie);
        goto kwagmsukmimymmmg;
        oscukosgcqaqwcmi:
        $eqgoocgaqwqcimie = $aiooqyausygaasqm;
        goto myasecwmmmiemgik;
        cgeuosayqssasuou:
        if (!is_numeric($eqgoocgaqwqcimie)) {
            goto comiusqosmykagiq;
        }
        goto ummgomwmsqygiqcy;
        ysswaukcymggikui:
        qewmkgeeuomgomia:
        goto uksgyweoymomgqos;
        ikgusckaomuoiggs:
        comiusqosmykagiq:
        goto oykuimwkwcmuekci;
        oykuimwkwcmuekci:
        goto qewmkgeeuomgomia;
        goto icausgkyooymuwqq;
        ycekisssayygosaw:
        goto aoyqwwsacwqumucg;
        goto qawqosgwykeguasw;
        ugoqkakikayagkmm:
        cuqeayuiccuwcyua:
        goto guyskocigecaisas;
        wugmawaqkksguaoa:
        $eqgoocgaqwqcimie = $this->aouwuegyyugiwksc($qgoqiacsiccwoawi, $mksyucucyswaukig, !$this->wmwguecgowcscues());
        goto ggwkueqyesouyaya;
        sesqsywwesiycmmq:
        if (!(!is_numeric($eqgoocgaqwqcimie) && ManipulateValidation::wmcwegoisyeeosqu($eqgoocgaqwqcimie))) {
            goto ceegwysaccigqqck;
        }
        goto wwyukkoeeeiiuewk;
        iugooscuiysaeqgs:
        ayekogimgycgmgau:
        goto icegsqiumouewcqo;
        imyoiukqcmewqkkw:
        goto uiuekqekiguikuce;
        goto ugoqkakikayagkmm;
        giqssgogumimqkeo:
        csqwmisikmgeaaky:
        goto wgiuiaqoekymkwwo;
        oeoeeqeaokougsec:
        uiuekqekiguikuce:
        goto ikgusckaomuoiggs;
        ieumcesgiqicqima:
        ayggscyaoccukyso:
        goto ysswaukcymggikui;
        ggwkueqyesouyaya:
        if ($eqgoocgaqwqcimie) {
            goto iiakoqmowuggmkqw;
        }
        goto gyeqsyqiosmysiio;
        muuiwammayaceuue:
        return $eqgoocgaqwqcimie;
        goto aqmauesokgqoyugm;
        icausgkyooymuwqq:
        vwyusaemeqkswgee:
        goto gwyguuaqscsukaqg;
        wgiuiaqoekymkwwo:
        goto ayekogimgycgmgau;
        goto csiokukquwmccgqc;
        wskwmocqgakykmgw:
        if ($aaqqkgyougeiueyq instanceof Enumeration) {
            goto wmasiggggymwkeqs;
        }
        goto sgiescgmgsowcakk;
        ugsomcmgekqayoqc:
        wmasiggggymwkeqs:
        goto kecgiacuyaumcewe;
        gwyguuaqscsukaqg:
        if (!($this->wkcuasmkgoscaiay() || $this->wmwguecgowcscues())) {
            goto ayggscyaoccukyso;
        }
        goto sesqsywwesiycmmq;
        gyeqsyqiosmysiio:
        $eqgoocgaqwqcimie = $aokagokqyuysuksm;
        goto skwuueyuqkueasuu;
        mgeiyeygqcoismqq:
    }
    
    public function geyuyukmwaoksywa($migiiksoiymissge, $ewgwqamkygiqaawc = '', $wwgucssaecqekuek = []) : string
    {
        goto yseysoymiwmicuoi;
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
        wuugmygqgsmkgsmc:
        return $nsmgceoqaqogqmuw;
        goto wcuuwegqcysecoom;
        miqekiwaouwgqgui:
        $iwywmkygwewiamwm = ManipulateHTML::qgsekwygcgawekeq("\x61", ManipulateFormat::omaawkkwwyesqwcc($wwgucssaecqekuek, ["\147\x65\x65\x63\161\171\x6f\x73\x6f\x73\x63\x65\165\155\163\x6b" => $migiiksoiymissge, "\x63\154\x61\163\x73" => "\x79\167\171\x61\x71\151\157\151\x6f\x73\165\x75\143\x6d\x67\161"]), true, $ewgwqamkygiqaawc);
        goto wawwaqicwyyeamqu;
        wawwaqicwyyeamqu:
        $nsmgceoqaqogqmuw = ManipulateHTML::ciuuiyckmsygceis($iwywmkygwewiamwm);
        goto quccsmwoagiquqya;
        wcuuwegqcysecoom:
    }
    
    public function ykaiaukuaeswygey($mksyucucyswaukig, $ikgwqyuyckaewsow, $eqgoocgaqwqcimie, $wamcomkuwysqgwgk = "\x3c\x64\x69\x76\x3e\x25\163\x3a\x20\45\x73\x3c\x2f\144\151\x76\76") : string
    {
        goto wksaesosugiyoqoe;
        wksaesosugiyoqoe:
        $ukmeuaouyackgwaa = '';
        goto kkiwuqcmoqmiquqq;
        kkiwuqcmoqmiquqq:
        foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) {
            goto geusysuemiqgegcw;
            oooiaawaqeogogky:
            $ukmeuaouyackgwaa .= sprintf($wamcomkuwysqgwgk, $aiowsaccomcoikus->qcgakseyaikigqco(), $this->kamyqikiiuwqiiuw($aiowsaccomcoikus->mwikyscisascoeea(), $uiymkeeaukcyqqik, $mksyucucyswaukig));
            goto cmugciymsqakcssq;
            yuiwacwscsiukyqe:
            if (!($aiowsaccomcoikus && $uiymkeeaukcyqqik)) {
                goto iyaaokkcuycqywco;
            }
            goto oooiaawaqeogogky;
            siowcuqygwiqumii:
            $aiowsaccomcoikus = ManipulateArray::get($this->oyeskqayoscwciem()->aeosueemgsygqese(), $aiowsaccomcoikus);
            goto yuiwacwscsiukyqe;
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
        ygmkqoaymoicisso:
        wyioauuuyckygcaq:
        goto mwsuqsikwoimcgiq;
        mwsuqsikwoimcgiq:
        if (!$ukmeuaouyackgwaa) {
            goto myswmcskaagkuaiq;
        }
        goto moiwoyyuauwqywom;
        iwyomomasqykuwcw:
        return $eqgoocgaqwqcimie;
        goto jwicyuowwocymagu;
        ekgcsqsycamakgak:
        myswmcskaagkuaiq:
        goto iwyomomasqykuwcw;
        moiwoyyuauwqywom:
        $eqgoocgaqwqcimie = "{$eqgoocgaqwqcimie}\x3c\x68\162\76{$ukmeuaouyackgwaa}";
        goto ekgcsqsycamakgak;
        jwicyuowwocymagu:
    }
    
    public function wkmkqaiwuqouweye($aiowsaccomcoikus, $eqgoocgaqwqcimie, $cackiyicawmkyqqg = self::EQUAL_SYMBOL, $siykeiywomwwuoiw = null) : ?Builder
    {
        try {
            goto egeeugucoaimuyai;
            egeeugucoaimuyai:
            if ($siykeiywomwwuoiw) {
                goto amwqgwykwqyqsygy;
            }
            goto iweqeyugoiogqcsw;
            eqqgiqaceosmskyq:
            laqgkacikykmcsos:
            goto gcikiyucocqiqkic;
            coswqmcmeyyaemcs:
            if (!$siykeiywomwwuoiw) {
                goto laqgkacikykmcsos;
            }
            goto amcyugmyywgmwyys;
            yiswuyuuwakywmiy:
            amwqgwykwqyqsygy:
            goto coswqmcmeyyaemcs;
            amcyugmyywgmwyys:
            
            $siykeiywomwwuoiw = $siykeiywomwwuoiw->where($aiowsaccomcoikus, $cackiyicawmkyqqg, $eqgoocgaqwqcimie);
            goto eqqgiqaceosmskyq;
            iweqeyugoiogqcsw:
            $siykeiywomwwuoiw = $this->gqaysymikgeawkqa();
            goto yiswuyuuwakywmiy;
            gcikiyucocqiqkic:
        } catch (Exception $wgaoewqkwgomoaai) {
            $siykeiywomwwuoiw = null;
        }
        return $siykeiywomwwuoiw;
    }
    
    public function woimamkkeyoyauoa($aiowsaccomcoikus, $eqgoocgaqwqcimie, $cackiyicawmkyqqg = self::EQUAL_SYMBOL, $wkkweuacukumqmya = ["\52"], $aiamqeawckcsuaou = self::GET) : array
    {
        goto ykomkgsekoimwoga;
        uooyycimwyiscwik:
        $aqykuigiuwmmcieu = $this->aocqcwaksksgckaw($siykeiywomwwuoiw, $wkkweuacukumqmya, $aiamqeawckcsuaou);
        goto wgyckicucikswwgc;
        wgyckicucikswwgc:
        kgaiygkqciegamkk:
        goto kuewoymyameyusgi;
        uwacyygkmmwmqumm:
        $siykeiywomwwuoiw = $this->wkmkqaiwuqouweye($aiowsaccomcoikus, $cackiyicawmkyqqg, $eqgoocgaqwqcimie);
        goto toacieymkgsmouum;
        toacieymkgsmouum:
        if (!$siykeiywomwwuoiw) {
            goto kgaiygkqciegamkk;
        }
        goto uooyycimwyiscwik;
        kuewoymyameyusgi:
        return $aqykuigiuwmmcieu;
        goto saqssgocioekcyik;
        ykomkgsekoimwoga:
        $aqykuigiuwmmcieu = [];
        goto uwacyygkmmwmqumm;
        saqssgocioekcyik:
    }
    
    public function mkcmqiiwgccguoko($aiowsaccomcoikus, $eqgoocgaqwqcimie, $cackiyicawmkyqqg = self::EQUAL_SYMBOL, $wkkweuacukumqmya = ["\x2a"]) : array
    {
        return $this->woimamkkeyoyauoa($aiowsaccomcoikus, $eqgoocgaqwqcimie, $cackiyicawmkyqqg, $wkkweuacukumqmya, self::PLUCK);
    }
    
    public function cwgkcyyaymmsomqa($mguygkocuoaoqqkg) : array
    {
        goto cusmikqmacqsyoma;
        aacaaeuuscacmgws:
        cqggosuciisguwka:
        goto imccgasockkumogm;
        ciiggekwccqceewc:
        return $mguygkocuoaoqqkg;
        goto kgseuyacuyamciku;
        imccgasockkumogm:
        foreach ($mguygkocuoaoqqkg as $momcykaoccoymeig => $mksyucucyswaukig) {
            $mguygkocuoaoqqkg[$momcykaoccoymeig] = $this->scqakcemaqsqkema($mksyucucyswaukig);
            aygymyyeaiouckwm:
        }
        goto yawiksokukeuwumm;
        cusmikqmacqsyoma:
        if ($mguygkocuoaoqqkg && is_array($mguygkocuoaoqqkg)) {
            goto cqggosuciisguwka;
        }
        goto qcqecwaeywouwwyw;
        wiisumwwuyqmqggs:
        iaemoucqgyeioome:
        goto ciiggekwccqceewc;
        yawiksokukeuwumm:
        ocqocwcocigwogao:
        goto wiisumwwuyqmqggs;
        qcqecwaeywouwwyw:
        $mguygkocuoaoqqkg = [];
        goto uyiyiugiugqiqgce;
        uyiyiugiugqiqgce:
        goto iaemoucqgyeioome;
        goto aacaaeuuscacmgws;
        kgseuyacuyamciku:
    }
    
    public function scqakcemaqsqkema($mksyucucyswaukig, $yiosiwewiecqmkaa = [])
    {
        goto aockoackcyuqgoky;
        keeayqkcscoegmmc:
        kiwygqkmigumiiuk:
        goto iescmuyqmwkeagcg;
        scuysmagomwasugy:
        foreach ($mksyucucyswaukig as $aiowsaccomcoikus => $eqgoocgaqwqcimie) {
            goto auyuqgiwqummogko;
            egcykicymsycioaq:
            cuiswoyuykyksukc:
            goto scgkuqsgoooesoak;
            auyuqgiwqummogko:
            if (!(!$yiosiwewiecqmkaa || in_array($aiowsaccomcoikus, $yiosiwewiecqmkaa))) {
                goto oqwssckcieuowiwc;
            }
            goto qgowycwwyqeusmqk;
            ouiaceqmgmusysiq:
            oqwssckcieuowiwc:
            goto egcykicymsycioaq;
            qgowycwwyqeusmqk:
            $mksyucucyswaukig = ManipulateArray::set($mksyucucyswaukig, [$aiowsaccomcoikus => $this->kamyqikiiuwqiiuw($aiowsaccomcoikus, $eqgoocgaqwqcimie, $mksyucucyswaukig)]);
            goto ouiaceqmgmusysiq;
            scgkuqsgoooesoak:
        }
        goto yamuiaoquqoesiye;
        yamuiaoquqoesiye:
        wewskayogyikqqwe:
        goto keeayqkcscoegmmc;
        iescmuyqmwkeagcg:
        return $mksyucucyswaukig;
        goto eyacawwuwcgegekw;
        aockoackcyuqgoky:
        if (!$mksyucucyswaukig) {
            goto kiwygqkmigumiiuk;
        }
        goto scuysmagomwasugy;
        eyacawwuwcgegekw:
    }
    
    public function yaswokogyqciggeq($aiowsaccomcoikus, $eqgoocgaqwqcimie, $qgoqiacsiccwoawi = self::ID, $cackiyicawmkyqqg = self::EQUAL_SYMBOL) : array
    {
        return $this->mkcmqiiwgccguoko($aiowsaccomcoikus, $eqgoocgaqwqcimie, $cackiyicawmkyqqg, $qgoqiacsiccwoawi);
    }
    
    public function cwkywyqksyucoyia($ikgwqyuyckaewsow, $wkkweuacukumqmya = ["\x2a"]) : array
    {
        goto mgomeacemugqgswa;
        mgomeacemugqgswa:
        $aqykuigiuwmmcieu = [];
        goto muewmqsoeqoosicu;
        ekcsiqgsyyiwyiui:
        if (!$siykeiywomwwuoiw) {
            goto eyecoeksswsicqkq;
        }
        goto uyeiksuwckaowkqm;
        qiykkoqakyesmswm:
        eyecoeksswsicqkq:
        goto ieceiycekgcommqi;
        ieceiycekgcommqi:
        return $aqykuigiuwmmcieu;
        goto umskgiqgaemaokmw;
        uyeiksuwckaowkqm:
        $aqykuigiuwmmcieu = $this->aocqcwaksksgckaw($siykeiywomwwuoiw, $wkkweuacukumqmya);
        goto qiykkoqakyesmswm;
        muewmqsoeqoosicu:
        $siykeiywomwwuoiw = $this->kqewyqqqiyiouaou($ikgwqyuyckaewsow);
        goto ekcsiqgsyyiwyiui;
        umskgiqgaemaokmw:
    }
    
    public function kqewyqqqiyiouaou($ikgwqyuyckaewsow, $siykeiywomwwuoiw = null)
    {
        goto aakegewkccyyeuwc;
        csouyaoieqauoyww:
        return $siykeiywomwwuoiw;
        goto ewyqasqeksiqauuw;
        iewmwscqgiiicygc:
        $siykeiywomwwuoiw = $this->gqaysymikgeawkqa();
        goto gikgmkgewswggoou;
        aakegewkccyyeuwc:
        if (!(!$siykeiywomwwuoiw instanceof Builder && !$siykeiywomwwuoiw instanceof Relation)) {
            goto ieuoskasoucciwkq;
        }
        goto iewmwscqgiiicygc;
        gikgmkgewswggoou:
        ieuoskasoucciwkq:
        goto wiqmeiaaqqauqeme;
        wiqmeiaaqqauqeme:
        try {
            goto cuqsyqewuemsysgi;
            cuqsyqewuemsysgi:
            if (!$siykeiywomwwuoiw) {
                goto yoegkeiammkuouua;
            }
            goto aicoaaeeewwmioou;
            aicoaaeeewwmioou:
            foreach ($ikgwqyuyckaewsow as $qgoqiacsiccwoawi => $ywmkwiwkosakssii) {
                goto mcsucqagsqysgieu;
                mywgmggymygqamce:
                $yummaigqmauwcyou = ManipulateArray::get($ywmkwiwkosakssii, self::CLAUSE, self::WHERE);
                goto cswkeogkecaoyoka;
                yiuwcmkkcemwksaq:
                muoaaecywcccquoa:
                goto wgegmwgsmsgmceqo;
                kqkqessiagyiiuim:
                wyuuoyquywymqoqc:
                goto omyeseoqwqiuwqcw;
                ieaswyqkcwyaycse:
                switch ($yummaigqmauwcyou) {
                    case self::CONTAIN:
                        
                        $siykeiywomwwuoiw = $siykeiywomwwuoiw->whereIn($qgoqiacsiccwoawi, $eqgoocgaqwqcimie, $qsycuegoicqcqkmo, $mqogqgswmasasmik);
                        goto wskuiymiemyqssui;
                    case self::JOIN:
                        goto quweggukmkusygwe;
                        ysmqqmuesgeyquws:
                        $icsywsyukqcciiky = ManipulateArray::get($ywmkwiwkosakssii, self::WHERE, false);
                        goto mmoyseisgqkyouaq;
                        oyeuoiqgeuioiqie:
                        
                        $siykeiywomwwuoiw = $siykeiywomwwuoiw->join($aasascamegmwqmqk, $eqgoocgaqwqcimie[0], $cackiyicawmkyqqg, $eqgoocgaqwqcimie[1], $sqeykgyoooqysmca, $icsywsyukqcciiky);
                        goto qwuwcoeiguyqekuy;
                        quweggukmkusygwe:
                        $sqeykgyoooqysmca = ManipulateArray::get($ywmkwiwkosakssii, self::TYPE, "\151\156\x6e\145\162");
                        goto ysmqqmuesgeyquws;
                        qwuwcoeiguyqekuy:
                        goto wskuiymiemyqssui;
                        goto osskmmsaekmgemwc;
                        mmoyseisgqkyouaq:
                        $aasascamegmwqmqk = $qgoqiacsiccwoawi;
                        goto oyeuoiqgeuioiqie;
                        osskmmsaekmgemwc:
                    case self::WHERE:
                        goto gmmgscuqwgiiqsmc;
                        gwgssaymsgykwaoe:
                        wococciimesuaeys:
                        goto wwioiasoggswmeyy;
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
                        owsusyqkaqmcmkwu:
                        skmyqomuuowkeeqe:
                        goto woqwmsyieymgsqao;
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
                        qywoucqwciweuyeg:
                        goto momgaqeuucmowiii;
                        goto kwiwoeckcqgewwsc;
                        gmmgscuqwgiiqsmc:
                        if (is_array($eqgoocgaqwqcimie)) {
                            goto smwcscokyasiosks;
                        }
                        goto imwwaqcuqskiyeqc;
                        woqwmsyieymgsqao:
                        ygsoccgkwamsqewm:
                        goto qywoucqwciweuyeg;
                        kwiwoeckcqgewwsc:
                        smwcscokyasiosks:
                        goto meseoaayykmoeicm;
                        iokqqymyimieyyyy:
                        goto wskuiymiemyqssui;
                        goto aoaymmuyuuwqwcuy;
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
                yuuygkmacmmcakma:
                $eqgoocgaqwqcimie = ManipulateArray::get($ywmkwiwkosakssii, self::VALUE, $ywmkwiwkosakssii);
                goto mywgmggymygqamce;
                mcsucqagsqysgieu:
                $mqogqgswmasasmik = ManipulateArray::get($ywmkwiwkosakssii, self::NOT, false);
                goto yuuygkmacmmcakma;
                oekyuoucqkakcewe:
                $cackiyicawmkyqqg = ManipulateArray::get($ywmkwiwkosakssii, self::OPERATOR, self::EQUAL_SYMBOL);
                goto ieaswyqkcwyaycse;
                wgegmwgsmsgmceqo:
                wskuiymiemyqssui:
                goto kqkqessiagyiiuim;
                omyeseoqwqiuwqcw:
            }
            goto meywqwweoiaqwwiu;
            umseiamyiyksuyim:
            yoegkeiammkuouua:
            goto ubsguocwequeoicm;
            meywqwweoiaqwwiu:
            igqwceeuaueagaem:
            goto umseiamyiyksuyim;
            ubsguocwequeoicm:
        } catch (Exception $wgaoewqkwgomoaai) {
            $siykeiywomwwuoiw = null;
        }
        goto csouyaoieqauoyww;
        ewyqasqeksiqauuw:
    }
    
    public function ieieyoeqmmeysauc($aiowsaccomcoikus, $eqgoocgaqwqcimie, $cackiyicawmkyqqg = self::EQUAL_SYMBOL, $siykeiywomwwuoiw = null) : int
    {
        goto ssocqyqwsyyekiik;
        ssocqyqwsyyekiik:
        $gaeqamemwmwsyukm = 0;
        goto nomsoewcmsqiikyy;
        wgggaasiaeeucygm:
        eyoiasswoyuyuuco:
        goto wmgokkkswmssqimu;
        iiueqisykokweaaw:
        if (!$siykeiywomwwuoiw) {
            goto eyoiasswoyuyuuco;
        }
        goto maquyauskaqkikks;
        maquyauskaqkikks:
        
        $gaeqamemwmwsyukm = $siykeiywomwwuoiw->count();
        goto wgggaasiaeeucygm;
        nomsoewcmsqiikyy:
        $siykeiywomwwuoiw = $this->wkmkqaiwuqouweye($aiowsaccomcoikus, $cackiyicawmkyqqg, $eqgoocgaqwqcimie, $siykeiywomwwuoiw);
        goto iiueqisykokweaaw;
        wmgokkkswmssqimu:
        return $gaeqamemwmwsyukm;
        goto ywueqiukuessuggs;
        ywueqiukuessuggs:
    }
    
    public function ssqiqiiwyusygike($aiowsaccomcoikus, $eqgoocgaqwqcimie, $qgoqiacsiccwoawi, $cackiyicawmkyqqg = self::EQUAL_SYMBOL)
    {
        goto sogccagmgkcaoase;
        useouyguueemgkmq:
        $siykeiywomwwuoiw = $this->wkmkqaiwuqouweye($aiowsaccomcoikus, $cackiyicawmkyqqg, $eqgoocgaqwqcimie);
        goto oweiysimemyoswom;
        oweiysimemyoswom:
        if (!$siykeiywomwwuoiw) {
            goto iwwcoscasyysaqoo;
        }
        goto coakykwqwcigaoeq;
        samuycgcmqkmcgea:
        return $qsmaqqyoggcuyukq;
        goto kqacoqsymeyimagg;
        sogccagmgkcaoase:
        $qsmaqqyoggcuyukq = 0;
        goto useouyguueemgkmq;
        gekuacoquiucucoa:
        iwwcoscasyysaqoo:
        goto samuycgcmqkmcgea;
        coakykwqwcigaoeq:
        
        $qsmaqqyoggcuyukq = $siykeiywomwwuoiw->sum($qgoqiacsiccwoawi);
        goto gekuacoquiucucoa;
        kqacoqsymeyimagg:
    }
    
    public function ewaugyyiauqmiwsu($ymaogssqccumcyqa, $eqgoocgaqwqcimie, $cackiyicawmkyqqg = self::GE_SYMBOL, $qsycuegoicqcqkmo = self::AND, $mqogqgswmasasmik = false, $siykeiywomwwuoiw = null) : ?Builder
    {
        try {
            goto wcksgisuiomywugm;
            mwwqyciigykaycis:
            $siykeiywomwwuoiw = $this->gqaysymikgeawkqa();
            goto geacaysasaiqsewo;
            qqgoygcaggkkisyw:
            qqqseeocmmummkga:
            goto imiieooawogoyagw;
            kigeagsoeqmgaosa:
            if ($cackiyicawmkyqqg == "\x62\145\x74\x77\x65\145\x6e" && is_array($eqgoocgaqwqcimie)) {
                goto wwwyugiayoaucqiu;
            }
            goto iiowkswmewooomes;
            imyqaycayqeucsau:
            goto iswgeeweeweswyoy;
            goto yiqskmikgqukkewq;
            cmcawyswoeumueys:
            iswgeeweeweswyoy:
            goto ugcquuakimgkmeqc;
            wewikewycwowkqui:
            $eqgoocgaqwqcimie = new \DateTime($eqgoocgaqwqcimie);
            goto qqgoygcaggkkisyw;
            iiowkswmewooomes:
            if (!is_numeric($eqgoocgaqwqcimie)) {
                goto qqqseeocmmummkga;
            }
            goto wewikewycwowkqui;
            geacaysasaiqsewo:
            maiokoamiosssisk:
            goto kigeagsoeqmgaosa;
            imiieooawogoyagw:
            
            $siykeiywomwwuoiw = $siykeiywomwwuoiw->whereDate($ymaogssqccumcyqa, $cackiyicawmkyqqg, $eqgoocgaqwqcimie, $qsycuegoicqcqkmo);
            goto imyqaycayqeucsau;
            eoeomqmkgaogkome:
            
            $siykeiywomwwuoiw = $siykeiywomwwuoiw->whereBetween($ymaogssqccumcyqa, $eqgoocgaqwqcimie, $qsycuegoicqcqkmo, $mqogqgswmasasmik);
            goto cmcawyswoeumueys;
            wcksgisuiomywugm:
            if ($siykeiywomwwuoiw) {
                goto maiokoamiosssisk;
            }
            goto mwwqyciigykaycis;
            yiqskmikgqukkewq:
            wwwyugiayoaucqiu:
            goto eoeomqmkgaogkome;
            ugcquuakimgkmeqc:
        } catch (Exception $wgaoewqkwgomoaai) {
        }
        return $siykeiywomwwuoiw;
    }
    
    public function eowgwggyqseqeywy($kwkmegesqkqwyska, $cackiyicawmkyqqg = self::GRATER_SYMBOL, $wkkweuacukumqmya = ["\52"]) : array
    {
        return $this->iiqauwkoiguyeawu($this->ewaugyyiauqmiwsu(self::CREATED_AT, $kwkmegesqkqwyska, $cackiyicawmkyqqg), $wkkweuacukumqmya);
    }
    
    public function qogaqkcsogcqiaic($mksyucucyswaukig, $aiowsaccomcoikus, $ggauoeuaesiymgee = null)
    {
        goto ugkqimokoeicsyqm;
        aecamacaoskqmccs:
        $eqgoocgaqwqcimie = ManipulateArray::get($mksyucucyswaukig, $aiowsaccomcoikus->mwikyscisascoeea(), $ggauoeuaesiymgee);
        goto oekmoqcqwyauiaeg;
        kyuewcuomwmweguq:
        $ksiyqouuaoymsycg = $this->oyeskqayoscwciem()->uqeoyqiwywwmsiew($aiowsaccomcoikus);
        goto syokeusmqogkicks;
        ekkkweoucuyuqwik:
        agcugqouiqgiskcq:
        goto mkosooeggqemyqqy;
        uiqaoucyoiwykywa:
        if (!$aiowsaccomcoikus instanceof Json) {
            goto msaugmwuooqkmwus;
        }
        goto umawcakyaoykccao;
        umawcakyaoykccao:
        $eqgoocgaqwqcimie = json_decode($eqgoocgaqwqcimie);
        goto wwmscmqgasawkkwa;
        ooqqyyewioyccuww:
        return $eqgoocgaqwqcimie;
        goto umasasgawwamkisc;
        ugkqimokoeicsyqm:
        if ($aiowsaccomcoikus instanceof Field) {
            goto agcugqouiqgiskcq;
        }
        goto kyuewcuomwmweguq;
        aksogeackceaeays:
        oqksakqyecmsuscq:
        goto ugwyeeockousskag;
        kokkacggmoaagiae:
        goto ueeuassqywswigaq;
        goto iweickamaucqgysq;
        ugwyeeockousskag:
        ueeuassqywswigaq:
        goto ooqqyyewioyccuww;
        mkosooeggqemyqqy:
        if ($aiowsaccomcoikus instanceof Field) {
            goto sumiomammkayeqis;
        }
        goto uyugkucyiqymcuus;
        uyugkucyiqymcuus:
        $eqgoocgaqwqcimie = ManipulateArray::get($mksyucucyswaukig, $aiowsaccomcoikus, $ggauoeuaesiymgee);
        goto kokkacggmoaagiae;
        wwmscmqgasawkkwa:
        msaugmwuooqkmwus:
        goto aksogeackceaeays;
        iweickamaucqgysq:
        sumiomammkayeqis:
        goto aecamacaoskqmccs;
        qiiwgkcyqweecqoa:
        uwkuasmeoueseaou:
        goto ekkkweoucuyuqwik;
        oqkqaggagwswaaqi:
        $aiowsaccomcoikus = $ksiyqouuaoymsycg;
        goto qiiwgkcyqweecqoa;
        oekmoqcqwyauiaeg:
        if (!$eqgoocgaqwqcimie) {
            goto oqksakqyecmsuscq;
        }
        goto uiqaoucyoiwykywa;
        syokeusmqogkicks:
        if (!$ksiyqouuaoymsycg) {
            goto uwkuasmeoueseaou;
        }
        goto oqkqaggagwswaaqi;
        umasasgawwamkisc:
    }
    
    private function aocqcwaksksgckaw($siykeiywomwwuoiw, $wkkweuacukumqmya = ["\x2a"], $aiamqeawckcsuaou = self::GET) : array
    {
        goto qqkqiioqwkekqsoq;
        ayegqigqcsuoqess:
        return $uomewyckeuqoqocu;
        goto scqwioawomamygwa;
        ckugukmoqamgcwci:
        $iwqgomgkuumgyswi = $this->ymkikmwesqgscscy($siykeiywomwwuoiw, $wkkweuacukumqmya, $aiamqeawckcsuaou);
        goto omeukkwiesseygwy;
        omeukkwiesseygwy:
        if (!$iwqgomgkuumgyswi) {
            goto iqsoeqgwemgyiimg;
        }
        goto gewecumqwgcuwikk;
        gewecumqwgcuwikk:
        $uomewyckeuqoqocu = $iwqgomgkuumgyswi->sacmkccceuywoqsq();
        goto aewqyqksisqayska;
        qqkqiioqwkekqsoq:
        $uomewyckeuqoqocu = [];
        goto ckugukmoqamgcwci;
        aewqyqksisqayska:
        iqsoeqgwemgyiimg:
        goto ayegqigqcsuoqess;
        scqwioawomamygwa:
    }
    
    public function ymkikmwesqgscscy($siykeiywomwwuoiw, $wkkweuacukumqmya = ["\x2a"], $aiamqeawckcsuaou = self::GET) : ?Collection
    {
        goto qywgscciuywgmaia;
        iiwessuyuisaawek:
        return $iwqgomgkuumgyswi;
        goto yqukoacecemgkkay;
        wmoqoeyuaikokayu:
        $iwqgomgkuumgyswi = null;
        goto ucwwsgoweeagukyq;
        kaewigguiigmcsoe:
        muooqqykkmuismwk:
        goto wmoqoeyuaikokayu;
        qgiscekgegqwemgs:
        euiiaygickweagiw:
        goto iiwessuyuisaawek;
        yaiwoisswowiyski:
        if (!in_array($aiamqeawckcsuaou, [self::GET, self::PLUCK])) {
            goto auucmoqsmsouecag;
        }
        goto gecscumwugkogmyq;
        qywgscciuywgmaia:
        if ($siykeiywomwwuoiw) {
            goto muooqqykkmuismwk;
        }
        goto wiqmoimycyeesqse;
        wiqmoimycyeesqse:
        $siykeiywomwwuoiw = $this->gqaysymikgeawkqa();
        goto kaewigguiigmcsoe;
        ucwwsgoweeagukyq:
        if (!$siykeiywomwwuoiw) {
            goto euiiaygickweagiw;
        }
        goto yaiwoisswowiyski;
        gecscumwugkogmyq:
        $iwqgomgkuumgyswi = $siykeiywomwwuoiw->{$aiamqeawckcsuaou}($wkkweuacukumqmya);
        goto euaikwmkiyegwqae;
        euaikwmkiyegwqae:
        auucmoqsmsouecag:
        goto qgiscekgegqwemgs;
        yqukoacecemgkkay:
    }
    
    public function kmqmiwcimmagogoy($siykeiywomwwuoiw, $wkkweuacukumqmya = ["\x2a"], $aiamqeawckcsuaou = self::GET)
    {
        goto owsgmougoacgokmi;
        cymigkmkskowwcei:
        $qsmaqqyoggcuyukq = $iwqgomgkuumgyswi->qsmaqqyoggcuyukq();
        goto ukecesmaioggmyoc;
        iaqyisoeeygqwcym:
        $iwqgomgkuumgyswi = $this->ymkikmwesqgscscy($siykeiywomwwuoiw, $wkkweuacukumqmya, $aiamqeawckcsuaou);
        goto qokakquaeuigqcwy;
        wcyawmskokoagwqq:
        return $qsmaqqyoggcuyukq;
        goto yseoucmemeekwkig;
        owsgmougoacgokmi:
        $qsmaqqyoggcuyukq = 0;
        goto iaqyisoeeygqwcym;
        ukecesmaioggmyoc:
        soyqsccuokmyuagk:
        goto wcyawmskokoagwqq;
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
    
    public function wsymaekkqgymcyms($siykeiywomwwuoiw, $wkkweuacukumqmya = ["\x2a"]) : ?Collection
    {
        return $this->ymkikmwesqgscscy($siykeiywomwwuoiw, $wkkweuacukumqmya, self::PLUCK);
    }
    
    public function ewkswoqykwsuckok($siykeiywomwwuoiw, $qgoqiacsiccwoawi, $ecysmcqmumqmaagg = self::ASC)
    {
        goto uogakawoeucgocym;
        sqwgcyyoaismwkqs:
        
        $siykeiywomwwuoiw = $siykeiywomwwuoiw->orderBy($qgoqiacsiccwoawi, $ecysmcqmumqmaagg);
        goto umeiiiomksmkmoaa;
        gscsssqcacocusua:
        if (!$siykeiywomwwuoiw) {
            goto igoseisickgqeaog;
        }
        goto sqwgcyyoaismwkqs;
        soywogweqoqmymqw:
        suggiaqykiwgkkey:
        goto gscsssqcacocusua;
        uogakawoeucgocym:
        if ($siykeiywomwwuoiw) {
            goto suggiaqykiwgkkey;
        }
        goto cyukykwcccsawesg;
        umeiiiomksmkmoaa:
        igoseisickgqeaog:
        goto aokcewiioiiyiqeu;
        cyukykwcccsawesg:
        $siykeiywomwwuoiw = $this->gqaysymikgeawkqa();
        goto soywogweqoqmymqw;
        aokcewiioiiyiqeu:
        return $siykeiywomwwuoiw;
        goto iisykceuumgoicmc;
        iisykceuumgoicmc:
    }
    
    public function awkaaqmauiuwwsca($siykeiywomwwuoiw, $wkkweuacukumqmya = ["\x2a"], $qgoqiacsiccwoawi = null, $ecysmcqmumqmaagg = null)
    {
        goto cgmukwicwgikewei;
        iuasemkmccmcauoc:
        $siykeiywomwwuoiw = $this->gqaysymikgeawkqa();
        goto sscqwggcsoumagsw;
        sycysmgqeucmisiw:
        $mksyucucyswaukig = null;
        goto sawkcaueekoqcaoq;
        iasuykaqammykyuc:
        if (!($qgoqiacsiccwoawi && $ecysmcqmumqmaagg)) {
            goto ayoyuasegggqqosu;
        }
        goto ykmceyuggseogcgm;
        sawkcaueekoqcaoq:
        if (!$siykeiywomwwuoiw) {
            goto mkikakaaaqwygquu;
        }
        goto omcskkiwcgiysuis;
        cgmukwicwgikewei:
        if ($siykeiywomwwuoiw) {
            goto womgsyqqiwokqyiw;
        }
        goto iuasemkmccmcauoc;
        ykmceyuggseogcgm:
        $siykeiywomwwuoiw = $this->ewkswoqykwsuckok($siykeiywomwwuoiw, $qgoqiacsiccwoawi, $ecysmcqmumqmaagg);
        goto oiakiumycyquagqu;
        omcskkiwcgiysuis:
        
        $mksyucucyswaukig = $siykeiywomwwuoiw->first($wkkweuacukumqmya);
        goto wywuimckaigaukkg;
        sscqwggcsoumagsw:
        womgsyqqiwokqyiw:
        goto iasuykaqammykyuc;
        wywuimckaigaukkg:
        mkikakaaaqwygquu:
        goto ykeuwugswmeukgii;
        oiakiumycyquagqu:
        ayoyuasegggqqosu:
        goto sycysmgqeucmisiw;
        ykeuwugswmeukgii:
        return $mksyucucyswaukig;
        goto gaucesmmweqmemkg;
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
    
    public function uckwcqkkygmuquqq($aasascamegmwqmqk, $sysgmomuyiiawwcm, $gcegymooyemmaysk, $siykeiywomwwuoiw = null, $cackiyicawmkyqqg = self::EQUAL_SYMBOL, $sqeykgyoooqysmca = "\x69\x6e\x6e\145\x72", $icsywsyukqcciiky = false) : ?Builder
    {
        goto kecaqcyccioyaoaa;
        siawaquisuoeysqa:
        return $siykeiywomwwuoiw;
        goto mgqqigauyucewouk;
        qsmmausewiocaesg:
        uuooygauoaumkemu:
        goto caseeeggigkaoswu;
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
        cwuqamaiywoeieyw:
        
        $siykeiywomwwuoiw = $siykeiywomwwuoiw->join($aasascamegmwqmqk, $sysgmomuyiiawwcm, $cackiyicawmkyqqg, $gcegymooyemmaysk, $sqeykgyoooqysmca, $icsywsyukqcciiky);
        goto giemwgcqeogmauao;
        csuyaisqcmkkyqiw:
        $siykeiywomwwuoiw = $this->gqaysymikgeawkqa();
        goto qsmmausewiocaesg;
        giemwgcqeogmauao:
        osgaygqiwagaowsq:
        goto siawaquisuoeysqa;
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
