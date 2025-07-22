<?php

namespace Tests\Unit;

use App\Models\Employer;
use App\Models\Job;
use Tests\TestCase;

class JobTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function test_example(): void
    {
        // Arrange
        $employer = Employer::factory()->create();
        $job = Job::factory()->create([
            "employer_id" => $employer->id
        ]);

        // Action
        $this->assertTrue($job->employer->is($employer));
    }
}
