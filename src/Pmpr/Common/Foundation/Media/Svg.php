<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613bb98fa102d             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Media;

use enshrined\svgSanitize\Sanitizer;
use Exception;
use Pmpr\Common\Foundation\Decorator\DecoratorFile;
use Pmpr\Common\Foundation\Decorator\DecoratorOption;
use Pmpr\Common\Foundation\DOMCrawler;
use Pmpr\Common\Foundation\Manipulate\Post\ManipulateAttachment;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;

class Svg extends Common
{
    const SVG_MIME_TYPE = 'image/svg+xml';
    
    public ?Sanitizer $sanitizer = null;
    public function __construct()
    {
        $umcwwewscqegoqoe = new Sanitizer();
        
        $umcwwewscqegoqoe->minify(true);
        $this->sanitizer = $umcwwewscqegoqoe;
        parent::__construct();
    }
    public function wigskegsqequoeks()
    {
        $this->qcsmikeggeemccuu($this->ygyygikyocoymgaw('add_twig_functions'), [$this, 'eueeyemgkeyceisa'])->qcsmikeggeemccuu('get_image_tag', [$this, 'cgiakacckmcaqgik'], 10, 6);
        parent::wigskegsqequoeks();
    }
    public function kgquecmsgcouyaya()
    {
        $this->cecaguuoecmccuse('upload_mimes', [$this, 'ggwceqweeaacwois'])->cecaguuoecmccuse('wp_handle_upload_prefilter', [$this, 'mekeuwieciqymaio'])->cecaguuoecmccuse('svg_attributes', [$this, 'mqyacwaaocgcsyag'], 999)->cecaguuoecmccuse('wp_check_filetype_and_ext', [$this, 'akiooyaukgyumcmu'], 75, 4)->cecaguuoecmccuse('admin_post_thumbnail_html', [$this, 'ouauyyakeauaqqik'], 10, 3)->cecaguuoecmccuse('wp_get_attachment_metadata', [$this, 'wqyqisgcyewimoai'], 10, 2)->cecaguuoecmccuse('wp_prepare_attachment_for_js', [$this, 'skkgwwkymooqqawm'], 10, 2)->cecaguuoecmccuse('wp_generate_attachment_metadata', [$this, 'ywguamaiiyagawsc'], 10, 2)->cecaguuoecmccuse('image_upload_filter_exclude', [$this, 'qqkowscaoouckego'], 10, 2)->cecaguuoecmccuse($this->ygyygikyocoymgaw('attachment_is_svg'), [$this, 'eguokwqamccwcqom'], 10, 2)->cecaguuoecmccuse('wp_get_attachment_image_attributes', [$this, 'ycyqkgciggoagagg'], 10, 3);
        parent::kgquecmsgcouyaya();
    }
    
    public function ycyqkgciggoagagg($wisgiwskwawciiee, $aiooqyausygaasqm, $oiegiwogmwmawkeo)
    {
        $wisgiwskwawciiee = $this->wmiseqaieauskweu($wisgiwskwawciiee, $aiooqyausygaasqm);
        
        return $wisgiwskwawciiee;
    }
    
    public function mqyacwaaocgcsyag($siquossayskcwkea = [])
    {
        $siquossayskcwkea = $this->kguoyqackakgysoy($siquossayskcwkea);
        if (!isset($siquossayskcwkea['height']) && !isset($siquossayskcwkea['width'])) {
            $siquossayskcwkea['height'] = 100;
            $siquossayskcwkea['width'] = 100;
        }
        return $siquossayskcwkea;
    }
    
    public function kguoyqackakgysoy($siquossayskcwkea, $uuossqmuccwyiemo = 16)
    {
        $egkyssmuqcwaciya = ManipulateArray::get($siquossayskcwkea, 'class');
        if ($egkyssmuqcwaciya) {
            $wyicceigkekkkwgs = (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw('svg_element_class_ration_converter'), []);
            if ($wyicceigkekkkwgs) {
                if (!is_numeric($uuossqmuccwyiemo) || $uuossqmuccwyiemo < 1) {
                    $uuossqmuccwyiemo = 16;
                }
                foreach ($wyicceigkekkkwgs as $oiegiwogmwmawkeo => $eqgoocgaqwqcimie) {
                    if (strpos($egkyssmuqcwaciya, $oiegiwogmwmawkeo) !== false) {
                        if (is_array($eqgoocgaqwqcimie)) {
                            $siquossayskcwkea['width'] = intval($eqgoocgaqwqcimie[0] * $uuossqmuccwyiemo);
                            $siquossayskcwkea['height'] = intval($eqgoocgaqwqcimie[1] * $uuossqmuccwyiemo);
                        } else {
                            $eqgoocgaqwqcimie *= $uuossqmuccwyiemo;
                            $siquossayskcwkea['width'] = intval($eqgoocgaqwqcimie);
                            $siquossayskcwkea['height'] = intval($eqgoocgaqwqcimie);
                        }
                        goto iuuuususuuuaieem;
                    }
                    kocqqoyymosmuksu:
                }
                iuuuususuuuaieem:
            }
        }
        return $siquossayskcwkea;
    }
    
    public function qqkowscaoouckego($couiucmsqaieciue = [])
    {
        $couiucmsqaieciue[] = self::SVG_MIME_TYPE;
        return $couiucmsqaieciue;
    }
    
    public function eueeyemgkeyceisa($eyoesceegakeygsi)
    {
        $eyoesceegakeygsi->kmmegqceukkkawme('is_svg', function ($aiooqyausygaasqm) {
            return $this->iigcaickwcykouca($aiooqyausygaasqm);
        });
    }
    
    public function eguokwqamccwcqom($iigcaickwcykouca, $post)
    {
        return $this->iigcaickwcykouca($post);
    }
    
    public function ggwceqweeaacwois($yawwowoqosismgyq)
    {
        $yawwowoqosismgyq['svg'] = self::SVG_MIME_TYPE;
        $yawwowoqosismgyq['svgz'] = self::SVG_MIME_TYPE;
        return $yawwowoqosismgyq;
    }
    
    public function wsqcimqccawqouge($nsmgceoqaqogqmuw, $post, $uickqscmwgggsmgy)
    {
        return $this->uwmcsgckegoamwas($nsmgceoqaqogqmuw, $uickqscmwgggsmgy);
    }
    
    public function umsucesyoggwwwmu($nsmgceoqaqogqmuw, $aokagokqyuysuksm)
    {
        return $this->uwmcsgckegoamwas($nsmgceoqaqogqmuw, $aokagokqyuysuksm);
    }
    
    public function wmiseqaieauskweu($wwgucssaecqekuek, $aokagokqyuysuksm)
    {
        if ($this->iigcaickwcykouca($aokagokqyuysuksm)) {
            ManipulateArray::unset($wwgucssaecqekuek, ['srcset', 'sizes']);
        }
        return $wwgucssaecqekuek;
    }
    
    public function uwmcsgckegoamwas($nsmgceoqaqogqmuw, $aokagokqyuysuksm)
    {
        $aqykuigiuwmmcieu = $nsmgceoqaqogqmuw;
        if ($nsmgceoqaqogqmuw && $this->iigcaickwcykouca($aokagokqyuysuksm)) {
            try {
                $egkyssmuqcwaciya = DOMCrawler::waecsyqmwascmqoa($nsmgceoqaqogqmuw, 'img', 'class');
                $qogsmwakwacwqogk = ManipulateAttachment::ygwimyogyaqgumam($aokagokqyuysuksm);
                $ewgwqamkygiqaawc = $this->kcciqwskewsuaemk()->souwykwwmyygqyqi($qogsmwakwacwqogk);
                $ewgwqamkygiqaawc = preg_replace('/<\\?xml.*?\\?>/', '', $ewgwqamkygiqaawc);
                $aqykuigiuwmmcieu = DOMCrawler::igmaewykumgwoaoy($ewgwqamkygiqaawc, ['svg' => ['class' => $egkyssmuqcwaciya]]);
            } catch (Exception $wgaoewqkwgomoaai) {
                $aqykuigiuwmmcieu = $nsmgceoqaqogqmuw;
            }
        }
        return $aqykuigiuwmmcieu;
    }
    
    public function akiooyaukgyumcmu($icwicymcioeyeyek = null, $qogsmwakwacwqogk = null, $wkcwykowmmmwioqs = null, $yawwowoqosismgyq = null)
    {
        $yucgcsieomwqgwws = isset($icwicymcioeyeyek['ext']) ? $icwicymcioeyeyek['ext'] : '';
        if (strlen($yucgcsieomwqgwws) < 1) {
            $ukequsueuukqgaca = explode('.', $wkcwykowmmmwioqs);
            $yucgcsieomwqgwws = strtolower(end($ukequsueuukqgaca));
        }
        if (in_array($yucgcsieomwqgwws, ['svg', 'svgz'])) {
            $icwicymcioeyeyek['type'] = self::SVG_MIME_TYPE;
            $icwicymcioeyeyek['ext'] = $yucgcsieomwqgwws;
        }
        return $icwicymcioeyeyek;
    }
    
    public function mekeuwieciqymaio($qogsmwakwacwqogk)
    {
        if ($qogsmwakwacwqogk['type'] === self::SVG_MIME_TYPE) {
            if (!$this->yiiiqewsseywemqu($qogsmwakwacwqogk['tmp_name'])) {
                $qogsmwakwacwqogk['error'] = __('Sorry, this file couldn\'t be sanitized so for security reasons wasn\'t uploaded', PR__CMN__FOUNDATION);
            }
        }
        return $qogsmwakwacwqogk;
    }
    
    public function skkgwwkymooqqawm($keccaugmemegoimu, $aiooqyausygaasqm) : array
    {
        if ($keccaugmemegoimu['mime'] == self::SVG_MIME_TYPE) {
            $qaiwqwwemmyyqosy = $this->qaeakmimoqkugagk(ManipulateAttachment::ckoygqywcuqasqea($aiooqyausygaasqm));
            if ($qaiwqwwemmyyqosy) {
                $keccaugmemegoimu = array_merge($keccaugmemegoimu, $qaiwqwwemmyyqosy);
            }
            $possible_sizes = $this->sscegwueamckwmcy('image_size_names_choose', ['full' => __('Full Size', PR__CMN__FOUNDATION), 'thumbnail' => __('Thumbnail', PR__CMN__FOUNDATION), 'medium' => __('Medium', PR__CMN__FOUNDATION), 'large' => __('Large', PR__CMN__FOUNDATION)]);
            $wyicceigkekkkwgs = [];
            foreach ($possible_sizes as $oiegiwogmwmawkeo => $pkyyagewkiyckmwy) {
                $default_height = 2000;
                $default_width = 2000;
                if ('full' === $oiegiwogmwmawkeo && $qaiwqwwemmyyqosy) {
                    $default_height = $qaiwqwwemmyyqosy['height'];
                    $default_width = $qaiwqwwemmyyqosy['width'];
                }
                $wyicceigkekkkwgs[$oiegiwogmwmawkeo] = ['height' => DecoratorOption::get("{$oiegiwogmwmawkeo}_size_w", $default_height), 'width' => DecoratorOption::get("{$oiegiwogmwmawkeo}_size_h", $default_width), 'url' => $keccaugmemegoimu['url'], 'orientation' => 'portrait'];
                qukocuwgakemmyga:
            }
            uqokiksoqcwwqgio:
            $keccaugmemegoimu['sizes'] = $wyicceigkekkkwgs;
            $keccaugmemegoimu['icon'] = $keccaugmemegoimu['url'];
        }
        return $keccaugmemegoimu;
    }
    
    protected function yiiiqewsseywemqu($qogsmwakwacwqogk)
    {
        $yeueggiecgqcswqm = $this->kcciqwskewsuaemk()->souwykwwmyygqyqi($qogsmwakwacwqogk);
        
        if ($yuoaskweqogoasgc = $this->wsggsqigawogiwky($yeueggiecgqcswqm)) {
            $yeueggiecgqcswqm = gzdecode($yeueggiecgqcswqm);
            
            if ($yeueggiecgqcswqm === false) {
                return false;
            }
        }
        
        $qawsmigsyysqwmeq = $this->sanitizer->sanitize($yeueggiecgqcswqm);
        if ($qawsmigsyysqwmeq === false) {
            return false;
        }
        
        if ($yuoaskweqogoasgc) {
            $qawsmigsyysqwmeq = gzencode($qawsmigsyysqwmeq);
        }
        return $this->kcciqwskewsuaemk()->kwsmkgyoyaqecwuu($qogsmwakwacwqogk, $qawsmigsyysqwmeq);
    }
    
    protected function wsggsqigawogiwky($ygwoqcwsaggqoamw)
    {
        if (function_exists('mb_strpos')) {
            return 0 === mb_strpos($ygwoqcwsaggqoamw, "\x1f" . "\x8b" . "\x08");
        } else {
            return 0 === strpos($ygwoqcwsaggqoamw, "\x1f" . "\x8b" . "\x08");
        }
    }
    
    public function oowwkoeekmwwgieu($mcqieaigyeeyaksm, $aiooqyausygaasqm, $oiegiwogmwmawkeo)
    {
        if ($this->iigcaickwcykouca($aiooqyausygaasqm)) {
            $gkiuoymeukweiaaw = ManipulateAttachment::iuwsgyqakicakuoq($oiegiwogmwmawkeo);
            $cswemwoyesycwkuq = false;
            $qeswwaqqsyymqawg = false;
            if ($gkiuoymeukweiaaw) {
                $cswemwoyesycwkuq = ManipulateAttachment::get($gkiuoymeukweiaaw, 'height');
                $qeswwaqqsyymqawg = ManipulateAttachment::get($gkiuoymeukweiaaw, 'width');
            }
            
            
        }
        return $mcqieaigyeeyaksm;
    }
    
    public function ouauyyakeauaqqik($ewgwqamkygiqaawc, $post_id, $thumbnail_id)
    {
        if ($this->iigcaickwcykouca($thumbnail_id)) {
            $ewgwqamkygiqaawc = DOMCrawler::igmaewykumgwoaoy($ewgwqamkygiqaawc, ['img, a' => ['class' => 'w-100']]);
        }
        return $ewgwqamkygiqaawc;
    }
    
    public function cgiakacckmcaqgik($nsmgceoqaqogqmuw, $aokagokqyuysuksm, $gkykacccamuwowwc, $meqocwsecsywiiqs, $ioogmuawkgcgmkia, $oiegiwogmwmawkeo)
    {
        if ($this->iigcaickwcykouca($aokagokqyuysuksm)) {
            if (is_array($oiegiwogmwmawkeo)) {
                $qeswwaqqsyymqawg = $oiegiwogmwmawkeo[0];
                $cswemwoyesycwkuq = $oiegiwogmwmawkeo[1];
            } else {
                if ('full' == $oiegiwogmwmawkeo && ($qaiwqwwemmyyqosy = $this->qaeakmimoqkugagk(ManipulateAttachment::ckoygqywcuqasqea($aokagokqyuysuksm)))) {
                    $qeswwaqqsyymqawg = $qaiwqwwemmyyqosy['width'];
                    $cswemwoyesycwkuq = $qaiwqwwemmyyqosy['height'];
                } else {
                    $qeswwaqqsyymqawg = DecoratorOption::get("{$oiegiwogmwmawkeo}_size_w", false);
                    $cswemwoyesycwkuq = DecoratorOption::get("{$oiegiwogmwmawkeo}_size_h", false);
                }
            }
            if ($cswemwoyesycwkuq && $qeswwaqqsyymqawg) {
                $nsmgceoqaqogqmuw = str_replace('width="1" ', sprintf('width="%s" ', $qeswwaqqsyymqawg), $nsmgceoqaqogqmuw);
                $nsmgceoqaqogqmuw = str_replace('height="1" ', sprintf('height="%s" ', $cswemwoyesycwkuq), $nsmgceoqaqogqmuw);
            } else {
                $nsmgceoqaqogqmuw = str_replace('width="1" ', '', $nsmgceoqaqogqmuw);
                $nsmgceoqaqogqmuw = str_replace('height="1" ', '', $nsmgceoqaqogqmuw);
            }
            $nsmgceoqaqogqmuw = str_replace('/>', ' role="img" />', $nsmgceoqaqogqmuw);
        }
        return $nsmgceoqaqogqmuw;
    }
    
    public function ywguamaiiyagawsc($kuguwoaesuqsqysu, $attachment_id)
    {
        if ($this->iigcaickwcykouca($attachment_id)) {
            $additional_image_sizes = wp_get_additional_image_sizes();
            $svg_path = ManipulateAttachment::ckoygqywcuqasqea($attachment_id);
            $upload_dir = DecoratorFile::oemywwmmmiywiqai();
            
            $relative_path = str_replace($upload_dir['basedir'], '', $svg_path);
            $wkcwykowmmmwioqs = basename($svg_path);
            $qaiwqwwemmyyqosy = $this->qaeakmimoqkugagk($svg_path);
            if (!$qaiwqwwemmyyqosy) {
                return $kuguwoaesuqsqysu;
            }
            $kuguwoaesuqsqysu = ['width' => intval($qaiwqwwemmyyqosy['width']), 'height' => intval($qaiwqwwemmyyqosy['height']), 'file' => $relative_path];
            
            $wyicceigkekkkwgs = [];
            foreach (get_intermediate_image_sizes() as $piuesceqiguuskme) {
                $wyicceigkekkkwgs[$piuesceqiguuskme] = ['width' => '', 'height' => '', 'crop' => false];
                if (isset($additional_image_sizes[$piuesceqiguuskme]['width'])) {
                    
                    $wyicceigkekkkwgs[$piuesceqiguuskme]['width'] = intval($additional_image_sizes[$piuesceqiguuskme]['width']);
                } else {
                    
                    $wyicceigkekkkwgs[$piuesceqiguuskme]['width'] = DecoratorOption::get("{$piuesceqiguuskme}_size_w");
                }
                if (isset($additional_image_sizes[$piuesceqiguuskme]['height'])) {
                    
                    $wyicceigkekkkwgs[$piuesceqiguuskme]['height'] = intval($additional_image_sizes[$piuesceqiguuskme]['height']);
                } else {
                    
                    $wyicceigkekkkwgs[$piuesceqiguuskme]['height'] = DecoratorOption::get("{$piuesceqiguuskme}_size_h");
                }
                if (isset($additional_image_sizes[$piuesceqiguuskme]['crop'])) {
                    
                    $wyicceigkekkkwgs[$piuesceqiguuskme]['crop'] = intval($additional_image_sizes[$piuesceqiguuskme]['crop']);
                } else {
                    
                    $wyicceigkekkkwgs[$piuesceqiguuskme]['crop'] = DecoratorOption::get("{$piuesceqiguuskme}_crop");
                }
                $wyicceigkekkkwgs[$piuesceqiguuskme]['file'] = $wkcwykowmmmwioqs;
                $wyicceigkekkkwgs[$piuesceqiguuskme]['mime-type'] = ManipulateAttachment::ikocqgeqiykwwyqs($attachment_id);
                yiowgigkkwsoqcci:
            }
            sioekkmekwygemyc:
            $kuguwoaesuqsqysu['sizes'] = $wyicceigkekkkwgs;
        }
        return $kuguwoaesuqsqysu;
    }
    
    public function wqyqisgcyewimoai($icwicymcioeyeyek, $post)
    {
        
        if (is_wp_error($icwicymcioeyeyek)) {
            $icwicymcioeyeyek = ManipulateAttachment::smiqaaaecemiwugu($post, ManipulateAttachment::ckoygqywcuqasqea($post));
            ManipulateAttachment::_updateMeta($post, $icwicymcioeyeyek);
        }
        return $icwicymcioeyeyek;
    }
    
    protected function qaeakmimoqkugagk($waoisqguweoociwe)
    {
        $waoisqguweoociwe = @simplexml_load_file($waoisqguweoociwe);
        $qeswwaqqsyymqawg = 0;
        $cswemwoyesycwkuq = 0;
        if ($waoisqguweoociwe) {
            $siquossayskcwkea = $waoisqguweoociwe->attributes();
            if (isset($siquossayskcwkea->width, $siquossayskcwkea->height)) {
                $qeswwaqqsyymqawg = intval($siquossayskcwkea->width);
                $cswemwoyesycwkuq = intval($siquossayskcwkea->height);
            } else {
                if (isset($siquossayskcwkea->viewBox)) {
                    $wyicceigkekkkwgs = explode(' ', $siquossayskcwkea->viewBox);
                    if (isset($wyicceigkekkkwgs[2], $wyicceigkekkkwgs[3])) {
                        $qeswwaqqsyymqawg = intval($wyicceigkekkkwgs[2]);
                        $cswemwoyesycwkuq = intval($wyicceigkekkkwgs[3]);
                    }
                } else {
                    return false;
                }
            }
        }
        return ['width' => $qeswwaqqsyymqawg, 'height' => $cswemwoyesycwkuq, 'orientation' => $qeswwaqqsyymqawg > $cswemwoyesycwkuq ? 'landscape' : 'portrait'];
    }
    
    public function umacyowesakeiewk($wisgiwskwawciiee, $aiooqyausygaasqm, $oiegiwogmwmawkeo)
    {
        if ($this->iigcaickwcykouca($aiooqyausygaasqm)) {
            $qeswwaqqsyymqawg = 100;
            $cswemwoyesycwkuq = 100;
            $qaiwqwwemmyyqosy = ManipulateAttachment::iuwsgyqakicakuoq($oiegiwogmwmawkeo);
            if (!$qaiwqwwemmyyqosy) {
                $qaiwqwwemmyyqosy = $this->qaeakmimoqkugagk(ManipulateAttachment::ckoygqywcuqasqea($aiooqyausygaasqm));
            }
            if ($qaiwqwwemmyyqosy) {
                $cswemwoyesycwkuq = ManipulateArray::get($qaiwqwwemmyyqosy, 'height');
                $qeswwaqqsyymqawg = ManipulateArray::get($qaiwqwwemmyyqosy, 'width');
            }
            $wisgiwskwawciiee['height'] = 80;
            
            $wisgiwskwawciiee['width'] = 80;
            
        }
        return $wisgiwskwawciiee;
    }
    
    public function iigcaickwcykouca($aiooqyausygaasqm) : bool
    {
        return self::SVG_MIME_TYPE === ManipulateAttachment::ikocqgeqiykwwyqs($aiooqyausygaasqm);
    }
}
