#### How to use?
#### PHP:

```php
<?php

namespace SomeBundle\Repository;

use Doctrine\Persistence\ManagerRegistry;
use ComponentBundle\Repository\AbstractRepository;
use ComponentBundle\Repository\AbstractRepositoryInterface;

class SomeRepository extends AbstractRepository implements AbstractRepositoryInterface
{
    /**
     * SomeRepository constructor.
     * @param ManagerRegistry $registry
     */
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct(SomeEntity::class, $registry);
        // default relations
        $this->addDefaultRelationToSelect('translations');
    }

    /**
     * @return array
     */
    public function findElements(): array
    {
        $construct_filter = $this->getConstructFilter();
        $construct_filter->setIndexBy($this->getEntityAlias(), 'systemName');
        $construct_filter->setSortBy($this->getEntityAlias(), 'position');
        $construct_filter->setUseGetQueryBuilder(false);

        return $this->getResult($this->constructQueryBuilder($construct_filter));
    }
    
    /**
     * @param $id
     * @return int|mixed|string|null
     */
    public function findElementByIdForDashboardEditOrDeleteFormAction($id)
    {
        $construct_filter = $this->getConstructFilter();
        // add relations for some field
        $construct_filter->addRelationToSelect('someField');
        $construct_filter->addRelationToSelect(['childrenSomeFieldOfSomeField' => 'someField']);
        $construct_filter->setId($id);
        $construct_filter->setUseGetQueryBuilder(false);

        return $this->getOneOrNullResult($this->constructQueryBuilder($construct_filter));
    }
}
```
