<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b5973b89a9             |
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
        oyuowamwkcqmgawq:
        $this->gkieogwukagigisy(__DIR__);
        goto skqaokokoiksumqq;
        skqaokokoiksumqq:
        parent::__construct();
        goto uyaugcksmygwamwo;
        uyaugcksmygwamwo:
        $this->cyowaaeywssoooeo();
        goto qkmciokkseyqoiye;
        qkmciokkseyqoiye:
        $this->iemaakgqgqosiecm();
        goto ieescsoooicgswmc;
        ieescsoooicgswmc:
    }
    public function wigskegsqequoeks()
    {
        $this->qcsmikeggeemccuu("\167\x70\x5f\154\x6f\x61\x64\145\x64", [$this, "\145\x6e\161\165\x65\x75\145"])->qcsmikeggeemccuu("\x69\156\151\x74", [$this, "\x75\167\151\153\151\x73\171\x75\x65\x75\x6b\163\161\145\x6d\141"])->qcsmikeggeemccuu("\160\154\165\147\x69\156\163\x5f\x6c\x6f\141\144\145\144", [$this, "\165\157\163\x71\x61\x65\165\145\x77\151\x71\x6d\145\163\141\141"]);
        parent::wigskegsqequoeks();
    }
    public function enqueue()
    {
        goto sagguseommuioaag;
        weookqwiumeyqgqe:
        $this->miocmcoykayoyyau()->ssguskiqaagaauoy($wqsyimmcqogaosaq)->iagmuqogkyysiick($wqsyimmcqogaosaq)->oaoisgmqkamuoeam($wqsyimmcqogaosaq);
        goto eqeggksucqsyyqgy;
        mkiiukgsugssgoea:
        $aamkqmkgsaqmcuao = DecoratorI18N::iyouigcsiacgwksc();
        goto ygyqyeocqgucysak;
        kqwioeqkgsgmmymg:
        $wqsyimmcqogaosaq = array_merge($wqsyimmcqogaosaq, ["\x63\157\157\153\x69\x65\137\147\x75\x65\163\x74\137\151\144" => self::GUEST_ID_COOKIE]);
        goto ssiykmokuqwoukkq;
        eqeggksucqsyyqgy:
        ysceuaykccoiqqec:
        goto kiieeckyooaiakiy;
        scgiymugkuqikuoo:
        $wqsyimmcqogaosaq = array_merge($wqsyimmcqogaosaq, ["\x64\145\142\x75\147" => ManipulateSetting::esoowymaimwcuecq(), "\x6d\157\x64\x61\x6c" => ManipulateHTML::icqkogwskuwscskk(), "\163\x70\151\x6e\156\x65\x72" => ManipulateHTML::kqmkicmuscsgqeoi()]);
        goto kggqciusmciogeoc;
        kggqciusmciogeoc:
        weiqkaaeieoaycas:
        goto weookqwiumeyqgqe;
        ssiykmokuqwoukkq:
        goto weiqkaaeieoaycas;
        goto swwsoucgukwwokou;
        swwsoucgukwwokou:
        eewmmuqwyuumymau:
        goto scgiymugkuqikuoo;
        sagguseommuioaag:
        if (ManipulateAjax::mcgoysmkqsqooceq()) {
            goto ysceuaykccoiqqec;
        }
        goto mkiiukgsugssgoea;
        ygyqyeocqgucysak:
        $wqsyimmcqogaosaq = ["\x6c\x6f\x63\x61\x6c\x65" => $aamkqmkgsaqmcuao, "\141\152\x61\170\x75\x72\x6c" => ManipulateAjax::oiucukewkckkwiqc(), "\154\x61\156\147\x75\x61\x67\145" => str_replace("\x5f", "\55", $aamkqmkgsaqmcuao), "\156\157\x6e\x63\x65\137\x69\144" => self::AJAX_NONCE_ID];
        goto ceuqgimswukikqiq;
        ceuqgimswukikqiq:
        if (is_admin()) {
            goto eewmmuqwyuumymau;
        }
        goto kqwioeqkgsgmmymg;
        kiieeckyooaiakiy:
    }
    public function cyowaaeywssoooeo()
    {
        goto ekqawkaqkgwygyys;
        ekqawkaqkgwygyys:
        $wmwyaayqcewkyqsu = ManipulateFile::cmaecekuqkwmemms(self::ABSPATH);
        goto gaaikwwqsgaskqos;
        scwgaeqqquyqoeey:
        if (!$yaeakkosskocswae) {
            goto iekoocwecouagekw;
        }
        goto muyyguewmgkysmqi;
        muyyguewmgkysmqi:
        ManipulateFile::wwckmeoskuagomki(self::PUBLIC_HTML__STATIC__URL, ManipulateServer::gmigwwwmwemyaayy("\57\163"));
        goto acqcuwoawoiqqcgw;
        gescaykeyikwwqos:
        if (!($ecuwmcmeucuiaamu = ManipulateFile::koymmiyegyskqgck(self::PR__VAR__PATH, untrailingslashit($wyocmuqcwyskkcyo) . "\57\x76\141\162"))) {
            goto cwqgyckguaiciiam;
        }
        goto eeaicwceqqsiymuq;
        acqcuwoawoiqqcgw:
        $cyaeoagyqcqyqgmk = ManipulateFile::koymmiyegyskqgck(self::PUBLIC_HTML__BUILD__PATH, $yaeakkosskocswae . "\57\142");
        goto qqooskcsgmwcqmyo;
        acymaqouwqmcmisy:
        ManipulateFile::wwckmeoskuagomki(self::PUBLIC_HTML__BUILD__URL, ManipulateServer::gmigwwwmwemyaayy("\57\163\x2f\x62"));
        goto kuusqsqwcyeicqcu;
        uiikmyqamcckswyq:
        ManipulateFile::koymmiyegyskqgck(self::PR__CACHE__PATH, "{$ecuwmcmeucuiaamu}\57\x63\141\x63\x68\145");
        goto kggkkkouaeowcuea;
        eggksuwcamuciuyu:
        qeeakiaqiwkogiki:
        goto kmcoguowgwkcuaec;
        kuusqsqwcyeicqcu:
        mkwcgkgauikuqkgs:
        goto yoigaymqwkcqioac;
        qqooskcsgmwcqmyo:
        if (!$cyaeoagyqcqyqgmk) {
            goto mkwcgkgauikuqkgs;
        }
        goto acymaqouwqmcmisy;
        eeaicwceqqsiymuq:
        ManipulateFile::koymmiyegyskqgck(self::PR__LOG__PATH, "{$ecuwmcmeucuiaamu}\57\x6c\x6f\147");
        goto uiikmyqamcckswyq;
        guyaeuucuqosewwe:
        $yaeakkosskocswae = ManipulateFile::koymmiyegyskqgck(self::PUBLIC_HTML__STATIC__PATH, untrailingslashit($wmwyaayqcewkyqsu) . "\57\x73");
        goto scwgaeqqquyqoeey;
        oyuyqykycywqikma:
        ManipulateFile::wwckmeoskuagomki(self::BASE__ROOT__PATH, $wyocmuqcwyskkcyo);
        goto gescaykeyikwwqos;
        eusesuocygoggmyw:
        $wyocmuqcwyskkcyo = realpath(untrailingslashit($wmwyaayqcewkyqsu) . "\57\56\56\x2f\142\x61\163\145");
        goto oyuyqykycywqikma;
        kggkkkouaeowcuea:
        cwqgyckguaiciiam:
        goto eggksuwcamuciuyu;
        yoigaymqwkcqioac:
        iekoocwecouagekw:
        goto eusesuocygoggmyw;
        gaaikwwqsgaskqos:
        if (!$wmwyaayqcewkyqsu) {
            goto qeeakiaqiwkogiki;
        }
        goto guyaeuucuqosewwe;
        kmcoguowgwkcuaec:
    }
    public function iemaakgqgqosiecm()
    {
        goto ogeqwcqesgmkyqaw;
        yyciyacskyymkcks:
        Taxonomy::symcgieuakksimmu();
        goto tiyaygouckaskgga;
        syowoqgquwemkyuy:
        Template::symcgieuakksimmu();
        goto yaysquwmiyumwecu;
        muemymcgeomwgqka:
        APIs::symcgieuakksimmu();
        goto soeqqoegkeocasic;
        uaokswasiaegemqu:
        Logger::symcgieuakksimmu();
        goto yyciyacskyymkcks;
        soeqqoegkeocasic:
        Media::symcgieuakksimmu();
        goto euyueamqiaoyikie;
        tiyaygouckaskgga:
        Detector::symcgieuakksimmu();
        goto syowoqgquwemkyuy;
        euyueamqiaoyikie:
        Asset::symcgieuakksimmu();
        goto uaokswasiaegemqu;
        dakcgwwcguscwcgs:
        Ajax::symcgieuakksimmu();
        goto muemymcgeomwgqka;
        yaysquwmiyumwecu:
        WPSetting::symcgieuakksimmu();
        goto oeeayggmgimqigqm;
        iquamkkkakqceico:
        API::symcgieuakksimmu();
        goto dakcgwwcguscwcgs;
        ogeqwcqesgmkyqaw:
        ORM::symcgieuakksimmu();
        goto iquamkkkakqceico;
        oeeayggmgimqigqm:
        FormMaker::symcgieuakksimmu();
        goto amciqasycmesgweq;
        amciqasycmesgweq:
    }
    public function uosqaeuewiqmesaa()
    {
        goto csscwckocuaykoew;
        kymoeekcwkmosuqm:
        qucimmcmsoikwmau:
        goto oakqasoccyooqcqk;
        csscwckocuaykoew:
        if (!ManipulateWoocommerce::ayseokmqycoqaigc()) {
            goto qucimmcmsoikwmau;
        }
        goto mqkaiyymkmeyewiw;
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
        uquciwyocygmwaeq:
        if (!$msyoeiaqaaseqiaw) {
            goto eussomccqmmumkoc;
        }
        goto ukuqoksosmkiycci;
        ycoiwiguwggowsug:
        eawommuykgayesso:
        goto ykyuusouwcesskqe;
        isiseiywogusquiy:
        $msyoeiaqaaseqiaw = (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw(''), []);
        goto uquciwyocygmwaeq;
        ukuqoksosmkiycci:
        foreach ($msyoeiaqaaseqiaw as $smaiamkswqkisawm) {
            goto hwcueuuaimkiawcg;
            yyiuaymyqkoooyse:
            $this->kcciqwskewsuaemk()->mkdir($smaiamkswqkisawm);
            goto iacsmyoeqsisuoqq;
            iacsmyoeqsisuoqq:
            swuiymekcguiocgu:
            goto wieuocqaikcuwsmg;
            hwcueuuaimkiawcg:
            if (!is_string($smaiamkswqkisawm)) {
                goto swuiymekcguiocgu;
            }
            goto yyiuaymyqkoooyse;
            wieuocqaikcuwsmg:
            iyyskykwysmaiosq:
            goto ywqaqwigqqqcsyos;
            ywqaqwigqqqcsyos:
        }
        goto ycoiwiguwggowsug;
        aiwaekeqciwyimwi:
    }
}
