<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('presales', function (Blueprint $table) {
             $table->string('stripe_session_id')->nullable()->after('amount');
            $table->string('stripe_payment_intent_id')->nullable()->after('stripe_session_id');
            $table->string('stripe_customer_id')->nullable()->after('stripe_payment_intent_id');

            $table->string('payment_status', 50)->default('pending')->after('stripe_customer_id');
            $table->string('checkout_mode', 50)->nullable()->after('payment_status');

            $table->string('stripe_event_id')->nullable()->after('checkout_mode');
            $table->timestamp('paid_at')->nullable()->after('stripe_event_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('presales', function (Blueprint $table) {
                        $table->dropColumn([
                'stripe_session_id',
                'stripe_payment_intent_id',
                'stripe_customer_id',
                'payment_status',
                'checkout_mode',
                'stripe_event_id',
                'paid_at',
            ]);
        });
    }
};
