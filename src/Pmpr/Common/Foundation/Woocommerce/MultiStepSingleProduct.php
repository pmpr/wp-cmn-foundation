<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613a1be32d755             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Woocommerce;

use Pmpr\Common\Foundation\Decorator\DecoratorQuery;
use Pmpr\Common\Foundation\FormMaker\Admin\Element\MetaBox;
use Pmpr\Common\Foundation\FormMaker\Admin\Field\Group;
use Pmpr\Common\Foundation\FormMaker\Front\MultiStepForm;
use Pmpr\Common\Foundation\FormMaker\Front\Step;
use Pmpr\Common\Foundation\Manipulate\ManipulateServer;
use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulateWoocommerce;
use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost;
use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateHTML;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateString;
use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconFontawesomeInterface;
use WC_Product;
use WC_Product_Simple;
use WC_Product_Variable;

abstract class MultiStepSingleProduct extends Common
{
    const NEXT_STEP_BUTTON = "\156\x65\170\x74\x5f\x73\164\x65\x70\137\x62\x75\164\x74\157\x6e";
    const PRODUCT_SINGLE_STEPS = "\x70\x72\x6f\x64\165\x63\164\137\163\151\x6e\x67\x6c\x65\137\163\164\x65\x70\163";
    
    protected array $steps = [];
    
    protected ?int $product = null;
    
    protected ?MultiStepForm $form = null;
    public function wigskegsqequoeks()
    {
        $this->qcsmikeggeemccuu("\x69\156\151\164", [$this, "\151\x6e\151\164"])->qcsmikeggeemccuu("\x77\160", [$this, "\145\x6b\x67\x65\145\x63\157\x61\x63\x77\x6d\163\165\143\151\145"])->qcsmikeggeemccuu("\167\157\157\x63\x6f\x6d\x6d\145\x72\143\145\137\x73\x69\156\x67\x6c\x65\x5f\x70\162\x6f\x64\x75\x63\164\137\163\x75\x6d\x6d\141\162\x79", [$this, "\151\x69\167\151\x69\171\x6b\x73\145\x61\x75\161\161\x63\171\x71"], 9)->qcsmikeggeemccuu("\167\x6f\x6f\x63\x6f\155\x6d\145\162\x63\145\x5f\163\151\156\x67\x6c\145\137\160\x72\157\x64\x75\x63\x74\x5f\x73\165\x6d\155\x61\162\171", [$this, "\x69\x73\163\x71\145\x77\145\x73\147\x65\x63\145\x71\x67\x71\x6b"], 501);
        parent::wigskegsqequoeks();
    }
    public function ekgeecoacwmsucie()
    {
        goto eocusimsawyoyaas;
        geacgaisikkgqosu:
        if (!($asuggasaseaacmqu && is_array($asuggasaseaacmqu))) {
            goto yuwiekiseooqagqo;
        }
        goto aqykwekaooeoqgoa;
        seasiecgqussuqkw:
        $asuggasaseaacmqu = ManipulatePost::igawqaomowicuayw(self::PRODUCT_SINGLE_STEPS, $this->aqasygcsqysmmyke());
        goto geacgaisikkgqosu;
        geaeoccyqqkyocuw:
        yuwiekiseooqagqo:
        goto auqyeogymwsekuue;
        aqykwekaooeoqgoa:
        foreach ($asuggasaseaacmqu as $wyeyeaaekyoyimqu) {
            goto icisiaukqqmgcwci;
            qcysssoeueakqowq:
            wgksasuisoeqasuk:
            goto mookyeaauceccaga;
            icisiaukqqmgcwci:
            if (!(ManipulateArray::get($wyeyeaaekyoyimqu, self::TITLE) && ManipulateArray::get($wyeyeaaekyoyimqu, self::TEMPLATE))) {
                goto wgksasuisoeqasuk;
            }
            goto qaggmqequkmcamma;
            qaggmqequkmcamma:
            $this->mgqggiyywoageqmo($wyeyeaaekyoyimqu);
            goto qcysssoeueakqowq;
            mookyeaauceccaga:
            wksekwiuccskimmu:
            goto qasccueceswyusgy;
            qasccueceswyusgy:
        }
        goto sacawqskusgwkkyg;
        sacawqskusgwkkyg:
        ayaiiymgyagsoqia:
        goto uckyuqsuyqwgswaa;
        auqyeogymwsekuue:
        usosooekkcgwmgkq:
        goto owogoeykikyyqmck;
        eocusimsawyoyaas:
        if (!$this->cyeywmmccyoumgku()) {
            goto usosooekkcgwmgkq;
        }
        goto seasiecgqussuqkw;
        uckyuqsuyqwgswaa:
        $this->enqueue();
        goto geaeoccyqqkyocuw;
        owogoeykikyyqmck:
    }
    public function init()
    {
        goto qkggwaukgmuiwose;
        yuouykoggqagseog:
        eiusewmkqqyyoqio:
        goto sauwooccoqomkyei;
        qkggwaukgmuiwose:
        if (!$this->oiomuqiuyskqewke()) {
            goto eiusewmkqqyyoqio;
        }
        goto owgsqkkemawskgos;
        owgsqkkemawskgos:
        MetaBox::cgygmuguceeosoey(self::PRODUCT_SINGLE_STEPS . "\x5f\146\157\162\155", __("\101\144\x64\40\124\x6f\x20\x43\141\162\x74\x20\123\x74\145\160\x73", PR__CMN__FOUNDATION), true)->ewweaossowcqywaw($this->qegwqkeqkmgeyouk())->mgieiwsmcswmmiim(self::PRODUCT)->maosyyqsuygkawma()->saemoowcasogykak(IconFontawesomeInterface::ICON_FORWARD_STEP);
        goto yuouykoggqagseog;
        sauwooccoqomkyei:
    }
    
    public function yyoqecggyacaseko() : ?MultiStepForm
    {
        goto aqqwuwmasekigeus;
        sooagyoeaycycmke:
        $eaoumsseceiowgsk = new MultiStepForm(ManipulateString::uniqid(5));
        goto msmgiksiqawcgkqe;
        msmgiksiqawcgkqe:
        $eaoumsseceiowgsk->iiqoooqcakkaeyiw();
        goto iqgceguocmwqeowe;
        iqgceguocmwqeowe:
        $this->form = $eaoumsseceiowgsk;
        goto cykouiuweogkyqee;
        cykouiuweogkyqee:
        uecmkwyokqqcysim:
        goto ccsqcysqesqcmqqc;
        aqqwuwmasekigeus:
        if ($this->form) {
            goto uecmkwyokqqcysim;
        }
        goto sooagyoeaycycmke;
        ccsqcysqesqcmqqc:
        return $this->form;
        goto wgycoeqcyascweia;
        wgycoeqcyascweia:
    }
    
    public function aqasygcsqysmmyke() : ?int
    {
        return $this->product;
    }
    
    public function yiagkoqoiemmqssu() : ?WC_Product
    {
        return ManipulateWoocommerce::aqasygcsqysmmyke($this->aqasygcsqysmmyke());
    }
    public function iiwiiykseauqqcyq()
    {
        goto wemkkueqksqmuyyk;
        mowoyiecqoaiymym:
        ob_start();
        goto gsgiaiymawugosgi;
        wemkkueqksqmuyyk:
        if (!$this->cyeywmmccyoumgku()) {
            goto ocuecygeseyssqum;
        }
        goto mowoyiecqoaiymym;
        gsgiaiymawugosgi:
        ocuecygeseyssqum:
        goto ykokyisssyceccmy;
        ykokyisssyceccmy:
    }
    public function issqewesgeceqgqk()
    {
        goto saueimgassmwoyka;
        okuoucgkgyyseguu:
        $this->yyoqecggyacaseko()->render(["\x65\x63\x68\x6f" => true]);
        goto ymoeymaaemmysaam;
        uawsmeqsickqqyww:
        eqysgewmuookykug:
        goto igiumgigysasioec;
        ymoeymaaemmysaam:
        oieaoouoioamiqme:
        goto uawsmeqsickqqyww;
        ssoawgymwwgamowo:
        $this->esoeigiuggwycwiq();
        goto kuyggkawoaiiwseo;
        yeycmwocyqoegmaq:
        ob_clean();
        goto ssoawgymwwgamowo;
        kuyggkawoaiiwseo:
        if (!$this->yyoqecggyacaseko()->wmoeeiseqeecugmu()) {
            goto oieaoouoioamiqme;
        }
        goto okuoucgkgyyseguu;
        saueimgassmwoyka:
        if (!$this->cyeywmmccyoumgku()) {
            goto eqysgewmuookykug;
        }
        goto yeycmwocyqoegmaq;
        igiumgigysasioec:
    }
    
    public function oiomuqiuyskqewke() : bool
    {
        $ccamueccusigaaio = $this->aqasygcsqysmmyke();
        return $ccamueccusigaaio && is_admin() && (ManipulateServer::get("\x61\x63\x74\151\x6f\156") == "\145\x64\x69\164" && ManipulateServer::get(self::POST) == $ccamueccusigaaio || ManipulateServer::ayueggmoqeeukqmq("\x61\143\x74\151\x6f\x6e") == "\x65\144\151\164\x70\157\163\x74");
    }
    
    public function syguimaaeugakesm() : Group
    {
        return MetaBox::iseogkiymousogom(self::PRODUCT_SINGLE_STEPS, __("\123\164\x65\x70", PR__CMN__FOUNDATION))->mkksewyosgeumwsa(MetaBox::wcwmusaouiqaqeww(self::ENABLE, __("\x45\156\141\142\154\x65", PR__CMN__FOUNDATION)))->mkksewyosgeumwsa(MetaBox::ymuegqgyuagyucws(self::TITLE, __("\124\151\164\154\x65", PR__CMN__FOUNDATION)))->mkksewyosgeumwsa(MetaBox::uouyygwcgsmygaee(self::DESCRIPTION, __("\x44\145\x73\143\x72\151\160\x74\x69\x6f\x6e", PR__CMN__FOUNDATION))->qsecygiycssgacqs(3))->mkksewyosgeumwsa(MetaBox::scgissgkcwaumgky(self::ICON))->mkksewyosgeumwsa(MetaBox::ckuwucygcwsiawms(self::TEMPLATE, __("\x54\145\155\x70\x6c\141\x74\x65", PR__CMN__FOUNDATION), $this->swocoigyikkommyq()))->mkksewyosgeumwsa(MetaBox::ymuegqgyuagyucws(self::NEXT_STEP_BUTTON, __("\116\145\170\x74\40\x53\x74\145\160\x20\102\165\164\164\x6f\156\40\x54\151\164\154\145", PR__CMN__FOUNDATION))->eyygsasuqmommkua(__("\x4e\x65\170\164\x20\123\x74\x65\x70", PR__CMN__FOUNDATION)))->usosgsaaimqcysyk()->awaeegwoiqoisoam([self::TEMPLATE]);
    }
    
    public function cyeywmmccyoumgku() : bool
    {
        goto gkkowgywckwwcoss;
        owcweesegmoeogqc:
        $ksaameoqigiaoigg = $ccamueccusigaaio && ManipulatePost::mwikyscisascoeea() === $ccamueccusigaaio;
        goto yosmywouooecowyi;
        yosmywouooecowyi:
        cqiuwwcuouuigawo:
        goto ieaayaguiywwyecq;
        gkkowgywckwwcoss:
        $ksaameoqigiaoigg = false;
        goto sgskgsyiqcqsiwwe;
        ieaayaguiywwyecq:
        return $ksaameoqigiaoigg;
        goto aecaygyqamswuqcu;
        sgskgsyiqcqsiwwe:
        if (!DecoratorQuery::cukiusasccucgwqc(self::PRODUCT)) {
            goto cqiuwwcuouuigawo;
        }
        goto qoqasyeyeesqmoye;
        qoqasyeyeesqmoye:
        $ccamueccusigaaio = $this->aqasygcsqysmmyke();
        goto owcweesegmoeogqc;
        aecaygyqamswuqcu:
    }
    
    public function qegwqkeqkmgeyouk() : array
    {
        return [$this->syguimaaeugakesm()];
    }
    
    public function wmoeeiseqeecugmu() : bool
    {
        return !empty($this->guiyusikssumecwk());
    }
    
    public function mgqggiyywoageqmo($wyeyeaaekyoyimqu) : self
    {
        $this->steps[] = $wyeyeaaekyoyimqu;
        return $this;
    }
    
    public function guiyusikssumecwk() : array
    {
        return $this->steps;
    }
    
    public function maoomkygegkowemi(array $asuggasaseaacmqu) : self
    {
        goto eumaaywogiiuiyao;
        iweimwuaemaquuse:
        return $this;
        goto sgsgokmagckcoock;
        eumaaywogiiuiyao:
        foreach ($asuggasaseaacmqu as $wyeyeaaekyoyimqu) {
            $this->mgqggiyywoageqmo($wyeyeaaekyoyimqu);
            ucigyuukqagoagak:
        }
        goto qcqgacsuskoiskcg;
        qcqgacsuskoiskcg:
        oyywmoceqiqwyyek:
        goto iweimwuaemaquuse;
        sgsgokmagckcoock:
    }
    public function esoeigiuggwycwiq()
    {
        goto aiqskweckwoegquq;
        myyuyqequamqekoc:
        qmgwqgkuucwysswc:
        goto swcqqiyagauaogiy;
        icmgwewmusucsooy:
        gmkwekuakoueicws:
        goto myyuyqequamqekoc;
        oykmqmogcwumacqq:
        foreach ($asuggasaseaacmqu as $momcykaoccoymeig => $wyeyeaaekyoyimqu) {
            goto yegecewiqewskmgm;
            awayeqowmyycaoqs:
            [$oqkgomucoyswikgk, $meqocwsecsywiiqs, $wkaqekwwgqsqwcoi, $mkqqqewsokcswckc, $qqscaoyqikuyeoaw, $mkemseqwyqgsgsek] = array_values($qqswgiawgeaeoecu);
            goto aquiaqiseuwyomay;
            eyiigmyweugmgckw:
            $this->yyoqecggyacaseko()->mgqggiyywoageqmo($oyoqqgcsgigcmqqu);
            goto mgkgeuqasqcaimou;
            iukkuoewgiwcoukw:
            $ewgwqamkygiqaawc = $this->iuygowkemiiwqmiw($qqscaoyqikuyeoaw, $this->rsysgcucogueguuk($qqscaoyqikuyeoaw));
            goto cgamwegmkwmmsoow;
            cgamwegmkwmmsoow:
            $oyoqqgcsgigcmqqu->saemoowcasogykak($wkaqekwwgqsqwcoi)->gswweykyogmsyawy($meqocwsecsywiiqs)->oguessuismosauuu($mkqqqewsokcswckc . $ewgwqamkygiqaawc)->gucwmccyimoagwcm($mkqqqewsokcswckc);
            goto faeciyigcmyieesm;
            aquiaqiseuwyomay:
            if (!($oqkgomucoyswikgk && $meqocwsecsywiiqs && $qqscaoyqikuyeoaw)) {
                goto qwyoggysuwmawqoo;
            }
            goto kysgsayqeakiwmic;
            kysgsayqeakiwmic:
            $oyoqqgcsgigcmqqu = new Step($momcykaoccoymeig + 1);
            goto eeiseascemqaocmo;
            yegecewiqewskmgm:
            $qqswgiawgeaeoecu = ManipulateArray::gucyquqwoimkiiaq($wyeyeaaekyoyimqu, [self::ENABLE, self::TITLE, self::ICON, self::DESCRIPTION, self::TEMPLATE, self::NEXT_STEP_BUTTON]);
            goto awayeqowmyycaoqs;
            syycscyugcgsquwm:
            cyguswquuckqoqcu:
            goto wcsicmaoskwcaqou;
            faeciyigcmyieesm:
            if (!$mkemseqwyqgsgsek) {
                goto euqaykgiqkmkaack;
            }
            goto qakcamuiqmiscugu;
            mgkgeuqasqcaimou:
            qwyoggysuwmawqoo:
            goto syycscyugcgsquwm;
            qakcamuiqmiscugu:
            $oyoqqgcsgigcmqqu->gwwmcykumqueaosa($mkemseqwyqgsgsek);
            goto qguqeweisuimgyqk;
            eeiseascemqaocmo:
            $mkqqqewsokcswckc = ManipulateHTML::uuccukgasskgimsq("\x70", ["\143\154\x61\163\163" => "\x66\157\x6e\164\x2d\167\145\x69\x67\150\164\x2d\x62\157\154\x64\40\x66\x6f\156\164\55\x31\x37\x20\x74\145\170\164\55\x6d\165\x74\x65\144"], $mkqqqewsokcswckc);
            goto iukkuoewgiwcoukw;
            qguqeweisuimgyqk:
            euqaykgiqkmkaack:
            goto eyiigmyweugmgckw;
            wcsicmaoskwcaqou:
        }
        goto icmgwewmusucsooy;
        aiqskweckwoegquq:
        $asuggasaseaacmqu = $this->guiyusikssumecwk();
        goto acyuamggaiuqmsoa;
        acyuamggaiuqmsoa:
        if (!$asuggasaseaacmqu) {
            goto qmgwqgkuucwysswc;
        }
        goto oykmqmogcwumacqq;
        swcqqiyagauaogiy:
    }
    public function enqueue()
    {
        $this->yyoqecggyacaseko()->enqueue();
    }
    
    public function rsysgcucogueguuk($qqscaoyqikuyeoaw) : array
    {
        return [];
    }
    
    public abstract function swocoigyikkommyq() : array;
}
