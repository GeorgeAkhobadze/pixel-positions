<?php

namespace Tests\Unit;

use App\Models\Employer;
use App\Models\User;
use App\Models\Job;
use Illuminate\Foundation\Testing\RefreshDatabase;
use PHPUnit\Framework\Attributes\Test;
use Tests\TestCase;


class UserTest extends TestCase
{

    #[Test]public function job_belongs_to_the_employer(): void {
        $employer = Employer::factory()->create();
        $job = Job::factory()->create([
            'employer_id' => $employer->id
        ]);


        $this->assertTrue($job->employer->is($employer));
    }

    #[Test]public function job_has_a_tag(): void {
        $job= Job::factory()->create();

        $job->tag('Front-end');

        $this->assertCount(1, $job->tags);
    }

}
