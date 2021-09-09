<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613a1be32d755             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Woocommerce\Attribute;

use Pmpr\Common\Foundation\Decorator\Plugin\DecoratorWoocommerce;
use Pmpr\Common\Foundation\FormMaker\Admin\Element\MetaBox;
use Pmpr\Common\Foundation\FormMaker\Admin\Field\Checkbox;
use Pmpr\Common\Foundation\FormMaker\Admin\Field\Field;
use Pmpr\Common\Foundation\Manipulate\ManipulateAjax;
use Pmpr\Common\Foundation\Manipulate\ManipulateServer;
use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateString;
use WC_Product_Attribute;

class LocalAttribute extends BaseAttribute
{
    
    public function __construct()
    {
        $this->name = "\154\157\x63\141\x6c";
        parent::__construct();
    }
    public function wigskegsqequoeks()
    {
        $this->koaegcswmcqsiykq("\167\157\x6f\143\157\x6d\x6d\145\162\x63\x65\x5f\163\141\x76\145\x5f\141\x74\164\162\151\x62\165\x74\145\x73", [$this, "\x73\141\x76\x65"], 5)->qcsmikeggeemccuu("\x77\157\x6f\x63\157\155\155\x65\x72\143\x65\x5f\141\146\164\145\162\137\x70\x72\157\x64\165\143\164\137\141\x74\x74\x72\151\x62\x75\x74\145\x5f\x73\x65\164\164\151\x6e\x67\x73", [$this, "\x69\x75\x61\165\143\x75\x6f\x6f\x6b\x67\x6f\x71\151\151\x69\x6f"], 10, 2);
        parent::wigskegsqequoeks();
    }
    
    public function uqsmmauywmsuqais($ymkomoccmymcoiea) : ?string
    {
        return DecoratorWoocommerce::scemgqiggsykoisk($ymkomoccmymcoiea->get_name());
    }
    public function save()
    {
        goto imyksgwckoyysuwo;
        euuwcqqueakwukom:
        wkosyweqgikaakak:
        goto gqeaoyucgsqueucg;
        iquaiwacukwgyksm:
        foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) {
            goto wmimosiokccysyuo;
            usgiwsguoqiaguiu:
            qquuscuqaaeemooq:
            goto ukgkawqgeqswmywc;
            yqiwyqiseaywuiyk:
            $aokagokqyuysuksm = $aiowsaccomcoikus->mwikyscisascoeea();
            goto qoqyqgqoqkaeuyoi;
            wmimosiokccysyuo:
            if (!$aiowsaccomcoikus instanceof Field) {
                goto kgwwccucyguacyku;
            }
            goto yqiwyqiseaywuiyk;
            qoqyqgqoqkaeuyoi:
            $qqswgiawgeaeoecu = ManipulateArray::get($icwicymcioeyeyek, $aokagokqyuysuksm, []);
            goto wsmymasiyaoyaaww;
            wkcuekwsymskwwcy:
            foreach ($qqswgiawgeaeoecu as $momcykaoccoymeig => $eqgoocgaqwqcimie) {
                goto kyieaymowioesowa;
                wiawkskyaqysiqsq:
                if (!$aiowsaccomcoikus instanceof Checkbox) {
                    goto agckeekgsueysiac;
                }
                goto qkmimisossgioguq;
                qwaewmyemsgqgkwg:
                ManipulatePost::ksmqawcowkmegigw($aokagokqyuysuksm . $ymqmyyeuycgmigyo, $eqgoocgaqwqcimie, $product);
                goto wwmkccqcyqkskosu;
                wwmkccqcyqkskosu:
                gowiwcysiyeummgy:
                goto mckcswqwkwukogqy;
                qkmimisossgioguq:
                $eqgoocgaqwqcimie = true;
                goto osiyyuaaukmsugso;
                cskqgasmygooeiki:
                $ymqmyyeuycgmigyo = DecoratorWoocommerce::scemgqiggsykoisk($ymqmyyeuycgmigyo);
                goto qwaewmyemsgqgkwg;
                kyieaymowioesowa:
                $ymqmyyeuycgmigyo = ManipulateArray::get($aiwgcyaewwagisoo, $momcykaoccoymeig);
                goto wiawkskyaqysiqsq;
                osiyyuaaukmsugso:
                agckeekgsueysiac:
                goto cskqgasmygooeiki;
                mckcswqwkwukogqy:
            }
            goto wgmcumeeyosmwqgi;
            wgmcumeeyosmwqgi:
            eoamsouwygskswie:
            goto usgiwsguoqiaguiu;
            smuaquguuyqakyyk:
            aeqakycgmcyiisae:
            goto wqmkimmusyyeicag;
            ukgkawqgeqswmywc:
            kgwwccucyguacyku:
            goto smuaquguuyqakyyk;
            wsmymasiyaoyaaww:
            if (!(is_array($qqswgiawgeaeoecu) && $qqswgiawgeaeoecu)) {
                goto qquuscuqaaeemooq;
            }
            goto wkcuekwsymskwwcy;
            wqmkimmusyyeicag:
        }
        goto euuwcqqueakwukom;
        gqeaoyucgsqueucg:
        ykymyiswyykokeoi:
        goto ggioowsogoacmyyi;
        ayiescmccgoscuwm:
        $aiwgcyaewwagisoo = ManipulateArray::get($icwicymcioeyeyek, "\141\x74\x74\162\x69\x62\x75\x74\x65\x5f\156\141\155\x65\163");
        goto siamksowsoewemyk;
        gsmwukqywosmyauk:
        parse_str(ManipulateServer::ayueggmoqeeukqmq(self::DATA), $icwicymcioeyeyek);
        goto ayiescmccgoscuwm;
        kwiouekiyaeoeiwq:
        $product = $this->aqasygcsqysmmyke();
        goto gsyiisgksesmwkme;
        imyksgwckoyysuwo:
        if (!ManipulateAjax::wqsmsuyggkkyyocc("\163\x61\166\145\55\141\x74\164\162\151\x62\x75\164\145\163", "\163\145\143\165\x72\151\164\171")) {
            goto mgsusugkgmaowkwy;
        }
        goto gsmwukqywosmyauk;
        siamksowsoewemyk:
        if (!($icwicymcioeyeyek && $aiwgcyaewwagisoo)) {
            goto ykymyiswyykokeoi;
        }
        goto kwiouekiyaeoeiwq;
        ggioowsogoacmyyi:
        mgsusugkgmaowkwy:
        goto ggyikcqwqysmouye;
        gsyiisgksesmwkme:
        $ikgwqyuyckaewsow = array_merge($this->ugmceccgwaaaigiy($product), GlobalAttribute::symcgieuakksimmu()->ugmceccgwaaaigiy($product));
        goto iquaiwacukwgyksm;
        ggyikcqwqysmouye:
    }
    
    public function qooeaookuemoqecm($qqgocisyeuuqmcwc, $ymkomoccmymcoiea)
    {
        return ManipulatePost::igawqaomowicuayw($qqgocisyeuuqmcwc . $ymkomoccmymcoiea, $this->aqasygcsqysmmyke(), true);
    }
    
    public function iuaucuookgoqiiio($ymkomoccmymcoiea, $momcykaoccoymeig)
    {
        goto cigcsyiesymkuywu;
        sgqaaocqgayiigos:
        uqwwsmumussiogou:
        goto wmyagwwmquqeyyok;
        kgigsakiwsqqioim:
        $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy($product);
        goto aosmakasyommmioc;
        ugwqwcgoswkkwcee:
        $product = $this->aqasygcsqysmmyke();
        goto kgigsakiwsqqioim;
        swmkkiiauusieuqw:
        $ikgwqyuyckaewsow = array_merge($ikgwqyuyckaewsow, GlobalAttribute::symcgieuakksimmu()->ugmceccgwaaaigiy($product));
        goto sgqaaocqgayiigos;
        mocauoaugmiuacuu:
        if (!$ikgwqyuyckaewsow) {
            goto saueosiwcgqsmgmk;
        }
        goto eoawekcguswgyykc;
        cigcsyiesymkuywu:
        if (!$ymkomoccmymcoiea instanceof WC_Product_Attribute) {
            goto kgmwmmiemqggaqeq;
        }
        goto ugwqwcgoswkkwcee;
        wwiasiiquqqmmqay:
        foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) {
            goto ywswgoesmiwgckcu;
            ummiwuqqisqgwoco:
            $aiowsaccomcoikus->ggiaseqygioygumq("{$aiowsaccomcoikus->mwikyscisascoeea()}\133{$momcykaoccoymeig}\x5d")->oiwawawcmigageco(4)->yoimakcqmoqokkcu();
            goto myikgqcgseikimwa;
            ooyyuaswogikyggu:
            cequowgomkkwmoom:
            goto keigessgsgawiyyo;
            myikgqcgseikimwa:
            gaymgiaccgkgsiwq:
            goto ooyyuaswogikyggu;
            ywswgoesmiwgckcu:
            if (!$aiowsaccomcoikus instanceof Field) {
                goto gaymgiaccgkgsiwq;
            }
            goto ummiwuqqisqgwoco;
            keigessgsgawiyyo:
        }
        goto iwkwesmeiywuuugk;
        wmyagwwmquqeyyok:
        $ikgwqyuyckaewsow = $this->uiwgikskqiusqook($ikgwqyuyckaewsow, $this->uqsmmauywmsuqais($ymkomoccmymcoiea), $momcykaoccoymeig);
        goto mocauoaugmiuacuu;
        vgggsmmgmwumikmc:
        saueosiwcgqsmgmk:
        goto ycomuqussgiacuom;
        eoawekcguswgyykc:
        $ikgwqyuyckaewsow = ManipulateArray::yaeiiwwyckwugsem($ikgwqyuyckaewsow);
        goto wwiasiiquqqmmqay;
        akymcmmokgskeqiu:
        echo $this->iuygowkemiiwqmiw("\146\x6f\162\155", ["\151\x64" => ManipulateString::uniqid(5), "\164\x69\x74\154\x65" => __("\x43\165\163\x74\x6f\x6d\40\106\x69\145\x6c\144\x73", PR__CMN__FOUNDATION), "\146\x69\145\x6c\x64\163" => MetaBox::iuaucuookgoqiiio($ikgwqyuyckaewsow, ["\x65\143\150\x6f" => false]), "\143\x61\156\x5f\x61\144\x64\x5f\152\163" => ManipulateAjax::mcgoysmkqsqooceq(), "\141\x6c\x65\x72\164\x5f\155\x65\x73\x73\141\x67\145" => __("\103\x61\x6e\40\156\157\x74\40\162\x65\x6e\x64\145\162\40\x66\151\145\x6c\x64\163\40\x63\x6f\x72\x72\145\143\x74\x6c\171\x2c\x20\x70\154\x65\141\163\145\40\x72\x65\x66\x72\x65\x73\150\x20\x70\x61\147\145\x20\x6d\x61\x6e\165\141\154\x6c\x79\56", PR__CMN__FOUNDATION), "\x73\x75\x63\143\x65\163\163\x5f\x6d\x65\x73\x73\x61\x67\145" => __("\146\151\145\154\x64\x73\x20\x6c\157\x61\144\145\x64\40\x63\157\162\162\x65\143\x74\154\171\x2e", PR__CMN__FOUNDATION)]);
        goto vgggsmmgmwumikmc;
        ycomuqussgiacuom:
        kgmwmmiemqggaqeq:
        goto yuuyqoyguaqsswey;
        aosmakasyommmioc:
        if ($ymkomoccmymcoiea->is_taxonomy()) {
            goto uqwwsmumussiogou;
        }
        goto swmkkiiauusieuqw;
        iwkwesmeiywuuugk:
        oekeqowkqecgsmuk:
        goto akymcmmokgskeqiu;
        yuuyqoyguaqsswey:
    }
    
    public function uiwgikskqiusqook($ikgwqyuyckaewsow = [], $ymqmyyeuycgmigyo = '', $momcykaoccoymeig = 0) : array
    {
        goto oeqaomymqmegqway;
        aeaaqimiugqwsiuo:
        parse_str(ManipulateServer::ayueggmoqeeukqmq(self::DATA), $icwicymcioeyeyek);
        goto iwcmwyyeuwuogkmy;
        iwcmwyyeuwuogkmy:
        $product = $this->aqasygcsqysmmyke();
        goto yogcgegoayymyisi;
        gayuuyucaseyequa:
        uqekawymqmyaqaao:
        goto oemswegiqoiyocyi;
        yogcgegoayymyisi:
        foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) {
            goto kmawikcwmucoyeio;
            wokoooqeguamsuso:
            $uusmaiomayssaecw = $aiowsaccomcoikus->mwikyscisascoeea();
            goto ykwmsugmueoosyka;
            iggimwweuooskmqi:
            if (!$product) {
                goto kaueiekkeciiaswy;
            }
            goto oieyimeswqquigei;
            kmawikcwmucoyeio:
            if (!$aiowsaccomcoikus instanceof Field) {
                goto mauoymckskucuemc;
            }
            goto wokoooqeguamsuso;
            mqecqicimeusigcs:
            yqismiumwaaeqgwu:
            goto agwucmswyeecgiwk;
            ywymuuggyeqggyqo:
            mauoymckskucuemc:
            goto wyouyacqwaoscwco;
            agwucmswyeecgiwk:
            $eqgoocgaqwqcimie = isset($icwicymcioeyeyek[$uusmaiomayssaecw][$momcykaoccoymeig]);
            goto wocmissqwqoccqgq;
            mygyyacgawkwoaak:
            goto wusuosaiqosakcqq;
            goto mqecqicimeusigcs;
            wyouyacqwaoscwco:
            iwigaaoiqyugwacm:
            goto kuiimqmaogsaoimi;
            uiqqoqeguqksakak:
            if ($icwicymcioeyeyek && isset($icwicymcioeyeyek[$uusmaiomayssaecw])) {
                goto iieykwekyukgsias;
            }
            goto iggimwweuooskmqi;
            smsgocwimiqgewse:
            iieykwekyukgsias:
            goto qksoacweieioouuu;
            auwsmkeaswcqwkiy:
            $aiowsaccomcoikus->iygyugseyaqwywyg($eqgoocgaqwqcimie);
            goto ywymuuggyeqggyqo;
            qcssqeugkggmssuq:
            goto yiuwqcqesuysmegs;
            goto smsgocwimiqgewse;
            sieqieowwakamuei:
            kaueiekkeciiaswy:
            goto qcssqeugkggmssuq;
            ykwmsugmueoosyka:
            $eqgoocgaqwqcimie = false;
            goto uiqqoqeguqksakak;
            qksoacweieioouuu:
            if ($aiowsaccomcoikus instanceof Checkbox) {
                goto yqismiumwaaeqgwu;
            }
            goto cgummkmwkkyaomqq;
            cgummkmwkkyaomqq:
            $eqgoocgaqwqcimie = ManipulateArray::get($icwicymcioeyeyek[$uusmaiomayssaecw], $momcykaoccoymeig, $icwicymcioeyeyek[$uusmaiomayssaecw]);
            goto mygyyacgawkwoaak;
            ouyqacmgssaeeyaq:
            yiuwqcqesuysmegs:
            goto auwsmkeaswcqwkiy;
            oieyimeswqquigei:
            $eqgoocgaqwqcimie = $this->qooeaookuemoqecm($uusmaiomayssaecw, $ymqmyyeuycgmigyo);
            goto sieqieowwakamuei;
            wocmissqwqoccqgq:
            wusuosaiqosakcqq:
            goto ouyqacmgssaeeyaq;
            kuiimqmaogsaoimi:
        }
        goto gayuuyucaseyequa;
        ckocyicqgqesqcyw:
        return $ikgwqyuyckaewsow;
        goto oiuwwaimuiuasyak;
        oeqaomymqmegqway:
        if (!$ikgwqyuyckaewsow) {
            goto ueyagkiewoigukeq;
        }
        goto aeaaqimiugqwsiuo;
        oemswegiqoiyocyi:
        ueyagkiewoigukeq:
        goto ckocyicqgqesqcyw;
        oiuwwaimuiuasyak:
    }
}
