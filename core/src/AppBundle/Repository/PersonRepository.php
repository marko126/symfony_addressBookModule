<?php

namespace AppBundle\Repository;

/**
 * PersonRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class PersonRepository extends \Doctrine\ORM\EntityRepository
{
    /**
     * @return mixed
     */
    public function getPaginationQuery()
    {
        return $this->createQueryBuilder("contact")->getQuery();
    }
}
