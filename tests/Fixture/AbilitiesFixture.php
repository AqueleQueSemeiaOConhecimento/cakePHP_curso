<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * AbilitiesFixture
 */
class AbilitiesFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'created_at' => 1724350572,
                'updated_at' => 1724350572,
            ],
        ];
        parent::init();
    }
}
