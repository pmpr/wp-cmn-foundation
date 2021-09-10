<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b30261f503             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\ORM\DB;

use Illuminate\Database\Connection;
use Pmpr\Common\Foundation\Manipulate\ManipulateSetting;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateString;
use Pmpr\Common\Foundation\ORM\DB\Field\Field;
use Pmpr\Common\Foundation\ORM\DB\Field\Foreign;
use Exception;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Schema\Builder as SchemaBuilder;
use Illuminate\Database\Schema\ColumnDefinition;
use Pmpr\Common\Foundation\ORM\DB\Traits\FieldTrait;
use Pmpr\Common\Foundation\ORM\Register;

class Updater extends Common
{
    use FieldTrait;
    
    protected array $schema = [];
    
    protected ?Database $database = null;
    
    protected ?Register $register = null;
    
    protected ?SchemaBuilder $builder = null;
    public function wigskegsqequoeks()
    {
        $this->qcsmikeggeemccuu("\141\144\x6d\x69\x6e\x5f\151\x6e\151\164", [$this, "\x63\165\143\x71\147\167\155\157\x73\145\x71\141\153\147\157\145"]);
        parent::wigskegsqequoeks();
    }
    
    public function ysgiswuowuciwqaq() : ?Connection
    {
        goto uecycmeaoqgqcomm;
        uecycmeaoqgqcomm:
        $mgcmmwqwguicsews = null;
        goto siiwoymcomqegmya;
        cgqmyikikqgmksgg:
        gquyeowwseuycuoq:
        goto qioeuukaqkcsiiwk;
        siiwoymcomqegmya:
        if (!($this->skckwsgymkimyuwo() && $this->skckwsgymkimyuwo()->amosaeggmeksgwea())) {
            goto gquyeowwseuycuoq;
        }
        goto wkokasiqoeycyukq;
        wkokasiqoeycyukq:
        
        $mgcmmwqwguicsews = $this->skckwsgymkimyuwo()->amosaeggmeksgwea()->getConnection();
        goto cgqmyikikqgmksgg;
        qioeuukaqkcsiiwk:
        return $mgcmmwqwguicsews;
        goto cycwiouaowuswkmk;
        cycwiouaowuswkmk:
    }
    
    public function cokoiaeeomgssqgy() : ?string
    {
        return $this->skckwsgymkimyuwo()->cokoiaeeomgssqgy($this->oyeskqayoscwciem()->aakmagwggmkoiiyu(), false);
    }
    
    public function gqaysymikgeawkqa() : ?SchemaBuilder
    {
        goto sguosuigwgwkikgs;
        ycyueqmkqyycmaus:
        
        $this->builder = $this->ysgiswuowuciwqaq()->getSchemaBuilder();
        goto wgkamcmqescgqcyw;
        sguosuigwgwkikgs:
        if (!(!$this->builder && $this->ysgiswuowuciwqaq())) {
            goto aoiwocgacociakoy;
        }
        goto ycyueqmkqyycmaus;
        wgkamcmqescgqcyw:
        aoiwocgacociakoy:
        goto amkeeqecmwsmwqma;
        amkeeqecmwsmwqma:
        return $this->builder;
        goto vkmscascaoysaqoc;
        vkmscascaoysaqoc:
    }
    
    public function skckwsgymkimyuwo() : ?Database
    {
        return $this->database;
    }
    
    public function uwyqgmcuomgeccgy(?Database $wyeookkecoymuauy) : self
    {
        $this->database = $wyeookkecoymuauy;
        return $this;
    }
    
    public function oyeskqayoscwciem() : ?Register
    {
        return $this->register;
    }
    
    public function yuaecocyyyqqgsyw(Register $yyksucsgisomecgg) : self
    {
        $this->register = $yyksucsgisomecgg;
        return $this;
    }
    
    public function aceaeommyuooiqge($omkysikckkcieckq) : ?string
    {
        goto ioqmgaeuiicymgky;
        gkoaywyuyqemyiqw:
        
        $uiewakwqscemywuo = $this->ysgiswuowuciwqaq()->getConfig($omkysikckkcieckq);
        goto gcgsyyiismkwoyck;
        ioqmgaeuiicymgky:
        $uiewakwqscemywuo = null;
        goto ywmcuouqguawueqm;
        gcgsyyiismkwoyck:
        soskeqqausokwugo:
        goto aswikmsouwkequca;
        aswikmsouwkequca:
        return $uiewakwqscemywuo;
        goto ycgsmkkioyqqawyk;
        ywmcuouqguawueqm:
        if (!($omkysikckkcieckq && $this->ysgiswuowuciwqaq())) {
            goto soskeqqausokwugo;
        }
        goto gkoaywyuyqemyiqw;
        ycgsmkkioyqqawyk:
    }
    public function cucqgwmoseqakgoe()
    {
        try {
            goto qywueycgouwamkso;
            qaykqsyoyscaqsce:
            $iygikoguosecwqgw ? $this->update($ikgwqyuyckaewsow, $aasascamegmwqmqk) : $this->create($ikgwqyuyckaewsow, $aasascamegmwqmqk);
            goto cuqwswgmwuwmgkwe;
            qywueycgouwamkso:
            $ikgwqyuyckaewsow = $this->oyeskqayoscwciem()->aeosueemgsygqese();
            goto wecgakiimqymkmiy;
            wecgakiimqymkmiy:
            $aasascamegmwqmqk = $this->cokoiaeeomgssqgy();
            goto uggisigeswwyqmqi;
            uggisigeswwyqmqi:
            
            $iygikoguosecwqgw = $this->gqaysymikgeawkqa()->hasTable($aasascamegmwqmqk);
            goto qaykqsyoyscaqsce;
            cuqwswgmwuwmgkwe:
        } catch (Exception $wgaoewqkwgomoaai) {
        }
    }
    
    public function update($ikgwqyuyckaewsow, $cgomysauusagiwqu)
    {
        goto emyuskcwqyscewue;
        ioocowswsiqoyaai:
        sort($uwomkgseoiegeume);
        goto csuwemcoeyqemwks;
        akieywkiweasukyw:
        ManipulateArray::gyciysooayoqiisg($wkkweuacukumqmya, ["\151\144"]);
        goto qoqgokiaagioccqg;
        qmugciukukckmeiu:
        iceuoqgyqsmywqqq:
        goto akieyasekuwqeugc;
        wcmsamoqaogoouey:
        if (!(json_encode($uwomkgseoiegeume) != json_encode($wkkweuacukumqmya))) {
            goto iceuoqgyqsmywqqq;
        }
        goto oyciiqiqoqkgoqec;
        qyguqmkmyqeyqaac:
        qgoaooycwyiyycoa:
        goto igeoagaweewiscas;
        qckqeqqcoawmwwqw:
        foreach ($wkkweuacukumqmya as $qgoqiacsiccwoawi) {
            goto kcesecosoiwocymi;
            umosyyqqcuqiscco:
            omagsowousaeaiou:
            goto qauuogkoosmuggas;
            qauuogkoosmuggas:
            qkygewgkycsuawgm:
            goto wwcougcmsuqogqyc;
            ckyamgmuoswcaiak:
            $uwqmqcmssaeieiqa[] = ["\x61\143\164\x69\x6f\156" => "\104\x52\x4f\x50", "\143\157\x6c\x75\x6d\x6e" => $qgoqiacsiccwoawi];
            goto umosyyqqcuqiscco;
            kcesecosoiwocymi:
            if (in_array($qgoqiacsiccwoawi, $uwomkgseoiegeume)) {
                goto omagsowousaeaiou;
            }
            goto ckyamgmuoswcaiak;
            wwcougcmsuqogqyc:
        }
        goto yqywgkymmowyggqa;
        akieyasekuwqeugc:
        eugisyswkecacase:
        goto gqwcuusyiggisuok;
        oyciiqiqoqkgoqec:
        if (!ManipulateSetting::esoowymaimwcuecq()) {
            goto mcguyegywqyasmii;
        }
        goto qckqeqqcoawmwwqw;
        wygeysociiyqokyk:
        foreach ($ikgwqyuyckaewsow as $aokagokqyuysuksm => $aiowsaccomcoikus) {
            goto gcykaeaisuqiqyqi;
            swkeqqkqioecmgia:
            
            $uwqmqcmssaeieiqa[] = ["\x61\143\x74\151\x6f\x6e" => "\x41\104\x44", "\x63\157\154\165\x6d\156" => $aokagokqyuysuksm];
            goto yomuicigicmugscy;
            gcykaeaisuqiqyqi:
            if (!($aiowsaccomcoikus instanceof Field && !in_array($aiowsaccomcoikus->mwikyscisascoeea(), $wkkweuacukumqmya))) {
                goto igosooeimygcmois;
            }
            goto swkeqqkqioecmgia;
            cyssqgqaoaasmogc:
            okacwwwygceucqsg:
            goto geqwascicmuguaom;
            yomuicigicmugscy:
            igosooeimygcmois:
            goto cyssqgqaoaasmogc;
            geqwascicmuguaom:
        }
        goto qyguqmkmyqeyqaac;
        alomqucgmacieuoa:
        if (!$cgomysauusagiwqu) {
            goto eugisyswkecacase;
        }
        goto yiskaoskyyiswkki;
        yiskaoskyyiswkki:
        
        $wkkweuacukumqmya = $this->gqaysymikgeawkqa()->getColumnListing($cgomysauusagiwqu);
        goto akieywkiweasukyw;
        qoqgokiaagioccqg:
        foreach ($ikgwqyuyckaewsow as $ymqmyyeuycgmigyo => $aiowsaccomcoikus) {
            goto mwmwmswiueocaeug;
            ukugqakgsqqmgege:
            ManipulateArray::unset($ikgwqyuyckaewsow, $ymqmyyeuycgmigyo);
            goto awcgiyqmoemqumeg;
            awcgiyqmoemqumeg:
            oaimckymswkqoysq:
            goto gcgwqksqskumiumq;
            gcgwqksqskumiumq:
            ysykemiscamquoce:
            goto emiugswuagoacakq;
            mwmwmswiueocaeug:
            if (!($aiowsaccomcoikus instanceof Foreign && $aiowsaccomcoikus->iueigwuckeaswyuu())) {
                goto oaimckymswkqoysq;
            }
            goto ukugqakgsqqmgege;
            emiugswuagoacakq:
        }
        goto oeukmyymqaaakksa;
        oogmmeccymcuwwac:
        mcguyegywqyasmii:
        goto wygeysociiyqokyk;
        ccqagygkoaagksyw:
        $aasascamegmwqmqk = $this->cokoiaeeomgssqgy();
        goto oguigickaoqigcoi;
        yqywgkymmowyggqa:
        cywmgwogisiyymoi:
        goto oogmmeccymcuwwac;
        oeukmyymqaaakksa:
        twusqqkmqgswisei:
        goto ookeyiumgkqqucia;
        csuwemcoeyqemwks:
        sort($wkkweuacukumqmya);
        goto wcmsamoqaogoouey;
        emyuskcwqyscewue:
        $uwqmqcmssaeieiqa = [];
        goto alomqucgmacieuoa;
        ookeyiumgkqqucia:
        $uwomkgseoiegeume = array_keys($ikgwqyuyckaewsow);
        goto ioocowswsiqoyaai;
        oguigickaoqigcoi:
        
        $this->gqaysymikgeawkqa()->table($aasascamegmwqmqk, $ekiuyucoiagmscgy);
        goto qmugciukukckmeiu;
        igeoagaweewiscas:
        $ekiuyucoiagmscgy = function (Blueprint &$aasascamegmwqmqk) use($uwqmqcmssaeieiqa, $ikgwqyuyckaewsow) {
            foreach ($uwqmqcmssaeieiqa as $ocyscigwmouqaiia) {
                goto emuckswusmmeuwma;
                sswmkkcyawawqwwg:
                switch ($aiamqeawckcsuaou) {
                    case "\x41\x44\x44":
                    case "\x4d\117\104\x49\x46\131":
                        goto mumeawggkmqsowae;
                        kwcyggeukmgacqsy:
                        $aiowsaccomcoikus = $ikgwqyuyckaewsow[$qgoqiacsiccwoawi];
                        goto isqokqgukyemmqcg;
                        ecimugmwcawqmyaa:
                        goto okaiokeeaqccisaq;
                        goto msieagoikksumcwa;
                        isqokqgukyemmqcg:
                        if (!$aiowsaccomcoikus instanceof Field) {
                            goto eecyiiwsqomoggmq;
                        }
                        goto gemuuqmegqkkgeua;
                        gemuuqmegqkkgeua:
                        $aasascamegmwqmqk = $this->gqeeyaqcuukysmes($aasascamegmwqmqk, $aiowsaccomcoikus, $aiamqeawckcsuaou === "\115\x4f\104\111\106\x59");
                        goto yeiawaisoceoysau;
                        kyiewmuguyyccsca:
                        ckaggwgwsyowuuem:
                        goto ecimugmwcawqmyaa;
                        mumeawggkmqsowae:
                        if (!isset($ikgwqyuyckaewsow[$qgoqiacsiccwoawi])) {
                            goto ckaggwgwsyowuuem;
                        }
                        goto kwcyggeukmgacqsy;
                        yeiawaisoceoysau:
                        eecyiiwsqomoggmq:
                        goto kyiewmuguyyccsca;
                        msieagoikksumcwa:
                    case "\101\x44\104\x20\x49\x4e\104\105\130":
                    case "\x44\x52\x4f\x50\40\111\x4e\x44\105\130":
                        goto imwcikaiagkakiic;
                        uooisauooikkciom:
                        if (!($aiamqeawckcsuaou == "\101\104\x44\40\111\116\104\105\130")) {
                            goto ygywowuyoygiiqaq;
                        }
                        goto ymkoykouaqiusygo;
                        ymkoykouaqiusygo:
                        
                        $aasascamegmwqmqk->index($qgoqiacsiccwoawi);
                        goto eeoiyiuccooeigmk;
                        imwcikaiagkakiic:
                        
                        $aasascamegmwqmqk->dropIndex($qgoqiacsiccwoawi);
                        goto uooisauooikkciom;
                        eeoiyiuccooeigmk:
                        ygywowuyoygiiqaq:
                        goto owkyiywsooiwewgw;
                        owkyiywsooiwewgw:
                        goto okaiokeeaqccisaq;
                        goto wqyymgoekecmskmm;
                        wqyymgoekecmskmm:
                    case "\104\x52\117\120":
                        
                        $aasascamegmwqmqk->dropColumn($qgoqiacsiccwoawi);
                        goto okaiokeeaqccisaq;
                }
                goto kaocmesokyiikyci;
                kaocmesokyiikyci:
                ugseakwywkuwgyug:
                goto yikyagqossasyqcu;
                emuckswusmmeuwma:
                $qgoqiacsiccwoawi = $ocyscigwmouqaiia["\143\x6f\x6c\x75\155\x6e"];
                goto cgyikucmysgcmweu;
                yikyagqossasyqcu:
                okaiokeeaqccisaq:
                goto agwsusimqmoesgck;
                agwsusimqmoesgck:
                yoeqaicysswwgkmm:
                goto kqiakyymyiosoeia;
                cgyikucmysgcmweu:
                $aiamqeawckcsuaou = $ocyscigwmouqaiia["\x61\143\164\151\157\x6e"];
                goto sswmkkcyawawqwwg;
                kqiakyymyiosoeia:
            }
            qgyeyyagaeyoequw:
        };
        goto ccqagygkoaagksyw;
        gqwcuusyiggisuok:
    }
    
    public function create($ikgwqyuyckaewsow, $ymqmyyeuycgmigyo)
    {
        $this->gqaysymikgeawkqa()->create($ymqmyyeuycgmigyo, function (Blueprint &$aasascamegmwqmqk) use($ikgwqyuyckaewsow) {
            goto qogyssukouuesqis;
            agwyiymkkwmywcsw:
            $aasascamegmwqmqk->charset = $this->aceaeommyuooiqge("\x63\x68\141\162\163\x65\x74");
            goto qkeyoeyiuqeyicqa;
            egmauuemqqqqsgic:
            if ($aasascamegmwqmqk->charset) {
                goto aouauysuwimgygie;
            }
            goto agwyiymkkwmywcsw;
            qkeyoeyiuqeyicqa:
            aouauysuwimgygie:
            goto mgkaweokcicgiegg;
            wgeqwaisweikegck:
            $aasascamegmwqmqk->collation = $this->aceaeommyuooiqge("\x63\x6f\154\x6c\x61\164\151\157\x6e");
            goto ogaqcigmoyoqcsws;
            ogaqcigmoyoqcsws:
            ikoaokuwokyiigsu:
            goto egmauuemqqqqsgic;
            ukcoymqsgmcwokoq:
            sqkmkmcmocigewua:
            goto degewusuggmqqeso;
            qogyssukouuesqis:
            
            $aasascamegmwqmqk->bigIncrements(self::ID);
            goto kkoukeoyauekomau;
            mgkaweokcicgiegg:
            foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) {
                $aasascamegmwqmqk = $this->gqeeyaqcuukysmes($aasascamegmwqmqk, $aiowsaccomcoikus);
                kquqgyygaeiwkeko:
            }
            goto ukcoymqsgmcwokoq;
            kkoukeoyauekomau:
            if ($aasascamegmwqmqk->collation) {
                goto ikoaokuwokyiigsu;
            }
            goto wgeqwaisweikegck;
            degewusuggmqqeso:
        });
    }
    
    public function gqeeyaqcuukysmes(Blueprint $aasascamegmwqmqk, Field $aiowsaccomcoikus, $vkgsqsqqqgyaqkog = false) : Blueprint
    {
        goto quowmcomwmsmugqe;
        qwwmqqkoeuywmqys:
        ywyceqcyssuuyauc:
        goto soqakmcacqiqamku;
        qwsmwwskogygagea:
        $qgciuiagkkguykgs = ManipulateString::snake2camel($sqeykgyoooqysmca);
        goto saoickmcegceesyw;
        qiggceewmyagkisq:
        if (!$aiowsaccomcoikus->oikqausqaykqkmqi()) {
            goto qcgyuksgqucyquwi;
        }
        goto yaieemqskkgmcqou;
        ciksycqiaaueqaaq:
        
        $keuuiqywyuiuegkq->charset($guuwoyaeoeeaauug);
        goto ecoygmauwycmweyq;
        aqyweyyyygygswmy:
        
        $keuuiqywyuiuegkq->unsigned();
        goto awwyuikkmaaomkqc;
        ekykiumoyeyamsew:
        goemggymkikoquwi:
        goto caccouegecmukqci;
        gammkicacakosigu:
        
        $keuuiqywyuiuegkq->unique();
        goto qkusmocauegwwqwy;
        qkusmocauegwwqwy:
        
        $aasascamegmwqmqk->unique($ymqmyyeuycgmigyo);
        goto qwwmqqkoeuywmqys;
        yayicayasmkmsemm:
        
        $keuuiqywyuiuegkq->change();
        goto qcgekwgksmkoamik;
        osouwwksqimikqqo:
        return $aasascamegmwqmqk;
        goto icsukicuomwmqiyc;
        kiwacoqesuqmyiiu:
        mogweaaaqocouiug:
        goto aimwoikqsqkyicsu;
        meueuqeagkwkoiuk:
        if (!($kokmwkcqkgkewiuw = $aiowsaccomcoikus->yuwwmewqqauckiky())) {
            goto uokwiwsewewgcocy;
        }
        goto cseucimaukwaskwk;
        quumuskukkcuuciu:
        if (!method_exists($aasascamegmwqmqk, $qgciuiagkkguykgs)) {
            goto eosiakwgiemwwqwy;
        }
        goto iiwuqoagoqgmwwiq;
        iiwuqoagoqgmwwiq:
        $keuuiqywyuiuegkq = null;
        goto esewmcieucesaqcw;
        auakugikcequsiia:
        if ($aiowsaccomcoikus->yseywyqacmugimme()) {
            goto qyeomiwmooookysu;
        }
        goto igsweakykqomoqgi;
        owkgksuymewqqiwu:
        if (!$aiowsaccomcoikus->qumigiaaeieaemgy()) {
            goto gesaagokeamiwuws;
        }
        goto aqyweyyyygygswmy;
        sgqackwokosksyua:
        aywsyyewoswacqqy:
        goto kiwacoqesuqmyiiu;
        oeyoiicmckkgoyqg:
        uckqwisqmyeuegei:
        goto owkgksuymewqqiwu;
        semwcosqeukmgoey:
        
        $keuuiqywyuiuegkq->default($ggauoeuaesiymgee);
        goto oeyoiicmckkgoyqg;
        cseucimaukwaskwk:
        
        $keuuiqywyuiuegkq->collation($kokmwkcqkgkewiuw);
        goto kucymsiiugmiooyo;
        awwyuikkmaaomkqc:
        gesaagokeamiwuws:
        goto imquocywcscomayo;
        imcseqowgomyokwi:
        if (!(($ggauoeuaesiymgee = $aiowsaccomcoikus->oiswysuiioecsaae()) !== false)) {
            goto uckqwisqmyeuegei;
        }
        goto semwcosqeukmgoey;
        imquocywcscomayo:
        if (!$aiowsaccomcoikus->kweqqkiwiugikyam()) {
            goto ywyceqcyssuuyauc;
        }
        goto gammkicacakosigu;
        caccouegecmukqci:
        eosiakwgiemwwqwy:
        goto osouwwksqimikqqo;
        cmqmcaowowcccgka:
        qcgyuksgqucyquwi:
        goto imcseqowgomyokwi;
        ogwmeoaswuqwamim:
        
        $keuuiqywyuiuegkq->nullable(true);
        goto kimwcesmkuqqyamq;
        kimwcesmkuqqyamq:
        oeoyiakocyacqsys:
        goto cegokyqcmuuwyoey;
        ycqcgaauyqmkwskc:
        $sqeykgyoooqysmca = $aiowsaccomcoikus->gueasuouwqysmomu();
        goto gkaayykiiqqogeiw;
        yaieemqskkgmcqou:
        
        $keuuiqywyuiuegkq->autoIncrement();
        goto cmqmcaowowcccgka;
        aimwoikqsqkyicsu:
        if (!$keuuiqywyuiuegkq instanceof ColumnDefinition) {
            goto goemggymkikoquwi;
        }
        goto qiggceewmyagkisq;
        qcgekwgksmkoamik:
        osamucgweicwoiqy:
        goto ekykiumoyeyamsew;
        saoickmcegceesyw:
        $sqeykgyoooqysmca = strtoupper($sqeykgyoooqysmca);
        goto quumuskukkcuuciu;
        gkaayykiiqqogeiw:
        $ykiwomimkkuiigoq = $aiowsaccomcoikus->qamkswcgsoeggmau();
        goto qwsmwwskogygagea;
        igsweakykqomoqgi:
        
        $keuuiqywyuiuegkq->nullable(false);
        goto kqkcowkuqsuemmmc;
        cegokyqcmuuwyoey:
        if (!$vkgsqsqqqgyaqkog) {
            goto osamucgweicwoiqy;
        }
        goto yayicayasmkmsemm;
        soqakmcacqiqamku:
        if (!($guuwoyaeoeeaauug = $aiowsaccomcoikus->ogmguwgoqkqkkisa())) {
            goto gucokiskmccmsaac;
        }
        goto ciksycqiaaueqaaq;
        caeiwemymyceqqei:
        qyeomiwmooookysu:
        goto ogwmeoaswuqwamim;
        kucymsiiugmiooyo:
        uokwiwsewewgcocy:
        goto auakugikcequsiia;
        quowmcomwmsmugqe:
        $ymqmyyeuycgmigyo = $aiowsaccomcoikus->mwikyscisascoeea();
        goto ycqcgaauyqmkwskc;
        kqkcowkuqsuemmmc:
        goto oeoyiakocyacqsys;
        goto caeiwemymyceqqei;
        ecoygmauwycmweyq:
        gucokiskmccmsaac:
        goto meueuqeagkwkoiuk;
        esewmcieucesaqcw:
        switch ($sqeykgyoooqysmca) {
            case "\112\123\x4f\116":
            case "\101\122\x52\x41\131":
                
                $keuuiqywyuiuegkq = $aasascamegmwqmqk->json($ymqmyyeuycgmigyo);
                goto mogweaaaqocouiug;
            case "\106\x4f\122\105\111\107\x4e":
                goto eseyciuwmwyauuio;
                qkeogqcekgawsgwe:
                
                $keuuiqywyuiuegkq->on($koegqoagisewcica);
                goto qseiiaweiykcwacy;
                uikqgasygyaeqcac:
                $this->create([self::geqyygqiwiqusekc($usymcioagieycusu . self::_ID)->qkwyekmiceaogwci(false), self::geqyygqiwiqusekc($wkwywcemusswkgwk . self::_ID)->qkwyekmiceaogwci(false)], $this->skckwsgymkimyuwo()->cokoiaeeomgssqgy("{$yuwymayicwwqiske}{$usymcioagieycusu}\x5f{$wkwywcemusswkgwk}", false));
                goto gsiegqomuuccaoos;
                owssugkggmiascii:
                if (!($smgycasaqmgcaekq = $aiowsaccomcoikus->giqekaueqsgsmkgo())) {
                    goto qmawgkeuyyqwcmok;
                }
                goto mqcgsiaawwkqmksi;
                kygqagmyyqysywkm:
                
                $keuuiqywyuiuegkq = $aasascamegmwqmqk->foreign($ymqmyyeuycgmigyo);
                goto aqakqumsuimkkkus;
                kkyumyewcymikswk:
                if (!$aiowsaccomcoikus->iueigwuckeaswyuu()) {
                    goto uemgoaamkymwuiko;
                }
                goto ayeysmcoemkcsegm;
                cwccggguqewowygo:
                $gsmssqouaueqkeui = $aiowsaccomcoikus->uecyuoauykiqqkey()::symcgieuakksimmu();
                goto csoecqymkecmuueu;
                yeecswicmoyiqssi:
                
                $keuuiqywyuiuegkq->references($ykqcceqiqygieeks);
                goto oqiqyekweaomiwgy;
                kewsuqsoqkyikkis:
                if (!($ykqcceqiqygieeks = $aiowsaccomcoikus->syccewqoeggkkgke())) {
                    goto cyomeoyuoqywoysa;
                }
                goto yeecswicmoyiqssi;
                csoecqymkecmuueu:
                if (!$gsmssqouaueqkeui instanceof Model) {
                    goto goaaoqkgsieiyuqm;
                }
                goto iyaawicgsuuoykiq;
                mqcgsiaawwkqmksi:
                
                $keuuiqywyuiuegkq->onDelete($smgycasaqmgcaekq);
                goto wgicusccasmuiosy;
                gsiegqomuuccaoos:
                goaaoqkgsieiyuqm:
                goto kcieymewycqwegis;
                aqakqumsuimkkkus:
                if (!($koegqoagisewcica = $aiowsaccomcoikus->miosasgcmguoamem())) {
                    goto yqaqgsyaqomgoowq;
                }
                goto qkeogqcekgawsgwe;
                ugomsuwwuqsskuqc:
                suycyuwkgakgikqw:
                goto skeyqsaqsiwgiyog;
                wgicusccasmuiosy:
                qmawgkeuyyqwcmok:
                goto oaqqykskqqqqsqem;
                ksiuacaiaiauywae:
                uemgoaamkymwuiko:
                goto mqcoyamukmaoqwmw;
                skeqeeuuemswqgwu:
                $yuwymayicwwqiske = $this->oyeskqayoscwciem()->ogqgmqymcwsqikme();
                goto uikqgasygyaeqcac;
                kcieymewycqwegis:
                wqiwmousomaigmgm:
                goto swqkecoseauacwio;
                qseiiaweiykcwacy:
                yqaqgsyaqomgoowq:
                goto kewsuqsoqkyikkis;
                yoeoiuuuqakicgam:
                
                $keuuiqywyuiuegkq->onUpdate($muegsmmicsqsgucm);
                goto yuyyeiiewiuogceo;
                ammqgccmiuwcaeuq:
                $wkwywcemusswkgwk = $gsmssqouaueqkeui->oyeskqayoscwciem()->aiqioscoyukqgsgw();
                goto skeqeeuuemswqgwu;
                yuyyeiiewiuogceo:
                mmgqsmogqmouuskw:
                goto ugomsuwwuqsskuqc;
                eseyciuwmwyauuio:
                if (!$aiowsaccomcoikus instanceof Foreign) {
                    goto suycyuwkgakgikqw;
                }
                goto kkyumyewcymikswk;
                oaqqykskqqqqsqem:
                if (!($muegsmmicsqsgucm = $aiowsaccomcoikus->ucqugkkuiooayqie())) {
                    goto mmgqsmogqmouuskw;
                }
                goto yoeoiuuuqakicgam;
                mqcoyamukmaoqwmw:
                
                $aasascamegmwqmqk->bigInteger($ymqmyyeuycgmigyo)->unsigned();
                goto kygqagmyyqysywkm;
                swqkecoseauacwio:
                return $aasascamegmwqmqk;
                goto ksiuacaiaiauywae;
                ayeysmcoemkcsegm:
                if (!$aiowsaccomcoikus->ygswmewosceowmya()) {
                    goto wqiwmousomaigmgm;
                }
                goto cwccggguqewowygo;
                iyaawicgsuuoykiq:
                $usymcioagieycusu = $this->oyeskqayoscwciem()->aiqioscoyukqgsgw();
                goto ammqgccmiuwcaeuq;
                oqiqyekweaomiwgy:
                cyomeoyuoqywoysa:
                goto owssugkggmiascii;
                skeyqsaqsiwgiyog:
                goto mogweaaaqocouiug;
                goto awwgggeiaceyecco;
                awwgggeiaceyecco:
            case "\123\x45\124":
            case "\105\116\x55\x4d":
                goto oemkgkauqekgkumy;
                oemkgkauqekgkumy:
                $qiouiwasaauyaaue = $aiowsaccomcoikus->gkwkqmwweiawigae();
                goto iuoayeiykmokiiys;
                mswucuuigmosimuo:
                goto mogweaaaqocouiug;
                goto ayuwkwsuioumscca;
                qiaaqckmooiayuae:
                $keuuiqywyuiuegkq = $aasascamegmwqmqk->{$qgciuiagkkguykgs}($ymqmyyeuycgmigyo, $qiouiwasaauyaaue);
                goto mswucuuigmosimuo;
                ygegasgiwgmswaog:
                ayeqwsqywosymiwu:
                goto qiaaqckmooiayuae;
                iuoayeiykmokiiys:
                if (!ManipulateArray::wuoqgcwmkicakygs($qiouiwasaauyaaue)) {
                    goto ayeqwsqywosymiwu;
                }
                goto mmmgeukkswewyuoa;
                mmmgeukkswewyuoa:
                $qiouiwasaauyaaue = array_keys($qiouiwasaauyaaue);
                goto ygegasgiwgmswaog;
                ayuwkwsuioumscca:
            case "\106\114\117\101\x54":
            case "\x44\117\125\x42\x4c\x45":
            case "\x44\x45\x43\111\115\101\114":
                $keuuiqywyuiuegkq = $aasascamegmwqmqk->{$qgciuiagkkguykgs}($ymqmyyeuycgmigyo, $ykiwomimkkuiigoq, $aiowsaccomcoikus->siamswkmsqckqgeu());
                goto mogweaaaqocouiug;
            case "\124\x49\x4d\x45":
            case "\104\101\124\105\124\x49\115\105":
            case "\x54\x49\115\105\123\x54\x41\115\x50":
                $keuuiqywyuiuegkq = $aasascamegmwqmqk->{$qgciuiagkkguykgs}($ymqmyyeuycgmigyo, 0);
                goto mogweaaaqocouiug;
            case "\103\x48\x41\x52":
            case "\123\124\122\111\x4e\x47":
            case "\x56\101\122\x43\x48\101\122":
                goto agicooogqyeyoyqi;
                wcuqgoiokweuwycq:
                goto mogweaaaqocouiug;
                goto caskecmuwociuumq;
                osoukeawsoyqmwgo:
                $keuuiqywyuiuegkq = $aasascamegmwqmqk->{$qgciuiagkkguykgs}($ymqmyyeuycgmigyo);
                goto wesooeakucoqmisw;
                ykgkuccgawoyquga:
                $keuuiqywyuiuegkq = $aasascamegmwqmqk->{$qgciuiagkkguykgs}($ymqmyyeuycgmigyo, $ykiwomimkkuiigoq);
                goto cecoqgqcckqoouwy;
                cecoqgqcckqoouwy:
                ecomecoqggyssmsk:
                goto wcuqgoiokweuwycq;
                wesooeakucoqmisw:
                goto ecomecoqggyssmsk;
                goto cmwaakkwwqameeec;
                agicooogqyeyoyqi:
                if ($ykiwomimkkuiigoq && $ykiwomimkkuiigoq > 0) {
                    goto gswoagoguesomwyc;
                }
                goto osoukeawsoyqmwgo;
                cmwaakkwwqameeec:
                gswoagoguesomwyc:
                goto ykgkuccgawoyquga;
                caskecmuwociuumq:
            default:
                $keuuiqywyuiuegkq = $aasascamegmwqmqk->{$qgciuiagkkguykgs}($ymqmyyeuycgmigyo);
                goto mogweaaaqocouiug;
        }
        goto sgqackwokosksyua;
        icsukicuomwmqiyc:
    }
}
