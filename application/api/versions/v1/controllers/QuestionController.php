<?php
/**
 * ProductController v1
 * @author Ihor Karas <ihor@karas.in.ua>
 * Date: 03.04.15
 * Time: 00:35
 */

namespace api\versions\v1\controllers;


class QuestionController extends \api\common\controllers\QuestionController
{
	public $modelClass = '\api\versions\v1\models\Question';

}