<?php
/**
 * Open Source Social Network
 *
 * @packageOpen Source Social Network
 * @author    Open Social Website Core Team <info@informatikon.com>
 * @copyright 2014 iNFORMATIKON TECHNOLOGIES
 * @license   General Public Licence http://www.opensource-socialnetwork.org/licence
 * @link      http://www.opensource-socialnetwork.org/licence
 */
class Feedback extends OssnObject {
		public function addFeedback($description, $stars) {
				if(!empty($description) && !empty($stars)) {
						$this->owner_guid = ossn_loggedin_user()->guid;
						$this->type = 'user';
						$this->subtype = 'feedback';
						$this->description = $description;
						$this->data->stars = $stars;
						return $this->addObject();
				}
		}
		public function getFeedbacks(array $params = array()) {
				return $this->searchObject(array_merge(array(
						'type' => 'user',
						'subtype' => 'feedback'
				), $params));
		}
		public function feedbackExists() {
				return $this->searchObject(array(
						'type' => 'user',
						'subtype' => 'feedback',
						'owner_guid' => ossn_loggedin_user()->guid
				));
		}
}