
<x-admin-layout>
<x-slot name="header">
<button class="text-black  focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800" type="button" data-drawer-target="drawer-navigation" data-drawer-show="drawer-navigation" aria-controls="drawer-navigation">
<svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
        </svg>
   </button>
    </x-slot>

<x-baar/>
<x-Cards1 :p1="$newCount" :p2="$inprocessCount" :p3="$waitingCount" :p4="$completedCount" :p5="$cancelCount" :p6="$confirmCount" :p7="$pay" :p8="$notPay"/>
<x-Card2/>
<x-Card3/>



</x-admin-layout>
