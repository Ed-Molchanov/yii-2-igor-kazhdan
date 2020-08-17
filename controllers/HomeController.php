<?php

namespace app\controllers;

use yii\web\Controller;
use app\models\Video;

class HomeController extends Controller {

    public $layout = 'new_main';

    public function actionIndex() {
        $this->view->title = "Главная страница";
        return $this->render('index');
    }

    public function actionTour() {
        $this->view->title = "Гастроли";
        return $this->render('tour');
    }

    public function actionVideo($id = null) {
        $nn = Video::find()->count();
        $id = (int) $id;
        if ($id != null) {
            $vid1 = Video::find()->where(['id' => $id])->one();
        } else {
            $vid1 = Video::find()->orderBy('id DESC')->limit(1)->one();
        };
        $videos = Video::find()->orderBy('id DESC')->all();
        $this->view->title = "Видео";
        return $this->render('video', compact('videos', 'vid1', 'nn'));
    }

    public function actionAudio() {
        $this->view->title = "Аудио";
        return $this->render('audio');
    }

    public function actionPhoto() {
        $this->view->title = "Фотоальбом";
        return $this->render('photo');
    }

    public function actionSummaryRu() {
        $this->view->title = "Резюме на русском языке";
        return $this->render('summary-ru');
    }

    public function actionSummaryEn() {
        $this->view->title = "Резюме на анг лийском";
        return $this->render('summary-en');
    }

    public function actionContacts() {
        $this->view->title = "Контакты";
        return $this->render('contacts');
    }

}
