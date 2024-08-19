@extends('musgravegroup.admin.base')

@section('title', 'Company Details')

@section('content')
    <div class="container mx-auto px-6 py-8">
        @foreach($forms as $form)
            <div class="bg-white shadow rounded-lg p-6 mb-6">
                <h1 class="text-2xl font-bold mb-4">{{ $form -> name_product }}</h1>
                <div class="mb-4">
                    <h2 class="text-xl font-semibold">Company name:</h2>
                    <p>{{ $form->company_name }}</p>
                </div>


                <div class="mb-4">
                    <h2 class="text-xl font-semibold">Address:</h2>
                    <p>Address Line 1: {{ $form->address_line_1 }}</p>
                    <p>Address Line 2: {{ $form->address_line_2 ?? '' }}</p>
                    <p>Town: {{ $form->town }}</p>
                    <p>County: {{ $form->country }}</p>
                    <p>Postcode: {{ $form->postcode }}</p>
                </div>

                <div class="mb-4">
                    <h2 class="text-xl font-semibold">Phone:</h2>
                    <p>(+{{ $form->dial_code }}) {{ $form->phone }}</p>
                </div>

                <div class="mb-4">
                    <h2 class="text-xl font-semibold">Email:</h2>
                    <p>{{ $form->email }}</p>
                </div>

                <div class="mb-4">
                    <h2 class="text-xl font-semibold">Product name:</h2>
                    <p>{{ $form -> product_name }}</p>
                </div>

                <div class="mb-4">
                    <h2 class="text-xl font-semibold">Description product:</h2>
                    <p>{{ $form -> description_product }}</p>
                </div>

                <div class="mb-4">
                    <h2 class="text-xl font-semibold">Description business:</h2>
                    <p>{{ $form -> description_business }}</p>
                </div>

                <a href="{{ route('admin.vacancy.location.index') }}" class="text-blue-500 hover:underline mt-4 inline-block">Back to Company List</a>
            </div>
        @endforeach
    </div>
    <div class="d-flex justify-content-center">
        {{ $forms->links('pagination::bootstrap-4') }}
    </div>
@endsection
