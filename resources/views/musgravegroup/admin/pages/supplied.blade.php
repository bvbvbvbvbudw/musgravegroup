@extends('musgravegroup.admin.base')

@section('title', 'Users Applied Details')

@section('content')
    <div class="container mx-auto px-6 py-8" style="max-width: 1620px; overflow-x: scroll;">
        <div class="overflow-x-scroll">
            <table class="table-auto w-full max-w-4xl mx-auto bg-white shadow rounded-lg text-sm">
                <thead>
                <tr class="bg-gray-200">
                    <th class="px-2 py-1">Brand Name</th>
                    <th class="px-2 py-1">Company Name</th>
                    <th class="px-2 py-1">Business Address</th>
                    <th class="px-2 py-1">Phone</th>
                    <th class="px-2 py-1">Email</th>
                    <th class="px-2 py-1">Contact</th>
                    <th class="px-2 py-1">Tell About</th>
                    <th class="px-2 py-1">Payment Type</th>
                    <th class="px-2 py-1">Product Name</th>
                    <th class="px-2 py-1">Product Type</th>
                    <th class="px-2 py-1">Description (few words)</th>
                    <th class="px-2 py-1">Manufacturing Product</th>
                    <th class="px-2 py-1">Product Made Location</th>
                    <th class="px-2 py-1">Market Place</th>
                    <th class="px-2 py-1">Products Similar</th>
                    <th class="px-2 py-1">Product Fit</th>
                    <th class="px-2 py-1">Additional Comments</th>
                    <th class="px-2 py-1">Date</th>
                    <th class="px-2 py-1">Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <td class="border px-2 py-1">{{ $user->brand_name }}</td>
                        <td class="border px-2 py-1">{{ $user->company_name }}</td>
                        <td class="border px-2 py-1">{{ $user->business_address }}</td>
                        <td class="border px-2 py-1">{{ $user->phone }}</td>
                        <td class="border px-2 py-1">{{ $user->email }}</td>
                        <td class="border px-2 py-1">{{ $user->is_contact ? "Yes" : "No" }}</td>
                        <td class="border px-2 py-1">{{ $user->tell_about }}</td>
                        <td class="border px-2 py-1">
                            @switch($user->payment_type)
                                @case('prepayment')
                                    Prepayment only
                                    @break
                                @case('net')
                                    NET payment
                                    @break
                                @case('credit')
                                    Credit insurance
                                    @break
                                @default
                                    {{ $user->payment_type }}
                            @endswitch
                        </td>
                        <td class="border px-2 py-1">{{ $user->product_name }}</td>
                        <td class="border px-2 py-1">{{ $user->product_type }}</td>
                        <td class="border px-2 py-1">{{ $user->description_few }}</td>
                        <td class="border px-2 py-1">{{ $user->manufacturing_your_product }}</td>
                        <td class="border px-2 py-1">{{ $user->product_made }}</td>
                        <td class="border px-2 py-1">{{ $user->market_place }}</td>
                        <td class="border px-2 py-1">{{ $user->products_similar }}</td>
                        <td class="border px-2 py-1">{{ $user->product_fit }}</td>
                        <td class="border px-2 py-1">{{ $user->additional_comment }}</td>
                        <td class="border px-2 py-1">{{ $user->created_at }}</td>
                        <td class="border px-2 py-1">
                            <div class="flex space-x-2">
                                <form action="{{ route('admin.users.supplied.destroy', $user->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this user?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-red-500 text-white py-1 px-2 rounded hover:bg-red-600">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

        <div class="d-flex justify-content-center mt-4">
            {{ $users->links('pagination::bootstrap-4') }}
        </div>
    </div>
@endsection
