<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613bb98fa102d             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation;

use Pmpr\Common\Foundation\API\API;
use Pmpr\Common\Foundation\API\APIs;
use Pmpr\Common\Foundation\Asset\Asset;
use Pmpr\Common\Foundation\Container\Container;
use Pmpr\Common\Foundation\Decorator\DecoratorI18N;
use Pmpr\Common\Foundation\Detector\Detector;
use Pmpr\Common\Foundation\FormMaker\FormMaker;
use Pmpr\Common\Foundation\Logger\Logger;
use Pmpr\Common\Foundation\Manipulate\ManipulateAjax;
use Pmpr\Common\Foundation\Manipulate\ManipulateFile;
use Pmpr\Common\Foundation\Manipulate\ManipulateServer;
use Pmpr\Common\Foundation\Manipulate\ManipulateSetting;
use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulateWoocommerce;
use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateHTML;
use Pmpr\Common\Foundation\Media\Media;
use Pmpr\Common\Foundation\ORM\ORM;
use Pmpr\Common\Foundation\Template\Template;
use Pmpr\Common\Foundation\Woocommerce\Woocommerce;

class Foundation extends Container
{
    public function __construct()
    {
        $this->gkieogwukagigisy(__DIR__);
        parent::__construct();
        $this->cyowaaeywssoooeo();
        $this->iemaakgqgqosiecm();
    }
    public function wigskegsqequoeks()
    {
        $this->qcsmikeggeemccuu('wp_loaded', [$this, 'enqueue'])->qcsmikeggeemccuu('init', [$this, 'uwikisyueuksqema'])->qcsmikeggeemccuu('plugins_loaded', [$this, 'uosqaeuewiqmesaa']);
        parent::wigskegsqequoeks();
    }
    public function enqueue()
    {
        if (!ManipulateAjax::mcgoysmkqsqooceq()) {
            $aamkqmkgsaqmcuao = DecoratorI18N::iyouigcsiacgwksc();
            $wqsyimmcqogaosaq = ['locale' => $aamkqmkgsaqmcuao, 'ajaxurl' => ManipulateAjax::oiucukewkckkwiqc(), 'language' => str_replace('_', '-', $aamkqmkgsaqmcuao), 'nonce_id' => self::AJAX_NONCE_ID];
            if (is_admin()) {
                $wqsyimmcqogaosaq = array_merge($wqsyimmcqogaosaq, ['debug' => ManipulateSetting::esoowymaimwcuecq(), 'modal' => ManipulateHTML::icqkogwskuwscskk(), 'spinner' => ManipulateHTML::kqmkicmuscsgqeoi()]);
            } else {
                $wqsyimmcqogaosaq = array_merge($wqsyimmcqogaosaq, ['cookie_guest_id' => self::GUEST_ID_COOKIE]);
            }
            $this->miocmcoykayoyyau()->ssguskiqaagaauoy($wqsyimmcqogaosaq)->iagmuqogkyysiick($wqsyimmcqogaosaq)->oaoisgmqkamuoeam($wqsyimmcqogaosaq);
        }
    }
    public function cyowaaeywssoooeo()
    {
        $wmwyaayqcewkyqsu = ManipulateFile::cmaecekuqkwmemms(self::ABSPATH);
        if ($wmwyaayqcewkyqsu) {
            $yaeakkosskocswae = ManipulateFile::koymmiyegyskqgck(self::PUBLIC_HTML__STATIC__PATH, untrailingslashit($wmwyaayqcewkyqsu) . '/s');
            if ($yaeakkosskocswae) {
                ManipulateFile::wwckmeoskuagomki(self::PUBLIC_HTML__STATIC__URL, ManipulateServer::gmigwwwmwemyaayy('/s'));
                $cyaeoagyqcqyqgmk = ManipulateFile::koymmiyegyskqgck(self::PUBLIC_HTML__BUILD__PATH, $yaeakkosskocswae . '/b');
                if ($cyaeoagyqcqyqgmk) {
                    ManipulateFile::wwckmeoskuagomki(self::PUBLIC_HTML__BUILD__URL, ManipulateServer::gmigwwwmwemyaayy('/s/b'));
                }
            }
            $wyocmuqcwyskkcyo = realpath(untrailingslashit($wmwyaayqcewkyqsu) . '/../base');
            ManipulateFile::wwckmeoskuagomki(self::BASE__ROOT__PATH, $wyocmuqcwyskkcyo);
            if ($ecuwmcmeucuiaamu = ManipulateFile::koymmiyegyskqgck(self::PR__VAR__PATH, untrailingslashit($wyocmuqcwyskkcyo) . '/var')) {
                ManipulateFile::koymmiyegyskqgck(self::PR__LOG__PATH, "{$ecuwmcmeucuiaamu}/log");
                ManipulateFile::koymmiyegyskqgck(self::PR__CACHE__PATH, "{$ecuwmcmeucuiaamu}/cache");
            }
        }
    }
    public function iemaakgqgqosiecm()
    {
        ORM::symcgieuakksimmu();
        API::symcgieuakksimmu();
        Ajax::symcgieuakksimmu();
        APIs::symcgieuakksimmu();
        Media::symcgieuakksimmu();
        Asset::symcgieuakksimmu();
        Logger::symcgieuakksimmu();
        Taxonomy::symcgieuakksimmu();
        Detector::symcgieuakksimmu();
        Template::symcgieuakksimmu();
        WPSetting::symcgieuakksimmu();
        FormMaker::symcgieuakksimmu();
    }
    public function uosqaeuewiqmesaa()
    {
        if (ManipulateWoocommerce::ayseokmqycoqaigc()) {
            Woocommerce::symcgieuakksimmu();
        }
    }
    public function uwikisyueuksqema()
    {
        $msyoeiaqaaseqiaw = (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw(''), []);
        if ($msyoeiaqaaseqiaw) {
            foreach ($msyoeiaqaaseqiaw as $smaiamkswqkisawm) {
                if (is_string($smaiamkswqkisawm)) {
                    $this->kcciqwskewsuaemk()->mkdir($smaiamkswqkisawm);
                }
                wwukgaquuyoissgy:
            }
            suqcsgaosywaauuu:
        }
    }
}
