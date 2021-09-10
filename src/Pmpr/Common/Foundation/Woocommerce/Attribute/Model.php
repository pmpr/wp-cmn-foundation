<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b499786a1b             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Woocommerce\Attribute;

use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;
use Pmpr\Common\Foundation\ORM\DB\Model as BaseClass;
use stdClass;

class Model extends BaseClass
{
    const ATTRIBUTE_ID = "\141\164\164\x72\x69\x62\165\x74\145\x5f\x69\x64";
    public $timestamps = false;
    public function ckgmycmaukqgkosk()
    {
        goto ywswgoesmiwgckcu;
        ywswgoesmiwgckcu:
        $quowyokcwswmuois = self::akuociswqmoigkas();
        goto ummiwuqqisqgwoco;
        myikgqcgseikimwa:
        parent::ckgmycmaukqgkosk();
        goto ooyyuaswogikyggu;
        ummiwuqqisqgwoco:
        $this->oyeskqayoscwciem()->usuqmwksoeaayaig("\141\164\164\x72\x69\x62\165\164\x65\x5f\x6d\145\164\x61")->muuwuqssqkaieqge(__("\x41\164\x74\162\x69\x62\x75\164\145\x20\x4d\145\x74\141\163", PR__CMN__FOUNDATION))->guiaswksukmgageq(__("\101\x74\x74\162\x69\x62\165\164\145\x20\x4d\x65\x74\141", PR__CMN__FOUNDATION))->myysgyqcumekoueo()->okgmqaeuaeymaocm($quowyokcwswmuois);
        goto myikgqcgseikimwa;
        ooyyuaswogikyggu:
    }
    
    public function eucukwckumgiyyww($oyuikeusicgqgwak = []) : array
    {
        return [$this->mekgiwmysqksocmy(self::ATTRIBUTE_ID)->gswweykyogmsyawy(__("\101\164\164\x72\x69\x62\165\x74\145", PR__CMN__FOUNDATION)), $this->ymuegqgyuagyucws(self::META_KEY)->gswweykyogmsyawy(__("\115\x65\164\x61\40\x4b\x65\x79", PR__CMN__FOUNDATION)), $this->ymuegqgyuagyucws(self::META_VALUE)->gswweykyogmsyawy(__("\115\x65\164\141\40\x56\x61\x6c\165\x65", PR__CMN__FOUNDATION))];
    }
    
    public function aawsuyueaaimeqsm($ymkomoccmymcoiea, $uusmaiomayssaecw, $eqgoocgaqwqcimie)
    {
        goto ugwqwcgoswkkwcee;
        ycomuqussgiacuom:
        cigcsyiesymkuywu:
        goto yuuyqoyguaqsswey;
        wwiasiiquqqmmqay:
        $icwicymcioeyeyek = [self::META_KEY => $uusmaiomayssaecw, self::META_VALUE => $eqgoocgaqwqcimie, self::ATTRIBUTE_ID => $ymkomoccmymcoiea];
        goto iwkwesmeiywuuugk;
        akymcmmokgskeqiu:
        ManipulateArray::set($icwicymcioeyeyek, [self::META_VALUE => maybe_serialize($eqgoocgaqwqcimie)]);
        goto vgggsmmgmwumikmc;
        iwkwesmeiywuuugk:
        kgmwmmiemqggaqeq:
        goto akymcmmokgskeqiu;
        wmyagwwmquqeyyok:
        keigessgsgawiyyo:
        goto mocauoaugmiuacuu;
        swmkkiiauusieuqw:
        if (!(ManipulateArray::get($icwicymcioeyeyek, self::META_VALUE) === $eqgoocgaqwqcimie)) {
            goto keigessgsgawiyyo;
        }
        goto sgqaaocqgayiigos;
        mocauoaugmiuacuu:
        goto kgmwmmiemqggaqeq;
        goto eoawekcguswgyykc;
        kgigsakiwsqqioim:
        $icwicymcioeyeyek = $this->ggckwgeqwseoemwg($ymkomoccmymcoiea, $uusmaiomayssaecw);
        goto aosmakasyommmioc;
        ugwqwcgoswkkwcee:
        if (!($ymkomoccmymcoiea && $uusmaiomayssaecw)) {
            goto cigcsyiesymkuywu;
        }
        goto kgigsakiwsqqioim;
        sgqaaocqgayiigos:
        
        return;
        goto wmyagwwmquqeyyok;
        aosmakasyommmioc:
        if (!$icwicymcioeyeyek) {
            goto saueosiwcgqsmgmk;
        }
        goto swmkkiiauusieuqw;
        vgggsmmgmwumikmc:
        $this->gscuuyuyauokoyuo((array) $icwicymcioeyeyek);
        goto ycomuqussgiacuom;
        eoawekcguswgyykc:
        saueosiwcgqsmgmk:
        goto wwiasiiquqqmmqay;
        yuuyqoyguaqsswey:
    }
    
    public function ggckwgeqwseoemwg($ymkomoccmymcoiea, $uusmaiomayssaecw)
    {
        goto iwigaaoiqyugwacm;
        iwigaaoiqyugwacm:
        $mksyucucyswaukig = $this->oqomcmyuuakigusk([self::META_KEY => $uusmaiomayssaecw, self::ATTRIBUTE_ID => $ymkomoccmymcoiea]);
        goto yqismiumwaaeqgwu;
        kaueiekkeciiaswy:
        $mksyucucyswaukig = ManipulateArray::set($mksyucucyswaukig, [self::META_VALUE => $eqgoocgaqwqcimie]);
        goto iieykwekyukgsias;
        yqismiumwaaeqgwu:
        if (!$mksyucucyswaukig) {
            goto uqekawymqmyaqaao;
        }
        goto wusuosaiqosakcqq;
        iieykwekyukgsias:
        uqekawymqmyaqaao:
        goto yiuwqcqesuysmegs;
        yiuwqcqesuysmegs:
        return $mksyucucyswaukig;
        goto mauoymckskucuemc;
        wusuosaiqosakcqq:
        $eqgoocgaqwqcimie = maybe_unserialize(ManipulateArray::get($mksyucucyswaukig, self::META_VALUE));
        goto kaueiekkeciiaswy;
        mauoymckskucuemc:
    }
    
    public function eukesgmuogimqwaa($ymkomoccmymcoiea, $uusmaiomayssaecw)
    {
        $mksyucucyswaukig = $this->ggckwgeqwseoemwg($ymkomoccmymcoiea, $uusmaiomayssaecw);
        return ManipulateArray::get($mksyucucyswaukig, self::META_VALUE);
    }
}
