<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613bb98fa102d             |
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
    const ORM_FILTER_BY = 'orm_filter_by';
    const ORM_FILTER_VALUE = 'orm_filter_value';
    use SingletonTrait, TranslateTrait, ComponentTrait, ActionTrait, FieldTrait, HookTrait, AjaxTrait, LogTrait;
    
    protected ?int $id = 0;
    
    public $timestamps = true;
    
    protected ?array $views = [];
    
    protected ?array $fields = [];
    
    protected bool $canDelete = true;
    
    protected ?Register $register = null;
    
    protected ?string $labelKey = 'title';
    
    protected ?array $validationErrors = [];
    
    public function __construct($aokagokqyuysuksm = null, ?array $siquossayskcwkea = [])
    {
        $this->ckgmycmaukqgkosk();
        $ymqmyyeuycgmigyo = $this->miwqiiqeegeqcwis();
        if (!$ymqmyyeuycgmigyo) {
            wp_die("name is not define for model: " . self::uqggkiomyiceyooa());
        }
        
        $mgcmmwqwguicsews = $this->getConnection();
        $this->table = $mgcmmwqwguicsews->cokoiaeeomgssqgy($ymqmyyeuycgmigyo);
        static::$resolver = new Resolver();
        if (!self::quiqwmkiyigesygc()) {
            $this->ewaqwooqoqmcoomi();
            $suckquwcuiuyiogc = ManipulateSetting::cmaecekuqkwmemms('UPDATE_ORM_DATABASE', 0);
            if (!ManipulateAjax::mcgoysmkqsqooceq() && ($suckquwcuiuyiogc || !$this->gqaysymikgeawkqa())) {
                $mgcmmwqwguicsews->cymcyywycwkawmsi();
                $aiqugsyouyikgawm = Updater::ocmycskcuiawkecq($ymqmyyeuycgmigyo);
                if ($aiqugsyouyikgawm instanceof Updater) {
                    $aiqugsyouyikgawm->yuaecocyyyqqgsyw($this->oyeskqayoscwciem())->uwyqgmcuomgeccgy($mgcmmwqwguicsews);
                }
            }
            if (!is_numeric($aokagokqyuysuksm)) {
                $this->gyqeoeemeemicgqi();
            }
        }
        parent::__construct($siquossayskcwkea);
    }
    public function wigskegsqequoeks()
    {
        $ymqmyyeuycgmigyo = $this->miwqiiqeegeqcwis();
        $this->qcsmikeggeemccuu('init', [$this, 'cgamuwiqsgwsikkm'])->koaegcswmcqsiykq($this->ygyygikyocoymgaw("{$ymqmyyeuycgmigyo}_get_list"), [$this, 'ckgyegkusmuymimo'])->qcsmikeggeemccuu($this->ygyygikyocoymgaw("{$ymqmyyeuycgmigyo}_do_bulk_action"), [$this, 'myyqwyswweswiuwu'], 10, 2)->qcsmikeggeemccuu($this->ygyygikyocoymgaw("{$ymqmyyeuycgmigyo}_do_single_action"), [$this, 'kosoaouogkeaomwo'], 10, 2);
    }
    public function kgquecmsgcouyaya()
    {
        $ymqmyyeuycgmigyo = $this->miwqiiqeegeqcwis();
        $this->cecaguuoecmccuse($this->ygyygikyocoymgaw("{$ymqmyyeuycgmigyo}_manage_views"), [$this, 'qeowcucuoaqyqwuw'])->cecaguuoecmccuse($this->ygyygikyocoymgaw("{$ymqmyyeuycgmigyo}_manage_columns"), [$this, 'kgogoccaimuywsoy'])->cecaguuoecmccuse($this->ygyygikyocoymgaw("{$ymqmyyeuycgmigyo}_manage_sortable_columns"), [$this, 'xekcwecguykmmggo'])->cecaguuoecmccuse($this->ygyygikyocoymgaw("{$ymqmyyeuycgmigyo}_row_actions"), [$this, 'mcaggmuyamgsomaa'], 10, 4)->cecaguuoecmccuse($this->ygyygikyocoymgaw("{$ymqmyyeuycgmigyo}_bulk_actions"), [$this, 'msyyesweoowcuuou'], 10, 2)->cecaguuoecmccuse($this->ygyygikyocoymgaw("orm_view_show_{$ymqmyyeuycgmigyo}_tabs"), [$this, 'uuymkiygiuaiyema'], 10, 2)->cecaguuoecmccuse($this->ygyygikyocoymgaw("{$ymqmyyeuycgmigyo}_manage_custom_column"), [$this, 'qewmkuwymqkkcmqm'], 10, 5)->cecaguuoecmccuse($this->ygyygikyocoymgaw("{$ymqmyyeuycgmigyo}_manage_edit_field_show"), [$this, 'facqwqmgcogwsokw'], 10, 4)->cecaguuoecmccuse($this->ygyygikyocoymgaw("{$ymqmyyeuycgmigyo}_manage_edit_field_value"), [$this, 'oeqsiemawogwwymo'], 10, 4);
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
        $vkkeimekwwkyiyyc = $this->timestamps;
        if ($vkkeimekwwkyiyyc) {
            if (is_array($vkkeimekwwkyiyyc)) {
                if (in_array($aiowsaccomcoikus, $vkkeimekwwkyiyyc)) {
                    $vkkeimekwwkyiyyc = $aiowsaccomcoikus;
                } else {
                    $vkkeimekwwkyiyyc = null;
                }
            } else {
                $vkkeimekwwkyiyyc = $aiowsaccomcoikus;
            }
        }
        return $vkkeimekwwkyiyyc;
    }
    
    public function mwikyscisascoeea() : ?int
    {
        return $this->id;
    }
    public function ckgyegkusmuymimo()
    {
        $icwicymcioeyeyek = ManipulateFormat::omaawkkwwyesqwcc(ManipulateServer::ayueggmoqeeukqmq(), ['id' => false, 'page' => 1, 'args' => [], 'items' => [], 'search' => null, 'markup' => false, 'template_type' => 'ajax_result']);
        $oammesyieqmwuwyi = [];
        $qeiakyocuggicwsy = [];
        $siykeiywomwwuoiw = $this->gqaysymikgeawkqa();
        if ($siykeiywomwwuoiw) {
            if ($aokagokqyuysuksm = $icwicymcioeyeyek[self::ID]) {
                
                $oammesyieqmwuwyi[] = $siykeiywomwwuoiw->find($aokagokqyuysuksm);
            } else {
                $qwcmueausqgiwigy = $icwicymcioeyeyek[self::SEARCH];
                if ($qwcmueausqgiwigy) {
                    $siykeiywomwwuoiw = $this->kqewyqqqiyiouaou([$this->ukqioecasimmeygm() => [self::OPERATOR => self::LIKE, self::VALUE => "%{$qwcmueausqgiwigy}%"]], $siykeiywomwwuoiw);
                }
                
                $gmwiogsuisuoiwqu = $this->getPaginateItems($siykeiywomwwuoiw, [self::PAGE => $icwicymcioeyeyek[self::PAGE]]);
                $oammesyieqmwuwyi = $gmwiogsuisuoiwqu[self::ITEMS];
            }
        }
        foreach ($oammesyieqmwuwyi as $igqsaukqcqscimok) {
            if ($igqsaukqcqscimok) {
                $ceiwsaacewygcsqg = $this->kumuygiiqswoyasy();
                $aokagokqyuysuksm = $igqsaukqcqscimok->{$ceiwsaacewygcsqg};
                $pkyyagewkiyckmwy = $this->uikgwcuascgeissw($igqsaukqcqscimok);
                $sogksuscggsicmac = ['ID' => $aokagokqyuysuksm, self::TEXT => $pkyyagewkiyckmwy, self::VALUE => $aokagokqyuysuksm];
                if ($icwicymcioeyeyek['markup']) {
                    $sogksuscggsicmac['markup'] = $this->iuygowkemiiwqmiw($icwicymcioeyeyek['template_type'], ['ID' => $aokagokqyuysuksm, self::TITLE => $pkyyagewkiyckmwy, 'object_type' => $this->oyeskqayoscwciem()->giiayuqckuiecosm()], ['class' => self::class]);
                }
                $qeiakyocuggicwsy[$aokagokqyuysuksm] = $sogksuscggsicmac;
            }
            ocokwuuquaokmasc:
        }
        cggowoquuiwqkyew:
        $this->uaggqsoeugksgooc(true, $qeiakyocuggicwsy);
    }
    
    public function aeggeuqycwawueqy(Builder $siykeiywomwwuoiw, array $ywmkwiwkosakssii = []) : array
    {
        try {
            $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ['page_name' => self::PAGE, self::PAGE => 1, self::DEFAULT => [], self::COLUMNS => ['*'], 'filter_value' => true, self::PER_PAGE => ManipulateSetting::omkaowmygoqwsywq()]);
            
            $ymiyawysimukkoso = $siykeiywomwwuoiw->paginate($ywmkwiwkosakssii[self::PER_PAGE] ?: 10, $ywmkwiwkosakssii[self::COLUMNS] ?: ['*'], $ywmkwiwkosakssii['page_name'] ?: self::PAGE, $ywmkwiwkosakssii[self::PAGE] ?: 1);
            
            $oammesyieqmwuwyi = $ymiyawysimukkoso->items();
            if (!$oammesyieqmwuwyi) {
                $oammesyieqmwuwyi = ManipulateArray::get($ywmkwiwkosakssii, self::DEFAULT);
            }
            if ($ywmkwiwkosakssii['filter_value']) {
                $oammesyieqmwuwyi = $this->cwgkcyyaymmsomqa($oammesyieqmwuwyi);
            }
            
            $uuwmqqqiwksuaise = $ymiyawysimukkoso->total();
            
            $qcugmkuyweqqyggk = $ymiyawysimukkoso->lastPage();
            
            $weyoqgcesqgeusiu = $ymiyawysimukkoso->perPage();
        } catch (Exception $wgaoewqkwgomoaai) {
            $oammesyieqmwuwyi = [];
            $uuwmqqqiwksuaise = 0;
            $weyoqgcesqgeusiu = 0;
            $qcugmkuyweqqyggk = 0;
        }
        return $this->oosqweumiyeayasy($oammesyieqmwuwyi, $uuwmqqqiwksuaise, $qcugmkuyweqqyggk, $weyoqgcesqgeusiu);
    }
    
    public function oosqweumiyeayasy($oammesyieqmwuwyi = [], $uuwmqqqiwksuaise = 1, $ocqawgquwsqioses = 1, $weyoqgcesqgeusiu = 10) : array
    {
        return ['pagination' => ['total' => $uuwmqqqiwksuaise, 'pages' => $ocqawgquwsqioses, self::PER_PAGE => $weyoqgcesqgeusiu], self::ITEMS => $oammesyieqmwuwyi];
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
        $vkkeimekwwkyiyyc = $this->timestamps;
        if ($vkkeimekwwkyiyyc) {
            if (is_bool($vkkeimekwwkyiyyc)) {
                $vkkeimekwwkyiyyc = [self::CREATED_AT, self::UPDATED_AT];
            }
            if (is_array($vkkeimekwwkyiyyc)) {
                foreach ($vkkeimekwwkyiyyc as $yiuogaeewyockeak) {
                    $aaqqkgyougeiueyq = self::ceqawoymcymsaeqo($yiuogaeewyockeak)->jyumyyugiwwiqomk(5000);
                    switch ($yiuogaeewyockeak) {
                        case self::CREATED_AT:
                            $aaqqkgyougeiueyq->gswweykyogmsyawy(__('Created At', PR__CMN__FOUNDATION));
                            goto meawswgwagoqgkye;
                        case self::UPDATED_AT:
                            $aaqqkgyougeiueyq->gswweykyogmsyawy(__('Updated At', PR__CMN__FOUNDATION));
                            goto meawswgwagoqgkye;
                    }
                    wcesymwqykqoyuqk:
                    meawswgwagoqgkye:
                    $oyuikeusicgqgwak[] = $aaqqkgyougeiueyq;
                    goacqqsgaaigyuaw:
                }
                yiwiqaqmwiogawym:
            }
        }
        return $oyuikeusicgqgwak;
    }
    public final function ewaqwooqoqmcoomi()
    {
        
        $this->oyeskqayoscwciem()->ckaemmoueyosqqkq(ManipulateArray::yaeiiwwyckwugsem($this->eucukwckumgiyyww()));
    }
    public final function cgamuwiqsgwsikkm()
    {
        
        if (!ManipulateAjax::mcgoysmkqsqooceq()) {
            global $orm_model;
            $suaemuyiacqyugsm = ManipulateServer::get(self::PAGE);
            $yyksucsgisomecgg = $this->oyeskqayoscwciem();
            if (strpos($suaemuyiacqyugsm, $yyksucsgisomecgg->aakmagwggmkoiiyu()) !== false) {
                $orm_model = $this;
            }
            $uieukiskgwkouwyi = false;
            foreach ($yyksucsgisomecgg->aioqieywgykaaoec() as $qqomumygoacsmsie => $ywmkwiwkosakssii) {
                $ewgsciccscsweqik = null;
                if (is_array($ywmkwiwkosakssii)) {
                    switch ($qqomumygoacsmsie) {
                        case 'index':
                            $ewgsciccscsweqik = new Index($this, $ywmkwiwkosakssii);
                            $ikugycsiyegwoiay = $this->acsiseaeysswwqkw();
                            if ($ikugycsiyegwoiay) {
                                $this->icyamyikwyaaoqya('add', $yyksucsgisomecgg->uikgwcuascgeissw('add_new_item'), ['href' => $ikugycsiyegwoiay]);
                            }
                            goto egasokooagakisiy;
                        case 'edit':
                        case 'add':
                            $ymqmyyeuycgmigyo = $yyksucsgisomecgg->aakmagwggmkoiiyu();
                            if (in_array($suaemuyiacqyugsm, [$ymqmyyeuycgmigyo, "edit_{$ymqmyyeuycgmigyo}", "add_{$ymqmyyeuycgmigyo}", "show_{$ymqmyyeuycgmigyo}"])) {
                                if (!$uieukiskgwkouwyi) {
                                    $this->aygiawwcgymgyaya();
                                    $uieukiskgwkouwyi = true;
                                    $eaoumsseceiowgsk = Form::symcgieuakksimmu($ymqmyyeuycgmigyo);
                                    if ($eaoumsseceiowgsk instanceof Form) {
                                        $eaoumsseceiowgsk->asumqyigwsqmyeoc($this);
                                    }
                                }
                                if ($this->ugmceccgwaaaigiy()) {
                                    $ewgsciccscsweqik = new Edit($this, $ywmkwiwkosakssii);
                                }
                            }
                            goto egasokooagakisiy;
                        case 'show':
                            $ewgsciccscsweqik = new Show($this, $ywmkwiwkosakssii);
                            goto egasokooagakisiy;
                        default:
                            $ewgsciccscsweqik = new View($this, $ywmkwiwkosakssii);
                            goto egasokooagakisiy;
                    }
                    kecwuwwcwokuksyq:
                    egasokooagakisiy:
                    if ($ewgsciccscsweqik) {
                        $this->ecmiqywsauuoccwo($qqomumygoacsmsie, $ewgsciccscsweqik);
                    }
                } else {
                    if ($ywmkwiwkosakssii instanceof View || is_subclass_of($ywmkwiwkosakssii, View::class)) {
                        $this->ecmiqywsauuoccwo($qqomumygoacsmsie, $ywmkwiwkosakssii);
                    }
                }
                mswsoaimesegiiic:
            }
            usqgaogkqgemuima:
        }
    }
    
    public function kssgsuewkcwgiksa() : array
    {
        return [];
    }
    
    public function hkwssiimkcysaiyo() : ?string
    {
        $ymqmyyeuycgmigyo = $this->miwqiiqeegeqcwis();
        $qqomumygoacsmsie = str_replace("_{$ymqmyyeuycgmigyo}", '', ManipulateServer::get(self::PAGE));
        if ($qqomumygoacsmsie === $ymqmyyeuycgmigyo) {
            $qqomumygoacsmsie = 'index';
        }
        return $qqomumygoacsmsie;
    }
    
    public function uqiykqoyaqymcues() : bool
    {
        return $this->hkwssiimkcysaiyo() == 'edit';
    }
    
    public function wkcuasmkgoscaiay() : bool
    {
        return $this->hkwssiimkcysaiyo() == 'show';
    }
    
    public function wmwguecgowcscues() : bool
    {
        return $this->hkwssiimkcysaiyo() == 'index';
    }
    
    public final function aygiawwcgymgyaya() : ?array
    {
        $ikgwqyuyckaewsow = $this->kssgsuewkcwgiksa();
        $qssskwiqeumgkago = $this->oyeskqayoscwciem()->aeosueemgsygqese();
        foreach ($ikgwqyuyckaewsow as $uusmaiomayssaecw => $uiewakwqscemywuo) {
            $aaqqkgyougeiueyq = ManipulateArray::get($qssskwiqeumgkago, $uusmaiomayssaecw);
            if ($aaqqkgyougeiueyq instanceof Field) {
                $qqgeiaygkaoyccig = ['aokagokqyuysuksm' => $uusmaiomayssaecw, 'ymqmyyeuycgmigyo' => $aaqqkgyougeiueyq->qcgakseyaikigqco()];
                $eewwgseqamqiouyq = $aaqqkgyougeiueyq->gueasuouwqysmomu();
                $uiewakwqscemywuo = ManipulateFormat::omaawkkwwyesqwcc($uiewakwqscemywuo, $qqgeiaygkaoyccig);
                $sqeykgyoooqysmca = ManipulateArray::get($uiewakwqscemywuo, 'type');
                if (!$sqeykgyoooqysmca) {
                    if ($aaqqkgyougeiueyq instanceof Foreign) {
                        $sqeykgyoooqysmca = 'bsselect';
                    } else {
                        if (in_array($eewwgseqamqiouyq, ['boolean', 'tinyint'])) {
                            $sqeykgyoooqysmca = 'checkbox';
                        } else {
                            if (in_array($eewwgseqamqiouyq, ['string', 'bigint'])) {
                                $sqeykgyoooqysmca = 'text';
                            } else {
                                if (in_array($eewwgseqamqiouyq, ['text'])) {
                                    $sqeykgyoooqysmca = 'textarea';
                                } else {
                                    if (in_array($eewwgseqamqiouyq, ['date', 'datetime'])) {
                                        $sqeykgyoooqysmca = 'date';
                                    } else {
                                        if (in_array($eewwgseqamqiouyq, ['enum'])) {
                                            $sqeykgyoooqysmca = 'bsselect';
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
                $uiewakwqscemywuo[self::TYPE] = $sqeykgyoooqysmca;
                $aiowsaccomcoikus = MetaBox::okmsgamiiemyesao($uiewakwqscemywuo);
                if ($aiowsaccomcoikus) {
                    switch ($eewwgseqamqiouyq) {
                        case 'enum':
                            if ($aiowsaccomcoikus instanceof BSSelect) {
                                $aiowsaccomcoikus->acauweqyyugwisqc($aaqqkgyougeiueyq->gkwkqmwweiawigae());
                            }
                            goto goeoymmqqqeeoime;
                        case 'foreign':
                            if ($aiowsaccomcoikus instanceof BSSelect) {
                                $aiowsaccomcoikus->wkqyoukciomqiyew()->oeewiaacscgyamai($aaqqkgyougeiueyq->uecyuoauykiqqkey());
                            }
                            goto goeoymmqqqeeoime;
                    }
                    eiawsoasmscmqswa:
                    goeoymmqqqeeoime:
                    $this->qaqsggqyouammqgm($aiowsaccomcoikus);
                } else {
                    throw new UnexpectedValueException("{$uusmaiomayssaecw} is not a valid field.");
                }
            }
            qmiwsequckckoaei:
        }
        qgegkeomwscwwiuw:
        return $this->ugmceccgwaaaigiy();
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
        $qssskwiqeumgkago = $this->oyeskqayoscwciem()->aeosueemgsygqese();
        if ($qssskwiqeumgkago && is_array($qssskwiqeumgkago)) {
            foreach ($qssskwiqeumgkago as $aiowsaccomcoikus) {
                if ($aiowsaccomcoikus instanceof Field && $aiowsaccomcoikus->uwaascqoguwkwiaw()) {
                    $wkkweuacukumqmya[$aiowsaccomcoikus->mwikyscisascoeea()] = $aiowsaccomcoikus->qcgakseyaikigqco();
                }
                qmeoaqmsuseueqiy:
            }
            ickcmqoiosquugwe:
        }
        return $wkkweuacukumqmya;
    }
    
    public function qeowcucuoaqyqwuw($umwgoasiowmqcumw) : array
    {
        $momcykaoccoymeig = 1;
        $ymaogssqccumcyqa = $this->aakiaoueckoiyoew();
        $scsyuucsumiwkqqc = ManipulateServer::get('orm_filter_value');
        if (is_array($umwgoasiowmqcumw) && $umwgoasiowmqcumw) {
            $umwgoasiowmqcumw = ['all' => ['title' => __('All', PR__CMN__FOUNDATION), 'count' => array_sum(array_map(function ($mokouoooiwsmcmiu) {
                return $mokouoooiwsmcmiu['count'];
            }, $umwgoasiowmqcumw))]] + $umwgoasiowmqcumw;
            foreach ($umwgoasiowmqcumw as $qqomumygoacsmsie => $icwicymcioeyeyek) {
                $meqocwsecsywiiqs = ManipulateArray::get($icwicymcioeyeyek, 'title', false);
                $gaeqamemwmwsyukm = ManipulateArray::get($icwicymcioeyeyek, 'count', 0);
                if ($meqocwsecsywiiqs) {
                    $geecqyososceumsk = ManipulateServer::ekcymmyqoceukosc(true);
                    if ($qqomumygoacsmsie !== 'all') {
                        $geecqyososceumsk = DecoratorQuery::yqymaqmqiqmmmsoo([self::ORM_FILTER_BY => $ymaogssqccumcyqa, self::ORM_FILTER_VALUE => $qqomumygoacsmsie], $geecqyososceumsk);
                    } else {
                        $geecqyososceumsk = DecoratorQuery::oiamiqcuyksmmomm([self::ORM_FILTER_BY, self::ORM_FILTER_VALUE], $geecqyososceumsk);
                    }
                    $yeacayasgueouoqc = $scsyuucsumiwkqqc ? $scsyuucsumiwkqqc === $qqomumygoacsmsie : $momcykaoccoymeig === 1;
                    $umwgoasiowmqcumw[$qqomumygoacsmsie] = ManipulateHTML::qgsekwygcgawekeq('a', ['geecqyososceumsk' => $geecqyososceumsk, 'class' => 'orm-filter-link' . ($yeacayasgueouoqc ? ' current' : '')], true, sprintf('%s (%s)', $meqocwsecsywiiqs, ManipulateHTML::gmqyuaqwgiayskei($this->wusgwkaycokeckqs($gaeqamemwmwsyukm))));
                    $momcykaoccoymeig++;
                } else {
                    ManipulateArray::unset($cqcsaaswaciweiie, $qqomumygoacsmsie);
                }
                cuoqqgaygogsmmic:
            }
            ygkcacsyyckescqs:
        }
        return $umwgoasiowmqcumw;
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
        $ceiwsaacewygcsqg = $this->primaryKey;
        if ($iqoeaggekweuwcgw) {
            $ceiwsaacewygcsqg = $this->myywwqkyiwawwquy($ceiwsaacewygcsqg);
        }
        return $ceiwsaacewygcsqg;
    }
    
    public function gqaysymikgeawkqa() : ?Builder
    {
        $siykeiywomwwuoiw = null;
        try {
            $aasascamegmwqmqk = $this->miwqiiqeegeqcwis();
            
            $siykeiywomwwuoiw = $this->getConnection()->table($aasascamegmwqmqk);
            if ($siykeiywomwwuoiw && !$siykeiywomwwuoiw->exists()) {
                $siykeiywomwwuoiw = null;
            }
        } catch (Exception $wgaoewqkwgomoaai) {
            $this->saqqeqmcyyoeqici($this->kyacickkomkioeyu($wgaoewqkwgomoaai));
        }
        return $siykeiywomwwuoiw;
    }
    
    public function feccsgmuogywweio($mksyucucyswaukig)
    {
        if (is_numeric($mksyucucyswaukig)) {
            $aokagokqyuysuksm = $mksyucucyswaukig;
        } else {
            $aokagokqyuysuksm = ManipulateArray::get($mksyucucyswaukig, $this->kumuygiiqswoyasy());
        }
        return $this->cyyiiykmaeuqqgok($aokagokqyuysuksm);
    }
    
    public function getConnection() : Database
    {
        $ymqmyyeuycgmigyo = $this->miwqiiqeegeqcwis();
        $mgcmmwqwguicsews = Database::symcgieuakksimmu($ymqmyyeuycgmigyo);
        if ($mgcmmwqwguicsews instanceof Database && !$mgcmmwqwguicsews->aakmagwggmkoiiyu()) {
            $mgcmmwqwguicsews->wcweamocuicuusky('name', $ymqmyyeuycgmigyo);
        }
        return $mgcmmwqwguicsews;
    }
    public function ckgmycmaukqgkosk()
    {
        $yyksucsgisomecgg = $this->oyeskqayoscwciem();
        if (!$yyksucsgisomecgg->masyeqmaiuqwosei()) {
            $yyksucsgisomecgg->usuqmwksoeaayaig(ManipulateString::kwuyaykukcmaqggg(ManipulateString::mkwcwqkqeqkqyggc(self::uqggkiomyiceyooa())));
        }
        $yyksucsgisomecgg->iqoguoscqueomqsk(ORM::symcgieuakksimmu()->homgcsoocssgwgym($yyksucsgisomecgg->ggqekkkocygywmoy(), $yyksucsgisomecgg->cwueseysoqeewkao(), $yyksucsgisomecgg->iemucaoqaisiwise()));
    }
    
    public function oyeskqayoscwciem() : Register
    {
        if (!$this->register) {
            $this->register = new Register();
        }
        return $this->register;
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
        $yciaosuiyeieceug = false;
        $yskommoiekkwiggo = $this->cgswceaawqgeskua('edit');
        if ($yskommoiekkwiggo instanceof Edit) {
            
            if (DecoratorUser::scmcyesmmikkucie($this->oyeskqayoscwciem()->gwaeeegmgggawiyi('edit_items'))) {
                $yciaosuiyeieceug = $yskommoiekkwiggo;
            }
        }
        return $yciaosuiyeieceug;
    }
    
    public function qqakqoekigkcmyek()
    {
        $yciaosuiyeieceug = false;
        $kmsymkkmiwykeyqi = $this->cgswceaawqgeskua('show');
        if ($kmsymkkmiwykeyqi instanceof Show) {
            $yciaosuiyeieceug = $kmsymkkmiwykeyqi;
        }
        return $yciaosuiyeieceug;
    }
    
    public function mukyysqkgaimcygs() : bool
    {
        $gkswkiicccswksiq = $this->oyeskqayoscwciem()->gwaeeegmgggawiyi('delete_items');
        return $this->gqigeuumsosmamqs() && DecoratorUser::scmcyesmmikkucie($gkswkiicccswksiq);
    }
    
    public function comogmawyoiquwis() : ?string
    {
        $iwywmkygwewiamwm = null;
        $qqomumygoacsmsie = $this->cgswceaawqgeskua('index');
        if ($qqomumygoacsmsie instanceof Index) {
            $iwywmkygwewiamwm = $qqomumygoacsmsie->qmgcisuuikgmqcsu();
        }
        return $iwywmkygwewiamwm;
    }
    
    public function yyykkcyiksewsoqy($kqokimuosyuyyucg = 0) : ?string
    {
        $iwywmkygwewiamwm = null;
        if ($qqomumygoacsmsie = $this->ggwyugcggywuwcse()) {
            $iwywmkygwewiamwm = DecoratorQuery::yqymaqmqiqmmmsoo([$this->kumuygiiqswoyasy() => $kqokimuosyuyyucg], $qqomumygoacsmsie->qmgcisuuikgmqcsu());
        }
        return $iwywmkygwewiamwm;
    }
    
    public function uesweuocqoywoyms($kqokimuosyuyyucg = 0) : ?string
    {
        $iwywmkygwewiamwm = null;
        if ($qqomumygoacsmsie = $this->qqakqoekigkcmyek()) {
            $iwywmkygwewiamwm = DecoratorQuery::yqymaqmqiqmmmsoo([$this->kumuygiiqswoyasy() => $kqokimuosyuyyucg], $qqomumygoacsmsie->qmgcisuuikgmqcsu());
        }
        return $iwywmkygwewiamwm;
    }
    
    public function cgccmsewskigcuig($kqokimuosyuyyucg = 0) : ?string
    {
        $iwywmkygwewiamwm = null;
        if ($kqokimuosyuyyucg) {
            $qqomumygoacsmsie = $this->cgswceaawqgeskua('index');
            if ($qqomumygoacsmsie instanceof Index && $this->mukyysqkgaimcygs()) {
                $ceiwsaacewygcsqg = $this->kumuygiiqswoyasy();
                if ($qqomumygoacsmsie->qcsgmgoukiouuscw()) {
                    $iwywmkygwewiamwm = ManipulateServer::ekcymmyqoceukosc(true);
                } else {
                    $iwywmkygwewiamwm = $qqomumygoacsmsie->qmgcisuuikgmqcsu();
                }
                $iwywmkygwewiamwm = DecoratorQuery::yqymaqmqiqmmmsoo(['orm-action' => 'delete', $ceiwsaacewygcsqg => $kqokimuosyuyyucg], $iwywmkygwewiamwm);
            }
        }
        return $iwywmkygwewiamwm;
    }
    
    public function setCreatedAt($eqgoocgaqwqcimie)
    {
        $this->{static::CREATED_AT} = current_time('mysql');
    }
    
    public function setUpdatedAt($eqgoocgaqwqcimie)
    {
        $this->{static::UPDATED_AT} = current_time('mysql');
    }
    
    public function acsiseaeysswwqkw() : ?string
    {
        $iwywmkygwewiamwm = null;
        $gkswkiicccswksiq = $this->oyeskqayoscwciem()->gwaeeegmgggawiyi('create_items');
        $ecmiqywsauuoccwo = $this->cgswceaawqgeskua('add');
        if ($ecmiqywsauuoccwo instanceof View && DecoratorUser::scmcyesmmikkucie($gkswkiicccswksiq)) {
            $iwywmkygwewiamwm = $ecmiqywsauuoccwo->qmgcisuuikgmqcsu();
        }
        return $iwywmkygwewiamwm;
    }
    
    public function sgcuwcowgwimgsgk($aokagokqyuysuksm, $cwwowqyuwccuykom = false)
    {
        $mksyucucyswaukig = $this->cyyiiykmaeuqqgok($aokagokqyuysuksm);
        $kigowwqauiumummw = false;
        if ($mksyucucyswaukig instanceof Model) {
            $yciaosuiyeieceug = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw('can_delete_object', self::class), true, $mksyucucyswaukig, $cwwowqyuwccuykom);
            if ($yciaosuiyeieceug) {
                $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw('before_delete_object', self::class), $mksyucucyswaukig, $aokagokqyuysuksm);
                try {
                    if ($this->ueaumcyiwwkeueag($aokagokqyuysuksm, $mksyucucyswaukig)) {
                        
                        if ($mksyucucyswaukig->delete()) {
                            $kigowwqauiumummw = $mksyucucyswaukig;
                            $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw('object_deleted', self::class), $aokagokqyuysuksm);
                        } else {
                            $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw('failed_delete_object', self::class), $aokagokqyuysuksm);
                        }
                    }
                } catch (Exception $wgaoewqkwgomoaai) {
                    $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw('failed_delete_object', self::class), $aokagokqyuysuksm);
                }
            }
        }
        return $kigowwqauiumummw;
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
        $ueeagokqmgisgauy = $this->coescmgakmkiyseg();
        $this->validationErrors = [];
        return $ueeagokqmgisgauy;
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
        $mksyucucyswaukig = null;
        $iggwcmkgmicmouyu = true;
        $kigowwqauiumummw = false;
        $kuuugksiksqcaaaa = true;
        $siykeiywomwwuoiw = $this->gqaysymikgeawkqa();
        $ceiwsaacewygcsqg = $this->kumuygiiqswoyasy();
        if ($siykeiywomwwuoiw) {
            if (!$cwwowqyuwccuykom) {
                $kuuugksiksqcaaaa = $this->kuuugksiksqcaaaa($icwicymcioeyeyek);
            }
            if ($this->sscegwueamckwmcy($this->ygyygikyocoymgaw('orm_persist_or_update_validation'), $kuuugksiksqcaaaa, $icwicymcioeyeyek, $this)) {
                try {
                    $aokagokqyuysuksm = (int) ManipulateArray::get($icwicymcioeyeyek, $ceiwsaacewygcsqg);
                    if ($aokagokqyuysuksm) {
                        $iggwcmkgmicmouyu = false;
                        $mksyucucyswaukig = $this->cyyiiykmaeuqqgok($aokagokqyuysuksm);
                        $this->iasywwkguyauiywu($mksyucucyswaukig, $icwicymcioeyeyek);
                        $kuuugksiksqcaaaa = $this->gkieuyoqcusoksmg($icwicymcioeyeyek, $mksyucucyswaukig);
                    } else {
                        $iggwcmkgmicmouyu = true;
                        $kuuugksiksqcaaaa = $this->gkieuyoqcusoksmg($icwicymcioeyeyek);
                        if ($kuuugksiksqcaaaa) {
                            $egkyssmuqcwaciya = self::uqggkiomyiceyooa();
                            $mksyucucyswaukig = new $egkyssmuqcwaciya();
                        }
                    }
                    if ($kuuugksiksqcaaaa && $mksyucucyswaukig instanceof Model) {
                        $mksyucucyswaukig = $this->ckcicmwwiccamyqk($this, $mksyucucyswaukig, $icwicymcioeyeyek);
                        $mksyucucyswaukig = $this->qmqogusoaqeygewm($mksyucucyswaukig);
                        
                        if ($mksyucucyswaukig->save()) {
                            $kigowwqauiumummw = true;
                            $this->qiwiemuiqiugqqqg($mksyucucyswaukig, $icwicymcioeyeyek);
                            $this->scmmymqkoyckgkam($mksyucucyswaukig);
                        } else {
                            $mksyucucyswaukig = null;
                        }
                    }
                } catch (Exception $wgaoewqkwgomoaai) {
                    $this->kmsyisgakgwscyey($this->kyacickkomkioeyu($wgaoewqkwgomoaai));
                    if ($kigowwqauiumummw) {
                        if ($iggwcmkgmicmouyu) {
                            try {
                                
                                $mksyucucyswaukig->delete();
                            } catch (Exception $wgaoewqkwgomoaai) {
                            }
                        }
                        $mksyucucyswaukig = null;
                        $kigowwqauiumummw = false;
                    }
                }
            }
        }
        return ['object' => $mksyucucyswaukig, $ceiwsaacewygcsqg => ManipulateArray::get($mksyucucyswaukig, $ceiwsaacewygcsqg), self::ERRORS => $this->skwiagoagiyswgay(), self::SUCCESS => $kigowwqauiumummw];
    }
    
    public function scmmymqkoyckgkam($mksyucucyswaukig)
    {
    }
    
    public function iysseyicgouwysgk($mksyucucyswaukig) : ?string
    {
        return '';
    }
    
    public function mayuaaqmsqeyayyg($mksyucucyswaukig, $qqomumygoacsmsie = 'show') : ?string
    {
        if (is_numeric($mksyucucyswaukig)) {
            $mksyucucyswaukig = $this->akkkoiiymmamsauc($mksyucucyswaukig);
        }
        $aokagokqyuysuksm = ManipulateArray::get($mksyucucyswaukig, $this->kumuygiiqswoyasy());
        $iwywmkygwewiamwm = $this->uesweuocqoywoyms($aokagokqyuysuksm);
        switch ($qqomumygoacsmsie) {
            case "show":
                $iwywmkygwewiamwm = $this->uesweuocqoywoyms($aokagokqyuysuksm);
                goto cgewcsueoyaeikgm;
            case 'edit':
                $iwywmkygwewiamwm = $this->yyykkcyiksewsoqy($aokagokqyuysuksm);
                goto cgewcsueoyaeikgm;
        }
        sukskmcwsoysiuqu:
        cgewcsueoyaeikgm:
        $pkyyagewkiyckmwy = $this->iysseyicgouwysgk($mksyucucyswaukig);
        if ($iwywmkygwewiamwm) {
            $pkyyagewkiyckmwy = $this->geyuyukmwaoksywa($iwywmkygwewiamwm, $pkyyagewkiyckmwy);
        }
        return $pkyyagewkiyckmwy;
    }
    
    public function aouwuegyyugiwksc($qgoqiacsiccwoawi, $mksyucucyswaukig, $mugogceoccysackm = true) : ?string
    {
        $aaqqkgyougeiueyq = $this->oyeskqayoscwciem()->uqeoyqiwywwmsiew($qgoqiacsiccwoawi);
        $icwicymcioeyeyek = $this->iscemaoqqckmkago($qgoqiacsiccwoawi, $mksyucucyswaukig);
        $pkyyagewkiyckmwy = '';
        if ($aaqqkgyougeiueyq instanceof Foreign) {
            $meywaqqsugaoeyys = $aaqqkgyougeiueyq->uecyuoauykiqqkey()::symcgieuakksimmu();
            if ($meywaqqsugaoeyys instanceof Model) {
                if ($mugogceoccysackm) {
                    $pkyyagewkiyckmwy = $meywaqqsugaoeyys->mayuaaqmsqeyayyg($icwicymcioeyeyek);
                } else {
                    $pkyyagewkiyckmwy = $meywaqqsugaoeyys->iysseyicgouwysgk($icwicymcioeyeyek);
                }
            }
        }
        return $pkyyagewkiyckmwy;
    }
    
    public function iscemaoqqckmkago($iceamweyeeiwiucs, $mksyucucyswaukig = null, $wkkweuacukumqmya = '*', $uoomaookgsyciacm = [])
    {
        $essikcmqiyqaqoaq = [];
        try {
            if ($iceamweyeeiwiucs instanceof Relation) {
                $ayegqaqygsqsmews = $iceamweyeeiwiucs;
            } else {
                $aaqqkgyougeiueyq = $this->oyeskqayoscwciem()->uqeoyqiwywwmsiew($iceamweyeeiwiucs);
                if ($aaqqkgyougeiueyq instanceof Foreign && ($aaqqkgyougeiueyq->wmomygggskkoqess() || $aaqqkgyougeiueyq->eiyqqesoywqkegwu())) {
                    $meywaqqsugaoeyys = $aaqqkgyougeiueyq->uecyuoauykiqqkey()::symcgieuakksimmu();
                    if ($meywaqqsugaoeyys instanceof Model) {
                        return $meywaqqsugaoeyys->akkkoiiymmamsauc(ManipulateArray::get($mksyucucyswaukig, $iceamweyeeiwiucs), $meywaqqsugaoeyys->kumuygiiqswoyasy());
                    }
                }
                $ayegqaqygsqsmews = $this->mgacegaoeamymmya($iceamweyeeiwiucs, $mksyucucyswaukig);
            }
            if ($ayegqaqygsqsmews) {
                if ($uoomaookgsyciacm) {
                    $ayegqaqygsqsmews = $this->kqewyqqqiyiouaou($uoomaookgsyciacm, $ayegqaqygsqsmews);
                }
                if ($ayegqaqygsqsmews) {
                    $essikcmqiyqaqoaq = $ayegqaqygsqsmews->get($wkkweuacukumqmya)->sacmkccceuywoqsq();
                }
            }
        } catch (Exception $wgaoewqkwgomoaai) {
        }
        return $essikcmqiyqaqoaq;
    }
    
    public function mgacegaoeamymmya($ymaogssqccumcyqa, $mksyucucyswaukig = null) : ?Relation
    {
        $ayegqaqygsqsmews = null;
        if (!$mksyucucyswaukig instanceof Model) {
            $aokagokqyuysuksm = ManipulateArray::get($mksyucucyswaukig, $this->kumuygiiqswoyasy());
            if ($mksyucucyswaukig) {
                $mksyucucyswaukig = $this->cyyiiykmaeuqqgok($aokagokqyuysuksm);
            }
        }
        if ($mksyucucyswaukig instanceof Model) {
            $aaqqkgyougeiueyq = $this->oyeskqayoscwciem()->uqeoyqiwywwmsiew($ymaogssqccumcyqa);
            if ($aaqqkgyougeiueyq instanceof Foreign) {
                $egkyssmuqcwaciya = $aaqqkgyougeiueyq->uecyuoauykiqqkey();
                if ($aaqqkgyougeiueyq->gumeeckcowwoyoci()) {
                    
                    $ayegqaqygsqsmews = $mksyucucyswaukig->hasMany($egkyssmuqcwaciya);
                } else {
                    if ($aaqqkgyougeiueyq->eiyqqesoywqkegwu()) {
                        
                        $ayegqaqygsqsmews = $mksyucucyswaukig->belongsTo($egkyssmuqcwaciya);
                    } else {
                        if ($aaqqkgyougeiueyq->wmomygggskkoqess()) {
                            if ($aaqqkgyougeiueyq->iueigwuckeaswyuu()) {
                                
                                $ayegqaqygsqsmews = $mksyucucyswaukig->hasOne($egkyssmuqcwaciya);
                            } else {
                                
                                $ayegqaqygsqsmews = $mksyucucyswaukig->belongsTo($egkyssmuqcwaciya);
                            }
                        } else {
                            if ($aaqqkgyougeiueyq->ygswmewosceowmya()) {
                                $mgugyyocqwmeeuai = $aaqqkgyougeiueyq->mwikyscisascoeea();
                                if ($aaqqkgyougeiueyq->iueigwuckeaswyuu()) {
                                    
                                    $ayegqaqygsqsmews = $mksyucucyswaukig->morphToMany($egkyssmuqcwaciya, $mgugyyocqwmeeuai);
                                } else {
                                    
                                    $ayegqaqygsqsmews = $mksyucucyswaukig->morphedByMany($egkyssmuqcwaciya, $mgugyyocqwmeeuai);
                                }
                            }
                        }
                    }
                }
            }
        }
        return $ayegqaqygsqsmews;
    }
    
    public function qiwiemuiqiugqqqg(Model $mksyucucyswaukig, $icwicymcioeyeyek)
    {
        foreach ($icwicymcioeyeyek as $uusmaiomayssaecw => $qqswgiawgeaeoecu) {
            $aaqqkgyougeiueyq = $this->oyeskqayoscwciem()->uqeoyqiwywwmsiew($uusmaiomayssaecw);
            if ($aaqqkgyougeiueyq instanceof Foreign) {
                $egkyssmuqcwaciya = $aaqqkgyougeiueyq->uecyuoauykiqqkey();
                if ($egkyssmuqcwaciya) {
                    $kooyscwkscsogysg = $egkyssmuqcwaciya::symcgieuakksimmu();
                    if ($kooyscwkscsogysg instanceof Model) {
                        $gqkcqoaumsuwkqom = $kooyscwkscsogysg->primaryKey;
                        if ($aaqqkgyougeiueyq->wmomygggskkoqess()) {
                            if (!$aaqqkgyougeiueyq->iueigwuckeaswyuu()) {
                                $miowmmgaiagcuyoo = $kooyscwkscsogysg->cyyiiykmaeuqqgok($qqswgiawgeaeoecu);
                                if ($miowmmgaiagcuyoo instanceof Model) {
                                    $accumooemgmowewu = $mksyucucyswaukig::uqggkiomyiceyooa();
                                    
                                    $miowmmgaiagcuyoo->hasOne($accumooemgmowewu)->save($mksyucucyswaukig);
                                }
                            }
                        } else {
                            if ($aaqqkgyougeiueyq->gumeeckcowwoyoci()) {
                                $myqeggyewswyoowe = [];
                                if (is_array($qqswgiawgeaeoecu)) {
                                    foreach ($qqswgiawgeaeoecu as $eqgoocgaqwqcimie) {
                                        if ($aokagokqyuysuksm = ManipulateArray::get($eqgoocgaqwqcimie, $gqkcqoaumsuwkqom, $qqswgiawgeaeoecu)) {
                                            $msqyiyqkassmkgce = $kooyscwkscsogysg->cyyiiykmaeuqqgok($aokagokqyuysuksm);
                                            $msqyiyqkassmkgce = $this->ckcicmwwiccamyqk($kooyscwkscsogysg, $msqyiyqkassmkgce, $eqgoocgaqwqcimie);
                                        } else {
                                            $msqyiyqkassmkgce = $kooyscwkscsogysg->ciqgsyoasskoiukm($eqgoocgaqwqcimie);
                                        }
                                        if ($msqyiyqkassmkgce) {
                                            $myqeggyewswyoowe[] = $msqyiyqkassmkgce;
                                        }
                                        twkmiuomimomscew:
                                    }
                                    eyiamcekkgkiawqy:
                                    if ($myqeggyewswyoowe) {
                                        
                                        $mksyucucyswaukig->hasMany($egkyssmuqcwaciya)->saveMany($myqeggyewswyoowe);
                                    }
                                }
                            } else {
                                if ($aaqqkgyougeiueyq->eiyqqesoywqkegwu()) {
                                    if (is_numeric($qqswgiawgeaeoecu)) {
                                        $csamwuowsigosqys = $kooyscwkscsogysg->cyyiiykmaeuqqgok($qqswgiawgeaeoecu);
                                        if ($csamwuowsigosqys instanceof Model) {
                                            $swmgqkqyqcgemack = self::uqggkiomyiceyooa();
                                            
                                            $csamwuowsigosqys->hasMany($swmgqkqyqcgemack)->save($mksyucucyswaukig);
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
            mqccmesakuemceqi:
        }
        igymseewwyiocoug:
    }
    
    public function gkieuyoqcusoksmg($icwicymcioeyeyek, $mksyucucyswaukig = null) : bool
    {
        $sogksuscggsicmac = true;
        foreach ($icwicymcioeyeyek as $oaukocmsckciqaok => $eqgoocgaqwqcimie) {
            $aaqqkgyougeiueyq = $this->oyeskqayoscwciem()->uqeoyqiwywwmsiew($oaukocmsckciqaok);
            if ($aaqqkgyougeiueyq instanceof Field && !$aaqqkgyougeiueyq instanceof Foreign) {
                if ($aaqqkgyougeiueyq->kweqqkiwiugikyam()) {
                    $myagqecycsaiyqsk = $this->akkkoiiymmamsauc($eqgoocgaqwqcimie, $oaukocmsckciqaok);
                    $ceiwsaacewygcsqg = $this->kumuygiiqswoyasy();
                    if ($myagqecycsaiyqsk && ManipulateArray::get($mksyucucyswaukig, $ceiwsaacewygcsqg) != ManipulateArray::get($myagqecycsaiyqsk, $ceiwsaacewygcsqg)) {
                        $this->kmsyisgakgwscyey(sprintf(__('%s is unique and entered value already exist.', PR__CMN__FOUNDATION), ManipulateHTML::ciuuiyckmsygceis($aaqqkgyougeiueyq->qcgakseyaikigqco())), $oaukocmsckciqaok);
                        $sogksuscggsicmac = false;
                    }
                } else {
                    if (!$aaqqkgyougeiueyq->yseywyqacmugimme() && !$eqgoocgaqwqcimie) {
                        $this->kmsyisgakgwscyey(sprintf(__('%s cann\'t be empty, please fill it.', PR__CMN__FOUNDATION), ManipulateHTML::ciuuiyckmsygceis($aaqqkgyougeiueyq->qcgakseyaikigqco())), $oaukocmsckciqaok);
                        $sogksuscggsicmac = false;
                    }
                }
                if (!$sogksuscggsicmac) {
                    goto kooskuwkuayiuose;
                }
            }
            qwcegcuowwgiccos:
        }
        kooskuwkuayiuose:
        return $sogksuscggsicmac;
    }
    
    public function ckcicmwwiccamyqk(Model $owgumcsyqsamiemg, Model $mksyucucyswaukig, $icwicymcioeyeyek) : Model
    {
        foreach ($icwicymcioeyeyek as $oaukocmsckciqaok => $eqgoocgaqwqcimie) {
            $aaqqkgyougeiueyq = $owgumcsyqsamiemg->oyeskqayoscwciem()->uqeoyqiwywwmsiew($oaukocmsckciqaok);
            if ($aaqqkgyougeiueyq instanceof Field && !$aaqqkgyougeiueyq instanceof Foreign) {
                if ($aaqqkgyougeiueyq instanceof Json && $eqgoocgaqwqcimie) {
                    $eqgoocgaqwqcimie = wp_json_encode($eqgoocgaqwqcimie);
                } else {
                    if ($aaqqkgyougeiueyq instanceof Boolean) {
                        $eqgoocgaqwqcimie = $eqgoocgaqwqcimie === 'on';
                    }
                }
                $mksyucucyswaukig->cmgoqeksagmigwmg($oaukocmsckciqaok, $eqgoocgaqwqcimie);
            }
            yssscwioiyygssec:
        }
        qcessicwuikwqsis:
        return $mksyucucyswaukig;
    }
    
    public function osymioeiweugcoms($aokagokqyuysuksm, $ymaogssqccumcyqa, $ggauoeuaesiymgee = null)
    {
        return ManipulateArray::get($this->akkkoiiymmamsauc($aokagokqyuysuksm), $ymaogssqccumcyqa, $ggauoeuaesiymgee);
    }
    
    public function kmsyisgakgwscyey($iswcokucwmiosiaq, $uusmaiomayssaecw = null) : self
    {
        if ($uusmaiomayssaecw) {
            $this->validationErrors[$uusmaiomayssaecw] = $iswcokucwmiosiaq;
        } else {
            $this->validationErrors[] = $iswcokucwmiosiaq;
        }
        return $this;
    }
    
    public function dgugskkmsgccgiii($ueeagokqmgisgauy) : self
    {
        foreach ($ueeagokqmgisgauy as $uusmaiomayssaecw => $iswcokucwmiosiaq) {
            $this->kmsyisgakgwscyey($iswcokucwmiosiaq, $uusmaiomayssaecw);
            coywmiyqgsweuiic:
        }
        ieumumsgyguceusy:
        return $this;
    }
    
    public function akkkoiiymmamsauc(?string $eqgoocgaqwqcimie = null, ?string $aiowsaccomcoikus = null, $wkkweuacukumqmya = '*')
    {
        if (!$aiowsaccomcoikus) {
            $aiowsaccomcoikus = $this->kumuygiiqswoyasy();
        }
        $siykeiywomwwuoiw = $this->gqaysymikgeawkqa();
        $wkawwaegamqisugs = null;
        if ($siykeiywomwwuoiw) {
            
            $siykeiywomwwuoiw = $siykeiywomwwuoiw->where($aiowsaccomcoikus, self::EQUAL_SYMBOL, $eqgoocgaqwqcimie);
            $wkawwaegamqisugs = $this->geeumyocaqwwquwk($siykeiywomwwuoiw, $wkkweuacukumqmya);
        }
        return $wkawwaegamqisugs;
    }
    
    public function oqomcmyuuakigusk($ikgwqyuyckaewsow = [], $wkkweuacukumqmya = ['*'])
    {
        return $this->geeumyocaqwwquwk($this->kqewyqqqiyiouaou($ikgwqyuyckaewsow), $wkkweuacukumqmya);
    }
    
    private function geeumyocaqwwquwk($siykeiywomwwuoiw, $wkkweuacukumqmya = ['*'])
    {
        $wkawwaegamqisugs = null;
        if ($siykeiywomwwuoiw) {
            $wkawwaegamqisugs = $this->awkaaqmauiuwwsca($siykeiywomwwuoiw, $wkkweuacukumqmya);
        }
        return $wkawwaegamqisugs;
    }
    
    public function qumqowkwyaceeqwu($ikgwqyuyckaewsow = []) : bool
    {
        $cmaccwokqweqweqi = false;
        $siykeiywomwwuoiw = $this->kqewyqqqiyiouaou($ikgwqyuyckaewsow);
        if ($siykeiywomwwuoiw) {
            
            $cmaccwokqweqweqi = $siykeiywomwwuoiw->exists();
        }
        return $cmaccwokqweqweqi;
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
        $meqocwsecsywiiqs = __('Delete', PR__CMN__FOUNDATION);
        return ManipulateHTML::uskieqmcqyecigmy(['type' => 'error', 'title' => $meqocwsecsywiiqs, 'content' => __('Are you sure you want to delete this item?', PR__CMN__FOUNDATION), 'buttons' => ['cancel', ['href' => $iwywmkygwewiamwm, 'class' => 'pr-orm-action btn btn-primary', 'title' => $meqocwsecsywiiqs, 'dismiss' => true]]]);
    }
    
    public function rkmkouiquumiecqy($iwywmkygwewiamwm) : string
    {
        $meqocwsecsywiiqs = __('Delete', PR__CMN__FOUNDATION);
        return ManipulateHTML::uuccukgasskgimsq('a', ['href' => '#', 'class' => 'submitdelete pr-confirmable-action', 'data-config' => $this->ymaommgoigkakyes($iwywmkygwewiamwm)], $meqocwsecsywiiqs);
    }
    
    public function aaeswuecycyquqwk($siykeiywomwwuoiw, $qsyooiqcmkcieyuk)
    {
        return $siykeiywomwwuoiw;
    }
    
    public function eukyqwmmeyakcyoo($mksyucucyswaukig, $yygmoeguaqyumuui = []) : array
    {
        $oammesyieqmwuwyi = [];
        if ($mksyucucyswaukig && $yygmoeguaqyumuui) {
            $qssskwiqeumgkago = $this->oyeskqayoscwciem()->aeosueemgsygqese();
            foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw => $pkyyagewkiyckmwy) {
                if (!is_numeric($uusmaiomayssaecw)) {
                    $sqqewmoeaekuyyas = 0;
                    $eqgoocgaqwqcimie = '';
                } else {
                    $uusmaiomayssaecw = ManipulateString::ogimogiceeekegoi($pkyyagewkiyckmwy);
                    $eqgoocgaqwqcimie = ManipulateArray::get($mksyucucyswaukig, $uusmaiomayssaecw);
                    $aaqqkgyougeiueyq = ManipulateArray::get($qssskwiqeumgkago, $uusmaiomayssaecw);
                    if ($aaqqkgyougeiueyq instanceof Field) {
                        $pkyyagewkiyckmwy = $aaqqkgyougeiueyq->qcgakseyaikigqco();
                        $sqqewmoeaekuyyas = $aaqqkgyougeiueyq->yywskysiycwkwsgw();
                    } else {
                        $pkyyagewkiyckmwy = ManipulateArray::get([self::CREATED_AT => __('Created At', PR__CMN__FOUNDATION), self::UPDATED_AT => __('Updated At', PR__CMN__FOUNDATION)], $uusmaiomayssaecw, '');
                        $sqqewmoeaekuyyas = 1000;
                    }
                }
                $eqgoocgaqwqcimie = $this->kamyqikiiuwqiiuw($uusmaiomayssaecw, $eqgoocgaqwqcimie, $mksyucucyswaukig);
                if ($pkyyagewkiyckmwy && $eqgoocgaqwqcimie) {
                    $oammesyieqmwuwyi[$uusmaiomayssaecw] = [self::LABEL => $pkyyagewkiyckmwy, self::VALUE => $eqgoocgaqwqcimie, self::PRIORITY => $sqqewmoeaekuyyas];
                }
                ycakugokkqkuqyiu:
            }
            siqagquguiemuoku:
        }
        return ManipulateArray::yaeiiwwyckwugsem($oammesyieqmwuwyi);
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
        if ($this->kumuygiiqswoyasy() === $qgoqiacsiccwoawi) {
            return $eqgoocgaqwqcimie;
        }
        $aaqqkgyougeiueyq = $this->oyeskqayoscwciem()->uqeoyqiwywwmsiew($qgoqiacsiccwoawi);
        if ($aaqqkgyougeiueyq instanceof DateTime || $aaqqkgyougeiueyq instanceof Timestamp) {
            $eqgoocgaqwqcimie = $this->ooeucgsymeocguuu($qgoqiacsiccwoawi, $eqgoocgaqwqcimie, null, null, $mksyucucyswaukig);
        } else {
            if ($aaqqkgyougeiueyq instanceof Enumeration) {
                $eqgoocgaqwqcimie = ManipulateArray::get($aaqqkgyougeiueyq->gkwkqmwweiawigae(), $eqgoocgaqwqcimie, $eqgoocgaqwqcimie);
            } else {
                if ($aaqqkgyougeiueyq instanceof File) {
                    if ($this->wkcuasmkgoscaiay() || $this->wmwguecgowcscues()) {
                        if (!is_numeric($eqgoocgaqwqcimie) && ManipulateValidation::wmcwegoisyeeosqu($eqgoocgaqwqcimie)) {
                            if ($aiooqyausygaasqm = ManipulateAttachment::ecqkouyiioksggkw($eqgoocgaqwqcimie)) {
                                $eqgoocgaqwqcimie = $aiooqyausygaasqm;
                            } else {
                                $eqgoocgaqwqcimie = ManipulateHTML::qgsekwygcgawekeq('img', ['src' => $eqgoocgaqwqcimie, 'width' => '80', 'height' => '80']);
                            }
                        }
                        if (is_numeric($eqgoocgaqwqcimie)) {
                            $eqgoocgaqwqcimie = ManipulateAttachment::qaeeusqkgwagwaqc($eqgoocgaqwqcimie);
                        }
                    }
                } else {
                    if (is_numeric($eqgoocgaqwqcimie)) {
                        if ($aaqqkgyougeiueyq instanceof Foreign && $aaqqkgyougeiueyq->eiyqqesoywqkegwu()) {
                            $aokagokqyuysuksm = $eqgoocgaqwqcimie;
                            $eqgoocgaqwqcimie = $this->aouwuegyyugiwksc($qgoqiacsiccwoawi, $mksyucucyswaukig, !$this->wmwguecgowcscues());
                            if (!$eqgoocgaqwqcimie) {
                                $eqgoocgaqwqcimie = $aokagokqyuysuksm;
                            }
                        } else {
                            $eqgoocgaqwqcimie = $this->wusgwkaycokeckqs($eqgoocgaqwqcimie);
                        }
                    }
                }
            }
        }
        return $eqgoocgaqwqcimie;
    }
    
    public function geyuyukmwaoksywa($migiiksoiymissge, $ewgwqamkygiqaawc = '', $wwgucssaecqekuek = []) : string
    {
        $nsmgceoqaqogqmuw = '';
        if ($migiiksoiymissge && $ewgwqamkygiqaawc) {
            $iwywmkygwewiamwm = ManipulateHTML::qgsekwygcgawekeq('a', ManipulateFormat::omaawkkwwyesqwcc($wwgucssaecqekuek, ['geecqyososceumsk' => $migiiksoiymissge, 'class' => 'ywyaqioiosuucmgq']), true, $ewgwqamkygiqaawc);
            $nsmgceoqaqogqmuw = ManipulateHTML::ciuuiyckmsygceis($iwywmkygwewiamwm);
        }
        return $nsmgceoqaqogqmuw;
    }
    
    public function ykaiaukuaeswygey($mksyucucyswaukig, $ikgwqyuyckaewsow, $eqgoocgaqwqcimie, $wamcomkuwysqgwgk = '<div>%s: %s</div>') : string
    {
        $ukmeuaouyackgwaa = '';
        foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) {
            $uiymkeeaukcyqqik = ManipulateArray::get($mksyucucyswaukig, $aiowsaccomcoikus);
            $aiowsaccomcoikus = ManipulateArray::get($this->oyeskqayoscwciem()->aeosueemgsygqese(), $aiowsaccomcoikus);
            if ($aiowsaccomcoikus && $uiymkeeaukcyqqik) {
                $ukmeuaouyackgwaa .= sprintf($wamcomkuwysqgwgk, $aiowsaccomcoikus->qcgakseyaikigqco(), $this->kamyqikiiuwqiiuw($aiowsaccomcoikus->mwikyscisascoeea(), $uiymkeeaukcyqqik, $mksyucucyswaukig));
            }
            sycygoiaiqqageym:
        }
        oouoqimaaqcmccay:
        if ($ukmeuaouyackgwaa) {
            $eqgoocgaqwqcimie = "{$eqgoocgaqwqcimie}<hr>{$ukmeuaouyackgwaa}";
        }
        return $eqgoocgaqwqcimie;
    }
    
    public function wkmkqaiwuqouweye($aiowsaccomcoikus, $eqgoocgaqwqcimie, $cackiyicawmkyqqg = self::EQUAL_SYMBOL, $siykeiywomwwuoiw = null) : ?Builder
    {
        try {
            if (!$siykeiywomwwuoiw) {
                $siykeiywomwwuoiw = $this->gqaysymikgeawkqa();
            }
            if ($siykeiywomwwuoiw) {
                
                $siykeiywomwwuoiw = $siykeiywomwwuoiw->where($aiowsaccomcoikus, $cackiyicawmkyqqg, $eqgoocgaqwqcimie);
            }
        } catch (Exception $wgaoewqkwgomoaai) {
            $siykeiywomwwuoiw = null;
        }
        return $siykeiywomwwuoiw;
    }
    
    public function woimamkkeyoyauoa($aiowsaccomcoikus, $eqgoocgaqwqcimie, $cackiyicawmkyqqg = self::EQUAL_SYMBOL, $wkkweuacukumqmya = ['*'], $aiamqeawckcsuaou = self::GET) : array
    {
        $aqykuigiuwmmcieu = [];
        $siykeiywomwwuoiw = $this->wkmkqaiwuqouweye($aiowsaccomcoikus, $cackiyicawmkyqqg, $eqgoocgaqwqcimie);
        if ($siykeiywomwwuoiw) {
            $aqykuigiuwmmcieu = $this->aocqcwaksksgckaw($siykeiywomwwuoiw, $wkkweuacukumqmya, $aiamqeawckcsuaou);
        }
        return $aqykuigiuwmmcieu;
    }
    
    public function mkcmqiiwgccguoko($aiowsaccomcoikus, $eqgoocgaqwqcimie, $cackiyicawmkyqqg = self::EQUAL_SYMBOL, $wkkweuacukumqmya = ['*']) : array
    {
        return $this->woimamkkeyoyauoa($aiowsaccomcoikus, $eqgoocgaqwqcimie, $cackiyicawmkyqqg, $wkkweuacukumqmya, self::PLUCK);
    }
    
    public function cwgkcyyaymmsomqa($mguygkocuoaoqqkg) : array
    {
        if ($mguygkocuoaoqqkg && is_array($mguygkocuoaoqqkg)) {
            foreach ($mguygkocuoaoqqkg as $momcykaoccoymeig => $mksyucucyswaukig) {
                $mguygkocuoaoqqkg[$momcykaoccoymeig] = $this->scqakcemaqsqkema($mksyucucyswaukig);
                kciouyuaqkyqomam:
            }
            gygawoqywkukmqee:
        } else {
            $mguygkocuoaoqqkg = [];
        }
        return $mguygkocuoaoqqkg;
    }
    
    public function scqakcemaqsqkema($mksyucucyswaukig, $yiosiwewiecqmkaa = [])
    {
        if ($mksyucucyswaukig) {
            foreach ($mksyucucyswaukig as $aiowsaccomcoikus => $eqgoocgaqwqcimie) {
                if (!$yiosiwewiecqmkaa || in_array($aiowsaccomcoikus, $yiosiwewiecqmkaa)) {
                    $mksyucucyswaukig = ManipulateArray::set($mksyucucyswaukig, [$aiowsaccomcoikus => $this->kamyqikiiuwqiiuw($aiowsaccomcoikus, $eqgoocgaqwqcimie, $mksyucucyswaukig)]);
                }
                umgaesggesswoaqe:
            }
            wwkgkaecgiwggcck:
        }
        return $mksyucucyswaukig;
    }
    
    public function yaswokogyqciggeq($aiowsaccomcoikus, $eqgoocgaqwqcimie, $qgoqiacsiccwoawi = self::ID, $cackiyicawmkyqqg = self::EQUAL_SYMBOL) : array
    {
        return $this->mkcmqiiwgccguoko($aiowsaccomcoikus, $eqgoocgaqwqcimie, $cackiyicawmkyqqg, $qgoqiacsiccwoawi);
    }
    
    public function cwkywyqksyucoyia($ikgwqyuyckaewsow, $wkkweuacukumqmya = ['*']) : array
    {
        $aqykuigiuwmmcieu = [];
        $siykeiywomwwuoiw = $this->kqewyqqqiyiouaou($ikgwqyuyckaewsow);
        if ($siykeiywomwwuoiw) {
            $aqykuigiuwmmcieu = $this->aocqcwaksksgckaw($siykeiywomwwuoiw, $wkkweuacukumqmya);
        }
        return $aqykuigiuwmmcieu;
    }
    
    public function kqewyqqqiyiouaou($ikgwqyuyckaewsow, $siykeiywomwwuoiw = null)
    {
        if (!$siykeiywomwwuoiw instanceof Builder && !$siykeiywomwwuoiw instanceof Relation) {
            $siykeiywomwwuoiw = $this->gqaysymikgeawkqa();
        }
        try {
            if ($siykeiywomwwuoiw) {
                foreach ($ikgwqyuyckaewsow as $qgoqiacsiccwoawi => $ywmkwiwkosakssii) {
                    $mqogqgswmasasmik = ManipulateArray::get($ywmkwiwkosakssii, self::NOT, false);
                    $eqgoocgaqwqcimie = ManipulateArray::get($ywmkwiwkosakssii, self::VALUE, $ywmkwiwkosakssii);
                    $yummaigqmauwcyou = ManipulateArray::get($ywmkwiwkosakssii, self::CLAUSE, self::WHERE);
                    $qsycuegoicqcqkmo = ManipulateArray::get($ywmkwiwkosakssii, self::BOOLEAN, self::AND);
                    $cackiyicawmkyqqg = ManipulateArray::get($ywmkwiwkosakssii, self::OPERATOR, self::EQUAL_SYMBOL);
                    switch ($yummaigqmauwcyou) {
                        case self::CONTAIN:
                            
                            $siykeiywomwwuoiw = $siykeiywomwwuoiw->whereIn($qgoqiacsiccwoawi, $eqgoocgaqwqcimie, $qsycuegoicqcqkmo, $mqogqgswmasasmik);
                            goto quwcqmyokicssyew;
                        case self::JOIN:
                            $sqeykgyoooqysmca = ManipulateArray::get($ywmkwiwkosakssii, self::TYPE, 'inner');
                            $icsywsyukqcciiky = ManipulateArray::get($ywmkwiwkosakssii, self::WHERE, false);
                            $aasascamegmwqmqk = $qgoqiacsiccwoawi;
                            
                            $siykeiywomwwuoiw = $siykeiywomwwuoiw->join($aasascamegmwqmqk, $eqgoocgaqwqcimie[0], $cackiyicawmkyqqg, $eqgoocgaqwqcimie[1], $sqeykgyoooqysmca, $icsywsyukqcciiky);
                            goto quwcqmyokicssyew;
                        case self::WHERE:
                            if (is_array($eqgoocgaqwqcimie)) {
                                switch ($qsycuegoicqcqkmo) {
                                    case self::AND:
                                        
                                        $siykeiywomwwuoiw->whereIn($qgoqiacsiccwoawi, $eqgoocgaqwqcimie, $qsycuegoicqcqkmo, $mqogqgswmasasmik);
                                        goto gimmuoqwckiseaik;
                                    case self::OR:
                                        
                                        $siykeiywomwwuoiw->orWhereIn($qgoqiacsiccwoawi, $eqgoocgaqwqcimie);
                                        goto gimmuoqwckiseaik;
                                }
                                cmqucgoewuyieoyk:
                                gimmuoqwckiseaik:
                            } else {
                                switch ($qsycuegoicqcqkmo) {
                                    case self::AND:
                                        
                                        $siykeiywomwwuoiw->where($qgoqiacsiccwoawi, $cackiyicawmkyqqg, $eqgoocgaqwqcimie, $qsycuegoicqcqkmo);
                                        goto yqykqysmiquwoasu;
                                    case self::OR:
                                        
                                        $siykeiywomwwuoiw->orWhere($qgoqiacsiccwoawi, $cackiyicawmkyqqg, $eqgoocgaqwqcimie);
                                        goto yqykqysmiquwoasu;
                                }
                                ayyweymyuuiauamo:
                                yqykqysmiquwoasu:
                            }
                            goto quwcqmyokicssyew;
                        case self::DATE:
                            $siykeiywomwwuoiw = $this->ewaugyyiauqmiwsu($qgoqiacsiccwoawi, $eqgoocgaqwqcimie, $cackiyicawmkyqqg, $qsycuegoicqcqkmo, $mqogqgswmasasmik, $siykeiywomwwuoiw);
                            goto quwcqmyokicssyew;
                    }
                    iqcogmsguwoikame:
                    quwcqmyokicssyew:
                    kiwqkcaekqqyuegq:
                }
                qsygcycwieukkgwc:
            }
        } catch (Exception $wgaoewqkwgomoaai) {
            $siykeiywomwwuoiw = null;
        }
        return $siykeiywomwwuoiw;
    }
    
    public function ieieyoeqmmeysauc($aiowsaccomcoikus, $eqgoocgaqwqcimie, $cackiyicawmkyqqg = self::EQUAL_SYMBOL, $siykeiywomwwuoiw = null) : int
    {
        $gaeqamemwmwsyukm = 0;
        $siykeiywomwwuoiw = $this->wkmkqaiwuqouweye($aiowsaccomcoikus, $cackiyicawmkyqqg, $eqgoocgaqwqcimie, $siykeiywomwwuoiw);
        if ($siykeiywomwwuoiw) {
            
            $gaeqamemwmwsyukm = $siykeiywomwwuoiw->count();
        }
        return $gaeqamemwmwsyukm;
    }
    
    public function ssqiqiiwyusygike($aiowsaccomcoikus, $eqgoocgaqwqcimie, $qgoqiacsiccwoawi, $cackiyicawmkyqqg = self::EQUAL_SYMBOL)
    {
        $qsmaqqyoggcuyukq = 0;
        $siykeiywomwwuoiw = $this->wkmkqaiwuqouweye($aiowsaccomcoikus, $cackiyicawmkyqqg, $eqgoocgaqwqcimie);
        if ($siykeiywomwwuoiw) {
            
            $qsmaqqyoggcuyukq = $siykeiywomwwuoiw->sum($qgoqiacsiccwoawi);
        }
        return $qsmaqqyoggcuyukq;
    }
    
    public function ewaugyyiauqmiwsu($ymaogssqccumcyqa, $eqgoocgaqwqcimie, $cackiyicawmkyqqg = self::GE_SYMBOL, $qsycuegoicqcqkmo = self::AND, $mqogqgswmasasmik = false, $siykeiywomwwuoiw = null) : ?Builder
    {
        try {
            if (!$siykeiywomwwuoiw) {
                $siykeiywomwwuoiw = $this->gqaysymikgeawkqa();
            }
            if ($cackiyicawmkyqqg == 'between' && is_array($eqgoocgaqwqcimie)) {
                
                $siykeiywomwwuoiw = $siykeiywomwwuoiw->whereBetween($ymaogssqccumcyqa, $eqgoocgaqwqcimie, $qsycuegoicqcqkmo, $mqogqgswmasasmik);
            } else {
                if (is_numeric($eqgoocgaqwqcimie)) {
                    $eqgoocgaqwqcimie = new \DateTime($eqgoocgaqwqcimie);
                }
                
                $siykeiywomwwuoiw = $siykeiywomwwuoiw->whereDate($ymaogssqccumcyqa, $cackiyicawmkyqqg, $eqgoocgaqwqcimie, $qsycuegoicqcqkmo);
            }
        } catch (Exception $wgaoewqkwgomoaai) {
        }
        return $siykeiywomwwuoiw;
    }
    
    public function eowgwggyqseqeywy($kwkmegesqkqwyska, $cackiyicawmkyqqg = self::GRATER_SYMBOL, $wkkweuacukumqmya = ['*']) : array
    {
        return $this->iiqauwkoiguyeawu($this->ewaugyyiauqmiwsu(self::CREATED_AT, $kwkmegesqkqwyska, $cackiyicawmkyqqg), $wkkweuacukumqmya);
    }
    
    public function qogaqkcsogcqiaic($mksyucucyswaukig, $aiowsaccomcoikus, $ggauoeuaesiymgee = null)
    {
        if (!$aiowsaccomcoikus instanceof Field) {
            $ksiyqouuaoymsycg = $this->oyeskqayoscwciem()->uqeoyqiwywwmsiew($aiowsaccomcoikus);
            if ($ksiyqouuaoymsycg) {
                $aiowsaccomcoikus = $ksiyqouuaoymsycg;
            }
        }
        if ($aiowsaccomcoikus instanceof Field) {
            $eqgoocgaqwqcimie = ManipulateArray::get($mksyucucyswaukig, $aiowsaccomcoikus->mwikyscisascoeea(), $ggauoeuaesiymgee);
            if ($eqgoocgaqwqcimie) {
                if ($aiowsaccomcoikus instanceof Json) {
                    $eqgoocgaqwqcimie = json_decode($eqgoocgaqwqcimie);
                }
            }
        } else {
            $eqgoocgaqwqcimie = ManipulateArray::get($mksyucucyswaukig, $aiowsaccomcoikus, $ggauoeuaesiymgee);
        }
        return $eqgoocgaqwqcimie;
    }
    
    private function aocqcwaksksgckaw($siykeiywomwwuoiw, $wkkweuacukumqmya = ['*'], $aiamqeawckcsuaou = self::GET) : array
    {
        $uomewyckeuqoqocu = [];
        $iwqgomgkuumgyswi = $this->ymkikmwesqgscscy($siykeiywomwwuoiw, $wkkweuacukumqmya, $aiamqeawckcsuaou);
        if ($iwqgomgkuumgyswi) {
            $uomewyckeuqoqocu = $iwqgomgkuumgyswi->sacmkccceuywoqsq();
        }
        return $uomewyckeuqoqocu;
    }
    
    public function ymkikmwesqgscscy($siykeiywomwwuoiw, $wkkweuacukumqmya = ['*'], $aiamqeawckcsuaou = self::GET) : ?Collection
    {
        if (!$siykeiywomwwuoiw) {
            $siykeiywomwwuoiw = $this->gqaysymikgeawkqa();
        }
        $iwqgomgkuumgyswi = null;
        if ($siykeiywomwwuoiw) {
            if (in_array($aiamqeawckcsuaou, [self::GET, self::PLUCK])) {
                $iwqgomgkuumgyswi = $siykeiywomwwuoiw->{$aiamqeawckcsuaou}($wkkweuacukumqmya);
            }
        }
        return $iwqgomgkuumgyswi;
    }
    
    public function kmqmiwcimmagogoy($siykeiywomwwuoiw, $wkkweuacukumqmya = ['*'], $aiamqeawckcsuaou = self::GET)
    {
        $qsmaqqyoggcuyukq = 0;
        $iwqgomgkuumgyswi = $this->ymkikmwesqgscscy($siykeiywomwwuoiw, $wkkweuacukumqmya, $aiamqeawckcsuaou);
        if ($iwqgomgkuumgyswi) {
            $qsmaqqyoggcuyukq = $iwqgomgkuumgyswi->qsmaqqyoggcuyukq();
        }
        return $qsmaqqyoggcuyukq;
    }
    
    public function iiqauwkoiguyeawu($siykeiywomwwuoiw, $wkkweuacukumqmya = ['*']) : array
    {
        return $this->aocqcwaksksgckaw($siykeiywomwwuoiw, $wkkweuacukumqmya);
    }
    
    public function iykmimcgkyyoimoc($siykeiywomwwuoiw, $wkkweuacukumqmya = ['*']) : array
    {
        return $this->aocqcwaksksgckaw($siykeiywomwwuoiw, $wkkweuacukumqmya, self::PLUCK);
    }
    
    public function wsymaekkqgymcyms($siykeiywomwwuoiw, $wkkweuacukumqmya = ['*']) : ?Collection
    {
        return $this->ymkikmwesqgscscy($siykeiywomwwuoiw, $wkkweuacukumqmya, self::PLUCK);
    }
    
    public function ewkswoqykwsuckok($siykeiywomwwuoiw, $qgoqiacsiccwoawi, $ecysmcqmumqmaagg = self::ASC)
    {
        if (!$siykeiywomwwuoiw) {
            $siykeiywomwwuoiw = $this->gqaysymikgeawkqa();
        }
        if ($siykeiywomwwuoiw) {
            
            $siykeiywomwwuoiw = $siykeiywomwwuoiw->orderBy($qgoqiacsiccwoawi, $ecysmcqmumqmaagg);
        }
        return $siykeiywomwwuoiw;
    }
    
    public function awkaaqmauiuwwsca($siykeiywomwwuoiw, $wkkweuacukumqmya = ['*'], $qgoqiacsiccwoawi = null, $ecysmcqmumqmaagg = null)
    {
        if (!$siykeiywomwwuoiw) {
            $siykeiywomwwuoiw = $this->gqaysymikgeawkqa();
        }
        if ($qgoqiacsiccwoawi && $ecysmcqmumqmaagg) {
            $siykeiywomwwuoiw = $this->ewkswoqykwsuckok($siykeiywomwwuoiw, $qgoqiacsiccwoawi, $ecysmcqmumqmaagg);
        }
        $mksyucucyswaukig = null;
        if ($siykeiywomwwuoiw) {
            
            $mksyucucyswaukig = $siykeiywomwwuoiw->first($wkkweuacukumqmya);
        }
        return $mksyucucyswaukig;
    }
    
    public function kasiqqyyaswsgics() : array
    {
        return $this->iiqauwkoiguyeawu($this->gqaysymikgeawkqa());
    }
    
    public function myywwqkyiwawwquy($qgoqiacsiccwoawi) : string
    {
        return "{$this->cokoiaeeomgssqgy()}.{$qgoqiacsiccwoawi}";
    }
    
    public function cokoiaeeomgssqgy() : string
    {
        
        return $this->getTable();
    }
    
    public function uckwcqkkygmuquqq($aasascamegmwqmqk, $sysgmomuyiiawwcm, $gcegymooyemmaysk, $siykeiywomwwuoiw = null, $cackiyicawmkyqqg = self::EQUAL_SYMBOL, $sqeykgyoooqysmca = 'inner', $icsywsyukqcciiky = false) : ?Builder
    {
        if (!$siykeiywomwwuoiw) {
            $siykeiywomwwuoiw = $this->gqaysymikgeawkqa();
        }
        if ($siykeiywomwwuoiw) {
            
            $siykeiywomwwuoiw = $siykeiywomwwuoiw->join($aasascamegmwqmqk, $sysgmomuyiiawwcm, $cackiyicawmkyqqg, $gcegymooyemmaysk, $sqeykgyoooqysmca, $icsywsyukqcciiky);
        }
        return $siykeiywomwwuoiw;
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
