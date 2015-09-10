<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;
use Cake\Utility\Hash;

/**
 * Post Entity.
 */
class Post extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false,
    ];

    public function _getListTags() {
    	$list = [];
    	foreach ($this->tags as $tag) {
    		$list[] = $tag->title;
    	}
    	return implode(', ', $list);
    }

}
