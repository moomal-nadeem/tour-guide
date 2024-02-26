<p class="m-5 lg:ml-[3rem]">Milestones</p>
<div class="flex lg:m-5 md:lg:m-5 sm:m-1 justify-center flex-wrap">
  <a href="/GNewDeal">
<div class="block m-2  w-[20rem] lg:w-[15rem] xl:w-[15rem] md:w-[15rem]  rounded-lg bg-white shadow-[0 2px 15px -3px rgba(0, 0, 0, 0.07), 0 10px 20px -2px rgba(0, 0, 0, 0.04)] ">
  <div class="p-6 text-center">
    <div class="flex justify-center items-center mb-4">
      <div class="h-12 w-12 bg-[#FF9119] text-[#4169e1] rounded-full flex items-center justify-center text-white font-bold text-lg">N</div>
    </div>

    <h5 class="mb-2 text-xl font-medium leading-tight text-neutral-800 ">
 {{ $p1 }}
 
    </h5>
    <p class="text-[#b0c4de]">New Deal</p>
  </div>
</div>
</a>
<a href="/GInprocessDeal">
<div class="block m-2  w-[20rem] lg:w-[15rem] xl:w-[15rem] md:w-[15rem]  rounded-lg bg-white shadow-[0 2px 15px -3px rgba(0, 0, 0, 0.07), 0 10px 20px -2px rgba(0, 0, 0, 0.04)] ">
  <div class="p-6 text-center">
    <div class="flex justify-center items-center mb-4">
      <div class="h-12 w-12 bg-[#FF9119] text-[#4169e1] rounded-full flex items-center justify-center text-white font-bold text-lg">I</div>
    </div>
    <h5 class="mb-2 text-xl font-medium leading-tight text-neutral-800 ">
    {{ $p4 }}
    </h5>
    <p class="text-[#b0c4de]">In Process</p>
  </div>
</div>
</a>
<a href="/GCompletedDeal">
<div class="block m-2  w-[20rem] lg:w-[15rem] xl:w-[15rem] md:w-[15rem]  rounded-lg bg-white shadow-[0 2px 15px -3px rgba(0, 0, 0, 0.07), 0 10px 20px -2px rgba(0, 0, 0, 0.04)] ">
  <div class="p-6 text-center">
    <div class="flex justify-center items-center mb-4">
      <div class="h-12 w-12 bg-[#FF9119] text-[#4169e1] rounded-full flex items-center justify-center text-white font-bold text-lg">C</div>
    </div>

    <h5 class="mb-2 text-xl font-medium leading-tight text-neutral-800 >
    {{ $p5 }}
    </h5>
    <p class="text-[#b0c4de]">Completed</p>
  </div>
</div>
</a>
<a href="/GCancleDeal">
<div class="block m-2  w-[20rem] lg:w-[15rem] xl:w-[15rem] md:w-[15rem]  rounded-lg bg-white shadow-[0 2px 15px -3px rgba(0, 0, 0, 0.07), 0 10px 20px -2px rgba(0, 0, 0, 0.04)] ">
  <div class="p-6 text-center">
    <div class="flex justify-center items-center mb-4">
      <div class="h-12 w-12 bg-[#FF9119] text-[#4169e1] rounded-full flex items-center justify-center text-white font-bold text-lg">C</div>
    </div>
    <h5 class="mb-2 text-xl font-medium leading-tight text-neutral-800 ">
    {{ $p6 }}
    </h5>
    <p class="text-[#b0c4de]">Cancel</p>
  </div>
</div>
</a>
<a href="/GAllDeal">
<div class="block m-2  w-[20rem] lg:w-[15rem] xl:w-[15rem] md:w-[15rem]  rounded-lg bg-white shadow-[0 2px 15px -3px rgba(0, 0, 0, 0.07), 0 10px 20px -2px rgba(0, 0, 0, 0.04)] ">
  <div class="p-6 text-center">
    <div class="flex justify-center items-center mb-4">
      <div class="h-12 w-12 bg-[#FF9119] text-[#4169e1] rounded-full flex items-center justify-center text-white font-bold text-lg">A</div>
    </div>

    <h5 class="mb-2 text-xl font-medium leading-tight text-neutral-800 ">
    {{ intval($p1) + intval($p2) + intval($p3) + intval($p4) + intval($p5) + intval($p6)}}



    </h5>
    <p class="text-[#b0c4de]">All Deal</p>
  </div>
</div>
</a>
<a href="/GConfirmDeal">
<div class="block m-2  w-[20rem] lg:w-[15rem] xl:w-[15rem] md:w-[15rem]  rounded-lg bg-white shadow-[0 2px 15px -3px rgba(0, 0, 0, 0.07), 0 10px 20px -2px rgba(0, 0, 0, 0.04)] ">
  <div class="p-6 text-center">
    <div class="flex justify-center items-center mb-4">
      <div class="h-12 w-12 bg-[#FF9119] text-[#4169e1] rounded-full flex items-center justify-center text-white font-bold text-lg">A</div>
    </div>

    <h5 class="mb-2 text-xl font-medium leading-tight text-neutral-800 ">
    {{ $p2 }}
    </h5>
    <p class="text-[#b0c4de]">Confirm</p>
  </div>
</div>
</a>
<a href="/GNotConfirmDeal">
<div class="block m-2  w-[20rem] lg:w-[15rem] xl:w-[15rem] md:w-[15rem]  rounded-lg bg-white shadow-[0 2px 15px -3px rgba(0, 0, 0, 0.07), 0 10px 20px -2px rgba(0, 0, 0, 0.04)] ">
  <div class="p-6 text-center">
    <div class="flex justify-center items-center mb-4">
      <div class="h-12 w-12 bg-[#FF9119] text-[#4169e1] rounded-full flex items-center justify-center text-white font-bold text-lg">A</div>
    </div>

    <h5 class="mb-2 text-xl font-medium leading-tight text-neutral-800 ">
    {{ $p3 }}
    </h5>
    <p class="text-[#b0c4de]">Not Confirm</p>
  </div>
</div>
</a>
</div>