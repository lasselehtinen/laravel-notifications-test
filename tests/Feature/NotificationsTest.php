<?php

namespace Tests\Feature;

use App\Notifications\OrderShipped;
use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Notification;
use Tests\TestCase;

class NotificationsTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test 1
     *
     * @return void
     */
    public function testNotification()
    {
        Notification::fake();
        Notification::assertSentTo(User::all(), OrderShipped::class);
    }

    /**
     * Test 2
     *
     * @return void
     */
    public function testNotificationFake()
    {
        Notification::fake();
    }
}
