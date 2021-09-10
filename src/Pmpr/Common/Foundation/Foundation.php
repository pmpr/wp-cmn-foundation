<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b6c65a2d22             |
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
        goto oyuowamwkcqmgawq;
        qkmciokkseyqoiye:
        $this->iemaakgqgqosiecm();
        goto ieescsoooicgswmc;
        oyuowamwkcqmgawq:
        $this->gkieogwukagigisy(__DIR__);
        goto skqaokokoiksumqq;
        skqaokokoiksumqq:
        parent::__construct();
        goto uyaugcksmygwamwo;
        uyaugcksmygwamwo:
        $this->cyowaaeywssoooeo();
        goto qkmciokkseyqoiye;
        ieescsoooicgswmc:
    }
    public function wigskegsqequoeks()
    {
        $this->qcsmikeggeemccuu("\x77\160\x5f\x6c\157\x61\144\145\144", [$this, "\145\x6e\x71\x75\x65\165\145"])->qcsmikeggeemccuu("\x69\156\x69\164", [$this, "\x75\167\151\153\151\163\171\x75\x65\x75\x6b\163\x71\x65\x6d\x61"])->qcsmikeggeemccuu("\160\x6c\x75\147\151\156\163\x5f\x6c\157\x61\x64\x65\x64", [$this, "\165\157\163\161\x61\145\165\145\x77\151\x71\155\145\163\141\141"]);
        parent::wigskegsqequoeks();
    }
    public function enqueue()
    {
        goto sagguseommuioaag;
        sagguseommuioaag:
        if (ManipulateAjax::mcgoysmkqsqooceq()) {
            goto ysceuaykccoiqqec;
        }
        goto mkiiukgsugssgoea;
        kggqciusmciogeoc:
        weiqkaaeieoaycas:
        goto weookqwiumeyqgqe;
        mkiiukgsugssgoea:
        $aamkqmkgsaqmcuao = DecoratorI18N::iyouigcsiacgwksc();
        goto ygyqyeocqgucysak;
        scgiymugkuqikuoo:
        $wqsyimmcqogaosaq = array_merge($wqsyimmcqogaosaq, ["\x64\x65\x62\165\147" => ManipulateSetting::esoowymaimwcuecq(), "\155\x6f\x64\141\154" => ManipulateHTML::icqkogwskuwscskk(), "\163\x70\x69\156\x6e\145\162" => ManipulateHTML::kqmkicmuscsgqeoi()]);
        goto kggqciusmciogeoc;
        ceuqgimswukikqiq:
        if (is_admin()) {
            goto eewmmuqwyuumymau;
        }
        goto kqwioeqkgsgmmymg;
        ssiykmokuqwoukkq:
        goto weiqkaaeieoaycas;
        goto swwsoucgukwwokou;
        kqwioeqkgsgmmymg:
        $wqsyimmcqogaosaq = array_merge($wqsyimmcqogaosaq, ["\x63\157\x6f\x6b\151\x65\x5f\147\x75\x65\163\164\x5f\x69\144" => self::GUEST_ID_COOKIE]);
        goto ssiykmokuqwoukkq;
        swwsoucgukwwokou:
        eewmmuqwyuumymau:
        goto scgiymugkuqikuoo;
        eqeggksucqsyyqgy:
        ysceuaykccoiqqec:
        goto kiieeckyooaiakiy;
        weookqwiumeyqgqe:
        $this->miocmcoykayoyyau()->ssguskiqaagaauoy($wqsyimmcqogaosaq)->iagmuqogkyysiick($wqsyimmcqogaosaq)->oaoisgmqkamuoeam($wqsyimmcqogaosaq);
        goto eqeggksucqsyyqgy;
        ygyqyeocqgucysak:
        $wqsyimmcqogaosaq = ["\x6c\157\x63\x61\154\x65" => $aamkqmkgsaqmcuao, "\141\152\x61\x78\x75\162\154" => ManipulateAjax::oiucukewkckkwiqc(), "\x6c\x61\156\x67\165\141\x67\x65" => str_replace("\137", "\55", $aamkqmkgsaqmcuao), "\156\157\156\143\145\x5f\x69\x64" => self::AJAX_NONCE_ID];
        goto ceuqgimswukikqiq;
        kiieeckyooaiakiy:
    }
    public function cyowaaeywssoooeo()
    {
        goto ekqawkaqkgwygyys;
        acymaqouwqmcmisy:
        ManipulateFile::wwckmeoskuagomki(self::PUBLIC_HTML__BUILD__URL, ManipulateServer::gmigwwwmwemyaayy("\x2f\163\x2f\142"));
        goto kuusqsqwcyeicqcu;
        muyyguewmgkysmqi:
        ManipulateFile::wwckmeoskuagomki(self::PUBLIC_HTML__STATIC__URL, ManipulateServer::gmigwwwmwemyaayy("\57\x73"));
        goto acqcuwoawoiqqcgw;
        scwgaeqqquyqoeey:
        if (!$yaeakkosskocswae) {
            goto iekoocwecouagekw;
        }
        goto muyyguewmgkysmqi;
        eusesuocygoggmyw:
        $wyocmuqcwyskkcyo = realpath(untrailingslashit($wmwyaayqcewkyqsu) . "\57\56\56\57\142\141\x73\145");
        goto oyuyqykycywqikma;
        kggkkkouaeowcuea:
        cwqgyckguaiciiam:
        goto eggksuwcamuciuyu;
        yoigaymqwkcqioac:
        iekoocwecouagekw:
        goto eusesuocygoggmyw;
        uiikmyqamcckswyq:
        ManipulateFile::koymmiyegyskqgck(self::PR__CACHE__PATH, "{$ecuwmcmeucuiaamu}\57\143\141\143\150\x65");
        goto kggkkkouaeowcuea;
        eeaicwceqqsiymuq:
        ManipulateFile::koymmiyegyskqgck(self::PR__LOG__PATH, "{$ecuwmcmeucuiaamu}\x2f\154\157\147");
        goto uiikmyqamcckswyq;
        guyaeuucuqosewwe:
        $yaeakkosskocswae = ManipulateFile::koymmiyegyskqgck(self::PUBLIC_HTML__STATIC__PATH, untrailingslashit($wmwyaayqcewkyqsu) . "\x2f\163");
        goto scwgaeqqquyqoeey;
        kuusqsqwcyeicqcu:
        mkwcgkgauikuqkgs:
        goto yoigaymqwkcqioac;
        oyuyqykycywqikma:
        ManipulateFile::wwckmeoskuagomki(self::BASE__ROOT__PATH, $wyocmuqcwyskkcyo);
        goto gescaykeyikwwqos;
        ekqawkaqkgwygyys:
        $wmwyaayqcewkyqsu = ManipulateFile::cmaecekuqkwmemms(self::ABSPATH);
        goto gaaikwwqsgaskqos;
        gescaykeyikwwqos:
        if (!($ecuwmcmeucuiaamu = ManipulateFile::koymmiyegyskqgck(self::PR__VAR__PATH, untrailingslashit($wyocmuqcwyskkcyo) . "\57\166\141\x72"))) {
            goto cwqgyckguaiciiam;
        }
        goto eeaicwceqqsiymuq;
        qqooskcsgmwcqmyo:
        if (!$cyaeoagyqcqyqgmk) {
            goto mkwcgkgauikuqkgs;
        }
        goto acymaqouwqmcmisy;
        gaaikwwqsgaskqos:
        if (!$wmwyaayqcewkyqsu) {
            goto qeeakiaqiwkogiki;
        }
        goto guyaeuucuqosewwe;
        acqcuwoawoiqqcgw:
        $cyaeoagyqcqyqgmk = ManipulateFile::koymmiyegyskqgck(self::PUBLIC_HTML__BUILD__PATH, $yaeakkosskocswae . "\x2f\x62");
        goto qqooskcsgmwcqmyo;
        eggksuwcamuciuyu:
        qeeakiaqiwkogiki:
        goto kmcoguowgwkcuaec;
        kmcoguowgwkcuaec:
    }
    public function iemaakgqgqosiecm()
    {
        goto ogeqwcqesgmkyqaw;
        dakcgwwcguscwcgs:
        Ajax::symcgieuakksimmu();
        goto muemymcgeomwgqka;
        ogeqwcqesgmkyqaw:
        ORM::symcgieuakksimmu();
        goto iquamkkkakqceico;
        tiyaygouckaskgga:
        Detector::symcgieuakksimmu();
        goto syowoqgquwemkyuy;
        iquamkkkakqceico:
        API::symcgieuakksimmu();
        goto dakcgwwcguscwcgs;
        yaysquwmiyumwecu:
        WPSetting::symcgieuakksimmu();
        goto oeeayggmgimqigqm;
        syowoqgquwemkyuy:
        Template::symcgieuakksimmu();
        goto yaysquwmiyumwecu;
        muemymcgeomwgqka:
        APIs::symcgieuakksimmu();
        goto soeqqoegkeocasic;
        yyciyacskyymkcks:
        Taxonomy::symcgieuakksimmu();
        goto tiyaygouckaskgga;
        euyueamqiaoyikie:
        Asset::symcgieuakksimmu();
        goto uaokswasiaegemqu;
        uaokswasiaegemqu:
        Logger::symcgieuakksimmu();
        goto yyciyacskyymkcks;
        oeeayggmgimqigqm:
        FormMaker::symcgieuakksimmu();
        goto amciqasycmesgweq;
        soeqqoegkeocasic:
        Media::symcgieuakksimmu();
        goto euyueamqiaoyikie;
        amciqasycmesgweq:
    }
    public function uosqaeuewiqmesaa()
    {
        goto csscwckocuaykoew;
        csscwckocuaykoew:
        if (!ManipulateWoocommerce::ayseokmqycoqaigc()) {
            goto qucimmcmsoikwmau;
        }
        goto mqkaiyymkmeyewiw;
        mqkaiyymkmeyewiw:
        Woocommerce::symcgieuakksimmu();
        goto kymoeekcwkmosuqm;
        kymoeekcwkmosuqm:
        qucimmcmsoikwmau:
        goto oakqasoccyooqcqk;
        oakqasoccyooqcqk:
    }
    public function uwikisyueuksqema()
    {
        goto isiseiywogusquiy;
        ukuqoksosmkiycci:
        foreach ($msyoeiaqaaseqiaw as $smaiamkswqkisawm) {
            goto hwcueuuaimkiawcg;
            hwcueuuaimkiawcg:
            if (!is_string($smaiamkswqkisawm)) {
                goto swuiymekcguiocgu;
            }
            goto yyiuaymyqkoooyse;
            iacsmyoeqsisuoqq:
            swuiymekcguiocgu:
            goto wieuocqaikcuwsmg;
            yyiuaymyqkoooyse:
            $this->kcciqwskewsuaemk()->mkdir($smaiamkswqkisawm);
            goto iacsmyoeqsisuoqq;
            wieuocqaikcuwsmg:
            iyyskykwysmaiosq:
            goto ywqaqwigqqqcsyos;
            ywqaqwigqqqcsyos:
        }
        goto ycoiwiguwggowsug;
        isiseiywogusquiy:
        $msyoeiaqaaseqiaw = (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw(''), []);
        goto uquciwyocygmwaeq;
        ycoiwiguwggowsug:
        eawommuykgayesso:
        goto ykyuusouwcesskqe;
        ykyuusouwcesskqe:
        eussomccqmmumkoc:
        goto aiwaekeqciwyimwi;
        uquciwyocygmwaeq:
        if (!$msyoeiaqaaseqiaw) {
            goto eussomccqmmumkoc;
        }
        goto ukuqoksosmkiycci;
        aiwaekeqciwyimwi:
    }
}
