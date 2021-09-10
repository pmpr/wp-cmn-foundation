<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613bb98fa102d             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\ORM\View;

use Pmpr\Common\Foundation\Decorator\DecoratorQuery;
use Pmpr\Common\Foundation\Decorator\DecoratorUser;
use Pmpr\Common\Foundation\Manipulate\ManipulateFormat;
use Pmpr\Common\Foundation\Manipulate\ManipulateServer;
use Pmpr\Common\Foundation\Manipulate\ManipulateUser;
use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateHTML;
use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateMenu;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;
use Pmpr\Common\Foundation\ORM\Common;
use Pmpr\Common\Foundation\ORM\DB\Model;
use Pmpr\Common\Foundation\ORM\ORM;
use Pmpr\Common\Foundation\ORM\Register;

class View extends Common
{
    
    protected ?string $name = '';
    
    protected array $args = [];
    
    protected ?Model $model = null;
    
    protected array $columns = [];
    
    protected bool $initialized = false;
    
    public function __construct(Model $meywaqqsugaoeyys, $ywmkwiwkosakssii = [])
    {
        $this->model = $meywaqqsugaoeyys;
        $yyksucsgisomecgg = $meywaqqsugaoeyys->oyeskqayoscwciem();
        $this->name = $meywaqqsugaoeyys->miwqiiqeegeqcwis();
        $this->args = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ['type' => 'custom', 'menu_slug' => $yyksucsgisomecgg->aakmagwggmkoiiyu(), 'menu_icon' => '', 'page_title' => '', 'capability' => 'manage_options', 'menu_title' => $yyksucsgisomecgg->qeeuwmmksmqiuywg(), 'parent_slug' => $yyksucsgisomecgg->egockcwgmeocqeqc(), 'show_in_menu' => true, 'menu_position' => null]);
        parent::__construct();
    }
    public function wigskegsqequoeks()
    {
        $wgaiuiysuegayseo = $this->imkyoqyocosuqasu('parent_slug');
        $this->qcsmikeggeemccuu('init', [$this, 'init'])->qcsmikeggeemccuu('admin_init', [$this, 'yeyiguyegmmyusea'])->qcsmikeggeemccuu('admin_menu', [$this, 'euqgwiscwgqkqkec'], $wgaiuiysuegayseo ? 11 : 12);
        parent::wigskegsqequoeks();
    }
    public function kgquecmsgcouyaya()
    {
        $this->cecaguuoecmccuse('admin_init', [$this, 'cykgqekykyocoqgo'], 11)->cecaguuoecmccuse('screen_settings', [$this, 'iiusskiccswyocyg'], 10, 2)->cecaguuoecmccuse('screen_options_show_screen', [$this, 'kuyocyyeumauewwa'], 10, 2)->cecaguuoecmccuse('custom-table-set-screen-option', [$this, 'siqksaekggmqeics'], 10, 3);
        parent::kgquecmsgcouyaya();
    }
    
    public function oyeskqayoscwciem() : Register
    {
        return $this->mgogaykgkoogasim()->oyeskqayoscwciem();
    }
    
    public function ukimmgwaaymwayws() : ?bool
    {
        return $this->initialized;
    }
    public function init()
    {
    }
    
    public function qcsgmgoukiouuscw() : bool
    {
        global $pagenow;
        return $pagenow === 'admin.php' && ManipulateServer::get('page') === $this->aqcogscycyycgkuq();
    }
    
    public function swsoqemyygecmsao() : bool
    {
        return $this->qcsgmgoukiouuscw() && $this->oyeskqayoscwciem()->uwaascqoguwkwiaw();
    }
    public function yeyiguyegmmyusea()
    {
        if ($this->swsoqemyygecmsao()) {
            $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("before_init_{$this->oyeskqayoscwciem()->aakmagwggmkoiiyu()}_{$this->gueasuouwqysmomu()}"), $this);
            $this->mqyuagguukgcoeka();
            $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("after_init_{$this->oyeskqayoscwciem()->aakmagwggmkoiiyu()}_{$this->gueasuouwqysmomu()}"), $this);
        }
    }
    
    public function yoqiwysegascakim()
    {
        return $this->imkyoqyocosuqasu('columns', []);
    }
    
    public function syskqukmqoycyswc()
    {
        return $this->imkyoqyocosuqasu('queries', []);
    }
    
    public function gueasuouwqysmomu()
    {
        return $this->imkyoqyocosuqasu('type', 'custom');
    }
    
    public function mgogaykgkoogasim() : ?Model
    {
        return $this->model;
    }
    
    public function aakmagwggmkoiiyu() : ?string
    {
        return $this->name;
    }
    
    public function kooiucqkggeagccu() : ?array
    {
        return $this->args;
    }
    
    public function qmgcisuuikgmqcsu() : string
    {
        return $this->ekwwgogmwykqggyi(admin_url("admin.php?page=" . $this->aqcogscycyycgkuq()));
    }
    
    public function ekwwgogmwykqggyi(string $iwywmkygwewiamwm) : string
    {
        $uoomaookgsyciacm = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw('orm_view_link_queries'), [], $this->mgogaykgkoogasim(), $iwywmkygwewiamwm);
        if ($uoomaookgsyciacm) {
            $iwywmkygwewiamwm = DecoratorQuery::yqymaqmqiqmmmsoo($uoomaookgsyciacm, $iwywmkygwewiamwm);
        }
        return $iwywmkygwewiamwm;
    }
    
    public function aqcogscycyycgkuq()
    {
        return $this->imkyoqyocosuqasu('menu_slug');
    }
    public function euqgwiscwgqkqkec()
    {
        $cyiwaggmwimigmcc = $this->imkyoqyocosuqasu('show_in_menu');
        $ekiuyucoiagmscgy = [$this, 'render'];
        $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("orm_view_add_menu_{$this->gueasuouwqysmomu()}"), $this->kooiucqkggeagccu(), $ekiuyucoiagmscgy, $this->mgogaykgkoogasim());
        if ($cyiwaggmwimigmcc) {
            $aaokuekaimigoyue = $this->aqcogscycyycgkuq();
            $ewuukoycimkekouc = $this->imkyoqyocosuqasu('menu_title');
            $meqocwsecsywiiqs = $this->imkyoqyocosuqasu('page_title');
            $kuuiuigeacouwmaa = $this->imkyoqyocosuqasu('position');
            $eogowigeyucaauig = $this->imkyoqyocosuqasu('capability');
            $wgaiuiysuegayseo = $this->imkyoqyocosuqasu('parent_slug');
            if ($wgaiuiysuegayseo) {
                ManipulateMenu::wessoumqogciwogg($wgaiuiysuegayseo, $meqocwsecsywiiqs, $ewuukoycimkekouc, $eogowigeyucaauig, $aaokuekaimigoyue, $ekiuyucoiagmscgy, $kuuiuigeacouwmaa);
            } else {
                ManipulateMenu::iyaokukyeukqokqe($meqocwsecsywiiqs, $ewuukoycimkekouc, $eogowigeyucaauig, $aaokuekaimigoyue, $ekiuyucoiagmscgy, $this->imkyoqyocosuqasu('menu_icon'), $this->imkyoqyocosuqasu('menu_position'));
            }
        }
    }
    public function render()
    {
        $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("render_{$this->oyeskqayoscwciem()->aakmagwggmkoiiyu()}_{$this->gueasuouwqysmomu()}"), $this);
    }
    public function mqyuagguukgcoeka()
    {
    }
    
    public function mmukyoaoamekoswk($gcgsqcoqciockquc) : bool
    {
        $aaokuekaimigoyue = ManipulateArray::get(explode('_page_', $gcgsqcoqciockquc->id), 1);
        return $aaokuekaimigoyue === $this->aqcogscycyycgkuq();
    }
    public function cykgqekykyocoqgo()
    {
        $qiouiwasaauyaaue = ManipulateServer::ayueggmoqeeukqmq('wp_screen_options', []);
        if ($qiouiwasaauyaaue) {
            check_admin_referer('screen-options-nonce', 'screenoptionnonce');
            $mkucggyaiaukqoce = ManipulateUser::get();
            if ($mkucggyaiaukqoce) {
                $omkysikckkcieckq = $qiouiwasaauyaaue['option'];
                $eqgoocgaqwqcimie = $qiouiwasaauyaaue['value'];
                if ($omkysikckkcieckq == sanitize_key($omkysikckkcieckq)) {
                    $omkysikckkcieckq = str_replace('-', '_', $omkysikckkcieckq);
                    $eqgoocgaqwqcimie = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw('set-screen-option', ORM::class), false, $omkysikckkcieckq, $eqgoocgaqwqcimie);
                    if ($eqgoocgaqwqcimie) {
                        DecoratorUser::ksmqawcowkmegigw($omkysikckkcieckq, $eqgoocgaqwqcimie, $mkucggyaiaukqoce);
                        $eeamcawaiqocomwy = DecoratorQuery::oiamiqcuyksmmomm(['pagenum', 'apage', 'paged'], wp_get_referer());
                        if ($wmekckkyoiyickmk = ManipulateServer::ayueggmoqeeukqmq('mode')) {
                            $eeamcawaiqocomwy = DecoratorQuery::yqymaqmqiqmmmsoo(['mode' => $wmekckkyoiyickmk], $eeamcawaiqocomwy);
                        }
                        wp_safe_redirect($eeamcawaiqocomwy);
                        exit;
                    }
                }
            }
        }
    }
    
    public function imkyoqyocosuqasu($uusmaiomayssaecw, $ggauoeuaesiymgee = null)
    {
        return ManipulateArray::get($this->kooiucqkggeagccu(), $uusmaiomayssaecw, $ggauoeuaesiymgee);
    }
    
    public function kuyocyyeumauewwa($ekcswiguywieeeoc, $gcgsqcoqciockquc) : bool
    {
        return $ekcswiguywieeeoc && $this->mmukyoaoamekoswk($gcgsqcoqciockquc);
    }
    
    public function kkooswakmamasmyg($qeqooyuoiasweuck, $gcgsqcoqciockquc)
    {
        
    }
    
    public function iiusskiccswyocyg($qeqooyuoiasweuck, $gcgsqcoqciockquc) : string
    {
        
        if ($this->mmukyoaoamekoswk($gcgsqcoqciockquc)) {
            ob_start();
            $this->kkooswakmamasmyg($qeqooyuoiasweuck, $gcgsqcoqciockquc);
            $qeqooyuoiasweuck .= ob_get_clean();
        }
        return $qeqooyuoiasweuck;
    }
    
    public function siqksaekggmqeics($wsayskqwkoauuyks, $omkysikckkcieckq, $eqgoocgaqwqcimie)
    {
        return $wsayskqwkoauuyks;
    }
    
    public function mmqossqsksemasay($pkyyagewkiyckmwy) : ?string
    {
        return ManipulateHTML::smawkkqgsoawiquc($this->oyeskqayoscwciem()->uikgwcuascgeissw($pkyyagewkiyckmwy), $this->oyeskqayoscwciem()->qyyikeaseoskcacm(), ['class' => 'icon-lg'], true);
    }
}
