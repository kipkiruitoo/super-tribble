@extends('layout.master')

@section('content')
<div class="container">
    <h1>Welcome to the sms tool</h1>
    <p>follow the steps below to send sms</p>
</div>
<div class="container">
    <div>
        <h1 class="mb-4 text-center font-black text-gray-700">STEPS</h1>
        <div class="flex">
            <div class="w-1/3 text-center px-6">
                Download Excel Format
            </div>
            <div class="flex-1 flex items-center justify-center">
                Arrow
            </div>
            <div class="w-1/3 text-center px-6">
                Upload Excel Sheet
            </div>
            <div class="flex-1 flex items-center justify-center">
                Arrow
            </div>
            <div class="w-1/3 text-center px-6">
                Define the bulk message
            </div>
            <div class="flex-1 flex items-center justify-center">
                Arrow
            </div>
            <div class="w-1/3 text-center px-6">
                Review Sms
            </div>
            <div class="flex-1 flex items-center justify-center">
                Arrow
            </div>
            <div class="w-1/3 text-center px-6">
                Track Status
            </div>
        </div>
    </div>
</div>
@endsection
