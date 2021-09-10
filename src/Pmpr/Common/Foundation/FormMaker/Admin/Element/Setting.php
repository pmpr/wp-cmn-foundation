<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b1e8aa0c03             |
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
        goto dwoiwsiguwwggeeo;
        yqciowyyaucoysgy:
        $this->parentMenu = "\x6f\160\x74\151\x6f\156\x73\x2d\x67\x65\156\145\162\x61\x6c\x2e\160\x68\x70";
        goto woociiywkukyomca;
        dwoiwsiguwwggeeo:
        $this->type = "\x73\x65\x74\x74\151\156\147\x73";
        goto iwsammigwiwcoggi;
        woociiywkukyomca:
        iqakeowoosikouai:
        goto oigimmkyumckwick;
        iwsammigwiwcoggi:
        if ($this->cgugaaoykcyiomuk()) {
            goto iqakeowoosikouai;
        }
        goto yqciowyyaucoysgy;
        oigimmkyumckwick:
        parent::__construct();
        goto imqgamcocykmuweu;
        imqgamcocykmuweu:
    }
    
    public function cosqcmekuiigqywc(MetaTab $uqcooyiiyysckskk) : MetaTab
    {
        $uqcooyiiyysckskk->kkigeuaeguyueaem('')->ceiqwucmgawwmawo(__("\x53\141\166\145\x20\x43\150\x61\x6e\x67\145\x73", PR__CMN__FOUNDATION));
        return parent::cosqcmekuiigqywc($uqcooyiiyysckskk);
    }
    
    public function mwikyscisascoeea() : ?string
    {
        goto tgousgyiiaiaeack;
        wcsiocqmcgkyueoc:
        ggumyqmosmckemum:
        goto qoueskwwsaywasai;
        kuiqawwoeaeuemcy:
        if ($aokagokqyuysuksm) {
            goto ggumyqmosmckemum;
        }
        goto uoiawymwqmyiiosk;
        qoueskwwsaywasai:
        return $aokagokqyuysuksm;
        goto msmmwgagckyuccii;
        uoiawymwqmyiiosk:
        $aokagokqyuysuksm = "{$this->aakmagwggmkoiiyu()}\137{$this->gueasuouwqysmomu()}";
        goto wcsiocqmcgkyueoc;
        tgousgyiiaiaeack:
        $aokagokqyuysuksm = parent::mwikyscisascoeea();
        goto kuiqawwoeaeuemcy;
        msmmwgagckyuccii:
    }
    public function wigskegsqequoeks()
    {
        $this->qcsmikeggeemccuu("\165\x70\x64\x61\x74\145\x5f\x6f\160\164\151\x6f\x6e\137{$this->cisyiemkeykgkomc()}", [$this, "\157\x63\x71\x61\161\163\167\x6f\145\x79\163\x63\165\x6f\141\x6f"])->qcsmikeggeemccuu("\165\160\144\141\164\x65\137\x6f\x70\x74\151\157\156\x5f{$this->cisyiemkeykgkomc()}", [$this, "\x73\x63\155\x6d\x79\155\161\153\157\x79\x63\153\147\x6b\141\x6d"], 10, 2)->qcsmikeggeemccuu("\165\x70\x64\141\x74\145\137\163\x65\x74\x74\x69\156\147\137{$this->cisyiemkeykgkomc()}", [$this, "\x65\x69\x61\141\x63\145\x67\153\151\147\161\151\x77\x61\167\x67"], 10, 2);
        parent::wigskegsqequoeks();
    }
    public function kgquecmsgcouyaya()
    {
        $this->cecaguuoecmccuse("\147\x65\164\x5f{$this->cisyiemkeykgkomc()}", [$this, "\155\x79\167\x77\x79\x65\147\x6b\x75\171\155\x6f\157\x6b\x65\x67"], 10, 2)->cecaguuoecmccuse("\147\x65\164\137{$this->aakmagwggmkoiiyu()}\137\x73\145\164\164\x69\156\x67", [$this, "\x65\151\x77\143\165\161\x69\x67\141\x79\151\147\x69\155\x61\x6b"], 10, 2)->cecaguuoecmccuse("\160\x72\x65\x5f\165\x70\x64\141\x74\145\137\157\x70\164\151\x6f\156\x5f{$this->cisyiemkeykgkomc()}", [$this, "\x63\x69\141\147\143\157\x69\171\145\151\x6f\141\147\x67\163\x6f"], 50, 3)->cecaguuoecmccuse("\143\155\x62\62\x5f\x6f\x76\145\x72\162\151\144\x65\137\x6f\x70\164\x69\x6f\x6e\137\x67\145\164\x5f{$this->cisyiemkeykgkomc()}", [$this, "\155\155\x65\161\x73\x75\x61\x71\141\x63\x77\165\157\x67\x79\141"], 2, 1);
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
        goto ssqmoeeuysgacwme;
        uqscqwswiqsgsygk:
        DecoratorOption::add($uusmaiomayssaecw, $ggauoeuaesiymgee);
        goto smusacowuccegeqc;
        ywmqqmgacioekiim:
        if (!($ggauoeuaesiymgee && is_array($ggauoeuaesiymgee))) {
            goto yuuokwoimsawcwwq;
        }
        goto uqscqwswiqsgsygk;
        aokwwkysaawymggq:
        
        $uusmaiomayssaecw = $this->cisyiemkeykgkomc();
        goto ygcicamkgawkwygs;
        yckwoyawyoyskqea:
        if (!($ggauoeuaesiymgee && !self::mywwyegkuymookeg())) {
            goto euamqcukmwkycmcs;
        }
        goto aokwwkysaawymggq;
        qkouugqimqywiiag:
        euamqcukmwkycmcs:
        goto qsgikaecsueeawcg;
        smusacowuccegeqc:
        yuuokwoimsawcwwq:
        goto qkouugqimqywiiag;
        ssqmoeeuysgacwme:
        $ggauoeuaesiymgee = $this->gecwckciuqqukcko();
        goto yckwoyawyoyskqea;
        ygcicamkgawkwygs:
        $ggauoeuaesiymgee = (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\144\x65\146\141\x75\x6c\x74\x5f\163\145\164\x74\151\156\x67\x73", false), $ggauoeuaesiymgee, $this->cisyiemkeykgkomc());
        goto ywmqqmgacioekiim;
        qsgikaecsueeawcg:
    }
    
    public function ciagcoiyeioaggso($eqgoocgaqwqcimie, $msqkueqksqwmskak, $omkysikckkcieckq)
    {
        goto kiuemcsmyusiamwy;
        aoeqqmeqcaeksamm:
        wgqaaiuiaegacqug:
        goto qougaquyiyoekgme;
        qougaquyiyoekgme:
        return $eqgoocgaqwqcimie;
        goto akgccuiekaowwmeq;
        kiuemcsmyusiamwy:
        if (!($eqgoocgaqwqcimie !== $msqkueqksqwmskak && maybe_serialize($eqgoocgaqwqcimie) !== maybe_serialize($msqkueqksqwmskak))) {
            goto wgqaaiuiaegacqug;
        }
        goto kummicswwkwwkyys;
        kummicswwkwwkyys:
        $eqgoocgaqwqcimie = $this->iasywwkguyauiywu($eqgoocgaqwqcimie, $msqkueqksqwmskak);
        goto wwkqmuawuugoiwey;
        wwkqmuawuugoiwey:
        $eqgoocgaqwqcimie = $this->sscegwueamckwmcy("\142\145\146\157\x72\145\x5f\x75\x70\144\141\x74\145\137{$this->cisyiemkeykgkomc()}", $eqgoocgaqwqcimie, $msqkueqksqwmskak);
        goto aoeqqmeqcaeksamm;
        akgccuiekaowwmeq:
    }
    
    public function iasywwkguyauiywu($eqgoocgaqwqcimie, $msqkueqksqwmskak)
    {
        return $eqgoocgaqwqcimie;
    }
    
    public function scmmymqkoyckgkam($msqkueqksqwmskak, $uwomkgseoiegeume)
    {
        $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x73\x61\166\x65\144", false), $msqkueqksqwmskak, $uwomkgseoiegeume);
    }
    public function ocqaqswoeyscuoao()
    {
        goto koeamciygeeqewcy;
        koeamciygeeqewcy:
        $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\142\x65\146\157\162\x65\137\162\145\155\x6f\166\x65\x5f\143\141\x63\x68\x65\137\160\141\164\x68"));
        goto mukioeqsayqwycgu;
        wiuiqmkuuuscscoi:
        $this->kcciqwskewsuaemk()->remove($skacuygeqykiwiwy);
        goto cyiukscucygcyiow;
        cyiukscucygcyiow:
        $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\141\x66\x74\x65\x72\137\x72\x65\155\x6f\x76\x65\x5f\143\x61\x63\150\145\x5f\160\141\164\150"));
        goto keguueuuiqyowgge;
        keguueuuiqyowgge:
        ywamicmegakyokoq:
        goto iggmoakswausicmq;
        mukioeqsayqwycgu:
        if (!($skacuygeqykiwiwy = ManipulateSetting::cmaecekuqkwmemms(self::PR__CACHE__PATH))) {
            goto ywamicmegakyokoq;
        }
        goto wiuiqmkuuuscscoi;
        iggmoakswausicmq:
    }
    
    public static function mywwyegkuymookeg()
    {
        goto myigiaaggwcoyqmo;
        kaaosukiekmqcuas:
        if ($usymaaaeawgmyqig !== false) {
            goto emqaiyugeiukyqiw;
        }
        goto oakqwukqiowuwgse;
        oakqwukqiowuwgse:
        
        $ksaameoqigiaoigg = DecoratorOption::get($eiockasigaaayoem);
        goto makqoouaaoyeckwu;
        ciaocyoemcwmgays:
        $usymaaaeawgmyqig = wp_cache_get($eiockasigaaayoem);
        goto kaaosukiekmqcuas;
        ywqgaoiyisukooog:
        $ksaameoqigiaoigg = $usymaaaeawgmyqig;
        goto uicakiyqmsqkkeiq;
        uicakiyqmsqkkeiq:
        gkqycsqguoaycowm:
        goto yuakcmiumkmoseoy;
        kkwciycuekqewqak:
        emqaiyugeiukyqiw:
        goto ywqgaoiyisukooog;
        makqoouaaoyeckwu:
        wp_cache_set($eiockasigaaayoem, $ksaameoqigiaoigg);
        goto wciqgiyuqauosqsm;
        yuakcmiumkmoseoy:
        return $ksaameoqigiaoigg;
        goto amicgsowmwecywga;
        myigiaaggwcoyqmo:
        $eiockasigaaayoem = self::symcgieuakksimmu()->cisyiemkeykgkomc();
        goto ciaocyoemcwmgays;
        wciqgiyuqauosqsm:
        goto gkqycsqguoaycowm;
        goto kkwciycuekqewqak;
        amicgsowmwecywga:
    }
    
    public static function eiaacegkigqiwawg($uusmaiomayssaecw, $eqgoocgaqwqcimie, $qeqooyuoiasweuck = null)
    {
        goto scywagkqaaqkqyuq;
        mqomgaeswiquiasi:
        kcgsqowasqeuaoyo:
        goto oumgmywcokuyaaky;
        macwgscmecoymagu:
        self::oqyuwccsuskiwgew($qeqooyuoiasweuck);
        goto uuowysiecmaqiskc;
        scywagkqaaqkqyuq:
        if ($qeqooyuoiasweuck) {
            goto kcgsqowasqeuaoyo;
        }
        goto aeoskcqgogoeieqq;
        aeoskcqgogoeieqq:
        $qeqooyuoiasweuck = self::mywwyegkuymookeg();
        goto mqomgaeswiquiasi;
        oumgmywcokuyaaky:
        $qeqooyuoiasweuck[$uusmaiomayssaecw] = $eqgoocgaqwqcimie;
        goto macwgscmecoymagu;
        uuowysiecmaqiskc:
        return $eqgoocgaqwqcimie;
        goto tiqqwmquwowcwsko;
        tiqqwmquwowcwsko:
    }
    
    public static function oqyuwccsuskiwgew($qeqooyuoiasweuck = null)
    {
        goto oyiakwoikeckycqe;
        oyiakwoikeckycqe:
        $uusmaiomayssaecw = self::symcgieuakksimmu()->cisyiemkeykgkomc();
        goto uyomoigikmsymiku;
        uyomoigikmsymiku:
        DecoratorOption::update($uusmaiomayssaecw, $qeqooyuoiasweuck);
        goto ykcsckmiswouwaim;
        ykcsckmiswouwaim:
        wp_cache_delete($uusmaiomayssaecw);
        goto umsiwskkkuuqygqe;
        umsiwskkkuuqygqe:
    }
    
    public static function myekoowckeqqeuyq($amakmumgguksgmum, $eqgoocgaqwqcimie, $qeqooyuoiasweuck = null) : bool
    {
        goto qsyssqesmcoyuewk;
        qmkooikkcycouowk:
        return DecoratorOption::update($uusmaiomayssaecw, $qeqooyuoiasweuck);
        goto camycossgaakcsiw;
        qmyeykyyqksyekuo:
        $qeqooyuoiasweuck = [];
        goto kkkoguowckoiqywi;
        yqewkyqauqqcyoyy:
        ycgoekuqouciwkom:
        goto aauewmowygwgwusw;
        cewyikqkeycuswys:
        wp_cache_delete($uusmaiomayssaecw);
        goto qmkooikkcycouowk;
        quimoymcisyaqaug:
        $qeqooyuoiasweuck[$amakmumgguksgmum] = $eqgoocgaqwqcimie;
        goto qgqgsigokaomqkqe;
        aauewmowygwgwusw:
        if ($qeqooyuoiasweuck) {
            goto qowqygggoieokiiw;
        }
        goto qmyeykyyqksyekuo;
        qsyssqesmcoyuewk:
        if ($qeqooyuoiasweuck) {
            goto ycgoekuqouciwkom;
        }
        goto myyyikoweqcgoucw;
        qgqgsigokaomqkqe:
        $uusmaiomayssaecw = self::symcgieuakksimmu()->cisyiemkeykgkomc();
        goto cewyikqkeycuswys;
        kkkoguowckoiqywi:
        qowqygggoieokiiw:
        goto quimoymcisyaqaug;
        myyyikoweqcgoucw:
        $qeqooyuoiasweuck = self::mywwyegkuymookeg();
        goto yqewkyqauqqcyoyy;
        camycossgaakcsiw:
    }
    
    public static function yceqggqwokesouww($uusmaiomayssaecw, $eqgoocgaqwqcimie, $qeqooyuoiasweuck = null)
    {
        goto cgkoamymiwyauswk;
        omcwcawuuiowsyiy:
        self::myekoowckeqqeuyq($uusmaiomayssaecw, $eqgoocgaqwqcimie);
        goto uyiqkeoaoeesewkm;
        qekoeuskqquikiqa:
        return $amakmumgguksgmum;
        goto sewqywuuoqaqgake;
        cgkoamymiwyauswk:
        $amakmumgguksgmum = self::eiwcuqigayigimak($uusmaiomayssaecw, null, $qeqooyuoiasweuck);
        goto awsgaesauouewgmi;
        owooskgowayymosm:
        $amakmumgguksgmum = $eqgoocgaqwqcimie;
        goto omcwcawuuiowsyiy;
        uyiqkeoaoeesewkm:
        uaikkeuicmuuwccc:
        goto qekoeuskqquikiqa;
        awsgaesauouewgmi:
        if ($amakmumgguksgmum) {
            goto uaikkeuicmuuwccc;
        }
        goto owooskgowayymosm;
        sewqywuuoqaqgake:
    }
    
    public static function eiwcuqigayigimak($uusmaiomayssaecw, $ggauoeuaesiymgee = false, $qeqooyuoiasweuck = null)
    {
        goto oekmmkgkgsuawkis;
        qqiomqmmgsgygyes:
        nsqquyqqqiceasgu:
        goto goicgikimugciika;
        osskoqmmegqyksau:
        goto kywsgoqgqmmmmucg;
        goto wuaysaycmsuciagi;
        wuaysaycmsuciagi:
        gqmaowmomwymiiec:
        goto ugyeckwkgkiyiwqm;
        gqsemgkumwsooguq:
        if (is_string($uusmaiomayssaecw)) {
            goto gqmaowmomwymiiec;
        }
        goto ocuoiqskoseeoski;
        wsgseaeaeuemmick:
        eooqoiuqayocqmqi:
        goto smisquuawsuaggqc;
        ugyeckwkgkiyiwqm:
        if (isset($qeqooyuoiasweuck[$uusmaiomayssaecw])) {
            goto nsqquyqqqiceasgu;
        }
        goto oykemeioosgeaqek;
        smisquuawsuaggqc:
        kywsgoqgqmmmmucg:
        goto aymokcegeqgeuqai;
        ocuoiqskoseeoski:
        $eqgoocgaqwqcimie = $ggauoeuaesiymgee;
        goto osskoqmmegqyksau;
        ewyywyaciesugmeu:
        goto eooqoiuqayocqmqi;
        goto qqiomqmmgsgygyes;
        oykemeioosgeaqek:
        $eqgoocgaqwqcimie = $ggauoeuaesiymgee;
        goto ewyywyaciesugmeu;
        goicgikimugciika:
        $eqgoocgaqwqcimie = $qeqooyuoiasweuck[$uusmaiomayssaecw];
        goto qcyamgiikmwuwsyu;
        qcyamgiikmwuwsyu:
        $eqgoocgaqwqcimie = $eqgoocgaqwqcimie === "\x6f\x6e" ? true : $eqgoocgaqwqcimie;
        goto wsgseaeaeuemmick;
        yimkweiuueksywey:
        oucegyaesucoaqcs:
        goto gqsemgkumwsooguq;
        auuoqiusumqggosg:
        $qeqooyuoiasweuck = self::mywwyegkuymookeg();
        goto yimkweiuueksywey;
        oekmmkgkgsuawkis:
        if ($qeqooyuoiasweuck) {
            goto oucegyaesucoaqcs;
        }
        goto auuoqiusumqggosg;
        aymokcegeqgeuqai:
        return $eqgoocgaqwqcimie;
        goto caqyccimywimqwgw;
        caqyccimywimqwgw:
    }
    
    public static function wcoqgwyekgsmiueo(array $qiouiwasaauyaaue, string $ymqmyyeuycgmigyo, int $gaeqamemwmwsyukm = 1) : array
    {
        goto igwsysyakwoosysi;
        eeimuiikicqykmwa:
        if (!($qiouiwasaauyaaue && is_array($qiouiwasaauyaaue) && $isksgswsmmqgeqmo && is_array($isksgswsmmqgeqmo))) {
            goto yguaqcewwsageswq;
        }
        goto ogooawuumwuweeos;
        gkmimeqyqisqsosw:
        ssammmsycciagimy:
        goto ackussqqoyomekeg;
        ackussqqoyomekeg:
        yguaqcewwsageswq:
        goto cmmckyaaioecwuse;
        igwsysyakwoosysi:
        $isksgswsmmqgeqmo = ManipulateArray::get($qiouiwasaauyaaue, $ymqmyyeuycgmigyo, []);
        goto eeimuiikicqykmwa;
        cmmckyaaioecwuse:
        return $qiouiwasaauyaaue;
        goto ayqcwceyiiosgcka;
        ogooawuumwuweeos:
        foreach ($isksgswsmmqgeqmo as $momcykaoccoymeig => $omkysikckkcieckq) {
            goto qwacmyuwycyqmwkq;
            emoiiiemgaasikyg:
            amaeeaeauswgoqic:
            goto kqkmsuoqweqqoiiq;
            iucqiqsagamegsmc:
            goto amaeeaeauswgoqic;
            goto uqgkoksouqicqiiy;
            kqkmsuoqweqqoiiq:
            soqckwiemegiyosg:
            goto uimggymiocacgyky;
            qwacmyuwycyqmwkq:
            $omkysikckkcieckq = array_filter($omkysikckkcieckq);
            goto qiockgemuekykiuy;
            umcgmioomggsuigo:
            $qiouiwasaauyaaue[$ymqmyyeuycgmigyo][$momcykaoccoymeig][self::KEY] = ManipulateString::uniqid();
            goto secykwwqaoeuywim;
            secykwwqaoeuywim:
            ugyyuyequeekycsm:
            goto emoiiiemgaasikyg;
            cwcsikiqeagwcocm:
            if ($uusmaiomayssaecw) {
                goto ugyyuyequeekycsm;
            }
            goto umcgmioomggsuigo;
            sweymqcmesceysqo:
            unset($qiouiwasaauyaaue[$ymqmyyeuycgmigyo][$momcykaoccoymeig]);
            goto iucqiqsagamegsmc;
            qiockgemuekykiuy:
            if (count($omkysikckkcieckq) >= $gaeqamemwmwsyukm) {
                goto cgwqkgmqqyaqaeos;
            }
            goto sweymqcmesceysqo;
            esyaossmykieskyg:
            $uusmaiomayssaecw = ManipulateArray::get($omkysikckkcieckq, self::KEY);
            goto cwcsikiqeagwcocm;
            uqgkoksouqicqiiy:
            cgwqkgmqqyaqaeos:
            goto esyaossmykieskyg;
            uimggymiocacgyky:
        }
        goto gkmimeqyqisqsosw;
        ayqcwceyiiosgcka:
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
        goto iyekaawoaqcqsssa;
        cscoykmeocmcwkkc:
        return $this->cisyiemkeykgkomc() === ManipulateServer::get("\160\141\x67\x65");
        goto cwigquaouceygaas;
        yiksaemwukcmqoks:
        return $uqcooyiiyysckskk->csaueuycewaiuaay();
        goto wekseqwmumkkcsoc;
        wywkeewykggksckc:
        if (!$uqcooyiiyysckskk) {
            goto oeuquoqswksgymuw;
        }
        goto yiksaemwukcmqoks;
        iyekaawoaqcqsssa:
        $uqcooyiiyysckskk = $this->aeqcqgsamsqomowm();
        goto wywkeewykggksckc;
        wekseqwmumkkcsoc:
        oeuquoqswksgymuw:
        goto cscoykmeocmcwkkc;
        cwigquaouceygaas:
    }
}
