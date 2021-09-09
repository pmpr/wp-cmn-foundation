<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613a1be32d755             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\ORM\DB;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\MorphToMany;
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
    const ORM_FILTER_BY = "\157\162\x6d\137\x66\151\x6c\164\145\x72\137\x62\x79";
    const ORM_FILTER_VALUE = "\157\162\155\137\x66\x69\x6c\164\145\162\x5f\x76\x61\154\165\145";
    use SingletonTrait, TranslateTrait, ComponentTrait, ActionTrait, FieldTrait, HookTrait, AjaxTrait, LogTrait;
    
    protected ?int $id = 0;
    
    public $timestamps = true;
    
    protected ?array $views = [];
    
    protected ?array $fields = [];
    
    protected bool $canDelete = true;
    
    protected ?Register $register = null;
    
    protected ?string $labelKey = "\164\151\164\154\145";
    
    protected ?array $validationErrors = [];
    
    public function __construct($aokagokqyuysuksm = null, ?array $siquossayskcwkea = [])
    {
        goto yamoiggaeugmgkku;
        mwskgsimqagmkcgq:
        $suckquwcuiuyiogc = ManipulateSetting::cmaecekuqkwmemms("\125\x50\x44\101\124\x45\x5f\117\122\x4d\137\104\x41\124\101\102\x41\x53\105", 0);
        goto mkuigmcgkawyawee;
        ccqgkeesikyegcik:
        $aiqugsyouyikgawm->yuaecocyyyqqgsyw($this->oyeskqayoscwciem())->uwyqgmcuomgeccgy($mgcmmwqwguicsews);
        goto aakwscykmyyykoms;
        iqeqqwcmaiqakawc:
        
        $mgcmmwqwguicsews = $this->getConnection();
        goto gioqkcywauuckmua;
        ouqwmaaskykywyqo:
        $mgcmmwqwguicsews->cymcyywycwkawmsi();
        goto agqmoymkiswqswqo;
        qoiuwyogucoeaoew:
        if ($ymqmyyeuycgmigyo) {
            goto muwyuiikuywigwso;
        }
        goto qkkqiagwgaoyauki;
        gioqkcywauuckmua:
        $this->table = $mgcmmwqwguicsews->cokoiaeeomgssqgy($ymqmyyeuycgmigyo);
        goto miaiggsoiaekmqwy;
        agqmoymkiswqswqo:
        $aiqugsyouyikgawm = Updater::ocmycskcuiawkecq($ymqmyyeuycgmigyo);
        goto kwaqakoogeiacmwi;
        oqwyemgwoossauyk:
        $this->gyqeoeemeemicgqi();
        goto cwcmwogseemgqgqq;
        yamoiggaeugmgkku:
        $this->ckgmycmaukqgkosk();
        goto eqekaoaioiykuaiw;
        wcoqiwuusoeqiqwi:
        if (is_numeric($aokagokqyuysuksm)) {
            goto akoiqkoqmmmcieug;
        }
        goto oqwyemgwoossauyk;
        uqagqomggiacosqm:
        $this->ewaqwooqoqmcoomi();
        goto mwskgsimqagmkcgq;
        kwaqakoogeiacmwi:
        if (!$aiqugsyouyikgawm instanceof Updater) {
            goto gikaiicgqyueeoco;
        }
        goto ccqgkeesikyegcik;
        oyywywoqaqcykucs:
        muwyuiikuywigwso:
        goto iqeqqwcmaiqakawc;
        cwcmwogseemgqgqq:
        akoiqkoqmmmcieug:
        goto yuoyackaoigyyyso;
        iiuawywwoaeyauge:
        akcakssqcqcouwew:
        goto wcoqiwuusoeqiqwi;
        aakwscykmyyykoms:
        gikaiicgqyueeoco:
        goto iiuawywwoaeyauge;
        miaiggsoiaekmqwy:
        static::$resolver = new Resolver();
        goto suoymucmyegewkmu;
        qkkqiagwgaoyauki:
        wp_die("\156\x61\155\145\40\x69\x73\40\156\157\164\x20\x64\x65\x66\x69\x6e\145\40\146\x6f\162\x20\x6d\157\144\145\154\72\x20" . self::uqggkiomyiceyooa());
        goto oyywywoqaqcykucs;
        eqekaoaioiykuaiw:
        $ymqmyyeuycgmigyo = $this->miwqiiqeegeqcwis();
        goto qoiuwyogucoeaoew;
        mkuigmcgkawyawee:
        if (!(!ManipulateAjax::mcgoysmkqsqooceq() && ($suckquwcuiuyiogc || !$this->gqaysymikgeawkqa()))) {
            goto akcakssqcqcouwew;
        }
        goto ouqwmaaskykywyqo;
        yuoyackaoigyyyso:
        cgasgmiiqegqesic:
        goto kcqieuukskyiywss;
        kcqieuukskyiywss:
        parent::__construct($siquossayskcwkea);
        goto wukuisoeoeomgegu;
        suoymucmyegewkmu:
        if (self::quiqwmkiyigesygc()) {
            goto cgasgmiiqegqesic;
        }
        goto uqagqomggiacosqm;
        wukuisoeoeomgegu:
    }
    public function wigskegsqequoeks()
    {
        $ymqmyyeuycgmigyo = $this->miwqiiqeegeqcwis();
        $this->qcsmikeggeemccuu("\151\x6e\x69\164", [$this, "\x63\147\x61\155\165\167\151\161\163\147\x77\x73\x69\153\153\x6d"])->koaegcswmcqsiykq($this->ygyygikyocoymgaw("{$ymqmyyeuycgmigyo}\x5f\x67\x65\164\x5f\x6c\151\163\x74"), [$this, "\143\x6b\x67\171\x65\x67\153\165\163\155\x75\171\x6d\151\155\x6f"])->qcsmikeggeemccuu($this->ygyygikyocoymgaw("{$ymqmyyeuycgmigyo}\x5f\x64\157\x5f\142\x75\154\x6b\137\x61\x63\x74\151\157\x6e"), [$this, "\x6d\171\171\161\x77\x79\x73\167\x77\x65\x73\167\151\165\x77\x75"], 10, 2)->qcsmikeggeemccuu($this->ygyygikyocoymgaw("{$ymqmyyeuycgmigyo}\x5f\x64\157\137\x73\x69\x6e\147\154\x65\137\141\x63\164\x69\x6f\156"), [$this, "\x6b\x6f\163\x6f\x61\157\x75\x6f\x67\153\x65\x61\x6f\155\167\157"], 10, 2);
    }
    public function kgquecmsgcouyaya()
    {
        $ymqmyyeuycgmigyo = $this->miwqiiqeegeqcwis();
        $this->cecaguuoecmccuse($this->ygyygikyocoymgaw("{$ymqmyyeuycgmigyo}\x5f\155\141\x6e\141\x67\145\137\x76\x69\145\x77\163"), [$this, "\161\145\157\167\x63\x75\x63\165\157\141\161\x79\161\x77\x75\x77"])->cecaguuoecmccuse($this->ygyygikyocoymgaw("{$ymqmyyeuycgmigyo}\137\155\x61\x6e\141\147\x65\137\143\157\x6c\165\x6d\156\163"), [$this, "\153\x67\157\x67\x6f\x63\x63\141\151\155\x75\x79\167\x73\157\171"])->cecaguuoecmccuse($this->ygyygikyocoymgaw("{$ymqmyyeuycgmigyo}\x5f\155\x61\x6e\141\147\145\x5f\x73\157\x72\x74\x61\x62\154\145\x5f\143\x6f\154\x75\x6d\x6e\163"), [$this, "\x78\145\153\x63\x77\x65\x63\x67\165\171\153\155\x6d\147\147\x6f"])->cecaguuoecmccuse($this->ygyygikyocoymgaw("{$ymqmyyeuycgmigyo}\137\x72\x6f\x77\x5f\x61\x63\x74\x69\x6f\x6e\163"), [$this, "\155\x63\x61\x67\x67\x6d\x75\x79\x61\x6d\x67\x73\157\155\141\141"], 10, 4)->cecaguuoecmccuse($this->ygyygikyocoymgaw("{$ymqmyyeuycgmigyo}\137\142\x75\x6c\x6b\137\x61\x63\x74\x69\157\156\x73"), [$this, "\x6d\163\171\x79\x65\163\x77\x65\x6f\157\167\x63\x75\x75\157\x75"], 10, 2)->cecaguuoecmccuse($this->ygyygikyocoymgaw("\x6f\162\x6d\x5f\x76\151\145\x77\137\163\x68\157\x77\x5f{$ymqmyyeuycgmigyo}\x5f\164\141\x62\163"), [$this, "\x75\x75\x79\155\153\151\171\147\x69\165\x61\151\x79\x65\x6d\141"], 10, 2)->cecaguuoecmccuse($this->ygyygikyocoymgaw("{$ymqmyyeuycgmigyo}\x5f\155\141\x6e\x61\147\x65\137\x63\165\163\164\157\x6d\137\x63\157\154\165\x6d\x6e"), [$this, "\x71\x65\167\155\x6b\x75\x77\171\155\x71\x6b\x6b\143\x6d\161\155"], 10, 5)->cecaguuoecmccuse($this->ygyygikyocoymgaw("{$ymqmyyeuycgmigyo}\137\155\141\156\x61\147\145\137\x65\x64\151\164\137\x66\151\145\x6c\x64\137\163\x68\x6f\167"), [$this, "\146\x61\143\161\x77\161\155\147\x63\157\x67\167\x73\x6f\x6b\x77"], 10, 4)->cecaguuoecmccuse($this->ygyygikyocoymgaw("{$ymqmyyeuycgmigyo}\x5f\x6d\x61\156\141\x67\x65\137\145\x64\151\x74\x5f\146\151\145\154\144\x5f\x76\141\154\x75\x65"), [$this, "\157\145\161\163\151\145\x6d\x61\x77\157\x67\x77\x77\171\155\157"], 10, 4);
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
        iamooqskosymqsmw:
        eyuoecmogqwkmomi:
        goto wwccoougkywoaoui;
        bgoygegmogcmeaou:
        if (is_array($vkkeimekwwkyiyyc)) {
            goto eyuoecmogqwkmomi;
        }
        goto awgaewwsskasueke;
        awgaewwsskasueke:
        $vkkeimekwwkyiyyc = $aiowsaccomcoikus;
        goto cgmcwkmmcmmkiooc;
        cgmcwkmmcmmkiooc:
        goto quewwumogiocouii;
        goto iamooqskosymqsmw;
        eygqeoiskweuiuqi:
        $vkkeimekwwkyiyyc = null;
        goto uykwmucgoywoesui;
        uykwmucgoywoesui:
        goto gqywcowiigceimaw;
        goto iisieuaeyiqwckou;
        kiqmcymowosckmii:
        gqywcowiigceimaw:
        goto iaygaasesyymwgss;
        mgwgiesscqoaqcau:
        $vkkeimekwwkyiyyc = $this->timestamps;
        goto ioacywuoyuskqmwy;
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
        iisieuaeyiqwckou:
        gsimeiqkoyqkuecq:
        goto oskwkeaemiqcaqkc;
        iaygaasesyymwgss:
        quewwumogiocouii:
        goto iwosouqsesoqcska;
        iwosouqsesoqcska:
        geugsymgsiuuqccg:
        goto iacwyogogoccmwsg;
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
        cquyuwsisgqscemm:
        $qwcmueausqgiwigy = $icwicymcioeyeyek["\163\x65\x61\x72\x63\x68"];
        goto imykswegcuekqwio;
        coskmuqsawiaeyqg:
        yeiicwscguyokwyu:
        goto umccwcqwkoiaakmu;
        eokikuciuqkyauum:
        $cewmysakgwuuigoy = $this->ukqioecasimmeygm();
        goto ykuqeyogsasokqis;
        zggweikegkcgkmma:
        $oammesyieqmwuwyi = ManipulateArray::get($ymiyawysimukkoso, self::ITEMS, []);
        goto yisoawmmammassqk;
        smkakiyekkqoggao:
        
        $ymiyawysimukkoso = $this->getPaginateItems($siykeiywomwwuoiw, [self::PAGE => $icwicymcioeyeyek["\x70\x61\147\145"]]);
        goto zggweikegkcgkmma;
        iuooqassskiyeemo:
        if ($icwicymcioeyeyek["\x69\144"]) {
            goto issgmmkcgesyeoas;
        }
        goto cquyuwsisgqscemm;
        yisoawmmammassqk:
        goto yeiicwscguyokwyu;
        goto gcsosokicycukoyc;
        wyyowcsciaqkuiuq:
        giuoqsumkimmuaya:
        goto imquwacukaswoyka;
        usmagcaocwiugqum:
        $oammesyieqmwuwyi = [];
        goto sikmqkecsiyciaei;
        ykuqeyogsasokqis:
        
        $siykeiywomwwuoiw = $siykeiywomwwuoiw->where($cewmysakgwuuigoy, "\154\x69\x6b\x65", "\x25{$icwicymcioeyeyek["\163\x65\x61\x72\x63\x68"]}\x25");
        goto mqaamqyoywyekiko;
        wmycwscioqackeig:
        $siykeiywomwwuoiw = $this->gqaysymikgeawkqa();
        goto wammkmaqucqagqww;
        wammkmaqucqagqww:
        if (!$siykeiywomwwuoiw) {
            goto yueosioyegouuwqo;
        }
        goto iuooqassskiyeemo;
        yyyyawaqcowsgqcs:
        $icwicymcioeyeyek = ManipulateFormat::omaawkkwwyesqwcc(ManipulateServer::ayueggmoqeeukqmq(), ["\x69\x64" => false, "\160\141\147\145" => 1, "\x61\x72\x67\163" => [], "\151\164\145\x6d\163" => [], "\163\145\141\x72\143\150" => null, "\x6d\141\x72\153\165\x70" => false, "\x74\145\155\x70\154\141\164\145\x5f\164\171\x70\x65" => "\x61\152\141\x78\137\162\145\x73\165\154\164"]);
        goto usmagcaocwiugqum;
        gcsosokicycukoyc:
        issgmmkcgesyeoas:
        goto seqammocqkyswaim;
        imykswegcuekqwio:
        if (!$qwcmueausqgiwigy) {
            goto qsyqcokomswykyso;
        }
        goto eokikuciuqkyauum;
        ekgkiioywougquka:
        foreach ($oammesyieqmwuwyi as $igqsaukqcqscimok) {
            goto swkeiggkawwgewuw;
            oaskqsoyesmmeaew:
            $pkyyagewkiyckmwy = $this->uikgwcuascgeissw($igqsaukqcqscimok);
            goto aacaoywsaqscgyua;
            gaiaucesmcqgqwac:
            $ceiwsaacewygcsqg = $this->kumuygiiqswoyasy();
            goto kuimgwmkcgcoecko;
            miigqygoawqmkkqm:
            if (!$icwicymcioeyeyek["\155\x61\x72\x6b\x75\x70"]) {
                goto ccyiggckemwgooco;
            }
            goto yywwaaiicukuwcao;
            aacaoywsaqscgyua:
            $sogksuscggsicmac = ["\111\x44" => $aokagokqyuysuksm, self::TEXT => $pkyyagewkiyckmwy, self::VALUE => $aokagokqyuysuksm];
            goto miigqygoawqmkkqm;
            swkeiggkawwgewuw:
            if (!$igqsaukqcqscimok) {
                goto umamqqwcoewcigew;
            }
            goto gaiaucesmcqgqwac;
            eykiuqsamowqykam:
            ccyiggckemwgooco:
            goto ywqouwqomiqwoquu;
            wmcucyuieqgqisis:
            mssaawaiaimogowg:
            goto qwsmiaegmcwuskwi;
            qcwkymcgqacaaywc:
            umamqqwcoewcigew:
            goto wmcucyuieqgqisis;
            kuimgwmkcgcoecko:
            $aokagokqyuysuksm = $igqsaukqcqscimok->{$ceiwsaacewygcsqg};
            goto oaskqsoyesmmeaew;
            ywqouwqomiqwoquu:
            $qeiakyocuggicwsy[$aokagokqyuysuksm] = $sogksuscggsicmac;
            goto qcwkymcgqacaaywc;
            yywwaaiicukuwcao:
            $sogksuscggsicmac["\155\x61\162\153\165\160"] = $this->iuygowkemiiwqmiw($icwicymcioeyeyek["\x74\145\x6d\160\x6c\x61\x74\x65\137\164\x79\x70\x65"], ["\x49\x44" => $aokagokqyuysuksm, self::TITLE => $pkyyagewkiyckmwy, "\x6f\142\x6a\145\x63\164\x5f\164\x79\x70\x65" => $this->oyeskqayoscwciem()->giiayuqckuiecosm()], ["\143\x6c\141\x73\x73" => self::class]);
            goto eykiuqsamowqykam;
            qwsmiaegmcwuskwi:
        }
        goto wyyowcsciaqkuiuq;
        seqammocqkyswaim:
        
        $oammesyieqmwuwyi[] = $siykeiywomwwuoiw->find($icwicymcioeyeyek["\151\x64"]);
        goto coskmuqsawiaeyqg;
        imquwacukaswoyka:
        $this->uaggqsoeugksgooc(true, $qeiakyocuggicwsy);
        goto smksoismyouykeoa;
        mqaamqyoywyekiko:
        qsyqcokomswykyso:
        goto smkakiyekkqoggao;
        umccwcqwkoiaakmu:
        yueosioyegouuwqo:
        goto ekgkiioywougquka;
        sikmqkecsiyciaei:
        $qeiakyocuggicwsy = [];
        goto wmycwscioqackeig;
        smksoismyouykeoa:
    }
    
    public function aeggeuqycwawueqy(Builder $siykeiywomwwuoiw, array $ywmkwiwkosakssii = []) : array
    {
        try {
            goto gcoeaokkagaaeuse;
            uwmcugkwqwcuqqsq:
            $oammesyieqmwuwyi = $this->cwgkcyyaymmsomqa($oammesyieqmwuwyi);
            goto cycasoiysmksuwqk;
            uagsgicwwcakecwq:
            
            $oammesyieqmwuwyi = $ymiyawysimukkoso->items();
            goto qocgmocqauaaekii;
            ikygockuuyimmmwk:
            if (!$ywmkwiwkosakssii["\146\151\154\164\145\x72\x5f\166\x61\x6c\x75\x65"]) {
                goto maeccckgcsaaumkw;
            }
            goto uwmcugkwqwcuqqsq;
            gysmigyakgaakeoy:
            $ksaameoqigiaoigg = $this->oosqweumiyeayasy($oammesyieqmwuwyi, $uuwmqqqiwksuaise, $qcugmkuyweqqyggk, $weyoqgcesqgeusiu);
            goto sueeqeioeiwkscao;
            gcoeaokkagaaeuse:
            $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\160\141\147\145\x5f\156\x61\x6d\x65" => self::PAGE, self::PAGE => 1, self::DEFAULT => [], self::COLUMNS => ["\x2a"], "\146\x69\154\164\145\162\137\166\141\154\x75\145" => true, self::ITEMS_PER_PAGE => ManipulateSetting::omkaowmygoqwsywq()]);
            goto kcqueaewmayywqeq;
            gsggsmmwcmkgyyss:
            $oammesyieqmwuwyi = ManipulateArray::get($ywmkwiwkosakssii, self::DEFAULT);
            goto yweucowesgsoewyc;
            muimagegskoisckc:
            
            $uuwmqqqiwksuaise = $ymiyawysimukkoso->total();
            goto yicaqocukqoauqgc;
            qocgmocqauaaekii:
            if ($oammesyieqmwuwyi) {
                goto qwgkwokcyocqiyee;
            }
            goto gsggsmmwcmkgyyss;
            kcqueaewmayywqeq:
            
            $ymiyawysimukkoso = $siykeiywomwwuoiw->paginate($ywmkwiwkosakssii[self::ITEMS_PER_PAGE] ?: 10, $ywmkwiwkosakssii["\x63\157\x6c\165\x6d\x6e\x73"] ?: ["\x2a"], $ywmkwiwkosakssii["\x70\x61\x67\145\x5f\156\141\x6d\145"] ?: "\x70\x61\x67\145", $ywmkwiwkosakssii[self::PAGE] ?: 1);
            goto uagsgicwwcakecwq;
            yicaqocukqoauqgc:
            
            $qcugmkuyweqqyggk = $ymiyawysimukkoso->lastPage();
            goto kmcygqkmwcgwamkw;
            cycasoiysmksuwqk:
            maeccckgcsaaumkw:
            goto muimagegskoisckc;
            kmcygqkmwcgwamkw:
            
            $weyoqgcesqgeusiu = $ymiyawysimukkoso->perPage();
            goto gysmigyakgaakeoy;
            yweucowesgsoewyc:
            qwgkwokcyocqiyee:
            goto ikygockuuyimmmwk;
            sueeqeioeiwkscao:
        } catch (Exception $wgaoewqkwgomoaai) {
            $ksaameoqigiaoigg = [];
        }
        return $ksaameoqigiaoigg;
    }
    
    public function oosqweumiyeayasy($oammesyieqmwuwyi = [], $uuwmqqqiwksuaise = 1, $ocqawgquwsqioses = 1, $weyoqgcesqgeusiu = 10) : array
    {
        return ["\160\x61\147\x69\156\141\164\x69\x6f\156" => ["\164\157\164\141\154" => $uuwmqqqiwksuaise, "\160\141\x67\x65\163" => $ocqawgquwsqioses, self::PER_PAGE => $weyoqgcesqgeusiu], self::ITEMS => $oammesyieqmwuwyi];
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
        uaiiuywoakccusge:
        if (!is_bool($vkkeimekwwkyiyyc)) {
            goto mmesoisgqucowwms;
        }
        goto ysiwoiqiaosqoikm;
        wassyiqsqasaoiau:
        $vkkeimekwwkyiyyc = $this->timestamps;
        goto uekueeyqaackuwao;
        qugsgsscqyikugyc:
        return $oyuikeusicgqgwak;
        goto gskaqcgccswmuqsy;
        ysiwoiqiaosqoikm:
        $vkkeimekwwkyiyyc = [self::CREATED_AT, self::UPDATED_AT];
        goto eieiwacwqkgsewai;
        ykuycowuguumseuu:
        icmsyimgycuocisu:
        goto qugsgsscqyikugyc;
        gigiwwouakeekoim:
        uieuouugckwokske:
        goto esuuweysgwuwcuue;
        gokwmwmaumiwscua:
        if (!is_array($vkkeimekwwkyiyyc)) {
            goto oeeasouoaaoaaemm;
        }
        goto eauiumeeyckucuyc;
        eieiwacwqkgsewai:
        mmesoisgqucowwms:
        goto gokwmwmaumiwscua;
        eauiumeeyckucuyc:
        foreach ($vkkeimekwwkyiyyc as $yiuogaeewyockeak) {
            goto akieeaeqiwugimie;
            woaoeyaowkuukkqm:
            $oyuikeusicgqgwak[] = $aaqqkgyougeiueyq;
            goto mmqkuymyyycywmqu;
            aemoyqueimayqcaw:
            uauuoyigkmqoasaq:
            goto woaoeyaowkuukkqm;
            ugqucegcucyyayga:
            switch ($yiuogaeewyockeak) {
                case self::CREATED_AT:
                    $aaqqkgyougeiueyq->gswweykyogmsyawy(__("\103\162\x65\141\164\x65\x64\x20\x41\x74", PR__CMN__FOUNDATION));
                    goto uauuoyigkmqoasaq;
                case self::UPDATED_AT:
                    $aaqqkgyougeiueyq->gswweykyogmsyawy(__("\125\160\144\141\x74\x65\x64\40\x41\164", PR__CMN__FOUNDATION));
                    goto uauuoyigkmqoasaq;
            }
            goto sequgigsgkqaikmq;
            mmqkuymyyycywmqu:
            seaiwkkgyyegiyug:
            goto iaockwkwaiqgeuyu;
            sequgigsgkqaikmq:
            kmwwqgiacsoksgcy:
            goto aemoyqueimayqcaw;
            akieeaeqiwugimie:
            $aaqqkgyougeiueyq = self::ceqawoymcymsaeqo($yiuogaeewyockeak)->jyumyyugiwwiqomk(5000);
            goto ugqucegcucyyayga;
            iaockwkwaiqgeuyu:
        }
        goto gigiwwouakeekoim;
        esuuweysgwuwcuue:
        oeeasouoaaoaaemm:
        goto ykuycowuguumseuu;
        uekueeyqaackuwao:
        if (!$vkkeimekwwkyiyyc) {
            goto icmsyimgycuocisu;
        }
        goto uaiiuywoakccusge;
        gskaqcgccswmuqsy:
    }
    public final function ewaqwooqoqmcoomi()
    {
        
        $this->oyeskqayoscwciem()->ckaemmoueyosqqkq(ManipulateArray::yaeiiwwyckwugsem($this->eucukwckumgiyyww()));
    }
    public final function cgamuwiqsgwsikkm()
    {
        goto mmusoowesqcmuqew;
        mmusoowesqcmuqew:
        
        if (ManipulateAjax::mcgoysmkqsqooceq()) {
            goto csskguekqcwcmocu;
        }
        goto wkwkeicwosmkcygc;
        yuoyeeuqqaockyqw:
        $yyksucsgisomecgg = $this->oyeskqayoscwciem();
        goto kygcymkakucoeock;
        qoameasiqwaqgmca:
        saycoceqywiekqsi:
        goto osoqssymqqoqcuky;
        ugcyukgoaiiysymc:
        $suaemuyiacqyugsm = ManipulateServer::get(self::PAGE);
        goto yuoyeeuqqaockyqw;
        amkcomscieegkygc:
        $uieukiskgwkouwyi = false;
        goto uugekiumuwemyuyc;
        iqukigoyiqgcggue:
        uccuykggugcmiyam:
        goto amkcomscieegkygc;
        uugekiumuwemyuyc:
        foreach ($yyksucsgisomecgg->aioqieywgykaaoec() as $qqomumygoacsmsie => $ywmkwiwkosakssii) {
            goto emqmqkeygumaasam;
            gooqkmwgsmseuiwq:
            if (!$ewgsciccscsweqik) {
                goto gimsiyauegmikyka;
            }
            goto oeosugomyqyekmuq;
            kcwyeqmysgqkoqcm:
            wisaekiyyweeemuy:
            goto wamgcqkaieummksu;
            asueqykmkoaimguq:
            $this->ecmiqywsauuoccwo($qqomumygoacsmsie, $ywmkwiwkosakssii);
            goto iyocimuyeemkaaso;
            wamgcqkaieummksu:
            switch ($qqomumygoacsmsie) {
                case "\x69\156\x64\x65\x78":
                    goto yuyiqaawwgaywgqo;
                    oegaywiwywuyksaq:
                    yqkyoaiwcyqeaqwu:
                    goto eyskqaccgeomqmyw;
                    qmiqicgscsuoyeqo:
                    if (!$ikugycsiyegwoiay) {
                        goto yqkyoaiwcyqeaqwu;
                    }
                    goto ysaumykuimqigeqa;
                    eyskqaccgeomqmyw:
                    goto eqmauwqqowsiwaue;
                    goto uiowwckamqucksim;
                    yuyiqaawwgaywgqo:
                    $ewgsciccscsweqik = new Index($this, $ywmkwiwkosakssii);
                    goto kkogaccoqmsmmkmo;
                    ysaumykuimqigeqa:
                    $this->icyamyikwyaaoqya("\x61\x64\144", $yyksucsgisomecgg->uikgwcuascgeissw("\141\x64\x64\137\156\145\x77\137\x69\164\145\155"), ["\150\162\x65\146" => $ikugycsiyegwoiay]);
                    goto oegaywiwywuyksaq;
                    kkogaccoqmsmmkmo:
                    $ikugycsiyegwoiay = $this->acsiseaeysswwqkw();
                    goto qmiqicgscsuoyeqo;
                    uiowwckamqucksim:
                case "\145\x64\x69\x74":
                case "\141\144\x64":
                    goto kmeekqukcecuscye;
                    mioqycmmeucswoms:
                    imsgusweocmiyygi:
                    goto mioaoacqueiyueak;
                    pssquaaiioygwqoq:
                    if (!$eaoumsseceiowgsk instanceof Form) {
                        goto wscikmsmwmocsqeu;
                    }
                    goto ucugeysomcyceyos;
                    oaseseemoaqcgqeu:
                    goto eqmauwqqowsiwaue;
                    goto kuymgsewmeoimeuq;
                    momgmqemgcasyuqq:
                    wscikmsmwmocsqeu:
                    goto qmuikumqukcyaeqa;
                    mioaoacqueiyueak:
                    qwueqigcisoogaec:
                    goto oaseseemoaqcgqeu;
                    csoeisssoumqqeoa:
                    if (!in_array($suaemuyiacqyugsm, [$ymqmyyeuycgmigyo, "\145\144\151\x74\137{$ymqmyyeuycgmigyo}", "\141\144\144\x5f{$ymqmyyeuycgmigyo}", "\163\150\157\167\x5f{$ymqmyyeuycgmigyo}"])) {
                        goto qwueqigcisoogaec;
                    }
                    goto weuueokkumksgaeo;
                    wgmeyycmqioioaqc:
                    $uieukiskgwkouwyi = true;
                    goto ykiyuciecskusaae;
                    ucugeysomcyceyos:
                    $eaoumsseceiowgsk->asumqyigwsqmyeoc($this);
                    goto momgmqemgcasyuqq;
                    igckskemqkqueukg:
                    $this->aygiawwcgymgyaya();
                    goto wgmeyycmqioioaqc;
                    weuueokkumksgaeo:
                    if ($uieukiskgwkouwyi) {
                        goto icawmkaswkmwicsa;
                    }
                    goto igckskemqkqueukg;
                    qmuikumqukcyaeqa:
                    icawmkaswkmwicsa:
                    goto keyiswqkmqqquosw;
                    imaiuooqwwokwemw:
                    $ewgsciccscsweqik = new Edit($this, $ywmkwiwkosakssii);
                    goto mioqycmmeucswoms;
                    keyiswqkmqqquosw:
                    if (!$this->ugmceccgwaaaigiy()) {
                        goto imsgusweocmiyygi;
                    }
                    goto imaiuooqwwokwemw;
                    ykiyuciecskusaae:
                    $eaoumsseceiowgsk = Form::symcgieuakksimmu($ymqmyyeuycgmigyo);
                    goto pssquaaiioygwqoq;
                    kmeekqukcecuscye:
                    $ymqmyyeuycgmigyo = $yyksucsgisomecgg->aakmagwggmkoiiyu();
                    goto csoeisssoumqqeoa;
                    kuymgsewmeoimeuq:
                case "\163\x68\x6f\x77":
                    $ewgsciccscsweqik = new Show($this, $ywmkwiwkosakssii);
                    goto eqmauwqqowsiwaue;
                default:
                    $ewgsciccscsweqik = new View($this, $ywmkwiwkosakssii);
                    goto eqmauwqqowsiwaue;
            }
            goto mwgaaiaswusakkaq;
            scccyaiaggeasgqg:
            if (!($ywmkwiwkosakssii instanceof View || is_subclass_of($ywmkwiwkosakssii, View::class))) {
                goto kisuswmyqsocukgk;
            }
            goto asueqykmkoaimguq;
            isaouwiaamimceeg:
            goto aosasoogesueygak;
            goto kcwyeqmysgqkoqcm;
            meegaqaesckqmyec:
            if (is_array($ywmkwiwkosakssii)) {
                goto wisaekiyyweeemuy;
            }
            goto scccyaiaggeasgqg;
            yskswskmsgoouyco:
            sqaowueaequoigsa:
            goto oaciskoioaecgwee;
            ugowqoisymsioeye:
            eqmauwqqowsiwaue:
            goto gooqkmwgsmseuiwq;
            mwgaaiaswusakkaq:
            waycokyiesmqgqcg:
            goto ugowqoisymsioeye;
            oeosugomyqyekmuq:
            $this->ecmiqywsauuoccwo($qqomumygoacsmsie, $ewgsciccscsweqik);
            goto emgssiqceagusgyg;
            emgssiqceagusgyg:
            gimsiyauegmikyka:
            goto ysusaysykymegguk;
            emqmqkeygumaasam:
            $ewgsciccscsweqik = null;
            goto meegaqaesckqmyec;
            iyocimuyeemkaaso:
            kisuswmyqsocukgk:
            goto isaouwiaamimceeg;
            ysusaysykymegguk:
            aosasoogesueygak:
            goto yskswskmsgoouyco;
            oaciskoioaecgwee:
        }
        goto qoameasiqwaqgmca;
        qkiqquymecyoouki:
        $orm_model = $this;
        goto iqukigoyiqgcggue;
        kygcymkakucoeock:
        if (!(strpos($suaemuyiacqyugsm, $yyksucsgisomecgg->aakmagwggmkoiiyu()) !== false)) {
            goto uccuykggugcmiyam;
        }
        goto qkiqquymecyoouki;
        wkwkeicwosmkcygc:
        global $orm_model;
        goto ugcyukgoaiiysymc;
        osoqssymqqoqcuky:
        csskguekqcwcmocu:
        goto qcywwqceiqogcoyo;
        qcywwqceiqogcoyo:
    }
    
    public function kssgsuewkcwgiksa() : array
    {
        return [];
    }
    
    public function hkwssiimkcysaiyo() : ?string
    {
        goto awikkaqmmuqkukma;
        cceyoumkiicaguio:
        giiucsyqgcooaima:
        goto yayykakkyeoieicm;
        yayykakkyeoieicm:
        return $qqomumygoacsmsie;
        goto yuiouamaogkkqmck;
        uckeuuaqimqamuyc:
        $qqomumygoacsmsie = str_replace("\x5f{$ymqmyyeuycgmigyo}", '', ManipulateServer::get(self::PAGE));
        goto mieeugiewckceagc;
        awikkaqmmuqkukma:
        $ymqmyyeuycgmigyo = $this->miwqiiqeegeqcwis();
        goto uckeuuaqimqamuyc;
        mieeugiewckceagc:
        if (!($qqomumygoacsmsie === $ymqmyyeuycgmigyo)) {
            goto giiucsyqgcooaima;
        }
        goto uqkqmseoeemyaqck;
        uqkqmseoeemyaqck:
        $qqomumygoacsmsie = "\151\x6e\x64\145\x78";
        goto cceyoumkiicaguio;
        yuiouamaogkkqmck:
    }
    
    public function uqiykqoyaqymcues() : bool
    {
        return $this->hkwssiimkcysaiyo() == "\145\144\x69\x74";
    }
    
    public function wkcuasmkgoscaiay() : bool
    {
        return $this->hkwssiimkcysaiyo() == "\163\x68\157\x77";
    }
    
    public function wmwguecgowcscues() : bool
    {
        return $this->hkwssiimkcysaiyo() == "\x69\156\144\145\170";
    }
    
    public final function aygiawwcgymgyaya() : ?array
    {
        goto ggaucuaykyuiikem;
        wmcmqmmcweecqmsw:
        return $this->ugmceccgwaaaigiy();
        goto aakoeuuosouyeemc;
        egikqoaqqegawugu:
        $qssskwiqeumgkago = $this->oyeskqayoscwciem()->aeosueemgsygqese();
        goto caaygouikgagsssc;
        ggaucuaykyuiikem:
        $ikgwqyuyckaewsow = $this->kssgsuewkcwgiksa();
        goto egikqoaqqegawugu;
        caaygouikgagsssc:
        foreach ($ikgwqyuyckaewsow as $uusmaiomayssaecw => $uiewakwqscemywuo) {
            goto gkoyqgogsukuowqi;
            gkoyqgogsukuowqi:
            $aaqqkgyougeiueyq = ManipulateArray::get($qssskwiqeumgkago, $uusmaiomayssaecw);
            goto sgikkoswwyesqomo;
            aayysiegiyweiyuu:
            $qqgeiaygkaoyccig = ["\x69\144" => $uusmaiomayssaecw, "\x6e\x61\155\145" => $aaqqkgyougeiueyq->qcgakseyaikigqco()];
            goto cksoeiwawiygyiyg;
            akwwuuiykscgicuw:
            $sqeykgyoooqysmca = ManipulateArray::get($uiewakwqscemywuo, "\164\x79\160\145");
            goto ueqsiwuwumoqgsck;
            ekwuycsiuqwycqea:
            cooeoemccqiyewks:
            goto iyaugygcsmqqqkmo;
            sgikkoswwyesqomo:
            if (!$aaqqkgyougeiueyq instanceof Field) {
                goto skaayekywasksoug;
            }
            goto aayysiegiyweiyuu;
            acsigwcaesyyoiie:
            qiawociayswicugw:
            goto aqaaqeucgoegeeuk;
            gysmmooawoeggaow:
            if (!in_array($eewwgseqamqiouyq, ["\145\156\x75\x6d"])) {
                goto qiawociayswicugw;
            }
            goto iyikuwuweqigiuey;
            gkwuewqmqeswqukg:
            kkacggiosquqagew:
            goto sagemooicmgceiug;
            aqaaqeucgoegeeuk:
            goto qimomesqamyyicmo;
            goto wycmcqaauqkgegau;
            ksawwekgswywwuwm:
            $uiewakwqscemywuo[self::TYPE] = $sqeykgyoooqysmca;
            goto yuqisiwgqacgmsym;
            scgmwokeuqwiekkk:
            if (in_array($eewwgseqamqiouyq, ["\164\145\x78\164"])) {
                goto kkacggiosquqagew;
            }
            goto ceusyscosamyaiws;
            cyqokqcacysioeyc:
            $uiewakwqscemywuo = ManipulateFormat::omaawkkwwyesqwcc($uiewakwqscemywuo, $qqgeiaygkaoyccig);
            goto akwwuuiykscgicuw;
            iyaugygcsmqqqkmo:
            goto ssesmiwwmsayksum;
            goto cieumoqayigkoocy;
            wywwieycqskuqcwc:
            switch ($eewwgseqamqiouyq) {
                case "\145\x6e\165\155":
                    goto bagkewioewygysea;
                    gwksywaoeowkesei:
                    goto sykuuisikqcwuaqu;
                    goto sgkwaiuukkaqyqki;
                    bagkewioewygysea:
                    if (!$aiowsaccomcoikus instanceof BSSelect) {
                        goto weiaigyyigkusucy;
                    }
                    goto mgieeyuyuoeccaog;
                    amgsicqmemeuuaem:
                    weiaigyyigkusucy:
                    goto gwksywaoeowkesei;
                    mgieeyuyuoeccaog:
                    $aiowsaccomcoikus->acauweqyyugwisqc($aaqqkgyougeiueyq->gkwkqmwweiawigae());
                    goto amgsicqmemeuuaem;
                    sgkwaiuukkaqyqki:
                case "\146\x6f\162\145\151\x67\156":
                    goto cauqmacqkssciwyq;
                    gusgywuaimwooawc:
                    $aiowsaccomcoikus->wkqyoukciomqiyew()->oeewiaacscgyamai($aaqqkgyougeiueyq->uecyuoauykiqqkey());
                    goto uugwoygiyecgymgw;
                    acmgueaoaaweiqqu:
                    goto sykuuisikqcwuaqu;
                    goto awaaowoqskgokwiy;
                    uugwoygiyecgymgw:
                    emagssesowicacoa:
                    goto acmgueaoaaweiqqu;
                    cauqmacqkssciwyq:
                    if (!$aiowsaccomcoikus instanceof BSSelect) {
                        goto emagssesowicacoa;
                    }
                    goto gusgywuaimwooawc;
                    awaaowoqskgokwiy:
            }
            goto gwyseusuceuwwccu;
            gwyseusuceuwwccu:
            mquyemuqcqeassqc:
            goto icouowaoycuuisqe;
            wcsysckgigeykkwy:
            if (in_array($eewwgseqamqiouyq, ["\163\x74\x72\x69\156\x67", "\142\151\147\x69\156\x74"])) {
                goto aescssauecumgwso;
            }
            goto scgmwokeuqwiekkk;
            wcekgciqeggiiwgk:
            goto augqweqsqioesmim;
            goto gkwuewqmqeswqukg;
            yggciikgkomgeqsc:
            $sqeykgyoooqysmca = "\143\150\x65\143\x6b\142\x6f\170";
            goto eoeiaccouaymakgm;
            cksoeiwawiygyiyg:
            $eewwgseqamqiouyq = $aaqqkgyougeiueyq->gueasuouwqysmomu();
            goto cyqokqcacysioeyc;
            wickgagwgqqsomum:
            if ($aiowsaccomcoikus) {
                goto uqiekawkwcegsumy;
            }
            goto wmwgeoequuwwwywa;
            sagemooicmgceiug:
            $sqeykgyoooqysmca = "\x74\145\170\x74\x61\x72\145\x61";
            goto uqcwyyiykmwygeau;
            uqcwyyiykmwygeau:
            augqweqsqioesmim:
            goto yeiokcoikcysyimu;
            gsusqquicmukegcs:
            if (in_array($eewwgseqamqiouyq, ["\142\157\x6f\154\x65\x61\156", "\164\x69\156\x79\151\x6e\x74"])) {
                goto qcceyyqiuiqcyqqm;
            }
            goto wcsysckgigeykkwy;
            umcyeiusoakewyaa:
            gqyyccceswkqcmaa:
            goto ksawwekgswywwuwm;
            iyceygqsmokgmams:
            qimomesqamyyicmo:
            goto wcekgciqeggiiwgk;
            ueqsiwuwumoqgsck:
            if ($sqeykgyoooqysmca) {
                goto gqyyccceswkqcmaa;
            }
            goto iikgiaocummweiga;
            wmwgeoequuwwwywa:
            throw new UnexpectedValueException("{$uusmaiomayssaecw}\40\x69\163\40\x6e\x6f\164\x20\x61\x20\166\x61\x6c\x69\144\x20\146\151\x65\x6c\144\56");
            goto uqugcugeomqakcqo;
            usmuqsuwuueogimc:
            $sqeykgyoooqysmca = "\142\163\163\x65\x6c\145\x63\164";
            goto koiiaewwicsckseu;
            coogyackikgmecic:
            wsckacayikksiswo:
            goto iqwsqykoueqyyomy;
            ocmwuquguuqigose:
            $this->qaqsggqyouammqgm($aiowsaccomcoikus);
            goto kmqusaiaiogecyiy;
            eoeiaccouaymakgm:
            ssesmiwwmsayksum:
            goto owaimkmgemoqewmm;
            iyikuwuweqigiuey:
            $sqeykgyoooqysmca = "\x62\x73\x73\x65\154\145\x63\164";
            goto acsigwcaesyyoiie;
            iikgiaocummweiga:
            if ($aaqqkgyougeiueyq instanceof Foreign) {
                goto qkwckeqowgaokkuy;
            }
            goto gsusqquicmukegcs;
            ysoqeuugiuswykyu:
            qkwckeqowgaokkuy:
            goto usmuqsuwuueogimc;
            cieumoqayigkoocy:
            qcceyyqiuiqcyqqm:
            goto yggciikgkomgeqsc;
            wycmcqaauqkgegau:
            ngagwiymmmycgscu:
            goto qcweoyigoaeacsow;
            yeiokcoikcysyimu:
            goto cooeoemccqiyewks;
            goto kkmwwqyesmkescyg;
            kkmwwqyesmkescyg:
            aescssauecumgwso:
            goto uamuuwkyuqomqyuy;
            uamuuwkyuqomqyuy:
            $sqeykgyoooqysmca = "\164\145\170\x74";
            goto ekwuycsiuqwycqea;
            ceusyscosamyaiws:
            if (in_array($eewwgseqamqiouyq, ["\144\x61\x74\145", "\x64\141\x74\x65\x74\151\155\x65"])) {
                goto ngagwiymmmycgscu;
            }
            goto gysmmooawoeggaow;
            owaimkmgemoqewmm:
            goto kqkymieyyqaoeymw;
            goto ysoqeuugiuswykyu;
            qmoisuweiskkekca:
            uqiekawkwcegsumy:
            goto wywwieycqskuqcwc;
            icouowaoycuuisqe:
            sykuuisikqcwuaqu:
            goto ocmwuquguuqigose;
            yuqisiwgqacgmsym:
            $aiowsaccomcoikus = MetaBox::okmsgamiiemyesao($uiewakwqscemywuo);
            goto wickgagwgqqsomum;
            swckikycciugciqq:
            skaayekywasksoug:
            goto coogyackikgmecic;
            qcweoyigoaeacsow:
            $sqeykgyoooqysmca = "\x64\141\x74\x65";
            goto iyceygqsmokgmams;
            kmqusaiaiogecyiy:
            kgikoagqwkuocesg:
            goto swckikycciugciqq;
            koiiaewwicsckseu:
            kqkymieyyqaoeymw:
            goto umcyeiusoakewyaa;
            uqugcugeomqakcqo:
            goto kgikoagqwkuocesg;
            goto qmoisuweiskkekca;
            iqwsqykoueqyyomy:
        }
        goto yoaewquyogiimyic;
        yoaewquyogiimyic:
        mmwqwowqcaseyyki:
        goto wmcmqmmcweecqmsw;
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
        gemwkqocygssmequ:
        esqiocgueosoksyq:
        goto cqaeiesyciakcagu;
        csggsqueaqmwgwkk:
        $qssskwiqeumgkago = $this->oyeskqayoscwciem()->aeosueemgsygqese();
        goto sescaagayikiggyq;
        egmocemomockemia:
        qsmoiwqcuamyuwyu:
        goto gemwkqocygssmequ;
        sescaagayikiggyq:
        if (!($qssskwiqeumgkago && is_array($qssskwiqeumgkago))) {
            goto esqiocgueosoksyq;
        }
        goto wwwggoemicgwwasy;
        cqaeiesyciakcagu:
        return $wkkweuacukumqmya;
        goto acisycocoswkekik;
        wwwggoemicgwwasy:
        foreach ($qssskwiqeumgkago as $aiowsaccomcoikus) {
            goto saekesoeysauokkq;
            sqmiymiemeegegic:
            cicegcoqyuoggiwy:
            goto csqakuuiyywassgw;
            meseuuacmkuowqau:
            ugcwqacogqoswyse:
            goto sqmiymiemeegegic;
            saekesoeysauokkq:
            if (!($aiowsaccomcoikus instanceof Field && $aiowsaccomcoikus->uwaascqoguwkwiaw())) {
                goto ugcwqacogqoswyse;
            }
            goto wycuyiukyceccaow;
            wycuyiukyceccaow:
            $wkkweuacukumqmya[$aiowsaccomcoikus->mwikyscisascoeea()] = $aiowsaccomcoikus->qcgakseyaikigqco();
            goto meseuuacmkuowqau;
            csqakuuiyywassgw:
        }
        goto egmocemomockemia;
        acisycocoswkekik:
    }
    
    public function qeowcucuoaqyqwuw($umwgoasiowmqcumw) : array
    {
        goto gwayeyymscmgwqkg;
        ckuagmyqkyoeeaeu:
        foreach ($umwgoasiowmqcumw as $qqomumygoacsmsie => $icwicymcioeyeyek) {
            goto sccqekuwywiisami;
            eokcuuwqaomkooag:
            $gaeqamemwmwsyukm = ManipulateArray::get($icwicymcioeyeyek, "\x63\x6f\165\x6e\x74", 0);
            goto qgqasacusgwmoegy;
            qgqasacusgwmoegy:
            if ($meqocwsecsywiiqs) {
                goto ycweseaccsomkioa;
            }
            goto qscqkykqskqmisgw;
            sccqekuwywiisami:
            $meqocwsecsywiiqs = ManipulateArray::get($icwicymcioeyeyek, "\x74\x69\x74\x6c\145", false);
            goto eokcuuwqaomkooag;
            qscqkykqskqmisgw:
            ManipulateArray::unset($cqcsaaswaciweiie, $qqomumygoacsmsie);
            goto ksqgwiceoomkuuiy;
            swmgucaogosuueug:
            $geecqyososceumsk = DecoratorQuery::oiamiqcuyksmmomm([self::ORM_FILTER_BY, self::ORM_FILTER_VALUE], $geecqyososceumsk);
            goto uwsmcsiiisuocgwg;
            ksqgwiceoomkuuiy:
            goto ciwggusyecgskagy;
            goto gkoiyaagwgycysim;
            suaymckwwgmugsaa:
            cewyaqiqmmwmauce:
            goto wsqoskqgyooqeyga;
            syeeegeygawwqiuu:
            kucqcqeesaiacekm:
            goto iuieskocqoqkkwus;
            ysssquieawyysiyc:
            $geecqyososceumsk = ManipulateServer::ekcymmyqoceukosc(true);
            goto yomoeykcqyukscmi;
            uekkkmwciocmosgg:
            scyqmcegwikkoesw:
            goto ecqeqquikuomwgsu;
            gkoiyaagwgycysim:
            ycweseaccsomkioa:
            goto ysssquieawyysiyc;
            uwsmcsiiisuocgwg:
            goto scyqmcegwikkoesw;
            goto suaymckwwgmugsaa;
            yomoeykcqyukscmi:
            if ($qqomumygoacsmsie !== "\141\154\154") {
                goto cewyaqiqmmwmauce;
            }
            goto swmgucaogosuueug;
            igscwycsqsckmcuq:
            $umwgoasiowmqcumw[$qqomumygoacsmsie] = ManipulateHTML::qgsekwygcgawekeq("\141", ["\x68\x72\x65\146" => $geecqyososceumsk, "\143\x6c\x61\163\163" => "\157\x72\x6d\55\x66\151\154\x74\145\x72\55\154\x69\x6e\153" . ($yeacayasgueouoqc ? "\40\x63\165\162\162\145\x6e\x74" : '')], true, sprintf("\x25\x73\x20\x28\x25\x73\51", $meqocwsecsywiiqs, ManipulateHTML::gmqyuaqwgiayskei($this->wusgwkaycokeckqs($gaeqamemwmwsyukm))));
            goto wmcaecgwmmwuuqsq;
            wmcaecgwmmwuuqsq:
            $momcykaoccoymeig++;
            goto ycskuioouwwemgke;
            wsqoskqgyooqeyga:
            $geecqyososceumsk = DecoratorQuery::yqymaqmqiqmmmsoo([self::ORM_FILTER_BY => $ymaogssqccumcyqa, self::ORM_FILTER_VALUE => $qqomumygoacsmsie], $geecqyososceumsk);
            goto uekkkmwciocmosgg;
            ecqeqquikuomwgsu:
            $yeacayasgueouoqc = $scsyuucsumiwkqqc ? $scsyuucsumiwkqqc === $qqomumygoacsmsie : $momcykaoccoymeig === 1;
            goto igscwycsqsckmcuq;
            ycskuioouwwemgke:
            ciwggusyecgskagy:
            goto syeeegeygawwqiuu;
            iuieskocqoqkkwus:
        }
        goto cqwgmwqiakmgyuee;
        ksgwgcguemcescqg:
        isiqkeyciyqgkayu:
        goto kiwiesucugwoiuum;
        gwayeyymscmgwqkg:
        $momcykaoccoymeig = 1;
        goto caoikoqmyeqsqqqe;
        caoikoqmyeqsqqqe:
        $ymaogssqccumcyqa = $this->aakiaoueckoiyoew();
        goto moimkkmkooeiyisc;
        kiwiesucugwoiuum:
        return $umwgoasiowmqcumw;
        goto cmagycousakeeaei;
        kcomueysiyyqagus:
        $umwgoasiowmqcumw = ["\x61\154\x6c" => ["\x74\151\x74\x6c\x65" => __("\x41\154\x6c", PR__CMN__FOUNDATION), "\143\157\x75\156\164" => array_sum(array_map(function ($mokouoooiwsmcmiu) {
            return $mokouoooiwsmcmiu["\x63\157\165\156\164"];
        }, $umwgoasiowmqcumw))]] + $umwgoasiowmqcumw;
        goto ckuagmyqkyoeeaeu;
        amoygaweoeymiuiy:
        if (!(is_array($umwgoasiowmqcumw) && $umwgoasiowmqcumw)) {
            goto isiqkeyciyqgkayu;
        }
        goto kcomueysiyyqagus;
        cqwgmwqiakmgyuee:
        aaiymmkqmocgakei:
        goto ksgwgcguemcescqg;
        moimkkmkooeiyisc:
        $scsyuucsumiwkqqc = ManipulateServer::get("\x6f\162\x6d\137\x66\151\x6c\164\145\162\x5f\166\x61\x6c\165\x65");
        goto amoygaweoeymiuiy;
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
        ggkoiouwecyiosym:
        
        $aasascamegmwqmqk = $this->getTable();
        goto egosmwkuuikwqeak;
        eymiqwsygoowowuu:
        return $uusmaiomayssaecw;
        goto keqagmaiqqsgkmso;
        eosmwawqaocwgccq:
        eekeksysqeuoskoo:
        goto eymiqwsygoowowuu;
        ossyqogewmggmaoc:
        if (!$iqoeaggekweuwcgw) {
            goto eekeksysqeuoskoo;
        }
        goto ggkoiouwecyiosym;
        okemsmmeceoeaswi:
        $uusmaiomayssaecw = $this->primaryKey;
        goto ossyqogewmggmaoc;
        egosmwkuuikwqeak:
        $uusmaiomayssaecw = "{$aasascamegmwqmqk}\x2e{$uusmaiomayssaecw}";
        goto eosmwawqaocwgccq;
        keqagmaiqqsgkmso:
    }
    
    public function gqaysymikgeawkqa() : ?Builder
    {
        goto qosckaqceoumcasm;
        qosckaqceoumcasm:
        $siykeiywomwwuoiw = null;
        goto gmcqkoqwkiawaikw;
        kgeggsckmgcgwcqm:
        return $siykeiywomwwuoiw;
        goto qimieogaimwmukmu;
        gmcqkoqwkiawaikw:
        try {
            goto uiwswesymogiwsgg;
            qggiogeyowcoaiqy:
            ekgsawcuswowmosm:
            goto ekgcquiosyesyism;
            euogcyyayioyyiyg:
            
            $siykeiywomwwuoiw = $this->getConnection()->table($aasascamegmwqmqk);
            goto wkcwuemioaiyouek;
            usgmimcwygsmcioa:
            $siykeiywomwwuoiw = null;
            goto qggiogeyowcoaiqy;
            wkcwuemioaiyouek:
            if (!($siykeiywomwwuoiw && !$siykeiywomwwuoiw->exists())) {
                goto ekgsawcuswowmosm;
            }
            goto usgmimcwygsmcioa;
            uiwswesymogiwsgg:
            $aasascamegmwqmqk = $this->miwqiiqeegeqcwis();
            goto euogcyyayioyyiyg;
            ekgcquiosyesyism:
        } catch (Exception $wgaoewqkwgomoaai) {
            $this->saqqeqmcyyoeqici($this->kyacickkomkioeyu($wgaoewqkwgomoaai));
        }
        goto kgeggsckmgcgwcqm;
        qimieogaimwmukmu:
    }
    
    public function feccsgmuogywweio($mksyucucyswaukig)
    {
        goto koawwmccgquqqmwa;
        iuaommmyqoecmuss:
        return $this->cyyiiykmaeuqqgok($aokagokqyuysuksm);
        goto ikeyoyoigsuouokm;
        eqieeecackceeweg:
        $aokagokqyuysuksm = $mksyucucyswaukig;
        goto ygywkqgioiscmuie;
        cycyaqqawmwiywwe:
        goto wogokmgkgkumqcws;
        goto ckowiuagwmsqmiqc;
        ygywkqgioiscmuie:
        wogokmgkgkumqcws:
        goto iuaommmyqoecmuss;
        ckowiuagwmsqmiqc:
        gmymycwymqkuiisi:
        goto eqieeecackceeweg;
        koawwmccgquqqmwa:
        if (is_numeric($mksyucucyswaukig)) {
            goto gmymycwymqkuiisi;
        }
        goto cokacyaayuueyuuu;
        cokacyaayuueyuuu:
        $aokagokqyuysuksm = ManipulateArray::get($mksyucucyswaukig, $this->kumuygiiqswoyasy());
        goto cycyaqqawmwiywwe;
        ikeyoyoigsuouokm:
    }
    
    public function getConnection() : Database
    {
        goto cuwkqgemkmuuegkc;
        wemmseueskwkcwou:
        if (!($mgcmmwqwguicsews instanceof Database && !$mgcmmwqwguicsews->aakmagwggmkoiiyu())) {
            goto eecgougegqassgyq;
        }
        goto cceakqgoysacqwmc;
        ceeqguaoysyaasey:
        return $mgcmmwqwguicsews;
        goto ekmqouqsgsaukeiq;
        cuwkqgemkmuuegkc:
        $ymqmyyeuycgmigyo = $this->miwqiiqeegeqcwis();
        goto oyicskieeaewgwce;
        cceakqgoysacqwmc:
        $mgcmmwqwguicsews->wcweamocuicuusky("\x6e\141\x6d\x65", $ymqmyyeuycgmigyo);
        goto scaimkkukmgoeaya;
        oyicskieeaewgwce:
        $mgcmmwqwguicsews = Database::symcgieuakksimmu($ymqmyyeuycgmigyo);
        goto wemmseueskwkcwou;
        scaimkkukmgoeaya:
        eecgougegqassgyq:
        goto ceeqguaoysyaasey;
        ekmqouqsgsaukeiq:
    }
    public function ckgmycmaukqgkosk()
    {
        goto ewooakeuigcyuemu;
        wceiuqaeywmgscww:
        if ($yyksucsgisomecgg->masyeqmaiuqwosei()) {
            goto cugkqmkuyuwwqcec;
        }
        goto kacgiqwewyeeyyam;
        ewooakeuigcyuemu:
        $yyksucsgisomecgg = $this->oyeskqayoscwciem();
        goto wceiuqaeywmgscww;
        kacgiqwewyeeyyam:
        $yyksucsgisomecgg->usuqmwksoeaayaig(ManipulateString::kwuyaykukcmaqggg(ManipulateString::mkwcwqkqeqkqyggc(self::uqggkiomyiceyooa())));
        goto qwogeocemuaaasiw;
        ywmuoigomwwigqea:
        $yyksucsgisomecgg->iqoguoscqueomqsk(ORM::symcgieuakksimmu()->homgcsoocssgwgym($yyksucsgisomecgg->ggqekkkocygywmoy(), $yyksucsgisomecgg->cwueseysoqeewkao(), $yyksucsgisomecgg->iemucaoqaisiwise()));
        goto cgqkqmiekaageyka;
        qwogeocemuaaasiw:
        cugkqmkuyuwwqcec:
        goto ywmuoigomwwigqea;
        cgqkqmiekaageyka:
    }
    
    public function oyeskqayoscwciem() : Register
    {
        goto uomwseyiqckeewgo;
        uomwseyiqckeewgo:
        if ($this->register) {
            goto goimywgsweeqsewo;
        }
        goto cqyiukmuqceicqwa;
        iuieyqacggsykgus:
        return $this->register;
        goto wamkaouokmyoyuqu;
        kmocamaieycogugg:
        goimywgsweeqsewo:
        goto iuieyqacggsykgus;
        cqyiukmuqceicqwa:
        $this->register = new Register();
        goto kmocamaieycogugg;
        wamkaouokmyoyuqu:
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
        goto sickakeesgcgwisw;
        sickakeesgcgwisw:
        $yciaosuiyeieceug = false;
        goto wmqegaqemgiggsce;
        cqeceeagmysoyoqg:
        if (!$yskommoiekkwiggo instanceof Edit) {
            goto wwskeewecyukygeg;
        }
        goto wggeggkumkwaaesu;
        qcuywygiosoqycaa:
        return $yciaosuiyeieceug;
        goto coaysoeouasaekie;
        gkyguugwwoaqoigy:
        eywcgeccsmquugsw:
        goto kmikwoqwigwuyqae;
        wggeggkumkwaaesu:
        
        if (!DecoratorUser::scmcyesmmikkucie($this->oyeskqayoscwciem()->gwaeeegmgggawiyi("\145\x64\151\164\137\151\164\x65\x6d\x73"))) {
            goto eywcgeccsmquugsw;
        }
        goto uauqmaeueukkmuwa;
        uauqmaeueukkmuwa:
        $yciaosuiyeieceug = $yskommoiekkwiggo;
        goto gkyguugwwoaqoigy;
        kmikwoqwigwuyqae:
        wwskeewecyukygeg:
        goto qcuywygiosoqycaa;
        wmqegaqemgiggsce:
        $yskommoiekkwiggo = $this->cgswceaawqgeskua("\x65\144\151\164");
        goto cqeceeagmysoyoqg;
        coaysoeouasaekie:
    }
    
    public function qqakqoekigkcmyek()
    {
        goto uusyaguomkqeakkm;
        jweeyemwqyqmyuys:
        $yciaosuiyeieceug = $kmsymkkmiwykeyqi;
        goto mgiwqumikeuieocg;
        yegkgccwomcgkumi:
        return $yciaosuiyeieceug;
        goto qikmwaessamuueoe;
        uusyaguomkqeakkm:
        $yciaosuiyeieceug = false;
        goto qoigaauuokyusmgk;
        mgiwqumikeuieocg:
        ykymogaqkgaiiiyi:
        goto yegkgccwomcgkumi;
        qoigaauuokyusmgk:
        $kmsymkkmiwykeyqi = $this->cgswceaawqgeskua("\163\150\157\x77");
        goto qsyyeoosgigiiequ;
        qsyyeoosgigiiequ:
        if (!$kmsymkkmiwykeyqi instanceof Show) {
            goto ykymogaqkgaiiiyi;
        }
        goto jweeyemwqyqmyuys;
        qikmwaessamuueoe:
    }
    
    public function mukyysqkgaimcygs() : bool
    {
        $gkswkiicccswksiq = $this->oyeskqayoscwciem()->gwaeeegmgggawiyi("\x64\145\154\145\164\x65\x5f\151\164\x65\x6d\163");
        return $this->gqigeuumsosmamqs() && DecoratorUser::scmcyesmmikkucie($gkswkiicccswksiq);
    }
    
    public function comogmawyoiquwis() : ?string
    {
        goto imgagmqusgiqissi;
        kqsyqwwscwoswsgk:
        return $iwywmkygwewiamwm;
        goto yemuiyokmqoqckwu;
        sqyceswygksmmqqa:
        aeekgeqawgsmgiqw:
        goto kqsyqwwscwoswsgk;
        cesaaiguwciccysi:
        if (!$qqomumygoacsmsie instanceof Index) {
            goto aeekgeqawgsmgiqw;
        }
        goto wskccugoccagaqcw;
        scaciowogmayswms:
        $qqomumygoacsmsie = $this->cgswceaawqgeskua("\x69\156\144\145\170");
        goto cesaaiguwciccysi;
        wskccugoccagaqcw:
        $iwywmkygwewiamwm = $qqomumygoacsmsie->qmgcisuuikgmqcsu();
        goto sqyceswygksmmqqa;
        imgagmqusgiqissi:
        $iwywmkygwewiamwm = null;
        goto scaciowogmayswms;
        yemuiyokmqoqckwu:
    }
    
    public function yyykkcyiksewsoqy($kqokimuosyuyyucg = 0) : ?string
    {
        goto kywmiquiiwmwgooy;
        wsyeqyekimescwkq:
        return $iwywmkygwewiamwm;
        goto gyceukwoyaasuwik;
        qsycguggqkgywgaq:
        qocmmyskykeuwsae:
        goto wsyeqyekimescwkq;
        kywmiquiiwmwgooy:
        $iwywmkygwewiamwm = null;
        goto syquiiogeymgicuy;
        yquysamwsoyyqcya:
        $iwywmkygwewiamwm = DecoratorQuery::yqymaqmqiqmmmsoo([$this->kumuygiiqswoyasy() => $kqokimuosyuyyucg], $qqomumygoacsmsie->qmgcisuuikgmqcsu());
        goto qsycguggqkgywgaq;
        syquiiogeymgicuy:
        if (!($qqomumygoacsmsie = $this->ggwyugcggywuwcse())) {
            goto qocmmyskykeuwsae;
        }
        goto yquysamwsoyyqcya;
        gyceukwoyaasuwik:
    }
    
    public function uesweuocqoywoyms($kqokimuosyuyyucg = 0) : ?string
    {
        goto iiyggeuemwuwqiey;
        iiyggeuemwuwqiey:
        $iwywmkygwewiamwm = null;
        goto omeookmiomoieeee;
        ggoyigsoyccmscum:
        iiyamaquicwswcyu:
        goto aigeoggkowgwwwqg;
        omeookmiomoieeee:
        if (!($qqomumygoacsmsie = $this->qqakqoekigkcmyek())) {
            goto iiyamaquicwswcyu;
        }
        goto agokkauammisaqke;
        aigeoggkowgwwwqg:
        return $iwywmkygwewiamwm;
        goto pscqogmyseiwuqye;
        agokkauammisaqke:
        $iwywmkygwewiamwm = DecoratorQuery::yqymaqmqiqmmmsoo([$this->kumuygiiqswoyasy() => $kqokimuosyuyyucg], $qqomumygoacsmsie->qmgcisuuikgmqcsu());
        goto ggoyigsoyccmscum;
        pscqogmyseiwuqye:
    }
    
    public function cgccmsewskigcuig($kqokimuosyuyyucg = 0) : ?string
    {
        goto ayggiggmcqckqwom;
        mgscyaiwekksacco:
        goto muqeeocooyiosouk;
        goto sykwygmouoikuyws;
        ysiuiuqawkaaamus:
        ogywsgmqcgioaoqk:
        goto qooykiaywemimcke;
        mowauiysyiciqaaa:
        $qqomumygoacsmsie = $this->cgswceaawqgeskua("\x69\x6e\x64\145\x78");
        goto msuyygiskkumokec;
        dwciioycickkwawq:
        $iwywmkygwewiamwm = DecoratorQuery::yqymaqmqiqmmmsoo(["\157\x72\x6d\55\141\143\x74\x69\x6f\x6e" => "\144\145\154\x65\x74\145", $ceiwsaacewygcsqg => $kqokimuosyuyyucg], $iwywmkygwewiamwm);
        goto yoociieskmuucgms;
        sykwygmouoikuyws:
        cyyecekuwygaqwcy:
        goto keiciayiyqsemsys;
        iyeswqeqcsmsoueq:
        if ($qqomumygoacsmsie->qcsgmgoukiouuscw()) {
            goto cyyecekuwygaqwcy;
        }
        goto eiekcqosmyqmwqag;
        ggkgseywksemuogc:
        $ceiwsaacewygcsqg = $this->kumuygiiqswoyasy();
        goto iyeswqeqcsmsoueq;
        ayggiggmcqckqwom:
        $iwywmkygwewiamwm = null;
        goto wiiyageyqowkmmko;
        yoociieskmuucgms:
        wcagqkquasswioos:
        goto ysiuiuqawkaaamus;
        keiciayiyqsemsys:
        $iwywmkygwewiamwm = ManipulateServer::ekcymmyqoceukosc(true);
        goto ggoquyyseekiwukq;
        wiiyageyqowkmmko:
        if (!$kqokimuosyuyyucg) {
            goto ogywsgmqcgioaoqk;
        }
        goto mowauiysyiciqaaa;
        ggoquyyseekiwukq:
        muqeeocooyiosouk:
        goto dwciioycickkwawq;
        eiekcqosmyqmwqag:
        $iwywmkygwewiamwm = $qqomumygoacsmsie->qmgcisuuikgmqcsu();
        goto mgscyaiwekksacco;
        msuyygiskkumokec:
        if (!($qqomumygoacsmsie instanceof Index && $this->mukyysqkgaimcygs())) {
            goto wcagqkquasswioos;
        }
        goto ggkgseywksemuogc;
        qooykiaywemimcke:
        return $iwywmkygwewiamwm;
        goto okceyucmoigyokyy;
        okceyucmoigyokyy:
    }
    
    public function setCreatedAt($eqgoocgaqwqcimie)
    {
        $this->{static::CREATED_AT} = current_time("\155\171\x73\x71\x6c");
    }
    
    public function setUpdatedAt($eqgoocgaqwqcimie)
    {
        $this->{static::UPDATED_AT} = current_time("\155\171\163\161\154");
    }
    
    public function acsiseaeysswwqkw() : ?string
    {
        goto iyakeemwaiqeueme;
        ouuuacyewgmocwsc:
        $gkswkiicccswksiq = $this->oyeskqayoscwciem()->gwaeeegmgggawiyi("\143\162\x65\141\164\145\x5f\151\164\145\x6d\x73");
        goto jgaoqcmiqagoiuko;
        sqokyowsuawgkusy:
        return $iwywmkygwewiamwm;
        goto iyekgiaayeasoggw;
        iyakeemwaiqeueme:
        $iwywmkygwewiamwm = null;
        goto ouuuacyewgmocwsc;
        oycikycyewimcaew:
        uecmkggsueeiyawk:
        goto sqokyowsuawgkusy;
        wimggeysyugwwkca:
        $iwywmkygwewiamwm = $ecmiqywsauuoccwo->qmgcisuuikgmqcsu();
        goto oycikycyewimcaew;
        iekesyeicomwcuas:
        if (!($ecmiqywsauuoccwo instanceof View && DecoratorUser::scmcyesmmikkucie($gkswkiicccswksiq))) {
            goto uecmkggsueeiyawk;
        }
        goto wimggeysyugwwkca;
        jgaoqcmiqagoiuko:
        $ecmiqywsauuoccwo = $this->cgswceaawqgeskua("\x61\x64\144");
        goto iekesyeicomwcuas;
        iyekgiaayeasoggw:
    }
    
    public function sgcuwcowgwimgsgk($aokagokqyuysuksm, $cwwowqyuwccuykom = false)
    {
        goto yaokowamwsaggege;
        yaokowamwsaggege:
        $mksyucucyswaukig = $this->cyyiiykmaeuqqgok($aokagokqyuysuksm);
        goto qwqwwywiiuqayaca;
        isssemmuiiaewiwi:
        ogqaueuweieisowc:
        goto oiguycsiaweycioe;
        miiegqgiuamasook:
        if (!$yciaosuiyeieceug) {
            goto akycayowsciesmug;
        }
        goto eskmkooukwwieuke;
        muaigwwqgsgowgkk:
        try {
            goto aikukgimkamkgwsu;
            ykcymsoikgqeaukw:
            mwkcmgksoyycumos:
            goto akcqguucucewaqws;
            ukcukckucsyaggmw:
            
            if ($mksyucucyswaukig->delete()) {
                goto cwsgieeaugwciiwu;
            }
            goto caskqicqwmyuugku;
            oiueawimuggcqgky:
            cwsgieeaugwciiwu:
            goto qqiwcikkcgmmakow;
            wksssmewgogkacei:
            wiigoqowismumcsm:
            goto ykcymsoikgqeaukw;
            assyuumuuuocycyy:
            goto wiigoqowismumcsm;
            goto oiueawimuggcqgky;
            aikukgimkamkgwsu:
            if (!$this->ueaumcyiwwkeueag($aokagokqyuysuksm, $mksyucucyswaukig)) {
                goto mwkcmgksoyycumos;
            }
            goto ukcukckucsyaggmw;
            qqiwcikkcgmmakow:
            $kigowwqauiumummw = $mksyucucyswaukig;
            goto wgcuewwyieoqaoek;
            wgcuewwyieoqaoek:
            $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\157\x62\x6a\x65\143\164\x5f\x64\x65\x6c\x65\x74\x65\144", self::class), $aokagokqyuysuksm);
            goto wksssmewgogkacei;
            caskqicqwmyuugku:
            $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\146\x61\x69\x6c\145\x64\x5f\x64\145\154\x65\x74\145\x5f\157\x62\152\x65\143\x74", self::class), $aokagokqyuysuksm);
            goto assyuumuuuocycyy;
            akcqguucucewaqws:
        } catch (Exception $wgaoewqkwgomoaai) {
            $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\146\x61\x69\154\x65\144\137\144\x65\154\x65\164\x65\x5f\157\142\152\145\143\164", self::class), $aokagokqyuysuksm);
        }
        goto imgyqyeaoawqscae;
        ggcayqaayysyqmia:
        $yciaosuiyeieceug = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\143\x61\156\137\144\145\x6c\145\164\145\x5f\x6f\142\152\x65\143\164", self::class), true, $mksyucucyswaukig, $cwwowqyuwccuykom);
        goto miiegqgiuamasook;
        waiqmywasoeggkce:
        if (!$mksyucucyswaukig instanceof Model) {
            goto ogqaueuweieisowc;
        }
        goto ggcayqaayysyqmia;
        oiguycsiaweycioe:
        return $kigowwqauiumummw;
        goto ueeowyociayoygsa;
        qwqwwywiiuqayaca:
        $kigowwqauiumummw = false;
        goto waiqmywasoeggkce;
        imgyqyeaoawqscae:
        akycayowsciesmug:
        goto isssemmuiiaewiwi;
        eskmkooukwwieuke:
        $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\142\x65\146\157\162\x65\137\144\x65\154\x65\164\x65\137\x6f\x62\x6a\x65\x63\x74", self::class), $mksyucucyswaukig, $aokagokqyuysuksm);
        goto muaigwwqgsgowgkk;
        ueeowyociayoygsa:
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
        goto isumwussqyqawwmy;
        semymwueqcweowae:
        return $ueeagokqmgisgauy;
        goto oegcoaeyokkgoqyg;
        isumwussqyqawwmy:
        $ueeagokqmgisgauy = $this->coescmgakmkiyseg();
        goto ksaimkacqesiguyg;
        ksaimkacqesiguyg:
        $this->validationErrors = [];
        goto semymwueqcweowae;
        oegcoaeyokkgoqyg:
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
        goto ziggykossqqayaki;
        qmkmuwomcwygkysi:
        return ["\x6f\142\152\145\143\164" => $mksyucucyswaukig, $ceiwsaacewygcsqg => ManipulateArray::get($mksyucucyswaukig, $ceiwsaacewygcsqg), self::ERRORS => $this->skwiagoagiyswgay(), self::SUCCESS => $kigowwqauiumummw];
        goto iaiooeockccgaaiq;
        msayswiykqokmuqa:
        euuoiciaiieoqyws:
        goto yeacwagosugscqcg;
        coqycqiqgwkgkymo:
        if ($cwwowqyuwccuykom) {
            goto euuoiciaiieoqyws;
        }
        goto qcmakskemmcgaeyg;
        sooqqqougsgcumko:
        $iggwcmkgmicmouyu = true;
        goto ekcwasmkccgmogmy;
        ziggykossqqayaki:
        $mksyucucyswaukig = null;
        goto sooqqqougsgcumko;
        ekwsguueioyegqkc:
        $kuuugksiksqcaaaa = true;
        goto ooceggceowgoacyu;
        wguccgmciesyocmi:
        mcgcqaiwmkewmwue:
        goto qmkmuwomcwygkysi;
        syaqwysmymkgkcuu:
        if (!$siykeiywomwwuoiw) {
            goto mcgcqaiwmkewmwue;
        }
        goto coqycqiqgwkgkymo;
        aigseumaammwaqck:
        try {
            goto guackgkaeswkcaoq;
            uwiaeuuiaimugqys:
            wcmksyiisiciasko:
            goto eyyamwsogeqwamug;
            cwyauqoosqaoaoki:
            
            if ($mksyucucyswaukig->save()) {
                goto acuyqioeqaoeskya;
            }
            goto wiciqigmosmkkmwk;
            gggkwgcemqeckcse:
            $this->qiwiemuiqiugqqqg($mksyucucyswaukig, $icwicymcioeyeyek);
            goto ayamqyqegiuausko;
            aqcuimcoqmsiygwk:
            ukkmusemcqayowoa:
            goto yqaacqqyisoewkqq;
            guackgkaeswkcaoq:
            $aokagokqyuysuksm = (int) ManipulateArray::get($icwicymcioeyeyek, $ceiwsaacewygcsqg);
            goto wyoouquciqoosuim;
            aiociqsiiwguaywy:
            $iggwcmkgmicmouyu = true;
            goto isomygcucicwccgy;
            wyoouquciqoosuim:
            if ($aokagokqyuysuksm) {
                goto augyqmcwawmsykme;
            }
            goto aiociqsiiwguaywy;
            gwkumgocycceogce:
            $mksyucucyswaukig = $this->ckcicmwwiccamyqk($this, $mksyucucyswaukig, $icwicymcioeyeyek);
            goto swkysimqcqkikmgy;
            wiciqigmosmkkmwk:
            $mksyucucyswaukig = null;
            goto ckmycmakimaeygcu;
            yqaacqqyisoewkqq:
            ugoeueisekcsquug:
            goto mseimosiimuuceoa;
            eyyamwsogeqwamug:
            goto igkeawygswqouuym;
            goto oqccquoqqkkaqksk;
            ckmycmakimaeygcu:
            goto ukkmusemcqayowoa;
            goto cecaekugyecciwcg;
            wyoqmwcsuewswiua:
            $kigowwqauiumummw = true;
            goto gggkwgcemqeckcse;
            wuuucygsmqmsiyoi:
            if (!($kuuugksiksqcaaaa && $mksyucucyswaukig instanceof Model)) {
                goto ugoeueisekcsquug;
            }
            goto gwkumgocycceogce;
            wsmkoikacqsiweuw:
            $egkyssmuqcwaciya = self::uqggkiomyiceyooa();
            goto gaikqsuyumumsesg;
            gaikqsuyumumsesg:
            $mksyucucyswaukig = new $egkyssmuqcwaciya();
            goto uwiaeuuiaimugqys;
            oqccquoqqkkaqksk:
            augyqmcwawmsykme:
            goto wouekamwmcuguaoa;
            someqooawckycwao:
            $this->iasywwkguyauiywu($mksyucucyswaukig, $icwicymcioeyeyek);
            goto ymwckeawsukyukqs;
            ayamqyqegiuausko:
            $this->scmmymqkoyckgkam($mksyucucyswaukig);
            goto aqcuimcoqmsiygwk;
            wcaeyoeeuiqqgqou:
            if (!$kuuugksiksqcaaaa) {
                goto wcmksyiisiciasko;
            }
            goto wsmkoikacqsiweuw;
            wouekamwmcuguaoa:
            $iggwcmkgmicmouyu = false;
            goto iougqueaywwucoko;
            isomygcucicwccgy:
            $kuuugksiksqcaaaa = $this->gkieuyoqcusoksmg($icwicymcioeyeyek);
            goto wcaeyoeeuiqqgqou;
            cecaekugyecciwcg:
            acuyqioeqaoeskya:
            goto wyoqmwcsuewswiua;
            gosaiqsaqksagqsg:
            igkeawygswqouuym:
            goto wuuucygsmqmsiyoi;
            ymwckeawsukyukqs:
            $kuuugksiksqcaaaa = $this->gkieuyoqcusoksmg($icwicymcioeyeyek, $mksyucucyswaukig);
            goto gosaiqsaqksagqsg;
            iougqueaywwucoko:
            $mksyucucyswaukig = $this->cyyiiykmaeuqqgok($aokagokqyuysuksm);
            goto someqooawckycwao;
            swkysimqcqkikmgy:
            $mksyucucyswaukig = $this->qmqogusoaqeygewm($mksyucucyswaukig);
            goto cwyauqoosqaoaoki;
            mseimosiimuuceoa:
        } catch (Exception $wgaoewqkwgomoaai) {
            goto sswmueweogqkqumq;
            oqkcuegyumswqekg:
            $mksyucucyswaukig = null;
            goto wcgoiisqmmawuiag;
            wcgoiisqmmawuiag:
            $kigowwqauiumummw = false;
            goto ewiwaeckgqaiwgio;
            ewiwaeckgqaiwgio:
            wyqmackmyaikcggs:
            goto qmwmasuoyuwmcigw;
            ekwmcssqowkcoyci:
            koueosuswmucsaec:
            goto oqkcuegyumswqekg;
            gecywkyeskagueqm:
            if (!$iggwcmkgmicmouyu) {
                goto koueosuswmucsaec;
            }
            goto yckkwcimmakkieos;
            qscmokiskqyuswqo:
            if (!$kigowwqauiumummw) {
                goto wyqmackmyaikcggs;
            }
            goto gecywkyeskagueqm;
            sswmueweogqkqumq:
            $this->kmsyisgakgwscyey($this->kyacickkomkioeyu($wgaoewqkwgomoaai));
            goto qscmokiskqyuswqo;
            yckkwcimmakkieos:
            try {
                
                $mksyucucyswaukig->delete();
            } catch (Exception $wgaoewqkwgomoaai) {
            }
            goto ekwmcssqowkcoyci;
            qmwmasuoyuwmcigw:
        }
        goto ggqqwysyuqiwksgm;
        gwmauwgkiomyggmu:
        $ceiwsaacewygcsqg = $this->kumuygiiqswoyasy();
        goto syaqwysmymkgkcuu;
        ggqqwysyuqiwksgm:
        scaoisaaceiaweoe:
        goto wguccgmciesyocmi;
        ekcwasmkccgmogmy:
        $kigowwqauiumummw = false;
        goto ekwsguueioyegqkc;
        qcmakskemmcgaeyg:
        $kuuugksiksqcaaaa = $this->kuuugksiksqcaaaa($icwicymcioeyeyek);
        goto msayswiykqokmuqa;
        ooceggceowgoacyu:
        $siykeiywomwwuoiw = $this->gqaysymikgeawkqa();
        goto gwmauwgkiomyggmu;
        yeacwagosugscqcg:
        if (!$this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x6f\162\155\x5f\160\x65\x72\x73\x69\163\x74\137\157\162\x5f\x75\x70\x64\x61\x74\145\x5f\166\141\154\151\x64\141\164\x69\x6f\156"), $kuuugksiksqcaaaa, $icwicymcioeyeyek, $this)) {
            goto scaoisaaceiaweoe;
        }
        goto aigseumaammwaqck;
        iaiooeockccgaaiq:
    }
    
    public function scmmymqkoyckgkam($mksyucucyswaukig)
    {
    }
    
    public function iysseyicgouwysgk($mksyucucyswaukig) : ?string
    {
        return '';
    }
    
    public function mayuaaqmsqeyayyg($mksyucucyswaukig, $qqomumygoacsmsie = "\x73\x68\157\167") : ?string
    {
        goto ksksqwcyqoqgmgke;
        skkqqcysscikmmik:
        aaeuuccoyyuqkouc:
        goto oewsoauskqoqmiqa;
        guwyuigmkeeqssgw:
        if (!$iwywmkygwewiamwm) {
            goto skysqikkawmaoase;
        }
        goto cmogamaycywckuim;
        yywgsissmueymcmg:
        switch ($qqomumygoacsmsie) {
            case "\163\150\157\167":
                $iwywmkygwewiamwm = $this->uesweuocqoywoyms($aokagokqyuysuksm);
                goto skoscsikiaakokqe;
            case "\145\x64\151\x74":
                $iwywmkygwewiamwm = $this->yyykkcyiksewsoqy($aokagokqyuysuksm);
                goto skoscsikiaakokqe;
        }
        goto yuqowmmcwscosmgy;
        sgaoyyoooykieusg:
        $iwywmkygwewiamwm = $this->uesweuocqoywoyms($aokagokqyuysuksm);
        goto yywgsissmueymcmg;
        sqsksyaqsweqiyci:
        $pkyyagewkiyckmwy = $this->iysseyicgouwysgk($mksyucucyswaukig);
        goto guwyuigmkeeqssgw;
        oiissisqowcgwiyc:
        skysqikkawmaoase:
        goto ugqeagqqaucqkcys;
        yuqowmmcwscosmgy:
        icyuwesuyoimomqs:
        goto iyekyouiiwcsewgy;
        cmogamaycywckuim:
        $pkyyagewkiyckmwy = $this->geyuyukmwaoksywa($iwywmkygwewiamwm, $pkyyagewkiyckmwy);
        goto oiissisqowcgwiyc;
        iyekyouiiwcsewgy:
        skoscsikiaakokqe:
        goto sqsksyaqsweqiyci;
        oewsoauskqoqmiqa:
        $aokagokqyuysuksm = ManipulateArray::get($mksyucucyswaukig, $this->kumuygiiqswoyasy());
        goto sgaoyyoooykieusg;
        yqisgseiimwmoeee:
        $mksyucucyswaukig = $this->akkkoiiymmamsauc($mksyucucyswaukig);
        goto skkqqcysscikmmik;
        ksksqwcyqoqgmgke:
        if (!is_numeric($mksyucucyswaukig)) {
            goto aaeuuccoyyuqkouc;
        }
        goto yqisgseiimwmoeee;
        ugqeagqqaucqkcys:
        return $pkyyagewkiyckmwy;
        goto ywiugkwcqkomgucy;
        ywiugkwcqkomgucy:
    }
    
    public function aouwuegyyugiwksc($qgoqiacsiccwoawi, $mksyucucyswaukig, $mugogceoccysackm = true) : ?string
    {
        goto wkmsuekwweweqoys;
        wkmsuekwweweqoys:
        $aaqqkgyougeiueyq = $this->oyeskqayoscwciem()->uqeoyqiwywwmsiew($qgoqiacsiccwoawi);
        goto cwaqmauwsyugsieo;
        cwaqmauwsyugsieo:
        $icwicymcioeyeyek = $this->iscemaoqqckmkago($qgoqiacsiccwoawi, $mksyucucyswaukig);
        goto uqkmkmmikmaqkgym;
        yqmygsgkwmkeyqmm:
        if (!$meywaqqsugaoeyys instanceof Model) {
            goto mkmasewiiuocaekm;
        }
        goto omuskqikewygsuuu;
        uwiqeuqyaseimcyk:
        mkmasewiiuocaekm:
        goto aeieoesqsyiqwkkk;
        kqumggcumkiygaya:
        $pkyyagewkiyckmwy = $meywaqqsugaoeyys->iysseyicgouwysgk($icwicymcioeyeyek);
        goto siuwcesauyyweaky;
        wucomycmoigosose:
        ekoeysiuqeggaqku:
        goto kmasgsycmswqoeii;
        uqkmkmmikmaqkgym:
        $pkyyagewkiyckmwy = '';
        goto yckkkceuiuiaucce;
        omuskqikewygsuuu:
        if ($mugogceoccysackm) {
            goto ekoeysiuqeggaqku;
        }
        goto kqumggcumkiygaya;
        ccikqgeseseueseo:
        sqcoigaqqssykoui:
        goto uwiqeuqyaseimcyk;
        aeieoesqsyiqwkkk:
        iuageyamssqwqqyw:
        goto syiwwokguucmgsyy;
        siuwcesauyyweaky:
        goto sqcoigaqqssykoui;
        goto wucomycmoigosose;
        kmasgsycmswqoeii:
        $pkyyagewkiyckmwy = $meywaqqsugaoeyys->mayuaaqmsqeyayyg($icwicymcioeyeyek);
        goto ccikqgeseseueseo;
        yckkkceuiuiaucce:
        if (!$aaqqkgyougeiueyq instanceof Foreign) {
            goto iuageyamssqwqqyw;
        }
        goto smeocsiuyouseuqo;
        syiwwokguucmgsyy:
        return $pkyyagewkiyckmwy;
        goto mawqcoscmcqkoskk;
        smeocsiuyouseuqo:
        $meywaqqsugaoeyys = $aaqqkgyougeiueyq->uecyuoauykiqqkey()::symcgieuakksimmu();
        goto yqmygsgkwmkeyqmm;
        mawqcoscmcqkoskk:
    }
    
    public function iscemaoqqckmkago($iceamweyeeiwiucs, $mksyucucyswaukig = null, $wkkweuacukumqmya = "\x2a", $uoomaookgsyciacm = [])
    {
        goto suokacgwamyumagy;
        ysicqksgomomkoek:
        return $essikcmqiyqaqoaq;
        goto ocgsiomyyckcausy;
        gscckcagyggagway:
        try {
            goto iscaisuqmaikumko;
            yuciwasueswewmqw:
            $aaqqkgyougeiueyq = $this->oyeskqayoscwciem()->uqeoyqiwywwmsiew($iceamweyeeiwiucs);
            goto qqyegacwyoqqqqwy;
            qmqsgkwueccwgsqa:
            uoieeoimcawgsacs:
            goto iiceuymgyemuaciy;
            omaswaiucwamaywi:
            kysaoseimkmckcoc:
            goto ieewmicwgqaigeqi;
            wasacacaowicmiyw:
            $meywaqqsugaoeyys = $aaqqkgyougeiueyq->uecyuoauykiqqkey()::symcgieuakksimmu();
            goto oksouuguouqowuyq;
            usiqksiiiqgokuaq:
            $ayegqaqygsqsmews = $iceamweyeeiwiucs;
            goto omaswaiucwamaywi;
            iscaisuqmaikumko:
            if ($iceamweyeeiwiucs instanceof Relation) {
                goto gmckgcsamacayoiy;
            }
            goto yuciwasueswewmqw;
            qsgagomkgqcmscyu:
            goto kysaoseimkmckcoc;
            goto eaisogogsygugsqi;
            mgiykamgwsemmiio:
            $ayegqaqygsqsmews = $this->kqewyqqqiyiouaou($uoomaookgsyciacm, $ayegqaqygsqsmews);
            goto iwkyewqeogaamiou;
            okygssymuimommeg:
            return $meywaqqsugaoeyys->akkkoiiymmamsauc(ManipulateArray::get($mksyucucyswaukig, $iceamweyeeiwiucs), $meywaqqsugaoeyys->kumuygiiqswoyasy());
            goto qiekksmyigmwmiws;
            qiekksmyigmwmiws:
            wmiysuwsmawyogmu:
            goto qmqsgkwueccwgsqa;
            gmwcqkgsaesmsuea:
            sqkuwuwiceguscku:
            goto cgkaoiyoqwmkaqck;
            eaisogogsygugsqi:
            gmckgcsamacayoiy:
            goto usiqksiiiqgokuaq;
            iwkyewqeogaamiou:
            csimcqggmigoacwk:
            goto yqqwweuisgoskcwa;
            oksouuguouqowuyq:
            if (!$meywaqqsugaoeyys instanceof Model) {
                goto wmiysuwsmawyogmu;
            }
            goto okygssymuimommeg;
            uaaiuqickwysiqiy:
            $essikcmqiyqaqoaq = $ayegqaqygsqsmews->get($wkkweuacukumqmya)->sacmkccceuywoqsq();
            goto iioauiogmamumiym;
            ieewmicwgqaigeqi:
            if (!$ayegqaqygsqsmews) {
                goto sqkuwuwiceguscku;
            }
            goto ouokmaemueykkiqq;
            qqyegacwyoqqqqwy:
            if (!($aaqqkgyougeiueyq instanceof Foreign && ($aaqqkgyougeiueyq->wmomygggskkoqess() || $aaqqkgyougeiueyq->eiyqqesoywqkegwu()))) {
                goto uoieeoimcawgsacs;
            }
            goto wasacacaowicmiyw;
            yqqwweuisgoskcwa:
            if (!$ayegqaqygsqsmews) {
                goto suykumskkmicioig;
            }
            goto uaaiuqickwysiqiy;
            ouokmaemueykkiqq:
            if (!$uoomaookgsyciacm) {
                goto csimcqggmigoacwk;
            }
            goto mgiykamgwsemmiio;
            iioauiogmamumiym:
            suykumskkmicioig:
            goto gmwcqkgsaesmsuea;
            iiceuymgyemuaciy:
            $ayegqaqygsqsmews = $this->mgacegaoeamymmya($iceamweyeeiwiucs, $mksyucucyswaukig);
            goto qsgagomkgqcmscyu;
            cgkaoiyoqwmkaqck:
        } catch (Exception $wgaoewqkwgomoaai) {
        }
        goto ysicqksgomomkoek;
        suokacgwamyumagy:
        $essikcmqiyqaqoaq = [];
        goto gscckcagyggagway;
        ocgsiomyyckcausy:
    }
    
    public function mgacegaoeamymmya($ymaogssqccumcyqa, $mksyucucyswaukig = null) : ?Relation
    {
        goto iiikyaquagwawkce;
        qmqumgawyyqqamoa:
        ceesgeawumeqkcic:
        goto ewcyigsymwuuogci;
        emomkqccysciiqya:
        if ($aaqqkgyougeiueyq->iueigwuckeaswyuu()) {
            goto pmaiksascsegweci;
        }
        goto ywykuacciwwkwmmy;
        qsecoiqswyiseake:
        ccegsywqocccgegu:
        goto swkukukimeueycaq;
        coygueuwyguuciww:
        uwswkegomekswkus:
        goto ckmkeuakisiukage;
        swkukukimeueycaq:
        swqkyoemiswegyci:
        goto ccqkugckigeckeqa;
        ygqqeqgiaasoimgs:
        goto cwoaockwkoukuwae;
        goto gsiagogeoqwqekei;
        kswkouussqmqsssy:
        $mgugyyocqwmeeuai = $aaqqkgyougeiueyq->mwikyscisascoeea();
        goto emomkqccysciiqya;
        sqmgqacueqiiekay:
        
        $ayegqaqygsqsmews = $mksyucucyswaukig->belongsTo($egkyssmuqcwaciya);
        goto iuoqiecqaoosioey;
        eqiiqamuyewoowwy:
        if ($aaqqkgyougeiueyq->gumeeckcowwoyoci()) {
            goto iquykqikookaokgq;
        }
        goto cwomucmeuqqucyge;
        yuccckoykmccwyce:
        if ($aaqqkgyougeiueyq->iueigwuckeaswyuu()) {
            goto yuqiqaquoygggoqc;
        }
        goto goqkegseiummeiak;
        cuyaakuucgwmcuqq:
        $aokagokqyuysuksm = ManipulateArray::get($mksyucucyswaukig, $this->kumuygiiqswoyasy());
        goto gsgocqicesmaecse;
        uwmgacqaowuguiow:
        okeecmwsuoikguuo:
        goto cecamogauimuwoow;
        oskwwcgyuwkiuacu:
        $mksyucucyswaukig = $this->cyyiiykmaeuqqgok($aokagokqyuysuksm);
        goto qsecoiqswyiseake;
        iiikyaquagwawkce:
        $ayegqaqygsqsmews = null;
        goto iysiwmeymsoucaka;
        ccqkugckigeckeqa:
        if (!$mksyucucyswaukig instanceof Model) {
            goto akkmaiaiamyaikqe;
        }
        goto waaammoiumecaiys;
        eguukwmoyaaieuww:
        if ($aaqqkgyougeiueyq->wmomygggskkoqess()) {
            goto aeoiiewygoiwuiii;
        }
        goto kqkeomoaociyuoye;
        waaammoiumecaiys:
        $aaqqkgyougeiueyq = $this->oyeskqayoscwciem()->uqeoyqiwywwmsiew($ymaogssqccumcyqa);
        goto qgmgmkeiemcqkyim;
        gsiagogeoqwqekei:
        aeoiiewygoiwuiii:
        goto yuccckoykmccwyce;
        auauyoooouqkickk:
        akkmaiaiamyaikqe:
        goto egcsskmsysqiiikm;
        wcqyakkqcgmeqaag:
        
        $ayegqaqygsqsmews = $mksyucucyswaukig->hasOne($egkyssmuqcwaciya);
        goto coygueuwyguuciww;
        iuoqiecqaoosioey:
        eicuywagooikuusg:
        goto woqsaqwocioumoeu;
        ukyoyoqcyywgaywg:
        iquykqikookaokgq:
        goto ugowokkqeoeugkqe;
        wgeskeagymiuoigi:
        goto uwswkegomekswkus;
        goto mcoyaaiggymgcsgq;
        woqsaqwocioumoeu:
        goto ceesgeawumeqkcic;
        goto ukyoyoqcyywgaywg;
        ismoiisskiwmmmiu:
        pmaiksascsegweci:
        goto oikomikqcwikimkw;
        iqyqgqwwaaigmuou:
        ksyukmeagigokcgi:
        goto sqmgqacueqiiekay;
        oqoogougwwcqeimq:
        $egkyssmuqcwaciya = $aaqqkgyougeiueyq->uecyuoauykiqqkey();
        goto eqiiqamuyewoowwy;
        gsgocqicesmaecse:
        if (!$mksyucucyswaukig) {
            goto ccegsywqocccgegu;
        }
        goto oskwwcgyuwkiuacu;
        ywykuacciwwkwmmy:
        
        $ayegqaqygsqsmews = $mksyucucyswaukig->morphedByMany($egkyssmuqcwaciya, $mgugyyocqwmeeuai);
        goto qgcgucmskokqquwk;
        ugowokkqeoeugkqe:
        
        $ayegqaqygsqsmews = $mksyucucyswaukig->hasMany($egkyssmuqcwaciya);
        goto qmqumgawyyqqamoa;
        qgcgucmskokqquwk:
        goto okeecmwsuoikguuo;
        goto ismoiisskiwmmmiu;
        goqkegseiummeiak:
        
        $ayegqaqygsqsmews = $mksyucucyswaukig->belongsTo($egkyssmuqcwaciya);
        goto wgeskeagymiuoigi;
        uaiqqcsoksgukasg:
        goto eicuywagooikuusg;
        goto iqyqgqwwaaigmuou;
        egcsskmsysqiiikm:
        return $ayegqaqygsqsmews;
        goto mogomwoquuesmcec;
        mcoyaaiggymgcsgq:
        yuqiqaquoygggoqc:
        goto wcqyakkqcgmeqaag;
        ckmkeuakisiukage:
        cwoaockwkoukuwae:
        goto uaiqqcsoksgukasg;
        iysiwmeymsoucaka:
        if ($mksyucucyswaukig instanceof Model) {
            goto swqkyoemiswegyci;
        }
        goto cuyaakuucgwmcuqq;
        oikomikqcwikimkw:
        
        $ayegqaqygsqsmews = $mksyucucyswaukig->morphToMany($egkyssmuqcwaciya, $mgugyyocqwmeeuai);
        goto uwmgacqaowuguiow;
        cecamogauimuwoow:
        iwycgkausoseqmwu:
        goto ygqqeqgiaasoimgs;
        qgmgmkeiemcqkyim:
        if (!$aaqqkgyougeiueyq instanceof Foreign) {
            goto qiyiyuwmuoamwccs;
        }
        goto oqoogougwwcqeimq;
        cwomucmeuqqucyge:
        if ($aaqqkgyougeiueyq->eiyqqesoywqkegwu()) {
            goto ksyukmeagigokcgi;
        }
        goto eguukwmoyaaieuww;
        kqkeomoaociyuoye:
        if (!$aaqqkgyougeiueyq->ygswmewosceowmya()) {
            goto iwycgkausoseqmwu;
        }
        goto kswkouussqmqsssy;
        ewcyigsymwuuogci:
        qiyiyuwmuoamwccs:
        goto auauyoooouqkickk;
        mogomwoquuesmcec:
    }
    
    public function qiwiemuiqiugqqqg(Model $mksyucucyswaukig, $icwicymcioeyeyek)
    {
        foreach ($icwicymcioeyeyek as $uusmaiomayssaecw => $qqswgiawgeaeoecu) {
            goto aqoyesawuayoeuag;
            oswgoyqaacoyqegu:
            $miowmmgaiagcuyoo = $kooyscwkscsogysg->cyyiiykmaeuqqgok($qqswgiawgeaeoecu);
            goto yoeaiskyyqgqiwga;
            ioaeiakqkiuqymoq:
            $accumooemgmowewu = $mksyucucyswaukig::uqggkiomyiceyooa();
            goto cssysqmcgcuwyyuu;
            yoeaiskyyqgqiwga:
            if (!$miowmmgaiagcuyoo instanceof Model) {
                goto cyikoqssoemgwyyk;
            }
            goto ioaeiakqkiuqymoq;
            koaeayomowaiywam:
            $csamwuowsigosqys = $kooyscwkscsogysg->cyyiiykmaeuqqgok($qqswgiawgeaeoecu);
            goto ikwamukqumiokwkk;
            mkauomqacwwmyigy:
            
            $mksyucucyswaukig->hasMany($egkyssmuqcwaciya)->saveMany($myqeggyewswyoowe);
            goto cmsgssaekakgcqmg;
            aqoyesawuayoeuag:
            $aaqqkgyougeiueyq = $this->oyeskqayoscwciem()->uqeoyqiwywwmsiew($uusmaiomayssaecw);
            goto agoikageaeouqaqi;
            symwoekuwqcmowwo:
            if (!$aaqqkgyougeiueyq->eiyqqesoywqkegwu()) {
                goto qquugwwesqswouyc;
            }
            goto emsuycioaeoeeeqo;
            oukacgcyoiggqosq:
            foreach ($qqswgiawgeaeoecu as $eqgoocgaqwqcimie) {
                goto ikgwcgcgcaaaskig;
                uqsoseuiwgukywas:
                eemgoyuiauwuomcw:
                goto wgaggmmmgeumiouk;
                imsougccawciqsuw:
                gamuuauwykwgaegc:
                goto syaegaiuaioeaocq;
                iiwcuqeosmwgogus:
                $myqeggyewswyoowe[] = $msqyiyqkassmkgce;
                goto uqsoseuiwgukywas;
                csmmiwegweusuimi:
                goto smeeigiqmommceye;
                goto imsougccawciqsuw;
                koceayskwssiisyi:
                smeeigiqmommceye:
                goto auqmeqswuuioemge;
                ckkecwwioeywccwa:
                $msqyiyqkassmkgce = $this->ckcicmwwiccamyqk($kooyscwkscsogysg, $msqyiyqkassmkgce, $eqgoocgaqwqcimie);
                goto koceayskwssiisyi;
                amcqceoiqgmwisce:
                $msqyiyqkassmkgce = $kooyscwkscsogysg->ciqgsyoasskoiukm($eqgoocgaqwqcimie);
                goto csmmiwegweusuimi;
                syaegaiuaioeaocq:
                $msqyiyqkassmkgce = $kooyscwkscsogysg->cyyiiykmaeuqqgok($aokagokqyuysuksm);
                goto ckkecwwioeywccwa;
                auqmeqswuuioemge:
                if (!$msqyiyqkassmkgce) {
                    goto eemgoyuiauwuomcw;
                }
                goto iiwcuqeosmwgogus;
                wgaggmmmgeumiouk:
                aegiwggkecgaiocs:
                goto cwkouaeieiyiykim;
                ikgwcgcgcaaaskig:
                if ($aokagokqyuysuksm = ManipulateArray::get($eqgoocgaqwqcimie, $gqkcqoaumsuwkqom, $qqswgiawgeaeoecu)) {
                    goto gamuuauwykwgaegc;
                }
                goto amcqceoiqgmwisce;
                cwkouaeieiyiykim:
            }
            goto usiiuuommggemcke;
            eicuoesagiuykmos:
            $myqeggyewswyoowe = [];
            goto eqkaikmaegscweqq;
            ssoooeigmwugyycm:
            $egkyssmuqcwaciya = $aaqqkgyougeiueyq->uecyuoauykiqqkey();
            goto uyisqeuweamsqwgg;
            mawsaauyquacosus:
            $gqkcqoaumsuwkqom = $kooyscwkscsogysg->primaryKey;
            goto cwkwkgkqasguwscg;
            cwkwkgkqasguwscg:
            if ($aaqqkgyougeiueyq->wmomygggskkoqess()) {
                goto iqicwseckoykqowm;
            }
            goto makqqsaegsesgquq;
            uyisqeuweamsqwgg:
            if (!$egkyssmuqcwaciya) {
                goto cuamsmyiamaicwou;
            }
            goto icasgckmuawkaksg;
            cgoqqicyaiwasqme:
            iqicwseckoykqowm:
            goto ckagywkumgkaswyy;
            rwaeioueucocosgu:
            essokuoguqegyeua:
            goto cuqusekekewuseio;
            cmsgssaekakgcqmg:
            uawcmuiummigeqea:
            goto ckscysysmayieagk;
            wqcquwuiqkqaoamo:
            
            $csamwuowsigosqys->hasMany($swmgqkqyqcgemack)->save($mksyucucyswaukig);
            goto csueasskicaaoaii;
            aeywmsqkisycgqce:
            if (!$kooyscwkscsogysg instanceof Model) {
                goto awwwoikmmaisyisy;
            }
            goto mawsaauyquacosus;
            cuqusekekewuseio:
            emiyocoiuwcucuwu:
            goto qqowguycmsmuauyu;
            ikwamukqumiokwkk:
            if (!$csamwuowsigosqys instanceof Model) {
                goto smmgkqeacswimyas;
            }
            goto uueyawewomkuiiwc;
            igewmkyikyaiamsq:
            uceksuykgsckwwsu:
            goto guosgucaaeueacgu;
            icasgckmuawkaksg:
            $kooyscwkscsogysg = $egkyssmuqcwaciya::symcgieuakksimmu();
            goto aeywmsqkisycgqce;
            eqkaikmaegscweqq:
            if (!is_array($qqswgiawgeaeoecu)) {
                goto qmmieiquoegeaqok;
            }
            goto oukacgcyoiggqosq;
            csueasskicaaoaii:
            smmgkqeacswimyas:
            goto yyousguikogqkecs;
            ckscysysmayieagk:
            qmmieiquoegeaqok:
            goto aimaqcomigwccomu;
            agoikageaeouqaqi:
            if (!$aaqqkgyougeiueyq instanceof Foreign) {
                goto essokuoguqegyeua;
            }
            goto ssoooeigmwugyycm;
            syggoyqwycmmcuck:
            qquugwwesqswouyc:
            goto owwwikwqsyakweeq;
            awmyoukmqymausgu:
            ewugkyumwuomukie:
            goto eicuoesagiuykmos;
            uueyawewomkuiiwc:
            $swmgqkqyqcgemack = self::uqggkiomyiceyooa();
            goto wqcquwuiqkqaoamo;
            yyousguikogqkecs:
            kmwwamokwgagomye:
            goto syggoyqwycmmcuck;
            ckagywkumgkaswyy:
            if ($aaqqkgyougeiueyq->iueigwuckeaswyuu()) {
                goto uceksuykgsckwwsu;
            }
            goto oswgoyqaacoyqegu;
            aesgakksmyecsusi:
            cyikoqssoemgwyyk:
            goto igewmkyikyaiamsq;
            usiiuuommggemcke:
            ummsowuaoeyusgoq:
            goto aagewueuesckuqke;
            emsuycioaeoeeeqo:
            if (!is_numeric($qqswgiawgeaeoecu)) {
                goto kmwwamokwgagomye;
            }
            goto koaeayomowaiywam;
            aimaqcomigwccomu:
            wwigiswokyqkamsu:
            goto osawsyawkikquqya;
            guosgucaaeueacgu:
            yisooseceggsgyqw:
            goto wowakayqsywcaogm;
            osawsyawkikquqya:
            goto yisooseceggsgyqw;
            goto cgoqqicyaiwasqme;
            wowakayqsywcaogm:
            awwwoikmmaisyisy:
            goto ogwosuisocqykoma;
            makqqsaegsesgquq:
            if ($aaqqkgyougeiueyq->gumeeckcowwoyoci()) {
                goto ewugkyumwuomukie;
            }
            goto symwoekuwqcmowwo;
            ogwosuisocqykoma:
            cuamsmyiamaicwou:
            goto rwaeioueucocosgu;
            aagewueuesckuqke:
            if (!$myqeggyewswyoowe) {
                goto uawcmuiummigeqea;
            }
            goto mkauomqacwwmyigy;
            owwwikwqsyakweeq:
            goto wwigiswokyqkamsu;
            goto awmyoukmqymausgu;
            cssysqmcgcuwyyuu:
            
            $miowmmgaiagcuyoo->hasOne($accumooemgmowewu)->save($mksyucucyswaukig);
            goto aesgakksmyecsusi;
            qqowguycmsmuauyu:
        }
        akiuyguwqaukuugs:
    }
    
    public function gkieuyoqcusoksmg($icwicymcioeyeyek, $mksyucucyswaukig = null) : bool
    {
        goto gcumogmsuuyuwsie;
        gcumogmsuuyuwsie:
        $sogksuscggsicmac = true;
        goto uyouoeaoqcieeayg;
        uyouoeaoqcieeayg:
        foreach ($icwicymcioeyeyek as $oaukocmsckciqaok => $eqgoocgaqwqcimie) {
            goto ucuyaouwikuyyemm;
            egumckcoaaowkgoy:
            ckyeeqwsugcoksek:
            goto qyeewwmuogssaegc;
            mqigiiusqaieqeaa:
            $this->kmsyisgakgwscyey(sprintf(__("\x25\163\x20\151\163\x20\x75\156\151\161\165\145\40\141\x6e\144\40\145\156\164\145\162\145\x64\40\x76\141\x6c\x75\145\40\141\x6c\162\145\x61\144\x79\x20\145\170\151\163\x74\x2e", PR__CMN__FOUNDATION), ManipulateHTML::ciuuiyckmsygceis($aaqqkgyougeiueyq->qcgakseyaikigqco())), $oaukocmsckciqaok);
            goto igeiewqcwieuawms;
            qqocmsauqkwoscqy:
            komaoacquqwgysgc:
            goto asoweekcciigkweo;
            gqaiqcgwsmyugimu:
            siwekyoigwegiosa:
            goto akuiskwoukoesuou;
            iwccwiiumyyccquy:
            if ($aaqqkgyougeiueyq->kweqqkiwiugikyam()) {
                goto komaoacquqwgysgc;
            }
            goto swmmiykiawycgoes;
            ycoomucecckyease:
            ksmmosiwmsousgkg:
            goto myegqayeyqaigmqi;
            caiiwysgssyqoouc:
            $sogksuscggsicmac = false;
            goto ycoomucecckyease;
            uisaoikyqyseiyas:
            msegcuqmgweissmw:
            goto gqaiqcgwsmyugimu;
            myegqayeyqaigmqi:
            goto ckyeeqwsugcoksek;
            goto qqocmsauqkwoscqy;
            igeiewqcwieuawms:
            $sogksuscggsicmac = false;
            goto wuqysikmouuiawwi;
            ucuyaouwikuyyemm:
            $aaqqkgyougeiueyq = $this->oyeskqayoscwciem()->uqeoyqiwywwmsiew($oaukocmsckciqaok);
            goto uwsgccckqqookusc;
            uwsgccckqqookusc:
            if (!($aaqqkgyougeiueyq instanceof Field && !$aaqqkgyougeiueyq instanceof Foreign)) {
                goto siwekyoigwegiosa;
            }
            goto iwccwiiumyyccquy;
            cuwasskqkoysieey:
            if (!($myagqecycsaiyqsk && ManipulateArray::get($mksyucucyswaukig, $ceiwsaacewygcsqg) != ManipulateArray::get($myagqecycsaiyqsk, $ceiwsaacewygcsqg))) {
                goto aoiaykkukcyyoaio;
            }
            goto mqigiiusqaieqeaa;
            zsweawcwmisoogao:
            $this->kmsyisgakgwscyey(sprintf(__("\45\x73\x20\x63\141\156\156\47\x74\x20\142\x65\40\145\155\x70\x74\171\54\40\x70\154\145\x61\163\145\40\x66\x69\x6c\x6c\40\151\x74\56", PR__CMN__FOUNDATION), ManipulateHTML::ciuuiyckmsygceis($aaqqkgyougeiueyq->qcgakseyaikigqco())), $oaukocmsckciqaok);
            goto caiiwysgssyqoouc;
            swmmiykiawycgoes:
            if (!(!$aaqqkgyougeiueyq->yseywyqacmugimme() && !$eqgoocgaqwqcimie)) {
                goto ksmmosiwmsousgkg;
            }
            goto zsweawcwmisoogao;
            kuyeoaemuwcqkoae:
            $ceiwsaacewygcsqg = $this->kumuygiiqswoyasy();
            goto cuwasskqkoysieey;
            akuiskwoukoesuou:
            xkgykmoskoqykakc:
            goto eokgqgsswamgswqu;
            asoweekcciigkweo:
            $myagqecycsaiyqsk = $this->akkkoiiymmamsauc($eqgoocgaqwqcimie, $oaukocmsckciqaok);
            goto kuyeoaemuwcqkoae;
            wiaugmimkuikykys:
            goto yseacqgykcseamce;
            goto uisaoikyqyseiyas;
            qyeewwmuogssaegc:
            if ($sogksuscggsicmac) {
                goto msegcuqmgweissmw;
            }
            goto wiaugmimkuikykys;
            wuqysikmouuiawwi:
            aoiaykkukcyyoaio:
            goto egumckcoaaowkgoy;
            eokgqgsswamgswqu:
        }
        goto sumsswekusmugwcc;
        sumsswekusmugwcc:
        yseacqgykcseamce:
        goto quoamckmecwqkkus;
        quoamckmecwqkkus:
        return $sogksuscggsicmac;
        goto suaouieqqoauuwme;
        suaouieqqoauuwme:
    }
    
    public function ckcicmwwiccamyqk(Model $owgumcsyqsamiemg, Model $mksyucucyswaukig, $icwicymcioeyeyek) : Model
    {
        goto muoougyakwgcicuo;
        ywgqeosekkwswyac:
        kewooggoaouemcaq:
        goto qqcusuaqmyukwyqk;
        muoougyakwgcicuo:
        foreach ($icwicymcioeyeyek as $oaukocmsckciqaok => $eqgoocgaqwqcimie) {
            goto muygyqckegkuiwyi;
            ieyimqciuswcokke:
            $mksyucucyswaukig->cmgoqeksagmigwmg($oaukocmsckciqaok, $eqgoocgaqwqcimie);
            goto csismgmuaiogeucq;
            qkmmgqgcegcuawuu:
            yqysciwesgsiuayi:
            goto auouiegmaiasywkw;
            ooiaoiygiiamsmum:
            goto kwwoucisuqcmqmqu;
            goto qkmmgqgcegcuawuu;
            aqaseyqwkgoyaiyg:
            uwwooikcoamioeaq:
            goto gkekqmkyumkmywky;
            migwkuscokgmogea:
            qcsceusmgwewumuy:
            goto ooiaoiygiiamsmum;
            osgmksikyyqqcaag:
            if (!($aaqqkgyougeiueyq instanceof Field && !$aaqqkgyougeiueyq instanceof Foreign)) {
                goto ukuuumkkameeuesk;
            }
            goto gsewiomcwceysquc;
            csismgmuaiogeucq:
            ukuuumkkameeuesk:
            goto aqaseyqwkgoyaiyg;
            ouyqaaywykeqimmi:
            if (!$aaqqkgyougeiueyq instanceof Boolean) {
                goto qcsceusmgwewumuy;
            }
            goto egicsmysugywycqq;
            ggqmaecmwgeqkuge:
            kwwoucisuqcmqmqu:
            goto ieyimqciuswcokke;
            muygyqckegkuiwyi:
            $aaqqkgyougeiueyq = $owgumcsyqsamiemg->oyeskqayoscwciem()->uqeoyqiwywwmsiew($oaukocmsckciqaok);
            goto osgmksikyyqqcaag;
            gsewiomcwceysquc:
            if ($aaqqkgyougeiueyq instanceof Json && $eqgoocgaqwqcimie) {
                goto yqysciwesgsiuayi;
            }
            goto ouyqaaywykeqimmi;
            egicsmysugywycqq:
            $eqgoocgaqwqcimie = $eqgoocgaqwqcimie === "\157\156";
            goto migwkuscokgmogea;
            auouiegmaiasywkw:
            $eqgoocgaqwqcimie = wp_json_encode($eqgoocgaqwqcimie);
            goto ggqmaecmwgeqkuge;
            gkekqmkyumkmywky:
        }
        goto ywgqeosekkwswyac;
        qqcusuaqmyukwyqk:
        return $mksyucucyswaukig;
        goto souucimemowwaseo;
        souucimemowwaseo:
    }
    
    public function osymioeiweugcoms($aokagokqyuysuksm, $ymaogssqccumcyqa, $ggauoeuaesiymgee = null)
    {
        return ManipulateArray::get($this->akkkoiiymmamsauc($aokagokqyuysuksm), $ymaogssqccumcyqa, $ggauoeuaesiymgee);
    }
    
    public function kmsyisgakgwscyey($iswcokucwmiosiaq, $uusmaiomayssaecw = null) : self
    {
        goto qqwukskiymcymgqc;
        goimqkkiyegggysa:
        oqyeyuocsyoeogim:
        goto mkayykckiywayuko;
        wmgyemaskuuowuum:
        egawiicamoykemqq:
        goto ssqemoqcimayewqm;
        ssqemoqcimayewqm:
        return $this;
        goto kquwekemiawwmuqs;
        mkayykckiywayuko:
        $this->validationErrors[$uusmaiomayssaecw] = $iswcokucwmiosiaq;
        goto wmgyemaskuuowuum;
        ksoygkwycsqicooa:
        $this->validationErrors[] = $iswcokucwmiosiaq;
        goto akkwoqycamwckeui;
        qqwukskiymcymgqc:
        if ($uusmaiomayssaecw) {
            goto oqyeyuocsyoeogim;
        }
        goto ksoygkwycsqicooa;
        akkwoqycamwckeui:
        goto egawiicamoykemqq;
        goto goimqkkiyegggysa;
        kquwekemiawwmuqs:
    }
    
    public function dgugskkmsgccgiii($ueeagokqmgisgauy) : self
    {
        goto ugcaeymeciausmao;
        sygekyuywqgiawas:
        cgykkwqwamaougme:
        goto aqkoqskkimiuyqug;
        aqkoqskkimiuyqug:
        return $this;
        goto kouecqmcueugwcqw;
        ugcaeymeciausmao:
        foreach ($ueeagokqmgisgauy as $uusmaiomayssaecw => $iswcokucwmiosiaq) {
            $this->kmsyisgakgwscyey($iswcokucwmiosiaq, $uusmaiomayssaecw);
            gcmmgmowsmgwkoye:
        }
        goto sygekyuywqgiawas;
        kouecqmcueugwcqw:
    }
    
    public function akkkoiiymmamsauc(?string $eqgoocgaqwqcimie = null, ?string $aiowsaccomcoikus = null, $wkkweuacukumqmya = "\x2a")
    {
        goto imsmosgqcqgeksws;
        imsmosgqcqgeksws:
        if ($aiowsaccomcoikus) {
            goto yceksmgauwmiwmsw;
        }
        goto omqkeukuycyymmke;
        oiemkksaoaiyckgi:
        yceksmgauwmiwmsw:
        goto wicqcmuwosqwyggg;
        gakmkuaayakeymaa:
        oseqayimqaycaycw:
        goto sucquwgiacwooomw;
        eeyksuucagkaqmsi:
        
        $siykeiywomwwuoiw = $siykeiywomwwuoiw->where($aiowsaccomcoikus, "\75", $eqgoocgaqwqcimie);
        goto ciuwaqyasauagkeu;
        wicqcmuwosqwyggg:
        $siykeiywomwwuoiw = $this->gqaysymikgeawkqa();
        goto wwuiwkkgqescsyyw;
        wwuiwkkgqescsyyw:
        $wkawwaegamqisugs = null;
        goto wqameeueegakoqya;
        wqameeueegakoqya:
        if (!$siykeiywomwwuoiw) {
            goto oseqayimqaycaycw;
        }
        goto eeyksuucagkaqmsi;
        omqkeukuycyymmke:
        $aiowsaccomcoikus = $this->kumuygiiqswoyasy();
        goto oiemkksaoaiyckgi;
        sucquwgiacwooomw:
        return $wkawwaegamqisugs;
        goto sgoioieqoekqywik;
        ciuwaqyasauagkeu:
        $wkawwaegamqisugs = $this->geeumyocaqwwquwk($siykeiywomwwuoiw, $wkkweuacukumqmya);
        goto gakmkuaayakeymaa;
        sgoioieqoekqywik:
    }
    
    public function oqomcmyuuakigusk($ikgwqyuyckaewsow = [], $wkkweuacukumqmya = ["\x2a"])
    {
        return $this->geeumyocaqwwquwk($this->kqewyqqqiyiouaou($ikgwqyuyckaewsow), $wkkweuacukumqmya);
    }
    
    private function geeumyocaqwwquwk($siykeiywomwwuoiw, $wkkweuacukumqmya = ["\x2a"])
    {
        goto usaykyskgyqwquca;
        msmcmycooiwwqiik:
        return $wkawwaegamqisugs;
        goto imagiycyokkwucge;
        mewuwwsmewiimgsi:
        
        $wkawwaegamqisugs = $siykeiywomwwuoiw->first($wkkweuacukumqmya);
        goto iaewsguseweeqcqe;
        usaykyskgyqwquca:
        $wkawwaegamqisugs = null;
        goto qiamskskowaugckg;
        iaewsguseweeqcqe:
        susauskwueokgaku:
        goto msmcmycooiwwqiik;
        qiamskskowaugckg:
        if (!$siykeiywomwwuoiw) {
            goto susauskwueokgaku;
        }
        goto mewuwwsmewiimgsi;
        imagiycyokkwucge:
    }
    
    public function qumqowkwyaceeqwu($ikgwqyuyckaewsow = []) : bool
    {
        goto swqwssmgwikmieoa;
        ekimmsiekwwoawym:
        
        $cmaccwokqweqweqi = $siykeiywomwwuoiw->exists();
        goto gsimucysiuikweme;
        ukicwqcoggwiskgo:
        return $cmaccwokqweqweqi;
        goto maqmyigowgsmqaco;
        swqwssmgwikmieoa:
        $cmaccwokqweqweqi = false;
        goto meuaykaqyqkseycs;
        meuaykaqyqkseycs:
        $siykeiywomwwuoiw = $this->kqewyqqqiyiouaou($ikgwqyuyckaewsow);
        goto qaswkqkwqgqqcyws;
        qaswkqkwqgqqcyws:
        if (!$siykeiywomwwuoiw) {
            goto gaqcesscgywweieq;
        }
        goto ekimmsiekwwoawym;
        gsimucysiuikweme:
        gaqcesscgywweieq:
        goto ukicwqcoggwiskgo;
        maqmyigowgsmqaco:
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
        $meqocwsecsywiiqs = __("\104\145\154\x65\x74\x65", PR__CMN__FOUNDATION);
        return ManipulateHTML::uskieqmcqyecigmy(["\164\x79\160\145" => "\x65\162\x72\x6f\x72", "\x74\151\164\x6c\x65" => $meqocwsecsywiiqs, "\x63\x6f\156\164\145\156\x74" => __("\x41\162\145\40\171\157\165\x20\x73\165\162\x65\x20\171\157\165\40\167\x61\x6e\x74\40\x74\x6f\x20\144\145\x6c\145\x74\x65\40\x74\150\x69\163\40\x69\x74\145\155\x3f", PR__CMN__FOUNDATION), "\x62\165\164\x74\157\156\163" => ["\143\x61\156\x63\145\x6c", ["\150\162\145\x66" => $iwywmkygwewiamwm, "\x63\154\x61\x73\163" => "\160\162\55\x6f\x72\155\55\x61\x63\x74\151\157\x6e\x20\142\x74\156\x20\x62\164\x6e\55\x70\162\151\x6d\x61\162\x79", "\x74\151\164\154\x65" => $meqocwsecsywiiqs, "\144\151\163\x6d\x69\163\163" => true]]]);
    }
    
    public function rkmkouiquumiecqy($iwywmkygwewiamwm) : string
    {
        $meqocwsecsywiiqs = __("\104\145\x6c\145\x74\145", PR__CMN__FOUNDATION);
        return ManipulateHTML::uuccukgasskgimsq("\141", ["\x68\162\x65\x66" => "\43", "\x63\x6c\x61\163\163" => "\163\165\x62\x6d\x69\164\x64\145\x6c\x65\164\145\x20\160\x72\x2d\143\157\156\x66\x69\162\155\x61\142\x6c\x65\x2d\x61\143\x74\151\157\156", "\144\x61\x74\x61\55\x63\157\x6e\146\x69\147" => $this->ymaommgoigkakyes($iwywmkygwewiamwm)], $meqocwsecsywiiqs);
    }
    
    public function aaeswuecycyquqwk($siykeiywomwwuoiw, $qsyooiqcmkcieyuk)
    {
        return $siykeiywomwwuoiw;
    }
    
    public function eukyqwmmeyakcyoo($mksyucucyswaukig, $yygmoeguaqyumuui = []) : array
    {
        goto memcsokyqmowucuo;
        memcsokyqmowucuo:
        $oammesyieqmwuwyi = [];
        goto gyaoqaggggoiaoqs;
        ksseoiqcgiqsamwy:
        foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw => $pkyyagewkiyckmwy) {
            goto eqmcakqmqkqkweww;
            eqmcakqmqkqkweww:
            if (!is_numeric($uusmaiomayssaecw)) {
                goto aqwcyyigiukqikui;
            }
            goto iwcsismeakueeiya;
            ymsscygscwwicumm:
            gcgckeksyymcgays:
            goto oouisuwokmqgwiau;
            eocaacmwsqqqauuc:
            $sqqewmoeaekuyyas = 1000;
            goto maougsuwuoiecwgy;
            gkmgqmcgouseqwyg:
            $eqgoocgaqwqcimie = ManipulateArray::get($mksyucucyswaukig, $uusmaiomayssaecw);
            goto emsqksecccqeueoa;
            maougsuwuoiecwgy:
            goto zawceoyikyuwoucg;
            goto pseqauyuqgmccuwe;
            aiaayumowqswqqqk:
            zawceoyikyuwoucg:
            goto swmeecwwakawqqcw;
            ccgmicuyeoggoecu:
            kmgoiquwmsayywsc:
            goto ewosekcicaqucsua;
            pseqauyuqgmccuwe:
            imygueoqiqikwcws:
            goto smqeaeiimomewqsw;
            swmeecwwakawqqcw:
            goto kmgoiquwmsayywsc;
            goto awkmmuyuakwiaqae;
            qogogggqiuuewakw:
            $sqqewmoeaekuyyas = 0;
            goto tokguaiieequuwwa;
            smqeaeiimomewqsw:
            $pkyyagewkiyckmwy = $aaqqkgyougeiueyq->qcgakseyaikigqco();
            goto wkgmgumyswiayyae;
            oouisuwokmqgwiau:
            iqiuaammwkeiamuo:
            goto wwugkwcimumgukko;
            sgamuuiycksmssoi:
            $oammesyieqmwuwyi[$uusmaiomayssaecw] = [self::LABEL => $pkyyagewkiyckmwy, self::VALUE => $eqgoocgaqwqcimie, self::PRIORITY => $sqqewmoeaekuyyas];
            goto ymsscygscwwicumm;
            awkmmuyuakwiaqae:
            aqwcyyigiukqikui:
            goto qogogggqiuuewakw;
            emsqksecccqeueoa:
            $aaqqkgyougeiueyq = ManipulateArray::get($qssskwiqeumgkago, $uusmaiomayssaecw);
            goto ogmueiimgsogucqa;
            ogmueiimgsogucqa:
            if ($aaqqkgyougeiueyq instanceof Field) {
                goto imygueoqiqikwcws;
            }
            goto kyoogyegwukaqoce;
            kyoogyegwukaqoce:
            $pkyyagewkiyckmwy = ManipulateArray::get([self::CREATED_AT => __("\x43\162\145\x61\x74\x65\x64\x20\x41\x74", PR__CMN__FOUNDATION), self::UPDATED_AT => __("\125\160\144\x61\x74\x65\144\40\x41\164", PR__CMN__FOUNDATION)], $uusmaiomayssaecw, '');
            goto eocaacmwsqqqauuc;
            wkgmgumyswiayyae:
            $sqqewmoeaekuyyas = $aaqqkgyougeiueyq->yywskysiycwkwsgw();
            goto aiaayumowqswqqqk;
            iwcsismeakueeiya:
            $uusmaiomayssaecw = ManipulateString::ogimogiceeekegoi($pkyyagewkiyckmwy);
            goto gkmgqmcgouseqwyg;
            tokguaiieequuwwa:
            $eqgoocgaqwqcimie = '';
            goto ccgmicuyeoggoecu;
            ewosekcicaqucsua:
            $eqgoocgaqwqcimie = $this->kamyqikiiuwqiiuw($uusmaiomayssaecw, $eqgoocgaqwqcimie, $mksyucucyswaukig);
            goto mugaisykgmqcaggg;
            mugaisykgmqcaggg:
            if (!($pkyyagewkiyckmwy && $eqgoocgaqwqcimie)) {
                goto gcgckeksyymcgays;
            }
            goto sgamuuiycksmssoi;
            wwugkwcimumgukko:
        }
        goto qgeiemoywoccmwgw;
        ecyauwageoukkaaq:
        return ManipulateArray::yaeiiwwyckwugsem($oammesyieqmwuwyi);
        goto cceesacikyckyiim;
        qgeiemoywoccmwgw:
        eigowcoqoqkwuoiq:
        goto wameiecycmkcuimk;
        ciwcwcqkgkmoguok:
        $qssskwiqeumgkago = $this->oyeskqayoscwciem()->aeosueemgsygqese();
        goto ksseoiqcgiqsamwy;
        wameiecycmkcuimk:
        keygauyiuaycggcw:
        goto ecyauwageoukkaaq;
        gyaoqaggggoiaoqs:
        if (!($mksyucucyswaukig && $yygmoeguaqyumuui)) {
            goto keygauyiuaycggcw;
        }
        goto ciwcwcqkgkmoguok;
        cceesacikyckyiim:
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
        goto skokkuuieagmuwgm;
        qmeskaiqawomuqmk:
        oamaoeaeoyckwmgk:
        goto ycekisssayygosaw;
        oykuimwkwcmuekci:
        if (!($this->wkcuasmkgoscaiay() || $this->wmwguecgowcscues())) {
            goto ceegwysaccigqqck;
        }
        goto icausgkyooymuwqq;
        skuykkqcgakewusu:
        ayggscyaoccukyso:
        goto imyoiukqcmewqkkw;
        qawqosgwykeguasw:
        cesywumicwqkaeaq:
        goto oscukosgcqaqwcmi;
        gwyguuaqscsukaqg:
        if ($aiooqyausygaasqm = ManipulateAttachment::ecqkouyiioksggkw($eqgoocgaqwqcimie)) {
            goto oamaoeaeoyckwmgk;
        }
        goto sesqsywwesiycmmq;
        cgeuosayqssasuou:
        $eqgoocgaqwqcimie = $this->wusgwkaycokeckqs($eqgoocgaqwqcimie);
        goto ummgomwmsqygiqcy;
        icausgkyooymuwqq:
        if (!(!is_numeric($eqgoocgaqwqcimie) && ManipulateValidation::wmcwegoisyeeosqu($eqgoocgaqwqcimie))) {
            goto oukqakowgcgeugam;
        }
        goto gwyguuaqscsukaqg;
        ysswaukcymggikui:
        vwyusaemeqkswgee:
        goto uksgyweoymomgqos;
        uksgyweoymomgqos:
        $eqgoocgaqwqcimie = ManipulateArray::get($aaqqkgyougeiueyq->gkwkqmwweiawigae(), $eqgoocgaqwqcimie, $eqgoocgaqwqcimie);
        goto ugsomcmgekqayoqc;
        wgiuiaqoekymkwwo:
        $eqgoocgaqwqcimie = $this->ooeucgsymeocguuu($qgoqiacsiccwoawi, $eqgoocgaqwqcimie, null, null, $mksyucucyswaukig);
        goto csiokukquwmccgqc;
        kecgiacuyaumcewe:
        goto csqwmisikmgeaaky;
        goto giqssgogumimqkeo;
        aqmauesokgqoyugm:
        if ($aaqqkgyougeiueyq instanceof DateTime || $aaqqkgyougeiueyq instanceof Timestamp) {
            goto wmasiggggymwkeqs;
        }
        goto scigcaogysowccsk;
        guyskocigecaisas:
        if ($eqgoocgaqwqcimie) {
            goto uyueemusgoakawmc;
        }
        goto wugmawaqkksguaoa;
        wwyukkoeeeiiuewk:
        goto cesywumicwqkaeaq;
        goto qmeskaiqawomuqmk;
        isqemmgcymcqgmyu:
        uqqawaaiywcggesu:
        goto muuiwammayaceuue;
        qyoscouawykeimiu:
        if ($aaqqkgyougeiueyq instanceof File) {
            goto uiuekqekiguikuce;
        }
        goto wskwmocqgakykmgw;
        oscukosgcqaqwcmi:
        oukqakowgcgeugam:
        goto myasecwmmmiemgik;
        eacqgkqmwkcsscec:
        aoyqwwsacwqumucg:
        goto eucysoaqoumycmso;
        ycekisssayygosaw:
        $eqgoocgaqwqcimie = $aiooqyausygaasqm;
        goto qawqosgwykeguasw;
        sesqsywwesiycmmq:
        $eqgoocgaqwqcimie = ManipulateHTML::qgsekwygcgawekeq("\151\x6d\147", ["\163\162\143" => $eqgoocgaqwqcimie, "\x77\151\x64\164\x68" => "\x38\x30", "\150\145\151\147\150\x74" => "\x38\60"]);
        goto wwyukkoeeeiiuewk;
        sgiescgmgsowcakk:
        if ($aaqqkgyougeiueyq instanceof Foreign && $aaqqkgyougeiueyq->eiyqqesoywqkegwu()) {
            goto ayggscyaoccukyso;
        }
        goto cgeuosayqssasuou;
        kwmkusgsuoqoyses:
        $eqgoocgaqwqcimie = ManipulateAttachment::qaeeusqkgwagwaqc($eqgoocgaqwqcimie);
        goto eacqgkqmwkcsscec;
        myasecwmmmiemgik:
        if (!is_numeric($eqgoocgaqwqcimie)) {
            goto aoyqwwsacwqumucg;
        }
        goto kwmkusgsuoqoyses;
        muuiwammayaceuue:
        $aaqqkgyougeiueyq = $this->oyeskqayoscwciem()->uqeoyqiwywwmsiew($qgoqiacsiccwoawi);
        goto aqmauesokgqoyugm;
        scigcaogysowccsk:
        if ($aaqqkgyougeiueyq instanceof Enumeration) {
            goto vwyusaemeqkswgee;
        }
        goto qyoscouawykeimiu;
        kwagmsukmimymmmg:
        comiusqosmykagiq:
        goto ieumcesgiqicqima;
        skokkuuieagmuwgm:
        if (!($this->kumuygiiqswoyasy() === $qgoqiacsiccwoawi)) {
            goto uqqawaaiywcggesu;
        }
        goto ayekogimgycgmgau;
        eucysoaqoumycmso:
        ceegwysaccigqqck:
        goto kwagmsukmimymmmg;
        sgaiaqoewagooqoo:
        return $eqgoocgaqwqcimie;
        goto iugooscuiysaeqgs;
        ayekogimgycgmgau:
        return $eqgoocgaqwqcimie;
        goto isqemmgcymcqgmyu;
        ummgomwmsqygiqcy:
        goto iiakoqmowuggmkqw;
        goto skuykkqcgakewusu;
        ggwkueqyesouyaya:
        uyueemusgoakawmc:
        goto gyeqsyqiosmysiio;
        imyoiukqcmewqkkw:
        $aokagokqyuysuksm = $eqgoocgaqwqcimie;
        goto ugoqkakikayagkmm;
        ikgusckaomuoiggs:
        uiuekqekiguikuce:
        goto oykuimwkwcmuekci;
        ieumcesgiqicqima:
        goto qewmkgeeuomgomia;
        goto ysswaukcymggikui;
        giqssgogumimqkeo:
        wmasiggggymwkeqs:
        goto wgiuiaqoekymkwwo;
        oeoeeqeaokougsec:
        goto comiusqosmykagiq;
        goto ikgusckaomuoiggs;
        ugsomcmgekqayoqc:
        qewmkgeeuomgomia:
        goto kecgiacuyaumcewe;
        gyeqsyqiosmysiio:
        iiakoqmowuggmkqw:
        goto skwuueyuqkueasuu;
        csiokukquwmccgqc:
        csqwmisikmgeaaky:
        goto sgaiaqoewagooqoo;
        ugoqkakikayagkmm:
        $eqgoocgaqwqcimie = $this->aouwuegyyugiwksc($qgoqiacsiccwoawi, $mksyucucyswaukig, !$this->wmwguecgowcscues());
        goto guyskocigecaisas;
        wugmawaqkksguaoa:
        $eqgoocgaqwqcimie = $aokagokqyuysuksm;
        goto ggwkueqyesouyaya;
        wskwmocqgakykmgw:
        if (!is_numeric($eqgoocgaqwqcimie)) {
            goto cuqeayuiccuwcyua;
        }
        goto sgiescgmgsowcakk;
        skwuueyuqkueasuu:
        cuqeayuiccuwcyua:
        goto oeoeeqeaokougsec;
        iugooscuiysaeqgs:
    }
    
    public function geyuyukmwaoksywa($migiiksoiymissge, $ewgwqamkygiqaawc = '', $wwgucssaecqekuek = []) : string
    {
        goto mgeiyeygqcoismqq;
        yseysoymiwmicuoi:
        $iwywmkygwewiamwm = ManipulateHTML::qgsekwygcgawekeq("\x61", ManipulateFormat::omaawkkwwyesqwcc($wwgucssaecqekuek, ["\150\162\x65\x66" => $migiiksoiymissge, "\143\154\141\163\163" => "\164\145\170\164\55\144\145\143\157\162\x61\x74\x69\x6f\156\x2d\156\x6f\x6e\x65"]), true, $ewgwqamkygiqaawc);
        goto kmemegqksaeuqcow;
        miqekiwaouwgqgui:
        icegsqiumouewcqo:
        goto wawwaqicwyyeamqu;
        wawwaqicwyyeamqu:
        return $nsmgceoqaqogqmuw;
        goto quccsmwoagiquqya;
        mgeiyeygqcoismqq:
        $nsmgceoqaqogqmuw = '';
        goto wkqumiwieauokkcy;
        kmemegqksaeuqcow:
        $nsmgceoqaqogqmuw = ManipulateHTML::ciuuiyckmsygceis($iwywmkygwewiamwm);
        goto miqekiwaouwgqgui;
        wkqumiwieauokkcy:
        if (!($migiiksoiymissge && $ewgwqamkygiqaawc)) {
            goto icegsqiumouewcqo;
        }
        goto yseysoymiwmicuoi;
        quccsmwoagiquqya:
    }
    
    public function ykaiaukuaeswygey($mksyucucyswaukig, $ikgwqyuyckaewsow, $eqgoocgaqwqcimie, $wamcomkuwysqgwgk = "\74\x64\x69\166\x3e\x25\163\x3a\40\45\x73\74\57\144\151\x76\x3e") : string
    {
        goto qqucyqsowaqsmagw;
        moiwoyyuauwqywom:
        return $eqgoocgaqwqcimie;
        goto ekgcsqsycamakgak;
        myswmcskaagkuaiq:
        foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) {
            goto suweomwcwyiiscee;
            iyaaokkcuycqywco:
            $aiowsaccomcoikus = ManipulateArray::get($this->oyeskqayoscwciem()->aeosueemgsygqese(), $aiowsaccomcoikus);
            goto geusysuemiqgegcw;
            geusysuemiqgegcw:
            if (!($aiowsaccomcoikus && $uiymkeeaukcyqqik)) {
                goto wyioauuuyckygcaq;
            }
            goto siowcuqygwiqumii;
            siowcuqygwiqumii:
            $ukmeuaouyackgwaa .= sprintf($wamcomkuwysqgwgk, $aiowsaccomcoikus->qcgakseyaikigqco(), $this->kamyqikiiuwqiiuw($aiowsaccomcoikus->mwikyscisascoeea(), $uiymkeeaukcyqqik, $mksyucucyswaukig));
            goto yuiwacwscsiukyqe;
            suweomwcwyiiscee:
            $uiymkeeaukcyqqik = ManipulateArray::get($mksyucucyswaukig, $aiowsaccomcoikus);
            goto iyaaokkcuycqywco;
            yuiwacwscsiukyqe:
            wyioauuuyckygcaq:
            goto oooiaawaqeogogky;
            oooiaawaqeogogky:
            wcuuwegqcysecoom:
            goto cmugciymsqakcssq;
            cmugciymsqakcssq:
        }
        goto wksaesosugiyoqoe;
        wksaesosugiyoqoe:
        wuugmygqgsmkgsmc:
        goto kkiwuqcmoqmiquqq;
        mwsuqsikwoimcgiq:
        omgecsuaqiqymwms:
        goto moiwoyyuauwqywom;
        kkiwuqcmoqmiquqq:
        if (!$ukmeuaouyackgwaa) {
            goto omgecsuaqiqymwms;
        }
        goto ygmkqoaymoicisso;
        qqucyqsowaqsmagw:
        $ukmeuaouyackgwaa = '';
        goto myswmcskaagkuaiq;
        ygmkqoaymoicisso:
        $eqgoocgaqwqcimie = "{$eqgoocgaqwqcimie}\74\150\162\76{$ukmeuaouyackgwaa}";
        goto mwsuqsikwoimcgiq;
        ekgcsqsycamakgak:
    }
    
    public function wkmkqaiwuqouweye($aiowsaccomcoikus, $eqgoocgaqwqcimie, $cackiyicawmkyqqg = "\75") : ?Builder
    {
        try {
            
            $siykeiywomwwuoiw = $this->gqaysymikgeawkqa()->where($aiowsaccomcoikus, $cackiyicawmkyqqg, $eqgoocgaqwqcimie);
        } catch (Exception $wgaoewqkwgomoaai) {
            $siykeiywomwwuoiw = null;
        }
        return $siykeiywomwwuoiw;
    }
    
    public function woimamkkeyoyauoa($aiowsaccomcoikus, $eqgoocgaqwqcimie, $cackiyicawmkyqqg = "\75", $wkkweuacukumqmya = ["\52"], $aiamqeawckcsuaou = "\x67\145\x74") : array
    {
        goto jwicyuowwocymagu;
        amwqgwykwqyqsygy:
        $siykeiywomwwuoiw = $this->wkmkqaiwuqouweye($aiowsaccomcoikus, $cackiyicawmkyqqg, $eqgoocgaqwqcimie);
        goto laqgkacikykmcsos;
        iweqeyugoiogqcsw:
        iwyomomasqykuwcw:
        goto yiswuyuuwakywmiy;
        jwicyuowwocymagu:
        $aqykuigiuwmmcieu = [];
        goto amwqgwykwqyqsygy;
        yiswuyuuwakywmiy:
        return $aqykuigiuwmmcieu;
        goto coswqmcmeyyaemcs;
        laqgkacikykmcsos:
        if (!$siykeiywomwwuoiw) {
            goto iwyomomasqykuwcw;
        }
        goto egeeugucoaimuyai;
        egeeugucoaimuyai:
        $aqykuigiuwmmcieu = $this->aocqcwaksksgckaw($siykeiywomwwuoiw, $wkkweuacukumqmya, $aiamqeawckcsuaou);
        goto iweqeyugoiogqcsw;
        coswqmcmeyyaemcs:
    }
    
    public function mkcmqiiwgccguoko($aiowsaccomcoikus, $eqgoocgaqwqcimie, $cackiyicawmkyqqg = "\75", $wkkweuacukumqmya = ["\52"]) : array
    {
        return $this->woimamkkeyoyauoa($aiowsaccomcoikus, $eqgoocgaqwqcimie, $cackiyicawmkyqqg, $wkkweuacukumqmya, "\160\154\165\143\x6b");
    }
    
    public function cwgkcyyaymmsomqa($mguygkocuoaoqqkg) : array
    {
        goto ykomkgsekoimwoga;
        wgyckicucikswwgc:
        foreach ($mguygkocuoaoqqkg as $momcykaoccoymeig => $mksyucucyswaukig) {
            $mguygkocuoaoqqkg[$momcykaoccoymeig] = $this->scqakcemaqsqkema($mksyucucyswaukig);
            eqqgiqaceosmskyq:
        }
        goto kuewoymyameyusgi;
        toacieymkgsmouum:
        goto kgaiygkqciegamkk;
        goto uooyycimwyiscwik;
        ykomkgsekoimwoga:
        if ($mguygkocuoaoqqkg && is_array($mguygkocuoaoqqkg)) {
            goto gcikiyucocqiqkic;
        }
        goto uwacyygkmmwmqumm;
        saqssgocioekcyik:
        kgaiygkqciegamkk:
        goto ocqocwcocigwogao;
        uooyycimwyiscwik:
        gcikiyucocqiqkic:
        goto wgyckicucikswwgc;
        ocqocwcocigwogao:
        return $mguygkocuoaoqqkg;
        goto aygymyyeaiouckwm;
        kuewoymyameyusgi:
        amcyugmyywgmwyys:
        goto saqssgocioekcyik;
        uwacyygkmmwmqumm:
        $mguygkocuoaoqqkg = [];
        goto toacieymkgsmouum;
        aygymyyeaiouckwm:
    }
    
    public function scqakcemaqsqkema($mksyucucyswaukig, $yiosiwewiecqmkaa = [])
    {
        goto ciiggekwccqceewc;
        ciiggekwccqceewc:
        if (!$mksyucucyswaukig) {
            goto wiisumwwuyqmqggs;
        }
        goto kgseuyacuyamciku;
        kgseuyacuyamciku:
        foreach ($mksyucucyswaukig as $aiowsaccomcoikus => $eqgoocgaqwqcimie) {
            goto qcqecwaeywouwwyw;
            imccgasockkumogm:
            iaemoucqgyeioome:
            goto yawiksokukeuwumm;
            qcqecwaeywouwwyw:
            if (!(!$yiosiwewiecqmkaa || in_array($aiowsaccomcoikus, $yiosiwewiecqmkaa))) {
                goto cusmikqmacqsyoma;
            }
            goto uyiyiugiugqiqgce;
            aacaaeuuscacmgws:
            cusmikqmacqsyoma:
            goto imccgasockkumogm;
            uyiyiugiugqiqgce:
            $mksyucucyswaukig = ManipulateArray::set($mksyucucyswaukig, [$aiowsaccomcoikus => $this->kamyqikiiuwqiiuw($aiowsaccomcoikus, $eqgoocgaqwqcimie, $mksyucucyswaukig)]);
            goto aacaaeuuscacmgws;
            yawiksokukeuwumm:
        }
        goto wewskayogyikqqwe;
        wewskayogyikqqwe:
        cqggosuciisguwka:
        goto cuiswoyuykyksukc;
        oqwssckcieuowiwc:
        return $mksyucucyswaukig;
        goto auyuqgiwqummogko;
        cuiswoyuykyksukc:
        wiisumwwuyqmqggs:
        goto oqwssckcieuowiwc;
        auyuqgiwqummogko:
    }
    
    public function yaswokogyqciggeq($aiowsaccomcoikus, $eqgoocgaqwqcimie, $qgoqiacsiccwoawi = self::ID, $cackiyicawmkyqqg = "\x3d") : array
    {
        try {
            $oysoyeaucuawyaky = $this->yeescucegemaamuq($this->wkmkqaiwuqouweye($aiowsaccomcoikus, $eqgoocgaqwqcimie, $cackiyicawmkyqqg), $qgoqiacsiccwoawi);
        } catch (Exception $wgaoewqkwgomoaai) {
            $oysoyeaucuawyaky = [];
        }
        return $oysoyeaucuawyaky;
    }
    
    public function cwkywyqksyucoyia($ikgwqyuyckaewsow, array $wkkweuacukumqmya = ["\x2a"]) : array
    {
        goto ouiaceqmgmusysiq;
        aockoackcyuqgoky:
        qgowycwwyqeusmqk:
        goto scuysmagomwasugy;
        scuysmagomwasugy:
        return $aqykuigiuwmmcieu;
        goto yamuiaoquqoesiye;
        kiwygqkmigumiiuk:
        $aqykuigiuwmmcieu = $this->aocqcwaksksgckaw($siykeiywomwwuoiw, $wkkweuacukumqmya);
        goto aockoackcyuqgoky;
        ouiaceqmgmusysiq:
        $aqykuigiuwmmcieu = [];
        goto egcykicymsycioaq;
        egcykicymsycioaq:
        $siykeiywomwwuoiw = $this->kqewyqqqiyiouaou($ikgwqyuyckaewsow);
        goto scgkuqsgoooesoak;
        scgkuqsgoooesoak:
        if (!$siykeiywomwwuoiw) {
            goto qgowycwwyqeusmqk;
        }
        goto kiwygqkmigumiiuk;
        yamuiaoquqoesiye:
    }
    
    public function kqewyqqqiyiouaou($ikgwqyuyckaewsow, $siykeiywomwwuoiw = null)
    {
        goto woqwmsyieymgsqao;
        qywoucqwciweuyeg:
        $siykeiywomwwuoiw = $this->gqaysymikgeawkqa();
        goto kwiwoeckcqgewwsc;
        meseoaayykmoeicm:
        try {
            goto smwcscokyasiosks;
            momgaqeuucmowiii:
            foreach ($ikgwqyuyckaewsow as $qgoqiacsiccwoawi => $ywmkwiwkosakssii) {
                goto muoaaecywcccquoa;
                oyeuoiqgeuioiqie:
                $cackiyicawmkyqqg = ManipulateArray::get($ywmkwiwkosakssii, "\x6f\x70\145\162\141\x74\157\162", "\x3d");
                goto qwuwcoeiguyqekuy;
                wococciimesuaeys:
                eyacawwuwcgegekw:
                goto ygsoccgkwamsqewm;
                quweggukmkusygwe:
                $eqgoocgaqwqcimie = ManipulateArray::get($ywmkwiwkosakssii, self::VALUE, $ywmkwiwkosakssii);
                goto ysmqqmuesgeyquws;
                qwuwcoeiguyqekuy:
                switch ($yummaigqmauwcyou) {
                    case "\143\157\156\164\x61\x69\x6e":
                        
                        $siykeiywomwwuoiw = $siykeiywomwwuoiw->whereIn($qgoqiacsiccwoawi, $eqgoocgaqwqcimie, $qsycuegoicqcqkmo, $mqogqgswmasasmik);
                        goto eyecoeksswsicqkq;
                    case "\x77\x68\x65\162\145":
                        goto uyeiksuwckaowkqm;
                        wyuuoyquywymqoqc:
                        goto eyecoeksswsicqkq;
                        goto wskuiymiemyqssui;
                        qiykkoqakyesmswm:
                        
                        $siykeiywomwwuoiw = $siykeiywomwwuoiw->where($qgoqiacsiccwoawi, $cackiyicawmkyqqg, $eqgoocgaqwqcimie, $qsycuegoicqcqkmo);
                        goto ieceiycekgcommqi;
                        ieceiycekgcommqi:
                        goto ekcsiqgsyyiwyiui;
                        goto umskgiqgaemaokmw;
                        ieuoskasoucciwkq:
                        
                        $siykeiywomwwuoiw = $siykeiywomwwuoiw->whereIn($qgoqiacsiccwoawi, $eqgoocgaqwqcimie, $qsycuegoicqcqkmo, $mqogqgswmasasmik);
                        goto igqwceeuaueagaem;
                        igqwceeuaueagaem:
                        ekcsiqgsyyiwyiui:
                        goto wyuuoyquywymqoqc;
                        umskgiqgaemaokmw:
                        muewmqsoeqoosicu:
                        goto ieuoskasoucciwkq;
                        uyeiksuwckaowkqm:
                        if (is_array($eqgoocgaqwqcimie)) {
                            goto muewmqsoeqoosicu;
                        }
                        goto qiykkoqakyesmswm;
                        wskuiymiemyqssui:
                    case "\x64\141\164\145":
                        $siykeiywomwwuoiw = $this->ewaugyyiauqmiwsu($qgoqiacsiccwoawi, $eqgoocgaqwqcimie, $cackiyicawmkyqqg, $qsycuegoicqcqkmo, $mqogqgswmasasmik, $siykeiywomwwuoiw);
                        goto eyecoeksswsicqkq;
                }
                goto osskmmsaekmgemwc;
                ysmqqmuesgeyquws:
                $yummaigqmauwcyou = ManipulateArray::get($ywmkwiwkosakssii, "\143\x6c\x61\x75\x73\x65", "\x77\x68\x65\x72\145");
                goto mmoyseisgqkyouaq;
                mmoyseisgqkyouaq:
                $qsycuegoicqcqkmo = ManipulateArray::get($ywmkwiwkosakssii, "\x62\x6f\157\x6c\145\x61\156", "\x61\x6e\x64");
                goto oyeuoiqgeuioiqie;
                muoaaecywcccquoa:
                $mqogqgswmasasmik = ManipulateArray::get($ywmkwiwkosakssii, "\156\x6f\164", false);
                goto quweggukmkusygwe;
                eowskcomgqqwcyui:
                eyecoeksswsicqkq:
                goto wococciimesuaeys;
                osskmmsaekmgemwc:
                mgomeacemugqgswa:
                goto eowskcomgqqwcyui;
                ygsoccgkwamsqewm:
            }
            goto gmmgscuqwgiiqsmc;
            imwwaqcuqskiyeqc:
            skmyqomuuowkeeqe:
            goto owsusyqkaqmcmkwu;
            gmmgscuqwgiiqsmc:
            iescmuyqmwkeagcg:
            goto imwwaqcuqskiyeqc;
            smwcscokyasiosks:
            if (!$siykeiywomwwuoiw) {
                goto skmyqomuuowkeeqe;
            }
            goto momgaqeuucmowiii;
            owsusyqkaqmcmkwu:
        } catch (Exception $wgaoewqkwgomoaai) {
            $siykeiywomwwuoiw = null;
        }
        goto gwgssaymsgykwaoe;
        woqwmsyieymgsqao:
        if (!(!$siykeiywomwwuoiw instanceof Builder && !$siykeiywomwwuoiw instanceof Relation)) {
            goto keeayqkcscoegmmc;
        }
        goto qywoucqwciweuyeg;
        gwgssaymsgykwaoe:
        return $siykeiywomwwuoiw;
        goto wwioiasoggswmeyy;
        kwiwoeckcqgewwsc:
        keeayqkcscoegmmc:
        goto meseoaayykmoeicm;
        wwioiasoggswmeyy:
    }
    
    public function ieieyoeqmmeysauc($aiowsaccomcoikus, $eqgoocgaqwqcimie, $cackiyicawmkyqqg = "\75") : int
    {
        goto iokqqymyimieyyyy;
        aoaymmuyuuwqwcuy:
        $siykeiywomwwuoiw = $this->wkmkqaiwuqouweye($aiowsaccomcoikus, $cackiyicawmkyqqg, $eqgoocgaqwqcimie);
        goto mcsucqagsqysgieu;
        mywgmggymygqamce:
        aacmqqkkmcyowsko:
        goto cswkeogkecaoyoka;
        yuuygkmacmmcakma:
        
        $gaeqamemwmwsyukm = $siykeiywomwwuoiw->count();
        goto mywgmggymygqamce;
        cswkeogkecaoyoka:
        return $gaeqamemwmwsyukm;
        goto oekyuoucqkakcewe;
        iokqqymyimieyyyy:
        $gaeqamemwmwsyukm = 0;
        goto aoaymmuyuuwqwcuy;
        mcsucqagsqysgieu:
        if (!$siykeiywomwwuoiw) {
            goto aacmqqkkmcyowsko;
        }
        goto yuuygkmacmmcakma;
        oekyuoucqkakcewe:
    }
    
    public function ssqiqiiwyusygike($aiowsaccomcoikus, $eqgoocgaqwqcimie, $qgoqiacsiccwoawi, $cackiyicawmkyqqg = "\x3d")
    {
        goto yiuwcmkkcemwksaq;
        wgegmwgsmsgmceqo:
        $siykeiywomwwuoiw = $this->wkmkqaiwuqouweye($aiowsaccomcoikus, $cackiyicawmkyqqg, $eqgoocgaqwqcimie);
        goto kqkqessiagyiiuim;
        cuqsyqewuemsysgi:
        return $qsmaqqyoggcuyukq;
        goto aicoaaeeewwmioou;
        omyeseoqwqiuwqcw:
        
        $qsmaqqyoggcuyukq = $siykeiywomwwuoiw->sum($qgoqiacsiccwoawi);
        goto yoegkeiammkuouua;
        yiuwcmkkcemwksaq:
        $qsmaqqyoggcuyukq = 0;
        goto wgegmwgsmsgmceqo;
        yoegkeiammkuouua:
        ieaswyqkcwyaycse:
        goto cuqsyqewuemsysgi;
        kqkqessiagyiiuim:
        if (!$siykeiywomwwuoiw) {
            goto ieaswyqkcwyaycse;
        }
        goto omyeseoqwqiuwqcw;
        aicoaaeeewwmioou:
    }
    
    public function ewaugyyiauqmiwsu($ymaogssqccumcyqa, $eqgoocgaqwqcimie, $cackiyicawmkyqqg = "\x3e\x3d", $qsycuegoicqcqkmo = "\x61\x6e\144", $mqogqgswmasasmik = false, $siykeiywomwwuoiw = null) : ?Builder
    {
        try {
            goto iewmwscqgiiicygc;
            ewyqasqeksiqauuw:
            if (!is_numeric($eqgoocgaqwqcimie)) {
                goto umseiamyiyksuyim;
            }
            goto eyoiasswoyuyuuco;
            ssocqyqwsyyekiik:
            umseiamyiyksuyim:
            goto nomsoewcmsqiikyy;
            csouyaoieqauoyww:
            if ($cackiyicawmkyqqg == "\x62\x65\x74\x77\x65\x65\x6e" && is_array($eqgoocgaqwqcimie)) {
                goto ubsguocwequeoicm;
            }
            goto ewyqasqeksiqauuw;
            wiqmeiaaqqauqeme:
            meywqwweoiaqwwiu:
            goto csouyaoieqauoyww;
            wgggaasiaeeucygm:
            
            $siykeiywomwwuoiw = $siykeiywomwwuoiw->whereBetween($ymaogssqccumcyqa, $eqgoocgaqwqcimie, $qsycuegoicqcqkmo, $mqogqgswmasasmik);
            goto wmgokkkswmssqimu;
            nomsoewcmsqiikyy:
            
            $siykeiywomwwuoiw = $siykeiywomwwuoiw->whereDate($ymaogssqccumcyqa, $cackiyicawmkyqqg, $eqgoocgaqwqcimie, $qsycuegoicqcqkmo);
            goto iiueqisykokweaaw;
            maquyauskaqkikks:
            ubsguocwequeoicm:
            goto wgggaasiaeeucygm;
            iewmwscqgiiicygc:
            if ($siykeiywomwwuoiw) {
                goto meywqwweoiaqwwiu;
            }
            goto gikgmkgewswggoou;
            iiueqisykokweaaw:
            goto aakegewkccyyeuwc;
            goto maquyauskaqkikks;
            gikgmkgewswggoou:
            $siykeiywomwwuoiw = $this->gqaysymikgeawkqa();
            goto wiqmeiaaqqauqeme;
            eyoiasswoyuyuuco:
            $eqgoocgaqwqcimie = new \DateTime($eqgoocgaqwqcimie);
            goto ssocqyqwsyyekiik;
            wmgokkkswmssqimu:
            aakegewkccyyeuwc:
            goto ywueqiukuessuggs;
            ywueqiukuessuggs:
        } catch (Exception $wgaoewqkwgomoaai) {
        }
        return $siykeiywomwwuoiw;
    }
    
    public function eowgwggyqseqeywy($kwkmegesqkqwyska, $cackiyicawmkyqqg = "\x3e", $wkkweuacukumqmya = "\52") : array
    {
        return $this->owicscwgeuqcqaig($this->ewaugyyiauqmiwsu(self::CREATED_AT, $kwkmegesqkqwyska, $cackiyicawmkyqqg), $wkkweuacukumqmya);
    }
    
    public function qogaqkcsogcqiaic($mksyucucyswaukig, $aiowsaccomcoikus, $ggauoeuaesiymgee = null)
    {
        goto samuycgcmqkmcgea;
        iiowkswmewooomes:
        $eqgoocgaqwqcimie = ManipulateArray::get($mksyucucyswaukig, $aiowsaccomcoikus->mwikyscisascoeea(), $ggauoeuaesiymgee);
        goto wewikewycwowkqui;
        kigeagsoeqmgaosa:
        coakykwqwcigaoeq:
        goto iiowkswmewooomes;
        imiieooawogoyagw:
        $eqgoocgaqwqcimie = json_decode($eqgoocgaqwqcimie);
        goto imyqaycayqeucsau;
        iswgeeweeweswyoy:
        sogccagmgkcaoase:
        goto wcksgisuiomywugm;
        geacaysasaiqsewo:
        goto gekuacoquiucucoa;
        goto kigeagsoeqmgaosa;
        yiqskmikgqukkewq:
        oweiysimemyoswom:
        goto eoeomqmkgaogkome;
        cmcawyswoeumueys:
        return $eqgoocgaqwqcimie;
        goto ugcquuakimgkmeqc;
        qqgoygcaggkkisyw:
        if (!$aiowsaccomcoikus instanceof Json) {
            goto useouyguueemgkmq;
        }
        goto imiieooawogoyagw;
        qqqseeocmmummkga:
        $aiowsaccomcoikus = $ksiyqouuaoymsycg;
        goto wwwyugiayoaucqiu;
        samuycgcmqkmcgea:
        if ($aiowsaccomcoikus instanceof Field) {
            goto sogccagmgkcaoase;
        }
        goto kqacoqsymeyimagg;
        mwwqyciigykaycis:
        $eqgoocgaqwqcimie = ManipulateArray::get($mksyucucyswaukig, $aiowsaccomcoikus, $ggauoeuaesiymgee);
        goto geacaysasaiqsewo;
        imyqaycayqeucsau:
        useouyguueemgkmq:
        goto yiqskmikgqukkewq;
        wwwyugiayoaucqiu:
        iwwcoscasyysaqoo:
        goto iswgeeweeweswyoy;
        maiokoamiosssisk:
        if (!$ksiyqouuaoymsycg) {
            goto iwwcoscasyysaqoo;
        }
        goto qqqseeocmmummkga;
        eoeomqmkgaogkome:
        gekuacoquiucucoa:
        goto cmcawyswoeumueys;
        kqacoqsymeyimagg:
        $ksiyqouuaoymsycg = $this->oyeskqayoscwciem()->uqeoyqiwywwmsiew($aiowsaccomcoikus);
        goto maiokoamiosssisk;
        wewikewycwowkqui:
        if (!$eqgoocgaqwqcimie) {
            goto oweiysimemyoswom;
        }
        goto qqgoygcaggkkisyw;
        wcksgisuiomywugm:
        if ($aiowsaccomcoikus instanceof Field) {
            goto coakykwqwcigaoeq;
        }
        goto mwwqyciigykaycis;
        ugcquuakimgkmeqc:
    }
    
    private function aocqcwaksksgckaw($siykeiywomwwuoiw, $wkkweuacukumqmya = ["\52"], $aiamqeawckcsuaou = "\147\x65\164") : array
    {
        goto sumiomammkayeqis;
        uyugkucyiqymcuus:
        $uomewyckeuqoqocu = [];
        goto kokkacggmoaagiae;
        kokkacggmoaagiae:
        msaugmwuooqkmwus:
        goto iweickamaucqgysq;
        iweickamaucqgysq:
        oqksakqyecmsuscq:
        goto aecamacaoskqmccs;
        syokeusmqogkicks:
        if (!$siykeiywomwwuoiw) {
            goto oqksakqyecmsuscq;
        }
        goto oqkqaggagwswaaqi;
        sumiomammkayeqis:
        $uomewyckeuqoqocu = [];
        goto ueeuassqywswigaq;
        aecamacaoskqmccs:
        return $uomewyckeuqoqocu;
        goto oekmoqcqwyauiaeg;
        ueeuassqywswigaq:
        if ($siykeiywomwwuoiw) {
            goto uwkuasmeoueseaou;
        }
        goto ugkqimokoeicsyqm;
        qiiwgkcyqweecqoa:
        
        $uomewyckeuqoqocu = $siykeiywomwwuoiw->{$aiamqeawckcsuaou}($wkkweuacukumqmya)->toArray();
        goto ekkkweoucuyuqwik;
        mkosooeggqemyqqy:
        if (is_array($uomewyckeuqoqocu)) {
            goto msaugmwuooqkmwus;
        }
        goto uyugkucyiqymcuus;
        ekkkweoucuyuqwik:
        agcugqouiqgiskcq:
        goto mkosooeggqemyqqy;
        ugkqimokoeicsyqm:
        $siykeiywomwwuoiw = $this->gqaysymikgeawkqa();
        goto kyuewcuomwmweguq;
        oqkqaggagwswaaqi:
        if (!in_array($aiamqeawckcsuaou, ["\x67\145\x74", "\160\x6c\165\x63\153"])) {
            goto agcugqouiqgiskcq;
        }
        goto qiiwgkcyqweecqoa;
        kyuewcuomwmweguq:
        uwkuasmeoueseaou:
        goto syokeusmqogkicks;
        oekmoqcqwyauiaeg:
    }
    
    public function owicscwgeuqcqaig($siykeiywomwwuoiw, $wkkweuacukumqmya = ["\52"]) : array
    {
        return $this->aocqcwaksksgckaw($siykeiywomwwuoiw, $wkkweuacukumqmya);
    }
    
    public function yeescucegemaamuq($siykeiywomwwuoiw, $wkkweuacukumqmya = ["\x2a"]) : array
    {
        return $this->aocqcwaksksgckaw($siykeiywomwwuoiw, $wkkweuacukumqmya, "\160\x6c\x75\x63\x6b");
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
