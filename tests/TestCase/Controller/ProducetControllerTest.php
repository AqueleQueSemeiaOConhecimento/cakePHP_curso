<?php
declare(strict_types=1);

namespace App\Test\TestCase\Controller;

use App\Controller\ProducetController;
use Cake\TestSuite\IntegrationTestTrait;
use Cake\TestSuite\TestCase;

/**
 * App\Controller\ProducetController Test Case
 *
 * @uses \App\Controller\ProducetController
 */
class ProducetControllerTest extends TestCase
{
    use IntegrationTestTrait;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.Producet',
    ];
}
