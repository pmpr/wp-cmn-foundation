<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b499786a1b             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Woocommerce\Attribute;

use Pmpr\Common\Foundation\FormMaker\Admin\Element\MetaBox;
use Pmpr\Common\Foundation\FormMaker\Admin\Field\Field;
use Pmpr\Common\Foundation\Manipulate\ManipulateServer;
use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTerm;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;

class GlobalAttribute extends BaseAttribute
{
    const VALUE_TYPE = self::VALUE . "\137\164\x79\160\x65";
    
    protected ?Model $model = null;
    
    public function __construct()
    {
        goto gsiaweqgymagyokg;
        ismswigsaeymicgu:
        parent::__construct();
        goto syuuameqwoymyswo;
        gaqiaugiyyuoaywe:
        $this->model = Model::symcgieuakksimmu();
        goto ismswigsaeymicgu;
        gsiaweqgymagyokg:
        $this->name = "\x67\154\157\x62\141\x6c";
        goto gaqiaugiyyuoaywe;
        syuuameqwoymyswo:
    }
    public function wigskegsqequoeks()
    {
        $this->qcsmikeggeemccuu("\160\x6c\165\x67\x69\x6e\163\x5f\154\x6f\141\144\x65\x64", [$this, "\151\x63\x77\143\147\x6d\143\x6f\x69\x6d\161\145\x69\147\x79\x65"])->qcsmikeggeemccuu("\167\x6f\x6f\143\157\155\155\145\x72\x63\x65\137\x61\x74\x74\x72\x69\142\165\x74\x65\x5f\x75\160\x64\x61\x74\x65\144", [$this, "\x73\x61\166\145"])->qcsmikeggeemccuu("\x77\x6f\x6f\143\x6f\x6d\x6d\145\x72\143\145\x5f\x61\x66\164\145\162\x5f\141\144\144\x5f\141\x74\164\162\x69\x62\x75\164\145\x5f\x66\151\145\154\144\163", [$this, "\x69\151\x73\143\x71\143\167\x61\x69\x63\x65\157\153\x6f\x79\x75"])->qcsmikeggeemccuu("\167\157\x6f\143\x6f\155\x6d\145\162\143\x65\x5f\x61\x66\x74\x65\162\137\145\x64\151\x74\x5f\x61\164\x74\162\151\x62\165\164\x65\137\146\151\x65\x6c\x64\x73", [$this, "\147\x67\x63\x79\x67\x61\x79\x63\155\143\x63\143\145\163\167\x6f"]);
        parent::wigskegsqequoeks();
    }
    public function kgquecmsgcouyaya()
    {
        $this->cecaguuoecmccuse("\x77\x6f\x6f\x63\157\155\x6d\145\162\143\145\x5f\x61\x74\x74\162\151\x62\x75\164\x65\x5f\x74\141\170\157\x6e\157\x6d\151\x65\x73", [$this, "\x67\x73\143\153\161\x79\x73\x6f\x6b\165\x6d\x6b\x77\x71\163\x71"]);
        parent::kgquecmsgcouyaya();
    }
    public function icwcgmcoimqeigye()
    {
        $iggakkcyoeakgcmq = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x77\x6f\x6f\x63\157\155\x6d\x65\162\x63\x65\x5f\141\x74\164\162\151\142\x75\x74\x65\137\x74\141\170\x6f\156\x6f\x6d\x69\145\x73\137\166\x61\x6c\165\x65\137\x74\171\x70\x65\163"), [self::DATE => __("\x44\x61\x74\145", PR__CMN__FOUNDATION), self::NUMBER => __("\x4e\x75\155\142\x65\162", PR__CMN__FOUNDATION)]);
        $this->mkksewyosgeumwsa(MetaBox::ckuwucygcwsiawms(self::VALUE_TYPE, __("\126\141\154\x75\145\x20\x74\x79\x70\x65", PR__CMN__FOUNDATION), $iggakkcyoeakgcmq)->ccmwycqioaicegoc(__("\x54\171\160\145\40\x6f\146\x20\x76\x61\154\165\145\163", PR__CMN__FOUNDATION)));
    }
    
    public function gsckqysokumkwqsq($oammesyieqmwuwyi)
    {
        goto cmaemkmgukqugeow;
        euekwowaokcqsgsw:
        kykgeuicqicmuucg:
        goto gammgmwagsemkuua;
        euuqcskgauwamyuw:
        return $oammesyieqmwuwyi;
        goto qkqkgaaomgkyowwy;
        kgyqmwecomucoumg:
        foreach ($oammesyieqmwuwyi as $momcykaoccoymeig => $igqsaukqcqscimok) {
            goto usukaqsqeowqkwwu;
            wwgssoakwoscwoss:
            $oammesyieqmwuwyi[$momcykaoccoymeig] = $igqsaukqcqscimok;
            goto komaikgkmaeoescu;
            ukaumyigguemyqmg:
            if (!$mqeiemgcoiugcyuc) {
                goto weciiuggqamwweai;
            }
            goto mekmkiaykamiugmo;
            mekmkiaykamiugmo:
            foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) {
                goto sqummycmewomisus;
                uaeqweeeyaoceeae:
                $igqsaukqcqscimok = ManipulateArray::set($igqsaukqcqscimok, [$qiuwqmysqigceouo => $this->qooeaookuemoqecm($qiuwqmysqigceouo, $mqeiemgcoiugcyuc)]);
                goto ismmoaqwqiyscccu;
                sqummycmewomisus:
                $qiuwqmysqigceouo = $aiowsaccomcoikus->mwikyscisascoeea();
                goto uaeqweeeyaoceeae;
                ismmoaqwqiyscccu:
                oqmwiucmyoiwciws:
                goto seymakqosammeimy;
                seymakqosammeimy:
            }
            goto okieooymmiqqwsui;
            okieooymmiqqwsui:
            eeyukwscccmigmuq:
            goto wukeekgkakowukck;
            komaikgkmaeoescu:
            gqaiosgasmiekmma:
            goto syeosgmcsoykgmoi;
            usukaqsqeowqkwwu:
            $mqeiemgcoiugcyuc = ManipulateArray::get($igqsaukqcqscimok, "\x61\x74\164\x72\x69\x62\165\164\145\137\151\144");
            goto ukaumyigguemyqmg;
            wukeekgkakowukck:
            weciiuggqamwweai:
            goto wwgssoakwoscwoss;
            syeosgmcsoykgmoi:
        }
        goto euekwowaokcqsgsw;
        qmukimkmkeagqocg:
        if (!is_array($oammesyieqmwuwyi)) {
            goto oyauiswikoukcyqy;
        }
        goto kgyqmwecomucoumg;
        gammgmwagsemkuua:
        oyauiswikoukcyqy:
        goto euuqcskgauwamyuw;
        cmaemkmgukqugeow:
        $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy();
        goto qmukimkmkeagqocg;
        qkqkgaaomgkyowwy:
    }
    
    public function mgogaykgkoogasim() : ?Model
    {
        return $this->model;
    }
    
    public function uqsmmauywmsuqais($ymkomoccmymcoiea) : ?string
    {
        return $ymkomoccmymcoiea->get_id();
    }
    
    public function save($aokagokqyuysuksm)
    {
        foreach ($this->ugmceccgwaaaigiy() as $aiowsaccomcoikus) {
            goto kyayieiyyyqgkcyc;
            uwaoaysiccasmygw:
            $ymqmyyeuycgmigyo = $aiowsaccomcoikus->mwikyscisascoeea();
            goto okccyiwkococowmi;
            kyayieiyyyqgkcyc:
            if (!($aiowsaccomcoikus instanceof Field && $aiowsaccomcoikus->mwikyscisascoeea())) {
                goto wmgigiqsosicakwu;
            }
            goto uwaoaysiccasmygw;
            okccyiwkococowmi:
            $eqgoocgaqwqcimie = ManipulateServer::ayueggmoqeeukqmq($ymqmyyeuycgmigyo, '');
            goto iquwggoqmwgkouio;
            moaqsaoasisemagk:
            aiaagscmgeyuqaky:
            goto fauegywkmasowmki;
            aumkeyeqwqukcyqm:
            wmgigiqsosicakwu:
            goto moaqsaoasisemagk;
            iquwggoqmwgkouio:
            $this->mgogaykgkoogasim()->aawsuyueaaimeqsm($aokagokqyuysuksm, $ymqmyyeuycgmigyo, $eqgoocgaqwqcimie);
            goto aumkeyeqwqukcyqm;
            fauegywkmasowmki:
        }
        wioguogamqaikqqy:
    }
    
    public function qooeaookuemoqecm($qqgocisyeuuqmcwc, $ymkomoccmymcoiea)
    {
        return $this->mgogaykgkoogasim()->eukesgmuogimqwaa($ymkomoccmymcoiea, $qqgocisyeuuqmcwc);
    }
    public function iiscqcwaiceokoyu()
    {
        goto acwgyguyoswiiayo;
        acwgyguyoswiiayo:
        $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy();
        goto oqqsaycukyyqkwwa;
        oqqsaycukyyqkwwa:
        foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) {
            echo ManipulateTerm::qkauysqeioauswys($aiowsaccomcoikus);
            bkusemkaeowgcggg:
        }
        goto lsgwaumeuqgqgykm;
        lsgwaumeuqgqgykm:
        sgggogwmywukuwoq:
        goto aosqacyissiuywmy;
        aosqacyissiuywmy:
    }
    public function ggcygaycmccceswo()
    {
        goto siymqewiegkgsuai;
        wccugoogysmyisqe:
        foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) {
            goto eickccugyqkeaqqs;
            wecqaqqeqaiwuqmc:
            $aiowsaccomcoikus->iygyugseyaqwywyg($this->qooeaookuemoqecm($aiowsaccomcoikus->mwikyscisascoeea(), $wwgeaeqgacgwooqi));
            goto koayqokgokmcaeou;
            mkeikioeqcuumiga:
            iyiogqckuesmwgsi:
            goto gusqaksmckugmucc;
            koayqokgokmcaeou:
            echo ManipulateTerm::qkauysqeioauswys($aiowsaccomcoikus, true);
            goto owgquegaygweeuwq;
            eickccugyqkeaqqs:
            if (!$aiowsaccomcoikus instanceof Field) {
                goto akgikwguwgmkickm;
            }
            goto wecqaqqeqaiwuqmc;
            owgquegaygweeuwq:
            akgikwguwgmkickm:
            goto mkeikioeqcuumiga;
            gusqaksmckugmucc:
        }
        goto eaqqgoagskioaooo;
        useqkkasoyuoecio:
        if (!$wwgeaeqgacgwooqi) {
            goto uceqaououkceeiui;
        }
        goto kemqmaqgsgueoaye;
        eaqqgoagskioaooo:
        gkaauyqyceyeasym:
        goto smwyssciamywmcwc;
        smwyssciamywmcwc:
        uceqaououkceeiui:
        goto ukyauawycqguowmk;
        siymqewiegkgsuai:
        $wwgeaeqgacgwooqi = ManipulateServer::get("\x65\144\151\164");
        goto useqkkasoyuoecio;
        kemqmaqgsgueoaye:
        $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy();
        goto wccugoogysmyisqe;
        ukyauawycqguowmk:
    }
}
