<?php
/**
 * @link https://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license https://www.yiiframework.com/license/
 */

namespace app\commands;

use app\models\MonstroExportProfiles;
use app\models\MonstroImportProfiles;
use yii\console\Controller;
use yii\console\ExitCode;


class MigrateController extends Controller
{
    private int $limit = 5000; //всего лимит профилей
    private int $partLimit = 100; // группа в селекте, чтоб быстрее было чем больше тем быстрее. Только упор в память идет.

    /**
     *
     * @return int Exit code
     */
    public function actionIndex()
    {

        for ($index = 1; $index <= $this->limit/$this->partLimit; $index++) {
            echo "Part:".$index.PHP_EOL;
            $importProfiles = MonstroImportProfiles::find()
                ->where(['party' => 'group2'])
                ->andWhere(['>', 'domaincount', 200])
                ->asArray()
                ->limit($this->partLimit)
                ->all();
                foreach ($importProfiles as $importProfile){
                    if (!empty($importProfile)){
                        echo $importProfile['pid'] . PHP_EOL;
                        $monstroExport = new  MonstroExportProfiles();
                        $monstroExport->attributes = $importProfile;
                        $monstroExport->save();
                        MonstroImportProfiles::deleteAll(['pid' => $importProfile['pid']]);//удаляем профиль из базы Импорта
                    }
                }



        }
        return ExitCode::OK;
    }
}
