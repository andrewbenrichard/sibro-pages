@extends('layouts.email')

@section('content')

<p class=" text-lg mt-24 font-medium text-gray-900 tracking-tighter" style="box-sizing: border-box; border: 0 solid #e2e8f0; margin: 0; font-weight: 500; font-size: 18px; margin-top: 24px; color: #4a5566; letter-spacing: -0.05em;">Hi & welcome
    {{$name}} 🚀
    <span class="pt-8 inline-block" style="box-sizing: border-box; border: 0 solid #e2e8f0; display: inline-block; padding-top: 8px;">Thank you for choosing Sibro Shops for selling online.</span>
</p>

<p class=" text-base mt-24 font-medium text-gray-500 tracking-tighter" style="box-sizing: border-box; border: 0 solid #e2e8f0; margin: 0; font-weight: 500; font-size: 16px; margin-top: 24px; color: #8492a6; letter-spacing: -0.05em;"> Your reseller store {{$store_name}} is active at <a class=" no-underline text-primary inline-block" href="https://{{$store_url}}.sibro.ng" style="box-sizing: border-box; border: 0 solid #e2e8f0; display: inline-block; color: #5c008e; text-decoration: none;">https://{{$store_url}}.sibro.ng</a>
</p>

<p class=" text-md mt-24 font-normal text-gray-500 tracking-tighter" style="box-sizing: border-box; border: 0 solid #e2e8f0; margin: 0; font-weight: 400; margin-top: 24px; color: #8492a6; letter-spacing: -0.05em;">
    Now that you've taken your first steps, we've added some tips and guilds on how sibro works in our
    Resellers
    acedemy.
</p>


<div class="mt-16 " style="box-sizing: border-box; border: 0 solid #e2e8f0; margin-top: 16px;">
    <a class=" text-sm inline-block bg-primary px-20 py-12 no-underline  font-semibold tracking-tighter text-white rounded-lg" href="https://sibro.ng/open-reseller-app" style="box-sizing: border-box; border: 0 solid #e2e8f0; background-color: #5c008e; border-radius: 8px; display: inline-block; font-weight: 600; font-size: 14px; padding-top: 12px; padding-bottom: 12px; padding-left: 20px; padding-right: 20px; color: #ffffff; text-decoration: none; letter-spacing: -0.05em;"> Start earning
    </a>
    <a class=" text-sm inline-block bg-white  border px-20 py-12 no-underline  font-semibold tracking-tighter text-primary rounded-lg" href="https://sibro.ng/acedemy/resellers" style="box-sizing: border-box; border: 0 solid #e2e8f0; background-color: #ffffff; border-radius: 8px; border-width: 1px; display: inline-block; font-weight: 600; font-size: 14px; padding-top: 12px; padding-bottom: 12px; padding-left: 20px; padding-right: 20px; color: #5c008e; text-decoration: none; letter-spacing: -0.05em;"> Resellers acedemy
    </a>
</div>
@endsection
