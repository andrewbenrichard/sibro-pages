@extends('layouts.email')

@section('content')
    <p class=" text-lg mt-24 font-medium text-gray-900 tracking-tighter"
        style="box-sizing: border-box; border: 0 solid #e2e8f0; margin: 0; font-weight: 500; font-size: 18px; margin-top: 24px; color: #4a5566; letter-spacing: -0.05em;">
        Hi
        {{$name}} <br style="box-sizing: border-box; border: 0 solid #e2e8f0;">
        <span class="pt-8 inline-block"
            style="box-sizing: border-box; border: 0 solid #e2e8f0; display: inline-block; padding-top: 8px;">You requested
            a password reset.</span>
    </p>
    <div class="mt-16 " style="box-sizing: border-box; border: 0 solid #e2e8f0; margin-top: 16px;">
        <a class=" text-sm inline-block bg-primary px-20 py-12 no-underline  font-semibold tracking-tighter text-white rounded-lg"
            href="{{$url}}"
            style="box-sizing: border-box; border: 0 solid #e2e8f0; background-color: #5c008e; border-radius: 8px; display: inline-block; font-weight: 600; font-size: 14px; padding-top: 12px; padding-bottom: 12px; padding-left: 20px; padding-right: 20px; color: #ffffff; text-decoration: none; letter-spacing: -0.05em;">
            Reset your password
        </a>
        <p class="mt-8  text-xs font-medium text-gray-500"
            style="box-sizing: border-box; border: 0 solid #e2e8f0; margin: 0; font-weight: 500; font-size: 12px; margin-top: 8px; color: #8492a6;">
            If this is your account but you didn't request a password change please ignore this email.
        </p>
    </div>
@endsection
