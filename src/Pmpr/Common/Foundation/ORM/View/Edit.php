<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613bb98fa102d             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\ORM\View;

use Pmpr\Common\Foundation\Decorator\DecoratorAsset;
use Pmpr\Common\Foundation\Decorator\DecoratorUser;
use Pmpr\Common\Foundation\FormMaker\Admin\Element\MetaBox;
use Pmpr\Common\Foundation\FormMaker\Admin\Field\Checkbox;
use Pmpr\Common\Foundation\FormMaker\Admin\Field\File;
use Pmpr\Common\Foundation\FormMaker\Admin\Field\Group;
use Pmpr\Common\Foundation\Manipulate\ManipulateServer;
use Pmpr\Common\Foundation\Manipulate\Post\ManipulateAttachment;
use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateTemplate;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;
use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconFontawesomeInterface;
use Pmpr\Common\Foundation\Notice;
use Illuminate\Database\Eloquent\Collection;

class Edit extends ObjectAware
{
    const COOKIE_STORE = 'orm-fields-store';
    const COOKIE_ERRORS = 'orm-fields-errors';
    
    protected $message = false;
    
    protected bool $editing = false;
    public function amsuqecgqokqqaue()
    {
        setcookie(self::COOKIE_STORE, '');
        setcookie(self::COOKIE_ERRORS, '');
        if (isset($_POST['orm-save'])) {
            if ($this->oyeskqayoscwciem()->uwaascqoguwkwiaw()) {
                ManipulateArray::unset($aqmwamyiwgeeymqa, 'orm-save');
                $icwicymcioeyeyek = ManipulateServer::ayueggmoqeeukqmq();
                $meywaqqsugaoeyys = $this->mgogaykgkoogasim();
                $iueymcwwscwqkiyq = self::FAILED;
                $ceiwsaacewygcsqg = $meywaqqsugaoeyys->kumuygiiqswoyasy();
                if ($aokagokqyuysuksm = (int) ManipulateServer::get($ceiwsaacewygcsqg)) {
                    $icwicymcioeyeyek[$aokagokqyuysuksm] = $aokagokqyuysuksm;
                }
                $sogksuscggsicmac = $meywaqqsugaoeyys->gscuuyuyauokoyuo($icwicymcioeyeyek);
                if ($sogksuscggsicmac[self::SUCCESS]) {
                    if ($aokagokqyuysuksm) {
                        $wamcomkuwysqgwgk = __('%s updated successfully.', PR__CMN__FOUNDATION);
                    } else {
                        $mksyucucyswaukig = ManipulateArray::get($sogksuscggsicmac, 'object');
                        $aokagokqyuysuksm = ManipulateArray::get($mksyucucyswaukig, $meywaqqsugaoeyys->kumuygiiqswoyasy());
                        $wamcomkuwysqgwgk = __('%s added successfully.', PR__CMN__FOUNDATION);
                    }
                    $iueymcwwscwqkiyq = self::SUCCESS;
                    Notice::kigowwqauiumummw(sprintf($wamcomkuwysqgwgk, $this->oyeskqayoscwciem()->giiayuqckuiecosm()), 'orm-notice');
                } else {
                    if ($aokagokqyuysuksm) {
                        $wamcomkuwysqgwgk = __('%s could not be updated.', PR__CMN__FOUNDATION);
                    } else {
                        $wamcomkuwysqgwgk = __('%s could not be added.', PR__CMN__FOUNDATION);
                    }
                    $eumukgqciqgksuiq = sprintf($wamcomkuwysqgwgk, $this->oyeskqayoscwciem()->giiayuqckuiecosm());
                    Notice::eumukgqciqgksuiq($eumukgqciqgksuiq, 'orm-notice');
                    setcookie(self::COOKIE_STORE, wp_json_encode($icwicymcioeyeyek));
                    $ueeagokqmgisgauy = ManipulateArray::get($sogksuscggsicmac, 'errors', []);
                    if ($ueeagokqmgisgauy) {
                        setcookie(self::COOKIE_ERRORS, wp_json_encode($ueeagokqmgisgauy));
                    }
                }
                $igscmsiuisqaqwkk = '';
                if ($aokagokqyuysuksm) {
                    if ($iueymcwwscwqkiyq == self::SUCCESS) {
                        $igscmsiuisqaqwkk = $meywaqqsugaoeyys->uesweuocqoywoyms($aokagokqyuysuksm);
                    }
                    if (!$igscmsiuisqaqwkk) {
                        $igscmsiuisqaqwkk = $meywaqqsugaoeyys->yyykkcyiksewsoqy($aokagokqyuysuksm);
                    }
                } else {
                    $igscmsiuisqaqwkk = $meywaqqsugaoeyys->acsiseaeysswwqkw();
                }
                if (!$igscmsiuisqaqwkk) {
                    $igscmsiuisqaqwkk = $meywaqqsugaoeyys->comogmawyoiquwis();
                }
                wp_safe_redirect($igscmsiuisqaqwkk);
                exit;
            } else {
                wp_die(__('Sorry, you are not allowed to edit items of this type.', PR__CMN__FOUNDATION));
            }
        }
    }
    public function render()
    {
        parent::render();
        $this->oemueqoooyaieeum();
        $qksucogmsqmawmwi = null;
        if ($this->oguuceugyqgsqewy()) {
            $meqocwsecsywiiqs = $this->mmqossqsksemasay('edit_item');
            $qksucogmsqmawmwi = $this->mgogaykgkoogasim()->acsiseaeysswwqkw();
        } else {
            $meqocwsecsywiiqs = $this->mmqossqsksemasay('add_new_item');
        }
        echo $this->iuygowkemiiwqmiw('edit', ['id' => $this->mwikyscisascoeea(), 'title' => $meqocwsecsywiiqs, 'name' => $this->oyeskqayoscwciem()->aakmagwggmkoiiyu(), 'object' => $this->imgymusqgccqsqqq(), 'columns' => $this->yoqiwysegascakim(), 'add_url' => $qksucogmsqmawmwi, 'message' => $this->sagusgigmkeysock(), 'add_url_title' => $this->oyeskqayoscwciem()->uikgwcuascgeissw('add_new_item'), 'primary_key' => $this->mgogaykgkoogasim()->kumuygiiqswoyasy()]);
    }
    public function oemueqoooyaieeum()
    {
        DecoratorAsset::imsomwwswyoquoqk('post');
        if (wp_is_mobile()) {
            DecoratorAsset::imsomwwswyoquoqk('jquery-touch-punch');
        }
        $meywaqqsugaoeyys = $this->mgogaykgkoogasim();
        $ymqmyyeuycgmigyo = $meywaqqsugaoeyys->miwqiiqeegeqcwis();
        
        ManipulateTemplate::sikqggwmmykuiymy(['callback' => [$this, 'mycsqqgwwigyiewk'], 'screen' => $ymqmyyeuycgmigyo, 'context' => 'side', self::ID => 'submitdiv', self::ICON => IconFontawesomeInterface::ICON_FLOPPY_DISK, self::TITLE => __('Save Changes', PR__CMN__FOUNDATION), self::PRIORITY => 'core']);
        
        ManipulateTemplate::sikqggwmmykuiymy(['callback' => [$this, 'iuaucuookgoqiiio'], 'screen' => $ymqmyyeuycgmigyo, 'context' => 'normal', self::ID => 'main_fields', self::ICON => $meywaqqsugaoeyys->oyeskqayoscwciem()->qyyikeaseoskcacm(), self::TITLE => $this->oyeskqayoscwciem()->uikgwcuascgeissw($this->oguuceugyqgsqewy() ? 'edit_item' : 'add_new_item'), self::PRIORITY => 'core']);
        $this->cqscqicucmeamkyq('add_meta_boxes', $ymqmyyeuycgmigyo, $this->imgymusqgccqsqqq())->cqscqicucmeamkyq("add_meta_boxes_{$ymqmyyeuycgmigyo}", $this->imgymusqgccqsqqq())->cqscqicucmeamkyq('do_meta_boxes', $ymqmyyeuycgmigyo, 'normal', $this->imgymusqgccqsqqq())->cqscqicucmeamkyq('do_meta_boxes', $ymqmyyeuycgmigyo, 'advanced', $this->imgymusqgccqsqqq())->cqscqicucmeamkyq('do_meta_boxes', $ymqmyyeuycgmigyo, 'side', $this->imgymusqgccqsqqq());
    }
    
    public function sagusgigmkeysock()
    {
        return $this->message;
    }
    public function mqyuagguukgcoeka()
    {
        parent::mqyuagguukgcoeka();
        $this->amsuqecgqokqqaue();
        if ($this->mwikyscisascoeea()) {
            $this->editing = true;
            
            if (!DecoratorUser::scmcyesmmikkucie('edit_item', $this->mwikyscisascoeea())) {
                wp_die(__('Sorry, you are not allowed to edit this item.', PR__CMN__FOUNDATION));
            }
        } else {
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
        }
    }
    public function iuaucuookgoqiiio()
    {
        $meywaqqsugaoeyys = $this->mgogaykgkoogasim();
        $ikgwqyuyckaewsow = $meywaqqsugaoeyys->ugmceccgwaaaigiy();
        $mksyucucyswaukig = $this->imgymusqgccqsqqq();
        $aaeyeciuoqooykka = ManipulateServer::aukgyiaewiccooqw(self::COOKIE_STORE);
        $ueeagokqmgisgauy = ManipulateServer::aukgyiaewiccooqw(self::COOKIE_ERRORS);
        if ($aaeyeciuoqooykka) {
            $aaeyeciuoqooykka = json_decode(wp_unslash($aaeyeciuoqooykka), true);
        }
        if ($ueeagokqmgisgauy) {
            $ueeagokqmgisgauy = json_decode(wp_unslash($ueeagokqmgisgauy), true);
        }
        foreach ($ikgwqyuyckaewsow as $uusmaiomayssaecw => $aiowsaccomcoikus) {
            if ($aiowsaccomcoikus) {
                if ($this->oguuceugyqgsqewy()) {
                    $wkkcmkuiigsukyik = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("{$this->aakmagwggmkoiiyu()}_manage_edit_field_show"), true, $aiowsaccomcoikus->mwikyscisascoeea(), $aiowsaccomcoikus, $mksyucucyswaukig);
                } else {
                    $wkkcmkuiigsukyik = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("{$this->aakmagwggmkoiiyu()}_manage_add_field_show"), true, $aiowsaccomcoikus->mwikyscisascoeea(), $aiowsaccomcoikus);
                }
                if ($wkkcmkuiigsukyik) {
                    if ($this->oguuceugyqgsqewy()) {
                        if ($aiowsaccomcoikus instanceof Group) {
                            $eqgoocgaqwqcimie = $mksyucucyswaukig->{$aiowsaccomcoikus->mwikyscisascoeea()};
                            if ($eqgoocgaqwqcimie instanceof Collection) {
                                $eqgoocgaqwqcimie = array_fill(0, $eqgoocgaqwqcimie->count(), 0);
                            }
                            $aiowsaccomcoikus->mkksewyosgeumwsa(MetaBox::cwiuiiakukcsaakw($meywaqqsugaoeyys->kumuygiiqswoyasy()));
                        } else {
                            if ($aiowsaccomcoikus instanceof Checkbox) {
                                $eqgoocgaqwqcimie = ManipulateArray::get($mksyucucyswaukig, $aiowsaccomcoikus->mwikyscisascoeea()) == '1';
                            } else {
                                $eqgoocgaqwqcimie = ManipulateArray::get($mksyucucyswaukig, $aiowsaccomcoikus->mwikyscisascoeea());
                            }
                        }
                        if ($aiowsaccomcoikus instanceof File && is_numeric($eqgoocgaqwqcimie)) {
                            $eqgoocgaqwqcimie = ManipulateAttachment::mgaeeqsgeoukeokc($eqgoocgaqwqcimie);
                        }
                        $eqgoocgaqwqcimie = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("{$this->aakmagwggmkoiiyu()}_manage_edit_field_value"), $eqgoocgaqwqcimie, $aiowsaccomcoikus->mwikyscisascoeea(), $aiowsaccomcoikus, $mksyucucyswaukig);
                        $eqgoocgaqwqcimie = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("{$this->aakmagwggmkoiiyu()}_manage_edit_{$aiowsaccomcoikus->aakmagwggmkoiiyu()}_value"), $eqgoocgaqwqcimie, $aiowsaccomcoikus, $mksyucucyswaukig);
                    } else {
                        $eqgoocgaqwqcimie = ManipulateArray::get($aaeyeciuoqooykka, $aiowsaccomcoikus->mwikyscisascoeea());
                    }
                    if ($ueeagokqmgisgauy) {
                        $iswcokucwmiosiaq = ManipulateArray::get($ueeagokqmgisgauy, $aiowsaccomcoikus->mwikyscisascoeea());
                        if ($iswcokucwmiosiaq) {
                            $aiowsaccomcoikus->msqsseeaasqysese($iswcokucwmiosiaq);
                        }
                    }
                    $aiowsaccomcoikus->iygyugseyaqwywyg($eqgoocgaqwqcimie);
                } else {
                    ManipulateArray::unset($ikgwqyuyckaewsow, $uusmaiomayssaecw);
                }
            }
            sqiciiuwmykocycc:
        }
        iomcaiwewsawiamu:
        MetaBox::iuaucuookgoqiiio($ikgwqyuyckaewsow, ['echo' => true, 'classes' => 'orm-edit-form']);
    }
    
    public function oguuceugyqgsqewy() : ?bool
    {
        return $this->editing;
    }
    public function mycsqqgwwigyiewk()
    {
        $ymqmyyeuycgmigyo = $this->oyeskqayoscwciem()->aakmagwggmkoiiyu();
        $meywaqqsugaoeyys = $this->mgogaykgkoogasim();
        $myyqiummwqiokocc = __('Add', PR__CMN__FOUNDATION);
        if ($this->oguuceugyqgsqewy()) {
            $myyqiummwqiokocc = __('Update', PR__CMN__FOUNDATION);
        }
        $oammesyieqmwuwyi = [];
        $kqokimuosyuyyucg = 0;
        $cwoayyawiauoeokk = '';
        $mksyucucyswaukig = $this->imgymusqgccqsqqq();
        $ceiwsaacewygcsqg = $meywaqqsugaoeyys->kumuygiiqswoyasy();
        if (is_object($mksyucucyswaukig) && property_exists($mksyucucyswaukig, $ceiwsaacewygcsqg)) {
            $oammesyieqmwuwyi = $meywaqqsugaoeyys->eukyqwmmeyakcyoo($mksyucucyswaukig, $meywaqqsugaoeyys->mgeouagciaesieae());
            $kqokimuosyuyyucg = $mksyucucyswaukig->{$ceiwsaacewygcsqg};
        }
        if ($iwywmkygwewiamwm = $meywaqqsugaoeyys->cgccmsewskigcuig($kqokimuosyuyyucg)) {
            $cwoayyawiauoeokk = $meywaqqsugaoeyys->rkmkouiquumiecqy($iwywmkygwewiamwm);
        }
        $myyqiummwqiokocc = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("{$ymqmyyeuycgmigyo}_screen_submit_label"), $myyqiummwqiokocc, $mksyucucyswaukig, $meywaqqsugaoeyys, $this->oguuceugyqgsqewy());
        echo $this->iuygowkemiiwqmiw('submit_metabox', ['model' => $meywaqqsugaoeyys, 'items' => $oammesyieqmwuwyi, 'object' => $mksyucucyswaukig, 'deletion' => $cwoayyawiauoeokk, 'submit_label' => $myyqiummwqiokocc, 'is_editing' => $this->oguuceugyqgsqewy(), 'hook_prefix' => $this->ygyygikyocoymgaw("{$ymqmyyeuycgmigyo}_screen_submit_meta_box")]);
    }
}
