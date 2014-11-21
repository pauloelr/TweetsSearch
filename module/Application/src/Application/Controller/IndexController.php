<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2014 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Application\Form\HashtagForm;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {
        $form = new HashtagForm();

        return new ViewModel(
            array('form' => $form)
        );
    }

    public function hashtagAction(){
        if(!$this->params()->fromQuery('hashtag')){
            return $this->redirect()->toRoute('home');
        }

        $settings = $this->getServiceLocator()->get('Config')['twitter_credentials'];

        $form = new HashtagForm();
        $twitter = new \TwitterAPIExchange($settings);

        $url = 'https://api.twitter.com/1.1/search/tweets.json';
        $getfield = '?q=%23'.$this->params()->fromQuery('hashtag');
        $requestMethod = 'GET';

        $response = $twitter->setGetfield($getfield)
            ->buildOauth($url, $requestMethod)
            ->performRequest();

        $tweets = json_decode($response);

        return new ViewModel(
            array(
                'tweets' => $tweets,
                'form' => $form
            )
        );
    }
}
