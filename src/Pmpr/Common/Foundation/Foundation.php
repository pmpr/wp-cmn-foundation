<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b499786a1b             |
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
        uyaugcksmygwamwo:
        $this->cyowaaeywssoooeo();
        goto qkmciokkseyqoiye;
        qkmciokkseyqoiye:
        $this->iemaakgqgqosiecm();
        goto ieescsoooicgswmc;
        skqaokokoiksumqq:
        parent::__construct();
        goto uyaugcksmygwamwo;
        oyuowamwkcqmgawq:
        $this->gkieogwukagigisy(__DIR__);
        goto skqaokokoiksumqq;
        ieescsoooicgswmc:
    }
    public function wigskegsqequoeks()
    {
        $this->qcsmikeggeemccuu("\167\160\x5f\x6c\x6f\x61\x64\x65\144", [$this, "\145\156\161\165\145\x75\145"])->qcsmikeggeemccuu("\x69\156\151\164", [$this, "\165\167\x69\153\x69\163\x79\165\145\165\153\163\x71\145\x6d\x61"])->qcsmikeggeemccuu("\160\154\x75\x67\151\156\163\137\154\157\x61\144\x65\x64", [$this, "\165\157\163\x71\141\145\x75\x65\167\x69\161\155\x65\163\141\x61"]);
        parent::wigskegsqequoeks();
    }
    public function enqueue()
    {
        goto sagguseommuioaag;
        scgiymugkuqikuoo:
        $wqsyimmcqogaosaq = array_merge($wqsyimmcqogaosaq, ["\144\145\142\165\x67" => ManipulateSetting::esoowymaimwcuecq(), "\155\157\144\x61\x6c" => ManipulateHTML::icqkogwskuwscskk(), "\x73\160\x69\156\x6e\145\162" => ManipulateHTML::kqmkicmuscsgqeoi()]);
        goto kggqciusmciogeoc;
        kqwioeqkgsgmmymg:
        $wqsyimmcqogaosaq = array_merge($wqsyimmcqogaosaq, ["\143\157\x6f\x6b\x69\145\x5f\147\165\145\163\x74\137\x69\x64" => self::GUEST_ID_COOKIE]);
        goto ssiykmokuqwoukkq;
        mkiiukgsugssgoea:
        $aamkqmkgsaqmcuao = DecoratorI18N::iyouigcsiacgwksc();
        goto ygyqyeocqgucysak;
        ceuqgimswukikqiq:
        if (is_admin()) {
            goto eewmmuqwyuumymau;
        }
        goto kqwioeqkgsgmmymg;
        weookqwiumeyqgqe:
        $this->miocmcoykayoyyau()->ssguskiqaagaauoy($wqsyimmcqogaosaq)->iagmuqogkyysiick($wqsyimmcqogaosaq)->oaoisgmqkamuoeam($wqsyimmcqogaosaq);
        goto eqeggksucqsyyqgy;
        eqeggksucqsyyqgy:
        ysceuaykccoiqqec:
        goto kiieeckyooaiakiy;
        kggqciusmciogeoc:
        weiqkaaeieoaycas:
        goto weookqwiumeyqgqe;
        ygyqyeocqgucysak:
        $wqsyimmcqogaosaq = ["\x6c\x6f\x63\141\x6c\x65" => $aamkqmkgsaqmcuao, "\141\152\x61\x78\165\162\x6c" => ManipulateAjax::oiucukewkckkwiqc(), "\154\x61\x6e\x67\x75\141\147\x65" => str_replace("\x5f", "\x2d", $aamkqmkgsaqmcuao), "\x6e\157\156\x63\145\137\151\x64" => self::AJAX_NONCE_ID];
        goto ceuqgimswukikqiq;
        swwsoucgukwwokou:
        eewmmuqwyuumymau:
        goto scgiymugkuqikuoo;
        sagguseommuioaag:
        if (ManipulateAjax::mcgoysmkqsqooceq()) {
            goto ysceuaykccoiqqec;
        }
        goto mkiiukgsugssgoea;
        ssiykmokuqwoukkq:
        goto weiqkaaeieoaycas;
        goto swwsoucgukwwokou;
        kiieeckyooaiakiy:
    }
    public function cyowaaeywssoooeo()
    {
        goto ekqawkaqkgwygyys;
        kuusqsqwcyeicqcu:
        mkwcgkgauikuqkgs:
        goto yoigaymqwkcqioac;
        acqcuwoawoiqqcgw:
        $cyaeoagyqcqyqgmk = ManipulateFile::koymmiyegyskqgck(self::PUBLIC_HTML__BUILD__PATH, $yaeakkosskocswae . "\57\142");
        goto qqooskcsgmwcqmyo;
        ekqawkaqkgwygyys:
        $wmwyaayqcewkyqsu = ManipulateFile::cmaecekuqkwmemms(self::ABSPATH);
        goto gaaikwwqsgaskqos;
        muyyguewmgkysmqi:
        ManipulateFile::wwckmeoskuagomki(self::PUBLIC_HTML__STATIC__URL, ManipulateServer::gmigwwwmwemyaayy("\57\x73"));
        goto acqcuwoawoiqqcgw;
        yoigaymqwkcqioac:
        iekoocwecouagekw:
        goto eusesuocygoggmyw;
        acymaqouwqmcmisy:
        ManipulateFile::wwckmeoskuagomki(self::PUBLIC_HTML__BUILD__URL, ManipulateServer::gmigwwwmwemyaayy("\57\163\57\x62"));
        goto kuusqsqwcyeicqcu;
        eeaicwceqqsiymuq:
        ManipulateFile::koymmiyegyskqgck(self::PR__LOG__PATH, "{$ecuwmcmeucuiaamu}\x2f\x6c\157\147");
        goto uiikmyqamcckswyq;
        eusesuocygoggmyw:
        $wyocmuqcwyskkcyo = realpath(untrailingslashit($wmwyaayqcewkyqsu) . "\57\56\56\57\x62\x61\163\145");
        goto oyuyqykycywqikma;
        eggksuwcamuciuyu:
        qeeakiaqiwkogiki:
        goto kmcoguowgwkcuaec;
        kggkkkouaeowcuea:
        cwqgyckguaiciiam:
        goto eggksuwcamuciuyu;
        oyuyqykycywqikma:
        ManipulateFile::wwckmeoskuagomki(self::BASE__ROOT__PATH, $wyocmuqcwyskkcyo);
        goto gescaykeyikwwqos;
        scwgaeqqquyqoeey:
        if (!$yaeakkosskocswae) {
            goto iekoocwecouagekw;
        }
        goto muyyguewmgkysmqi;
        uiikmyqamcckswyq:
        ManipulateFile::koymmiyegyskqgck(self::PR__CACHE__PATH, "{$ecuwmcmeucuiaamu}\x2f\143\x61\x63\150\x65");
        goto kggkkkouaeowcuea;
        gaaikwwqsgaskqos:
        if (!$wmwyaayqcewkyqsu) {
            goto qeeakiaqiwkogiki;
        }
        goto guyaeuucuqosewwe;
        qqooskcsgmwcqmyo:
        if (!$cyaeoagyqcqyqgmk) {
            goto mkwcgkgauikuqkgs;
        }
        goto acymaqouwqmcmisy;
        gescaykeyikwwqos:
        if (!($ecuwmcmeucuiaamu = ManipulateFile::koymmiyegyskqgck(self::PR__VAR__PATH, untrailingslashit($wyocmuqcwyskkcyo) . "\57\x76\141\x72"))) {
            goto cwqgyckguaiciiam;
        }
        goto eeaicwceqqsiymuq;
        guyaeuucuqosewwe:
        $yaeakkosskocswae = ManipulateFile::koymmiyegyskqgck(self::PUBLIC_HTML__STATIC__PATH, untrailingslashit($wmwyaayqcewkyqsu) . "\x2f\163");
        goto scwgaeqqquyqoeey;
        kmcoguowgwkcuaec:
    }
    public function iemaakgqgqosiecm()
    {
        goto ogeqwcqesgmkyqaw;
        euyueamqiaoyikie:
        Asset::symcgieuakksimmu();
        goto uaokswasiaegemqu;
        iquamkkkakqceico:
        API::symcgieuakksimmu();
        goto dakcgwwcguscwcgs;
        tiyaygouckaskgga:
        Detector::symcgieuakksimmu();
        goto syowoqgquwemkyuy;
        oeeayggmgimqigqm:
        FormMaker::symcgieuakksimmu();
        goto amciqasycmesgweq;
        soeqqoegkeocasic:
        Media::symcgieuakksimmu();
        goto euyueamqiaoyikie;
        yyciyacskyymkcks:
        Taxonomy::symcgieuakksimmu();
        goto tiyaygouckaskgga;
        dakcgwwcguscwcgs:
        Ajax::symcgieuakksimmu();
        goto muemymcgeomwgqka;
        ogeqwcqesgmkyqaw:
        ORM::symcgieuakksimmu();
        goto iquamkkkakqceico;
        syowoqgquwemkyuy:
        Template::symcgieuakksimmu();
        goto yaysquwmiyumwecu;
        yaysquwmiyumwecu:
        WPSetting::symcgieuakksimmu();
        goto oeeayggmgimqigqm;
        uaokswasiaegemqu:
        Logger::symcgieuakksimmu();
        goto yyciyacskyymkcks;
        muemymcgeomwgqka:
        APIs::symcgieuakksimmu();
        goto soeqqoegkeocasic;
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
        kymoeekcwkmosuqm:
        qucimmcmsoikwmau:
        goto oakqasoccyooqcqk;
        mqkaiyymkmeyewiw:
        Woocommerce::symcgieuakksimmu();
        goto kymoeekcwkmosuqm;
        oakqasoccyooqcqk:
    }
    public function uwikisyueuksqema()
    {
        goto isiseiywogusquiy;
        ykyuusouwcesskqe:
        eussomccqmmumkoc:
        goto aiwaekeqciwyimwi;
        isiseiywogusquiy:
        $msyoeiaqaaseqiaw = (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw(''), []);
        goto uquciwyocygmwaeq;
        uquciwyocygmwaeq:
        if (!$msyoeiaqaaseqiaw) {
            goto eussomccqmmumkoc;
        }
        goto ukuqoksosmkiycci;
        ukuqoksosmkiycci:
        foreach ($msyoeiaqaaseqiaw as $smaiamkswqkisawm) {
            goto hwcueuuaimkiawcg;
            yyiuaymyqkoooyse:
            $this->kcciqwskewsuaemk()->mkdir($smaiamkswqkisawm);
            goto iacsmyoeqsisuoqq;
            iacsmyoeqsisuoqq:
            swuiymekcguiocgu:
            goto wieuocqaikcuwsmg;
            wieuocqaikcuwsmg:
            iyyskykwysmaiosq:
            goto ywqaqwigqqqcsyos;
            hwcueuuaimkiawcg:
            if (!is_string($smaiamkswqkisawm)) {
                goto swuiymekcguiocgu;
            }
            goto yyiuaymyqkoooyse;
            ywqaqwigqqqcsyos:
        }
        goto ycoiwiguwggowsug;
        ycoiwiguwggowsug:
        eawommuykgayesso:
        goto ykyuusouwcesskqe;
        aiwaekeqciwyimwi:
    }
}
