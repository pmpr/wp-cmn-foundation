<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613bb98fa102d             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation;

use Pmpr\Common\Foundation\Container\Container;
use Pmpr\Common\Foundation\Decorator\DecoratorUser;
use Pmpr\Common\Foundation\Manipulate\ManipulateFormat;
use Pmpr\Common\Foundation\Manipulate\ManipulateUser;
use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateBootstrap;
use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateHTML;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;

class Notice extends Container
{
    const NOTICE_FIELD = 'notice_messages_list';
    const NOTICE_INFO = 'info';
    const NOTICE_ERROR = 'error';
    const NOTICE_WARNING = 'warning';
    const NOTICE_SUCCESS = 'success';
    public function wigskegsqequoeks()
    {
        $this->qcsmikeggeemccuu('render_notices', [$this, 'render'])->qcsmikeggeemccuu('admin_notices', [$this, 'waimweasuiemkmee']);
        parent::wigskegsqequoeks();
    }
    
    public static function info($uamcoiueqaamsqma, $aokagokqyuysuksm = null)
    {
        self::ycyucwoysmwkgiui($uamcoiueqaamsqma, self::NOTICE_INFO, $aokagokqyuysuksm);
    }
    
    public static function iswcokucwmiosiaq($uamcoiueqaamsqma, $aokagokqyuysuksm = null)
    {
        self::ycyucwoysmwkgiui($uamcoiueqaamsqma, self::NOTICE_ERROR, $aokagokqyuysuksm);
    }
    
    public static function eumukgqciqgksuiq($uamcoiueqaamsqma, $aokagokqyuysuksm = null)
    {
        self::ycyucwoysmwkgiui($uamcoiueqaamsqma, self::NOTICE_WARNING, $aokagokqyuysuksm);
    }
    
    public static function kigowwqauiumummw($uamcoiueqaamsqma, $aokagokqyuysuksm = null)
    {
        self::ycyucwoysmwkgiui($uamcoiueqaamsqma, self::NOTICE_SUCCESS, $aokagokqyuysuksm);
    }
    
    public function get($aokagokqyuysuksm)
    {
        return ManipulateArray::get($this->kasiqqyyaswsgics(), $aokagokqyuysuksm, null);
    }
    
    public function kasiqqyyaswsgics()
    {
        if (DecoratorUser::ksgkoukcicwkkaum()) {
            $megmggkiokqkcwou = ManipulateUser::igawqaomowicuayw(self::NOTICE_FIELD);
        } else {
            $megmggkiokqkcwou = ManipulateArray::get($_COOKIE, self::NOTICE_FIELD, []);
            if ($megmggkiokqkcwou) {
                $megmggkiokqkcwou = json_decode(stripslashes($megmggkiokqkcwou), true);
            }
        }
        return $megmggkiokqkcwou;
    }
    
    public function remove($aokagokqyuysuksm)
    {
        $wumguikkgaigkoee = $this->kasiqqyyaswsgics();
        if ($wumguikkgaigkoee) {
            ManipulateArray::unset($wumguikkgaigkoee, $aokagokqyuysuksm);
            if (DecoratorUser::ksgkoukcicwkkaum()) {
                ManipulateUser::ksmqawcowkmegigw(self::NOTICE_FIELD, $wumguikkgaigkoee);
            } else {
                $this->ycasmmgsmaaumweg($wumguikkgaigkoee);
            }
        }
    }
    
    public function waimweasuiemkmee()
    {
        $goyemikogeuskgas = DecoratorUser::igawqaomowicuayw(self::NOTICE_FIELD);
        if ($goyemikogeuskgas) {
            foreach ($goyemikogeuskgas as $aokagokqyuysuksm => $ycyucwoysmwkgiui) {
                $ycyucwoysmwkgiui['id'] = $aokagokqyuysuksm;
                $this->sywokgmoskcocqgy($ycyucwoysmwkgiui);
                gygwewcqsmwqismo:
            }
            amgsueumgaguceaa:
            DecoratorUser::smqukgcyacswysqa(self::NOTICE_FIELD);
        }
    }
    
    public static function umuecysoywoumgwo($aokagokqyuysuksm) : bool
    {
        return (bool) self::symcgieuakksimmu()->get($aokagokqyuysuksm);
    }
    
    public function sywokgmoskcocqgy($ywmkwiwkosakssii = []) : string
    {
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ['dismiss' => true, 'message' => '', 'level' => self::NOTICE_INFO, 'echo' => true, 'id' => '']);
        $ycyucwoysmwkgiui = '';
        $iqaosyayeiuaisqi = $ywmkwiwkosakssii['level'];
        $aokagokqyuysuksm = $ywmkwiwkosakssii['id'] ?: $iqaosyayeiuaisqi;
        $uamcoiueqaamsqma = $ywmkwiwkosakssii['message'];
        if ($uamcoiueqaamsqma) {
            $ycyucwoysmwkgiui = ManipulateHTML::oockkqiqsssakuug($uamcoiueqaamsqma, $iqaosyayeiuaisqi, ['aokagokqyuysuksm' => $aokagokqyuysuksm, 'class' => 'mgagogwqugyyassi']);
        }
        if ($ywmkwiwkosakssii['echo']) {
            echo $ycyucwoysmwkgiui;
        }
        return $ycyucwoysmwkgiui;
    }
    
    public function render($aokagokqyuysuksm, $ywmkwiwkosakssii = []) : string
    {
        $ycyucwoysmwkgiui = '';
        if ($aokagokqyuysuksm) {
            $uamcoiueqaamsqma = $this->get($aokagokqyuysuksm);
            if ($uamcoiueqaamsqma) {
                $this->remove($aokagokqyuysuksm);
                $ycyucwoysmwkgiui = $this->sagusgigmkeysock($aokagokqyuysuksm, $uamcoiueqaamsqma, $ywmkwiwkosakssii);
            }
        } else {
            $wumguikkgaigkoee = $this->kasiqqyyaswsgics();
            if ($wumguikkgaigkoee) {
                foreach ($wumguikkgaigkoee as $aokagokqyuysuksm => $uamcoiueqaamsqma) {
                    $ycyucwoysmwkgiui = $this->sagusgigmkeysock($aokagokqyuysuksm, $uamcoiueqaamsqma, $ywmkwiwkosakssii);
                    gommacygsykyussk:
                }
                uougwgeyiokewkkm:
                if (DecoratorUser::ksgkoukcicwkkaum()) {
                    DecoratorUser::smqukgcyacswysqa(self::NOTICE_FIELD);
                } else {
                    $this->ycasmmgsmaaumweg([]);
                }
            }
        }
        return $ycyucwoysmwkgiui;
    }
    
    private function sagusgigmkeysock($aokagokqyuysuksm, $uamcoiueqaamsqma, $ywmkwiwkosakssii) : ?string
    {
        if ($uamcoiueqaamsqma) {
            $uamcoiueqaamsqma = $this->sywokgmoskcocqgy(ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ['id' => $aokagokqyuysuksm, 'level' => ManipulateArray::get($uamcoiueqaamsqma, 'level', self::NOTICE_INFO), 'message' => ManipulateArray::get($uamcoiueqaamsqma, 'message', self::NOTICE_INFO)]));
        }
        return $uamcoiueqaamsqma;
    }
    
    private function ycasmmgsmaaumweg(array $wumguikkgaigkoee = [])
    {
        setcookie(self::NOTICE_FIELD, json_encode($wumguikkgaigkoee), 0, COOKIEPATH, COOKIE_DOMAIN, false, false);
    }
    
    public static function add($uamcoiueqaamsqma, $aokagokqyuysuksm, $iqaosyayeiuaisqi)
    {
        $owgumcsyqsamiemg = self::symcgieuakksimmu();
        $wumguikkgaigkoee = [$aokagokqyuysuksm => ['iqaosyayeiuaisqi' => $iqaosyayeiuaisqi, 'uamcoiueqaamsqma' => $uamcoiueqaamsqma]];
        $megmggkiokqkcwou = $owgumcsyqsamiemg->kasiqqyyaswsgics();
        if ($megmggkiokqkcwou) {
            $wumguikkgaigkoee = array_merge($wumguikkgaigkoee, $megmggkiokqkcwou);
        }
        if (DecoratorUser::ksgkoukcicwkkaum()) {
            ManipulateUser::ksmqawcowkmegigw(self::NOTICE_FIELD, $wumguikkgaigkoee);
        } else {
            $owgumcsyqsamiemg->ycasmmgsmaaumweg($wumguikkgaigkoee);
        }
    }
    
    public static function ycyucwoysmwkgiui($uamcoiueqaamsqma, $iqaosyayeiuaisqi = self::NOTICE_SUCCESS, $aokagokqyuysuksm = null)
    {
        self::symcgieuakksimmu()->add($uamcoiueqaamsqma, $aokagokqyuysuksm, $iqaosyayeiuaisqi);
    }
}
