<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b2e4befc8c             |
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
        qcaiegucqcakoguk:
        $this->cyowaaeywssoooeo();
        goto gsyaeawoooqaaeee;
        sgwwumsasamqmqky:
        $this->gkieogwukagigisy(__DIR__);
        goto kgsqmocueuiwmmcs;
        gsyaeawoooqaaeee:
        $this->iemaakgqgqosiecm();
        goto oeqeikgwugwquskq;
        kgsqmocueuiwmmcs:
        parent::__construct();
        goto qcaiegucqcakoguk;
        oeqeikgwugwquskq:
    }
    public function wigskegsqequoeks()
    {
        $this->qcsmikeggeemccuu("\167\x70\137\x6c\157\x61\144\145\144", [$this, "\145\156\161\x75\x65\165\145"])->qcsmikeggeemccuu("\x69\156\151\164", [$this, "\x75\x77\151\x6b\151\x73\x79\165\x65\165\x6b\x73\161\x65\x6d\x61"])->qcsmikeggeemccuu("\x70\154\x75\147\151\156\x73\137\x6c\157\x61\x64\145\x64", [$this, "\x75\x6f\163\161\x61\x65\165\145\167\151\161\x6d\145\x73\x61\141"]);
        parent::wigskegsqequoeks();
    }
    public function enqueue()
    {
        goto qkmciokkseyqoiye;
        ysceuaykccoiqqec:
        $wqsyimmcqogaosaq = array_merge($wqsyimmcqogaosaq, ["\x63\157\157\x6b\x69\x65\x5f\x67\165\145\163\x74\137\151\144" => self::GUEST_ID_COOKIE]);
        goto sagguseommuioaag;
        ssiykmokuqwoukkq:
        uyaugcksmygwamwo:
        goto swwsoucgukwwokou;
        ieescsoooicgswmc:
        $aamkqmkgsaqmcuao = DecoratorI18N::iyouigcsiacgwksc();
        goto eewmmuqwyuumymau;
        ygyqyeocqgucysak:
        $wqsyimmcqogaosaq = array_merge($wqsyimmcqogaosaq, ["\x64\145\142\x75\x67" => ManipulateSetting::esoowymaimwcuecq(), "\x6d\x6f\144\x61\154" => ManipulateHTML::icqkogwskuwscskk(), "\x73\160\x69\x6e\x6e\x65\x72" => ManipulateHTML::kqmkicmuscsgqeoi()]);
        goto ceuqgimswukikqiq;
        sagguseommuioaag:
        goto skqaokokoiksumqq;
        goto mkiiukgsugssgoea;
        weiqkaaeieoaycas:
        if (is_admin()) {
            goto oyuowamwkcqmgawq;
        }
        goto ysceuaykccoiqqec;
        eewmmuqwyuumymau:
        $wqsyimmcqogaosaq = ["\154\x6f\143\141\154\145" => $aamkqmkgsaqmcuao, "\141\152\x61\170\165\162\154" => ManipulateAjax::oiucukewkckkwiqc(), "\154\141\x6e\x67\165\x61\x67\x65" => str_replace("\x5f", "\x2d", $aamkqmkgsaqmcuao), "\156\157\x6e\x63\145\x5f\151\x64" => self::AJAX_NONCE_ID];
        goto weiqkaaeieoaycas;
        kqwioeqkgsgmmymg:
        $this->miocmcoykayoyyau()->ssguskiqaagaauoy($wqsyimmcqogaosaq)->iagmuqogkyysiick($wqsyimmcqogaosaq)->oaoisgmqkamuoeam($wqsyimmcqogaosaq);
        goto ssiykmokuqwoukkq;
        ceuqgimswukikqiq:
        skqaokokoiksumqq:
        goto kqwioeqkgsgmmymg;
        qkmciokkseyqoiye:
        if (ManipulateAjax::mcgoysmkqsqooceq()) {
            goto uyaugcksmygwamwo;
        }
        goto ieescsoooicgswmc;
        mkiiukgsugssgoea:
        oyuowamwkcqmgawq:
        goto ygyqyeocqgucysak;
        swwsoucgukwwokou:
    }
    public function cyowaaeywssoooeo()
    {
        goto kiieeckyooaiakiy;
        mkwcgkgauikuqkgs:
        if (!$wmwyaayqcewkyqsu) {
            goto eqeggksucqsyyqgy;
        }
        goto iekoocwecouagekw;
        scwgaeqqquyqoeey:
        scgiymugkuqikuoo:
        goto muyyguewmgkysmqi;
        muyyguewmgkysmqi:
        kggqciusmciogeoc:
        goto acqcuwoawoiqqcgw;
        cwqgyckguaiciiam:
        if (!$yaeakkosskocswae) {
            goto kggqciusmciogeoc;
        }
        goto qeeakiaqiwkogiki;
        oyuyqykycywqikma:
        eqeggksucqsyyqgy:
        goto gescaykeyikwwqos;
        ekqawkaqkgwygyys:
        $cyaeoagyqcqyqgmk = ManipulateFile::koymmiyegyskqgck(self::PUBLIC_HTML__BUILD__PATH, $yaeakkosskocswae . "\57\142");
        goto gaaikwwqsgaskqos;
        kiieeckyooaiakiy:
        $wmwyaayqcewkyqsu = ManipulateFile::cmaecekuqkwmemms(self::ABSPATH);
        goto mkwcgkgauikuqkgs;
        yoigaymqwkcqioac:
        ManipulateFile::koymmiyegyskqgck(self::PR__CACHE__PATH, "{$ecuwmcmeucuiaamu}\57\x63\141\x63\150\145");
        goto eusesuocygoggmyw;
        kuusqsqwcyeicqcu:
        ManipulateFile::koymmiyegyskqgck(self::PR__LOG__PATH, "{$ecuwmcmeucuiaamu}\x2f\154\157\x67");
        goto yoigaymqwkcqioac;
        acqcuwoawoiqqcgw:
        $wyocmuqcwyskkcyo = realpath(untrailingslashit($wmwyaayqcewkyqsu) . "\57\56\56\57\142\141\163\145");
        goto qqooskcsgmwcqmyo;
        guyaeuucuqosewwe:
        ManipulateFile::wwckmeoskuagomki(self::PUBLIC_HTML__BUILD__URL, ManipulateServer::gmigwwwmwemyaayy("\x2f\163\x2f\142"));
        goto scwgaeqqquyqoeey;
        eusesuocygoggmyw:
        weookqwiumeyqgqe:
        goto oyuyqykycywqikma;
        gaaikwwqsgaskqos:
        if (!$cyaeoagyqcqyqgmk) {
            goto scgiymugkuqikuoo;
        }
        goto guyaeuucuqosewwe;
        acymaqouwqmcmisy:
        if (!($ecuwmcmeucuiaamu = ManipulateFile::koymmiyegyskqgck(self::PR__VAR__PATH, untrailingslashit($wyocmuqcwyskkcyo) . "\57\x76\x61\x72"))) {
            goto weookqwiumeyqgqe;
        }
        goto kuusqsqwcyeicqcu;
        qqooskcsgmwcqmyo:
        ManipulateFile::wwckmeoskuagomki(self::BASE__ROOT__PATH, $wyocmuqcwyskkcyo);
        goto acymaqouwqmcmisy;
        qeeakiaqiwkogiki:
        ManipulateFile::wwckmeoskuagomki(self::PUBLIC_HTML__STATIC__URL, ManipulateServer::gmigwwwmwemyaayy("\57\163"));
        goto ekqawkaqkgwygyys;
        iekoocwecouagekw:
        $yaeakkosskocswae = ManipulateFile::koymmiyegyskqgck(self::PUBLIC_HTML__STATIC__PATH, untrailingslashit($wmwyaayqcewkyqsu) . "\57\x73");
        goto cwqgyckguaiciiam;
        gescaykeyikwwqos:
    }
    public function iemaakgqgqosiecm()
    {
        goto eeaicwceqqsiymuq;
        eggksuwcamuciuyu:
        APIs::symcgieuakksimmu();
        goto kmcoguowgwkcuaec;
        kmcoguowgwkcuaec:
        Media::symcgieuakksimmu();
        goto ogeqwcqesgmkyqaw;
        uaokswasiaegemqu:
        FormMaker::symcgieuakksimmu();
        goto yyciyacskyymkcks;
        euyueamqiaoyikie:
        WPSetting::symcgieuakksimmu();
        goto uaokswasiaegemqu;
        kggkkkouaeowcuea:
        Ajax::symcgieuakksimmu();
        goto eggksuwcamuciuyu;
        iquamkkkakqceico:
        Logger::symcgieuakksimmu();
        goto dakcgwwcguscwcgs;
        uiikmyqamcckswyq:
        API::symcgieuakksimmu();
        goto kggkkkouaeowcuea;
        soeqqoegkeocasic:
        Template::symcgieuakksimmu();
        goto euyueamqiaoyikie;
        eeaicwceqqsiymuq:
        ORM::symcgieuakksimmu();
        goto uiikmyqamcckswyq;
        ogeqwcqesgmkyqaw:
        Asset::symcgieuakksimmu();
        goto iquamkkkakqceico;
        muemymcgeomwgqka:
        Detector::symcgieuakksimmu();
        goto soeqqoegkeocasic;
        dakcgwwcguscwcgs:
        Taxonomy::symcgieuakksimmu();
        goto muemymcgeomwgqka;
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
        iacsmyoeqsisuoqq:
        if (!$msyoeiaqaaseqiaw) {
            goto hwcueuuaimkiawcg;
        }
        goto wieuocqaikcuwsmg;
        yyiuaymyqkoooyse:
        $msyoeiaqaaseqiaw = (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw(''), []);
        goto iacsmyoeqsisuoqq;
        eussomccqmmumkoc:
        hwcueuuaimkiawcg:
        goto isiseiywogusquiy;
        wieuocqaikcuwsmg:
        foreach ($msyoeiaqaaseqiaw as $smaiamkswqkisawm) {
            goto kymoeekcwkmosuqm;
            oakqasoccyooqcqk:
            $this->kcciqwskewsuaemk()->mkdir($smaiamkswqkisawm);
            goto eawommuykgayesso;
            eawommuykgayesso:
            mqkaiyymkmeyewiw:
            goto iyyskykwysmaiosq;
            iyyskykwysmaiosq:
            csscwckocuaykoew:
            goto swuiymekcguiocgu;
            kymoeekcwkmosuqm:
            if (!is_string($smaiamkswqkisawm)) {
                goto mqkaiyymkmeyewiw;
            }
            goto oakqasoccyooqcqk;
            swuiymekcguiocgu:
        }
        goto ywqaqwigqqqcsyos;
        ywqaqwigqqqcsyos:
        qucimmcmsoikwmau:
        goto eussomccqmmumkoc;
        isiseiywogusquiy:
    }
}
