<?php

namespace App\Tests\Repository;

use App\Repository\VisiteRepository;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

/**
 * Description of VisiteRepositoryTest
 *
 * @author inesl
 */
class VisiteRepositoryTest extends KernelTestCase {
    
    /**
     * Récupère le repository de Visite
     * @return VisiteRepository
     */
    public function recupRepository(): VisiteRepository{
        self::bootKernel();
        $repository = self::getContainer()->get(VisiteRepository::class);
        return $repository;
    }

    public function testNbVisites() {
        $repository = $thisrecupRepository();
        $nbVisites = $repository->count([]);
        $this->assertEquals(99, $nbVisites);
    }
