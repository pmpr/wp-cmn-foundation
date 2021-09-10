<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613bb98fa102d             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\ORM\View;

use Pmpr\Common\Foundation\Decorator\DecoratorUser;
use Pmpr\Common\Foundation\Manipulate\ManipulateFormat;
use Pmpr\Common\Foundation\Manipulate\ManipulateServer;
use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateHTML;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;
use Pmpr\Common\Foundation\ORM\DB\Builder;
use Pmpr\Common\Foundation\ORM\DB\Field\DateTime;
use Pmpr\Common\Foundation\ORM\DB\Field\Foreign;
use Pmpr\Common\Foundation\ORM\DB\Model;
use Pmpr\Common\Foundation\WPListTable;

class ListTable extends WPListTable
{
    
    protected ?Model $model = null;
    
    public function __construct(Model $meywaqqsugaoeyys)
    {
        $this->model = $meywaqqsugaoeyys;
        $yyksucsgisomecgg = $meywaqqsugaoeyys->oyeskqayoscwciem();
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($yyksucsgisomecgg->sacmkccceuywoqsq(true), ['screen' => convert_to_screen($yyksucsgisomecgg->qeeuwmmksmqiuywg())]);
        parent::__construct($ywmkwiwkosakssii);
    }
    
    public function mgogaykgkoogasim() : ?Model
    {
        return $this->model;
    }
    function no_items()
    {
        echo $this->mgogaykgkoogasim()->oyeskqayoscwciem()->uikgwcuascgeissw('not_found');
    }
    
    protected function get_views()
    {
        $umwgoasiowmqcumw = parent::get_views();
        return $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("{$this->mgogaykgkoogasim()->miwqiiqeegeqcwis()}_manage_views"), $umwgoasiowmqcumw);
    }
    
    public function get_columns()
    {
        $wkkweuacukumqmya = [];
        if ($this->get_bulk_actions()) {
            $wkkweuacukumqmya['cb'] = ManipulateHTML::qgsekwygcgawekeq('input', ['type' => 'checkbox']);
        }
        return $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("{$this->mgogaykgkoogasim()->miwqiiqeegeqcwis()}_manage_columns"), $wkkweuacukumqmya);
    }
    
    public function ocimsyskieegygok()
    {
        return ManipulateServer::get('s', '');
    }
    
    public function column_cb($igqsaukqcqscimok)
    {
        $meywaqqsugaoeyys = $this->mgogaykgkoogasim();
        $ceiwsaacewygcsqg = $meywaqqsugaoeyys->kumuygiiqswoyasy();
        $gkswkiicccswksiq = $meywaqqsugaoeyys->oyeskqayoscwciem()->gwaeeegmgggawiyi('edit_items');
        if (DecoratorUser::scmcyesmmikkucie($gkswkiicccswksiq)) {
            $eqgoocgaqwqcimie = $igqsaukqcqscimok->{$ceiwsaacewygcsqg};
            echo $this->iuygowkemiiwqmiw('callback', ['value' => $eqgoocgaqwqcimie, 'title' => __('Select Item #%d', PR__CMN__FOUNDATION), 'text' => __('&#8220;Item #%d&#8221; is locked', PR__CMN__FOUNDATION)], ['class' => self::class]);
        }
    }
    
    protected function get_bulk_actions() : array
    {
        $meywaqqsugaoeyys = $this->mgogaykgkoogasim();
        $ccowyogiqwikkkie = [];
        if ($meywaqqsugaoeyys->mukyysqkgaimcygs()) {
            $ccowyogiqwikkkie['delete'] = __('Delete', PR__CMN__FOUNDATION);
        }
        return (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("{$this->mgogaykgkoogasim()->miwqiiqeegeqcwis()}_bulk_actions"), $ccowyogiqwikkkie, $this->umaeoegyykkkqmia());
    }
    
    public function get_sortable_columns() : array
    {
        return (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("{$this->mgogaykgkoogasim()->miwqiiqeegeqcwis()}_manage_sortable_columns"), []);
    }
    
    protected function get_table_classes() : array
    {
        return ['widefat', 'fixed', 'striped', $this->mgogaykgkoogasim()->miwqiiqeegeqcwis()];
    }
    
    public function search_box($cmwygeyygwqaemaq, $euueacigmgoqkimu)
    {
        if ($this->has_items()) {
            $euueacigmgoqkimu = $euueacigmgoqkimu . '-search-input';
            $icwicymcioeyeyek = $_POST;
            $sikaymiwcesagayc = ManipulateArray::get($icwicymcioeyeyek, 'orderby');
            if ($sikaymiwcesagayc) {
                ManipulateHTML::awwqwouuoioauoaw('input', ['type' => 'hidden', 'name' => 'orderbay', 'value' => $sikaymiwcesagayc], true);
            }
            $umwqusowiqmyseom = ManipulateArray::get($icwicymcioeyeyek, 'order');
            if ($umwqusowiqmyseom) {
                ManipulateHTML::awwqwouuoioauoaw('input', ['type' => 'hidden', 'name' => 'order', 'value' => $umwqusowiqmyseom], true);
            }
            echo $this->iuygowkemiiwqmiw('search_box', ['input' => $euueacigmgoqkimu, 'text' => $cmwygeyygwqaemaq, 'query' => _admin_search_query(), 'submit' => get_submit_button($cmwygeyygwqaemaq, 'button', false, false, ['ID' => 'search-submit'])], ['class' => self::class]);
        }
    }
    
    public function column_default($igqsaukqcqscimok, $column_name)
    {
        $meywaqqsugaoeyys = $this->mgogaykgkoogasim();
        $ceiwsaacewygcsqg = $meywaqqsugaoeyys->kumuygiiqswoyasy();
        $eqgoocgaqwqcimie = ManipulateArray::get($igqsaukqcqscimok, $column_name, '');
        $aokagokqyuysuksm = (int) $igqsaukqcqscimok->{$ceiwsaacewygcsqg};
        $aiowsaccomcoikus = $meywaqqsugaoeyys->oyeskqayoscwciem()->uqeoyqiwywwmsiew($column_name);
        $aqykuigiuwmmcieu = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("{$meywaqqsugaoeyys->miwqiiqeegeqcwis()}_manage_custom_column"), '', $column_name, $eqgoocgaqwqcimie, $aokagokqyuysuksm, $igqsaukqcqscimok);
        if (!$aqykuigiuwmmcieu) {
            if ($aiowsaccomcoikus instanceof Foreign) {
            } else {
                if ($aiowsaccomcoikus instanceof DateTime) {
                    $aqykuigiuwmmcieu = $this->seukicauekqqwwme($eqgoocgaqwqcimie, $column_name);
                } else {
                    $aqykuigiuwmmcieu = $eqgoocgaqwqcimie;
                }
            }
        }
        $ccowyogiqwikkkie = $this->get_bulk_actions();
        $awyomkauyyymugeq = !empty($ccowyogiqwikkkie) ? 1 : 0;
        $wkkweuacukumqmya = $this->get_columns();
        $yygmoeguaqyumuui = array_keys($wkkweuacukumqmya);
        if ($column_name === $yygmoeguaqyumuui[$awyomkauyyymugeq]) {
            $iwywmkygwewiamwm = $meywaqqsugaoeyys->uesweuocqoywoyms($aokagokqyuysuksm);
            if (!$iwywmkygwewiamwm) {
                $iwywmkygwewiamwm = $meywaqqsugaoeyys->yyykkcyiksewsoqy($aokagokqyuysuksm);
            }
            if ($iwywmkygwewiamwm) {
                
                $aqykuigiuwmmcieu = ManipulateHTML::ciuuiyckmsygceis(ManipulateHTML::qgsekwygcgawekeq('a', ['href' => $iwywmkygwewiamwm, 'class' => 'row-title', 'aria-label' => sprintf(__('Edit "%s"', PR__CMN__FOUNDATION), $aqykuigiuwmmcieu)], true, $aqykuigiuwmmcieu));
                
                $aqykuigiuwmmcieu .= ManipulateHTML::qgsekwygcgawekeq('button', ['type' => 'button', 'class' => 'toggle-row'], true, ManipulateHTML::qgsekwygcgawekeq('span', ['class' => 'screen-reader-text'], true, __('Show more details', PR__CMN__FOUNDATION)));
            }
        }
        return $aqykuigiuwmmcieu;
    }
    
    public function umaeoegyykkkqmia()
    {
        $meywaqqsugaoeyys = $this->mgogaykgkoogasim();
        $tsuauommsquiesmk = $meywaqqsugaoeyys->aakiaoueckoiyoew();
        $igaagwuyasawwqms = ManipulateArray::get($_GET, $meywaqqsugaoeyys::ORM_FILTER_BY, false);
        $eqgoocgaqwqcimie = ManipulateArray::get($_GET, $meywaqqsugaoeyys::ORM_FILTER_VALUE, false);
        if ((!$eqgoocgaqwqcimie || !$igaagwuyasawwqms) && $tsuauommsquiesmk) {
            $umwgoasiowmqcumw = $this->get_views();
            $eqgoocgaqwqcimie = ManipulateArray::get(array_keys($umwgoasiowmqcumw), 0, false);
        }
        return $eqgoocgaqwqcimie;
    }
    
    public function before_pagination(?Builder $siykeiywomwwuoiw) : ?Builder
    {
        return $siykeiywomwwuoiw;
    }
    
    public function prepare_items($suaemuyiacqyugsm = 1, $weyoqgcesqgeusiu = null)
    {
        $meywaqqsugaoeyys = $this->mgogaykgkoogasim();
        if (!$weyoqgcesqgeusiu) {
            
            $weyoqgcesqgeusiu = $this->get_items_per_page('edit_' . $meywaqqsugaoeyys->miwqiiqeegeqcwis() . '_per_page');
        }
        $siykeiywomwwuoiw = $meywaqqsugaoeyys->gqaysymikgeawkqa();
        if ($siykeiywomwwuoiw) {
            $eqgoocgaqwqcimie = $this->umaeoegyykkkqmia();
            if ($eqgoocgaqwqcimie && $eqgoocgaqwqcimie !== 'all') {
                $aiowsaccomcoikus = $meywaqqsugaoeyys->aakiaoueckoiyoew();
                
                $siykeiywomwwuoiw->where($aiowsaccomcoikus, self::EQUAL_SYMBOL, $eqgoocgaqwqcimie);
            }
            $siykeiywomwwuoiw = $this->before_pagination($siykeiywomwwuoiw);
            $ceiwsaacewygcsqg = $meywaqqsugaoeyys->kumuygiiqswoyasy();
            $meywaqqsugaoeyys->ewkswoqykwsuckok($siykeiywomwwuoiw, $ceiwsaacewygcsqg, self::DESC);
            $siykeiywomwwuoiw = $meywaqqsugaoeyys->aaeswuecycyquqwk($siykeiywomwwuoiw, $this);
            
            $gmwiogsuisuoiwqu = $meywaqqsugaoeyys->aeggeuqycwawueqy($siykeiywomwwuoiw, [self::PAGE => $suaemuyiacqyugsm, 'filter_value' => false, self::PER_PAGE => $weyoqgcesqgeusiu]);
            $this->items = $gmwiogsuisuoiwqu[self::ITEMS];
            
            $this->set_pagination_args(['per_page' => $weyoqgcesqgeusiu, 'total_items' => $gmwiogsuisuoiwqu['pagination']['total'], 'total_pages' => $gmwiogsuisuoiwqu['pagination']['pages']]);
        } else {
            $this->items = [];
        }
    }
    
    public function seukicauekqqwwme($ocogsiouoiuuguym, $qgoqiacsiccwoawi)
    {
        return $this->eciukqcoqmyacwow($ocogsiouoiuuguym);
    }
    
    public function sokuygywyckaocci() : array
    {
        return [];
    }
    
    public function extra_tablenav($wcagyqamwoksawik)
    {
        $ccowyogiqwikkkie = $this->sokuygywyckaocci();
        if ($ccowyogiqwikkkie) {
            ManipulateHTML::awwqwouuoioauoaw('div', ['class' => 'pr-primary-actions'], true, $ccowyogiqwikkkie);
        }
        parent::extra_tablenav($wcagyqamwoksawik);
    }
    
    protected function handle_row_actions($igqsaukqcqscimok, $column_name, $micmwmywmkguiyyk) : string
    {
        $meywaqqsugaoeyys = $this->mgogaykgkoogasim();
        $ccowyogiqwikkkie = '';
        if ($micmwmywmkguiyyk === $column_name) {
            $ceiwsaacewygcsqg = $meywaqqsugaoeyys->kumuygiiqswoyasy();
            $eqgoocgaqwqcimie = $igqsaukqcqscimok->{$ceiwsaacewygcsqg};
            $ccowyogiqwikkkie = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("{$meywaqqsugaoeyys->miwqiiqeegeqcwis()}_row_actions"), [], $eqgoocgaqwqcimie, $this->umaeoegyykkkqmia(), $igqsaukqcqscimok);
            if ($iwywmkygwewiamwm = $meywaqqsugaoeyys->yyykkcyiksewsoqy($eqgoocgaqwqcimie)) {
                $ccowyogiqwikkkie['edit'] = ManipulateHTML::uuccukgasskgimsq('a', ['geecqyososceumsk' => $iwywmkygwewiamwm, 'iskaqimgciqwumgk' => __('Edit', PR__CMN__FOUNDATION)], __('Edit', PR__CMN__FOUNDATION));
            }
            if ($iwywmkygwewiamwm = $meywaqqsugaoeyys->cgccmsewskigcuig($eqgoocgaqwqcimie)) {
                $ccowyogiqwikkkie['delete'] = $meywaqqsugaoeyys->rkmkouiquumiecqy($iwywmkygwewiamwm);
            }
            $ccowyogiqwikkkie = $this->row_actions($ccowyogiqwikkkie);
        }
        return $ccowyogiqwikkkie;
    }
}
