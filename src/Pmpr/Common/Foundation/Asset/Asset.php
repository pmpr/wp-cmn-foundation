<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613bb98fa102d             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Asset;

use DirectoryIterator;
use Exception;
use Pmpr\Common\Foundation\Data\Source;
use Pmpr\Common\Foundation\Decorator\DecoratorAsset;
use Pmpr\Common\Foundation\Manipulate\ManipulateAjax;
use Pmpr\Common\Foundation\Manipulate\ManipulateFile;
use Pmpr\Common\Foundation\Manipulate\ManipulateQuery;
use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePage;
use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateHTML;

class Asset extends Common
{
    const JQUERY = 'jquery';
    const CDN_PREFIX = 'https://cdnjs.cloudflare.com/ajax/libs';
    const JQUERY_CORE = self::JQUERY . '-core';
    const JQUERY_MIGRATE = self::JQUERY . '-migrate';
    public function wigskegsqequoeks()
    {
        $this->qcsmikeggeemccuu('login_footer', [$this, 'kqcsaqyckosoooyw'])->qcsmikeggeemccuu('admin_footer', [$this, 'ggskcggaaeakgaqc'])->qcsmikeggeemccuu('wp_enqueue_scripts', [$this, 'aggooouswkoeacum'])->qcsmikeggeemccuu('wp_footer', [$this, 'oqyukysyeeyqcymq'], 999)->qcsmikeggeemccuu('admin_enqueue_scripts', [$this, 'sguuokqwecoeaosa'])->qcsmikeggeemccuu('login_enqueue_scripts', [$this, 'qskmwqecowimimaa'])->qcsmikeggeemccuu('cmb2_admin_init', [$this, 'gymuyookwcqkgqqg'], 0)->qcsmikeggeemccuu($this->ygyygikyocoymgaw('add_ajax_nonce'), [$this, 'eegcswqggcewuiwc']);
    }
    public function ggskcggaaeakgaqc()
    {
        $this->eegcswqggcewuiwc();
        $this->euqykiikwykosciy();
    }
    public function kqcsaqyckosoooyw()
    {
        $this->eegcswqggcewuiwc();
        $this->euqykiikwykosciy();
    }
    public function oqyukysyeeyqcymq()
    {
        $this->eegcswqggcewuiwc(false);
        $this->euqykiikwykosciy();
    }
    public function sguuokqwecoeaosa()
    {
        $this->kcuyeigqawkuecak();
        $eygsasmqycagyayw = $this->miocmcoykayoyyau();
        $eygsasmqycagyayw->ayeieigcckcmsikq($eygsasmqycagyayw->awgyqswkqywwmkye('admin', $eygsasmqycagyayw->get('admin.css')))->ayeieigcckcmsikq($eygsasmqycagyayw->owygwqwawqoiusis('admin', $eygsasmqycagyayw->get('admin.js'))->ayuciigykaswwqeo('jquery'));
        $this->kycscwuqiyemkkgw();
    }
    public function aggooouswkoeacum()
    {
        $this->kcuyeigqawkuecak();
        $eygsasmqycagyayw = $this->miocmcoykayoyyau();
        $usyqkyomqcuocgoa = $eygsasmqycagyayw->souwykwwmyygqyqi('inline.js');
        $eygsasmqycagyayw->oeoquuwkoywiuesy($eygsasmqycagyayw->owygwqwawqoiusis('inline', false)->awagieqcmmwkgwgs($usyqkyomqcuocgoa))->oeoquuwkoywiuesy($eygsasmqycagyayw->owygwqwawqoiusis('front', $eygsasmqycagyayw->get('front.js'))->ayuciigykaswwqeo('jquery'));
        $this->igecsgowsqsmmoek();
    }
    public function qskmwqecowimimaa()
    {
        $this->kcuyeigqawkuecak();
        $this->ycusuuaguoiymisk();
    }
    public function kcuyeigqawkuecak()
    {
        $this->oowgosmscueymuoy();
        $eygsasmqycagyayw = $this->miocmcoykayoyyau();
        $syqogysesqgmqoqi = $eygsasmqycagyayw->owygwqwawqoiusis('global', $eygsasmqycagyayw->get('global.js'))->ayuciigykaswwqeo('jquery');
        $eygsasmqycagyayw->ayeieigcckcmsikq($syqogysesqgmqoqi)->wqiosiseiwsamggo($syqogysesqgmqoqi)->oeoquuwkoywiuesy($syqogysesqgmqoqi);
    }
    public function oowgosmscueymuoy()
    {
        $gacqcocmyugqaask = '3.6.0';
        $kqocsuqwuigyeasy = '3.3.2';
        $aiecucumasmeiqug = self::CDN_PREFIX . "/jquery/{$gacqcocmyugqaask}/jquery.min.js";
        $auekeosaiesuyueo = self::CDN_PREFIX . "/jquery-migrate/{$kqocsuqwuigyeasy}/jquery-migrate.min.js";
        global $concatenate_scripts;
        $concatenate_scripts = false;
        
        DecoratorAsset::cawwmsmyseesuyee(self::JQUERY_CORE);
        DecoratorAsset::wyouyuiqisgqwgww(self::JQUERY_CORE, $aiecucumasmeiqug, [], $gacqcocmyugqaask, false);
        
        DecoratorAsset::cawwmsmyseesuyee(self::JQUERY_MIGRATE);
        DecoratorAsset::wyouyuiqisgqwgww(self::JQUERY_MIGRATE, $auekeosaiesuyueo, [self::JQUERY_CORE], $kqocsuqwuigyeasy, false);
        
        DecoratorAsset::cawwmsmyseesuyee(self::JQUERY);
        DecoratorAsset::wyouyuiqisgqwgww(self::JQUERY, false, [self::JQUERY_CORE, self::JQUERY_MIGRATE], $gacqcocmyugqaask, false);
    }
    public function eegcswqggcewuiwc($mcaqsewiqwqywsso = true)
    {
        ManipulateHTML::sykissckqqccoiqs('div', ['id' => self::AJAX_NONCE_ID, 'style' => 'display:none'], $mcaqsewiqwqywsso ? wp_create_nonce(self::AJAX_NONCE) : '');
    }
    public function gymuyookwcqkgqqg()
    {
        if (!ManipulateAjax::mcgoysmkqsqooceq()) {
            $oegoegssokkyiqam = [];
            $eygsasmqycagyayw = $this->miocmcoykayoyyau();
            $igumcmscoyoieiky = $eygsasmqycagyayw->mkwomgueyaaooyye();
            $mqkkuqaimswumeww = self::isyyiqwsgyieiqgu();
            $iiaumsgauuyeqksw = $this->kcciqwskewsuaemk();
            foreach ($mqkkuqaimswumeww as $wksoawcgagcgoask) {
                if ($wksoawcgagcgoask) {
                    $ymqmyyeuycgmigyo = $wksoawcgagcgoask->aiqioscoyukqgsgw();
                    $ukwaqgesyueoiswk = untrailingslashit($wksoawcgagcgoask->ikeqsmumgwwuqmkw()) . '/build';
                    if ($iiaumsgauuyeqksw->exists($ukwaqgesyueoiswk)) {
                        $oegoegssokkyiqam[$ymqmyyeuycgmigyo] = $ukwaqgesyueoiswk;
                        $wksoawcgagcgoask->qckqeoeasgoeywoa(untrailingslashit($igumcmscoyoieiky) . "/{$wksoawcgagcgoask->aiqioscoyukqgsgw()}");
                    }
                }
                suqceasgacskcmkc:
            }
            oeocukauoyosicso:
            $this->eeqigugescoiwyio($oegoegssokkyiqam);
        }
    }
    
    public function eeqigugescoiwyio($oegoegssokkyiqam, &$oyiokksswogocuwm = 0)
    {
        $bsgyawiqyuquqmyy = [];
        $eygsasmqycagyayw = $this->miocmcoykayoyyau();
        $cyaeoagyqcqyqgmk = $eygsasmqycagyayw->qmwkoewmiweimaqe();
        $iiaumsgauuyeqksw = $this->kcciqwskewsuaemk();
        if ($cyaeoagyqcqyqgmk && $iiaumsgauuyeqksw->uuegkqwagymmusiy($cyaeoagyqcqyqgmk, count($oegoegssokkyiqam) + 3)) {
            $oegoegssokkyiqam = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw('symlink_paths'), $oegoegssokkyiqam);
            foreach ($oegoegssokkyiqam as $ymqmyyeuycgmigyo => $iakkeikwceeomgyq) {
                if (is_array($iakkeikwceeomgyq)) {
                    foreach ($iakkeikwceeomgyq as $miawkwqioaeasiig => $eimoeciqauiqeose) {
                        if (!$this->gemmqsmqwqckouqy("{$ymqmyyeuycgmigyo}/{$miawkwqioaeasiig}", $eimoeciqauiqeose, $cyaeoagyqcqyqgmk)) {
                            $bsgyawiqyuquqmyy[$ymqmyyeuycgmigyo] = $iakkeikwceeomgyq;
                        }
                        ikuuiauwouuqawuw:
                    }
                    uckewycoogsogwiy:
                } else {
                    if (!$this->gemmqsmqwqckouqy($ymqmyyeuycgmigyo, $iakkeikwceeomgyq, $cyaeoagyqcqyqgmk)) {
                        $bsgyawiqyuquqmyy[$ymqmyyeuycgmigyo] = $iakkeikwceeomgyq;
                    }
                }
                kwiggogcgciwuwqk:
            }
            yykqaowwsqgqysmq:
            if ($bsgyawiqyuquqmyy && $oyiokksswogocuwm <= 5) {
                $oyiokksswogocuwm++;
                $this->eeqigugescoiwyio($bsgyawiqyuquqmyy, $oyiokksswogocuwm);
            }
        }
    }
    
    public function gemmqsmqwqckouqy($ymqmyyeuycgmigyo, $iakkeikwceeomgyq, $yaeakkosskocswae) : bool
    {
        $kigowwqauiumummw = true;
        $iiaumsgauuyeqksw = $this->kcciqwskewsuaemk();
        if ($ymqmyyeuycgmigyo && $iiaumsgauuyeqksw->exists($iakkeikwceeomgyq) && !$iiaumsgauuyeqksw->uuegkqwagymmusiy($iakkeikwceeomgyq)) {
            $iwgkmecgwgawukkw = $iiaumsgauuyeqksw->oquguuiseiwkawkw("{$yaeakkosskocswae}/{$ymqmyyeuycgmigyo}/", null, false);
            if (!$this->iuqcwiqqqwwkcyag($iakkeikwceeomgyq, $iwgkmecgwgawukkw)) {
                $kigowwqauiumummw = false;
                $iiaumsgauuyeqksw->remove($iwgkmecgwgawukkw);
            }
        } else {
            $kigowwqauiumummw = false;
            $this->uiagwusgwcassqua("can not create symlink for {$ymqmyyeuycgmigyo}");
        }
        return $kigowwqauiumummw;
    }
    
    public function iuqcwiqqqwwkcyag($iakkeikwceeomgyq, $ccamueccusigaaio) : bool
    {
        $oammesyieqmwuwyi = ManipulateFile::kiygcugekegoqauw($iakkeikwceeomgyq);
        $kigowwqauiumummw = true;
        $iiaumsgauuyeqksw = $this->kcciqwskewsuaemk();
        foreach ($oammesyieqmwuwyi as $igqsaukqcqscimok) {
            if ($igqsaukqcqscimok instanceof DirectoryIterator) {
                $wkcwykowmmmwioqs = ManipulateFile::mawoacksgosuccme($igqsaukqcqscimok);
                if (!ManipulateFile::qkuqsuugayciskek($igqsaukqcqscimok)) {
                    $iwgkmecgwgawukkw = "{$ccamueccusigaaio}/{$wkcwykowmmmwioqs}";
                    if (ManipulateFile::oagwcgcemwwykokc($igqsaukqcqscimok)) {
                        $amwwiceekosasokk = "{$iakkeikwceeomgyq}/{$wkcwykowmmmwioqs}";
                        $iiaumsgauuyeqksw->mkdir($ccamueccusigaaio);
                        $this->iuqcwiqqqwwkcyag($amwwiceekosasokk, $iwgkmecgwgawukkw);
                    } else {
                        if (!in_array(ManipulateFile::csksiiecqkeecwqm($igqsaukqcqscimok), ['php', 'scss'])) {
                            try {
                                $mkomwsiykqigmqca = ManipulateFile::amqagusacuuuaswg($igqsaukqcqscimok);
                                $uiuoegigmiykqkuc = "{$mkomwsiykqigmqca}/{$wkcwykowmmmwioqs}";
                                $iiaumsgauuyeqksw->symlink($uiuoegigmiykqkuc, $iwgkmecgwgawukkw);
                            } catch (Exception $wgaoewqkwgomoaai) {
                                $kigowwqauiumummw = false;
                                goto yoqakewookqoqacm;
                            }
                        }
                    }
                }
            }
            gswcoeiisamakwii:
        }
        yoqakewookqoqacm:
        return $kigowwqauiumummw;
    }
    public function euqykiikwykosciy()
    {
        $wqsyimmcqogaosaq = [];
        if (ManipulateQuery::euqowsuwmgokuqqo()) {
            $wqsyimmcqogaosaq = (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw('admin_localize_variables'), $wqsyimmcqogaosaq);
        } else {
            if (ManipulatePage::awgkmqkqkqawmqcu()) {
                $wqsyimmcqogaosaq = (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw('login_localize_variables'), $wqsyimmcqogaosaq);
            } else {
                $wqsyimmcqogaosaq = (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw('front_localize_variables'), $wqsyimmcqogaosaq);
            }
        }
        $wqsyimmcqogaosaq = array_filter($wqsyimmcqogaosaq);
        if ($wqsyimmcqogaosaq) {
            $wqsyimmcqogaosaq = json_encode($wqsyimmcqogaosaq, JSON_UNESCAPED_SLASHES);
            ManipulateHTML::sykissckqqccoiqs('script', ['id' => 'pmpr_localize'], "let PMPRLocalize = {$wqsyimmcqogaosaq}");
        }
    }
    
    public function saoyckekguwqwgcq($uuskcymsqowqgkyo = [])
    {
        if (is_array($uuskcymsqowqgkyo)) {
            $uuskcymsqowqgkyo = array_filter($uuskcymsqowqgkyo);
            if ($uuskcymsqowqgkyo) {
                foreach ($uuskcymsqowqgkyo as $yokgacoigcscwkie) {
                    if (is_array($yokgacoigcscwkie)) {
                        foreach ($yokgacoigcscwkie as $ceuoyocoywikssmy) {
                            if ($ceuoyocoywikssmy instanceof Source) {
                                $ogomymegcoacqisg = $ceuoyocoywikssmy->mgaeeqsgeoukeokc();
                                $usyqkyomqcuocgoa = $ceuoyocoywikssmy->mmoosseiswcigswg();
                                $eueuqacmukymcyya = $ceuoyocoywikssmy->yoickwcyekiwiyqm();
                                $kqagasmwymmuiksq = $ceuoyocoywikssmy->gikwwgqmwccescgy();
                                $simqeemkoyaqkkwe = $ceuoyocoywikssmy->simqeemkoyaqkkwe();
                                $ugmuiugkaygmsagq = $ceuoyocoywikssmy->auskmiuqesyqemgc();
                                switch ($ceuoyocoywikssmy->gueasuouwqysmomu()) {
                                    case self::SCRIPT:
                                        DecoratorAsset::wyouyuiqisgqwgww($eueuqacmukymcyya, $ogomymegcoacqisg, $ugmuiugkaygmsagq, $kqagasmwymmuiksq, $ceuoyocoywikssmy->mequouugayiseiei());
                                        if ($simqeemkoyaqkkwe) {
                                            DecoratorAsset::imsomwwswyoquoqk($eueuqacmukymcyya);
                                            if ($usyqkyomqcuocgoa) {
                                                DecoratorAsset::yocqwqycwegayowg($eueuqacmukymcyya, $usyqkyomqcuocgoa);
                                            }
                                        }
                                        goto esikeyqyuikmaiek;
                                    case self::STYLE:
                                        DecoratorAsset::mkaaikgsosqiaiqg($eueuqacmukymcyya, $ogomymegcoacqisg, $ugmuiugkaygmsagq, $kqagasmwymmuiksq, $ceuoyocoywikssmy->acskcgywyymegikq());
                                        if ($simqeemkoyaqkkwe) {
                                            DecoratorAsset::myyikeyuuomqoyew($eueuqacmukymcyya);
                                            if ($usyqkyomqcuocgoa) {
                                                DecoratorAsset::oiqqguakwcieaioo($eueuqacmukymcyya, $usyqkyomqcuocgoa);
                                            }
                                        }
                                        goto esikeyqyuikmaiek;
                                }
                                okkmcocqokkskasy:
                                esikeyqyuikmaiek:
                            }
                            iwsmmkqaoksmocok:
                        }
                        emqswoaawgeyosmi:
                    }
                    ocywegekakimmwcq:
                }
                yuimwyoywaiiqacs:
            }
        }
    }
    public function kycscwuqiyemkkgw()
    {
        $yokgacoigcscwkie = (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw('admin_enqueue_assets'), []);
        $this->saoyckekguwqwgcq($yokgacoigcscwkie);
    }
    public function igecsgowsqsmmoek()
    {
        $yokgacoigcscwkie = (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw('front_enqueue_assets'), []);
        $this->saoyckekguwqwgcq($yokgacoigcscwkie);
    }
    public function ycusuuaguoiymisk()
    {
        $yokgacoigcscwkie = (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw('login_enqueue_assets'), []);
        $this->saoyckekguwqwgcq($yokgacoigcscwkie);
    }
}
