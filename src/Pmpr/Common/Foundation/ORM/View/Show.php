<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613bb98fa102d             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\ORM\View;

use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateHTML;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateString;
use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconFontawesomeInterface;
use Pmpr\Common\Foundation\ORM\DB\Field\Field;
use Pmpr\Common\Foundation\ORM\DB\Field\Foreign;
use Pmpr\Common\Foundation\ORM\DB\Model;

class Show extends ObjectAware
{
    const PAGINATION_QUERY_VAR = 'pagenum';
    public function render()
    {
        parent::render();
        $aokagokqyuysuksm = $this->mwikyscisascoeea();
        $mksyucucyswaukig = $this->imgymusqgccqsqqq();
        if ($mksyucucyswaukig) {
            $meywaqqsugaoeyys = $this->mgogaykgkoogasim();
            $yygmoeguaqyumuui = array_filter(array_keys((array) $mksyucucyswaukig));
            ManipulateArray::unset($yygmoeguaqyumuui, [self::ID]);
            $yygmoeguaqyumuui = $meywaqqsugaoeyys->giiqwciomksuiymm($yygmoeguaqyumuui);
            $ccowyogiqwikkkie = [];
            if ($meywaqqsugaoeyys->ggwyugcggywuwcse()) {
                $ccowyogiqwikkkie[] = [self::LABEL => $this->oyeskqayoscwciem()->uikgwcuascgeissw('edit_item'), self::COLOR => self::WARNING, self::LINK => $meywaqqsugaoeyys->yyykkcyiksewsoqy($aokagokqyuysuksm)];
            }
            if ($meywaqqsugaoeyys->mukyysqkgaimcygs()) {
                $ccowyogiqwikkkie[] = ManipulateHTML::uuccukgasskgimsq('a', ['href' => '#', 'class' => 'btn text-decoration-none btn-danger pr-confirmable-action', 'data-config' => $meywaqqsugaoeyys->ymaommgoigkakyes($meywaqqsugaoeyys->cgccmsewskigcuig($aokagokqyuysuksm))], $this->oyeskqayoscwciem()->uikgwcuascgeissw('remove_item'));
            }
            $ywoucyskcquysiwc = ['overview' => [self::ICON => IconFontawesomeInterface::ICON_EYE, self::TITLE => __('Overview', PR__CMN__FOUNDATION)]];
            foreach ($meywaqqsugaoeyys->oyeskqayoscwciem()->aeosueemgsygqese() as $aaqqkgyougeiueyq) {
                if ($aaqqkgyougeiueyq instanceof Foreign && $aaqqkgyougeiueyq->gumeeckcowwoyoci()) {
                    $ewgwqamkygiqaawc = '';
                    $egkyssmuqcwaciya = $aaqqkgyougeiueyq->uecyuoauykiqqkey();
                    $ywoyoawciekocqao = $egkyssmuqcwaciya::symcgieuakksimmu();
                    if ($ywoyoawciekocqao instanceof Model) {
                        $momcykaoccoymeig = $ywoyoawciekocqao->cgswceaawqgeskua('index');
                        if ($momcykaoccoymeig instanceof Index) {
                            $icwicymcioeyeyek = $meywaqqsugaoeyys->iscemaoqqckmkago($aaqqkgyougeiueyq->mwikyscisascoeea(), $mksyucucyswaukig);
                            if ($icwicymcioeyeyek) {
                                $essikcmqiyqaqoaq = [];
                                $uykgysuswksgmwqy = $momcykaoccoymeig->waeasakssissiuqg()->get_columns();
                                ManipulateArray::unset($uykgysuswksgmwqy, ['cb', ManipulateString::ogimogiceeekegoi(ManipulateString::mkwcwqkqeqkqyggc($meywaqqsugaoeyys)) . self::_ID]);
                                foreach ($icwicymcioeyeyek as $momcykaoccoymeig => $igqsaukqcqscimok) {
                                    $aokagokqyuysuksm = ManipulateArray::get($igqsaukqcqscimok, $ywoyoawciekocqao->kumuygiiqswoyasy());
                                    foreach ($uykgysuswksgmwqy as $qgoqiacsiccwoawi => $meqocwsecsywiiqs) {
                                        $essikcmqiyqaqoaq[$momcykaoccoymeig][$qgoqiacsiccwoawi] = $ywoyoawciekocqao->kamyqikiiuwqiiuw($qgoqiacsiccwoawi, ManipulateArray::get($igqsaukqcqscimok, $qgoqiacsiccwoawi), $igqsaukqcqscimok);
                                        kiqogmwcgcamwiig:
                                    }
                                    yowsmsiyimmimemc:
                                    $iwywmkygwewiamwm = $ywoyoawciekocqao->uesweuocqoywoyms($aokagokqyuysuksm);
                                    if ($iwywmkygwewiamwm) {
                                        $essikcmqiyqaqoaq[$momcykaoccoymeig]['tr_attrs'] = ['data-href' => $iwywmkygwewiamwm];
                                    }
                                    kwagwqyusyiyoaqs:
                                }
                                eqkauqciwewmgeoi:
                                $ewgwqamkygiqaawc = ManipulateHTML::kuumcaywkqiasisk($essikcmqiyqaqoaq, $uykgysuswksgmwqy, ['class' => 'table-borderless table-striped font-16']);
                            }
                        }
                        if (!$ewgwqamkygiqaawc) {
                            $ewgwqamkygiqaawc = ManipulateHTML::wegccueewucwyaew([self::CONTENT => ManipulateHTML::ciuuiyckmsygceis(sprintf(__('There are not %s yet.', PR__CMN__FOUNDATION), $ywoyoawciekocqao->oyeskqayoscwciem()->giiayuqckuiecosm()))]);
                        }
                    }
                    $ywoucyskcquysiwc[$aaqqkgyougeiueyq->mwikyscisascoeea()] = [self::ICON => $ywoyoawciekocqao->oyeskqayoscwciem()->qyyikeaseoskcacm(), self::TITLE => $aaqqkgyougeiueyq->qcgakseyaikigqco(), self::CONTENT => $ewgwqamkygiqaawc];
                }
                sciwggaeogcoesiu:
            }
            mkwskuycuyguqqok:
            echo $this->iuygowkemiiwqmiw('show', ['tabs' => $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("orm_view_show_{$meywaqqsugaoeyys->miwqiiqeegeqcwis()}_tabs"), $ywoucyskcquysiwc, $mksyucucyswaukig), 'name' => $this->aakmagwggmkoiiyu(), 'object' => $mksyucucyswaukig, 'model' => $this->mgogaykgkoogasim(), 'items' => array_filter($meywaqqsugaoeyys->eukyqwmmeyakcyoo($mksyucucyswaukig, $yygmoeguaqyumuui)), 'title' => $this->mmqossqsksemasay('view_item'), 'buttons' => $ccowyogiqwikkkie, 'main_key' => 'overview']);
        }
    }
}
