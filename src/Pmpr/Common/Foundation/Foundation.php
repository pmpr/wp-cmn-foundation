<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b3993be3fb             |
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
        skqaokokoiksumqq:
        parent::__construct();
        goto uyaugcksmygwamwo;
        uyaugcksmygwamwo:
        $this->cyowaaeywssoooeo();
        goto qkmciokkseyqoiye;
        oyuowamwkcqmgawq:
        $this->gkieogwukagigisy(__DIR__);
        goto skqaokokoiksumqq;
        qkmciokkseyqoiye:
        $this->iemaakgqgqosiecm();
        goto ieescsoooicgswmc;
        ieescsoooicgswmc:
    }
    public function wigskegsqequoeks()
    {
        $this->qcsmikeggeemccuu("\167\x70\x5f\154\x6f\x61\144\145\x64", [$this, "\x65\156\161\165\145\x75\x65"])->qcsmikeggeemccuu("\151\156\151\164", [$this, "\165\167\151\153\x69\x73\x79\165\x65\165\153\163\161\x65\155\141"])->qcsmikeggeemccuu("\x70\154\x75\147\x69\x6e\163\137\154\x6f\141\x64\145\x64", [$this, "\165\x6f\x73\x71\x61\x65\165\145\x77\x69\x71\x6d\x65\x73\x61\141"]);
        parent::wigskegsqequoeks();
    }
    public function enqueue()
    {
        goto sagguseommuioaag;
        swwsoucgukwwokou:
        eewmmuqwyuumymau:
        goto scgiymugkuqikuoo;
        mkiiukgsugssgoea:
        $aamkqmkgsaqmcuao = DecoratorI18N::iyouigcsiacgwksc();
        goto ygyqyeocqgucysak;
        sagguseommuioaag:
        if (ManipulateAjax::mcgoysmkqsqooceq()) {
            goto ysceuaykccoiqqec;
        }
        goto mkiiukgsugssgoea;
        kggqciusmciogeoc:
        weiqkaaeieoaycas:
        goto weookqwiumeyqgqe;
        ygyqyeocqgucysak:
        $wqsyimmcqogaosaq = ["\154\157\x63\x61\x6c\x65" => $aamkqmkgsaqmcuao, "\141\x6a\x61\x78\165\162\x6c" => ManipulateAjax::oiucukewkckkwiqc(), "\154\x61\156\x67\x75\141\x67\x65" => str_replace("\x5f", "\x2d", $aamkqmkgsaqmcuao), "\156\157\x6e\143\x65\137\151\144" => self::AJAX_NONCE_ID];
        goto ceuqgimswukikqiq;
        kqwioeqkgsgmmymg:
        $wqsyimmcqogaosaq = array_merge($wqsyimmcqogaosaq, ["\x63\157\157\153\x69\x65\x5f\x67\165\x65\163\164\x5f\x69\144" => self::GUEST_ID_COOKIE]);
        goto ssiykmokuqwoukkq;
        ssiykmokuqwoukkq:
        goto weiqkaaeieoaycas;
        goto swwsoucgukwwokou;
        weookqwiumeyqgqe:
        $this->miocmcoykayoyyau()->ssguskiqaagaauoy($wqsyimmcqogaosaq)->iagmuqogkyysiick($wqsyimmcqogaosaq)->oaoisgmqkamuoeam($wqsyimmcqogaosaq);
        goto eqeggksucqsyyqgy;
        scgiymugkuqikuoo:
        $wqsyimmcqogaosaq = array_merge($wqsyimmcqogaosaq, ["\144\145\x62\x75\x67" => ManipulateSetting::esoowymaimwcuecq(), "\155\157\x64\x61\154" => ManipulateHTML::icqkogwskuwscskk(), "\x73\x70\x69\156\x6e\145\x72" => ManipulateHTML::kqmkicmuscsgqeoi()]);
        goto kggqciusmciogeoc;
        eqeggksucqsyyqgy:
        ysceuaykccoiqqec:
        goto kiieeckyooaiakiy;
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
        acqcuwoawoiqqcgw:
        $cyaeoagyqcqyqgmk = ManipulateFile::koymmiyegyskqgck(self::PUBLIC_HTML__BUILD__PATH, $yaeakkosskocswae . "\57\142");
        goto qqooskcsgmwcqmyo;
        eggksuwcamuciuyu:
        qeeakiaqiwkogiki:
        goto kmcoguowgwkcuaec;
        uiikmyqamcckswyq:
        ManipulateFile::koymmiyegyskqgck(self::PR__CACHE__PATH, "{$ecuwmcmeucuiaamu}\57\143\141\143\150\145");
        goto kggkkkouaeowcuea;
        eusesuocygoggmyw:
        $wyocmuqcwyskkcyo = realpath(untrailingslashit($wmwyaayqcewkyqsu) . "\x2f\56\x2e\x2f\142\x61\163\145");
        goto oyuyqykycywqikma;
        ekqawkaqkgwygyys:
        $wmwyaayqcewkyqsu = ManipulateFile::cmaecekuqkwmemms(self::ABSPATH);
        goto gaaikwwqsgaskqos;
        gescaykeyikwwqos:
        if (!($ecuwmcmeucuiaamu = ManipulateFile::koymmiyegyskqgck(self::PR__VAR__PATH, untrailingslashit($wyocmuqcwyskkcyo) . "\57\166\x61\x72"))) {
            goto cwqgyckguaiciiam;
        }
        goto eeaicwceqqsiymuq;
        qqooskcsgmwcqmyo:
        if (!$cyaeoagyqcqyqgmk) {
            goto mkwcgkgauikuqkgs;
        }
        goto acymaqouwqmcmisy;
        yoigaymqwkcqioac:
        iekoocwecouagekw:
        goto eusesuocygoggmyw;
        scwgaeqqquyqoeey:
        if (!$yaeakkosskocswae) {
            goto iekoocwecouagekw;
        }
        goto muyyguewmgkysmqi;
        kuusqsqwcyeicqcu:
        mkwcgkgauikuqkgs:
        goto yoigaymqwkcqioac;
        acymaqouwqmcmisy:
        ManipulateFile::wwckmeoskuagomki(self::PUBLIC_HTML__BUILD__URL, ManipulateServer::gmigwwwmwemyaayy("\57\x73\57\142"));
        goto kuusqsqwcyeicqcu;
        kggkkkouaeowcuea:
        cwqgyckguaiciiam:
        goto eggksuwcamuciuyu;
        oyuyqykycywqikma:
        ManipulateFile::wwckmeoskuagomki(self::BASE__ROOT__PATH, $wyocmuqcwyskkcyo);
        goto gescaykeyikwwqos;
        guyaeuucuqosewwe:
        $yaeakkosskocswae = ManipulateFile::koymmiyegyskqgck(self::PUBLIC_HTML__STATIC__PATH, untrailingslashit($wmwyaayqcewkyqsu) . "\x2f\163");
        goto scwgaeqqquyqoeey;
        muyyguewmgkysmqi:
        ManipulateFile::wwckmeoskuagomki(self::PUBLIC_HTML__STATIC__URL, ManipulateServer::gmigwwwmwemyaayy("\x2f\x73"));
        goto acqcuwoawoiqqcgw;
        gaaikwwqsgaskqos:
        if (!$wmwyaayqcewkyqsu) {
            goto qeeakiaqiwkogiki;
        }
        goto guyaeuucuqosewwe;
        eeaicwceqqsiymuq:
        ManipulateFile::koymmiyegyskqgck(self::PR__LOG__PATH, "{$ecuwmcmeucuiaamu}\57\x6c\157\147");
        goto uiikmyqamcckswyq;
        kmcoguowgwkcuaec:
    }
    public function iemaakgqgqosiecm()
    {
        goto ogeqwcqesgmkyqaw;
        oeeayggmgimqigqm:
        FormMaker::symcgieuakksimmu();
        goto amciqasycmesgweq;
        yaysquwmiyumwecu:
        WPSetting::symcgieuakksimmu();
        goto oeeayggmgimqigqm;
        uaokswasiaegemqu:
        Logger::symcgieuakksimmu();
        goto yyciyacskyymkcks;
        soeqqoegkeocasic:
        Media::symcgieuakksimmu();
        goto euyueamqiaoyikie;
        dakcgwwcguscwcgs:
        Ajax::symcgieuakksimmu();
        goto muemymcgeomwgqka;
        euyueamqiaoyikie:
        Asset::symcgieuakksimmu();
        goto uaokswasiaegemqu;
        iquamkkkakqceico:
        API::symcgieuakksimmu();
        goto dakcgwwcguscwcgs;
        ogeqwcqesgmkyqaw:
        ORM::symcgieuakksimmu();
        goto iquamkkkakqceico;
        yyciyacskyymkcks:
        Taxonomy::symcgieuakksimmu();
        goto tiyaygouckaskgga;
        syowoqgquwemkyuy:
        Template::symcgieuakksimmu();
        goto yaysquwmiyumwecu;
        muemymcgeomwgqka:
        APIs::symcgieuakksimmu();
        goto soeqqoegkeocasic;
        tiyaygouckaskgga:
        Detector::symcgieuakksimmu();
        goto syowoqgquwemkyuy;
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
            wieuocqaikcuwsmg:
            iyyskykwysmaiosq:
            goto ywqaqwigqqqcsyos;
            iacsmyoeqsisuoqq:
            swuiymekcguiocgu:
            goto wieuocqaikcuwsmg;
            hwcueuuaimkiawcg:
            if (!is_string($smaiamkswqkisawm)) {
                goto swuiymekcguiocgu;
            }
            goto yyiuaymyqkoooyse;
            yyiuaymyqkoooyse:
            $this->kcciqwskewsuaemk()->mkdir($smaiamkswqkisawm);
            goto iacsmyoeqsisuoqq;
            ywqaqwigqqqcsyos:
        }
        goto ycoiwiguwggowsug;
        isiseiywogusquiy:
        $msyoeiaqaaseqiaw = (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw(''), []);
        goto uquciwyocygmwaeq;
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
        aiwaekeqciwyimwi:
    }
}
