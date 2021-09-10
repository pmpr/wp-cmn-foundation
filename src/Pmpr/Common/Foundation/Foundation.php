<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b1e8aa0c03             |
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
        goto ggqciukoakmkiauk;
        ggqciukoakmkiauk:
        $this->gkieogwukagigisy(__DIR__);
        goto aekiswqkimmgcmac;
        csaweyksigegicem:
        $this->cyowaaeywssoooeo();
        goto sgwwumsasamqmqky;
        sgwwumsasamqmqky:
        $this->iemaakgqgqosiecm();
        goto kgsqmocueuiwmmcs;
        aekiswqkimmgcmac:
        parent::__construct();
        goto csaweyksigegicem;
        kgsqmocueuiwmmcs:
    }
    public function wigskegsqequoeks()
    {
        $this->qcsmikeggeemccuu("\x77\x70\x5f\154\157\x61\144\x65\144", [$this, "\x65\x6e\161\x75\x65\165\x65"])->qcsmikeggeemccuu("\x69\156\x69\x74", [$this, "\165\x77\x69\153\x69\163\171\165\x65\165\153\x73\x71\145\155\x61"])->qcsmikeggeemccuu("\160\154\165\x67\x69\156\x73\137\154\157\x61\x64\145\x64", [$this, "\x75\157\163\x71\x61\x65\165\x65\167\151\161\155\145\163\x61\x61"]);
        parent::wigskegsqequoeks();
    }
    public function enqueue()
    {
        goto oyuowamwkcqmgawq;
        eewmmuqwyuumymau:
        goto gsyaeawoooqaaeee;
        goto weiqkaaeieoaycas;
        ygyqyeocqgucysak:
        oeqeikgwugwquskq:
        goto ceuqgimswukikqiq;
        mkiiukgsugssgoea:
        $this->miocmcoykayoyyau()->ssguskiqaagaauoy($wqsyimmcqogaosaq)->iagmuqogkyysiick($wqsyimmcqogaosaq)->oaoisgmqkamuoeam($wqsyimmcqogaosaq);
        goto ygyqyeocqgucysak;
        uyaugcksmygwamwo:
        $wqsyimmcqogaosaq = ["\x6c\x6f\143\141\x6c\145" => $aamkqmkgsaqmcuao, "\x61\x6a\141\170\x75\162\x6c" => ManipulateAjax::oiucukewkckkwiqc(), "\x6c\x61\x6e\147\165\x61\147\145" => str_replace("\x5f", "\55", $aamkqmkgsaqmcuao), "\156\157\x6e\143\x65\x5f\151\144" => self::AJAX_NONCE_ID];
        goto qkmciokkseyqoiye;
        qkmciokkseyqoiye:
        if (is_admin()) {
            goto qcaiegucqcakoguk;
        }
        goto ieescsoooicgswmc;
        sagguseommuioaag:
        gsyaeawoooqaaeee:
        goto mkiiukgsugssgoea;
        skqaokokoiksumqq:
        $aamkqmkgsaqmcuao = DecoratorI18N::iyouigcsiacgwksc();
        goto uyaugcksmygwamwo;
        oyuowamwkcqmgawq:
        if (ManipulateAjax::mcgoysmkqsqooceq()) {
            goto oeqeikgwugwquskq;
        }
        goto skqaokokoiksumqq;
        ysceuaykccoiqqec:
        $wqsyimmcqogaosaq = array_merge($wqsyimmcqogaosaq, ["\144\x65\x62\x75\x67" => ManipulateSetting::esoowymaimwcuecq(), "\x6d\157\x64\141\154" => ManipulateHTML::icqkogwskuwscskk(), "\163\160\x69\x6e\x6e\x65\162" => ManipulateHTML::kqmkicmuscsgqeoi()]);
        goto sagguseommuioaag;
        weiqkaaeieoaycas:
        qcaiegucqcakoguk:
        goto ysceuaykccoiqqec;
        ieescsoooicgswmc:
        $wqsyimmcqogaosaq = array_merge($wqsyimmcqogaosaq, ["\143\x6f\x6f\153\x69\145\x5f\147\x75\x65\163\x74\137\x69\x64" => self::GUEST_ID_COOKIE]);
        goto eewmmuqwyuumymau;
        ceuqgimswukikqiq:
    }
    public function cyowaaeywssoooeo()
    {
        goto kggqciusmciogeoc;
        eqeggksucqsyyqgy:
        $yaeakkosskocswae = ManipulateFile::koymmiyegyskqgck(self::PUBLIC_HTML__STATIC__PATH, untrailingslashit($wmwyaayqcewkyqsu) . "\57\163");
        goto kiieeckyooaiakiy;
        gaaikwwqsgaskqos:
        ssiykmokuqwoukkq:
        goto guyaeuucuqosewwe;
        acymaqouwqmcmisy:
        swwsoucgukwwokou:
        goto kuusqsqwcyeicqcu;
        weookqwiumeyqgqe:
        if (!$wmwyaayqcewkyqsu) {
            goto scgiymugkuqikuoo;
        }
        goto eqeggksucqsyyqgy;
        scwgaeqqquyqoeey:
        ManipulateFile::wwckmeoskuagomki(self::BASE__ROOT__PATH, $wyocmuqcwyskkcyo);
        goto muyyguewmgkysmqi;
        qqooskcsgmwcqmyo:
        ManipulateFile::koymmiyegyskqgck(self::PR__CACHE__PATH, "{$ecuwmcmeucuiaamu}\x2f\143\x61\143\150\145");
        goto acymaqouwqmcmisy;
        iekoocwecouagekw:
        $cyaeoagyqcqyqgmk = ManipulateFile::koymmiyegyskqgck(self::PUBLIC_HTML__BUILD__PATH, $yaeakkosskocswae . "\x2f\142");
        goto cwqgyckguaiciiam;
        muyyguewmgkysmqi:
        if (!($ecuwmcmeucuiaamu = ManipulateFile::koymmiyegyskqgck(self::PR__VAR__PATH, untrailingslashit($wyocmuqcwyskkcyo) . "\57\166\x61\x72"))) {
            goto swwsoucgukwwokou;
        }
        goto acqcuwoawoiqqcgw;
        qeeakiaqiwkogiki:
        ManipulateFile::wwckmeoskuagomki(self::PUBLIC_HTML__BUILD__URL, ManipulateServer::gmigwwwmwemyaayy("\57\163\57\x62"));
        goto ekqawkaqkgwygyys;
        kuusqsqwcyeicqcu:
        scgiymugkuqikuoo:
        goto yoigaymqwkcqioac;
        mkwcgkgauikuqkgs:
        ManipulateFile::wwckmeoskuagomki(self::PUBLIC_HTML__STATIC__URL, ManipulateServer::gmigwwwmwemyaayy("\x2f\163"));
        goto iekoocwecouagekw;
        kggqciusmciogeoc:
        $wmwyaayqcewkyqsu = ManipulateFile::cmaecekuqkwmemms(self::ABSPATH);
        goto weookqwiumeyqgqe;
        guyaeuucuqosewwe:
        $wyocmuqcwyskkcyo = realpath(untrailingslashit($wmwyaayqcewkyqsu) . "\57\56\x2e\57\x62\141\163\x65");
        goto scwgaeqqquyqoeey;
        ekqawkaqkgwygyys:
        kqwioeqkgsgmmymg:
        goto gaaikwwqsgaskqos;
        acqcuwoawoiqqcgw:
        ManipulateFile::koymmiyegyskqgck(self::PR__LOG__PATH, "{$ecuwmcmeucuiaamu}\x2f\154\157\x67");
        goto qqooskcsgmwcqmyo;
        kiieeckyooaiakiy:
        if (!$yaeakkosskocswae) {
            goto ssiykmokuqwoukkq;
        }
        goto mkwcgkgauikuqkgs;
        cwqgyckguaiciiam:
        if (!$cyaeoagyqcqyqgmk) {
            goto kqwioeqkgsgmmymg;
        }
        goto qeeakiaqiwkogiki;
        yoigaymqwkcqioac:
    }
    public function iemaakgqgqosiecm()
    {
        goto eusesuocygoggmyw;
        dakcgwwcguscwcgs:
        WPSetting::symcgieuakksimmu();
        goto muemymcgeomwgqka;
        ogeqwcqesgmkyqaw:
        Detector::symcgieuakksimmu();
        goto iquamkkkakqceico;
        eeaicwceqqsiymuq:
        APIs::symcgieuakksimmu();
        goto uiikmyqamcckswyq;
        eusesuocygoggmyw:
        ORM::symcgieuakksimmu();
        goto oyuyqykycywqikma;
        eggksuwcamuciuyu:
        Logger::symcgieuakksimmu();
        goto kmcoguowgwkcuaec;
        muemymcgeomwgqka:
        FormMaker::symcgieuakksimmu();
        goto soeqqoegkeocasic;
        kmcoguowgwkcuaec:
        Taxonomy::symcgieuakksimmu();
        goto ogeqwcqesgmkyqaw;
        iquamkkkakqceico:
        Template::symcgieuakksimmu();
        goto dakcgwwcguscwcgs;
        kggkkkouaeowcuea:
        Asset::symcgieuakksimmu();
        goto eggksuwcamuciuyu;
        gescaykeyikwwqos:
        Ajax::symcgieuakksimmu();
        goto eeaicwceqqsiymuq;
        oyuyqykycywqikma:
        API::symcgieuakksimmu();
        goto gescaykeyikwwqos;
        uiikmyqamcckswyq:
        Media::symcgieuakksimmu();
        goto kggkkkouaeowcuea;
        soeqqoegkeocasic:
    }
    public function uosqaeuewiqmesaa()
    {
        goto uaokswasiaegemqu;
        tiyaygouckaskgga:
        euyueamqiaoyikie:
        goto syowoqgquwemkyuy;
        uaokswasiaegemqu:
        if (!ManipulateWoocommerce::ayseokmqycoqaigc()) {
            goto euyueamqiaoyikie;
        }
        goto yyciyacskyymkcks;
        yyciyacskyymkcks:
        Woocommerce::symcgieuakksimmu();
        goto tiyaygouckaskgga;
        syowoqgquwemkyuy:
    }
    public function uwikisyueuksqema()
    {
        goto iyyskykwysmaiosq;
        iyyskykwysmaiosq:
        $msyoeiaqaaseqiaw = (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw(''), []);
        goto swuiymekcguiocgu;
        iacsmyoeqsisuoqq:
        eawommuykgayesso:
        goto wieuocqaikcuwsmg;
        yyiuaymyqkoooyse:
        yaysquwmiyumwecu:
        goto iacsmyoeqsisuoqq;
        hwcueuuaimkiawcg:
        foreach ($msyoeiaqaaseqiaw as $smaiamkswqkisawm) {
            goto qucimmcmsoikwmau;
            mqkaiyymkmeyewiw:
            amciqasycmesgweq:
            goto kymoeekcwkmosuqm;
            qucimmcmsoikwmau:
            if (!is_string($smaiamkswqkisawm)) {
                goto amciqasycmesgweq;
            }
            goto csscwckocuaykoew;
            csscwckocuaykoew:
            $this->kcciqwskewsuaemk()->mkdir($smaiamkswqkisawm);
            goto mqkaiyymkmeyewiw;
            kymoeekcwkmosuqm:
            oeeayggmgimqigqm:
            goto oakqasoccyooqcqk;
            oakqasoccyooqcqk:
        }
        goto yyiuaymyqkoooyse;
        swuiymekcguiocgu:
        if (!$msyoeiaqaaseqiaw) {
            goto eawommuykgayesso;
        }
        goto hwcueuuaimkiawcg;
        wieuocqaikcuwsmg:
    }
}
