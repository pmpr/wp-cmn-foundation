<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b499786a1b             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\FormMaker\Admin\Element;

use Pmpr\Common\Foundation\Decorator\DecoratorOption;
use Pmpr\Common\Foundation\FormMaker\Admin\MetaTab;
use Pmpr\Common\Foundation\Manipulate\ManipulateServer;
use Pmpr\Common\Foundation\Manipulate\ManipulateSetting;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateString;

class Setting extends Page
{
    
    protected array $defaults = [];
    
    public function __construct()
    {
        goto oigimmkyumckwick;
        ggumyqmosmckemum:
        $this->parentMenu = "\x6f\160\x74\151\x6f\156\x73\x2d\x67\145\156\145\162\141\154\56\160\x68\x70";
        goto tgousgyiiaiaeack;
        imqgamcocykmuweu:
        if ($this->cgugaaoykcyiomuk()) {
            goto woociiywkukyomca;
        }
        goto ggumyqmosmckemum;
        oigimmkyumckwick:
        $this->type = "\163\145\164\164\x69\x6e\x67\x73";
        goto imqgamcocykmuweu;
        tgousgyiiaiaeack:
        woociiywkukyomca:
        goto kuiqawwoeaeuemcy;
        kuiqawwoeaeuemcy:
        parent::__construct();
        goto uoiawymwqmyiiosk;
        uoiawymwqmyiiosk:
    }
    
    public function cosqcmekuiigqywc(MetaTab $uqcooyiiyysckskk) : MetaTab
    {
        $uqcooyiiyysckskk->kkigeuaeguyueaem('')->ceiqwucmgawwmawo(__("\123\141\x76\x65\x20\x43\x68\x61\x6e\147\145\x73", PR__CMN__FOUNDATION));
        return parent::cosqcmekuiigqywc($uqcooyiiyysckskk);
    }
    
    public function mwikyscisascoeea() : ?string
    {
        goto qoueskwwsaywasai;
        ssqmoeeuysgacwme:
        return $aokagokqyuysuksm;
        goto yckwoyawyoyskqea;
        msmmwgagckyuccii:
        if ($aokagokqyuysuksm) {
            goto wcsiocqmcgkyueoc;
        }
        goto yuuokwoimsawcwwq;
        yuuokwoimsawcwwq:
        $aokagokqyuysuksm = "{$this->aakmagwggmkoiiyu()}\137{$this->gueasuouwqysmomu()}";
        goto euamqcukmwkycmcs;
        qoueskwwsaywasai:
        $aokagokqyuysuksm = parent::mwikyscisascoeea();
        goto msmmwgagckyuccii;
        euamqcukmwkycmcs:
        wcsiocqmcgkyueoc:
        goto ssqmoeeuysgacwme;
        yckwoyawyoyskqea:
    }
    public function wigskegsqequoeks()
    {
        $this->qcsmikeggeemccuu("\x75\160\x64\141\164\145\137\x6f\160\164\151\x6f\156\137{$this->cisyiemkeykgkomc()}", [$this, "\157\x63\x71\141\161\x73\167\157\x65\171\163\143\165\x6f\x61\157"])->qcsmikeggeemccuu("\x75\160\x64\141\x74\145\137\x6f\x70\164\x69\x6f\x6e\x5f{$this->cisyiemkeykgkomc()}", [$this, "\x73\x63\x6d\155\x79\x6d\x71\153\157\171\x63\153\147\153\x61\155"], 10, 2)->qcsmikeggeemccuu("\x75\x70\144\x61\164\x65\137\x73\x65\x74\x74\x69\156\x67\137{$this->cisyiemkeykgkomc()}", [$this, "\x65\x69\x61\x61\143\145\x67\153\151\x67\161\151\167\141\167\x67"], 10, 2);
        parent::wigskegsqequoeks();
    }
    public function kgquecmsgcouyaya()
    {
        $this->cecaguuoecmccuse("\147\x65\164\137{$this->cisyiemkeykgkomc()}", [$this, "\155\x79\167\167\x79\x65\147\x6b\165\171\x6d\157\x6f\x6b\145\147"], 10, 2)->cecaguuoecmccuse("\x67\145\x74\137{$this->aakmagwggmkoiiyu()}\x5f\163\x65\x74\x74\x69\x6e\147", [$this, "\x65\151\x77\143\x75\161\x69\147\x61\x79\151\147\151\x6d\141\153"], 10, 2)->cecaguuoecmccuse("\x70\162\145\137\165\160\144\x61\164\145\x5f\x6f\x70\164\x69\x6f\x6e\x5f{$this->cisyiemkeykgkomc()}", [$this, "\143\151\141\x67\143\x6f\151\171\x65\x69\x6f\x61\147\x67\x73\x6f"], 50, 3)->cecaguuoecmccuse("\x63\x6d\142\x32\137\157\166\x65\162\x72\x69\x64\145\137\x6f\x70\164\151\157\156\x5f\147\145\164\137{$this->cisyiemkeykgkomc()}", [$this, "\x6d\x6d\x65\161\163\165\x61\x71\x61\x63\x77\165\x6f\x67\x79\x61"], 2, 1);
        parent::kgquecmsgcouyaya();
    }
    
    public function gecwckciuqqukcko() : array
    {
        return $this->defaults;
    }
    
    public function syuyisqgcskmaymc($uusmaiomayssaecw, $eqgoocgaqwqcimie) : self
    {
        $this->defaults[$uusmaiomayssaecw] = $eqgoocgaqwqcimie;
        return $eqgoocgaqwqcimie;
    }
    private function wascmggskiyiaogs()
    {
        goto ywmqqmgacioekiim;
        qsgikaecsueeawcg:
        if (!($ggauoeuaesiymgee && is_array($ggauoeuaesiymgee))) {
            goto aokwwkysaawymggq;
        }
        goto wgqaaiuiaegacqug;
        uqscqwswiqsgsygk:
        if (!($ggauoeuaesiymgee && !self::mywwyegkuymookeg())) {
            goto ygcicamkgawkwygs;
        }
        goto smusacowuccegeqc;
        qkouugqimqywiiag:
        $ggauoeuaesiymgee = (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x64\x65\146\x61\165\x6c\164\x5f\163\145\164\164\x69\x6e\x67\x73", false), $ggauoeuaesiymgee, $this->cisyiemkeykgkomc());
        goto qsgikaecsueeawcg;
        smusacowuccegeqc:
        
        $uusmaiomayssaecw = $this->cisyiemkeykgkomc();
        goto qkouugqimqywiiag;
        wgqaaiuiaegacqug:
        DecoratorOption::add($uusmaiomayssaecw, $ggauoeuaesiymgee);
        goto kiuemcsmyusiamwy;
        kiuemcsmyusiamwy:
        aokwwkysaawymggq:
        goto kummicswwkwwkyys;
        kummicswwkwwkyys:
        ygcicamkgawkwygs:
        goto wwkqmuawuugoiwey;
        ywmqqmgacioekiim:
        $ggauoeuaesiymgee = $this->gecwckciuqqukcko();
        goto uqscqwswiqsgsygk;
        wwkqmuawuugoiwey:
    }
    
    public function ciagcoiyeioaggso($eqgoocgaqwqcimie, $msqkueqksqwmskak, $omkysikckkcieckq)
    {
        goto qougaquyiyoekgme;
        koeamciygeeqewcy:
        aoeqqmeqcaeksamm:
        goto mukioeqsayqwycgu;
        akgccuiekaowwmeq:
        $eqgoocgaqwqcimie = $this->iasywwkguyauiywu($eqgoocgaqwqcimie, $msqkueqksqwmskak);
        goto ywamicmegakyokoq;
        ywamicmegakyokoq:
        $eqgoocgaqwqcimie = $this->sscegwueamckwmcy("\142\x65\x66\x6f\x72\x65\137\x75\160\x64\x61\164\145\137{$this->cisyiemkeykgkomc()}", $eqgoocgaqwqcimie, $msqkueqksqwmskak);
        goto koeamciygeeqewcy;
        qougaquyiyoekgme:
        if (!($eqgoocgaqwqcimie !== $msqkueqksqwmskak && maybe_serialize($eqgoocgaqwqcimie) !== maybe_serialize($msqkueqksqwmskak))) {
            goto aoeqqmeqcaeksamm;
        }
        goto akgccuiekaowwmeq;
        mukioeqsayqwycgu:
        return $eqgoocgaqwqcimie;
        goto wiuiqmkuuuscscoi;
        wiuiqmkuuuscscoi:
    }
    
    public function iasywwkguyauiywu($eqgoocgaqwqcimie, $msqkueqksqwmskak)
    {
        return $eqgoocgaqwqcimie;
    }
    
    public function scmmymqkoyckgkam($msqkueqksqwmskak, $uwomkgseoiegeume)
    {
        $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x73\x61\x76\145\x64", false), $msqkueqksqwmskak, $uwomkgseoiegeume);
    }
    public function ocqaqswoeyscuoao()
    {
        goto keguueuuiqyowgge;
        keguueuuiqyowgge:
        $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\142\x65\146\x6f\162\x65\137\x72\x65\155\x6f\x76\145\x5f\143\141\143\150\145\137\160\x61\x74\150"));
        goto iggmoakswausicmq;
        gkqycsqguoaycowm:
        $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x61\x66\x74\145\162\137\x72\x65\x6d\157\166\145\137\143\x61\143\x68\145\x5f\x70\x61\x74\150"));
        goto myigiaaggwcoyqmo;
        iggmoakswausicmq:
        if (!($skacuygeqykiwiwy = ManipulateSetting::cmaecekuqkwmemms(self::PR__CACHE__PATH))) {
            goto cyiukscucygcyiow;
        }
        goto emqaiyugeiukyqiw;
        emqaiyugeiukyqiw:
        $this->kcciqwskewsuaemk()->remove($skacuygeqykiwiwy);
        goto gkqycsqguoaycowm;
        myigiaaggwcoyqmo:
        cyiukscucygcyiow:
        goto ciaocyoemcwmgays;
        ciaocyoemcwmgays:
    }
    
    public static function mywwyegkuymookeg()
    {
        goto makqoouaaoyeckwu;
        scywagkqaaqkqyuq:
        oakqwukqiowuwgse:
        goto aeoskcqgogoeieqq;
        amicgsowmwecywga:
        kaaosukiekmqcuas:
        goto kcgsqowasqeuaoyo;
        ywqgaoiyisukooog:
        
        $ksaameoqigiaoigg = DecoratorOption::get($eiockasigaaayoem);
        goto uicakiyqmsqkkeiq;
        yuakcmiumkmoseoy:
        goto oakqwukqiowuwgse;
        goto amicgsowmwecywga;
        aeoskcqgogoeieqq:
        return $ksaameoqigiaoigg;
        goto mqomgaeswiquiasi;
        wciqgiyuqauosqsm:
        $usymaaaeawgmyqig = wp_cache_get($eiockasigaaayoem);
        goto kkwciycuekqewqak;
        kkwciycuekqewqak:
        if ($usymaaaeawgmyqig !== false) {
            goto kaaosukiekmqcuas;
        }
        goto ywqgaoiyisukooog;
        uicakiyqmsqkkeiq:
        wp_cache_set($eiockasigaaayoem, $ksaameoqigiaoigg);
        goto yuakcmiumkmoseoy;
        kcgsqowasqeuaoyo:
        $ksaameoqigiaoigg = $usymaaaeawgmyqig;
        goto scywagkqaaqkqyuq;
        makqoouaaoyeckwu:
        $eiockasigaaayoem = self::symcgieuakksimmu()->cisyiemkeykgkomc();
        goto wciqgiyuqauosqsm;
        mqomgaeswiquiasi:
    }
    
    public static function eiaacegkigqiwawg($uusmaiomayssaecw, $eqgoocgaqwqcimie, $qeqooyuoiasweuck = null)
    {
        goto macwgscmecoymagu;
        uyomoigikmsymiku:
        self::oqyuwccsuskiwgew($qeqooyuoiasweuck);
        goto ykcsckmiswouwaim;
        oyiakwoikeckycqe:
        $qeqooyuoiasweuck[$uusmaiomayssaecw] = $eqgoocgaqwqcimie;
        goto uyomoigikmsymiku;
        tiqqwmquwowcwsko:
        oumgmywcokuyaaky:
        goto oyiakwoikeckycqe;
        uuowysiecmaqiskc:
        $qeqooyuoiasweuck = self::mywwyegkuymookeg();
        goto tiqqwmquwowcwsko;
        macwgscmecoymagu:
        if ($qeqooyuoiasweuck) {
            goto oumgmywcokuyaaky;
        }
        goto uuowysiecmaqiskc;
        ykcsckmiswouwaim:
        return $eqgoocgaqwqcimie;
        goto umsiwskkkuuqygqe;
        umsiwskkkuuqygqe:
    }
    
    public static function oqyuwccsuskiwgew($qeqooyuoiasweuck = null)
    {
        goto ycgoekuqouciwkom;
        qsyssqesmcoyuewk:
        wp_cache_delete($uusmaiomayssaecw);
        goto myyyikoweqcgoucw;
        ycgoekuqouciwkom:
        $uusmaiomayssaecw = self::symcgieuakksimmu()->cisyiemkeykgkomc();
        goto qowqygggoieokiiw;
        qowqygggoieokiiw:
        DecoratorOption::update($uusmaiomayssaecw, $qeqooyuoiasweuck);
        goto qsyssqesmcoyuewk;
        myyyikoweqcgoucw:
    }
    
    public static function myekoowckeqqeuyq($amakmumgguksgmum, $eqgoocgaqwqcimie, $qeqooyuoiasweuck = null) : bool
    {
        goto qmyeykyyqksyekuo;
        kkkoguowckoiqywi:
        $qeqooyuoiasweuck = self::mywwyegkuymookeg();
        goto quimoymcisyaqaug;
        camycossgaakcsiw:
        $qeqooyuoiasweuck[$amakmumgguksgmum] = $eqgoocgaqwqcimie;
        goto uaikkeuicmuuwccc;
        cewyikqkeycuswys:
        $qeqooyuoiasweuck = [];
        goto qmkooikkcycouowk;
        awsgaesauouewgmi:
        return DecoratorOption::update($uusmaiomayssaecw, $qeqooyuoiasweuck);
        goto owooskgowayymosm;
        cgkoamymiwyauswk:
        wp_cache_delete($uusmaiomayssaecw);
        goto awsgaesauouewgmi;
        quimoymcisyaqaug:
        yqewkyqauqqcyoyy:
        goto qgqgsigokaomqkqe;
        qgqgsigokaomqkqe:
        if ($qeqooyuoiasweuck) {
            goto aauewmowygwgwusw;
        }
        goto cewyikqkeycuswys;
        qmkooikkcycouowk:
        aauewmowygwgwusw:
        goto camycossgaakcsiw;
        qmyeykyyqksyekuo:
        if ($qeqooyuoiasweuck) {
            goto yqewkyqauqqcyoyy;
        }
        goto kkkoguowckoiqywi;
        uaikkeuicmuuwccc:
        $uusmaiomayssaecw = self::symcgieuakksimmu()->cisyiemkeykgkomc();
        goto cgkoamymiwyauswk;
        owooskgowayymosm:
    }
    
    public static function yceqggqwokesouww($uusmaiomayssaecw, $eqgoocgaqwqcimie, $qeqooyuoiasweuck = null)
    {
        goto uyiqkeoaoeesewkm;
        oucegyaesucoaqcs:
        self::myekoowckeqqeuyq($uusmaiomayssaecw, $eqgoocgaqwqcimie);
        goto nsqquyqqqiceasgu;
        nsqquyqqqiceasgu:
        omcwcawuuiowsyiy:
        goto eooqoiuqayocqmqi;
        sewqywuuoqaqgake:
        $amakmumgguksgmum = $eqgoocgaqwqcimie;
        goto oucegyaesucoaqcs;
        eooqoiuqayocqmqi:
        return $amakmumgguksgmum;
        goto gqmaowmomwymiiec;
        qekoeuskqquikiqa:
        if ($amakmumgguksgmum) {
            goto omcwcawuuiowsyiy;
        }
        goto sewqywuuoqaqgake;
        uyiqkeoaoeesewkm:
        $amakmumgguksgmum = self::eiwcuqigayigimak($uusmaiomayssaecw, null, $qeqooyuoiasweuck);
        goto qekoeuskqquikiqa;
        gqmaowmomwymiiec:
    }
    
    public static function eiwcuqigayigimak($uusmaiomayssaecw, $ggauoeuaesiymgee = false, $qeqooyuoiasweuck = null)
    {
        goto ocuoiqskoseeoski;
        soqckwiemegiyosg:
        gqsemgkumwsooguq:
        goto ugyyuyequeekycsm;
        aymokcegeqgeuqai:
        $eqgoocgaqwqcimie = $qeqooyuoiasweuck[$uusmaiomayssaecw];
        goto caqyccimywimqwgw;
        ugyyuyequeekycsm:
        return $eqgoocgaqwqcimie;
        goto cgwqkgmqqyaqaeos;
        osskoqmmegqyksau:
        $qeqooyuoiasweuck = self::mywwyegkuymookeg();
        goto wuaysaycmsuciagi;
        qcyamgiikmwuwsyu:
        $eqgoocgaqwqcimie = $ggauoeuaesiymgee;
        goto wsgseaeaeuemmick;
        ocuoiqskoseeoski:
        if ($qeqooyuoiasweuck) {
            goto kywsgoqgqmmmmucg;
        }
        goto osskoqmmegqyksau;
        wsgseaeaeuemmick:
        goto auuoqiusumqggosg;
        goto smisquuawsuaggqc;
        smisquuawsuaggqc:
        oekmmkgkgsuawkis:
        goto aymokcegeqgeuqai;
        ssammmsycciagimy:
        auuoqiusumqggosg:
        goto soqckwiemegiyosg;
        qqiomqmmgsgygyes:
        yimkweiuueksywey:
        goto goicgikimugciika;
        ewyywyaciesugmeu:
        goto gqsemgkumwsooguq;
        goto qqiomqmmgsgygyes;
        goicgikimugciika:
        if (isset($qeqooyuoiasweuck[$uusmaiomayssaecw])) {
            goto oekmmkgkgsuawkis;
        }
        goto qcyamgiikmwuwsyu;
        ugyeckwkgkiyiwqm:
        if (is_string($uusmaiomayssaecw)) {
            goto yimkweiuueksywey;
        }
        goto oykemeioosgeaqek;
        wuaysaycmsuciagi:
        kywsgoqgqmmmmucg:
        goto ugyeckwkgkiyiwqm;
        caqyccimywimqwgw:
        $eqgoocgaqwqcimie = $eqgoocgaqwqcimie === "\x6f\x6e" ? true : $eqgoocgaqwqcimie;
        goto ssammmsycciagimy;
        oykemeioosgeaqek:
        $eqgoocgaqwqcimie = $ggauoeuaesiymgee;
        goto ewyywyaciesugmeu;
        cgwqkgmqqyaqaeos:
    }
    
    public static function wcoqgwyekgsmiueo(array $qiouiwasaauyaaue, string $ymqmyyeuycgmigyo, int $gaeqamemwmwsyukm = 1) : array
    {
        goto ackussqqoyomekeg;
        wywkeewykggksckc:
        return $qiouiwasaauyaaue;
        goto yiksaemwukcmqoks;
        cmmckyaaioecwuse:
        if (!($qiouiwasaauyaaue && is_array($qiouiwasaauyaaue) && $isksgswsmmqgeqmo && is_array($isksgswsmmqgeqmo))) {
            goto gkmimeqyqisqsosw;
        }
        goto ayqcwceyiiosgcka;
        oeuquoqswksgymuw:
        amaeeaeauswgoqic:
        goto iyekaawoaqcqsssa;
        iyekaawoaqcqsssa:
        gkmimeqyqisqsosw:
        goto wywkeewykggksckc;
        ackussqqoyomekeg:
        $isksgswsmmqgeqmo = ManipulateArray::get($qiouiwasaauyaaue, $ymqmyyeuycgmigyo, []);
        goto cmmckyaaioecwuse;
        ayqcwceyiiosgcka:
        foreach ($isksgswsmmqgeqmo as $momcykaoccoymeig => $omkysikckkcieckq) {
            goto uqgkoksouqicqiiy;
            secykwwqaoeuywim:
            sweymqcmesceysqo:
            goto emoiiiemgaasikyg;
            igwsysyakwoosysi:
            iucqiqsagamegsmc:
            goto eeimuiikicqykmwa;
            kqkmsuoqweqqoiiq:
            if ($uusmaiomayssaecw) {
                goto qiockgemuekykiuy;
            }
            goto uimggymiocacgyky;
            emoiiiemgaasikyg:
            $uusmaiomayssaecw = ManipulateArray::get($omkysikckkcieckq, self::KEY);
            goto kqkmsuoqweqqoiiq;
            uimggymiocacgyky:
            $qiouiwasaauyaaue[$ymqmyyeuycgmigyo][$momcykaoccoymeig][self::KEY] = ManipulateString::uniqid();
            goto yguaqcewwsageswq;
            yguaqcewwsageswq:
            qiockgemuekykiuy:
            goto igwsysyakwoosysi;
            eeimuiikicqykmwa:
            qwacmyuwycyqmwkq:
            goto ogooawuumwuweeos;
            uqgkoksouqicqiiy:
            $omkysikckkcieckq = array_filter($omkysikckkcieckq);
            goto esyaossmykieskyg;
            esyaossmykieskyg:
            if (count($omkysikckkcieckq) >= $gaeqamemwmwsyukm) {
                goto sweymqcmesceysqo;
            }
            goto cwcsikiqeagwcocm;
            umcgmioomggsuigo:
            goto iucqiqsagamegsmc;
            goto secykwwqaoeuywim;
            cwcsikiqeagwcocm:
            unset($qiouiwasaauyaaue[$ymqmyyeuycgmigyo][$momcykaoccoymeig]);
            goto umcgmioomggsuigo;
            ogooawuumwuweeos:
        }
        goto oeuquoqswksgymuw;
        yiksaemwukcmqoks:
    }
    
    public function mmeqsuaqacwuogya($gcaqwmmqioouwccc)
    {
        return $gcaqwmmqioouwccc;
    }
    
    public function gcmaamyeggyiugae() : bool
    {
        $uqcooyiiyysckskk = $this->aeqcqgsamsqomowm();
        return $uqcooyiiyysckskk && $uqcooyiiyysckskk->imyagkswqcsocsoi();
    }
    
    public function eaiyegoagkgeowae() : bool
    {
        goto cscoykmeocmcwkkc;
        cwigquaouceygaas:
        if (!$uqcooyiiyysckskk) {
            goto wekseqwmumkkcsoc;
        }
        goto gykiuseauawoywsy;
        gaagiucqcsoauoye:
        wekseqwmumkkcsoc:
        goto cmcmwummuiemewaw;
        cmcmwummuiemewaw:
        return $this->cisyiemkeykgkomc() === ManipulateServer::get("\160\141\147\145");
        goto meqocakwgoyugmso;
        cscoykmeocmcwkkc:
        $uqcooyiiyysckskk = $this->aeqcqgsamsqomowm();
        goto cwigquaouceygaas;
        gykiuseauawoywsy:
        return $uqcooyiiyysckskk->csaueuycewaiuaay();
        goto gaagiucqcsoauoye;
        meqocakwgoyugmso:
    }
}
