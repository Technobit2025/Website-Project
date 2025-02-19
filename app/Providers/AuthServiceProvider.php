<?php

namespace App\Providers;

use App\Enums\RoleEnum;
use App\Models\BankDetail;
use App\Models\Banner;
use App\Models\Bid;
use App\Models\Blog;
use App\Models\Currency;
use App\Models\Customer;
use App\Models\Document;
use App\Models\Service;
use App\Models\ServicePackage;
use App\Models\ServiceRequest;
use App\Models\Setting;
use App\Models\SystemLang;
use App\Models\Tag;
use App\Models\Tax;
use App\Models\TimeSlot;
use App\Models\User;
use App\Models\WithdrawRequest;
use App\Models\Zone;
use App\Policies\BankDetailPolicy;
use App\Policies\BannerPolicy;
use App\Policies\BidPolicy;
use App\Policies\BlogPolicy;
use App\Policies\CurrencyPolicy;
use App\Policies\CustomerPolicy;
use App\Policies\DocumentPolicy;
use App\Policies\ServicePackagePolicy;
use App\Policies\ServicePolicy;
use App\Policies\ServiceRequestPolicy;
use App\Policies\SettingPolicy;
use App\Policies\SystemLangPolicy;
use App\Policies\TagPolicy;
use App\Policies\TaxPolicy;
use App\Policies\TimeSlotPolicy;
use App\Policies\UserPolicy;
use App\Policies\WithdrawRequestPolicy;
use App\Policies\ZonePolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use Modules\Subscription\Entities\Plan;
use Modules\Subscription\Entities\UserSubscription;
use Modules\Subscription\Policies\PlanPolicy;
use Modules\Subscription\Policies\SubscriptionPolicy;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        User::class => UserPolicy::class,
        Customer::class => CustomerPolicy::class,
        Currency::class => CurrencyPolicy::class,
        Document::class => DocumentPolicy::class,
        Service::class => ServicePolicy::class,
        SystemLang::class => SystemLangPolicy::class,
        ServicePackage::class => ServicePackagePolicy::class,
        TimeSlot::class => TimeSlotPolicy::class,
        BankDetail::class => BankDetailPolicy::class,
        Blog::class => BlogPolicy::class,
        Plan::class => PlanPolicy::class,
        Tag::class => TagPolicy::class,
        Banner::class => BannerPolicy::class,
        Setting::class => SettingPolicy::class,
        UserSubscription::class => SubscriptionPolicy::class,
        WithdrawRequest::class => WithdrawRequestPolicy::class,
        Tax::class => TaxPolicy::class,
        Zone::class => ZonePolicy::class,
        ServiceRequest::class => ServiceRequestPolicy::class,
        Bid::class => BidPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        // Implicitly grant "Admin" role all permissions
        // This works in the app by using gate-related functions like auth()->user->can() and @can()
        Gate::before(function ($user, $ability) {
            return $user->hasRole(RoleEnum::ADMIN) ? true : null;
        });
    }
}
