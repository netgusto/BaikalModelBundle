<?php

namespace Baikal\ModelBundle\Entity\Repository;

use Doctrine\ORM\EntityManager;

use Baikal\ModelBundle\Entity\AbstractUser as User;

/**
 * AddressbookRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class AddressbookRepository {

    protected $em;
    
    public function __construct(EntityManager $em) {
        $this->em = $em;
    }

    public function countAll() {
        $query = $this->em->createQuery('SELECT count(o) FROM BaikalModelBundle:Addressbook o');
        return $query->getSingleScalarResult();
    }

    public function findByUser(User $user) {

        $identityprincipal = $user->getIdentityPrincipal();
        
        if(!is_null($identityprincipal)) {
            return $this->findByPrincipaluri($identityprincipal->getUri());
        }

        return array();
    }

    public function findAll() {
        $query = $this->em->createQuery('SELECT o FROM BaikalModelBundle:Addressbook o');
        return $query->getResult();
    }

    public function findByPrincipaluri($principaluri) {
        $query = $this->em->createQuery('SELECT o FROM BaikalModelBundle:Addressbook o WHERE o.principaluri = :principaluri')
            ->setParameter('principaluri', $principaluri);

        return $query->getResult();
    }
}
