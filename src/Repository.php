<?php
/**
 * Bright Nucleus Collection Post Collection
 *
 * @package   BrightNucleus\Collection
 * @author    Alain Schlesser <alain.schlesser@gmail.com>
 * @license   MIT+
 * @link      http://www.brightnucleus.com/
 * @copyright 2018 Alain Schlesser, Bright Nucleus
 */

namespace BrightNucleus\Collection;

use Exception;

interface Repository {

	/**
	 * Find a single element by its ID.
	 *
	 * @param mixed $id ID of the element to find.
	 * @return mixed
	 */
	public function find( $id );

	/**
	 * Find the collection of all elements the repository contains.
	 *
	 * @return mixed
	 */
	public function findAll();

	/**
	 * Find a collection of elements that fit a given set of criteria.
	 *
	 * @param Criteria $criteria Criteria to qualify the desired result set.
	 * @return mixed
	 */
	public function findBy( Criteria $criteria );

	/**
	 * Find a single element that fits a given set of criteria.
	 *
	 * @param Criteria $criteria Criteria to qualify the desired result set.
	 * @return mixed
	 */
	public function findOneBy( Criteria $criteria );

	/**
	 * Persist an entity.
	 *
	 * @param Entity $entity Entity to persist.
	 * @return Entity Persisted entity.
	 * @throws Exception If the entity could not be persisted.
	 */
	public function persist( $entity );
}
