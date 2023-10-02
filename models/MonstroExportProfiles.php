<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "profiles".
 *
 * @property int $pid
 * @property string|null $data_create
 * @property string|null $party
 * @property int|null $cookies_len
 * @property string|null $accounts
 * @property bool|null $is_google
 * @property bool|null $is_yandex
 * @property bool|null $is_mail
 * @property bool|null $is_youtube
 * @property bool|null $is_avito
 * @property bool|null $ismobiledevice
 * @property string|null $platform
 * @property string|null $platform_version
 * @property string|null $browser
 * @property string|null $browser_version
 * @property string|null $folder
 * @property string|null $fingerprints
 * @property string|null $cookies
 * @property string|null $proxy
 * @property string|null $last_date_work
 * @property string|null $date_block
 * @property string|null $last_visit_sites
 * @property string|null $last_task
 * @property string|null $geo
 * @property string|null $tel
 * @property string|null $email
 * @property string|null $name
 * @property string|null $mouse_config
 * @property int $domaincount
 */
class MonstroExportProfiles extends \yii\db\ActiveRecord
{

    public static function getDb()
    {
        // use the "db2" application component
        return \Yii::$app->db_export;
    }

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'profiles';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['data_create', 'last_date_work', 'date_block'], 'safe'],
            [['cookies_len', 'domaincount'], 'default', 'value' => null],
            [['cookies_len', 'domaincount'], 'integer'],
            [['accounts', 'fingerprints', 'cookies', 'proxy'], 'string'],
            [['is_google', 'is_yandex', 'is_mail', 'is_youtube', 'is_avito', 'ismobiledevice'], 'boolean'],
            [['party', 'platform', 'platform_version', 'browser', 'browser_version', 'folder', 'last_task', 'geo', 'tel', 'email', 'name'], 'string', 'max' => 40],
            [['last_visit_sites'], 'string', 'max' => 250],
            [['mouse_config'], 'string', 'max' => 25],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'pid' => 'Pid',
            'data_create' => 'Data Create',
            'party' => 'Party',
            'cookies_len' => 'Cookies Len',
            'accounts' => 'Accounts',
            'is_google' => 'Is Google',
            'is_yandex' => 'Is Yandex',
            'is_mail' => 'Is Mail',
            'is_youtube' => 'Is Youtube',
            'is_avito' => 'Is Avito',
            'ismobiledevice' => 'Ismobiledevice',
            'platform' => 'Platform',
            'platform_version' => 'Platform Version',
            'browser' => 'Browser',
            'browser_version' => 'Browser Version',
            'folder' => 'Folder',
            'fingerprints' => 'Fingerprints',
            'cookies' => 'Cookies',
            'proxy' => 'Proxy',
            'last_date_work' => 'Last Date Work',
            'date_block' => 'Date Block',
            'last_visit_sites' => 'Last Visit Sites',
            'last_task' => 'Last Task',
            'geo' => 'Geo',
            'tel' => 'Tel',
            'email' => 'Email',
            'name' => 'Name',
            'mouse_config' => 'Mouse Config',
            'domaincount' => 'Domaincount',
        ];
    }
}
