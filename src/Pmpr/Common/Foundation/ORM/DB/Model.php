<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b499786a1b             |
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
    const ORM_FILTER_BY = "\x6f\x72\155\137\x66\151\x6c\164\x65\x72\137\142\171";
    const ORM_FILTER_VALUE = "\x6f\162\155\137\x66\151\x6c\x74\145\162\x5f\166\141\x6c\x75\x65";
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
        yuoyackaoigyyyso:
        cgasgmiiqegqesic:
        goto kcqieuukskyiywss;
        kwaqakoogeiacmwi:
        if (!$aiqugsyouyikgawm instanceof Updater) {
            goto gikaiicgqyueeoco;
        }
        goto ccqgkeesikyegcik;
        qoiuwyogucoeaoew:
        if ($ymqmyyeuycgmigyo) {
            goto muwyuiikuywigwso;
        }
        goto qkkqiagwgaoyauki;
        oqwyemgwoossauyk:
        $this->gyqeoeemeemicgqi();
        goto cwcmwogseemgqgqq;
        mwskgsimqagmkcgq:
        $suckquwcuiuyiogc = ManipulateSetting::cmaecekuqkwmemms("\125\x50\x44\x41\124\105\x5f\x4f\122\x4d\137\104\x41\124\101\x42\101\123\105", 0);
        goto mkuigmcgkawyawee;
        aakwscykmyyykoms:
        gikaiicgqyueeoco:
        goto iiuawywwoaeyauge;
        mkuigmcgkawyawee:
        if (!(!ManipulateAjax::mcgoysmkqsqooceq() && ($suckquwcuiuyiogc || !$this->gqaysymikgeawkqa()))) {
            goto akcakssqcqcouwew;
        }
        goto ouqwmaaskykywyqo;
        miaiggsoiaekmqwy:
        static::$resolver = new Resolver();
        goto suoymucmyegewkmu;
        wcoqiwuusoeqiqwi:
        if (is_numeric($aokagokqyuysuksm)) {
            goto akoiqkoqmmmcieug;
        }
        goto oqwyemgwoossauyk;
        ccqgkeesikyegcik:
        $aiqugsyouyikgawm->yuaecocyyyqqgsyw($this->oyeskqayoscwciem())->uwyqgmcuomgeccgy($mgcmmwqwguicsews);
        goto aakwscykmyyykoms;
        yamoiggaeugmgkku:
        $this->ckgmycmaukqgkosk();
        goto eqekaoaioiykuaiw;
        uqagqomggiacosqm:
        $this->ewaqwooqoqmcoomi();
        goto mwskgsimqagmkcgq;
        eqekaoaioiykuaiw:
        $ymqmyyeuycgmigyo = $this->miwqiiqeegeqcwis();
        goto qoiuwyogucoeaoew;
        ouqwmaaskykywyqo:
        $mgcmmwqwguicsews->cymcyywycwkawmsi();
        goto agqmoymkiswqswqo;
        iqeqqwcmaiqakawc:
        
        $mgcmmwqwguicsews = $this->getConnection();
        goto gioqkcywauuckmua;
        kcqieuukskyiywss:
        parent::__construct($siquossayskcwkea);
        goto wukuisoeoeomgegu;
        gioqkcywauuckmua:
        $this->table = $mgcmmwqwguicsews->cokoiaeeomgssqgy($ymqmyyeuycgmigyo);
        goto miaiggsoiaekmqwy;
        agqmoymkiswqswqo:
        $aiqugsyouyikgawm = Updater::ocmycskcuiawkecq($ymqmyyeuycgmigyo);
        goto kwaqakoogeiacmwi;
        suoymucmyegewkmu:
        if (self::quiqwmkiyigesygc()) {
            goto cgasgmiiqegqesic;
        }
        goto uqagqomggiacosqm;
        iiuawywwoaeyauge:
        akcakssqcqcouwew:
        goto wcoqiwuusoeqiqwi;
        qkkqiagwgaoyauki:
        wp_die("\156\x61\x6d\x65\x20\151\163\x20\156\157\164\x20\144\x65\146\151\156\145\x20\x66\x6f\x72\x20\155\x6f\x64\x65\x6c\72\x20" . self::uqggkiomyiceyooa());
        goto oyywywoqaqcykucs;
        oyywywoqaqcykucs:
        muwyuiikuywigwso:
        goto iqeqqwcmaiqakawc;
        cwcmwogseemgqgqq:
        akoiqkoqmmmcieug:
        goto yuoyackaoigyyyso;
        wukuisoeoeomgegu:
    }
    public function wigskegsqequoeks()
    {
        $ymqmyyeuycgmigyo = $this->miwqiiqeegeqcwis();
        $this->qcsmikeggeemccuu("\151\156\x69\164", [$this, "\x63\147\x61\155\165\167\151\x71\x73\147\x77\x73\151\153\x6b\155"])->koaegcswmcqsiykq($this->ygyygikyocoymgaw("{$ymqmyyeuycgmigyo}\137\x67\145\x74\137\x6c\151\163\164"), [$this, "\x63\153\x67\171\x65\x67\153\165\x73\155\x75\x79\155\151\155\157"])->qcsmikeggeemccuu($this->ygyygikyocoymgaw("{$ymqmyyeuycgmigyo}\x5f\x64\x6f\137\x62\x75\154\153\137\141\x63\x74\151\x6f\156"), [$this, "\155\171\x79\161\x77\171\163\x77\167\145\163\x77\x69\x75\167\165"], 10, 2)->qcsmikeggeemccuu($this->ygyygikyocoymgaw("{$ymqmyyeuycgmigyo}\x5f\144\x6f\137\x73\151\156\147\154\145\x5f\x61\x63\x74\151\x6f\x6e"), [$this, "\153\157\163\157\141\x6f\x75\x6f\x67\153\x65\x61\157\x6d\167\157"], 10, 2);
    }
    public function kgquecmsgcouyaya()
    {
        $ymqmyyeuycgmigyo = $this->miwqiiqeegeqcwis();
        $this->cecaguuoecmccuse($this->ygyygikyocoymgaw("{$ymqmyyeuycgmigyo}\137\x6d\x61\156\141\x67\x65\x5f\x76\151\x65\167\163"), [$this, "\x71\145\x6f\167\143\165\143\165\x6f\141\x71\x79\161\167\x75\x77"])->cecaguuoecmccuse($this->ygyygikyocoymgaw("{$ymqmyyeuycgmigyo}\x5f\155\141\x6e\x61\x67\x65\137\x63\x6f\154\165\x6d\156\x73"), [$this, "\x6b\x67\x6f\147\x6f\x63\x63\141\151\155\x75\x79\167\x73\x6f\171"])->cecaguuoecmccuse($this->ygyygikyocoymgaw("{$ymqmyyeuycgmigyo}\x5f\155\x61\x6e\141\147\x65\x5f\163\x6f\162\x74\141\x62\154\x65\x5f\x63\157\x6c\x75\x6d\x6e\x73"), [$this, "\170\x65\153\143\x77\x65\x63\147\x75\171\x6b\x6d\155\147\147\157"])->cecaguuoecmccuse($this->ygyygikyocoymgaw("{$ymqmyyeuycgmigyo}\137\162\x6f\x77\x5f\141\x63\164\x69\x6f\156\163"), [$this, "\x6d\x63\x61\147\147\155\x75\171\x61\x6d\x67\163\157\155\141\141"], 10, 4)->cecaguuoecmccuse($this->ygyygikyocoymgaw("{$ymqmyyeuycgmigyo}\x5f\x62\x75\x6c\x6b\x5f\141\143\x74\x69\x6f\x6e\x73"), [$this, "\x6d\163\171\171\x65\x73\x77\145\157\x6f\167\x63\x75\165\157\165"], 10, 2)->cecaguuoecmccuse($this->ygyygikyocoymgaw("\x6f\162\155\x5f\166\151\145\x77\x5f\163\x68\x6f\x77\137{$ymqmyyeuycgmigyo}\x5f\x74\141\142\x73"), [$this, "\x75\x75\x79\x6d\153\151\171\147\151\165\141\151\x79\x65\x6d\x61"], 10, 2)->cecaguuoecmccuse($this->ygyygikyocoymgaw("{$ymqmyyeuycgmigyo}\137\x6d\x61\156\x61\147\145\x5f\x63\165\x73\164\157\155\x5f\143\157\154\x75\155\156"), [$this, "\x71\x65\x77\x6d\x6b\165\167\x79\x6d\161\153\153\x63\155\161\155"], 10, 5)->cecaguuoecmccuse($this->ygyygikyocoymgaw("{$ymqmyyeuycgmigyo}\137\155\141\x6e\x61\x67\x65\x5f\145\x64\151\x74\137\146\151\145\x6c\144\x5f\163\x68\x6f\x77"), [$this, "\146\x61\x63\161\x77\161\x6d\x67\x63\x6f\x67\167\x73\157\x6b\x77"], 10, 4)->cecaguuoecmccuse($this->ygyygikyocoymgaw("{$ymqmyyeuycgmigyo}\137\155\141\x6e\x61\x67\x65\x5f\145\144\151\164\137\146\151\x65\154\144\137\x76\141\x6c\x75\x65"), [$this, "\x6f\145\161\163\151\145\x6d\x61\x77\157\147\167\x77\x79\x6d\157"], 10, 4);
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
        uykwmucgoywoesui:
        goto gqywcowiigceimaw;
        goto iisieuaeyiqwckou;
        eygqeoiskweuiuqi:
        $vkkeimekwwkyiyyc = null;
        goto uykwmucgoywoesui;
        bgoygegmogcmeaou:
        if (is_array($vkkeimekwwkyiyyc)) {
            goto eyuoecmogqwkmomi;
        }
        goto awgaewwsskasueke;
        iamooqskosymqsmw:
        eyuoecmogqwkmomi:
        goto wwccoougkywoaoui;
        iaygaasesyymwgss:
        quewwumogiocouii:
        goto iwosouqsesoqcska;
        ioacywuoyuskqmwy:
        if (!$vkkeimekwwkyiyyc) {
            goto geugsymgsiuuqccg;
        }
        goto bgoygegmogcmeaou;
        awgaewwsskasueke:
        $vkkeimekwwkyiyyc = $aiowsaccomcoikus;
        goto cgmcwkmmcmmkiooc;
        kiqmcymowosckmii:
        gqywcowiigceimaw:
        goto iaygaasesyymwgss;
        cgmcwkmmcmmkiooc:
        goto quewwumogiocouii;
        goto iamooqskosymqsmw;
        oskwkeaemiqcaqkc:
        $vkkeimekwwkyiyyc = $aiowsaccomcoikus;
        goto kiqmcymowosckmii;
        iacwyogogoccmwsg:
        return $vkkeimekwwkyiyyc;
        goto wqmwcuggcisqieao;
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
        wqmwcuggcisqieao:
    }
    
    public function mwikyscisascoeea() : ?int
    {
        return $this->id;
    }
    public function ckgyegkusmuymimo()
    {
        goto yyyyawaqcowsgqcs;
        ykuqeyogsasokqis:
        qsyqcokomswykyso:
        goto mqaamqyoywyekiko;
        coskmuqsawiaeyqg:
        yueosioyegouuwqo:
        goto umccwcqwkoiaakmu;
        iuooqassskiyeemo:
        if ($aokagokqyuysuksm = $icwicymcioeyeyek[self::ID]) {
            goto issgmmkcgesyeoas;
        }
        goto cquyuwsisgqscemm;
        mqaamqyoywyekiko:
        
        $gmwiogsuisuoiwqu = $this->getPaginateItems($siykeiywomwwuoiw, [self::PAGE => $icwicymcioeyeyek[self::PAGE]]);
        goto smkakiyekkqoggao;
        gcsosokicycukoyc:
        
        $oammesyieqmwuwyi[] = $siykeiywomwwuoiw->find($aokagokqyuysuksm);
        goto seqammocqkyswaim;
        zggweikegkcgkmma:
        goto yeiicwscguyokwyu;
        goto yisoawmmammassqk;
        wammkmaqucqagqww:
        if (!$siykeiywomwwuoiw) {
            goto yueosioyegouuwqo;
        }
        goto iuooqassskiyeemo;
        cquyuwsisgqscemm:
        $qwcmueausqgiwigy = $icwicymcioeyeyek[self::SEARCH];
        goto imykswegcuekqwio;
        smkakiyekkqoggao:
        $oammesyieqmwuwyi = $gmwiogsuisuoiwqu[self::ITEMS];
        goto zggweikegkcgkmma;
        wyyowcsciaqkuiuq:
        $this->uaggqsoeugksgooc(true, $qeiakyocuggicwsy);
        goto imquwacukaswoyka;
        sikmqkecsiyciaei:
        $qeiakyocuggicwsy = [];
        goto wmycwscioqackeig;
        imykswegcuekqwio:
        if (!$qwcmueausqgiwigy) {
            goto qsyqcokomswykyso;
        }
        goto eokikuciuqkyauum;
        yyyyawaqcowsgqcs:
        $icwicymcioeyeyek = ManipulateFormat::omaawkkwwyesqwcc(ManipulateServer::ayueggmoqeeukqmq(), ["\x69\144" => false, "\160\x61\147\145" => 1, "\x61\x72\147\x73" => [], "\151\164\145\155\163" => [], "\163\145\141\x72\143\150" => null, "\155\x61\162\x6b\x75\x70" => false, "\x74\x65\x6d\x70\x6c\141\164\145\137\164\x79\x70\145" => "\141\x6a\x61\x78\137\x72\145\x73\165\x6c\x74"]);
        goto usmagcaocwiugqum;
        usmagcaocwiugqum:
        $oammesyieqmwuwyi = [];
        goto sikmqkecsiyciaei;
        wmycwscioqackeig:
        $siykeiywomwwuoiw = $this->gqaysymikgeawkqa();
        goto wammkmaqucqagqww;
        yisoawmmammassqk:
        issgmmkcgesyeoas:
        goto gcsosokicycukoyc;
        seqammocqkyswaim:
        yeiicwscguyokwyu:
        goto coskmuqsawiaeyqg;
        umccwcqwkoiaakmu:
        foreach ($oammesyieqmwuwyi as $igqsaukqcqscimok) {
            goto swkeiggkawwgewuw;
            aacaoywsaqscgyua:
            $sogksuscggsicmac = ["\x49\x44" => $aokagokqyuysuksm, self::TEXT => $pkyyagewkiyckmwy, self::VALUE => $aokagokqyuysuksm];
            goto miigqygoawqmkkqm;
            yywwaaiicukuwcao:
            $sogksuscggsicmac["\x6d\141\162\153\x75\160"] = $this->iuygowkemiiwqmiw($icwicymcioeyeyek["\164\x65\155\160\154\141\164\145\137\x74\x79\160\145"], ["\x49\104" => $aokagokqyuysuksm, self::TITLE => $pkyyagewkiyckmwy, "\157\x62\152\145\143\164\137\x74\x79\160\x65" => $this->oyeskqayoscwciem()->giiayuqckuiecosm()], ["\143\154\x61\x73\163" => self::class]);
            goto eykiuqsamowqykam;
            gaiaucesmcqgqwac:
            $ceiwsaacewygcsqg = $this->kumuygiiqswoyasy();
            goto kuimgwmkcgcoecko;
            ywqouwqomiqwoquu:
            $qeiakyocuggicwsy[$aokagokqyuysuksm] = $sogksuscggsicmac;
            goto qcwkymcgqacaaywc;
            wmcucyuieqgqisis:
            mssaawaiaimogowg:
            goto qwsmiaegmcwuskwi;
            eykiuqsamowqykam:
            ccyiggckemwgooco:
            goto ywqouwqomiqwoquu;
            swkeiggkawwgewuw:
            if (!$igqsaukqcqscimok) {
                goto umamqqwcoewcigew;
            }
            goto gaiaucesmcqgqwac;
            qcwkymcgqacaaywc:
            umamqqwcoewcigew:
            goto wmcucyuieqgqisis;
            kuimgwmkcgcoecko:
            $aokagokqyuysuksm = $igqsaukqcqscimok->{$ceiwsaacewygcsqg};
            goto oaskqsoyesmmeaew;
            oaskqsoyesmmeaew:
            $pkyyagewkiyckmwy = $this->uikgwcuascgeissw($igqsaukqcqscimok);
            goto aacaoywsaqscgyua;
            miigqygoawqmkkqm:
            if (!$icwicymcioeyeyek["\x6d\141\x72\153\x75\160"]) {
                goto ccyiggckemwgooco;
            }
            goto yywwaaiicukuwcao;
            qwsmiaegmcwuskwi:
        }
        goto ekgkiioywougquka;
        ekgkiioywougquka:
        giuoqsumkimmuaya:
        goto wyyowcsciaqkuiuq;
        eokikuciuqkyauum:
        $siykeiywomwwuoiw = $this->kqewyqqqiyiouaou([$this->ukqioecasimmeygm() => [self::OPERATOR => self::LIKE, self::VALUE => "\x25{$qwcmueausqgiwigy}\45"]], $siykeiywomwwuoiw);
        goto ykuqeyogsasokqis;
        imquwacukaswoyka:
    }
    
    public function aeggeuqycwawueqy(Builder $siykeiywomwwuoiw, array $ywmkwiwkosakssii = []) : array
    {
        try {
            goto gsggsmmwcmkgyyss;
            yicaqocukqoauqgc:
            if (!$ywmkwiwkosakssii["\x66\151\x6c\164\145\162\x5f\x76\141\154\x75\x65"]) {
                goto qwgkwokcyocqiyee;
            }
            goto kmcygqkmwcgwamkw;
            sueeqeioeiwkscao:
            
            $uuwmqqqiwksuaise = $ymiyawysimukkoso->total();
            goto mmesoisgqucowwms;
            muimagegskoisckc:
            smksoismyouykeoa:
            goto yicaqocukqoauqgc;
            yweucowesgsoewyc:
            
            $ymiyawysimukkoso = $siykeiywomwwuoiw->paginate($ywmkwiwkosakssii[self::PER_PAGE] ?: 10, $ywmkwiwkosakssii[self::COLUMNS] ?: ["\52"], $ywmkwiwkosakssii["\160\x61\x67\x65\137\x6e\141\x6d\x65"] ?: self::PAGE, $ywmkwiwkosakssii[self::PAGE] ?: 1);
            goto ikygockuuyimmmwk;
            gysmigyakgaakeoy:
            qwgkwokcyocqiyee:
            goto sueeqeioeiwkscao;
            uwmcugkwqwcuqqsq:
            if ($oammesyieqmwuwyi) {
                goto smksoismyouykeoa;
            }
            goto cycasoiysmksuwqk;
            ikygockuuyimmmwk:
            
            $oammesyieqmwuwyi = $ymiyawysimukkoso->items();
            goto uwmcugkwqwcuqqsq;
            kmcygqkmwcgwamkw:
            $oammesyieqmwuwyi = $this->cwgkcyyaymmsomqa($oammesyieqmwuwyi);
            goto gysmigyakgaakeoy;
            cycasoiysmksuwqk:
            $oammesyieqmwuwyi = ManipulateArray::get($ywmkwiwkosakssii, self::DEFAULT);
            goto muimagegskoisckc;
            mmesoisgqucowwms:
            
            $qcugmkuyweqqyggk = $ymiyawysimukkoso->lastPage();
            goto uieuouugckwokske;
            uieuouugckwokske:
            
            $weyoqgcesqgeusiu = $ymiyawysimukkoso->perPage();
            goto seaiwkkgyyegiyug;
            gsggsmmwcmkgyyss:
            $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\160\x61\147\x65\x5f\x6e\141\155\x65" => self::PAGE, self::PAGE => 1, self::DEFAULT => [], self::COLUMNS => ["\52"], "\146\151\x6c\164\145\162\137\166\x61\154\165\x65" => true, self::PER_PAGE => ManipulateSetting::omkaowmygoqwsywq()]);
            goto yweucowesgsoewyc;
            seaiwkkgyyegiyug:
        } catch (Exception $wgaoewqkwgomoaai) {
            goto maeccckgcsaaumkw;
            maeccckgcsaaumkw:
            $oammesyieqmwuwyi = [];
            goto gcoeaokkagaaeuse;
            kcqueaewmayywqeq:
            $weyoqgcesqgeusiu = 0;
            goto uagsgicwwcakecwq;
            uagsgicwwcakecwq:
            $qcugmkuyweqqyggk = 0;
            goto qocgmocqauaaekii;
            gcoeaokkagaaeuse:
            $uuwmqqqiwksuaise = 0;
            goto kcqueaewmayywqeq;
            qocgmocqauaaekii:
        }
        return $this->oosqweumiyeayasy($oammesyieqmwuwyi, $uuwmqqqiwksuaise, $qcugmkuyweqqyggk, $weyoqgcesqgeusiu);
    }
    
    public function oosqweumiyeayasy($oammesyieqmwuwyi = [], $uuwmqqqiwksuaise = 1, $ocqawgquwsqioses = 1, $weyoqgcesqgeusiu = 10) : array
    {
        return ["\160\141\147\151\156\x61\164\151\157\x6e" => ["\164\x6f\x74\x61\x6c" => $uuwmqqqiwksuaise, "\x70\x61\147\x65\163" => $ocqawgquwsqioses, self::PER_PAGE => $weyoqgcesqgeusiu], self::ITEMS => $oammesyieqmwuwyi];
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
        gokwmwmaumiwscua:
        if (!is_bool($vkkeimekwwkyiyyc)) {
            goto uauuoyigkmqoasaq;
        }
        goto eauiumeeyckucuyc;
        qugsgsscqyikugyc:
        kmwwqgiacsoksgcy:
        goto gskaqcgccswmuqsy;
        saycoceqywiekqsi:
        return $oyuikeusicgqgwak;
        goto sqaowueaequoigsa;
        ysiwoiqiaosqoikm:
        $vkkeimekwwkyiyyc = $this->timestamps;
        goto eieiwacwqkgsewai;
        eauiumeeyckucuyc:
        $vkkeimekwwkyiyyc = [self::CREATED_AT, self::UPDATED_AT];
        goto gigiwwouakeekoim;
        uccuykggugcmiyam:
        uaiiuywoakccusge:
        goto saycoceqywiekqsi;
        gskaqcgccswmuqsy:
        uekueeyqaackuwao:
        goto uccuykggugcmiyam;
        ykuycowuguumseuu:
        foreach ($vkkeimekwwkyiyyc as $yiuogaeewyockeak) {
            goto aemoyqueimayqcaw;
            woaoeyaowkuukkqm:
            switch ($yiuogaeewyockeak) {
                case self::CREATED_AT:
                    $aaqqkgyougeiueyq->gswweykyogmsyawy(__("\x43\162\x65\x61\164\145\144\40\x41\x74", PR__CMN__FOUNDATION));
                    goto ugqucegcucyyayga;
                case self::UPDATED_AT:
                    $aaqqkgyougeiueyq->gswweykyogmsyawy(__("\125\x70\144\141\164\x65\x64\40\x41\164", PR__CMN__FOUNDATION));
                    goto ugqucegcucyyayga;
            }
            goto mmqkuymyyycywmqu;
            mmqkuymyyycywmqu:
            sequgigsgkqaikmq:
            goto iaockwkwaiqgeuyu;
            oeeasouoaaoaaemm:
            $oyuikeusicgqgwak[] = $aaqqkgyougeiueyq;
            goto icmsyimgycuocisu;
            icmsyimgycuocisu:
            akieeaeqiwugimie:
            goto wassyiqsqasaoiau;
            aemoyqueimayqcaw:
            $aaqqkgyougeiueyq = self::ceqawoymcymsaeqo($yiuogaeewyockeak)->jyumyyugiwwiqomk(5000);
            goto woaoeyaowkuukkqm;
            iaockwkwaiqgeuyu:
            ugqucegcucyyayga:
            goto oeeasouoaaoaaemm;
            wassyiqsqasaoiau:
        }
        goto qugsgsscqyikugyc;
        gigiwwouakeekoim:
        uauuoyigkmqoasaq:
        goto esuuweysgwuwcuue;
        esuuweysgwuwcuue:
        if (!is_array($vkkeimekwwkyiyyc)) {
            goto uekueeyqaackuwao;
        }
        goto ykuycowuguumseuu;
        eieiwacwqkgsewai:
        if (!$vkkeimekwwkyiyyc) {
            goto uaiiuywoakccusge;
        }
        goto gokwmwmaumiwscua;
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
            isaouwiaamimceeg:
            if (!($ywmkwiwkosakssii instanceof View || is_subclass_of($ywmkwiwkosakssii, View::class))) {
                goto emqmqkeygumaasam;
            }
            goto kcwyeqmysgqkoqcm;
            csskguekqcwcmocu:
            scccyaiaggeasgqg:
            goto mmusoowesqcmuqew;
            mmusoowesqcmuqew:
            yqkyoaiwcyqeaqwu:
            goto wkwkeicwosmkcygc;
            wamgcqkaieummksu:
            emqmqkeygumaasam:
            goto mwgaaiaswusakkaq;
            kcwyeqmysgqkoqcm:
            $this->ecmiqywsauuoccwo($qqomumygoacsmsie, $ywmkwiwkosakssii);
            goto wamgcqkaieummksu;
            emgssiqceagusgyg:
            yuyiqaawwgaywgqo:
            goto ysusaysykymegguk;
            oeosugomyqyekmuq:
            kkogaccoqmsmmkmo:
            goto emgssiqceagusgyg;
            ysusaysykymegguk:
            if (!$ewgsciccscsweqik) {
                goto aosasoogesueygak;
            }
            goto yskswskmsgoouyco;
            oaciskoioaecgwee:
            aosasoogesueygak:
            goto csskguekqcwcmocu;
            gooqkmwgsmseuiwq:
            switch ($qqomumygoacsmsie) {
                case "\151\x6e\x64\x65\170":
                    goto ysaumykuimqigeqa;
                    icawmkaswkmwicsa:
                    goto yuyiqaawwgaywgqo;
                    goto imsgusweocmiyygi;
                    ysaumykuimqigeqa:
                    $ewgsciccscsweqik = new Index($this, $ywmkwiwkosakssii);
                    goto oegaywiwywuyksaq;
                    uiowwckamqucksim:
                    $this->icyamyikwyaaoqya("\141\144\x64", $yyksucsgisomecgg->uikgwcuascgeissw("\141\x64\x64\x5f\x6e\145\x77\137\x69\x74\x65\155"), ["\150\162\145\x66" => $ikugycsiyegwoiay]);
                    goto wscikmsmwmocsqeu;
                    oegaywiwywuyksaq:
                    $ikugycsiyegwoiay = $this->acsiseaeysswwqkw();
                    goto eyskqaccgeomqmyw;
                    eyskqaccgeomqmyw:
                    if (!$ikugycsiyegwoiay) {
                        goto qmiqicgscsuoyeqo;
                    }
                    goto uiowwckamqucksim;
                    wscikmsmwmocsqeu:
                    qmiqicgscsuoyeqo:
                    goto icawmkaswkmwicsa;
                    imsgusweocmiyygi:
                case "\x65\144\x69\164":
                case "\x61\x64\144":
                    goto igckskemqkqueukg;
                    qmuikumqukcyaeqa:
                    if (!$eaoumsseceiowgsk instanceof Form) {
                        goto qwueqigcisoogaec;
                    }
                    goto keyiswqkmqqquosw;
                    kuymgsewmeoimeuq:
                    csoeisssoumqqeoa:
                    goto gimsiyauegmikyka;
                    keyiswqkmqqquosw:
                    $eaoumsseceiowgsk->asumqyigwsqmyeoc($this);
                    goto imaiuooqwwokwemw;
                    kisuswmyqsocukgk:
                    goto yuyiqaawwgaywgqo;
                    goto wisaekiyyweeemuy;
                    pssquaaiioygwqoq:
                    $this->aygiawwcgymgyaya();
                    goto ucugeysomcyceyos;
                    ucugeysomcyceyos:
                    $uieukiskgwkouwyi = true;
                    goto momgmqemgcasyuqq;
                    mioqycmmeucswoms:
                    kmeekqukcecuscye:
                    goto mioaoacqueiyueak;
                    imaiuooqwwokwemw:
                    qwueqigcisoogaec:
                    goto mioqycmmeucswoms;
                    wgmeyycmqioioaqc:
                    if (!in_array($suaemuyiacqyugsm, [$ymqmyyeuycgmigyo, "\145\x64\x69\x74\x5f{$ymqmyyeuycgmigyo}", "\x61\x64\144\x5f{$ymqmyyeuycgmigyo}", "\x73\x68\157\x77\137{$ymqmyyeuycgmigyo}"])) {
                        goto weuueokkumksgaeo;
                    }
                    goto ykiyuciecskusaae;
                    mioaoacqueiyueak:
                    if (!$this->ugmceccgwaaaigiy()) {
                        goto csoeisssoumqqeoa;
                    }
                    goto oaseseemoaqcgqeu;
                    igckskemqkqueukg:
                    $ymqmyyeuycgmigyo = $yyksucsgisomecgg->aakmagwggmkoiiyu();
                    goto wgmeyycmqioioaqc;
                    momgmqemgcasyuqq:
                    $eaoumsseceiowgsk = Form::symcgieuakksimmu($ymqmyyeuycgmigyo);
                    goto qmuikumqukcyaeqa;
                    gimsiyauegmikyka:
                    weuueokkumksgaeo:
                    goto kisuswmyqsocukgk;
                    oaseseemoaqcgqeu:
                    $ewgsciccscsweqik = new Edit($this, $ywmkwiwkosakssii);
                    goto kuymgsewmeoimeuq;
                    ykiyuciecskusaae:
                    if ($uieukiskgwkouwyi) {
                        goto kmeekqukcecuscye;
                    }
                    goto pssquaaiioygwqoq;
                    wisaekiyyweeemuy:
                case "\163\150\157\x77":
                    $ewgsciccscsweqik = new Show($this, $ywmkwiwkosakssii);
                    goto yuyiqaawwgaywgqo;
                default:
                    $ewgsciccscsweqik = new View($this, $ywmkwiwkosakssii);
                    goto yuyiqaawwgaywgqo;
            }
            goto oeosugomyqyekmuq;
            asueqykmkoaimguq:
            $ewgsciccscsweqik = null;
            goto iyocimuyeemkaaso;
            iyocimuyeemkaaso:
            if (is_array($ywmkwiwkosakssii)) {
                goto meegaqaesckqmyec;
            }
            goto isaouwiaamimceeg;
            mwgaaiaswusakkaq:
            goto scccyaiaggeasgqg;
            goto ugowqoisymsioeye;
            yskswskmsgoouyco:
            $this->ecmiqywsauuoccwo($qqomumygoacsmsie, $ewgsciccscsweqik);
            goto oaciskoioaecgwee;
            ugowqoisymsioeye:
            meegaqaesckqmyec:
            goto gooqkmwgsmseuiwq;
            wkwkeicwosmkcygc:
        }
        goto giiucsyqgcooaima;
        qkiqquymecyoouki:
        $suaemuyiacqyugsm = ManipulateServer::get(self::PAGE);
        goto iqukigoyiqgcggue;
        kygcymkakucoeock:
        global $orm_model;
        goto qkiqquymecyoouki;
        osoqssymqqoqcuky:
        $uieukiskgwkouwyi = false;
        goto qcywwqceiqogcoyo;
        qoameasiqwaqgmca:
        eqmauwqqowsiwaue:
        goto osoqssymqqoqcuky;
        uugekiumuwemyuyc:
        $orm_model = $this;
        goto qoameasiqwaqgmca;
        yuoyeeuqqaockyqw:
        
        if (ManipulateAjax::mcgoysmkqsqooceq()) {
            goto ugcyukgoaiiysymc;
        }
        goto kygcymkakucoeock;
        amkcomscieegkygc:
        if (!(strpos($suaemuyiacqyugsm, $yyksucsgisomecgg->aakmagwggmkoiiyu()) !== false)) {
            goto eqmauwqqowsiwaue;
        }
        goto uugekiumuwemyuyc;
        giiucsyqgcooaima:
        waycokyiesmqgqcg:
        goto awikkaqmmuqkukma;
        awikkaqmmuqkukma:
        ugcyukgoaiiysymc:
        goto uckeuuaqimqamuyc;
        uckeuuaqimqamuyc:
    }
    
    public function kssgsuewkcwgiksa() : array
    {
        return [];
    }
    
    public function hkwssiimkcysaiyo() : ?string
    {
        goto uqkqmseoeemyaqck;
        wsckacayikksiswo:
        return $qqomumygoacsmsie;
        goto qiawociayswicugw;
        cceyoumkiicaguio:
        $qqomumygoacsmsie = str_replace("\137{$ymqmyyeuycgmigyo}", '', ManipulateServer::get(self::PAGE));
        goto yayykakkyeoieicm;
        mmwqwowqcaseyyki:
        mieeugiewckceagc:
        goto wsckacayikksiswo;
        yuiouamaogkkqmck:
        $qqomumygoacsmsie = "\151\156\x64\x65\x78";
        goto mmwqwowqcaseyyki;
        uqkqmseoeemyaqck:
        $ymqmyyeuycgmigyo = $this->miwqiiqeegeqcwis();
        goto cceyoumkiicaguio;
        yayykakkyeoieicm:
        if (!($qqomumygoacsmsie === $ymqmyyeuycgmigyo)) {
            goto mieeugiewckceagc;
        }
        goto yuiouamaogkkqmck;
        qiawociayswicugw:
    }
    
    public function uqiykqoyaqymcues() : bool
    {
        return $this->hkwssiimkcysaiyo() == "\x65\144\x69\x74";
    }
    
    public function wkcuasmkgoscaiay() : bool
    {
        return $this->hkwssiimkcysaiyo() == "\x73\x68\157\x77";
    }
    
    public function wmwguecgowcscues() : bool
    {
        return $this->hkwssiimkcysaiyo() == "\151\156\x64\x65\x78";
    }
    
    public final function aygiawwcgymgyaya() : ?array
    {
        goto yoaewquyogiimyic;
        cicegcoqyuoggiwy:
        return $this->ugmceccgwaaaigiy();
        goto ugcwqacogqoswyse;
        wmcmqmmcweecqmsw:
        $qssskwiqeumgkago = $this->oyeskqayoscwciem()->aeosueemgsygqese();
        goto aakoeuuosouyeemc;
        aakoeuuosouyeemc:
        foreach ($ikgwqyuyckaewsow as $uusmaiomayssaecw => $uiewakwqscemywuo) {
            goto cksoeiwawiygyiyg;
            wmwgeoequuwwwywa:
            $uiewakwqscemywuo[self::TYPE] = $sqeykgyoooqysmca;
            goto uqugcugeomqakcqo;
            ceusyscosamyaiws:
            if (in_array($eewwgseqamqiouyq, ["\x62\157\x6f\154\145\x61\x6e", "\x74\x69\156\171\151\156\x74"])) {
                goto kqkymieyyqaoeymw;
            }
            goto gysmmooawoeggaow;
            icouowaoycuuisqe:
            gkoyqgogsukuowqi:
            goto ocmwuquguuqigose;
            egikqoaqqegawugu:
            qimomesqamyyicmo:
            goto caaygouikgagsssc;
            eoeiaccouaymakgm:
            goto gqyyccceswkqcmaa;
            goto owaimkmgemoqewmm;
            cieumoqayigkoocy:
            $sqeykgyoooqysmca = "\x74\145\170\x74";
            goto yggciikgkomgeqsc;
            gkwuewqmqeswqukg:
            $sqeykgyoooqysmca = "\144\x61\164\x65";
            goto sagemooicmgceiug;
            iqwsqykoueqyyomy:
            sgikkoswwyesqomo:
            goto ggaucuaykyuiikem;
            yuqisiwgqacgmsym:
            mquyemuqcqeassqc:
            goto wickgagwgqqsomum;
            ueqsiwuwumoqgsck:
            $eewwgseqamqiouyq = $aaqqkgyougeiueyq->gueasuouwqysmomu();
            goto iikgiaocummweiga;
            acsigwcaesyyoiie:
            if (in_array($eewwgseqamqiouyq, ["\144\141\x74\145", "\144\x61\164\x65\x74\151\155\145"])) {
                goto augqweqsqioesmim;
            }
            goto aqaaqeucgoegeeuk;
            ksawwekgswywwuwm:
            $sqeykgyoooqysmca = "\142\163\x73\x65\x6c\x65\x63\164";
            goto yuqisiwgqacgmsym;
            uqcwyyiykmwygeau:
            goto qcceyyqiuiqcyqqm;
            goto yeiokcoikcysyimu;
            ysoqeuugiuswykyu:
            $sqeykgyoooqysmca = "\x63\150\x65\x63\153\x62\157\170";
            goto usmuqsuwuueogimc;
            usmuqsuwuueogimc:
            gqyyccceswkqcmaa:
            goto koiiaewwicsckseu;
            wycmcqaauqkgegau:
            $sqeykgyoooqysmca = "\x62\163\163\145\x6c\145\143\x74";
            goto qcweoyigoaeacsow;
            wcsysckgigeykkwy:
            if ($sqeykgyoooqysmca) {
                goto weiaigyyigkusucy;
            }
            goto scgmwokeuqwiekkk;
            ocmwuquguuqigose:
            switch ($eewwgseqamqiouyq) {
                case "\x65\x6e\165\x6d":
                    goto gwksywaoeowkesei;
                    gwksywaoeowkesei:
                    if (!$aiowsaccomcoikus instanceof BSSelect) {
                        goto amgsicqmemeuuaem;
                    }
                    goto sgkwaiuukkaqyqki;
                    sgkwaiuukkaqyqki:
                    $aiowsaccomcoikus->acauweqyyugwisqc($aaqqkgyougeiueyq->gkwkqmwweiawigae());
                    goto emagssesowicacoa;
                    emagssesowicacoa:
                    amgsicqmemeuuaem:
                    goto cauqmacqkssciwyq;
                    cauqmacqkssciwyq:
                    goto bagkewioewygysea;
                    goto gusgywuaimwooawc;
                    gusgywuaimwooawc:
                case "\146\157\x72\x65\151\147\x6e":
                    goto acmgueaoaaweiqqu;
                    awaaowoqskgokwiy:
                    $aiowsaccomcoikus->wkqyoukciomqiyew()->oeewiaacscgyamai($aaqqkgyougeiueyq->uecyuoauykiqqkey());
                    goto uqiekawkwcegsumy;
                    uqiekawkwcegsumy:
                    uugwoygiyecgymgw:
                    goto kgikoagqwkuocesg;
                    kgikoagqwkuocesg:
                    goto bagkewioewygysea;
                    goto skaayekywasksoug;
                    acmgueaoaaweiqqu:
                    if (!$aiowsaccomcoikus instanceof BSSelect) {
                        goto uugwoygiyecgymgw;
                    }
                    goto awaaowoqskgokwiy;
                    skaayekywasksoug:
            }
            goto kmqusaiaiogecyiy;
            kmqusaiaiogecyiy:
            mgieeyuyuoeccaog:
            goto swckikycciugciqq;
            umcyeiusoakewyaa:
            sykuuisikqcwuaqu:
            goto ksawwekgswywwuwm;
            aqaaqeucgoegeeuk:
            if (!in_array($eewwgseqamqiouyq, ["\145\156\165\155"])) {
                goto kkacggiosquqagew;
            }
            goto wycmcqaauqkgegau;
            scgmwokeuqwiekkk:
            if ($aaqqkgyougeiueyq instanceof Foreign) {
                goto sykuuisikqcwuaqu;
            }
            goto ceusyscosamyaiws;
            iyceygqsmokgmams:
            goto aescssauecumgwso;
            goto wcekgciqeggiiwgk;
            qmoisuweiskkekca:
            if ($aiowsaccomcoikus) {
                goto gkoyqgogsukuowqi;
            }
            goto wywwieycqskuqcwc;
            ggaucuaykyuiikem:
            aayysiegiyweiyuu:
            goto egikqoaqqegawugu;
            iyaugygcsmqqqkmo:
            ssesmiwwmsayksum:
            goto cieumoqayigkoocy;
            uamuuwkyuqomqyuy:
            qcceyyqiuiqcyqqm:
            goto ekwuycsiuqwycqea;
            kkmwwqyesmkescyg:
            $sqeykgyoooqysmca = "\x74\145\x78\164\141\162\145\141";
            goto uamuuwkyuqomqyuy;
            gysmmooawoeggaow:
            if (in_array($eewwgseqamqiouyq, ["\x73\x74\162\x69\156\147", "\142\x69\147\151\x6e\x74"])) {
                goto ssesmiwwmsayksum;
            }
            goto iyikuwuweqigiuey;
            wickgagwgqqsomum:
            weiaigyyigkusucy:
            goto wmwgeoequuwwwywa;
            cksoeiwawiygyiyg:
            $aaqqkgyougeiueyq = ManipulateArray::get($qssskwiqeumgkago, $uusmaiomayssaecw);
            goto cyqokqcacysioeyc;
            wywwieycqskuqcwc:
            throw new UnexpectedValueException("{$uusmaiomayssaecw}\x20\x69\x73\x20\156\x6f\x74\x20\x61\40\x76\x61\x6c\x69\144\40\146\151\x65\x6c\x64\x2e");
            goto gwyseusuceuwwccu;
            gwyseusuceuwwccu:
            goto sgikkoswwyesqomo;
            goto icouowaoycuuisqe;
            wcekgciqeggiiwgk:
            augqweqsqioesmim:
            goto gkwuewqmqeswqukg;
            iikgiaocummweiga:
            $uiewakwqscemywuo = ManipulateFormat::omaawkkwwyesqwcc($uiewakwqscemywuo, $qqgeiaygkaoyccig);
            goto gsusqquicmukegcs;
            gsusqquicmukegcs:
            $sqeykgyoooqysmca = ManipulateArray::get($uiewakwqscemywuo, "\x74\171\x70\x65");
            goto wcsysckgigeykkwy;
            koiiaewwicsckseu:
            goto mquyemuqcqeassqc;
            goto umcyeiusoakewyaa;
            ekwuycsiuqwycqea:
            goto qkwckeqowgaokkuy;
            goto iyaugygcsmqqqkmo;
            yggciikgkomgeqsc:
            qkwckeqowgaokkuy:
            goto eoeiaccouaymakgm;
            iyikuwuweqigiuey:
            if (in_array($eewwgseqamqiouyq, ["\164\145\x78\x74"])) {
                goto cooeoemccqiyewks;
            }
            goto acsigwcaesyyoiie;
            sagemooicmgceiug:
            aescssauecumgwso:
            goto uqcwyyiykmwygeau;
            yeiokcoikcysyimu:
            cooeoemccqiyewks:
            goto kkmwwqyesmkescyg;
            cyqokqcacysioeyc:
            if (!$aaqqkgyougeiueyq instanceof Field) {
                goto aayysiegiyweiyuu;
            }
            goto akwwuuiykscgicuw;
            uqugcugeomqakcqo:
            $aiowsaccomcoikus = MetaBox::okmsgamiiemyesao($uiewakwqscemywuo);
            goto qmoisuweiskkekca;
            coogyackikgmecic:
            $this->qaqsggqyouammqgm($aiowsaccomcoikus);
            goto iqwsqykoueqyyomy;
            akwwuuiykscgicuw:
            $qqgeiaygkaoyccig = ["\x69\x64" => $uusmaiomayssaecw, "\x6e\x61\155\x65" => $aaqqkgyougeiueyq->qcgakseyaikigqco()];
            goto ueqsiwuwumoqgsck;
            swckikycciugciqq:
            bagkewioewygysea:
            goto coogyackikgmecic;
            qcweoyigoaeacsow:
            kkacggiosquqagew:
            goto iyceygqsmokgmams;
            owaimkmgemoqewmm:
            kqkymieyyqaoeymw:
            goto ysoqeuugiuswykyu;
            caaygouikgagsssc:
        }
        goto qsmoiwqcuamyuwyu;
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
        cqaeiesyciakcagu:
        foreach ($qssskwiqeumgkago as $aiowsaccomcoikus) {
            goto sqmiymiemeegegic;
            csggsqueaqmwgwkk:
            wycuyiukyceccaow:
            goto sescaagayikiggyq;
            csqakuuiyywassgw:
            $wkkweuacukumqmya[$aiowsaccomcoikus->mwikyscisascoeea()] = $aiowsaccomcoikus->qcgakseyaikigqco();
            goto esqiocgueosoksyq;
            esqiocgueosoksyq:
            meseuuacmkuowqau:
            goto csggsqueaqmwgwkk;
            sqmiymiemeegegic:
            if (!($aiowsaccomcoikus instanceof Field && $aiowsaccomcoikus->uwaascqoguwkwiaw())) {
                goto meseuuacmkuowqau;
            }
            goto csqakuuiyywassgw;
            sescaagayikiggyq:
        }
        goto acisycocoswkekik;
        aaiymmkqmocgakei:
        wwwggoemicgwwasy:
        goto kucqcqeesaiacekm;
        acisycocoswkekik:
        saekesoeysauokkq:
        goto aaiymmkqmocgakei;
        egmocemomockemia:
        $qssskwiqeumgkago = $this->oyeskqayoscwciem()->aeosueemgsygqese();
        goto gemwkqocygssmequ;
        gemwkqocygssmequ:
        if (!($qssskwiqeumgkago && is_array($qssskwiqeumgkago))) {
            goto wwwggoemicgwwasy;
        }
        goto cqaeiesyciakcagu;
        kucqcqeesaiacekm:
        return $wkkweuacukumqmya;
        goto cewyaqiqmmwmauce;
        cewyaqiqmmwmauce:
    }
    
    public function qeowcucuoaqyqwuw($umwgoasiowmqcumw) : array
    {
        goto amoygaweoeymiuiy;
        okemsmmeceoeaswi:
        return $umwgoasiowmqcumw;
        goto ossyqogewmggmaoc;
        amoygaweoeymiuiy:
        $momcykaoccoymeig = 1;
        goto kcomueysiyyqagus;
        ksgwgcguemcescqg:
        $umwgoasiowmqcumw = ["\141\154\x6c" => ["\164\x69\164\x6c\x65" => __("\x41\154\x6c", PR__CMN__FOUNDATION), "\x63\157\x75\156\164" => array_sum(array_map(function ($mokouoooiwsmcmiu) {
            return $mokouoooiwsmcmiu["\x63\x6f\x75\x6e\x74"];
        }, $umwgoasiowmqcumw))]] + $umwgoasiowmqcumw;
        goto kiwiesucugwoiuum;
        kcomueysiyyqagus:
        $ymaogssqccumcyqa = $this->aakiaoueckoiyoew();
        goto ckuagmyqkyoeeaeu;
        cmagycousakeeaei:
        scyqmcegwikkoesw:
        goto eekeksysqeuoskoo;
        eekeksysqeuoskoo:
        moimkkmkooeiyisc:
        goto okemsmmeceoeaswi;
        kiwiesucugwoiuum:
        foreach ($umwgoasiowmqcumw as $qqomumygoacsmsie => $icwicymcioeyeyek) {
            goto qscqkykqskqmisgw;
            igscwycsqsckmcuq:
            $geecqyososceumsk = DecoratorQuery::yqymaqmqiqmmmsoo([self::ORM_FILTER_BY => $ymaogssqccumcyqa, self::ORM_FILTER_VALUE => $qqomumygoacsmsie], $geecqyososceumsk);
            goto wmcaecgwmmwuuqsq;
            ycskuioouwwemgke:
            $yeacayasgueouoqc = $scsyuucsumiwkqqc ? $scsyuucsumiwkqqc === $qqomumygoacsmsie : $momcykaoccoymeig === 1;
            goto syeeegeygawwqiuu;
            uwsmcsiiisuocgwg:
            $geecqyososceumsk = ManipulateServer::ekcymmyqoceukosc(true);
            goto suaymckwwgmugsaa;
            uekkkmwciocmosgg:
            goto sccqekuwywiisami;
            goto ecqeqquikuomwgsu;
            wmcaecgwmmwuuqsq:
            sccqekuwywiisami:
            goto ycskuioouwwemgke;
            ysssquieawyysiyc:
            ManipulateArray::unset($cqcsaaswaciweiie, $qqomumygoacsmsie);
            goto yomoeykcqyukscmi;
            wsqoskqgyooqeyga:
            $geecqyososceumsk = DecoratorQuery::oiamiqcuyksmmomm([self::ORM_FILTER_BY, self::ORM_FILTER_VALUE], $geecqyososceumsk);
            goto uekkkmwciocmosgg;
            ecqeqquikuomwgsu:
            ciwggusyecgskagy:
            goto igscwycsqsckmcuq;
            yomoeykcqyukscmi:
            goto qgqasacusgwmoegy;
            goto swmgucaogosuueug;
            syeeegeygawwqiuu:
            $umwgoasiowmqcumw[$qqomumygoacsmsie] = ManipulateHTML::qgsekwygcgawekeq("\x61", ["\150\x72\145\146" => $geecqyososceumsk, "\x63\154\141\x73\163" => "\x6f\x72\x6d\x2d\146\x69\154\164\x65\x72\x2d\154\x69\x6e\x6b" . ($yeacayasgueouoqc ? "\x20\x63\x75\x72\162\145\156\164" : '')], true, sprintf("\x25\163\x20\x28\x25\x73\x29", $meqocwsecsywiiqs, ManipulateHTML::gmqyuaqwgiayskei($this->wusgwkaycokeckqs($gaeqamemwmwsyukm))));
            goto iuieskocqoqkkwus;
            isiqkeyciyqgkayu:
            qgqasacusgwmoegy:
            goto gwayeyymscmgwqkg;
            gwayeyymscmgwqkg:
            ycweseaccsomkioa:
            goto caoikoqmyeqsqqqe;
            suaymckwwgmugsaa:
            if ($qqomumygoacsmsie !== "\x61\x6c\154") {
                goto ciwggusyecgskagy;
            }
            goto wsqoskqgyooqeyga;
            qscqkykqskqmisgw:
            $meqocwsecsywiiqs = ManipulateArray::get($icwicymcioeyeyek, "\164\151\x74\154\145", false);
            goto ksqgwiceoomkuuiy;
            iuieskocqoqkkwus:
            $momcykaoccoymeig++;
            goto isiqkeyciyqgkayu;
            gkoiyaagwgycysim:
            if ($meqocwsecsywiiqs) {
                goto eokcuuwqaomkooag;
            }
            goto ysssquieawyysiyc;
            ksqgwiceoomkuuiy:
            $gaeqamemwmwsyukm = ManipulateArray::get($icwicymcioeyeyek, "\143\157\x75\x6e\x74", 0);
            goto gkoiyaagwgycysim;
            swmgucaogosuueug:
            eokcuuwqaomkooag:
            goto uwsmcsiiisuocgwg;
            caoikoqmyeqsqqqe:
        }
        goto cmagycousakeeaei;
        cqwgmwqiakmgyuee:
        if (!(is_array($umwgoasiowmqcumw) && $umwgoasiowmqcumw)) {
            goto moimkkmkooeiyisc;
        }
        goto ksgwgcguemcescqg;
        ckuagmyqkyoeeaeu:
        $scsyuucsumiwkqqc = ManipulateServer::get("\157\x72\155\137\146\151\154\164\x65\162\x5f\166\x61\x6c\x75\x65");
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
        ekgsawcuswowmosm:
        return $ceiwsaacewygcsqg;
        goto uiwswesymogiwsgg;
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
        uiwswesymogiwsgg:
    }
    
    public function gqaysymikgeawkqa() : ?Builder
    {
        goto kgeggsckmgcgwcqm;
        qimieogaimwmukmu:
        try {
            goto wkcwuemioaiyouek;
            wkcwuemioaiyouek:
            $aasascamegmwqmqk = $this->miwqiiqeegeqcwis();
            goto usgmimcwygsmcioa;
            qosckaqceoumcasm:
            euogcyyayioyyiyg:
            goto gmcqkoqwkiawaikw;
            qggiogeyowcoaiqy:
            if (!($siykeiywomwwuoiw && !$siykeiywomwwuoiw->exists())) {
                goto euogcyyayioyyiyg;
            }
            goto ekgcquiosyesyism;
            ekgcquiosyesyism:
            $siykeiywomwwuoiw = null;
            goto qosckaqceoumcasm;
            usgmimcwygsmcioa:
            
            $siykeiywomwwuoiw = $this->getConnection()->table($aasascamegmwqmqk);
            goto qggiogeyowcoaiqy;
            gmcqkoqwkiawaikw:
        } catch (Exception $wgaoewqkwgomoaai) {
            $this->saqqeqmcyyoeqici($this->kyacickkomkioeyu($wgaoewqkwgomoaai));
        }
        goto gmymycwymqkuiisi;
        gmymycwymqkuiisi:
        return $siykeiywomwwuoiw;
        goto wogokmgkgkumqcws;
        kgeggsckmgcgwcqm:
        $siykeiywomwwuoiw = null;
        goto qimieogaimwmukmu;
        wogokmgkgkumqcws:
    }
    
    public function feccsgmuogywweio($mksyucucyswaukig)
    {
        goto cycyaqqawmwiywwe;
        iuaommmyqoecmuss:
        $aokagokqyuysuksm = $mksyucucyswaukig;
        goto ikeyoyoigsuouokm;
        eqieeecackceeweg:
        goto cokacyaayuueyuuu;
        goto ygywkqgioiscmuie;
        cycyaqqawmwiywwe:
        if (is_numeric($mksyucucyswaukig)) {
            goto koawwmccgquqqmwa;
        }
        goto ckowiuagwmsqmiqc;
        ikeyoyoigsuouokm:
        cokacyaayuueyuuu:
        goto eecgougegqassgyq;
        ckowiuagwmsqmiqc:
        $aokagokqyuysuksm = ManipulateArray::get($mksyucucyswaukig, $this->kumuygiiqswoyasy());
        goto eqieeecackceeweg;
        eecgougegqassgyq:
        return $this->cyyiiykmaeuqqgok($aokagokqyuysuksm);
        goto cuwkqgemkmuuegkc;
        ygywkqgioiscmuie:
        koawwmccgquqqmwa:
        goto iuaommmyqoecmuss;
        cuwkqgemkmuuegkc:
    }
    
    public function getConnection() : Database
    {
        goto wemmseueskwkcwou;
        wemmseueskwkcwou:
        $ymqmyyeuycgmigyo = $this->miwqiiqeegeqcwis();
        goto cceakqgoysacqwmc;
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
        cceakqgoysacqwmc:
        $mgcmmwqwguicsews = Database::symcgieuakksimmu($ymqmyyeuycgmigyo);
        goto scaimkkukmgoeaya;
        ceeqguaoysyaasey:
        $mgcmmwqwguicsews->wcweamocuicuusky("\156\x61\x6d\145", $ymqmyyeuycgmigyo);
        goto ekmqouqsgsaukeiq;
        ewooakeuigcyuemu:
    }
    public function ckgmycmaukqgkosk()
    {
        goto kacgiqwewyeeyyam;
        kacgiqwewyeeyyam:
        $yyksucsgisomecgg = $this->oyeskqayoscwciem();
        goto qwogeocemuaaasiw;
        goimywgsweeqsewo:
        $yyksucsgisomecgg->iqoguoscqueomqsk(ORM::symcgieuakksimmu()->homgcsoocssgwgym($yyksucsgisomecgg->ggqekkkocygywmoy(), $yyksucsgisomecgg->cwueseysoqeewkao(), $yyksucsgisomecgg->iemucaoqaisiwise()));
        goto uomwseyiqckeewgo;
        cgqkqmiekaageyka:
        wceiuqaeywmgscww:
        goto goimywgsweeqsewo;
        ywmuoigomwwigqea:
        $yyksucsgisomecgg->usuqmwksoeaayaig(ManipulateString::kwuyaykukcmaqggg(ManipulateString::mkwcwqkqeqkqyggc(self::uqggkiomyiceyooa())));
        goto cgqkqmiekaageyka;
        qwogeocemuaaasiw:
        if ($yyksucsgisomecgg->masyeqmaiuqwosei()) {
            goto wceiuqaeywmgscww;
        }
        goto ywmuoigomwwigqea;
        uomwseyiqckeewgo:
    }
    
    public function oyeskqayoscwciem() : Register
    {
        goto kmocamaieycogugg;
        iuieyqacggsykgus:
        $this->register = new Register();
        goto wamkaouokmyoyuqu;
        kmocamaieycogugg:
        if ($this->register) {
            goto cqyiukmuqceicqwa;
        }
        goto iuieyqacggsykgus;
        wamkaouokmyoyuqu:
        cqyiukmuqceicqwa:
        goto eywcgeccsmquugsw;
        eywcgeccsmquugsw:
        return $this->register;
        goto wwskeewecyukygeg;
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
        uauqmaeueukkmuwa:
        if (!$yskommoiekkwiggo instanceof Edit) {
            goto wmqegaqemgiggsce;
        }
        goto gkyguugwwoaqoigy;
        coaysoeouasaekie:
        wmqegaqemgiggsce:
        goto ykymogaqkgaiiiyi;
        wggeggkumkwaaesu:
        $yskommoiekkwiggo = $this->cgswceaawqgeskua("\145\144\x69\x74");
        goto uauqmaeueukkmuwa;
        cqeceeagmysoyoqg:
        $yciaosuiyeieceug = false;
        goto wggeggkumkwaaesu;
        gkyguugwwoaqoigy:
        
        if (!DecoratorUser::scmcyesmmikkucie($this->oyeskqayoscwciem()->gwaeeegmgggawiyi("\x65\x64\151\x74\137\151\164\x65\x6d\163"))) {
            goto sickakeesgcgwisw;
        }
        goto kmikwoqwigwuyqae;
        ykymogaqkgaiiiyi:
        return $yciaosuiyeieceug;
        goto uusyaguomkqeakkm;
        kmikwoqwigwuyqae:
        $yciaosuiyeieceug = $yskommoiekkwiggo;
        goto qcuywygiosoqycaa;
        qcuywygiosoqycaa:
        sickakeesgcgwisw:
        goto coaysoeouasaekie;
        uusyaguomkqeakkm:
    }
    
    public function qqakqoekigkcmyek()
    {
        goto qsyyeoosgigiiequ;
        aeekgeqawgsmgiqw:
        return $yciaosuiyeieceug;
        goto imgagmqusgiqissi;
        qikmwaessamuueoe:
        qoigaauuokyusmgk:
        goto aeekgeqawgsmgiqw;
        yegkgccwomcgkumi:
        $yciaosuiyeieceug = $kmsymkkmiwykeyqi;
        goto qikmwaessamuueoe;
        qsyyeoosgigiiequ:
        $yciaosuiyeieceug = false;
        goto jweeyemwqyqmyuys;
        jweeyemwqyqmyuys:
        $kmsymkkmiwykeyqi = $this->cgswceaawqgeskua("\x73\x68\x6f\167");
        goto mgiwqumikeuieocg;
        mgiwqumikeuieocg:
        if (!$kmsymkkmiwykeyqi instanceof Show) {
            goto qoigaauuokyusmgk;
        }
        goto yegkgccwomcgkumi;
        imgagmqusgiqissi:
    }
    
    public function mukyysqkgaimcygs() : bool
    {
        $gkswkiicccswksiq = $this->oyeskqayoscwciem()->gwaeeegmgggawiyi("\144\145\154\x65\x74\x65\x5f\x69\x74\145\x6d\x73");
        return $this->gqigeuumsosmamqs() && DecoratorUser::scmcyesmmikkucie($gkswkiicccswksiq);
    }
    
    public function comogmawyoiquwis() : ?string
    {
        goto cesaaiguwciccysi;
        kqsyqwwscwoswsgk:
        $iwywmkygwewiamwm = $qqomumygoacsmsie->qmgcisuuikgmqcsu();
        goto yemuiyokmqoqckwu;
        qocmmyskykeuwsae:
        return $iwywmkygwewiamwm;
        goto kywmiquiiwmwgooy;
        cesaaiguwciccysi:
        $iwywmkygwewiamwm = null;
        goto wskccugoccagaqcw;
        wskccugoccagaqcw:
        $qqomumygoacsmsie = $this->cgswceaawqgeskua("\x69\x6e\144\x65\x78");
        goto sqyceswygksmmqqa;
        sqyceswygksmmqqa:
        if (!$qqomumygoacsmsie instanceof Index) {
            goto scaciowogmayswms;
        }
        goto kqsyqwwscwoswsgk;
        yemuiyokmqoqckwu:
        scaciowogmayswms:
        goto qocmmyskykeuwsae;
        kywmiquiiwmwgooy:
    }
    
    public function yyykkcyiksewsoqy($kqokimuosyuyyucg = 0) : ?string
    {
        goto yquysamwsoyyqcya;
        qsycguggqkgywgaq:
        if (!($qqomumygoacsmsie = $this->ggwyugcggywuwcse())) {
            goto syquiiogeymgicuy;
        }
        goto wsyeqyekimescwkq;
        yquysamwsoyyqcya:
        $iwywmkygwewiamwm = null;
        goto qsycguggqkgywgaq;
        iiyamaquicwswcyu:
        return $iwywmkygwewiamwm;
        goto iiyggeuemwuwqiey;
        gyceukwoyaasuwik:
        syquiiogeymgicuy:
        goto iiyamaquicwswcyu;
        wsyeqyekimescwkq:
        $iwywmkygwewiamwm = DecoratorQuery::yqymaqmqiqmmmsoo([$this->kumuygiiqswoyasy() => $kqokimuosyuyyucg], $qqomumygoacsmsie->qmgcisuuikgmqcsu());
        goto gyceukwoyaasuwik;
        iiyggeuemwuwqiey:
    }
    
    public function uesweuocqoywoyms($kqokimuosyuyyucg = 0) : ?string
    {
        goto agokkauammisaqke;
        ggoyigsoyccmscum:
        if (!($qqomumygoacsmsie = $this->qqakqoekigkcmyek())) {
            goto omeookmiomoieeee;
        }
        goto aigeoggkowgwwwqg;
        cyyecekuwygaqwcy:
        return $iwywmkygwewiamwm;
        goto muqeeocooyiosouk;
        aigeoggkowgwwwqg:
        $iwywmkygwewiamwm = DecoratorQuery::yqymaqmqiqmmmsoo([$this->kumuygiiqswoyasy() => $kqokimuosyuyyucg], $qqomumygoacsmsie->qmgcisuuikgmqcsu());
        goto pscqogmyseiwuqye;
        agokkauammisaqke:
        $iwywmkygwewiamwm = null;
        goto ggoyigsoyccmscum;
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
        ysiuiuqawkaaamus:
        $iwywmkygwewiamwm = DecoratorQuery::yqymaqmqiqmmmsoo(["\157\x72\x6d\x2d\141\x63\164\151\x6f\x6e" => "\144\145\154\x65\164\x65", $ceiwsaacewygcsqg => $kqokimuosyuyyucg], $iwywmkygwewiamwm);
        goto qooykiaywemimcke;
        ggoquyyseekiwukq:
        wcagqkquasswioos:
        goto dwciioycickkwawq;
        keiciayiyqsemsys:
        goto ogywsgmqcgioaoqk;
        goto ggoquyyseekiwukq;
        eiekcqosmyqmwqag:
        $ceiwsaacewygcsqg = $this->kumuygiiqswoyasy();
        goto mgscyaiwekksacco;
        mgscyaiwekksacco:
        if ($qqomumygoacsmsie->qcsgmgoukiouuscw()) {
            goto wcagqkquasswioos;
        }
        goto sykwygmouoikuyws;
        qooykiaywemimcke:
        ayggiggmcqckqwom:
        goto okceyucmoigyokyy;
        ggkgseywksemuogc:
        $qqomumygoacsmsie = $this->cgswceaawqgeskua("\151\x6e\144\x65\x78");
        goto iyeswqeqcsmsoueq;
        msuyygiskkumokec:
        if (!$kqokimuosyuyyucg) {
            goto wiiyageyqowkmmko;
        }
        goto ggkgseywksemuogc;
        sykwygmouoikuyws:
        $iwywmkygwewiamwm = $qqomumygoacsmsie->qmgcisuuikgmqcsu();
        goto keiciayiyqsemsys;
        yoociieskmuucgms:
        ogywsgmqcgioaoqk:
        goto ysiuiuqawkaaamus;
        okceyucmoigyokyy:
        wiiyageyqowkmmko:
        goto uecmkggsueeiyawk;
        mowauiysyiciqaaa:
        $iwywmkygwewiamwm = null;
        goto msuyygiskkumokec;
        dwciioycickkwawq:
        $iwywmkygwewiamwm = ManipulateServer::ekcymmyqoceukosc(true);
        goto yoociieskmuucgms;
        iyeswqeqcsmsoueq:
        if (!($qqomumygoacsmsie instanceof Index && $this->mukyysqkgaimcygs())) {
            goto ayggiggmcqckqwom;
        }
        goto eiekcqosmyqmwqag;
        iyakeemwaiqeueme:
    }
    
    public function setCreatedAt($eqgoocgaqwqcimie)
    {
        $this->{static::CREATED_AT} = current_time("\x6d\171\x73\x71\x6c");
    }
    
    public function setUpdatedAt($eqgoocgaqwqcimie)
    {
        $this->{static::UPDATED_AT} = current_time("\x6d\171\x73\x71\154");
    }
    
    public function acsiseaeysswwqkw() : ?string
    {
        goto jgaoqcmiqagoiuko;
        iyekgiaayeasoggw:
        ouuuacyewgmocwsc:
        goto cwsgieeaugwciiwu;
        cwsgieeaugwciiwu:
        return $iwywmkygwewiamwm;
        goto wiigoqowismumcsm;
        oycikycyewimcaew:
        if (!($ecmiqywsauuoccwo instanceof View && DecoratorUser::scmcyesmmikkucie($gkswkiicccswksiq))) {
            goto ouuuacyewgmocwsc;
        }
        goto sqokyowsuawgkusy;
        jgaoqcmiqagoiuko:
        $iwywmkygwewiamwm = null;
        goto iekesyeicomwcuas;
        iekesyeicomwcuas:
        $gkswkiicccswksiq = $this->oyeskqayoscwciem()->gwaeeegmgggawiyi("\143\x72\145\x61\164\x65\137\151\164\x65\155\x73");
        goto wimggeysyugwwkca;
        sqokyowsuawgkusy:
        $iwywmkygwewiamwm = $ecmiqywsauuoccwo->qmgcisuuikgmqcsu();
        goto iyekgiaayeasoggw;
        wimggeysyugwwkca:
        $ecmiqywsauuoccwo = $this->cgswceaawqgeskua("\141\144\x64");
        goto oycikycyewimcaew;
        wiigoqowismumcsm:
    }
    
    public function sgcuwcowgwimgsgk($aokagokqyuysuksm, $cwwowqyuwccuykom = false)
    {
        goto waiqmywasoeggkce;
        isssemmuiiaewiwi:
        try {
            goto caskqicqwmyuugku;
            akcqguucucewaqws:
            aikukgimkamkgwsu:
            goto akycayowsciesmug;
            caskqicqwmyuugku:
            if (!$this->ueaumcyiwwkeueag($aokagokqyuysuksm, $mksyucucyswaukig)) {
                goto ukcukckucsyaggmw;
            }
            goto assyuumuuuocycyy;
            ykcymsoikgqeaukw:
            $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\157\x62\152\x65\143\x74\x5f\144\x65\154\x65\x74\x65\144", self::class), $aokagokqyuysuksm);
            goto akcqguucucewaqws;
            wgcuewwyieoqaoek:
            mwkcmgksoyycumos:
            goto wksssmewgogkacei;
            assyuumuuuocycyy:
            
            if ($mksyucucyswaukig->delete()) {
                goto mwkcmgksoyycumos;
            }
            goto oiueawimuggcqgky;
            wksssmewgogkacei:
            $kigowwqauiumummw = $mksyucucyswaukig;
            goto ykcymsoikgqeaukw;
            oiueawimuggcqgky:
            $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\146\141\x69\154\145\x64\137\144\145\x6c\145\x74\145\137\157\142\x6a\x65\143\x74", self::class), $aokagokqyuysuksm);
            goto qqiwcikkcgmmakow;
            qqiwcikkcgmmakow:
            goto aikukgimkamkgwsu;
            goto wgcuewwyieoqaoek;
            akycayowsciesmug:
            ukcukckucsyaggmw:
            goto ogqaueuweieisowc;
            ogqaueuweieisowc:
        } catch (Exception $wgaoewqkwgomoaai) {
            $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x66\141\151\x6c\145\x64\137\144\145\154\x65\164\145\137\x6f\x62\x6a\x65\143\164", self::class), $aokagokqyuysuksm);
        }
        goto oiguycsiaweycioe;
        ggcayqaayysyqmia:
        $kigowwqauiumummw = false;
        goto miiegqgiuamasook;
        ueeowyociayoygsa:
        qwqwwywiiuqayaca:
        goto isumwussqyqawwmy;
        miiegqgiuamasook:
        if (!$mksyucucyswaukig instanceof Model) {
            goto qwqwwywiiuqayaca;
        }
        goto eskmkooukwwieuke;
        waiqmywasoeggkce:
        $mksyucucyswaukig = $this->cyyiiykmaeuqqgok($aokagokqyuysuksm);
        goto ggcayqaayysyqmia;
        muaigwwqgsgowgkk:
        if (!$yciaosuiyeieceug) {
            goto yaokowamwsaggege;
        }
        goto imgyqyeaoawqscae;
        eskmkooukwwieuke:
        $yciaosuiyeieceug = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\143\x61\156\137\x64\145\154\145\164\x65\x5f\157\142\152\x65\x63\164", self::class), true, $mksyucucyswaukig, $cwwowqyuwccuykom);
        goto muaigwwqgsgowgkk;
        imgyqyeaoawqscae:
        $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\142\x65\146\157\162\145\x5f\144\x65\154\x65\x74\145\x5f\x6f\x62\152\145\143\x74", self::class), $mksyucucyswaukig, $aokagokqyuysuksm);
        goto isssemmuiiaewiwi;
        oiguycsiaweycioe:
        yaokowamwsaggege:
        goto ueeowyociayoygsa;
        isumwussqyqawwmy:
        return $kigowwqauiumummw;
        goto ksaimkacqesiguyg;
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
        euuoiciaiieoqyws:
        return $ueeagokqmgisgauy;
        goto wcmksyiisiciasko;
        oegcoaeyokkgoqyg:
        $this->validationErrors = [];
        goto euuoiciaiieoqyws;
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
        ggqqwysyuqiwksgm:
        if (!$this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\157\162\155\137\x70\x65\x72\x73\x69\163\x74\x5f\x6f\162\137\165\x70\x64\x61\164\145\137\166\141\x6c\151\x64\141\164\x69\x6f\x6e"), $kuuugksiksqcaaaa, $icwicymcioeyeyek, $this)) {
            goto ziggykossqqayaki;
        }
        goto wguccgmciesyocmi;
        coqycqiqgwkgkymo:
        $ceiwsaacewygcsqg = $this->kumuygiiqswoyasy();
        goto qcmakskemmcgaeyg;
        ekwsguueioyegqkc:
        $iggwcmkgmicmouyu = true;
        goto ooceggceowgoacyu;
        ekcwasmkccgmogmy:
        $mksyucucyswaukig = null;
        goto ekwsguueioyegqkc;
        wguccgmciesyocmi:
        try {
            goto aiociqsiiwguaywy;
            gwkumgocycceogce:
            ukkmusemcqayowoa:
            goto swkysimqcqkikmgy;
            aiociqsiiwguaywy:
            $aokagokqyuysuksm = (int) ManipulateArray::get($icwicymcioeyeyek, $ceiwsaacewygcsqg);
            goto isomygcucicwccgy;
            yqaacqqyisoewkqq:
            $this->scmmymqkoyckgkam($mksyucucyswaukig);
            goto mseimosiimuuceoa;
            wouekamwmcuguaoa:
            goto ukkmusemcqayowoa;
            goto iougqueaywwucoko;
            cwyauqoosqaoaoki:
            $mksyucucyswaukig = $this->ckcicmwwiccamyqk($this, $mksyucucyswaukig, $icwicymcioeyeyek);
            goto wiciqigmosmkkmwk;
            cecaekugyecciwcg:
            $mksyucucyswaukig = null;
            goto wyoqmwcsuewswiua;
            someqooawckycwao:
            $iggwcmkgmicmouyu = false;
            goto ymwckeawsukyukqs;
            wsmkoikacqsiweuw:
            $kuuugksiksqcaaaa = $this->gkieuyoqcusoksmg($icwicymcioeyeyek);
            goto gaikqsuyumumsesg;
            ymwckeawsukyukqs:
            $mksyucucyswaukig = $this->cyyiiykmaeuqqgok($aokagokqyuysuksm);
            goto gosaiqsaqksagqsg;
            wyoqmwcsuewswiua:
            goto koueosuswmucsaec;
            goto gggkwgcemqeckcse;
            isomygcucicwccgy:
            if ($aokagokqyuysuksm) {
                goto acuyqioeqaoeskya;
            }
            goto wcaeyoeeuiqqgqou;
            uwiaeuuiaimugqys:
            $egkyssmuqcwaciya = self::uqggkiomyiceyooa();
            goto eyyamwsogeqwamug;
            ckmycmakimaeygcu:
            
            if ($mksyucucyswaukig->save()) {
                goto ugoeueisekcsquug;
            }
            goto cecaekugyecciwcg;
            wcaeyoeeuiqqgqou:
            $iggwcmkgmicmouyu = true;
            goto wsmkoikacqsiweuw;
            mseimosiimuuceoa:
            koueosuswmucsaec:
            goto scaoisaaceiaweoe;
            eyyamwsogeqwamug:
            $mksyucucyswaukig = new $egkyssmuqcwaciya();
            goto oqccquoqqkkaqksk;
            ayamqyqegiuausko:
            $kigowwqauiumummw = true;
            goto aqcuimcoqmsiygwk;
            aqcuimcoqmsiygwk:
            $this->qiwiemuiqiugqqqg($mksyucucyswaukig, $icwicymcioeyeyek);
            goto yqaacqqyisoewkqq;
            gaikqsuyumumsesg:
            if (!$kuuugksiksqcaaaa) {
                goto igkeawygswqouuym;
            }
            goto uwiaeuuiaimugqys;
            oqccquoqqkkaqksk:
            igkeawygswqouuym:
            goto wouekamwmcuguaoa;
            gosaiqsaqksagqsg:
            $this->iasywwkguyauiywu($mksyucucyswaukig, $icwicymcioeyeyek);
            goto wuuucygsmqmsiyoi;
            gggkwgcemqeckcse:
            ugoeueisekcsquug:
            goto ayamqyqegiuausko;
            wuuucygsmqmsiyoi:
            $kuuugksiksqcaaaa = $this->gkieuyoqcusoksmg($icwicymcioeyeyek, $mksyucucyswaukig);
            goto gwkumgocycceogce;
            iougqueaywwucoko:
            acuyqioeqaoeskya:
            goto someqooawckycwao;
            swkysimqcqkikmgy:
            if (!($kuuugksiksqcaaaa && $mksyucucyswaukig instanceof Model)) {
                goto wyqmackmyaikcggs;
            }
            goto cwyauqoosqaoaoki;
            scaoisaaceiaweoe:
            wyqmackmyaikcggs:
            goto mcgcqaiwmkewmwue;
            wiciqigmosmkkmwk:
            $mksyucucyswaukig = $this->qmqogusoaqeygewm($mksyucucyswaukig);
            goto ckmycmakimaeygcu;
            mcgcqaiwmkewmwue:
        } catch (Exception $wgaoewqkwgomoaai) {
            goto gecywkyeskagueqm;
            oqkcuegyumswqekg:
            try {
                
                $mksyucucyswaukig->delete();
            } catch (Exception $wgaoewqkwgomoaai) {
            }
            goto wcgoiisqmmawuiag;
            wcgoiisqmmawuiag:
            sswmueweogqkqumq:
            goto ewiwaeckgqaiwgio;
            yckkwcimmakkieos:
            if (!$kigowwqauiumummw) {
                goto qscmokiskqyuswqo;
            }
            goto ekwmcssqowkcoyci;
            gecywkyeskagueqm:
            $this->kmsyisgakgwscyey($this->kyacickkomkioeyu($wgaoewqkwgomoaai));
            goto yckkwcimmakkieos;
            qmwmasuoyuwmcigw:
            $kigowwqauiumummw = false;
            goto guackgkaeswkcaoq;
            guackgkaeswkcaoq:
            qscmokiskqyuswqo:
            goto wyoouquciqoosuim;
            ewiwaeckgqaiwgio:
            $mksyucucyswaukig = null;
            goto qmwmasuoyuwmcigw;
            ekwmcssqowkcoyci:
            if (!$iggwcmkgmicmouyu) {
                goto sswmueweogqkqumq;
            }
            goto oqkcuegyumswqekg;
            wyoouquciqoosuim:
        }
        goto qmkmuwomcwygkysi;
        iaiooeockccgaaiq:
        sooqqqougsgcumko:
        goto aaeuuccoyyuqkouc;
        gwmauwgkiomyggmu:
        $kuuugksiksqcaaaa = true;
        goto syaqwysmymkgkcuu;
        qcmakskemmcgaeyg:
        if (!$siykeiywomwwuoiw) {
            goto sooqqqougsgcumko;
        }
        goto msayswiykqokmuqa;
        aaeuuccoyyuqkouc:
        return ["\157\142\x6a\145\143\164" => $mksyucucyswaukig, $ceiwsaacewygcsqg => ManipulateArray::get($mksyucucyswaukig, $ceiwsaacewygcsqg), self::ERRORS => $this->skwiagoagiyswgay(), self::SUCCESS => $kigowwqauiumummw];
        goto skoscsikiaakokqe;
        qmkmuwomcwygkysi:
        ziggykossqqayaki:
        goto iaiooeockccgaaiq;
        ooceggceowgoacyu:
        $kigowwqauiumummw = false;
        goto gwmauwgkiomyggmu;
        syaqwysmymkgkcuu:
        $siykeiywomwwuoiw = $this->gqaysymikgeawkqa();
        goto coqycqiqgwkgkymo;
        msayswiykqokmuqa:
        if ($cwwowqyuwccuykom) {
            goto augyqmcwawmsykme;
        }
        goto yeacwagosugscqcg;
        aigseumaammwaqck:
        augyqmcwawmsykme:
        goto ggqqwysyuqiwksgm;
        yeacwagosugscqcg:
        $kuuugksiksqcaaaa = $this->kuuugksiksqcaaaa($icwicymcioeyeyek);
        goto aigseumaammwaqck;
        skoscsikiaakokqe:
    }
    
    public function scmmymqkoyckgkam($mksyucucyswaukig)
    {
    }
    
    public function iysseyicgouwysgk($mksyucucyswaukig) : ?string
    {
        return '';
    }
    
    public function mayuaaqmsqeyayyg($mksyucucyswaukig, $qqomumygoacsmsie = "\x73\x68\157\x77") : ?string
    {
        goto skkqqcysscikmmik;
        ywiugkwcqkomgucy:
        yqisgseiimwmoeee:
        goto ekoeysiuqeggaqku;
        oewsoauskqoqmiqa:
        $mksyucucyswaukig = $this->akkkoiiymmamsauc($mksyucucyswaukig);
        goto sgaoyyoooykieusg;
        iyekyouiiwcsewgy:
        switch ($qqomumygoacsmsie) {
            case "\x73\x68\157\x77":
                $iwywmkygwewiamwm = $this->uesweuocqoywoyms($aokagokqyuysuksm);
                goto skysqikkawmaoase;
            case "\145\144\x69\164":
                $iwywmkygwewiamwm = $this->yyykkcyiksewsoqy($aokagokqyuysuksm);
                goto skysqikkawmaoase;
        }
        goto sqsksyaqsweqiyci;
        ugqeagqqaucqkcys:
        $pkyyagewkiyckmwy = $this->geyuyukmwaoksywa($iwywmkygwewiamwm, $pkyyagewkiyckmwy);
        goto ywiugkwcqkomgucy;
        cmogamaycywckuim:
        $pkyyagewkiyckmwy = $this->iysseyicgouwysgk($mksyucucyswaukig);
        goto oiissisqowcgwiyc;
        ekoeysiuqeggaqku:
        return $pkyyagewkiyckmwy;
        goto sqcoigaqqssykoui;
        yuqowmmcwscosmgy:
        $iwywmkygwewiamwm = $this->uesweuocqoywoyms($aokagokqyuysuksm);
        goto iyekyouiiwcsewgy;
        sgaoyyoooykieusg:
        icyuwesuyoimomqs:
        goto yywgsissmueymcmg;
        guwyuigmkeeqssgw:
        skysqikkawmaoase:
        goto cmogamaycywckuim;
        oiissisqowcgwiyc:
        if (!$iwywmkygwewiamwm) {
            goto yqisgseiimwmoeee;
        }
        goto ugqeagqqaucqkcys;
        yywgsissmueymcmg:
        $aokagokqyuysuksm = ManipulateArray::get($mksyucucyswaukig, $this->kumuygiiqswoyasy());
        goto yuqowmmcwscosmgy;
        sqsksyaqsweqiyci:
        ksksqwcyqoqgmgke:
        goto guwyuigmkeeqssgw;
        skkqqcysscikmmik:
        if (!is_numeric($mksyucucyswaukig)) {
            goto icyuwesuyoimomqs;
        }
        goto oewsoauskqoqmiqa;
        sqcoigaqqssykoui:
    }
    
    public function aouwuegyyugiwksc($qgoqiacsiccwoawi, $mksyucucyswaukig, $mugogceoccysackm = true) : ?string
    {
        goto uqkmkmmikmaqkgym;
        aeieoesqsyiqwkkk:
        iuageyamssqwqqyw:
        goto syiwwokguucmgsyy;
        siuwcesauyyweaky:
        if ($mugogceoccysackm) {
            goto mkmasewiiuocaekm;
        }
        goto wucomycmoigosose;
        omuskqikewygsuuu:
        $meywaqqsugaoeyys = $aaqqkgyougeiueyq->uecyuoauykiqqkey()::symcgieuakksimmu();
        goto kqumggcumkiygaya;
        smeocsiuyouseuqo:
        $pkyyagewkiyckmwy = '';
        goto yqmygsgkwmkeyqmm;
        uwiqeuqyaseimcyk:
        $pkyyagewkiyckmwy = $meywaqqsugaoeyys->mayuaaqmsqeyayyg($icwicymcioeyeyek);
        goto aeieoesqsyiqwkkk;
        yqmygsgkwmkeyqmm:
        if (!$aaqqkgyougeiueyq instanceof Foreign) {
            goto cwaqmauwsyugsieo;
        }
        goto omuskqikewygsuuu;
        yckkkceuiuiaucce:
        $icwicymcioeyeyek = $this->iscemaoqqckmkago($qgoqiacsiccwoawi, $mksyucucyswaukig);
        goto smeocsiuyouseuqo;
        wucomycmoigosose:
        $pkyyagewkiyckmwy = $meywaqqsugaoeyys->iysseyicgouwysgk($icwicymcioeyeyek);
        goto kmasgsycmswqoeii;
        kmasgsycmswqoeii:
        goto iuageyamssqwqqyw;
        goto ccikqgeseseueseo;
        ccikqgeseseueseo:
        mkmasewiiuocaekm:
        goto uwiqeuqyaseimcyk;
        syiwwokguucmgsyy:
        wkmsuekwweweqoys:
        goto mawqcoscmcqkoskk;
        wmiysuwsmawyogmu:
        return $pkyyagewkiyckmwy;
        goto uoieeoimcawgsacs;
        uqkmkmmikmaqkgym:
        $aaqqkgyougeiueyq = $this->oyeskqayoscwciem()->uqeoyqiwywwmsiew($qgoqiacsiccwoawi);
        goto yckkkceuiuiaucce;
        kqumggcumkiygaya:
        if (!$meywaqqsugaoeyys instanceof Model) {
            goto wkmsuekwweweqoys;
        }
        goto siuwcesauyyweaky;
        mawqcoscmcqkoskk:
        cwaqmauwsyugsieo:
        goto wmiysuwsmawyogmu;
        uoieeoimcawgsacs:
    }
    
    public function iscemaoqqckmkago($iceamweyeeiwiucs, $mksyucucyswaukig = null, $wkkweuacukumqmya = "\x2a", $uoomaookgsyciacm = [])
    {
        goto ysicqksgomomkoek;
        ccegsywqocccgegu:
        return $essikcmqiyqaqoaq;
        goto swqkyoemiswegyci;
        ysicqksgomomkoek:
        $essikcmqiyqaqoaq = [];
        goto ocgsiomyyckcausy;
        ocgsiomyyckcausy:
        try {
            goto qqyegacwyoqqqqwy;
            usiqksiiiqgokuaq:
            goto suykumskkmicioig;
            goto omaswaiucwamaywi;
            qiekksmyigmwmiws:
            if (!$meywaqqsugaoeyys instanceof Model) {
                goto gmckgcsamacayoiy;
            }
            goto qmqsgkwueccwgsqa;
            wasacacaowicmiyw:
            $aaqqkgyougeiueyq = $this->oyeskqayoscwciem()->uqeoyqiwywwmsiew($iceamweyeeiwiucs);
            goto oksouuguouqowuyq;
            ouokmaemueykkiqq:
            suykumskkmicioig:
            goto mgiykamgwsemmiio;
            omaswaiucwamaywi:
            csimcqggmigoacwk:
            goto ieewmicwgqaigeqi;
            eaisogogsygugsqi:
            $ayegqaqygsqsmews = $this->mgacegaoeamymmya($iceamweyeeiwiucs, $mksyucucyswaukig);
            goto usiqksiiiqgokuaq;
            cgkaoiyoqwmkaqck:
            iscaisuqmaikumko:
            goto suokacgwamyumagy;
            yqqwweuisgoskcwa:
            $ayegqaqygsqsmews = $this->kqewyqqqiyiouaou($uoomaookgsyciacm, $ayegqaqygsqsmews);
            goto uaaiuqickwysiqiy;
            mgiykamgwsemmiio:
            if (!$ayegqaqygsqsmews) {
                goto yuciwasueswewmqw;
            }
            goto iwkyewqeogaamiou;
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
            gmwcqkgsaesmsuea:
            $essikcmqiyqaqoaq = $ayegqaqygsqsmews->get($wkkweuacukumqmya)->sacmkccceuywoqsq();
            goto cgkaoiyoqwmkaqck;
            ieewmicwgqaigeqi:
            $ayegqaqygsqsmews = $iceamweyeeiwiucs;
            goto ouokmaemueykkiqq;
            okygssymuimommeg:
            $meywaqqsugaoeyys = $aaqqkgyougeiueyq->uecyuoauykiqqkey()::symcgieuakksimmu();
            goto qiekksmyigmwmiws;
            suokacgwamyumagy:
            yuciwasueswewmqw:
            goto gscckcagyggagway;
            iwkyewqeogaamiou:
            if (!$uoomaookgsyciacm) {
                goto sqkuwuwiceguscku;
            }
            goto yqqwweuisgoskcwa;
            iiceuymgyemuaciy:
            gmckgcsamacayoiy:
            goto qsgagomkgqcmscyu;
            iioauiogmamumiym:
            if (!$ayegqaqygsqsmews) {
                goto iscaisuqmaikumko;
            }
            goto gmwcqkgsaesmsuea;
            uaaiuqickwysiqiy:
            sqkuwuwiceguscku:
            goto iioauiogmamumiym;
            qmqsgkwueccwgsqa:
            return $meywaqqsugaoeyys->akkkoiiymmamsauc(ManipulateArray::get($mksyucucyswaukig, $iceamweyeeiwiucs), $meywaqqsugaoeyys->kumuygiiqswoyasy());
            goto iiceuymgyemuaciy;
            qsgagomkgqcmscyu:
            kysaoseimkmckcoc:
            goto eaisogogsygugsqi;
            gscckcagyggagway:
        } catch (Exception $wgaoewqkwgomoaai) {
        }
        goto ccegsywqocccgegu;
        swqkyoemiswegyci:
    }
    
    public function mgacegaoeamymmya($ymaogssqccumcyqa, $mksyucucyswaukig = null) : ?Relation
    {
        goto cuyaakuucgwmcuqq;
        ccqkugckigeckeqa:
        yuqiqaquoygggoqc:
        goto waaammoiumecaiys;
        yuccckoykmccwyce:
        goto eicuywagooikuusg;
        goto goqkegseiummeiak;
        wgeskeagymiuoigi:
        if ($aaqqkgyougeiueyq->iueigwuckeaswyuu()) {
            goto pmaiksascsegweci;
        }
        goto mcoyaaiggymgcsgq;
        waaammoiumecaiys:
        uwswkegomekswkus:
        goto qgmgmkeiemcqkyim;
        oskwwcgyuwkiuacu:
        $aokagokqyuysuksm = ManipulateArray::get($mksyucucyswaukig, $this->kumuygiiqswoyasy());
        goto qsecoiqswyiseake;
        ewcyigsymwuuogci:
        
        $ayegqaqygsqsmews = $mksyucucyswaukig->hasMany($egkyssmuqcwaciya);
        goto auauyoooouqkickk;
        mogomwoquuesmcec:
        iysiwmeymsoucaka:
        goto akiuyguwqaukuugs;
        kqkeomoaociyuoye:
        if ($aaqqkgyougeiueyq->eiyqqesoywqkegwu()) {
            goto iquykqikookaokgq;
        }
        goto kswkouussqmqsssy;
        coygueuwyguuciww:
        pmaiksascsegweci:
        goto ckmkeuakisiukage;
        uwmgacqaowuguiow:
        iwycgkausoseqmwu:
        goto cecamogauimuwoow;
        iuoqiecqaoosioey:
        iquykqikookaokgq:
        goto woqsaqwocioumoeu;
        uaiqqcsoksgukasg:
        okeecmwsuoikguuo:
        goto iqyqgqwwaaigmuou;
        oqoogougwwcqeimq:
        $aaqqkgyougeiueyq = $this->oyeskqayoscwciem()->uqeoyqiwywwmsiew($ymaogssqccumcyqa);
        goto eqiiqamuyewoowwy;
        gsgocqicesmaecse:
        if ($mksyucucyswaukig instanceof Model) {
            goto uwswkegomekswkus;
        }
        goto oskwwcgyuwkiuacu;
        qgcgucmskokqquwk:
        if ($aaqqkgyougeiueyq->iueigwuckeaswyuu()) {
            goto iwycgkausoseqmwu;
        }
        goto ismoiisskiwmmmiu;
        cwomucmeuqqucyge:
        $egkyssmuqcwaciya = $aaqqkgyougeiueyq->uecyuoauykiqqkey();
        goto eguukwmoyaaieuww;
        ygqqeqgiaasoimgs:
        aeoiiewygoiwuiii:
        goto gsiagogeoqwqekei;
        qgmgmkeiemcqkyim:
        if (!$mksyucucyswaukig instanceof Model) {
            goto iysiwmeymsoucaka;
        }
        goto oqoogougwwcqeimq;
        emomkqccysciiqya:
        if (!$aaqqkgyougeiueyq->ygswmewosceowmya()) {
            goto cwoaockwkoukuwae;
        }
        goto ywykuacciwwkwmmy;
        sqmgqacueqiiekay:
        goto ceesgeawumeqkcic;
        goto iuoqiecqaoosioey;
        egcsskmsysqiiikm:
        iiikyaquagwawkce:
        goto mogomwoquuesmcec;
        mcoyaaiggymgcsgq:
        
        $ayegqaqygsqsmews = $mksyucucyswaukig->belongsTo($egkyssmuqcwaciya);
        goto wcqyakkqcgmeqaag;
        qsecoiqswyiseake:
        if (!$mksyucucyswaukig) {
            goto yuqiqaquoygggoqc;
        }
        goto swkukukimeueycaq;
        cecamogauimuwoow:
        
        $ayegqaqygsqsmews = $mksyucucyswaukig->morphToMany($egkyssmuqcwaciya, $mgugyyocqwmeeuai);
        goto ygqqeqgiaasoimgs;
        iqyqgqwwaaigmuou:
        eicuywagooikuusg:
        goto sqmgqacueqiiekay;
        cuyaakuucgwmcuqq:
        $ayegqaqygsqsmews = null;
        goto gsgocqicesmaecse;
        kswkouussqmqsssy:
        if ($aaqqkgyougeiueyq->wmomygggskkoqess()) {
            goto ksyukmeagigokcgi;
        }
        goto emomkqccysciiqya;
        ugowokkqeoeugkqe:
        goto akkmaiaiamyaikqe;
        goto qmqumgawyyqqamoa;
        wcqyakkqcgmeqaag:
        goto okeecmwsuoikguuo;
        goto coygueuwyguuciww;
        ckmkeuakisiukage:
        
        $ayegqaqygsqsmews = $mksyucucyswaukig->hasOne($egkyssmuqcwaciya);
        goto uaiqqcsoksgukasg;
        swkukukimeueycaq:
        $mksyucucyswaukig = $this->cyyiiykmaeuqqgok($aokagokqyuysuksm);
        goto ccqkugckigeckeqa;
        ukyoyoqcyywgaywg:
        ceesgeawumeqkcic:
        goto ugowokkqeoeugkqe;
        goqkegseiummeiak:
        ksyukmeagigokcgi:
        goto wgeskeagymiuoigi;
        akiuyguwqaukuugs:
        return $ayegqaqygsqsmews;
        goto emiyocoiuwcucuwu;
        auauyoooouqkickk:
        akkmaiaiamyaikqe:
        goto egcsskmsysqiiikm;
        qmqumgawyyqqamoa:
        qiyiyuwmuoamwccs:
        goto ewcyigsymwuuogci;
        ywykuacciwwkwmmy:
        $mgugyyocqwmeeuai = $aaqqkgyougeiueyq->mwikyscisascoeea();
        goto qgcgucmskokqquwk;
        woqsaqwocioumoeu:
        
        $ayegqaqygsqsmews = $mksyucucyswaukig->belongsTo($egkyssmuqcwaciya);
        goto ukyoyoqcyywgaywg;
        gsiagogeoqwqekei:
        cwoaockwkoukuwae:
        goto yuccckoykmccwyce;
        ismoiisskiwmmmiu:
        
        $ayegqaqygsqsmews = $mksyucucyswaukig->morphedByMany($egkyssmuqcwaciya, $mgugyyocqwmeeuai);
        goto oikomikqcwikimkw;
        eguukwmoyaaieuww:
        if ($aaqqkgyougeiueyq->gumeeckcowwoyoci()) {
            goto qiyiyuwmuoamwccs;
        }
        goto kqkeomoaociyuoye;
        eqiiqamuyewoowwy:
        if (!$aaqqkgyougeiueyq instanceof Foreign) {
            goto iiikyaquagwawkce;
        }
        goto cwomucmeuqqucyge;
        oikomikqcwikimkw:
        goto aeoiiewygoiwuiii;
        goto uwmgacqaowuguiow;
        emiyocoiuwcucuwu:
    }
    
    public function qiwiemuiqiugqqqg(Model $mksyucucyswaukig, $icwicymcioeyeyek)
    {
        foreach ($icwicymcioeyeyek as $uusmaiomayssaecw => $qqswgiawgeaeoecu) {
            goto ssoooeigmwugyycm;
            uueyawewomkuiiwc:
            $csamwuowsigosqys = $kooyscwkscsogysg->cyyiiykmaeuqqgok($qqswgiawgeaeoecu);
            goto wqcquwuiqkqaoamo;
            eqkaikmaegscweqq:
            iqicwseckoykqowm:
            goto oukacgcyoiggqosq;
            awmyoukmqymausgu:
            wwigiswokyqkamsu:
            goto eicuoesagiuykmos;
            mkauomqacwwmyigy:
            gamuuauwykwgaegc:
            goto cmsgssaekakgcqmg;
            cssysqmcgcuwyyuu:
            if (!$miowmmgaiagcuyoo instanceof Model) {
                goto ummsowuaoeyusgoq;
            }
            goto aesgakksmyecsusi;
            usiiuuommggemcke:
            if (!is_array($qqswgiawgeaeoecu)) {
                goto kmwwamokwgagomye;
            }
            goto aagewueuesckuqke;
            yoeaiskyyqgqiwga:
            if ($aaqqkgyougeiueyq->iueigwuckeaswyuu()) {
                goto aegiwggkecgaiocs;
            }
            goto ioaeiakqkiuqymoq;
            yseacqgykcseamce:
            uceksuykgsckwwsu:
            goto xkgykmoskoqykakc;
            koaeayomowaiywam:
            if (!$aaqqkgyougeiueyq->eiyqqesoywqkegwu()) {
                goto wwigiswokyqkamsu;
            }
            goto ikwamukqumiokwkk;
            osawsyawkikquqya:
            kmwwamokwgagomye:
            goto cgoqqicyaiwasqme;
            ckagywkumgkaswyy:
            goto cuamsmyiamaicwou;
            goto oswgoyqaacoyqegu;
            yyousguikogqkecs:
            
            $csamwuowsigosqys->hasMany($swmgqkqyqcgemack)->save($mksyucucyswaukig);
            goto syggoyqwycmmcuck;
            qqowguycmsmuauyu:
            agoikageaeouqaqi:
            goto yseacqgykcseamce;
            oswgoyqaacoyqegu:
            awwwoikmmaisyisy:
            goto yoeaiskyyqgqiwga;
            cuqusekekewuseio:
            aqoyesawuayoeuag:
            goto qqowguycmsmuauyu;
            mawsaauyquacosus:
            $kooyscwkscsogysg = $egkyssmuqcwaciya::symcgieuakksimmu();
            goto cwkwkgkqasguwscg;
            aagewueuesckuqke:
            foreach ($qqswgiawgeaeoecu as $eqgoocgaqwqcimie) {
                goto csmmiwegweusuimi;
                imsougccawciqsuw:
                $msqyiyqkassmkgce = $kooyscwkscsogysg->ciqgsyoasskoiukm($eqgoocgaqwqcimie);
                goto syaegaiuaioeaocq;
                cwkouaeieiyiykim:
                amcqceoiqgmwisce:
                goto uawcmuiummigeqea;
                auqmeqswuuioemge:
                $msqyiyqkassmkgce = $this->ckcicmwwiccamyqk($kooyscwkscsogysg, $msqyiyqkassmkgce, $eqgoocgaqwqcimie);
                goto iiwcuqeosmwgogus;
                iiwcuqeosmwgogus:
                ikgwcgcgcaaaskig:
                goto uqsoseuiwgukywas;
                uqsoseuiwgukywas:
                if (!$msqyiyqkassmkgce) {
                    goto amcqceoiqgmwisce;
                }
                goto wgaggmmmgeumiouk;
                uawcmuiummigeqea:
                smeeigiqmommceye:
                goto qmmieiquoegeaqok;
                wgaggmmmgeumiouk:
                $myqeggyewswyoowe[] = $msqyiyqkassmkgce;
                goto cwkouaeieiyiykim;
                koceayskwssiisyi:
                $msqyiyqkassmkgce = $kooyscwkscsogysg->cyyiiykmaeuqqgok($aokagokqyuysuksm);
                goto auqmeqswuuioemge;
                csmmiwegweusuimi:
                if ($aokagokqyuysuksm = ManipulateArray::get($eqgoocgaqwqcimie, $gqkcqoaumsuwkqom, $qqswgiawgeaeoecu)) {
                    goto eemgoyuiauwuomcw;
                }
                goto imsougccawciqsuw;
                ckkecwwioeywccwa:
                eemgoyuiauwuomcw:
                goto koceayskwssiisyi;
                syaegaiuaioeaocq:
                goto ikgwcgcgcaaaskig;
                goto ckkecwwioeywccwa;
                qmmieiquoegeaqok:
            }
            goto mkauomqacwwmyigy;
            cmsgssaekakgcqmg:
            if (!$myqeggyewswyoowe) {
                goto smmgkqeacswimyas;
            }
            goto ckscysysmayieagk;
            guosgucaaeueacgu:
            ummsowuaoeyusgoq:
            goto wowakayqsywcaogm;
            ogwosuisocqykoma:
            cuamsmyiamaicwou:
            goto rwaeioueucocosgu;
            igewmkyikyaiamsq:
            
            $miowmmgaiagcuyoo->hasOne($accumooemgmowewu)->save($mksyucucyswaukig);
            goto guosgucaaeueacgu;
            oukacgcyoiggqosq:
            $myqeggyewswyoowe = [];
            goto usiiuuommggemcke;
            ioaeiakqkiuqymoq:
            $miowmmgaiagcuyoo = $kooyscwkscsogysg->cyyiiykmaeuqqgok($qqswgiawgeaeoecu);
            goto cssysqmcgcuwyyuu;
            syggoyqwycmmcuck:
            qquugwwesqswouyc:
            goto owwwikwqsyakweeq;
            owwwikwqsyakweeq:
            ewugkyumwuomukie:
            goto awmyoukmqymausgu;
            icasgckmuawkaksg:
            $egkyssmuqcwaciya = $aaqqkgyougeiueyq->uecyuoauykiqqkey();
            goto aeywmsqkisycgqce;
            uyisqeuweamsqwgg:
            if (!$aaqqkgyougeiueyq instanceof Foreign) {
                goto agoikageaeouqaqi;
            }
            goto icasgckmuawkaksg;
            rwaeioueucocosgu:
            essokuoguqegyeua:
            goto cuqusekekewuseio;
            cwkwkgkqasguwscg:
            if (!$kooyscwkscsogysg instanceof Model) {
                goto essokuoguqegyeua;
            }
            goto makqqsaegsesgquq;
            aimaqcomigwccomu:
            smmgkqeacswimyas:
            goto osawsyawkikquqya;
            symwoekuwqcmowwo:
            if ($aaqqkgyougeiueyq->wmomygggskkoqess()) {
                goto awwwoikmmaisyisy;
            }
            goto emsuycioaeoeeeqo;
            wowakayqsywcaogm:
            aegiwggkecgaiocs:
            goto ogwosuisocqykoma;
            ssoooeigmwugyycm:
            $aaqqkgyougeiueyq = $this->oyeskqayoscwciem()->uqeoyqiwywwmsiew($uusmaiomayssaecw);
            goto uyisqeuweamsqwgg;
            cgoqqicyaiwasqme:
            yisooseceggsgyqw:
            goto ckagywkumgkaswyy;
            eicuoesagiuykmos:
            goto yisooseceggsgyqw;
            goto eqkaikmaegscweqq;
            aesgakksmyecsusi:
            $accumooemgmowewu = $mksyucucyswaukig::uqggkiomyiceyooa();
            goto igewmkyikyaiamsq;
            aeywmsqkisycgqce:
            if (!$egkyssmuqcwaciya) {
                goto aqoyesawuayoeuag;
            }
            goto mawsaauyquacosus;
            ikwamukqumiokwkk:
            if (!is_numeric($qqswgiawgeaeoecu)) {
                goto ewugkyumwuomukie;
            }
            goto uueyawewomkuiiwc;
            makqqsaegsesgquq:
            $gqkcqoaumsuwkqom = $kooyscwkscsogysg->primaryKey;
            goto symwoekuwqcmowwo;
            emsuycioaeoeeeqo:
            if ($aaqqkgyougeiueyq->gumeeckcowwoyoci()) {
                goto iqicwseckoykqowm;
            }
            goto koaeayomowaiywam;
            csueasskicaaoaii:
            $swmgqkqyqcgemack = self::uqggkiomyiceyooa();
            goto yyousguikogqkecs;
            ckscysysmayieagk:
            
            $mksyucucyswaukig->hasMany($egkyssmuqcwaciya)->saveMany($myqeggyewswyoowe);
            goto aimaqcomigwccomu;
            wqcquwuiqkqaoamo:
            if (!$csamwuowsigosqys instanceof Model) {
                goto qquugwwesqswouyc;
            }
            goto csueasskicaaoaii;
            xkgykmoskoqykakc:
        }
        cyikoqssoemgwyyk:
    }
    
    public function gkieuyoqcusoksmg($icwicymcioeyeyek, $mksyucucyswaukig = null) : bool
    {
        goto sumsswekusmugwcc;
        sumsswekusmugwcc:
        $sogksuscggsicmac = true;
        goto quoamckmecwqkkus;
        quoamckmecwqkkus:
        foreach ($icwicymcioeyeyek as $oaukocmsckciqaok => $eqgoocgaqwqcimie) {
            goto iwccwiiumyyccquy;
            qqocmsauqkwoscqy:
            ckyeeqwsugcoksek:
            goto asoweekcciigkweo;
            swmmiykiawycgoes:
            if (!($aaqqkgyougeiueyq instanceof Field && !$aaqqkgyougeiueyq instanceof Foreign)) {
                goto uwsgccckqqookusc;
            }
            goto zsweawcwmisoogao;
            uisaoikyqyseiyas:
            if ($sogksuscggsicmac) {
                goto ucuyaouwikuyyemm;
            }
            goto gqaiqcgwsmyugimu;
            iwccwiiumyyccquy:
            $aaqqkgyougeiueyq = $this->oyeskqayoscwciem()->uqeoyqiwywwmsiew($oaukocmsckciqaok);
            goto swmmiykiawycgoes;
            eokgqgsswamgswqu:
            uwsgccckqqookusc:
            goto gcumogmsuuyuwsie;
            cuwasskqkoysieey:
            $myagqecycsaiyqsk = $this->akkkoiiymmamsauc($eqgoocgaqwqcimie, $oaukocmsckciqaok);
            goto mqigiiusqaieqeaa;
            caiiwysgssyqoouc:
            if (!(!$aaqqkgyougeiueyq->yseywyqacmugimme() && !$eqgoocgaqwqcimie)) {
                goto ckyeeqwsugcoksek;
            }
            goto ycoomucecckyease;
            mqigiiusqaieqeaa:
            $ceiwsaacewygcsqg = $this->kumuygiiqswoyasy();
            goto igeiewqcwieuawms;
            qyeewwmuogssaegc:
            komaoacquqwgysgc:
            goto wiaugmimkuikykys;
            myegqayeyqaigmqi:
            $sogksuscggsicmac = false;
            goto qqocmsauqkwoscqy;
            gcumogmsuuyuwsie:
            ksmmosiwmsousgkg:
            goto uyouoeaoqcieeayg;
            wuqysikmouuiawwi:
            $this->kmsyisgakgwscyey(sprintf(__("\x25\x73\x20\151\163\40\x75\156\x69\161\x75\145\x20\x61\156\x64\x20\x65\156\164\145\162\x65\144\x20\x76\x61\154\x75\x65\x20\141\154\162\145\141\144\171\x20\145\170\151\163\x74\56", PR__CMN__FOUNDATION), ManipulateHTML::ciuuiyckmsygceis($aaqqkgyougeiueyq->qcgakseyaikigqco())), $oaukocmsckciqaok);
            goto egumckcoaaowkgoy;
            igeiewqcwieuawms:
            if (!($myagqecycsaiyqsk && ManipulateArray::get($mksyucucyswaukig, $ceiwsaacewygcsqg) != ManipulateArray::get($myagqecycsaiyqsk, $ceiwsaacewygcsqg))) {
                goto komaoacquqwgysgc;
            }
            goto wuqysikmouuiawwi;
            egumckcoaaowkgoy:
            $sogksuscggsicmac = false;
            goto qyeewwmuogssaegc;
            zsweawcwmisoogao:
            if ($aaqqkgyougeiueyq->kweqqkiwiugikyam()) {
                goto msegcuqmgweissmw;
            }
            goto caiiwysgssyqoouc;
            asoweekcciigkweo:
            goto siwekyoigwegiosa;
            goto kuyeoaemuwcqkoae;
            wiaugmimkuikykys:
            siwekyoigwegiosa:
            goto uisaoikyqyseiyas;
            kuyeoaemuwcqkoae:
            msegcuqmgweissmw:
            goto cuwasskqkoysieey;
            gqaiqcgwsmyugimu:
            goto aoiaykkukcyyoaio;
            goto akuiskwoukoesuou;
            ycoomucecckyease:
            $this->kmsyisgakgwscyey(sprintf(__("\45\163\40\143\141\x6e\156\47\x74\x20\x62\x65\x20\x65\x6d\160\x74\x79\x2c\x20\160\x6c\145\141\163\145\x20\146\x69\x6c\154\x20\151\164\x2e", PR__CMN__FOUNDATION), ManipulateHTML::ciuuiyckmsygceis($aaqqkgyougeiueyq->qcgakseyaikigqco())), $oaukocmsckciqaok);
            goto myegqayeyqaigmqi;
            akuiskwoukoesuou:
            ucuyaouwikuyyemm:
            goto eokgqgsswamgswqu;
            uyouoeaoqcieeayg:
        }
        goto suaouieqqoauuwme;
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
        qqcusuaqmyukwyqk:
        foreach ($icwicymcioeyeyek as $oaukocmsckciqaok => $eqgoocgaqwqcimie) {
            goto gsewiomcwceysquc;
            muoougyakwgcicuo:
            yqysciwesgsiuayi:
            goto ywgqeosekkwswyac;
            migwkuscokgmogea:
            if (!$aaqqkgyougeiueyq instanceof Boolean) {
                goto kwwoucisuqcmqmqu;
            }
            goto ooiaoiygiiamsmum;
            ggqmaecmwgeqkuge:
            ukuuumkkameeuesk:
            goto ieyimqciuswcokke;
            gkekqmkyumkmywky:
            osgmksikyyqqcaag:
            goto muoougyakwgcicuo;
            qkmmgqgcegcuawuu:
            kwwoucisuqcmqmqu:
            goto auouiegmaiasywkw;
            ieyimqciuswcokke:
            $eqgoocgaqwqcimie = wp_json_encode($eqgoocgaqwqcimie);
            goto csismgmuaiogeucq;
            aqaseyqwkgoyaiyg:
            $mksyucucyswaukig->cmgoqeksagmigwmg($oaukocmsckciqaok, $eqgoocgaqwqcimie);
            goto gkekqmkyumkmywky;
            csismgmuaiogeucq:
            muygyqckegkuiwyi:
            goto aqaseyqwkgoyaiyg;
            ooiaoiygiiamsmum:
            $eqgoocgaqwqcimie = $eqgoocgaqwqcimie === "\157\x6e";
            goto qkmmgqgcegcuawuu;
            gsewiomcwceysquc:
            $aaqqkgyougeiueyq = $owgumcsyqsamiemg->oyeskqayoscwciem()->uqeoyqiwywwmsiew($oaukocmsckciqaok);
            goto ouyqaaywykeqimmi;
            ouyqaaywykeqimmi:
            if (!($aaqqkgyougeiueyq instanceof Field && !$aaqqkgyougeiueyq instanceof Foreign)) {
                goto osgmksikyyqqcaag;
            }
            goto egicsmysugywycqq;
            auouiegmaiasywkw:
            goto muygyqckegkuiwyi;
            goto ggqmaecmwgeqkuge;
            egicsmysugywycqq:
            if ($aaqqkgyougeiueyq instanceof Json && $eqgoocgaqwqcimie) {
                goto ukuuumkkameeuesk;
            }
            goto migwkuscokgmogea;
            ywgqeosekkwswyac:
        }
        goto souucimemowwaseo;
        oqyeyuocsyoeogim:
        return $mksyucucyswaukig;
        goto egawiicamoykemqq;
        souucimemowwaseo:
        qcsceusmgwewumuy:
        goto oqyeyuocsyoeogim;
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
        cgykkwqwamaougme:
        return $this;
        goto gcmmgmowsmgwkoye;
        mkayykckiywayuko:
        goto ksoygkwycsqicooa;
        goto wmgyemaskuuowuum;
        akkwoqycamwckeui:
        if ($uusmaiomayssaecw) {
            goto qqwukskiymcymgqc;
        }
        goto goimqkkiyegggysa;
        wmgyemaskuuowuum:
        qqwukskiymcymgqc:
        goto ssqemoqcimayewqm;
        ssqemoqcimayewqm:
        $this->validationErrors[$uusmaiomayssaecw] = $iswcokucwmiosiaq;
        goto kquwekemiawwmuqs;
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
        kouecqmcueugwcqw:
        ugcaeymeciausmao:
        goto yceksmgauwmiwmsw;
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
        sucquwgiacwooomw:
        $wkawwaegamqisugs = $this->geeumyocaqwwquwk($siykeiywomwwuoiw, $wkkweuacukumqmya);
        goto sgoioieqoekqywik;
        sgoioieqoekqywik:
        omqkeukuycyymmke:
        goto susauskwueokgaku;
        wicqcmuwosqwyggg:
        $aiowsaccomcoikus = $this->kumuygiiqswoyasy();
        goto wwuiwkkgqescsyyw;
        oiemkksaoaiyckgi:
        if ($aiowsaccomcoikus) {
            goto imsmosgqcqgeksws;
        }
        goto wicqcmuwosqwyggg;
        susauskwueokgaku:
        return $wkawwaegamqisugs;
        goto usaykyskgyqwquca;
        wqameeueegakoqya:
        $siykeiywomwwuoiw = $this->gqaysymikgeawkqa();
        goto eeyksuucagkaqmsi;
        wwuiwkkgqescsyyw:
        imsmosgqcqgeksws:
        goto wqameeueegakoqya;
        ciuwaqyasauagkeu:
        if (!$siykeiywomwwuoiw) {
            goto omqkeukuycyymmke;
        }
        goto gakmkuaayakeymaa;
        gakmkuaayakeymaa:
        
        $siykeiywomwwuoiw = $siykeiywomwwuoiw->where($aiowsaccomcoikus, self::EQUAL_SYMBOL, $eqgoocgaqwqcimie);
        goto sucquwgiacwooomw;
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
        mewuwwsmewiimgsi:
        $wkawwaegamqisugs = null;
        goto iaewsguseweeqcqe;
        imagiycyokkwucge:
        qiamskskowaugckg:
        goto gaqcesscgywweieq;
        iaewsguseweeqcqe:
        if (!$siykeiywomwwuoiw) {
            goto qiamskskowaugckg;
        }
        goto msmcmycooiwwqiik;
        swqwssmgwikmieoa:
    }
    
    public function qumqowkwyaceeqwu($ikgwqyuyckaewsow = []) : bool
    {
        goto qaswkqkwqgqqcyws;
        ukicwqcoggwiskgo:
        
        $cmaccwokqweqweqi = $siykeiywomwwuoiw->exists();
        goto maqmyigowgsmqaco;
        eigowcoqoqkwuoiq:
        return $cmaccwokqweqweqi;
        goto iqiuaammwkeiamuo;
        qaswkqkwqgqqcyws:
        $cmaccwokqweqweqi = false;
        goto ekimmsiekwwoawym;
        gsimucysiuikweme:
        if (!$siykeiywomwwuoiw) {
            goto meuaykaqyqkseycs;
        }
        goto ukicwqcoggwiskgo;
        ekimmsiekwwoawym:
        $siykeiywomwwuoiw = $this->kqewyqqqiyiouaou($ikgwqyuyckaewsow);
        goto gsimucysiuikweme;
        maqmyigowgsmqaco:
        meuaykaqyqkseycs:
        goto eigowcoqoqkwuoiq;
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
        $meqocwsecsywiiqs = __("\x44\x65\x6c\x65\x74\x65", PR__CMN__FOUNDATION);
        return ManipulateHTML::uskieqmcqyecigmy(["\164\x79\160\145" => "\145\162\162\157\162", "\164\x69\164\154\x65" => $meqocwsecsywiiqs, "\143\x6f\156\x74\145\156\164" => __("\x41\162\145\40\x79\x6f\165\x20\x73\165\162\145\40\171\x6f\165\40\x77\141\156\x74\x20\164\157\x20\x64\145\154\145\x74\145\x20\164\150\x69\163\40\x69\x74\x65\155\x3f", PR__CMN__FOUNDATION), "\x62\165\x74\x74\x6f\x6e\163" => ["\143\x61\x6e\143\x65\x6c", ["\x68\x72\145\146" => $iwywmkygwewiamwm, "\143\x6c\141\163\x73" => "\x70\x72\x2d\x6f\162\155\55\141\143\164\x69\157\156\x20\x62\x74\x6e\x20\142\x74\156\55\160\162\151\155\141\x72\x79", "\x74\151\164\x6c\145" => $meqocwsecsywiiqs, "\144\151\163\155\151\163\163" => true]]]);
    }
    
    public function rkmkouiquumiecqy($iwywmkygwewiamwm) : string
    {
        $meqocwsecsywiiqs = __("\104\145\154\x65\x74\145", PR__CMN__FOUNDATION);
        return ManipulateHTML::uuccukgasskgimsq("\141", ["\x68\x72\145\146" => "\x23", "\x63\x6c\x61\163\x73" => "\x73\165\x62\x6d\151\164\144\145\154\x65\x74\145\40\x70\162\55\143\157\x6e\146\151\162\155\141\142\x6c\145\x2d\x61\143\x74\x69\x6f\156", "\144\141\164\141\x2d\x63\x6f\156\146\x69\x67" => $this->ymaommgoigkakyes($iwywmkygwewiamwm)], $meqocwsecsywiiqs);
    }
    
    public function aaeswuecycyquqwk($siykeiywomwwuoiw, $qsyooiqcmkcieyuk)
    {
        return $siykeiywomwwuoiw;
    }
    
    public function eukyqwmmeyakcyoo($mksyucucyswaukig, $yygmoeguaqyumuui = []) : array
    {
        goto ciwcwcqkgkmoguok;
        ksseoiqcgiqsamwy:
        if (!($mksyucucyswaukig && $yygmoeguaqyumuui)) {
            goto gyaoqaggggoiaoqs;
        }
        goto qgeiemoywoccmwgw;
        wameiecycmkcuimk:
        foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw => $pkyyagewkiyckmwy) {
            goto gkmgqmcgouseqwyg;
            sgamuuiycksmssoi:
            $eqgoocgaqwqcimie = $this->kamyqikiiuwqiiuw($uusmaiomayssaecw, $eqgoocgaqwqcimie, $mksyucucyswaukig);
            goto ymsscygscwwicumm;
            keygauyiuaycggcw:
            zawceoyikyuwoucg:
            goto memcsokyqmowucuo;
            mugaisykgmqcaggg:
            eqmcakqmqkqkweww:
            goto sgamuuiycksmssoi;
            tokguaiieequuwwa:
            gcgckeksyymcgays:
            goto ccgmicuyeoggoecu;
            qogogggqiuuewakw:
            goto eqmcakqmqkqkweww;
            goto tokguaiieequuwwa;
            eocaacmwsqqqauuc:
            if ($aaqqkgyougeiueyq instanceof Field) {
                goto aqwcyyigiukqikui;
            }
            goto maougsuwuoiecwgy;
            ymsscygscwwicumm:
            if (!($pkyyagewkiyckmwy && $eqgoocgaqwqcimie)) {
                goto iwcsismeakueeiya;
            }
            goto oouisuwokmqgwiau;
            wkgmgumyswiayyae:
            aqwcyyigiukqikui:
            goto aiaayumowqswqqqk;
            kyoogyegwukaqoce:
            $aaqqkgyougeiueyq = ManipulateArray::get($qssskwiqeumgkago, $uusmaiomayssaecw);
            goto eocaacmwsqqqauuc;
            ogmueiimgsogucqa:
            $eqgoocgaqwqcimie = ManipulateArray::get($mksyucucyswaukig, $uusmaiomayssaecw);
            goto kyoogyegwukaqoce;
            gkmgqmcgouseqwyg:
            if (!is_numeric($uusmaiomayssaecw)) {
                goto gcgckeksyymcgays;
            }
            goto emsqksecccqeueoa;
            swmeecwwakawqqcw:
            $sqqewmoeaekuyyas = $aaqqkgyougeiueyq->yywskysiycwkwsgw();
            goto awkmmuyuakwiaqae;
            smqeaeiimomewqsw:
            goto kmgoiquwmsayywsc;
            goto wkgmgumyswiayyae;
            maougsuwuoiecwgy:
            $pkyyagewkiyckmwy = ManipulateArray::get([self::CREATED_AT => __("\x43\162\x65\141\164\145\144\40\101\164", PR__CMN__FOUNDATION), self::UPDATED_AT => __("\x55\160\144\x61\x74\145\x64\40\x41\x74", PR__CMN__FOUNDATION)], $uusmaiomayssaecw, '');
            goto pseqauyuqgmccuwe;
            aiaayumowqswqqqk:
            $pkyyagewkiyckmwy = $aaqqkgyougeiueyq->qcgakseyaikigqco();
            goto swmeecwwakawqqcw;
            emsqksecccqeueoa:
            $uusmaiomayssaecw = ManipulateString::ogimogiceeekegoi($pkyyagewkiyckmwy);
            goto ogmueiimgsogucqa;
            ewosekcicaqucsua:
            $eqgoocgaqwqcimie = '';
            goto mugaisykgmqcaggg;
            awkmmuyuakwiaqae:
            kmgoiquwmsayywsc:
            goto qogogggqiuuewakw;
            oouisuwokmqgwiau:
            $oammesyieqmwuwyi[$uusmaiomayssaecw] = [self::LABEL => $pkyyagewkiyckmwy, self::VALUE => $eqgoocgaqwqcimie, self::PRIORITY => $sqqewmoeaekuyyas];
            goto wwugkwcimumgukko;
            wwugkwcimumgukko:
            iwcsismeakueeiya:
            goto keygauyiuaycggcw;
            pseqauyuqgmccuwe:
            $sqqewmoeaekuyyas = 1000;
            goto smqeaeiimomewqsw;
            ccgmicuyeoggoecu:
            $sqqewmoeaekuyyas = 0;
            goto ewosekcicaqucsua;
            memcsokyqmowucuo:
        }
        goto ecyauwageoukkaaq;
        qgeiemoywoccmwgw:
        $qssskwiqeumgkago = $this->oyeskqayoscwciem()->aeosueemgsygqese();
        goto wameiecycmkcuimk;
        ecyauwageoukkaaq:
        imygueoqiqikwcws:
        goto cceesacikyckyiim;
        cceesacikyckyiim:
        gyaoqaggggoiaoqs:
        goto uqqawaaiywcggesu;
        uqqawaaiywcggesu:
        return ManipulateArray::yaeiiwwyckwugsem($oammesyieqmwuwyi);
        goto oamaoeaeoyckwmgk;
        ciwcwcqkgkmoguok:
        $oammesyieqmwuwyi = [];
        goto ksseoiqcgiqsamwy;
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
        uksgyweoymomgqos:
        goto csqwmisikmgeaaky;
        goto ugsomcmgekqayoqc;
        icegsqiumouewcqo:
        return $eqgoocgaqwqcimie;
        goto mgeiyeygqcoismqq;
        ugsomcmgekqayoqc:
        wmasiggggymwkeqs:
        goto kecgiacuyaumcewe;
        wugmawaqkksguaoa:
        $eqgoocgaqwqcimie = $this->aouwuegyyugiwksc($qgoqiacsiccwoawi, $mksyucucyswaukig, !$this->wmwguecgowcscues());
        goto ggwkueqyesouyaya;
        sgiescgmgsowcakk:
        if ($aaqqkgyougeiueyq instanceof File) {
            goto vwyusaemeqkswgee;
        }
        goto cgeuosayqssasuou;
        wskwmocqgakykmgw:
        if ($aaqqkgyougeiueyq instanceof Enumeration) {
            goto wmasiggggymwkeqs;
        }
        goto sgiescgmgsowcakk;
        oykuimwkwcmuekci:
        goto qewmkgeeuomgomia;
        goto icausgkyooymuwqq;
        ieumcesgiqicqima:
        ayggscyaoccukyso:
        goto ysswaukcymggikui;
        guyskocigecaisas:
        $aokagokqyuysuksm = $eqgoocgaqwqcimie;
        goto wugmawaqkksguaoa;
        ugoqkakikayagkmm:
        cuqeayuiccuwcyua:
        goto guyskocigecaisas;
        qawqosgwykeguasw:
        oukqakowgcgeugam:
        goto oscukosgcqaqwcmi;
        skuykkqcgakewusu:
        $eqgoocgaqwqcimie = $this->wusgwkaycokeckqs($eqgoocgaqwqcimie);
        goto imyoiukqcmewqkkw;
        myasecwmmmiemgik:
        aoyqwwsacwqumucg:
        goto kwmkusgsuoqoyses;
        qmeskaiqawomuqmk:
        $eqgoocgaqwqcimie = ManipulateHTML::qgsekwygcgawekeq("\x69\x6d\x67", ["\x73\x72\143" => $eqgoocgaqwqcimie, "\x77\151\144\164\150" => "\x38\x30", "\150\x65\x69\x67\150\164" => "\70\60"]);
        goto ycekisssayygosaw;
        skwuueyuqkueasuu:
        iiakoqmowuggmkqw:
        goto oeoeeqeaokougsec;
        isqemmgcymcqgmyu:
        if (!($this->kumuygiiqswoyasy() === $qgoqiacsiccwoawi)) {
            goto cesywumicwqkaeaq;
        }
        goto muuiwammayaceuue;
        kwmkusgsuoqoyses:
        ceegwysaccigqqck:
        goto eacqgkqmwkcsscec;
        imyoiukqcmewqkkw:
        goto uiuekqekiguikuce;
        goto ugoqkakikayagkmm;
        kwagmsukmimymmmg:
        uyueemusgoakawmc:
        goto ieumcesgiqicqima;
        qyoscouawykeimiu:
        if ($aaqqkgyougeiueyq instanceof DateTime || $aaqqkgyougeiueyq instanceof Timestamp) {
            goto skokkuuieagmuwgm;
        }
        goto wskwmocqgakykmgw;
        sgaiaqoewagooqoo:
        $eqgoocgaqwqcimie = $this->ooeucgsymeocguuu($qgoqiacsiccwoawi, $eqgoocgaqwqcimie, null, null, $mksyucucyswaukig);
        goto iugooscuiysaeqgs;
        oeoeeqeaokougsec:
        uiuekqekiguikuce:
        goto ikgusckaomuoiggs;
        kecgiacuyaumcewe:
        $eqgoocgaqwqcimie = ManipulateArray::get($aaqqkgyougeiueyq->gkwkqmwweiawigae(), $eqgoocgaqwqcimie, $eqgoocgaqwqcimie);
        goto giqssgogumimqkeo;
        scigcaogysowccsk:
        $aaqqkgyougeiueyq = $this->oyeskqayoscwciem()->uqeoyqiwywwmsiew($qgoqiacsiccwoawi);
        goto qyoscouawykeimiu;
        ysswaukcymggikui:
        qewmkgeeuomgomia:
        goto uksgyweoymomgqos;
        icausgkyooymuwqq:
        vwyusaemeqkswgee:
        goto gwyguuaqscsukaqg;
        iugooscuiysaeqgs:
        ayekogimgycgmgau:
        goto icegsqiumouewcqo;
        ycekisssayygosaw:
        goto aoyqwwsacwqumucg;
        goto qawqosgwykeguasw;
        sesqsywwesiycmmq:
        if (!(!is_numeric($eqgoocgaqwqcimie) && ManipulateValidation::wmcwegoisyeeosqu($eqgoocgaqwqcimie))) {
            goto ceegwysaccigqqck;
        }
        goto wwyukkoeeeiiuewk;
        muuiwammayaceuue:
        return $eqgoocgaqwqcimie;
        goto aqmauesokgqoyugm;
        wgiuiaqoekymkwwo:
        goto ayekogimgycgmgau;
        goto csiokukquwmccgqc;
        gwyguuaqscsukaqg:
        if (!($this->wkcuasmkgoscaiay() || $this->wmwguecgowcscues())) {
            goto ayggscyaoccukyso;
        }
        goto sesqsywwesiycmmq;
        giqssgogumimqkeo:
        csqwmisikmgeaaky:
        goto wgiuiaqoekymkwwo;
        ggwkueqyesouyaya:
        if ($eqgoocgaqwqcimie) {
            goto iiakoqmowuggmkqw;
        }
        goto gyeqsyqiosmysiio;
        oscukosgcqaqwcmi:
        $eqgoocgaqwqcimie = $aiooqyausygaasqm;
        goto myasecwmmmiemgik;
        aqmauesokgqoyugm:
        cesywumicwqkaeaq:
        goto scigcaogysowccsk;
        csiokukquwmccgqc:
        skokkuuieagmuwgm:
        goto sgaiaqoewagooqoo;
        eucysoaqoumycmso:
        $eqgoocgaqwqcimie = ManipulateAttachment::qaeeusqkgwagwaqc($eqgoocgaqwqcimie);
        goto kwagmsukmimymmmg;
        eacqgkqmwkcsscec:
        if (!is_numeric($eqgoocgaqwqcimie)) {
            goto uyueemusgoakawmc;
        }
        goto eucysoaqoumycmso;
        gyeqsyqiosmysiio:
        $eqgoocgaqwqcimie = $aokagokqyuysuksm;
        goto skwuueyuqkueasuu;
        ummgomwmsqygiqcy:
        if ($aaqqkgyougeiueyq instanceof Foreign && $aaqqkgyougeiueyq->eiyqqesoywqkegwu()) {
            goto cuqeayuiccuwcyua;
        }
        goto skuykkqcgakewusu;
        ikgusckaomuoiggs:
        comiusqosmykagiq:
        goto oykuimwkwcmuekci;
        wwyukkoeeeiiuewk:
        if ($aiooqyausygaasqm = ManipulateAttachment::ecqkouyiioksggkw($eqgoocgaqwqcimie)) {
            goto oukqakowgcgeugam;
        }
        goto qmeskaiqawomuqmk;
        cgeuosayqssasuou:
        if (!is_numeric($eqgoocgaqwqcimie)) {
            goto comiusqosmykagiq;
        }
        goto ummgomwmsqygiqcy;
        mgeiyeygqcoismqq:
    }
    
    public function geyuyukmwaoksywa($migiiksoiymissge, $ewgwqamkygiqaawc = '', $wwgucssaecqekuek = []) : string
    {
        goto yseysoymiwmicuoi;
        wawwaqicwyyeamqu:
        $nsmgceoqaqogqmuw = ManipulateHTML::ciuuiyckmsygceis($iwywmkygwewiamwm);
        goto quccsmwoagiquqya;
        wuugmygqgsmkgsmc:
        return $nsmgceoqaqogqmuw;
        goto wcuuwegqcysecoom;
        kmemegqksaeuqcow:
        if (!($migiiksoiymissge && $ewgwqamkygiqaawc)) {
            goto wkqumiwieauokkcy;
        }
        goto miqekiwaouwgqgui;
        yseysoymiwmicuoi:
        $nsmgceoqaqogqmuw = '';
        goto kmemegqksaeuqcow;
        quccsmwoagiquqya:
        wkqumiwieauokkcy:
        goto wuugmygqgsmkgsmc;
        miqekiwaouwgqgui:
        $iwywmkygwewiamwm = ManipulateHTML::qgsekwygcgawekeq("\141", ManipulateFormat::omaawkkwwyesqwcc($wwgucssaecqekuek, ["\150\162\145\x66" => $migiiksoiymissge, "\143\x6c\141\x73\163" => "\164\x65\x78\164\55\x64\145\x63\157\x72\141\164\x69\157\156\x2d\x6e\157\156\145"]), true, $ewgwqamkygiqaawc);
        goto wawwaqicwyyeamqu;
        wcuuwegqcysecoom:
    }
    
    public function ykaiaukuaeswygey($mksyucucyswaukig, $ikgwqyuyckaewsow, $eqgoocgaqwqcimie, $wamcomkuwysqgwgk = "\74\x64\x69\166\76\45\163\72\x20\45\x73\x3c\57\144\x69\166\x3e") : string
    {
        goto wksaesosugiyoqoe;
        wksaesosugiyoqoe:
        $ukmeuaouyackgwaa = '';
        goto kkiwuqcmoqmiquqq;
        moiwoyyuauwqywom:
        $eqgoocgaqwqcimie = "{$eqgoocgaqwqcimie}\74\150\162\76{$ukmeuaouyackgwaa}";
        goto ekgcsqsycamakgak;
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
            omgecsuaqiqymwms:
            suweomwcwyiiscee:
            goto qqucyqsowaqsmagw;
            cmugciymsqakcssq:
            iyaaokkcuycqywco:
            goto omgecsuaqiqymwms;
            qqucyqsowaqsmagw:
        }
        goto ygmkqoaymoicisso;
        ygmkqoaymoicisso:
        wyioauuuyckygcaq:
        goto mwsuqsikwoimcgiq;
        jwicyuowwocymagu:
    }
    
    public function wkmkqaiwuqouweye($aiowsaccomcoikus, $eqgoocgaqwqcimie, $cackiyicawmkyqqg = self::EQUAL_SYMBOL, $siykeiywomwwuoiw = null) : ?Builder
    {
        try {
            goto egeeugucoaimuyai;
            coswqmcmeyyaemcs:
            if (!$siykeiywomwwuoiw) {
                goto laqgkacikykmcsos;
            }
            goto amcyugmyywgmwyys;
            amcyugmyywgmwyys:
            
            $siykeiywomwwuoiw = $siykeiywomwwuoiw->where($aiowsaccomcoikus, $cackiyicawmkyqqg, $eqgoocgaqwqcimie);
            goto eqqgiqaceosmskyq;
            iweqeyugoiogqcsw:
            $siykeiywomwwuoiw = $this->gqaysymikgeawkqa();
            goto yiswuyuuwakywmiy;
            egeeugucoaimuyai:
            if ($siykeiywomwwuoiw) {
                goto amwqgwykwqyqsygy;
            }
            goto iweqeyugoiogqcsw;
            eqqgiqaceosmskyq:
            laqgkacikykmcsos:
            goto gcikiyucocqiqkic;
            yiswuyuuwakywmiy:
            amwqgwykwqyqsygy:
            goto coswqmcmeyyaemcs;
            gcikiyucocqiqkic:
        } catch (Exception $wgaoewqkwgomoaai) {
            $siykeiywomwwuoiw = null;
        }
        return $siykeiywomwwuoiw;
    }
    
    public function woimamkkeyoyauoa($aiowsaccomcoikus, $eqgoocgaqwqcimie, $cackiyicawmkyqqg = self::EQUAL_SYMBOL, $wkkweuacukumqmya = ["\52"], $aiamqeawckcsuaou = self::GET) : array
    {
        goto ykomkgsekoimwoga;
        toacieymkgsmouum:
        if (!$siykeiywomwwuoiw) {
            goto kgaiygkqciegamkk;
        }
        goto uooyycimwyiscwik;
        uooyycimwyiscwik:
        $aqykuigiuwmmcieu = $this->aocqcwaksksgckaw($siykeiywomwwuoiw, $wkkweuacukumqmya, $aiamqeawckcsuaou);
        goto wgyckicucikswwgc;
        uwacyygkmmwmqumm:
        $siykeiywomwwuoiw = $this->wkmkqaiwuqouweye($aiowsaccomcoikus, $cackiyicawmkyqqg, $eqgoocgaqwqcimie);
        goto toacieymkgsmouum;
        wgyckicucikswwgc:
        kgaiygkqciegamkk:
        goto kuewoymyameyusgi;
        ykomkgsekoimwoga:
        $aqykuigiuwmmcieu = [];
        goto uwacyygkmmwmqumm;
        kuewoymyameyusgi:
        return $aqykuigiuwmmcieu;
        goto saqssgocioekcyik;
        saqssgocioekcyik:
    }
    
    public function mkcmqiiwgccguoko($aiowsaccomcoikus, $eqgoocgaqwqcimie, $cackiyicawmkyqqg = self::EQUAL_SYMBOL, $wkkweuacukumqmya = ["\x2a"]) : array
    {
        return $this->woimamkkeyoyauoa($aiowsaccomcoikus, $eqgoocgaqwqcimie, $cackiyicawmkyqqg, $wkkweuacukumqmya, self::PLUCK);
    }
    
    public function cwgkcyyaymmsomqa($mguygkocuoaoqqkg) : array
    {
        goto cusmikqmacqsyoma;
        ciiggekwccqceewc:
        return $mguygkocuoaoqqkg;
        goto kgseuyacuyamciku;
        cusmikqmacqsyoma:
        if ($mguygkocuoaoqqkg && is_array($mguygkocuoaoqqkg)) {
            goto cqggosuciisguwka;
        }
        goto qcqecwaeywouwwyw;
        aacaaeuuscacmgws:
        cqggosuciisguwka:
        goto imccgasockkumogm;
        qcqecwaeywouwwyw:
        $mguygkocuoaoqqkg = [];
        goto uyiyiugiugqiqgce;
        wiisumwwuyqmqggs:
        iaemoucqgyeioome:
        goto ciiggekwccqceewc;
        uyiyiugiugqiqgce:
        goto iaemoucqgyeioome;
        goto aacaaeuuscacmgws;
        imccgasockkumogm:
        foreach ($mguygkocuoaoqqkg as $momcykaoccoymeig => $mksyucucyswaukig) {
            $mguygkocuoaoqqkg[$momcykaoccoymeig] = $this->scqakcemaqsqkema($mksyucucyswaukig);
            aygymyyeaiouckwm:
        }
        goto yawiksokukeuwumm;
        yawiksokukeuwumm:
        ocqocwcocigwogao:
        goto wiisumwwuyqmqggs;
        kgseuyacuyamciku:
    }
    
    public function scqakcemaqsqkema($mksyucucyswaukig, $yiosiwewiecqmkaa = [])
    {
        goto aockoackcyuqgoky;
        scuysmagomwasugy:
        foreach ($mksyucucyswaukig as $aiowsaccomcoikus => $eqgoocgaqwqcimie) {
            goto auyuqgiwqummogko;
            qgowycwwyqeusmqk:
            $mksyucucyswaukig = ManipulateArray::set($mksyucucyswaukig, [$aiowsaccomcoikus => $this->kamyqikiiuwqiiuw($aiowsaccomcoikus, $eqgoocgaqwqcimie, $mksyucucyswaukig)]);
            goto ouiaceqmgmusysiq;
            auyuqgiwqummogko:
            if (!(!$yiosiwewiecqmkaa || in_array($aiowsaccomcoikus, $yiosiwewiecqmkaa))) {
                goto oqwssckcieuowiwc;
            }
            goto qgowycwwyqeusmqk;
            ouiaceqmgmusysiq:
            oqwssckcieuowiwc:
            goto egcykicymsycioaq;
            egcykicymsycioaq:
            cuiswoyuykyksukc:
            goto scgkuqsgoooesoak;
            scgkuqsgoooesoak:
        }
        goto yamuiaoquqoesiye;
        keeayqkcscoegmmc:
        kiwygqkmigumiiuk:
        goto iescmuyqmwkeagcg;
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
        uyeiksuwckaowkqm:
        $aqykuigiuwmmcieu = $this->aocqcwaksksgckaw($siykeiywomwwuoiw, $wkkweuacukumqmya);
        goto qiykkoqakyesmswm;
        ekcsiqgsyyiwyiui:
        if (!$siykeiywomwwuoiw) {
            goto eyecoeksswsicqkq;
        }
        goto uyeiksuwckaowkqm;
        mgomeacemugqgswa:
        $aqykuigiuwmmcieu = [];
        goto muewmqsoeqoosicu;
        muewmqsoeqoosicu:
        $siykeiywomwwuoiw = $this->kqewyqqqiyiouaou($ikgwqyuyckaewsow);
        goto ekcsiqgsyyiwyiui;
        ieceiycekgcommqi:
        return $aqykuigiuwmmcieu;
        goto umskgiqgaemaokmw;
        qiykkoqakyesmswm:
        eyecoeksswsicqkq:
        goto ieceiycekgcommqi;
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
        wiqmeiaaqqauqeme:
        try {
            goto cuqsyqewuemsysgi;
            umseiamyiyksuyim:
            yoegkeiammkuouua:
            goto ubsguocwequeoicm;
            cuqsyqewuemsysgi:
            if (!$siykeiywomwwuoiw) {
                goto yoegkeiammkuouua;
            }
            goto aicoaaeeewwmioou;
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
                        ysmqqmuesgeyquws:
                        $icsywsyukqcciiky = ManipulateArray::get($ywmkwiwkosakssii, self::WHERE, false);
                        goto mmoyseisgqkyouaq;
                        mmoyseisgqkyouaq:
                        $aasascamegmwqmqk = $qgoqiacsiccwoawi;
                        goto oyeuoiqgeuioiqie;
                        quweggukmkusygwe:
                        $sqeykgyoooqysmca = ManipulateArray::get($ywmkwiwkosakssii, self::TYPE, "\151\156\156\x65\x72");
                        goto ysmqqmuesgeyquws;
                        qwuwcoeiguyqekuy:
                        goto wskuiymiemyqssui;
                        goto osskmmsaekmgemwc;
                        oyeuoiqgeuioiqie:
                        
                        $siykeiywomwwuoiw = $siykeiywomwwuoiw->join($aasascamegmwqmqk, $eqgoocgaqwqcimie[0], $cackiyicawmkyqqg, $eqgoocgaqwqcimie[1], $sqeykgyoooqysmca, $icsywsyukqcciiky);
                        goto qwuwcoeiguyqekuy;
                        osskmmsaekmgemwc:
                    case self::WHERE:
                        goto gmmgscuqwgiiqsmc;
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
                        iokqqymyimieyyyy:
                        goto wskuiymiemyqssui;
                        goto aoaymmuyuuwqwcuy;
                        kwiwoeckcqgewwsc:
                        smwcscokyasiosks:
                        goto meseoaayykmoeicm;
                        woqwmsyieymgsqao:
                        ygsoccgkwamsqewm:
                        goto qywoucqwciweuyeg;
                        gwgssaymsgykwaoe:
                        wococciimesuaeys:
                        goto wwioiasoggswmeyy;
                        gmmgscuqwgiiqsmc:
                        if (is_array($eqgoocgaqwqcimie)) {
                            goto smwcscokyasiosks;
                        }
                        goto imwwaqcuqskiyeqc;
                        aacmqqkkmcyowsko:
                        momgaqeuucmowiii:
                        goto iokqqymyimieyyyy;
                        wwioiasoggswmeyy:
                        eowskcomgqqwcyui:
                        goto aacmqqkkmcyowsko;
                        qywoucqwciweuyeg:
                        goto momgaqeuucmowiii;
                        goto kwiwoeckcqgewwsc;
                        owsusyqkaqmcmkwu:
                        skmyqomuuowkeeqe:
                        goto woqwmsyieymgsqao;
                        aoaymmuyuuwqwcuy:
                    case self::DATE:
                        $siykeiywomwwuoiw = $this->ewaugyyiauqmiwsu($qgoqiacsiccwoawi, $eqgoocgaqwqcimie, $cackiyicawmkyqqg, $qsycuegoicqcqkmo, $mqogqgswmasasmik, $siykeiywomwwuoiw);
                        goto wskuiymiemyqssui;
                }
                goto yiuwcmkkcemwksaq;
                yiuwcmkkcemwksaq:
                muoaaecywcccquoa:
                goto wgegmwgsmsgmceqo;
                kqkqessiagyiiuim:
                wyuuoyquywymqoqc:
                goto omyeseoqwqiuwqcw;
                wgegmwgsmsgmceqo:
                wskuiymiemyqssui:
                goto kqkqessiagyiiuim;
                yuuygkmacmmcakma:
                $eqgoocgaqwqcimie = ManipulateArray::get($ywmkwiwkosakssii, self::VALUE, $ywmkwiwkosakssii);
                goto mywgmggymygqamce;
                oekyuoucqkakcewe:
                $cackiyicawmkyqqg = ManipulateArray::get($ywmkwiwkosakssii, self::OPERATOR, self::EQUAL_SYMBOL);
                goto ieaswyqkcwyaycse;
                mywgmggymygqamce:
                $yummaigqmauwcyou = ManipulateArray::get($ywmkwiwkosakssii, self::CLAUSE, self::WHERE);
                goto cswkeogkecaoyoka;
                mcsucqagsqysgieu:
                $mqogqgswmasasmik = ManipulateArray::get($ywmkwiwkosakssii, self::NOT, false);
                goto yuuygkmacmmcakma;
                cswkeogkecaoyoka:
                $qsycuegoicqcqkmo = ManipulateArray::get($ywmkwiwkosakssii, self::BOOLEAN, self::AND);
                goto oekyuoucqkakcewe;
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
        maquyauskaqkikks:
        
        $gaeqamemwmwsyukm = $siykeiywomwwuoiw->count();
        goto wgggaasiaeeucygm;
        ssocqyqwsyyekiik:
        $gaeqamemwmwsyukm = 0;
        goto nomsoewcmsqiikyy;
        wmgokkkswmssqimu:
        return $gaeqamemwmwsyukm;
        goto ywueqiukuessuggs;
        nomsoewcmsqiikyy:
        $siykeiywomwwuoiw = $this->wkmkqaiwuqouweye($aiowsaccomcoikus, $cackiyicawmkyqqg, $eqgoocgaqwqcimie, $siykeiywomwwuoiw);
        goto iiueqisykokweaaw;
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
        samuycgcmqkmcgea:
        return $qsmaqqyoggcuyukq;
        goto kqacoqsymeyimagg;
        useouyguueemgkmq:
        $siykeiywomwwuoiw = $this->wkmkqaiwuqouweye($aiowsaccomcoikus, $cackiyicawmkyqqg, $eqgoocgaqwqcimie);
        goto oweiysimemyoswom;
        coakykwqwcigaoeq:
        
        $qsmaqqyoggcuyukq = $siykeiywomwwuoiw->sum($qgoqiacsiccwoawi);
        goto gekuacoquiucucoa;
        sogccagmgkcaoase:
        $qsmaqqyoggcuyukq = 0;
        goto useouyguueemgkmq;
        kqacoqsymeyimagg:
    }
    
    public function ewaugyyiauqmiwsu($ymaogssqccumcyqa, $eqgoocgaqwqcimie, $cackiyicawmkyqqg = self::GE_SYMBOL, $qsycuegoicqcqkmo = self::AND, $mqogqgswmasasmik = false, $siykeiywomwwuoiw = null) : ?Builder
    {
        try {
            goto wcksgisuiomywugm;
            imiieooawogoyagw:
            
            $siykeiywomwwuoiw = $siykeiywomwwuoiw->whereDate($ymaogssqccumcyqa, $cackiyicawmkyqqg, $eqgoocgaqwqcimie, $qsycuegoicqcqkmo);
            goto imyqaycayqeucsau;
            imyqaycayqeucsau:
            goto iswgeeweeweswyoy;
            goto yiqskmikgqukkewq;
            yiqskmikgqukkewq:
            wwwyugiayoaucqiu:
            goto eoeomqmkgaogkome;
            kigeagsoeqmgaosa:
            if ($cackiyicawmkyqqg == "\142\145\x74\167\145\x65\x6e" && is_array($eqgoocgaqwqcimie)) {
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
            mwwqyciigykaycis:
            $siykeiywomwwuoiw = $this->gqaysymikgeawkqa();
            goto geacaysasaiqsewo;
            wewikewycwowkqui:
            $eqgoocgaqwqcimie = new \DateTime($eqgoocgaqwqcimie);
            goto qqgoygcaggkkisyw;
            eoeomqmkgaogkome:
            
            $siykeiywomwwuoiw = $siykeiywomwwuoiw->whereBetween($ymaogssqccumcyqa, $eqgoocgaqwqcimie, $qsycuegoicqcqkmo, $mqogqgswmasasmik);
            goto cmcawyswoeumueys;
            wcksgisuiomywugm:
            if ($siykeiywomwwuoiw) {
                goto maiokoamiosssisk;
            }
            goto mwwqyciigykaycis;
            geacaysasaiqsewo:
            maiokoamiosssisk:
            goto kigeagsoeqmgaosa;
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
        ugkqimokoeicsyqm:
        if ($aiowsaccomcoikus instanceof Field) {
            goto agcugqouiqgiskcq;
        }
        goto kyuewcuomwmweguq;
        wwmscmqgasawkkwa:
        msaugmwuooqkmwus:
        goto aksogeackceaeays;
        iweickamaucqgysq:
        sumiomammkayeqis:
        goto aecamacaoskqmccs;
        qiiwgkcyqweecqoa:
        uwkuasmeoueseaou:
        goto ekkkweoucuyuqwik;
        kokkacggmoaagiae:
        goto ueeuassqywswigaq;
        goto iweickamaucqgysq;
        oqkqaggagwswaaqi:
        $aiowsaccomcoikus = $ksiyqouuaoymsycg;
        goto qiiwgkcyqweecqoa;
        aksogeackceaeays:
        oqksakqyecmsuscq:
        goto ugwyeeockousskag;
        uiqaoucyoiwykywa:
        if (!$aiowsaccomcoikus instanceof Json) {
            goto msaugmwuooqkmwus;
        }
        goto umawcakyaoykccao;
        umawcakyaoykccao:
        $eqgoocgaqwqcimie = json_decode($eqgoocgaqwqcimie);
        goto wwmscmqgasawkkwa;
        kyuewcuomwmweguq:
        $ksiyqouuaoymsycg = $this->oyeskqayoscwciem()->uqeoyqiwywwmsiew($aiowsaccomcoikus);
        goto syokeusmqogkicks;
        uyugkucyiqymcuus:
        $eqgoocgaqwqcimie = ManipulateArray::get($mksyucucyswaukig, $aiowsaccomcoikus, $ggauoeuaesiymgee);
        goto kokkacggmoaagiae;
        aecamacaoskqmccs:
        $eqgoocgaqwqcimie = ManipulateArray::get($mksyucucyswaukig, $aiowsaccomcoikus->mwikyscisascoeea(), $ggauoeuaesiymgee);
        goto oekmoqcqwyauiaeg;
        oekmoqcqwyauiaeg:
        if (!$eqgoocgaqwqcimie) {
            goto oqksakqyecmsuscq;
        }
        goto uiqaoucyoiwykywa;
        ooqqyyewioyccuww:
        return $eqgoocgaqwqcimie;
        goto umasasgawwamkisc;
        syokeusmqogkicks:
        if (!$ksiyqouuaoymsycg) {
            goto uwkuasmeoueseaou;
        }
        goto oqkqaggagwswaaqi;
        mkosooeggqemyqqy:
        if ($aiowsaccomcoikus instanceof Field) {
            goto sumiomammkayeqis;
        }
        goto uyugkucyiqymcuus;
        ugwyeeockousskag:
        ueeuassqywswigaq:
        goto ooqqyyewioyccuww;
        ekkkweoucuyuqwik:
        agcugqouiqgiskcq:
        goto mkosooeggqemyqqy;
        umasasgawwamkisc:
    }
    
    private function aocqcwaksksgckaw($siykeiywomwwuoiw, $wkkweuacukumqmya = ["\x2a"], $aiamqeawckcsuaou = self::GET) : array
    {
        goto qqkqiioqwkekqsoq;
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
        ayegqigqcsuoqess:
        return $uomewyckeuqoqocu;
        goto scqwioawomamygwa;
        qqkqiioqwkekqsoq:
        $uomewyckeuqoqocu = [];
        goto ckugukmoqamgcwci;
        scqwioawomamygwa:
    }
    
    public function ymkikmwesqgscscy($siykeiywomwwuoiw, $wkkweuacukumqmya = ["\52"], $aiamqeawckcsuaou = self::GET) : ?Collection
    {
        goto qywgscciuywgmaia;
        wiqmoimycyeesqse:
        $siykeiywomwwuoiw = $this->gqaysymikgeawkqa();
        goto kaewigguiigmcsoe;
        gecscumwugkogmyq:
        $iwqgomgkuumgyswi = $siykeiywomwwuoiw->{$aiamqeawckcsuaou}($wkkweuacukumqmya);
        goto euaikwmkiyegwqae;
        iiwessuyuisaawek:
        return $iwqgomgkuumgyswi;
        goto yqukoacecemgkkay;
        wmoqoeyuaikokayu:
        $iwqgomgkuumgyswi = null;
        goto ucwwsgoweeagukyq;
        yaiwoisswowiyski:
        if (!in_array($aiamqeawckcsuaou, [self::GET, self::PLUCK])) {
            goto auucmoqsmsouecag;
        }
        goto gecscumwugkogmyq;
        qgiscekgegqwemgs:
        euiiaygickweagiw:
        goto iiwessuyuisaawek;
        kaewigguiigmcsoe:
        muooqqykkmuismwk:
        goto wmoqoeyuaikokayu;
        ucwwsgoweeagukyq:
        if (!$siykeiywomwwuoiw) {
            goto euiiaygickweagiw;
        }
        goto yaiwoisswowiyski;
        qywgscciuywgmaia:
        if ($siykeiywomwwuoiw) {
            goto muooqqykkmuismwk;
        }
        goto wiqmoimycyeesqse;
        euaikwmkiyegwqae:
        auucmoqsmsouecag:
        goto qgiscekgegqwemgs;
        yqukoacecemgkkay:
    }
    
    public function kmqmiwcimmagogoy($siykeiywomwwuoiw, $wkkweuacukumqmya = ["\x2a"], $aiamqeawckcsuaou = self::GET)
    {
        goto owsgmougoacgokmi;
        owsgmougoacgokmi:
        $qsmaqqyoggcuyukq = 0;
        goto iaqyisoeeygqwcym;
        cymigkmkskowwcei:
        $qsmaqqyoggcuyukq = $iwqgomgkuumgyswi->qsmaqqyoggcuyukq();
        goto ukecesmaioggmyoc;
        qokakquaeuigqcwy:
        if (!$iwqgomgkuumgyswi) {
            goto soyqsccuokmyuagk;
        }
        goto cymigkmkskowwcei;
        iaqyisoeeygqwcym:
        $iwqgomgkuumgyswi = $this->ymkikmwesqgscscy($siykeiywomwwuoiw, $wkkweuacukumqmya, $aiamqeawckcsuaou);
        goto qokakquaeuigqcwy;
        wcyawmskokoagwqq:
        return $qsmaqqyoggcuyukq;
        goto yseoucmemeekwkig;
        ukecesmaioggmyoc:
        soyqsccuokmyuagk:
        goto wcyawmskokoagwqq;
        yseoucmemeekwkig:
    }
    
    public function iiqauwkoiguyeawu($siykeiywomwwuoiw, $wkkweuacukumqmya = ["\52"]) : array
    {
        return $this->aocqcwaksksgckaw($siykeiywomwwuoiw, $wkkweuacukumqmya);
    }
    
    public function iykmimcgkyyoimoc($siykeiywomwwuoiw, $wkkweuacukumqmya = ["\x2a"]) : array
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
        umeiiiomksmkmoaa:
        igoseisickgqeaog:
        goto aokcewiioiiyiqeu;
        uogakawoeucgocym:
        if ($siykeiywomwwuoiw) {
            goto suggiaqykiwgkkey;
        }
        goto cyukykwcccsawesg;
        cyukykwcccsawesg:
        $siykeiywomwwuoiw = $this->gqaysymikgeawkqa();
        goto soywogweqoqmymqw;
        soywogweqoqmymqw:
        suggiaqykiwgkkey:
        goto gscsssqcacocusua;
        sqwgcyyoaismwkqs:
        
        $siykeiywomwwuoiw = $siykeiywomwwuoiw->orderBy($qgoqiacsiccwoawi, $ecysmcqmumqmaagg);
        goto umeiiiomksmkmoaa;
        gscsssqcacocusua:
        if (!$siykeiywomwwuoiw) {
            goto igoseisickgqeaog;
        }
        goto sqwgcyyoaismwkqs;
        iisykceuumgoicmc:
    }
    
    public function awkaaqmauiuwwsca($siykeiywomwwuoiw, $wkkweuacukumqmya = ["\52"], $qgoqiacsiccwoawi = null, $ecysmcqmumqmaagg = null)
    {
        goto cgmukwicwgikewei;
        oiakiumycyquagqu:
        ayoyuasegggqqosu:
        goto sycysmgqeucmisiw;
        iuasemkmccmcauoc:
        $siykeiywomwwuoiw = $this->gqaysymikgeawkqa();
        goto sscqwggcsoumagsw;
        sawkcaueekoqcaoq:
        if (!$siykeiywomwwuoiw) {
            goto mkikakaaaqwygquu;
        }
        goto omcskkiwcgiysuis;
        sycysmgqeucmisiw:
        $mksyucucyswaukig = null;
        goto sawkcaueekoqcaoq;
        cgmukwicwgikewei:
        if ($siykeiywomwwuoiw) {
            goto womgsyqqiwokqyiw;
        }
        goto iuasemkmccmcauoc;
        ykmceyuggseogcgm:
        $siykeiywomwwuoiw = $this->ewkswoqykwsuckok($siykeiywomwwuoiw, $qgoqiacsiccwoawi, $ecysmcqmumqmaagg);
        goto oiakiumycyquagqu;
        iasuykaqammykyuc:
        if (!($qgoqiacsiccwoawi && $ecysmcqmumqmaagg)) {
            goto ayoyuasegggqqosu;
        }
        goto ykmceyuggseogcgm;
        wywuimckaigaukkg:
        mkikakaaaqwygquu:
        goto ykeuwugswmeukgii;
        ykeuwugswmeukgii:
        return $mksyucucyswaukig;
        goto gaucesmmweqmemkg;
        omcskkiwcgiysuis:
        
        $mksyucucyswaukig = $siykeiywomwwuoiw->first($wkkweuacukumqmya);
        goto wywuimckaigaukkg;
        sscqwggcsoumagsw:
        womgsyqqiwokqyiw:
        goto iasuykaqammykyuc;
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
    
    public function uckwcqkkygmuquqq($aasascamegmwqmqk, $sysgmomuyiiawwcm, $gcegymooyemmaysk, $siykeiywomwwuoiw = null, $cackiyicawmkyqqg = self::EQUAL_SYMBOL, $sqeykgyoooqysmca = "\x69\156\x6e\x65\x72", $icsywsyukqcciiky = false) : ?Builder
    {
        goto kecaqcyccioyaoaa;
        cwuqamaiywoeieyw:
        
        $siykeiywomwwuoiw = $siykeiywomwwuoiw->join($aasascamegmwqmqk, $sysgmomuyiiawwcm, $cackiyicawmkyqqg, $gcegymooyemmaysk, $sqeykgyoooqysmca, $icsywsyukqcciiky);
        goto giemwgcqeogmauao;
        siawaquisuoeysqa:
        return $siykeiywomwwuoiw;
        goto mgqqigauyucewouk;
        giemwgcqeogmauao:
        osgaygqiwagaowsq:
        goto siawaquisuoeysqa;
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
        qsmmausewiocaesg:
        uuooygauoaumkemu:
        goto caseeeggigkaoswu;
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
