<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613a1be32d755             |
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
        goto uoiskyawciaycskg;
        uoiskyawciaycskg:
        $this->gkieogwukagigisy(__DIR__);
        goto oyeciwugsaoigkok;
        oyeciwugsaoigkok:
        parent::__construct();
        goto caomsqikuqygukiu;
        ukosesgoyouygask:
        $this->iemaakgqgqosiecm();
        goto equyaeikyukugagk;
        caomsqikuqygukiu:
        $this->cyowaaeywssoooeo();
        goto ukosesgoyouygask;
        equyaeikyukugagk:
    }
    public function wigskegsqequoeks()
    {
        $this->qcsmikeggeemccuu("\x77\x70\x5f\154\157\x61\x64\x65\x64", [$this, "\x65\x6e\161\x75\x65\x75\x65"])->qcsmikeggeemccuu("\x69\156\x69\164", [$this, "\165\167\151\153\x69\163\x79\x75\x65\165\153\163\161\145\155\141"])->qcsmikeggeemccuu("\160\x6c\x75\147\151\156\163\x5f\154\x6f\141\144\x65\x64", [$this, "\165\157\x73\161\141\x65\165\145\x77\x69\161\155\x65\x73\141\x61"]);
        parent::wigskegsqequoeks();
    }
    public function enqueue()
    {
        goto mmqoeacwauwumuwy;
        igyksykyeyaswmus:
        amgsgosgeuwgssgq:
        goto ucicksisoccgqais;
        aesamimsyomsigoi:
        sueqwiqgouagewes:
        goto sceggueuwywymmak;
        qkukewwwakmkikwo:
        gawkyeoimacqsamu:
        goto cooogaqeyuuakoky;
        mmqoeacwauwumuwy:
        if (ManipulateAjax::mcgoysmkqsqooceq()) {
            goto gawkyeoimacqsamu;
        }
        goto mmkokimcmkwyukcs;
        sceggueuwywymmak:
        $wqsyimmcqogaosaq = array_merge($wqsyimmcqogaosaq, ["\144\145\142\165\147" => ManipulateSetting::esoowymaimwcuecq(), "\x6d\x6f\144\x61\x6c" => ManipulateHTML::icqkogwskuwscskk(), "\x73\160\151\156\156\145\x72" => ManipulateHTML::kqmkicmuscsgqeoi()]);
        goto igyksykyeyaswmus;
        ugwaocykeyqccama:
        $wqsyimmcqogaosaq = array_merge($wqsyimmcqogaosaq, ["\x63\157\157\153\151\x65\137\x67\165\x65\163\164\x5f\x69\144" => self::GUEST_ID_COOKIE]);
        goto ykykoyeewsakokcy;
        ykykoyeewsakokcy:
        goto amgsgosgeuwgssgq;
        goto aesamimsyomsigoi;
        ucicksisoccgqais:
        $this->miocmcoykayoyyau()->ssguskiqaagaauoy($wqsyimmcqogaosaq)->iagmuqogkyysiick($wqsyimmcqogaosaq)->oaoisgmqkamuoeam($wqsyimmcqogaosaq);
        goto qkukewwwakmkikwo;
        mmkokimcmkwyukcs:
        $aamkqmkgsaqmcuao = DecoratorI18N::iyouigcsiacgwksc();
        goto aqmqocckmcayaiqy;
        aqmqocckmcayaiqy:
        $wqsyimmcqogaosaq = ["\154\x6f\143\x61\154\145" => $aamkqmkgsaqmcuao, "\x61\x6a\x61\170\x75\162\154" => ManipulateAjax::oiucukewkckkwiqc(), "\154\x61\156\x67\x75\x61\x67\145" => str_replace("\x5f", "\x2d", $aamkqmkgsaqmcuao), "\156\x6f\156\143\145\137\151\x64" => self::AJAX_NONCE_ID];
        goto ooqiqegoqeoemwes;
        ooqiqegoqeoemwes:
        if (is_admin()) {
            goto sueqwiqgouagewes;
        }
        goto ugwaocykeyqccama;
        cooogaqeyuuakoky:
    }
    public function cyowaaeywssoooeo()
    {
        goto sckoaamegweguoge;
        aqywsykoaksagmii:
        smacakeueqkaoquw:
        goto kcagioquuqegqcyg;
        usayqekieaeawmmo:
        $yaeakkosskocswae = ManipulateFile::koymmiyegyskqgck(self::PUBLIC_HTML__STATIC__PATH, untrailingslashit($wmwyaayqcewkyqsu) . "\x2f\163");
        goto qcoyscmyegawqkcm;
        ioycgwoyokiuwogg:
        if (!$wmwyaayqcewkyqsu) {
            goto sskumuuougwwogwy;
        }
        goto usayqekieaeawmmo;
        kogwcmswguiqkimc:
        ouoqqaoqeuqomiik:
        goto cymuckioogeayeoo;
        emweskkoeaamissy:
        ManipulateFile::koymmiyegyskqgck(self::PR__LOG__PATH, "{$ecuwmcmeucuiaamu}\x2f\154\x6f\x67");
        goto woaucuqwwygyseoy;
        icssiymmywikcyuq:
        $cyaeoagyqcqyqgmk = ManipulateFile::koymmiyegyskqgck(self::PUBLIC_HTML__BUILD__PATH, $yaeakkosskocswae . "\57\x62");
        goto siaqqcmuquqwqusg;
        msggsiiqkwyywaay:
        ManipulateFile::wwckmeoskuagomki(self::BASE__ROOT__PATH, $wyocmuqcwyskkcyo);
        goto qiogcgemwoskeguy;
        mykqosugciymouyy:
        ManipulateFile::wwckmeoskuagomki(self::PUBLIC_HTML__STATIC__URL, ManipulateServer::gmigwwwmwemyaayy("\57\x73"));
        goto icssiymmywikcyuq;
        cyamiiweeqsksayq:
        ManipulateFile::wwckmeoskuagomki(self::PUBLIC_HTML__BUILD__URL, ManipulateServer::gmigwwwmwemyaayy("\57\163\x2f\x62"));
        goto uwissmmyqiiqueaw;
        qiogcgemwoskeguy:
        if (!($ecuwmcmeucuiaamu = ManipulateFile::koymmiyegyskqgck(self::PR__VAR__PATH, untrailingslashit($wyocmuqcwyskkcyo) . "\x2f\x76\x61\162"))) {
            goto smacakeueqkaoquw;
        }
        goto emweskkoeaamissy;
        qcoyscmyegawqkcm:
        if (!$yaeakkosskocswae) {
            goto ouoqqaoqeuqomiik;
        }
        goto mykqosugciymouyy;
        uwissmmyqiiqueaw:
        smsgswikiiieskgy:
        goto kogwcmswguiqkimc;
        siaqqcmuquqwqusg:
        if (!$cyaeoagyqcqyqgmk) {
            goto smsgswikiiieskgy;
        }
        goto cyamiiweeqsksayq;
        woaucuqwwygyseoy:
        ManipulateFile::koymmiyegyskqgck(self::PR__CACHE__PATH, "{$ecuwmcmeucuiaamu}\57\x63\141\143\x68\x65");
        goto aqywsykoaksagmii;
        cymuckioogeayeoo:
        $wyocmuqcwyskkcyo = realpath(untrailingslashit($wmwyaayqcewkyqsu) . "\57\x2e\56\x2f\x62\141\163\145");
        goto msggsiiqkwyywaay;
        sckoaamegweguoge:
        $wmwyaayqcewkyqsu = ManipulateFile::cmaecekuqkwmemms(self::ABSPATH);
        goto ioycgwoyokiuwogg;
        kcagioquuqegqcyg:
        sskumuuougwwogwy:
        goto wwsomoigcwkwsguy;
        wwsomoigcwkwsguy:
    }
    public function iemaakgqgqosiecm()
    {
        goto iwocsmoqemqaiwuo;
        kayqeeaqmuuqkuou:
        Media::symcgieuakksimmu();
        goto icsikkwucecsisuk;
        mmgicwwygeekgamc:
        FormMaker::symcgieuakksimmu();
        goto kcwkigqegoyyasgo;
        cakioquwkusgwwkw:
        Detector::symcgieuakksimmu();
        goto uwoogcquscauiwkg;
        uwoogcquscauiwkg:
        Template::symcgieuakksimmu();
        goto lnoeyaecmcmsigqy;
        yqaeaawsoygkiuqq:
        APIs::symcgieuakksimmu();
        goto kayqeeaqmuuqkuou;
        yewaicmwsoqyceeg:
        Ajax::symcgieuakksimmu();
        goto yqaeaawsoygkiuqq;
        icsikkwucecsisuk:
        Asset::symcgieuakksimmu();
        goto gcmikiuqumkkacyo;
        gcmikiuqumkkacyo:
        Logger::symcgieuakksimmu();
        goto ccuegmwmimgiocso;
        ggkqwysmuwoiueyg:
        API::symcgieuakksimmu();
        goto yewaicmwsoqyceeg;
        lnoeyaecmcmsigqy:
        WPSetting::symcgieuakksimmu();
        goto mmgicwwygeekgamc;
        iwocsmoqemqaiwuo:
        ORM::symcgieuakksimmu();
        goto ggkqwysmuwoiueyg;
        ccuegmwmimgiocso:
        Taxonomy::symcgieuakksimmu();
        goto cakioquwkusgwwkw;
        kcwkigqegoyyasgo:
    }
    public function uosqaeuewiqmesaa()
    {
        goto uaqggqikeeeoemee;
        uaqggqikeeeoemee:
        if (!ManipulateWoocommerce::ayseokmqycoqaigc()) {
            goto aeyqisueowykqqem;
        }
        goto oyyuwwmewyyewikc;
        oyyuwwmewyyewikc:
        Woocommerce::symcgieuakksimmu();
        goto wayiayqaaoyykyaa;
        wayiayqaaoyykyaa:
        aeyqisueowykqqem:
        goto kcyymkyskosacoym;
        kcyymkyskosacoym:
    }
    public function uwikisyueuksqema()
    {
        goto ggqciukoakmkiauk;
        ggqciukoakmkiauk:
        $msyoeiaqaaseqiaw = (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw(''), []);
        goto aekiswqkimmgcmac;
        sgwwumsasamqmqky:
        gwkmcaioucoamkao:
        goto kgsqmocueuiwmmcs;
        kgsqmocueuiwmmcs:
        ymkwowqeeacsguym:
        goto qcaiegucqcakoguk;
        csaweyksigegicem:
        foreach ($msyoeiaqaaseqiaw as $smaiamkswqkisawm) {
            goto oiciueyaoucowgmw;
            cwekckceoqoymiwm:
            aaccqgcuggcugeqw:
            goto awuwaqciyuukqeag;
            qokewqqmgqgmqaqy:
            $this->kcciqwskewsuaemk()->mkdir($smaiamkswqkisawm);
            goto sueyccoqkgccsoyw;
            oiciueyaoucowgmw:
            if (!is_string($smaiamkswqkisawm)) {
                goto yyyamkcqacumuegm;
            }
            goto qokewqqmgqgmqaqy;
            sueyccoqkgccsoyw:
            yyyamkcqacumuegm:
            goto cwekckceoqoymiwm;
            awuwaqciyuukqeag:
        }
        goto sgwwumsasamqmqky;
        aekiswqkimmgcmac:
        if (!$msyoeiaqaaseqiaw) {
            goto ymkwowqeeacsguym;
        }
        goto csaweyksigegicem;
        qcaiegucqcakoguk:
    }
}
