<?php
namespace App\Routing\Route;

use Cake\ORM\TableRegistry;
use Cake\Routing\Route\Route;

class SlugRoute extends Route
{

    /**
     * Parses a string URL into an array. If it matches, it will convert the prefix, controller and
     * plugin keys to their camelized form
     *
     * @param string $url The URL to parse
     * @return mixed false on failure, or an array of request parameters
     */
    public function parse($url)
    {
        $params = parent::parse($url);
        if (!$params) {
            return false;
        }

        $this->Posts = TableRegistry::get('Posts');
		$query = $this->Posts->find('all', [
		    'conditions' => ['Posts.slug' => $params['slug']]
		]);

		if (!$query->count()) {
			return false;
		}

        return $params;
    }
}