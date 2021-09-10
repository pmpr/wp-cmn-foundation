<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b2e4befc8c             |
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
    const ORM_FILTER_BY = "\157\162\155\137\x66\151\154\164\145\x72\x5f\142\171";
    const ORM_FILTER_VALUE = "\x6f\x72\155\137\x66\151\154\x74\x65\x72\x5f\166\x61\x6c\x75\x65";
    use SingletonTrait, TranslateTrait, ComponentTrait, ActionTrait, FieldTrait, HookTrait, AjaxTrait, LogTrait;
    
    protected ?int $id = 0;
    
    public $timestamps = true;
    
    protected ?array $views = [];
    
    protected ?array $fields = [];
    
    protected bool $canDelete = true;
    
    protected ?Register $register = null;
    
    protected ?string $labelKey = "\x74\151\164\154\x65";
    
    protected ?array $validationErrors = [];
    
    public function __construct($aokagokqyuysuksm = null, ?array $siquossayskcwkea = [])
    {
        goto yamoiggaeugmgkku;
        wcoqiwuusoeqiqwi:
        if (is_numeric($aokagokqyuysuksm)) {
            goto akoiqkoqmmmcieug;
        }
        goto oqwyemgwoossauyk;
        qkkqiagwgaoyauki:
        wp_die("\x6e\141\155\145\40\151\x73\x20\156\x6f\x74\x20\x64\x65\146\x69\x6e\x65\x20\x66\x6f\x72\40\x6d\157\144\145\154\x3a\40" . self::uqggkiomyiceyooa());
        goto oyywywoqaqcykucs;
        cwcmwogseemgqgqq:
        akoiqkoqmmmcieug:
        goto yuoyackaoigyyyso;
        ccqgkeesikyegcik:
        $aiqugsyouyikgawm->yuaecocyyyqqgsyw($this->oyeskqayoscwciem())->uwyqgmcuomgeccgy($mgcmmwqwguicsews);
        goto aakwscykmyyykoms;
        kwaqakoogeiacmwi:
        if (!$aiqugsyouyikgawm instanceof Updater) {
            goto gikaiicgqyueeoco;
        }
        goto ccqgkeesikyegcik;
        miaiggsoiaekmqwy:
        static::$resolver = new Resolver();
        goto suoymucmyegewkmu;
        iqeqqwcmaiqakawc:
        
        $mgcmmwqwguicsews = $this->getConnection();
        goto gioqkcywauuckmua;
        yamoiggaeugmgkku:
        $this->ckgmycmaukqgkosk();
        goto eqekaoaioiykuaiw;
        mwskgsimqagmkcgq:
        $suckquwcuiuyiogc = ManipulateSetting::cmaecekuqkwmemms("\x55\x50\x44\x41\124\105\137\117\x52\x4d\x5f\x44\x41\124\x41\102\101\123\105", 0);
        goto mkuigmcgkawyawee;
        aakwscykmyyykoms:
        gikaiicgqyueeoco:
        goto iiuawywwoaeyauge;
        kcqieuukskyiywss:
        parent::__construct($siquossayskcwkea);
        goto wukuisoeoeomgegu;
        oqwyemgwoossauyk:
        $this->gyqeoeemeemicgqi();
        goto cwcmwogseemgqgqq;
        mkuigmcgkawyawee:
        if (!(!ManipulateAjax::mcgoysmkqsqooceq() && ($suckquwcuiuyiogc || !$this->gqaysymikgeawkqa()))) {
            goto akcakssqcqcouwew;
        }
        goto ouqwmaaskykywyqo;
        yuoyackaoigyyyso:
        cgasgmiiqegqesic:
        goto kcqieuukskyiywss;
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
        oyywywoqaqcykucs:
        muwyuiikuywigwso:
        goto iqeqqwcmaiqakawc;
        uqagqomggiacosqm:
        $this->ewaqwooqoqmcoomi();
        goto mwskgsimqagmkcgq;
        ouqwmaaskykywyqo:
        $mgcmmwqwguicsews->cymcyywycwkawmsi();
        goto agqmoymkiswqswqo;
        qoiuwyogucoeaoew:
        if ($ymqmyyeuycgmigyo) {
            goto muwyuiikuywigwso;
        }
        goto qkkqiagwgaoyauki;
        eqekaoaioiykuaiw:
        $ymqmyyeuycgmigyo = $this->miwqiiqeegeqcwis();
        goto qoiuwyogucoeaoew;
        wukuisoeoeomgegu:
    }
    public function wigskegsqequoeks()
    {
        $ymqmyyeuycgmigyo = $this->miwqiiqeegeqcwis();
        $this->qcsmikeggeemccuu("\x69\156\151\164", [$this, "\x63\147\141\155\x75\x77\151\161\163\147\167\163\151\153\153\x6d"])->koaegcswmcqsiykq($this->ygyygikyocoymgaw("{$ymqmyyeuycgmigyo}\x5f\147\x65\164\137\x6c\x69\163\x74"), [$this, "\143\x6b\147\171\x65\147\x6b\165\x73\155\x75\x79\x6d\151\155\x6f"])->qcsmikeggeemccuu($this->ygyygikyocoymgaw("{$ymqmyyeuycgmigyo}\137\144\157\137\x62\165\x6c\153\137\141\x63\x74\151\157\156"), [$this, "\x6d\171\x79\x71\167\x79\163\x77\167\x65\163\167\151\165\x77\x75"], 10, 2)->qcsmikeggeemccuu($this->ygyygikyocoymgaw("{$ymqmyyeuycgmigyo}\137\x64\x6f\137\163\151\x6e\147\154\x65\x5f\x61\143\164\151\157\156"), [$this, "\x6b\x6f\163\157\141\x6f\x75\x6f\x67\x6b\145\141\157\x6d\167\x6f"], 10, 2);
    }
    public function kgquecmsgcouyaya()
    {
        $ymqmyyeuycgmigyo = $this->miwqiiqeegeqcwis();
        $this->cecaguuoecmccuse($this->ygyygikyocoymgaw("{$ymqmyyeuycgmigyo}\137\155\x61\156\141\x67\145\137\166\x69\145\x77\x73"), [$this, "\x71\145\x6f\167\x63\x75\x63\165\157\x61\161\171\x71\167\x75\167"])->cecaguuoecmccuse($this->ygyygikyocoymgaw("{$ymqmyyeuycgmigyo}\x5f\155\x61\156\141\x67\x65\137\143\x6f\154\x75\x6d\156\163"), [$this, "\x6b\x67\x6f\x67\157\x63\143\141\151\x6d\165\x79\x77\163\157\171"])->cecaguuoecmccuse($this->ygyygikyocoymgaw("{$ymqmyyeuycgmigyo}\x5f\x6d\x61\x6e\x61\x67\145\137\x73\x6f\162\164\141\142\154\145\137\143\x6f\154\x75\x6d\x6e\x73"), [$this, "\170\x65\153\x63\x77\x65\143\147\x75\171\x6b\x6d\x6d\x67\147\157"])->cecaguuoecmccuse($this->ygyygikyocoymgaw("{$ymqmyyeuycgmigyo}\x5f\162\x6f\x77\x5f\x61\143\x74\x69\157\156\163"), [$this, "\x6d\143\x61\147\x67\155\x75\x79\x61\155\147\x73\157\x6d\x61\141"], 10, 4)->cecaguuoecmccuse($this->ygyygikyocoymgaw("{$ymqmyyeuycgmigyo}\x5f\x62\165\154\x6b\x5f\x61\x63\164\x69\157\x6e\x73"), [$this, "\x6d\x73\x79\x79\x65\x73\167\145\x6f\x6f\x77\143\165\165\157\165"], 10, 2)->cecaguuoecmccuse($this->ygyygikyocoymgaw("\157\x72\155\x5f\x76\x69\145\167\137\163\x68\x6f\167\137{$ymqmyyeuycgmigyo}\x5f\164\141\142\163"), [$this, "\x75\165\x79\x6d\153\x69\171\x67\151\165\141\x69\x79\x65\155\141"], 10, 2)->cecaguuoecmccuse($this->ygyygikyocoymgaw("{$ymqmyyeuycgmigyo}\137\x6d\x61\156\x61\147\x65\x5f\143\165\x73\x74\x6f\x6d\137\143\157\x6c\x75\x6d\156"), [$this, "\x71\x65\x77\155\153\x75\167\x79\155\x71\153\153\x63\155\x71\x6d"], 10, 5)->cecaguuoecmccuse($this->ygyygikyocoymgaw("{$ymqmyyeuycgmigyo}\137\x6d\x61\x6e\x61\x67\145\x5f\x65\144\x69\164\x5f\x66\x69\x65\154\x64\137\x73\x68\157\167"), [$this, "\146\x61\x63\161\x77\161\x6d\x67\143\x6f\147\167\x73\157\153\x77"], 10, 4)->cecaguuoecmccuse($this->ygyygikyocoymgaw("{$ymqmyyeuycgmigyo}\137\155\x61\x6e\x61\x67\x65\x5f\145\x64\151\164\137\146\x69\x65\x6c\x64\137\166\x61\x6c\165\x65"), [$this, "\157\x65\161\x73\x69\x65\x6d\x61\x77\157\147\167\167\x79\155\x6f"], 10, 4);
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
        iisieuaeyiqwckou:
        gsimeiqkoyqkuecq:
        goto oskwkeaemiqcaqkc;
        kiqmcymowosckmii:
        gqywcowiigceimaw:
        goto iaygaasesyymwgss;
        ioacywuoyuskqmwy:
        if (!$vkkeimekwwkyiyyc) {
            goto geugsymgsiuuqccg;
        }
        goto bgoygegmogcmeaou;
        eygqeoiskweuiuqi:
        $vkkeimekwwkyiyyc = null;
        goto uykwmucgoywoesui;
        iamooqskosymqsmw:
        eyuoecmogqwkmomi:
        goto wwccoougkywoaoui;
        iwosouqsesoqcska:
        geugsymgsiuuqccg:
        goto iacwyogogoccmwsg;
        oskwkeaemiqcaqkc:
        $vkkeimekwwkyiyyc = $aiowsaccomcoikus;
        goto kiqmcymowosckmii;
        wwccoougkywoaoui:
        if (in_array($aiowsaccomcoikus, $vkkeimekwwkyiyyc)) {
            goto gsimeiqkoyqkuecq;
        }
        goto eygqeoiskweuiuqi;
        awgaewwsskasueke:
        $vkkeimekwwkyiyyc = $aiowsaccomcoikus;
        goto cgmcwkmmcmmkiooc;
        mgwgiesscqoaqcau:
        $vkkeimekwwkyiyyc = $this->timestamps;
        goto ioacywuoyuskqmwy;
        uykwmucgoywoesui:
        goto gqywcowiigceimaw;
        goto iisieuaeyiqwckou;
        iaygaasesyymwgss:
        quewwumogiocouii:
        goto iwosouqsesoqcska;
        cgmcwkmmcmmkiooc:
        goto quewwumogiocouii;
        goto iamooqskosymqsmw;
        iacwyogogoccmwsg:
        return $vkkeimekwwkyiyyc;
        goto wqmwcuggcisqieao;
        bgoygegmogcmeaou:
        if (is_array($vkkeimekwwkyiyyc)) {
            goto eyuoecmogqwkmomi;
        }
        goto awgaewwsskasueke;
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
        usmagcaocwiugqum:
        $oammesyieqmwuwyi = [];
        goto sikmqkecsiyciaei;
        umccwcqwkoiaakmu:
        foreach ($oammesyieqmwuwyi as $igqsaukqcqscimok) {
            goto swkeiggkawwgewuw;
            miigqygoawqmkkqm:
            if (!$icwicymcioeyeyek["\155\x61\x72\153\x75\160"]) {
                goto ccyiggckemwgooco;
            }
            goto yywwaaiicukuwcao;
            qcwkymcgqacaaywc:
            umamqqwcoewcigew:
            goto wmcucyuieqgqisis;
            kuimgwmkcgcoecko:
            $aokagokqyuysuksm = $igqsaukqcqscimok->{$ceiwsaacewygcsqg};
            goto oaskqsoyesmmeaew;
            eykiuqsamowqykam:
            ccyiggckemwgooco:
            goto ywqouwqomiqwoquu;
            ywqouwqomiqwoquu:
            $qeiakyocuggicwsy[$aokagokqyuysuksm] = $sogksuscggsicmac;
            goto qcwkymcgqacaaywc;
            yywwaaiicukuwcao:
            $sogksuscggsicmac["\155\x61\162\x6b\165\160"] = $this->iuygowkemiiwqmiw($icwicymcioeyeyek["\164\x65\155\160\x6c\x61\x74\x65\137\x74\171\x70\145"], ["\x49\104" => $aokagokqyuysuksm, self::TITLE => $pkyyagewkiyckmwy, "\x6f\x62\152\x65\x63\x74\137\x74\171\160\145" => $this->oyeskqayoscwciem()->giiayuqckuiecosm()], ["\143\x6c\x61\x73\163" => self::class]);
            goto eykiuqsamowqykam;
            aacaoywsaqscgyua:
            $sogksuscggsicmac = ["\x49\104" => $aokagokqyuysuksm, self::TEXT => $pkyyagewkiyckmwy, self::VALUE => $aokagokqyuysuksm];
            goto miigqygoawqmkkqm;
            swkeiggkawwgewuw:
            if (!$igqsaukqcqscimok) {
                goto umamqqwcoewcigew;
            }
            goto gaiaucesmcqgqwac;
            oaskqsoyesmmeaew:
            $pkyyagewkiyckmwy = $this->uikgwcuascgeissw($igqsaukqcqscimok);
            goto aacaoywsaqscgyua;
            wmcucyuieqgqisis:
            mssaawaiaimogowg:
            goto qwsmiaegmcwuskwi;
            gaiaucesmcqgqwac:
            $ceiwsaacewygcsqg = $this->kumuygiiqswoyasy();
            goto kuimgwmkcgcoecko;
            qwsmiaegmcwuskwi:
        }
        goto ekgkiioywougquka;
        wmycwscioqackeig:
        $siykeiywomwwuoiw = $this->gqaysymikgeawkqa();
        goto wammkmaqucqagqww;
        cquyuwsisgqscemm:
        $qwcmueausqgiwigy = $icwicymcioeyeyek[self::SEARCH];
        goto imykswegcuekqwio;
        wammkmaqucqagqww:
        if (!$siykeiywomwwuoiw) {
            goto yueosioyegouuwqo;
        }
        goto iuooqassskiyeemo;
        smkakiyekkqoggao:
        $oammesyieqmwuwyi = $gmwiogsuisuoiwqu[self::ITEMS];
        goto zggweikegkcgkmma;
        gcsosokicycukoyc:
        
        $oammesyieqmwuwyi[] = $siykeiywomwwuoiw->find($aokagokqyuysuksm);
        goto seqammocqkyswaim;
        yyyyawaqcowsgqcs:
        $icwicymcioeyeyek = ManipulateFormat::omaawkkwwyesqwcc(ManipulateServer::ayueggmoqeeukqmq(), ["\x69\144" => false, "\160\141\147\x65" => 1, "\x61\x72\x67\x73" => [], "\x69\x74\145\x6d\163" => [], "\163\x65\141\x72\143\150" => null, "\155\141\162\153\165\x70" => false, "\164\x65\155\x70\154\141\x74\145\137\x74\171\x70\145" => "\141\x6a\x61\170\137\x72\145\163\165\154\164"]);
        goto usmagcaocwiugqum;
        wyyowcsciaqkuiuq:
        $this->uaggqsoeugksgooc(true, $qeiakyocuggicwsy);
        goto imquwacukaswoyka;
        eokikuciuqkyauum:
        $siykeiywomwwuoiw = $this->kqewyqqqiyiouaou([$this->ukqioecasimmeygm() => [self::OPERATOR => self::LIKE, self::VALUE => "\x25{$qwcmueausqgiwigy}\45"]], $siykeiywomwwuoiw);
        goto ykuqeyogsasokqis;
        imykswegcuekqwio:
        if (!$qwcmueausqgiwigy) {
            goto qsyqcokomswykyso;
        }
        goto eokikuciuqkyauum;
        iuooqassskiyeemo:
        if ($aokagokqyuysuksm = $icwicymcioeyeyek[self::ID]) {
            goto issgmmkcgesyeoas;
        }
        goto cquyuwsisgqscemm;
        mqaamqyoywyekiko:
        
        $gmwiogsuisuoiwqu = $this->getPaginateItems($siykeiywomwwuoiw, [self::PAGE => $icwicymcioeyeyek[self::PAGE]]);
        goto smkakiyekkqoggao;
        zggweikegkcgkmma:
        goto yeiicwscguyokwyu;
        goto yisoawmmammassqk;
        coskmuqsawiaeyqg:
        yueosioyegouuwqo:
        goto umccwcqwkoiaakmu;
        sikmqkecsiyciaei:
        $qeiakyocuggicwsy = [];
        goto wmycwscioqackeig;
        ekgkiioywougquka:
        giuoqsumkimmuaya:
        goto wyyowcsciaqkuiuq;
        yisoawmmammassqk:
        issgmmkcgesyeoas:
        goto gcsosokicycukoyc;
        seqammocqkyswaim:
        yeiicwscguyokwyu:
        goto coskmuqsawiaeyqg;
        imquwacukaswoyka:
    }
    
    public function aeggeuqycwawueqy(Builder $siykeiywomwwuoiw, array $ywmkwiwkosakssii = []) : array
    {
        try {
            goto gsggsmmwcmkgyyss;
            uieuouugckwokske:
            
            $weyoqgcesqgeusiu = $ymiyawysimukkoso->perPage();
            goto seaiwkkgyyegiyug;
            sueeqeioeiwkscao:
            
            $uuwmqqqiwksuaise = $ymiyawysimukkoso->total();
            goto mmesoisgqucowwms;
            kmcygqkmwcgwamkw:
            $oammesyieqmwuwyi = $this->cwgkcyyaymmsomqa($oammesyieqmwuwyi);
            goto gysmigyakgaakeoy;
            uwmcugkwqwcuqqsq:
            if ($oammesyieqmwuwyi) {
                goto smksoismyouykeoa;
            }
            goto cycasoiysmksuwqk;
            muimagegskoisckc:
            smksoismyouykeoa:
            goto yicaqocukqoauqgc;
            yweucowesgsoewyc:
            
            $ymiyawysimukkoso = $siykeiywomwwuoiw->paginate($ywmkwiwkosakssii[self::PER_PAGE] ?: 10, $ywmkwiwkosakssii[self::COLUMNS] ?: ["\52"], $ywmkwiwkosakssii["\160\141\147\145\137\156\x61\x6d\x65"] ?: self::PAGE, $ywmkwiwkosakssii[self::PAGE] ?: 1);
            goto ikygockuuyimmmwk;
            gsggsmmwcmkgyyss:
            $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\x70\141\147\145\137\x6e\141\x6d\145" => self::PAGE, self::PAGE => 1, self::DEFAULT => [], self::COLUMNS => ["\52"], "\146\x69\154\x74\x65\x72\137\x76\141\154\x75\x65" => true, self::PER_PAGE => ManipulateSetting::omkaowmygoqwsywq()]);
            goto yweucowesgsoewyc;
            mmesoisgqucowwms:
            
            $qcugmkuyweqqyggk = $ymiyawysimukkoso->lastPage();
            goto uieuouugckwokske;
            yicaqocukqoauqgc:
            if (!$ywmkwiwkosakssii["\146\x69\x6c\x74\x65\162\x5f\x76\141\x6c\165\145"]) {
                goto qwgkwokcyocqiyee;
            }
            goto kmcygqkmwcgwamkw;
            gysmigyakgaakeoy:
            qwgkwokcyocqiyee:
            goto sueeqeioeiwkscao;
            cycasoiysmksuwqk:
            $oammesyieqmwuwyi = ManipulateArray::get($ywmkwiwkosakssii, self::DEFAULT);
            goto muimagegskoisckc;
            ikygockuuyimmmwk:
            
            $oammesyieqmwuwyi = $ymiyawysimukkoso->items();
            goto uwmcugkwqwcuqqsq;
            seaiwkkgyyegiyug:
        } catch (Exception $wgaoewqkwgomoaai) {
            goto maeccckgcsaaumkw;
            gcoeaokkagaaeuse:
            $uuwmqqqiwksuaise = 0;
            goto kcqueaewmayywqeq;
            maeccckgcsaaumkw:
            $oammesyieqmwuwyi = [];
            goto gcoeaokkagaaeuse;
            uagsgicwwcakecwq:
            $qcugmkuyweqqyggk = 0;
            goto qocgmocqauaaekii;
            kcqueaewmayywqeq:
            $weyoqgcesqgeusiu = 0;
            goto uagsgicwwcakecwq;
            qocgmocqauaaekii:
        }
        return $this->oosqweumiyeayasy($oammesyieqmwuwyi, $uuwmqqqiwksuaise, $qcugmkuyweqqyggk, $weyoqgcesqgeusiu);
    }
    
    public function oosqweumiyeayasy($oammesyieqmwuwyi = [], $uuwmqqqiwksuaise = 1, $ocqawgquwsqioses = 1, $weyoqgcesqgeusiu = 10) : array
    {
        return ["\x70\x61\147\151\x6e\x61\x74\x69\157\156" => ["\x74\x6f\x74\141\154" => $uuwmqqqiwksuaise, "\160\141\147\x65\163" => $ocqawgquwsqioses, self::PER_PAGE => $weyoqgcesqgeusiu], self::ITEMS => $oammesyieqmwuwyi];
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
        gskaqcgccswmuqsy:
        uekueeyqaackuwao:
        goto uccuykggugcmiyam;
        eieiwacwqkgsewai:
        if (!$vkkeimekwwkyiyyc) {
            goto uaiiuywoakccusge;
        }
        goto gokwmwmaumiwscua;
        saycoceqywiekqsi:
        return $oyuikeusicgqgwak;
        goto sqaowueaequoigsa;
        eauiumeeyckucuyc:
        $vkkeimekwwkyiyyc = [self::CREATED_AT, self::UPDATED_AT];
        goto gigiwwouakeekoim;
        gigiwwouakeekoim:
        uauuoyigkmqoasaq:
        goto esuuweysgwuwcuue;
        uccuykggugcmiyam:
        uaiiuywoakccusge:
        goto saycoceqywiekqsi;
        esuuweysgwuwcuue:
        if (!is_array($vkkeimekwwkyiyyc)) {
            goto uekueeyqaackuwao;
        }
        goto ykuycowuguumseuu;
        qugsgsscqyikugyc:
        kmwwqgiacsoksgcy:
        goto gskaqcgccswmuqsy;
        ysiwoiqiaosqoikm:
        $vkkeimekwwkyiyyc = $this->timestamps;
        goto eieiwacwqkgsewai;
        ykuycowuguumseuu:
        foreach ($vkkeimekwwkyiyyc as $yiuogaeewyockeak) {
            goto aemoyqueimayqcaw;
            aemoyqueimayqcaw:
            $aaqqkgyougeiueyq = self::ceqawoymcymsaeqo($yiuogaeewyockeak)->jyumyyugiwwiqomk(5000);
            goto woaoeyaowkuukkqm;
            icmsyimgycuocisu:
            akieeaeqiwugimie:
            goto wassyiqsqasaoiau;
            iaockwkwaiqgeuyu:
            ugqucegcucyyayga:
            goto oeeasouoaaoaaemm;
            oeeasouoaaoaaemm:
            $oyuikeusicgqgwak[] = $aaqqkgyougeiueyq;
            goto icmsyimgycuocisu;
            woaoeyaowkuukkqm:
            switch ($yiuogaeewyockeak) {
                case self::CREATED_AT:
                    $aaqqkgyougeiueyq->gswweykyogmsyawy(__("\103\162\145\141\164\145\x64\x20\x41\164", PR__CMN__FOUNDATION));
                    goto ugqucegcucyyayga;
                case self::UPDATED_AT:
                    $aaqqkgyougeiueyq->gswweykyogmsyawy(__("\125\160\x64\x61\x74\145\144\x20\101\164", PR__CMN__FOUNDATION));
                    goto ugqucegcucyyayga;
            }
            goto mmqkuymyyycywmqu;
            mmqkuymyyycywmqu:
            sequgigsgkqaikmq:
            goto iaockwkwaiqgeuyu;
            wassyiqsqasaoiau:
        }
        goto qugsgsscqyikugyc;
        sqaowueaequoigsa:
    }
    public final function ewaqwooqoqmcoomi()
    {
        
        $this->oyeskqayoscwciem()->ckaemmoueyosqqkq(ManipulateArray::yaeiiwwyckwugsem($this->eucukwckumgiyyww()));
    }
    public final function cgamuwiqsgwsikkm()
    {
        goto yuoyeeuqqaockyqw;
        awikkaqmmuqkukma:
        ugcyukgoaiiysymc:
        goto uckeuuaqimqamuyc;
        qcywwqceiqogcoyo:
        foreach ($yyksucsgisomecgg->aioqieywgykaaoec() as $qqomumygoacsmsie => $ywmkwiwkosakssii) {
            goto asueqykmkoaimguq;
            iyocimuyeemkaaso:
            if (is_array($ywmkwiwkosakssii)) {
                goto meegaqaesckqmyec;
            }
            goto isaouwiaamimceeg;
            emgssiqceagusgyg:
            yuyiqaawwgaywgqo:
            goto ysusaysykymegguk;
            isaouwiaamimceeg:
            if (!($ywmkwiwkosakssii instanceof View || is_subclass_of($ywmkwiwkosakssii, View::class))) {
                goto emqmqkeygumaasam;
            }
            goto kcwyeqmysgqkoqcm;
            yskswskmsgoouyco:
            $this->ecmiqywsauuoccwo($qqomumygoacsmsie, $ewgsciccscsweqik);
            goto oaciskoioaecgwee;
            wamgcqkaieummksu:
            emqmqkeygumaasam:
            goto mwgaaiaswusakkaq;
            oeosugomyqyekmuq:
            kkogaccoqmsmmkmo:
            goto emgssiqceagusgyg;
            ysusaysykymegguk:
            if (!$ewgsciccscsweqik) {
                goto aosasoogesueygak;
            }
            goto yskswskmsgoouyco;
            csskguekqcwcmocu:
            scccyaiaggeasgqg:
            goto mmusoowesqcmuqew;
            asueqykmkoaimguq:
            $ewgsciccscsweqik = null;
            goto iyocimuyeemkaaso;
            kcwyeqmysgqkoqcm:
            $this->ecmiqywsauuoccwo($qqomumygoacsmsie, $ywmkwiwkosakssii);
            goto wamgcqkaieummksu;
            mwgaaiaswusakkaq:
            goto scccyaiaggeasgqg;
            goto ugowqoisymsioeye;
            mmusoowesqcmuqew:
            yqkyoaiwcyqeaqwu:
            goto wkwkeicwosmkcygc;
            oaciskoioaecgwee:
            aosasoogesueygak:
            goto csskguekqcwcmocu;
            ugowqoisymsioeye:
            meegaqaesckqmyec:
            goto gooqkmwgsmseuiwq;
            gooqkmwgsmseuiwq:
            switch ($qqomumygoacsmsie) {
                case "\x69\156\x64\145\x78":
                    goto ysaumykuimqigeqa;
                    eyskqaccgeomqmyw:
                    if (!$ikugycsiyegwoiay) {
                        goto qmiqicgscsuoyeqo;
                    }
                    goto uiowwckamqucksim;
                    icawmkaswkmwicsa:
                    goto yuyiqaawwgaywgqo;
                    goto imsgusweocmiyygi;
                    wscikmsmwmocsqeu:
                    qmiqicgscsuoyeqo:
                    goto icawmkaswkmwicsa;
                    uiowwckamqucksim:
                    $this->icyamyikwyaaoqya("\141\144\x64", $yyksucsgisomecgg->uikgwcuascgeissw("\x61\x64\x64\137\156\x65\x77\x5f\x69\164\145\x6d"), ["\150\162\x65\x66" => $ikugycsiyegwoiay]);
                    goto wscikmsmwmocsqeu;
                    ysaumykuimqigeqa:
                    $ewgsciccscsweqik = new Index($this, $ywmkwiwkosakssii);
                    goto oegaywiwywuyksaq;
                    oegaywiwywuyksaq:
                    $ikugycsiyegwoiay = $this->acsiseaeysswwqkw();
                    goto eyskqaccgeomqmyw;
                    imsgusweocmiyygi:
                case "\x65\144\151\164":
                case "\x61\144\x64":
                    goto igckskemqkqueukg;
                    mioqycmmeucswoms:
                    kmeekqukcecuscye:
                    goto mioaoacqueiyueak;
                    wgmeyycmqioioaqc:
                    if (!in_array($suaemuyiacqyugsm, [$ymqmyyeuycgmigyo, "\x65\144\x69\164\x5f{$ymqmyyeuycgmigyo}", "\x61\x64\x64\x5f{$ymqmyyeuycgmigyo}", "\163\x68\x6f\167\x5f{$ymqmyyeuycgmigyo}"])) {
                        goto weuueokkumksgaeo;
                    }
                    goto ykiyuciecskusaae;
                    oaseseemoaqcgqeu:
                    $ewgsciccscsweqik = new Edit($this, $ywmkwiwkosakssii);
                    goto kuymgsewmeoimeuq;
                    pssquaaiioygwqoq:
                    $this->aygiawwcgymgyaya();
                    goto ucugeysomcyceyos;
                    imaiuooqwwokwemw:
                    qwueqigcisoogaec:
                    goto mioqycmmeucswoms;
                    kisuswmyqsocukgk:
                    goto yuyiqaawwgaywgqo;
                    goto wisaekiyyweeemuy;
                    igckskemqkqueukg:
                    $ymqmyyeuycgmigyo = $yyksucsgisomecgg->aakmagwggmkoiiyu();
                    goto wgmeyycmqioioaqc;
                    keyiswqkmqqquosw:
                    $eaoumsseceiowgsk->asumqyigwsqmyeoc($this);
                    goto imaiuooqwwokwemw;
                    gimsiyauegmikyka:
                    weuueokkumksgaeo:
                    goto kisuswmyqsocukgk;
                    ykiyuciecskusaae:
                    if ($uieukiskgwkouwyi) {
                        goto kmeekqukcecuscye;
                    }
                    goto pssquaaiioygwqoq;
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
                    ucugeysomcyceyos:
                    $uieukiskgwkouwyi = true;
                    goto momgmqemgcasyuqq;
                    mioaoacqueiyueak:
                    if (!$this->ugmceccgwaaaigiy()) {
                        goto csoeisssoumqqeoa;
                    }
                    goto oaseseemoaqcgqeu;
                    wisaekiyyweeemuy:
                case "\x73\150\157\167":
                    $ewgsciccscsweqik = new Show($this, $ywmkwiwkosakssii);
                    goto yuyiqaawwgaywgqo;
                default:
                    $ewgsciccscsweqik = new View($this, $ywmkwiwkosakssii);
                    goto yuyiqaawwgaywgqo;
            }
            goto oeosugomyqyekmuq;
            wkwkeicwosmkcygc:
        }
        goto giiucsyqgcooaima;
        amkcomscieegkygc:
        if (!(strpos($suaemuyiacqyugsm, $yyksucsgisomecgg->aakmagwggmkoiiyu()) !== false)) {
            goto eqmauwqqowsiwaue;
        }
        goto uugekiumuwemyuyc;
        giiucsyqgcooaima:
        waycokyiesmqgqcg:
        goto awikkaqmmuqkukma;
        qkiqquymecyoouki:
        $suaemuyiacqyugsm = ManipulateServer::get(self::PAGE);
        goto iqukigoyiqgcggue;
        kygcymkakucoeock:
        global $orm_model;
        goto qkiqquymecyoouki;
        iqukigoyiqgcggue:
        $yyksucsgisomecgg = $this->oyeskqayoscwciem();
        goto amkcomscieegkygc;
        uugekiumuwemyuyc:
        $orm_model = $this;
        goto qoameasiqwaqgmca;
        qoameasiqwaqgmca:
        eqmauwqqowsiwaue:
        goto osoqssymqqoqcuky;
        yuoyeeuqqaockyqw:
        
        if (ManipulateAjax::mcgoysmkqsqooceq()) {
            goto ugcyukgoaiiysymc;
        }
        goto kygcymkakucoeock;
        osoqssymqqoqcuky:
        $uieukiskgwkouwyi = false;
        goto qcywwqceiqogcoyo;
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
        $qqomumygoacsmsie = str_replace("\x5f{$ymqmyyeuycgmigyo}", '', ManipulateServer::get(self::PAGE));
        goto yayykakkyeoieicm;
        yuiouamaogkkqmck:
        $qqomumygoacsmsie = "\151\x6e\x64\x65\x78";
        goto mmwqwowqcaseyyki;
        yayykakkyeoieicm:
        if (!($qqomumygoacsmsie === $ymqmyyeuycgmigyo)) {
            goto mieeugiewckceagc;
        }
        goto yuiouamaogkkqmck;
        uqkqmseoeemyaqck:
        $ymqmyyeuycgmigyo = $this->miwqiiqeegeqcwis();
        goto cceyoumkiicaguio;
        mmwqwowqcaseyyki:
        mieeugiewckceagc:
        goto wsckacayikksiswo;
        qiawociayswicugw:
    }
    
    public function uqiykqoyaqymcues() : bool
    {
        return $this->hkwssiimkcysaiyo() == "\145\144\x69\x74";
    }
    
    public function wkcuasmkgoscaiay() : bool
    {
        return $this->hkwssiimkcysaiyo() == "\x73\x68\x6f\167";
    }
    
    public function wmwguecgowcscues() : bool
    {
        return $this->hkwssiimkcysaiyo() == "\151\156\x64\145\x78";
    }
    
    public final function aygiawwcgymgyaya() : ?array
    {
        goto yoaewquyogiimyic;
        yoaewquyogiimyic:
        $ikgwqyuyckaewsow = $this->kssgsuewkcwgiksa();
        goto wmcmqmmcweecqmsw;
        cicegcoqyuoggiwy:
        return $this->ugmceccgwaaaigiy();
        goto ugcwqacogqoswyse;
        qsmoiwqcuamyuwyu:
        ngagwiymmmycgscu:
        goto cicegcoqyuoggiwy;
        wmcmqmmcweecqmsw:
        $qssskwiqeumgkago = $this->oyeskqayoscwciem()->aeosueemgsygqese();
        goto aakoeuuosouyeemc;
        aakoeuuosouyeemc:
        foreach ($ikgwqyuyckaewsow as $uusmaiomayssaecw => $uiewakwqscemywuo) {
            goto cksoeiwawiygyiyg;
            aqaaqeucgoegeeuk:
            if (!in_array($eewwgseqamqiouyq, ["\145\156\165\x6d"])) {
                goto kkacggiosquqagew;
            }
            goto wycmcqaauqkgegau;
            yuqisiwgqacgmsym:
            mquyemuqcqeassqc:
            goto wickgagwgqqsomum;
            ysoqeuugiuswykyu:
            $sqeykgyoooqysmca = "\143\150\145\x63\x6b\142\x6f\170";
            goto usmuqsuwuueogimc;
            qcweoyigoaeacsow:
            kkacggiosquqagew:
            goto iyceygqsmokgmams;
            gwyseusuceuwwccu:
            goto sgikkoswwyesqomo;
            goto icouowaoycuuisqe;
            qmoisuweiskkekca:
            if ($aiowsaccomcoikus) {
                goto gkoyqgogsukuowqi;
            }
            goto wywwieycqskuqcwc;
            gkwuewqmqeswqukg:
            $sqeykgyoooqysmca = "\144\141\x74\145";
            goto sagemooicmgceiug;
            ueqsiwuwumoqgsck:
            $eewwgseqamqiouyq = $aaqqkgyougeiueyq->gueasuouwqysmomu();
            goto iikgiaocummweiga;
            owaimkmgemoqewmm:
            kqkymieyyqaoeymw:
            goto ysoqeuugiuswykyu;
            gsusqquicmukegcs:
            $sqeykgyoooqysmca = ManipulateArray::get($uiewakwqscemywuo, "\x74\171\x70\145");
            goto wcsysckgigeykkwy;
            wywwieycqskuqcwc:
            throw new UnexpectedValueException("{$uusmaiomayssaecw}\40\151\x73\x20\156\157\164\x20\x61\x20\x76\141\x6c\x69\x64\x20\x66\151\x65\x6c\144\56");
            goto gwyseusuceuwwccu;
            uqcwyyiykmwygeau:
            goto qcceyyqiuiqcyqqm;
            goto yeiokcoikcysyimu;
            ocmwuquguuqigose:
            switch ($eewwgseqamqiouyq) {
                case "\145\156\165\155":
                    goto gwksywaoeowkesei;
                    emagssesowicacoa:
                    amgsicqmemeuuaem:
                    goto cauqmacqkssciwyq;
                    gwksywaoeowkesei:
                    if (!$aiowsaccomcoikus instanceof BSSelect) {
                        goto amgsicqmemeuuaem;
                    }
                    goto sgkwaiuukkaqyqki;
                    cauqmacqkssciwyq:
                    goto bagkewioewygysea;
                    goto gusgywuaimwooawc;
                    sgkwaiuukkaqyqki:
                    $aiowsaccomcoikus->acauweqyyugwisqc($aaqqkgyougeiueyq->gkwkqmwweiawigae());
                    goto emagssesowicacoa;
                    gusgywuaimwooawc:
                case "\x66\157\x72\145\x69\x67\156":
                    goto acmgueaoaaweiqqu;
                    kgikoagqwkuocesg:
                    goto bagkewioewygysea;
                    goto skaayekywasksoug;
                    acmgueaoaaweiqqu:
                    if (!$aiowsaccomcoikus instanceof BSSelect) {
                        goto uugwoygiyecgymgw;
                    }
                    goto awaaowoqskgokwiy;
                    awaaowoqskgokwiy:
                    $aiowsaccomcoikus->wkqyoukciomqiyew()->oeewiaacscgyamai($aaqqkgyougeiueyq->uecyuoauykiqqkey());
                    goto uqiekawkwcegsumy;
                    uqiekawkwcegsumy:
                    uugwoygiyecgymgw:
                    goto kgikoagqwkuocesg;
                    skaayekywasksoug:
            }
            goto kmqusaiaiogecyiy;
            acsigwcaesyyoiie:
            if (in_array($eewwgseqamqiouyq, ["\144\141\x74\145", "\x64\141\x74\145\164\x69\x6d\145"])) {
                goto augqweqsqioesmim;
            }
            goto aqaaqeucgoegeeuk;
            icouowaoycuuisqe:
            gkoyqgogsukuowqi:
            goto ocmwuquguuqigose;
            akwwuuiykscgicuw:
            $qqgeiaygkaoyccig = ["\x69\x64" => $uusmaiomayssaecw, "\156\141\x6d\x65" => $aaqqkgyougeiueyq->qcgakseyaikigqco()];
            goto ueqsiwuwumoqgsck;
            iyaugygcsmqqqkmo:
            ssesmiwwmsayksum:
            goto cieumoqayigkoocy;
            sagemooicmgceiug:
            aescssauecumgwso:
            goto uqcwyyiykmwygeau;
            ekwuycsiuqwycqea:
            goto qkwckeqowgaokkuy;
            goto iyaugygcsmqqqkmo;
            iqwsqykoueqyyomy:
            sgikkoswwyesqomo:
            goto ggaucuaykyuiikem;
            uqugcugeomqakcqo:
            $aiowsaccomcoikus = MetaBox::okmsgamiiemyesao($uiewakwqscemywuo);
            goto qmoisuweiskkekca;
            ceusyscosamyaiws:
            if (in_array($eewwgseqamqiouyq, ["\142\157\x6f\x6c\x65\x61\156", "\164\x69\x6e\171\x69\156\x74"])) {
                goto kqkymieyyqaoeymw;
            }
            goto gysmmooawoeggaow;
            umcyeiusoakewyaa:
            sykuuisikqcwuaqu:
            goto ksawwekgswywwuwm;
            wickgagwgqqsomum:
            weiaigyyigkusucy:
            goto wmwgeoequuwwwywa;
            coogyackikgmecic:
            $this->qaqsggqyouammqgm($aiowsaccomcoikus);
            goto iqwsqykoueqyyomy;
            egikqoaqqegawugu:
            qimomesqamyyicmo:
            goto caaygouikgagsssc;
            cksoeiwawiygyiyg:
            $aaqqkgyougeiueyq = ManipulateArray::get($qssskwiqeumgkago, $uusmaiomayssaecw);
            goto cyqokqcacysioeyc;
            uamuuwkyuqomqyuy:
            qcceyyqiuiqcyqqm:
            goto ekwuycsiuqwycqea;
            iyceygqsmokgmams:
            goto aescssauecumgwso;
            goto wcekgciqeggiiwgk;
            wycmcqaauqkgegau:
            $sqeykgyoooqysmca = "\142\163\163\145\154\145\143\164";
            goto qcweoyigoaeacsow;
            swckikycciugciqq:
            bagkewioewygysea:
            goto coogyackikgmecic;
            yggciikgkomgeqsc:
            qkwckeqowgaokkuy:
            goto eoeiaccouaymakgm;
            iikgiaocummweiga:
            $uiewakwqscemywuo = ManipulateFormat::omaawkkwwyesqwcc($uiewakwqscemywuo, $qqgeiaygkaoyccig);
            goto gsusqquicmukegcs;
            ksawwekgswywwuwm:
            $sqeykgyoooqysmca = "\142\x73\163\145\154\x65\x63\164";
            goto yuqisiwgqacgmsym;
            wcekgciqeggiiwgk:
            augqweqsqioesmim:
            goto gkwuewqmqeswqukg;
            usmuqsuwuueogimc:
            gqyyccceswkqcmaa:
            goto koiiaewwicsckseu;
            cieumoqayigkoocy:
            $sqeykgyoooqysmca = "\164\145\x78\x74";
            goto yggciikgkomgeqsc;
            wcsysckgigeykkwy:
            if ($sqeykgyoooqysmca) {
                goto weiaigyyigkusucy;
            }
            goto scgmwokeuqwiekkk;
            kmqusaiaiogecyiy:
            mgieeyuyuoeccaog:
            goto swckikycciugciqq;
            gysmmooawoeggaow:
            if (in_array($eewwgseqamqiouyq, ["\x73\164\162\x69\x6e\x67", "\x62\x69\x67\x69\156\164"])) {
                goto ssesmiwwmsayksum;
            }
            goto iyikuwuweqigiuey;
            scgmwokeuqwiekkk:
            if ($aaqqkgyougeiueyq instanceof Foreign) {
                goto sykuuisikqcwuaqu;
            }
            goto ceusyscosamyaiws;
            koiiaewwicsckseu:
            goto mquyemuqcqeassqc;
            goto umcyeiusoakewyaa;
            cyqokqcacysioeyc:
            if (!$aaqqkgyougeiueyq instanceof Field) {
                goto aayysiegiyweiyuu;
            }
            goto akwwuuiykscgicuw;
            eoeiaccouaymakgm:
            goto gqyyccceswkqcmaa;
            goto owaimkmgemoqewmm;
            ggaucuaykyuiikem:
            aayysiegiyweiyuu:
            goto egikqoaqqegawugu;
            wmwgeoequuwwwywa:
            $uiewakwqscemywuo[self::TYPE] = $sqeykgyoooqysmca;
            goto uqugcugeomqakcqo;
            iyikuwuweqigiuey:
            if (in_array($eewwgseqamqiouyq, ["\x74\145\170\164"])) {
                goto cooeoemccqiyewks;
            }
            goto acsigwcaesyyoiie;
            yeiokcoikcysyimu:
            cooeoemccqiyewks:
            goto kkmwwqyesmkescyg;
            kkmwwqyesmkescyg:
            $sqeykgyoooqysmca = "\164\145\170\x74\141\162\x65\x61";
            goto uamuuwkyuqomqyuy;
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
        gemwkqocygssmequ:
        if (!($qssskwiqeumgkago && is_array($qssskwiqeumgkago))) {
            goto wwwggoemicgwwasy;
        }
        goto cqaeiesyciakcagu;
        egmocemomockemia:
        $qssskwiqeumgkago = $this->oyeskqayoscwciem()->aeosueemgsygqese();
        goto gemwkqocygssmequ;
        kucqcqeesaiacekm:
        return $wkkweuacukumqmya;
        goto cewyaqiqmmwmauce;
        aaiymmkqmocgakei:
        wwwggoemicgwwasy:
        goto kucqcqeesaiacekm;
        acisycocoswkekik:
        saekesoeysauokkq:
        goto aaiymmkqmocgakei;
        cqaeiesyciakcagu:
        foreach ($qssskwiqeumgkago as $aiowsaccomcoikus) {
            goto sqmiymiemeegegic;
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
            esqiocgueosoksyq:
            meseuuacmkuowqau:
            goto csggsqueaqmwgwkk;
            sescaagayikiggyq:
        }
        goto acisycocoswkekik;
        cewyaqiqmmwmauce:
    }
    
    public function qeowcucuoaqyqwuw($umwgoasiowmqcumw) : array
    {
        goto amoygaweoeymiuiy;
        amoygaweoeymiuiy:
        $momcykaoccoymeig = 1;
        goto kcomueysiyyqagus;
        ckuagmyqkyoeeaeu:
        $scsyuucsumiwkqqc = ManipulateServer::get("\x6f\x72\155\x5f\x66\151\x6c\164\x65\162\137\x76\141\154\x75\x65");
        goto cqwgmwqiakmgyuee;
        cqwgmwqiakmgyuee:
        if (!(is_array($umwgoasiowmqcumw) && $umwgoasiowmqcumw)) {
            goto moimkkmkooeiyisc;
        }
        goto ksgwgcguemcescqg;
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
        $umwgoasiowmqcumw = ["\141\154\x6c" => ["\x74\x69\164\x6c\x65" => __("\101\154\154", PR__CMN__FOUNDATION), "\x63\157\x75\x6e\x74" => array_sum(array_map(function ($mokouoooiwsmcmiu) {
            return $mokouoooiwsmcmiu["\143\x6f\165\x6e\x74"];
        }, $umwgoasiowmqcumw))]] + $umwgoasiowmqcumw;
        goto kiwiesucugwoiuum;
        kiwiesucugwoiuum:
        foreach ($umwgoasiowmqcumw as $qqomumygoacsmsie => $icwicymcioeyeyek) {
            goto qscqkykqskqmisgw;
            uwsmcsiiisuocgwg:
            $geecqyososceumsk = ManipulateServer::ekcymmyqoceukosc(true);
            goto suaymckwwgmugsaa;
            ksqgwiceoomkuuiy:
            $gaeqamemwmwsyukm = ManipulateArray::get($icwicymcioeyeyek, "\143\x6f\x75\x6e\164", 0);
            goto gkoiyaagwgycysim;
            ycskuioouwwemgke:
            $yeacayasgueouoqc = $scsyuucsumiwkqqc ? $scsyuucsumiwkqqc === $qqomumygoacsmsie : $momcykaoccoymeig === 1;
            goto syeeegeygawwqiuu;
            ysssquieawyysiyc:
            ManipulateArray::unset($cqcsaaswaciweiie, $qqomumygoacsmsie);
            goto yomoeykcqyukscmi;
            syeeegeygawwqiuu:
            $umwgoasiowmqcumw[$qqomumygoacsmsie] = ManipulateHTML::qgsekwygcgawekeq("\141", ["\150\x72\145\146" => $geecqyososceumsk, "\x63\x6c\141\163\163" => "\157\162\155\x2d\x66\x69\x6c\164\x65\x72\x2d\x6c\x69\156\x6b" . ($yeacayasgueouoqc ? "\40\143\x75\162\162\x65\x6e\x74" : '')], true, sprintf("\x25\163\40\x28\x25\x73\51", $meqocwsecsywiiqs, ManipulateHTML::gmqyuaqwgiayskei($this->wusgwkaycokeckqs($gaeqamemwmwsyukm))));
            goto iuieskocqoqkkwus;
            swmgucaogosuueug:
            eokcuuwqaomkooag:
            goto uwsmcsiiisuocgwg;
            ecqeqquikuomwgsu:
            ciwggusyecgskagy:
            goto igscwycsqsckmcuq;
            igscwycsqsckmcuq:
            $geecqyososceumsk = DecoratorQuery::yqymaqmqiqmmmsoo([self::ORM_FILTER_BY => $ymaogssqccumcyqa, self::ORM_FILTER_VALUE => $qqomumygoacsmsie], $geecqyososceumsk);
            goto wmcaecgwmmwuuqsq;
            uekkkmwciocmosgg:
            goto sccqekuwywiisami;
            goto ecqeqquikuomwgsu;
            qscqkykqskqmisgw:
            $meqocwsecsywiiqs = ManipulateArray::get($icwicymcioeyeyek, "\x74\151\164\x6c\145", false);
            goto ksqgwiceoomkuuiy;
            iuieskocqoqkkwus:
            $momcykaoccoymeig++;
            goto isiqkeyciyqgkayu;
            gwayeyymscmgwqkg:
            ycweseaccsomkioa:
            goto caoikoqmyeqsqqqe;
            isiqkeyciyqgkayu:
            qgqasacusgwmoegy:
            goto gwayeyymscmgwqkg;
            wmcaecgwmmwuuqsq:
            sccqekuwywiisami:
            goto ycskuioouwwemgke;
            yomoeykcqyukscmi:
            goto qgqasacusgwmoegy;
            goto swmgucaogosuueug;
            gkoiyaagwgycysim:
            if ($meqocwsecsywiiqs) {
                goto eokcuuwqaomkooag;
            }
            goto ysssquieawyysiyc;
            wsqoskqgyooqeyga:
            $geecqyososceumsk = DecoratorQuery::oiamiqcuyksmmomm([self::ORM_FILTER_BY, self::ORM_FILTER_VALUE], $geecqyososceumsk);
            goto uekkkmwciocmosgg;
            suaymckwwgmugsaa:
            if ($qqomumygoacsmsie !== "\x61\154\x6c") {
                goto ciwggusyecgskagy;
            }
            goto wsqoskqgyooqeyga;
            caoikoqmyeqsqqqe:
        }
        goto cmagycousakeeaei;
        kcomueysiyyqagus:
        $ymaogssqccumcyqa = $this->aakiaoueckoiyoew();
        goto ckuagmyqkyoeeaeu;
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
        keqagmaiqqsgkmso:
        ggkoiouwecyiosym:
        goto ekgsawcuswowmosm;
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
        ekgsawcuswowmosm:
        return $ceiwsaacewygcsqg;
        goto uiwswesymogiwsgg;
        uiwswesymogiwsgg:
    }
    
    public function gqaysymikgeawkqa() : ?Builder
    {
        goto kgeggsckmgcgwcqm;
        gmymycwymqkuiisi:
        return $siykeiywomwwuoiw;
        goto wogokmgkgkumqcws;
        qimieogaimwmukmu:
        try {
            goto wkcwuemioaiyouek;
            usgmimcwygsmcioa:
            
            $siykeiywomwwuoiw = $this->getConnection()->table($aasascamegmwqmqk);
            goto qggiogeyowcoaiqy;
            qggiogeyowcoaiqy:
            if (!($siykeiywomwwuoiw && !$siykeiywomwwuoiw->exists())) {
                goto euogcyyayioyyiyg;
            }
            goto ekgcquiosyesyism;
            qosckaqceoumcasm:
            euogcyyayioyyiyg:
            goto gmcqkoqwkiawaikw;
            wkcwuemioaiyouek:
            $aasascamegmwqmqk = $this->miwqiiqeegeqcwis();
            goto usgmimcwygsmcioa;
            ekgcquiosyesyism:
            $siykeiywomwwuoiw = null;
            goto qosckaqceoumcasm;
            gmcqkoqwkiawaikw:
        } catch (Exception $wgaoewqkwgomoaai) {
            $this->saqqeqmcyyoeqici($this->kyacickkomkioeyu($wgaoewqkwgomoaai));
        }
        goto gmymycwymqkuiisi;
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
        ikeyoyoigsuouokm:
        cokacyaayuueyuuu:
        goto eecgougegqassgyq;
        cycyaqqawmwiywwe:
        if (is_numeric($mksyucucyswaukig)) {
            goto koawwmccgquqqmwa;
        }
        goto ckowiuagwmsqmiqc;
        cuwkqgemkmuuegkc:
    }
    
    public function getConnection() : Database
    {
        goto wemmseueskwkcwou;
        wemmseueskwkcwou:
        $ymqmyyeuycgmigyo = $this->miwqiiqeegeqcwis();
        goto cceakqgoysacqwmc;
        ceeqguaoysyaasey:
        $mgcmmwqwguicsews->wcweamocuicuusky("\x6e\141\x6d\145", $ymqmyyeuycgmigyo);
        goto ekmqouqsgsaukeiq;
        cugkqmkuyuwwqcec:
        return $mgcmmwqwguicsews;
        goto ewooakeuigcyuemu;
        scaimkkukmgoeaya:
        if (!($mgcmmwqwguicsews instanceof Database && !$mgcmmwqwguicsews->aakmagwggmkoiiyu())) {
            goto oyicskieeaewgwce;
        }
        goto ceeqguaoysyaasey;
        ekmqouqsgsaukeiq:
        oyicskieeaewgwce:
        goto cugkqmkuyuwwqcec;
        cceakqgoysacqwmc:
        $mgcmmwqwguicsews = Database::symcgieuakksimmu($ymqmyyeuycgmigyo);
        goto scaimkkukmgoeaya;
        ewooakeuigcyuemu:
    }
    public function ckgmycmaukqgkosk()
    {
        goto kacgiqwewyeeyyam;
        kacgiqwewyeeyyam:
        $yyksucsgisomecgg = $this->oyeskqayoscwciem();
        goto qwogeocemuaaasiw;
        ywmuoigomwwigqea:
        $yyksucsgisomecgg->usuqmwksoeaayaig(ManipulateString::kwuyaykukcmaqggg(ManipulateString::mkwcwqkqeqkqyggc(self::uqggkiomyiceyooa())));
        goto cgqkqmiekaageyka;
        qwogeocemuaaasiw:
        if ($yyksucsgisomecgg->masyeqmaiuqwosei()) {
            goto wceiuqaeywmgscww;
        }
        goto ywmuoigomwwigqea;
        cgqkqmiekaageyka:
        wceiuqaeywmgscww:
        goto goimywgsweeqsewo;
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
        iuieyqacggsykgus:
        $this->register = new Register();
        goto wamkaouokmyoyuqu;
        eywcgeccsmquugsw:
        return $this->register;
        goto wwskeewecyukygeg;
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
        ykymogaqkgaiiiyi:
        return $yciaosuiyeieceug;
        goto uusyaguomkqeakkm;
        coaysoeouasaekie:
        wmqegaqemgiggsce:
        goto ykymogaqkgaiiiyi;
        kmikwoqwigwuyqae:
        $yciaosuiyeieceug = $yskommoiekkwiggo;
        goto qcuywygiosoqycaa;
        wggeggkumkwaaesu:
        $yskommoiekkwiggo = $this->cgswceaawqgeskua("\145\144\x69\x74");
        goto uauqmaeueukkmuwa;
        cqeceeagmysoyoqg:
        $yciaosuiyeieceug = false;
        goto wggeggkumkwaaesu;
        gkyguugwwoaqoigy:
        
        if (!DecoratorUser::scmcyesmmikkucie($this->oyeskqayoscwciem()->gwaeeegmgggawiyi("\x65\x64\151\164\x5f\151\164\x65\155\x73"))) {
            goto sickakeesgcgwisw;
        }
        goto kmikwoqwigwuyqae;
        uauqmaeueukkmuwa:
        if (!$yskommoiekkwiggo instanceof Edit) {
            goto wmqegaqemgiggsce;
        }
        goto gkyguugwwoaqoigy;
        qcuywygiosoqycaa:
        sickakeesgcgwisw:
        goto coaysoeouasaekie;
        uusyaguomkqeakkm:
    }
    
    public function qqakqoekigkcmyek()
    {
        goto qsyyeoosgigiiequ;
        jweeyemwqyqmyuys:
        $kmsymkkmiwykeyqi = $this->cgswceaawqgeskua("\x73\x68\x6f\167");
        goto mgiwqumikeuieocg;
        aeekgeqawgsmgiqw:
        return $yciaosuiyeieceug;
        goto imgagmqusgiqissi;
        qikmwaessamuueoe:
        qoigaauuokyusmgk:
        goto aeekgeqawgsmgiqw;
        mgiwqumikeuieocg:
        if (!$kmsymkkmiwykeyqi instanceof Show) {
            goto qoigaauuokyusmgk;
        }
        goto yegkgccwomcgkumi;
        yegkgccwomcgkumi:
        $yciaosuiyeieceug = $kmsymkkmiwykeyqi;
        goto qikmwaessamuueoe;
        qsyyeoosgigiiequ:
        $yciaosuiyeieceug = false;
        goto jweeyemwqyqmyuys;
        imgagmqusgiqissi:
    }
    
    public function mukyysqkgaimcygs() : bool
    {
        $gkswkiicccswksiq = $this->oyeskqayoscwciem()->gwaeeegmgggawiyi("\144\145\x6c\x65\x74\x65\x5f\151\x74\x65\155\x73");
        return $this->gqigeuumsosmamqs() && DecoratorUser::scmcyesmmikkucie($gkswkiicccswksiq);
    }
    
    public function comogmawyoiquwis() : ?string
    {
        goto cesaaiguwciccysi;
        wskccugoccagaqcw:
        $qqomumygoacsmsie = $this->cgswceaawqgeskua("\151\x6e\x64\x65\x78");
        goto sqyceswygksmmqqa;
        qocmmyskykeuwsae:
        return $iwywmkygwewiamwm;
        goto kywmiquiiwmwgooy;
        kqsyqwwscwoswsgk:
        $iwywmkygwewiamwm = $qqomumygoacsmsie->qmgcisuuikgmqcsu();
        goto yemuiyokmqoqckwu;
        cesaaiguwciccysi:
        $iwywmkygwewiamwm = null;
        goto wskccugoccagaqcw;
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
        gyceukwoyaasuwik:
        syquiiogeymgicuy:
        goto iiyamaquicwswcyu;
        qsycguggqkgywgaq:
        if (!($qqomumygoacsmsie = $this->ggwyugcggywuwcse())) {
            goto syquiiogeymgicuy;
        }
        goto wsyeqyekimescwkq;
        iiyamaquicwswcyu:
        return $iwywmkygwewiamwm;
        goto iiyggeuemwuwqiey;
        yquysamwsoyyqcya:
        $iwywmkygwewiamwm = null;
        goto qsycguggqkgywgaq;
        wsyeqyekimescwkq:
        $iwywmkygwewiamwm = DecoratorQuery::yqymaqmqiqmmmsoo([$this->kumuygiiqswoyasy() => $kqokimuosyuyyucg], $qqomumygoacsmsie->qmgcisuuikgmqcsu());
        goto gyceukwoyaasuwik;
        iiyggeuemwuwqiey:
    }
    
    public function uesweuocqoywoyms($kqokimuosyuyyucg = 0) : ?string
    {
        goto agokkauammisaqke;
        agokkauammisaqke:
        $iwywmkygwewiamwm = null;
        goto ggoyigsoyccmscum;
        aigeoggkowgwwwqg:
        $iwywmkygwewiamwm = DecoratorQuery::yqymaqmqiqmmmsoo([$this->kumuygiiqswoyasy() => $kqokimuosyuyyucg], $qqomumygoacsmsie->qmgcisuuikgmqcsu());
        goto pscqogmyseiwuqye;
        pscqogmyseiwuqye:
        omeookmiomoieeee:
        goto cyyecekuwygaqwcy;
        ggoyigsoyccmscum:
        if (!($qqomumygoacsmsie = $this->qqakqoekigkcmyek())) {
            goto omeookmiomoieeee;
        }
        goto aigeoggkowgwwwqg;
        cyyecekuwygaqwcy:
        return $iwywmkygwewiamwm;
        goto muqeeocooyiosouk;
        muqeeocooyiosouk:
    }
    
    public function cgccmsewskigcuig($kqokimuosyuyyucg = 0) : ?string
    {
        goto mowauiysyiciqaaa;
        keiciayiyqsemsys:
        goto ogywsgmqcgioaoqk;
        goto ggoquyyseekiwukq;
        okceyucmoigyokyy:
        wiiyageyqowkmmko:
        goto uecmkggsueeiyawk;
        uecmkggsueeiyawk:
        return $iwywmkygwewiamwm;
        goto iyakeemwaiqeueme;
        eiekcqosmyqmwqag:
        $ceiwsaacewygcsqg = $this->kumuygiiqswoyasy();
        goto mgscyaiwekksacco;
        mowauiysyiciqaaa:
        $iwywmkygwewiamwm = null;
        goto msuyygiskkumokec;
        ggoquyyseekiwukq:
        wcagqkquasswioos:
        goto dwciioycickkwawq;
        mgscyaiwekksacco:
        if ($qqomumygoacsmsie->qcsgmgoukiouuscw()) {
            goto wcagqkquasswioos;
        }
        goto sykwygmouoikuyws;
        dwciioycickkwawq:
        $iwywmkygwewiamwm = ManipulateServer::ekcymmyqoceukosc(true);
        goto yoociieskmuucgms;
        qooykiaywemimcke:
        ayggiggmcqckqwom:
        goto okceyucmoigyokyy;
        ysiuiuqawkaaamus:
        $iwywmkygwewiamwm = DecoratorQuery::yqymaqmqiqmmmsoo(["\x6f\162\x6d\55\141\x63\x74\151\157\x6e" => "\x64\145\154\145\164\x65", $ceiwsaacewygcsqg => $kqokimuosyuyyucg], $iwywmkygwewiamwm);
        goto qooykiaywemimcke;
        ggkgseywksemuogc:
        $qqomumygoacsmsie = $this->cgswceaawqgeskua("\x69\156\144\145\170");
        goto iyeswqeqcsmsoueq;
        yoociieskmuucgms:
        ogywsgmqcgioaoqk:
        goto ysiuiuqawkaaamus;
        iyeswqeqcsmsoueq:
        if (!($qqomumygoacsmsie instanceof Index && $this->mukyysqkgaimcygs())) {
            goto ayggiggmcqckqwom;
        }
        goto eiekcqosmyqmwqag;
        msuyygiskkumokec:
        if (!$kqokimuosyuyyucg) {
            goto wiiyageyqowkmmko;
        }
        goto ggkgseywksemuogc;
        sykwygmouoikuyws:
        $iwywmkygwewiamwm = $qqomumygoacsmsie->qmgcisuuikgmqcsu();
        goto keiciayiyqsemsys;
        iyakeemwaiqeueme:
    }
    
    public function setCreatedAt($eqgoocgaqwqcimie)
    {
        $this->{static::CREATED_AT} = current_time("\x6d\x79\x73\x71\x6c");
    }
    
    public function setUpdatedAt($eqgoocgaqwqcimie)
    {
        $this->{static::UPDATED_AT} = current_time("\x6d\171\163\161\x6c");
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
        iekesyeicomwcuas:
        $gkswkiicccswksiq = $this->oyeskqayoscwciem()->gwaeeegmgggawiyi("\x63\x72\145\x61\x74\x65\137\151\164\145\x6d\163");
        goto wimggeysyugwwkca;
        wimggeysyugwwkca:
        $ecmiqywsauuoccwo = $this->cgswceaawqgeskua("\141\x64\x64");
        goto oycikycyewimcaew;
        oycikycyewimcaew:
        if (!($ecmiqywsauuoccwo instanceof View && DecoratorUser::scmcyesmmikkucie($gkswkiicccswksiq))) {
            goto ouuuacyewgmocwsc;
        }
        goto sqokyowsuawgkusy;
        sqokyowsuawgkusy:
        $iwywmkygwewiamwm = $ecmiqywsauuoccwo->qmgcisuuikgmqcsu();
        goto iyekgiaayeasoggw;
        jgaoqcmiqagoiuko:
        $iwywmkygwewiamwm = null;
        goto iekesyeicomwcuas;
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
            wksssmewgogkacei:
            $kigowwqauiumummw = $mksyucucyswaukig;
            goto ykcymsoikgqeaukw;
            qqiwcikkcgmmakow:
            goto aikukgimkamkgwsu;
            goto wgcuewwyieoqaoek;
            assyuumuuuocycyy:
            
            if ($mksyucucyswaukig->delete()) {
                goto mwkcmgksoyycumos;
            }
            goto oiueawimuggcqgky;
            akycayowsciesmug:
            ukcukckucsyaggmw:
            goto ogqaueuweieisowc;
            caskqicqwmyuugku:
            if (!$this->ueaumcyiwwkeueag($aokagokqyuysuksm, $mksyucucyswaukig)) {
                goto ukcukckucsyaggmw;
            }
            goto assyuumuuuocycyy;
            oiueawimuggcqgky:
            $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\146\141\x69\x6c\x65\144\x5f\x64\145\154\x65\164\145\137\x6f\x62\x6a\145\143\164", self::class), $aokagokqyuysuksm);
            goto qqiwcikkcgmmakow;
            ykcymsoikgqeaukw:
            $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x6f\142\x6a\145\x63\x74\x5f\x64\x65\154\x65\x74\145\x64", self::class), $aokagokqyuysuksm);
            goto akcqguucucewaqws;
            wgcuewwyieoqaoek:
            mwkcmgksoyycumos:
            goto wksssmewgogkacei;
            ogqaueuweieisowc:
        } catch (Exception $wgaoewqkwgomoaai) {
            $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x66\141\151\x6c\x65\x64\137\x64\145\154\145\164\x65\x5f\x6f\142\152\145\x63\164", self::class), $aokagokqyuysuksm);
        }
        goto oiguycsiaweycioe;
        imgyqyeaoawqscae:
        $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\142\145\146\157\x72\x65\137\x64\145\154\145\164\x65\137\x6f\x62\152\145\143\164", self::class), $mksyucucyswaukig, $aokagokqyuysuksm);
        goto isssemmuiiaewiwi;
        muaigwwqgsgowgkk:
        if (!$yciaosuiyeieceug) {
            goto yaokowamwsaggege;
        }
        goto imgyqyeaoawqscae;
        isumwussqyqawwmy:
        return $kigowwqauiumummw;
        goto ksaimkacqesiguyg;
        ggcayqaayysyqmia:
        $kigowwqauiumummw = false;
        goto miiegqgiuamasook;
        ueeowyociayoygsa:
        qwqwwywiiuqayaca:
        goto isumwussqyqawwmy;
        oiguycsiaweycioe:
        yaokowamwsaggege:
        goto ueeowyociayoygsa;
        miiegqgiuamasook:
        if (!$mksyucucyswaukig instanceof Model) {
            goto qwqwwywiiuqayaca;
        }
        goto eskmkooukwwieuke;
        eskmkooukwwieuke:
        $yciaosuiyeieceug = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\143\x61\x6e\137\144\145\154\145\x74\x65\x5f\x6f\x62\152\145\143\164", self::class), true, $mksyucucyswaukig, $cwwowqyuwccuykom);
        goto muaigwwqgsgowgkk;
        waiqmywasoeggkce:
        $mksyucucyswaukig = $this->cyyiiykmaeuqqgok($aokagokqyuysuksm);
        goto ggcayqaayysyqmia;
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
        semymwueqcweowae:
        $ueeagokqmgisgauy = $this->coescmgakmkiyseg();
        goto oegcoaeyokkgoqyg;
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
        qcmakskemmcgaeyg:
        if (!$siykeiywomwwuoiw) {
            goto sooqqqougsgcumko;
        }
        goto msayswiykqokmuqa;
        coqycqiqgwkgkymo:
        $ceiwsaacewygcsqg = $this->kumuygiiqswoyasy();
        goto qcmakskemmcgaeyg;
        qmkmuwomcwygkysi:
        ziggykossqqayaki:
        goto iaiooeockccgaaiq;
        aaeuuccoyyuqkouc:
        return ["\x6f\142\152\x65\143\164" => $mksyucucyswaukig, $ceiwsaacewygcsqg => ManipulateArray::get($mksyucucyswaukig, $ceiwsaacewygcsqg), self::ERRORS => $this->skwiagoagiyswgay(), self::SUCCESS => $kigowwqauiumummw];
        goto skoscsikiaakokqe;
        yeacwagosugscqcg:
        $kuuugksiksqcaaaa = $this->kuuugksiksqcaaaa($icwicymcioeyeyek);
        goto aigseumaammwaqck;
        ggqqwysyuqiwksgm:
        if (!$this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\157\x72\155\137\x70\145\162\x73\151\163\164\137\x6f\x72\x5f\x75\160\144\141\164\x65\x5f\x76\x61\x6c\x69\x64\141\x74\x69\157\156"), $kuuugksiksqcaaaa, $icwicymcioeyeyek, $this)) {
            goto ziggykossqqayaki;
        }
        goto wguccgmciesyocmi;
        syaqwysmymkgkcuu:
        $siykeiywomwwuoiw = $this->gqaysymikgeawkqa();
        goto coqycqiqgwkgkymo;
        msayswiykqokmuqa:
        if ($cwwowqyuwccuykom) {
            goto augyqmcwawmsykme;
        }
        goto yeacwagosugscqcg;
        iaiooeockccgaaiq:
        sooqqqougsgcumko:
        goto aaeuuccoyyuqkouc;
        wguccgmciesyocmi:
        try {
            goto aiociqsiiwguaywy;
            yqaacqqyisoewkqq:
            $this->scmmymqkoyckgkam($mksyucucyswaukig);
            goto mseimosiimuuceoa;
            aqcuimcoqmsiygwk:
            $this->qiwiemuiqiugqqqg($mksyucucyswaukig, $icwicymcioeyeyek);
            goto yqaacqqyisoewkqq;
            gggkwgcemqeckcse:
            ugoeueisekcsquug:
            goto ayamqyqegiuausko;
            aiociqsiiwguaywy:
            $aokagokqyuysuksm = (int) ManipulateArray::get($icwicymcioeyeyek, $ceiwsaacewygcsqg);
            goto isomygcucicwccgy;
            oqccquoqqkkaqksk:
            igkeawygswqouuym:
            goto wouekamwmcuguaoa;
            wouekamwmcuguaoa:
            goto ukkmusemcqayowoa;
            goto iougqueaywwucoko;
            gosaiqsaqksagqsg:
            $this->iasywwkguyauiywu($mksyucucyswaukig, $icwicymcioeyeyek);
            goto wuuucygsmqmsiyoi;
            wiciqigmosmkkmwk:
            $mksyucucyswaukig = $this->qmqogusoaqeygewm($mksyucucyswaukig);
            goto ckmycmakimaeygcu;
            gwkumgocycceogce:
            ukkmusemcqayowoa:
            goto swkysimqcqkikmgy;
            cwyauqoosqaoaoki:
            $mksyucucyswaukig = $this->ckcicmwwiccamyqk($this, $mksyucucyswaukig, $icwicymcioeyeyek);
            goto wiciqigmosmkkmwk;
            scaoisaaceiaweoe:
            wyqmackmyaikcggs:
            goto mcgcqaiwmkewmwue;
            ymwckeawsukyukqs:
            $mksyucucyswaukig = $this->cyyiiykmaeuqqgok($aokagokqyuysuksm);
            goto gosaiqsaqksagqsg;
            uwiaeuuiaimugqys:
            $egkyssmuqcwaciya = self::uqggkiomyiceyooa();
            goto eyyamwsogeqwamug;
            wyoqmwcsuewswiua:
            goto koueosuswmucsaec;
            goto gggkwgcemqeckcse;
            iougqueaywwucoko:
            acuyqioeqaoeskya:
            goto someqooawckycwao;
            someqooawckycwao:
            $iggwcmkgmicmouyu = false;
            goto ymwckeawsukyukqs;
            cecaekugyecciwcg:
            $mksyucucyswaukig = null;
            goto wyoqmwcsuewswiua;
            wuuucygsmqmsiyoi:
            $kuuugksiksqcaaaa = $this->gkieuyoqcusoksmg($icwicymcioeyeyek, $mksyucucyswaukig);
            goto gwkumgocycceogce;
            wcaeyoeeuiqqgqou:
            $iggwcmkgmicmouyu = true;
            goto wsmkoikacqsiweuw;
            ckmycmakimaeygcu:
            
            if ($mksyucucyswaukig->save()) {
                goto ugoeueisekcsquug;
            }
            goto cecaekugyecciwcg;
            eyyamwsogeqwamug:
            $mksyucucyswaukig = new $egkyssmuqcwaciya();
            goto oqccquoqqkkaqksk;
            ayamqyqegiuausko:
            $kigowwqauiumummw = true;
            goto aqcuimcoqmsiygwk;
            mseimosiimuuceoa:
            koueosuswmucsaec:
            goto scaoisaaceiaweoe;
            swkysimqcqkikmgy:
            if (!($kuuugksiksqcaaaa && $mksyucucyswaukig instanceof Model)) {
                goto wyqmackmyaikcggs;
            }
            goto cwyauqoosqaoaoki;
            gaikqsuyumumsesg:
            if (!$kuuugksiksqcaaaa) {
                goto igkeawygswqouuym;
            }
            goto uwiaeuuiaimugqys;
            wsmkoikacqsiweuw:
            $kuuugksiksqcaaaa = $this->gkieuyoqcusoksmg($icwicymcioeyeyek);
            goto gaikqsuyumumsesg;
            isomygcucicwccgy:
            if ($aokagokqyuysuksm) {
                goto acuyqioeqaoeskya;
            }
            goto wcaeyoeeuiqqgqou;
            mcgcqaiwmkewmwue:
        } catch (Exception $wgaoewqkwgomoaai) {
            goto gecywkyeskagueqm;
            oqkcuegyumswqekg:
            try {
                
                $mksyucucyswaukig->delete();
            } catch (Exception $wgaoewqkwgomoaai) {
            }
            goto wcgoiisqmmawuiag;
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
            gecywkyeskagueqm:
            $this->kmsyisgakgwscyey($this->kyacickkomkioeyu($wgaoewqkwgomoaai));
            goto yckkwcimmakkieos;
            qmwmasuoyuwmcigw:
            $kigowwqauiumummw = false;
            goto guackgkaeswkcaoq;
            guackgkaeswkcaoq:
            qscmokiskqyuswqo:
            goto wyoouquciqoosuim;
            ekwmcssqowkcoyci:
            if (!$iggwcmkgmicmouyu) {
                goto sswmueweogqkqumq;
            }
            goto oqkcuegyumswqekg;
            wyoouquciqoosuim:
        }
        goto qmkmuwomcwygkysi;
        gwmauwgkiomyggmu:
        $kuuugksiksqcaaaa = true;
        goto syaqwysmymkgkcuu;
        ekcwasmkccgmogmy:
        $mksyucucyswaukig = null;
        goto ekwsguueioyegqkc;
        aigseumaammwaqck:
        augyqmcwawmsykme:
        goto ggqqwysyuqiwksgm;
        ooceggceowgoacyu:
        $kigowwqauiumummw = false;
        goto gwmauwgkiomyggmu;
        ekwsguueioyegqkc:
        $iggwcmkgmicmouyu = true;
        goto ooceggceowgoacyu;
        skoscsikiaakokqe:
    }
    
    public function scmmymqkoyckgkam($mksyucucyswaukig)
    {
    }
    
    public function iysseyicgouwysgk($mksyucucyswaukig) : ?string
    {
        return '';
    }
    
    public function mayuaaqmsqeyayyg($mksyucucyswaukig, $qqomumygoacsmsie = "\163\150\x6f\x77") : ?string
    {
        goto skkqqcysscikmmik;
        yywgsissmueymcmg:
        $aokagokqyuysuksm = ManipulateArray::get($mksyucucyswaukig, $this->kumuygiiqswoyasy());
        goto yuqowmmcwscosmgy;
        skkqqcysscikmmik:
        if (!is_numeric($mksyucucyswaukig)) {
            goto icyuwesuyoimomqs;
        }
        goto oewsoauskqoqmiqa;
        yuqowmmcwscosmgy:
        $iwywmkygwewiamwm = $this->uesweuocqoywoyms($aokagokqyuysuksm);
        goto iyekyouiiwcsewgy;
        ugqeagqqaucqkcys:
        $pkyyagewkiyckmwy = $this->geyuyukmwaoksywa($iwywmkygwewiamwm, $pkyyagewkiyckmwy);
        goto ywiugkwcqkomgucy;
        sqsksyaqsweqiyci:
        ksksqwcyqoqgmgke:
        goto guwyuigmkeeqssgw;
        cmogamaycywckuim:
        $pkyyagewkiyckmwy = $this->iysseyicgouwysgk($mksyucucyswaukig);
        goto oiissisqowcgwiyc;
        ekoeysiuqeggaqku:
        return $pkyyagewkiyckmwy;
        goto sqcoigaqqssykoui;
        sgaoyyoooykieusg:
        icyuwesuyoimomqs:
        goto yywgsissmueymcmg;
        oewsoauskqoqmiqa:
        $mksyucucyswaukig = $this->akkkoiiymmamsauc($mksyucucyswaukig);
        goto sgaoyyoooykieusg;
        ywiugkwcqkomgucy:
        yqisgseiimwmoeee:
        goto ekoeysiuqeggaqku;
        oiissisqowcgwiyc:
        if (!$iwywmkygwewiamwm) {
            goto yqisgseiimwmoeee;
        }
        goto ugqeagqqaucqkcys;
        iyekyouiiwcsewgy:
        switch ($qqomumygoacsmsie) {
            case "\163\x68\157\x77":
                $iwywmkygwewiamwm = $this->uesweuocqoywoyms($aokagokqyuysuksm);
                goto skysqikkawmaoase;
            case "\145\x64\151\164":
                $iwywmkygwewiamwm = $this->yyykkcyiksewsoqy($aokagokqyuysuksm);
                goto skysqikkawmaoase;
        }
        goto sqsksyaqsweqiyci;
        guwyuigmkeeqssgw:
        skysqikkawmaoase:
        goto cmogamaycywckuim;
        sqcoigaqqssykoui:
    }
    
    public function aouwuegyyugiwksc($qgoqiacsiccwoawi, $mksyucucyswaukig, $mugogceoccysackm = true) : ?string
    {
        goto uqkmkmmikmaqkgym;
        kqumggcumkiygaya:
        if (!$meywaqqsugaoeyys instanceof Model) {
            goto wkmsuekwweweqoys;
        }
        goto siuwcesauyyweaky;
        wmiysuwsmawyogmu:
        return $pkyyagewkiyckmwy;
        goto uoieeoimcawgsacs;
        omuskqikewygsuuu:
        $meywaqqsugaoeyys = $aaqqkgyougeiueyq->uecyuoauykiqqkey()::symcgieuakksimmu();
        goto kqumggcumkiygaya;
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
        smeocsiuyouseuqo:
        $pkyyagewkiyckmwy = '';
        goto yqmygsgkwmkeyqmm;
        siuwcesauyyweaky:
        if ($mugogceoccysackm) {
            goto mkmasewiiuocaekm;
        }
        goto wucomycmoigosose;
        uwiqeuqyaseimcyk:
        $pkyyagewkiyckmwy = $meywaqqsugaoeyys->mayuaaqmsqeyayyg($icwicymcioeyeyek);
        goto aeieoesqsyiqwkkk;
        aeieoesqsyiqwkkk:
        iuageyamssqwqqyw:
        goto syiwwokguucmgsyy;
        uqkmkmmikmaqkgym:
        $aaqqkgyougeiueyq = $this->oyeskqayoscwciem()->uqeoyqiwywwmsiew($qgoqiacsiccwoawi);
        goto yckkkceuiuiaucce;
        ccikqgeseseueseo:
        mkmasewiiuocaekm:
        goto uwiqeuqyaseimcyk;
        syiwwokguucmgsyy:
        wkmsuekwweweqoys:
        goto mawqcoscmcqkoskk;
        kmasgsycmswqoeii:
        goto iuageyamssqwqqyw;
        goto ccikqgeseseueseo;
        mawqcoscmcqkoskk:
        cwaqmauwsyugsieo:
        goto wmiysuwsmawyogmu;
        uoieeoimcawgsacs:
    }
    
    public function iscemaoqqckmkago($iceamweyeeiwiucs, $mksyucucyswaukig = null, $wkkweuacukumqmya = "\52", $uoomaookgsyciacm = [])
    {
        goto ysicqksgomomkoek;
        ocgsiomyyckcausy:
        try {
            goto qqyegacwyoqqqqwy;
            omaswaiucwamaywi:
            csimcqggmigoacwk:
            goto ieewmicwgqaigeqi;
            iioauiogmamumiym:
            if (!$ayegqaqygsqsmews) {
                goto iscaisuqmaikumko;
            }
            goto gmwcqkgsaesmsuea;
            ouokmaemueykkiqq:
            suykumskkmicioig:
            goto mgiykamgwsemmiio;
            cgkaoiyoqwmkaqck:
            iscaisuqmaikumko:
            goto suokacgwamyumagy;
            qmqsgkwueccwgsqa:
            return $meywaqqsugaoeyys->akkkoiiymmamsauc(ManipulateArray::get($mksyucucyswaukig, $iceamweyeeiwiucs), $meywaqqsugaoeyys->kumuygiiqswoyasy());
            goto iiceuymgyemuaciy;
            suokacgwamyumagy:
            yuciwasueswewmqw:
            goto gscckcagyggagway;
            eaisogogsygugsqi:
            $ayegqaqygsqsmews = $this->mgacegaoeamymmya($iceamweyeeiwiucs, $mksyucucyswaukig);
            goto usiqksiiiqgokuaq;
            wasacacaowicmiyw:
            $aaqqkgyougeiueyq = $this->oyeskqayoscwciem()->uqeoyqiwywwmsiew($iceamweyeeiwiucs);
            goto oksouuguouqowuyq;
            qiekksmyigmwmiws:
            if (!$meywaqqsugaoeyys instanceof Model) {
                goto gmckgcsamacayoiy;
            }
            goto qmqsgkwueccwgsqa;
            qqyegacwyoqqqqwy:
            if ($iceamweyeeiwiucs instanceof Relation) {
                goto csimcqggmigoacwk;
            }
            goto wasacacaowicmiyw;
            mgiykamgwsemmiio:
            if (!$ayegqaqygsqsmews) {
                goto yuciwasueswewmqw;
            }
            goto iwkyewqeogaamiou;
            okygssymuimommeg:
            $meywaqqsugaoeyys = $aaqqkgyougeiueyq->uecyuoauykiqqkey()::symcgieuakksimmu();
            goto qiekksmyigmwmiws;
            ieewmicwgqaigeqi:
            $ayegqaqygsqsmews = $iceamweyeeiwiucs;
            goto ouokmaemueykkiqq;
            iiceuymgyemuaciy:
            gmckgcsamacayoiy:
            goto qsgagomkgqcmscyu;
            oksouuguouqowuyq:
            if (!($aaqqkgyougeiueyq instanceof Foreign && ($aaqqkgyougeiueyq->wmomygggskkoqess() || $aaqqkgyougeiueyq->eiyqqesoywqkegwu()))) {
                goto kysaoseimkmckcoc;
            }
            goto okygssymuimommeg;
            uaaiuqickwysiqiy:
            sqkuwuwiceguscku:
            goto iioauiogmamumiym;
            qsgagomkgqcmscyu:
            kysaoseimkmckcoc:
            goto eaisogogsygugsqi;
            iwkyewqeogaamiou:
            if (!$uoomaookgsyciacm) {
                goto sqkuwuwiceguscku;
            }
            goto yqqwweuisgoskcwa;
            yqqwweuisgoskcwa:
            $ayegqaqygsqsmews = $this->kqewyqqqiyiouaou($uoomaookgsyciacm, $ayegqaqygsqsmews);
            goto uaaiuqickwysiqiy;
            gmwcqkgsaesmsuea:
            $essikcmqiyqaqoaq = $ayegqaqygsqsmews->get($wkkweuacukumqmya)->sacmkccceuywoqsq();
            goto cgkaoiyoqwmkaqck;
            usiqksiiiqgokuaq:
            goto suykumskkmicioig;
            goto omaswaiucwamaywi;
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
        egcsskmsysqiiikm:
        iiikyaquagwawkce:
        goto mogomwoquuesmcec;
        iqyqgqwwaaigmuou:
        eicuywagooikuusg:
        goto sqmgqacueqiiekay;
        wcqyakkqcgmeqaag:
        goto okeecmwsuoikguuo;
        goto coygueuwyguuciww;
        ugowokkqeoeugkqe:
        goto akkmaiaiamyaikqe;
        goto qmqumgawyyqqamoa;
        cuyaakuucgwmcuqq:
        $ayegqaqygsqsmews = null;
        goto gsgocqicesmaecse;
        uwmgacqaowuguiow:
        iwycgkausoseqmwu:
        goto cecamogauimuwoow;
        eqiiqamuyewoowwy:
        if (!$aaqqkgyougeiueyq instanceof Foreign) {
            goto iiikyaquagwawkce;
        }
        goto cwomucmeuqqucyge;
        qgmgmkeiemcqkyim:
        if (!$mksyucucyswaukig instanceof Model) {
            goto iysiwmeymsoucaka;
        }
        goto oqoogougwwcqeimq;
        waaammoiumecaiys:
        uwswkegomekswkus:
        goto qgmgmkeiemcqkyim;
        sqmgqacueqiiekay:
        goto ceesgeawumeqkcic;
        goto iuoqiecqaoosioey;
        ygqqeqgiaasoimgs:
        aeoiiewygoiwuiii:
        goto gsiagogeoqwqekei;
        mogomwoquuesmcec:
        iysiwmeymsoucaka:
        goto akiuyguwqaukuugs;
        ckmkeuakisiukage:
        
        $ayegqaqygsqsmews = $mksyucucyswaukig->hasOne($egkyssmuqcwaciya);
        goto uaiqqcsoksgukasg;
        cecamogauimuwoow:
        
        $ayegqaqygsqsmews = $mksyucucyswaukig->morphToMany($egkyssmuqcwaciya, $mgugyyocqwmeeuai);
        goto ygqqeqgiaasoimgs;
        goqkegseiummeiak:
        ksyukmeagigokcgi:
        goto wgeskeagymiuoigi;
        coygueuwyguuciww:
        pmaiksascsegweci:
        goto ckmkeuakisiukage;
        cwomucmeuqqucyge:
        $egkyssmuqcwaciya = $aaqqkgyougeiueyq->uecyuoauykiqqkey();
        goto eguukwmoyaaieuww;
        ismoiisskiwmmmiu:
        
        $ayegqaqygsqsmews = $mksyucucyswaukig->morphedByMany($egkyssmuqcwaciya, $mgugyyocqwmeeuai);
        goto oikomikqcwikimkw;
        eguukwmoyaaieuww:
        if ($aaqqkgyougeiueyq->gumeeckcowwoyoci()) {
            goto qiyiyuwmuoamwccs;
        }
        goto kqkeomoaociyuoye;
        qgcgucmskokqquwk:
        if ($aaqqkgyougeiueyq->iueigwuckeaswyuu()) {
            goto iwycgkausoseqmwu;
        }
        goto ismoiisskiwmmmiu;
        oikomikqcwikimkw:
        goto aeoiiewygoiwuiii;
        goto uwmgacqaowuguiow;
        oqoogougwwcqeimq:
        $aaqqkgyougeiueyq = $this->oyeskqayoscwciem()->uqeoyqiwywwmsiew($ymaogssqccumcyqa);
        goto eqiiqamuyewoowwy;
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
        oskwwcgyuwkiuacu:
        $aokagokqyuysuksm = ManipulateArray::get($mksyucucyswaukig, $this->kumuygiiqswoyasy());
        goto qsecoiqswyiseake;
        yuccckoykmccwyce:
        goto eicuywagooikuusg;
        goto goqkegseiummeiak;
        ccqkugckigeckeqa:
        yuqiqaquoygggoqc:
        goto waaammoiumecaiys;
        kswkouussqmqsssy:
        if ($aaqqkgyougeiueyq->wmomygggskkoqess()) {
            goto ksyukmeagigokcgi;
        }
        goto emomkqccysciiqya;
        akiuyguwqaukuugs:
        return $ayegqaqygsqsmews;
        goto emiyocoiuwcucuwu;
        woqsaqwocioumoeu:
        
        $ayegqaqygsqsmews = $mksyucucyswaukig->belongsTo($egkyssmuqcwaciya);
        goto ukyoyoqcyywgaywg;
        uaiqqcsoksgukasg:
        okeecmwsuoikguuo:
        goto iqyqgqwwaaigmuou;
        iuoqiecqaoosioey:
        iquykqikookaokgq:
        goto woqsaqwocioumoeu;
        emomkqccysciiqya:
        if (!$aaqqkgyougeiueyq->ygswmewosceowmya()) {
            goto cwoaockwkoukuwae;
        }
        goto ywykuacciwwkwmmy;
        gsgocqicesmaecse:
        if ($mksyucucyswaukig instanceof Model) {
            goto uwswkegomekswkus;
        }
        goto oskwwcgyuwkiuacu;
        ywykuacciwwkwmmy:
        $mgugyyocqwmeeuai = $aaqqkgyougeiueyq->mwikyscisascoeea();
        goto qgcgucmskokqquwk;
        qmqumgawyyqqamoa:
        qiyiyuwmuoamwccs:
        goto ewcyigsymwuuogci;
        wgeskeagymiuoigi:
        if ($aaqqkgyougeiueyq->iueigwuckeaswyuu()) {
            goto pmaiksascsegweci;
        }
        goto mcoyaaiggymgcsgq;
        mcoyaaiggymgcsgq:
        
        $ayegqaqygsqsmews = $mksyucucyswaukig->belongsTo($egkyssmuqcwaciya);
        goto wcqyakkqcgmeqaag;
        ukyoyoqcyywgaywg:
        ceesgeawumeqkcic:
        goto ugowokkqeoeugkqe;
        ewcyigsymwuuogci:
        
        $ayegqaqygsqsmews = $mksyucucyswaukig->hasMany($egkyssmuqcwaciya);
        goto auauyoooouqkickk;
        swkukukimeueycaq:
        $mksyucucyswaukig = $this->cyyiiykmaeuqqgok($aokagokqyuysuksm);
        goto ccqkugckigeckeqa;
        auauyoooouqkickk:
        akkmaiaiamyaikqe:
        goto egcsskmsysqiiikm;
        gsiagogeoqwqekei:
        cwoaockwkoukuwae:
        goto yuccckoykmccwyce;
        emiyocoiuwcucuwu:
    }
    
    public function qiwiemuiqiugqqqg(Model $mksyucucyswaukig, $icwicymcioeyeyek)
    {
        foreach ($icwicymcioeyeyek as $uusmaiomayssaecw => $qqswgiawgeaeoecu) {
            goto ssoooeigmwugyycm;
            aimaqcomigwccomu:
            smmgkqeacswimyas:
            goto osawsyawkikquqya;
            ikwamukqumiokwkk:
            if (!is_numeric($qqswgiawgeaeoecu)) {
                goto ewugkyumwuomukie;
            }
            goto uueyawewomkuiiwc;
            ckagywkumgkaswyy:
            goto cuamsmyiamaicwou;
            goto oswgoyqaacoyqegu;
            emsuycioaeoeeeqo:
            if ($aaqqkgyougeiueyq->gumeeckcowwoyoci()) {
                goto iqicwseckoykqowm;
            }
            goto koaeayomowaiywam;
            qqowguycmsmuauyu:
            agoikageaeouqaqi:
            goto yseacqgykcseamce;
            eicuoesagiuykmos:
            goto yisooseceggsgyqw;
            goto eqkaikmaegscweqq;
            koaeayomowaiywam:
            if (!$aaqqkgyougeiueyq->eiyqqesoywqkegwu()) {
                goto wwigiswokyqkamsu;
            }
            goto ikwamukqumiokwkk;
            awmyoukmqymausgu:
            wwigiswokyqkamsu:
            goto eicuoesagiuykmos;
            yyousguikogqkecs:
            
            $csamwuowsigosqys->hasMany($swmgqkqyqcgemack)->save($mksyucucyswaukig);
            goto syggoyqwycmmcuck;
            yseacqgykcseamce:
            uceksuykgsckwwsu:
            goto xkgykmoskoqykakc;
            yoeaiskyyqgqiwga:
            if ($aaqqkgyougeiueyq->iueigwuckeaswyuu()) {
                goto aegiwggkecgaiocs;
            }
            goto ioaeiakqkiuqymoq;
            symwoekuwqcmowwo:
            if ($aaqqkgyougeiueyq->wmomygggskkoqess()) {
                goto awwwoikmmaisyisy;
            }
            goto emsuycioaeoeeeqo;
            syggoyqwycmmcuck:
            qquugwwesqswouyc:
            goto owwwikwqsyakweeq;
            rwaeioueucocosgu:
            essokuoguqegyeua:
            goto cuqusekekewuseio;
            guosgucaaeueacgu:
            ummsowuaoeyusgoq:
            goto wowakayqsywcaogm;
            ogwosuisocqykoma:
            cuamsmyiamaicwou:
            goto rwaeioueucocosgu;
            usiiuuommggemcke:
            if (!is_array($qqswgiawgeaeoecu)) {
                goto kmwwamokwgagomye;
            }
            goto aagewueuesckuqke;
            icasgckmuawkaksg:
            $egkyssmuqcwaciya = $aaqqkgyougeiueyq->uecyuoauykiqqkey();
            goto aeywmsqkisycgqce;
            wowakayqsywcaogm:
            aegiwggkecgaiocs:
            goto ogwosuisocqykoma;
            mkauomqacwwmyigy:
            gamuuauwykwgaegc:
            goto cmsgssaekakgcqmg;
            eqkaikmaegscweqq:
            iqicwseckoykqowm:
            goto oukacgcyoiggqosq;
            uueyawewomkuiiwc:
            $csamwuowsigosqys = $kooyscwkscsogysg->cyyiiykmaeuqqgok($qqswgiawgeaeoecu);
            goto wqcquwuiqkqaoamo;
            cwkwkgkqasguwscg:
            if (!$kooyscwkscsogysg instanceof Model) {
                goto essokuoguqegyeua;
            }
            goto makqqsaegsesgquq;
            oukacgcyoiggqosq:
            $myqeggyewswyoowe = [];
            goto usiiuuommggemcke;
            uyisqeuweamsqwgg:
            if (!$aaqqkgyougeiueyq instanceof Foreign) {
                goto agoikageaeouqaqi;
            }
            goto icasgckmuawkaksg;
            cssysqmcgcuwyyuu:
            if (!$miowmmgaiagcuyoo instanceof Model) {
                goto ummsowuaoeyusgoq;
            }
            goto aesgakksmyecsusi;
            aeywmsqkisycgqce:
            if (!$egkyssmuqcwaciya) {
                goto aqoyesawuayoeuag;
            }
            goto mawsaauyquacosus;
            cgoqqicyaiwasqme:
            yisooseceggsgyqw:
            goto ckagywkumgkaswyy;
            cuqusekekewuseio:
            aqoyesawuayoeuag:
            goto qqowguycmsmuauyu;
            cmsgssaekakgcqmg:
            if (!$myqeggyewswyoowe) {
                goto smmgkqeacswimyas;
            }
            goto ckscysysmayieagk;
            ioaeiakqkiuqymoq:
            $miowmmgaiagcuyoo = $kooyscwkscsogysg->cyyiiykmaeuqqgok($qqswgiawgeaeoecu);
            goto cssysqmcgcuwyyuu;
            igewmkyikyaiamsq:
            
            $miowmmgaiagcuyoo->hasOne($accumooemgmowewu)->save($mksyucucyswaukig);
            goto guosgucaaeueacgu;
            csueasskicaaoaii:
            $swmgqkqyqcgemack = self::uqggkiomyiceyooa();
            goto yyousguikogqkecs;
            osawsyawkikquqya:
            kmwwamokwgagomye:
            goto cgoqqicyaiwasqme;
            makqqsaegsesgquq:
            $gqkcqoaumsuwkqom = $kooyscwkscsogysg->primaryKey;
            goto symwoekuwqcmowwo;
            wqcquwuiqkqaoamo:
            if (!$csamwuowsigosqys instanceof Model) {
                goto qquugwwesqswouyc;
            }
            goto csueasskicaaoaii;
            ckscysysmayieagk:
            
            $mksyucucyswaukig->hasMany($egkyssmuqcwaciya)->saveMany($myqeggyewswyoowe);
            goto aimaqcomigwccomu;
            mawsaauyquacosus:
            $kooyscwkscsogysg = $egkyssmuqcwaciya::symcgieuakksimmu();
            goto cwkwkgkqasguwscg;
            owwwikwqsyakweeq:
            ewugkyumwuomukie:
            goto awmyoukmqymausgu;
            ssoooeigmwugyycm:
            $aaqqkgyougeiueyq = $this->oyeskqayoscwciem()->uqeoyqiwywwmsiew($uusmaiomayssaecw);
            goto uyisqeuweamsqwgg;
            aesgakksmyecsusi:
            $accumooemgmowewu = $mksyucucyswaukig::uqggkiomyiceyooa();
            goto igewmkyikyaiamsq;
            aagewueuesckuqke:
            foreach ($qqswgiawgeaeoecu as $eqgoocgaqwqcimie) {
                goto csmmiwegweusuimi;
                wgaggmmmgeumiouk:
                $myqeggyewswyoowe[] = $msqyiyqkassmkgce;
                goto cwkouaeieiyiykim;
                ckkecwwioeywccwa:
                eemgoyuiauwuomcw:
                goto koceayskwssiisyi;
                uawcmuiummigeqea:
                smeeigiqmommceye:
                goto qmmieiquoegeaqok;
                auqmeqswuuioemge:
                $msqyiyqkassmkgce = $this->ckcicmwwiccamyqk($kooyscwkscsogysg, $msqyiyqkassmkgce, $eqgoocgaqwqcimie);
                goto iiwcuqeosmwgogus;
                imsougccawciqsuw:
                $msqyiyqkassmkgce = $kooyscwkscsogysg->ciqgsyoasskoiukm($eqgoocgaqwqcimie);
                goto syaegaiuaioeaocq;
                cwkouaeieiyiykim:
                amcqceoiqgmwisce:
                goto uawcmuiummigeqea;
                csmmiwegweusuimi:
                if ($aokagokqyuysuksm = ManipulateArray::get($eqgoocgaqwqcimie, $gqkcqoaumsuwkqom, $qqswgiawgeaeoecu)) {
                    goto eemgoyuiauwuomcw;
                }
                goto imsougccawciqsuw;
                uqsoseuiwgukywas:
                if (!$msqyiyqkassmkgce) {
                    goto amcqceoiqgmwisce;
                }
                goto wgaggmmmgeumiouk;
                iiwcuqeosmwgogus:
                ikgwcgcgcaaaskig:
                goto uqsoseuiwgukywas;
                koceayskwssiisyi:
                $msqyiyqkassmkgce = $kooyscwkscsogysg->cyyiiykmaeuqqgok($aokagokqyuysuksm);
                goto auqmeqswuuioemge;
                syaegaiuaioeaocq:
                goto ikgwcgcgcaaaskig;
                goto ckkecwwioeywccwa;
                qmmieiquoegeaqok:
            }
            goto mkauomqacwwmyigy;
            oswgoyqaacoyqegu:
            awwwoikmmaisyisy:
            goto yoeaiskyyqgqiwga;
            xkgykmoskoqykakc:
        }
        cyikoqssoemgwyyk:
    }
    
    public function gkieuyoqcusoksmg($icwicymcioeyeyek, $mksyucucyswaukig = null) : bool
    {
        goto sumsswekusmugwcc;
        kewooggoaouemcaq:
        return $sogksuscggsicmac;
        goto uwwooikcoamioeaq;
        suaouieqqoauuwme:
        aoiaykkukcyyoaio:
        goto kewooggoaouemcaq;
        sumsswekusmugwcc:
        $sogksuscggsicmac = true;
        goto quoamckmecwqkkus;
        quoamckmecwqkkus:
        foreach ($icwicymcioeyeyek as $oaukocmsckciqaok => $eqgoocgaqwqcimie) {
            goto iwccwiiumyyccquy;
            egumckcoaaowkgoy:
            $sogksuscggsicmac = false;
            goto qyeewwmuogssaegc;
            gcumogmsuuyuwsie:
            ksmmosiwmsousgkg:
            goto uyouoeaoqcieeayg;
            ycoomucecckyease:
            $this->kmsyisgakgwscyey(sprintf(__("\45\163\x20\x63\141\x6e\x6e\x27\x74\40\x62\x65\40\x65\x6d\160\164\171\x2c\x20\x70\x6c\145\141\163\x65\40\x66\151\154\154\x20\x69\x74\56", PR__CMN__FOUNDATION), ManipulateHTML::ciuuiyckmsygceis($aaqqkgyougeiueyq->qcgakseyaikigqco())), $oaukocmsckciqaok);
            goto myegqayeyqaigmqi;
            qyeewwmuogssaegc:
            komaoacquqwgysgc:
            goto wiaugmimkuikykys;
            eokgqgsswamgswqu:
            uwsgccckqqookusc:
            goto gcumogmsuuyuwsie;
            mqigiiusqaieqeaa:
            $ceiwsaacewygcsqg = $this->kumuygiiqswoyasy();
            goto igeiewqcwieuawms;
            uisaoikyqyseiyas:
            if ($sogksuscggsicmac) {
                goto ucuyaouwikuyyemm;
            }
            goto gqaiqcgwsmyugimu;
            wiaugmimkuikykys:
            siwekyoigwegiosa:
            goto uisaoikyqyseiyas;
            qqocmsauqkwoscqy:
            ckyeeqwsugcoksek:
            goto asoweekcciigkweo;
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
            caiiwysgssyqoouc:
            if (!(!$aaqqkgyougeiueyq->yseywyqacmugimme() && !$eqgoocgaqwqcimie)) {
                goto ckyeeqwsugcoksek;
            }
            goto ycoomucecckyease;
            iwccwiiumyyccquy:
            $aaqqkgyougeiueyq = $this->oyeskqayoscwciem()->uqeoyqiwywwmsiew($oaukocmsckciqaok);
            goto swmmiykiawycgoes;
            kuyeoaemuwcqkoae:
            msegcuqmgweissmw:
            goto cuwasskqkoysieey;
            myegqayeyqaigmqi:
            $sogksuscggsicmac = false;
            goto qqocmsauqkwoscqy;
            akuiskwoukoesuou:
            ucuyaouwikuyyemm:
            goto eokgqgsswamgswqu;
            swmmiykiawycgoes:
            if (!($aaqqkgyougeiueyq instanceof Field && !$aaqqkgyougeiueyq instanceof Foreign)) {
                goto uwsgccckqqookusc;
            }
            goto zsweawcwmisoogao;
            cuwasskqkoysieey:
            $myagqecycsaiyqsk = $this->akkkoiiymmamsauc($eqgoocgaqwqcimie, $oaukocmsckciqaok);
            goto mqigiiusqaieqeaa;
            wuqysikmouuiawwi:
            $this->kmsyisgakgwscyey(sprintf(__("\45\x73\x20\151\163\x20\165\x6e\151\161\x75\145\x20\141\x6e\x64\40\x65\x6e\164\x65\x72\x65\144\x20\x76\x61\x6c\x75\x65\x20\141\154\162\x65\141\144\x79\40\x65\x78\151\x73\x74\x2e", PR__CMN__FOUNDATION), ManipulateHTML::ciuuiyckmsygceis($aaqqkgyougeiueyq->qcgakseyaikigqco())), $oaukocmsckciqaok);
            goto egumckcoaaowkgoy;
            zsweawcwmisoogao:
            if ($aaqqkgyougeiueyq->kweqqkiwiugikyam()) {
                goto msegcuqmgweissmw;
            }
            goto caiiwysgssyqoouc;
            uyouoeaoqcieeayg:
        }
        goto suaouieqqoauuwme;
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
            gsewiomcwceysquc:
            $aaqqkgyougeiueyq = $owgumcsyqsamiemg->oyeskqayoscwciem()->uqeoyqiwywwmsiew($oaukocmsckciqaok);
            goto ouyqaaywykeqimmi;
            ggqmaecmwgeqkuge:
            ukuuumkkameeuesk:
            goto ieyimqciuswcokke;
            migwkuscokgmogea:
            if (!$aaqqkgyougeiueyq instanceof Boolean) {
                goto kwwoucisuqcmqmqu;
            }
            goto ooiaoiygiiamsmum;
            gkekqmkyumkmywky:
            osgmksikyyqqcaag:
            goto muoougyakwgcicuo;
            ooiaoiygiiamsmum:
            $eqgoocgaqwqcimie = $eqgoocgaqwqcimie === "\157\x6e";
            goto qkmmgqgcegcuawuu;
            qkmmgqgcegcuawuu:
            kwwoucisuqcmqmqu:
            goto auouiegmaiasywkw;
            ouyqaaywykeqimmi:
            if (!($aaqqkgyougeiueyq instanceof Field && !$aaqqkgyougeiueyq instanceof Foreign)) {
                goto osgmksikyyqqcaag;
            }
            goto egicsmysugywycqq;
            aqaseyqwkgoyaiyg:
            $mksyucucyswaukig->cmgoqeksagmigwmg($oaukocmsckciqaok, $eqgoocgaqwqcimie);
            goto gkekqmkyumkmywky;
            ieyimqciuswcokke:
            $eqgoocgaqwqcimie = wp_json_encode($eqgoocgaqwqcimie);
            goto csismgmuaiogeucq;
            auouiegmaiasywkw:
            goto muygyqckegkuiwyi;
            goto ggqmaecmwgeqkuge;
            csismgmuaiogeucq:
            muygyqckegkuiwyi:
            goto aqaseyqwkgoyaiyg;
            muoougyakwgcicuo:
            yqysciwesgsiuayi:
            goto ywgqeosekkwswyac;
            egicsmysugywycqq:
            if ($aaqqkgyougeiueyq instanceof Json && $eqgoocgaqwqcimie) {
                goto ukuuumkkameeuesk;
            }
            goto migwkuscokgmogea;
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
        mkayykckiywayuko:
        goto ksoygkwycsqicooa;
        goto wmgyemaskuuowuum;
        goimqkkiyegggysa:
        $this->validationErrors[] = $iswcokucwmiosiaq;
        goto mkayykckiywayuko;
        cgykkwqwamaougme:
        return $this;
        goto gcmmgmowsmgwkoye;
        akkwoqycamwckeui:
        if ($uusmaiomayssaecw) {
            goto qqwukskiymcymgqc;
        }
        goto goimqkkiyegggysa;
        ssqemoqcimayewqm:
        $this->validationErrors[$uusmaiomayssaecw] = $iswcokucwmiosiaq;
        goto kquwekemiawwmuqs;
        kquwekemiawwmuqs:
        ksoygkwycsqicooa:
        goto cgykkwqwamaougme;
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
    
    public function akkkoiiymmamsauc(?string $eqgoocgaqwqcimie = null, ?string $aiowsaccomcoikus = null, $wkkweuacukumqmya = "\x2a")
    {
        goto oiemkksaoaiyckgi;
        ciuwaqyasauagkeu:
        if (!$siykeiywomwwuoiw) {
            goto omqkeukuycyymmke;
        }
        goto gakmkuaayakeymaa;
        gakmkuaayakeymaa:
        
        $siykeiywomwwuoiw = $siykeiywomwwuoiw->where($aiowsaccomcoikus, self::EQUAL_SYMBOL, $eqgoocgaqwqcimie);
        goto sucquwgiacwooomw;
        wwuiwkkgqescsyyw:
        imsmosgqcqgeksws:
        goto wqameeueegakoqya;
        susauskwueokgaku:
        return $wkawwaegamqisugs;
        goto usaykyskgyqwquca;
        oiemkksaoaiyckgi:
        if ($aiowsaccomcoikus) {
            goto imsmosgqcqgeksws;
        }
        goto wicqcmuwosqwyggg;
        sucquwgiacwooomw:
        $wkawwaegamqisugs = $this->geeumyocaqwwquwk($siykeiywomwwuoiw, $wkkweuacukumqmya);
        goto sgoioieqoekqywik;
        eeyksuucagkaqmsi:
        $wkawwaegamqisugs = null;
        goto ciuwaqyasauagkeu;
        wicqcmuwosqwyggg:
        $aiowsaccomcoikus = $this->kumuygiiqswoyasy();
        goto wwuiwkkgqescsyyw;
        sgoioieqoekqywik:
        omqkeukuycyymmke:
        goto susauskwueokgaku;
        wqameeueegakoqya:
        $siykeiywomwwuoiw = $this->gqaysymikgeawkqa();
        goto eeyksuucagkaqmsi;
        usaykyskgyqwquca:
    }
    
    public function oqomcmyuuakigusk($ikgwqyuyckaewsow = [], $wkkweuacukumqmya = ["\52"])
    {
        return $this->geeumyocaqwwquwk($this->kqewyqqqiyiouaou($ikgwqyuyckaewsow), $wkkweuacukumqmya);
    }
    
    private function geeumyocaqwwquwk($siykeiywomwwuoiw, $wkkweuacukumqmya = ["\52"])
    {
        goto mewuwwsmewiimgsi;
        gaqcesscgywweieq:
        return $wkawwaegamqisugs;
        goto swqwssmgwikmieoa;
        msmcmycooiwwqiik:
        $wkawwaegamqisugs = $this->awkaaqmauiuwwsca($siykeiywomwwuoiw, $wkkweuacukumqmya);
        goto imagiycyokkwucge;
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
        qaswkqkwqgqqcyws:
        $cmaccwokqweqweqi = false;
        goto ekimmsiekwwoawym;
        ukicwqcoggwiskgo:
        
        $cmaccwokqweqweqi = $siykeiywomwwuoiw->exists();
        goto maqmyigowgsmqaco;
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
        eigowcoqoqkwuoiq:
        return $cmaccwokqweqweqi;
        goto iqiuaammwkeiamuo;
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
        $meqocwsecsywiiqs = __("\x44\x65\x6c\x65\164\145", PR__CMN__FOUNDATION);
        return ManipulateHTML::uskieqmcqyecigmy(["\164\171\x70\145" => "\145\162\162\x6f\162", "\164\151\164\x6c\145" => $meqocwsecsywiiqs, "\143\157\x6e\164\x65\x6e\164" => __("\101\x72\x65\40\171\157\165\x20\163\x75\x72\145\40\171\x6f\165\40\x77\141\x6e\x74\40\164\157\x20\144\145\x6c\145\x74\145\x20\x74\150\151\x73\x20\x69\164\145\155\x3f", PR__CMN__FOUNDATION), "\x62\165\x74\x74\x6f\156\163" => ["\143\x61\x6e\143\x65\x6c", ["\x68\x72\145\146" => $iwywmkygwewiamwm, "\143\154\x61\163\x73" => "\x70\x72\55\x6f\162\155\x2d\141\x63\164\x69\x6f\156\40\x62\164\156\40\142\164\x6e\55\x70\162\151\155\141\x72\x79", "\164\x69\164\154\145" => $meqocwsecsywiiqs, "\x64\x69\x73\155\151\x73\x73" => true]]]);
    }
    
    public function rkmkouiquumiecqy($iwywmkygwewiamwm) : string
    {
        $meqocwsecsywiiqs = __("\x44\145\x6c\x65\x74\145", PR__CMN__FOUNDATION);
        return ManipulateHTML::uuccukgasskgimsq("\141", ["\x68\x72\145\146" => "\43", "\x63\x6c\141\163\163" => "\163\x75\142\x6d\x69\164\144\x65\x6c\145\164\145\x20\x70\x72\55\143\157\x6e\146\x69\162\x6d\141\x62\x6c\x65\x2d\141\x63\x74\x69\x6f\156", "\x64\141\164\141\x2d\143\157\x6e\146\151\147" => $this->ymaommgoigkakyes($iwywmkygwewiamwm)], $meqocwsecsywiiqs);
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
            kyoogyegwukaqoce:
            $aaqqkgyougeiueyq = ManipulateArray::get($qssskwiqeumgkago, $uusmaiomayssaecw);
            goto eocaacmwsqqqauuc;
            emsqksecccqeueoa:
            $uusmaiomayssaecw = ManipulateString::ogimogiceeekegoi($pkyyagewkiyckmwy);
            goto ogmueiimgsogucqa;
            ymsscygscwwicumm:
            if (!($pkyyagewkiyckmwy && $eqgoocgaqwqcimie)) {
                goto iwcsismeakueeiya;
            }
            goto oouisuwokmqgwiau;
            qogogggqiuuewakw:
            goto eqmcakqmqkqkweww;
            goto tokguaiieequuwwa;
            tokguaiieequuwwa:
            gcgckeksyymcgays:
            goto ccgmicuyeoggoecu;
            ewosekcicaqucsua:
            $eqgoocgaqwqcimie = '';
            goto mugaisykgmqcaggg;
            keygauyiuaycggcw:
            zawceoyikyuwoucg:
            goto memcsokyqmowucuo;
            wkgmgumyswiayyae:
            aqwcyyigiukqikui:
            goto aiaayumowqswqqqk;
            eocaacmwsqqqauuc:
            if ($aaqqkgyougeiueyq instanceof Field) {
                goto aqwcyyigiukqikui;
            }
            goto maougsuwuoiecwgy;
            wwugkwcimumgukko:
            iwcsismeakueeiya:
            goto keygauyiuaycggcw;
            pseqauyuqgmccuwe:
            $sqqewmoeaekuyyas = 1000;
            goto smqeaeiimomewqsw;
            oouisuwokmqgwiau:
            $oammesyieqmwuwyi[$uusmaiomayssaecw] = [self::LABEL => $pkyyagewkiyckmwy, self::VALUE => $eqgoocgaqwqcimie, self::PRIORITY => $sqqewmoeaekuyyas];
            goto wwugkwcimumgukko;
            gkmgqmcgouseqwyg:
            if (!is_numeric($uusmaiomayssaecw)) {
                goto gcgckeksyymcgays;
            }
            goto emsqksecccqeueoa;
            mugaisykgmqcaggg:
            eqmcakqmqkqkweww:
            goto sgamuuiycksmssoi;
            sgamuuiycksmssoi:
            $eqgoocgaqwqcimie = $this->kamyqikiiuwqiiuw($uusmaiomayssaecw, $eqgoocgaqwqcimie, $mksyucucyswaukig);
            goto ymsscygscwwicumm;
            ogmueiimgsogucqa:
            $eqgoocgaqwqcimie = ManipulateArray::get($mksyucucyswaukig, $uusmaiomayssaecw);
            goto kyoogyegwukaqoce;
            aiaayumowqswqqqk:
            $pkyyagewkiyckmwy = $aaqqkgyougeiueyq->qcgakseyaikigqco();
            goto swmeecwwakawqqcw;
            ccgmicuyeoggoecu:
            $sqqewmoeaekuyyas = 0;
            goto ewosekcicaqucsua;
            smqeaeiimomewqsw:
            goto kmgoiquwmsayywsc;
            goto wkgmgumyswiayyae;
            awkmmuyuakwiaqae:
            kmgoiquwmsayywsc:
            goto qogogggqiuuewakw;
            swmeecwwakawqqcw:
            $sqqewmoeaekuyyas = $aaqqkgyougeiueyq->yywskysiycwkwsgw();
            goto awkmmuyuakwiaqae;
            maougsuwuoiecwgy:
            $pkyyagewkiyckmwy = ManipulateArray::get([self::CREATED_AT => __("\x43\162\145\x61\x74\145\x64\40\x41\x74", PR__CMN__FOUNDATION), self::UPDATED_AT => __("\125\x70\x64\141\x74\145\x64\x20\x41\x74", PR__CMN__FOUNDATION)], $uusmaiomayssaecw, '');
            goto pseqauyuqgmccuwe;
            memcsokyqmowucuo:
        }
        goto ecyauwageoukkaaq;
        ciwcwcqkgkmoguok:
        $oammesyieqmwuwyi = [];
        goto ksseoiqcgiqsamwy;
        uqqawaaiywcggesu:
        return ManipulateArray::yaeiiwwyckwugsem($oammesyieqmwuwyi);
        goto oamaoeaeoyckwmgk;
        ksseoiqcgiqsamwy:
        if (!($mksyucucyswaukig && $yygmoeguaqyumuui)) {
            goto gyaoqaggggoiaoqs;
        }
        goto qgeiemoywoccmwgw;
        cceesacikyckyiim:
        gyaoqaggggoiaoqs:
        goto uqqawaaiywcggesu;
        ecyauwageoukkaaq:
        imygueoqiqikwcws:
        goto cceesacikyckyiim;
        qgeiemoywoccmwgw:
        $qssskwiqeumgkago = $this->oyeskqayoscwciem()->aeosueemgsygqese();
        goto wameiecycmkcuimk;
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
        oscukosgcqaqwcmi:
        $eqgoocgaqwqcimie = $aiooqyausygaasqm;
        goto myasecwmmmiemgik;
        kwmkusgsuoqoyses:
        ceegwysaccigqqck:
        goto eacqgkqmwkcsscec;
        aqmauesokgqoyugm:
        cesywumicwqkaeaq:
        goto scigcaogysowccsk;
        ugsomcmgekqayoqc:
        wmasiggggymwkeqs:
        goto kecgiacuyaumcewe;
        csiokukquwmccgqc:
        skokkuuieagmuwgm:
        goto sgaiaqoewagooqoo;
        qawqosgwykeguasw:
        oukqakowgcgeugam:
        goto oscukosgcqaqwcmi;
        gyeqsyqiosmysiio:
        $eqgoocgaqwqcimie = $aokagokqyuysuksm;
        goto skwuueyuqkueasuu;
        skuykkqcgakewusu:
        $eqgoocgaqwqcimie = $this->wusgwkaycokeckqs($eqgoocgaqwqcimie);
        goto imyoiukqcmewqkkw;
        cgeuosayqssasuou:
        if (!is_numeric($eqgoocgaqwqcimie)) {
            goto comiusqosmykagiq;
        }
        goto ummgomwmsqygiqcy;
        ycekisssayygosaw:
        goto aoyqwwsacwqumucg;
        goto qawqosgwykeguasw;
        oykuimwkwcmuekci:
        goto qewmkgeeuomgomia;
        goto icausgkyooymuwqq;
        sgiescgmgsowcakk:
        if ($aaqqkgyougeiueyq instanceof File) {
            goto vwyusaemeqkswgee;
        }
        goto cgeuosayqssasuou;
        myasecwmmmiemgik:
        aoyqwwsacwqumucg:
        goto kwmkusgsuoqoyses;
        isqemmgcymcqgmyu:
        if (!($this->kumuygiiqswoyasy() === $qgoqiacsiccwoawi)) {
            goto cesywumicwqkaeaq;
        }
        goto muuiwammayaceuue;
        giqssgogumimqkeo:
        csqwmisikmgeaaky:
        goto wgiuiaqoekymkwwo;
        ggwkueqyesouyaya:
        if ($eqgoocgaqwqcimie) {
            goto iiakoqmowuggmkqw;
        }
        goto gyeqsyqiosmysiio;
        skwuueyuqkueasuu:
        iiakoqmowuggmkqw:
        goto oeoeeqeaokougsec;
        wwyukkoeeeiiuewk:
        if ($aiooqyausygaasqm = ManipulateAttachment::ecqkouyiioksggkw($eqgoocgaqwqcimie)) {
            goto oukqakowgcgeugam;
        }
        goto qmeskaiqawomuqmk;
        kecgiacuyaumcewe:
        $eqgoocgaqwqcimie = ManipulateArray::get($aaqqkgyougeiueyq->gkwkqmwweiawigae(), $eqgoocgaqwqcimie, $eqgoocgaqwqcimie);
        goto giqssgogumimqkeo;
        guyskocigecaisas:
        $aokagokqyuysuksm = $eqgoocgaqwqcimie;
        goto wugmawaqkksguaoa;
        qyoscouawykeimiu:
        if ($aaqqkgyougeiueyq instanceof DateTime || $aaqqkgyougeiueyq instanceof Timestamp) {
            goto skokkuuieagmuwgm;
        }
        goto wskwmocqgakykmgw;
        eacqgkqmwkcsscec:
        if (!is_numeric($eqgoocgaqwqcimie)) {
            goto uyueemusgoakawmc;
        }
        goto eucysoaqoumycmso;
        ummgomwmsqygiqcy:
        if ($aaqqkgyougeiueyq instanceof Foreign && $aaqqkgyougeiueyq->eiyqqesoywqkegwu()) {
            goto cuqeayuiccuwcyua;
        }
        goto skuykkqcgakewusu;
        eucysoaqoumycmso:
        $eqgoocgaqwqcimie = ManipulateAttachment::qaeeusqkgwagwaqc($eqgoocgaqwqcimie);
        goto kwagmsukmimymmmg;
        qmeskaiqawomuqmk:
        $eqgoocgaqwqcimie = ManipulateHTML::qgsekwygcgawekeq("\151\155\147", ["\x73\162\143" => $eqgoocgaqwqcimie, "\x77\151\x64\164\x68" => "\x38\60", "\150\145\x69\x67\150\164" => "\70\x30"]);
        goto ycekisssayygosaw;
        sgaiaqoewagooqoo:
        $eqgoocgaqwqcimie = $this->ooeucgsymeocguuu($qgoqiacsiccwoawi, $eqgoocgaqwqcimie, null, null, $mksyucucyswaukig);
        goto iugooscuiysaeqgs;
        muuiwammayaceuue:
        return $eqgoocgaqwqcimie;
        goto aqmauesokgqoyugm;
        oeoeeqeaokougsec:
        uiuekqekiguikuce:
        goto ikgusckaomuoiggs;
        imyoiukqcmewqkkw:
        goto uiuekqekiguikuce;
        goto ugoqkakikayagkmm;
        sesqsywwesiycmmq:
        if (!(!is_numeric($eqgoocgaqwqcimie) && ManipulateValidation::wmcwegoisyeeosqu($eqgoocgaqwqcimie))) {
            goto ceegwysaccigqqck;
        }
        goto wwyukkoeeeiiuewk;
        ysswaukcymggikui:
        qewmkgeeuomgomia:
        goto uksgyweoymomgqos;
        gwyguuaqscsukaqg:
        if (!($this->wkcuasmkgoscaiay() || $this->wmwguecgowcscues())) {
            goto ayggscyaoccukyso;
        }
        goto sesqsywwesiycmmq;
        ugoqkakikayagkmm:
        cuqeayuiccuwcyua:
        goto guyskocigecaisas;
        wgiuiaqoekymkwwo:
        goto ayekogimgycgmgau;
        goto csiokukquwmccgqc;
        icausgkyooymuwqq:
        vwyusaemeqkswgee:
        goto gwyguuaqscsukaqg;
        uksgyweoymomgqos:
        goto csqwmisikmgeaaky;
        goto ugsomcmgekqayoqc;
        wugmawaqkksguaoa:
        $eqgoocgaqwqcimie = $this->aouwuegyyugiwksc($qgoqiacsiccwoawi, $mksyucucyswaukig, !$this->wmwguecgowcscues());
        goto ggwkueqyesouyaya;
        icegsqiumouewcqo:
        return $eqgoocgaqwqcimie;
        goto mgeiyeygqcoismqq;
        iugooscuiysaeqgs:
        ayekogimgycgmgau:
        goto icegsqiumouewcqo;
        wskwmocqgakykmgw:
        if ($aaqqkgyougeiueyq instanceof Enumeration) {
            goto wmasiggggymwkeqs;
        }
        goto sgiescgmgsowcakk;
        kwagmsukmimymmmg:
        uyueemusgoakawmc:
        goto ieumcesgiqicqima;
        scigcaogysowccsk:
        $aaqqkgyougeiueyq = $this->oyeskqayoscwciem()->uqeoyqiwywwmsiew($qgoqiacsiccwoawi);
        goto qyoscouawykeimiu;
        ikgusckaomuoiggs:
        comiusqosmykagiq:
        goto oykuimwkwcmuekci;
        ieumcesgiqicqima:
        ayggscyaoccukyso:
        goto ysswaukcymggikui;
        mgeiyeygqcoismqq:
    }
    
    public function geyuyukmwaoksywa($migiiksoiymissge, $ewgwqamkygiqaawc = '', $wwgucssaecqekuek = []) : string
    {
        goto yseysoymiwmicuoi;
        kmemegqksaeuqcow:
        if (!($migiiksoiymissge && $ewgwqamkygiqaawc)) {
            goto wkqumiwieauokkcy;
        }
        goto miqekiwaouwgqgui;
        wuugmygqgsmkgsmc:
        return $nsmgceoqaqogqmuw;
        goto wcuuwegqcysecoom;
        wawwaqicwyyeamqu:
        $nsmgceoqaqogqmuw = ManipulateHTML::ciuuiyckmsygceis($iwywmkygwewiamwm);
        goto quccsmwoagiquqya;
        yseysoymiwmicuoi:
        $nsmgceoqaqogqmuw = '';
        goto kmemegqksaeuqcow;
        miqekiwaouwgqgui:
        $iwywmkygwewiamwm = ManipulateHTML::qgsekwygcgawekeq("\141", ManipulateFormat::omaawkkwwyesqwcc($wwgucssaecqekuek, ["\x68\x72\x65\146" => $migiiksoiymissge, "\x63\x6c\x61\163\163" => "\164\x65\x78\x74\55\x64\x65\143\x6f\162\x61\x74\151\x6f\x6e\x2d\x6e\x6f\x6e\145"]), true, $ewgwqamkygiqaawc);
        goto wawwaqicwyyeamqu;
        quccsmwoagiquqya:
        wkqumiwieauokkcy:
        goto wuugmygqgsmkgsmc;
        wcuuwegqcysecoom:
    }
    
    public function ykaiaukuaeswygey($mksyucucyswaukig, $ikgwqyuyckaewsow, $eqgoocgaqwqcimie, $wamcomkuwysqgwgk = "\74\x64\151\x76\76\45\163\x3a\40\x25\163\74\57\x64\x69\166\x3e") : string
    {
        goto wksaesosugiyoqoe;
        ekgcsqsycamakgak:
        myswmcskaagkuaiq:
        goto iwyomomasqykuwcw;
        mwsuqsikwoimcgiq:
        if (!$ukmeuaouyackgwaa) {
            goto myswmcskaagkuaiq;
        }
        goto moiwoyyuauwqywom;
        iwyomomasqykuwcw:
        return $eqgoocgaqwqcimie;
        goto jwicyuowwocymagu;
        ygmkqoaymoicisso:
        wyioauuuyckygcaq:
        goto mwsuqsikwoimcgiq;
        moiwoyyuauwqywom:
        $eqgoocgaqwqcimie = "{$eqgoocgaqwqcimie}\74\150\x72\76{$ukmeuaouyackgwaa}";
        goto ekgcsqsycamakgak;
        kkiwuqcmoqmiquqq:
        foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) {
            goto geusysuemiqgegcw;
            geusysuemiqgegcw:
            $uiymkeeaukcyqqik = ManipulateArray::get($mksyucucyswaukig, $aiowsaccomcoikus);
            goto siowcuqygwiqumii;
            cmugciymsqakcssq:
            iyaaokkcuycqywco:
            goto omgecsuaqiqymwms;
            yuiwacwscsiukyqe:
            if (!($aiowsaccomcoikus && $uiymkeeaukcyqqik)) {
                goto iyaaokkcuycqywco;
            }
            goto oooiaawaqeogogky;
            siowcuqygwiqumii:
            $aiowsaccomcoikus = ManipulateArray::get($this->oyeskqayoscwciem()->aeosueemgsygqese(), $aiowsaccomcoikus);
            goto yuiwacwscsiukyqe;
            oooiaawaqeogogky:
            $ukmeuaouyackgwaa .= sprintf($wamcomkuwysqgwgk, $aiowsaccomcoikus->qcgakseyaikigqco(), $this->kamyqikiiuwqiiuw($aiowsaccomcoikus->mwikyscisascoeea(), $uiymkeeaukcyqqik, $mksyucucyswaukig));
            goto cmugciymsqakcssq;
            omgecsuaqiqymwms:
            suweomwcwyiiscee:
            goto qqucyqsowaqsmagw;
            qqucyqsowaqsmagw:
        }
        goto ygmkqoaymoicisso;
        wksaesosugiyoqoe:
        $ukmeuaouyackgwaa = '';
        goto kkiwuqcmoqmiquqq;
        jwicyuowwocymagu:
    }
    
    public function wkmkqaiwuqouweye($aiowsaccomcoikus, $eqgoocgaqwqcimie, $cackiyicawmkyqqg = self::EQUAL_SYMBOL, $siykeiywomwwuoiw = null) : ?Builder
    {
        try {
            goto egeeugucoaimuyai;
            eqqgiqaceosmskyq:
            laqgkacikykmcsos:
            goto gcikiyucocqiqkic;
            coswqmcmeyyaemcs:
            if (!$siykeiywomwwuoiw) {
                goto laqgkacikykmcsos;
            }
            goto amcyugmyywgmwyys;
            iweqeyugoiogqcsw:
            $siykeiywomwwuoiw = $this->gqaysymikgeawkqa();
            goto yiswuyuuwakywmiy;
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
    
    public function woimamkkeyoyauoa($aiowsaccomcoikus, $eqgoocgaqwqcimie, $cackiyicawmkyqqg = self::EQUAL_SYMBOL, $wkkweuacukumqmya = ["\52"], $aiamqeawckcsuaou = self::GET) : array
    {
        goto ykomkgsekoimwoga;
        uooyycimwyiscwik:
        $aqykuigiuwmmcieu = $this->aocqcwaksksgckaw($siykeiywomwwuoiw, $wkkweuacukumqmya, $aiamqeawckcsuaou);
        goto wgyckicucikswwgc;
        toacieymkgsmouum:
        if (!$siykeiywomwwuoiw) {
            goto kgaiygkqciegamkk;
        }
        goto uooyycimwyiscwik;
        ykomkgsekoimwoga:
        $aqykuigiuwmmcieu = [];
        goto uwacyygkmmwmqumm;
        uwacyygkmmwmqumm:
        $siykeiywomwwuoiw = $this->wkmkqaiwuqouweye($aiowsaccomcoikus, $cackiyicawmkyqqg, $eqgoocgaqwqcimie);
        goto toacieymkgsmouum;
        kuewoymyameyusgi:
        return $aqykuigiuwmmcieu;
        goto saqssgocioekcyik;
        wgyckicucikswwgc:
        kgaiygkqciegamkk:
        goto kuewoymyameyusgi;
        saqssgocioekcyik:
    }
    
    public function mkcmqiiwgccguoko($aiowsaccomcoikus, $eqgoocgaqwqcimie, $cackiyicawmkyqqg = self::EQUAL_SYMBOL, $wkkweuacukumqmya = ["\x2a"]) : array
    {
        return $this->woimamkkeyoyauoa($aiowsaccomcoikus, $eqgoocgaqwqcimie, $cackiyicawmkyqqg, $wkkweuacukumqmya, self::PLUCK);
    }
    
    public function cwgkcyyaymmsomqa($mguygkocuoaoqqkg) : array
    {
        goto cusmikqmacqsyoma;
        imccgasockkumogm:
        foreach ($mguygkocuoaoqqkg as $momcykaoccoymeig => $mksyucucyswaukig) {
            $mguygkocuoaoqqkg[$momcykaoccoymeig] = $this->scqakcemaqsqkema($mksyucucyswaukig);
            aygymyyeaiouckwm:
        }
        goto yawiksokukeuwumm;
        aacaaeuuscacmgws:
        cqggosuciisguwka:
        goto imccgasockkumogm;
        qcqecwaeywouwwyw:
        $mguygkocuoaoqqkg = [];
        goto uyiyiugiugqiqgce;
        ciiggekwccqceewc:
        return $mguygkocuoaoqqkg;
        goto kgseuyacuyamciku;
        yawiksokukeuwumm:
        ocqocwcocigwogao:
        goto wiisumwwuyqmqggs;
        cusmikqmacqsyoma:
        if ($mguygkocuoaoqqkg && is_array($mguygkocuoaoqqkg)) {
            goto cqggosuciisguwka;
        }
        goto qcqecwaeywouwwyw;
        wiisumwwuyqmqggs:
        iaemoucqgyeioome:
        goto ciiggekwccqceewc;
        uyiyiugiugqiqgce:
        goto iaemoucqgyeioome;
        goto aacaaeuuscacmgws;
        kgseuyacuyamciku:
    }
    
    public function scqakcemaqsqkema($mksyucucyswaukig, $yiosiwewiecqmkaa = [])
    {
        goto aockoackcyuqgoky;
        iescmuyqmwkeagcg:
        return $mksyucucyswaukig;
        goto eyacawwuwcgegekw;
        scuysmagomwasugy:
        foreach ($mksyucucyswaukig as $aiowsaccomcoikus => $eqgoocgaqwqcimie) {
            goto auyuqgiwqummogko;
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
            ouiaceqmgmusysiq:
            oqwssckcieuowiwc:
            goto egcykicymsycioaq;
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
        uyeiksuwckaowkqm:
        $aqykuigiuwmmcieu = $this->aocqcwaksksgckaw($siykeiywomwwuoiw, $wkkweuacukumqmya);
        goto qiykkoqakyesmswm;
        qiykkoqakyesmswm:
        eyecoeksswsicqkq:
        goto ieceiycekgcommqi;
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
        umskgiqgaemaokmw:
    }
    
    public function kqewyqqqiyiouaou($ikgwqyuyckaewsow, $siykeiywomwwuoiw = null)
    {
        goto aakegewkccyyeuwc;
        aakegewkccyyeuwc:
        if (!(!$siykeiywomwwuoiw instanceof Builder && !$siykeiywomwwuoiw instanceof Relation)) {
            goto ieuoskasoucciwkq;
        }
        goto iewmwscqgiiicygc;
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
            aicoaaeeewwmioou:
            foreach ($ikgwqyuyckaewsow as $qgoqiacsiccwoawi => $ywmkwiwkosakssii) {
                goto mcsucqagsqysgieu;
                mcsucqagsqysgieu:
                $mqogqgswmasasmik = ManipulateArray::get($ywmkwiwkosakssii, self::NOT, false);
                goto yuuygkmacmmcakma;
                wgegmwgsmsgmceqo:
                wskuiymiemyqssui:
                goto kqkqessiagyiiuim;
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
                        qwuwcoeiguyqekuy:
                        goto wskuiymiemyqssui;
                        goto osskmmsaekmgemwc;
                        mmoyseisgqkyouaq:
                        $aasascamegmwqmqk = $qgoqiacsiccwoawi;
                        goto oyeuoiqgeuioiqie;
                        quweggukmkusygwe:
                        $sqeykgyoooqysmca = ManipulateArray::get($ywmkwiwkosakssii, self::TYPE, "\151\x6e\x6e\145\162");
                        goto ysmqqmuesgeyquws;
                        osskmmsaekmgemwc:
                    case self::WHERE:
                        goto gmmgscuqwgiiqsmc;
                        owsusyqkaqmcmkwu:
                        skmyqomuuowkeeqe:
                        goto woqwmsyieymgsqao;
                        qywoucqwciweuyeg:
                        goto momgaqeuucmowiii;
                        goto kwiwoeckcqgewwsc;
                        wwioiasoggswmeyy:
                        eowskcomgqqwcyui:
                        goto aacmqqkkmcyowsko;
                        gmmgscuqwgiiqsmc:
                        if (is_array($eqgoocgaqwqcimie)) {
                            goto smwcscokyasiosks;
                        }
                        goto imwwaqcuqskiyeqc;
                        iokqqymyimieyyyy:
                        goto wskuiymiemyqssui;
                        goto aoaymmuyuuwqwcuy;
                        aacmqqkkmcyowsko:
                        momgaqeuucmowiii:
                        goto iokqqymyimieyyyy;
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
                        woqwmsyieymgsqao:
                        ygsoccgkwamsqewm:
                        goto qywoucqwciweuyeg;
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
                        kwiwoeckcqgewwsc:
                        smwcscokyasiosks:
                        goto meseoaayykmoeicm;
                        aoaymmuyuuwqwcuy:
                    case self::DATE:
                        $siykeiywomwwuoiw = $this->ewaugyyiauqmiwsu($qgoqiacsiccwoawi, $eqgoocgaqwqcimie, $cackiyicawmkyqqg, $qsycuegoicqcqkmo, $mqogqgswmasasmik, $siykeiywomwwuoiw);
                        goto wskuiymiemyqssui;
                }
                goto yiuwcmkkcemwksaq;
                yuuygkmacmmcakma:
                $eqgoocgaqwqcimie = ManipulateArray::get($ywmkwiwkosakssii, self::VALUE, $ywmkwiwkosakssii);
                goto mywgmggymygqamce;
                yiuwcmkkcemwksaq:
                muoaaecywcccquoa:
                goto wgegmwgsmsgmceqo;
                cswkeogkecaoyoka:
                $qsycuegoicqcqkmo = ManipulateArray::get($ywmkwiwkosakssii, self::BOOLEAN, self::AND);
                goto oekyuoucqkakcewe;
                mywgmggymygqamce:
                $yummaigqmauwcyou = ManipulateArray::get($ywmkwiwkosakssii, self::CLAUSE, self::WHERE);
                goto cswkeogkecaoyoka;
                oekyuoucqkakcewe:
                $cackiyicawmkyqqg = ManipulateArray::get($ywmkwiwkosakssii, self::OPERATOR, self::EQUAL_SYMBOL);
                goto ieaswyqkcwyaycse;
                omyeseoqwqiuwqcw:
            }
            goto meywqwweoiaqwwiu;
            meywqwweoiaqwwiu:
            igqwceeuaueagaem:
            goto umseiamyiyksuyim;
            ubsguocwequeoicm:
        } catch (Exception $wgaoewqkwgomoaai) {
            $siykeiywomwwuoiw = null;
        }
        goto csouyaoieqauoyww;
        csouyaoieqauoyww:
        return $siykeiywomwwuoiw;
        goto ewyqasqeksiqauuw;
        iewmwscqgiiicygc:
        $siykeiywomwwuoiw = $this->gqaysymikgeawkqa();
        goto gikgmkgewswggoou;
        gikgmkgewswggoou:
        ieuoskasoucciwkq:
        goto wiqmeiaaqqauqeme;
        ewyqasqeksiqauuw:
    }
    
    public function ieieyoeqmmeysauc($aiowsaccomcoikus, $eqgoocgaqwqcimie, $cackiyicawmkyqqg = self::EQUAL_SYMBOL, $siykeiywomwwuoiw = null) : int
    {
        goto ssocqyqwsyyekiik;
        wgggaasiaeeucygm:
        eyoiasswoyuyuuco:
        goto wmgokkkswmssqimu;
        nomsoewcmsqiikyy:
        $siykeiywomwwuoiw = $this->wkmkqaiwuqouweye($aiowsaccomcoikus, $cackiyicawmkyqqg, $eqgoocgaqwqcimie, $siykeiywomwwuoiw);
        goto iiueqisykokweaaw;
        wmgokkkswmssqimu:
        return $gaeqamemwmwsyukm;
        goto ywueqiukuessuggs;
        iiueqisykokweaaw:
        if (!$siykeiywomwwuoiw) {
            goto eyoiasswoyuyuuco;
        }
        goto maquyauskaqkikks;
        maquyauskaqkikks:
        
        $gaeqamemwmwsyukm = $siykeiywomwwuoiw->count();
        goto wgggaasiaeeucygm;
        ssocqyqwsyyekiik:
        $gaeqamemwmwsyukm = 0;
        goto nomsoewcmsqiikyy;
        ywueqiukuessuggs:
    }
    
    public function ssqiqiiwyusygike($aiowsaccomcoikus, $eqgoocgaqwqcimie, $qgoqiacsiccwoawi, $cackiyicawmkyqqg = self::EQUAL_SYMBOL)
    {
        goto sogccagmgkcaoase;
        samuycgcmqkmcgea:
        return $qsmaqqyoggcuyukq;
        goto kqacoqsymeyimagg;
        coakykwqwcigaoeq:
        
        $qsmaqqyoggcuyukq = $siykeiywomwwuoiw->sum($qgoqiacsiccwoawi);
        goto gekuacoquiucucoa;
        oweiysimemyoswom:
        if (!$siykeiywomwwuoiw) {
            goto iwwcoscasyysaqoo;
        }
        goto coakykwqwcigaoeq;
        useouyguueemgkmq:
        $siykeiywomwwuoiw = $this->wkmkqaiwuqouweye($aiowsaccomcoikus, $cackiyicawmkyqqg, $eqgoocgaqwqcimie);
        goto oweiysimemyoswom;
        sogccagmgkcaoase:
        $qsmaqqyoggcuyukq = 0;
        goto useouyguueemgkmq;
        gekuacoquiucucoa:
        iwwcoscasyysaqoo:
        goto samuycgcmqkmcgea;
        kqacoqsymeyimagg:
    }
    
    public function ewaugyyiauqmiwsu($ymaogssqccumcyqa, $eqgoocgaqwqcimie, $cackiyicawmkyqqg = self::GE_SYMBOL, $qsycuegoicqcqkmo = self::AND, $mqogqgswmasasmik = false, $siykeiywomwwuoiw = null) : ?Builder
    {
        try {
            goto wcksgisuiomywugm;
            mwwqyciigykaycis:
            $siykeiywomwwuoiw = $this->gqaysymikgeawkqa();
            goto geacaysasaiqsewo;
            imiieooawogoyagw:
            
            $siykeiywomwwuoiw = $siykeiywomwwuoiw->whereDate($ymaogssqccumcyqa, $cackiyicawmkyqqg, $eqgoocgaqwqcimie, $qsycuegoicqcqkmo);
            goto imyqaycayqeucsau;
            wcksgisuiomywugm:
            if ($siykeiywomwwuoiw) {
                goto maiokoamiosssisk;
            }
            goto mwwqyciigykaycis;
            cmcawyswoeumueys:
            iswgeeweeweswyoy:
            goto ugcquuakimgkmeqc;
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
            wewikewycwowkqui:
            $eqgoocgaqwqcimie = new \DateTime($eqgoocgaqwqcimie);
            goto qqgoygcaggkkisyw;
            kigeagsoeqmgaosa:
            if ($cackiyicawmkyqqg == "\x62\x65\x74\x77\145\145\x6e" && is_array($eqgoocgaqwqcimie)) {
                goto wwwyugiayoaucqiu;
            }
            goto iiowkswmewooomes;
            geacaysasaiqsewo:
            maiokoamiosssisk:
            goto kigeagsoeqmgaosa;
            eoeomqmkgaogkome:
            
            $siykeiywomwwuoiw = $siykeiywomwwuoiw->whereBetween($ymaogssqccumcyqa, $eqgoocgaqwqcimie, $qsycuegoicqcqkmo, $mqogqgswmasasmik);
            goto cmcawyswoeumueys;
            qqgoygcaggkkisyw:
            qqqseeocmmummkga:
            goto imiieooawogoyagw;
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
        qiiwgkcyqweecqoa:
        uwkuasmeoueseaou:
        goto ekkkweoucuyuqwik;
        iweickamaucqgysq:
        sumiomammkayeqis:
        goto aecamacaoskqmccs;
        syokeusmqogkicks:
        if (!$ksiyqouuaoymsycg) {
            goto uwkuasmeoueseaou;
        }
        goto oqkqaggagwswaaqi;
        oqkqaggagwswaaqi:
        $aiowsaccomcoikus = $ksiyqouuaoymsycg;
        goto qiiwgkcyqweecqoa;
        uiqaoucyoiwykywa:
        if (!$aiowsaccomcoikus instanceof Json) {
            goto msaugmwuooqkmwus;
        }
        goto umawcakyaoykccao;
        oekmoqcqwyauiaeg:
        if (!$eqgoocgaqwqcimie) {
            goto oqksakqyecmsuscq;
        }
        goto uiqaoucyoiwykywa;
        ugkqimokoeicsyqm:
        if ($aiowsaccomcoikus instanceof Field) {
            goto agcugqouiqgiskcq;
        }
        goto kyuewcuomwmweguq;
        umawcakyaoykccao:
        $eqgoocgaqwqcimie = json_decode($eqgoocgaqwqcimie);
        goto wwmscmqgasawkkwa;
        kokkacggmoaagiae:
        goto ueeuassqywswigaq;
        goto iweickamaucqgysq;
        aksogeackceaeays:
        oqksakqyecmsuscq:
        goto ugwyeeockousskag;
        ooqqyyewioyccuww:
        return $eqgoocgaqwqcimie;
        goto umasasgawwamkisc;
        uyugkucyiqymcuus:
        $eqgoocgaqwqcimie = ManipulateArray::get($mksyucucyswaukig, $aiowsaccomcoikus, $ggauoeuaesiymgee);
        goto kokkacggmoaagiae;
        mkosooeggqemyqqy:
        if ($aiowsaccomcoikus instanceof Field) {
            goto sumiomammkayeqis;
        }
        goto uyugkucyiqymcuus;
        ekkkweoucuyuqwik:
        agcugqouiqgiskcq:
        goto mkosooeggqemyqqy;
        kyuewcuomwmweguq:
        $ksiyqouuaoymsycg = $this->oyeskqayoscwciem()->uqeoyqiwywwmsiew($aiowsaccomcoikus);
        goto syokeusmqogkicks;
        ugwyeeockousskag:
        ueeuassqywswigaq:
        goto ooqqyyewioyccuww;
        wwmscmqgasawkkwa:
        msaugmwuooqkmwus:
        goto aksogeackceaeays;
        umasasgawwamkisc:
    }
    
    private function aocqcwaksksgckaw($siykeiywomwwuoiw, $wkkweuacukumqmya = ["\52"], $aiamqeawckcsuaou = self::GET) : array
    {
        goto qqkqiioqwkekqsoq;
        aewqyqksisqayska:
        iqsoeqgwemgyiimg:
        goto ayegqigqcsuoqess;
        gewecumqwgcuwikk:
        $uomewyckeuqoqocu = $iwqgomgkuumgyswi->sacmkccceuywoqsq();
        goto aewqyqksisqayska;
        qqkqiioqwkekqsoq:
        $uomewyckeuqoqocu = [];
        goto ckugukmoqamgcwci;
        ayegqigqcsuoqess:
        return $uomewyckeuqoqocu;
        goto scqwioawomamygwa;
        omeukkwiesseygwy:
        if (!$iwqgomgkuumgyswi) {
            goto iqsoeqgwemgyiimg;
        }
        goto gewecumqwgcuwikk;
        ckugukmoqamgcwci:
        $iwqgomgkuumgyswi = $this->ymkikmwesqgscscy($siykeiywomwwuoiw, $wkkweuacukumqmya, $aiamqeawckcsuaou);
        goto omeukkwiesseygwy;
        scqwioawomamygwa:
    }
    
    public function ymkikmwesqgscscy($siykeiywomwwuoiw, $wkkweuacukumqmya = ["\52"], $aiamqeawckcsuaou = self::GET) : ?Collection
    {
        goto qywgscciuywgmaia;
        iiwessuyuisaawek:
        return $iwqgomgkuumgyswi;
        goto yqukoacecemgkkay;
        wmoqoeyuaikokayu:
        $iwqgomgkuumgyswi = null;
        goto ucwwsgoweeagukyq;
        gecscumwugkogmyq:
        $iwqgomgkuumgyswi = $siykeiywomwwuoiw->{$aiamqeawckcsuaou}($wkkweuacukumqmya);
        goto euaikwmkiyegwqae;
        yaiwoisswowiyski:
        if (!in_array($aiamqeawckcsuaou, [self::GET, self::PLUCK])) {
            goto auucmoqsmsouecag;
        }
        goto gecscumwugkogmyq;
        wiqmoimycyeesqse:
        $siykeiywomwwuoiw = $this->gqaysymikgeawkqa();
        goto kaewigguiigmcsoe;
        ucwwsgoweeagukyq:
        if (!$siykeiywomwwuoiw) {
            goto euiiaygickweagiw;
        }
        goto yaiwoisswowiyski;
        kaewigguiigmcsoe:
        muooqqykkmuismwk:
        goto wmoqoeyuaikokayu;
        qywgscciuywgmaia:
        if ($siykeiywomwwuoiw) {
            goto muooqqykkmuismwk;
        }
        goto wiqmoimycyeesqse;
        qgiscekgegqwemgs:
        euiiaygickweagiw:
        goto iiwessuyuisaawek;
        euaikwmkiyegwqae:
        auucmoqsmsouecag:
        goto qgiscekgegqwemgs;
        yqukoacecemgkkay:
    }
    
    public function kmqmiwcimmagogoy($siykeiywomwwuoiw, $wkkweuacukumqmya = ["\x2a"], $aiamqeawckcsuaou = self::GET)
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
        cymigkmkskowwcei:
        $qsmaqqyoggcuyukq = $iwqgomgkuumgyswi->qsmaqqyoggcuyukq();
        goto ukecesmaioggmyoc;
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
        aokcewiioiiyiqeu:
        return $siykeiywomwwuoiw;
        goto iisykceuumgoicmc;
        uogakawoeucgocym:
        if ($siykeiywomwwuoiw) {
            goto suggiaqykiwgkkey;
        }
        goto cyukykwcccsawesg;
        soywogweqoqmymqw:
        suggiaqykiwgkkey:
        goto gscsssqcacocusua;
        cyukykwcccsawesg:
        $siykeiywomwwuoiw = $this->gqaysymikgeawkqa();
        goto soywogweqoqmymqw;
        umeiiiomksmkmoaa:
        igoseisickgqeaog:
        goto aokcewiioiiyiqeu;
        gscsssqcacocusua:
        if (!$siykeiywomwwuoiw) {
            goto igoseisickgqeaog;
        }
        goto sqwgcyyoaismwkqs;
        sqwgcyyoaismwkqs:
        
        $siykeiywomwwuoiw = $siykeiywomwwuoiw->orderBy($qgoqiacsiccwoawi, $ecysmcqmumqmaagg);
        goto umeiiiomksmkmoaa;
        iisykceuumgoicmc:
    }
    
    public function awkaaqmauiuwwsca($siykeiywomwwuoiw, $wkkweuacukumqmya = ["\x2a"], $qgoqiacsiccwoawi = null, $ecysmcqmumqmaagg = null)
    {
        goto cgmukwicwgikewei;
        sscqwggcsoumagsw:
        womgsyqqiwokqyiw:
        goto iasuykaqammykyuc;
        ykmceyuggseogcgm:
        $siykeiywomwwuoiw = $this->ewkswoqykwsuckok($siykeiywomwwuoiw, $qgoqiacsiccwoawi, $ecysmcqmumqmaagg);
        goto oiakiumycyquagqu;
        iuasemkmccmcauoc:
        $siykeiywomwwuoiw = $this->gqaysymikgeawkqa();
        goto sscqwggcsoumagsw;
        oiakiumycyquagqu:
        ayoyuasegggqqosu:
        goto sycysmgqeucmisiw;
        sawkcaueekoqcaoq:
        if (!$siykeiywomwwuoiw) {
            goto mkikakaaaqwygquu;
        }
        goto omcskkiwcgiysuis;
        ykeuwugswmeukgii:
        return $mksyucucyswaukig;
        goto gaucesmmweqmemkg;
        cgmukwicwgikewei:
        if ($siykeiywomwwuoiw) {
            goto womgsyqqiwokqyiw;
        }
        goto iuasemkmccmcauoc;
        sycysmgqeucmisiw:
        $mksyucucyswaukig = null;
        goto sawkcaueekoqcaoq;
        iasuykaqammykyuc:
        if (!($qgoqiacsiccwoawi && $ecysmcqmumqmaagg)) {
            goto ayoyuasegggqqosu;
        }
        goto ykmceyuggseogcgm;
        wywuimckaigaukkg:
        mkikakaaaqwygquu:
        goto ykeuwugswmeukgii;
        omcskkiwcgiysuis:
        
        $mksyucucyswaukig = $siykeiywomwwuoiw->first($wkkweuacukumqmya);
        goto wywuimckaigaukkg;
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
    
    public function uckwcqkkygmuquqq($aasascamegmwqmqk, $sysgmomuyiiawwcm, $gcegymooyemmaysk, $siykeiywomwwuoiw = null, $cackiyicawmkyqqg = self::EQUAL_SYMBOL, $sqeykgyoooqysmca = "\x69\x6e\156\145\162", $icsywsyukqcciiky = false) : ?Builder
    {
        goto kecaqcyccioyaoaa;
        giemwgcqeogmauao:
        osgaygqiwagaowsq:
        goto siawaquisuoeysqa;
        siawaquisuoeysqa:
        return $siykeiywomwwuoiw;
        goto mgqqigauyucewouk;
        qsmmausewiocaesg:
        uuooygauoaumkemu:
        goto caseeeggigkaoswu;
        cwuqamaiywoeieyw:
        
        $siykeiywomwwuoiw = $siykeiywomwwuoiw->join($aasascamegmwqmqk, $sysgmomuyiiawwcm, $cackiyicawmkyqqg, $gcegymooyemmaysk, $sqeykgyoooqysmca, $icsywsyukqcciiky);
        goto giemwgcqeogmauao;
        caseeeggigkaoswu:
        if (!$siykeiywomwwuoiw) {
            goto osgaygqiwagaowsq;
        }
        goto cwuqamaiywoeieyw;
        csuyaisqcmkkyqiw:
        $siykeiywomwwuoiw = $this->gqaysymikgeawkqa();
        goto qsmmausewiocaesg;
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
