<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b1e8aa0c03             |
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
    const ORM_FILTER_BY = "\x6f\162\x6d\137\x66\151\x6c\x74\x65\x72\137\142\x79";
    const ORM_FILTER_VALUE = "\157\x72\x6d\x5f\146\151\154\164\x65\x72\137\166\141\154\x75\x65";
    use SingletonTrait, TranslateTrait, ComponentTrait, ActionTrait, FieldTrait, HookTrait, AjaxTrait, LogTrait;
    
    protected ?int $id = 0;
    
    public $timestamps = true;
    
    protected ?array $views = [];
    
    protected ?array $fields = [];
    
    protected bool $canDelete = true;
    
    protected ?Register $register = null;
    
    protected ?string $labelKey = "\x74\151\164\x6c\x65";
    
    protected ?array $validationErrors = [];
    
    public function __construct($aokagokqyuysuksm = null, ?array $siquossayskcwkea = [])
    {
        goto yamoiggaeugmgkku;
        kwaqakoogeiacmwi:
        if (!$aiqugsyouyikgawm instanceof Updater) {
            goto gikaiicgqyueeoco;
        }
        goto ccqgkeesikyegcik;
        oqwyemgwoossauyk:
        $this->gyqeoeemeemicgqi();
        goto cwcmwogseemgqgqq;
        cwcmwogseemgqgqq:
        akoiqkoqmmmcieug:
        goto yuoyackaoigyyyso;
        yuoyackaoigyyyso:
        cgasgmiiqegqesic:
        goto kcqieuukskyiywss;
        aakwscykmyyykoms:
        gikaiicgqyueeoco:
        goto iiuawywwoaeyauge;
        eqekaoaioiykuaiw:
        $ymqmyyeuycgmigyo = $this->miwqiiqeegeqcwis();
        goto qoiuwyogucoeaoew;
        ccqgkeesikyegcik:
        $aiqugsyouyikgawm->yuaecocyyyqqgsyw($this->oyeskqayoscwciem())->uwyqgmcuomgeccgy($mgcmmwqwguicsews);
        goto aakwscykmyyykoms;
        wcoqiwuusoeqiqwi:
        if (is_numeric($aokagokqyuysuksm)) {
            goto akoiqkoqmmmcieug;
        }
        goto oqwyemgwoossauyk;
        yamoiggaeugmgkku:
        $this->ckgmycmaukqgkosk();
        goto eqekaoaioiykuaiw;
        uqagqomggiacosqm:
        $this->ewaqwooqoqmcoomi();
        goto mwskgsimqagmkcgq;
        miaiggsoiaekmqwy:
        static::$resolver = new Resolver();
        goto suoymucmyegewkmu;
        oyywywoqaqcykucs:
        muwyuiikuywigwso:
        goto iqeqqwcmaiqakawc;
        kcqieuukskyiywss:
        parent::__construct($siquossayskcwkea);
        goto wukuisoeoeomgegu;
        ouqwmaaskykywyqo:
        $mgcmmwqwguicsews->cymcyywycwkawmsi();
        goto agqmoymkiswqswqo;
        mkuigmcgkawyawee:
        if (!(!ManipulateAjax::mcgoysmkqsqooceq() && ($suckquwcuiuyiogc || !$this->gqaysymikgeawkqa()))) {
            goto akcakssqcqcouwew;
        }
        goto ouqwmaaskykywyqo;
        agqmoymkiswqswqo:
        $aiqugsyouyikgawm = Updater::ocmycskcuiawkecq($ymqmyyeuycgmigyo);
        goto kwaqakoogeiacmwi;
        qkkqiagwgaoyauki:
        wp_die("\156\141\x6d\145\x20\x69\163\40\156\157\164\x20\144\145\146\x69\x6e\x65\40\146\157\x72\x20\x6d\157\x64\145\x6c\x3a\x20" . self::uqggkiomyiceyooa());
        goto oyywywoqaqcykucs;
        gioqkcywauuckmua:
        $this->table = $mgcmmwqwguicsews->cokoiaeeomgssqgy($ymqmyyeuycgmigyo);
        goto miaiggsoiaekmqwy;
        qoiuwyogucoeaoew:
        if ($ymqmyyeuycgmigyo) {
            goto muwyuiikuywigwso;
        }
        goto qkkqiagwgaoyauki;
        mwskgsimqagmkcgq:
        $suckquwcuiuyiogc = ManipulateSetting::cmaecekuqkwmemms("\125\120\x44\x41\124\105\x5f\117\x52\115\x5f\104\x41\x54\x41\102\x41\123\x45", 0);
        goto mkuigmcgkawyawee;
        iiuawywwoaeyauge:
        akcakssqcqcouwew:
        goto wcoqiwuusoeqiqwi;
        suoymucmyegewkmu:
        if (self::quiqwmkiyigesygc()) {
            goto cgasgmiiqegqesic;
        }
        goto uqagqomggiacosqm;
        iqeqqwcmaiqakawc:
        
        $mgcmmwqwguicsews = $this->getConnection();
        goto gioqkcywauuckmua;
        wukuisoeoeomgegu:
    }
    public function wigskegsqequoeks()
    {
        $ymqmyyeuycgmigyo = $this->miwqiiqeegeqcwis();
        $this->qcsmikeggeemccuu("\151\x6e\x69\x74", [$this, "\x63\147\141\155\165\167\x69\x71\163\147\x77\163\151\153\x6b\x6d"])->koaegcswmcqsiykq($this->ygyygikyocoymgaw("{$ymqmyyeuycgmigyo}\137\x67\145\x74\137\154\x69\163\x74"), [$this, "\143\153\147\x79\145\147\x6b\165\x73\x6d\165\171\x6d\x69\155\157"])->qcsmikeggeemccuu($this->ygyygikyocoymgaw("{$ymqmyyeuycgmigyo}\x5f\144\157\137\x62\165\154\153\137\141\x63\x74\151\x6f\156"), [$this, "\x6d\x79\171\161\167\171\x73\x77\167\x65\163\x77\x69\165\x77\x75"], 10, 2)->qcsmikeggeemccuu($this->ygyygikyocoymgaw("{$ymqmyyeuycgmigyo}\137\144\157\137\163\x69\156\147\154\x65\137\x61\x63\164\x69\157\x6e"), [$this, "\x6b\x6f\x73\157\x61\157\165\157\x67\x6b\x65\141\x6f\x6d\x77\157"], 10, 2);
    }
    public function kgquecmsgcouyaya()
    {
        $ymqmyyeuycgmigyo = $this->miwqiiqeegeqcwis();
        $this->cecaguuoecmccuse($this->ygyygikyocoymgaw("{$ymqmyyeuycgmigyo}\x5f\x6d\x61\x6e\141\147\145\x5f\166\x69\x65\x77\163"), [$this, "\161\145\157\167\x63\x75\x63\165\x6f\141\x71\x79\x71\167\165\167"])->cecaguuoecmccuse($this->ygyygikyocoymgaw("{$ymqmyyeuycgmigyo}\137\155\x61\x6e\141\x67\x65\137\x63\x6f\154\x75\x6d\x6e\x73"), [$this, "\x6b\x67\157\147\x6f\x63\143\x61\151\x6d\x75\x79\167\163\157\171"])->cecaguuoecmccuse($this->ygyygikyocoymgaw("{$ymqmyyeuycgmigyo}\x5f\x6d\141\x6e\x61\147\x65\x5f\163\x6f\162\164\x61\142\x6c\145\x5f\x63\157\x6c\165\155\156\163"), [$this, "\170\x65\153\143\167\145\143\147\165\171\x6b\x6d\155\x67\147\x6f"])->cecaguuoecmccuse($this->ygyygikyocoymgaw("{$ymqmyyeuycgmigyo}\137\x72\157\167\x5f\x61\143\164\x69\157\156\x73"), [$this, "\155\x63\x61\147\x67\x6d\x75\x79\x61\155\x67\x73\157\155\x61\x61"], 10, 4)->cecaguuoecmccuse($this->ygyygikyocoymgaw("{$ymqmyyeuycgmigyo}\x5f\142\x75\x6c\x6b\x5f\141\x63\164\151\x6f\x6e\x73"), [$this, "\155\163\x79\x79\145\x73\167\145\x6f\x6f\x77\143\x75\x75\157\165"], 10, 2)->cecaguuoecmccuse($this->ygyygikyocoymgaw("\157\162\x6d\x5f\x76\x69\145\167\x5f\163\x68\x6f\167\x5f{$ymqmyyeuycgmigyo}\137\164\x61\142\x73"), [$this, "\165\x75\171\155\153\151\x79\x67\151\x75\x61\x69\x79\145\155\141"], 10, 2)->cecaguuoecmccuse($this->ygyygikyocoymgaw("{$ymqmyyeuycgmigyo}\x5f\x6d\x61\156\141\147\x65\137\143\x75\x73\x74\157\x6d\x5f\143\x6f\154\x75\x6d\x6e"), [$this, "\x71\145\167\155\x6b\x75\167\x79\x6d\x71\153\153\143\155\x71\155"], 10, 5)->cecaguuoecmccuse($this->ygyygikyocoymgaw("{$ymqmyyeuycgmigyo}\137\155\141\156\141\x67\145\137\145\x64\151\x74\x5f\x66\151\145\x6c\x64\137\x73\x68\x6f\x77"), [$this, "\146\x61\x63\161\x77\x71\x6d\147\x63\x6f\147\x77\x73\x6f\x6b\167"], 10, 4)->cecaguuoecmccuse($this->ygyygikyocoymgaw("{$ymqmyyeuycgmigyo}\137\x6d\141\x6e\x61\147\145\137\145\x64\151\x74\137\x66\151\x65\x6c\x64\x5f\x76\x61\154\165\145"), [$this, "\x6f\x65\161\163\x69\x65\x6d\141\167\157\x67\167\x77\171\155\x6f"], 10, 4);
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
        eygqeoiskweuiuqi:
        $vkkeimekwwkyiyyc = null;
        goto uykwmucgoywoesui;
        bgoygegmogcmeaou:
        if (is_array($vkkeimekwwkyiyyc)) {
            goto eyuoecmogqwkmomi;
        }
        goto awgaewwsskasueke;
        awgaewwsskasueke:
        $vkkeimekwwkyiyyc = $aiowsaccomcoikus;
        goto cgmcwkmmcmmkiooc;
        oskwkeaemiqcaqkc:
        $vkkeimekwwkyiyyc = $aiowsaccomcoikus;
        goto kiqmcymowosckmii;
        iisieuaeyiqwckou:
        gsimeiqkoyqkuecq:
        goto oskwkeaemiqcaqkc;
        ioacywuoyuskqmwy:
        if (!$vkkeimekwwkyiyyc) {
            goto geugsymgsiuuqccg;
        }
        goto bgoygegmogcmeaou;
        iamooqskosymqsmw:
        eyuoecmogqwkmomi:
        goto wwccoougkywoaoui;
        mgwgiesscqoaqcau:
        $vkkeimekwwkyiyyc = $this->timestamps;
        goto ioacywuoyuskqmwy;
        iwosouqsesoqcska:
        geugsymgsiuuqccg:
        goto iacwyogogoccmwsg;
        kiqmcymowosckmii:
        gqywcowiigceimaw:
        goto iaygaasesyymwgss;
        uykwmucgoywoesui:
        goto gqywcowiigceimaw;
        goto iisieuaeyiqwckou;
        iaygaasesyymwgss:
        quewwumogiocouii:
        goto iwosouqsesoqcska;
        iacwyogogoccmwsg:
        return $vkkeimekwwkyiyyc;
        goto wqmwcuggcisqieao;
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
        smkakiyekkqoggao:
        
        $ymiyawysimukkoso = $this->getPaginateItems($siykeiywomwwuoiw, [self::PAGE => $icwicymcioeyeyek["\160\141\147\x65"]]);
        goto zggweikegkcgkmma;
        ekgkiioywougquka:
        foreach ($oammesyieqmwuwyi as $igqsaukqcqscimok) {
            goto swkeiggkawwgewuw;
            wmcucyuieqgqisis:
            mssaawaiaimogowg:
            goto qwsmiaegmcwuskwi;
            oaskqsoyesmmeaew:
            $pkyyagewkiyckmwy = $this->uikgwcuascgeissw($igqsaukqcqscimok);
            goto aacaoywsaqscgyua;
            qcwkymcgqacaaywc:
            umamqqwcoewcigew:
            goto wmcucyuieqgqisis;
            miigqygoawqmkkqm:
            if (!$icwicymcioeyeyek["\x6d\x61\162\x6b\x75\x70"]) {
                goto ccyiggckemwgooco;
            }
            goto yywwaaiicukuwcao;
            eykiuqsamowqykam:
            ccyiggckemwgooco:
            goto ywqouwqomiqwoquu;
            gaiaucesmcqgqwac:
            $ceiwsaacewygcsqg = $this->kumuygiiqswoyasy();
            goto kuimgwmkcgcoecko;
            ywqouwqomiqwoquu:
            $qeiakyocuggicwsy[$aokagokqyuysuksm] = $sogksuscggsicmac;
            goto qcwkymcgqacaaywc;
            yywwaaiicukuwcao:
            $sogksuscggsicmac["\x6d\141\x72\x6b\165\x70"] = $this->iuygowkemiiwqmiw($icwicymcioeyeyek["\x74\145\x6d\x70\154\141\x74\145\x5f\x74\171\x70\145"], ["\111\x44" => $aokagokqyuysuksm, self::TITLE => $pkyyagewkiyckmwy, "\x6f\x62\x6a\145\x63\164\137\164\171\160\145" => $this->oyeskqayoscwciem()->giiayuqckuiecosm()], ["\x63\154\141\163\x73" => self::class]);
            goto eykiuqsamowqykam;
            aacaoywsaqscgyua:
            $sogksuscggsicmac = ["\x49\104" => $aokagokqyuysuksm, self::TEXT => $pkyyagewkiyckmwy, self::VALUE => $aokagokqyuysuksm];
            goto miigqygoawqmkkqm;
            kuimgwmkcgcoecko:
            $aokagokqyuysuksm = $igqsaukqcqscimok->{$ceiwsaacewygcsqg};
            goto oaskqsoyesmmeaew;
            swkeiggkawwgewuw:
            if (!$igqsaukqcqscimok) {
                goto umamqqwcoewcigew;
            }
            goto gaiaucesmcqgqwac;
            qwsmiaegmcwuskwi:
        }
        goto wyyowcsciaqkuiuq;
        ykuqeyogsasokqis:
        
        $siykeiywomwwuoiw = $siykeiywomwwuoiw->where($cewmysakgwuuigoy, "\x6c\151\153\145", "\x25{$icwicymcioeyeyek["\x73\x65\x61\162\x63\150"]}\45");
        goto mqaamqyoywyekiko;
        eokikuciuqkyauum:
        $cewmysakgwuuigoy = $this->ukqioecasimmeygm();
        goto ykuqeyogsasokqis;
        gcsosokicycukoyc:
        issgmmkcgesyeoas:
        goto seqammocqkyswaim;
        umccwcqwkoiaakmu:
        yueosioyegouuwqo:
        goto ekgkiioywougquka;
        usmagcaocwiugqum:
        $oammesyieqmwuwyi = [];
        goto sikmqkecsiyciaei;
        imykswegcuekqwio:
        if (!$qwcmueausqgiwigy) {
            goto qsyqcokomswykyso;
        }
        goto eokikuciuqkyauum;
        wmycwscioqackeig:
        $siykeiywomwwuoiw = $this->gqaysymikgeawkqa();
        goto wammkmaqucqagqww;
        iuooqassskiyeemo:
        if ($icwicymcioeyeyek["\x69\144"]) {
            goto issgmmkcgesyeoas;
        }
        goto cquyuwsisgqscemm;
        wammkmaqucqagqww:
        if (!$siykeiywomwwuoiw) {
            goto yueosioyegouuwqo;
        }
        goto iuooqassskiyeemo;
        coskmuqsawiaeyqg:
        yeiicwscguyokwyu:
        goto umccwcqwkoiaakmu;
        seqammocqkyswaim:
        
        $oammesyieqmwuwyi[] = $siykeiywomwwuoiw->find($icwicymcioeyeyek["\x69\x64"]);
        goto coskmuqsawiaeyqg;
        sikmqkecsiyciaei:
        $qeiakyocuggicwsy = [];
        goto wmycwscioqackeig;
        imquwacukaswoyka:
        $this->uaggqsoeugksgooc(true, $qeiakyocuggicwsy);
        goto smksoismyouykeoa;
        zggweikegkcgkmma:
        $oammesyieqmwuwyi = ManipulateArray::get($ymiyawysimukkoso, self::ITEMS, []);
        goto yisoawmmammassqk;
        wyyowcsciaqkuiuq:
        giuoqsumkimmuaya:
        goto imquwacukaswoyka;
        mqaamqyoywyekiko:
        qsyqcokomswykyso:
        goto smkakiyekkqoggao;
        yisoawmmammassqk:
        goto yeiicwscguyokwyu;
        goto gcsosokicycukoyc;
        cquyuwsisgqscemm:
        $qwcmueausqgiwigy = $icwicymcioeyeyek["\x73\145\141\162\143\x68"];
        goto imykswegcuekqwio;
        yyyyawaqcowsgqcs:
        $icwicymcioeyeyek = ManipulateFormat::omaawkkwwyesqwcc(ManipulateServer::ayueggmoqeeukqmq(), ["\151\144" => false, "\160\x61\147\145" => 1, "\x61\x72\147\163" => [], "\x69\164\x65\x6d\163" => [], "\163\x65\141\x72\143\x68" => null, "\155\141\x72\x6b\165\x70" => false, "\164\145\155\160\x6c\141\x74\x65\x5f\x74\x79\x70\145" => "\141\x6a\141\x78\137\x72\145\x73\x75\154\x74"]);
        goto usmagcaocwiugqum;
        smksoismyouykeoa:
    }
    
    public function aeggeuqycwawueqy(Builder $siykeiywomwwuoiw, array $ywmkwiwkosakssii = []) : array
    {
        try {
            goto gcoeaokkagaaeuse;
            muimagegskoisckc:
            
            $uuwmqqqiwksuaise = $ymiyawysimukkoso->total();
            goto yicaqocukqoauqgc;
            kmcygqkmwcgwamkw:
            
            $weyoqgcesqgeusiu = $ymiyawysimukkoso->perPage();
            goto gysmigyakgaakeoy;
            yweucowesgsoewyc:
            qwgkwokcyocqiyee:
            goto ikygockuuyimmmwk;
            qocgmocqauaaekii:
            if ($oammesyieqmwuwyi) {
                goto qwgkwokcyocqiyee;
            }
            goto gsggsmmwcmkgyyss;
            gcoeaokkagaaeuse:
            $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\160\141\147\x65\137\x6e\x61\x6d\x65" => self::PAGE, self::PAGE => 1, self::DEFAULT => [], self::COLUMNS => ["\52"], "\146\151\154\x74\145\162\137\x76\x61\x6c\165\145" => true, self::PER_PAGE => ManipulateSetting::omkaowmygoqwsywq()]);
            goto kcqueaewmayywqeq;
            yicaqocukqoauqgc:
            
            $qcugmkuyweqqyggk = $ymiyawysimukkoso->lastPage();
            goto kmcygqkmwcgwamkw;
            uwmcugkwqwcuqqsq:
            $oammesyieqmwuwyi = $this->cwgkcyyaymmsomqa($oammesyieqmwuwyi);
            goto cycasoiysmksuwqk;
            gysmigyakgaakeoy:
            $ksaameoqigiaoigg = $this->oosqweumiyeayasy($oammesyieqmwuwyi, $uuwmqqqiwksuaise, $qcugmkuyweqqyggk, $weyoqgcesqgeusiu);
            goto sueeqeioeiwkscao;
            uagsgicwwcakecwq:
            
            $oammesyieqmwuwyi = $ymiyawysimukkoso->items();
            goto qocgmocqauaaekii;
            gsggsmmwcmkgyyss:
            $oammesyieqmwuwyi = ManipulateArray::get($ywmkwiwkosakssii, self::DEFAULT);
            goto yweucowesgsoewyc;
            ikygockuuyimmmwk:
            if (!$ywmkwiwkosakssii["\x66\x69\x6c\164\x65\162\137\166\x61\154\x75\x65"]) {
                goto maeccckgcsaaumkw;
            }
            goto uwmcugkwqwcuqqsq;
            kcqueaewmayywqeq:
            
            $ymiyawysimukkoso = $siykeiywomwwuoiw->paginate($ywmkwiwkosakssii[self::PER_PAGE] ?: 10, $ywmkwiwkosakssii[self::COLUMNS] ?: ["\x2a"], $ywmkwiwkosakssii["\x70\x61\x67\145\x5f\156\141\155\145"] ?: self::PAGE, $ywmkwiwkosakssii[self::PAGE] ?: 1);
            goto uagsgicwwcakecwq;
            cycasoiysmksuwqk:
            maeccckgcsaaumkw:
            goto muimagegskoisckc;
            sueeqeioeiwkscao:
        } catch (Exception $wgaoewqkwgomoaai) {
            $ksaameoqigiaoigg = [];
        }
        return $ksaameoqigiaoigg;
    }
    
    public function oosqweumiyeayasy($oammesyieqmwuwyi = [], $uuwmqqqiwksuaise = 1, $ocqawgquwsqioses = 1, $weyoqgcesqgeusiu = 10) : array
    {
        return ["\x70\x61\x67\151\156\141\164\151\157\x6e" => ["\x74\x6f\164\141\x6c" => $uuwmqqqiwksuaise, "\160\x61\147\145\163" => $ocqawgquwsqioses, self::PER_PAGE => $weyoqgcesqgeusiu], self::ITEMS => $oammesyieqmwuwyi];
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
        goto wassyiqsqasaoiau;
        esuuweysgwuwcuue:
        oeeasouoaaoaaemm:
        goto ykuycowuguumseuu;
        uaiiuywoakccusge:
        if (!is_bool($vkkeimekwwkyiyyc)) {
            goto mmesoisgqucowwms;
        }
        goto ysiwoiqiaosqoikm;
        eieiwacwqkgsewai:
        mmesoisgqucowwms:
        goto gokwmwmaumiwscua;
        eauiumeeyckucuyc:
        foreach ($vkkeimekwwkyiyyc as $yiuogaeewyockeak) {
            goto akieeaeqiwugimie;
            akieeaeqiwugimie:
            $aaqqkgyougeiueyq = self::ceqawoymcymsaeqo($yiuogaeewyockeak)->jyumyyugiwwiqomk(5000);
            goto ugqucegcucyyayga;
            ugqucegcucyyayga:
            switch ($yiuogaeewyockeak) {
                case self::CREATED_AT:
                    $aaqqkgyougeiueyq->gswweykyogmsyawy(__("\x43\x72\x65\141\x74\145\x64\x20\101\164", PR__CMN__FOUNDATION));
                    goto uauuoyigkmqoasaq;
                case self::UPDATED_AT:
                    $aaqqkgyougeiueyq->gswweykyogmsyawy(__("\125\160\144\141\164\145\144\x20\101\164", PR__CMN__FOUNDATION));
                    goto uauuoyigkmqoasaq;
            }
            goto sequgigsgkqaikmq;
            woaoeyaowkuukkqm:
            $oyuikeusicgqgwak[] = $aaqqkgyougeiueyq;
            goto mmqkuymyyycywmqu;
            sequgigsgkqaikmq:
            kmwwqgiacsoksgcy:
            goto aemoyqueimayqcaw;
            mmqkuymyyycywmqu:
            seaiwkkgyyegiyug:
            goto iaockwkwaiqgeuyu;
            aemoyqueimayqcaw:
            uauuoyigkmqoasaq:
            goto woaoeyaowkuukkqm;
            iaockwkwaiqgeuyu:
        }
        goto gigiwwouakeekoim;
        gigiwwouakeekoim:
        uieuouugckwokske:
        goto esuuweysgwuwcuue;
        uekueeyqaackuwao:
        if (!$vkkeimekwwkyiyyc) {
            goto icmsyimgycuocisu;
        }
        goto uaiiuywoakccusge;
        ykuycowuguumseuu:
        icmsyimgycuocisu:
        goto qugsgsscqyikugyc;
        gokwmwmaumiwscua:
        if (!is_array($vkkeimekwwkyiyyc)) {
            goto oeeasouoaaoaaemm;
        }
        goto eauiumeeyckucuyc;
        wassyiqsqasaoiau:
        $vkkeimekwwkyiyyc = $this->timestamps;
        goto uekueeyqaackuwao;
        qugsgsscqyikugyc:
        return $oyuikeusicgqgwak;
        goto gskaqcgccswmuqsy;
        ysiwoiqiaosqoikm:
        $vkkeimekwwkyiyyc = [self::CREATED_AT, self::UPDATED_AT];
        goto eieiwacwqkgsewai;
        gskaqcgccswmuqsy:
    }
    public final function ewaqwooqoqmcoomi()
    {
        
        $this->oyeskqayoscwciem()->ckaemmoueyosqqkq(ManipulateArray::yaeiiwwyckwugsem($this->eucukwckumgiyyww()));
    }
    public final function cgamuwiqsgwsikkm()
    {
        goto mmusoowesqcmuqew;
        qkiqquymecyoouki:
        $orm_model = $this;
        goto iqukigoyiqgcggue;
        iqukigoyiqgcggue:
        uccuykggugcmiyam:
        goto amkcomscieegkygc;
        yuoyeeuqqaockyqw:
        $yyksucsgisomecgg = $this->oyeskqayoscwciem();
        goto kygcymkakucoeock;
        uugekiumuwemyuyc:
        foreach ($yyksucsgisomecgg->aioqieywgykaaoec() as $qqomumygoacsmsie => $ywmkwiwkosakssii) {
            goto emqmqkeygumaasam;
            kcwyeqmysgqkoqcm:
            wisaekiyyweeemuy:
            goto wamgcqkaieummksu;
            asueqykmkoaimguq:
            $this->ecmiqywsauuoccwo($qqomumygoacsmsie, $ywmkwiwkosakssii);
            goto iyocimuyeemkaaso;
            isaouwiaamimceeg:
            goto aosasoogesueygak;
            goto kcwyeqmysgqkoqcm;
            meegaqaesckqmyec:
            if (is_array($ywmkwiwkosakssii)) {
                goto wisaekiyyweeemuy;
            }
            goto scccyaiaggeasgqg;
            emqmqkeygumaasam:
            $ewgsciccscsweqik = null;
            goto meegaqaesckqmyec;
            wamgcqkaieummksu:
            switch ($qqomumygoacsmsie) {
                case "\x69\156\x64\145\170":
                    goto yuyiqaawwgaywgqo;
                    kkogaccoqmsmmkmo:
                    $ikugycsiyegwoiay = $this->acsiseaeysswwqkw();
                    goto qmiqicgscsuoyeqo;
                    ysaumykuimqigeqa:
                    $this->icyamyikwyaaoqya("\141\144\144", $yyksucsgisomecgg->uikgwcuascgeissw("\141\x64\144\x5f\x6e\145\x77\137\151\x74\145\155"), ["\150\162\x65\x66" => $ikugycsiyegwoiay]);
                    goto oegaywiwywuyksaq;
                    oegaywiwywuyksaq:
                    yqkyoaiwcyqeaqwu:
                    goto eyskqaccgeomqmyw;
                    eyskqaccgeomqmyw:
                    goto eqmauwqqowsiwaue;
                    goto uiowwckamqucksim;
                    yuyiqaawwgaywgqo:
                    $ewgsciccscsweqik = new Index($this, $ywmkwiwkosakssii);
                    goto kkogaccoqmsmmkmo;
                    qmiqicgscsuoyeqo:
                    if (!$ikugycsiyegwoiay) {
                        goto yqkyoaiwcyqeaqwu;
                    }
                    goto ysaumykuimqigeqa;
                    uiowwckamqucksim:
                case "\x65\144\151\x74":
                case "\141\x64\144":
                    goto kmeekqukcecuscye;
                    imaiuooqwwokwemw:
                    $ewgsciccscsweqik = new Edit($this, $ywmkwiwkosakssii);
                    goto mioqycmmeucswoms;
                    mioqycmmeucswoms:
                    imsgusweocmiyygi:
                    goto mioaoacqueiyueak;
                    ucugeysomcyceyos:
                    $eaoumsseceiowgsk->asumqyigwsqmyeoc($this);
                    goto momgmqemgcasyuqq;
                    momgmqemgcasyuqq:
                    wscikmsmwmocsqeu:
                    goto qmuikumqukcyaeqa;
                    igckskemqkqueukg:
                    $this->aygiawwcgymgyaya();
                    goto wgmeyycmqioioaqc;
                    csoeisssoumqqeoa:
                    if (!in_array($suaemuyiacqyugsm, [$ymqmyyeuycgmigyo, "\145\x64\x69\164\x5f{$ymqmyyeuycgmigyo}", "\141\x64\144\137{$ymqmyyeuycgmigyo}", "\163\150\x6f\x77\137{$ymqmyyeuycgmigyo}"])) {
                        goto qwueqigcisoogaec;
                    }
                    goto weuueokkumksgaeo;
                    keyiswqkmqqquosw:
                    if (!$this->ugmceccgwaaaigiy()) {
                        goto imsgusweocmiyygi;
                    }
                    goto imaiuooqwwokwemw;
                    kmeekqukcecuscye:
                    $ymqmyyeuycgmigyo = $yyksucsgisomecgg->aakmagwggmkoiiyu();
                    goto csoeisssoumqqeoa;
                    wgmeyycmqioioaqc:
                    $uieukiskgwkouwyi = true;
                    goto ykiyuciecskusaae;
                    ykiyuciecskusaae:
                    $eaoumsseceiowgsk = Form::symcgieuakksimmu($ymqmyyeuycgmigyo);
                    goto pssquaaiioygwqoq;
                    qmuikumqukcyaeqa:
                    icawmkaswkmwicsa:
                    goto keyiswqkmqqquosw;
                    pssquaaiioygwqoq:
                    if (!$eaoumsseceiowgsk instanceof Form) {
                        goto wscikmsmwmocsqeu;
                    }
                    goto ucugeysomcyceyos;
                    mioaoacqueiyueak:
                    qwueqigcisoogaec:
                    goto oaseseemoaqcgqeu;
                    oaseseemoaqcgqeu:
                    goto eqmauwqqowsiwaue;
                    goto kuymgsewmeoimeuq;
                    weuueokkumksgaeo:
                    if ($uieukiskgwkouwyi) {
                        goto icawmkaswkmwicsa;
                    }
                    goto igckskemqkqueukg;
                    kuymgsewmeoimeuq:
                case "\163\x68\157\x77":
                    $ewgsciccscsweqik = new Show($this, $ywmkwiwkosakssii);
                    goto eqmauwqqowsiwaue;
                default:
                    $ewgsciccscsweqik = new View($this, $ywmkwiwkosakssii);
                    goto eqmauwqqowsiwaue;
            }
            goto mwgaaiaswusakkaq;
            ugowqoisymsioeye:
            eqmauwqqowsiwaue:
            goto gooqkmwgsmseuiwq;
            oeosugomyqyekmuq:
            $this->ecmiqywsauuoccwo($qqomumygoacsmsie, $ewgsciccscsweqik);
            goto emgssiqceagusgyg;
            iyocimuyeemkaaso:
            kisuswmyqsocukgk:
            goto isaouwiaamimceeg;
            emgssiqceagusgyg:
            gimsiyauegmikyka:
            goto ysusaysykymegguk;
            scccyaiaggeasgqg:
            if (!($ywmkwiwkosakssii instanceof View || is_subclass_of($ywmkwiwkosakssii, View::class))) {
                goto kisuswmyqsocukgk;
            }
            goto asueqykmkoaimguq;
            mwgaaiaswusakkaq:
            waycokyiesmqgqcg:
            goto ugowqoisymsioeye;
            gooqkmwgsmseuiwq:
            if (!$ewgsciccscsweqik) {
                goto gimsiyauegmikyka;
            }
            goto oeosugomyqyekmuq;
            ysusaysykymegguk:
            aosasoogesueygak:
            goto yskswskmsgoouyco;
            yskswskmsgoouyco:
            sqaowueaequoigsa:
            goto oaciskoioaecgwee;
            oaciskoioaecgwee:
        }
        goto qoameasiqwaqgmca;
        wkwkeicwosmkcygc:
        global $orm_model;
        goto ugcyukgoaiiysymc;
        ugcyukgoaiiysymc:
        $suaemuyiacqyugsm = ManipulateServer::get(self::PAGE);
        goto yuoyeeuqqaockyqw;
        osoqssymqqoqcuky:
        csskguekqcwcmocu:
        goto qcywwqceiqogcoyo;
        kygcymkakucoeock:
        if (!(strpos($suaemuyiacqyugsm, $yyksucsgisomecgg->aakmagwggmkoiiyu()) !== false)) {
            goto uccuykggugcmiyam;
        }
        goto qkiqquymecyoouki;
        mmusoowesqcmuqew:
        
        if (ManipulateAjax::mcgoysmkqsqooceq()) {
            goto csskguekqcwcmocu;
        }
        goto wkwkeicwosmkcygc;
        amkcomscieegkygc:
        $uieukiskgwkouwyi = false;
        goto uugekiumuwemyuyc;
        qoameasiqwaqgmca:
        saycoceqywiekqsi:
        goto osoqssymqqoqcuky;
        qcywwqceiqogcoyo:
    }
    
    public function kssgsuewkcwgiksa() : array
    {
        return [];
    }
    
    public function hkwssiimkcysaiyo() : ?string
    {
        goto awikkaqmmuqkukma;
        uckeuuaqimqamuyc:
        $qqomumygoacsmsie = str_replace("\x5f{$ymqmyyeuycgmigyo}", '', ManipulateServer::get(self::PAGE));
        goto mieeugiewckceagc;
        mieeugiewckceagc:
        if (!($qqomumygoacsmsie === $ymqmyyeuycgmigyo)) {
            goto giiucsyqgcooaima;
        }
        goto uqkqmseoeemyaqck;
        cceyoumkiicaguio:
        giiucsyqgcooaima:
        goto yayykakkyeoieicm;
        awikkaqmmuqkukma:
        $ymqmyyeuycgmigyo = $this->miwqiiqeegeqcwis();
        goto uckeuuaqimqamuyc;
        uqkqmseoeemyaqck:
        $qqomumygoacsmsie = "\x69\156\x64\x65\x78";
        goto cceyoumkiicaguio;
        yayykakkyeoieicm:
        return $qqomumygoacsmsie;
        goto yuiouamaogkkqmck;
        yuiouamaogkkqmck:
    }
    
    public function uqiykqoyaqymcues() : bool
    {
        return $this->hkwssiimkcysaiyo() == "\x65\x64\x69\164";
    }
    
    public function wkcuasmkgoscaiay() : bool
    {
        return $this->hkwssiimkcysaiyo() == "\163\x68\157\167";
    }
    
    public function wmwguecgowcscues() : bool
    {
        return $this->hkwssiimkcysaiyo() == "\x69\156\144\x65\x78";
    }
    
    public final function aygiawwcgymgyaya() : ?array
    {
        goto ggaucuaykyuiikem;
        yoaewquyogiimyic:
        mmwqwowqcaseyyki:
        goto wmcmqmmcweecqmsw;
        wmcmqmmcweecqmsw:
        return $this->ugmceccgwaaaigiy();
        goto aakoeuuosouyeemc;
        egikqoaqqegawugu:
        $qssskwiqeumgkago = $this->oyeskqayoscwciem()->aeosueemgsygqese();
        goto caaygouikgagsssc;
        caaygouikgagsssc:
        foreach ($ikgwqyuyckaewsow as $uusmaiomayssaecw => $uiewakwqscemywuo) {
            goto gkoyqgogsukuowqi;
            uamuuwkyuqomqyuy:
            $sqeykgyoooqysmca = "\x74\x65\x78\164";
            goto ekwuycsiuqwycqea;
            aqaaqeucgoegeeuk:
            goto qimomesqamyyicmo;
            goto wycmcqaauqkgegau;
            qcweoyigoaeacsow:
            $sqeykgyoooqysmca = "\144\x61\164\x65";
            goto iyceygqsmokgmams;
            gwyseusuceuwwccu:
            mquyemuqcqeassqc:
            goto icouowaoycuuisqe;
            cksoeiwawiygyiyg:
            $eewwgseqamqiouyq = $aaqqkgyougeiueyq->gueasuouwqysmomu();
            goto cyqokqcacysioeyc;
            uqcwyyiykmwygeau:
            augqweqsqioesmim:
            goto yeiokcoikcysyimu;
            wickgagwgqqsomum:
            if ($aiowsaccomcoikus) {
                goto uqiekawkwcegsumy;
            }
            goto wmwgeoequuwwwywa;
            uqugcugeomqakcqo:
            goto kgikoagqwkuocesg;
            goto qmoisuweiskkekca;
            wcsysckgigeykkwy:
            if (in_array($eewwgseqamqiouyq, ["\x73\x74\x72\151\x6e\147", "\142\x69\147\151\x6e\x74"])) {
                goto aescssauecumgwso;
            }
            goto scgmwokeuqwiekkk;
            icouowaoycuuisqe:
            sykuuisikqcwuaqu:
            goto ocmwuquguuqigose;
            cieumoqayigkoocy:
            qcceyyqiuiqcyqqm:
            goto yggciikgkomgeqsc;
            cyqokqcacysioeyc:
            $uiewakwqscemywuo = ManipulateFormat::omaawkkwwyesqwcc($uiewakwqscemywuo, $qqgeiaygkaoyccig);
            goto akwwuuiykscgicuw;
            ueqsiwuwumoqgsck:
            if ($sqeykgyoooqysmca) {
                goto gqyyccceswkqcmaa;
            }
            goto iikgiaocummweiga;
            wycmcqaauqkgegau:
            ngagwiymmmycgscu:
            goto qcweoyigoaeacsow;
            gysmmooawoeggaow:
            if (!in_array($eewwgseqamqiouyq, ["\145\x6e\x75\155"])) {
                goto qiawociayswicugw;
            }
            goto iyikuwuweqigiuey;
            gkoyqgogsukuowqi:
            $aaqqkgyougeiueyq = ManipulateArray::get($qssskwiqeumgkago, $uusmaiomayssaecw);
            goto sgikkoswwyesqomo;
            eoeiaccouaymakgm:
            ssesmiwwmsayksum:
            goto owaimkmgemoqewmm;
            kmqusaiaiogecyiy:
            kgikoagqwkuocesg:
            goto swckikycciugciqq;
            iikgiaocummweiga:
            if ($aaqqkgyougeiueyq instanceof Foreign) {
                goto qkwckeqowgaokkuy;
            }
            goto gsusqquicmukegcs;
            gsusqquicmukegcs:
            if (in_array($eewwgseqamqiouyq, ["\x62\x6f\157\x6c\x65\x61\156", "\164\x69\x6e\x79\151\156\x74"])) {
                goto qcceyyqiuiqcyqqm;
            }
            goto wcsysckgigeykkwy;
            ksawwekgswywwuwm:
            $uiewakwqscemywuo[self::TYPE] = $sqeykgyoooqysmca;
            goto yuqisiwgqacgmsym;
            ysoqeuugiuswykyu:
            qkwckeqowgaokkuy:
            goto usmuqsuwuueogimc;
            ekwuycsiuqwycqea:
            cooeoemccqiyewks:
            goto iyaugygcsmqqqkmo;
            aayysiegiyweiyuu:
            $qqgeiaygkaoyccig = ["\x69\x64" => $uusmaiomayssaecw, "\x6e\141\155\145" => $aaqqkgyougeiueyq->qcgakseyaikigqco()];
            goto cksoeiwawiygyiyg;
            scgmwokeuqwiekkk:
            if (in_array($eewwgseqamqiouyq, ["\164\x65\x78\x74"])) {
                goto kkacggiosquqagew;
            }
            goto ceusyscosamyaiws;
            wcekgciqeggiiwgk:
            goto augqweqsqioesmim;
            goto gkwuewqmqeswqukg;
            acsigwcaesyyoiie:
            qiawociayswicugw:
            goto aqaaqeucgoegeeuk;
            ceusyscosamyaiws:
            if (in_array($eewwgseqamqiouyq, ["\x64\141\x74\x65", "\144\x61\164\x65\x74\x69\x6d\145"])) {
                goto ngagwiymmmycgscu;
            }
            goto gysmmooawoeggaow;
            umcyeiusoakewyaa:
            gqyyccceswkqcmaa:
            goto ksawwekgswywwuwm;
            sagemooicmgceiug:
            $sqeykgyoooqysmca = "\164\x65\170\164\x61\162\145\141";
            goto uqcwyyiykmwygeau;
            yuqisiwgqacgmsym:
            $aiowsaccomcoikus = MetaBox::okmsgamiiemyesao($uiewakwqscemywuo);
            goto wickgagwgqqsomum;
            sgikkoswwyesqomo:
            if (!$aaqqkgyougeiueyq instanceof Field) {
                goto skaayekywasksoug;
            }
            goto aayysiegiyweiyuu;
            iyceygqsmokgmams:
            qimomesqamyyicmo:
            goto wcekgciqeggiiwgk;
            swckikycciugciqq:
            skaayekywasksoug:
            goto coogyackikgmecic;
            wywwieycqskuqcwc:
            switch ($eewwgseqamqiouyq) {
                case "\x65\x6e\165\155":
                    goto bagkewioewygysea;
                    bagkewioewygysea:
                    if (!$aiowsaccomcoikus instanceof BSSelect) {
                        goto weiaigyyigkusucy;
                    }
                    goto mgieeyuyuoeccaog;
                    mgieeyuyuoeccaog:
                    $aiowsaccomcoikus->acauweqyyugwisqc($aaqqkgyougeiueyq->gkwkqmwweiawigae());
                    goto amgsicqmemeuuaem;
                    amgsicqmemeuuaem:
                    weiaigyyigkusucy:
                    goto gwksywaoeowkesei;
                    gwksywaoeowkesei:
                    goto sykuuisikqcwuaqu;
                    goto sgkwaiuukkaqyqki;
                    sgkwaiuukkaqyqki:
                case "\146\157\x72\145\x69\x67\156":
                    goto cauqmacqkssciwyq;
                    cauqmacqkssciwyq:
                    if (!$aiowsaccomcoikus instanceof BSSelect) {
                        goto emagssesowicacoa;
                    }
                    goto gusgywuaimwooawc;
                    acmgueaoaaweiqqu:
                    goto sykuuisikqcwuaqu;
                    goto awaaowoqskgokwiy;
                    gusgywuaimwooawc:
                    $aiowsaccomcoikus->wkqyoukciomqiyew()->oeewiaacscgyamai($aaqqkgyougeiueyq->uecyuoauykiqqkey());
                    goto uugwoygiyecgymgw;
                    uugwoygiyecgymgw:
                    emagssesowicacoa:
                    goto acmgueaoaaweiqqu;
                    awaaowoqskgokwiy:
            }
            goto gwyseusuceuwwccu;
            usmuqsuwuueogimc:
            $sqeykgyoooqysmca = "\x62\x73\163\145\x6c\x65\x63\x74";
            goto koiiaewwicsckseu;
            wmwgeoequuwwwywa:
            throw new UnexpectedValueException("{$uusmaiomayssaecw}\x20\151\x73\x20\x6e\157\164\40\x61\40\166\141\154\x69\x64\x20\x66\151\145\154\144\x2e");
            goto uqugcugeomqakcqo;
            gkwuewqmqeswqukg:
            kkacggiosquqagew:
            goto sagemooicmgceiug;
            yeiokcoikcysyimu:
            goto cooeoemccqiyewks;
            goto kkmwwqyesmkescyg;
            owaimkmgemoqewmm:
            goto kqkymieyyqaoeymw;
            goto ysoqeuugiuswykyu;
            yggciikgkomgeqsc:
            $sqeykgyoooqysmca = "\143\150\x65\x63\x6b\x62\x6f\x78";
            goto eoeiaccouaymakgm;
            iyaugygcsmqqqkmo:
            goto ssesmiwwmsayksum;
            goto cieumoqayigkoocy;
            coogyackikgmecic:
            wsckacayikksiswo:
            goto iqwsqykoueqyyomy;
            koiiaewwicsckseu:
            kqkymieyyqaoeymw:
            goto umcyeiusoakewyaa;
            akwwuuiykscgicuw:
            $sqeykgyoooqysmca = ManipulateArray::get($uiewakwqscemywuo, "\x74\x79\160\145");
            goto ueqsiwuwumoqgsck;
            kkmwwqyesmkescyg:
            aescssauecumgwso:
            goto uamuuwkyuqomqyuy;
            iyikuwuweqigiuey:
            $sqeykgyoooqysmca = "\x62\x73\x73\x65\x6c\145\x63\x74";
            goto acsigwcaesyyoiie;
            ocmwuquguuqigose:
            $this->qaqsggqyouammqgm($aiowsaccomcoikus);
            goto kmqusaiaiogecyiy;
            qmoisuweiskkekca:
            uqiekawkwcegsumy:
            goto wywwieycqskuqcwc;
            iqwsqykoueqyyomy:
        }
        goto yoaewquyogiimyic;
        ggaucuaykyuiikem:
        $ikgwqyuyckaewsow = $this->kssgsuewkcwgiksa();
        goto egikqoaqqegawugu;
        aakoeuuosouyeemc:
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
        goto csggsqueaqmwgwkk;
        csggsqueaqmwgwkk:
        $qssskwiqeumgkago = $this->oyeskqayoscwciem()->aeosueemgsygqese();
        goto sescaagayikiggyq;
        wwwggoemicgwwasy:
        foreach ($qssskwiqeumgkago as $aiowsaccomcoikus) {
            goto saekesoeysauokkq;
            sqmiymiemeegegic:
            cicegcoqyuoggiwy:
            goto csqakuuiyywassgw;
            wycuyiukyceccaow:
            $wkkweuacukumqmya[$aiowsaccomcoikus->mwikyscisascoeea()] = $aiowsaccomcoikus->qcgakseyaikigqco();
            goto meseuuacmkuowqau;
            meseuuacmkuowqau:
            ugcwqacogqoswyse:
            goto sqmiymiemeegegic;
            saekesoeysauokkq:
            if (!($aiowsaccomcoikus instanceof Field && $aiowsaccomcoikus->uwaascqoguwkwiaw())) {
                goto ugcwqacogqoswyse;
            }
            goto wycuyiukyceccaow;
            csqakuuiyywassgw:
        }
        goto egmocemomockemia;
        egmocemomockemia:
        qsmoiwqcuamyuwyu:
        goto gemwkqocygssmequ;
        sescaagayikiggyq:
        if (!($qssskwiqeumgkago && is_array($qssskwiqeumgkago))) {
            goto esqiocgueosoksyq;
        }
        goto wwwggoemicgwwasy;
        gemwkqocygssmequ:
        esqiocgueosoksyq:
        goto cqaeiesyciakcagu;
        cqaeiesyciakcagu:
        return $wkkweuacukumqmya;
        goto acisycocoswkekik;
        acisycocoswkekik:
    }
    
    public function qeowcucuoaqyqwuw($umwgoasiowmqcumw) : array
    {
        goto gwayeyymscmgwqkg;
        cqwgmwqiakmgyuee:
        aaiymmkqmocgakei:
        goto ksgwgcguemcescqg;
        ckuagmyqkyoeeaeu:
        foreach ($umwgoasiowmqcumw as $qqomumygoacsmsie => $icwicymcioeyeyek) {
            goto sccqekuwywiisami;
            ksqgwiceoomkuuiy:
            goto ciwggusyecgskagy;
            goto gkoiyaagwgycysim;
            ysssquieawyysiyc:
            $geecqyososceumsk = ManipulateServer::ekcymmyqoceukosc(true);
            goto yomoeykcqyukscmi;
            igscwycsqsckmcuq:
            $umwgoasiowmqcumw[$qqomumygoacsmsie] = ManipulateHTML::qgsekwygcgawekeq("\x61", ["\x68\162\x65\x66" => $geecqyososceumsk, "\x63\154\141\x73\x73" => "\157\162\155\x2d\146\151\x6c\x74\145\162\55\x6c\151\x6e\153" . ($yeacayasgueouoqc ? "\40\x63\165\162\x72\145\156\x74" : '')], true, sprintf("\45\x73\x20\x28\45\163\x29", $meqocwsecsywiiqs, ManipulateHTML::gmqyuaqwgiayskei($this->wusgwkaycokeckqs($gaeqamemwmwsyukm))));
            goto wmcaecgwmmwuuqsq;
            wsqoskqgyooqeyga:
            $geecqyososceumsk = DecoratorQuery::yqymaqmqiqmmmsoo([self::ORM_FILTER_BY => $ymaogssqccumcyqa, self::ORM_FILTER_VALUE => $qqomumygoacsmsie], $geecqyososceumsk);
            goto uekkkmwciocmosgg;
            wmcaecgwmmwuuqsq:
            $momcykaoccoymeig++;
            goto ycskuioouwwemgke;
            uekkkmwciocmosgg:
            scyqmcegwikkoesw:
            goto ecqeqquikuomwgsu;
            eokcuuwqaomkooag:
            $gaeqamemwmwsyukm = ManipulateArray::get($icwicymcioeyeyek, "\143\x6f\165\x6e\164", 0);
            goto qgqasacusgwmoegy;
            sccqekuwywiisami:
            $meqocwsecsywiiqs = ManipulateArray::get($icwicymcioeyeyek, "\x74\151\x74\154\x65", false);
            goto eokcuuwqaomkooag;
            qgqasacusgwmoegy:
            if ($meqocwsecsywiiqs) {
                goto ycweseaccsomkioa;
            }
            goto qscqkykqskqmisgw;
            ycskuioouwwemgke:
            ciwggusyecgskagy:
            goto syeeegeygawwqiuu;
            swmgucaogosuueug:
            $geecqyososceumsk = DecoratorQuery::oiamiqcuyksmmomm([self::ORM_FILTER_BY, self::ORM_FILTER_VALUE], $geecqyososceumsk);
            goto uwsmcsiiisuocgwg;
            syeeegeygawwqiuu:
            kucqcqeesaiacekm:
            goto iuieskocqoqkkwus;
            suaymckwwgmugsaa:
            cewyaqiqmmwmauce:
            goto wsqoskqgyooqeyga;
            yomoeykcqyukscmi:
            if ($qqomumygoacsmsie !== "\141\x6c\154") {
                goto cewyaqiqmmwmauce;
            }
            goto swmgucaogosuueug;
            uwsmcsiiisuocgwg:
            goto scyqmcegwikkoesw;
            goto suaymckwwgmugsaa;
            gkoiyaagwgycysim:
            ycweseaccsomkioa:
            goto ysssquieawyysiyc;
            qscqkykqskqmisgw:
            ManipulateArray::unset($cqcsaaswaciweiie, $qqomumygoacsmsie);
            goto ksqgwiceoomkuuiy;
            ecqeqquikuomwgsu:
            $yeacayasgueouoqc = $scsyuucsumiwkqqc ? $scsyuucsumiwkqqc === $qqomumygoacsmsie : $momcykaoccoymeig === 1;
            goto igscwycsqsckmcuq;
            iuieskocqoqkkwus:
        }
        goto cqwgmwqiakmgyuee;
        amoygaweoeymiuiy:
        if (!(is_array($umwgoasiowmqcumw) && $umwgoasiowmqcumw)) {
            goto isiqkeyciyqgkayu;
        }
        goto kcomueysiyyqagus;
        moimkkmkooeiyisc:
        $scsyuucsumiwkqqc = ManipulateServer::get("\x6f\x72\155\x5f\146\151\x6c\x74\x65\162\x5f\x76\141\x6c\165\145");
        goto amoygaweoeymiuiy;
        kcomueysiyyqagus:
        $umwgoasiowmqcumw = ["\x61\x6c\x6c" => ["\x74\x69\x74\x6c\145" => __("\101\x6c\x6c", PR__CMN__FOUNDATION), "\143\157\x75\x6e\164" => array_sum(array_map(function ($mokouoooiwsmcmiu) {
            return $mokouoooiwsmcmiu["\x63\x6f\x75\x6e\x74"];
        }, $umwgoasiowmqcumw))]] + $umwgoasiowmqcumw;
        goto ckuagmyqkyoeeaeu;
        caoikoqmyeqsqqqe:
        $ymaogssqccumcyqa = $this->aakiaoueckoiyoew();
        goto moimkkmkooeiyisc;
        gwayeyymscmgwqkg:
        $momcykaoccoymeig = 1;
        goto caoikoqmyeqsqqqe;
        ksgwgcguemcescqg:
        isiqkeyciyqgkayu:
        goto kiwiesucugwoiuum;
        kiwiesucugwoiuum:
        return $umwgoasiowmqcumw;
        goto cmagycousakeeaei;
        cmagycousakeeaei:
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
        goto okemsmmeceoeaswi;
        ossyqogewmggmaoc:
        if (!$iqoeaggekweuwcgw) {
            goto eekeksysqeuoskoo;
        }
        goto ggkoiouwecyiosym;
        ggkoiouwecyiosym:
        $ceiwsaacewygcsqg = $this->myywwqkyiwawwquy($ceiwsaacewygcsqg);
        goto egosmwkuuikwqeak;
        egosmwkuuikwqeak:
        eekeksysqeuoskoo:
        goto eosmwawqaocwgccq;
        eosmwawqaocwgccq:
        return $ceiwsaacewygcsqg;
        goto eymiqwsygoowowuu;
        okemsmmeceoeaswi:
        $ceiwsaacewygcsqg = $this->primaryKey;
        goto ossyqogewmggmaoc;
        eymiqwsygoowowuu:
    }
    
    public function gqaysymikgeawkqa() : ?Builder
    {
        goto ekgcquiosyesyism;
        gmcqkoqwkiawaikw:
        return $siykeiywomwwuoiw;
        goto kgeggsckmgcgwcqm;
        ekgcquiosyesyism:
        $siykeiywomwwuoiw = null;
        goto qosckaqceoumcasm;
        qosckaqceoumcasm:
        try {
            goto ekgsawcuswowmosm;
            usgmimcwygsmcioa:
            keqagmaiqqsgkmso:
            goto qggiogeyowcoaiqy;
            ekgsawcuswowmosm:
            $aasascamegmwqmqk = $this->miwqiiqeegeqcwis();
            goto uiwswesymogiwsgg;
            wkcwuemioaiyouek:
            $siykeiywomwwuoiw = null;
            goto usgmimcwygsmcioa;
            uiwswesymogiwsgg:
            
            $siykeiywomwwuoiw = $this->getConnection()->table($aasascamegmwqmqk);
            goto euogcyyayioyyiyg;
            euogcyyayioyyiyg:
            if (!($siykeiywomwwuoiw && !$siykeiywomwwuoiw->exists())) {
                goto keqagmaiqqsgkmso;
            }
            goto wkcwuemioaiyouek;
            qggiogeyowcoaiqy:
        } catch (Exception $wgaoewqkwgomoaai) {
            $this->saqqeqmcyyoeqici($this->kyacickkomkioeyu($wgaoewqkwgomoaai));
        }
        goto gmcqkoqwkiawaikw;
        kgeggsckmgcgwcqm:
    }
    
    public function feccsgmuogywweio($mksyucucyswaukig)
    {
        goto wogokmgkgkumqcws;
        cycyaqqawmwiywwe:
        qimieogaimwmukmu:
        goto ckowiuagwmsqmiqc;
        wogokmgkgkumqcws:
        if (is_numeric($mksyucucyswaukig)) {
            goto qimieogaimwmukmu;
        }
        goto koawwmccgquqqmwa;
        ygywkqgioiscmuie:
        return $this->cyyiiykmaeuqqgok($aokagokqyuysuksm);
        goto iuaommmyqoecmuss;
        ckowiuagwmsqmiqc:
        $aokagokqyuysuksm = $mksyucucyswaukig;
        goto eqieeecackceeweg;
        cokacyaayuueyuuu:
        goto gmymycwymqkuiisi;
        goto cycyaqqawmwiywwe;
        eqieeecackceeweg:
        gmymycwymqkuiisi:
        goto ygywkqgioiscmuie;
        koawwmccgquqqmwa:
        $aokagokqyuysuksm = ManipulateArray::get($mksyucucyswaukig, $this->kumuygiiqswoyasy());
        goto cokacyaayuueyuuu;
        iuaommmyqoecmuss:
    }
    
    public function getConnection() : Database
    {
        goto eecgougegqassgyq;
        cceakqgoysacqwmc:
        ikeyoyoigsuouokm:
        goto scaimkkukmgoeaya;
        cuwkqgemkmuuegkc:
        $mgcmmwqwguicsews = Database::symcgieuakksimmu($ymqmyyeuycgmigyo);
        goto oyicskieeaewgwce;
        oyicskieeaewgwce:
        if (!($mgcmmwqwguicsews instanceof Database && !$mgcmmwqwguicsews->aakmagwggmkoiiyu())) {
            goto ikeyoyoigsuouokm;
        }
        goto wemmseueskwkcwou;
        wemmseueskwkcwou:
        $mgcmmwqwguicsews->wcweamocuicuusky("\x6e\x61\x6d\x65", $ymqmyyeuycgmigyo);
        goto cceakqgoysacqwmc;
        scaimkkukmgoeaya:
        return $mgcmmwqwguicsews;
        goto ceeqguaoysyaasey;
        eecgougegqassgyq:
        $ymqmyyeuycgmigyo = $this->miwqiiqeegeqcwis();
        goto cuwkqgemkmuuegkc;
        ceeqguaoysyaasey:
    }
    public function ckgmycmaukqgkosk()
    {
        goto cugkqmkuyuwwqcec;
        qwogeocemuaaasiw:
        $yyksucsgisomecgg->iqoguoscqueomqsk(ORM::symcgieuakksimmu()->homgcsoocssgwgym($yyksucsgisomecgg->ggqekkkocygywmoy(), $yyksucsgisomecgg->cwueseysoqeewkao(), $yyksucsgisomecgg->iemucaoqaisiwise()));
        goto ywmuoigomwwigqea;
        ewooakeuigcyuemu:
        if ($yyksucsgisomecgg->masyeqmaiuqwosei()) {
            goto ekmqouqsgsaukeiq;
        }
        goto wceiuqaeywmgscww;
        cugkqmkuyuwwqcec:
        $yyksucsgisomecgg = $this->oyeskqayoscwciem();
        goto ewooakeuigcyuemu;
        wceiuqaeywmgscww:
        $yyksucsgisomecgg->usuqmwksoeaayaig(ManipulateString::kwuyaykukcmaqggg(ManipulateString::mkwcwqkqeqkqyggc(self::uqggkiomyiceyooa())));
        goto kacgiqwewyeeyyam;
        kacgiqwewyeeyyam:
        ekmqouqsgsaukeiq:
        goto qwogeocemuaaasiw;
        ywmuoigomwwigqea:
    }
    
    public function oyeskqayoscwciem() : Register
    {
        goto goimywgsweeqsewo;
        cqyiukmuqceicqwa:
        cgqkqmiekaageyka:
        goto kmocamaieycogugg;
        kmocamaieycogugg:
        return $this->register;
        goto iuieyqacggsykgus;
        goimywgsweeqsewo:
        if ($this->register) {
            goto cgqkqmiekaageyka;
        }
        goto uomwseyiqckeewgo;
        uomwseyiqckeewgo:
        $this->register = new Register();
        goto cqyiukmuqceicqwa;
        iuieyqacggsykgus:
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
        goto wwskeewecyukygeg;
        cqeceeagmysoyoqg:
        
        if (!DecoratorUser::scmcyesmmikkucie($this->oyeskqayoscwciem()->gwaeeegmgggawiyi("\145\x64\x69\164\137\x69\x74\145\x6d\163"))) {
            goto wamkaouokmyoyuqu;
        }
        goto wggeggkumkwaaesu;
        wmqegaqemgiggsce:
        if (!$yskommoiekkwiggo instanceof Edit) {
            goto eywcgeccsmquugsw;
        }
        goto cqeceeagmysoyoqg;
        wggeggkumkwaaesu:
        $yciaosuiyeieceug = $yskommoiekkwiggo;
        goto uauqmaeueukkmuwa;
        kmikwoqwigwuyqae:
        return $yciaosuiyeieceug;
        goto qcuywygiosoqycaa;
        wwskeewecyukygeg:
        $yciaosuiyeieceug = false;
        goto sickakeesgcgwisw;
        uauqmaeueukkmuwa:
        wamkaouokmyoyuqu:
        goto gkyguugwwoaqoigy;
        gkyguugwwoaqoigy:
        eywcgeccsmquugsw:
        goto kmikwoqwigwuyqae;
        sickakeesgcgwisw:
        $yskommoiekkwiggo = $this->cgswceaawqgeskua("\145\144\151\x74");
        goto wmqegaqemgiggsce;
        qcuywygiosoqycaa:
    }
    
    public function qqakqoekigkcmyek()
    {
        goto ykymogaqkgaiiiyi;
        jweeyemwqyqmyuys:
        coaysoeouasaekie:
        goto mgiwqumikeuieocg;
        qsyyeoosgigiiequ:
        $yciaosuiyeieceug = $kmsymkkmiwykeyqi;
        goto jweeyemwqyqmyuys;
        uusyaguomkqeakkm:
        $kmsymkkmiwykeyqi = $this->cgswceaawqgeskua("\163\x68\157\167");
        goto qoigaauuokyusmgk;
        ykymogaqkgaiiiyi:
        $yciaosuiyeieceug = false;
        goto uusyaguomkqeakkm;
        mgiwqumikeuieocg:
        return $yciaosuiyeieceug;
        goto yegkgccwomcgkumi;
        qoigaauuokyusmgk:
        if (!$kmsymkkmiwykeyqi instanceof Show) {
            goto coaysoeouasaekie;
        }
        goto qsyyeoosgigiiequ;
        yegkgccwomcgkumi:
    }
    
    public function mukyysqkgaimcygs() : bool
    {
        $gkswkiicccswksiq = $this->oyeskqayoscwciem()->gwaeeegmgggawiyi("\x64\x65\154\145\164\145\137\151\x74\145\x6d\x73");
        return $this->gqigeuumsosmamqs() && DecoratorUser::scmcyesmmikkucie($gkswkiicccswksiq);
    }
    
    public function comogmawyoiquwis() : ?string
    {
        goto aeekgeqawgsmgiqw;
        imgagmqusgiqissi:
        $qqomumygoacsmsie = $this->cgswceaawqgeskua("\151\x6e\144\145\170");
        goto scaciowogmayswms;
        aeekgeqawgsmgiqw:
        $iwywmkygwewiamwm = null;
        goto imgagmqusgiqissi;
        cesaaiguwciccysi:
        $iwywmkygwewiamwm = $qqomumygoacsmsie->qmgcisuuikgmqcsu();
        goto wskccugoccagaqcw;
        sqyceswygksmmqqa:
        return $iwywmkygwewiamwm;
        goto kqsyqwwscwoswsgk;
        scaciowogmayswms:
        if (!$qqomumygoacsmsie instanceof Index) {
            goto qikmwaessamuueoe;
        }
        goto cesaaiguwciccysi;
        wskccugoccagaqcw:
        qikmwaessamuueoe:
        goto sqyceswygksmmqqa;
        kqsyqwwscwoswsgk:
    }
    
    public function yyykkcyiksewsoqy($kqokimuosyuyyucg = 0) : ?string
    {
        goto qocmmyskykeuwsae;
        kywmiquiiwmwgooy:
        if (!($qqomumygoacsmsie = $this->ggwyugcggywuwcse())) {
            goto yemuiyokmqoqckwu;
        }
        goto syquiiogeymgicuy;
        yquysamwsoyyqcya:
        yemuiyokmqoqckwu:
        goto qsycguggqkgywgaq;
        qocmmyskykeuwsae:
        $iwywmkygwewiamwm = null;
        goto kywmiquiiwmwgooy;
        qsycguggqkgywgaq:
        return $iwywmkygwewiamwm;
        goto wsyeqyekimescwkq;
        syquiiogeymgicuy:
        $iwywmkygwewiamwm = DecoratorQuery::yqymaqmqiqmmmsoo([$this->kumuygiiqswoyasy() => $kqokimuosyuyyucg], $qqomumygoacsmsie->qmgcisuuikgmqcsu());
        goto yquysamwsoyyqcya;
        wsyeqyekimescwkq:
    }
    
    public function uesweuocqoywoyms($kqokimuosyuyyucg = 0) : ?string
    {
        goto iiyamaquicwswcyu;
        iiyamaquicwswcyu:
        $iwywmkygwewiamwm = null;
        goto iiyggeuemwuwqiey;
        ggoyigsoyccmscum:
        return $iwywmkygwewiamwm;
        goto aigeoggkowgwwwqg;
        agokkauammisaqke:
        gyceukwoyaasuwik:
        goto ggoyigsoyccmscum;
        iiyggeuemwuwqiey:
        if (!($qqomumygoacsmsie = $this->qqakqoekigkcmyek())) {
            goto gyceukwoyaasuwik;
        }
        goto omeookmiomoieeee;
        omeookmiomoieeee:
        $iwywmkygwewiamwm = DecoratorQuery::yqymaqmqiqmmmsoo([$this->kumuygiiqswoyasy() => $kqokimuosyuyyucg], $qqomumygoacsmsie->qmgcisuuikgmqcsu());
        goto agokkauammisaqke;
        aigeoggkowgwwwqg:
    }
    
    public function cgccmsewskigcuig($kqokimuosyuyyucg = 0) : ?string
    {
        goto ogywsgmqcgioaoqk;
        msuyygiskkumokec:
        $ceiwsaacewygcsqg = $this->kumuygiiqswoyasy();
        goto ggkgseywksemuogc;
        eiekcqosmyqmwqag:
        goto cyyecekuwygaqwcy;
        goto mgscyaiwekksacco;
        iyeswqeqcsmsoueq:
        $iwywmkygwewiamwm = $qqomumygoacsmsie->qmgcisuuikgmqcsu();
        goto eiekcqosmyqmwqag;
        ayggiggmcqckqwom:
        if (!$kqokimuosyuyyucg) {
            goto wcagqkquasswioos;
        }
        goto wiiyageyqowkmmko;
        ggoquyyseekiwukq:
        $iwywmkygwewiamwm = DecoratorQuery::yqymaqmqiqmmmsoo(["\x6f\162\155\55\x61\143\x74\x69\x6f\156" => "\x64\145\x6c\145\164\145", $ceiwsaacewygcsqg => $kqokimuosyuyyucg], $iwywmkygwewiamwm);
        goto dwciioycickkwawq;
        mowauiysyiciqaaa:
        if (!($qqomumygoacsmsie instanceof Index && $this->mukyysqkgaimcygs())) {
            goto muqeeocooyiosouk;
        }
        goto msuyygiskkumokec;
        mgscyaiwekksacco:
        pscqogmyseiwuqye:
        goto sykwygmouoikuyws;
        sykwygmouoikuyws:
        $iwywmkygwewiamwm = ManipulateServer::ekcymmyqoceukosc(true);
        goto keiciayiyqsemsys;
        ysiuiuqawkaaamus:
        return $iwywmkygwewiamwm;
        goto qooykiaywemimcke;
        yoociieskmuucgms:
        wcagqkquasswioos:
        goto ysiuiuqawkaaamus;
        keiciayiyqsemsys:
        cyyecekuwygaqwcy:
        goto ggoquyyseekiwukq;
        wiiyageyqowkmmko:
        $qqomumygoacsmsie = $this->cgswceaawqgeskua("\x69\156\x64\145\170");
        goto mowauiysyiciqaaa;
        dwciioycickkwawq:
        muqeeocooyiosouk:
        goto yoociieskmuucgms;
        ggkgseywksemuogc:
        if ($qqomumygoacsmsie->qcsgmgoukiouuscw()) {
            goto pscqogmyseiwuqye;
        }
        goto iyeswqeqcsmsoueq;
        ogywsgmqcgioaoqk:
        $iwywmkygwewiamwm = null;
        goto ayggiggmcqckqwom;
        qooykiaywemimcke:
    }
    
    public function setCreatedAt($eqgoocgaqwqcimie)
    {
        $this->{static::CREATED_AT} = current_time("\155\x79\163\161\154");
    }
    
    public function setUpdatedAt($eqgoocgaqwqcimie)
    {
        $this->{static::UPDATED_AT} = current_time("\155\171\x73\161\x6c");
    }
    
    public function acsiseaeysswwqkw() : ?string
    {
        goto uecmkggsueeiyawk;
        uecmkggsueeiyawk:
        $iwywmkygwewiamwm = null;
        goto iyakeemwaiqeueme;
        ouuuacyewgmocwsc:
        $ecmiqywsauuoccwo = $this->cgswceaawqgeskua("\141\x64\144");
        goto jgaoqcmiqagoiuko;
        iekesyeicomwcuas:
        $iwywmkygwewiamwm = $ecmiqywsauuoccwo->qmgcisuuikgmqcsu();
        goto wimggeysyugwwkca;
        jgaoqcmiqagoiuko:
        if (!($ecmiqywsauuoccwo instanceof View && DecoratorUser::scmcyesmmikkucie($gkswkiicccswksiq))) {
            goto okceyucmoigyokyy;
        }
        goto iekesyeicomwcuas;
        oycikycyewimcaew:
        return $iwywmkygwewiamwm;
        goto sqokyowsuawgkusy;
        wimggeysyugwwkca:
        okceyucmoigyokyy:
        goto oycikycyewimcaew;
        iyakeemwaiqeueme:
        $gkswkiicccswksiq = $this->oyeskqayoscwciem()->gwaeeegmgggawiyi("\x63\x72\x65\141\x74\x65\137\151\164\145\155\163");
        goto ouuuacyewgmocwsc;
        sqokyowsuawgkusy:
    }
    
    public function sgcuwcowgwimgsgk($aokagokqyuysuksm, $cwwowqyuwccuykom = false)
    {
        goto ogqaueuweieisowc;
        waiqmywasoeggkce:
        $yciaosuiyeieceug = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x63\x61\x6e\137\x64\x65\x6c\x65\x74\145\137\x6f\x62\x6a\x65\x63\164", self::class), true, $mksyucucyswaukig, $cwwowqyuwccuykom);
        goto ggcayqaayysyqmia;
        ogqaueuweieisowc:
        $mksyucucyswaukig = $this->cyyiiykmaeuqqgok($aokagokqyuysuksm);
        goto yaokowamwsaggege;
        eskmkooukwwieuke:
        try {
            goto mwkcmgksoyycumos;
            oiueawimuggcqgky:
            $kigowwqauiumummw = $mksyucucyswaukig;
            goto qqiwcikkcgmmakow;
            assyuumuuuocycyy:
            iyekgiaayeasoggw:
            goto oiueawimuggcqgky;
            wksssmewgogkacei:
            wiigoqowismumcsm:
            goto ykcymsoikgqeaukw;
            caskqicqwmyuugku:
            goto cwsgieeaugwciiwu;
            goto assyuumuuuocycyy;
            ukcukckucsyaggmw:
            $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x66\141\151\154\x65\x64\137\144\x65\154\x65\164\145\x5f\157\x62\152\145\x63\x74", self::class), $aokagokqyuysuksm);
            goto caskqicqwmyuugku;
            mwkcmgksoyycumos:
            if (!$this->ueaumcyiwwkeueag($aokagokqyuysuksm, $mksyucucyswaukig)) {
                goto wiigoqowismumcsm;
            }
            goto aikukgimkamkgwsu;
            aikukgimkamkgwsu:
            
            if ($mksyucucyswaukig->delete()) {
                goto iyekgiaayeasoggw;
            }
            goto ukcukckucsyaggmw;
            qqiwcikkcgmmakow:
            $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\157\x62\152\145\x63\164\137\x64\x65\154\x65\164\x65\144", self::class), $aokagokqyuysuksm);
            goto wgcuewwyieoqaoek;
            wgcuewwyieoqaoek:
            cwsgieeaugwciiwu:
            goto wksssmewgogkacei;
            ykcymsoikgqeaukw:
        } catch (Exception $wgaoewqkwgomoaai) {
            $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x66\x61\x69\x6c\x65\x64\x5f\x64\145\154\x65\x74\145\x5f\x6f\142\152\145\x63\x74", self::class), $aokagokqyuysuksm);
        }
        goto muaigwwqgsgowgkk;
        isssemmuiiaewiwi:
        return $kigowwqauiumummw;
        goto oiguycsiaweycioe;
        imgyqyeaoawqscae:
        akycayowsciesmug:
        goto isssemmuiiaewiwi;
        miiegqgiuamasook:
        $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\142\x65\x66\157\162\x65\137\x64\x65\154\145\164\x65\x5f\157\x62\152\x65\143\164", self::class), $mksyucucyswaukig, $aokagokqyuysuksm);
        goto eskmkooukwwieuke;
        yaokowamwsaggege:
        $kigowwqauiumummw = false;
        goto qwqwwywiiuqayaca;
        ggcayqaayysyqmia:
        if (!$yciaosuiyeieceug) {
            goto akcqguucucewaqws;
        }
        goto miiegqgiuamasook;
        muaigwwqgsgowgkk:
        akcqguucucewaqws:
        goto imgyqyeaoawqscae;
        qwqwwywiiuqayaca:
        if (!$mksyucucyswaukig instanceof Model) {
            goto akycayowsciesmug;
        }
        goto waiqmywasoeggkce;
        oiguycsiaweycioe:
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
        goto ueeowyociayoygsa;
        ueeowyociayoygsa:
        $ueeagokqmgisgauy = $this->coescmgakmkiyseg();
        goto isumwussqyqawwmy;
        ksaimkacqesiguyg:
        return $ueeagokqmgisgauy;
        goto semymwueqcweowae;
        isumwussqyqawwmy:
        $this->validationErrors = [];
        goto ksaimkacqesiguyg;
        semymwueqcweowae:
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
        goto mcgcqaiwmkewmwue;
        qcmakskemmcgaeyg:
        oegcoaeyokkgoqyg:
        goto msayswiykqokmuqa;
        ekwsguueioyegqkc:
        $siykeiywomwwuoiw = $this->gqaysymikgeawkqa();
        goto ooceggceowgoacyu;
        aigseumaammwaqck:
        mseimosiimuuceoa:
        goto ggqqwysyuqiwksgm;
        mcgcqaiwmkewmwue:
        $mksyucucyswaukig = null;
        goto ziggykossqqayaki;
        sooqqqougsgcumko:
        $kigowwqauiumummw = false;
        goto ekcwasmkccgmogmy;
        ggqqwysyuqiwksgm:
        scaoisaaceiaweoe:
        goto wguccgmciesyocmi;
        msayswiykqokmuqa:
        if (!$this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x6f\x72\x6d\137\x70\145\162\x73\x69\163\x74\137\x6f\162\x5f\x75\160\144\x61\x74\x65\137\x76\x61\x6c\x69\x64\x61\164\151\157\x6e"), $kuuugksiksqcaaaa, $icwicymcioeyeyek, $this)) {
            goto mseimosiimuuceoa;
        }
        goto yeacwagosugscqcg;
        gwmauwgkiomyggmu:
        if (!$siykeiywomwwuoiw) {
            goto scaoisaaceiaweoe;
        }
        goto syaqwysmymkgkcuu;
        ekcwasmkccgmogmy:
        $kuuugksiksqcaaaa = true;
        goto ekwsguueioyegqkc;
        wguccgmciesyocmi:
        return ["\x6f\142\x6a\145\143\x74" => $mksyucucyswaukig, $ceiwsaacewygcsqg => ManipulateArray::get($mksyucucyswaukig, $ceiwsaacewygcsqg), self::ERRORS => $this->skwiagoagiyswgay(), self::SUCCESS => $kigowwqauiumummw];
        goto qmkmuwomcwygkysi;
        syaqwysmymkgkcuu:
        if ($cwwowqyuwccuykom) {
            goto oegcoaeyokkgoqyg;
        }
        goto coqycqiqgwkgkymo;
        ziggykossqqayaki:
        $iggwcmkgmicmouyu = true;
        goto sooqqqougsgcumko;
        coqycqiqgwkgkymo:
        $kuuugksiksqcaaaa = $this->kuuugksiksqcaaaa($icwicymcioeyeyek);
        goto qcmakskemmcgaeyg;
        yeacwagosugscqcg:
        try {
            goto qmwmasuoyuwmcigw;
            wsmkoikacqsiweuw:
            $mksyucucyswaukig = new $egkyssmuqcwaciya();
            goto gaikqsuyumumsesg;
            wyoouquciqoosuim:
            $iggwcmkgmicmouyu = true;
            goto aiociqsiiwguaywy;
            aqcuimcoqmsiygwk:
            ukkmusemcqayowoa:
            goto yqaacqqyisoewkqq;
            eyyamwsogeqwamug:
            wcmksyiisiciasko:
            goto oqccquoqqkkaqksk;
            guackgkaeswkcaoq:
            if ($aokagokqyuysuksm) {
                goto wcmksyiisiciasko;
            }
            goto wyoouquciqoosuim;
            qmwmasuoyuwmcigw:
            $aokagokqyuysuksm = (int) ManipulateArray::get($icwicymcioeyeyek, $ceiwsaacewygcsqg);
            goto guackgkaeswkcaoq;
            gaikqsuyumumsesg:
            euuoiciaiieoqyws:
            goto uwiaeuuiaimugqys;
            gwkumgocycceogce:
            $mksyucucyswaukig = $this->qmqogusoaqeygewm($mksyucucyswaukig);
            goto swkysimqcqkikmgy;
            ayamqyqegiuausko:
            acuyqioeqaoeskya:
            goto aqcuimcoqmsiygwk;
            ckmycmakimaeygcu:
            igkeawygswqouuym:
            goto cecaekugyecciwcg;
            cwyauqoosqaoaoki:
            $mksyucucyswaukig = null;
            goto wiciqigmosmkkmwk;
            gosaiqsaqksagqsg:
            if (!($kuuugksiksqcaaaa && $mksyucucyswaukig instanceof Model)) {
                goto ukkmusemcqayowoa;
            }
            goto wuuucygsmqmsiyoi;
            iougqueaywwucoko:
            $this->iasywwkguyauiywu($mksyucucyswaukig, $icwicymcioeyeyek);
            goto someqooawckycwao;
            aiociqsiiwguaywy:
            $kuuugksiksqcaaaa = $this->gkieuyoqcusoksmg($icwicymcioeyeyek);
            goto isomygcucicwccgy;
            wouekamwmcuguaoa:
            $mksyucucyswaukig = $this->cyyiiykmaeuqqgok($aokagokqyuysuksm);
            goto iougqueaywwucoko;
            wcaeyoeeuiqqgqou:
            $egkyssmuqcwaciya = self::uqggkiomyiceyooa();
            goto wsmkoikacqsiweuw;
            ymwckeawsukyukqs:
            augyqmcwawmsykme:
            goto gosaiqsaqksagqsg;
            isomygcucicwccgy:
            if (!$kuuugksiksqcaaaa) {
                goto euuoiciaiieoqyws;
            }
            goto wcaeyoeeuiqqgqou;
            cecaekugyecciwcg:
            $kigowwqauiumummw = true;
            goto wyoqmwcsuewswiua;
            someqooawckycwao:
            $kuuugksiksqcaaaa = $this->gkieuyoqcusoksmg($icwicymcioeyeyek, $mksyucucyswaukig);
            goto ymwckeawsukyukqs;
            wuuucygsmqmsiyoi:
            $mksyucucyswaukig = $this->ckcicmwwiccamyqk($this, $mksyucucyswaukig, $icwicymcioeyeyek);
            goto gwkumgocycceogce;
            gggkwgcemqeckcse:
            $this->scmmymqkoyckgkam($mksyucucyswaukig);
            goto ayamqyqegiuausko;
            oqccquoqqkkaqksk:
            $iggwcmkgmicmouyu = false;
            goto wouekamwmcuguaoa;
            swkysimqcqkikmgy:
            
            if ($mksyucucyswaukig->save()) {
                goto igkeawygswqouuym;
            }
            goto cwyauqoosqaoaoki;
            uwiaeuuiaimugqys:
            goto augyqmcwawmsykme;
            goto eyyamwsogeqwamug;
            wiciqigmosmkkmwk:
            goto acuyqioeqaoeskya;
            goto ckmycmakimaeygcu;
            wyoqmwcsuewswiua:
            $this->qiwiemuiqiugqqqg($mksyucucyswaukig, $icwicymcioeyeyek);
            goto gggkwgcemqeckcse;
            yqaacqqyisoewkqq:
        } catch (Exception $wgaoewqkwgomoaai) {
            goto wyqmackmyaikcggs;
            ekwmcssqowkcoyci:
            $mksyucucyswaukig = null;
            goto oqkcuegyumswqekg;
            sswmueweogqkqumq:
            if (!$kigowwqauiumummw) {
                goto koueosuswmucsaec;
            }
            goto qscmokiskqyuswqo;
            wcgoiisqmmawuiag:
            koueosuswmucsaec:
            goto ewiwaeckgqaiwgio;
            yckkwcimmakkieos:
            ugoeueisekcsquug:
            goto ekwmcssqowkcoyci;
            gecywkyeskagueqm:
            try {
                
                $mksyucucyswaukig->delete();
            } catch (Exception $wgaoewqkwgomoaai) {
            }
            goto yckkwcimmakkieos;
            oqkcuegyumswqekg:
            $kigowwqauiumummw = false;
            goto wcgoiisqmmawuiag;
            qscmokiskqyuswqo:
            if (!$iggwcmkgmicmouyu) {
                goto ugoeueisekcsquug;
            }
            goto gecywkyeskagueqm;
            wyqmackmyaikcggs:
            $this->kmsyisgakgwscyey($this->kyacickkomkioeyu($wgaoewqkwgomoaai));
            goto sswmueweogqkqumq;
            ewiwaeckgqaiwgio:
        }
        goto aigseumaammwaqck;
        ooceggceowgoacyu:
        $ceiwsaacewygcsqg = $this->kumuygiiqswoyasy();
        goto gwmauwgkiomyggmu;
        qmkmuwomcwygkysi:
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
        goto skysqikkawmaoase;
        sqsksyaqsweqiyci:
        if (!$iwywmkygwewiamwm) {
            goto icyuwesuyoimomqs;
        }
        goto guwyuigmkeeqssgw;
        skkqqcysscikmmik:
        $aokagokqyuysuksm = ManipulateArray::get($mksyucucyswaukig, $this->kumuygiiqswoyasy());
        goto oewsoauskqoqmiqa;
        cmogamaycywckuim:
        icyuwesuyoimomqs:
        goto oiissisqowcgwiyc;
        yuqowmmcwscosmgy:
        aaeuuccoyyuqkouc:
        goto iyekyouiiwcsewgy;
        ksksqwcyqoqgmgke:
        $mksyucucyswaukig = $this->akkkoiiymmamsauc($mksyucucyswaukig);
        goto yqisgseiimwmoeee;
        skysqikkawmaoase:
        if (!is_numeric($mksyucucyswaukig)) {
            goto iaiooeockccgaaiq;
        }
        goto ksksqwcyqoqgmgke;
        iyekyouiiwcsewgy:
        $pkyyagewkiyckmwy = $this->iysseyicgouwysgk($mksyucucyswaukig);
        goto sqsksyaqsweqiyci;
        oewsoauskqoqmiqa:
        $iwywmkygwewiamwm = $this->uesweuocqoywoyms($aokagokqyuysuksm);
        goto sgaoyyoooykieusg;
        sgaoyyoooykieusg:
        switch ($qqomumygoacsmsie) {
            case "\163\150\x6f\167":
                $iwywmkygwewiamwm = $this->uesweuocqoywoyms($aokagokqyuysuksm);
                goto aaeuuccoyyuqkouc;
            case "\145\x64\151\164":
                $iwywmkygwewiamwm = $this->yyykkcyiksewsoqy($aokagokqyuysuksm);
                goto aaeuuccoyyuqkouc;
        }
        goto yywgsissmueymcmg;
        guwyuigmkeeqssgw:
        $pkyyagewkiyckmwy = $this->geyuyukmwaoksywa($iwywmkygwewiamwm, $pkyyagewkiyckmwy);
        goto cmogamaycywckuim;
        yqisgseiimwmoeee:
        iaiooeockccgaaiq:
        goto skkqqcysscikmmik;
        yywgsissmueymcmg:
        skoscsikiaakokqe:
        goto yuqowmmcwscosmgy;
        oiissisqowcgwiyc:
        return $pkyyagewkiyckmwy;
        goto ugqeagqqaucqkcys;
        ugqeagqqaucqkcys:
    }
    
    public function aouwuegyyugiwksc($qgoqiacsiccwoawi, $mksyucucyswaukig, $mugogceoccysackm = true) : ?string
    {
        goto iuageyamssqwqqyw;
        ccikqgeseseueseo:
        sqcoigaqqssykoui:
        goto uwiqeuqyaseimcyk;
        kmasgsycmswqoeii:
        ekoeysiuqeggaqku:
        goto ccikqgeseseueseo;
        siuwcesauyyweaky:
        ywiugkwcqkomgucy:
        goto wucomycmoigosose;
        uwiqeuqyaseimcyk:
        mkmasewiiuocaekm:
        goto aeieoesqsyiqwkkk;
        wucomycmoigosose:
        $pkyyagewkiyckmwy = $meywaqqsugaoeyys->mayuaaqmsqeyayyg($icwicymcioeyeyek);
        goto kmasgsycmswqoeii;
        cwaqmauwsyugsieo:
        $pkyyagewkiyckmwy = '';
        goto uqkmkmmikmaqkgym;
        omuskqikewygsuuu:
        $pkyyagewkiyckmwy = $meywaqqsugaoeyys->iysseyicgouwysgk($icwicymcioeyeyek);
        goto kqumggcumkiygaya;
        yqmygsgkwmkeyqmm:
        if ($mugogceoccysackm) {
            goto ywiugkwcqkomgucy;
        }
        goto omuskqikewygsuuu;
        aeieoesqsyiqwkkk:
        return $pkyyagewkiyckmwy;
        goto syiwwokguucmgsyy;
        uqkmkmmikmaqkgym:
        if (!$aaqqkgyougeiueyq instanceof Foreign) {
            goto mkmasewiiuocaekm;
        }
        goto yckkkceuiuiaucce;
        wkmsuekwweweqoys:
        $icwicymcioeyeyek = $this->iscemaoqqckmkago($qgoqiacsiccwoawi, $mksyucucyswaukig);
        goto cwaqmauwsyugsieo;
        smeocsiuyouseuqo:
        if (!$meywaqqsugaoeyys instanceof Model) {
            goto sqcoigaqqssykoui;
        }
        goto yqmygsgkwmkeyqmm;
        kqumggcumkiygaya:
        goto ekoeysiuqeggaqku;
        goto siuwcesauyyweaky;
        yckkkceuiuiaucce:
        $meywaqqsugaoeyys = $aaqqkgyougeiueyq->uecyuoauykiqqkey()::symcgieuakksimmu();
        goto smeocsiuyouseuqo;
        iuageyamssqwqqyw:
        $aaqqkgyougeiueyq = $this->oyeskqayoscwciem()->uqeoyqiwywwmsiew($qgoqiacsiccwoawi);
        goto wkmsuekwweweqoys;
        syiwwokguucmgsyy:
    }
    
    public function iscemaoqqckmkago($iceamweyeeiwiucs, $mksyucucyswaukig = null, $wkkweuacukumqmya = "\x2a", $uoomaookgsyciacm = [])
    {
        goto cgkaoiyoqwmkaqck;
        gscckcagyggagway:
        return $essikcmqiyqaqoaq;
        goto ysicqksgomomkoek;
        suokacgwamyumagy:
        try {
            goto sqkuwuwiceguscku;
            iioauiogmamumiym:
            suykumskkmicioig:
            goto gmwcqkgsaesmsuea;
            usiqksiiiqgokuaq:
            gmckgcsamacayoiy:
            goto omaswaiucwamaywi;
            yqqwweuisgoskcwa:
            $essikcmqiyqaqoaq = $ayegqaqygsqsmews->get($wkkweuacukumqmya)->sacmkccceuywoqsq();
            goto uaaiuqickwysiqiy;
            ieewmicwgqaigeqi:
            if (!$uoomaookgsyciacm) {
                goto kysaoseimkmckcoc;
            }
            goto ouokmaemueykkiqq;
            ouokmaemueykkiqq:
            $ayegqaqygsqsmews = $this->kqewyqqqiyiouaou($uoomaookgsyciacm, $ayegqaqygsqsmews);
            goto mgiykamgwsemmiio;
            qiekksmyigmwmiws:
            wmiysuwsmawyogmu:
            goto qmqsgkwueccwgsqa;
            uaaiuqickwysiqiy:
            csimcqggmigoacwk:
            goto iioauiogmamumiym;
            wasacacaowicmiyw:
            if (!$meywaqqsugaoeyys instanceof Model) {
                goto mawqcoscmcqkoskk;
            }
            goto oksouuguouqowuyq;
            qsgagomkgqcmscyu:
            uoieeoimcawgsacs:
            goto eaisogogsygugsqi;
            oksouuguouqowuyq:
            return $meywaqqsugaoeyys->akkkoiiymmamsauc(ManipulateArray::get($mksyucucyswaukig, $iceamweyeeiwiucs), $meywaqqsugaoeyys->kumuygiiqswoyasy());
            goto okygssymuimommeg;
            yuciwasueswewmqw:
            if (!($aaqqkgyougeiueyq instanceof Foreign && ($aaqqkgyougeiueyq->wmomygggskkoqess() || $aaqqkgyougeiueyq->eiyqqesoywqkegwu()))) {
                goto wmiysuwsmawyogmu;
            }
            goto qqyegacwyoqqqqwy;
            iwkyewqeogaamiou:
            if (!$ayegqaqygsqsmews) {
                goto csimcqggmigoacwk;
            }
            goto yqqwweuisgoskcwa;
            qqyegacwyoqqqqwy:
            $meywaqqsugaoeyys = $aaqqkgyougeiueyq->uecyuoauykiqqkey()::symcgieuakksimmu();
            goto wasacacaowicmiyw;
            mgiykamgwsemmiio:
            kysaoseimkmckcoc:
            goto iwkyewqeogaamiou;
            iiceuymgyemuaciy:
            goto gmckgcsamacayoiy;
            goto qsgagomkgqcmscyu;
            qmqsgkwueccwgsqa:
            $ayegqaqygsqsmews = $this->mgacegaoeamymmya($iceamweyeeiwiucs, $mksyucucyswaukig);
            goto iiceuymgyemuaciy;
            okygssymuimommeg:
            mawqcoscmcqkoskk:
            goto qiekksmyigmwmiws;
            omaswaiucwamaywi:
            if (!$ayegqaqygsqsmews) {
                goto suykumskkmicioig;
            }
            goto ieewmicwgqaigeqi;
            sqkuwuwiceguscku:
            if ($iceamweyeeiwiucs instanceof Relation) {
                goto uoieeoimcawgsacs;
            }
            goto iscaisuqmaikumko;
            iscaisuqmaikumko:
            $aaqqkgyougeiueyq = $this->oyeskqayoscwciem()->uqeoyqiwywwmsiew($iceamweyeeiwiucs);
            goto yuciwasueswewmqw;
            eaisogogsygugsqi:
            $ayegqaqygsqsmews = $iceamweyeeiwiucs;
            goto usiqksiiiqgokuaq;
            gmwcqkgsaesmsuea:
        } catch (Exception $wgaoewqkwgomoaai) {
        }
        goto gscckcagyggagway;
        cgkaoiyoqwmkaqck:
        $essikcmqiyqaqoaq = [];
        goto suokacgwamyumagy;
        ysicqksgomomkoek:
    }
    
    public function mgacegaoeamymmya($ymaogssqccumcyqa, $mksyucucyswaukig = null) : ?Relation
    {
        goto akkmaiaiamyaikqe;
        cwomucmeuqqucyge:
        if ($aaqqkgyougeiueyq->wmomygggskkoqess()) {
            goto iwycgkausoseqmwu;
        }
        goto eguukwmoyaaieuww;
        auauyoooouqkickk:
        return $ayegqaqygsqsmews;
        goto egcsskmsysqiiikm;
        qgmgmkeiemcqkyim:
        $egkyssmuqcwaciya = $aaqqkgyougeiueyq->uecyuoauykiqqkey();
        goto oqoogougwwcqeimq;
        cecamogauimuwoow:
        goto aeoiiewygoiwuiii;
        goto ygqqeqgiaasoimgs;
        goqkegseiummeiak:
        goto yuqiqaquoygggoqc;
        goto wgeskeagymiuoigi;
        qsecoiqswyiseake:
        ccegsywqocccgegu:
        goto swkukukimeueycaq;
        akkmaiaiamyaikqe:
        $ayegqaqygsqsmews = null;
        goto iiikyaquagwawkce;
        uwmgacqaowuguiow:
        okeecmwsuoikguuo:
        goto cecamogauimuwoow;
        iuoqiecqaoosioey:
        goto iquykqikookaokgq;
        goto woqsaqwocioumoeu;
        sqmgqacueqiiekay:
        ksyukmeagigokcgi:
        goto iuoqiecqaoosioey;
        eguukwmoyaaieuww:
        if (!$aaqqkgyougeiueyq->ygswmewosceowmya()) {
            goto okeecmwsuoikguuo;
        }
        goto kqkeomoaociyuoye;
        ukyoyoqcyywgaywg:
        
        $ayegqaqygsqsmews = $mksyucucyswaukig->hasMany($egkyssmuqcwaciya);
        goto ugowokkqeoeugkqe;
        ckmkeuakisiukage:
        goto ksyukmeagigokcgi;
        goto uaiqqcsoksgukasg;
        iqyqgqwwaaigmuou:
        
        $ayegqaqygsqsmews = $mksyucucyswaukig->belongsTo($egkyssmuqcwaciya);
        goto sqmgqacueqiiekay;
        mcoyaaiggymgcsgq:
        
        $ayegqaqygsqsmews = $mksyucucyswaukig->hasOne($egkyssmuqcwaciya);
        goto wcqyakkqcgmeqaag;
        ywykuacciwwkwmmy:
        goto pmaiksascsegweci;
        goto qgcgucmskokqquwk;
        wcqyakkqcgmeqaag:
        yuqiqaquoygggoqc:
        goto coygueuwyguuciww;
        woqsaqwocioumoeu:
        eicuywagooikuusg:
        goto ukyoyoqcyywgaywg;
        oskwwcgyuwkiuacu:
        ocgsiomyyckcausy:
        goto qsecoiqswyiseake;
        iiikyaquagwawkce:
        if ($mksyucucyswaukig instanceof Model) {
            goto ccegsywqocccgegu;
        }
        goto iysiwmeymsoucaka;
        ismoiisskiwmmmiu:
        
        $ayegqaqygsqsmews = $mksyucucyswaukig->morphToMany($egkyssmuqcwaciya, $mgugyyocqwmeeuai);
        goto oikomikqcwikimkw;
        oqoogougwwcqeimq:
        if ($aaqqkgyougeiueyq->gumeeckcowwoyoci()) {
            goto eicuywagooikuusg;
        }
        goto eqiiqamuyewoowwy;
        iysiwmeymsoucaka:
        $aokagokqyuysuksm = ManipulateArray::get($mksyucucyswaukig, $this->kumuygiiqswoyasy());
        goto cuyaakuucgwmcuqq;
        kqkeomoaociyuoye:
        $mgugyyocqwmeeuai = $aaqqkgyougeiueyq->mwikyscisascoeea();
        goto kswkouussqmqsssy;
        kswkouussqmqsssy:
        if ($aaqqkgyougeiueyq->iueigwuckeaswyuu()) {
            goto uwswkegomekswkus;
        }
        goto emomkqccysciiqya;
        emomkqccysciiqya:
        
        $ayegqaqygsqsmews = $mksyucucyswaukig->morphedByMany($egkyssmuqcwaciya, $mgugyyocqwmeeuai);
        goto ywykuacciwwkwmmy;
        swkukukimeueycaq:
        if (!$mksyucucyswaukig instanceof Model) {
            goto qiyiyuwmuoamwccs;
        }
        goto ccqkugckigeckeqa;
        coygueuwyguuciww:
        aeoiiewygoiwuiii:
        goto ckmkeuakisiukage;
        uaiqqcsoksgukasg:
        cwoaockwkoukuwae:
        goto iqyqgqwwaaigmuou;
        oikomikqcwikimkw:
        pmaiksascsegweci:
        goto uwmgacqaowuguiow;
        yuccckoykmccwyce:
        
        $ayegqaqygsqsmews = $mksyucucyswaukig->belongsTo($egkyssmuqcwaciya);
        goto goqkegseiummeiak;
        ugowokkqeoeugkqe:
        iquykqikookaokgq:
        goto qmqumgawyyqqamoa;
        qmqumgawyyqqamoa:
        ceesgeawumeqkcic:
        goto ewcyigsymwuuogci;
        qgcgucmskokqquwk:
        uwswkegomekswkus:
        goto ismoiisskiwmmmiu;
        eqiiqamuyewoowwy:
        if ($aaqqkgyougeiueyq->eiyqqesoywqkegwu()) {
            goto cwoaockwkoukuwae;
        }
        goto cwomucmeuqqucyge;
        wgeskeagymiuoigi:
        swqkyoemiswegyci:
        goto mcoyaaiggymgcsgq;
        gsgocqicesmaecse:
        $mksyucucyswaukig = $this->cyyiiykmaeuqqgok($aokagokqyuysuksm);
        goto oskwwcgyuwkiuacu;
        gsiagogeoqwqekei:
        if ($aaqqkgyougeiueyq->iueigwuckeaswyuu()) {
            goto swqkyoemiswegyci;
        }
        goto yuccckoykmccwyce;
        ygqqeqgiaasoimgs:
        iwycgkausoseqmwu:
        goto gsiagogeoqwqekei;
        ccqkugckigeckeqa:
        $aaqqkgyougeiueyq = $this->oyeskqayoscwciem()->uqeoyqiwywwmsiew($ymaogssqccumcyqa);
        goto waaammoiumecaiys;
        ewcyigsymwuuogci:
        qiyiyuwmuoamwccs:
        goto auauyoooouqkickk;
        waaammoiumecaiys:
        if (!$aaqqkgyougeiueyq instanceof Foreign) {
            goto ceesgeawumeqkcic;
        }
        goto qgmgmkeiemcqkyim;
        cuyaakuucgwmcuqq:
        if (!$mksyucucyswaukig) {
            goto ocgsiomyyckcausy;
        }
        goto gsgocqicesmaecse;
        egcsskmsysqiiikm:
    }
    
    public function qiwiemuiqiugqqqg(Model $mksyucucyswaukig, $icwicymcioeyeyek)
    {
        foreach ($icwicymcioeyeyek as $uusmaiomayssaecw => $qqswgiawgeaeoecu) {
            goto essokuoguqegyeua;
            aesgakksmyecsusi:
            cyikoqssoemgwyyk:
            goto igewmkyikyaiamsq;
            awmyoukmqymausgu:
            $myqeggyewswyoowe = [];
            goto eicuoesagiuykmos;
            mkauomqacwwmyigy:
            cwkouaeieiyiykim:
            goto cmsgssaekakgcqmg;
            usiiuuommggemcke:
            if (!$myqeggyewswyoowe) {
                goto cwkouaeieiyiykim;
            }
            goto aagewueuesckuqke;
            aqoyesawuayoeuag:
            if (!$aaqqkgyougeiueyq instanceof Foreign) {
                goto cuamsmyiamaicwou;
            }
            goto agoikageaeouqaqi;
            makqqsaegsesgquq:
            if (!$aaqqkgyougeiueyq->eiyqqesoywqkegwu()) {
                goto kmwwamokwgagomye;
            }
            goto symwoekuwqcmowwo;
            essokuoguqegyeua:
            $aaqqkgyougeiueyq = $this->oyeskqayoscwciem()->uqeoyqiwywwmsiew($uusmaiomayssaecw);
            goto aqoyesawuayoeuag;
            emsuycioaeoeeeqo:
            $csamwuowsigosqys = $kooyscwkscsogysg->cyyiiykmaeuqqgok($qqswgiawgeaeoecu);
            goto koaeayomowaiywam;
            igewmkyikyaiamsq:
            iqicwseckoykqowm:
            goto guosgucaaeueacgu;
            ckagywkumgkaswyy:
            $miowmmgaiagcuyoo = $kooyscwkscsogysg->cyyiiykmaeuqqgok($qqswgiawgeaeoecu);
            goto oswgoyqaacoyqegu;
            koaeayomowaiywam:
            if (!$csamwuowsigosqys instanceof Model) {
                goto qmmieiquoegeaqok;
            }
            goto ikwamukqumiokwkk;
            uyisqeuweamsqwgg:
            $kooyscwkscsogysg = $egkyssmuqcwaciya::symcgieuakksimmu();
            goto icasgckmuawkaksg;
            aimaqcomigwccomu:
            goto iqicwseckoykqowm;
            goto osawsyawkikquqya;
            csueasskicaaoaii:
            smmgkqeacswimyas:
            goto yyousguikogqkecs;
            aagewueuesckuqke:
            
            $mksyucucyswaukig->hasMany($egkyssmuqcwaciya)->saveMany($myqeggyewswyoowe);
            goto mkauomqacwwmyigy;
            mawsaauyquacosus:
            if ($aaqqkgyougeiueyq->wmomygggskkoqess()) {
                goto wwigiswokyqkamsu;
            }
            goto cwkwkgkqasguwscg;
            owwwikwqsyakweeq:
            qquugwwesqswouyc:
            goto awmyoukmqymausgu;
            icasgckmuawkaksg:
            if (!$kooyscwkscsogysg instanceof Model) {
                goto yisooseceggsgyqw;
            }
            goto aeywmsqkisycgqce;
            rwaeioueucocosgu:
            akiuyguwqaukuugs:
            goto cuqusekekewuseio;
            wowakayqsywcaogm:
            awwwoikmmaisyisy:
            goto ogwosuisocqykoma;
            syggoyqwycmmcuck:
            goto ewugkyumwuomukie;
            goto owwwikwqsyakweeq;
            ssoooeigmwugyycm:
            if (!$egkyssmuqcwaciya) {
                goto awwwoikmmaisyisy;
            }
            goto uyisqeuweamsqwgg;
            uueyawewomkuiiwc:
            
            $csamwuowsigosqys->hasMany($swmgqkqyqcgemack)->save($mksyucucyswaukig);
            goto wqcquwuiqkqaoamo;
            eicuoesagiuykmos:
            if (!is_array($qqswgiawgeaeoecu)) {
                goto uawcmuiummigeqea;
            }
            goto eqkaikmaegscweqq;
            guosgucaaeueacgu:
            yisooseceggsgyqw:
            goto wowakayqsywcaogm;
            ckscysysmayieagk:
            ewugkyumwuomukie:
            goto aimaqcomigwccomu;
            cgoqqicyaiwasqme:
            if ($aaqqkgyougeiueyq->iueigwuckeaswyuu()) {
                goto cyikoqssoemgwyyk;
            }
            goto ckagywkumgkaswyy;
            ogwosuisocqykoma:
            cuamsmyiamaicwou:
            goto rwaeioueucocosgu;
            yoeaiskyyqgqiwga:
            $accumooemgmowewu = $mksyucucyswaukig::uqggkiomyiceyooa();
            goto ioaeiakqkiuqymoq;
            eqkaikmaegscweqq:
            foreach ($qqswgiawgeaeoecu as $eqgoocgaqwqcimie) {
                goto eemgoyuiauwuomcw;
                auqmeqswuuioemge:
                $myqeggyewswyoowe[] = $msqyiyqkassmkgce;
                goto iiwcuqeosmwgogus;
                eemgoyuiauwuomcw:
                if ($aokagokqyuysuksm = ManipulateArray::get($eqgoocgaqwqcimie, $gqkcqoaumsuwkqom, $qqswgiawgeaeoecu)) {
                    goto aegiwggkecgaiocs;
                }
                goto ikgwcgcgcaaaskig;
                imsougccawciqsuw:
                $msqyiyqkassmkgce = $kooyscwkscsogysg->cyyiiykmaeuqqgok($aokagokqyuysuksm);
                goto syaegaiuaioeaocq;
                syaegaiuaioeaocq:
                $msqyiyqkassmkgce = $this->ckcicmwwiccamyqk($kooyscwkscsogysg, $msqyiyqkassmkgce, $eqgoocgaqwqcimie);
                goto ckkecwwioeywccwa;
                uqsoseuiwgukywas:
                ummsowuaoeyusgoq:
                goto wgaggmmmgeumiouk;
                koceayskwssiisyi:
                if (!$msqyiyqkassmkgce) {
                    goto smeeigiqmommceye;
                }
                goto auqmeqswuuioemge;
                ckkecwwioeywccwa:
                gamuuauwykwgaegc:
                goto koceayskwssiisyi;
                amcqceoiqgmwisce:
                goto gamuuauwykwgaegc;
                goto csmmiwegweusuimi;
                ikgwcgcgcaaaskig:
                $msqyiyqkassmkgce = $kooyscwkscsogysg->ciqgsyoasskoiukm($eqgoocgaqwqcimie);
                goto amcqceoiqgmwisce;
                csmmiwegweusuimi:
                aegiwggkecgaiocs:
                goto imsougccawciqsuw;
                iiwcuqeosmwgogus:
                smeeigiqmommceye:
                goto uqsoseuiwgukywas;
                wgaggmmmgeumiouk:
            }
            goto oukacgcyoiggqosq;
            oswgoyqaacoyqegu:
            if (!$miowmmgaiagcuyoo instanceof Model) {
                goto emiyocoiuwcucuwu;
            }
            goto yoeaiskyyqgqiwga;
            wqcquwuiqkqaoamo:
            qmmieiquoegeaqok:
            goto csueasskicaaoaii;
            osawsyawkikquqya:
            wwigiswokyqkamsu:
            goto cgoqqicyaiwasqme;
            ikwamukqumiokwkk:
            $swmgqkqyqcgemack = self::uqggkiomyiceyooa();
            goto uueyawewomkuiiwc;
            agoikageaeouqaqi:
            $egkyssmuqcwaciya = $aaqqkgyougeiueyq->uecyuoauykiqqkey();
            goto ssoooeigmwugyycm;
            oukacgcyoiggqosq:
            uceksuykgsckwwsu:
            goto usiiuuommggemcke;
            cmsgssaekakgcqmg:
            uawcmuiummigeqea:
            goto ckscysysmayieagk;
            cwkwkgkqasguwscg:
            if ($aaqqkgyougeiueyq->gumeeckcowwoyoci()) {
                goto qquugwwesqswouyc;
            }
            goto makqqsaegsesgquq;
            ioaeiakqkiuqymoq:
            
            $miowmmgaiagcuyoo->hasOne($accumooemgmowewu)->save($mksyucucyswaukig);
            goto cssysqmcgcuwyyuu;
            aeywmsqkisycgqce:
            $gqkcqoaumsuwkqom = $kooyscwkscsogysg->primaryKey;
            goto mawsaauyquacosus;
            yyousguikogqkecs:
            kmwwamokwgagomye:
            goto syggoyqwycmmcuck;
            cssysqmcgcuwyyuu:
            emiyocoiuwcucuwu:
            goto aesgakksmyecsusi;
            symwoekuwqcmowwo:
            if (!is_numeric($qqswgiawgeaeoecu)) {
                goto smmgkqeacswimyas;
            }
            goto emsuycioaeoeeeqo;
            cuqusekekewuseio:
        }
        mogomwoquuesmcec:
    }
    
    public function gkieuyoqcusoksmg($icwicymcioeyeyek, $mksyucucyswaukig = null) : bool
    {
        goto eokgqgsswamgswqu;
        uyouoeaoqcieeayg:
        qqowguycmsmuauyu:
        goto sumsswekusmugwcc;
        gcumogmsuuyuwsie:
        foreach ($icwicymcioeyeyek as $oaukocmsckciqaok => $eqgoocgaqwqcimie) {
            goto siwekyoigwegiosa;
            kuyeoaemuwcqkoae:
            if (!($myagqecycsaiyqsk && ManipulateArray::get($mksyucucyswaukig, $ceiwsaacewygcsqg) != ManipulateArray::get($myagqecycsaiyqsk, $ceiwsaacewygcsqg))) {
                goto xkgykmoskoqykakc;
            }
            goto cuwasskqkoysieey;
            myegqayeyqaigmqi:
            ksmmosiwmsousgkg:
            goto qqocmsauqkwoscqy;
            wiaugmimkuikykys:
            ckyeeqwsugcoksek:
            goto uisaoikyqyseiyas;
            igeiewqcwieuawms:
            xkgykmoskoqykakc:
            goto wuqysikmouuiawwi;
            uisaoikyqyseiyas:
            msegcuqmgweissmw:
            goto gqaiqcgwsmyugimu;
            qyeewwmuogssaegc:
            goto qqowguycmsmuauyu;
            goto wiaugmimkuikykys;
            cuwasskqkoysieey:
            $this->kmsyisgakgwscyey(sprintf(__("\45\163\x20\x69\163\40\x75\156\x69\x71\165\145\x20\x61\x6e\x64\x20\145\x6e\x74\145\x72\145\144\x20\x76\141\154\165\145\x20\141\x6c\162\x65\141\144\171\x20\145\170\151\163\x74\56", PR__CMN__FOUNDATION), ManipulateHTML::ciuuiyckmsygceis($aaqqkgyougeiueyq->qcgakseyaikigqco())), $oaukocmsckciqaok);
            goto mqigiiusqaieqeaa;
            ycoomucecckyease:
            goto komaoacquqwgysgc;
            goto myegqayeyqaigmqi;
            mqigiiusqaieqeaa:
            $sogksuscggsicmac = false;
            goto igeiewqcwieuawms;
            siwekyoigwegiosa:
            $aaqqkgyougeiueyq = $this->oyeskqayoscwciem()->uqeoyqiwywwmsiew($oaukocmsckciqaok);
            goto ucuyaouwikuyyemm;
            ucuyaouwikuyyemm:
            if (!($aaqqkgyougeiueyq instanceof Field && !$aaqqkgyougeiueyq instanceof Foreign)) {
                goto msegcuqmgweissmw;
            }
            goto uwsgccckqqookusc;
            asoweekcciigkweo:
            $ceiwsaacewygcsqg = $this->kumuygiiqswoyasy();
            goto kuyeoaemuwcqkoae;
            swmmiykiawycgoes:
            $this->kmsyisgakgwscyey(sprintf(__("\45\163\40\x63\141\x6e\x6e\47\164\40\142\145\40\x65\155\160\x74\171\54\40\160\154\145\x61\163\145\40\x66\x69\x6c\154\x20\151\x74\x2e", PR__CMN__FOUNDATION), ManipulateHTML::ciuuiyckmsygceis($aaqqkgyougeiueyq->qcgakseyaikigqco())), $oaukocmsckciqaok);
            goto zsweawcwmisoogao;
            uwsgccckqqookusc:
            if ($aaqqkgyougeiueyq->kweqqkiwiugikyam()) {
                goto ksmmosiwmsousgkg;
            }
            goto iwccwiiumyyccquy;
            gqaiqcgwsmyugimu:
            yseacqgykcseamce:
            goto akuiskwoukoesuou;
            caiiwysgssyqoouc:
            aoiaykkukcyyoaio:
            goto ycoomucecckyease;
            iwccwiiumyyccquy:
            if (!(!$aaqqkgyougeiueyq->yseywyqacmugimme() && !$eqgoocgaqwqcimie)) {
                goto aoiaykkukcyyoaio;
            }
            goto swmmiykiawycgoes;
            zsweawcwmisoogao:
            $sogksuscggsicmac = false;
            goto caiiwysgssyqoouc;
            wuqysikmouuiawwi:
            komaoacquqwgysgc:
            goto egumckcoaaowkgoy;
            qqocmsauqkwoscqy:
            $myagqecycsaiyqsk = $this->akkkoiiymmamsauc($eqgoocgaqwqcimie, $oaukocmsckciqaok);
            goto asoweekcciigkweo;
            egumckcoaaowkgoy:
            if ($sogksuscggsicmac) {
                goto ckyeeqwsugcoksek;
            }
            goto qyeewwmuogssaegc;
            akuiskwoukoesuou:
        }
        goto uyouoeaoqcieeayg;
        sumsswekusmugwcc:
        return $sogksuscggsicmac;
        goto quoamckmecwqkkus;
        eokgqgsswamgswqu:
        $sogksuscggsicmac = true;
        goto gcumogmsuuyuwsie;
        quoamckmecwqkkus:
    }
    
    public function ckcicmwwiccamyqk(Model $owgumcsyqsamiemg, Model $mksyucucyswaukig, $icwicymcioeyeyek) : Model
    {
        goto gkekqmkyumkmywky;
        ywgqeosekkwswyac:
        return $mksyucucyswaukig;
        goto qqcusuaqmyukwyqk;
        muoougyakwgcicuo:
        suaouieqqoauuwme:
        goto ywgqeosekkwswyac;
        gkekqmkyumkmywky:
        foreach ($icwicymcioeyeyek as $oaukocmsckciqaok => $eqgoocgaqwqcimie) {
            goto ukuuumkkameeuesk;
            osgmksikyyqqcaag:
            if ($aaqqkgyougeiueyq instanceof Json && $eqgoocgaqwqcimie) {
                goto qcsceusmgwewumuy;
            }
            goto gsewiomcwceysquc;
            ouyqaaywykeqimmi:
            $eqgoocgaqwqcimie = $eqgoocgaqwqcimie === "\x6f\x6e";
            goto egicsmysugywycqq;
            muygyqckegkuiwyi:
            if (!($aaqqkgyougeiueyq instanceof Field && !$aaqqkgyougeiueyq instanceof Foreign)) {
                goto kwwoucisuqcmqmqu;
            }
            goto osgmksikyyqqcaag;
            ieyimqciuswcokke:
            kwwoucisuqcmqmqu:
            goto csismgmuaiogeucq;
            ooiaoiygiiamsmum:
            qcsceusmgwewumuy:
            goto qkmmgqgcegcuawuu;
            qkmmgqgcegcuawuu:
            $eqgoocgaqwqcimie = wp_json_encode($eqgoocgaqwqcimie);
            goto auouiegmaiasywkw;
            gsewiomcwceysquc:
            if (!$aaqqkgyougeiueyq instanceof Boolean) {
                goto uwwooikcoamioeaq;
            }
            goto ouyqaaywykeqimmi;
            csismgmuaiogeucq:
            kewooggoaouemcaq:
            goto aqaseyqwkgoyaiyg;
            egicsmysugywycqq:
            uwwooikcoamioeaq:
            goto migwkuscokgmogea;
            ggqmaecmwgeqkuge:
            $mksyucucyswaukig->cmgoqeksagmigwmg($oaukocmsckciqaok, $eqgoocgaqwqcimie);
            goto ieyimqciuswcokke;
            migwkuscokgmogea:
            goto yqysciwesgsiuayi;
            goto ooiaoiygiiamsmum;
            auouiegmaiasywkw:
            yqysciwesgsiuayi:
            goto ggqmaecmwgeqkuge;
            ukuuumkkameeuesk:
            $aaqqkgyougeiueyq = $owgumcsyqsamiemg->oyeskqayoscwciem()->uqeoyqiwywwmsiew($oaukocmsckciqaok);
            goto muygyqckegkuiwyi;
            aqaseyqwkgoyaiyg:
        }
        goto muoougyakwgcicuo;
        qqcusuaqmyukwyqk:
    }
    
    public function osymioeiweugcoms($aokagokqyuysuksm, $ymaogssqccumcyqa, $ggauoeuaesiymgee = null)
    {
        return ManipulateArray::get($this->akkkoiiymmamsauc($aokagokqyuysuksm), $ymaogssqccumcyqa, $ggauoeuaesiymgee);
    }
    
    public function kmsyisgakgwscyey($iswcokucwmiosiaq, $uusmaiomayssaecw = null) : self
    {
        goto egawiicamoykemqq;
        akkwoqycamwckeui:
        souucimemowwaseo:
        goto goimqkkiyegggysa;
        wmgyemaskuuowuum:
        return $this;
        goto ssqemoqcimayewqm;
        ksoygkwycsqicooa:
        goto oqyeyuocsyoeogim;
        goto akkwoqycamwckeui;
        egawiicamoykemqq:
        if ($uusmaiomayssaecw) {
            goto souucimemowwaseo;
        }
        goto qqwukskiymcymgqc;
        mkayykckiywayuko:
        oqyeyuocsyoeogim:
        goto wmgyemaskuuowuum;
        qqwukskiymcymgqc:
        $this->validationErrors[] = $iswcokucwmiosiaq;
        goto ksoygkwycsqicooa;
        goimqkkiyegggysa:
        $this->validationErrors[$uusmaiomayssaecw] = $iswcokucwmiosiaq;
        goto mkayykckiywayuko;
        ssqemoqcimayewqm:
    }
    
    public function dgugskkmsgccgiii($ueeagokqmgisgauy) : self
    {
        goto gcmmgmowsmgwkoye;
        ugcaeymeciausmao:
        kquwekemiawwmuqs:
        goto sygekyuywqgiawas;
        sygekyuywqgiawas:
        return $this;
        goto aqkoqskkimiuyqug;
        gcmmgmowsmgwkoye:
        foreach ($ueeagokqmgisgauy as $uusmaiomayssaecw => $iswcokucwmiosiaq) {
            $this->kmsyisgakgwscyey($iswcokucwmiosiaq, $uusmaiomayssaecw);
            cgykkwqwamaougme:
        }
        goto ugcaeymeciausmao;
        aqkoqskkimiuyqug:
    }
    
    public function akkkoiiymmamsauc(?string $eqgoocgaqwqcimie = null, ?string $aiowsaccomcoikus = null, $wkkweuacukumqmya = "\52")
    {
        goto oseqayimqaycaycw;
        gakmkuaayakeymaa:
        return $wkawwaegamqisugs;
        goto sucquwgiacwooomw;
        wwuiwkkgqescsyyw:
        if (!$siykeiywomwwuoiw) {
            goto yceksmgauwmiwmsw;
        }
        goto wqameeueegakoqya;
        omqkeukuycyymmke:
        kouecqmcueugwcqw:
        goto oiemkksaoaiyckgi;
        oiemkksaoaiyckgi:
        $siykeiywomwwuoiw = $this->gqaysymikgeawkqa();
        goto wicqcmuwosqwyggg;
        wicqcmuwosqwyggg:
        $wkawwaegamqisugs = null;
        goto wwuiwkkgqescsyyw;
        wqameeueegakoqya:
        
        $siykeiywomwwuoiw = $siykeiywomwwuoiw->where($aiowsaccomcoikus, self::EQUAL_SYMBOL, $eqgoocgaqwqcimie);
        goto eeyksuucagkaqmsi;
        imsmosgqcqgeksws:
        $aiowsaccomcoikus = $this->kumuygiiqswoyasy();
        goto omqkeukuycyymmke;
        ciuwaqyasauagkeu:
        yceksmgauwmiwmsw:
        goto gakmkuaayakeymaa;
        eeyksuucagkaqmsi:
        $wkawwaegamqisugs = $this->geeumyocaqwwquwk($siykeiywomwwuoiw, $wkkweuacukumqmya);
        goto ciuwaqyasauagkeu;
        oseqayimqaycaycw:
        if ($aiowsaccomcoikus) {
            goto kouecqmcueugwcqw;
        }
        goto imsmosgqcqgeksws;
        sucquwgiacwooomw:
    }
    
    public function oqomcmyuuakigusk($ikgwqyuyckaewsow = [], $wkkweuacukumqmya = ["\52"])
    {
        return $this->geeumyocaqwwquwk($this->kqewyqqqiyiouaou($ikgwqyuyckaewsow), $wkkweuacukumqmya);
    }
    
    private function geeumyocaqwwquwk($siykeiywomwwuoiw, $wkkweuacukumqmya = ["\52"])
    {
        goto susauskwueokgaku;
        usaykyskgyqwquca:
        if (!$siykeiywomwwuoiw) {
            goto sgoioieqoekqywik;
        }
        goto qiamskskowaugckg;
        qiamskskowaugckg:
        $wkawwaegamqisugs = $this->awkaaqmauiuwwsca($siykeiywomwwuoiw, $wkkweuacukumqmya);
        goto mewuwwsmewiimgsi;
        susauskwueokgaku:
        $wkawwaegamqisugs = null;
        goto usaykyskgyqwquca;
        mewuwwsmewiimgsi:
        sgoioieqoekqywik:
        goto iaewsguseweeqcqe;
        iaewsguseweeqcqe:
        return $wkawwaegamqisugs;
        goto msmcmycooiwwqiik;
        msmcmycooiwwqiik:
    }
    
    public function qumqowkwyaceeqwu($ikgwqyuyckaewsow = []) : bool
    {
        goto gaqcesscgywweieq;
        qaswkqkwqgqqcyws:
        
        $cmaccwokqweqweqi = $siykeiywomwwuoiw->exists();
        goto ekimmsiekwwoawym;
        gsimucysiuikweme:
        return $cmaccwokqweqweqi;
        goto ukicwqcoggwiskgo;
        swqwssmgwikmieoa:
        $siykeiywomwwuoiw = $this->kqewyqqqiyiouaou($ikgwqyuyckaewsow);
        goto meuaykaqyqkseycs;
        gaqcesscgywweieq:
        $cmaccwokqweqweqi = false;
        goto swqwssmgwikmieoa;
        ekimmsiekwwoawym:
        imagiycyokkwucge:
        goto gsimucysiuikweme;
        meuaykaqyqkseycs:
        if (!$siykeiywomwwuoiw) {
            goto imagiycyokkwucge;
        }
        goto qaswkqkwqgqqcyws;
        ukicwqcoggwiskgo:
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
        $meqocwsecsywiiqs = __("\104\145\x6c\x65\164\145", PR__CMN__FOUNDATION);
        return ManipulateHTML::uskieqmcqyecigmy(["\x74\171\x70\x65" => "\145\162\x72\157\x72", "\164\x69\164\154\x65" => $meqocwsecsywiiqs, "\x63\157\x6e\x74\145\156\164" => __("\x41\162\145\40\171\x6f\x75\40\163\x75\x72\145\40\171\x6f\x75\x20\167\x61\156\x74\x20\164\157\x20\144\x65\x6c\x65\164\145\x20\164\x68\x69\x73\x20\151\164\145\x6d\x3f", PR__CMN__FOUNDATION), "\x62\165\164\164\x6f\156\163" => ["\143\x61\x6e\143\x65\154", ["\150\x72\145\146" => $iwywmkygwewiamwm, "\x63\x6c\141\x73\163" => "\160\162\x2d\x6f\162\x6d\55\x61\x63\164\x69\x6f\x6e\40\x62\164\156\40\x62\164\156\55\160\162\151\x6d\x61\x72\171", "\164\151\164\154\x65" => $meqocwsecsywiiqs, "\x64\x69\x73\155\151\x73\x73" => true]]]);
    }
    
    public function rkmkouiquumiecqy($iwywmkygwewiamwm) : string
    {
        $meqocwsecsywiiqs = __("\104\x65\154\145\164\x65", PR__CMN__FOUNDATION);
        return ManipulateHTML::uuccukgasskgimsq("\x61", ["\x68\162\x65\146" => "\x23", "\x63\x6c\141\163\163" => "\x73\x75\142\155\x69\164\x64\145\154\x65\164\x65\40\x70\x72\55\143\x6f\x6e\146\151\162\x6d\141\x62\x6c\x65\55\x61\143\164\151\x6f\x6e", "\x64\x61\164\x61\x2d\143\x6f\x6e\x66\151\147" => $this->ymaommgoigkakyes($iwywmkygwewiamwm)], $meqocwsecsywiiqs);
    }
    
    public function aaeswuecycyquqwk($siykeiywomwwuoiw, $qsyooiqcmkcieyuk)
    {
        return $siykeiywomwwuoiw;
    }
    
    public function eukyqwmmeyakcyoo($mksyucucyswaukig, $yygmoeguaqyumuui = []) : array
    {
        goto keygauyiuaycggcw;
        memcsokyqmowucuo:
        if (!($mksyucucyswaukig && $yygmoeguaqyumuui)) {
            goto wwugkwcimumgukko;
        }
        goto gyaoqaggggoiaoqs;
        wameiecycmkcuimk:
        return ManipulateArray::yaeiiwwyckwugsem($oammesyieqmwuwyi);
        goto ecyauwageoukkaaq;
        ciwcwcqkgkmoguok:
        foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw => $pkyyagewkiyckmwy) {
            goto gcgckeksyymcgays;
            ogmueiimgsogucqa:
            $pkyyagewkiyckmwy = ManipulateArray::get([self::CREATED_AT => __("\103\162\x65\141\164\145\x64\x20\x41\164", PR__CMN__FOUNDATION), self::UPDATED_AT => __("\x55\160\144\x61\x74\145\144\x20\101\x74", PR__CMN__FOUNDATION)], $uusmaiomayssaecw, '');
            goto kyoogyegwukaqoce;
            wkgmgumyswiayyae:
            imygueoqiqikwcws:
            goto aiaayumowqswqqqk;
            sgamuuiycksmssoi:
            kmgoiquwmsayywsc:
            goto ymsscygscwwicumm;
            ccgmicuyeoggoecu:
            $eqgoocgaqwqcimie = $this->kamyqikiiuwqiiuw($uusmaiomayssaecw, $eqgoocgaqwqcimie, $mksyucucyswaukig);
            goto ewosekcicaqucsua;
            iwcsismeakueeiya:
            $eqgoocgaqwqcimie = ManipulateArray::get($mksyucucyswaukig, $uusmaiomayssaecw);
            goto gkmgqmcgouseqwyg;
            maougsuwuoiecwgy:
            iqiuaammwkeiamuo:
            goto pseqauyuqgmccuwe;
            emsqksecccqeueoa:
            if ($aaqqkgyougeiueyq instanceof Field) {
                goto iqiuaammwkeiamuo;
            }
            goto ogmueiimgsogucqa;
            pseqauyuqgmccuwe:
            $pkyyagewkiyckmwy = $aaqqkgyougeiueyq->qcgakseyaikigqco();
            goto smqeaeiimomewqsw;
            gcgckeksyymcgays:
            if (!is_numeric($uusmaiomayssaecw)) {
                goto zawceoyikyuwoucg;
            }
            goto eqmcakqmqkqkweww;
            aiaayumowqswqqqk:
            goto aqwcyyigiukqikui;
            goto swmeecwwakawqqcw;
            qogogggqiuuewakw:
            $eqgoocgaqwqcimie = '';
            goto tokguaiieequuwwa;
            ewosekcicaqucsua:
            if (!($pkyyagewkiyckmwy && $eqgoocgaqwqcimie)) {
                goto kmgoiquwmsayywsc;
            }
            goto mugaisykgmqcaggg;
            kyoogyegwukaqoce:
            $sqqewmoeaekuyyas = 1000;
            goto eocaacmwsqqqauuc;
            mugaisykgmqcaggg:
            $oammesyieqmwuwyi[$uusmaiomayssaecw] = [self::LABEL => $pkyyagewkiyckmwy, self::VALUE => $eqgoocgaqwqcimie, self::PRIORITY => $sqqewmoeaekuyyas];
            goto sgamuuiycksmssoi;
            eqmcakqmqkqkweww:
            $uusmaiomayssaecw = ManipulateString::ogimogiceeekegoi($pkyyagewkiyckmwy);
            goto iwcsismeakueeiya;
            gkmgqmcgouseqwyg:
            $aaqqkgyougeiueyq = ManipulateArray::get($qssskwiqeumgkago, $uusmaiomayssaecw);
            goto emsqksecccqeueoa;
            swmeecwwakawqqcw:
            zawceoyikyuwoucg:
            goto awkmmuyuakwiaqae;
            tokguaiieequuwwa:
            aqwcyyigiukqikui:
            goto ccgmicuyeoggoecu;
            awkmmuyuakwiaqae:
            $sqqewmoeaekuyyas = 0;
            goto qogogggqiuuewakw;
            ymsscygscwwicumm:
            eigowcoqoqkwuoiq:
            goto oouisuwokmqgwiau;
            smqeaeiimomewqsw:
            $sqqewmoeaekuyyas = $aaqqkgyougeiueyq->yywskysiycwkwsgw();
            goto wkgmgumyswiayyae;
            eocaacmwsqqqauuc:
            goto imygueoqiqikwcws;
            goto maougsuwuoiecwgy;
            oouisuwokmqgwiau:
        }
        goto ksseoiqcgiqsamwy;
        gyaoqaggggoiaoqs:
        $qssskwiqeumgkago = $this->oyeskqayoscwciem()->aeosueemgsygqese();
        goto ciwcwcqkgkmoguok;
        qgeiemoywoccmwgw:
        wwugkwcimumgukko:
        goto wameiecycmkcuimk;
        ksseoiqcgiqsamwy:
        maqmyigowgsmqaco:
        goto qgeiemoywoccmwgw;
        keygauyiuaycggcw:
        $oammesyieqmwuwyi = [];
        goto memcsokyqmowucuo;
        ecyauwageoukkaaq:
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
        goto csqwmisikmgeaaky;
        icausgkyooymuwqq:
        if ($aiooqyausygaasqm = ManipulateAttachment::ecqkouyiioksggkw($eqgoocgaqwqcimie)) {
            goto uqqawaaiywcggesu;
        }
        goto gwyguuaqscsukaqg;
        ikgusckaomuoiggs:
        if (!($this->wkcuasmkgoscaiay() || $this->wmwguecgowcscues())) {
            goto aoyqwwsacwqumucg;
        }
        goto oykuimwkwcmuekci;
        myasecwmmmiemgik:
        $eqgoocgaqwqcimie = ManipulateAttachment::qaeeusqkgwagwaqc($eqgoocgaqwqcimie);
        goto kwmkusgsuoqoyses;
        ieumcesgiqicqima:
        comiusqosmykagiq:
        goto ysswaukcymggikui;
        skokkuuieagmuwgm:
        return $eqgoocgaqwqcimie;
        goto ayekogimgycgmgau;
        ysswaukcymggikui:
        $eqgoocgaqwqcimie = ManipulateArray::get($aaqqkgyougeiueyq->gkwkqmwweiawigae(), $eqgoocgaqwqcimie, $eqgoocgaqwqcimie);
        goto uksgyweoymomgqos;
        imyoiukqcmewqkkw:
        $eqgoocgaqwqcimie = $this->aouwuegyyugiwksc($qgoqiacsiccwoawi, $mksyucucyswaukig, !$this->wmwguecgowcscues());
        goto ugoqkakikayagkmm;
        wwyukkoeeeiiuewk:
        uqqawaaiywcggesu:
        goto qmeskaiqawomuqmk;
        kwagmsukmimymmmg:
        goto vwyusaemeqkswgee;
        goto ieumcesgiqicqima;
        ummgomwmsqygiqcy:
        uyueemusgoakawmc:
        goto skuykkqcgakewusu;
        guyskocigecaisas:
        $eqgoocgaqwqcimie = $aokagokqyuysuksm;
        goto wugmawaqkksguaoa;
        oeoeeqeaokougsec:
        cuqeayuiccuwcyua:
        goto ikgusckaomuoiggs;
        wugmawaqkksguaoa:
        ceegwysaccigqqck:
        goto ggwkueqyesouyaya;
        gwyguuaqscsukaqg:
        $eqgoocgaqwqcimie = ManipulateHTML::qgsekwygcgawekeq("\x69\155\x67", ["\163\162\143" => $eqgoocgaqwqcimie, "\x77\151\x64\x74\150" => "\x38\60", "\x68\x65\151\x67\150\x74" => "\70\x30"]);
        goto sesqsywwesiycmmq;
        csiokukquwmccgqc:
        return $eqgoocgaqwqcimie;
        goto sgaiaqoewagooqoo;
        aqmauesokgqoyugm:
        if ($aaqqkgyougeiueyq instanceof Enumeration) {
            goto comiusqosmykagiq;
        }
        goto scigcaogysowccsk;
        oscukosgcqaqwcmi:
        if (!is_numeric($eqgoocgaqwqcimie)) {
            goto oukqakowgcgeugam;
        }
        goto myasecwmmmiemgik;
        kecgiacuyaumcewe:
        qewmkgeeuomgomia:
        goto giqssgogumimqkeo;
        csqwmisikmgeaaky:
        if (!($this->kumuygiiqswoyasy() === $qgoqiacsiccwoawi)) {
            goto cceesacikyckyiim;
        }
        goto skokkuuieagmuwgm;
        skuykkqcgakewusu:
        $aokagokqyuysuksm = $eqgoocgaqwqcimie;
        goto imyoiukqcmewqkkw;
        ycekisssayygosaw:
        oamaoeaeoyckwmgk:
        goto qawqosgwykeguasw;
        wgiuiaqoekymkwwo:
        wmasiggggymwkeqs:
        goto csiokukquwmccgqc;
        qyoscouawykeimiu:
        if (!is_numeric($eqgoocgaqwqcimie)) {
            goto iiakoqmowuggmkqw;
        }
        goto wskwmocqgakykmgw;
        wskwmocqgakykmgw:
        if ($aaqqkgyougeiueyq instanceof Foreign && $aaqqkgyougeiueyq->eiyqqesoywqkegwu()) {
            goto uyueemusgoakawmc;
        }
        goto sgiescgmgsowcakk;
        skwuueyuqkueasuu:
        goto uiuekqekiguikuce;
        goto oeoeeqeaokougsec;
        ugoqkakikayagkmm:
        if ($eqgoocgaqwqcimie) {
            goto ceegwysaccigqqck;
        }
        goto guyskocigecaisas;
        eucysoaqoumycmso:
        uiuekqekiguikuce:
        goto kwagmsukmimymmmg;
        eacqgkqmwkcsscec:
        aoyqwwsacwqumucg:
        goto eucysoaqoumycmso;
        isqemmgcymcqgmyu:
        $aaqqkgyougeiueyq = $this->oyeskqayoscwciem()->uqeoyqiwywwmsiew($qgoqiacsiccwoawi);
        goto muuiwammayaceuue;
        qmeskaiqawomuqmk:
        $eqgoocgaqwqcimie = $aiooqyausygaasqm;
        goto ycekisssayygosaw;
        cgeuosayqssasuou:
        goto ayggscyaoccukyso;
        goto ummgomwmsqygiqcy;
        muuiwammayaceuue:
        if ($aaqqkgyougeiueyq instanceof DateTime || $aaqqkgyougeiueyq instanceof Timestamp) {
            goto qewmkgeeuomgomia;
        }
        goto aqmauesokgqoyugm;
        sesqsywwesiycmmq:
        goto oamaoeaeoyckwmgk;
        goto wwyukkoeeeiiuewk;
        oykuimwkwcmuekci:
        if (!(!is_numeric($eqgoocgaqwqcimie) && ManipulateValidation::wmcwegoisyeeosqu($eqgoocgaqwqcimie))) {
            goto cesywumicwqkaeaq;
        }
        goto icausgkyooymuwqq;
        qawqosgwykeguasw:
        cesywumicwqkaeaq:
        goto oscukosgcqaqwcmi;
        ugsomcmgekqayoqc:
        goto wmasiggggymwkeqs;
        goto kecgiacuyaumcewe;
        kwmkusgsuoqoyses:
        oukqakowgcgeugam:
        goto eacqgkqmwkcsscec;
        ggwkueqyesouyaya:
        ayggscyaoccukyso:
        goto gyeqsyqiosmysiio;
        ayekogimgycgmgau:
        cceesacikyckyiim:
        goto isqemmgcymcqgmyu;
        gyeqsyqiosmysiio:
        iiakoqmowuggmkqw:
        goto skwuueyuqkueasuu;
        sgiescgmgsowcakk:
        $eqgoocgaqwqcimie = $this->wusgwkaycokeckqs($eqgoocgaqwqcimie);
        goto cgeuosayqssasuou;
        giqssgogumimqkeo:
        $eqgoocgaqwqcimie = $this->ooeucgsymeocguuu($qgoqiacsiccwoawi, $eqgoocgaqwqcimie, null, null, $mksyucucyswaukig);
        goto wgiuiaqoekymkwwo;
        scigcaogysowccsk:
        if ($aaqqkgyougeiueyq instanceof File) {
            goto cuqeayuiccuwcyua;
        }
        goto qyoscouawykeimiu;
        uksgyweoymomgqos:
        vwyusaemeqkswgee:
        goto ugsomcmgekqayoqc;
        sgaiaqoewagooqoo:
    }
    
    public function geyuyukmwaoksywa($migiiksoiymissge, $ewgwqamkygiqaawc = '', $wwgucssaecqekuek = []) : string
    {
        goto icegsqiumouewcqo;
        wkqumiwieauokkcy:
        $iwywmkygwewiamwm = ManipulateHTML::qgsekwygcgawekeq("\x61", ManipulateFormat::omaawkkwwyesqwcc($wwgucssaecqekuek, ["\x68\162\145\x66" => $migiiksoiymissge, "\143\x6c\x61\x73\163" => "\x74\145\170\164\x2d\144\x65\x63\157\x72\x61\164\x69\x6f\156\55\156\157\156\x65"]), true, $ewgwqamkygiqaawc);
        goto yseysoymiwmicuoi;
        miqekiwaouwgqgui:
        return $nsmgceoqaqogqmuw;
        goto wawwaqicwyyeamqu;
        kmemegqksaeuqcow:
        iugooscuiysaeqgs:
        goto miqekiwaouwgqgui;
        yseysoymiwmicuoi:
        $nsmgceoqaqogqmuw = ManipulateHTML::ciuuiyckmsygceis($iwywmkygwewiamwm);
        goto kmemegqksaeuqcow;
        mgeiyeygqcoismqq:
        if (!($migiiksoiymissge && $ewgwqamkygiqaawc)) {
            goto iugooscuiysaeqgs;
        }
        goto wkqumiwieauokkcy;
        icegsqiumouewcqo:
        $nsmgceoqaqogqmuw = '';
        goto mgeiyeygqcoismqq;
        wawwaqicwyyeamqu:
    }
    
    public function ykaiaukuaeswygey($mksyucucyswaukig, $ikgwqyuyckaewsow, $eqgoocgaqwqcimie, $wamcomkuwysqgwgk = "\x3c\144\x69\166\76\45\163\x3a\x20\x25\163\x3c\x2f\144\151\166\x3e") : string
    {
        goto omgecsuaqiqymwms;
        wksaesosugiyoqoe:
        if (!$ukmeuaouyackgwaa) {
            goto cmugciymsqakcssq;
        }
        goto kkiwuqcmoqmiquqq;
        qqucyqsowaqsmagw:
        foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) {
            goto wyioauuuyckygcaq;
            wyioauuuyckygcaq:
            $uiymkeeaukcyqqik = ManipulateArray::get($mksyucucyswaukig, $aiowsaccomcoikus);
            goto suweomwcwyiiscee;
            siowcuqygwiqumii:
            wcuuwegqcysecoom:
            goto yuiwacwscsiukyqe;
            yuiwacwscsiukyqe:
            wuugmygqgsmkgsmc:
            goto oooiaawaqeogogky;
            suweomwcwyiiscee:
            $aiowsaccomcoikus = ManipulateArray::get($this->oyeskqayoscwciem()->aeosueemgsygqese(), $aiowsaccomcoikus);
            goto iyaaokkcuycqywco;
            geusysuemiqgegcw:
            $ukmeuaouyackgwaa .= sprintf($wamcomkuwysqgwgk, $aiowsaccomcoikus->qcgakseyaikigqco(), $this->kamyqikiiuwqiiuw($aiowsaccomcoikus->mwikyscisascoeea(), $uiymkeeaukcyqqik, $mksyucucyswaukig));
            goto siowcuqygwiqumii;
            iyaaokkcuycqywco:
            if (!($aiowsaccomcoikus && $uiymkeeaukcyqqik)) {
                goto wcuuwegqcysecoom;
            }
            goto geusysuemiqgegcw;
            oooiaawaqeogogky:
        }
        goto myswmcskaagkuaiq;
        myswmcskaagkuaiq:
        quccsmwoagiquqya:
        goto wksaesosugiyoqoe;
        mwsuqsikwoimcgiq:
        return $eqgoocgaqwqcimie;
        goto moiwoyyuauwqywom;
        kkiwuqcmoqmiquqq:
        $eqgoocgaqwqcimie = "{$eqgoocgaqwqcimie}\74\150\162\76{$ukmeuaouyackgwaa}";
        goto ygmkqoaymoicisso;
        omgecsuaqiqymwms:
        $ukmeuaouyackgwaa = '';
        goto qqucyqsowaqsmagw;
        ygmkqoaymoicisso:
        cmugciymsqakcssq:
        goto mwsuqsikwoimcgiq;
        moiwoyyuauwqywom:
    }
    
    public function wkmkqaiwuqouweye($aiowsaccomcoikus, $eqgoocgaqwqcimie, $cackiyicawmkyqqg = self::EQUAL_SYMBOL, $siykeiywomwwuoiw = null) : ?Builder
    {
        try {
            goto jwicyuowwocymagu;
            jwicyuowwocymagu:
            if ($siykeiywomwwuoiw) {
                goto ekgcsqsycamakgak;
            }
            goto amwqgwykwqyqsygy;
            egeeugucoaimuyai:
            if (!$siykeiywomwwuoiw) {
                goto iwyomomasqykuwcw;
            }
            goto iweqeyugoiogqcsw;
            laqgkacikykmcsos:
            ekgcsqsycamakgak:
            goto egeeugucoaimuyai;
            iweqeyugoiogqcsw:
            
            $siykeiywomwwuoiw = $siykeiywomwwuoiw->where($aiowsaccomcoikus, $cackiyicawmkyqqg, $eqgoocgaqwqcimie);
            goto yiswuyuuwakywmiy;
            yiswuyuuwakywmiy:
            iwyomomasqykuwcw:
            goto coswqmcmeyyaemcs;
            amwqgwykwqyqsygy:
            $siykeiywomwwuoiw = $this->gqaysymikgeawkqa();
            goto laqgkacikykmcsos;
            coswqmcmeyyaemcs:
        } catch (Exception $wgaoewqkwgomoaai) {
            $siykeiywomwwuoiw = null;
        }
        return $siykeiywomwwuoiw;
    }
    
    public function woimamkkeyoyauoa($aiowsaccomcoikus, $eqgoocgaqwqcimie, $cackiyicawmkyqqg = self::EQUAL_SYMBOL, $wkkweuacukumqmya = ["\x2a"], $aiamqeawckcsuaou = self::GET) : array
    {
        goto eqqgiqaceosmskyq;
        eqqgiqaceosmskyq:
        $aqykuigiuwmmcieu = [];
        goto gcikiyucocqiqkic;
        toacieymkgsmouum:
        return $aqykuigiuwmmcieu;
        goto uooyycimwyiscwik;
        kgaiygkqciegamkk:
        if (!$siykeiywomwwuoiw) {
            goto amcyugmyywgmwyys;
        }
        goto ykomkgsekoimwoga;
        gcikiyucocqiqkic:
        $siykeiywomwwuoiw = $this->wkmkqaiwuqouweye($aiowsaccomcoikus, $cackiyicawmkyqqg, $eqgoocgaqwqcimie);
        goto kgaiygkqciegamkk;
        ykomkgsekoimwoga:
        $aqykuigiuwmmcieu = $this->aocqcwaksksgckaw($siykeiywomwwuoiw, $wkkweuacukumqmya, $aiamqeawckcsuaou);
        goto uwacyygkmmwmqumm;
        uwacyygkmmwmqumm:
        amcyugmyywgmwyys:
        goto toacieymkgsmouum;
        uooyycimwyiscwik:
    }
    
    public function mkcmqiiwgccguoko($aiowsaccomcoikus, $eqgoocgaqwqcimie, $cackiyicawmkyqqg = self::EQUAL_SYMBOL, $wkkweuacukumqmya = ["\52"]) : array
    {
        return $this->woimamkkeyoyauoa($aiowsaccomcoikus, $eqgoocgaqwqcimie, $cackiyicawmkyqqg, $wkkweuacukumqmya, self::PLUCK);
    }
    
    public function cwgkcyyaymmsomqa($mguygkocuoaoqqkg) : array
    {
        goto aygymyyeaiouckwm;
        imccgasockkumogm:
        return $mguygkocuoaoqqkg;
        goto yawiksokukeuwumm;
        aacaaeuuscacmgws:
        ocqocwcocigwogao:
        goto imccgasockkumogm;
        iaemoucqgyeioome:
        goto ocqocwcocigwogao;
        goto cusmikqmacqsyoma;
        cusmikqmacqsyoma:
        saqssgocioekcyik:
        goto qcqecwaeywouwwyw;
        cqggosuciisguwka:
        $mguygkocuoaoqqkg = [];
        goto iaemoucqgyeioome;
        aygymyyeaiouckwm:
        if ($mguygkocuoaoqqkg && is_array($mguygkocuoaoqqkg)) {
            goto saqssgocioekcyik;
        }
        goto cqggosuciisguwka;
        uyiyiugiugqiqgce:
        wgyckicucikswwgc:
        goto aacaaeuuscacmgws;
        qcqecwaeywouwwyw:
        foreach ($mguygkocuoaoqqkg as $momcykaoccoymeig => $mksyucucyswaukig) {
            $mguygkocuoaoqqkg[$momcykaoccoymeig] = $this->scqakcemaqsqkema($mksyucucyswaukig);
            kuewoymyameyusgi:
        }
        goto uyiyiugiugqiqgce;
        yawiksokukeuwumm:
    }
    
    public function scqakcemaqsqkema($mksyucucyswaukig, $yiosiwewiecqmkaa = [])
    {
        goto egcykicymsycioaq;
        scgkuqsgoooesoak:
        foreach ($mksyucucyswaukig as $aiowsaccomcoikus => $eqgoocgaqwqcimie) {
            goto wewskayogyikqqwe;
            cuiswoyuykyksukc:
            $mksyucucyswaukig = ManipulateArray::set($mksyucucyswaukig, [$aiowsaccomcoikus => $this->kamyqikiiuwqiiuw($aiowsaccomcoikus, $eqgoocgaqwqcimie, $mksyucucyswaukig)]);
            goto oqwssckcieuowiwc;
            auyuqgiwqummogko:
            ciiggekwccqceewc:
            goto qgowycwwyqeusmqk;
            oqwssckcieuowiwc:
            kgseuyacuyamciku:
            goto auyuqgiwqummogko;
            wewskayogyikqqwe:
            if (!(!$yiosiwewiecqmkaa || in_array($aiowsaccomcoikus, $yiosiwewiecqmkaa))) {
                goto kgseuyacuyamciku;
            }
            goto cuiswoyuykyksukc;
            qgowycwwyqeusmqk:
        }
        goto kiwygqkmigumiiuk;
        scuysmagomwasugy:
        return $mksyucucyswaukig;
        goto yamuiaoquqoesiye;
        egcykicymsycioaq:
        if (!$mksyucucyswaukig) {
            goto ouiaceqmgmusysiq;
        }
        goto scgkuqsgoooesoak;
        kiwygqkmigumiiuk:
        wiisumwwuyqmqggs:
        goto aockoackcyuqgoky;
        aockoackcyuqgoky:
        ouiaceqmgmusysiq:
        goto scuysmagomwasugy;
        yamuiaoquqoesiye:
    }
    
    public function yaswokogyqciggeq($aiowsaccomcoikus, $eqgoocgaqwqcimie, $qgoqiacsiccwoawi = self::ID, $cackiyicawmkyqqg = self::EQUAL_SYMBOL) : array
    {
        return $this->mkcmqiiwgccguoko($aiowsaccomcoikus, $eqgoocgaqwqcimie, $cackiyicawmkyqqg, $qgoqiacsiccwoawi);
    }
    
    public function cwkywyqksyucoyia($ikgwqyuyckaewsow, $wkkweuacukumqmya = ["\x2a"]) : array
    {
        goto iescmuyqmwkeagcg;
        mgomeacemugqgswa:
        $aqykuigiuwmmcieu = $this->aocqcwaksksgckaw($siykeiywomwwuoiw, $wkkweuacukumqmya);
        goto muewmqsoeqoosicu;
        eyacawwuwcgegekw:
        $siykeiywomwwuoiw = $this->kqewyqqqiyiouaou($ikgwqyuyckaewsow);
        goto eyecoeksswsicqkq;
        ekcsiqgsyyiwyiui:
        return $aqykuigiuwmmcieu;
        goto uyeiksuwckaowkqm;
        iescmuyqmwkeagcg:
        $aqykuigiuwmmcieu = [];
        goto eyacawwuwcgegekw;
        muewmqsoeqoosicu:
        keeayqkcscoegmmc:
        goto ekcsiqgsyyiwyiui;
        eyecoeksswsicqkq:
        if (!$siykeiywomwwuoiw) {
            goto keeayqkcscoegmmc;
        }
        goto mgomeacemugqgswa;
        uyeiksuwckaowkqm:
    }
    
    public function kqewyqqqiyiouaou($ikgwqyuyckaewsow, $siykeiywomwwuoiw = null)
    {
        goto meywqwweoiaqwwiu;
        aakegewkccyyeuwc:
        try {
            goto kqkqessiagyiiuim;
            cuqsyqewuemsysgi:
            wgegmwgsmsgmceqo:
            goto aicoaaeeewwmioou;
            yoegkeiammkuouua:
            ieceiycekgcommqi:
            goto cuqsyqewuemsysgi;
            kqkqessiagyiiuim:
            if (!$siykeiywomwwuoiw) {
                goto wgegmwgsmsgmceqo;
            }
            goto omyeseoqwqiuwqcw;
            omyeseoqwqiuwqcw:
            foreach ($ikgwqyuyckaewsow as $qgoqiacsiccwoawi => $ywmkwiwkosakssii) {
                goto aacmqqkkmcyowsko;
                aacmqqkkmcyowsko:
                $mqogqgswmasasmik = ManipulateArray::get($ywmkwiwkosakssii, self::NOT, false);
                goto iokqqymyimieyyyy;
                mywgmggymygqamce:
                switch ($yummaigqmauwcyou) {
                    case self::CONTAIN:
                        
                        $siykeiywomwwuoiw = $siykeiywomwwuoiw->whereIn($qgoqiacsiccwoawi, $eqgoocgaqwqcimie, $qsycuegoicqcqkmo, $mqogqgswmasasmik);
                        goto ieuoskasoucciwkq;
                    case self::JOIN:
                        goto wyuuoyquywymqoqc;
                        muoaaecywcccquoa:
                        $aasascamegmwqmqk = $qgoqiacsiccwoawi;
                        goto quweggukmkusygwe;
                        wskuiymiemyqssui:
                        $icsywsyukqcciiky = ManipulateArray::get($ywmkwiwkosakssii, self::WHERE, false);
                        goto muoaaecywcccquoa;
                        ysmqqmuesgeyquws:
                        goto ieuoskasoucciwkq;
                        goto mmoyseisgqkyouaq;
                        quweggukmkusygwe:
                        
                        $siykeiywomwwuoiw = $siykeiywomwwuoiw->join($aasascamegmwqmqk, $eqgoocgaqwqcimie[0], $cackiyicawmkyqqg, $eqgoocgaqwqcimie[1], $sqeykgyoooqysmca, $icsywsyukqcciiky);
                        goto ysmqqmuesgeyquws;
                        wyuuoyquywymqoqc:
                        $sqeykgyoooqysmca = ManipulateArray::get($ywmkwiwkosakssii, self::TYPE, "\x69\156\156\x65\x72");
                        goto wskuiymiemyqssui;
                        mmoyseisgqkyouaq:
                    case self::WHERE:
                        goto skmyqomuuowkeeqe;
                        gwgssaymsgykwaoe:
                        goto ieuoskasoucciwkq;
                        goto wwioiasoggswmeyy;
                        momgaqeuucmowiii:
                        eowskcomgqqwcyui:
                        goto gmmgscuqwgiiqsmc;
                        qywoucqwciweuyeg:
                        qwuwcoeiguyqekuy:
                        goto kwiwoeckcqgewwsc;
                        owsusyqkaqmcmkwu:
                        wococciimesuaeys:
                        goto woqwmsyieymgsqao;
                        gmmgscuqwgiiqsmc:
                        osskmmsaekmgemwc:
                        goto imwwaqcuqskiyeqc;
                        woqwmsyieymgsqao:
                        switch ($qsycuegoicqcqkmo) {
                            case self::AND:
                                
                                $siykeiywomwwuoiw->whereIn($qgoqiacsiccwoawi, $eqgoocgaqwqcimie, $qsycuegoicqcqkmo, $mqogqgswmasasmik);
                                goto oyeuoiqgeuioiqie;
                            case self::OR:
                                
                                $siykeiywomwwuoiw->orWhereIn($qgoqiacsiccwoawi, $eqgoocgaqwqcimie);
                                goto oyeuoiqgeuioiqie;
                        }
                        goto qywoucqwciweuyeg;
                        kwiwoeckcqgewwsc:
                        oyeuoiqgeuioiqie:
                        goto meseoaayykmoeicm;
                        imwwaqcuqskiyeqc:
                        goto ygsoccgkwamsqewm;
                        goto owsusyqkaqmcmkwu;
                        meseoaayykmoeicm:
                        ygsoccgkwamsqewm:
                        goto gwgssaymsgykwaoe;
                        smwcscokyasiosks:
                        switch ($qsycuegoicqcqkmo) {
                            case self::AND:
                                
                                $siykeiywomwwuoiw->where($qgoqiacsiccwoawi, $cackiyicawmkyqqg, $eqgoocgaqwqcimie, $qsycuegoicqcqkmo);
                                goto osskmmsaekmgemwc;
                            case self::OR:
                                
                                $siykeiywomwwuoiw->orWhere($qgoqiacsiccwoawi, $cackiyicawmkyqqg, $eqgoocgaqwqcimie);
                                goto osskmmsaekmgemwc;
                        }
                        goto momgaqeuucmowiii;
                        skmyqomuuowkeeqe:
                        if (is_array($eqgoocgaqwqcimie)) {
                            goto wococciimesuaeys;
                        }
                        goto smwcscokyasiosks;
                        wwioiasoggswmeyy:
                    case self::DATE:
                        $siykeiywomwwuoiw = $this->ewaugyyiauqmiwsu($qgoqiacsiccwoawi, $eqgoocgaqwqcimie, $cackiyicawmkyqqg, $qsycuegoicqcqkmo, $mqogqgswmasasmik, $siykeiywomwwuoiw);
                        goto ieuoskasoucciwkq;
                }
                goto cswkeogkecaoyoka;
                oekyuoucqkakcewe:
                ieuoskasoucciwkq:
                goto ieaswyqkcwyaycse;
                aoaymmuyuuwqwcuy:
                $yummaigqmauwcyou = ManipulateArray::get($ywmkwiwkosakssii, self::CLAUSE, self::WHERE);
                goto mcsucqagsqysgieu;
                iokqqymyimieyyyy:
                $eqgoocgaqwqcimie = ManipulateArray::get($ywmkwiwkosakssii, self::VALUE, $ywmkwiwkosakssii);
                goto aoaymmuyuuwqwcuy;
                ieaswyqkcwyaycse:
                umskgiqgaemaokmw:
                goto yiuwcmkkcemwksaq;
                mcsucqagsqysgieu:
                $qsycuegoicqcqkmo = ManipulateArray::get($ywmkwiwkosakssii, self::BOOLEAN, self::AND);
                goto yuuygkmacmmcakma;
                yuuygkmacmmcakma:
                $cackiyicawmkyqqg = ManipulateArray::get($ywmkwiwkosakssii, self::OPERATOR, self::EQUAL_SYMBOL);
                goto mywgmggymygqamce;
                cswkeogkecaoyoka:
                igqwceeuaueagaem:
                goto oekyuoucqkakcewe;
                yiuwcmkkcemwksaq:
            }
            goto yoegkeiammkuouua;
            aicoaaeeewwmioou:
        } catch (Exception $wgaoewqkwgomoaai) {
            $siykeiywomwwuoiw = null;
        }
        goto iewmwscqgiiicygc;
        meywqwweoiaqwwiu:
        if (!(!$siykeiywomwwuoiw instanceof Builder && !$siykeiywomwwuoiw instanceof Relation)) {
            goto qiykkoqakyesmswm;
        }
        goto umseiamyiyksuyim;
        ubsguocwequeoicm:
        qiykkoqakyesmswm:
        goto aakegewkccyyeuwc;
        umseiamyiyksuyim:
        $siykeiywomwwuoiw = $this->gqaysymikgeawkqa();
        goto ubsguocwequeoicm;
        iewmwscqgiiicygc:
        return $siykeiywomwwuoiw;
        goto gikgmkgewswggoou;
        gikgmkgewswggoou:
    }
    
    public function ieieyoeqmmeysauc($aiowsaccomcoikus, $eqgoocgaqwqcimie, $cackiyicawmkyqqg = self::EQUAL_SYMBOL, $siykeiywomwwuoiw = null) : int
    {
        goto csouyaoieqauoyww;
        ewyqasqeksiqauuw:
        $siykeiywomwwuoiw = $this->wkmkqaiwuqouweye($aiowsaccomcoikus, $cackiyicawmkyqqg, $eqgoocgaqwqcimie, $siykeiywomwwuoiw);
        goto eyoiasswoyuyuuco;
        csouyaoieqauoyww:
        $gaeqamemwmwsyukm = 0;
        goto ewyqasqeksiqauuw;
        eyoiasswoyuyuuco:
        if (!$siykeiywomwwuoiw) {
            goto wiqmeiaaqqauqeme;
        }
        goto ssocqyqwsyyekiik;
        nomsoewcmsqiikyy:
        wiqmeiaaqqauqeme:
        goto iiueqisykokweaaw;
        ssocqyqwsyyekiik:
        
        $gaeqamemwmwsyukm = $siykeiywomwwuoiw->count();
        goto nomsoewcmsqiikyy;
        iiueqisykokweaaw:
        return $gaeqamemwmwsyukm;
        goto maquyauskaqkikks;
        maquyauskaqkikks:
    }
    
    public function ssqiqiiwyusygike($aiowsaccomcoikus, $eqgoocgaqwqcimie, $qgoqiacsiccwoawi, $cackiyicawmkyqqg = self::EQUAL_SYMBOL)
    {
        goto wmgokkkswmssqimu;
        useouyguueemgkmq:
        wgggaasiaeeucygm:
        goto oweiysimemyoswom;
        sogccagmgkcaoase:
        
        $qsmaqqyoggcuyukq = $siykeiywomwwuoiw->sum($qgoqiacsiccwoawi);
        goto useouyguueemgkmq;
        oweiysimemyoswom:
        return $qsmaqqyoggcuyukq;
        goto coakykwqwcigaoeq;
        iwwcoscasyysaqoo:
        if (!$siykeiywomwwuoiw) {
            goto wgggaasiaeeucygm;
        }
        goto sogccagmgkcaoase;
        wmgokkkswmssqimu:
        $qsmaqqyoggcuyukq = 0;
        goto ywueqiukuessuggs;
        ywueqiukuessuggs:
        $siykeiywomwwuoiw = $this->wkmkqaiwuqouweye($aiowsaccomcoikus, $cackiyicawmkyqqg, $eqgoocgaqwqcimie);
        goto iwwcoscasyysaqoo;
        coakykwqwcigaoeq:
    }
    
    public function ewaugyyiauqmiwsu($ymaogssqccumcyqa, $eqgoocgaqwqcimie, $cackiyicawmkyqqg = self::GE_SYMBOL, $qsycuegoicqcqkmo = self::AND, $mqogqgswmasasmik = false, $siykeiywomwwuoiw = null) : ?Builder
    {
        try {
            goto qqqseeocmmummkga;
            geacaysasaiqsewo:
            $eqgoocgaqwqcimie = new \DateTime($eqgoocgaqwqcimie);
            goto kigeagsoeqmgaosa;
            iswgeeweeweswyoy:
            gekuacoquiucucoa:
            goto wcksgisuiomywugm;
            wewikewycwowkqui:
            goto maiokoamiosssisk;
            goto qqgoygcaggkkisyw;
            imyqaycayqeucsau:
            maiokoamiosssisk:
            goto yiqskmikgqukkewq;
            imiieooawogoyagw:
            
            $siykeiywomwwuoiw = $siykeiywomwwuoiw->whereBetween($ymaogssqccumcyqa, $eqgoocgaqwqcimie, $qsycuegoicqcqkmo, $mqogqgswmasasmik);
            goto imyqaycayqeucsau;
            kigeagsoeqmgaosa:
            samuycgcmqkmcgea:
            goto iiowkswmewooomes;
            mwwqyciigykaycis:
            if (!is_numeric($eqgoocgaqwqcimie)) {
                goto samuycgcmqkmcgea;
            }
            goto geacaysasaiqsewo;
            qqqseeocmmummkga:
            if ($siykeiywomwwuoiw) {
                goto gekuacoquiucucoa;
            }
            goto wwwyugiayoaucqiu;
            wwwyugiayoaucqiu:
            $siykeiywomwwuoiw = $this->gqaysymikgeawkqa();
            goto iswgeeweeweswyoy;
            iiowkswmewooomes:
            
            $siykeiywomwwuoiw = $siykeiywomwwuoiw->whereDate($ymaogssqccumcyqa, $cackiyicawmkyqqg, $eqgoocgaqwqcimie, $qsycuegoicqcqkmo);
            goto wewikewycwowkqui;
            wcksgisuiomywugm:
            if ($cackiyicawmkyqqg == "\142\145\164\167\x65\x65\x6e" && is_array($eqgoocgaqwqcimie)) {
                goto kqacoqsymeyimagg;
            }
            goto mwwqyciigykaycis;
            qqgoygcaggkkisyw:
            kqacoqsymeyimagg:
            goto imiieooawogoyagw;
            yiqskmikgqukkewq:
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
        goto oqksakqyecmsuscq;
        ekkkweoucuyuqwik:
        goto msaugmwuooqkmwus;
        goto mkosooeggqemyqqy;
        oqksakqyecmsuscq:
        if ($aiowsaccomcoikus instanceof Field) {
            goto cmcawyswoeumueys;
        }
        goto sumiomammkayeqis;
        qiiwgkcyqweecqoa:
        $eqgoocgaqwqcimie = ManipulateArray::get($mksyucucyswaukig, $aiowsaccomcoikus, $ggauoeuaesiymgee);
        goto ekkkweoucuyuqwik;
        kokkacggmoaagiae:
        if (!$eqgoocgaqwqcimie) {
            goto uwkuasmeoueseaou;
        }
        goto iweickamaucqgysq;
        aecamacaoskqmccs:
        $eqgoocgaqwqcimie = json_decode($eqgoocgaqwqcimie);
        goto oekmoqcqwyauiaeg;
        oqkqaggagwswaaqi:
        if ($aiowsaccomcoikus instanceof Field) {
            goto agcugqouiqgiskcq;
        }
        goto qiiwgkcyqweecqoa;
        umawcakyaoykccao:
        msaugmwuooqkmwus:
        goto wwmscmqgasawkkwa;
        mkosooeggqemyqqy:
        agcugqouiqgiskcq:
        goto uyugkucyiqymcuus;
        wwmscmqgasawkkwa:
        return $eqgoocgaqwqcimie;
        goto aksogeackceaeays;
        iweickamaucqgysq:
        if (!$aiowsaccomcoikus instanceof Json) {
            goto ugcquuakimgkmeqc;
        }
        goto aecamacaoskqmccs;
        syokeusmqogkicks:
        cmcawyswoeumueys:
        goto oqkqaggagwswaaqi;
        uyugkucyiqymcuus:
        $eqgoocgaqwqcimie = ManipulateArray::get($mksyucucyswaukig, $aiowsaccomcoikus->mwikyscisascoeea(), $ggauoeuaesiymgee);
        goto kokkacggmoaagiae;
        sumiomammkayeqis:
        $ksiyqouuaoymsycg = $this->oyeskqayoscwciem()->uqeoyqiwywwmsiew($aiowsaccomcoikus);
        goto ueeuassqywswigaq;
        ueeuassqywswigaq:
        if (!$ksiyqouuaoymsycg) {
            goto eoeomqmkgaogkome;
        }
        goto ugkqimokoeicsyqm;
        oekmoqcqwyauiaeg:
        ugcquuakimgkmeqc:
        goto uiqaoucyoiwykywa;
        kyuewcuomwmweguq:
        eoeomqmkgaogkome:
        goto syokeusmqogkicks;
        uiqaoucyoiwykywa:
        uwkuasmeoueseaou:
        goto umawcakyaoykccao;
        ugkqimokoeicsyqm:
        $aiowsaccomcoikus = $ksiyqouuaoymsycg;
        goto kyuewcuomwmweguq;
        aksogeackceaeays:
    }
    
    private function aocqcwaksksgckaw($siykeiywomwwuoiw, $wkkweuacukumqmya = ["\x2a"], $aiamqeawckcsuaou = self::GET) : array
    {
        goto ooqqyyewioyccuww;
        ckugukmoqamgcwci:
        ugwyeeockousskag:
        goto omeukkwiesseygwy;
        omeukkwiesseygwy:
        return $uomewyckeuqoqocu;
        goto gewecumqwgcuwikk;
        iqsoeqgwemgyiimg:
        if (!$iwqgomgkuumgyswi) {
            goto ugwyeeockousskag;
        }
        goto qqkqiioqwkekqsoq;
        qqkqiioqwkekqsoq:
        $uomewyckeuqoqocu = $iwqgomgkuumgyswi->sacmkccceuywoqsq();
        goto ckugukmoqamgcwci;
        umasasgawwamkisc:
        $iwqgomgkuumgyswi = $this->ymkikmwesqgscscy($siykeiywomwwuoiw, $wkkweuacukumqmya, $aiamqeawckcsuaou);
        goto iqsoeqgwemgyiimg;
        ooqqyyewioyccuww:
        $uomewyckeuqoqocu = [];
        goto umasasgawwamkisc;
        gewecumqwgcuwikk:
    }
    
    public function ymkikmwesqgscscy($siykeiywomwwuoiw, $wkkweuacukumqmya = ["\x2a"], $aiamqeawckcsuaou = self::GET) : ?Collection
    {
        goto muooqqykkmuismwk;
        qywgscciuywgmaia:
        $iwqgomgkuumgyswi = null;
        goto wiqmoimycyeesqse;
        ucwwsgoweeagukyq:
        ayegqigqcsuoqess:
        goto yaiwoisswowiyski;
        yaiwoisswowiyski:
        scqwioawomamygwa:
        goto gecscumwugkogmyq;
        kaewigguiigmcsoe:
        if (!in_array($aiamqeawckcsuaou, [self::GET, self::PLUCK])) {
            goto ayegqigqcsuoqess;
        }
        goto wmoqoeyuaikokayu;
        wmoqoeyuaikokayu:
        $iwqgomgkuumgyswi = $siykeiywomwwuoiw->{$aiamqeawckcsuaou}($wkkweuacukumqmya);
        goto ucwwsgoweeagukyq;
        muooqqykkmuismwk:
        if ($siykeiywomwwuoiw) {
            goto aewqyqksisqayska;
        }
        goto auucmoqsmsouecag;
        auucmoqsmsouecag:
        $siykeiywomwwuoiw = $this->gqaysymikgeawkqa();
        goto euiiaygickweagiw;
        euiiaygickweagiw:
        aewqyqksisqayska:
        goto qywgscciuywgmaia;
        wiqmoimycyeesqse:
        if (!$siykeiywomwwuoiw) {
            goto scqwioawomamygwa;
        }
        goto kaewigguiigmcsoe;
        gecscumwugkogmyq:
        return $iwqgomgkuumgyswi;
        goto euaikwmkiyegwqae;
        euaikwmkiyegwqae:
    }
    
    public function kmqmiwcimmagogoy($siykeiywomwwuoiw, $wkkweuacukumqmya = ["\x2a"], $aiamqeawckcsuaou = self::GET)
    {
        goto iiwessuyuisaawek;
        qokakquaeuigqcwy:
        return $qsmaqqyoggcuyukq;
        goto cymigkmkskowwcei;
        soyqsccuokmyuagk:
        if (!$iwqgomgkuumgyswi) {
            goto qgiscekgegqwemgs;
        }
        goto owsgmougoacgokmi;
        owsgmougoacgokmi:
        $qsmaqqyoggcuyukq = $iwqgomgkuumgyswi->qsmaqqyoggcuyukq();
        goto iaqyisoeeygqwcym;
        iiwessuyuisaawek:
        $qsmaqqyoggcuyukq = 0;
        goto yqukoacecemgkkay;
        yqukoacecemgkkay:
        $iwqgomgkuumgyswi = $this->ymkikmwesqgscscy($siykeiywomwwuoiw, $wkkweuacukumqmya, $aiamqeawckcsuaou);
        goto soyqsccuokmyuagk;
        iaqyisoeeygqwcym:
        qgiscekgegqwemgs:
        goto qokakquaeuigqcwy;
        cymigkmkskowwcei:
    }
    
    public function iiqauwkoiguyeawu($siykeiywomwwuoiw, $wkkweuacukumqmya = ["\x2a"]) : array
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
        goto yseoucmemeekwkig;
        gscsssqcacocusua:
        return $siykeiywomwwuoiw;
        goto sqwgcyyoaismwkqs;
        suggiaqykiwgkkey:
        $siykeiywomwwuoiw = $this->gqaysymikgeawkqa();
        goto igoseisickgqeaog;
        uogakawoeucgocym:
        if (!$siykeiywomwwuoiw) {
            goto wcyawmskokoagwqq;
        }
        goto cyukykwcccsawesg;
        soywogweqoqmymqw:
        wcyawmskokoagwqq:
        goto gscsssqcacocusua;
        cyukykwcccsawesg:
        
        $siykeiywomwwuoiw = $siykeiywomwwuoiw->orderBy($qgoqiacsiccwoawi, $ecysmcqmumqmaagg);
        goto soywogweqoqmymqw;
        yseoucmemeekwkig:
        if ($siykeiywomwwuoiw) {
            goto ukecesmaioggmyoc;
        }
        goto suggiaqykiwgkkey;
        igoseisickgqeaog:
        ukecesmaioggmyoc:
        goto uogakawoeucgocym;
        sqwgcyyoaismwkqs:
    }
    
    public function awkaaqmauiuwwsca($siykeiywomwwuoiw, $wkkweuacukumqmya = ["\52"], $qgoqiacsiccwoawi = null, $ecysmcqmumqmaagg = null)
    {
        goto womgsyqqiwokqyiw;
        womgsyqqiwokqyiw:
        if ($siykeiywomwwuoiw) {
            goto umeiiiomksmkmoaa;
        }
        goto ayoyuasegggqqosu;
        mkikakaaaqwygquu:
        umeiiiomksmkmoaa:
        goto cgmukwicwgikewei;
        oiakiumycyquagqu:
        
        $mksyucucyswaukig = $siykeiywomwwuoiw->first($wkkweuacukumqmya);
        goto sycysmgqeucmisiw;
        iasuykaqammykyuc:
        $mksyucucyswaukig = null;
        goto ykmceyuggseogcgm;
        sycysmgqeucmisiw:
        iisykceuumgoicmc:
        goto sawkcaueekoqcaoq;
        cgmukwicwgikewei:
        if (!($qgoqiacsiccwoawi && $ecysmcqmumqmaagg)) {
            goto aokcewiioiiyiqeu;
        }
        goto iuasemkmccmcauoc;
        ykmceyuggseogcgm:
        if (!$siykeiywomwwuoiw) {
            goto iisykceuumgoicmc;
        }
        goto oiakiumycyquagqu;
        ayoyuasegggqqosu:
        $siykeiywomwwuoiw = $this->gqaysymikgeawkqa();
        goto mkikakaaaqwygquu;
        sscqwggcsoumagsw:
        aokcewiioiiyiqeu:
        goto iasuykaqammykyuc;
        sawkcaueekoqcaoq:
        return $mksyucucyswaukig;
        goto omcskkiwcgiysuis;
        iuasemkmccmcauoc:
        $siykeiywomwwuoiw = $this->ewkswoqykwsuckok($siykeiywomwwuoiw, $qgoqiacsiccwoawi, $ecysmcqmumqmaagg);
        goto sscqwggcsoumagsw;
        omcskkiwcgiysuis:
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
    
    public function uckwcqkkygmuquqq($aasascamegmwqmqk, $sysgmomuyiiawwcm, $gcegymooyemmaysk, $siykeiywomwwuoiw = null, $cackiyicawmkyqqg = self::EQUAL_SYMBOL, $sqeykgyoooqysmca = "\x69\156\156\x65\162", $icsywsyukqcciiky = false) : ?Builder
    {
        goto gaucesmmweqmemkg;
        qsmmausewiocaesg:
        ykeuwugswmeukgii:
        goto caseeeggigkaoswu;
        caseeeggigkaoswu:
        return $siykeiywomwwuoiw;
        goto cwuqamaiywoeieyw;
        uuooygauoaumkemu:
        $siykeiywomwwuoiw = $this->gqaysymikgeawkqa();
        goto osgaygqiwagaowsq;
        csuyaisqcmkkyqiw:
        
        $siykeiywomwwuoiw = $siykeiywomwwuoiw->join($aasascamegmwqmqk, $sysgmomuyiiawwcm, $cackiyicawmkyqqg, $gcegymooyemmaysk, $sqeykgyoooqysmca, $icsywsyukqcciiky);
        goto qsmmausewiocaesg;
        osgaygqiwagaowsq:
        wywuimckaigaukkg:
        goto kecaqcyccioyaoaa;
        kecaqcyccioyaoaa:
        if (!$siykeiywomwwuoiw) {
            goto ykeuwugswmeukgii;
        }
        goto csuyaisqcmkkyqiw;
        gaucesmmweqmemkg:
        if ($siykeiywomwwuoiw) {
            goto wywuimckaigaukkg;
        }
        goto uuooygauoaumkemu;
        cwuqamaiywoeieyw:
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
