<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link      http://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Core\Configure;
use Cake\Network\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;

/**
 * Static content controller
 *
 * This controller will render views from Template/Pages/
 *
 * @link http://book.cakephp.org/3.0/en/controllers/pages-controller.html
 */
class PagesController extends AppController
{

    /**
     * beforeFilter callback
     *
     * @param
     * @return void
     */
    public function beforeFilter(\Cake\Event\Event $event)
    {
        parent::beforeFilter($event);

        $this->layout = 'public';
        $this->loadModel('Posts');
    }

    /**
     * about method
     *
     * @return void
     */
    public function about()
    {

    }

    /**
     * index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('posts', $this->paginate($this->Posts));        
    }

    /**
     * view method
     *
     * @return void
     */
    public function view() {
        $post = $this->Posts->find('all', [
            'conditions' => [
                'Posts.slug' => $this->request->params['slug']
            ],
            'limit' => 1
        ])->all()->first();

        $this->set('post', $post);
        $this->set('title_for_layout', $post->title);
    }    

}
