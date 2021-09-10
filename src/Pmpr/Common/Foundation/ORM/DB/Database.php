<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b499786a1b             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\ORM\DB;

use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateString;
use Pmpr\Common\Foundation\ORM\DB\Traits\FieldTrait;
use Closure;
use Exception;
use Generator;
use Illuminate\Database\Capsule\Manager;
use Illuminate\Database\ConnectionInterface;
use Illuminate\Database\Query\Expression;
use Illuminate\Database\Query\Grammars\Grammar;
use Illuminate\Database\Query\Processors\Processor;
use Illuminate\Database\QueryException;

class Database extends Common implements ConnectionInterface
{
    use FieldTrait;
    
    protected $db = null;
    
    protected array $configs = [];
    
    protected ?Manager $manager = null;
    
    protected ?int $transactionCount = 0;
    
    public function __construct()
    {
        goto uckusgwkoycmkeam;
        mieoguuqiwqioeqa:
        parent::__construct();
        goto qosswumywsaeyqus;
        uckusgwkoycmkeam:
        global $wpdb;
        goto gscyiqmmegqmqcoe;
        gscyiqmmegqmqcoe:
        $this->db = $wpdb;
        goto mieoguuqiwqioeqa;
        qosswumywsaeyqus:
    }
    
    public function wwiwswsasquukoqs()
    {
        return $this->db;
    }
    
    public function amosaeggmeksgwea() : ?Manager
    {
        return $this->manager;
    }
    public function cymcyywycwkawmsi()
    {
        goto swicauyqusmgeccu;
        cuayqmasemsqsume:
        $this->manager = $eygsasmqycagyayw;
        goto igmawmwssyskqqag;
        maguoggkqamaiuag:
        $eygsasmqycagyayw = new Manager();
        goto icoiqskygugkgmkm;
        kocaieyauyiqmyiy:
        
        $eygsasmqycagyayw->addConnection($uiewakwqscemywuo);
        goto gcqssckowmywoesw;
        icoiqskygugkgmkm:
        $uiewakwqscemywuo = ["\144\x72\151\x76\145\x72" => "\x6d\171\x73\x71\x6c", "\150\157\163\164" => $ooggeikkseeqyyek->__get("\x64\x62\x68\x6f\163\x74"), "\144\141\164\x61\142\141\x73\145" => $ooggeikkseeqyyek->__get("\144\x62\x6e\141\x6d\x65"), "\x75\x73\x65\x72\x6e\x61\x6d\x65" => $ooggeikkseeqyyek->__get("\144\142\x75\163\x65\162"), "\x70\141\x73\163\167\x6f\162\144" => $ooggeikkseeqyyek->__get("\x64\142\x70\x61\163\163\x77\x6f\x72\x64"), "\x70\x6f\x72\164" => $ooggeikkseeqyyek->options, "\x63\x68\141\x72\163\145\x74" => $ooggeikkseeqyyek->charset, "\143\x6f\x6c\154\x61\164\x69\x6f\x6e" => $ooggeikkseeqyyek->collate, "\160\x72\145\x66\x69\170" => $ooggeikkseeqyyek->prefix];
        goto kocaieyauyiqmyiy;
        eekkcooqswqouoei:
        
        $eygsasmqycagyayw->setAsGlobal();
        goto cuayqmasemsqsume;
        swicauyqusmgeccu:
        $ooggeikkseeqyyek = $this->wwiwswsasquukoqs();
        goto maguoggkqamaiuag;
        gcqssckowmywoesw:
        
        $eygsasmqycagyayw->bootEloquent();
        goto eekkcooqswqouoei;
        igmawmwssyskqqag:
    }
    
    public function query() : Builder
    {
        goto iomwkkieqcswkkaw;
        eussqkkimciywios:
        $wgqamiqkugoqsmes = $this->yokcoiaqqaquwecc();
        goto ewsigoeswimiueqe;
        ewsigoeswimiueqe:
        return new Builder($this, $kooimksequwgsyqc, $wgqamiqkugoqsmes);
        goto gaskcgoeywuyukke;
        iomwkkieqcswkkaw:
        $kooimksequwgsyqc = $this->aqoymmcygkssqmmy();
        goto eussqkkimciywios;
        gaskcgoeywuyukke:
    }
    
    public function aakmagwggmkoiiyu() : ?string
    {
        return $this->aceaeommyuooiqge("\x6e\x61\155\145");
    }
    
    public function aqoymmcygkssqmmy() : Grammar
    {
        return new Grammar();
    }
    
    public function yokcoiaqqaquwecc() : Processor
    {
        return new Processor();
    }
    
    public function xoiwkmeymocuuwcq($ywmkwiwkosakssii)
    {
        return $this->wwiwswsasquukoqs()->insert_id;
    }
    
    public function tkgawykgecmsaeis() : ?array
    {
        return $this->configs;
    }
    
    public function aceaeommyuooiqge($omkysikckkcieckq = null)
    {
        return ManipulateArray::get($this->tkgawykgecmsaeis(), $omkysikckkcieckq);
    }
    
    public function uawwgkimmooamyay() : ?int
    {
        return $this->transactionCount;
    }
    
    public function iqekeywwkoksagke($gqgemcmoicmgaqie, $iykmscciaowcagqu = []) : array
    {
        goto gqaqamewqeaqwcia;
        sgkqgucguyccaaki:
        return (array) $sogksuscggsicmac;
        goto omuemegmkesqgwys;
        okuqsqaiwwiigmyu:
        $sogksuscggsicmac = $this->wwiwswsasquukoqs()->query($gmyoogwqukkgwiwk);
        goto ksiwgckusukisueg;
        gqaqamewqeaqwcia:
        $gmyoogwqukkgwiwk = $this->qyiiuyacuommoyso($gqgemcmoicmgaqie, $iykmscciaowcagqu);
        goto okuqsqaiwwiigmyu;
        ksiwgckusukisueg:
        $this->quauggogguqkokkk($sogksuscggsicmac, $gmyoogwqukkgwiwk, $iykmscciaowcagqu);
        goto sgkqgucguyccaaki;
        omuemegmkesqgwys:
    }
    
    private function quauggogguqkokkk($sogksuscggsicmac, $asiqcaccsgscgcyq, $iykmscciaowcagqu)
    {
        goto cmsiuimsiycomyay;
        cmsiuimsiycomyay:
        if (!($sogksuscggsicmac === false || $this->wwiwswsasquukoqs()->last_error)) {
            goto geyiosucqswaeasw;
        }
        goto qmqmskywcgiqgygm;
        ccgsycueagwegqeu:
        geyiosucqswaeasw:
        goto gmeiuoeewucukque;
        qmqmskywcgiqgygm:
        throw new QueryException($asiqcaccsgscgcyq, $iykmscciaowcagqu, new Exception($this->wwiwswsasquukoqs()->last_error));
        goto ccgsycueagwegqeu;
        gmeiuoeewucukque:
    }
    
    public function wcweamocuicuusky(string $uusmaiomayssaecw, $omkysikckkcieckq = null) : self
    {
        $this->configs[$uusmaiomayssaecw] = $omkysikckkcieckq;
        return $this;
    }
    
    private function qyiiuyacuommoyso($gqgemcmoicmgaqie, $iykmscciaowcagqu, $suckquwcuiuyiogc = false)
    {
        goto yqqseqskcqeqkacm;
        ugkwqaywmwqucoeo:
        $gqgemcmoicmgaqie = str_replace(["\45", "\77"], ["\x25\x25", "\x25\163"], $gqgemcmoicmgaqie);
        goto syisomgawcsqeemk;
        yqqseqskcqeqkacm:
        $gqgemcmoicmgaqie = str_replace("\x22", "\140", $gqgemcmoicmgaqie);
        goto ywokggauuiosegog;
        syisomgawcsqeemk:
        $gqgemcmoicmgaqie = vsprintf($gqgemcmoicmgaqie, $iykmscciaowcagqu);
        goto asoecuscmsyusmkg;
        ywokggauuiosegog:
        $iykmscciaowcagqu = $this->uooqikqsgykeymok($iykmscciaowcagqu);
        goto uoewiggumomegksg;
        sockocsycmkaeosg:
        $iykmscciaowcagqu = array_map(function ($moyaaaascoeowegu) {
            goto ceaamccscgcmqgka;
            ymucaguacemwsgsi:
            qmguoqeawegcoeoa:
            goto qiikwossequwiuom;
            ociesuicgmkekcue:
            goto ycecaauekkiqacuu;
            goto ymucaguacemwsgsi;
            igyesgemqesackws:
            $moyaaaascoeowegu = "\156\x75\154\154";
            goto wiaymoucakyaikii;
            qiikwossequwiuom:
            $moyaaaascoeowegu = "\x27" . esc_sql($moyaaaascoeowegu) . "\x27";
            goto gaouaiemokqqgssw;
            gaouaiemokqqgssw:
            ycecaauekkiqacuu:
            goto wqwmuuicoqigqwyc;
            wiaymoucakyaikii:
            sayqggaieocmskko:
            goto ociesuicgmkekcue;
            ceaamccscgcmqgka:
            if (is_string($moyaaaascoeowegu)) {
                goto qmguoqeawegcoeoa;
            }
            goto omumkeywqqogwwue;
            wqwmuuicoqigqwyc:
            return $moyaaaascoeowegu;
            goto oqgymyiwckkwueuw;
            omumkeywqqogwwue:
            if (!($moyaaaascoeowegu === null)) {
                goto sayqggaieocmskko;
            }
            goto igyesgemqesackws;
            oqgymyiwckkwueuw:
        }, $iykmscciaowcagqu);
        goto ugkwqaywmwqucoeo;
        kwasqmcyiswoaiuu:
        return $gqgemcmoicmgaqie;
        goto kiskwawumeiiieuk;
        uoewiggumomegksg:
        if (!$iykmscciaowcagqu) {
            goto qywkykqkeeuccoui;
        }
        goto sockocsycmkaeosg;
        asoecuscmsyusmkg:
        qywkykqkeeuccoui:
        goto kwasqmcyiswoaiuu;
        kiskwawumeiiieuk:
    }
    
    public function cokoiaeeomgssqgy(?string $aasascamegmwqmqk = null, $yuwymayicwwqiske = true) : ?string
    {
        goto awuwuuuagqysukku;
        emeeocqaisksyioq:
        oaqeoqsksuyyggmg:
        goto maggecymmmesqmqs;
        csaksaisgawusswg:
        kkmuuoscccmokkiw:
        goto ecgwgamiseokmise;
        maggecymmmesqmqs:
        $syeseoiyagmgumcy = $syeseoiyagmgumcy . ManipulateString::gumqicgiosoqweoy($aasascamegmwqmqk);
        goto csaksaisgawusswg;
        awuwuuuagqysukku:
        $syeseoiyagmgumcy = '';
        goto miugmimciywcgswm;
        mcqwuawosciucemq:
        $syeseoiyagmgumcy = $this->wwiwswsasquukoqs()->prefix;
        goto emeeocqaisksyioq;
        miugmimciywcgswm:
        if (!$aasascamegmwqmqk) {
            goto kkmuuoscccmokkiw;
        }
        goto aqekkeqmmewoyawu;
        aqekkeqmmewoyawu:
        if (!$yuwymayicwwqiske) {
            goto oaqeoqsksuyyggmg;
        }
        goto mcqwuawosciucemq;
        ecgwgamiseokmise:
        return $syeseoiyagmgumcy;
        goto qkiyyywwuiuackao;
        qkiyyywwuiuackao:
    }
    
    public function getPdo() : self
    {
        return $this;
    }
    
    public function raw($eqgoocgaqwqcimie) : Expression
    {
        return new Expression($eqgoocgaqwqcimie);
    }
    
    public function table($aasascamegmwqmqk, $aikcyecgesuiaacw = null) : Builder
    {
        $aasascamegmwqmqk = $this->cokoiaeeomgssqgy($aasascamegmwqmqk);
        
        return $this->query()->from($aasascamegmwqmqk);
    }
    
    public function insert($gqgemcmoicmgaqie, $iykmscciaowcagqu = []) : bool
    {
        
        return $this->statement($gqgemcmoicmgaqie, $iykmscciaowcagqu);
    }
    
    public function update($gqgemcmoicmgaqie, $iykmscciaowcagqu = []) : int
    {
        return $this->niiwccguwykyacek($gqgemcmoicmgaqie, $iykmscciaowcagqu);
    }
    
    public function delete($gqgemcmoicmgaqie, $iykmscciaowcagqu = []) : int
    {
        return $this->niiwccguwykyacek($gqgemcmoicmgaqie, $iykmscciaowcagqu);
    }
    
    public function statement($gqgemcmoicmgaqie, $iykmscciaowcagqu = []) : bool
    {
        $gmyoogwqukkgwiwk = $this->qyiiuyacuommoyso($gqgemcmoicmgaqie, $iykmscciaowcagqu, true);
        
        return $this->unprepared($gmyoogwqukkgwiwk);
    }
    
    public function affectingStatement($gqgemcmoicmgaqie, $iykmscciaowcagqu = []) : int
    {
        goto gyskcwykkyakeims;
        mcagemacuqyskogs:
        $this->quauggogguqkokkk($sogksuscggsicmac, $gmyoogwqukkgwiwk, $iykmscciaowcagqu);
        goto aamgqoqyyooimqkm;
        gyskcwykkyakeims:
        $gmyoogwqukkgwiwk = $this->qyiiuyacuommoyso($gqgemcmoicmgaqie, $iykmscciaowcagqu, true);
        goto ossakckwskyqusmm;
        aamgqoqyyooimqkm:
        return intval($sogksuscggsicmac);
        goto cimascmiesomqgqs;
        ossakckwskyqusmm:
        
        $sogksuscggsicmac = $this->wwiwswsasquukoqs()->query($gmyoogwqukkgwiwk);
        goto mcagemacuqyskogs;
        cimascmiesomqgqs:
    }
    
    public function select($gqgemcmoicmgaqie, $iykmscciaowcagqu = [], $ykwkqeocyaeasoqy = true) : array
    {
        goto easuiqiooiwgswmm;
        kuuawiosmkgqsscy:
        $this->quauggogguqkokkk($sogksuscggsicmac, $gqgemcmoicmgaqie, $iykmscciaowcagqu);
        goto kwocaqggwcksesce;
        saiuoomgskwgyeya:
        $sogksuscggsicmac = $this->wwiwswsasquukoqs()->get_results($gqgemcmoicmgaqie);
        goto kuuawiosmkgqsscy;
        easuiqiooiwgswmm:
        $gqgemcmoicmgaqie = $this->qyiiuyacuommoyso($gqgemcmoicmgaqie, $iykmscciaowcagqu);
        goto saiuoomgskwgyeya;
        kwocaqggwcksesce:
        return $sogksuscggsicmac;
        goto momuweiasiwskekw;
        momuweiasiwskekw:
    }
    
    public function cursor($gqgemcmoicmgaqie, $iykmscciaowcagqu = [], $ykwkqeocyaeasoqy = true)
    {
    }
    
    public function selectOne($gqgemcmoicmgaqie, $iykmscciaowcagqu = [], $ykwkqeocyaeasoqy = true)
    {
        goto qaewauyekqucciyc;
        bgakaasgwwygosyi:
        $sogksuscggsicmac = $this->wwiwswsasquukoqs()->get_row($gqgemcmoicmgaqie);
        goto aucwccaiqwsmyuaq;
        agyooskogigyayws:
        return $sogksuscggsicmac;
        goto iiiwsgameuomumgw;
        aucwccaiqwsmyuaq:
        $this->quauggogguqkokkk($sogksuscggsicmac, $gqgemcmoicmgaqie, $iykmscciaowcagqu);
        goto agyooskogigyayws;
        qaewauyekqucciyc:
        $gqgemcmoicmgaqie = $this->qyiiuyacuommoyso($gqgemcmoicmgaqie, $iykmscciaowcagqu);
        goto bgakaasgwwygosyi;
        iiiwsgameuomumgw:
    }
    
    public function unprepared($gqgemcmoicmgaqie) : bool
    {
        
        $sogksuscggsicmac = $this->wwiwswsasquukoqs()->query($gqgemcmoicmgaqie);
        return $sogksuscggsicmac === false || $this->wwiwswsasquukoqs()->last_error;
    }
    
    public function prepareBindings(array $iykmscciaowcagqu) : array
    {
        goto mmcikqikqecaeswu;
        wsqiqkiucakewgou:
        mcukocaaoyuugoeu:
        goto yaumwqeommqigswq;
        yaumwqeommqigswq:
        return $iykmscciaowcagqu;
        goto wiiqigwgyuiuksia;
        mmcikqikqecaeswu:
        $kooimksequwgsyqc = $this->aqoymmcygkssqmmy();
        goto ywsywoumuaykkeaa;
        ywsywoumuaykkeaa:
        foreach ($iykmscciaowcagqu as $uusmaiomayssaecw => $eqgoocgaqwqcimie) {
            goto mciumqyyossyiuyk;
            gsgyayuaekgyoumc:
            goto scockmiqikwwkqse;
            goto omemqagskckoeoog;
            omgcsmsikaggaooc:
            okycquokqoamsquy:
            goto wykuosegisygosiq;
            syykqmkiyoekqsek:
            scockmiqikwwkqse:
            goto aiqekkyauwswayyq;
            mciumqyyossyiuyk:
            
            if (is_bool($eqgoocgaqwqcimie)) {
                goto kssuqmsgmaaeqigw;
            }
            goto acaeigkmigikeuyu;
            kqyeukywmgismyaq:
            if (!$eqgoocgaqwqcimie instanceof \DateTime) {
                goto okycquokqoamsquy;
            }
            goto mukwsuuuqcgesmwc;
            sqmqwqeoygcmqcim:
            uwusswwekqcsisus:
            goto syykqmkiyoekqsek;
            aeuosggumiiwoesm:
            goto uwusswwekqcsisus;
            goto wyqmeyoaggwuioak;
            omemqagskckoeoog:
            egwgyekaiqomyeaa:
            goto aeuosggumiiwoesm;
            wykuosegisygosiq:
            goto egwgyekaiqomyeaa;
            goto ugikgkwuwmgymgus;
            wyqmeyoaggwuioak:
            kssuqmsgmaaeqigw:
            goto uyksacasqywyessc;
            uyksacasqywyessc:
            $iykmscciaowcagqu[$uusmaiomayssaecw] = intval($eqgoocgaqwqcimie);
            goto sqmqwqeoygcmqcim;
            acaeigkmigikeuyu:
            if (is_scalar($eqgoocgaqwqcimie)) {
                goto cgwokqwakqcmiieo;
            }
            goto kqyeukywmgismyaq;
            mukwsuuuqcgesmwc:
            
            
            
            
            $ocogsiouoiuuguym = $kooimksequwgsyqc->getDateFormat();
            goto cqeoguiqiymkyweo;
            cqeoguiqiymkyweo:
            
            $iykmscciaowcagqu[$uusmaiomayssaecw] = $eqgoocgaqwqcimie->format($ocogsiouoiuuguym);
            goto omgcsmsikaggaooc;
            ugikgkwuwmgymgus:
            cgwokqwakqcmiieo:
            goto gsgyayuaekgyoumc;
            aiqekkyauwswayyq:
        }
        goto wsqiqkiucakewgou;
        wiiqigwgyuiuksia:
    }
    
    public function transaction(Closure $ekiuyucoiagmscgy, $mogwwoaswuuykekc = 1)
    {
        
        $this->beginTransaction();
        try {
            goto mqoygcuqwacgycek;
            aiukiwqmikscoswm:
            return $icwicymcioeyeyek;
            goto mcmkqgkwyqoiikcq;
            mqoygcuqwacgycek:
            $icwicymcioeyeyek = $ekiuyucoiagmscgy();
            goto agyycikucwgmysee;
            agyycikucwgmysee:
            
            $this->commit();
            goto aiukiwqmikscoswm;
            mcmkqgkwyqoiikcq:
        } catch (Exception $iewosgggaueeyymg) {
            
            $this->rollBack();
            throw $iewosgggaueeyymg;
        }
    }
    
    public function beginTransaction()
    {
        goto gskacikgkwcuauko;
        kwiuqqwamsimqgme:
        $this->transactionCount++;
        goto qmegcmqemmywoqas;
        yyieomeeqycmikqw:
        if (!(false !== $ammuiskickemgqgc)) {
            goto ssyukuseoymackeo;
        }
        goto kwiuqqwamsimqgme;
        qmegcmqemmywoqas:
        ssyukuseoymackeo:
        goto giooasyeqwaaocea;
        gskacikgkwcuauko:
        
        $ammuiskickemgqgc = $this->unprepared("\123\x54\101\122\124\40\x54\122\101\x4e\123\101\x43\x54\x49\x4f\x4e\x3b");
        goto yyieomeeqycmikqw;
        giooasyeqwaaocea:
    }
    
    public function commit()
    {
        goto qgyoesyiasqimcoe;
        gsgkayokisiesciy:
        if (!(false !== $ammuiskickemgqgc)) {
            goto uueywyysiicuauem;
        }
        goto ascogkesqmuuaesq;
        askukaucmocewkgg:
        uueywyysiicuauem:
        goto kiemqsgcmouqscao;
        kkwqmewaksmokuqy:
        
        $ammuiskickemgqgc = $this->unprepared("\x43\x4f\115\115\111\124\73");
        goto gsgkayokisiesciy;
        kiemqsgcmouqscao:
        seieguyaaiqismgo:
        goto wssaaemscmmiomee;
        qgyoesyiasqimcoe:
        if (!($this->transactionCount >= 1)) {
            goto seieguyaaiqismgo;
        }
        goto kkwqmewaksmokuqy;
        ascogkesqmuuaesq:
        $this->transactionCount--;
        goto askukaucmocewkgg;
        wssaaemscmmiomee:
    }
    
    public function rollBack()
    {
        goto iusaeoimukymskgs;
        eaggoasiwogmquwc:
        if (!(false !== $ammuiskickemgqgc)) {
            goto meqmcgmksqiqcoyq;
        }
        goto meoweqcaaosoomeu;
        ywmoieqkigsykequ:
        meqmcgmksqiqcoyq:
        goto iaousaauoawkqkkg;
        asciaakaoygususy:
        
        $ammuiskickemgqgc = $this->unprepared("\122\x4f\114\114\x42\x41\x43\113\73");
        goto eaggoasiwogmquwc;
        iusaeoimukymskgs:
        if (!($this->transactionCount >= 1)) {
            goto euskosgaksmimgug;
        }
        goto asciaakaoygususy;
        meoweqcaaosoomeu:
        $this->transactionCount--;
        goto ywmoieqkigsykequ;
        iaousaauoawkqkkg:
        euskosgaksmimgug:
        goto kkwucaoumyayagcq;
        kkwucaoumyayagcq:
    }
    
    public function transactionLevel() : ?int
    {
        return $this->transactionCount;
    }
    
    public function pretend(Closure $ekiuyucoiagmscgy) : array
    {
        return [];
    }
    
    public function getDatabaseName()
    {
        return $this->wwiwswsasquukoqs()->__get("\144\x62\x6e\x61\155\x65");
    }
}
