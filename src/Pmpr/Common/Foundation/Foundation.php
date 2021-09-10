<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b30261f503             |
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
        goto sgwwumsasamqmqky;
        kgsqmocueuiwmmcs:
        parent::__construct();
        goto qcaiegucqcakoguk;
        gsyaeawoooqaaeee:
        $this->iemaakgqgqosiecm();
        goto oeqeikgwugwquskq;
        qcaiegucqcakoguk:
        $this->cyowaaeywssoooeo();
        goto gsyaeawoooqaaeee;
        sgwwumsasamqmqky:
        $this->gkieogwukagigisy(__DIR__);
        goto kgsqmocueuiwmmcs;
        oeqeikgwugwquskq:
    }
    public function wigskegsqequoeks()
    {
        $this->qcsmikeggeemccuu("\x77\x70\x5f\154\x6f\141\x64\145\x64", [$this, "\x65\x6e\161\x75\x65\165\x65"])->qcsmikeggeemccuu("\x69\x6e\151\x74", [$this, "\x75\x77\x69\153\x69\x73\171\165\x65\x75\x6b\x73\x71\145\x6d\x61"])->qcsmikeggeemccuu("\160\x6c\165\x67\151\156\x73\137\154\157\x61\x64\145\x64", [$this, "\x75\157\x73\x71\x61\x65\x75\145\167\x69\161\155\145\163\x61\x61"]);
        parent::wigskegsqequoeks();
    }
    public function enqueue()
    {
        goto qkmciokkseyqoiye;
        ieescsoooicgswmc:
        $aamkqmkgsaqmcuao = DecoratorI18N::iyouigcsiacgwksc();
        goto eewmmuqwyuumymau;
        ssiykmokuqwoukkq:
        uyaugcksmygwamwo:
        goto swwsoucgukwwokou;
        eewmmuqwyuumymau:
        $wqsyimmcqogaosaq = ["\x6c\x6f\143\141\x6c\x65" => $aamkqmkgsaqmcuao, "\141\x6a\x61\170\x75\x72\154" => ManipulateAjax::oiucukewkckkwiqc(), "\x6c\141\156\x67\165\141\x67\x65" => str_replace("\137", "\55", $aamkqmkgsaqmcuao), "\156\x6f\156\143\x65\x5f\x69\144" => self::AJAX_NONCE_ID];
        goto weiqkaaeieoaycas;
        ceuqgimswukikqiq:
        skqaokokoiksumqq:
        goto kqwioeqkgsgmmymg;
        sagguseommuioaag:
        goto skqaokokoiksumqq;
        goto mkiiukgsugssgoea;
        mkiiukgsugssgoea:
        oyuowamwkcqmgawq:
        goto ygyqyeocqgucysak;
        ygyqyeocqgucysak:
        $wqsyimmcqogaosaq = array_merge($wqsyimmcqogaosaq, ["\x64\145\142\x75\x67" => ManipulateSetting::esoowymaimwcuecq(), "\155\157\144\x61\x6c" => ManipulateHTML::icqkogwskuwscskk(), "\x73\160\x69\156\x6e\145\162" => ManipulateHTML::kqmkicmuscsgqeoi()]);
        goto ceuqgimswukikqiq;
        ysceuaykccoiqqec:
        $wqsyimmcqogaosaq = array_merge($wqsyimmcqogaosaq, ["\143\x6f\x6f\153\151\x65\137\147\165\145\x73\164\137\151\144" => self::GUEST_ID_COOKIE]);
        goto sagguseommuioaag;
        weiqkaaeieoaycas:
        if (is_admin()) {
            goto oyuowamwkcqmgawq;
        }
        goto ysceuaykccoiqqec;
        qkmciokkseyqoiye:
        if (ManipulateAjax::mcgoysmkqsqooceq()) {
            goto uyaugcksmygwamwo;
        }
        goto ieescsoooicgswmc;
        kqwioeqkgsgmmymg:
        $this->miocmcoykayoyyau()->ssguskiqaagaauoy($wqsyimmcqogaosaq)->iagmuqogkyysiick($wqsyimmcqogaosaq)->oaoisgmqkamuoeam($wqsyimmcqogaosaq);
        goto ssiykmokuqwoukkq;
        swwsoucgukwwokou:
    }
    public function cyowaaeywssoooeo()
    {
        goto kiieeckyooaiakiy;
        cwqgyckguaiciiam:
        if (!$yaeakkosskocswae) {
            goto kggqciusmciogeoc;
        }
        goto qeeakiaqiwkogiki;
        qqooskcsgmwcqmyo:
        ManipulateFile::wwckmeoskuagomki(self::BASE__ROOT__PATH, $wyocmuqcwyskkcyo);
        goto acymaqouwqmcmisy;
        scwgaeqqquyqoeey:
        scgiymugkuqikuoo:
        goto muyyguewmgkysmqi;
        qeeakiaqiwkogiki:
        ManipulateFile::wwckmeoskuagomki(self::PUBLIC_HTML__STATIC__URL, ManipulateServer::gmigwwwmwemyaayy("\x2f\x73"));
        goto ekqawkaqkgwygyys;
        oyuyqykycywqikma:
        eqeggksucqsyyqgy:
        goto gescaykeyikwwqos;
        iekoocwecouagekw:
        $yaeakkosskocswae = ManipulateFile::koymmiyegyskqgck(self::PUBLIC_HTML__STATIC__PATH, untrailingslashit($wmwyaayqcewkyqsu) . "\x2f\x73");
        goto cwqgyckguaiciiam;
        eusesuocygoggmyw:
        weookqwiumeyqgqe:
        goto oyuyqykycywqikma;
        gaaikwwqsgaskqos:
        if (!$cyaeoagyqcqyqgmk) {
            goto scgiymugkuqikuoo;
        }
        goto guyaeuucuqosewwe;
        kuusqsqwcyeicqcu:
        ManipulateFile::koymmiyegyskqgck(self::PR__LOG__PATH, "{$ecuwmcmeucuiaamu}\57\x6c\x6f\147");
        goto yoigaymqwkcqioac;
        yoigaymqwkcqioac:
        ManipulateFile::koymmiyegyskqgck(self::PR__CACHE__PATH, "{$ecuwmcmeucuiaamu}\57\x63\x61\143\x68\x65");
        goto eusesuocygoggmyw;
        mkwcgkgauikuqkgs:
        if (!$wmwyaayqcewkyqsu) {
            goto eqeggksucqsyyqgy;
        }
        goto iekoocwecouagekw;
        kiieeckyooaiakiy:
        $wmwyaayqcewkyqsu = ManipulateFile::cmaecekuqkwmemms(self::ABSPATH);
        goto mkwcgkgauikuqkgs;
        acymaqouwqmcmisy:
        if (!($ecuwmcmeucuiaamu = ManipulateFile::koymmiyegyskqgck(self::PR__VAR__PATH, untrailingslashit($wyocmuqcwyskkcyo) . "\57\x76\141\162"))) {
            goto weookqwiumeyqgqe;
        }
        goto kuusqsqwcyeicqcu;
        ekqawkaqkgwygyys:
        $cyaeoagyqcqyqgmk = ManipulateFile::koymmiyegyskqgck(self::PUBLIC_HTML__BUILD__PATH, $yaeakkosskocswae . "\x2f\142");
        goto gaaikwwqsgaskqos;
        muyyguewmgkysmqi:
        kggqciusmciogeoc:
        goto acqcuwoawoiqqcgw;
        guyaeuucuqosewwe:
        ManipulateFile::wwckmeoskuagomki(self::PUBLIC_HTML__BUILD__URL, ManipulateServer::gmigwwwmwemyaayy("\57\x73\x2f\142"));
        goto scwgaeqqquyqoeey;
        acqcuwoawoiqqcgw:
        $wyocmuqcwyskkcyo = realpath(untrailingslashit($wmwyaayqcewkyqsu) . "\x2f\x2e\56\x2f\142\141\x73\145");
        goto qqooskcsgmwcqmyo;
        gescaykeyikwwqos:
    }
    public function iemaakgqgqosiecm()
    {
        goto eeaicwceqqsiymuq;
        muemymcgeomwgqka:
        Detector::symcgieuakksimmu();
        goto soeqqoegkeocasic;
        uaokswasiaegemqu:
        FormMaker::symcgieuakksimmu();
        goto yyciyacskyymkcks;
        euyueamqiaoyikie:
        WPSetting::symcgieuakksimmu();
        goto uaokswasiaegemqu;
        eeaicwceqqsiymuq:
        ORM::symcgieuakksimmu();
        goto uiikmyqamcckswyq;
        soeqqoegkeocasic:
        Template::symcgieuakksimmu();
        goto euyueamqiaoyikie;
        kggkkkouaeowcuea:
        Ajax::symcgieuakksimmu();
        goto eggksuwcamuciuyu;
        iquamkkkakqceico:
        Logger::symcgieuakksimmu();
        goto dakcgwwcguscwcgs;
        eggksuwcamuciuyu:
        APIs::symcgieuakksimmu();
        goto kmcoguowgwkcuaec;
        uiikmyqamcckswyq:
        API::symcgieuakksimmu();
        goto kggkkkouaeowcuea;
        dakcgwwcguscwcgs:
        Taxonomy::symcgieuakksimmu();
        goto muemymcgeomwgqka;
        kmcoguowgwkcuaec:
        Media::symcgieuakksimmu();
        goto ogeqwcqesgmkyqaw;
        ogeqwcqesgmkyqaw:
        Asset::symcgieuakksimmu();
        goto iquamkkkakqceico;
        yyciyacskyymkcks:
    }
    public function uosqaeuewiqmesaa()
    {
        goto syowoqgquwemkyuy;
        oeeayggmgimqigqm:
        tiyaygouckaskgga:
        goto amciqasycmesgweq;
        yaysquwmiyumwecu:
        Woocommerce::symcgieuakksimmu();
        goto oeeayggmgimqigqm;
        syowoqgquwemkyuy:
        if (!ManipulateWoocommerce::ayseokmqycoqaigc()) {
            goto tiyaygouckaskgga;
        }
        goto yaysquwmiyumwecu;
        amciqasycmesgweq:
    }
    public function uwikisyueuksqema()
    {
        goto yyiuaymyqkoooyse;
        ywqaqwigqqqcsyos:
        qucimmcmsoikwmau:
        goto eussomccqmmumkoc;
        eussomccqmmumkoc:
        hwcueuuaimkiawcg:
        goto isiseiywogusquiy;
        wieuocqaikcuwsmg:
        foreach ($msyoeiaqaaseqiaw as $smaiamkswqkisawm) {
            goto kymoeekcwkmosuqm;
            kymoeekcwkmosuqm:
            if (!is_string($smaiamkswqkisawm)) {
                goto mqkaiyymkmeyewiw;
            }
            goto oakqasoccyooqcqk;
            iyyskykwysmaiosq:
            csscwckocuaykoew:
            goto swuiymekcguiocgu;
            oakqasoccyooqcqk:
            $this->kcciqwskewsuaemk()->mkdir($smaiamkswqkisawm);
            goto eawommuykgayesso;
            eawommuykgayesso:
            mqkaiyymkmeyewiw:
            goto iyyskykwysmaiosq;
            swuiymekcguiocgu:
        }
        goto ywqaqwigqqqcsyos;
        iacsmyoeqsisuoqq:
        if (!$msyoeiaqaaseqiaw) {
            goto hwcueuuaimkiawcg;
        }
        goto wieuocqaikcuwsmg;
        yyiuaymyqkoooyse:
        $msyoeiaqaaseqiaw = (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw(''), []);
        goto iacsmyoeqsisuoqq;
        isiseiywogusquiy:
    }
}
