<html>
    <head>
    <title>Completed Deal Guide - Get Your Tour Guide Uae</title>
    </head>
</html>
<x-app-layout>
<x-slot name="header">
<button class="text-black  focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2   focus:outline-none " type="button" data-drawer-target="drawer-navigation" data-drawer-show="drawer-navigation" aria-controls="drawer-navigation">
<svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
        </svg>
   </button>
    </x-slot>

<x-Ubaar/>
<div class="m-5">
   

<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <div class="flex flex-column sm:flex-row flex-wrap space-y-4 sm:space-y-0 items-center justify-between pb-4">
        
        <label for="table-search" class="sr-only">Search</label>
        <div class="relative">
            <div class="absolute inset-y-0 left-0 rtl:inset-r-0 rtl:right-0 flex items-center ps-3 pointer-events-none">
                <svg class="w-5 h-5 text-gray-500 " aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
            </div>
            <input type="text" id="table-search" class="block p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500  " placeholder="Search for items">
        </div>
    </div>
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 ">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 ">
            <tr>
                <th scope="col" class="p-4">
                    <div class="flex items-center">
                        <input id="checkbox-all-search" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 ">
                        <label for="checkbox-all-search" class="sr-only">checkbox</label>
                    </div>
                </th>
                <th scope="col" class="px-6 py-3">
                    Name
                </th>
             
                
                <th scope="col" class="px-6 py-3">
                    Invoice
                </th>
                <th scope="col" class="px-6 py-3">
                    Email
                </th>
                <th scope="col" class="px-6 py-3">
                    Phone
                </th>
                <th scope="col" class="px-6 py-3">
                    Days
                </th>
                <th scope="col" class="px-6 py-3">
                    Booked Dates
                </th>
                <th scope="col" class="px-6 py-3">
                            Slip
                        </th>
                <th scope="col" class="px-6 py-3">
                   Schedule
                </th>
                <th scope="col" class="px-6 py-3">
                   Total Bill
                </th>
                <th scope="col" class="px-6 py-3">
                   Owner Commission in %
                </th>
                <th scope="col" class="px-6 py-3">
                   Owner Commission
                </th>
                <th scope="col" class="px-6 py-3">
                   Your Income
                </th>
                <th scope="col" class="px-6 py-3">
                  Payment Status
                </th>
                   <th scope="col" class="px-6 py-3">
                   Date
                </th>
                </th>
                   <th scope="col" class="px-6 py-3">
                   Download Schedule
                </th>
            </tr>
        </thead>
        <tbody>
        @foreach($datas as $data)
            <tr class="bg-white border-b ">
                <td class="w-4 p-4">
                    <div class="flex items-center">
                        <input id="checkbox-table-search-1" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 ">
                        <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                    </div>
                </td>
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                   {{$data->name}}
                </th>
             
               
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                   {{$data->invoice}}
                </th>
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                   {{$data->email}}
                </th>
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                   {{$data->pno}}
                </th>
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                   {{$data->days}}
                </th>
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                   {{$data->dated}}
                </th>
                <th><a href="{{ 'slip/' . $data->id }}">
                                <button type="button" class="text-yellow-400 hover:text-white border border-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 ">Slip</button>
                            </a></th>
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                   {{$data->schedule}}
                </th>
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                   {{$data->total}} AED
                </th>
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                  20%
                </th>
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                {{$data->comission}} AED
                </th>
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                {{$data->yours}} AED
                </th>
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                {{$data->paymentStatus}}
                </th>
     
              <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
    <?php echo \Carbon\Carbon::parse($data->created_at)->format('Y-m-d'); ?>
</th>
<th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
               <a href="{{ asset('Products/' . $data->fil) }}">Download</a>
                </th>

            </tr>
          
            @endforeach
          
        </tbody>
        <div>{{ $datas->links() }}</div>
    </table>
</div>

</div>
<!-- <x-UCard3/> -->


</x-app-layout>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    $(document).ready(function () {
        $('#table-search').on('input', function () {
            var searchValue = $(this).val().toLowerCase();

            $('tbody tr').each(function () {
                // Adjust the column indices based on the actual order of columns in your HTML
                var name = $(this).find('th:eq(0)').text().toLowerCase(); // Assuming Name is in the first column
                var invoice = $(this).find('th:eq(1)').text().toLowerCase(); // Assuming Invoice is in the second column
                var email = $(this).find('th:eq(2)').text().toLowerCase();
                var pno = $(this).find('th:eq(3)').text().toLowerCase();
                var dated = $(this).find('th:eq(5)').text().toLowerCase();
                   var created_at = $(this).find('th:eq(14)').text().toLowerCase();
                if (name.includes(searchValue) || invoice.includes(searchValue) || email.includes(searchValue) || pno.includes(searchValue) || dated.includes(searchValue) || created_at.includes(searchValue)) {
                    $(this).show();
                } else {
                    $(this).hide();
                }
            });
        });
    });
</script>
