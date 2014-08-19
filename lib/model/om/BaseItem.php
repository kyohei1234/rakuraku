<?php


abstract class BaseItem extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $user_id;


	
	protected $next_item_id;


	
	protected $template_id;


	
	protected $name;


	
	protected $description;


	
	protected $display;


	
	protected $created_at;


	
	protected $updated_at;


	
	protected $id;

	
	protected $aUser;

	
	protected $aItemRelatedByNextItemId;

	
	protected $aTemplate;

	
	protected $collItemsRelatedByNextItemId;

	
	protected $lastItemRelatedByNextItemIdCriteria = null;

	
	protected $alreadyInSave = false;

	
	protected $alreadyInValidation = false;

	
	public function getUserId()
	{

		return $this->user_id;
	}

	
	public function getNextItemId()
	{

		return $this->next_item_id;
	}

	
	public function getTemplateId()
	{

		return $this->template_id;
	}

	
	public function getName()
	{

		return $this->name;
	}

	
	public function getDescription()
	{

		return $this->description;
	}

	
	public function getDisplay()
	{

		return $this->display;
	}

	
	public function getCreatedAt($format = 'Y-m-d H:i:s')
	{

		if ($this->created_at === null || $this->created_at === '') {
			return null;
		} elseif (!is_int($this->created_at)) {
						$ts = strtotime($this->created_at);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [created_at] as date/time value: " . var_export($this->created_at, true));
			}
		} else {
			$ts = $this->created_at;
		}
		if ($format === null) {
			return $ts;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $ts);
		} else {
			return date($format, $ts);
		}
	}

	
	public function getUpdatedAt($format = 'Y-m-d H:i:s')
	{

		if ($this->updated_at === null || $this->updated_at === '') {
			return null;
		} elseif (!is_int($this->updated_at)) {
						$ts = strtotime($this->updated_at);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [updated_at] as date/time value: " . var_export($this->updated_at, true));
			}
		} else {
			$ts = $this->updated_at;
		}
		if ($format === null) {
			return $ts;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $ts);
		} else {
			return date($format, $ts);
		}
	}

	
	public function getId()
	{

		return $this->id;
	}

	
	public function setUserId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->user_id !== $v) {
			$this->user_id = $v;
			$this->modifiedColumns[] = ItemPeer::USER_ID;
		}

		if ($this->aUser !== null && $this->aUser->getId() !== $v) {
			$this->aUser = null;
		}

	} 
	
	public function setNextItemId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->next_item_id !== $v) {
			$this->next_item_id = $v;
			$this->modifiedColumns[] = ItemPeer::NEXT_ITEM_ID;
		}

		if ($this->aItemRelatedByNextItemId !== null && $this->aItemRelatedByNextItemId->getId() !== $v) {
			$this->aItemRelatedByNextItemId = null;
		}

	} 
	
	public function setTemplateId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->template_id !== $v) {
			$this->template_id = $v;
			$this->modifiedColumns[] = ItemPeer::TEMPLATE_ID;
		}

		if ($this->aTemplate !== null && $this->aTemplate->getId() !== $v) {
			$this->aTemplate = null;
		}

	} 
	
	public function setName($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->name !== $v) {
			$this->name = $v;
			$this->modifiedColumns[] = ItemPeer::NAME;
		}

	} 
	
	public function setDescription($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->description !== $v) {
			$this->description = $v;
			$this->modifiedColumns[] = ItemPeer::DESCRIPTION;
		}

	} 
	
	public function setDisplay($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->display !== $v) {
			$this->display = $v;
			$this->modifiedColumns[] = ItemPeer::DISPLAY;
		}

	} 
	
	public function setCreatedAt($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [created_at] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->created_at !== $ts) {
			$this->created_at = $ts;
			$this->modifiedColumns[] = ItemPeer::CREATED_AT;
		}

	} 
	
	public function setUpdatedAt($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [updated_at] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->updated_at !== $ts) {
			$this->updated_at = $ts;
			$this->modifiedColumns[] = ItemPeer::UPDATED_AT;
		}

	} 
	
	public function setId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = ItemPeer::ID;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->user_id = $rs->getInt($startcol + 0);

			$this->next_item_id = $rs->getInt($startcol + 1);

			$this->template_id = $rs->getInt($startcol + 2);

			$this->name = $rs->getString($startcol + 3);

			$this->description = $rs->getString($startcol + 4);

			$this->display = $rs->getInt($startcol + 5);

			$this->created_at = $rs->getTimestamp($startcol + 6, null);

			$this->updated_at = $rs->getTimestamp($startcol + 7, null);

			$this->id = $rs->getInt($startcol + 8);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 9; 
		} catch (Exception $e) {
			throw new PropelException("Error populating Item object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(ItemPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			ItemPeer::doDelete($this, $con);
			$this->setDeleted(true);
			$con->commit();
		} catch (PropelException $e) {
			$con->rollback();
			throw $e;
		}
	}

	
	public function save($con = null)
	{
    if ($this->isNew() && !$this->isColumnModified(ItemPeer::CREATED_AT))
    {
      $this->setCreatedAt(time());
    }

    if ($this->isModified() && !$this->isColumnModified(ItemPeer::UPDATED_AT))
    {
      $this->setUpdatedAt(time());
    }

		if ($this->isDeleted()) {
			throw new PropelException("You cannot save an object that has been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(ItemPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			$affectedRows = $this->doSave($con);
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollback();
			throw $e;
		}
	}

	
	protected function doSave($con)
	{
		$affectedRows = 0; 		if (!$this->alreadyInSave) {
			$this->alreadyInSave = true;


												
			if ($this->aUser !== null) {
				if ($this->aUser->isModified()) {
					$affectedRows += $this->aUser->save($con);
				}
				$this->setUser($this->aUser);
			}

			if ($this->aItemRelatedByNextItemId !== null) {
				if ($this->aItemRelatedByNextItemId->isModified()) {
					$affectedRows += $this->aItemRelatedByNextItemId->save($con);
				}
				$this->setItemRelatedByNextItemId($this->aItemRelatedByNextItemId);
			}

			if ($this->aTemplate !== null) {
				if ($this->aTemplate->isModified()) {
					$affectedRows += $this->aTemplate->save($con);
				}
				$this->setTemplate($this->aTemplate);
			}


						if ($this->isModified()) {
				if ($this->isNew()) {
					$pk = ItemPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += ItemPeer::doUpdate($this, $con);
				}
				$this->resetModified(); 			}

			if ($this->collItemsRelatedByNextItemId !== null) {
				foreach($this->collItemsRelatedByNextItemId as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			$this->alreadyInSave = false;
		}
		return $affectedRows;
	} 
	
	protected $validationFailures = array();

	
	public function getValidationFailures()
	{
		return $this->validationFailures;
	}

	
	public function validate($columns = null)
	{
		$res = $this->doValidate($columns);
		if ($res === true) {
			$this->validationFailures = array();
			return true;
		} else {
			$this->validationFailures = $res;
			return false;
		}
	}

	
	protected function doValidate($columns = null)
	{
		if (!$this->alreadyInValidation) {
			$this->alreadyInValidation = true;
			$retval = null;

			$failureMap = array();


												
			if ($this->aUser !== null) {
				if (!$this->aUser->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aUser->getValidationFailures());
				}
			}

			if ($this->aItemRelatedByNextItemId !== null) {
				if (!$this->aItemRelatedByNextItemId->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aItemRelatedByNextItemId->getValidationFailures());
				}
			}

			if ($this->aTemplate !== null) {
				if (!$this->aTemplate->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aTemplate->getValidationFailures());
				}
			}


			if (($retval = ItemPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = ItemPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getUserId();
				break;
			case 1:
				return $this->getNextItemId();
				break;
			case 2:
				return $this->getTemplateId();
				break;
			case 3:
				return $this->getName();
				break;
			case 4:
				return $this->getDescription();
				break;
			case 5:
				return $this->getDisplay();
				break;
			case 6:
				return $this->getCreatedAt();
				break;
			case 7:
				return $this->getUpdatedAt();
				break;
			case 8:
				return $this->getId();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = ItemPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getUserId(),
			$keys[1] => $this->getNextItemId(),
			$keys[2] => $this->getTemplateId(),
			$keys[3] => $this->getName(),
			$keys[4] => $this->getDescription(),
			$keys[5] => $this->getDisplay(),
			$keys[6] => $this->getCreatedAt(),
			$keys[7] => $this->getUpdatedAt(),
			$keys[8] => $this->getId(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = ItemPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setUserId($value);
				break;
			case 1:
				$this->setNextItemId($value);
				break;
			case 2:
				$this->setTemplateId($value);
				break;
			case 3:
				$this->setName($value);
				break;
			case 4:
				$this->setDescription($value);
				break;
			case 5:
				$this->setDisplay($value);
				break;
			case 6:
				$this->setCreatedAt($value);
				break;
			case 7:
				$this->setUpdatedAt($value);
				break;
			case 8:
				$this->setId($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = ItemPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setUserId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setNextItemId($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setTemplateId($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setName($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setDescription($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setDisplay($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setCreatedAt($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setUpdatedAt($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setId($arr[$keys[8]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(ItemPeer::DATABASE_NAME);

		if ($this->isColumnModified(ItemPeer::USER_ID)) $criteria->add(ItemPeer::USER_ID, $this->user_id);
		if ($this->isColumnModified(ItemPeer::NEXT_ITEM_ID)) $criteria->add(ItemPeer::NEXT_ITEM_ID, $this->next_item_id);
		if ($this->isColumnModified(ItemPeer::TEMPLATE_ID)) $criteria->add(ItemPeer::TEMPLATE_ID, $this->template_id);
		if ($this->isColumnModified(ItemPeer::NAME)) $criteria->add(ItemPeer::NAME, $this->name);
		if ($this->isColumnModified(ItemPeer::DESCRIPTION)) $criteria->add(ItemPeer::DESCRIPTION, $this->description);
		if ($this->isColumnModified(ItemPeer::DISPLAY)) $criteria->add(ItemPeer::DISPLAY, $this->display);
		if ($this->isColumnModified(ItemPeer::CREATED_AT)) $criteria->add(ItemPeer::CREATED_AT, $this->created_at);
		if ($this->isColumnModified(ItemPeer::UPDATED_AT)) $criteria->add(ItemPeer::UPDATED_AT, $this->updated_at);
		if ($this->isColumnModified(ItemPeer::ID)) $criteria->add(ItemPeer::ID, $this->id);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(ItemPeer::DATABASE_NAME);

		$criteria->add(ItemPeer::ID, $this->id);

		return $criteria;
	}

	
	public function getPrimaryKey()
	{
		return $this->getId();
	}

	
	public function setPrimaryKey($key)
	{
		$this->setId($key);
	}

	
	public function copyInto($copyObj, $deepCopy = false)
	{

		$copyObj->setUserId($this->user_id);

		$copyObj->setNextItemId($this->next_item_id);

		$copyObj->setTemplateId($this->template_id);

		$copyObj->setName($this->name);

		$copyObj->setDescription($this->description);

		$copyObj->setDisplay($this->display);

		$copyObj->setCreatedAt($this->created_at);

		$copyObj->setUpdatedAt($this->updated_at);


		if ($deepCopy) {
									$copyObj->setNew(false);

			foreach($this->getItemsRelatedByNextItemId() as $relObj) {
				if($this->getPrimaryKey() === $relObj->getPrimaryKey()) {
						continue;
				}

				$copyObj->addItemRelatedByNextItemId($relObj->copy($deepCopy));
			}

		} 

		$copyObj->setNew(true);

		$copyObj->setId(NULL); 
	}

	
	public function copy($deepCopy = false)
	{
				$clazz = get_class($this);
		$copyObj = new $clazz();
		$this->copyInto($copyObj, $deepCopy);
		return $copyObj;
	}

	
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new ItemPeer();
		}
		return self::$peer;
	}

	
	public function setUser($v)
	{


		if ($v === null) {
			$this->setUserId(NULL);
		} else {
			$this->setUserId($v->getId());
		}


		$this->aUser = $v;
	}


	
	public function getUser($con = null)
	{
		if ($this->aUser === null && ($this->user_id !== null)) {
						include_once 'lib/model/om/BaseUserPeer.php';

			$this->aUser = UserPeer::retrieveByPK($this->user_id, $con);

			
		}
		return $this->aUser;
	}

	
	public function setItemRelatedByNextItemId($v)
	{


		if ($v === null) {
			$this->setNextItemId(NULL);
		} else {
			$this->setNextItemId($v->getId());
		}


		$this->aItemRelatedByNextItemId = $v;
	}


	
	public function getItemRelatedByNextItemId($con = null)
	{
		if ($this->aItemRelatedByNextItemId === null && ($this->next_item_id !== null)) {
						include_once 'lib/model/om/BaseItemPeer.php';

			$this->aItemRelatedByNextItemId = ItemPeer::retrieveByPK($this->next_item_id, $con);

			
		}
		return $this->aItemRelatedByNextItemId;
	}

	
	public function setTemplate($v)
	{


		if ($v === null) {
			$this->setTemplateId(NULL);
		} else {
			$this->setTemplateId($v->getId());
		}


		$this->aTemplate = $v;
	}


	
	public function getTemplate($con = null)
	{
		if ($this->aTemplate === null && ($this->template_id !== null)) {
						include_once 'lib/model/om/BaseTemplatePeer.php';

			$this->aTemplate = TemplatePeer::retrieveByPK($this->template_id, $con);

			
		}
		return $this->aTemplate;
	}

	
	public function initItemsRelatedByNextItemId()
	{
		if ($this->collItemsRelatedByNextItemId === null) {
			$this->collItemsRelatedByNextItemId = array();
		}
	}

	
	public function getItemsRelatedByNextItemId($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseItemPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collItemsRelatedByNextItemId === null) {
			if ($this->isNew()) {
			   $this->collItemsRelatedByNextItemId = array();
			} else {

				$criteria->add(ItemPeer::NEXT_ITEM_ID, $this->getId());

				ItemPeer::addSelectColumns($criteria);
				$this->collItemsRelatedByNextItemId = ItemPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(ItemPeer::NEXT_ITEM_ID, $this->getId());

				ItemPeer::addSelectColumns($criteria);
				if (!isset($this->lastItemRelatedByNextItemIdCriteria) || !$this->lastItemRelatedByNextItemIdCriteria->equals($criteria)) {
					$this->collItemsRelatedByNextItemId = ItemPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastItemRelatedByNextItemIdCriteria = $criteria;
		return $this->collItemsRelatedByNextItemId;
	}

	
	public function countItemsRelatedByNextItemId($criteria = null, $distinct = false, $con = null)
	{
				include_once 'lib/model/om/BaseItemPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(ItemPeer::NEXT_ITEM_ID, $this->getId());

		return ItemPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addItemRelatedByNextItemId(Item $l)
	{
		$this->collItemsRelatedByNextItemId[] = $l;
		$l->setItemRelatedByNextItemId($this);
	}


	
	public function getItemsRelatedByNextItemIdJoinUser($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseItemPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collItemsRelatedByNextItemId === null) {
			if ($this->isNew()) {
				$this->collItemsRelatedByNextItemId = array();
			} else {

				$criteria->add(ItemPeer::NEXT_ITEM_ID, $this->getId());

				$this->collItemsRelatedByNextItemId = ItemPeer::doSelectJoinUser($criteria, $con);
			}
		} else {
									
			$criteria->add(ItemPeer::NEXT_ITEM_ID, $this->getId());

			if (!isset($this->lastItemRelatedByNextItemIdCriteria) || !$this->lastItemRelatedByNextItemIdCriteria->equals($criteria)) {
				$this->collItemsRelatedByNextItemId = ItemPeer::doSelectJoinUser($criteria, $con);
			}
		}
		$this->lastItemRelatedByNextItemIdCriteria = $criteria;

		return $this->collItemsRelatedByNextItemId;
	}


	
	public function getItemsRelatedByNextItemIdJoinTemplate($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseItemPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collItemsRelatedByNextItemId === null) {
			if ($this->isNew()) {
				$this->collItemsRelatedByNextItemId = array();
			} else {

				$criteria->add(ItemPeer::NEXT_ITEM_ID, $this->getId());

				$this->collItemsRelatedByNextItemId = ItemPeer::doSelectJoinTemplate($criteria, $con);
			}
		} else {
									
			$criteria->add(ItemPeer::NEXT_ITEM_ID, $this->getId());

			if (!isset($this->lastItemRelatedByNextItemIdCriteria) || !$this->lastItemRelatedByNextItemIdCriteria->equals($criteria)) {
				$this->collItemsRelatedByNextItemId = ItemPeer::doSelectJoinTemplate($criteria, $con);
			}
		}
		$this->lastItemRelatedByNextItemIdCriteria = $criteria;

		return $this->collItemsRelatedByNextItemId;
	}

} 