<x-app-layout>
    <div class="intro-y flex items-center h-10">
        <h2 class="text-lg font-medium truncate mr-5">
            General Report
        </h2>
        <a href="" class="ml-auto flex text-theme-1 dark:text-theme-10"> <i data-feather="refresh-ccw" class="w-4 h-4 mr-3"></i> Reload Data </a>
    </div>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="col-span-12 sm:col-span-6 xl:col-span-6 intro-y">
            <div class="report-box zoom-in">
                <div class="box p-5">
                    <div class="flex">
                        <i data-feather="shopping-cart" class="report-box__icon text-theme-10"></i>                         
                    </div>
                    <div class="text-3xl font-bold leading-8 mt-6">${{$total_loans}}</div>
                    <div class="text-base text-gray-600 mt-1">Loans</div>
                </div>
            </div>
        </div>
        <div class="col-span-12 sm:col-span-6 xl:col-span-6 intro-y">
            <div class="report-box zoom-in">
                <div class="box p-5">
                    <div class="flex">
                        <i data-feather="credit-card" class="report-box__icon text-theme-11"></i>                         
                    </div>
                    <div class="text-3xl font-bold leading-8 mt-6">${{$total_payments}}</div>
                    <div class="text-base text-gray-600 mt-1">Payments</div>
                </div>
            </div>
        </div>       
    </div>
</x-app-layout>
